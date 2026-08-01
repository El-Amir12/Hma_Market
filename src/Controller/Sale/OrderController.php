<?php
// src/Controller/Sale/OrderController.php

namespace App\Controller\Sale;

use App\Entity\HmaService;
use App\Entity\Order;
use App\Entity\User;
use App\Repository\AnalysisPriceRepository;
use App\Repository\OrderRepository;
use App\Repository\UserRepository;
use App\Repository\ReturnOrderRepository;
use App\Service\Export\SaleExportService;
use App\Service\Sale\PromotionCalculator;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Dompdf\Dompdf;
use Dompdf\Options;
use Twig\Environment;

#[Route('/orders')]
class OrderController extends AbstractController
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private LoggerInterface $logger,
        private PromotionCalculator $promotionCalculator
    ) {
    }

    private function getCurrentHmaService(): ?HmaService
    {
        $user = $this->getUser();
        if (!$user) return null;
        if ($user instanceof HmaService) return $user;
        if ($user instanceof User) return $user->getHmaService();
        return null;
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

    // ==================== ROUTES STATIQUES ====================

    #[Route('/contact-super-admin', name: 'app_orders_contact_super_admin', methods: ['GET'])]
    public function contactSuperAdmin(AnalysisPriceRepository $priceRepository): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) {
            throw new AccessDeniedException('Aucun service associé');
        }
        
        $analysisPrices = $priceRepository->findBy(
            ['is_active' => true], 
            ['display_order' => 'ASC']
        );
        
        $superAdmin = $this->entityManager->getRepository(User::class)
            ->createQueryBuilder('u')
            ->where('u.is_hma_owner = :isOwner')
            ->andWhere('u.hma_service_id = :hmaService')
            ->setParameter('isOwner', true)
            ->setParameter('hmaService', $hmaService)
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
        
        if (!$superAdmin) {
            $superAdmin = $this->entityManager->getRepository(User::class)
                ->createQueryBuilder('u')
                ->where('u.roles LIKE :role')
                ->setParameter('role', '%ROLE_SUPER_ADMIN%')
                ->setMaxResults(1)
                ->getQuery()
                ->getOneOrNullResult();
        }
        
        $phone = $superAdmin ? $superAdmin->getPhone() : null;
        $whatsappUrl = $phone ? 'https://wa.me/' . preg_replace('/[^0-9]/', '', $phone) : null;
        
        return $this->render('sale/orders/contact.html.twig', [
            'superAdmin' => $superAdmin,
            'whatsappUrl' => $whatsappUrl,
            'analysisPrices' => $analysisPrices,
        ]);
    }

    #[Route('/export/excel', name: 'app_orders_export_excel', methods: ['GET'])]
    public function exportExcel(
        Request $request,
        OrderRepository $orderRepository,
        SaleExportService $exportService
    ): Response {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) {
            throw new AccessDeniedException('Aucun service associé');
        }

        $filters = $this->getFiltersFromRequest($request);
        
        return $exportService->exportSalesToExcel($hmaService, $filters);
    }

    #[Route('/export/pdf', name: 'app_orders_export_pdf', methods: ['GET'])]
    public function exportPdf(
        Request $request,
        OrderRepository $orderRepository,
        SaleExportService $exportService
    ): Response {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) {
            throw new AccessDeniedException('Aucun service associé');
        }

        $filters = $this->getFiltersFromRequest($request);
        
        return $exportService->exportSalesToPdf($hmaService, $filters);
    }

    #[Route('/', name: 'app_orders_index', methods: ['GET'])]
    public function index(
        Request $request,
        OrderRepository $orderRepository,
        UserRepository $userRepository,
        ReturnOrderRepository $returnOrderRepository
    ): Response {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) {
            throw new AccessDeniedException('Aucun service associé');
        }

        $companyType = $hmaService->getType();
        $isRestaurant = $companyType === 'restaurant';

        $filters = [
            'status' => $request->query->get('status', ''),
            'payment_method' => $request->query->get('payment_method', ''),
            'user_id' => $request->query->get('user_id', ''),
            'date_preset' => $request->query->get('date_preset', ''),
            'date_from' => $request->query->get('date_from', ''),
            'date_to' => $request->query->get('date_to', ''),
            'min_amount' => $request->query->get('min_amount', ''),
            'max_amount' => $request->query->get('max_amount', ''),
            'search' => $request->query->get('search', ''),
            'sort' => $request->query->get('sort', 'created_at'),
            'direction' => $request->query->get('direction', 'desc'),
        ];

        $dateFrom = null;
        $dateTo = null;
        if ($filters['date_preset']) {
            switch ($filters['date_preset']) {
                case 'today':
                    $dateFrom = new \DateTime('today');
                    $dateTo = new \DateTime('tomorrow');
                    break;
                case 'yesterday':
                    $dateFrom = new \DateTime('yesterday');
                    $dateTo = new \DateTime('today');
                    break;
                case 'last7days':
                    $dateFrom = new \DateTime('-7 days');
                    $dateTo = new \DateTime('tomorrow');
                    break;
                case 'last14days':
                    $dateFrom = new \DateTime('-14 days');
                    $dateTo = new \DateTime('tomorrow');
                    break;
                case 'last30days':
                    $dateFrom = new \DateTime('-30 days');
                    $dateTo = new \DateTime('tomorrow');
                    break;
                case 'last3months':
                    $dateFrom = new \DateTime('-3 months');
                    $dateTo = new \DateTime('tomorrow');
                    break;
                case 'last6months':
                    $dateFrom = new \DateTime('-6 months');
                    $dateTo = new \DateTime('tomorrow');
                    break;
                case 'last1year':
                    $dateFrom = new \DateTime('-1 year');
                    $dateTo = new \DateTime('tomorrow');
                    break;
                case 'last2years':
                    $dateFrom = new \DateTime('-2 years');
                    $dateTo = new \DateTime('tomorrow');
                    break;
                case 'last3years':
                    $dateFrom = new \DateTime('-3 years');
                    $dateTo = new \DateTime('tomorrow');
                    break;
                case 'last5years':
                    $dateFrom = new \DateTime('-5 years');
                    $dateTo = new \DateTime('tomorrow');
                    break;
                case 'last10years':
                    $dateFrom = new \DateTime('-10 years');
                    $dateTo = new \DateTime('tomorrow');
                    break;
            }
        } else {
            if ($filters['date_from']) {
                $dateFrom = new \DateTime($filters['date_from']);
                $dateFrom->setTime(0, 0, 0);
            }
            if ($filters['date_to']) {
                $dateTo = new \DateTime($filters['date_to']);
                $dateTo->setTime(23, 59, 59);
            }
        }

        $users = $userRepository->findBy(['hma_service_id' => $hmaService]);

        $page = $request->query->getInt('page', 1);
        $limit = 15;
        
        $query = $orderRepository->findFilteredQuery(
            $hmaService,
            $filters['status'],
            $filters['payment_method'],
            $filters['user_id'] ? (int)$filters['user_id'] : null,
            $dateFrom,
            $dateTo,
            $filters['min_amount'] ? (float)$filters['min_amount'] : null,
            $filters['max_amount'] ? (float)$filters['max_amount'] : null,
            $filters['search'],
            $filters['sort'],
            $filters['direction']
        );
        
        $paginator = new Paginator($query);
        $totalItems = count($paginator);
        $totalPages = ceil($totalItems / $limit);
        
        $query->setFirstResult(($page - 1) * $limit)
            ->setMaxResults($limit);
        
        $orders = $query->getResult();

        $stats = $orderRepository->getStats($hmaService, $dateFrom, $dateTo);
        $returnStats = $returnOrderRepository->getReturnStats($hmaService, $dateFrom, $dateTo);

        return $this->render('sale/orders/index.html.twig', [
            'orders' => $orders,
            'stats' => $stats,
            'returnStats' => $returnStats,
            'filters' => $filters,
            'users' => $users,
            'currentPage' => $page,
            'totalPages' => $totalPages,
            'totalItems' => $totalItems,
            'isRestaurant' => $isRestaurant,
            'companyType' => $companyType,
            'payment_methods' => ['cash', 'card', 'mobile_money'],
            'statuses' => ['completed', 'cancelled', 'refunded'],
            'date_presets' => [
                'today' => 'Aujourd\'hui',
                'yesterday' => 'Hier',
                'last7days' => '7 derniers jours',
                'last14days' => '14 derniers jours',
                'last30days' => '30 derniers jours',
                'last3months' => '3 derniers mois',
                'last6months' => '6 derniers mois',
                'last1year' => '1 an',
                'last2years' => '2 ans',
                'last3years' => '3 ans',
                'last5years' => '5 ans',
                'last10years' => '10 ans',
            ]
        ]);
    }

    // ==================== ROUTES AVEC PARAMÈTRES ====================

    #[Route('/{id}/toggle', name: 'app_orders_toggle', methods: ['POST'])]
    public function toggle(Request $request, Order $order, EntityManagerInterface $em): Response
    {
        $this->checkAccess();
        
        if (!$this->isGranted('ROLE_ADMIN')) {
            throw new AccessDeniedException('Seul l\'administrateur peut modifier le statut des ventes.');
        }
        
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService || $order->getHmaService()->getId() !== $hmaService->getId()) {
            throw new AccessDeniedException('Accès non autorisé');
        }
        
        if ($this->isCsrfTokenValid('toggle_order', $request->request->get('_token'))) {
            $order->setIsActive(!$order->isActive());
            $em->flush();
            
            $status = $order->isActive() ? 'réactivée' : 'désactivée';
            $this->addFlash('success', "Vente {$status} avec succès.");
        }
        
        return $this->redirectToRoute('app_orders_index');
    }

    #[Route('/{id}/delete', name: 'app_orders_delete', methods: ['POST'])]
    public function delete(Request $request, Order $order, EntityManagerInterface $em): Response
    {
        $this->checkAccess();
        
        if (!$this->isGranted('ROLE_ADMIN')) {
            throw new AccessDeniedException('Seul l\'administrateur peut supprimer des ventes.');
        }
        
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService || $order->getHmaService()->getId() !== $hmaService->getId()) {
            throw new AccessDeniedException('Accès non autorisé');
        }
        
        if ($this->isCsrfTokenValid('delete_order', $request->request->get('_token'))) {
            $em->remove($order);
            $em->flush();
            
            $this->addFlash('success', 'Vente supprimée avec succès.');
        }
        
        return $this->redirectToRoute('app_orders_index');
    }

    #[Route('/{id}', name: 'app_orders_show', methods: ['GET'])]
    public function show(Order $order, ReturnOrderRepository $returnOrderRepository): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService || $order->getHmaService()->getId() !== $hmaService->getId()) {
            throw new AccessDeniedException('Accès non autorisé');
        }

        $isRestaurant = $hmaService->getType() === 'restaurant';
        
        $returns = $returnOrderRepository->findBy(['original_order' => $order], ['created_at' => 'DESC']);

        $hmaService = $this->getCurrentHmaService();
        $companyType = $hmaService ? $hmaService->getType() : 'retail';
        
        $reasons = [
            'product_defective' => 'Produit défectueux',
            'wrong_product' => 'Produit non conforme',
            'customer_cancellation' => 'Annulation client',
            'quality_issue' => 'Problème de qualité',
            'expired_product' => 'Produit expiré',
            'customer_change_mind' => 'Client changé d\'avis',
            'other' => 'Autre motif'
        ];

        return $this->render('sale/orders/show.html.twig', [
            'order' => $order,
            'isRestaurant' => $isRestaurant,
            'returns' => $returns,
            'reasons' => $reasons,
            'companyType' => $companyType
        ]);
    }

    #[Route('/{id}/receipt-content', name: 'app_orders_receipt_content', methods: ['GET'])]
    public function receiptContent(int $id, OrderRepository $orderRepository): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        
        $order = $orderRepository->find($id);
        if (!$order || $order->getHmaService()->getId() !== $hmaService->getId()) {
            throw $this->createNotFoundException('Vente non trouvée');
        }
        
        $isRestaurant = $hmaService->getType() === 'restaurant';
        
        return $this->render('sale/orders/receipt_content.html.twig', [
            'order' => $order,
            'isRestaurant' => $isRestaurant,
            'company' => $hmaService
        ]);
    }

    #[Route('/receipts-content', name: 'app_orders_receipts_content', methods: ['GET'])]
    public function receiptsContent(Request $request, OrderRepository $orderRepository): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        
        $ids = explode(',', $request->query->get('ids', ''));
        $orders = $orderRepository->findBy(['id' => $ids]);
        
        $isRestaurant = $hmaService->getType() === 'restaurant';
        
        return $this->render('sale/orders/receipts_content.html.twig', [
            'orders' => $orders,
            'isRestaurant' => $isRestaurant,
            'company' => $hmaService
        ]);
    }

    #[Route('/api/search-customer', name: 'api_search_customer', methods: ['GET'])]
    public function searchCustomer(Request $request, OrderRepository $orderRepository): JsonResponse
    {
        $this->checkAccess();
        $phone = $request->query->get('phone', '');
        
        if (empty($phone)) {
            return $this->json(['found' => false]);
        }
        
        $lastOrder = $orderRepository->createQueryBuilder('o')
            ->where('o.customer_phone = :phone')
            ->andWhere('o.customer_name IS NOT NULL')
            ->andWhere('o.customer_name != :empty')
            ->setParameter('phone', $phone)
            ->setParameter('empty', '')
            ->orderBy('o.created_at', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
        
        if ($lastOrder && $lastOrder->getCustomerName()) {
            return $this->json([
                'found' => true,
                'customer_name' => $lastOrder->getCustomerName(),
                'customer_phone' => $lastOrder->getCustomerPhone()
            ]);
        }
        
        return $this->json(['found' => false]);
    }

    #[Route('/daily-stats', name: 'api_daily_stats', methods: ['GET'])]
    public function getDailyStats(): JsonResponse
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        
        if (!$hmaService) {
            return $this->json([
                'error' => 'Aucune entreprise associée',
                'can_sell' => true,
                'limit' => 'Illimité',
                'used' => 0,
                'remaining' => 'Illimité',
                'percentage' => 100,
                'is_unlimited' => true,
                'plan' => 'unknown',
                'whatsapp_url' => null
            ]);
        }
        
        $plan = $hmaService->getCurrentPlan();
        $limits = HmaService::PLAN_LIMITS[$plan] ?? HmaService::PLAN_LIMITS[HmaService::PLAN_FREEMIUM];
        
        $maxOrdersPerDay = $limits['max_orders_per_day'] ?? PHP_INT_MAX;
        $isUnlimited = $maxOrdersPerDay === PHP_INT_MAX;
        
        $today = new \DateTime();
        $today->setTime(0, 0, 0);
        $tomorrow = (clone $today)->modify('+1 day');
        
        $ordersToday = $this->entityManager->getRepository(Order::class)
            ->createQueryBuilder('o')
            ->select('COUNT(o.id)')
            ->where('o.hma_service = :hmaService')
            ->andWhere('o.created_at >= :today')
            ->andWhere('o.created_at < :tomorrow')
            ->setParameter('hmaService', $hmaService)
            ->setParameter('today', $today)
            ->setParameter('tomorrow', $tomorrow)
            ->getQuery()
            ->getSingleScalarResult();
        
        $remaining = $isUnlimited ? 'Illimité' : max(0, $maxOrdersPerDay - $ordersToday);
        $percentage = $isUnlimited ? 100 : min(100, round(($ordersToday / $maxOrdersPerDay) * 100));
        
        $superAdmin = $this->entityManager->getRepository(User::class)
            ->createQueryBuilder('u')
            ->where('u.is_hma_owner = :isOwner')
            ->andWhere('u.hma_service = :hmaService')
            ->setParameter('isOwner', true)
            ->setParameter('hmaService', $hmaService)
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
        
        $whatsappNumber = $superAdmin ? $superAdmin->getPhone() : null;
        $whatsappUrl = $whatsappNumber ? 'https://wa.me/' . preg_replace('/[^0-9]/', '', $whatsappNumber) : null;
        
        return $this->json([
            'can_sell' => $isUnlimited || $ordersToday < $maxOrdersPerDay,
            'limit' => $isUnlimited ? 'Illimité' : $maxOrdersPerDay,
            'used' => $ordersToday,
            'remaining' => $remaining,
            'percentage' => $percentage,
            'is_unlimited' => $isUnlimited,
            'plan' => $plan,
            'whatsapp_url' => $whatsappUrl,
            'message' => $isUnlimited 
                ? 'Aucune limite de ventes quotidienne'
                : ($ordersToday < $maxOrdersPerDay 
                    ? sprintf('Ventes du jour: %d/%d - Encore %d vente(s) possible(s)', $ordersToday, $maxOrdersPerDay, $remaining)
                    : sprintf('⚠️ Limite atteinte: %d/%d ventes aujourd\'hui', $ordersToday, $maxOrdersPerDay))
        ]);
    }

    #[Route('/check-can-sell', name: 'api_check_can_sell', methods: ['GET'])]
    public function checkCanSell(): JsonResponse
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        
        if (!$hmaService) {
            return $this->json([
                'can_sell' => true,
                'error' => 'Aucune entreprise associée'
            ], 200);
        }
        
        $plan = $hmaService->getCurrentPlan();
        $limits = HmaService::PLAN_LIMITS[$plan] ?? HmaService::PLAN_LIMITS[HmaService::PLAN_FREEMIUM];
        
        $maxOrdersPerDay = $limits['max_orders_per_day'] ?? PHP_INT_MAX;
        $isUnlimited = $maxOrdersPerDay === PHP_INT_MAX;
        
        if ($isUnlimited) {
            return $this->json([
                'can_sell' => true,
                'remaining' => PHP_INT_MAX,
                'limit' => 'Illimité',
                'used' => 0,
                'plan' => $plan,
                'message' => 'Pas de limite quotidienne pour votre abonnement'
            ]);
        }
        
        $today = new \DateTime();
        $today->setTime(0, 0, 0);
        $tomorrow = (clone $today)->modify('+1 day');
        
        $ordersToday = $this->entityManager->getRepository(Order::class)
            ->createQueryBuilder('o')
            ->select('COUNT(o.id)')
            ->where('o.hma_service = :hmaService')
            ->andWhere('o.created_at >= :today')
            ->andWhere('o.created_at < :tomorrow')
            ->setParameter('hmaService', $hmaService)
            ->setParameter('today', $today)
            ->setParameter('tomorrow', $tomorrow)
            ->getQuery()
            ->getSingleScalarResult();
        
        $remaining = max(0, $maxOrdersPerDay - $ordersToday);
        
        return $this->json([
            'can_sell' => $ordersToday < $maxOrdersPerDay,
            'remaining' => $remaining,
            'limit' => $maxOrdersPerDay,
            'used' => $ordersToday,
            'plan' => $plan,
            'message' => $ordersToday < $maxOrdersPerDay 
                ? sprintf('Vous pouvez encore effectuer %d vente(s) aujourd\'hui', $remaining)
                : sprintf('Limite quotidienne atteinte (%d ventes maximum). Veuillez réessayer demain.', $maxOrdersPerDay)
        ]);
    }

    #[Route('/contact-admin', name: 'app_orders_contact_admin', methods: ['GET'])]
    public function contactAdmin(): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        
        if (!$hmaService) {
            throw $this->createNotFoundException('Aucun service associé');
        }
        
        $admin = $this->entityManager->getRepository(User::class)
            ->createQueryBuilder('u')
            ->where('u.is_hma_owner = :isOwner')
            ->andWhere('u.hma_service = :hmaService')
            ->setParameter('isOwner', true)
            ->setParameter('hmaService', $hmaService)
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
        
        if (!$admin) {
            $admin = $this->entityManager->getRepository(User::class)
                ->createQueryBuilder('u')
                ->where('u.hma_service = :hmaService')
                ->andWhere('u.roles LIKE :role')
                ->setParameter('hmaService', $hmaService)
                ->setParameter('role', '%ROLE_ADMIN%')
                ->setMaxResults(1)
                ->getQuery()
                ->getOneOrNullResult();
        }
        
        if (!$admin) {
            $this->addFlash('warning', 'Aucun administrateur disponible pour le moment.');
            return $this->redirectToRoute('restaurant_sale_index');
        }
        
        $dailyStats = $this->getDailyStatsForContact($hmaService);
        
        $phone = $admin->getPhone();
        $whatsappUrl = $phone ? 'https://wa.me/' . preg_replace('/[^0-9]/', '', $phone) : null;
        $email = $admin->getEmail();
        
        $companyName = $hmaService->getCompanyName() ?? $hmaService->getEmail() ?? 'Votre entreprise';
        
        return $this->render('sale/orders/contact_admin.html.twig', [
            'admin' => $admin,
            'whatsappUrl' => $whatsappUrl,
            'email' => $email,
            'phone' => $phone,
            'companyName' => $companyName,
            'dailyStats' => $dailyStats
        ]);
    }

    private function getDailyStatsForContact(HmaService $hmaService): array
    {
        $plan = $hmaService->getCurrentPlan();
        $limits = HmaService::PLAN_LIMITS[$plan] ?? HmaService::PLAN_LIMITS[HmaService::PLAN_FREEMIUM];
        
        $maxOrdersPerDay = $limits['max_orders_per_day'] ?? PHP_INT_MAX;
        $isUnlimited = $maxOrdersPerDay === PHP_INT_MAX;
        
        $today = new \DateTime();
        $today->setTime(0, 0, 0);
        $tomorrow = (clone $today)->modify('+1 day');
        
        $ordersToday = $this->entityManager->getRepository(Order::class)
            ->createQueryBuilder('o')
            ->select('COUNT(o.id)')
            ->where('o.hma_service = :hmaService')
            ->andWhere('o.created_at >= :today')
            ->andWhere('o.created_at < :tomorrow')
            ->setParameter('hmaService', $hmaService)
            ->setParameter('today', $today)
            ->setParameter('tomorrow', $tomorrow)
            ->getQuery()
            ->getSingleScalarResult();
        
        return [
            'used' => $ordersToday,
            'limit' => $isUnlimited ? 'Illimité' : $maxOrdersPerDay,
            'can_sell' => $isUnlimited || $ordersToday < $maxOrdersPerDay,
        ];
    }

    #[Route('/{id}/print', name: 'app_orders_print', methods: ['GET'])]
    public function printReceipt(int $id, OrderRepository $orderRepository): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        
        $order = $orderRepository->find($id);
        if (!$order || $order->getHmaService()->getId() !== $hmaService->getId()) {
            throw $this->createNotFoundException('Vente non trouvée');
        }
        
        $isRestaurant = $hmaService->getType() === 'restaurant';
        
        return $this->render('sale/orders/receipt_content.html.twig', [
            'order' => $order,
            'isRestaurant' => $isRestaurant,
            'company' => $hmaService
        ]);
    }

    #[Route('/{id}/update-status', name: 'app_orders_update_status', methods: ['POST'])]
    public function updateStatus(
        Request $request, 
        Order $order, 
        EntityManagerInterface $em,
        MailerInterface $mailer,
        Environment $twig
    ): Response
    {
        $this->checkAccess();
        
        if (!$this->isGranted('ROLE_SUPER_ADMIN') && !$this->isGranted('ROLE_ADMIN')) {
            throw new AccessDeniedException('Seul l\'administrateur peut modifier le statut des commandes.');
        }
        
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService || $order->getHmaService()->getId() !== $hmaService->getId()) {
            throw new AccessDeniedException('Accès non autorisé');
        }
        
        $newStatus = $request->request->get('status');
        
        // ✅ Utiliser les constantes et méthodes de l'entité
        $availableStatuses = array_keys(Order::getStatusLabels());
        if (!in_array($newStatus, $availableStatuses)) {
            $this->addFlash('error', 'Statut invalide.');
            return $this->redirectToRoute('app_orders_show', ['id' => $order->getId()]);
        }
        
        // ✅ Vérifier si on peut modifier le statut
        if ($order->getStatus() === Order::STATUS_COMPLETED && $newStatus === Order::STATUS_PENDING) {
            $this->addFlash('error', 'Impossible de passer une commande terminée en "En attente".');
            return $this->redirectToRoute('app_orders_show', ['id' => $order->getId()]);
        }
        
        if (!$this->isCsrfTokenValid('update_order_status', $request->request->get('_token'))) {
            $this->addFlash('error', 'Token CSRF invalide.');
            return $this->redirectToRoute('app_orders_show', ['id' => $order->getId()]);
        }
        
        $oldStatus = $order->getStatus();
        
        // ✅ Mettre à jour le statut
        $order->setStatus($newStatus);
        $order->setUpdatedAt(new \DateTime());
        
        // ✅ Si le statut passe à 'completed', le paiement est considéré comme payé
        if ($newStatus === Order::STATUS_COMPLETED) {
            $order->setPaymentStatus('paid');
        }
        
        $em->flush();
        
        // ✅ Récupérer l'utilisateur connecté pour déterminer le rôle
        $currentUser = $this->getUser();
        $isAdmin = $currentUser && (
            in_array('ROLE_SUPER_ADMIN', $currentUser->getRoles()) || 
            in_array('ROLE_ADMIN', $currentUser->getRoles())
        );
        
        // ✅ Envoyer l'email si changement et si email client existe
        if ($order->getCustomerEmail() && $oldStatus !== $newStatus) {
            $this->sendStatusUpdateEmail($order, $oldStatus, $newStatus, $mailer, $twig, $isAdmin);
        }
        
        $this->addFlash('success', sprintf(
            'Statut de la commande #%s mis à jour : %s → %s',
            $order->getOrderNumber(),
            Order::getStatusLabels()[$oldStatus] ?? $oldStatus,
            Order::getStatusLabels()[$newStatus] ?? $newStatus
        ));
        
        return $this->redirectToRoute('app_orders_show', ['id' => $order->getId()]);
    }

    private function sendStatusUpdateEmail(
        Order $order, 
        string $oldStatus, 
        string $newStatus, 
        MailerInterface $mailer, 
        Environment $twig,
        bool $isAdmin = false
    ): void
    {
        try {
            $appName = $_ENV['APP_NAME'] ?? 'HMA Market';
            $appUrl = $_ENV['APP_URL'] ?? 'http://localhost:8000';
            $fromEmail = $_ENV['MAILER_FROM_EMAIL'] ?? 'noreply@hma-marketplace.com';
            $fromName = $_ENV['MAILER_FROM_NAME'] ?? 'HMA Market';

            // ✅ Template POUR LE CLIENT
            $customerHtml = $twig->render('emails/order_status_update_customer.html.twig', [
                'order' => $order,
                'oldStatus' => $oldStatus,
                'newStatus' => $newStatus,
                'oldStatusLabel' => Order::getStatusLabels()[$oldStatus] ?? $oldStatus,
                'newStatusLabel' => Order::getStatusLabels()[$newStatus] ?? $newStatus,
                'appName' => $appName,
                'appUrl' => $appUrl,
            ]);

            // ✅ Template POUR LE SUPER ADMIN
            $adminHtml = $twig->render('emails/order_status_update_admin.html.twig', [
                'order' => $order,
                'oldStatus' => $oldStatus,
                'newStatus' => $newStatus,
                'oldStatusLabel' => Order::getStatusLabels()[$oldStatus] ?? $oldStatus,
                'newStatusLabel' => Order::getStatusLabels()[$newStatus] ?? $newStatus,
                'appName' => $appName,
                'appUrl' => $appUrl,
            ]);

            // ✅ Email au client
            if (!empty($order->getCustomerEmail())) {
                $clientEmail = (new Email())
                    ->from(new \Symfony\Component\Mime\Address($fromEmail, $fromName))
                    ->to($order->getCustomerEmail())
                    ->subject('Mise à jour de votre commande #' . $order->getOrderNumber())
                    ->html($customerHtml);

                $mailer->send($clientEmail);
                $this->logger->info('✅ Email de mise à jour de statut envoyé au client', [
                    'order_id' => $order->getId(),
                    'old_status' => $oldStatus,
                    'new_status' => $newStatus,
                    'email' => $order->getCustomerEmail()
                ]);
            }

            // ✅ Email au super admin
            $superAdminEmail = $_ENV['SUPER_ADMIN_EMAIL'] ?? $_ENV['ADMIN_EMAIL'] ?? 'admin@hma-marketplace.com';
            $adminEmail = (new Email())
                ->from(new \Symfony\Component\Mime\Address($fromEmail, $fromName))
                ->to($superAdminEmail)
                ->subject('📦 Commande #' . $order->getOrderNumber() . ' - Statut mis à jour')
                ->html($adminHtml);

            $mailer->send($adminEmail);
            $this->logger->info('✅ Email de mise à jour de statut envoyé au super admin', [
                'order_id' => $order->getId(),
                'email' => $superAdminEmail
            ]);

        } catch (\Exception $e) {
            $this->logger->error('❌ Erreur lors de l\'envoi des emails de mise à jour de statut', [
                'order_id' => $order->getId(),
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
        }
    }

    #[Route('/{id}/download-pdf', name: 'app_orders_download_pdf', methods: ['GET'])]
    public function downloadPdf(int $id, OrderRepository $orderRepository): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        
        $order = $orderRepository->find($id);
        if (!$order || $order->getHmaService()->getId() !== $hmaService->getId()) {
            throw $this->createNotFoundException('Vente non trouvée');
        }
        
        $isRestaurant = $hmaService->getType() === 'restaurant';
        
        $html = $this->renderView('sale/orders/receipt_content.html.twig', [
            'order' => $order,
            'isRestaurant' => $isRestaurant,
            'company' => $hmaService
        ]);
        
        $options = new Options();
        $options->set('defaultFont', 'Courier');
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', false);
        $options->set('isPhpEnabled', false);
        
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        
        $width = 226.77;
        $height = 800;
        
        $dompdf->setPaper([0, 0, $width, $height], 'portrait');
        $dompdf->render();
        
        return new Response(
            $dompdf->output(),
            200,
            [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => sprintf('inline; filename="recu_vente_%s.pdf"', $order->getOrderNumber())
            ]
        );
    }

    private function getFiltersFromRequest(Request $request): array
    {
        return [
            'status' => $request->query->get('status', ''),
            'payment_method' => $request->query->get('payment_method', ''),
            'user_id' => $request->query->get('user_id', ''),
            'date_preset' => $request->query->get('date_preset', ''),
            'date_from' => $request->query->get('date_from', ''),
            'date_to' => $request->query->get('date_to', ''),
            'min_amount' => $request->query->get('min_amount', ''),
            'max_amount' => $request->query->get('max_amount', ''),
            'search' => $request->query->get('search', ''),
            'sort' => $request->query->get('sort', 'created_at'),
            'direction' => $request->query->get('direction', 'desc'),
        ];
    }  
}