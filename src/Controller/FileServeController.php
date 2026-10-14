<?php
// src/Controller/FileServeController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Routing\Annotation\Route;

class FileServeController extends AbstractController
{
    /**
     * Sert les fichiers du dossier public/uploads/.
     * Utile quand le serveur web ne sert pas directement les fichiers statiques
     * (ex: ngrok, dev server, etc.)
     */
    #[Route(
        '/uploads/{folder}/{companyId}/{filename}',
        name: 'app_serve_upload',
        requirements: [
            'folder' => '[a-zA-Z0-9_\-]+',
            'companyId' => '[0-9]+',
            'filename' => '.+',
        ],
        methods: ['GET']
    )]
    public function serveUploadedFile(
        string $folder,
        string $companyId,
        string $filename
    ): Response {
        $basePath = $this->getParameter('kernel.project_dir') . '/public/uploads';
        $filePath = $basePath . '/' . $folder . '/' . $companyId . '/' . $filename;

        // ✅ Sécurité : empêcher la traversée de répertoire
        $realPath = realpath($filePath);
        $realBase = realpath($basePath);

        if ($realPath === false || $realBase === false || !str_starts_with($realPath, $realBase)) {
            throw $this->createNotFoundException('Fichier introuvable.');
        }

        if (!is_file($realPath)) {
            throw $this->createNotFoundException('Fichier introuvable.');
        }

        $response = new BinaryFileResponse($realPath);
        $response->setContentDisposition(
            ResponseHeaderBag::DISPOSITION_INLINE,
            basename($realPath)
        );

        // ✅ Cache long (1 an) — le nom contient déjà un uniqid
        $response->setMaxAge(31536000);
        $response->setPublic();
        $response->setImmutable();

        return $response;
    }

    /**
     * Sert les fichiers plus génériques : /uploads/products/xxx.jpg
     */
    #[Route(
        '/uploads/{folder}/{filename}',
        name: 'app_serve_upload_simple',
        requirements: [
            'folder' => '[a-zA-Z0-9_\-]+',
            'filename' => '.+',
        ],
        methods: ['GET']
    )]
    public function serveSimpleUploadedFile(
        string $folder,
        string $filename
    ): Response {
        $basePath = $this->getParameter('kernel.project_dir') . '/public/uploads';
        $filePath = $basePath . '/' . $folder . '/' . $filename;

        $realPath = realpath($filePath);
        $realBase = realpath($basePath);

        if ($realPath === false || $realBase === false || !str_starts_with($realPath, $realBase)) {
            throw $this->createNotFoundException('Fichier introuvable.');
        }

        if (!is_file($realPath)) {
            throw $this->createNotFoundException('Fichier introuvable.');
        }

        $response = new BinaryFileResponse($realPath);
        $response->setContentDisposition(
            ResponseHeaderBag::DISPOSITION_INLINE,
            basename($realPath)
        );
        $response->setMaxAge(31536000);
        $response->setPublic();
        $response->setImmutable();

        return $response;
    }
}