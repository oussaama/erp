<?php

namespace ERPBundle\Controller\Front\Enseignant;

use ERPBundle\Entity\Cour;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Cour controller.
 *
 */
class CourController extends Controller
{
    /**
     * Lists all cour entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $cours = $em->getRepository('ERPBundle:Cour')->findBy(array('enseignant' => $this->getUser()));
        return $this->render('ERPBundle:Front/Cour:index.html.twig', array(
            'cours' => $cours,
        ));
    }

    /**
     * Creates a new cour entity.
     *
     */
    public function newAction(Request $request)
    {
        $form = $this->createForm('ERPBundle\Form\CourType');
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $cour = $form->getData();
            $cour->uploadCour($this->getUser()->getId());
            $cour->setEnseignant($this->getUser());
            $em->persist($cour);
            $em->flush();
            $this->get('session')->getFlashBag()->add('notice', 'Votre cour a été sauvegardés!');
            return $this->redirect($this->generateUrl('cour_index'));

        }

        return $this->render('ERPBundle:Front/Cour:new.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a cour entity.
     *
     */
    public function showAction(Cour $cour)
    {

        return $this->render('ERPBundle:Front/Cour:show.html.twig', array(
            'cour' => $cour,
        ));
    }

    /**
     * Displays a form to edit an existing cour entity.
     *
     */
    public function editAction(Request $request, Cour $cour)
    {
        $editForm = $this->createForm('ERPBundle\Form\CourType', $cour);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $this->getDoctrine()->getManager()->flush();
            $em->flush();
            $this->get('session')->getFlashBag()->add('notice2', 'Votre cour a été modifier avec succées!');
            return $this->redirect($this->generateUrl('cour_index'));
        }

        return $this->render('ERPBundle:Front/Cour:edit.html.twig', array(
            'cour' => $cour,
            'edit_form' => $editForm->createView(),
        ));
    }

    /**
     * Deletes a cour entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $cour = $em->getRepository('ERPBundle:Cour')->findOneById($id);
        if ($cour->getEnabled() == 1) {
            $cour->setEnabled(0);
        } else {
            $cour->setEnabled(1);
        }
        $em->flush();
        return $this->redirectToRoute('cour_index');
    }


}
