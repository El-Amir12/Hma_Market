<?php
// src/Service/QuotaManager.php

namespace App\Service;

use App\Entity\HmaService;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;

class QuotaManager
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private LoggerInterface $logger,
        private EmailService $emailService
    ) {}

        /**
     * Mettre à jour les statuts d'abonnement pour tous les utilisateurs d'une entreprise
     * basé sur le plan d'abonnement et les quotas par rôle
     * @return array ['activated' => int, 'deactivated' => int]
     */
    public function updateSubscriptionStatusForCompany(HmaService $hmaService): array
    {
        $plan = $hmaService->getCurrentPlan();
        $limits = $hmaService->getCurrentLimits();
        $maxPerRole = $limits['max_users_per_role'];
        $stats = ['activated' => 0, 'deactivated' => 0];
        $deactivatedUsers = []; // pour collecter les utilisateurs désactivés
        
        $this->logger->info(sprintf(
            'Mise à jour des quotas pour l\'entreprise %s (ID: %d) - Plan: %s, Max par rôle: %d',
            $hmaService->getCompanyName(),
            $hmaService->getId(),
            $plan,
            $maxPerRole
        ));

        // Si max par rôle est infini, tous les utilisateurs sont actifs
        if ($maxPerRole === PHP_INT_MAX) {
            $this->activateAllUsers($hmaService);
            return $stats; // Aucun changement
        }

        // Récupérer tous les utilisateurs de l'entreprise (sauf le propriétaire)
        $users = $this->entityManager
            ->getRepository(User::class)
            ->findBy(['hma_service_id' => $hmaService->getId()]);
        
        // Grouper les utilisateurs par rôle
        $usersByRole = [];
        foreach ($users as $user) {
            // Ne pas compter le propriétaire dans les quotas
            if ($user->isHmaOwner()) {
                continue;
            }
            
            foreach ($user->getRoles() as $role) {
                if ($role !== 'ROLE_USER') {
                    if (!isset($usersByRole[$role])) {
                        $usersByRole[$role] = [];
                    }
                    $usersByRole[$role][] = $user;
                }
            }
        }

        // Pour chaque rôle, trier par date de création (du plus ANCIEN au plus récent)
        foreach ($usersByRole as $role => $roleUsers) {
            usort($roleUsers, function(User $a, User $b) {
                // ASC = plus ancien d'abord, plus récent ensuite
                return $a->getCreatedAt() <=> $b->getCreatedAt();
            });

            // Activer les X premiers (les plus anciens), désactiver les autres (les plus récents)
            foreach ($roleUsers as $index => $user) {
                if ($index < $maxPerRole) {
                    // Dans les limites : activer si nécessaire
                    if (!$user->isSubscriptionActive()) {
                        $user->setSubscriptionActive(true);
                        $this->logger->info(sprintf(
                            '✅ Utilisateur activé: %s (Rôle: %s)',
                            $user->getEmail(),
                            $role
                        ));
                        $stats['activated']++;
                    }
                } else {
                    // Hors quota : désactiver si actif
                    if ($user->isSubscriptionActive()) {
                        $user->setSubscriptionActive(false);
                        $this->logger->info(sprintf(
                            '❌ Utilisateur désactivé (hors quota): %s (Rôle: %s)',
                            $user->getEmail(),
                            $role
                        ));
                        $stats['deactivated']++;
                        $deactivatedUsers[] = $user; // collecte
                    }
                }
            }
        }

        $this->entityManager->flush();

        // Envoyer les emails de désactivation
        foreach ($deactivatedUsers as $user) {
            $this->emailService->sendQuotaDeactivationEmail($user, $hmaService);
        }

        return $stats;
    }

    /**
     * Activer tous les utilisateurs d'une entreprise
     */
    private function activateAllUsers(HmaService $hmaService): void
    {
        $users = $this->entityManager
            ->getRepository(User::class)
            ->findBy(['hma_service_id' => $hmaService->getId()]);
        
        foreach ($users as $user) {
            if (!$user->isSubscriptionActive()) {
                $user->setSubscriptionActive(true);
            }
        }
        
        $this->entityManager->flush();
    }

    /**
     * Vérifier si l'entreprise peut ajouter un utilisateur avec un rôle spécifique
     */
    public function canAddUserWithRole(HmaService $hmaService, string $role): bool
    {
        return $hmaService->canAddUserWithRole($role);
    }

    /**
     * Obtenir le nombre d'utilisateurs restants pour un rôle
     */
   public function getRemainingSlotsForRole(HmaService $hmaService, string $role): int
    {
        $limits = $hmaService->getCurrentLimits();
        $maxPerRole = $limits['max_users_per_role'];
        if ($maxPerRole === PHP_INT_MAX) {
            return PHP_INT_MAX;
        }
        $currentCount = $this->entityManager
            ->getRepository(User::class)
            ->countByRoleAndCompany($role, $hmaService->getId());
        return max(0, $maxPerRole - $currentCount);
    }
}