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
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PageNotFoundController extends Controller
{

    public function pageNotFoundAction()
    {
        return $this->render('ERPBundle:error:404.html.twig');

    }

}
