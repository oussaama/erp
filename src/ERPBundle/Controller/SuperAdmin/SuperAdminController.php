<?php

namespace ERPBundle\Controller\SuperAdmin;

use ERPBundle\Entity\Permission;
use Symfony\Component\HttpFoundation\Request;
use ERPBundle\Form\insert\typeEtablissement;
use ERPBundle\Form\insert\typeAdminEtablissement;
use ERPBundle\Form\update\typeEtablissementEdit;
use ERPBundle\Entity\Etablissement;
use ERPBundle\Entity\Client;
use ERPBundle\Entity\Admin;
use ERPBundle\Form\insert\typeClient;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SuperAdminController extends Controller
{

    public function headerAction()
    {
        return $this->render('::headers/headerSuperAdmin.html.twig');
    }

    public function indexAction()
    {
        return $this->render('ERPBundle:SuperAdmin:index.html.twig');
    }

    public function EtablissementAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $client = $em->getRepository('ERPBundle:Client')->findOneById($id);
        $etablissement =$em
            ->getRepository('ERPBundle:Etablissement')
            ->createQueryBuilder('e')
            ->leftJoin('e.Admin', 'r')
            ->where('e.client = :client')
            ->setParameter('client', $client)
            ->getQuery()
            ->getResult();
        $form = $this->createForm(typeAdminEtablissement::class, new Admin());
        return $this->render('ERPBundle:SuperAdmin:etablissement/index.html.twig', array('etablissement' => $etablissement, 'id' => $id, 'form' => $form->createView()));
    }

    public function createEtablissementAction(Request $request, $id)
    {
        $etablissement = new Etablissement();
        $form = $this->createForm(typeEtablissement::class, new $etablissement());
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $client = $em->getRepository('ERPBundle:Client')->findOneById($id);
            $etablissement = $form->getData();
            $etablissement->uploadLogo();
            $etablissement->uploadSignature();
            $etablissement->setClient($client);
            $em->persist($etablissement);
            $em->flush();
            return $this->redirect($this->generateUrl('super_admin_etablissement', array('id' => $id)));
        }
        return $this->render('ERPBundle:SuperAdmin:etablissement/create.html.twig', array('form' => $form->createView(), 'id' => $id));
    }
    public function addAdminEtablissementAction($id)
    {
        $form = $this->createForm(typeAdminEtablissement::class,new Admin());
        return $this->render('ERPBundle:SuperAdmin:etablissement/admin.html.twig', array('form' => $form->createView(), 'id' => $id));
    }

    public function configEtablissementAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $etablissement = $em->getRepository('ERPBundle:Etablissement')->findOneById($id);
        $admin = $em->getRepository('ERPBundle:Admin')->findOneBy(array('Etablissement' => $etablissement));
        $permission = $em->getRepository('ERPBundle:Permission')->findOneBy(array('Admin' => $admin));
        if ($permission == null) {
            $permission = new Permission();
            $permission->setAdmin($admin);
            $em->persist($permission);
            $em->flush();
        }
        return $this->render('ERPBundle:SuperAdmin:etablissement/config.html.twig', array('id' => $id, 'permission' => $permission));
    }

    public function ajoutConfigEtablissementAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $etablissement = $em->getRepository('ERPBundle:Etablissement')->findOneById($request->get('id'));
        $admin = $em->getRepository('ERPBundle:Admin')->findOneBy(array('Etablissement' => $etablissement));
        $permission = $em->getRepository('ERPBundle:Permission')->findOneBy(array('Admin' => $admin));
        $permission->setEDT($request->get('edt'));
        $permission->setUe($request->get('ue'));
        $permission->setGrh($request->get('grh'));
        $permission->setClass($request->get('class'));
        $permission->setPaiment($request->get('p'));
        $em->flush();

        return $this->redirect($this->generateUrl('super_admin_etablissement', array('id' => $request->get('id'))));
    }

    public function updateEtablissementAction(Request $request, $etab)
    {
        $em = $this->getDoctrine()->getManager();
        $etablissement = $em->getRepository('ERPBundle:Etablissement')->findOneById($etab);
        $form = $this->createForm(typeEtablissementEdit::class, $etablissement);
        if ($form->isSubmitted()) {
            $form->handleRequest($request);
            $etablissement = $form->getData();
            //$etablissement->removeSignature($signature);
            $etablissement->uploadSignature();
            $etablissement->uploadLogo();
            $em->flush();
            return $this->redirect($this->generateUrl('super_admin_etablissement', array('id' => $etablissement->getClient()->getId())));
        }

        return $this->render('ERPBundle:SuperAdmin:etablissement/update.html.twig', array('etablissement' => $etablissement, 'form' => $form->createView(), 'etab' => $etab, 'pic' => $etablissement));
    }

    public function deleteEtablissementAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $etablissement = $em->getRepository('ERPBundle:Etablissement')->findOneById($id);
        $em->remove($etablissement);
        $em->flush();
        return $this->redirect($this->generateUrl('super_admin_etablissement', array('id' => $etablissement->getUser()->getId())));
    }

    public function ClientAction()
    {
        $em = $this->getDoctrine()->getManager();
        $clients = $em->getRepository('ERPBundle:Client')->findAll();

        return $this->render('ERPBundle:SuperAdmin:client/index.html.twig', array('client' => $clients));
    }

    public function addClientAction(Request $request)
    {
        $form = $this->createForm(typeClient::class, new Client());
        $form->handleRequest($request);
        if ($request->getMethod() == 'POST') {
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $client = $form->getData();
                $client->setDateAjout(new \DateTime());
                $client->setEnabled('1');
                $em->persist($client);
                $em->flush();
                return $this->redirect($this->generateUrl('super_admin_client'));
            }
        }
        return $this->render('ERPBundle:SuperAdmin:client/add.html.twig', array('form' => $form->createView()));
    }


    public function updateCompteClientAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $client = $em->getRepository('ERPBundle:Client')->findOneById($id);
        $form = $this->createForm(typeClient::class, $client);
        $form->handleRequest($request);
        if ($request->getMethod() == 'POST') {
            if ($form->isValid()) {
                $em->flush();
                return $this->redirect($this->generateUrl('super_admin_client'));
            }
        }
        return $this->render('ERPBundle:SuperAdmin:client/update.html.twig', array('form' => $form->createView(), 'id' => $id));
    }

    public function deleteCompteClientAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $client = $em->getRepository('ERPBundle:Client')->findOneById($id);
        if ($client->getEnabled() == 1) {
            $client->setEnabled(0);
        } else {
            $client->setEnabled(1);
        }
        $client->setDateModif(new \DateTime());
        $em->flush();
        return $this->redirect($this->generateUrl('super_admin_client'));
    }

}
