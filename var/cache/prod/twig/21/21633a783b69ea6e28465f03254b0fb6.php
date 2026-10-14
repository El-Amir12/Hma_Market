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

/* super_admin/payment/index.html.twig */
class __TwigTemplate_572e8d436993143d36e82d19d689c86b extends Template
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
        yield "Gestion des paiements - Super Admin";
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
    .stat-card {
        transition: transform 0.2s, box-shadow 0.2s;
        border-radius: 1rem;
        border: none;
    }
    .stat-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }
    .stat-value {
        font-size: 1.75rem;
        font-weight: bold;
        color: #ffffff !important;
    }
    .stat-card .text-muted {
        color: rgba(255,255,255,0.7) !important;
    }
    .filter-card {
        background: #f8fafc;
        border-radius: 1rem;
        transition: all 0.2s ease;
    }
    .badge-status {
        padding: 0.35rem 0.85rem;
        border-radius: 2rem;
        font-weight: 500;
        font-size: 0.75rem;
        white-space: nowrap;
    }
    .badge-status.completed, .badge-status.paid { background: #d1fae5; color: #065f46; }
    .badge-status.pending { background: #fef3c7; color: #b45309; }
    .badge-status.failed { background: #fee2e2; color: #991b1b; }
    .badge-status.refunded { background: #f1f5f9; color: #475569; }
    .table-container {
        overflow-x: auto;
    }
    .payment-row {
        cursor: pointer;
        transition: background 0.2s;
    }
    .payment-row:hover {
        background: #f1f5f9;
    }
    .amount-cell {
        font-weight: 700;
        color: #0463f1;
    }
    .filter-badge {
        cursor: pointer;
        transition: all 0.2s;
        background: #e2e8f0;
        color: #1e293b;
        padding: 0.3rem 0.7rem;
        border-radius: 2rem;
        font-size: 0.7rem;
    }
    .filter-badge:hover {
        background: #cbd5e1;
        transform: scale(1.05);
    }
    .btn-action {
        transition: all 0.2s ease;
    }
    .btn-action:hover {
        transform: scale(1.05);
    }
    /* Carte dernier paiement */
    .last-payment-card {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 1rem;
        transition: transform 0.2s, box-shadow 0.2s;
    }
    .last-payment-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.15);
    }
    .info-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0.5rem 0;
        border-bottom: 1px solid rgba(255,255,255,0.2);
    }
    .info-row:last-child {
        border-bottom: none;
    }
    .info-label {
        font-size: 0.8rem;
        opacity: 0.8;
        color: rgba(255,255,255,0.8);
    }
    .info-value {
        font-weight: 600;
        color: #ffffff;
    }
    .stat-card .small {
        color: rgba(255,255,255,0.8) !important;
    }

    /* ========================================
       RESPONSIVE - FILTRES
    ======================================== */
    .filter-col {
        flex: 0 0 100% !important;
        max-width: 100% !important;
        width: 100% !important;
    }
    .filter-col-half {
        flex: 0 0 100% !important;
        max-width: 100% !important;
        width: 100% !important;
    }
    .filter-select {
        width: 100% !important;
        font-size: 0.7rem !important;
    }
    .filter-input {
        font-size: 0.7rem !important;
    }

    /* ========================================
       RESPONSIVE - MEDIA QUERIES
    ======================================== */
    
    /* Tablette */
    @media (max-width: 768px) {
        .stat-value { font-size: 1.3rem; }
        .stat-card .card-body { padding: 0.75rem; }
        .stat-card .rounded-circle { width: 36px; height: 36px; padding: 0.5rem !important; }
        .stat-card .rounded-circle i { font-size: 1rem; }
        
        .filter-card { padding: 1rem !important; }
        .last-payment-card { padding: 1rem !important; }
        
        .table th, .table td { padding: 0.5rem; font-size: 0.75rem; }
        .badge-status { font-size: 0.65rem; padding: 0.2rem 0.5rem; }
        
        .filter-col-half {
            flex: 0 0 50% !important;
            max-width: 50% !important;
            width: 50% !important;
        }
    }
    
    /* Mobile */
    @media (max-width: 576px) {
        .container-fluid {
            padding-left: 6px !important;
            padding-right: 6px !important;
        }
        
        /* En-tête */
        .h1, .h3 {
            font-size: 1rem !important;
        }
        .text-muted {
            font-size: 0.65rem !important;
        }
        .breadcrumb {
            font-size: 0.55rem !important;
        }
        .breadcrumb-item a {
            font-size: 0.55rem !important;
        }
        
        /* Boutons */
        .btn {
            font-size: 0.6rem !important;
            padding: 0.15rem 0.4rem !important;
        }
        .btn i {
            font-size: 0.6rem !important;
        }
        .btn-outline-info {
            font-size: 0.6rem !important;
            padding: 0.15rem 0.4rem !important;
        }
        
        /* Statistiques */
        .stat-value {
            font-size: 1.1rem !important;
        }
        .stat-card .card-body {
            padding: 0.5rem !important;
        }
        .stat-card .rounded-circle {
            width: 28px !important;
            height: 28px !important;
            padding: 0.3rem !important;
        }
        .stat-card .rounded-circle i {
            font-size: 0.8rem !important;
        }
        .stat-card .small {
            font-size: 0.5rem !important;
        }
        
        /* Filtres */
        .filter-card {
            padding: 0.5rem !important;
            border-radius: 0.75rem !important;
        }
        .filter-card .form-label {
            font-size: 0.55rem !important;
        }
        .filter-card .form-control,
        .filter-card .form-select {
            font-size: 0.6rem !important;
            padding: 0.15rem 0.3rem !important;
            border-radius: 4px !important;
        }
        .filter-col, .filter-col-half {
            flex: 0 0 100% !important;
            max-width: 100% !important;
            width: 100% !important;
        }
        .filter-card .btn {
            font-size: 0.6rem !important;
            padding: 0.2rem 0.4rem !important;
        }
        
        /* Badges filtres */
        .filter-badge {
            font-size: 0.55rem !important;
            padding: 0.15rem 0.4rem !important;
        }
        .btn-outline-secondary {
            font-size: 0.55rem !important;
            padding: 0.15rem 0.4rem !important;
        }
        
        /* Dernier paiement */
        .last-payment-card {
            padding: 0.5rem !important;
            border-radius: 0.75rem !important;
        }
        .last-payment-card h5 {
            font-size: 0.75rem !important;
        }
        .last-payment-card .fa-2x {
            font-size: 1.5rem !important;
        }
        .last-payment-card .row {
            gap: 0.25rem !important;
        }
        .last-payment-card .info-row {
            padding: 0.25rem 0 !important;
        }
        .last-payment-card .info-label {
            font-size: 0.55rem !important;
        }
        .last-payment-card .info-value {
            font-size: 0.6rem !important;
        }
        .last-payment-card .badge {
            font-size: 0.5rem !important;
            padding: 0.15rem 0.3rem !important;
        }
        .last-payment-card .btn {
            font-size: 0.55rem !important;
            padding: 0.15rem 0.3rem !important;
        }
        
        /* Tableau */
        .table-container .card-body {
            padding: 0 !important;
        }
        .table {
            min-width: 700px !important;
            font-size: 0.65rem !important;
        }
        .table th {
            font-size: 0.55rem !important;
            padding: 0.3rem 0.4rem !important;
            letter-spacing: 0.3px !important;
            white-space: nowrap;
        }
        .table td {
            padding: 0.3rem 0.4rem !important;
            font-size: 0.6rem !important;
            vertical-align: middle !important;
        }
        .table .badge {
            font-size: 0.45rem !important;
            padding: 0.1rem 0.3rem !important;
        }
        .badge-status {
            font-size: 0.5rem !important;
            padding: 0.15rem 0.3rem !important;
        }
        .badge-status i {
            font-size: 0.5rem !important;
        }
        .amount-cell {
            font-size: 0.65rem !important;
        }
        
        /* Actions */
        .btn-group .btn {
            font-size: 0.5rem !important;
            padding: 0.1rem 0.2rem !important;
        }
        .btn-group .btn i {
            font-size: 0.5rem !important;
        }
        
        /* Card header */
        .card-header {
            padding: 0.4rem 0.6rem !important;
        }
        .card-header h5 {
            font-size: 0.75rem !important;
        }
        .card-header .badge {
            font-size: 0.5rem !important;
        }
        
        /* Désactiver hover */
        .stat-card:hover {
            transform: none !important;
        }
        .payment-row:hover {
            background: transparent !important;
        }
        .last-payment-card:hover {
            transform: none !important;
        }
        .filter-badge:hover {
            transform: none !important;
        }
        .btn-action:hover {
            transform: none !important;
        }
    }

    /* Très petits écrans */
    @media (max-width: 400px) {
        .table {
            min-width: 600px !important;
        }
        .table th {
            font-size: 0.5rem !important;
            padding: 0.2rem 0.3rem !important;
        }
        .table td {
            font-size: 0.5rem !important;
            padding: 0.2rem 0.3rem !important;
        }
        .stat-value {
            font-size: 0.9rem !important;
        }
        .btn {
            font-size: 0.5rem !important;
            padding: 0.1rem 0.3rem !important;
        }
        .badge-status {
            font-size: 0.45rem !important;
            padding: 0.1rem 0.2rem !important;
        }
    }
</style>
";
        yield from [];
    }

    // line 372
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 373
        yield "<div class=\"container-fluid px-2 px-md-4 py-2 py-md-3\">

    <!-- ==========================================
         EN-TÊTE
    ========================================== -->
    <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center mb-3 mb-md-4 flex-wrap gap-2\">
        <div class=\"w-100 w-sm-auto\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb mb-1\">
                    <li class=\"breadcrumb-item small\">
                        <a href=\"";
        // line 383
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Dashboard
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active small\">
                        <i class=\"fas fa-credit-card me-1\"></i> Paiements
                    </li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-credit-card text-primary me-2\"></i>
                <span class=\"d-none d-sm-inline\">Gestion des paiements</span>
                <span class=\"d-inline d-sm-none\">Paiements</span>
            </h1>
            <p class=\"text-muted mt-1 small d-none d-sm-block\">
                <i class=\"fas fa-globe me-1\"></i>
                Consultez tous les paiements effectués par les entreprises
            </p>
            <p class=\"text-muted mt-1 small d-block d-sm-none\">
                Tous les paiements des entreprises
            </p>
        </div>
        <div class=\"w-100 w-sm-auto\">
            <a href=\"";
        // line 406
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_subscription_index");
        yield "\" class=\"btn btn-outline-info btn-sm w-100 w-sm-auto\">
                <i class=\"fas fa-tags me-1\"></i> <span class=\"d-none d-sm-inline\">Voir les abonnements</span>
                <span class=\"d-inline d-sm-none\">Abonnements</span>
            </a>
        </div>
    </div>

    <!-- ==========================================
         CARTES STATISTIQUES
    ========================================== -->
    <div class=\"row g-2 g-md-3 mb-3 mb-md-4\">
        <div class=\"col-6 col-md-3\">
            <div class=\"card stat-card bg-primary h-100\">
                <div class=\"card-body p-2 p-md-3 d-flex flex-column\">
                    <div class=\"d-flex justify-content-between align-items-start flex-grow-1\">
                        <div>
                            <div class=\"small text-white opacity-75\" style=\"font-size:0.5rem;\">Total paiements</div>
                            <div class=\"stat-value text-white\" style=\"font-size:1.2rem;\">";
        // line 423
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["payments"] ?? null))), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"rounded-circle bg-white bg-opacity-20 p-2 p-md-3\">
                            <i class=\"fas fa-credit-card fa-fw text-white\" style=\"font-size:0.8rem;\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-6 col-md-3\">
            <div class=\"card stat-card bg-success h-100\">
                <div class=\"card-body p-2 p-md-3 d-flex flex-column\">
                    <div class=\"d-flex justify-content-between align-items-start flex-grow-1\">
                        <div>
                            <div class=\"small text-white opacity-75\" style=\"font-size:0.5rem;\">Montant total</div>
                            <div class=\"stat-value text-white\" style=\"font-size:1.2rem;\">
                                ";
        // line 439
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((array_key_exists("totalAmount", $context)) ? (Twig\Extension\CoreExtension::default(($context["totalAmount"] ?? null), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "
                            </div>
                            <small class=\"text-white opacity-75\" style=\"font-size:0.45rem;\">FCFA</small>
                        </div>
                        <div class=\"rounded-circle bg-white bg-opacity-20 p-2 p-md-3\">
                            <i class=\"fas fa-money-bill-wave fa-fw text-white\" style=\"font-size:0.8rem;\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-6 col-md-3\">
            <div class=\"card stat-card bg-info h-100\">
                <div class=\"card-body p-2 p-md-3 d-flex flex-column\">
                    <div class=\"d-flex justify-content-between align-items-start flex-grow-1\">
                        <div>
                            <div class=\"small text-white opacity-75\" style=\"font-size:0.5rem;\">Paiements réussis</div>
                            <div class=\"stat-value text-white\" style=\"font-size:1.2rem;\">";
        // line 456
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, ($context["payments"] ?? null), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return ((CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "status", [], "any", false, false, false, 456) == "completed") || (CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "status", [], "any", false, false, false, 456) == "paid")); }))), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"rounded-circle bg-white bg-opacity-20 p-2 p-md-3\">
                            <i class=\"fas fa-check-circle fa-fw text-white\" style=\"font-size:0.8rem;\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-6 col-md-3\">
            <div class=\"card stat-card bg-danger h-100\">
                <div class=\"card-body p-2 p-md-3 d-flex flex-column\">
                    <div class=\"d-flex justify-content-between align-items-start flex-grow-1\">
                        <div>
                            <div class=\"small text-white opacity-75\" style=\"font-size:0.5rem;\">Échoués/En attente</div>
                            <div class=\"stat-value text-white\" style=\"font-size:1.2rem;\">";
        // line 471
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, ($context["payments"] ?? null), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return ((CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "status", [], "any", false, false, false, 471) == "failed") || (CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "status", [], "any", false, false, false, 471) == "pending")); }))), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"rounded-circle bg-white bg-opacity-20 p-2 p-md-3\">
                            <i class=\"fas fa-exclamation-triangle fa-fw text-white\" style=\"font-size:0.8rem;\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==========================================
         BADGES DE FILTRES ACTIFS
    ========================================== -->
    ";
        // line 485
        if (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "company_id", [], "any", false, false, false, 485) || CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", false, false, false, 485)) || CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "payment_method", [], "any", false, false, false, 485)) || CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", false, false, false, 485)) || CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", false, false, false, 485))) {
            // line 486
            yield "    <div class=\"d-flex gap-1 gap-md-2 flex-wrap mb-2 mb-md-3\">
        ";
            // line 487
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "company_id", [], "any", false, false, false, 487) && array_key_exists("companies", $context))) {
                // line 488
                yield "            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["companies"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
                    // line 489
                    yield "                ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 489) == CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "company_id", [], "any", false, false, false, 489))) {
                        // line 490
                        yield "                    <span class=\"filter-badge\" onclick=\"removeFilter('company_id')\" style=\"font-size:0.55rem; padding:0.15rem 0.4rem;\">
                        <i class=\"fas fa-building me-1\"></i> ";
                        // line 491
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["company"], "companyName", [], "any", false, false, false, 491), 0, 15), "html", null, true);
                        yield "
                        <i class=\"fas fa-times ms-1\"></i>
                    </span>
                ";
                    }
                    // line 495
                    yield "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['company'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 496
                yield "        ";
            }
            // line 497
            yield "        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", false, false, false, 497)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 498
                yield "            <span class=\"filter-badge\" onclick=\"removeFilter('status')\" style=\"font-size:0.55rem; padding:0.15rem 0.4rem;\">
                <i class=\"fas fa-filter me-1\"></i> Statut: 
                ";
                // line 500
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", false, false, false, 500) == "completed")) {
                    yield "Payé
                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 501
($context["filters"] ?? null), "status", [], "any", false, false, false, 501) == "pending")) {
                    yield "En attente
                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 502
($context["filters"] ?? null), "status", [], "any", false, false, false, 502) == "failed")) {
                    yield "Échoué
                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 503
($context["filters"] ?? null), "status", [], "any", false, false, false, 503) == "refunded")) {
                    yield "Remboursé
                ";
                } else {
                    // line 504
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", false, false, false, 504), "html", null, true);
                    yield "
                ";
                }
                // line 506
                yield "                <i class=\"fas fa-times ms-1\"></i>
            </span>
        ";
            }
            // line 509
            yield "        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "payment_method", [], "any", false, false, false, 509)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 510
                yield "            <span class=\"filter-badge\" onclick=\"removeFilter('payment_method')\" style=\"font-size:0.55rem; padding:0.15rem 0.4rem;\">
                <i class=\"fas fa-credit-card me-1\"></i> Mode: 
                ";
                // line 512
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "payment_method", [], "any", false, false, false, 512) == "card")) {
                    yield "Carte
                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 513
($context["filters"] ?? null), "payment_method", [], "any", false, false, false, 513) == "mobile_money")) {
                    yield "Mobile Money
                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 514
($context["filters"] ?? null), "payment_method", [], "any", false, false, false, 514) == "transfer")) {
                    yield "Virement
                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 515
($context["filters"] ?? null), "payment_method", [], "any", false, false, false, 515) == "cash")) {
                    yield "Espèces
                ";
                } else {
                    // line 516
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "payment_method", [], "any", false, false, false, 516), "html", null, true);
                    yield "
                ";
                }
                // line 518
                yield "                <i class=\"fas fa-times ms-1\"></i>
            </span>
        ";
            }
            // line 521
            yield "        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", false, false, false, 521)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 522
                yield "            <span class=\"filter-badge\" onclick=\"removeFilter('date_from')\" style=\"font-size:0.55rem; padding:0.15rem 0.4rem;\">
                <i class=\"fas fa-calendar me-1\"></i> Depuis: ";
                // line 523
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", false, false, false, 523), "html", null, true);
                yield "
                <i class=\"fas fa-times ms-1\"></i>
            </span>
        ";
            }
            // line 527
            yield "        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", false, false, false, 527)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 528
                yield "            <span class=\"filter-badge\" onclick=\"removeFilter('date_to')\" style=\"font-size:0.55rem; padding:0.15rem 0.4rem;\">
                <i class=\"fas fa-calendar me-1\"></i> Jusqu'au: ";
                // line 529
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", false, false, false, 529), "html", null, true);
                yield "
                <i class=\"fas fa-times ms-1\"></i>
            </span>
        ";
            }
            // line 533
            yield "        <button class=\"btn btn-sm btn-outline-secondary\" onclick=\"clearAllFilters()\" style=\"font-size:0.5rem; padding:0.15rem 0.4rem;\">
            <i class=\"fas fa-eraser me-1\"></i> Effacer tout
        </button>
    </div>
    ";
        }
        // line 538
        yield "
    <!-- ==========================================
         FILTRES
    ========================================== -->
    <div class=\"filter-card p-2 p-md-4 mb-3 mb-md-4 shadow-sm\">
        <form method=\"get\" class=\"row g-2 g-md-3 align-items-end\" id=\"filterForm\">
            <!-- Entreprise - 100% mobile, 3 desktop -->
            <div class=\"col-12 col-md-3 filter-col\">
                <label class=\"form-label fw-semibold small mb-1\" style=\"font-size:0.55rem;\">
                    <i class=\"fas fa-building me-1\"></i>Entreprise
                </label>
                <select name=\"company_id\" class=\"form-select form-select-sm filter-select\" style=\"font-size:0.65rem;\">
                    <option value=\"\">Toutes</option>
                    ";
        // line 551
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(((array_key_exists("companies", $context)) ? (Twig\Extension\CoreExtension::default(($context["companies"] ?? null), [])) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
            // line 552
            yield "                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 552), "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "company_id", [], "any", false, false, false, 552) == CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 552))) ? ("selected") : (""));
            yield ">
                            ";
            // line 553
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["company"], "companyName", [], "any", false, false, false, 553), 0, 25), "html", null, true);
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["company"], "companyName", [], "any", false, false, false, 553)) > 25)) {
                yield "...";
            }
            // line 554
            yield "                        </option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['company'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 556
        yield "                </select>
            </div>
            
            <!-- Statut - 50% mobile, 2 desktop -->
            <div class=\"col-6 col-md-2 filter-col-half\">
                <label class=\"form-label fw-semibold small mb-1\" style=\"font-size:0.55rem;\">
                    <i class=\"fas fa-filter me-1\"></i>Statut
                </label>
                <select name=\"status\" class=\"form-select form-select-sm filter-select\" style=\"font-size:0.65rem;\">
                    <option value=\"\">Tous</option>
                    <option value=\"completed\" ";
        // line 566
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", false, false, false, 566) == "completed")) ? ("selected") : (""));
        yield ">✅ Payé</option>
                    <option value=\"pending\" ";
        // line 567
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", false, false, false, 567) == "pending")) ? ("selected") : (""));
        yield ">⏳ En attente</option>
                    <option value=\"failed\" ";
        // line 568
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", false, false, false, 568) == "failed")) ? ("selected") : (""));
        yield ">❌ Échoué</option>
                    <option value=\"refunded\" ";
        // line 569
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", false, false, false, 569) == "refunded")) ? ("selected") : (""));
        yield ">↩️ Remboursé</option>
                </select>
            </div>
            
            <!-- Mode paiement - 50% mobile, 2 desktop -->
            <div class=\"col-6 col-md-2 filter-col-half\">
                <label class=\"form-label fw-semibold small mb-1\" style=\"font-size:0.55rem;\">
                    <i class=\"fas fa-credit-card me-1\"></i>Mode de paiement
                </label>
                <select name=\"payment_method\" class=\"form-select form-select-sm filter-select\" style=\"font-size:0.65rem;\">
                    <option value=\"\">Tous</option>
                    <option value=\"card\" ";
        // line 580
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "payment_method", [], "any", false, false, false, 580) == "card")) ? ("selected") : (""));
        yield ">💳 Carte</option>
                    <option value=\"mobile_money\" ";
        // line 581
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "payment_method", [], "any", false, false, false, 581) == "mobile_money")) ? ("selected") : (""));
        yield ">📱 Mobile Money</option>
                    <option value=\"transfer\" ";
        // line 582
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "payment_method", [], "any", false, false, false, 582) == "transfer")) ? ("selected") : (""));
        yield ">🏦 Virement</option>
                    <option value=\"cash\" ";
        // line 583
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "payment_method", [], "any", false, false, false, 583) == "cash")) ? ("selected") : (""));
        yield ">💰 Espèces</option>
                </select>
            </div>
            
            <!-- Date du - 50% mobile, 2 desktop -->
            <div class=\"col-6 col-md-2 filter-col-half\">
                <label class=\"form-label fw-semibold small mb-1\" style=\"font-size:0.55rem;\">
                    <i class=\"fas fa-calendar me-1\"></i>Date du
                </label>
                <input type=\"date\" name=\"date_from\" class=\"form-control form-control-sm filter-input\" value=\"";
        // line 592
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", false, false, false, 592), "html", null, true);
        yield "\" style=\"font-size:0.65rem;\">
            </div>
            
            <!-- Date au - 50% mobile, 2 desktop -->
            <div class=\"col-6 col-md-2 filter-col-half\">
                <label class=\"form-label fw-semibold small mb-1\" style=\"font-size:0.55rem;\">
                    <i class=\"fas fa-calendar me-1\"></i>Date au
                </label>
                <input type=\"date\" name=\"date_to\" class=\"form-control form-control-sm filter-input\" value=\"";
        // line 600
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", false, false, false, 600), "html", null, true);
        yield "\" style=\"font-size:0.65rem;\">
            </div>
            
            <!-- Bouton Filtrer - 100% mobile, 1 desktop -->
            <div class=\"col-12 col-md-1 filter-col\">
                <button type=\"submit\" class=\"btn btn-primary w-100\" style=\"font-size:0.65rem; padding:0.2rem 0.4rem;\">
                    <i class=\"fas fa-search\"></i>
                </button>
            </div>
        </form>
    </div>

    <!-- ==========================================
         DERNIER PAIEMENT
    ========================================== -->
    ";
        // line 615
        $context["lastPayment"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["payments"] ?? null));
        // line 616
        yield "    ";
        if ((($tmp = ($context["lastPayment"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 617
            yield "        <div class=\"last-payment-card p-3 p-md-4 mb-3 mb-md-4 text-white\">
            <div class=\"d-flex justify-content-between align-items-center mb-2 mb-md-3\">
                <h5 class=\"mb-0 fw-bold fs-6 fs-md-5\">
                    <i class=\"fas fa-clock me-2\"></i> Dernier paiement
                </h5>
                <i class=\"fas fa-credit-card fa-2x opacity-50\" style=\"font-size:1.5rem;\"></i>
            </div>
            <div class=\"row g-1 g-md-0\">
                <div class=\"col-12 col-md-4\">
                    <div class=\"info-row\">
                        <span class=\"info-label\" style=\"font-size:0.6rem;\">Entreprise</span>
                        <span class=\"info-value\" style=\"font-size:0.65rem;\">";
            // line 628
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["lastPayment"] ?? null), "hmaService", [], "any", false, false, false, 628), "companyName", [], "any", false, false, false, 628), 0, 20), "html", null, true);
            yield "</span>
                    </div>
                </div>
                <div class=\"col-12 col-md-4\">
                    <div class=\"info-row\">
                        <span class=\"info-label\" style=\"font-size:0.6rem;\">Montant</span>
                        <span class=\"info-value\" style=\"font-size:0.65rem;\">";
            // line 634
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["lastPayment"] ?? null), "amount", [], "any", false, false, false, 634), 0, ",", " "), "html", null, true);
            yield " FCFA</span>
                    </div>
                </div>
                <div class=\"col-12 col-md-4\">
                    <div class=\"info-row\">
                        <span class=\"info-label\" style=\"font-size:0.6rem;\">Mode</span>
                        <span class=\"info-value\" style=\"font-size:0.65rem;\">
                            ";
            // line 641
            $context["methodLabels"] = ["card" => "💳 Carte", "mobile_money" => "📱 Mobile Money", "transfer" => "🏦 Virement", "cash" => "💰 Espèces"];
            // line 647
            yield "                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, ($context["methodLabels"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["lastPayment"] ?? null), "paymentMethod", [], "any", false, false, false, 647), [], "array", true, true, false, 647)) ? (Twig\Extension\CoreExtension::default((($_v0 = ($context["methodLabels"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, ($context["lastPayment"] ?? null), "paymentMethod", [], "any", false, false, false, 647)] ?? null) : null), CoreExtension::getAttribute($this->env, $this->source, ($context["lastPayment"] ?? null), "paymentMethod", [], "any", false, false, false, 647))) : (CoreExtension::getAttribute($this->env, $this->source, ($context["lastPayment"] ?? null), "paymentMethod", [], "any", false, false, false, 647))), 0, 12), "html", null, true);
            yield "
                        </span>
                    </div>
                </div>
                <div class=\"col-12 col-md-4\">
                    <div class=\"info-row\">
                        <span class=\"info-label\" style=\"font-size:0.6rem;\">Statut</span>
                        <span class=\"info-value\" style=\"font-size:0.65rem;\">
                            ";
            // line 655
            if (((CoreExtension::getAttribute($this->env, $this->source, ($context["lastPayment"] ?? null), "status", [], "any", false, false, false, 655) == "completed") || (CoreExtension::getAttribute($this->env, $this->source, ($context["lastPayment"] ?? null), "status", [], "any", false, false, false, 655) == "paid"))) {
                // line 656
                yield "                                <span class=\"badge bg-success\" style=\"font-size:0.5rem;\">✓ Payé</span>
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 657
($context["lastPayment"] ?? null), "status", [], "any", false, false, false, 657) == "pending")) {
                // line 658
                yield "                                <span class=\"badge bg-warning text-dark\" style=\"font-size:0.5rem;\">⏳ En attente</span>
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 659
($context["lastPayment"] ?? null), "status", [], "any", false, false, false, 659) == "failed")) {
                // line 660
                yield "                                <span class=\"badge bg-danger\" style=\"font-size:0.5rem;\">❌ Échoué</span>
                            ";
            } else {
                // line 662
                yield "                                <span class=\"badge bg-secondary\" style=\"font-size:0.5rem;\">↩️ Remboursé</span>
                            ";
            }
            // line 664
            yield "                        </span>
                    </div>
                </div>
                <div class=\"col-12 col-md-4\">
                    <div class=\"info-row\">
                        <span class=\"info-label\" style=\"font-size:0.6rem;\">Date paiement</span>
                        <span class=\"info-value\" style=\"font-size:0.65rem;\">";
            // line 670
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["lastPayment"] ?? null), "paymentDate", [], "any", false, false, false, 670)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["lastPayment"] ?? null), "paymentDate", [], "any", false, false, false, 670), "d/m/Y H:i"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["lastPayment"] ?? null), "createdAt", [], "any", false, false, false, 670), "d/m/Y H:i"), "html", null, true)));
            yield "</span>
                    </div>
                </div>
                <div class=\"col-12 col-md-4\">
                    <div class=\"info-row\">
                        <span class=\"info-label\" style=\"font-size:0.6rem;\">Transaction</span>
                        <span class=\"info-value\" style=\"font-size:0.65rem;\">
                            ";
            // line 677
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["lastPayment"] ?? null), "transactionId", [], "any", false, false, false, 677)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 678
                yield "                                <code class=\"small bg-dark text-white px-1 py-1 rounded\" style=\"font-size:0.5rem;\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["lastPayment"] ?? null), "transactionId", [], "any", false, false, false, 678), 0, 10), "html", null, true);
                yield "...</code>
                            ";
            } else {
                // line 680
                yield "                                —
                            ";
            }
            // line 682
            yield "                        </span>
                    </div>
                </div>
            </div>
            <div class=\"mt-2 mt-md-3 text-end\">
                <a href=\"";
            // line 687
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_payment_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["lastPayment"] ?? null), "id", [], "any", false, false, false, 687)]), "html", null, true);
            yield "\" class=\"btn btn-light btn-sm\" style=\"font-size:0.6rem; padding:0.15rem 0.4rem;\">
                    <i class=\"fas fa-eye me-1\"></i> Voir les détails
                </a>
            </div>
        </div>
    ";
        } else {
            // line 693
            yield "        <div class=\"last-payment-card p-3 p-md-4 mb-3 mb-md-4 text-white\">
            <div class=\"text-center py-2 py-md-3\">
                <i class=\"fas fa-credit-card fa-2x fa-md-3x mb-2 opacity-50\"></i>
                <p class=\"mb-0 small\">Aucun paiement enregistré</p>
            </div>
        </div>
    ";
        }
        // line 700
        yield "
    <!-- ==========================================
         LISTE DES PAIEMENTS
    ========================================== -->
    <div class=\"card border-0 shadow-sm\">
        <div class=\"card-header bg-white py-2 py-md-3 d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <h5 class=\"mb-0 fw-semibold fs-6 fs-md-5\">
                <i class=\"fas fa-list me-2 text-primary\"></i>
                <span class=\"d-none d-sm-inline\">Historique des paiements</span>
                <span class=\"d-inline d-sm-none\">Paiements</span>
            </h5>
            <span class=\"badge bg-secondary\" style=\"font-size:0.55rem;\">";
        // line 711
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["payments"] ?? null)), "html", null, true);
        yield "</span>
        </div>
        <div class=\"table-container\">
            <div class=\"card-body p-0\">
                ";
        // line 715
        if (Twig\Extension\CoreExtension::testEmpty(($context["payments"] ?? null))) {
            // line 716
            yield "                    <div class=\"text-center py-4 py-md-5\">
                        <i class=\"fas fa-credit-card fa-3x text-muted mb-3 opacity-50\"></i>
                        <p class=\"text-muted mb-0 small\">Aucun paiement trouvé</p>
                        <p class=\"text-muted small mb-3\">Modifiez vos filtres</p>
                    </div>
                ";
        } else {
            // line 722
            yield "                    <div class=\"table-responsive\">
                        <table class=\"table table-hover mb-0\">
                            <thead class=\"table-light\">
                                <tr>
                                    <th style=\"min-width: 120px;\">Entreprise</th>
                                    <th style=\"min-width: 100px;\">Abonnement</th>
                                    <th style=\"min-width: 90px;\">Montant</th>
                                    <th style=\"min-width: 90px;\" class=\"d-none d-sm-table-cell\">Mode</th>
                                    <th style=\"min-width: 80px;\">Statut</th>
                                    <th style=\"min-width: 80px;\" class=\"d-none d-md-table-cell\">Date</th>
                                    <th style=\"min-width: 80px;\" class=\"d-none d-lg-table-cell\">Transaction</th>
                                    <th style=\"min-width: 70px;\">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 737
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["payments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
                // line 738
                yield "                                    <tr class=\"payment-row\">
                                        <td onclick=\"window.location='";
                // line 739
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_payment_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "id", [], "any", false, false, false, 739)]), "html", null, true);
                yield "'\">
                                            <strong class=\"small\">";
                // line 740
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "hmaService", [], "any", false, false, false, 740), "companyName", [], "any", false, false, false, 740), 0, 15), "html", null, true);
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "hmaService", [], "any", false, false, false, 740), "companyName", [], "any", false, false, false, 740)) > 15)) {
                    yield "...";
                }
                yield "</strong>
                                            <br>
                                            <small class=\"text-muted\" style=\"font-size:0.45rem;\">";
                // line 742
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "hmaService", [], "any", false, false, false, 742), "subscriptionNumber", [], "any", false, false, false, 742), "html", null, true);
                yield "</small>
                                        </td>
                                        <td onclick=\"window.location='";
                // line 744
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_payment_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "id", [], "any", false, false, false, 744)]), "html", null, true);
                yield "'\">
                                            ";
                // line 745
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "subscription", [], "any", false, false, false, 745)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 746
                    yield "                                                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_subscription_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "subscription", [], "any", false, false, false, 746), "id", [], "any", false, false, false, 746)]), "html", null, true);
                    yield "\" class=\"text-decoration-none\" onclick=\"event.stopPropagation()\">
                                                    <span class=\"badge bg-info\" style=\"font-size:0.45rem;\">
                                                        <i class=\"fas fa-tag me-1\"></i> #";
                    // line 748
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "subscription", [], "any", false, false, false, 748), "id", [], "any", false, false, false, 748), "html", null, true);
                    yield "
                                                    </span>
                                                </a>
                                                <br>
                                                <small class=\"text-muted\" style=\"font-size:0.4rem;\">";
                    // line 752
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "subscription", [], "any", false, false, false, 752), "subscriptionPlan", [], "any", false, false, false, 752), "displayName", [], "any", false, false, false, 752), 0, 10), "html", null, true);
                    yield "</small>
                                            ";
                } else {
                    // line 754
                    yield "                                                <span class=\"badge bg-secondary\" style=\"font-size:0.45rem;\">Sans abo</span>
                                            ";
                }
                // line 756
                yield "                                        </td>
                                        <td class=\"amount-cell\" onclick=\"window.location='";
                // line 757
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_payment_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "id", [], "any", false, false, false, 757)]), "html", null, true);
                yield "'\" style=\"font-size:0.65rem;\">
                                            ";
                // line 758
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "amount", [], "any", false, false, false, 758), 0, ",", " "), "html", null, true);
                yield " FCFA
                                        </td>
                                        <td onclick=\"window.location='";
                // line 760
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_payment_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "id", [], "any", false, false, false, 760)]), "html", null, true);
                yield "'\" class=\"d-none d-sm-table-cell\">
                                            ";
                // line 761
                $context["methodLabels"] = ["card" => "💳 Carte", "mobile_money" => "📱 Mobile Money", "transfer" => "🏦 Virement", "cash" => "💰 Espèces"];
                // line 767
                yield "                                            <span style=\"font-size:0.55rem;\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, ($context["methodLabels"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentMethod", [], "any", false, false, false, 767), [], "array", true, true, false, 767)) ? (Twig\Extension\CoreExtension::default((($_v1 = ($context["methodLabels"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentMethod", [], "any", false, false, false, 767)] ?? null) : null), CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentMethod", [], "any", false, false, false, 767))) : (CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentMethod", [], "any", false, false, false, 767))), 0, 10), "html", null, true);
                yield "</span>
                                        </td>
                                        <td onclick=\"window.location='";
                // line 769
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_payment_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "id", [], "any", false, false, false, 769)]), "html", null, true);
                yield "'\">
                                            <span class=\"badge-status ";
                // line 770
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "status", [], "any", false, false, false, 770), "html", null, true);
                yield "\" style=\"font-size:0.45rem; padding:0.1rem 0.3rem;\">
                                                ";
                // line 771
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "status", [], "any", false, false, false, 771) == "completed") || (CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "status", [], "any", false, false, false, 771) == "paid"))) {
                    // line 772
                    yield "                                                    <i class=\"fas fa-check-circle me-1\" style=\"font-size:0.4rem;\"></i> <span class=\"d-none d-sm-inline\">Payé</span>
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 773
$context["payment"], "status", [], "any", false, false, false, 773) == "pending")) {
                    // line 774
                    yield "                                                    <i class=\"fas fa-clock me-1\" style=\"font-size:0.4rem;\"></i> <span class=\"d-none d-sm-inline\">En attente</span>
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 775
$context["payment"], "status", [], "any", false, false, false, 775) == "failed")) {
                    // line 776
                    yield "                                                    <i class=\"fas fa-times-circle me-1\" style=\"font-size:0.4rem;\"></i> <span class=\"d-none d-sm-inline\">Échoué</span>
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 777
$context["payment"], "status", [], "any", false, false, false, 777) == "refunded")) {
                    // line 778
                    yield "                                                    <i class=\"fas fa-undo-alt me-1\" style=\"font-size:0.4rem;\"></i> <span class=\"d-none d-sm-inline\">Remboursé</span>
                                                ";
                } else {
                    // line 780
                    yield "                                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "status", [], "any", false, false, false, 780), 0, 6), "html", null, true);
                    yield "
                                                ";
                }
                // line 782
                yield "                                            </span>
                                        </td>
                                        <td onclick=\"window.location='";
                // line 784
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_payment_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "id", [], "any", false, false, false, 784)]), "html", null, true);
                yield "'\" class=\"d-none d-md-table-cell\">
                                            <i class=\"far fa-calendar text-muted me-1\" style=\"font-size:0.4rem;\"></i>
                                            <span style=\"font-size:0.5rem;\">";
                // line 786
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentDate", [], "any", false, false, false, 786)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentDate", [], "any", false, false, false, 786), "d/m/Y H:i"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "createdAt", [], "any", false, false, false, 786), "d/m/Y H:i"), "html", null, true)));
                yield "</span>
                                        </td>
                                        <td onclick=\"window.location='";
                // line 788
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_payment_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "id", [], "any", false, false, false, 788)]), "html", null, true);
                yield "'\" class=\"d-none d-lg-table-cell\">
                                            ";
                // line 789
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "transactionId", [], "any", false, false, false, 789)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 790
                    yield "                                                <code class=\"small\" style=\"font-size:0.45rem;\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "transactionId", [], "any", false, false, false, 790), 0, 10), "html", null, true);
                    yield "...</code>
                                            ";
                } else {
                    // line 792
                    yield "                                                <span class=\"text-muted\" style=\"font-size:0.45rem;\">—</span>
                                            ";
                }
                // line 794
                yield "                                        </td>
                                        <td class=\"text-center\" onclick=\"event.stopPropagation()\">
                                            <div class=\"d-flex gap-1 justify-content-center\">
                                                <a href=\"";
                // line 797
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_payment_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "id", [], "any", false, false, false, 797)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-primary btn-action\" title=\"Voir\" style=\"padding:0.1rem 0.2rem; font-size:0.45rem;\">
                                                    <i class=\"fas fa-eye\" style=\"font-size:0.45rem;\"></i>
                                                </a>
                                                ";
                // line 800
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "subscription", [], "any", false, false, false, 800)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 801
                    yield "                                                    <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_subscription_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "subscription", [], "any", false, false, false, 801), "id", [], "any", false, false, false, 801)]), "html", null, true);
                    yield "\" class=\"btn btn-sm btn-outline-info btn-action\" title=\"Abonnement\" style=\"padding:0.1rem 0.2rem; font-size:0.45rem;\">
                                                        <i class=\"fas fa-tags\" style=\"font-size:0.45rem;\"></i>
                                                    </a>
                                                ";
                }
                // line 805
                yield "                                            </div>
                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['payment'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 809
            yield "                            </tbody>
                        </table>
                    </div>
                ";
        }
        // line 813
        yield "            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    // line 819
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 820
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
function removeFilter(filter) {
    let url = new URL(window.location.href);
    url.searchParams.delete(filter);
    url.searchParams.set('page', '1');
    window.location.href = url.toString();
}

function clearAllFilters() {
    window.location.href = '";
        // line 830
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_payment_index");
        yield "';
}
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "super_admin/payment/index.html.twig";
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
        return array (  1223 => 830,  1210 => 820,  1203 => 819,  1194 => 813,  1188 => 809,  1179 => 805,  1171 => 801,  1169 => 800,  1163 => 797,  1158 => 794,  1154 => 792,  1148 => 790,  1146 => 789,  1142 => 788,  1137 => 786,  1132 => 784,  1128 => 782,  1122 => 780,  1118 => 778,  1116 => 777,  1113 => 776,  1111 => 775,  1108 => 774,  1106 => 773,  1103 => 772,  1101 => 771,  1097 => 770,  1093 => 769,  1087 => 767,  1085 => 761,  1081 => 760,  1076 => 758,  1072 => 757,  1069 => 756,  1065 => 754,  1060 => 752,  1053 => 748,  1047 => 746,  1045 => 745,  1041 => 744,  1036 => 742,  1028 => 740,  1024 => 739,  1021 => 738,  1017 => 737,  1000 => 722,  992 => 716,  990 => 715,  983 => 711,  970 => 700,  961 => 693,  952 => 687,  945 => 682,  941 => 680,  935 => 678,  933 => 677,  923 => 670,  915 => 664,  911 => 662,  907 => 660,  905 => 659,  902 => 658,  900 => 657,  897 => 656,  895 => 655,  883 => 647,  881 => 641,  871 => 634,  862 => 628,  849 => 617,  846 => 616,  844 => 615,  826 => 600,  815 => 592,  803 => 583,  799 => 582,  795 => 581,  791 => 580,  777 => 569,  773 => 568,  769 => 567,  765 => 566,  753 => 556,  746 => 554,  741 => 553,  734 => 552,  730 => 551,  715 => 538,  708 => 533,  701 => 529,  698 => 528,  695 => 527,  688 => 523,  685 => 522,  682 => 521,  677 => 518,  672 => 516,  667 => 515,  663 => 514,  659 => 513,  655 => 512,  651 => 510,  648 => 509,  643 => 506,  638 => 504,  633 => 503,  629 => 502,  625 => 501,  621 => 500,  617 => 498,  614 => 497,  611 => 496,  605 => 495,  598 => 491,  595 => 490,  592 => 489,  587 => 488,  585 => 487,  582 => 486,  580 => 485,  563 => 471,  545 => 456,  525 => 439,  506 => 423,  486 => 406,  460 => 383,  448 => 373,  441 => 372,  72 => 7,  65 => 6,  54 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "super_admin/payment/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\super_admin\\payment\\index.html.twig");
    }
}
