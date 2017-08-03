<?php

namespace ERPBundle\Form;

use ERPBundle\Repository\ClasseRepository;
use ERPBundle\Repository\MatiereRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CourType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom', TextType::class, array('label' => 'Nom cour', 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Nom du cour")))
            ->add('datePublication', DateType::class, array('widget' => 'single_text','label' => 'Date  Publication', 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control js-datepicker')))            ->add('coursFichier', FileType::class, array('label' => 'Cour', 'required' => true,'multiple'=>true,'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Cour")))
            ->add('classe', EntityType::class, array('class' => 'ERPBundle:Classe','choice_label' => 'nomClass','query_builder' => function (ClasseRepository $er) {return $er->createQueryBuilder('c')->orderBy('c.nomClass', 'ASC');}, 'attr' => array('data-validation' => "required", 'class' => 'form-control')))
            ->add('matiere', EntityType::class, array('class' => 'ERPBundle:Matiere','choice_label' => 'nom','query_builder' => function (MatiereRepository $er) {return $er->createQueryBuilder('m')->orderBy('m.nom', 'ASC');}, 'attr' => array('data-validation' => "required", 'class' => 'form-control')))
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ERPBundle\Entity\Cour'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'erpbundle_cour';
    }


}
