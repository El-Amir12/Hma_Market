<?php
// src/Form/ProductType.php

namespace App\Form;

use App\Entity\Category;
use App\Entity\Product;
use App\Service\UnitConverter;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Image;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\PositiveOrZero;

class ProductType extends AbstractType
{
    private UnitConverter $unitConverter;

    public function __construct(UnitConverter $unitConverter)
    {
        $this->unitConverter = $unitConverter;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $hmaService = $options['hma_service'];
        $companyType = $hmaService ? $hmaService->getType() : 'retail';

        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom du produit',
                'attr' => ['placeholder' => 'Ex: Lait 1L', 'class' => 'form-control'],
                'constraints' => [new NotBlank(['message' => 'Le nom est obligatoire'])]
            ])
            ->add('barcode', TextType::class, [
                'label' => 'Code-barres',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Scannez ou saisissez le code-barres',
                    'class' => 'form-control',
                    'id' => 'product-barcode'
                ],
                'help' => 'Laissez vide pour générer automatiquement'
            ])
            ->add('category', EntityType::class, [
                'label' => 'Catégorie',
                'class' => Category::class,
                'choice_label' => 'displayName',
                'placeholder' => '-- Choisir une catégorie --',
                'attr' => ['class' => 'form-select select2-category'],
                'constraints' => [new NotBlank(['message' => 'La catégorie est obligatoire'])],
                'query_builder' => function (\Doctrine\ORM\EntityRepository $er) use ($hmaService) {
                    return $er->createQueryBuilder('c')
                        ->where('c.hma_service = :hmaService')
                        ->andWhere('c.is_active = true')
                        ->andWhere('c.subscription_active = true')
                        ->orderBy('c.name', 'ASC')
                        ->setParameter('hmaService', $hmaService);
                }
            ])
            // 🔥 CORRECTION : Utiliser buildUnitChoices() au lieu de getGroupedUnits() directement
            ->add('unit', ChoiceType::class, [
                'label' => 'Unité de mesure',
                'choices' => $this->buildUnitChoices(),
                'placeholder' => '-- Choisir une unité --',
                'required' => false,
                'attr' => ['class' => 'form-select select2-unit']
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'required' => false,
                'attr' => ['rows' => 4, 'placeholder' => 'Description détaillée...', 'class' => 'form-control']
            ])
            ->add('purchase_price', MoneyType::class, [
                'label' => "Prix d'achat (HT)",
                'currency' => 'XAF',
                'scale' => 0,
                'attr' => ['placeholder' => '0', 'class' => 'form-control', 'step' => '50'],
                'constraints' => [
                    new NotBlank(['message' => "Le prix d'achat est obligatoire"]),
                    new PositiveOrZero(['message' => 'Le prix doit être positif ou zéro'])
                ]
            ]);

        // Ajouter sale_price uniquement si l'entreprise n'est pas un restaurant
        if ($companyType !== 'restaurant') {
            $builder->add('sale_price', MoneyType::class, [
                'label' => 'Prix de vente (HT)',
                'currency' => 'XAF',
                'scale' => 0,
                'attr' => ['placeholder' => '0', 'class' => 'form-control', 'step' => '50'],
                'constraints' => [
                    new NotBlank(['message' => 'Le prix de vente est obligatoire']),
                    new PositiveOrZero(['message' => 'Le prix doit être positif ou zéro'])
                ]
            ]);
        }

        $builder
            ->add('stock_quantity', IntegerType::class, [
                'label' => 'Quantité en stock',
                'attr' => ['placeholder' => '0', 'class' => 'form-control', 'min' => 0],
                'constraints' => [
                    new NotBlank(['message' => 'La quantité est obligatoire']),
                    new PositiveOrZero(['message' => 'La quantité doit être positive ou zéro'])
                ]
            ])
            ->add('min_quantity', IntegerType::class, [
                'label' => 'Quantité minimale (alerte)',
                'required' => false,
                'attr' => ['placeholder' => '0', 'class' => 'form-control', 'min' => 0],
                'constraints' => [new PositiveOrZero(['message' => 'La quantité minimale doit être positive ou zéro'])]
            ])
            ->add('image', FileType::class, [
                'label' => 'Image du produit',
                'required' => false,
                'mapped' => false,
                'attr' => ['class' => 'form-control', 'accept' => 'image/*'],
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
                'attr' => ['class' => 'form-check-input']
            ])
            ->add('is_active', CheckboxType::class, [
                'label' => 'Produit actif',
                'required' => false,
                'attr' => ['class' => 'form-check-input']
            ]);

        if ($companyType === 'restaurant') {
            $builder->add('is_storable', CheckboxType::class, [
                'label' => '✅ Produit stockable (remis en stock lors des retours)',
                'required' => false,
                'attr' => [
                    'class' => 'form-check-input',
                    'role' => 'switch'
                ],
                'help' => 'Activez cette option si ce produit peut être remis en stock lors d\'un retour (ex: canette, bouteille, ingrédient non préparé). Désactivez pour les plats préparés, cocktails mélangés...'
            ]);
        }

        $builder
            ->add('show_extra', CheckboxType::class, [
                'label' => 'Afficher les informations supplémentaires',
                'mapped' => false,
                'required' => false,
                'attr' => [
                    'class' => 'form-check-input',
                    'data-toggle' => 'extra-fields'
                ]
            ])
            ->add('dosage', TextType::class, [
                'label' => 'Dosage',
                'required' => false,
                'attr' => ['placeholder' => 'Ex: 500mg', 'class' => 'form-control']
            ])
            ->add('form', TextType::class, [
                'label' => 'Forme',
                'required' => false,
                'attr' => ['placeholder' => 'Ex: comprimé, sirop', 'class' => 'form-control']
            ]);

        // Ajouter prescription_required uniquement si c'est une pharmacie
        if ($companyType === 'pharmacy') {
            $builder->add('prescription_required', CheckboxType::class, [
                'label' => 'Prescription obligatoire',
                'required' => false,
                'attr' => ['class' => 'form-check-input']
            ]);
        }

        // Définir la valeur par défaut "pièce" pour l'unité
        $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) {
            $product = $event->getData();
            if ($product && !$product->getUnit()) {
                $product->setUnit('pièce');
            }
        });

        // Si l'utilisateur envoie un champ unité vide, le remplacer par "pièce"
        $builder->addEventListener(FormEvents::PRE_SUBMIT, function (FormEvent $event) {
            $data = $event->getData();
            if (isset($data['unit']) && (empty($data['unit']) || $data['unit'] === '')) {
                $data['unit'] = 'pièce';
                $event->setData($data);
            }
        });
    }

    /**
     * Construit la liste des unités groupées pour Select2
     * 🔥 CORRECTION : Format correct [ 'Libellé' => 'valeur' ]
     */
    private function buildUnitChoices(): array
    {
        $groupedUnits = $this->unitConverter->getGroupedUnits();
        $choices = [];
        
        foreach ($groupedUnits as $groupLabel => $units) {
            foreach ($units as $unit) {
                // Format attendu par Symfony : [ 'Libellé' => 'valeur' ]
                $choices[$groupLabel][$unit] = $unit;
            }
        }
        
        return $choices;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
            'hma_service' => null,
        ]);
    }
}