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
        private string $categoriesDirectory
    ) {}

    /**
     * Supprime complètement une entreprise et toutes ses données associées
     */
    public function deleteCompany(HmaService $hmaService): void
    {
        $companyName = $hmaService->getCompanyName();
        $this->logger->info("Début de la suppression de l'entreprise: " . $companyName);

        try {
            // 1. SUPPRIMER LES FICHIERS PHYSIQUES
            $this->deleteAllFiles($hmaService);

            // 2. SUPPRIMER L'ENTREPRISE (tout sera supprimé en cascade)
            $this->entityManager->remove($hmaService);
            $this->entityManager->flush();

            $this->logger->info("Entreprise supprimée avec succès: " . $companyName);

        } catch (\Exception $e) {
            $this->logger->error("Erreur lors de la suppression: " . $e->getMessage());
            throw $e;
        }
    }

    /**
     * Supprime tous les fichiers associés à l'entreprise
     */
    private function deleteAllFiles(HmaService $hmaService): void
    {
        // Logo de l'entreprise
        if ($hmaService->getLogo()) {
            $this->deleteFile($this->logosDirectory, $hmaService->getLogo());
        }

        // Parcourir tous les utilisateurs
        foreach ($hmaService->getUsers() as $user) {
            if ($user->getPhoto()) {
                $this->deleteFile($this->photosDirectory, $user->getPhoto());
            }
        }

        // ✅ CORRECTION: Parcourir tous les produits (getImage() au lieu de getImages())
        foreach ($hmaService->getProducts() as $product) {
            if ($product->getImage()) {
                $this->deleteFile($this->productsDirectory, $product->getImage());
            }
        }

        // Parcourir toutes les catégories
        foreach ($hmaService->getCategories() as $category) {
            if ($category->getImage()) {
                $this->deleteFile($this->categoriesDirectory, $category->getImage());
            }
        }
    }

    /**
     * Supprime un fichier s'il existe
     */
    private function deleteFile(string $directory, string $filename): void
    {
        $filePath = $directory . '/' . $filename;
        if ($this->filesystem->exists($filePath)) {
            $this->filesystem->remove($filePath);
            $this->logger->info("Fichier supprimé: " . $filePath);
        }
    }
}