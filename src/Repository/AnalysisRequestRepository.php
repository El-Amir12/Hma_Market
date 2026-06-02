<?php
// src/Repository/AnalysisRequestRepository.php

namespace App\Repository;

use App\Entity\AnalysisRequest;
use App\Entity\HmaService;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AnalysisRequest>
 */
class AnalysisRequestRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AnalysisRequest::class);
    }
    
    /**
     * Récupère les demandes d'analyse pour une entreprise
     */
    public function findByCompany(HmaService $company, ?string $status = null): array
    {
        $qb = $this->createQueryBuilder('a')
            ->where('a.company = :company')
            ->setParameter('company', $company)
            ->orderBy('a.created_at', 'DESC');
        
        if ($status) {
            $qb->andWhere('a.status = :status')
               ->setParameter('status', $status);
        }
        
        return $qb->getQuery()->getResult();
    }
    
    /**
     * Récupère les demandes expirées (pending depuis plus de 3 jours)
     */
    public function findExpiredRequests(): array
    {
        $now = new \DateTimeImmutable();
        $expireDate = (clone $now)->modify('-3 days');
        
        return $this->createQueryBuilder('a')
            ->where('a.status = :status')
            ->andWhere('a.created_at <= :expireDate')
            ->setParameter('status', AnalysisRequest::STATUS_PENDING)
            ->setParameter('expireDate', $expireDate)
            ->getQuery()
            ->getResult();
    }
    
    /**
     * Récupère les statistiques des analyses
     */
    public function getStatistics(HmaService $company): array
    {
        $qb = $this->createQueryBuilder('a')
            ->select('COUNT(a.id) as total')
            ->addSelect('SUM(CASE WHEN a.status = :completed THEN 1 ELSE 0 END) as completed')
            ->addSelect('SUM(CASE WHEN a.status = :pending THEN 1 ELSE 0 END) as pending')
            ->addSelect('SUM(a.amount) as total_amount')
            ->where('a.company = :company')
            ->setParameter('company', $company)
            ->setParameter('completed', AnalysisRequest::STATUS_COMPLETED)
            ->setParameter('pending', AnalysisRequest::STATUS_PENDING);
        
        $result = $qb->getQuery()->getSingleResult();
        
        return [
            'total' => (int)($result['total'] ?? 0),
            'completed' => (int)($result['completed'] ?? 0),
            'pending' => (int)($result['pending'] ?? 0),
            'total_amount' => (float)($result['total_amount'] ?? 0),
        ];
    }
    
    /**
     * Récupère toutes les demandes avec filtres (pour Super Admin)
     */
    public function findAllFiltered(
        ?string $search = null,
        ?string $status = null,
        ?string $type = null,
        ?\DateTimeInterface $dateFrom = null,
        ?\DateTimeInterface $dateTo = null,
        int $page = 1,
        int $limit = 20
    ): array {
        $qb = $this->createQueryBuilder('a')
            ->leftJoin('a.company', 'c')
            ->addSelect('c')
            ->orderBy('a.created_at', 'DESC');
        
        if ($search) {
            $qb->andWhere('(c.companyName LIKE :search OR c.subscription_number LIKE :search OR a.request_number LIKE :search)')
               ->setParameter('search', '%' . $search . '%');
        }
        
        if ($status) {
            $qb->andWhere('a.status = :status')
               ->setParameter('status', $status);
        }
        
        if ($type) {
            $qb->andWhere('a.type = :type')
               ->setParameter('type', $type);
        }
        
        if ($dateFrom) {
            $qb->andWhere('a.created_at >= :dateFrom')
               ->setParameter('dateFrom', $dateFrom);
        }
        
        if ($dateTo) {
            $qb->andWhere('a.created_at <= :dateTo')
               ->setParameter('dateTo', $dateTo);
        }
        
        // Compter le total
        $countQb = clone $qb;
        $totalCount = $countQb->select('COUNT(DISTINCT a.id)')->getQuery()->getSingleScalarResult();
        
        // Pagination
        $qb->setFirstResult(($page - 1) * $limit)
           ->setMaxResults($limit);
        
        return [
            'items' => $qb->getQuery()->getResult(),
            'total' => (int)$totalCount,
            'page' => $page,
            'limit' => $limit,
            'totalPages' => ceil($totalCount / $limit),
        ];
    }
    
    /**
     * Génère un numéro de demande unique
     */
    public function generateRequestNumber(): string
    {
        $prefix = 'ANL';
        $date = (new \DateTime())->format('Ymd');
        
        // ✅ Récupérer le dernier numéro pour aujourd'hui
        $lastRequest = $this->createQueryBuilder('a')
            ->where('a.request_number LIKE :pattern')
            ->setParameter('pattern', "{$prefix}-{$date}-%")
            ->orderBy('a.id', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
        
        if ($lastRequest) {
            // Extraire le numéro séquentiel
            $lastNumber = (int)substr($lastRequest->getRequestNumber(), -4);
            $newNumber = str_pad($lastNumber + 1, 4, '0', STR_PAD_LEFT);
        } else {
            $newNumber = '0001';
        }
        
        $random = str_pad(random_int(1, 99), 2, '0', STR_PAD_LEFT);
        
        return "{$prefix}-{$date}-{$newNumber}-{$random}";
    }

    /**
     * Récupère les demandes d'analyse pour une entreprise avec filtres
     */
    public function findByCompanyFiltered(
        HmaService $company,
        ?string $type = null,
        ?string $status = null,
        ?\DateTimeInterface $dateFrom = null,
        ?\DateTimeInterface $dateTo = null
    ): array {
        $qb = $this->createQueryBuilder('a')
            ->where('a.company = :company')
            ->setParameter('company', $company)
            ->orderBy('a.created_at', 'DESC');
        
        if ($type) {
            $qb->andWhere('a.type = :type')
            ->setParameter('type', $type);
        }
        
        if ($status) {
            $qb->andWhere('a.status = :status')
            ->setParameter('status', $status);
        }
        
        if ($dateFrom) {
            $qb->andWhere('a.created_at >= :dateFrom')
            ->setParameter('dateFrom', $dateFrom);
        }
        
        if ($dateTo) {
            $qb->andWhere('a.created_at <= :dateTo')
            ->setParameter('dateTo', $dateTo);
        }
        
        return $qb->getQuery()->getResult();
    }

    /**
     * Récupère les statistiques des analyses avec filtres
     */
    public function getStatisticsFiltered(
        HmaService $company,
        ?string $type = null,
        ?string $status = null,
        ?\DateTimeInterface $dateFrom = null,
        ?\DateTimeInterface $dateTo = null
    ): array {
        $qb = $this->createQueryBuilder('a')
            ->select('COUNT(a.id) as total')
            ->addSelect('SUM(CASE WHEN a.status = :completed THEN 1 ELSE 0 END) as completed')
            ->addSelect('SUM(CASE WHEN a.status = :pending THEN 1 ELSE 0 END) as pending')
            ->addSelect('SUM(a.amount) as total_amount')
            ->where('a.company = :company')
            ->setParameter('company', $company)
            ->setParameter('completed', AnalysisRequest::STATUS_COMPLETED)
            ->setParameter('pending', AnalysisRequest::STATUS_PENDING);
        
        if ($type) {
            $qb->andWhere('a.type = :type')
            ->setParameter('type', $type);
        }
        
        if ($status) {
            $qb->andWhere('a.status = :status')
            ->setParameter('status', $status);
        }
        
        if ($dateFrom) {
            $qb->andWhere('a.created_at >= :dateFrom')
            ->setParameter('dateFrom', $dateFrom);
        }
        
        if ($dateTo) {
            $qb->andWhere('a.created_at <= :dateTo')
            ->setParameter('dateTo', $dateTo);
        }
        
        $result = $qb->getQuery()->getSingleResult();
        
        return [
            'total' => (int)($result['total'] ?? 0),
            'completed' => (int)($result['completed'] ?? 0),
            'pending' => (int)($result['pending'] ?? 0),
            'total_amount' => (float)($result['total_amount'] ?? 0),
        ];
    }
}