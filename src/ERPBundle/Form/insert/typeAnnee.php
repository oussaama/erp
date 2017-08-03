<?php

namespace ERPBundle\Form\insert;

use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class typeAnnee extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('annee', IntegerType::class, array('label' => 'Annee', 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Nom de client")))
                ->add('debut', DateType::class, array('widget' => 'single_text','label' => 'Debut', 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control js-datepicker', 'placeholder' => "cin de client")))
                ->add('fin', DateType::class, array('widget' => 'single_text','label' => 'Fin', 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control js-datepicker', 'placeholder' => "Telephone de client")));

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ERPBundle\Entity\Annee',
        ));
    }

    public function getName() {
        return 'erp_annee';
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'js_validation' => true
        ));
    }


}
