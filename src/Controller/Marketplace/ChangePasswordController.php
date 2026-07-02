<?php
// src/Controller/Marketplace/ChangePasswordController.php
namespace App\Controller\Marketplace;

use App\Entity\Customer;
use App\Form\CustomerChangePasswordType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/marketplace')]
class ChangePasswordController extends AbstractController
{
    #[Route('/change-password', name: 'marketplace_change_password')]
    #[IsGranted('ROLE_CUSTOMER')]
    public function changePassword(
        Request $request,
        UserPasswordHasherInterface $passwordHasher,
        EntityManagerInterface $entityManager
    ): Response {
        /** @var Customer $customer */
        $customer = $this->getUser();

        // ✅ Récupérer la valeur de mustChangePassword
        $mustChangePassword = $customer->isMustChangePassword();

        // ✅ Créer le formulaire
        $form = $this->createForm(CustomerChangePasswordType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $currentPassword = $form->get('currentPassword')->getData();
            $newPassword = $form->get('newPassword')->getData();

            if (!$passwordHasher->isPasswordValid($customer, $currentPassword)) {
                $this->addFlash('error', '❌ Le mot de passe actuel est incorrect.');
                return $this->redirectToRoute('marketplace_change_password');
            }

            $hashedPassword = $passwordHasher->hashPassword($customer, $newPassword);
            $customer->setPassword($hashedPassword);
            
            // ✅ Désactiver l'obligation de changer le mot de passe
            $customer->setMustChangePassword(false);
            
            $entityManager->flush();

            $this->addFlash('success', '✅ Votre mot de passe a été changé avec succès !');

            return $this->redirectToRoute('marketplace_home');
        }

        // ✅ Passer les variables au template
        return $this->render('marketplace/auth/change_password.html.twig', [
            'changePasswordForm' => $form->createView(),  // ✅ Variable correcte
            'mustChangePassword' => $mustChangePassword,
        ]);
    }
}