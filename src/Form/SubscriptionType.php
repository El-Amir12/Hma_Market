<?php

namespace App\Form;

use App\Entity\HmaService;
use App\Entity\Subscription;
use App\Entity\SubscriptionPlan;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SubscriptionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('billingPeriod')
            ->add('status')
            ->add('startsAt', null, [
                'widget' => 'single_text'
            ])
            ->add('endsAt', null, [
                'widget' => 'single_text'
            ])
            ->add('trialEndsAt', null, [
                'widget' => 'single_text'
            ])
            ->add('paymentMethod')
            ->add('transactionId')
            ->add('notes')
            ->add('createdAt', null, [
                'widget' => 'single_text'
            ])
            ->add('updatedAt', null, [
                'widget' => 'single_text'
            ])
            ->add('hma_service', EntityType::class, [
                'class' => HmaService::class,
                'choice_label' => 'id',
            ])
            ->add('subscriptionPlan', EntityType::class, [
                'class' => SubscriptionPlan::class,
                'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Subscription::class,
        ]);
    }
}
