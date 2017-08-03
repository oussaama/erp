<?php

namespace ERPBundle\Form\insert;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use ERPBundle\Repository\DiplomeRepository;
use Symfony\Component\OptionsResolver\OptionsResolver;

class typeDiplome extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('nom', TextType::class, array('label' => 'Nom Diplome', 'required' => true, 'attr' => array( 'data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Nom de Diplome")));

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ERPBundle\Entity\Diplome',
        ));
    }

    public function getName() {
        return 'erp_diplome';
    }

}
