<?php
// src/Form/TypePromotionType.php

namespace App\Form;

use App\Entity\TypePromotion;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TypePromotionType extends AbstractType
{
    // Types de promotion prédéfinis
    public const PREDEFINED_TYPES = [
        'Pourcentage' => [
            'description' => 'Réduction en pourcentage sur le prix (ex: 10% de réduction)',
            'is_percentage' => true
        ],
        'Montant fixe' => [
            'description' => 'Réduction d\'un montant précis en devise locale (ex: 500 FCFA de réduction)',
            'is_percentage' => false
        ],
        'Achat multiple' => [
            'description' => 'Réduction pour l\'achat de plusieurs articles (ex: 2 achetés = 1 offert)',
            'is_percentage' => false
        ],
        'Seuil minimum' => [
            'description' => 'Réduction basée sur un montant minimum d\'achat (ex: -10% dès 10000 FCFA)',
            'is_percentage' => true
        ],
        'Happy Hour' => [
            'description' => 'Réduction sur une plage horaire spécifique (ex: -20% entre 14h et 17h)',
            'is_percentage' => true
        ]
    ];

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        // ✅ CORRECTION : Créer un tableau choices avec label => valeur
        $choices = [];
        foreach (array_keys(self::PREDEFINED_TYPES) as $typeName) {
            $choices[$typeName] = $typeName;  // Label => Valeur
        }

        $builder
            ->add('name', ChoiceType::class, [
                'label' => 'Type de promotion',
                'choices' => $choices,  // ✅ Utiliser le tableau corrigé
                'placeholder' => 'Sélectionnez un type',
                'attr' => [
                    'class' => 'form-control',
                    'id' => 'type_promotion_name'
                ],
                'help' => 'Choisissez le type de promotion que vous souhaitez créer'
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'required' => false,
                'attr' => [
                    'rows' => 3,
                    'readonly' => true,
                    'class' => 'form-control bg-light',
                    'id' => 'type_promotion_description'
                ],
                'help' => 'Description automatique basée sur le type sélectionné'
            ])
            ->add('is_active', CheckboxType::class, [
                'label' => 'Actif',
                'required' => false
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => TypePromotion::class,
        ]);
    }
}