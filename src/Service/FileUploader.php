<?php
// src/Service/FileUploader.php

namespace App\Service;

use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\SluggerInterface;

class FileUploader
{
    private string $targetDirectory;
    private SluggerInterface $slugger;

    public function __construct(string $targetDirectory, SluggerInterface $slugger)
    {
        $this->targetDirectory = $targetDirectory;
        $this->slugger = $slugger;
    }

    /**
     * Upload d'un fichier
     * 
     * @param UploadedFile $file Le fichier à uploader
     * @param string $subDirectory Sous-dossier optionnel (ex: 'stock_adjustments/123')
     * @return string Le chemin relatif du fichier uploadé
     */
    public function upload(UploadedFile $file, string $subDirectory = ''): string
    {
        $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFilename = $this->slugger->slug($originalFilename);
        $fileName = $safeFilename . '-' . uniqid() . '.' . $file->guessExtension();

        // Déterminer le dossier de destination
        $targetPath = $this->targetDirectory;
        if (!empty($subDirectory)) {
            $targetPath .= '/' . ltrim($subDirectory, '/');
        }

        // Créer le dossier s'il n'existe pas
        if (!is_dir($targetPath)) {
            mkdir($targetPath, 0777, true);
        }

        try {
            $file->move($targetPath, $fileName);
        } catch (FileException $e) {
            throw new \Exception('Erreur lors de l\'upload du fichier: ' . $e->getMessage());
        }

        // Retourner le chemin relatif
        return empty($subDirectory) ? $fileName : $subDirectory . '/' . $fileName;
    }

    /**
     * Supprime un fichier
     * 
     * @param string $filePath Chemin relatif du fichier
     * @return bool
     */
    public function remove(string $filePath): bool
    {
        $fullPath = $this->targetDirectory . '/' . ltrim($filePath, '/');
        if (file_exists($fullPath) && is_file($fullPath)) {
            return unlink($fullPath);
        }
        return false;
    }

    /**
     * Récupère le chemin absolu du dossier cible
     */
    public function getTargetDirectory(): string
    {
        return $this->targetDirectory;
    }

    /**
     * Récupère le chemin absolu pour un sous-dossier
     */
    public function getTargetSubDirectory(string $subDirectory): string
    {
        return $this->targetDirectory . '/' . ltrim($subDirectory, '/');
    }
}