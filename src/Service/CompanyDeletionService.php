<?php
// src/Service/CompanyDeletionService.php

namespace App\Service;

use App\Entity\HmaService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Filesystem\Filesystem;
use Psr\Log\LoggerInterface;

class CompanyDeletionService
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private Filesystem $filesystem,
        private LoggerInterface $logger,
        private string $logosDirectory,
        private string $photosDirectory,
        private string $productsDirectory,
        private string $categoriesDirectory,
        private string $uploadsDirectory,
        private string $categoriesPlatsDirectory,
        private string $imagesPlatsDirectory,
        private string $promotionsDirectory,
        private string $bonCommandeDirectory,
        private string $recuAchatDirectory,
        private string $recuAbonnementDirectory,
        private string $exportsDirectory,
        private string $salesExportsDirectory,
        private string $saleReceiptsDirectory
    ) {}

    /**
     * Supprime complètement une entreprise et toutes ses données associées
     */
    public function deleteCompany(HmaService $hmaService): void
    {
        $companyName = $hmaService->getCompanyName();
        $companyId = $hmaService->getId();
        
        $this->logger->info("Début de la suppression de l'entreprise", [
            'company_id' => $companyId,
            'company_name' => $companyName
        ]);

        try {
            // 1. SUPPRIMER TOUS LES FICHIERS PHYSIQUES
            $this->deleteAllFiles($hmaService);
            
            // 2. SUPPRIMER LE DOSSIER COMPLET DE L'ENTREPRISE
            $this->deleteCompanyDirectory($companyId);

            // 3. SUPPRIMER LES ENTITÉS LIÉES
            $this->deleteRelatedEntities($hmaService);
            
            // 4. SUPPRIMER L'ENTREPRISE ELLE-MÊME
            $this->entityManager->remove($hmaService);
            $this->entityManager->flush();

            $this->logger->info("Entreprise supprimée avec succès", [
                'company_id' => $companyId,
                'company_name' => $companyName
            ]);

        } catch (\Exception $e) {
            $this->logger->error("Erreur lors de la suppression", [
                'company_id' => $companyId,
                'error' => $e->getMessage()
            ]);
            throw $e;
        }
    }

    /**
     * Supprime TOUS les fichiers associés à l'entreprise
     */
    private function deleteAllFiles(HmaService $hmaService): void
    {
        // === 1. LOGO DE L'ENTREPRISE ===
        if ($hmaService->getLogo()) {
            $this->deleteFile($this->logosDirectory, $hmaService->getLogo());
        }

        // === 2. FICHIERS DES UTILISATEURS ===
        foreach ($hmaService->getUsers() as $user) {
            if ($user->getPhoto()) {
                $this->deleteFile($this->photosDirectory, $user->getPhoto());
            }
        }

        // === 3. FICHIERS DES PRODUITS ===
        foreach ($hmaService->getProducts() as $product) {
            if ($product->getImage()) {
                $this->deleteFile($this->productsDirectory, $product->getImage());
            }
        }

        // === 4. FICHIERS DES CATÉGORIES ===
        foreach ($hmaService->getCategories() as $category) {
            if ($category->getImage()) {
                $this->deleteFile($this->categoriesDirectory, $category->getImage());
            }
        }

        // === 5. FICHIERS DES RECETTES ===
        foreach ($hmaService->getRecipes() as $recipe) {
            if ($recipe->getImage()) {
                $this->deleteFile($this->imagesPlatsDirectory, $recipe->getImage());
            }
            // Catégorie de la recette (CategoryRecipe)
            if ($recipe->getCategory() && $recipe->getCategory()->getImage()) {
                $this->deleteFile($this->categoriesPlatsDirectory, $recipe->getCategory()->getImage());
            }
        }

        // === 6. FICHIERS DES PROMOTIONS ===
        foreach ($hmaService->getPromotions() as $promotion) {
            if ($promotion->getImage()) {
                $this->deleteFile($this->promotionsDirectory, $promotion->getImage());
            }
        }

        // === 7. FICHIERS DES ACHATS (Purchase) ===
        // Méthodes correctes: getBonCommande() et getRecuAchat()
        foreach ($hmaService->getPurchases() as $purchase) {
            if ($purchase->getBonCommande()) {
                $this->deleteFile($this->bonCommandeDirectory, $purchase->getBonCommande());
            }
            if ($purchase->getRecuAchat()) {
                $this->deleteFile($this->recuAchatDirectory, $purchase->getRecuAchat());
            }
        }

        // === 8. FICHIERS DES FACTURES ===
        // Méthode correcte: getPdfPath()
        foreach ($hmaService->getInvoices() as $invoice) {
            if ($invoice->getPdfPath()) {
                $this->deleteFile($this->recuAbonnementDirectory, $invoice->getPdfPath());
            }
        }

        // === 9. FICHIERS D'EXPORT ===
        $exportPattern = $this->exportsDirectory . '/company_' . $hmaService->getId() . '_*';
        $this->deleteFilesByPattern($exportPattern);
        
        $salesExportPattern = $this->salesExportsDirectory . '/company_' . $hmaService->getId() . '_*';
        $this->deleteFilesByPattern($salesExportPattern);
    }

    /**
     * Supprime le dossier complet de l'entreprise dans uploads/companies/
     */
    private function deleteCompanyDirectory(int $companyId): void
    {
        $companyDir = $this->uploadsDirectory . '/companies/' . $companyId;
        
        if ($this->filesystem->exists($companyDir)) {
            $this->filesystem->remove($companyDir);
            $this->logger->info("Dossier entreprise supprimé", ['path' => $companyDir]);
        }
    }

    /**
     * Supprime les entités liées
     */
    private function deleteRelatedEntities(HmaService $hmaService): void
    {
        // ===== ORDRE IMPORTANT : D'ABORD LES "ENFANTS" =====
        
        // 1. Order Items (via Orders)
        foreach ($hmaService->getOrders() as $order) {
            foreach ($order->getOrderItems() as $item) {
                $this->entityManager->remove($item);
            }
            $this->entityManager->remove($order);
        }
        
        // 2. Purchase Items (via Purchases)
        foreach ($hmaService->getPurchases() as $purchase) {
            foreach ($purchase->getPurchaseItems() as $item) {
                $this->entityManager->remove($item);
            }
            $this->entityManager->remove($purchase);
        }
        
        // 3. Stock Movements
        foreach ($hmaService->getStockMovements() as $movement) {
            $this->entityManager->remove($movement);
        }
        
        // 4. Stock Batches
        foreach ($hmaService->getStockBatches() as $batch) {
            $this->entityManager->remove($batch);
        }
        
        // 5. Recipe Items (via Recipes)
        foreach ($hmaService->getRecipes() as $recipe) {
            foreach ($recipe->getRecipeItems() as $item) {
                $this->entityManager->remove($item);
            }
            $this->entityManager->remove($recipe);
        }
        
        // 6. Promotion Products (via Promotions)
        foreach ($hmaService->getPromotions() as $promotion) {
            foreach ($promotion->getPromotionProducts() as $promoProduct) {
                $this->entityManager->remove($promoProduct);
            }
            $this->entityManager->remove($promotion);
        }
        
        // 7. Daily Usage
        foreach ($hmaService->getDailyUsages() as $usage) {
            $this->entityManager->remove($usage);
        }
        
        // 8. Employee Role Counts
        foreach ($hmaService->getEmployeeRoleCounts() as $roleCount) {
            $this->entityManager->remove($roleCount);
        }
        
        // 9. Subscriptions
        foreach ($hmaService->getSubscriptions() as $subscription) {
            $this->entityManager->remove($subscription);
        }
        
        // 10. Payments
        foreach ($hmaService->getPayments() as $payment) {
            $this->entityManager->remove($payment);
        }
        
        // 11. Invoices
        foreach ($hmaService->getInvoices() as $invoice) {
            $this->entityManager->remove($invoice);
        }
        
        // 12. Products
        foreach ($hmaService->getProducts() as $product) {
            $this->entityManager->remove($product);
        }
        
        // 13. Categories
        foreach ($hmaService->getCategories() as $category) {
            $this->entityManager->remove($category);
        }
        
        // 14. Suppliers
        foreach ($hmaService->getSuppliers() as $supplier) {
            $this->entityManager->remove($supplier);
        }
        
        // 15. CategoryRecipe (catégories de recettes)
        // Note: Si vous avez une relation directe, sinon les catégories de recettes sont liées aux recettes
        if (method_exists($hmaService, 'getCategoryRecipes')) {
            foreach ($hmaService->getCategoryRecipes() as $categoryRecipe) {
                $this->entityManager->remove($categoryRecipe);
            }
        }
        
        // 16. Users (DOIVENT ÊTRE LES DERNIERS)
        foreach ($hmaService->getUsers() as $user) {
            if ($user->getPhoto()) {
                $this->deleteFile($this->photosDirectory, $user->getPhoto());
            }
            $this->entityManager->remove($user);
        }
        
        // Flush après suppression
        $this->entityManager->flush();
    }

    /**
     * Supprime un fichier s'il existe
     */
    private function deleteFile(string $directory, string $filename): void
    {
        if (empty($filename)) {
            return;
        }
        
        $filePath = rtrim($directory, '/') . '/' . ltrim($filename, '/');
        
        if ($this->filesystem->exists($filePath)) {
            try {
                $this->filesystem->remove($filePath);
                $this->logger->debug("Fichier supprimé", ['path' => $filePath]);
            } catch (\Exception $e) {
                $this->logger->warning("Impossible de supprimer le fichier", [
                    'path' => $filePath,
                    'error' => $e->getMessage()
                ]);
            }
        }
    }

    /**
     * Supprime les fichiers correspondant à un pattern
     */
    private function deleteFilesByPattern(string $pattern): void
    {
        $files = glob($pattern);
        foreach ($files as $file) {
            if ($this->filesystem->exists($file)) {
                $this->filesystem->remove($file);
                $this->logger->debug("Fichier supprimé (pattern)", ['path' => $file]);
            }
        }
    }
}