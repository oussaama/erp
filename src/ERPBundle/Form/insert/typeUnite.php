<?php

namespace ERPBundle\Form\insert;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class typeUnite extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('nom', TextType::class, array('label' => 'Nom', 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control type_client_cin', 'placeholder' => "Nom UE")))
                ->add('Semestre', EntityType::class, array('label' => 'Semestre', 'required' => true,'class' => 'ERPBundle:Semestre', 'choice_label' => 'nom','attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Semestre")));

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ERPBundle\Entity\UniteEnseignement',
        ));
    }

    public function getName() {
        return 'erp_unite_enseignement';
    }



}
