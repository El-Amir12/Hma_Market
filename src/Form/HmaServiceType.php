<?php
// src/Form/HmaServiceType.php

namespace App\Form;

use App\Entity\HmaService;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;

class HmaServiceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $isEdit = $options['is_edit'] ?? false;
        
        $builder
            ->add('companyName', TextType::class, [
                'label' => 'Nom de l\'entreprise',
                'attr' => [
                    'placeholder' => 'Ex: Ma Société SARL',
                    'class' => 'form-control form-control-lg'
                ],
                'constraints' => [
                    new NotBlank(['message' => 'Le nom de l\'entreprise est requis'])
                ]
            ])
            ->add('companyType', ChoiceType::class, [
                'label' => 'Type d\'entreprise',
                'choices' => [
                    '🛒 Alimentation & Distribution' => [
                        'Supermarché' => 'supermarket',
                        'Épicerie / Alimentation générale' => 'grocery-store',
                        'Boulangerie / Pâtisserie' => 'bakery',
                        'Boucherie / Charcuterie' => 'butcher',
                        'Restaurant / Café' => 'restaurant',
                    ],
                    '💊 Santé & Bien-être' => [
                        'Pharmacie' => 'pharmacy',
                        'Parapharmacie' => 'parapharmacy',
                        'Cosmétiques / Parfumerie' => 'cosmetics',
                    ],
                    '👕 Commerce de détail' => [
                        'Magasin de vêtements' => 'clothing-store',
                        'Magasin d\'électronique' => 'electronics-store',
                        'Magasin de meubles' => 'furniture-store',
                        'Quincaillerie / Bricolage' => 'hardware-store',
                    ],
                    '💇 Services' => [
                        'Salon de coiffure' => 'salon',
                        'Laverie' => 'laundry',
                    ],
                    '📦 Grossiste & Distribution' => [
                        'Grossiste' => 'wholesaler',
                    ],
                    'Autre' => [
                        'Autre' => 'other'
                    ]
                ],
                'placeholder' => '-- Sélectionnez un type d\'entreprise --',
                'attr' => ['class' => 'form-select form-select-lg'],
                'constraints' => [
                    new NotBlank(['message' => 'Le type d\'entreprise est requis'])
                ]
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email professionnel',
                'attr' => [
                    'placeholder' => 'contact@entreprise.com',
                    'class' => 'form-control form-control-lg'
                ],
                'constraints' => [
                    new NotBlank(['message' => 'L\'email est requis']),
                    new Email(['message' => 'Veuillez entrer un email valide'])
                ]
            ])
            ->add('phone', TextType::class, [
                'label' => 'Téléphone',
                'required' => false,
                'attr' => [
                    'placeholder' => '+221 77 123 45 67',
                    'class' => 'form-control form-control-lg'
                ]
            ])
            ->add('address', TextareaType::class, [
                'label' => 'Adresse complète',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Adresse complète de l\'entreprise',
                    'class' => 'form-control',
                    'rows' => 3
                ]
            ])
            ->add('city', TextType::class, [
                'label' => 'Ville',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Ex: Dakar',
                    'class' => 'form-control form-control-lg'
                ]
            ])
            ->add('country', CountryType::class, [
                'label' => 'Pays',
                'required' => false,
                'placeholder' => '-- Sélectionnez un pays --',
                'attr' => [
                    'class' => 'form-select form-select-lg'
                ],
                'data' => 'SN',
                'preferred_choices' => ['SN', 'CI', 'CM', 'FR', 'MA', 'TN']
            ])
            ->add('logoFile', FileType::class, [
                'label' => 'Logo de l\'entreprise',
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
                            'image/webp'
                        ],
                        'mimeTypesMessage' => 'Veuillez uploader une image valide (JPG, PNG, GIF, WebP)',
                        'maxSizeMessage' => 'Le fichier est trop volumineux ({{ size }}). Maximum 2Mo'
                    ])
                ]
            ])
            ->add('hmaActive', CheckboxType::class, [
                'label' => 'Activer l\'entreprise',
                'required' => false,
                'attr' => ['class' => 'form-check-input']
            ]);

        // ✅ POUR LA CRÉATION UNIQUEMENT : ajouter les champs de configuration
        if (!$isEdit) {
            $builder
                ->add('plainPassword', PasswordType::class, [
                    'label' => 'Mot de passe',
                    'mapped' => false,
                    'required' => false,
                    'attr' => [
                        'class' => 'form-control form-control-lg',
                        'placeholder' => 'Laissez vide pour générer automatiquement',
                        'autocomplete' => 'new-password'
                    ],
                    'constraints' => [
                        new Length([
                            'min' => 8,
                            'max' => 4096,
                            'minMessage' => 'Le mot de passe doit contenir au moins {{ limit }} caractères',
                        ])
                    ]
                ])
                ->add('sendActivationEmail', CheckboxType::class, [
                    'label' => 'Envoyer un email d\'activation avec les identifiants',
                    'mapped' => false,
                    'required' => false,
                    'data' => true,
                    'attr' => [
                        'class' => 'form-check-input',
                        'checked' => true
                    ]
                ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => HmaService::class,
            'is_edit' => false,  // Par défaut, on est en mode création
        ]);
    }
}