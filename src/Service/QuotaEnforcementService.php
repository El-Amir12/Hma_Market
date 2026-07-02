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
            'public_status' => ['set_public' => 0, 'set_private' => 0],
        ];

        foreach ($companies as $company) {
            $results = $this->enforceQuotas($company);
            
            $totalResults['product']['deactivated'] += $results['product']['deactivated'];
            $totalResults['product']['reactivated'] += $results['product']['reactivated'];
            $totalResults['category']['deactivated'] += $results['category']['deactivated'];
            $totalResults['category']['reactivated'] += $results['category']['reactivated'];
            $totalResults['supplier']['deactivated'] += $results['supplier']['deactivated'];
            $totalResults['supplier']['reactivated'] += $results['supplier']['reactivated'];
            $totalResults['recipe']['deactivated'] += $results['recipe']['deactivated'];
            $totalResults['recipe']['reactivated'] += $results['recipe']['reactivated'];
            $totalResults['category_recipe']['deactivated'] += $results['category_recipe']['deactivated'];
            $totalResults['category_recipe']['reactivated'] += $results['category_recipe']['reactivated'];
            
            if (isset($results['public_status'])) {
                $totalResults['public_status']['set_public'] += $results['public_status']['set_public'];
                $totalResults['public_status']['set_private'] += $results['public_status']['set_private'];
            }
        }
        
        $this->em->flush();
        $this->logger->info('Quotas appliqués pour toutes les entreprises.', $totalResults);
        return $totalResults;
    }

    /**
     * ✅ APPLIQUE LES QUOTAS POUR UNE ENTREPRISE
     * C'est la méthode clé qui met à jour is_public
     */
    public function enforceQuotas(HmaService $company): array
    {
        $limits = $company->getCurrentLimits();
        $results = [];

        // ✅ 1. Mise à jour du statut public de l'entreprise
        $results['public_status'] = $this->updateCompanyPublicStatus($company);

        // ✅ 2. Mise à jour des entités liées (quotas)
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

        // ✅ 3. Mise à jour du statut public des entités liées (is_public)
        // ✅ Récupérer les résultats pour les ajouter aux statistiques
        $publicResults = $this->updateEntitiesPublicStatus($company);
        
        // ✅ Ajouter les résultats de produits et catégories aux statistiques
        $results['public_status']['set_public'] += $publicResults['set_public'];
        $results['public_status']['set_private'] += $publicResults['set_private'];

        // ✅ 4. Flush pour sauvegarder toutes les modifications
        $this->em->flush();

        return $results;
    }

    /**
     * ✅ Met à jour le statut public de l'entreprise en fonction du plan
     */
    private function updateCompanyPublicStatus(HmaService $company): array
    {
        $plan = $company->getCurrentPlan();
        
        // ✅ is_public dépend du plan
        $shouldBePublic = in_array($plan, [HmaService::PLAN_BASIC, HmaService::PLAN_PREMIUM]);
        
        $setPublic = 0;
        $setPrivate = 0;
        
        if ($company->isPublic() !== $shouldBePublic) {
            $company->setIsPublic($shouldBePublic);
            if ($shouldBePublic) {
                $setPublic = 1;
                $this->logger->info("Entreprise {$company->getId()} passée en public (plan: $plan)");
            } else {
                $setPrivate = 1;
                $this->logger->info("Entreprise {$company->getId()} passée en privé (plan: $plan)");
            }
        }
        
        return ['set_public' => $setPublic, 'set_private' => $setPrivate];
    }

    /**
     * ✅ Met à jour le statut public des entités liées (is_public)
     * ✅ Retourne le nombre d'entités modifiées
     */
    private function updateEntitiesPublicStatus(HmaService $company): array
    {
        $plan = $company->getCurrentPlan();
        $shouldBePublic = in_array($plan, [HmaService::PLAN_BASIC, HmaService::PLAN_PREMIUM]);

        $setPublic = 0;
        $setPrivate = 0;

        // ✅ Mettre à jour is_public des produits
        $productResults = $this->updateEntityPublicStatus(
            Product::class,
            $company,
            $shouldBePublic,
            'Product'
        );
        $setPublic += $productResults['set_public'];
        $setPrivate += $productResults['set_private'];

        // ✅ Mettre à jour is_public des catégories
        $categoryResults = $this->updateEntityPublicStatus(
            Category::class,
            $company,
            $shouldBePublic,
            'Category'
        );
        $setPublic += $categoryResults['set_public'];
        $setPrivate += $categoryResults['set_private'];

        return ['set_public' => $setPublic, 'set_private' => $setPrivate];
    }

    /**
     * ✅ Met à jour le statut public d'une entité spécifique
     * ✅ Retourne le nombre d'entités modifiées
     */
    private function updateEntityPublicStatus(string $entityClass, HmaService $company, bool $shouldBePublic, string $entityName): array
    {
        $setPublic = 0;
        $setPrivate = 0;

        // ✅ Compter d'abord les entités avant modification
        $countQb = $this->em->createQueryBuilder()
            ->select('COUNT(e.id)')
            ->from($entityClass, 'e')
            ->where('e.hma_service = :company')
            ->andWhere('e.is_public != :newValue')
            ->setParameter('company', $company)
            ->setParameter('newValue', $shouldBePublic);
        
        $countToUpdate = $countQb->getQuery()->getSingleScalarResult();

        if ($countToUpdate > 0) {
            // ✅ Mettre à jour is_public
            $qb = $this->em->createQueryBuilder();
            $qb->update($entityClass, 'e')
               ->set('e.is_public', ':isPublic')
               ->where('e.hma_service = :company')
               ->setParameter('isPublic', $shouldBePublic)
               ->setParameter('company', $company);

            $updated = $qb->getQuery()->execute();
            
            if ($shouldBePublic) {
                $setPublic = $updated;
            } else {
                $setPrivate = $updated;
            }
            
            $status = $shouldBePublic ? 'public' : 'privé';
            $this->logger->info("$updated $entityName(s) passés en $status pour l'entreprise {$company->getId()}");
        }

        return ['set_public' => $setPublic, 'set_private' => $setPrivate];
    }

    /**
     * Pour une entité donnée, désactive les plus anciens en excès et réactive les plus récents
     */
    private function enforceForEntity(HmaService $company, string $entityClass, int $limit, string $entityName): array
    {
        $deactivated = 0;
        $reactivated = 0;

        if ($limit === PHP_INT_MAX) {
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
            ->orderBy('e.created_at', 'ASC');

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

        // 2. Réactiver les plus récents inactifs si la limite le permet
        if ($activeCount < $limit) {
            $inactiveQb = $this->em->createQueryBuilder()
                ->select('e')
                ->from($entityClass, 'e')
                ->where('e.hma_service = :company')
                ->andWhere('e.subscription_active = false')
                ->setParameter('company', $company)
                ->orderBy('e.created_at', 'DESC');

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