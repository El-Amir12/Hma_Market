<?php
// src/Form/PromotionCategoryRecipeType.php

namespace App\Form;

use App\Entity\PromotionCategoryRecipe;
use App\Entity\CategoryRecipe;
use App\Repository\CategoryRecipeRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PromotionCategoryRecipeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $hmaService = $options['hma_service'];
        
        $builder
            ->add('categoryRecipe', EntityType::class, [
                'class' => CategoryRecipe::class,
                'choice_label' => 'displayName',
                'placeholder' => 'Sélectionnez une catégorie de plats',
                'query_builder' => function (CategoryRecipeRepository $repo) use ($hmaService) {
                    return $repo->createQueryBuilder('cr')
                        ->where('cr.hma_service = :hmaService')
                        ->andWhere('cr.is_active = true')
                        ->andWhere('cr.subscription_active = true')
                        ->setParameter('hmaService', $hmaService)
                        ->orderBy('cr.name', 'ASC');
                },
                'attr' => ['class' => 'form-select select2-category-recipe'],
                'label' => 'Catégorie de plats',
                'required' => true,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => PromotionCategoryRecipe::class,
            'hma_service' => null,
        ]);
    }
}