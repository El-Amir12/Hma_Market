<?php
// src/Controller/Report/SalesReportController.php

namespace App\Controller\Report;

use App\Entity\HmaService;
use App\Service\Report\SalesReportService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

#[Route('/reports/sales')]
class SalesReportController extends AbstractController
{
    private const CURRENCY_MAP = [
        'CM' => 'XAF',
        'CI' => 'XOF',
        'SN' => 'XOF',
        'FR' => 'EUR',
        'US' => 'USD',
        'BJ' => 'FCFA',
        'TG' => 'XOF',
        'ML' => 'XOF',
        'BF' => 'XOF',
        'NE' => 'XOF',
        'GA' => 'XAF',
        'CG' => 'XAF',
        'CD' => 'CDF',
        'MA' => 'MAD',
        'TN' => 'TND',
        'DZ' => 'DZD',
    ];

    public function __construct(
        private EntityManagerInterface $entityManager,
        private SalesReportService $salesReportService
    ) {}

    private function getCurrentHmaService(): ?HmaService
    {
        $user = $this->getUser();
        if (!$user) return null;
        
        if ($user instanceof HmaService) return $user;
        
        if (method_exists($user, 'getHmaService')) {
            return $user->getHmaService();
        }
        
        return null;
    }

    private function getCurrency(): string
    {
        $hmaService = $this->getCurrentHmaService();
        $countryCode = $hmaService?->getCountry();
        
        return self::CURRENCY_MAP[$countryCode] ?? 'FCFA';
    }

    private function checkAccess(): void
    {
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) {
            throw new AccessDeniedException('Accès non autorisé');
        }
        
        if (!$this->isGranted('ROLE_ADMIN') && !$this->isGranted('ROLE_MANAGER')) {
            throw new AccessDeniedException('Seuls les administrateurs et managers peuvent accéder aux rapports de ventes.');
        }
    }

    private function isRestaurant(): bool
    {
        $hmaService = $this->getCurrentHmaService();
        return $hmaService?->getType() === 'restaurant';
    }

    #[Route('/', name: 'app_sales_report_index', methods: ['GET'])]
    public function index(Request $request): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        $isRestaurant = $this->isRestaurant();
        $currency = $this->getCurrency();

        // Récupérer les filtres
        $filters = $this->getFiltersFromRequest($request);
        
        // KPI principaux
        $kpis = $this->salesReportService->getKPIs($hmaService, $filters);
        
        // Évolution temporelle
        $timeline = $this->salesReportService->getTimelineStats($hmaService, $filters);
        
        // Top produits/recettes
        $topSelling = $this->salesReportService->getTopSelling($hmaService, $filters, $isRestaurant);
        
        // Analyse des promotions
        $promotionImpact = $this->salesReportService->getPromotionImpact($hmaService, $filters);
        
        // Répartition des ventes
        $salesDistribution = $this->salesReportService->getSalesDistribution($hmaService, $filters, $isRestaurant);
        
        // Ventes par période (jour/semaine/mois)
        $salesByPeriod = $this->salesReportService->getSalesByPeriod($hmaService, $filters);
        
        // Performance par caissier
        $cashierPerformance = $this->salesReportService->getCashierPerformance($hmaService, $filters);
        
        // Pour les restaurants : top recettes avec détails
        $topRecipes = [];
        if ($isRestaurant) {
            $topRecipes = $this->salesReportService->getTopRecipes($hmaService, $filters);
        }
        
        return $this->render('reports/sales/index.html.twig', [
            'kpis' => $kpis,
            'timeline' => $timeline,
            'top_selling' => $topSelling,
            'promotion_impact' => $promotionImpact,
            'sales_distribution' => $salesDistribution,
            'sales_by_period' => $salesByPeriod,
            'cashier_performance' => $cashierPerformance,
            'top_recipes' => $topRecipes,
            'filters' => $filters,
            'is_restaurant' => $isRestaurant,
            'currency' => $currency,
            'company_name' => $hmaService->getCompanyName(),
            'date_presets' => [
                'today' => "Aujourd'hui",
                'yesterday' => 'Hier',
                'this_week' => 'Cette semaine',
                'last_week' => 'Semaine dernière',
                'this_month' => 'Ce mois-ci',
                'last_month' => 'Mois dernier',
                'this_quarter' => 'Ce trimestre',
                'this_year' => 'Cette année',
                'last_year' => 'Année dernière',
            ]
        ]);
    }

    #[Route('/data', name: 'app_sales_report_data', methods: ['GET'])]
    public function getData(Request $request): JsonResponse
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        $isRestaurant = $this->isRestaurant();
        
        $filters = $this->getFiltersFromRequest($request);
        
        $data = [
            'kpis' => $this->salesReportService->getKPIs($hmaService, $filters),
            'timeline' => $this->salesReportService->getTimelineStats($hmaService, $filters),
            'top_selling' => $this->salesReportService->getTopSelling($hmaService, $filters, $isRestaurant),
            'promotion_impact' => $this->salesReportService->getPromotionImpact($hmaService, $filters),
            'sales_distribution' => $this->salesReportService->getSalesDistribution($hmaService, $filters, $isRestaurant),
            'sales_by_period' => $this->salesReportService->getSalesByPeriod($hmaService, $filters),
            'cashier_performance' => $this->salesReportService->getCashierPerformance($hmaService, $filters),
        ];
        
        if ($isRestaurant) {
            $data['top_recipes'] = $this->salesReportService->getTopRecipes($hmaService, $filters);
        }
        
        return $this->json($data);
    }

    #[Route('/export', name: 'app_sales_report_export', methods: ['GET'])]
    public function export(Request $request): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        $isRestaurant = $this->isRestaurant();
        $currency = $this->getCurrency();
        $filters = $this->getFiltersFromRequest($request);
        
        $kpis = $this->salesReportService->getKPIs($hmaService, $filters);
        $topSelling = $this->salesReportService->getTopSelling($hmaService, $filters, $isRestaurant);
        
        // Création du CSV
        $filename = 'rapport_ventes_' . date('Y-m-d_His') . '.csv';
        $handle = fopen('php://temp', 'w');
        
        // En-têtes UTF-8
        fprintf($handle, chr(0xEF).chr(0xBB).chr(0xBF));
        
        // Section KPIs
        fputcsv($handle, ['=== INDICATEURS DE VENTES ===', '']);
        fputcsv($handle, ['Chiffre d\'affaires (HT)', number_format($kpis['revenue'] ?? 0, 0, ',', ' ') . ' ' . $currency]);
        fputcsv($handle, ['Nombre de ventes', number_format($kpis['total_orders'] ?? 0, 0, ',', ' ')]);
        fputcsv($handle, ['Panier moyen', number_format($kpis['average_basket'] ?? 0, 0, ',', ' ') . ' ' . $currency]);
        fputcsv($handle, ['Total des remises', number_format($kpis['total_discount'] ?? 0, 0, ',', ' ') . ' ' . $currency]);
        fputcsv($handle, ['Articles vendus', number_format($kpis['total_items'] ?? 0, 0, ',', ' ')]);
        
        // Section top ventes
        fputcsv($handle, ['', '']);
        fputcsv($handle, ['=== TOP VENTES ===', '']);
        fputcsv($handle, ['Rang', 'Article', 'Quantité', 'CA']);
        foreach ($topSelling as $index => $item) {
            fputcsv($handle, [
                $index + 1,
                $item['name'],
                $item['total_quantity'],
                number_format($item['total_revenue'], 0, ',', ' ') . ' ' . $currency,
            ]);
        }
        
        rewind($handle);
        $content = stream_get_contents($handle);
        fclose($handle);
        
        return new Response($content, 200, [
            'Content-Type' => 'text/csv; charset=UTF-8',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"'
        ]);
    }

    private function getFiltersFromRequest(Request $request): array
    {
        $datePreset = $request->query->get('date_preset');
        $dateFrom = $request->query->get('date_from');
        $dateTo = $request->query->get('date_to');
        
        // Gérer les presets de date
        if ($datePreset && !$dateFrom && !$dateTo) {
            switch ($datePreset) {
                case 'today':
                    $dateFrom = (new \DateTime())->format('Y-m-d');
                    $dateTo = (new \DateTime())->format('Y-m-d');
                    break;
                case 'yesterday':
                    $dateFrom = (new \DateTime('-1 day'))->format('Y-m-d');
                    $dateTo = (new \DateTime('-1 day'))->format('Y-m-d');
                    break;
                case 'this_week':
                    $dateFrom = (new \DateTime('monday this week'))->format('Y-m-d');
                    $dateTo = (new \DateTime('sunday this week'))->format('Y-m-d');
                    break;
                case 'last_week':
                    $dateFrom = (new \DateTime('monday last week'))->format('Y-m-d');
                    $dateTo = (new \DateTime('sunday last week'))->format('Y-m-d');
                    break;
                case 'this_month':
                    $dateFrom = (new \DateTime('first day of this month'))->format('Y-m-d');
                    $dateTo = (new \DateTime('last day of this month'))->format('Y-m-d');
                    break;
                case 'last_month':
                    $dateFrom = (new \DateTime('first day of last month'))->format('Y-m-d');
                    $dateTo = (new \DateTime('last day of last month'))->format('Y-m-d');
                    break;
                case 'this_quarter':
                    $month = (int) date('n');
                    $quarter = ceil($month / 3);
                    $year = date('Y');
                    $startMonth = ($quarter - 1) * 3 + 1;
                    $dateFrom = date('Y-m-d', strtotime($year . '-' . $startMonth . '-01'));
                    $dateTo = date('Y-m-d', strtotime($dateFrom . ' +3 months -1 day'));
                    break;
                case 'this_year':
                    $dateFrom = (new \DateTime('first day of January'))->format('Y-m-d');
                    $dateTo = (new \DateTime('last day of December'))->format('Y-m-d');
                    break;
                case 'last_year':
                    $dateFrom = (new \DateTime('first day of January last year'))->format('Y-m-d');
                    $dateTo = (new \DateTime('last day of December last year'))->format('Y-m-d');
                    break;
            }
        }
        
        return [
            'date_preset' => $datePreset,
            'date_from' => $dateFrom,
            'date_to' => $dateTo,
            'payment_method' => $request->query->get('payment_method'),
            'cashier_id' => $request->query->get('cashier_id'),
        ];
    }
}