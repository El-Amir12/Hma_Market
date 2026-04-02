<?php
// src/Service/ProductSearchService.php

namespace App\Service;

use App\Entity\HmaService;
use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;

class ProductSearchService
{
    public function __construct(
        private EntityManagerInterface $entityManager
    ) {
    }

    /**
     * Recherche par code-barres
     */
    public function findByBarcode(string $barcode, HmaService $hmaService): ?Product
    {
        return $this->entityManager->getRepository(Product::class)
            ->findOneBy([
                'barcode' => $barcode,
                'hma_service' => $hmaService,
                'is_active' => true,
                'subscription_active' => true,  
            ]);
    }

    /**
     * Recherche par nom
     */
    public function searchByName(string $query, HmaService $hmaService, int $limit = 20): array
    {
        return $this->entityManager->getRepository(Product::class)
            ->createQueryBuilder('p')
            ->where('p.hma_service = :hmaService')
            ->andWhere('p.is_active = true')
            ->andWhere('p.subscription_active = true')
            ->andWhere('p.name LIKE :query')
            ->setParameter('hmaService', $hmaService)
            ->setParameter('query', '%' . $query . '%')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Recherche combinée (nom ou code-barres)
     */
    public function search(string $query, HmaService $hmaService, int $limit = 20): array
    {
        return $this->entityManager->getRepository(Product::class)
            ->createQueryBuilder('p')
            ->where('p.hma_service = :hmaService')
            ->andWhere('p.is_active = true')
            ->andWhere('p.subscription_active = true')
            ->andWhere('p.name LIKE :query OR p.barcode LIKE :query')
            ->setParameter('hmaService', $hmaService)
            ->setParameter('query', '%' . $query . '%')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }
}