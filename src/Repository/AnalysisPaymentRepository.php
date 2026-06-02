<?php
// src/Repository/AnalysisPaymentRepository.php

namespace App\Repository;

use App\Entity\AnalysisPayment;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AnalysisPayment>
 */
class AnalysisPaymentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AnalysisPayment::class);
    }
    
    /**
     * Trouve un paiement par transaction ID
     */
    public function findByTransactionId(string $transactionId): ?AnalysisPayment
    {
        return $this->createQueryBuilder('p')
            ->where('p.transaction_id = :transactionId')
            ->setParameter('transactionId', $transactionId)
            ->getQuery()
            ->getOneOrNullResult();
    }
    
    /**
     * Récupère les paiements d'une demande
     */
    public function findByAnalysisRequest(int $analysisRequestId): array
    {
        return $this->createQueryBuilder('p')
            ->where('p.analysis_request = :requestId')
            ->setParameter('requestId', $analysisRequestId)
            ->orderBy('p.created_at', 'DESC')
            ->getQuery()
            ->getResult();
    }
}