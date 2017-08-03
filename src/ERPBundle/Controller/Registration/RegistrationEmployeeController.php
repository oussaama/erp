<?php

namespace ERPBundle\Controller\Registration;

use ClassesWithParents\E;
use Symfony\Bundle\FrameworkBundle\Controller\Controller as BaseController;
use Symfony\Component\HttpFoundation\Request;
use ERPBundle\Entity\Employee;
use ERPBundle\Form\insert\typeEmployee;

class RegistrationEmployeeController extends BaseController
{
    public function registerAction(Request $request)
    {
        $form = $this->createForm(typeEmployee::class,new Employee());
        $form->handleRequest($request);
        if($form->isValid() && $form->isSubmitted()){
            $this->container
                ->get('pugx_multi_user.registration_manager')
                ->register('ERPBundle\Entity\Employee');
            return $this->redirect($this->generateUrl('admin_Employee'));
        }else{
            return $this->render('ERPBundle:Admin/Membre/employee:add.html.twig', array('form' => $form->createView()));
        }

    }
}