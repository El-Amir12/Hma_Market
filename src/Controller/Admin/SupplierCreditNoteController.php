<?php
// src/Controller/Admin/SupplierCreditNoteController.php

namespace App\Controller\Admin;

use App\Entity\HmaService;
use App\Entity\StockBatch;
use App\Entity\SupplierCreditNote;
use App\Entity\SupplierCreditNoteHistory;
use App\Entity\User;
use App\Entity\PurchaseItem; // ✅ AJOUTÉ
use App\Form\SupplierCreditNoteType;
use App\Repository\PurchaseRepository;
use App\Repository\StockBatchRepository;
use App\Repository\SupplierCreditNoteRepository;
use App\Repository\SupplierRepository;
use App\Repository\PurchaseItemRepository; // ✅ AJOUTÉ
use App\Service\SupplierCreditNoteService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

#[Route('/admin/supplier-credit-note')]
final class SupplierCreditNoteController extends AbstractController
{
    private const ATTACHMENTS_DIRECTORY = 'uploads/credit_notes_attachments';

    public function __construct(
        private readonly SluggerInterface $slugger,
        private readonly EntityManagerInterface $entityManager
    ) {}

    /**
     * Récupère l'utilisateur connecté et son service HMA
     */
    private function getCurrentUserAndService(): ?array
    {
        /** @var User $user */
        $user = $this->getUser();
        
        if (!$user || !$user instanceof User) {
            return null;
        }
        
        $hmaService = $user->getHmaService();
        
        if (!$hmaService) {
            return null;
        }
        
        $hmaService = $this->entityManager
            ->getRepository(HmaService::class)
            ->find($hmaService->getId());
        
        return [
            'user' => $user,
            'hmaService' => $hmaService
        ];
    }

    private function checkAccess(): void
    {
        if (!$this->isGranted('ROLE_ADMIN') && !$this->isGranted('ROLE_MANAGER') && !$this->isGranted('ROLE_STOCK_MANAGER')) {
            throw new AccessDeniedException('Accès refusé. Vous devez être administrateur, manager ou responsable stock.');
        }
    }

    #[Route('/', name: 'app_supplier_credit_note_index', methods: ['GET'])]
    public function index(
        Request $request,
        SupplierCreditNoteRepository $repository,
        SupplierRepository $supplierRepository,
        SupplierCreditNoteService $service
    ): Response {
        $this->checkAccess();
        
        $userService = $this->getCurrentUserAndService();
        if (!$userService) {
            throw new AccessDeniedException('Aucun service associé à votre compte.');
        }
        
        /** @var HmaService $hmaService */
        $hmaService = $userService['hmaService'];

        $page = $request->query->getInt('page', 1);
        $limit = 12;
        $search = $request->query->get('search', '');
        $status = $request->query->get('status', '');
        $priority = $request->query->get('priority', '');
        $issueType = $request->query->get('issue_type', '');
        $supplierId = $request->query->getInt('supplier_id', 0);
        $dateFrom = $request->query->get('date_from', '');
        $dateTo = $request->query->get('date_to', '');

        $suppliers = $supplierRepository->findBy(['hma_service' => $hmaService, 'is_active' => true]);

        $paginator = $repository->findFilteredPaginated(
            $hmaService, $search, $status, $priority, $issueType,
            $supplierId ?: null, null, $dateFrom, $dateTo, $page, $limit
        );

        $stats = $service->getStatistics($hmaService);
        $statusCounts = $repository->getStatusCounts($hmaService);
        $openCreditNotes = $repository->findOpenCreditNotes($hmaService);

        $totalItems = $paginator->count();
        $totalPages = ceil($totalItems / $limit);

        return $this->render('supplier_credit_note/index.html.twig', [
            'creditNotes' => $paginator,
            'currentPage' => $page,
            'totalPages' => $totalPages,
            'totalItems' => $totalItems,
            'search' => $search,
            'status' => $status,
            'priority' => $priority,
            'issueType' => $issueType,
            'selectedSupplier' => $supplierId,
            'dateFrom' => $dateFrom,
            'dateTo' => $dateTo,
            'suppliers' => $suppliers,
            'stats' => $stats,
            'statusCounts' => $statusCounts,
            'openCreditNotes' => $openCreditNotes,
            'statusList' => SupplierCreditNote::getStatusList(),
            'priorityList' => SupplierCreditNote::getPriorityList(),
            'issueTypeList' => SupplierCreditNote::getIssueTypeList(),
            'hmaService' => $hmaService,
        ]);
    }

    #[Route('/new/{batchId}', name: 'app_supplier_credit_note_new', methods: ['GET', 'POST'])]
    public function new(
        Request $request,
        int $batchId,
        StockBatchRepository $stockBatchRepository,
        PurchaseItemRepository $purchaseItemRepository, // ✅ AJOUTÉ
        PurchaseRepository $purchaseRepository,
        SupplierCreditNoteService $service
    ): Response {
        $this->checkAccess();
        
        $userService = $this->getCurrentUserAndService();
        if (!$userService) {
            throw new AccessDeniedException('Aucun service associé à votre compte.');
        }
        
        /** @var User $user */
        $user = $userService['user'];
        
        /** @var HmaService $hmaService */
        $hmaService = $userService['hmaService'];

        $stockBatch = $stockBatchRepository->find($batchId);
        if (!$stockBatch) {
            throw $this->createNotFoundException('Lot non trouvé');
        }
        
        // Vérifier que le lot appartient à l'entreprise
        if ($stockBatch->getHmaService()->getId() !== $hmaService->getId()) {
            throw new AccessDeniedException('Ce lot ne vous appartient pas.');
        }

        // ✅ CORRECTION : Récupérer le PurchaseItem via son ID
        $purchaseItem = null;
        if ($stockBatch->getPurchaseItemId()) {
            $purchaseItem = $purchaseItemRepository->find($stockBatch->getPurchaseItemId());
        }
        
        $purchase = $purchaseItem?->getPurchase();
        if (!$purchase) {
            throw $this->createNotFoundException('Aucune commande associée à ce lot');
        }

        $supplier = $purchase->getSupplier();
        if (!$supplier) {
            throw $this->createNotFoundException('Fournisseur non trouvé');
        }

        $creditNote = new SupplierCreditNote();
        $form = $this->createForm(SupplierCreditNoteType::class, $creditNote);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Gestion des pièces jointes
            /** @var UploadedFile[] $attachments */
            $attachments = $form->get('attachments')->getData();
            $attachmentPaths = [];

            if ($attachments) {
                foreach ($attachments as $attachment) {
                    $originalFilename = pathinfo($attachment->getClientOriginalName(), PATHINFO_FILENAME);
                    $safeFilename = $this->slugger->slug($originalFilename);
                    $newFilename = $safeFilename . '-' . uniqid() . '.' . $attachment->guessExtension();
                    
                    $attachment->move(self::ATTACHMENTS_DIRECTORY, $newFilename);
                    $attachmentPaths[] = $newFilename;
                }
            }
            
            $service->createCreditNote(
                $stockBatch,
                $purchase,
                $supplier,
                $creditNote->getIssueType(),
                $creditNote->getDescription(),
                (float)$creditNote->getDeclaredAmount(),
                $creditNote->getPriority(),
                !empty($attachmentPaths) ? $attachmentPaths : null,
                $user,
                $hmaService,
                $creditNote->getAffectedQuantity(),
                $creditNote->getStockAction()
            );

            $this->addFlash('success', 'Avoir fournisseur créé avec succès. Le fournisseur a été notifié par email.');
            return $this->redirectToRoute('app_supplier_credit_note_index');
        }

        return $this->render('supplier_credit_note/new.html.twig', [
            'form' => $form->createView(),
            'stockBatch' => $stockBatch,
            'purchase' => $purchase,
            'supplier' => $supplier,
        ]);
    }

    #[Route('/{id}', name: 'app_supplier_credit_note_show', methods: ['GET'])]
    public function show(SupplierCreditNote $creditNote): Response
    {
        $this->checkAccess();
        
        $userService = $this->getCurrentUserAndService();
        if (!$userService) {
            throw new AccessDeniedException('Aucun service associé à votre compte.');
        }
        
        /** @var HmaService $hmaService */
        $hmaService = $userService['hmaService'];

        if ($creditNote->getHmaService()->getId() !== $hmaService->getId()) {
            throw new AccessDeniedException('Cet avoir ne vous appartient pas.');
        }

        $histories = $this->entityManager
            ->getRepository(SupplierCreditNoteHistory::class)
            ->findBy(['creditNote' => $creditNote], ['performed_at' => 'ASC']);

        return $this->render('supplier_credit_note/show.html.twig', [
            'creditNote' => $creditNote,
            'histories' => $histories,
            'statusList' => SupplierCreditNote::getStatusList(),
            'priorityList' => SupplierCreditNote::getPriorityList(),
            'issueTypeList' => SupplierCreditNote::getIssueTypeList(),
        ]);
    }

    #[Route('/{id}/resolve', name: 'app_supplier_credit_note_resolve', methods: ['POST'])]
    public function resolve(
        Request $request,
        SupplierCreditNote $creditNote,
        SupplierCreditNoteService $service
    ): Response {
        $this->checkAccess();
        
        if (!$this->isGranted('ROLE_ADMIN') && !$this->isGranted('ROLE_MANAGER')) {
            throw new AccessDeniedException('Seuls les administrateurs et managers peuvent résoudre les avoirs.');
        }

        $userService = $this->getCurrentUserAndService();
        if (!$userService) {
            throw new AccessDeniedException('Aucun service associé à votre compte.');
        }
        
        /** @var HmaService $hmaService */
        $hmaService = $userService['hmaService'];
        
        /** @var User $user */
        $user = $userService['user'];

        if ($creditNote->getHmaService()->getId() !== $hmaService->getId()) {
            throw new AccessDeniedException('Cet avoir ne vous appartient pas.');
        }

        $newStatus = $request->request->get('status');
        $recoveredAmount = (float)$request->request->get('recovered_amount', 0);
        $lostAmount = (float)$request->request->get('lost_amount', 0);
        $resolutionNotes = $request->request->get('resolution_notes');

        $service->updateCreditNoteStatus(
            $creditNote,
            $newStatus,
            $recoveredAmount,
            $lostAmount,
            $resolutionNotes,
            $user
        );

        $this->addFlash('success', 'Statut de l\'avoir mis à jour avec succès.');
        return $this->redirectToRoute('app_supplier_credit_note_show', ['id' => $creditNote->getId()]);
    }

    /**
     * Appliquer l'action sur le stock
     */
    #[Route('/{id}/apply-stock-action', name: 'app_supplier_credit_note_apply_stock_action', methods: ['POST'])]
    public function applyStockAction(
        SupplierCreditNote $creditNote,
        SupplierCreditNoteService $service
    ): Response {
        $this->checkAccess();
        
        if (!$this->isGranted('ROLE_ADMIN') && !$this->isGranted('ROLE_MANAGER') && !$this->isGranted('ROLE_STOCK_MANAGER')) {
            throw new AccessDeniedException('Accès refusé.');
        }
        
        $userService = $this->getCurrentUserAndService();
        if (!$userService) {
            throw new AccessDeniedException('Aucun service associé à votre compte.');
        }
        
        /** @var User $user */
        $user = $userService['user'];
        
        $result = $service->applyStockAction($creditNote, $user);
        
        if ($result) {
            $this->addFlash('success', 'Action sur le stock appliquée : ' . $result);
        } else {
            $this->addFlash('warning', 'Aucune action à appliquer ou action déjà effectuée.');
        }
        
        return $this->redirectToRoute('app_supplier_credit_note_show', ['id' => $creditNote->getId()]);
    }

    /**
     * Récupère les filtres depuis la requête
     */
    private function getFiltersFromRequest(Request $request): array
    {
        return [
            'search' => $request->query->get('search', ''),
            'status' => $request->query->get('status', ''),
            'priority' => $request->query->get('priority', ''),
            'issueType' => $request->query->get('issue_type', ''),
            'supplierId' => $request->query->getInt('supplier_id', 0),
            'dateFrom' => $request->query->get('date_from', ''),
            'dateTo' => $request->query->get('date_to', ''),
            'sort' => $request->query->get('sort', 'created_at'),
            'direction' => $request->query->get('direction', 'desc'),
        ];
    }

    /**
     * Export Excel des avoirs
     */
    #[Route('/export/excel', name: 'app_supplier_credit_note_export_excel', methods: ['GET'])]
    public function exportExcel(
        Request $request,
        SupplierCreditNoteRepository $repository,
        SupplierRepository $supplierRepository
    ): Response {
        $this->checkAccess();
        
        $userService = $this->getCurrentUserAndService();
        if (!$userService) {
            throw new AccessDeniedException('Aucun service associé.');
        }
        
        /** @var HmaService $hmaService */
        $hmaService = $userService['hmaService'];
        
        /** @var User $user */
        $user = $userService['user'];

        $filters = $this->getFiltersFromRequest($request);

        $creditNotes = $repository->findFilteredForExport(
            $hmaService,
            $filters['search'],
            $filters['status'],
            $filters['priority'],
            $filters['issueType'],
            $filters['supplierId'],
            $filters['dateFrom'],
            $filters['dateTo'],
            $filters['sort'],
            $filters['direction']
        );

        // Calcul des totaux
        $totalDeclared = array_sum(array_map(fn($c) => (float)$c->getDeclaredAmount(), $creditNotes));
        $totalRecovered = array_sum(array_map(fn($c) => (float)($c->getRecoveredAmount() ?? 0), $creditNotes));
        $totalLost = array_sum(array_map(fn($c) => (float)($c->getLostAmount() ?? 0), $creditNotes));

        // Récupérer le nom du fournisseur filtré
        $supplierName = null;
        if ($filters['supplierId']) {
            $supplier = $supplierRepository->find($filters['supplierId']);
            $supplierName = $supplier?->getName();
        }

        $userRoles = $user ? $user->getRoles() : [];
        $userRoles = array_filter($userRoles, fn($role) => $role !== 'ROLE_USER');

        $html = $this->renderView('supplier_credit_note/export_pdf.html.twig', [
            'creditNotes' => $creditNotes,
            'hmaService' => $hmaService,
            'filters' => $filters,
            'exportDate' => new \DateTime(),
            'userName' => $user ? ($user->getFullName() ?: $user->getUserIdentifier()) : 'Inconnu',
            'userEmail' => $user ? $user->getUserIdentifier() : 'Inconnu',
            'userRoles' => $userRoles,
            'statusList' => SupplierCreditNote::getStatusList(),
            'priorityList' => SupplierCreditNote::getPriorityList(),
            'issueTypeList' => SupplierCreditNote::getIssueTypeList(),
            'supplierName' => $supplierName,
            'totalDeclaredAmount' => $totalDeclared,
            'totalRecoveredAmount' => $totalRecovered,
            'totalLostAmount' => $totalLost,
            'recoveryRate' => $totalDeclared > 0 ? round(($totalRecovered / $totalDeclared) * 100, 2) : 0,
            'pendingCount' => count(array_filter($creditNotes, fn($c) => $c->getStatus() === SupplierCreditNote::STATUS_PENDING)),
            'recoveredCount' => count(array_filter($creditNotes, fn($c) => $c->getStatus() === SupplierCreditNote::STATUS_RECOVERED)),
            'lostCount' => count(array_filter($creditNotes, fn($c) => $c->getStatus() === SupplierCreditNote::STATUS_LOST)),
        ]);

        // Générer le CSV pour Excel
        $filename = 'export_avoirs_' . (new \DateTime())->format('Ymd_His') . '.csv';
        
        $response = new Response();
        $response->headers->set('Content-Type', 'text/csv; charset=utf-8');
        $response->headers->set('Content-Disposition', 'attachment; filename="' . $filename . '"');
        
        // Entêtes CSV
        $csvData = [
            ['ID', 'N° Avoir', 'Fournisseur', 'Lot', 'Produit', 'Type problème', 'Priorité', 'Statut', 
             'Montant déclaré', 'Montant récupéré', 'Montant perdu', 'Quantité concernée', 'Action stock', 
             'Date signalement', 'Date résolution', 'Signalé par', 'Réponse fournisseur', 'Décision fournisseur']
        ];
        
        foreach ($creditNotes as $creditNote) {
            $csvData[] = [
                $creditNote->getId(),
                $creditNote->getCreditNoteNumber(),
                $creditNote->getSupplier()->getName(),
                $creditNote->getStockBatch()->getBatchNumber(),
                $creditNote->getStockBatch()->getProduct()->getName(),
                $creditNote->getIssueTypeLabel(),
                $creditNote->getPriorityLabel(),
                $creditNote->getStatusLabel(),
                $creditNote->getDeclaredAmount(),
                $creditNote->getRecoveredAmount() ?: 0,
                $creditNote->getLostAmount() ?: 0,
                $creditNote->getAffectedQuantity() ?: 0,
                $creditNote->getStockActionLabel(),
                $creditNote->getReportedAt()->format('d/m/Y H:i'),
                $creditNote->getResolvedAt()?->format('d/m/Y H:i') ?: '',
                $creditNote->getReportedBy()->getFullName() ?: $creditNote->getReportedBy()->getUserIdentifier(),
                $creditNote->getSupplierResponse() ? substr(strip_tags($creditNote->getSupplierResponse()), 0, 200) : '',
                $creditNote->getSupplierDecision() ?: '',
            ];
        }
        
        // Écrire le CSV
        $handle = fopen('php://temp', 'r+');
        foreach ($csvData as $row) {
            fputcsv($handle, $row, ';');
        }
        rewind($handle);
        $content = stream_get_contents($handle);
        fclose($handle);
        
        $response->setContent($content);
        
        return $response;
    }

    /**
     * Export PDF des avoirs
     */
    #[Route('/export/pdf', name: 'app_supplier_credit_note_export_pdf', methods: ['GET'])]
    public function exportPdf(
        Request $request,
        SupplierCreditNoteRepository $repository,
        SupplierRepository $supplierRepository
    ): Response {
        $this->checkAccess();
        
        $userService = $this->getCurrentUserAndService();
        if (!$userService) {
            throw new AccessDeniedException('Aucun service associé.');
        }
        
        /** @var HmaService $hmaService */
        $hmaService = $userService['hmaService'];
        
        /** @var User $user */
        $user = $userService['user'];

        $filters = $this->getFiltersFromRequest($request);

        $creditNotes = $repository->findFilteredForExport(
            $hmaService,
            $filters['search'],
            $filters['status'],
            $filters['priority'],
            $filters['issueType'],
            $filters['supplierId'],
            $filters['dateFrom'],
            $filters['dateTo'],
            $filters['sort'],
            $filters['direction']
        );

        // Calcul des totaux
        $totalDeclared = array_sum(array_map(fn($c) => (float)$c->getDeclaredAmount(), $creditNotes));
        $totalRecovered = array_sum(array_map(fn($c) => (float)($c->getRecoveredAmount() ?? 0), $creditNotes));
        $totalLost = array_sum(array_map(fn($c) => (float)($c->getLostAmount() ?? 0), $creditNotes));

        $supplierName = null;
        if ($filters['supplierId']) {
            $supplier = $supplierRepository->find($filters['supplierId']);
            $supplierName = $supplier?->getName();
        }

        $userRoles = $user ? $user->getRoles() : [];
        $userRoles = array_filter($userRoles, fn($role) => $role !== 'ROLE_USER');

        $html = $this->renderView('supplier_credit_note/export_pdf.html.twig', [
            'creditNotes' => $creditNotes,
            'hmaService' => $hmaService,
            'filters' => $filters,
            'exportDate' => new \DateTime(),
            'userName' => $user ? ($user->getFullName() ?: $user->getUserIdentifier()) : 'Inconnu',
            'userEmail' => $user ? $user->getUserIdentifier() : 'Inconnu',
            'userRoles' => $userRoles,
            'statusList' => SupplierCreditNote::getStatusList(),
            'priorityList' => SupplierCreditNote::getPriorityList(),
            'issueTypeList' => SupplierCreditNote::getIssueTypeList(),
            'supplierName' => $supplierName,
            'totalDeclaredAmount' => $totalDeclared,
            'totalRecoveredAmount' => $totalRecovered,
            'totalLostAmount' => $totalLost,
            'recoveryRate' => $totalDeclared > 0 ? round(($totalRecovered / $totalDeclared) * 100, 2) : 0,
            'pendingCount' => count(array_filter($creditNotes, fn($c) => $c->getStatus() === SupplierCreditNote::STATUS_PENDING)),
            'recoveredCount' => count(array_filter($creditNotes, fn($c) => $c->getStatus() === SupplierCreditNote::STATUS_RECOVERED)),
            'lostCount' => count(array_filter($creditNotes, fn($c) => $c->getStatus() === SupplierCreditNote::STATUS_LOST)),
        ]);

        $dompdf = new \Dompdf\Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();

        $filename = 'rapport_avoirs_' . (new \DateTime())->format('Ymd_His') . '.pdf';

        return new Response($dompdf->output(), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ]);
    }

    /**
     * Impression multiple
     */
    #[Route('/print-multiple', name: 'app_supplier_credit_note_print_multiple', methods: ['GET'])]
    public function printMultiple(
        Request $request,
        SupplierCreditNoteRepository $repository
    ): Response {
        $this->checkAccess();
        
        $userService = $this->getCurrentUserAndService();
        if (!$userService) {
            throw new AccessDeniedException('Aucun service associé.');
        }
        
        /** @var HmaService $hmaService */
        $hmaService = $userService['hmaService'];

        $ids = explode(',', $request->query->get('ids', ''));
        $creditNotes = $repository->findBy(['id' => $ids]);
        
        foreach ($creditNotes as $creditNote) {
            if ($creditNote->getHmaService()->getId() !== $hmaService->getId()) {
                throw new AccessDeniedException('Accès non autorisé à certains avoirs.');
            }
        }
        
        return $this->render('supplier_credit_note/print_multiple.html.twig', [
            'creditNotes' => $creditNotes,
        ]);
    }

    /**
     * Création directe d'un signalement (via AJAX depuis la réception)
     */
    #[Route('/new-direct', name: 'app_supplier_credit_note_new_direct', methods: ['POST'])]
    public function newDirect(Request $request): JsonResponse
    {
        $this->checkAccess();
        
        $userService = $this->getCurrentUserAndService();
        if (!$userService) {
            return $this->json(['error' => 'Utilisateur non authentifié'], 401);
        }
        
        $batchId = $request->request->get('batch_id');
        $issueType = $request->request->get('issue_type');
        $description = $request->request->get('description');
        $declaredAmount = (float)$request->request->get('declared_amount', 0);
        $priority = $request->request->get('priority', 'medium');
        $affectedQuantity = $request->request->get('affected_quantity');
        $stockAction = $request->request->get('stock_action', 'none');
        
        // Stocker les problèmes en session
        $session = $request->getSession();
        $pendingIssues = $session->get('pending_issues', []);
        
        $pendingIssues[] = [
            'batch_id' => $batchId,
            'product_name' => $request->request->get('product_name'),
            'batch_number' => $request->request->get('batch_number'),
            'quantity' => $request->request->get('quantity'),
            'unit_price' => $request->request->get('unit_price'),
            'total_price' => $request->request->get('total_price'),
            'issue_type' => $issueType,
            'description' => $description,
            'declared_amount' => $declaredAmount,
            'priority' => $priority,
            'affected_quantity' => $affectedQuantity,
            'stock_action' => $stockAction,
            'created_at' => new \DateTime()
        ];
        
        $session->set('pending_issues', $pendingIssues);
        
        $this->addFlash('info', 'Problème enregistré temporairement. Vous pourrez créer l\'avoir après la réception du lot.');
        
        return $this->json(['success' => true]);
    }
}