<?php
// src/Controller/Marketplace/CartController.php

namespace App\Controller\Marketplace;

use App\Entity\Customer;
use App\Entity\Cart;
use App\Entity\CartItem;
use App\Repository\CartRepository;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/marketplace/cart')]
class CartController extends AbstractController
{
    public function __construct(
        private CartRepository $cartRepository,
        private ProductRepository $productRepository,
        private EntityManagerInterface $entityManager
    ) {}

    #[Route('/', name: 'marketplace_cart')]
    public function index(): Response
    {
        /** @var Customer|null $customer */
        $customer = $this->getUser();
        
        if (!$customer) {
            return $this->redirectToRoute('marketplace_login');
        }

        // Récupérer ou créer le panier
        $cart = $this->cartRepository->findOneBy(['customer' => $customer]);
        if (!$cart) {
            $cart = new Cart();
            $cart->setCustomer($customer);
            $this->entityManager->persist($cart);
            $this->entityManager->flush();
        }

        return $this->render('marketplace/cart/index.html.twig', [
            'cart' => $cart,
            'items' => $cart->getItems(),
            'total' => $cart->getTotal(),
            'itemsCount' => $cart->getItemsCount(),
        ]);
    }

    #[Route('/add', name: 'marketplace_cart_add', methods: ['POST'])]
    public function add(Request $request): JsonResponse
    {
        /** @var Customer|null $customer */
        $customer = $this->getUser();
        
        if (!$customer) {
            return $this->json(['success' => false, 'error' => 'Non authentifié'], 401);
        }

        $data = json_decode($request->getContent(), true);
        $productId = $data['productId'] ?? null;
        $quantity = $data['quantity'] ?? 1;

        if (!$productId) {
            return $this->json(['success' => false, 'error' => 'Produit non spécifié']);
        }

        $product = $this->productRepository->find($productId);
        if (!$product) {
            return $this->json(['success' => false, 'error' => 'Produit non trouvé']);
        }

        // Récupérer ou créer le panier
        $cart = $this->cartRepository->findOneBy(['customer' => $customer]);
        if (!$cart) {
            $cart = new Cart();
            $cart->setCustomer($customer);
            $this->entityManager->persist($cart);
        }

        // Vérifier si le produit est déjà dans le panier
        $existingItem = null;
        foreach ($cart->getItems() as $item) {
            if ($item->getProduct()->getId() === $product->getId()) {
                $existingItem = $item;
                break;
            }
        }

        if ($existingItem) {
            $newQuantity = $existingItem->getQuantity() + $quantity;
            $existingItem->setQuantity($newQuantity);
        } else {
            $cartItem = new CartItem();
            $cartItem->setCart($cart);
            $cartItem->setProduct($product);
            $cartItem->setQuantity($quantity);
            $this->entityManager->persist($cartItem);
        }

        $cart->setUpdatedAt(new \DateTimeImmutable());
        $this->entityManager->flush();

        return $this->json([
            'success' => true,
            'cartCount' => $cart->getItemsCount(),
            'message' => 'Produit ajouté au panier'
        ]);
    }

    #[Route('/update/{id}', name: 'marketplace_cart_update', methods: ['POST'])]
    public function update(int $id, Request $request): JsonResponse
    {
        /** @var Customer|null $customer */
        $customer = $this->getUser();
        
        if (!$customer) {
            return $this->json(['success' => false, 'error' => 'Non authentifié'], 401);
        }

        $data = json_decode($request->getContent(), true);
        $quantity = $data['quantity'] ?? 1;

        $cartItem = $this->entityManager->getRepository(CartItem::class)->find($id);
        if (!$cartItem || $cartItem->getCart()->getCustomer()->getId() !== $customer->getId()) {
            return $this->json(['success' => false, 'error' => 'Article non trouvé']);
        }

        if ($quantity <= 0) {
            $this->entityManager->remove($cartItem);
        } else {
            $cartItem->setQuantity($quantity);
        }

        $cartItem->getCart()->setUpdatedAt(new \DateTimeImmutable());
        $this->entityManager->flush();

        return $this->json([
            'success' => true,
            'cartCount' => $cartItem->getCart()->getItemsCount(),
            'message' => 'Panier mis à jour'
        ]);
    }

    #[Route('/remove/{id}', name: 'marketplace_cart_remove', methods: ['POST'])]
    public function remove(int $id): JsonResponse
    {
        /** @var Customer|null $customer */
        $customer = $this->getUser();
        
        if (!$customer) {
            return $this->json(['success' => false, 'error' => 'Non authentifié'], 401);
        }

        $cartItem = $this->entityManager->getRepository(CartItem::class)->find($id);
        if (!$cartItem || $cartItem->getCart()->getCustomer()->getId() !== $customer->getId()) {
            return $this->json(['success' => false, 'error' => 'Article non trouvé']);
        }

        $this->entityManager->remove($cartItem);
        $cartItem->getCart()->setUpdatedAt(new \DateTimeImmutable());
        $this->entityManager->flush();

        return $this->json([
            'success' => true,
            'cartCount' => $cartItem->getCart()->getItemsCount(),
            'message' => 'Article supprimé du panier'
        ]);
    }

    #[Route('/clear', name: 'marketplace_cart_clear', methods: ['POST'])]
    public function clear(): JsonResponse
    {
        /** @var Customer|null $customer */
        $customer = $this->getUser();
        
        if (!$customer) {
            return $this->json(['success' => false, 'error' => 'Non authentifié'], 401);
        }

        $cart = $this->cartRepository->findOneBy(['customer' => $customer]);
        if ($cart) {
            foreach ($cart->getItems() as $item) {
                $this->entityManager->remove($item);
            }
            $cart->setUpdatedAt(new \DateTimeImmutable());
            $this->entityManager->flush();
        }

        return $this->json([
            'success' => true,
            'message' => 'Panier vidé'
        ]);
    }
}