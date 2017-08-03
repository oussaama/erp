<?php

namespace ERPBundle\Controller\Admin;

use ERPBundle\Entity\Examen;
use ERPBundle\Entity\Note;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Examan controller.
 *
 */
class AdminExamenController extends Controller
{

    /**
     * Lists all examan entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $examens = $em->getRepository('ERPBundle:Examen')->findAll();

        return $this->render('ERPBundle:Admin/Examen:index.html.twig', array(
            'examens' => $examens,
        ));
    }


    /**
     * Displays a form to qualifier examens an existing examan entity.
     *
     */
    public function qualifierAction(Request $request, Examen $examan)
    {
        $deleteForm = $this->createDeleteForm($examan);
        $editForm = $this->createForm('ERPBundle\Form\update\ExamenType', $examan);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $this->getDoctrine()->getManager()->flush();
            $em->flush();
            $this->get('session')->getFlashBag()->add('notice','Votre examen a été qualifier avec succées!');
            return $this->redirect($this->generateUrl('admin_Examen'));
        }
        return $this->render('ERPBundle:Admin/Examen:qualifier.html.twig', array(
            'examan' => $examan,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }


    /**
     * Deletes a examan entity.
     *
     */
    public function deleteAction(Request $request, Examen $examan)
    {
        $form = $this->createDeleteForm($examan);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($examan);
            $em->flush();
        }

        return $this->redirectToRoute('examen_index');
    }

    /**
     * Creates a form to delete a examan entity.
     *
     * @param Examen $examan The examan entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Examen $examan)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('examen_delete', array('id' => $examan->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
