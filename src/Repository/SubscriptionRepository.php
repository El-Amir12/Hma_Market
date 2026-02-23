<?php
// src/Repository/SubscriptionRepository.php

namespace App\Repository;

use App\Entity\Subscription;
use App\Entity\HmaService;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Subscription>
 */
class SubscriptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Subscription::class);
    }

    /**
     * Trouver les abonnements d'une entreprise
     */
    public function findByCompany(HmaService $company): array
    {
        return $this->findBy(
            ['hma_service' => $company],
            ['createdAt' => 'DESC']
        );
    }

    /**
     * Trouver les abonnements d'une entreprise avec filtres
     */
    public function findByCompanyWithFilters(HmaService $company, array $filters)
    {
        $qb = $this->createQueryBuilder('s')
            ->where('s.hma_service = :company')
            ->setParameter('company', $company)
            ->orderBy('s.createdAt', 'DESC');

        if (!empty($filters['status'])) {
            $qb->andWhere('s.status = :status')
                ->setParameter('status', $filters['status']);
        }

        if (!empty($filters['date_from'])) {
            $qb->andWhere('s.createdAt >= :dateFrom')
                ->setParameter('dateFrom', new \DateTime($filters['date_from']));
        }

        if (!empty($filters['date_to'])) {
            $qb->andWhere('s.createdAt <= :dateTo')
                ->setParameter('dateTo', new \DateTime($filters['date_to']));
        }

        return $qb;
    }

    /**
     * Trouver l'abonnement actif
     */
    public function findActiveSubscription(HmaService $company): ?Subscription
    {
        return $this->createQueryBuilder('s')
            ->where('s.hma_service = :company')
            ->andWhere('s.status = :status')
            ->andWhere('s.endsAt >= :now')
            ->setParameter('company', $company)
            ->setParameter('status', 'active')
            ->setParameter('now', new \DateTime())
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }
}