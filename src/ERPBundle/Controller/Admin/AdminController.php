<?php

namespace ERPBundle\Controller\Admin;

use ERPBundle\Entity\Parameter;
use Symfony\Component\HttpFoundation\Request;
use ERPBundle\Form\typeEtablissement;
use ERPBundle\Form\typeAdminEtablissement;
use ERPBundle\Form\typeEtablissementEdit;
use ERPBundle\Entity\Contact;
use ERPBundle\Form\insert\typeClient;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdminController extends Controller
{

    public function headerAction()
    {
        return $this->render('::headers/headerAdmin.html.twig');
    }

    public function AdminRedirectionAction()
    {
        $em = $this->getDoctrine()->getManager();
        $etudiants_all = $em->getRepository('ERPBundle:Etudiant')->findAll();
        $result = count($etudiants_all);
        $contacts_all = $em->getRepository('ERPBundle:Contact')->findAll();
        $result2 = count($contacts_all);
        $enseignants_all = $em->getRepository('ERPBundle:Enseignant')->findAll();
        $result3 = count($enseignants_all);
        $docuements_all = $em->getRepository('ERPBundle:Document')->findAll();
        $result4 = count($docuements_all);

        $classes_all = $em->getRepository('ERPBundle:Classe')->findAll();
        $result5 = count($classes_all);
        $matieres_all = $em->getRepository('ERPBundle:Matiere')->findAll();
        $result6 = count($matieres_all);
        $employes_all = $em->getRepository('ERPBundle:Classe')->findAll();
        $result7 = count($employes_all);

        $result8 = count($this->verifierTrancheEtudiant());

        return $this->render('ERPBundle:Admin:index.html.twig', array('result' => $result, 'result2' => $result2, 'result3' => $result3, 'result4' => $result4, 'result5' => $result5, 'result6' => $result6, 'result7' => $result7,'result8'=>$result8));
    }

    public function AdminProfilAction()
    {
        return $this->render('ERPBundle:Admin/Compte:profil.html.twig');
    }

    public function AdminAgendaAction()
    {
        return $this->render('ERPBundle:Admin/Compte:agenda.html.twig');
    }

    public function insertParameter($i, $p1, $meth, $request, $user, $objet, $array)
    {
        if ($request->get($p1 . $user . $i) == null) {
            $objet->$meth(array_push($array, ("0")));
        } else if ($request->get($p1 . $user . $i) == "on") {
            $objet->$meth(array_push($array, ("1")));
        }
    }

    private function selectPermission($p1, $meth, $request, $user, $objet)
    {
        $array[] = array();
        for ($i = 1; $i < 5; $i++) {
            $this->insertParameter($i, $p1, $meth, $request, $user, $objet, $array);
        }
    }

    public function AdminParametrageAction(Request $request, $user = null)
    {
        if ($request->getMethod() == "POST") {
            $em = $this->getDoctrine()->getManager();
            $u = "";
            $param = new Parameter();
            if ($user = "enseignant") {
                $u = "e";
                $param->setUtilisateur("enseignant");
            } else if ($user = "etudiant") {
                $u = "et";
                $param->setUtilisateur("etudiant");
            } else if ($user = "employee") {
                $u = "ee";
                $param->setUtilisateur("employee");
            }
            $this->selectPermission("c", "setClasse", $request, $u, $param);
            $param->setEtablissement($this->getUser()->getEtablissement());
            $parama = $em->getRepository("ERPBundle:Parameter")->findOneBy(array('Etablissement' => $this->getUser()->getEtablissement(), 'utilisateur' => $user));
            if ($parama == null) {
                $em->persist($param);
            }
            $em->flush();
        }
        return $this->render('ERPBundle:Admin/Compte:parametrage.html.twig');
    }

    public function AdminMailBoxAction($type)
    {
        $em = $this->getDoctrine()->getManager();
        $mail = "";
        switch ($type) {
            case "send" :
                $mail = $em->getRepository("ERPBundle:Contact")->findBySend($this->getUser()->getEmail());
                break;
            case "recu":
                $mail = $em->getRepository("ERPBundle:Contact")->findByRecu($this->getUser()->getEmail());
                break;
            case "corbeille"   :
                $mail = $em->getRepository("ERPBundle:Contact")->findByCorbeille(1);
                break;
            case "important" :
                $mail = $em->getRepository("ERPBundle:Contact")->findByImportant(1);
                break;
            case "archive" :
                $mail = $em->getRepository("ERPBundle:Contact")->findByArchive(1);
                break;
            case "unread" :
                $mail = $em->getRepository("ERPBundle:Contact")->findByEtat(0);
                break;
        }
        //$paginator = $this->get('knp_paginator');
        // $pagination = $paginator->paginate($mail, sizeof($mail), 10);
        return $this->render('ERPBundle:Admin/Compte:mailBox.html.twig', array('mail' => $mail, 'type' => $type));
    }

    private function saveMail($request)
    {
        $em = $this->getDoctrine()->getManager();
        $contact = new contact();
        $contact->setSend($this->getUser()->getEmail());
        $contact->setEtat("send");
        $contact->setRecu($request->get('email'));
        $contact->setObjet($request->get('subject'));
        $contact->setMessage($request->get('message'));
        $em->persist($contact);
        $em->flush();
    }

    public function AdminMailBoxSendAction(Request $request)
    {
        $this->saveMail($request);
        $message = \Swift_Message::newInstance()
            ->setSubject($request->get('subject'))
            ->setFrom('akroutiioussama@gmail.com')
            ->setTo($request->get('email'))
            ->setBody($this->renderView('ERPBundle:Admin/Compte:mail.html.twig', array('name' => $request->get('message'))), 'text/html');
        $this->get('mailer')->send($message);
        return $this->redirect($this->generateUrl('admin_mailBox', array('type' => 'recu')));
    }

    public function AdminMailBoxDetailAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $mail = $em->getRepository("ERPBundle:Contact")->findOneById($id);
        return $this->render('ERPBundle:Admin/Compte:mailBoxDetail.html.twig', array('mail' => $mail));
    }

    public function AdminNotificationAction()
    {
        $em = $this->getDoctrine()->getManager();
        $notification = $em->getRepository('ERPBundle:Notification')->findBy(array('user' => $this->getUser()->getId()));
        return $this->render('ERPBundle:Admin/Compte:notification.html.twig', array('notification' => $notification));
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
        $cins = $em->getRepository("ERPBundle:User")->findOneByCin($cin);
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

    public function rapportAction()
    {
        return $this->render('ERPBundle:Admin/Compte:rapport.html.twig');
    }

    public function MethodePayementAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $methode = $em->getRepository('ERPBundle:Status')->findOneById($id);
        $response = new Response(json_encode(array('methode' => $methode->getType())));
        $response->headers->set('Content-Type', 'application/json');
        return $response;

    }
    private function verifierTrancheEtudiant(){
        $em = $this->getDoctrine()->getManager();
        $tranches = array();
        $etudiants = $em->getRepository("ERPBundle:Etudiant")->findBy(array('Etablissement' => $this->getUser()->getEtablissement()));
        $date = date('Y-m-d', mktime(0, 0, 0, date("m"), date("d") + 10, date("Y")));
        foreach ($etudiants as $e) {
            $tranche = $em->getRepository('ERPBundle:Slice')->findOneBy(array('etudiant' => $e, 'state' => 'en attente', 'dateFin' => $date));
            if ($tranche != null) {
                array_push($tranches, $tranche);
            }
        }
        return $tranches;
    }

    public function AdminPaimentAction()
    {
        $tranches = $this->verifierTrancheEtudiant();
        foreach($tranches as $t) {
            $message = \Swift_Message::newInstance()
                ->setSubject('paiment')
                ->setFrom('akroutiioussama@gmail.com')
                ->setTo($t->getEtudiant()->getEmail())
                ->setBody($this->renderView('ERPBundle:Admin/Compte:mailPaiment.html.twig', array('tranche' => $t)), 'text/html');
            $this->get('mailer')->send($message);
        }
        return $this->redirect($this->generateUrl('admin_homepage'));
    }
}
