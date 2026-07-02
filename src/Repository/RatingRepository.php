<?php
// src/Repository/RatingRepository.php

namespace App\Repository;

use App\Entity\Rating;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Rating>
 */
class RatingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Rating::class);
    }

    public function findUserRating(int $customerId, int $productId): ?Rating
    {
        return $this->createQueryBuilder('r')
            ->where('r.customer = :customerId')
            ->andWhere('r.product = :productId')
            ->setParameter('customerId', $customerId)
            ->setParameter('productId', $productId)
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function getAverageRating(int $productId): float
    {
        $result = $this->createQueryBuilder('r')
            ->select('AVG(r.score) as avg')
            ->where('r.product = :productId')
            ->setParameter('productId', $productId)
            ->getQuery()
            ->getSingleScalarResult();
        
        return $result ? round((float) $result, 1) : 0;
    }

    public function getRatingCount(int $productId): int
    {
        return $this->createQueryBuilder('r')
            ->select('COUNT(r.id)')
            ->where('r.product = :productId')
            ->setParameter('productId', $productId)
            ->getQuery()
            ->getSingleScalarResult();
    }
}