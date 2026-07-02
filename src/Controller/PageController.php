<?php
// src/Controller/PageController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    #[Route('/conditions-generales', name: 'page_terms')]
    public function terms(): Response
    {
        return $this->render('pages/terms.html.twig', [
            'title' => 'Conditions générales d\'utilisation'
        ]);
    }

    #[Route('/politique-confidentialite', name: 'page_privacy')]
    public function privacy(): Response
    {
        return $this->render('pages/privacy.html.twig', [
            'title' => 'Politique de confidentialité'
        ]);
    }
}