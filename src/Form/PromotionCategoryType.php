<?php
// src/Form/PromotionCategoryType.php

namespace App\Form;

use App\Entity\PromotionCategory;
use App\Entity\Category;
use App\Repository\CategoryRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PromotionCategoryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $hmaService = $options['hma_service'];
        
        $builder
            ->add('category', EntityType::class, [
                'class' => Category::class,
                'choice_label' => 'displayName',
                'placeholder' => 'Sélectionnez une catégorie',
                'query_builder' => function (CategoryRepository $repo) use ($hmaService) {
                    return $repo->createQueryBuilder('c')
                        ->where('c.hma_service = :hmaService')
                        ->andWhere('c.is_active = true')
                        ->andWhere('c.subscription_active = true')
                        ->setParameter('hmaService', $hmaService)
                        ->orderBy('c.name', 'ASC');
                },
                'attr' => ['class' => 'form-select select2-category'],
                'label' => 'Catégorie',
                'required' => true,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => PromotionCategory::class,
            'hma_service' => null,
        ]);
    }
}