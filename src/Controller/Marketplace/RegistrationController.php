<?php
// src/Controller/Marketplace/RegistrationController.php
namespace App\Controller\Marketplace;

use App\Entity\Customer;
use App\Entity\Cart;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class RegistrationController extends AbstractController
{
    #[Route('/marketplace/register', name: 'marketplace_register_simple', methods: ['GET', 'POST'])]
    public function register(
        Request $request,
        UserPasswordHasherInterface $passwordHasher,
        EntityManagerInterface $entityManager,
        ValidatorInterface $validator
    ): Response {
        // ✅ Si déjà connecté en tant que customer
        if ($this->getUser() instanceof Customer) {
            return $this->redirectToRoute('marketplace_home');
        }

        // Traitement du formulaire
        if ($request->isMethod('POST')) {
            $email = $request->request->get('email');
            $fullName = $request->request->get('full_name');
            $plainPassword = $request->request->get('password');
            $confirmPassword = $request->request->get('confirm_password');
            $phone = $request->request->get('phone');
            $address = $request->request->get('address');
            $city = $request->request->get('city');
            $country = $request->request->get('country');
            $terms = $request->request->get('terms');

            // Validation
            $errors = [];

            if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = 'Veuillez saisir un email valide.';
            }

            if (empty($fullName) || strlen($fullName) < 2) {
                $errors[] = 'Le nom complet est obligatoire (minimum 2 caractères).';
            }

            if (empty($plainPassword) || strlen($plainPassword) < 6) {
                $errors[] = 'Le mot de passe doit contenir au moins 6 caractères.';
            }

            if ($plainPassword !== $confirmPassword) {
                $errors[] = 'Les mots de passe ne correspondent pas.';
            }

            if (!$terms) {
                $errors[] = 'Vous devez accepter les conditions générales.';
            }

            // Vérifier si l'email existe déjà dans Customer
            $existingCustomer = $entityManager->getRepository(Customer::class)
                ->findOneBy(['email' => $email]);
            
            if ($existingCustomer) {
                $errors[] = 'Cet email est déjà utilisé. Veuillez vous connecter.';
            }

            // S'il n'y a pas d'erreurs, créer le compte
            if (empty($errors)) {
                $customer = new Customer();
                $customer->setEmail($email);
                $customer->setFullName($fullName);
                $customer->setPhone($phone);
                $customer->setAddress($address);
                $customer->setCity($city);
                $customer->setCountry($country);
                $customer->setIsActive(true);
                $customer->setRoles(['ROLE_CUSTOMER']);

                // Hasher le mot de passe
                $hashedPassword = $passwordHasher->hashPassword($customer, $plainPassword);
                $customer->setPassword($hashedPassword);

                // Créer un panier pour le customer
                $cart = new Cart();
                $cart->setCustomer($customer);
                $customer->setCart($cart);

                $entityManager->persist($customer);
                $entityManager->persist($cart);
                $entityManager->flush();

                $this->addFlash('success', 'Votre compte client a été créé avec succès ! Vous pouvez maintenant vous connecter.');

                return $this->redirectToRoute('marketplace_login');
            }

            // Ajouter les erreurs flash
            foreach ($errors as $error) {
                $this->addFlash('error', $error);
            }
        }

        return $this->render('marketplace/auth/register.html.twig');
    }
}