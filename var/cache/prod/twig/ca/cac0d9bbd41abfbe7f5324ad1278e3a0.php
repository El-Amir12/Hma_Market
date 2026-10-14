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
class __TwigTemplate_3910b56063aa6ccc7cf5b6d7602f5b63 extends Template
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
        yield "Lot ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "batchNumber", [], "any", false, false, false, 4), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 4), "html", null, true);
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
        yield from [];
    }

    // line 300
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 308)]), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 308)), "truncate", [20], "method", false, false, false, 308), "html", null, true);
        yield "</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 309
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_index", ["productId" => CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 309)]), "html", null, true);
        yield "\">Lots</a></li>
                    <li class=\"breadcrumb-item active\">";
        // line 310
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "batchNumber", [], "any", false, false, false, 310)), "truncate", [12], "method", false, false, false, 310), "html", null, true);
        yield "</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-boxes me-2 text-info\"></i>
                <span class=\"d-none d-sm-inline\">Lot ";
        // line 315
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "batchNumber", [], "any", false, false, false, 315), "html", null, true);
        yield "</span>
                <span class=\"d-inline d-sm-none\">Lot ";
        // line 316
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "batchNumber", [], "any", false, false, false, 316)), "truncate", [10], "method", false, false, false, 316), "html", null, true);
        yield "</span>
            </h1>
            <p class=\"text-muted mt-1 small\">
                <i class=\"fas fa-calendar-alt me-1\"></i> Créé le ";
        // line 319
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "createdAt", [], "any", false, false, false, 319), "d/m/Y H:i"), "html", null, true);
        yield "
                ";
        // line 320
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "updatedAt", [], "any", false, false, false, 320)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " | Modifié le ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "updatedAt", [], "any", false, false, false, 320), "d/m/Y H:i"), "html", null, true);
        }
        // line 321
        yield "            </p>
            ";
        // line 322
        if (((array_key_exists("purchaseItem", $context) && ($context["purchaseItem"] ?? null)) && CoreExtension::getAttribute($this->env, $this->source, ($context["purchaseItem"] ?? null), "purchase", [], "any", false, false, false, 322))) {
            // line 323
            yield "                ";
            $context["purchase"] = CoreExtension::getAttribute($this->env, $this->source, ($context["purchaseItem"] ?? null), "purchase", [], "any", false, false, false, 323);
            // line 324
            yield "                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "receivedAt", [], "any", false, false, false, 324)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 325
                yield "                    ";
                $context["daysSinceReception"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extension\CoreExtension']->convertDate(), "diff", [CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "receivedAt", [], "any", false, false, false, 325)], "method", false, false, false, 325), "days", [], "any", false, false, false, 325);
                // line 326
                yield "                    ";
                $context["daysRemaining"] = (30 - ($context["daysSinceReception"] ?? null));
                // line 327
                yield "                    <span class=\"badge ";
                if ((($context["daysRemaining"] ?? null) > 0)) {
                    yield "bg-success";
                } else {
                    yield "bg-secondary";
                }
                yield " mt-1\">
                        <i class=\"fas fa-calendar-check me-1\"></i>
                        Réceptionné le ";
                // line 329
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "receivedAt", [], "any", false, false, false, 329), "d/m/Y"), "html", null, true);
                yield "
                        ";
                // line 330
                if ((($context["daysRemaining"] ?? null) > 0)) {
                    // line 331
                    yield "                            (";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["daysRemaining"] ?? null), "html", null, true);
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
        if ((($tmp = ($context["canEdit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 344
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "id", [], "any", false, false, false, 344)]), "html", null, true);
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
        $context["creditNote"] = ((array_key_exists("supplierCreditNote", $context)) ? (($context["supplierCreditNote"] ?? null)) : (null));
        // line 351
        yield "            ";
        $context["realIssueStatus"] = (((($tmp = ($context["creditNote"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "status", [], "any", false, false, false, 351)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "issueStatus", [], "any", false, false, false, 351)));
        // line 352
        yield "            
            ";
        // line 353
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "hasIssue", [], "any", false, false, false, 353) && ($context["creditNote"] ?? null))) {
            // line 354
            yield "                ";
            // line 355
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "id", [], "any", false, false, false, 355)]), "html", null, true);
            yield "\" 
                   class=\"btn btn-sm btn-action
                       ";
            // line 357
            if (CoreExtension::inFilter(($context["realIssueStatus"] ?? null), ["recovered", "resolved"])) {
                yield "btn-success
                       ";
            } elseif ((            // line 358
($context["realIssueStatus"] ?? null) == "pending")) {
                yield "btn-warning
                       ";
            } elseif (CoreExtension::inFilter(            // line 359
($context["realIssueStatus"] ?? null), ["rejected", "lost"])) {
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
            if (CoreExtension::inFilter(($context["realIssueStatus"] ?? null), ["recovered", "resolved"])) {
                yield "fa-check-circle
                        ";
            } elseif ((            // line 363
($context["realIssueStatus"] ?? null) == "pending")) {
                yield "fa-clock
                        ";
            } elseif (CoreExtension::inFilter(            // line 364
($context["realIssueStatus"] ?? null), ["rejected", "lost"])) {
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
            if (CoreExtension::inFilter(($context["realIssueStatus"] ?? null), ["recovered", "resolved"])) {
                yield "Récupéré
                        ";
            } elseif ((            // line 368
($context["realIssueStatus"] ?? null) == "pending")) {
                yield "En attente
                        ";
            } elseif ((            // line 369
($context["realIssueStatus"] ?? null) == "lost")) {
                yield "Perdu
                        ";
            } elseif ((            // line 370
($context["realIssueStatus"] ?? null) == "rejected")) {
                yield "Rejeté
                        ";
            } elseif ((            // line 371
($context["realIssueStatus"] ?? null) == "closed")) {
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
($context["batch"] ?? null), "hasIssue", [], "any", false, false, false, 375)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 376
            yield "                ";
            // line 377
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "supplierCreditNoteId", [], "any", false, false, false, 377)]), "html", null, true);
            yield "\" 
                   class=\"btn btn-outline-info btn-action btn-sm\">
                    <i class=\"fas fa-file-invoice-dollar me-1\"></i> 
                    <span class=\"d-none d-sm-inline\">Voir l'avoir</span>
                </a>
            ";
        } elseif ((        // line 382
array_key_exists("canReportIssue", $context) && ($context["canReportIssue"] ?? null))) {
            // line 383
            yield "                ";
            // line 384
            yield "                ";
            if (((array_key_exists("purchaseItem", $context) && ($context["purchaseItem"] ?? null)) && CoreExtension::getAttribute($this->env, $this->source, ($context["purchaseItem"] ?? null), "purchase", [], "any", false, false, false, 384))) {
                // line 385
                yield "                    ";
                $context["purchase"] = CoreExtension::getAttribute($this->env, $this->source, ($context["purchaseItem"] ?? null), "purchase", [], "any", false, false, false, 385);
                // line 386
                yield "                    ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "receivedAt", [], "any", false, false, false, 386)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 387
                    yield "                        ";
                    $context["daysSinceReception"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extension\CoreExtension']->convertDate(), "diff", [CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "receivedAt", [], "any", false, false, false, 387)], "method", false, false, false, 387), "days", [], "any", false, false, false, 387);
                    // line 388
                    yield "                        ";
                    $context["daysRemaining"] = (30 - ($context["daysSinceReception"] ?? null));
                    // line 389
                    yield "                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_new", ["batchId" => CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "id", [], "any", false, false, false, 389)]), "html", null, true);
                    yield "\" 
                           class=\"btn btn-outline-danger btn-action btn-sm\" 
                           title=\"Encore ";
                    // line 391
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["daysRemaining"] ?? null), "html", null, true);
                    yield " jour(s)\">
                            <i class=\"fas fa-exclamation-triangle me-1\"></i> 
                            <span class=\"d-none d-sm-inline\">Signaler</span>
                            <span class=\"badge bg-danger ms-1\">";
                    // line 394
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["daysRemaining"] ?? null), "html", null, true);
                    yield "j</span>
                        </a>
                    ";
                } else {
                    // line 397
                    yield "                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_new", ["batchId" => CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "id", [], "any", false, false, false, 397)]), "html", null, true);
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
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_new", ["batchId" => CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "id", [], "any", false, false, false, 404)]), "html", null, true);
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
            if (((array_key_exists("purchaseItem", $context) && ($context["purchaseItem"] ?? null)) && CoreExtension::getAttribute($this->env, $this->source, ($context["purchaseItem"] ?? null), "purchase", [], "any", false, false, false, 412))) {
                // line 413
                yield "                    ";
                $context["purchase"] = CoreExtension::getAttribute($this->env, $this->source, ($context["purchaseItem"] ?? null), "purchase", [], "any", false, false, false, 413);
                // line 414
                yield "                    ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "receivedAt", [], "any", false, false, false, 414)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 415
                    yield "                        ";
                    $context["daysSinceReception"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extension\CoreExtension']->convertDate(), "diff", [CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "receivedAt", [], "any", false, false, false, 415)], "method", false, false, false, 415), "days", [], "any", false, false, false, 415);
                    // line 416
                    yield "                        ";
                    if ((($context["daysSinceReception"] ?? null) > 30)) {
                        // line 417
                        yield "                            <button type=\"button\" class=\"btn btn-outline-secondary btn-action btn-sm\" disabled>
                                <i class=\"fas fa-exclamation-triangle me-1\"></i> 
                                <span class=\"d-none d-sm-inline\">Signalement expiré</span>
                                <span class=\"badge bg-secondary ms-1\">+";
                        // line 420
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["daysSinceReception"] ?? null) - 30), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_index", ["productId" => CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 442)]), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "batchNumber", [], "any", false, false, false, 463), "html", null, true);
        yield "</dd>
                                
                                <dt class=\"col-5 text-muted small\">Produit</dt>
                                <dd class=\"col-7 small\">
                                    <a href=\"";
        // line 467
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 467)]), "html", null, true);
        yield "\" class=\"text-decoration-none\">
                                        ";
        // line 468
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 468)), "truncate", [25], "method", false, false, false, 468), "html", null, true);
        yield "
                                    </a>
                                </dd>
                                
                                <dt class=\"col-5 text-muted small\">Code-barres</dt>
                                <dd class=\"col-7 small\">";
        // line 473
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "barcode", [], "any", false, false, false, 473)), "truncate", [12], "method", false, false, false, 473), "html", null, true);
        yield "</dd>
                                
                                <dt class=\"col-5 text-muted small\">Catégorie</dt>
                                <dd class=\"col-7 small\">";
        // line 476
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "category", [], "any", false, false, false, 476)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "category", [], "any", false, false, false, 476), "name", [], "any", false, false, false, 476), "html", null, true)) : ("—"));
        yield "</dd>
                            </dl>
                        </div>
                        <div class=\"col-12 col-sm-6\">
                            <dl class=\"row mb-0 g-1\">
                                <dt class=\"col-5 text-muted small\">Emplacement</dt>
                                <dd class=\"col-7 small\">
                                    ";
        // line 483
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "location", [], "any", false, false, false, 483) || CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "locationEntity", [], "any", false, false, false, 483))) {
            // line 484
            yield "                                        <span class=\"badge bg-info text-dark\">
                                            <i class=\"fas fa-map-marker-alt me-1\"></i> 
                                            ";
            // line 486
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "locationEntity", [], "any", false, false, false, 486)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "locationEntity", [], "any", false, false, false, 486), "displayName", [], "any", false, false, false, 486)), "truncate", [12], "method", false, false, false, 486), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "location", [], "any", false, false, false, 486)), "truncate", [12], "method", false, false, false, 486), "html", null, true)));
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
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "isActive", [], "any", false, false, false, 495)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-secondary"));
        yield "\">
                                        <i class=\"fas ";
        // line 496
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "isActive", [], "any", false, false, false, 496)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-check-circle") : ("fa-pause-circle"));
        yield " me-1\"></i>
                                        ";
        // line 497
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "isActive", [], "any", false, false, false, 497)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Inactif"));
        yield "
                                    </span>
                                </dd>
                                
                                <dt class=\"col-5 text-muted small\">Avoir</dt>
                                <dd class=\"col-7 small\">
                                    ";
        // line 504
        yield "                                    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "hasIssue", [], "any", false, false, false, 504)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 505
            yield "                                        ";
            $context["realIssueStatus"] = (((($tmp = ($context["creditNote"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "status", [], "any", false, false, false, 505)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "issueStatus", [], "any", false, false, false, 505)));
            // line 506
            yield "                                        ";
            if (((($context["realIssueStatus"] ?? null) == "recovered") || (($context["realIssueStatus"] ?? null) == "resolved"))) {
                // line 507
                yield "                                            <span class=\"badge bg-success\">
                                                <i class=\"fas fa-check-circle me-1\"></i>Récupéré
                                            </span>
                                        ";
            } elseif ((            // line 510
($context["realIssueStatus"] ?? null) == "pending")) {
                // line 511
                yield "                                            <span class=\"badge bg-warning text-dark\">
                                                <i class=\"fas fa-clock me-1\"></i>En attente
                                            </span>
                                        ";
            } elseif ((            // line 514
($context["realIssueStatus"] ?? null) == "acknowledged")) {
                // line 515
                yield "                                            <span class=\"badge bg-info\">
                                                <i class=\"fas fa-check me-1\"></i>Accusé réception
                                            </span>
                                        ";
            } elseif ((            // line 518
($context["realIssueStatus"] ?? null) == "under_review")) {
                // line 519
                yield "                                            <span class=\"badge bg-info\">
                                                <i class=\"fas fa-search me-1\"></i>En analyse
                                            </span>
                                        ";
            } elseif ((            // line 522
($context["realIssueStatus"] ?? null) == "partially_recovered")) {
                // line 523
                yield "                                            <span class=\"badge bg-warning text-dark\">
                                                <i class=\"fas fa-hourglass-half me-1\"></i>Partiel
                                            </span>
                                        ";
            } elseif ((            // line 526
($context["realIssueStatus"] ?? null) == "lost")) {
                // line 527
                yield "                                            <span class=\"badge bg-danger\">
                                                <i class=\"fas fa-times-circle me-1\"></i>Perdu
                                            </span>
                                        ";
            } elseif ((            // line 530
($context["realIssueStatus"] ?? null) == "rejected")) {
                // line 531
                yield "                                            <span class=\"badge bg-danger\">
                                                <i class=\"fas fa-ban me-1\"></i>Rejeté
                                            </span>
                                        ";
            } elseif ((            // line 534
($context["realIssueStatus"] ?? null) == "closed")) {
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
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace(($context["realIssueStatus"] ?? null), ["_" => " "])), "html", null, true);
                yield "
                                            </span>
                                        ";
            }
            // line 543
            yield "                                        
                                        ";
            // line 544
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "issuePriority", [], "any", false, false, false, 544) == "critical")) {
                // line 545
                yield "                                            <span class=\"badge bg-danger ms-1 small\">Critique</span>
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 546
($context["batch"] ?? null), "issuePriority", [], "any", false, false, false, 546) == "high")) {
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "initialQuantity", [], "any", false, false, false, 572), "html", null, true);
        yield "</span>
                                <small class=\"d-block text-muted\">";
        // line 573
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 573)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", false, false, false, 573), "pièce(s)")) : ("pièce(s)"))), "truncate", [8], "method", false, false, false, 573), "html", null, true);
        yield "</small>
                            </div>
                        </div>
                        <div class=\"col-4 col-md-4\">
                            <div class=\"p-2 p-md-3 bg-light rounded-3\">
                                <small class=\"text-muted d-block\">Actuelle</small>
                                <span class=\"fw-bold fs-5 ";
        // line 579
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "currentQuantity", [], "any", false, false, false, 579) <= 10)) {
            yield "text-danger";
        } else {
            yield "text-success";
        }
        yield "\">
                                    ";
        // line 580
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "currentQuantity", [], "any", false, false, false, 580), "html", null, true);
        yield "
                                </span>
                                <small class=\"d-block text-muted\">";
        // line 582
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 582)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", false, false, false, 582), "pièce(s)")) : ("pièce(s)"))), "truncate", [8], "method", false, false, false, 582), "html", null, true);
        yield "</small>
                                ";
        // line 583
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "currentQuantity", [], "any", false, false, false, 583) <= 10)) {
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "currentQuantity", [], "any", false, false, false, 592) / CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "initialQuantity", [], "any", false, false, false, 592)) * 100)), "html", null, true);
        yield "%
                                </span>
                                <div class=\"progress mt-1\" style=\"height:4px\">
                                    <div class=\"progress-bar ";
        // line 595
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "currentQuantity", [], "any", false, false, false, 595) / CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "initialQuantity", [], "any", false, false, false, 595)) * 100) <= 10)) {
            yield "bg-danger";
        } elseif ((((CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "currentQuantity", [], "any", false, false, false, 595) / CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "initialQuantity", [], "any", false, false, false, 595)) * 100) <= 30)) {
            yield "bg-warning";
        } else {
            yield "bg-success";
        }
        yield "\" 
                                         style=\"width: ";
        // line 596
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "currentQuantity", [], "any", false, false, false, 596) / CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "initialQuantity", [], "any", false, false, false, 596)) * 100)), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "unitPrice", [], "any", false, false, false, 606), CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "hmaService", [], "any", false, false, false, 606)), "html", null, true);
        yield "</span>
                            </div>
                        </div>
                        <div class=\"col-6\">
                            <div class=\"p-2 p-md-3 bg-light rounded-3 text-center\">
                                <small class=\"text-muted d-block\">Valeur totale</small>
                                <span class=\"fw-bold text-success\">";
        // line 612
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency((CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "currentQuantity", [], "any", false, false, false, 612) * CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "unitPrice", [], "any", false, false, false, 612)), CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "hmaService", [], "any", false, false, false, 612)), "html", null, true);
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
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "manufacturingDate", [], "any", false, false, false, 633)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "manufacturingDate", [], "any", false, false, false, 633), "d/m/Y"), "html", null, true)) : ("—"));
        yield "
                                </span>
                            </div>
                        </div>
                        <div class=\"col-6\">
                            <div class=\"p-2 p-md-3 bg-light rounded-3 text-center\">
                                <small class=\"text-muted d-block\">Expiration</small>
                                <span class=\"fw-bold small ";
        // line 640
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "expiryDate", [], "any", false, false, false, 640) && (CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "expiryDate", [], "any", false, false, false, 640) < $this->extensions['Twig\Extension\CoreExtension']->convertDate()))) {
            yield "text-danger";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "expiryDate", [], "any", false, false, false, 640) && (CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "expiryDate", [], "any", false, false, false, 640) < $this->extensions['Twig\Extension\CoreExtension']->convertDate("+30 days")))) {
            yield "text-warning";
        } else {
            yield "text-success";
        }
        yield "\">
                                    ";
        // line 641
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "expiryDate", [], "any", false, false, false, 641)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "expiryDate", [], "any", false, false, false, 641), "d/m/Y"), "html", null, true)) : ("Non périssable"));
        yield "
                                </span>
                                ";
        // line 643
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "expiryDate", [], "any", false, false, false, 643) && (CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "expiryDate", [], "any", false, false, false, 643) < $this->extensions['Twig\Extension\CoreExtension']->convertDate()))) {
            // line 644
            yield "                                    <span class=\"badge bg-danger d-block mt-1 small\">Expiré</span>
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 645
($context["batch"] ?? null), "expiryDate", [], "any", false, false, false, 645) && (CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "expiryDate", [], "any", false, false, false, 645) < $this->extensions['Twig\Extension\CoreExtension']->convertDate("+30 days")))) {
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
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "hasIssue", [], "any", false, false, false, 658)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 659
            yield "                ";
            $context["realIssueStatus"] = (((($tmp = ($context["creditNote"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "status", [], "any", false, false, false, 659)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "issueStatus", [], "any", false, false, false, 659)));
            // line 660
            yield "                ";
            $context["realDeclaredAmount"] = (((($tmp = ($context["creditNote"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "declaredAmount", [], "any", false, false, false, 660)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "issueDeclaredAmount", [], "any", false, false, false, 660)));
            // line 661
            yield "                ";
            $context["realRecoveredAmount"] = (((($tmp = ($context["creditNote"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "recoveredAmount", [], "any", false, false, false, 661)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "issueRecoveredAmount", [], "any", false, false, false, 661)));
            // line 662
            yield "                ";
            $context["realLostAmount"] = (((($tmp = ($context["creditNote"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "lostAmount", [], "any", false, false, false, 662)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "issueLostAmount", [], "any", false, false, false, 662)));
            // line 663
            yield "                ";
            $context["realReportedAt"] = (((($tmp = ($context["creditNote"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "createdAt", [], "any", false, false, false, 663)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "issueReportedAt", [], "any", false, false, false, 663)));
            // line 664
            yield "                ";
            $context["realResolvedAt"] = (((($tmp = ($context["creditNote"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "resolvedAt", [], "any", false, false, false, 664)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "issueResolvedAt", [], "any", false, false, false, 664)));
            // line 665
            yield "                
                ";
            // line 667
            yield "                ";
            if (((($context["realIssueStatus"] ?? null) == "recovered") || (($context["realIssueStatus"] ?? null) == "resolved"))) {
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
            } elseif ((($context["realIssueStatus"] ?? null) == "pending")) {
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
            } elseif ((($context["realIssueStatus"] ?? null) == "acknowledged")) {
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
            } elseif ((($context["realIssueStatus"] ?? null) == "under_review")) {
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
            } elseif ((($context["realIssueStatus"] ?? null) == "partially_recovered")) {
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
            } elseif ((($context["realIssueStatus"] ?? null) == "lost")) {
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
            } elseif ((($context["realIssueStatus"] ?? null) == "rejected")) {
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
            } elseif ((($context["realIssueStatus"] ?? null) == "closed")) {
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
                $context["statusLabel"] = Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace(($context["realIssueStatus"] ?? null), ["_" => " "]));
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["statusCardClass"] ?? null), "html", null, true);
            yield "\">
                    <div class=\"card-header bg-white py-2 py-md-3 d-flex justify-content-between align-items-center flex-wrap gap-1\">
                        <h5 class=\"mb-0 fw-semibold small\">
                            <i class=\"fas fa-file-invoice-dollar me-2 text-danger\"></i>
                            Avoir fournisseur
                        </h5>
                        <span class=\"badge ";
            // line 720
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["statusBadgeClass"] ?? null), "html", null, true);
            yield " fs-6 px-2 px-md-3 py-1 py-md-2\">
                            <i class=\"fas ";
            // line 721
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["statusIcon"] ?? null), "html", null, true);
            yield " me-1\"></i>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["statusLabel"] ?? null), "html", null, true);
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(($context["realDeclaredAmount"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "hmaService", [], "any", false, false, false, 729)), "html", null, true);
            yield "
                                </span>
                            </div>
                            <div class=\"col-6\">
                                <small class=\"text-muted d-block\">Priorité</small>
                                ";
            // line 734
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "issuePriority", [], "any", false, false, false, 734) == "critical")) {
                // line 735
                yield "                                    <span class=\"badge bg-danger\">Critique</span>
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 736
($context["batch"] ?? null), "issuePriority", [], "any", false, false, false, 736) == "high")) {
                // line 737
                yield "                                    <span class=\"badge bg-warning text-dark\">Haute</span>
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 738
($context["batch"] ?? null), "issuePriority", [], "any", false, false, false, 738) == "medium")) {
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(((($context["realRecoveredAmount"] ?? null)) ? ($context["realRecoveredAmount"]) : (0)), CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "hmaService", [], "any", false, false, false, 749)), "html", null, true);
            yield "
                                </span>
                            </div>
                            <div class=\"col-6\">
                                <small class=\"text-muted d-block\">Perdu</small>
                                <span class=\"fw-bold text-secondary\">
                                    ";
            // line 755
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(((($context["realLostAmount"] ?? null)) ? ($context["realLostAmount"]) : (0)), CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "hmaService", [], "any", false, false, false, 755)), "html", null, true);
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
            yield (((($tmp = ($context["realReportedAt"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(($context["realReportedAt"] ?? null), "d/m/Y H:i"), "html", null, true)) : ("—"));
            yield "
                                </span>
                            </div>
                            <div class=\"col-6\">
                                <small class=\"text-muted d-block\">Résolu le</small>
                                <span class=\"small\">
                                    ";
            // line 769
            yield (((($tmp = ($context["realResolvedAt"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(($context["realResolvedAt"] ?? null), "d/m/Y H:i"), "html", null, true)) : ("—"));
            yield "
                                </span>
                            </div>
                        </div>
                        ";
            // line 773
            if ((($tmp = ($context["creditNote"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 774
                yield "                            <div class=\"mt-3 text-center\">
                                <a href=\"";
                // line 775
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "id", [], "any", false, false, false, 775)]), "html", null, true);
                yield "\" 
                                   class=\"btn btn-outline-danger btn-sm w-100\">
                                    <i class=\"fas fa-eye me-1\"></i> Voir le détail de l'avoir
                                </a>
                            </div>
                        ";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 780
($context["batch"] ?? null), "supplierCreditNoteId", [], "any", false, false, false, 780)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 781
                yield "                            <div class=\"mt-3 text-center\">
                                <a href=\"";
                // line 782
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "supplierCreditNoteId", [], "any", false, false, false, 782)]), "html", null, true);
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
            if ((($tmp = ($context["canReportIssue"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 798
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_new", ["batchId" => CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "id", [], "any", false, false, false, 798)]), "html", null, true);
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
        if ((($tmp = ($context["purchaseItem"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchaseItem"] ?? null), "purchase", [], "any", false, false, false, 826), "id", [], "any", false, false, false, 826)]), "html", null, true);
            yield "\" class=\"text-decoration-none\">
                                ";
            // line 827
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchaseItem"] ?? null), "purchase", [], "any", false, false, false, 827), "purchaseNumber", [], "any", false, false, false, 827), "html", null, true);
            yield "
                            </a>
                        </dd>
                        <dt class=\"col-5 col-sm-4 text-muted small\">Fournisseur</dt>
                        <dd class=\"col-7 col-sm-8 small\">
                            ";
            // line 832
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchaseItem"] ?? null), "purchase", [], "any", false, true, false, 832), "supplier", [], "any", false, true, false, 832), "name", [], "any", true, true, false, 832)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchaseItem"] ?? null), "purchase", [], "any", false, false, false, 832), "supplier", [], "any", false, false, false, 832), "name", [], "any", false, false, false, 832), "Non renseigné")) : ("Non renseigné"))), "truncate", [20], "method", false, false, false, 832), "html", null, true);
            yield "
                        </dd>
                        <dt class=\"col-5 col-sm-4 text-muted small\">Date d'achat</dt>
                        <dd class=\"col-7 col-sm-8 small\">";
            // line 835
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchaseItem"] ?? null), "purchase", [], "any", false, false, false, 835), "createdAt", [], "any", false, false, false, 835), "d/m/Y"), "html", null, true);
            yield "</dd>
                        <dt class=\"col-5 col-sm-4 text-muted small\">Qté achetée</dt>
                        <dd class=\"col-7 col-sm-8 small\">
                            ";
            // line 838
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["purchaseItem"] ?? null), "quantity", [], "any", false, false, false, 838), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 838)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", false, false, false, 838), "pièce(s)")) : ("pièce(s)"))), "truncate", [6], "method", false, false, false, 838), "html", null, true);
            yield "
                        </dd>
                        <dt class=\"col-5 col-sm-4 text-muted small\">Prix d'achat</dt>
                        <dd class=\"col-7 col-sm-8 small\">
                            ";
            // line 842
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, ($context["purchaseItem"] ?? null), "unitPrice", [], "any", false, false, false, 842), CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "hmaService", [], "any", false, false, false, 842)), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "stockMovements", [], "any", false, false, false, 856)), "html", null, true);
        yield "</span>
                </div>
                <div class=\"card-body p-0\">
                    ";
        // line 859
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "stockMovements", [], "any", false, false, false, 859)) > 0)) {
            // line 860
            yield "                        <div class=\"list-group list-group-flush\">
                            ";
            // line 861
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::sort($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "stockMovements", [], "any", false, false, false, 861), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["b"] ?? null), "createdAt", [], "any", false, false, false, 861) <=> CoreExtension::getAttribute($this->env, $this->source, ($context["a"] ?? null), "createdAt", [], "any", false, false, false, 861)); }));
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
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 886)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", false, false, false, 886), "pièce(s)")) : ("pièce(s)"))), "truncate", [6], "method", false, false, false, 886), "html", null, true);
                yield "</small>
                                            ";
                // line 887
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "unitPrice", [], "any", false, false, false, 887)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 888
                    yield "                                                <br><small class=\"text-muted\">Prix: ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "unitPrice", [], "any", false, false, false, 888), CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "hmaService", [], "any", false, false, false, 888)), "html", null, true);
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
        yield from [];
    }

    // line 924
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        return array (  1666 => 925,  1659 => 924,  1649 => 917,  1642 => 912,  1638 => 910,  1631 => 908,  1624 => 904,  1619 => 901,  1617 => 900,  1613 => 898,  1607 => 895,  1604 => 894,  1602 => 893,  1598 => 892,  1594 => 890,  1588 => 888,  1586 => 887,  1582 => 886,  1578 => 885,  1575 => 884,  1572 => 883,  1567 => 882,  1563 => 881,  1559 => 880,  1555 => 879,  1552 => 878,  1548 => 877,  1543 => 876,  1539 => 875,  1535 => 874,  1531 => 873,  1527 => 871,  1523 => 870,  1518 => 869,  1514 => 868,  1510 => 867,  1506 => 866,  1500 => 862,  1496 => 861,  1493 => 860,  1491 => 859,  1485 => 856,  1475 => 848,  1466 => 842,  1457 => 838,  1451 => 835,  1445 => 832,  1437 => 827,  1433 => 826,  1420 => 815,  1418 => 814,  1414 => 812,  1409 => 809,  1400 => 802,  1392 => 798,  1390 => 797,  1382 => 791,  1377 => 788,  1368 => 782,  1365 => 781,  1363 => 780,  1355 => 775,  1352 => 774,  1350 => 773,  1343 => 769,  1334 => 763,  1323 => 755,  1314 => 749,  1306 => 743,  1302 => 741,  1298 => 739,  1296 => 738,  1293 => 737,  1291 => 736,  1288 => 735,  1286 => 734,  1278 => 729,  1265 => 721,  1261 => 720,  1252 => 714,  1249 => 713,  1246 => 712,  1243 => 711,  1240 => 710,  1237 => 709,  1234 => 708,  1231 => 707,  1228 => 706,  1225 => 705,  1222 => 704,  1219 => 703,  1216 => 702,  1213 => 701,  1210 => 700,  1207 => 699,  1204 => 698,  1201 => 697,  1198 => 696,  1195 => 695,  1192 => 694,  1189 => 693,  1186 => 692,  1183 => 691,  1180 => 690,  1177 => 689,  1174 => 688,  1171 => 687,  1168 => 686,  1165 => 685,  1162 => 684,  1159 => 683,  1156 => 682,  1153 => 681,  1150 => 680,  1147 => 679,  1144 => 678,  1141 => 677,  1138 => 676,  1135 => 675,  1132 => 674,  1129 => 673,  1126 => 672,  1123 => 671,  1120 => 670,  1117 => 669,  1114 => 668,  1111 => 667,  1108 => 665,  1105 => 664,  1102 => 663,  1099 => 662,  1096 => 661,  1093 => 660,  1090 => 659,  1088 => 658,  1076 => 648,  1072 => 646,  1070 => 645,  1067 => 644,  1065 => 643,  1060 => 641,  1050 => 640,  1040 => 633,  1016 => 612,  1007 => 606,  994 => 596,  984 => 595,  978 => 592,  970 => 586,  966 => 584,  964 => 583,  960 => 582,  955 => 580,  947 => 579,  938 => 573,  934 => 572,  912 => 552,  908 => 550,  905 => 549,  901 => 547,  899 => 546,  896 => 545,  894 => 544,  891 => 543,  885 => 540,  882 => 539,  876 => 535,  874 => 534,  869 => 531,  867 => 530,  862 => 527,  860 => 526,  855 => 523,  853 => 522,  848 => 519,  846 => 518,  841 => 515,  839 => 514,  834 => 511,  832 => 510,  827 => 507,  824 => 506,  821 => 505,  818 => 504,  809 => 497,  805 => 496,  801 => 495,  795 => 491,  791 => 489,  785 => 486,  781 => 484,  779 => 483,  769 => 476,  763 => 473,  755 => 468,  751 => 467,  744 => 463,  720 => 442,  717 => 441,  714 => 440,  707 => 435,  704 => 434,  697 => 429,  694 => 428,  687 => 423,  681 => 420,  676 => 417,  673 => 416,  670 => 415,  667 => 414,  664 => 413,  661 => 412,  659 => 411,  656 => 410,  646 => 404,  643 => 403,  633 => 397,  627 => 394,  621 => 391,  615 => 389,  612 => 388,  609 => 387,  606 => 386,  603 => 385,  600 => 384,  598 => 383,  596 => 382,  587 => 377,  585 => 376,  583 => 375,  579 => 373,  576 => 372,  571 => 371,  567 => 370,  563 => 369,  559 => 368,  555 => 367,  549 => 365,  544 => 364,  540 => 363,  536 => 362,  530 => 360,  525 => 359,  521 => 358,  517 => 357,  511 => 355,  509 => 354,  507 => 353,  504 => 352,  501 => 351,  498 => 350,  495 => 348,  487 => 344,  485 => 343,  478 => 338,  475 => 337,  471 => 335,  467 => 333,  461 => 331,  459 => 330,  455 => 329,  445 => 327,  442 => 326,  439 => 325,  436 => 324,  433 => 323,  431 => 322,  428 => 321,  423 => 320,  419 => 319,  413 => 316,  409 => 315,  401 => 310,  397 => 309,  391 => 308,  387 => 307,  379 => 301,  372 => 300,  75 => 7,  68 => 6,  54 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/stock_batch/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\stock_batch\\show.html.twig");
    }
}
