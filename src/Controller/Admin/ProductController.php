<?php

namespace App\Controller\Admin;

use App\Entity\HmaService;
use App\Entity\Product;
use App\Entity\Promotion;
use App\Form\ProductType;
use App\Service\UniqueNameValidator;
use App\Repository\CategoryRepository;
use App\Repository\ProductRepository;
use App\Service\UnitConverter; // Ajout de l'import
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\String\Slugger\SluggerInterface;

#[Route('/admin/product')]
final class ProductController extends AbstractController
{
    private const DEFAULT_PRODUCT_IMAGE = 'default-product.png';

    public function __construct(
        private readonly SluggerInterface $slugger,
        private readonly UnitConverter $unitConverter,
        private readonly UniqueNameValidator $uniqueNameValidator
    ) {}

    private function getCurrentHmaService(): ?HmaService
    {
        $user = $this->getUser();
        if (!$user) return null;
        if ($user instanceof HmaService) return $user;
        if ($user instanceof \App\Entity\User) return $user->getHmaService();
        return null;
    }

    private function checkAccess(): void
    {
        if (!$this->isGranted('ROLE_ADMIN') && !$this->isGranted('ROLE_MANAGER') && !$this->isGranted('ROLE_STOCK_MANAGER')) {
            throw new AccessDeniedException('Accès refusé. Vous devez être administrateur, manager ou responsable stock.');
        }
    }

    private function checkOwnership(Product $product, HmaService $hmaService): void
    {
        $productService = $product->getHmaService();
        if (!$productService) {
            throw new AccessDeniedException('Ce produit n\'a pas de service associé.');
        }
        if ($productService->getId() !== $hmaService->getId()) {
            throw new AccessDeniedException('Ce produit ne vous appartient pas.');
        }
    }

    #[Route(name: 'app_admin_product_index', methods: ['GET'])]
    public function index(Request $request, ProductRepository $productRepository, CategoryRepository $categoryRepository, EntityManagerInterface $entityManager): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) {
            throw new AccessDeniedException('Aucun service associé à votre compte.');
        }

        $page = $request->query->getInt('page', 1);
        $limit = 12;
        $search = $request->query->get('search', '');
        $status = $request->query->get('status', '');
        $categoryId = $request->query->getInt('category', 0);
        $expiryType = $request->query->get('expiry_type', '');
        $subscriptionStatus = $request->query->get('subscription_status', '');
        $dosage = $request->query->get('dosage', '');
        $form = $request->query->get('form', '');
        $prescriptionRequired = $request->query->get('prescription_required', '');
        $promotionId = $request->query->getInt('promotion', 0);
        $unit = $request->query->get('unit', ''); // Nouveau paramètre

        // Récupérer les promotions de l'entreprise pour le select
        $promotions = $entityManager->getRepository(Promotion::class)->findBy(
            ['hma_service' => $hmaService, 'is_active' => true],
            ['name' => 'ASC']
        );

        $categories = $categoryRepository->findHierarchicalCategoriesWithCount();

        // Récupérer les unités supportées
        $units = $productRepository->findDistinctUnits($hmaService);

        $paginator = $productRepository->findFilteredPaginated(
            $hmaService,
            $categoryId,
            $status,
            $expiryType,
            $subscriptionStatus,
            $dosage,
            $form,
            $prescriptionRequired,
            $search,
            $page,
            $limit,
            $promotionId > 0 ? $promotionId : null,
            $unit // Ajout du paramètre unité
        );

        $totalFiltered = $productRepository->countFiltered(
            $hmaService,
            $categoryId,
            $status,
            $expiryType,
            $subscriptionStatus,
            $dosage,
            $form,
            $prescriptionRequired,
            $search,
            $promotionId > 0 ? $promotionId : null,
            $unit
        );
        $activeFiltered = $productRepository->countFiltered(
            $hmaService,
            $categoryId,
            'active',
            $expiryType,
            $subscriptionStatus,
            $dosage,
            $form,
            $prescriptionRequired,
            $search,
            $promotionId > 0 ? $promotionId : null,
            $unit
        );
        $inactiveFiltered = $productRepository->countFiltered(
            $hmaService,
            $categoryId,
            'inactive',
            $expiryType,
            $subscriptionStatus,
            $dosage,
            $form,
            $prescriptionRequired,
            $search,
            $promotionId > 0 ? $promotionId : null,
            $unit
        );
        $lowStockFiltered = $productRepository->countFiltered(
            $hmaService,
            $categoryId,
            'low-stock',
            $expiryType,
            $subscriptionStatus,
            $dosage,
            $form,
            $prescriptionRequired,
            $search,
            $promotionId > 0 ? $promotionId : null,
            $unit
        );
        $perishableFiltered = $productRepository->countFiltered(
            $hmaService,
            $categoryId,
            '',
            'perishable',
            $subscriptionStatus,
            $dosage,
            $form,
            $prescriptionRequired,
            $search,
            $promotionId > 0 ? $promotionId : null,
            $unit
        );
        $nonPerishableFiltered = $productRepository->countFiltered(
            $hmaService,
            $categoryId,
            '',
            'non-perishable',
            $subscriptionStatus,
            $dosage,
            $form,
            $prescriptionRequired,
            $search,
            $promotionId > 0 ? $promotionId : null,
            $unit
        );

        $subscriptionActiveFiltered = $productRepository->countFiltered(
            $hmaService,
            $categoryId,
            $status,
            $expiryType,
            'active',
            $dosage,
            $form,
            $prescriptionRequired,
            $search,
            $promotionId > 0 ? $promotionId : null,
            $unit
        );
        $subscriptionInactiveFiltered = $productRepository->countFiltered(
            $hmaService,
            $categoryId,
            $status,
            $expiryType,
            'inactive',
            $dosage,
            $form,
            $prescriptionRequired,
            $search,
            $promotionId > 0 ? $promotionId : null,
            $unit
        );

        $activeCount = $productRepository->countSubscriptionActive($hmaService);
        $limits = $hmaService->getCurrentLimits();
        $quota = $limits['max_products'] ?? PHP_INT_MAX;
        $quotaReached = $quota !== PHP_INT_MAX && $activeCount >= $quota;
        $type_promotion = $promotionId > 0 ? $entityManager->getRepository(Promotion::class)->find($promotionId)?->getTypePromotion() : null;

         // Si une promotion est sélectionnée, filtrer les produits pour n'afficher que ceux qui correspondent au type de promotion

        $totalItems = $paginator->count();
        $totalPages = ceil($totalItems / $limit);

        return $this->render('admin/product/index.html.twig', [
            'products' => $paginator,
            'currentPage' => $page,
            'totalPages' => $totalPages,
            'search' => $search,
            'categories' => $categories,
            'selectedCategory' => $categoryId,
            'selectedStatus' => $status,
            'selectedExpiryType' => $expiryType,
            'selectedSubscriptionStatus' => $subscriptionStatus,
            'dosage' => $dosage,
            'form' => $form,
            'prescriptionRequired' => $prescriptionRequired,
            'totalItems' => $totalItems,
            'totalFiltered' => $totalFiltered,
            'activeFiltered' => $activeFiltered,
            'inactiveFiltered' => $inactiveFiltered,
            'lowStockFiltered' => $lowStockFiltered,
            'perishableFiltered' => $perishableFiltered,
            'nonPerishableFiltered' => $nonPerishableFiltered,
            'subscriptionActiveFiltered' => $subscriptionActiveFiltered,
            'subscriptionInactiveFiltered' => $subscriptionInactiveFiltered,
            'activeCount' => $activeCount,
            'quota' => $quota === PHP_INT_MAX ? 'Illimité' : $quota,
            'quotaReached' => $quotaReached,
            'companyType' => $hmaService->getType(),
            'promotions' => $promotions,
            'typePromotion' => $type_promotion,
            'selectedPromotion' => $promotionId,
            'units' => $units,          // Ajout
            'selectedUnit' => $unit,    // Ajout
        ]);
    }

    #[Route('/new', name: 'app_admin_product_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $this->checkAccess();

        /** @var \App\Entity\User $user */
        $user = $this->getUser();
        if (!$user) {
            throw new AccessDeniedException('Utilisateur non connecté.');
        }

        // Recharger l'utilisateur depuis l'entity manager pour garantir qu'il est géré
        $user = $entityManager->getRepository(\App\Entity\User::class)->find($user->getId());
        if (!$user) {
            throw new AccessDeniedException('Utilisateur introuvable.');
        }

        $hmaService = $user->getHmaService();
        if (!$hmaService) {
            throw new AccessDeniedException('Aucun service associé à votre compte.');
        }

        // Recharger le service (optionnel, mais sécurise)
        $hmaService = $entityManager->getRepository(HmaService::class)->find($hmaService->getId());
        if (!$hmaService) {
            throw new AccessDeniedException('Service introuvable.');
        }

        // Vérification du quota
        $activeCount = $entityManager->getRepository(Product::class)->countActive($hmaService);
        $limits = $hmaService->getCurrentLimits();
        $quota = $limits['max_products'] ?? PHP_INT_MAX;
        if ($quota !== PHP_INT_MAX && $activeCount >= $quota) {
            $this->addFlash('error', "Vous avez atteint votre limite de {$quota} produits actifs.");
            return $this->redirectToRoute('app_admin_product_index');
        }

        $product = new Product();
        $product->setUser($user)
                ->setHmaService($hmaService)
                ->setCreatedAt(new \DateTime())
                ->setImage(self::DEFAULT_PRODUCT_IMAGE)
                ->setBarcode($this->generateBarcode());

        $form = $this->createForm(ProductType::class, $product, [
            'hma_service' => $hmaService,
        ]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // ✅ Vérification de l'unicité du nom
            $validation = $this->uniqueNameValidator->validate($product, Product::class, 'produit', $hmaService->getId());

            if (!$validation['valid']) {
                $this->addFlash('error', $validation['message']);
                return $this->render('admin/product/new.html.twig', [
                    'form' => $form->createView(),
                    'product' => $product
                ]);
            }
            // Slug
            $slug = $this->slugger->slug($product->getName())->lower();
            $product->setSlug($slug);

            // Gestion de l'image
            $imageFile = $form->get('image')->getData();
            if ($imageFile) {
                $newFilename = uniqid().'.'.$imageFile->guessExtension();
                $imageFile->move($this->getParameter('products_directory'), $newFilename);
                $product->setImage($newFilename);
            }

            $entityManager->persist($product);
            $entityManager->flush();

            $this->addFlash('success', 'Produit créé avec succès.');
            return $this->redirectToRoute('app_admin_product_index');
        }

        return $this->render('admin/product/new.html.twig', [
            'product' => $product,
            'form' => $form,
            'companyType' => $hmaService->getType(),
        ]);
    }

    #[Route('/{id}', name: 'app_admin_product_show', methods: ['GET'])]
    public function show(Product $product): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) {
            throw new AccessDeniedException('Aucun service associé.');
        }
        $this->checkOwnership($product, $hmaService);
        return $this->render('admin/product/show.html.twig', [
            'product' => $product,
            'companyType' => $hmaService->getType(),
        ]);
    }

    #[Route('/{id}/edit', name: 'app_admin_product_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Product $product, EntityManagerInterface $entityManager): Response
    {
        $this->checkAccess();

        /** @var \App\Entity\User $user */
        $user = $this->getUser();
        if (!$user) {
            throw new AccessDeniedException('Utilisateur non connecté.');
        }

        $hmaService = $user->getHmaService();
        if (!$hmaService) {
            throw new AccessDeniedException('Aucun service associé.');
        }

        $this->checkOwnership($product, $hmaService);

        $oldImage = $product->getImage();
        $form = $this->createForm(ProductType::class, $product, [
            'hma_service' => $hmaService,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // ✅ Vérification de l'unicité du nom
            $validation = $this->uniqueNameValidator->validate($product, Product::class, 'produit', $hmaService->getId());

            if (!$validation['valid']) {
                $this->addFlash('error', $validation['message']);
                return $this->render('admin/product/new.html.twig', [
                    'form' => $form->createView(),
                    'product' => $product
                ]);
            }
            // Mettre à jour le slug si le nom a changé
            $newSlug = $this->slugger->slug($product->getName())->lower();
            $product->setSlug($newSlug);

            // Gestion de l'image
            $imageFile = $form->get('image')->getData();
            if ($imageFile) {
                if ($oldImage && $oldImage !== self::DEFAULT_PRODUCT_IMAGE) {
                    $oldPath = $this->getParameter('products_directory').'/'.$oldImage;
                    if (file_exists($oldPath)) {
                        unlink($oldPath);
                    }
                }
                $newFilename = uniqid().'.'.$imageFile->guessExtension();
                $imageFile->move($this->getParameter('products_directory'), $newFilename);
                $product->setImage($newFilename);
            }

            $product->setUpdatedAt(new \DateTime());
            $entityManager->flush();

            $this->addFlash('success', 'Produit modifié avec succès.');
            return $this->redirectToRoute('app_admin_product_show', ['id' => $product->getId()]);
        }

        return $this->render('admin/product/edit.html.twig', [
            'product' => $product,
            'form' => $form,
            'companyType' => $hmaService->getType(),
        ]);
    }

    #[Route('/{id}/toggle-status', name: 'app_admin_product_toggle_status', methods: ['POST'])]
    public function toggleStatus(Request $request, Product $product, EntityManagerInterface $entityManager): Response
    {
        $this->checkAccess();
        /** @var \App\Entity\User $user */
        $user = $this->getUser();
        if (!$user) {
            throw new AccessDeniedException('Utilisateur non connecté.');
        }
        $hmaService = $user->getHmaService();
        if (!$hmaService) {
            throw new AccessDeniedException('Aucun service associé.');
        }
        $this->checkOwnership($product, $hmaService);

        // Vérification du token CSRF (avec l'ID du produit)
        if (!$this->isCsrfTokenValid('toggle-status' . $product->getId(), $request->request->get('_token'))) {
            throw $this->createAccessDeniedException('Token CSRF invalide');
        }

        // Inverser le statut
        $product->setIsActive(!$product->isActive());
        $product->setUpdatedAt(new \DateTime());
        $entityManager->flush();

        $status = $product->isActive() ? 'activé' : 'désactivé';
        $this->addFlash('success', "Produit {$status} avec succès.");

        // Redirection vers la page de détail du produit
        return $this->redirectToRoute('app_admin_product_show', ['id' => $product->getId()]);
    }

    #[Route('/{id}/delete-image', name: 'app_admin_product_delete_image', methods: ['POST'])]
    public function deleteImage(Request $request, Product $product, EntityManagerInterface $entityManager): Response
    {
        $this->checkAccess();

        /** @var \App\Entity\User $user */
        $user = $this->getUser();
        if (!$user) {
            throw new AccessDeniedException('Utilisateur non connecté.');
        }

        $hmaService = $user->getHmaService();
        if (!$hmaService) {
            throw new AccessDeniedException('Aucun service associé.');
        }

        $this->checkOwnership($product, $hmaService);

        if ($this->isCsrfTokenValid('delete-image'.$product->getId(), $request->request->get('_token'))) {
            $image = $product->getImage();
            if ($image && $image !== self::DEFAULT_PRODUCT_IMAGE) {
                $path = $this->getParameter('products_directory').'/'.$image;
                if (file_exists($path)) {
                    unlink($path);
                }
                $product->setImage(self::DEFAULT_PRODUCT_IMAGE);
                $product->setUpdatedAt(new \DateTime());
                $entityManager->flush();
                $this->addFlash('success', 'Image supprimée.');
            } else {
                $this->addFlash('warning', 'Aucune image personnalisée à supprimer.');
            }
        } else {
            $this->addFlash('error', 'Token CSRF invalide.');
        }
        return $this->redirectToRoute('app_admin_product_edit', ['id' => $product->getId()]);
    }

    #[Route('/{id}', name: 'app_admin_product_delete', methods: ['POST'])]
    public function delete(Request $request, Product $product, EntityManagerInterface $entityManager): Response
    {
        if (!$this->isGranted('ROLE_ADMIN')) {
            throw new AccessDeniedException('Seul l\'admin peut supprimer.');
        }

        /** @var \App\Entity\User $user */
        $user = $this->getUser();
        if (!$user) {
            throw new AccessDeniedException('Utilisateur non connecté.');
        }

        $hmaService = $user->getHmaService();
        if (!$hmaService) {
            throw new AccessDeniedException('Aucun service associé.');
        }

        $this->checkOwnership($product, $hmaService);

        if ($this->isCsrfTokenValid('delete'.$product->getId(), $request->request->get('_token'))) {
            if ($product->getPurchaseItems()->count() > 0 || $product->getStockBatches()->count() > 0) {
                $this->addFlash('error', 'Impossible de supprimer ce produit (liens vers achats ou lots).');
                return $this->redirectToRoute('app_admin_product_index');
            }
            $image = $product->getImage();
            if ($image && $image !== self::DEFAULT_PRODUCT_IMAGE) {
                $path = $this->getParameter('products_directory').'/'.$image;
                if (file_exists($path)) {
                    unlink($path);
                }
            }
            $entityManager->remove($product);
            $entityManager->flush();
            $this->addFlash('success', 'Produit supprimé.');
        }
        return $this->redirectToRoute('app_admin_product_index');
    }

    #[Route('/api/{id}/details', name: 'app_admin_product_api_details', methods: ['GET'])]
    public function apiDetails(Product $product): JsonResponse
    {
        $this->checkAccess();

        /** @var \App\Entity\User $user */
        $user = $this->getUser();
        if (!$user) {
            throw new AccessDeniedException('Utilisateur non connecté.');
        }

        $hmaService = $user->getHmaService();
        if (!$hmaService) {
            throw new AccessDeniedException('Aucun service associé.');
        }

        $this->checkOwnership($product, $hmaService);

        return $this->json([
            'id' => $product->getId(),
            'name' => $product->getName(),
            'barcode' => $product->getBarcode(),
            'purchase_price' => $product->getPurchasePrice(),
            'sale_price' => $product->getSalePrice(),
            'stock_quantity' => $product->getStockQuantity(),
            'has_expiry_date' => $product->hasExpiryDate(),
            'category' => $product->getCategory()?->getName(),
        ]);
    }

    #[Route('/scan/barcode', name: 'app_admin_product_scan_barcode', methods: ['POST'])]
    public function scanBarcode(Request $request): JsonResponse
    {
        $this->checkAccess();
        $data = json_decode($request->getContent(), true);
        $barcode = $data['barcode'] ?? '';
        if (empty($barcode)) {
            return $this->json(['error' => 'Code-barres vide'], 400);
        }
        return $this->json(['barcode' => $barcode]);
    }

    #[Route('/generate/barcode', name: 'app_admin_product_generate_barcode', methods: ['GET'])]
    public function generateBarcodeAction(): JsonResponse
    {
        $this->checkAccess();
        return $this->json(['barcode' => $this->generateBarcode()]);
    }

    #[Route('/check/barcode/{barcode}', name: 'app_admin_product_check_barcode', methods: ['GET'])]
    public function checkBarcode(string $barcode, ProductRepository $productRepository): JsonResponse
    {
        $this->checkAccess();
        $existingProduct = $productRepository->findOneBy(['barcode' => $barcode]);
        return $this->json([
            'exists' => $existingProduct !== null,
            'product' => $existingProduct ? [
                'id' => $existingProduct->getId(),
                'name' => $existingProduct->getName(),
                'barcode' => $existingProduct->getBarcode(),
                'salePrice' => $existingProduct->getSalePrice(),
                'stockQuantity' => $existingProduct->getStockQuantity(),
                'hasExpiryDate' => $existingProduct->hasExpiryDate()
            ] : null
        ]);
    }

    private function generateBarcode(): string
    {
        $date = date('Ymd');
        $random = str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT);
        return 'PROD-' . $date . '-' . $random;
    }

    #[Route('/{id}/stock-batches', name: 'app_admin_product_stock_batches', methods: ['GET'])]
    public function stockBatches(Product $product): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) {
            throw new AccessDeniedException('Aucun service associé.');
        }
        $this->checkOwnership($product, $hmaService);
        
        return $this->redirectToRoute('app_admin_stock_batch_index', ['productId' => $product->getId()]);
    }

    #[Route('/{id}/print-barcode', name: 'app_admin_product_print_barcode', methods: ['GET'])]
    public function printBarcode(Product $product): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) {
            throw new AccessDeniedException('Aucun service associé.');
        }
        $this->checkOwnership($product, $hmaService);

        return $this->render('admin/product/print_barcode.html.twig', [
            'product' => $product,
            'companyType' => $hmaService->getType(),
        ]);
    }

    #[Route('/{id}/print-sheet', name: 'app_admin_product_print_sheet', methods: ['GET'])]
    public function printSheet(Product $product): Response
    {
        $this->checkAccess();
        $hmaService = $this->getCurrentHmaService();
        if (!$hmaService) {
            throw new AccessDeniedException('Aucun service associé.');
        }
        $this->checkOwnership($product, $hmaService);

        return $this->render('admin/product/print_sheet.html.twig', [
            'product' => $product,
            'companyType' => $hmaService->getType(),
        ]);
    }
}