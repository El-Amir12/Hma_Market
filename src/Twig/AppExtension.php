<?php
// src/Twig/AppExtension.php

namespace App\Twig;

use App\Entity\Customer;
use App\Entity\HmaService;
use App\Entity\Product;
use App\Repository\FavoriteRepository;
use App\Repository\CartRepository;
use App\Repository\OrderItemRepository;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;
use Psr\Log\LoggerInterface;

class AppExtension extends AbstractExtension
{
    private const CURRENCY_MAP = [
        'CM' => 'XAF',
        'CI' => 'XOF',
        'SN' => 'XOF',
        'FR' => 'EUR',
        'US' => 'USD',
        'BJ' => 'FCFA',
    ];

    public function __construct(
        private Security $security,
        private TokenStorageInterface $tokenStorage,
        private FavoriteRepository $favoriteRepository,
        private CartRepository $cartRepository,
        private LoggerInterface $logger,
        private ?OrderItemRepository $orderItemRepository = null
    ) {}

    public function getFilters(): array
    {
        return [
            new TwigFilter('price_with_currency', [$this, 'formatPriceWithCurrency']),
            new TwigFilter('sum', [$this, 'calculateSum']),
            new TwigFilter('repeat', [$this, 'repeatString']),
            new TwigFilter('class', [$this, 'getClass']),
        ];
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('build_category_tree', [$this, 'buildCategoryTree']),
            new TwigFunction('is_customer', [$this, 'isCustomer']),
            new TwigFunction('get_favorites_count', [$this, 'getFavoritesCount']),
            new TwigFunction('get_cart_items_count', [$this, 'getCartItemsCount']),
            new TwigFunction('has_purchased', [$this, 'hasPurchased']),
        ];
    }

    // ==================== FILTRES ====================

    public function formatPriceWithCurrency($price, ?HmaService $hmaService = null): string
    {
        if ($price === null) {
            return '';
        }

        $currency = 'XAF';

        if ($hmaService && $hmaService->getCountry()) {
            $currency = self::CURRENCY_MAP[$hmaService->getCountry()] ?? 'XAF';
        }

        $formatted = number_format((float) $price, 0, ',', ' ');
        return $formatted . ' ' . $currency;
    }

    public function calculateSum(array $array, string $property): float
    {
        $sum = 0;
        
        foreach ($array as $item) {
            $getter = 'get' . ucfirst($property);
            
            if (method_exists($item, $getter)) {
                $sum += (float) $item->$getter();
            } elseif (property_exists($item, $property)) {
                $sum += (float) $item->$property;
            } elseif (is_array($item) && isset($item[$property])) {
                $sum += (float) $item[$property];
            }
        }
        
        return $sum;
    }

    public function repeatString(string $string, int $count): string
    {
        return str_repeat($string, max(0, $count));
    }

    public function getClass($object): string
    {
        return $object ? get_class($object) : 'null';
    }

    // ==================== FONCTIONS TWIG ====================

    public function buildCategoryTree($categories, $parentId = 0, $level = 0): string
    {
        $html = '';
        foreach ($categories as $category) {
            $parent = $category->getParent();
            $parentMatch = ($parent && $parent->getId() == $parentId) || ($parentId == 0 && !$parent);
            
            if ($parentMatch) {
                $indent = str_repeat('&nbsp;&nbsp;&nbsp;', $level);
                $indentDash = str_repeat('— ', $level);
                $displayIndent = $level > 0 ? $indent . $indentDash : '';
                
                $html .= sprintf(
                    '<option value="%d">%s%s</option>',
                    $category->getId(),
                    $displayIndent,
                    htmlspecialchars($category->getName())
                );
                $html .= $this->buildCategoryTree($categories, $category->getId(), $level + 1);
            }
        }
        return $html;
    }

    public function isCustomer($user): bool
    {
        return $user instanceof Customer;
    }

    /**
     * Récupère le nombre de favoris d'un customer
     * Utilise TokenStorage en priorité pour plus de fiabilité
     */
    public function getFavoritesCount($user = null): int
    {
        $customer = $this->getCustomerFromUser($user);
        
        if (!$customer) {
            return 0;
        }

        try {
            return $this->favoriteRepository->countByCustomer($customer);
        } catch (\Exception $e) {
            $this->logger->error('Erreur lors du comptage des favoris', [
                'error' => $e->getMessage(),
                'customer_id' => $customer->getId()
            ]);
            return 0;
        }
    }

    /**
     * Récupère le nombre d'articles dans le panier d'un customer
     * Utilise TokenStorage en priorité pour plus de fiabilité
     */
    public function getCartItemsCount($user = null): int
    {
        $customer = $this->getCustomerFromUser($user);
        
        if (!$customer) {
            return 0;
        }

        try {
            return $this->cartRepository->getCartItemsCount($customer);
        } catch (\Exception $e) {
            $this->logger->error('Erreur lors du comptage du panier', [
                'error' => $e->getMessage(),
                'customer_id' => $customer->getId()
            ]);
            return 0;
        }
    }

    public function hasPurchased(Product $product, Customer $customer): bool
    {
        if (!$this->orderItemRepository) {
            return false;
        }

        $phone = $customer->getPhone();
        if (!$phone) {
            return false;
        }

        try {
            $orderItems = $this->orderItemRepository->createQueryBuilder('oi')
                ->join('oi.vente', 'o')
                ->where('o.customer_phone = :phone')
                ->andWhere('oi.product_id = :productId')
                ->andWhere('o.status IN (:statuses)')
                ->setParameter('phone', $phone)
                ->setParameter('productId', $product->getId())
                ->setParameter('statuses', ['completed', 'delivered', 'paid'])
                ->getQuery()
                ->getResult();

            return count($orderItems) > 0;
        } catch (\Exception $e) {
            $this->logger->error('Erreur lors de la vérification d\'achat', [
                'error' => $e->getMessage(),
                'product_id' => $product->getId(),
                'customer_id' => $customer->getId()
            ]);
            return false;
        }
    }

    // ==================== MÉTHODES PRIVÉES ====================

    /**
     * Récupère l'utilisateur Customer depuis différents sources
     */
    private function getCustomerFromUser($user = null): ?Customer
    {
        // 1. Si un utilisateur est passé en paramètre
        if ($user instanceof Customer) {
            return $user;
        }

        // 2. Récupérer depuis Security
        $currentUser = $this->security->getUser();
        if ($currentUser instanceof Customer) {
            return $currentUser;
        }

        // 3. Récupérer depuis TokenStorage (plus fiable)
        $token = $this->tokenStorage->getToken();
        if ($token) {
            $tokenUser = $token->getUser();
            if ($tokenUser instanceof Customer) {
                return $tokenUser;
            }
        }

        // 4. Log pour debug si un utilisateur existe mais n'est pas Customer
        if ($currentUser) {
            $this->logger->debug('Utilisateur trouvé mais pas Customer', [
                'class' => get_class($currentUser),
                'email' => method_exists($currentUser, 'getEmail') ? $currentUser->getEmail() : 'N/A'
            ]);
        }

        return null;
    }
}