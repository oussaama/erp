<?php

namespace ERPBundle\Controller\Front\Etudiant;

use ERPBundle\Entity\Etudiant;
use ERPBundle\Form\insert\typeDocument;
use ERPBundle\Entity\Document;
use ERPBundle\Entity\Contact;
use ERPBundle\Form\insert\typeEleve;
use ERPBundle\Form\insert\typeEtudiantPreInscription;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class EtudiantController extends Controller
{
    public function indexAction()
    {
        return $this->render('ERPBundle:Front/Etudiant:index.html.twig');
    }

    public function documentAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $etudiant = $em->getRepository("ERPBundle:Etudiant")->findOneById($id);
        if ($etudiant->getDocument() == NULL) {
            $form = $this->createForm(typeDocument::class, new Document());
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $document = new Document();
                $document = $form->getData();
                $document->uploadDiplome($id);
                $document->uploadIdentifiant($id);
                $document->uploadExtrait($id);
                $document->uploadNote($id);
                $etudiant->setDocument($document);
                $em->persist($document);
                $em->flush();
                $this->get('session')->getFlashBag()->add('notice', 'successfully uploaded');
                $message = \Swift_Message::newInstance()
                    ->setSubject($request->get('les pieces jointes envoyee'))
                    ->setFrom('akroutiioussama@gmail.com')
                    ->setTo($etudiant->getEmail())
                    ->setBody($this->renderView('ERPBundle:Admin/Compte:mail.html.twig', array('name' => $request->get('message'))), 'text/html');
                $this->get('mailer')->send($message);
                return $this->render('ERPBundle:Front/Etudiant/inscription:document.html.twig', array('form' => $form->createView(), 'etat' => 1));
            }
            return $this->render('ERPBundle:Front/Etudiant/inscription:document.html.twig', array('form' => $form->createView(), 'etat' => 0));
        } else {
            return $this->render('ERPBundle:Front/Etudiant/inscription:document.html.twig', array('etat' => 1));
        }

    }

    public function formDiplomeAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $response = new Response();
        if ($id != null) {
            $etablissemenet = $em->getRepository('ERPBundle:Filiere')->findBy(array('diplome' => $id));
            $tabEtablissement = array();
            $i = 0;
            foreach ($etablissemenet as $ensemble) {
                $tabEtablissement[$i]['id'] = $ensemble->getId();
                $tabEtablissement[$i]['nom'] = $ensemble->getFiliere();
                $i++;
            }
            $data = json_encode($tabEtablissement); // formater le résultat de la requête en json
            $response->headers->set('Content-Type', 'application/json');
            $response->setContent($data);
        }
        return $response;
    }

    public function formFiliereAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $response = new Response();
        if ($id != null) {
            $etablissemenet = $em->getRepository('ERPBundle:Specialite')->findBy(array('filiere' => $id));
            $tabEtablissement = array();
            $i = 0;
            foreach ($etablissemenet as $ensemble) {
                $tabEtablissement[$i]['id'] = $ensemble->getId();
                $tabEtablissement[$i]['filiere'] = $ensemble->getNomSpecialite();
                $i++;
            }
            $data = json_encode($tabEtablissement); // formater le résultat de la requête en json
            $response->headers->set('Content-Type', 'application/json');
            $response->setContent($data);
        }
        return $response;
    }

    public function formSpecialiteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $response = new Response();
        if ($id != null) {
            $etablissemenet = $em->getRepository('ERPBundle:Specialite')->findBy(array('Etablissement' => $id));
            $tabEtablissement = array();
            $i = 0;
            foreach ($etablissemenet as $ensemble) {
                $tabEtablissement[$i]['id'] = $ensemble->getId();
                $tabEtablissement[$i]['nomSpecialite'] = $ensemble->getNomSpecialite();
                $i++;
            }
            $data = json_encode($tabEtablissement); // formater le résultat de la requête en json
            $response->headers->set('Content-Type', 'application/json');
            $response->setContent($data);
        }
        return $response;
    }

    public function formNiveauAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $response = new Response();
        if ($id != null) {
            $etablissemenet = $em->getRepository('ERPBundle:Niveau')->findBy(array('specialite' => $id));
            $tabEtablissement = array();
            $i = 0;
            foreach ($etablissemenet as $ensemble) {
                $tabEtablissement[$i]['id'] = $ensemble->getId();
                $tabEtablissement[$i]['niveau'] = $ensemble->getNiveau();
                $i++;
            }
            $data = json_encode($tabEtablissement); // formater le résultat de la requête en json
            $response->headers->set('Content-Type', 'application/json');
            $response->setContent($data);
        }
        return $response;
    }

    public function preInscriptionAction(Request $requset, $etat)
    {
        $form = $this->createForm(typeEtudiantPreInscription::class, new etudiant());
        return $this->render('ERPBundle:Front/Etudiant/inscription:preinscription.html.twig', array('form' => $form->createView(), 'etat' => $etat));
    }

    public function coursAction()
    {
        $em = $this->getDoctrine()->getManager();
        $cours = $em->getRepository("ERPBundle:Cour")->findBy(array('classe'=>$this->getUser()->getClasse()));
        return $this->render('ERPBundle:Front/Etudiant:cours.html.twig', array('cours' => $cours));
    }

    public function paimentAction()
    {
        $em = $this->getDoctrine()->getManager();
        $paiment = $em->getRepository("ERPBundle:Payment")->findBy(array('etudiant'=>$this->getUser()));
        $tranche = $em->getRepository("ERPBundle:Slice")->findBy(array('etudiant'=>$this->getUser()));
        return $this->render('ERPBundle:Front/Etudiant:paiment.html.twig', array('paiment' => $paiment,'tranche'=>$tranche));
    }

    public function examenAction()
    {
        $em = $this->getDoctrine()->getManager();
        $examen = $em->getRepository("ERPBundle:Examen")->findByClasse($this->getUser()->getClasse());
        return $this->render('ERPBundle:Front/Etudiant:examen.html.twig', array('examen' => $examen));
    }

    public function emploiAction()
    {
        $em = $this->getDoctrine()->getManager();
        $emploi = $em->getRepository("ERPBundle:Emploi")->findBy(array('classe'=>$this->getUser()->getClasse()));
        return $this->render('ERPBundle:Front/Etudiant:emploi.html.twig', array('emploi' => $emploi));
    }

    public function absenceAction()
    {
        $em = $this->getDoctrine()->getManager();
        $absence = array();
        $i = 0;
        $matiere = $em->getRepository('ERPBundle:Matiere')->findBy(array('specialite' => $this->getUser()->getSpecialite(), 'niveau' => $this->getUser()->getNiveau()));
        foreach ($matiere as $m) {
            $app = $em->getRepository('ERPBundle:Appsense')->findBy(array('matiere' => $m, 'etudiant' => $this->getUser()));
            if ($app != null) {
                $absence[$i]['count'] = sizeof($app);
            } else {
                $absence[$i]['count'] = 0;
            }
            $absence[$i]['matiere'] = $m->getNom();
            $i++;
        }
        return $this->render('ERPBundle:Front/Etudiant:absence.html.twig', array('absence' => $absence));
    }

    public function appsenseDetailAction($matiere)
    {
        $em = $this->getDoctrine()->getManager();
        $mat = $em->getRepository("ERPBundle:Matiere")->findOneByNom($matiere);
        $appsense = $em->getRepository("ERPBundle:Appsense")->findBy(array('matiere' => $mat, 'etudiant' => $this->getUser()));
        return $this->render('ERPBundle:Front/Etudiant:appsenseDetail.html.twig', array('appsense' => $appsense));
    }

    public function noteAction()
    {
        $em = $this->getDoctrine()->getManager();
        $note = $em->getRepository('ERPBundle:Note')->findBy(array('etudiant' => $this->getUser()));
        return $this->render('ERPBundle:Front/Etudiant:note.html.twig', array('note' => $note));
    }

    public function programmeAction()
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT u FROM ERPBundle:UniteEnseignement u GROUP BY u.semestre')->getResult();
        $programme = $em->getRepository('ERPBundle:UniteEnseignement')->findBy(array('specialite' => $this->getUser()->getSpecialite()));
        return $this->render('ERPBundle:Front/Etudiant:programme.html.twig', array('programme' => $programme, 'query' => $query));
    }

    public function ProfilAction()
    {
        return $this->render('ERPBundle:Front/etudiant:profil.html.twig');
    }

    public function MailBoxAction($type)
    {
        $em = $this->getDoctrine()->getManager();
        $mail = "";
        switch ($type) {
            case "send" :
                $mail = $em->getRepository("ERPBundle:Contact")->findBySend($this->getUser()->getEmail());
                $type = "send";break;
            case "recu":
                $mail = $em->getRepository("ERPBundle:Contact")->findByRecu($this->getUser()->getEmail());
                $type = "recu";break;
            case "corbeille"   :
                $mail = $em->getRepository("ERPBundle:Contact")->findByCorbeille(1);
                $type = "corbeille";break;
            case "important" :
                $mail = $em->getRepository("ERPBundle:Contact")->findByImportant(1);
                $type = "important";break;
            case "archive" :
                $mail = $em->getRepository("ERPBundle:Contact")->findByArchive(1);
                $type = "archivage";break;
            case "unread" :
                $mail = $em->getRepository("ERPBundle:Contact")->findByEtat(0);
                $type = "archivage";break;
        }
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($mail, sizeof($mail), 10);
        return $this->render('ERPBundle:Front/etudiant/mail:mailBox.html.twig', array('mail' => $pagination, 'type' => $type));
    }

    private function saveMail($request)
    {
        $em = $this->getDoctrine()->getManager();
        $contact = new contact();
        $contact->setSend($this->getUser()->getEmail());
        $contact->setRecu($request->get('email'));
        $contact->setObjet($request->get('subject'));
        $contact->setMessage($request->get('message'));
        $em->persist($contact);
        $em->flush();
    }

    public function MailBoxSendAction(Request $request)
    {
        $this->saveMail($request);
        $message = \Swift_Message::newInstance()
            ->setSubject($request->get('subject'))
            ->setFrom('akroutiioussama@gmail.com')
            ->setTo($request->get('email'))
            ->setBody($this->renderView('ERPBundle:Admin/Compte:mail.html.twig', array('name' => $request->get('message'))), 'text/html');
        $this->get('mailer')->send($message);
        return $this->redirect($this->generateUrl('etudiant_mailBox', array('type' => 'recu')));
    }

    public function MailBoxDetailAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $mail = $em->getRepository("ERPBundle:Contact")->findOneById($id);
        return $this->render('ERPBundle:Front/etudiant/mail:mailBoxDetail.html.twig',array('mail'=>$mail));
    }

    public function NotificationAction()
    {
        $em = $this->getDoctrine()->getManager();
        $notification = $em->getRepository('ERPBundle:Notification')->findBy(array('user'=>$this->getUser()->getId()));
        return $this->render('ERPBundle:Front/etudiant:notification.html.twig',array('notification'=>$notification));
    }

    public function AgendaAction()
    {
        return $this->render('ERPBundle:Front/etudiant:agenda.html.twig');
    }

}