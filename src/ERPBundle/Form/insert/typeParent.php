<?php

namespace ERPBundle\Form\insert;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
class typeParent extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nomPere', TextType::class, array('label' => 'Nom Pere', 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control type_client_cin', 'placeholder' => "Nom de pere")))
            ->add('cinPere', IntegerType::class, array('label' => 'CIN Pere', 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "cin de pere")))
            ->add('professionPere', TextType::class, array('label' => 'Profession Pere', 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Profession pere")))
            ->add('telPere', DateType::class, array('label' => 'Telephone Pere', 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Telephone de pere")))
            ->add('delivredPere', IntegerType::class, array('label' => 'date de livraison Cin Pere', 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control')))
            ->add('nomMere', TextType::class, array('label' => 'Nom Mere', 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Nom de mere")))
            ->add('cinMere', IntegerType::class, array('label' => 'CIN Mere', 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "cin de mere")))
            ->add('professionMere', TextType::class, array('label' => 'Profession Mere', 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "profession de mere")))
            ->add('telMere', IntegerType::class, array('label' => 'Telephone Mere', 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Telephone de mere")))
            ->add('delivredMere', DateType::class, array('label' => 'date de livraison Cin Mere', 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control')));
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    public function getBlockPrefix()
    {
        return 'erp_parent';
    }

    public function getName()
    {
        return $this->getBlockPrefix();
    }
}