<?php
// src/Form/HmaServiceProfileType.php

namespace App\Form;

use App\Entity\HmaService;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;

class HmaServiceProfileType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('companyName', TextType::class, [
                'label' => 'Nom de l\'entreprise *',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Nom de votre entreprise'
                ],
                'constraints' => [
                    new NotBlank(['message' => 'Le nom de l\'entreprise est requis']),
                    new Length([
                        'min' => 2,
                        'max' => 255,
                        'minMessage' => 'Le nom doit contenir au moins {{ limit }} caractères',
                        'maxMessage' => 'Le nom ne peut pas dépasser {{ limit }} caractères'
                    ])
                ]
            ])
            ->add('companyType', ChoiceType::class, [
                'label' => 'Type d\'entreprise *',
                'choices' => [
                    // Alimentation
                    'Supermarché' => 'supermarket',
                    'Épicerie / Alimentation générale' => 'grocery-store',
                    'Boulangerie / Pâtisserie' => 'bakery',
                    'Boucherie' => 'butcher',
                    'Restaurant / Café' => 'restaurant',
                    'Fast-food / Snack' => 'fast-food',
                    
                    // Santé & Beauté
                    'Pharmacie' => 'pharmacy',
                    'Parapharmacie' => 'parapharmacy',
                    'Cosmétiques / Parfumerie' => 'cosmetics',
                    
                    // Commerce de détail
                    'Magasin de vêtements' => 'clothing-store',
                    'Magasin d\'électronique' => 'electronics-store',
                    'Magasin de meubles' => 'furniture-store',
                    'Quincaillerie / Bricolage' => 'hardware-store',
                    'Dépôt de proximité' => 'convenience-store',
                    
                    // Services
                    'Salon de coiffure / Beauté' => 'salon',
                    'Laverie / Pressing' => 'laundry',
                    'Atelier de réparation' => 'repair-shop',
                    
                    // Grossiste & Industrie
                    'Grossiste' => 'wholesaler',
                    'Entrepôt / Stockage' => 'warehouse',
                    'Manufacturier / Fabricant' => 'manufacturer',
                    
                    // Autres
                    'Autre commerce de détail' => 'other-retail',
                    'Autre service' => 'other-service',
                    'Autre' => 'other'
                ],
                'attr' => [
                    'class' => 'form-select'
                ],
                'constraints' => [
                    new NotBlank(['message' => 'Le type d\'entreprise est requis']),
                ]
            ])
            ->add('phone', TelType::class, [
                'label' => 'Téléphone *',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => '+229 XX XX XX XX'
                ],
                'constraints' => [
                    new NotBlank(['message' => 'Le téléphone est requis']),
                ]
            ])
            ->add('address', TextareaType::class, [
                'label' => 'Adresse',
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'rows' => 3,
                    'placeholder' => 'Adresse complète'
                ]
            ])
            ->add('city', TextType::class, [
                'label' => 'Ville',
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Ville'
                ]
            ])
            ->add('country', CountryType::class, [
                'label' => 'Pays',
                'required' => false,
                'placeholder' => 'Sélectionnez un pays',
                'attr' => [
                    'class' => 'form-select'
                ]
            ])
            ->add('longitude', NumberType::class, [
                'label' => 'Longitude',
                'required' => false,
                'scale' => 8,
                'html5' => true,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => '1.23456789',
                    'step' => '0.00000001'
                ]
            ])
            ->add('latitude', NumberType::class, [
                'label' => 'Latitude',
                'required' => false,
                'scale' => 8,
                'html5' => true,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => '6.23456789',
                    'step' => '0.00000001'
                ]
            ])
            ->add('logoFile', FileType::class, [
                'label' => 'Logo',
                'required' => false,
                'mapped' => false,
                'attr' => [
                    'class' => 'form-control',
                    'accept' => 'image/*'
                ],
                'constraints' => [
                    new File([
                        'maxSize' => '2M',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                            'image/gif',
                            'image/webp',
                            'image/svg+xml'
                        ],
                        'mimeTypesMessage' => 'Veuillez télécharger une image valide (JPEG, PNG, GIF, WebP, SVG)',
                        'maxSizeMessage' => 'Le fichier est trop volumineux ({{ size }} {{ suffix }}). La taille maximale est {{ limit }} {{ suffix }}'
                    ])
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => HmaService::class,
        ]);
    }
}