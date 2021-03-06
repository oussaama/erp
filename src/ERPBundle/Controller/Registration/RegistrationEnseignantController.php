<?php

namespace ERPBundle\Controller\Registration;

use ClassesWithParents\E;
use Symfony\Bundle\FrameworkBundle\Controller\Controller as BaseController;
use Symfony\Component\HttpFoundation\Request;
use ERPBundle\Entity\Employee;

class RegistrationEnseignantController extends BaseController
{
    public function registerAction()
    {
        $this->container
            ->get('pugx_multi_user.registration_manager')
            ->register('ERPBundle\Entity\Enseignant');
        return $this->redirect($this->generateUrl('admin_Enseignant'));
    }
}