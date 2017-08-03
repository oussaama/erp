<?php

namespace ERPBundle\Controller\Front\Enseignant;

use ERPBundle\Entity\Appsense;
use ERPBundle\Entity\Classe;
use ERPBundle\Entity\Etudiant;
use ERPBundle\Form\insert\typeClasse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Appsense controller.
 *
 */
class AppsenseController extends Controller
{


    /**
     * Creates a new appsense entity.
     *
     */
    public function newAction(Request $request)
    {
        $appsense = new Appsense();
        $form = $this->createForm('ERPBundle\Form\AppsenseType', $appsense);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($appsense);
            $em->flush();
            return $this->redirect($this->generateUrl('appsense_index'));
        }

        return $this->render('ERPBundle:Front/Appsense:new.html.twig', array(
            'appsense' => $appsense,
            'form' => $form->createView(),
        ));
    }

    public function EtudiantClassAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $classe = $em->getRepository('ERPBundle:Classe')->findBy(array('etablissment' => $this->getUser()->getEtablissement()));
        $etudiants = $em->getRepository('ERPBundle:Etudiant')->findBy(array('classe'=>$id));
        return $this->render('ERPBundle:Front/Appsense/Class:etudiantList.html.twig', array('etudiant'=> $etudiants, 'classe' => $classe));
    }

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $classe = $em->getRepository('ERPBundle:Classe')->findBy(array('etablissment' => $this->getUser()->getEtablissement()));
        return $this->render('ERPBundle:Front/Appsense/Class:list.html.twig', array('classe' => $classe));
    }


    /**
     * Finds and displays a absence to student.
     *
     */
    public function affecteAbsenceAction(Request $request, Etudiant $etudiant)
    {   $em = $this->getDoctrine()->getManager();

        $appsense = new Appsense();

        $form = $this->createForm('ERPBundle\Form\AppsenseType', $appsense);
        $form->handleRequest($request);
        //    $user = $this->get('security.token_storage')->getToken()->getUser();
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
          //  $examan->setQualified(0);
            //$note->setClient($user);
           // $note->setExamens($examan);
            $em->persist($appsense);
            $em->flush();
            $this->get('session')->getFlashBag()->add('notice2','Votre abcense a été affecté avec succées à l\'étudiant souhaité!');
            return $this->redirect($this->generateUrl('appsense_index'));
        }
        return $this->render('ERPBundle:Front/Appsense/Class:affecte.html.twig', array(
            'etudiant' => $etudiant,
            'appsense' => $appsense,
            'form' => $form->createView(),
        ));
    }



    /**
     * Finds and displays a appsense entity.
     *
     */
    public function showAction(Appsense $appsense)
    {
        $deleteForm = $this->createDeleteForm($appsense);

        return $this->render('ERPBundle:Front/Appsense:show.html.twig', array(
            'appsense' => $appsense,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing appsense entity.
     *
     */
    public function editAction(Request $request, Appsense $appsense)
    {
        $deleteForm = $this->createDeleteForm($appsense);
        $editForm = $this->createForm('ERPBundle\Form\AppsenseType', $appsense);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            return $this->redirect($this->generateUrl('appsense_index'));
        }

        return $this->render('ERPBundle:Front/Appsense:edit.html.twig', array(
            'appsense' => $appsense,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a appsense entity.
     *
     */
    public function deleteAction(Request $request, Appsense $appsense)
    {
        $form = $this->createDeleteForm($appsense);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($appsense);
            $em->flush();
        }

        return $this->redirectToRoute('appsense_index');
    }

    /**
     * Creates a form to delete a appsense entity.
     *
     * @param Appsense $appsense The appsense entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Appsense $appsense)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('appsense_delete', array('id' => $appsense->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
