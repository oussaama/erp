<?php

namespace ERPBundle\Controller\Front\Enseignant;

use ERPBundle\Entity\Examen;
use ERPBundle\Entity\Note;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Examan controller.
 *
 */
class ExamenController extends Controller
{
    /**
     * Lists all examan entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $examens = $em->getRepository('ERPBundle:Examen')->findAll();

        return $this->render('ERPBundle:Front/Examen:index.html.twig', array(
            'examens' => $examens,
        ));
    }

    /**
     * Creates a new examan entity.
     *
     */
    public function newAction(Request $request)
    {
        $examen = new Examen();
        $form = $this->createForm('ERPBundle\Form\ExamenType', $examen);
        $form->handleRequest($request);
      //  $user = $this->get('security.token_storage')->getToken()->getUser();

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
          //  $examen->setAuteur($user);
            $examen->setQualified(0);
            $em->persist($examen);
            $em->flush();
            $this->get('session')->getFlashBag()->add('notice', 'Votre examen a été sauvegardés!');
            return $this->redirect($this->generateUrl('examen_index'));
        }

        return $this->render('ERPBundle:Front/Examen:new.html.twig', array(
            'examen' => $examen,
            'form' => $form->createView(),
        ));
    }



    /**
     * Finds and displays a examan entity.
     *
     */
    public function showAction(Examen $examan)
    {
        $deleteForm = $this->createDeleteForm($examan);

        return $this->render('ERPBundle:Front/Examen:show.html.twig', array(
            'examan' => $examan,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing examan entity.
     *
     */
    public function editAction(Request $request, Examen $examan)
    {
        $deleteForm = $this->createDeleteForm($examan);
        $editForm = $this->createForm('ERPBundle\Form\ExamenType', $examan);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $this->getDoctrine()->getManager()->flush();
            $em->flush();
            $this->get('session')->getFlashBag()->add('notice2','Votre examen a été modifier avec succées!');
            return $this->redirect($this->generateUrl('examen_index'));
        }

        return $this->render('ERPBundle:Front/Examen:edit.html.twig', array(
            'examan' => $examan,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }



    /**
     * Finds and displays a concour entity.
     *
     */
    public function affecteAction(Request $request, Examen $examan)
    {   $em = $this->getDoctrine()->getManager();
        $deleteForm = $this->createDeleteForm($examan);
        $note = new Note();

        $form = $this->createForm('ERPBundle\Form\NoteType', $note);
        $form->handleRequest($request);
    //    $user = $this->get('security.token_storage')->getToken()->getUser();
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $examan->setQualified(0);
            //$note->setClient($user);
            $note->setExamens($examan);
            $em->persist($note);
            $em->flush();
            $this->get('session')->getFlashBag()->add('notice2','Votre note a été affecté avec succées à l\'examen souhaité!');
            return $this->redirect($this->generateUrl('examen_index'));
        }
        return $this->render('ERPBundle:Front/Examen:affecte.html.twig', array(
            'examan' => $examan,
            'note' => $note,
            'form' => $form->createView(),
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



    public function deleteExamenAction(Examen $examan)
    {
        if (!$examan) {
            throw $this->createNotFoundException('No examen found');
        }
        $em = $this->getDoctrine()->getManager();
        $em->remove($examan);
        $em->flush();
        $this->get('session')->getFlashBag()->add('notice3','Votre examen a été supprimé avec succées!');
        return $this->redirect($this->generateUrl('examen_index'));
    }



}
