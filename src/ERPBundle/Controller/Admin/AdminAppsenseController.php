<?php

namespace ERPBundle\Controller\Admin;

use ERPBundle\Entity\UniteEnseignement;
use ERPBundle\Form\insert\typeMatiere;
use ERPBundle\Form\insert\typeUnite;
use ERPBundle\Entity\Matiere;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminAppsenseController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        return $this->render('ERPBundle:Admin/appsense:index.html.twig');
    }
}