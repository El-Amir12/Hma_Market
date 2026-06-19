<?php
// src/Twig/CompanyExtension.php

namespace App\Twig;

use App\Entity\HmaService;
use Doctrine\ORM\EntityManagerInterface;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class CompanyExtension extends AbstractExtension
{
    public function __construct(
        private EntityManagerInterface $entityManager
    ) {}

    public function getFunctions(): array
    {
        return [
            new TwigFunction('get_company_colors', [$this, 'getCompanyColors']),
            new TwigFunction('get_company_by_id', [$this, 'getCompanyById']),
        ];
    }

    /**
     * Récupère les couleurs d'une entreprise
     */
    public function getCompanyColors(int $companyId): array
    {
        $company = $this->entityManager->getRepository(HmaService::class)->find($companyId);
        
        if (!$company) {
            return [
                'primary' => '#0463f1',
                'secondary' => '#8b5cf6'
            ];
        }

        return [
            'primary' => $company->getPrimaryColor() ?? '#0463f1',
            'secondary' => $company->getSecondaryColor() ?? '#8b5cf6',
        ];
    }

    /**
     * Récupère une entreprise par son ID
     */
    public function getCompanyById(int $companyId): ?HmaService
    {
        return $this->entityManager->getRepository(HmaService::class)->find($companyId);
    }
}