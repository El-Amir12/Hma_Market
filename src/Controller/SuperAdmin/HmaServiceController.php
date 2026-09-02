<?php
// src/Controller/SuperAdmin/HmaServiceController.php

namespace App\Controller\SuperAdmin;

use App\Entity\HmaService;
use App\Entity\User;
use App\Form\HmaServiceType;
use App\Repository\HmaServiceRepository;
use App\Repository\SubscriptionRepository;
use App\Repository\PaymentRepository;
use App\Repository\UserRepository;
use App\Service\EmailService;
use App\Service\CompanyDeletionService; 
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;  // ← IMPORTANT : utiliser Attribute\Route
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\Filesystem\Filesystem;

#[Route('/super-admin/hma-service')]
class HmaServiceController extends AbstractController
{
    private CompanyDeletionService $companyDeletionService; 
    
    public function __construct(
        private HmaServiceRepository $hmaServiceRepository,
        private UserRepository $userRepository,
        private SubscriptionRepository $subscriptionRepository,
        private PaymentRepository $paymentRepository,
        private EntityManagerInterface $entityManager,
        private UserPasswordHasherInterface $passwordHasher,
        private SluggerInterface $slugger,
        private PaginatorInterface $paginator,
        private EmailService $emailService,
        private Filesystem $filesystem,
        private string $logosDirectory,
        CompanyDeletionService $companyDeletionService 
    ) {
        $this->companyDeletionService = $companyDeletionService; 
    }

    #[Route('/', name: 'app_super_admin_hma_service_index', methods: ['GET'])]
    public function index(Request $request): Response
    {
        // Récupérer les filtres
        $filters = [
            'search' => $request->query->get('search'),
            'company_type' => $request->query->get('company_type'),
            'status' => $request->query->get('status'),
            'plan' => $request->query->get('plan'),
            'date_from' => $request->query->get('date_from'),
            'date_to' => $request->query->get('date_to'),
            'sort' => $request->query->get('sort', 'h.createdAt'),
            'direction' => $request->query->get('direction', 'DESC')
        ];

        // Construire la requête de base AVEC tous les filtres SAUF 'status'
        $qb = $this->hmaServiceRepository->createQueryBuilder('h');

        if (!empty($filters['search'])) {
            $qb->andWhere('h.companyName LIKE :search OR h.email LIKE :search OR h.subscription_number LIKE :search')
            ->setParameter('search', '%' . $filters['search'] . '%');
        }
        if (!empty($filters['company_type'])) {
            $qb->andWhere('h.companyType = :companyType')
            ->setParameter('companyType', $filters['company_type']);
        }
        if (!empty($filters['plan'])) {
            $qb->andWhere('h.subscriptionPlan = :plan')
            ->setParameter('plan', $filters['plan']);
        }
        if (!empty($filters['date_from'])) {
            $qb->andWhere('h.createdAt >= :dateFrom')
            ->setParameter('dateFrom', new \DateTime($filters['date_from']));
        }
        if (!empty($filters['date_to'])) {
            $qb->andWhere('h.createdAt <= :dateTo')
            ->setParameter('dateTo', new \DateTime($filters['date_to']));
        }

        // Compter total
        $total = (clone $qb)->select('COUNT(h.id)')
            ->getQuery()
            ->getSingleScalarResult();

        // Compter actives
        $active = (clone $qb)->andWhere('h.hma_active = true')
            ->select('COUNT(h.id)')
            ->getQuery()
            ->getSingleScalarResult();

        // Compter inactives
        $inactive = (clone $qb)->andWhere('h.hma_active = false')
            ->select('COUNT(h.id)')
            ->getQuery()
            ->getSingleScalarResult();

        // Compter en période d'essai
        $trial = (clone $qb)->andWhere('h.trialEndsAt > :now')
            ->setParameter('now', new \DateTime())
            ->select('COUNT(h.id)')
            ->getQuery()
            ->getSingleScalarResult();

        $stats = [
            'total' => $total,
            'active' => $active,
            'inactive' => $inactive,
            'trial' => $trial,
        ];

        // --- Requête pour la pagination (avec tous les filtres, y compris status) ---
        $queryBuilder = $this->hmaServiceRepository->findByFilters($filters);

        // Pagination
        $pagination = $this->paginator->paginate(
            $queryBuilder,
            $request->query->getInt('page', 1),
            $request->query->getInt('limit', 10)
        );

        // Récupérer les types d'entreprise distincts
        $companyTypes = $this->hmaServiceRepository->createQueryBuilder('h')
            ->select('DISTINCT h.companyType')
            ->where('h.companyType IS NOT NULL')
            ->orderBy('h.companyType', 'ASC')
            ->getQuery()
            ->getSingleColumnResult();

        return $this->render('super_admin/hma_service/index.html.twig', [
            'pagination' => $pagination,
            'stats' => $stats,
            'filters' => $filters,
            'companyTypes' => $companyTypes,
        ]);
    }

    #[Route('/new', name: 'app_super_admin_hma_service_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $hmaService = new HmaService();
        
        // ✅ Initialisation automatique pour une nouvelle entreprise
        $hmaService->setSubscriptionPlan(HmaService::PLAN_TRIAL);
        $hmaService->setHmaActive(true);
        $hmaService->setIsActive(false);
        
        $form = $this->createForm(HmaServiceType::class, $hmaService, [
            'is_edit' => false
        ]);
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                // ✅ Gestion du logo
                $logoFile = $form->get('logoFile')->getData();
                if ($logoFile) {
                    $newFilename = $this->handleLogoUpload($logoFile);
                    $hmaService->setLogo($newFilename);
                }

                // ✅ Générer un numéro d'abonnement unique
                $hmaService->setSubscriptionNumber($hmaService->generateSubscriptionNumber());
                
                // ✅ Gestion du mot de passe
                $plainPassword = $form->get('plainPassword')->getData(); 
                if (!$plainPassword) {
                    $plainPassword = bin2hex(random_bytes(8));
                }
                
                // ✅ Hacher le mot de passe
                $hashedPassword = $this->passwordHasher->hashPassword($hmaService, $plainPassword);
                $hmaService->setPassword($hashedPassword);

                // ✅ Créer l'utilisateur propriétaire
                $owner = $this->createOwnerUser($hmaService, $hashedPassword);

                $this->entityManager->persist($hmaService);
                $this->entityManager->persist($owner);
                $this->entityManager->flush();

                // ✅ Envoyer l'email d'activation si demandé
                if ($form->get('sendActivationEmail')->getData()) {
                    $this->emailService->sendOwnerCredentials(
                        $hmaService, 
                        $owner, 
                        $plainPassword, 
                        $hmaService->getSubscriptionNumber()
                    );
                    $this->addFlash('success', '✅ Entreprise créée avec succès. Un email d\'activation a été envoyé.');
                } else {
                    $this->addFlash('success', '✅ Entreprise créée avec succès.');
                }

                return $this->redirectToRoute('app_super_admin_hma_service_show', ['id' => $hmaService->getId()]);
                
            } catch (\Exception $e) {
                $this->addFlash('error', '❌ Erreur lors de la création : ' . $e->getMessage());
            }
        }

        return $this->render('super_admin/hma_service/new.html.twig', [
            'hma_service' => $hmaService,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_super_admin_hma_service_show', methods: ['GET'])]
    public function show(HmaService $hmaService): Response
    {
        // Utiliser le repository pour les stats
        $usageStats = $hmaService->getUsageStats();
        
        // Récupérer les abonnements
        $subscriptions = $this->subscriptionRepository->findByCompany($hmaService);
        
        // ✅ STATISTIQUES DÉTAILLÉES DES UTILISATEURS
        $users = $hmaService->getUsers();
        $activeUsers = 0;
        $outOfQuotaUsers = 0;
        $inactiveByAdminUsers = 0;
        
        foreach ($users as $user) {
            if ($user->isActive() && $user->isSubscriptionActive()) {
                $activeUsers++;
            } elseif (!$user->isSubscriptionActive() && $user->isActive()) {
                $outOfQuotaUsers++;
            } elseif (!$user->isActive()) {
                $inactiveByAdminUsers++;
            }
        }
        
        // ✅ STATISTIQUES PAR RÔLE AVEC STATUT DÉTAILLÉ
        $usersByRoleWithStatus = [];
        foreach ($users as $user) {
            foreach ($user->getRoles() as $role) {
                if ($role === 'ROLE_USER') continue;
                
                if (!isset($usersByRoleWithStatus[$role])) {
                    $usersByRoleWithStatus[$role] = [
                        'total' => 0,
                        'active' => 0,
                        'quota' => 0,
                        'inactive' => 0,
                        'label' => $this->getRoleLabel($role),
                        'badge' => $this->getRoleBadgeClass($role),
                        'icon' => $this->getRoleIcon($role)
                    ];
                }
                
                $usersByRoleWithStatus[$role]['total']++;
                
                if ($user->isActive() && $user->isSubscriptionActive()) {
                    $usersByRoleWithStatus[$role]['active']++;
                } elseif (!$user->isSubscriptionActive() && $user->isActive()) {
                    $usersByRoleWithStatus[$role]['quota']++;
                } elseif (!$user->isActive()) {
                    $usersByRoleWithStatus[$role]['inactive']++;
                }
            }
        }
        
        // Trier par nombre total d'utilisateurs
        uasort($usersByRoleWithStatus, fn($a, $b) => $b['total'] <=> $a['total']);
        
        // ✅ STATISTIQUES SUPPLÉMENTAIRES
        $totalProducts = $hmaService->getProducts()->count();
        $totalOrders = $hmaService->getOrders()->count();
        $totalCategories = $hmaService->getCategories()->count();
        $totalSuppliers = $hmaService->getSuppliers()->count();
        
        // ✅ STATISTIQUES D'UTILISATION PAR MOIS
        $currentMonth = new \DateTime('first day of this month');
        $lastMonth = new \DateTime('first day of last month');
        
        $ordersThisMonth = $hmaService->getOrders()->filter(function($order) use ($currentMonth) {
            return $order->getCreatedAt() >= $currentMonth;
        })->count();
        
        $ordersLastMonth = $hmaService->getOrders()->filter(function($order) use ($lastMonth, $currentMonth) {
            return $order->getCreatedAt() >= $lastMonth && $order->getCreatedAt() < $currentMonth;
        })->count();
        
        $ordersEvolution = $ordersLastMonth > 0 
            ? round(($ordersThisMonth - $ordersLastMonth) / $ordersLastMonth * 100) 
            : 0;
        
        // ✅ VÉRIFICATION DE L'ABONNEMENT ACTIF
        $activeSubscription = $this->subscriptionRepository->findActiveSubscription($hmaService);
        $hasActiveSubscription = $activeSubscription !== null;
        $daysUntilExpiration = null;
        
        if ($activeSubscription && $activeSubscription->getEndsAt()) {
            $now = new \DateTime();
            $diff = $now->diff($activeSubscription->getEndsAt());
            $daysUntilExpiration = $diff->days;
        }

        return $this->render('super_admin/hma_service/show.html.twig', [
            'hma_service' => $hmaService,
            'usage_stats' => $usageStats,
            'subscriptions' => $subscriptions,
            'users_by_role_with_status' => $usersByRoleWithStatus,
            'active_users_count' => $activeUsers,
            'out_of_quota_count' => $outOfQuotaUsers,
            'inactive_by_admin_count' => $inactiveByAdminUsers,
            'total_users_count' => $users->count(),
            'total_products' => $totalProducts,
            'total_orders' => $totalOrders,
            'total_categories' => $totalCategories,
            'total_suppliers' => $totalSuppliers,
            'orders_evolution' => $ordersEvolution,
            'has_active_subscription' => $hasActiveSubscription,
            'active_subscription' => $activeSubscription,
            'days_until_expiration' => $daysUntilExpiration,
            'created_at' => $hmaService->getCreatedAt(),
            'activated_at' => $hmaService->getActivatedAt(),
            'trial_ends_at' => $hmaService->getTrialEndsAt(),
            'subscription_ends_at' => $hmaService->getSubscriptionEndsAt(),
            'is_in_trial' => $hmaService->isInTrialPeriod(),
        ]);
    }

    #[Route('/{id}/edit', name: 'app_super_admin_hma_service_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, HmaService $hmaService): Response
    {
        $form = $this->createForm(HmaServiceType::class, $hmaService, [
            'is_edit' => true
        ]);
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                // ✅ Gestion du logo
                $logoFile = $form->get('logoFile')->getData();
                if ($logoFile) {
                    if ($hmaService->getLogo()) {
                        $this->deleteLogoFile($hmaService->getLogo());
                    }
                    $newFilename = $this->handleLogoUpload($logoFile);
                    $hmaService->setLogo($newFilename);
                }

                $hmaService->setUpdatedAt(new \DateTime());
                $this->entityManager->flush();

                $this->addFlash('success', '✅ Entreprise modifiée avec succès.');
                return $this->redirectToRoute('app_super_admin_hma_service_show', ['id' => $hmaService->getId()]);
                
            } catch (\Exception $e) {
                $this->addFlash('error', '❌ Erreur lors de la modification : ' . $e->getMessage());
            }
        }

        return $this->render('super_admin/hma_service/edit.html.twig', [
            'hma_service' => $hmaService,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/toggle-status', name: 'app_super_admin_hma_service_toggle', methods: ['POST'])]
    public function toggleStatus(Request $request, HmaService $hmaService): JsonResponse
    {
        if (!$this->isCsrfTokenValid('toggle', $request->request->get('_token'))) {
            return $this->json(['success' => false, 'message' => 'Token CSRF invalide'], 400);
        }

        try {
            $newStatus = !$hmaService->isHmaActive();
            $hmaService->setHmaActive($newStatus);
            
            // ✅ OPTIMISATION : Ne pas persister chaque utilisateur individuellement
            foreach ($hmaService->getUsers() as $user) {
                $user->setIsActive($newStatus);
            }
            
            $this->entityManager->flush();

            return $this->json([
                'success' => true,
                'active' => $newStatus,
                'message' => $newStatus ? '✅ Entreprise activée avec succès' : '✅ Entreprise désactivée avec succès'
            ]);
            
        } catch (\Exception $e) {
            return $this->json([
                'success' => false,
                'message' => '❌ Erreur : ' . $e->getMessage()
            ], 500);
        }
    }

    #[Route('/{id}/delete', name: 'app_super_admin_hma_service_delete', methods: ['POST'])]
    public function delete(Request $request, HmaService $hmaService): JsonResponse
    {
        if (!$this->isCsrfTokenValid('delete', $request->request->get('_token'))) {
            return $this->json(['success' => false, 'message' => 'Token CSRF invalide'], 400);
        }

        try {
            $companyName = $hmaService->getCompanyName();
            
            // ✅ Utiliser le service de suppression complète
            $this->companyDeletionService->deleteCompany($hmaService);

            return $this->json([
                'success' => true,
                'message' => "✅ L'entreprise \"{$companyName}\" et toutes ses données ont été supprimées avec succès."
            ]);
            
        } catch (\Exception $e) {
            return $this->json([
                'success' => false,
                'message' => '❌ Erreur lors de la suppression : ' . $e->getMessage()
            ], 500);
        }
    }

    #[Route('/{id}/subscriptions', name: 'app_super_admin_hma_service_subscriptions', methods: ['GET'])]
    public function subscriptions(HmaService $hmaService, Request $request): Response
    {
        $filters = [
            'status' => $request->query->get('status'),
            'date_from' => $request->query->get('date_from'),
            'date_to' => $request->query->get('date_to'),
        ];

        $queryBuilder = $this->subscriptionRepository->findByCompanyWithFilters($hmaService, $filters);

        $pagination = $this->paginator->paginate(
            $queryBuilder,
            $request->query->getInt('page', 1),
            10
        );

        // 🔑 Récupérer le dernier paiement pour chaque abonnement
        foreach ($pagination as $subscription) {
            $lastPayment = $this->paymentRepository->findOneBy(
                ['subscription' => $subscription],
                ['createdAt' => 'DESC']
            );
            // Ajouter le paiement comme propriété dynamique
            $subscription->lastPayment = $lastPayment;
        }

        return $this->render('super_admin/hma_service/subscriptions.html.twig', [
            'hma_service' => $hmaService,
            'pagination' => $pagination,
            'filters' => $filters,
        ]);
    }

    #[Route('/export/{format}', name: 'app_super_admin_hma_service_export', methods: ['GET'])]
    public function export(Request $request, string $format): Response
    {
        $ids = $request->query->get('ids');
        
        if ($ids) {
            $ids = explode(',', $ids);
            $companies = $this->hmaServiceRepository->findBy(['id' => $ids]);
        } else {
            $companies = $this->hmaServiceRepository->findAll();
        }

        return $this->hmaServiceRepository->exportToFormat($companies, $format);
    }

    // ==================== MÉTHODES PRIVÉES ====================

    private function handleLogoUpload($logoFile): string
    {
        $originalFilename = pathinfo($logoFile->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFilename = $this->slugger->slug($originalFilename);
        $newFilename = $safeFilename . '-' . uniqid() . '.' . $logoFile->guessExtension();

        try {
            $logoFile->move(
                $this->logosDirectory,
                $newFilename
            );
        } catch (FileException $e) {
            throw new \Exception('Erreur lors de l\'upload du logo : ' . $e->getMessage());
        }

        return $newFilename;
    }

    private function deleteLogoFile(string $filename): void
    {
        $filePath = $this->logosDirectory . '/' . $filename;
        if ($this->filesystem->exists($filePath)) {
            $this->filesystem->remove($filePath);
        }
    }

    private function createOwnerUser(HmaService $hmaService, string $hashedPassword): User
    {
        $owner = new User();
        $owner->setEmail($hmaService->getEmail());
        $owner->setPassword($hashedPassword);
        $owner->setFullName($hmaService->getCompanyName());
        $owner->setPhone($hmaService->getPhone() ?? 'Non spécifié');
        $owner->setIsActive(true);
        $owner->setSubscriptionActive(true);
        $owner->setIsHmaOwner(true);
        $owner->setRoles(['ROLE_ADMIN']);
        $owner->setHmaServiceId($hmaService);
        $owner->setPasswordChanged(false);
        $owner->setEmploymentDate(new \DateTime());
        
        return $owner;
    }

    private function getRoleLabel(string $role): string
    {
        return match($role) {
            'ROLE_SUPER_ADMIN' => 'Super Admin',
            'ROLE_ADMIN' => 'Admin',
            'ROLE_MANAGER' => 'Manager',
            'ROLE_STOCK_MANAGER' => 'Stock',
            'ROLE_CASHIER' => 'Caissier',
            default => str_replace('ROLE_', '', $role),
        };
    }

    private function getRoleBadgeClass(string $role): string
    {
        return match($role) {
            'ROLE_SUPER_ADMIN', 'ROLE_ADMIN' => 'role-admin',
            'ROLE_MANAGER' => 'role-manager',
            'ROLE_STOCK_MANAGER' => 'role-stock',
            'ROLE_CASHIER' => 'role-cashier',
            default => 'role-user',
        };
    }

    private function getRoleIcon(string $role): string
    {
        return match($role) {
            'ROLE_SUPER_ADMIN' => 'bi-shield-shaded',
            'ROLE_ADMIN' => 'bi-shield-check',
            'ROLE_MANAGER' => 'bi-graph-up',
            'ROLE_STOCK_MANAGER' => 'bi-box-seam',
            'ROLE_CASHIER' => 'bi-cash-coin',
            default => 'bi-person',
        };
    }
}