<?php
// src/Repository/SupplierCreditNoteRepository.php

namespace App\Repository;

use App\Entity\HmaService;
use App\Entity\SupplierCreditNote;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SupplierCreditNote>
 */
class SupplierCreditNoteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SupplierCreditNote::class);
    }

    /**
     * Recherche paginée des avoirs avec filtres
     */
    public function findFilteredPaginated(
        HmaService $hmaService,
        string $search = '',
        string $status = '',
        string $priority = '',
        string $issueType = '',
        ?int $supplierId = null,
        ?int $purchaseId = null,
        ?string $dateFrom = null,
        ?string $dateTo = null,
        int $page = 1,
        int $limit = 12
    ): Paginator {
        $qb = $this->createQueryBuilder('c')
            ->leftJoin('c.supplier', 's')
            ->leftJoin('c.purchase', 'p')
            ->leftJoin('c.stockBatch', 'b')
            ->addSelect('s', 'p', 'b')
            ->where('c.hma_service = :service')
            ->setParameter('service', $hmaService)
            ->orderBy('c.created_at', 'DESC');

        if (!empty($search)) {
            $qb->andWhere('c.credit_note_number LIKE :search OR c.description LIKE :search OR s.name LIKE :search')
               ->setParameter('search', '%' . $search . '%');
        }

        if (!empty($status)) {
            $qb->andWhere('c.status = :status')
               ->setParameter('status', $status);
        }

        if (!empty($priority)) {
            $qb->andWhere('c.priority = :priority')
               ->setParameter('priority', $priority);
        }

        if (!empty($issueType)) {
            $qb->andWhere('c.issue_type = :issueType')
               ->setParameter('issueType', $issueType);
        }

        if ($supplierId) {
            $qb->andWhere('s.id = :supplierId')
               ->setParameter('supplierId', $supplierId);
        }

        if ($purchaseId) {
            $qb->andWhere('p.id = :purchaseId')
               ->setParameter('purchaseId', $purchaseId);
        }

        if ($dateFrom) {
            $qb->andWhere('c.reported_at >= :dateFrom')
               ->setParameter('dateFrom', new \DateTimeImmutable($dateFrom));
        }

        if ($dateTo) {
            $qb->andWhere('c.reported_at <= :dateTo')
               ->setParameter('dateTo', new \DateTimeImmutable($dateTo . ' 23:59:59'));
        }

        $query = $qb->getQuery();
        $paginator = new Paginator($query);
        $paginator->getQuery()
            ->setFirstResult($limit * ($page - 1))
            ->setMaxResults($limit);

        return $paginator;
    }

    /**
     * Compte les avoirs selon les filtres
     */
    public function countFiltered(
        HmaService $hmaService,
        string $search = '',
        string $status = '',
        string $priority = '',
        string $issueType = '',
        ?int $supplierId = null,
        ?int $purchaseId = null,
        ?string $dateFrom = null,
        ?string $dateTo = null
    ): int {
        $qb = $this->createQueryBuilder('c')
            ->select('COUNT(c.id)')
            ->leftJoin('c.supplier', 's')
            ->where('c.hma_service = :service')
            ->setParameter('service', $hmaService);

        if (!empty($search)) {
            $qb->andWhere('c.credit_note_number LIKE :search OR c.description LIKE :search OR s.name LIKE :search')
               ->setParameter('search', '%' . $search . '%');
        }

        if (!empty($status)) {
            $qb->andWhere('c.status = :status')
               ->setParameter('status', $status);
        }

        if (!empty($priority)) {
            $qb->andWhere('c.priority = :priority')
               ->setParameter('priority', $priority);
        }

        if (!empty($issueType)) {
            $qb->andWhere('c.issue_type = :issueType')
               ->setParameter('issueType', $issueType);
        }

        if ($supplierId) {
            $qb->andWhere('s.id = :supplierId')
               ->setParameter('supplierId', $supplierId);
        }

        if ($purchaseId) {
            $qb->andWhere('c.purchase = :purchaseId')
               ->setParameter('purchaseId', $purchaseId);
        }

        if ($dateFrom) {
            $qb->andWhere('c.reported_at >= :dateFrom')
               ->setParameter('dateFrom', new \DateTimeImmutable($dateFrom));
        }

        if ($dateTo) {
            $qb->andWhere('c.reported_at <= :dateTo')
               ->setParameter('dateTo', new \DateTimeImmutable($dateTo . ' 23:59:59'));
        }

        return (int) $qb->getQuery()->getSingleScalarResult();
    }

    /**
     * Récupère les statuts et leurs comptes
     */
    public function getStatusCounts(HmaService $hmaService): array
    {
        $results = $this->createQueryBuilder('c')
            ->select('c.status, COUNT(c.id) as count')
            ->where('c.hma_service = :service')
            ->setParameter('service', $hmaService)
            ->groupBy('c.status')
            ->getQuery()
            ->getResult();

        $counts = [];
        foreach ($results as $result) {
            $counts[$result['status']] = $result['count'];
        }
        return $counts;
    }

    /**
     * Récupère les avoirs ouverts (non clôturés)
     */
    public function findOpenCreditNotes(HmaService $hmaService): array
    {
        $closedStatuses = [
            SupplierCreditNote::STATUS_CLOSED,
            SupplierCreditNote::STATUS_RECOVERED,
            SupplierCreditNote::STATUS_LOST,
            SupplierCreditNote::STATUS_REFUSED
        ];

        return $this->createQueryBuilder('c')
            ->where('c.hma_service = :service')
            ->setParameter('service', $hmaService)
            ->andWhere('c.status NOT IN (:closedStatuses)')
            ->setParameter('closedStatuses', $closedStatuses)
            ->orderBy('c.priority', 'DESC')
            ->addOrderBy('c.created_at', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Récupère les avoirs pour l'export (sans pagination)
     *
     * @return SupplierCreditNote[]
     */
    public function findFilteredForExport(
        HmaService $hmaService,
        string $search = '',
        string $status = '',
        string $priority = '',
        string $issueType = '',
        int $supplierId = 0,
        string $dateFrom = '',
        string $dateTo = '',
        string $sort = 'created_at',
        string $direction = 'desc'
    ): array {
        $qb = $this->createQueryBuilder('c')
            ->leftJoin('c.supplier', 's')
            ->leftJoin('c.stockBatch', 'b')
            ->leftJoin('b.product', 'p')
            ->leftJoin('c.reportedBy', 'u')
            ->addSelect('s', 'b', 'p', 'u')
            ->where('c.hma_service = :service')
            ->setParameter('service', $hmaService);

        if ($search) {
            $qb->andWhere('c.credit_note_number LIKE :search OR s.name LIKE :search OR b.batch_number LIKE :search OR p.name LIKE :search')
            ->setParameter('search', '%' . $search . '%');
        }

        if ($status) {
            $qb->andWhere('c.status = :status')
            ->setParameter('status', $status);
        }

        if ($priority) {
            $qb->andWhere('c.priority = :priority')
            ->setParameter('priority', $priority);
        }

        if ($issueType) {
            $qb->andWhere('c.issue_type = :issueType')
            ->setParameter('issueType', $issueType);
        }

        if ($supplierId > 0) {
            $qb->andWhere('s.id = :supplierId')
            ->setParameter('supplierId', $supplierId);
        }

        if ($dateFrom) {
            $qb->andWhere('c.reported_at >= :dateFrom')
            ->setParameter('dateFrom', new \DateTimeImmutable($dateFrom));
        }

        if ($dateTo) {
            $qb->andWhere('c.reported_at <= :dateTo')
            ->setParameter('dateTo', new \DateTimeImmutable($dateTo . ' 23:59:59'));
        }

        // Tri
        $allowedSorts = ['created_at', 'credit_note_number', 'reported_at', 'declared_amount', 'status', 'priority'];
        if (in_array($sort, $allowedSorts)) {
            $qb->orderBy('c.' . $sort, $direction === 'asc' ? 'ASC' : 'DESC');
        } else {
            $qb->orderBy('c.created_at', 'DESC');
        }

        return $qb->getQuery()->getResult();
    }
}