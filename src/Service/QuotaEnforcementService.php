<?php
// src/Service/QuotaEnforcementService.php

namespace App\Service;

use App\Entity\HmaService;
use App\Entity\Product;
use App\Entity\Category;
use App\Entity\Supplier;
use App\Entity\Recipe;
use App\Entity\CategoryRecipe;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;

class QuotaEnforcementService
{
    public function __construct(
        private EntityManagerInterface $em,
        private LoggerInterface $logger
    ) {}

    /**
     * Applique les quotas actuels à toutes les entreprises.
     * Retourne un tableau associatif avec les totaux de désactivations/réactivations.
     */
    public function enforceAllQuotas(): array
    {
        $companies = $this->em->getRepository(HmaService::class)->findAll();
        $totalResults = [
            'product' => ['deactivated' => 0, 'reactivated' => 0],
            'category' => ['deactivated' => 0, 'reactivated' => 0],
            'supplier' => ['deactivated' => 0, 'reactivated' => 0],
            'recipe' => ['deactivated' => 0, 'reactivated' => 0],
            'category_recipe' => ['deactivated' => 0, 'reactivated' => 0],
        ];

        foreach ($companies as $company) {
            $results = $this->enforceQuotas($company);
            foreach ($results as $type => $counts) {
                $totalResults[$type]['deactivated'] += $counts['deactivated'];
                $totalResults[$type]['reactivated'] += $counts['reactivated'];
            }
        }
        $this->em->flush();
        $this->logger->info('Quotas appliqués pour toutes les entreprises.', $totalResults);
        return $totalResults;
    }

    /**
     * Applique les quotas actuels à une entreprise.
     * Retourne un tableau associatif par type d'entité avec 'deactivated' et 'reactivated'.
     */
    public function enforceQuotas(HmaService $company): array
    {
        $limits = $company->getCurrentLimits();
        $results = [];

        $results['product'] = $this->enforceForEntity(
            $company,
            Product::class,
            $limits['max_products'],
            'product'
        );
        $results['category'] = $this->enforceForEntity(
            $company,
            Category::class,
            $limits['max_categories'],
            'category'
        );
        $results['supplier'] = $this->enforceForEntity(
            $company,
            Supplier::class,
            $limits['max_suppliers'],
            'supplier'
        );
        $results['recipe'] = $this->enforceForEntity(
            $company,
            Recipe::class,
            $limits['max_recipes'],
            'recipe'
        );
        $results['category_recipe'] = $this->enforceForEntity(
            $company,
            CategoryRecipe::class,
            $limits['max_categories_recipes'],
            'category_recipe'
        );

        $this->em->flush();
        return $results;
    }

    /**
     * Pour une entité donnée, désactive les plus anciens en excès et réactive les plus récents
     * si la limite augmente.
     * @return array ['deactivated' => int, 'reactivated' => int]
     */
    private function enforceForEntity(HmaService $company, string $entityClass, int $limit, string $entityName): array
    {
        $deactivated = 0;
        $reactivated = 0;

        if ($limit === PHP_INT_MAX) {
            // Pas de limite : réactiver tout
            $reactivated = $this->activateAllForEntity($company, $entityClass);
            return ['deactivated' => 0, 'reactivated' => $reactivated];
        }

        // 1. Désactiver les plus anciens si trop d'actifs
        $activeQb = $this->em->createQueryBuilder()
            ->select('e')
            ->from($entityClass, 'e')
            ->where('e.hma_service = :company')
            ->andWhere('e.subscription_active = true')
            ->setParameter('company', $company)
            ->orderBy('e.created_at', 'ASC'); // plus ancien d'abord

        $activeElements = $activeQb->getQuery()->getResult();
        $activeCount = count($activeElements);

        if ($activeCount > $limit) {
            $toDeactivate = array_slice($activeElements, $limit);
            foreach ($toDeactivate as $element) {
                $element->setSubscriptionActive(false);
                $this->logger->info("Désactivation de $entityName ID {$element->getId()} pour l'entreprise {$company->getId()} (limite: $limit)");
            }
            $deactivated = count($toDeactivate);
            $activeCount -= $deactivated;
        }

        // 2. Si la limite est plus grande que le nombre actuel, réactiver les plus récents inactifs
        if ($activeCount < $limit) {
            $inactiveQb = $this->em->createQueryBuilder()
                ->select('e')
                ->from($entityClass, 'e')
                ->where('e.hma_service = :company')
                ->andWhere('e.subscription_active = false')
                ->setParameter('company', $company)
                ->orderBy('e.created_at', 'DESC'); // plus récent d'abord

            $inactiveElements = $inactiveQb->getQuery()->getResult();
            $needed = $limit - $activeCount;
            $toReactivate = array_slice($inactiveElements, 0, $needed);
            foreach ($toReactivate as $element) {
                $element->setSubscriptionActive(true);
                $this->logger->info("Réactivation de $entityName ID {$element->getId()} pour l'entreprise {$company->getId()} (nouvelle limite: $limit)");
                $reactivated++;
            }
        }

        return ['deactivated' => $deactivated, 'reactivated' => $reactivated];
    }

    /**
     * Réactive tous les éléments d'une entité pour une entreprise.
     * @return int Nombre d'entités réactivées
     */
    private function activateAllForEntity(HmaService $company, string $entityClass): int
    {
        $qb = $this->em->createQueryBuilder()
            ->update($entityClass, 'e')
            ->set('e.subscription_active', true)
            ->where('e.hma_service = :company')
            ->setParameter('company', $company);

        $updated = $qb->getQuery()->execute();
        if ($updated > 0) {
            $this->logger->info("Réactivation de $updated éléments de type $entityClass pour l'entreprise {$company->getId()}");
        }
        return $updated;
    }
}