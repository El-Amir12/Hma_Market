<?php
// src/Command/CheckExpiredSubscriptionsCommand.php
namespace App\Command;

use App\Entity\HmaService;
use App\Entity\Subscription;
use App\Service\QuotaEnforcementService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class CheckExpiredSubscriptionsCommand extends Command
{
    protected static $defaultName = 'app:check-expired-subscriptions';

    public function __construct(
        private EntityManagerInterface $em,
        private QuotaEnforcementService $quotaEnforcement
    ) {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this->setDescription('Vérifie les abonnements expirés et bascule en freemium.');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $now = new \DateTime();

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

        $count = 0;
        foreach ($expiredServices as $service) {
            $io->note("Traitement de {$service->getCompanyName()}");

            // Désactiver l'abonnement actif
            $activeSub = $this->em->getRepository(Subscription::class)->findOneBy([
                'hma_service' => $service,
                'subscription_active' => true
            ]);
            if ($activeSub) {
                $activeSub->setSubscriptionActive(false);
                $activeSub->setStatus('expired');
            }

            // Passer en freemium
            $service->setSubscriptionPlan(HmaService::PLAN_FREEMIUM);
            $service->setSubscriptionEndsAt(null);

            // Appliquer les quotas
            $this->quotaEnforcement->enforceQuotas($service);

            // Mettre à jour les utilisateurs
            $service->updateUsersSubscriptionStatus();

            $count++;
        }

        $this->em->flush();
        $io->success("$count entreprises traitées.");
        return Command::SUCCESS;
    }
}