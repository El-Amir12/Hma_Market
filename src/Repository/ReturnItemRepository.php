<?php
// src/Repository/ReturnItemRepository.php

namespace App\Repository;

use App\Entity\ReturnItem;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ReturnItem>
 */
class ReturnItemRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReturnItem::class);
    }

    /**
     * Récupère les articles retournés pour un retour spécifique
     */
    public function findByReturnOrder(int $returnOrderId): array
    {
        return $this->createQueryBuilder('ri')
            ->where('ri.return_order = :returnOrderId')
            ->setParameter('returnOrderId', $returnOrderId)
            ->orderBy('ri.id', 'ASC')
            ->getQuery()
            ->getResult();
    }
}