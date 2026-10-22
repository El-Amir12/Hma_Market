<?php
// src/Command/CheckExpiredSubscriptionsCommand.php

namespace App\Command;

use App\Entity\HmaService;
use App\Entity\Subscription;
use App\Service\QuotaEnforcementService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:check-expired-subscriptions',
    description: 'Vérifie les abonnements expirés et bascule en freemium.'
)]
class CheckExpiredSubscriptionsCommand extends Command
{
    public function __construct(
        private EntityManagerInterface $em,
        private QuotaEnforcementService $quotaEnforcement
    ) {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $io->title('🔍 Vérification des abonnements expirés');

        $now = new \DateTimeImmutable();

        // ============================================================
        // ✅ ÉTAPE 1 : RAFRAÎCHIR TOUS LES STATUTS DE `Subscription`
        // ============================================================
        // On parcourt TOUTES les subscriptions (pas seulement celles expirées)
        // pour gérer les transitions pending → active ET active → expired.
        // ============================================================
        $allSubscriptions = $this->em->getRepository(Subscription::class)->findAll();

        $stats = [
            'subscriptions_scanned'     => count($allSubscriptions),
            'subscriptions_activated'   => 0,
            'subscriptions_expired'     => 0,
            'subscriptions_unchanged'   => 0,
            'companies_found'           => 0,
            'companies_private'         => 0,
            'products_private'          => 0,
            'categories_private'        => 0,
            'users_deactivated'         => 0,
            'companies_failed'          => 0,
        ];

        $io->section('📦 Étape 1 : Rafraîchissement des statuts d\'abonnement');

        foreach ($allSubscriptions as $subscription) {
            $oldStatus = $subscription->getStatus();

            // ✅ Appel de la méthode refreshStatus() de l'entité
            $changed = $subscription->refreshStatus();

            if (!$changed) {
                $stats['subscriptions_unchanged']++;
                continue;
            }

            $newStatus = $subscription->getStatus();

            $this->em->persist($subscription);

            // Compter les transitions
            if ($newStatus === Subscription::STATUS_ACTIVE) {
                $stats['subscriptions_activated']++;
                $io->writeln(sprintf(
                    '  ✅ Abonnement #%d : %s → %s',
                    $subscription->getId(),
                    $oldStatus ?? 'null',
                    $newStatus
                ));
            } elseif ($newStatus === Subscription::STATUS_EXPIRED) {
                $stats['subscriptions_expired']++;
                $io->writeln(sprintf(
                    '  ⏰ Abonnement #%d : %s → %s (expiré le %s)',
                    $subscription->getId(),
                    $oldStatus ?? 'null',
                    $newStatus,
                    $subscription->getEndsAt()?->format('d/m/Y') ?? '—'
                ));
            } else {
                $io->writeln(sprintf(
                    '  🔄 Abonnement #%d : %s → %s',
                    $subscription->getId(),
                    $oldStatus ?? 'null',
                    $newStatus
                ));
            }
        }

        // Flush des statuts d'abonnement AVANT de traiter les HmaService
        // (pour que les traitements suivants voient les statuts à jour)
        $this->em->flush();

        $io->info(sprintf(
            '📊 Abonnements scannés : %d | Activés : %d | Expirés : %d | Inchangés : %d',
            $stats['subscriptions_scanned'],
            $stats['subscriptions_activated'],
            $stats['subscriptions_expired'],
            $stats['subscriptions_unchanged']
        ));

        // ============================================================
        // ✅ ÉTAPE 2 : REPÉRER LES ENTREPRISES QUI DOIVENT PASSER EN FREEMIUM
        // ============================================================
        // Critères (élargis par rapport à la version d'origine) :
        //   - N'a AUCUN abonnement actif dans la table `subscription`
        //   - ET n'est pas en période d'essai
        //   - ET son plan actuel n'est pas déjà 'freemium'
        //
        // Cela couvre le cas "fin de trial" que la version d'origine
        // ne gérait pas (car `subscriptionEndsAt` est null en mode trial).
        // ============================================================
        $io->section('📦 Étape 2 : Détection des entreprises à basculer en freemium');

        // Récupérer toutes les entreprises candidates
        $candidateServices = $this->em->createQueryBuilder()
            ->select('s')
            ->from(HmaService::class, 's')
            ->where('s.subscriptionPlan != :freemium')
            ->setParameter('freemium', HmaService::PLAN_FREEMIUM)
            ->getQuery()
            ->getResult();

        $servicesToDowngrade = [];

        foreach ($candidateServices as $service) {
            // A. Vérifier s'il existe encore un abonnement actif en base
            $hasActiveSubscription = $this->hasActiveSubscription($service);

            // B. Vérifier la période d'essai
            $isInTrial = $service->isInTrialPeriod();

            // C. Vérifier la date de fin d'abonnement sur HmaService
            $subscriptionEnded = $service->getSubscriptionEndsAt() !== null
                && $service->getSubscriptionEndsAt() < $now;

            // ✅ Bascule en freemium uniquement si :
            //    - Pas d'abonnement actif en base
            //    - ET (essai terminé OU subscriptionEndsAt dépassé)
            if (!$hasActiveSubscription && (!$isInTrial || $subscriptionEnded)) {
                $servicesToDowngrade[] = $service;
            }
        }

        $io->info(sprintf('📊 Entreprises à basculer en freemium : %d', count($servicesToDowngrade)));

        if (count($servicesToDowngrade) === 0) {
            $this->printSummary($io, $stats);
            return Command::SUCCESS;
        }

        // ============================================================
        // ✅ ÉTAPE 3 : TRAITER CHAQUE ENTREPRISE (downgrade + quotas)
        // ============================================================
        $io->section('📦 Étape 3 : Traitement des entreprises');

        foreach ($servicesToDowngrade as $service) {
            $stats['companies_found']++;
            $io->section(sprintf('🏢 %s', $service->getCompanyName()));

            try {
                $wasPublicBefore = $service->isPublic();
                $io->writeln(sprintf(
                    '  📊 Statut public avant : %s',
                    $wasPublicBefore ? '✅ Public' : '❌ Privé'
                ));

                // 1. Désactiver TOUS les abonnements actifs de cette entreprise
                $activeSubs = $this->em->getRepository(Subscription::class)->findBy([
                    'hma_service'         => $service,
                    'subscription_active' => true,
                ]);

                foreach ($activeSubs as $sub) {
                    $sub->setSubscriptionActive(false);
                    $sub->setStatus(Subscription::STATUS_EXPIRED);
                    $sub->setUpdatedAt($now);
                    $this->em->persist($sub);
                }

                if (count($activeSubs) > 0) {
                    $io->writeln(sprintf('  ✅ %d abonnement(s) désactivé(s)', count($activeSubs)));
                }

                // 2. Basculer l'entreprise en freemium
                $service->setSubscriptionPlan(HmaService::PLAN_FREEMIUM);
                $service->setSubscriptionEndsAt(null);
                $service->setSubscriptionStartAt(null);
                $service->setIsActive(false);
                $io->writeln('  ✅ Plan passé en FREEMIUM');

                // 3. Compter les produits et catégories publics AVANT
                $productCountBefore = $this->countPublicItems('Product', $service);
                $categoryCountBefore = $this->countPublicItems('Category', $service);

                // 4. Appliquer les quotas (met is_public = false sur les excédents)
                $this->quotaEnforcement->enforceQuotas($service);
                $io->writeln('  ✅ Quotas appliqués');

                // 5. Compter APRÈS
                $this->em->flush(); // pour que les COUNT voient les changements
                $productCountAfter = $this->countPublicItems('Product', $service);
                $categoryCountAfter = $this->countPublicItems('Category', $service);

                $isPublicAfter = $service->isPublic();

                // 6. Calculer les changements
                $productsPassedPrivate  = max(0, $productCountBefore - $productCountAfter);
                $categoriesPassedPrivate = max(0, $categoryCountBefore - $categoryCountAfter);
                $companyPassedPrivate   = ($wasPublicBefore && !$isPublicAfter) ? 1 : 0;

                $io->writeln(sprintf(
                    '  📊 Produits passés en privé : %d',
                    $productsPassedPrivate
                ));
                $io->writeln(sprintf(
                    '  📊 Catégories passées en privé : %d',
                    $categoriesPassedPrivate
                ));
                $io->writeln(sprintf(
                    '  📊 Statut public après : %s',
                    $isPublicAfter ? '✅ Public' : '❌ Privé'
                ));

                // 7. Mettre à jour le statut des utilisateurs
                $activatedUsers = $service->updateUsersSubscriptionStatus();
                $io->writeln(sprintf('  ✅ Utilisateurs mis à jour : %d activé(s)', count($activatedUsers)));

                // 8. Synchroniser le statut public selon le plan
                $service->updatePublicStatusFromPlan();

                $this->em->persist($service);

                // 9. Accumuler les stats
                $stats['companies_private']  += $companyPassedPrivate;
                $stats['products_private']   += $productsPassedPrivate;
                $stats['categories_private'] += $categoriesPassedPrivate;
                $stats['users_deactivated']  += count($activatedUsers);

            } catch (\Throwable $e) {
                $stats['companies_failed']++;
                $io->error(sprintf(
                    'Erreur pour %s : %s',
                    $service->getCompanyName(),
                    $e->getMessage()
                ));
            }
        }

        // ============================================================
        // ✅ ÉTAPE 4 : SAUVEGARDE FINALE
        // ============================================================
        $this->em->flush();

        $this->printSummary($io, $stats);

        return $stats['companies_failed'] > 0 ? Command::FAILURE : Command::SUCCESS;
    }

    // ==================== MÉTHODES UTILITAIRES ====================

    /**
     * Vérifie si une entreprise possède encore au moins un abonnement actif en base.
     */
    private function hasActiveSubscription(HmaService $service): bool
    {
        $count = $this->em->createQueryBuilder()
            ->select('COUNT(s.id)')
            ->from(Subscription::class, 's')
            ->where('s.hma_service = :service')
            ->andWhere('s.status = :active')
            ->andWhere('s.subscription_active = true')
            ->andWhere('s.endsAt > :now')
            ->setParameter('service', $service)
            ->setParameter('active', Subscription::STATUS_ACTIVE)
            ->setParameter('now', new \DateTimeImmutable())
            ->getQuery()
            ->getSingleScalarResult();

        return (int) $count > 0;
    }

    /**
     * Compte les éléments publics (Product ou Category) d'une entreprise.
     */
    private function countPublicItems(string $entityShortName, HmaService $service): int
    {
        $entityClass = 'App\\Entity\\' . $entityShortName;

        return (int) $this->em->createQueryBuilder()
            ->select('COUNT(e.id)')
            ->from($entityClass, 'e')
            ->where('e.hma_service = :service')
            ->andWhere('e.is_public = true')
            ->setParameter('service', $service)
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * Affiche le résumé global.
     */
    private function printSummary(SymfonyStyle $io, array $stats): void
    {
        $io->section('📊 RÉSUMÉ GLOBAL');

        $io->table(
            ['Action', 'Nombre'],
            [
                ['🔍 Abonnements scannés',                $stats['subscriptions_scanned']],
                ['✅ Abonnements activés',                $stats['subscriptions_activated']],
                ['⏰ Abonnements expirés (refresh)',       $stats['subscriptions_expired']],
                ['➖ Abonnements inchangés',               $stats['subscriptions_unchanged']],
                ['🏢 Entreprises traitées',                $stats['companies_found']],
                ['🔒 Entreprises passées en privé',        $stats['companies_private']],
                ['📦 Produits passés en privé',            $stats['products_private']],
                ['📁 Catégories passées en privé',         $stats['categories_private']],
                ['👥 Utilisateurs désactivés',             $stats['users_deactivated']],
                ['❌ Erreurs',                              $stats['companies_failed']],
            ]
        );

        if ($stats['companies_failed'] > 0) {
            $io->warning(sprintf(
                '⚠️ %d entreprise(s) n\'ont pas pu être traitées. Vérifiez les logs.',
                $stats['companies_failed']
            ));
        } else {
            $io->success(sprintf(
                '✅ Terminé : %d abonnement(s) mis à jour, %d entreprise(s) traitée(s).',
                $stats['subscriptions_activated'] + $stats['subscriptions_expired'],
                $stats['companies_found']
            ));
        }
    }
}