<?php

namespace ERPBundle\Form;

use ERPBundle\Repository\EtudiantRepository;
use ERPBundle\Repository\SemestreRepository;
use ERPBundle\Repository\SessionRepository;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NoteType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ds', IntegerType::class, array('label' => 'DS','required' => false, 'attr' => array( 'class' => 'form-control', 'placeholder' => "DS",'required' => false)))
            ->add('exam', IntegerType::class, array('label' => 'Note d\'examen','required' => false, 'attr' => array( 'class' => 'form-control', 'placeholder' => "Examen",'required' => false)))
            ->add('test', IntegerType::class, array('label' => 'Autres', 'required' => false,'attr' => array( 'class' => 'form-control', 'placeholder' => "Autres",'required' => false)))
            ->add('tp', IntegerType::class, array('label' => 'TP','required' => false, 'attr' => array( 'class' => 'form-control', 'placeholder' => "TP",'required' => false)))
            ->add('cc', IntegerType::class, array('label' => 'Controle continue','required' => false, 'attr' => array('class' => 'form-control', 'placeholder' => "Controle continue",'required' => false)))
            ->add('etudiant', EntityType::class, array('class' => 'ERPBundle:Etudiant','choice_label' => 'username','query_builder' => function (EtudiantRepository $er) {return $er->createQueryBuilder('e')->orderBy('e.id', 'ASC');}, 'attr' => array('data-validation' => "required", 'class' => 'form-control')))
            ->add('semestre', EntityType::class, array('class' => 'ERPBundle:Semestre','choice_label' => 'nom','query_builder' => function (SemestreRepository $er) {return $er->createQueryBuilder('s')->orderBy('s.nom', 'ASC');}, 'attr' => array('data-validation' => "required", 'class' => 'form-control')))
            ->add('session', EntityType::class, array('class' => 'ERPBundle:Session','choice_label' => 'nom','query_builder' => function (SessionRepository $er) {return $er->createQueryBuilder('s')->orderBy('s.nom', 'ASC');}, 'attr' => array('data-validation' => "required", 'class' => 'form-control')));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ERPBundle\Entity\Note'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'erpbundle_note';
    }


}
