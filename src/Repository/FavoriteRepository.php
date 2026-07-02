<?php
// src/Repository/FavoriteRepository.php

namespace App\Repository;

use App\Entity\Customer;
use App\Entity\Favorite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Favorite>
 */
class FavoriteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Favorite::class);
    }

    public function countByCustomer(?Customer $customer): int
    {
        if (!$customer) {
            return 0;
        }

        return $this->createQueryBuilder('f')
            ->select('COUNT(f.id)')
            ->where('f.customer = :customer')
            ->setParameter('customer', $customer)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function isFavorite(Customer $customer, int $productId): bool
    {
        $result = $this->createQueryBuilder('f')
            ->select('COUNT(f.id)')
            ->where('f.customer = :customer')
            ->andWhere('f.product = :productId')
            ->setParameter('customer', $customer)
            ->setParameter('productId', $productId)
            ->getQuery()
            ->getSingleScalarResult();
        
        return $result > 0;
    }

    public function findFavoriteProductIds(Customer $customer): array
    {
        $results = $this->createQueryBuilder('f')
            ->select('IDENTITY(f.product) as productId')
            ->where('f.customer = :customer')
            ->setParameter('customer', $customer)
            ->getQuery()
            ->getResult();
        
        return array_column($results, 'productId');
    }
}