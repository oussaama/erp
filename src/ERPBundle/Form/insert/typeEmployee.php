<?php

namespace ERPBundle\Form\insert;

use Symfony\Component\Form\AbstractType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use ERPBundle\Repository\PaysRepository;


class typeEmployee extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('fullName', TextType::class, array('error_bubbling'=>false,'label' => false, 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Nom et Prénom d'employee")))
            ->add('cin', TextType::class, array('label' =>false, 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control ', 'placeholder' => "Cin d'employée")))
            ->add('tel', IntegerType::class, array('label' => false, 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Telephone d'employee")))
            ->add('adresse', TextType::class, array('label' => false, 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Adresse d'employee")))
            ->add('cp', IntegerType::class, array('label' => false, 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Code postal d'employee")))
            ->add('ville', TextType::class, array('label' => false, 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Ville d'employee")))
            ->add('pays', EntityType::class, array('label' => false,'class' => 'ERPBundle:Pays','choice_label' => 'name','query_builder' => function (PaysRepository $er) {return $er->createQueryBuilder('u');}, 'attr' => array('data-validation' => "required", 'class' => 'form-control')))
            ->add('poste', TextType::class, array('label' => false, 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Poste d'employee")))
            ->add('salaire', IntegerType::class, array('label' => false, 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Salaire d'employee")));
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    public function getBlockPrefix()
    {
        return 'erp_employee';
    }

    public function getName()
    {
        return $this->getBlockPrefix();
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'js_validation' => true
        ));
    }
}