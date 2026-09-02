<?php

namespace App\Repository;

use App\Entity\Payment;
use App\Entity\HmaService;  // ← AJOUTEZ CET IMPORT
use App\Entity\Subscription;  // ← AJOUTEZ CET IMPORT
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Payment>
 */
class PaymentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Payment::class);
    }

    /**
     * Récupère le dernier paiement d'un abonnement
     */
    public function findLastPaymentBySubscription(Subscription $subscription): ?Payment
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.subscription = :subscription')
            ->setParameter('subscription', $subscription)
            ->orderBy('p.createdAt', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }

    /**
     * Récupère tous les paiements d'un abonnement
     */
    public function findPaymentsBySubscription(Subscription $subscription): array
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.subscription = :subscription')
            ->setParameter('subscription', $subscription)
            ->orderBy('p.createdAt', 'DESC')
            ->getQuery()
            ->getResult()
        ;
    }

    /**
     * Récupère les paiements d'une entreprise
     */
    public function findPaymentsByCompany(HmaService $company): array
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.hma_service = :company')
            ->setParameter('company', $company)
            ->orderBy('p.createdAt', 'DESC')
            ->getQuery()
            ->getResult()
        ;
    }

    /**
     * Récupère le total des paiements pour un abonnement
     */
    public function getTotalPaidBySubscription(Subscription $subscription): float
    {
        $result = $this->createQueryBuilder('p')
            ->select('SUM(p.amount) as total')
            ->andWhere('p.subscription = :subscription')
            ->andWhere('p.status IN (:statuses)')
            ->setParameter('subscription', $subscription)
            ->setParameter('statuses', ['completed', 'paid'])
            ->getQuery()
            ->getSingleScalarResult()
        ;
        
        return (float) ($result ?? 0);
    }

    /**
     * Récupère les paiements par statut
     */
    public function findPaymentsByStatus(string $status): array
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.status = :status')
            ->setParameter('status', $status)
            ->orderBy('p.createdAt', 'DESC')
            ->getQuery()
            ->getResult()
        ;
    }

    /**
     * Récupère les paiements d'une période donnée
     */
    public function findPaymentsBetweenDates(\DateTime $startDate, \DateTime $endDate): array
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.paymentDate BETWEEN :startDate AND :endDate')
            ->setParameter('startDate', $startDate)
            ->setParameter('endDate', $endDate)
            ->orderBy('p.paymentDate', 'DESC')
            ->getQuery()
            ->getResult()
        ;
    }
}