<?php
// src/Form/Stock/StockTransferType.php

namespace App\Form\Stock;

use App\Entity\Location;
use App\Entity\StockBatch;
use App\Entity\StockTransfer;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Positive;

class StockTransferType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('stock_batch', EntityType::class, [
                'label' => 'Lot à transférer',
                'class' => StockBatch::class,
                'query_builder' => function (EntityRepository $er) use ($options) {
                    return $er->createQueryBuilder('sb')
                        ->innerJoin('sb.product', 'p')
                        ->addSelect('p')
                        ->where('sb.hma_service = :hmaService')
                        ->andWhere('sb.is_active = true')
                        ->andWhere('sb.current_quantity > 0')
                        ->setParameter('hmaService', $options['hma_service'])
                        ->orderBy('p.name', 'ASC')
                        ->addOrderBy('sb.batch_number', 'ASC');
                },
                'choice_label' => function (StockBatch $batch) {
                    return sprintf(
                        '%s - %s (Stock: %d unités, Prix: %s) - Emplacement: %s',
                        $batch->getProduct()->getName(),
                        $batch->getBatchNumber(),
                        $batch->getCurrentQuantity(),
                        number_format((float)$batch->getUnitPrice(), 0, ',', ' ') . ' FCFA',
                        $batch->getLocationDisplay()
                    );
                },
                'placeholder' => '-- Sélectionner un lot --',
                'required' => true,
                'attr' => ['class' => 'form-select select2-batch']
            ])
            ->add('destination_location', EntityType::class, [
                'label' => 'Emplacement de destination',
                'class' => Location::class,
                'query_builder' => function (EntityRepository $er) use ($options) {
                    return $er->createQueryBuilder('l')
                        ->where('l.hma_service = :hmaService')
                        ->andWhere('l.is_active = true')
                        ->setParameter('hmaService', $options['hma_service'])
                        ->orderBy('l.name', 'ASC');
                },
                'choice_label' => 'displayName',
                'placeholder' => '-- Sélectionner un emplacement --',
                'required' => true,
                'attr' => ['class' => 'form-select select2-location']
            ])
            ->add('quantity', IntegerType::class, [
                'label' => 'Quantité à transférer',
                'required' => true,
                'constraints' => [
                    new NotBlank(['message' => 'La quantité est obligatoire.']),
                    new Positive(['message' => 'La quantité doit être positive.'])
                ],
                'attr' => [
                    'min' => 1,
                    'class' => 'form-control',
                    'placeholder' => 'Ex: 10'
                ]
            ])
            ->add('reason', TextareaType::class, [
                'label' => 'Raison du transfert',
                'required' => false,
                'attr' => [
                    'rows' => 3,
                    'class' => 'form-control',
                    'placeholder' => 'Ex: Réapprovisionnement magasin secondaire, Transfert entre dépôts...'
                ],
                'help' => 'Optionnel mais recommandé pour tracer les transferts.'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => StockTransfer::class,
            'hma_service' => null,
        ]);
        
        $resolver->setAllowedTypes('hma_service', ['App\Entity\HmaService', 'null']);
    }
}