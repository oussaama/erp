<?php

namespace ERPBundle\Form\insert;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class typeClient extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('fullName', TextType::class, array('label' => 'Nom', 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control type_client_cin', 'placeholder' => "Nom de client")))
                ->add('cin', IntegerType::class, array('label' => 'CIN', 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "cin de client")))
                ->add('tel', IntegerType::class, array('label' => 'Telephone', 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Telephone de client")))
                ->add('mail', EmailType::class, array('label' => 'Email', 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Email de client")))
                ->add('adresse', TextType::class, array('label' => 'Adresse', 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Adresse de client")))
                ->add('cp', IntegerType::class, array('label' => 'Code Postal', 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Code postal de client")))
                 ->add('ville', TextType::class, array('label' => 'Ville', 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Ville de client")))
                ->add('pays', TextType::class, array('label' => 'Pays', 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Pays de client")));

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ERPBundle\Entity\Client',
        ));
    }

    public function getName() {
        return 'erp_client';
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'js_validation' => true
        ));
    }


}
