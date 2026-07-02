<?php
// src/Command/CheckPublicStatusCommand.php

namespace App\Command;

use App\Entity\HmaService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:check-public-status',
    description: 'Affiche le statut public de toutes les entreprises.'
)]
class CheckPublicStatusCommand extends Command
{
    public function __construct(
        private EntityManagerInterface $em
    ) {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $io->title('📊 Statut public des entreprises');

        $companies = $this->em->getRepository(HmaService::class)->findAll();

        $rows = [];
        $totalPublic = 0;
        $totalPrivate = 0;

        foreach ($companies as $company) {
            $plan = $company->getCurrentPlan();
            $isPublic = $company->isPublic();
            $companyPublic = $company->isCompanyPublic();
            $visible = $isPublic && $companyPublic;

            // Compter les produits et catégories publics
            $productCount = $this->em->createQueryBuilder()
                ->select('COUNT(p.id)')
                ->from('App\Entity\Product', 'p')
                ->where('p.hma_service = :company')
                ->andWhere('p.is_public = true')
                ->setParameter('company', $company)
                ->getQuery()
                ->getSingleScalarResult();

            $categoryCount = $this->em->createQueryBuilder()
                ->select('COUNT(c.id)')
                ->from('App\Entity\Category', 'c')
                ->where('c.hma_service = :company')
                ->andWhere('c.is_public = true')
                ->setParameter('company', $company)
                ->getQuery()
                ->getSingleScalarResult();

            $rows[] = [
                $company->getId(),
                $company->getCompanyName(),
                $plan,
                $isPublic ? '✅ Oui' : '❌ Non',
                $companyPublic ? '✅ Oui' : '❌ Non',
                $visible ? '✅ Oui' : '❌ Non',
                $productCount,
                $categoryCount,
            ];

            if ($visible) {
                $totalPublic++;
            } else {
                $totalPrivate++;
            }
        }

        $io->table(
            ['ID', 'Entreprise', 'Plan', 'is_public', 'company_public', 'Visible', 'Produits publics', 'Catégories publiques'],
            $rows
        );

        $io->section('📋 RÉSUMÉ');
        $io->writeln(sprintf('  • Entreprises visibles : %d', $totalPublic));
        $io->writeln(sprintf('  • Entreprises non visibles : %d', $totalPrivate));

        return Command::SUCCESS;
    }
}