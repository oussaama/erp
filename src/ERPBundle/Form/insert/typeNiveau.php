<?php

namespace ERPBundle\Form\insert;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use ERPBundle\Repository\SpecialiteRepository;
use Symfony\Component\OptionsResolver\OptionsResolver;

class typeNiveau extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('niveau', TextType::class, array('label' => 'Niveau', 'required' => true, 'attr' => array( 'data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Nom de Niveau")));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ERPBundle\Entity\Niveau',
        ));
    }

    public function getName() {
        return 'erp_niveau';
    }

}
