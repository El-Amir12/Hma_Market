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

/* stock/adjustment/index.html.twig */
class __TwigTemplate_859450c26435df3226269e637434de50 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/adjustment/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/adjustment/index.html.twig"));

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

        yield "Ajustements de stock - HMA Market";
        
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
    .card-bg-success {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%) !important;
        color: white;
    }
    .card-bg-danger {
        background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%) !important;
        color: white;
    }
    .card-bg-primary {
        background: linear-gradient(135deg, #0463f1 0%, #0350c4 100%) !important;
        color: white;
    }
    .card-bg-info {
        background: linear-gradient(135deg, #0ea5e9 0%, #0284c7 100%) !important;
        color: white;
    }
    .card-bg-success .stat-icon,
    .card-bg-danger .stat-icon,
    .card-bg-primary .stat-icon,
    .card-bg-info .stat-icon {
        background: rgba(255,255,255,0.2);
    }
    .card-bg-success .stat-value,
    .card-bg-danger .stat-value,
    .card-bg-primary .stat-value,
    .card-bg-info .stat-value {
        color: white;
    }
    .card-bg-success .text-muted,
    .card-bg-danger .text-muted,
    .card-bg-primary .text-muted,
    .card-bg-info .text-muted {
        color: rgba(255,255,255,0.85) !important;
    }

    /* ============================================
       TABLEAU
       ============================================ */
    .table-adjustments td {
        vertical-align: middle;
    }
    .badge-type {
        font-size: 0.72rem;
        padding: 0.35rem 0.6rem;
        font-weight: 600;
    }
    .reason-text {
        max-width: 200px;
        display: inline-block;
        word-break: break-word;
    }

    /* ============================================
       BOUTONS D'ACTION
       ============================================ */
    .btn-icon-sm {
        width: 32px;
        height: 32px;
        padding: 0;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 8px;
    }

    /* ============================================
       ✅ CARTES MOBILE (à la place du tableau)
       ============================================ */
    .adjustment-card-mobile {
        background: #fff;
        border: 1px solid #e9ecef;
        border-radius: 12px;
        padding: 1rem;
        margin-bottom: 0.75rem;
        box-shadow: 0 2px 6px rgba(0,0,0,0.04);
        position: relative;
        transition: box-shadow 0.2s;
    }
    .adjustment-card-mobile:hover {
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    }
    .adjustment-card-mobile::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        width: 4px;
        border-radius: 12px 0 0 12px;
    }
    .adjustment-card-mobile.type-in::before {
        background: #10b981;
    }
    .adjustment-card-mobile.type-out::before {
        background: #ef4444;
    }

    .adjustment-card-mobile .mobile-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        gap: 0.75rem;
        margin-bottom: 0.75rem;
        padding-bottom: 0.75rem;
        border-bottom: 1px dashed #e9ecef;
    }
    .adjustment-card-mobile .mobile-header-left {
        flex-grow: 1;
        min-width: 0;
    }
    .adjustment-card-mobile .mobile-date {
        font-size: 0.72rem;
        color: #64748b;
        display: flex;
        align-items: center;
        gap: 0.25rem;
        margin-bottom: 0.35rem;
    }
    .adjustment-card-mobile .mobile-product {
        font-weight: 700;
        color: #1e293b;
        font-size: 0.92rem;
        line-height: 1.3;
        margin-bottom: 0.15rem;
    }
    .adjustment-card-mobile .mobile-barcode {
        font-size: 0.7rem;
        color: #94a3b8;
        font-family: 'Courier New', monospace;
    }

    .adjustment-card-mobile .mobile-qty {
        flex-shrink: 0;
        text-align: right;
        padding: 0.25rem 0.5rem;
        border-radius: 8px;
        font-weight: 800;
        font-size: 1.1rem;
        line-height: 1.1;
        min-width: 70px;
    }
    .adjustment-card-mobile.type-in .mobile-qty {
        background: #d1fae5;
        color: #065f46;
    }
    .adjustment-card-mobile.type-out .mobile-qty {
        background: #fee2e2;
        color: #991b1b;
    }

    .adjustment-card-mobile .mobile-rows {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
    }
    .adjustment-card-mobile .mobile-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 0.5rem;
        font-size: 0.82rem;
    }
    .adjustment-card-mobile .mobile-row-label {
        color: #64748b;
        flex-shrink: 0;
        display: flex;
        align-items: center;
        gap: 0.35rem;
    }
    .adjustment-card-mobile .mobile-row-value {
        color: #1e293b;
        font-weight: 600;
        text-align: right;
        word-break: break-word;
    }
    .adjustment-card-mobile .mobile-reason {
        background: #f8fafc;
        border-radius: 8px;
        padding: 0.55rem 0.75rem;
        font-size: 0.78rem;
        color: #475569;
        margin-top: 0.5rem;
        border-left: 3px solid #cbd5e1;
    }

    .adjustment-card-mobile .mobile-actions {
        display: flex;
        gap: 0.5rem;
        margin-top: 0.75rem;
        padding-top: 0.75rem;
        border-top: 1px dashed #e9ecef;
    }
    .adjustment-card-mobile .mobile-actions .btn {
        flex: 1;
        font-size: 0.8rem;
        padding: 0.5rem;
    }

    /* ============================================
       RESPONSIVE
       ============================================ */
    @media (max-width: 768px) {
        .container-fluid {
            padding-left: 0.75rem !important;
            padding-right: 0.75rem !important;
        }

        /* En-tête */
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

        /* Stats cards */
        .stat-card .stat-value {
            font-size: 1.4rem;
        }
        .stat-card .stat-label {
            font-size: 0.65rem;
        }
        .stat-icon {
            width: 40px;
            height: 40px;
        }
        .stat-icon i {
            font-size: 1.3rem !important;
        }

        /* Filtres */
        .filter-form .col-md-3 {
            width: 100%;
        }

        /* Tableau masqué sur mobile */
        .table-responsive {
            display: none;
        }
    }

    /* Sur desktop : cartes mobile masquées */
    @media (min-width: 769px) {
        .adjustment-cards-mobile {
            display: none;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 304
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

        // line 305
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
        // line 315
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i>
                            <span class=\"d-none d-sm-inline\">Tableau de bord</span>
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active small\">
                        <i class=\"fas fa-calculator me-1\"></i> Ajustements
                    </li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-calculator text-primary me-2\"></i>
                Ajustements de stock
            </h1>
            <p class=\"text-muted mt-2 mb-0 small d-none d-md-block\">
                <i class=\"fas fa-info-circle me-1\"></i>
                Gérez les entrées et sorties manuelles de stock (casse, perte, surplus, etc.)
            </p>
        </div>
        <div>
            <a href=\"";
        // line 335
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_adjustment_new");
        yield "\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus me-1\"></i> Nouvel ajustement
            </a>
        </div>
    </div>

    <!-- ==========================================
         STATISTIQUES
    ========================================== -->
    <div class=\"row g-2 g-md-3 mb-4\">
        <div class=\"col-6 col-md-3\">
            <div class=\"card stat-card card-bg-success shadow-sm\">
                <div class=\"card-body p-2 p-md-3\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Entrées (+)</div>
                            <div class=\"stat-value\">";
        // line 351
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_in", [], "any", true, true, false, 351)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 351, $this->source); })()), "total_in", [], "any", false, false, false, 351), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</div>
                            <div class=\"stat-sub\">";
        // line 352
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "count_in", [], "any", true, true, false, 352)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 352, $this->source); })()), "count_in", [], "any", false, false, false, 352), 0)) : (0)), "html", null, true);
        yield " mouvement(s)</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-plus-circle fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-6 col-md-3\">
            <div class=\"card stat-card card-bg-danger shadow-sm\">
                <div class=\"card-body p-2 p-md-3\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Sorties (-)</div>
                            <div class=\"stat-value\">";
        // line 367
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_out", [], "any", true, true, false, 367)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 367, $this->source); })()), "total_out", [], "any", false, false, false, 367), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</div>
                            <div class=\"stat-sub\">";
        // line 368
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "count_out", [], "any", true, true, false, 368)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 368, $this->source); })()), "count_out", [], "any", false, false, false, 368), 0)) : (0)), "html", null, true);
        yield " mouvement(s)</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-minus-circle fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-6 col-md-3\">
            <div class=\"card stat-card card-bg-primary shadow-sm\">
                <div class=\"card-body p-2 p-md-3\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Mouvements</div>
                            <div class=\"stat-value\">";
        // line 383
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_movements", [], "any", true, true, false, 383)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 383, $this->source); })()), "total_movements", [], "any", false, false, false, 383), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</div>
                            <div class=\"stat-sub\">ajustements</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-chart-line fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-6 col-md-3\">
            <div class=\"card stat-card card-bg-info shadow-sm\">
                <div class=\"card-body p-2 p-md-3\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Quantité</div>
                            <div class=\"stat-value\">";
        // line 399
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_quantity", [], "any", true, true, false, 399)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 399, $this->source); })()), "total_quantity", [], "any", false, false, false, 399), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</div>
                            <div class=\"stat-sub\">unités concernées</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-boxes fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
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
                    <label class=\"form-label fw-bold small mb-1\">Type</label>
                    <select name=\"type\" class=\"form-select form-select-sm\">
                        <option value=\"\">Tous</option>
                        <option value=\"in\" ";
        // line 426
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 426, $this->source); })()), "type", [], "any", false, false, false, 426) == "in")) ? ("selected") : (""));
        yield ">Entrées (+)</option>
                        <option value=\"out\" ";
        // line 427
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 427, $this->source); })()), "type", [], "any", false, false, false, 427) == "out")) ? ("selected") : (""));
        yield ">Sorties (-)</option>
                    </select>
                </div>
                <div class=\"col-6 col-md-3\">
                    <label class=\"form-label fw-bold small mb-1\">Date du</label>
                    <input type=\"date\" name=\"date_from\" class=\"form-control form-control-sm\" value=\"";
        // line 432
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 432, $this->source); })()), "date_from", [], "any", false, false, false, 432), "html", null, true);
        yield "\">
                </div>
                <div class=\"col-6 col-md-3\">
                    <label class=\"form-label fw-bold small mb-1\">Date au</label>
                    <input type=\"date\" name=\"date_to\" class=\"form-control form-control-sm\" value=\"";
        // line 436
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 436, $this->source); })()), "date_to", [], "any", false, false, false, 436), "html", null, true);
        yield "\">
                </div>
                <div class=\"col-12 col-md-3 d-flex align-items-end gap-2\">
                    <button type=\"submit\" class=\"btn btn-primary btn-sm flex-grow-1\">
                        <i class=\"fas fa-search me-1\"></i> Filtrer
                    </button>
                    ";
        // line 442
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 442, $this->source); })()), "type", [], "any", false, false, false, 442) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 442, $this->source); })()), "date_from", [], "any", false, false, false, 442)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 442, $this->source); })()), "date_to", [], "any", false, false, false, 442))) {
            // line 443
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_adjustment_index");
            yield "\" class=\"btn btn-outline-secondary btn-sm\" title=\"Effacer les filtres\">
                            <i class=\"fas fa-undo\"></i>
                        </a>
                    ";
        }
        // line 447
        yield "                </div>
            </form>
        </div>
    </div>

    <!-- ==========================================
         LISTE DES AJUSTEMENTS
    ========================================== -->
    <div class=\"card border-0 shadow-sm\">
        <div class=\"card-header bg-white py-2 py-md-3 d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0 fw-semibold small\">
                <i class=\"fas fa-list me-2 text-primary\"></i>
                Liste des ajustements
            </h5>
            <span class=\"badge bg-secondary\">";
        // line 461
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["adjustments"]) || array_key_exists("adjustments", $context) ? $context["adjustments"] : (function () { throw new RuntimeError('Variable "adjustments" does not exist.', 461, $this->source); })())), "html", null, true);
        yield " résultat(s)</span>
        </div>

        ";
        // line 464
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["adjustments"]) || array_key_exists("adjustments", $context) ? $context["adjustments"] : (function () { throw new RuntimeError('Variable "adjustments" does not exist.', 464, $this->source); })())) > 0)) {
            // line 465
            yield "            ";
            // line 468
            yield "            <div class=\"card-body p-0 table-responsive d-none d-md-block\">
                <table class=\"table table-hover align-middle mb-0 table-adjustments\">
                    <thead class=\"table-light\">
                        <tr>
                            <th class=\"ps-3\">Date</th>
                            <th>Type</th>
                            <th>Produit</th>
                            <th>N° lot</th>
                            <th class=\"text-end\">Quantité</th>
                            <th>Raison</th>
                            <th>Utilisateur</th>
                            <th class=\"text-center\">Justificatif</th>
                            <th class=\"text-center pe-3\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 484
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["adjustments"]) || array_key_exists("adjustments", $context) ? $context["adjustments"] : (function () { throw new RuntimeError('Variable "adjustments" does not exist.', 484, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["adjustment"]) {
                // line 485
                yield "                            <tr>
                                <td class=\"ps-3\">
                                    <div class=\"fw-bold small\">";
                // line 487
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "createdAt", [], "any", false, false, false, 487), "d/m/Y"), "html", null, true);
                yield "</div>
                                    <small class=\"text-muted\">";
                // line 488
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "createdAt", [], "any", false, false, false, 488), "H:i"), "html", null, true);
                yield "</small>
                                </td>
                                <td>
                                    <span class=\"badge ";
                // line 491
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "typeBadgeClass", [], "any", false, false, false, 491), "html", null, true);
                yield " badge-type\">
                                        <i class=\"";
                // line 492
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "typeIcon", [], "any", false, false, false, 492), "html", null, true);
                yield " me-1\"></i>
                                        ";
                // line 493
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "typeLabel", [], "any", false, false, false, 493), "html", null, true);
                yield "
                                    </span>
                                </td>
                                <td>
                                    <div class=\"fw-bold small\">";
                // line 497
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "stockBatch", [], "any", false, false, false, 497), "product", [], "any", false, false, false, 497), "name", [], "any", false, false, false, 497)), "truncate", [35], "method", false, false, false, 497), "html", null, true);
                yield "</div>
                                    <small class=\"text-muted\">";
                // line 498
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "stockBatch", [], "any", false, false, false, 498), "product", [], "any", false, false, false, 498), "barcode", [], "any", false, false, false, 498), "html", null, true);
                yield "</small>
                                </td>
                                <td>
                                    <code class=\"small\">";
                // line 501
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "stockBatch", [], "any", false, false, false, 501), "batchNumber", [], "any", false, false, false, 501)), "truncate", [20], "method", false, false, false, 501), "html", null, true);
                yield "</code>
                                </td>
                                <td class=\"text-end\">
                                    <span class=\"fw-bold ";
                // line 504
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "type", [], "any", false, false, false, 504) == "in")) ? ("text-success") : ("text-danger"));
                yield "\">
                                        ";
                // line 505
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "type", [], "any", false, false, false, 505) == "in")) ? ("+") : ("-"));
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "quantity", [], "any", false, false, false, 505), 0, ",", " "), "html", null, true);
                yield "
                                    </span>
                                </td>
                                <td>
                                    <small class=\"text-muted\">";
                // line 509
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "reason", [], "any", false, false, false, 509)), "truncate", [45], "method", false, false, false, 509), "html", null, true);
                yield "</small>
                                </td>
                                <td>
                                    <div class=\"d-flex align-items-center gap-2\">
                                        <i class=\"fas fa-user-circle text-muted\"></i>
                                        <small>";
                // line 514
                yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "createdBy", [], "any", false, false, false, 514), "fullName", [], "any", false, false, false, 514)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "createdBy", [], "any", false, false, false, 514), "fullName", [], "any", false, false, false, 514), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "createdBy", [], "any", false, false, false, 514), "email", [], "any", false, false, false, 514)), "truncate", [20], "method", false, false, false, 514), "html", null, true)));
                yield "</small>
                                    </div>
                                </td>
                                <td class=\"text-center\">
                                    ";
                // line 519
                yield "                                    ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "justificationFile", [], "any", false, false, false, 519)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 520
                    yield "                                        ";
                    $context["parts"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "justificationFile", [], "any", false, false, false, 520), "/");
                    // line 521
                    yield "                                        ";
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["parts"]) || array_key_exists("parts", $context) ? $context["parts"] : (function () { throw new RuntimeError('Variable "parts" does not exist.', 521, $this->source); })())) >= 3)) {
                        // line 522
                        yield "                                            <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_serve_upload", ["folder" => CoreExtension::getAttribute($this->env, $this->source,                         // line 523
(isset($context["parts"]) || array_key_exists("parts", $context) ? $context["parts"] : (function () { throw new RuntimeError('Variable "parts" does not exist.', 523, $this->source); })()), 0, [], "array", false, false, false, 523), "companyId" => CoreExtension::getAttribute($this->env, $this->source,                         // line 524
(isset($context["parts"]) || array_key_exists("parts", $context) ? $context["parts"] : (function () { throw new RuntimeError('Variable "parts" does not exist.', 524, $this->source); })()), 1, [], "array", false, false, false, 524), "filename" => CoreExtension::getAttribute($this->env, $this->source,                         // line 525
(isset($context["parts"]) || array_key_exists("parts", $context) ? $context["parts"] : (function () { throw new RuntimeError('Variable "parts" does not exist.', 525, $this->source); })()), 2, [], "array", false, false, false, 525)]), "html", null, true);
                        // line 526
                        yield "\" 
                                               target=\"_blank\" 
                                               class=\"btn btn-sm btn-outline-info btn-icon-sm\" 
                                               title=\"Voir le justificatif\">
                                                <i class=\"fas fa-file\"></i>
                                            </a>
                                        ";
                    } else {
                        // line 533
                        yield "                                            <span class=\"text-muted small\">—</span>
                                        ";
                    }
                    // line 535
                    yield "                                    ";
                } else {
                    // line 536
                    yield "                                        <span class=\"text-muted small\">—</span>
                                    ";
                }
                // line 538
                yield "                                </td>
                                <td class=\"text-center pe-3\">
                                    <a href=\"";
                // line 540
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_adjustment_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "id", [], "any", false, false, false, 540)]), "html", null, true);
                yield "\" 
                                       class=\"btn btn-sm btn-outline-primary btn-icon-sm\" 
                                       title=\"Voir le détail\">
                                        <i class=\"fas fa-eye\"></i>
                                    </a>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['adjustment'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 548
            yield "                    </tbody>
                </table>
            </div>

            ";
            // line 555
            yield "            <div class=\"card-body p-2 adjustment-cards-mobile\">
                ";
            // line 556
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["adjustments"]) || array_key_exists("adjustments", $context) ? $context["adjustments"] : (function () { throw new RuntimeError('Variable "adjustments" does not exist.', 556, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["adjustment"]) {
                // line 557
                yield "                    <div class=\"adjustment-card-mobile type-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "type", [], "any", false, false, false, 557), "html", null, true);
                yield "\">
                        <!-- En-tête -->
                        <div class=\"mobile-header\">
                            <div class=\"mobile-header-left\">
                                <div class=\"mobile-date\">
                                    <i class=\"far fa-calendar-alt\"></i>
                                    ";
                // line 563
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "createdAt", [], "any", false, false, false, 563), "d/m/Y"), "html", null, true);
                yield " · ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "createdAt", [], "any", false, false, false, 563), "H:i"), "html", null, true);
                yield "
                                </div>
                                <div class=\"mobile-product\">
                                    ";
                // line 566
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "stockBatch", [], "any", false, false, false, 566), "product", [], "any", false, false, false, 566), "name", [], "any", false, false, false, 566)), "truncate", [35], "method", false, false, false, 566), "html", null, true);
                yield "
                                </div>
                                <div class=\"mobile-barcode\">
                                    ";
                // line 569
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "stockBatch", [], "any", false, false, false, 569), "product", [], "any", false, false, false, 569), "barcode", [], "any", false, false, false, 569), "html", null, true);
                yield "
                                </div>
                            </div>
                            <div class=\"mobile-qty\">
                                ";
                // line 573
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "type", [], "any", false, false, false, 573) == "in")) ? ("+") : ("-"));
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "quantity", [], "any", false, false, false, 573), 0, ",", " "), "html", null, true);
                yield "
                            </div>
                        </div>

                        <!-- Détails -->
                        <div class=\"mobile-rows\">
                            <div class=\"mobile-row\">
                                <span class=\"mobile-row-label\">
                                    <i class=\"fas fa-tag\"></i> Type
                                </span>
                                <span class=\"mobile-row-value\">
                                    <span class=\"badge ";
                // line 584
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "typeBadgeClass", [], "any", false, false, false, 584), "html", null, true);
                yield " badge-type\">
                                        <i class=\"";
                // line 585
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "typeIcon", [], "any", false, false, false, 585), "html", null, true);
                yield " me-1\"></i>
                                        ";
                // line 586
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "typeLabel", [], "any", false, false, false, 586), "html", null, true);
                yield "
                                    </span>
                                </span>
                            </div>
                            <div class=\"mobile-row\">
                                <span class=\"mobile-row-label\">
                                    <i class=\"fas fa-barcode\"></i> N° lot
                                </span>
                                <span class=\"mobile-row-value\">
                                    <code class=\"small\">";
                // line 595
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "stockBatch", [], "any", false, false, false, 595), "batchNumber", [], "any", false, false, false, 595)), "truncate", [20], "method", false, false, false, 595), "html", null, true);
                yield "</code>
                                </span>
                            </div>
                            <div class=\"mobile-row\">
                                <span class=\"mobile-row-label\">
                                    <i class=\"fas fa-user\"></i> Utilisateur
                                </span>
                                <span class=\"mobile-row-value\">
                                    ";
                // line 603
                yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "createdBy", [], "any", false, false, false, 603), "fullName", [], "any", false, false, false, 603)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "createdBy", [], "any", false, false, false, 603), "fullName", [], "any", false, false, false, 603), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "createdBy", [], "any", false, false, false, 603), "email", [], "any", false, false, false, 603)), "truncate", [20], "method", false, false, false, 603), "html", null, true)));
                yield "
                                </span>
                            </div>
                        </div>

                        <!-- Raison -->
                        ";
                // line 609
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "reason", [], "any", false, false, false, 609)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 610
                    yield "                            <div class=\"mobile-reason\">
                                <i class=\"fas fa-comment me-1\"></i>
                                ";
                    // line 612
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "reason", [], "any", false, false, false, 612)), "truncate", [100], "method", false, false, false, 612), "html", null, true);
                    yield "
                            </div>
                        ";
                }
                // line 615
                yield "
                        <!-- Actions -->
                        <div class=\"mobile-actions\">
                            <a href=\"";
                // line 618
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_adjustment_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "id", [], "any", false, false, false, 618)]), "html", null, true);
                yield "\" 
                               class=\"btn btn-outline-primary\">
                                <i class=\"fas fa-eye me-1\"></i> Voir
                            </a>
                            ";
                // line 623
                yield "                            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "justificationFile", [], "any", false, false, false, 623)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 624
                    yield "                                ";
                    $context["parts"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["adjustment"], "justificationFile", [], "any", false, false, false, 624), "/");
                    // line 625
                    yield "                                ";
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["parts"]) || array_key_exists("parts", $context) ? $context["parts"] : (function () { throw new RuntimeError('Variable "parts" does not exist.', 625, $this->source); })())) >= 3)) {
                        // line 626
                        yield "                                    <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_serve_upload", ["folder" => CoreExtension::getAttribute($this->env, $this->source,                         // line 627
(isset($context["parts"]) || array_key_exists("parts", $context) ? $context["parts"] : (function () { throw new RuntimeError('Variable "parts" does not exist.', 627, $this->source); })()), 0, [], "array", false, false, false, 627), "companyId" => CoreExtension::getAttribute($this->env, $this->source,                         // line 628
(isset($context["parts"]) || array_key_exists("parts", $context) ? $context["parts"] : (function () { throw new RuntimeError('Variable "parts" does not exist.', 628, $this->source); })()), 1, [], "array", false, false, false, 628), "filename" => CoreExtension::getAttribute($this->env, $this->source,                         // line 629
(isset($context["parts"]) || array_key_exists("parts", $context) ? $context["parts"] : (function () { throw new RuntimeError('Variable "parts" does not exist.', 629, $this->source); })()), 2, [], "array", false, false, false, 629)]), "html", null, true);
                        // line 630
                        yield "\" 
                                       target=\"_blank\" 
                                       class=\"btn btn-outline-info\">
                                        <i class=\"fas fa-file me-1\"></i> Justif.
                                    </a>
                                ";
                    }
                    // line 636
                    yield "                            ";
                }
                // line 637
                yield "                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['adjustment'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 640
            yield "            </div>
        ";
        } else {
            // line 642
            yield "            ";
            // line 643
            yield "            <div class=\"card-body text-center py-5\">
                <i class=\"fas fa-calculator fa-3x text-muted mb-3 opacity-50\"></i>
                <p class=\"text-muted mb-0\">Aucun ajustement trouvé</p>
                <p class=\"text-muted small mb-3\">Modifiez vos filtres ou créez un nouvel ajustement</p>
                <a href=\"";
            // line 647
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_adjustment_new");
            yield "\" class=\"btn btn-primary\">
                    <i class=\"fas fa-plus me-1\"></i> Créer un ajustement
                </a>
            </div>
        ";
        }
        // line 652
        yield "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 656
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

        // line 657
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
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
        return "stock/adjustment/index.html.twig";
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
        return array (  983 => 657,  970 => 656,  957 => 652,  949 => 647,  943 => 643,  941 => 642,  937 => 640,  929 => 637,  926 => 636,  918 => 630,  916 => 629,  915 => 628,  914 => 627,  912 => 626,  909 => 625,  906 => 624,  903 => 623,  896 => 618,  891 => 615,  885 => 612,  881 => 610,  879 => 609,  870 => 603,  859 => 595,  847 => 586,  843 => 585,  839 => 584,  824 => 573,  817 => 569,  811 => 566,  803 => 563,  793 => 557,  789 => 556,  786 => 555,  780 => 548,  766 => 540,  762 => 538,  758 => 536,  755 => 535,  751 => 533,  742 => 526,  740 => 525,  739 => 524,  738 => 523,  736 => 522,  733 => 521,  730 => 520,  727 => 519,  720 => 514,  712 => 509,  704 => 505,  700 => 504,  694 => 501,  688 => 498,  684 => 497,  677 => 493,  673 => 492,  669 => 491,  663 => 488,  659 => 487,  655 => 485,  651 => 484,  633 => 468,  631 => 465,  629 => 464,  623 => 461,  607 => 447,  599 => 443,  597 => 442,  588 => 436,  581 => 432,  573 => 427,  569 => 426,  539 => 399,  520 => 383,  502 => 368,  498 => 367,  480 => 352,  476 => 351,  457 => 335,  434 => 315,  422 => 305,  409 => 304,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/stock/adjustment/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Ajustements de stock - HMA Market{% endblock %}

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
    .card-bg-success {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%) !important;
        color: white;
    }
    .card-bg-danger {
        background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%) !important;
        color: white;
    }
    .card-bg-primary {
        background: linear-gradient(135deg, #0463f1 0%, #0350c4 100%) !important;
        color: white;
    }
    .card-bg-info {
        background: linear-gradient(135deg, #0ea5e9 0%, #0284c7 100%) !important;
        color: white;
    }
    .card-bg-success .stat-icon,
    .card-bg-danger .stat-icon,
    .card-bg-primary .stat-icon,
    .card-bg-info .stat-icon {
        background: rgba(255,255,255,0.2);
    }
    .card-bg-success .stat-value,
    .card-bg-danger .stat-value,
    .card-bg-primary .stat-value,
    .card-bg-info .stat-value {
        color: white;
    }
    .card-bg-success .text-muted,
    .card-bg-danger .text-muted,
    .card-bg-primary .text-muted,
    .card-bg-info .text-muted {
        color: rgba(255,255,255,0.85) !important;
    }

    /* ============================================
       TABLEAU
       ============================================ */
    .table-adjustments td {
        vertical-align: middle;
    }
    .badge-type {
        font-size: 0.72rem;
        padding: 0.35rem 0.6rem;
        font-weight: 600;
    }
    .reason-text {
        max-width: 200px;
        display: inline-block;
        word-break: break-word;
    }

    /* ============================================
       BOUTONS D'ACTION
       ============================================ */
    .btn-icon-sm {
        width: 32px;
        height: 32px;
        padding: 0;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 8px;
    }

    /* ============================================
       ✅ CARTES MOBILE (à la place du tableau)
       ============================================ */
    .adjustment-card-mobile {
        background: #fff;
        border: 1px solid #e9ecef;
        border-radius: 12px;
        padding: 1rem;
        margin-bottom: 0.75rem;
        box-shadow: 0 2px 6px rgba(0,0,0,0.04);
        position: relative;
        transition: box-shadow 0.2s;
    }
    .adjustment-card-mobile:hover {
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    }
    .adjustment-card-mobile::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        width: 4px;
        border-radius: 12px 0 0 12px;
    }
    .adjustment-card-mobile.type-in::before {
        background: #10b981;
    }
    .adjustment-card-mobile.type-out::before {
        background: #ef4444;
    }

    .adjustment-card-mobile .mobile-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        gap: 0.75rem;
        margin-bottom: 0.75rem;
        padding-bottom: 0.75rem;
        border-bottom: 1px dashed #e9ecef;
    }
    .adjustment-card-mobile .mobile-header-left {
        flex-grow: 1;
        min-width: 0;
    }
    .adjustment-card-mobile .mobile-date {
        font-size: 0.72rem;
        color: #64748b;
        display: flex;
        align-items: center;
        gap: 0.25rem;
        margin-bottom: 0.35rem;
    }
    .adjustment-card-mobile .mobile-product {
        font-weight: 700;
        color: #1e293b;
        font-size: 0.92rem;
        line-height: 1.3;
        margin-bottom: 0.15rem;
    }
    .adjustment-card-mobile .mobile-barcode {
        font-size: 0.7rem;
        color: #94a3b8;
        font-family: 'Courier New', monospace;
    }

    .adjustment-card-mobile .mobile-qty {
        flex-shrink: 0;
        text-align: right;
        padding: 0.25rem 0.5rem;
        border-radius: 8px;
        font-weight: 800;
        font-size: 1.1rem;
        line-height: 1.1;
        min-width: 70px;
    }
    .adjustment-card-mobile.type-in .mobile-qty {
        background: #d1fae5;
        color: #065f46;
    }
    .adjustment-card-mobile.type-out .mobile-qty {
        background: #fee2e2;
        color: #991b1b;
    }

    .adjustment-card-mobile .mobile-rows {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
    }
    .adjustment-card-mobile .mobile-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 0.5rem;
        font-size: 0.82rem;
    }
    .adjustment-card-mobile .mobile-row-label {
        color: #64748b;
        flex-shrink: 0;
        display: flex;
        align-items: center;
        gap: 0.35rem;
    }
    .adjustment-card-mobile .mobile-row-value {
        color: #1e293b;
        font-weight: 600;
        text-align: right;
        word-break: break-word;
    }
    .adjustment-card-mobile .mobile-reason {
        background: #f8fafc;
        border-radius: 8px;
        padding: 0.55rem 0.75rem;
        font-size: 0.78rem;
        color: #475569;
        margin-top: 0.5rem;
        border-left: 3px solid #cbd5e1;
    }

    .adjustment-card-mobile .mobile-actions {
        display: flex;
        gap: 0.5rem;
        margin-top: 0.75rem;
        padding-top: 0.75rem;
        border-top: 1px dashed #e9ecef;
    }
    .adjustment-card-mobile .mobile-actions .btn {
        flex: 1;
        font-size: 0.8rem;
        padding: 0.5rem;
    }

    /* ============================================
       RESPONSIVE
       ============================================ */
    @media (max-width: 768px) {
        .container-fluid {
            padding-left: 0.75rem !important;
            padding-right: 0.75rem !important;
        }

        /* En-tête */
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

        /* Stats cards */
        .stat-card .stat-value {
            font-size: 1.4rem;
        }
        .stat-card .stat-label {
            font-size: 0.65rem;
        }
        .stat-icon {
            width: 40px;
            height: 40px;
        }
        .stat-icon i {
            font-size: 1.3rem !important;
        }

        /* Filtres */
        .filter-form .col-md-3 {
            width: 100%;
        }

        /* Tableau masqué sur mobile */
        .table-responsive {
            display: none;
        }
    }

    /* Sur desktop : cartes mobile masquées */
    @media (min-width: 769px) {
        .adjustment-cards-mobile {
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
                        <i class=\"fas fa-calculator me-1\"></i> Ajustements
                    </li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-calculator text-primary me-2\"></i>
                Ajustements de stock
            </h1>
            <p class=\"text-muted mt-2 mb-0 small d-none d-md-block\">
                <i class=\"fas fa-info-circle me-1\"></i>
                Gérez les entrées et sorties manuelles de stock (casse, perte, surplus, etc.)
            </p>
        </div>
        <div>
            <a href=\"{{ path('app_stock_adjustment_new') }}\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus me-1\"></i> Nouvel ajustement
            </a>
        </div>
    </div>

    <!-- ==========================================
         STATISTIQUES
    ========================================== -->
    <div class=\"row g-2 g-md-3 mb-4\">
        <div class=\"col-6 col-md-3\">
            <div class=\"card stat-card card-bg-success shadow-sm\">
                <div class=\"card-body p-2 p-md-3\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Entrées (+)</div>
                            <div class=\"stat-value\">{{ stats.total_in|default(0)|number_format(0, ',', ' ') }}</div>
                            <div class=\"stat-sub\">{{ stats.count_in|default(0) }} mouvement(s)</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-plus-circle fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-6 col-md-3\">
            <div class=\"card stat-card card-bg-danger shadow-sm\">
                <div class=\"card-body p-2 p-md-3\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Sorties (-)</div>
                            <div class=\"stat-value\">{{ stats.total_out|default(0)|number_format(0, ',', ' ') }}</div>
                            <div class=\"stat-sub\">{{ stats.count_out|default(0) }} mouvement(s)</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-minus-circle fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-6 col-md-3\">
            <div class=\"card stat-card card-bg-primary shadow-sm\">
                <div class=\"card-body p-2 p-md-3\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Mouvements</div>
                            <div class=\"stat-value\">{{ stats.total_movements|default(0)|number_format(0, ',', ' ') }}</div>
                            <div class=\"stat-sub\">ajustements</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-chart-line fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-6 col-md-3\">
            <div class=\"card stat-card card-bg-info shadow-sm\">
                <div class=\"card-body p-2 p-md-3\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1\">
                            <div class=\"stat-label\">Quantité</div>
                            <div class=\"stat-value\">{{ stats.total_quantity|default(0)|number_format(0, ',', ' ') }}</div>
                            <div class=\"stat-sub\">unités concernées</div>
                        </div>
                        <div class=\"stat-icon\">
                            <i class=\"fas fa-boxes fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
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
                    <label class=\"form-label fw-bold small mb-1\">Type</label>
                    <select name=\"type\" class=\"form-select form-select-sm\">
                        <option value=\"\">Tous</option>
                        <option value=\"in\" {{ filters.type == 'in' ? 'selected' }}>Entrées (+)</option>
                        <option value=\"out\" {{ filters.type == 'out' ? 'selected' }}>Sorties (-)</option>
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
                    {% if filters.type or filters.date_from or filters.date_to %}
                        <a href=\"{{ path('app_stock_adjustment_index') }}\" class=\"btn btn-outline-secondary btn-sm\" title=\"Effacer les filtres\">
                            <i class=\"fas fa-undo\"></i>
                        </a>
                    {% endif %}
                </div>
            </form>
        </div>
    </div>

    <!-- ==========================================
         LISTE DES AJUSTEMENTS
    ========================================== -->
    <div class=\"card border-0 shadow-sm\">
        <div class=\"card-header bg-white py-2 py-md-3 d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0 fw-semibold small\">
                <i class=\"fas fa-list me-2 text-primary\"></i>
                Liste des ajustements
            </h5>
            <span class=\"badge bg-secondary\">{{ adjustments|length }} résultat(s)</span>
        </div>

        {% if adjustments|length > 0 %}
            {# ============================================
               ✅ VUE TABLEAU (desktop)
            ============================================ #}
            <div class=\"card-body p-0 table-responsive d-none d-md-block\">
                <table class=\"table table-hover align-middle mb-0 table-adjustments\">
                    <thead class=\"table-light\">
                        <tr>
                            <th class=\"ps-3\">Date</th>
                            <th>Type</th>
                            <th>Produit</th>
                            <th>N° lot</th>
                            <th class=\"text-end\">Quantité</th>
                            <th>Raison</th>
                            <th>Utilisateur</th>
                            <th class=\"text-center\">Justificatif</th>
                            <th class=\"text-center pe-3\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for adjustment in adjustments %}
                            <tr>
                                <td class=\"ps-3\">
                                    <div class=\"fw-bold small\">{{ adjustment.createdAt|date('d/m/Y') }}</div>
                                    <small class=\"text-muted\">{{ adjustment.createdAt|date('H:i') }}</small>
                                </td>
                                <td>
                                    <span class=\"badge {{ adjustment.typeBadgeClass }} badge-type\">
                                        <i class=\"{{ adjustment.typeIcon }} me-1\"></i>
                                        {{ adjustment.typeLabel }}
                                    </span>
                                </td>
                                <td>
                                    <div class=\"fw-bold small\">{{ adjustment.stockBatch.product.name|u.truncate(35) }}</div>
                                    <small class=\"text-muted\">{{ adjustment.stockBatch.product.barcode }}</small>
                                </td>
                                <td>
                                    <code class=\"small\">{{ adjustment.stockBatch.batchNumber|u.truncate(20) }}</code>
                                </td>
                                <td class=\"text-end\">
                                    <span class=\"fw-bold {{ adjustment.type == 'in' ? 'text-success' : 'text-danger' }}\">
                                        {{ adjustment.type == 'in' ? '+' : '-' }}{{ adjustment.quantity|number_format(0, ',', ' ') }}
                                    </span>
                                </td>
                                <td>
                                    <small class=\"text-muted\">{{ adjustment.reason|u.truncate(45) }}</small>
                                </td>
                                <td>
                                    <div class=\"d-flex align-items-center gap-2\">
                                        <i class=\"fas fa-user-circle text-muted\"></i>
                                        <small>{{ adjustment.createdBy.fullName ?: adjustment.createdBy.email|u.truncate(20) }}</small>
                                    </div>
                                </td>
                                <td class=\"text-center\">
                                    {# ✅ CORRECTION : Utilisation de la route app_serve_upload #}
                                    {% if adjustment.justificationFile %}
                                        {% set parts = adjustment.justificationFile|split('/') %}
                                        {% if parts|length >= 3 %}
                                            <a href=\"{{ path('app_serve_upload', {
                                                folder: parts[0],
                                                companyId: parts[1],
                                                filename: parts[2]
                                            }) }}\" 
                                               target=\"_blank\" 
                                               class=\"btn btn-sm btn-outline-info btn-icon-sm\" 
                                               title=\"Voir le justificatif\">
                                                <i class=\"fas fa-file\"></i>
                                            </a>
                                        {% else %}
                                            <span class=\"text-muted small\">—</span>
                                        {% endif %}
                                    {% else %}
                                        <span class=\"text-muted small\">—</span>
                                    {% endif %}
                                </td>
                                <td class=\"text-center pe-3\">
                                    <a href=\"{{ path('app_stock_adjustment_show', {'id': adjustment.id}) }}\" 
                                       class=\"btn btn-sm btn-outline-primary btn-icon-sm\" 
                                       title=\"Voir le détail\">
                                        <i class=\"fas fa-eye\"></i>
                                    </a>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>

            {# ============================================
               ✅ VUE CARTES (mobile)
            ============================================ #}
            <div class=\"card-body p-2 adjustment-cards-mobile\">
                {% for adjustment in adjustments %}
                    <div class=\"adjustment-card-mobile type-{{ adjustment.type }}\">
                        <!-- En-tête -->
                        <div class=\"mobile-header\">
                            <div class=\"mobile-header-left\">
                                <div class=\"mobile-date\">
                                    <i class=\"far fa-calendar-alt\"></i>
                                    {{ adjustment.createdAt|date('d/m/Y') }} · {{ adjustment.createdAt|date('H:i') }}
                                </div>
                                <div class=\"mobile-product\">
                                    {{ adjustment.stockBatch.product.name|u.truncate(35) }}
                                </div>
                                <div class=\"mobile-barcode\">
                                    {{ adjustment.stockBatch.product.barcode }}
                                </div>
                            </div>
                            <div class=\"mobile-qty\">
                                {{ adjustment.type == 'in' ? '+' : '-' }}{{ adjustment.quantity|number_format(0, ',', ' ') }}
                            </div>
                        </div>

                        <!-- Détails -->
                        <div class=\"mobile-rows\">
                            <div class=\"mobile-row\">
                                <span class=\"mobile-row-label\">
                                    <i class=\"fas fa-tag\"></i> Type
                                </span>
                                <span class=\"mobile-row-value\">
                                    <span class=\"badge {{ adjustment.typeBadgeClass }} badge-type\">
                                        <i class=\"{{ adjustment.typeIcon }} me-1\"></i>
                                        {{ adjustment.typeLabel }}
                                    </span>
                                </span>
                            </div>
                            <div class=\"mobile-row\">
                                <span class=\"mobile-row-label\">
                                    <i class=\"fas fa-barcode\"></i> N° lot
                                </span>
                                <span class=\"mobile-row-value\">
                                    <code class=\"small\">{{ adjustment.stockBatch.batchNumber|u.truncate(20) }}</code>
                                </span>
                            </div>
                            <div class=\"mobile-row\">
                                <span class=\"mobile-row-label\">
                                    <i class=\"fas fa-user\"></i> Utilisateur
                                </span>
                                <span class=\"mobile-row-value\">
                                    {{ adjustment.createdBy.fullName ?: adjustment.createdBy.email|u.truncate(20) }}
                                </span>
                            </div>
                        </div>

                        <!-- Raison -->
                        {% if adjustment.reason %}
                            <div class=\"mobile-reason\">
                                <i class=\"fas fa-comment me-1\"></i>
                                {{ adjustment.reason|u.truncate(100) }}
                            </div>
                        {% endif %}

                        <!-- Actions -->
                        <div class=\"mobile-actions\">
                            <a href=\"{{ path('app_stock_adjustment_show', {'id': adjustment.id}) }}\" 
                               class=\"btn btn-outline-primary\">
                                <i class=\"fas fa-eye me-1\"></i> Voir
                            </a>
                            {# ✅ CORRECTION : Justificatif avec route #}
                            {% if adjustment.justificationFile %}
                                {% set parts = adjustment.justificationFile|split('/') %}
                                {% if parts|length >= 3 %}
                                    <a href=\"{{ path('app_serve_upload', {
                                        folder: parts[0],
                                        companyId: parts[1],
                                        filename: parts[2]
                                    }) }}\" 
                                       target=\"_blank\" 
                                       class=\"btn btn-outline-info\">
                                        <i class=\"fas fa-file me-1\"></i> Justif.
                                    </a>
                                {% endif %}
                            {% endif %}
                        </div>
                    </div>
                {% endfor %}
            </div>
        {% else %}
            {# Aucun résultat #}
            <div class=\"card-body text-center py-5\">
                <i class=\"fas fa-calculator fa-3x text-muted mb-3 opacity-50\"></i>
                <p class=\"text-muted mb-0\">Aucun ajustement trouvé</p>
                <p class=\"text-muted small mb-3\">Modifiez vos filtres ou créez un nouvel ajustement</p>
                <a href=\"{{ path('app_stock_adjustment_new') }}\" class=\"btn btn-primary\">
                    <i class=\"fas fa-plus me-1\"></i> Créer un ajustement
                </a>
            </div>
        {% endif %}
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
{% endblock %}", "stock/adjustment/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\stock\\adjustment\\index.html.twig");
    }
}
