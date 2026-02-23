<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ProfileType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Psr\Log\LoggerInterface;

#[Route('/profile')]
class ProfileController extends AbstractController
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private SluggerInterface $slugger,
        private UserPasswordHasherInterface $passwordHasher,
        private LoggerInterface $logger
    ) {}

    private function getUploadDirectory(): string
    {
        $directory = $this->getParameter('kernel.project_dir') . '/public/uploads/users';
        
        // Créer le répertoire s'il n'existe pas
        if (!is_dir($directory)) {
            mkdir($directory, 0777, true);
            $this->logger->info('Répertoire créé', ['directory' => $directory]);
        }
        
        return $directory;
    }

    #[Route('/', name: 'app_profile_show', methods: ['GET'])]
    public function show(): Response
    {
        /** @var User $user */
        $user = $this->getUser();
        
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        return $this->render('profile/show.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/edit', name: 'app_profile_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request): Response
    {
        /** @var User $user */
        $user = $this->getUser();
        
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        // ✅ IMPORTANT: Récupérer l'utilisateur FRAÎCHEMENT depuis la base de données
        // pour s'assurer qu'il est bien géré par l'EntityManager
        $user = $this->entityManager->getRepository(User::class)->find($user->getId());
        
        if (!$user) {
            $this->addFlash('error', 'Utilisateur non trouvé');
            return $this->redirectToRoute('app_login');
        }

        $oldPhoto = $user->getPhoto();
        
        $form = $this->createForm(ProfileType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                try {
                    // Gestion de la photo
                    $photoFile = $form->get('photo')->getData();
                    if ($photoFile) {
                        // Supprimer l'ancienne photo si elle existe
                        if ($oldPhoto) {
                            $oldPhotoPath = $this->getUploadDirectory() . '/' . $oldPhoto;
                            if (file_exists($oldPhotoPath)) {
                                unlink($oldPhotoPath);
                                $this->logger->info('Ancienne photo supprimée', ['photo' => $oldPhoto]);
                            }
                        }

                        // Upload nouvelle photo
                        $originalFilename = pathinfo($photoFile->getClientOriginalName(), PATHINFO_FILENAME);
                        $safeFilename = $this->slugger->slug($originalFilename);
                        $newFilename = $safeFilename . '-' . uniqid() . '.' . $photoFile->guessExtension();
                        
                        $photoFile->move(
                            $this->getUploadDirectory(),
                            $newFilename
                        );
                        $user->setPhoto($newFilename);
                        $this->logger->info('Nouvelle photo uploadée', ['photo' => $newFilename]);
                        
                        $this->addFlash('success', 'Photo de profil mise à jour avec succès.');
                    }

                    // ✅ S'assurer que l'email n'est PAS modifié
                    // Le champ email n'est pas dans le formulaire, donc pas de risque
                    
                    // Persister les changements
                    $this->entityManager->persist($user);
                    $this->entityManager->flush();
                    
                    $this->addFlash('success', 'Votre profil a été mis à jour avec succès.');

                    // Rediriger vers la page de visualisation
                    return $this->redirectToRoute('app_profile_show');
                    
                } catch (\Exception $e) {
                    $this->logger->error('Erreur lors de la mise à jour du profil', [
                        'error' => $e->getMessage(),
                        'trace' => $e->getTraceAsString()
                    ]);
                    $this->addFlash('error', 'Une erreur est survenue lors de la mise à jour de votre profil.');
                }
            } else {
                // Si le formulaire n'est pas valide, on affiche les erreurs
                $this->logger->warning('Formulaire invalide', [
                    'errors' => (string) $form->getErrors(true, false)
                ]);
                
                // Ajouter les erreurs aux flashes pour les afficher
                foreach ($form->getErrors(true) as $error) {
                    $this->addFlash('error', $error->getMessage());
                }
            }
        }

        return $this->render('profile/edit.html.twig', [
            'form' => $form->createView(),
            'user' => $user,
        ]);
    }

    #[Route('/delete-photo', name: 'app_profile_delete_photo', methods: ['POST'])]
    public function deletePhoto(Request $request): Response
    {
        /** @var User $user */
        $user = $this->getUser();
        
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        // ✅ Récupérer l'utilisateur fraîchement depuis la base
        $user = $this->entityManager->getRepository(User::class)->find($user->getId());

        if (!$user) {
            $this->addFlash('error', 'Utilisateur non trouvé');
            return $this->redirectToRoute('app_login');
        }

        if ($this->isCsrfTokenValid('delete-photo', $request->request->get('_token'))) {
            $photo = $user->getPhoto();
            if ($photo) {
                $uploadDir = $this->getUploadDirectory();
                $photoPath = $uploadDir . '/' . $photo;
                
                $this->logger->info('Tentative de suppression', [
                    'photo' => $photo,
                    'path' => $photoPath,
                    'exists' => file_exists($photoPath) ? 'OUI' : 'NON'
                ]);
                
                if (file_exists($photoPath)) {
                    if (unlink($photoPath)) {
                        $this->logger->info('Fichier supprimé avec succès');
                    } else {
                        $this->logger->error('Échec de la suppression du fichier');
                    }
                } else {
                    $this->logger->warning('Fichier non trouvé');
                }
                
                $user->setPhoto(null);
                $this->entityManager->persist($user);
                $this->entityManager->flush();
                
                $this->addFlash('success', 'Photo supprimée avec succès.');
            }
        }

        return $this->redirectToRoute('app_profile_edit');
    }
}