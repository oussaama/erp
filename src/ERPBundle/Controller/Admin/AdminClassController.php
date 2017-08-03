<?php

namespace ERPBundle\Controller\Admin;

use Symfony\Component\HttpFoundation\Request;
use ERPBundle\Entity\Classe;
use ERPBundle\Form\insert\typeClasse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdminClassController extends Controller
{

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $classe = $em->getRepository('ERPBundle:Classe')->findBy(array('etablissment' => $this->getUser()->getEtablissement()));
        return $this->render('ERPBundle:Admin/Class:index.html.twig', array('classe' => $classe));
    }

    public function addClassAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(typeClasse::class, new Classe());
        $form->handleRequest($request);
        if ($request->getMethod() == 'POST') {
            $classe = new Classe();
            $classe = $form->getData();
            $classe->setDateAjoute(new \DateTime());
            $classe->setDateModif(new \DateTime());
            $classe->setEtablissment($this->getUser()->getEtablissement());
            $classe->setEnabled(1);
            $em->persist($classe);
            $em->flush();
            return $this->redirect($this->generateUrl('admin_Class_index'));
        }
        return $this->render('ERPBundle:Admin/Class:add.html.twig', array('form' => $form->createView()));
    }

    public function updateClassAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $classe = $em->getRepository('ERPBundle:Classe')->findOneById(array($id));
        $form = $this->createForm(typeClasse::class, $classe);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em->flush();
            return $this->redirect($this->generateUrl('admin_Class_index'));
        }
        return $this->render('ERPBundle:Admin/Class:update.html.twig', array('form' => $form->createView(), 'id' => $id));
    }

    public function deleteClassAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $classe = $em->getRepository('ERPBundle:Classe')->findOneById($id);
        if ($classe->getEnabled() == 1) {
            $classe->setEnabled(0);
        } else {
            $classe->setEnabled(1);
        }
        $em->flush();
        return $this->redirect($this->generateUrl('admin_Class_index'));
    }

    public function EtudiantClassAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $etudiants = $em->getRepository('ERPBundle:Etudiant')->findBy(array('classe'=>$id));
        return $this->render('ERPBundle:Admin/Class:etudiantList.html.twig', array('etudiant'=> $etudiants));
    }
}
