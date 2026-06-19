<?php
// src/Controller/SuperAdmin/StatisticsController.php

namespace App\Controller\SuperAdmin;

use App\Repository\StatisticsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/super-admin/statistics')]
class StatisticsController extends AbstractController
{
    public function __construct(
        private StatisticsRepository $statisticsRepository
    ) {}

    #[Route('/', name: 'app_super_admin_statistics_index', methods: ['GET'])]
    public function index(Request $request): Response
    {
        $filters = $this->getFiltersFromRequest($request);
        
        // Récupérer les pages pour les tops
        $revenuePage = $request->query->getInt('revenue_page', 1);
        $ordersPage = $request->query->getInt('orders_page', 1);
        
        $stats = $this->statisticsRepository->getGlobalStats($filters);
        $timeline = $this->statisticsRepository->getTimelineStats($filters);
        $topRevenue = $this->statisticsRepository->getTopCompaniesPaginated('revenue', $revenuePage, 10, $filters);
        $topOrders = $this->statisticsRepository->getTopCompaniesPaginated('orders', $ordersPage, 10, $filters);
        $geographic = $this->statisticsRepository->getGeographicDistribution($filters);
        $conversion = $this->statisticsRepository->getConversionRate($filters);
        
        // Récupérer les types d'entreprises DISTINCTS depuis la base
        $companyTypes = $this->statisticsRepository->getDistinctCompanyTypes();
        
        return $this->render('super_admin/statistics/index.html.twig', [
            'stats' => $stats,
            'timeline' => $timeline,
            'top_revenue' => $topRevenue,
            'top_orders' => $topOrders,
            'geographic' => $geographic,
            'conversion' => $conversion,
            'filters' => $filters,
            'companyTypes' => $companyTypes,
            'plans' => ['trial', 'freemium', 'basic', 'premium']
        ]);
    }

    #[Route('/data', name: 'app_super_admin_statistics_data', methods: ['GET'])]
    public function getData(Request $request): JsonResponse
    {
        $filters = $this->getFiltersFromRequest($request);
        
        $revenuePage = $request->query->getInt('revenue_page', 1);
        $ordersPage = $request->query->getInt('orders_page', 1);
        
        return $this->json([
            'stats' => $this->statisticsRepository->getGlobalStats($filters),
            'timeline' => $this->statisticsRepository->getTimelineStats($filters),
            'top_revenue' => $this->statisticsRepository->getTopCompaniesPaginated('revenue', $revenuePage, 10, $filters),
            'top_orders' => $this->statisticsRepository->getTopCompaniesPaginated('orders', $ordersPage, 10, $filters),
            'geographic' => $this->statisticsRepository->getGeographicDistribution($filters),
            'conversion' => $this->statisticsRepository->getConversionRate($filters)
        ]);
    }

    #[Route('/export', name: 'app_super_admin_statistics_export', methods: ['GET'])]
    public function export(Request $request): Response
    {
        $filters = $this->getFiltersFromRequest($request);
        $topRevenue = $this->statisticsRepository->getTopCompaniesPaginated('revenue', 1, 1000, $filters);
        
        // Création du CSV
        $filename = 'statistiques_entreprises_' . date('Y-m-d_His') . '.csv';
        $handle = fopen('php://temp', 'w');
        
        // En-têtes
        fputcsv($handle, ['Rang', 'Entreprise', 'Chiffre d\'affaires', 'Devise', 'Plan', 'Statut']);
        
        // Données
        foreach ($topRevenue['items'] as $index => $company) {
            fputcsv($handle, [
                $index + 1,
                $company['name'],
                $company['value'],
                $company['currency'],
                $company['plan_label'],
                $company['active'] ? 'Actif' : 'Inactif'
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
        return [
            'search' => $request->query->get('search'),
            'plan' => $request->query->get('plan'),
            'company_type' => $request->query->get('company_type'),  // Gardez le tiret pour le template
            'status' => $request->query->get('status'),
            'date_from' => $request->query->get('date_from'),
            'date_to' => $request->query->get('date_to'),
        ];
    }
}