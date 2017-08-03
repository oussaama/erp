<?php

namespace ERPBundle\Form\insert;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use ERPBundle\Repository\FiliereRepository;
use Symfony\Component\OptionsResolver\OptionsResolver;

class typeSpecialite extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('nomSpecialite', TextType::class, array('label' => 'Specialite', 'required' => true, 'attr' => array( 'data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Nom de Specialite")))
                ->add('filiere', EntityType::class, array('label' => 'Filiere','class' => 'ERPBundle:Filiere','choice_label' => 'filiere','query_builder' => function (FiliereRepository $er) {return $er->createQueryBuilder('u');}, 'attr' => array('data-validation' => "required", 'class' => 'form-control')));

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ERPBundle\Entity\Specialite',
        ));
    }

    public function getName() {
        return 'erp_specialite';
    }

}
