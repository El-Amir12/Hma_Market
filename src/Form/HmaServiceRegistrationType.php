<?php

namespace App\Form;

use App\Entity\HmaService;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\File;

class HmaServiceRegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('companyName', TextType::class, [
                'label' => 'Nom de l\'entreprise *',
                'attr' => [
                    'placeholder' => 'Entrez le nom de votre entreprise',
                    'class' => 'form-control',
                    'autocomplete' => 'organization'
                ],
                'constraints' => [
                    new NotBlank(['message' => 'Le nom de l\'entreprise est requis']),
                    new Length([
                        'min' => 2,
                        'max' => 100,
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
                'placeholder' => 'Sélectionnez un type',
                'attr' => [
                    'class' => 'form-select',
                    'data-choices' => 'true'
                ],
                'constraints' => [
                    new NotBlank(['message' => 'Le type d\'entreprise est requis']),
                ]
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email professionnel *',
                'attr' => [
                    'placeholder' => 'contact@votre-entreprise.com',
                    'class' => 'form-control',
                    'autocomplete' => 'email'
                ],
                'constraints' => [
                    new NotBlank(['message' => 'L\'email est requis']),
                    new Email(['message' => 'Veuillez entrer un email valide']),
                ]
            ])
            ->add('phone', TelType::class, [
                'label' => 'Téléphone *',
                'attr' => [
                    'placeholder' => '+229 XX XX XX XX',
                    'class' => 'form-control',
                    'autocomplete' => 'tel'
                ],
                'constraints' => [
                    new NotBlank(['message' => 'Le téléphone est requis']),
                ]
            ])
            ->add('address', TextareaType::class, [
                'label' => 'Adresse',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Adresse complète de l\'entreprise',
                    'class' => 'form-control',
                    'rows' => 3,
                    'autocomplete' => 'street-address'
                ]
            ])
            ->add('city', TextType::class, [
                'label' => 'Ville',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Ville',
                    'class' => 'form-control',
                    'autocomplete' => 'address-level2'
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
            ->add('logoFile', FileType::class, [
                'label' => 'Logo de l\'entreprise',
                'required' => false,
                'mapped' => false, // Ce champ n'est pas mappé directement à l'entité
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