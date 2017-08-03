<?php

namespace ERPBundle\Form\insert;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use ERPBundle\Repository\DiplomeRepository;
use Symfony\Component\OptionsResolver\OptionsResolver;

class typeFiliere extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('filiere', TextType::class, array('label' => 'Nom Filiere', 'required' => true, 'attr' => array( 'data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Nom de Filiere")))
                ->add('diplome', EntityType::class, array('class' => 'ERPBundle:Diplome','choice_label' => 'nom','query_builder' => function (DiplomeRepository $er) {return $er->createQueryBuilder('u')->orderBy('u.nom', 'ASC');}, 'attr' => array('data-validation' => "required", 'class' => 'form-control')));

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ERPBundle\Entity\Filiere',
        ));
    }

    public function getName() {
        return 'erp_feliere';
    }

}
