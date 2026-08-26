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
class __TwigTemplate_74c603a076bffb3da3664e1175d3f3b5 extends Template
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
    /* ========== STATS CARDS ========== */
    .stats-card {
        background: white;
        border: 1px solid #e5e7eb;
        border-radius: 16px;
        transition: transform 0.2s, box-shadow 0.2s;
        cursor: pointer;
        height: 100%;
    }
    .stats-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    }
    .stats-card .card-body {
        padding: 0.75rem;
    }
    @media (min-width: 768px) {
        .stats-card .card-body {
            padding: 1rem;
        }
    }
    
    /* ✅ Icônes en blanc avec fond coloré */
    .stats-card .icon-wrapper {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }
    @media (min-width: 768px) {
        .stats-card .icon-wrapper {
            width: 50px;
            height: 50px;
        }
    }
    .stats-card .icon-wrapper i {
        color: white !important;
        font-size: 1.1rem;
    }
    @media (min-width: 768px) {
        .stats-card .icon-wrapper i {
            font-size: 1.5rem;
        }
    }
    
    .icon-wrapper-warning { background: #f59e0b; }
    .icon-wrapper-primary { background: #0463f1; }
    .icon-wrapper-success { background: #10b981; }
    .icon-wrapper-danger { background: #dc2626; }
    .icon-wrapper-secondary { background: #6c757d; }
    .icon-wrapper-info { background: #0ea5e9; }
    
    .stats-card .text-warning { color: #f59e0b !important; }
    .stats-card .text-primary { color: #0463f1 !important; }
    .stats-card .text-success { color: #10b981 !important; }
    .stats-card .text-danger { color: #dc2626 !important; }
    
    /* ========== CREDIT CARDS ========== */
    .credit-card {
        transition: all 0.3s ease;
        border-radius: 16px;
        border-left: 4px solid;
        margin-bottom: 1rem;
        background: white;
        border: 1px solid #e5e7eb;
        border-left-width: 4px;
    }
    .credit-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }
    .credit-card.status-pending { border-left-color: #f59e0b; }
    .credit-card.status-acknowledged { border-left-color: #0ea5e9; }
    .credit-card.status-under_review { border-left-color: #0463f1; }
    .credit-card.status-recovered { border-left-color: #10b981; }
    .credit-card.status-lost { border-left-color: #dc2626; }
    .credit-card.status-closed { border-left-color: #6c757d; }
    .credit-card.status-partially_recovered { border-left-color: #fd7e14; }
    
    /* ========== BADGES ========== */
    .badge { font-weight: 500; padding: 0.2rem 0.5rem; font-size: 0.65rem; }
    @media (min-width: 768px) {
        .badge { padding: 0.25rem 0.65rem; font-size: 0.75rem; }
    }
    .badge i { margin-right: 3px; }
    
    .status-pending { background: #fef3c7; color: #d97706; }
    .status-acknowledged { background: #dbeafe; color: #2563eb; }
    .status-under_review { background: #e0f2fe; color: #0369a1; }
    .status-recovered { background: #dcfce7; color: #16a34a; }
    .status-lost { background: #fee2e2; color: #dc2626; }
    .status-closed { background: #f3f4f6; color: #4b5563; }
    .status-partially_recovered { background: #fef3c7; color: #d97706; }
    
    .priority-low { background: #d1d5db; color: #374151; }
    .priority-medium { background: #fef3c7; color: #d97706; }
    .priority-high { background: #fee2e2; color: #dc2626; }
    .priority-critical { background: #7f1d1d; color: white; }
    
    /* ========== FILTER SECTION ========== */
    .filter-section {
        background: white;
        border-radius: 16px;
        padding: 0.75rem;
        margin-bottom: 1rem;
        border: 1px solid #e5e7eb;
    }
    @media (min-width: 768px) {
        .filter-section {
            padding: 1rem;
            margin-bottom: 1.5rem;
        }
    }
    
    .select2-container--bootstrap-5 .select2-selection {
        border-radius: 8px;
        min-height: 38px;
        border-color: #dee2e6;
    }
    
    /* ========== AMOUNT BOX ========== */
    .amount-box {
        background-color: #f8f9fa;
        border-radius: 8px;
        padding: 0.3rem;
        transition: all 0.2s;
    }
    @media (min-width: 768px) {
        .amount-box {
            padding: 0.5rem;
        }
    }
    .amount-box:hover {
        background-color: #e9ecef;
    }
    
    /* ========== RESPONSIVE ========== */
    @media (max-width: 576px) {
        .container-fluid {
            padding-left: 8px !important;
            padding-right: 8px !important;
        }
        .card-header {
            padding: 0.5rem 0.75rem !important;
        }
        .card-body {
            padding: 0.5rem 0.75rem !important;
        }
        .card-footer {
            padding: 0.3rem 0.75rem !important;
        }
        .h1 {
            font-size: 1.3rem !important;
        }
        .h3 {
            font-size: 1.1rem !important;
        }
        .h6 {
            font-size: 0.7rem !important;
        }
        .btn {
            font-size: 0.65rem !important;
            padding: 0.2rem 0.5rem !important;
        }
        .btn i {
            font-size: 0.7rem !important;
        }
        .form-control, .form-select {
            font-size: 0.75rem !important;
            padding: 0.2rem 0.5rem !important;
        }
        .form-label {
            font-size: 0.65rem !important;
        }
        .modal-body {
            padding: 0.75rem !important;
        }
        .modal-footer {
            padding: 0.5rem !important;
        }
        .modal-header {
            padding: 0.5rem 0.75rem !important;
        }
        .pagination .page-link {
            padding: 0.15rem 0.3rem;
            font-size: 0.65rem;
        }
        .stats-card .card-body {
            padding: 0.5rem !important;
        }
        .stats-card .icon-wrapper {
            width: 32px;
            height: 32px;
        }
        .stats-card .icon-wrapper i {
            font-size: 0.9rem !important;
        }
        .stats-card h3 {
            font-size: 1.1rem !important;
        }
        .stats-card h6 {
            font-size: 0.6rem !important;
        }
        .credit-card .card-header {
            padding: 0.5rem 0.75rem !important;
        }
        .credit-card .card-body {
            padding: 0.5rem 0.75rem !important;
        }
        .badge {
            font-size: 0.55rem !important;
            padding: 0.15rem 0.4rem !important;
        }
        .amount-box .fw-bold {
            font-size: 0.8rem !important;
        }
        .amount-box small {
            font-size: 0.55rem !important;
        }
    }

    @media (max-width: 768px) {
        .btn-group {
            flex-direction: column;
        }
        .btn-group .btn {
            margin: 2px 0;
        }
    }

    /* Modal responsive */
    @media (max-width: 576px) {
        .modal-dialog {
            margin: 0.5rem;
        }
        .modal-content {
            border-radius: 12px !important;
        }
    }

    @media print {
        .no-print, .btn, .dropdown, .modal, .actions, .filters-card {
            display: none !important;
        }
        body { padding: 20px; font-size: 12px; }
        .card { box-shadow: none !important; border: 1px solid #ddd; }
        .credit-card { break-inside: avoid; page-break-inside: avoid; }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 265
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

        // line 266
        yield "<div class=\"container-fluid px-2 px-md-4 py-3 py-md-4\">
    <!-- ========== EN-TÊTE ========== -->
    <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center mb-3 mb-md-4 flex-wrap gap-2\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb mb-1\">
                    <li class=\"breadcrumb-item small\">
                        <a href=\"";
        // line 273
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Tableau de bord
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active small\">
                        <i class=\"fas fa-file-invoice-dollar me-1\"></i> Avoirs fournisseurs
                    </li>
                </ol>
            </nav>
            <h1 class=\"h4 h-md-2 mb-1\">
                <i class=\"fas fa-file-invoice-dollar text-primary me-2\"></i>
                Avoirs fournisseurs
            </h1>
            <p class=\"text-muted small d-none d-sm-block\">Gérez les problèmes signalés aux fournisseurs et suivez leur résolution</p>
        </div>
        <div class=\"actions-toolbar d-flex gap-1 gap-md-2 flex-wrap\">
            <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-outline-success btn-sm dropdown-toggle\" data-bs-toggle=\"dropdown\">
                    <i class=\"fas fa-file-excel me-1\"></i> <span class=\"d-none d-sm-inline\">Exporter</span>
                </button>
                <ul class=\"dropdown-menu dropdown-menu-end\">
                    <li>
                        <a class=\"dropdown-item small\" href=\"";
        // line 295
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_export_excel", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 295, $this->source); })()), "request", [], "any", false, false, false, 295), "query", [], "any", false, false, false, 295), "all", [], "any", false, false, false, 295)), "html", null, true);
        yield "\">
                            <i class=\"fas fa-file-excel me-2 text-success\"></i> Excel (.xlsx)
                        </a>
                    </li>
                    <li>
                        <a class=\"dropdown-item small\" href=\"";
        // line 300
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_export_pdf", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 300, $this->source); })()), "request", [], "any", false, false, false, 300), "query", [], "any", false, false, false, 300), "all", [], "any", false, false, false, 300)), "html", null, true);
        yield "\">
                            <i class=\"fas fa-file-pdf me-2 text-danger\"></i> PDF (.pdf)
                        </a>
                    </li>
                </ul>
            </div>
            <button type=\"button\" class=\"btn btn-primary btn-sm\" data-bs-toggle=\"modal\" data-bs-target=\"#printOptionsModal\">
                <i class=\"fas fa-print me-1 me-md-2\"></i> <span class=\"d-none d-sm-inline\">Imprimer</span>
            </button>
        </div>
    </div>

    <!-- ========== CARTES STATISTIQUES ========== -->
    <div class=\"mb-3 mb-md-4\">
        <div class=\"row g-2 g-md-3 mb-3\">
            <div class=\"col-6 col-md-3\">
                <div class=\"stats-card\">
                    <div class=\"card-body\">
                        <div class=\"d-flex justify-content-between align-items-start\">
                            <div>
                                <h6 class=\"text-muted mb-1 small\">Total avoirs</h6>
                                <h3 class=\"mb-0 text-primary fs-5 fs-md-4\">";
        // line 321
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total", [], "any", true, true, false, 321)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 321, $this->source); })()), "total", [], "any", false, false, false, 321), 0)) : (0)), "html", null, true);
        yield "</h3>
                            </div>
                            <div class=\"icon-wrapper icon-wrapper-primary\">
                                <i class=\"fas fa-file-invoice-dollar\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-6 col-md-3\">
                <div class=\"stats-card\">
                    <div class=\"card-body\">
                        <div class=\"d-flex justify-content-between align-items-start\">
                            <div>
                                <h6 class=\"text-muted mb-1 small\">En attente</h6>
                                <h3 class=\"mb-0 text-warning fs-5 fs-md-4\">";
        // line 336
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["statusCounts"] ?? null), "pending", [], "any", true, true, false, 336)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statusCounts"]) || array_key_exists("statusCounts", $context) ? $context["statusCounts"] : (function () { throw new RuntimeError('Variable "statusCounts" does not exist.', 336, $this->source); })()), "pending", [], "any", false, false, false, 336), 0)) : (0)), "html", null, true);
        yield "</h3>
                            </div>
                            <div class=\"icon-wrapper icon-wrapper-warning\">
                                <i class=\"fas fa-clock\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-6 col-md-3\">
                <div class=\"stats-card\">
                    <div class=\"card-body\">
                        <div class=\"d-flex justify-content-between align-items-start\">
                            <div>
                                <h6 class=\"text-muted mb-1 small\">En analyse</h6>
                                <h3 class=\"mb-0 text-info fs-5 fs-md-4\">";
        // line 351
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["statusCounts"] ?? null), "under_review", [], "any", true, true, false, 351)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statusCounts"]) || array_key_exists("statusCounts", $context) ? $context["statusCounts"] : (function () { throw new RuntimeError('Variable "statusCounts" does not exist.', 351, $this->source); })()), "under_review", [], "any", false, false, false, 351), 0)) : (0)), "html", null, true);
        yield "</h3>
                            </div>
                            <div class=\"icon-wrapper icon-wrapper-info\">
                                <i class=\"fas fa-exchange-alt\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-6 col-md-3\">
                <div class=\"stats-card\">
                    <div class=\"card-body\">
                        <div class=\"d-flex justify-content-between align-items-start\">
                            <div>
                                <h6 class=\"text-muted mb-1 small\">Perdus</h6>
                                <h3 class=\"mb-0 text-danger fs-5 fs-md-4\">";
        // line 366
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["statusCounts"] ?? null), "lost", [], "any", true, true, false, 366)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statusCounts"]) || array_key_exists("statusCounts", $context) ? $context["statusCounts"] : (function () { throw new RuntimeError('Variable "statusCounts" does not exist.', 366, $this->source); })()), "lost", [], "any", false, false, false, 366), 0)) : (0)), "html", null, true);
        yield "</h3>
                            </div>
                            <div class=\"icon-wrapper icon-wrapper-danger\">
                                <i class=\"fas fa-times-circle\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row g-2 g-md-3\">
            <div class=\"col-12\">
                <div class=\"stats-card\">
                    <div class=\"card-body\">
                        <div class=\"d-flex justify-content-between align-items-start\">
                            <div>
                                <h6 class=\"text-muted mb-1 small\">Montant total</h6>
                                <h3 class=\"mb-0 text-success fs-5 fs-md-4\">";
        // line 383
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_amount", [], "any", true, true, false, 383)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 383, $this->source); })()), "total_amount", [], "any", false, false, false, 383), 0)) : (0)), (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 383, $this->source); })())), "html", null, true);
        yield "</h3>
                            </div>
                            <div class=\"icon-wrapper icon-wrapper-success\">
                                <i class=\"fas fa-chart-line\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ========== FILTRES ========== -->
    <div class=\"filter-section\">
        <!-- ✅ En-tête des filtres avec boutons en haut à droite -->
        <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center flex-wrap gap-2 mb-2 mb-md-3 pb-2\" style=\"border-bottom: 2px dotted #e5e7eb;\">
            <div>
                <i class=\"fas fa-filter me-2 text-primary\"></i>
                <span class=\"fw-semibold small\">Filtres</span>
            </div>
            <!-- ✅ Boutons toujours à droite sur desktop et mobile -->
            <div class=\"d-flex gap-1 gap-md-2 ms-auto\">
                <a href=\"";
        // line 405
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_index");
        yield "\" class=\"btn btn-outline-secondary btn-sm\">
                    <i class=\"fas fa-undo me-1\"></i> <span class=\"d-none d-sm-inline\">Effacer</span>
                </a>
                <button type=\"submit\" form=\"filter-form\" class=\"btn btn-primary btn-sm\">
                    <i class=\"fas fa-search me-1\"></i> <span class=\"d-none d-sm-inline\">Filtrer</span>
                </button>
            </div>
        </div>
        
        <form method=\"get\" id=\"filter-form\">
            <div class=\"row g-2 g-md-3 align-items-end\">
                <div class=\"col-12 col-sm-6 col-md-3 col-lg-3\">
                    <label class=\"form-label fw-bold small\">🔍 Recherche</label>
                    <input type=\"text\" name=\"search\" class=\"form-control form-control-sm\" 
                        placeholder=\"N° avoir, lot, fournisseur...\" 
                        value=\"";
        // line 420
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("search", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 420, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\">
                </div>
                <div class=\"col-6 col-sm-6 col-md-2 col-lg-2\">
                    <label class=\"form-label fw-bold small\">📊 Statut</label>
                    <select name=\"status\" class=\"form-select form-select-sm\">
                        <option value=\"\">Tous</option>
                        ";
        // line 426
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["statusList"]) || array_key_exists("statusList", $context) ? $context["statusList"] : (function () { throw new RuntimeError('Variable "statusList" does not exist.', 426, $this->source); })()));
        foreach ($context['_seq'] as $context["statusKey"] => $context["statusLabel"]) {
            // line 427
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["statusKey"], "html", null, true);
            yield "\" ";
            yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 427, $this->source); })()) == $context["statusKey"])) ? ("selected") : (""));
            yield ">
                                ";
            // line 428
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["statusLabel"], "html", null, true);
            yield "
                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['statusKey'], $context['statusLabel'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 431
        yield "                    </select>
                </div>
                <div class=\"col-6 col-sm-6 col-md-2 col-lg-2\">
                    <label class=\"form-label fw-bold small\">⚠️ Priorité</label>
                    <select name=\"priority\" class=\"form-select form-select-sm\">
                        <option value=\"\">Toutes</option>
                        ";
        // line 437
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["priorityList"]) || array_key_exists("priorityList", $context) ? $context["priorityList"] : (function () { throw new RuntimeError('Variable "priorityList" does not exist.', 437, $this->source); })()));
        foreach ($context['_seq'] as $context["priorityKey"] => $context["priorityLabel"]) {
            // line 438
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["priorityKey"], "html", null, true);
            yield "\" ";
            yield ((((isset($context["priority"]) || array_key_exists("priority", $context) ? $context["priority"] : (function () { throw new RuntimeError('Variable "priority" does not exist.', 438, $this->source); })()) == $context["priorityKey"])) ? ("selected") : (""));
            yield ">
                                ";
            // line 439
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["priorityLabel"], "html", null, true);
            yield "
                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['priorityKey'], $context['priorityLabel'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 442
        yield "                    </select>
                </div>
                <div class=\"col-6 col-sm-6 col-md-2 col-lg-2\">
                    <label class=\"form-label fw-bold small\">📅 Date début</label>
                    <input type=\"date\" name=\"date_from\" class=\"form-control form-control-sm\" value=\"";
        // line 446
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("dateFrom", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["dateFrom"]) || array_key_exists("dateFrom", $context) ? $context["dateFrom"] : (function () { throw new RuntimeError('Variable "dateFrom" does not exist.', 446, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\">
                </div>
                <div class=\"col-6 col-sm-6 col-md-2 col-lg-2\">
                    <label class=\"form-label fw-bold small\">📅 Date fin</label>
                    <input type=\"date\" name=\"date_to\" class=\"form-control form-control-sm\" value=\"";
        // line 450
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("dateTo", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["dateTo"]) || array_key_exists("dateTo", $context) ? $context["dateTo"] : (function () { throw new RuntimeError('Variable "dateTo" does not exist.', 450, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\">
                </div>
                <div class=\"col-12 col-sm-6 col-md-1 col-lg-1 d-flex align-items-end gap-2\">
                    <button type=\"submit\" class=\"btn btn-primary w-100 py-1 py-md-2 btn-sm\" title=\"Filtrer\">
                        <i class=\"fas fa-search\"></i>
                    </button>
                    <a href=\"";
        // line 456
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_index");
        yield "\" class=\"btn btn-outline-secondary py-1 py-md-2 btn-sm\" title=\"Effacer\">
                        <i class=\"fas fa-undo\"></i>
                    </a>
                </div>
            </div>
            <div class=\"row g-2 g-md-3 mt-2 mt-md-3\">
                <div class=\"col-12 col-sm-6 col-md-4\">
                    <label class=\"form-label fw-bold small\">🏢 Fournisseur</label>
                    <select name=\"supplier_id\" id=\"supplier-select\" class=\"form-select form-select-sm select2\">
                        <option value=\"\">-- Tous les fournisseurs --</option>
                        ";
        // line 466
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["suppliers"]) || array_key_exists("suppliers", $context) ? $context["suppliers"] : (function () { throw new RuntimeError('Variable "suppliers" does not exist.', 466, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["supplier"]) {
            // line 467
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "id", [], "any", false, false, false, 467), "html", null, true);
            yield "\" ";
            yield ((((isset($context["selectedSupplier"]) || array_key_exists("selectedSupplier", $context) ? $context["selectedSupplier"] : (function () { throw new RuntimeError('Variable "selectedSupplier" does not exist.', 467, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "id", [], "any", false, false, false, 467))) ? ("selected") : (""));
            yield ">
                                ";
            // line 468
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "name", [], "any", false, false, false, 468)), "truncate", [25], "method", false, false, false, 468), "html", null, true);
            yield "
                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['supplier'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 471
        yield "                    </select>
                </div>
                <div class=\"col-6 col-sm-6 col-md-3\">
                    <label class=\"form-label fw-bold small\">Trier par</label>
                    <select name=\"sort\" class=\"form-select form-select-sm\">
                        <option value=\"created_at\" ";
        // line 476
        yield (((((array_key_exists("sort", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 476, $this->source); })()), "created_at")) : ("created_at")) == "created_at")) ? ("selected") : (""));
        yield ">Date création</option>
                        <option value=\"credit_note_number\" ";
        // line 477
        yield (((((array_key_exists("sort", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 477, $this->source); })()), "created_at")) : ("created_at")) == "credit_note_number")) ? ("selected") : (""));
        yield ">N° avoir</option>
                        <option value=\"reported_at\" ";
        // line 478
        yield (((((array_key_exists("sort", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 478, $this->source); })()), "created_at")) : ("created_at")) == "reported_at")) ? ("selected") : (""));
        yield ">Date signalement</option>
                        <option value=\"declared_amount\" ";
        // line 479
        yield (((((array_key_exists("sort", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 479, $this->source); })()), "created_at")) : ("created_at")) == "declared_amount")) ? ("selected") : (""));
        yield ">Montant</option>
                    </select>
                </div>
                <div class=\"col-6 col-sm-6 col-md-3\">
                    <label class=\"form-label fw-bold small\">Ordre</label>
                    <select name=\"direction\" class=\"form-select form-select-sm\">
                        <option value=\"desc\" ";
        // line 485
        yield (((((array_key_exists("direction", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 485, $this->source); })()), "desc")) : ("desc")) == "desc")) ? ("selected") : (""));
        yield ">↓ Décroissant</option>
                        <option value=\"asc\" ";
        // line 486
        yield (((((array_key_exists("direction", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 486, $this->source); })()), "desc")) : ("desc")) == "asc")) ? ("selected") : (""));
        yield ">↑ Croissant</option>
                    </select>
                </div>
                ";
        // line 490
        yield "                <div class=\"col-12 col-sm-6 col-md-2 d-flex align-items-end justify-content-end gap-2\">
                    <button type=\"submit\" class=\"btn btn-primary w-100 py-1 py-md-2 btn-sm\">
                        <i class=\"fas fa-search me-1\"></i> <span class=\"d-none d-sm-inline\">Filtrer</span>
                    </button>
                    <a href=\"";
        // line 494
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_index");
        yield "\" class=\"btn btn-outline-secondary py-1 py-md-2 btn-sm\" title=\"Effacer\">
                        <i class=\"fas fa-undo\"></i>
                    </a>
                </div>
            </div>
        </form>
    </div>

    <!-- ========== LISTE DES AVOIRS ========== -->
    <div class=\"row g-2 g-md-3 g-lg-4\">
        ";
        // line 504
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["creditNotes"]) || array_key_exists("creditNotes", $context) ? $context["creditNotes"] : (function () { throw new RuntimeError('Variable "creditNotes" does not exist.', 504, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["creditNote"]) {
            // line 505
            yield "            ";
            $context["statusClass"] = CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "status", [], "any", false, false, false, 505);
            // line 506
            yield "            <div class=\"col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4\">
                <div class=\"card credit-card status-";
            // line 507
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statusClass"]) || array_key_exists("statusClass", $context) ? $context["statusClass"] : (function () { throw new RuntimeError('Variable "statusClass" does not exist.', 507, $this->source); })()), "html", null, true);
            yield " border-0 shadow-sm h-100\">
                    <div class=\"card-header bg-white d-flex flex-wrap justify-content-between align-items-center gap-2\">
                        <div class=\"d-flex align-items-center gap-2\">
                            <input type=\"checkbox\" class=\"form-check-input batch-checkbox\" value=\"";
            // line 510
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "id", [], "any", false, false, false, 510), "html", null, true);
            yield "\" id=\"credit_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "id", [], "any", false, false, false, 510), "html", null, true);
            yield "\" style=\"width:14px;height:14px;\">
                            <div>
                                <h6 class=\"mb-0 fw-bold fs-6 fs-md-5\">
                                    <i class=\"fas fa-receipt me-1 text-primary\"></i>
                                    ";
            // line 514
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "creditNoteNumber", [], "any", false, false, false, 514), "html", null, true);
            yield "
                                </h6>
                                <small class=\"text-muted small\">
                                    <i class=\"fas fa-calendar-alt me-1\"></i>
                                    ";
            // line 518
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "reportedAt", [], "any", false, false, false, 518), "d/m/Y H:i"), "html", null, true);
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
                                    <a class=\"dropdown-item small\" href=\"";
            // line 528
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "id", [], "any", false, false, false, 528)]), "html", null, true);
            yield "\">
                                        <i class=\"fas fa-eye me-2 text-info\"></i> Voir le détail
                                    </a>
                                </li>
                                ";
            // line 532
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER"))) {
                // line 533
                yield "                                    ";
                if (!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "status", [], "any", false, false, false, 533), ["closed", "recovered", "lost"])) {
                    // line 534
                    yield "                                    <li>
                                        <button type=\"button\" class=\"dropdown-item text-warning small resolve-btn\"
                                                data-id=\"";
                    // line 536
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "id", [], "any", false, false, false, 536), "html", null, true);
                    yield "\"
                                                data-number=\"";
                    // line 537
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "creditNoteNumber", [], "any", false, false, false, 537), "html", null, true);
                    yield "\">
                                            <i class=\"fas fa-check-circle me-2\"></i> Résoudre
                                        </button>
                                    </li>
                                    ";
                }
                // line 542
                yield "                                ";
            }
            // line 543
            yield "                            </ul>
                        </div>
                    </div>
                    <div class=\"card-body pt-1 pt-md-2 px-2 px-md-3 pb-2 pb-md-3\">
                        <div class=\"mb-2 mb-md-3\">
                            <div class=\"d-flex flex-wrap justify-content-between mb-1 mb-md-2\">
                                <span class=\"text-muted small\">Fournisseur</span>
                                <span class=\"fw-bold small\">";
            // line 550
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "supplier", [], "any", false, false, false, 550), "name", [], "any", false, false, false, 550)), "truncate", [20], "method", false, false, false, 550), "html", null, true);
            yield "</span>
                            </div>
                            <div class=\"d-flex flex-wrap justify-content-between mb-1 mb-md-2\">
                                <span class=\"text-muted small\">Lot</span>
                                <span class=\"fw-bold small\">";
            // line 554
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "stockBatch", [], "any", false, false, false, 554), "batchNumber", [], "any", false, false, false, 554)), "truncate", [12], "method", false, false, false, 554), "html", null, true);
            yield "</span>
                            </div>
                            <div class=\"d-flex flex-wrap justify-content-between mb-1 mb-md-2\">
                                <span class=\"text-muted small\">Produit</span>
                                <span class=\"small\">";
            // line 558
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "stockBatch", [], "any", false, false, false, 558), "product", [], "any", false, false, false, 558), "name", [], "any", false, false, false, 558)), "truncate", [20], "method", false, false, false, 558), "html", null, true);
            yield "</span>
                            </div>
                            <div class=\"d-flex flex-wrap justify-content-between mb-1 mb-md-2\">
                                <span class=\"text-muted small\">Type</span>
                                <span class=\"badge bg-secondary\">";
            // line 562
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "issueTypeLabel", [], "any", false, false, false, 562), "html", null, true);
            yield "</span>
                            </div>
                        </div>
                        <div class=\"row g-1 g-md-2 mb-2 mb-md-3\">
                            <div class=\"col-6\">
                                <div class=\"amount-box text-center\">
                                    <small class=\"text-muted small\">Déclaré</small>
                                    <div class=\"fw-bold text-danger small\">
                                        ";
            // line 570
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "declaredAmount", [], "any", false, false, false, 570), CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "hmaService", [], "any", false, false, false, 570)), "html", null, true);
            yield "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-6\">
                                <div class=\"amount-box text-center\">
                                    <small class=\"text-muted small\">Récupéré</small>
                                    <div class=\"fw-bold text-success small\">
                                        ";
            // line 578
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(((CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "recoveredAmount", [], "any", false, false, false, 578)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "recoveredAmount", [], "any", false, false, false, 578)) : (0)), CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "hmaService", [], "any", false, false, false, 578)), "html", null, true);
            yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"d-flex flex-wrap justify-content-between align-items-center gap-1\">
                            <div class=\"d-flex flex-wrap gap-1\">
                                <span class=\"badge ";
            // line 585
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "statusBadgeClass", [], "any", false, false, false, 585), "html", null, true);
            yield "\">
                                    ";
            // line 586
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "statusLabel", [], "any", false, false, false, 586), "html", null, true);
            yield "
                                </span>
                                <span class=\"badge ";
            // line 588
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "priorityBadgeClass", [], "any", false, false, false, 588), "html", null, true);
            yield "\">
                                    ";
            // line 589
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "priorityLabel", [], "any", false, false, false, 589), "html", null, true);
            yield "
                                </span>
                            </div>
                            <div>
                                ";
            // line 593
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "supplierResponse", [], "any", false, false, false, 593)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 594
                yield "                                    <span class=\"badge bg-info small\" title=\"Réponse fournisseur reçue\">
                                        <i class=\"fas fa-reply-all me-1\"></i> Répondu
                                    </span>
                                ";
            }
            // line 598
            yield "                            </div>
                        </div>
                    </div>
                    <div class=\"card-footer bg-white py-1 py-md-2 d-flex flex-wrap justify-content-between\">
                        <small class=\"text-muted small\">
                            <i class=\"fas fa-user me-1\"></i>
                            ";
            // line 604
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "reportedBy", [], "any", false, true, false, 604), "fullName", [], "any", true, true, false, 604)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "reportedBy", [], "any", false, false, false, 604), "fullName", [], "any", false, false, false, 604), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "reportedBy", [], "any", false, false, false, 604), "email", [], "any", false, false, false, 604))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "reportedBy", [], "any", false, false, false, 604), "email", [], "any", false, false, false, 604)))), "truncate", [15], "method", false, false, false, 604), "html", null, true);
            yield "
                        </small>
                        <small class=\"text-muted small\">
                            <i class=\"fas fa-history me-1\"></i>
                            ";
            // line 608
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "histories", [], "any", false, false, false, 608)), "html", null, true);
            yield " action(s)
                        </small>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 613
        if (!$context['_iterated']) {
            // line 614
            yield "            <div class=\"col-12\">
                <div class=\"card border-0 shadow-sm text-center py-4 py-md-5\">
                    <i class=\"fas fa-file-invoice-dollar fa-3x fa-md-4 text-muted mb-3 opacity-50\"></i>
                    <h5 class=\"text-muted fs-6 fs-md-5\">Aucun avoir trouvé</h5>
                    <p class=\"text-muted small\">Modifiez vos filtres ou créez un nouvel avoir</p>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['creditNote'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 622
        yield "    </div>

    <!-- ========== PAGINATION ========== -->
    ";
        // line 625
        if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 625, $this->source); })()) > 1)) {
            // line 626
            yield "    <nav class=\"mt-4 mt-md-5\">
        <ul class=\"pagination pagination-sm justify-content-center mb-0\">
            ";
            // line 628
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 628, $this->source); })()) > 1)) {
                // line 629
                yield "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                // line 630
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 630, $this->source); })()), "request", [], "any", false, false, false, 630), "query", [], "any", false, false, false, 630), "all", [], "any", false, false, false, 630), ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 630, $this->source); })()) - 1)])), "html", null, true);
                yield "\">
                        <i class=\"fas fa-chevron-left\"></i> <span class=\"d-none d-sm-inline\">Précédent</span>
                    </a>
                </li>
            ";
            }
            // line 635
            yield "            ";
            $context["maxVisible"] = 5;
            // line 636
            yield "            ";
            $context["startPage"] = max(1, ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 636, $this->source); })()) - 2));
            // line 637
            yield "            ";
            $context["endPage"] = min((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 637, $this->source); })()), (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 637, $this->source); })()) + (isset($context["maxVisible"]) || array_key_exists("maxVisible", $context) ? $context["maxVisible"] : (function () { throw new RuntimeError('Variable "maxVisible" does not exist.', 637, $this->source); })())) - 1));
            // line 638
            yield "            ";
            if ((((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 638, $this->source); })()) - (isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 638, $this->source); })())) < ((isset($context["maxVisible"]) || array_key_exists("maxVisible", $context) ? $context["maxVisible"] : (function () { throw new RuntimeError('Variable "maxVisible" does not exist.', 638, $this->source); })()) - 1))) {
                // line 639
                yield "                ";
                $context["startPage"] = max(1, (((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 639, $this->source); })()) - (isset($context["maxVisible"]) || array_key_exists("maxVisible", $context) ? $context["maxVisible"] : (function () { throw new RuntimeError('Variable "maxVisible" does not exist.', 639, $this->source); })())) + 1));
                // line 640
                yield "            ";
            }
            // line 641
            yield "            
            ";
            // line 642
            if (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 642, $this->source); })()) > 1)) {
                // line 643
                yield "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                // line 644
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 644, $this->source); })()), "request", [], "any", false, false, false, 644), "query", [], "any", false, false, false, 644), "all", [], "any", false, false, false, 644), ["page" => 1])), "html", null, true);
                yield "\">1</a>
                </li>
                ";
                // line 646
                if (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 646, $this->source); })()) > 2)) {
                    // line 647
                    yield "                    <li class=\"page-item disabled\"><span class=\"page-link\">…</span></li>
                ";
                }
                // line 649
                yield "            ";
            }
            // line 650
            yield "            
            ";
            // line 651
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 651, $this->source); })()), (isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 651, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 652
                yield "                <li class=\"page-item ";
                yield ((($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 652, $this->source); })()))) ? ("active") : (""));
                yield "\">
                    <a class=\"page-link\" href=\"";
                // line 653
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 653, $this->source); })()), "request", [], "any", false, false, false, 653), "query", [], "any", false, false, false, 653), "all", [], "any", false, false, false, 653), ["page" => $context["page"]])), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                yield "</a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 656
            yield "            
            ";
            // line 657
            if (((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 657, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 657, $this->source); })()))) {
                // line 658
                yield "                ";
                if (((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 658, $this->source); })()) < ((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 658, $this->source); })()) - 1))) {
                    // line 659
                    yield "                    <li class=\"page-item disabled\"><span class=\"page-link\">…</span></li>
                ";
                }
                // line 661
                yield "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                // line 662
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 662, $this->source); })()), "request", [], "any", false, false, false, 662), "query", [], "any", false, false, false, 662), "all", [], "any", false, false, false, 662), ["page" => (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 662, $this->source); })())])), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 662, $this->source); })()), "html", null, true);
                yield "</a>
                </li>
            ";
            }
            // line 665
            yield "            
            ";
            // line 666
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 666, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 666, $this->source); })()))) {
                // line 667
                yield "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                // line 668
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 668, $this->source); })()), "request", [], "any", false, false, false, 668), "query", [], "any", false, false, false, 668), "all", [], "any", false, false, false, 668), ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 668, $this->source); })()) + 1)])), "html", null, true);
                yield "\">
                        <span class=\"d-none d-sm-inline\">Suivant</span> <i class=\"fas fa-chevron-right\"></i>
                    </a>
                </li>
            ";
            }
            // line 673
            yield "        </ul>
    </nav>
    ";
        }
        // line 676
        yield "</div>

<!-- ========== MODAL IMPRESSION ========== -->
<div class=\"modal fade\" id=\"printOptionsModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-primary text-white\">
                <h5 class=\"modal-title fs-6\"><i class=\"fas fa-print me-2\"></i> Options d'impression</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"alert alert-info mb-3 p-2 small\">
                    <i class=\"fas fa-info-circle me-2\"></i>
                    <span id=\"selectedCount\">0</span> avoir(s) sélectionné(s)
                </div>
                <div class=\"d-grid gap-2\">
                    <button type=\"button\" class=\"btn btn-primary btn-sm\" id=\"print-selected\">
                        <i class=\"fas fa-print me-2\"></i> Imprimer sélection
                    </button>
                    <button type=\"button\" class=\"btn btn-outline-primary btn-sm\" id=\"print-all\">
                        <i class=\"fas fa-print me-2\"></i> Imprimer tous
                    </button>
                </div>
            </div>
            <div class=\"modal-footer py-2\">
                <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-bs-dismiss=\"modal\">Fermer</button>
            </div>
        </div>
    </div>
</div>

<!-- ========== MODAL RÉSOLUTION ========== -->
<div class=\"modal fade\" id=\"resolveModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-warning\">
                <h5 class=\"modal-title fs-6\"><i class=\"fas fa-check-circle me-2\"></i> Résoudre l'avoir</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <form id=\"resolveForm\" method=\"post\" action=\"\">
                <div class=\"modal-body\">
                    <p class=\"small\">Résoudre l'avoir <strong id=\"resolveNumber\"></strong> ?</p>
                    <div class=\"mb-3\">
                        <label class=\"form-label fw-bold small\">Nouveau statut</label>
                        <select name=\"status\" class=\"form-select form-select-sm\" required>
                            <option value=\"recovered\">Récupéré (total)</option>
                            <option value=\"partially_recovered\">Partiellement récupéré</option>
                            <option value=\"lost\">Perdu (aucun remboursement)</option>
                            <option value=\"closed\">Clôturé</option>
                        </select>
                    </div>
                    <div class=\"row g-2\" id=\"amountFields\">
                        <div class=\"col-md-6 mb-2\">
                            <label class=\"form-label small\">Montant récupéré</label>
                            <input type=\"number\" name=\"recovered_amount\" class=\"form-control form-control-sm\" step=\"100\" value=\"0\">
                        </div>
                        <div class=\"col-md-6 mb-2\">
                            <label class=\"form-label small\">Montant perdu</label>
                            <input type=\"number\" name=\"lost_amount\" class=\"form-control form-control-sm\" step=\"100\" value=\"0\">
                        </div>
                    </div>
                    <div class=\"mb-3\">
                        <label class=\"form-label small\">Notes de résolution</label>
                        <textarea name=\"resolution_notes\" class=\"form-control form-control-sm\" rows=\"2\"></textarea>
                    </div>
                </div>
                <div class=\"modal-footer py-2\">
                    <input type=\"hidden\" name=\"_token\" id=\"resolveToken\">
                    <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-bs-dismiss=\"modal\">Annuler</button>
                    <button type=\"submit\" class=\"btn btn-warning btn-sm\">Confirmer</button>
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

    // line 753
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

        // line 754
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/fr.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Select2
    if (typeof \$ !== 'undefined' && \$.fn.select2) {
        \$('#supplier-select').select2({
            theme: 'bootstrap-5',
            language: 'fr',
            placeholder: \"-- Tous les fournisseurs --\",
            allowClear: true,
            width: '100%',
            dropdownAutoWidth: true
        });
    }

    // === GESTION DES CASES À COCHER ===
    const checkboxes = document.querySelectorAll('.batch-checkbox');
    const selectedCountSpan = document.getElementById('selectedCount');
    
    function updateSelectedCount() {
        const selected = document.querySelectorAll('.batch-checkbox:checked').length;
        if (selectedCountSpan) selectedCountSpan.textContent = selected;
    }
    
    checkboxes.forEach(cb => cb.addEventListener('change', updateSelectedCount));
    updateSelectedCount();
    
    // === IMPRESSION ===
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
    
    // === RÉSOLUTION ===
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
        // line 816
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("resolve"), "html", null, true);
        yield "';
            resolveModal.show();
        });
    });
    
    // === GESTION DES CHAMPS MONTANTS ===
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
        return array (  1237 => 816,  1172 => 754,  1159 => 753,  1073 => 676,  1068 => 673,  1060 => 668,  1057 => 667,  1055 => 666,  1052 => 665,  1044 => 662,  1041 => 661,  1037 => 659,  1034 => 658,  1032 => 657,  1029 => 656,  1018 => 653,  1013 => 652,  1009 => 651,  1006 => 650,  1003 => 649,  999 => 647,  997 => 646,  992 => 644,  989 => 643,  987 => 642,  984 => 641,  981 => 640,  978 => 639,  975 => 638,  972 => 637,  969 => 636,  966 => 635,  958 => 630,  955 => 629,  953 => 628,  949 => 626,  947 => 625,  942 => 622,  929 => 614,  927 => 613,  917 => 608,  910 => 604,  902 => 598,  896 => 594,  894 => 593,  887 => 589,  883 => 588,  878 => 586,  874 => 585,  864 => 578,  853 => 570,  842 => 562,  835 => 558,  828 => 554,  821 => 550,  812 => 543,  809 => 542,  801 => 537,  797 => 536,  793 => 534,  790 => 533,  788 => 532,  781 => 528,  768 => 518,  761 => 514,  752 => 510,  746 => 507,  743 => 506,  740 => 505,  735 => 504,  722 => 494,  716 => 490,  710 => 486,  706 => 485,  697 => 479,  693 => 478,  689 => 477,  685 => 476,  678 => 471,  669 => 468,  662 => 467,  658 => 466,  645 => 456,  636 => 450,  629 => 446,  623 => 442,  614 => 439,  607 => 438,  603 => 437,  595 => 431,  586 => 428,  579 => 427,  575 => 426,  566 => 420,  548 => 405,  523 => 383,  503 => 366,  485 => 351,  467 => 336,  449 => 321,  425 => 300,  417 => 295,  392 => 273,  383 => 266,  370 => 265,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
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
    /* ========== STATS CARDS ========== */
    .stats-card {
        background: white;
        border: 1px solid #e5e7eb;
        border-radius: 16px;
        transition: transform 0.2s, box-shadow 0.2s;
        cursor: pointer;
        height: 100%;
    }
    .stats-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    }
    .stats-card .card-body {
        padding: 0.75rem;
    }
    @media (min-width: 768px) {
        .stats-card .card-body {
            padding: 1rem;
        }
    }
    
    /* ✅ Icônes en blanc avec fond coloré */
    .stats-card .icon-wrapper {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }
    @media (min-width: 768px) {
        .stats-card .icon-wrapper {
            width: 50px;
            height: 50px;
        }
    }
    .stats-card .icon-wrapper i {
        color: white !important;
        font-size: 1.1rem;
    }
    @media (min-width: 768px) {
        .stats-card .icon-wrapper i {
            font-size: 1.5rem;
        }
    }
    
    .icon-wrapper-warning { background: #f59e0b; }
    .icon-wrapper-primary { background: #0463f1; }
    .icon-wrapper-success { background: #10b981; }
    .icon-wrapper-danger { background: #dc2626; }
    .icon-wrapper-secondary { background: #6c757d; }
    .icon-wrapper-info { background: #0ea5e9; }
    
    .stats-card .text-warning { color: #f59e0b !important; }
    .stats-card .text-primary { color: #0463f1 !important; }
    .stats-card .text-success { color: #10b981 !important; }
    .stats-card .text-danger { color: #dc2626 !important; }
    
    /* ========== CREDIT CARDS ========== */
    .credit-card {
        transition: all 0.3s ease;
        border-radius: 16px;
        border-left: 4px solid;
        margin-bottom: 1rem;
        background: white;
        border: 1px solid #e5e7eb;
        border-left-width: 4px;
    }
    .credit-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }
    .credit-card.status-pending { border-left-color: #f59e0b; }
    .credit-card.status-acknowledged { border-left-color: #0ea5e9; }
    .credit-card.status-under_review { border-left-color: #0463f1; }
    .credit-card.status-recovered { border-left-color: #10b981; }
    .credit-card.status-lost { border-left-color: #dc2626; }
    .credit-card.status-closed { border-left-color: #6c757d; }
    .credit-card.status-partially_recovered { border-left-color: #fd7e14; }
    
    /* ========== BADGES ========== */
    .badge { font-weight: 500; padding: 0.2rem 0.5rem; font-size: 0.65rem; }
    @media (min-width: 768px) {
        .badge { padding: 0.25rem 0.65rem; font-size: 0.75rem; }
    }
    .badge i { margin-right: 3px; }
    
    .status-pending { background: #fef3c7; color: #d97706; }
    .status-acknowledged { background: #dbeafe; color: #2563eb; }
    .status-under_review { background: #e0f2fe; color: #0369a1; }
    .status-recovered { background: #dcfce7; color: #16a34a; }
    .status-lost { background: #fee2e2; color: #dc2626; }
    .status-closed { background: #f3f4f6; color: #4b5563; }
    .status-partially_recovered { background: #fef3c7; color: #d97706; }
    
    .priority-low { background: #d1d5db; color: #374151; }
    .priority-medium { background: #fef3c7; color: #d97706; }
    .priority-high { background: #fee2e2; color: #dc2626; }
    .priority-critical { background: #7f1d1d; color: white; }
    
    /* ========== FILTER SECTION ========== */
    .filter-section {
        background: white;
        border-radius: 16px;
        padding: 0.75rem;
        margin-bottom: 1rem;
        border: 1px solid #e5e7eb;
    }
    @media (min-width: 768px) {
        .filter-section {
            padding: 1rem;
            margin-bottom: 1.5rem;
        }
    }
    
    .select2-container--bootstrap-5 .select2-selection {
        border-radius: 8px;
        min-height: 38px;
        border-color: #dee2e6;
    }
    
    /* ========== AMOUNT BOX ========== */
    .amount-box {
        background-color: #f8f9fa;
        border-radius: 8px;
        padding: 0.3rem;
        transition: all 0.2s;
    }
    @media (min-width: 768px) {
        .amount-box {
            padding: 0.5rem;
        }
    }
    .amount-box:hover {
        background-color: #e9ecef;
    }
    
    /* ========== RESPONSIVE ========== */
    @media (max-width: 576px) {
        .container-fluid {
            padding-left: 8px !important;
            padding-right: 8px !important;
        }
        .card-header {
            padding: 0.5rem 0.75rem !important;
        }
        .card-body {
            padding: 0.5rem 0.75rem !important;
        }
        .card-footer {
            padding: 0.3rem 0.75rem !important;
        }
        .h1 {
            font-size: 1.3rem !important;
        }
        .h3 {
            font-size: 1.1rem !important;
        }
        .h6 {
            font-size: 0.7rem !important;
        }
        .btn {
            font-size: 0.65rem !important;
            padding: 0.2rem 0.5rem !important;
        }
        .btn i {
            font-size: 0.7rem !important;
        }
        .form-control, .form-select {
            font-size: 0.75rem !important;
            padding: 0.2rem 0.5rem !important;
        }
        .form-label {
            font-size: 0.65rem !important;
        }
        .modal-body {
            padding: 0.75rem !important;
        }
        .modal-footer {
            padding: 0.5rem !important;
        }
        .modal-header {
            padding: 0.5rem 0.75rem !important;
        }
        .pagination .page-link {
            padding: 0.15rem 0.3rem;
            font-size: 0.65rem;
        }
        .stats-card .card-body {
            padding: 0.5rem !important;
        }
        .stats-card .icon-wrapper {
            width: 32px;
            height: 32px;
        }
        .stats-card .icon-wrapper i {
            font-size: 0.9rem !important;
        }
        .stats-card h3 {
            font-size: 1.1rem !important;
        }
        .stats-card h6 {
            font-size: 0.6rem !important;
        }
        .credit-card .card-header {
            padding: 0.5rem 0.75rem !important;
        }
        .credit-card .card-body {
            padding: 0.5rem 0.75rem !important;
        }
        .badge {
            font-size: 0.55rem !important;
            padding: 0.15rem 0.4rem !important;
        }
        .amount-box .fw-bold {
            font-size: 0.8rem !important;
        }
        .amount-box small {
            font-size: 0.55rem !important;
        }
    }

    @media (max-width: 768px) {
        .btn-group {
            flex-direction: column;
        }
        .btn-group .btn {
            margin: 2px 0;
        }
    }

    /* Modal responsive */
    @media (max-width: 576px) {
        .modal-dialog {
            margin: 0.5rem;
        }
        .modal-content {
            border-radius: 12px !important;
        }
    }

    @media print {
        .no-print, .btn, .dropdown, .modal, .actions, .filters-card {
            display: none !important;
        }
        body { padding: 20px; font-size: 12px; }
        .card { box-shadow: none !important; border: 1px solid #ddd; }
        .credit-card { break-inside: avoid; page-break-inside: avoid; }
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container-fluid px-2 px-md-4 py-3 py-md-4\">
    <!-- ========== EN-TÊTE ========== -->
    <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center mb-3 mb-md-4 flex-wrap gap-2\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb mb-1\">
                    <li class=\"breadcrumb-item small\">
                        <a href=\"{{ path('app_dashboard') }}\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Tableau de bord
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active small\">
                        <i class=\"fas fa-file-invoice-dollar me-1\"></i> Avoirs fournisseurs
                    </li>
                </ol>
            </nav>
            <h1 class=\"h4 h-md-2 mb-1\">
                <i class=\"fas fa-file-invoice-dollar text-primary me-2\"></i>
                Avoirs fournisseurs
            </h1>
            <p class=\"text-muted small d-none d-sm-block\">Gérez les problèmes signalés aux fournisseurs et suivez leur résolution</p>
        </div>
        <div class=\"actions-toolbar d-flex gap-1 gap-md-2 flex-wrap\">
            <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-outline-success btn-sm dropdown-toggle\" data-bs-toggle=\"dropdown\">
                    <i class=\"fas fa-file-excel me-1\"></i> <span class=\"d-none d-sm-inline\">Exporter</span>
                </button>
                <ul class=\"dropdown-menu dropdown-menu-end\">
                    <li>
                        <a class=\"dropdown-item small\" href=\"{{ path('app_supplier_credit_note_export_excel', app.request.query.all) }}\">
                            <i class=\"fas fa-file-excel me-2 text-success\"></i> Excel (.xlsx)
                        </a>
                    </li>
                    <li>
                        <a class=\"dropdown-item small\" href=\"{{ path('app_supplier_credit_note_export_pdf', app.request.query.all) }}\">
                            <i class=\"fas fa-file-pdf me-2 text-danger\"></i> PDF (.pdf)
                        </a>
                    </li>
                </ul>
            </div>
            <button type=\"button\" class=\"btn btn-primary btn-sm\" data-bs-toggle=\"modal\" data-bs-target=\"#printOptionsModal\">
                <i class=\"fas fa-print me-1 me-md-2\"></i> <span class=\"d-none d-sm-inline\">Imprimer</span>
            </button>
        </div>
    </div>

    <!-- ========== CARTES STATISTIQUES ========== -->
    <div class=\"mb-3 mb-md-4\">
        <div class=\"row g-2 g-md-3 mb-3\">
            <div class=\"col-6 col-md-3\">
                <div class=\"stats-card\">
                    <div class=\"card-body\">
                        <div class=\"d-flex justify-content-between align-items-start\">
                            <div>
                                <h6 class=\"text-muted mb-1 small\">Total avoirs</h6>
                                <h3 class=\"mb-0 text-primary fs-5 fs-md-4\">{{ stats.total|default(0) }}</h3>
                            </div>
                            <div class=\"icon-wrapper icon-wrapper-primary\">
                                <i class=\"fas fa-file-invoice-dollar\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-6 col-md-3\">
                <div class=\"stats-card\">
                    <div class=\"card-body\">
                        <div class=\"d-flex justify-content-between align-items-start\">
                            <div>
                                <h6 class=\"text-muted mb-1 small\">En attente</h6>
                                <h3 class=\"mb-0 text-warning fs-5 fs-md-4\">{{ statusCounts.pending|default(0) }}</h3>
                            </div>
                            <div class=\"icon-wrapper icon-wrapper-warning\">
                                <i class=\"fas fa-clock\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-6 col-md-3\">
                <div class=\"stats-card\">
                    <div class=\"card-body\">
                        <div class=\"d-flex justify-content-between align-items-start\">
                            <div>
                                <h6 class=\"text-muted mb-1 small\">En analyse</h6>
                                <h3 class=\"mb-0 text-info fs-5 fs-md-4\">{{ statusCounts.under_review|default(0) }}</h3>
                            </div>
                            <div class=\"icon-wrapper icon-wrapper-info\">
                                <i class=\"fas fa-exchange-alt\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-6 col-md-3\">
                <div class=\"stats-card\">
                    <div class=\"card-body\">
                        <div class=\"d-flex justify-content-between align-items-start\">
                            <div>
                                <h6 class=\"text-muted mb-1 small\">Perdus</h6>
                                <h3 class=\"mb-0 text-danger fs-5 fs-md-4\">{{ statusCounts.lost|default(0) }}</h3>
                            </div>
                            <div class=\"icon-wrapper icon-wrapper-danger\">
                                <i class=\"fas fa-times-circle\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row g-2 g-md-3\">
            <div class=\"col-12\">
                <div class=\"stats-card\">
                    <div class=\"card-body\">
                        <div class=\"d-flex justify-content-between align-items-start\">
                            <div>
                                <h6 class=\"text-muted mb-1 small\">Montant total</h6>
                                <h3 class=\"mb-0 text-success fs-5 fs-md-4\">{{ stats.total_amount|default(0)|price_with_currency(hmaService) }}</h3>
                            </div>
                            <div class=\"icon-wrapper icon-wrapper-success\">
                                <i class=\"fas fa-chart-line\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ========== FILTRES ========== -->
    <div class=\"filter-section\">
        <!-- ✅ En-tête des filtres avec boutons en haut à droite -->
        <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center flex-wrap gap-2 mb-2 mb-md-3 pb-2\" style=\"border-bottom: 2px dotted #e5e7eb;\">
            <div>
                <i class=\"fas fa-filter me-2 text-primary\"></i>
                <span class=\"fw-semibold small\">Filtres</span>
            </div>
            <!-- ✅ Boutons toujours à droite sur desktop et mobile -->
            <div class=\"d-flex gap-1 gap-md-2 ms-auto\">
                <a href=\"{{ path('app_supplier_credit_note_index') }}\" class=\"btn btn-outline-secondary btn-sm\">
                    <i class=\"fas fa-undo me-1\"></i> <span class=\"d-none d-sm-inline\">Effacer</span>
                </a>
                <button type=\"submit\" form=\"filter-form\" class=\"btn btn-primary btn-sm\">
                    <i class=\"fas fa-search me-1\"></i> <span class=\"d-none d-sm-inline\">Filtrer</span>
                </button>
            </div>
        </div>
        
        <form method=\"get\" id=\"filter-form\">
            <div class=\"row g-2 g-md-3 align-items-end\">
                <div class=\"col-12 col-sm-6 col-md-3 col-lg-3\">
                    <label class=\"form-label fw-bold small\">🔍 Recherche</label>
                    <input type=\"text\" name=\"search\" class=\"form-control form-control-sm\" 
                        placeholder=\"N° avoir, lot, fournisseur...\" 
                        value=\"{{ search|default('') }}\">
                </div>
                <div class=\"col-6 col-sm-6 col-md-2 col-lg-2\">
                    <label class=\"form-label fw-bold small\">📊 Statut</label>
                    <select name=\"status\" class=\"form-select form-select-sm\">
                        <option value=\"\">Tous</option>
                        {% for statusKey, statusLabel in statusList %}
                            <option value=\"{{ statusKey }}\" {{ status == statusKey ? 'selected' }}>
                                {{ statusLabel }}
                            </option>
                        {% endfor %}
                    </select>
                </div>
                <div class=\"col-6 col-sm-6 col-md-2 col-lg-2\">
                    <label class=\"form-label fw-bold small\">⚠️ Priorité</label>
                    <select name=\"priority\" class=\"form-select form-select-sm\">
                        <option value=\"\">Toutes</option>
                        {% for priorityKey, priorityLabel in priorityList %}
                            <option value=\"{{ priorityKey }}\" {{ priority == priorityKey ? 'selected' }}>
                                {{ priorityLabel }}
                            </option>
                        {% endfor %}
                    </select>
                </div>
                <div class=\"col-6 col-sm-6 col-md-2 col-lg-2\">
                    <label class=\"form-label fw-bold small\">📅 Date début</label>
                    <input type=\"date\" name=\"date_from\" class=\"form-control form-control-sm\" value=\"{{ dateFrom|default('') }}\">
                </div>
                <div class=\"col-6 col-sm-6 col-md-2 col-lg-2\">
                    <label class=\"form-label fw-bold small\">📅 Date fin</label>
                    <input type=\"date\" name=\"date_to\" class=\"form-control form-control-sm\" value=\"{{ dateTo|default('') }}\">
                </div>
                <div class=\"col-12 col-sm-6 col-md-1 col-lg-1 d-flex align-items-end gap-2\">
                    <button type=\"submit\" class=\"btn btn-primary w-100 py-1 py-md-2 btn-sm\" title=\"Filtrer\">
                        <i class=\"fas fa-search\"></i>
                    </button>
                    <a href=\"{{ path('app_supplier_credit_note_index') }}\" class=\"btn btn-outline-secondary py-1 py-md-2 btn-sm\" title=\"Effacer\">
                        <i class=\"fas fa-undo\"></i>
                    </a>
                </div>
            </div>
            <div class=\"row g-2 g-md-3 mt-2 mt-md-3\">
                <div class=\"col-12 col-sm-6 col-md-4\">
                    <label class=\"form-label fw-bold small\">🏢 Fournisseur</label>
                    <select name=\"supplier_id\" id=\"supplier-select\" class=\"form-select form-select-sm select2\">
                        <option value=\"\">-- Tous les fournisseurs --</option>
                        {% for supplier in suppliers %}
                            <option value=\"{{ supplier.id }}\" {{ selectedSupplier == supplier.id ? 'selected' }}>
                                {{ supplier.name|u.truncate(25) }}
                            </option>
                        {% endfor %}
                    </select>
                </div>
                <div class=\"col-6 col-sm-6 col-md-3\">
                    <label class=\"form-label fw-bold small\">Trier par</label>
                    <select name=\"sort\" class=\"form-select form-select-sm\">
                        <option value=\"created_at\" {{ sort|default('created_at') == 'created_at' ? 'selected' }}>Date création</option>
                        <option value=\"credit_note_number\" {{ sort|default('created_at') == 'credit_note_number' ? 'selected' }}>N° avoir</option>
                        <option value=\"reported_at\" {{ sort|default('created_at') == 'reported_at' ? 'selected' }}>Date signalement</option>
                        <option value=\"declared_amount\" {{ sort|default('created_at') == 'declared_amount' ? 'selected' }}>Montant</option>
                    </select>
                </div>
                <div class=\"col-6 col-sm-6 col-md-3\">
                    <label class=\"form-label fw-bold small\">Ordre</label>
                    <select name=\"direction\" class=\"form-select form-select-sm\">
                        <option value=\"desc\" {{ direction|default('desc') == 'desc' ? 'selected' }}>↓ Décroissant</option>
                        <option value=\"asc\" {{ direction|default('desc') == 'asc' ? 'selected' }}>↑ Croissant</option>
                    </select>
                </div>
                {# ✅ Boutons d'action alignés à droite - deuxième ligne #}
                <div class=\"col-12 col-sm-6 col-md-2 d-flex align-items-end justify-content-end gap-2\">
                    <button type=\"submit\" class=\"btn btn-primary w-100 py-1 py-md-2 btn-sm\">
                        <i class=\"fas fa-search me-1\"></i> <span class=\"d-none d-sm-inline\">Filtrer</span>
                    </button>
                    <a href=\"{{ path('app_supplier_credit_note_index') }}\" class=\"btn btn-outline-secondary py-1 py-md-2 btn-sm\" title=\"Effacer\">
                        <i class=\"fas fa-undo\"></i>
                    </a>
                </div>
            </div>
        </form>
    </div>

    <!-- ========== LISTE DES AVOIRS ========== -->
    <div class=\"row g-2 g-md-3 g-lg-4\">
        {% for creditNote in creditNotes %}
            {% set statusClass = creditNote.status %}
            <div class=\"col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4\">
                <div class=\"card credit-card status-{{ statusClass }} border-0 shadow-sm h-100\">
                    <div class=\"card-header bg-white d-flex flex-wrap justify-content-between align-items-center gap-2\">
                        <div class=\"d-flex align-items-center gap-2\">
                            <input type=\"checkbox\" class=\"form-check-input batch-checkbox\" value=\"{{ creditNote.id }}\" id=\"credit_{{ creditNote.id }}\" style=\"width:14px;height:14px;\">
                            <div>
                                <h6 class=\"mb-0 fw-bold fs-6 fs-md-5\">
                                    <i class=\"fas fa-receipt me-1 text-primary\"></i>
                                    {{ creditNote.creditNoteNumber }}
                                </h6>
                                <small class=\"text-muted small\">
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
                                    <a class=\"dropdown-item small\" href=\"{{ path('app_supplier_credit_note_show', {'id': creditNote.id}) }}\">
                                        <i class=\"fas fa-eye me-2 text-info\"></i> Voir le détail
                                    </a>
                                </li>
                                {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_MANAGER') %}
                                    {% if creditNote.status not in ['closed', 'recovered', 'lost'] %}
                                    <li>
                                        <button type=\"button\" class=\"dropdown-item text-warning small resolve-btn\"
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
                    <div class=\"card-body pt-1 pt-md-2 px-2 px-md-3 pb-2 pb-md-3\">
                        <div class=\"mb-2 mb-md-3\">
                            <div class=\"d-flex flex-wrap justify-content-between mb-1 mb-md-2\">
                                <span class=\"text-muted small\">Fournisseur</span>
                                <span class=\"fw-bold small\">{{ creditNote.supplier.name|u.truncate(20) }}</span>
                            </div>
                            <div class=\"d-flex flex-wrap justify-content-between mb-1 mb-md-2\">
                                <span class=\"text-muted small\">Lot</span>
                                <span class=\"fw-bold small\">{{ creditNote.stockBatch.batchNumber|u.truncate(12) }}</span>
                            </div>
                            <div class=\"d-flex flex-wrap justify-content-between mb-1 mb-md-2\">
                                <span class=\"text-muted small\">Produit</span>
                                <span class=\"small\">{{ creditNote.stockBatch.product.name|u.truncate(20) }}</span>
                            </div>
                            <div class=\"d-flex flex-wrap justify-content-between mb-1 mb-md-2\">
                                <span class=\"text-muted small\">Type</span>
                                <span class=\"badge bg-secondary\">{{ creditNote.issueTypeLabel }}</span>
                            </div>
                        </div>
                        <div class=\"row g-1 g-md-2 mb-2 mb-md-3\">
                            <div class=\"col-6\">
                                <div class=\"amount-box text-center\">
                                    <small class=\"text-muted small\">Déclaré</small>
                                    <div class=\"fw-bold text-danger small\">
                                        {{ creditNote.declaredAmount|price_with_currency(creditNote.hmaService) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-6\">
                                <div class=\"amount-box text-center\">
                                    <small class=\"text-muted small\">Récupéré</small>
                                    <div class=\"fw-bold text-success small\">
                                        {{ (creditNote.recoveredAmount ?: 0)|price_with_currency(creditNote.hmaService) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"d-flex flex-wrap justify-content-between align-items-center gap-1\">
                            <div class=\"d-flex flex-wrap gap-1\">
                                <span class=\"badge {{ creditNote.statusBadgeClass }}\">
                                    {{ creditNote.statusLabel }}
                                </span>
                                <span class=\"badge {{ creditNote.priorityBadgeClass }}\">
                                    {{ creditNote.priorityLabel }}
                                </span>
                            </div>
                            <div>
                                {% if creditNote.supplierResponse %}
                                    <span class=\"badge bg-info small\" title=\"Réponse fournisseur reçue\">
                                        <i class=\"fas fa-reply-all me-1\"></i> Répondu
                                    </span>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                    <div class=\"card-footer bg-white py-1 py-md-2 d-flex flex-wrap justify-content-between\">
                        <small class=\"text-muted small\">
                            <i class=\"fas fa-user me-1\"></i>
                            {{ creditNote.reportedBy.fullName|default(creditNote.reportedBy.email)|u.truncate(15) }}
                        </small>
                        <small class=\"text-muted small\">
                            <i class=\"fas fa-history me-1\"></i>
                            {{ creditNote.histories|length }} action(s)
                        </small>
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"col-12\">
                <div class=\"card border-0 shadow-sm text-center py-4 py-md-5\">
                    <i class=\"fas fa-file-invoice-dollar fa-3x fa-md-4 text-muted mb-3 opacity-50\"></i>
                    <h5 class=\"text-muted fs-6 fs-md-5\">Aucun avoir trouvé</h5>
                    <p class=\"text-muted small\">Modifiez vos filtres ou créez un nouvel avoir</p>
                </div>
            </div>
        {% endfor %}
    </div>

    <!-- ========== PAGINATION ========== -->
    {% if totalPages > 1 %}
    <nav class=\"mt-4 mt-md-5\">
        <ul class=\"pagination pagination-sm justify-content-center mb-0\">
            {% if currentPage > 1 %}
                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"{{ path('app_supplier_credit_note_index', app.request.query.all|merge({'page': currentPage - 1})) }}\">
                        <i class=\"fas fa-chevron-left\"></i> <span class=\"d-none d-sm-inline\">Précédent</span>
                    </a>
                </li>
            {% endif %}
            {% set maxVisible = 5 %}
            {% set startPage = max(1, currentPage - 2) %}
            {% set endPage = min(totalPages, startPage + maxVisible - 1) %}
            {% if endPage - startPage < maxVisible - 1 %}
                {% set startPage = max(1, endPage - maxVisible + 1) %}
            {% endif %}
            
            {% if startPage > 1 %}
                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"{{ path('app_supplier_credit_note_index', app.request.query.all|merge({'page': 1})) }}\">1</a>
                </li>
                {% if startPage > 2 %}
                    <li class=\"page-item disabled\"><span class=\"page-link\">…</span></li>
                {% endif %}
            {% endif %}
            
            {% for page in startPage..endPage %}
                <li class=\"page-item {{ page == currentPage ? 'active' : '' }}\">
                    <a class=\"page-link\" href=\"{{ path('app_supplier_credit_note_index', app.request.query.all|merge({'page': page})) }}\">{{ page }}</a>
                </li>
            {% endfor %}
            
            {% if endPage < totalPages %}
                {% if endPage < totalPages - 1 %}
                    <li class=\"page-item disabled\"><span class=\"page-link\">…</span></li>
                {% endif %}
                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"{{ path('app_supplier_credit_note_index', app.request.query.all|merge({'page': totalPages})) }}\">{{ totalPages }}</a>
                </li>
            {% endif %}
            
            {% if currentPage < totalPages %}
                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"{{ path('app_supplier_credit_note_index', app.request.query.all|merge({'page': currentPage + 1})) }}\">
                        <span class=\"d-none d-sm-inline\">Suivant</span> <i class=\"fas fa-chevron-right\"></i>
                    </a>
                </li>
            {% endif %}
        </ul>
    </nav>
    {% endif %}
</div>

<!-- ========== MODAL IMPRESSION ========== -->
<div class=\"modal fade\" id=\"printOptionsModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-primary text-white\">
                <h5 class=\"modal-title fs-6\"><i class=\"fas fa-print me-2\"></i> Options d'impression</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"alert alert-info mb-3 p-2 small\">
                    <i class=\"fas fa-info-circle me-2\"></i>
                    <span id=\"selectedCount\">0</span> avoir(s) sélectionné(s)
                </div>
                <div class=\"d-grid gap-2\">
                    <button type=\"button\" class=\"btn btn-primary btn-sm\" id=\"print-selected\">
                        <i class=\"fas fa-print me-2\"></i> Imprimer sélection
                    </button>
                    <button type=\"button\" class=\"btn btn-outline-primary btn-sm\" id=\"print-all\">
                        <i class=\"fas fa-print me-2\"></i> Imprimer tous
                    </button>
                </div>
            </div>
            <div class=\"modal-footer py-2\">
                <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-bs-dismiss=\"modal\">Fermer</button>
            </div>
        </div>
    </div>
</div>

<!-- ========== MODAL RÉSOLUTION ========== -->
<div class=\"modal fade\" id=\"resolveModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-warning\">
                <h5 class=\"modal-title fs-6\"><i class=\"fas fa-check-circle me-2\"></i> Résoudre l'avoir</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <form id=\"resolveForm\" method=\"post\" action=\"\">
                <div class=\"modal-body\">
                    <p class=\"small\">Résoudre l'avoir <strong id=\"resolveNumber\"></strong> ?</p>
                    <div class=\"mb-3\">
                        <label class=\"form-label fw-bold small\">Nouveau statut</label>
                        <select name=\"status\" class=\"form-select form-select-sm\" required>
                            <option value=\"recovered\">Récupéré (total)</option>
                            <option value=\"partially_recovered\">Partiellement récupéré</option>
                            <option value=\"lost\">Perdu (aucun remboursement)</option>
                            <option value=\"closed\">Clôturé</option>
                        </select>
                    </div>
                    <div class=\"row g-2\" id=\"amountFields\">
                        <div class=\"col-md-6 mb-2\">
                            <label class=\"form-label small\">Montant récupéré</label>
                            <input type=\"number\" name=\"recovered_amount\" class=\"form-control form-control-sm\" step=\"100\" value=\"0\">
                        </div>
                        <div class=\"col-md-6 mb-2\">
                            <label class=\"form-label small\">Montant perdu</label>
                            <input type=\"number\" name=\"lost_amount\" class=\"form-control form-control-sm\" step=\"100\" value=\"0\">
                        </div>
                    </div>
                    <div class=\"mb-3\">
                        <label class=\"form-label small\">Notes de résolution</label>
                        <textarea name=\"resolution_notes\" class=\"form-control form-control-sm\" rows=\"2\"></textarea>
                    </div>
                </div>
                <div class=\"modal-footer py-2\">
                    <input type=\"hidden\" name=\"_token\" id=\"resolveToken\">
                    <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-bs-dismiss=\"modal\">Annuler</button>
                    <button type=\"submit\" class=\"btn btn-warning btn-sm\">Confirmer</button>
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
    // Select2
    if (typeof \$ !== 'undefined' && \$.fn.select2) {
        \$('#supplier-select').select2({
            theme: 'bootstrap-5',
            language: 'fr',
            placeholder: \"-- Tous les fournisseurs --\",
            allowClear: true,
            width: '100%',
            dropdownAutoWidth: true
        });
    }

    // === GESTION DES CASES À COCHER ===
    const checkboxes = document.querySelectorAll('.batch-checkbox');
    const selectedCountSpan = document.getElementById('selectedCount');
    
    function updateSelectedCount() {
        const selected = document.querySelectorAll('.batch-checkbox:checked').length;
        if (selectedCountSpan) selectedCountSpan.textContent = selected;
    }
    
    checkboxes.forEach(cb => cb.addEventListener('change', updateSelectedCount));
    updateSelectedCount();
    
    // === IMPRESSION ===
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
    
    // === RÉSOLUTION ===
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
    
    // === GESTION DES CHAMPS MONTANTS ===
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
