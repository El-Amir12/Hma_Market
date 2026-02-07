<?php

namespace App\Controller\Admin;

use App\Entity\Purchase;
use App\Entity\Product;
use App\Service\PurchaseCartService;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/admin/purchase')]
#[IsGranted('ROLE_ADMIN')]
class CartController extends AbstractController
{
    #[Route('/cart/receive/{id}', name: 'admin_purchase_cart_receive', methods: ['GET'])]
    public function receiveCart(
        Purchase $purchase,
        PurchaseCartService $cartService,
        EntityManagerInterface $entityManager
    ): Response {
        if ($purchase->getStatus() !== Purchase::STATUS_CONFIRMED) {
            $this->addFlash('error', 'Cette commande ne peut plus être réceptionnée.');
            return $this->redirectToRoute('admin_purchase_show', ['id' => $purchase->getId()]);
        }

        $cartService->clear();
        
        if ($purchase->getSupplier()) {
            $cartService->setSupplier($purchase->getSupplier());
        }
        
        foreach ($purchase->getPurchaseItems() as $item) {
            $product = $entityManager->getRepository(Product::class)->find($item->getProduct()->getId());
            if ($product) {
                $cartService->addItem(
                    $product,
                    $item->getQuantity(),
                    $item->getBatchNumber(),
                    $item->getManufacturingDate(),
                    $item->getExpiryDate()
                );
            }
        }

        return $this->redirectToRoute('admin_purchase_cart', ['receive' => $purchase->getId()]);
    }
}