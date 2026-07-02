<?php
// src/Repository/CartRepository.php

namespace App\Repository;

use App\Entity\Cart;
use App\Entity\Customer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Cart>
 */
class CartRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cart::class);
    }

    public function getCartForCustomer(?Customer $customer): ?Cart
    {
        if (!$customer) {
            return null;
        }

        return $this->createQueryBuilder('c')
            ->leftJoin('c.items', 'i')
            ->addSelect('i')
            ->where('c.customer = :customer')
            ->setParameter('customer', $customer)
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function getCartItemsCount(?Customer $customer): int
    {
        if (!$customer) {
            return 0;
        }

        $cart = $this->getCartForCustomer($customer);
        return $cart ? $cart->getItemsCount() : 0;
    }

    public function getCartTotal(?Customer $customer): float
    {
        if (!$customer) {
            return 0;
        }

        $cart = $this->getCartForCustomer($customer);
        return $cart ? $cart->getTotal() : 0;
    }
}