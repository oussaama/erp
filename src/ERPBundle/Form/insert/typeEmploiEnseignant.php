<?php

namespace ERPBundle\Form\insert;

use Symfony\Component\Form\AbstractType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use ERPBundle\Repository\SlicesRepository;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class typeEmploiEnseignant extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('fichierEmploi', FileType::class, array('label' => false, 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control')))
        ->add('enseignant', EntityType::class, array('label' => false,'class' => 'ERPBundle:Enseignant','choice_label' => 'fullName', 'attr' => array('data-validation' => "required", 'class' => 'form-control')));

    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ERPBundle\Entity\Emploi'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'erpbundle_emploi_enseignant';
    }


}
