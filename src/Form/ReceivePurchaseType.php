<?php
// src/Form/ReceivePurchaseType.php
namespace App\Form;

use App\Entity\PurchaseItem;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class ReceivePurchaseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $product = $options['product'];
        
        $builder
            ->add('batch_number', TextType::class, [
                'label' => 'Numéro de lot',
                'required' => $product->hasExpiryDate(),
                'constraints' => $product->hasExpiryDate() ? [
                    new NotBlank(['message' => 'Le numéro de lot est requis pour ce produit'])
                ] : [],
                'attr' => [
                    'placeholder' => $product->hasExpiryDate() ? 'Ex: LOT-20250328-001' : 'Optionnel pour ce produit',
                    'class' => 'form-control'
                ]
            ]);
        
        if ($product->hasExpiryDate()) {
            $builder
                ->add('manufacturing_date', DateType::class, [
                    'label' => 'Date de fabrication',
                    'widget' => 'single_text',
                    'required' => true,
                    'constraints' => [new NotBlank()],
                    'attr' => ['class' => 'form-control']
                ])
                ->add('expiry_date', DateType::class, [
                    'label' => 'Date d\'expiration',
                    'widget' => 'single_text',
                    'required' => true,
                    'constraints' => [new NotBlank()],
                    'attr' => ['class' => 'form-control']
                ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'product' => null,
        ]);
        $resolver->setRequired('product');
    }
}