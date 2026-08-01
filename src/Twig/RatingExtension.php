<?php
// src/Twig/RatingExtension.php

namespace App\Twig;

use App\Entity\Product;
use App\Entity\Customer;
use App\Repository\OrderItemRepository;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class RatingExtension extends AbstractExtension
{
    private OrderItemRepository $orderItemRepository;

    public function __construct(OrderItemRepository $orderItemRepository)
    {
        $this->orderItemRepository = $orderItemRepository;
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('has_purchased_product', [$this, 'hasPurchasedProduct']),
            new TwigFunction('is_customer', [$this, 'isCustomer']),
        ];
    }

    /**
     * Vérifie si un client a acheté un produit spécifique
     */
    public function hasPurchasedProduct($user, Product $product): bool
    {
        if (!$user || !$user instanceof Customer) {
            return false;
        }

        $phone = $user->getPhone();
        if (!$phone) {
            return false;
        }

        $orderItems = $this->orderItemRepository->createQueryBuilder('oi')
            ->join('oi.vente', 'o')
            ->where('o.customer_phone = :phone')
            ->andWhere('oi.product_id = :productId')
            ->andWhere('o.status IN (:statuses)')
            ->setParameter('phone', $phone)
            ->setParameter('productId', $product->getId())
            ->setParameter('statuses', ['completed', 'delivered', 'paid'])
            ->getQuery()
            ->getResult();

        return count($orderItems) > 0;
    }

    /**
     * Vérifie si l'utilisateur est un Customer
     */
    public function isCustomer($user): bool
    {
        return $user instanceof Customer;
    }
}