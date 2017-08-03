<?php

namespace ERPBundle\Form\insert;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class typeClasse extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('nomClass', TextType::class, array('label' => 'Nom', 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control type_client_cin', 'placeholder' => "Nom de classe")))
                ->add('Specialite', EntityType::class, array('label' => 'Specialite', 'required' => true,'class' => 'ERPBundle:Specialite', 'choice_label' => 'nomSpecialite','attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Specialite de classe")))
                ->add('Annee', EntityType::class, array('label' => 'Annee', 'required' => true,'class' => 'ERPBundle:Annee', 'choice_label' => 'annee','attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Annee")));

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ERPBundle\Entity\Classe',
        ));
    }

    public function getName() {
        return 'erp_classe';
    }



}
