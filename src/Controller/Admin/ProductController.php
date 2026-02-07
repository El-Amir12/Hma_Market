<?php
// src/Controller/Admin/ProductController.php

namespace App\Controller\Admin;

use App\Entity\Product;
use App\Form\ProductType;
use App\Repository\CategoryRepository;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

#[Route('/admin/product')]
final class ProductController extends AbstractController
{
    private SluggerInterface $slugger;
    
    private const DEFAULT_PRODUCT_IMAGE = 'default-product.png';

    public function __construct(SluggerInterface $slugger)
    {
        $this->slugger = $slugger;
    }

    private function checkAccess(): void
    {
        if (!$this->isGranted('ROLE_ADMIN') && !$this->isGranted('ROLE_MANAGER') && !$this->isGranted('ROLE_STOCK_MANAGER')) {
            throw $this->createAccessDeniedException('Accès refusé. Vous devez être administrateur, manager ou responsable stock.');
        }
    }

    #[Route(name: 'app_admin_product_index', methods: ['GET'])]
    public function index(Request $request, ProductRepository $productRepository, CategoryRepository $categoryRepository): Response
    {
        $this->checkAccess();
        
        // Récupérer les paramètres de pagination et recherche
        $page = $request->query->getInt('page', 1);
        $limit = 12;
        $search = $request->query->get('search', '');
        $status = $request->query->get('status', '');
        $categoryId = $request->query->getInt('category', 0);
        $expiryType = $request->query->get('expiry_type', '');

        // Récupérer les catégories hiérarchiques depuis CategoryRepository
        $categories = $categoryRepository->findHierarchicalCategoriesWithCount();
        
        // Gérer la recherche
        if ($search) {
            $paginator = $productRepository->search($search, $page, $limit);
        } 
        // Gérer les filtres combinés (catégorie + statut)
        elseif ($categoryId > 0 && $status) {
            $paginator = $productRepository->findByCategoryAndStatusPaginated($categoryId, $status, $page, $limit);
        }
        elseif ($categoryId > 0 && $expiryType) {
            $paginator = $productRepository->findByCategoryAndStatusPaginated($categoryId, $expiryType, $page, $limit);
        }
        // Gérer les filtres simples
        elseif ($categoryId > 0) {
            $paginator = $productRepository->findByCategoryPaginated($categoryId, $page, $limit);
        }
        elseif ($status === 'active') {
            $paginator = $productRepository->findActivePaginated($page, $limit);
        }
        elseif ($status === 'inactive') {
            $paginator = $productRepository->findInactivePaginated($page, $limit);
        }
        elseif ($status === 'low-stock') {
            $paginator = $productRepository->findLowStockPaginated($page, $limit);
        }
        elseif ($expiryType === 'perishable') {
            $paginator = $productRepository->findPerishablePaginated($page, $limit);
        }
        elseif ($expiryType === 'non-perishable') {
            $paginator = $productRepository->findNonPerishablePaginated($page, $limit);
        }
        else {
            $paginator = $productRepository->findAllPaginated($page, $limit);
        }

        $totalItems = $paginator->count();
        $totalPages = ceil($totalItems / $limit);

        return $this->render('admin/product/index.html.twig', [
            'products' => $paginator,
            'currentPage' => $page,
            'totalPages' => $totalPages,
            'search' => $search,
            'totalItems' => $totalItems,
            'categories' => $categories,
            'selectedCategory' => $categoryId,
            'selectedStatus' => $status,
            'selectedExpiryType' => $expiryType,
        ]);
    }

    #[Route('/new', name: 'app_admin_product_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $this->checkAccess();

        $product = new Product();
        $product->setUser($this->getUser());
        $product->setCreatedAt(new \DateTime());
        
        // Définir l'image par défaut à la création
        $product->setImage(self::DEFAULT_PRODUCT_IMAGE);
        
        // Générer un code-barres unique par défaut
        $product->setBarcode($this->generateBarcode());
        
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Générer le slug
            $slug = $this->slugger->slug($product->getName())->lower();
            $product->setSlug($slug);

            // Si pas de code-barres saisi, générer un nouveau
            if (!$product->getBarcode() || empty(trim($product->getBarcode()))) {
                $product->setBarcode($this->generateBarcode());
            }

            // Gérer l'upload de l'image
            $imageFile = $form->get('image')->getData();
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $this->slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();
                
                try {
                    $imageFile->move(
                        $this->getParameter('products_directory'),
                        $newFilename
                    );
                    $product->setImage($newFilename);
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Erreur lors de l\'upload de l\'image.');
                }
            }

            $entityManager->persist($product);
            $entityManager->flush();

            $this->addFlash('success', 'Produit créé avec succès.');
            return $this->redirectToRoute('app_admin_product_index');
        }

        return $this->render('admin/product/new.html.twig', [
            'product' => $product,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_admin_product_show', methods: ['GET'])]
    public function show(Product $product): Response
    {
        $this->checkAccess();

        return $this->render('admin/product/show.html.twig', [
            'product' => $product,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_admin_product_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Product $product, EntityManagerInterface $entityManager): Response
    {
        $this->checkAccess();

        $oldImage = $product->getImage();
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Mettre à jour le slug si le nom a changé
            $newSlug = $this->slugger->slug($product->getName())->lower();
            $product->setSlug($newSlug);

            // Gérer l'upload de l'image
            $imageFile = $form->get('image')->getData();
            if ($imageFile) {
                // Supprimer l'ancienne image seulement si ce n'est pas l'image par défaut
                if ($oldImage && $oldImage !== self::DEFAULT_PRODUCT_IMAGE) {
                    $oldImagePath = $this->getParameter('products_directory').'/'.$oldImage;
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath);
                    }
                }

                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $this->slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();
                
                try {
                    $imageFile->move(
                        $this->getParameter('products_directory'),
                        $newFilename
                    );
                    $product->setImage($newFilename);
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Erreur lors de l\'upload de l\'image.');
                }
            }

            $product->setUpdatedAt(new \DateTime());
            $entityManager->flush();

            $this->addFlash('success', 'Produit modifié avec succès.');
            return $this->redirectToRoute('app_admin_product_show', ['id' => $product->getId()]);
        }

        return $this->render('admin/product/edit.html.twig', [
            'product' => $product,
            'form' => $form,
            'oldImage' => $oldImage,
        ]);
    }

    #[Route('/{id}/toggle-status', name: 'app_admin_product_toggle_status', methods: ['POST'])]
    public function toggleStatus(Request $request, Product $product, EntityManagerInterface $entityManager): Response
    {
        $this->checkAccess();

        if (!$this->isCsrfTokenValid('toggle-status', $request->request->get('_token'))) {
            throw $this->createAccessDeniedException('Token CSRF invalide');
        }

        try {
            $product->setIsActive(!$product->isActive());
            $product->setUpdatedAt(new \DateTime());
            
            $entityManager->flush();

            $status = $product->isActive() ? 'activé' : 'désactivé';
            $this->addFlash('success', "Produit {$status} avec succès.");
        } catch (\Exception $e) {
            $this->addFlash('error', 'Erreur lors du changement de statut : ' . $e->getMessage());
        }

        return $this->redirectToRoute('app_admin_product_index');
    }

    #[Route('/{id}/delete-image', name: 'app_admin_product_delete_image', methods: ['POST'])]
    public function deleteImage(Request $request, Product $product, EntityManagerInterface $entityManager): Response
    {
        $this->checkAccess();

        if ($this->isCsrfTokenValid('delete-image'.$product->getId(), $request->request->get('_token'))) {
            $image = $product->getImage();
            if ($image && $image !== self::DEFAULT_PRODUCT_IMAGE) {
                // Supprimer le fichier physique
                $imagePath = $this->getParameter('products_directory').'/'.$image;
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
                
                // Rétablir l'image par défaut
                $product->setImage(self::DEFAULT_PRODUCT_IMAGE);
                $product->setUpdatedAt(new \DateTime());
                $entityManager->flush();
                
                $this->addFlash('success', 'Image supprimée avec succès.');
            } elseif ($image === self::DEFAULT_PRODUCT_IMAGE) {
                $this->addFlash('info', 'Ce produit utilise déjà l\'image par défaut.');
            } else {
                $this->addFlash('warning', 'Ce produit n\'a pas d\'image.');
            }
        } else {
            $this->addFlash('error', 'Token CSRF invalide.');
        }

        return $this->redirectToRoute('app_admin_product_edit', ['id' => $product->getId()]);
    }

    #[Route('/{id}', name: 'app_admin_product_delete', methods: ['POST'])]
    public function delete(Request $request, Product $product, EntityManagerInterface $entityManager): Response
    {
        $this->checkAccess();

        if ($this->isCsrfTokenValid('delete'.$product->getId(), $request->request->get('_token'))) {
            // Vérifier si le produit a des mouvements de stock
            if ($product->getPurchaseItems()->count() > 0) {
                $this->addFlash('error', 'Impossible de supprimer ce produit car il a des historiques d\'achat.');
                return $this->redirectToRoute('app_admin_product_index');
            }

            // Vérifier si le produit a des lots de stock
            if ($product->getStockBatches()->count() > 0) {
                $this->addFlash('error', 'Impossible de supprimer ce produit car il a des lots de stock.');
                return $this->redirectToRoute('app_admin_product_index');
            }

            // Supprimer l'image si elle existe et n'est pas l'image par défaut
            $image = $product->getImage();
            if ($image && $image !== self::DEFAULT_PRODUCT_IMAGE) {
                $imagePath = $this->getParameter('products_directory').'/'.$image;
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }

            $entityManager->remove($product);
            $entityManager->flush();
            
            $this->addFlash('success', 'Produit supprimé avec succès.');
        }

        return $this->redirectToRoute('app_admin_product_index');
    }

    #[Route('/api/{id}/details', name: 'app_admin_product_api_details', methods: ['GET'])]
    public function apiDetails(Product $product): JsonResponse
    {
        return $this->json([
            'id' => $product->getId(),
            'name' => $product->getName(),
            'barcode' => $product->getBarcode(),
            'purchase_price' => $product->getPurchasePrice(),
            'sale_price' => $product->getSalePrice(),
            'stock_quantity' => $product->getStockQuantity(),
            'has_expiry_date' => $product->hasExpiryDate(),
            'category' => $product->getCategory() ? $product->getCategory()->getName() : null,
        ]);
    }

    #[Route('/scan/barcode', name: 'app_admin_product_scan_barcode', methods: ['POST'])]
    public function scanBarcode(Request $request): Response
    {
        $this->checkAccess();

        $data = json_decode($request->getContent(), true);
        $barcode = $data['barcode'] ?? '';

        if (empty($barcode)) {
            return $this->json(['error' => 'Code-barres vide'], 400);
        }

        // Retourner le code-barres pour pré-remplir le formulaire
        return $this->json([
            'barcode' => $barcode,
            'message' => 'Code-barres scanné avec succès'
        ]);
    }

    #[Route('/generate/barcode', name: 'app_admin_product_generate_barcode', methods: ['GET'])]
    public function generateBarcodeAction(): Response
    {
        $this->checkAccess();

        $barcode = $this->generateBarcode();
        
        return $this->json([
            'barcode' => $barcode
        ]);
    }

    /**
     * Génère un code-barres unique
     */
    private function generateBarcode(): string
    {
        // Format: PROD-YYYYMMDD-XXXXXX (6 chiffres aléatoires)
        $date = date('Ymd');
        $random = str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT);
        return 'PROD-' . $date . '-' . $random;
    }

    #[Route('/check/barcode/{barcode}', name: 'app_admin_product_check_barcode', methods: ['GET'])]
    public function checkBarcode(string $barcode, ProductRepository $productRepository): JsonResponse // Ici aussi
    {
        $this->checkAccess();

        // Vérifier si le code-barres existe déjà
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
}