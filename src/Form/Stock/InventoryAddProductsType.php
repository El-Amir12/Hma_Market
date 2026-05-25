<?php
// src/Form/Stock/InventoryAddProductsType.php

namespace App\Form\Stock;

use App\Entity\Product;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InventoryAddProductsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('products', EntityType::class, [
                'label' => 'Produits à ajouter',
                'class' => Product::class,
                'query_builder' => function (EntityRepository $er) use ($options) {
                    return $er->createQueryBuilder('p')
                        ->where('p.hma_service = :hmaService')
                        ->andWhere('p.is_active = true')
                        ->setParameter('hmaService', $options['hma_service'])
                        ->orderBy('p.name', 'ASC');
                },
                'choice_label' => function (Product $product) {
                    return sprintf(
                        '%s (%s) - %s FCFA',
                        $product->getName(),
                        $product->getBarcode(),
                        number_format((float)$product->getPurchasePrice(), 0, ',', ' ')
                    );
                },
                'multiple' => true,
                'expanded' => false,
                'required' => false,
                'attr' => [
                    'class' => 'form-select select2-product',
                    'data-placeholder' => 'Rechercher des produits par nom ou code-barres...'
                ],
                'help' => 'Vous pouvez rechercher par nom de produit ou par code-barres.'
            ])
            ->add('add_all', SubmitType::class, [
                'label' => '➕ Ajouter tous les produits actifs',
                'attr' => ['class' => 'btn btn-outline-primary'],
                'validation_groups' => false
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'hma_service' => null,
        ]);
        
        $resolver->setAllowedTypes('hma_service', ['App\Entity\HmaService', 'null']);
    }
}