<?php

namespace App\Controller\Admin;

use App\Entity\PurchaseItem;
use App\Form\PurchaseItemType;
use App\Repository\PurchaseItemRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin/purchase/item')]
final class PurchaseItemController extends AbstractController
{
    #[Route(name: 'app_admin_purchase_item_index', methods: ['GET'])]
    public function index(PurchaseItemRepository $purchaseItemRepository): Response
    {
        return $this->render('admin/purchase_item/index.html.twig', [
            'purchase_items' => $purchaseItemRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_admin_purchase_item_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $purchaseItem = new PurchaseItem();
        $form = $this->createForm(PurchaseItemType::class, $purchaseItem);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($purchaseItem);
            $entityManager->flush();

            return $this->redirectToRoute('app_admin_purchase_item_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/purchase_item/new.html.twig', [
            'purchase_item' => $purchaseItem,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_admin_purchase_item_show', methods: ['GET'])]
    public function show(PurchaseItem $purchaseItem): Response
    {
        return $this->render('admin/purchase_item/show.html.twig', [
            'purchase_item' => $purchaseItem,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_admin_purchase_item_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, PurchaseItem $purchaseItem, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PurchaseItemType::class, $purchaseItem);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_admin_purchase_item_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/purchase_item/edit.html.twig', [
            'purchase_item' => $purchaseItem,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_admin_purchase_item_delete', methods: ['POST'])]
    public function delete(Request $request, PurchaseItem $purchaseItem, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$purchaseItem->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($purchaseItem);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_admin_purchase_item_index', [], Response::HTTP_SEE_OTHER);
    }
}
