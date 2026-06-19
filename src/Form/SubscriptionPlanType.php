<?php
// src/Form/SubscriptionPlanType.php

namespace App\Form;

use App\Entity\SubscriptionPlan;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SubscriptionPlanType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // ========== INFORMATIONS GÉNÉRALES ==========
            ->add('name', TextType::class, [
                'label' => 'Nom technique',
                'attr' => ['placeholder' => 'ex: basic, premium']
            ])
            ->add('displayName', TextType::class, [
                'label' => 'Nom affiché',
                'attr' => ['placeholder' => 'ex: Basic, Premium']
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'required' => false,
                'attr' => ['rows' => 4, 'placeholder' => 'Courte description du plan...']
            ])

            // ========== TARIFS ==========
            ->add('priceMonthly', MoneyType::class, [
                'label' => 'Prix mensuel (FCFA)',
                'currency' => 'XOF',
                'scale' => 0,
                'grouping' => true,
                'attr' => ['placeholder' => 'ex: 25000']
            ])
            ->add('priceYearly', MoneyType::class, [
                'label' => 'Prix annuel (FCFA)',
                'currency' => 'XOF',
                'scale' => 0,
                'grouping' => true,
                'attr' => ['placeholder' => 'ex: 250000']
            ])

            // ========== LIMITES COMMERCE ==========
            ->add('maxUsersPerRole', IntegerType::class, [
                'label' => 'Max utilisateurs par rôle',
                'required' => false,
                'attr' => ['placeholder' => 'Laissez vide pour illimité']
            ])
            ->add('maxProducts', IntegerType::class, [
                'label' => 'Max produits',
                'required' => false,
                'attr' => ['placeholder' => 'Laissez vide pour illimité']
            ])
            ->add('maxOrdersPerMonth', IntegerType::class, [
                'label' => 'Max commandes par mois',
                'required' => false,
                'attr' => ['placeholder' => 'Laissez vide pour illimité']
            ])
            ->add('maxCategories', IntegerType::class, [
                'label' => 'Max catégories',
                'required' => false,
                'attr' => ['placeholder' => 'Laissez vide pour illimité']
            ])
            ->add('maxSuppliers', IntegerType::class, [
                'label' => 'Max fournisseurs',
                'required' => false,
                'attr' => ['placeholder' => 'Laissez vide pour illimité']
            ])

            // ========== LIMITES RESTAURANT ==========
            ->add('maxRecipes', IntegerType::class, [
                'label' => 'Max recettes',
                'required' => false,
                'attr' => ['placeholder' => 'Laissez vide pour illimité']
            ])
            ->add('maxRecipeCategories', IntegerType::class, [
                'label' => 'Max catégories de recettes',
                'required' => false,
                'attr' => ['placeholder' => 'Laissez vide pour illimité']
            ])

            // ========== FONCTIONNALITÉS ==========
            ->add('features', CollectionType::class, [
                'label' => false,  // ← Désactive complètement le label
                'entry_type' => TextType::class,
                'allow_add' => true,
                'allow_delete' => true,
                'prototype' => true,
                'by_reference' => false,
                'required' => false,
                'attr' => [
                    'class' => 'features-collection'
                ],
                'entry_options' => [
                    'attr' => [
                        'placeholder' => 'Ex: Gestion des stocks, Export PDF, API...',
                        'class' => 'form-control rounded-3'
                    ]
                ]
            ])

            // ========== STATUT ==========
            ->add('isActive', CheckboxType::class, [
                'label' => 'Actif',
                'required' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => SubscriptionPlan::class,
        ]);
    }
}