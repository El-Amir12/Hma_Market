<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* purchase/show.html.twig */
class __TwigTemplate_35a7358c0f05477571258ca90f155e7b extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Commande ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "purchaseNumber", [], "any", false, false, false, 4), "html", null, true);
        yield " - HMA Market";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
    /* ============================================
       CARTES STATISTIQUES
       ============================================ */
    .stat-card {
        border-radius: 1rem;
        transition: all 0.3s ease;
        border: none;
        overflow: hidden;
    }
    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.1) !important;
    }

    /* ============================================
       TIMELINE HISTORIQUE
       ============================================ */
    .timeline {
        position: relative;
        padding: 1rem 0;
    }
    .timeline-item {
        position: relative;
        padding-left: 3.5rem;
        padding-bottom: 1.75rem;
        border-left: 2px solid #e9ecef;
        margin-left: 1.25rem;
    }
    .timeline-item:last-child {
        border-left-color: transparent;
        padding-bottom: 0;
    }
    .timeline-icon {
        position: absolute;
        left: -1.3rem;
        top: 0;
        width: 2.6rem;
        height: 2.6rem;
        background: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        z-index: 1;
        transition: all 0.3s ease;
    }
    .timeline-icon i {
        font-size: 1.1rem;
    }
    .timeline-item:hover .timeline-icon {
        transform: scale(1.1);
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }
    .timeline-content {
        padding-top: 0.25rem;
    }

    /* ============================================
       BADGES ET BOUTONS
       ============================================ */
    .badge-status {
        font-size: 0.85rem;
        padding: 0.4rem 1rem;
        border-radius: 2rem;
        font-weight: 500;
    }
    .btn-pdf {
        padding: 0.4rem 1rem;
        font-size: 0.85rem;
        border-radius: 0.5rem;
    }
    .badge-issue {
        background-color: #fef3c7;
        color: #92400e;
        padding: 0.25rem 0.75rem;
        border-radius: 20px;
        font-size: 0.7rem;
        font-weight: 500;
        display: inline-flex;
        align-items: center;
        gap: 0.25rem;
    }
    .badge-issue.status-recovered {
        background-color: #d1fae5;
        color: #065f46;
    }
    .badge-issue.status-resolved {
        background-color: #d1fae5;
        color: #065f46;
    }
    .badge-issue.status-pending {
        background-color: #fef3c7;
        color: #92400e;
    }
    .badge-issue.status-rejected {
        background-color: #fee2e2;
        color: #991b1b;
    }
    .btn-view-issue {
        padding: 0.2rem 0.5rem;
        font-size: 0.7rem;
        border-radius: 0.375rem;
    }

    /* ============================================
       AVATAR UTILISATEUR
       ============================================ */
    .user-avatar-lg {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        object-fit: cover;
        background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        overflow: hidden;
        border: 3px solid #fff;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    .user-avatar-lg img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .user-avatar-lg i {
        color: white;
    }

    /* ============================================
       LIGNES D'INFORMATION
       ============================================ */
    .info-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0.6rem 0;
        border-bottom: 1px solid #f0f0f0;
        gap: 0.5rem;
        flex-wrap: wrap;
    }
    .info-row:last-child {
        border-bottom: none;
    }
    .info-label {
        color: #6b7280;
        font-size: 0.85rem;
        font-weight: 500;
    }
    .info-value {
        font-weight: 600;
        color: #1f2937;
        text-align: right;
        word-break: break-word;
    }

    /* ============================================
       IMAGE PRODUIT
       ============================================ */
    .table-product-img {
        width: 45px;
        height: 45px;
        object-fit: cover;
        border-radius: 0.5rem;
        flex-shrink: 0;
    }

    /* ============================================
       EMAIL CLIQUABLE
       ============================================ */
    .email-link {
        color: #0463f1;
        text-decoration: none;
        transition: all 0.2s ease;
        word-break: break-all;
    }
    .email-link:hover {
        color: #0346b8;
        text-decoration: underline;
    }
    .email-link i {
        font-size: 0.85em;
        margin-left: 0.25rem;
        opacity: 0.6;
    }

    /* ============================================
       RESPONSIVE MOBILE
       ============================================ */
    @media (max-width: 768px) {
        .timeline-item {
            padding-left: 2.75rem;
            margin-left: 0.75rem;
        }
        .timeline-icon {
            width: 2.2rem;
            height: 2.2rem;
            left: -1.1rem;
        }
        .timeline-icon i {
            font-size: 0.9rem;
        }

        .table th, .table td {
            padding: 0.75rem;
            font-size: 0.85rem;
        }

        .user-avatar-lg {
            width: 55px;
            height: 55px;
        }

        .btn-pdf {
            padding: 0.35rem 0.75rem;
            font-size: 0.78rem;
        }

        .info-row {
            flex-direction: column;
            align-items: flex-start;
        }
        .info-value {
            text-align: left;
        }

        h1.h2 {
            font-size: 1.25rem;
        }

        .fs-2 {
            font-size: 1.4rem !important;
        }
    }

    @media (max-width: 480px) {
        .d-flex.gap-2.flex-wrap {
            width: 100%;
        }
        .d-flex.gap-2.flex-wrap .btn {
            flex: 1 1 auto;
            min-width: 0;
        }
        .timeline-item {
            padding-left: 2.5rem;
            margin-left: 0.5rem;
        }
    }

    /* ============================================
       ANIMATIONS
       ============================================ */
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animated-card {
        animation: fadeInUp 0.4s ease-out both;
    }

    @media (max-width: 768px) {
        .stat-card:hover {
            transform: none;
        }
    }
</style>
";
        yield from [];
    }

    // line 279
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 280
        yield "<div class=\"container-fluid py-4\">
    <div class=\"animated-card\">
        <!-- EN-TÊTE -->
        <div class=\"d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-4 gap-3\">
            <div>
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb mb-2\">
                        <li class=\"breadcrumb-item\">
                            <a href=\"";
        // line 288
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-decoration-none\">
                                <i class=\"fas fa-tachometer-alt me-1\"></i> Tableau de bord
                            </a>
                        </li>
                        <li class=\"breadcrumb-item\">
                            <a href=\"";
        // line 293
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_index");
        yield "\" class=\"text-decoration-none\">
                                <i class=\"fas fa-shopping-cart me-1\"></i> Commandes
                            </a>
                        </li>
                        <li class=\"breadcrumb-item active\">";
        // line 297
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "purchaseNumber", [], "any", false, false, false, 297), "html", null, true);
        yield "</li>
                    </ol>
                </nav>
                <h1 class=\"h2 mb-0 fw-bold\">
                    <i class=\"fas fa-receipt text-primary me-2\"></i>
                    Commande ";
        // line 302
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "purchaseNumber", [], "any", false, false, false, 302), "html", null, true);
        yield "
                </h1>
                <p class=\"text-muted mt-1 mb-0\">
                    <i class=\"fas fa-calendar-alt me-1\"></i>
                    Créée le ";
        // line 306
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "createdAt", [], "any", false, false, false, 306), "d/m/Y à H:i"), "html", null, true);
        yield "
                </p>
            </div>
            <div class=\"d-flex gap-2 flex-wrap\">
                ";
        // line 310
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "bonCommande", [], "any", false, false, false, 310)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 311
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/bons-commande/" . CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "bonCommande", [], "any", false, false, false, 311))), "html", null, true);
            yield "\" target=\"_blank\" class=\"btn btn-outline-primary btn-pdf\">
                        <i class=\"fas fa-file-pdf me-1\"></i> Bon de commande
                    </a>
                ";
        }
        // line 315
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "recuAchat", [], "any", false, false, false, 315)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 316
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/recus-achat/" . CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "recuAchat", [], "any", false, false, false, 316))), "html", null, true);
            yield "\" target=\"_blank\" class=\"btn btn-outline-success btn-pdf\">
                        <i class=\"fas fa-file-pdf me-1\"></i> Reçu d'achat
                    </a>
                ";
        }
        // line 320
        yield "                <a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_print", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "id", [], "any", false, false, false, 320)]), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary btn-pdf\" target=\"_blank\">
                    <i class=\"fas fa-print me-1\"></i> Imprimer
                </a>
                ";
        // line 323
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "status", [], "any", false, false, false, 323) == "confirmed")) {
            // line 324
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_receive", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "id", [], "any", false, false, false, 324)]), "html", null, true);
            yield "\" class=\"btn btn-success btn-pdf\">
                        <i class=\"fas fa-box-open me-1\"></i> Réceptionner
                    </a>
                    <button type=\"button\" class=\"btn btn-outline-danger btn-pdf\" data-bs-toggle=\"modal\" data-bs-target=\"#cancelModal\">
                        <i class=\"fas fa-ban me-1\"></i> Annuler
                    </button>
                ";
        }
        // line 331
        yield "                <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_index");
        yield "\" class=\"btn btn-outline-secondary btn-pdf\">
                    <i class=\"fas fa-arrow-left me-1\"></i> Retour
                </a>
            </div>
        </div>

        <!-- CARTES PRINCIPALES -->
        <div class=\"row g-4 mb-4\">
            <!-- Informations générales -->
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"card stat-card shadow-sm h-100\">
                    <div class=\"card-header bg-white py-3 border-0\">
                        <h5 class=\"mb-0 fw-semibold\">
                            <i class=\"fas fa-info-circle text-primary me-2\"></i>Informations générales
                        </h5>
                    </div>
                    <div class=\"card-body pt-0\">
                        <div class=\"d-flex justify-content-between align-items-center mb-3\">
                            <span class=\"badge ";
        // line 349
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "statusBadgeClass", [], "any", false, false, false, 349), "html", null, true);
        yield " badge-status\">
                                <i class=\"fas ";
        // line 350
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "statusIcon", [], "any", false, false, false, 350), "html", null, true);
        yield " me-1\"></i>
                                ";
        // line 351
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "statusLabel", [], "any", false, false, false, 351), "html", null, true);
        yield "
                            </span>
                        </div>
                        <div class=\"info-row\">
                            <span class=\"info-label\">N° commande</span>
                            <span class=\"info-value\">";
        // line 356
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "purchaseNumber", [], "any", false, false, false, 356), "html", null, true);
        yield "</span>
                        </div>
                        <div class=\"info-row\">
                            <span class=\"info-label\">Date création</span>
                            <span class=\"info-value\">";
        // line 360
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "createdAt", [], "any", false, false, false, 360), "d/m/Y H:i"), "html", null, true);
        yield "</span>
                        </div>
                        ";
        // line 362
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "confirmedAt", [], "any", false, false, false, 362)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 363
            yield "                        <div class=\"info-row\">
                            <span class=\"info-label\">Date confirmation</span>
                            <span class=\"info-value text-success\">";
            // line 365
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "confirmedAt", [], "any", false, false, false, 365), "d/m/Y H:i"), "html", null, true);
            yield "</span>
                        </div>
                        ";
        }
        // line 368
        yield "                        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "receivedAt", [], "any", false, false, false, 368)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 369
            yield "                        <div class=\"info-row\">
                            <span class=\"info-label\">Date réception</span>
                            <span class=\"info-value text-info\">";
            // line 371
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "receivedAt", [], "any", false, false, false, 371), "d/m/Y H:i"), "html", null, true);
            yield "</span>
                        </div>
                        ";
        }
        // line 374
        yield "                        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "cancelledAt", [], "any", false, false, false, 374)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 375
            yield "                        <div class=\"info-row\">
                            <span class=\"info-label\">Date annulation</span>
                            <span class=\"info-value text-danger\">";
            // line 377
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "cancelledAt", [], "any", false, false, false, 377), "d/m/Y H:i"), "html", null, true);
            yield "</span>
                        </div>
                        <div class=\"info-row\">
                            <span class=\"info-label\">Motif annulation</span>
                            <span class=\"info-value text-danger\">";
            // line 381
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "cancellationReason", [], "any", false, false, false, 381), "html", null, true);
            yield "</span>
                        </div>
                        ";
        }
        // line 384
        yield "                    </div>
                </div>
            </div>

            <!-- Fournisseur (optionnel) -->
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"card stat-card shadow-sm h-100\">
                    <div class=\"card-header bg-white py-3 border-0\">
                        <h5 class=\"mb-0 fw-semibold\">
                            <i class=\"fas fa-truck text-primary me-2\"></i>Fournisseur
                        </h5>
                    </div>
                    <div class=\"card-body pt-0\">
                        ";
        // line 397
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "supplier", [], "any", false, false, false, 397)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 398
            yield "                            <h6 class=\"fw-bold mb-2\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "supplier", [], "any", false, false, false, 398), "name", [], "any", false, false, false, 398), "html", null, true);
            yield "</h6>
                            ";
            // line 399
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "supplier", [], "any", false, false, false, 399), "contactPerson", [], "any", false, false, false, 399)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 400
                yield "                                <p class=\"text-muted small mb-2\">
                                    <i class=\"fas fa-user me-1\"></i> ";
                // line 401
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "supplier", [], "any", false, false, false, 401), "contactPerson", [], "any", false, false, false, 401), "html", null, true);
                yield "
                                </p>
                            ";
            }
            // line 404
            yield "                            <div class=\"info-row\">
                                <span class=\"info-label\">Téléphone</span>
                                <span class=\"info-value\">
                                    ";
            // line 407
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "supplier", [], "any", false, false, false, 407), "phone", [], "any", false, false, false, 407)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 408
                yield "                                        <a href=\"tel:";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "supplier", [], "any", false, false, false, 408), "phone", [], "any", false, false, false, 408), "html", null, true);
                yield "\" class=\"email-link\">
                                            ";
                // line 409
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "supplier", [], "any", false, false, false, 409), "phone", [], "any", false, false, false, 409), "html", null, true);
                yield "
                                        </a>
                                    ";
            } else {
                // line 412
                yield "                                        —
                                    ";
            }
            // line 414
            yield "                                </span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Email</span>
                                <span class=\"info-value small\">
                                    ";
            // line 419
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "supplier", [], "any", false, false, false, 419), "email", [], "any", false, false, false, 419)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 420
                yield "                                        <a href=\"mailto:";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "supplier", [], "any", false, false, false, 420), "email", [], "any", false, false, false, 420), "html", null, true);
                yield "\" class=\"email-link\">
                                            ";
                // line 421
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "supplier", [], "any", false, false, false, 421), "email", [], "any", false, false, false, 421), "html", null, true);
                yield "
                                            <i class=\"fas fa-external-link-alt\"></i>
                                        </a>
                                    ";
            } else {
                // line 425
                yield "                                        —
                                    ";
            }
            // line 427
            yield "                                </span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Adresse</span>
                                <span class=\"info-value small\">";
            // line 431
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "supplier", [], "any", false, true, false, 431), "adress", [], "any", true, true, false, 431)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "supplier", [], "any", false, false, false, 431), "adress", [], "any", false, false, false, 431), "—")) : ("—")), "html", null, true);
            yield "</span>
                            </div>
                        ";
        } else {
            // line 434
            yield "                            <div class=\"text-center text-muted py-4\">
                                <i class=\"fas fa-building fa-3x mb-3 opacity-50\"></i>
                                <h6 class=\"mb-1\">Achat interne</h6>
                                <p class=\"small mb-0\">Aucun fournisseur associé à cette commande</p>
                            </div>
                        ";
        }
        // line 440
        yield "                    </div>
                </div>
            </div>

            <!-- Créateur -->
            <div class=\"col-12 col-md-12 col-lg-4\">
                <div class=\"card stat-card shadow-sm h-100\">
                    <div class=\"card-header bg-white py-3 border-0\">
                        <h5 class=\"mb-0 fw-semibold\">
                            <i class=\"fas fa-user-circle text-primary me-2\"></i>Créateur
                        </h5>
                    </div>
                    <div class=\"card-body pt-0\">
                        <div class=\"d-flex align-items-center mb-3\">
                            <div class=\"user-avatar-lg me-3\">
                                ";
        // line 455
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "user", [], "any", false, false, false, 455), "photo", [], "any", false, false, false, 455)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 456
            yield "                                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "user", [], "any", false, false, false, 456), "photo", [], "any", false, false, false, 456))), "html", null, true);
            yield "\" 
                                         alt=\"";
            // line 457
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "user", [], "any", false, false, false, 457), "fullName", [], "any", false, false, false, 457), "html", null, true);
            yield "\"
                                         onerror=\"this.style.display='none'; this.parentElement.innerHTML='<i class=&quot;fas fa-user fa-2x&quot;></i>';\">
                                ";
        } else {
            // line 460
            yield "                                    <i class=\"fas fa-user fa-2x\"></i>
                                ";
        }
        // line 462
        yield "                            </div>
                            <div class=\"flex-grow-1\" style=\"min-width: 0;\">
                                <div class=\"fw-bold fs-5 text-truncate\">";
        // line 464
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "user", [], "any", false, false, false, 464), "fullName", [], "any", false, false, false, 464), "html", null, true);
        yield "</div>
                                ";
        // line 465
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "user", [], "any", false, false, false, 465), "email", [], "any", false, false, false, 465)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 466
            yield "                                    <div class=\"small text-muted text-truncate\">
                                        <i class=\"fas fa-envelope me-1\"></i>
                                        <a href=\"mailto:";
            // line 468
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "user", [], "any", false, false, false, 468), "email", [], "any", false, false, false, 468), "html", null, true);
            yield "?subject=À propos de la commande ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "purchaseNumber", [], "any", false, false, false, 468), "html", null, true);
            yield "\" 
                                           class=\"email-link\"
                                           title=\"Envoyer un email à ";
            // line 470
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "user", [], "any", false, false, false, 470), "fullName", [], "any", false, false, false, 470), "html", null, true);
            yield "\">
                                            ";
            // line 471
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "user", [], "any", false, false, false, 471), "email", [], "any", false, false, false, 471), "html", null, true);
            yield "
                                            <i class=\"fas fa-external-link-alt\"></i>
                                        </a>
                                    </div>
                                ";
        }
        // line 476
        yield "                                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "user", [], "any", false, false, false, 476), "phone", [], "any", false, false, false, 476)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 477
            yield "                                    <div class=\"small text-muted\">
                                        <i class=\"fas fa-phone me-1\"></i>
                                        <a href=\"tel:";
            // line 479
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "user", [], "any", false, false, false, 479), "phone", [], "any", false, false, false, 479), "html", null, true);
            yield "\" class=\"email-link\">
                                            ";
            // line 480
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "user", [], "any", false, false, false, 480), "phone", [], "any", false, false, false, 480), "html", null, true);
            yield "
                                        </a>
                                    </div>
                                ";
        }
        // line 484
        yield "                            </div>
                        </div>
                        <hr>
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <span class=\"text-muted\">Total commande</span>
                            <span class=\"fs-2 fw-bold text-primary\">";
        // line 489
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "totalAmount", [], "any", false, false, false, 489), 0, ",", " "), "html", null, true);
        yield " FCFA</span>
                        </div>
                        <div class=\"text-muted small mt-1\">
                            <i class=\"fas fa-box me-1\"></i>
                            ";
        // line 493
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "purchaseItems", [], "any", false, false, false, 493)), "html", null, true);
        yield " produit(s) commandé(s)
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- HISTORIQUE DES STATUTS -->
        <div class=\"card shadow-sm border-0 mb-4\">
            <div class=\"card-header bg-white py-3\">
                <h5 class=\"mb-0 fw-semibold\">
                    <i class=\"fas fa-history me-2 text-primary\"></i>Historique des statuts
                </h5>
            </div>
            <div class=\"card-body\">
                <div class=\"timeline\">
                    ";
        // line 509
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "statusHistory", [], "any", false, false, false, 509));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 510
            yield "                        ";
            $context["statusColor"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 510) == "Création")) ? ("primary") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 510) == "Confirmation")) ? ("success") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 510) == "Réception")) ? ("info") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 510) == "Annulation")) ? ("danger") : ("secondary"))))))));
            // line 511
            yield "                        <div class=\"timeline-item\">
                            <div class=\"timeline-icon bg-white border border-";
            // line 512
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["statusColor"] ?? null), "html", null, true);
            yield " shadow-sm\">
                                <i class=\"fas ";
            // line 513
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 513) == "Création")) ? ("fa-plus-circle") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 513) == "Confirmation")) ? ("fa-check-circle") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 513) == "Réception")) ? ("fa-box-open") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 513) == "Annulation")) ? ("fa-ban") : ("fa-edit"))))))));
            yield " text-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["statusColor"] ?? null), "html", null, true);
            yield "\"></i>
                            </div>
                            <div class=\"timeline-content\">
                                <div class=\"d-flex flex-wrap justify-content-between align-items-start gap-2\">
                                    <strong class=\"fs-6\">";
            // line 517
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 517), "html", null, true);
            yield "</strong>
                                    <small class=\"text-muted\">
                                        <i class=\"far fa-clock me-1\"></i>
                                        ";
            // line 520
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "date", [], "any", false, false, false, 520), "d/m/Y H:i"), "html", null, true);
            yield "
                                    </small>
                                </div>

                                <div class=\"d-flex align-items-center gap-2 mt-2\">
                                    ";
            // line 525
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["event"], "by", [], "any", false, false, false, 525)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 526
                yield "                                        <div class=\"user-avatar-sm\" style=\"width: 32px; height: 32px; border-radius: 50%; overflow: hidden; flex-shrink: 0; border: 2px solid #fff; box-shadow: 0 2px 6px rgba(0,0,0,0.1);\">
                                            ";
                // line 527
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "by", [], "any", false, false, false, 527), "photo", [], "any", false, false, false, 527)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 528
                    yield "                                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "by", [], "any", false, false, false, 528), "photo", [], "any", false, false, false, 528))), "html", null, true);
                    yield "\" 
                                                     alt=\"";
                    // line 529
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "by", [], "any", false, false, false, 529), "fullName", [], "any", false, false, false, 529), "html", null, true);
                    yield "\"
                                                     style=\"width: 100%; height: 100%; object-fit: cover;\"
                                                     onerror=\"this.style.display='none'; this.parentElement.innerHTML='<div style=&quot;width:100%;height:100%;background:linear-gradient(135deg, #667eea 0%, #0463f1 100%);display:flex;align-items:center;justify-content:center;color:white;font-size:0.8rem;&quot;><i class=&quot;fas fa-user&quot;></i></div>';\">
                                            ";
                } else {
                    // line 533
                    yield "                                                <div style=\"width: 100%; height: 100%; background: linear-gradient(135deg, #667eea 0%, #0463f1 100%); display: flex; align-items: center; justify-content: center; color: white; font-size: 0.8rem;\">
                                                    <i class=\"fas fa-user\"></i>
                                                </div>
                                            ";
                }
                // line 537
                yield "                                        </div>
                                        <div class=\"small text-muted\">
                                            <span class=\"fw-medium\">";
                // line 539
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "by", [], "any", false, false, false, 539), "fullName", [], "any", false, false, false, 539), "html", null, true);
                yield "</span>
                                            ";
                // line 540
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "by", [], "any", false, false, false, 540), "email", [], "any", false, false, false, 540)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 541
                    yield "                                                <span class=\"text-muted mx-1\">•</span>
                                                <a href=\"mailto:";
                    // line 542
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "by", [], "any", false, false, false, 542), "email", [], "any", false, false, false, 542), "html", null, true);
                    yield "?subject=À propos de la commande ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "purchaseNumber", [], "any", false, false, false, 542), "html", null, true);
                    yield "\" 
                                                   class=\"email-link small\"
                                                   title=\"Envoyer un email à ";
                    // line 544
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "by", [], "any", false, false, false, 544), "fullName", [], "any", false, false, false, 544), "html", null, true);
                    yield "\">
                                                    <i class=\"fas fa-envelope me-1\"></i>";
                    // line 545
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "by", [], "any", false, false, false, 545), "email", [], "any", false, false, false, 545), "html", null, true);
                    yield "
                                                </a>
                                            ";
                }
                // line 548
                yield "                                        </div>
                                    ";
            } else {
                // line 550
                yield "                                        <div class=\"small text-muted\">
                                            <i class=\"fas fa-robot me-1\"></i> Système
                                        </div>
                                    ";
            }
            // line 554
            yield "                                </div>

                                ";
            // line 556
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "reason", [], "any", true, true, false, 556) && CoreExtension::getAttribute($this->env, $this->source, $context["event"], "reason", [], "any", false, false, false, 556))) {
                // line 557
                yield "                                    <div class=\"small text-danger mt-2 p-2\" style=\"background: #fef2f2; border-radius: 6px;\">
                                        <i class=\"fas fa-comment me-1\"></i> <strong>Motif :</strong> ";
                // line 558
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "reason", [], "any", false, false, false, 558), "html", null, true);
                yield "
                                    </div>
                                ";
            }
            // line 561
            yield "                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 564
        yield "                </div>
            </div>
        </div>

        <!-- PRODUITS COMMANDÉS -->
        <div class=\"card shadow-sm border-0\">
            <div class=\"card-header bg-white py-3\">
                <h5 class=\"mb-0 fw-semibold\">
                    <i class=\"fas fa-boxes me-2 text-primary\"></i>Produits commandés
                </h5>
            </div>
            <div class=\"table-responsive\">
                <table class=\"table table-hover mb-0 align-middle\">
                    <thead class=\"table-light\">
                        <tr>
                            <th style=\"width: 30%\">Produit</th>
                            <th style=\"width: 12%\" class=\"d-none d-md-table-cell\">Code-barres</th>
                            <th style=\"width: 8%\" class=\"text-center\">Quantité</th>
                            <th style=\"width: 12%\" class=\"text-end\">Prix unitaire</th>
                            <th style=\"width: 12%\" class=\"text-end\">Total</th>
                            <th style=\"width: 13%\" class=\"d-none d-lg-table-cell\">Lot</th>
                            <th style=\"width: 13%\">Problème</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 590
        yield "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "purchaseItems", [], "any", false, false, false, 590));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 591
            yield "                            ";
            $context["creditNote"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["creditNotesByItemId"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 591), [], "array", true, true, false, 591) &&  !(null === (($_v0 = ($context["creditNotesByItemId"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 591)] ?? null) : null)))) ? ((($_v1 = ($context["creditNotesByItemId"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 591)] ?? null) : null)) : (null));
            // line 592
            yield "
                            <tr>
                                <td>
                                    <div class=\"d-flex align-items-center\">
                                        ";
            // line 596
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 596), "image", [], "any", false, false, false, 596) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 596), "image", [], "any", false, false, false, 596) != "default-product.png"))) {
                // line 597
                yield "                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 597), "image", [], "any", false, false, false, 597))), "html", null, true);
                yield "\" 
                                                 alt=\"";
                // line 598
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 598), "name", [], "any", false, false, false, 598), "html", null, true);
                yield "\"
                                                 class=\"table-product-img me-2\">
                                        ";
            } else {
                // line 601
                yield "                                            <div class=\"table-product-img bg-light d-flex align-items-center justify-content-center me-2\">
                                                <i class=\"fas fa-box text-secondary\"></i>
                                            </div>
                                        ";
            }
            // line 605
            yield "                                        <div>
                                            <div class=\"fw-semibold\">";
            // line 606
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 606), "name", [], "any", false, false, false, 606), "html", null, true);
            yield "</div>
                                            ";
            // line 607
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 607), "hasExpiryDate", [], "any", false, false, false, 607)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 608
                yield "                                                <span class=\"badge bg-warning text-dark mt-1\">
                                                    <i class=\"fas fa-calendar-alt me-1\"></i>Périssable
                                                </span>
                                            ";
            }
            // line 612
            yield "                                        </div>
                                    </div>
                                </td>
                                <td class=\"d-none d-md-table-cell\">
                                    <code class=\"small\">";
            // line 616
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 616), "barcode", [], "any", false, false, false, 616), "html", null, true);
            yield "</code>
                                </td>
                                <td class=\"text-center\">";
            // line 618
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 618), "html", null, true);
            yield "</td>
                                <td class=\"text-end\">";
            // line 619
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 619), 0, ",", " "), "html", null, true);
            yield " FCFA</td>
                                <td class=\"text-end fw-bold text-primary\">";
            // line 620
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "totalPrice", [], "any", false, false, false, 620), 0, ",", " "), "html", null, true);
            yield " FCFA</td>
                                <td class=\"d-none d-lg-table-cell\">
                                    ";
            // line 622
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "batchNumber", [], "any", false, false, false, 622)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 623
                yield "                                        <span class=\"badge bg-secondary\">
                                            <i class=\"fas fa-tag me-1\"></i>";
                // line 624
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "batchNumber", [], "any", false, false, false, 624), "html", null, true);
                yield "
                                        </span>
                                    ";
            } else {
                // line 627
                yield "                                        <span class=\"text-muted\">—</span>
                                    ";
            }
            // line 629
            yield "                                </td>
                                <td>
                                    ";
            // line 632
            yield "                                    ";
            if ((($tmp = ($context["creditNote"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 633
                yield "                                        ";
                $context["statusClass"] = ("status-" . Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "status", [], "any", false, false, false, 633)));
                // line 634
                yield "                                        <div class=\"d-flex align-items-center gap-2 flex-wrap\">
                                            <span class=\"badge-issue ";
                // line 635
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["statusClass"] ?? null), "html", null, true);
                yield "\">
                                                ";
                // line 636
                if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "status", [], "any", false, false, false, 636), ["recovered", "resolved"])) {
                    // line 637
                    yield "                                                    <i class=\"fas fa-check-circle\"></i>
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 638
($context["creditNote"] ?? null), "status", [], "any", false, false, false, 638) == "pending")) {
                    // line 639
                    yield "                                                    <i class=\"fas fa-clock\"></i>
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 640
($context["creditNote"] ?? null), "status", [], "any", false, false, false, 640) == "rejected")) {
                    // line 641
                    yield "                                                    <i class=\"fas fa-times-circle\"></i>
                                                ";
                } else {
                    // line 643
                    yield "                                                    <i class=\"fas fa-exclamation-triangle\"></i>
                                                ";
                }
                // line 645
                yield "                                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "status", [], "any", false, false, false, 645), ["_" => " "])), "html", null, true);
                yield "
                                            </span>
                                            <a href=\"";
                // line 647
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "id", [], "any", false, false, false, 647)]), "html", null, true);
                yield "\" 
                                               class=\"btn btn-sm btn-outline-danger btn-view-issue\"
                                               target=\"_blank\">
                                                <i class=\"fas fa-eye me-1\"></i> Voir
                                            </a>
                                        </div>
                                    ";
            } else {
                // line 654
                yield "                                        <span class=\"text-muted small\">
                                            <i class=\"fas fa-check-circle text-success me-1\"></i>Aucun problème
                                        </span>
                                    ";
            }
            // line 658
            yield "                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 661
        yield "                    </tbody>
                    <tfoot class=\"table-light\">
                        <tr>
                            <td colspan=\"5\" class=\"text-end fw-bold fs-6\">Total général</td>
                            <td colspan=\"2\" class=\"text-end\">
                                <span class=\"fs-4 fw-bold text-primary\">";
        // line 666
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "totalAmount", [], "any", false, false, false, 666), 0, ",", " "), "html", null, true);
        yield " FCFA</span>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

        ";
        // line 674
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "notes", [], "any", false, false, false, 674)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 675
            yield "        <div class=\"card shadow-sm border-0 mt-4\">
            <div class=\"card-header bg-white py-3\">
                <h5 class=\"mb-0 fw-semibold\">
                    <i class=\"fas fa-sticky-note me-2 text-primary\"></i>Notes
                </h5>
            </div>
            <div class=\"card-body bg-light\">
                <p class=\"mb-0\">";
            // line 682
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "notes", [], "any", false, false, false, 682), "html", null, true));
            yield "</p>
            </div>
        </div>
        ";
        }
        // line 686
        yield "    </div>
</div>

<!-- Modal annulation -->
<div class=\"modal fade\" id=\"cancelModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-ban me-2\"></i> Annuler la commande
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <form action=\"";
        // line 699
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_cancel", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "id", [], "any", false, false, false, 699)]), "html", null, true);
        yield "\" method=\"POST\">
                <div class=\"modal-body\">
                    <div class=\"alert alert-warning mb-3\">
                        <i class=\"fas fa-exclamation-triangle me-2\"></i>
                        ";
        // line 703
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "supplier", [], "any", false, false, false, 703)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 704
            yield "                            L'annulation enverra une notification au fournisseur.
                        ";
        } else {
            // line 706
            yield "                            Confirmez-vous l'annulation de cet achat interne ?
                        ";
        }
        // line 708
        yield "                    </div>
                    <div class=\"mb-3\">
                        <label for=\"cancelReason\" class=\"form-label fw-bold\">
                            Motif d'annulation <span class=\"text-danger\">*</span>
                        </label>
                        <textarea class=\"form-control\" id=\"cancelReason\" name=\"reason\" rows=\"4\" 
                                  placeholder=\"Veuillez expliquer le motif de l'annulation...\"
                                  required></textarea>
                        <div class=\"form-text\">
                            <i class=\"fas fa-info-circle me-1\"></i>
                            ";
        // line 718
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "supplier", [], "any", false, false, false, 718)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 719
            yield "                                Ce motif sera visible par le fournisseur.
                            ";
        } else {
            // line 721
            yield "                                Ce motif sera enregistré dans l'historique.
                            ";
        }
        // line 723
        yield "                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                    <button type=\"submit\" class=\"btn btn-danger\">Confirmer l'annulation</button>
                </div>
            </form>
        </div>
    </div>
</div>
";
        yield from [];
    }

    // line 736
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 737
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const cards = document.querySelectorAll('.stat-card');
        cards.forEach((card, index) => {
            card.style.animationDelay = (index * 0.1) + 's';
            card.classList.add('animated-card');
        });
    });
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "purchase/show.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  1177 => 737,  1170 => 736,  1154 => 723,  1150 => 721,  1146 => 719,  1144 => 718,  1132 => 708,  1128 => 706,  1124 => 704,  1122 => 703,  1115 => 699,  1100 => 686,  1093 => 682,  1084 => 675,  1082 => 674,  1071 => 666,  1064 => 661,  1056 => 658,  1050 => 654,  1040 => 647,  1034 => 645,  1030 => 643,  1026 => 641,  1024 => 640,  1021 => 639,  1019 => 638,  1016 => 637,  1014 => 636,  1010 => 635,  1007 => 634,  1004 => 633,  1001 => 632,  997 => 629,  993 => 627,  987 => 624,  984 => 623,  982 => 622,  977 => 620,  973 => 619,  969 => 618,  964 => 616,  958 => 612,  952 => 608,  950 => 607,  946 => 606,  943 => 605,  937 => 601,  931 => 598,  926 => 597,  924 => 596,  918 => 592,  915 => 591,  910 => 590,  883 => 564,  875 => 561,  869 => 558,  866 => 557,  864 => 556,  860 => 554,  854 => 550,  850 => 548,  844 => 545,  840 => 544,  833 => 542,  830 => 541,  828 => 540,  824 => 539,  820 => 537,  814 => 533,  807 => 529,  802 => 528,  800 => 527,  797 => 526,  795 => 525,  787 => 520,  781 => 517,  772 => 513,  768 => 512,  765 => 511,  762 => 510,  758 => 509,  739 => 493,  732 => 489,  725 => 484,  718 => 480,  714 => 479,  710 => 477,  707 => 476,  699 => 471,  695 => 470,  688 => 468,  684 => 466,  682 => 465,  678 => 464,  674 => 462,  670 => 460,  664 => 457,  659 => 456,  657 => 455,  640 => 440,  632 => 434,  626 => 431,  620 => 427,  616 => 425,  609 => 421,  604 => 420,  602 => 419,  595 => 414,  591 => 412,  585 => 409,  580 => 408,  578 => 407,  573 => 404,  567 => 401,  564 => 400,  562 => 399,  557 => 398,  555 => 397,  540 => 384,  534 => 381,  527 => 377,  523 => 375,  520 => 374,  514 => 371,  510 => 369,  507 => 368,  501 => 365,  497 => 363,  495 => 362,  490 => 360,  483 => 356,  475 => 351,  471 => 350,  467 => 349,  445 => 331,  434 => 324,  432 => 323,  425 => 320,  417 => 316,  414 => 315,  406 => 311,  404 => 310,  397 => 306,  390 => 302,  382 => 297,  375 => 293,  367 => 288,  357 => 280,  350 => 279,  74 => 7,  67 => 6,  54 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "purchase/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\purchase\\show.html.twig");
    }
}
