<?php

namespace ERPBundle\Form;

use ERPBundle\Repository\EnseignantRepository;
use ERPBundle\Repository\EtudiantRepository;
use ERPBundle\Repository\MatiereRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AppsenseType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('dateAppsense', DateType::class, array('widget' => 'single_text','label' => 'Date début absence', 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'js-datepicker form-control')))
            ->add('enseignant', EntityType::class, array('class' => 'ERPBundle:Enseignant','choice_label' => 'fullName','query_builder' => function (EnseignantRepository $er) {return $er->createQueryBuilder('en')->orderBy('en.fullName', 'ASC');}, 'attr' => array('data-validation' => "required", 'class' => 'form-control')))
            ->add('matiere', EntityType::class, array('class' => 'ERPBundle:Matiere','choice_label' => 'nom','query_builder' => function (MatiereRepository $er) {return $er->createQueryBuilder('m')->orderBy('m.nom', 'ASC');}, 'attr' => array('data-validation' => "required", 'class' => 'form-control')))
            ->add('present', RadioType::class, array('required' => true))
            ->add('absent', RadioType::class, array('required' => true))
            ->add('retard', RadioType::class, array('required' => true))
            ->add('tp', CheckboxType::class, array('required' => true))
            ->add('td', CheckboxType::class, array('required' => true))
            ->add('cour', CheckboxType::class, array('required' => true))
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ERPBundle\Entity\Appsense'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'erpbundle_appsense';
    }


}
