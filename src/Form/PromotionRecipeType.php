<?php
// src/Form/PromotionRecipeType.php

namespace App\Form;

use App\Entity\PromotionRecipe;
use App\Entity\Recipe;
use App\Repository\RecipeRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PromotionRecipeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $hmaService = $options['hma_service'];
        
        $builder
            ->add('recipe', EntityType::class, [
                'class' => Recipe::class,  // ← Utilisez Recipe, pas CategoryRecipe
                'choice_label' => 'name',
                'placeholder' => 'Sélectionnez un plat',
                'query_builder' => function (RecipeRepository $repo) use ($hmaService) {
                    return $repo->createQueryBuilder('r')
                        ->where('r.hma_service = :hmaService')
                        ->andWhere('r.is_active = true')
                        ->andWhere('r.subscription_active = true')
                        ->setParameter('hmaService', $hmaService)
                        ->orderBy('r.name', 'ASC');
                },
                'attr' => ['class' => 'form-select select2-recipe'],
                'label' => 'Plat',
                'required' => true,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => PromotionRecipe::class,
            'hma_service' => null,
        ]);
    }
}