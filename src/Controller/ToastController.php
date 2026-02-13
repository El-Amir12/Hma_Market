<?php
// src/Controller/ToastController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ToastController extends AbstractController
{
    #[Route('/clear-toast-session', name: 'app_clear_toast', methods: ['POST'])]
    public function clearToast(Request $request): Response
    {
        $session = $request->getSession();
        $session->remove('hma_toast');
        $session->remove('disabled_detected_at');
        $session->remove('logout_in_seconds');
        
        return new Response('OK', 200);
    }
}