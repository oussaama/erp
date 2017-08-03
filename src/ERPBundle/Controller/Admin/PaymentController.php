<?php

namespace ERPBundle\Controller\Admin;

use ERPBundle\Entity\Payment;
use ERPBundle\Entity\Slice;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Payment controller.
 *
 */
class PaymentController extends Controller
{
    /**
     * Lists all payment entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $payment = array();
        $etudiant = $em->getRepository('ERPBundle:Etudiant')->findBy(array('paiment' => 1));
        for ($i = 0; $i < count($etudiant); $i++) {
            $payment[$i]['id'] = $etudiant[$i]->getId();
            $payment[$i]['nom'] = $etudiant[$i]->getNom() . ' ' . $etudiant[$i]->getPrenom();
            $payment[$i]['cin'] = $etudiant[$i]->getCin();
            $payment[$i]['cie'] = $etudiant[$i]->getCie();
            $payment[$i]['class'] = $etudiant[$i]->getClasse()->getNomClass();
            $payment[$i]['montant'] = $this->calculMontant($etudiant[$i]);
            $payment[$i]['reste'] = $this->calculReste($etudiant[$i], $payment[$i]['montant']);
            if ($payment[$i]['reste'] > 0) {
                $payment[$i]['etat'] = 'En Cours';
            } else {
                $payment[$i]['etat'] = 'Valider';
            }
        }
        return $this->render('ERPBundle:Admin/payment:index.html.twig', array('payments' => $payment));
    }


    public
    function calculMontant($etudiant)
    {
        $em = $this->getDoctrine()->getManager();
        $montant = 0;
        $montants = $em->getRepository('ERPBundle:Payment')->findBy(array('etudiant' => $etudiant));
        foreach ($montants as $m) {
            $montant += $m->getSolde();
        }
        return $montant;
    }

    public
    function calculReste($etudiant, $montant)
    {
        $em = $this->getDoctrine()->getManager();
        $total = $em->getRepository('ERPBundle:Slice')->findOneBy(array('etudiant' => $etudiant));
        $reste = $total->getTotal() - $montant;
        return $reste;
    }

    /**
     * Creates a new package entity.
     *
     */
    public function newAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $payments = $em->getRepository('ERPBundle:Payment')->findAll();
        $payments_slices = $em->getRepository('ERPBundle:Slice')->findAll();
        $slices = $em->getRepository('ERPBundle:Slice')->findAll();
        $payment = new Payment();
        $form = $this->createForm('ERPBundle\Form\insert\PaymentType', $payment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //        $form->getData()->setDate(new \DateTime());
            $em = $this->getDoctrine()->getManager();
            $em->persist($payment);
            $em->flush();
            $this->get('session')->getFlashBag()->add('notice', 'Votre paiement a été sauvegardés!');
            return $this->redirectToRoute('admin_payment_index');
        }
        // $dataTime = new \DateTime();
        return $this->render('ERPBundle:Admin/payment:new.html.twig', array(
            'payment' => $payment,
            'payments' => $payments,
            'payments_slices' => $payments_slices,
            'slices' => $slices,
            //  'date' => ($dataTime->format('d N Y H:i:s')),
            'form' => $form->createView(),
        ));
    }


    /**
     * Finds and displays a payment entity.
     *
     */
    public
    function showAction(Payment $payment)
    {
        $deleteForm = $this->createDeleteForm($payment);

        return $this->render('ERPBundle:Admin/payment:show.html.twig', array(
            'payment' => $payment,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    public
    function editAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $payment = $em->getRepository('ERPBundle:Payment')->findOneById($id);
        $deleteForm = $this->createDeleteForm($payment);
        $editForm = $this->createForm('ERPBundle\Form\insert\PaymentType', $payment);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em->flush();
            $this->get('session')->getFlashBag()->add('notice2', 'Votre paiement a été modifier avec succées!');
            return $this->redirect($this->generateUrl('admin_payment_index'));
        }

        return $this->render('ERPBundle:Admin/payment:edit.html.twig', array(
            'id' => $id,
            'form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView()
        ));
    }

    /**
     * Deletes a payment entity.
     *
     */
    public
    function deleteAction(Request $request, Payment $payment)
    {
        $form = $this->createDeleteForm($payment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($payment);
            $em->flush();
        }

        return $this->redirectToRoute('admin_payment_index');
    }

    /**
     * Creates a form to delete a payment entity.
     *
     * @param Payment $payment The payment entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private
    function createDeleteForm(Payment $payment)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_payment_delete', array('id' => $payment->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }
}
