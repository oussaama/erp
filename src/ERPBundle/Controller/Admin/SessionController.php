<?php

namespace ERPBundle\Controller\Admin;

use ERPBundle\Entity\Session;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Session controller.
 *
 */
class SessionController extends Controller
{
    /**
     * Lists all session entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $sessions = $em->getRepository('ERPBundle:Session')->findAll();

        return $this->render('ERPBundle:Front/Session:index.html.twig', array(
            'sessions' => $sessions,
        ));
    }

    /**
     * Creates a new session entity.
     *
     */
    public function newAction(Request $request)
    {
        $session = new Session();
        $form = $this->createForm('ERPBundle\Form\SessionType', $session);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($session);
            $em->flush();
            $this->get('session')->getFlashBag()->add('notice', 'Votre session a été sauvegardés!');
            return $this->redirect($this->generateUrl('session_index'));
        }

        return $this->render('ERPBundle:Front/Session:new.html.twig', array(
            'session' => $session,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a session entity.
     *
     */
    public function showAction(Session $session)
    {
        $deleteForm = $this->createDeleteForm($session);

        return $this->render('ERPBundle:Front/Session:show.html.twig', array(
            'session' => $session,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing session entity.
     *
     */
    public function editAction(Request $request, Session $session)
    {
        $deleteForm = $this->createDeleteForm($session);
        $editForm = $this->createForm('ERPBundle\Form\SessionType', $session);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $this->getDoctrine()->getManager()->flush();
            $em->flush();
            $this->get('session')->getFlashBag()->add('notice2','Votre session a été modifier avec succées!');
            return $this->redirect($this->generateUrl('session_index'));
        }

        return $this->render('ERPBundle:Front/Session:edit.html.twig', array(
            'session' => $session,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a session entity.
     *
     */
    public function deleteAction(Request $request, Session $session)
    {
        $form = $this->createDeleteForm($session);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($session);
            $em->flush();
        }

        return $this->redirectToRoute('session_index');
    }

    /**
     * Creates a form to delete a session entity.
     *
     * @param Session $session The session entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Session $session)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('session_delete', array('id' => $session->getId())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }
}