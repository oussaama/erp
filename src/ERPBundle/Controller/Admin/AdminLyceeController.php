<?php

namespace ERPBundle\Controller\Admin;

use ERPBundle\Entity\Employee;
use ERPBundle\Entity\Enseignant;
use ERPBundle\Entity\Entreprise;
use ERPBundle\Entity\Etudiant;
use ERPBundle\Entity\Parents;
use ERPBundle\Form\insert\typeEmployee;
use ERPBundle\Form\insert\typeEnseignant;
use ERPBundle\Form\insert\typeEtudiant;
use ERPBundle\Form\insert\typeParent;
use ERPBundle\Form\insert\typeEntreprise;
use ERPBundle\Form\update\typeEmployeeEdit;
use ERPBundle\Form\update\typeEnseignantEdit;
use ERPBundle\Form\update\typeParentEdit;
use ERPBundle\Form\update\typeEntrepriseEdit;
use ERPBundle\Form\update\typeEtudiantEdit;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminLyceeController extends Controller
{
    public function indexAction()
    {
        return $this->render('ERPBundle:Admin/universite:index.html.twig');
    }
    public function deleteCompteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $client = $em->getRepository('ERPBundle:User')->findOneById($id);
        $direction="";
        if ($client->isEnabled() == 1) {
            $client->setEnabled(0);
        } else {
            $client->setEnabled(1);
        }
        $em->flush();
        if($client->getRoles()[0] == "ROLE_EMPLOYEE" ) {
            $direction= 'admin_universite_Employee';
        }else if($client->getRoles()[0] == "ROLE_ENSEIGNANT"){
            $direction= 'admin_universite_Enseignant';
        }else if($client->getRoles()[0] == "ROLE_ETUDIANT"|| $client->getRoles()[0] == "ROLE_PARENT"){
            $direction= 'admin_universite_Etudiant';
        }elseif($client->getRoles()[0] == "ROLE_ENTREPRISE"){
            $direction= 'admin_universite_Entreprise';
        }
        return $this->redirect($this->generateUrl($direction));
    }

    //Employee
    public function EmployeeAction()
    {
        $em =$this->getDoctrine()->getManager();
        $employee = $em->getRepository('ERPBundle:Employee')->findBy(array('Etablissement'=>$this->getUser()->getEtablissement()));
        return $this->render('ERPBundle:Admin/universite/employee:index.html.twig',array('employee'=>$employee));
    }
    public function addEmployeeAction()
    {
        $form = $this->createForm(typeEmployee::class,new Employee());
        $form->getData()->setEtablissement($this->getUser()->getEtablissement());
        return $this->render('ERPBundle:Admin/universite/employee:add.html.twig',array('form'=>$form->createView()));
    }
    public function updateEmployeeAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $employee = $em->getRepository('ERPBundle:Employee')->findOneById($id);
        $form = $this->createForm(typeEmployeeEdit::class, $employee);
        $form->handleRequest($request);
        if ($request->getMethod() == 'POST') {
            if ($form->isValid()) {
                $em->flush();
                return $this->redirect($this->generateUrl('admin_universite_Employee'));
            }
        }
        return $this->render('ERPBundle:Admin/universite/employee:update.html.twig', array('form' => $form->createView(), 'id' => $id));
    }


    //Enseignant
    public function EnseignantAction()
    {
        $em =$this->getDoctrine()->getManager();
        $enseignant = $em->getRepository('ERPBundle:Enseignant')->findBy(array('Etablissement'=>$this->getUser()->getEtablissement()));
        return $this->render('ERPBundle:Admin/universite/enseignant:index.html.twig',array('enseignant'=>$enseignant));
    }
    public function addEnseignantAction()
    {
        $form = $this->createForm(typeEnseignant::class,new Enseignant());
        $form->getData()->setEtablissement($this->getUser()->getEtablissement());
        return $this->render('ERPBundle:Admin/universite/enseignant:add.html.twig',array('form'=>$form->createView()));
    }
    public function updateEnseignantAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $enseignant = $em->getRepository('ERPBundle:Enseignant')->findOneById($id);
        $form = $this->createForm(typeEnseignantEdit::class, $enseignant);
        $form->handleRequest($request);
        if ($request->getMethod() == 'POST') {
            if ($form->isValid()) {
                $em->flush();
                return $this->redirect($this->generateUrl('admin_universite_Enseignant'));
            }
        }
        return $this->render('ERPBundle:Admin/universite/enseignant:update.html.twig', array('form' => $form->createView(), 'id' => $id));
    }


    //etudiant
    public function EtudiantAction()
    {
        $em =$this->getDoctrine()->getManager();
        $etudiant = $em->getRepository('ERPBundle:Etudiant')->findBy(array('Etablissement'=>$this->getUser()->getEtablissement()));
        return $this->render('ERPBundle:Admin/universite/etudiant:index.html.twig',array('etudiant'=>$etudiant));
    }
    public function addEtudiantAction()
    {
        $form = $this->createForm(typeEtudiant::class,new Etudiant());
        $form->getData()->setEtablissement($this->getUser()->getEtablissement());
        return $this->render('ERPBundle:Admin/universite/etudiant:add.html.twig',array('form'=>$form->createView()));
    }
    public function updateEtudiantAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $etudiant = $em->getRepository('ERPBundle:Etudiant')->findOneById($id);
        $form = $this->createForm(typeEtudiantEdit::class, $etudiant);
        $form->handleRequest($request);
        if ($request->getMethod() == 'POST') {
            if ($form->isValid()) {
                $em->flush();
                return $this->redirect($this->generateUrl('admin_universite_Etudiant'));
            }
        }
        return $this->render('ERPBundle:Admin/universite/etudiant:update.html.twig', array('form' => $form->createView(), 'id' => $id));
    }

    //parent
    public function ParentAction($id)
    {
        $em =$this->getDoctrine()->getManager();
        $parent = $em->getRepository('ERPBundle:Parent')->findOneById($id);
        return $this->render('ERPBundle:Admin/universite/parent:index.html.twig',array('parent'=>$parent));
    }
    public function addParentAction($id)
    {
        $form = $this->createForm(typeParent::class,new Parents());
        return $this->render('ERPBundle:Admin/universite/parent:add.html.twig',array('form'=>$form->createView(),'id'=>$id));
    }
    public function updateParentAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $parent = $em->getRepository('ERPBundle:Parents')->findOneById($id);
        $form = $this->createForm(typeParentEdit::class, $parent);
        $form->handleRequest($request);
        if ($request->getMethod() == 'POST') {
            if ($form->isValid()) {
                $em->flush();
                return $this->redirect($this->generateUrl('admin_universite_Etudiant'));
            }
        }
        return $this->render('ERPBundle:Admin/universite/parent:update.html.twig', array('form' => $form->createView(), 'id' => $id));
    }

    //Entreprise
    public function EntrepriseAction()
    {
        $em =$this->getDoctrine()->getManager();
        $entreprise = $em->getRepository('ERPBundle:Entreprise')->findBy(array('Etablissement'=>$this->getUser()->getEtablissement()));
        return $this->render('ERPBundle:Admin/universite/entreprise:index.html.twig',array('entreprise'=>$entreprise));
    }
    public function addEntrepriseAction()
    {
        $form = $this->createForm(typeEntreprise::class,new Entreprise());
        $form->getData()->setEtablissement($this->getUser()->getEtablissement());
        return $this->render('ERPBundle:Admin/universite/entreprise:add.html.twig',array('form'=>$form->createView()));
    }
    public function updateEntrepriseAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $entreprise = $em->getRepository('ERPBundle:Entreprise')->findOneById($id);
        $form = $this->createForm(typeEntrepriseEdit::class, $entreprise);
        $form->handleRequest($request);
        if ($request->getMethod() == 'POST') {
            if ($form->isValid()) {
                $em->flush();
                return $this->redirect($this->generateUrl('admin_universite_Entreprise'));
            }
        }
        return $this->render('ERPBundle:Admin/universite/entreprise:update.html.twig', array('form' => $form->createView(), 'id' => $id));
    }
}
