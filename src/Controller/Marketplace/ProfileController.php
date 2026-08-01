<?php
// src/Controller/Marketplace/ProfileController.php

namespace App\Controller\Marketplace;

use App\Entity\Customer;
use App\Entity\Order;
use App\Form\CustomerProfileType;
use App\Form\CustomerChangePasswordType;
use App\Form\FirstLoginChangePasswordType;
use App\Repository\OrderRepository;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Psr\Log\LoggerInterface;

#[Route('/marketplace/profile')]
class ProfileController extends AbstractController
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private LoggerInterface $logger
    ) {}

    #[Route('/', name: 'marketplace_profile')]
    public function index(
        OrderRepository $orderRepository
    ): Response {
        /** @var Customer|null $customer */
        $customer = $this->getUser();
        
        if (!$customer) {
            return $this->redirectToRoute('marketplace_login');
        }

        try {
            // ✅ Récupérer les statistiques des commandes
            $orderStats = $this->getOrderStats($customer, $orderRepository);
            
            // ✅ Récupérer les données pour les graphiques
            $chartData = $this->getChartData($customer, $orderRepository);
            
            // ✅ Récupérer les produits les plus achetés
            $topProducts = $orderRepository->getTopProductsByCustomer($customer, 5);
            
            // ✅ Récupérer les dernières commandes
            $recentOrders = $orderRepository->findLastOrdersByCustomer($customer, 5);

            // ✅ Récupérer les statuts pour le template
            $statuses = Order::getStatusLabels();

            $this->logger->info('📊 Profil client chargé', [
                'customer_id' => $customer->getId(),
                'total_orders' => $orderStats['total_orders'] ?? 0,
                'total_spent' => $orderStats['total_spent'] ?? 0,
            ]);

            return $this->render('marketplace/profile/index.html.twig', [
                'customer' => $customer,
                'orderStats' => $orderStats,
                'chartData' => $chartData,
                'topProducts' => $topProducts,
                'recentOrders' => $recentOrders,
                'statuses' => $statuses,
            ]);

        } catch (\Exception $e) {
            $this->logger->error('❌ Erreur lors du chargement du profil', [
                'customer_id' => $customer->getId(),
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            $this->addFlash('warning', '⚠️ Certaines statistiques ne sont pas disponibles pour le moment.');

            return $this->render('marketplace/profile/index.html.twig', [
                'customer' => $customer,
                'orderStats' => [
                    'total_orders' => 0,
                    'total_spent' => 0,
                    'status_counts' => [],
                    'last_order' => null,
                    'first_order' => null,
                    'average_order_value' => 0,
                ],
                'chartData' => ['labels' => [], 'data' => []],
                'topProducts' => [],
                'recentOrders' => [],
                'statuses' => Order::getStatusLabels(),
            ]);
        }
    }

    #[Route('/edit', name: 'marketplace_profile_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request): Response
    {
        /** @var Customer|null $customer */
        $customer = $this->getUser();
        
        if (!$customer) {
            return $this->redirectToRoute('marketplace_login');
        }

        $form = $this->createForm(CustomerProfileType::class, $customer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $customer->setUpdatedAt(new \DateTimeImmutable());
            $this->entityManager->flush();

            $this->addFlash('success', '✅ Votre profil a été mis à jour avec succès !');
            return $this->redirectToRoute('marketplace_profile');
        }

        return $this->render('marketplace/profile/edit.html.twig', [
            'form' => $form->createView(),
            'customer' => $customer,
        ]);
    }

    #[Route('/change-password', name: 'marketplace_change_password', methods: ['GET', 'POST'])]
    public function changePassword(
        Request $request,
        UserPasswordHasherInterface $passwordHasher,
        TokenStorageInterface $tokenStorage
    ): Response {
        /** @var Customer|null $customer */
        $customer = $this->getUser();
        
        if (!$customer) {
            return $this->redirectToRoute('marketplace_login');
        }

        $mustChangePassword = $customer->isMustChangePassword();

        if ($mustChangePassword) {
            $form = $this->createForm(FirstLoginChangePasswordType::class);
        } else {
            $form = $this->createForm(CustomerChangePasswordType::class);
        }
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($mustChangePassword) {
                $newPassword = $form->get('newPassword')->getData();
                
                $hashedPassword = $passwordHasher->hashPassword($customer, $newPassword);
                $customer->setPassword($hashedPassword);
                $customer->setMustChangePassword(false);
                $customer->resetFailedLoginAttempts();
                
                $this->entityManager->flush();

                $this->addFlash('success', '✅ Votre mot de passe a été changé avec succès !');
                $this->addFlash('info', '🔒 Veuillez vous reconnecter avec votre nouveau mot de passe.');

                $tokenStorage->setToken(null);
                $request->getSession()->invalidate();

                return $this->redirectToRoute('marketplace_logout');
            }
            
            $oldPassword = $form->get('oldPassword')->getData();
            $newPassword = $form->get('newPassword')->getData();

            if (!$passwordHasher->isPasswordValid($customer, $oldPassword)) {
                $this->addFlash('error', '❌ L\'ancien mot de passe est incorrect.');
                return $this->redirectToRoute('marketplace_change_password');
            }

            $hashedPassword = $passwordHasher->hashPassword($customer, $newPassword);
            $customer->setPassword($hashedPassword);
            $customer->setUpdatedAt(new \DateTimeImmutable());
            $customer->resetFailedLoginAttempts();
            
            $this->entityManager->flush();

            $this->addFlash('success', '✅ Votre mot de passe a été changé avec succès !');
            $this->addFlash('info', '🔒 Veuillez vous reconnecter avec votre nouveau mot de passe.');

            $tokenStorage->setToken(null);
            $request->getSession()->invalidate();

            return $this->redirectToRoute('marketplace_logout');
        }

        return $this->render('marketplace/auth/change_password.html.twig', [
            'changePasswordForm' => $form->createView(),
            'mustChangePassword' => $mustChangePassword,
        ]);
    }

    #[Route('/orders', name: 'marketplace_orders')]
    public function orders(
        Request $request,
        OrderRepository $orderRepository,
        ProductRepository $productRepository
    ): Response {
        /** @var Customer|null $customer */
        $customer = $this->getUser();
        
        if (!$customer) {
            return $this->redirectToRoute('marketplace_login');
        }

        // ✅ Récupérer les filtres
        $filters = [
            'status' => $request->query->get('status', ''),
            'search' => $request->query->get('search', ''),
            'date_from' => $request->query->get('date_from', ''),
            'date_to' => $request->query->get('date_to', ''),
        ];

        $page = max(1, $request->query->getInt('page', 1));
        $limit = 10;
        $offset = ($page - 1) * $limit;

        // ✅ Utiliser la méthode findByCustomer du repository
        $orders = $orderRepository->findByCustomer($customer, $filters, $limit, $offset);
        $totalOrders = $orderRepository->countByCustomer($customer, $filters);

        $totalPages = ceil($totalOrders / $limit);

        // ✅ Récupérer tous les produits pour les images
        $products = $productRepository->findAll();

        // ✅ Vérifier si le paiement a été confirmé
        $paymentSuccess = $request->query->get('payment_success') === '1';

        // ✅ Définir les statuts disponibles pour le filtre
        $statuses = Order::getStatusLabels();

        return $this->render('marketplace/profile/orders.html.twig', [
            'orders' => $orders,
            'products' => $products,
            'currentPage' => $page,
            'totalPages' => $totalPages,
            'totalOrders' => $totalOrders,
            'paymentSuccess' => $paymentSuccess,
            'statuses' => $statuses,
            'filters' => $filters
        ]);
    }

    #[Route('/order/{id}', name: 'marketplace_order_detail')]
    public function orderDetail(
        int $id,
        Request $request,
        OrderRepository $orderRepository,
        ProductRepository $productRepository
    ): Response {
        /** @var Customer|null $customer */
        $customer = $this->getUser();
        
        if (!$customer) {
            return $this->redirectToRoute('marketplace_login');
        }

        // ✅ Utiliser la méthode findOneByCustomerAndId pour vérifier l'appartenance
        $order = $orderRepository->findOneByCustomerAndId($customer, $id);

        if (!$order) {
            throw $this->createNotFoundException('Commande non trouvée ou vous n\'avez pas accès à cette commande.');
        }

        $products = $productRepository->findAll();
        $paymentSuccess = $request->query->get('payment_success') === '1';

        // ✅ Récupérer les statuts pour l'affichage
        $statuses = Order::getStatusLabels();
        $statusColors = Order::getStatusColors();

        return $this->render('marketplace/profile/order_detail.html.twig', [
            'order' => $order,
            'products' => $products,
            'paymentSuccess' => $paymentSuccess,
            'statuses' => $statuses,
            'statusColors' => $statusColors,
        ]);
    }

    #[Route('/order/status/{id}', name: 'marketplace_order_status', methods: ['POST'])]
    public function updateOrderStatus(
        int $id,
        Request $request,
        OrderRepository $orderRepository
    ): Response {
        /** @var Customer|null $customer */
        $customer = $this->getUser();
        
        if (!$customer) {
            return $this->json(['success' => false, 'error' => 'Non authentifié'], 401);
        }

        // ✅ Vérifier que la commande appartient au client
        $order = $orderRepository->findOneByCustomerAndId($customer, $id);

        if (!$order) {
            return $this->json(['success' => false, 'error' => 'Commande non trouvée'], 404);
        }

        // Seulement certaines actions sont autorisées pour le client
        $action = $request->request->get('action');
        $allowedActions = ['cancel', 'confirm_received'];

        if (!in_array($action, $allowedActions)) {
            return $this->json(['success' => false, 'error' => 'Action non autorisée'], 403);
        }

        try {
            if ($action === 'cancel') {
                // ✅ Annuler la commande (seulement si en attente ou en traitement)
                if (!in_array($order->getStatus(), [Order::STATUS_PENDING, Order::STATUS_PROCESSING])) {
                    return $this->json([
                        'success' => false, 
                        'error' => 'Cette commande ne peut pas être annulée car elle est déjà en cours de livraison ou terminée.'
                    ], 403);
                }
                $order->setStatus(Order::STATUS_CANCELLED);
                $this->addFlash('success', '✅ Votre commande a été annulée avec succès.');
            }

            if ($action === 'confirm_received') {
                // ✅ Confirmer la réception (seulement si livrée)
                if ($order->getStatus() !== Order::STATUS_DELIVERED) {
                    return $this->json([
                        'success' => false, 
                        'error' => 'Cette commande n\'est pas encore livrée.'
                    ], 403);
                }
                $order->setStatus(Order::STATUS_COMPLETED);
                $this->addFlash('success', '✅ Merci d\'avoir confirmé la réception de votre commande !');
            }

            $order->setUpdatedAt(new \DateTime());
            $this->entityManager->flush();

            return $this->json([
                'success' => true,
                'status' => $order->getStatus(),
                'status_label' => $order->getStatusLabel(),
                'status_color' => $order->getStatusColor(),
                'message' => 'Statut mis à jour avec succès'
            ]);

        } catch (\Exception $e) {
            $this->logger->error('❌ Erreur lors de la mise à jour du statut', [
                'order_id' => $id,
                'error' => $e->getMessage()
            ]);

            return $this->json([
                'success' => false,
                'error' => 'Erreur lors de la mise à jour du statut: ' . $e->getMessage()
            ], 500);
        }
    }

    #[Route('/orders/search', name: 'marketplace_orders_search', methods: ['GET'])]
    public function searchOrders(
        Request $request,
        OrderRepository $orderRepository
    ): Response {
        /** @var Customer|null $customer */
        $customer = $this->getUser();
        
        if (!$customer) {
            return $this->json(['error' => 'Non authentifié'], 401);
        }

        $query = $request->query->get('q', '');
        
        if (strlen($query) < 2) {
            return $this->json(['results' => []]);
        }

        $orders = $orderRepository->createQueryBuilder('o')
            ->where('o.customer = :customer')
            ->andWhere('o.order_number LIKE :query OR o.customer_name LIKE :query')
            ->setParameter('customer', $customer)
            ->setParameter('query', '%' . $query . '%')
            ->orderBy('o.created_at', 'DESC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult();

        $results = [];
        foreach ($orders as $order) {
            $results[] = [
                'id' => $order->getId(),
                'order_number' => $order->getOrderNumber(),
                'total_amount' => $order->getTotalAmount(),
                'status' => $order->getStatusLabel(),
                'created_at' => $order->getCreatedAt()->format('d/m/Y H:i'),
            ];
        }

        return $this->json(['results' => $results]);
    }

    #[Route('/stats/data', name: 'marketplace_profile_stats_data', methods: ['GET'])]
    public function getStatsData(
        Request $request,
        OrderRepository $orderRepository
    ): JsonResponse {
        /** @var Customer|null $customer */
        $customer = $this->getUser();
        
        if (!$customer) {
            return $this->json(['error' => 'Non authentifié'], 401);
        }

        try {
            $period = $request->query->get('period', 'year');
            
            $chartData = $this->getChartData($customer, $orderRepository, $period);
            $topProducts = $orderRepository->getTopProductsByCustomer($customer, 5);
            $orderStats = $this->getOrderStats($customer, $orderRepository);

            return $this->json([
                'success' => true,
                'chartData' => $chartData,
                'topProducts' => $topProducts,
                'orderStats' => $orderStats,
            ]);

        } catch (\Exception $e) {
            $this->logger->error('❌ Erreur lors de la récupération des stats', [
                'customer_id' => $customer->getId(),
                'error' => $e->getMessage()
            ]);

            return $this->json([
                'success' => false,
                'error' => 'Erreur lors de la récupération des données'
            ], 500);
        }
    }

    // ==================== MÉTHODES PRIVÉES ====================

    /**
     * Récupère les statistiques des commandes d'un client
     */
    private function getOrderStats(Customer $customer, OrderRepository $orderRepository): array
    {
        $totalOrders = $orderRepository->countByCustomer($customer);
        $totalSpent = $orderRepository->getTotalSpentByCustomer($customer);
        
        // Compter par statut
        $statusCounts = $orderRepository->countByCustomerAndStatus($customer);
        
        // Dernière commande
        $lastOrder = $orderRepository->findOneBy(
            ['customer' => $customer],
            ['created_at' => 'DESC']
        );

        // Premier achat
        $firstOrder = $orderRepository->findOneBy(
            ['customer' => $customer],
            ['created_at' => 'ASC']
        );

        // Calculer la moyenne
        $averageOrderValue = $totalOrders > 0 ? $totalSpent / $totalOrders : 0;

        return [
            'total_orders' => $totalOrders,
            'total_spent' => $totalSpent,
            'status_counts' => $statusCounts,
            'last_order' => $lastOrder,
            'first_order' => $firstOrder,
            'average_order_value' => $averageOrderValue,
        ];
    }

    /**
     * Récupère les données pour les graphiques
     */
    private function getChartData(
        Customer $customer, 
        OrderRepository $orderRepository, 
        string $period = 'year'
    ): array {
        $data = [];
        $labels = [];
        
        switch ($period) {
            case 'week':
                for ($i = 6; $i >= 0; $i--) {
                    $date = new \DateTime("-{$i} days");
                    $labels[] = $date->format('D');
                    $data[] = $orderRepository->getTotalByCustomerAndDate($customer, $date);
                }
                break;
                
            case 'month':
                for ($i = 29; $i >= 0; $i--) {
                    $date = new \DateTime("-{$i} days");
                    $labels[] = $date->format('d M');
                    $data[] = $orderRepository->getTotalByCustomerAndDate($customer, $date);
                }
                break;
                
            case 'year':
            default:
                for ($i = 11; $i >= 0; $i--) {
                    $date = new \DateTime("-{$i} months");
                    $labels[] = $date->format('M Y');
                    $data[] = $orderRepository->getTotalByCustomerAndMonth($customer, $date);
                }
                break;
        }

        return [
            'labels' => $labels,
            'data' => $data,
        ];
    }
}