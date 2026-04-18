<?php
// src/Controller/SuperAdmin/SuperAdminExportController.php

namespace App\Controller\SuperAdmin;

use App\Entity\HmaService;
use App\Service\Export\SaleExportService;
use App\Repository\HmaServiceRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

#[Route('/super-admin/export')]
class SuperAdminExportController extends AbstractController
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private SaleExportService $saleExportService,
        private HmaServiceRepository $hmaServiceRepository
    ) {
    }

    private function checkSuperAdminAccess(): void
    {
        if (!$this->isGranted('ROLE_SUPER_ADMIN')) {
            throw new AccessDeniedException('Accès réservé au Super Administrateur.');
        }
    }

    #[Route('/', name: 'super_admin_export_index', methods: ['GET'])]
    public function index(Request $request): Response
    {
        $this->checkSuperAdminAccess();

        // Récupérer toutes les entreprises
        $companies = $this->hmaServiceRepository->findBy([], ['companyName' => 'ASC']);
        
        // Récupérer les filtres
        $filters = [
            'company_id' => $request->query->get('company_id'),
            'date_from' => $request->query->get('date_from'),
            'date_to' => $request->query->get('date_to'),
            'payment_method' => $request->query->get('payment_method'),
            'min_amount' => $request->query->get('min_amount'),
            'max_amount' => $request->query->get('max_amount'),
        ];

        // Si une entreprise est sélectionnée, récupérer ses statistiques
        $stats = null;
        if ($filters['company_id']) {
            $company = $this->hmaServiceRepository->find($filters['company_id']);
            if ($company) {
                $stats = $this->getCompanyStats($company, $filters);
            }
        }

        return $this->render('super_admin/export/index.html.twig', [
            'companies' => $companies,
            'filters' => $filters,
            'stats' => $stats,
            'payment_methods' => ['cash', 'card', 'mobile_money']
        ]);
    }

    #[Route('/export-excel', name: 'super_admin_export_excel', methods: ['GET'])]
    public function exportExcel(Request $request): Response
    {
        $this->checkSuperAdminAccess();

        $companyId = $request->query->get('company_id');
        if (!$companyId) {
            $this->addFlash('error', 'Veuillez sélectionner une entreprise.');
            return $this->redirectToRoute('super_admin_export_index');
        }

        $company = $this->hmaServiceRepository->find($companyId);
        if (!$company) {
            $this->addFlash('error', 'Entreprise non trouvée.');
            return $this->redirectToRoute('super_admin_export_index');
        }

        // Récupérer les filtres
        $filters = [
            'date_from' => $request->query->get('date_from'),
            'date_to' => $request->query->get('date_to'),
            'payment_method' => $request->query->get('payment_method'),
            'min_amount' => $request->query->get('min_amount'),
            'max_amount' => $request->query->get('max_amount'),
        ];

        try {
            // Générer l'export Excel
            return $this->saleExportService->exportSalesToExcel($company, $filters);
        } catch (\Exception $e) {
            $this->addFlash('error', 'Erreur lors de l\'export : ' . $e->getMessage());
            return $this->redirectToRoute('super_admin_export_index', ['company_id' => $companyId]);
        }
    }

    #[Route('/export-all', name: 'super_admin_export_all', methods: ['GET'])]
    public function exportAll(Request $request): Response
    {
        $this->checkSuperAdminAccess();

        $companies = $this->hmaServiceRepository->findBy(['isActive' => true], ['companyName' => 'ASC']);
        
        if (empty($companies)) {
            $this->addFlash('error', 'Aucune entreprise active trouvée.');
            return $this->redirectToRoute('super_admin_export_index');
        }

        // Récupérer les filtres communs
        $filters = [
            'date_from' => $request->query->get('date_from'),
            'date_to' => $request->query->get('date_to'),
        ];

        // Générer un fichier zip contenant tous les exports
        $zip = new \ZipArchive();
        $zipName = sprintf('exports_ventes_%s.zip', (new \DateTime())->format('Ymd_His'));
        $zipPath = sys_get_temp_dir() . '/' . $zipName;
        
        if ($zip->open($zipPath, \ZipArchive::CREATE) !== true) {
            $this->addFlash('error', 'Impossible de créer l\'archive ZIP.');
            return $this->redirectToRoute('super_admin_export_index');
        }

        foreach ($companies as $company) {
            try {
                // Générer l'export pour chaque entreprise
                $response = $this->saleExportService->exportSalesToExcel($company, $filters);
                
                // Récupérer le nom du fichier
                $contentDisposition = $response->headers->get('Content-Disposition');
                if ($contentDisposition && preg_match('/filename="([^"]+)"/', $contentDisposition, $matches)) {
                    $filename = $matches[1];
                    $filePath = $this->saleExportService->getExportDirectory() . '/' . $filename;
                    
                    if (file_exists($filePath)) {
                        // Nettoyer le nom pour le zip (enlever les caractères spéciaux)
                        $safeName = preg_replace('/[^a-zA-Z0-9_-]/', '_', $company->getCompanyName());
                        $zip->addFile($filePath, $safeName . '_' . $filename);
                    }
                }
            } catch (\Exception $e) {
                $this->addFlash('warning', sprintf('Erreur pour %s : %s', $company->getCompanyName(), $e->getMessage()));
            }
        }
        
        $zip->close();
        
        return $this->file($zipPath, $zipName);
    }

    private function getCompanyStats(HmaService $company, array $filters): array
    {
        $qb = $this->entityManager->createQueryBuilder();
        $qb->select('COUNT(o.id) as total_orders', 'SUM(o.total_amount) as total_revenue')
           ->from('App\Entity\Order', 'o')
           ->where('o.hma_service = :company')
           ->setParameter('company', $company);
        
        if (!empty($filters['date_from'])) {
            $qb->andWhere('o.created_at >= :dateFrom')
               ->setParameter('dateFrom', new \DateTime($filters['date_from']));
        }
        
        if (!empty($filters['date_to'])) {
            $qb->andWhere('o.created_at <= :dateTo')
               ->setParameter('dateTo', new \DateTime($filters['date_to']));
        }
        
        if (!empty($filters['payment_method'])) {
            $qb->andWhere('o.payment_method = :paymentMethod')
               ->setParameter('paymentMethod', $filters['payment_method']);
        }
        
        $result = $qb->getQuery()->getOneOrNullResult();
        
        return [
            'total_orders' => $result['total_orders'] ?? 0,
            'total_revenue' => $result['total_revenue'] ?? 0,
        ];
    }
}