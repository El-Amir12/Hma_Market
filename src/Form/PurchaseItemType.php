<?php
// src/Form/PurchaseItemType.php
namespace App\Form;

use App\Entity\Product;
use App\Entity\PurchaseItem;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\GreaterThan;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Positive;

class PurchaseItemType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('product', EntityType::class, [
                'class' => Product::class,
                'choice_label' => function(Product $product) {
                    return sprintf('%s (%s) - %s', 
                        $product->getName(), 
                        $product->getBarcode(),
                        number_format($product->getPurchasePrice(), 0, ',', ' ') . ' FCFA'
                    );
                },
                'placeholder' => 'Scanner ou rechercher un produit...',
                'attr' => [
                    'class' => 'form-select product-select',
                    'data-placeholder' => 'Rechercher par nom ou code-barres...'
                ]
            ])
            ->add('quantity', IntegerType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'La quantité est requise']),
                    new Positive(['message' => 'La quantité doit être positive']),
                ],
                'attr' => [
                    'class' => 'form-control quantity-input',
                    'min' => 1,
                    'value' => 1
                ]
            ])
            ->add('unit_price', NumberType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'Le prix unitaire est requis']),
                    new GreaterThan(['value' => 0, 'message' => 'Le prix doit être supérieur à 0']),
                ],
                'attr' => [
                    'class' => 'form-control price-input',
                    'step' => '0.01'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => PurchaseItem::class,
        ]);
    }
}