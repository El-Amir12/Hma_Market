<?php
// src/Repository/AnalysisPriceRepository.php

namespace App\Repository;

use App\Entity\AnalysisPrice;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AnalysisPrice>
 */
class AnalysisPriceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AnalysisPrice::class);
    }

    /**
     * Récupère les prix actifs triés par ordre d'affichage
     */
    public function findActiveOrdered(): array
    {
        return $this->createQueryBuilder('ap')
            ->where('ap.is_active = :active')
            ->setParameter('active', true)
            ->orderBy('ap.display_order', 'ASC')
            ->addOrderBy('ap.price', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Récupère un prix par son type
     */
    public function findByType(string $type): ?AnalysisPrice
    {
        return $this->createQueryBuilder('ap')
            ->where('ap.type = :type')
            ->setParameter('type', $type)
            ->getQuery()
            ->getOneOrNullResult();
    }
}