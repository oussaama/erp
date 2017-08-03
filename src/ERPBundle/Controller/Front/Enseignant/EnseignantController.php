<?php

namespace ERPBundle\Controller\Front\Enseignant;

use ERPBundle\Entity\Etudiant;
use ERPBundle\Form\insert\typeDocument;
use ERPBundle\Entity\Document;
use ERPBundle\Form\insert\typeEleve;
use ERPBundle\Form\insert\typeEtudiantPreInscription;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class EnseignantController extends Controller
{
    public function indexAction(){

        $em = $this->getDoctrine()->getManager();
        $cours_all = $em->getRepository('ERPBundle:Cour')->findBy(array('enseignant'=>$this->getUser()));
        $result = count($cours_all);
        $absences_all = $em->getRepository('ERPBundle:Appsense')->findAll();
        $result_absence = count($absences_all);
        $notes_all = $em->getRepository('ERPBundle:Note')->findAll();
        $result_note = count($notes_all);


        $examens_principale_all = $em->getRepository('ERPBundle:Examen')->findBy(array('type'=>'examen principale'));
        $result_examen_principale = count($examens_principale_all);


        $examens_controle_all = $em->getRepository('ERPBundle:Examen')->findBy(array('type'=>'examen controle'));
        $result_examen_controle = count($examens_controle_all);


        return $this->render('ERPBundle:Front/Enseignant:index.html.twig',array('cours' => $cours_all,'result'=>$result,'result_absence'=>$result_absence,'appsense'=> $absences_all,
            'result_note'=>$result_note,'note'=> $notes_all, 'result_examen_principale'=>$result_examen_principale,'examen'=> $examens_principale_all,
            'result_examen_controle'=>$result_examen_controle,'examen'=> $examens_controle_all));
    }

    public function EnseignantProfilAction()
    {
        return $this->render('ERPBundle:Front/Enseignant/Compte:profil.html.twig');
    }

    public function emploiAction()
    {
        $em = $this->getDoctrine()->getManager();
        $emploi = $em->getRepository("ERPBundle:Emploi")->findBy(array('enseignant'=>$this->getUser()->getId()));
        return $this->render('ERPBundle:Front/Enseignant:emploi.html.twig', array('emploi' => $emploi));
    }
}