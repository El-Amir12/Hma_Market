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

/* super_admin/analysis_request/show.html.twig */
class __TwigTemplate_d6c3c76279de3ddd1372c85bfe73ef0f extends Template
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
        yield "Analyse ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "requestNumber", [], "any", false, false, false, 4), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "company", [], "any", false, false, false, 4), "companyName", [], "any", false, false, false, 4), "html", null, true);
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
    .info-card {
        background: #f8fafc;
        border-radius: 1rem;
        padding: 1rem;
        margin-bottom: 0.75rem;
    }
    .status-badge {
        font-size: 0.8rem;
        padding: 0.4rem 0.8rem;
        border-radius: 2rem;
    }
    .timeline {
        position: relative;
        padding-left: 1.5rem;
    }
    .timeline::before {
        content: '';
        position: absolute;
        left: 0.5rem;
        top: 0;
        bottom: 0;
        width: 2px;
        background: #e5e7eb;
    }
    .timeline-item {
        position: relative;
        padding-bottom: 1.25rem;
    }
    .timeline-item::before {
        content: '';
        position: absolute;
        left: -1.25rem;
        top: 0.25rem;
        width: 0.75rem;
        height: 0.75rem;
        border-radius: 50%;
        background: #0463f1;
        border: 2px solid white;
        box-shadow: 0 0 0 2px #e5e7eb;
    }
    .timeline-item.completed::before {
        background: #10b981;
    }
    .timeline-item.pending::before {
        background: #f59e0b;
    }
    .timeline-item.failed::before {
        background: #ef4444;
    }
    .action-buttons {
        display: flex;
        gap: 0.5rem;
        flex-wrap: wrap;
    }
    .payment-link {
        background: #f0fdf4;
        border: 1px solid #bbf7d0;
        border-radius: 0.75rem;
        padding: 0.75rem;
    }
    .payment-link input {
        font-size: 0.7rem;
        font-family: monospace;
    }
    .payment-details {
        background: #f8fafc;
        border-radius: 0.75rem;
        padding: 0.75rem;
        margin-top: 0.75rem;
    }
    .payment-details pre {
        background: #1e293b;
        color: #e2e8f0;
        padding: 0.5rem;
        border-radius: 0.5rem;
        font-size: 0.6rem;
        overflow-x: auto;
        max-height: 150px;
    }
    .company-logo {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        object-fit: cover;
        background: white;
        padding: 5px;
    }
    .company-initials {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        background: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.8rem;
        font-weight: bold;
        color: #0463f1;
    }
    .modal-icon {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 0.75rem;
    }
    .btn-loading {
        pointer-events: none;
        opacity: 0.7;
    }
    .report-card {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 1rem;
        padding: 0.75rem;
        margin-bottom: 0.75rem;
        color: white;
    }
    .report-card .btn {
        background: rgba(255,255,255,0.2);
        border: none;
        color: white;
    }
    .report-card .btn:hover {
        background: rgba(255,255,255,0.3);
    }
    .upload-form {
        background: #f8fafc;
        border-radius: 1rem;
        padding: 0.75rem;
        margin-top: 0.75rem;
    }

    /* ========================================
       RESPONSIVE
    ======================================== */
    
    /* Tablette */
    @media (max-width: 768px) {
        .info-card {
            padding: 0.75rem;
        }
        .status-badge {
            font-size: 0.7rem;
            padding: 0.3rem 0.6rem;
        }
        .company-logo {
            width: 60px;
            height: 60px;
        }
        .company-initials {
            width: 60px;
            height: 60px;
            font-size: 1.5rem;
        }
        .modal-icon {
            width: 50px;
            height: 50px;
        }
        .modal-icon i {
            font-size: 2rem !important;
        }
        .payment-link input {
            font-size: 0.6rem;
        }
        .report-card {
            padding: 0.5rem;
        }
        .report-card .btn {
            font-size: 0.6rem;
            padding: 0.15rem 0.3rem;
        }
        .action-buttons .btn {
            font-size: 0.65rem;
            padding: 0.2rem 0.4rem;
        }
        .h1, .h3 {
            font-size: 1.1rem !important;
        }
        .h5 {
            font-size: 0.85rem !important;
        }
        .text-muted {
            font-size: 0.7rem !important;
        }
        .modal-footer .btn {
            font-size: 0.65rem;
            padding: 0.15rem 0.4rem;
        }
        .modal-header h5 {
            font-size: 0.85rem;
        }
        .row.g-4 {
            --bs-gutter-y: 0.5rem;
            --bs-gutter-x: 0.5rem;
        }
        .timeline {
            padding-left: 1.25rem;
        }
        .timeline-item {
            padding-bottom: 1rem;
        }
        .timeline-item .fw-bold {
            font-size: 0.75rem;
        }
        .timeline-item small {
            font-size: 0.6rem;
        }
        .timeline-item .text-muted {
            font-size: 0.6rem;
        }
    }

    /* Mobile */
    @media (max-width: 576px) {
        .container-fluid {
            padding-left: 6px !important;
            padding-right: 6px !important;
        }
        
        /* En-tête */
        .breadcrumb {
            font-size: 0.55rem !important;
        }
        .breadcrumb-item a {
            font-size: 0.55rem !important;
        }
        .h1, .h3 {
            font-size: 0.95rem !important;
        }
        
        /* Cards */
        .card {
            border-radius: 0.75rem !important;
        }
        .card-header {
            padding: 0.4rem 0.6rem !important;
        }
        .card-body {
            padding: 0.4rem 0.6rem !important;
        }
        
        /* Info cards */
        .info-card {
            padding: 0.4rem 0.5rem !important;
            border-radius: 0.5rem !important;
            margin-bottom: 0.4rem !important;
        }
        .info-card .fw-bold {
            font-size: 0.7rem !important;
        }
        .info-card .text-muted {
            font-size: 0.5rem !important;
        }
        .info-card .small {
            font-size: 0.55rem !important;
        }
        
        /* Status badge */
        .status-badge {
            font-size: 0.55rem !important;
            padding: 0.15rem 0.4rem !important;
        }
        
        /* Company */
        .company-logo {
            width: 50px !important;
            height: 50px !important;
        }
        .company-initials {
            width: 50px !important;
            height: 50px !important;
            font-size: 1.2rem !important;
        }
        .company-initials.mx-auto {
            margin: 0 auto !important;
        }
        
        /* Timeline */
        .timeline {
            padding-left: 1rem !important;
        }
        .timeline::before {
            left: 0.3rem !important;
        }
        .timeline-item {
            padding-bottom: 0.75rem !important;
        }
        .timeline-item::before {
            left: -1rem !important;
            width: 0.6rem !important;
            height: 0.6rem !important;
        }
        .timeline-item .fw-bold {
            font-size: 0.65rem !important;
        }
        .timeline-item small {
            font-size: 0.5rem !important;
        }
        .timeline-item .text-muted {
            font-size: 0.5rem !important;
        }
        
        /* Actions */
        .action-buttons .btn {
            font-size: 0.6rem !important;
            padding: 0.15rem 0.3rem !important;
        }
        .payment-link {
            padding: 0.4rem !important;
        }
        .payment-link .fw-bold {
            font-size: 0.6rem !important;
        }
        .payment-link .input-group {
            flex-wrap: wrap !important;
        }
        .payment-link .input-group input {
            font-size: 0.5rem !important;
            padding: 0.1rem 0.2rem !important;
            width: 100% !important;
            border-radius: 4px !important;
        }
        .payment-link .input-group .btn {
            font-size: 0.5rem !important;
            padding: 0.1rem 0.2rem !important;
            width: 100% !important;
            border-radius: 4px !important;
            margin-top: 0.2rem !important;
        }
        .payment-link .d-flex.gap-1.gap-sm-2 {
            flex-direction: column !important;
        }
        .payment-link .d-flex.gap-1.gap-sm-2 .btn {
            width: 100% !important;
        }
        
        /* Upload form */
        .upload-form {
            padding: 0.4rem !important;
        }
        .upload-form .form-label {
            font-size: 0.55rem !important;
        }
        .upload-form .form-control {
            font-size: 0.55rem !important;
            padding: 0.1rem 0.3rem !important;
            border-radius: 4px !important;
        }
        .upload-form .btn {
            font-size: 0.6rem !important;
            padding: 0.15rem 0.3rem !important;
        }
        
        /* Report card */
        .report-card {
            padding: 0.4rem !important;
        }
        .report-card .d-flex {
            flex-direction: column !important;
            gap: 0.3rem !important;
        }
        .report-card .btn-group-vertical {
            flex-direction: row !important;
            width: 100% !important;
        }
        .report-card .btn-group-vertical .btn {
            flex: 1 !important;
            font-size: 0.5rem !important;
            padding: 0.1rem 0.2rem !important;
        }
        .report-card strong {
            font-size: 0.6rem !important;
        }
        .report-card .small {
            font-size: 0.5rem !important;
        }
        .report-card .fa-2x {
            font-size: 1.5rem !important;
        }
        
        /* Alert */
        .alert {
            font-size: 0.55rem !important;
            padding: 0.3rem 0.5rem !important;
            border-radius: 0.5rem !important;
        }
        .alert .btn {
            font-size: 0.55rem !important;
            padding: 0.1rem 0.3rem !important;
        }
        
        /* Progress */
        .progress {
            height: 4px !important;
        }
        
        /* Modales */
        .modal-dialog {
            margin: 0.3rem !important;
        }
        .modal-content {
            border-radius: 10px !important;
        }
        .modal-body {
            padding: 0.5rem !important;
        }
        .modal-footer {
            padding: 0.4rem !important;
            flex-wrap: wrap !important;
        }
        .modal-footer .btn {
            font-size: 0.6rem !important;
            padding: 0.15rem 0.3rem !important;
            width: 100% !important;
        }
        .modal-footer .btn:first-child {
            order: 2 !important;
        }
        .modal-footer .btn:last-child {
            order: 1 !important;
        }
        .modal-header {
            padding: 0.4rem 0.6rem !important;
        }
        .modal-title {
            font-size: 0.8rem !important;
        }
        .modal-body p {
            font-size: 0.65rem !important;
        }
        .modal-body .small {
            font-size: 0.55rem !important;
        }
        .modal-icon {
            width: 45px !important;
            height: 45px !important;
        }
        .modal-icon i {
            font-size: 1.5rem !important;
        }
        
        /* Grid */
        .row.g-2.g-md-4 {
            --bs-gutter-y: 0.25rem !important;
            --bs-gutter-x: 0.25rem !important;
        }
        
        /* Désactiver hover sur mobile */
        .card:hover {
            box-shadow: none !important;
        }
        .info-card:hover {
            transform: none !important;
        }
    }

    /* Très petits écrans */
    @media (max-width: 400px) {
        .h1, .h3 {
            font-size: 0.85rem !important;
        }
        .status-badge {
            font-size: 0.5rem !important;
            padding: 0.1rem 0.3rem !important;
        }
        .info-card .fw-bold {
            font-size: 0.6rem !important;
        }
        .info-card .text-muted {
            font-size: 0.45rem !important;
        }
        .company-logo {
            width: 40px !important;
            height: 40px !important;
        }
        .company-initials {
            width: 40px !important;
            height: 40px !important;
            font-size: 1rem !important;
        }
        .modal-footer .btn {
            font-size: 0.55rem !important;
        }
        .btn {
            font-size: 0.55rem !important;
        }
        .report-card .btn {
            font-size: 0.45rem !important;
        }
    }
</style>
";
        yield from [];
    }

    // line 504
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 505
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
        // line 515
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_analysis_request_index");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-chart-line me-1\"></i> Analyses
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active small\">";
        // line 519
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "requestNumber", [], "any", false, false, false, 519), "html", null, true);
        yield "</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-chart-line me-2 text-primary\"></i>
                <span class=\"d-none d-sm-inline\">Analyse #";
        // line 524
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "requestNumber", [], "any", false, false, false, 524), "html", null, true);
        yield "</span>
                <span class=\"d-inline d-sm-none\">#";
        // line 525
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "requestNumber", [], "any", false, false, false, 525), "html", null, true);
        yield "</span>
            </h1>
        </div>
        <div class=\"action-buttons w-100 w-sm-auto\">
            <a href=\"";
        // line 529
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_analysis_request_index");
        yield "\" class=\"btn btn-outline-secondary btn-sm w-100 w-sm-auto\">
                <i class=\"fas fa-arrow-left me-1\"></i> <span class=\"d-none d-sm-inline\">Retour</span>
            </a>
        </div>
    </div>

    <!-- ==========================================
         CONTENU PRINCIPAL
    ========================================== -->
    <div class=\"row g-2 g-md-4\">

        <!-- Colonne gauche -->
        <div class=\"col-12 col-xl-7\">

            <!-- Informations générales -->
            <div class=\"card border-0 shadow-sm mb-3 mb-md-4\">
                <div class=\"card-header bg-white py-2 py-md-3\">
                    <h5 class=\"mb-0 fw-semibold fs-6 fs-md-5\">
                        <i class=\"fas fa-info-circle me-2 text-primary\"></i>
                        <span class=\"d-none d-sm-inline\">Informations générales</span>
                        <span class=\"d-inline d-sm-none\">Informations</span>
                    </h5>
                </div>
                <div class=\"card-body p-2 p-md-3\">
                    <div class=\"row g-1 g-md-3\">
                        <!-- N° Demande -->
                        <div class=\"col-6 col-md-6\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.55rem;\">N° Demande</small>
                                <div class=\"fw-bold fs-6 fs-md-5\">";
        // line 558
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "requestNumber", [], "any", false, false, false, 558), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                        <!-- Date de création -->
                        <div class=\"col-6 col-md-6\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.55rem;\">Date de création</small>
                                <div class=\"fw-bold small\">";
        // line 565
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "createdAt", [], "any", false, false, false, 565), "d/m/Y H:i:s"), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                        <!-- Type d'analyse -->
                        <div class=\"col-6 col-md-6\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.55rem;\">Type d'analyse</small>
                                <div class=\"fw-bold small\">";
        // line 572
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "typeLabel", [], "any", false, false, false, 572), "html", null, true);
        yield "</div>
                                <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">";
        // line 573
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "amountFormatted", [], "any", false, false, false, 573), "html", null, true);
        yield "</small>
                            </div>
                        </div>
                        <!-- Statut -->
                        <div class=\"col-6 col-md-6\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.55rem;\">Statut</small>
                                <div>
                                    <span class=\"badge ";
        // line 581
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "statusBadgeClass", [], "any", false, false, false, 581), "html", null, true);
        yield " status-badge\" style=\"font-size:0.6rem; padding:0.2rem 0.5rem;\">
                                        <i class=\"fas 
                                            ";
        // line 583
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "status", [], "any", false, false, false, 583) == "completed")) {
            yield "fa-check-circle
                                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 584
($context["request"] ?? null), "status", [], "any", false, false, false, 584) == "pending")) {
            yield "fa-clock
                                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 585
($context["request"] ?? null), "status", [], "any", false, false, false, 585) == "processing")) {
            yield "fa-spinner fa-pulse
                                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 586
($context["request"] ?? null), "status", [], "any", false, false, false, 586) == "paid")) {
            yield "fa-credit-card
                                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 587
($context["request"] ?? null), "status", [], "any", false, false, false, 587) == "failed")) {
            yield "fa-times-circle
                                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 588
($context["request"] ?? null), "status", [], "any", false, false, false, 588) == "expired")) {
            yield "fa-hourglass-end
                                            ";
        }
        // line 589
        yield " me-1\">
                                        </i>
                                        ";
        // line 591
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "statusLabel", [], "any", false, false, false, 591), 0, 12), "html", null, true);
        yield "
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Période analysée -->
                        <div class=\"col-12\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.55rem;\">Période analysée</small>
                                <div class=\"fw-bold small\">";
        // line 600
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "periodStart", [], "any", false, false, false, 600), "d/m/Y"), "html", null, true);
        yield " au ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "periodEnd", [], "any", false, false, false, 600), "d/m/Y"), "html", null, true);
        yield "</div>
                                ";
        // line 601
        $context["daysCount"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "periodStart", [], "any", false, false, false, 601), "diff", [CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "periodEnd", [], "any", false, false, false, 601)], "method", false, false, false, 601), "days", [], "any", false, false, false, 601);
        // line 602
        yield "                                <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["daysCount"] ?? null), "html", null, true);
        yield " jours de données</small>
                            </div>
                        </div>
                        ";
        // line 605
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "notes", [], "any", false, false, false, 605)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 606
            yield "                        <div class=\"col-12\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.55rem;\">Notes / Instructions</small>
                                <div class=\"mt-1 small\">";
            // line 609
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "notes", [], "any", false, false, false, 609), "html", null, true));
            yield "</div>
                            </div>
                        </div>
                        ";
        }
        // line 613
        yield "                    </div>
                </div>
            </div>

            <!-- Chronologie -->
            <div class=\"card border-0 shadow-sm mb-3 mb-md-4\">
                <div class=\"card-header bg-white py-2 py-md-3\">
                    <h5 class=\"mb-0 fw-semibold fs-6 fs-md-5\">
                        <i class=\"fas fa-history me-2 text-primary\"></i>
                        <span class=\"d-none d-sm-inline\">Chronologie</span>
                        <span class=\"d-inline d-sm-none\">Historique</span>
                    </h5>
                </div>
                <div class=\"card-body p-2 p-md-3\">
                    <div class=\"timeline\">
                        <!-- Demande créée -->
                        <div class=\"timeline-item completed\">
                            <div class=\"fw-bold small\">Demande créée</div>
                            <small class=\"text-muted d-block\" style=\"font-size:0.55rem;\">";
        // line 631
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "createdAt", [], "any", false, false, false, 631), "d/m/Y H:i:s"), "html", null, true);
        yield "</small>
                            <div class=\"text-muted small\" style=\"font-size:0.5rem;\">Demande enregistrée avec succès</div>
                        </div>
                        
                        <!-- Paiement -->
                        ";
        // line 636
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "paidAt", [], "any", false, false, false, 636)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 637
            yield "                        <div class=\"timeline-item completed\">
                            <div class=\"fw-bold small\">Paiement reçu</div>
                            <small class=\"text-muted d-block\" style=\"font-size:0.55rem;\">";
            // line 639
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "paidAt", [], "any", false, false, false, 639), "d/m/Y H:i:s"), "html", null, true);
            yield "</small>
                            <div class=\"text-muted small\" style=\"font-size:0.5rem;\">Transaction #";
            // line 640
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "paymentTransactionId", [], "any", false, false, false, 640), "html", null, true);
            yield "</div>
                        </div>
                        ";
        } else {
            // line 643
            yield "                        <div class=\"timeline-item pending\">
                            <div class=\"fw-bold small\">En attente de paiement</div>
                            <small class=\"text-muted d-block\" style=\"font-size:0.55rem;\">Expire le ";
            // line 645
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "expiresAt", [], "any", false, false, false, 645), "d/m/Y"), "html", null, true);
            yield "</small>
                            <div class=\"text-muted small\" style=\"font-size:0.5rem;\">Générer le lien de paiement</div>
                        </div>
                        ";
        }
        // line 649
        yield "                        
                        <!-- Export brut -->
                        ";
        // line 651
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "rawExportPath", [], "any", false, false, false, 651)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 652
            yield "                        <div class=\"timeline-item completed\">
                            <div class=\"fw-bold small\">Données brutes exportées</div>
                            <small class=\"text-muted d-block\" style=\"font-size:0.55rem;\">";
            // line 654
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "rawExportedAt", [], "any", false, false, false, 654)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "rawExportedAt", [], "any", false, false, false, 654), "d/m/Y H:i:s"), "html", null, true)) : ("Exporté"));
            yield "</small>
                            <div class=\"text-muted small\" style=\"font-size:0.5rem;\">Fichier ZIP disponible</div>
                        </div>
                        ";
        }
        // line 658
        yield "                        
                        <!-- Rapport final -->
                        ";
        // line 660
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "finalReportUploadedAt", [], "any", false, false, false, 660)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 661
            yield "                        <div class=\"timeline-item completed\">
                            <div class=\"fw-bold small\">Rapport final uploadé</div>
                            <small class=\"text-muted d-block\" style=\"font-size:0.55rem;\">";
            // line 663
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "finalReportUploadedAt", [], "any", false, false, false, 663), "d/m/Y H:i:s"), "html", null, true);
            yield "</small>
                            <div class=\"text-muted small\" style=\"font-size:0.5rem;\">Type: ";
            // line 664
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "finalReportType", [], "any", false, false, false, 664)), "html", null, true);
            yield "</div>
                        </div>
                        ";
        }
        // line 667
        yield "                        
                        <!-- Expiré -->
                        ";
        // line 669
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "status", [], "any", false, false, false, 669) == "expired")) {
            // line 670
            yield "                        <div class=\"timeline-item failed\">
                            <div class=\"fw-bold small\">Demande expirée</div>
                            <small class=\"text-muted d-block\" style=\"font-size:0.55rem;\">";
            // line 672
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate($this->extensions['Twig\Extension\CoreExtension']->modifyDate(CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "createdAt", [], "any", false, false, false, 672), "+3 days"), "d/m/Y"), "html", null, true);
            yield "</small>
                            <div class=\"text-muted small\" style=\"font-size:0.5rem;\">Délai de paiement dépassé</div>
                        </div>
                        ";
        }
        // line 676
        yield "                        
                        <!-- Échec -->
                        ";
        // line 678
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "status", [], "any", false, false, false, 678) == "failed")) {
            // line 679
            yield "                        <div class=\"timeline-item failed\">
                            <div class=\"fw-bold small\">Échec de l'analyse</div>
                            <small class=\"text-muted d-block\" style=\"font-size:0.55rem;\">";
            // line 681
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "updatedAt", [], "any", false, false, false, 681)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "updatedAt", [], "any", false, false, false, 681), "d/m/Y H:i:s"), "html", null, true)) : ("Erreur"));
            yield "</small>
                            <div class=\"text-muted small\" style=\"font-size:0.5rem;\">Une erreur est survenue</div>
                        </div>
                        ";
        }
        // line 685
        yield "                    </div>
                </div>
            </div>
        </div>

        <!-- Colonne droite -->
        <div class=\"col-12 col-xl-5\">

            <!-- Entreprise -->
            <div class=\"card border-0 shadow-sm mb-3 mb-md-4\">
                <div class=\"card-header bg-white py-2 py-md-3\">
                    <h5 class=\"mb-0 fw-semibold fs-6 fs-md-5\">
                        <i class=\"fas fa-building me-2 text-primary\"></i>
                        Entreprise
                    </h5>
                </div>
                <div class=\"card-body p-2 p-md-3\">
                    <div class=\"text-center mb-2 mb-md-3\">
                        ";
        // line 703
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "company", [], "any", false, false, false, 703), "logo", [], "any", false, false, false, 703)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 704
            yield "                            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/logos/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "company", [], "any", false, false, false, 704), "logo", [], "any", false, false, false, 704))), "html", null, true);
            yield "\" 
                                 alt=\"";
            // line 705
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "company", [], "any", false, false, false, 705), "companyName", [], "any", false, false, false, 705), "html", null, true);
            yield "\" 
                                 class=\"company-logo\" 
                                 onerror=\"this.onerror=null; this.parentElement.innerHTML='<div class=\\'company-initials mx-auto\\'>";
            // line 707
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "company", [], "any", false, false, false, 707), "companyName", [], "any", false, false, false, 707), 0, 2)), "html", null, true);
            yield "</div>';\">
                        ";
        } else {
            // line 709
            yield "                            <div class=\"company-initials mx-auto\">
                                ";
            // line 710
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "company", [], "any", false, false, false, 710), "companyName", [], "any", false, false, false, 710), 0, 2)), "html", null, true);
            yield "
                            </div>
                        ";
        }
        // line 713
        yield "                    </div>
                    <div class=\"text-center mb-2 mb-md-3\">
                        <h5 class=\"mb-0 fs-6 fs-md-5\">";
        // line 715
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "company", [], "any", false, false, false, 715), "companyName", [], "any", false, false, false, 715), "html", null, true);
        yield "</h5>
                        <small class=\"text-muted d-block\" style=\"font-size:0.55rem;\">";
        // line 716
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "company", [], "any", false, false, false, 716), "subscriptionNumber", [], "any", false, false, false, 716), "html", null, true);
        yield "</small>
                    </div>
                    <div class=\"row g-1 g-md-2\">
                        <div class=\"col-12\">
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\" style=\"font-size:0.55rem;\">Type</span>
                                <span style=\"font-size:0.6rem;\">";
        // line 722
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "company", [], "any", false, false, false, 722), "type", [], "any", false, false, false, 722) == "restaurant")) ? ("🍽️ Restaurant") : ("🛒 Commerce"));
        yield "</span>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\" style=\"font-size:0.55rem;\">Email</span>
                                <span style=\"font-size:0.6rem;\">";
        // line 728
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "company", [], "any", false, false, false, 728), "email", [], "any", false, false, false, 728), "html", null, true);
        yield "</span>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\" style=\"font-size:0.55rem;\">Téléphone</span>
                                <span style=\"font-size:0.6rem;\">";
        // line 734
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "company", [], "any", false, true, false, 734), "phone", [], "any", true, true, false, 734)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "company", [], "any", false, false, false, 734), "phone", [], "any", false, false, false, 734), "—")) : ("—")), "html", null, true);
        yield "</span>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\" style=\"font-size:0.55rem;\">Date création</span>
                                <span style=\"font-size:0.6rem;\">";
        // line 740
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "company", [], "any", false, false, false, 740), "createdAt", [], "any", false, false, false, 740), "d/m/Y"), "html", null, true);
        yield "</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"mt-2 mt-md-3\">
                        <a href=\"";
        // line 745
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_hma_service_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "company", [], "any", false, false, false, 745), "id", [], "any", false, false, false, 745)]), "html", null, true);
        yield "\" class=\"btn btn-sm btn-outline-primary w-100\" style=\"font-size:0.6rem; padding:0.15rem 0.3rem;\">
                            <i class=\"fas fa-eye me-1\"></i> <span class=\"d-none d-sm-inline\">Voir les détails</span>
                            <span class=\"d-inline d-sm-none\">Détails</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- ========================================== -->
            <!-- ACTIONS SELON LE STATUT -->
            <!-- ========================================== -->
            <div class=\"card border-0 shadow-sm mb-3 mb-md-4\">
                <div class=\"card-header bg-white py-2 py-md-3\">
                    <h5 class=\"mb-0 fw-semibold fs-6 fs-md-5\">
                        <i class=\"fas fa-cog me-2 text-primary\"></i>
                        Actions
                    </h5>
                </div>
                <div class=\"card-body p-2 p-md-3\">

                    ";
        // line 766
        yield "                    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "status", [], "any", false, false, false, 766) == "pending")) {
            // line 767
            yield "                        <div class=\"payment-link mb-2\">
                            <div class=\"fw-bold small mb-1\">🔗 Lien de paiement</div>
                            <div class=\"input-group input-group-sm mb-2\">
                                <input type=\"text\" id=\"paymentLinkInput\" class=\"form-control\" readonly style=\"font-size:0.6rem; padding:0.15rem 0.3rem; border-radius:4px;\">
                                <button class=\"btn btn-sm btn-primary\" id=\"copyPaymentLinkBtn\" title=\"Copier le lien\" style=\"font-size:0.55rem; padding:0.15rem 0.3rem; border-radius:4px;\">
                                    <i class=\"fas fa-copy\"></i>
                                </button>
                            </div>
                            <div class=\"d-flex flex-column flex-sm-row gap-1 gap-sm-2\">
                                <button class=\"btn btn-sm btn-success w-100\" id=\"generatePaymentLinkBtn\" style=\"font-size:0.55rem; padding:0.15rem 0.3rem;\">
                                    <i class=\"fas fa-credit-card me-1\"></i> Générer le lien
                                </button>
                                <button class=\"btn btn-sm btn-info w-100\" id=\"sendEmailLinkBtn\" style=\"display: none; font-size:0.55rem; padding:0.15rem 0.3rem;\">
                                    <i class=\"fas fa-envelope me-1\"></i> Envoyer par email
                                </button>
                            </div>
                        </div>
                        <div class=\"alert alert-warning small py-1 px-2\" style=\"font-size:0.55rem;\">
                            <i class=\"fas fa-exclamation-triangle me-1\"></i>
                            Expire le ";
            // line 786
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "expiresAt", [], "any", false, false, false, 786), "d/m/Y"), "html", null, true);
            yield ".
                        </div>
                    ";
        }
        // line 789
        yield "
                    ";
        // line 791
        yield "                    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "status", [], "any", false, false, false, 791) == "paid")) {
            // line 792
            yield "                        <div class=\"alert alert-info py-1 px-2\" style=\"font-size:0.55rem;\">
                            <i class=\"fas fa-info-circle me-1\"></i>
                            Paiement confirmé. Exporter les données brutes.
                        </div>
                        <button type=\"button\" class=\"btn btn-primary btn-sm w-100\" data-bs-toggle=\"modal\" data-bs-target=\"#confirmGenerateRawModal\" style=\"font-size:0.6rem; padding:0.2rem 0.4rem;\">
                            <i class=\"fas fa-database me-1\"></i> Exporter les données brutes (ZIP)
                        </button>
                    ";
        }
        // line 800
        yield "
                    ";
        // line 802
        yield "                    ";
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "status", [], "any", false, false, false, 802) == "processing") && CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "rawExportPath", [], "any", false, false, false, 802))) {
            // line 803
            yield "                        <div class=\"alert alert-success py-1 px-2\" style=\"font-size:0.55rem;\">
                            <i class=\"fas fa-check-circle me-1\"></i>
                            Données brutes prêtes.
                        </div>
                        
                        <a href=\"";
            // line 808
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_analysis_download_raw", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "id", [], "any", false, false, false, 808)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary btn-sm w-100 mb-2\" style=\"font-size:0.6rem; padding:0.2rem 0.4rem;\">
                            <i class=\"fas fa-download me-1\"></i> Télécharger les données brutes (ZIP)
                        </a>
                        
                        <hr class=\"my-2\">
                        
                        <div class=\"fw-bold small mb-2\">📤 Uploader le rapport final</div>
                        <form method=\"post\" action=\"";
            // line 815
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_analysis_upload_report", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "id", [], "any", false, false, false, 815)]), "html", null, true);
            yield "\" enctype=\"multipart/form-data\" class=\"upload-form p-2\">
                            <div class=\"mb-2\">
                                <label class=\"form-label small\" style=\"font-size:0.55rem;\">Sélectionner le fichier</label>
                                <input type=\"file\" name=\"report\" class=\"form-control form-control-sm\" accept=\".xlsx,.xls,.pbix,.pdf,.zip\" required style=\"font-size:0.55rem; padding:0.1rem 0.3rem; border-radius:4px;\">
                                <small class=\"text-muted d-block mt-1\" style=\"font-size:0.45rem;\">Formats: Excel, PDF, ZIP</small>
                            </div>
                            <button type=\"submit\" class=\"btn btn-success btn-sm w-100\" style=\"font-size:0.6rem; padding:0.2rem 0.4rem;\">
                                <i class=\"fas fa-cloud-upload-alt me-1\"></i> Uploader le rapport final
                            </button>
                        </form>
                    ";
        }
        // line 826
        yield "
                    ";
        // line 828
        yield "                    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "status", [], "any", false, false, false, 828) == "completed")) {
            // line 829
            yield "                        <div class=\"report-card p-2\">
                            <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-2\">
                                <div>
                                    <i class=\"fas fa-file-alt fa-2x me-2\"></i>
                                    <strong class=\"small\">Rapport final</strong>
                                    <div class=\"small\" style=\"font-size:0.5rem;\">";
            // line 834
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "finalReportFilename", [], "any", false, false, false, 834), "html", null, true);
            yield "</div>
                                    <div class=\"small opacity-75\" style=\"font-size:0.45rem;\">Uploadé le ";
            // line 835
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "finalReportUploadedAt", [], "any", false, false, false, 835), "d/m/Y H:i"), "html", null, true);
            yield "</div>
                                </div>
                                <div class=\"d-flex flex-wrap gap-1 w-100 w-sm-auto\">
                                    <a href=\"";
            // line 838
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_download_final", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "id", [], "any", false, false, false, 838)]), "html", null, true);
            yield "\" class=\"btn btn-sm flex-grow-1\" style=\"font-size:0.5rem; padding:0.1rem 0.2rem;\">
                                        <i class=\"fas fa-download\"></i> Télécharger
                                    </a>
                                    <button type=\"button\" class=\"btn btn-sm flex-grow-1\" data-bs-toggle=\"modal\" data-bs-target=\"#confirmReplaceModal\" style=\"font-size:0.5rem; padding:0.1rem 0.2rem;\">
                                        <i class=\"fas fa-sync-alt\"></i> Remplacer
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <hr class=\"my-2\">
                        
                        <div class=\"alert alert-success py-1 px-2\" style=\"font-size:0.55rem;\">
                            <i class=\"fas fa-check-circle me-1\"></i>
                            L'entreprise peut télécharger son rapport.
                        </div>
                        
                        <a href=\"";
            // line 855
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_download_raw", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "id", [], "any", false, false, false, 855)]), "html", null, true);
            yield "\" class=\"btn btn-outline-secondary btn-sm w-100\" style=\"font-size:0.6rem; padding:0.2rem 0.4rem;\">
                            <i class=\"fas fa-database me-1\"></i> Télécharger les données brutes
                        </a>
                    ";
        }
        // line 859
        yield "
                    ";
        // line 861
        yield "                    ";
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "status", [], "any", false, false, false, 861) == "processing") &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "rawExportPath", [], "any", false, false, false, 861))) {
            // line 862
            yield "                        <div class=\"alert alert-warning py-1 px-2\" style=\"font-size:0.55rem;\">
                            <i class=\"fas fa-spinner fa-pulse me-1\"></i>
                            Génération en cours...
                        </div>
                        <div class=\"progress mb-2\" style=\"height:4px;\">
                            <div class=\"progress-bar progress-bar-striped progress-bar-animated\" style=\"width: 100%\"></div>
                        </div>
                        <button type=\"button\" class=\"btn btn-danger btn-sm w-100\" data-bs-toggle=\"modal\" data-bs-target=\"#confirmCancelModal\" style=\"font-size:0.6rem; padding:0.2rem 0.4rem;\">
                            <i class=\"fas fa-ban me-1\"></i> Annuler
                        </button>
                    ";
        }
        // line 873
        yield "
                    ";
        // line 875
        yield "                    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "status", [], "any", false, false, false, 875) == "failed")) {
            // line 876
            yield "                        <div class=\"alert alert-danger py-1 px-2\" style=\"font-size:0.55rem;\">
                            <i class=\"fas fa-exclamation-circle me-1\"></i>
                            Une erreur est survenue.
                        </div>
                        <button type=\"button\" class=\"btn btn-warning btn-sm w-100 mb-1\" data-bs-toggle=\"modal\" data-bs-target=\"#confirmRetryModal\" style=\"font-size:0.6rem; padding:0.2rem 0.4rem;\">
                            <i class=\"fas fa-sync me-1\"></i> Réessayer
                        </button>
                        <button type=\"button\" class=\"btn btn-outline-danger btn-sm w-100\" data-bs-toggle=\"modal\" data-bs-target=\"#confirmForcePaidModal\" style=\"font-size:0.6rem; padding:0.2rem 0.4rem;\">
                            <i class=\"fas fa-exclamation-triangle me-1\"></i> Forcer à \"Payé\"
                        </button>
                    ";
        }
        // line 887
        yield "
                    ";
        // line 889
        yield "                    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "status", [], "any", false, false, false, 889) == "expired")) {
            // line 890
            yield "                        <div class=\"alert alert-secondary py-1 px-2\" style=\"font-size:0.55rem;\">
                            <i class=\"fas fa-hourglass-end me-1\"></i>
                            Demande expirée.
                        </div>
                        <button type=\"button\" class=\"btn btn-outline-primary btn-sm w-100\" data-bs-toggle=\"modal\" data-bs-target=\"#confirmRenewModal\" style=\"font-size:0.6rem; padding:0.2rem 0.4rem;\">
                            <i class=\"fas fa-redo me-1\"></i> Relancer la demande
                        </button>
                    ";
        }
        // line 898
        yield "
                </div>
            </div>

            <!-- Détails du paiement -->
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-2 py-md-3\">
                    <h5 class=\"mb-0 fw-semibold fs-6 fs-md-5\">
                        <i class=\"fas fa-credit-card me-2 text-primary\"></i>
                        <span class=\"d-none d-sm-inline\">Détails du paiement</span>
                        <span class=\"d-inline d-sm-none\">Paiement</span>
                    </h5>
                </div>
                <div class=\"card-body p-2 p-md-3\">
                    ";
        // line 912
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "paymentTransactionId", [], "any", false, false, false, 912)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 913
            yield "                    <div class=\"row g-1 g-md-2\">
                        <div class=\"col-12\">
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\" style=\"font-size:0.55rem;\">ID Transaction</span>
                                <span class=\"fw-bold small\">";
            // line 917
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "paymentTransactionId", [], "any", false, false, false, 917), "html", null, true);
            yield "</span>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\" style=\"font-size:0.55rem;\">Date de paiement</span>
                                <span class=\"small\">";
            // line 923
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "paidAt", [], "any", false, false, false, 923)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "paidAt", [], "any", false, false, false, 923), "d/m/Y H:i:s"), "html", null, true)) : ("—"));
            yield "</span>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\" style=\"font-size:0.55rem;\">Montant payé</span>
                                <span class=\"fw-bold text-success small\">";
            // line 929
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "amountFormatted", [], "any", false, false, false, 929), "html", null, true);
            yield "</span>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\" style=\"font-size:0.55rem;\">Statut</span>
                                <span>
                                    ";
            // line 936
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "paidAt", [], "any", false, false, false, 936)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 937
                yield "                                        <span class=\"badge bg-success\" style=\"font-size:0.5rem;\">Payé</span>
                                    ";
            } else {
                // line 939
                yield "                                        <span class=\"badge bg-warning\" style=\"font-size:0.5rem;\">En attente</span>
                                    ";
            }
            // line 941
            yield "                                </span>
                            </div>
                        </div>
                    </div>
                    ";
        } else {
            // line 946
            yield "                    <div class=\"alert alert-info mb-0 py-1 px-2\" style=\"font-size:0.55rem;\">
                        <i class=\"fas fa-info-circle me-1\"></i>
                        Aucun paiement enregistré.
                    </div>
                    ";
        }
        // line 951
        yield "                </div>
            </div>

        </div>
    </div>
</div>

<!-- ========================================== -->
<!-- MODALES -->
<!-- ========================================== -->

";
        // line 963
        yield "<div class=\"modal fade\" id=\"confirmGenerateRawModal\" tabindex=\"-1\" data-bs-backdrop=\"static\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-primary text-white py-2\">
                <h5 class=\"modal-title fs-6\">
                    <i class=\"fas fa-database me-2\"></i>
                    Export des données brutes
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-3\">
                <div class=\"modal-icon bg-primary bg-opacity-10 mx-auto\">
                    <i class=\"fas fa-chart-line fa-3x text-primary\"></i>
                </div>
                <p class=\"mb-2 small\">
                    <strong>Confirmez-vous l'export des données brutes ?</strong>
                </p>
                <div class=\"alert alert-info text-start small py-1 px-2\" style=\"font-size:0.55rem;\">
                    <i class=\"fas fa-info-circle me-2\"></i>
                    Cette opération peut prendre plusieurs minutes.
                </div>
            </div>
            <div class=\"modal-footer justify-content-center py-2\">
                <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-primary btn-sm\" id=\"confirmGenerateRawBtn\">
                    <i class=\"fas fa-check me-2\"></i> Confirmer
                </button>
            </div>
        </div>
    </div>
</div>

";
        // line 996
        yield "<div class=\"modal fade\" id=\"confirmReplaceModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <form method=\"post\" action=\"";
        // line 999
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_replace_report", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "id", [], "any", false, false, false, 999)]), "html", null, true);
        yield "\" enctype=\"multipart/form-data\" id=\"replaceReportFormModal\">
                <div class=\"modal-header bg-warning py-2\">
                    <h5 class=\"modal-title fs-6\">
                        <i class=\"fas fa-sync-alt me-2\"></i>
                        Remplacer le rapport
                    </h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                </div>
                <div class=\"modal-body py-3\">
                    <p class=\"small\">Voulez-vous remplacer le rapport actuel ?</p>
                    <div class=\"alert alert-warning small py-1 px-2\" style=\"font-size:0.55rem;\">
                        <i class=\"fas fa-exclamation-triangle me-2\"></i>
                        L'ancien fichier sera supprimé.
                    </div>
                    <div class=\"mb-2\">
                        <label class=\"form-label small\" style=\"font-size:0.55rem;\">Nouveau fichier</label>
                        <input type=\"file\" name=\"report\" class=\"form-control form-control-sm\" accept=\".xlsx,.xls,.pbix,.pdf,.zip\" required style=\"font-size:0.55rem; padding:0.1rem 0.3rem; border-radius:4px;\">
                        <small class=\"text-muted d-block mt-1\" style=\"font-size:0.45rem;\">Formats: Excel, Power BI, PDF, ZIP</small>
                    </div>
                </div>
                <div class=\"modal-footer py-2\">
                    <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-bs-dismiss=\"modal\">Annuler</button>
                    <button type=\"submit\" class=\"btn btn-warning btn-sm\">
                        <i class=\"fas fa-sync-alt me-1\"></i> Remplacer
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

";
        // line 1031
        yield "<div class=\"modal fade\" id=\"confirmRetryModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-warning py-2\">
                <h5 class=\"modal-title fs-6\">Réessayer</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body py-3\">
                <p class=\"small\">Voulez-vous réessayer de générer l'analyse ?</p>
            </div>
            <div class=\"modal-footer py-2\">
                <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-warning btn-sm\" id=\"confirmRetryBtn\">Réessayer</button>
            </div>
        </div>
    </div>
</div>

";
        // line 1050
        yield "<div class=\"modal fade\" id=\"confirmForcePaidModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white py-2\">
                <h5 class=\"modal-title fs-6\">Forcer à \"Payé\"</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body py-3\">
                <p class=\"small\">Cette action est irréversible.</p>
                <div class=\"alert alert-danger small py-1 px-2\" style=\"font-size:0.55rem;\">Assurez-vous que le paiement a été effectué.</div>
            </div>
            <div class=\"modal-footer py-2\">
                <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-danger btn-sm\" id=\"confirmForcePaidBtn\">Confirmer</button>
            </div>
        </div>
    </div>
</div>

";
        // line 1070
        yield "<div class=\"modal fade\" id=\"confirmCancelModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white py-2\">
                <h5 class=\"modal-title fs-6\">Annuler la génération</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body py-3\">
                <p class=\"small\">Voulez-vous annuler la génération ?</p>
            </div>
            <div class=\"modal-footer py-2\">
                <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-bs-dismiss=\"modal\">Non</button>
                <button type=\"button\" class=\"btn btn-danger btn-sm\" id=\"confirmCancelBtn\">Oui, annuler</button>
            </div>
        </div>
    </div>
</div>

";
        // line 1089
        yield "<div class=\"modal fade\" id=\"confirmRenewModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-primary text-white py-2\">
                <h5 class=\"modal-title fs-6\">Relancer la demande</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body py-3\">
                <p class=\"small\">Voulez-vous relancer cette demande expirée ?</p>
                <div class=\"alert alert-info small py-1 px-2\" style=\"font-size:0.55rem;\">
                    <i class=\"fas fa-info-circle me-2\"></i>
                    La demande sera réactivée avec un nouveau lien.
                </div>
            </div>
            <div class=\"modal-footer py-2\">
                <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-primary btn-sm\" id=\"confirmRenewBtn\">Relancer</button>
            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    // line 1113
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1114
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    const requestId = ";
        // line 1117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "id", [], "any", false, false, false, 1117), "html", null, true);
        yield ";
    
    // ==================== GÉNÉRATION EXPORT BRUT ====================
    const generateRawBtn = document.getElementById('confirmGenerateRawBtn');
    if (generateRawBtn) {
        generateRawBtn.addEventListener('click', function() {
            const form = document.createElement('form');
            form.method = 'POST';
            form.action = '";
        // line 1125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_generate_raw", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "id", [], "any", false, false, false, 1125)]), "html", null, true);
        yield "';
            document.body.appendChild(form);
            generateRawBtn.disabled = true;
            generateRawBtn.innerHTML = '<span class=\"spinner-border spinner-border-sm me-2\"></span> Génération...';
            
            const modal = bootstrap.Modal.getInstance(document.getElementById('confirmGenerateRawModal'));
            if (modal) modal.hide();
            form.submit();
        });
    }
    
    // ==================== AUTRES ACTIONS ====================
    const retryBtn = document.getElementById('confirmRetryBtn');
    if (retryBtn) {
        retryBtn.addEventListener('click', function() {
            const form = document.createElement('form');
            form.method = 'POST';
            form.action = '";
        // line 1142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_retry", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "id", [], "any", false, false, false, 1142)]), "html", null, true);
        yield "';
            document.body.appendChild(form);
            form.submit();
        });
    }
    
    const forcePaidBtn = document.getElementById('confirmForcePaidBtn');
    if (forcePaidBtn) {
        forcePaidBtn.addEventListener('click', function() {
            const form = document.createElement('form');
            form.method = 'POST';
            form.action = '";
        // line 1153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_force_to_paid", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "id", [], "any", false, false, false, 1153)]), "html", null, true);
        yield "';
            document.body.appendChild(form);
            form.submit();
        });
    }
    
    const cancelBtn = document.getElementById('confirmCancelBtn');
    if (cancelBtn) {
        cancelBtn.addEventListener('click', function() {
            const form = document.createElement('form');
            form.method = 'POST';
            form.action = '";
        // line 1164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_cancel", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "id", [], "any", false, false, false, 1164)]), "html", null, true);
        yield "';
            document.body.appendChild(form);
            form.submit();
        });
    }
    
    const renewBtn = document.getElementById('confirmRenewBtn');
    if (renewBtn) {
        renewBtn.addEventListener('click', function() {
            // ✅ Utiliser la route super_admin_analysis_force_to_paid si renew n'existe pas
            // Ou ajouter la route super_admin_analysis_renew dans le contrôleur
            const form = document.createElement('form');
            form.method = 'POST';
            form.action = '";
        // line 1177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_force_to_paid", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "id", [], "any", false, false, false, 1177)]), "html", null, true);
        yield "';
            document.body.appendChild(form);
            form.submit();
        });
    }
    
    // ==================== LIEN DE PAIEMENT ====================
    const generateLinkBtn = document.getElementById('generatePaymentLinkBtn');
    const sendEmailBtn = document.getElementById('sendEmailLinkBtn');
    const paymentLinkInput = document.getElementById('paymentLinkInput');
    const copyBtn = document.getElementById('copyPaymentLinkBtn');
    
    if (generateLinkBtn && ";
        // line 1189
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "status", [], "any", false, false, false, 1189) == "pending")) ? ("true") : ("false"));
        yield ") {
        generateLinkBtn.addEventListener('click', async function() {
            generateLinkBtn.disabled = true;
            generateLinkBtn.innerHTML = '<span class=\"spinner-border spinner-border-sm me-1\"></span> Génération...';
            
            try {
                const response = await fetch('";
        // line 1195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_payment_link", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "id", [], "any", false, false, false, 1195)]), "html", null, true);
        yield "');
                const data = await response.json();
                
                if (data.payment_url && data.payment_url !== '#') {
                    paymentLinkInput.value = data.payment_url;
                    generateLinkBtn.innerHTML = '<i class=\"fas fa-check me-1\"></i> Lien généré';
                    sendEmailBtn.style.display = 'block';
                    showToast('success', 'Lien généré avec succès');
                } else {
                    generateLinkBtn.innerHTML = '<i class=\"fas fa-credit-card me-1\"></i> Générer le lien';
                    showToast('error', 'Erreur lors de la génération');
                }
            } catch (error) {
                generateLinkBtn.innerHTML = '<i class=\"fas fa-credit-card me-1\"></i> Générer le lien';
                showToast('error', 'Erreur réseau');
            }
            generateLinkBtn.disabled = false;
        });
    }
    
    if (sendEmailBtn) {
        sendEmailBtn.addEventListener('click', async function() {
            const paymentLink = paymentLinkInput.value;
            if (!paymentLink) {
                showToast('error', 'Générez d\\'abord le lien');
                return;
            }
            
            sendEmailBtn.disabled = true;
            sendEmailBtn.innerHTML = '<span class=\"spinner-border spinner-border-sm me-1\"></span> Envoi...';
            
            try {
                const response = await fetch('";
        // line 1227
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_send_payment_link", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "id", [], "any", false, false, false, 1227)]), "html", null, true);
        yield "', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ payment_link: paymentLink })
                });
                const data = await response.json();
                
                if (data.success) {
                    showToast('success', 'Email envoyé avec succès');
                    sendEmailBtn.innerHTML = '<i class=\"fas fa-check me-1\"></i> Email envoyé';
                } else {
                    showToast('error', data.error || 'Erreur');
                    sendEmailBtn.innerHTML = '<i class=\"fas fa-envelope me-1\"></i> Envoyer par email';
                    sendEmailBtn.disabled = false;
                }
            } catch (error) {
                showToast('error', 'Erreur réseau');
                sendEmailBtn.innerHTML = '<i class=\"fas fa-envelope me-1\"></i> Envoyer par email';
                sendEmailBtn.disabled = false;
            }
        });
    }
    
    if (copyBtn) {
        copyBtn.addEventListener('click', function() {
            paymentLinkInput.select();
            document.execCommand('copy');
            showToast('success', 'Lien copié');
        });
    }
    
    function showToast(type, message) {
        const toast = document.createElement('div');
        toast.className = `position-fixed bottom-0 end-0 p-2 p-md-3 m-2 m-md-3 bg-\${type === 'success' ? 'success' : 'danger'} text-white rounded shadow`;
        toast.style.zIndex = '9999';
        toast.style.fontSize = '0.65rem';
        toast.style.cursor = 'pointer';
        toast.innerHTML = `<i class=\"fas fa-\${type === 'success' ? 'check-circle' : 'exclamation-circle'} me-2\"></i>\${message}`;
        document.body.appendChild(toast);
        setTimeout(() => toast.remove(), 3000);
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
        return "super_admin/analysis_request/show.html.twig";
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
        return array (  1593 => 1227,  1558 => 1195,  1549 => 1189,  1534 => 1177,  1518 => 1164,  1504 => 1153,  1490 => 1142,  1470 => 1125,  1459 => 1117,  1453 => 1114,  1446 => 1113,  1420 => 1089,  1400 => 1070,  1379 => 1050,  1359 => 1031,  1325 => 999,  1320 => 996,  1286 => 963,  1273 => 951,  1266 => 946,  1259 => 941,  1255 => 939,  1251 => 937,  1249 => 936,  1239 => 929,  1230 => 923,  1221 => 917,  1215 => 913,  1213 => 912,  1197 => 898,  1187 => 890,  1184 => 889,  1181 => 887,  1168 => 876,  1165 => 875,  1162 => 873,  1149 => 862,  1146 => 861,  1143 => 859,  1136 => 855,  1116 => 838,  1110 => 835,  1106 => 834,  1099 => 829,  1096 => 828,  1093 => 826,  1079 => 815,  1069 => 808,  1062 => 803,  1059 => 802,  1056 => 800,  1046 => 792,  1043 => 791,  1040 => 789,  1034 => 786,  1013 => 767,  1010 => 766,  987 => 745,  979 => 740,  970 => 734,  961 => 728,  952 => 722,  943 => 716,  939 => 715,  935 => 713,  929 => 710,  926 => 709,  921 => 707,  916 => 705,  911 => 704,  909 => 703,  889 => 685,  882 => 681,  878 => 679,  876 => 678,  872 => 676,  865 => 672,  861 => 670,  859 => 669,  855 => 667,  849 => 664,  845 => 663,  841 => 661,  839 => 660,  835 => 658,  828 => 654,  824 => 652,  822 => 651,  818 => 649,  811 => 645,  807 => 643,  801 => 640,  797 => 639,  793 => 637,  791 => 636,  783 => 631,  763 => 613,  756 => 609,  751 => 606,  749 => 605,  742 => 602,  740 => 601,  734 => 600,  722 => 591,  718 => 589,  713 => 588,  709 => 587,  705 => 586,  701 => 585,  697 => 584,  693 => 583,  688 => 581,  677 => 573,  673 => 572,  663 => 565,  653 => 558,  621 => 529,  614 => 525,  610 => 524,  602 => 519,  595 => 515,  583 => 505,  576 => 504,  75 => 7,  68 => 6,  54 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "super_admin/analysis_request/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\super_admin\\analysis_request\\show.html.twig");
    }
}
