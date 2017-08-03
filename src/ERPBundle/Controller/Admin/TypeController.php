<?php

namespace ERPBundle\Controller\Admin;

use ERPBundle\Entity\Type;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Type controller.
 *
 */
class TypeController extends Controller
{
    /**
     * Lists all type entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $types = $em->getRepository('ERPBundle:Type')->findAll();

        return $this->render('ERPBundle:Admin/type:index.html.twig', array(
            'types' => $types,
        ));
    }

    /**
     * Creates a new type entity.
     *
     */
    public function newAction(Request $request)
    {
        $type = new Type();
        $form = $this->createForm('ERPBundle\Form\insert\TypeType', $type);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($type);
            $em->flush();

            return $this->redirectToRoute('admin_type_show', array('id' => $type->getId()));
        }

        return $this->render('ERPBundle:Admin/type:new.html.twig', array(
            'type' => $type,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a type entity.
     *
     */
    public function showAction(Type $type)
    {
        $deleteForm = $this->createDeleteForm($type);

        return $this->render('ERPBundle:Admin/type:show.html.twig', array(
            'type' => $type,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing type entity.
     *
     */
    public function editAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $type = $em->getRepository('ERPBundle:Type')->findOneById($id);
        $deleteForm = $this->createDeleteForm($type);
        $editForm = $this->createForm('ERPBundle\Form\insert\TypeType', $type);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirect($this->generateUrl('admin_type_index'));
        }

        return $this->render('ERPBundle:Admin/type:edit.html.twig', array(
            'id' => $id,
            'form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a type entity.
     *
     */
    public function deleteAction(Request $request, Type $type)
    {
        $form = $this->createDeleteForm($type);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($type);
            $em->flush();
        }

        return $this->redirectToRoute('admin_type_index');
    }

    /**
     * Creates a form to delete a type entity.
     *
     * @param Type $type The type entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Type $type)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_type_delete', array('id' => $type->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
