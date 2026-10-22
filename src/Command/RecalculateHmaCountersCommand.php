<?php
// src/Command/RecalculateHmaCountersCommand.php

namespace App\Command;

use App\Entity\HmaService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:recalculate-counters',
    description: 'Recalcule les compteurs de toutes les HmaService.'
)]
class RecalculateHmaCountersCommand extends Command
{
    public function __construct(private EntityManagerInterface $em)
    {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $io->title('🔄 Recalcul des compteurs HmaService');

        $services = $this->em->getRepository(HmaService::class)->findAll();
        $updated = 0;

        foreach ($services as $service) {
            $old = [
                'products'   => $service->getProductCount(),
                'categories' => $service->getCategoryCount(),
                'orders'     => $service->getOrderCount(),
                'users'      => $service->getUserCount(),
                'suppliers'  => $service->getSupplierCount(),
                'recipes'    => $service->getRecipeCount(),
            ];

            $service->refreshCounters();

            $new = [
                'products'   => $service->getProductCount(),
                'categories' => $service->getCategoryCount(),
                'orders'     => $service->getOrderCount(),
                'users'      => $service->getUserCount(),
                'suppliers'  => $service->getSupplierCount(),
                'recipes'    => $service->getRecipeCount(),
            ];

            $changes = [];
            foreach ($old as $k => $v) {
                if ($v !== $new[$k]) {
                    $changes[] = "{$k}: {$v} → {$new[$k]}";
                }
            }

            if (!empty($changes)) {
                $updated++;
                $io->writeln(sprintf('  ✅ %s : %s', $service->getCompanyName(), implode(', ', $changes)));
            }

            $this->em->persist($service);
        }

        $this->em->flush();
        $io->success(sprintf('%d entreprise(s) mise(s) à jour.', $updated));

        return Command::SUCCESS;
    }
}