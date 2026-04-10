<?php
// src/Repository/LocationRepository.php

namespace App\Repository;

use App\Entity\HmaService;
use App\Entity\Location;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Location>
 */
class LocationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Location::class);
    }

    /**
     * Trouve tous les emplacements actifs d'un service
     */
    public function findActiveByHmaService(HmaService $hmaService): array
    {
        return $this->createQueryBuilder('l')
            ->where('l.hma_service = :hmaService')
            ->andWhere('l.is_active = true')
            ->setParameter('hmaService', $hmaService)
            ->orderBy('l.code', 'ASC')
            ->addOrderBy('l.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Recherche des emplacements par terme (code ou nom)
     */
    public function searchByTerm(HmaService $hmaService, string $term): array
    {
        return $this->createQueryBuilder('l')
            ->where('l.hma_service = :hmaService')
            ->andWhere('l.is_active = true')
            ->andWhere('l.name LIKE :term OR l.code LIKE :term')
            ->setParameter('hmaService', $hmaService)
            ->setParameter('term', '%' . $term . '%')
            ->orderBy('l.code', 'ASC')
            ->setMaxResults(20)
            ->getQuery()
            ->getResult();
    }

    /**
     * Récupère les emplacements utilisés par des lots
     */
    public function findUsedLocations(HmaService $hmaService): array
    {
        return $this->createQueryBuilder('l')
            ->innerJoin('l.stockBatches', 'sb')
            ->where('l.hma_service = :hmaService')
            ->andWhere('l.is_active = true')
            ->setParameter('hmaService', $hmaService)
            ->groupBy('l.id')
            ->orderBy('l.code', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Récupère les statistiques des emplacements
     */
    public function getLocationStats(HmaService $hmaService): array
    {
        $results = $this->createQueryBuilder('l')
            ->select('l.id, l.name, l.code, COUNT(sb.id) as batch_count, SUM(sb.current_quantity) as total_quantity')
            ->leftJoin('l.stockBatches', 'sb')
            ->where('l.hma_service = :hmaService')
            ->setParameter('hmaService', $hmaService)
            ->groupBy('l.id')
            ->orderBy('l.code', 'ASC')
            ->getQuery()
            ->getResult();

        $stats = [];
        foreach ($results as $result) {
            $stats[] = [
                'id' => $result['id'],
                'name' => $result['name'],
                'code' => $result['code'],
                'batch_count' => (int) $result['batch_count'],
                'total_quantity' => (int) $result['total_quantity'],
            ];
        }

        return $stats;
    }

    /**
     * Vérifie si un code existe déjà pour ce service
     */
    public function isCodeExists(HmaService $hmaService, string $code, ?int $excludeId = null): bool
    {
        $qb = $this->createQueryBuilder('l')
            ->select('COUNT(l.id)')
            ->where('l.hma_service = :hmaService')
            ->andWhere('l.code = :code')
            ->setParameter('hmaService', $hmaService)
            ->setParameter('code', $code);

        if ($excludeId) {
            $qb->andWhere('l.id != :excludeId')
               ->setParameter('excludeId', $excludeId);
        }

        return (int) $qb->getQuery()->getSingleScalarResult() > 0;
    }

    /**
     * Vérifie si un nom existe déjà pour ce service
     */
    public function isNameExists(HmaService $hmaService, string $name, ?int $excludeId = null): bool
    {
        $qb = $this->createQueryBuilder('l')
            ->select('COUNT(l.id)')
            ->where('l.hma_service = :hmaService')
            ->andWhere('l.name = :name')
            ->setParameter('hmaService', $hmaService)
            ->setParameter('name', $name);

        if ($excludeId) {
            $qb->andWhere('l.id != :excludeId')
               ->setParameter('excludeId', $excludeId);
        }

        return (int) $qb->getQuery()->getSingleScalarResult() > 0;
    }

    /**
     * Trouve les emplacements par code (recherche exacte)
     */
    public function findByCode(HmaService $hmaService, string $code): ?Location
    {
        return $this->createQueryBuilder('l')
            ->where('l.hma_service = :hmaService')
            ->andWhere('l.code = :code')
            ->setParameter('hmaService', $hmaService)
            ->setParameter('code', $code)
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * Compte le nombre d'emplacements actifs par service
     */
    public function countActiveByHmaService(HmaService $hmaService): int
    {
        return (int) $this->createQueryBuilder('l')
            ->select('COUNT(l.id)')
            ->where('l.hma_service = :hmaService')
            ->andWhere('l.is_active = true')
            ->setParameter('hmaService', $hmaService)
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * Récupère les emplacements avec le plus de lots
     */
    public function findTopLocations(HmaService $hmaService, int $limit = 5): array
    {
        return $this->createQueryBuilder('l')
            ->select('l, COUNT(sb.id) as HIDDEN batch_count')
            ->leftJoin('l.stockBatches', 'sb')
            ->where('l.hma_service = :hmaService')
            ->setParameter('hmaService', $hmaService)
            ->groupBy('l.id')
            ->orderBy('batch_count', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Récupère les emplacements inactifs (non utilisés récemment)
     */
    public function findInactiveLocations(HmaService $hmaService, int $days = 90): array
    {
        $date = new \DateTimeImmutable('-' . $days . ' days');

        return $this->createQueryBuilder('l')
            ->leftJoin('l.stockBatches', 'sb')
            ->where('l.hma_service = :hmaService')
            ->andWhere('sb.created_at IS NULL OR sb.updated_at < :date')
            ->setParameter('hmaService', $hmaService)
            ->setParameter('date', $date)
            ->getQuery()
            ->getResult();
    }
}