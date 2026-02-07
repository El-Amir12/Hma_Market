<?php

namespace App\Controller\Admin;

use App\Entity\StockBatch;
use App\Form\StockBatchType;
use App\Repository\StockBatchRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin/stock/batch')]
final class StockBatchController extends AbstractController
{
    #[Route(name: 'app_admin_stock_batch_index', methods: ['GET'])]
    public function index(StockBatchRepository $stockBatchRepository): Response
    {
        return $this->render('admin/stock_batch/index.html.twig', [
            'stock_batches' => $stockBatchRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_admin_stock_batch_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $stockBatch = new StockBatch();
        $form = $this->createForm(StockBatchType::class, $stockBatch);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($stockBatch);
            $entityManager->flush();

            return $this->redirectToRoute('app_admin_stock_batch_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/stock_batch/new.html.twig', [
            'stock_batch' => $stockBatch,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_admin_stock_batch_show', methods: ['GET'])]
    public function show(StockBatch $stockBatch): Response
    {
        return $this->render('admin/stock_batch/show.html.twig', [
            'stock_batch' => $stockBatch,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_admin_stock_batch_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, StockBatch $stockBatch, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(StockBatchType::class, $stockBatch);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_admin_stock_batch_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/stock_batch/edit.html.twig', [
            'stock_batch' => $stockBatch,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_admin_stock_batch_delete', methods: ['POST'])]
    public function delete(Request $request, StockBatch $stockBatch, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$stockBatch->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($stockBatch);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_admin_stock_batch_index', [], Response::HTTP_SEE_OTHER);
    }
}
