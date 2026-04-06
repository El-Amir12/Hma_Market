<?php
// src/Form/PromotionProductType.php

namespace App\Form;

use App\Entity\PromotionProduct;
use App\Entity\Product;
use App\Repository\ProductRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PromotionProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $hmaService = $options['hma_service'];
        
        $builder
            ->add('product', EntityType::class, [
                'class' => Product::class,
                'choice_label' => 'name',
                'placeholder' => 'Sélectionnez un produit',
                'query_builder' => function (ProductRepository $repo) use ($hmaService) {
                    return $repo->createQueryBuilder('p')
                        ->where('p.hma_service = :hmaService')
                        ->andWhere('p.is_active = true')
                        ->andWhere('p.subscription_active = true')
                        ->setParameter('hmaService', $hmaService)
                        ->orderBy('p.name', 'ASC');
                },
                'attr' => ['class' => 'form-select select2-product'],
                'label' => 'Produit',
                'required' => true,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => PromotionProduct::class,
            'hma_service' => null,
        ]);
    }
}