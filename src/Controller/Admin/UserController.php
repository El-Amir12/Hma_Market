<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

#[Route('/admin/user')]
class UserController extends AbstractController
{
    private UserPasswordHasherInterface $passwordHasher;
    private SluggerInterface $slugger;
    private UserRepository $userRepository;

    public function __construct(
        UserPasswordHasherInterface $passwordHasher,
        SluggerInterface $slugger,
        UserRepository $userRepository
    ) {
        $this->passwordHasher = $passwordHasher;
        $this->slugger = $slugger;
        $this->userRepository = $userRepository;
    }

    // Exemple pour UserController
    #[Route('/', name: 'app_user_index', methods: ['GET'])]
    public function index(Request $request, UserRepository $userRepository): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        // Récupérer les paramètres de pagination et recherche
        $page = $request->query->getInt('page', 1);
        $limit = 10;
        $search = $request->query->get('search', '');
        
        if ($search) {
            // Utiliser la recherche si un terme est fourni
            $paginator = $userRepository->search($search, $page, $limit);
        } else {
            // Sinon, utiliser la pagination normale
            $paginator = $userRepository->findAllPaginated($page, $limit);
        }
        
        $totalItems = $paginator->count();
        $totalPages = ceil($totalItems / $limit);

        return $this->render('admin/user/index.html.twig', [
            'users' => $paginator,
            'currentPage' => $page,
            'totalPages' => $totalPages,
            'search' => $search,
            'totalItems' => $totalItems,
        ]);
    }
    #[Route('/new', name: 'app_user_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $user = new User();
        // NE PAS forcer isActive ici, laissez le formulaire gérer
        $user->setUpdatedAt(new \DateTime());
        
        $form = $this->createForm(UserType::class, $user, [
            'is_new' => true,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
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

            // Mettre à jour le mot de passe
            $plainPassword = $form->get('plainPassword')->getData();
            if ($plainPassword) {
                $user->setPassword(
                    $this->passwordHasher->hashPassword($user, $plainPassword)
                );
            } else {
                // Si aucun mot de passe n'est fourni, générez-en un
                $plainPassword = bin2hex(random_bytes(8));
                $user->setPassword(
                    $this->passwordHasher->hashPassword($user, $plainPassword)
                );
                $this->addFlash('info', 'Mot de passe généré automatiquement : ' . $plainPassword);
            }

            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('success', 'Utilisateur créé avec succès.');

            return $this->redirectToRoute('app_user_index');
        }

        return $this->render('admin/user/new.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_user_show', methods: ['GET'])]
    public function show(User $user): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        return $this->render('admin/user/show.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_user_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $oldPhoto = $user->getPhoto();
        $form = $this->createForm(UserType::class, $user, [
            'is_new' => false,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
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

            // Mettre à jour le mot de passe si fourni
            if ($plainPassword = $form->get('plainPassword')->getData()) {
                $user->setPassword(
                    $this->passwordHasher->hashPassword($user, $plainPassword)
                );
            }

            $entityManager->flush();

            $this->addFlash('success', 'Utilisateur mis à jour avec succès.');

            return $this->redirectToRoute('app_user_index');
        }

        return $this->render('admin/user/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/toggle-status', name: 'app_user_toggle_status', methods: ['POST'])]
    public function toggleStatus(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        if (!$this->isCsrfTokenValid('toggle-status'.$user->getId(), $request->request->get('_token'))) {
            throw $this->createAccessDeniedException('Token CSRF invalide');
        }

        try {
            // Utilisez la bonne méthode selon votre entité
            $currentStatus = $user->isActive();
            $user->setIsActive(!$currentStatus);
            
            $entityManager->flush();

            $status = $user->isActive() ? 'activé' : 'désactivé';
            $this->addFlash('success', "Utilisateur {$status} avec succès.");
        } catch (\Exception $e) {
            $this->addFlash('error', 'Erreur lors du changement de statut : ' . $e->getMessage());
        }

        return $this->redirectToRoute('app_user_index');
    }

    #[Route('/{id}/delete-photo', name: 'app_user_delete_photo', methods: ['POST'])]
    public function deletePhoto(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        if ($this->isCsrfTokenValid('delete-photo'.$user->getId(), $request->request->get('_token'))) {
            $photo = $user->getPhoto();
            if ($photo) {
                $photoPath = $this->getParameter('uploads_directory').'/users/'.$photo;
                if (file_exists($photoPath)) {
                    unlink($photoPath);
                }
                $user->setPhoto(null);
                $entityManager->flush();
                
                $this->addFlash('success', 'Photo supprimée avec succès.');
            }
        }

        return $this->redirectToRoute('app_user_edit', ['id' => $user->getId()]);
    }

    #[Route('/{id}', name: 'app_user_delete', methods: ['POST'])]
    public function delete(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            // Ne pas supprimer l'admin principal
            if ($user->getEmail() === 'admin@hma.com') {
                $this->addFlash('error', 'Impossible de supprimer l\'administrateur principal.');
                return $this->redirectToRoute('app_user_index');
            }

            // Supprimer la photo si elle existe
            $photo = $user->getPhoto();
            if ($photo) {
                $photoPath = $this->getParameter('uploads_directory').'/users/'.$photo;
                if (file_exists($photoPath)) {
                    unlink($photoPath);
                }
            }

            $entityManager->remove($user);
            $entityManager->flush();
            
            $this->addFlash('success', 'Utilisateur supprimé avec succès.');
        }

        return $this->redirectToRoute('app_user_index');
    }
}