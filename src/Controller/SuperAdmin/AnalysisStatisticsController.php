<?php
// src/Controller/SuperAdmin/AnalysisStatisticsController.php

namespace App\Controller\SuperAdmin;

use App\Repository\AnalysisRequestRepository;
use App\Repository\AnalysisPriceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/super-admin/analysis-statistics')]
class AnalysisStatisticsController extends AbstractController
{
    public function __construct(
        private AnalysisRequestRepository $analysisRequestRepository,
        private AnalysisPriceRepository $analysisPriceRepository
    ) {}

    #[Route('/', name: 'app_super_admin_analysis_statistics_index', methods: ['GET'])]
    public function index(Request $request): Response
    {
        $filters = $this->getFiltersFromRequest($request);
        
        // Récupérer les statistiques globales
        $stats = $this->analysisRequestRepository->getGlobalStats($filters);
        
        // Récupérer l'évolution des demandes
        $timeline = $this->analysisRequestRepository->getTimelineStats($filters);
        
        // Récupérer la répartition par type
        $typeDistribution = $this->getTypeDistribution($filters);
        
        // Récupérer les statistiques par entreprise
        $companyStats = $this->getCompanyStats($filters);
        
        // Récupérer le taux de conversion
        $conversion = $this->analysisRequestRepository->getConversionRate($filters);
        
        // Récupérer les types d'analyse distincts
        $analysisTypes = $this->analysisRequestRepository->getDistinctAnalysisTypes();
        
        return $this->render('super_admin/analysis_statistics/index.html.twig', [
            'stats' => $stats,
            'timeline' => $timeline,
            'type_distribution' => $typeDistribution,
            'company_stats' => $companyStats,
            'conversion' => $conversion,
            'filters' => $filters,
            'analysisTypes' => $analysisTypes,
            'statuses' => [
                'pending' => 'En attente',
                'paid' => 'Payé',
                'processing' => 'En traitement',
                'completed' => 'Terminé',
                'failed' => 'Échec',
                'expired' => 'Expiré'
            ]
        ]);
    }

    #[Route('/data', name: 'app_super_admin_analysis_statistics_data', methods: ['GET'])]
    public function getData(Request $request): JsonResponse
    {
        $filters = $this->getFiltersFromRequest($request);
        
        return $this->json([
            'stats' => $this->analysisRequestRepository->getGlobalStats($filters),
            'timeline' => $this->analysisRequestRepository->getTimelineStats($filters),
            'type_distribution' => $this->getTypeDistribution($filters),
            'company_stats' => $this->getCompanyStats($filters),
            'conversion' => $this->analysisRequestRepository->getConversionRate($filters)
        ]);
    }

    #[Route('/export', name: 'app_super_admin_analysis_statistics_export', methods: ['GET'])]
    public function export(Request $request): Response
    {
        $filters = $this->getFiltersFromRequest($request);
        $stats = $this->analysisRequestRepository->getGlobalStats($filters);
        
        // Création du CSV
        $filename = 'statistiques_analyses_' . date('Y-m-d_His') . '.csv';
        $handle = fopen('php://temp', 'w');
        
        // En-têtes
        fputcsv($handle, ['Métrique', 'Valeur']);
        
        // Données
        fputcsv($handle, ['Total des demandes', $stats['total']]);
        fputcsv($handle, ['En attente', $stats['pending']]);
        fputcsv($handle, ['Payées', $stats['paid']]);
        fputcsv($handle, ['En traitement', $stats['processing']]);
        fputcsv($handle, ['Terminées', $stats['completed']]);
        fputcsv($handle, ['Échec', $stats['failed']]);
        fputcsv($handle, ['Expirées', $stats['expired']]);
        fputcsv($handle, ['Montant total', $stats['total_amount'] . ' FCFA']);
        
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
            'type' => $request->query->get('type'),
            'status' => $request->query->get('status'),
            'date_from' => $request->query->get('date_from'),
            'date_to' => $request->query->get('date_to'),
        ];
    }

    /**
     * Récupère la répartition des demandes par type d'analyse
     */
    private function getTypeDistribution(array $filters): array
    {
        return $this->analysisRequestRepository->getTypeDistribution($filters);
    }

    /**
     * Récupère les statistiques par entreprise (Top 10)
     */
    private function getCompanyStats(array $filters): array
    {
        return $this->analysisRequestRepository->getCompanyStats($filters);
    }
}