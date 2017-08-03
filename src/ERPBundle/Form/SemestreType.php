<?php

namespace ERPBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SemestreType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom', TextType::class, array('label' => 'Nom de semestre', 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Nom de semestre")))
            ->add('dateDebut', DateType::class, array('widget' => 'single_text','label' => 'Date début semèstre', 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control js-datepicker')))
            ->add('dateFin', DateType::class, array('widget' => 'single_text','label' => 'Date fin semèstre', 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control js-datepicker')))
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ERPBundle\Entity\Semestre'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'erpbundle_semestre';
    }


}
