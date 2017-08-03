<?php

namespace ERPBundle\Controller\Admin;

use ERPBundle\Entity\Payment;
use ERPBundle\Entity\Slice;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Slice controller.
 *
 */
class SliceController extends Controller
{
    /**
     * Lists all slice entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $slice = $em->getRepository('ERPBundle:Slice')->findAll();
        return $this->render('ERPBundle:Admin/slice:index.html.twig', array('slice' => $slice));
    }

    /**
     * Creates a new slice entity.
     *
     */
    public function newAction(Request $request)
    {
        $slice = new Slice();
        $form = $this->createForm('ERPBundle\Form\insert\SliceType', $slice);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();;
          //  $exp = $form->getData()->getCost1()+$form->getData()->getCost2();
          //  $slice->setTotal($exp);
            $em->persist($slice);
            $this->get('session')->getFlashBag()->add('notice', 'Votre tranche a été sauvegardés!');
            $em->flush();

            return $this->redirect($this->generateUrl('admin_slice_index'));
        }

        return $this->render('ERPBundle:Admin/slice:new.html.twig', array('slice' => $slice, 'form' => $form->createView()));
    }

    /**
     * Finds and displays a slice entity.
     *
     */
    public function showAction(Slice $slice)
    {
        $deleteForm = $this->createDeleteForm($slice);
        return $this->render('ERPBundle:Admin/slice:show.html.twig', array('slice' => $slice, 'delete_form' => $deleteForm->createView()));
    }

    /**
     * Displays a form to edit an existing slice entity.
     *
     */
    public function editAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $slice = $em->getRepository('ERPBundle:Slice')->findOneById($id);
        $deleteForm = $this->createDeleteForm($slice);
        $editForm = $this->createForm('ERPBundle\Form\insert\SliceType', $slice);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
         //   $exp = $editForm->getData()->getCost1()+$editForm->getData()->getCost2();
          //  $slice->setTotal($exp);
            $em->flush();
            $this->get('session')->getFlashBag()->add('notice2','Votre tranche a été modifier avec succées!');
            return $this->redirect($this->generateUrl('admin_slice_index'));
        }

        return $this->render('ERPBundle:Admin/slice:edit.html.twig', array('id' => $id, 'form' => $editForm->createView(), 'delete_form' => $deleteForm->createView()));
    }


    /**
     * Finds and displays a concour entity.
     *
     */
    public function paymentAction(Request $request, Slice $slice)
    {   $em = $this->getDoctrine()->getManager();
        $deleteForm = $this->createDeleteForm($slice);
        $payments = new Payment();

        $form = $this->createForm('ERPBundle\Form\insert\PaymentType', $payments);
        $form->handleRequest($request);
        //    $user = $this->get('security.token_storage')->getToken()->getUser();
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $payments->setSlices($slice);
            $payments->setQualified(1);
            $slice->setQualified(1);
            $em->persist($payments);
            $em->flush();
            $this->get('session')->getFlashBag()->add('notice','Votre paiement a été sauvegardée avec succées à la tranche souhaité!');
            return $this->redirect($this->generateUrl('admin_slice_index'));
        }
        return $this->render('ERPBundle:Admin/slice:payment.html.twig', array(
            'payments' => $payments,
            'slice' => $slice,
            'form' => $form->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }






    /**
     * Deletes a slice entity.
     *
     */
    public function deleteAction(Request $request, Slice $slice)
    {
        $form = $this->createDeleteForm($slice);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($slice);
            $em->flush();
        }

        return $this->redirectToRoute('admin_slice_index');
    }

    /**
     * Creates a form to delete a slice entity.
     *
     * @param Slice $slice The slice entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Slice $slice)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_slice_delete', array('id' => $slice->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
