<?php

namespace App\Form;

use App\Entity\Product;
use App\Entity\PurchaseItem;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\GreaterThan;
use Symfony\Component\Validator\Constraints\NotBlank;

class CartItemType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('product', EntityType::class, [
                'class' => Product::class,
                'label' => 'Produit',
                'placeholder' => 'Rechercher un produit...',
                'choice_label' => function(Product $product) {
                    return sprintf('%s (Stock: %d)', $product->getName(), $product->getStockQuantity());
                },
                'required' => true,
                'constraints' => [
                    new NotBlank(['message' => 'Le produit est obligatoire'])
                ],
                'attr' => [
                    'class' => 'product-select',
                    'data-autocomplete-url' => '/admin/purchase/search-products'
                ]
            ])
            ->add('quantity', IntegerType::class, [
                'label' => 'Quantité',
                'required' => true,
                'constraints' => [
                    new NotBlank(['message' => 'La quantité est obligatoire']),
                    new GreaterThan(['value' => 0, 'message' => 'La quantité doit être supérieure à 0'])
                ],
                'attr' => ['min' => 1]
            ])
            ->add('unit_price', NumberType::class, [
                'label' => 'Prix unitaire',
                'required' => true,
                'scale' => 2,
                'constraints' => [
                    new NotBlank(['message' => 'Le prix unitaire est obligatoire']),
                    new GreaterThan(['value' => 0, 'message' => 'Le prix doit être supérieur à 0'])
                ],
                'html5' => true
            ])
            ->add('batch_number', TextType::class, [
                'label' => 'Numéro de lot',
                'required' => false,
                'attr' => ['placeholder' => 'Généré automatiquement si vide']
            ]);

        $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) {
            $item = $event->getData();
            $form = $event->getForm();

            if ($item && $item->getProduct()) {
                $product = $item->getProduct();
                
                if ($product->hasExpiryDate()) {
                    $form->add('expiry_date', DateType::class, [
                        'label' => 'Date d\'expiration',
                        'required' => false,
                        'widget' => 'single_text',
                        'html5' => false,
                        'attr' => ['class' => 'datepicker']
                    ])
                    ->add('manufacturing_date', DateType::class, [
                        'label' => 'Date de fabrication',
                        'required' => false,
                        'widget' => 'single_text',
                        'html5' => false,
                        'attr' => ['class' => 'datepicker']
                    ]);
                }
            }
        });
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => PurchaseItem::class,
        ]);
    }
}