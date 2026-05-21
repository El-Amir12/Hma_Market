<?php
// src/Form/RecipeType.php

namespace App\Form;

use App\Entity\CategoryRecipe;
use App\Entity\Recipe;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Image;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\PositiveOrZero;

class RecipeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $hmaService = $options['hma_service'];

        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom *',
                'attr' => ['placeholder' => 'Ex: Poulet grillé, Coca-Cola...', 'class' => 'form-control'],
                'constraints' => [new NotBlank(['message' => 'Le nom est obligatoire'])]
            ])
            
            // 🔥 NOUVEAU CHAMP : Type d'article (Food, Drink, Dessert)
            ->add('type', ChoiceType::class, [
                'label' => 'Type d\'article *',
                'choices' => [
                    '🍽️ Plat principal' => 'food',
                    '🥤 Boisson' => 'drink',
                    '🍰 Dessert' => 'dessert',
                    '🥗 Entrée' => 'starter',
                    '🍳 Petit-déjeuner' => 'breakfast'
                ],
                'placeholder' => '-- Sélectionnez le type --',
                'attr' => ['class' => 'form-select'],
                'constraints' => [new NotBlank(['message' => 'Le type est obligatoire'])],
                'help' => 'Détermine où l\'article apparaîtra (bar, cuisine, etc.)'
            ])
            
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'required' => false,
                'attr' => ['placeholder' => 'Description...', 'class' => 'form-control', 'rows' => 4]
            ])
            ->add('instructions', TextareaType::class, [
                'label' => 'Instructions de préparation',
                'required' => false,
                'attr' => ['placeholder' => 'Étapes...', 'class' => 'form-control', 'rows' => 6]
            ])
            ->add('selling_price', MoneyType::class, [
                'label' => 'Prix de vente *',
                'currency' => 'XAF',
                'scale' => 0,
                'attr' => ['placeholder' => '0', 'class' => 'form-control', 'step' => '50'],
                'constraints' => [
                    new NotBlank(['message' => 'Le prix est obligatoire']),
                    new PositiveOrZero(['message' => 'Le prix doit être positif ou zéro'])
                ]
            ])
            ->add('category', EntityType::class, [
                'label' => 'Catégorie',
                'class' => CategoryRecipe::class,
                'choice_label' => 'displayName',
                'placeholder' => '-- Choisir une catégorie --',
                'required' => false,
                'attr' => ['class' => 'form-select select2-category'],
                'query_builder' => function (\Doctrine\ORM\EntityRepository $er) use ($hmaService) {
                    return $er->createQueryBuilder('c')
                        ->where('c.hma_service = :hmaService')
                        ->andWhere('c.is_active = true')
                        ->andWhere('c.subscription_active = true')
                        ->orderBy('c.name', 'ASC')
                        ->setParameter('hmaService', $hmaService);
                },
                'group_by' => function($choice) {
                    $parent = $choice->getParent();
                    if ($parent) {
                        return $parent->getName();
                    }
                    return 'Catégories principales';
                }
            ])
            ->add('image', FileType::class, [
                'label' => 'Image',
                'required' => false,
                'mapped' => false,
                'attr' => ['class' => 'form-control', 'accept' => 'image/*'],
                'constraints' => [
                    new Image(['maxSize' => '2M', 'mimeTypes' => ['image/jpeg', 'image/png', 'image/webp', 'image/gif']])
                ]
            ])
            ->add('recipeItems', CollectionType::class, [
                'label' => false,
                'entry_type' => RecipeItemType::class,
                'entry_options' => [
                    'label' => false,
                    'hma_service' => $hmaService,
                ],
                'allow_add' => true,
                'allow_delete' => true,
                'by_reference' => false,
                'attr' => ['class' => 'recipe-items-collection'],
            ])
            ->add('is_active', CheckboxType::class, [
                'label' => 'Activer',
                'required' => false,
                'attr' => ['class' => 'form-check-input'],
                'label_attr' => ['class' => 'form-check-label']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Recipe::class,
            'hma_service' => null,
        ]);
    }
}