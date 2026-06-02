<?php
// src/Controller/SuperAdmin/AnalysisPriceController.php

namespace App\Controller\SuperAdmin;

use App\Entity\AnalysisPrice;
use App\Form\AnalysisPriceType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/super-admin/analysis-prices')]
class AnalysisPriceController extends AbstractController
{
    #[Route('/', name: 'super_admin_analysis_price_index', methods: ['GET'])]
    public function index(EntityManagerInterface $em): Response
    {
        $prices = $em->getRepository(AnalysisPrice::class)->findBy([], ['display_order' => 'ASC']);
        
        // Statistiques
        $stats = [
            'total' => count($prices),
            'active' => count(array_filter($prices, fn($p) => $p->isActive())),
            'inactive' => count(array_filter($prices, fn($p) => !$p->isActive())),
            'min_price' => $prices ? min(array_map(fn($p) => $p->getPrice(), $prices)) : 0,
            'max_price' => $prices ? max(array_map(fn($p) => $p->getPrice(), $prices)) : 0,
        ];
        
        return $this->render('super_admin/analysis_price/index.html.twig', [
            'prices' => $prices,
            'stats' => $stats,
        ]);
    }
    
    #[Route('/new', name: 'super_admin_analysis_price_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $price = new AnalysisPrice();
        $form = $this->createForm(AnalysisPriceType::class, $price);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            // ✅ Validation supplémentaire : ordre d'affichage non négatif
            if ($price->getDisplayOrder() !== null && $price->getDisplayOrder() < 0) {
                $this->addFlash('error', "L'ordre d'affichage ne peut pas être négatif.");
                return $this->render('super_admin/analysis_price/new.html.twig', [
                    'form' => $form->createView(),
                ]);
            }
            
            $em->persist($price);
            $em->flush();
            
            $this->addFlash('success', 'Prix ajouté avec succès.');
            return $this->redirectToRoute('super_admin_analysis_price_index');
        }
        
        return $this->render('super_admin/analysis_price/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    
    #[Route('/{id}', name: 'super_admin_analysis_price_show', methods: ['GET'])]
    public function show(AnalysisPrice $price): Response
    {
        return $this->render('super_admin/analysis_price/show.html.twig', [
            'price' => $price,
        ]);
    }
    
    #[Route('/{id}/edit', name: 'super_admin_analysis_price_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, AnalysisPrice $price, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(AnalysisPriceType::class, $price);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            // ✅ Validation supplémentaire : ordre d'affichage non négatif
            if ($price->getDisplayOrder() !== null && $price->getDisplayOrder() < 0) {
                $this->addFlash('error', "L'ordre d'affichage ne peut pas être négatif.");
                return $this->render('super_admin/analysis_price/edit.html.twig', [
                    'form' => $form->createView(),
                    'price' => $price,
                ]);
            }
            
            $price->setUpdatedAt(new \DateTimeImmutable());
            $em->flush();
            
            $this->addFlash('success', 'Prix modifié avec succès.');
            return $this->redirectToRoute('super_admin_analysis_price_index');
        }
        
        return $this->render('super_admin/analysis_price/edit.html.twig', [
            'form' => $form->createView(),
            'price' => $price,
        ]);
    }
    
    #[Route('/{id}/toggle', name: 'super_admin_analysis_price_toggle', methods: ['POST'])]
    public function toggle(Request $request, AnalysisPrice $price, EntityManagerInterface $em): Response
    {
        if (!$this->isCsrfTokenValid('toggle' . $price->getId(), $request->request->get('_token'))) {
            $this->addFlash('error', 'Token invalide.');
            return $this->redirectToRoute('super_admin_analysis_price_index');
        }
        
        $price->setIsActive(!$price->isActive());
        $price->setUpdatedAt(new \DateTimeImmutable());
        $em->flush();
        
        $status = $price->isActive() ? 'activé' : 'désactivé';
        $this->addFlash('success', sprintf('Le prix "%s" a été %s avec succès.', $price->getLabel(), $status));
        
        return $this->redirectToRoute('super_admin_analysis_price_index');
    }
    
    #[Route('/{id}/delete', name: 'super_admin_analysis_price_delete', methods: ['POST'])]
    public function delete(Request $request, AnalysisPrice $price, EntityManagerInterface $em): Response
    {
        if (!$this->isCsrfTokenValid('delete' . $price->getId(), $request->request->get('_token'))) {
            $this->addFlash('error', 'Token invalide.');
            return $this->redirectToRoute('super_admin_analysis_price_index');
        }
        
        $label = $price->getLabel();
        $em->remove($price);
        $em->flush();
        
        $this->addFlash('success', sprintf('Le prix "%s" a été supprimé avec succès.', $label));
        
        return $this->redirectToRoute('super_admin_analysis_price_index');
    }
}