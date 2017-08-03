<?php

namespace ERPBundle\Form;

use ERPBundle\Repository\ClasseRepository;
use ERPBundle\Repository\SalleRepository;
use ERPBundle\Repository\MatiereRepository;
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
        $builder->add('matiere', EntityType::class, array('class' => 'ERPBundle:Matiere','choice_label' => 'nom','query_builder' => function (MatiereRepository $er) {return $er->createQueryBuilder('m')->orderBy('m.nom', 'ASC');}, 'attr' => array('data-validation' => "required", 'class' => 'form-control')))
            ->add('type', ChoiceType::class, array(
                'choices'  => array(
                    '-- Veuillez choisir le type l\'examen --' => '',
                    'TP' => 'tp',
                    'Examen principale' => 'examen principale',
                    'Examen controle' => 'examen controle',
                    'Test' => 'test',
                    'DS' => 'ds',
                    'Controle continue' => 'cc',
                    'Autres' => 'autres',
                ), 'attr' => array('data-validation' => "required", 'class' => 'form-control')))

            ->add('dateExamen', DateType::class, array('widget' => 'single_text','label' => 'Date examen', 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control js-datepicker')))
            ->add('duree', TextType::class, array('label' => 'Durée', 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Durée")))
         //   ->add('enseignant')
            ->add('salle', EntityType::class, array('class' => 'ERPBundle:Salle','choice_label' => 'nom','query_builder' => function (SalleRepository $er) {return $er->createQueryBuilder('s')->orderBy('s.nom', 'ASC');}, 'attr' => array('data-validation' => "required", 'class' => 'form-control')))
            ->add('classe', EntityType::class, array('class' => 'ERPBundle:Classe','choice_label' => 'nomClass','query_builder' => function (ClasseRepository $er) {return $er->createQueryBuilder('c')->orderBy('c.nomClass', 'ASC');}, 'attr' => array('data-validation' => "required", 'class' => 'form-control')));
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
