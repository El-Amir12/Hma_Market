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

/* supplier_credit_note/index.html.twig */
class __TwigTemplate_6d8f48c3d432760ba940660546ea0063 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "supplier_credit_note/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "supplier_credit_note/index.html.twig"));

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

        yield "Gestion des avoirs fournisseurs - HMA Market";
        
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
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
<link href=\"https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css\" rel=\"stylesheet\" />
<style>
    .stat-card {
        transition: transform 0.2s, box-shadow 0.2s;
        border-radius: 1rem;
        overflow: hidden;
        cursor: pointer;
        background: white;
        height: 100%;
    }
    .stat-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }
    .stat-icon {
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 1rem;
        margin: 0 auto 0.75rem auto;
    }
    /* Carte montant total - style différent */
    .stat-card-total {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
    }
    .stat-card-total .stat-icon {
        background: rgba(255,255,255,0.2);
    }
    .stat-card-total h3, .stat-card-total small {
        color: white;
    }
    .stat-card-total .text-muted {
        color: rgba(255,255,255,0.8) !important;
    }
    .credit-card {
        transition: all 0.3s ease;
        border-radius: 1rem;
        border-left: 4px solid;
        margin-bottom: 1rem;
        background: white;
    }
    .credit-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }
    .credit-card.status-pending { border-left-color: #ffc107; }
    .credit-card.status-acknowledged { border-left-color: #17a2b8; }
    .credit-card.status-under_review { border-left-color: #0d6efd; }
    .credit-card.status-recovered { border-left-color: #28a745; }
    .credit-card.status-lost { border-left-color: #dc3545; }
    .credit-card.status-closed { border-left-color: #6c757d; }
    .badge { font-weight: 500; padding: 0.35rem 0.65rem; }
    .badge i { margin-right: 4px; }
    .select2-container--bootstrap-5 .select2-selection {
        border-radius: 0.5rem;
        border-color: #dee2e6;
        min-height: 38px;
    }
    @media (max-width: 768px) {
        .btn-group { flex-direction: column; }
        .btn-group .btn { margin: 2px 0; }
    }
    .active-filter {
        background-color: #e3f2fd;
        border-radius: 20px;
        padding: 5px 12px;
        margin: 2px;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }
    .active-filter .remove-filter {
        cursor: pointer;
        color: #dc3545;
        font-weight: bold;
    }
    .amount-box {
        background-color: #f8f9fa;
        border-radius: 0.5rem;
        padding: 0.5rem;
        transition: all 0.2s;
    }
    .amount-box:hover {
        background-color: #e9ecef;
    }
    @media print {
        .no-print, .btn, .dropdown, .modal, .actions, .filters-card {
            display: none !important;
        }
        body { padding: 20px; font-size: 12px; }
        .card { box-shadow: none !important; border: 1px solid #ddd; }
        .credit-card { break-inside: avoid; page-break-inside: avoid; }
    }
    
    /* Responsive pour les cartes stats */
    @media (max-width: 992px) {
        .stats-row .col-lg-2 {
            flex: 0 0 auto;
            width: 33.333%;
        }
        .stats-row .col-lg-2:last-child {
            width: 100%;
            margin-top: 1rem;
        }
    }
    @media (max-width: 576px) {
        .stats-row .col-lg-2 {
            width: 50%;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 125
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

        // line 126
        yield "<div class=\"container-fluid px-4\">
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 132
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Tableau de bord
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">
                        <i class=\"fas fa-file-invoice-dollar me-1\"></i> Avoirs fournisseurs
                    </li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-file-invoice-dollar me-2 text-primary\"></i>
                Avoirs fournisseurs
            </h1>
            <p class=\"text-muted mt-2\">
                <i class=\"fas fa-info-circle me-1\"></i>
                Gérez les problèmes signalés aux fournisseurs et suivez leur résolution
            </p>
        </div>
        <div class=\"d-flex gap-2\">
            <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-outline-success dropdown-toggle\" data-bs-toggle=\"dropdown\">
                    <i class=\"fas fa-file-excel me-1\"></i> Exporter
                </button>
                <ul class=\"dropdown-menu dropdown-menu-end\">
                    <li>
                        <a class=\"dropdown-item\" href=\"";
        // line 157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_export_excel", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 157, $this->source); })()), "request", [], "any", false, false, false, 157), "query", [], "any", false, false, false, 157), "all", [], "any", false, false, false, 157)), "html", null, true);
        yield "\">
                            <i class=\"fas fa-file-excel me-2 text-success\"></i> Excel (.xlsx)
                        </a>
                    </li>
                    <li>
                        <a class=\"dropdown-item\" href=\"";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_export_pdf", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 162, $this->source); })()), "request", [], "any", false, false, false, 162), "query", [], "any", false, false, false, 162), "all", [], "any", false, false, false, 162)), "html", null, true);
        yield "\">
                            <i class=\"fas fa-file-pdf me-2 text-danger\"></i> PDF (.pdf)
                        </a>
                    </li>
                </ul>
            </div>
            <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#printOptionsModal\">
                <i class=\"fas fa-print me-2\"></i> Imprimer sélection
            </button>
        </div>
    </div>

    <!-- Statistiques - 5 cartes sur une ligne + montant total sur une nouvelle ligne -->
    <div class=\"stats-row\">
        <div class=\"row g-3 mb-4\">
            <!-- Ligne 1: 5 cartes avec largeurs égales et responsive -->
            <div class=\"row g-3 mb-4\">
                <div class=\"col-lg col-md-6 col-sm-6 col-12\">
                    <div class=\"card stat-card border-0 shadow-sm\">
                        <div class=\"card-body text-center\">
                            <div class=\"stat-icon bg-primary bg-opacity-10 mx-auto\">
                                <i class=\"fas fa-file-invoice-dollar fa-2x text-primary\"></i>
                            </div>
                            <h3 class=\"mb-0 fw-bold text-primary\">";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total", [], "any", true, true, false, 185)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 185, $this->source); })()), "total", [], "any", false, false, false, 185), 0)) : (0)), "html", null, true);
        yield "</h3>
                            <small class=\"text-muted\">Total avoirs</small>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg col-md-6 col-sm-6 col-12\">
                    <div class=\"card stat-card border-0 shadow-sm\">
                        <div class=\"card-body text-center\">
                            <div class=\"stat-icon bg-warning bg-opacity-10 mx-auto\">
                                <i class=\"fas fa-clock fa-2x text-warning\"></i>
                            </div>
                            <h3 class=\"mb-0 fw-bold text-warning\">";
        // line 196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["statusCounts"] ?? null), "pending", [], "any", true, true, false, 196)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statusCounts"]) || array_key_exists("statusCounts", $context) ? $context["statusCounts"] : (function () { throw new RuntimeError('Variable "statusCounts" does not exist.', 196, $this->source); })()), "pending", [], "any", false, false, false, 196), 0)) : (0)), "html", null, true);
        yield "</h3>
                            <small class=\"text-muted\">En attente</small>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg col-md-6 col-sm-6 col-12\">
                    <div class=\"card stat-card border-0 shadow-sm\">
                        <div class=\"card-body text-center\">
                            <div class=\"stat-icon bg-info bg-opacity-10 mx-auto\">
                                <i class=\"fas fa-exchange-alt fa-2x text-info\"></i>
                            </div>
                            <h3 class=\"mb-0 fw-bold text-info\">";
        // line 207
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["statusCounts"] ?? null), "under_review", [], "any", true, true, false, 207)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statusCounts"]) || array_key_exists("statusCounts", $context) ? $context["statusCounts"] : (function () { throw new RuntimeError('Variable "statusCounts" does not exist.', 207, $this->source); })()), "under_review", [], "any", false, false, false, 207), 0)) : (0)), "html", null, true);
        yield "</h3>
                            <small class=\"text-muted\">En analyse</small>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg col-md-6 col-sm-6 col-12\">
                    <div class=\"card stat-card border-0 shadow-sm\">
                        <div class=\"card-body text-center\">
                            <div class=\"stat-icon bg-success bg-opacity-10 mx-auto\">
                                <i class=\"fas fa-check-circle fa-2x text-success\"></i>
                            </div>
                            <h3 class=\"mb-0 fw-bold text-success\">";
        // line 218
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["statusCounts"] ?? null), "recovered", [], "any", true, true, false, 218)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statusCounts"]) || array_key_exists("statusCounts", $context) ? $context["statusCounts"] : (function () { throw new RuntimeError('Variable "statusCounts" does not exist.', 218, $this->source); })()), "recovered", [], "any", false, false, false, 218), 0)) : (0)), "html", null, true);
        yield "</h3>
                            <small class=\"text-muted\">Récupérés</small>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg col-md-6 col-sm-6 col-12\">
                    <div class=\"card stat-card border-0 shadow-sm\">
                        <div class=\"card-body text-center\">
                            <div class=\"stat-icon bg-danger bg-opacity-10 mx-auto\">
                                <i class=\"fas fa-times-circle fa-2x text-danger\"></i>
                            </div>
                            <h3 class=\"mb-0 fw-bold text-danger\">";
        // line 229
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["statusCounts"] ?? null), "lost", [], "any", true, true, false, 229)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statusCounts"]) || array_key_exists("statusCounts", $context) ? $context["statusCounts"] : (function () { throw new RuntimeError('Variable "statusCounts" does not exist.', 229, $this->source); })()), "lost", [], "any", false, false, false, 229), 0)) : (0)), "html", null, true);
        yield "</h3>
                            <small class=\"text-muted\">Perdus</small>
                        </div>
                    </div>
                </div>
            </div> 
        <!-- Ligne 2: Carte Montant total (pleine largeur) -->
        <div class=\"row mb-4\">
            <div class=\"col-12\">
                <div class=\"card stat-card stat-card-total border-0 shadow-sm\">
                    <div class=\"card-body text-center py-4\">
                        <div class=\"stat-icon bg-white bg-opacity-25 mx-auto\">
                            <i class=\"fas fa-chart-line fa-2x\"></i>
                        </div>
                        <h2 class=\"mb-0 fw-bold display-6\">";
        // line 243
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_amount", [], "any", true, true, false, 243)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 243, $this->source); })()), "total_amount", [], "any", false, false, false, 243), 0)) : (0)), (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 243, $this->source); })())), "html", null, true);
        yield "</h2>
                        <small class=\"text-white text-opacity-75\">Montant total des avoirs</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"card border-0 shadow-sm mb-4 filters-card\">
        <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <h5 class=\"mb-0 fw-semibold\">
                <i class=\"fas fa-filter me-2 text-primary\"></i> Filtres
            </h5>
            <div class=\"d-flex gap-2\">
                <a href=\"";
        // line 257
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_index");
        yield "\" class=\"btn btn-outline-secondary btn-sm\">
                    <i class=\"fas fa-undo me-1\"></i> Effacer
                </a>
                <button type=\"submit\" form=\"filter-form\" class=\"btn btn-primary btn-sm\">
                    <i class=\"fas fa-search me-1\"></i> Filtrer
                </button>
            </div>
        </div>
        <div class=\"card-body\">
            <form method=\"get\" id=\"filter-form\">
                <div class=\"row g-3\">
                    <div class=\"col-md-3\">
                        <label class=\"form-label fw-semibold small\">Recherche</label>
                        <input type=\"text\" name=\"search\" class=\"form-control\" 
                               placeholder=\"N° avoir, lot, fournisseur...\" 
                               value=\"";
        // line 272
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("search", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 272, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\">
                    </div>
                    <div class=\"col-md-3\">
                        <label class=\"form-label fw-semibold small\">Statut</label>
                        <select name=\"status\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            ";
        // line 278
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["statusList"]) || array_key_exists("statusList", $context) ? $context["statusList"] : (function () { throw new RuntimeError('Variable "statusList" does not exist.', 278, $this->source); })()));
        foreach ($context['_seq'] as $context["statusKey"] => $context["statusLabel"]) {
            // line 279
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["statusKey"], "html", null, true);
            yield "\" ";
            yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 279, $this->source); })()) == $context["statusKey"])) ? ("selected") : (""));
            yield ">
                                    ";
            // line 280
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["statusLabel"], "html", null, true);
            yield "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['statusKey'], $context['statusLabel'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 283
        yield "                        </select>
                    </div>
                    <div class=\"col-md-3\">
                        <label class=\"form-label fw-semibold small\">Priorité</label>
                        <select name=\"priority\" class=\"form-select\">
                            <option value=\"\">Toutes</option>
                            ";
        // line 289
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["priorityList"]) || array_key_exists("priorityList", $context) ? $context["priorityList"] : (function () { throw new RuntimeError('Variable "priorityList" does not exist.', 289, $this->source); })()));
        foreach ($context['_seq'] as $context["priorityKey"] => $context["priorityLabel"]) {
            // line 290
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["priorityKey"], "html", null, true);
            yield "\" ";
            yield ((((isset($context["priority"]) || array_key_exists("priority", $context) ? $context["priority"] : (function () { throw new RuntimeError('Variable "priority" does not exist.', 290, $this->source); })()) == $context["priorityKey"])) ? ("selected") : (""));
            yield ">
                                    ";
            // line 291
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["priorityLabel"], "html", null, true);
            yield "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['priorityKey'], $context['priorityLabel'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 294
        yield "                        </select>
                    </div>
                    <div class=\"col-md-3\">
                        <label class=\"form-label fw-semibold small\">Type de problème</label>
                        <select name=\"issue_type\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            ";
        // line 300
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["issueTypeList"]) || array_key_exists("issueTypeList", $context) ? $context["issueTypeList"] : (function () { throw new RuntimeError('Variable "issueTypeList" does not exist.', 300, $this->source); })()));
        foreach ($context['_seq'] as $context["typeKey"] => $context["typeLabel"]) {
            // line 301
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["typeKey"], "html", null, true);
            yield "\" ";
            yield ((((isset($context["issueType"]) || array_key_exists("issueType", $context) ? $context["issueType"] : (function () { throw new RuntimeError('Variable "issueType" does not exist.', 301, $this->source); })()) == $context["typeKey"])) ? ("selected") : (""));
            yield ">
                                    ";
            // line 302
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["typeLabel"], "html", null, true);
            yield "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['typeKey'], $context['typeLabel'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 305
        yield "                        </select>
                    </div>
                </div>
                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-4\">
                        <label class=\"form-label fw-semibold small\">Fournisseur</label>
                        <select name=\"supplier_id\" id=\"supplier-select\" class=\"form-select\">
                            <option value=\"\">-- Tous les fournisseurs --</option>
                            ";
        // line 313
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["suppliers"]) || array_key_exists("suppliers", $context) ? $context["suppliers"] : (function () { throw new RuntimeError('Variable "suppliers" does not exist.', 313, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["supplier"]) {
            // line 314
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "id", [], "any", false, false, false, 314), "html", null, true);
            yield "\" ";
            yield ((((isset($context["selectedSupplier"]) || array_key_exists("selectedSupplier", $context) ? $context["selectedSupplier"] : (function () { throw new RuntimeError('Variable "selectedSupplier" does not exist.', 314, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "id", [], "any", false, false, false, 314))) ? ("selected") : (""));
            yield ">
                                    ";
            // line 315
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "name", [], "any", false, false, false, 315), "html", null, true);
            yield "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['supplier'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 318
        yield "                        </select>
                    </div>
                    <div class=\"col-md-4\">
                        <label class=\"form-label fw-semibold small\">Date du</label>
                        <input type=\"date\" name=\"date_from\" class=\"form-control\" value=\"";
        // line 322
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("dateFrom", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["dateFrom"]) || array_key_exists("dateFrom", $context) ? $context["dateFrom"] : (function () { throw new RuntimeError('Variable "dateFrom" does not exist.', 322, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\">
                    </div>
                    <div class=\"col-md-4\">
                        <label class=\"form-label fw-semibold small\">Date au</label>
                        <input type=\"date\" name=\"date_to\" class=\"form-control\" value=\"";
        // line 326
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("dateTo", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["dateTo"]) || array_key_exists("dateTo", $context) ? $context["dateTo"] : (function () { throw new RuntimeError('Variable "dateTo" does not exist.', 326, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\">
                    </div>
                </div>
                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-6\">
                        <label class=\"form-label fw-semibold small\">Trier par</label>
                        <select name=\"sort\" class=\"form-select\">
                            <option value=\"created_at\" ";
        // line 333
        yield (((((array_key_exists("sort", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 333, $this->source); })()), "created_at")) : ("created_at")) == "created_at")) ? ("selected") : (""));
        yield ">Date de création</option>
                            <option value=\"credit_note_number\" ";
        // line 334
        yield (((((array_key_exists("sort", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 334, $this->source); })()), "created_at")) : ("created_at")) == "credit_note_number")) ? ("selected") : (""));
        yield ">N° avoir</option>
                            <option value=\"reported_at\" ";
        // line 335
        yield (((((array_key_exists("sort", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 335, $this->source); })()), "created_at")) : ("created_at")) == "reported_at")) ? ("selected") : (""));
        yield ">Date signalement</option>
                            <option value=\"declared_amount\" ";
        // line 336
        yield (((((array_key_exists("sort", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 336, $this->source); })()), "created_at")) : ("created_at")) == "declared_amount")) ? ("selected") : (""));
        yield ">Montant</option>
                            <option value=\"status\" ";
        // line 337
        yield (((((array_key_exists("sort", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 337, $this->source); })()), "created_at")) : ("created_at")) == "status")) ? ("selected") : (""));
        yield ">Statut</option>
                            <option value=\"priority\" ";
        // line 338
        yield (((((array_key_exists("sort", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 338, $this->source); })()), "created_at")) : ("created_at")) == "priority")) ? ("selected") : (""));
        yield ">Priorité</option>
                        </select>
                    </div>
                    <div class=\"col-md-6\">
                        <label class=\"form-label fw-semibold small\">Ordre</label>
                        <select name=\"direction\" class=\"form-select\">
                            <option value=\"desc\" ";
        // line 344
        yield (((((array_key_exists("direction", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 344, $this->source); })()), "desc")) : ("desc")) == "desc")) ? ("selected") : (""));
        yield ">Décroissant ↓</option>
                            <option value=\"asc\" ";
        // line 345
        yield (((((array_key_exists("direction", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 345, $this->source); })()), "desc")) : ("desc")) == "asc")) ? ("selected") : (""));
        yield ">Croissant ↑</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class=\"row g-4\">
        ";
        // line 354
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["creditNotes"]) || array_key_exists("creditNotes", $context) ? $context["creditNotes"] : (function () { throw new RuntimeError('Variable "creditNotes" does not exist.', 354, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["creditNote"]) {
            // line 355
            yield "            ";
            $context["statusClass"] = CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "status", [], "any", false, false, false, 355);
            // line 356
            yield "            <div class=\"col-xl-4 col-lg-6 col-md-6\">
                <div class=\"card credit-card status-";
            // line 357
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statusClass"]) || array_key_exists("statusClass", $context) ? $context["statusClass"] : (function () { throw new RuntimeError('Variable "statusClass" does not exist.', 357, $this->source); })()), "html", null, true);
            yield " border-0 shadow-sm h-100\">
                    <div class=\"card-header bg-white d-flex justify-content-between align-items-center\">
                        <div class=\"d-flex align-items-center gap-2\">
                            <input type=\"checkbox\" class=\"form-check-input batch-checkbox\" value=\"";
            // line 360
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "id", [], "any", false, false, false, 360), "html", null, true);
            yield "\" id=\"credit_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "id", [], "any", false, false, false, 360), "html", null, true);
            yield "\">
                            <div>
                                <h6 class=\"mb-0 fw-bold\">
                                    <i class=\"fas fa-receipt me-1 text-primary\"></i>
                                    ";
            // line 364
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "creditNoteNumber", [], "any", false, false, false, 364), "html", null, true);
            yield "
                                </h6>
                                <small class=\"text-muted\">
                                    <i class=\"fas fa-calendar-alt me-1\"></i>
                                    ";
            // line 368
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "reportedAt", [], "any", false, false, false, 368), "d/m/Y H:i"), "html", null, true);
            yield "
                                </small>
                            </div>
                        </div>
                        <div class=\"dropdown\">
                            <button class=\"btn btn-sm btn-light\" type=\"button\" data-bs-toggle=\"dropdown\">
                                <i class=\"fas fa-ellipsis-v\"></i>
                            </button>
                            <ul class=\"dropdown-menu dropdown-menu-end shadow-sm\">
                                <li>
                                    <a class=\"dropdown-item\" href=\"";
            // line 378
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "id", [], "any", false, false, false, 378)]), "html", null, true);
            yield "\">
                                        <i class=\"fas fa-eye me-2 text-info\"></i> Voir le détail
                                    </a>
                                </li>
                                ";
            // line 382
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER"))) {
                // line 383
                yield "                                    ";
                if (!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "status", [], "any", false, false, false, 383), ["closed", "recovered", "lost"])) {
                    // line 384
                    yield "                                    <li>
                                        <button type=\"button\" class=\"dropdown-item text-warning resolve-btn\"
                                                data-id=\"";
                    // line 386
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "id", [], "any", false, false, false, 386), "html", null, true);
                    yield "\"
                                                data-number=\"";
                    // line 387
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "creditNoteNumber", [], "any", false, false, false, 387), "html", null, true);
                    yield "\">
                                            <i class=\"fas fa-check-circle me-2\"></i> Résoudre
                                        </button>
                                    </li>
                                    ";
                }
                // line 392
                yield "                                ";
            }
            // line 393
            yield "                            </ul>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"mb-3\">
                            <div class=\"d-flex justify-content-between mb-2\">
                                <span class=\"text-muted\">Fournisseur</span>
                                <span class=\"fw-bold\">";
            // line 400
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "supplier", [], "any", false, false, false, 400), "name", [], "any", false, false, false, 400)), "truncate", [25], "method", false, false, false, 400), "html", null, true);
            yield "</span>
                            </div>
                            <div class=\"d-flex justify-content-between mb-2\">
                                <span class=\"text-muted\">Lot</span>
                                <span class=\"fw-bold\">";
            // line 404
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "stockBatch", [], "any", false, false, false, 404), "batchNumber", [], "any", false, false, false, 404), "html", null, true);
            yield "</span>
                            </div>
                            <div class=\"d-flex justify-content-between mb-2\">
                                <span class=\"text-muted\">Produit</span>
                                <span>";
            // line 408
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "stockBatch", [], "any", false, false, false, 408), "product", [], "any", false, false, false, 408), "name", [], "any", false, false, false, 408)), "truncate", [30], "method", false, false, false, 408), "html", null, true);
            yield "</span>
                            </div>
                            <div class=\"d-flex justify-content-between mb-2\">
                                <span class=\"text-muted\">Type</span>
                                <span class=\"badge bg-secondary\">";
            // line 412
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "issueTypeLabel", [], "any", false, false, false, 412), "html", null, true);
            yield "</span>
                            </div>
                        </div>
                        <div class=\"row g-2 mb-3\">
                            <div class=\"col-6\">
                                <div class=\"amount-box text-center\">
                                    <small class=\"text-muted\">Déclaré</small>
                                    <div class=\"fw-bold text-danger\">
                                        ";
            // line 420
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "declaredAmount", [], "any", false, false, false, 420), CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "hmaService", [], "any", false, false, false, 420)), "html", null, true);
            yield "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-6\">
                                <div class=\"amount-box text-center\">
                                    <small class=\"text-muted\">Récupéré</small>
                                    <div class=\"fw-bold text-success\">
                                        ";
            // line 428
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(((CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "recoveredAmount", [], "any", false, false, false, 428)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "recoveredAmount", [], "any", false, false, false, 428)) : (0)), CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "hmaService", [], "any", false, false, false, 428)), "html", null, true);
            yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"badge ";
            // line 435
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "statusBadgeClass", [], "any", false, false, false, 435), "html", null, true);
            yield "\">
                                    ";
            // line 436
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "statusLabel", [], "any", false, false, false, 436), "html", null, true);
            yield "
                                </span>
                                <span class=\"badge ";
            // line 438
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "priorityBadgeClass", [], "any", false, false, false, 438), "html", null, true);
            yield " ms-1\">
                                    ";
            // line 439
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "priorityLabel", [], "any", false, false, false, 439), "html", null, true);
            yield "
                                </span>
                            </div>
                            <div>
                                ";
            // line 443
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "supplierResponse", [], "any", false, false, false, 443)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 444
                yield "                                    <span class=\"badge bg-info\" title=\"Réponse fournisseur reçue\">
                                        <i class=\"fas fa-reply-all me-1\"></i> Répondu
                                    </span>
                                ";
            }
            // line 448
            yield "                            </div>
                        </div>
                    </div>
                    <div class=\"card-footer bg-white py-2 d-flex justify-content-between\">
                        <small class=\"text-muted\">
                            <i class=\"fas fa-user me-1\"></i>
                            ";
            // line 454
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "reportedBy", [], "any", false, true, false, 454), "fullName", [], "any", true, true, false, 454)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "reportedBy", [], "any", false, false, false, 454), "fullName", [], "any", false, false, false, 454), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "reportedBy", [], "any", false, false, false, 454), "email", [], "any", false, false, false, 454))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "reportedBy", [], "any", false, false, false, 454), "email", [], "any", false, false, false, 454))), "html", null, true);
            yield "
                        </small>
                        <small class=\"text-muted\">
                            <i class=\"fas fa-history me-1\"></i>
                            ";
            // line 458
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "histories", [], "any", false, false, false, 458)), "html", null, true);
            yield " action(s)
                        </small>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 463
        if (!$context['_iterated']) {
            // line 464
            yield "            <div class=\"col-12\">
                <div class=\"card border-0 shadow-sm text-center py-5\">
                    <i class=\"fas fa-file-invoice-dollar fa-4x text-muted mb-3 opacity-50\"></i>
                    <h5 class=\"text-muted\">Aucun avoir trouvé</h5>
                    <p class=\"text-muted small\">Modifiez vos filtres ou créez un nouvel avoir depuis la gestion des lots</p>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['creditNote'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 472
        yield "    </div>

    ";
        // line 474
        if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 474, $this->source); })()) > 1)) {
            // line 475
            yield "    <nav class=\"mt-5\">
        <ul class=\"pagination justify-content-center\">
            ";
            // line 477
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 477, $this->source); })()) > 1)) {
                // line 478
                yield "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                // line 479
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 479, $this->source); })()), "request", [], "any", false, false, false, 479), "query", [], "any", false, false, false, 479), "all", [], "any", false, false, false, 479), ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 479, $this->source); })()) - 1)])), "html", null, true);
                yield "\">
                        <i class=\"fas fa-chevron-left\"></i> Précédent
                    </a>
                </li>
            ";
            }
            // line 484
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 484, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 485
                yield "                ";
                if ((($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 485, $this->source); })())) || (($context["page"] >= ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 485, $this->source); })()) - 2)) && ($context["page"] <= ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 485, $this->source); })()) + 2))))) {
                    // line 486
                    yield "                    <li class=\"page-item ";
                    yield ((($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 486, $this->source); })()))) ? ("active") : (""));
                    yield "\">
                        <a class=\"page-link\" href=\"";
                    // line 487
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 487, $this->source); })()), "request", [], "any", false, false, false, 487), "query", [], "any", false, false, false, 487), "all", [], "any", false, false, false, 487), ["page" => $context["page"]])), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "</a>
                    </li>
                ";
                } elseif (((                // line 489
$context["page"] == ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 489, $this->source); })()) - 3)) || ($context["page"] == ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 489, $this->source); })()) + 3)))) {
                    // line 490
                    yield "                    <li class=\"page-item disabled\"><span class=\"page-link\">...</span></li>
                ";
                }
                // line 492
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 493
            yield "            ";
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 493, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 493, $this->source); })()))) {
                // line 494
                yield "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                // line 495
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 495, $this->source); })()), "request", [], "any", false, false, false, 495), "query", [], "any", false, false, false, 495), "all", [], "any", false, false, false, 495), ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 495, $this->source); })()) + 1)])), "html", null, true);
                yield "\">
                        Suivant <i class=\"fas fa-chevron-right\"></i>
                    </a>
                </li>
            ";
            }
            // line 500
            yield "        </ul>
    </nav>
    ";
        }
        // line 503
        yield "</div>

<div class=\"modal fade\" id=\"printOptionsModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-primary text-white\">
                <h5 class=\"modal-title\"><i class=\"fas fa-print me-2\"></i> Options d'impression</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"alert alert-info mb-3\">
                    <i class=\"fas fa-info-circle me-2\"></i>
                    <span id=\"selectedCount\">0</span> avoir(s) sélectionné(s) dans la liste
                </div>
                <div class=\"d-grid gap-2\">
                    <button type=\"button\" class=\"btn btn-primary\" id=\"print-selected\">
                        <i class=\"fas fa-print me-2\"></i> Imprimer la sélection
                    </button>
                    <button type=\"button\" class=\"btn btn-outline-primary\" id=\"print-all\">
                        <i class=\"fas fa-print me-2\"></i> Imprimer tous les avoirs
                    </button>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"resolveModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-warning\">
                <h5 class=\"modal-title\"><i class=\"fas fa-check-circle me-2\"></i> Résoudre l'avoir</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <form id=\"resolveForm\" method=\"post\" action=\"\">
                <div class=\"modal-body\">
                    <p>Êtes-vous sûr de vouloir résoudre l'avoir <strong id=\"resolveNumber\"></strong> ?</p>
                    <div class=\"mb-3\">
                        <label class=\"form-label fw-bold\">Nouveau statut</label>
                        <select name=\"status\" class=\"form-select\" required>
                            <option value=\"recovered\">Récupéré (remboursement total)</option>
                            <option value=\"partially_recovered\">Partiellement récupéré</option>
                            <option value=\"lost\">Perdu (aucun remboursement)</option>
                            <option value=\"closed\">Clôturé</option>
                        </select>
                    </div>
                    <div class=\"row\" id=\"amountFields\">
                        <div class=\"col-md-6 mb-3\">
                            <label class=\"form-label\">Montant récupéré (FCFA)</label>
                            <input type=\"number\" name=\"recovered_amount\" class=\"form-control\" step=\"100\" value=\"0\">
                        </div>
                        <div class=\"col-md-6 mb-3\">
                            <label class=\"form-label\">Montant perdu (FCFA)</label>
                            <input type=\"number\" name=\"lost_amount\" class=\"form-control\" step=\"100\" value=\"0\">
                        </div>
                    </div>
                    <div class=\"mb-3\">
                        <label class=\"form-label\">Notes de résolution</label>
                        <textarea name=\"resolution_notes\" class=\"form-control\" rows=\"3\"></textarea>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <input type=\"hidden\" name=\"_token\" id=\"resolveToken\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                    <button type=\"submit\" class=\"btn btn-warning\">Confirmer la résolution</button>
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

    // line 578
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

        // line 579
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/fr.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    \$('#supplier-select').select2({
        theme: 'bootstrap-5',
        language: 'fr',
        placeholder: \"-- Tous les fournisseurs --\",
        allowClear: true,
        width: '100%'
    });

    const checkboxes = document.querySelectorAll('.batch-checkbox');
    const selectedCountSpan = document.getElementById('selectedCount');
    
    function updateSelectedCount() {
        const selected = document.querySelectorAll('.batch-checkbox:checked').length;
        if (selectedCountSpan) selectedCountSpan.textContent = selected;
    }
    
    checkboxes.forEach(cb => cb.addEventListener('change', updateSelectedCount));
    updateSelectedCount();
    
    document.getElementById('print-selected')?.addEventListener('click', function() {
        const selected = Array.from(document.querySelectorAll('.batch-checkbox:checked')).map(cb => cb.value);
        if (selected.length === 0) {
            alert('Veuillez sélectionner au moins un avoir.');
            return;
        }
        window.open('/admin/supplier-credit-note/print-multiple?ids=' + selected.join(','), '_blank');
        bootstrap.Modal.getInstance(document.getElementById('printOptionsModal'))?.hide();
    });
    
    document.getElementById('print-all')?.addEventListener('click', function() {
        const allIds = Array.from(document.querySelectorAll('.batch-checkbox')).map(cb => cb.value);
        if (allIds.length === 0) {
            alert('Aucun avoir à imprimer.');
            return;
        }
        window.open('/admin/supplier-credit-note/print-multiple?ids=' + allIds.join(','), '_blank');
        bootstrap.Modal.getInstance(document.getElementById('printOptionsModal'))?.hide();
    });
    
    const resolveModal = new bootstrap.Modal(document.getElementById('resolveModal'));
    const resolveForm = document.getElementById('resolveForm');
    const resolveNumber = document.getElementById('resolveNumber');
    const resolveToken = document.getElementById('resolveToken');
    
    document.querySelectorAll('.resolve-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const id = this.dataset.id;
            const number = this.dataset.number;
            resolveNumber.textContent = number;
            resolveForm.action = '/admin/supplier-credit-note/' + id + '/resolve';
            resolveToken.value = '";
        // line 634
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("resolve"), "html", null, true);
        yield "';
            resolveModal.show();
        });
    });
    
    const statusSelect = document.querySelector('#resolveForm select[name=\"status\"]');
    const amountFields = document.getElementById('amountFields');
    
    if (statusSelect) {
        statusSelect.addEventListener('change', function() {
            if (this.value === 'closed' || this.value === 'lost') {
                amountFields.style.display = 'none';
                document.querySelector('#resolveForm input[name=\"recovered_amount\"]').value = 0;
                document.querySelector('#resolveForm input[name=\"lost_amount\"]').value = 0;
            } else {
                amountFields.style.display = 'flex';
            }
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
        return "supplier_credit_note/index.html.twig";
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
        return array (  1040 => 634,  982 => 579,  969 => 578,  885 => 503,  880 => 500,  872 => 495,  869 => 494,  866 => 493,  860 => 492,  856 => 490,  854 => 489,  847 => 487,  842 => 486,  839 => 485,  834 => 484,  826 => 479,  823 => 478,  821 => 477,  817 => 475,  815 => 474,  811 => 472,  798 => 464,  796 => 463,  786 => 458,  779 => 454,  771 => 448,  765 => 444,  763 => 443,  756 => 439,  752 => 438,  747 => 436,  743 => 435,  733 => 428,  722 => 420,  711 => 412,  704 => 408,  697 => 404,  690 => 400,  681 => 393,  678 => 392,  670 => 387,  666 => 386,  662 => 384,  659 => 383,  657 => 382,  650 => 378,  637 => 368,  630 => 364,  621 => 360,  615 => 357,  612 => 356,  609 => 355,  604 => 354,  592 => 345,  588 => 344,  579 => 338,  575 => 337,  571 => 336,  567 => 335,  563 => 334,  559 => 333,  549 => 326,  542 => 322,  536 => 318,  527 => 315,  520 => 314,  516 => 313,  506 => 305,  497 => 302,  490 => 301,  486 => 300,  478 => 294,  469 => 291,  462 => 290,  458 => 289,  450 => 283,  441 => 280,  434 => 279,  430 => 278,  421 => 272,  403 => 257,  386 => 243,  369 => 229,  355 => 218,  341 => 207,  327 => 196,  313 => 185,  287 => 162,  279 => 157,  251 => 132,  243 => 126,  230 => 125,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/supplier_credit_note/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Gestion des avoirs fournisseurs - HMA Market{% endblock %}

{% block stylesheets %}
{{ parent() }}
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
<link href=\"https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css\" rel=\"stylesheet\" />
<style>
    .stat-card {
        transition: transform 0.2s, box-shadow 0.2s;
        border-radius: 1rem;
        overflow: hidden;
        cursor: pointer;
        background: white;
        height: 100%;
    }
    .stat-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }
    .stat-icon {
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 1rem;
        margin: 0 auto 0.75rem auto;
    }
    /* Carte montant total - style différent */
    .stat-card-total {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
    }
    .stat-card-total .stat-icon {
        background: rgba(255,255,255,0.2);
    }
    .stat-card-total h3, .stat-card-total small {
        color: white;
    }
    .stat-card-total .text-muted {
        color: rgba(255,255,255,0.8) !important;
    }
    .credit-card {
        transition: all 0.3s ease;
        border-radius: 1rem;
        border-left: 4px solid;
        margin-bottom: 1rem;
        background: white;
    }
    .credit-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }
    .credit-card.status-pending { border-left-color: #ffc107; }
    .credit-card.status-acknowledged { border-left-color: #17a2b8; }
    .credit-card.status-under_review { border-left-color: #0d6efd; }
    .credit-card.status-recovered { border-left-color: #28a745; }
    .credit-card.status-lost { border-left-color: #dc3545; }
    .credit-card.status-closed { border-left-color: #6c757d; }
    .badge { font-weight: 500; padding: 0.35rem 0.65rem; }
    .badge i { margin-right: 4px; }
    .select2-container--bootstrap-5 .select2-selection {
        border-radius: 0.5rem;
        border-color: #dee2e6;
        min-height: 38px;
    }
    @media (max-width: 768px) {
        .btn-group { flex-direction: column; }
        .btn-group .btn { margin: 2px 0; }
    }
    .active-filter {
        background-color: #e3f2fd;
        border-radius: 20px;
        padding: 5px 12px;
        margin: 2px;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }
    .active-filter .remove-filter {
        cursor: pointer;
        color: #dc3545;
        font-weight: bold;
    }
    .amount-box {
        background-color: #f8f9fa;
        border-radius: 0.5rem;
        padding: 0.5rem;
        transition: all 0.2s;
    }
    .amount-box:hover {
        background-color: #e9ecef;
    }
    @media print {
        .no-print, .btn, .dropdown, .modal, .actions, .filters-card {
            display: none !important;
        }
        body { padding: 20px; font-size: 12px; }
        .card { box-shadow: none !important; border: 1px solid #ddd; }
        .credit-card { break-inside: avoid; page-break-inside: avoid; }
    }
    
    /* Responsive pour les cartes stats */
    @media (max-width: 992px) {
        .stats-row .col-lg-2 {
            flex: 0 0 auto;
            width: 33.333%;
        }
        .stats-row .col-lg-2:last-child {
            width: 100%;
            margin-top: 1rem;
        }
    }
    @media (max-width: 576px) {
        .stats-row .col-lg-2 {
            width: 50%;
        }
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('app_dashboard') }}\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Tableau de bord
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">
                        <i class=\"fas fa-file-invoice-dollar me-1\"></i> Avoirs fournisseurs
                    </li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-file-invoice-dollar me-2 text-primary\"></i>
                Avoirs fournisseurs
            </h1>
            <p class=\"text-muted mt-2\">
                <i class=\"fas fa-info-circle me-1\"></i>
                Gérez les problèmes signalés aux fournisseurs et suivez leur résolution
            </p>
        </div>
        <div class=\"d-flex gap-2\">
            <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-outline-success dropdown-toggle\" data-bs-toggle=\"dropdown\">
                    <i class=\"fas fa-file-excel me-1\"></i> Exporter
                </button>
                <ul class=\"dropdown-menu dropdown-menu-end\">
                    <li>
                        <a class=\"dropdown-item\" href=\"{{ path('app_supplier_credit_note_export_excel', app.request.query.all) }}\">
                            <i class=\"fas fa-file-excel me-2 text-success\"></i> Excel (.xlsx)
                        </a>
                    </li>
                    <li>
                        <a class=\"dropdown-item\" href=\"{{ path('app_supplier_credit_note_export_pdf', app.request.query.all) }}\">
                            <i class=\"fas fa-file-pdf me-2 text-danger\"></i> PDF (.pdf)
                        </a>
                    </li>
                </ul>
            </div>
            <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#printOptionsModal\">
                <i class=\"fas fa-print me-2\"></i> Imprimer sélection
            </button>
        </div>
    </div>

    <!-- Statistiques - 5 cartes sur une ligne + montant total sur une nouvelle ligne -->
    <div class=\"stats-row\">
        <div class=\"row g-3 mb-4\">
            <!-- Ligne 1: 5 cartes avec largeurs égales et responsive -->
            <div class=\"row g-3 mb-4\">
                <div class=\"col-lg col-md-6 col-sm-6 col-12\">
                    <div class=\"card stat-card border-0 shadow-sm\">
                        <div class=\"card-body text-center\">
                            <div class=\"stat-icon bg-primary bg-opacity-10 mx-auto\">
                                <i class=\"fas fa-file-invoice-dollar fa-2x text-primary\"></i>
                            </div>
                            <h3 class=\"mb-0 fw-bold text-primary\">{{ stats.total|default(0) }}</h3>
                            <small class=\"text-muted\">Total avoirs</small>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg col-md-6 col-sm-6 col-12\">
                    <div class=\"card stat-card border-0 shadow-sm\">
                        <div class=\"card-body text-center\">
                            <div class=\"stat-icon bg-warning bg-opacity-10 mx-auto\">
                                <i class=\"fas fa-clock fa-2x text-warning\"></i>
                            </div>
                            <h3 class=\"mb-0 fw-bold text-warning\">{{ statusCounts.pending|default(0) }}</h3>
                            <small class=\"text-muted\">En attente</small>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg col-md-6 col-sm-6 col-12\">
                    <div class=\"card stat-card border-0 shadow-sm\">
                        <div class=\"card-body text-center\">
                            <div class=\"stat-icon bg-info bg-opacity-10 mx-auto\">
                                <i class=\"fas fa-exchange-alt fa-2x text-info\"></i>
                            </div>
                            <h3 class=\"mb-0 fw-bold text-info\">{{ statusCounts.under_review|default(0) }}</h3>
                            <small class=\"text-muted\">En analyse</small>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg col-md-6 col-sm-6 col-12\">
                    <div class=\"card stat-card border-0 shadow-sm\">
                        <div class=\"card-body text-center\">
                            <div class=\"stat-icon bg-success bg-opacity-10 mx-auto\">
                                <i class=\"fas fa-check-circle fa-2x text-success\"></i>
                            </div>
                            <h3 class=\"mb-0 fw-bold text-success\">{{ statusCounts.recovered|default(0) }}</h3>
                            <small class=\"text-muted\">Récupérés</small>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg col-md-6 col-sm-6 col-12\">
                    <div class=\"card stat-card border-0 shadow-sm\">
                        <div class=\"card-body text-center\">
                            <div class=\"stat-icon bg-danger bg-opacity-10 mx-auto\">
                                <i class=\"fas fa-times-circle fa-2x text-danger\"></i>
                            </div>
                            <h3 class=\"mb-0 fw-bold text-danger\">{{ statusCounts.lost|default(0) }}</h3>
                            <small class=\"text-muted\">Perdus</small>
                        </div>
                    </div>
                </div>
            </div> 
        <!-- Ligne 2: Carte Montant total (pleine largeur) -->
        <div class=\"row mb-4\">
            <div class=\"col-12\">
                <div class=\"card stat-card stat-card-total border-0 shadow-sm\">
                    <div class=\"card-body text-center py-4\">
                        <div class=\"stat-icon bg-white bg-opacity-25 mx-auto\">
                            <i class=\"fas fa-chart-line fa-2x\"></i>
                        </div>
                        <h2 class=\"mb-0 fw-bold display-6\">{{ stats.total_amount|default(0)|price_with_currency(hmaService) }}</h2>
                        <small class=\"text-white text-opacity-75\">Montant total des avoirs</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"card border-0 shadow-sm mb-4 filters-card\">
        <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <h5 class=\"mb-0 fw-semibold\">
                <i class=\"fas fa-filter me-2 text-primary\"></i> Filtres
            </h5>
            <div class=\"d-flex gap-2\">
                <a href=\"{{ path('app_supplier_credit_note_index') }}\" class=\"btn btn-outline-secondary btn-sm\">
                    <i class=\"fas fa-undo me-1\"></i> Effacer
                </a>
                <button type=\"submit\" form=\"filter-form\" class=\"btn btn-primary btn-sm\">
                    <i class=\"fas fa-search me-1\"></i> Filtrer
                </button>
            </div>
        </div>
        <div class=\"card-body\">
            <form method=\"get\" id=\"filter-form\">
                <div class=\"row g-3\">
                    <div class=\"col-md-3\">
                        <label class=\"form-label fw-semibold small\">Recherche</label>
                        <input type=\"text\" name=\"search\" class=\"form-control\" 
                               placeholder=\"N° avoir, lot, fournisseur...\" 
                               value=\"{{ search|default('') }}\">
                    </div>
                    <div class=\"col-md-3\">
                        <label class=\"form-label fw-semibold small\">Statut</label>
                        <select name=\"status\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            {% for statusKey, statusLabel in statusList %}
                                <option value=\"{{ statusKey }}\" {{ status == statusKey ? 'selected' }}>
                                    {{ statusLabel }}
                                </option>
                            {% endfor %}
                        </select>
                    </div>
                    <div class=\"col-md-3\">
                        <label class=\"form-label fw-semibold small\">Priorité</label>
                        <select name=\"priority\" class=\"form-select\">
                            <option value=\"\">Toutes</option>
                            {% for priorityKey, priorityLabel in priorityList %}
                                <option value=\"{{ priorityKey }}\" {{ priority == priorityKey ? 'selected' }}>
                                    {{ priorityLabel }}
                                </option>
                            {% endfor %}
                        </select>
                    </div>
                    <div class=\"col-md-3\">
                        <label class=\"form-label fw-semibold small\">Type de problème</label>
                        <select name=\"issue_type\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            {% for typeKey, typeLabel in issueTypeList %}
                                <option value=\"{{ typeKey }}\" {{ issueType == typeKey ? 'selected' }}>
                                    {{ typeLabel }}
                                </option>
                            {% endfor %}
                        </select>
                    </div>
                </div>
                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-4\">
                        <label class=\"form-label fw-semibold small\">Fournisseur</label>
                        <select name=\"supplier_id\" id=\"supplier-select\" class=\"form-select\">
                            <option value=\"\">-- Tous les fournisseurs --</option>
                            {% for supplier in suppliers %}
                                <option value=\"{{ supplier.id }}\" {{ selectedSupplier == supplier.id ? 'selected' }}>
                                    {{ supplier.name }}
                                </option>
                            {% endfor %}
                        </select>
                    </div>
                    <div class=\"col-md-4\">
                        <label class=\"form-label fw-semibold small\">Date du</label>
                        <input type=\"date\" name=\"date_from\" class=\"form-control\" value=\"{{ dateFrom|default('') }}\">
                    </div>
                    <div class=\"col-md-4\">
                        <label class=\"form-label fw-semibold small\">Date au</label>
                        <input type=\"date\" name=\"date_to\" class=\"form-control\" value=\"{{ dateTo|default('') }}\">
                    </div>
                </div>
                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-6\">
                        <label class=\"form-label fw-semibold small\">Trier par</label>
                        <select name=\"sort\" class=\"form-select\">
                            <option value=\"created_at\" {{ sort|default('created_at') == 'created_at' ? 'selected' }}>Date de création</option>
                            <option value=\"credit_note_number\" {{ sort|default('created_at') == 'credit_note_number' ? 'selected' }}>N° avoir</option>
                            <option value=\"reported_at\" {{ sort|default('created_at') == 'reported_at' ? 'selected' }}>Date signalement</option>
                            <option value=\"declared_amount\" {{ sort|default('created_at') == 'declared_amount' ? 'selected' }}>Montant</option>
                            <option value=\"status\" {{ sort|default('created_at') == 'status' ? 'selected' }}>Statut</option>
                            <option value=\"priority\" {{ sort|default('created_at') == 'priority' ? 'selected' }}>Priorité</option>
                        </select>
                    </div>
                    <div class=\"col-md-6\">
                        <label class=\"form-label fw-semibold small\">Ordre</label>
                        <select name=\"direction\" class=\"form-select\">
                            <option value=\"desc\" {{ direction|default('desc') == 'desc' ? 'selected' }}>Décroissant ↓</option>
                            <option value=\"asc\" {{ direction|default('desc') == 'asc' ? 'selected' }}>Croissant ↑</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class=\"row g-4\">
        {% for creditNote in creditNotes %}
            {% set statusClass = creditNote.status %}
            <div class=\"col-xl-4 col-lg-6 col-md-6\">
                <div class=\"card credit-card status-{{ statusClass }} border-0 shadow-sm h-100\">
                    <div class=\"card-header bg-white d-flex justify-content-between align-items-center\">
                        <div class=\"d-flex align-items-center gap-2\">
                            <input type=\"checkbox\" class=\"form-check-input batch-checkbox\" value=\"{{ creditNote.id }}\" id=\"credit_{{ creditNote.id }}\">
                            <div>
                                <h6 class=\"mb-0 fw-bold\">
                                    <i class=\"fas fa-receipt me-1 text-primary\"></i>
                                    {{ creditNote.creditNoteNumber }}
                                </h6>
                                <small class=\"text-muted\">
                                    <i class=\"fas fa-calendar-alt me-1\"></i>
                                    {{ creditNote.reportedAt|date('d/m/Y H:i') }}
                                </small>
                            </div>
                        </div>
                        <div class=\"dropdown\">
                            <button class=\"btn btn-sm btn-light\" type=\"button\" data-bs-toggle=\"dropdown\">
                                <i class=\"fas fa-ellipsis-v\"></i>
                            </button>
                            <ul class=\"dropdown-menu dropdown-menu-end shadow-sm\">
                                <li>
                                    <a class=\"dropdown-item\" href=\"{{ path('app_supplier_credit_note_show', {'id': creditNote.id}) }}\">
                                        <i class=\"fas fa-eye me-2 text-info\"></i> Voir le détail
                                    </a>
                                </li>
                                {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_MANAGER') %}
                                    {% if creditNote.status not in ['closed', 'recovered', 'lost'] %}
                                    <li>
                                        <button type=\"button\" class=\"dropdown-item text-warning resolve-btn\"
                                                data-id=\"{{ creditNote.id }}\"
                                                data-number=\"{{ creditNote.creditNoteNumber }}\">
                                            <i class=\"fas fa-check-circle me-2\"></i> Résoudre
                                        </button>
                                    </li>
                                    {% endif %}
                                {% endif %}
                            </ul>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"mb-3\">
                            <div class=\"d-flex justify-content-between mb-2\">
                                <span class=\"text-muted\">Fournisseur</span>
                                <span class=\"fw-bold\">{{ creditNote.supplier.name|u.truncate(25) }}</span>
                            </div>
                            <div class=\"d-flex justify-content-between mb-2\">
                                <span class=\"text-muted\">Lot</span>
                                <span class=\"fw-bold\">{{ creditNote.stockBatch.batchNumber }}</span>
                            </div>
                            <div class=\"d-flex justify-content-between mb-2\">
                                <span class=\"text-muted\">Produit</span>
                                <span>{{ creditNote.stockBatch.product.name|u.truncate(30) }}</span>
                            </div>
                            <div class=\"d-flex justify-content-between mb-2\">
                                <span class=\"text-muted\">Type</span>
                                <span class=\"badge bg-secondary\">{{ creditNote.issueTypeLabel }}</span>
                            </div>
                        </div>
                        <div class=\"row g-2 mb-3\">
                            <div class=\"col-6\">
                                <div class=\"amount-box text-center\">
                                    <small class=\"text-muted\">Déclaré</small>
                                    <div class=\"fw-bold text-danger\">
                                        {{ creditNote.declaredAmount|price_with_currency(creditNote.hmaService) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-6\">
                                <div class=\"amount-box text-center\">
                                    <small class=\"text-muted\">Récupéré</small>
                                    <div class=\"fw-bold text-success\">
                                        {{ (creditNote.recoveredAmount ?: 0)|price_with_currency(creditNote.hmaService) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"badge {{ creditNote.statusBadgeClass }}\">
                                    {{ creditNote.statusLabel }}
                                </span>
                                <span class=\"badge {{ creditNote.priorityBadgeClass }} ms-1\">
                                    {{ creditNote.priorityLabel }}
                                </span>
                            </div>
                            <div>
                                {% if creditNote.supplierResponse %}
                                    <span class=\"badge bg-info\" title=\"Réponse fournisseur reçue\">
                                        <i class=\"fas fa-reply-all me-1\"></i> Répondu
                                    </span>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                    <div class=\"card-footer bg-white py-2 d-flex justify-content-between\">
                        <small class=\"text-muted\">
                            <i class=\"fas fa-user me-1\"></i>
                            {{ creditNote.reportedBy.fullName|default(creditNote.reportedBy.email) }}
                        </small>
                        <small class=\"text-muted\">
                            <i class=\"fas fa-history me-1\"></i>
                            {{ creditNote.histories|length }} action(s)
                        </small>
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"col-12\">
                <div class=\"card border-0 shadow-sm text-center py-5\">
                    <i class=\"fas fa-file-invoice-dollar fa-4x text-muted mb-3 opacity-50\"></i>
                    <h5 class=\"text-muted\">Aucun avoir trouvé</h5>
                    <p class=\"text-muted small\">Modifiez vos filtres ou créez un nouvel avoir depuis la gestion des lots</p>
                </div>
            </div>
        {% endfor %}
    </div>

    {% if totalPages > 1 %}
    <nav class=\"mt-5\">
        <ul class=\"pagination justify-content-center\">
            {% if currentPage > 1 %}
                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"{{ path('app_supplier_credit_note_index', app.request.query.all|merge({'page': currentPage - 1})) }}\">
                        <i class=\"fas fa-chevron-left\"></i> Précédent
                    </a>
                </li>
            {% endif %}
            {% for page in 1..totalPages %}
                {% if page == currentPage or (page >= currentPage - 2 and page <= currentPage + 2) %}
                    <li class=\"page-item {{ page == currentPage ? 'active' : '' }}\">
                        <a class=\"page-link\" href=\"{{ path('app_supplier_credit_note_index', app.request.query.all|merge({'page': page})) }}\">{{ page }}</a>
                    </li>
                {% elseif page == currentPage - 3 or page == currentPage + 3 %}
                    <li class=\"page-item disabled\"><span class=\"page-link\">...</span></li>
                {% endif %}
            {% endfor %}
            {% if currentPage < totalPages %}
                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"{{ path('app_supplier_credit_note_index', app.request.query.all|merge({'page': currentPage + 1})) }}\">
                        Suivant <i class=\"fas fa-chevron-right\"></i>
                    </a>
                </li>
            {% endif %}
        </ul>
    </nav>
    {% endif %}
</div>

<div class=\"modal fade\" id=\"printOptionsModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-primary text-white\">
                <h5 class=\"modal-title\"><i class=\"fas fa-print me-2\"></i> Options d'impression</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"alert alert-info mb-3\">
                    <i class=\"fas fa-info-circle me-2\"></i>
                    <span id=\"selectedCount\">0</span> avoir(s) sélectionné(s) dans la liste
                </div>
                <div class=\"d-grid gap-2\">
                    <button type=\"button\" class=\"btn btn-primary\" id=\"print-selected\">
                        <i class=\"fas fa-print me-2\"></i> Imprimer la sélection
                    </button>
                    <button type=\"button\" class=\"btn btn-outline-primary\" id=\"print-all\">
                        <i class=\"fas fa-print me-2\"></i> Imprimer tous les avoirs
                    </button>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"resolveModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-warning\">
                <h5 class=\"modal-title\"><i class=\"fas fa-check-circle me-2\"></i> Résoudre l'avoir</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <form id=\"resolveForm\" method=\"post\" action=\"\">
                <div class=\"modal-body\">
                    <p>Êtes-vous sûr de vouloir résoudre l'avoir <strong id=\"resolveNumber\"></strong> ?</p>
                    <div class=\"mb-3\">
                        <label class=\"form-label fw-bold\">Nouveau statut</label>
                        <select name=\"status\" class=\"form-select\" required>
                            <option value=\"recovered\">Récupéré (remboursement total)</option>
                            <option value=\"partially_recovered\">Partiellement récupéré</option>
                            <option value=\"lost\">Perdu (aucun remboursement)</option>
                            <option value=\"closed\">Clôturé</option>
                        </select>
                    </div>
                    <div class=\"row\" id=\"amountFields\">
                        <div class=\"col-md-6 mb-3\">
                            <label class=\"form-label\">Montant récupéré (FCFA)</label>
                            <input type=\"number\" name=\"recovered_amount\" class=\"form-control\" step=\"100\" value=\"0\">
                        </div>
                        <div class=\"col-md-6 mb-3\">
                            <label class=\"form-label\">Montant perdu (FCFA)</label>
                            <input type=\"number\" name=\"lost_amount\" class=\"form-control\" step=\"100\" value=\"0\">
                        </div>
                    </div>
                    <div class=\"mb-3\">
                        <label class=\"form-label\">Notes de résolution</label>
                        <textarea name=\"resolution_notes\" class=\"form-control\" rows=\"3\"></textarea>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <input type=\"hidden\" name=\"_token\" id=\"resolveToken\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                    <button type=\"submit\" class=\"btn btn-warning\">Confirmer la résolution</button>
                </div>
            </form>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/fr.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    \$('#supplier-select').select2({
        theme: 'bootstrap-5',
        language: 'fr',
        placeholder: \"-- Tous les fournisseurs --\",
        allowClear: true,
        width: '100%'
    });

    const checkboxes = document.querySelectorAll('.batch-checkbox');
    const selectedCountSpan = document.getElementById('selectedCount');
    
    function updateSelectedCount() {
        const selected = document.querySelectorAll('.batch-checkbox:checked').length;
        if (selectedCountSpan) selectedCountSpan.textContent = selected;
    }
    
    checkboxes.forEach(cb => cb.addEventListener('change', updateSelectedCount));
    updateSelectedCount();
    
    document.getElementById('print-selected')?.addEventListener('click', function() {
        const selected = Array.from(document.querySelectorAll('.batch-checkbox:checked')).map(cb => cb.value);
        if (selected.length === 0) {
            alert('Veuillez sélectionner au moins un avoir.');
            return;
        }
        window.open('/admin/supplier-credit-note/print-multiple?ids=' + selected.join(','), '_blank');
        bootstrap.Modal.getInstance(document.getElementById('printOptionsModal'))?.hide();
    });
    
    document.getElementById('print-all')?.addEventListener('click', function() {
        const allIds = Array.from(document.querySelectorAll('.batch-checkbox')).map(cb => cb.value);
        if (allIds.length === 0) {
            alert('Aucun avoir à imprimer.');
            return;
        }
        window.open('/admin/supplier-credit-note/print-multiple?ids=' + allIds.join(','), '_blank');
        bootstrap.Modal.getInstance(document.getElementById('printOptionsModal'))?.hide();
    });
    
    const resolveModal = new bootstrap.Modal(document.getElementById('resolveModal'));
    const resolveForm = document.getElementById('resolveForm');
    const resolveNumber = document.getElementById('resolveNumber');
    const resolveToken = document.getElementById('resolveToken');
    
    document.querySelectorAll('.resolve-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const id = this.dataset.id;
            const number = this.dataset.number;
            resolveNumber.textContent = number;
            resolveForm.action = '/admin/supplier-credit-note/' + id + '/resolve';
            resolveToken.value = '{{ csrf_token(\"resolve\") }}';
            resolveModal.show();
        });
    });
    
    const statusSelect = document.querySelector('#resolveForm select[name=\"status\"]');
    const amountFields = document.getElementById('amountFields');
    
    if (statusSelect) {
        statusSelect.addEventListener('change', function() {
            if (this.value === 'closed' || this.value === 'lost') {
                amountFields.style.display = 'none';
                document.querySelector('#resolveForm input[name=\"recovered_amount\"]').value = 0;
                document.querySelector('#resolveForm input[name=\"lost_amount\"]').value = 0;
            } else {
                amountFields.style.display = 'flex';
            }
        });
    }
});
</script>
{% endblock %}", "supplier_credit_note/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\supplier_credit_note\\index.html.twig");
    }
}
