<?php

namespace ERPBundle\Controller;

use ERPBundle\Entity\Parameter;
use Symfony\Component\HttpFoundation\Request;
use ERPBundle\Form\typeEtablissement;
use ERPBundle\Form\typeAdminEtablissement;
use ERPBundle\Form\typeEtablissementEdit;
use ERPBundle\Entity\Contact;
use ERPBundle\Form\insert\typeClient;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{

    public function indexAction()
    {
        return $this->render('ERPBundle:error:404.html.twig');
    }


    public function usernameAction($username)
    {
        $em = $this->getDoctrine()->getManager();
        $username = $em->getRepository("ERPBundle:User")->findOneByUsername($username);
        $response = new Response(json_encode(array('username' => $username)));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    public function cinAction($cin)
    {
        $em = $this->getDoctrine()->getManager();
        $cins = $em->getRepository("ERPBundle:Etudiant")->findOneByCin($cin);
        $response = new Response(json_encode(array('cin' => $cins)));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    public function emailAction($email)
    {
        $em = $this->getDoctrine()->getManager();
        $emails = $em->getRepository("ERPBundle:User")->findOneByEmail($email);
        $response = new Response(json_encode(array('email' => $emails)));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
}
