<?php

// src/Controller/Admin/StockBatchController.php
namespace App\Controller\Admin;

use App\Entity\HmaService;
use App\Entity\Location;
use App\Entity\Product;
use App\Entity\StockBatch;
use App\Form\StockBatchEditType;
use App\Repository\LocationRepository;
use App\Repository\ProductRepository;
use App\Repository\StockBatchRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

#[Route('/admin/stock-batch')]
final class StockBatchController extends AbstractController
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
        if ($user instanceof \App\Entity\User) return $user->getHmaService();
        return null;
    }

    private function checkStockManagementAccess(): void
    {
        if (!$this->isGranted('ROLE_ADMIN') && 
            !$this->isGranted('ROLE_MANAGER') && 
            !$this->isGranted('ROLE_STOCK_MANAGER')) {
            throw new AccessDeniedException('Accès refusé. Vous devez être administrateur, manager ou responsable stock.');
        }
    }

    private function checkDeleteAccess(): void
    {
        if (!$this->isGranted('ROLE_ADMIN')) {
            throw new AccessDeniedException('Seul l\'administrateur peut supprimer des lots.');
        }
    }

    #[Route('/all', name: 'app_admin_stock_batch_all', methods: ['GET'])]
    public function all(
        Request $request,
        StockBatchRepository $batchRepository,
        ProductRepository $productRepository,
        LocationRepository $locationRepository
    ): Response {
        $this->checkStockManagementAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) {
            throw new AccessDeniedException('Aucun service associé.');
        }

        $search = $request->query->get('search', '');
        $status = $request->query->get('status', '');
        $expiryStatus = $request->query->get('expiry_status', '');
        $dateFrom = $request->query->get('date_from', '');
        $dateTo = $request->query->get('date_to', '');
        $lowStock = $request->query->get('low_stock', '');
        $location = $request->query->get('location', '');
        $productIdParam = $request->query->get('product_id', '');
        $sort = $request->query->get('sort', 'expiry_date');
        $direction = $request->query->get('direction', 'asc');
        $page = $request->query->getInt('page', 1);
        $limit = 20;

        // Tous les produits pour le select (non filtrés)
        $products = $productRepository->findBy(['hma_service' => $hmaService, 'is_active' => true], ['name' => 'ASC']);

        // Tous les emplacements pour le filtre
        $allLocations = $locationRepository->findActiveByHmaService($hmaService);
        $allLocationNames = array_map(fn($l) => $l->getDisplayName(), $allLocations);

        // Convertir en int seulement si non vide, sinon null
        $productId = ($productIdParam !== '' && $productIdParam !== null) ? (int)$productIdParam : null;

        // Récupérer TOUS les lots filtrés (sans pagination) pour les statistiques
        $allFilteredBatches = $batchRepository->findFilteredForHmaService(
            $hmaService,
            $search,
            $status,
            $expiryStatus,
            $dateFrom ? new \DateTime($dateFrom) : null,
            $dateTo ? new \DateTime($dateTo) : null,
            $lowStock === 'yes',
            $location,
            $productId,
            $sort,
            $direction,
            1,
            99999
        );
        $allFilteredBatches = iterator_to_array($allFilteredBatches);

        // Calculer les statistiques sur les lots filtrés
        $statsFiltered = $this->calculateStatsFromBatches($allFilteredBatches);

        // Récupérer les emplacements uniques des lots filtrés
        $locationsFiltered = $this->getUniqueLocationsFromBatches($allFilteredBatches);

        // Récupérer les produits concernés par les lots filtrés
        $productsFiltered = $this->getUniqueProductsFromBatches($allFilteredBatches);
        $productsFilteredCount = count($productsFiltered);

        // Récupérer les lots PAGINÉS pour l'affichage
        $batches = $batchRepository->findFilteredForHmaService(
            $hmaService,
            $search,
            $status,
            $expiryStatus,
            $dateFrom ? new \DateTime($dateFrom) : null,
            $dateTo ? new \DateTime($dateTo) : null,
            $lowStock === 'yes',
            $location,
            $productId,
            $sort,
            $direction,
            $page,
            $limit
        );

        $totalItems = $batches->count();
        $totalPages = ceil($totalItems / $limit);

        return $this->render('admin/stock_batch/all.html.twig', [
            'batches' => $batches,
            'products' => $products,
            'stats' => $statsFiltered,
            'locations' => $locationsFiltered,
            'all_locations' => $allLocationNames,
            'products_filtered_count' => $productsFilteredCount,
            'totalPages' => $totalPages,
            'currentPage' => $page,
            'filters' => [
                'search' => $search,
                'status' => $status,
                'expiry_status' => $expiryStatus,
                'date_from' => $dateFrom,
                'date_to' => $dateTo,
                'low_stock' => $lowStock,
                'location' => $location,
                'product_id' => $productIdParam,
                'sort' => $sort,
                'direction' => $direction,
            ],
        ]);
    }

    /**
     * Calcule les statistiques à partir d'un tableau de lots
     */
    private function calculateStatsFromBatches(array $batches): array
    {
        $now = new \DateTime();
        $totalBatches = count($batches);
        $activeBatches = 0;
        $expiredBatches = 0;
        $expiringSoonBatches = 0;
        $totalQuantity = 0;

        foreach ($batches as $batch) {
            if ($batch->isActive()) {
                $activeBatches++;
            }
            
            if ($batch->getExpiryDate() && $batch->getExpiryDate() < $now) {
                $expiredBatches++;
            }
            
            if ($batch->getExpiryDate() && $batch->getExpiryDate() >= $now && $batch->getExpiryDate() < (clone $now)->modify('+30 days')) {
                $expiringSoonBatches++;
            }
            
            $totalQuantity += $batch->getCurrentQuantity();
        }

        return [
            'total_batches' => $totalBatches,
            'active_batches' => $activeBatches,
            'expired_batches' => $expiredBatches,
            'expiring_soon_batches' => $expiringSoonBatches,
            'total_quantity' => $totalQuantity,
        ];
    }

    /**
     * Récupère les emplacements uniques à partir d'un tableau de lots
     */
    private function getUniqueLocationsFromBatches(array $batches): array
    {
        $locations = [];
        foreach ($batches as $batch) {
            $loc = $batch->getLocation();
            if ($loc && !in_array($loc, $locations)) {
                $locations[] = $loc;
            }
        }
        sort($locations);
        return $locations;
    }

    /**
     * Récupère les produits uniques à partir d'un tableau de lots
     */
    private function getUniqueProductsFromBatches(array $batches): array
    {
        $products = [];
        foreach ($batches as $batch) {
            $product = $batch->getProduct();
            if ($product && !isset($products[$product->getId()])) {
                $products[$product->getId()] = $product;
            }
        }
        return array_values($products);
    }

    #[Route('/product/{productId}', name: 'app_admin_stock_batch_index', methods: ['GET'])]
    public function index(
        int $productId,
        Request $request,
        ProductRepository $productRepository,
        StockBatchRepository $batchRepository
    ): Response {
        $this->checkStockManagementAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) {
            throw new AccessDeniedException('Aucun service associé.');
        }

        $product = $productRepository->find($productId);
        if (!$product || $product->getHmaService()->getId() !== $hmaService->getId()) {
            throw $this->createNotFoundException('Produit non trouvé ou accès non autorisé.');
        }

        $search = $request->query->get('search', '');
        $status = $request->query->get('status', '');
        $expiryStatus = $request->query->get('expiry_status', '');
        $dateFrom = $request->query->get('date_from', '');
        $dateTo = $request->query->get('date_to', '');
        $lowStock = $request->query->get('low_stock', '');
        $location = $request->query->get('location', '');
        $sort = $request->query->get('sort', 'expiry_date');
        $direction = $request->query->get('direction', 'asc');

        $batches = $batchRepository->findFilteredForProduct(
            $product,
            $search,
            $status,
            $expiryStatus,
            $dateFrom ? new \DateTime($dateFrom) : null,
            $dateTo ? new \DateTime($dateTo) : null,
            $lowStock === 'yes',
            $location,
            $sort,
            $direction
        );

        $stats = $batchRepository->getStatsForProduct($product);
        $locations = $batchRepository->findDistinctLocations($product);

        return $this->render('admin/stock_batch/index.html.twig', [
            'product' => $product,
            'batches' => $batches,
            'stats' => $stats,
            'locations' => $locations,
            'companyType' => $hmaService->getType(),
            'filters' => [
                'search' => $search,
                'status' => $status,
                'expiry_status' => $expiryStatus,
                'date_from' => $dateFrom,
                'date_to' => $dateTo,
                'low_stock' => $lowStock,
                'location' => $location,
                'sort' => $sort,
                'direction' => $direction,
            ],
        ]);
    }

    #[Route('/{id}/show', name: 'app_admin_stock_batch_show', methods: ['GET'])]
    public function show(StockBatch $batch): Response
    {
        $this->checkStockManagementAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService || $batch->getHmaService()->getId() !== $hmaService->getId()) {
            throw new AccessDeniedException('Accès non autorisé.');
        }

        return $this->render('admin/stock_batch/show.html.twig', [
            'batch' => $batch,
            'product' => $batch->getProduct(),
            'canEdit' => $this->isGranted('ROLE_ADMIN') || $this->isGranted('ROLE_MANAGER') || $this->isGranted('ROLE_STOCK_MANAGER'),
            'canDelete' => $this->isGranted('ROLE_ADMIN'),
            'companyType' => $hmaService->getType(),
        ]);
    }

    #[Route('/{id}/edit', name: 'app_admin_stock_batch_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, StockBatch $batch, EntityManagerInterface $entityManager): Response
    {
        $this->checkStockManagementAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService || $batch->getHmaService()->getId() !== $hmaService->getId()) {
            throw new AccessDeniedException('Accès non autorisé.');
        }

        $hasSales = $this->hasSalesMovements($batch);
        $product = $batch->getProduct();
        
        $form = $this->createForm(StockBatchEditType::class, $batch, [
            'product' => $product,      // Passer le produit pour savoir s'il est périssable
            'has_sales' => $hasSales,   // Passer l'information des ventes
        ]);
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($hasSales) {
                $originalData = $this->getOriginalBatchData($batch);
                $submittedData = $form->getData();
                
                if ($originalData['current_quantity'] != $submittedData->getCurrentQuantity()) {
                    $this->addFlash('error', 'La quantité ne peut pas être modifiée car des ventes ont déjà été effectuées.');
                    return $this->redirectToRoute('app_admin_stock_batch_edit', ['id' => $batch->getId()]);
                }
                
                if ($originalData['unit_price'] != $submittedData->getUnitPrice()) {
                    $this->addFlash('error', 'Le prix unitaire ne peut pas être modifié car des ventes ont déjà été effectuées.');
                    return $this->redirectToRoute('app_admin_stock_batch_edit', ['id' => $batch->getId()]);
                }
            }
            
            // Si le produit est périssable, vérifier la cohérence des dates
            if ($product->hasExpiryDate()) {
                $manufacturingDate = $request->request->get('manufacturing_date');
                $expiryDate = $batch->getExpiryDate();
                
                if ($manufacturingDate && $expiryDate) {
                    $manuDate = new \DateTime($manufacturingDate);
                    if ($expiryDate <= $manuDate) {
                        $this->addFlash('error', 'La date d\'expiration doit être postérieure à la date de fabrication.');
                        return $this->redirectToRoute('app_admin_stock_batch_edit', ['id' => $batch->getId()]);
                    }
                }
            }
            
            $batch->setUpdatedAt(new \DateTimeImmutable());
            
            // Gérer la date de fabrication si fournie
            if ($request->request->has('manufacturing_date') && $request->request->get('manufacturing_date')) {
                $manufacturingDate = new \DateTime($request->request->get('manufacturing_date'));
                $batch->setManufacturingDate($manufacturingDate);
            }
            
            $entityManager->flush();
            
            $this->addFlash('success', 'Lot modifié avec succès.');
            return $this->redirectToRoute('app_admin_stock_batch_show', ['id' => $batch->getId()]);
        }

        return $this->render('admin/stock_batch/edit.html.twig', [
            'batch' => $batch,
            'form' => $form,
            'product' => $product,
            'hasSales' => $hasSales,
            'canEditQuantity' => false,
            'canEditPrice' => false,
            'isPerishable' => $product->hasExpiryDate(),
        ]);
    }

    #[Route('/{id}/toggle', name: 'app_admin_stock_batch_toggle', methods: ['POST'])]
    public function toggle(Request $request, StockBatch $batch, EntityManagerInterface $entityManager): Response
    {
        $this->checkStockManagementAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService || $batch->getHmaService()->getId() !== $hmaService->getId()) {
            throw new AccessDeniedException('Accès non autorisé.');
        }

        if (!$this->isCsrfTokenValid('toggle-batch' . $batch->getId(), $request->request->get('_token'))) {
            $this->addFlash('error', 'Token CSRF invalide.');
            return $this->redirectToRoute('app_admin_stock_batch_all');
        }

        $newStatus = !$batch->isActive();
        
        if ($newStatus && $batch->getExpiryDate() && $batch->getExpiryDate() < new \DateTime()) {
            $this->addFlash('warning', 'Impossible d\'activer un lot expiré.');
            return $this->redirectToRoute('app_admin_stock_batch_all');
        }
        
        if ($newStatus && $batch->getCurrentQuantity() <= 0) {
            $this->addFlash('warning', 'Impossible d\'activer un lot sans stock.');
            return $this->redirectToRoute('app_admin_stock_batch_all');
        }

        $batch->setIsActive($newStatus);
        $batch->setUpdatedAt(new \DateTimeImmutable());
        $entityManager->flush();

        $status = $batch->isActive() ? 'activé' : 'désactivé';
        $this->addFlash('success', "Lot {$status} avec succès.");

        return $this->redirectToRoute('app_admin_stock_batch_all');
    }

    #[Route('/{id}/delete', name: 'app_admin_stock_batch_delete', methods: ['POST'])]
    public function delete(Request $request, StockBatch $batch, EntityManagerInterface $entityManager): Response
    {
        $this->checkDeleteAccess();

        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService || $batch->getHmaService()->getId() !== $hmaService->getId()) {
            throw new AccessDeniedException('Accès non autorisé.');
        }

        if (!$this->isCsrfTokenValid('delete-batch' . $batch->getId(), $request->request->get('_token'))) {
            $this->addFlash('error', 'Token CSRF invalide.');
            return $this->redirectToRoute('app_admin_stock_batch_all');
        }
        
        if ($batch->getStockMovements()->count() > 0) {
            $this->addFlash('error', 'Impossible de supprimer ce lot car des mouvements de stock lui sont associés.');
            return $this->redirectToRoute('app_admin_stock_batch_all');
        }
        
        if ($batch->getPurchaseItem()) {
            $this->addFlash('error', 'Impossible de supprimer ce lot car il est lié à un achat.');
            return $this->redirectToRoute('app_admin_stock_batch_all');
        }

        $entityManager->remove($batch);
        $entityManager->flush();
        $this->addFlash('success', 'Lot supprimé avec succès.');

        return $this->redirectToRoute('app_admin_stock_batch_all');
    }

    #[Route('/{id}/print', name: 'app_admin_stock_batch_print', methods: ['GET'])]
    public function print(StockBatch $batch): Response
    {
        $this->checkStockManagementAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService || $batch->getHmaService()->getId() !== $hmaService->getId()) {
            throw new AccessDeniedException('Accès non autorisé.');
        }

        return $this->render('admin/stock_batch/print.html.twig', [
            'batch' => $batch,
            'product' => $batch->getProduct(),
        ]);
    }

    #[Route('/print-multiple', name: 'app_admin_stock_batch_print_multiple', methods: ['GET'])]
    public function printMultiple(Request $request, StockBatchRepository $batchRepository): Response
    {
        $this->checkStockManagementAccess();
        $hmaService = $this->getCurrentHmaService();
        
        $ids = explode(',', $request->query->get('ids', ''));
        $batches = $batchRepository->findBy(['id' => $ids]);
        
        foreach ($batches as $batch) {
            if ($batch->getHmaService()->getId() !== $hmaService->getId()) {
                throw new AccessDeniedException('Accès non autorisé.');
            }
        }
        
        return $this->render('admin/stock_batch/print_multiple.html.twig', [
            'batches' => $batches,
        ]);
    }

    #[Route('/product/{productId}/add-by-purchase', name: 'app_admin_stock_batch_add_by_purchase', methods: ['GET'])]
    public function redirectToPurchase(int $productId, ProductRepository $productRepository): Response
    {
        $this->checkStockManagementAccess();
        $hmaService = $this->getCurrentHmaService();
        
        $product = $productRepository->find($productId);
        if (!$product || $product->getHmaService()->getId() !== $hmaService->getId()) {
            throw $this->createNotFoundException('Produit non trouvé.');
        }
        
        $this->addFlash('info', 'Pour ajouter un lot, veuillez créer un achat pour ce produit.');
        return $this->redirectToRoute('admin_purchase_new', ['productId' => $productId]);
    }

    private function hasSalesMovements(StockBatch $batch): bool
    {
        foreach ($batch->getStockMovements() as $movement) {
            if ($movement->getMovementType() === 'sale' || $movement->getMovementType() === 'out') {
                return true;
            }
        }
        return false;
    }

    private function getOriginalBatchData(StockBatch $batch): array
    {
        return [
            'current_quantity' => $batch->getCurrentQuantity(),
            'unit_price' => $batch->getUnitPrice(),
        ];
    }

    #[Route('/export/excel', name: 'app_admin_stock_batch_export_excel', methods: ['GET'])]
    public function exportExcel(Request $request, StockBatchRepository $batchRepository, ProductRepository $productRepository): Response
    {
        $this->checkStockManagementAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) {
            throw new AccessDeniedException('Aucun service associé.');
        }

        $filters = [
            'search' => $request->query->get('search', ''),
            'status' => $request->query->get('status', ''),
            'expiry_status' => $request->query->get('expiry_status', ''),
            'date_from' => $request->query->get('date_from', ''),
            'date_to' => $request->query->get('date_to', ''),
            'low_stock' => $request->query->get('low_stock', ''),
            'location' => $request->query->get('location', ''),
            'product_id' => $request->query->get('product_id', ''),
            'sort' => $request->query->get('sort', 'expiry_date'),
            'direction' => $request->query->get('direction', 'asc'),
        ];

        // Récupérer TOUS les produits pour afficher le nom dans les filtres
        $products = $productRepository->findBy(['hma_service' => $hmaService, 'is_active' => true], ['name' => 'ASC']);

        // Récupérer les lots avec les filtres
        if ($filters['product_id']) {
            $product = $productRepository->find($filters['product_id']);
            if ($product && $product->getHmaService()->getId() === $hmaService->getId()) {
                $batches = $batchRepository->findFilteredForProduct(
                    $product,
                    $filters['search'],
                    $filters['status'],
                    $filters['expiry_status'],
                    $filters['date_from'] ? new \DateTime($filters['date_from']) : null,
                    $filters['date_to'] ? new \DateTime($filters['date_to']) : null,
                    $filters['low_stock'] === 'yes',
                    $filters['location'],
                    $filters['sort'],
                    $filters['direction']
                );
            } else {
                $batches = [];
            }
        } else {
            $batches = $batchRepository->findFilteredForHmaService(
                $hmaService,
                $filters['search'],
                $filters['status'],
                $filters['expiry_status'],
                $filters['date_from'] ? new \DateTime($filters['date_from']) : null,
                $filters['date_to'] ? new \DateTime($filters['date_to']) : null,
                $filters['low_stock'] === 'yes',
                $filters['location'],
                null,
                $filters['sort'],
                $filters['direction'],
                1,
                99999
            );
            $batches = iterator_to_array($batches);
        }

        // Calcul des totaux
        $totalQuantity = 0;
        $totalValue = 0;
        foreach ($batches as $batch) {
            $totalQuantity += $batch->getCurrentQuantity();
            $totalValue += $batch->getCurrentQuantity() * (float)$batch->getUnitPrice();
        }

        // Récupérer l'utilisateur connecté et ses rôles
        /** @var \App\Entity\User $user */
        $user = $this->getUser();
        $userRoles = $user ? $user->getRoles() : [];

        // Filtrer pour exclure ROLE_USER (rôle de base)
        $userRoles = array_filter($userRoles, function($role) {
            return $role !== 'ROLE_USER';
        });

        $userRoleLabels = [];

        // Convertir les rôles en labels lisibles
        $roleLabels = [
            'ROLE_SUPER_ADMIN' => 'Super Administrateur',
            'ROLE_ADMIN' => 'Administrateur',
            'ROLE_MANAGER' => 'Manager',
            'ROLE_STOCK_MANAGER' => 'Responsable Stock',
            'ROLE_CASHIER' => 'Caissier',
        ];

        foreach ($userRoles as $role) {
            $userRoleLabels[] = $roleLabels[$role] ?? $role;
        }

        // Générer le fichier Excel
        $spreadsheet = $this->generateExcelFile($batches, $filters, $hmaService, $products, $user, $userRoleLabels, $totalQuantity, $totalValue);
        
        $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
        
        $filename = 'export_lots_' . (new \DateTime())->format('Ymd_His') . '.xlsx';
        
        $response = new Response();
        $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        $response->headers->set('Content-Disposition', 'attachment;filename="' . $filename . '"');
        $response->headers->set('Cache-Control', 'max-age=0');
        
        ob_start();
        $writer->save('php://output');
        $response->setContent(ob_get_clean());
        
        return $response;
    }

    #[Route('/export/pdf', name: 'app_admin_stock_batch_export_pdf', methods: ['GET'])]
    public function exportPdf(Request $request, StockBatchRepository $batchRepository, ProductRepository $productRepository): Response
    {
        $this->checkStockManagementAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) {
            throw new AccessDeniedException('Aucun service associé.');
        }

        $filters = [
            'search' => $request->query->get('search', ''),
            'status' => $request->query->get('status', ''),
            'expiry_status' => $request->query->get('expiry_status', ''),
            'date_from' => $request->query->get('date_from', ''),
            'date_to' => $request->query->get('date_to', ''),
            'low_stock' => $request->query->get('low_stock', ''),
            'location' => $request->query->get('location', ''),
            'product_id' => $request->query->get('product_id', ''),
            'sort' => $request->query->get('sort', 'expiry_date'),
            'direction' => $request->query->get('direction', 'asc'),
        ];

        // Récupérer TOUS les produits pour afficher le nom dans les filtres
        $products = $productRepository->findBy(['hma_service' => $hmaService, 'is_active' => true], ['name' => 'ASC']);

        // Récupérer les lots avec les filtres
        if ($filters['product_id']) {
            $product = $productRepository->find($filters['product_id']);
            if ($product && $product->getHmaService()->getId() === $hmaService->getId()) {
                $batches = $batchRepository->findFilteredForProduct(
                    $product,
                    $filters['search'],
                    $filters['status'],
                    $filters['expiry_status'],
                    $filters['date_from'] ? new \DateTime($filters['date_from']) : null,
                    $filters['date_to'] ? new \DateTime($filters['date_to']) : null,
                    $filters['low_stock'] === 'yes',
                    $filters['location'],
                    $filters['sort'],
                    $filters['direction']
                );
            } else {
                $batches = [];
            }
        } else {
            $batches = $batchRepository->findFilteredForHmaService(
                $hmaService,
                $filters['search'],
                $filters['status'],
                $filters['expiry_status'],
                $filters['date_from'] ? new \DateTime($filters['date_from']) : null,
                $filters['date_to'] ? new \DateTime($filters['date_to']) : null,
                $filters['low_stock'] === 'yes',
                $filters['location'],
                null,
                $filters['sort'],
                $filters['direction'],
                1,
                99999
            );
            $batches = iterator_to_array($batches);
        }

        // Calcul des totaux
        $totalQuantity = 0;
        $totalValue = 0;
        foreach ($batches as $batch) {
            $totalQuantity += $batch->getCurrentQuantity();
            $totalValue += $batch->getCurrentQuantity() * (float)$batch->getUnitPrice();
        }

        // Récupérer l'utilisateur connecté et ses rôles
        /** @var \App\Entity\User $user */
        $user = $this->getUser();
        $userRoles = $user ? $user->getRoles() : [];

        // Filtrer pour exclure ROLE_USER (rôle de base)
        $userRoles = array_filter($userRoles, function($role) {
            return $role !== 'ROLE_USER';
        });

        $userRoleLabels = [];

        // Convertir les rôles en labels lisibles
        $roleLabels = [
            'ROLE_SUPER_ADMIN' => 'Super Administrateur',
            'ROLE_ADMIN' => 'Administrateur',
            'ROLE_MANAGER' => 'Manager',
            'ROLE_STOCK_MANAGER' => 'Responsable Stock',
            'ROLE_CASHIER' => 'Caissier',
        ];

        foreach ($userRoles as $role) {
            $userRoleLabels[] = $roleLabels[$role] ?? $role;
        }

        // Générer le HTML pour le PDF
        $html = $this->renderView('admin/stock_batch/export_pdf.html.twig', [
            'batches' => $batches,
            'filters' => $filters,
            'hmaService' => $hmaService,
            'exportDate' => new \DateTime(),
            'products' => $products,
            'totalQuantity' => $totalQuantity,
            'totalValue' => $totalValue,
            'userName' => $user ? ($user->getFullName() ?: $user->getEmail()) : 'Inconnu',
            'userEmail' => $user ? $user->getEmail() : 'Inconnu',
            'userRoles' => $userRoleLabels,
        ]);

        // Générer le PDF avec Dompdf
        $dompdf = new \Dompdf\Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();

        $filename = 'rapport_lots_' . (new \DateTime())->format('Ymd_His') . '.pdf';

        return new Response($dompdf->output(), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ]);
    }

    #[Route('/export/excel/template', name: 'app_admin_stock_batch_export_excel_template', methods: ['GET'])]
    public function exportExcelTemplate(): Response
    {
        $this->checkStockManagementAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) {
            throw new AccessDeniedException('Aucun service associé.');
        }

        $spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setTitle('Template Import Lots');

        $headers = ['ID', 'N° Lot', 'Emplacement (à modifier)', 'Date expiration (YYYY-MM-DD)'];
        $col = 'A';
        foreach ($headers as $header) {
            $sheet->setCellValue($col . '1', $header);
            $sheet->getStyle($col . '1')->getFont()->setBold(true);
            $col++;
        }
        
        $sheet->setCellValue('A2', '123');
        $sheet->setCellValue('B2', 'LOT-20241201-1-0001');
        $sheet->setCellValue('C2', 'A12 - Étagère 3');
        $sheet->setCellValue('D2', '2025-12-31');
        
        foreach (range('A', 'D') as $col) {
            $sheet->getColumnDimension($col)->setAutoSize(true);
        }
        
        $instructionSheet = $spreadsheet->createSheet();
        $instructionSheet->setTitle('Instructions');
        $instructionSheet->setCellValue('A1', 'INSTRUCTIONS D\'IMPORTATION');
        $instructionSheet->getStyle('A1')->getFont()->setBold(true)->setSize(14);
        $instructionSheet->setCellValue('A3', '1. Seuls les champs "Emplacement" peuvent être modifiés');
        $instructionSheet->setCellValue('A4', '2. Ne modifiez pas les colonnes ID et N° Lot');
        $instructionSheet->setCellValue('A5', '3. La date d\'expiration peut être modifiée uniquement si aucune vente');
        $instructionSheet->setCellValue('A6', '4. Format de date : YYYY-MM-DD (ex: 2025-12-31)');
        $instructionSheet->setCellValue('A7', '5. Les lignes avec des erreurs seront ignorées');
        $instructionSheet->getColumnDimension('A')->setWidth(60);
        
        $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
        $filename = 'template_import_lots.xlsx';
        
        $response = new Response();
        $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        $response->headers->set('Content-Disposition', 'attachment;filename="' . $filename . '"');
        $response->headers->set('Cache-Control', 'max-age=0');
        
        ob_start();
        $writer->save('php://output');
        $response->setContent(ob_get_clean());
        
        return $response;
    }

    #[Route('/import/excel', name: 'app_admin_stock_batch_import_excel', methods: ['POST'])]
    public function importExcel(Request $request, StockBatchRepository $batchRepository, EntityManagerInterface $em): Response
    {
        $this->checkStockManagementAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) {
            throw new AccessDeniedException('Aucun service associé.');
        }

        $file = $request->files->get('excel_file');
        if (!$file) {
            $this->addFlash('error', 'Veuillez sélectionner un fichier Excel.');
            return $this->redirectToRoute('app_admin_stock_batch_all');
        }

        try {
            $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($file);
            $sheet = $spreadsheet->getActiveSheet();
            $rows = $sheet->toArray();
            array_shift($rows);
            
            $updated = 0;
            $errors = 0;
            $updateOnlyLocation = $request->request->get('update_only_location') === 'on';
            
            foreach ($rows as $row) {
                if (empty($row[0]) || empty($row[1])) {
                    continue;
                }
                
                $batchId = (int) $row[0];
                $batchNumber = $row[1];
                $newLocation = $row[2] ?? null;
                $newExpiryDate = !empty($row[3]) ? \DateTime::createFromFormat('Y-m-d', $row[3]) : null;
                
                $batch = $batchRepository->find($batchId);
                
                if (!$batch || $batch->getHmaService()->getId() !== $hmaService->getId()) {
                    $errors++;
                    continue;
                }
                
                if ($batch->getBatchNumber() !== $batchNumber) {
                    $errors++;
                    continue;
                }
                
                if ($newLocation) {
                    $batch->setLocation($newLocation);
                    $updated++;
                }
                
                if (!$updateOnlyLocation && $newExpiryDate && $batch->getStockMovements()->count() === 0) {
                    $batch->setExpiryDate($newExpiryDate);
                    $updated++;
                }
                
                $batch->setUpdatedAt(new \DateTimeImmutable());
            }
            
            $em->flush();
            $this->addFlash('success', "Import terminé : $updated lot(s) mis à jour, $errors erreur(s)");
        } catch (\Exception $e) {
            $this->addFlash('error', 'Erreur lors de l\'import : ' . $e->getMessage());
        }
        
        return $this->redirectToRoute('app_admin_stock_batch_all');
    }

    private function generateExcelFile($batches, array $filters, HmaService $hmaService, array $products, $user, array $userRoles, int $totalQuantity, float $totalValue): \PhpOffice\PhpSpreadsheet\Spreadsheet
    {
        $spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setTitle('Rapport Lots');

        // Style pour les titres
        $titleStyle = [
            'font' => ['bold' => true, 'size' => 14, 'color' => ['rgb' => '2E86C1']],
            'alignment' => ['horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER]
        ];

        // Style pour les en-têtes
        $headerStyle = [
            'font' => ['bold' => true, 'color' => ['rgb' => 'FFFFFF'], 'size' => 11],
            'fill' => ['fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID, 'startColor' => ['rgb' => '2E86C1']],
            'alignment' => ['horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER]
        ];

        // Style pour les sections
        $sectionStyle = [
            'font' => ['bold' => true, 'size' => 12],
            'fill' => ['fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID, 'startColor' => ['rgb' => 'E8F4FD']]
        ];

        $row = 1;

        // ========== TITRE PRINCIPAL ==========
        $sheet->mergeCells('A' . $row . ':R' . $row);
        $sheet->setCellValue('A' . $row, 'RAPPORT DE GESTION DES LOTS');
        $sheet->getStyle('A' . $row)->applyFromArray($titleStyle);
        $row++;

        // ========== INFORMATIONS GÉNÉRALES ==========
        $sheet->mergeCells('A' . $row . ':R' . $row);
        $sheet->setCellValue('A' . $row, 'Informations générales');
        $sheet->getStyle('A' . $row)->applyFromArray($sectionStyle);
        $row++;

        $sheet->setCellValue('A' . $row, 'Date d\'export :');
        $sheet->setCellValue('B' . $row, (new \DateTime())->format('d/m/Y H:i:s'));
        $sheet->mergeCells('B' . $row . ':R' . $row);
        $row++;

        $sheet->setCellValue('A' . $row, 'Entreprise :');
        $sheet->setCellValue('B' . $row, $hmaService->getCompanyName());
        $sheet->mergeCells('B' . $row . ':R' . $row);
        $row++;

        $sheet->setCellValue('A' . $row, 'Exporté par :');
        $sheet->setCellValue('B' . $row, $user ? ($user->getFullName() ?: $user->getEmail()) : 'Inconnu');
        $sheet->mergeCells('B' . $row . ':R' . $row);
        $row++;

        $sheet->setCellValue('A' . $row, 'Email :');
        $sheet->setCellValue('B' . $row, $user ? $user->getEmail() : 'Inconnu');
        $sheet->mergeCells('B' . $row . ':R' . $row);
        $row++;

        $sheet->setCellValue('A' . $row, 'Rôle(s) :');
        $sheet->setCellValue('B' . $row, implode(', ', $userRoles));
        $sheet->mergeCells('B' . $row . ':R' . $row);
        $row++;
        $row++;

        // ========== FILTRES APPLIQUÉS ==========
        $sheet->mergeCells('A' . $row . ':R' . $row);
        $sheet->setCellValue('A' . $row, 'FILTRES APPLIQUÉS');
        $sheet->getStyle('A' . $row)->applyFromArray($sectionStyle);
        $row++;

        $filterLabels = [
            'Recherche' => $filters['search'] ?: 'Aucun',
            'Produit' => $this->getProductNameById($products, $filters['product_id']),
            'Statut' => $filters['status'] ? ($filters['status'] === 'active' ? 'Actifs' : 'Inactifs') : 'Tous',
            'Expiration' => $this->getExpiryStatusLabel($filters['expiry_status']),
            'Stock faible' => $filters['low_stock'] === 'yes' ? 'Oui (≤10 unités)' : 'Non',
            'Emplacement' => $filters['location'] ?: 'Tous',
            'Date expiration du' => $filters['date_from'] ?: 'Non spécifiée',
            'Date expiration au' => $filters['date_to'] ?: 'Non spécifiée',
            'Tri par' => $filters['sort'] ?: 'expiry_date',
            'Ordre' => $filters['direction'] === 'asc' ? 'Croissant' : 'Décroissant',
        ];

        foreach ($filterLabels as $label => $value) {
            $sheet->setCellValue('A' . $row, $label . ' :');
            $sheet->setCellValue('B' . $row, $value);
            $sheet->mergeCells('B' . $row . ':R' . $row);
            $row++;
        }
        $row++;
        $row++;

        // ========== STATISTIQUES ==========
        $sheet->mergeCells('A' . $row . ':R' . $row);
        $sheet->setCellValue('A' . $row, 'STATISTIQUES');
        $sheet->getStyle('A' . $row)->applyFromArray($sectionStyle);
        $row++;

        $sheet->setCellValue('A' . $row, 'Nombre total de lots :');
        $sheet->setCellValue('B' . $row, count($batches));
        $row++;

        $sheet->setCellValue('A' . $row, 'Lots actifs :');
        $sheet->setCellValue('B' . $row, count(array_filter($batches, fn($b) => $b->isActive())));
        $row++;

        $sheet->setCellValue('A' . $row, 'Lots expirés :');
        $sheet->setCellValue('B' . $row, count(array_filter($batches, fn($b) => $b->getExpiryDate() && $b->getExpiryDate() < new \DateTime())));
        $row++;

        $sheet->setCellValue('A' . $row, 'Lots expirent bientôt :');
        $sheet->setCellValue('B' . $row, count(array_filter($batches, fn($b) => $b->getExpiryDate() && $b->getExpiryDate() >= new \DateTime() && $b->getExpiryDate() < (new \DateTime())->modify('+30 days'))));
        $row++;
        $row++;

        // ========== TABLEAU DES LOTS ==========
        $sheet->mergeCells('A' . $row . ':R' . $row);
        $sheet->setCellValue('A' . $row, 'LISTE DES LOTS');
        $sheet->getStyle('A' . $row)->applyFromArray($sectionStyle);
        $row++;

        // En-têtes du tableau
        $headers = ['ID', 'N° Lot', 'Produit', 'Code-barres', 'Catégorie', 'Emplacement', 'Qté initiale', 'Qté actuelle', '% restant', 'Prix unitaire', 'Valeur', 'Fabrication', 'Expiration', 'Statut exp.', 'Jours restants', 'Statut', 'Créé le', 'Modifié le'];
        $col = 'A';
        foreach ($headers as $header) {
            $sheet->setCellValue($col . $row, $header);
            $sheet->getStyle($col . $row)->applyFromArray($headerStyle);
            $col++;
        }
        $row++;

        // Données
        $now = new \DateTime();
        foreach ($batches as $batch) {
            $col = 'A';
            $percentage = $batch->getInitialQuantity() > 0 ? round(($batch->getCurrentQuantity() / $batch->getInitialQuantity()) * 100, 1) : 0;
            
            $daysLeft = null;
            $expiryStatus = '';
            if ($batch->getExpiryDate()) {
                $diff = $now->diff($batch->getExpiryDate());
                $daysLeft = $batch->getExpiryDate() < $now ? -$diff->days : $diff->days;
                $expiryStatus = $batch->getExpiryDate() < $now ? 'Expiré' 
                    : ($batch->getExpiryDate() < (clone $now)->modify('+30 days') ? 'Expire bientôt' : 'Valide');
            } else {
                $expiryStatus = 'Non périssable';
            }
            
            $locationDisplay = $batch->getLocationEntity() ? $batch->getLocationEntity()->getDisplayName() : ($batch->getLocation() ?: '—');
            
            $sheet->setCellValue($col++ . $row, $batch->getId());
            $sheet->setCellValue($col++ . $row, $batch->getBatchNumber());
            $sheet->setCellValue($col++ . $row, $batch->getProduct()?->getName() ?? '—');
            $sheet->setCellValue($col++ . $row, $batch->getProduct()?->getBarcode() ?? '—');
            $sheet->setCellValue($col++ . $row, $batch->getProduct()?->getCategory()?->getName() ?? '—');
            $sheet->setCellValue($col++ . $row, $locationDisplay);
            $sheet->setCellValue($col++ . $row, $batch->getInitialQuantity());
            $sheet->setCellValue($col++ . $row, $batch->getCurrentQuantity());
            $sheet->setCellValue($col++ . $row, $percentage . '%');
            $sheet->setCellValue($col++ . $row, number_format((float)$batch->getUnitPrice(), 0, ',', ' ') . ' FCFA');
            $sheet->setCellValue($col++ . $row, number_format($batch->getCurrentQuantity() * (float)$batch->getUnitPrice(), 0, ',', ' ') . ' FCFA');
            $sheet->setCellValue($col++ . $row, $batch->getManufacturingDate()?->format('d/m/Y') ?: '—');
            $sheet->setCellValue($col++ . $row, $batch->getExpiryDate()?->format('d/m/Y') ?: '—');
            $sheet->setCellValue($col++ . $row, $expiryStatus);
            $sheet->setCellValue($col++ . $row, $daysLeft !== null ? ($daysLeft < 0 ? 'Expiré depuis ' . abs($daysLeft) . 'j' : $daysLeft . ' jours') : 'N/A');
            $sheet->setCellValue($col++ . $row, $batch->isActive() ? 'Actif' : 'Inactif');
            $sheet->setCellValue($col++ . $row, $batch->getCreatedAt()->format('d/m/Y H:i'));
            $sheet->setCellValue($col++ . $row, $batch->getUpdatedAt()?->format('d/m/Y H:i') ?: '—');
            
            // Colorer les lignes
            if ($batch->getExpiryDate() && $batch->getExpiryDate() < $now) {
                $sheet->getStyle('A' . $row . ':R' . $row)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('33FFCCCC');
            } elseif ($batch->getCurrentQuantity() <= 10) {
                $sheet->getStyle('A' . $row . ':R' . $row)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('33FFFF00');
            }
            $row++;
        }
        $row++;
        $row++;

        // ========== RÉCAPITULATIF ==========
        $sheet->mergeCells('A' . $row . ':R' . $row);
        $sheet->setCellValue('A' . $row, 'RÉCAPITULATIF');
        $sheet->getStyle('A' . $row)->applyFromArray($sectionStyle);
        $row++;

        $sheet->setCellValue('A' . $row, 'Valeur totale du stock :');
        $sheet->setCellValue('B' . $row, number_format($totalValue, 0, ',', ' ') . ' FCFA');
        $row++;

        $sheet->setCellValue('A' . $row, 'Quantité totale en stock :');
        $sheet->setCellValue('B' . $row, $totalQuantity . ' unités');
        $row++;

        $sheet->setCellValue('A' . $row, 'Nombre de lots :');
        $sheet->setCellValue('B' . $row, count($batches));
        $row++;
        $row++;

        // ========== PIED DE PAGE ==========
        $sheet->mergeCells('A' . $row . ':R' . $row);
        $sheet->setCellValue('A' . $row, 'Document généré par HMA Market - ' . (new \DateTime())->format('d/m/Y H:i'));
        $sheet->getStyle('A' . $row)->getFont()->setItalic(true)->setSize(10);
        $sheet->getStyle('A' . $row)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);

        // Ajuster les colonnes
        foreach (range('A', 'R') as $col) {
            $sheet->getColumnDimension($col)->setAutoSize(true);
        }
        
        return $spreadsheet;
    }

    /**
     * Récupère le nom du produit à partir de son ID
     */
    private function getProductNameById(array $products, ?string $productId): string
    {
        if (!$productId) {
            return 'Tous les produits';
        }
        
        foreach ($products as $product) {
            if ($product->getId() == $productId) {
                return $product->getName();
            }
        }
        
        return 'Produit non trouvé';
    }

    /**
     * Récupère le libellé du statut d'expiration
     */
    private function getExpiryStatusLabel(?string $expiryStatus): string
    {
        return match($expiryStatus) {
            'expired' => 'Expirés',
            'expiring_soon' => 'Expire bientôt',
            'not_expiring' => 'Non expirés',
       
       
            default => 'Tous'
        };
    }
}