<?php

namespace App\Controller\Manager;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Psr\Log\LoggerInterface;

#[Route('/manager/team')]
class TeamController extends AbstractController
{
    private UserRepository $userRepository;
    private EntityManagerInterface $entityManager;
    private LoggerInterface $logger;

    public function __construct(
        UserRepository $userRepository,
        EntityManagerInterface $entityManager,
        LoggerInterface $logger
    ) {
        $this->userRepository = $userRepository;
        $this->entityManager = $entityManager;
        $this->logger = $logger;
    }

    private function checkManagerAccess(?Request $request = null): void
    {
        $user = $this->getUser();
        if (!$user instanceof User) {
            throw $this->createAccessDeniedException('Utilisateur non authentifié.');
        }
        
        // Vérifier que l'utilisateur a le rôle MANAGER ou supérieur
        if (!$this->isGranted('ROLE_MANAGER') && !$this->isGranted('ROLE_ADMIN') && !$this->isGranted('ROLE_SUPER_ADMIN')) {
            $route = $request ? $request->get('_route') : 'unknown';
            
            $this->logger->warning('Tentative d\'accès manager refusée', [
                'user_id' => $user->getId(),
                'user_email' => $user->getEmail(),
                'user_roles' => $user->getRoles(),
                'route' => $route
            ]);
            
            throw $this->createAccessDeniedException('Accès réservé aux managers.');
        }
        
        // Vérifier que l'utilisateur a une entreprise
        if (!$user->hasHmaService()) {
            throw $this->createAccessDeniedException('Aucune entreprise associée à votre compte.');
        }
    }

    #[Route('/', name: 'app_manager_team_index', methods: ['GET'])]
    public function index(Request $request): Response
    {
        $this->checkManagerAccess($request);
        
        /** @var User $currentUser */
        $currentUser = $this->getUser();
        $company = $currentUser->getHmaService();
        
        // Paramètres de pagination et filtres
        $page = $request->query->getInt('page', 1);
        $limit = 10;
        $search = $request->query->get('search', '');
        $role = $request->query->get('role', '');
        $status = $request->query->get('status', '');
        
        // Récupérer les utilisateurs de l'entreprise
        $paginator = $this->userRepository->findFilteredForCompany(
            $company->getId(), 
            $search, 
            $role, 
            $status, 
            $page, 
            $limit
        );
        
        $totalItems = $paginator->count();
        $totalPages = ceil($totalItems / $limit);
        
        // ✅ UTILISER LA MÉTHODE AVEC SQL NATIF
        try {
            $stats = [
                'total' => $totalItems,
                'active' => $this->userRepository->countByStatusForCompany($company->getId(), 'active'),
                'inactive' => $this->userRepository->countByStatusForCompany($company->getId(), 'inactive'),
                'managers' => $this->userRepository->countByRoleForCompanyManager($company->getId(), 'ROLE_MANAGER'),
                'stock' => $this->userRepository->countByRoleForCompanyManager($company->getId(), 'ROLE_STOCK_MANAGER'),
                'cashiers' => $this->userRepository->countByRoleForCompanyManager($company->getId(), 'ROLE_CASHIER'),
            ];
        } catch (\Exception $e) {
            // Fallback vers la méthode LIKE si la première échoue
            $this->logger->error('Erreur avec JSON_CONTAINS, utilisation du fallback', [
                'error' => $e->getMessage()
            ]);
            
            $stats = [
                'total' => $totalItems,
                'active' => $this->userRepository->countByStatusForCompany($company->getId(), 'active'),
                'inactive' => $this->userRepository->countByStatusForCompany($company->getId(), 'inactive'),
                'managers' => $this->userRepository->countByRoleForCompanyManagerLike($company->getId(), 'ROLE_MANAGER'),
                'stock' => $this->userRepository->countByRoleForCompanyManagerLike($company->getId(), 'ROLE_STOCK_MANAGER'),
                'cashiers' => $this->userRepository->countByRoleForCompanyManagerLike($company->getId(), 'ROLE_CASHIER'),
            ];
        }
        
        return $this->render('manager/team/index.html.twig', [
            'users' => $paginator,
            'current_page' => $page,
            'total_pages' => $totalPages,
            'total_items' => $totalItems,
            'search' => $search,
            'role' => $role,
            'status' => $status,
            'stats' => $stats,
            'company' => $company,
            'current_user' => $currentUser,
        ]);
    }

    #[Route('/{id}', name: 'app_manager_team_show', methods: ['GET'])]
    public function show(User $user): Response
    {
        $this->checkManagerAccess();
        
        /** @var User $currentUser */
        $currentUser = $this->getUser();
        $company = $currentUser->getHmaService();
        
        // Vérifier que l'utilisateur appartient à la même entreprise
        if ($user->getHmaServiceId()?->getId() !== $company->getId()) {
            throw $this->createAccessDeniedException('Vous ne pouvez pas voir les détails de cet utilisateur.');
        }
        
        return $this->render('manager/team/show.html.twig', [
            'target_user' => $user,
            'current_user' => $currentUser,
            'company' => $company,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_manager_team_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, User $user): Response
    {
        $this->checkManagerAccess($request);
        
        /** @var User $currentUser */
        $currentUser = $this->getUser();
        $company = $currentUser->getHmaService();
        
        // Vérifier que l'utilisateur appartient à la même entreprise
        if ($user->getHmaServiceId()?->getId() !== $company->getId()) {
            throw $this->createAccessDeniedException('Vous ne pouvez pas modifier cet utilisateur.');
        }
        
        // Déterminer les permissions
        $isSelf = $user->getId() === $currentUser->getId();
        $isAdmin = $currentUser->hasRole('ROLE_ADMIN');
        $isManager = $currentUser->hasRole('ROLE_MANAGER');
        $isTargetAdmin = $user->hasRole('ROLE_ADMIN');
        $isTargetManager = $user->hasRole('ROLE_MANAGER');
        
        // RÈGLES DE PERMISSION :
        $canEditFullName = false;
        $canEditPhone = false;
        $canEditEmploymentDate = false;
        
        // CAS 1: Admin
        if ($isAdmin) {
            $canEditFullName = true;      // Admin peut modifier le nom de tous
            $canEditPhone = true;         // Admin peut modifier le téléphone de tous
            $canEditEmploymentDate = true; // ✅ Admin peut modifier la date d'embauche de tous (sauf lui-même)
            
            // Mais Admin ne peut pas modifier sa propre date d'embauche
            if ($isSelf) {
                $canEditEmploymentDate = false;
            }
        }
        
        // CAS 2: Manager
        elseif ($isManager) {
            // Manager peut modifier son propre nom et téléphone
            if ($isSelf) {
                $canEditFullName = true;
                $canEditPhone = true;
                // ❌ Manager ne peut PAS modifier sa propre date d'embauche
                $canEditEmploymentDate = false;
            }
            // Manager peut modifier les employés de niveau inférieur (stock, caissier)
            elseif (!$isTargetAdmin && !$isTargetManager) {
                // ❌ Manager ne peut pas modifier nom/téléphone des autres
                $canEditFullName = false;
                $canEditPhone = false;
                // ✅ Manager peut modifier la date d'embauche des employés
                $canEditEmploymentDate = true;
            }
        }
        
        // Créer le formulaire avec les permissions
        $formBuilder = $this->createFormBuilder($user);
        
        // Ajouter les champs conditionnellement
        if ($canEditFullName) {
            $formBuilder->add('full_name', null, [
                'label' => 'Nom complet',
                'attr' => ['class' => 'form-control'],
            ]);
        }
        
        if ($canEditPhone) {
            $formBuilder->add('phone', null, [
                'label' => 'Téléphone',
                'attr' => ['class' => 'form-control'],
                'required' => false,
            ]);
        }
        
        if ($canEditEmploymentDate) {
            $formBuilder->add('employment_date', null, [
                'label' => "Date d'embauche",
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control'],
                'required' => false,
            ]);
        }
        
        $form = $formBuilder->getForm();
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();
            
            $this->addFlash('success', 'Profil mis à jour avec succès.');
            
            return $this->redirectToRoute('app_manager_team_show', ['id' => $user->getId()]);
        }
        
        return $this->render('manager/team/edit.html.twig', [
            'target_user' => $user,
            'form' => $form->createView(),
            'current_user' => $currentUser,
            'company' => $company,
            'is_self' => $isSelf,
            'can_edit' => [
                'full_name' => $canEditFullName,
                'phone' => $canEditPhone,
                'employment_date' => $canEditEmploymentDate,
            ],
        ]);
    }
}