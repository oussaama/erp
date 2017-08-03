<?php

namespace ERPBundle\Controller\Registration;

use ClassesWithParents\E;
use Symfony\Bundle\FrameworkBundle\Controller\Controller as BaseController;
use Symfony\Component\HttpFoundation\Request;
use ERPBundle\Entity\Employee;

class RegistrationEtudiantController extends BaseController
{
    public function registerAction(Request $request, $etat)
    {

        $this->container
            ->get('pugx_multi_user.registration_manager')
            ->register('ERPBundle\Entity\Etudiant');
        if ((int)$etat != 1) {
            return $this->redirect($this->generateUrl('admin_Etudiant'));
        } else {
            return $this->redirect($this->generateUrl('etudiant_preInscription',array('etat'=>1)));
        }
    }
}