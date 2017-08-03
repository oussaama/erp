<?php

namespace ERPBundle\Form\insert;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use ERPBundle\Repository\SpecialiteRepository;
use ERPBundle\Repository\NiveauRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class typeMatiere extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('nom', TextType::class, array('label' => false, 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control type_client_cin', 'placeholder' => "Nom de Matiere")))
                ->add('coef', TextType::class, array('label' => false, 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control type_client_cin', 'placeholder' => "Coefession de Matiere")))
                ->add('credit', textType::class, array('label' => false, 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Credit de Matiere")))
                ->add('td', TextType::class, array('label' => false, 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control type_client_cin', 'placeholder' => "Nombre des Heures de TD")))
                ->add('tp', textType::class, array('label' => false, 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Nombre des Heures de TP")))
                ->add('cours', textType::class, array('label' => false, 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Nombre des Heures de Cours")))
                ->add('specialite', EntityType::class, array('label' => false,'class' => 'ERPBundle:Specialite','choice_label' => 'nomSpecialite','query_builder' => function (SpecialiteRepository $er) {return $er->createQueryBuilder('u')/*->where('u.id =0')*/;}, 'attr' => array('data-validation' => "required", 'class' => 'form-control')))
                ->add('niveau', EntityType::class, array('label' => false,'class' => 'ERPBundle:Niveau','choice_label' => 'niveau','query_builder' => function (NiveauRepository $er) {return $er->createQueryBuilder('u')/*->where('u.id =0')*/;}, 'attr' => array('data-validation' => "required", 'class' => 'form-control')));

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ERPBundle\Entity\Matiere',
        ));
    }

    public function getName() {
        return 'erp_classe';
    }



}
