<?php
// src/Controller/Marketplace/ProfileController.php
namespace App\Controller\Marketplace;

use App\Entity\Customer;
use App\Form\CustomerProfileType;
use App\Form\CustomerChangePasswordType;
use App\Form\FirstLoginChangePasswordType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

#[Route('/marketplace/profile')]
class ProfileController extends AbstractController
{
    public function __construct(
        private EntityManagerInterface $entityManager
    ) {}

    #[Route('/', name: 'marketplace_profile')]
    public function index(): Response
    {
        /** @var Customer|null $customer */
        $customer = $this->getUser();
        
        if (!$customer) {
            return $this->redirectToRoute('marketplace_login');
        }

        return $this->render('marketplace/profile/index.html.twig', [
            'customer' => $customer,
        ]);
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

            $this->addFlash('success', 'Votre profil a été mis à jour avec succès !');
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

        // ✅ Vérifier si c'est la première connexion
        $mustChangePassword = $customer->isMustChangePassword();

        // ✅ Choisir le formulaire approprié
        if ($mustChangePassword) {
            $form = $this->createForm(FirstLoginChangePasswordType::class);
        } else {
            $form = $this->createForm(CustomerChangePasswordType::class);
        }
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // ✅ Cas de la première connexion (sans ancien mot de passe)
            if ($mustChangePassword) {
                $newPassword = $form->get('newPassword')->getData();
                
                $hashedPassword = $passwordHasher->hashPassword($customer, $newPassword);
                $customer->setPassword($hashedPassword);
                $customer->setMustChangePassword(false);
                $customer->resetFailedLoginAttempts();
                
                $this->entityManager->flush();

                $this->addFlash('success', '✅ Votre mot de passe a été changé avec succès !');
                $this->addFlash('info', '🔒 Veuillez vous reconnecter avec votre nouveau mot de passe.');

                // ✅ Déconnecter l'utilisateur
                $tokenStorage->setToken(null);
                $request->getSession()->invalidate();

                return $this->redirectToRoute('marketplace_logout');
            }
            
            // ✅ Cas du changement volontaire (avec ancien mot de passe)
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

            // ✅ Déconnecter l'utilisateur pour sécurité
            $tokenStorage->setToken(null);
            $request->getSession()->invalidate();

            return $this->redirectToRoute('marketplace_logout');
        }

        // ✅ Passer les variables au template
        return $this->render('marketplace/auth/change_password.html.twig', [
            'changePasswordForm' => $form->createView(),
            'mustChangePassword' => $mustChangePassword,
        ]);
    }

    #[Route('/orders', name: 'marketplace_orders')]
    public function orders(): Response
    {
        /** @var Customer|null $customer */
        $customer = $this->getUser();
        
        if (!$customer) {
            return $this->redirectToRoute('marketplace_login');
        }

        return $this->render('marketplace/profile/orders.html.twig', [
            
        ]);
    }
}