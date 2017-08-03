<?php

namespace ERPBundle\Form\insert;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class typeContact extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('nom', TextType::class, array('label' => false, 'required' => true, 'attr' => array('data-validation' => "required")));

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ERPBundle\Entity\Media',
        ));
    }

    public function getName() {
        return 'erp_contact';
    }



}
