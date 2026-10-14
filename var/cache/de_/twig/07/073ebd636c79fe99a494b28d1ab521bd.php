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

/* super_admin/payment/show.html.twig */
class __TwigTemplate_19b8bb25369d58bcf7528055befe233d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "super_admin/payment/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "super_admin/payment/show.html.twig"));

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

        yield "Paiement - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 4, $this->source); })()), "hmaService", [], "any", false, false, false, 4), "companyName", [], "any", false, false, false, 4), "html", null, true);
        
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
        padding: 0.75rem;
        margin-bottom: 0.5rem;
    }
    .status-badge {
        font-size: 0.8rem;
        padding: 0.3rem 0.8rem;
        border-radius: 2rem;
        display: inline-block;
    }
    .status-badge.completed, .status-badge.paid { background: #d1fae5; color: #065f46; }
    .status-badge.pending { background: #fef3c7; color: #b45309; }
    .status-badge.failed { background: #fee2e2; color: #991b1b; }
    .amount-card {
        background: linear-gradient(135deg, #0463f1 0%, #0350c4 100%);
        color: white;
        border-radius: 1rem;
        padding: 0.75rem;
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
    .info-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0.5rem 0;
        border-bottom: 1px solid #e2e8f0;
    }
    .info-row:last-child {
        border-bottom: none;
    }
    .info-label {
        color: #64748b;
        font-size: 0.75rem;
    }
    .info-value {
        font-weight: 600;
        font-size: 0.8rem;
        text-align: right;
        word-break: break-word;
        max-width: 60%;
    }
    .detail-card {
        background: #f8fafc;
        border-radius: 0.75rem;
        padding: 0.75rem;
        margin-top: 0.75rem;
    }
    .detail-card pre {
        background: #1e293b;
        color: #e2e8f0;
        padding: 0.5rem;
        border-radius: 0.5rem;
        font-size: 0.6rem;
        overflow-x: auto;
        max-height: 200px;
        margin: 0;
    }
    .transaction-id {
        word-break: break-all;
        font-family: monospace;
        font-size: 0.7rem;
    }

    /* ========================================
       RESPONSIVE - MEDIA QUERIES
    ======================================== */
    
    /* Tablette */
    @media (max-width: 768px) {
        .info-card {
            padding: 0.5rem;
        }
        .status-badge {
            font-size: 0.7rem;
            padding: 0.2rem 0.6rem;
        }
        .amount-card {
            padding: 0.75rem;
        }
        .amount-card .h1 {
            font-size: 1.8rem !important;
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
        .h1, .h3 {
            font-size: 1.1rem !important;
        }
        .h5 {
            font-size: 0.85rem !important;
        }
        .text-muted {
            font-size: 0.7rem !important;
        }
        .breadcrumb {
            font-size: 0.7rem !important;
        }
        .info-row {
            padding: 0.4rem 0;
        }
        .info-label {
            font-size: 0.7rem;
        }
        .info-value {
            font-size: 0.7rem;
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
        .text-muted {
            font-size: 0.65rem !important;
        }
        
        /* Boutons */
        .btn {
            font-size: 0.6rem !important;
            padding: 0.15rem 0.4rem !important;
        }
        .btn i {
            font-size: 0.6rem !important;
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
        .card-body .row.g-3 {
            --bs-gutter-y: 0.25rem;
            --bs-gutter-x: 0.25rem;
        }
        
        /* Info cards */
        .info-card {
            padding: 0.4rem 0.5rem !important;
            border-radius: 0.5rem !important;
            margin-bottom: 0.3rem !important;
        }
        .info-card .fw-bold {
            font-size: 0.7rem !important;
        }
        .info-card .text-muted {
            font-size: 0.5rem !important;
        }
        .info-card .mt-1 {
            margin-top: 0.15rem !important;
        }
        .info-card .mt-2 {
            margin-top: 0.25rem !important;
        }
        
        /* Status badge */
        .status-badge {
            font-size: 0.55rem !important;
            padding: 0.15rem 0.4rem !important;
        }
        .status-badge i {
            font-size: 0.5rem !important;
        }
        
        /* Badge */
        .badge {
            font-size: 0.5rem !important;
            padding: 0.15rem 0.3rem !important;
        }
        
        /* Amount card */
        .amount-card {
            padding: 0.5rem !important;
            border-radius: 0.75rem !important;
        }
        .amount-card .h1 {
            font-size: 1.3rem !important;
        }
        .amount-card .opacity-75 {
            font-size: 0.6rem !important;
        }
        .amount-card .rounded-circle {
            width: 36px !important;
            height: 36px !important;
            padding: 0.5rem !important;
        }
        .amount-card .rounded-circle i {
            font-size: 1.2rem !important;
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
        .company-initials {
            margin: 0 auto !important;
        }
        
        /* Info rows */
        .info-row {
            padding: 0.3rem 0 !important;
            flex-wrap: wrap !important;
        }
        .info-label {
            font-size: 0.55rem !important;
        }
        .info-value {
            font-size: 0.6rem !important;
            text-align: right;
            max-width: 55%;
        }
        
        /* Transaction ID */
        .transaction-id {
            font-size: 0.55rem !important;
            word-break: break-all;
        }
        
        /* Detail card */
        .detail-card {
            padding: 0.4rem !important;
        }
        .detail-card pre {
            font-size: 0.5rem !important;
            padding: 0.3rem !important;
            max-height: 150px !important;
        }
        
        /* Grid */
        .row.g-4 {
            --bs-gutter-y: 0.5rem;
            --bs-gutter-x: 0.5rem;
        }
        .mb-4 {
            margin-bottom: 0.5rem !important;
        }
        
        /* Désactiver hover */
        .info-card:hover {
            transform: none !important;
        }
    }

    /* Très petits écrans */
    @media (max-width: 400px) {
        .h1, .h3 {
            font-size: 0.85rem !important;
        }
        .info-card .fw-bold {
            font-size: 0.6rem !important;
        }
        .amount-card .h1 {
            font-size: 1.1rem !important;
        }
        .info-value {
            font-size: 0.55rem !important;
        }
        .btn {
            font-size: 0.5rem !important;
            padding: 0.1rem 0.3rem !important;
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
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 333
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

        // line 334
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
        // line 344
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_payment_index");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-credit-card me-1\"></i> Paiements
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active small\">Détails</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-receipt text-primary me-2\"></i>
                <span class=\"d-none d-sm-inline\">Détails du paiement</span>
                <span class=\"d-inline d-sm-none\">Paiement</span>
            </h1>
            <p class=\"text-muted mt-1 small\">
                Transaction effectuée par ";
        // line 357
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 357, $this->source); })()), "hmaService", [], "any", false, false, false, 357), "companyName", [], "any", false, false, false, 357), "html", null, true);
        yield "
            </p>
        </div>
        <div class=\"w-100 w-sm-auto\">
            <a href=\"";
        // line 361
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_payment_index");
        yield "\" class=\"btn btn-outline-secondary btn-sm w-100 w-sm-auto\">
                <i class=\"fas fa-arrow-left me-1\"></i> <span class=\"d-none d-sm-inline\">Retour</span>
            </a>
        </div>
    </div>

    <!-- ==========================================
         CONTENU PRINCIPAL
    ========================================== -->
    <div class=\"row g-2 g-md-4\">

        <!-- Colonne gauche - Infos paiement -->
        <div class=\"col-12 col-xl-7\">
            <div class=\"card border-0 shadow-sm mb-3 mb-md-4\">
                <div class=\"card-header bg-white py-2 py-md-3\">
                    <h5 class=\"mb-0 fw-semibold fs-6 fs-md-5\">
                        <i class=\"fas fa-info-circle me-2 text-primary\"></i>
                        <span class=\"d-none d-sm-inline\">Détails du paiement</span>
                        <span class=\"d-inline d-sm-none\">Détails</span>
                    </h5>
                </div>
                <div class=\"card-body p-2 p-md-3\">
                    <div class=\"row g-1 g-md-3\">
                        <!-- Statut -->
                        <div class=\"col-6 col-md-6\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">Statut</small>
                                <div class=\"mt-1\">
                                    <span class=\"status-badge ";
        // line 389
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 389, $this->source); })()), "status", [], "any", false, false, false, 389), "html", null, true);
        yield "\" style=\"font-size:0.55rem; padding:0.15rem 0.4rem;\">
                                        ";
        // line 390
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 390, $this->source); })()), "status", [], "any", false, false, false, 390) == "completed") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 390, $this->source); })()), "status", [], "any", false, false, false, 390) == "paid"))) {
            // line 391
            yield "                                            <i class=\"fas fa-check-circle me-1\" style=\"font-size:0.5rem;\"></i> <span class=\"d-none d-sm-inline\">Payé</span>
                                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 392
(isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 392, $this->source); })()), "status", [], "any", false, false, false, 392) == "pending")) {
            // line 393
            yield "                                            <i class=\"fas fa-clock me-1\" style=\"font-size:0.5rem;\"></i> <span class=\"d-none d-sm-inline\">En attente</span>
                                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 394
(isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 394, $this->source); })()), "status", [], "any", false, false, false, 394) == "failed")) {
            // line 395
            yield "                                            <i class=\"fas fa-times-circle me-1\" style=\"font-size:0.5rem;\"></i> <span class=\"d-none d-sm-inline\">Échoué</span>
                                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 396
(isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 396, $this->source); })()), "status", [], "any", false, false, false, 396) == "refunded")) {
            // line 397
            yield "                                            <i class=\"fas fa-undo-alt me-1\" style=\"font-size:0.5rem;\"></i> <span class=\"d-none d-sm-inline\">Remboursé</span>
                                        ";
        }
        // line 399
        yield "                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Mode paiement -->
                        <div class=\"col-6 col-md-6\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">Mode de paiement</small>
                                <div class=\"fw-bold mt-1 small\">
                                    ";
        // line 408
        $context["methodLabels"] = ["card" => "💳 Carte", "mobile_money" => "📱 Mobile Money", "transfer" => "🏦 Virement", "cash" => "💰 Espèces"];
        // line 414
        yield "                                    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, ($context["methodLabels"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 414, $this->source); })()), "paymentMethod", [], "any", false, false, false, 414), [], "array", true, true, false, 414)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["methodLabels"]) || array_key_exists("methodLabels", $context) ? $context["methodLabels"] : (function () { throw new RuntimeError('Variable "methodLabels" does not exist.', 414, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 414, $this->source); })()), "paymentMethod", [], "any", false, false, false, 414), [], "array", false, false, false, 414), CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 414, $this->source); })()), "paymentMethod", [], "any", false, false, false, 414))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 414, $this->source); })()), "paymentMethod", [], "any", false, false, false, 414))), 0, 15), "html", null, true);
        yield "
                                </div>
                            </div>
                        </div>
                        <!-- Date paiement -->
                        <div class=\"col-6 col-md-6\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">Date du paiement</small>
                                <div class=\"fw-bold mt-1 small\">
                                    ";
        // line 423
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 423, $this->source); })()), "paymentDate", [], "any", false, false, false, 423)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 423, $this->source); })()), "paymentDate", [], "any", false, false, false, 423), "d/m/Y H:i:s"), "html", null, true)) : ("Non définie"));
        yield "
                                </div>
                            </div>
                        </div>
                        <!-- Date création -->
                        <div class=\"col-6 col-md-6\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">Date de création</small>
                                <div class=\"fw-bold mt-1 small\">
                                    ";
        // line 432
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 432, $this->source); })()), "createdAt", [], "any", false, false, false, 432), "d/m/Y H:i:s"), "html", null, true);
        yield "
                                </div>
                            </div>
                        </div>
                        <!-- ID Transaction -->
                        <div class=\"col-12\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">ID Transaction</small>
                                <div class=\"fw-bold mt-1 transaction-id small\">
                                    ";
        // line 441
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "transactionId", [], "any", true, true, false, 441)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 441, $this->source); })()), "transactionId", [], "any", false, false, false, 441), "Non défini")) : ("Non défini")), "html", null, true);
        yield "
                                </div>
                            </div>
                        </div>
                        <!-- Numéro facture -->
                        <div class=\"col-12\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">Numéro de facture</small>
                                <div class=\"fw-bold mt-1 small\">
                                    ";
        // line 450
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "invoiceNumber", [], "any", true, true, false, 450)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 450, $this->source); })()), "invoiceNumber", [], "any", false, false, false, 450), "Non défini")) : ("Non défini")), "html", null, true);
        yield "
                                </div>
                            </div>
                        </div>
                        ";
        // line 454
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 454, $this->source); })()), "notes", [], "any", false, false, false, 454)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 455
            yield "                        <div class=\"col-12\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">Notes</small>
                                <div class=\"mt-1 small\">";
            // line 458
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 458, $this->source); })()), "notes", [], "any", false, false, false, 458), "html", null, true));
            yield "</div>
                            </div>
                        </div>
                        ";
        }
        // line 462
        yield "                    </div>
                </div>
            </div>

            <!-- Abonnement associé -->
            ";
        // line 467
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 467, $this->source); })()), "subscription", [], "any", false, false, false, 467)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 468
            yield "            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-2 py-md-3\">
                    <h5 class=\"mb-0 fw-semibold fs-6 fs-md-5\">
                        <i class=\"fas fa-tags me-2 text-primary\"></i>
                        <span class=\"d-none d-sm-inline\">Abonnement associé</span>
                        <span class=\"d-inline d-sm-none\">Abonnement</span>
                    </h5>
                </div>
                <div class=\"card-body p-2 p-md-3\">
                    <div class=\"row g-1 g-md-3\">
                        <!-- Période -->
                        <div class=\"col-6 col-md-6\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">Période</small>
                                <div class=\"fw-bold mt-1 small\">
                                    ";
            // line 483
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 483, $this->source); })()), "subscription", [], "any", false, false, false, 483), "startsAt", [], "any", false, false, false, 483)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 483, $this->source); })()), "subscription", [], "any", false, false, false, 483), "startsAt", [], "any", false, false, false, 483), "d/m/Y"), "html", null, true)) : ("?"));
            yield "
                                    <i class=\"fas fa-arrow-right mx-1 text-muted\" style=\"font-size:0.5rem;\"></i>
                                    ";
            // line 485
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 485, $this->source); })()), "subscription", [], "any", false, false, false, 485), "endsAt", [], "any", false, false, false, 485)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 485, $this->source); })()), "subscription", [], "any", false, false, false, 485), "endsAt", [], "any", false, false, false, 485), "d/m/Y"), "html", null, true)) : ("?"));
            yield "
                                </div>
                                ";
            // line 487
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 487, $this->source); })()), "subscription", [], "any", false, false, false, 487), "endsAt", [], "any", false, false, false, 487)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 488
                yield "                                    ";
                $context["daysLeft"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 488, $this->source); })()), "subscription", [], "any", false, false, false, 488), "endsAt", [], "any", false, false, false, 488), "diff", [$this->extensions['Twig\Extension\CoreExtension']->convertDate()], "method", false, false, false, 488), "days", [], "any", false, false, false, 488);
                // line 489
                yield "                                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 489, $this->source); })()), "subscription", [], "any", false, false, false, 489), "endsAt", [], "any", false, false, false, 489) > $this->extensions['Twig\Extension\CoreExtension']->convertDate())) {
                    // line 490
                    yield "                                        <small class=\"text-success d-block\" style=\"font-size:0.45rem;\">
                                            <i class=\"fas fa-hourglass-half me-1\"></i>";
                    // line 491
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["daysLeft"]) || array_key_exists("daysLeft", $context) ? $context["daysLeft"] : (function () { throw new RuntimeError('Variable "daysLeft" does not exist.', 491, $this->source); })()), "html", null, true);
                    yield " jours restants
                                        </small>
                                    ";
                } else {
                    // line 494
                    yield "                                        <small class=\"text-danger d-block\" style=\"font-size:0.45rem;\">
                                            <i class=\"fas fa-exclamation-circle me-1\"></i>Expiré
                                        </small>
                                    ";
                }
                // line 498
                yield "                                ";
            }
            // line 499
            yield "                            </div>
                        </div>
                        <!-- Plan -->
                        <div class=\"col-6 col-md-6\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">Plan</small>
                                <div class=\"fw-bold mt-1 small\">";
            // line 505
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 505, $this->source); })()), "subscription", [], "any", false, false, false, 505), "subscriptionPlan", [], "any", false, false, false, 505), "displayName", [], "any", false, false, false, 505), "html", null, true);
            yield "</div>
                            </div>
                        </div>
                        <!-- Période facturation -->
                        <div class=\"col-6 col-md-6\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">Facturation</small>
                                <div class=\"fw-bold mt-1 small\">
                                    ";
            // line 513
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 513, $this->source); })()), "subscription", [], "any", false, false, false, 513), "billingPeriod", [], "any", false, false, false, 513) == "monthly")) ? ("Mensuel") : ("Annuel"));
            yield "
                                </div>
                            </div>
                        </div>
                        <!-- Statut abonnement -->
                        <div class=\"col-6 col-md-6\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">Statut abonnement</small>
                                <div class=\"mt-1\">
                                    <span class=\"badge ";
            // line 522
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 522, $this->source); })()), "subscription", [], "any", false, false, false, 522), "status", [], "any", false, false, false, 522) == "active")) ? ("bg-success") : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 522, $this->source); })()), "subscription", [], "any", false, false, false, 522), "status", [], "any", false, false, false, 522) == "pending")) ? ("bg-warning") : ("bg-danger"))));
            yield "\" style=\"font-size:0.5rem;\">
                                        ";
            // line 523
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 523, $this->source); })()), "subscription", [], "any", false, false, false, 523), "status", [], "any", false, false, false, 523), 0, 8), "html", null, true);
            yield "
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"mt-2 mt-md-3\">
                        <a href=\"";
            // line 530
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_subscription_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 530, $this->source); })()), "subscription", [], "any", false, false, false, 530), "id", [], "any", false, false, false, 530)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary w-100 w-sm-auto\" style=\"font-size:0.6rem; padding:0.15rem 0.4rem;\">
                            <i class=\"fas fa-eye me-1\"></i> <span class=\"d-none d-sm-inline\">Voir l'abonnement</span>
                            <span class=\"d-inline d-sm-none\">Voir abonnement</span>
                        </a>
                    </div>
                </div>
            </div>
            ";
        }
        // line 538
        yield "        </div>

        <!-- Colonne droite - Montant et entreprise -->
        <div class=\"col-12 col-xl-5\">
            <!-- Montant -->
            <div class=\"amount-card p-3 p-md-4 mb-3 mb-md-4\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <small class=\"opacity-75 d-block\" style=\"font-size:0.6rem;\">Montant du paiement</small>
                        <div class=\"h1 mb-0 fw-bold\" style=\"font-size:1.5rem;\">";
        // line 547
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 547, $this->source); })()), "amount", [], "any", false, false, false, 547), 0, ",", " "), "html", null, true);
        yield " FCFA</div>
                    </div>
                    <div class=\"rounded-circle bg-white bg-opacity-20 p-2 p-md-3\">
                        <i class=\"fas fa-money-bill-wave\" style=\"font-size:1.2rem;\"></i>
                    </div>
                </div>
            </div>

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
        // line 565
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 565, $this->source); })()), "hmaService", [], "any", false, false, false, 565), "logo", [], "any", false, false, false, 565)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 566
            yield "                            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/logos/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 566, $this->source); })()), "hmaService", [], "any", false, false, false, 566), "logo", [], "any", false, false, false, 566))), "html", null, true);
            yield "\" 
                                 alt=\"";
            // line 567
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 567, $this->source); })()), "hmaService", [], "any", false, false, false, 567), "companyName", [], "any", false, false, false, 567), "html", null, true);
            yield "\" 
                                 class=\"company-logo\" 
                                 onerror=\"this.onerror=null; this.parentElement.innerHTML='<div class=\\'company-initials\\'>";
            // line 569
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 569, $this->source); })()), "hmaService", [], "any", false, false, false, 569), "companyName", [], "any", false, false, false, 569), 0, 2)), "html", null, true);
            yield "</div>';\">
                        ";
        } else {
            // line 571
            yield "                            <div class=\"company-initials\">
                                ";
            // line 572
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 572, $this->source); })()), "hmaService", [], "any", false, false, false, 572), "companyName", [], "any", false, false, false, 572), 0, 2)), "html", null, true);
            yield "
                            </div>
                        ";
        }
        // line 575
        yield "                    </div>
                    <div class=\"text-center mb-2 mb-md-3\">
                        <h5 class=\"mb-0 fs-6 fs-md-5\">";
        // line 577
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 577, $this->source); })()), "hmaService", [], "any", false, false, false, 577), "companyName", [], "any", false, false, false, 577), "html", null, true);
        yield "</h5>
                        <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">";
        // line 578
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 578, $this->source); })()), "hmaService", [], "any", false, false, false, 578), "subscriptionNumber", [], "any", false, false, false, 578), "html", null, true);
        yield "</small>
                    </div>
                    
                    <div class=\"info-row\">
                        <span class=\"info-label\">Type</span>
                        <span class=\"info-value\">
                            ";
        // line 584
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 584, $this->source); })()), "hmaService", [], "any", false, false, false, 584), "type", [], "any", false, false, false, 584) == "restaurant")) {
            // line 585
            yield "                                🍽️ Restaurant
                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 586
(isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 586, $this->source); })()), "hmaService", [], "any", false, false, false, 586), "type", [], "any", false, false, false, 586) == "commerce")) {
            // line 587
            yield "                                🛒 Commerce
                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 588
(isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 588, $this->source); })()), "hmaService", [], "any", false, false, false, 588), "type", [], "any", false, false, false, 588) == "service")) {
            // line 589
            yield "                                🛠️ Service
                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 590
(isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 590, $this->source); })()), "hmaService", [], "any", false, false, false, 590), "type", [], "any", false, false, false, 590) == "industry")) {
            // line 591
            yield "                                🏭 Industrie
                            ";
        } else {
            // line 593
            yield "                                🏢 ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "hmaService", [], "any", false, true, false, 593), "type", [], "any", true, true, false, 593)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 593, $this->source); })()), "hmaService", [], "any", false, false, false, 593), "type", [], "any", false, false, false, 593), "Non défini")) : ("Non défini"))), 0, 12), "html", null, true);
            yield "
                            ";
        }
        // line 595
        yield "                        </span>
                    </div>
                    <div class=\"info-row\">
                        <span class=\"info-label\">Email</span>
                        <span class=\"info-value\" style=\"font-size:0.65rem;\">";
        // line 599
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 599, $this->source); })()), "hmaService", [], "any", false, false, false, 599), "email", [], "any", false, false, false, 599), 0, 25), "html", null, true);
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 599, $this->source); })()), "hmaService", [], "any", false, false, false, 599), "email", [], "any", false, false, false, 599)) > 25)) {
            yield "...";
        }
        yield "</span>
                    </div>
                    <div class=\"info-row\">
                        <span class=\"info-label\">Téléphone</span>
                        <span class=\"info-value\">";
        // line 603
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "hmaService", [], "any", false, true, false, 603), "phone", [], "any", true, true, false, 603)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 603, $this->source); })()), "hmaService", [], "any", false, false, false, 603), "phone", [], "any", false, false, false, 603), "—")) : ("—")), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"info-row\">
                        <span class=\"info-label\">Date d'inscription</span>
                        <span class=\"info-value\">";
        // line 607
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 607, $this->source); })()), "hmaService", [], "any", false, false, false, 607), "createdAt", [], "any", false, false, false, 607), "d/m/Y"), "html", null, true);
        yield "</span>
                    </div>
                    
                    <div class=\"mt-2 mt-md-3\">
                        <a href=\"";
        // line 611
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_super_admin_hma_service_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 611, $this->source); })()), "hmaService", [], "any", false, false, false, 611), "id", [], "any", false, false, false, 611)]), "html", null, true);
        yield "\" class=\"btn btn-sm btn-outline-primary w-100\" style=\"font-size:0.6rem; padding:0.15rem 0.4rem;\">
                            <i class=\"fas fa-eye me-1\"></i> <span class=\"d-none d-sm-inline\">Voir les détails</span>
                            <span class=\"d-inline d-sm-none\">Détails</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Données techniques -->
            ";
        // line 620
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["payment"] ?? null), "paymentData", [], "any", true, true, false, 620) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 620, $this->source); })()), "paymentData", [], "any", false, false, false, 620))) {
            // line 621
            yield "            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-2 py-md-3\">
                    <h5 class=\"mb-0 fw-semibold fs-6 fs-md-5\">
                        <i class=\"fas fa-code me-2 text-primary\"></i>
                        <span class=\"d-none d-sm-inline\">Données techniques</span>
                        <span class=\"d-inline d-sm-none\">Technique</span>
                    </h5>
                </div>
                <div class=\"card-body p-2 p-md-3\">
                    <details>
                        <summary class=\"text-muted small\" style=\"cursor: pointer; font-size:0.6rem;\">
                            <i class=\"fas fa-info-circle me-1\"></i> Détails complets
                        </summary>
                        <div class=\"detail-card\">
                            <pre>";
            // line 635
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 635, $this->source); })()), "paymentData", [], "any", false, false, false, 635), Twig\Extension\CoreExtension::constant("JSON_PRETTY_PRINT")), "html", null, true);
            yield "</pre>
                        </div>
                    </details>
                </div>
            </div>
            ";
        }
        // line 641
        yield "        </div>
    </div>
</div>
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
        return "super_admin/payment/show.html.twig";
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
        return array (  914 => 641,  905 => 635,  889 => 621,  887 => 620,  875 => 611,  868 => 607,  861 => 603,  851 => 599,  845 => 595,  839 => 593,  835 => 591,  833 => 590,  830 => 589,  828 => 588,  825 => 587,  823 => 586,  820 => 585,  818 => 584,  809 => 578,  805 => 577,  801 => 575,  795 => 572,  792 => 571,  787 => 569,  782 => 567,  777 => 566,  775 => 565,  754 => 547,  743 => 538,  732 => 530,  722 => 523,  718 => 522,  706 => 513,  695 => 505,  687 => 499,  684 => 498,  678 => 494,  672 => 491,  669 => 490,  666 => 489,  663 => 488,  661 => 487,  656 => 485,  651 => 483,  634 => 468,  632 => 467,  625 => 462,  618 => 458,  613 => 455,  611 => 454,  604 => 450,  592 => 441,  580 => 432,  568 => 423,  555 => 414,  553 => 408,  542 => 399,  538 => 397,  536 => 396,  533 => 395,  531 => 394,  528 => 393,  526 => 392,  523 => 391,  521 => 390,  517 => 389,  486 => 361,  479 => 357,  463 => 344,  451 => 334,  438 => 333,  102 => 7,  89 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/super_admin/payment/show.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Paiement - {{ payment.hmaService.companyName }}{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    .info-card {
        background: #f8fafc;
        border-radius: 1rem;
        padding: 0.75rem;
        margin-bottom: 0.5rem;
    }
    .status-badge {
        font-size: 0.8rem;
        padding: 0.3rem 0.8rem;
        border-radius: 2rem;
        display: inline-block;
    }
    .status-badge.completed, .status-badge.paid { background: #d1fae5; color: #065f46; }
    .status-badge.pending { background: #fef3c7; color: #b45309; }
    .status-badge.failed { background: #fee2e2; color: #991b1b; }
    .amount-card {
        background: linear-gradient(135deg, #0463f1 0%, #0350c4 100%);
        color: white;
        border-radius: 1rem;
        padding: 0.75rem;
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
    .info-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0.5rem 0;
        border-bottom: 1px solid #e2e8f0;
    }
    .info-row:last-child {
        border-bottom: none;
    }
    .info-label {
        color: #64748b;
        font-size: 0.75rem;
    }
    .info-value {
        font-weight: 600;
        font-size: 0.8rem;
        text-align: right;
        word-break: break-word;
        max-width: 60%;
    }
    .detail-card {
        background: #f8fafc;
        border-radius: 0.75rem;
        padding: 0.75rem;
        margin-top: 0.75rem;
    }
    .detail-card pre {
        background: #1e293b;
        color: #e2e8f0;
        padding: 0.5rem;
        border-radius: 0.5rem;
        font-size: 0.6rem;
        overflow-x: auto;
        max-height: 200px;
        margin: 0;
    }
    .transaction-id {
        word-break: break-all;
        font-family: monospace;
        font-size: 0.7rem;
    }

    /* ========================================
       RESPONSIVE - MEDIA QUERIES
    ======================================== */
    
    /* Tablette */
    @media (max-width: 768px) {
        .info-card {
            padding: 0.5rem;
        }
        .status-badge {
            font-size: 0.7rem;
            padding: 0.2rem 0.6rem;
        }
        .amount-card {
            padding: 0.75rem;
        }
        .amount-card .h1 {
            font-size: 1.8rem !important;
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
        .h1, .h3 {
            font-size: 1.1rem !important;
        }
        .h5 {
            font-size: 0.85rem !important;
        }
        .text-muted {
            font-size: 0.7rem !important;
        }
        .breadcrumb {
            font-size: 0.7rem !important;
        }
        .info-row {
            padding: 0.4rem 0;
        }
        .info-label {
            font-size: 0.7rem;
        }
        .info-value {
            font-size: 0.7rem;
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
        .text-muted {
            font-size: 0.65rem !important;
        }
        
        /* Boutons */
        .btn {
            font-size: 0.6rem !important;
            padding: 0.15rem 0.4rem !important;
        }
        .btn i {
            font-size: 0.6rem !important;
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
        .card-body .row.g-3 {
            --bs-gutter-y: 0.25rem;
            --bs-gutter-x: 0.25rem;
        }
        
        /* Info cards */
        .info-card {
            padding: 0.4rem 0.5rem !important;
            border-radius: 0.5rem !important;
            margin-bottom: 0.3rem !important;
        }
        .info-card .fw-bold {
            font-size: 0.7rem !important;
        }
        .info-card .text-muted {
            font-size: 0.5rem !important;
        }
        .info-card .mt-1 {
            margin-top: 0.15rem !important;
        }
        .info-card .mt-2 {
            margin-top: 0.25rem !important;
        }
        
        /* Status badge */
        .status-badge {
            font-size: 0.55rem !important;
            padding: 0.15rem 0.4rem !important;
        }
        .status-badge i {
            font-size: 0.5rem !important;
        }
        
        /* Badge */
        .badge {
            font-size: 0.5rem !important;
            padding: 0.15rem 0.3rem !important;
        }
        
        /* Amount card */
        .amount-card {
            padding: 0.5rem !important;
            border-radius: 0.75rem !important;
        }
        .amount-card .h1 {
            font-size: 1.3rem !important;
        }
        .amount-card .opacity-75 {
            font-size: 0.6rem !important;
        }
        .amount-card .rounded-circle {
            width: 36px !important;
            height: 36px !important;
            padding: 0.5rem !important;
        }
        .amount-card .rounded-circle i {
            font-size: 1.2rem !important;
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
        .company-initials {
            margin: 0 auto !important;
        }
        
        /* Info rows */
        .info-row {
            padding: 0.3rem 0 !important;
            flex-wrap: wrap !important;
        }
        .info-label {
            font-size: 0.55rem !important;
        }
        .info-value {
            font-size: 0.6rem !important;
            text-align: right;
            max-width: 55%;
        }
        
        /* Transaction ID */
        .transaction-id {
            font-size: 0.55rem !important;
            word-break: break-all;
        }
        
        /* Detail card */
        .detail-card {
            padding: 0.4rem !important;
        }
        .detail-card pre {
            font-size: 0.5rem !important;
            padding: 0.3rem !important;
            max-height: 150px !important;
        }
        
        /* Grid */
        .row.g-4 {
            --bs-gutter-y: 0.5rem;
            --bs-gutter-x: 0.5rem;
        }
        .mb-4 {
            margin-bottom: 0.5rem !important;
        }
        
        /* Désactiver hover */
        .info-card:hover {
            transform: none !important;
        }
    }

    /* Très petits écrans */
    @media (max-width: 400px) {
        .h1, .h3 {
            font-size: 0.85rem !important;
        }
        .info-card .fw-bold {
            font-size: 0.6rem !important;
        }
        .amount-card .h1 {
            font-size: 1.1rem !important;
        }
        .info-value {
            font-size: 0.55rem !important;
        }
        .btn {
            font-size: 0.5rem !important;
            padding: 0.1rem 0.3rem !important;
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
                        <a href=\"{{ path('super_admin_payment_index') }}\" class=\"text-decoration-none\">
                            <i class=\"fas fa-credit-card me-1\"></i> Paiements
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active small\">Détails</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-receipt text-primary me-2\"></i>
                <span class=\"d-none d-sm-inline\">Détails du paiement</span>
                <span class=\"d-inline d-sm-none\">Paiement</span>
            </h1>
            <p class=\"text-muted mt-1 small\">
                Transaction effectuée par {{ payment.hmaService.companyName }}
            </p>
        </div>
        <div class=\"w-100 w-sm-auto\">
            <a href=\"{{ path('super_admin_payment_index') }}\" class=\"btn btn-outline-secondary btn-sm w-100 w-sm-auto\">
                <i class=\"fas fa-arrow-left me-1\"></i> <span class=\"d-none d-sm-inline\">Retour</span>
            </a>
        </div>
    </div>

    <!-- ==========================================
         CONTENU PRINCIPAL
    ========================================== -->
    <div class=\"row g-2 g-md-4\">

        <!-- Colonne gauche - Infos paiement -->
        <div class=\"col-12 col-xl-7\">
            <div class=\"card border-0 shadow-sm mb-3 mb-md-4\">
                <div class=\"card-header bg-white py-2 py-md-3\">
                    <h5 class=\"mb-0 fw-semibold fs-6 fs-md-5\">
                        <i class=\"fas fa-info-circle me-2 text-primary\"></i>
                        <span class=\"d-none d-sm-inline\">Détails du paiement</span>
                        <span class=\"d-inline d-sm-none\">Détails</span>
                    </h5>
                </div>
                <div class=\"card-body p-2 p-md-3\">
                    <div class=\"row g-1 g-md-3\">
                        <!-- Statut -->
                        <div class=\"col-6 col-md-6\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">Statut</small>
                                <div class=\"mt-1\">
                                    <span class=\"status-badge {{ payment.status }}\" style=\"font-size:0.55rem; padding:0.15rem 0.4rem;\">
                                        {% if payment.status == 'completed' or payment.status == 'paid' %}
                                            <i class=\"fas fa-check-circle me-1\" style=\"font-size:0.5rem;\"></i> <span class=\"d-none d-sm-inline\">Payé</span>
                                        {% elseif payment.status == 'pending' %}
                                            <i class=\"fas fa-clock me-1\" style=\"font-size:0.5rem;\"></i> <span class=\"d-none d-sm-inline\">En attente</span>
                                        {% elseif payment.status == 'failed' %}
                                            <i class=\"fas fa-times-circle me-1\" style=\"font-size:0.5rem;\"></i> <span class=\"d-none d-sm-inline\">Échoué</span>
                                        {% elseif payment.status == 'refunded' %}
                                            <i class=\"fas fa-undo-alt me-1\" style=\"font-size:0.5rem;\"></i> <span class=\"d-none d-sm-inline\">Remboursé</span>
                                        {% endif %}
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Mode paiement -->
                        <div class=\"col-6 col-md-6\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">Mode de paiement</small>
                                <div class=\"fw-bold mt-1 small\">
                                    {% set methodLabels = {
                                        'card': '💳 Carte',
                                        'mobile_money': '📱 Mobile Money',
                                        'transfer': '🏦 Virement',
                                        'cash': '💰 Espèces'
                                    } %}
                                    {{ methodLabels[payment.paymentMethod]|default(payment.paymentMethod)|slice(0, 15) }}
                                </div>
                            </div>
                        </div>
                        <!-- Date paiement -->
                        <div class=\"col-6 col-md-6\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">Date du paiement</small>
                                <div class=\"fw-bold mt-1 small\">
                                    {{ payment.paymentDate ? payment.paymentDate|date('d/m/Y H:i:s') : 'Non définie' }}
                                </div>
                            </div>
                        </div>
                        <!-- Date création -->
                        <div class=\"col-6 col-md-6\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">Date de création</small>
                                <div class=\"fw-bold mt-1 small\">
                                    {{ payment.createdAt|date('d/m/Y H:i:s') }}
                                </div>
                            </div>
                        </div>
                        <!-- ID Transaction -->
                        <div class=\"col-12\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">ID Transaction</small>
                                <div class=\"fw-bold mt-1 transaction-id small\">
                                    {{ payment.transactionId|default('Non défini') }}
                                </div>
                            </div>
                        </div>
                        <!-- Numéro facture -->
                        <div class=\"col-12\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">Numéro de facture</small>
                                <div class=\"fw-bold mt-1 small\">
                                    {{ payment.invoiceNumber|default('Non défini') }}
                                </div>
                            </div>
                        </div>
                        {% if payment.notes %}
                        <div class=\"col-12\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">Notes</small>
                                <div class=\"mt-1 small\">{{ payment.notes|nl2br }}</div>
                            </div>
                        </div>
                        {% endif %}
                    </div>
                </div>
            </div>

            <!-- Abonnement associé -->
            {% if payment.subscription %}
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-2 py-md-3\">
                    <h5 class=\"mb-0 fw-semibold fs-6 fs-md-5\">
                        <i class=\"fas fa-tags me-2 text-primary\"></i>
                        <span class=\"d-none d-sm-inline\">Abonnement associé</span>
                        <span class=\"d-inline d-sm-none\">Abonnement</span>
                    </h5>
                </div>
                <div class=\"card-body p-2 p-md-3\">
                    <div class=\"row g-1 g-md-3\">
                        <!-- Période -->
                        <div class=\"col-6 col-md-6\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">Période</small>
                                <div class=\"fw-bold mt-1 small\">
                                    {{ payment.subscription.startsAt ? payment.subscription.startsAt|date('d/m/Y') : '?' }}
                                    <i class=\"fas fa-arrow-right mx-1 text-muted\" style=\"font-size:0.5rem;\"></i>
                                    {{ payment.subscription.endsAt ? payment.subscription.endsAt|date('d/m/Y') : '?' }}
                                </div>
                                {% if payment.subscription.endsAt %}
                                    {% set daysLeft = payment.subscription.endsAt.diff(date()).days %}
                                    {% if payment.subscription.endsAt > date() %}
                                        <small class=\"text-success d-block\" style=\"font-size:0.45rem;\">
                                            <i class=\"fas fa-hourglass-half me-1\"></i>{{ daysLeft }} jours restants
                                        </small>
                                    {% else %}
                                        <small class=\"text-danger d-block\" style=\"font-size:0.45rem;\">
                                            <i class=\"fas fa-exclamation-circle me-1\"></i>Expiré
                                        </small>
                                    {% endif %}
                                {% endif %}
                            </div>
                        </div>
                        <!-- Plan -->
                        <div class=\"col-6 col-md-6\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">Plan</small>
                                <div class=\"fw-bold mt-1 small\">{{ payment.subscription.subscriptionPlan.displayName }}</div>
                            </div>
                        </div>
                        <!-- Période facturation -->
                        <div class=\"col-6 col-md-6\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">Facturation</small>
                                <div class=\"fw-bold mt-1 small\">
                                    {{ payment.subscription.billingPeriod == 'monthly' ? 'Mensuel' : 'Annuel' }}
                                </div>
                            </div>
                        </div>
                        <!-- Statut abonnement -->
                        <div class=\"col-6 col-md-6\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">Statut abonnement</small>
                                <div class=\"mt-1\">
                                    <span class=\"badge {{ payment.subscription.status == 'active' ? 'bg-success' : (payment.subscription.status == 'pending' ? 'bg-warning' : 'bg-danger') }}\" style=\"font-size:0.5rem;\">
                                        {{ payment.subscription.status|slice(0, 8) }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"mt-2 mt-md-3\">
                        <a href=\"{{ path('super_admin_subscription_show', {'id': payment.subscription.id}) }}\" class=\"btn btn-sm btn-outline-primary w-100 w-sm-auto\" style=\"font-size:0.6rem; padding:0.15rem 0.4rem;\">
                            <i class=\"fas fa-eye me-1\"></i> <span class=\"d-none d-sm-inline\">Voir l'abonnement</span>
                            <span class=\"d-inline d-sm-none\">Voir abonnement</span>
                        </a>
                    </div>
                </div>
            </div>
            {% endif %}
        </div>

        <!-- Colonne droite - Montant et entreprise -->
        <div class=\"col-12 col-xl-5\">
            <!-- Montant -->
            <div class=\"amount-card p-3 p-md-4 mb-3 mb-md-4\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <small class=\"opacity-75 d-block\" style=\"font-size:0.6rem;\">Montant du paiement</small>
                        <div class=\"h1 mb-0 fw-bold\" style=\"font-size:1.5rem;\">{{ payment.amount|number_format(0, ',', ' ') }} FCFA</div>
                    </div>
                    <div class=\"rounded-circle bg-white bg-opacity-20 p-2 p-md-3\">
                        <i class=\"fas fa-money-bill-wave\" style=\"font-size:1.2rem;\"></i>
                    </div>
                </div>
            </div>

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
                        {% if payment.hmaService.logo %}
                            <img src=\"{{ asset('uploads/logos/' ~ payment.hmaService.logo) }}\" 
                                 alt=\"{{ payment.hmaService.companyName }}\" 
                                 class=\"company-logo\" 
                                 onerror=\"this.onerror=null; this.parentElement.innerHTML='<div class=\\'company-initials\\'>{{ payment.hmaService.companyName|slice(0,2)|upper }}</div>';\">
                        {% else %}
                            <div class=\"company-initials\">
                                {{ payment.hmaService.companyName|slice(0,2)|upper }}
                            </div>
                        {% endif %}
                    </div>
                    <div class=\"text-center mb-2 mb-md-3\">
                        <h5 class=\"mb-0 fs-6 fs-md-5\">{{ payment.hmaService.companyName }}</h5>
                        <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">{{ payment.hmaService.subscriptionNumber }}</small>
                    </div>
                    
                    <div class=\"info-row\">
                        <span class=\"info-label\">Type</span>
                        <span class=\"info-value\">
                            {% if payment.hmaService.type == 'restaurant' %}
                                🍽️ Restaurant
                            {% elseif payment.hmaService.type == 'commerce' %}
                                🛒 Commerce
                            {% elseif payment.hmaService.type == 'service' %}
                                🛠️ Service
                            {% elseif payment.hmaService.type == 'industry' %}
                                🏭 Industrie
                            {% else %}
                                🏢 {{ payment.hmaService.type|default('Non défini')|capitalize|slice(0, 12) }}
                            {% endif %}
                        </span>
                    </div>
                    <div class=\"info-row\">
                        <span class=\"info-label\">Email</span>
                        <span class=\"info-value\" style=\"font-size:0.65rem;\">{{ payment.hmaService.email|slice(0, 25) }}{% if payment.hmaService.email|length > 25 %}...{% endif %}</span>
                    </div>
                    <div class=\"info-row\">
                        <span class=\"info-label\">Téléphone</span>
                        <span class=\"info-value\">{{ payment.hmaService.phone|default('—') }}</span>
                    </div>
                    <div class=\"info-row\">
                        <span class=\"info-label\">Date d'inscription</span>
                        <span class=\"info-value\">{{ payment.hmaService.createdAt|date('d/m/Y') }}</span>
                    </div>
                    
                    <div class=\"mt-2 mt-md-3\">
                        <a href=\"{{ path('app_super_admin_hma_service_show', {'id': payment.hmaService.id}) }}\" class=\"btn btn-sm btn-outline-primary w-100\" style=\"font-size:0.6rem; padding:0.15rem 0.4rem;\">
                            <i class=\"fas fa-eye me-1\"></i> <span class=\"d-none d-sm-inline\">Voir les détails</span>
                            <span class=\"d-inline d-sm-none\">Détails</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Données techniques -->
            {% if payment.paymentData is defined and payment.paymentData %}
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-2 py-md-3\">
                    <h5 class=\"mb-0 fw-semibold fs-6 fs-md-5\">
                        <i class=\"fas fa-code me-2 text-primary\"></i>
                        <span class=\"d-none d-sm-inline\">Données techniques</span>
                        <span class=\"d-inline d-sm-none\">Technique</span>
                    </h5>
                </div>
                <div class=\"card-body p-2 p-md-3\">
                    <details>
                        <summary class=\"text-muted small\" style=\"cursor: pointer; font-size:0.6rem;\">
                            <i class=\"fas fa-info-circle me-1\"></i> Détails complets
                        </summary>
                        <div class=\"detail-card\">
                            <pre>{{ payment.paymentData|json_encode(constant('JSON_PRETTY_PRINT')) }}</pre>
                        </div>
                    </details>
                </div>
            </div>
            {% endif %}
        </div>
    </div>
</div>
{% endblock %}", "super_admin/payment/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\super_admin\\payment\\show.html.twig");
    }
}
