<?php
// src/Service/QuotaEnforcementService.php
namespace App\Service;

use App\Entity\HmaService;
use App\Entity\Product;
use App\Entity\Category;
use App\Entity\Supplier;
use App\Entity\Recipe;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;

class QuotaEnforcementService
{
    public function __construct(
        private EntityManagerInterface $em,
        private LoggerInterface $logger
    ) {}

    /**
     * Applique les quotas actuels à toutes les entités d'une entreprise.
     */
    public function enforceQuotas(HmaService $company): void
    {
        $limits = $company->getCurrentLimits();

        // Produits
        $this->enforceForEntity(
            $company,
            Product::class,
            $limits['max_products'],
            'product'
        );

        // Catégories
        $this->enforceForEntity(
            $company,
            Category::class,
            $limits['max_categories'],
            'category'
        );

        // Fournisseurs
        $this->enforceForEntity(
            $company,
            Supplier::class,
            $limits['max_suppliers'],
            'supplier'
        );

        $this->enforceForEntity(
            $company,
            Recipe::class,
            $limits['max_recipes'],
            'recipe'
        );

        // Vous pouvez ajouter d'autres entités (Recipe, etc.)

        $this->em->flush();
    }

    /**
     * Pour une entité donnée, désactive les enregistrements les plus anciens
     * jusqu'à respecter la limite.
     */
    private function enforceForEntity(HmaService $company, string $entityClass, int $limit, string $entityName): void
    {
        if ($limit === PHP_INT_MAX) {
            // Pas de limite : on réactive tous les éléments (optionnel)
            $this->activateAllForEntity($company, $entityClass);
            return;
        }

        // Récupérer tous les éléments actifs de l'entreprise, triés par date de création (les plus anciens d'abord)
        $qb = $this->em->createQueryBuilder()
            ->select('e')
            ->from($entityClass, 'e')
            ->where('e.hma_service = :company')
            ->andWhere('e.subscription_active = true')
            ->setParameter('company', $company)
            ->orderBy('e.created_at', 'ASC'); // ASC = plus anciens en premier

        $activeElements = $qb->getQuery()->getResult();

        $count = count($activeElements);
        if ($count <= $limit) {
            // Pas de dépassement, on ne fait rien
            return;
        }

        // Désactiver les plus anciens en trop
        $toDeactivate = array_slice($activeElements, $limit); // garde les $limit plus récents
        foreach ($toDeactivate as $element) {
            $element->setSubscriptionActive(false);
            $this->logger->info("Désactivation de $entityName ID {$element->getId()} pour l'entreprise {$company->getId()}");
        }
    }

    /**
     * Réactive tous les éléments d'une entité pour une entreprise.
     */
    private function activateAllForEntity(HmaService $company, string $entityClass): void
    {
        $qb = $this->em->createQueryBuilder()
            ->update($entityClass, 'e')
            ->set('e.subscription_active', true)
            ->where('e.hma_service = :company')
            ->setParameter('company', $company);

        $updated = $qb->getQuery()->execute();
        if ($updated > 0) {
            $this->logger->info("Réactivation de $updated éléments pour l'entreprise {$company->getId()}");
        }
    }
}