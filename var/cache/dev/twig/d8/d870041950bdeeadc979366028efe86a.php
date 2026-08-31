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

/* super_admin/subscription/index.html.twig */
class __TwigTemplate_3428826a53f4af53ccf07a9dd8edf45a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "super_admin/subscription/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "super_admin/subscription/index.html.twig"));

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

        yield "Gestion des abonnements - Super Admin";
        
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
    .stat-card {
        transition: transform 0.2s, box-shadow 0.2s;
        border-radius: 1rem;
        border: none;
        background: white !important;
    }
    .stat-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }
    .stat-value {
        font-size: 1.75rem;
        font-weight: bold;
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
    .badge-status.active { background: #d1fae5; color: #065f46; }
    .badge-status.pending { background: #fef3c7; color: #b45309; }
    .badge-status.expired { background: #fee2e2; color: #991b1b; }
    .badge-status.cancelled { background: #f1f5f9; color: #475569; }
    .table-container {
        overflow-x: auto;
    }
    .subscription-row {
        cursor: pointer;
        transition: background 0.2s;
    }
    .subscription-row:hover {
        background: #f1f5f9;
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
    /* Carte dernier abonnement */
    .last-subscription-card {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 1rem;
        transition: transform 0.2s, box-shadow 0.2s;
    }
    .last-subscription-card:hover {
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
    }
    .info-value {
        font-weight: 600;
    }

    /* Couleurs des icônes sur fond blanc */
    .stat-icon-primary { color: #0463f1; }
    .stat-icon-success { color: #10b981; }
    .stat-icon-warning { color: #f59e0b; }
    .stat-icon-danger { color: #ef4444; }
    .stat-icon-bg {
        background: rgba(4, 99, 241, 0.1);
    }
    .stat-icon-bg-success {
        background: rgba(16, 185, 129, 0.1);
    }
    .stat-icon-bg-warning {
        background: rgba(245, 158, 11, 0.1);
    }
    .stat-icon-bg-danger {
        background: rgba(239, 68, 68, 0.1);
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
        .last-subscription-card { padding: 1rem !important; }
        
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
        .btn-outline-info.me-2 {
            margin-right: 0.25rem !important;
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
        .text-muted.small {
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
        
        /* Dernier abonnement */
        .last-subscription-card {
            padding: 0.5rem !important;
            border-radius: 0.75rem !important;
        }
        .last-subscription-card h5 {
            font-size: 0.75rem !important;
        }
        .last-subscription-card .fa-2x {
            font-size: 1.5rem !important;
        }
        .last-subscription-card .row {
            gap: 0.25rem !important;
        }
        .last-subscription-card .info-row {
            padding: 0.25rem 0 !important;
        }
        .last-subscription-card .info-label {
            font-size: 0.55rem !important;
        }
        .last-subscription-card .info-value {
            font-size: 0.6rem !important;
        }
        .last-subscription-card .badge {
            font-size: 0.5rem !important;
            padding: 0.15rem 0.3rem !important;
        }
        .last-subscription-card .btn {
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
        .subscription-row:hover {
            background: transparent !important;
        }
        .last-subscription-card:hover {
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
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 370
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

        // line 371
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
        // line 381
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Dashboard
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active small\">
                        <i class=\"fas fa-tags me-1\"></i> Abonnements
                    </li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-tags text-primary me-2\"></i>
                <span class=\"d-none d-sm-inline\">Gestion des abonnements</span>
                <span class=\"d-inline d-sm-none\">Abonnements</span>
            </h1>
            <p class=\"text-muted mt-1 small d-none d-sm-block\">
                <i class=\"fas fa-globe me-1\"></i>
                Gérez tous les abonnements des entreprises
            </p>
            <p class=\"text-muted mt-1 small d-block d-sm-none\">
                Gestion des abonnements
            </p>
        </div>
        <div class=\"d-flex gap-1 gap-sm-2 flex-wrap w-100 w-sm-auto\">
            <a href=\"";
        // line 404
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_payment_index");
        yield "\" class=\"btn btn-outline-info btn-sm flex-grow-1 flex-sm-grow-0\">
                <i class=\"fas fa-credit-card me-1\"></i> <span class=\"d-none d-sm-inline\">Voir les paiements</span>
                <span class=\"d-inline d-sm-none\">Paiements</span>
            </a>
        </div>
    </div>

    <!-- ==========================================
         CARTES STATISTIQUES - FOND BLANC
    ========================================== -->
    <div class=\"row g-2 g-md-3 mb-3 mb-md-4\">
        <div class=\"col-6 col-md-3\">
            <div class=\"card stat-card shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <div class=\"text-muted small text-uppercase\" style=\"font-size:0.55rem;\">Total</div>
                            <div class=\"stat-value text-dark\">";
        // line 421
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["subscriptions"]) || array_key_exists("subscriptions", $context) ? $context["subscriptions"] : (function () { throw new RuntimeError('Variable "subscriptions" does not exist.', 421, $this->source); })())), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"rounded-circle stat-icon-bg p-2 p-md-3\">
                            <i class=\"fas fa-tags fa-fw stat-icon-primary\" style=\"font-size:1rem;\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-6 col-md-3\">
            <div class=\"card stat-card shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <div class=\"text-muted small text-uppercase\" style=\"font-size:0.55rem;\">Actifs</div>
                            <div class=\"stat-value text-dark\">";
        // line 436
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["subscriptions"]) || array_key_exists("subscriptions", $context) ? $context["subscriptions"] : (function () { throw new RuntimeError('Variable "subscriptions" does not exist.', 436, $this->source); })()), function ($__s__) use ($context, $macros) { $context["s"] = $__s__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 436, $this->source); })()), "status", [], "any", false, false, false, 436) == "active"); })), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"rounded-circle stat-icon-bg-success p-2 p-md-3\">
                            <i class=\"fas fa-check-circle fa-fw stat-icon-success\" style=\"font-size:1rem;\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-6 col-md-3\">
            <div class=\"card stat-card shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <div class=\"text-muted small text-uppercase\" style=\"font-size:0.55rem;\">En attente</div>
                            <div class=\"stat-value text-dark\">";
        // line 451
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["subscriptions"]) || array_key_exists("subscriptions", $context) ? $context["subscriptions"] : (function () { throw new RuntimeError('Variable "subscriptions" does not exist.', 451, $this->source); })()), function ($__s__) use ($context, $macros) { $context["s"] = $__s__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 451, $this->source); })()), "status", [], "any", false, false, false, 451) == "pending"); })), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"rounded-circle stat-icon-bg-warning p-2 p-md-3\">
                            <i class=\"fas fa-clock fa-fw stat-icon-warning\" style=\"font-size:1rem;\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-6 col-md-3\">
            <div class=\"card stat-card shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <div class=\"text-muted small text-uppercase\" style=\"font-size:0.55rem;\">Expirés/Annulés</div>
                            <div class=\"stat-value text-dark\">";
        // line 466
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["subscriptions"]) || array_key_exists("subscriptions", $context) ? $context["subscriptions"] : (function () { throw new RuntimeError('Variable "subscriptions" does not exist.', 466, $this->source); })()), function ($__s__) use ($context, $macros) { $context["s"] = $__s__; return ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 466, $this->source); })()), "status", [], "any", false, false, false, 466) == "expired") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 466, $this->source); })()), "status", [], "any", false, false, false, 466) == "cancelled")); })), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"rounded-circle stat-icon-bg-danger p-2 p-md-3\">
                            <i class=\"fas fa-exclamation-circle fa-fw stat-icon-danger\" style=\"font-size:1rem;\"></i>
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
        // line 480
        if ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 480, $this->source); })()), "company_id", [], "any", false, false, false, 480) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 480, $this->source); })()), "status", [], "any", false, false, false, 480)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 480, $this->source); })()), "date_from", [], "any", false, false, false, 480)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 480, $this->source); })()), "date_to", [], "any", false, false, false, 480))) {
            // line 481
            yield "    <div class=\"d-flex gap-1 gap-md-2 flex-wrap mb-2 mb-md-3\">
        ";
            // line 482
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 482, $this->source); })()), "company_id", [], "any", false, false, false, 482) && array_key_exists("companies", $context))) {
                // line 483
                yield "            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["companies"]) || array_key_exists("companies", $context) ? $context["companies"] : (function () { throw new RuntimeError('Variable "companies" does not exist.', 483, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
                    // line 484
                    yield "                ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 484) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 484, $this->source); })()), "company_id", [], "any", false, false, false, 484))) {
                        // line 485
                        yield "                    <span class=\"filter-badge\" onclick=\"removeFilter('company_id')\" style=\"font-size:0.6rem; padding:0.15rem 0.4rem;\">
                        <i class=\"fas fa-building me-1\"></i> ";
                        // line 486
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["company"], "companyName", [], "any", false, false, false, 486), 0, 15), "html", null, true);
                        yield "
                        <i class=\"fas fa-times ms-1\"></i>
                    </span>
                ";
                    }
                    // line 490
                    yield "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['company'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 491
                yield "        ";
            }
            // line 492
            yield "        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 492, $this->source); })()), "status", [], "any", false, false, false, 492)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 493
                yield "            <span class=\"filter-badge\" onclick=\"removeFilter('status')\" style=\"font-size:0.6rem; padding:0.15rem 0.4rem;\">
                <i class=\"fas fa-filter me-1\"></i> Statut: 
                ";
                // line 495
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 495, $this->source); })()), "status", [], "any", false, false, false, 495) == "active")) {
                    yield "Actif
                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 496
(isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 496, $this->source); })()), "status", [], "any", false, false, false, 496) == "pending")) {
                    yield "En attente
                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 497
(isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 497, $this->source); })()), "status", [], "any", false, false, false, 497) == "expired")) {
                    yield "Expiré
                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 498
(isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 498, $this->source); })()), "status", [], "any", false, false, false, 498) == "cancelled")) {
                    yield "Annulé
                ";
                } else {
                    // line 499
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 499, $this->source); })()), "status", [], "any", false, false, false, 499), "html", null, true);
                    yield "
                ";
                }
                // line 501
                yield "                <i class=\"fas fa-times ms-1\"></i>
            </span>
        ";
            }
            // line 504
            yield "        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 504, $this->source); })()), "date_from", [], "any", false, false, false, 504)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 505
                yield "            <span class=\"filter-badge\" onclick=\"removeFilter('date_from')\" style=\"font-size:0.6rem; padding:0.15rem 0.4rem;\">
                <i class=\"fas fa-calendar me-1\"></i> Depuis: ";
                // line 506
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 506, $this->source); })()), "date_from", [], "any", false, false, false, 506), "html", null, true);
                yield "
                <i class=\"fas fa-times ms-1\"></i>
            </span>
        ";
            }
            // line 510
            yield "        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 510, $this->source); })()), "date_to", [], "any", false, false, false, 510)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 511
                yield "            <span class=\"filter-badge\" onclick=\"removeFilter('date_to')\" style=\"font-size:0.6rem; padding:0.15rem 0.4rem;\">
                <i class=\"fas fa-calendar me-1\"></i> Jusqu'au: ";
                // line 512
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 512, $this->source); })()), "date_to", [], "any", false, false, false, 512), "html", null, true);
                yield "
                <i class=\"fas fa-times ms-1\"></i>
            </span>
        ";
            }
            // line 516
            yield "        <button class=\"btn btn-sm btn-outline-secondary\" onclick=\"clearAllFilters()\" style=\"font-size:0.55rem; padding:0.15rem 0.4rem;\">
            <i class=\"fas fa-eraser me-1\"></i> Effacer tout
        </button>
    </div>
    ";
        }
        // line 521
        yield "
    <!-- ==========================================
         FILTRES
    ========================================== -->
    <div class=\"filter-card p-2 p-md-4 mb-3 mb-md-4 shadow-sm\">
        <form method=\"get\" class=\"row g-2 g-md-3 align-items-end\">
            <!-- Entreprise - 100% mobile, 3 desktop -->
            <div class=\"col-12 col-md-3 filter-col\">
                <label class=\"form-label fw-semibold small mb-1\" style=\"font-size:0.6rem;\">
                    <i class=\"fas fa-building me-1\"></i>Entreprise
                </label>
                <select name=\"company_id\" class=\"form-select form-select-sm filter-select\" style=\"font-size:0.7rem;\">
                    <option value=\"\">Toutes</option>
                    ";
        // line 534
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(((array_key_exists("companies", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["companies"]) || array_key_exists("companies", $context) ? $context["companies"] : (function () { throw new RuntimeError('Variable "companies" does not exist.', 534, $this->source); })()), [])) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
            // line 535
            yield "                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 535), "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 535, $this->source); })()), "company_id", [], "any", false, false, false, 535) == CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 535))) ? ("selected") : (""));
            yield ">
                            ";
            // line 536
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["company"], "companyName", [], "any", false, false, false, 536), 0, 25), "html", null, true);
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["company"], "companyName", [], "any", false, false, false, 536)) > 25)) {
                yield "...";
            }
            // line 537
            yield "                        </option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['company'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 539
        yield "                </select>
            </div>
            
            <!-- Statut - 50% mobile, 2 desktop -->
            <div class=\"col-6 col-md-2 filter-col-half\">
                <label class=\"form-label fw-semibold small mb-1\" style=\"font-size:0.6rem;\">
                    <i class=\"fas fa-filter me-1\"></i>Statut
                </label>
                <select name=\"status\" class=\"form-select form-select-sm filter-select\" style=\"font-size:0.7rem;\">
                    <option value=\"\">Tous</option>
                    <option value=\"active\" ";
        // line 549
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 549, $this->source); })()), "status", [], "any", false, false, false, 549) == "active")) ? ("selected") : (""));
        yield ">✓ Actif</option>
                    <option value=\"pending\" ";
        // line 550
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 550, $this->source); })()), "status", [], "any", false, false, false, 550) == "pending")) ? ("selected") : (""));
        yield ">⏳ En attente</option>
                    <option value=\"expired\" ";
        // line 551
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 551, $this->source); })()), "status", [], "any", false, false, false, 551) == "expired")) ? ("selected") : (""));
        yield ">⌛ Expiré</option>
                    <option value=\"cancelled\" ";
        // line 552
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 552, $this->source); })()), "status", [], "any", false, false, false, 552) == "cancelled")) ? ("selected") : (""));
        yield ">✗ Annulé</option>
                </select>
            </div>
            
            <!-- Date du - 50% mobile, 2 desktop -->
            <div class=\"col-6 col-md-2 filter-col-half\">
                <label class=\"form-label fw-semibold small mb-1\" style=\"font-size:0.6rem;\">
                    <i class=\"fas fa-calendar me-1\"></i>Date du
                </label>
                <input type=\"date\" name=\"date_from\" class=\"form-control form-control-sm filter-input\" value=\"";
        // line 561
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 561, $this->source); })()), "date_from", [], "any", false, false, false, 561), "html", null, true);
        yield "\" style=\"font-size:0.7rem;\">
            </div>
            
            <!-- Date au - 50% mobile, 2 desktop -->
            <div class=\"col-6 col-md-2 filter-col-half\">
                <label class=\"form-label fw-semibold small mb-1\" style=\"font-size:0.6rem;\">
                    <i class=\"fas fa-calendar me-1\"></i>Date au
                </label>
                <input type=\"date\" name=\"date_to\" class=\"form-control form-control-sm filter-input\" value=\"";
        // line 569
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 569, $this->source); })()), "date_to", [], "any", false, false, false, 569), "html", null, true);
        yield "\" style=\"font-size:0.7rem;\">
            </div>
            
            <!-- Bouton Filtrer - 100% mobile, 3 desktop -->
            <div class=\"col-12 col-md-3 filter-col\">
                <button type=\"submit\" class=\"btn btn-primary w-100\" style=\"font-size:0.7rem; padding:0.2rem 0.4rem;\">
                    <i class=\"fas fa-search me-1\"></i> Filtrer
                </button>
            </div>
        </form>
    </div>

    <!-- ==========================================
         DERNIER ABONNEMENT
    ========================================== -->
    ";
        // line 584
        $context["lastSubscription"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["subscriptions"]) || array_key_exists("subscriptions", $context) ? $context["subscriptions"] : (function () { throw new RuntimeError('Variable "subscriptions" does not exist.', 584, $this->source); })()));
        // line 585
        yield "    ";
        if ((($tmp = (isset($context["lastSubscription"]) || array_key_exists("lastSubscription", $context) ? $context["lastSubscription"] : (function () { throw new RuntimeError('Variable "lastSubscription" does not exist.', 585, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 586
            yield "        <div class=\"last-subscription-card p-3 p-md-4 mb-3 mb-md-4 text-white\">
            <div class=\"d-flex justify-content-between align-items-center mb-2 mb-md-3\">
                <h5 class=\"mb-0 fw-bold fs-6 fs-md-5\">
                    <i class=\"fas fa-clock me-2\"></i> Dernier abonnement
                </h5>
                <i class=\"fas fa-tag fa-2x opacity-50\" style=\"font-size:1.5rem;\"></i>
            </div>
            <div class=\"row g-1 g-md-0\">
                <div class=\"col-12 col-md-4\">
                    <div class=\"info-row\">
                        <span class=\"info-label\" style=\"font-size:0.65rem;\">Entreprise</span>
                        <span class=\"info-value\" style=\"font-size:0.7rem;\">";
            // line 597
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["lastSubscription"]) || array_key_exists("lastSubscription", $context) ? $context["lastSubscription"] : (function () { throw new RuntimeError('Variable "lastSubscription" does not exist.', 597, $this->source); })()), "hmaService", [], "any", false, false, false, 597), "companyName", [], "any", false, false, false, 597), 0, 20), "html", null, true);
            yield "</span>
                    </div>
                </div>
                <div class=\"col-12 col-md-4\">
                    <div class=\"info-row\">
                        <span class=\"info-label\" style=\"font-size:0.65rem;\">Plan</span>
                        <span class=\"info-value\" style=\"font-size:0.7rem;\">";
            // line 603
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["lastSubscription"]) || array_key_exists("lastSubscription", $context) ? $context["lastSubscription"] : (function () { throw new RuntimeError('Variable "lastSubscription" does not exist.', 603, $this->source); })()), "subscriptionPlan", [], "any", false, false, false, 603), "displayName", [], "any", false, false, false, 603), "html", null, true);
            yield "</span>
                    </div>
                </div>
                <div class=\"col-12 col-md-4\">
                    <div class=\"info-row\">
                        <span class=\"info-label\" style=\"font-size:0.65rem;\">Période</span>
                        <span class=\"info-value\" style=\"font-size:0.7rem;\">";
            // line 609
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["lastSubscription"]) || array_key_exists("lastSubscription", $context) ? $context["lastSubscription"] : (function () { throw new RuntimeError('Variable "lastSubscription" does not exist.', 609, $this->source); })()), "billingPeriod", [], "any", false, false, false, 609) == "monthly")) ? ("Mensuel") : ("Annuel"));
            yield "</span>
                    </div>
                </div>
                <div class=\"col-12 col-md-4\">
                    <div class=\"info-row\">
                        <span class=\"info-label\" style=\"font-size:0.65rem;\">Statut</span>
                        <span class=\"info-value\" style=\"font-size:0.7rem;\">
                            ";
            // line 616
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["lastSubscription"]) || array_key_exists("lastSubscription", $context) ? $context["lastSubscription"] : (function () { throw new RuntimeError('Variable "lastSubscription" does not exist.', 616, $this->source); })()), "status", [], "any", false, false, false, 616) == "active")) {
                // line 617
                yield "                                <span class=\"badge bg-success\" style=\"font-size:0.55rem;\">✓ Actif</span>
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 618
(isset($context["lastSubscription"]) || array_key_exists("lastSubscription", $context) ? $context["lastSubscription"] : (function () { throw new RuntimeError('Variable "lastSubscription" does not exist.', 618, $this->source); })()), "status", [], "any", false, false, false, 618) == "pending")) {
                // line 619
                yield "                                <span class=\"badge bg-warning text-dark\" style=\"font-size:0.55rem;\">⏳ En attente</span>
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 620
(isset($context["lastSubscription"]) || array_key_exists("lastSubscription", $context) ? $context["lastSubscription"] : (function () { throw new RuntimeError('Variable "lastSubscription" does not exist.', 620, $this->source); })()), "status", [], "any", false, false, false, 620) == "expired")) {
                // line 621
                yield "                                <span class=\"badge bg-danger\" style=\"font-size:0.55rem;\">⌛ Expiré</span>
                            ";
            } else {
                // line 623
                yield "                                <span class=\"badge bg-secondary\" style=\"font-size:0.55rem;\">✗ Annulé</span>
                            ";
            }
            // line 625
            yield "                        </span>
                    </div>
                </div>
                <div class=\"col-12 col-md-4\">
                    <div class=\"info-row\">
                        <span class=\"info-label\" style=\"font-size:0.65rem;\">Date création</span>
                        <span class=\"info-value\" style=\"font-size:0.7rem;\">";
            // line 631
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lastSubscription"]) || array_key_exists("lastSubscription", $context) ? $context["lastSubscription"] : (function () { throw new RuntimeError('Variable "lastSubscription" does not exist.', 631, $this->source); })()), "createdAt", [], "any", false, false, false, 631), "d/m/Y H:i"), "html", null, true);
            yield "</span>
                    </div>
                </div>
                <div class=\"col-12 col-md-4\">
                    <div class=\"info-row\">
                        <span class=\"info-label\" style=\"font-size:0.65rem;\">Date fin</span>
                        <span class=\"info-value\" style=\"font-size:0.7rem;\">";
            // line 637
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["lastSubscription"]) || array_key_exists("lastSubscription", $context) ? $context["lastSubscription"] : (function () { throw new RuntimeError('Variable "lastSubscription" does not exist.', 637, $this->source); })()), "endsAt", [], "any", false, false, false, 637)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lastSubscription"]) || array_key_exists("lastSubscription", $context) ? $context["lastSubscription"] : (function () { throw new RuntimeError('Variable "lastSubscription" does not exist.', 637, $this->source); })()), "endsAt", [], "any", false, false, false, 637), "d/m/Y"), "html", null, true)) : ("-"));
            yield "</span>
                    </div>
                </div>
            </div>
            <div class=\"mt-2 mt-md-3 text-end\">
                <a href=\"";
            // line 642
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_subscription_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["lastSubscription"]) || array_key_exists("lastSubscription", $context) ? $context["lastSubscription"] : (function () { throw new RuntimeError('Variable "lastSubscription" does not exist.', 642, $this->source); })()), "id", [], "any", false, false, false, 642)]), "html", null, true);
            yield "\" class=\"btn btn-light btn-sm\" style=\"font-size:0.65rem; padding:0.15rem 0.4rem;\">
                    <i class=\"fas fa-eye me-1\"></i> Voir les détails
                </a>
            </div>
        </div>
    ";
        } else {
            // line 648
            yield "        <div class=\"last-subscription-card p-3 p-md-4 mb-3 mb-md-4 text-white\">
            <div class=\"text-center py-2 py-md-3\">
                <i class=\"fas fa-tags fa-2x fa-md-3x mb-2 opacity-50\"></i>
                <p class=\"mb-0 small\">Aucun abonnement enregistré</p>
            </div>
        </div>
    ";
        }
        // line 655
        yield "
    <!-- ==========================================
         LISTE DES ABONNEMENTS
    ========================================== -->
    <div class=\"card border-0 shadow-sm\">
        <div class=\"card-header bg-white py-2 py-md-3 d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <h5 class=\"mb-0 fw-semibold fs-6 fs-md-5\">
                <i class=\"fas fa-list me-2 text-primary\"></i>
                <span class=\"d-none d-sm-inline\">Liste des abonnements</span>
                <span class=\"d-inline d-sm-none\">Abonnements</span>
            </h5>
            <span class=\"badge bg-secondary\">";
        // line 666
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["subscriptions"]) || array_key_exists("subscriptions", $context) ? $context["subscriptions"] : (function () { throw new RuntimeError('Variable "subscriptions" does not exist.', 666, $this->source); })())), "html", null, true);
        yield "</span>
        </div>
        <div class=\"table-container\">
            <div class=\"card-body p-0\">
                ";
        // line 670
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["subscriptions"]) || array_key_exists("subscriptions", $context) ? $context["subscriptions"] : (function () { throw new RuntimeError('Variable "subscriptions" does not exist.', 670, $this->source); })()))) {
            // line 671
            yield "                    <div class=\"text-center py-4 py-md-5\">
                        <i class=\"fas fa-tags fa-3x text-muted mb-3 opacity-50\"></i>
                        <p class=\"text-muted mb-0 small\">Aucun abonnement trouvé</p>
                        <p class=\"text-muted small mb-3\">Modifiez vos filtres ou créez un nouvel abonnement</p>
                        <a href=\"";
            // line 675
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_subscription_new");
            yield "\" class=\"btn btn-primary btn-sm\">
                            <i class=\"fas fa-plus me-1\"></i> Nouvel abonnement
                        </a>
                    </div>
                ";
        } else {
            // line 680
            yield "                    <div class=\"table-responsive\">
                        <table class=\"table table-hover mb-0\">
                            <thead class=\"table-light\">
                                <tr>
                                    <th style=\"min-width: 60px;\">ID</th>
                                    <th style=\"min-width: 120px;\">Entreprise</th>
                                    <th style=\"min-width: 120px;\">Plan</th>
                                    <th style=\"min-width: 90px;\">Période</th>
                                    <th style=\"min-width: 90px;\">Statut</th>
                                    <th style=\"min-width: 90px;\" class=\"d-none d-sm-table-cell\">Début</th>
                                    <th style=\"min-width: 90px;\" class=\"d-none d-md-table-cell\">Fin</th>
                                    <th style=\"min-width: 70px;\" class=\"d-none d-lg-table-cell\">Actif</th>
                                    <th style=\"min-width: 80px;\">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 696
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["subscriptions"]) || array_key_exists("subscriptions", $context) ? $context["subscriptions"] : (function () { throw new RuntimeError('Variable "subscriptions" does not exist.', 696, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                // line 697
                yield "                                    <tr class=\"subscription-row\">
                                        <td onclick=\"window.location='";
                // line 698
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_subscription_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "id", [], "any", false, false, false, 698)]), "html", null, true);
                yield "'\">#";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "id", [], "any", false, false, false, 698), "html", null, true);
                yield "</td>
                                        <td onclick=\"window.location='";
                // line 699
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_subscription_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "id", [], "any", false, false, false, 699)]), "html", null, true);
                yield "'\">
                                            <strong class=\"small\">";
                // line 700
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "hmaService", [], "any", false, false, false, 700), "companyName", [], "any", false, false, false, 700), 0, 15), "html", null, true);
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "hmaService", [], "any", false, false, false, 700), "companyName", [], "any", false, false, false, 700)) > 15)) {
                    yield "...";
                }
                yield "</strong>
                                            <br>
                                            <small class=\"text-muted\" style=\"font-size:0.5rem;\">";
                // line 702
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "hmaService", [], "any", false, false, false, 702), "subscriptionNumber", [], "any", false, false, false, 702), "html", null, true);
                yield "</small>
                                        </td>
                                        <td onclick=\"window.location='";
                // line 704
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_subscription_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "id", [], "any", false, false, false, 704)]), "html", null, true);
                yield "'\">
                                            <strong class=\"small\">";
                // line 705
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "subscriptionPlan", [], "any", false, false, false, 705), "displayName", [], "any", false, false, false, 705), 0, 12), "html", null, true);
                yield "</strong>
                                            <br>
                                            <small class=\"text-muted\" style=\"font-size:0.5rem;\">";
                // line 707
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "subscriptionPlan", [], "any", false, false, false, 707), "name", [], "any", false, false, false, 707), "html", null, true);
                yield "</small>
                                        </td>
                                        <td onclick=\"window.location='";
                // line 709
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_subscription_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "id", [], "any", false, false, false, 709)]), "html", null, true);
                yield "'\">
                                            <span class=\"badge bg-secondary\" style=\"font-size:0.5rem;\">
                                                <i class=\"fas ";
                // line 711
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "billingPeriod", [], "any", false, false, false, 711) == "monthly")) ? ("fa-calendar-alt") : ("fa-calendar"));
                yield " me-1\"></i>
                                                ";
                // line 712
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "billingPeriod", [], "any", false, false, false, 712) == "monthly")) ? ("Mensuel") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), "Annuel", 0, 6), "html", null, true)));
                yield "
                                            </span>
                                        </td>
                                        <td onclick=\"window.location='";
                // line 715
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_subscription_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "id", [], "any", false, false, false, 715)]), "html", null, true);
                yield "'\">
                                            <span class=\"badge-status ";
                // line 716
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "status", [], "any", false, false, false, 716), "html", null, true);
                yield "\" style=\"font-size:0.5rem; padding:0.15rem 0.3rem;\">
                                                ";
                // line 717
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "status", [], "any", false, false, false, 717) == "active")) {
                    // line 718
                    yield "                                                    <i class=\"fas fa-check-circle me-1\" style=\"font-size:0.5rem;\"></i> <span class=\"d-none d-sm-inline\">Actif</span>
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 719
$context["sub"], "status", [], "any", false, false, false, 719) == "pending")) {
                    // line 720
                    yield "                                                    <i class=\"fas fa-clock me-1\" style=\"font-size:0.5rem;\"></i> <span class=\"d-none d-sm-inline\">En attente</span>
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 721
$context["sub"], "status", [], "any", false, false, false, 721) == "expired")) {
                    // line 722
                    yield "                                                    <i class=\"fas fa-hourglass-end me-1\" style=\"font-size:0.5rem;\"></i> <span class=\"d-none d-sm-inline\">Expiré</span>
                                                ";
                } else {
                    // line 724
                    yield "                                                    <i class=\"fas fa-ban me-1\" style=\"font-size:0.5rem;\"></i> <span class=\"d-none d-sm-inline\">Annulé</span>
                                                ";
                }
                // line 726
                yield "                                            </span>
                                        </td>
                                        <td onclick=\"window.location='";
                // line 728
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_subscription_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "id", [], "any", false, false, false, 728)]), "html", null, true);
                yield "'\" class=\"d-none d-sm-table-cell\">
                                            <small style=\"font-size:0.5rem;\">";
                // line 729
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "startsAt", [], "any", false, false, false, 729)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "startsAt", [], "any", false, false, false, 729), "d/m/Y"), "html", null, true)) : ("-"));
                yield "</small>
                                        </td>
                                        <td onclick=\"window.location='";
                // line 731
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_subscription_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "id", [], "any", false, false, false, 731)]), "html", null, true);
                yield "'\" class=\"d-none d-md-table-cell\">
                                            <small style=\"font-size:0.5rem;\">";
                // line 732
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "endsAt", [], "any", false, false, false, 732)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "endsAt", [], "any", false, false, false, 732), "d/m/Y"), "html", null, true)) : ("-"));
                yield "</small>
                                            ";
                // line 733
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "endsAt", [], "any", false, false, false, 733) && (CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "endsAt", [], "any", false, false, false, 733) < $this->extensions['Twig\Extension\CoreExtension']->convertDate()))) {
                    // line 734
                    yield "                                                <i class=\"fas fa-exclamation-triangle text-danger ms-1\" title=\"Expiré\" style=\"font-size:0.5rem;\"></i>
                                            ";
                }
                // line 736
                yield "                                        </td>
                                        <td onclick=\"window.location='";
                // line 737
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_subscription_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "id", [], "any", false, false, false, 737)]), "html", null, true);
                yield "'\" class=\"d-none d-lg-table-cell\">
                                            ";
                // line 738
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "subscriptionActive", [], "any", false, false, false, 738)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 739
                    yield "                                                <span class=\"badge bg-success\" style=\"font-size:0.45rem;\"><i class=\"fas fa-check me-1\"></i> Oui</span>
                                            ";
                } else {
                    // line 741
                    yield "                                                <span class=\"badge bg-danger\" style=\"font-size:0.45rem;\"><i class=\"fas fa-times me-1\"></i> Non</span>
                                            ";
                }
                // line 743
                yield "                                        </td>
                                        <td class=\"text-center\" onclick=\"event.stopPropagation()\">
                                            <div class=\"d-flex gap-1 justify-content-center\">
                                                <a href=\"";
                // line 746
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_subscription_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "id", [], "any", false, false, false, 746)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-primary btn-action\" title=\"Voir\" style=\"padding:0.1rem 0.2rem; font-size:0.5rem;\">
                                                    <i class=\"fas fa-eye\" style=\"font-size:0.5rem;\"></i>
                                                </a>
                                                <a href=\"";
                // line 749
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_payment_index", ["subscription_id" => CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "id", [], "any", false, false, false, 749)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-info btn-action\" title=\"Paiements\" style=\"padding:0.1rem 0.2rem; font-size:0.5rem;\">
                                                    <i class=\"fas fa-credit-card\" style=\"font-size:0.5rem;\"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['sub'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 756
            yield "                            </tbody>
                        </table>
                    </div>
                ";
        }
        // line 760
        yield "            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 766
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

        // line 767
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
        // line 777
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("super_admin_subscription_index");
        yield "';
}
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
        return "super_admin/subscription/index.html.twig";
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
        return array (  1186 => 777,  1173 => 767,  1160 => 766,  1145 => 760,  1139 => 756,  1126 => 749,  1120 => 746,  1115 => 743,  1111 => 741,  1107 => 739,  1105 => 738,  1101 => 737,  1098 => 736,  1094 => 734,  1092 => 733,  1088 => 732,  1084 => 731,  1079 => 729,  1075 => 728,  1071 => 726,  1067 => 724,  1063 => 722,  1061 => 721,  1058 => 720,  1056 => 719,  1053 => 718,  1051 => 717,  1047 => 716,  1043 => 715,  1037 => 712,  1033 => 711,  1028 => 709,  1023 => 707,  1018 => 705,  1014 => 704,  1009 => 702,  1001 => 700,  997 => 699,  991 => 698,  988 => 697,  984 => 696,  966 => 680,  958 => 675,  952 => 671,  950 => 670,  943 => 666,  930 => 655,  921 => 648,  912 => 642,  904 => 637,  895 => 631,  887 => 625,  883 => 623,  879 => 621,  877 => 620,  874 => 619,  872 => 618,  869 => 617,  867 => 616,  857 => 609,  848 => 603,  839 => 597,  826 => 586,  823 => 585,  821 => 584,  803 => 569,  792 => 561,  780 => 552,  776 => 551,  772 => 550,  768 => 549,  756 => 539,  749 => 537,  744 => 536,  737 => 535,  733 => 534,  718 => 521,  711 => 516,  704 => 512,  701 => 511,  698 => 510,  691 => 506,  688 => 505,  685 => 504,  680 => 501,  675 => 499,  670 => 498,  666 => 497,  662 => 496,  658 => 495,  654 => 493,  651 => 492,  648 => 491,  642 => 490,  635 => 486,  632 => 485,  629 => 484,  624 => 483,  622 => 482,  619 => 481,  617 => 480,  600 => 466,  582 => 451,  564 => 436,  546 => 421,  526 => 404,  500 => 381,  488 => 371,  475 => 370,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/super_admin/subscription/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Gestion des abonnements - Super Admin{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    .stat-card {
        transition: transform 0.2s, box-shadow 0.2s;
        border-radius: 1rem;
        border: none;
        background: white !important;
    }
    .stat-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }
    .stat-value {
        font-size: 1.75rem;
        font-weight: bold;
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
    .badge-status.active { background: #d1fae5; color: #065f46; }
    .badge-status.pending { background: #fef3c7; color: #b45309; }
    .badge-status.expired { background: #fee2e2; color: #991b1b; }
    .badge-status.cancelled { background: #f1f5f9; color: #475569; }
    .table-container {
        overflow-x: auto;
    }
    .subscription-row {
        cursor: pointer;
        transition: background 0.2s;
    }
    .subscription-row:hover {
        background: #f1f5f9;
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
    /* Carte dernier abonnement */
    .last-subscription-card {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 1rem;
        transition: transform 0.2s, box-shadow 0.2s;
    }
    .last-subscription-card:hover {
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
    }
    .info-value {
        font-weight: 600;
    }

    /* Couleurs des icônes sur fond blanc */
    .stat-icon-primary { color: #0463f1; }
    .stat-icon-success { color: #10b981; }
    .stat-icon-warning { color: #f59e0b; }
    .stat-icon-danger { color: #ef4444; }
    .stat-icon-bg {
        background: rgba(4, 99, 241, 0.1);
    }
    .stat-icon-bg-success {
        background: rgba(16, 185, 129, 0.1);
    }
    .stat-icon-bg-warning {
        background: rgba(245, 158, 11, 0.1);
    }
    .stat-icon-bg-danger {
        background: rgba(239, 68, 68, 0.1);
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
        .last-subscription-card { padding: 1rem !important; }
        
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
        .btn-outline-info.me-2 {
            margin-right: 0.25rem !important;
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
        .text-muted.small {
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
        
        /* Dernier abonnement */
        .last-subscription-card {
            padding: 0.5rem !important;
            border-radius: 0.75rem !important;
        }
        .last-subscription-card h5 {
            font-size: 0.75rem !important;
        }
        .last-subscription-card .fa-2x {
            font-size: 1.5rem !important;
        }
        .last-subscription-card .row {
            gap: 0.25rem !important;
        }
        .last-subscription-card .info-row {
            padding: 0.25rem 0 !important;
        }
        .last-subscription-card .info-label {
            font-size: 0.55rem !important;
        }
        .last-subscription-card .info-value {
            font-size: 0.6rem !important;
        }
        .last-subscription-card .badge {
            font-size: 0.5rem !important;
            padding: 0.15rem 0.3rem !important;
        }
        .last-subscription-card .btn {
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
        .subscription-row:hover {
            background: transparent !important;
        }
        .last-subscription-card:hover {
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
                        <a href=\"{{ path('app_dashboard') }}\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Dashboard
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active small\">
                        <i class=\"fas fa-tags me-1\"></i> Abonnements
                    </li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-tags text-primary me-2\"></i>
                <span class=\"d-none d-sm-inline\">Gestion des abonnements</span>
                <span class=\"d-inline d-sm-none\">Abonnements</span>
            </h1>
            <p class=\"text-muted mt-1 small d-none d-sm-block\">
                <i class=\"fas fa-globe me-1\"></i>
                Gérez tous les abonnements des entreprises
            </p>
            <p class=\"text-muted mt-1 small d-block d-sm-none\">
                Gestion des abonnements
            </p>
        </div>
        <div class=\"d-flex gap-1 gap-sm-2 flex-wrap w-100 w-sm-auto\">
            <a href=\"{{ path('super_admin_payment_index') }}\" class=\"btn btn-outline-info btn-sm flex-grow-1 flex-sm-grow-0\">
                <i class=\"fas fa-credit-card me-1\"></i> <span class=\"d-none d-sm-inline\">Voir les paiements</span>
                <span class=\"d-inline d-sm-none\">Paiements</span>
            </a>
        </div>
    </div>

    <!-- ==========================================
         CARTES STATISTIQUES - FOND BLANC
    ========================================== -->
    <div class=\"row g-2 g-md-3 mb-3 mb-md-4\">
        <div class=\"col-6 col-md-3\">
            <div class=\"card stat-card shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <div class=\"text-muted small text-uppercase\" style=\"font-size:0.55rem;\">Total</div>
                            <div class=\"stat-value text-dark\">{{ subscriptions|length }}</div>
                        </div>
                        <div class=\"rounded-circle stat-icon-bg p-2 p-md-3\">
                            <i class=\"fas fa-tags fa-fw stat-icon-primary\" style=\"font-size:1rem;\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-6 col-md-3\">
            <div class=\"card stat-card shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <div class=\"text-muted small text-uppercase\" style=\"font-size:0.55rem;\">Actifs</div>
                            <div class=\"stat-value text-dark\">{{ subscriptions|filter(s => s.status == 'active')|length }}</div>
                        </div>
                        <div class=\"rounded-circle stat-icon-bg-success p-2 p-md-3\">
                            <i class=\"fas fa-check-circle fa-fw stat-icon-success\" style=\"font-size:1rem;\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-6 col-md-3\">
            <div class=\"card stat-card shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <div class=\"text-muted small text-uppercase\" style=\"font-size:0.55rem;\">En attente</div>
                            <div class=\"stat-value text-dark\">{{ subscriptions|filter(s => s.status == 'pending')|length }}</div>
                        </div>
                        <div class=\"rounded-circle stat-icon-bg-warning p-2 p-md-3\">
                            <i class=\"fas fa-clock fa-fw stat-icon-warning\" style=\"font-size:1rem;\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-6 col-md-3\">
            <div class=\"card stat-card shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <div class=\"text-muted small text-uppercase\" style=\"font-size:0.55rem;\">Expirés/Annulés</div>
                            <div class=\"stat-value text-dark\">{{ subscriptions|filter(s => s.status == 'expired' or s.status == 'cancelled')|length }}</div>
                        </div>
                        <div class=\"rounded-circle stat-icon-bg-danger p-2 p-md-3\">
                            <i class=\"fas fa-exclamation-circle fa-fw stat-icon-danger\" style=\"font-size:1rem;\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==========================================
         BADGES DE FILTRES ACTIFS
    ========================================== -->
    {% if filters.company_id or filters.status or filters.date_from or filters.date_to %}
    <div class=\"d-flex gap-1 gap-md-2 flex-wrap mb-2 mb-md-3\">
        {% if filters.company_id and companies is defined %}
            {% for company in companies %}
                {% if company.id == filters.company_id %}
                    <span class=\"filter-badge\" onclick=\"removeFilter('company_id')\" style=\"font-size:0.6rem; padding:0.15rem 0.4rem;\">
                        <i class=\"fas fa-building me-1\"></i> {{ company.companyName|slice(0, 15) }}
                        <i class=\"fas fa-times ms-1\"></i>
                    </span>
                {% endif %}
            {% endfor %}
        {% endif %}
        {% if filters.status %}
            <span class=\"filter-badge\" onclick=\"removeFilter('status')\" style=\"font-size:0.6rem; padding:0.15rem 0.4rem;\">
                <i class=\"fas fa-filter me-1\"></i> Statut: 
                {% if filters.status == 'active' %}Actif
                {% elseif filters.status == 'pending' %}En attente
                {% elseif filters.status == 'expired' %}Expiré
                {% elseif filters.status == 'cancelled' %}Annulé
                {% else %}{{ filters.status }}
                {% endif %}
                <i class=\"fas fa-times ms-1\"></i>
            </span>
        {% endif %}
        {% if filters.date_from %}
            <span class=\"filter-badge\" onclick=\"removeFilter('date_from')\" style=\"font-size:0.6rem; padding:0.15rem 0.4rem;\">
                <i class=\"fas fa-calendar me-1\"></i> Depuis: {{ filters.date_from }}
                <i class=\"fas fa-times ms-1\"></i>
            </span>
        {% endif %}
        {% if filters.date_to %}
            <span class=\"filter-badge\" onclick=\"removeFilter('date_to')\" style=\"font-size:0.6rem; padding:0.15rem 0.4rem;\">
                <i class=\"fas fa-calendar me-1\"></i> Jusqu'au: {{ filters.date_to }}
                <i class=\"fas fa-times ms-1\"></i>
            </span>
        {% endif %}
        <button class=\"btn btn-sm btn-outline-secondary\" onclick=\"clearAllFilters()\" style=\"font-size:0.55rem; padding:0.15rem 0.4rem;\">
            <i class=\"fas fa-eraser me-1\"></i> Effacer tout
        </button>
    </div>
    {% endif %}

    <!-- ==========================================
         FILTRES
    ========================================== -->
    <div class=\"filter-card p-2 p-md-4 mb-3 mb-md-4 shadow-sm\">
        <form method=\"get\" class=\"row g-2 g-md-3 align-items-end\">
            <!-- Entreprise - 100% mobile, 3 desktop -->
            <div class=\"col-12 col-md-3 filter-col\">
                <label class=\"form-label fw-semibold small mb-1\" style=\"font-size:0.6rem;\">
                    <i class=\"fas fa-building me-1\"></i>Entreprise
                </label>
                <select name=\"company_id\" class=\"form-select form-select-sm filter-select\" style=\"font-size:0.7rem;\">
                    <option value=\"\">Toutes</option>
                    {% for company in companies|default([]) %}
                        <option value=\"{{ company.id }}\" {{ filters.company_id == company.id ? 'selected' }}>
                            {{ company.companyName|slice(0, 25) }}{% if company.companyName|length > 25 %}...{% endif %}
                        </option>
                    {% endfor %}
                </select>
            </div>
            
            <!-- Statut - 50% mobile, 2 desktop -->
            <div class=\"col-6 col-md-2 filter-col-half\">
                <label class=\"form-label fw-semibold small mb-1\" style=\"font-size:0.6rem;\">
                    <i class=\"fas fa-filter me-1\"></i>Statut
                </label>
                <select name=\"status\" class=\"form-select form-select-sm filter-select\" style=\"font-size:0.7rem;\">
                    <option value=\"\">Tous</option>
                    <option value=\"active\" {{ filters.status == 'active' ? 'selected' }}>✓ Actif</option>
                    <option value=\"pending\" {{ filters.status == 'pending' ? 'selected' }}>⏳ En attente</option>
                    <option value=\"expired\" {{ filters.status == 'expired' ? 'selected' }}>⌛ Expiré</option>
                    <option value=\"cancelled\" {{ filters.status == 'cancelled' ? 'selected' }}>✗ Annulé</option>
                </select>
            </div>
            
            <!-- Date du - 50% mobile, 2 desktop -->
            <div class=\"col-6 col-md-2 filter-col-half\">
                <label class=\"form-label fw-semibold small mb-1\" style=\"font-size:0.6rem;\">
                    <i class=\"fas fa-calendar me-1\"></i>Date du
                </label>
                <input type=\"date\" name=\"date_from\" class=\"form-control form-control-sm filter-input\" value=\"{{ filters.date_from }}\" style=\"font-size:0.7rem;\">
            </div>
            
            <!-- Date au - 50% mobile, 2 desktop -->
            <div class=\"col-6 col-md-2 filter-col-half\">
                <label class=\"form-label fw-semibold small mb-1\" style=\"font-size:0.6rem;\">
                    <i class=\"fas fa-calendar me-1\"></i>Date au
                </label>
                <input type=\"date\" name=\"date_to\" class=\"form-control form-control-sm filter-input\" value=\"{{ filters.date_to }}\" style=\"font-size:0.7rem;\">
            </div>
            
            <!-- Bouton Filtrer - 100% mobile, 3 desktop -->
            <div class=\"col-12 col-md-3 filter-col\">
                <button type=\"submit\" class=\"btn btn-primary w-100\" style=\"font-size:0.7rem; padding:0.2rem 0.4rem;\">
                    <i class=\"fas fa-search me-1\"></i> Filtrer
                </button>
            </div>
        </form>
    </div>

    <!-- ==========================================
         DERNIER ABONNEMENT
    ========================================== -->
    {% set lastSubscription = subscriptions|first %}
    {% if lastSubscription %}
        <div class=\"last-subscription-card p-3 p-md-4 mb-3 mb-md-4 text-white\">
            <div class=\"d-flex justify-content-between align-items-center mb-2 mb-md-3\">
                <h5 class=\"mb-0 fw-bold fs-6 fs-md-5\">
                    <i class=\"fas fa-clock me-2\"></i> Dernier abonnement
                </h5>
                <i class=\"fas fa-tag fa-2x opacity-50\" style=\"font-size:1.5rem;\"></i>
            </div>
            <div class=\"row g-1 g-md-0\">
                <div class=\"col-12 col-md-4\">
                    <div class=\"info-row\">
                        <span class=\"info-label\" style=\"font-size:0.65rem;\">Entreprise</span>
                        <span class=\"info-value\" style=\"font-size:0.7rem;\">{{ lastSubscription.hmaService.companyName|slice(0, 20) }}</span>
                    </div>
                </div>
                <div class=\"col-12 col-md-4\">
                    <div class=\"info-row\">
                        <span class=\"info-label\" style=\"font-size:0.65rem;\">Plan</span>
                        <span class=\"info-value\" style=\"font-size:0.7rem;\">{{ lastSubscription.subscriptionPlan.displayName }}</span>
                    </div>
                </div>
                <div class=\"col-12 col-md-4\">
                    <div class=\"info-row\">
                        <span class=\"info-label\" style=\"font-size:0.65rem;\">Période</span>
                        <span class=\"info-value\" style=\"font-size:0.7rem;\">{{ lastSubscription.billingPeriod == 'monthly' ? 'Mensuel' : 'Annuel' }}</span>
                    </div>
                </div>
                <div class=\"col-12 col-md-4\">
                    <div class=\"info-row\">
                        <span class=\"info-label\" style=\"font-size:0.65rem;\">Statut</span>
                        <span class=\"info-value\" style=\"font-size:0.7rem;\">
                            {% if lastSubscription.status == 'active' %}
                                <span class=\"badge bg-success\" style=\"font-size:0.55rem;\">✓ Actif</span>
                            {% elseif lastSubscription.status == 'pending' %}
                                <span class=\"badge bg-warning text-dark\" style=\"font-size:0.55rem;\">⏳ En attente</span>
                            {% elseif lastSubscription.status == 'expired' %}
                                <span class=\"badge bg-danger\" style=\"font-size:0.55rem;\">⌛ Expiré</span>
                            {% else %}
                                <span class=\"badge bg-secondary\" style=\"font-size:0.55rem;\">✗ Annulé</span>
                            {% endif %}
                        </span>
                    </div>
                </div>
                <div class=\"col-12 col-md-4\">
                    <div class=\"info-row\">
                        <span class=\"info-label\" style=\"font-size:0.65rem;\">Date création</span>
                        <span class=\"info-value\" style=\"font-size:0.7rem;\">{{ lastSubscription.createdAt|date('d/m/Y H:i') }}</span>
                    </div>
                </div>
                <div class=\"col-12 col-md-4\">
                    <div class=\"info-row\">
                        <span class=\"info-label\" style=\"font-size:0.65rem;\">Date fin</span>
                        <span class=\"info-value\" style=\"font-size:0.7rem;\">{{ lastSubscription.endsAt ? lastSubscription.endsAt|date('d/m/Y') : '-' }}</span>
                    </div>
                </div>
            </div>
            <div class=\"mt-2 mt-md-3 text-end\">
                <a href=\"{{ path('super_admin_subscription_show', {'id': lastSubscription.id}) }}\" class=\"btn btn-light btn-sm\" style=\"font-size:0.65rem; padding:0.15rem 0.4rem;\">
                    <i class=\"fas fa-eye me-1\"></i> Voir les détails
                </a>
            </div>
        </div>
    {% else %}
        <div class=\"last-subscription-card p-3 p-md-4 mb-3 mb-md-4 text-white\">
            <div class=\"text-center py-2 py-md-3\">
                <i class=\"fas fa-tags fa-2x fa-md-3x mb-2 opacity-50\"></i>
                <p class=\"mb-0 small\">Aucun abonnement enregistré</p>
            </div>
        </div>
    {% endif %}

    <!-- ==========================================
         LISTE DES ABONNEMENTS
    ========================================== -->
    <div class=\"card border-0 shadow-sm\">
        <div class=\"card-header bg-white py-2 py-md-3 d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <h5 class=\"mb-0 fw-semibold fs-6 fs-md-5\">
                <i class=\"fas fa-list me-2 text-primary\"></i>
                <span class=\"d-none d-sm-inline\">Liste des abonnements</span>
                <span class=\"d-inline d-sm-none\">Abonnements</span>
            </h5>
            <span class=\"badge bg-secondary\">{{ subscriptions|length }}</span>
        </div>
        <div class=\"table-container\">
            <div class=\"card-body p-0\">
                {% if subscriptions is empty %}
                    <div class=\"text-center py-4 py-md-5\">
                        <i class=\"fas fa-tags fa-3x text-muted mb-3 opacity-50\"></i>
                        <p class=\"text-muted mb-0 small\">Aucun abonnement trouvé</p>
                        <p class=\"text-muted small mb-3\">Modifiez vos filtres ou créez un nouvel abonnement</p>
                        <a href=\"{{ path('super_admin_subscription_new') }}\" class=\"btn btn-primary btn-sm\">
                            <i class=\"fas fa-plus me-1\"></i> Nouvel abonnement
                        </a>
                    </div>
                {% else %}
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover mb-0\">
                            <thead class=\"table-light\">
                                <tr>
                                    <th style=\"min-width: 60px;\">ID</th>
                                    <th style=\"min-width: 120px;\">Entreprise</th>
                                    <th style=\"min-width: 120px;\">Plan</th>
                                    <th style=\"min-width: 90px;\">Période</th>
                                    <th style=\"min-width: 90px;\">Statut</th>
                                    <th style=\"min-width: 90px;\" class=\"d-none d-sm-table-cell\">Début</th>
                                    <th style=\"min-width: 90px;\" class=\"d-none d-md-table-cell\">Fin</th>
                                    <th style=\"min-width: 70px;\" class=\"d-none d-lg-table-cell\">Actif</th>
                                    <th style=\"min-width: 80px;\">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for sub in subscriptions %}
                                    <tr class=\"subscription-row\">
                                        <td onclick=\"window.location='{{ path('super_admin_subscription_show', {'id': sub.id}) }}'\">#{{ sub.id }}</td>
                                        <td onclick=\"window.location='{{ path('super_admin_subscription_show', {'id': sub.id}) }}'\">
                                            <strong class=\"small\">{{ sub.hmaService.companyName|slice(0, 15) }}{% if sub.hmaService.companyName|length > 15 %}...{% endif %}</strong>
                                            <br>
                                            <small class=\"text-muted\" style=\"font-size:0.5rem;\">{{ sub.hmaService.subscriptionNumber }}</small>
                                        </td>
                                        <td onclick=\"window.location='{{ path('super_admin_subscription_show', {'id': sub.id}) }}'\">
                                            <strong class=\"small\">{{ sub.subscriptionPlan.displayName|slice(0, 12) }}</strong>
                                            <br>
                                            <small class=\"text-muted\" style=\"font-size:0.5rem;\">{{ sub.subscriptionPlan.name }}</small>
                                        </td>
                                        <td onclick=\"window.location='{{ path('super_admin_subscription_show', {'id': sub.id}) }}'\">
                                            <span class=\"badge bg-secondary\" style=\"font-size:0.5rem;\">
                                                <i class=\"fas {{ sub.billingPeriod == 'monthly' ? 'fa-calendar-alt' : 'fa-calendar' }} me-1\"></i>
                                                {{ sub.billingPeriod == 'monthly' ? 'Mensuel' : 'Annuel'|slice(0, 6) }}
                                            </span>
                                        </td>
                                        <td onclick=\"window.location='{{ path('super_admin_subscription_show', {'id': sub.id}) }}'\">
                                            <span class=\"badge-status {{ sub.status }}\" style=\"font-size:0.5rem; padding:0.15rem 0.3rem;\">
                                                {% if sub.status == 'active' %}
                                                    <i class=\"fas fa-check-circle me-1\" style=\"font-size:0.5rem;\"></i> <span class=\"d-none d-sm-inline\">Actif</span>
                                                {% elseif sub.status == 'pending' %}
                                                    <i class=\"fas fa-clock me-1\" style=\"font-size:0.5rem;\"></i> <span class=\"d-none d-sm-inline\">En attente</span>
                                                {% elseif sub.status == 'expired' %}
                                                    <i class=\"fas fa-hourglass-end me-1\" style=\"font-size:0.5rem;\"></i> <span class=\"d-none d-sm-inline\">Expiré</span>
                                                {% else %}
                                                    <i class=\"fas fa-ban me-1\" style=\"font-size:0.5rem;\"></i> <span class=\"d-none d-sm-inline\">Annulé</span>
                                                {% endif %}
                                            </span>
                                        </td>
                                        <td onclick=\"window.location='{{ path('super_admin_subscription_show', {'id': sub.id}) }}'\" class=\"d-none d-sm-table-cell\">
                                            <small style=\"font-size:0.5rem;\">{{ sub.startsAt ? sub.startsAt|date('d/m/Y') : '-' }}</small>
                                        </td>
                                        <td onclick=\"window.location='{{ path('super_admin_subscription_show', {'id': sub.id}) }}'\" class=\"d-none d-md-table-cell\">
                                            <small style=\"font-size:0.5rem;\">{{ sub.endsAt ? sub.endsAt|date('d/m/Y') : '-' }}</small>
                                            {% if sub.endsAt and sub.endsAt < date() %}
                                                <i class=\"fas fa-exclamation-triangle text-danger ms-1\" title=\"Expiré\" style=\"font-size:0.5rem;\"></i>
                                            {% endif %}
                                        </td>
                                        <td onclick=\"window.location='{{ path('super_admin_subscription_show', {'id': sub.id}) }}'\" class=\"d-none d-lg-table-cell\">
                                            {% if sub.subscriptionActive %}
                                                <span class=\"badge bg-success\" style=\"font-size:0.45rem;\"><i class=\"fas fa-check me-1\"></i> Oui</span>
                                            {% else %}
                                                <span class=\"badge bg-danger\" style=\"font-size:0.45rem;\"><i class=\"fas fa-times me-1\"></i> Non</span>
                                            {% endif %}
                                        </td>
                                        <td class=\"text-center\" onclick=\"event.stopPropagation()\">
                                            <div class=\"d-flex gap-1 justify-content-center\">
                                                <a href=\"{{ path('super_admin_subscription_show', {'id': sub.id}) }}\" class=\"btn btn-sm btn-outline-primary btn-action\" title=\"Voir\" style=\"padding:0.1rem 0.2rem; font-size:0.5rem;\">
                                                    <i class=\"fas fa-eye\" style=\"font-size:0.5rem;\"></i>
                                                </a>
                                                <a href=\"{{ path('super_admin_payment_index', {'subscription_id': sub.id}) }}\" class=\"btn btn-sm btn-outline-info btn-action\" title=\"Paiements\" style=\"padding:0.1rem 0.2rem; font-size:0.5rem;\">
                                                    <i class=\"fas fa-credit-card\" style=\"font-size:0.5rem;\"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                {% endif %}
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
function removeFilter(filter) {
    let url = new URL(window.location.href);
    url.searchParams.delete(filter);
    url.searchParams.set('page', '1');
    window.location.href = url.toString();
}

function clearAllFilters() {
    window.location.href = '{{ path('super_admin_subscription_index') }}';
}
</script>
{% endblock %}", "super_admin/subscription/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\super_admin\\subscription\\index.html.twig");
    }
}
