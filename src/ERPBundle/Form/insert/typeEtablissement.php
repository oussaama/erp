<?php

namespace ERPBundle\Form\insert;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class typeEtablissement extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('fichier', FileType::class, array('label' => 'Signature Directeur', 'required' => true, 'attr' => array( 'class' => 'form-control', 'placeholder' => "Signature directeur de l'etablissement")))
            ->add('nomEtablissement', TextType::class, array('label' => 'Nom d,etablissement', 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Nom d'etablissement")))
            ->add('typeEtablissement', ChoiceType::class, array('label' => "Type d'etablissement", 'choices' => array(
                'Universite' => 'Université',
                'Centre de Formation' => 'Centre Formation',
                'lycee' => 'lycée',
                'college' => 'college',
                'primaire' => 'primaire',
                'garderie' => 'garderie'
            ), 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control')))
                ->add('academie', TextType::class, array('label' => 'Academie', 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Academie de l'etablissement")))
        ->add('anneeScolaire', TextType::class, array('label' => 'Annee Scolaire', 'required' => true, 'attr' => array('maxlength' => 11, 'data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Annee scolaire l'etablissement")))
        ->add('adresse', TextType::class, array('label' => 'Adresse', 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Adresse de l'etablissement")))
        ->add('codePostal', NumberType::class, array('label' => 'Code Postal', 'required' => true, 'attr' => array('maxlength' => 4, 'data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Code Postal de l'etablissement")))
        ->add('ville', TextType::class, array('label' => 'Ville', 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Ville de l'etablissement")))
        ->add('departement', TextType::class, array('label' => 'Departement', 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Departement de l'etablissement")))
        ->add('pays', TextType::class, array('label' => 'Pays', 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Pays de l'etablissement")))
        ->add('mail', TextType::class, array('label' => 'Email', 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Email de l'etablissement")))
        ->add('tel', NumberType::class, array('label' => 'Telephone', 'required' => true, 'attr' => array('minlength' => 8, 'class' => 'form-control', 'placeholder' => "Telephone de l'etablissement")))
        ->add('fax', NumberType::class, array('label' => 'Fax', 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "Fax de l'etablissement")))
        ->add('file', FileType::class, array('label' => 'Logo',  'required' => true,'attr' => array('class' => 'form-control', 'placeholder' => "Logo de l'etablissement")))
        ->add('siteWeb', textType::class, array('label' => 'Site web', 'required' => true, 'attr' => array('data-validation' => "required", 'class' => 'form-control', 'placeholder' => "site web de l'etablissement")))
            ->add('Ajouter', SubmitType::class, array('attr' => array('class' => 'btn btn-primary site-btn ')));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ERPBundle\Entity\Etablissement',
        ));
    }

    public function getName()
    {
        return 'erp_etablissement';
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'js_validation' => true
        ));
    }

}
