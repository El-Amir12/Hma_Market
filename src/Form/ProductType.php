<?php
// src/Form/ProductType.php

namespace App\Form;

use App\Entity\Category;
use App\Entity\Product;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Image;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\PositiveOrZero;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom du produit',
                'attr' => [
                    'placeholder' => 'Ex: Lait 1L',
                    'class' => 'form-control'
                ],
                'constraints' => [
                    new NotBlank(['message' => 'Le nom est obligatoire'])
                ]
            ])
            ->add('barcode', TextType::class, [
                'label' => 'Code-barres',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Scannez ou saisissez le code-barres',
                    'class' => 'form-control',
                    'id' => 'barcode-input',
                    'autocomplete' => 'off'
                ],
                'help' => 'Laissez vide pour générer automatiquement un code-barres unique'
            ])
            ->add('category', EntityType::class, [
                'label' => 'Catégorie',
                'class' => Category::class,
                'choice_label' => 'name',
                'placeholder' => '-- Choisir une catégorie --',
                'attr' => [
                    'class' => 'form-select'
                ],
                'constraints' => [
                    new NotBlank(['message' => 'La catégorie est obligatoire'])
                ]
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'required' => false,
                'attr' => [
                    'rows' => 4,
                    'placeholder' => 'Description détaillée du produit...',
                    'class' => 'form-control'
                ]
            ])
            ->add('purchase_price', MoneyType::class, [
                'label' => 'Prix d\'achat (HT)',
                'currency' => 'XAF',
                'scale' => 0,
                'attr' => [
                    'placeholder' => '0',
                    'class' => 'form-control',
                    'step' => '50'
                ],
                'constraints' => [
                    new NotBlank(['message' => 'Le prix d\'achat est obligatoire']),
                    new PositiveOrZero(['message' => 'Le prix doit être positif ou zéro'])
                ]
            ])
            ->add('sale_price', MoneyType::class, [
                'label' => 'Prix de vente (HT)',
                'currency' => 'XAF',
                'scale' => 0,
                'attr' => [
                    'placeholder' => '0',
                    'class' => 'form-control',
                    'step' => '50'
                ],
                'constraints' => [
                    new NotBlank(['message' => 'Le prix de vente est obligatoire']),
                    new PositiveOrZero(['message' => 'Le prix doit être positif ou zéro'])
                ]
            ])
            ->add('stock_quantity', IntegerType::class, [
                'label' => 'Quantité en stock',
                'attr' => [
                    'placeholder' => '0',
                    'class' => 'form-control',
                    'min' => 0
                ],
                'constraints' => [
                    new NotBlank(['message' => 'La quantité est obligatoire']),
                    new PositiveOrZero(['message' => 'La quantité doit être positive ou zéro'])
                ]
            ])
            ->add('min_quantity', IntegerType::class, [
                'label' => 'Quantité minimale (alerte)',
                'required' => false,
                'attr' => [
                    'placeholder' => '0',
                    'class' => 'form-control',
                    'min' => 0
                ],
                'constraints' => [
                    new PositiveOrZero(['message' => 'La quantité minimale doit être positive ou zéro'])
                ]
            ])
            ->add('image', FileType::class, [
                'label' => 'Image du produit',
                'required' => false,
                'mapped' => false,
                'attr' => [
                    'class' => 'form-control',
                    'accept' => 'image/*'
                ],
                'constraints' => [
                    new Image([
                        'maxSize' => '5M',
                        'mimeTypes' => ['image/jpeg', 'image/png', 'image/webp', 'image/gif'],
                        'mimeTypesMessage' => 'Veuillez uploader une image valide (JPEG, PNG, WebP, GIF)'
                    ])
                ]
            ])
            ->add('has_expiry_date', CheckboxType::class, [
                'label' => 'Produit avec date critique',
                'required' => false,
                'attr' => [
                    'class' => 'form-check-input',
                ]
                // SUPPRIMEZ 'data' => false
            ])
            ->add('is_active', CheckboxType::class, [
                'label' => 'Produit actif',
                'required' => false,
                'attr' => [
                    'class' => 'form-check-input'
                ]
                // SUPPRIMEZ 'data' => true
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}