<?php
// src/Controller/FirstLoginController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Routing\Annotation\Route;

class FirstLoginController extends AbstractController
{
    private RequestStack $requestStack;

    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
    }

    #[Route('/first-login-info', name: 'app_first_login_info')]
    public function index(): Response
    {
        // Si l'utilisateur n'est pas connecté, rediriger vers login
        if (!$this->getUser()) {
            return $this->redirectToRoute('app_login');
        }

        // Récupérer le numéro d'abonnement de la session
        $session = $this->requestStack->getSession();
        $subscriptionNumber = $session->get('new_subscription_number');
        
        // Si pas de numéro d'abonnement, c'est qu'on n'est pas sur une première connexion
        if (!$subscriptionNumber) {
            return $this->redirectToRoute('app_dashboard');
        }

        return $this->render('first_login/info.html.twig', [
            'subscription_number' => $subscriptionNumber
        ]);
    }

    #[Route('/first-login-complete', name: 'app_first_login_complete')]
    public function complete(): Response
    {
        // Nettoyer la session
        $session = $this->requestStack->getSession();
        $session->remove('new_subscription_number');
        
        $this->addFlash('success', 'Votre compte est maintenant pleinement configuré !');
        
        return $this->redirectToRoute('app_logout');
    }
}