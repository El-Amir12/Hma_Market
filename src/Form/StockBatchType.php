<?php
// src/Form/StockBatchType.php
namespace App\Form;

use App\Entity\StockBatch;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StockBatchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('batch_number', TextType::class, [
                'label' => 'Numéro de lot',
                'attr' => ['placeholder' => 'Ex: BATCH-2024-001']
            ])
            ->add('location', TextType::class, [
                'label' => 'Emplacement',
                'required' => false,
                'attr' => ['placeholder' => 'Ex: A12, Étagère 3, Réfrigérateur 2...']
            ])
            ->add('initial_quantity', IntegerType::class, [
                'label' => 'Quantité initiale'
            ])
            ->add('current_quantity', IntegerType::class, [
                'label' => 'Quantité actuelle'
            ])
            ->add('unit_price', NumberType::class, [
                'label' => 'Prix unitaire',
                'scale' => 2,
                'attr' => ['step' => '0.01']
            ])
            ->add('manufacturing_date', DateType::class, [
                'label' => 'Date de fabrication',
                'required' => false,
                'widget' => 'single_text',
            ])
            ->add('expiry_date', DateType::class, [
                'label' => 'Date d\'expiration',
                'required' => false,
                'widget' => 'single_text',
            ])
            ->add('is_active', CheckboxType::class, [
                'label' => 'Actif',
                'required' => false,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => StockBatch::class,
        ]);
    }
}