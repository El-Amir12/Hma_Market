<?php
// src/Service/Stock/StockInventoryService.php

namespace App\Service\Stock;

use App\Entity\HmaService;
use App\Entity\Inventory;
use App\Entity\InventoryItem;
use App\Entity\Location;
use App\Entity\Product;
use App\Entity\StockBatch;
use App\Entity\User;
use App\Repository\InventoryRepository;
use App\Repository\ProductRepository;
use App\Repository\StockBatchRepository;
use App\Service\NotificationService;
use App\Service\StockMovementService;
use App\Service\StockSyncService;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;

class StockInventoryService
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private StockMovementService $stockMovementService,
        private StockSyncService $stockSyncService,
        private NotificationService $notificationService,
        private LoggerInterface $logger,
        private StockBatchRepository $stockBatchRepository,
        private ProductRepository $productRepository,
        private InventoryRepository $inventoryRepository
    ) {
    }

    /**
     * Génère un numéro d'inventaire unique
     */
    private function generateInventoryNumber(HmaService $hmaService): string
    {
        $prefix = 'INV';
        $companyCode = strtoupper(substr(preg_replace('/[^A-Za-z0-9]/', '', $hmaService->getCompanyName()), 0, 3));
        $date = (new \DateTime())->format('Ymd');

        $lastInventory = $this->inventoryRepository
            ->createQueryBuilder('i')
            ->where('i.inventory_number LIKE :pattern')
            ->setParameter('pattern', "{$prefix}-{$companyCode}-{$date}-%")
            ->orderBy('i.id', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();

        if ($lastInventory) {
            $lastNumber = (int)substr($lastInventory->getInventoryNumber(), -4);
            $newNumber = str_pad($lastNumber + 1, 4, '0', STR_PAD_LEFT);
        } else {
            $newNumber = '0001';
        }

        return "{$prefix}-{$companyCode}-{$date}-{$newNumber}";
    }

    /**
     * Calcule la quantité théorique attendue
     */
    private function calculateExpectedQuantity(Product $product, ?Location $location = null): int
    {
        $qb = $this->stockBatchRepository->createQueryBuilder('sb')
            ->select('SUM(sb.current_quantity)')
            ->where('sb.product = :product')
            ->andWhere('sb.is_active = true')
            ->setParameter('product', $product);

        if ($location) {
            $qb->andWhere('sb.locationEntity = :location')
               ->setParameter('location', $location);
        }

        return (int)$qb->getQuery()->getSingleScalarResult();
    }

    /**
     * Crée un nouvel inventaire
     */
    public function createInventory(
        HmaService $hmaService,
        User $createdBy,
        \DateTimeInterface $inventoryDate,
        ?Location $location = null,
        ?string $notes = null
    ): Inventory {
        $hmaServiceRef = $this->entityManager->getReference(
            HmaService::class,
            $hmaService->getId()
        );

        $userRef = $this->entityManager->getReference(
            User::class,
            $createdBy->getId()
        );

        $locationRef = null;
        if ($location) {
            $locationRef = $this->entityManager->getReference(
                Location::class,
                $location->getId()
            );
        }

        $inventoryNumber = $this->generateInventoryNumber($hmaServiceRef);

        $inventory = new Inventory();
        $inventory->setInventoryNumber($inventoryNumber);
        $inventory->setInventoryDate($inventoryDate);
        $inventory->setCreatedBy($userRef);
        $inventory->setHmaService($hmaServiceRef);
        $inventory->setNotes($notes);
        $inventory->setLocation($locationRef);
        $inventory->setStatus(Inventory::STATUS_DRAFT);

        $this->entityManager->persist($inventory);
        $this->entityManager->flush();

        $this->logger->info('Inventaire créé', [
            'inventory_id' => $inventory->getId(),
            'inventory_number' => $inventoryNumber,
            'created_by' => $createdBy->getEmail()
        ]);

        return $inventory;
    }

    /**
     * Ajoute un produit à l'inventaire
     */
    public function addProductToInventory(
        Inventory $inventory,
        Product $product,
        ?Location $location = null
    ): InventoryItem {
        // Vérifier si le produit n'est pas déjà dans l'inventaire
        foreach ($inventory->getItems() as $existingItem) {
            if ($existingItem->getProduct()->getId() === $product->getId()) {
                throw new \Exception('Ce produit est déjà dans l\'inventaire.');
            }
        }

        $productRef = $this->entityManager->getReference(
            Product::class,
            $product->getId()
        );

        $inventoryRef = $this->entityManager->getReference(
            Inventory::class,
            $inventory->getId()
        );

        $locationRef = null;
        $targetLocation = $location ?? $inventory->getLocation();
        if ($targetLocation) {
            $locationRef = $this->entityManager->getReference(
                Location::class,
                $targetLocation->getId()
            );
        }

        $expectedQuantity = $this->calculateExpectedQuantity($productRef, $locationRef);

        $item = new InventoryItem();
        $item->setInventory($inventoryRef);
        $item->setProduct($productRef);
        $item->setLocation($locationRef);
        $item->setExpectedQuantity($expectedQuantity);
        $item->setActualQuantity(0);

        $this->entityManager->persist($item);
        $this->entityManager->flush();

        return $item;
    }

    /**
     * Ajoute tous les produits actifs à l'inventaire
     */
    public function addAllProductsToInventory(Inventory $inventory, ?Location $location = null): int
    {
        $products = $this->productRepository->findBy([
            'hma_service' => $inventory->getHmaService(),
            'is_active' => true
        ]);

        $count = 0;
        foreach ($products as $product) {
            try {
                $this->addProductToInventory($inventory, $product, $location);
                $count++;
            } catch (\Exception $e) {
                $this->logger->warning('Produit non ajouté à l\'inventaire', [
                    'product_id' => $product->getId(),
                    'error' => $e->getMessage()
                ]);
            }
        }

        if ($count > 0 && $inventory->getStatus() === Inventory::STATUS_DRAFT) {
            $inventory->setStatus(Inventory::STATUS_IN_PROGRESS);
            $this->entityManager->flush();
        }

        return $count;
    }

    /**
     * Saisie manuelle de la quantité comptée
     */
    public function updateInventoryCount(
        InventoryItem $item,
        int $actualQuantity,
        User $counter,
        ?string $notes = null
    ): InventoryItem {
        if ($item->getInventory()->getStatus() === Inventory::STATUS_COMPLETED) {
            throw new \Exception('Cet inventaire est déjà terminé.');
        }

        $counterRef = $this->entityManager->getReference(
            User::class,
            $counter->getId()
        );

        $item->setActualQuantity($actualQuantity);
        $item->setCountedBy($counterRef);
        $item->setCountedAt(new \DateTime());

        if ($notes) {
            $item->setNotes($notes);
        }

        $this->entityManager->flush();

        $this->logger->info('Saisie inventaire', [
            'inventory_id' => $item->getInventory()->getId(),
            'product_id' => $item->getProduct()->getId(),
            'expected' => $item->getExpectedQuantity(),
            'actual' => $actualQuantity,
            'difference' => $item->getDifference(),
            'counter' => $counter->getEmail()
        ]);

        return $item;
    }

    /**
     * Valide l'inventaire et applique les ajustements
     *
     * Flow :
     *   - Pour chaque écart → applyInventoryAdjustment()
     *     → createAdjustment() → Flush #1 + Flush #2 (sync product)
     *   - setStatus(COMPLETED) → Flush final
     */
    public function validateInventory(Inventory $inventory, User $validator): array
    {
        if ($inventory->getStatus() === Inventory::STATUS_COMPLETED) {
            throw new \Exception('Cet inventaire est déjà validé.');
        }

        $validatorRef = $this->entityManager->getReference(
            User::class,
            $validator->getId()
        );

        $differences = [];
        $adjustments = [];

        foreach ($inventory->getItems() as $item) {
            if ($item->getDifference() !== 0) {
                $differences[] = [
                    'product' => $item->getProduct()->getName(),
                    'expected' => $item->getExpectedQuantity(),
                    'actual' => $item->getActualQuantity(),
                    'difference' => $item->getDifference()
                ];

                $adjustment = $this->applyInventoryAdjustment($item, $validatorRef);
                if ($adjustment) {
                    $adjustments[] = $adjustment;
                }
            }
        }

        $inventory->setStatus(Inventory::STATUS_COMPLETED);
        $inventory->setValidatedBy($validatorRef);
        $inventory->setValidatedAt(new \DateTime());

        $this->entityManager->flush();

        $this->sendInventoryValidationNotification($inventory, $differences, $adjustments, $validator);

        $this->logger->info('Inventaire validé', [
            'inventory_id' => $inventory->getId(),
            'inventory_number' => $inventory->getInventoryNumber(),
            'differences_count' => count($differences),
            'adjustments_count' => count($adjustments),
            'validated_by' => $validator->getEmail()
        ]);

        return [
            'inventory' => $inventory,
            'differences' => $differences,
            'adjustments' => $adjustments
        ];
    }

    /**
     * Applique l'ajustement pour un produit
     */
    private function applyInventoryAdjustment(InventoryItem $item, User $validator): ?array
    {
        $difference = $item->getDifference();

        if ($difference === 0) {
            return null;
        }

        $product = $item->getProduct();
        $hmaService = $item->getInventory()->getHmaService();
        $reason = sprintf(
            "Ajustement inventaire #%s - %s",
            $item->getInventory()->getInventoryNumber(),
            $item->getNotes() ?? "Écart constaté: " . ($difference > 0 ? "+" : "") . $difference . " unités"
        );

        if ($difference > 0) {
            $type = 'in';
            $movementType = 'adjustment_in';
            $explanation = "Surplus constaté: +{$difference} unités";
        } else {
            $type = 'out';
            $movementType = 'adjustment_out';
            $explanation = "Manque constaté: {$difference} unités";
        }

        $absoluteDifference = abs($difference);

        // Récupérer ou créer un lot pour l'ajustement
        $stockBatch = $this->getOrCreateBatchForAdjustment($product, $hmaService, $item->getLocation(), $validator);

        // createAdjustment() gère tout : modif lot, mouvement, Flush #1, sync, Flush #2
        $movement = $this->stockMovementService->createAdjustment(
            $stockBatch,
            $absoluteDifference,
            $movementType,
            $reason,
            $validator,
            $item->getInventory()->getId()
        );

        return [
            'product' => $product->getName(),
            'type' => $type,
            'quantity' => $absoluteDifference,
            'explanation' => $explanation,
            'movement' => $movement,
            'stock_batch' => $stockBatch
        ];
    }

    /**
     * Récupère ou crée un lot pour l'ajustement
     */
    private function getOrCreateBatchForAdjustment(
        Product $product,
        HmaService $hmaService,
        ?Location $location,
        User $user
    ): StockBatch {
        $productRef = $this->entityManager->getReference(
            Product::class,
            $product->getId()
        );

        $hmaServiceRef = $this->entityManager->getReference(
            HmaService::class,
            $hmaService->getId()
        );

        // Chercher un lot existant pour ce produit
        $existingBatch = $this->stockBatchRepository->findOneBy([
            'product' => $productRef,
            'hma_service' => $hmaServiceRef,
            'is_active' => true
        ], ['created_at' => 'DESC']);

        if ($existingBatch) {
            return $existingBatch;
        }

        // Créer un nouveau lot
        $batchNumber = 'ADJ-' . date('Ymd') . '-' . uniqid();
        $unitPrice = $product->getPurchasePrice() ?: '0';

        $locationRef = null;
        if ($location) {
            $locationRef = $this->entityManager->getReference(
                Location::class,
                $location->getId()
            );
        }

        $newBatch = new StockBatch();
        $newBatch->setBatchNumber($batchNumber);
        $newBatch->setProduct($productRef);
        $newBatch->setInitialQuantity(0);
        $newBatch->setCurrentQuantity(0);
        $newBatch->setUnitPrice($unitPrice);
        $newBatch->setIsActive(true);
        $newBatch->setHmaService($hmaServiceRef);
        $newBatch->setLocationEntity($locationRef);
        $newBatch->setCreatedAt(new \DateTime());

        $this->entityManager->persist($newBatch);
        $this->entityManager->flush();

        return $newBatch;
    }

    /**
     * Envoie les notifications de validation
     */
    private function sendInventoryValidationNotification(
        Inventory $inventory,
        array $differences,
        array $adjustments,
        User $validator
    ): void {
        $subject = sprintf('[Inventaire] %s - Terminé', $inventory->getInventoryNumber());

        $differencesText = "";
        foreach ($differences as $diff) {
            $differencesText .= sprintf(
                "\n  • %s: attendu %d, compté %d (%s%d)",
                $diff['product'],
                $diff['expected'],
                $diff['actual'],
                $diff['difference'] > 0 ? '+' : '',
                $diff['difference']
            );
        }

        $adjustmentsText = "";
        foreach ($adjustments as $adj) {
            $adjustmentsText .= sprintf(
                "\n  • %s: %s (%d unités)",
                $adj['product'],
                $adj['explanation'],
                $adj['quantity']
            );
        }

        $message = sprintf(
            "📋 **Inventaire terminé**\n\n" .
            "**N° inventaire :** %s\n" .
            "**Date :** %s\n" .
            "**Validé par :** %s\n\n" .
            "**Écarts constatés :**%s\n\n" .
            "**Ajustements appliqués :**%s\n\n" .
            "Total : %d produit(s) avec écart, %d ajustement(s) effectué(s)",
            $inventory->getInventoryNumber(),
            $inventory->getInventoryDate()->format('d/m/Y'),
            $validator->getFullName() ?: $validator->getEmail(),
            $differencesText ?: "\n  ✅ Aucun écart",
            $adjustmentsText ?: "\n  ✅ Aucun ajustement",
            count($differences),
            count($adjustments)
        );

        $this->notificationService->notifyAdminsAndManagers($subject, $message);
    }

    /**
     * Récupère les statistiques des inventaires
     */
    public function getStatistics(HmaService $hmaService): array
    {
        return $this->inventoryRepository->getStatistics($hmaService);
    }

    /**
     * Annule un inventaire
     */
    public function cancelInventory(Inventory $inventory, User $user, string $reason): Inventory
    {
        if ($inventory->getStatus() === Inventory::STATUS_COMPLETED) {
            throw new \Exception('Un inventaire terminé ne peut pas être annulé.');
        }

        $inventory->setStatus(Inventory::STATUS_CANCELLED);
        $inventory->setNotes(($inventory->getNotes() ? $inventory->getNotes() . "\n" : "") . "Annulé par {$user->getEmail()}: {$reason}");

        $this->entityManager->flush();

        return $inventory;
    }
}