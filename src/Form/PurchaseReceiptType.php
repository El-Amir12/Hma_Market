<?php

namespace App\Form;

use App\Entity\Purchase;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class PurchaseReceiptType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $purchase = $options['purchase'];
        
        $builder->add('items', CollectionType::class, [
            'entry_type' => PurchaseItemReceiptType::class,
            'entry_options' => function ($key, $value) use ($purchase) {
                // Passer le produit correspondant à chaque entrée
                $purchaseItems = $purchase->getPurchaseItems()->toArray();
                $product = isset($purchaseItems[$key]) ? $purchaseItems[$key]->getProduct() : null;
                
                return [
                    'product' => $product,
                    'label' => false,
                ];
            },
            'label' => false,
            'allow_add' => false,
            'allow_delete' => false,
            'by_reference' => false,
        ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => null,
            'purchase' => null,
        ]);
        
        $resolver->setRequired('purchase');
    }
}