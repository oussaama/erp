<?php

namespace ERPBundle\Controller\Admin;

use ERPBundle\Entity\Status;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Status controller.
 *
 */
class StatusController extends Controller
{
    /**
     * Lists all status entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $statuses = $em->getRepository('ERPBundle:Status')->findAll();

        return $this->render('ERPBundle:Admin/status:index.html.twig', array(
            'statuses' => $statuses,
        ));
    }

    /**
     * Creates a new status entity.
     *
     */
    public function newAction(Request $request)
    {
        $status = new Status();
        $form = $this->createForm('ERPBundle\Form\insert\StatusType', $status);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($status);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_status_index'));
        }

        return $this->render('ERPBundle:Admin/status:new.html.twig', array(
            'status' => $status,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a status entity.
     *
     */
    public function showAction(Status $status)
    {
        $deleteForm = $this->createDeleteForm($status);

        return $this->render('ERPBundle:Admin/status:show.html.twig', array(
            'status' => $status,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing status entity.
     *
     */
    public function editAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $status = $em->getRepository('ERPBundle:Status')->findOneById($id);
        $deleteForm = $this->createDeleteForm($status);
        $editForm = $this->createForm('ERPBundle\Form\insert\StatusType', $status);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em->flush();

          //  return $this->redirectToRoute('admin_status_edit', array('id' => $status->getId()));
            return $this->redirect($this->generateUrl('admin_status_index'));
        }

        return $this->render('ERPBundle:Admin/status:edit.html.twig', array(
            'id' => $id,
            'form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }


    /**
     * Deletes a status entity.
     *
     */
    public function deleteAction(Request $request, Status $status)
    {
        $form = $this->createDeleteForm($status);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($status);
            $em->flush();
        }

        return $this->redirectToRoute('admin_status_index');
    }

    /**
     * Creates a form to delete a status entity.
     *
     * @param Status $status The status entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Status $status)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_status_delete', array('id' => $status->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
