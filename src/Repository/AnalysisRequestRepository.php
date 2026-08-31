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

    // ==================== MÉTHODES POUR LES ENTREPRISES ====================

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
     * Récupère les statistiques des analyses pour une entreprise
     */
    public function getStatistics(HmaService $company): array
    {
        $qb = $this->createQueryBuilder('a')
            ->select('COUNT(a.id) as total')
            ->addSelect('SUM(CASE WHEN a.status = :completed THEN 1 ELSE 0 END) as completed')
            ->addSelect('SUM(CASE WHEN a.status = :pending THEN 1 ELSE 0 END) as pending')
            ->addSelect('SUM(CASE WHEN a.status = :paid THEN 1 ELSE 0 END) as paid')
            ->addSelect('SUM(CASE WHEN a.status = :processing THEN 1 ELSE 0 END) as processing')
            ->addSelect('SUM(CASE WHEN a.status = :failed THEN 1 ELSE 0 END) as failed')
            ->addSelect('SUM(CASE WHEN a.status = :expired THEN 1 ELSE 0 END) as expired')
            ->addSelect('SUM(a.amount) as total_amount')
            ->where('a.company = :company')
            ->setParameter('company', $company)
            ->setParameter('completed', AnalysisRequest::STATUS_COMPLETED)
            ->setParameter('pending', AnalysisRequest::STATUS_PENDING)
            ->setParameter('paid', AnalysisRequest::STATUS_PAID)
            ->setParameter('processing', AnalysisRequest::STATUS_PROCESSING)
            ->setParameter('failed', AnalysisRequest::STATUS_FAILED)
            ->setParameter('expired', AnalysisRequest::STATUS_EXPIRED);

        $result = $qb->getQuery()->getSingleResult();

        return [
            'total' => (int)($result['total'] ?? 0),
            'completed' => (int)($result['completed'] ?? 0),
            'pending' => (int)($result['pending'] ?? 0),
            'paid' => (int)($result['paid'] ?? 0),
            'processing' => (int)($result['processing'] ?? 0),
            'failed' => (int)($result['failed'] ?? 0),
            'expired' => (int)($result['expired'] ?? 0),
            'total_amount' => (float)($result['total_amount'] ?? 0),
        ];
    }

    /**
     * Récupère les statistiques des analyses avec filtres pour une entreprise
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

    // ==================== MÉTHODES POUR LE SUPER ADMIN ====================

    /**
     * Récupère les statistiques globales pour le Super Admin
     */
    public function getGlobalStats(array $filters = []): array
    {
        $qb = $this->createQueryBuilder('a')
            ->select('COUNT(a.id) as total')
            ->addSelect('SUM(CASE WHEN a.status = :pending THEN 1 ELSE 0 END) as pending')
            ->addSelect('SUM(CASE WHEN a.status = :paid THEN 1 ELSE 0 END) as paid')
            ->addSelect('SUM(CASE WHEN a.status = :processing THEN 1 ELSE 0 END) as processing')
            ->addSelect('SUM(CASE WHEN a.status = :completed THEN 1 ELSE 0 END) as completed')
            ->addSelect('SUM(CASE WHEN a.status = :failed THEN 1 ELSE 0 END) as failed')
            ->addSelect('SUM(CASE WHEN a.status = :expired THEN 1 ELSE 0 END) as expired')
            ->addSelect('SUM(CASE WHEN a.status IN (:activeStatuses) THEN 1 ELSE 0 END) as active')
            ->addSelect('SUM(a.amount) as total_amount')
            ->setParameter('pending', AnalysisRequest::STATUS_PENDING)
            ->setParameter('paid', AnalysisRequest::STATUS_PAID)
            ->setParameter('processing', AnalysisRequest::STATUS_PROCESSING)
            ->setParameter('completed', AnalysisRequest::STATUS_COMPLETED)
            ->setParameter('failed', AnalysisRequest::STATUS_FAILED)
            ->setParameter('expired', AnalysisRequest::STATUS_EXPIRED)
            ->setParameter('activeStatuses', [
                AnalysisRequest::STATUS_PAID,
                AnalysisRequest::STATUS_PROCESSING,
                AnalysisRequest::STATUS_COMPLETED
            ]);

        $this->applyGlobalFilters($qb, $filters);

        $result = $qb->getQuery()->getSingleResult();

        return [
            'total' => (int)($result['total'] ?? 0),
            'pending' => (int)($result['pending'] ?? 0),
            'paid' => (int)($result['paid'] ?? 0),
            'processing' => (int)($result['processing'] ?? 0),
            'completed' => (int)($result['completed'] ?? 0),
            'failed' => (int)($result['failed'] ?? 0),
            'expired' => (int)($result['expired'] ?? 0),
            'active' => (int)($result['active'] ?? 0),
            'total_amount' => (float)($result['total_amount'] ?? 0),
        ];
    }

    /**
     * Récupère toutes les demandes avec filtres (pour Super Admin) avec pagination
     */
    public function findByFiltersPaginated(array $filters = [], int $page = 1, int $limit = 20): array
    {
        $qb = $this->createQueryBuilder('a')
            ->leftJoin('a.company', 'c')
            ->addSelect('c')
            ->orderBy('a.created_at', 'DESC');

        $this->applyGlobalFilters($qb, $filters);

        // Compter le total
        $countQb = clone $qb;
        $total = (int)$countQb->select('COUNT(DISTINCT a.id)')->getQuery()->getSingleScalarResult();
        $totalPages = ceil($total / $limit);

        // Pagination
        $qb->setFirstResult(($page - 1) * $limit)
           ->setMaxResults($limit);

        return [
            'items' => $qb->getQuery()->getResult(),
            'total' => $total,
            'total_pages' => $totalPages,
            'page' => $page,
            'limit' => $limit,
        ];
    }

    /**
     * Récupère toutes les demandes avec filtres (pour Super Admin) sans pagination
     */
    public function findByFilters(array $filters = [], ?int $limit = null): array
    {
        $qb = $this->createQueryBuilder('a')
            ->leftJoin('a.company', 'c')
            ->addSelect('c')
            ->orderBy('a.created_at', 'DESC');

        $this->applyGlobalFilters($qb, $filters);

        if ($limit) {
            $qb->setMaxResults($limit);
        }

        return $qb->getQuery()->getResult();
    }

    /**
     * Récupère les types d'analyse distincts
     */
    public function getDistinctAnalysisTypes(): array
    {
        $qb = $this->createQueryBuilder('a')
            ->select('DISTINCT a.type')
            ->orderBy('a.type', 'ASC');

        $results = $qb->getQuery()->getScalarResult();
        return array_column($results, 'type');
    }

    /**
     * Récupère les statuts distincts
     */
    public function getDistinctStatuses(): array
    {
        return [
            AnalysisRequest::STATUS_PENDING,
            AnalysisRequest::STATUS_PAID,
            AnalysisRequest::STATUS_PROCESSING,
            AnalysisRequest::STATUS_COMPLETED,
            AnalysisRequest::STATUS_FAILED,
            AnalysisRequest::STATUS_EXPIRED,
        ];
    }

    // ==================== MÉTHODES STATISTIQUES POUR SUPER ADMIN ====================

    /**
     * Récupère les statistiques d'évolution des demandes par mois
     * Utilise DQL avec SUBSTRING pour extraire le mois
     */
    public function getTimelineStats(array $filters = []): array
    {
        // Gestion des dates par défaut (12 derniers mois)
        if (empty($filters['date_from'])) {
            $startDate = new \DateTime('-11 months');
            $startDate = $startDate->modify('first day of this month');
        } else {
            $startDate = is_string($filters['date_from']) ? new \DateTime($filters['date_from']) : $filters['date_from'];
            $startDate = $startDate->modify('first day of this month');
        }
        
        if (empty($filters['date_to'])) {
            $endDate = new \DateTime();
            $endDate = $endDate->modify('last day of this month');
        } else {
            $endDate = is_string($filters['date_to']) ? new \DateTime($filters['date_to']) : $filters['date_to'];
            $endDate = $endDate->modify('last day of this month');
        }
        
        $months = [];
        $total = [];
        $completed = [];
        $pending = [];
        $paid = [];
        $totalAmount = [];
        
        // Parcourir les mois
        $current = clone $startDate;
        while ($current <= $endDate) {
            $monthStart = clone $current;
            $monthEnd = (clone $current)->modify('last day of this month')->setTime(23, 59, 59);
            $monthLabel = $current->format('M Y');
            
            // Requête pour ce mois avec filtres
            $qb = $this->createQueryBuilder('a')
                ->select('
                    COUNT(a.id) as total,
                    SUM(CASE WHEN a.status = :completed THEN 1 ELSE 0 END) as completed,
                    SUM(CASE WHEN a.status = :pending THEN 1 ELSE 0 END) as pending,
                    SUM(CASE WHEN a.status = :paid THEN 1 ELSE 0 END) as paid,
                    SUM(a.amount) as total_amount
                ')
                ->where('a.created_at >= :monthStart')
                ->andWhere('a.created_at <= :monthEnd')
                ->setParameter('monthStart', $monthStart)
                ->setParameter('monthEnd', $monthEnd)
                ->setParameter('completed', AnalysisRequest::STATUS_COMPLETED)
                ->setParameter('pending', AnalysisRequest::STATUS_PENDING)
                ->setParameter('paid', AnalysisRequest::STATUS_PAID);
            
            // Appliquer les filtres
            if (!empty($filters['search'])) {
                $qb->leftJoin('a.company', 'c')
                   ->andWhere('(c.companyName LIKE :search OR a.request_number LIKE :search)')
                   ->setParameter('search', '%' . $filters['search'] . '%');
            }
            
            if (!empty($filters['type'])) {
                $qb->andWhere('a.type = :type')
                   ->setParameter('type', $filters['type']);
            }
            
            if (!empty($filters['status'])) {
                $qb->andWhere('a.status = :status')
                   ->setParameter('status', $filters['status']);
            }
            
            $result = $qb->getQuery()->getSingleResult();
            
            $months[] = $monthLabel;
            $total[] = (int) $result['total'];
            $completed[] = (int) $result['completed'];
            $pending[] = (int) $result['pending'];
            $paid[] = (int) $result['paid'];
            $totalAmount[] = (float) $result['total_amount'];
            
            // Passer au mois suivant
            $current->modify('first day of next month');
        }
        
        return [
            'months' => $months,
            'total' => $total,
            'completed' => $completed,
            'pending' => $pending,
            'paid' => $paid,
            'total_amount' => $totalAmount,
        ];
    }

    /**
     * Récupère la répartition des demandes par type d'analyse
     */
    public function getTypeDistribution(array $filters = []): array
    {
        $qb = $this->createQueryBuilder('a')
            ->select('a.type, COUNT(a.id) as count, SUM(a.amount) as total_amount')
            ->groupBy('a.type')
            ->orderBy('count', 'DESC');

        $this->applyGlobalFilters($qb, $filters);

        return $qb->getQuery()->getResult();
    }

    /**
     * Récupère les statistiques par entreprise (Top 10)
     */
    public function getCompanyStats(array $filters = []): array
    {
        $qb = $this->createQueryBuilder('a')
            ->select('
                c.id as company_id,
                c.companyName as company_name,
                COUNT(a.id) as total_requests,
                SUM(CASE WHEN a.status = :completed THEN 1 ELSE 0 END) as completed,
                SUM(a.amount) as total_amount
            ')
            ->leftJoin('a.company', 'c')
            ->setParameter('completed', AnalysisRequest::STATUS_COMPLETED)
            ->groupBy('c.id, c.companyName')
            ->orderBy('total_amount', 'DESC')
            ->setMaxResults(10);

        $this->applyGlobalFilters($qb, $filters);

        return $qb->getQuery()->getResult();
    }

    /**
     * Calcule le taux de conversion des demandes
     */
    public function getConversionRate(array $filters = []): array
    {
        $qb = $this->createQueryBuilder('a')
            ->select('
                COUNT(a.id) as total,
                SUM(CASE WHEN a.status = :completed THEN 1 ELSE 0 END) as completed,
                SUM(CASE WHEN a.status IN (:activeStatuses) THEN 1 ELSE 0 END) as active
            ')
            ->setParameter('completed', AnalysisRequest::STATUS_COMPLETED)
            ->setParameter('activeStatuses', [
                AnalysisRequest::STATUS_PAID,
                AnalysisRequest::STATUS_PROCESSING,
                AnalysisRequest::STATUS_COMPLETED
            ]);

        $this->applyGlobalFilters($qb, $filters);

        $result = $qb->getQuery()->getSingleResult();

        $total = (int)($result['total'] ?? 0);
        $completed = (int)($result['completed'] ?? 0);
        $active = (int)($result['active'] ?? 0);

        return [
            'total' => $total,
            'completed' => $completed,
            'active' => $active,
            'rate' => $total > 0 ? round(($completed / $total) * 100, 1) : 0,
        ];
    }

    // ==================== MÉTHODES UTILITAIRES ====================

    /**
     * Applique les filtres globaux pour les requêtes Super Admin
     */
    private function applyGlobalFilters($qb, array $filters): void
    {
        if (!empty($filters['search'])) {
            $qb->andWhere('(c.companyName LIKE :search OR a.request_number LIKE :search OR a.notes LIKE :search)')
               ->setParameter('search', '%' . $filters['search'] . '%');
        }

        if (!empty($filters['type'])) {
            $qb->andWhere('a.type = :type')
               ->setParameter('type', $filters['type']);
        }

        if (!empty($filters['status'])) {
            $qb->andWhere('a.status = :status')
               ->setParameter('status', $filters['status']);
        }

        if (!empty($filters['date_from'])) {
            $dateFrom = new \DateTime($filters['date_from']);
            $dateFrom->setTime(0, 0, 0);
            $qb->andWhere('a.created_at >= :date_from')
               ->setParameter('date_from', $dateFrom);
        }

        if (!empty($filters['date_to'])) {
            $dateTo = new \DateTime($filters['date_to']);
            $dateTo->setTime(23, 59, 59);
            $qb->andWhere('a.created_at <= :date_to')
               ->setParameter('date_to', $dateTo);
        }

        if (!empty($filters['company'])) {
            $qb->andWhere('c.id = :company')
               ->setParameter('company', $filters['company']);
        }
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
     * Génère un numéro de demande unique
     */
    public function generateRequestNumber(): string
    {
        $prefix = 'ANL';
        $date = (new \DateTime())->format('Ymd');

        // Récupérer le dernier numéro pour aujourd'hui
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
     * Vérifie si une demande existe pour une entreprise sur une période
     */
    public function existsForCompanyPeriod(
        HmaService $company,
        \DateTimeInterface $periodStart,
        \DateTimeInterface $periodEnd,
        ?string $excludeId = null
    ): bool {
        $qb = $this->createQueryBuilder('a')
            ->select('COUNT(a.id)')
            ->where('a.company = :company')
            ->andWhere('a.period_start <= :periodEnd')
            ->andWhere('a.period_end >= :periodStart')
            ->andWhere('a.status IN (:statuses)')
            ->setParameter('company', $company)
            ->setParameter('periodStart', $periodStart)
            ->setParameter('periodEnd', $periodEnd)
            ->setParameter('statuses', [
                AnalysisRequest::STATUS_PENDING,
                AnalysisRequest::STATUS_PAID,
                AnalysisRequest::STATUS_PROCESSING,
                AnalysisRequest::STATUS_COMPLETED
            ]);

        if ($excludeId) {
            $qb->andWhere('a.id != :excludeId')
               ->setParameter('excludeId', $excludeId);
        }

        return (int)$qb->getQuery()->getSingleScalarResult() > 0;
    }
}