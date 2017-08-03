<?php

namespace ERPBundle\Controller\Registration;

use ERPBundle\Entity\Admin;
use Symfony\Bundle\FrameworkBundle\Controller\Controller as BaseController;
use Symfony\Component\HttpFoundation\Request;

class RegistrationAdminController extends BaseController
{
    public function registerAction($id)
    {
        $this->container
            ->get('pugx_multi_user.registration_manager')
            ->register('ERPBundle\Entity\Admin');
        return $this->redirect($this->generateUrl('super_admin_etablissement', array('id' => $id)));
    }
}