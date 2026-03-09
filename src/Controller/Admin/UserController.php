<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Entity\HmaService;
use App\Form\UserType;
use App\Repository\UserRepository;
use App\Repository\HmaServiceRepository;
use App\Service\QuotaManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mime\Address;
use Psr\Log\LoggerInterface;

#[Route('/admin/user')]
class UserController extends AbstractController
{
    private UserPasswordHasherInterface $passwordHasher;
    private SluggerInterface $slugger;
    private UserRepository $userRepository;
    private EntityManagerInterface $entityManager;
    private QuotaManager $quotaManager;
    private MailerInterface $mailer;
    private LoggerInterface $logger;

    public function __construct(
        UserPasswordHasherInterface $passwordHasher,
        SluggerInterface $slugger,
        UserRepository $userRepository,
        EntityManagerInterface $entityManager,
        QuotaManager $quotaManager,
        MailerInterface $mailer,
        LoggerInterface $logger
    ) {
        $this->passwordHasher = $passwordHasher;
        $this->slugger = $slugger;
        $this->userRepository = $userRepository;
        $this->entityManager = $entityManager;
        $this->quotaManager = $quotaManager;
        $this->mailer = $mailer;
        $this->logger = $logger;
        
    }

    private function checkAdminAccess(?Request $request = null): void
    {
        $user = $this->getUser();
        if (!$user instanceof User) {
            throw $this->createAccessDeniedException('Utilisateur non authentifié.');
        }
        
        // Vérification explicite des deux rôles
        if (!$this->isGranted('ROLE_ADMIN') && !$this->isGranted('ROLE_SUPER_ADMIN')) {
            // Log pour debug (avec vérification que request n'est pas null)
            $route = $request ? $request->get('_route') : 'unknown';
            
            $this->logger->warning('Tentative d\'accès admin refusée', [
                'user_id' => $user->getId(),
                'user_email' => $user->getEmail(),
                'user_roles' => $user->getRoles(),
                'route' => $route
            ]);
            
            throw $this->createAccessDeniedException('Accès réservé aux administrateurs.');
        }
    }

    #[Route('/', name: 'app_user_index', methods: ['GET'])]
    public function index(Request $request, HmaServiceRepository $hmaServiceRepository): Response
    {
        $this->checkAdminAccess($request);
        
        $page = $request->query->getInt('page', 1);
        $limit = 10;
        $search = $request->query->get('search', '');
        $role = $request->query->get('role', '');
        $status = $request->query->get('status', '');
        $companyId = $request->query->get('company', '');
        
        $currentUser = $this->getUser();
        if (!$currentUser instanceof User) {
            throw $this->createAccessDeniedException('Type d\'utilisateur non valide.');
        }
        
        $isSuperAdmin = $this->isGranted('ROLE_SUPER_ADMIN');
        
        // Récupérer les utilisateurs avec filtres selon le rôle
        if ($isSuperAdmin) {
            // SUPER ADMIN : voit tous les utilisateurs
            $paginator = $this->userRepository->findFilteredForSuperAdmin($search, $role, $status, $companyId, $page, $limit);
            
            // Récupérer la liste des entreprises pour le filtre
            $companies = $hmaServiceRepository->findAll();
            
            // Statistiques globales
            $stats = [
                'active' => $this->userRepository->countByStatusForSuperAdmin('active'),
                'inactiveByAdmin' => $this->userRepository->countByStatusForSuperAdmin('inactive'),
                'outOfQuota' => $this->userRepository->countByStatusForSuperAdmin('quota'),
                'blockedBySystem' => $this->userRepository->countByStatusForSuperAdmin('blocked'),
                'total' => $this->userRepository->count([]),
            ];
        } else {
            // ADMIN ENTREPRISE : voit uniquement les utilisateurs de son entreprise
            $hmaService = $currentUser->getHmaService();
            if (!$hmaService) {
                throw $this->createAccessDeniedException('Aucune entreprise associée à votre compte.');
            }
            
            $paginator = $this->userRepository->findFilteredForCompany($hmaService->getId(), $search, $role, $status, $page, $limit);
            $companies = [];
            
            // Statistiques pour l'entreprise
            $stats = [
                'active' => $this->userRepository->countByStatusForCompany($hmaService->getId(), 'active'),
                'inactiveByAdmin' => $this->userRepository->countByStatusForCompany($hmaService->getId(), 'inactive'),
                'outOfQuota' => $this->userRepository->countByStatusForCompany($hmaService->getId(), 'quota'),
                'blockedBySystem' => 0, // Pas de bloqués système pour une entreprise
                'total' => $this->userRepository->count(['hma_service_id' => $hmaService->getId()]),
            ];
        }
        
        $totalItems = $paginator->count();
        $totalPages = ceil($totalItems / $limit);
        
        // Infos d'abonnement
        $subscriptionInfo = null;
        $canAddUser = true;
        $remainingSlotsByRole = [];
        
        if (!$isSuperAdmin && $currentUser instanceof User) {
            $hmaService = $currentUser->getHmaService();
            if ($hmaService) {
                $subscriptionInfo = $hmaService->getUsageStats();
                
                // Vérifier si on peut ajouter des utilisateurs selon le quota
                $limits = $hmaService->getCurrentLimits();
                $maxPerRole = $limits['max_users_per_role'];
                
                if ($maxPerRole !== PHP_INT_MAX) {
                    $roles = ['ROLE_ADMIN', 'ROLE_MANAGER', 'ROLE_STOCK_MANAGER', 'ROLE_CASHIER'];
                    foreach ($roles as $roleName) {
                        $remainingSlotsByRole[$roleName] = $this->quotaManager->getRemainingSlotsForRole($hmaService, $roleName);
                    }
                    
                    // Vérifier s'il reste au moins un slot pour un rôle quelconque
                    $canAddUser = !empty(array_filter($remainingSlotsByRole, fn($slots) => $slots > 0));
                }
            }
        }
        
        return $this->render('admin/user/index.html.twig', [
            'users' => $paginator,
            'currentPage' => $page,
            'totalPages' => $totalPages,
            'search' => $search,
            'role' => $role,
            'status' => $status,
            'companyId' => $companyId,
            'companies' => $companies ?? [],
            'totalItems' => $totalItems,
            'stats' => $stats,
            'subscription_info' => $subscriptionInfo,
            'is_super_admin' => $isSuperAdmin,
            'can_add_user' => $canAddUser,
            'remaining_slots' => $remainingSlotsByRole,
            'current_user' => $currentUser,
        ]);
    }

    #[Route('/new', name: 'app_user_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $this->checkAdminAccess($request);

        $user = new User();
        $currentUser = $this->getUser();
        
        if (!$currentUser instanceof User) {
            throw $this->createAccessDeniedException('Type d\'utilisateur non valide.');
        }
        
        $isSuperAdmin = $this->isGranted('ROLE_SUPER_ADMIN');
        
        // CAS 1: SUPER_ADMIN
        if ($isSuperAdmin) {
            // Rien de spécial
        } 
        // CAS 2: ADMIN entreprise
        else {
            $hmaService = $currentUser->getHmaService();
            if (!$hmaService) {
                throw $this->createAccessDeniedException('Aucune entreprise associée à votre compte.');
            }
            
            $hmaService = $this->entityManager->getRepository(HmaService::class)->find($hmaService->getId());
            $user->setHmaServiceId($hmaService);
        }
        
        $user->setUpdatedAt(new \DateTime());
        $user->setPasswordChanged(false);
        $user->setIsActive(true);
        $user->setSubscriptionActive(true);
        
        $form = $this->createForm(UserType::class, $user, [
            'is_new' => true,
            'is_super_admin' => $isSuperAdmin,
            'can_edit_email' => true,
            'can_edit_role' => true,
            'is_self' => false,
        ]);
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            // Un admin entreprise ne peut pas créer de Super Admin
            if (!$isSuperAdmin && in_array('ROLE_SUPER_ADMIN', $user->getRoles())) {
                $this->addFlash('error', 'Vous ne pouvez pas créer un Super Administrateur.');
                return $this->redirectToRoute('app_user_new');
            }
            
            // ✅ Vérification des quotas pour le rôle choisi
            $role = $form->get('roles')->getData();
            $hmaService = $user->getHmaService(); // Récupérer l'entreprise associée
            if (!$isSuperAdmin && !User::canBeCreatedBy($currentUser, $role, $this->userRepository, $hmaService)) {
                $this->addFlash('warning', 'Vous avez atteint la limite d\'utilisateurs pour ce rôle. Pour en ajouter davantage, passez à un plan supérieur.');
                return $this->redirectToRoute('app_subscription_plans', ['upgrade' => 1]);
            }
            
            // Gérer l'upload de la photo
            $photoFile = $form->get('photo')->getData();
            if ($photoFile) {
                $originalFilename = pathinfo($photoFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $this->slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$photoFile->guessExtension();
                
                try {
                    $photoFile->move(
                        $this->getParameter('uploads_directory').'/users',
                        $newFilename
                    );
                    $user->setPhoto($newFilename);
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Erreur lors de l\'upload de la photo.');
                }
            }

            // Générer un mot de passe aléatoire
            $plainPassword = bin2hex(random_bytes(8));
            $user->setPassword(
                $this->passwordHasher->hashPassword($user, $plainPassword)
            );

            $this->entityManager->persist($user);
            $this->entityManager->flush();

            // Envoyer l'email de bienvenue
            try {
                $this->sendWelcomeEmail($user, $plainPassword);
                $this->addFlash('success', 'Utilisateur créé avec succès. Un email de bienvenue lui a été envoyé.');
            } catch (\Exception $e) {
                $this->logger->error('Erreur envoi email bienvenue: ' . $e->getMessage());
                $this->addFlash('warning', 'Utilisateur créé mais l\'email de bienvenue n\'a pas pu être envoyé. Mot de passe temporaire: ' . $plainPassword);
            }

            return $this->redirectToRoute('app_user_index');
        }

        return $this->render('admin/user/new.html.twig', [
            'target_user' => $user,
            'form' => $form->createView(),
            'is_super_admin' => $isSuperAdmin,
            'can_edit_email' => true,
            'can_edit_role' => true,
            'is_self' => false,
        ]);
    }

    #[Route('/{id}', name: 'app_user_show', methods: ['GET'])]
    public function show(User $user): Response
    {
        $this->checkAdminAccess();
        
        $currentUser = $this->getUser();
        if (!$currentUser instanceof User) {
            throw $this->createAccessDeniedException('Type d\'utilisateur non valide.');
        }
        
        // ✅ Vérification ROBUSTE
        if ($this->isGranted('ROLE_SUPER_ADMIN') || $currentUser->isSuperAdmin()) {
            // Super admin peut tout voir
            return $this->render('admin/user/show.html.twig', [
                'target_user' => $user,
                'is_super_admin' => true,
                'current_user' => $currentUser,
            ]);
        }
        
        // ✅ Pour les autres, on vérifie l'accès
        if (!$user->isEditableBy($currentUser)) {
            throw $this->createAccessDeniedException('Vous n\'avez pas accès à cet utilisateur.');
        }

        return $this->render('admin/user/show.html.twig', [
            'target_user' => $user,
            'is_super_admin' => false,
            'current_user' => $currentUser,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_user_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, User $user): Response
    {
        $this->checkAdminAccess($request);
        
        $currentUser = $this->getUser();
        if (!$currentUser instanceof User) {
            throw $this->createAccessDeniedException('Type d\'utilisateur non valide.');
        }
        
        // Vérifier que l'utilisateur connecté a le droit de modifier cet utilisateur
        if (!$user->isEditableBy($currentUser)) {
            throw $this->createAccessDeniedException('Vous n\'avez pas le droit de modifier cet utilisateur.');
        }

        // Récupérer l'ancien rôle (sans ROLE_USER)
        $oldRoles = array_filter($user->getRoles(), fn($role) => $role !== 'ROLE_USER');
        $oldRole = !empty($oldRoles) ? reset($oldRoles) : null;

        $oldPhoto = $user->getPhoto();
        
        $form = $this->createForm(UserType::class, $user, [
            'is_new' => false,
            'is_super_admin' => $this->isGranted('ROLE_SUPER_ADMIN'),
            'can_edit_email' => $user->canEmailBeEditedBy($currentUser),
            'can_edit_role' => $user->canRoleBeEditedBy($currentUser),
            'is_self' => $user->getId() === $currentUser->getId(),
        ]);
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            // Récupérer le nouveau rôle depuis le formulaire
            $newRole = $form->get('roles')->getData();
            
            // Vérifier les quotas uniquement si le rôle change
            if ($newRole !== $oldRole) {
                if (!$user->canBeEditedBy($currentUser, $newRole, $this->userRepository)) {
                    $this->addFlash('error', 'Modification non autorisée : limite atteinte pour ce rôle.');
                    return $this->redirectToRoute('app_user_edit', ['id' => $user->getId()]);
                }
            }
            
            // Gérer l'upload de la photo
            $photoFile = $form->get('photo')->getData();
            if ($photoFile) {
                // Supprimer l'ancienne photo si elle existe
                if ($oldPhoto) {
                    $oldPhotoPath = $this->getParameter('uploads_directory').'/users/'.$oldPhoto;
                    if (file_exists($oldPhotoPath)) {
                        unlink($oldPhotoPath);
                    }
                }

                $originalFilename = pathinfo($photoFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $this->slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$photoFile->guessExtension();
                
                try {
                    $photoFile->move(
                        $this->getParameter('uploads_directory').'/users',
                        $newFilename
                    );
                    $user->setPhoto($newFilename);
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Erreur lors de l\'upload de la photo.');
                }
            }

            // Sauvegarder les modifications
            $this->entityManager->flush();

            $this->addFlash('success', 'Utilisateur mis à jour avec succès.');

            return $this->redirectToRoute('app_user_index');
        }

        return $this->render('admin/user/edit.html.twig', [
            'target_user' => $user,
            'form' => $form->createView(),
            'is_super_admin' => $this->isGranted('ROLE_SUPER_ADMIN'),
            'current_user' => $currentUser,
            'can_edit_email' => $user->canEmailBeEditedBy($currentUser),
            'can_edit_role' => $user->canRoleBeEditedBy($currentUser),
            'is_self' => $user->getId() === $currentUser->getId(),
        ]);
    }

    #[Route('/{id}/delete-photo', name: 'app_user_delete_photo', methods: ['POST'])]
    public function deletePhoto(Request $request, User $user): Response
    {
       $this->checkAdminAccess($request);
        
        $currentUser = $this->getUser();
        if (!$currentUser instanceof User) {
            throw $this->createAccessDeniedException('Type d\'utilisateur non valide.');
        }
        
        // ✅ Vérification : peut-il modifier CET utilisateur ?
        if (!$user->isEditableBy($currentUser)) {
            throw $this->createAccessDeniedException('Vous n\'avez pas le droit de modifier cet utilisateur.');
        }

        if ($this->isCsrfTokenValid('delete-photo'.$user->getId(), $request->request->get('_token'))) {
            $photo = $user->getPhoto();
            if ($photo) {
                $photoPath = $this->getParameter('uploads_directory').'/users/'.$photo;
                if (file_exists($photoPath)) {
                    unlink($photoPath);
                }
                $user->setPhoto(null);
                $this->entityManager->flush();
                
                $this->addFlash('success', 'Photo supprimée avec succès.');
            }
        }

        return $this->redirectToRoute('app_user_edit', ['id' => $user->getId()]);
    }

    #[Route('/{id}', name: 'app_user_delete', methods: ['POST'])]
    public function delete(Request $request, User $user): Response
    {
        $this->checkAdminAccess($request);
        
        $currentUser = $this->getUser();
        if (!$currentUser instanceof User) {
            throw $this->createAccessDeniedException('Type d\'utilisateur non valide.');
        }
        
        // ✅ Vérification : peut-il supprimer CET utilisateur ?
        if (!$user->canBeDeletedBy($currentUser)) {
            throw $this->createAccessDeniedException('Vous n\'avez pas le droit de supprimer cet utilisateur.');
        }

        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $photo = $user->getPhoto();
            if ($photo) {
                $photoPath = $this->getParameter('uploads_directory').'/users/'.$photo;
                if (file_exists($photoPath)) {
                    unlink($photoPath);
                }
            }

            $this->entityManager->remove($user);
            $this->entityManager->flush();
            
            $this->addFlash('success', 'Utilisateur supprimé avec succès.');
        }

        return $this->redirectToRoute('app_user_index');
    }
    /**
     * Envoyer un email de bienvenue avec le mot de passe temporaire
     */
    private function sendWelcomeEmail(User $user, string $temporaryPassword): void
    {
        $companyName = $user->hasCompany() ? $user->getCompanyDisplayName() : 'HMA MARKET';
        
        $email = (new TemplatedEmail())
            ->from(new Address('no-reply@hmamarket.com', 'HMA Market'))
            ->to($user->getEmail())
            ->subject('Bienvenue sur HMA Market - Vos identifiants de connexion')
            ->htmlTemplate('emails/welcome_employee.html.twig')
            ->context([
                'user' => $user,
                'company_name' => $companyName,
                'temporary_password' => $temporaryPassword,
                'login_url' => $this->generateUrl('app_login', [], 0), // 0 = relative URL
            ]);

        $this->mailer->send($email);
    }
}