<?php

namespace ERPBundle\Form\insert;

use Symfony\Component\Form\AbstractType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use ERPBundle\Repository\PaysRepository;

class typeEnseignant extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('fullName', TextType::class, array('label' => false, 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Nom d'enseignant")))
            ->add('cin', IntegerType::class, array('label' => false, 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "cin d'enseignant")))
            ->add('tel', IntegerType::class, array('label' => false, 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Telephone d'enseignant")))
            ->add('adresse', TextType::class, array('label' => false, 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Adresse d'enseignant")))
            ->add('cp', IntegerType::class, array('label' => false, 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Code postal d'enseignant")))
            ->add('ville', TextType::class, array('label'=>  false, 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Ville d'enseignant")))
            ->add('pays', EntityType::class, array('label' => false,'class' => 'ERPBundle:Pays','choice_label' => 'name','query_builder' => function (PaysRepository $er) {return $er->createQueryBuilder('u');}, 'attr' => array('data-validation' => "required", 'class' => 'form-control')))
            ->add('specialite', TextType::class, array('label' =>  false, 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Specialite d'enseignant")))
            ->add('grade', TextType::class, array('label' =>  false, 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Grade d'enseignant")));
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    public function getBlockPrefix()
    {
        return 'erp_enseignant';
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