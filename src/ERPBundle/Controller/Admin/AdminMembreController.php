<?php

namespace ERPBundle\Controller\Admin;

use ERPBundle\Entity\Employee;
use ERPBundle\Entity\Slice;
use ERPBundle\Entity\Document;
use ERPBundle\Entity\Enseignant;
use ERPBundle\Entity\Entreprise;
use ERPBundle\Entity\Etudiant;
use ERPBundle\Entity\Parents;
use ERPBundle\Entity\Payment;
use ERPBundle\Form\insert\typeEmployee;
use ERPBundle\Form\insert\typeEnseignant;
use ERPBundle\Form\insert\typeDocument;
use ERPBundle\Form\insert\typeEtudiantPreInscription;
use ERPBundle\Form\insert\typeParent;
use ERPBundle\Form\insert\typeEntreprise;
use ERPBundle\Form\update\typeParentEdit;
use ERPBundle\Form\update\typeEntrepriseEdit;
use ERPBundle\Form\update\typeEtudiantEdit;
use ERPBundle\Form\insert\PaymentType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Guzzle\Http\Message\Response;

class AdminMembreController extends Controller
{
    public function deleteCompteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $client = $em->getRepository('ERPBundle:User')->findOneById($id);
        $direction = "";
        if ($client->isEnabled() == 1) {
            $client->setEnabled(0);
        } else {
            $client->setEnabled(1);
        }
        $this->get('fos_user.user_manager')->updateUser($client);
        var_dump($client->isEnabled());
        die;
        $em->flush();
        if ($client->getRoles()[0] == "ROLE_EMPLOYEE") {
            $direction = 'admin_Employee';
        } else if ($client->getRoles()[0] == "ROLE_ENSEIGNANT") {
            $direction = 'admin_Enseignant';
        } else if ($client->getRoles()[0] == "ROLE_ETUDIANT" || $client->getRoles()[0] == "ROLE_PARENT") {
            $direction = 'admin_Etudiant';
        } elseif ($client->getRoles()[0] == "ROLE_ENTREPRISE") {
            $direction = 'admin_Entreprise';
        }
        return $this->redirect($this->generateUrl($direction));
    }

    //Employee
    public function EmployeeAction()
    {
        $em = $this->getDoctrine()->getManager();
        $employee = $em->getRepository('ERPBundle:Employee')->findBy(array('Etablissement' => $this->getUser()->getEtablissement()));
        return $this->render('ERPBundle:Admin/Membre/employee:index.html.twig', array('employee' => $employee));
    }

    public function addEmployeeAction()
    {
        $form = $this->createForm(typeEmployee::class, new Employee());
        $form->getData()->setEtablissement($this->getUser()->getEtablissement());
        return $this->render('ERPBundle:Admin/Membre/employee:add.html.twig', array('form' => $form->createView()));
    }

    public function updateEmployeeAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $employee = $em->getRepository('ERPBundle:Employee')->findOneById($id);
        $form = $this->createForm(typeEmployee::class, $employee);
        $form->handleRequest($request);
        if ($request->getMethod() == 'POST') {
            if ($form->isValid()) {
                $em->flush();
                return $this->redirect($this->generateUrl('admin_Employee'));
            }
        }
        return $this->render('ERPBundle:Admin/Membre/employee:update.html.twig', array('form' => $form->createView(), 'id' => $id));
    }

    public function showEmployeAction(Request $request, Employee $employee)
    {
        $message = \Swift_Message::newInstance()->setTo($employee->getEmail());
        $payment = new Payment();
        $form = $this->createForm('ERPBundle\Form\insert\PaymentType', $payment);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $crypt = md5(uniqid(rand(), true));
            $employee->setCrypte($crypt);
            $message->setSubject("Confirmation de paiement")
                ->setFrom('akroutiioussama@gmail.com')
                ->setBody($this->renderView('ERPBundle:Admin/Compte:mailAttente.html.twig', array('id' => $employee->getId(), 'crypt' => $crypt)), 'text/html');
            $payment->setEmployee($employee);
            $em->persist($payment);
            $this->get('mailer')->send($message);
            $em->flush();

            return $this->redirectToRoute('admin_Employee', array('id' => $employee->getId()));
        }
        return $this->render('ERPBundle:Admin/Membre/employee:show.html.twig', array(
            'employee' => $employee,
            'payment' => $payment,
            'form' => $form->createView(),

        ));
    }


    //Enseignant
    public function EnseignantAction()
    {
        $em = $this->getDoctrine()->getManager();
        $enseignant = $em->getRepository('ERPBundle:Enseignant')->findBy(array('Etablissement' => $this->getUser()->getEtablissement()));
        return $this->render('ERPBundle:Admin/Membre/enseignant:index.html.twig', array('enseignant' => $enseignant));
    }

    public function addEnseignantAction()
    {
        $form = $this->createForm(typeEnseignant::class, new Enseignant());
        $form->getData()->setEtablissement($this->getUser()->getEtablissement());
        return $this->render('ERPBundle:Admin/Membre/enseignant:add.html.twig', array('form' => $form->createView()));
    }

    public function updateEnseignantAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $enseignant = $em->getRepository('ERPBundle:Enseignant')->findOneById($id);
        $form = $this->createForm(typeEnseignant::class, $enseignant);
        $form->handleRequest($request);
        if ($request->getMethod() == 'POST') {
            if ($form->isValid()) {
                $em->flush();
                return $this->redirect($this->generateUrl('admin_Enseignant'));
            }
        }
        return $this->render('ERPBundle:Admin/Membre/enseignant:update.html.twig', array('form' => $form->createView(), 'id' => $id));
    }


    //etudiant
    public function EtudiantAction()
    {
        $em = $this->getDoctrine()->getManager();
        $etudiantp = $em->getRepository('ERPBundle:Etudiant')->findBy(array('Etablissement' => $this->getUser()->getEtablissement(), 'etat' => 'pre-inscrit'), array('id' => 'DESC'));
        $etudiant = $em->getRepository('ERPBundle:Etudiant')->findBy(array('Etablissement' => $this->getUser()->getEtablissement(), 'etat' => 'inscrit'), array('id' => 'DESC'));
        $etudiante = $em->getRepository('ERPBundle:Etudiant')->findBy(array('Etablissement' => $this->getUser()->getEtablissement(), 'etat' => 'en attente'), array('id' => 'DESC'));
        $etudiantpa = $em->getRepository('ERPBundle:Etudiant')->findBy(array('Etablissement' => $this->getUser()->getEtablissement(), 'etat' => 'paiment'), array('id' => 'DESC'));
        $etudiantv = $em->getRepository('ERPBundle:Etudiant')->findBy(array('Etablissement' => $this->getUser()->getEtablissement(), 'etat' => 'valide'), array('id' => 'DESC'));
        return $this->render('ERPBundle:Admin/Membre/etudiant:index.html.twig', array('etudiantp' => $etudiantp, 'etudiant' => $etudiant, 'etudiante' => $etudiante, 'etudiantpa' => $etudiantpa, 'etudiantv' => $etudiantv));
    }

    public function addEtudiantAction()
    {
        $form = $this->createForm(typeEtudiantPreInscription::class, new Etudiant());
        $form->getData()->setEtablissement($this->getUser()->getEtablissement());
        return $this->render('ERPBundle:Admin/Membre/etudiant:add.html.twig', array('form' => $form->createView()));
    }

    public function updateEtudiantAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $etudiant = $em->getRepository('ERPBundle:Etudiant')->findOneById($id);
        $form = $this->createForm(typeEtudiantEdit::class, $etudiant);
        $form->handleRequest($request);
        if ($request->getMethod() == 'POST') {
            if ($form->isValid()) {
                $em->flush();
                return $this->redirect($this->generateUrl('admin_Etudiant'));
            }
        }
        return $this->render('ERPBundle:Admin/Membre/etudiant:update.html.twig', array('form' => $form->createView(), 'id' => $id));
    }

    public function validateEtudiantAction($id, $etat)
    {
        $em = $this->getDoctrine()->getManager();
        $etudiant = $em->getRepository('ERPBundle:Etudiant')->findOneById($id);
        $message = \Swift_Message::newInstance()->setTo($etudiant->getEmail());
        if ($etat == 0) {
            $etudiant->setEtat("refuse");
            $message->setSubject("refuse votre information")
                ->setFrom('akroutiioussama@gmail.com')
                ->setBody($this->renderView('ERPBundle:Admin/Compte:mailRefuse.html.twig'), 'text/html');
        } else {
            if ($etudiant->getEtat() == "en attente") {
                $etudiant->setEtat("paiment");
                $message->setSubject("acceptation votre dossier")
                    ->setFrom('akroutiioussama@gmail.com')
                    ->setBody($this->renderView('ERPBundle:Admin/Compte:mailInscrit.html.twig'), 'text/html');
            } else if ($etudiant->getEtat() == "pre-inscrit") {
                $etudiant->setEtat("en attente");
                $crypt = md5(uniqid(rand(), true));
                $etudiant->setCrypte($crypt);
                $message->setSubject("upload votre document")
                    ->setFrom('akroutiioussama@gmail.com')
                    ->setBody($this->renderView('ERPBundle:Admin/Compte:mailAttente.html.twig', array('id' => $etudiant->getId(), 'crypt' => $crypt)), 'text/html');
            } else if ($etudiant->getEtat() == "paiment") {
                $etudiant->setEtat("inscrit");
                $message->setSubject("paiment")
                    ->setFrom('akroutiioussama@gmail.com')
                    ->setBody($this->renderView('ERPBundle:Admin/Compte:mail.html.twig'), 'text/html');
            }

        }
        $this->get('mailer')->send($message);
        $em->flush();
        return $this->redirect($this->generateUrl('admin_Etudiant'));
    }

    public function documentEtudiantAddAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $etudiant = $em->getRepository("ERPBundle:Etudiant")->findOneById($id);
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
            $message = \Swift_Message::newInstance()
                ->setSubject($request->get('les pieces jointes envoyee'))
                ->setFrom('akroutiioussama@gmail.com')
                ->setTo($etudiant->getEmail())
                ->setBody($this->renderView('ERPBundle:Admin/Compte:mail.html.twig', array('name' => $request->get('message'))), 'text/html');
            $this->get('mailer')->send($message);
            return $this->redirect($this->generateUrl('admin_etudiant_show_document', array('id' => $id)));
        } else {
            return $this->render('ERPBundle:Admin/Membre/etudiant:upload.html.twig', array('form' => $form->createView(), 'id' => $id));
        }

    }

    public function documentEtudiantAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $etudiant = $em->getRepository('ERPBundle:Etudiant')->findOneById($id);
        return $this->render('ERPBundle:Admin/Membre/etudiant:show.html.twig', array('etudiant' => $etudiant, 'id' => $id));
    }

    public function etudiantDetailAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $etudiant = $em->getRepository('ERPBundle:Etudiant')->findOneById($id);
        return $this->render('ERPBundle:Admin/Membre/etudiant:showDetail.html.twig', array('etudiant' => $etudiant));
    }

    public function etudiantShowAllAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $etudiant = $em->getRepository('ERPBundle:Etudiant')->findOneById($id);
        $form = $this->createForm(PaymentType::class, new payment());
        $tranche = $em->getRepository('ERPBundle:Slice')->findBy(array('etudiant' => $etudiant));
        return $this->render('ERPBundle:Admin/Membre/etudiant:showAll.html.twig', array('etudiant' => $etudiant, 'id' => $id, 'tranche' => $tranche, 'form' => $form->createView()));
    }

    public function etudiantSliceAction(Request $request, $id)
    {
        $msg = array();
        $test = false;
        if ($request->get('submit') == "ajouter") {
            $totale = 0;
            $deb= $request->get('deb0');
            for ($i = 0; $i < $request->get('nbr'); $i++) {
                $j = $i + 1;
                $msgdetail = "il faut verfier date debut ou date fin de tranche numero " . $j;
                $totale += $request->get('ta' . $i);

                if ($deb <= $request->get('fin' . $i) && $deb <= $request->get('fin' . $i)) {
                    $test = true;
                    $deb = $request->get('fin' . $i);
                } else if($deb > $request->get('fin' . $i) || $deb > $request->get('fin' . $i)){
                    array_push($msg, $msgdetail);
                    $test = false;
                }
            }
            if ($totale != $request->get('total')) {
                array_push($msg, 'il faut verifier les montants des tranches');
            }
            if ($totale == $request->get('total') && $test == true) {
                $d = new \DateTime();
                $em = $this->getDoctrine()->getManager();
                $etudiant = $em->getRepository('ERPBundle:User')->findOneById($id);
                $tranche = new Slice();
                $tranche->setEtudiant($etudiant);
                $tranche->setTitle("frais");
                $tranche->setDateDeb($d->format('Y-m-d'));
                $tranche->setReste(0);
                $tranche->setState("valide");
                $tranche->setDateFin($d->format('Y-m-d'));
                $tranche->setTotal($request->get('total'));
                $tranche->setMontant($request->get('frais'));
                $em->persist($tranche);
                $em->flush();
                for ($i = 0; $i < $request->get('nbr'); $i++) {
                    $x = $i + 1;
                    $tranche = new Slice();
                    $tranche->setEtudiant($etudiant);
                    $tranche->setTitle("tranche" . $x);
                    $tranche->setDateDeb(date('Y-m-d', strtotime($request->get('deb' . $i))));
                    $tranche->setDateFin(date('Y-m-d', strtotime($request->get('fin' . $i))));
                    $tranche->setReste($request->get('ta' . $i));
                    $tranche->setState("en attente");
                    $tranche->setMontant($request->get('ta' . $i));
                    $tranche->setTotal($request->get('total'));
                    $em->persist($tranche);
                    $em->flush();
                }
                $etudiant->setTranche(1);
                $etudiant->setPaiment(1);
                $etudiant->setEtat("inscrit");
                $em->flush();
                return $this->redirect($this->generateUrl('admin_Etudiant'));
            } else {
                return $this->render('ERPBundle:Admin/Membre/etudiant:tranche.html.twig', array('id' => $id, 'msg' => $msg));
            }
        }
        return $this->render('ERPBundle:Admin/Membre/etudiant:tranche.html.twig', array('id' => $id, 'msg' => Null));
    }


    public function paymentEtudiantAction(Request $request, $id)
    {
        $payment = new Payment();
        $slice = new Slice();
        $form = $this->createForm(PaymentType::class, $payment);
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();
        $etudiant = $em->getRepository('ERPBundle:Etudiant')->findOneById($id);
        $tranche = $em->getRepository('ERPBundle:Slice')->findBy(array('etudiant' => $etudiant));
        $payments = $em->getRepository('ERPBundle:Payment')->findBy(array('etudiant' => $etudiant));
        $soldepay = 0;
        foreach ($payments as $p) {
            $soldepay += $p->getSolde();
        }
        $soldepay += $request->get('erpbundle_payment')['solde'];
        $msg = "";
        if ($form->isSubmitted() && $form->isValid()) {
            $etudiant = $em->getRepository('ERPBundle:User')->findOneById($id);
            $slice = $em->getRepository('ERPBundle:Slice')->findOneBy(array('etudiant' => $etudiant));
            if ($soldepay > $slice->getTotal()) {
                $msg = "le solde est superieur a total de tranche il faut verifier votre solde ";
            } else {
                $payment = $form->getData();
                $payment->setSlices($slice);
                $payment->setQualified(1);
                $slice->setQualified(1);
                $payment->setEtablissement($this->getUser()->getEtablissement());
                $payment->setEtudiant($etudiant);
                $etudiant->setPaiment(1);
                $tranche = $em->getRepository('ERPBundle:Slice')->findBy(array('etudiant' => $etudiant, 'state' => "en attente"));
                $solde = $payment->getSolde();
                foreach ($tranche as $t) {
                    $slice = new Slice();
                    $diffirence = $t->getMontant() - $solde;
                    if ($t->getReste() == 0) {
                        if ($diffirence <= 0) {
                            $slice = $t;
                            $slice->setState("valide");
                            $slice->setReste(0);
                            $em->flush();
                            $solde -= $slice->getMontant();
                        } else if ($diffirence >= 0) {
                            $slice = $t;
                            $slice->setReste($diffirence);
                            $em->flush();
                            break;
                        }
                    } else {
                        $diffirence = $t->getReste() - $solde;
                        if ($diffirence <= 0) {
                            $slice = $t;
                            $slice->setState("valide");
                            $solde = $solde - $t->getReste();
                            $slice->setReste(0);
                            $em->flush();
                        } else if ($diffirence >= 0) {
                            $slice = $t;
                            $slice->setReste($diffirence);
                            $em->flush();
                            break;
                        }
                    }
                }
                $em->persist($payment);
                $em->flush();
                return $this->redirect($this->generateUrl('admin_payment_index'));
            }
        }
        return $this->render('ERPBundle:Admin/Membre/etudiant:payment.html.twig', array('form' => $form->createView(), 'id' => $id, 'etudiant' => $etudiant, 'payments' => $payments, 'tranche' => $tranche, "msg" => $msg));
    }

    public function paymentListEtudiantAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $etudiant = $em->getRepository('ERPBundle:Etudiant')->findOneById($id);
        $payments = $em->getRepository('ERPBundle:Payment')->findOneBy(array('etudiant' => $etudiant));
        return $this->render('ERPBundle:Admin/Membre/etudiant:paymentDetail.html.twig', array('paiment' => $payments, 'etudiant' => $etudiant));
    }


    public function etudiantClassAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $etudiant = $em->getRepository('ERPBundle:Etudiant')->findOneById($id);
        $classe = $em->getRepository('ERPBundle:Classe')->findBy(array('niveau' => $etudiant->getNiveau(), 'specialite' => $etudiant->getSpecialite()));
        return $this->render('ERPBundle:Admin/Membre/etudiant:addClass.html.twig', array('classe' => $classe, 'id' => $id));
    }

    public function addEtudiantClassAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $etudiant = $em->getRepository('ERPBundle:Etudiant')->findOneById($id);
        $etu = $em->getRepository('ERPBundle:Etudiant')->findByEtat('inscrit');
        $pays = $em->getRepository('ERPBundle:Pays')->findOneById($etudiant->getPays());
        $cie = substr($pays->getCode(), 1) . Date('Y') . (count($etu) + 1);
        $etudiant->setCie($cie);
        $etudiant->setEtat("valide");
        $classe = $em->getRepository('ERPBundle:Classe')->findOneById($request->get('classe'));
        $etudiant->setClasse($classe);
        $em->flush();
        return $this->redirect($this->generateUrl('admin_etudiant_payment', array('id' => $id)));
    }

    //parent
    public function ParentAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $parent = $em->getRepository('ERPBundle:Parent')->findOneById($id);
        return $this->render('ERPBundle:Admin/Membre/parent:index.html.twig', array('parent' => $parent));
    }

    public function addParentAction($id)
    {
        $form = $this->createForm(typeParent::class, new Parents());
        return $this->render('ERPBundle:Admin/Membre/parent:add.html.twig', array('form' => $form->createView(), 'id' => $id));
    }

    public function updateParentAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $parent = $em->getRepository('ERPBundle:Parents')->findOneById($id);
        $form = $this->createForm(typeParentEdit::class, $parent);
        $form->handleRequest($request);
        if ($request->getMethod() == 'POST') {
            if ($form->isValid()) {
                $em->flush();
                return $this->redirect($this->generateUrl('admin_Etudiant'));
            }
        }
        return $this->render('ERPBundle:Admin/Membre/parent:update.html.twig', array('form' => $form->createView(), 'id' => $id));
    }

    //Entreprise
    public function EntrepriseAction()
    {
        $em = $this->getDoctrine()->getManager();
        $entreprise = $em->getRepository('ERPBundle:Entreprise')->findBy(array('Etablissement' => $this->getUser()->getEtablissement()));
        return $this->render('ERPBundle:Admin/Membre/entreprise:index.html.twig', array('entreprise' => $entreprise));
    }

    public function addEntrepriseAction()
    {
        $form = $this->createForm(typeEntreprise::class, new Entreprise());
        $form->getData()->setEtablissement($this->getUser()->getEtablissement());
        return $this->render('ERPBundle:Admin/Membre/entreprise:add.html.twig', array('form' => $form->createView()));
    }

    public function updateEntrepriseAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $entreprise = $em->getRepository('ERPBundle:Entreprise')->findOneById($id);
        $form = $this->createForm(typeEntrepriseEdit::class, $entreprise);
        $form->handleRequest($request);
        if ($request->getMethod() == 'POST') {
            if ($form->isValid()) {
                $em->flush();
                return $this->redirect($this->generateUrl('admin_Entreprise'));
            }
        }
        return $this->render('ERPBundle:Admin/Membre/entreprise:update.html.twig', array('form' => $form->createView(), 'id' => $id));
    }

    public function showEntrepriseAction(Request $request, Entreprise $entreprise)
    {
        $em = $this->getDoctrine()->getManager();
        $message = \Swift_Message::newInstance()->setTo($entreprise->getEmail());
        $payment = new Payment();
        $form = $this->createForm('ERPBundle\Form\insert\PaymentType', $payment);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $crypt = md5(uniqid(rand(), true));
            $entreprise->setCrypte($crypt);
            $message->setSubject("Confirmation de paiement")
                ->setFrom('akroutiioussama@gmail.com')
                ->setBody($this->renderView('ERPBundle:Admin/Compte:mailAttente.html.twig', array('id' => $entreprise->getId(), 'crypt' => $crypt)), 'text/html');
            $payment->setEntreprise($entreprise);
            $em->persist($payment);
            $this->get('mailer')->send($message);
            var_dump($this->get('mailer')->send($message));
            $em->flush();

            return $this->redirectToRoute('admin_Entreprise', array('id' => $entreprise->getId()));
        }
        return $this->render('ERPBundle:Admin/Membre/entreprise:show.html.twig', array(
            'entreprise' => $entreprise,
            'payment' => $payment,
            'form' => $form->createView(),

        ));
    }

    public function pdfAction()
    {


        $directoryPath = $this->container->getParameter('kernel.root_dir') . '/../web';
        $directoryPath = preg_replace("/app..../i", "", $directoryPath);
        $html = $this->renderView('ERPBundle:Admin/Membre/entreprise:pdf.html.twig', array(
            'action' => 'show',
            'web_path' => $directoryPath,
        ));


        $pdf = $this->get('knp_snappy.pdf')->getOutputFromHtml($html, array(
            'lowquality' => false,
            'orientation' => 'Portrait',
            'page-size' => "A4",
            'encoding' => 'utf-8',
            'header-spacing' => 20,
            'footer-center' => '[page]',
            'footer-right' => date('Y'),
            'footer-font-size' => 12,
            'footer-spacing' => 20,
            'margin-bottom' => 20,
        ));

        return new Response(
            $this->get('knp_snappy.pdf')->getOutputFromHtml($html), 200, array(
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'attachment; filename="Demande du Perdiems.pdf"'
            )
        );
    }

}
