<?php

namespace ERPBundle\Form\update;

use Symfony\Component\Form\AbstractType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use ERPBundle\Repository\EtablissementRepository;
class typeParentEdit extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nomPere', TextType::class, array('label' => 'Nom Pere', 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control type_client_cin', 'placeholder' => "Nom de pere")))
            ->add('cinPere', IntegerType::class, array('label' => 'CIN Pere', 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "cin de pere")))
            ->add('professionPere', TextType::class, array('label' => 'Profession Pere', 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Profession pere")))
            ->add('telPere', IntegerType::class, array('label' => 'Telephone Pere', 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Telephone de pere")))
            ->add('nomMere', TextType::class, array('label' => 'Nom Mere', 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Nom de mere")))
            ->add('cinMere', IntegerType::class, array('label' => 'CIN Mere', 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "cin de mere")))
            ->add('professionMere', TextType::class, array('label' => 'Profession Mere', 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "profession de mere")))
            ->add('telMere', IntegerType::class, array('label' => 'Telephone Mere', 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Telephone de mere")));
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