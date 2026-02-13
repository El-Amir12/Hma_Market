<?php

namespace App\Command;

use App\Entity\HmaService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:clean-incomplete-registrations',
    description: 'Supprime les inscriptions incomplètes de plus de 24h (HmaService sans activation)'
)]
class CleanIncompleteRegistrationsCommand extends Command
{
    public function __construct(
        private EntityManagerInterface $entityManager
    ) {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $io->title('🧹 Nettoyage des inscriptions incomplètes');

        // Date limite : 24 heures
        $deadline = new \DateTime('-24 hours');
        
        $io->info(sprintf('📅 Date limite : %s', $deadline->format('d/m/Y H:i:s')));

        // ✅ CRITÈRES DE SUPPRESSION CORRIGÉS :
        // 1. activatedAt IS NULL OU activatedAt = '0000-00-00'
        // 2. createdAt <= il y a 24h
        // 3. isActive = false
        $hmaServices = $this->entityManager
            ->createQueryBuilder()
            ->select('h')
            ->from(HmaService::class, 'h')
            ->where('h.activatedAt IS NULL OR h.activatedAt = :emptyDate')
            ->andWhere('h.createdAt <= :deadline')
            ->andWhere('h.isActive = :isActive')
            ->setParameter('emptyDate', '0000-00-00 00:00:00')
            ->setParameter('deadline', $deadline)
            ->setParameter('isActive', false)
            ->getQuery()
            ->getResult();

        $io->info(sprintf('📊 Inscriptions incomplètes trouvées : %d', count($hmaServices)));

        if (count($hmaServices) === 0) {
            $io->success('✅ Aucune inscription incomplète à supprimer.');
            return Command::SUCCESS;
        }

        // Afficher la liste
        $io->section('Liste des entreprises à supprimer :');
        foreach ($hmaServices as $hmaService) {
            $activatedAt = $hmaService->getActivatedAt();
            $statutActivation = $activatedAt ? $activatedAt->format('Y-m-d') : 'NULL';
            
            $io->writeln(sprintf(
                '  - [ID: %d] %s | %s | Inscrit: %s | Activé: %s | Âge: %dh',
                $hmaService->getId(),
                $hmaService->getCompanyName(),
                $hmaService->getEmail(),
                $hmaService->getCreatedAt()->format('d/m/Y H:i'),
                $statutActivation,
                $hmaService->getCreatedAt()->diff(new \DateTime())->h
            ));
        }

        // Demander confirmation en mode interactif
        if ($input->isInteractive()) {
            if (!$io->confirm('⚠️  Voulez-vous vraiment supprimer ces ' . count($hmaServices) . ' inscriptions ?', false)) {
                $io->warning('Opération annulée.');
                return Command::SUCCESS;
            }
        }

        // Suppression
        foreach ($hmaServices as $hmaService) {
            $io->writeln(sprintf('  🗑️  Suppression de %s...', $hmaService->getCompanyName()));
            $this->entityManager->remove($hmaService);
        }

        $this->entityManager->flush();

        $io->success(sprintf(
            '✅ %d inscription(s) incomplète(s) supprimée(s) avec succès !',
            count($hmaServices)
        ));

        return Command::SUCCESS;
    }
}