<?php
// src/Controller/Dashboard/HmaServiceProfileController.php

namespace App\Controller\Dashboard;

use App\Entity\HmaService;
use App\Entity\User;
use App\Form\HmaServiceProfileType;
use App\Service\FileUploader;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class HmaServiceProfileController extends AbstractController
{
    /**
     * Afficher les détails de l'entreprise (nouvelle page)
     */
    #[Route('/dashboard/company/details', name: 'app_dashboard_hmaservice_details', methods: ['GET'])]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function showDetails(EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        
        // Vérifier que l'utilisateur est bien un User (pas un HmaService)
        if ($user instanceof HmaService) {
            $this->addFlash('error', 'Cette fonctionnalité n\'est pas disponible pour les propriétaires directs.');
            return $this->redirectToRoute('app_dashboard');
        }
        
        // Vérifier que l'utilisateur est bien un User
        if (!$user instanceof User) {
            $this->addFlash('error', 'Type d\'utilisateur non reconnu.');
            return $this->redirectToRoute('app_dashboard');
        }
        
        // Vérifier que l'utilisateur est bien l'administrateur propriétaire
        if (!$user->isHmaOwner()) {
            $this->addFlash('error', 'Vous n\'avez pas les droits pour gérer l\'entreprise.');
            return $this->redirectToRoute('app_dashboard');
        }
        
        // Vérifier que l'utilisateur a une entreprise associée
        $hmaService = $user->getHmaServiceId(); // Utilisez getHmaServiceId() si c'est le nom de la méthode
        if (!$hmaService) {
            $this->addFlash('error', 'Aucune entreprise associée à votre compte.');
            return $this->redirectToRoute('app_dashboard');
        }

        // Compter les utilisateurs actifs
        $userRepository = $entityManager->getRepository(User::class);
        $totalUsers = $userRepository->count(['hma_service_id' => $hmaService]);
        $activeUsers = $userRepository->count([
            'hma_service_id' => $hmaService,
            'is_active' => true
        ]);
        
        return $this->render('dashboard/hmaservice/details.html.twig', [
            'hma_service' => $hmaService,
            'user' => $user,
            'total_users_count' => $totalUsers,
            'active_users_count' => $activeUsers,
        ]);
    }

    /**
     * Éditer le profil de l'entreprise
     * Seulement accessible par l'administrateur propriétaire (is_hma_owner = true)
     */
    #[Route('/dashboard/company/edit', name: 'app_dashboard_hmaservice_edit', methods: ['GET', 'POST'])]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function editProfile(
        Request $request,
        EntityManagerInterface $entityManager,
        FileUploader $fileUploader
    ): Response {
        $sessionUser = $this->getUser();
        
        // Vérifier que l'utilisateur est bien un User (pas un HmaService)
        if ($sessionUser instanceof HmaService) {
            $this->addFlash('error', 'Cette fonctionnalité n\'est pas disponible pour les propriétaires directs.');
            return $this->redirectToRoute('app_dashboard');
        }
        
        // Vérifier que l'utilisateur est bien un User
        if (!$sessionUser instanceof User) {
            $this->addFlash('error', 'Type d\'utilisateur non reconnu.');
            return $this->redirectToRoute('app_dashboard');
        }
        
        // ✅ IMPORTANT: Recharger l'utilisateur depuis la base de données
        $user = $entityManager->getRepository(User::class)->find($sessionUser->getId());
        
        if (!$user) {
            $this->addFlash('error', 'Utilisateur non trouvé.');
            return $this->redirectToRoute('app_dashboard');
        }
        
        // Vérifier que l'utilisateur est bien l'administrateur propriétaire
        if (!$user->isHmaOwner()) {
            $this->addFlash('error', 'Vous n\'avez pas les droits pour gérer l\'entreprise.');
            return $this->redirectToRoute('app_dashboard');
        }
        
        // ✅ Récupérer FRAÎCHEMENT le HmaService depuis la base de données
        $hmaService = $user->getHmaServiceId();
        if (!$hmaService) {
            $this->addFlash('error', 'Aucune entreprise associée à votre compte.');
            return $this->redirectToRoute('app_dashboard');
        }
        
        // ✅ Recharger le HmaService depuis la base pour être sûr qu'il est géré
        $freshHmaService = $entityManager->getRepository(HmaService::class)->find($hmaService->getId());
        
        if (!$freshHmaService) {
            $this->addFlash('error', 'Entreprise non trouvée en base de données.');
            return $this->redirectToRoute('app_dashboard');
        }
        
        $form = $this->createForm(HmaServiceProfileType::class, $freshHmaService);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Gérer l'upload du logo
            $logoFile = $form->get('logoFile')->getData();
            
            if ($logoFile) {
                try {
                    // Supprimer l'ancien logo s'il existe
                    if ($freshHmaService->getLogo()) {
                        $fileUploader->remove($freshHmaService->getLogo());
                    }
                    
                    $logoFileName = $fileUploader->upload($logoFile);
                    $freshHmaService->setLogo($logoFileName);
                } catch (\Exception $e) {
                    $this->addFlash('warning', 'Erreur lors du téléchargement du logo : ' . $e->getMessage());
                }
            }

            try {
                // ✅ NE PAS PERSISTER - l'entité est déjà gérée
                // $entityManager->persist($freshHmaService); // ← À SUPPRIMER
                
                // ✅ Un seul flush
                $entityManager->flush();
                
                $this->addFlash('success', 'Le profil de l\'entreprise a été mis à jour avec succès.');
                
                // Redirection vers la page des détails après succès
                return $this->redirectToRoute('app_dashboard_hmaservice_details');
                
            } catch (\Exception $e) {
                $this->addFlash('error', 'Une erreur est survenue lors de la mise à jour : ' . $e->getMessage());
                
                // Log pour déboguer
                error_log('Erreur mise à jour HmaService: ' . $e->getMessage());
            }
        } elseif ($form->isSubmitted() && !$form->isValid()) {
            $this->addFlash('error', 'Veuillez corriger les erreurs dans le formulaire.');
        }

        return $this->render('dashboard/hmaservice/edit.html.twig', [
            'hma_service' => $freshHmaService, // Utiliser l'entité fraîche
            'form' => $form->createView(),
            'user' => $user,
        ]);
    }
    /**
     * Supprimer le logo de l'entreprise
     */
    #[Route('/dashboard/company/delete-logo', name: 'app_dashboard_hmaservice_delete_logo', methods: ['POST'])]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function deleteLogo(
        Request $request,
        EntityManagerInterface $entityManager,
        FileUploader $fileUploader
    ): Response {
        $user = $this->getUser();
        
        // Vérifier que l'utilisateur est bien un User (pas un HmaService)
        if ($user instanceof HmaService) {
            $this->addFlash('error', 'Cette fonctionnalité n\'est pas disponible pour les propriétaires directs.');
            return $this->redirectToRoute('app_dashboard');
        }
        
        // Vérifier que l'utilisateur est bien un User
        if (!$user instanceof User) {
            $this->addFlash('error', 'Type d\'utilisateur non reconnu.');
            return $this->redirectToRoute('app_dashboard');
        }
        
        // Vérifier que l'utilisateur est bien l'administrateur propriétaire
        if (!$user->isHmaOwner()) {
            $this->addFlash('error', 'Vous n\'avez pas les droits pour gérer l\'entreprise.');
            return $this->redirectToRoute('app_dashboard');
        }
        
        $hmaService = $user->getHmaServiceId();
        if (!$hmaService) {
            $this->addFlash('error', 'Aucune entreprise associée à votre compte.');
            return $this->redirectToRoute('app_dashboard');
        }

        if (!$this->isCsrfTokenValid('delete-logo'.$hmaService->getId(), $request->request->get('_token'))) {
            $this->addFlash('error', 'Token CSRF invalide.');
            return $this->redirectToRoute('app_dashboard_hmaservice_details');
        }

        if ($hmaService->getLogo()) {
            try {
                // Supprimer le fichier
                $removed = $fileUploader->remove($hmaService->getLogo());
                
                if ($removed) {
                    $hmaService->setLogo(null);
                    $entityManager->flush();
                    $this->addFlash('success', 'Logo supprimé avec succès.');
                } else {
                    // Si le fichier n'existe pas sur le disque, on met quand même à jour la base
                    $hmaService->setLogo(null);
                    $entityManager->flush();
                    $this->addFlash('warning', 'Logo retiré de la base de données.');
                }
            } catch (\Exception $e) {
                $this->addFlash('error', 'Erreur lors de la suppression du logo : ' . $e->getMessage());
            }
        } else {
            $this->addFlash('warning', 'Aucun logo à supprimer.');
        }

        return $this->redirectToRoute('app_dashboard_hmaservice_details');
    }

    /**
     * Désactiver le compte de l'entreprise ET tous les utilisateurs associés
     */
    #[Route('/dashboard/company/deactivate', name: 'app_dashboard_hmaservice_deactivate', methods: ['POST'])]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function deactivateCompany(
        Request $request,
        EntityManagerInterface $entityManager
    ): Response {
        $user = $this->getUser();
        
        // Vérifier que l'utilisateur est bien un User (pas un HmaService)
        if ($user instanceof HmaService) {
            $this->addFlash('error', 'Cette fonctionnalité n\'est pas disponible pour les propriétaires directs.');
            return $this->redirectToRoute('app_dashboard');
        }
        
        // Vérifier que l'utilisateur est bien un User
        if (!$user instanceof User) {
            $this->addFlash('error', 'Type d\'utilisateur non reconnu.');
            return $this->redirectToRoute('app_dashboard');
        }
        
        // Vérifier que l'utilisateur est bien l'administrateur propriétaire
        if (!$user->isHmaOwner()) {
            $this->addFlash('error', 'Vous n\'avez pas les droits pour gérer l\'entreprise.');
            return $this->redirectToRoute('app_dashboard');
        }
        
        $hmaService = $user->getHmaServiceId();
        if (!$hmaService) {
            $this->addFlash('error', 'Aucune entreprise associée à votre compte.');
            return $this->redirectToRoute('app_dashboard');
        }

        if (!$this->isCsrfTokenValid('deactivate-company'.$hmaService->getId(), $request->request->get('_token'))) {
            $this->addFlash('error', 'Token CSRF invalide.');
            return $this->redirectToRoute('app_dashboard_hmaservice_details');
        }

        try {
            // 1. Désactiver l'entreprise
            $hmaService->setIsActive(false);
            
            // 2. Désactiver TOUS les utilisateurs associés à cette entreprise
            $users = $entityManager->getRepository(User::class)
                ->findBy(['hma_service_id' => $hmaService]); // Utilisez 'hma_service_id' comme nom de champ
            
            $deactivatedUsers = 0;
            foreach ($users as $userEntity) {
                $userEntity->setIsActive(false);
                $deactivatedUsers++;
            }
            
            $entityManager->flush();
            
            $this->addFlash(
                'success', 
                sprintf(
                    'Le compte de l\'entreprise a été désactivé avec succès. %d utilisateur(s) ont été désactivé(s).',
                    $deactivatedUsers
                )
            );
            
        } catch (\Exception $e) {
            $this->addFlash('error', 'Erreur lors de la désactivation : ' . $e->getMessage());
        }

        // Déconnexion forcée après désactivation
        return $this->redirectToRoute('app_logout');
    }

    /**
     * Activer le compte de l'entreprise ET tous les utilisateurs associés
     */
    #[Route('/dashboard/company/activate', name: 'app_dashboard_hmaservice_activate', methods: ['POST'])]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function activateCompany(
        Request $request,
        EntityManagerInterface $entityManager
    ): Response {
        $user = $this->getUser();
        
        // Vérifier que l'utilisateur est bien un User (pas un HmaService)
        if ($user instanceof HmaService) {
            $this->addFlash('error', 'Cette fonctionnalité n\'est pas disponible pour les propriétaires directs.');
            return $this->redirectToRoute('app_dashboard');
        }
        
        // Vérifier que l'utilisateur est bien un User
        if (!$user instanceof User) {
            $this->addFlash('error', 'Type d\'utilisateur non reconnu.');
            return $this->redirectToRoute('app_dashboard');
        }
        
        // Vérifier que l'utilisateur est bien l'administrateur propriétaire
        if (!$user->isHmaOwner()) {
            $this->addFlash('error', 'Vous n\'avez pas les droits pour gérer l\'entreprise.');
            return $this->redirectToRoute('app_dashboard');
        }
        
        $hmaService = $user->getHmaServiceId();
        if (!$hmaService) {
            $this->addFlash('error', 'Aucune entreprise associée à votre compte.');
            return $this->redirectToRoute('app_dashboard');
        }

        if (!$this->isCsrfTokenValid('activate-company'.$hmaService->getId(), $request->request->get('_token'))) {
            $this->addFlash('error', 'Token CSRF invalide.');
            return $this->redirectToRoute('app_dashboard_hmaservice_details');
        }

        try {
            // 1. Activer l'entreprise
            $hmaService->setIsActive(true);
            
            // 2. Activer TOUS les utilisateurs associés à cette entreprise
            $users = $entityManager->getRepository(User::class)
                ->findBy(['hma_service_id' => $hmaService]); // Utilisez 'hma_service_id' comme nom de champ
            
            $activatedUsers = 0;
            foreach ($users as $userEntity) {
                $userEntity->setIsActive(true);
                $activatedUsers++;
            }
            
            $entityManager->flush();
            
            $this->addFlash(
                'success', 
                sprintf(
                    'Le compte de l\'entreprise a été réactivé avec succès. %d utilisateur(s) ont été activé(s).',
                    $activatedUsers
                )
            );
            
        } catch (\Exception $e) {
            $this->addFlash('error', 'Erreur lors de l\'activation : ' . $e->getMessage());
        }

        return $this->redirectToRoute('app_dashboard_hmaservice_details');
    }
}