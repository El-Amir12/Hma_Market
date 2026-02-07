<?php

namespace App\Repository;

use App\Entity\Purchase;
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

    // Méthode améliorée avec métadonnées de pagination
    public function paginate($query, int $page, int $limit): array
    {
        $paginator = new Paginator($query);
        
        // Calculer les infos de pagination
        $totalItems = count($paginator);
        $totalPages = ceil($totalItems / $limit);
        
        // Appliquer la pagination
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

    // Méthode pour paginer tous les achats
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

    // Méthode pour paginer par statut
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

    // Méthode pour paginer par fournisseur
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

    // Méthode pour paginer par date
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

    // Méthode pour rechercher avec pagination
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

    // Gardez les anciennes méthodes sans pagination pour d'autres usages
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

    // Statistiques
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

    public function findAllActive()
    {
        return $this->createQueryBuilder('p')
            ->where('p.status != :cancelled')
            ->setParameter('cancelled', 'cancelled')
            ->orderBy('p.created_at', 'DESC')
            ->getQuery()
            ->getResult();
    }
}