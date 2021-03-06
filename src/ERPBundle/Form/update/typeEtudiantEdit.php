<?php

namespace ERPBundle\Form\update;

use Symfony\Component\Form\AbstractType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use ERPBundle\Repository\SpecialiteRepository;
use ERPBundle\Repository\DiplomeRepository;
use ERPBundle\Repository\FiliereRepository;
use ERPBundle\Repository\NiveauRepository;
use ERPBundle\Repository\PaysRepository;

class typeEtudiantEdit extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom', TextType::class, array('label' => false, 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control type_client_cin', 'placeholder' => "Nom d'etudiant")))
            ->add('prenom', TextType::class, array('label' => false, 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control type_client_cin', 'placeholder' => "Prenom d'etudiant")))
            ->add('naissance', DateType::class, array('widget' => 'single_text','label' => false, 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control js-datepicker', 'placeholder' => "Date Naissance d'etudiant")))
            ->add('lieu', TextType::class, array('label' => false, 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control type_client_cin', 'placeholder' => "Lieu de naissance d'etudiant")))
            ->add('cin', TextType::class, array('label' => false, 'required' => true, 'attr' => array('class' => 'form-control', 'placeholder' => "cin/passport d'etudiant")))
            ->add('sex', ChoiceType::class, array('choices'  => array('Homme' => true, 'Femme' => false,),'label' => false, 'required' => true, 'attr' => array('class' => 'form-control', 'placeholder' => "cin/passport d'etudiant")))
            ->add('tel', IntegerType::class, array('label' => false, 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Telephone d'etudiant")))
            ->add('pays', EntityType::class, array('label' => false,'class' => 'ERPBundle:Pays','choice_label' => 'name','query_builder' => function (PaysRepository $er) {return $er->createQueryBuilder('u');}, 'attr' => array('data-validation' => "required", 'class' => 'form-control')))
            ->add('ville', TextType::class, array('label' => false, 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Ville d'etudiant")))
            ->add('adresse', TextType::class, array('label' =>false, 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Adresse d'etudiant")))
            ->add('cp', IntegerType::class, array('label' => false, 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Code postal d'etudiant")))
            ->add('niveauEtude', ChoiceType::class, array('choices'  => array('Bac' => 'bac', 'Bac+1' => 'bac+1', 'Bac+2' => 'bac+2', 'Bac+3' => 'bac+3', 'Bac+4' => 'bac+4', 'Bac+5' => 'bac+5',),'label' => false, 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Niveau d'études étudiant")))
            ->add('diplome', EntityType::class, array('label' => false,'class' => 'ERPBundle:Diplome','choice_label' => 'nom','query_builder' => function (DiplomeRepository $er) {return $er->createQueryBuilder('u')->orderBy('u.id','ASC');}, 'attr' => array('data-validation' => "required", 'class' => 'form-control')))
            ->add('filiere', EntityType::class, array('label' => false,'class' => 'ERPBundle:Filiere','choice_label' => 'filiere','query_builder' => function (FiliereRepository $er) {return $er->createQueryBuilder('u');}, 'attr' => array('data-validation' => "required", 'class' => 'form-control')))
            ->add('specialite', EntityType::class, array('label' => false,'class' => 'ERPBundle:Specialite','required' => true, 'choice_label' => 'nomSpecialite',  'query_builder' => function (SpecialiteRepository $er) {return $er->createQueryBuilder('u');},'attr' => array('data-validation' => "required", 'class' => 'form-control')))
            ->add('niveau', EntityType::class, array('label' => false,'class' => 'ERPBundle:Niveau','choice_label' => 'niveau','query_builder' => function (NiveauRepository $er) {return $er->createQueryBuilder('u');}, 'attr' => array('data-validation' => "required", 'class' => 'form-control')));
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    public function getBlockPrefix()
    {
        return 'erp_etudiant';
    }

    public function getName()
    {
        return $this->getBlockPrefix();
    }
}