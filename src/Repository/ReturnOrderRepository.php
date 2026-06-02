<?php
// src/Repository/ReturnOrderRepository.php

namespace App\Repository;

use App\Entity\ReturnOrder;
use App\Entity\HmaService;
use App\Entity\Order;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ReturnOrder>
 */
class ReturnOrderRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReturnOrder::class);
    }

    /**
     * Génère un numéro de retour unique (avec vérification et réessai)
     */
    public function generateReturnNumber(HmaService $hmaService): string
    {
        $date = new \DateTime();
        $year = $date->format('Y');
        $month = $date->format('m');
        $day = $date->format('d');
        
        $maxAttempts = 10;
        $attempt = 0;
        
        while ($attempt < $maxAttempts) {
            // Compter les retours du jour
            $count = $this->createQueryBuilder('r')
                ->select('COUNT(r.id)')
                ->where('r.hma_service = :hmaService')
                ->andWhere('r.created_at >= :today')
                ->setParameter('hmaService', $hmaService)
                ->setParameter('today', new \DateTime('today'))
                ->getQuery()
                ->getSingleScalarResult();
            
            $sequence = str_pad($count + $attempt + 1, 4, '0', STR_PAD_LEFT);
            $returnNumber = sprintf('RETOUR-%s%s%s-%s', $year, $month, $day, $sequence);
            
            // Vérifier si le numéro existe déjà
            $existing = $this->findOneBy(['return_number' => $returnNumber]);
            
            if (!$existing) {
                return $returnNumber;
            }
            
            $attempt++;
        }
        
        // Dernier recours : ajouter un microtime
        $microtime = substr(str_replace('.', '', microtime(true)), -6);
        return sprintf('RETOUR-%s%s%s-%s-%s', $year, $month, $day, $sequence, $microtime);
    }
    
    /**
     * Récupère les retours filtrés
     */
    public function findFiltered(
        HmaService $hmaService,
        ?string $status = null,
        ?string $search = null,
        ?\DateTime $dateFrom = null,
        ?\DateTime $dateTo = null,
        int $page = 1,
        int $limit = 15
    ): array {
        $qb = $this->createQueryBuilder('r')
            ->where('r.hma_service = :hmaService')
            ->setParameter('hmaService', $hmaService)
            ->orderBy('r.created_at', 'DESC');

        if ($status && $status !== 'all') {
            $qb->andWhere('r.status = :status')
               ->setParameter('status', $status);
        }

        if ($search) {
            $qb->andWhere('r.order_number LIKE :search OR r.customer_name LIKE :search OR r.customer_phone LIKE :search')
               ->setParameter('search', '%' . $search . '%');
        }

        if ($dateFrom) {
            $qb->andWhere('r.created_at >= :dateFrom')
               ->setParameter('dateFrom', $dateFrom);
        }

        if ($dateTo) {
            $qb->andWhere('r.created_at <= :dateTo')
               ->setParameter('dateTo', $dateTo);
        }

        $qb->setFirstResult(($page - 1) * $limit)
           ->setMaxResults($limit);

        return $qb->getQuery()->getResult();
    }

    /**
     * Compte le nombre de retours filtrés
     */
    public function countFiltered(
        HmaService $hmaService,
        ?string $status = null,
        ?string $search = null,
        ?\DateTime $dateFrom = null,
        ?\DateTime $dateTo = null
    ): int {
        $qb = $this->createQueryBuilder('r')
            ->select('COUNT(r.id)')
            ->where('r.hma_service = :hmaService')
            ->setParameter('hmaService', $hmaService);

        if ($status && $status !== 'all') {
            $qb->andWhere('r.status = :status')
               ->setParameter('status', $status);
        }

        if ($search) {
            $qb->andWhere('r.order_number LIKE :search OR r.customer_name LIKE :search OR r.customer_phone LIKE :search')
               ->setParameter('search', '%' . $search . '%');
        }

        if ($dateFrom) {
            $qb->andWhere('r.created_at >= :dateFrom')
               ->setParameter('dateFrom', $dateFrom);
        }

        if ($dateTo) {
            $qb->andWhere('r.created_at <= :dateTo')
               ->setParameter('dateTo', $dateTo);
        }

        return (int) $qb->getQuery()->getSingleScalarResult();
    }

    /**
     * Récupère les quantités déjà retournées pour chaque article d'une commande
     * 🔥 Version avec concaténation sécurisée (l'ID est casté en int)
     */
    public function getReturnedQuantitiesByOrder(Order $order): array
    {
        $conn = $this->getEntityManager()->getConnection();
        $orderId = (int) $order->getId();
        
        $sql = "
            SELECT 
                ri.original_order_item_id as item_id,
                SUM(ri.quantity_returned) as total
            FROM return_item ri
            INNER JOIN return_order ro ON ri.return_order_id = ro.id
            WHERE ro.original_order_id = {$orderId}
            AND ro.status IN ('pending', 'approved', 'completed')
            GROUP BY ri.original_order_item_id
        ";
        
        $stmt = $conn->prepare($sql);
        $result = $stmt->executeQuery();
        $rows = $result->fetchAllAssociative();
        
        $returnedQuantities = [];
        foreach ($rows as $row) {
            $returnedQuantities[$row['item_id']] = (int) $row['total'];
        }
        
        return $returnedQuantities;
    }

    /**
     * Récupère le total des quantités retournées pour chaque article d'une commande
     * 🔥 Version avec concaténation sécurisée (l'ID est casté en int)
     */
    public function getTotalReturnedQuantitiesByOrder(Order $order): array
    {
        $conn = $this->getEntityManager()->getConnection();
        $orderId = (int) $order->getId();
        
        $sql = "
            SELECT 
                ri.original_order_item_id as item_id,
                SUM(ri.quantity_returned) as total_returned
            FROM return_item ri
            INNER JOIN return_order ro ON ri.return_order_id = ro.id
            WHERE ro.original_order_id = {$orderId}
            AND ro.status IN ('pending', 'approved', 'completed')
            GROUP BY ri.original_order_item_id
        ";
        
        $stmt = $conn->prepare($sql);
        $result = $stmt->executeQuery();
        $rows = $result->fetchAllAssociative();
        
        $totalReturnedQuantities = [];
        foreach ($rows as $row) {
            $totalReturnedQuantities[$row['item_id']] = (int) $row['total_returned'];
        }
        
        return $totalReturnedQuantities;
    }

    /**
     * Récupère les statistiques des retours pour une période donnée
     */
    public function getReturnStats(HmaService $hmaService, ?\DateTime $dateFrom = null, ?\DateTime $dateTo = null): array
    {
        $qb = $this->createQueryBuilder('r')
            ->select('
                COUNT(r.id) as total_returns,
                SUM(CASE WHEN r.status = \'pending\' THEN 1 ELSE 0 END) as pending,
                SUM(CASE WHEN r.status = \'approved\' THEN 1 ELSE 0 END) as approved,
                SUM(CASE WHEN r.status = \'completed\' THEN 1 ELSE 0 END) as completed,
                SUM(CASE WHEN r.status = \'rejected\' THEN 1 ELSE 0 END) as rejected,
                SUM(r.total_refund_amount) as total_refund_amount
            ')
            ->where('r.hma_service = :hmaService')
            ->setParameter('hmaService', $hmaService);

        if ($dateFrom) {
            $qb->andWhere('r.created_at >= :dateFrom')
            ->setParameter('dateFrom', $dateFrom);
        }

        if ($dateTo) {
            $qb->andWhere('r.created_at <= :dateTo')
            ->setParameter('dateTo', $dateTo);
        }

        $result = $qb->getQuery()->getOneOrNullResult();

        return [
            'total_returns' => (int) ($result['total_returns'] ?? 0),
            'pending' => (int) ($result['pending'] ?? 0),
            'approved' => (int) ($result['approved'] ?? 0),
            'completed' => (int) ($result['completed'] ?? 0),
            'rejected' => (int) ($result['rejected'] ?? 0),
            'total_refund_amount' => (float) ($result['total_refund_amount'] ?? 0),
        ];
    }

    public function findByCompanyAndPeriod(HmaService $company, \DateTime $start, \DateTime $end): array
    {
        return $this->createQueryBuilder('r')
            ->where('r.hma_service = :company')
            ->andWhere('r.return_date BETWEEN :start AND :end')
            ->setParameter('company', $company)
            ->setParameter('start', $start)
            ->setParameter('end', $end)
            ->orderBy('r.return_date', 'DESC')
            ->getQuery()
            ->getResult();
    }
}