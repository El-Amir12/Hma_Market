<?php
// src/Form/SupplierCreditNoteType.php

namespace App\Form;

use App\Entity\SupplierCreditNote;
use App\Service\SupplierCreditNoteService;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\PositiveOrZero;

class SupplierCreditNoteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('issueType', ChoiceType::class, [
                'label' => 'Type de problème',
                'choices' => SupplierCreditNote::getIssueTypeList(),
                'placeholder' => '-- Sélectionnez le type --',
                'attr' => ['class' => 'form-select'],
                'constraints' => [new NotBlank(['message' => 'Le type de problème est obligatoire'])]
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description détaillée',
                'attr' => [
                    'rows' => 5,
                    'placeholder' => 'Décrivez précisément le problème...',
                    'class' => 'form-control'
                ],
                'constraints' => [new NotBlank(['message' => 'La description est obligatoire'])]
            ])
            ->add('declaredAmount', MoneyType::class, [
                'label' => 'Montant déclaré',
                'currency' => 'XAF',
                'scale' => 0,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => '0',
                    'step' => '100'
                ],
                'constraints' => [new NotBlank(['message' => 'Le montant est obligatoire'])]
            ])
            ->add('priority', ChoiceType::class, [
                'label' => 'Priorité',
                'choices' => SupplierCreditNote::getPriorityList(),
                'attr' => ['class' => 'form-select']
            ])
            // 🔥 CORRECTION: Utiliser NumberType au lieu de IntegerType
            ->add('affected_quantity', NumberType::class, [
                'label' => 'Quantité concernée',
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'min' => 1,
                    'step' => 1,
                    'placeholder' => 'Ex: 20'
                ],
                'constraints' => [
                    new PositiveOrZero(['message' => 'La quantité doit être positive ou nulle'])
                ],
                'help' => 'Nombre d\'unités concernées par le problème (optionnel). Laissez vide pour un montant uniquement.'
            ])
            // 🔥 CORRECTION: Ajout du champ stock_action
            ->add('stock_action', ChoiceType::class, [
                'label' => 'Action recommandée sur le stock',
                'choices' => [
                    '-- Choisir une action --' => '',
                    '📌 Aucune action (financier uniquement)' => 'none',
                    '⚠️ Réduire le stock de la quantité concernée' => 'reduce',
                    '🗑️ Mettre le stock à zéro (produits inutilisables)' => 'zero',
                    '📦 Retour fournisseur' => 'return',
                ],
                'required' => false,
                'attr' => ['class' => 'form-select'],
                'help' => '📌 IMPORTANT: L\'ajustement du stock n\'est PAS automatique. Sélectionnez l\'action recommandée qui apparaîtra dans l\'historique.'
            ])
            ->add('attachments', FileType::class, [
                'label' => 'Pièces jointes (photos/vidéos)',
                'mapped' => false,
                'required' => false,
                'multiple' => true,
                'attr' => [
                    'class' => 'form-control',
                    'accept' => 'image/*,video/*',
                    'multiple' => 'multiple'
                ],
                'constraints' => [
                    new File([
                        'maxSize' => '50M',
                        'mimeTypes' => [
                            'image/jpeg', 'image/png', 'image/webp', 'image/gif',
                            'video/mp4', 'video/mpeg', 'video/quicktime'
                        ],
                        'mimeTypesMessage' => 'Format non supporté. Utilisez JPEG, PNG, WebP, GIF, MP4, MPEG ou MOV'
                    ])
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => SupplierCreditNote::class,
        ]);
    }
}