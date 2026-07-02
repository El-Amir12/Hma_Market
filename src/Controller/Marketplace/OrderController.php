<?php
// src/Controller/Marketplace/OrderController.php

namespace App\Controller\Marketplace;

use App\Entity\Customer;
use App\Repository\OrderRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/customer/orders')]
class OrderController extends AbstractController
{
    public function __construct(
        private OrderRepository $orderRepository,
        private EntityManagerInterface $entityManager
    ) {}

    #[Route('/', name: 'customer_orders')]
    public function index(): Response
    {
        /** @var Customer|null $customer */
        $customer = $this->getUser();
        
        if (!$customer) {
            return $this->redirectToRoute('customer_login');
        }

        // Récupérer les commandes du client
        $orders = $this->orderRepository->findBy(
            ['customer' => $customer],
            ['created_at' => 'DESC']
        );

        return $this->render('customer/orders/index.html.twig', [
            'orders' => $orders,
        ]);
    }

    #[Route('/{id}', name: 'customer_order_show')]
    public function show(int $id): Response
    {
        /** @var Customer|null $customer */
        $customer = $this->getUser();
        
        if (!$customer) {
            return $this->redirectToRoute('customer_login');
        }

        $order = $this->orderRepository->findOneBy([
            'id' => $id,
            'customer' => $customer
        ]);

        if (!$order) {
            throw $this->createNotFoundException('Commande non trouvée');
        }

        return $this->render('customer/orders/show.html.twig', [
            'order' => $order,
        ]);
    }
}