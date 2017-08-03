<?php

namespace ERPBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SessionType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom', TextType::class, array('label' => 'Nom de session', 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Nom de session")))
            ->add('nom', ChoiceType::class, array(
                'choices'  => array(
                    '-- Veuillez choisir le nom de session --' => '',
                    'Session principale' => 'Session principale',
                    'Session controle' => 'Session controle',
                    'Autres' => 'autres',
                ), 'attr' => array('data-validation' => "required", 'class' => 'form-control')))
            ->add('dateDebut', DateType::class, array('widget' => 'single_text','label' => 'Date début session', 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control js-datepicker')))
            ->add('dateFin', DateType::class, array('widget' => 'single_text','label' => 'Date fin session', 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control js-datepicker')));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ERPBundle\Entity\Session'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'erpbundle_session';
    }


}
