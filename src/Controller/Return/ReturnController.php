<?php
// src/Controller/Return/ReturnController.php

namespace App\Controller\Return;

use App\Entity\Order;
use App\Entity\ReturnOrder;
use App\Entity\User;
use App\Entity\OrderItem;
use App\Service\Return\ReturnService;
use App\Repository\OrderRepository;
use App\Repository\ReturnOrderRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Psr\Log\LoggerInterface;
use Dompdf\Dompdf;
use Dompdf\Options;

#[Route('/returns')]
class ReturnController extends AbstractController
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private ReturnService $returnService,
        private ReturnOrderRepository $returnOrderRepository,
        private OrderRepository $orderRepository,
        private UserRepository $userRepository,
        private LoggerInterface $logger
    ) {
    }

    private function checkAccess(): void
    {
        if (!$this->isGranted('ROLE_ADMIN') && 
            !$this->isGranted('ROLE_MANAGER') && 
            !$this->isGranted('ROLE_STOCK_MANAGER') &&
            !$this->isGranted('ROLE_CASHIER')) {
            throw new AccessDeniedException('Accès refusé');
        }
    }

    private function getCurrentHmaService()
    {
        $user = $this->getUser();
        if (!$user) return null;
        if ($user instanceof \App\Entity\HmaService) return $user;
        if ($user instanceof User) return $user->getHmaService();
        return null;
    }

    #[Route('/', name: 'returns_index', methods: ['GET'])]
    public function index(Request $request): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        
        if (!$hmaService) {
            throw new AccessDeniedException('Aucun service associé');
        }

        $page = $request->query->getInt('page', 1);
        $limit = 15;
        
        $filters = [
            'status' => $request->query->get('status', 'all'),
            'search' => $request->query->get('search', ''),
            'user_id' => $request->query->get('user_id', ''),
            'date_from' => $request->query->get('date_from', ''),
            'date_to' => $request->query->get('date_to', ''),
        ];

        $dateFrom = $filters['date_from'] ? new \DateTime($filters['date_from']) : null;
        $dateTo = $filters['date_to'] ? new \DateTime($filters['date_to']) : null;

        $returns = $this->returnOrderRepository->findFiltered(
            $hmaService,
            $filters['status'],
            $filters['search'],
            $dateFrom,
            $dateTo,
            $page,
            $limit
        );

        $totalReturns = $this->returnOrderRepository->countFiltered(
            $hmaService,
            $filters['status'],
            $filters['search'],
            $dateFrom,
            $dateTo
        );

        $totalPages = ceil($totalReturns / $limit);

        $users = $this->userRepository->createQueryBuilder('u')
            ->innerJoin('u.returns', 'r')
            ->where('r.hma_service = :hmaService')
            ->setParameter('hmaService', $hmaService)
            ->groupBy('u.id')
            ->orderBy('u.full_name', 'ASC')
            ->getQuery()
            ->getResult();

        $stats = $this->returnService->getReturnStats($hmaService);

        $hmaService = $this->getCurrentHmaService();
        $companyType = $hmaService ? $hmaService->getType() : 'retail';

        return $this->render('return/index.html.twig', [
            'returns' => $returns,
            'stats' => $stats,
            'filters' => $filters,
            'users' => $users,
            'currentPage' => $page,
            'totalPages' => $totalPages,
            'totalReturns' => $totalReturns,
            'statuses' => ['pending', 'approved', 'completed', 'rejected'],
            'reasons' => [
                'product_defective' => 'Produit défectueux',
                'wrong_product' => 'Produit non conforme',
                'customer_cancellation' => 'Annulation client',
                'quality_issue' => 'Problème de qualité',
                'expired_product' => 'Produit expiré',
                'customer_change_mind' => 'Client changé d\'avis',
                'other' => 'Autre motif',
                'companyType' => $companyType
            ]
        ]);
    }

    #[Route('/export-pdf', name: 'returns_export_pdf', methods: ['GET'])]
    public function exportPdf(Request $request): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        
        if (!$hmaService) {
            throw new AccessDeniedException('Aucun service associé');
        }

        /** @var \App\Entity\User $user */
        $user = $this->getUser();
        
        $userRoles = $user ? $user->getRoles() : [];
        $userRoles = array_filter($userRoles, function($role) {
            return $role !== 'ROLE_USER';
        });
        
        $roleLabels = [
            'ROLE_SUPER_ADMIN' => 'Super Administrateur',
            'ROLE_ADMIN' => 'Administrateur',
            'ROLE_MANAGER' => 'Manager',
            'ROLE_STOCK_MANAGER' => 'Responsable Stock',
            'ROLE_CASHIER' => 'Caissier',
        ];
        
        $userRoleLabels = [];
        foreach ($userRoles as $role) {
            $userRoleLabels[] = $roleLabels[$role] ?? $role;
        }
        
        $filters = [
            'status' => $request->query->get('status', 'all'),
            'search' => $request->query->get('search', ''),
            'user_id' => $request->query->get('user_id', ''),
            'date_from' => $request->query->get('date_from', ''),
            'date_to' => $request->query->get('date_to', ''),
        ];

        $dateFrom = $filters['date_from'] ? new \DateTime($filters['date_from']) : null;
        $dateTo = $filters['date_to'] ? new \DateTime($filters['date_to']) : null;

        $returns = $this->returnOrderRepository->findFiltered(
            $hmaService,
            $filters['status'],
            $filters['search'],
            $dateFrom,
            $dateTo,
            1,
            9999
        );

        $totalRefunded = 0;
        foreach ($returns as $return) {
            $totalRefunded += (float) $return->getTotalRefundAmount();
        }

        $filterUserName = null;
        if ($filters['user_id']) {
            $filterUser = $this->userRepository->find($filters['user_id']);
            if ($filterUser) {
                $filterUserName = $filterUser->getFullName();
            }
        }

        $formattedDateFrom = $filters['date_from'] ? date('d/m/Y', strtotime($filters['date_from'])) : '';
        $formattedDateTo = $filters['date_to'] ? date('d/m/Y', strtotime($filters['date_to'])) : '';

        // Créez un tableau filtersWithFormattedDates pour le template
        $filtersForTemplate = [
            'status' => $filters['status'],
            'search' => $filters['search'],
            'user_id' => $filters['user_id'],
            'date_from' => $formattedDateFrom,
            'date_to' => $formattedDateTo,
        ];

        $html = $this->renderView('return/export_pdf.html.twig', [
        'returns' => $returns,
        'filters' => $filtersForTemplate, 
        'hmaService' => $hmaService,
        'userName' => $user->getFullName(),
        'userEmail' => $user->getEmail(),
        'userRoles' => $userRoleLabels,
        'exportDate' => new \DateTime(),
        'totalReturns' => count($returns),
        'totalRefunded' => $totalRefunded,
        'filterUserName' => $filterUserName,
        'statusLabels' => [
            'pending' => 'En attente',
            'approved' => 'Approuve',
            'completed' => 'Rembourse',
            'rejected' => 'Rejete'
        ],
        'reasons' => [
            'product_defective' => 'Produit defectueux',
            'wrong_product' => 'Produit non conforme',
            'customer_cancellation' => 'Annulation client',
            'quality_issue' => 'Probleme de qualite',
            'expired_product' => 'Produit expire',
            'customer_change_mind' => 'Client change d avis',
            'other' => 'Autre motif'
        ]
    ]);

        $options = new Options();
        $options->set('defaultFont', 'Courier');
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', true);
        $options->set('isPhpEnabled', false);
        
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        
        $filename = sprintf('retours_%s.pdf', (new \DateTime())->format('Y-m-d_H-i-s'));
        
        return new Response(
            $dompdf->output(),
            200,
            [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename="' . $filename . '"'
            ]
        );
    }

    #[Route('/new/{orderId}', name: 'returns_new', methods: ['GET', 'POST'])]
    public function new(Request $request, int $orderId): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        
        if (!$hmaService) {
            throw new AccessDeniedException('Aucun service associé');
        }

        $order = $this->orderRepository->find($orderId);
        if (!$order || $order->getHmaService()->getId() !== $hmaService->getId()) {
            throw $this->createNotFoundException('Commande non trouvée');
        }

        // 🔥 Récupérer les quantités déjà retournées (TOUS les retours, pas seulement pending/approved)
        $returnedQuantities = $this->returnOrderRepository->getTotalReturnedQuantitiesByOrder($order);
        
        // 🔥 Calculer les quantités encore retournables pour chaque article
        $maxReturnable = [];
        foreach ($order->getOrderItems() as $orderItem) {
            $alreadyReturned = $returnedQuantities[$orderItem->getId()] ?? 0;
            $remaining = $orderItem->getQuantity() - $alreadyReturned;
            $maxReturnable[$orderItem->getId()] = $remaining;
            
            // Si plus rien à retourner, l'article n'est plus disponible
            if ($remaining <= 0) {
                $this->addFlash('warning', sprintf(
                    'Le produit "%s" a déjà été entièrement retourné (%d/%d).',
                    $orderItem->getProductName(),
                    $alreadyReturned,
                    $orderItem->getQuantity()
                ));
            }
        }
        
        // 🔥 Vérifier s'il reste au moins un article à retourner
        $hasRemainingItems = false;
        foreach ($maxReturnable as $remaining) {
            if ($remaining > 0) {
                $hasRemainingItems = true;
                break;
            }
        }
        
        if (!$hasRemainingItems) {
            $this->addFlash('error', 'Tous les articles de cette commande ont déjà été entièrement retournés.');
            return $this->redirectToRoute('returns_index');
        }

        // Traitement du formulaire POST
        if ($request->isMethod('POST')) {
            $itemsToReturn = $request->request->all('items') ?? [];
            $reason = $request->request->get('reason');
            $reasonNotes = $request->request->get('reason_notes');
            $refundMethod = $request->request->get('refund_method');

            if (empty($itemsToReturn)) {
                $this->addFlash('error', 'Veuillez sélectionner au moins un article à retourner.');
                return $this->redirectToRoute('returns_new', ['orderId' => $orderId]);
            }

            // 🔥 Vérifier que les quantités demandées ne dépassent pas les restants
            foreach ($itemsToReturn as $orderItemId => $quantity) {
                $maxAllowed = $maxReturnable[$orderItemId] ?? 0;
                if ($quantity > $maxAllowed) {
                    $orderItem = $this->entityManager->getRepository(OrderItem::class)->find($orderItemId);
                    $this->addFlash('error', sprintf(
                        'Vous ne pouvez retourner que %d unité(s) de "%s". Déjà retourné: %d, Vendue: %d',
                        $maxAllowed,
                        $orderItem?->getProductName(),
                        ($returnedQuantities[$orderItemId] ?? 0),
                        $orderItem?->getQuantity()
                    ));
                    return $this->redirectToRoute('returns_new', ['orderId' => $orderId]);
                }
            }

            try {
                $returnOrder = $this->returnService->createReturn(
                    $order,
                    $this->getUser(),
                    $hmaService,
                    $itemsToReturn,
                    $reason,
                    $reasonNotes,
                    $refundMethod
                );

                $this->addFlash('success', sprintf('Demande de retour #%s créée avec succès.', $returnOrder->getReturnNumber()));
                return $this->redirectToRoute('returns_show', ['id' => $returnOrder->getId()]);
            } catch (\Exception $e) {
                $this->addFlash('error', $e->getMessage());
            }
        }

        return $this->render('return/new.html.twig', [
            'order' => $order,
            'returned_quantities' => $returnedQuantities,
            'max_returnable' => $maxReturnable,  // 🔥 Ajouter les quantités max retournables
            'reasons' => [
                'product_defective' => 'Produit défectueux',
                'wrong_product' => 'Produit non conforme / erreur de produit',
                'customer_cancellation' => 'Annulation par le client',
                'quality_issue' => 'Problème de qualité',
                'expired_product' => 'Produit expiré',
                'customer_change_mind' => 'Client changé d\'avis',
                'other' => 'Autre motif'
            ],
            'refund_methods' => [
                'cash' => '💰 Espèces',
                'mobile_money' => '📱 Mobile Money',
                'bank_transfer' => '🏦 Virement bancaire',
                'wallet' => '📱 Porte-monnaie électronique',
                'credit_note' => '📝 Avoir / Note de crédit'
            ]
        ]);
    }
    #[Route('/{id}/edit', name: 'returns_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ReturnOrder $returnOrder): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        
        if (!$hmaService || $returnOrder->getHmaService()->getId() !== $hmaService->getId()) {
            throw new AccessDeniedException('Accès non autorisé');
        }

        if ($returnOrder->getStatus() !== 'pending') {
            $this->addFlash('warning', 'Seul les retours en attente peuvent être modifiés.');
            return $this->redirectToRoute('returns_show', ['id' => $returnOrder->getId()]);
        }

        if ($request->isMethod('POST')) {
            $reason = $request->request->get('reason');
            $reasonNotes = $request->request->get('reason_notes');
            $refundMethod = $request->request->get('refund_method');
            $notes = $request->request->get('notes');

            $returnOrder->setReason($reason);
            $returnOrder->setReasonNotes($reasonNotes);
            $returnOrder->setRefundMethod($refundMethod);
            $returnOrder->setNotes($notes);
            $returnOrder->setUpdatedAt(new \DateTime());

            $this->entityManager->flush();

            $this->addFlash('success', 'Retour modifié avec succès.');
            return $this->redirectToRoute('returns_show', ['id' => $returnOrder->getId()]);
        }

        return $this->render('return/edit.html.twig', [
            'returnOrder' => $returnOrder,
            'reasons' => [
                'product_defective' => 'Produit défectueux',
                'wrong_product' => 'Produit non conforme / erreur de produit',
                'customer_cancellation' => 'Annulation par le client',
                'quality_issue' => 'Problème de qualité',
                'expired_product' => 'Produit expiré',
                'customer_change_mind' => 'Client changé d\'avis',
                'other' => 'Autre motif'
            ],
            'refund_methods' => [
                'cash' => '💰 Espèces',
                'mobile_money' => '📱 Mobile Money',
                'bank_transfer' => '🏦 Virement bancaire',
                'wallet' => '📱 Porte-monnaie électronique',
                'credit_note' => '📝 Avoir / Note de crédit'
            ]
        ]);
    }

    #[Route('/{id}', name: 'returns_show', methods: ['GET'])]
    public function show(ReturnOrder $returnOrder): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        
        if (!$hmaService || $returnOrder->getHmaService()->getId() !== $hmaService->getId()) {
            throw new AccessDeniedException('Accès non autorisé');
        }

        // 🔥 Récupérer le total des retours cumulés pour chaque article de la commande
        $order = $returnOrder->getOriginalOrder();
        $totalReturnedQuantities = [];
        
        if ($order) {
            $totalReturnedQuantities = $this->returnOrderRepository->getTotalReturnedQuantitiesByOrder($order);
        }

        $hmaService = $this->getCurrentHmaService();
        $companyType = $hmaService ? $hmaService->getType() : 'retail';

        return $this->render('return/show.html.twig', [
            'returnOrder' => $returnOrder,
            'totalReturnedQuantities' => $totalReturnedQuantities,
            'companyType' => $companyType,
            'reasons' => [
                'product_defective' => 'Produit défectueux',
                'wrong_product' => 'Produit non conforme',
                'customer_cancellation' => 'Annulation client',
                'quality_issue' => 'Problème de qualité',
                'expired_product' => 'Produit expiré',
                'customer_change_mind' => 'Client changé d\'avis',
                'other' => 'Autre motif',
            ]
        ]);
    }

    #[Route('/{id}/approve', name: 'returns_approve', methods: ['POST'])]
    public function approve(ReturnOrder $returnOrder, Request $request): JsonResponse
    {
        $this->checkAccess();
        
        if (!$this->isGranted('ROLE_ADMIN') && !$this->isGranted('ROLE_MANAGER')) {
            return $this->json(['error' => 'Permission refusée.'], 403);
        }

        try {
            $this->returnService->approveReturn($returnOrder, $this->getUser());
            return $this->json(['success' => true, 'message' => 'Retour approuvé avec succès']);
        } catch (\Exception $e) {
            return $this->json(['error' => $e->getMessage()], 400);
        }
    }

    #[Route('/{id}/complete', name: 'returns_complete', methods: ['POST'])]
    public function complete(ReturnOrder $returnOrder, Request $request): JsonResponse
    {
        $this->checkAccess();
        
        if (!$this->isGranted('ROLE_ADMIN') && !$this->isGranted('ROLE_MANAGER')) {
            return $this->json(['error' => 'Permission refusée.'], 403);
        }

        try {
            $this->logger->info('Appel de completeReturn pour le retour ID: ' . $returnOrder->getId());
            
            $this->returnService->completeReturn($returnOrder, $this->getUser());
            
            $this->logger->info('completeReturn terminé avec succès');
            
            return $this->json(['success' => true, 'message' => 'Remboursement effectué et stock mis à jour']);
        } catch (\Exception $e) {
            $this->logger->error('Erreur dans completeReturn: ' . $e->getMessage(), [
                'trace' => $e->getTraceAsString()
            ]);
            return $this->json(['error' => $e->getMessage()], 400);
        }
    }

    #[Route('/{id}/reject', name: 'returns_reject', methods: ['POST'])]
    public function reject(ReturnOrder $returnOrder, Request $request): JsonResponse
    {
        $this->checkAccess();
        
        if (!$this->isGranted('ROLE_ADMIN') && !$this->isGranted('ROLE_MANAGER')) {
            return $this->json(['error' => 'Permission refusée.'], 403);
        }

        $reason = $request->request->get('reason');

        try {
            $this->returnService->rejectReturn($returnOrder, $this->getUser(), $reason);
            return $this->json(['success' => true, 'message' => 'Retour rejeté']);
        } catch (\Exception $e) {
            return $this->json(['error' => $e->getMessage()], 400);
        }
    }

    #[Route('/api/order-items/{orderId}', name: 'returns_api_order_items', methods: ['GET'])]
    public function getOrderItems(int $orderId): JsonResponse
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        
        $order = $this->orderRepository->find($orderId);
        if (!$order || $order->getHmaService()->getId() !== $hmaService->getId()) {
            return $this->json(['error' => 'Commande non trouvée'], 404);
        }

        $items = [];
        foreach ($order->getOrderItems() as $orderItem) {
            $items[] = [
                'id' => $orderItem->getId(),
                'product_name' => $orderItem->getProductName(),
                'quantity' => $orderItem->getQuantity(),
                'unit_price' => (float) $orderItem->getUnitPrice(),
                'total_price' => (float) $orderItem->getTotalPrice(),
                'has_promotion' => $orderItem->getPromotionId() !== null,
                'promotion_name' => $orderItem->getPromotionName(),
                'type' => $orderItem->getRecipe() ? 'recipe' : 'product'
            ];
        }

        return $this->json($items);
    }

    #[Route('/api/search-orders', name: 'returns_search_orders', methods: ['GET'])]
    public function searchOrders(Request $request): JsonResponse
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        
        $query = $request->query->get('q', '');
        
        if (strlen($query) < 3) {
            return $this->json([]);
        }
        
        $qb = $this->orderRepository->createQueryBuilder('o')
            ->where('o.hma_service = :hmaService')
            ->setParameter('hmaService', $hmaService)
            ->andWhere('o.order_number LIKE :query OR o.customer_phone LIKE :query OR o.customer_name LIKE :query')
            ->setParameter('query', '%' . $query . '%')
            ->orderBy('o.created_at', 'DESC')
            ->setMaxResults(20);
        
        $orders = $qb->getQuery()->getResult();
        
        $results = [];
        foreach ($orders as $order) {
            // 🔥 Récupérer les quantités déjà retournées
            $returnedQuantities = $this->returnOrderRepository->getTotalReturnedQuantitiesByOrder($order);
            
            // Calculer le total déjà retourné
            $alreadyReturnedAmount = 0;
            $remainingItems = 0;
            
            foreach ($order->getOrderItems() as $orderItem) {
                $alreadyReturned = $returnedQuantities[$orderItem->getId()] ?? 0;
                $remaining = $orderItem->getQuantity() - $alreadyReturned;
                if ($remaining > 0) {
                    $remainingItems++;
                }
                $alreadyReturnedAmount += $alreadyReturned * (float) $orderItem->getUnitPrice();
            }
            
            // Vérifier s'il existe un retour en cours
            $existingReturn = $this->returnOrderRepository->findOneBy([
                'original_order' => $order,
                'status' => ['pending', 'approved']
            ]);
            
            $results[] = [
                'id' => $order->getId(),
                'order_number' => $order->getOrderNumber(),
                'customer_name' => $order->getCustomerName(),
                'customer_phone' => $order->getCustomerPhone(),
                'total_amount' => (float) $order->getTotalAmount(),
                'created_at' => $order->getCreatedAt()->format('Y-m-d H:i:s'),
                'has_return' => $existingReturn !== null,
                'already_returned_amount' => $alreadyReturnedAmount,
                'remaining_items' => $remainingItems
            ];
        }
        
        return $this->json($results);
    }

    #[Route('/print-receipt/{id}', name: 'returns_print_receipt', methods: ['GET'])]
    public function printReceipt(ReturnOrder $returnOrder): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        
        if (!$hmaService || $returnOrder->getHmaService()->getId() !== $hmaService->getId()) {
            throw new AccessDeniedException('Accès non autorisé');
        }

        $html = $this->renderView('return/receipt_pdf.html.twig', [
            'returnOrder' => $returnOrder,
            'hmaService' => $hmaService,
            'printDate' => new \DateTime(),
            'reasons' => [
                'product_defective' => 'Produit défectueux',
                'wrong_product' => 'Produit non conforme',
                'customer_cancellation' => 'Annulation client',
                'quality_issue' => 'Problème de qualité',
                'expired_product' => 'Produit expiré',
                'customer_change_mind' => 'Client changé d\'avis',
                'other' => 'Autre motif'
            ]
        ]);

        $options = new Options();
        $options->set('defaultFont', 'Courier');
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', true);
        $options->set('isPhpEnabled', false);
        
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A5', 'portrait');
        $dompdf->render();
        
        $filename = sprintf('recu_retour_%s.pdf', $returnOrder->getReturnNumber());
        
        return new Response(
            $dompdf->output(),
            200,
            [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename="' . $filename . '"'
            ]
        );
    }

    #[Route('/print-multiple-receipts', name: 'returns_print_multiple_receipts', methods: ['POST'])]
    public function printMultipleReceipts(Request $request): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        
        if (!$hmaService) {
            throw new AccessDeniedException('Aucun service associé');
        }

        $returnIds = $request->request->get('return_ids', []);
        if (empty($returnIds)) {
            $this->addFlash('error', 'Aucun retour sélectionné');
            return $this->redirectToRoute('returns_index');
        }

        $returns = $this->returnOrderRepository->findBy([
            'id' => $returnIds,
            'hma_service' => $hmaService
        ]);

        if (empty($returns)) {
            $this->addFlash('error', 'Aucun retour trouvé');
            return $this->redirectToRoute('returns_index');
        }

        // Générer un PDF combiné
        $html = $this->renderView('return/multiple_receipts_pdf.html.twig', [
            'returns' => $returns,
            'hmaService' => $hmaService,
            'printDate' => new \DateTime(),
            'reasons' => [
                'product_defective' => 'Produit défectueux',
                'wrong_product' => 'Produit non conforme',
                'customer_cancellation' => 'Annulation client',
                'quality_issue' => 'Problème de qualité',
                'expired_product' => 'Produit expiré',
                'customer_change_mind' => 'Client changé d\'avis',
                'other' => 'Autre motif'
            ]
        ]);

        $options = new Options();
        $options->set('defaultFont', 'Courier');
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', true);
        $options->set('isPhpEnabled', false);
        
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        
        $filename = sprintf('recus_retours_%s.pdf', (new \DateTime())->format('Y-m-d_H-i-s'));
        
        return new Response(
            $dompdf->output(),
            200,
            [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename="' . $filename . '"'
            ]
        );
    }
}