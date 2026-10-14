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
        $context["creditNote"] = ((array_key_exists("supplierCreditNote", $context)) ? ((isset($context["supplierCreditNote"]) || array_key_exists("supplierCreditNote", $context) ? $context["supplierCreditNote"] : (function () { throw new RuntimeError('Variable "supplierCreditNote" does not exist.', 350, $this->source); })())) : (null));
        // line 351
        yield "            ";
        $context["realIssueStatus"] = (((($tmp = (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 351, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 351, $this->source); })()), "status", [], "any", false, false, false, 351)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 351, $this->source); })()), "issueStatus", [], "any", false, false, false, 351)));
        // line 352
        yield "            
            ";
        // line 353
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 353, $this->source); })()), "hasIssue", [], "any", false, false, false, 353) && (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 353, $this->source); })()))) {
            // line 354
            yield "                ";
            // line 355
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 355, $this->source); })()), "id", [], "any", false, false, false, 355)]), "html", null, true);
            yield "\" 
                   class=\"btn btn-sm btn-action
                       ";
            // line 357
            if (CoreExtension::inFilter((isset($context["realIssueStatus"]) || array_key_exists("realIssueStatus", $context) ? $context["realIssueStatus"] : (function () { throw new RuntimeError('Variable "realIssueStatus" does not exist.', 357, $this->source); })()), ["recovered", "resolved"])) {
                yield "btn-success
                       ";
            } elseif ((            // line 358
(isset($context["realIssueStatus"]) || array_key_exists("realIssueStatus", $context) ? $context["realIssueStatus"] : (function () { throw new RuntimeError('Variable "realIssueStatus" does not exist.', 358, $this->source); })()) == "pending")) {
                yield "btn-warning
                       ";
            } elseif (CoreExtension::inFilter(            // line 359
(isset($context["realIssueStatus"]) || array_key_exists("realIssueStatus", $context) ? $context["realIssueStatus"] : (function () { throw new RuntimeError('Variable "realIssueStatus" does not exist.', 359, $this->source); })()), ["rejected", "lost"])) {
                yield "btn-danger
                       ";
            } else {
                // line 360
                yield "btn-outline-info";
            }
            yield "\">
                    <i class=\"fas 
                        ";
            // line 362
            if (CoreExtension::inFilter((isset($context["realIssueStatus"]) || array_key_exists("realIssueStatus", $context) ? $context["realIssueStatus"] : (function () { throw new RuntimeError('Variable "realIssueStatus" does not exist.', 362, $this->source); })()), ["recovered", "resolved"])) {
                yield "fa-check-circle
                        ";
            } elseif ((            // line 363
(isset($context["realIssueStatus"]) || array_key_exists("realIssueStatus", $context) ? $context["realIssueStatus"] : (function () { throw new RuntimeError('Variable "realIssueStatus" does not exist.', 363, $this->source); })()) == "pending")) {
                yield "fa-clock
                        ";
            } elseif (CoreExtension::inFilter(            // line 364
(isset($context["realIssueStatus"]) || array_key_exists("realIssueStatus", $context) ? $context["realIssueStatus"] : (function () { throw new RuntimeError('Variable "realIssueStatus" does not exist.', 364, $this->source); })()), ["rejected", "lost"])) {
                yield "fa-times-circle
                        ";
            } else {
                // line 365
                yield "fa-file-invoice-dollar";
            }
            yield " me-1\"></i> 
                    <span class=\"d-none d-sm-inline\">
                        ";
            // line 367
            if (CoreExtension::inFilter((isset($context["realIssueStatus"]) || array_key_exists("realIssueStatus", $context) ? $context["realIssueStatus"] : (function () { throw new RuntimeError('Variable "realIssueStatus" does not exist.', 367, $this->source); })()), ["recovered", "resolved"])) {
                yield "Récupéré
                        ";
            } elseif ((            // line 368
(isset($context["realIssueStatus"]) || array_key_exists("realIssueStatus", $context) ? $context["realIssueStatus"] : (function () { throw new RuntimeError('Variable "realIssueStatus" does not exist.', 368, $this->source); })()) == "pending")) {
                yield "En attente
                        ";
            } elseif ((            // line 369
(isset($context["realIssueStatus"]) || array_key_exists("realIssueStatus", $context) ? $context["realIssueStatus"] : (function () { throw new RuntimeError('Variable "realIssueStatus" does not exist.', 369, $this->source); })()) == "lost")) {
                yield "Perdu
                        ";
            } elseif ((            // line 370
(isset($context["realIssueStatus"]) || array_key_exists("realIssueStatus", $context) ? $context["realIssueStatus"] : (function () { throw new RuntimeError('Variable "realIssueStatus" does not exist.', 370, $this->source); })()) == "rejected")) {
                yield "Rejeté
                        ";
            } elseif ((            // line 371
(isset($context["realIssueStatus"]) || array_key_exists("realIssueStatus", $context) ? $context["realIssueStatus"] : (function () { throw new RuntimeError('Variable "realIssueStatus" does not exist.', 371, $this->source); })()) == "closed")) {
                yield "Clôturé
                        ";
            } else {
                // line 372
                yield "Voir l'avoir";
            }
            // line 373
            yield "                    </span>
                </a>
            ";
        } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,         // line 375
(isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 375, $this->source); })()), "hasIssue", [], "any", false, false, false, 375)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 376
            yield "                ";
            // line 377
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 377, $this->source); })()), "supplierCreditNoteId", [], "any", false, false, false, 377)]), "html", null, true);
            yield "\" 
                   class=\"btn btn-outline-info btn-action btn-sm\">
                    <i class=\"fas fa-file-invoice-dollar me-1\"></i> 
                    <span class=\"d-none d-sm-inline\">Voir l'avoir</span>
                </a>
            ";
        } elseif ((        // line 382
array_key_exists("canReportIssue", $context) && (isset($context["canReportIssue"]) || array_key_exists("canReportIssue", $context) ? $context["canReportIssue"] : (function () { throw new RuntimeError('Variable "canReportIssue" does not exist.', 382, $this->source); })()))) {
            // line 383
            yield "                ";
            // line 384
            yield "                ";
            if (((array_key_exists("purchaseItem", $context) && (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 384, $this->source); })())) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 384, $this->source); })()), "purchase", [], "any", false, false, false, 384))) {
                // line 385
                yield "                    ";
                $context["purchase"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 385, $this->source); })()), "purchase", [], "any", false, false, false, 385);
                // line 386
                yield "                    ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 386, $this->source); })()), "receivedAt", [], "any", false, false, false, 386)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 387
                    yield "                        ";
                    $context["daysSinceReception"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extension\CoreExtension']->convertDate(), "diff", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 387, $this->source); })()), "receivedAt", [], "any", false, false, false, 387)], "method", false, false, false, 387), "days", [], "any", false, false, false, 387);
                    // line 388
                    yield "                        ";
                    $context["daysRemaining"] = (30 - (isset($context["daysSinceReception"]) || array_key_exists("daysSinceReception", $context) ? $context["daysSinceReception"] : (function () { throw new RuntimeError('Variable "daysSinceReception" does not exist.', 388, $this->source); })()));
                    // line 389
                    yield "                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_new", ["batchId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 389, $this->source); })()), "id", [], "any", false, false, false, 389)]), "html", null, true);
                    yield "\" 
                           class=\"btn btn-outline-danger btn-action btn-sm\" 
                           title=\"Encore ";
                    // line 391
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["daysRemaining"]) || array_key_exists("daysRemaining", $context) ? $context["daysRemaining"] : (function () { throw new RuntimeError('Variable "daysRemaining" does not exist.', 391, $this->source); })()), "html", null, true);
                    yield " jour(s)\">
                            <i class=\"fas fa-exclamation-triangle me-1\"></i> 
                            <span class=\"d-none d-sm-inline\">Signaler</span>
                            <span class=\"badge bg-danger ms-1\">";
                    // line 394
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["daysRemaining"]) || array_key_exists("daysRemaining", $context) ? $context["daysRemaining"] : (function () { throw new RuntimeError('Variable "daysRemaining" does not exist.', 394, $this->source); })()), "html", null, true);
                    yield "j</span>
                        </a>
                    ";
                } else {
                    // line 397
                    yield "                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_new", ["batchId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 397, $this->source); })()), "id", [], "any", false, false, false, 397)]), "html", null, true);
                    yield "\" 
                           class=\"btn btn-outline-danger btn-action btn-sm\">
                            <i class=\"fas fa-exclamation-triangle me-1\"></i> 
                            <span class=\"d-none d-sm-inline\">Signaler</span>
                        </a>
                    ";
                }
                // line 403
                yield "                ";
            } else {
                // line 404
                yield "                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_new", ["batchId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 404, $this->source); })()), "id", [], "any", false, false, false, 404)]), "html", null, true);
                yield "\" 
                       class=\"btn btn-outline-danger btn-action btn-sm\">
                        <i class=\"fas fa-exclamation-triangle me-1\"></i> 
                        <span class=\"d-none d-sm-inline\">Signaler</span>
                    </a>
                ";
            }
            // line 410
            yield "            ";
        } else {
            // line 411
            yield "                ";
            // line 412
            yield "                ";
            if (((array_key_exists("purchaseItem", $context) && (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 412, $this->source); })())) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 412, $this->source); })()), "purchase", [], "any", false, false, false, 412))) {
                // line 413
                yield "                    ";
                $context["purchase"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 413, $this->source); })()), "purchase", [], "any", false, false, false, 413);
                // line 414
                yield "                    ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 414, $this->source); })()), "receivedAt", [], "any", false, false, false, 414)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 415
                    yield "                        ";
                    $context["daysSinceReception"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extension\CoreExtension']->convertDate(), "diff", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 415, $this->source); })()), "receivedAt", [], "any", false, false, false, 415)], "method", false, false, false, 415), "days", [], "any", false, false, false, 415);
                    // line 416
                    yield "                        ";
                    if (((isset($context["daysSinceReception"]) || array_key_exists("daysSinceReception", $context) ? $context["daysSinceReception"] : (function () { throw new RuntimeError('Variable "daysSinceReception" does not exist.', 416, $this->source); })()) > 30)) {
                        // line 417
                        yield "                            <button type=\"button\" class=\"btn btn-outline-secondary btn-action btn-sm\" disabled>
                                <i class=\"fas fa-exclamation-triangle me-1\"></i> 
                                <span class=\"d-none d-sm-inline\">Signalement expiré</span>
                                <span class=\"badge bg-secondary ms-1\">+";
                        // line 420
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["daysSinceReception"]) || array_key_exists("daysSinceReception", $context) ? $context["daysSinceReception"] : (function () { throw new RuntimeError('Variable "daysSinceReception" does not exist.', 420, $this->source); })()) - 30), "html", null, true);
                        yield "j</span>
                            </button>
                        ";
                    } else {
                        // line 423
                        yield "                            <button type=\"button\" class=\"btn btn-outline-secondary btn-action btn-sm\" disabled>
                                <i class=\"fas fa-exclamation-triangle me-1\"></i> 
                                <span class=\"d-none d-sm-inline\">Indisponible</span>
                            </button>
                        ";
                    }
                    // line 428
                    yield "                    ";
                } else {
                    // line 429
                    yield "                        <button type=\"button\" class=\"btn btn-outline-secondary btn-action btn-sm\" disabled>
                            <i class=\"fas fa-exclamation-triangle me-1\"></i> 
                            <span class=\"d-none d-sm-inline\">Indisponible</span>
                        </button>
                    ";
                }
                // line 434
                yield "                ";
            } else {
                // line 435
                yield "                    <button type=\"button\" class=\"btn btn-outline-secondary btn-action btn-sm\" disabled>
                        <i class=\"fas fa-exclamation-triangle me-1\"></i> 
                        <span class=\"d-none d-sm-inline\">Indisponible</span>
                    </button>
                ";
            }
            // line 440
            yield "            ";
        }
        // line 441
        yield "            
            <a href=\"";
        // line 442
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_index", ["productId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 442, $this->source); })()), "id", [], "any", false, false, false, 442)]), "html", null, true);
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
        // line 463
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 463, $this->source); })()), "batchNumber", [], "any", false, false, false, 463), "html", null, true);
        yield "</dd>
                                
                                <dt class=\"col-5 text-muted small\">Produit</dt>
                                <dd class=\"col-7 small\">
                                    <a href=\"";
        // line 467
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 467, $this->source); })()), "id", [], "any", false, false, false, 467)]), "html", null, true);
        yield "\" class=\"text-decoration-none\">
                                        ";
        // line 468
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 468, $this->source); })()), "name", [], "any", false, false, false, 468)), "truncate", [25], "method", false, false, false, 468), "html", null, true);
        yield "
                                    </a>
                                </dd>
                                
                                <dt class=\"col-5 text-muted small\">Code-barres</dt>
                                <dd class=\"col-7 small\">";
        // line 473
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 473, $this->source); })()), "barcode", [], "any", false, false, false, 473)), "truncate", [12], "method", false, false, false, 473), "html", null, true);
        yield "</dd>
                                
                                <dt class=\"col-5 text-muted small\">Catégorie</dt>
                                <dd class=\"col-7 small\">";
        // line 476
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 476, $this->source); })()), "category", [], "any", false, false, false, 476)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 476, $this->source); })()), "category", [], "any", false, false, false, 476), "name", [], "any", false, false, false, 476), "html", null, true)) : ("—"));
        yield "</dd>
                            </dl>
                        </div>
                        <div class=\"col-12 col-sm-6\">
                            <dl class=\"row mb-0 g-1\">
                                <dt class=\"col-5 text-muted small\">Emplacement</dt>
                                <dd class=\"col-7 small\">
                                    ";
        // line 483
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 483, $this->source); })()), "location", [], "any", false, false, false, 483) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 483, $this->source); })()), "locationEntity", [], "any", false, false, false, 483))) {
            // line 484
            yield "                                        <span class=\"badge bg-info text-dark\">
                                            <i class=\"fas fa-map-marker-alt me-1\"></i> 
                                            ";
            // line 486
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 486, $this->source); })()), "locationEntity", [], "any", false, false, false, 486)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 486, $this->source); })()), "locationEntity", [], "any", false, false, false, 486), "displayName", [], "any", false, false, false, 486)), "truncate", [12], "method", false, false, false, 486), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 486, $this->source); })()), "location", [], "any", false, false, false, 486)), "truncate", [12], "method", false, false, false, 486), "html", null, true)));
            yield "
                                        </span>
                                    ";
        } else {
            // line 489
            yield "                                        <span class=\"text-muted\">—</span>
                                    ";
        }
        // line 491
        yield "                                </dd>
                                
                                <dt class=\"col-5 text-muted small\">Statut</dt>
                                <dd class=\"col-7 small\">
                                    <span class=\"badge ";
        // line 495
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 495, $this->source); })()), "isActive", [], "any", false, false, false, 495)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-secondary"));
        yield "\">
                                        <i class=\"fas ";
        // line 496
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 496, $this->source); })()), "isActive", [], "any", false, false, false, 496)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-check-circle") : ("fa-pause-circle"));
        yield " me-1\"></i>
                                        ";
        // line 497
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 497, $this->source); })()), "isActive", [], "any", false, false, false, 497)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Inactif"));
        yield "
                                    </span>
                                </dd>
                                
                                <dt class=\"col-5 text-muted small\">Avoir</dt>
                                <dd class=\"col-7 small\">
                                    ";
        // line 504
        yield "                                    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 504, $this->source); })()), "hasIssue", [], "any", false, false, false, 504)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 505
            yield "                                        ";
            $context["realIssueStatus"] = (((($tmp = (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 505, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 505, $this->source); })()), "status", [], "any", false, false, false, 505)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 505, $this->source); })()), "issueStatus", [], "any", false, false, false, 505)));
            // line 506
            yield "                                        ";
            if ((((isset($context["realIssueStatus"]) || array_key_exists("realIssueStatus", $context) ? $context["realIssueStatus"] : (function () { throw new RuntimeError('Variable "realIssueStatus" does not exist.', 506, $this->source); })()) == "recovered") || ((isset($context["realIssueStatus"]) || array_key_exists("realIssueStatus", $context) ? $context["realIssueStatus"] : (function () { throw new RuntimeError('Variable "realIssueStatus" does not exist.', 506, $this->source); })()) == "resolved"))) {
                // line 507
                yield "                                            <span class=\"badge bg-success\">
                                                <i class=\"fas fa-check-circle me-1\"></i>Récupéré
                                            </span>
                                        ";
            } elseif ((            // line 510
(isset($context["realIssueStatus"]) || array_key_exists("realIssueStatus", $context) ? $context["realIssueStatus"] : (function () { throw new RuntimeError('Variable "realIssueStatus" does not exist.', 510, $this->source); })()) == "pending")) {
                // line 511
                yield "                                            <span class=\"badge bg-warning text-dark\">
                                                <i class=\"fas fa-clock me-1\"></i>En attente
                                            </span>
                                        ";
            } elseif ((            // line 514
(isset($context["realIssueStatus"]) || array_key_exists("realIssueStatus", $context) ? $context["realIssueStatus"] : (function () { throw new RuntimeError('Variable "realIssueStatus" does not exist.', 514, $this->source); })()) == "acknowledged")) {
                // line 515
                yield "                                            <span class=\"badge bg-info\">
                                                <i class=\"fas fa-check me-1\"></i>Accusé réception
                                            </span>
                                        ";
            } elseif ((            // line 518
(isset($context["realIssueStatus"]) || array_key_exists("realIssueStatus", $context) ? $context["realIssueStatus"] : (function () { throw new RuntimeError('Variable "realIssueStatus" does not exist.', 518, $this->source); })()) == "under_review")) {
                // line 519
                yield "                                            <span class=\"badge bg-info\">
                                                <i class=\"fas fa-search me-1\"></i>En analyse
                                            </span>
                                        ";
            } elseif ((            // line 522
(isset($context["realIssueStatus"]) || array_key_exists("realIssueStatus", $context) ? $context["realIssueStatus"] : (function () { throw new RuntimeError('Variable "realIssueStatus" does not exist.', 522, $this->source); })()) == "partially_recovered")) {
                // line 523
                yield "                                            <span class=\"badge bg-warning text-dark\">
                                                <i class=\"fas fa-hourglass-half me-1\"></i>Partiel
                                            </span>
                                        ";
            } elseif ((            // line 526
(isset($context["realIssueStatus"]) || array_key_exists("realIssueStatus", $context) ? $context["realIssueStatus"] : (function () { throw new RuntimeError('Variable "realIssueStatus" does not exist.', 526, $this->source); })()) == "lost")) {
                // line 527
                yield "                                            <span class=\"badge bg-danger\">
                                                <i class=\"fas fa-times-circle me-1\"></i>Perdu
                                            </span>
                                        ";
            } elseif ((            // line 530
(isset($context["realIssueStatus"]) || array_key_exists("realIssueStatus", $context) ? $context["realIssueStatus"] : (function () { throw new RuntimeError('Variable "realIssueStatus" does not exist.', 530, $this->source); })()) == "rejected")) {
                // line 531
                yield "                                            <span class=\"badge bg-danger\">
                                                <i class=\"fas fa-ban me-1\"></i>Rejeté
                                            </span>
                                        ";
            } elseif ((            // line 534
(isset($context["realIssueStatus"]) || array_key_exists("realIssueStatus", $context) ? $context["realIssueStatus"] : (function () { throw new RuntimeError('Variable "realIssueStatus" does not exist.', 534, $this->source); })()) == "closed")) {
                // line 535
                yield "                                            <span class=\"badge bg-secondary\">
                                                <i class=\"fas fa-archive me-1\"></i>Clôturé
                                            </span>
                                        ";
            } else {
                // line 539
                yield "                                            <span class=\"badge bg-secondary\">
                                                ";
                // line 540
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace((isset($context["realIssueStatus"]) || array_key_exists("realIssueStatus", $context) ? $context["realIssueStatus"] : (function () { throw new RuntimeError('Variable "realIssueStatus" does not exist.', 540, $this->source); })()), ["_" => " "])), "html", null, true);
                yield "
                                            </span>
                                        ";
            }
            // line 543
            yield "                                        
                                        ";
            // line 544
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 544, $this->source); })()), "issuePriority", [], "any", false, false, false, 544) == "critical")) {
                // line 545
                yield "                                            <span class=\"badge bg-danger ms-1 small\">Critique</span>
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 546
(isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 546, $this->source); })()), "issuePriority", [], "any", false, false, false, 546) == "high")) {
                // line 547
                yield "                                            <span class=\"badge bg-warning text-dark ms-1 small\">Haute</span>
                                        ";
            }
            // line 549
            yield "                                    ";
        } else {
            // line 550
            yield "                                        <span class=\"text-muted\">Aucun</span>
                                    ";
        }
        // line 552
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
        // line 572
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 572, $this->source); })()), "initialQuantity", [], "any", false, false, false, 572), "html", null, true);
        yield "</span>
                                <small class=\"d-block text-muted\">";
        // line 573
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 573)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 573, $this->source); })()), "unit", [], "any", false, false, false, 573), "pièce(s)")) : ("pièce(s)"))), "truncate", [8], "method", false, false, false, 573), "html", null, true);
        yield "</small>
                            </div>
                        </div>
                        <div class=\"col-4 col-md-4\">
                            <div class=\"p-2 p-md-3 bg-light rounded-3\">
                                <small class=\"text-muted d-block\">Actuelle</small>
                                <span class=\"fw-bold fs-5 ";
        // line 579
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 579, $this->source); })()), "currentQuantity", [], "any", false, false, false, 579) <= 10)) {
            yield "text-danger";
        } else {
            yield "text-success";
        }
        yield "\">
                                    ";
        // line 580
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 580, $this->source); })()), "currentQuantity", [], "any", false, false, false, 580), "html", null, true);
        yield "
                                </span>
                                <small class=\"d-block text-muted\">";
        // line 582
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 582)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 582, $this->source); })()), "unit", [], "any", false, false, false, 582), "pièce(s)")) : ("pièce(s)"))), "truncate", [8], "method", false, false, false, 582), "html", null, true);
        yield "</small>
                                ";
        // line 583
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 583, $this->source); })()), "currentQuantity", [], "any", false, false, false, 583) <= 10)) {
            // line 584
            yield "                                    <span class=\"badge bg-warning text-dark mt-1 d-block small\">Stock faible</span>
                                ";
        }
        // line 586
        yield "                            </div>
                        </div>
                        <div class=\"col-4 col-md-4\">
                            <div class=\"p-2 p-md-3 bg-light rounded-3\">
                                <small class=\"text-muted d-block\">Restant</small>
                                <span class=\"fw-bold fs-5\">
                                    ";
        // line 592
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 592, $this->source); })()), "currentQuantity", [], "any", false, false, false, 592) / CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 592, $this->source); })()), "initialQuantity", [], "any", false, false, false, 592)) * 100)), "html", null, true);
        yield "%
                                </span>
                                <div class=\"progress mt-1\" style=\"height:4px\">
                                    <div class=\"progress-bar ";
        // line 595
        if ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 595, $this->source); })()), "currentQuantity", [], "any", false, false, false, 595) / CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 595, $this->source); })()), "initialQuantity", [], "any", false, false, false, 595)) * 100) <= 10)) {
            yield "bg-danger";
        } elseif ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 595, $this->source); })()), "currentQuantity", [], "any", false, false, false, 595) / CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 595, $this->source); })()), "initialQuantity", [], "any", false, false, false, 595)) * 100) <= 30)) {
            yield "bg-warning";
        } else {
            yield "bg-success";
        }
        yield "\" 
                                         style=\"width: ";
        // line 596
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 596, $this->source); })()), "currentQuantity", [], "any", false, false, false, 596) / CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 596, $this->source); })()), "initialQuantity", [], "any", false, false, false, 596)) * 100)), "html", null, true);
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
        // line 606
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 606, $this->source); })()), "unitPrice", [], "any", false, false, false, 606), CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 606, $this->source); })()), "hmaService", [], "any", false, false, false, 606)), "html", null, true);
        yield "</span>
                            </div>
                        </div>
                        <div class=\"col-6\">
                            <div class=\"p-2 p-md-3 bg-light rounded-3 text-center\">
                                <small class=\"text-muted d-block\">Valeur totale</small>
                                <span class=\"fw-bold text-success\">";
        // line 612
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency((CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 612, $this->source); })()), "currentQuantity", [], "any", false, false, false, 612) * CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 612, $this->source); })()), "unitPrice", [], "any", false, false, false, 612)), CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 612, $this->source); })()), "hmaService", [], "any", false, false, false, 612)), "html", null, true);
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
        // line 633
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 633, $this->source); })()), "manufacturingDate", [], "any", false, false, false, 633)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 633, $this->source); })()), "manufacturingDate", [], "any", false, false, false, 633), "d/m/Y"), "html", null, true)) : ("—"));
        yield "
                                </span>
                            </div>
                        </div>
                        <div class=\"col-6\">
                            <div class=\"p-2 p-md-3 bg-light rounded-3 text-center\">
                                <small class=\"text-muted d-block\">Expiration</small>
                                <span class=\"fw-bold small ";
        // line 640
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 640, $this->source); })()), "expiryDate", [], "any", false, false, false, 640) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 640, $this->source); })()), "expiryDate", [], "any", false, false, false, 640) < $this->extensions['Twig\Extension\CoreExtension']->convertDate()))) {
            yield "text-danger";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 640, $this->source); })()), "expiryDate", [], "any", false, false, false, 640) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 640, $this->source); })()), "expiryDate", [], "any", false, false, false, 640) < $this->extensions['Twig\Extension\CoreExtension']->convertDate("+30 days")))) {
            yield "text-warning";
        } else {
            yield "text-success";
        }
        yield "\">
                                    ";
        // line 641
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 641, $this->source); })()), "expiryDate", [], "any", false, false, false, 641)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 641, $this->source); })()), "expiryDate", [], "any", false, false, false, 641), "d/m/Y"), "html", null, true)) : ("Non périssable"));
        yield "
                                </span>
                                ";
        // line 643
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 643, $this->source); })()), "expiryDate", [], "any", false, false, false, 643) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 643, $this->source); })()), "expiryDate", [], "any", false, false, false, 643) < $this->extensions['Twig\Extension\CoreExtension']->convertDate()))) {
            // line 644
            yield "                                    <span class=\"badge bg-danger d-block mt-1 small\">Expiré</span>
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 645
(isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 645, $this->source); })()), "expiryDate", [], "any", false, false, false, 645) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 645, $this->source); })()), "expiryDate", [], "any", false, false, false, 645) < $this->extensions['Twig\Extension\CoreExtension']->convertDate("+30 days")))) {
            // line 646
            yield "                                    <span class=\"badge bg-warning text-dark d-block mt-1 small\">Expire bientôt</span>
                                ";
        }
        // line 648
        yield "                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Colonne droite - Avoir et mouvements -->
        <div class=\"col-12 col-lg-6\">
            <!-- ✅ CORRECTION : Informations avoir avec VRAI statut -->
            ";
        // line 658
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 658, $this->source); })()), "hasIssue", [], "any", false, false, false, 658)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 659
            yield "                ";
            $context["realIssueStatus"] = (((($tmp = (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 659, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 659, $this->source); })()), "status", [], "any", false, false, false, 659)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 659, $this->source); })()), "issueStatus", [], "any", false, false, false, 659)));
            // line 660
            yield "                ";
            $context["realDeclaredAmount"] = (((($tmp = (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 660, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 660, $this->source); })()), "declaredAmount", [], "any", false, false, false, 660)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 660, $this->source); })()), "issueDeclaredAmount", [], "any", false, false, false, 660)));
            // line 661
            yield "                ";
            $context["realRecoveredAmount"] = (((($tmp = (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 661, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 661, $this->source); })()), "recoveredAmount", [], "any", false, false, false, 661)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 661, $this->source); })()), "issueRecoveredAmount", [], "any", false, false, false, 661)));
            // line 662
            yield "                ";
            $context["realLostAmount"] = (((($tmp = (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 662, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 662, $this->source); })()), "lostAmount", [], "any", false, false, false, 662)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 662, $this->source); })()), "issueLostAmount", [], "any", false, false, false, 662)));
            // line 663
            yield "                ";
            $context["realReportedAt"] = (((($tmp = (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 663, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 663, $this->source); })()), "createdAt", [], "any", false, false, false, 663)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 663, $this->source); })()), "issueReportedAt", [], "any", false, false, false, 663)));
            // line 664
            yield "                ";
            $context["realResolvedAt"] = (((($tmp = (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 664, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 664, $this->source); })()), "resolvedAt", [], "any", false, false, false, 664)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 664, $this->source); })()), "issueResolvedAt", [], "any", false, false, false, 664)));
            // line 665
            yield "                
                ";
            // line 667
            yield "                ";
            if ((((isset($context["realIssueStatus"]) || array_key_exists("realIssueStatus", $context) ? $context["realIssueStatus"] : (function () { throw new RuntimeError('Variable "realIssueStatus" does not exist.', 667, $this->source); })()) == "recovered") || ((isset($context["realIssueStatus"]) || array_key_exists("realIssueStatus", $context) ? $context["realIssueStatus"] : (function () { throw new RuntimeError('Variable "realIssueStatus" does not exist.', 667, $this->source); })()) == "resolved"))) {
                // line 668
                yield "                    ";
                $context["statusCardClass"] = "bg-success bg-opacity-10 border-success";
                // line 669
                yield "                    ";
                $context["statusBadgeClass"] = "bg-success";
                // line 670
                yield "                    ";
                $context["statusLabel"] = "Récupéré";
                // line 671
                yield "                    ";
                $context["statusIcon"] = "fa-check-circle";
                // line 672
                yield "                ";
            } elseif (((isset($context["realIssueStatus"]) || array_key_exists("realIssueStatus", $context) ? $context["realIssueStatus"] : (function () { throw new RuntimeError('Variable "realIssueStatus" does not exist.', 672, $this->source); })()) == "pending")) {
                // line 673
                yield "                    ";
                $context["statusCardClass"] = "bg-warning bg-opacity-10 border-warning";
                // line 674
                yield "                    ";
                $context["statusBadgeClass"] = "bg-warning text-dark";
                // line 675
                yield "                    ";
                $context["statusLabel"] = "En attente";
                // line 676
                yield "                    ";
                $context["statusIcon"] = "fa-clock";
                // line 677
                yield "                ";
            } elseif (((isset($context["realIssueStatus"]) || array_key_exists("realIssueStatus", $context) ? $context["realIssueStatus"] : (function () { throw new RuntimeError('Variable "realIssueStatus" does not exist.', 677, $this->source); })()) == "acknowledged")) {
                // line 678
                yield "                    ";
                $context["statusCardClass"] = "bg-info bg-opacity-10 border-info";
                // line 679
                yield "                    ";
                $context["statusBadgeClass"] = "bg-info";
                // line 680
                yield "                    ";
                $context["statusLabel"] = "Accusé réception";
                // line 681
                yield "                    ";
                $context["statusIcon"] = "fa-check";
                // line 682
                yield "                ";
            } elseif (((isset($context["realIssueStatus"]) || array_key_exists("realIssueStatus", $context) ? $context["realIssueStatus"] : (function () { throw new RuntimeError('Variable "realIssueStatus" does not exist.', 682, $this->source); })()) == "under_review")) {
                // line 683
                yield "                    ";
                $context["statusCardClass"] = "bg-info bg-opacity-10 border-info";
                // line 684
                yield "                    ";
                $context["statusBadgeClass"] = "bg-info";
                // line 685
                yield "                    ";
                $context["statusLabel"] = "En analyse";
                // line 686
                yield "                    ";
                $context["statusIcon"] = "fa-search";
                // line 687
                yield "                ";
            } elseif (((isset($context["realIssueStatus"]) || array_key_exists("realIssueStatus", $context) ? $context["realIssueStatus"] : (function () { throw new RuntimeError('Variable "realIssueStatus" does not exist.', 687, $this->source); })()) == "partially_recovered")) {
                // line 688
                yield "                    ";
                $context["statusCardClass"] = "bg-warning bg-opacity-10 border-warning";
                // line 689
                yield "                    ";
                $context["statusBadgeClass"] = "bg-warning text-dark";
                // line 690
                yield "                    ";
                $context["statusLabel"] = "Partiel. récupéré";
                // line 691
                yield "                    ";
                $context["statusIcon"] = "fa-hourglass-half";
                // line 692
                yield "                ";
            } elseif (((isset($context["realIssueStatus"]) || array_key_exists("realIssueStatus", $context) ? $context["realIssueStatus"] : (function () { throw new RuntimeError('Variable "realIssueStatus" does not exist.', 692, $this->source); })()) == "lost")) {
                // line 693
                yield "                    ";
                $context["statusCardClass"] = "bg-danger bg-opacity-10 border-danger";
                // line 694
                yield "                    ";
                $context["statusBadgeClass"] = "bg-danger";
                // line 695
                yield "                    ";
                $context["statusLabel"] = "Perdu";
                // line 696
                yield "                    ";
                $context["statusIcon"] = "fa-times-circle";
                // line 697
                yield "                ";
            } elseif (((isset($context["realIssueStatus"]) || array_key_exists("realIssueStatus", $context) ? $context["realIssueStatus"] : (function () { throw new RuntimeError('Variable "realIssueStatus" does not exist.', 697, $this->source); })()) == "rejected")) {
                // line 698
                yield "                    ";
                $context["statusCardClass"] = "bg-danger bg-opacity-10 border-danger";
                // line 699
                yield "                    ";
                $context["statusBadgeClass"] = "bg-danger";
                // line 700
                yield "                    ";
                $context["statusLabel"] = "Rejeté";
                // line 701
                yield "                    ";
                $context["statusIcon"] = "fa-ban";
                // line 702
                yield "                ";
            } elseif (((isset($context["realIssueStatus"]) || array_key_exists("realIssueStatus", $context) ? $context["realIssueStatus"] : (function () { throw new RuntimeError('Variable "realIssueStatus" does not exist.', 702, $this->source); })()) == "closed")) {
                // line 703
                yield "                    ";
                $context["statusCardClass"] = "bg-secondary bg-opacity-10 border-secondary";
                // line 704
                yield "                    ";
                $context["statusBadgeClass"] = "bg-secondary";
                // line 705
                yield "                    ";
                $context["statusLabel"] = "Clôturé";
                // line 706
                yield "                    ";
                $context["statusIcon"] = "fa-archive";
                // line 707
                yield "                ";
            } else {
                // line 708
                yield "                    ";
                $context["statusCardClass"] = "bg-light border-secondary";
                // line 709
                yield "                    ";
                $context["statusBadgeClass"] = "bg-secondary";
                // line 710
                yield "                    ";
                $context["statusLabel"] = Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace((isset($context["realIssueStatus"]) || array_key_exists("realIssueStatus", $context) ? $context["realIssueStatus"] : (function () { throw new RuntimeError('Variable "realIssueStatus" does not exist.', 710, $this->source); })()), ["_" => " "]));
                // line 711
                yield "                    ";
                $context["statusIcon"] = "fa-exclamation-triangle";
                // line 712
                yield "                ";
            }
            // line 713
            yield "                
                <div class=\"card info-card border-0 shadow-sm mb-3 mb-md-4 border-start border-4 ";
            // line 714
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statusCardClass"]) || array_key_exists("statusCardClass", $context) ? $context["statusCardClass"] : (function () { throw new RuntimeError('Variable "statusCardClass" does not exist.', 714, $this->source); })()), "html", null, true);
            yield "\">
                    <div class=\"card-header bg-white py-2 py-md-3 d-flex justify-content-between align-items-center flex-wrap gap-1\">
                        <h5 class=\"mb-0 fw-semibold small\">
                            <i class=\"fas fa-file-invoice-dollar me-2 text-danger\"></i>
                            Avoir fournisseur
                        </h5>
                        <span class=\"badge ";
            // line 720
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statusBadgeClass"]) || array_key_exists("statusBadgeClass", $context) ? $context["statusBadgeClass"] : (function () { throw new RuntimeError('Variable "statusBadgeClass" does not exist.', 720, $this->source); })()), "html", null, true);
            yield " fs-6 px-2 px-md-3 py-1 py-md-2\">
                            <i class=\"fas ";
            // line 721
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statusIcon"]) || array_key_exists("statusIcon", $context) ? $context["statusIcon"] : (function () { throw new RuntimeError('Variable "statusIcon" does not exist.', 721, $this->source); })()), "html", null, true);
            yield " me-1\"></i>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statusLabel"]) || array_key_exists("statusLabel", $context) ? $context["statusLabel"] : (function () { throw new RuntimeError('Variable "statusLabel" does not exist.', 721, $this->source); })()), "html", null, true);
            yield "
                        </span>
                    </div>
                    <div class=\"card-body p-2 p-md-3\">
                        <div class=\"row g-2 mb-2\">
                            <div class=\"col-6\">
                                <small class=\"text-muted d-block\">Montant déclaré</small>
                                <span class=\"fw-bold text-danger\">
                                    ";
            // line 729
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency((isset($context["realDeclaredAmount"]) || array_key_exists("realDeclaredAmount", $context) ? $context["realDeclaredAmount"] : (function () { throw new RuntimeError('Variable "realDeclaredAmount" does not exist.', 729, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 729, $this->source); })()), "hmaService", [], "any", false, false, false, 729)), "html", null, true);
            yield "
                                </span>
                            </div>
                            <div class=\"col-6\">
                                <small class=\"text-muted d-block\">Priorité</small>
                                ";
            // line 734
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 734, $this->source); })()), "issuePriority", [], "any", false, false, false, 734) == "critical")) {
                // line 735
                yield "                                    <span class=\"badge bg-danger\">Critique</span>
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 736
(isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 736, $this->source); })()), "issuePriority", [], "any", false, false, false, 736) == "high")) {
                // line 737
                yield "                                    <span class=\"badge bg-warning text-dark\">Haute</span>
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 738
(isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 738, $this->source); })()), "issuePriority", [], "any", false, false, false, 738) == "medium")) {
                // line 739
                yield "                                    <span class=\"badge bg-info\">Moyenne</span>
                                ";
            } else {
                // line 741
                yield "                                    <span class=\"badge bg-secondary\">Basse</span>
                                ";
            }
            // line 743
            yield "                            </div>
                        </div>
                        <div class=\"row g-2 mb-2\">
                            <div class=\"col-6\">
                                <small class=\"text-muted d-block\">Récupéré</small>
                                <span class=\"fw-bold text-success\">
                                    ";
            // line 749
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency((((isset($context["realRecoveredAmount"]) || array_key_exists("realRecoveredAmount", $context) ? $context["realRecoveredAmount"] : (function () { throw new RuntimeError('Variable "realRecoveredAmount" does not exist.', 749, $this->source); })())) ? ($context["realRecoveredAmount"]) : (0)), CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 749, $this->source); })()), "hmaService", [], "any", false, false, false, 749)), "html", null, true);
            yield "
                                </span>
                            </div>
                            <div class=\"col-6\">
                                <small class=\"text-muted d-block\">Perdu</small>
                                <span class=\"fw-bold text-secondary\">
                                    ";
            // line 755
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency((((isset($context["realLostAmount"]) || array_key_exists("realLostAmount", $context) ? $context["realLostAmount"] : (function () { throw new RuntimeError('Variable "realLostAmount" does not exist.', 755, $this->source); })())) ? ($context["realLostAmount"]) : (0)), CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 755, $this->source); })()), "hmaService", [], "any", false, false, false, 755)), "html", null, true);
            yield "
                                </span>
                            </div>
                        </div>
                        <div class=\"row g-2\">
                            <div class=\"col-6\">
                                <small class=\"text-muted d-block\">Signalé le</small>
                                <span class=\"small\">
                                    ";
            // line 763
            yield (((($tmp = (isset($context["realReportedAt"]) || array_key_exists("realReportedAt", $context) ? $context["realReportedAt"] : (function () { throw new RuntimeError('Variable "realReportedAt" does not exist.', 763, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["realReportedAt"]) || array_key_exists("realReportedAt", $context) ? $context["realReportedAt"] : (function () { throw new RuntimeError('Variable "realReportedAt" does not exist.', 763, $this->source); })()), "d/m/Y H:i"), "html", null, true)) : ("—"));
            yield "
                                </span>
                            </div>
                            <div class=\"col-6\">
                                <small class=\"text-muted d-block\">Résolu le</small>
                                <span class=\"small\">
                                    ";
            // line 769
            yield (((($tmp = (isset($context["realResolvedAt"]) || array_key_exists("realResolvedAt", $context) ? $context["realResolvedAt"] : (function () { throw new RuntimeError('Variable "realResolvedAt" does not exist.', 769, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["realResolvedAt"]) || array_key_exists("realResolvedAt", $context) ? $context["realResolvedAt"] : (function () { throw new RuntimeError('Variable "realResolvedAt" does not exist.', 769, $this->source); })()), "d/m/Y H:i"), "html", null, true)) : ("—"));
            yield "
                                </span>
                            </div>
                        </div>
                        ";
            // line 773
            if ((($tmp = (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 773, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 774
                yield "                            <div class=\"mt-3 text-center\">
                                <a href=\"";
                // line 775
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 775, $this->source); })()), "id", [], "any", false, false, false, 775)]), "html", null, true);
                yield "\" 
                                   class=\"btn btn-outline-danger btn-sm w-100\">
                                    <i class=\"fas fa-eye me-1\"></i> Voir le détail de l'avoir
                                </a>
                            </div>
                        ";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 780
(isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 780, $this->source); })()), "supplierCreditNoteId", [], "any", false, false, false, 780)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 781
                yield "                            <div class=\"mt-3 text-center\">
                                <a href=\"";
                // line 782
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 782, $this->source); })()), "supplierCreditNoteId", [], "any", false, false, false, 782)]), "html", null, true);
                yield "\" 
                                   class=\"btn btn-outline-danger btn-sm w-100\">
                                    <i class=\"fas fa-eye me-1\"></i> Voir le détail de l'avoir
                                </a>
                            </div>
                        ";
            }
            // line 788
            yield "                    </div>
                </div>
            ";
        } else {
            // line 791
            yield "            <div class=\"card info-card border-0 shadow-sm mb-3 mb-md-4 bg-light\">
                <div class=\"card-body text-center py-3 py-md-4 p-2 p-md-3\">
                    <i class=\"fas fa-check-circle fa-2x fa-3x text-success mb-2\"></i>
                    <h5 class=\"mb-1 small\">Aucun problème signalé</h5>
                    <p class=\"text-muted small mb-3\">Ce lot n'a pas d'avoir fournisseur associé</p>
                    
                    ";
            // line 797
            if ((($tmp = (isset($context["canReportIssue"]) || array_key_exists("canReportIssue", $context) ? $context["canReportIssue"] : (function () { throw new RuntimeError('Variable "canReportIssue" does not exist.', 797, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 798
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_new", ["batchId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 798, $this->source); })()), "id", [], "any", false, false, false, 798)]), "html", null, true);
                yield "\" class=\"btn btn-outline-danger btn-sm\">
                            <i class=\"fas fa-exclamation-triangle me-1\"></i> Signaler un problème
                        </a>
                    ";
            } else {
                // line 802
                yield "                        <button type=\"button\" class=\"btn btn-outline-secondary btn-sm\" disabled>
                            <i class=\"fas fa-exclamation-triangle me-1\"></i> Signalement indisponible
                        </button>
                        <p class=\"text-muted small mt-2\">
                            Disponible uniquement pour les lots issus de commandes réceptionnées depuis moins de 30 jours.
                        </p>
                    ";
            }
            // line 809
            yield "                </div>
            </div>
            ";
        }
        // line 812
        yield "
            <!-- Informations d'achat -->
            ";
        // line 814
        if ((($tmp = (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 814, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 815
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
            // line 826
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 826, $this->source); })()), "purchase", [], "any", false, false, false, 826), "id", [], "any", false, false, false, 826)]), "html", null, true);
            yield "\" class=\"text-decoration-none\">
                                ";
            // line 827
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 827, $this->source); })()), "purchase", [], "any", false, false, false, 827), "purchaseNumber", [], "any", false, false, false, 827), "html", null, true);
            yield "
                            </a>
                        </dd>
                        <dt class=\"col-5 col-sm-4 text-muted small\">Fournisseur</dt>
                        <dd class=\"col-7 col-sm-8 small\">
                            ";
            // line 832
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchaseItem"] ?? null), "purchase", [], "any", false, true, false, 832), "supplier", [], "any", false, true, false, 832), "name", [], "any", true, true, false, 832)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 832, $this->source); })()), "purchase", [], "any", false, false, false, 832), "supplier", [], "any", false, false, false, 832), "name", [], "any", false, false, false, 832), "Non renseigné")) : ("Non renseigné"))), "truncate", [20], "method", false, false, false, 832), "html", null, true);
            yield "
                        </dd>
                        <dt class=\"col-5 col-sm-4 text-muted small\">Date d'achat</dt>
                        <dd class=\"col-7 col-sm-8 small\">";
            // line 835
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 835, $this->source); })()), "purchase", [], "any", false, false, false, 835), "createdAt", [], "any", false, false, false, 835), "d/m/Y"), "html", null, true);
            yield "</dd>
                        <dt class=\"col-5 col-sm-4 text-muted small\">Qté achetée</dt>
                        <dd class=\"col-7 col-sm-8 small\">
                            ";
            // line 838
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 838, $this->source); })()), "quantity", [], "any", false, false, false, 838), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 838)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 838, $this->source); })()), "unit", [], "any", false, false, false, 838), "pièce(s)")) : ("pièce(s)"))), "truncate", [6], "method", false, false, false, 838), "html", null, true);
            yield "
                        </dd>
                        <dt class=\"col-5 col-sm-4 text-muted small\">Prix d'achat</dt>
                        <dd class=\"col-7 col-sm-8 small\">
                            ";
            // line 842
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchaseItem"]) || array_key_exists("purchaseItem", $context) ? $context["purchaseItem"] : (function () { throw new RuntimeError('Variable "purchaseItem" does not exist.', 842, $this->source); })()), "unitPrice", [], "any", false, false, false, 842), CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 842, $this->source); })()), "hmaService", [], "any", false, false, false, 842)), "html", null, true);
            yield "
                        </dd>
                    </dl>
                </div>
            </div>
            ";
        }
        // line 848
        yield "
            <!-- Mouvements de stock -->
            <div class=\"card info-card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-2 py-md-3 d-flex justify-content-between align-items-center flex-wrap gap-1\">
                    <h5 class=\"mb-0 fw-semibold small\">
                        <i class=\"fas fa-exchange-alt me-2 text-info\"></i>
                        Mouvements de stock
                    </h5>
                    <span class=\"badge bg-secondary\">";
        // line 856
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 856, $this->source); })()), "stockMovements", [], "any", false, false, false, 856)), "html", null, true);
        yield "</span>
                </div>
                <div class=\"card-body p-0\">
                    ";
        // line 859
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 859, $this->source); })()), "stockMovements", [], "any", false, false, false, 859)) > 0)) {
            // line 860
            yield "                        <div class=\"list-group list-group-flush\">
                            ";
            // line 861
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::sort($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 861, $this->source); })()), "stockMovements", [], "any", false, false, false, 861), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 861, $this->source); })()), "createdAt", [], "any", false, false, false, 861) <=> CoreExtension::getAttribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 861, $this->source); })()), "createdAt", [], "any", false, false, false, 861)); }));
            foreach ($context['_seq'] as $context["_key"] => $context["movement"]) {
                // line 862
                yield "                                <div class=\"list-group-item p-2 p-md-3\">
                                    <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start gap-1\">
                                        <div class=\"flex-grow-1 w-100\">
                                            <span class=\"badge 
                                                ";
                // line 866
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "movementType", [], "any", false, false, false, 866) == "PURCHASE")) {
                    yield "bg-success
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 867
$context["movement"], "movementType", [], "any", false, false, false, 867) == "SALE")) {
                    yield "bg-danger
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 868
$context["movement"], "movementType", [], "any", false, false, false, 868) == "ADJUSTMENT")) {
                    yield "bg-warning text-dark
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 869
$context["movement"], "movementType", [], "any", false, false, false, 869) == "RETURN")) {
                    yield "bg-info
                                                ";
                } else {
                    // line 870
                    yield "bg-secondary
                                                ";
                }
                // line 871
                yield " me-1\">
                                                <i class=\"fas 
                                                    ";
                // line 873
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "movementType", [], "any", false, false, false, 873) == "PURCHASE")) {
                    yield "fa-cart-plus
                                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 874
$context["movement"], "movementType", [], "any", false, false, false, 874) == "SALE")) {
                    yield "fa-shopping-cart
                                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 875
$context["movement"], "movementType", [], "any", false, false, false, 875) == "ADJUSTMENT")) {
                    yield "fa-sliders-h
                                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 876
$context["movement"], "movementType", [], "any", false, false, false, 876) == "RETURN")) {
                    yield "fa-undo-alt
                                                    ";
                } else {
                    // line 877
                    yield "fa-question
                                                    ";
                }
                // line 878
                yield " me-1\"></i>
                                                ";
                // line 879
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "movementType", [], "any", false, false, false, 879) == "PURCHASE")) {
                    yield "Achat
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 880
$context["movement"], "movementType", [], "any", false, false, false, 880) == "SALE")) {
                    yield "Vente
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 881
$context["movement"], "movementType", [], "any", false, false, false, 881) == "ADJUSTMENT")) {
                    yield "Ajustement
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 882
$context["movement"], "movementType", [], "any", false, false, false, 882) == "RETURN")) {
                    yield "Retour
                                                ";
                } else {
                    // line 883
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "movementType", [], "any", false, false, false, 883), "html", null, true);
                }
                // line 884
                yield "                                            </span>
                                            <span class=\"fw-bold\">";
                // line 885
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "quantity", [], "any", false, false, false, 885), "html", null, true);
                yield "</span>
                                            <small class=\"text-muted\">";
                // line 886
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 886)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 886, $this->source); })()), "unit", [], "any", false, false, false, 886), "pièce(s)")) : ("pièce(s)"))), "truncate", [6], "method", false, false, false, 886), "html", null, true);
                yield "</small>
                                            ";
                // line 887
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "unitPrice", [], "any", false, false, false, 887)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 888
                    yield "                                                <br><small class=\"text-muted\">Prix: ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "unitPrice", [], "any", false, false, false, 888), CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 888, $this->source); })()), "hmaService", [], "any", false, false, false, 888)), "html", null, true);
                    yield "</small>
                                            ";
                }
                // line 890
                yield "                                        </div>
                                        <div class=\"text-start text-sm-end w-100 w-sm-auto\">
                                            <small class=\"text-muted d-block\">";
                // line 892
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "createdAt", [], "any", false, false, false, 892), "d/m/Y H:i"), "html", null, true);
                yield "</small>
                                            ";
                // line 893
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user", [], "any", false, false, false, 893)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 894
                    yield "                                                <small class=\"text-muted\">
                                                    <i class=\"fas fa-user me-1\"></i>";
                    // line 895
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user", [], "any", false, true, false, 895), "fullName", [], "any", true, true, false, 895)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user", [], "any", false, false, false, 895), "fullName", [], "any", false, false, false, 895), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user", [], "any", false, false, false, 895), "email", [], "any", false, false, false, 895))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user", [], "any", false, false, false, 895), "email", [], "any", false, false, false, 895)))), "truncate", [15], "method", false, false, false, 895), "html", null, true);
                    yield "
                                                </small>
                                            ";
                }
                // line 898
                yield "                                        </div>
                                    </div>
                                    ";
                // line 900
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "notes", [], "any", false, false, false, 900)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 901
                    yield "                                        <div class=\"mt-1\">
                                            <small class=\"text-muted\">
                                                <i class=\"fas fa-comment me-1\"></i>
                                                ";
                    // line 904
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "notes", [], "any", false, false, false, 904)), "truncate", [60], "method", false, false, false, 904), "html", null, true);
                    yield "
                                            </small>
                                        </div>
                                    ";
                }
                // line 908
                yield "                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['movement'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 910
            yield "                        </div>
                    ";
        } else {
            // line 912
            yield "                        <div class=\"text-center py-3 py-md-4\">
                            <i class=\"fas fa-chart-line fa-2x text-muted mb-2\"></i>
                            <p class=\"text-muted mb-0 small\">Aucun mouvement de stock</p>
                        </div>
                    ";
        }
        // line 917
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

    // line 924
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

        // line 925
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
        return array (  1720 => 925,  1707 => 924,  1691 => 917,  1684 => 912,  1680 => 910,  1673 => 908,  1666 => 904,  1661 => 901,  1659 => 900,  1655 => 898,  1649 => 895,  1646 => 894,  1644 => 893,  1640 => 892,  1636 => 890,  1630 => 888,  1628 => 887,  1624 => 886,  1620 => 885,  1617 => 884,  1614 => 883,  1609 => 882,  1605 => 881,  1601 => 880,  1597 => 879,  1594 => 878,  1590 => 877,  1585 => 876,  1581 => 875,  1577 => 874,  1573 => 873,  1569 => 871,  1565 => 870,  1560 => 869,  1556 => 868,  1552 => 867,  1548 => 866,  1542 => 862,  1538 => 861,  1535 => 860,  1533 => 859,  1527 => 856,  1517 => 848,  1508 => 842,  1499 => 838,  1493 => 835,  1487 => 832,  1479 => 827,  1475 => 826,  1462 => 815,  1460 => 814,  1456 => 812,  1451 => 809,  1442 => 802,  1434 => 798,  1432 => 797,  1424 => 791,  1419 => 788,  1410 => 782,  1407 => 781,  1405 => 780,  1397 => 775,  1394 => 774,  1392 => 773,  1385 => 769,  1376 => 763,  1365 => 755,  1356 => 749,  1348 => 743,  1344 => 741,  1340 => 739,  1338 => 738,  1335 => 737,  1333 => 736,  1330 => 735,  1328 => 734,  1320 => 729,  1307 => 721,  1303 => 720,  1294 => 714,  1291 => 713,  1288 => 712,  1285 => 711,  1282 => 710,  1279 => 709,  1276 => 708,  1273 => 707,  1270 => 706,  1267 => 705,  1264 => 704,  1261 => 703,  1258 => 702,  1255 => 701,  1252 => 700,  1249 => 699,  1246 => 698,  1243 => 697,  1240 => 696,  1237 => 695,  1234 => 694,  1231 => 693,  1228 => 692,  1225 => 691,  1222 => 690,  1219 => 689,  1216 => 688,  1213 => 687,  1210 => 686,  1207 => 685,  1204 => 684,  1201 => 683,  1198 => 682,  1195 => 681,  1192 => 680,  1189 => 679,  1186 => 678,  1183 => 677,  1180 => 676,  1177 => 675,  1174 => 674,  1171 => 673,  1168 => 672,  1165 => 671,  1162 => 670,  1159 => 669,  1156 => 668,  1153 => 667,  1150 => 665,  1147 => 664,  1144 => 663,  1141 => 662,  1138 => 661,  1135 => 660,  1132 => 659,  1130 => 658,  1118 => 648,  1114 => 646,  1112 => 645,  1109 => 644,  1107 => 643,  1102 => 641,  1092 => 640,  1082 => 633,  1058 => 612,  1049 => 606,  1036 => 596,  1026 => 595,  1020 => 592,  1012 => 586,  1008 => 584,  1006 => 583,  1002 => 582,  997 => 580,  989 => 579,  980 => 573,  976 => 572,  954 => 552,  950 => 550,  947 => 549,  943 => 547,  941 => 546,  938 => 545,  936 => 544,  933 => 543,  927 => 540,  924 => 539,  918 => 535,  916 => 534,  911 => 531,  909 => 530,  904 => 527,  902 => 526,  897 => 523,  895 => 522,  890 => 519,  888 => 518,  883 => 515,  881 => 514,  876 => 511,  874 => 510,  869 => 507,  866 => 506,  863 => 505,  860 => 504,  851 => 497,  847 => 496,  843 => 495,  837 => 491,  833 => 489,  827 => 486,  823 => 484,  821 => 483,  811 => 476,  805 => 473,  797 => 468,  793 => 467,  786 => 463,  762 => 442,  759 => 441,  756 => 440,  749 => 435,  746 => 434,  739 => 429,  736 => 428,  729 => 423,  723 => 420,  718 => 417,  715 => 416,  712 => 415,  709 => 414,  706 => 413,  703 => 412,  701 => 411,  698 => 410,  688 => 404,  685 => 403,  675 => 397,  669 => 394,  663 => 391,  657 => 389,  654 => 388,  651 => 387,  648 => 386,  645 => 385,  642 => 384,  640 => 383,  638 => 382,  629 => 377,  627 => 376,  625 => 375,  621 => 373,  618 => 372,  613 => 371,  609 => 370,  605 => 369,  601 => 368,  597 => 367,  591 => 365,  586 => 364,  582 => 363,  578 => 362,  572 => 360,  567 => 359,  563 => 358,  559 => 357,  553 => 355,  551 => 354,  549 => 353,  546 => 352,  543 => 351,  540 => 350,  537 => 348,  529 => 344,  527 => 343,  520 => 338,  517 => 337,  513 => 335,  509 => 333,  503 => 331,  501 => 330,  497 => 329,  487 => 327,  484 => 326,  481 => 325,  478 => 324,  475 => 323,  473 => 322,  470 => 321,  465 => 320,  461 => 319,  455 => 316,  451 => 315,  443 => 310,  439 => 309,  433 => 308,  429 => 307,  421 => 301,  408 => 300,  105 => 7,  92 => 6,  66 => 4,  43 => 2,);
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
            
            {# ✅ CORRECTION : Utiliser supplierCreditNote (le VRAI avoir) #}
            {% set creditNote = supplierCreditNote is defined ? supplierCreditNote : null %}
            {% set realIssueStatus = creditNote ? creditNote.status : batch.issueStatus %}
            
            {% if batch.hasIssue and creditNote %}
                {# ✅ Avoir existant → lien vers l'avoir avec statut à jour #}
                <a href=\"{{ path('app_supplier_credit_note_show', {'id': creditNote.id}) }}\" 
                   class=\"btn btn-sm btn-action
                       {% if realIssueStatus in ['recovered', 'resolved'] %}btn-success
                       {% elseif realIssueStatus == 'pending' %}btn-warning
                       {% elseif realIssueStatus in ['rejected', 'lost'] %}btn-danger
                       {% else %}btn-outline-info{% endif %}\">
                    <i class=\"fas 
                        {% if realIssueStatus in ['recovered', 'resolved'] %}fa-check-circle
                        {% elseif realIssueStatus == 'pending' %}fa-clock
                        {% elseif realIssueStatus in ['rejected', 'lost'] %}fa-times-circle
                        {% else %}fa-file-invoice-dollar{% endif %} me-1\"></i> 
                    <span class=\"d-none d-sm-inline\">
                        {% if realIssueStatus in ['recovered', 'resolved'] %}Récupéré
                        {% elseif realIssueStatus == 'pending' %}En attente
                        {% elseif realIssueStatus == 'lost' %}Perdu
                        {% elseif realIssueStatus == 'rejected' %}Rejeté
                        {% elseif realIssueStatus == 'closed' %}Clôturé
                        {% else %}Voir l'avoir{% endif %}
                    </span>
                </a>
            {% elseif batch.hasIssue %}
                {# Avoir existant mais non chargé (fallback) #}
                <a href=\"{{ path('app_supplier_credit_note_show', {'id': batch.supplierCreditNoteId}) }}\" 
                   class=\"btn btn-outline-info btn-action btn-sm\">
                    <i class=\"fas fa-file-invoice-dollar me-1\"></i> 
                    <span class=\"d-none d-sm-inline\">Voir l'avoir</span>
                </a>
            {% elseif canReportIssue is defined and canReportIssue %}
                {# ✅ Pas d'avoir → bouton \"Signaler\" #}
                {% if purchaseItem is defined and purchaseItem and purchaseItem.purchase %}
                    {% set purchase = purchaseItem.purchase %}
                    {% if purchase.receivedAt %}
                        {% set daysSinceReception = date().diff(purchase.receivedAt).days %}
                        {% set daysRemaining = 30 - daysSinceReception %}
                        <a href=\"{{ path('app_supplier_credit_note_new', {'batchId': batch.id}) }}\" 
                           class=\"btn btn-outline-danger btn-action btn-sm\" 
                           title=\"Encore {{ daysRemaining }} jour(s)\">
                            <i class=\"fas fa-exclamation-triangle me-1\"></i> 
                            <span class=\"d-none d-sm-inline\">Signaler</span>
                            <span class=\"badge bg-danger ms-1\">{{ daysRemaining }}j</span>
                        </a>
                    {% else %}
                        <a href=\"{{ path('app_supplier_credit_note_new', {'batchId': batch.id}) }}\" 
                           class=\"btn btn-outline-danger btn-action btn-sm\">
                            <i class=\"fas fa-exclamation-triangle me-1\"></i> 
                            <span class=\"d-none d-sm-inline\">Signaler</span>
                        </a>
                    {% endif %}
                {% else %}
                    <a href=\"{{ path('app_supplier_credit_note_new', {'batchId': batch.id}) }}\" 
                       class=\"btn btn-outline-danger btn-action btn-sm\">
                        <i class=\"fas fa-exclamation-triangle me-1\"></i> 
                        <span class=\"d-none d-sm-inline\">Signaler</span>
                    </a>
                {% endif %}
            {% else %}
                {# Signalement indisponible #}
                {% if purchaseItem is defined and purchaseItem and purchaseItem.purchase %}
                    {% set purchase = purchaseItem.purchase %}
                    {% if purchase.receivedAt %}
                        {% set daysSinceReception = date().diff(purchase.receivedAt).days %}
                        {% if daysSinceReception > 30 %}
                            <button type=\"button\" class=\"btn btn-outline-secondary btn-action btn-sm\" disabled>
                                <i class=\"fas fa-exclamation-triangle me-1\"></i> 
                                <span class=\"d-none d-sm-inline\">Signalement expiré</span>
                                <span class=\"badge bg-secondary ms-1\">+{{ daysSinceReception - 30 }}j</span>
                            </button>
                        {% else %}
                            <button type=\"button\" class=\"btn btn-outline-secondary btn-action btn-sm\" disabled>
                                <i class=\"fas fa-exclamation-triangle me-1\"></i> 
                                <span class=\"d-none d-sm-inline\">Indisponible</span>
                            </button>
                        {% endif %}
                    {% else %}
                        <button type=\"button\" class=\"btn btn-outline-secondary btn-action btn-sm\" disabled>
                            <i class=\"fas fa-exclamation-triangle me-1\"></i> 
                            <span class=\"d-none d-sm-inline\">Indisponible</span>
                        </button>
                    {% endif %}
                {% else %}
                    <button type=\"button\" class=\"btn btn-outline-secondary btn-action btn-sm\" disabled>
                        <i class=\"fas fa-exclamation-triangle me-1\"></i> 
                        <span class=\"d-none d-sm-inline\">Indisponible</span>
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
                                    {# ✅ CORRECTION : Utiliser le VRAI statut de l'avoir #}
                                    {% if batch.hasIssue %}
                                        {% set realIssueStatus = creditNote ? creditNote.status : batch.issueStatus %}
                                        {% if realIssueStatus == 'recovered' or realIssueStatus == 'resolved' %}
                                            <span class=\"badge bg-success\">
                                                <i class=\"fas fa-check-circle me-1\"></i>Récupéré
                                            </span>
                                        {% elseif realIssueStatus == 'pending' %}
                                            <span class=\"badge bg-warning text-dark\">
                                                <i class=\"fas fa-clock me-1\"></i>En attente
                                            </span>
                                        {% elseif realIssueStatus == 'acknowledged' %}
                                            <span class=\"badge bg-info\">
                                                <i class=\"fas fa-check me-1\"></i>Accusé réception
                                            </span>
                                        {% elseif realIssueStatus == 'under_review' %}
                                            <span class=\"badge bg-info\">
                                                <i class=\"fas fa-search me-1\"></i>En analyse
                                            </span>
                                        {% elseif realIssueStatus == 'partially_recovered' %}
                                            <span class=\"badge bg-warning text-dark\">
                                                <i class=\"fas fa-hourglass-half me-1\"></i>Partiel
                                            </span>
                                        {% elseif realIssueStatus == 'lost' %}
                                            <span class=\"badge bg-danger\">
                                                <i class=\"fas fa-times-circle me-1\"></i>Perdu
                                            </span>
                                        {% elseif realIssueStatus == 'rejected' %}
                                            <span class=\"badge bg-danger\">
                                                <i class=\"fas fa-ban me-1\"></i>Rejeté
                                            </span>
                                        {% elseif realIssueStatus == 'closed' %}
                                            <span class=\"badge bg-secondary\">
                                                <i class=\"fas fa-archive me-1\"></i>Clôturé
                                            </span>
                                        {% else %}
                                            <span class=\"badge bg-secondary\">
                                                {{ realIssueStatus|replace({'_': ' '})|capitalize }}
                                            </span>
                                        {% endif %}
                                        
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
            <!-- ✅ CORRECTION : Informations avoir avec VRAI statut -->
            {% if batch.hasIssue %}
                {% set realIssueStatus = creditNote ? creditNote.status : batch.issueStatus %}
                {% set realDeclaredAmount = creditNote ? creditNote.declaredAmount : batch.issueDeclaredAmount %}
                {% set realRecoveredAmount = creditNote ? creditNote.recoveredAmount : batch.issueRecoveredAmount %}
                {% set realLostAmount = creditNote ? creditNote.lostAmount : batch.issueLostAmount %}
                {% set realReportedAt = creditNote ? creditNote.createdAt : batch.issueReportedAt %}
                {% set realResolvedAt = creditNote ? creditNote.resolvedAt : batch.issueResolvedAt %}
                
                {# ✅ Classe CSS dynamique selon le statut #}
                {% if realIssueStatus == 'recovered' or realIssueStatus == 'resolved' %}
                    {% set statusCardClass = 'bg-success bg-opacity-10 border-success' %}
                    {% set statusBadgeClass = 'bg-success' %}
                    {% set statusLabel = 'Récupéré' %}
                    {% set statusIcon = 'fa-check-circle' %}
                {% elseif realIssueStatus == 'pending' %}
                    {% set statusCardClass = 'bg-warning bg-opacity-10 border-warning' %}
                    {% set statusBadgeClass = 'bg-warning text-dark' %}
                    {% set statusLabel = 'En attente' %}
                    {% set statusIcon = 'fa-clock' %}
                {% elseif realIssueStatus == 'acknowledged' %}
                    {% set statusCardClass = 'bg-info bg-opacity-10 border-info' %}
                    {% set statusBadgeClass = 'bg-info' %}
                    {% set statusLabel = 'Accusé réception' %}
                    {% set statusIcon = 'fa-check' %}
                {% elseif realIssueStatus == 'under_review' %}
                    {% set statusCardClass = 'bg-info bg-opacity-10 border-info' %}
                    {% set statusBadgeClass = 'bg-info' %}
                    {% set statusLabel = 'En analyse' %}
                    {% set statusIcon = 'fa-search' %}
                {% elseif realIssueStatus == 'partially_recovered' %}
                    {% set statusCardClass = 'bg-warning bg-opacity-10 border-warning' %}
                    {% set statusBadgeClass = 'bg-warning text-dark' %}
                    {% set statusLabel = 'Partiel. récupéré' %}
                    {% set statusIcon = 'fa-hourglass-half' %}
                {% elseif realIssueStatus == 'lost' %}
                    {% set statusCardClass = 'bg-danger bg-opacity-10 border-danger' %}
                    {% set statusBadgeClass = 'bg-danger' %}
                    {% set statusLabel = 'Perdu' %}
                    {% set statusIcon = 'fa-times-circle' %}
                {% elseif realIssueStatus == 'rejected' %}
                    {% set statusCardClass = 'bg-danger bg-opacity-10 border-danger' %}
                    {% set statusBadgeClass = 'bg-danger' %}
                    {% set statusLabel = 'Rejeté' %}
                    {% set statusIcon = 'fa-ban' %}
                {% elseif realIssueStatus == 'closed' %}
                    {% set statusCardClass = 'bg-secondary bg-opacity-10 border-secondary' %}
                    {% set statusBadgeClass = 'bg-secondary' %}
                    {% set statusLabel = 'Clôturé' %}
                    {% set statusIcon = 'fa-archive' %}
                {% else %}
                    {% set statusCardClass = 'bg-light border-secondary' %}
                    {% set statusBadgeClass = 'bg-secondary' %}
                    {% set statusLabel = realIssueStatus|replace({'_': ' '})|capitalize %}
                    {% set statusIcon = 'fa-exclamation-triangle' %}
                {% endif %}
                
                <div class=\"card info-card border-0 shadow-sm mb-3 mb-md-4 border-start border-4 {{ statusCardClass }}\">
                    <div class=\"card-header bg-white py-2 py-md-3 d-flex justify-content-between align-items-center flex-wrap gap-1\">
                        <h5 class=\"mb-0 fw-semibold small\">
                            <i class=\"fas fa-file-invoice-dollar me-2 text-danger\"></i>
                            Avoir fournisseur
                        </h5>
                        <span class=\"badge {{ statusBadgeClass }} fs-6 px-2 px-md-3 py-1 py-md-2\">
                            <i class=\"fas {{ statusIcon }} me-1\"></i>{{ statusLabel }}
                        </span>
                    </div>
                    <div class=\"card-body p-2 p-md-3\">
                        <div class=\"row g-2 mb-2\">
                            <div class=\"col-6\">
                                <small class=\"text-muted d-block\">Montant déclaré</small>
                                <span class=\"fw-bold text-danger\">
                                    {{ realDeclaredAmount|price_with_currency(batch.hmaService) }}
                                </span>
                            </div>
                            <div class=\"col-6\">
                                <small class=\"text-muted d-block\">Priorité</small>
                                {% if batch.issuePriority == 'critical' %}
                                    <span class=\"badge bg-danger\">Critique</span>
                                {% elseif batch.issuePriority == 'high' %}
                                    <span class=\"badge bg-warning text-dark\">Haute</span>
                                {% elseif batch.issuePriority == 'medium' %}
                                    <span class=\"badge bg-info\">Moyenne</span>
                                {% else %}
                                    <span class=\"badge bg-secondary\">Basse</span>
                                {% endif %}
                            </div>
                        </div>
                        <div class=\"row g-2 mb-2\">
                            <div class=\"col-6\">
                                <small class=\"text-muted d-block\">Récupéré</small>
                                <span class=\"fw-bold text-success\">
                                    {{ (realRecoveredAmount ?: 0)|price_with_currency(batch.hmaService) }}
                                </span>
                            </div>
                            <div class=\"col-6\">
                                <small class=\"text-muted d-block\">Perdu</small>
                                <span class=\"fw-bold text-secondary\">
                                    {{ (realLostAmount ?: 0)|price_with_currency(batch.hmaService) }}
                                </span>
                            </div>
                        </div>
                        <div class=\"row g-2\">
                            <div class=\"col-6\">
                                <small class=\"text-muted d-block\">Signalé le</small>
                                <span class=\"small\">
                                    {{ realReportedAt ? realReportedAt|date('d/m/Y H:i') : '—' }}
                                </span>
                            </div>
                            <div class=\"col-6\">
                                <small class=\"text-muted d-block\">Résolu le</small>
                                <span class=\"small\">
                                    {{ realResolvedAt ? realResolvedAt|date('d/m/Y H:i') : '—' }}
                                </span>
                            </div>
                        </div>
                        {% if creditNote %}
                            <div class=\"mt-3 text-center\">
                                <a href=\"{{ path('app_supplier_credit_note_show', {'id': creditNote.id}) }}\" 
                                   class=\"btn btn-outline-danger btn-sm w-100\">
                                    <i class=\"fas fa-eye me-1\"></i> Voir le détail de l'avoir
                                </a>
                            </div>
                        {% elseif batch.supplierCreditNoteId %}
                            <div class=\"mt-3 text-center\">
                                <a href=\"{{ path('app_supplier_credit_note_show', {'id': batch.supplierCreditNoteId}) }}\" 
                                   class=\"btn btn-outline-danger btn-sm w-100\">
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
                        <p class=\"text-muted small mt-2\">
                            Disponible uniquement pour les lots issus de commandes réceptionnées depuis moins de 30 jours.
                        </p>
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
                        <dd class=\"col-7 col-sm-8 small\">
                            {{ purchaseItem.purchase.supplier.name|default('Non renseigné')|u.truncate(20) }}
                        </dd>
                        <dt class=\"col-5 col-sm-4 text-muted small\">Date d'achat</dt>
                        <dd class=\"col-7 col-sm-8 small\">{{ purchaseItem.purchase.createdAt|date('d/m/Y') }}</dd>
                        <dt class=\"col-5 col-sm-4 text-muted small\">Qté achetée</dt>
                        <dd class=\"col-7 col-sm-8 small\">
                            {{ purchaseItem.quantity }} {{ product.unit|default('pièce(s)')|u.truncate(6) }}
                        </dd>
                        <dt class=\"col-5 col-sm-4 text-muted small\">Prix d'achat</dt>
                        <dd class=\"col-7 col-sm-8 small\">
                            {{ purchaseItem.unitPrice|price_with_currency(batch.hmaService) }}
                        </dd>
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
