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
class __TwigTemplate_a07439101f7b2ef04bee9d94204e9a93 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "purchase/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "purchase/show.html.twig"));

        $this->parent = $this->load("base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Commande ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 4, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 4), "html", null, true);
        yield " - HMA Market";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
    /* ============================================
       VARIABLES GLOBALES
       ============================================ */
    :root {
        --purchase-primary: #0463f1;
        --purchase-primary-dark: #0346b8;
        --purchase-success: #10b981;
        --purchase-warning: #f59e0b;
        --purchase-danger: #ef4444;
        --purchase-info: #3b82f6;
        --purchase-gray-50: #f9fafb;
        --purchase-gray-100: #f3f4f6;
        --purchase-gray-200: #e5e7eb;
        --purchase-gray-500: #6b7280;
        --purchase-gray-700: #374151;
        --purchase-gray-900: #111827;
        --purchase-radius: 1rem;
        --purchase-radius-sm: 0.5rem;
    }

    /* ============================================
       CARTES STATISTIQUES
       ============================================ */
    .stat-card {
        border-radius: var(--purchase-radius);
        transition: all 0.3s ease;
        border: none;
        overflow: hidden;
    }
    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1) !important;
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
        border-left: 2px solid var(--purchase-gray-200);
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
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        z-index: 1;
        transition: all 0.3s ease;
    }
    .timeline-icon i {
        font-size: 1.1rem;
    }
    .timeline-item:hover .timeline-icon {
        transform: scale(1.1);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
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
        white-space: nowrap;
    }
    .btn-pdf {
        padding: 0.4rem 1rem;
        font-size: 0.85rem;
        border-radius: var(--purchase-radius-sm);
        white-space: nowrap;
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
        white-space: nowrap;
    }
    .badge-issue.status-recovered,
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
        white-space: nowrap;
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
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
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
        border-bottom: 1px solid var(--purchase-gray-100);
        gap: 0.5rem;
        flex-wrap: wrap;
    }
    .info-row:last-child {
        border-bottom: none;
    }
    .info-label {
        color: var(--purchase-gray-500);
        font-size: 0.85rem;
        font-weight: 500;
    }
    .info-value {
        font-weight: 600;
        color: var(--purchase-gray-900);
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
        border-radius: var(--purchase-radius-sm);
        flex-shrink: 0;
    }

    /* ============================================
       EMAIL CLIQUABLE
       ============================================ */
    .email-link {
        color: var(--purchase-primary);
        text-decoration: none;
        transition: all 0.2s ease;
        word-break: break-all;
    }
    .email-link:hover {
        color: var(--purchase-primary-dark);
        text-decoration: underline;
    }
    .email-link i {
        font-size: 0.85em;
        margin-left: 0.25rem;
        opacity: 0.6;
    }

    /* ============================================
       CARTES PRODUITS MOBILE (remplace le tableau)
       ============================================ */
    .product-card-mobile {
        border: 1px solid var(--purchase-gray-200);
        border-radius: var(--purchase-radius-sm);
        padding: 0.85rem;
        margin-bottom: 0.75rem;
        background: white;
        transition: all 0.2s ease;
    }
    .product-card-mobile:last-child {
        margin-bottom: 0;
    }
    .product-card-mobile:hover {
        border-color: var(--purchase-primary);
        box-shadow: 0 4px 12px rgba(4, 99, 241, 0.08);
    }
    .product-card-mobile .product-header {
        display: flex;
        gap: 0.75rem;
        align-items: flex-start;
        margin-bottom: 0.75rem;
    }
    .product-card-mobile .product-info {
        flex: 1;
        min-width: 0;
    }
    .product-card-mobile .product-name {
        font-weight: 600;
        color: var(--purchase-gray-900);
        font-size: 0.95rem;
        word-break: break-word;
        line-height: 1.3;
    }
    .product-card-mobile .product-meta {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 0.5rem 1rem;
        padding-top: 0.75rem;
        border-top: 1px dashed var(--purchase-gray-200);
        font-size: 0.85rem;
    }
    .product-card-mobile .meta-item {
        display: flex;
        flex-direction: column;
        gap: 0.15rem;
    }
    .product-card-mobile .meta-label {
        font-size: 0.7rem;
        text-transform: uppercase;
        letter-spacing: 0.03em;
        color: var(--purchase-gray-500);
        font-weight: 500;
    }
    .product-card-mobile .meta-value {
        font-weight: 600;
        color: var(--purchase-gray-900);
        word-break: break-word;
    }
    .product-card-mobile .meta-value.total {
        color: var(--purchase-primary);
    }
    .product-card-mobile .product-footer {
        margin-top: 0.75rem;
        padding-top: 0.75rem;
        border-top: 1px solid var(--purchase-gray-100);
        display: flex;
        flex-wrap: wrap;
        gap: 0.5rem;
        align-items: center;
        justify-content: space-between;
    }

    /* ============================================
       EN-TÊTE ACTIONS MOBILE
       ============================================ */
    .action-buttons-desktop {
        display: flex;
        gap: 0.5rem;
        flex-wrap: wrap;
    }
    .action-buttons-mobile {
        display: none;
        gap: 0.5rem;
        flex-wrap: wrap;
        width: 100%;
    }
    .action-buttons-mobile .btn {
        flex: 1 1 calc(50% - 0.25rem);
        min-width: 0;
        padding: 0.5rem 0.75rem;
        font-size: 0.8rem;
    }

    /* ============================================
       TABS MOBILE POUR LES CARTES
       ============================================ */
    .mobile-card-tabs {
        display: none;
        border-bottom: 1px solid var(--purchase-gray-200);
        margin-bottom: 1rem;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        scrollbar-width: none;
    }
    .mobile-card-tabs::-webkit-scrollbar {
        display: none;
    }
    .mobile-card-tabs .tab-btn {
        padding: 0.65rem 1rem;
        border: none;
        background: transparent;
        color: var(--purchase-gray-500);
        font-weight: 500;
        font-size: 0.85rem;
        white-space: nowrap;
        cursor: pointer;
        border-bottom: 2px solid transparent;
        transition: all 0.2s ease;
    }
    .mobile-card-tabs .tab-btn.active {
        color: var(--purchase-primary);
        border-bottom-color: var(--purchase-primary);
    }

    /* ============================================
       RESPONSIVE MOBILE
       ============================================ */
    @media (max-width: 991.98px) {
        .table-responsive {
            display: none;
        }
        .products-mobile-container {
            display: block !important;
        }
    }

    @media (max-width: 768px) {
        /* Timeline */
        .timeline-item {
            padding-left: 2.75rem;
            margin-left: 0.75rem;
            padding-bottom: 1.5rem;
        }
        .timeline-icon {
            width: 2.2rem;
            height: 2.2rem;
            left: -1.1rem;
        }
        .timeline-icon i {
            font-size: 0.9rem;
        }
        .timeline-content .fs-6 {
            font-size: 0.9rem !important;
        }

        /* Avatars */
        .user-avatar-lg {
            width: 55px;
            height: 55px;
        }

        /* Boutons */
        .btn-pdf {
            padding: 0.35rem 0.75rem;
            font-size: 0.78rem;
        }

        /* Info rows */
        .info-row {
            flex-direction: column;
            align-items: flex-start;
            padding: 0.5rem 0;
        }
        .info-value {
            text-align: left;
            width: 100%;
        }

        /* Titres */
        h1.h2 {
            font-size: 1.15rem;
            line-height: 1.3;
        }
        .fs-2 {
            font-size: 1.3rem !important;
        }

        /* En-tête actions : passer en mode mobile */
        .action-buttons-desktop {
            display: none;
        }
        .action-buttons-mobile {
            display: flex;
        }

        /* Cartes statistiques : masquer l'onglet actif */
        .mobile-card-tabs {
            display: flex;
        }

        /* Container cartes : afficher une seule carte à la fois */
        .cards-stack-mobile .col-12 {
            display: none;
        }
        .cards-stack-mobile .col-12.active {
            display: block;
            animation: fadeInUp 0.3s ease-out both;
        }

        /* Cartes statistiques */
        .stat-card:hover {
            transform: none;
        }

        /* BREADCRUMB */
        .breadcrumb {
            font-size: 0.78rem;
            flex-wrap: wrap;
        }
        .breadcrumb-item {
            word-break: break-word;
        }
    }

    @media (max-width: 480px) {
        .container-fluid {
            padding-left: 0.65rem;
            padding-right: 0.65rem;
        }
        .timeline-item {
            padding-left: 2.5rem;
            margin-left: 0.5rem;
        }
        .timeline-icon {
            width: 2rem;
            height: 2rem;
            left: -1rem;
        }
        .timeline-icon i {
            font-size: 0.8rem;
        }
        .user-avatar-lg {
            width: 48px;
            height: 48px;
        }
        .user-avatar-lg i {
            font-size: 1.2rem !important;
        }
        .product-card-mobile .product-meta {
            grid-template-columns: 1fr;
        }
        .badge-status {
            font-size: 0.75rem;
            padding: 0.35rem 0.75rem;
        }
        h1.h2 {
            font-size: 1rem;
        }
        .btn-pdf {
            font-size: 0.72rem;
            padding: 0.3rem 0.6rem;
        }
        .timeline-content .d-flex {
            flex-direction: column;
            align-items: flex-start !important;
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
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 501
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 502
        yield "<div class=\"container-fluid py-4\">
    <div class=\"animated-card\">
        <!-- ==============================
             EN-TÊTE
             ============================== -->
        <div class=\"d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-4 gap-3\">
            <div class=\"w-100\">
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb mb-2\">
                        <li class=\"breadcrumb-item\">
                            <a href=\"";
        // line 512
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-decoration-none\">
                                <i class=\"fas fa-tachometer-alt me-1\"></i>
                                <span class=\"d-none d-sm-inline\">Tableau de bord</span>
                                <span class=\"d-inline d-sm-none\">Accueil</span>
                            </a>
                        </li>
                        <li class=\"breadcrumb-item\">
                            <a href=\"";
        // line 519
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_index");
        yield "\" class=\"text-decoration-none\">
                                <i class=\"fas fa-shopping-cart me-1\"></i> Commandes
                            </a>
                        </li>
                        <li class=\"breadcrumb-item active\">";
        // line 523
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 523, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 523), "html", null, true);
        yield "</li>
                    </ol>
                </nav>
                <h1 class=\"h2 mb-0 fw-bold\">
                    <i class=\"fas fa-receipt text-primary me-2\"></i>
                    <span class=\"d-none d-sm-inline\">Commande</span>
                    <span class=\"d-inline d-sm-none\">Cmd</span>
                    ";
        // line 530
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 530, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 530), "html", null, true);
        yield "
                </h1>
                <p class=\"text-muted mt-1 mb-0\">
                    <i class=\"fas fa-calendar-alt me-1\"></i>
                    Créée le ";
        // line 534
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 534, $this->source); })()), "createdAt", [], "any", false, false, false, 534), "d/m/Y à H:i"), "html", null, true);
        yield "
                </p>
            </div>

            ";
        // line 539
        yield "            <div class=\"action-buttons-desktop\">
                ";
        // line 540
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 540, $this->source); })()), "bonCommande", [], "any", false, false, false, 540)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 541
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/bons-commande/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 541, $this->source); })()), "bonCommande", [], "any", false, false, false, 541))), "html", null, true);
            yield "\" target=\"_blank\" class=\"btn btn-outline-primary btn-pdf\">
                        <i class=\"fas fa-file-pdf me-1\"></i> Bon de commande
                    </a>
                ";
        }
        // line 545
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 545, $this->source); })()), "recuAchat", [], "any", false, false, false, 545)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 546
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/recus-achat/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 546, $this->source); })()), "recuAchat", [], "any", false, false, false, 546))), "html", null, true);
            yield "\" target=\"_blank\" class=\"btn btn-outline-success btn-pdf\">
                        <i class=\"fas fa-file-pdf me-1\"></i> Reçu d'achat
                    </a>
                ";
        }
        // line 550
        yield "                <a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_print", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 550, $this->source); })()), "id", [], "any", false, false, false, 550)]), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary btn-pdf\" target=\"_blank\">
                    <i class=\"fas fa-print me-1\"></i> Imprimer
                </a>
                ";
        // line 553
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 553, $this->source); })()), "status", [], "any", false, false, false, 553) == "confirmed")) {
            // line 554
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_receive", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 554, $this->source); })()), "id", [], "any", false, false, false, 554)]), "html", null, true);
            yield "\" class=\"btn btn-success btn-pdf\">
                        <i class=\"fas fa-box-open me-1\"></i> Réceptionner
                    </a>
                    <button type=\"button\" class=\"btn btn-outline-danger btn-pdf\" data-bs-toggle=\"modal\" data-bs-target=\"#cancelModal\">
                        <i class=\"fas fa-ban me-1\"></i> Annuler
                    </button>
                ";
        }
        // line 561
        yield "                <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_index");
        yield "\" class=\"btn btn-outline-secondary btn-pdf\">
                    <i class=\"fas fa-arrow-left me-1\"></i> Retour
                </a>
            </div>

            ";
        // line 567
        yield "            <div class=\"action-buttons-mobile\">
                ";
        // line 568
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 568, $this->source); })()), "bonCommande", [], "any", false, false, false, 568)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 569
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/bons-commande/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 569, $this->source); })()), "bonCommande", [], "any", false, false, false, 569))), "html", null, true);
            yield "\" target=\"_blank\" class=\"btn btn-outline-primary btn-pdf\">
                        <i class=\"fas fa-file-pdf me-1\"></i> Bon
                    </a>
                ";
        }
        // line 573
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 573, $this->source); })()), "recuAchat", [], "any", false, false, false, 573)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 574
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/recus-achat/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 574, $this->source); })()), "recuAchat", [], "any", false, false, false, 574))), "html", null, true);
            yield "\" target=\"_blank\" class=\"btn btn-outline-success btn-pdf\">
                        <i class=\"fas fa-file-pdf me-1\"></i> Reçu
                    </a>
                ";
        }
        // line 578
        yield "                <a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_print", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 578, $this->source); })()), "id", [], "any", false, false, false, 578)]), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary btn-pdf\" target=\"_blank\">
                    <i class=\"fas fa-print me-1\"></i> Imprimer
                </a>
                ";
        // line 581
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 581, $this->source); })()), "status", [], "any", false, false, false, 581) == "confirmed")) {
            // line 582
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_receive", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 582, $this->source); })()), "id", [], "any", false, false, false, 582)]), "html", null, true);
            yield "\" class=\"btn btn-success btn-pdf\">
                        <i class=\"fas fa-box-open me-1\"></i> Réception
                    </a>
                    <button type=\"button\" class=\"btn btn-outline-danger btn-pdf\" data-bs-toggle=\"modal\" data-bs-target=\"#cancelModal\">
                        <i class=\"fas fa-ban me-1\"></i> Annuler
                    </button>
                ";
        }
        // line 589
        yield "                <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_index");
        yield "\" class=\"btn btn-outline-secondary btn-pdf\">
                    <i class=\"fas fa-arrow-left me-1\"></i> Retour
                </a>
            </div>
        </div>

        <!-- ==============================
             TABS MOBILE (navigation entre les 3 cartes)
             ============================== -->
        <div class=\"mobile-card-tabs\">
            <button type=\"button\" class=\"tab-btn active\" data-tab=\"general\">
                <i class=\"fas fa-info-circle me-1\"></i> Général
            </button>
            <button type=\"button\" class=\"tab-btn\" data-tab=\"supplier\">
                <i class=\"fas fa-truck me-1\"></i> Fournisseur
            </button>
            <button type=\"button\" class=\"tab-btn\" data-tab=\"creator\">
                <i class=\"fas fa-user-circle me-1\"></i> Créateur
            </button>
        </div>

        <!-- ==============================
             CARTES PRINCIPALES
             ============================== -->
        <div class=\"row g-4 mb-4 cards-stack-mobile\">
            <!-- Informations générales -->
            <div class=\"col-12 col-md-6 col-lg-4 active\" data-card=\"general\">
                <div class=\"card stat-card shadow-sm h-100\">
                    <div class=\"card-header bg-white py-3 border-0\">
                        <h5 class=\"mb-0 fw-semibold\">
                            <i class=\"fas fa-info-circle text-primary me-2\"></i>Informations générales
                        </h5>
                    </div>
                    <div class=\"card-body pt-0\">
                        <div class=\"d-flex justify-content-between align-items-center mb-3\">
                            <span class=\"badge ";
        // line 624
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 624, $this->source); })()), "statusBadgeClass", [], "any", false, false, false, 624), "html", null, true);
        yield " badge-status\">
                                <i class=\"fas ";
        // line 625
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 625, $this->source); })()), "statusIcon", [], "any", false, false, false, 625), "html", null, true);
        yield " me-1\"></i>
                                ";
        // line 626
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 626, $this->source); })()), "statusLabel", [], "any", false, false, false, 626), "html", null, true);
        yield "
                            </span>
                        </div>
                        <div class=\"info-row\">
                            <span class=\"info-label\">N° commande</span>
                            <span class=\"info-value\">";
        // line 631
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 631, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 631), "html", null, true);
        yield "</span>
                        </div>
                        <div class=\"info-row\">
                            <span class=\"info-label\">Date création</span>
                            <span class=\"info-value\">";
        // line 635
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 635, $this->source); })()), "createdAt", [], "any", false, false, false, 635), "d/m/Y H:i"), "html", null, true);
        yield "</span>
                        </div>
                        ";
        // line 637
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 637, $this->source); })()), "confirmedAt", [], "any", false, false, false, 637)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 638
            yield "                        <div class=\"info-row\">
                            <span class=\"info-label\">Date confirmation</span>
                            <span class=\"info-value text-success\">";
            // line 640
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 640, $this->source); })()), "confirmedAt", [], "any", false, false, false, 640), "d/m/Y H:i"), "html", null, true);
            yield "</span>
                        </div>
                        ";
        }
        // line 643
        yield "                        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 643, $this->source); })()), "receivedAt", [], "any", false, false, false, 643)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 644
            yield "                        <div class=\"info-row\">
                            <span class=\"info-label\">Date réception</span>
                            <span class=\"info-value text-info\">";
            // line 646
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 646, $this->source); })()), "receivedAt", [], "any", false, false, false, 646), "d/m/Y H:i"), "html", null, true);
            yield "</span>
                        </div>
                        ";
        }
        // line 649
        yield "                        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 649, $this->source); })()), "cancelledAt", [], "any", false, false, false, 649)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 650
            yield "                        <div class=\"info-row\">
                            <span class=\"info-label\">Date annulation</span>
                            <span class=\"info-value text-danger\">";
            // line 652
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 652, $this->source); })()), "cancelledAt", [], "any", false, false, false, 652), "d/m/Y H:i"), "html", null, true);
            yield "</span>
                        </div>
                        <div class=\"info-row\">
                            <span class=\"info-label\">Motif annulation</span>
                            <span class=\"info-value text-danger\">";
            // line 656
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 656, $this->source); })()), "cancellationReason", [], "any", false, false, false, 656), "html", null, true);
            yield "</span>
                        </div>
                        ";
        }
        // line 659
        yield "                    </div>
                </div>
            </div>

            <!-- Fournisseur (optionnel) -->
            <div class=\"col-12 col-md-6 col-lg-4\" data-card=\"supplier\">
                <div class=\"card stat-card shadow-sm h-100\">
                    <div class=\"card-header bg-white py-3 border-0\">
                        <h5 class=\"mb-0 fw-semibold\">
                            <i class=\"fas fa-truck text-primary me-2\"></i>Fournisseur
                        </h5>
                    </div>
                    <div class=\"card-body pt-0\">
                        ";
        // line 672
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 672, $this->source); })()), "supplier", [], "any", false, false, false, 672)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 673
            yield "                            <h6 class=\"fw-bold mb-2\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 673, $this->source); })()), "supplier", [], "any", false, false, false, 673), "name", [], "any", false, false, false, 673), "html", null, true);
            yield "</h6>
                            ";
            // line 674
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 674, $this->source); })()), "supplier", [], "any", false, false, false, 674), "contactPerson", [], "any", false, false, false, 674)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 675
                yield "                                <p class=\"text-muted small mb-2\">
                                    <i class=\"fas fa-user me-1\"></i> ";
                // line 676
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 676, $this->source); })()), "supplier", [], "any", false, false, false, 676), "contactPerson", [], "any", false, false, false, 676), "html", null, true);
                yield "
                                </p>
                            ";
            }
            // line 679
            yield "                            <div class=\"info-row\">
                                <span class=\"info-label\">Téléphone</span>
                                <span class=\"info-value\">
                                    ";
            // line 682
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 682, $this->source); })()), "supplier", [], "any", false, false, false, 682), "phone", [], "any", false, false, false, 682)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 683
                yield "                                        <a href=\"tel:";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 683, $this->source); })()), "supplier", [], "any", false, false, false, 683), "phone", [], "any", false, false, false, 683), "html", null, true);
                yield "\" class=\"email-link\">
                                            ";
                // line 684
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 684, $this->source); })()), "supplier", [], "any", false, false, false, 684), "phone", [], "any", false, false, false, 684), "html", null, true);
                yield "
                                        </a>
                                    ";
            } else {
                // line 687
                yield "                                        —
                                    ";
            }
            // line 689
            yield "                                </span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Email</span>
                                <span class=\"info-value small\">
                                    ";
            // line 694
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 694, $this->source); })()), "supplier", [], "any", false, false, false, 694), "email", [], "any", false, false, false, 694)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 695
                yield "                                        <a href=\"mailto:";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 695, $this->source); })()), "supplier", [], "any", false, false, false, 695), "email", [], "any", false, false, false, 695), "html", null, true);
                yield "\" class=\"email-link\">
                                            ";
                // line 696
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 696, $this->source); })()), "supplier", [], "any", false, false, false, 696), "email", [], "any", false, false, false, 696), "html", null, true);
                yield "
                                            <i class=\"fas fa-external-link-alt\"></i>
                                        </a>
                                    ";
            } else {
                // line 700
                yield "                                        —
                                    ";
            }
            // line 702
            yield "                                </span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Adresse</span>
                                <span class=\"info-value small\">";
            // line 706
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "supplier", [], "any", false, true, false, 706), "adress", [], "any", true, true, false, 706)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 706, $this->source); })()), "supplier", [], "any", false, false, false, 706), "adress", [], "any", false, false, false, 706), "—")) : ("—")), "html", null, true);
            yield "</span>
                            </div>
                        ";
        } else {
            // line 709
            yield "                            <div class=\"text-center text-muted py-4\">
                                <i class=\"fas fa-building fa-3x mb-3 opacity-50\"></i>
                                <h6 class=\"mb-1\">Achat interne</h6>
                                <p class=\"small mb-0\">Aucun fournisseur associé à cette commande</p>
                            </div>
                        ";
        }
        // line 715
        yield "                    </div>
                </div>
            </div>

            <!-- Créateur -->
            <div class=\"col-12 col-md-12 col-lg-4\" data-card=\"creator\">
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
        // line 730
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 730, $this->source); })()), "user", [], "any", false, false, false, 730), "photo", [], "any", false, false, false, 730)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 731
            yield "                                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 731, $this->source); })()), "user", [], "any", false, false, false, 731), "photo", [], "any", false, false, false, 731))), "html", null, true);
            yield "\" 
                                         alt=\"";
            // line 732
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 732, $this->source); })()), "user", [], "any", false, false, false, 732), "fullName", [], "any", false, false, false, 732), "html", null, true);
            yield "\"
                                         onerror=\"this.style.display='none'; this.parentElement.innerHTML='<i class=&quot;fas fa-user fa-2x&quot;></i>';\">
                                ";
        } else {
            // line 735
            yield "                                    <i class=\"fas fa-user fa-2x\"></i>
                                ";
        }
        // line 737
        yield "                            </div>
                            <div class=\"flex-grow-1\" style=\"min-width: 0;\">
                                <div class=\"fw-bold fs-5 text-truncate\">";
        // line 739
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 739, $this->source); })()), "user", [], "any", false, false, false, 739), "fullName", [], "any", false, false, false, 739), "html", null, true);
        yield "</div>
                                ";
        // line 740
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 740, $this->source); })()), "user", [], "any", false, false, false, 740), "email", [], "any", false, false, false, 740)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 741
            yield "                                    <div class=\"small text-muted text-truncate\">
                                        <i class=\"fas fa-envelope me-1\"></i>
                                        <a href=\"mailto:";
            // line 743
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 743, $this->source); })()), "user", [], "any", false, false, false, 743), "email", [], "any", false, false, false, 743), "html", null, true);
            yield "?subject=À propos de la commande ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 743, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 743), "html", null, true);
            yield "\" 
                                           class=\"email-link\"
                                           title=\"Envoyer un email à ";
            // line 745
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 745, $this->source); })()), "user", [], "any", false, false, false, 745), "fullName", [], "any", false, false, false, 745), "html", null, true);
            yield "\">
                                            ";
            // line 746
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 746, $this->source); })()), "user", [], "any", false, false, false, 746), "email", [], "any", false, false, false, 746), "html", null, true);
            yield "
                                            <i class=\"fas fa-external-link-alt\"></i>
                                        </a>
                                    </div>
                                ";
        }
        // line 751
        yield "                                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 751, $this->source); })()), "user", [], "any", false, false, false, 751), "phone", [], "any", false, false, false, 751)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 752
            yield "                                    <div class=\"small text-muted\">
                                        <i class=\"fas fa-phone me-1\"></i>
                                        <a href=\"tel:";
            // line 754
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 754, $this->source); })()), "user", [], "any", false, false, false, 754), "phone", [], "any", false, false, false, 754), "html", null, true);
            yield "\" class=\"email-link\">
                                            ";
            // line 755
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 755, $this->source); })()), "user", [], "any", false, false, false, 755), "phone", [], "any", false, false, false, 755), "html", null, true);
            yield "
                                        </a>
                                    </div>
                                ";
        }
        // line 759
        yield "                            </div>
                        </div>
                        <hr>
                        <div class=\"d-flex justify-content-between align-items-center flex-wrap gap-2\">
                            <span class=\"text-muted\">Total commande</span>
                            <span class=\"fs-2 fw-bold text-primary\">";
        // line 764
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 764, $this->source); })()), "totalAmount", [], "any", false, false, false, 764), 0, ",", " "), "html", null, true);
        yield " FCFA</span>
                        </div>
                        <div class=\"text-muted small mt-1\">
                            <i class=\"fas fa-box me-1\"></i>
                            ";
        // line 768
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 768, $this->source); })()), "purchaseItems", [], "any", false, false, false, 768)), "html", null, true);
        yield " produit(s) commandé(s)
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ==============================
             HISTORIQUE DES STATUTS
             ============================== -->
        <div class=\"card shadow-sm border-0 mb-4\">
            <div class=\"card-header bg-white py-3\">
                <h5 class=\"mb-0 fw-semibold\">
                    <i class=\"fas fa-history me-2 text-primary\"></i>Historique des statuts
                </h5>
            </div>
            <div class=\"card-body\">
                <div class=\"timeline\">
                    ";
        // line 786
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 786, $this->source); })()), "statusHistory", [], "any", false, false, false, 786));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 787
            yield "                        ";
            $context["statusColor"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 787) == "Création")) ? ("primary") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 787) == "Confirmation")) ? ("success") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 787) == "Réception")) ? ("info") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 787) == "Annulation")) ? ("danger") : ("secondary"))))))));
            // line 788
            yield "                        <div class=\"timeline-item\">
                            <div class=\"timeline-icon bg-white border border-";
            // line 789
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statusColor"]) || array_key_exists("statusColor", $context) ? $context["statusColor"] : (function () { throw new RuntimeError('Variable "statusColor" does not exist.', 789, $this->source); })()), "html", null, true);
            yield " shadow-sm\">
                                <i class=\"fas ";
            // line 790
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 790) == "Création")) ? ("fa-plus-circle") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 790) == "Confirmation")) ? ("fa-check-circle") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 790) == "Réception")) ? ("fa-box-open") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 790) == "Annulation")) ? ("fa-ban") : ("fa-edit"))))))));
            yield " text-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statusColor"]) || array_key_exists("statusColor", $context) ? $context["statusColor"] : (function () { throw new RuntimeError('Variable "statusColor" does not exist.', 790, $this->source); })()), "html", null, true);
            yield "\"></i>
                            </div>
                            <div class=\"timeline-content\">
                                <div class=\"d-flex flex-wrap justify-content-between align-items-start gap-2\">
                                    <strong class=\"fs-6\">";
            // line 794
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 794), "html", null, true);
            yield "</strong>
                                    <small class=\"text-muted\">
                                        <i class=\"far fa-clock me-1\"></i>
                                        ";
            // line 797
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "date", [], "any", false, false, false, 797), "d/m/Y H:i"), "html", null, true);
            yield "
                                    </small>
                                </div>

                                <div class=\"d-flex align-items-center gap-2 mt-2 flex-wrap\">
                                    ";
            // line 802
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["event"], "by", [], "any", false, false, false, 802)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 803
                yield "                                        <div class=\"user-avatar-sm\" style=\"width: 32px; height: 32px; border-radius: 50%; overflow: hidden; flex-shrink: 0; border: 2px solid #fff; box-shadow: 0 2px 6px rgba(0,0,0,0.1);\">
                                            ";
                // line 804
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "by", [], "any", false, false, false, 804), "photo", [], "any", false, false, false, 804)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 805
                    yield "                                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "by", [], "any", false, false, false, 805), "photo", [], "any", false, false, false, 805))), "html", null, true);
                    yield "\" 
                                                     alt=\"";
                    // line 806
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "by", [], "any", false, false, false, 806), "fullName", [], "any", false, false, false, 806), "html", null, true);
                    yield "\"
                                                     style=\"width: 100%; height: 100%; object-fit: cover;\"
                                                     onerror=\"this.style.display='none'; this.parentElement.innerHTML='<div style=&quot;width:100%;height:100%;background:linear-gradient(135deg, #667eea 0%, #0463f1 100%);display:flex;align-items:center;justify-content:center;color:white;font-size:0.8rem;&quot;><i class=&quot;fas fa-user&quot;></i></div>';\">
                                            ";
                } else {
                    // line 810
                    yield "                                                <div style=\"width: 100%; height: 100%; background: linear-gradient(135deg, #667eea 0%, #0463f1 100%); display: flex; align-items: center; justify-content: center; color: white; font-size: 0.8rem;\">
                                                    <i class=\"fas fa-user\"></i>
                                                </div>
                                            ";
                }
                // line 814
                yield "                                        </div>
                                        <div class=\"small text-muted\">
                                            <span class=\"fw-medium\">";
                // line 816
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "by", [], "any", false, false, false, 816), "fullName", [], "any", false, false, false, 816), "html", null, true);
                yield "</span>
                                            ";
                // line 817
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "by", [], "any", false, false, false, 817), "email", [], "any", false, false, false, 817)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 818
                    yield "                                                <span class=\"text-muted mx-1\">•</span>
                                                <a href=\"mailto:";
                    // line 819
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "by", [], "any", false, false, false, 819), "email", [], "any", false, false, false, 819), "html", null, true);
                    yield "?subject=À propos de la commande ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 819, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 819), "html", null, true);
                    yield "\" 
                                                   class=\"email-link small\"
                                                   title=\"Envoyer un email à ";
                    // line 821
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "by", [], "any", false, false, false, 821), "fullName", [], "any", false, false, false, 821), "html", null, true);
                    yield "\">
                                                    <i class=\"fas fa-envelope me-1\"></i><span class=\"d-none d-sm-inline\">";
                    // line 822
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "by", [], "any", false, false, false, 822), "email", [], "any", false, false, false, 822), "html", null, true);
                    yield "</span>
                                                </a>
                                            ";
                }
                // line 825
                yield "                                        </div>
                                    ";
            } else {
                // line 827
                yield "                                        <div class=\"small text-muted\">
                                            <i class=\"fas fa-robot me-1\"></i> Système
                                        </div>
                                    ";
            }
            // line 831
            yield "                                </div>

                                ";
            // line 833
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "reason", [], "any", true, true, false, 833) && CoreExtension::getAttribute($this->env, $this->source, $context["event"], "reason", [], "any", false, false, false, 833))) {
                // line 834
                yield "                                    <div class=\"small text-danger mt-2 p-2\" style=\"background: #fef2f2; border-radius: 6px;\">
                                        <i class=\"fas fa-comment me-1\"></i> <strong>Motif :</strong> ";
                // line 835
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "reason", [], "any", false, false, false, 835), "html", null, true);
                yield "
                                    </div>
                                ";
            }
            // line 838
            yield "                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 841
        yield "                </div>
            </div>
        </div>

        <!-- ==============================
             PRODUITS COMMANDÉS
             ============================== -->
        <div class=\"card shadow-sm border-0\">
            <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center flex-wrap gap-2\">
                <h5 class=\"mb-0 fw-semibold\">
                    <i class=\"fas fa-boxes me-2 text-primary\"></i>Produits commandés
                </h5>
                <span class=\"badge bg-primary\">";
        // line 853
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 853, $this->source); })()), "purchaseItems", [], "any", false, false, false, 853)), "html", null, true);
        yield " article(s)</span>
            </div>

            ";
        // line 857
        yield "            <div class=\"table-responsive\">
                <table class=\"table table-hover mb-0 align-middle\">
                    <thead class=\"table-light\">
                        <tr>
                            <th style=\"width: 30%\">Produit</th>
                            <th style=\"width: 12%\" class=\"d-none d-md-table-cell\">Code-barres</th>
                            <th style=\"width: 8%\" class=\"text-center\">Qté</th>
                            <th style=\"width: 12%\" class=\"text-end\">P.U.</th>
                            <th style=\"width: 12%\" class=\"text-end\">Total</th>
                            <th style=\"width: 13%\" class=\"d-none d-lg-table-cell\">Lot</th>
                            <th style=\"width: 13%\">Problème</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 871
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 871, $this->source); })()), "purchaseItems", [], "any", false, false, false, 871));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 872
            yield "                            ";
            $context["creditNote"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["creditNotesByItemId"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 872), [], "array", true, true, false, 872) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNotesByItemId"]) || array_key_exists("creditNotesByItemId", $context) ? $context["creditNotesByItemId"] : (function () { throw new RuntimeError('Variable "creditNotesByItemId" does not exist.', 872, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 872), [], "array", false, false, false, 872)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNotesByItemId"]) || array_key_exists("creditNotesByItemId", $context) ? $context["creditNotesByItemId"] : (function () { throw new RuntimeError('Variable "creditNotesByItemId" does not exist.', 872, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 872), [], "array", false, false, false, 872)) : (null));
            // line 873
            yield "                            <tr>
                                <td>
                                    <div class=\"d-flex align-items-center\">
                                        ";
            // line 876
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 876), "image", [], "any", false, false, false, 876) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 876), "image", [], "any", false, false, false, 876) != "default-product.png"))) {
                // line 877
                yield "                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 877), "image", [], "any", false, false, false, 877))), "html", null, true);
                yield "\" 
                                                 alt=\"";
                // line 878
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 878), "name", [], "any", false, false, false, 878), "html", null, true);
                yield "\"
                                                 class=\"table-product-img me-2\">
                                        ";
            } else {
                // line 881
                yield "                                            <div class=\"table-product-img bg-light d-flex align-items-center justify-content-center me-2\">
                                                <i class=\"fas fa-box text-secondary\"></i>
                                            </div>
                                        ";
            }
            // line 885
            yield "                                        <div>
                                            <div class=\"fw-semibold\">";
            // line 886
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 886), "name", [], "any", false, false, false, 886), "html", null, true);
            yield "</div>
                                            ";
            // line 887
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 887), "hasExpiryDate", [], "any", false, false, false, 887)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 888
                yield "                                                <span class=\"badge bg-warning text-dark mt-1\">
                                                    <i class=\"fas fa-calendar-alt me-1\"></i>Périssable
                                                </span>
                                            ";
            }
            // line 892
            yield "                                        </div>
                                    </div>
                                </td>
                                <td class=\"d-none d-md-table-cell\">
                                    <code class=\"small\">";
            // line 896
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 896), "barcode", [], "any", false, false, false, 896), "html", null, true);
            yield "</code>
                                </td>
                                <td class=\"text-center\">";
            // line 898
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 898), "html", null, true);
            yield "</td>
                                <td class=\"text-end\">";
            // line 899
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 899), 0, ",", " "), "html", null, true);
            yield " FCFA</td>
                                <td class=\"text-end fw-bold text-primary\">";
            // line 900
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "totalPrice", [], "any", false, false, false, 900), 0, ",", " "), "html", null, true);
            yield " FCFA</td>
                                <td class=\"d-none d-lg-table-cell\">
                                    ";
            // line 902
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "batchNumber", [], "any", false, false, false, 902)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 903
                yield "                                        <span class=\"badge bg-secondary\">
                                            <i class=\"fas fa-tag me-1\"></i>";
                // line 904
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "batchNumber", [], "any", false, false, false, 904), "html", null, true);
                yield "
                                        </span>
                                    ";
            } else {
                // line 907
                yield "                                        <span class=\"text-muted\">—</span>
                                    ";
            }
            // line 909
            yield "                                </td>
                                <td>
                                    ";
            // line 911
            if ((($tmp = (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 911, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 912
                yield "                                        ";
                $context["statusClass"] = ("status-" . Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 912, $this->source); })()), "status", [], "any", false, false, false, 912)));
                // line 913
                yield "                                        <div class=\"d-flex align-items-center gap-2 flex-wrap\">
                                            <span class=\"badge-issue ";
                // line 914
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statusClass"]) || array_key_exists("statusClass", $context) ? $context["statusClass"] : (function () { throw new RuntimeError('Variable "statusClass" does not exist.', 914, $this->source); })()), "html", null, true);
                yield "\">
                                                ";
                // line 915
                if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 915, $this->source); })()), "status", [], "any", false, false, false, 915), ["recovered", "resolved"])) {
                    // line 916
                    yield "                                                    <i class=\"fas fa-check-circle\"></i>
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 917
(isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 917, $this->source); })()), "status", [], "any", false, false, false, 917) == "pending")) {
                    // line 918
                    yield "                                                    <i class=\"fas fa-clock\"></i>
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 919
(isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 919, $this->source); })()), "status", [], "any", false, false, false, 919) == "rejected")) {
                    // line 920
                    yield "                                                    <i class=\"fas fa-times-circle\"></i>
                                                ";
                } else {
                    // line 922
                    yield "                                                    <i class=\"fas fa-exclamation-triangle\"></i>
                                                ";
                }
                // line 924
                yield "                                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 924, $this->source); })()), "status", [], "any", false, false, false, 924), ["_" => " "])), "html", null, true);
                yield "
                                            </span>
                                            <a href=\"";
                // line 926
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 926, $this->source); })()), "id", [], "any", false, false, false, 926)]), "html", null, true);
                yield "\" 
                                               class=\"btn btn-sm btn-outline-danger btn-view-issue\"
                                               target=\"_blank\">
                                                <i class=\"fas fa-eye me-1\"></i> Voir
                                            </a>
                                        </div>
                                    ";
            } else {
                // line 933
                yield "                                        <span class=\"text-muted small\">
                                            <i class=\"fas fa-check-circle text-success me-1\"></i>Aucun problème
                                        </span>
                                    ";
            }
            // line 937
            yield "                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 940
        yield "                    </tbody>
                    <tfoot class=\"table-light\">
                        <tr>
                            <td colspan=\"5\" class=\"text-end fw-bold fs-6\">Total général</td>
                            <td colspan=\"2\" class=\"text-end\">
                                <span class=\"fs-4 fw-bold text-primary\">";
        // line 945
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 945, $this->source); })()), "totalAmount", [], "any", false, false, false, 945), 0, ",", " "), "html", null, true);
        yield " FCFA</span>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>

            ";
        // line 953
        yield "            <div class=\"products-mobile-container p-3\" style=\"display: none;\">
                ";
        // line 954
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 954, $this->source); })()), "purchaseItems", [], "any", false, false, false, 954));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 955
            yield "                    ";
            $context["creditNote"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["creditNotesByItemId"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 955), [], "array", true, true, false, 955) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNotesByItemId"]) || array_key_exists("creditNotesByItemId", $context) ? $context["creditNotesByItemId"] : (function () { throw new RuntimeError('Variable "creditNotesByItemId" does not exist.', 955, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 955), [], "array", false, false, false, 955)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNotesByItemId"]) || array_key_exists("creditNotesByItemId", $context) ? $context["creditNotesByItemId"] : (function () { throw new RuntimeError('Variable "creditNotesByItemId" does not exist.', 955, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 955), [], "array", false, false, false, 955)) : (null));
            // line 956
            yield "                    <div class=\"product-card-mobile\">
                        <div class=\"product-header\">
                            ";
            // line 958
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 958), "image", [], "any", false, false, false, 958) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 958), "image", [], "any", false, false, false, 958) != "default-product.png"))) {
                // line 959
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 959), "image", [], "any", false, false, false, 959))), "html", null, true);
                yield "\" 
                                     alt=\"";
                // line 960
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 960), "name", [], "any", false, false, false, 960), "html", null, true);
                yield "\"
                                     class=\"table-product-img\">
                            ";
            } else {
                // line 963
                yield "                                <div class=\"table-product-img bg-light d-flex align-items-center justify-content-center\">
                                    <i class=\"fas fa-box text-secondary\"></i>
                                </div>
                            ";
            }
            // line 967
            yield "                            <div class=\"product-info\">
                                <div class=\"product-name\">";
            // line 968
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 968), "name", [], "any", false, false, false, 968), "html", null, true);
            yield "</div>
                                <div class=\"mt-1 d-flex flex-wrap gap-1\">
                                    ";
            // line 970
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 970), "barcode", [], "any", false, false, false, 970)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 971
                yield "                                        <code class=\"small\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 971), "barcode", [], "any", false, false, false, 971), "html", null, true);
                yield "</code>
                                    ";
            }
            // line 973
            yield "                                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 973), "hasExpiryDate", [], "any", false, false, false, 973)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 974
                yield "                                        <span class=\"badge bg-warning text-dark\">
                                            <i class=\"fas fa-calendar-alt me-1\"></i>Périssable
                                        </span>
                                    ";
            }
            // line 978
            yield "                                </div>
                            </div>
                        </div>

                        <div class=\"product-meta\">
                            <div class=\"meta-item\">
                                <span class=\"meta-label\">Quantité</span>
                                <span class=\"meta-value\">";
            // line 985
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 985), "html", null, true);
            yield "</span>
                            </div>
                            <div class=\"meta-item\">
                                <span class=\"meta-label\">Prix unitaire</span>
                                <span class=\"meta-value\">";
            // line 989
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 989), 0, ",", " "), "html", null, true);
            yield " FCFA</span>
                            </div>
                            <div class=\"meta-item\">
                                <span class=\"meta-label\">Total ligne</span>
                                <span class=\"meta-value total\">";
            // line 993
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "totalPrice", [], "any", false, false, false, 993), 0, ",", " "), "html", null, true);
            yield " FCFA</span>
                            </div>
                            <div class=\"meta-item\">
                                <span class=\"meta-label\">Lot</span>
                                <span class=\"meta-value\">
                                    ";
            // line 998
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "batchNumber", [], "any", false, false, false, 998)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 999
                yield "                                        <span class=\"badge bg-secondary\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "batchNumber", [], "any", false, false, false, 999), "html", null, true);
                yield "</span>
                                    ";
            } else {
                // line 1001
                yield "                                        —
                                    ";
            }
            // line 1003
            yield "                                </span>
                            </div>
                        </div>

                        <div class=\"product-footer\">
                            ";
            // line 1008
            if ((($tmp = (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 1008, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1009
                yield "                                ";
                $context["statusClass"] = ("status-" . Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 1009, $this->source); })()), "status", [], "any", false, false, false, 1009)));
                // line 1010
                yield "                                <span class=\"badge-issue ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statusClass"]) || array_key_exists("statusClass", $context) ? $context["statusClass"] : (function () { throw new RuntimeError('Variable "statusClass" does not exist.', 1010, $this->source); })()), "html", null, true);
                yield "\">
                                    ";
                // line 1011
                if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 1011, $this->source); })()), "status", [], "any", false, false, false, 1011), ["recovered", "resolved"])) {
                    // line 1012
                    yield "                                        <i class=\"fas fa-check-circle\"></i>
                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 1013
(isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 1013, $this->source); })()), "status", [], "any", false, false, false, 1013) == "pending")) {
                    // line 1014
                    yield "                                        <i class=\"fas fa-clock\"></i>
                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 1015
(isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 1015, $this->source); })()), "status", [], "any", false, false, false, 1015) == "rejected")) {
                    // line 1016
                    yield "                                        <i class=\"fas fa-times-circle\"></i>
                                    ";
                } else {
                    // line 1018
                    yield "                                        <i class=\"fas fa-exclamation-triangle\"></i>
                                    ";
                }
                // line 1020
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 1020, $this->source); })()), "status", [], "any", false, false, false, 1020), ["_" => " "])), "html", null, true);
                yield "
                                </span>
                                <a href=\"";
                // line 1022
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 1022, $this->source); })()), "id", [], "any", false, false, false, 1022)]), "html", null, true);
                yield "\" 
                                   class=\"btn btn-sm btn-outline-danger btn-view-issue\"
                                   target=\"_blank\">
                                    <i class=\"fas fa-eye me-1\"></i> Voir l'avoir
                                </a>
                            ";
            } else {
                // line 1028
                yield "                                <span class=\"text-muted small\">
                                    <i class=\"fas fa-check-circle text-success me-1\"></i>Aucun problème
                                </span>
                            ";
            }
            // line 1032
            yield "                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1035
        yield "
                <div class=\"mt-3 p-3 rounded\" style=\"background: var(--purchase-gray-50); border: 1px solid var(--purchase-gray-200);\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <span class=\"fw-bold\">Total général</span>
                        <span class=\"fs-4 fw-bold text-primary\">";
        // line 1039
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 1039, $this->source); })()), "totalAmount", [], "any", false, false, false, 1039), 0, ",", " "), "html", null, true);
        yield " FCFA</span>
                    </div>
                </div>
            </div>
        </div>

        ";
        // line 1045
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 1045, $this->source); })()), "notes", [], "any", false, false, false, 1045)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1046
            yield "        <div class=\"card shadow-sm border-0 mt-4\">
            <div class=\"card-header bg-white py-3\">
                <h5 class=\"mb-0 fw-semibold\">
                    <i class=\"fas fa-sticky-note me-2 text-primary\"></i>Notes
                </h5>
            </div>
            <div class=\"card-body bg-light\">
                <p class=\"mb-0\">";
            // line 1053
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 1053, $this->source); })()), "notes", [], "any", false, false, false, 1053), "html", null, true));
            yield "</p>
            </div>
        </div>
        ";
        }
        // line 1057
        yield "    </div>
</div>

<!-- ==============================
     MODAL ANNULATION
     ============================== -->
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
        // line 1072
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_cancel", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 1072, $this->source); })()), "id", [], "any", false, false, false, 1072)]), "html", null, true);
        yield "\" method=\"POST\">
                <div class=\"modal-body\">
                    <div class=\"alert alert-warning mb-3\">
                        <i class=\"fas fa-exclamation-triangle me-2\"></i>
                        ";
        // line 1076
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 1076, $this->source); })()), "supplier", [], "any", false, false, false, 1076)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1077
            yield "                            L'annulation enverra une notification au fournisseur.
                        ";
        } else {
            // line 1079
            yield "                            Confirmez-vous l'annulation de cet achat interne ?
                        ";
        }
        // line 1081
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
        // line 1091
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 1091, $this->source); })()), "supplier", [], "any", false, false, false, 1091)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1092
            yield "                                Ce motif sera visible par le fournisseur.
                            ";
        } else {
            // line 1094
            yield "                                Ce motif sera enregistré dans l'historique.
                            ";
        }
        // line 1096
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1109
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 1110
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // ============================================
        // 1. ANIMATION DES CARTES
        // ============================================
        const cards = document.querySelectorAll('.stat-card');
        cards.forEach((card, index) => {
            card.style.animationDelay = (index * 0.1) + 's';
            card.classList.add('animated-card');
        });

        // ============================================
        // 2. TABS MOBILE POUR LES CARTES
        // ============================================
        const tabButtons = document.querySelectorAll('.mobile-card-tabs .tab-btn');
        const cardColumns = document.querySelectorAll('.cards-stack-mobile > [data-card]');

        tabButtons.forEach(btn => {
            btn.addEventListener('click', function() {
                const targetTab = this.dataset.tab;

                // Mettre à jour l'état actif des boutons
                tabButtons.forEach(b => b.classList.remove('active'));
                this.classList.add('active');

                // Afficher la carte correspondante
                cardColumns.forEach(col => {
                    if (col.dataset.card === targetTab) {
                        col.classList.add('active');
                    } else {
                        col.classList.remove('active');
                    }
                });

                // Scroll doux vers le haut des cartes (utile sur mobile)
                if (window.innerWidth <= 768) {
                    const cardsRow = document.querySelector('.cards-stack-mobile');
                    if (cardsRow) {
                        const yOffset = cardsRow.getBoundingClientRect().top + window.pageYOffset - 80;
                        window.scrollTo({ top: yOffset, behavior: 'smooth' });
                    }
                }
            });
        });

        // ============================================
        // 3. GESTION RESPONSIVE : forcer une carte active au chargement
        // ============================================
        function setResponsiveCardDisplay() {
            const isMobile = window.innerWidth <= 768;
            const cardsRow = document.querySelector('.cards-stack-mobile');
            const tabs = document.querySelector('.mobile-card-tabs');

            if (isMobile) {
                // En mobile : afficher uniquement la carte active
                if (tabs) tabs.style.display = 'flex';
                let hasActive = false;
                cardColumns.forEach(col => {
                    if (col.classList.contains('active')) hasActive = true;
                });
                // Si aucune carte n'est active, activer la première
                if (!hasActive && cardColumns.length > 0) {
                    cardColumns[0].classList.add('active');
                    if (tabButtons.length > 0) tabButtons[0].classList.add('active');
                }
            } else {
                // En desktop : toutes les cartes sont visibles
                if (tabs) tabs.style.display = 'none';
                cardColumns.forEach(col => col.classList.remove('active'));
            }
        }

        setResponsiveCardDisplay();

        // Réagir au redimensionnement (debounce léger)
        let resizeTimer;
        window.addEventListener('resize', function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(setResponsiveCardDisplay, 200);
        });

        // ============================================
        // 4. FOCUS AUTOMATIQUE SUR LE TEXTAREA D'ANNULATION
        // ============================================
        const cancelModal = document.getElementById('cancelModal');
        if (cancelModal) {
            cancelModal.addEventListener('shown.bs.modal', function() {
                const textarea = document.getElementById('cancelReason');
                if (textarea) textarea.focus();
            });
        }
    });
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  1723 => 1110,  1710 => 1109,  1688 => 1096,  1684 => 1094,  1680 => 1092,  1678 => 1091,  1666 => 1081,  1662 => 1079,  1658 => 1077,  1656 => 1076,  1649 => 1072,  1632 => 1057,  1625 => 1053,  1616 => 1046,  1614 => 1045,  1605 => 1039,  1599 => 1035,  1591 => 1032,  1585 => 1028,  1576 => 1022,  1570 => 1020,  1566 => 1018,  1562 => 1016,  1560 => 1015,  1557 => 1014,  1555 => 1013,  1552 => 1012,  1550 => 1011,  1545 => 1010,  1542 => 1009,  1540 => 1008,  1533 => 1003,  1529 => 1001,  1523 => 999,  1521 => 998,  1513 => 993,  1506 => 989,  1499 => 985,  1490 => 978,  1484 => 974,  1481 => 973,  1475 => 971,  1473 => 970,  1468 => 968,  1465 => 967,  1459 => 963,  1453 => 960,  1448 => 959,  1446 => 958,  1442 => 956,  1439 => 955,  1435 => 954,  1432 => 953,  1422 => 945,  1415 => 940,  1407 => 937,  1401 => 933,  1391 => 926,  1385 => 924,  1381 => 922,  1377 => 920,  1375 => 919,  1372 => 918,  1370 => 917,  1367 => 916,  1365 => 915,  1361 => 914,  1358 => 913,  1355 => 912,  1353 => 911,  1349 => 909,  1345 => 907,  1339 => 904,  1336 => 903,  1334 => 902,  1329 => 900,  1325 => 899,  1321 => 898,  1316 => 896,  1310 => 892,  1304 => 888,  1302 => 887,  1298 => 886,  1295 => 885,  1289 => 881,  1283 => 878,  1278 => 877,  1276 => 876,  1271 => 873,  1268 => 872,  1264 => 871,  1248 => 857,  1242 => 853,  1228 => 841,  1220 => 838,  1214 => 835,  1211 => 834,  1209 => 833,  1205 => 831,  1199 => 827,  1195 => 825,  1189 => 822,  1185 => 821,  1178 => 819,  1175 => 818,  1173 => 817,  1169 => 816,  1165 => 814,  1159 => 810,  1152 => 806,  1147 => 805,  1145 => 804,  1142 => 803,  1140 => 802,  1132 => 797,  1126 => 794,  1117 => 790,  1113 => 789,  1110 => 788,  1107 => 787,  1103 => 786,  1082 => 768,  1075 => 764,  1068 => 759,  1061 => 755,  1057 => 754,  1053 => 752,  1050 => 751,  1042 => 746,  1038 => 745,  1031 => 743,  1027 => 741,  1025 => 740,  1021 => 739,  1017 => 737,  1013 => 735,  1007 => 732,  1002 => 731,  1000 => 730,  983 => 715,  975 => 709,  969 => 706,  963 => 702,  959 => 700,  952 => 696,  947 => 695,  945 => 694,  938 => 689,  934 => 687,  928 => 684,  923 => 683,  921 => 682,  916 => 679,  910 => 676,  907 => 675,  905 => 674,  900 => 673,  898 => 672,  883 => 659,  877 => 656,  870 => 652,  866 => 650,  863 => 649,  857 => 646,  853 => 644,  850 => 643,  844 => 640,  840 => 638,  838 => 637,  833 => 635,  826 => 631,  818 => 626,  814 => 625,  810 => 624,  771 => 589,  760 => 582,  758 => 581,  751 => 578,  743 => 574,  740 => 573,  732 => 569,  730 => 568,  727 => 567,  718 => 561,  707 => 554,  705 => 553,  698 => 550,  690 => 546,  687 => 545,  679 => 541,  677 => 540,  674 => 539,  667 => 534,  660 => 530,  650 => 523,  643 => 519,  633 => 512,  621 => 502,  608 => 501,  104 => 7,  91 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/purchase/show.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Commande {{ purchase.purchaseNumber }} - HMA Market{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    /* ============================================
       VARIABLES GLOBALES
       ============================================ */
    :root {
        --purchase-primary: #0463f1;
        --purchase-primary-dark: #0346b8;
        --purchase-success: #10b981;
        --purchase-warning: #f59e0b;
        --purchase-danger: #ef4444;
        --purchase-info: #3b82f6;
        --purchase-gray-50: #f9fafb;
        --purchase-gray-100: #f3f4f6;
        --purchase-gray-200: #e5e7eb;
        --purchase-gray-500: #6b7280;
        --purchase-gray-700: #374151;
        --purchase-gray-900: #111827;
        --purchase-radius: 1rem;
        --purchase-radius-sm: 0.5rem;
    }

    /* ============================================
       CARTES STATISTIQUES
       ============================================ */
    .stat-card {
        border-radius: var(--purchase-radius);
        transition: all 0.3s ease;
        border: none;
        overflow: hidden;
    }
    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1) !important;
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
        border-left: 2px solid var(--purchase-gray-200);
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
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        z-index: 1;
        transition: all 0.3s ease;
    }
    .timeline-icon i {
        font-size: 1.1rem;
    }
    .timeline-item:hover .timeline-icon {
        transform: scale(1.1);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
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
        white-space: nowrap;
    }
    .btn-pdf {
        padding: 0.4rem 1rem;
        font-size: 0.85rem;
        border-radius: var(--purchase-radius-sm);
        white-space: nowrap;
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
        white-space: nowrap;
    }
    .badge-issue.status-recovered,
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
        white-space: nowrap;
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
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
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
        border-bottom: 1px solid var(--purchase-gray-100);
        gap: 0.5rem;
        flex-wrap: wrap;
    }
    .info-row:last-child {
        border-bottom: none;
    }
    .info-label {
        color: var(--purchase-gray-500);
        font-size: 0.85rem;
        font-weight: 500;
    }
    .info-value {
        font-weight: 600;
        color: var(--purchase-gray-900);
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
        border-radius: var(--purchase-radius-sm);
        flex-shrink: 0;
    }

    /* ============================================
       EMAIL CLIQUABLE
       ============================================ */
    .email-link {
        color: var(--purchase-primary);
        text-decoration: none;
        transition: all 0.2s ease;
        word-break: break-all;
    }
    .email-link:hover {
        color: var(--purchase-primary-dark);
        text-decoration: underline;
    }
    .email-link i {
        font-size: 0.85em;
        margin-left: 0.25rem;
        opacity: 0.6;
    }

    /* ============================================
       CARTES PRODUITS MOBILE (remplace le tableau)
       ============================================ */
    .product-card-mobile {
        border: 1px solid var(--purchase-gray-200);
        border-radius: var(--purchase-radius-sm);
        padding: 0.85rem;
        margin-bottom: 0.75rem;
        background: white;
        transition: all 0.2s ease;
    }
    .product-card-mobile:last-child {
        margin-bottom: 0;
    }
    .product-card-mobile:hover {
        border-color: var(--purchase-primary);
        box-shadow: 0 4px 12px rgba(4, 99, 241, 0.08);
    }
    .product-card-mobile .product-header {
        display: flex;
        gap: 0.75rem;
        align-items: flex-start;
        margin-bottom: 0.75rem;
    }
    .product-card-mobile .product-info {
        flex: 1;
        min-width: 0;
    }
    .product-card-mobile .product-name {
        font-weight: 600;
        color: var(--purchase-gray-900);
        font-size: 0.95rem;
        word-break: break-word;
        line-height: 1.3;
    }
    .product-card-mobile .product-meta {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 0.5rem 1rem;
        padding-top: 0.75rem;
        border-top: 1px dashed var(--purchase-gray-200);
        font-size: 0.85rem;
    }
    .product-card-mobile .meta-item {
        display: flex;
        flex-direction: column;
        gap: 0.15rem;
    }
    .product-card-mobile .meta-label {
        font-size: 0.7rem;
        text-transform: uppercase;
        letter-spacing: 0.03em;
        color: var(--purchase-gray-500);
        font-weight: 500;
    }
    .product-card-mobile .meta-value {
        font-weight: 600;
        color: var(--purchase-gray-900);
        word-break: break-word;
    }
    .product-card-mobile .meta-value.total {
        color: var(--purchase-primary);
    }
    .product-card-mobile .product-footer {
        margin-top: 0.75rem;
        padding-top: 0.75rem;
        border-top: 1px solid var(--purchase-gray-100);
        display: flex;
        flex-wrap: wrap;
        gap: 0.5rem;
        align-items: center;
        justify-content: space-between;
    }

    /* ============================================
       EN-TÊTE ACTIONS MOBILE
       ============================================ */
    .action-buttons-desktop {
        display: flex;
        gap: 0.5rem;
        flex-wrap: wrap;
    }
    .action-buttons-mobile {
        display: none;
        gap: 0.5rem;
        flex-wrap: wrap;
        width: 100%;
    }
    .action-buttons-mobile .btn {
        flex: 1 1 calc(50% - 0.25rem);
        min-width: 0;
        padding: 0.5rem 0.75rem;
        font-size: 0.8rem;
    }

    /* ============================================
       TABS MOBILE POUR LES CARTES
       ============================================ */
    .mobile-card-tabs {
        display: none;
        border-bottom: 1px solid var(--purchase-gray-200);
        margin-bottom: 1rem;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        scrollbar-width: none;
    }
    .mobile-card-tabs::-webkit-scrollbar {
        display: none;
    }
    .mobile-card-tabs .tab-btn {
        padding: 0.65rem 1rem;
        border: none;
        background: transparent;
        color: var(--purchase-gray-500);
        font-weight: 500;
        font-size: 0.85rem;
        white-space: nowrap;
        cursor: pointer;
        border-bottom: 2px solid transparent;
        transition: all 0.2s ease;
    }
    .mobile-card-tabs .tab-btn.active {
        color: var(--purchase-primary);
        border-bottom-color: var(--purchase-primary);
    }

    /* ============================================
       RESPONSIVE MOBILE
       ============================================ */
    @media (max-width: 991.98px) {
        .table-responsive {
            display: none;
        }
        .products-mobile-container {
            display: block !important;
        }
    }

    @media (max-width: 768px) {
        /* Timeline */
        .timeline-item {
            padding-left: 2.75rem;
            margin-left: 0.75rem;
            padding-bottom: 1.5rem;
        }
        .timeline-icon {
            width: 2.2rem;
            height: 2.2rem;
            left: -1.1rem;
        }
        .timeline-icon i {
            font-size: 0.9rem;
        }
        .timeline-content .fs-6 {
            font-size: 0.9rem !important;
        }

        /* Avatars */
        .user-avatar-lg {
            width: 55px;
            height: 55px;
        }

        /* Boutons */
        .btn-pdf {
            padding: 0.35rem 0.75rem;
            font-size: 0.78rem;
        }

        /* Info rows */
        .info-row {
            flex-direction: column;
            align-items: flex-start;
            padding: 0.5rem 0;
        }
        .info-value {
            text-align: left;
            width: 100%;
        }

        /* Titres */
        h1.h2 {
            font-size: 1.15rem;
            line-height: 1.3;
        }
        .fs-2 {
            font-size: 1.3rem !important;
        }

        /* En-tête actions : passer en mode mobile */
        .action-buttons-desktop {
            display: none;
        }
        .action-buttons-mobile {
            display: flex;
        }

        /* Cartes statistiques : masquer l'onglet actif */
        .mobile-card-tabs {
            display: flex;
        }

        /* Container cartes : afficher une seule carte à la fois */
        .cards-stack-mobile .col-12 {
            display: none;
        }
        .cards-stack-mobile .col-12.active {
            display: block;
            animation: fadeInUp 0.3s ease-out both;
        }

        /* Cartes statistiques */
        .stat-card:hover {
            transform: none;
        }

        /* BREADCRUMB */
        .breadcrumb {
            font-size: 0.78rem;
            flex-wrap: wrap;
        }
        .breadcrumb-item {
            word-break: break-word;
        }
    }

    @media (max-width: 480px) {
        .container-fluid {
            padding-left: 0.65rem;
            padding-right: 0.65rem;
        }
        .timeline-item {
            padding-left: 2.5rem;
            margin-left: 0.5rem;
        }
        .timeline-icon {
            width: 2rem;
            height: 2rem;
            left: -1rem;
        }
        .timeline-icon i {
            font-size: 0.8rem;
        }
        .user-avatar-lg {
            width: 48px;
            height: 48px;
        }
        .user-avatar-lg i {
            font-size: 1.2rem !important;
        }
        .product-card-mobile .product-meta {
            grid-template-columns: 1fr;
        }
        .badge-status {
            font-size: 0.75rem;
            padding: 0.35rem 0.75rem;
        }
        h1.h2 {
            font-size: 1rem;
        }
        .btn-pdf {
            font-size: 0.72rem;
            padding: 0.3rem 0.6rem;
        }
        .timeline-content .d-flex {
            flex-direction: column;
            align-items: flex-start !important;
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
</style>
{% endblock %}

{% block body %}
<div class=\"container-fluid py-4\">
    <div class=\"animated-card\">
        <!-- ==============================
             EN-TÊTE
             ============================== -->
        <div class=\"d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-4 gap-3\">
            <div class=\"w-100\">
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb mb-2\">
                        <li class=\"breadcrumb-item\">
                            <a href=\"{{ path('app_dashboard') }}\" class=\"text-decoration-none\">
                                <i class=\"fas fa-tachometer-alt me-1\"></i>
                                <span class=\"d-none d-sm-inline\">Tableau de bord</span>
                                <span class=\"d-inline d-sm-none\">Accueil</span>
                            </a>
                        </li>
                        <li class=\"breadcrumb-item\">
                            <a href=\"{{ path('purchase_index') }}\" class=\"text-decoration-none\">
                                <i class=\"fas fa-shopping-cart me-1\"></i> Commandes
                            </a>
                        </li>
                        <li class=\"breadcrumb-item active\">{{ purchase.purchaseNumber }}</li>
                    </ol>
                </nav>
                <h1 class=\"h2 mb-0 fw-bold\">
                    <i class=\"fas fa-receipt text-primary me-2\"></i>
                    <span class=\"d-none d-sm-inline\">Commande</span>
                    <span class=\"d-inline d-sm-none\">Cmd</span>
                    {{ purchase.purchaseNumber }}
                </h1>
                <p class=\"text-muted mt-1 mb-0\">
                    <i class=\"fas fa-calendar-alt me-1\"></i>
                    Créée le {{ purchase.createdAt|date('d/m/Y à H:i') }}
                </p>
            </div>

            {# ========== ACTIONS DESKTOP ========== #}
            <div class=\"action-buttons-desktop\">
                {% if purchase.bonCommande %}
                    <a href=\"{{ asset('uploads/bons-commande/' ~ purchase.bonCommande) }}\" target=\"_blank\" class=\"btn btn-outline-primary btn-pdf\">
                        <i class=\"fas fa-file-pdf me-1\"></i> Bon de commande
                    </a>
                {% endif %}
                {% if purchase.recuAchat %}
                    <a href=\"{{ asset('uploads/recus-achat/' ~ purchase.recuAchat) }}\" target=\"_blank\" class=\"btn btn-outline-success btn-pdf\">
                        <i class=\"fas fa-file-pdf me-1\"></i> Reçu d'achat
                    </a>
                {% endif %}
                <a href=\"{{ path('purchase_print', {id: purchase.id}) }}\" class=\"btn btn-outline-secondary btn-pdf\" target=\"_blank\">
                    <i class=\"fas fa-print me-1\"></i> Imprimer
                </a>
                {% if purchase.status == 'confirmed' %}
                    <a href=\"{{ path('purchase_receive', {id: purchase.id}) }}\" class=\"btn btn-success btn-pdf\">
                        <i class=\"fas fa-box-open me-1\"></i> Réceptionner
                    </a>
                    <button type=\"button\" class=\"btn btn-outline-danger btn-pdf\" data-bs-toggle=\"modal\" data-bs-target=\"#cancelModal\">
                        <i class=\"fas fa-ban me-1\"></i> Annuler
                    </button>
                {% endif %}
                <a href=\"{{ path('purchase_index') }}\" class=\"btn btn-outline-secondary btn-pdf\">
                    <i class=\"fas fa-arrow-left me-1\"></i> Retour
                </a>
            </div>

            {# ========== ACTIONS MOBILE ========== #}
            <div class=\"action-buttons-mobile\">
                {% if purchase.bonCommande %}
                    <a href=\"{{ asset('uploads/bons-commande/' ~ purchase.bonCommande) }}\" target=\"_blank\" class=\"btn btn-outline-primary btn-pdf\">
                        <i class=\"fas fa-file-pdf me-1\"></i> Bon
                    </a>
                {% endif %}
                {% if purchase.recuAchat %}
                    <a href=\"{{ asset('uploads/recus-achat/' ~ purchase.recuAchat) }}\" target=\"_blank\" class=\"btn btn-outline-success btn-pdf\">
                        <i class=\"fas fa-file-pdf me-1\"></i> Reçu
                    </a>
                {% endif %}
                <a href=\"{{ path('purchase_print', {id: purchase.id}) }}\" class=\"btn btn-outline-secondary btn-pdf\" target=\"_blank\">
                    <i class=\"fas fa-print me-1\"></i> Imprimer
                </a>
                {% if purchase.status == 'confirmed' %}
                    <a href=\"{{ path('purchase_receive', {id: purchase.id}) }}\" class=\"btn btn-success btn-pdf\">
                        <i class=\"fas fa-box-open me-1\"></i> Réception
                    </a>
                    <button type=\"button\" class=\"btn btn-outline-danger btn-pdf\" data-bs-toggle=\"modal\" data-bs-target=\"#cancelModal\">
                        <i class=\"fas fa-ban me-1\"></i> Annuler
                    </button>
                {% endif %}
                <a href=\"{{ path('purchase_index') }}\" class=\"btn btn-outline-secondary btn-pdf\">
                    <i class=\"fas fa-arrow-left me-1\"></i> Retour
                </a>
            </div>
        </div>

        <!-- ==============================
             TABS MOBILE (navigation entre les 3 cartes)
             ============================== -->
        <div class=\"mobile-card-tabs\">
            <button type=\"button\" class=\"tab-btn active\" data-tab=\"general\">
                <i class=\"fas fa-info-circle me-1\"></i> Général
            </button>
            <button type=\"button\" class=\"tab-btn\" data-tab=\"supplier\">
                <i class=\"fas fa-truck me-1\"></i> Fournisseur
            </button>
            <button type=\"button\" class=\"tab-btn\" data-tab=\"creator\">
                <i class=\"fas fa-user-circle me-1\"></i> Créateur
            </button>
        </div>

        <!-- ==============================
             CARTES PRINCIPALES
             ============================== -->
        <div class=\"row g-4 mb-4 cards-stack-mobile\">
            <!-- Informations générales -->
            <div class=\"col-12 col-md-6 col-lg-4 active\" data-card=\"general\">
                <div class=\"card stat-card shadow-sm h-100\">
                    <div class=\"card-header bg-white py-3 border-0\">
                        <h5 class=\"mb-0 fw-semibold\">
                            <i class=\"fas fa-info-circle text-primary me-2\"></i>Informations générales
                        </h5>
                    </div>
                    <div class=\"card-body pt-0\">
                        <div class=\"d-flex justify-content-between align-items-center mb-3\">
                            <span class=\"badge {{ purchase.statusBadgeClass }} badge-status\">
                                <i class=\"fas {{ purchase.statusIcon }} me-1\"></i>
                                {{ purchase.statusLabel }}
                            </span>
                        </div>
                        <div class=\"info-row\">
                            <span class=\"info-label\">N° commande</span>
                            <span class=\"info-value\">{{ purchase.purchaseNumber }}</span>
                        </div>
                        <div class=\"info-row\">
                            <span class=\"info-label\">Date création</span>
                            <span class=\"info-value\">{{ purchase.createdAt|date('d/m/Y H:i') }}</span>
                        </div>
                        {% if purchase.confirmedAt %}
                        <div class=\"info-row\">
                            <span class=\"info-label\">Date confirmation</span>
                            <span class=\"info-value text-success\">{{ purchase.confirmedAt|date('d/m/Y H:i') }}</span>
                        </div>
                        {% endif %}
                        {% if purchase.receivedAt %}
                        <div class=\"info-row\">
                            <span class=\"info-label\">Date réception</span>
                            <span class=\"info-value text-info\">{{ purchase.receivedAt|date('d/m/Y H:i') }}</span>
                        </div>
                        {% endif %}
                        {% if purchase.cancelledAt %}
                        <div class=\"info-row\">
                            <span class=\"info-label\">Date annulation</span>
                            <span class=\"info-value text-danger\">{{ purchase.cancelledAt|date('d/m/Y H:i') }}</span>
                        </div>
                        <div class=\"info-row\">
                            <span class=\"info-label\">Motif annulation</span>
                            <span class=\"info-value text-danger\">{{ purchase.cancellationReason }}</span>
                        </div>
                        {% endif %}
                    </div>
                </div>
            </div>

            <!-- Fournisseur (optionnel) -->
            <div class=\"col-12 col-md-6 col-lg-4\" data-card=\"supplier\">
                <div class=\"card stat-card shadow-sm h-100\">
                    <div class=\"card-header bg-white py-3 border-0\">
                        <h5 class=\"mb-0 fw-semibold\">
                            <i class=\"fas fa-truck text-primary me-2\"></i>Fournisseur
                        </h5>
                    </div>
                    <div class=\"card-body pt-0\">
                        {% if purchase.supplier %}
                            <h6 class=\"fw-bold mb-2\">{{ purchase.supplier.name }}</h6>
                            {% if purchase.supplier.contactPerson %}
                                <p class=\"text-muted small mb-2\">
                                    <i class=\"fas fa-user me-1\"></i> {{ purchase.supplier.contactPerson }}
                                </p>
                            {% endif %}
                            <div class=\"info-row\">
                                <span class=\"info-label\">Téléphone</span>
                                <span class=\"info-value\">
                                    {% if purchase.supplier.phone %}
                                        <a href=\"tel:{{ purchase.supplier.phone }}\" class=\"email-link\">
                                            {{ purchase.supplier.phone }}
                                        </a>
                                    {% else %}
                                        —
                                    {% endif %}
                                </span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Email</span>
                                <span class=\"info-value small\">
                                    {% if purchase.supplier.email %}
                                        <a href=\"mailto:{{ purchase.supplier.email }}\" class=\"email-link\">
                                            {{ purchase.supplier.email }}
                                            <i class=\"fas fa-external-link-alt\"></i>
                                        </a>
                                    {% else %}
                                        —
                                    {% endif %}
                                </span>
                            </div>
                            <div class=\"info-row\">
                                <span class=\"info-label\">Adresse</span>
                                <span class=\"info-value small\">{{ purchase.supplier.adress|default('—') }}</span>
                            </div>
                        {% else %}
                            <div class=\"text-center text-muted py-4\">
                                <i class=\"fas fa-building fa-3x mb-3 opacity-50\"></i>
                                <h6 class=\"mb-1\">Achat interne</h6>
                                <p class=\"small mb-0\">Aucun fournisseur associé à cette commande</p>
                            </div>
                        {% endif %}
                    </div>
                </div>
            </div>

            <!-- Créateur -->
            <div class=\"col-12 col-md-12 col-lg-4\" data-card=\"creator\">
                <div class=\"card stat-card shadow-sm h-100\">
                    <div class=\"card-header bg-white py-3 border-0\">
                        <h5 class=\"mb-0 fw-semibold\">
                            <i class=\"fas fa-user-circle text-primary me-2\"></i>Créateur
                        </h5>
                    </div>
                    <div class=\"card-body pt-0\">
                        <div class=\"d-flex align-items-center mb-3\">
                            <div class=\"user-avatar-lg me-3\">
                                {% if purchase.user.photo %}
                                    <img src=\"{{ asset('uploads/users/' ~ purchase.user.photo) }}\" 
                                         alt=\"{{ purchase.user.fullName }}\"
                                         onerror=\"this.style.display='none'; this.parentElement.innerHTML='<i class=&quot;fas fa-user fa-2x&quot;></i>';\">
                                {% else %}
                                    <i class=\"fas fa-user fa-2x\"></i>
                                {% endif %}
                            </div>
                            <div class=\"flex-grow-1\" style=\"min-width: 0;\">
                                <div class=\"fw-bold fs-5 text-truncate\">{{ purchase.user.fullName }}</div>
                                {% if purchase.user.email %}
                                    <div class=\"small text-muted text-truncate\">
                                        <i class=\"fas fa-envelope me-1\"></i>
                                        <a href=\"mailto:{{ purchase.user.email }}?subject=À propos de la commande {{ purchase.purchaseNumber }}\" 
                                           class=\"email-link\"
                                           title=\"Envoyer un email à {{ purchase.user.fullName }}\">
                                            {{ purchase.user.email }}
                                            <i class=\"fas fa-external-link-alt\"></i>
                                        </a>
                                    </div>
                                {% endif %}
                                {% if purchase.user.phone %}
                                    <div class=\"small text-muted\">
                                        <i class=\"fas fa-phone me-1\"></i>
                                        <a href=\"tel:{{ purchase.user.phone }}\" class=\"email-link\">
                                            {{ purchase.user.phone }}
                                        </a>
                                    </div>
                                {% endif %}
                            </div>
                        </div>
                        <hr>
                        <div class=\"d-flex justify-content-between align-items-center flex-wrap gap-2\">
                            <span class=\"text-muted\">Total commande</span>
                            <span class=\"fs-2 fw-bold text-primary\">{{ purchase.totalAmount|number_format(0, ',', ' ') }} FCFA</span>
                        </div>
                        <div class=\"text-muted small mt-1\">
                            <i class=\"fas fa-box me-1\"></i>
                            {{ purchase.purchaseItems|length }} produit(s) commandé(s)
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ==============================
             HISTORIQUE DES STATUTS
             ============================== -->
        <div class=\"card shadow-sm border-0 mb-4\">
            <div class=\"card-header bg-white py-3\">
                <h5 class=\"mb-0 fw-semibold\">
                    <i class=\"fas fa-history me-2 text-primary\"></i>Historique des statuts
                </h5>
            </div>
            <div class=\"card-body\">
                <div class=\"timeline\">
                    {% for event in purchase.statusHistory %}
                        {% set statusColor = event.status == 'Création' ? 'primary' : (event.status == 'Confirmation' ? 'success' : (event.status == 'Réception' ? 'info' : (event.status == 'Annulation' ? 'danger' : 'secondary'))) %}
                        <div class=\"timeline-item\">
                            <div class=\"timeline-icon bg-white border border-{{ statusColor }} shadow-sm\">
                                <i class=\"fas {{ event.status == 'Création' ? 'fa-plus-circle' : (event.status == 'Confirmation' ? 'fa-check-circle' : (event.status == 'Réception' ? 'fa-box-open' : (event.status == 'Annulation' ? 'fa-ban' : 'fa-edit'))) }} text-{{ statusColor }}\"></i>
                            </div>
                            <div class=\"timeline-content\">
                                <div class=\"d-flex flex-wrap justify-content-between align-items-start gap-2\">
                                    <strong class=\"fs-6\">{{ event.status }}</strong>
                                    <small class=\"text-muted\">
                                        <i class=\"far fa-clock me-1\"></i>
                                        {{ event.date|date('d/m/Y H:i') }}
                                    </small>
                                </div>

                                <div class=\"d-flex align-items-center gap-2 mt-2 flex-wrap\">
                                    {% if event.by %}
                                        <div class=\"user-avatar-sm\" style=\"width: 32px; height: 32px; border-radius: 50%; overflow: hidden; flex-shrink: 0; border: 2px solid #fff; box-shadow: 0 2px 6px rgba(0,0,0,0.1);\">
                                            {% if event.by.photo %}
                                                <img src=\"{{ asset('uploads/users/' ~ event.by.photo) }}\" 
                                                     alt=\"{{ event.by.fullName }}\"
                                                     style=\"width: 100%; height: 100%; object-fit: cover;\"
                                                     onerror=\"this.style.display='none'; this.parentElement.innerHTML='<div style=&quot;width:100%;height:100%;background:linear-gradient(135deg, #667eea 0%, #0463f1 100%);display:flex;align-items:center;justify-content:center;color:white;font-size:0.8rem;&quot;><i class=&quot;fas fa-user&quot;></i></div>';\">
                                            {% else %}
                                                <div style=\"width: 100%; height: 100%; background: linear-gradient(135deg, #667eea 0%, #0463f1 100%); display: flex; align-items: center; justify-content: center; color: white; font-size: 0.8rem;\">
                                                    <i class=\"fas fa-user\"></i>
                                                </div>
                                            {% endif %}
                                        </div>
                                        <div class=\"small text-muted\">
                                            <span class=\"fw-medium\">{{ event.by.fullName }}</span>
                                            {% if event.by.email %}
                                                <span class=\"text-muted mx-1\">•</span>
                                                <a href=\"mailto:{{ event.by.email }}?subject=À propos de la commande {{ purchase.purchaseNumber }}\" 
                                                   class=\"email-link small\"
                                                   title=\"Envoyer un email à {{ event.by.fullName }}\">
                                                    <i class=\"fas fa-envelope me-1\"></i><span class=\"d-none d-sm-inline\">{{ event.by.email }}</span>
                                                </a>
                                            {% endif %}
                                        </div>
                                    {% else %}
                                        <div class=\"small text-muted\">
                                            <i class=\"fas fa-robot me-1\"></i> Système
                                        </div>
                                    {% endif %}
                                </div>

                                {% if event.reason is defined and event.reason %}
                                    <div class=\"small text-danger mt-2 p-2\" style=\"background: #fef2f2; border-radius: 6px;\">
                                        <i class=\"fas fa-comment me-1\"></i> <strong>Motif :</strong> {{ event.reason }}
                                    </div>
                                {% endif %}
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
        </div>

        <!-- ==============================
             PRODUITS COMMANDÉS
             ============================== -->
        <div class=\"card shadow-sm border-0\">
            <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center flex-wrap gap-2\">
                <h5 class=\"mb-0 fw-semibold\">
                    <i class=\"fas fa-boxes me-2 text-primary\"></i>Produits commandés
                </h5>
                <span class=\"badge bg-primary\">{{ purchase.purchaseItems|length }} article(s)</span>
            </div>

            {# ====== VUE TABLEAU (Desktop / Tablet) ====== #}
            <div class=\"table-responsive\">
                <table class=\"table table-hover mb-0 align-middle\">
                    <thead class=\"table-light\">
                        <tr>
                            <th style=\"width: 30%\">Produit</th>
                            <th style=\"width: 12%\" class=\"d-none d-md-table-cell\">Code-barres</th>
                            <th style=\"width: 8%\" class=\"text-center\">Qté</th>
                            <th style=\"width: 12%\" class=\"text-end\">P.U.</th>
                            <th style=\"width: 12%\" class=\"text-end\">Total</th>
                            <th style=\"width: 13%\" class=\"d-none d-lg-table-cell\">Lot</th>
                            <th style=\"width: 13%\">Problème</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for item in purchase.purchaseItems %}
                            {% set creditNote = creditNotesByItemId[item.id] ?? null %}
                            <tr>
                                <td>
                                    <div class=\"d-flex align-items-center\">
                                        {% if item.product.image and item.product.image != 'default-product.png' %}
                                            <img src=\"{{ asset('uploads/products/' ~ item.product.image) }}\" 
                                                 alt=\"{{ item.product.name }}\"
                                                 class=\"table-product-img me-2\">
                                        {% else %}
                                            <div class=\"table-product-img bg-light d-flex align-items-center justify-content-center me-2\">
                                                <i class=\"fas fa-box text-secondary\"></i>
                                            </div>
                                        {% endif %}
                                        <div>
                                            <div class=\"fw-semibold\">{{ item.product.name }}</div>
                                            {% if item.product.hasExpiryDate %}
                                                <span class=\"badge bg-warning text-dark mt-1\">
                                                    <i class=\"fas fa-calendar-alt me-1\"></i>Périssable
                                                </span>
                                            {% endif %}
                                        </div>
                                    </div>
                                </td>
                                <td class=\"d-none d-md-table-cell\">
                                    <code class=\"small\">{{ item.product.barcode }}</code>
                                </td>
                                <td class=\"text-center\">{{ item.quantity }}</td>
                                <td class=\"text-end\">{{ item.unitPrice|number_format(0, ',', ' ') }} FCFA</td>
                                <td class=\"text-end fw-bold text-primary\">{{ item.totalPrice|number_format(0, ',', ' ') }} FCFA</td>
                                <td class=\"d-none d-lg-table-cell\">
                                    {% if item.batchNumber %}
                                        <span class=\"badge bg-secondary\">
                                            <i class=\"fas fa-tag me-1\"></i>{{ item.batchNumber }}
                                        </span>
                                    {% else %}
                                        <span class=\"text-muted\">—</span>
                                    {% endif %}
                                </td>
                                <td>
                                    {% if creditNote %}
                                        {% set statusClass = 'status-' ~ (creditNote.status|lower) %}
                                        <div class=\"d-flex align-items-center gap-2 flex-wrap\">
                                            <span class=\"badge-issue {{ statusClass }}\">
                                                {% if creditNote.status in ['recovered', 'resolved'] %}
                                                    <i class=\"fas fa-check-circle\"></i>
                                                {% elseif creditNote.status == 'pending' %}
                                                    <i class=\"fas fa-clock\"></i>
                                                {% elseif creditNote.status == 'rejected' %}
                                                    <i class=\"fas fa-times-circle\"></i>
                                                {% else %}
                                                    <i class=\"fas fa-exclamation-triangle\"></i>
                                                {% endif %}
                                                {{ creditNote.status|replace({'_': ' '})|capitalize }}
                                            </span>
                                            <a href=\"{{ path('app_supplier_credit_note_show', {'id': creditNote.id}) }}\" 
                                               class=\"btn btn-sm btn-outline-danger btn-view-issue\"
                                               target=\"_blank\">
                                                <i class=\"fas fa-eye me-1\"></i> Voir
                                            </a>
                                        </div>
                                    {% else %}
                                        <span class=\"text-muted small\">
                                            <i class=\"fas fa-check-circle text-success me-1\"></i>Aucun problème
                                        </span>
                                    {% endif %}
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                    <tfoot class=\"table-light\">
                        <tr>
                            <td colspan=\"5\" class=\"text-end fw-bold fs-6\">Total général</td>
                            <td colspan=\"2\" class=\"text-end\">
                                <span class=\"fs-4 fw-bold text-primary\">{{ purchase.totalAmount|number_format(0, ',', ' ') }} FCFA</span>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>

            {# ====== VUE CARTES MOBILE ====== #}
            <div class=\"products-mobile-container p-3\" style=\"display: none;\">
                {% for item in purchase.purchaseItems %}
                    {% set creditNote = creditNotesByItemId[item.id] ?? null %}
                    <div class=\"product-card-mobile\">
                        <div class=\"product-header\">
                            {% if item.product.image and item.product.image != 'default-product.png' %}
                                <img src=\"{{ asset('uploads/products/' ~ item.product.image) }}\" 
                                     alt=\"{{ item.product.name }}\"
                                     class=\"table-product-img\">
                            {% else %}
                                <div class=\"table-product-img bg-light d-flex align-items-center justify-content-center\">
                                    <i class=\"fas fa-box text-secondary\"></i>
                                </div>
                            {% endif %}
                            <div class=\"product-info\">
                                <div class=\"product-name\">{{ item.product.name }}</div>
                                <div class=\"mt-1 d-flex flex-wrap gap-1\">
                                    {% if item.product.barcode %}
                                        <code class=\"small\">{{ item.product.barcode }}</code>
                                    {% endif %}
                                    {% if item.product.hasExpiryDate %}
                                        <span class=\"badge bg-warning text-dark\">
                                            <i class=\"fas fa-calendar-alt me-1\"></i>Périssable
                                        </span>
                                    {% endif %}
                                </div>
                            </div>
                        </div>

                        <div class=\"product-meta\">
                            <div class=\"meta-item\">
                                <span class=\"meta-label\">Quantité</span>
                                <span class=\"meta-value\">{{ item.quantity }}</span>
                            </div>
                            <div class=\"meta-item\">
                                <span class=\"meta-label\">Prix unitaire</span>
                                <span class=\"meta-value\">{{ item.unitPrice|number_format(0, ',', ' ') }} FCFA</span>
                            </div>
                            <div class=\"meta-item\">
                                <span class=\"meta-label\">Total ligne</span>
                                <span class=\"meta-value total\">{{ item.totalPrice|number_format(0, ',', ' ') }} FCFA</span>
                            </div>
                            <div class=\"meta-item\">
                                <span class=\"meta-label\">Lot</span>
                                <span class=\"meta-value\">
                                    {% if item.batchNumber %}
                                        <span class=\"badge bg-secondary\">{{ item.batchNumber }}</span>
                                    {% else %}
                                        —
                                    {% endif %}
                                </span>
                            </div>
                        </div>

                        <div class=\"product-footer\">
                            {% if creditNote %}
                                {% set statusClass = 'status-' ~ (creditNote.status|lower) %}
                                <span class=\"badge-issue {{ statusClass }}\">
                                    {% if creditNote.status in ['recovered', 'resolved'] %}
                                        <i class=\"fas fa-check-circle\"></i>
                                    {% elseif creditNote.status == 'pending' %}
                                        <i class=\"fas fa-clock\"></i>
                                    {% elseif creditNote.status == 'rejected' %}
                                        <i class=\"fas fa-times-circle\"></i>
                                    {% else %}
                                        <i class=\"fas fa-exclamation-triangle\"></i>
                                    {% endif %}
                                    {{ creditNote.status|replace({'_': ' '})|capitalize }}
                                </span>
                                <a href=\"{{ path('app_supplier_credit_note_show', {'id': creditNote.id}) }}\" 
                                   class=\"btn btn-sm btn-outline-danger btn-view-issue\"
                                   target=\"_blank\">
                                    <i class=\"fas fa-eye me-1\"></i> Voir l'avoir
                                </a>
                            {% else %}
                                <span class=\"text-muted small\">
                                    <i class=\"fas fa-check-circle text-success me-1\"></i>Aucun problème
                                </span>
                            {% endif %}
                        </div>
                    </div>
                {% endfor %}

                <div class=\"mt-3 p-3 rounded\" style=\"background: var(--purchase-gray-50); border: 1px solid var(--purchase-gray-200);\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <span class=\"fw-bold\">Total général</span>
                        <span class=\"fs-4 fw-bold text-primary\">{{ purchase.totalAmount|number_format(0, ',', ' ') }} FCFA</span>
                    </div>
                </div>
            </div>
        </div>

        {% if purchase.notes %}
        <div class=\"card shadow-sm border-0 mt-4\">
            <div class=\"card-header bg-white py-3\">
                <h5 class=\"mb-0 fw-semibold\">
                    <i class=\"fas fa-sticky-note me-2 text-primary\"></i>Notes
                </h5>
            </div>
            <div class=\"card-body bg-light\">
                <p class=\"mb-0\">{{ purchase.notes|nl2br }}</p>
            </div>
        </div>
        {% endif %}
    </div>
</div>

<!-- ==============================
     MODAL ANNULATION
     ============================== -->
<div class=\"modal fade\" id=\"cancelModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-ban me-2\"></i> Annuler la commande
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <form action=\"{{ path('purchase_cancel', {id: purchase.id}) }}\" method=\"POST\">
                <div class=\"modal-body\">
                    <div class=\"alert alert-warning mb-3\">
                        <i class=\"fas fa-exclamation-triangle me-2\"></i>
                        {% if purchase.supplier %}
                            L'annulation enverra une notification au fournisseur.
                        {% else %}
                            Confirmez-vous l'annulation de cet achat interne ?
                        {% endif %}
                    </div>
                    <div class=\"mb-3\">
                        <label for=\"cancelReason\" class=\"form-label fw-bold\">
                            Motif d'annulation <span class=\"text-danger\">*</span>
                        </label>
                        <textarea class=\"form-control\" id=\"cancelReason\" name=\"reason\" rows=\"4\" 
                                  placeholder=\"Veuillez expliquer le motif de l'annulation...\"
                                  required></textarea>
                        <div class=\"form-text\">
                            <i class=\"fas fa-info-circle me-1\"></i>
                            {% if purchase.supplier %}
                                Ce motif sera visible par le fournisseur.
                            {% else %}
                                Ce motif sera enregistré dans l'historique.
                            {% endif %}
                        </div>
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
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // ============================================
        // 1. ANIMATION DES CARTES
        // ============================================
        const cards = document.querySelectorAll('.stat-card');
        cards.forEach((card, index) => {
            card.style.animationDelay = (index * 0.1) + 's';
            card.classList.add('animated-card');
        });

        // ============================================
        // 2. TABS MOBILE POUR LES CARTES
        // ============================================
        const tabButtons = document.querySelectorAll('.mobile-card-tabs .tab-btn');
        const cardColumns = document.querySelectorAll('.cards-stack-mobile > [data-card]');

        tabButtons.forEach(btn => {
            btn.addEventListener('click', function() {
                const targetTab = this.dataset.tab;

                // Mettre à jour l'état actif des boutons
                tabButtons.forEach(b => b.classList.remove('active'));
                this.classList.add('active');

                // Afficher la carte correspondante
                cardColumns.forEach(col => {
                    if (col.dataset.card === targetTab) {
                        col.classList.add('active');
                    } else {
                        col.classList.remove('active');
                    }
                });

                // Scroll doux vers le haut des cartes (utile sur mobile)
                if (window.innerWidth <= 768) {
                    const cardsRow = document.querySelector('.cards-stack-mobile');
                    if (cardsRow) {
                        const yOffset = cardsRow.getBoundingClientRect().top + window.pageYOffset - 80;
                        window.scrollTo({ top: yOffset, behavior: 'smooth' });
                    }
                }
            });
        });

        // ============================================
        // 3. GESTION RESPONSIVE : forcer une carte active au chargement
        // ============================================
        function setResponsiveCardDisplay() {
            const isMobile = window.innerWidth <= 768;
            const cardsRow = document.querySelector('.cards-stack-mobile');
            const tabs = document.querySelector('.mobile-card-tabs');

            if (isMobile) {
                // En mobile : afficher uniquement la carte active
                if (tabs) tabs.style.display = 'flex';
                let hasActive = false;
                cardColumns.forEach(col => {
                    if (col.classList.contains('active')) hasActive = true;
                });
                // Si aucune carte n'est active, activer la première
                if (!hasActive && cardColumns.length > 0) {
                    cardColumns[0].classList.add('active');
                    if (tabButtons.length > 0) tabButtons[0].classList.add('active');
                }
            } else {
                // En desktop : toutes les cartes sont visibles
                if (tabs) tabs.style.display = 'none';
                cardColumns.forEach(col => col.classList.remove('active'));
            }
        }

        setResponsiveCardDisplay();

        // Réagir au redimensionnement (debounce léger)
        let resizeTimer;
        window.addEventListener('resize', function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(setResponsiveCardDisplay, 200);
        });

        // ============================================
        // 4. FOCUS AUTOMATIQUE SUR LE TEXTAREA D'ANNULATION
        // ============================================
        const cancelModal = document.getElementById('cancelModal');
        if (cancelModal) {
            cancelModal.addEventListener('shown.bs.modal', function() {
                const textarea = document.getElementById('cancelReason');
                if (textarea) textarea.focus();
            });
        }
    });
</script>
{% endblock %}", "purchase/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\purchase\\show.html.twig");
    }
}
