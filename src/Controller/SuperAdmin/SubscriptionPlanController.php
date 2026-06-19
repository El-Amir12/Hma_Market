<?php
// src/Controller/SuperAdmin/SubscriptionPlanController.php

namespace App\Controller\SuperAdmin;

use App\Entity\SubscriptionPlan;
use App\Form\SubscriptionPlanType;
use App\Repository\SubscriptionPlanRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/super-admin/subscription-plans')]
#[IsGranted('ROLE_SUPER_ADMIN')]
class SubscriptionPlanController extends AbstractController
{
    public function __construct(
        private readonly EntityManagerInterface $entityManager
    ) {}

    #[Route('/', name: 'app_super_admin_subscription_plan_index', methods: ['GET'])]
    public function index(SubscriptionPlanRepository $repository): Response
    {
        $plans = $repository->findBy([], ['displayName' => 'ASC']);

        return $this->render('super_admin/subscription_plan/index.html.twig', [
            'plans' => $plans,
        ]);
    }

    #[Route('/new', name: 'app_super_admin_subscription_plan_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $plan = new SubscriptionPlan();
        $form = $this->createForm(SubscriptionPlanType::class, $plan);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($plan);
            $this->entityManager->flush();

            $this->addFlash('success', 'Plan créé avec succès.');

            return $this->redirectToRoute('app_super_admin_subscription_plan_index');
        }

        return $this->render('super_admin/subscription_plan/new.html.twig', [
            'form' => $form->createView(),
            'plan' => $plan,
        ]);
    }

    #[Route('/{id}', name: 'app_super_admin_subscription_plan_show', methods: ['GET'])]
    public function show(SubscriptionPlan $plan): Response
    {
        return $this->render('super_admin/subscription_plan/show.html.twig', [
            'plan' => $plan,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_super_admin_subscription_plan_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, SubscriptionPlan $plan): Response
    {
        $form = $this->createForm(SubscriptionPlanType::class, $plan);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();
            $this->addFlash('success', 'Plan mis à jour avec succès.');

            return $this->redirectToRoute('app_super_admin_subscription_plan_index');
        }

        return $this->render('super_admin/subscription_plan/edit.html.twig', [
            'form' => $form->createView(),
            'plan' => $plan,
        ]);
    }

    #[Route('/{id}/toggle', name: 'app_super_admin_subscription_plan_toggle', methods: ['POST'])]
    public function toggle(Request $request, SubscriptionPlan $plan): Response
    {
        $submittedToken = $request->request->get('_token');
        
        if (!$this->isCsrfTokenValid('toggle' . $plan->getId(), $submittedToken)) {
            $this->addFlash('error', 'Token CSRF invalide.');
            return $this->redirectToRoute('app_super_admin_subscription_plan_index');
        }

        $plan->setIsActive(!$plan->isActive());
        $this->entityManager->flush();

        $status = $plan->isActive() ? 'activé' : 'désactivé';
        $this->addFlash('success', sprintf('Le plan "%s" a été %s avec succès.', $plan->getDisplayName(), $status));

        return $this->redirectToRoute('app_super_admin_subscription_plan_index');
    }

    #[Route('/{id}', name: 'app_super_admin_subscription_plan_delete', methods: ['POST'])]
    public function delete(Request $request, SubscriptionPlan $plan): Response
    {
        $submittedToken = $request->request->get('_token');
        
        if (!$this->isCsrfTokenValid('delete' . $plan->getId(), $submittedToken)) {
            $this->addFlash('error', 'Token CSRF invalide.');
            return $this->redirectToRoute('app_super_admin_subscription_plan_index');
        }

        if ($plan->getSubscriptions()->count() > 0) {
            $this->addFlash('error', sprintf('Impossible de supprimer le plan "%s" car il est utilisé par des abonnements.', $plan->getDisplayName()));
            return $this->redirectToRoute('app_super_admin_subscription_plan_index');
        }

        $planName = $plan->getDisplayName();
        $this->entityManager->remove($plan);
        $this->entityManager->flush();

        $this->addFlash('success', sprintf('Le plan "%s" a été supprimé avec succès.', $planName));

        return $this->redirectToRoute('app_super_admin_subscription_plan_index');
    }
}