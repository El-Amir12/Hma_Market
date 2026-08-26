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

/* admin/stock_batch/show.html.twig */
class __TwigTemplate_ecd0c2a58bfdd098fc7a6f1a2e4e3c83 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/stock_batch/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/stock_batch/show.html.twig"));

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

        yield "Lot ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 4, $this->source); })()), "batchNumber", [], "any", false, false, false, 4), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4), "html", null, true);
        
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
    :root {
        --card-radius: 1rem;
        --transition-speed: 0.2s;
    }

    .info-card {
        transition: transform var(--transition-speed), box-shadow var(--transition-speed);
        border-radius: var(--card-radius);
    }
    .info-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.1) !important;
    }
    
    .timeline {
        position: relative;
        padding-left: 2rem;
    }
    .timeline::before {
        content: '';
        position: absolute;
        left: 0.5rem;
        top: 0;
        bottom: 0;
        width: 2px;
        background: #e9ecef;
    }
    .timeline-item {
        position: relative;
        margin-bottom: 1.5rem;
    }
    .timeline-item::before {
        content: '';
        position: absolute;
        left: -1.75rem;
        top: 0.25rem;
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: var(--primary-color);
        border: 2px solid white;
        box-shadow: 0 0 0 2px var(--primary-color);
    }
    .timeline-item.issue::before {
        background: var(--danger-color);
        box-shadow: 0 0 0 2px var(--danger-color);
    }
    .timeline-item.resolved::before {
        background: var(--success-color);
        box-shadow: 0 0 0 2px var(--success-color);
    }
    .issue-badge {
        font-size: 0.75rem;
        padding: 0.3rem 0.6rem;
    }
    .attachment-preview {
        width: 100px;
        height: 100px;
        object-fit: cover;
        border-radius: 8px;
        cursor: pointer;
        transition: transform 0.2s;
    }
    .attachment-preview:hover {
        transform: scale(1.05);
    }
    .status-card {
        border-left: 4px solid;
    }
    .status-pending { border-left-color: var(--warning-color); }
    .status-acknowledged { border-left-color: var(--info-color); }
    .status-under_review { border-left-color: var(--primary-color); }
    .status-recovered { border-left-color: var(--success-color); }
    .status-lost { border-left-color: var(--danger-color); }
    .status-closed { border-left-color: #6c757d; }
    .badge i { margin-right: 4px; }
    
    .btn-action {
        transition: all 0.2s ease;
    }
    .btn-action:hover {
        transform: translateY(-2px);
    }

    /* ✅ RESPONSIVE */
    @media (max-width: 992px) {
        .container-fluid {
            padding-left: 0.75rem !important;
            padding-right: 0.75rem !important;
        }
        
        .d-flex.justify-content-between.align-items-center {
            flex-direction: column;
            align-items: flex-start !important;
            gap: 0.75rem !important;
        }
        
        /* Boutons en colonne sur tablette */
        .btn-group {
            flex-wrap: wrap;
            width: 100%;
        }
        .btn-group .btn {
            flex: 1 1 auto;
            min-width: calc(50% - 0.25rem);
            margin-bottom: 0.25rem;
            border-radius: 0.375rem !important;
        }
        .btn-group .btn:not(:last-child) {
            border-radius: 0.375rem !important;
        }
        
        .row > [class*=\"col-\"] {
            margin-bottom: 0.5rem;
        }
        
        .dl.row .col-sm-5, 
        .dl.row .col-sm-7 {
            width: 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }
    }

    @media (max-width: 768px) {
        /* Statistiques en colonne */
        .col-md-4, .col-md-6 {
            flex: 0 0 100%;
            max-width: 100%;
        }
        
        .row.text-center > .col-md-4 {
            margin-bottom: 0.5rem;
        }
        
        /* Boutons en 1 colonne sur mobile */
        .btn-group .btn {
            min-width: 100%;
            flex: 0 0 100%;
        }
        
        .btn-group .btn .badge.ms-1 {
            float: right;
        }
        
        /* Cartes ajustées */
        .info-card .card-body {
            padding: 0.75rem !important;
        }
        
        .info-card .card-header {
            padding: 0.5rem 0.75rem !important;
        }
        
        .p-3 {
            padding: 0.75rem !important;
        }
        
        h1.h3 {
            font-size: 1.1rem !important;
        }
        
        .breadcrumb {
            font-size: 0.7rem;
        }
        .breadcrumb-item + .breadcrumb-item::before {
            padding-right: 0.3rem;
            padding-left: 0.3rem;
        }
        
        /* Avoir - colonnes en vertical */
        .status-card .row.mb-3 > .col-md-6 {
            margin-bottom: 0.75rem;
        }
        
        .status-card .row.mb-3 > .col-md-6:last-child {
            margin-bottom: 0;
        }
        
        /* Mouvements de stock */
        .list-group-item {
            padding: 0.5rem 0.75rem !important;
        }
        .list-group-item .d-flex {
            flex-direction: column;
            align-items: stretch !important;
        }
        .list-group-item .d-flex .flex-grow-1 {
            margin-bottom: 0.25rem;
        }
        .list-group-item .text-end {
            text-align: left !important;
        }
        
        /* Dates */
        .row .col-md-6 .p-3 {
            margin-bottom: 0.5rem;
        }
        .row .col-md-6:last-child .p-3 {
            margin-bottom: 0;
        }
        
        /* Textes de description */
        .text-muted.mt-1 .badge {
            display: inline-block;
            margin-top: 0.25rem;
        }
        
        /* Désactiver les hover sur mobile */
        .info-card:hover {
            transform: none !important;
        }
        
        .btn-action:hover {
            transform: none !important;
        }
    }

    @media (max-width: 480px) {
        .container-fluid {
            padding-left: 0.5rem !important;
            padding-right: 0.5rem !important;
        }
        
        h1.h3 {
            font-size: 0.95rem !important;
        }
        
        .breadcrumb {
            font-size: 0.6rem;
        }
        
        .badge {
            font-size: 0.6rem !important;
        }
        
        .fs-5 {
            font-size: 1rem !important;
        }
        
        .p-3 {
            padding: 0.5rem !important;
        }
        
        .p-3 h3, .p-3 h4, .p-3 h5 {
            font-size: 1rem !important;
        }
        
        /* Avoir - montants */
        .fw-bold.text-danger.fs-5 {
            font-size: 1rem !important;
        }
        
        /* Mouvements - badges en ligne */
        .list-group-item .badge {
            display: inline-block;
            margin-bottom: 0.15rem;
        }
        .list-group-item .flex-grow-1 {
            font-size: 0.85rem;
        }
        
        /* Informations générales - affichage en colonne */
        .dl.row .col-sm-5 {
            font-size: 0.7rem;
        }
        .dl.row .col-sm-7 {
            font-size: 0.8rem;
            margin-bottom: 0.25rem;
        }
        .dl.row .col-sm-7:last-child {
            margin-bottom: 0;
        }
    }

    @media print {
        .no-print, .btn, .dropdown, .modal, .actions { display: none !important; }
        body { padding: 20px; }
        .card { box-shadow: none !important; border: 1px solid #ddd; }
        .info-card { transform: none !important; }
        .info-card:hover { transform: none !important; }
        .card-body { padding: 0.75rem !important; }
        .container-fluid { padding: 0 !important; }
        .row { margin: 0 !important; }
        .col-lg-6 { flex: 0 0 50%; max-width: 50%; }
        .no-print { display: none !important; }
        .btn-group .btn { display: none !important; }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 300
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

        // line 301
        yield "<div class=\"container-fluid px-4\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-3 mb-md-4 flex-wrap gap-2 gap-md-3 no-print\">
        <div class=\"w-100 w-md-auto\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb mb-1\">
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 307
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_index");
        yield "\">Produits</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 308
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 308, $this->source); })()), "id", [], "any", false, false, false, 308)]), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 308, $this->source); })()), "name", [], "any", false, false, false, 308)), "truncate", [20], "method", false, false, false, 308), "html", null, true);
        yield "</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 309
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_index", ["productId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 309, $this->source); })()), "id", [], "any", false, false, false, 309)]), "html", null, true);
        yield "\">Lots</a></li>
                    <li class=\"breadcrumb-item active\">";
        // line 310
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 310, $this->source); })()), "batchNumber", [], "any", false, false, false, 310)), "truncate", [12], "method", false, false, false, 310), "html", null, true);
        yield "</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-boxes me-2 text-info\"></i>
                <span class=\"d-none d-sm-inline\">Lot ";
        // line 315
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 315, $this->source); })()), "batchNumber", [], "any", false, false, false, 315), "html", null, true);
        yield "</span>
                <span class=\"d-inline d-sm-none\">Lot ";
        // line 316
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 316, $this->source); })()), "batchNumber", [], "any", false, false, false, 316)), "truncate", [10], "method", false, false, false, 316), "html", null, true);
        yield "</span>
            </h1>
            <p class=\"text-muted mt-1 small\">
                <i class=\"fas fa-calendar-alt me-1\"></i> Créé le ";
        // line 319
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 319, $this->source); })()), "createdAt", [], "any", false, false, false, 319), "d/m/Y H:i"), "html", null, true);
        yield "
                ";
        // line 320
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 320, $this->source); })()), "updatedAt", [], "any", false, false, false, 320)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " | Modifié le ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 320, $this->source); })()), "updatedAt", [], "any", false, false, false, 320), "d/m/Y H:i"), "html", null, true);
        }
        // line 321
        yield "            </p>
            ";
        // line 322
        if (((array_key_exists("purchaseItem", $context) && (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 322, $this->source); })())) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 322, $this->source); })()), "purchase", [], "any", false, false, false, 322))) {
            // line 323
            yield "                ";
            $context["purchase"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 323, $this->source); })()), "purchase", [], "any", false, false, false, 323);
            // line 324
            yield "                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 324, $this->source); })()), "receivedAt", [], "any", false, false, false, 324)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 325
                yield "                    ";
                $context["daysSinceReception"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extension\CoreExtension']->convertDate(), "diff", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 325, $this->source); })()), "receivedAt", [], "any", false, false, false, 325)], "method", false, false, false, 325), "days", [], "any", false, false, false, 325);
                // line 326
                yield "                    ";
                $context["daysRemaining"] = (30 - (isset($context["daysSinceReception"]) || array_key_exists("daysSinceReception", $context) ? $context["daysSinceReception"] : (function () { throw new RuntimeError('Variable "daysSinceReception" does not exist.', 326, $this->source); })()));
                // line 327
                yield "                    <span class=\"badge ";
                if (((isset($context["daysRemaining"]) || array_key_exists("daysRemaining", $context) ? $context["daysRemaining"] : (function () { throw new RuntimeError('Variable "daysRemaining" does not exist.', 327, $this->source); })()) > 0)) {
                    yield "bg-success";
                } else {
                    yield "bg-secondary";
                }
                yield " mt-1\">
                        <i class=\"fas fa-calendar-check me-1\"></i>
                        Réceptionné le ";
                // line 329
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 329, $this->source); })()), "receivedAt", [], "any", false, false, false, 329), "d/m/Y"), "html", null, true);
                yield "
                        ";
                // line 330
                if (((isset($context["daysRemaining"]) || array_key_exists("daysRemaining", $context) ? $context["daysRemaining"] : (function () { throw new RuntimeError('Variable "daysRemaining" does not exist.', 330, $this->source); })()) > 0)) {
                    // line 331
                    yield "                            (";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["daysRemaining"]) || array_key_exists("daysRemaining", $context) ? $context["daysRemaining"] : (function () { throw new RuntimeError('Variable "daysRemaining" does not exist.', 331, $this->source); })()), "html", null, true);
                    yield "j restant)
                        ";
                } else {
                    // line 333
                    yield "                            (Délai expiré)
                        ";
                }
                // line 335
                yield "                    </span>
                ";
            }
            // line 337
            yield "            ";
        }
        // line 338
        yield "        </div>
        <div class=\"btn-group w-100 w-md-auto\" role=\"group\">
            <button type=\"button\" class=\"btn btn-outline-secondary btn-action btn-sm\" onclick=\"window.print()\" title=\"Imprimer\">
                <i class=\"fas fa-print me-1\"></i> <span class=\"d-none d-sm-inline\">Imprimer</span>
            </button>
            ";
        // line 343
        if ((($tmp = (isset($context["canEdit"]) || array_key_exists("canEdit", $context) ? $context["canEdit"] : (function () { throw new RuntimeError('Variable "canEdit" does not exist.', 343, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 344
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 344, $this->source); })()), "id", [], "any", false, false, false, 344)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-action btn-sm\">
                    <i class=\"fas fa-edit me-1\"></i> <span class=\"d-none d-sm-inline\">Modifier</span>
                </a>
            ";
        }
        // line 348
        yield "            
            ";
        // line 350
        yield "            ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 350, $this->source); })()), "hasIssue", [], "any", false, false, false, 350)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 351
            yield "                ";
            $context["creditNote"] = ((array_key_exists("supplierCreditNote", $context)) ? ((isset($context["supplierCreditNote"]) || array_key_exists("supplierCreditNote", $context) ? $context["supplierCreditNote"] : (function () { throw new RuntimeError('Variable "supplierCreditNote" does not exist.', 351, $this->source); })())) : (null));
            // line 352
            yield "                ";
            if ((($tmp = (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 352, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 353
                yield "                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 353, $this->source); })()), "id", [], "any", false, false, false, 353)]), "html", null, true);
                yield "\" class=\"btn btn-outline-info btn-action btn-sm\">
                        <i class=\"fas fa-file-invoice-dollar me-1\"></i> <span class=\"d-none d-sm-inline\">Voir l'avoir</span>
                    </a>
                ";
            } else {
                // line 357
                yield "                    <button type=\"button\" class=\"btn btn-outline-secondary btn-action btn-sm\" disabled>
                        <i class=\"fas fa-file-invoice-dollar me-1\"></i> Avoir
                    </button>
                ";
            }
            // line 361
            yield "            ";
        } elseif ((array_key_exists("canReportIssue", $context) && (isset($context["canReportIssue"]) || array_key_exists("canReportIssue", $context) ? $context["canReportIssue"] : (function () { throw new RuntimeError('Variable "canReportIssue" does not exist.', 361, $this->source); })()))) {
            // line 362
            yield "                ";
            if (((array_key_exists("purchaseItem", $context) && (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 362, $this->source); })())) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 362, $this->source); })()), "purchase", [], "any", false, false, false, 362))) {
                // line 363
                yield "                    ";
                $context["purchase"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 363, $this->source); })()), "purchase", [], "any", false, false, false, 363);
                // line 364
                yield "                    ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 364, $this->source); })()), "receivedAt", [], "any", false, false, false, 364)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 365
                    yield "                        ";
                    $context["daysSinceReception"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extension\CoreExtension']->convertDate(), "diff", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 365, $this->source); })()), "receivedAt", [], "any", false, false, false, 365)], "method", false, false, false, 365), "days", [], "any", false, false, false, 365);
                    // line 366
                    yield "                        ";
                    $context["daysRemaining"] = (30 - (isset($context["daysSinceReception"]) || array_key_exists("daysSinceReception", $context) ? $context["daysSinceReception"] : (function () { throw new RuntimeError('Variable "daysSinceReception" does not exist.', 366, $this->source); })()));
                    // line 367
                    yield "                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_new", ["batchId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 367, $this->source); })()), "id", [], "any", false, false, false, 367)]), "html", null, true);
                    yield "\" class=\"btn btn-outline-danger btn-action btn-sm\" title=\"Encore ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["daysRemaining"]) || array_key_exists("daysRemaining", $context) ? $context["daysRemaining"] : (function () { throw new RuntimeError('Variable "daysRemaining" does not exist.', 367, $this->source); })()), "html", null, true);
                    yield " jour(s)\">
                            <i class=\"fas fa-exclamation-triangle me-1\"></i> 
                            <span class=\"d-none d-sm-inline\">Signaler</span>
                            <span class=\"badge bg-danger ms-1\">";
                    // line 370
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["daysRemaining"]) || array_key_exists("daysRemaining", $context) ? $context["daysRemaining"] : (function () { throw new RuntimeError('Variable "daysRemaining" does not exist.', 370, $this->source); })()), "html", null, true);
                    yield "j</span>
                        </a>
                    ";
                } else {
                    // line 373
                    yield "                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_new", ["batchId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 373, $this->source); })()), "id", [], "any", false, false, false, 373)]), "html", null, true);
                    yield "\" class=\"btn btn-outline-danger btn-action btn-sm\">
                            <i class=\"fas fa-exclamation-triangle me-1\"></i> <span class=\"d-none d-sm-inline\">Signaler</span>
                        </a>
                    ";
                }
                // line 377
                yield "                ";
            } else {
                // line 378
                yield "                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_new", ["batchId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 378, $this->source); })()), "id", [], "any", false, false, false, 378)]), "html", null, true);
                yield "\" class=\"btn btn-outline-danger btn-action btn-sm\">
                        <i class=\"fas fa-exclamation-triangle me-1\"></i> <span class=\"d-none d-sm-inline\">Signaler</span>
                    </a>
                ";
            }
            // line 382
            yield "            ";
        } else {
            // line 383
            yield "                ";
            if (((array_key_exists("purchaseItem", $context) && (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 383, $this->source); })())) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 383, $this->source); })()), "purchase", [], "any", false, false, false, 383))) {
                // line 384
                yield "                    ";
                $context["purchase"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 384, $this->source); })()), "purchase", [], "any", false, false, false, 384);
                // line 385
                yield "                    ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 385, $this->source); })()), "receivedAt", [], "any", false, false, false, 385)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 386
                    yield "                        ";
                    $context["daysSinceReception"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extension\CoreExtension']->convertDate(), "diff", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 386, $this->source); })()), "receivedAt", [], "any", false, false, false, 386)], "method", false, false, false, 386), "days", [], "any", false, false, false, 386);
                    // line 387
                    yield "                        ";
                    if (((isset($context["daysSinceReception"]) || array_key_exists("daysSinceReception", $context) ? $context["daysSinceReception"] : (function () { throw new RuntimeError('Variable "daysSinceReception" does not exist.', 387, $this->source); })()) > 30)) {
                        // line 388
                        yield "                            <button type=\"button\" class=\"btn btn-outline-secondary btn-action btn-sm\" disabled>
                                <i class=\"fas fa-exclamation-triangle me-1\"></i> <span class=\"d-none d-sm-inline\">Signalement expiré</span>
                                <span class=\"badge bg-secondary ms-1\">+";
                        // line 390
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["daysSinceReception"]) || array_key_exists("daysSinceReception", $context) ? $context["daysSinceReception"] : (function () { throw new RuntimeError('Variable "daysSinceReception" does not exist.', 390, $this->source); })()) - 30), "html", null, true);
                        yield "j</span>
                            </button>
                        ";
                    } else {
                        // line 393
                        yield "                            <button type=\"button\" class=\"btn btn-outline-secondary btn-action btn-sm\" disabled>
                                <i class=\"fas fa-exclamation-triangle me-1\"></i> <span class=\"d-none d-sm-inline\">Indisponible</span>
                            </button>
                        ";
                    }
                    // line 397
                    yield "                    ";
                } else {
                    // line 398
                    yield "                        <button type=\"button\" class=\"btn btn-outline-secondary btn-action btn-sm\" disabled>
                            <i class=\"fas fa-exclamation-triangle me-1\"></i> <span class=\"d-none d-sm-inline\">Indisponible</span>
                        </button>
                    ";
                }
                // line 402
                yield "                ";
            } else {
                // line 403
                yield "                    <button type=\"button\" class=\"btn btn-outline-secondary btn-action btn-sm\" disabled>
                        <i class=\"fas fa-exclamation-triangle me-1\"></i> <span class=\"d-none d-sm-inline\">Indisponible</span>
                    </button>
                ";
            }
            // line 407
            yield "            ";
        }
        // line 408
        yield "            
            <a href=\"";
        // line 409
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_index", ["productId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 409, $this->source); })()), "id", [], "any", false, false, false, 409)]), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary btn-action btn-sm\">
                <i class=\"fas fa-arrow-left me-1\"></i> <span class=\"d-none d-sm-inline\">Retour</span>
            </a>
        </div>
    </div>

    <div class=\"row g-2 g-md-3\">
        <!-- Colonne gauche - Informations générales -->
        <div class=\"col-12 col-lg-6\">
            <div class=\"card info-card border-0 shadow-sm mb-3 mb-md-4\">
                <div class=\"card-header bg-white py-2 py-md-3\">
                    <h5 class=\"mb-0 fw-semibold small\">
                        <i class=\"fas fa-info-circle me-2 text-primary\"></i>
                        Informations générales
                    </h5>
                </div>
                <div class=\"card-body p-2 p-md-3\">
                    <div class=\"row g-2\">
                        <div class=\"col-12 col-sm-6\">
                            <dl class=\"row mb-0 g-1\">
                                <dt class=\"col-5 text-muted small\">N° lot</dt>
                                <dd class=\"col-7 fw-bold small\">";
        // line 430
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 430, $this->source); })()), "batchNumber", [], "any", false, false, false, 430), "html", null, true);
        yield "</dd>
                                
                                <dt class=\"col-5 text-muted small\">Produit</dt>
                                <dd class=\"col-7 small\">
                                    <a href=\"";
        // line 434
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 434, $this->source); })()), "id", [], "any", false, false, false, 434)]), "html", null, true);
        yield "\" class=\"text-decoration-none\">
                                        ";
        // line 435
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 435, $this->source); })()), "name", [], "any", false, false, false, 435)), "truncate", [25], "method", false, false, false, 435), "html", null, true);
        yield "
                                    </a>
                                </dd>
                                
                                <dt class=\"col-5 text-muted small\">Code-barres</dt>
                                <dd class=\"col-7 small\">";
        // line 440
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 440, $this->source); })()), "barcode", [], "any", false, false, false, 440)), "truncate", [12], "method", false, false, false, 440), "html", null, true);
        yield "</dd>
                                
                                <dt class=\"col-5 text-muted small\">Catégorie</dt>
                                <dd class=\"col-7 small\">";
        // line 443
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 443, $this->source); })()), "category", [], "any", false, false, false, 443)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 443, $this->source); })()), "category", [], "any", false, false, false, 443), "name", [], "any", false, false, false, 443), "html", null, true)) : ("—"));
        yield "</dd>
                            </dl>
                        </div>
                        <div class=\"col-12 col-sm-6\">
                            <dl class=\"row mb-0 g-1\">
                                <dt class=\"col-5 text-muted small\">Emplacement</dt>
                                <dd class=\"col-7 small\">
                                    ";
        // line 450
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 450, $this->source); })()), "location", [], "any", false, false, false, 450) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 450, $this->source); })()), "locationEntity", [], "any", false, false, false, 450))) {
            // line 451
            yield "                                        <span class=\"badge bg-info text-dark\">
                                            <i class=\"fas fa-map-marker-alt me-1\"></i> 
                                            ";
            // line 453
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 453, $this->source); })()), "locationEntity", [], "any", false, false, false, 453)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 453, $this->source); })()), "locationEntity", [], "any", false, false, false, 453), "displayName", [], "any", false, false, false, 453)), "truncate", [12], "method", false, false, false, 453), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 453, $this->source); })()), "location", [], "any", false, false, false, 453)), "truncate", [12], "method", false, false, false, 453), "html", null, true)));
            yield "
                                        </span>
                                    ";
        } else {
            // line 456
            yield "                                        <span class=\"text-muted\">—</span>
                                    ";
        }
        // line 458
        yield "                                </dd>
                                
                                <dt class=\"col-5 text-muted small\">Statut</dt>
                                <dd class=\"col-7 small\">
                                    <span class=\"badge ";
        // line 462
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 462, $this->source); })()), "isActive", [], "any", false, false, false, 462)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-secondary"));
        yield "\">
                                        <i class=\"fas ";
        // line 463
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 463, $this->source); })()), "isActive", [], "any", false, false, false, 463)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-check-circle") : ("fa-pause-circle"));
        yield " me-1\"></i>
                                        ";
        // line 464
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 464, $this->source); })()), "isActive", [], "any", false, false, false, 464)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Inactif"));
        yield "
                                    </span>
                                </dd>
                                
                                <dt class=\"col-5 text-muted small\">Avoir</dt>
                                <dd class=\"col-7 small\">
                                    ";
        // line 470
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 470, $this->source); })()), "hasIssue", [], "any", false, false, false, 470)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 471
            yield "                                        <span class=\"badge ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 471, $this->source); })()), "issueStatusBadgeClass", [], "any", false, false, false, 471), "html", null, true);
            yield "\">
                                            ";
            // line 472
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 472, $this->source); })()), "issueStatusLabel", [], "any", false, false, false, 472)), "truncate", [12], "method", false, false, false, 472), "html", null, true);
            yield "
                                        </span>
                                        ";
            // line 474
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 474, $this->source); })()), "issuePriority", [], "any", false, false, false, 474) == "critical")) {
                // line 475
                yield "                                            <span class=\"badge bg-danger ms-1 small\">Critique</span>
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 476
(isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 476, $this->source); })()), "issuePriority", [], "any", false, false, false, 476) == "high")) {
                // line 477
                yield "                                            <span class=\"badge bg-warning text-dark ms-1 small\">Haute</span>
                                        ";
            }
            // line 479
            yield "                                    ";
        } else {
            // line 480
            yield "                                        <span class=\"text-muted\">Aucun</span>
                                    ";
        }
        // line 482
        yield "                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quantités et prix -->
            <div class=\"card info-card border-0 shadow-sm mb-3 mb-md-4\">
                <div class=\"card-header bg-white py-2 py-md-3\">
                    <h5 class=\"mb-0 fw-semibold small\">
                        <i class=\"fas fa-chart-line me-2 text-success\"></i>
                        Quantités et prix
                    </h5>
                </div>
                <div class=\"card-body p-2 p-md-3\">
                    <div class=\"row g-2 text-center\">
                        <div class=\"col-4 col-md-4\">
                            <div class=\"p-2 p-md-3 bg-light rounded-3\">
                                <small class=\"text-muted d-block\">Initiale</small>
                                <span class=\"fw-bold text-primary fs-5\">";
        // line 502
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 502, $this->source); })()), "initialQuantity", [], "any", false, false, false, 502), "html", null, true);
        yield "</span>
                                <small class=\"d-block text-muted\">";
        // line 503
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 503)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 503, $this->source); })()), "unit", [], "any", false, false, false, 503), "pièce(s)")) : ("pièce(s)"))), "truncate", [8], "method", false, false, false, 503), "html", null, true);
        yield "</small>
                            </div>
                        </div>
                        <div class=\"col-4 col-md-4\">
                            <div class=\"p-2 p-md-3 bg-light rounded-3\">
                                <small class=\"text-muted d-block\">Actuelle</small>
                                <span class=\"fw-bold fs-5 ";
        // line 509
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 509, $this->source); })()), "currentQuantity", [], "any", false, false, false, 509) <= 10)) {
            yield "text-danger";
        } else {
            yield "text-success";
        }
        yield "\">
                                    ";
        // line 510
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 510, $this->source); })()), "currentQuantity", [], "any", false, false, false, 510), "html", null, true);
        yield "
                                </span>
                                <small class=\"d-block text-muted\">";
        // line 512
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 512)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 512, $this->source); })()), "unit", [], "any", false, false, false, 512), "pièce(s)")) : ("pièce(s)"))), "truncate", [8], "method", false, false, false, 512), "html", null, true);
        yield "</small>
                                ";
        // line 513
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 513, $this->source); })()), "currentQuantity", [], "any", false, false, false, 513) <= 10)) {
            // line 514
            yield "                                    <span class=\"badge bg-warning text-dark mt-1 d-block small\">Stock faible</span>
                                ";
        }
        // line 516
        yield "                            </div>
                        </div>
                        <div class=\"col-4 col-md-4\">
                            <div class=\"p-2 p-md-3 bg-light rounded-3\">
                                <small class=\"text-muted d-block\">Restant</small>
                                <span class=\"fw-bold fs-5\">
                                    ";
        // line 522
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 522, $this->source); })()), "currentQuantity", [], "any", false, false, false, 522) / CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 522, $this->source); })()), "initialQuantity", [], "any", false, false, false, 522)) * 100)), "html", null, true);
        yield "%
                                </span>
                                <div class=\"progress mt-1\" style=\"height:4px\">
                                    <div class=\"progress-bar ";
        // line 525
        if ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 525, $this->source); })()), "currentQuantity", [], "any", false, false, false, 525) / CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 525, $this->source); })()), "initialQuantity", [], "any", false, false, false, 525)) * 100) <= 10)) {
            yield "bg-danger";
        } elseif ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 525, $this->source); })()), "currentQuantity", [], "any", false, false, false, 525) / CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 525, $this->source); })()), "initialQuantity", [], "any", false, false, false, 525)) * 100) <= 30)) {
            yield "bg-warning";
        } else {
            yield "bg-success";
        }
        yield "\" 
                                         style=\"width: ";
        // line 526
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 526, $this->source); })()), "currentQuantity", [], "any", false, false, false, 526) / CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 526, $this->source); })()), "initialQuantity", [], "any", false, false, false, 526)) * 100)), "html", null, true);
        yield "%\">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row g-2 mt-2\">
                        <div class=\"col-6\">
                            <div class=\"p-2 p-md-3 bg-light rounded-3 text-center\">
                                <small class=\"text-muted d-block\">Prix unitaire</small>
                                <span class=\"fw-bold text-primary\">";
        // line 536
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 536, $this->source); })()), "unitPrice", [], "any", false, false, false, 536), CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 536, $this->source); })()), "hmaService", [], "any", false, false, false, 536)), "html", null, true);
        yield "</span>
                            </div>
                        </div>
                        <div class=\"col-6\">
                            <div class=\"p-2 p-md-3 bg-light rounded-3 text-center\">
                                <small class=\"text-muted d-block\">Valeur totale</small>
                                <span class=\"fw-bold text-success\">";
        // line 542
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency((CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 542, $this->source); })()), "currentQuantity", [], "any", false, false, false, 542) * CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 542, $this->source); })()), "unitPrice", [], "any", false, false, false, 542)), CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 542, $this->source); })()), "hmaService", [], "any", false, false, false, 542)), "html", null, true);
        yield "</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Dates -->
            <div class=\"card info-card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-2 py-md-3\">
                    <h5 class=\"mb-0 fw-semibold small\">
                        <i class=\"fas fa-calendar-alt me-2 text-warning\"></i>
                        Dates
                    </h5>
                </div>
                <div class=\"card-body p-2 p-md-3\">
                    <div class=\"row g-2\">
                        <div class=\"col-6\">
                            <div class=\"p-2 p-md-3 bg-light rounded-3 text-center\">
                                <small class=\"text-muted d-block\">Fabrication</small>
                                <span class=\"fw-bold small\">
                                    ";
        // line 563
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 563, $this->source); })()), "manufacturingDate", [], "any", false, false, false, 563)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 563, $this->source); })()), "manufacturingDate", [], "any", false, false, false, 563), "d/m/Y"), "html", null, true)) : ("—"));
        yield "
                                </span>
                            </div>
                        </div>
                        <div class=\"col-6\">
                            <div class=\"p-2 p-md-3 bg-light rounded-3 text-center\">
                                <small class=\"text-muted d-block\">Expiration</small>
                                <span class=\"fw-bold small ";
        // line 570
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 570, $this->source); })()), "expiryDate", [], "any", false, false, false, 570) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 570, $this->source); })()), "expiryDate", [], "any", false, false, false, 570) < $this->extensions['Twig\Extension\CoreExtension']->convertDate()))) {
            yield "text-danger";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 570, $this->source); })()), "expiryDate", [], "any", false, false, false, 570) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 570, $this->source); })()), "expiryDate", [], "any", false, false, false, 570) < $this->extensions['Twig\Extension\CoreExtension']->convertDate("+30 days")))) {
            yield "text-warning";
        } else {
            yield "text-success";
        }
        yield "\">
                                    ";
        // line 571
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 571, $this->source); })()), "expiryDate", [], "any", false, false, false, 571)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 571, $this->source); })()), "expiryDate", [], "any", false, false, false, 571), "d/m/Y"), "html", null, true)) : ("Non périssable"));
        yield "
                                </span>
                                ";
        // line 573
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 573, $this->source); })()), "expiryDate", [], "any", false, false, false, 573) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 573, $this->source); })()), "expiryDate", [], "any", false, false, false, 573) < $this->extensions['Twig\Extension\CoreExtension']->convertDate()))) {
            // line 574
            yield "                                    <span class=\"badge bg-danger d-block mt-1 small\">Expiré</span>
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 575
(isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 575, $this->source); })()), "expiryDate", [], "any", false, false, false, 575) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 575, $this->source); })()), "expiryDate", [], "any", false, false, false, 575) < $this->extensions['Twig\Extension\CoreExtension']->convertDate("+30 days")))) {
            // line 576
            yield "                                    <span class=\"badge bg-warning text-dark d-block mt-1 small\">Expire bientôt</span>
                                ";
        }
        // line 578
        yield "                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Colonne droite - Avoir et mouvements -->
        <div class=\"col-12 col-lg-6\">
            <!-- Informations avoir -->
            ";
        // line 588
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 588, $this->source); })()), "hasIssue", [], "any", false, false, false, 588)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 589
            yield "            <div class=\"card info-card border-0 shadow-sm mb-3 mb-md-4 status-card status-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 589, $this->source); })()), "issueStatus", [], "any", false, false, false, 589), "html", null, true);
            yield "\">
                <div class=\"card-header bg-white py-2 py-md-3 d-flex justify-content-between align-items-center flex-wrap gap-1\">
                    <h5 class=\"mb-0 fw-semibold small\">
                        <i class=\"fas fa-file-invoice-dollar me-2 text-danger\"></i>
                        Avoir fournisseur
                    </h5>
                    <span class=\"badge ";
            // line 595
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 595, $this->source); })()), "issueStatusBadgeClass", [], "any", false, false, false, 595), "html", null, true);
            yield " fs-6 px-2 px-md-3 py-1 py-md-2\">
                        ";
            // line 596
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 596, $this->source); })()), "issueStatusLabel", [], "any", false, false, false, 596), "html", null, true);
            yield "
                    </span>
                </div>
                <div class=\"card-body p-2 p-md-3\">
                    <div class=\"row g-2 mb-2\">
                        <div class=\"col-6\">
                            <small class=\"text-muted d-block\">Montant déclaré</small>
                            <span class=\"fw-bold text-danger\">";
            // line 603
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 603, $this->source); })()), "issueDeclaredAmount", [], "any", false, false, false, 603), CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 603, $this->source); })()), "hmaService", [], "any", false, false, false, 603)), "html", null, true);
            yield "</span>
                        </div>
                        <div class=\"col-6\">
                            <small class=\"text-muted d-block\">Priorité</small>
                            <span class=\"badge ";
            // line 607
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 607, $this->source); })()), "issuePriorityBadgeClass", [], "any", false, false, false, 607), "html", null, true);
            yield "\">
                                ";
            // line 608
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 608, $this->source); })()), "issuePriorityLabel", [], "any", false, false, false, 608), "html", null, true);
            yield "
                            </span>
                        </div>
                    </div>
                    <div class=\"row g-2 mb-2\">
                        <div class=\"col-6\">
                            <small class=\"text-muted d-block\">Récupéré</small>
                            <span class=\"fw-bold text-success\">";
            // line 615
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 615, $this->source); })()), "issueRecoveredAmount", [], "any", false, false, false, 615)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 615, $this->source); })()), "issueRecoveredAmount", [], "any", false, false, false, 615)) : (0)), CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 615, $this->source); })()), "hmaService", [], "any", false, false, false, 615)), "html", null, true);
            yield "</span>
                        </div>
                        <div class=\"col-6\">
                            <small class=\"text-muted d-block\">Perdu</small>
                            <span class=\"fw-bold text-secondary\">";
            // line 619
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 619, $this->source); })()), "issueLostAmount", [], "any", false, false, false, 619)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 619, $this->source); })()), "issueLostAmount", [], "any", false, false, false, 619)) : (0)), CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 619, $this->source); })()), "hmaService", [], "any", false, false, false, 619)), "html", null, true);
            yield "</span>
                        </div>
                    </div>
                    <div class=\"row g-2\">
                        <div class=\"col-6\">
                            <small class=\"text-muted d-block\">Signalé le</small>
                            <span class=\"small\">";
            // line 625
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 625, $this->source); })()), "issueReportedAt", [], "any", false, false, false, 625)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 625, $this->source); })()), "issueReportedAt", [], "any", false, false, false, 625), "d/m/Y H:i"), "html", null, true)) : ("—"));
            yield "</span>
                        </div>
                        <div class=\"col-6\">
                            <small class=\"text-muted d-block\">Résolu le</small>
                            <span class=\"small\">";
            // line 629
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 629, $this->source); })()), "issueResolvedAt", [], "any", false, false, false, 629)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 629, $this->source); })()), "issueResolvedAt", [], "any", false, false, false, 629), "d/m/Y H:i"), "html", null, true)) : ("—"));
            yield "</span>
                        </div>
                    </div>
                    ";
            // line 632
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 632, $this->source); })()), "supplierCreditNoteId", [], "any", false, false, false, 632)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 633
                yield "                        <div class=\"mt-3 text-center\">
                            <a href=\"";
                // line 634
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 634, $this->source); })()), "supplierCreditNoteId", [], "any", false, false, false, 634)]), "html", null, true);
                yield "\" class=\"btn btn-outline-danger btn-sm w-100\">
                                <i class=\"fas fa-eye me-1\"></i> Voir le détail de l'avoir
                            </a>
                        </div>
                    ";
            }
            // line 639
            yield "                </div>
            </div>
            ";
        } else {
            // line 642
            yield "            <div class=\"card info-card border-0 shadow-sm mb-3 mb-md-4 bg-light\">
                <div class=\"card-body text-center py-3 py-md-4 p-2 p-md-3\">
                    <i class=\"fas fa-check-circle fa-2x fa-3x text-success mb-2\"></i>
                    <h5 class=\"mb-1 small\">Aucun problème signalé</h5>
                    <p class=\"text-muted small mb-3\">Ce lot n'a pas d'avoir fournisseur associé</p>
                    
                    ";
            // line 648
            if ((($tmp = (isset($context["canReportIssue"]) || array_key_exists("canReportIssue", $context) ? $context["canReportIssue"] : (function () { throw new RuntimeError('Variable "canReportIssue" does not exist.', 648, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 649
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_new", ["batchId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 649, $this->source); })()), "id", [], "any", false, false, false, 649)]), "html", null, true);
                yield "\" class=\"btn btn-outline-danger btn-sm\">
                            <i class=\"fas fa-exclamation-triangle me-1\"></i> Signaler un problème
                        </a>
                    ";
            } else {
                // line 653
                yield "                        <button type=\"button\" class=\"btn btn-outline-secondary btn-sm\" disabled>
                            <i class=\"fas fa-exclamation-triangle me-1\"></i> Signalement indisponible
                        </button>
                        <p class=\"text-muted small mt-2\">Disponible uniquement pour les lots issus de commandes réceptionnées depuis moins de 30 jours.</p>
                    ";
            }
            // line 658
            yield "                </div>
            </div>
            ";
        }
        // line 661
        yield "
            <!-- Informations d'achat -->
            ";
        // line 663
        if ((($tmp = (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 663, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 664
            yield "            <div class=\"card info-card border-0 shadow-sm mb-3 mb-md-4\">
                <div class=\"card-header bg-white py-2 py-md-3\">
                    <h5 class=\"mb-0 fw-semibold small\">
                        <i class=\"fas fa-receipt me-2 text-primary\"></i>
                        Informations d'achat
                    </h5>
                </div>
                <div class=\"card-body p-2 p-md-3\">
                    <dl class=\"row mb-0 g-1\">
                        <dt class=\"col-5 col-sm-4 text-muted small\">Commande</dt>
                        <dd class=\"col-7 col-sm-8 small\">
                            <a href=\"";
            // line 675
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 675, $this->source); })()), "purchase", [], "any", false, false, false, 675), "id", [], "any", false, false, false, 675)]), "html", null, true);
            yield "\" class=\"text-decoration-none\">
                                ";
            // line 676
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 676, $this->source); })()), "purchase", [], "any", false, false, false, 676), "purchaseNumber", [], "any", false, false, false, 676), "html", null, true);
            yield "
                            </a>
                        </dd>
                        <dt class=\"col-5 col-sm-4 text-muted small\">Fournisseur</dt>
                        <dd class=\"col-7 col-sm-8 small\">";
            // line 680
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchaseItem"] ?? null), "purchase", [], "any", false, true, false, 680), "supplier", [], "any", false, true, false, 680), "name", [], "any", true, true, false, 680)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 680, $this->source); })()), "purchase", [], "any", false, false, false, 680), "supplier", [], "any", false, false, false, 680), "name", [], "any", false, false, false, 680), "Non renseigné")) : ("Non renseigné"))), "truncate", [20], "method", false, false, false, 680), "html", null, true);
            yield "</dd>
                        <dt class=\"col-5 col-sm-4 text-muted small\">Date d'achat</dt>
                        <dd class=\"col-7 col-sm-8 small\">";
            // line 682
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 682, $this->source); })()), "purchase", [], "any", false, false, false, 682), "createdAt", [], "any", false, false, false, 682), "d/m/Y"), "html", null, true);
            yield "</dd>
                        <dt class=\"col-5 col-sm-4 text-muted small\">Qté achetée</dt>
                        <dd class=\"col-7 col-sm-8 small\">";
            // line 684
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 684, $this->source); })()), "quantity", [], "any", false, false, false, 684), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 684)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 684, $this->source); })()), "unit", [], "any", false, false, false, 684), "pièce(s)")) : ("pièce(s)"))), "truncate", [6], "method", false, false, false, 684), "html", null, true);
            yield "</dd>
                        <dt class=\"col-5 col-sm-4 text-muted small\">Prix d'achat</dt>
                        <dd class=\"col-7 col-sm-8 small\">";
            // line 686
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 686, $this->source); })()), "unitPrice", [], "any", false, false, false, 686), CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 686, $this->source); })()), "hmaService", [], "any", false, false, false, 686)), "html", null, true);
            yield "</dd>
                    </dl>
                </div>
            </div>
            ";
        }
        // line 691
        yield "
            <!-- Mouvements de stock -->
            <div class=\"card info-card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-2 py-md-3 d-flex justify-content-between align-items-center flex-wrap gap-1\">
                    <h5 class=\"mb-0 fw-semibold small\">
                        <i class=\"fas fa-exchange-alt me-2 text-info\"></i>
                        Mouvements de stock
                    </h5>
                    <span class=\"badge bg-secondary\">";
        // line 699
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 699, $this->source); })()), "stockMovements", [], "any", false, false, false, 699)), "html", null, true);
        yield "</span>
                </div>
                <div class=\"card-body p-0\">
                    ";
        // line 702
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 702, $this->source); })()), "stockMovements", [], "any", false, false, false, 702)) > 0)) {
            // line 703
            yield "                        <div class=\"list-group list-group-flush\">
                            ";
            // line 704
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::sort($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 704, $this->source); })()), "stockMovements", [], "any", false, false, false, 704), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 704, $this->source); })()), "createdAt", [], "any", false, false, false, 704) <=> CoreExtension::getAttribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 704, $this->source); })()), "createdAt", [], "any", false, false, false, 704)); }));
            foreach ($context['_seq'] as $context["_key"] => $context["movement"]) {
                // line 705
                yield "                                <div class=\"list-group-item p-2 p-md-3\">
                                    <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start gap-1\">
                                        <div class=\"flex-grow-1 w-100\">
                                            <span class=\"badge 
                                                ";
                // line 709
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "movementType", [], "any", false, false, false, 709) == "PURCHASE")) {
                    yield "bg-success
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 710
$context["movement"], "movementType", [], "any", false, false, false, 710) == "SALE")) {
                    yield "bg-danger
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 711
$context["movement"], "movementType", [], "any", false, false, false, 711) == "ADJUSTMENT")) {
                    yield "bg-warning text-dark
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 712
$context["movement"], "movementType", [], "any", false, false, false, 712) == "RETURN")) {
                    yield "bg-info
                                                ";
                } else {
                    // line 713
                    yield "bg-secondary
                                                ";
                }
                // line 714
                yield " me-1\">
                                                <i class=\"fas 
                                                    ";
                // line 716
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "movementType", [], "any", false, false, false, 716) == "PURCHASE")) {
                    yield "fa-cart-plus
                                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 717
$context["movement"], "movementType", [], "any", false, false, false, 717) == "SALE")) {
                    yield "fa-shopping-cart
                                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 718
$context["movement"], "movementType", [], "any", false, false, false, 718) == "ADJUSTMENT")) {
                    yield "fa-sliders-h
                                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 719
$context["movement"], "movementType", [], "any", false, false, false, 719) == "RETURN")) {
                    yield "fa-undo-alt
                                                    ";
                } else {
                    // line 720
                    yield "fa-question
                                                    ";
                }
                // line 721
                yield " me-1\"></i>
                                                ";
                // line 722
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "movementType", [], "any", false, false, false, 722) == "PURCHASE")) {
                    yield "Achat
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 723
$context["movement"], "movementType", [], "any", false, false, false, 723) == "SALE")) {
                    yield "Vente
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 724
$context["movement"], "movementType", [], "any", false, false, false, 724) == "ADJUSTMENT")) {
                    yield "Ajustement
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 725
$context["movement"], "movementType", [], "any", false, false, false, 725) == "RETURN")) {
                    yield "Retour
                                                ";
                } else {
                    // line 726
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "movementType", [], "any", false, false, false, 726), "html", null, true);
                }
                // line 727
                yield "                                            </span>
                                            <span class=\"fw-bold\">";
                // line 728
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "quantity", [], "any", false, false, false, 728), "html", null, true);
                yield "</span>
                                            <small class=\"text-muted\">";
                // line 729
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 729)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 729, $this->source); })()), "unit", [], "any", false, false, false, 729), "pièce(s)")) : ("pièce(s)"))), "truncate", [6], "method", false, false, false, 729), "html", null, true);
                yield "</small>
                                            ";
                // line 730
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "unitPrice", [], "any", false, false, false, 730)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 731
                    yield "                                                <br><small class=\"text-muted\">Prix: ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "unitPrice", [], "any", false, false, false, 731), CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 731, $this->source); })()), "hmaService", [], "any", false, false, false, 731)), "html", null, true);
                    yield "</small>
                                            ";
                }
                // line 733
                yield "                                        </div>
                                        <div class=\"text-start text-sm-end w-100 w-sm-auto\">
                                            <small class=\"text-muted d-block\">";
                // line 735
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "createdAt", [], "any", false, false, false, 735), "d/m/Y H:i"), "html", null, true);
                yield "</small>
                                            ";
                // line 736
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user", [], "any", false, false, false, 736)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 737
                    yield "                                                <small class=\"text-muted\">
                                                    <i class=\"fas fa-user me-1\"></i>";
                    // line 738
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user", [], "any", false, true, false, 738), "fullName", [], "any", true, true, false, 738)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user", [], "any", false, false, false, 738), "fullName", [], "any", false, false, false, 738), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user", [], "any", false, false, false, 738), "email", [], "any", false, false, false, 738))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user", [], "any", false, false, false, 738), "email", [], "any", false, false, false, 738)))), "truncate", [15], "method", false, false, false, 738), "html", null, true);
                    yield "
                                                </small>
                                            ";
                }
                // line 741
                yield "                                        </div>
                                    </div>
                                    ";
                // line 743
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "notes", [], "any", false, false, false, 743)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 744
                    yield "                                        <div class=\"mt-1\">
                                            <small class=\"text-muted\">
                                                <i class=\"fas fa-comment me-1\"></i>
                                                ";
                    // line 747
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "notes", [], "any", false, false, false, 747)), "truncate", [60], "method", false, false, false, 747), "html", null, true);
                    yield "
                                            </small>
                                        </div>
                                    ";
                }
                // line 751
                yield "                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['movement'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 753
            yield "                        </div>
                    ";
        } else {
            // line 755
            yield "                        <div class=\"text-center py-3 py-md-4\">
                            <i class=\"fas fa-chart-line fa-2x text-muted mb-2\"></i>
                            <p class=\"text-muted mb-0 small\">Aucun mouvement de stock</p>
                        </div>
                    ";
        }
        // line 760
        yield "                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 767
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

        // line 768
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Correction du bouton d'impression
    const printBtn = document.querySelector('button[onclick*=\"print\"]');
    if (printBtn) {
        printBtn.addEventListener('click', function(e) {
            e.preventDefault();
            window.print();
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
        return "admin/stock_batch/show.html.twig";
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
        return array (  1359 => 768,  1346 => 767,  1330 => 760,  1323 => 755,  1319 => 753,  1312 => 751,  1305 => 747,  1300 => 744,  1298 => 743,  1294 => 741,  1288 => 738,  1285 => 737,  1283 => 736,  1279 => 735,  1275 => 733,  1269 => 731,  1267 => 730,  1263 => 729,  1259 => 728,  1256 => 727,  1253 => 726,  1248 => 725,  1244 => 724,  1240 => 723,  1236 => 722,  1233 => 721,  1229 => 720,  1224 => 719,  1220 => 718,  1216 => 717,  1212 => 716,  1208 => 714,  1204 => 713,  1199 => 712,  1195 => 711,  1191 => 710,  1187 => 709,  1181 => 705,  1177 => 704,  1174 => 703,  1172 => 702,  1166 => 699,  1156 => 691,  1148 => 686,  1141 => 684,  1136 => 682,  1131 => 680,  1124 => 676,  1120 => 675,  1107 => 664,  1105 => 663,  1101 => 661,  1096 => 658,  1089 => 653,  1081 => 649,  1079 => 648,  1071 => 642,  1066 => 639,  1058 => 634,  1055 => 633,  1053 => 632,  1047 => 629,  1040 => 625,  1031 => 619,  1024 => 615,  1014 => 608,  1010 => 607,  1003 => 603,  993 => 596,  989 => 595,  979 => 589,  977 => 588,  965 => 578,  961 => 576,  959 => 575,  956 => 574,  954 => 573,  949 => 571,  939 => 570,  929 => 563,  905 => 542,  896 => 536,  883 => 526,  873 => 525,  867 => 522,  859 => 516,  855 => 514,  853 => 513,  849 => 512,  844 => 510,  836 => 509,  827 => 503,  823 => 502,  801 => 482,  797 => 480,  794 => 479,  790 => 477,  788 => 476,  785 => 475,  783 => 474,  778 => 472,  773 => 471,  771 => 470,  762 => 464,  758 => 463,  754 => 462,  748 => 458,  744 => 456,  738 => 453,  734 => 451,  732 => 450,  722 => 443,  716 => 440,  708 => 435,  704 => 434,  697 => 430,  673 => 409,  670 => 408,  667 => 407,  661 => 403,  658 => 402,  652 => 398,  649 => 397,  643 => 393,  637 => 390,  633 => 388,  630 => 387,  627 => 386,  624 => 385,  621 => 384,  618 => 383,  615 => 382,  607 => 378,  604 => 377,  596 => 373,  590 => 370,  581 => 367,  578 => 366,  575 => 365,  572 => 364,  569 => 363,  566 => 362,  563 => 361,  557 => 357,  549 => 353,  546 => 352,  543 => 351,  540 => 350,  537 => 348,  529 => 344,  527 => 343,  520 => 338,  517 => 337,  513 => 335,  509 => 333,  503 => 331,  501 => 330,  497 => 329,  487 => 327,  484 => 326,  481 => 325,  478 => 324,  475 => 323,  473 => 322,  470 => 321,  465 => 320,  461 => 319,  455 => 316,  451 => 315,  443 => 310,  439 => 309,  433 => 308,  429 => 307,  421 => 301,  408 => 300,  105 => 7,  92 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/stock_batch/show.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Lot {{ batch.batchNumber }} - {{ product.name }}{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    :root {
        --card-radius: 1rem;
        --transition-speed: 0.2s;
    }

    .info-card {
        transition: transform var(--transition-speed), box-shadow var(--transition-speed);
        border-radius: var(--card-radius);
    }
    .info-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.1) !important;
    }
    
    .timeline {
        position: relative;
        padding-left: 2rem;
    }
    .timeline::before {
        content: '';
        position: absolute;
        left: 0.5rem;
        top: 0;
        bottom: 0;
        width: 2px;
        background: #e9ecef;
    }
    .timeline-item {
        position: relative;
        margin-bottom: 1.5rem;
    }
    .timeline-item::before {
        content: '';
        position: absolute;
        left: -1.75rem;
        top: 0.25rem;
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: var(--primary-color);
        border: 2px solid white;
        box-shadow: 0 0 0 2px var(--primary-color);
    }
    .timeline-item.issue::before {
        background: var(--danger-color);
        box-shadow: 0 0 0 2px var(--danger-color);
    }
    .timeline-item.resolved::before {
        background: var(--success-color);
        box-shadow: 0 0 0 2px var(--success-color);
    }
    .issue-badge {
        font-size: 0.75rem;
        padding: 0.3rem 0.6rem;
    }
    .attachment-preview {
        width: 100px;
        height: 100px;
        object-fit: cover;
        border-radius: 8px;
        cursor: pointer;
        transition: transform 0.2s;
    }
    .attachment-preview:hover {
        transform: scale(1.05);
    }
    .status-card {
        border-left: 4px solid;
    }
    .status-pending { border-left-color: var(--warning-color); }
    .status-acknowledged { border-left-color: var(--info-color); }
    .status-under_review { border-left-color: var(--primary-color); }
    .status-recovered { border-left-color: var(--success-color); }
    .status-lost { border-left-color: var(--danger-color); }
    .status-closed { border-left-color: #6c757d; }
    .badge i { margin-right: 4px; }
    
    .btn-action {
        transition: all 0.2s ease;
    }
    .btn-action:hover {
        transform: translateY(-2px);
    }

    /* ✅ RESPONSIVE */
    @media (max-width: 992px) {
        .container-fluid {
            padding-left: 0.75rem !important;
            padding-right: 0.75rem !important;
        }
        
        .d-flex.justify-content-between.align-items-center {
            flex-direction: column;
            align-items: flex-start !important;
            gap: 0.75rem !important;
        }
        
        /* Boutons en colonne sur tablette */
        .btn-group {
            flex-wrap: wrap;
            width: 100%;
        }
        .btn-group .btn {
            flex: 1 1 auto;
            min-width: calc(50% - 0.25rem);
            margin-bottom: 0.25rem;
            border-radius: 0.375rem !important;
        }
        .btn-group .btn:not(:last-child) {
            border-radius: 0.375rem !important;
        }
        
        .row > [class*=\"col-\"] {
            margin-bottom: 0.5rem;
        }
        
        .dl.row .col-sm-5, 
        .dl.row .col-sm-7 {
            width: 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }
    }

    @media (max-width: 768px) {
        /* Statistiques en colonne */
        .col-md-4, .col-md-6 {
            flex: 0 0 100%;
            max-width: 100%;
        }
        
        .row.text-center > .col-md-4 {
            margin-bottom: 0.5rem;
        }
        
        /* Boutons en 1 colonne sur mobile */
        .btn-group .btn {
            min-width: 100%;
            flex: 0 0 100%;
        }
        
        .btn-group .btn .badge.ms-1 {
            float: right;
        }
        
        /* Cartes ajustées */
        .info-card .card-body {
            padding: 0.75rem !important;
        }
        
        .info-card .card-header {
            padding: 0.5rem 0.75rem !important;
        }
        
        .p-3 {
            padding: 0.75rem !important;
        }
        
        h1.h3 {
            font-size: 1.1rem !important;
        }
        
        .breadcrumb {
            font-size: 0.7rem;
        }
        .breadcrumb-item + .breadcrumb-item::before {
            padding-right: 0.3rem;
            padding-left: 0.3rem;
        }
        
        /* Avoir - colonnes en vertical */
        .status-card .row.mb-3 > .col-md-6 {
            margin-bottom: 0.75rem;
        }
        
        .status-card .row.mb-3 > .col-md-6:last-child {
            margin-bottom: 0;
        }
        
        /* Mouvements de stock */
        .list-group-item {
            padding: 0.5rem 0.75rem !important;
        }
        .list-group-item .d-flex {
            flex-direction: column;
            align-items: stretch !important;
        }
        .list-group-item .d-flex .flex-grow-1 {
            margin-bottom: 0.25rem;
        }
        .list-group-item .text-end {
            text-align: left !important;
        }
        
        /* Dates */
        .row .col-md-6 .p-3 {
            margin-bottom: 0.5rem;
        }
        .row .col-md-6:last-child .p-3 {
            margin-bottom: 0;
        }
        
        /* Textes de description */
        .text-muted.mt-1 .badge {
            display: inline-block;
            margin-top: 0.25rem;
        }
        
        /* Désactiver les hover sur mobile */
        .info-card:hover {
            transform: none !important;
        }
        
        .btn-action:hover {
            transform: none !important;
        }
    }

    @media (max-width: 480px) {
        .container-fluid {
            padding-left: 0.5rem !important;
            padding-right: 0.5rem !important;
        }
        
        h1.h3 {
            font-size: 0.95rem !important;
        }
        
        .breadcrumb {
            font-size: 0.6rem;
        }
        
        .badge {
            font-size: 0.6rem !important;
        }
        
        .fs-5 {
            font-size: 1rem !important;
        }
        
        .p-3 {
            padding: 0.5rem !important;
        }
        
        .p-3 h3, .p-3 h4, .p-3 h5 {
            font-size: 1rem !important;
        }
        
        /* Avoir - montants */
        .fw-bold.text-danger.fs-5 {
            font-size: 1rem !important;
        }
        
        /* Mouvements - badges en ligne */
        .list-group-item .badge {
            display: inline-block;
            margin-bottom: 0.15rem;
        }
        .list-group-item .flex-grow-1 {
            font-size: 0.85rem;
        }
        
        /* Informations générales - affichage en colonne */
        .dl.row .col-sm-5 {
            font-size: 0.7rem;
        }
        .dl.row .col-sm-7 {
            font-size: 0.8rem;
            margin-bottom: 0.25rem;
        }
        .dl.row .col-sm-7:last-child {
            margin-bottom: 0;
        }
    }

    @media print {
        .no-print, .btn, .dropdown, .modal, .actions { display: none !important; }
        body { padding: 20px; }
        .card { box-shadow: none !important; border: 1px solid #ddd; }
        .info-card { transform: none !important; }
        .info-card:hover { transform: none !important; }
        .card-body { padding: 0.75rem !important; }
        .container-fluid { padding: 0 !important; }
        .row { margin: 0 !important; }
        .col-lg-6 { flex: 0 0 50%; max-width: 50%; }
        .no-print { display: none !important; }
        .btn-group .btn { display: none !important; }
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-3 mb-md-4 flex-wrap gap-2 gap-md-3 no-print\">
        <div class=\"w-100 w-md-auto\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb mb-1\">
                    <li class=\"breadcrumb-item\"><a href=\"{{ path('app_admin_product_index') }}\">Produits</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"{{ path('app_admin_product_show', {'id': product.id}) }}\">{{ product.name|u.truncate(20) }}</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"{{ path('app_admin_stock_batch_index', {'productId': product.id}) }}\">Lots</a></li>
                    <li class=\"breadcrumb-item active\">{{ batch.batchNumber|u.truncate(12) }}</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-boxes me-2 text-info\"></i>
                <span class=\"d-none d-sm-inline\">Lot {{ batch.batchNumber }}</span>
                <span class=\"d-inline d-sm-none\">Lot {{ batch.batchNumber|u.truncate(10) }}</span>
            </h1>
            <p class=\"text-muted mt-1 small\">
                <i class=\"fas fa-calendar-alt me-1\"></i> Créé le {{ batch.createdAt|date('d/m/Y H:i') }}
                {% if batch.updatedAt %} | Modifié le {{ batch.updatedAt|date('d/m/Y H:i') }}{% endif %}
            </p>
            {% if purchaseItem is defined and purchaseItem and purchaseItem.purchase %}
                {% set purchase = purchaseItem.purchase %}
                {% if purchase.receivedAt %}
                    {% set daysSinceReception = date().diff(purchase.receivedAt).days %}
                    {% set daysRemaining = 30 - daysSinceReception %}
                    <span class=\"badge {% if daysRemaining > 0 %}bg-success{% else %}bg-secondary{% endif %} mt-1\">
                        <i class=\"fas fa-calendar-check me-1\"></i>
                        Réceptionné le {{ purchase.receivedAt|date('d/m/Y') }}
                        {% if daysRemaining > 0 %}
                            ({{ daysRemaining }}j restant)
                        {% else %}
                            (Délai expiré)
                        {% endif %}
                    </span>
                {% endif %}
            {% endif %}
        </div>
        <div class=\"btn-group w-100 w-md-auto\" role=\"group\">
            <button type=\"button\" class=\"btn btn-outline-secondary btn-action btn-sm\" onclick=\"window.print()\" title=\"Imprimer\">
                <i class=\"fas fa-print me-1\"></i> <span class=\"d-none d-sm-inline\">Imprimer</span>
            </button>
            {% if canEdit %}
                <a href=\"{{ path('app_admin_stock_batch_edit', {'id': batch.id}) }}\" class=\"btn btn-warning btn-action btn-sm\">
                    <i class=\"fas fa-edit me-1\"></i> <span class=\"d-none d-sm-inline\">Modifier</span>
                </a>
            {% endif %}
            
            {# ✅ CONDITION POUR SIGNALER UN PROBLÈME #}
            {% if batch.hasIssue %}
                {% set creditNote = supplierCreditNote is defined ? supplierCreditNote : null %}
                {% if creditNote %}
                    <a href=\"{{ path('app_supplier_credit_note_show', {'id': creditNote.id}) }}\" class=\"btn btn-outline-info btn-action btn-sm\">
                        <i class=\"fas fa-file-invoice-dollar me-1\"></i> <span class=\"d-none d-sm-inline\">Voir l'avoir</span>
                    </a>
                {% else %}
                    <button type=\"button\" class=\"btn btn-outline-secondary btn-action btn-sm\" disabled>
                        <i class=\"fas fa-file-invoice-dollar me-1\"></i> Avoir
                    </button>
                {% endif %}
            {% elseif canReportIssue is defined and canReportIssue %}
                {% if purchaseItem is defined and purchaseItem and purchaseItem.purchase %}
                    {% set purchase = purchaseItem.purchase %}
                    {% if purchase.receivedAt %}
                        {% set daysSinceReception = date().diff(purchase.receivedAt).days %}
                        {% set daysRemaining = 30 - daysSinceReception %}
                        <a href=\"{{ path('app_supplier_credit_note_new', {'batchId': batch.id}) }}\" class=\"btn btn-outline-danger btn-action btn-sm\" title=\"Encore {{ daysRemaining }} jour(s)\">
                            <i class=\"fas fa-exclamation-triangle me-1\"></i> 
                            <span class=\"d-none d-sm-inline\">Signaler</span>
                            <span class=\"badge bg-danger ms-1\">{{ daysRemaining }}j</span>
                        </a>
                    {% else %}
                        <a href=\"{{ path('app_supplier_credit_note_new', {'batchId': batch.id}) }}\" class=\"btn btn-outline-danger btn-action btn-sm\">
                            <i class=\"fas fa-exclamation-triangle me-1\"></i> <span class=\"d-none d-sm-inline\">Signaler</span>
                        </a>
                    {% endif %}
                {% else %}
                    <a href=\"{{ path('app_supplier_credit_note_new', {'batchId': batch.id}) }}\" class=\"btn btn-outline-danger btn-action btn-sm\">
                        <i class=\"fas fa-exclamation-triangle me-1\"></i> <span class=\"d-none d-sm-inline\">Signaler</span>
                    </a>
                {% endif %}
            {% else %}
                {% if purchaseItem is defined and purchaseItem and purchaseItem.purchase %}
                    {% set purchase = purchaseItem.purchase %}
                    {% if purchase.receivedAt %}
                        {% set daysSinceReception = date().diff(purchase.receivedAt).days %}
                        {% if daysSinceReception > 30 %}
                            <button type=\"button\" class=\"btn btn-outline-secondary btn-action btn-sm\" disabled>
                                <i class=\"fas fa-exclamation-triangle me-1\"></i> <span class=\"d-none d-sm-inline\">Signalement expiré</span>
                                <span class=\"badge bg-secondary ms-1\">+{{ daysSinceReception - 30 }}j</span>
                            </button>
                        {% else %}
                            <button type=\"button\" class=\"btn btn-outline-secondary btn-action btn-sm\" disabled>
                                <i class=\"fas fa-exclamation-triangle me-1\"></i> <span class=\"d-none d-sm-inline\">Indisponible</span>
                            </button>
                        {% endif %}
                    {% else %}
                        <button type=\"button\" class=\"btn btn-outline-secondary btn-action btn-sm\" disabled>
                            <i class=\"fas fa-exclamation-triangle me-1\"></i> <span class=\"d-none d-sm-inline\">Indisponible</span>
                        </button>
                    {% endif %}
                {% else %}
                    <button type=\"button\" class=\"btn btn-outline-secondary btn-action btn-sm\" disabled>
                        <i class=\"fas fa-exclamation-triangle me-1\"></i> <span class=\"d-none d-sm-inline\">Indisponible</span>
                    </button>
                {% endif %}
            {% endif %}
            
            <a href=\"{{ path('app_admin_stock_batch_index', {'productId': product.id}) }}\" class=\"btn btn-outline-secondary btn-action btn-sm\">
                <i class=\"fas fa-arrow-left me-1\"></i> <span class=\"d-none d-sm-inline\">Retour</span>
            </a>
        </div>
    </div>

    <div class=\"row g-2 g-md-3\">
        <!-- Colonne gauche - Informations générales -->
        <div class=\"col-12 col-lg-6\">
            <div class=\"card info-card border-0 shadow-sm mb-3 mb-md-4\">
                <div class=\"card-header bg-white py-2 py-md-3\">
                    <h5 class=\"mb-0 fw-semibold small\">
                        <i class=\"fas fa-info-circle me-2 text-primary\"></i>
                        Informations générales
                    </h5>
                </div>
                <div class=\"card-body p-2 p-md-3\">
                    <div class=\"row g-2\">
                        <div class=\"col-12 col-sm-6\">
                            <dl class=\"row mb-0 g-1\">
                                <dt class=\"col-5 text-muted small\">N° lot</dt>
                                <dd class=\"col-7 fw-bold small\">{{ batch.batchNumber }}</dd>
                                
                                <dt class=\"col-5 text-muted small\">Produit</dt>
                                <dd class=\"col-7 small\">
                                    <a href=\"{{ path('app_admin_product_show', {'id': product.id}) }}\" class=\"text-decoration-none\">
                                        {{ product.name|u.truncate(25) }}
                                    </a>
                                </dd>
                                
                                <dt class=\"col-5 text-muted small\">Code-barres</dt>
                                <dd class=\"col-7 small\">{{ product.barcode|u.truncate(12) }}</dd>
                                
                                <dt class=\"col-5 text-muted small\">Catégorie</dt>
                                <dd class=\"col-7 small\">{{ product.category ? product.category.name : '—' }}</dd>
                            </dl>
                        </div>
                        <div class=\"col-12 col-sm-6\">
                            <dl class=\"row mb-0 g-1\">
                                <dt class=\"col-5 text-muted small\">Emplacement</dt>
                                <dd class=\"col-7 small\">
                                    {% if batch.location or batch.locationEntity %}
                                        <span class=\"badge bg-info text-dark\">
                                            <i class=\"fas fa-map-marker-alt me-1\"></i> 
                                            {{ batch.locationEntity ? batch.locationEntity.displayName|u.truncate(12) : batch.location|u.truncate(12) }}
                                        </span>
                                    {% else %}
                                        <span class=\"text-muted\">—</span>
                                    {% endif %}
                                </dd>
                                
                                <dt class=\"col-5 text-muted small\">Statut</dt>
                                <dd class=\"col-7 small\">
                                    <span class=\"badge {{ batch.isActive ? 'bg-success' : 'bg-secondary' }}\">
                                        <i class=\"fas {{ batch.isActive ? 'fa-check-circle' : 'fa-pause-circle' }} me-1\"></i>
                                        {{ batch.isActive ? 'Actif' : 'Inactif' }}
                                    </span>
                                </dd>
                                
                                <dt class=\"col-5 text-muted small\">Avoir</dt>
                                <dd class=\"col-7 small\">
                                    {% if batch.hasIssue %}
                                        <span class=\"badge {{ batch.issueStatusBadgeClass }}\">
                                            {{ batch.issueStatusLabel|u.truncate(12) }}
                                        </span>
                                        {% if batch.issuePriority == 'critical' %}
                                            <span class=\"badge bg-danger ms-1 small\">Critique</span>
                                        {% elseif batch.issuePriority == 'high' %}
                                            <span class=\"badge bg-warning text-dark ms-1 small\">Haute</span>
                                        {% endif %}
                                    {% else %}
                                        <span class=\"text-muted\">Aucun</span>
                                    {% endif %}
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quantités et prix -->
            <div class=\"card info-card border-0 shadow-sm mb-3 mb-md-4\">
                <div class=\"card-header bg-white py-2 py-md-3\">
                    <h5 class=\"mb-0 fw-semibold small\">
                        <i class=\"fas fa-chart-line me-2 text-success\"></i>
                        Quantités et prix
                    </h5>
                </div>
                <div class=\"card-body p-2 p-md-3\">
                    <div class=\"row g-2 text-center\">
                        <div class=\"col-4 col-md-4\">
                            <div class=\"p-2 p-md-3 bg-light rounded-3\">
                                <small class=\"text-muted d-block\">Initiale</small>
                                <span class=\"fw-bold text-primary fs-5\">{{ batch.initialQuantity }}</span>
                                <small class=\"d-block text-muted\">{{ product.unit|default('pièce(s)')|u.truncate(8) }}</small>
                            </div>
                        </div>
                        <div class=\"col-4 col-md-4\">
                            <div class=\"p-2 p-md-3 bg-light rounded-3\">
                                <small class=\"text-muted d-block\">Actuelle</small>
                                <span class=\"fw-bold fs-5 {% if batch.currentQuantity <= 10 %}text-danger{% else %}text-success{% endif %}\">
                                    {{ batch.currentQuantity }}
                                </span>
                                <small class=\"d-block text-muted\">{{ product.unit|default('pièce(s)')|u.truncate(8) }}</small>
                                {% if batch.currentQuantity <= 10 %}
                                    <span class=\"badge bg-warning text-dark mt-1 d-block small\">Stock faible</span>
                                {% endif %}
                            </div>
                        </div>
                        <div class=\"col-4 col-md-4\">
                            <div class=\"p-2 p-md-3 bg-light rounded-3\">
                                <small class=\"text-muted d-block\">Restant</small>
                                <span class=\"fw-bold fs-5\">
                                    {{ (batch.currentQuantity / batch.initialQuantity * 100)|round }}%
                                </span>
                                <div class=\"progress mt-1\" style=\"height:4px\">
                                    <div class=\"progress-bar {% if batch.currentQuantity/batch.initialQuantity*100 <= 10 %}bg-danger{% elseif batch.currentQuantity/batch.initialQuantity*100 <= 30 %}bg-warning{% else %}bg-success{% endif %}\" 
                                         style=\"width: {{ (batch.currentQuantity / batch.initialQuantity * 100)|round }}%\">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row g-2 mt-2\">
                        <div class=\"col-6\">
                            <div class=\"p-2 p-md-3 bg-light rounded-3 text-center\">
                                <small class=\"text-muted d-block\">Prix unitaire</small>
                                <span class=\"fw-bold text-primary\">{{ batch.unitPrice|price_with_currency(batch.hmaService) }}</span>
                            </div>
                        </div>
                        <div class=\"col-6\">
                            <div class=\"p-2 p-md-3 bg-light rounded-3 text-center\">
                                <small class=\"text-muted d-block\">Valeur totale</small>
                                <span class=\"fw-bold text-success\">{{ (batch.currentQuantity * batch.unitPrice)|price_with_currency(batch.hmaService) }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Dates -->
            <div class=\"card info-card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-2 py-md-3\">
                    <h5 class=\"mb-0 fw-semibold small\">
                        <i class=\"fas fa-calendar-alt me-2 text-warning\"></i>
                        Dates
                    </h5>
                </div>
                <div class=\"card-body p-2 p-md-3\">
                    <div class=\"row g-2\">
                        <div class=\"col-6\">
                            <div class=\"p-2 p-md-3 bg-light rounded-3 text-center\">
                                <small class=\"text-muted d-block\">Fabrication</small>
                                <span class=\"fw-bold small\">
                                    {{ batch.manufacturingDate ? batch.manufacturingDate|date('d/m/Y') : '—' }}
                                </span>
                            </div>
                        </div>
                        <div class=\"col-6\">
                            <div class=\"p-2 p-md-3 bg-light rounded-3 text-center\">
                                <small class=\"text-muted d-block\">Expiration</small>
                                <span class=\"fw-bold small {% if batch.expiryDate and batch.expiryDate < date() %}text-danger{% elseif batch.expiryDate and batch.expiryDate < date('+30 days') %}text-warning{% else %}text-success{% endif %}\">
                                    {{ batch.expiryDate ? batch.expiryDate|date('d/m/Y') : 'Non périssable' }}
                                </span>
                                {% if batch.expiryDate and batch.expiryDate < date() %}
                                    <span class=\"badge bg-danger d-block mt-1 small\">Expiré</span>
                                {% elseif batch.expiryDate and batch.expiryDate < date('+30 days') %}
                                    <span class=\"badge bg-warning text-dark d-block mt-1 small\">Expire bientôt</span>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Colonne droite - Avoir et mouvements -->
        <div class=\"col-12 col-lg-6\">
            <!-- Informations avoir -->
            {% if batch.hasIssue %}
            <div class=\"card info-card border-0 shadow-sm mb-3 mb-md-4 status-card status-{{ batch.issueStatus }}\">
                <div class=\"card-header bg-white py-2 py-md-3 d-flex justify-content-between align-items-center flex-wrap gap-1\">
                    <h5 class=\"mb-0 fw-semibold small\">
                        <i class=\"fas fa-file-invoice-dollar me-2 text-danger\"></i>
                        Avoir fournisseur
                    </h5>
                    <span class=\"badge {{ batch.issueStatusBadgeClass }} fs-6 px-2 px-md-3 py-1 py-md-2\">
                        {{ batch.issueStatusLabel }}
                    </span>
                </div>
                <div class=\"card-body p-2 p-md-3\">
                    <div class=\"row g-2 mb-2\">
                        <div class=\"col-6\">
                            <small class=\"text-muted d-block\">Montant déclaré</small>
                            <span class=\"fw-bold text-danger\">{{ batch.issueDeclaredAmount|price_with_currency(batch.hmaService) }}</span>
                        </div>
                        <div class=\"col-6\">
                            <small class=\"text-muted d-block\">Priorité</small>
                            <span class=\"badge {{ batch.issuePriorityBadgeClass }}\">
                                {{ batch.issuePriorityLabel }}
                            </span>
                        </div>
                    </div>
                    <div class=\"row g-2 mb-2\">
                        <div class=\"col-6\">
                            <small class=\"text-muted d-block\">Récupéré</small>
                            <span class=\"fw-bold text-success\">{{ (batch.issueRecoveredAmount ?: 0)|price_with_currency(batch.hmaService) }}</span>
                        </div>
                        <div class=\"col-6\">
                            <small class=\"text-muted d-block\">Perdu</small>
                            <span class=\"fw-bold text-secondary\">{{ (batch.issueLostAmount ?: 0)|price_with_currency(batch.hmaService) }}</span>
                        </div>
                    </div>
                    <div class=\"row g-2\">
                        <div class=\"col-6\">
                            <small class=\"text-muted d-block\">Signalé le</small>
                            <span class=\"small\">{{ batch.issueReportedAt ? batch.issueReportedAt|date('d/m/Y H:i') : '—' }}</span>
                        </div>
                        <div class=\"col-6\">
                            <small class=\"text-muted d-block\">Résolu le</small>
                            <span class=\"small\">{{ batch.issueResolvedAt ? batch.issueResolvedAt|date('d/m/Y H:i') : '—' }}</span>
                        </div>
                    </div>
                    {% if batch.supplierCreditNoteId %}
                        <div class=\"mt-3 text-center\">
                            <a href=\"{{ path('app_supplier_credit_note_show', {'id': batch.supplierCreditNoteId}) }}\" class=\"btn btn-outline-danger btn-sm w-100\">
                                <i class=\"fas fa-eye me-1\"></i> Voir le détail de l'avoir
                            </a>
                        </div>
                    {% endif %}
                </div>
            </div>
            {% else %}
            <div class=\"card info-card border-0 shadow-sm mb-3 mb-md-4 bg-light\">
                <div class=\"card-body text-center py-3 py-md-4 p-2 p-md-3\">
                    <i class=\"fas fa-check-circle fa-2x fa-3x text-success mb-2\"></i>
                    <h5 class=\"mb-1 small\">Aucun problème signalé</h5>
                    <p class=\"text-muted small mb-3\">Ce lot n'a pas d'avoir fournisseur associé</p>
                    
                    {% if canReportIssue %}
                        <a href=\"{{ path('app_supplier_credit_note_new', {'batchId': batch.id}) }}\" class=\"btn btn-outline-danger btn-sm\">
                            <i class=\"fas fa-exclamation-triangle me-1\"></i> Signaler un problème
                        </a>
                    {% else %}
                        <button type=\"button\" class=\"btn btn-outline-secondary btn-sm\" disabled>
                            <i class=\"fas fa-exclamation-triangle me-1\"></i> Signalement indisponible
                        </button>
                        <p class=\"text-muted small mt-2\">Disponible uniquement pour les lots issus de commandes réceptionnées depuis moins de 30 jours.</p>
                    {% endif %}
                </div>
            </div>
            {% endif %}

            <!-- Informations d'achat -->
            {% if purchaseItem %}
            <div class=\"card info-card border-0 shadow-sm mb-3 mb-md-4\">
                <div class=\"card-header bg-white py-2 py-md-3\">
                    <h5 class=\"mb-0 fw-semibold small\">
                        <i class=\"fas fa-receipt me-2 text-primary\"></i>
                        Informations d'achat
                    </h5>
                </div>
                <div class=\"card-body p-2 p-md-3\">
                    <dl class=\"row mb-0 g-1\">
                        <dt class=\"col-5 col-sm-4 text-muted small\">Commande</dt>
                        <dd class=\"col-7 col-sm-8 small\">
                            <a href=\"{{ path('purchase_show', {'id': purchaseItem.purchase.id}) }}\" class=\"text-decoration-none\">
                                {{ purchaseItem.purchase.purchaseNumber }}
                            </a>
                        </dd>
                        <dt class=\"col-5 col-sm-4 text-muted small\">Fournisseur</dt>
                        <dd class=\"col-7 col-sm-8 small\">{{ purchaseItem.purchase.supplier.name|default('Non renseigné')|u.truncate(20) }}</dd>
                        <dt class=\"col-5 col-sm-4 text-muted small\">Date d'achat</dt>
                        <dd class=\"col-7 col-sm-8 small\">{{ purchaseItem.purchase.createdAt|date('d/m/Y') }}</dd>
                        <dt class=\"col-5 col-sm-4 text-muted small\">Qté achetée</dt>
                        <dd class=\"col-7 col-sm-8 small\">{{ purchaseItem.quantity }} {{ product.unit|default('pièce(s)')|u.truncate(6) }}</dd>
                        <dt class=\"col-5 col-sm-4 text-muted small\">Prix d'achat</dt>
                        <dd class=\"col-7 col-sm-8 small\">{{ purchaseItem.unitPrice|price_with_currency(batch.hmaService) }}</dd>
                    </dl>
                </div>
            </div>
            {% endif %}

            <!-- Mouvements de stock -->
            <div class=\"card info-card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-2 py-md-3 d-flex justify-content-between align-items-center flex-wrap gap-1\">
                    <h5 class=\"mb-0 fw-semibold small\">
                        <i class=\"fas fa-exchange-alt me-2 text-info\"></i>
                        Mouvements de stock
                    </h5>
                    <span class=\"badge bg-secondary\">{{ batch.stockMovements|length }}</span>
                </div>
                <div class=\"card-body p-0\">
                    {% if batch.stockMovements|length > 0 %}
                        <div class=\"list-group list-group-flush\">
                            {% for movement in batch.stockMovements|sort((a, b) => b.createdAt <=> a.createdAt) %}
                                <div class=\"list-group-item p-2 p-md-3\">
                                    <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start gap-1\">
                                        <div class=\"flex-grow-1 w-100\">
                                            <span class=\"badge 
                                                {% if movement.movementType == 'PURCHASE' %}bg-success
                                                {% elseif movement.movementType == 'SALE' %}bg-danger
                                                {% elseif movement.movementType == 'ADJUSTMENT' %}bg-warning text-dark
                                                {% elseif movement.movementType == 'RETURN' %}bg-info
                                                {% else %}bg-secondary
                                                {% endif %} me-1\">
                                                <i class=\"fas 
                                                    {% if movement.movementType == 'PURCHASE' %}fa-cart-plus
                                                    {% elseif movement.movementType == 'SALE' %}fa-shopping-cart
                                                    {% elseif movement.movementType == 'ADJUSTMENT' %}fa-sliders-h
                                                    {% elseif movement.movementType == 'RETURN' %}fa-undo-alt
                                                    {% else %}fa-question
                                                    {% endif %} me-1\"></i>
                                                {% if movement.movementType == 'PURCHASE' %}Achat
                                                {% elseif movement.movementType == 'SALE' %}Vente
                                                {% elseif movement.movementType == 'ADJUSTMENT' %}Ajustement
                                                {% elseif movement.movementType == 'RETURN' %}Retour
                                                {% else %}{{ movement.movementType }}{% endif %}
                                            </span>
                                            <span class=\"fw-bold\">{{ movement.quantity }}</span>
                                            <small class=\"text-muted\">{{ product.unit|default('pièce(s)')|u.truncate(6) }}</small>
                                            {% if movement.unitPrice %}
                                                <br><small class=\"text-muted\">Prix: {{ movement.unitPrice|price_with_currency(batch.hmaService) }}</small>
                                            {% endif %}
                                        </div>
                                        <div class=\"text-start text-sm-end w-100 w-sm-auto\">
                                            <small class=\"text-muted d-block\">{{ movement.createdAt|date('d/m/Y H:i') }}</small>
                                            {% if movement.user %}
                                                <small class=\"text-muted\">
                                                    <i class=\"fas fa-user me-1\"></i>{{ movement.user.fullName|default(movement.user.email)|u.truncate(15) }}
                                                </small>
                                            {% endif %}
                                        </div>
                                    </div>
                                    {% if movement.notes %}
                                        <div class=\"mt-1\">
                                            <small class=\"text-muted\">
                                                <i class=\"fas fa-comment me-1\"></i>
                                                {{ movement.notes|u.truncate(60) }}
                                            </small>
                                        </div>
                                    {% endif %}
                                </div>
                            {% endfor %}
                        </div>
                    {% else %}
                        <div class=\"text-center py-3 py-md-4\">
                            <i class=\"fas fa-chart-line fa-2x text-muted mb-2\"></i>
                            <p class=\"text-muted mb-0 small\">Aucun mouvement de stock</p>
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Correction du bouton d'impression
    const printBtn = document.querySelector('button[onclick*=\"print\"]');
    if (printBtn) {
        printBtn.addEventListener('click', function(e) {
            e.preventDefault();
            window.print();
        });
    }
});
</script>
{% endblock %}", "admin/stock_batch/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\stock_batch\\show.html.twig");
    }
}
