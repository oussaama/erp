<?php

namespace ERPBundle\Controller\Front\Enseignant;

use ERPBundle\Entity\Note;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use html2pdf\lib\Html2Pdf\Html2Pdf;
use Symfony\Component\HttpFoundation\Response;

/**
 * Note controller.
 *
 */
class NoteController extends Controller
{
    /**
     * Lists all note entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $notes = $em->getRepository('ERPBundle:Note')->findAll();

        return $this->render('ERPBundle:Front/Note:index.html.twig', array(
            'notes' => $notes,
        ));
    }

    /**
     * Creates a new note entity.
     *
     */
    public function newAction(Request $request)
    {
        $note = new Note();
        $form = $this->createForm('ERPBundle\Form\NoteType', $note);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($note);
            $em->flush();
            return $this->redirect($this->generateUrl('note_index'));
        }

        return $this->render('ERPBundle:Front/Note:new.html.twig', array(
            'note' => $note,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a note entity.
     *
     */
    public function showAction(Note $note)
    {
        $deleteForm = $this->createDeleteForm($note);

        return $this->render('ERPBundle:Front/Note:show.html.twig', array(
            'note' => $note,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing note entity.
     *
     */
    public function editAction(Request $request, Note $note)
    {
        $deleteForm = $this->createDeleteForm($note);
        $editForm = $this->createForm('ERPBundle\Form\NoteType', $note);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirect($this->generateUrl('note_index'));
        }

        return $this->render('ERPBundle:Front/Note:edit.html.twig', array(
            'note' => $note,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a note entity.
     *
     */
    public function deleteAction(Request $request, Note $note)
    {
        $form = $this->createDeleteForm($note);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($note);
            $em->flush();
        }

        return $this->redirectToRoute('note_index');
    }

    /**
     * Creates a form to delete a note entity.
     *
     * @param Note $note The note entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Note $note)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('note_delete', array('id' => $note->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }




    public function pdfAction()
    {
        //on stocke la vue à convertir en PDF, en n'oubliant pas les paramètres twig si la vue comporte des données dynamiques
        $html = $this->renderView('ERPBundle:Front/Note:pdf.html.twig');
        $pdfGenerator = $this->get('spraed.pdf.generator');

        return new Response($pdfGenerator->generatePDF($html),
            200,
            array(
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename="out.pdf"'
            )
        );
    }






}
