<?php
// src/Form/RecipeItemType.php

namespace App\Form;

use App\Entity\Product;
use App\Entity\RecipeItem;
use App\Service\UnitConverter;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\PositiveOrZero;

class RecipeItemType extends AbstractType
{
    private UnitConverter $unitConverter;

    public function __construct(UnitConverter $unitConverter)
    {
        $this->unitConverter = $unitConverter;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $hmaService = $options['hma_service'] ?? null;
        if (!$hmaService) {
            throw new \InvalidArgumentException('L\'option "hma_service" doit être fournie à RecipeItemType.');
        }

        $builder
            ->add('product', EntityType::class, [
                'class' => Product::class,
                'choice_label' => function(Product $product) {
                    $unit = $product->getUnit() ?: 'unité inconnue';
                    return sprintf('%s (%s)', $product->getName(), $unit);
                },
                'placeholder' => 'Choisir un produit',
                'attr' => ['class' => 'form-select product-select'],
                'query_builder' => function (\Doctrine\ORM\EntityRepository $er) use ($hmaService) {
                    return $er->createQueryBuilder('p')
                        ->where('p.hma_service = :hmaService')
                        ->andWhere('p.is_active = true')
                        ->andWhere('p.subscription_active = true')
                        ->orderBy('p.name', 'ASC')
                        ->setParameter('hmaService', $hmaService);
                },
                'constraints' => [new NotBlank(['message' => 'Veuillez sélectionner un produit.'])],
            ])
            ->add('quantity', NumberType::class, [
                'label' => 'Quantité',
                'attr' => [
                    'class' => 'form-control quantity-input',
                    'step' => '0.000001',
                    'min' => 0,
                ],
                'constraints' => [
                    new NotBlank(['message' => 'La quantité est obligatoire.']),
                    new PositiveOrZero(['message' => 'La quantité doit être positive ou nulle.']),
                ],
            ])
            ->add('unit', ChoiceType::class, [
                'label' => 'Unité',
                'choices' => array_combine(
                    $this->unitConverter->getSupportedUnits(),
                    $this->unitConverter->getSupportedUnits()
                ),
                'attr' => ['class' => 'form-select unit-input'],
                'constraints' => [new NotBlank(['message' => 'Veuillez choisir une unité.'])],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => RecipeItem::class,
            'hma_service' => null,
        ]);
    }
}