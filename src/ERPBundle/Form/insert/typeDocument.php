<?php

namespace ERPBundle\Form\insert;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class typeDocument extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('fichierId', FileType::class, array('label' => false,'multiple'=>true, 'required' => true, 'attr' => array('class' => 'form-control')))
            ->add('fichierDiplome', FileType::class, array('label' => false,'multiple'=>true, 'required' => true, 'attr' => array('class' => 'form-control')))
            ->add('fichierNote', FileType::class, array('label' => false, 'multiple'=>true,'required' => true, 'attr' => array('class' => 'form-control')))
            ->add('fichierExtrait', FileType::class, array('label' => false, 'multiple'=>true,'required' => true, 'attr' => array('class' => 'form-control')))
            ->add('Upload', SubmitType::class, array('attr' => array('class' => 'btn btn-primary site-btn pull-right btn-lg')));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ERPBundle\Entity\Document',
        ));
    }

    public function getName()
    {
        return 'erp_document';
    }


}
