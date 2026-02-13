<?php
// src/Service/SubscriptionNumberGenerator.php

namespace App\Service;

use App\Entity\HmaService;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;

class SubscriptionNumberGenerator
{
    private EntityManagerInterface $entityManager;
    private LoggerInterface $logger;
    
    public function __construct(
        EntityManagerInterface $entityManager,
        LoggerInterface $logger
    ) {
        $this->entityManager = $entityManager;
        $this->logger = $logger;
    }

    /**
     * Génère un numéro d'abonnement UNIQUE de 10 caractères
     * Format: 2 lettres (A-Z sauf I et O) + 8 chiffres
     * Exemple: AB12345678
     */
    public function generate(): string
    {
        $maxAttempts = 100;
        $attempt = 0;
        $repository = $this->entityManager->getRepository(HmaService::class);
        
        do {
            $subscriptionNumber = $this->generateRandomNumber();
            
            // ✅ IMPORTANT: Utiliser le nom du champ EN BASE (subscription_number)
            $existing = $repository->findOneBy(['subscription_number' => $subscriptionNumber]);
            
            $attempt++;
            
            if ($attempt >= $maxAttempts) {
                // Fallback ultra-sécurisé
                $subscriptionNumber = 'ZZ' . time() . substr(str_shuffle('0123456789'), 0, 2);
                $this->logger->warning('Subscription number generated after max attempts', [
                    'number' => $subscriptionNumber
                ]);
                break;
            }
                
        } while ($existing !== null);
        
        return $subscriptionNumber;
    }

    /**
     * Génère un numéro aléatoire
     */
    private function generateRandomNumber(): string
    {
        // Lettres autorisées (exclure I et O pour éviter confusion)
        $letters = 'ABCDEFGHJKLMNPQRSTUVWXYZ';
        
        // Générer 2 lettres
        $letterPart = '';
        for ($i = 0; $i < 2; $i++) {
            $letterPart .= $letters[random_int(0, strlen($letters) - 1)];
        }
        
        // Générer 8 chiffres
        $numberPart = '';
        for ($i = 0; $i < 8; $i++) {
            $numberPart .= random_int(0, 9);
        }
        
        return $letterPart . $numberPart;
    }

    /**
     * Pour les entreprises existantes sans numéro
     */
    public function generateForExisting(HmaService $hmaService): string
    {
        // ✅ Vérifier avec le nom du champ en base
        $existingNumber = $this->entityManager->createQueryBuilder()
            ->select('h.subscription_number')
            ->from(HmaService::class, 'h')
            ->where('h.id = :id')
            ->setParameter('id', $hmaService->getId())
            ->getQuery()
            ->getSingleScalarResult();

        if ($existingNumber) {
            return $existingNumber;
        }
        
        $number = $this->generate();
        
        // ✅ Utiliser la méthode setter de l'entité
        $hmaService->setSubscriptionNumber($number);
        $this->entityManager->persist($hmaService);
        $this->entityManager->flush();
        
        return $number;
    }

    /**
     * Vérifie si un numéro d'abonnement est valide
     */
    public function isValid(string $subscriptionNumber): bool
    {
        // Format: 2 lettres majuscules (pas I ni O) + 8 chiffres
        return preg_match('/^[A-HJ-NP-Z]{2}\d{8}$/', $subscriptionNumber) === 1;
    }

    /**
     * Formate pour l'affichage: AB-1234-5678
     */
    public function format(string $subscriptionNumber): string
    {
        if (!$this->isValid($subscriptionNumber)) {
            return $subscriptionNumber;
        }
        
        return sprintf('%s-%s-%s', 
            substr($subscriptionNumber, 0, 2),
            substr($subscriptionNumber, 2, 4),
            substr($subscriptionNumber, 6, 4)
        );
    }
}