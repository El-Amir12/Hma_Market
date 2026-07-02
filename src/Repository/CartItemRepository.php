<?php
// src/Repository/CartItemRepository.php

namespace App\Repository;

use App\Entity\Cart;
use App\Entity\CartItem;
use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CartItem>
 */
class CartItemRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CartItem::class);
    }

    /**
     * Trouve un item dans le panier par produit
     */
    public function findItemByProduct(Cart $cart, Product $product): ?CartItem
    {
        return $this->createQueryBuilder('i')
            ->where('i.cart = :cart')
            ->andWhere('i.product = :product')
            ->setParameter('cart', $cart)
            ->setParameter('product', $product)
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * Récupère tous les items d'un panier avec leurs produits
     */
    public function findItemsWithProducts(Cart $cart): array
    {
        return $this->createQueryBuilder('i')
            ->leftJoin('i.product', 'p')
            ->leftJoin('p.category', 'cat')
            ->leftJoin('p.promotionProducts', 'pp')
            ->leftJoin('pp.promotion', 'promo')
            ->addSelect('p')
            ->addSelect('cat')
            ->addSelect('pp')
            ->addSelect('promo')
            ->where('i.cart = :cart')
            ->setParameter('cart', $cart)
            ->orderBy('i.created_at', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Supprime les items d'un panier
     */
    public function removeItemsByCart(Cart $cart): void
    {
        $this->createQueryBuilder('i')
            ->delete()
            ->where('i.cart = :cart')
            ->setParameter('cart', $cart)
            ->getQuery()
            ->execute();
    }

    /**
     * Met à jour les prix des items d'un panier
     */
    public function updatePrices(Cart $cart): void
    {
        $items = $this->findBy(['cart' => $cart]);
        
        foreach ($items as $item) {
            $product = $item->getProduct();
            if ($product) {
                $item->setUnitPrice($product->getSalePrice());
                $item->setTotalPrice(
                    (float) $item->getUnitPrice() * $item->getQuantity()
                );
            }
        }
        
        $this->getEntityManager()->flush();
    }
}