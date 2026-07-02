<?php
// src/Controller/Marketplace/PharmacyController.php

namespace App\Controller\Marketplace;

use App\Repository\HmaServiceRepository;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/customer/pharmacies')]
class PharmacyController extends AbstractController
{
    #[Route('/search', name: 'customer_pharmacy_search')]
    public function search(
        Request $request,
        HmaServiceRepository $hmaServiceRepository
    ): Response {
        // Ce contrôleur existe déjà dans PharmacySearchController
        // Rediriger vers l'ancien contrôleur
        return $this->redirectToRoute('marketplace_pharmacy_search', $request->query->all());
    }
}