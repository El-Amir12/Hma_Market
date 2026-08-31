<?php
// src/Controller/SuperAdmin/AnalysisRequestController.php

namespace App\Controller\SuperAdmin;

use App\Entity\AnalysisRequest;
use App\Repository\AnalysisRequestRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/super-admin/analysis-requests')]
class AnalysisRequestController extends AbstractController
{
    public function __construct(
        private AnalysisRequestRepository $analysisRequestRepository,
        private EntityManagerInterface $entityManager
    ) {}

    #[Route('/', name: 'app_super_admin_analysis_request_index', methods: ['GET'])]
    public function index(Request $request): Response
    {
        $filters = $this->getFiltersFromRequest($request);
        $page = $request->query->getInt('page', 1);
        $limit = 20;
        
        // Récupérer les statistiques
        $stats = $this->analysisRequestRepository->getGlobalStats($filters);
        
        // Récupérer les demandes paginées
        $requests = $this->analysisRequestRepository->findByFiltersPaginated($filters, $page, $limit);
        
        // Récupérer les types d'analyse distincts
        $analysisTypes = $this->analysisRequestRepository->getDistinctAnalysisTypes();
        
        return $this->render('super_admin/analysis_request/index.html.twig', [
            'requests' => $requests['items'],
            'total' => $requests['total'],
            'total_pages' => $requests['total_pages'],
            'current_page' => $page,
            'limit' => $limit,
            'stats' => $stats,
            'filters' => $filters,
            'analysisTypes' => $analysisTypes,
            'statuses' => [
                AnalysisRequest::STATUS_PENDING => 'En attente',
                AnalysisRequest::STATUS_PAID => 'Payé',
                AnalysisRequest::STATUS_PROCESSING => 'En traitement',
                AnalysisRequest::STATUS_COMPLETED => 'Terminé',
                AnalysisRequest::STATUS_FAILED => 'Échec',
                AnalysisRequest::STATUS_EXPIRED => 'Expiré'
            ]
        ]);
    }

    #[Route('/data', name: 'app_super_admin_analysis_request_data', methods: ['GET'])]
    public function getData(Request $request): JsonResponse
    {
        $filters = $this->getFiltersFromRequest($request);
        $page = $request->query->getInt('page', 1);
        $limit = 20;
        
        $stats = $this->analysisRequestRepository->getGlobalStats($filters);
        $requests = $this->analysisRequestRepository->findByFiltersPaginated($filters, $page, $limit);
        
        return $this->json([
            'stats' => $stats,
            'requests' => $requests['items'],
            'total' => $requests['total'],
            'total_pages' => $requests['total_pages'],
            'current_page' => $page,
            'limit' => $limit
        ]);
    }

    #[Route('/{id}/show', name: 'app_super_admin_analysis_request_show', methods: ['GET'])]
    public function show(AnalysisRequest $analysisRequest): Response
    {
        return $this->render('super_admin/analysis_request/show.html.twig', [
            'request' => $analysisRequest
        ]);
    }

    #[Route('/export', name: 'app_super_admin_analysis_request_export', methods: ['GET'])]
    public function export(Request $request): Response
    {
        $filters = $this->getFiltersFromRequest($request);
        $requests = $this->analysisRequestRepository->findByFilters($filters, null, 1000);
        
        // Création du CSV
        $filename = 'demandes_analyse_' . date('Y-m-d_His') . '.csv';
        $handle = fopen('php://temp', 'w');
        
        // En-têtes
        fputcsv($handle, [
            'ID', 'Numéro de demande', 'Entreprise', 'Type', 'Montant', 
            'Statut', 'Période début', 'Période fin', 'Créée le', 'Payée le'
        ]);
        
        // Données
        foreach ($requests as $request) {
            fputcsv($handle, [
                $request->getId(),
                $request->getRequestNumber(),
                $request->getCompany()?->getCompanyName() ?? 'N/A',
                $request->getTypeLabel(),
                $request->getAmountFormatted(),
                $request->getStatusLabel(),
                $request->getPeriodStart()?->format('d/m/Y') ?? 'N/A',
                $request->getPeriodEnd()?->format('d/m/Y') ?? 'N/A',
                $request->getCreatedAt()?->format('d/m/Y H:i') ?? 'N/A',
                $request->getPaidAt()?->format('d/m/Y H:i') ?? 'N/A'
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
            'type' => $request->query->get('type'),
            'status' => $request->query->get('status'),
            'date_from' => $request->query->get('date_from'),
            'date_to' => $request->query->get('date_to'),
            'company' => $request->query->get('company'),
        ];
    }
}