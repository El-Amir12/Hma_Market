<?php
// src/Form/CompanySettingsType.php

namespace App\Form;

use App\Entity\HmaService;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CompanySettingsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // === INFORMATIONS GÉNÉRALES ===
            ->add('companyName', TextType::class, [
                'label' => 'Nom de l\'entreprise',
                'required' => true,
                'attr' => ['class' => 'form-control', 'placeholder' => 'Nom commercial']
            ])
            ->add('slogan', TextType::class, [
                'label' => 'Slogan',
                'required' => false,
                'attr' => ['class' => 'form-control', 'placeholder' => 'Votre slogan']
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'required' => false,
                'attr' => ['class' => 'form-control', 'rows' => 3]
            ])
            ->add('logoFile', FileType::class, [
                'label' => 'Logo de l\'entreprise',
                'required' => false,
                'mapped' => false,
                'attr' => ['class' => 'form-control', 'accept' => 'image/*']
            ])
            
            // === CONTACT ===
            ->add('email', EmailType::class, [
                'label' => 'Email principal',
                'required' => false,
                'mapped' => false,
                'disabled' => true,
                'attr' => ['class' => 'form-control']
            ])
            ->add('phone', TelType::class, [
                'label' => 'Téléphone',
                'required' => true,
                'attr' => ['class' => 'form-control']
            ])
            ->add('address', TextType::class, [
                'label' => 'Adresse',
                'required' => false,
                'attr' => ['class' => 'form-control']
            ])
            ->add('city', TextType::class, [
                'label' => 'Ville',
                'required' => false,
                'attr' => ['class' => 'form-control']
            ])
            ->add('country', CountryType::class, [
                'label' => 'Pays',
                'required' => false,
                'placeholder' => 'Sélectionnez un pays',
                'attr' => ['class' => 'form-select']
            ])
            ->add('website', UrlType::class, [
                'label' => 'Site web',
                'required' => false,
                'attr' => ['class' => 'form-control']
            ])
            
            // === TICKET DE CAISSE ===
            ->add('receiptHeader', TextareaType::class, [
                'label' => 'En-tête du ticket',
                'required' => false,
                'attr' => ['class' => 'form-control', 'rows' => 2]
            ])
            ->add('receiptFooter', TextareaType::class, [
                'label' => 'Pied de page du ticket',
                'required' => false,
                'attr' => ['class' => 'form-control', 'rows' => 2]
            ])
            
            // === TAXES ===
            ->add('defaultTaxRate', TextType::class, [
                'label' => 'Taux de TVA par défaut (%)',
                'required' => false,
                'attr' => ['class' => 'form-control']
            ])
        ;
    }
    
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => HmaService::class,
        ]);
    }
}