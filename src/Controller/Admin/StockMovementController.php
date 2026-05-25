<?php

namespace App\Controller\Admin;

use App\Entity\HmaService;
use App\Entity\StockMovement;
use App\Entity\User;
use App\Entity\SupplierCreditNote;
use App\Repository\ProductRepository;
use App\Repository\StockMovementRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

#[Route('/admin/stock-movement')]
final class StockMovementController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    private function getCurrentHmaService(): ?HmaService
    {
        $user = $this->getUser();
        if (!$user) return null;
        if ($user instanceof HmaService) return $user;
        if ($user instanceof \App\Entity\User) return $user->getHmaServiceId();
        return null;
    }

    private function checkAccess(): void
    {
        if (!$this->isGranted('ROLE_ADMIN') && 
            !$this->isGranted('ROLE_MANAGER') && 
            !$this->isGranted('ROLE_STOCK_MANAGER')) {
            throw new AccessDeniedException('Accès refusé. Vous devez être administrateur, manager ou responsable stock.');
        }
    }

    /**
     * Génère les libellés pour les types de mouvements
     */
    private function getMovementTypeLabels(array $types): array
    {
        $labels = [
            'purchase_in' => 'Achats',
            'sale_out' => 'Ventes',
            'return_in' => 'Retours clients',
            'return_out' => 'Retours fournisseurs',
            'adjustment_in' => 'Ajustements (+)',
            'adjustment_out' => 'Ajustements (-)',
            'transfer_in' => 'Transferts entrants',
            'transfer_out' => 'Transferts sortants',
        ];
        
        $result = [];
        foreach ($types as $type) {
            $result[$type] = $labels[$type] ?? ucfirst(str_replace('_', ' ', $type));
        }
        
        return $result;
    }

    /**
     * Génère la hiérarchie des types de mouvements pour le filtre
     */
    private function getMovementTypeHierarchy(): array
    {
        return [
            'Achats' => [
                'children' => [
                    'purchase_in' => ['label' => 'Achats (entrées)', 'icon' => 'fas fa-arrow-down']
                ],
                'icon' => 'fas fa-shopping-cart',
                'color' => 'success'
            ],
            'Ventes' => [
                'children' => [
                    'sale_out' => ['label' => 'Ventes (sorties)', 'icon' => 'fas fa-arrow-up']
                ],
                'icon' => 'fas fa-tag',
                'color' => 'danger'
            ],
            'Ajustements' => [
                'children' => [
                    'adjustment_in' => ['label' => 'Entrées (+)', 'icon' => 'fas fa-plus-circle'],
                    'adjustment_out' => ['label' => 'Sorties (-)', 'icon' => 'fas fa-minus-circle']
                ],
                'icon' => 'fas fa-pencil-alt',
                'color' => 'warning'
            ],
            'Retours' => [
                'children' => [
                    'return_in' => ['label' => 'Retours clients (entrées)', 'icon' => 'fas fa-arrow-down'],
                    'return_out' => ['label' => 'Retours fournisseurs (sorties)', 'icon' => 'fas fa-arrow-up']
                ],
                'icon' => 'fas fa-undo-alt',
                'color' => 'primary'
            ],
            'Transferts' => [
                'children' => [
                    'transfer_in' => ['label' => 'Transferts entrants (+)', 'icon' => 'fas fa-arrow-right'],
                    'transfer_out' => ['label' => 'Transferts sortants (-)', 'icon' => 'fas fa-arrow-left']
                ],
                'icon' => 'fas fa-exchange-alt',
                'color' => 'info'
            ]
        ];
    }

    #[Route('/', name: 'app_admin_stock_movement_index', methods: ['GET'])]
    public function index(
        Request $request,
        StockMovementRepository $movementRepository,
        ProductRepository $productRepository,
        UserRepository $userRepository
    ): Response {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) {
            throw new AccessDeniedException('Aucun service associé.');
        }

        // Récupération des filtres
        $filters = [
            'search' => $request->query->get('search', ''),
            'movement_type' => $request->query->get('movement_type', ''),
            'user_id' => $request->query->get('user_id', ''),
            'user_role' => $request->query->get('user_role', ''),
            'date_from' => $request->query->get('date_from', ''),
            'date_to' => $request->query->get('date_to', ''),
            'sort' => $request->query->get('sort', 'created_at'),
            'direction' => $request->query->get('direction', 'desc'),
        ];

        $page = $request->query->getInt('page', 1);
        $limit = 20;

        // Liste des produits pour le filtre recherche
        $products = $productRepository->findBy(['hma_service' => $hmaService, 'is_active' => true], ['name' => 'ASC']);

        // Liste des utilisateurs filtrée par rôle
        $usersQuery = $userRepository->createQueryBuilder('u')
            ->innerJoin('u.stockMovements', 'sm')
            ->innerJoin('sm.hma_service', 'h')
            ->where('h.id = :hmaServiceId')
            ->setParameter('hmaServiceId', $hmaService->getId())
            ->groupBy('u.id')
            ->orderBy('u.full_name', 'ASC');
        
        if (!empty($filters['user_role'])) {
            $usersQuery->andWhere('u.roles LIKE :role')
                       ->setParameter('role', '%' . $filters['user_role'] . '%');
        }
        
        $usersWithMovements = $usersQuery->getQuery()->getResult();

        // Récupération des types de mouvements distincts
        $distinctTypes = $movementRepository->getDistinctMovementTypes($hmaService);
        $movementTypeLabels = $this->getMovementTypeLabels($distinctTypes);
        $movementHierarchy = $this->getMovementTypeHierarchy();

        // Gestion des filtres de catégorie
        $movementTypeFilter = $filters['movement_type'];
        $categoryTypes = [];
        
        // Vérifier si c'est un filtre de catégorie
        $categoryMapping = [
            'all_achats' => ['purchase_in'],
            'all_ventes' => ['sale_out'],
            'all_ajustements' => ['adjustment_in', 'adjustment_out'],
            'all_retours' => ['return_in', 'return_out'],
            'all_transferts' => ['transfer_in', 'transfer_out']
        ];
        
        if (isset($categoryMapping[$movementTypeFilter])) {
            $categoryTypes = $categoryMapping[$movementTypeFilter];
            $movementTypeFilter = '';
        }

        // Récupération des statistiques par type
        $movementTypeStats = $movementRepository->getMovementTypeStats(
            $hmaService,
            $filters['search'],
            $filters['user_id'] ? (int)$filters['user_id'] : null,
            $filters['date_from'] ? new \DateTime($filters['date_from']) : null,
            $filters['date_to'] ? new \DateTime($filters['date_to']) : null
        );

        // Récupération des mouvements paginés
        $paginator = $movementRepository->findFilteredForHmaService(
            $hmaService,
            $filters['search'],
            $movementTypeFilter,
            $filters['user_id'] ? (int)$filters['user_id'] : null,
            $filters['date_from'] ? new \DateTime($filters['date_from']) : null,
            $filters['date_to'] ? new \DateTime($filters['date_to']) : null,
            $filters['sort'],
            $filters['direction'],
            $page,
            $limit
        );

        // ✅ CORRECTION : Si on filtre par catégorie, filtrer les résultats
        if (!empty($categoryTypes)) {
            $allMovements = [];
            foreach ($paginator as $movement) {
                $allMovements[] = $movement;
            }
            
            $filteredMovements = array_filter($allMovements, function($movement) use ($categoryTypes) {
                return in_array($movement->getMovementType(), $categoryTypes);
            });
            
            $paginator = array_values($filteredMovements);
        }

        // Statistiques générales
        $stats = $this->calculateStats($movementRepository, $hmaService, $filters, $movementTypeStats);

        // ✅ CORRECTION : Calcul du total d'items
        if (is_array($paginator)) {
            $totalItems = count($paginator);
            $totalPages = ceil($totalItems / $limit);
        } else {
            $totalItems = $paginator->count();
            $totalPages = ceil($totalItems / $limit);
        }

        return $this->render('admin/stock_movement/index.html.twig', [
            'movements' => $paginator,
            'products' => $products,
            'users' => $usersWithMovements,
            'stats' => $stats,
            'movementTypeStats' => $movementTypeStats,
            'movementTypeLabels' => $movementTypeLabels,
            'movementHierarchy' => $movementHierarchy,
            'distinctTypes' => $distinctTypes,
            'totalPages' => $totalPages,
            'currentPage' => $page,
            'hmaService' => $hmaService,
            'filters' => $filters,
        ]);
    }

    private function calculateStats(
        StockMovementRepository $repository,
        HmaService $hmaService,
        array $filters,
        array $movementTypeStats
    ): array {
        // Récupération de tous les mouvements filtrés pour les stats globales
        $allMovements = $repository->findAllFilteredForHmaService(
            $hmaService,
            $filters['search'],
            $filters['movement_type'],
            $filters['user_id'] ? (int)$filters['user_id'] : null,
            $filters['date_from'] ? new \DateTime($filters['date_from']) : null,
            $filters['date_to'] ? new \DateTime($filters['date_to']) : null,
            'created_at',
            'desc'
        );

        $totalIn = 0;
        $totalOut = 0;
        $totalQuantity = 0;

        foreach ($allMovements as $movement) {
            $quantity = $movement->getQuantity();
            $totalQuantity += $quantity;
            $type = $movement->getMovementType();
            
            // Entrées : purchase_in, return_in, adjustment_in, transfer_in
            if (in_array($type, ['purchase_in', 'return_in', 'adjustment_in', 'transfer_in'])) {
                $totalIn += $quantity;
            } 
            // Sorties : sale_out, return_out, adjustment_out, transfer_out
            else {
                $totalOut += $quantity;
            }
        }

        return [
            'total_movements' => count($allMovements),
            'total_quantity' => $totalQuantity,
            'total_in' => $totalIn,
            'total_out' => $totalOut,
            'by_type' => $movementTypeStats,
        ];
    }

    #[Route('/{id}/show', name: 'app_admin_stock_movement_show', methods: ['GET'])]
    public function show(StockMovement $stockMovement): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService || $stockMovement->getHmaService()->getId() !== $hmaService->getId()) {
            throw new AccessDeniedException('Accès non autorisé.');
        }

        return $this->render('admin/stock_movement/show.html.twig', [
            'movement' => $stockMovement,
        ]);
    }

    #[Route('/export/excel', name: 'app_admin_stock_movement_export_excel', methods: ['GET'])]
    public function exportExcel(
        Request $request,
        StockMovementRepository $movementRepository
    ): Response {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) {
            throw new AccessDeniedException('Aucun service associé.');
        }

        $filters = [
            'search' => $request->query->get('search', ''),
            'movement_type' => $request->query->get('movement_type', ''),
            'user_id' => $request->query->get('user_id', ''),
            'user_role' => $request->query->get('user_role', ''),
            'date_from' => $request->query->get('date_from', ''),
            'date_to' => $request->query->get('date_to', ''),
            'sort' => $request->query->get('sort', 'created_at'),
            'direction' => $request->query->get('direction', 'desc'),
        ];

        // Pour l'export, on récupère tous les mouvements (pas de pagination)
        $movements = $movementRepository->findAllFilteredForHmaService(
            $hmaService,
            $filters['search'],
            $filters['movement_type'],
            $filters['user_id'] ? (int)$filters['user_id'] : null,
            $filters['date_from'] ? new \DateTime($filters['date_from']) : null,
            $filters['date_to'] ? new \DateTime($filters['date_to']) : null,
            $filters['sort'],
            $filters['direction']
        );

        /** @var User $user */
        $user = $this->getUser();

        $spreadsheet = $this->generateExcelFile($movements, $filters, $hmaService, $user);
        
        $writer = new Xlsx($spreadsheet);
        $filename = 'export_mouvements_stock_' . (new \DateTime())->format('Ymd_His') . '.xlsx';
        
        $response = new Response();
        $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        $response->headers->set('Content-Disposition', 'attachment;filename="' . $filename . '"');
        $response->headers->set('Cache-Control', 'max-age=0');
        
        ob_start();
        $writer->save('php://output');
        $response->setContent(ob_get_clean());
        
        return $response;
    }

    #[Route('/export/pdf', name: 'app_admin_stock_movement_export_pdf', methods: ['GET'])]
    public function exportPdf(Request $request, StockMovementRepository $movementRepository): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) {
            throw new AccessDeniedException('Aucun service associé.');
        }

        $filters = [
            'search' => $request->query->get('search', ''),
            'movement_type' => $request->query->get('movement_type', ''),
            'user_id' => $request->query->get('user_id', ''),
            'user_role' => $request->query->get('user_role', ''),
            'date_from' => $request->query->get('date_from', ''),
            'date_to' => $request->query->get('date_to', ''),
            'sort' => $request->query->get('sort', 'created_at'),
            'direction' => $request->query->get('direction', 'desc'),
        ];

        $movements = $movementRepository->findAllFilteredForHmaService(
            $hmaService,
            $filters['search'],
            $filters['movement_type'],
            $filters['user_id'] ? (int)$filters['user_id'] : null,
            $filters['date_from'] ? new \DateTime($filters['date_from']) : null,
            $filters['date_to'] ? new \DateTime($filters['date_to']) : null,
            $filters['sort'],
            $filters['direction']
        );

        // Calcul des statistiques
        $totalIn = 0;
        $totalOut = 0;
        $totalQuantity = 0;
        foreach ($movements as $movement) {
            $qty = $movement->getQuantity();
            $totalQuantity += $qty;
            if (in_array($movement->getMovementType(), ['purchase_in', 'return_in', 'adjustment_in', 'transfer_in'])) {
                $totalIn += $qty;
            } else {
                $totalOut += $qty;
            }
        }

        /** @var User $user */
        $user = $this->getUser();

        $html = $this->renderView('admin/stock_movement/export_pdf.html.twig', [
            'movements' => $movements,
            'filters' => $filters,
            'hmaService' => $hmaService,
            'exportDate' => new \DateTime(),
            'totalIn' => $totalIn,
            'totalOut' => $totalOut,
            'totalQuantity' => $totalQuantity,
            'userName' => $user ? ($user->getFullName() ?: $user->getEmail()) : 'Inconnu',
            'userEmail' => $user ? $user->getEmail() : 'Inconnu',
        ]);

        $dompdf = new \Dompdf\Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();

        $filename = 'rapport_mouvements_stock_' . (new \DateTime())->format('Ymd_His') . '.pdf';

        return new Response($dompdf->output(), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ]);
    }

    #[Route('/print-multiple', name: 'app_admin_stock_movement_print_multiple', methods: ['GET'])]
    public function printMultiple(Request $request, StockMovementRepository $movementRepository): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        
        $ids = explode(',', $request->query->get('ids', ''));
        $movements = $movementRepository->findBy(['id' => $ids]);
        
        foreach ($movements as $movement) {
            if ($movement->getHmaService()->getId() !== $hmaService->getId()) {
                throw new AccessDeniedException('Accès non autorisé.');
            }
        }
        
        return $this->render('admin/stock_movement/print_multiple.html.twig', [
            'movements' => $movements,
        ]);
    }

    private function generateExcelFile($movements, array $filters, HmaService $hmaService, $user): Spreadsheet
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setTitle('Mouvements de Stock');

        $titleStyle = [
            'font' => ['bold' => true, 'size' => 14, 'color' => ['rgb' => '2E86C1']],
            'alignment' => ['horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER]
        ];

        $headerStyle = [
            'font' => ['bold' => true, 'color' => ['rgb' => 'FFFFFF'], 'size' => 11],
            'fill' => ['fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID, 'startColor' => ['rgb' => '2E86C1']],
            'alignment' => ['horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER]
        ];

        $sectionStyle = [
            'font' => ['bold' => true, 'size' => 12],
            'fill' => ['fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID, 'startColor' => ['rgb' => 'E8F4FD']]
        ];

        $row = 1;
        $sheet->mergeCells('A' . $row . ':J' . $row);
        $sheet->setCellValue('A' . $row, 'RAPPORT DES MOUVEMENTS DE STOCK');
        $sheet->getStyle('A' . $row)->applyFromArray($titleStyle);
        $row++;

        $sheet->mergeCells('A' . $row . ':J' . $row);
        $sheet->setCellValue('A' . $row, 'Informations générales');
        $sheet->getStyle('A' . $row)->applyFromArray($sectionStyle);
        $row++;

        $sheet->setCellValue('A' . $row, 'Date d\'export :');
        $sheet->setCellValue('B' . $row, (new \DateTime())->format('d/m/Y H:i:s'));
        $sheet->mergeCells('B' . $row . ':J' . $row);
        $row++;

        $sheet->setCellValue('A' . $row, 'Entreprise :');
        $sheet->setCellValue('B' . $row, $hmaService->getCompanyName());
        $sheet->mergeCells('B' . $row . ':J' . $row);
        $row++;

        $sheet->setCellValue('A' . $row, 'Exporté par :');
        $sheet->setCellValue('B' . $row, $user ? ($user->getFullName() ?: $user->getEmail()) : 'Inconnu');
        $sheet->mergeCells('B' . $row . ':J' . $row);
        $row++;

        $sheet->setCellValue('A' . $row, 'Email :');
        $sheet->setCellValue('B' . $row, $user ? $user->getEmail() : 'Inconnu');
        $sheet->mergeCells('B' . $row . ':J' . $row);
        $row++;
        $row++;

        $sheet->mergeCells('A' . $row . ':J' . $row);
        $sheet->setCellValue('A' . $row, 'FILTRES APPLIQUÉS');
        $sheet->getStyle('A' . $row)->applyFromArray($sectionStyle);
        $row++;

        $filterLabels = [
            'Recherche' => $filters['search'] ?: 'Aucun',
            'Type de mouvement' => $filters['movement_type'] ?: 'Tous',
            'Date du' => $filters['date_from'] ?: 'Non spécifiée',
            'Date au' => $filters['date_to'] ?: 'Non spécifiée',
        ];

        foreach ($filterLabels as $label => $value) {
            $sheet->setCellValue('A' . $row, $label . ' :');
            $sheet->setCellValue('B' . $row, $value);
            $sheet->mergeCells('B' . $row . ':J' . $row);
            $row++;
        }
        $row++;
        $row++;

        $sheet->mergeCells('A' . $row . ':J' . $row);
        $sheet->setCellValue('A' . $row, 'STATISTIQUES');
        $sheet->getStyle('A' . $row)->applyFromArray($sectionStyle);
        $row++;

        $totalQuantity = 0;
        $totalIn = 0;
        $totalOut = 0;
        foreach ($movements as $movement) {
            $qty = $movement->getQuantity();
            $totalQuantity += $qty;
            if (in_array($movement->getMovementType(), ['purchase_in', 'return_in', 'adjustment_in', 'transfer_in'])) {
                $totalIn += $qty;
            } else {
                $totalOut += $qty;
            }
        }

        $sheet->setCellValue('A' . $row, 'Nombre total de mouvements :');
        $sheet->setCellValue('B' . $row, count($movements));
        $row++;

        $sheet->setCellValue('A' . $row, 'Quantité totale :');
        $sheet->setCellValue('B' . $row, $totalQuantity . ' unités');
        $row++;

        $sheet->setCellValue('A' . $row, 'Entrées :');
        $sheet->setCellValue('B' . $row, $totalIn . ' unités');
        $row++;

        $sheet->setCellValue('A' . $row, 'Sorties :');
        $sheet->setCellValue('B' . $row, $totalOut . ' unités');
        $row++;
        $row++;

        $sheet->mergeCells('A' . $row . ':J' . $row);
        $sheet->setCellValue('A' . $row, 'LISTE DES MOUVEMENTS');
        $sheet->getStyle('A' . $row)->applyFromArray($sectionStyle);
        $row++;

        $headers = ['Date', 'Type', 'Produit', 'N° Lot', 'Quantité', 'Raison', 'Utilisateur', 'Référence'];
        $col = 'A';
        foreach ($headers as $header) {
            $sheet->setCellValue($col . $row, $header);
            $sheet->getStyle($col . $row)->applyFromArray($headerStyle);
            $col++;
        }
        $row++;

        foreach ($movements as $movement) {
            $col = 'A';
            $sheet->setCellValue($col++ . $row, $movement->getCreatedAt()->format('d/m/Y H:i:s'));
            $sheet->setCellValue($col++ . $row, $movement->getMovementTypeLabel());
            $sheet->setCellValue($col++ . $row, $movement->getStockBatch()?->getProduct()?->getName() ?? '—');
            $sheet->setCellValue($col++ . $row, $movement->getStockBatch()?->getBatchNumber() ?? '—');
            $sheet->setCellValue($col++ . $row, $movement->getQuantity());
            $sheet->setCellValue($col++ . $row, $movement->getNotes() ?? '—');
            $sheet->setCellValue($col++ . $row, $movement->getUser()?->getFullName() ?? '—');
            $sheet->setCellValue($col++ . $row, $movement->getReferenceId() ?? '—');
            $row++;
        }
        $row++;
        $row++;

        $sheet->mergeCells('A' . $row . ':J' . $row);
        $sheet->setCellValue('A' . $row, 'Document généré par HMA Market - ' . (new \DateTime())->format('d/m/Y H:i'));
        $sheet->getStyle('A' . $row)->getFont()->setItalic(true)->setSize(10);
        $sheet->getStyle('A' . $row)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);

        foreach (range('A', 'J') as $col) {
            $sheet->getColumnDimension($col)->setAutoSize(true);
        }
        
        return $spreadsheet;
    }
}