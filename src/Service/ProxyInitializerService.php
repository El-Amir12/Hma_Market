<?php
// src/Service/ProxyInitializerService.php

namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\Proxy;

class ProxyInitializerService
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * Initialise un proxy Doctrine de manière robuste
     */
    public function initialize($entity)
    {
        if (!$entity) {
            return null;
        }

        // Si ce n'est pas un proxy, retourner l'entité
        if (!$entity instanceof Proxy) {
            return $entity;
        }

        // Méthode 1: Utiliser __load()
        try {
            if (!$entity->__isInitialized()) {
                $entity->__load();
            }
            return $entity;
        } catch (\Exception $e) {
            // Méthode 2: Utiliser EntityManager
            try {
                $id = method_exists($entity, 'getId') ? $entity->getId() : null;
                if ($id) {
                    $refreshed = $this->entityManager->find(get_class($entity), $id);
                    if ($refreshed) {
                        $this->entityManager->refresh($refreshed);
                        return $refreshed;
                    }
                }
            } catch (\Exception $e2) {
                // Méthode 3: Accès direct à une propriété
                try {
                    $reflection = new \ReflectionClass($entity);
                    $properties = $reflection->getProperties();
                    if (!empty($properties)) {
                        $property = $properties[0];
                        $property->setAccessible(true);
                        $property->getValue($entity);
                    }
                } catch (\Exception $e3) {
                    // Si tout échoue, retourner null
                    return null;
                }
            }
        }

        return $entity;
    }

    /**
     * Initialise un HmaService spécifiquement
     */
    public function initializeHmaService($hmaService): ?object
    {
        return $this->initialize($hmaService);
    }
}