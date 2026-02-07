<?php

namespace App\Controller\Admin;

use App\Entity\Category;
use App\Form\CategoryType;
use App\Repository\CategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

#[Route('/admin/category')]
final class CategoryController extends AbstractController
{
    private SluggerInterface $slugger;

    public function __construct(SluggerInterface $slugger)
    {
        $this->slugger = $slugger;
    }

    // Méthode helper pour vérifier les rôles
    private function checkAccess(): void
    {
        if (!$this->isGranted('ROLE_ADMIN') && !$this->isGranted('ROLE_MANAGER')) {
            throw $this->createAccessDeniedException('Accès refusé. Vous devez être administrateur ou manager.');
        }
    }

    #[Route(name: 'app_admin_category_index', methods: ['GET'])]
    public function index(Request $request, CategoryRepository $categoryRepository): Response
    {
        $this->checkAccess();
        
        // Récupérer les paramètres de pagination et recherche
        $page = $request->query->getInt('page', 1);
        $limit = 12;
        $search = $request->query->get('search', '');
        $status = $request->query->get('status', '');
        $type = $request->query->get('type', '');

        if ($search) {
            // Utiliser la recherche si un terme est fourni
            $paginator = $categoryRepository->search($search, $page, $limit);
        } elseif ($status === 'active') {
            // Filtrer par statut actif
            $paginator = $categoryRepository->findActivePaginated($page, $limit);
        } elseif ($status === 'inactive') {
            // Filtrer par statut inactif
            $paginator = $categoryRepository->findInactivePaginated($page, $limit);
        } elseif ($type === 'main') {
            // Filtrer les catégories principales
            $paginator = $categoryRepository->findMainCategoriesPaginated($page, $limit);
        } elseif ($type === 'sub') {
            // Filtrer les sous-catégories
            $paginator = $categoryRepository->findSubCategoriesPaginated($page, $limit);
        } else {
            // Sinon, utiliser la pagination normale
            $paginator = $categoryRepository->findAllPaginated($page, $limit);
        }

        $totalItems = $paginator->count();
        $totalPages = ceil($totalItems / $limit);

        return $this->render('admin/category/index.html.twig', [
            'categories' => $paginator,
            'currentPage' => $page,
            'totalPages' => $totalPages,
            'search' => $search,
            'totalItems' => $totalItems,
        ]);
    }

    #[Route('/new', name: 'app_admin_category_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $this->checkAccess();

        $category = new Category();
        $category->setUser($this->getUser());
        $category->setCreatedAt(new \DateTimeImmutable());
        
        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Générer le slug
            if (!$category->getSlug()) {
                $slug = $this->slugger->slug($category->getName())->lower();
                $category->setSlug($slug);
            }

            // Gérer l'upload de l'image
            $imageFile = $form->get('image')->getData();
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $this->slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();
                
                try {
                    $imageFile->move(
                        $this->getParameter('categories_directory'),
                        $newFilename
                    );
                    $category->setImage($newFilename);
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Erreur lors de l\'upload de l\'image.');
                }
            }

            $entityManager->persist($category);
            $entityManager->flush();

            $this->addFlash('success', 'Catégorie créée avec succès.');
            return $this->redirectToRoute('app_admin_category_index');
        }

        return $this->render('admin/category/new.html.twig', [
            'category' => $category,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_admin_category_show', methods: ['GET'])]
    public function show(Category $category): Response
    {
        $this->checkAccess();

        return $this->render('admin/category/show.html.twig', [
            'category' => $category,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_admin_category_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Category $category, EntityManagerInterface $entityManager): Response
    {
        $this->checkAccess();

        $oldImage = $category->getImage();
        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Mettre à jour le slug si le nom a changé
            $newSlug = $this->slugger->slug($category->getName())->lower();
            $category->setSlug($newSlug);

            // Gérer l'upload de l'image
            $imageFile = $form->get('image')->getData();
            if ($imageFile) {
                // Supprimer l'ancienne image
                if ($oldImage) {
                    $oldImagePath = $this->getParameter('categories_directory').'/'.$oldImage;
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath);
                    }
                }

                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $this->slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();
                
                try {
                    $imageFile->move(
                        $this->getParameter('categories_directory'),
                        $newFilename
                    );
                    $category->setImage($newFilename);
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Erreur lors de l\'upload de l\'image.');
                }
            }

            $category->setUpdatedAt(new \DateTimeImmutable());
            $entityManager->flush();

            $this->addFlash('success', 'Catégorie modifiée avec succès.');
            return $this->redirectToRoute('app_admin_category_show', ['id' => $category->getId()]);
        }

        return $this->render('admin/category/edit.html.twig', [
            'category' => $category,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/toggle-status', name: 'app_admin_category_toggle_status', methods: ['POST'])]
    public function toggleStatus(Request $request, Category $category, EntityManagerInterface $entityManager): Response
    {
        $this->checkAccess();

        if (!$this->isCsrfTokenValid('toggle-status'.$category->getId(), $request->request->get('_token'))) {
            throw $this->createAccessDeniedException('Token CSRF invalide');
        }

        try {
            $category->setIsActive(!$category->isActive());
            $category->setUpdatedAt(new \DateTimeImmutable());
            
            $entityManager->flush();

            $status = $category->isActive() ? 'activée' : 'désactivée';
            $this->addFlash('success', "Catégorie {$status} avec succès.");
        } catch (\Exception $e) {
            $this->addFlash('error', 'Erreur lors du changement de statut : ' . $e->getMessage());
        }

        return $this->redirectToRoute('app_admin_category_index');
    }

    #[Route('/{id}/delete-image', name: 'app_admin_category_delete_image', methods: ['POST'])]
    public function deleteImage(Request $request, Category $category, EntityManagerInterface $entityManager): Response
    {
        $this->checkAccess();

        if ($this->isCsrfTokenValid('delete-image'.$category->getId(), $request->request->get('_token'))) {
            $image = $category->getImage();
            if ($image) {
                $imagePath = $this->getParameter('categories_directory').'/'.$image;
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
                $category->setImage(null);
                $category->setUpdatedAt(new \DateTimeImmutable());
                $entityManager->flush();
                
                $this->addFlash('success', 'Image supprimée avec succès.');
            } else {
                $this->addFlash('warning', 'Cette catégorie n\'a pas d\'image.');
            }
        } else {
            $this->addFlash('error', 'Token CSRF invalide.');
        }

        return $this->redirectToRoute('app_admin_category_edit', ['id' => $category->getId()]);
    }

    #[Route('/{id}', name: 'app_admin_category_delete', methods: ['POST'])]
    public function delete(Request $request, Category $category, EntityManagerInterface $entityManager): Response
    {
        $this->checkAccess();

        if ($this->isCsrfTokenValid('delete'.$category->getId(), $request->request->get('_token'))) {
            // Vérifier si la catégorie a des produits ou des sous-catégories
            if ($category->getProducts()->count() > 0) {
                $this->addFlash('error', 'Impossible de supprimer cette catégorie car elle contient des produits.');
                return $this->redirectToRoute('app_admin_category_index');
            }

            if ($category->getChildren()->count() > 0) {
                $this->addFlash('error', 'Impossible de supprimer cette catégorie car elle contient des sous-catégories.');
                return $this->redirectToRoute('app_admin_category_index');
            }

            // Supprimer l'image si elle existe
            $image = $category->getImage();
            if ($image) {
                $imagePath = $this->getParameter('categories_directory').'/'.$image;
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }

            $entityManager->remove($category);
            $entityManager->flush();
            
            $this->addFlash('success', 'Catégorie supprimée avec succès.');
        }

        return $this->redirectToRoute('app_admin_category_index');
    }
}