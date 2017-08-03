<?php

namespace ERPBundle\Controller\Admin;

use ERPBundle\Entity\UniteEnseignement;
use ERPBundle\Form\insert\typeMatiere;
use ERPBundle\Form\insert\typeUnite;
use ERPBundle\Entity\Matiere;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
class AdminRetardController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $retard = $em->getRepository('ERPBundle:Retard')->findAll();
        return $this->render('ERPBundle:Admin/retard:index.html.twig',array('retard'=>$retard,'user'=>null));
    }

    public function retardDetailAction($id){
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('ERPBundle:User')->findOneById($id);
        return new JsonResponse(array('user' => $user));
    }

}