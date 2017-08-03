<?php

namespace ERPBundle\Controller\Admin;

use ERPBundle\Entity\UniteEnseignement;
use ERPBundle\Form\insert\typeMatiere;
use ERPBundle\Form\insert\typeUnite;
use ERPBundle\Entity\Matiere;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminUniteController extends Controller
{
    //Unite d'enseignement
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $unite = $em->getRepository('ERPBundle:UniteEnseignement')->findBy(array('etablissement' => $this->getUser()->getEtablissement()));
        return $this->render('ERPBundle:Admin/UniteEnseignement:index.html.twig', array('unite' => $unite));
    }

    public function addUniteAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(typeUnite::class, new UniteEnseignement());
        $form->handleRequest($request);
        if ($request->getMethod() == 'POST') {
            $unite = new UniteEnseignement();
            $unite = $form->getData();
            $unite->setDateAjoute(new \DateTime());
            $unite->setDateModif(new \DateTime());
            $unite->setEtablissement($this->getUser()->getEtablissement());
            $unite->setEnabled(1);
            $em->persist($unite);
            $em->flush();
            return $this->redirect($this->generateUrl('admin_Unite_index'));
        }
        return $this->render('ERPBundle:Admin/UniteEnseignement:add.html.twig', array('form' => $form->createView()));
    }

    public function updateUniteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $unite = $em->getRepository('ERPBundle:UniteEnseignement')->findOneById($id);
        $form = $this->createForm(typeUnite::class, $unite);
        $form->handleRequest($request);
        if ($request->getMethod() == 'POST') {
            if ($form->isValid()) {
                $unit = $form->getData();
                $unit->setDateModif(new \DateTime());
                $em->flush();
                return $this->redirect($this->generateUrl('admin_Unite_index'));
            }
        }
        return $this->render('ERPBundle:Admin/UniteEnseignement:update.html.twig', array('form' => $form->createView(), 'id' => $id));
    }

    public function deleteUniteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $unite = $em->getRepository('ERPBundle:UniteEnseignement')->findOneById($id);
        if ($unite->getEnabled() == 1) {
            $unite->setEnabled(0);
        } else {
            $unite->setEnabled(1);
        }
        $em->flush();
        return $this->redirect($this->generateUrl('admin_Unite_index'));
    }


    //Matiere
    public function addMatiereAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(typeMatiere::class, new Matiere());
        $form->handleRequest($request);
        if ($request->getMethod() == 'POST') {
            $unite = new Matiere();
            $unite = $form->getData();
            $unite->setDateAjoute(new \DateTime());
            $unite->setDateModif(new \DateTime());
            $unite->setEnabled(1);
            $unit = $em->getRepository('ERPBundle:UniteEnseignement')->findOneById($id);
            $unite->setUnite($unit);
            $em->persist($unite);
            $em->flush();
            return $this->redirect($this->generateUrl('admin_Unite_index'));
        }
        return $this->render('ERPBundle:Admin/UniteEnseignement/matiere:add.html.twig', array('form' => $form->createView(),'id'=>$id));
    }

    public function showMatiereAction($id){
        $em = $this->getDoctrine()->getManager();
        $matiere = $em->getRepository('ERPBundle:Matiere')->findOneById($id);
        return $this->render('ERPBundle:Admin/UniteEnseignement/matiere:show.html.twig', array('matiere'=>$matiere));
    }

    public function updateMatiereAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $mat = $em->getRepository('ERPBundle:Matiere')->findOneById($id);
        $form = $this->createForm(typeMatiere::class, $mat);
        $form->handleRequest($request);
        if ($request->getMethod() == 'POST') {
            if ($form->isValid()) {
                $matiere = $form->getData();
                $matiere->setDateModif(new \DateTime());
                $em->flush();
                return $this->redirect($this->generateUrl('admin_Unite_index'));
            }
        }
        return $this->render('ERPBundle:Admin/UniteEnseignement/matiere:update.html.twig', array('form' => $form->createView(), 'id' => $id));
    }

    public function deleteMatiereAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $matiere = $em->getRepository('ERPBundle:Matiere')->findOneById($id);
        if ($matiere->getEnabled() == 1) {
            $matiere->setEnabled(0);
        } else {
            $matiere->setEnabled(1);
        }
        $em->flush();
        return $this->redirect($this->generateUrl('admin_Unite_index'));
    }

}