<?php

namespace ERPBundle\Form\insert;

use Symfony\Component\Form\AbstractType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use ERPBundle\Repository\SpecialiteRepository;
use ERPBundle\Repository\FiliereRepository;
use ERPBundle\Repository\NiveauRepository;
use Symfony\Component\Validator\Constraints\Type;

class typeEtudiant extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('fullName', TextType::class, array('label' => false, 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control type_client_cin', 'placeholder' => "Nom d'etudiant")))
            ->add('cin', IntegerType::class, array('label' => false, 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "cin d'etudiant")))
            ->add('tel', IntegerType::class, array('label' => false, 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Telephone d'etudiant")))
            ->add('adresse', TextType::class, array('label' => false, 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Adresse d'etudiant")))
            ->add('cp', IntegerType::class, array('label' => false, 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Code postal d'etudiant")))
            ->add('ville', TextType::class, array('label' => false, 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Ville d'etudiant")))
            ->add('pays', TextType::class, array('label' => false, 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Pays d'etudiant")))
            ->add('specialite', EntityType::class, array('label' => false,'class' => 'ERPBundle:Specialite','choice_label' => 'nomSpecialite','query_builder' => function (SpecialiteRepository $er) {return $er->createQueryBuilder('u')->orderBy('u.nomSpecialite', 'ASC');}, 'attr' => array('data-validation' => "required", 'class' => 'form-control')))
            ->add('filiere', EntityType::class, array('label' => false,'class' => 'ERPBundle:Filiere','choice_label' => 'filiere','query_builder' => function (FiliereRepository $er) {return $er->createQueryBuilder('u')->orderBy('u.filiere', 'ASC');}, 'attr' => array('data-validation' => "required", 'class' => 'form-control')))
            ->add('niveau', EntityType::class, array('label' => false,'class' => 'ERPBundle:Niveau','choice_label' => 'niveau','query_builder' => function (NiveauRepository $er) {return $er->createQueryBuilder('u')->orderBy('u.niveau', 'ASC');}, 'attr' => array('data-validation' => "required", 'class' => 'form-control')));
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