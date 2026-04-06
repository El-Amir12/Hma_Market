<?php
// src/Form/PromotionType.php

namespace App\Form;

use App\Entity\Promotion;
use App\Entity\TypePromotion;
use App\Entity\HmaService;
use App\Repository\TypePromotionRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PromotionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $hmaService = $options['hma_service'];
        $companyType = $options['company_type'] ?? 'market';
        
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom de la promotion',
                'attr' => ['class' => 'form-control', 'placeholder' => ' ']
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'required' => false,
                'attr' => ['rows' => 3, 'class' => 'form-control', 'placeholder' => ' ']
            ])
            ->add('typePromotion', EntityType::class, [
                'class' => TypePromotion::class,
                'choice_label' => 'name',
                'placeholder' => 'Sélectionnez un type',
                'query_builder' => function (TypePromotionRepository $repo) use ($options) {
                    $hmaService = $options['hma_service'] ?? null;
                    if (!$hmaService) {
                        return $repo->createQueryBuilder('t')->where('1 = 0');
                    }
                    return $repo->createQueryBuilder('t')
                        ->where('t.hma_service = :hmaService')
                        ->andWhere('t.is_active = true')
                        ->setParameter('hmaService', $hmaService)
                        ->orderBy('t.name', 'ASC');
                },
                'label' => 'Type de promotion',
                'required' => true,
                'attr' => ['class' => 'form-select', 'placeholder' => ' ']
            ])
            ->add('value', NumberType::class, [
                'label' => 'Valeur de la réduction',
                'scale' => 2,
                'attr' => ['step' => '0.01', 'class' => 'form-control', 'placeholder' => ' ']
            ])
            ->add('startDate', DateType::class, [
                'label' => 'Date de début',
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control', 'placeholder' => ' ']
            ])
            ->add('endDate', DateType::class, [
                'label' => 'Date de fin (optionnelle)',
                'required' => false,
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control', 'placeholder' => ' ']
            ])
            ->add('is_active', CheckboxType::class, [
                'label' => 'Active',
                'required' => false,
                'attr' => ['class' => 'form-check-input']
            ])
            ->add('image', FileType::class, [
                'label' => 'Image (optionnelle)',
                'required' => false,
                'mapped' => false,
                'attr' => [
                    'class' => 'form-control',
                    'accept' => 'image/*',
                    'onchange' => 'previewPromoImage(this)'
                ]
            ]);

        // Ajout des collections selon le type d'entreprise
        if ($companyType === 'restaurant') {
            // Pour les restaurants : catégories de plats et plats
            $builder
                ->add('promotionCategoryRecipes', CollectionType::class, [
                    'entry_type' => PromotionCategoryRecipeType::class,
                    'entry_options' => ['hma_service' => $hmaService],
                    'allow_add' => true,
                    'allow_delete' => true,
                    'by_reference' => false,
                    'prototype' => true,
                    'label' => false,
                    'attr' => ['class' => 'promotion-category-recipes-collection']
                ])
                ->add('promotionRecipes', CollectionType::class, [
                    'entry_type' => PromotionRecipeType::class,
                    'entry_options' => ['hma_service' => $hmaService],
                    'allow_add' => true,
                    'allow_delete' => true,
                    'by_reference' => false,
                    'prototype' => true,
                    'label' => false,
                    'attr' => ['class' => 'promotion-recipes-collection']
                ]);
        } else {
            // Pour les autres entreprises : catégories et produits
            $builder
                ->add('promotionCategories', CollectionType::class, [
                    'entry_type' => PromotionCategoryType::class,
                    'entry_options' => ['hma_service' => $hmaService],
                    'allow_add' => true,
                    'allow_delete' => true,
                    'by_reference' => false,
                    'prototype' => true,
                    'label' => false,
                    'attr' => ['class' => 'promotion-categories-collection']
                ])
                ->add('promotionProducts', CollectionType::class, [
                    'entry_type' => PromotionProductType::class,
                    'entry_options' => ['hma_service' => $hmaService],
                    'allow_add' => true,
                    'allow_delete' => true,
                    'by_reference' => false,
                    'prototype' => true,
                    'label' => false,
                    'attr' => ['class' => 'promotion-products-collection']
                ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Promotion::class,
            'hma_service' => null,
            'company_type' => 'market',
        ]);
        $resolver->setAllowedTypes('hma_service', [HmaService::class, 'null']);
        $resolver->setAllowedTypes('company_type', 'string');
    }
}