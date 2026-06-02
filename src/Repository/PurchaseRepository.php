<?php

namespace App\Repository;

use App\Entity\Purchase;
use App\Entity\HmaService;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Purchase>
 */
class PurchaseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Purchase::class);
    }

    // ==================== PAGINATION GÉNÉRIQUE ====================
    public function paginate($query, int $page, int $limit): array
    {
        $paginator = new Paginator($query);
        $totalItems = count($paginator);
        $totalPages = ceil($totalItems / $limit);
        
        $paginator->getQuery()
            ->setFirstResult($limit * ($page - 1))
            ->setMaxResults($limit);

        return [
            'items' => $paginator,
            'total_items' => $totalItems,
            'total_pages' => $totalPages,
            'current_page' => $page,
            'limit' => $limit,
            'has_previous_page' => $page > 1,
            'has_next_page' => $page < $totalPages,
            'previous_page' => $page > 1 ? $page - 1 : null,
            'next_page' => $page < $totalPages ? $page + 1 : null,
        ];
    }

    // ==================== MÉTHODES DE RECHERCHE PAGINÉES ====================
    public function findAllPaginated(int $page = 1, int $limit = 15): array
    {
        $query = $this->createQueryBuilder('p')
            ->leftJoin('p.supplier', 's')
            ->addSelect('s')
            ->leftJoin('p.user', 'u')
            ->addSelect('u')
            ->orderBy('p.created_at', 'DESC')
            ->getQuery();

        return $this->paginate($query, $page, $limit);
    }

    public function findByStatusPaginated(string $status, int $page = 1, int $limit = 15): array
    {
        $query = $this->createQueryBuilder('p')
            ->leftJoin('p.supplier', 's')
            ->addSelect('s')
            ->leftJoin('p.user', 'u')
            ->addSelect('u')
            ->where('p.status = :status')
            ->setParameter('status', $status)
            ->orderBy('p.created_at', 'DESC')
            ->getQuery();

        return $this->paginate($query, $page, $limit);
    }

    public function findBySupplierPaginated(int $supplierId, int $page = 1, int $limit = 15): array
    {
        $query = $this->createQueryBuilder('p')
            ->leftJoin('p.supplier', 's')
            ->addSelect('s')
            ->leftJoin('p.user', 'u')
            ->addSelect('u')
            ->where('s.id = :supplierId')
            ->setParameter('supplierId', $supplierId)
            ->orderBy('p.created_at', 'DESC')
            ->getQuery();

        return $this->paginate($query, $page, $limit);
    }

    public function findByDateRangePaginated(\DateTime $startDate, \DateTime $endDate, int $page = 1, int $limit = 15): array
    {
        $query = $this->createQueryBuilder('p')
            ->leftJoin('p.supplier', 's')
            ->addSelect('s')
            ->leftJoin('p.user', 'u')
            ->addSelect('u')
            ->where('p.created_at BETWEEN :startDate AND :endDate')
            ->setParameter('startDate', $startDate)
            ->setParameter('endDate', $endDate)
            ->orderBy('p.created_at', 'DESC')
            ->getQuery();

        return $this->paginate($query, $page, $limit);
    }

    public function searchPaginated(string $searchTerm, int $page = 1, int $limit = 15): array
    {
        $query = $this->createQueryBuilder('p')
            ->leftJoin('p.supplier', 's')
            ->addSelect('s')
            ->leftJoin('p.user', 'u')
            ->addSelect('u')
            ->where('p.purchase_number LIKE :searchTerm')
            ->orWhere('s.name LIKE :searchTerm')
            ->orWhere('u.email LIKE :searchTerm')
            ->setParameter('searchTerm', '%' . $searchTerm . '%')
            ->orderBy('p.created_at', 'DESC')
            ->getQuery();

        return $this->paginate($query, $page, $limit);
    }

    public function searchPurchases(string $searchTerm, int $page = 1, int $limit = 15): array
    {
        $query = $this->createQueryBuilder('p')
            ->leftJoin('p.supplier', 's')
            ->addSelect('s')
            ->leftJoin('p.user', 'u')
            ->addSelect('u')
            ->where('p.purchase_number LIKE :searchTerm')
            ->orWhere('s.name LIKE :searchTerm')
            ->orWhere('u.email LIKE :searchTerm')
            ->orWhere('u.full_name LIKE :searchTerm')
            ->setParameter('searchTerm', '%' . $searchTerm . '%')
            ->orderBy('p.created_at', 'DESC')
            ->getQuery();

        return $this->paginate($query, $page, $limit);
    }

    // ==================== MÉTHODES SANS PAGINATION ====================
    public function findAllOrderedByDate(): array
    {
        return $this->createQueryBuilder('p')
            ->leftJoin('p.supplier', 's')
            ->addSelect('s')
            ->leftJoin('p.user', 'u')
            ->addSelect('u')
            ->orderBy('p.created_at', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function findBySupplier(int $supplierId): array
    {
        return $this->createQueryBuilder('p')
            ->leftJoin('p.supplier', 's')
            ->addSelect('s')
            ->where('s.id = :supplierId')
            ->setParameter('supplierId', $supplierId)
            ->orderBy('p.created_at', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function findByStatus(string $status): array
    {
        return $this->createQueryBuilder('p')
            ->where('p.status = :status')
            ->setParameter('status', $status)
            ->orderBy('p.created_at', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function findByDateRange(\DateTime $startDate, \DateTime $endDate): array
    {
        return $this->createQueryBuilder('p')
            ->where('p.created_at BETWEEN :startDate AND :endDate')
            ->setParameter('startDate', $startDate)
            ->setParameter('endDate', $endDate)
            ->orderBy('p.created_at', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function findAllActive(): array
    {
        return $this->createQueryBuilder('p')
            ->where('p.status != :cancelled')
            ->setParameter('cancelled', 'cancelled')
            ->orderBy('p.created_at', 'DESC')
            ->getQuery()
            ->getResult();
    }

    // ==================== STATISTIQUES ====================
    public function getMonthlyStats(int $year, int $month): array
    {
        $startDate = new \DateTime(sprintf('%d-%02d-01', $year, $month));
        $endDate = clone $startDate;
        $endDate->modify('last day of this month')->setTime(23, 59, 59);

        return $this->createQueryBuilder('p')
            ->select('COUNT(p.id) as total_purchases', 'SUM(p.total_amount) as total_amount')
            ->where('p.created_at BETWEEN :startDate AND :endDate')
            ->andWhere('p.status = :status')
            ->setParameter('startDate', $startDate)
            ->setParameter('endDate', $endDate)
            ->setParameter('status', Purchase::STATUS_RECEIVED)
            ->getQuery()
            ->getSingleResult();
    }

    // ==================== FILTRES AVANCÉS ====================
    /**
     * Applique les filtres à la requête QueryBuilder
     */
    private function applyFilters($qb, array $filters): void
    {
        // 🔥 FILTRE PAR ENTREPRISE (HMA SERVICE)
        if (!empty($filters['hma_service_id'])) {
            $qb->andWhere('p.hma_service = :hmaService')
                ->setParameter('hmaService', $filters['hma_service_id']);
        }

        if (!empty($filters['status']) && in_array($filters['status'], array_keys(Purchase::getStatuses()))) {
            $qb->andWhere('p.status = :status')
                ->setParameter('status', $filters['status']);
        }

        if (!empty($filters['supplier_id'])) {
            $qb->andWhere('p.supplier = :supplier')
                ->setParameter('supplier', $filters['supplier_id']);
        }

        if (!empty($filters['start_date'])) {
            $start = \DateTime::createFromFormat('d/m/Y', $filters['start_date']);
            if ($start) {
                $start->setTime(0, 0, 0);
                $qb->andWhere('p.created_at >= :start')
                    ->setParameter('start', $start);
            }
        }

        if (!empty($filters['end_date'])) {
            $end = \DateTime::createFromFormat('d/m/Y', $filters['end_date']);
            if ($end) {
                $end->setTime(23, 59, 59);
                $qb->andWhere('p.created_at <= :end')
                    ->setParameter('end', $end);
            }
        }

        if (!empty($filters['search'])) {
            $qb->andWhere('p.purchase_number LIKE :search OR s.name LIKE :search OR u.email LIKE :search OR u.full_name LIKE :search')
                ->setParameter('search', '%' . $filters['search'] . '%');
        }
    }

    /**
     * Retourne les statistiques globales (total commandes, montant total) selon les filtres
     */
    public function getStatsByFilters(array $filters): array
    {
        $qb = $this->createQueryBuilder('p')
            ->select('COUNT(p.id) as total_count', 'SUM(p.total_amount) as total_amount');

        $this->applyFilters($qb, $filters);

        $result = $qb->getQuery()->getSingleResult();
        return [
            'total_count' => (int) $result['total_count'],
            'total_amount' => (float) $result['total_amount'] ?? 0,
        ];
    }

    /**
     * Retourne les nombres de commandes par statut selon les filtres
     */
    public function getStatusCountsByFilters(array $filters): array
    {
        $qb = $this->createQueryBuilder('p')
            ->select('p.status, COUNT(p.id) as count')
            ->groupBy('p.status');

        $this->applyFilters($qb, $filters);

        $results = $qb->getQuery()->getResult();
        $counts = [
            Purchase::STATUS_DRAFT => 0,
            Purchase::STATUS_CONFIRMED => 0,
            Purchase::STATUS_RECEIVED => 0,
            Purchase::STATUS_CANCELLED => 0,
        ];
        foreach ($results as $row) {
            $counts[$row['status']] = (int) $row['count'];
        }
        return $counts;
    }

    /**
     * Retourne les commandes paginées selon les filtres
     */
    public function findFilteredPaginated(array $filters, int $page, int $limit): array
    {
        $qb = $this->createQueryBuilder('p')
            ->leftJoin('p.supplier', 's')
            ->addSelect('s')
            ->leftJoin('p.user', 'u')
            ->addSelect('u')
            ->orderBy('p.created_at', 'DESC');

        $this->applyFilters($qb, $filters);

        $paginator = new Paginator($qb);
        $totalItems = count($paginator);
        $totalPages = ceil($totalItems / $limit);

        $qb->setFirstResult(($page - 1) * $limit)
            ->setMaxResults($limit);

        $items = $qb->getQuery()->getResult();

        return [
            'items' => $items,
            'total_items' => $totalItems,
            'total_pages' => $totalPages,
            'current_page' => $page,
            'limit' => $limit,
        ];
    }

    public function findByCompanyAndPeriod(HmaService $company, \DateTime $start, \DateTime $end): array
    {
        return $this->createQueryBuilder('p')
            ->where('p.hma_service = :company')
            ->andWhere('p.created_at BETWEEN :start AND :end')
            ->setParameter('company', $company)
            ->setParameter('start', $start)
            ->setParameter('end', $end)
            ->orderBy('p.created_at', 'DESC')
            ->getQuery()
            ->getResult();
    }
}

