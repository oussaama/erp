<?php

namespace ERPBundle\Controller\Front\Enseignant;

use ERPBundle\Entity\Semestre;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Semestre controller.
 *
 */
class SemestreController extends Controller
{
    /**
     * Lists all semestre entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $semestres = $em->getRepository('ERPBundle:Semestre')->findAll();

        return $this->render('ERPBundle:Front/Semestre:index.html.twig', array(
            'semestres' => $semestres,
        ));
    }

    /**
     * Creates a new semestre entity.
     *
     */
    public function newAction(Request $request)
    {
        $semestre = new Semestre();
        $form = $this->createForm('ERPBundle\Form\SemestreType', $semestre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($semestre);
            $em->flush();
            $this->get('session')->getFlashBag()->add('notice', 'Votre semestre a été sauvegardés!');
            return $this->redirect($this->generateUrl('semestre_index'));
        }

        return $this->render('ERPBundle:Front/Semestre:new.html.twig', array(
            'semestre' => $semestre,
            'form' => $form->createView(),
        ));
    }




    /**
     * Finds and displays a semestre entity.
     *
     */
    public function showAction(Semestre $semestre)
    {
        $deleteForm = $this->createDeleteForm($semestre);

        return $this->render('ERPBundle:Front/Semestre:show.html.twig', array(
            'semestre' => $semestre,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing semestre entity.
     *
     */
    public function editAction(Request $request, Semestre $semestre)
    {
        $deleteForm = $this->createDeleteForm($semestre);
        $editForm = $this->createForm('ERPBundle\Form\SemestreType', $semestre);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $this->getDoctrine()->getManager()->flush();
            $em->flush();
            $this->get('session')->getFlashBag()->add('notice2','Votre semestre a été modifier avec succées!');
            return $this->redirect($this->generateUrl('semestre_index'));
        }

        return $this->render('ERPBundle:Front/Semestre:edit.html.twig', array(
            'semestre' => $semestre,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }



    /**
     * Deletes a semestre entity.
     *
     */
    public function deleteAction(Request $request, Semestre $semestre)
    {
        $form = $this->createDeleteForm($semestre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($semestre);
            $em->flush();
        }

        return $this->redirectToRoute('semestre_index');
    }

    /**
     * Creates a form to delete a semestre entity.
     *
     * @param Semestre $semestre The semestre entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Semestre $semestre)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('semestre_delete', array('id' => $semestre->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
