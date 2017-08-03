<?php

namespace ERPBundle\Form\insert;

use Symfony\Component\Form\AbstractType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use ERPBundle\Repository\EtablissementRepository;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class typeEleve extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('fullName', TextType::class, array('label' => 'Nom et Prenom', 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control type_client_cin', 'placeholder' => "Nom d'etudiant")))
            ->add('cin', IntegerType::class, array('label' => 'CIN', 'required' => false, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "cin d'etudiant")))
            ->add('tel', IntegerType::class, array('label' => 'Telephone', 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Telephone d'etudiant")))
            ->add('adresse', TextType::class, array('label' => 'Adresse', 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Adresse d'etudiant")))
            ->add('cp', IntegerType::class, array('label' => 'Code Postal', 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Code postal d'etudiant")))
            ->add('ville', TextType::class, array('label' => 'Ville', 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Ville d'etudiant")))
            ->add('pays', TextType::class, array('label' => 'Pays', 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Pays d'etudiant")))
            ->add('Etablissement', EntityType::class, array('class' => 'ERPBundle:Etablissement','choice_label' => 'nomEtablissement', 'query_builder' => function (EtablissementRepository $er) {return $er->createQueryBuilder('u')->where('u.typeEtablissement = :lycee')->setParameter('lycee','lycee');}, 'attr' => array('data-validation' => "required", 'class' => 'form-control')));
        $builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function (FormEvent $event) {
                $form = $event->getForm();
                $data = $event->getData();

                $sport = $data->getEtablissement();
                $positions = null === $sport ? array() : $sport->getSpecialite()->getNomSpecialite();

                $form->add('specialite', EntityType::class, array(
                    'class'       => 'ERPBundle:Specialite',
                    'placeholder' => '',
                    'choices'     => $positions,
                ));
            });
        }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    public function getBlockPrefix()
    {
        return 'erp_eleve';
    }

    public function getName()
    {
        return $this->getBlockPrefix();
    }

}