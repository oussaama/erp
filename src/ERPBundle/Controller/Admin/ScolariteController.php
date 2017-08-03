<?php

namespace ERPBundle\Controller\Admin;

use ERPBundle\Entity\Diplome;
use ERPBundle\Entity\Emploi;
use ERPBundle\Entity\Filiere;
use ERPBundle\Entity\Niveau;
use ERPBundle\Entity\Specialite;
use ERPBundle\Form\insert\typeDiplome;
use ERPBundle\Form\insert\typeEmploiClasse;
use ERPBundle\Form\insert\typeEmploiEnseignant;
use Symfony\Component\HttpFoundation\Request;
use ERPBundle\Form\insert\typeAnnee;
use ERPBundle\Form\insert\typeFiliere;
use ERPBundle\Form\insert\typeNiveau;
use ERPBundle\Form\insert\typeSpecialite;
use ERPBundle\Entity\Annee;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ScolariteController extends Controller
{
    //filiere
    public function filiereAction()
    {
        $em = $this->getDoctrine()->getManager();
        $filiere = $em->getRepository("ERPBundle:Filiere")->findBy(array('Etablissement'=>$this->getUser()->getEtablissement()));
        return $this->render('ERPBundle:Admin/scolarite/filiere:index.html.twig',array('filiere'=>$filiere));
    }
    public function addFiliereAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(typeFiliere::class, new Filiere());
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $fliere = new Filiere();
            $fliere = $form->getData();
            $fliere->setEtablissement($this->getUser()->getEtablissement());
            $em->persist($fliere);
            $em->flush();
            return $this->redirect($this->generateUrl('admin_Filiere_index'));
        }
        return $this->render('ERPBundle:Admin/scolarite/filiere:add.html.twig', array('form' => $form->createView()));
    }
    public function updateFiliereAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $filiere = $em->getRepository('ERPBundle:Filiere')->findOneById(array($id));
        $form = $this->createForm(typeFiliere::class, $filiere);
        $form->handleRequest($request);
        if ($form->isSubmitted()){
            $em->flush();
            return $this->redirect($this->generateUrl('admin_Filiere_index'));
        }
        return $this->render('ERPBundle:Admin/scolarite/filiere:update.html.twig', array('form' => $form->createView(), 'id' => $id));
    }

    //diplome
    public function diplomeAction()
    {
        $em = $this->getDoctrine()->getManager();
        $diplome = $em->getRepository("ERPBundle:Diplome")->findBy(array('Etablissement'=>$this->getUser()->getEtablissement()));
        return $this->render('ERPBundle:Admin/scolarite/diplome:index.html.twig',array('diplome'=>$diplome));
    }
    public function addDiplomeAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(typeDiplome::class, new Diplome());
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $diplome = new Diplome();
            $diplome = $form->getData();
            $diplome->setEtablissement($this->getUser()->getEtablissement());
            $em->persist($diplome);
            $em->flush();
            return $this->redirect($this->generateUrl('admin_Diplome_index'));
        }
        return $this->render('ERPBundle:Admin/scolarite/diplome:add.html.twig', array('form' => $form->createView()));
    }
    public function updateDiplomeAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $diplome = $em->getRepository('ERPBundle:Diplome')->findOneById(array($id));
        $form = $this->createForm(typeDiplome::class, $diplome);
        $form->handleRequest($request);
        if ($form->isSubmitted()){
            $em->flush();
            return $this->redirect($this->generateUrl('admin_Diplome_index'));
        }
        return $this->render('ERPBundle:Admin/scolarite/diplome:update.html.twig', array('form' => $form->createView(), 'id' => $id));
    }

    //niveau
    public function niveauAction()
    {
        $em = $this->getDoctrine()->getManager();
        $niveau = $em->getRepository("ERPBundle:Niveau")->findAll();
        return $this->render('ERPBundle:Admin/scolarite/niveau:index.html.twig',array('niveau'=>$niveau));
    }
    public function addNiveauAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(typeNiveau::class, new Niveau());
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $niveau = new Niveau();
            $niveau = $form->getData();
            $niveau->setEtablissement($this->getUser()->getEtablissement());
            $em->persist($niveau);
            $em->flush();
            return $this->redirect($this->generateUrl('admin_Niveau_index'));
        }
        return $this->render('ERPBundle:Admin/scolarite/niveau:add.html.twig', array('form' => $form->createView()));
    }
    public function updateNiveauAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $filiere = $em->getRepository('ERPBundle:Niveau')->findOneById(array($id));
        $form = $this->createForm(typeNiveau::class, $filiere);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em->flush();
            return $this->redirect($this->generateUrl('admin_Niveau_index'));
        }
        return $this->render('ERPBundle:Admin/scolarite/niveau:update.html.twig', array('form' => $form->createView(), 'id' => $id));
    }

    //annee
    public function anneeAction()
    {
        $em = $this->getDoctrine()->getManager();
        $annee = $em->getRepository("ERPBundle:Annee")->findBy(array('Etablissement'=>$this->getUser()->getEtablissement()));
        return $this->render('ERPBundle:Admin/scolarite/annee:index.html.twig',array('annee'=>$annee));
    }
    public function addAnneeAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(typeAnnee::class, new Annee());
        $form->handleRequest($request);
        if ($request->getMethod() == 'POST') {
            $ann = new Annee();
            $ann = $form->getData();
            $ann->setEtablissement($this->getUser()->getEtablissement());
            $em->persist($ann);
            $em->flush();
            return $this->redirect($this->generateUrl('admin_Annee_index'));
        }
        return $this->render('ERPBundle:Admin/scolarite/annee:add.html.twig', array('form' => $form->createView()));
    }
    public function updateAnneeAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $annee = $em->getRepository('ERPBundle:Annee')->findOneById(array($id));
        $form = $this->createForm(typeAnnee::class, $annee);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em->flush();
            return $this->redirect($this->generateUrl('admin_Annee_index'));
        }
        return $this->render('ERPBundle:Admin/scolarite/annee:update.html.twig', array('form' => $form->createView(), 'id' => $id));
    }

    //specialite
    public function specialiteAction()
    {
        $em = $this->getDoctrine()->getManager();
        $specialite = $em->getRepository("ERPBundle:Specialite")->findBy(array('Etablissement'=>$this->getUser()->getEtablissement()));
        return $this->render('ERPBundle:Admin/scolarite/specialite:index.html.twig',array('specialite'=>$specialite));
    }
    public function addSpecialiteAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(typeSpecialite::class, new Specialite());
        $form->handleRequest($request);
        if ($request->getMethod() == 'POST') {
            $spec = new Specialite();
            $spec = $form->getData();
            $spec->setEtablissement($this->getUser()->getEtablissement());
            $em->persist($spec);
            $em->flush();
            return $this->redirect($this->generateUrl('admin_Specialite_index'));
        }
        return $this->render('ERPBundle:Admin/scolarite/specialite:add.html.twig', array('form' => $form->createView()));
    }
    public function updateSpecialiteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $spec = $em->getRepository('ERPBundle:Specialite')->findOneById(array($id));
        $form = $this->createForm(typeSpecialite::class, $spec);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em->flush();
            return $this->redirect($this->generateUrl('admin_Specialite_index'));
        }
        return $this->render('ERPBundle:Admin/scolarite/specialite:update.html.twig', array('form' => $form->createView(), 'id' => $id));
    }

    public function deleteSpecialiteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $spec = $em->getRepository('ERPBundle:Specialite')->findOneById(array($id));
        if($spec->getEnabled() == 0){
            $spec->setEnabled(1);
        }else{
            $spec->setEnabled(0);
        }
        $em->flush();
        return $this->redirect($this->generateUrl('admin_Specialite_index'));
    }
    public function specialiteUniteAddAction(Request $request ,$id){
        $em = $this->getDoctrine()->getManager();
        $unite = $em->getRepository('ERPBundle:UniteEnseignement')->findAll();
        return $this->render('ERPBundle:Admin/scolarite/specialite/unite:add.html.twig',array('unite'=>$unite,'id'=>$id));
    }
    public function addUniteSpecialiteAction($id,$spec){
        $em = $this->getDoctrine()->getManager();
        $specialite = $em->getRepository('ERPBundle:Specialite')->findOneById($spec);
        $unite = $em->getRepository('ERPBundle:UniteEnseignement')->findOneBy(array('id'=>$id));
        $unite->setSpecialite($specialite);
        $em->flush();
        return $this->redirect($this->generateUrl('admin_Specialite_unite_add',array('id'=>$spec)));
    }

    public function specialiteUniteUpdateAction(Request $request ,$id){
        $em = $this->getDoctrine()->getManager();
        $specialite = $em->getRepository('ERPBundle:Specialite')->findOneById($id);
        $unite = $em->getRepository('ERPBundle:UniteEnseignement')->findBy(array('specialite'=>$specialite));
        return $this->render('ERPBundle:Admin/scolarite/specialite/unite:update.html.twig',array('unite'=>$unite,'id'=>$id));
    }
    public function updateUniteSpecialiteAction($id,$spec){
        $em = $this->getDoctrine()->getManager();
        $specialite = $em->getRepository('ERPBundle:Specialite')->findOneById($spec);
        $unite = $em->getRepository('ERPBundle:UniteEnseignement')->findOneBy(array('id'=>$id));
        $unite->setSpecialite(null);
        $em->flush();
        return $this->redirect($this->generateUrl('admin_Specialite_unite_update',array('id'=>$spec)));
    }

    //Emloi de temps
    public function emploiAction()
    {
        $em = $this->getDoctrine()->getManager();
        $emploi = $em->getRepository("ERPBundle:Emploi")->findBy(array('etablissement'=>$this->getUser()->getEtablissement()));
        return $this->render('ERPBundle:Admin/scolarite/emploi:index.html.twig',array('emploi'=>$emploi));
    }

    public function addEmploiAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(typeEmploiClasse::class, new Emploi());
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $emploi = new Emploi();
            $emploi = $form->getData();
            $emploi->setEtablissement($this->getUser()->getEtablissement());
            $emploi->uploadEmploi();
            $emploi->setType('Classe');
            $em->persist($emploi);
            $em->flush();
            return $this->redirect($this->generateUrl('admin_Emploi_index'));
        }
        return $this->render('ERPBundle:Admin/scolarite/emploi:add.html.twig', array('form' => $form->createView()));
    }

    public function addEmploiEnseignantAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(typeEmploiEnseignant::class, new Emploi());
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $emploi = new Emploi();
            $emploi = $form->getData();
            $emploi->setEtablissement($this->getUser()->getEtablissement());
            $emploi->uploadEmploi();
            $emploi->setType('Enseignant');
            $em->persist($emploi);
            $em->flush();
            return $this->redirect($this->generateUrl('admin_Emploi_index'));
        }
        return $this->render('ERPBundle:Admin/scolarite/emploi:addEnseignant.html.twig', array('form' => $form->createView()));
    }

    public function deleteEmploiAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $emploi = $em->getRepository('ERPBundle:Emploi')->findOneById($id);
        if($emploi->getEnabled() == 0){
            $emploi->setEnabled(1);
        }else{
            $emploi->setEnabled(0);
        }
        $em->flush();
        return $this->redirect($this->generateUrl('admin_Emploi_index'));
    }

}
