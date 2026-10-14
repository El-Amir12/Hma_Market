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

/* stock/transfer/index.html.twig */
class __TwigTemplate_179c5d8514ff8d10c0aace835be2bb0c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/transfer/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/transfer/index.html.twig"));

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

        yield "Transferts de stock - HMA Market";
        
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
       STAT CARDS
       ============================================ */
    .stat-card {
        transition: transform 0.2s, box-shadow 0.2s;
        border-radius: 1rem;
        background: white !important;
        border: none;
        cursor: pointer;
    }
    .stat-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }
    .stat-card .stat-value {
        font-size: 1.75rem;
        font-weight: bold;
        margin-bottom: 0;
        line-height: 1.1;
    }
    .stat-card .stat-label {
        font-size: 0.7rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-weight: 600;
    }
    .stat-card .stat-sub {
        font-size: 0.68rem;
        margin-top: 0.25rem;
        opacity: 0.85;
    }
    .stat-icon {
        width: 46px;
        height: 46px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 1rem;
        flex-shrink: 0;
    }
    .card-bg-primary {
        background: linear-gradient(135deg, #0463f1 0%, #0350c4 100%) !important;
        color: white;
    }
    .card-bg-warning {
        background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%) !important;
        color: white;
    }
    .card-bg-success {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%) !important;
        color: white;
    }
    .card-bg-danger {
        background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%) !important;
        color: white;
    }
    .card-bg-info {
        background: linear-gradient(135deg, #0ea5e9 0%, #0284c7 100%) !important;
        color: white;
    }
    .card-bg-primary .stat-icon,
    .card-bg-warning .stat-icon,
    .card-bg-success .stat-icon,
    .card-bg-danger .stat-icon,
    .card-bg-info .stat-icon {
        background: rgba(255,255,255,0.2);
    }
    .card-bg-primary .stat-value,
    .card-bg-warning .stat-value,
    .card-bg-success .stat-value,
    .card-bg-danger .stat-value,
    .card-bg-info .stat-value {
        color: white;
    }
    .card-bg-primary .text-muted,
    .card-bg-warning .text-muted,
    .card-bg-success .text-muted,
    .card-bg-danger .text-muted,
    .card-bg-info .text-muted {
        color: rgba(255,255,255,0.85) !important;
    }

    /* ============================================
       BADGES STATUT
       ============================================ */
    .badge-status {
        font-size: 0.72rem;
        padding: 0.35rem 0.6rem;
        font-weight: 600;
    }

    /* ============================================
       CARTES MOBILE
       ============================================ */
    .transfer-card-mobile {
        background: #fff;
        border: 1px solid #e9ecef;
        border-radius: 12px;
        padding: 1rem;
        margin-bottom: 0.75rem;
        box-shadow: 0 2px 6px rgba(0,0,0,0.04);
        position: relative;
        transition: box-shadow 0.2s;
    }
    .transfer-card-mobile:hover {
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    }
    .transfer-card-mobile::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        width: 4px;
        border-radius: 12px 0 0 12px;
    }
    .transfer-card-mobile.status-pending::before {
        background: #f59e0b;
    }
    .transfer-card-mobile.status-in-transit::before {
        background: #0ea5e9;
    }
    .transfer-card-mobile.status-completed::before {
        background: #10b981;
    }
    .transfer-card-mobile.status-cancelled::before {
        background: #ef4444;
    }

    .transfer-card-mobile .mobile-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        gap: 0.75rem;
        margin-bottom: 0.75rem;
        padding-bottom: 0.75rem;
        border-bottom: 1px dashed #e9ecef;
    }
    .transfer-card-mobile .mobile-number {
        font-weight: 700;
        color: #1e293b;
        font-size: 0.92rem;
    }
    .transfer-card-mobile .mobile-date {
        font-size: 0.72rem;
        color: #64748b;
        margin-top: 0.15rem;
    }

    .transfer-card-mobile .mobile-rows {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
    }
    .transfer-card-mobile .mobile-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 0.5rem;
        font-size: 0.82rem;
    }
    .transfer-card-mobile .mobile-row-label {
        color: #64748b;
        flex-shrink: 0;
        display: flex;
        align-items: center;
        gap: 0.35rem;
    }
    .transfer-card-mobile .mobile-row-value {
        color: #1e293b;
        font-weight: 600;
        text-align: right;
        word-break: break-word;
    }

    .transfer-card-mobile .mobile-route {
        display: flex;
        flex-direction: column;
        gap: 0.35rem;
        background: #f8fafc;
        padding: 0.65rem 0.75rem;
        border-radius: 8px;
        margin-top: 0.5rem;
        font-size: 0.82rem;
    }
    .transfer-card-mobile .route-point {
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    .transfer-card-mobile .route-point.from {
        color: #065f46;
    }
    .transfer-card-mobile .route-point.to {
        color: #1e40af;
    }
    .transfer-card-mobile .route-arrow {
        color: #94a3b8;
        font-size: 0.7rem;
        padding-left: 0.5rem;
    }

    .transfer-card-mobile .mobile-actions {
        display: flex;
        gap: 0.5rem;
        margin-top: 0.75rem;
        padding-top: 0.75rem;
        border-top: 1px dashed #e9ecef;
        flex-wrap: wrap;
    }
    .transfer-card-mobile .mobile-actions .btn {
        flex: 1 1 auto;
        min-width: 0;
        font-size: 0.78rem;
        padding: 0.45rem 0.6rem;
    }

    /* ============================================
       RESPONSIVE
       ============================================ */
    @media (max-width: 768px) {
        .container-fluid {
            padding-left: 0.75rem !important;
            padding-right: 0.75rem !important;
        }

        .page-header-flex {
            flex-direction: column !important;
            align-items: stretch !important;
            gap: 1rem;
        }
        .page-header-flex .btn-primary {
            width: 100%;
            justify-content: center;
        }
        h1.h3 {
            font-size: 1.15rem;
        }

        .stat-card .stat-value {
            font-size: 1.35rem;
        }
        .stat-card .stat-label {
            font-size: 0.62rem;
        }
        .stat-icon {
            width: 38px;
            height: 38px;
        }
        .stat-icon i {
            font-size: 1.2rem !important;
        }

        .filter-form .col-md-3 {
            width: 100%;
        }

        /* Tableau masqué sur mobile */
        .table-responsive {
            display: none;
        }
    }

    @media (min-width: 769px) {
        .transfer-cards-mobile {
            display: none;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 280
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

        // line 281
        yield "<div class=\"container-fluid px-2 px-md-4 py-3\">

    <!-- ==========================================
         EN-TÊTE
    ========================================== -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 page-header-flex flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb mb-1\">
                    <li class=\"breadcrumb-item small\">
                        <a href=\"";
        // line 291
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i>
                            <span class=\"d-none d-sm-inline\">Tableau de bord</span>
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active small\">
                        <i class=\"fas fa-exchange-alt me-1\"></i> Transferts
                    </li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-exchange-alt text-primary me-2\"></i>
                Transferts de stock
            </h1>
            <p class=\"text-muted mt-2 mb-0 small d-none d-md-block\">
                <i class=\"fas fa-info-circle me-1\"></i>
                Gérez les transferts de stock entre emplacements
            </p>
        </div>
        <div>
            <a href=\"";
        // line 311
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_transfer_new");
        yield "\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus me-1\"></i> Nouveau transfert
            </a>
        </div>
    </div>

    <!-- ==========================================
         STATISTIQUES (cliquables pour filtrer)
    ========================================== -->
    <div class=\"row g-2 g-md-3 mb-4\">
        <div class=\"col-6 col-md-3\">
            <a href=\"";
        // line 322
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_transfer_index");
        yield "\" class=\"text-decoration-none\">
                <div class=\"card stat-card card-bg-primary shadow-sm\">
                    <div class=\"card-body p-2 p-md-3\">
                        <div class=\"d-flex align-items-center justify-content-between\">
                            <div class=\"flex-grow-1\">
                                <div class=\"stat-label\">Total</div>
                                <div class=\"stat-value\">";
        // line 328
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total", [], "any", true, true, false, 328)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 328, $this->source); })()), "total", [], "any", false, false, false, 328), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</div>
                                <div class=\"stat-sub\">transferts</div>
                            </div>
                            <div class=\"stat-icon\">
                                <i class=\"fas fa-exchange-alt fa-2x\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col-6 col-md-3\">
            <a href=\"";
        // line 340
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_transfer_index", ["status" => "pending"]);
        yield "\" class=\"text-decoration-none\">
                <div class=\"card stat-card card-bg-warning shadow-sm\">
                    <div class=\"card-body p-2 p-md-3\">
                        <div class=\"d-flex align-items-center justify-content-between\">
                            <div class=\"flex-grow-1\">
                                <div class=\"stat-label\">En attente</div>
                                <div class=\"stat-value\">";
        // line 346
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "pending", [], "any", true, true, false, 346)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 346, $this->source); })()), "pending", [], "any", false, false, false, 346), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</div>
                                <div class=\"stat-sub\">à expédier</div>
                            </div>
                            <div class=\"stat-icon\">
                                <i class=\"fas fa-clock fa-2x\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col-6 col-md-3\">
            <a href=\"";
        // line 358
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_transfer_index", ["status" => "in_transit"]);
        yield "\" class=\"text-decoration-none\">
                <div class=\"card stat-card card-bg-info shadow-sm\">
                    <div class=\"card-body p-2 p-md-3\">
                        <div class=\"d-flex align-items-center justify-content-between\">
                            <div class=\"flex-grow-1\">
                                <div class=\"stat-label\">En transit</div>
                                <div class=\"stat-value\">";
        // line 364
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "in_transit", [], "any", true, true, false, 364)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 364, $this->source); })()), "in_transit", [], "any", false, false, false, 364), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</div>
                                <div class=\"stat-sub\">en route</div>
                            </div>
                            <div class=\"stat-icon\">
                                <i class=\"fas fa-truck fa-2x\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col-6 col-md-3\">
            <a href=\"";
        // line 376
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_transfer_index", ["status" => "completed"]);
        yield "\" class=\"text-decoration-none\">
                <div class=\"card stat-card card-bg-success shadow-sm\">
                    <div class=\"card-body p-2 p-md-3\">
                        <div class=\"d-flex align-items-center justify-content-between\">
                            <div class=\"flex-grow-1\">
                                <div class=\"stat-label\">Terminés</div>
                                <div class=\"stat-value\">";
        // line 382
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "completed", [], "any", true, true, false, 382)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 382, $this->source); })()), "completed", [], "any", false, false, false, 382), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</div>
                                <div class=\"stat-sub\">livrés</div>
                            </div>
                            <div class=\"stat-icon\">
                                <i class=\"fas fa-check-circle fa-2x\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <!-- ==========================================
         FILTRES
    ========================================== -->
    <div class=\"card border-0 shadow-sm mb-4\">
        <div class=\"card-header bg-white py-2 py-md-3\">
            <h5 class=\"mb-0 fw-semibold small\">
                <i class=\"fas fa-filter me-2 text-primary\"></i> Filtres
            </h5>
        </div>
        <div class=\"card-body p-2 p-md-3\">
            <form method=\"get\" class=\"row g-2 g-md-3 filter-form\">
                <div class=\"col-12 col-md-3\">
                    <label class=\"form-label fw-bold small mb-1\">Statut</label>
                    <select name=\"status\" class=\"form-select form-select-sm\">
                        <option value=\"\">Tous</option>
                        <option value=\"pending\" ";
        // line 410
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 410, $this->source); })()), "status", [], "any", false, false, false, 410) == "pending")) ? ("selected") : (""));
        yield ">En attente</option>
                        <option value=\"in_transit\" ";
        // line 411
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 411, $this->source); })()), "status", [], "any", false, false, false, 411) == "in_transit")) ? ("selected") : (""));
        yield ">En transit</option>
                        <option value=\"completed\" ";
        // line 412
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 412, $this->source); })()), "status", [], "any", false, false, false, 412) == "completed")) ? ("selected") : (""));
        yield ">Terminé</option>
                        <option value=\"cancelled\" ";
        // line 413
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 413, $this->source); })()), "status", [], "any", false, false, false, 413) == "cancelled")) ? ("selected") : (""));
        yield ">Annulé</option>
                    </select>
                </div>
                <div class=\"col-6 col-md-3\">
                    <label class=\"form-label fw-bold small mb-1\">Date du</label>
                    <input type=\"date\" name=\"date_from\" class=\"form-control form-control-sm\" value=\"";
        // line 418
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 418, $this->source); })()), "date_from", [], "any", false, false, false, 418), "html", null, true);
        yield "\">
                </div>
                <div class=\"col-6 col-md-3\">
                    <label class=\"form-label fw-bold small mb-1\">Date au</label>
                    <input type=\"date\" name=\"date_to\" class=\"form-control form-control-sm\" value=\"";
        // line 422
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 422, $this->source); })()), "date_to", [], "any", false, false, false, 422), "html", null, true);
        yield "\">
                </div>
                <div class=\"col-12 col-md-3 d-flex align-items-end gap-2\">
                    <button type=\"submit\" class=\"btn btn-primary btn-sm flex-grow-1\">
                        <i class=\"fas fa-search me-1\"></i> Filtrer
                    </button>
                    ";
        // line 428
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 428, $this->source); })()), "status", [], "any", false, false, false, 428) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 428, $this->source); })()), "date_from", [], "any", false, false, false, 428)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 428, $this->source); })()), "date_to", [], "any", false, false, false, 428))) {
            // line 429
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_transfer_index");
            yield "\" class=\"btn btn-outline-secondary btn-sm\" title=\"Effacer\">
                            <i class=\"fas fa-undo\"></i>
                        </a>
                    ";
        }
        // line 433
        yield "                </div>
            </form>
        </div>
    </div>

    <!-- ==========================================
         LISTE DES TRANSFERTS
    ========================================== -->
    <div class=\"card border-0 shadow-sm\">
        <div class=\"card-header bg-white py-2 py-md-3 d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0 fw-semibold small\">
                <i class=\"fas fa-list me-2 text-primary\"></i>
                Liste des transferts
            </h5>
            <span class=\"badge bg-secondary\">";
        // line 447
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["transfers"]) || array_key_exists("transfers", $context) ? $context["transfers"] : (function () { throw new RuntimeError('Variable "transfers" does not exist.', 447, $this->source); })())), "html", null, true);
        yield " résultat(s)</span>
        </div>

        ";
        // line 450
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["transfers"]) || array_key_exists("transfers", $context) ? $context["transfers"] : (function () { throw new RuntimeError('Variable "transfers" does not exist.', 450, $this->source); })())) > 0)) {
            // line 451
            yield "            ";
            // line 454
            yield "            <div class=\"card-body p-0 table-responsive d-none d-md-block\">
                <table class=\"table table-hover align-middle mb-0\">
                    <thead class=\"table-light\">
                        <tr>
                            <th class=\"ps-3\">N° transfert</th>
                            <th>Produit</th>
                            <th>N° lot</th>
                            <th class=\"text-end\">Qté</th>
                            <th>De → Vers</th>
                            <th>Statut</th>
                            <th>Créé par</th>
                            <th class=\"text-center pe-3\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 469
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["transfers"]) || array_key_exists("transfers", $context) ? $context["transfers"] : (function () { throw new RuntimeError('Variable "transfers" does not exist.', 469, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["transfer"]) {
                // line 470
                yield "                            <tr>
                                <td class=\"ps-3\">
                                    <div class=\"fw-bold small\">";
                // line 472
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "transferNumber", [], "any", false, false, false, 472), "html", null, true);
                yield "</div>
                                    <small class=\"text-muted\">";
                // line 473
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "createdAt", [], "any", false, false, false, 473), "d/m/Y H:i"), "html", null, true);
                yield "</small>
                                </td>
                                <td>
                                    <div class=\"fw-bold small\">";
                // line 476
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "stockBatch", [], "any", false, false, false, 476), "product", [], "any", false, false, false, 476), "name", [], "any", false, false, false, 476)), "truncate", [35], "method", false, false, false, 476), "html", null, true);
                yield "</div>
                                    <small class=\"text-muted\">";
                // line 477
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "stockBatch", [], "any", false, false, false, 477), "product", [], "any", false, false, false, 477), "barcode", [], "any", false, false, false, 477), "html", null, true);
                yield "</small>
                                </td>
                                <td><code class=\"small\">";
                // line 479
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "stockBatch", [], "any", false, false, false, 479), "batchNumber", [], "any", false, false, false, 479)), "truncate", [20], "method", false, false, false, 479), "html", null, true);
                yield "</code></td>
                                <td class=\"text-end fw-bold\">";
                // line 480
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "quantity", [], "any", false, false, false, 480), 0, ",", " "), "html", null, true);
                yield "</td>
                                <td>
                                    <div class=\"d-flex align-items-center gap-1 flex-wrap\">
                                        <span class=\"badge bg-success bg-opacity-10 text-success small\">
                                            <i class=\"fas fa-map-marker-alt\"></i> 
                                            ";
                // line 485
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "sourceLocation", [], "any", false, false, false, 485)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "sourceLocation", [], "any", false, false, false, 485), "displayName", [], "any", false, false, false, 485)), "truncate", [15], "method", false, false, false, 485), "html", null, true)) : ("—"));
                yield "
                                        </span>
                                        <i class=\"fas fa-arrow-right text-muted small\"></i>
                                        <span class=\"badge bg-primary bg-opacity-10 text-primary small\">
                                            <i class=\"fas fa-map-marker-alt\"></i> 
                                            ";
                // line 490
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "destinationLocation", [], "any", false, false, false, 490), "displayName", [], "any", false, false, false, 490)), "truncate", [15], "method", false, false, false, 490), "html", null, true);
                yield "
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <span class=\"badge ";
                // line 495
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "statusBadgeClass", [], "any", false, false, false, 495), "html", null, true);
                yield " badge-status\">
                                        <i class=\"fas ";
                // line 496
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "statusIcon", [], "any", false, false, false, 496), "html", null, true);
                yield " me-1\"></i>
                                        ";
                // line 497
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "statusLabel", [], "any", false, false, false, 497), "html", null, true);
                yield "
                                    </span>
                                </td>
                                <td>
                                    <div class=\"d-flex align-items-center gap-2\">
                                        <i class=\"fas fa-user-circle text-muted\"></i>
                                        <small>";
                // line 503
                yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "createdBy", [], "any", false, false, false, 503), "fullName", [], "any", false, false, false, 503)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "createdBy", [], "any", false, false, false, 503), "fullName", [], "any", false, false, false, 503), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "createdBy", [], "any", false, false, false, 503), "email", [], "any", false, false, false, 503)), "truncate", [20], "method", false, false, false, 503), "html", null, true)));
                yield "</small>
                                    </div>
                                </td>
                                <td class=\"text-center pe-3\">
                                    <div class=\"btn-group\" role=\"group\">
                                        ";
                // line 509
                yield "                                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_transfer_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "id", [], "any", false, false, false, 509)]), "html", null, true);
                yield "\" 
                                           class=\"btn btn-sm btn-outline-primary\" 
                                           title=\"Voir le détail\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>

                                        ";
                // line 516
                yield "                                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "status", [], "any", false, false, false, 516) == "pending")) {
                    // line 517
                    yield "                                            <button type=\"button\" 
                                                    class=\"btn btn-sm btn-outline-success start-transfer-btn\" 
                                                    data-id=\"";
                    // line 519
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "id", [], "any", false, false, false, 519), "html", null, true);
                    yield "\" 
                                                    data-number=\"";
                    // line 520
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "transferNumber", [], "any", false, false, false, 520), "html", null, true);
                    yield "\" 
                                                    data-token=\"";
                    // line 521
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("start-transfer-" . CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "id", [], "any", false, false, false, 521))), "html", null, true);
                    yield "\"
                                                    title=\"Expédier\">
                                                <i class=\"fas fa-truck\"></i>
                                            </button>
                                        ";
                }
                // line 526
                yield "
                                        ";
                // line 528
                yield "                                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "status", [], "any", false, false, false, 528) == "in_transit")) {
                    // line 529
                    yield "                                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_transfer_receive", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "id", [], "any", false, false, false, 529)]), "html", null, true);
                    yield "\" 
                                               class=\"btn btn-sm btn-outline-info\" 
                                               title=\"Réceptionner\">
                                                <i class=\"fas fa-check-circle\"></i>
                                            </a>
                                        ";
                }
                // line 535
                yield "
                                        ";
                // line 537
                yield "                                        ";
                if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "status", [], "any", false, false, false, 537), ["pending", "in_transit"])) {
                    // line 538
                    yield "                                            <button type=\"button\" 
                                                    class=\"btn btn-sm btn-outline-danger cancel-transfer-btn\" 
                                                    data-id=\"";
                    // line 540
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "id", [], "any", false, false, false, 540), "html", null, true);
                    yield "\" 
                                                    data-number=\"";
                    // line 541
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "transferNumber", [], "any", false, false, false, 541), "html", null, true);
                    yield "\" 
                                                    data-token=\"";
                    // line 542
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("cancel-transfer-" . CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "id", [], "any", false, false, false, 542))), "html", null, true);
                    yield "\"
                                                    title=\"Annuler\">
                                                <i class=\"fas fa-ban\"></i>
                                            </button>
                                        ";
                }
                // line 547
                yield "                                    </div>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['transfer'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 551
            yield "                    </tbody>
                </table>
            </div>

            ";
            // line 558
            yield "            <div class=\"card-body p-2 transfer-cards-mobile\">
                ";
            // line 559
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["transfers"]) || array_key_exists("transfers", $context) ? $context["transfers"] : (function () { throw new RuntimeError('Variable "transfers" does not exist.', 559, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["transfer"]) {
                // line 560
                yield "                    ";
                $context["statusClass"] = (((CoreExtension::getAttribute($this->env, $this->source,                 // line 561
$context["transfer"], "status", [], "any", false, false, false, 561) == "pending")) ? ("status-pending") : ((((CoreExtension::getAttribute($this->env, $this->source,                 // line 562
$context["transfer"], "status", [], "any", false, false, false, 562) == "in_transit")) ? ("status-in-transit") : ((((CoreExtension::getAttribute($this->env, $this->source,                 // line 563
$context["transfer"], "status", [], "any", false, false, false, 563) == "completed")) ? ("status-completed") : ("status-cancelled"))))));
                // line 565
                yield "                    <div class=\"transfer-card-mobile ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statusClass"]) || array_key_exists("statusClass", $context) ? $context["statusClass"] : (function () { throw new RuntimeError('Variable "statusClass" does not exist.', 565, $this->source); })()), "html", null, true);
                yield "\">
                        <!-- En-tête -->
                        <div class=\"mobile-header\">
                            <div>
                                <div class=\"mobile-number\">";
                // line 569
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "transferNumber", [], "any", false, false, false, 569), "html", null, true);
                yield "</div>
                                <div class=\"mobile-date\">
                                    <i class=\"far fa-calendar-alt me-1\"></i>";
                // line 571
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "createdAt", [], "any", false, false, false, 571), "d/m/Y H:i"), "html", null, true);
                yield "
                                </div>
                            </div>
                            <div>
                                <span class=\"badge ";
                // line 575
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "statusBadgeClass", [], "any", false, false, false, 575), "html", null, true);
                yield " badge-status\">
                                    <i class=\"fas ";
                // line 576
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "statusIcon", [], "any", false, false, false, 576), "html", null, true);
                yield " me-1\"></i>
                                    ";
                // line 577
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "statusLabel", [], "any", false, false, false, 577), "html", null, true);
                yield "
                                </span>
                            </div>
                        </div>

                        <!-- Détails -->
                        <div class=\"mobile-rows\">
                            <div class=\"mobile-row\">
                                <span class=\"mobile-row-label\">
                                    <i class=\"fas fa-box\"></i> Produit
                                </span>
                                <span class=\"mobile-row-value\">";
                // line 588
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "stockBatch", [], "any", false, false, false, 588), "product", [], "any", false, false, false, 588), "name", [], "any", false, false, false, 588)), "truncate", [25], "method", false, false, false, 588), "html", null, true);
                yield "</span>
                            </div>
                            <div class=\"mobile-row\">
                                <span class=\"mobile-row-label\">
                                    <i class=\"fas fa-barcode\"></i> N° lot
                                </span>
                                <span class=\"mobile-row-value\">
                                    <code class=\"small\">";
                // line 595
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "stockBatch", [], "any", false, false, false, 595), "batchNumber", [], "any", false, false, false, 595)), "truncate", [18], "method", false, false, false, 595), "html", null, true);
                yield "</code>
                                </span>
                            </div>
                            <div class=\"mobile-row\">
                                <span class=\"mobile-row-label\">
                                    <i class=\"fas fa-hashtag\"></i> Quantité
                                </span>
                                <span class=\"mobile-row-value\">";
                // line 602
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "quantity", [], "any", false, false, false, 602), 0, ",", " "), "html", null, true);
                yield " unités</span>
                            </div>
                            <div class=\"mobile-row\">
                                <span class=\"mobile-row-label\">
                                    <i class=\"fas fa-user\"></i> Créé par
                                </span>
                                <span class=\"mobile-row-value\">
                                    ";
                // line 609
                yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "createdBy", [], "any", false, false, false, 609), "fullName", [], "any", false, false, false, 609)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "createdBy", [], "any", false, false, false, 609), "fullName", [], "any", false, false, false, 609), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "createdBy", [], "any", false, false, false, 609), "email", [], "any", false, false, false, 609)), "truncate", [20], "method", false, false, false, 609), "html", null, true)));
                yield "
                                </span>
                            </div>
                        </div>

                        <!-- Trajet -->
                        <div class=\"mobile-route\">
                            <div class=\"route-point from\">
                                <i class=\"fas fa-map-marker-alt\"></i>
                                <span><strong>De :</strong> ";
                // line 618
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "sourceLocation", [], "any", false, false, false, 618)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "sourceLocation", [], "any", false, false, false, 618), "displayName", [], "any", false, false, false, 618), "html", null, true)) : ("Non défini"));
                yield "</span>
                            </div>
                            <div class=\"route-arrow\">
                                <i class=\"fas fa-arrow-down\"></i>
                            </div>
                            <div class=\"route-point to\">
                                <i class=\"fas fa-map-marker-alt\"></i>
                                <span><strong>Vers :</strong> ";
                // line 625
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "destinationLocation", [], "any", false, false, false, 625), "displayName", [], "any", false, false, false, 625), "html", null, true);
                yield "</span>
                            </div>
                        </div>

                        <!-- Actions -->
                        <div class=\"mobile-actions\">
                            <a href=\"";
                // line 631
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_transfer_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "id", [], "any", false, false, false, 631)]), "html", null, true);
                yield "\" 
                               class=\"btn btn-outline-primary\">
                                <i class=\"fas fa-eye me-1\"></i> Voir
                            </a>

                            ";
                // line 636
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "status", [], "any", false, false, false, 636) == "pending")) {
                    // line 637
                    yield "                                <button type=\"button\" 
                                        class=\"btn btn-success start-transfer-btn\" 
                                        data-id=\"";
                    // line 639
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "id", [], "any", false, false, false, 639), "html", null, true);
                    yield "\" 
                                        data-number=\"";
                    // line 640
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "transferNumber", [], "any", false, false, false, 640), "html", null, true);
                    yield "\"
                                        data-token=\"";
                    // line 641
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("start-transfer-" . CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "id", [], "any", false, false, false, 641))), "html", null, true);
                    yield "\">
                                    <i class=\"fas fa-truck me-1\"></i> Expédier
                                </button>
                            ";
                }
                // line 645
                yield "
                            ";
                // line 646
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "status", [], "any", false, false, false, 646) == "in_transit")) {
                    // line 647
                    yield "                                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_transfer_receive", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "id", [], "any", false, false, false, 647)]), "html", null, true);
                    yield "\" 
                                   class=\"btn btn-info text-white\">
                                    <i class=\"fas fa-check-circle me-1\"></i> Réceptionner
                                </a>
                            ";
                }
                // line 652
                yield "
                            ";
                // line 653
                if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "status", [], "any", false, false, false, 653), ["pending", "in_transit"])) {
                    // line 654
                    yield "                                <button type=\"button\" 
                                        class=\"btn btn-outline-danger cancel-transfer-btn\" 
                                        data-id=\"";
                    // line 656
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "id", [], "any", false, false, false, 656), "html", null, true);
                    yield "\" 
                                        data-number=\"";
                    // line 657
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "transferNumber", [], "any", false, false, false, 657), "html", null, true);
                    yield "\"
                                        data-token=\"";
                    // line 658
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("cancel-transfer-" . CoreExtension::getAttribute($this->env, $this->source, $context["transfer"], "id", [], "any", false, false, false, 658))), "html", null, true);
                    yield "\">
                                    <i class=\"fas fa-ban me-1\"></i> Annuler
                                </button>
                            ";
                }
                // line 662
                yield "                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['transfer'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 665
            yield "            </div>
        ";
        } else {
            // line 667
            yield "            ";
            // line 668
            yield "            <div class=\"card-body text-center py-5\">
                <i class=\"fas fa-exchange-alt fa-3x text-muted mb-3 opacity-50\"></i>
                <p class=\"text-muted mb-0\">Aucun transfert trouvé</p>
                <p class=\"text-muted small mb-3\">Modifiez vos filtres ou créez un nouveau transfert</p>
                <a href=\"";
            // line 672
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_transfer_new");
            yield "\" class=\"btn btn-primary\">
                    <i class=\"fas fa-plus me-1\"></i> Créer un transfert
                </a>
            </div>
        ";
        }
        // line 677
        yield "    </div>
</div>

<!-- ==========================================
     MODAL CONFIRMATION DÉPART (EXPÉDITION)
========================================== -->
<div class=\"modal fade\" id=\"startTransferModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-success text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-truck me-2\"></i> Confirmer le départ
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p>Êtes-vous sûr de vouloir expédier le transfert <strong id=\"startTransferNumber\">—</strong> ?</p>
                <div class=\"alert alert-warning mb-0\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i>
                    Le stock sera <strong>déduit</strong> de l'emplacement source.
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">
                    <i class=\"fas fa-times me-1\"></i> Annuler
                </button>
                <form id=\"startTransferForm\" method=\"post\">
                    ";
        // line 705
        yield "                    <input type=\"hidden\" name=\"_token\" id=\"startTransferToken\" value=\"\">
                    <button type=\"submit\" class=\"btn btn-success\">
                        <i class=\"fas fa-check me-1\"></i> Confirmer le départ
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- ==========================================
     MODAL CONFIRMATION ANNULATION
========================================== -->
<div class=\"modal fade\" id=\"cancelTransferModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-ban me-2\"></i> Annuler le transfert
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <form method=\"post\" id=\"cancelTransferForm\">
                <div class=\"modal-body\">
                    <p>Annuler le transfert <strong id=\"cancelTransferNumber\">—</strong> ?</p>
                    <div class=\"mb-3\">
                        <label class=\"form-label fw-bold\">Raison de l'annulation</label>
                        <textarea name=\"reason\" class=\"form-control\" rows=\"3\" required placeholder=\"Expliquez pourquoi vous annulez ce transfert...\"></textarea>
                    </div>
                    <div class=\"alert alert-warning mb-0\">
                        <i class=\"fas fa-exclamation-triangle me-2\"></i>
                        Cette action est <strong>irréversible</strong>.
                    </div>
                </div>
                <div class=\"modal-footer\">
                    ";
        // line 741
        yield "                    <input type=\"hidden\" name=\"_token\" id=\"cancelTransferToken\" value=\"\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">
                        <i class=\"fas fa-arrow-left me-1\"></i> Retour
                    </button>
                    <button type=\"submit\" class=\"btn btn-danger\">
                        <i class=\"fas fa-ban me-1\"></i> Confirmer l'annulation
                    </button>
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

    // line 755
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

        // line 756
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {

    // ============================================
    // MODAL EXPÉDITION
    // ============================================
    const startModalEl = document.getElementById('startTransferModal');
    const startModal = new bootstrap.Modal(startModalEl);
    const startTransferNumber = document.getElementById('startTransferNumber');
    const startTransferForm = document.getElementById('startTransferForm');
    const startTransferToken = document.getElementById('startTransferToken');

    document.querySelectorAll('.start-transfer-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const id = this.dataset.id;
            const number = this.dataset.number;
            const token = this.dataset.token;

            console.log('Start transfer:', { id, number, token });

            startTransferNumber.textContent = number;
            startTransferForm.action = '/stock/transfer/' + id + '/start';
            startTransferToken.value = token;

            startModal.show();
        });
    });

    // ============================================
    // MODAL ANNULATION
    // ============================================
    const cancelModalEl = document.getElementById('cancelTransferModal');
    const cancelModal = new bootstrap.Modal(cancelModalEl);
    const cancelTransferNumber = document.getElementById('cancelTransferNumber');
    const cancelTransferForm = document.getElementById('cancelTransferForm');
    const cancelTransferToken = document.getElementById('cancelTransferToken');

    document.querySelectorAll('.cancel-transfer-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const id = this.dataset.id;
            const number = this.dataset.number;
            const token = this.dataset.token;

            console.log('Cancel transfer:', { id, number, token });

            cancelTransferNumber.textContent = number;
            cancelTransferForm.action = '/stock/transfer/' + id + '/cancel';
            cancelTransferToken.value = token;

            cancelModal.show();
        });
    });

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
        return "stock/transfer/index.html.twig";
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
        return array (  1131 => 756,  1118 => 755,  1095 => 741,  1058 => 705,  1029 => 677,  1021 => 672,  1015 => 668,  1013 => 667,  1009 => 665,  1001 => 662,  994 => 658,  990 => 657,  986 => 656,  982 => 654,  980 => 653,  977 => 652,  968 => 647,  966 => 646,  963 => 645,  956 => 641,  952 => 640,  948 => 639,  944 => 637,  942 => 636,  934 => 631,  925 => 625,  915 => 618,  903 => 609,  893 => 602,  883 => 595,  873 => 588,  859 => 577,  855 => 576,  851 => 575,  844 => 571,  839 => 569,  831 => 565,  829 => 563,  828 => 562,  827 => 561,  825 => 560,  821 => 559,  818 => 558,  812 => 551,  803 => 547,  795 => 542,  791 => 541,  787 => 540,  783 => 538,  780 => 537,  777 => 535,  767 => 529,  764 => 528,  761 => 526,  753 => 521,  749 => 520,  745 => 519,  741 => 517,  738 => 516,  728 => 509,  720 => 503,  711 => 497,  707 => 496,  703 => 495,  695 => 490,  687 => 485,  679 => 480,  675 => 479,  670 => 477,  666 => 476,  660 => 473,  656 => 472,  652 => 470,  648 => 469,  631 => 454,  629 => 451,  627 => 450,  621 => 447,  605 => 433,  597 => 429,  595 => 428,  586 => 422,  579 => 418,  571 => 413,  567 => 412,  563 => 411,  559 => 410,  528 => 382,  519 => 376,  504 => 364,  495 => 358,  480 => 346,  471 => 340,  456 => 328,  447 => 322,  433 => 311,  410 => 291,  398 => 281,  385 => 280,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/stock/transfer/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Transferts de stock - HMA Market{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    /* ============================================
       STAT CARDS
       ============================================ */
    .stat-card {
        transition: transform 0.2s, box-shadow 0.2s;
        border-radius: 1rem;
        background: white !important;
        border: none;
        cursor: pointer;
    }
    .stat-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }
    .stat-card .stat-value {
        font-size: 1.75rem;
        font-weight: bold;
        margin-bottom: 0;
        line-height: 1.1;
    }
    .stat-card .stat-label {
        font-size: 0.7rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-weight: 600;
    }
    .stat-card .stat-sub {
        font-size: 0.68rem;
        margin-top: 0.25rem;
        opacity: 0.85;
    }
    .stat-icon {
        width: 46px;
        height: 46px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 1rem;
        flex-shrink: 0;
    }
    .card-bg-primary {
        background: linear-gradient(135deg, #0463f1 0%, #0350c4 100%) !important;
        color: white;
    }
    .card-bg-warning {
        background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%) !important;
        color: white;
    }
    .card-bg-success {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%) !important;
        color: white;
    }
    .card-bg-danger {
        background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%) !important;
        color: white;
    }
    .card-bg-info {
        background: linear-gradient(135deg, #0ea5e9 0%, #0284c7 100%) !important;
        color: white;
    }
    .card-bg-primary .stat-icon,
    .card-bg-warning .stat-icon,
    .card-bg-success .stat-icon,
    .card-bg-danger .stat-icon,
    .card-bg-info .stat-icon {
        background: rgba(255,255,255,0.2);
    }
    .card-bg-primary .stat-value,
    .card-bg-warning .stat-value,
    .card-bg-success .stat-value,
    .card-bg-danger .stat-value,
    .card-bg-info .stat-value {
        color: white;
    }
    .card-bg-primary .text-muted,
    .card-bg-warning .text-muted,
    .card-bg-success .text-muted,
    .card-bg-danger .text-muted,
    .card-bg-info .text-muted {
        color: rgba(255,255,255,0.85) !important;
    }

    /* ============================================
       BADGES STATUT
       ============================================ */
    .badge-status {
        font-size: 0.72rem;
        padding: 0.35rem 0.6rem;
        font-weight: 600;
    }

    /* ============================================
       CARTES MOBILE
       ============================================ */
    .transfer-card-mobile {
        background: #fff;
        border: 1px solid #e9ecef;
        border-radius: 12px;
        padding: 1rem;
        margin-bottom: 0.75rem;
        box-shadow: 0 2px 6px rgba(0,0,0,0.04);
        position: relative;
        transition: box-shadow 0.2s;
    }
    .transfer-card-mobile:hover {
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    }
    .transfer-card-mobile::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        width: 4px;
        border-radius: 12px 0 0 12px;
    }
    .transfer-card-mobile.status-pending::before {
        background: #f59e0b;
    }
    .transfer-card-mobile.status-in-transit::before {
        background: #0ea5e9;
    }
    .transfer-card-mobile.status-completed::before {
        background: #10b981;
    }
    .transfer-card-mobile.status-cancelled::before {
        background: #ef4444;
    }

    .transfer-card-mobile .mobile-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        gap: 0.75rem;
        margin-bottom: 0.75rem;
        padding-bottom: 0.75rem;
        border-bottom: 1px dashed #e9ecef;
    }
    .transfer-card-mobile .mobile-number {
        font-weight: 700;
        color: #1e293b;
        font-size: 0.92rem;
    }
    .transfer-card-mobile .mobile-date {
        font-size: 0.72rem;
        color: #64748b;
        margin-top: 0.15rem;
    }

    .transfer-card-mobile .mobile-rows {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
    }
    .transfer-card-mobile .mobile-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 0.5rem;
        font-size: 0.82rem;
    }
    .transfer-card-mobile .mobile-row-label {
        color: #64748b;
        flex-shrink: 0;
        display: flex;
        align-items: center;
        gap: 0.35rem;
    }
    .transfer-card-mobile .mobile-row-value {
        color: #1e293b;
        font-weight: 600;
        text-align: right;
        word-break: break-word;
    }

    .transfer-card-mobile .mobile-route {
        display: flex;
        flex-direction: column;
        gap: 0.35rem;
        background: #f8fafc;
        padding: 0.65rem 0.75rem;
        border-radius: 8px;
        margin-top: 0.5rem;
        font-size: 0.82rem;
    }
    .transfer-card-mobile .route-point {
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    .transfer-card-mobile .route-point.from {
        color: #065f46;
    }
    .transfer-card-mobile .route-point.to {
        color: #1e40af;
    }
    .transfer-card-mobile .route-arrow {
        color: #94a3b8;
        font-size: 0.7rem;
        padding-left: 0.5rem;
    }

    .transfer-card-mobile .mobile-actions {
        display: flex;
        gap: 0.5rem;
        margin-top: 0.75rem;
        padding-top: 0.75rem;
        border-top: 1px dashed #e9ecef;
        flex-wrap: wrap;
    }
    .transfer-card-mobile .mobile-actions .btn {
        flex: 1 1 auto;
        min-width: 0;
        font-size: 0.78rem;
        padding: 0.45rem 0.6rem;
    }

    /* ============================================
       RESPONSIVE
       ============================================ */
    @media (max-width: 768px) {
        .container-fluid {
            padding-left: 0.75rem !important;
            padding-right: 0.75rem !important;
        }

        .page-header-flex {
            flex-direction: column !important;
            align-items: stretch !important;
            gap: 1rem;
        }
        .page-header-flex .btn-primary {
            width: 100%;
            justify-content: center;
        }
        h1.h3 {
            font-size: 1.15rem;
        }

        .stat-card .stat-value {
            font-size: 1.35rem;
        }
        .stat-card .stat-label {
            font-size: 0.62rem;
        }
        .stat-icon {
            width: 38px;
            height: 38px;
        }
        .stat-icon i {
            font-size: 1.2rem !important;
        }

        .filter-form .col-md-3 {
            width: 100%;
        }

        /* Tableau masqué sur mobile */
        .table-responsive {
            display: none;
        }
    }

    @media (min-width: 769px) {
        .transfer-cards-mobile {
            display: none;
        }
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container-fluid px-2 px-md-4 py-3\">

    <!-- ==========================================
         EN-TÊTE
    ========================================== -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 page-header-flex flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb mb-1\">
                    <li class=\"breadcrumb-item small\">
                        <a href=\"{{ path('app_dashboard') }}\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i>
                            <span class=\"d-none d-sm-inline\">Tableau de bord</span>
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active small\">
                        <i class=\"fas fa-exchange-alt me-1\"></i> Transferts
                    </li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-exchange-alt text-primary me-2\"></i>
                Transferts de stock
            </h1>
            <p class=\"text-muted mt-2 mb-0 small d-none d-md-block\">
                <i class=\"fas fa-info-circle me-1\"></i>
                Gérez les transferts de stock entre emplacements
            </p>
        </div>
        <div>
            <a href=\"{{ path('app_stock_transfer_new') }}\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus me-1\"></i> Nouveau transfert
            </a>
        </div>
    </div>

    <!-- ==========================================
         STATISTIQUES (cliquables pour filtrer)
    ========================================== -->
    <div class=\"row g-2 g-md-3 mb-4\">
        <div class=\"col-6 col-md-3\">
            <a href=\"{{ path('app_stock_transfer_index') }}\" class=\"text-decoration-none\">
                <div class=\"card stat-card card-bg-primary shadow-sm\">
                    <div class=\"card-body p-2 p-md-3\">
                        <div class=\"d-flex align-items-center justify-content-between\">
                            <div class=\"flex-grow-1\">
                                <div class=\"stat-label\">Total</div>
                                <div class=\"stat-value\">{{ stats.total|default(0)|number_format(0, ',', ' ') }}</div>
                                <div class=\"stat-sub\">transferts</div>
                            </div>
                            <div class=\"stat-icon\">
                                <i class=\"fas fa-exchange-alt fa-2x\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col-6 col-md-3\">
            <a href=\"{{ path('app_stock_transfer_index', {status: 'pending'}) }}\" class=\"text-decoration-none\">
                <div class=\"card stat-card card-bg-warning shadow-sm\">
                    <div class=\"card-body p-2 p-md-3\">
                        <div class=\"d-flex align-items-center justify-content-between\">
                            <div class=\"flex-grow-1\">
                                <div class=\"stat-label\">En attente</div>
                                <div class=\"stat-value\">{{ stats.pending|default(0)|number_format(0, ',', ' ') }}</div>
                                <div class=\"stat-sub\">à expédier</div>
                            </div>
                            <div class=\"stat-icon\">
                                <i class=\"fas fa-clock fa-2x\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col-6 col-md-3\">
            <a href=\"{{ path('app_stock_transfer_index', {status: 'in_transit'}) }}\" class=\"text-decoration-none\">
                <div class=\"card stat-card card-bg-info shadow-sm\">
                    <div class=\"card-body p-2 p-md-3\">
                        <div class=\"d-flex align-items-center justify-content-between\">
                            <div class=\"flex-grow-1\">
                                <div class=\"stat-label\">En transit</div>
                                <div class=\"stat-value\">{{ stats.in_transit|default(0)|number_format(0, ',', ' ') }}</div>
                                <div class=\"stat-sub\">en route</div>
                            </div>
                            <div class=\"stat-icon\">
                                <i class=\"fas fa-truck fa-2x\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col-6 col-md-3\">
            <a href=\"{{ path('app_stock_transfer_index', {status: 'completed'}) }}\" class=\"text-decoration-none\">
                <div class=\"card stat-card card-bg-success shadow-sm\">
                    <div class=\"card-body p-2 p-md-3\">
                        <div class=\"d-flex align-items-center justify-content-between\">
                            <div class=\"flex-grow-1\">
                                <div class=\"stat-label\">Terminés</div>
                                <div class=\"stat-value\">{{ stats.completed|default(0)|number_format(0, ',', ' ') }}</div>
                                <div class=\"stat-sub\">livrés</div>
                            </div>
                            <div class=\"stat-icon\">
                                <i class=\"fas fa-check-circle fa-2x\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <!-- ==========================================
         FILTRES
    ========================================== -->
    <div class=\"card border-0 shadow-sm mb-4\">
        <div class=\"card-header bg-white py-2 py-md-3\">
            <h5 class=\"mb-0 fw-semibold small\">
                <i class=\"fas fa-filter me-2 text-primary\"></i> Filtres
            </h5>
        </div>
        <div class=\"card-body p-2 p-md-3\">
            <form method=\"get\" class=\"row g-2 g-md-3 filter-form\">
                <div class=\"col-12 col-md-3\">
                    <label class=\"form-label fw-bold small mb-1\">Statut</label>
                    <select name=\"status\" class=\"form-select form-select-sm\">
                        <option value=\"\">Tous</option>
                        <option value=\"pending\" {{ filters.status == 'pending' ? 'selected' }}>En attente</option>
                        <option value=\"in_transit\" {{ filters.status == 'in_transit' ? 'selected' }}>En transit</option>
                        <option value=\"completed\" {{ filters.status == 'completed' ? 'selected' }}>Terminé</option>
                        <option value=\"cancelled\" {{ filters.status == 'cancelled' ? 'selected' }}>Annulé</option>
                    </select>
                </div>
                <div class=\"col-6 col-md-3\">
                    <label class=\"form-label fw-bold small mb-1\">Date du</label>
                    <input type=\"date\" name=\"date_from\" class=\"form-control form-control-sm\" value=\"{{ filters.date_from }}\">
                </div>
                <div class=\"col-6 col-md-3\">
                    <label class=\"form-label fw-bold small mb-1\">Date au</label>
                    <input type=\"date\" name=\"date_to\" class=\"form-control form-control-sm\" value=\"{{ filters.date_to }}\">
                </div>
                <div class=\"col-12 col-md-3 d-flex align-items-end gap-2\">
                    <button type=\"submit\" class=\"btn btn-primary btn-sm flex-grow-1\">
                        <i class=\"fas fa-search me-1\"></i> Filtrer
                    </button>
                    {% if filters.status or filters.date_from or filters.date_to %}
                        <a href=\"{{ path('app_stock_transfer_index') }}\" class=\"btn btn-outline-secondary btn-sm\" title=\"Effacer\">
                            <i class=\"fas fa-undo\"></i>
                        </a>
                    {% endif %}
                </div>
            </form>
        </div>
    </div>

    <!-- ==========================================
         LISTE DES TRANSFERTS
    ========================================== -->
    <div class=\"card border-0 shadow-sm\">
        <div class=\"card-header bg-white py-2 py-md-3 d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0 fw-semibold small\">
                <i class=\"fas fa-list me-2 text-primary\"></i>
                Liste des transferts
            </h5>
            <span class=\"badge bg-secondary\">{{ transfers|length }} résultat(s)</span>
        </div>

        {% if transfers|length > 0 %}
            {# ============================================
               VUE TABLEAU (desktop)
            ============================================ #}
            <div class=\"card-body p-0 table-responsive d-none d-md-block\">
                <table class=\"table table-hover align-middle mb-0\">
                    <thead class=\"table-light\">
                        <tr>
                            <th class=\"ps-3\">N° transfert</th>
                            <th>Produit</th>
                            <th>N° lot</th>
                            <th class=\"text-end\">Qté</th>
                            <th>De → Vers</th>
                            <th>Statut</th>
                            <th>Créé par</th>
                            <th class=\"text-center pe-3\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for transfer in transfers %}
                            <tr>
                                <td class=\"ps-3\">
                                    <div class=\"fw-bold small\">{{ transfer.transferNumber }}</div>
                                    <small class=\"text-muted\">{{ transfer.createdAt|date('d/m/Y H:i') }}</small>
                                </td>
                                <td>
                                    <div class=\"fw-bold small\">{{ transfer.stockBatch.product.name|u.truncate(35) }}</div>
                                    <small class=\"text-muted\">{{ transfer.stockBatch.product.barcode }}</small>
                                </td>
                                <td><code class=\"small\">{{ transfer.stockBatch.batchNumber|u.truncate(20) }}</code></td>
                                <td class=\"text-end fw-bold\">{{ transfer.quantity|number_format(0, ',', ' ') }}</td>
                                <td>
                                    <div class=\"d-flex align-items-center gap-1 flex-wrap\">
                                        <span class=\"badge bg-success bg-opacity-10 text-success small\">
                                            <i class=\"fas fa-map-marker-alt\"></i> 
                                            {{ transfer.sourceLocation ? transfer.sourceLocation.displayName|u.truncate(15) : '—' }}
                                        </span>
                                        <i class=\"fas fa-arrow-right text-muted small\"></i>
                                        <span class=\"badge bg-primary bg-opacity-10 text-primary small\">
                                            <i class=\"fas fa-map-marker-alt\"></i> 
                                            {{ transfer.destinationLocation.displayName|u.truncate(15) }}
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <span class=\"badge {{ transfer.statusBadgeClass }} badge-status\">
                                        <i class=\"fas {{ transfer.statusIcon }} me-1\"></i>
                                        {{ transfer.statusLabel }}
                                    </span>
                                </td>
                                <td>
                                    <div class=\"d-flex align-items-center gap-2\">
                                        <i class=\"fas fa-user-circle text-muted\"></i>
                                        <small>{{ transfer.createdBy.fullName ?: transfer.createdBy.email|u.truncate(20) }}</small>
                                    </div>
                                </td>
                                <td class=\"text-center pe-3\">
                                    <div class=\"btn-group\" role=\"group\">
                                        {# Voir #}
                                        <a href=\"{{ path('app_stock_transfer_show', {'id': transfer.id}) }}\" 
                                           class=\"btn btn-sm btn-outline-primary\" 
                                           title=\"Voir le détail\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>

                                        {# ✅ EXPÉDIER - token spécifique injecté #}
                                        {% if transfer.status == 'pending' %}
                                            <button type=\"button\" 
                                                    class=\"btn btn-sm btn-outline-success start-transfer-btn\" 
                                                    data-id=\"{{ transfer.id }}\" 
                                                    data-number=\"{{ transfer.transferNumber }}\" 
                                                    data-token=\"{{ csrf_token('start-transfer-' ~ transfer.id) }}\"
                                                    title=\"Expédier\">
                                                <i class=\"fas fa-truck\"></i>
                                            </button>
                                        {% endif %}

                                        {# ✅ RÉCEPTIONNER #}
                                        {% if transfer.status == 'in_transit' %}
                                            <a href=\"{{ path('app_stock_transfer_receive', {'id': transfer.id}) }}\" 
                                               class=\"btn btn-sm btn-outline-info\" 
                                               title=\"Réceptionner\">
                                                <i class=\"fas fa-check-circle\"></i>
                                            </a>
                                        {% endif %}

                                        {# ✅ ANNULER - token spécifique injecté #}
                                        {% if transfer.status in ['pending', 'in_transit'] %}
                                            <button type=\"button\" 
                                                    class=\"btn btn-sm btn-outline-danger cancel-transfer-btn\" 
                                                    data-id=\"{{ transfer.id }}\" 
                                                    data-number=\"{{ transfer.transferNumber }}\" 
                                                    data-token=\"{{ csrf_token('cancel-transfer-' ~ transfer.id) }}\"
                                                    title=\"Annuler\">
                                                <i class=\"fas fa-ban\"></i>
                                            </button>
                                        {% endif %}
                                    </div>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>

            {# ============================================
               VUE CARTES (mobile)
            ============================================ #}
            <div class=\"card-body p-2 transfer-cards-mobile\">
                {% for transfer in transfers %}
                    {% set statusClass = 
                        transfer.status == 'pending' ? 'status-pending' :
                        (transfer.status == 'in_transit' ? 'status-in-transit' :
                        (transfer.status == 'completed' ? 'status-completed' : 'status-cancelled'))
                    %}
                    <div class=\"transfer-card-mobile {{ statusClass }}\">
                        <!-- En-tête -->
                        <div class=\"mobile-header\">
                            <div>
                                <div class=\"mobile-number\">{{ transfer.transferNumber }}</div>
                                <div class=\"mobile-date\">
                                    <i class=\"far fa-calendar-alt me-1\"></i>{{ transfer.createdAt|date('d/m/Y H:i') }}
                                </div>
                            </div>
                            <div>
                                <span class=\"badge {{ transfer.statusBadgeClass }} badge-status\">
                                    <i class=\"fas {{ transfer.statusIcon }} me-1\"></i>
                                    {{ transfer.statusLabel }}
                                </span>
                            </div>
                        </div>

                        <!-- Détails -->
                        <div class=\"mobile-rows\">
                            <div class=\"mobile-row\">
                                <span class=\"mobile-row-label\">
                                    <i class=\"fas fa-box\"></i> Produit
                                </span>
                                <span class=\"mobile-row-value\">{{ transfer.stockBatch.product.name|u.truncate(25) }}</span>
                            </div>
                            <div class=\"mobile-row\">
                                <span class=\"mobile-row-label\">
                                    <i class=\"fas fa-barcode\"></i> N° lot
                                </span>
                                <span class=\"mobile-row-value\">
                                    <code class=\"small\">{{ transfer.stockBatch.batchNumber|u.truncate(18) }}</code>
                                </span>
                            </div>
                            <div class=\"mobile-row\">
                                <span class=\"mobile-row-label\">
                                    <i class=\"fas fa-hashtag\"></i> Quantité
                                </span>
                                <span class=\"mobile-row-value\">{{ transfer.quantity|number_format(0, ',', ' ') }} unités</span>
                            </div>
                            <div class=\"mobile-row\">
                                <span class=\"mobile-row-label\">
                                    <i class=\"fas fa-user\"></i> Créé par
                                </span>
                                <span class=\"mobile-row-value\">
                                    {{ transfer.createdBy.fullName ?: transfer.createdBy.email|u.truncate(20) }}
                                </span>
                            </div>
                        </div>

                        <!-- Trajet -->
                        <div class=\"mobile-route\">
                            <div class=\"route-point from\">
                                <i class=\"fas fa-map-marker-alt\"></i>
                                <span><strong>De :</strong> {{ transfer.sourceLocation ? transfer.sourceLocation.displayName : 'Non défini' }}</span>
                            </div>
                            <div class=\"route-arrow\">
                                <i class=\"fas fa-arrow-down\"></i>
                            </div>
                            <div class=\"route-point to\">
                                <i class=\"fas fa-map-marker-alt\"></i>
                                <span><strong>Vers :</strong> {{ transfer.destinationLocation.displayName }}</span>
                            </div>
                        </div>

                        <!-- Actions -->
                        <div class=\"mobile-actions\">
                            <a href=\"{{ path('app_stock_transfer_show', {'id': transfer.id}) }}\" 
                               class=\"btn btn-outline-primary\">
                                <i class=\"fas fa-eye me-1\"></i> Voir
                            </a>

                            {% if transfer.status == 'pending' %}
                                <button type=\"button\" 
                                        class=\"btn btn-success start-transfer-btn\" 
                                        data-id=\"{{ transfer.id }}\" 
                                        data-number=\"{{ transfer.transferNumber }}\"
                                        data-token=\"{{ csrf_token('start-transfer-' ~ transfer.id) }}\">
                                    <i class=\"fas fa-truck me-1\"></i> Expédier
                                </button>
                            {% endif %}

                            {% if transfer.status == 'in_transit' %}
                                <a href=\"{{ path('app_stock_transfer_receive', {'id': transfer.id}) }}\" 
                                   class=\"btn btn-info text-white\">
                                    <i class=\"fas fa-check-circle me-1\"></i> Réceptionner
                                </a>
                            {% endif %}

                            {% if transfer.status in ['pending', 'in_transit'] %}
                                <button type=\"button\" 
                                        class=\"btn btn-outline-danger cancel-transfer-btn\" 
                                        data-id=\"{{ transfer.id }}\" 
                                        data-number=\"{{ transfer.transferNumber }}\"
                                        data-token=\"{{ csrf_token('cancel-transfer-' ~ transfer.id) }}\">
                                    <i class=\"fas fa-ban me-1\"></i> Annuler
                                </button>
                            {% endif %}
                        </div>
                    </div>
                {% endfor %}
            </div>
        {% else %}
            {# Aucun résultat #}
            <div class=\"card-body text-center py-5\">
                <i class=\"fas fa-exchange-alt fa-3x text-muted mb-3 opacity-50\"></i>
                <p class=\"text-muted mb-0\">Aucun transfert trouvé</p>
                <p class=\"text-muted small mb-3\">Modifiez vos filtres ou créez un nouveau transfert</p>
                <a href=\"{{ path('app_stock_transfer_new') }}\" class=\"btn btn-primary\">
                    <i class=\"fas fa-plus me-1\"></i> Créer un transfert
                </a>
            </div>
        {% endif %}
    </div>
</div>

<!-- ==========================================
     MODAL CONFIRMATION DÉPART (EXPÉDITION)
========================================== -->
<div class=\"modal fade\" id=\"startTransferModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-success text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-truck me-2\"></i> Confirmer le départ
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p>Êtes-vous sûr de vouloir expédier le transfert <strong id=\"startTransferNumber\">—</strong> ?</p>
                <div class=\"alert alert-warning mb-0\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i>
                    Le stock sera <strong>déduit</strong> de l'emplacement source.
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">
                    <i class=\"fas fa-times me-1\"></i> Annuler
                </button>
                <form id=\"startTransferForm\" method=\"post\">
                    {# ✅ Token injecté dynamiquement par JS au clic #}
                    <input type=\"hidden\" name=\"_token\" id=\"startTransferToken\" value=\"\">
                    <button type=\"submit\" class=\"btn btn-success\">
                        <i class=\"fas fa-check me-1\"></i> Confirmer le départ
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- ==========================================
     MODAL CONFIRMATION ANNULATION
========================================== -->
<div class=\"modal fade\" id=\"cancelTransferModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-ban me-2\"></i> Annuler le transfert
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <form method=\"post\" id=\"cancelTransferForm\">
                <div class=\"modal-body\">
                    <p>Annuler le transfert <strong id=\"cancelTransferNumber\">—</strong> ?</p>
                    <div class=\"mb-3\">
                        <label class=\"form-label fw-bold\">Raison de l'annulation</label>
                        <textarea name=\"reason\" class=\"form-control\" rows=\"3\" required placeholder=\"Expliquez pourquoi vous annulez ce transfert...\"></textarea>
                    </div>
                    <div class=\"alert alert-warning mb-0\">
                        <i class=\"fas fa-exclamation-triangle me-2\"></i>
                        Cette action est <strong>irréversible</strong>.
                    </div>
                </div>
                <div class=\"modal-footer\">
                    {# ✅ Token injecté dynamiquement par JS au clic #}
                    <input type=\"hidden\" name=\"_token\" id=\"cancelTransferToken\" value=\"\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">
                        <i class=\"fas fa-arrow-left me-1\"></i> Retour
                    </button>
                    <button type=\"submit\" class=\"btn btn-danger\">
                        <i class=\"fas fa-ban me-1\"></i> Confirmer l'annulation
                    </button>
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
    // MODAL EXPÉDITION
    // ============================================
    const startModalEl = document.getElementById('startTransferModal');
    const startModal = new bootstrap.Modal(startModalEl);
    const startTransferNumber = document.getElementById('startTransferNumber');
    const startTransferForm = document.getElementById('startTransferForm');
    const startTransferToken = document.getElementById('startTransferToken');

    document.querySelectorAll('.start-transfer-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const id = this.dataset.id;
            const number = this.dataset.number;
            const token = this.dataset.token;

            console.log('Start transfer:', { id, number, token });

            startTransferNumber.textContent = number;
            startTransferForm.action = '/stock/transfer/' + id + '/start';
            startTransferToken.value = token;

            startModal.show();
        });
    });

    // ============================================
    // MODAL ANNULATION
    // ============================================
    const cancelModalEl = document.getElementById('cancelTransferModal');
    const cancelModal = new bootstrap.Modal(cancelModalEl);
    const cancelTransferNumber = document.getElementById('cancelTransferNumber');
    const cancelTransferForm = document.getElementById('cancelTransferForm');
    const cancelTransferToken = document.getElementById('cancelTransferToken');

    document.querySelectorAll('.cancel-transfer-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const id = this.dataset.id;
            const number = this.dataset.number;
            const token = this.dataset.token;

            console.log('Cancel transfer:', { id, number, token });

            cancelTransferNumber.textContent = number;
            cancelTransferForm.action = '/stock/transfer/' + id + '/cancel';
            cancelTransferToken.value = token;

            cancelModal.show();
        });
    });

});
</script>
{% endblock %}", "stock/transfer/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\stock\\transfer\\index.html.twig");
    }
}
