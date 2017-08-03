<?php

namespace ERPBundle\Form\insert;

use ERPBundle\Repository\FiliereRepository;
use ERPBundle\Repository\SliceRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use ERPBundle\Repository\SlicesRepository;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class PaymentType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('solde', IntegerType::class, array('label' => false, 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Solde")))
        ->add('status', EntityType::class, array('label' => false,'class' => 'ERPBundle:Status','choice_label' => 'type', 'attr' => array('data-validation' => "required", 'class' => 'form-control')))
            ->add('carte', TextType::class, array('label' => false, 'required' => false, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Numero Compte")));


 //->add('slice', EntityType::class, array('class' => 'ERPBundle:Slice','choice_label' => 'title','query_builder' => function (SliceRepository $er) {return $er->createQueryBuilder('s')->orderBy('s.	title', 'ASC');}, 'attr' => array('data-validation' => "required", 'class' => 'form-control')));

        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ERPBundle\Entity\Payment'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'erpbundle_payment';
    }


}
