<?php
// src/Command/SendExpirationRemindersCommand.php
namespace App\Command;

use App\Entity\HmaService;
use App\Entity\User;
use App\Service\EmailService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class SendExpirationRemindersCommand extends Command
{
    protected static $defaultName = 'app:send-expiration-reminders';

    public function __construct(
        private EntityManagerInterface $em,
        private EmailService $emailService
    ) {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this->setDescription('Envoie un rappel aux entreprises dont l\'abonnement expire dans 3 jours.');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $now = new \DateTime();
        $targetDate = (clone $now)->modify('+3 days');

        // Entreprises dont l'abonnement se termine dans 3 jours (±1 jour pour éviter les décalages)
        $expiringCompanies = $this->em->createQueryBuilder()
            ->select('s')
            ->from(HmaService::class, 's')
            ->where('s.subscriptionEndsAt IS NOT NULL')
            ->andWhere('s.subscriptionEndsAt BETWEEN :start AND :end')
            ->setParameter('start', $targetDate->setTime(0,0,0))
            ->setParameter('end', $targetDate->setTime(23,59,59))
            ->getQuery()
            ->getResult();

        $count = 0;
        foreach ($expiringCompanies as $company) {
            // Récupérer les administrateurs et managers actifs
            $users = $this->em->getRepository(User::class)
                ->createQueryBuilder('u')
                ->where('u.hma_service_id = :company')
                ->andWhere('u.subscription_active = true')
                ->andWhere('u.roles LIKE :admin OR u.roles LIKE :manager')
                ->setParameter('company', $company)
                ->setParameter('admin', '%"ROLE_ADMIN"%')
                ->setParameter('manager', '%"ROLE_MANAGER"%')
                ->getQuery()
                ->getResult();

            foreach ($users as $user) {
                $this->emailService->sendExpirationReminder($user, $company);
            }
            $count++;
        }

        $io->success("$count rappels envoyés.");
        return Command::SUCCESS;
    }
}