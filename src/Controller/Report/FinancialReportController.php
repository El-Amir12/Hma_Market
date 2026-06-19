<?php
// src/Controller/Report/FinancialReportController.php

namespace App\Controller\Report;

use App\Entity\HmaService;
use App\Repository\OrderRepository;
use App\Repository\OrderItemRepository;
use App\Repository\ProductRepository;
use App\Repository\RecipeRepository;
use App\Repository\PurchaseRepository;
use App\Repository\StockBatchRepository;
use App\Repository\PaymentRepository;
use App\Repository\SubscriptionRepository;
use App\Service\Report\FinancialCalculatorService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

#[Route('/reports/financial')]
class FinancialReportController extends AbstractController
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
        private FinancialCalculatorService $financialCalculator
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
            throw new AccessDeniedException('Seuls les administrateurs et managers peuvent accéder aux rapports financiers.');
        }
    }

    private function isRestaurant(): bool
    {
        $hmaService = $this->getCurrentHmaService();
        return $hmaService?->getType() === 'restaurant';
    }

    #[Route('/', name: 'app_financial_report_index', methods: ['GET'])]
    public function index(Request $request): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        $isRestaurant = $this->isRestaurant();
        $currency = $this->getCurrency();

        // Récupérer les filtres
        $filters = $this->getFiltersFromRequest($request);
        
        // Calculer les indicateurs financiers
        $indicators = $this->financialCalculator->calculateIndicators($hmaService, $filters);
        
        // Récupérer l'évolution temporelle
        $timeline = $this->financialCalculator->getTimelineStats($hmaService, $filters);
        
        // Top produits/recettes
        $topItems = $this->financialCalculator->getTopSellingItems($hmaService, $filters, $isRestaurant);
        
        // Répartition des paiements
        $paymentDistribution = $this->financialCalculator->getPaymentDistribution($hmaService, $filters);
        
        // Coût des ventes (COGS)
        $cogs = $this->financialCalculator->getCostOfGoodsSold($hmaService, $filters, $isRestaurant);
        
        // Marge par catégorie
        $marginByCategory = $this->financialCalculator->getMarginByCategory($hmaService, $filters, $isRestaurant);

        // Données d'abonnement
        $subscriptionPayments = $this->financialCalculator->getSubscriptionPayments($hmaService, $filters);
        $subscriptionStats = $this->financialCalculator->getSubscriptionStats($hmaService);
        $currentPlan = $hmaService->getCurrentPlan();

        // Pour les restaurants : ventes par recette (NOUVEAU)
        $recipeSales = [];
        $recipeSalesStats = [];
        if ($isRestaurant) {
            $recipeSales = $this->financialCalculator->getRecipeSales($hmaService, $filters);
            $recipeSalesStats = $this->financialCalculator->getRecipeSalesStats($hmaService, $filters);
        }
        
        return $this->render('reports/financial/index.html.twig', [
            'indicators' => $indicators,
            'timeline' => $timeline,
            'top_items' => $topItems,
            'payment_distribution' => $paymentDistribution,
            'cogs' => $cogs,
            'margin_by_category' => $marginByCategory,
            'filters' => $filters,
            'is_restaurant' => $isRestaurant,
            'currency' => $currency,
            'company_type' => $hmaService->getType(),
            'company_name' => $hmaService->getCompanyName(),
            'subscription_payments' => $subscriptionPayments,
            'subscription_stats' => $subscriptionStats,
            'current_plan' => $currentPlan,
            'recipe_sales' => $recipeSales,
            'recipe_sales_stats' => $recipeSalesStats,
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

    #[Route('/data', name: 'app_financial_report_data', methods: ['GET'])]
    public function getData(Request $request): JsonResponse
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        $isRestaurant = $this->isRestaurant();
        
        $filters = $this->getFiltersFromRequest($request);
        
        $data = [
            'indicators' => $this->financialCalculator->calculateIndicators($hmaService, $filters),
            'timeline' => $this->financialCalculator->getTimelineStats($hmaService, $filters),
            'top_items' => $this->financialCalculator->getTopSellingItems($hmaService, $filters, $isRestaurant),
            'payment_distribution' => $this->financialCalculator->getPaymentDistribution($hmaService, $filters),
            'cogs' => $this->financialCalculator->getCostOfGoodsSold($hmaService, $filters, $isRestaurant),
            'margin_by_category' => $this->financialCalculator->getMarginByCategory($hmaService, $filters, $isRestaurant),
            'subscription_payments' => $this->financialCalculator->getSubscriptionPayments($hmaService, $filters),
            'subscription_stats' => $this->financialCalculator->getSubscriptionStats($hmaService),
        ];
        
        // Ajouter les données spécifiques aux restaurants
        if ($isRestaurant) {
            $data['recipe_sales'] = $this->financialCalculator->getRecipeSales($hmaService, $filters);
            $data['recipe_sales_stats'] = $this->financialCalculator->getRecipeSalesStats($hmaService, $filters);
        }
        
        return $this->json($data);
    }

    #[Route('/export', name: 'app_financial_report_export', methods: ['GET'])]
    public function export(Request $request): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        $isRestaurant = $this->isRestaurant();
        $currency = $this->getCurrency();
        $filters = $this->getFiltersFromRequest($request);
        
        $indicators = $this->financialCalculator->calculateIndicators($hmaService, $filters);
        $subscriptionStats = $this->financialCalculator->getSubscriptionStats($hmaService);
        
        // Création du CSV
        $filename = 'rapport_financier_' . date('Y-m-d_His') . '.csv';
        $handle = fopen('php://temp', 'w');
        
        // En-têtes UTF-8
        fprintf($handle, chr(0xEF).chr(0xBB).chr(0xBF));
        
        // Section indicateurs globaux
        fputcsv($handle, ['=== INDICATEURS GLOBAUX ===', '']);
        fputcsv($handle, ['Chiffre d\'affaires (CA)', number_format($indicators['revenue'] ?? 0, 0, ',', ' ') . ' ' . $currency]);
        fputcsv($handle, ['Coût des ventes (COGS)', number_format($indicators['cogs'] ?? 0, 0, ',', ' ') . ' ' . $currency]);
        fputcsv($handle, ['Marge brute', number_format($indicators['gross_margin'] ?? 0, 0, ',', ' ') . ' ' . $currency]);
        fputcsv($handle, ['Marge brute (%)', number_format($indicators['gross_margin_percentage'] ?? 0, 1) . '%']);
        fputcsv($handle, ['Nombre de commandes', number_format($indicators['orders_count'] ?? 0, 0, ',', ' ')]);
        fputcsv($handle, ['Panier moyen', number_format($indicators['average_basket'] ?? 0, 0, ',', ' ') . ' ' . $currency]);
        fputcsv($handle, ['Clients uniques', number_format($indicators['unique_customers'] ?? 0, 0, ',', ' ')]);
        
        // Section restaurants
        if ($isRestaurant) {
            $recipeSalesStats = $this->financialCalculator->getRecipeSalesStats($hmaService, $filters);
            fputcsv($handle, ['', '']);
            fputcsv($handle, ['=== INDICATEURS RESTAURANT ===', '']);
            fputcsv($handle, ['Nombre total de recettes vendues', number_format($recipeSalesStats['total_quantity'] ?? 0, 0, ',', ' ')]);
            fputcsv($handle, ['CA généré par les recettes', number_format($recipeSalesStats['total_revenue'] ?? 0, 0, ',', ' ') . ' ' . $currency]);
            fputcsv($handle, ['Recettes différentes vendues', number_format($recipeSalesStats['unique_recipes'] ?? 0, 0, ',', ' ')]);
        }
        
        // Section abonnements
        fputcsv($handle, ['', '']);
        fputcsv($handle, ['=== ABONNEMENTS ===', '']);
        fputcsv($handle, ['Total payé', number_format($subscriptionStats['total_paid'] ?? 0, 0, ',', ' ') . ' ' . $currency]);
        fputcsv($handle, ['Dernier paiement le', $subscriptionStats['last_payment_date'] ?? '-']);
        fputcsv($handle, ['Montant dernier paiement', number_format($subscriptionStats['last_payment_amount'] ?? 0, 0, ',', ' ') . ' ' . $currency]);
        fputcsv($handle, ['Plan actuel', $subscriptionStats['current_plan'] ?? '-']);
        
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
            'payment_method' => $request->query->get('payment_method'),
        ];
    }
}