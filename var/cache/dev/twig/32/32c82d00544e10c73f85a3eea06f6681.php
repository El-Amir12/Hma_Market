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

/* super_admin/subscription/show.html.twig */
class __TwigTemplate_e72fab962c7f6b1c2ba42d4d929d99d8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "super_admin/subscription/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "super_admin/subscription/show.html.twig"));

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

        yield "Abonnement #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 4, $this->source); })()), "hmaService", [], "any", false, false, false, 4), "companyName", [], "any", false, false, false, 4), "html", null, true);
        
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
    .badge-status {
        padding: 0.35rem 0.85rem;
        border-radius: 2rem;
        font-weight: 500;
        font-size: 0.75rem;
        white-space: nowrap;
    }
    .badge-status.active { background: #d1fae5; color: #065f46; }
    .badge-status.pending { background: #fef3c7; color: #b45309; }
    .badge-status.expired { background: #fee2e2; color: #991b1b; }
    .badge-status.cancelled { background: #f1f5f9; color: #475569; }
    
    .payment-card {
        transition: all 0.2s ease;
        border-left: 4px solid;
        border-radius: 0.75rem;
        padding: 0.75rem;
    }
    .payment-card.completed { border-left-color: #10b981; }
    .payment-card.pending { border-left-color: #f59e0b; }
    .payment-card.failed { border-left-color: #ef4444; }
    .total-card {
        background: linear-gradient(135deg, #0463f1 0%, #0350c4 100%);
        color: white;
        border-radius: 1rem;
        padding: 0.75rem;
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
        .total-card {
            padding: 0.75rem;
        }
        .total-card .h2 {
            font-size: 1.5rem !important;
        }
        .payment-card {
            padding: 0.5rem;
        }
        .payment-card .fw-bold {
            font-size: 0.85rem;
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
        .badge-status {
            font-size: 0.65rem;
            padding: 0.2rem 0.5rem;
        }
        .breadcrumb {
            font-size: 0.7rem !important;
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
        .badge-status {
            font-size: 0.5rem !important;
            padding: 0.15rem 0.3rem !important;
        }
        .badge-status i {
            font-size: 0.5rem !important;
        }
        
        /* Badge */
        .badge {
            font-size: 0.5rem !important;
            padding: 0.15rem 0.3rem !important;
        }
        .badge.fs-6 {
            font-size: 0.55rem !important;
        }
        
        /* Total card */
        .total-card {
            padding: 0.5rem !important;
            border-radius: 0.75rem !important;
        }
        .total-card .h2 {
            font-size: 1.2rem !important;
        }
        .total-card .opacity-75 {
            font-size: 0.6rem !important;
        }
        .total-card .rounded-circle {
            width: 36px !important;
            height: 36px !important;
            padding: 0.5rem !important;
        }
        .total-card .rounded-circle i {
            font-size: 1.2rem !important;
        }
        
        /* Payment cards */
        .payment-card {
            padding: 0.4rem !important;
            border-radius: 0.5rem !important;
        }
        .payment-card .fw-bold {
            font-size: 0.7rem !important;
        }
        .payment-card .text-end .fw-bold {
            font-size: 0.7rem !important;
        }
        .payment-card .badge {
            font-size: 0.45rem !important;
            padding: 0.1rem 0.3rem !important;
        }
        .payment-card .text-muted {
            font-size: 0.5rem !important;
        }
        .payment-card .mt-2 {
            margin-top: 0.2rem !important;
        }
        .payment-card .pt-2 {
            padding-top: 0.15rem !important;
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
        .payment-card:hover {
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
        .payment-card .fw-bold {
            font-size: 0.6rem !important;
        }
        .payment-card .text-end .fw-bold {
            font-size: 0.6rem !important;
        }
        .total-card .h2 {
            font-size: 1rem !important;
        }
        .btn {
            font-size: 0.5rem !important;
            padding: 0.1rem 0.3rem !important;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 263
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

        // line 264
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
        // line 274
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_subscription_index");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tags me-1\"></i> Abonnements
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active small\">#";
        // line 278
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 278, $this->source); })()), "id", [], "any", false, false, false, 278), "html", null, true);
        yield "</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-tag text-primary me-2\"></i>
                <span class=\"d-none d-sm-inline\">Abonnement #";
        // line 283
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 283, $this->source); })()), "id", [], "any", false, false, false, 283), "html", null, true);
        yield "</span>
                <span class=\"d-inline d-sm-none\">#";
        // line 284
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 284, $this->source); })()), "id", [], "any", false, false, false, 284), "html", null, true);
        yield "</span>
            </h1>
            <p class=\"text-muted mt-1 small\">
                ";
        // line 287
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 287, $this->source); })()), "hmaService", [], "any", false, false, false, 287), "companyName", [], "any", false, false, false, 287), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 287, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 287), "displayName", [], "any", false, false, false, 287), "html", null, true);
        yield "
            </p>
        </div>
        <div class=\"w-100 w-sm-auto\">
            <a href=\"";
        // line 291
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_subscription_index");
        yield "\" class=\"btn btn-outline-secondary btn-sm w-100 w-sm-auto\">
                <i class=\"fas fa-arrow-left me-1\"></i> <span class=\"d-none d-sm-inline\">Retour</span>
            </a>
        </div>
    </div>

    <!-- ==========================================
         CONTENU PRINCIPAL
    ========================================== -->
    <div class=\"row g-2 g-md-4\">

        <!-- Colonne gauche - Infos abonnement -->
        <div class=\"col-12 col-xl-7\">
            <div class=\"card border-0 shadow-sm mb-3 mb-md-4\">
                <div class=\"card-header bg-white py-2 py-md-3\">
                    <h5 class=\"mb-0 fw-semibold fs-6 fs-md-5\">
                        <i class=\"fas fa-info-circle me-2 text-primary\"></i>
                        <span class=\"d-none d-sm-inline\">Détails de l'abonnement</span>
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
                                    <span class=\"badge-status ";
        // line 319
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 319, $this->source); })()), "status", [], "any", false, false, false, 319), "html", null, true);
        yield " status-badge\" style=\"font-size:0.6rem; padding:0.2rem 0.5rem;\">
                                        ";
        // line 320
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 320, $this->source); })()), "status", [], "any", false, false, false, 320) == "active")) {
            // line 321
            yield "                                            <i class=\"fas fa-check-circle me-1\" style=\"font-size:0.5rem;\"></i> <span class=\"d-none d-sm-inline\">Actif</span>
                                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 322
(isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 322, $this->source); })()), "status", [], "any", false, false, false, 322) == "pending")) {
            // line 323
            yield "                                            <i class=\"fas fa-clock me-1\" style=\"font-size:0.5rem;\"></i> <span class=\"d-none d-sm-inline\">En attente</span>
                                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 324
(isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 324, $this->source); })()), "status", [], "any", false, false, false, 324) == "expired")) {
            // line 325
            yield "                                            <i class=\"fas fa-hourglass-end me-1\" style=\"font-size:0.5rem;\"></i> <span class=\"d-none d-sm-inline\">Expiré</span>
                                        ";
        } else {
            // line 327
            yield "                                            <i class=\"fas fa-ban me-1\" style=\"font-size:0.5rem;\"></i> <span class=\"d-none d-sm-inline\">Annulé</span>
                                        ";
        }
        // line 329
        yield "                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Actif -->
                        <div class=\"col-6 col-md-6\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">Abonnement actif</small>
                                <div class=\"mt-1\">
                                    ";
        // line 338
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 338, $this->source); })()), "subscriptionActive", [], "any", false, false, false, 338)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 339
            yield "                                        <span class=\"badge bg-success\" style=\"font-size:0.55rem;\">✓ Oui</span>
                                    ";
        } else {
            // line 341
            yield "                                        <span class=\"badge bg-danger\" style=\"font-size:0.55rem;\">✗ Non</span>
                                    ";
        }
        // line 343
        yield "                                </div>
                            </div>
                        </div>
                        <!-- Plan -->
                        <div class=\"col-6 col-md-6\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">Plan</small>
                                <div class=\"fw-bold mt-1 small\">";
        // line 350
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 350, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 350), "displayName", [], "any", false, false, false, 350), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                        <!-- Période -->
                        <div class=\"col-6 col-md-6\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">Période</small>
                                <div class=\"fw-bold mt-1 small\">
                                    ";
        // line 358
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 358, $this->source); })()), "billingPeriod", [], "any", false, false, false, 358) == "monthly")) ? ("Mensuel") : ("Annuel"));
        yield "
                                </div>
                            </div>
                        </div>
                        <!-- Date début -->
                        <div class=\"col-6 col-md-6\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">Date de début</small>
                                <div class=\"fw-bold mt-1 small\">
                                    ";
        // line 367
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 367, $this->source); })()), "startsAt", [], "any", false, false, false, 367)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 367, $this->source); })()), "startsAt", [], "any", false, false, false, 367), "d/m/Y"), "html", null, true)) : ("Non défini"));
        yield "
                                </div>
                            </div>
                        </div>
                        <!-- Date fin -->
                        <div class=\"col-6 col-md-6\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">Date de fin</small>
                                <div class=\"fw-bold mt-1 small\">
                                    ";
        // line 376
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 376, $this->source); })()), "endsAt", [], "any", false, false, false, 376)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 376, $this->source); })()), "endsAt", [], "any", false, false, false, 376), "d/m/Y"), "html", null, true)) : ("Non défini"));
        yield "
                                </div>
                                ";
        // line 378
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 378, $this->source); })()), "endsAt", [], "any", false, false, false, 378) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 378, $this->source); })()), "endsAt", [], "any", false, false, false, 378) < $this->extensions['Twig\Extension\CoreExtension']->convertDate()))) {
            // line 379
            yield "                                    <small class=\"text-danger d-block\" style=\"font-size:0.45rem;\">Expiré</small>
                                ";
        }
        // line 381
        yield "                            </div>
                        </div>
                        <!-- Mode paiement -->
                        <div class=\"col-6 col-md-6\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">Mode de paiement</small>
                                <div class=\"fw-bold mt-1 small\">";
        // line 387
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "paymentMethod", [], "any", true, true, false, 387)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 387, $this->source); })()), "paymentMethod", [], "any", false, false, false, 387), "Non défini")) : ("Non défini")), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                        <!-- ID Transaction -->
                        <div class=\"col-6 col-md-6\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">ID Transaction</small>
                                <div class=\"fw-bold mt-1 small\">";
        // line 394
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["subscription"] ?? null), "transactionId", [], "any", true, true, false, 394)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 394, $this->source); })()), "transactionId", [], "any", false, false, false, 394), "Non défini")) : ("Non défini")), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                        ";
        // line 397
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 397, $this->source); })()), "notes", [], "any", false, false, false, 397)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 398
            yield "                        <div class=\"col-12\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">Notes</small>
                                <div class=\"mt-1 small\">";
            // line 401
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 401, $this->source); })()), "notes", [], "any", false, false, false, 401), "html", null, true));
            yield "</div>
                            </div>
                        </div>
                        ";
        }
        // line 405
        yield "                        <!-- Créé le -->
                        <div class=\"col-6 col-md-6\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">Créé le</small>
                                <div class=\"fw-bold mt-1 small\">";
        // line 409
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 409, $this->source); })()), "createdAt", [], "any", false, false, false, 409), "d/m/Y H:i:s"), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                        <!-- Dernière mise à jour -->
                        <div class=\"col-6 col-md-6\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">Dernière mise à jour</small>
                                <div class=\"fw-bold mt-1 small\">";
        // line 416
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 416, $this->source); })()), "updatedAt", [], "any", false, false, false, 416)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["subscription"]) || array_key_exists("subscription", $context) ? $context["subscription"] : (function () { throw new RuntimeError('Variable "subscription" does not exist.', 416, $this->source); })()), "updatedAt", [], "any", false, false, false, 416), "d/m/Y H:i:s"), "html", null, true)) : ("Jamais"));
        yield "</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Colonne droite - Total et résumé -->
        <div class=\"col-12 col-xl-5\">
            <!-- Total des paiements -->
            <div class=\"total-card p-3 p-md-4 mb-3 mb-md-4\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <small class=\"opacity-75 d-block\" style=\"font-size:0.6rem;\">Total des paiements</small>
                        <div class=\"h2 mb-0 fw-bold\" style=\"font-size:1.5rem;\">";
        // line 431
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalPaid"]) || array_key_exists("totalPaid", $context) ? $context["totalPaid"] : (function () { throw new RuntimeError('Variable "totalPaid" does not exist.', 431, $this->source); })()), 0, ",", " "), "html", null, true);
        yield " FCFA</div>
                    </div>
                    <div class=\"rounded-circle bg-white bg-opacity-20 p-2 p-md-3\">
                        <i class=\"fas fa-money-bill-wave\" style=\"font-size:1.2rem;\"></i>
                    </div>
                </div>
            </div>

            <!-- Historique des paiements -->
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-2 py-md-3\">
                    <h5 class=\"mb-0 fw-semibold fs-6 fs-md-5\">
                        <i class=\"fas fa-credit-card me-2 text-primary\"></i>
                        <span class=\"d-none d-sm-inline\">Historique des paiements</span>
                        <span class=\"d-inline d-sm-none\">Paiements</span>
                    </h5>
                </div>
                <div class=\"card-body p-2 p-md-3\">
                    ";
        // line 449
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new RuntimeError('Variable "payments" does not exist.', 449, $this->source); })()))) {
            // line 450
            yield "                        <div class=\"text-center py-3 py-md-4\">
                            <i class=\"fas fa-receipt fa-3x text-muted mb-3 opacity-50\"></i>
                            <p class=\"text-muted mb-0 small\">Aucun paiement enregistré</p>
                        </div>
                    ";
        } else {
            // line 455
            yield "                        <div class=\"d-flex flex-column gap-2 gap-md-3\">
                            ";
            // line 456
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new RuntimeError('Variable "payments" does not exist.', 456, $this->source); })()), 0, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
                // line 457
                yield "                                <div class=\"payment-card ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "status", [], "any", false, false, false, 457), "html", null, true);
                yield " p-2 p-md-3 rounded shadow-sm bg-white\">
                                    <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-1 gap-sm-2\">
                                        <div>
                                            <div class=\"fw-bold small\">
                                                ";
                // line 461
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "subscriptionNumber", [], "any", true, true, false, 461)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "subscriptionNumber", [], "any", false, false, false, 461), ("Paiement #" . CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "id", [], "any", false, false, false, 461)))) : (("Paiement #" . CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "id", [], "any", false, false, false, 461)))), "html", null, true);
                yield "
                                            </div>
                                            <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">
                                                <i class=\"far fa-calendar me-1\"></i>
                                                ";
                // line 465
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentDate", [], "any", false, false, false, 465)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentDate", [], "any", false, false, false, 465), "d/m/Y H:i"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "createdAt", [], "any", false, false, false, 465), "d/m/Y H:i"), "html", null, true)));
                yield "
                                            </small>
                                        </div>
                                        <div class=\"text-start text-sm-end w-100 w-sm-auto\">
                                            <div class=\"fw-bold text-primary small\">
                                                ";
                // line 470
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "amount", [], "any", false, false, false, 470), 0, ",", " "), "html", null, true);
                yield " FCFA
                                            </div>
                                            <span class=\"badge ";
                // line 472
                yield ((((CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "status", [], "any", false, false, false, 472) == "completed") || (CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "status", [], "any", false, false, false, 472) == "paid"))) ? ("bg-success") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "status", [], "any", false, false, false, 472) == "pending")) ? ("bg-warning") : ("bg-danger"))));
                yield "\" style=\"font-size:0.45rem;\">
                                                ";
                // line 473
                yield ((((CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "status", [], "any", false, false, false, 473) == "completed") || (CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "status", [], "any", false, false, false, 473) == "paid"))) ? ("Payé") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "status", [], "any", false, false, false, 473) == "pending")) ? ("En attente") : ("Échoué"))));
                yield "
                                            </span>
                                        </div>
                                    </div>
                                    <div class=\"mt-1 mt-md-2\">
                                        <small class=\"text-muted d-block\" style=\"font-size:0.45rem;\">
                                            <i class=\"fas fa-credit-card me-1\"></i>
                                            ";
                // line 480
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentMethod", [], "any", true, true, false, 480)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "paymentMethod", [], "any", false, false, false, 480), "Mode non spécifié")) : ("Mode non spécifié")), "html", null, true);
                yield "
                                        </small>
                                        ";
                // line 482
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "transactionId", [], "any", false, false, false, 482)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 483
                    yield "                                            <small class=\"text-muted d-block\" style=\"font-size:0.45rem;\">
                                                <i class=\"fas fa-hashtag me-1\"></i>
                                                Trans: ";
                    // line 485
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "transactionId", [], "any", false, false, false, 485), 0, 12), "html", null, true);
                    yield "
                                            </small>
                                        ";
                }
                // line 488
                yield "                                        ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "invoiceNumber", [], "any", false, false, false, 488)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 489
                    yield "                                            <small class=\"text-muted d-block\" style=\"font-size:0.45rem;\">
                                                <i class=\"fas fa-file-invoice me-1\"></i>
                                                Facture: ";
                    // line 491
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "invoiceNumber", [], "any", false, false, false, 491), "html", null, true);
                    yield "
                                            </small>
                                        ";
                }
                // line 494
                yield "                                    </div>
                                    ";
                // line 495
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "notes", [], "any", false, false, false, 495)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 496
                    yield "                                        <div class=\"mt-1 mt-md-2 pt-1 pt-md-2 border-top\">
                                            <small class=\"text-muted\" style=\"font-size:0.45rem;\">";
                    // line 497
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "notes", [], "any", false, false, false, 497), "html", null, true);
                    yield "</small>
                                        </div>
                                    ";
                }
                // line 500
                yield "                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['payment'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 502
            yield "                            ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new RuntimeError('Variable "payments" does not exist.', 502, $this->source); })())) > 10)) {
                // line 503
                yield "                                <div class=\"text-center\">
                                    <small class=\"text-muted\">+ ";
                // line 504
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new RuntimeError('Variable "payments" does not exist.', 504, $this->source); })())) - 10), "html", null, true);
                yield " autres paiements</small>
                                </div>
                            ";
            }
            // line 507
            yield "                        </div>
                    ";
        }
        // line 509
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

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "super_admin/subscription/show.html.twig";
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
        return array (  778 => 509,  774 => 507,  768 => 504,  765 => 503,  762 => 502,  755 => 500,  749 => 497,  746 => 496,  744 => 495,  741 => 494,  735 => 491,  731 => 489,  728 => 488,  722 => 485,  718 => 483,  716 => 482,  711 => 480,  701 => 473,  697 => 472,  692 => 470,  684 => 465,  677 => 461,  669 => 457,  665 => 456,  662 => 455,  655 => 450,  653 => 449,  632 => 431,  614 => 416,  604 => 409,  598 => 405,  591 => 401,  586 => 398,  584 => 397,  578 => 394,  568 => 387,  560 => 381,  556 => 379,  554 => 378,  549 => 376,  537 => 367,  525 => 358,  514 => 350,  505 => 343,  501 => 341,  497 => 339,  495 => 338,  484 => 329,  480 => 327,  476 => 325,  474 => 324,  471 => 323,  469 => 322,  466 => 321,  464 => 320,  460 => 319,  429 => 291,  420 => 287,  414 => 284,  410 => 283,  402 => 278,  395 => 274,  383 => 264,  370 => 263,  104 => 7,  91 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/super_admin/subscription/show.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Abonnement #{{ subscription.id }} - {{ subscription.hmaService.companyName }}{% endblock %}

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
    .badge-status {
        padding: 0.35rem 0.85rem;
        border-radius: 2rem;
        font-weight: 500;
        font-size: 0.75rem;
        white-space: nowrap;
    }
    .badge-status.active { background: #d1fae5; color: #065f46; }
    .badge-status.pending { background: #fef3c7; color: #b45309; }
    .badge-status.expired { background: #fee2e2; color: #991b1b; }
    .badge-status.cancelled { background: #f1f5f9; color: #475569; }
    
    .payment-card {
        transition: all 0.2s ease;
        border-left: 4px solid;
        border-radius: 0.75rem;
        padding: 0.75rem;
    }
    .payment-card.completed { border-left-color: #10b981; }
    .payment-card.pending { border-left-color: #f59e0b; }
    .payment-card.failed { border-left-color: #ef4444; }
    .total-card {
        background: linear-gradient(135deg, #0463f1 0%, #0350c4 100%);
        color: white;
        border-radius: 1rem;
        padding: 0.75rem;
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
        .total-card {
            padding: 0.75rem;
        }
        .total-card .h2 {
            font-size: 1.5rem !important;
        }
        .payment-card {
            padding: 0.5rem;
        }
        .payment-card .fw-bold {
            font-size: 0.85rem;
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
        .badge-status {
            font-size: 0.65rem;
            padding: 0.2rem 0.5rem;
        }
        .breadcrumb {
            font-size: 0.7rem !important;
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
        .badge-status {
            font-size: 0.5rem !important;
            padding: 0.15rem 0.3rem !important;
        }
        .badge-status i {
            font-size: 0.5rem !important;
        }
        
        /* Badge */
        .badge {
            font-size: 0.5rem !important;
            padding: 0.15rem 0.3rem !important;
        }
        .badge.fs-6 {
            font-size: 0.55rem !important;
        }
        
        /* Total card */
        .total-card {
            padding: 0.5rem !important;
            border-radius: 0.75rem !important;
        }
        .total-card .h2 {
            font-size: 1.2rem !important;
        }
        .total-card .opacity-75 {
            font-size: 0.6rem !important;
        }
        .total-card .rounded-circle {
            width: 36px !important;
            height: 36px !important;
            padding: 0.5rem !important;
        }
        .total-card .rounded-circle i {
            font-size: 1.2rem !important;
        }
        
        /* Payment cards */
        .payment-card {
            padding: 0.4rem !important;
            border-radius: 0.5rem !important;
        }
        .payment-card .fw-bold {
            font-size: 0.7rem !important;
        }
        .payment-card .text-end .fw-bold {
            font-size: 0.7rem !important;
        }
        .payment-card .badge {
            font-size: 0.45rem !important;
            padding: 0.1rem 0.3rem !important;
        }
        .payment-card .text-muted {
            font-size: 0.5rem !important;
        }
        .payment-card .mt-2 {
            margin-top: 0.2rem !important;
        }
        .payment-card .pt-2 {
            padding-top: 0.15rem !important;
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
        .payment-card:hover {
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
        .payment-card .fw-bold {
            font-size: 0.6rem !important;
        }
        .payment-card .text-end .fw-bold {
            font-size: 0.6rem !important;
        }
        .total-card .h2 {
            font-size: 1rem !important;
        }
        .btn {
            font-size: 0.5rem !important;
            padding: 0.1rem 0.3rem !important;
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
                        <a href=\"{{ path('super_admin_subscription_index') }}\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tags me-1\"></i> Abonnements
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active small\">#{{ subscription.id }}</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-tag text-primary me-2\"></i>
                <span class=\"d-none d-sm-inline\">Abonnement #{{ subscription.id }}</span>
                <span class=\"d-inline d-sm-none\">#{{ subscription.id }}</span>
            </h1>
            <p class=\"text-muted mt-1 small\">
                {{ subscription.hmaService.companyName }} - {{ subscription.subscriptionPlan.displayName }}
            </p>
        </div>
        <div class=\"w-100 w-sm-auto\">
            <a href=\"{{ path('super_admin_subscription_index') }}\" class=\"btn btn-outline-secondary btn-sm w-100 w-sm-auto\">
                <i class=\"fas fa-arrow-left me-1\"></i> <span class=\"d-none d-sm-inline\">Retour</span>
            </a>
        </div>
    </div>

    <!-- ==========================================
         CONTENU PRINCIPAL
    ========================================== -->
    <div class=\"row g-2 g-md-4\">

        <!-- Colonne gauche - Infos abonnement -->
        <div class=\"col-12 col-xl-7\">
            <div class=\"card border-0 shadow-sm mb-3 mb-md-4\">
                <div class=\"card-header bg-white py-2 py-md-3\">
                    <h5 class=\"mb-0 fw-semibold fs-6 fs-md-5\">
                        <i class=\"fas fa-info-circle me-2 text-primary\"></i>
                        <span class=\"d-none d-sm-inline\">Détails de l'abonnement</span>
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
                                    <span class=\"badge-status {{ subscription.status }} status-badge\" style=\"font-size:0.6rem; padding:0.2rem 0.5rem;\">
                                        {% if subscription.status == 'active' %}
                                            <i class=\"fas fa-check-circle me-1\" style=\"font-size:0.5rem;\"></i> <span class=\"d-none d-sm-inline\">Actif</span>
                                        {% elseif subscription.status == 'pending' %}
                                            <i class=\"fas fa-clock me-1\" style=\"font-size:0.5rem;\"></i> <span class=\"d-none d-sm-inline\">En attente</span>
                                        {% elseif subscription.status == 'expired' %}
                                            <i class=\"fas fa-hourglass-end me-1\" style=\"font-size:0.5rem;\"></i> <span class=\"d-none d-sm-inline\">Expiré</span>
                                        {% else %}
                                            <i class=\"fas fa-ban me-1\" style=\"font-size:0.5rem;\"></i> <span class=\"d-none d-sm-inline\">Annulé</span>
                                        {% endif %}
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Actif -->
                        <div class=\"col-6 col-md-6\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">Abonnement actif</small>
                                <div class=\"mt-1\">
                                    {% if subscription.subscriptionActive %}
                                        <span class=\"badge bg-success\" style=\"font-size:0.55rem;\">✓ Oui</span>
                                    {% else %}
                                        <span class=\"badge bg-danger\" style=\"font-size:0.55rem;\">✗ Non</span>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                        <!-- Plan -->
                        <div class=\"col-6 col-md-6\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">Plan</small>
                                <div class=\"fw-bold mt-1 small\">{{ subscription.subscriptionPlan.displayName }}</div>
                            </div>
                        </div>
                        <!-- Période -->
                        <div class=\"col-6 col-md-6\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">Période</small>
                                <div class=\"fw-bold mt-1 small\">
                                    {{ subscription.billingPeriod == 'monthly' ? 'Mensuel' : 'Annuel' }}
                                </div>
                            </div>
                        </div>
                        <!-- Date début -->
                        <div class=\"col-6 col-md-6\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">Date de début</small>
                                <div class=\"fw-bold mt-1 small\">
                                    {{ subscription.startsAt ? subscription.startsAt|date('d/m/Y') : 'Non défini' }}
                                </div>
                            </div>
                        </div>
                        <!-- Date fin -->
                        <div class=\"col-6 col-md-6\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">Date de fin</small>
                                <div class=\"fw-bold mt-1 small\">
                                    {{ subscription.endsAt ? subscription.endsAt|date('d/m/Y') : 'Non défini' }}
                                </div>
                                {% if subscription.endsAt and subscription.endsAt < date() %}
                                    <small class=\"text-danger d-block\" style=\"font-size:0.45rem;\">Expiré</small>
                                {% endif %}
                            </div>
                        </div>
                        <!-- Mode paiement -->
                        <div class=\"col-6 col-md-6\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">Mode de paiement</small>
                                <div class=\"fw-bold mt-1 small\">{{ subscription.paymentMethod|default('Non défini') }}</div>
                            </div>
                        </div>
                        <!-- ID Transaction -->
                        <div class=\"col-6 col-md-6\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">ID Transaction</small>
                                <div class=\"fw-bold mt-1 small\">{{ subscription.transactionId|default('Non défini') }}</div>
                            </div>
                        </div>
                        {% if subscription.notes %}
                        <div class=\"col-12\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">Notes</small>
                                <div class=\"mt-1 small\">{{ subscription.notes|nl2br }}</div>
                            </div>
                        </div>
                        {% endif %}
                        <!-- Créé le -->
                        <div class=\"col-6 col-md-6\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">Créé le</small>
                                <div class=\"fw-bold mt-1 small\">{{ subscription.createdAt|date('d/m/Y H:i:s') }}</div>
                            </div>
                        </div>
                        <!-- Dernière mise à jour -->
                        <div class=\"col-6 col-md-6\">
                            <div class=\"info-card p-2 p-md-3\">
                                <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">Dernière mise à jour</small>
                                <div class=\"fw-bold mt-1 small\">{{ subscription.updatedAt ? subscription.updatedAt|date('d/m/Y H:i:s') : 'Jamais' }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Colonne droite - Total et résumé -->
        <div class=\"col-12 col-xl-5\">
            <!-- Total des paiements -->
            <div class=\"total-card p-3 p-md-4 mb-3 mb-md-4\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <small class=\"opacity-75 d-block\" style=\"font-size:0.6rem;\">Total des paiements</small>
                        <div class=\"h2 mb-0 fw-bold\" style=\"font-size:1.5rem;\">{{ totalPaid|number_format(0, ',', ' ') }} FCFA</div>
                    </div>
                    <div class=\"rounded-circle bg-white bg-opacity-20 p-2 p-md-3\">
                        <i class=\"fas fa-money-bill-wave\" style=\"font-size:1.2rem;\"></i>
                    </div>
                </div>
            </div>

            <!-- Historique des paiements -->
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-2 py-md-3\">
                    <h5 class=\"mb-0 fw-semibold fs-6 fs-md-5\">
                        <i class=\"fas fa-credit-card me-2 text-primary\"></i>
                        <span class=\"d-none d-sm-inline\">Historique des paiements</span>
                        <span class=\"d-inline d-sm-none\">Paiements</span>
                    </h5>
                </div>
                <div class=\"card-body p-2 p-md-3\">
                    {% if payments is empty %}
                        <div class=\"text-center py-3 py-md-4\">
                            <i class=\"fas fa-receipt fa-3x text-muted mb-3 opacity-50\"></i>
                            <p class=\"text-muted mb-0 small\">Aucun paiement enregistré</p>
                        </div>
                    {% else %}
                        <div class=\"d-flex flex-column gap-2 gap-md-3\">
                            {% for payment in payments|slice(0, 10) %}
                                <div class=\"payment-card {{ payment.status }} p-2 p-md-3 rounded shadow-sm bg-white\">
                                    <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-1 gap-sm-2\">
                                        <div>
                                            <div class=\"fw-bold small\">
                                                {{ payment.subscriptionNumber|default('Paiement #' ~ payment.id) }}
                                            </div>
                                            <small class=\"text-muted d-block\" style=\"font-size:0.5rem;\">
                                                <i class=\"far fa-calendar me-1\"></i>
                                                {{ payment.paymentDate ? payment.paymentDate|date('d/m/Y H:i') : payment.createdAt|date('d/m/Y H:i') }}
                                            </small>
                                        </div>
                                        <div class=\"text-start text-sm-end w-100 w-sm-auto\">
                                            <div class=\"fw-bold text-primary small\">
                                                {{ payment.amount|number_format(0, ',', ' ') }} FCFA
                                            </div>
                                            <span class=\"badge {{ payment.status == 'completed' or payment.status == 'paid' ? 'bg-success' : (payment.status == 'pending' ? 'bg-warning' : 'bg-danger') }}\" style=\"font-size:0.45rem;\">
                                                {{ payment.status == 'completed' or payment.status == 'paid' ? 'Payé' : (payment.status == 'pending' ? 'En attente' : 'Échoué') }}
                                            </span>
                                        </div>
                                    </div>
                                    <div class=\"mt-1 mt-md-2\">
                                        <small class=\"text-muted d-block\" style=\"font-size:0.45rem;\">
                                            <i class=\"fas fa-credit-card me-1\"></i>
                                            {{ payment.paymentMethod|default('Mode non spécifié') }}
                                        </small>
                                        {% if payment.transactionId %}
                                            <small class=\"text-muted d-block\" style=\"font-size:0.45rem;\">
                                                <i class=\"fas fa-hashtag me-1\"></i>
                                                Trans: {{ payment.transactionId|slice(0, 12) }}
                                            </small>
                                        {% endif %}
                                        {% if payment.invoiceNumber %}
                                            <small class=\"text-muted d-block\" style=\"font-size:0.45rem;\">
                                                <i class=\"fas fa-file-invoice me-1\"></i>
                                                Facture: {{ payment.invoiceNumber }}
                                            </small>
                                        {% endif %}
                                    </div>
                                    {% if payment.notes %}
                                        <div class=\"mt-1 mt-md-2 pt-1 pt-md-2 border-top\">
                                            <small class=\"text-muted\" style=\"font-size:0.45rem;\">{{ payment.notes }}</small>
                                        </div>
                                    {% endif %}
                                </div>
                            {% endfor %}
                            {% if payments|length > 10 %}
                                <div class=\"text-center\">
                                    <small class=\"text-muted\">+ {{ payments|length - 10 }} autres paiements</small>
                                </div>
                            {% endif %}
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "super_admin/subscription/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\super_admin\\subscription\\show.html.twig");
    }
}
