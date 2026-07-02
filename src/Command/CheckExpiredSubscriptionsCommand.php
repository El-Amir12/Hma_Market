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

        $now = new \DateTime();

        // ✅ Récupérer les abonnements expirés
        $expiredServices = $this->em->createQueryBuilder()
            ->select('s')
            ->from(HmaService::class, 's')
            ->where('s.subscriptionEndsAt IS NOT NULL')
            ->andWhere('s.subscriptionEndsAt < :now')
            ->andWhere('s.subscriptionPlan != :freemium')
            ->setParameter('now', $now)
            ->setParameter('freemium', HmaService::PLAN_FREEMIUM)
            ->getQuery()
            ->getResult();

        $io->info(sprintf('📊 Abonnements expirés trouvés : %d', count($expiredServices)));

        if (count($expiredServices) === 0) {
            $io->success('✅ Aucun abonnement expiré.');
            return Command::SUCCESS;
        }

        // ✅ Statistiques globales
        $totalStats = [
            'companies' => 0,
            'companies_private' => 0,
            'products_private' => 0,
            'categories_private' => 0,
            'users_deactivated' => 0,
        ];

        foreach ($expiredServices as $service) {
            $io->section(sprintf('📦 Traitement de : %s', $service->getCompanyName()));

            // ✅ Vérifier le statut public avant modification
            $wasPublicBefore = $service->isPublic();
            $io->writeln(sprintf('  📊 Statut public avant : %s', $wasPublicBefore ? '✅ Public' : '❌ Privé'));

            // 1. Désactiver l'abonnement actif
            $activeSub = $this->em->getRepository(Subscription::class)->findOneBy([
                'hma_service' => $service,
                'subscription_active' => true
            ]);
            if ($activeSub) {
                $activeSub->setSubscriptionActive(false);
                $activeSub->setStatus('expired');
                $io->writeln('  ✅ Abonnement désactivé');
            }

            // 2. Passer en freemium
            $service->setSubscriptionPlan(HmaService::PLAN_FREEMIUM);
            $service->setSubscriptionEndsAt(null);
            $io->writeln('  ✅ Plan passé en FREEMIUM');

            // 3. Compter les produits et catégories avant modification
            $productCountBefore = $this->em->createQueryBuilder()
                ->select('COUNT(p.id)')
                ->from('App\Entity\Product', 'p')
                ->where('p.hma_service = :company')
                ->andWhere('p.is_public = true')
                ->setParameter('company', $service)
                ->getQuery()
                ->getSingleScalarResult();

            $categoryCountBefore = $this->em->createQueryBuilder()
                ->select('COUNT(c.id)')
                ->from('App\Entity\Category', 'c')
                ->where('c.hma_service = :company')
                ->andWhere('c.is_public = true')
                ->setParameter('company', $service)
                ->getQuery()
                ->getSingleScalarResult();

            // 4. Appliquer les quotas (met à jour is_public)
            $results = $this->quotaEnforcement->enforceQuotas($service);
            $io->writeln('  ✅ Quotas appliqués (is_public = false)');

            // 5. Vérifier le statut public après modification
            $isPublicAfter = $service->isPublic();
            $io->writeln(sprintf('  📊 Statut public après : %s', $isPublicAfter ? '✅ Public' : '❌ Privé'));

            // 6. Compter les produits et catégories après modification
            $productCountAfter = $this->em->createQueryBuilder()
                ->select('COUNT(p.id)')
                ->from('App\Entity\Product', 'p')
                ->where('p.hma_service = :company')
                ->andWhere('p.is_public = true')
                ->setParameter('company', $service)
                ->getQuery()
                ->getSingleScalarResult();

            $categoryCountAfter = $this->em->createQueryBuilder()
                ->select('COUNT(c.id)')
                ->from('App\Entity\Category', 'c')
                ->where('c.hma_service = :company')
                ->andWhere('c.is_public = true')
                ->setParameter('company', $service)
                ->getQuery()
                ->getSingleScalarResult();

            // 7. Calculer les changements
            $productsPassedPrivate = $productCountBefore - $productCountAfter;
            $categoriesPassedPrivate = $categoryCountBefore - $categoryCountAfter;
            $companyPassedPrivate = $wasPublicBefore && !$isPublicAfter ? 1 : 0;

            // 8. Afficher les statistiques détaillées
            $io->writeln('  📊 Détail des changements :');
            $io->writeln(sprintf('     • Entreprise : %s', $companyPassedPrivate ? '✅ Passée en privé' : '❌ Pas de changement'));
            $io->writeln(sprintf('     • Produits : %d passés en privé', $productsPassedPrivate));
            $io->writeln(sprintf('     • Catégories : %d passées en privé', $categoriesPassedPrivate));

            // 9. Mettre à jour les utilisateurs
            $activatedUsers = $service->updateUsersSubscriptionStatus();
            $io->writeln(sprintf('  ✅ Utilisateurs mis à jour (%d)', count($activatedUsers)));

            // ✅ Accumuler les statistiques
            $totalStats['companies']++;
            $totalStats['companies_private'] += $companyPassedPrivate;
            $totalStats['products_private'] += $productsPassedPrivate;
            $totalStats['categories_private'] += $categoriesPassedPrivate;
            $totalStats['users_deactivated'] += count($activatedUsers);
        }

        // ✅ Sauvegarder toutes les modifications
        $this->em->flush();

        // ✅ Afficher le résumé global
        $io->section('📊 RÉSUMÉ GLOBAL');
        $io->table(
            ['Action', 'Nombre'],
            [
                ['🏢 Entreprises traitées', $totalStats['companies']],
                ['🏢 Entreprises passées en privé', $totalStats['companies_private']],
                ['📦 Produits passés en privé', $totalStats['products_private']],
                ['📁 Catégories passées en privé', $totalStats['categories_private']],
                ['👥 Utilisateurs désactivés', $totalStats['users_deactivated']],
            ]
        );

        $io->success(sprintf('✅ %d entreprise(s) traitée(s) avec succès !', $totalStats['companies']));

        return Command::SUCCESS;
    }
}