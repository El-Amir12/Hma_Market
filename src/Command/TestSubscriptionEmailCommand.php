<?php
// src/Command/TestSubscriptionEmailCommand.php

namespace App\Command;

use App\Entity\HmaService;
use App\Entity\Subscription;
use App\Service\EmailService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class TestSubscriptionEmailCommand extends Command
{
    protected static $defaultName = 'app:test-subscription-email';
    protected static $defaultDescription = 'Test l\'envoi des emails de confirmation d\'abonnement aux utilisateurs d\'une entreprise.';

    private EntityManagerInterface $em;
    private EmailService $emailService;

    public function __construct(EntityManagerInterface $em, EmailService $emailService)
    {
        parent::__construct();
        $this->em = $em;
        $this->emailService = $emailService;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        // Récupérer une entreprise avec des utilisateurs (par exemple la première)
        $service = $this->em->getRepository(HmaService::class)->findOneBy([]);
        if (!$service) {
            $io->error('Aucune entreprise trouvée.');
            return Command::FAILURE;
        }

        // Récupérer le dernier abonnement de cette entreprise
        $subscription = $this->em->getRepository(Subscription::class)->findOneBy(
            ['hma_service' => $service],
            ['id' => 'DESC']
        );
        if (!$subscription) {
            $io->error('Aucun abonnement trouvé pour cette entreprise.');
            return Command::FAILURE;
        }

        $io->note(sprintf('Entreprise: %s (ID: %d)', $service->getCompanyName(), $service->getId()));
        $io->note(sprintf('Abonnement: %s (ID: %d)', $subscription->getSubscriptionPlan()->getName(), $subscription->getId()));

        // Compter les utilisateurs
        $users = $service->getUsers();
        $io->note(sprintf('Nombre d\'utilisateurs associés: %d', $users->count()));

        if ($users->isEmpty()) {
            $io->warning('Aucun utilisateur associé à cette entreprise. L\'email ne sera pas envoyé.');
            return Command::FAILURE;
        }

        // Appeler la méthode d'envoi
        try {
            $result = $this->emailService->sendSubscriptionConfirmationToUsers($service, $subscription);
            if ($result) {
                $io->success('Emails envoyés avec succès !');
            } else {
                $io->error('L\'envoi a échoué (retour false).');
            }
        } catch (\Exception $e) {
            $io->error('Exception: ' . $e->getMessage());
        }

        return Command::SUCCESS;
    }
}