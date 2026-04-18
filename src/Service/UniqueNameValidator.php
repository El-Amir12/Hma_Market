<?php
// src/Service/UniqueNameValidator.php

// src/Service/UniqueNameValidator.php
namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;

class UniqueNameValidator
{
    public function __construct(
        private EntityManagerInterface $entityManager
    ) {
    }

    public function isNameUnique(object $entity, string $entityClass, string $hmaServiceId = null): bool
    {
        $criteria = ['name' => $entity->getName()];
        
        if ($hmaServiceId && property_exists($entity, 'hma_service')) {
            $criteria['hma_service'] = $hmaServiceId;
        }
        
        $existing = $this->entityManager->getRepository($entityClass)->findOneBy($criteria);
        
        if (!$existing) {
            return true;
        }
        
        if (method_exists($entity, 'getId') && $existing->getId() === $entity->getId()) {
            return true;
        }
        
        return false;
    }

    public function validate(object $entity, string $entityClass, string $entityName, string $hmaServiceId = null): array
    {
        if (!$this->isNameUnique($entity, $entityClass, $hmaServiceId)) {
            return [
                'valid' => false,
                'message' => sprintf(
                    'Une %s avec le nom "<strong>%s</strong>" existe déjà. Veuillez choisir un autre nom.',
                    $entityName,
                    htmlspecialchars($entity->getName())
                )
            ];
        }
        
        return ['valid' => true, 'message' => null];
    }
}