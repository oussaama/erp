<?php

namespace ERPBundle\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminUniversiteController extends Controller
{
    public function indexAction(){
        return $this->render('ERPBundle:Admin:index.html.twig');
    }
}