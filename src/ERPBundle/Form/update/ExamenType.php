<?php

namespace ERPBundle\Form\update;

use ERPBundle\Repository\ClasseRepository;
use ERPBundle\Repository\SalleRepository;
use ERPBundle\Repository\MatiereRepository;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ExamenType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('qualified', ChoiceType::class, array(
                'choices'  => array(
                    '-- Veuillez qualifier l\'examen --' => '',
                    'activé' => 1,
                    'Non activé' => 0,
                ), 'attr' => array('class' => 'form-control')))
            ->add('description', TextareaType::class, array('required' => false, 'attr' => array('class' => 'form-control', 'placeholder' => "Description")))
            ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ERPBundle\Entity\Examen'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'erpbundle_examen';
    }


}
