<?php

namespace ERPBundle\Controller\Exception;

use ERPBundle\Entity\Admin;
use Symfony\Bundle\FrameworkBundle\Controller\Controller as BaseController;
use Symfony\Component\HttpFoundation\Request;

class ExceptionController extends BaseController
{
    public function showExceptionAction(Request $request)
    {
        return $this->render('::TwigBundle/views/Exception/error.html.twig');
    }
}