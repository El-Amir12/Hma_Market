<?php
// src/Controller/Report/StockReportController.php

namespace App\Controller\Report;

use App\Entity\HmaService;
use App\Service\Report\StockReportService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

#[Route('/reports/stock')]
class StockReportController extends AbstractController
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
        private StockReportService $stockReportService
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
        
        if (!$this->isGranted('ROLE_ADMIN') && !$this->isGranted('ROLE_MANAGER') && !$this->isGranted('ROLE_STOCK_MANAGER')) {
            throw new AccessDeniedException('Seuls les administrateurs, managers et responsables stock peuvent accéder aux rapports de stock.');
        }
    }

    private function isRestaurant(): bool
    {
        $hmaService = $this->getCurrentHmaService();
        return $hmaService?->getType() === 'restaurant';
    }

    #[Route('/', name: 'app_stock_report_index', methods: ['GET'])]
    public function index(Request $request): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        $isRestaurant = $this->isRestaurant();
        $currency = $this->getCurrency();

        // Récupérer les filtres
        $filters = $this->getFiltersFromRequest($request);
        
        // KPIs du stock
        $kpis = $this->stockReportService->getStockKPIs($hmaService, $filters);
        
        // Produits avec stock faible/rupture
        $lowStockProducts = $this->stockReportService->getLowStockProducts($hmaService, $filters);
        
        // Valeur du stock par catégorie
        $stockValueByCategory = $this->stockReportService->getStockValueByCategory($hmaService, $filters);
        
        // Mouvements de stock récents
        $recentMovements = $this->stockReportService->getRecentMovements($hmaService, $filters);
        
        // Top produits par valeur en stock
        $topProductsByValue = $this->stockReportService->getTopProductsByValue($hmaService, $filters);
        
        // Évolution du stock (timeline)
        $stockTimeline = $this->stockReportService->getStockTimeline($hmaService, $filters);
        
        // Pour les restaurants : ingrédients les plus utilisés
        $topIngredients = [];
        if ($isRestaurant) {
            $topIngredients = $this->stockReportService->getTopIngredients($hmaService, $filters);
        }
        
        // Alertes de péremption
        $expiryAlerts = $this->stockReportService->getExpiryAlerts($hmaService, $filters);
        
        return $this->render('reports/stock/index.html.twig', [
            'kpis' => $kpis,
            'low_stock_products' => $lowStockProducts,
            'stock_value_by_category' => $stockValueByCategory,
            'recent_movements' => $recentMovements,
            'top_products_by_value' => $topProductsByValue,
            'stock_timeline' => $stockTimeline,
            'top_ingredients' => $topIngredients,
            'expiry_alerts' => $expiryAlerts,
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

    #[Route('/data', name: 'app_stock_report_data', methods: ['GET'])]
    public function getData(Request $request): JsonResponse
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        $isRestaurant = $this->isRestaurant();
        
        $filters = $this->getFiltersFromRequest($request);
        
        $data = [
            'kpis' => $this->stockReportService->getStockKPIs($hmaService, $filters),
            'low_stock_products' => $this->stockReportService->getLowStockProducts($hmaService, $filters),
            'stock_value_by_category' => $this->stockReportService->getStockValueByCategory($hmaService, $filters),
            'recent_movements' => $this->stockReportService->getRecentMovements($hmaService, $filters),
            'top_products_by_value' => $this->stockReportService->getTopProductsByValue($hmaService, $filters),
            'stock_timeline' => $this->stockReportService->getStockTimeline($hmaService, $filters),
            'expiry_alerts' => $this->stockReportService->getExpiryAlerts($hmaService, $filters),
        ];
        
        if ($isRestaurant) {
            $data['top_ingredients'] = $this->stockReportService->getTopIngredients($hmaService, $filters);
        }
        
        return $this->json($data);
    }

    #[Route('/export', name: 'app_stock_report_export', methods: ['GET'])]
    public function export(Request $request): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        $currency = $this->getCurrency();
        $filters = $this->getFiltersFromRequest($request);
        
        $kpis = $this->stockReportService->getStockKPIs($hmaService, $filters);
        $lowStockProducts = $this->stockReportService->getLowStockProducts($hmaService, $filters);
        
        // Création du CSV
        $filename = 'rapport_stock_' . date('Y-m-d_His') . '.csv';
        $handle = fopen('php://temp', 'w');
        
        // En-têtes UTF-8
        fprintf($handle, chr(0xEF).chr(0xBB).chr(0xBF));
        
        // Section KPIs
        fputcsv($handle, ['=== INDICATEURS DE STOCK ===', '']);
        fputcsv($handle, ['Valeur totale du stock', number_format($kpis['total_value'] ?? 0, 0, ',', ' ') . ' ' . $currency]);
        fputcsv($handle, ['Nombre de produits', number_format($kpis['total_products'] ?? 0, 0, ',', ' ')]);
        fputcsv($handle, ['Produits en stock', number_format($kpis['products_in_stock'] ?? 0, 0, ',', ' ')]);
        fputcsv($handle, ['Produits en stock faible', number_format($kpis['low_stock_count'] ?? 0, 0, ',', ' ')]);
        fputcsv($handle, ['Produits en rupture', number_format($kpis['out_of_stock_count'] ?? 0, 0, ',', ' ')]);
        fputcsv($handle, ['Quantité totale', number_format($kpis['total_quantity'] ?? 0, 0, ',', ' ')]);
        
        // Section stocks faibles
        fputcsv($handle, ['', '']);
        fputcsv($handle, ['=== PRODUITS EN STOCK FAIBLE / RUPTURE ===', '']);
        fputcsv($handle, ['Produit', 'Stock actuel', 'Stock minimum', 'Statut', 'Valeur']);
        foreach ($lowStockProducts as $product) {
            fputcsv($handle, [
                $product['name'],
                $product['current_stock'],
                $product['min_stock'],
                $product['status'],
                number_format($product['value'], 0, ',', ' ') . ' ' . $currency,
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
            'category' => $request->query->get('category'),
            'status' => $request->query->get('status'),
        ];
    }
}