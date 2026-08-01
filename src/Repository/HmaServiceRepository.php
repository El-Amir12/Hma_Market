<?php
// src/Repository/HmaServiceRepository.php

namespace App\Repository;

use App\Entity\HmaService;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Writer\Csv;
use Symfony\Component\HttpFoundation\Response;

/**
 * @extends ServiceEntityRepository<HmaService>
 */
class HmaServiceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HmaService::class);
    }

    /**
     * Trouver les entreprises avec filtres
     */
    // Dans la méthode findByFilters(array $filters)
    public function findByFilters(array $filters)
    {
        $qb = $this->createQueryBuilder('h')
            ->leftJoin('h.subscriptions', 's')
            ->addSelect('s');

        // Recherche
        if (!empty($filters['search'])) {
            $qb->andWhere('h.companyName LIKE :search OR h.email LIKE :search OR h.subscription_number LIKE :search')
                ->setParameter('search', '%' . $filters['search'] . '%');
        }

        // Filtre par type d'entreprise (nouveau)
        if (!empty($filters['company_type'])) {
            $qb->andWhere('h.companyType = :companyType')
                ->setParameter('companyType', $filters['company_type']);
        }

        // Filtre par statut
        if (!empty($filters['status'])) {
            switch ($filters['status']) {
                case 'active':
                    $qb->andWhere('h.hma_active = :active')
                        ->setParameter('active', true);
                    break;
                case 'inactive':
                    $qb->andWhere('h.hma_active = :active')
                        ->setParameter('active', false);
                    break;
                case 'trial':
                    $qb->andWhere('h.trialEndsAt > :now')
                        ->setParameter('now', new \DateTime());
                    break;
                case 'expired':
                    $qb->andWhere('h.trialEndsAt < :now OR h.subscriptionEndsAt < :now')
                        ->setParameter('now', new \DateTime());
                    break;
            }
        }

        // Filtre par plan
        if (!empty($filters['plan'])) {
            $qb->andWhere('h.subscriptionPlan = :plan')
                ->setParameter('plan', $filters['plan']);
        }

        // Filtre par date
        if (!empty($filters['date_from'])) {
            $qb->andWhere('h.createdAt >= :dateFrom')
                ->setParameter('dateFrom', new \DateTime($filters['date_from']));
        }
        if (!empty($filters['date_to'])) {
            $qb->andWhere('h.createdAt <= :dateTo')
                ->setParameter('dateTo', new \DateTime($filters['date_to']));
        }

        // Tri
        $sort = $filters['sort'] ?? 'h.createdAt';
        $direction = $filters['direction'] ?? 'DESC';
        $qb->orderBy($sort, $direction);

        return $qb;
    }
    /**
     * Obtenir les statistiques
     */
    public function getStatistics(): array
    {
        $now = new \DateTime();
        
        return [
            'total' => $this->count([]),
            'active' => $this->count(['hma_active' => true]),
            'inactive' => $this->count(['hma_active' => false]),
            'trial' => $this->createQueryBuilder('h')
                ->select('COUNT(h.id)')
                ->where('h.trialEndsAt > :now')
                ->setParameter('now', $now)
                ->getQuery()
                ->getSingleScalarResult(),
            'premium' => $this->count(['subscriptionPlan' => HmaService::PLAN_PREMIUM]),
            'basic' => $this->count(['subscriptionPlan' => HmaService::PLAN_BASIC]),
            'freemium' => $this->count(['subscriptionPlan' => HmaService::PLAN_FREEMIUM]),
            'expired' => $this->createQueryBuilder('h')
                ->select('COUNT(h.id)')
                ->where('h.subscriptionEndsAt < :now OR (h.trialEndsAt < :now AND h.subscriptionPlan = :trial)')
                ->setParameter('now', $now)
                ->setParameter('trial', HmaService::PLAN_TRIAL)
                ->getQuery()
                ->getSingleScalarResult(),
        ];
    }

    /**
     * Trouver les entreprises expirées
     */
    public function findExpired(): array
    {
        $now = new \DateTime();
        
        return $this->createQueryBuilder('h')
            ->where('h.subscriptionEndsAt < :now')
            ->orWhere('h.trialEndsAt < :now AND h.subscriptionPlan = :trial')
            ->setParameter('now', $now)
            ->setParameter('trial', HmaService::PLAN_TRIAL)
            ->getQuery()
            ->getResult();
    }

    /**
     * Exporter vers Excel/CSV
     */
    public function exportToFormat(array $companies, string $format): Response
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // ✅ Définir l'encodage UTF-8 pour les en-têtes
        $sheet->setCellValue('A1', mb_convert_encoding('ID', 'UTF-8', 'auto'));
        $sheet->setCellValue('B1', mb_convert_encoding('Entreprise', 'UTF-8', 'auto'));
        $sheet->setCellValue('C1', mb_convert_encoding('Email', 'UTF-8', 'auto'));
        $sheet->setCellValue('D1', mb_convert_encoding('Téléphone', 'UTF-8', 'auto'));
        $sheet->setCellValue('E1', mb_convert_encoding('Ville', 'UTF-8', 'auto'));
        $sheet->setCellValue('F1', mb_convert_encoding('Pays', 'UTF-8', 'auto'));
        $sheet->setCellValue('G1', mb_convert_encoding('Plan', 'UTF-8', 'auto'));
        $sheet->setCellValue('H1', mb_convert_encoding('Statut', 'UTF-8', 'auto'));
        $sheet->setCellValue('I1', mb_convert_encoding('Date création', 'UTF-8', 'auto'));
        $sheet->setCellValue('J1', mb_convert_encoding('Date activation', 'UTF-8', 'auto'));
        $sheet->setCellValue('K1', mb_convert_encoding('Fin essai', 'UTF-8', 'auto'));
        $sheet->setCellValue('L1', mb_convert_encoding('Fin abonnement', 'UTF-8', 'auto'));
        $sheet->setCellValue('M1', mb_convert_encoding('Produits', 'UTF-8', 'auto'));
        $sheet->setCellValue('N1', mb_convert_encoding('Commandes', 'UTF-8', 'auto'));
        $sheet->setCellValue('O1', mb_convert_encoding('Utilisateurs', 'UTF-8', 'auto'));

        // Données
        $row = 2;
        foreach ($companies as $company) {
            $sheet->setCellValue('A' . $row, $company->getId());
            $sheet->setCellValue('B' . $row, mb_convert_encoding($company->getCompanyName() ?? '', 'UTF-8', 'auto'));
            $sheet->setCellValue('C' . $row, mb_convert_encoding($company->getEmail() ?? '', 'UTF-8', 'auto'));
            $sheet->setCellValue('D' . $row, mb_convert_encoding($company->getPhone() ?? '', 'UTF-8', 'auto'));
            $sheet->setCellValue('E' . $row, mb_convert_encoding($company->getCity() ?? '', 'UTF-8', 'auto'));
            $sheet->setCellValue('F' . $row, mb_convert_encoding($company->getCountry() ?? '', 'UTF-8', 'auto'));
            $sheet->setCellValue('G' . $row, mb_convert_encoding($company->getCurrentPlanLabel(), 'UTF-8', 'auto'));
            $sheet->setCellValue('H' . $row, $company->isHmaActive() ? 'Actif' : 'Inactif');
            $sheet->setCellValue('I' . $row, $company->getCreatedAt()?->format('d/m/Y'));
            $sheet->setCellValue('J' . $row, $company->getActivatedAt()?->format('d/m/Y'));
            $sheet->setCellValue('K' . $row, $company->getTrialEndsAt()?->format('d/m/Y'));
            $sheet->setCellValue('L' . $row, $company->getSubscriptionEndsAt()?->format('d/m/Y'));
            $sheet->setCellValue('M' . $row, $company->getProductCount());
            $sheet->setCellValue('N' . $row, $company->getOrderCount());
            $sheet->setCellValue('O' . $row, $company->getUserCount());
            $row++;
        }

        // Auto-size columns
        foreach (range('A', 'O') as $col) {
            $sheet->getColumnDimension($col)->setAutoSize(true);
        }

        // ✅ Pour CSV, forcer l'encodage UTF-8 avec BOM
        if ($format === 'csv') {
            $writer = new Csv($spreadsheet);
            $writer->setUseBOM(true); // ✅ Ajoute BOM pour UTF-8
            $filename = 'entreprises_' . date('Y-m-d_His') . '.csv';
            $contentType = 'text/csv; charset=UTF-8';
        } else {
            $writer = new Xlsx($spreadsheet);
            $filename = 'entreprises_' . date('Y-m-d_His') . '.xlsx';
            $contentType = 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet';
        }

        ob_start();
        $writer->save('php://output');
        $content = ob_get_clean();

        return new Response($content, 200, [
            'Content-Type' => $contentType,
            'Content-Disposition' => 'attachment;filename="' . $filename . '"',
            'Cache-Control' => 'max-age=0',
        ]);
    }

    /**
     * Récupère les pharmacies d'une ville avec leurs périodes de garde
     */
    public function findPharmaciesByCityWithGuardPeriods(string $city, ?string $search = null, int $page = 1, int $limit = 12): array
    {
        $qb = $this->createQueryBuilder('h')
            ->where('h.city = :city')
            ->andWhere('h.companyType = :type')
            ->andWhere('h.isActive = :isActive')
            ->andWhere('h.isPublic = :isPublic')
            ->andWhere('h.company_public = :companyPublic')
            ->setParameter('city', $city)
            ->setParameter('type', 'pharmacy')
            ->setParameter('isActive', true)
            ->setParameter('isPublic', true)
            ->setParameter('companyPublic', true);

        if ($search) {
            $qb->andWhere('h.companyName LIKE :search')
               ->setParameter('search', '%' . $search . '%');
        }

        $qb->orderBy('h.companyName', 'ASC')
            ->setFirstResult(($page - 1) * $limit)
            ->setMaxResults($limit);

        return $qb->getQuery()->getResult();
    }

    /**
     * Compte les pharmacies d'une ville
     */
    public function countPharmaciesByCity(string $city, ?string $search = null): int
    {
        $qb = $this->createQueryBuilder('h')
            ->select('COUNT(h.id)')
            ->where('h.city = :city')
            ->andWhere('h.companyType = :type')
            ->andWhere('h.isActive = :isActive')
            ->andWhere('h.isPublic = :isPublic')
            ->andWhere('h.company_public = :companyPublic')
            ->setParameter('city', $city)
            ->setParameter('type', 'pharmacy')
            ->setParameter('isActive', true)
            ->setParameter('isPublic', true)
            ->setParameter('companyPublic', true);

        if ($search) {
            $qb->andWhere('h.companyName LIKE :search')
               ->setParameter('search', '%' . $search . '%');
        }

        return (int) $qb->getQuery()->getSingleScalarResult();
    }
}