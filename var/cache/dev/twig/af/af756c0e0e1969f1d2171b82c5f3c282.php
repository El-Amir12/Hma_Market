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
class __TwigTemplate_a1b415c9061b02be5a2a084c09ed2705 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "super_admin/analysis_request/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "super_admin/analysis_request/show.html.twig"));

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

        yield "Analyse ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 4, $this->source); })()), "requestNumber", [], "any", false, false, false, 4), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 4, $this->source); })()), "company", [], "any", false, false, false, 4), "companyName", [], "any", false, false, false, 4), "html", null, true);
        
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 504
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 519, $this->source); })()), "requestNumber", [], "any", false, false, false, 519), "html", null, true);
        yield "</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-chart-line me-2 text-primary\"></i>
                <span class=\"d-none d-sm-inline\">Analyse #";
        // line 524
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 524, $this->source); })()), "requestNumber", [], "any", false, false, false, 524), "html", null, true);
        yield "</span>
                <span class=\"d-inline d-sm-none\">#";
        // line 525
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 525, $this->source); })()), "requestNumber", [], "any", false, false, false, 525), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 558, $this->source); })()), "requestNumber", [], "any", false, false, false, 558), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                        <!-- Date de création -->
                        <div class=\"col-6 col-md-6\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.55rem;\">Date de création</small>
                                <div class=\"fw-bold small\">";
        // line 565
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 565, $this->source); })()), "createdAt", [], "any", false, false, false, 565), "d/m/Y H:i:s"), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                        <!-- Type d'analyse -->
                        <div class=\"col-6 col-md-6\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.55rem;\">Type d'analyse</small>
                                <div class=\"fw-bold small\">";
        // line 572
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 572, $this->source); })()), "typeLabel", [], "any", false, false, false, 572), "html", null, true);
        yield "</div>
                                <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">";
        // line 573
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 573, $this->source); })()), "amountFormatted", [], "any", false, false, false, 573), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 581, $this->source); })()), "statusBadgeClass", [], "any", false, false, false, 581), "html", null, true);
        yield " status-badge\" style=\"font-size:0.6rem; padding:0.2rem 0.5rem;\">
                                        <i class=\"fas 
                                            ";
        // line 583
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 583, $this->source); })()), "status", [], "any", false, false, false, 583) == "completed")) {
            yield "fa-check-circle
                                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 584
(isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 584, $this->source); })()), "status", [], "any", false, false, false, 584) == "pending")) {
            yield "fa-clock
                                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 585
(isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 585, $this->source); })()), "status", [], "any", false, false, false, 585) == "processing")) {
            yield "fa-spinner fa-pulse
                                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 586
(isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 586, $this->source); })()), "status", [], "any", false, false, false, 586) == "paid")) {
            yield "fa-credit-card
                                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 587
(isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 587, $this->source); })()), "status", [], "any", false, false, false, 587) == "failed")) {
            yield "fa-times-circle
                                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 588
(isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 588, $this->source); })()), "status", [], "any", false, false, false, 588) == "expired")) {
            yield "fa-hourglass-end
                                            ";
        }
        // line 589
        yield " me-1\">
                                        </i>
                                        ";
        // line 591
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 591, $this->source); })()), "statusLabel", [], "any", false, false, false, 591), 0, 12), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 600, $this->source); })()), "periodStart", [], "any", false, false, false, 600), "d/m/Y"), "html", null, true);
        yield " au ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 600, $this->source); })()), "periodEnd", [], "any", false, false, false, 600), "d/m/Y"), "html", null, true);
        yield "</div>
                                ";
        // line 601
        $context["daysCount"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 601, $this->source); })()), "periodStart", [], "any", false, false, false, 601), "diff", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 601, $this->source); })()), "periodEnd", [], "any", false, false, false, 601)], "method", false, false, false, 601), "days", [], "any", false, false, false, 601);
        // line 602
        yield "                                <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["daysCount"]) || array_key_exists("daysCount", $context) ? $context["daysCount"] : (function () { throw new RuntimeError('Variable "daysCount" does not exist.', 602, $this->source); })()), "html", null, true);
        yield " jours de données</small>
                            </div>
                        </div>
                        ";
        // line 605
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 605, $this->source); })()), "notes", [], "any", false, false, false, 605)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 606
            yield "                        <div class=\"col-12\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.55rem;\">Notes / Instructions</small>
                                <div class=\"mt-1 small\">";
            // line 609
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 609, $this->source); })()), "notes", [], "any", false, false, false, 609), "html", null, true));
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 631, $this->source); })()), "createdAt", [], "any", false, false, false, 631), "d/m/Y H:i:s"), "html", null, true);
        yield "</small>
                            <div class=\"text-muted small\" style=\"font-size:0.5rem;\">Demande enregistrée avec succès</div>
                        </div>
                        
                        <!-- Paiement -->
                        ";
        // line 636
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 636, $this->source); })()), "paidAt", [], "any", false, false, false, 636)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 637
            yield "                        <div class=\"timeline-item completed\">
                            <div class=\"fw-bold small\">Paiement reçu</div>
                            <small class=\"text-muted d-block\" style=\"font-size:0.55rem;\">";
            // line 639
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 639, $this->source); })()), "paidAt", [], "any", false, false, false, 639), "d/m/Y H:i:s"), "html", null, true);
            yield "</small>
                            <div class=\"text-muted small\" style=\"font-size:0.5rem;\">Transaction #";
            // line 640
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 640, $this->source); })()), "paymentTransactionId", [], "any", false, false, false, 640), "html", null, true);
            yield "</div>
                        </div>
                        ";
        } else {
            // line 643
            yield "                        <div class=\"timeline-item pending\">
                            <div class=\"fw-bold small\">En attente de paiement</div>
                            <small class=\"text-muted d-block\" style=\"font-size:0.55rem;\">Expire le ";
            // line 645
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 645, $this->source); })()), "expiresAt", [], "any", false, false, false, 645), "d/m/Y"), "html", null, true);
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
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 651, $this->source); })()), "rawExportPath", [], "any", false, false, false, 651)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 652
            yield "                        <div class=\"timeline-item completed\">
                            <div class=\"fw-bold small\">Données brutes exportées</div>
                            <small class=\"text-muted d-block\" style=\"font-size:0.55rem;\">";
            // line 654
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 654, $this->source); })()), "rawExportedAt", [], "any", false, false, false, 654)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 654, $this->source); })()), "rawExportedAt", [], "any", false, false, false, 654), "d/m/Y H:i:s"), "html", null, true)) : ("Exporté"));
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
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 660, $this->source); })()), "finalReportUploadedAt", [], "any", false, false, false, 660)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 661
            yield "                        <div class=\"timeline-item completed\">
                            <div class=\"fw-bold small\">Rapport final uploadé</div>
                            <small class=\"text-muted d-block\" style=\"font-size:0.55rem;\">";
            // line 663
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 663, $this->source); })()), "finalReportUploadedAt", [], "any", false, false, false, 663), "d/m/Y H:i:s"), "html", null, true);
            yield "</small>
                            <div class=\"text-muted small\" style=\"font-size:0.5rem;\">Type: ";
            // line 664
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 664, $this->source); })()), "finalReportType", [], "any", false, false, false, 664)), "html", null, true);
            yield "</div>
                        </div>
                        ";
        }
        // line 667
        yield "                        
                        <!-- Expiré -->
                        ";
        // line 669
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 669, $this->source); })()), "status", [], "any", false, false, false, 669) == "expired")) {
            // line 670
            yield "                        <div class=\"timeline-item failed\">
                            <div class=\"fw-bold small\">Demande expirée</div>
                            <small class=\"text-muted d-block\" style=\"font-size:0.55rem;\">";
            // line 672
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate($this->extensions['Twig\Extension\CoreExtension']->modifyDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 672, $this->source); })()), "createdAt", [], "any", false, false, false, 672), "+3 days"), "d/m/Y"), "html", null, true);
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
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 678, $this->source); })()), "status", [], "any", false, false, false, 678) == "failed")) {
            // line 679
            yield "                        <div class=\"timeline-item failed\">
                            <div class=\"fw-bold small\">Échec de l'analyse</div>
                            <small class=\"text-muted d-block\" style=\"font-size:0.55rem;\">";
            // line 681
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 681, $this->source); })()), "updatedAt", [], "any", false, false, false, 681)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 681, $this->source); })()), "updatedAt", [], "any", false, false, false, 681), "d/m/Y H:i:s"), "html", null, true)) : ("Erreur"));
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
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 703, $this->source); })()), "company", [], "any", false, false, false, 703), "logo", [], "any", false, false, false, 703)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 704
            yield "                            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/logos/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 704, $this->source); })()), "company", [], "any", false, false, false, 704), "logo", [], "any", false, false, false, 704))), "html", null, true);
            yield "\" 
                                 alt=\"";
            // line 705
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 705, $this->source); })()), "company", [], "any", false, false, false, 705), "companyName", [], "any", false, false, false, 705), "html", null, true);
            yield "\" 
                                 class=\"company-logo\" 
                                 onerror=\"this.onerror=null; this.parentElement.innerHTML='<div class=\\'company-initials mx-auto\\'>";
            // line 707
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 707, $this->source); })()), "company", [], "any", false, false, false, 707), "companyName", [], "any", false, false, false, 707), 0, 2)), "html", null, true);
            yield "</div>';\">
                        ";
        } else {
            // line 709
            yield "                            <div class=\"company-initials mx-auto\">
                                ";
            // line 710
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 710, $this->source); })()), "company", [], "any", false, false, false, 710), "companyName", [], "any", false, false, false, 710), 0, 2)), "html", null, true);
            yield "
                            </div>
                        ";
        }
        // line 713
        yield "                    </div>
                    <div class=\"text-center mb-2 mb-md-3\">
                        <h5 class=\"mb-0 fs-6 fs-md-5\">";
        // line 715
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 715, $this->source); })()), "company", [], "any", false, false, false, 715), "companyName", [], "any", false, false, false, 715), "html", null, true);
        yield "</h5>
                        <small class=\"text-muted d-block\" style=\"font-size:0.55rem;\">";
        // line 716
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 716, $this->source); })()), "company", [], "any", false, false, false, 716), "subscriptionNumber", [], "any", false, false, false, 716), "html", null, true);
        yield "</small>
                    </div>
                    <div class=\"row g-1 g-md-2\">
                        <div class=\"col-12\">
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\" style=\"font-size:0.55rem;\">Type</span>
                                <span style=\"font-size:0.6rem;\">";
        // line 722
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 722, $this->source); })()), "company", [], "any", false, false, false, 722), "type", [], "any", false, false, false, 722) == "restaurant")) ? ("🍽️ Restaurant") : ("🛒 Commerce"));
        yield "</span>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\" style=\"font-size:0.55rem;\">Email</span>
                                <span style=\"font-size:0.6rem;\">";
        // line 728
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 728, $this->source); })()), "company", [], "any", false, false, false, 728), "email", [], "any", false, false, false, 728), "html", null, true);
        yield "</span>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\" style=\"font-size:0.55rem;\">Téléphone</span>
                                <span style=\"font-size:0.6rem;\">";
        // line 734
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "company", [], "any", false, true, false, 734), "phone", [], "any", true, true, false, 734)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 734, $this->source); })()), "company", [], "any", false, false, false, 734), "phone", [], "any", false, false, false, 734), "—")) : ("—")), "html", null, true);
        yield "</span>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\" style=\"font-size:0.55rem;\">Date création</span>
                                <span style=\"font-size:0.6rem;\">";
        // line 740
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 740, $this->source); })()), "company", [], "any", false, false, false, 740), "createdAt", [], "any", false, false, false, 740), "d/m/Y"), "html", null, true);
        yield "</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"mt-2 mt-md-3\">
                        <a href=\"";
        // line 745
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_hma_service_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 745, $this->source); })()), "company", [], "any", false, false, false, 745), "id", [], "any", false, false, false, 745)]), "html", null, true);
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
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 766, $this->source); })()), "status", [], "any", false, false, false, 766) == "pending")) {
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 786, $this->source); })()), "expiresAt", [], "any", false, false, false, 786), "d/m/Y"), "html", null, true);
            yield ".
                        </div>
                    ";
        }
        // line 789
        yield "
                    ";
        // line 791
        yield "                    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 791, $this->source); })()), "status", [], "any", false, false, false, 791) == "paid")) {
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
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 802, $this->source); })()), "status", [], "any", false, false, false, 802) == "processing") && CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 802, $this->source); })()), "rawExportPath", [], "any", false, false, false, 802))) {
            // line 803
            yield "                        <div class=\"alert alert-success py-1 px-2\" style=\"font-size:0.55rem;\">
                            <i class=\"fas fa-check-circle me-1\"></i>
                            Données brutes prêtes.
                        </div>
                        
                        <a href=\"";
            // line 808
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_analysis_download_raw", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 808, $this->source); })()), "id", [], "any", false, false, false, 808)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary btn-sm w-100 mb-2\" style=\"font-size:0.6rem; padding:0.2rem 0.4rem;\">
                            <i class=\"fas fa-download me-1\"></i> Télécharger les données brutes (ZIP)
                        </a>
                        
                        <hr class=\"my-2\">
                        
                        <div class=\"fw-bold small mb-2\">📤 Uploader le rapport final</div>
                        <form method=\"post\" action=\"";
            // line 815
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_analysis_upload_report", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 815, $this->source); })()), "id", [], "any", false, false, false, 815)]), "html", null, true);
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
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 828, $this->source); })()), "status", [], "any", false, false, false, 828) == "completed")) {
            // line 829
            yield "                        <div class=\"report-card p-2\">
                            <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-2\">
                                <div>
                                    <i class=\"fas fa-file-alt fa-2x me-2\"></i>
                                    <strong class=\"small\">Rapport final</strong>
                                    <div class=\"small\" style=\"font-size:0.5rem;\">";
            // line 834
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 834, $this->source); })()), "finalReportFilename", [], "any", false, false, false, 834), "html", null, true);
            yield "</div>
                                    <div class=\"small opacity-75\" style=\"font-size:0.45rem;\">Uploadé le ";
            // line 835
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 835, $this->source); })()), "finalReportUploadedAt", [], "any", false, false, false, 835), "d/m/Y H:i"), "html", null, true);
            yield "</div>
                                </div>
                                <div class=\"d-flex flex-wrap gap-1 w-100 w-sm-auto\">
                                    <a href=\"";
            // line 838
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_download_final", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 838, $this->source); })()), "id", [], "any", false, false, false, 838)]), "html", null, true);
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_download_raw", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 855, $this->source); })()), "id", [], "any", false, false, false, 855)]), "html", null, true);
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
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 861, $this->source); })()), "status", [], "any", false, false, false, 861) == "processing") &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 861, $this->source); })()), "rawExportPath", [], "any", false, false, false, 861))) {
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
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 875, $this->source); })()), "status", [], "any", false, false, false, 875) == "failed")) {
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
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 889, $this->source); })()), "status", [], "any", false, false, false, 889) == "expired")) {
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
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 912, $this->source); })()), "paymentTransactionId", [], "any", false, false, false, 912)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 913
            yield "                    <div class=\"row g-1 g-md-2\">
                        <div class=\"col-12\">
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\" style=\"font-size:0.55rem;\">ID Transaction</span>
                                <span class=\"fw-bold small\">";
            // line 917
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 917, $this->source); })()), "paymentTransactionId", [], "any", false, false, false, 917), "html", null, true);
            yield "</span>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\" style=\"font-size:0.55rem;\">Date de paiement</span>
                                <span class=\"small\">";
            // line 923
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 923, $this->source); })()), "paidAt", [], "any", false, false, false, 923)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 923, $this->source); })()), "paidAt", [], "any", false, false, false, 923), "d/m/Y H:i:s"), "html", null, true)) : ("—"));
            yield "</span>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\" style=\"font-size:0.55rem;\">Montant payé</span>
                                <span class=\"fw-bold text-success small\">";
            // line 929
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 929, $this->source); })()), "amountFormatted", [], "any", false, false, false, 929), "html", null, true);
            yield "</span>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\" style=\"font-size:0.55rem;\">Statut</span>
                                <span>
                                    ";
            // line 936
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 936, $this->source); })()), "paidAt", [], "any", false, false, false, 936)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_replace_report", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 999, $this->source); })()), "id", [], "any", false, false, false, 999)]), "html", null, true);
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1113
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

        // line 1114
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    const requestId = ";
        // line 1117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 1117, $this->source); })()), "id", [], "any", false, false, false, 1117), "html", null, true);
        yield ";
    
    // ==================== GÉNÉRATION EXPORT BRUT ====================
    const generateRawBtn = document.getElementById('confirmGenerateRawBtn');
    if (generateRawBtn) {
        generateRawBtn.addEventListener('click', function() {
            const form = document.createElement('form');
            form.method = 'POST';
            form.action = '";
        // line 1125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_generate_raw", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 1125, $this->source); })()), "id", [], "any", false, false, false, 1125)]), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_retry", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 1142, $this->source); })()), "id", [], "any", false, false, false, 1142)]), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_force_to_paid", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 1153, $this->source); })()), "id", [], "any", false, false, false, 1153)]), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_cancel", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 1164, $this->source); })()), "id", [], "any", false, false, false, 1164)]), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_force_to_paid", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 1177, $this->source); })()), "id", [], "any", false, false, false, 1177)]), "html", null, true);
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
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 1189, $this->source); })()), "status", [], "any", false, false, false, 1189) == "pending")) ? ("true") : ("false"));
        yield ") {
        generateLinkBtn.addEventListener('click', async function() {
            generateLinkBtn.disabled = true;
            generateLinkBtn.innerHTML = '<span class=\"spinner-border spinner-border-sm me-1\"></span> Génération...';
            
            try {
                const response = await fetch('";
        // line 1195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_payment_link", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 1195, $this->source); })()), "id", [], "any", false, false, false, 1195)]), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_analysis_send_payment_link", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 1227, $this->source); })()), "id", [], "any", false, false, false, 1227)]), "html", null, true);
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  1647 => 1227,  1612 => 1195,  1603 => 1189,  1588 => 1177,  1572 => 1164,  1558 => 1153,  1544 => 1142,  1524 => 1125,  1513 => 1117,  1507 => 1114,  1494 => 1113,  1462 => 1089,  1442 => 1070,  1421 => 1050,  1401 => 1031,  1367 => 999,  1362 => 996,  1328 => 963,  1315 => 951,  1308 => 946,  1301 => 941,  1297 => 939,  1293 => 937,  1291 => 936,  1281 => 929,  1272 => 923,  1263 => 917,  1257 => 913,  1255 => 912,  1239 => 898,  1229 => 890,  1226 => 889,  1223 => 887,  1210 => 876,  1207 => 875,  1204 => 873,  1191 => 862,  1188 => 861,  1185 => 859,  1178 => 855,  1158 => 838,  1152 => 835,  1148 => 834,  1141 => 829,  1138 => 828,  1135 => 826,  1121 => 815,  1111 => 808,  1104 => 803,  1101 => 802,  1098 => 800,  1088 => 792,  1085 => 791,  1082 => 789,  1076 => 786,  1055 => 767,  1052 => 766,  1029 => 745,  1021 => 740,  1012 => 734,  1003 => 728,  994 => 722,  985 => 716,  981 => 715,  977 => 713,  971 => 710,  968 => 709,  963 => 707,  958 => 705,  953 => 704,  951 => 703,  931 => 685,  924 => 681,  920 => 679,  918 => 678,  914 => 676,  907 => 672,  903 => 670,  901 => 669,  897 => 667,  891 => 664,  887 => 663,  883 => 661,  881 => 660,  877 => 658,  870 => 654,  866 => 652,  864 => 651,  860 => 649,  853 => 645,  849 => 643,  843 => 640,  839 => 639,  835 => 637,  833 => 636,  825 => 631,  805 => 613,  798 => 609,  793 => 606,  791 => 605,  784 => 602,  782 => 601,  776 => 600,  764 => 591,  760 => 589,  755 => 588,  751 => 587,  747 => 586,  743 => 585,  739 => 584,  735 => 583,  730 => 581,  719 => 573,  715 => 572,  705 => 565,  695 => 558,  663 => 529,  656 => 525,  652 => 524,  644 => 519,  637 => 515,  625 => 505,  612 => 504,  105 => 7,  92 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/super_admin/analysis_request/show.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Analyse {{ request.requestNumber }} - {{ request.company.companyName }}{% endblock %}

{% block stylesheets %}
{{ parent() }}
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
{% endblock %}

{% block body %}
<div class=\"container-fluid px-2 px-md-4 py-2 py-md-3\">

    <!-- ==========================================
         EN-TÊTE
    ========================================== -->
    <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center mb-3 mb-md-4 flex-wrap gap-2\">
        <div class=\"w-100 w-sm-auto\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb mb-1\">
                    <li class=\"breadcrumb-item small\">
                        <a href=\"{{ path('app_super_admin_analysis_request_index') }}\" class=\"text-decoration-none\">
                            <i class=\"fas fa-chart-line me-1\"></i> Analyses
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active small\">{{ request.requestNumber }}</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-chart-line me-2 text-primary\"></i>
                <span class=\"d-none d-sm-inline\">Analyse #{{ request.requestNumber }}</span>
                <span class=\"d-inline d-sm-none\">#{{ request.requestNumber }}</span>
            </h1>
        </div>
        <div class=\"action-buttons w-100 w-sm-auto\">
            <a href=\"{{ path('app_super_admin_analysis_request_index') }}\" class=\"btn btn-outline-secondary btn-sm w-100 w-sm-auto\">
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
                                <div class=\"fw-bold fs-6 fs-md-5\">{{ request.requestNumber }}</div>
                            </div>
                        </div>
                        <!-- Date de création -->
                        <div class=\"col-6 col-md-6\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.55rem;\">Date de création</small>
                                <div class=\"fw-bold small\">{{ request.createdAt|date('d/m/Y H:i:s') }}</div>
                            </div>
                        </div>
                        <!-- Type d'analyse -->
                        <div class=\"col-6 col-md-6\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.55rem;\">Type d'analyse</small>
                                <div class=\"fw-bold small\">{{ request.typeLabel }}</div>
                                <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">{{ request.amountFormatted }}</small>
                            </div>
                        </div>
                        <!-- Statut -->
                        <div class=\"col-6 col-md-6\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.55rem;\">Statut</small>
                                <div>
                                    <span class=\"badge {{ request.statusBadgeClass }} status-badge\" style=\"font-size:0.6rem; padding:0.2rem 0.5rem;\">
                                        <i class=\"fas 
                                            {% if request.status == 'completed' %}fa-check-circle
                                            {% elseif request.status == 'pending' %}fa-clock
                                            {% elseif request.status == 'processing' %}fa-spinner fa-pulse
                                            {% elseif request.status == 'paid' %}fa-credit-card
                                            {% elseif request.status == 'failed' %}fa-times-circle
                                            {% elseif request.status == 'expired' %}fa-hourglass-end
                                            {% endif %} me-1\">
                                        </i>
                                        {{ request.statusLabel|slice(0, 12) }}
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Période analysée -->
                        <div class=\"col-12\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.55rem;\">Période analysée</small>
                                <div class=\"fw-bold small\">{{ request.periodStart|date('d/m/Y') }} au {{ request.periodEnd|date('d/m/Y') }}</div>
                                {% set daysCount = request.periodStart.diff(request.periodEnd).days %}
                                <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">{{ daysCount }} jours de données</small>
                            </div>
                        </div>
                        {% if request.notes %}
                        <div class=\"col-12\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.55rem;\">Notes / Instructions</small>
                                <div class=\"mt-1 small\">{{ request.notes|nl2br }}</div>
                            </div>
                        </div>
                        {% endif %}
                    </div>
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
                            <small class=\"text-muted d-block\" style=\"font-size:0.55rem;\">{{ request.createdAt|date('d/m/Y H:i:s') }}</small>
                            <div class=\"text-muted small\" style=\"font-size:0.5rem;\">Demande enregistrée avec succès</div>
                        </div>
                        
                        <!-- Paiement -->
                        {% if request.paidAt %}
                        <div class=\"timeline-item completed\">
                            <div class=\"fw-bold small\">Paiement reçu</div>
                            <small class=\"text-muted d-block\" style=\"font-size:0.55rem;\">{{ request.paidAt|date('d/m/Y H:i:s') }}</small>
                            <div class=\"text-muted small\" style=\"font-size:0.5rem;\">Transaction #{{ request.paymentTransactionId }}</div>
                        </div>
                        {% else %}
                        <div class=\"timeline-item pending\">
                            <div class=\"fw-bold small\">En attente de paiement</div>
                            <small class=\"text-muted d-block\" style=\"font-size:0.55rem;\">Expire le {{ request.expiresAt|date('d/m/Y') }}</small>
                            <div class=\"text-muted small\" style=\"font-size:0.5rem;\">Générer le lien de paiement</div>
                        </div>
                        {% endif %}
                        
                        <!-- Export brut -->
                        {% if request.rawExportPath %}
                        <div class=\"timeline-item completed\">
                            <div class=\"fw-bold small\">Données brutes exportées</div>
                            <small class=\"text-muted d-block\" style=\"font-size:0.55rem;\">{{ request.rawExportedAt ? request.rawExportedAt|date('d/m/Y H:i:s') : 'Exporté' }}</small>
                            <div class=\"text-muted small\" style=\"font-size:0.5rem;\">Fichier ZIP disponible</div>
                        </div>
                        {% endif %}
                        
                        <!-- Rapport final -->
                        {% if request.finalReportUploadedAt %}
                        <div class=\"timeline-item completed\">
                            <div class=\"fw-bold small\">Rapport final uploadé</div>
                            <small class=\"text-muted d-block\" style=\"font-size:0.55rem;\">{{ request.finalReportUploadedAt|date('d/m/Y H:i:s') }}</small>
                            <div class=\"text-muted small\" style=\"font-size:0.5rem;\">Type: {{ request.finalReportType|upper }}</div>
                        </div>
                        {% endif %}
                        
                        <!-- Expiré -->
                        {% if request.status == 'expired' %}
                        <div class=\"timeline-item failed\">
                            <div class=\"fw-bold small\">Demande expirée</div>
                            <small class=\"text-muted d-block\" style=\"font-size:0.55rem;\">{{ request.createdAt|date_modify('+3 days')|date('d/m/Y') }}</small>
                            <div class=\"text-muted small\" style=\"font-size:0.5rem;\">Délai de paiement dépassé</div>
                        </div>
                        {% endif %}
                        
                        <!-- Échec -->
                        {% if request.status == 'failed' %}
                        <div class=\"timeline-item failed\">
                            <div class=\"fw-bold small\">Échec de l'analyse</div>
                            <small class=\"text-muted d-block\" style=\"font-size:0.55rem;\">{{ request.updatedAt ? request.updatedAt|date('d/m/Y H:i:s') : 'Erreur' }}</small>
                            <div class=\"text-muted small\" style=\"font-size:0.5rem;\">Une erreur est survenue</div>
                        </div>
                        {% endif %}
                    </div>
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
                        {% if request.company.logo %}
                            <img src=\"{{ asset('uploads/logos/' ~ request.company.logo) }}\" 
                                 alt=\"{{ request.company.companyName }}\" 
                                 class=\"company-logo\" 
                                 onerror=\"this.onerror=null; this.parentElement.innerHTML='<div class=\\'company-initials mx-auto\\'>{{ request.company.companyName|slice(0,2)|upper }}</div>';\">
                        {% else %}
                            <div class=\"company-initials mx-auto\">
                                {{ request.company.companyName|slice(0,2)|upper }}
                            </div>
                        {% endif %}
                    </div>
                    <div class=\"text-center mb-2 mb-md-3\">
                        <h5 class=\"mb-0 fs-6 fs-md-5\">{{ request.company.companyName }}</h5>
                        <small class=\"text-muted d-block\" style=\"font-size:0.55rem;\">{{ request.company.subscriptionNumber }}</small>
                    </div>
                    <div class=\"row g-1 g-md-2\">
                        <div class=\"col-12\">
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\" style=\"font-size:0.55rem;\">Type</span>
                                <span style=\"font-size:0.6rem;\">{{ request.company.type == 'restaurant' ? '🍽️ Restaurant' : '🛒 Commerce' }}</span>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\" style=\"font-size:0.55rem;\">Email</span>
                                <span style=\"font-size:0.6rem;\">{{ request.company.email }}</span>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\" style=\"font-size:0.55rem;\">Téléphone</span>
                                <span style=\"font-size:0.6rem;\">{{ request.company.phone|default('—') }}</span>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\" style=\"font-size:0.55rem;\">Date création</span>
                                <span style=\"font-size:0.6rem;\">{{ request.company.createdAt|date('d/m/Y') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"mt-2 mt-md-3\">
                        <a href=\"{{ path('app_super_admin_hma_service_show', {'id': request.company.id}) }}\" class=\"btn btn-sm btn-outline-primary w-100\" style=\"font-size:0.6rem; padding:0.15rem 0.3rem;\">
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

                    {# === CAS 1: EN ATTENTE DE PAIEMENT === #}
                    {% if request.status == 'pending' %}
                        <div class=\"payment-link mb-2\">
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
                            Expire le {{ request.expiresAt|date('d/m/Y') }}.
                        </div>
                    {% endif %}

                    {# === CAS 2: PAYÉ === #}
                    {% if request.status == 'paid' %}
                        <div class=\"alert alert-info py-1 px-2\" style=\"font-size:0.55rem;\">
                            <i class=\"fas fa-info-circle me-1\"></i>
                            Paiement confirmé. Exporter les données brutes.
                        </div>
                        <button type=\"button\" class=\"btn btn-primary btn-sm w-100\" data-bs-toggle=\"modal\" data-bs-target=\"#confirmGenerateRawModal\" style=\"font-size:0.6rem; padding:0.2rem 0.4rem;\">
                            <i class=\"fas fa-database me-1\"></i> Exporter les données brutes (ZIP)
                        </button>
                    {% endif %}

                    {# === CAS 3: EN TRAITEMENT AVEC DONNÉES BRUTES === #}
                    {% if request.status == 'processing' and request.rawExportPath %}
                        <div class=\"alert alert-success py-1 px-2\" style=\"font-size:0.55rem;\">
                            <i class=\"fas fa-check-circle me-1\"></i>
                            Données brutes prêtes.
                        </div>
                        
                        <a href=\"{{ path('app_super_admin_analysis_download_raw', {'id': request.id}) }}\" class=\"btn btn-outline-primary btn-sm w-100 mb-2\" style=\"font-size:0.6rem; padding:0.2rem 0.4rem;\">
                            <i class=\"fas fa-download me-1\"></i> Télécharger les données brutes (ZIP)
                        </a>
                        
                        <hr class=\"my-2\">
                        
                        <div class=\"fw-bold small mb-2\">📤 Uploader le rapport final</div>
                        <form method=\"post\" action=\"{{ path('app_super_admin_analysis_upload_report', {'id': request.id}) }}\" enctype=\"multipart/form-data\" class=\"upload-form p-2\">
                            <div class=\"mb-2\">
                                <label class=\"form-label small\" style=\"font-size:0.55rem;\">Sélectionner le fichier</label>
                                <input type=\"file\" name=\"report\" class=\"form-control form-control-sm\" accept=\".xlsx,.xls,.pbix,.pdf,.zip\" required style=\"font-size:0.55rem; padding:0.1rem 0.3rem; border-radius:4px;\">
                                <small class=\"text-muted d-block mt-1\" style=\"font-size:0.45rem;\">Formats: Excel, PDF, ZIP</small>
                            </div>
                            <button type=\"submit\" class=\"btn btn-success btn-sm w-100\" style=\"font-size:0.6rem; padding:0.2rem 0.4rem;\">
                                <i class=\"fas fa-cloud-upload-alt me-1\"></i> Uploader le rapport final
                            </button>
                        </form>
                    {% endif %}

                    {# === CAS 4: COMPLÉTÉ === #}
                    {% if request.status == 'completed' %}
                        <div class=\"report-card p-2\">
                            <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-2\">
                                <div>
                                    <i class=\"fas fa-file-alt fa-2x me-2\"></i>
                                    <strong class=\"small\">Rapport final</strong>
                                    <div class=\"small\" style=\"font-size:0.5rem;\">{{ request.finalReportFilename }}</div>
                                    <div class=\"small opacity-75\" style=\"font-size:0.45rem;\">Uploadé le {{ request.finalReportUploadedAt|date('d/m/Y H:i') }}</div>
                                </div>
                                <div class=\"d-flex flex-wrap gap-1 w-100 w-sm-auto\">
                                    <a href=\"{{ path('super_admin_analysis_download_final', {'id': request.id}) }}\" class=\"btn btn-sm flex-grow-1\" style=\"font-size:0.5rem; padding:0.1rem 0.2rem;\">
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
                        
                        <a href=\"{{ path('super_admin_analysis_download_raw', {'id': request.id}) }}\" class=\"btn btn-outline-secondary btn-sm w-100\" style=\"font-size:0.6rem; padding:0.2rem 0.4rem;\">
                            <i class=\"fas fa-database me-1\"></i> Télécharger les données brutes
                        </a>
                    {% endif %}

                    {# === CAS 5: EN TRAITEMENT SANS DONNÉES BRUTES === #}
                    {% if request.status == 'processing' and not request.rawExportPath %}
                        <div class=\"alert alert-warning py-1 px-2\" style=\"font-size:0.55rem;\">
                            <i class=\"fas fa-spinner fa-pulse me-1\"></i>
                            Génération en cours...
                        </div>
                        <div class=\"progress mb-2\" style=\"height:4px;\">
                            <div class=\"progress-bar progress-bar-striped progress-bar-animated\" style=\"width: 100%\"></div>
                        </div>
                        <button type=\"button\" class=\"btn btn-danger btn-sm w-100\" data-bs-toggle=\"modal\" data-bs-target=\"#confirmCancelModal\" style=\"font-size:0.6rem; padding:0.2rem 0.4rem;\">
                            <i class=\"fas fa-ban me-1\"></i> Annuler
                        </button>
                    {% endif %}

                    {# === CAS 6: ÉCHEC === #}
                    {% if request.status == 'failed' %}
                        <div class=\"alert alert-danger py-1 px-2\" style=\"font-size:0.55rem;\">
                            <i class=\"fas fa-exclamation-circle me-1\"></i>
                            Une erreur est survenue.
                        </div>
                        <button type=\"button\" class=\"btn btn-warning btn-sm w-100 mb-1\" data-bs-toggle=\"modal\" data-bs-target=\"#confirmRetryModal\" style=\"font-size:0.6rem; padding:0.2rem 0.4rem;\">
                            <i class=\"fas fa-sync me-1\"></i> Réessayer
                        </button>
                        <button type=\"button\" class=\"btn btn-outline-danger btn-sm w-100\" data-bs-toggle=\"modal\" data-bs-target=\"#confirmForcePaidModal\" style=\"font-size:0.6rem; padding:0.2rem 0.4rem;\">
                            <i class=\"fas fa-exclamation-triangle me-1\"></i> Forcer à \"Payé\"
                        </button>
                    {% endif %}

                    {# === CAS 7: EXPIRÉ === #}
                    {% if request.status == 'expired' %}
                        <div class=\"alert alert-secondary py-1 px-2\" style=\"font-size:0.55rem;\">
                            <i class=\"fas fa-hourglass-end me-1\"></i>
                            Demande expirée.
                        </div>
                        <button type=\"button\" class=\"btn btn-outline-primary btn-sm w-100\" data-bs-toggle=\"modal\" data-bs-target=\"#confirmRenewModal\" style=\"font-size:0.6rem; padding:0.2rem 0.4rem;\">
                            <i class=\"fas fa-redo me-1\"></i> Relancer la demande
                        </button>
                    {% endif %}

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
                    {% if request.paymentTransactionId %}
                    <div class=\"row g-1 g-md-2\">
                        <div class=\"col-12\">
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\" style=\"font-size:0.55rem;\">ID Transaction</span>
                                <span class=\"fw-bold small\">{{ request.paymentTransactionId }}</span>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\" style=\"font-size:0.55rem;\">Date de paiement</span>
                                <span class=\"small\">{{ request.paidAt ? request.paidAt|date('d/m/Y H:i:s') : '—' }}</span>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\" style=\"font-size:0.55rem;\">Montant payé</span>
                                <span class=\"fw-bold text-success small\">{{ request.amountFormatted }}</span>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\" style=\"font-size:0.55rem;\">Statut</span>
                                <span>
                                    {% if request.paidAt %}
                                        <span class=\"badge bg-success\" style=\"font-size:0.5rem;\">Payé</span>
                                    {% else %}
                                        <span class=\"badge bg-warning\" style=\"font-size:0.5rem;\">En attente</span>
                                    {% endif %}
                                </span>
                            </div>
                        </div>
                    </div>
                    {% else %}
                    <div class=\"alert alert-info mb-0 py-1 px-2\" style=\"font-size:0.55rem;\">
                        <i class=\"fas fa-info-circle me-1\"></i>
                        Aucun paiement enregistré.
                    </div>
                    {% endif %}
                </div>
            </div>

        </div>
    </div>
</div>

<!-- ========================================== -->
<!-- MODALES -->
<!-- ========================================== -->

{# Modal Générer l'export brut #}
<div class=\"modal fade\" id=\"confirmGenerateRawModal\" tabindex=\"-1\" data-bs-backdrop=\"static\">
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

{# Modal Remplacer le rapport #}
<div class=\"modal fade\" id=\"confirmReplaceModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <form method=\"post\" action=\"{{ path('super_admin_analysis_replace_report', {'id': request.id}) }}\" enctype=\"multipart/form-data\" id=\"replaceReportFormModal\">
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

{# Modal Réessayer #}
<div class=\"modal fade\" id=\"confirmRetryModal\" tabindex=\"-1\">
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

{# Modal Forcer le statut #}
<div class=\"modal fade\" id=\"confirmForcePaidModal\" tabindex=\"-1\">
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

{# Modal Annuler #}
<div class=\"modal fade\" id=\"confirmCancelModal\" tabindex=\"-1\">
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

{# Modal Relancer (Expiré) #}
<div class=\"modal fade\" id=\"confirmRenewModal\" tabindex=\"-1\">
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
{% endblock %}


{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    const requestId = {{ request.id }};
    
    // ==================== GÉNÉRATION EXPORT BRUT ====================
    const generateRawBtn = document.getElementById('confirmGenerateRawBtn');
    if (generateRawBtn) {
        generateRawBtn.addEventListener('click', function() {
            const form = document.createElement('form');
            form.method = 'POST';
            form.action = '{{ path('super_admin_analysis_generate_raw', {'id': request.id}) }}';
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
            form.action = '{{ path('super_admin_analysis_retry', {'id': request.id}) }}';
            document.body.appendChild(form);
            form.submit();
        });
    }
    
    const forcePaidBtn = document.getElementById('confirmForcePaidBtn');
    if (forcePaidBtn) {
        forcePaidBtn.addEventListener('click', function() {
            const form = document.createElement('form');
            form.method = 'POST';
            form.action = '{{ path('super_admin_analysis_force_to_paid', {'id': request.id}) }}';
            document.body.appendChild(form);
            form.submit();
        });
    }
    
    const cancelBtn = document.getElementById('confirmCancelBtn');
    if (cancelBtn) {
        cancelBtn.addEventListener('click', function() {
            const form = document.createElement('form');
            form.method = 'POST';
            form.action = '{{ path('super_admin_analysis_cancel', {'id': request.id}) }}';
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
            form.action = '{{ path('super_admin_analysis_force_to_paid', {'id': request.id}) }}';
            document.body.appendChild(form);
            form.submit();
        });
    }
    
    // ==================== LIEN DE PAIEMENT ====================
    const generateLinkBtn = document.getElementById('generatePaymentLinkBtn');
    const sendEmailBtn = document.getElementById('sendEmailLinkBtn');
    const paymentLinkInput = document.getElementById('paymentLinkInput');
    const copyBtn = document.getElementById('copyPaymentLinkBtn');
    
    if (generateLinkBtn && {{ request.status == 'pending' ? 'true' : 'false' }}) {
        generateLinkBtn.addEventListener('click', async function() {
            generateLinkBtn.disabled = true;
            generateLinkBtn.innerHTML = '<span class=\"spinner-border spinner-border-sm me-1\"></span> Génération...';
            
            try {
                const response = await fetch('{{ path('super_admin_analysis_payment_link', {'id': request.id}) }}');
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
                const response = await fetch('{{ path('super_admin_analysis_send_payment_link', {'id': request.id}) }}', {
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
{% endblock %}", "super_admin/analysis_request/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\super_admin\\analysis_request\\show.html.twig");
    }
}
