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

/* return/index.html.twig */
class __TwigTemplate_e97e785a9c75d79bea5ec3b77c8e9ece extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "return/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "return/index.html.twig"));

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

        yield "Retours & Avoirs";
        
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
    
    .status-badge {
        padding: 0.2rem 0.5rem;
        border-radius: 20px;
        font-size: 0.65rem;
        font-weight: 600;
        display: inline-block;
    }
    @media (min-width: 768px) {
        .status-badge {
            padding: 0.25rem 0.75rem;
            font-size: 0.75rem;
        }
    }
    .status-pending { background: #fef3c7; color: #d97706; }
    .status-approved { background: #dbeafe; color: #2563eb; }
    .status-completed { background: #dcfce7; color: #16a34a; }
    .status-rejected { background: #fee2e2; color: #dc2626; }
    
    .reason-badge {
        background: #f3f4f6;
        color: #4b5563;
        padding: 0.15rem 0.5rem;
        border-radius: 20px;
        font-size: 0.65rem;
        font-weight: 500;
        display: inline-block;
        white-space: normal;
        word-break: break-word;
        max-width: 100px;
        line-height: 1.2;
    }
    @media (min-width: 768px) {
        .reason-badge {
            padding: 0.25rem 0.75rem;
            font-size: 0.75rem;
            max-width: 150px;
        }
    }
    
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
    .return-row {
        cursor: pointer;
        transition: background 0.2s;
    }
    .return-row:hover {
        background-color: #f8f9fa;
    }
    .select2-container--bootstrap-5 .select2-selection {
        border-radius: 8px;
        min-height: 38px;
    }
    .order-result-item {
        transition: background 0.2s;
        border-left: 3px solid transparent;
    }
    .order-result-item:hover {
        background-color: #f8fafc;
    }
    .order-result-item.has-return {
        border-left-color: #f59e0b;
        background-color: #fffbeb;
    }
    .order-result-item.has-return:hover {
        background-color: #fef3c7;
    }
    
    .quick-filter-btn {
        transition: all 0.2s;
    }
    .quick-filter-btn:hover {
        transform: translateY(-2px);
    }
    .quick-filter-btn.active {
        background-color: #0463f1;
        color: white;
        border-color: #0463f1;
    }
    
    .confirm-modal-icon {
        width: 60px;
        height: 60px;
        background: #e8f4fd;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1rem;
    }
    @media (min-width: 768px) {
        .confirm-modal-icon {
            width: 70px;
            height: 70px;
        }
    }
    .confirm-modal-icon i {
        font-size: 1.5rem;
        color: #0463f1;
    }
    @media (min-width: 768px) {
        .confirm-modal-icon i {
            font-size: 2rem;
        }
    }
    .confirm-modal-icon.warning {
        background: #fef3c7;
    }
    .confirm-modal-icon.warning i {
        color: #f59e0b;
    }
    .confirm-modal-icon.danger {
        background: #fee2e2;
    }
    .confirm-modal-icon.danger i {
        color: #dc2626;
    }
    .confirm-modal-icon.success {
        background: #dcfce7;
    }
    .confirm-modal-icon.success i {
        color: #16a34a;
    }

    .returns-table {
        min-width: 800px;
    }
    @media (min-width: 1200px) {
        .returns-table {
            min-width: 1000px;
        }
    }
    .returns-table th,
    .returns-table td {
        vertical-align: middle;
        padding: 0.4rem 0.4rem;
        font-size: 0.75rem;
    }
    @media (min-width: 768px) {
        .returns-table th,
        .returns-table td {
            padding: 0.6rem 0.75rem;
            font-size: 0.85rem;
        }
    }

    .customer-info {
        white-space: normal;
        word-break: break-word;
    }
    .customer-name {
        font-weight: 500;
        margin-bottom: 0.25rem;
        font-size: 0.75rem;
    }
    @media (min-width: 768px) {
        .customer-name {
            font-size: 0.9rem;
        }
    }
    .customer-phone {
        font-size: 0.6rem;
        color: #6c757d;
    }
    @media (min-width: 768px) {
        .customer-phone {
            font-size: 0.7rem;
        }
    }
    .customer-phone i {
        font-size: 0.55rem;
    }
    @media (min-width: 768px) {
        .customer-phone i {
            font-size: 0.65rem;
        }
    }

    .btn-group {
        display: flex;
        gap: 0.15rem;
        flex-wrap: wrap;
    }
    @media (min-width: 768px) {
        .btn-group {
            gap: 0.25rem;
        }
    }
    .btn-group .btn {
        padding: 0.15rem 0.3rem;
        font-size: 0.6rem;
    }
    @media (min-width: 768px) {
        .btn-group .btn {
            padding: 0.25rem 0.5rem;
            font-size: 0.75rem;
        }
    }
    .btn-group .btn i {
        font-size: 0.7rem;
    }
    @media (min-width: 768px) {
        .btn-group .btn i {
            font-size: 0.9rem;
        }
    }
    
    .checkbox-col {
        cursor: pointer;
    }
    .select-all-checkbox, .return-checkbox {
        width: 14px;
        height: 14px;
        cursor: pointer;
    }
    @media (min-width: 768px) {
        .select-all-checkbox, .return-checkbox {
            width: 18px;
            height: 18px;
        }
    }

    .returns-table td,
    .returns-table th {
        white-space: nowrap;
    }
    .returns-table .customer-info {
        white-space: normal;
        min-width: 120px;
        max-width: 150px;
    }
    @media (min-width: 768px) {
        .returns-table .customer-info {
            min-width: 180px;
            max-width: 200px;
        }
    }
    .returns-table .reason-badge {
        white-space: normal;
        max-width: 80px;
    }
    @media (min-width: 768px) {
        .returns-table .reason-badge {
            max-width: 150px;
        }
    }
    
    .actions-toolbar {
        display: flex;
        gap: 6px;
        align-items: center;
        flex-wrap: wrap;
    }
    @media (min-width: 768px) {
        .actions-toolbar {
            gap: 10px;
        }
    }

    /* Responsive container */
    @media (max-width: 576px) {
        .container-fluid {
            padding-left: 8px !important;
            padding-right: 8px !important;
        }
        .card-body {
            padding: 0.5rem !important;
        }
        .h2 {
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
    }

    @media (max-width: 576px) {
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

    /* Pagination responsive */
    @media (max-width: 576px) {
        .pagination .page-link {
            padding: 0.15rem 0.3rem;
            font-size: 0.65rem;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 421
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

        // line 422
        yield "<div class=\"container-fluid px-2 px-md-4 py-3 py-md-4\">
    <!-- En-tête -->
    <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center mb-3 mb-md-4 flex-wrap gap-2\">
        <div>
            <h1 class=\"h4 h-md-2 mb-1\">
                <i class=\"fas fa-undo-alt text-primary me-2\"></i>
                Retours & Avoirs
            </h1>
            <p class=\"text-muted small d-none d-sm-block\">Gérez les demandes de retour et les avoirs clients</p>
        </div>
        <div class=\"actions-toolbar\">
            <button type=\"button\" class=\"btn btn-outline-warning btn-sm quick-filter-btn\" id=\"filterPendingBtn\">
                <i class=\"fas fa-clock me-1\"></i> <span class=\"d-none d-sm-inline\">En attente</span>
            </button>
            <button type=\"button\" class=\"btn btn-primary btn-sm\" data-bs-toggle=\"modal\" data-bs-target=\"#selectOrderModal\">
                <i class=\"fas fa-plus-circle me-1\"></i> <span class=\"d-none d-sm-inline\">Nouveau retour</span>
            </button>
            <button type=\"button\" id=\"printSelectedBtn\" class=\"btn btn-outline-info btn-sm\" disabled>
                <i class=\"fas fa-print me-1\"></i> <span class=\"d-none d-sm-inline\">Imprimer</span>
            </button>
            <a href=\"";
        // line 442
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("returns_export_pdf", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 442, $this->source); })()), "request", [], "any", false, false, false, 442), "query", [], "any", false, false, false, 442), "all", [], "any", false, false, false, 442)), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary btn-sm\" target=\"_blank\">
                <i class=\"fas fa-file-pdf me-1\"></i> <span class=\"d-none d-sm-inline\">PDF</span>
            </a>
        </div>
    </div>

    <!-- Cartes statistiques avec icônes en blanc -->
    <div class=\"mb-3 mb-md-4\">
        <div class=\"row g-2 g-md-3 mb-3\">
            <div class=\"col-6 col-md-3\">
                <div class=\"stats-card\">
                    <div class=\"card-body\">
                        <div class=\"d-flex justify-content-between align-items-start\">
                            <div>
                                <h6 class=\"text-muted mb-1 small\">En attente</h6>
                                <h3 class=\"mb-0 text-warning fs-5 fs-md-4\">";
        // line 457
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "pending", [], "any", true, true, false, 457)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 457, $this->source); })()), "pending", [], "any", false, false, false, 457), 0)) : (0)), 0, ",", " "), "html", null, true);
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
                                <h6 class=\"text-muted mb-1 small\">Approuvés</h6>
                                <h3 class=\"mb-0 text-primary fs-5 fs-md-4\">";
        // line 472
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "approved", [], "any", true, true, false, 472)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 472, $this->source); })()), "approved", [], "any", false, false, false, 472), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</h3>
                            </div>
                            <div class=\"icon-wrapper icon-wrapper-primary\">
                                <i class=\"fas fa-check-circle\"></i>
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
                                <h6 class=\"text-muted mb-1 small\">Remboursés</h6>
                                <h3 class=\"mb-0 text-success fs-5 fs-md-4\">";
        // line 487
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "completed", [], "any", true, true, false, 487)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 487, $this->source); })()), "completed", [], "any", false, false, false, 487), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</h3>
                            </div>
                            <div class=\"icon-wrapper icon-wrapper-success\">
                                <i class=\"fas fa-money-bill-wave\"></i>
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
                                <h6 class=\"text-muted mb-1 small\">Rejetés</h6>
                                <h3 class=\"mb-0 text-danger fs-5 fs-md-4\">";
        // line 502
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "rejected", [], "any", true, true, false, 502)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 502, $this->source); })()), "rejected", [], "any", false, false, false, 502), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</h3>
                            </div>
                            <div class=\"icon-wrapper icon-wrapper-danger\">
                                <i class=\"fas fa-ban\"></i>
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
                                <h6 class=\"text-muted mb-1 small\">Total retours</h6>
                                <h3 class=\"mb-0 fs-5 fs-md-4\">";
        // line 519
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_returns", [], "any", true, true, false, 519)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 519, $this->source); })()), "total_returns", [], "any", false, false, false, 519), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</h3>
                            </div>
                            <div class=\"icon-wrapper icon-wrapper-secondary\">
                                <i class=\"fas fa-undo-alt\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section recherche et filtres -->
    <div class=\"filter-section\">
        <!-- ✅ En-tête des filtres avec boutons en haut à droite -->
        <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center flex-wrap gap-2 mb-2 mb-md-3 pb-2\" style=\"border-bottom: 2px dotted #e5e7eb;\">
            <div>
                <i class=\"fas fa-filter me-2 text-primary\"></i>
                <span class=\"fw-semibold small\">Filtres</span>
            </div>
            <!-- ✅ Boutons toujours à droite sur desktop et mobile -->
            <div class=\"d-flex gap-1 gap-md-2 ms-auto\">
                <button type=\"button\" id=\"resetFiltersBtn\" class=\"btn btn-outline-secondary btn-sm\">
                    <i class=\"fas fa-undo me-1\"></i> <span class=\"d-none d-sm-inline\">Réinitialiser</span>
                </button>
                <button type=\"button\" id=\"applyFiltersBtn\" class=\"btn btn-primary btn-sm\">
                    <i class=\"fas fa-search me-1\"></i> <span class=\"d-none d-sm-inline\">Appliquer</span>
                </button>
            </div>
        </div>
        
        <div class=\"row g-2 g-md-3 align-items-end\">
            <div class=\"col-12 col-sm-6 col-md-4\">
                <label class=\"form-label fw-bold small\">🔍 Recherche</label>
                <input type=\"text\" id=\"searchInput\" class=\"form-control form-control-sm\" placeholder=\"N° retour, n° commande...\" value=\"";
        // line 553
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 553, $this->source); })()), "search", [], "any", false, false, false, 553), "html", null, true);
        yield "\">
            </div>
            <div class=\"col-6 col-sm-6 col-md-2\">
                <label class=\"form-label fw-bold small\">📊 Statut</label>
                <select id=\"statusSelect\" class=\"form-select form-select-sm\">
                    <option value=\"all\" ";
        // line 558
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 558, $this->source); })()), "status", [], "any", false, false, false, 558) == "all")) {
            yield "selected";
        }
        yield ">Tous</option>
                    <option value=\"pending\" ";
        // line 559
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 559, $this->source); })()), "status", [], "any", false, false, false, 559) == "pending")) {
            yield "selected";
        }
        yield ">⏳ En attente</option>
                    <option value=\"approved\" ";
        // line 560
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 560, $this->source); })()), "status", [], "any", false, false, false, 560) == "approved")) {
            yield "selected";
        }
        yield ">✓ Approuvés</option>
                    <option value=\"completed\" ";
        // line 561
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 561, $this->source); })()), "status", [], "any", false, false, false, 561) == "completed")) {
            yield "selected";
        }
        yield ">✅ Remboursés</option>
                    <option value=\"rejected\" ";
        // line 562
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 562, $this->source); })()), "status", [], "any", false, false, false, 562) == "rejected")) {
            yield "selected";
        }
        yield ">❌ Rejetés</option>
                </select>
            </div>
            <div class=\"col-6 col-sm-6 col-md-2\">
                <label class=\"form-label fw-bold small\">👤 Enregistré par</label>
                <select id=\"userSelect\" class=\"form-select form-select-sm select2\">
                    <option value=\"\">Tous</option>
                    ";
        // line 569
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 569, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 570
            yield "                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 570), "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 570, $this->source); })()), "user_id", [], "any", false, false, false, 570) == CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 570))) {
                yield "selected";
            }
            yield ">
                            ";
            // line 571
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fullName", [], "any", false, false, false, 571)), "truncate", [15], "method", false, false, false, 571), "html", null, true);
            yield "
                        </option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 574
        yield "                </select>
            </div>
            <div class=\"col-6 col-sm-6 col-md-2\">
                <label class=\"form-label fw-bold small\">📅 Date début</label>
                <input type=\"date\" id=\"dateFrom\" class=\"form-control form-control-sm\" value=\"";
        // line 578
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 578, $this->source); })()), "date_from", [], "any", false, false, false, 578), "html", null, true);
        yield "\">
            </div>
            <div class=\"col-6 col-sm-6 col-md-2\">
                <label class=\"form-label fw-bold small\">📅 Date fin</label>
                <input type=\"date\" id=\"dateTo\" class=\"form-control form-control-sm\" value=\"";
        // line 582
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 582, $this->source); })()), "date_to", [], "any", false, false, false, 582), "html", null, true);
        yield "\">
            </div>
        </div>
    </div>

    <!-- Tableau des retours -->
    <div class=\"card shadow-sm\">
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <form id=\"multiplePrintForm\" action=\"";
        // line 591
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("returns_print_multiple_receipts");
        yield "\" method=\"POST\" target=\"_blank\">
                    <table class=\"table table-hover mb-0 returns-table\">
                        <thead class=\"table-light\">
                            <tr>
                                <th class=\"text-center\" style=\"width:30px\">
                                    <input type=\"checkbox\" id=\"selectAllCheckbox\" class=\"select-all-checkbox\">
                                </th>
                                <th style=\"min-width:80px\">N° Retour</th>
                                <th style=\"min-width:90px\" class=\"d-none d-sm-table-cell\">N° Commande</th>
                                <th style=\"min-width:120px\">Client</th>
                                <th style=\"min-width:80px\" class=\"d-none d-md-table-cell\">Date</th>
                                <th style=\"min-width:80px\" class=\"text-end\">Montant</th>
                                <th style=\"min-width:80px\" class=\"d-none d-lg-table-cell\">Motif</th>
                                <th style=\"min-width:100px\" class=\"d-none d-xl-table-cell\">Enregistré par</th>
                                <th style=\"min-width:80px\">Statut</th>
                                <th style=\"min-width:120px\" class=\"text-center\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 610
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["returns"]) || array_key_exists("returns", $context) ? $context["returns"] : (function () { throw new RuntimeError('Variable "returns" does not exist.', 610, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["return"]) {
            // line 611
            yield "                                <tr class=\"return-row\" data-href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("returns_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["return"], "id", [], "any", false, false, false, 611)]), "html", null, true);
            yield "\">
                                    <td class=\"text-center\" onclick=\"event.stopPropagation()\">
                                        <input type=\"checkbox\" name=\"return_ids[]\" value=\"";
            // line 613
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["return"], "id", [], "any", false, false, false, 613), "html", null, true);
            yield "\" class=\"return-checkbox\">
                                    </td>
                                    <td>
                                        <strong class=\"text-primary small\">";
            // line 616
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["return"], "returnNumber", [], "any", false, false, false, 616), "html", null, true);
            yield "</strong>
                                    </td>
                                    <td class=\"d-none d-sm-table-cell\">
                                        <code class=\"small\">";
            // line 619
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["return"], "orderNumber", [], "any", false, false, false, 619), "html", null, true);
            yield "</code>
                                    </td>
                                    <td>
                                        <div class=\"customer-info\">
                                            <div class=\"customer-name\">";
            // line 623
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["return"], "customerName", [], "any", false, false, false, 623)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["return"], "customerName", [], "any", false, false, false, 623), "html", null, true)) : ("Non renseigné"));
            yield "</div>
                                            <div class=\"customer-phone\">
                                                <i class=\"fas fa-phone me-1\"></i>";
            // line 625
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["return"], "customerPhone", [], "any", false, false, false, 625), "html", null, true);
            yield "
                                            </div>
                                        </div>
                                    </td>
                                    <td class=\"d-none d-md-table-cell\">
                                        ";
            // line 630
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["return"], "createdAt", [], "any", false, false, false, 630), "d/m/Y"), "html", null, true);
            yield "
                                        <br>
                                        <small class=\"text-muted\">";
            // line 632
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["return"], "createdAt", [], "any", false, false, false, 632), "H:i"), "html", null, true);
            yield "</small>
                                    </td>
                                    <td class=\"text-end\">
                                        <strong class=\"small\">";
            // line 635
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["return"], "totalRefundAmount", [], "any", false, false, false, 635), 0, ",", " "), "html", null, true);
            yield " FCFA</strong>
                                    </td>
                                    <td class=\"d-none d-lg-table-cell\">
                                        <span class=\"reason-badge\">
                                            ";
            // line 639
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(((CoreExtension::getAttribute($this->env, $this->source, ($context["reasons"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["return"], "reason", [], "any", false, false, false, 639), [], "array", true, true, false, 639)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reasons"]) || array_key_exists("reasons", $context) ? $context["reasons"] : (function () { throw new RuntimeError('Variable "reasons" does not exist.', 639, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["return"], "reason", [], "any", false, false, false, 639), [], "array", false, false, false, 639), CoreExtension::getAttribute($this->env, $this->source, $context["return"], "reason", [], "any", false, false, false, 639))) : (CoreExtension::getAttribute($this->env, $this->source, $context["return"], "reason", [], "any", false, false, false, 639)))), "truncate", [12], "method", false, false, false, 639), "html", null, true);
            yield "
                                        </span>
                                    </td>
                                    <td class=\"d-none d-xl-table-cell\">
                                        <div class=\"d-flex align-items-center\">
                                            ";
            // line 644
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["return"], "returnedBy", [], "any", false, false, false, 644), "photo", [], "any", false, false, false, 644)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 645
                yield "                                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["return"], "returnedBy", [], "any", false, false, false, 645), "photo", [], "any", false, false, false, 645))), "html", null, true);
                yield "\" class=\"rounded-circle me-2\" width=\"24\" height=\"24\">
                                            ";
            } else {
                // line 647
                yield "                                                <div class=\"bg-secondary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-2\" style=\"width: 24px; height: 24px;\">
                                                    <i class=\"fas fa-user text-secondary small\"></i>
                                                </div>
                                            ";
            }
            // line 651
            yield "                                            <div>
                                                <small>";
            // line 652
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["return"], "returnedBy", [], "any", false, false, false, 652), "fullName", [], "any", false, false, false, 652)), "truncate", [12], "method", false, false, false, 652), "html", null, true);
            yield "</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class=\"text-center\">
                                        ";
            // line 657
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["return"], "status", [], "any", false, false, false, 657) == "pending")) {
                // line 658
                yield "                                            <span class=\"status-badge status-pending\">En attente</span>
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 659
$context["return"], "status", [], "any", false, false, false, 659) == "approved")) {
                // line 660
                yield "                                            <span class=\"status-badge status-approved\">Approuvé</span>
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 661
$context["return"], "status", [], "any", false, false, false, 661) == "completed")) {
                // line 662
                yield "                                            <span class=\"status-badge status-completed\">Remboursé</span>
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 663
$context["return"], "status", [], "any", false, false, false, 663) == "rejected")) {
                // line 664
                yield "                                            <span class=\"status-badge status-rejected\">Rejeté</span>
                                        ";
            }
            // line 666
            yield "                                    </td>
                                    <td class=\"text-center\" onclick=\"event.stopPropagation()\">
                                        <div class=\"btn-group\" role=\"group\">
                                            <a href=\"";
            // line 669
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("returns_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["return"], "id", [], "any", false, false, false, 669)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary\" title=\"Voir\">
                                                <i class=\"fas fa-eye\"></i>
                                            </a>
                                            <a href=\"";
            // line 672
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("returns_print_receipt", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["return"], "id", [], "any", false, false, false, 672)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-info\" title=\"Imprimer\" target=\"_blank\">
                                                <i class=\"fas fa-print\"></i>
                                            </a>
                                            ";
            // line 675
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["return"], "status", [], "any", false, false, false, 675) == "pending") && ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER")))) {
                // line 676
                yield "                                                <button type=\"button\" class=\"btn btn-sm btn-outline-success approve-return\" 
                                                        data-id=\"";
                // line 677
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["return"], "id", [], "any", false, false, false, 677), "html", null, true);
                yield "\" data-number=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["return"], "returnNumber", [], "any", false, false, false, 677), "html", null, true);
                yield "\" title=\"Approuver\">
                                                    <i class=\"fas fa-check\"></i>
                                                </button>
                                                <button type=\"button\" class=\"btn btn-sm btn-outline-danger reject-return\" 
                                                        data-id=\"";
                // line 681
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["return"], "id", [], "any", false, false, false, 681), "html", null, true);
                yield "\" data-number=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["return"], "returnNumber", [], "any", false, false, false, 681), "html", null, true);
                yield "\" title=\"Rejeter\">
                                                    <i class=\"fas fa-times\"></i>
                                                </button>
                                            ";
            }
            // line 685
            yield "                                            ";
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["return"], "status", [], "any", false, false, false, 685) == "approved") && ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER")))) {
                // line 686
                yield "                                                <button type=\"button\" class=\"btn btn-sm btn-outline-success complete-return\" 
                                                        data-id=\"";
                // line 687
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["return"], "id", [], "any", false, false, false, 687), "html", null, true);
                yield "\" data-number=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["return"], "returnNumber", [], "any", false, false, false, 687), "html", null, true);
                yield "\" title=\"Confirmer remboursement\">
                                                    <i class=\"fas fa-money-bill-wave\"></i>
                                                </button>
                                            ";
            }
            // line 691
            yield "                                        </div>
                                    </td>
                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        // line 694
        if (!$context['_iterated']) {
            // line 695
            yield "                                <tr>
                                    <td colspan=\"10\" class=\"text-center py-4 py-md-5\">
                                        <i class=\"fas fa-inbox fa-2x fa-md-3x text-muted mb-3\"></i>
                                        <p class=\"text-muted mb-0 small\">Aucun retour trouvé</p>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['return'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 702
        yield "                        </tbody>
                    </table>
                </form>
            </div>
        </div>
        ";
        // line 707
        if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 707, $this->source); })()) > 1)) {
            // line 708
            yield "        <div class=\"card-footer bg-white py-2 py-md-3\">
            <nav aria-label=\"Pagination\">
                <ul class=\"pagination pagination-sm justify-content-center mb-0\">
                    ";
            // line 711
            $context["maxVisible"] = 5;
            // line 712
            yield "                    ";
            $context["startPage"] = max(1, ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 712, $this->source); })()) - 2));
            // line 713
            yield "                    ";
            $context["endPage"] = min((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 713, $this->source); })()), (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 713, $this->source); })()) + (isset($context["maxVisible"]) || array_key_exists("maxVisible", $context) ? $context["maxVisible"] : (function () { throw new RuntimeError('Variable "maxVisible" does not exist.', 713, $this->source); })())) - 1));
            // line 714
            yield "                    ";
            if ((((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 714, $this->source); })()) - (isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 714, $this->source); })())) < ((isset($context["maxVisible"]) || array_key_exists("maxVisible", $context) ? $context["maxVisible"] : (function () { throw new RuntimeError('Variable "maxVisible" does not exist.', 714, $this->source); })()) - 1))) {
                // line 715
                yield "                        ";
                $context["startPage"] = max(1, (((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 715, $this->source); })()) - (isset($context["maxVisible"]) || array_key_exists("maxVisible", $context) ? $context["maxVisible"] : (function () { throw new RuntimeError('Variable "maxVisible" does not exist.', 715, $this->source); })())) + 1));
                // line 716
                yield "                    ";
            }
            // line 717
            yield "                    
                    ";
            // line 718
            if (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 718, $this->source); })()) > 1)) {
                // line 719
                yield "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"#\" data-page=\"1\">1</a>
                        </li>
                        ";
                // line 722
                if (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 722, $this->source); })()) > 2)) {
                    // line 723
                    yield "                            <li class=\"page-item disabled\"><span class=\"page-link\">…</span></li>
                        ";
                }
                // line 725
                yield "                    ";
            }
            // line 726
            yield "                    
                    ";
            // line 727
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 727, $this->source); })()), (isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 727, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 728
                yield "                        <li class=\"page-item ";
                if (($context["i"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 728, $this->source); })()))) {
                    yield "active";
                }
                yield "\">
                            <a class=\"page-link\" href=\"#\" data-page=\"";
                // line 729
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "</a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 732
            yield "                    
                    ";
            // line 733
            if (((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 733, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 733, $this->source); })()))) {
                // line 734
                yield "                        ";
                if (((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 734, $this->source); })()) < ((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 734, $this->source); })()) - 1))) {
                    // line 735
                    yield "                            <li class=\"page-item disabled\"><span class=\"page-link\">…</span></li>
                        ";
                }
                // line 737
                yield "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"#\" data-page=\"";
                // line 738
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 738, $this->source); })()), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 738, $this->source); })()), "html", null, true);
                yield "</a>
                        </li>
                    ";
            }
            // line 741
            yield "                </ul>
            </nav>
        </div>
        ";
        }
        // line 745
        yield "    </div>
</div>

<!-- Modal de sélection de commande -->
<div class=\"modal fade\" id=\"selectOrderModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-primary text-white\">
                <h5 class=\"modal-title fs-6 fs-md-5\">
                    <i class=\"fas fa-search me-2\"></i> Sélectionner une commande
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"border-0 shadow-sm mb-3\" style=\"background-color: #fef3c7; border-left: 4px solid #f59e0b; padding: 0.5rem 0.75rem; border-radius: 8px;\">
                    <div class=\"d-flex\">
                        <div class=\"me-2\">
                            <i class=\"fas fa-info-circle fa-1x fa-md-2x text-warning\"></i>
                        </div>
                        <div>
                            <strong class=\"d-block small\">Retours multiples autorisés !</strong>
                            <small class=\"small\">Les commandes avec un retour en cours peuvent encore être retournées s'il reste des quantités.</small>
                        </div>
                    </div>
                </div>
                
                <div class=\"mb-3\">
                    <label class=\"form-label fw-bold small\">Rechercher par numéro de commande ou téléphone</label>
                    <div class=\"input-group input-group-sm\">
                        <input type=\"text\" id=\"orderSearchInput\" class=\"form-control form-control-sm\" placeholder=\"Ex: VENTE-20241215-ABC123 ou 691234567\" autocomplete=\"off\">
                        <button class=\"btn btn-primary btn-sm\" id=\"searchOrderBtn\">
                            <i class=\"fas fa-search\"></i> Rechercher
                        </button>
                    </div>
                    <small class=\"text-muted mt-1 d-block small\">Saisissez au moins 3 caractères</small>
                </div>
                <div id=\"orderSearchResults\" style=\"max-height: 400px; overflow-y: auto;\">
                    <div class=\"text-center text-muted py-4\">
                        <i class=\"fas fa-search fa-2x mb-2\"></i>
                        <p class=\"small\">Recherchez une commande pour créer un retour</p>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer py-2\">
                <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-bs-dismiss=\"modal\">Fermer</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Confirmer remboursement -->
<div class=\"modal fade\" id=\"confirmCompleteModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content\">
            <div class=\"modal-body text-center p-3 p-md-4\">
                <div class=\"confirm-modal-icon warning\">
                    <i class=\"fas fa-money-bill-wave\"></i>
                </div>
                <h4 class=\"mb-2 fs-6 fs-md-5\">Confirmer le remboursement</h4>
                <p class=\"text-muted mb-3 small\">Êtes-vous sûr de vouloir confirmer le remboursement du retour <strong id=\"completeReturnNumber\"></strong> ?</p>
                <p class=\"small text-warning mb-0\">⚠️ Cette action remettra les produits en stock.</p>
            </div>
            <div class=\"modal-footer justify-content-center border-0 pt-0 py-2\">
                <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-warning btn-sm\" id=\"confirmCompleteBtn\">Confirmer</button>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 816
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

        // line 817
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/fr.js\"></script>
<script>
\$(document).ready(function() {
    \$('.select2').select2({
        theme: 'bootstrap-5',
        language: 'fr',
        width: '100%',
        dropdownAutoWidth: true
    });

    \$('#filterPendingBtn').click(function() {
        \$('#statusSelect').val('pending').trigger('change');
        \$('#applyFiltersBtn').click();
    });

    // === GESTION DES CASES À COCHER ===
    function updatePrintButtonState() {
        var checkedCount = \$('.return-checkbox:checked').length;
        \$('#printSelectedBtn').prop('disabled', checkedCount === 0);
    }

    \$('#selectAllCheckbox').change(function() {
        \$('.return-checkbox').prop('checked', \$(this).prop('checked'));
        updatePrintButtonState();
    });

    \$(document).on('change', '.return-checkbox', function() {
        updatePrintButtonState();
        var allChecked = \$('.return-checkbox:checked').length === \$('.return-checkbox').length;
        \$('#selectAllCheckbox').prop('checked', allChecked);
    });

    \$('#printSelectedBtn').click(function() {
        var checkedCount = \$('.return-checkbox:checked').length;
        if (checkedCount === 0) {
            alert('Veuillez sélectionner au moins un retour à imprimer.');
            return;
        }
        \$('#multiplePrintForm').submit();
    });

    // === RECHERCHE DE COMMANDE ===
    let searchTimeout;
    let newReturnBaseUrl = \"";
        // line 862
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("returns_new", ["orderId" => "ID_PLACEHOLDER"]);
        yield "\".replace('ID_PLACEHOLDER', '');

    function escapeHtml(text) {
        if (!text) return '';
        let div = document.createElement('div');
        div.textContent = text;
        return div.innerHTML;
    }

    function searchOrders() {
        let search = \$('#orderSearchInput').val();
        if (search.length < 3) {
            \$('#orderSearchResults').html(`
                <div class=\"text-center text-muted py-4\">
                    <i class=\"fas fa-search fa-2x mb-2\"></i>
                    <p class=\"small\">Saisissez au moins 3 caractères pour rechercher</p>
                </div>
            `);
            return;
        }
        
        \$('#orderSearchResults').html(`
            <div class=\"text-center py-4\">
                <div class=\"spinner-border text-primary\"></div>
                <p class=\"mt-2 small\">Recherche en cours...</p>
            </div>
        `);
        
        \$.ajax({
            url: '";
        // line 891
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("returns_search_orders");
        yield "?q=' + encodeURIComponent(search),
            method: 'GET',
            success: function(orders) {
                if (orders.length === 0) {
                    \$('#orderSearchResults').html(`
                        <div class=\"text-center text-muted py-4\">
                            <i class=\"fas fa-inbox fa-2x mb-2\"></i>
                            <p class=\"small\">Aucune commande trouvée</p>
                            <small class=\"small\">Vérifiez le numéro ou essayez avec le téléphone</small>
                        </div>
                    `);
                    return;
                }
                
                let html = '<div class=\"list-group\">';
                orders.forEach(function(order) {
                    let returnInfo = '';
                    if (order.has_return) {
                        returnInfo = `
                            <div class=\"mt-2\">
                                <span class=\"badge bg-warning me-1 small\">
                                    <i class=\"fas fa-undo-alt me-1\"></i>Retour en cours
                                </span>
                                \${order.remaining_items > 0 ? 
                                    `<span class=\"badge bg-info small\">
                                        <i class=\"fas fa-boxes me-1\"></i>\${order.remaining_items} article(s) retournable(s)
                                    </span>` : 
                                    `<span class=\"badge bg-danger small\">
                                        <i class=\"fas fa-ban me-1\"></i>Plus rien à retourner
                                    </span>`
                                }
                            </div>
                        `;
                    }
                    
                    let returnUrl = newReturnBaseUrl + order.id;
                    let isDisabled = order.has_return && order.remaining_items === 0;
                    
                    html += `
                        <a href=\"\${returnUrl}\" 
                        class=\"list-group-item list-group-item-action order-result-item \${order.has_return ? 'has-return' : ''}\" 
                        \${isDisabled ? 'onclick=\"return false;\" style=\"opacity:0.6; cursor:not-allowed;\"' : ''}>
                            <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center flex-wrap gap-2\">
                                <div class=\"flex-grow-1\">
                                    <div>
                                        <strong class=\"text-primary small\">\${escapeHtml(order.order_number)}</strong>
                                    </div>
                                    <div class=\"mt-1\">
                                        <i class=\"fas fa-user text-muted me-1 small\"></i>
                                        <strong class=\"small\">\${escapeHtml(order.customer_name || 'Client non renseigné')}</strong>
                                        \${order.customer_phone ? '<br><small class=\"text-muted\"><i class=\"fas fa-phone me-1\"></i>' + escapeHtml(order.customer_phone) + '</small>' : ''}
                                    </div>
                                    \${returnInfo}
                                </div>
                                <div class=\"text-end\">
                                    <div class=\"small text-muted\">
                                        <i class=\"fas fa-calendar me-1\"></i>\${new Date(order.created_at).toLocaleDateString('fr-FR')}
                                    </div>
                                    <div class=\"mt-1\">
                                        <strong class=\"text-success fs-6\">\${order.total_amount.toLocaleString('fr-FR')} FCFA</strong>
                                    </div>
                                    \${order.already_returned_amount > 0 ? 
                                        `<small class=\"text-warning small\">Déjà retourné: \${order.already_returned_amount.toLocaleString('fr-FR')} FCFA</small>` : ''
                                    }
                                </div>
                            </div>
                        </a>
                    `;
                });
                html += '</div>';
                \$('#orderSearchResults').html(html);
                
                \$('.order-result-item.has-return').click(function(e) {
                    let hasRemaining = \$(this).find('.badge.bg-info').length > 0;
                    if (!hasRemaining) {
                        e.preventDefault();
                        alert('Cette commande a déjà été entièrement retournée. Aucun article restant à retourner.');
                    }
                });
            },
            error: function() {
                \$('#orderSearchResults').html(`
                    <div class=\"text-center text-danger py-4\">
                        <i class=\"fas fa-exclamation-triangle fa-2x mb-2\"></i>
                        <p class=\"small\">Erreur lors de la recherche</p>
                        <small class=\"small\">Veuillez réessayer</small>
                    </div>
                `);
            }
        });
    }

    \$('#searchOrderBtn').click(searchOrders);
    \$('#orderSearchInput').keypress(function(e) {
        if (e.key === 'Enter') { e.preventDefault(); searchOrders(); }
    });
    \$('#orderSearchInput').on('input', function() {
        clearTimeout(searchTimeout);
        searchTimeout = setTimeout(searchOrders, 500);
    });
    \$('#selectOrderModal').on('shown.bs.modal', function() {
        \$('#orderSearchInput').val('').focus();
        \$('#orderSearchResults').html(`
            <div class=\"text-center text-muted py-4\">
                <i class=\"fas fa-search fa-2x mb-2\"></i>
                <p class=\"small\">Recherchez une commande pour créer un retour</p>
            </div>
        `);
    });

    // === FILTRES ===
    function applyFilters() {
        let params = new URLSearchParams();
        let search = \$('#searchInput').val();
        let status = \$('#statusSelect').val();
        let userId = \$('#userSelect').val();
        let dateFrom = \$('#dateFrom').val();
        let dateTo = \$('#dateTo').val();
        
        if (search) params.append('search', search);
        if (status && status !== 'all') params.append('status', status);
        if (userId) params.append('user_id', userId);
        if (dateFrom) params.append('date_from', dateFrom);
        if (dateTo) params.append('date_to', dateTo);
        
        window.location.href = '";
        // line 1016
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("returns_index");
        yield "?' + params.toString();
    }

    \$('#applyFiltersBtn').click(applyFilters);
    \$('#resetFiltersBtn').click(function() {
        window.location.href = '";
        // line 1021
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("returns_index");
        yield "';
    });

    // === PAGINATION ===
    \$('.page-link').click(function(e) {
        e.preventDefault();
        let page = \$(this).data('page');
        let params = new URLSearchParams(window.location.search);
        params.set('page', page);
        window.location.href = '";
        // line 1030
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("returns_index");
        yield "?' + params.toString();
    });

    // === LIGNE CLIQUABLE ===
    \$('.return-row').click(function(e) {
        if (!\$(e.target).closest('.btn-group').length && !\$(e.target).closest('a').length && !\$(e.target).closest('input[type=\"checkbox\"]').length) {
            window.location.href = \$(this).data('href');
        }
    });

    // === ACTIONS ===
    let currentReturnId = null;
    let currentReturnNumber = null;
    let isProcessing = false;

    \$('.approve-return').click(function(e) {
        e.stopPropagation();
        currentReturnId = \$(this).data('id');
        currentReturnNumber = \$(this).data('number');
        if (confirm('Approuver le retour ' + currentReturnNumber + ' ?')) {
            \$.ajax({
                url: '/returns/' + currentReturnId + '/approve',
                method: 'POST',
                success: function(response) {
                    if (response.success) location.reload();
                    else alert(response.error || 'Erreur');
                },
                error: function() { alert('Erreur'); }
            });
        }
    });

    \$('.reject-return').click(function(e) {
        e.stopPropagation();
        currentReturnId = \$(this).data('id');
        currentReturnNumber = \$(this).data('number');
        let reason = prompt('Motif du rejet :');
        if (reason !== null) {
            \$.ajax({
                url: '/returns/' + currentReturnId + '/reject',
                method: 'POST',
                data: { reason: reason },
                success: function(response) {
                    if (response.success) location.reload();
                    else alert(response.error || 'Erreur');
                },
                error: function() { alert('Erreur'); }
            });
        }
    });

    \$('.complete-return').click(function(e) {
        e.stopPropagation();
        currentReturnId = \$(this).data('id');
        currentReturnNumber = \$(this).data('number');
        \$('#completeReturnNumber').text(currentReturnNumber);
        \$('#confirmCompleteModal').modal({backdrop: 'static', keyboard: false}).modal('show');
    });

    \$('#confirmCompleteBtn').click(function() {
        if (isProcessing) return;
        var \$btn = \$(this);
        isProcessing = true;
        \$btn.prop('disabled', true).html('<span class=\"spinner-border spinner-border-sm me-2\"></span>');
        
        \$.ajax({
            url: '/returns/' + currentReturnId + '/complete',
            method: 'POST',
            success: function(response) {
                if (response.success) location.reload();
                else { alert(response.error || 'Erreur'); resetAndHide(\$btn, '#confirmCompleteModal'); }
            },
            error: function() { alert('Erreur'); resetAndHide(\$btn, '#confirmCompleteModal'); }
        });
    });

    function resetAndHide(\$btn, modalId) {
        isProcessing = false;
        \$btn.prop('disabled', false).html('Confirmer');
        \$(modalId).modal('hide');
    }
    
    \$('#confirmCompleteModal').on('hidden.bs.modal', function() {
        isProcessing = false;
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
        return "return/index.html.twig";
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
        return array (  1419 => 1030,  1407 => 1021,  1399 => 1016,  1271 => 891,  1239 => 862,  1191 => 817,  1178 => 816,  1098 => 745,  1092 => 741,  1084 => 738,  1081 => 737,  1077 => 735,  1074 => 734,  1072 => 733,  1069 => 732,  1058 => 729,  1051 => 728,  1047 => 727,  1044 => 726,  1041 => 725,  1037 => 723,  1035 => 722,  1030 => 719,  1028 => 718,  1025 => 717,  1022 => 716,  1019 => 715,  1016 => 714,  1013 => 713,  1010 => 712,  1008 => 711,  1003 => 708,  1001 => 707,  994 => 702,  982 => 695,  980 => 694,  973 => 691,  964 => 687,  961 => 686,  958 => 685,  949 => 681,  940 => 677,  937 => 676,  935 => 675,  929 => 672,  923 => 669,  918 => 666,  914 => 664,  912 => 663,  909 => 662,  907 => 661,  904 => 660,  902 => 659,  899 => 658,  897 => 657,  889 => 652,  886 => 651,  880 => 647,  874 => 645,  872 => 644,  864 => 639,  857 => 635,  851 => 632,  846 => 630,  838 => 625,  833 => 623,  826 => 619,  820 => 616,  814 => 613,  808 => 611,  803 => 610,  781 => 591,  769 => 582,  762 => 578,  756 => 574,  747 => 571,  738 => 570,  734 => 569,  722 => 562,  716 => 561,  710 => 560,  704 => 559,  698 => 558,  690 => 553,  653 => 519,  633 => 502,  615 => 487,  597 => 472,  579 => 457,  561 => 442,  539 => 422,  526 => 421,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/return/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Retours & Avoirs{% endblock %}

{% block stylesheets %}
{{ parent() }}
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
<link href=\"https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css\" rel=\"stylesheet\" />
<style>
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
    
    .status-badge {
        padding: 0.2rem 0.5rem;
        border-radius: 20px;
        font-size: 0.65rem;
        font-weight: 600;
        display: inline-block;
    }
    @media (min-width: 768px) {
        .status-badge {
            padding: 0.25rem 0.75rem;
            font-size: 0.75rem;
        }
    }
    .status-pending { background: #fef3c7; color: #d97706; }
    .status-approved { background: #dbeafe; color: #2563eb; }
    .status-completed { background: #dcfce7; color: #16a34a; }
    .status-rejected { background: #fee2e2; color: #dc2626; }
    
    .reason-badge {
        background: #f3f4f6;
        color: #4b5563;
        padding: 0.15rem 0.5rem;
        border-radius: 20px;
        font-size: 0.65rem;
        font-weight: 500;
        display: inline-block;
        white-space: normal;
        word-break: break-word;
        max-width: 100px;
        line-height: 1.2;
    }
    @media (min-width: 768px) {
        .reason-badge {
            padding: 0.25rem 0.75rem;
            font-size: 0.75rem;
            max-width: 150px;
        }
    }
    
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
    .return-row {
        cursor: pointer;
        transition: background 0.2s;
    }
    .return-row:hover {
        background-color: #f8f9fa;
    }
    .select2-container--bootstrap-5 .select2-selection {
        border-radius: 8px;
        min-height: 38px;
    }
    .order-result-item {
        transition: background 0.2s;
        border-left: 3px solid transparent;
    }
    .order-result-item:hover {
        background-color: #f8fafc;
    }
    .order-result-item.has-return {
        border-left-color: #f59e0b;
        background-color: #fffbeb;
    }
    .order-result-item.has-return:hover {
        background-color: #fef3c7;
    }
    
    .quick-filter-btn {
        transition: all 0.2s;
    }
    .quick-filter-btn:hover {
        transform: translateY(-2px);
    }
    .quick-filter-btn.active {
        background-color: #0463f1;
        color: white;
        border-color: #0463f1;
    }
    
    .confirm-modal-icon {
        width: 60px;
        height: 60px;
        background: #e8f4fd;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1rem;
    }
    @media (min-width: 768px) {
        .confirm-modal-icon {
            width: 70px;
            height: 70px;
        }
    }
    .confirm-modal-icon i {
        font-size: 1.5rem;
        color: #0463f1;
    }
    @media (min-width: 768px) {
        .confirm-modal-icon i {
            font-size: 2rem;
        }
    }
    .confirm-modal-icon.warning {
        background: #fef3c7;
    }
    .confirm-modal-icon.warning i {
        color: #f59e0b;
    }
    .confirm-modal-icon.danger {
        background: #fee2e2;
    }
    .confirm-modal-icon.danger i {
        color: #dc2626;
    }
    .confirm-modal-icon.success {
        background: #dcfce7;
    }
    .confirm-modal-icon.success i {
        color: #16a34a;
    }

    .returns-table {
        min-width: 800px;
    }
    @media (min-width: 1200px) {
        .returns-table {
            min-width: 1000px;
        }
    }
    .returns-table th,
    .returns-table td {
        vertical-align: middle;
        padding: 0.4rem 0.4rem;
        font-size: 0.75rem;
    }
    @media (min-width: 768px) {
        .returns-table th,
        .returns-table td {
            padding: 0.6rem 0.75rem;
            font-size: 0.85rem;
        }
    }

    .customer-info {
        white-space: normal;
        word-break: break-word;
    }
    .customer-name {
        font-weight: 500;
        margin-bottom: 0.25rem;
        font-size: 0.75rem;
    }
    @media (min-width: 768px) {
        .customer-name {
            font-size: 0.9rem;
        }
    }
    .customer-phone {
        font-size: 0.6rem;
        color: #6c757d;
    }
    @media (min-width: 768px) {
        .customer-phone {
            font-size: 0.7rem;
        }
    }
    .customer-phone i {
        font-size: 0.55rem;
    }
    @media (min-width: 768px) {
        .customer-phone i {
            font-size: 0.65rem;
        }
    }

    .btn-group {
        display: flex;
        gap: 0.15rem;
        flex-wrap: wrap;
    }
    @media (min-width: 768px) {
        .btn-group {
            gap: 0.25rem;
        }
    }
    .btn-group .btn {
        padding: 0.15rem 0.3rem;
        font-size: 0.6rem;
    }
    @media (min-width: 768px) {
        .btn-group .btn {
            padding: 0.25rem 0.5rem;
            font-size: 0.75rem;
        }
    }
    .btn-group .btn i {
        font-size: 0.7rem;
    }
    @media (min-width: 768px) {
        .btn-group .btn i {
            font-size: 0.9rem;
        }
    }
    
    .checkbox-col {
        cursor: pointer;
    }
    .select-all-checkbox, .return-checkbox {
        width: 14px;
        height: 14px;
        cursor: pointer;
    }
    @media (min-width: 768px) {
        .select-all-checkbox, .return-checkbox {
            width: 18px;
            height: 18px;
        }
    }

    .returns-table td,
    .returns-table th {
        white-space: nowrap;
    }
    .returns-table .customer-info {
        white-space: normal;
        min-width: 120px;
        max-width: 150px;
    }
    @media (min-width: 768px) {
        .returns-table .customer-info {
            min-width: 180px;
            max-width: 200px;
        }
    }
    .returns-table .reason-badge {
        white-space: normal;
        max-width: 80px;
    }
    @media (min-width: 768px) {
        .returns-table .reason-badge {
            max-width: 150px;
        }
    }
    
    .actions-toolbar {
        display: flex;
        gap: 6px;
        align-items: center;
        flex-wrap: wrap;
    }
    @media (min-width: 768px) {
        .actions-toolbar {
            gap: 10px;
        }
    }

    /* Responsive container */
    @media (max-width: 576px) {
        .container-fluid {
            padding-left: 8px !important;
            padding-right: 8px !important;
        }
        .card-body {
            padding: 0.5rem !important;
        }
        .h2 {
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
    }

    @media (max-width: 576px) {
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

    /* Pagination responsive */
    @media (max-width: 576px) {
        .pagination .page-link {
            padding: 0.15rem 0.3rem;
            font-size: 0.65rem;
        }
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container-fluid px-2 px-md-4 py-3 py-md-4\">
    <!-- En-tête -->
    <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center mb-3 mb-md-4 flex-wrap gap-2\">
        <div>
            <h1 class=\"h4 h-md-2 mb-1\">
                <i class=\"fas fa-undo-alt text-primary me-2\"></i>
                Retours & Avoirs
            </h1>
            <p class=\"text-muted small d-none d-sm-block\">Gérez les demandes de retour et les avoirs clients</p>
        </div>
        <div class=\"actions-toolbar\">
            <button type=\"button\" class=\"btn btn-outline-warning btn-sm quick-filter-btn\" id=\"filterPendingBtn\">
                <i class=\"fas fa-clock me-1\"></i> <span class=\"d-none d-sm-inline\">En attente</span>
            </button>
            <button type=\"button\" class=\"btn btn-primary btn-sm\" data-bs-toggle=\"modal\" data-bs-target=\"#selectOrderModal\">
                <i class=\"fas fa-plus-circle me-1\"></i> <span class=\"d-none d-sm-inline\">Nouveau retour</span>
            </button>
            <button type=\"button\" id=\"printSelectedBtn\" class=\"btn btn-outline-info btn-sm\" disabled>
                <i class=\"fas fa-print me-1\"></i> <span class=\"d-none d-sm-inline\">Imprimer</span>
            </button>
            <a href=\"{{ path('returns_export_pdf', app.request.query.all) }}\" class=\"btn btn-outline-secondary btn-sm\" target=\"_blank\">
                <i class=\"fas fa-file-pdf me-1\"></i> <span class=\"d-none d-sm-inline\">PDF</span>
            </a>
        </div>
    </div>

    <!-- Cartes statistiques avec icônes en blanc -->
    <div class=\"mb-3 mb-md-4\">
        <div class=\"row g-2 g-md-3 mb-3\">
            <div class=\"col-6 col-md-3\">
                <div class=\"stats-card\">
                    <div class=\"card-body\">
                        <div class=\"d-flex justify-content-between align-items-start\">
                            <div>
                                <h6 class=\"text-muted mb-1 small\">En attente</h6>
                                <h3 class=\"mb-0 text-warning fs-5 fs-md-4\">{{ stats.pending|default(0)|number_format(0, ',', ' ') }}</h3>
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
                                <h6 class=\"text-muted mb-1 small\">Approuvés</h6>
                                <h3 class=\"mb-0 text-primary fs-5 fs-md-4\">{{ stats.approved|default(0)|number_format(0, ',', ' ') }}</h3>
                            </div>
                            <div class=\"icon-wrapper icon-wrapper-primary\">
                                <i class=\"fas fa-check-circle\"></i>
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
                                <h6 class=\"text-muted mb-1 small\">Remboursés</h6>
                                <h3 class=\"mb-0 text-success fs-5 fs-md-4\">{{ stats.completed|default(0)|number_format(0, ',', ' ') }}</h3>
                            </div>
                            <div class=\"icon-wrapper icon-wrapper-success\">
                                <i class=\"fas fa-money-bill-wave\"></i>
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
                                <h6 class=\"text-muted mb-1 small\">Rejetés</h6>
                                <h3 class=\"mb-0 text-danger fs-5 fs-md-4\">{{ stats.rejected|default(0)|number_format(0, ',', ' ') }}</h3>
                            </div>
                            <div class=\"icon-wrapper icon-wrapper-danger\">
                                <i class=\"fas fa-ban\"></i>
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
                                <h6 class=\"text-muted mb-1 small\">Total retours</h6>
                                <h3 class=\"mb-0 fs-5 fs-md-4\">{{ stats.total_returns|default(0)|number_format(0, ',', ' ') }}</h3>
                            </div>
                            <div class=\"icon-wrapper icon-wrapper-secondary\">
                                <i class=\"fas fa-undo-alt\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section recherche et filtres -->
    <div class=\"filter-section\">
        <!-- ✅ En-tête des filtres avec boutons en haut à droite -->
        <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center flex-wrap gap-2 mb-2 mb-md-3 pb-2\" style=\"border-bottom: 2px dotted #e5e7eb;\">
            <div>
                <i class=\"fas fa-filter me-2 text-primary\"></i>
                <span class=\"fw-semibold small\">Filtres</span>
            </div>
            <!-- ✅ Boutons toujours à droite sur desktop et mobile -->
            <div class=\"d-flex gap-1 gap-md-2 ms-auto\">
                <button type=\"button\" id=\"resetFiltersBtn\" class=\"btn btn-outline-secondary btn-sm\">
                    <i class=\"fas fa-undo me-1\"></i> <span class=\"d-none d-sm-inline\">Réinitialiser</span>
                </button>
                <button type=\"button\" id=\"applyFiltersBtn\" class=\"btn btn-primary btn-sm\">
                    <i class=\"fas fa-search me-1\"></i> <span class=\"d-none d-sm-inline\">Appliquer</span>
                </button>
            </div>
        </div>
        
        <div class=\"row g-2 g-md-3 align-items-end\">
            <div class=\"col-12 col-sm-6 col-md-4\">
                <label class=\"form-label fw-bold small\">🔍 Recherche</label>
                <input type=\"text\" id=\"searchInput\" class=\"form-control form-control-sm\" placeholder=\"N° retour, n° commande...\" value=\"{{ filters.search }}\">
            </div>
            <div class=\"col-6 col-sm-6 col-md-2\">
                <label class=\"form-label fw-bold small\">📊 Statut</label>
                <select id=\"statusSelect\" class=\"form-select form-select-sm\">
                    <option value=\"all\" {% if filters.status == 'all' %}selected{% endif %}>Tous</option>
                    <option value=\"pending\" {% if filters.status == 'pending' %}selected{% endif %}>⏳ En attente</option>
                    <option value=\"approved\" {% if filters.status == 'approved' %}selected{% endif %}>✓ Approuvés</option>
                    <option value=\"completed\" {% if filters.status == 'completed' %}selected{% endif %}>✅ Remboursés</option>
                    <option value=\"rejected\" {% if filters.status == 'rejected' %}selected{% endif %}>❌ Rejetés</option>
                </select>
            </div>
            <div class=\"col-6 col-sm-6 col-md-2\">
                <label class=\"form-label fw-bold small\">👤 Enregistré par</label>
                <select id=\"userSelect\" class=\"form-select form-select-sm select2\">
                    <option value=\"\">Tous</option>
                    {% for user in users %}
                        <option value=\"{{ user.id }}\" {% if filters.user_id == user.id %}selected{% endif %}>
                            {{ user.fullName|u.truncate(15) }}
                        </option>
                    {% endfor %}
                </select>
            </div>
            <div class=\"col-6 col-sm-6 col-md-2\">
                <label class=\"form-label fw-bold small\">📅 Date début</label>
                <input type=\"date\" id=\"dateFrom\" class=\"form-control form-control-sm\" value=\"{{ filters.date_from }}\">
            </div>
            <div class=\"col-6 col-sm-6 col-md-2\">
                <label class=\"form-label fw-bold small\">📅 Date fin</label>
                <input type=\"date\" id=\"dateTo\" class=\"form-control form-control-sm\" value=\"{{ filters.date_to }}\">
            </div>
        </div>
    </div>

    <!-- Tableau des retours -->
    <div class=\"card shadow-sm\">
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <form id=\"multiplePrintForm\" action=\"{{ path('returns_print_multiple_receipts') }}\" method=\"POST\" target=\"_blank\">
                    <table class=\"table table-hover mb-0 returns-table\">
                        <thead class=\"table-light\">
                            <tr>
                                <th class=\"text-center\" style=\"width:30px\">
                                    <input type=\"checkbox\" id=\"selectAllCheckbox\" class=\"select-all-checkbox\">
                                </th>
                                <th style=\"min-width:80px\">N° Retour</th>
                                <th style=\"min-width:90px\" class=\"d-none d-sm-table-cell\">N° Commande</th>
                                <th style=\"min-width:120px\">Client</th>
                                <th style=\"min-width:80px\" class=\"d-none d-md-table-cell\">Date</th>
                                <th style=\"min-width:80px\" class=\"text-end\">Montant</th>
                                <th style=\"min-width:80px\" class=\"d-none d-lg-table-cell\">Motif</th>
                                <th style=\"min-width:100px\" class=\"d-none d-xl-table-cell\">Enregistré par</th>
                                <th style=\"min-width:80px\">Statut</th>
                                <th style=\"min-width:120px\" class=\"text-center\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for return in returns %}
                                <tr class=\"return-row\" data-href=\"{{ path('returns_show', {'id': return.id}) }}\">
                                    <td class=\"text-center\" onclick=\"event.stopPropagation()\">
                                        <input type=\"checkbox\" name=\"return_ids[]\" value=\"{{ return.id }}\" class=\"return-checkbox\">
                                    </td>
                                    <td>
                                        <strong class=\"text-primary small\">{{ return.returnNumber }}</strong>
                                    </td>
                                    <td class=\"d-none d-sm-table-cell\">
                                        <code class=\"small\">{{ return.orderNumber }}</code>
                                    </td>
                                    <td>
                                        <div class=\"customer-info\">
                                            <div class=\"customer-name\">{{ return.customerName ?: 'Non renseigné' }}</div>
                                            <div class=\"customer-phone\">
                                                <i class=\"fas fa-phone me-1\"></i>{{ return.customerPhone }}
                                            </div>
                                        </div>
                                    </td>
                                    <td class=\"d-none d-md-table-cell\">
                                        {{ return.createdAt|date('d/m/Y') }}
                                        <br>
                                        <small class=\"text-muted\">{{ return.createdAt|date('H:i') }}</small>
                                    </td>
                                    <td class=\"text-end\">
                                        <strong class=\"small\">{{ return.totalRefundAmount|number_format(0, ',', ' ') }} FCFA</strong>
                                    </td>
                                    <td class=\"d-none d-lg-table-cell\">
                                        <span class=\"reason-badge\">
                                            {{ reasons[return.reason]|default(return.reason)|u.truncate(12) }}
                                        </span>
                                    </td>
                                    <td class=\"d-none d-xl-table-cell\">
                                        <div class=\"d-flex align-items-center\">
                                            {% if return.returnedBy.photo %}
                                                <img src=\"{{ asset('uploads/users/' ~ return.returnedBy.photo) }}\" class=\"rounded-circle me-2\" width=\"24\" height=\"24\">
                                            {% else %}
                                                <div class=\"bg-secondary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-2\" style=\"width: 24px; height: 24px;\">
                                                    <i class=\"fas fa-user text-secondary small\"></i>
                                                </div>
                                            {% endif %}
                                            <div>
                                                <small>{{ return.returnedBy.fullName|u.truncate(12) }}</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class=\"text-center\">
                                        {% if return.status == 'pending' %}
                                            <span class=\"status-badge status-pending\">En attente</span>
                                        {% elseif return.status == 'approved' %}
                                            <span class=\"status-badge status-approved\">Approuvé</span>
                                        {% elseif return.status == 'completed' %}
                                            <span class=\"status-badge status-completed\">Remboursé</span>
                                        {% elseif return.status == 'rejected' %}
                                            <span class=\"status-badge status-rejected\">Rejeté</span>
                                        {% endif %}
                                    </td>
                                    <td class=\"text-center\" onclick=\"event.stopPropagation()\">
                                        <div class=\"btn-group\" role=\"group\">
                                            <a href=\"{{ path('returns_show', {'id': return.id}) }}\" class=\"btn btn-sm btn-outline-primary\" title=\"Voir\">
                                                <i class=\"fas fa-eye\"></i>
                                            </a>
                                            <a href=\"{{ path('returns_print_receipt', {'id': return.id}) }}\" class=\"btn btn-sm btn-outline-info\" title=\"Imprimer\" target=\"_blank\">
                                                <i class=\"fas fa-print\"></i>
                                            </a>
                                            {% if return.status == 'pending' and (is_granted('ROLE_ADMIN') or is_granted('ROLE_MANAGER')) %}
                                                <button type=\"button\" class=\"btn btn-sm btn-outline-success approve-return\" 
                                                        data-id=\"{{ return.id }}\" data-number=\"{{ return.returnNumber }}\" title=\"Approuver\">
                                                    <i class=\"fas fa-check\"></i>
                                                </button>
                                                <button type=\"button\" class=\"btn btn-sm btn-outline-danger reject-return\" 
                                                        data-id=\"{{ return.id }}\" data-number=\"{{ return.returnNumber }}\" title=\"Rejeter\">
                                                    <i class=\"fas fa-times\"></i>
                                                </button>
                                            {% endif %}
                                            {% if return.status == 'approved' and (is_granted('ROLE_ADMIN') or is_granted('ROLE_MANAGER')) %}
                                                <button type=\"button\" class=\"btn btn-sm btn-outline-success complete-return\" 
                                                        data-id=\"{{ return.id }}\" data-number=\"{{ return.returnNumber }}\" title=\"Confirmer remboursement\">
                                                    <i class=\"fas fa-money-bill-wave\"></i>
                                                </button>
                                            {% endif %}
                                        </div>
                                    </td>
                                </tr>
                            {% else %}
                                <tr>
                                    <td colspan=\"10\" class=\"text-center py-4 py-md-5\">
                                        <i class=\"fas fa-inbox fa-2x fa-md-3x text-muted mb-3\"></i>
                                        <p class=\"text-muted mb-0 small\">Aucun retour trouvé</p>
                                    </td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
        {% if totalPages > 1 %}
        <div class=\"card-footer bg-white py-2 py-md-3\">
            <nav aria-label=\"Pagination\">
                <ul class=\"pagination pagination-sm justify-content-center mb-0\">
                    {% set maxVisible = 5 %}
                    {% set startPage = max(1, currentPage - 2) %}
                    {% set endPage = min(totalPages, startPage + maxVisible - 1) %}
                    {% if endPage - startPage < maxVisible - 1 %}
                        {% set startPage = max(1, endPage - maxVisible + 1) %}
                    {% endif %}
                    
                    {% if startPage > 1 %}
                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"#\" data-page=\"1\">1</a>
                        </li>
                        {% if startPage > 2 %}
                            <li class=\"page-item disabled\"><span class=\"page-link\">…</span></li>
                        {% endif %}
                    {% endif %}
                    
                    {% for i in startPage..endPage %}
                        <li class=\"page-item {% if i == currentPage %}active{% endif %}\">
                            <a class=\"page-link\" href=\"#\" data-page=\"{{ i }}\">{{ i }}</a>
                        </li>
                    {% endfor %}
                    
                    {% if endPage < totalPages %}
                        {% if endPage < totalPages - 1 %}
                            <li class=\"page-item disabled\"><span class=\"page-link\">…</span></li>
                        {% endif %}
                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"#\" data-page=\"{{ totalPages }}\">{{ totalPages }}</a>
                        </li>
                    {% endif %}
                </ul>
            </nav>
        </div>
        {% endif %}
    </div>
</div>

<!-- Modal de sélection de commande -->
<div class=\"modal fade\" id=\"selectOrderModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-primary text-white\">
                <h5 class=\"modal-title fs-6 fs-md-5\">
                    <i class=\"fas fa-search me-2\"></i> Sélectionner une commande
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"border-0 shadow-sm mb-3\" style=\"background-color: #fef3c7; border-left: 4px solid #f59e0b; padding: 0.5rem 0.75rem; border-radius: 8px;\">
                    <div class=\"d-flex\">
                        <div class=\"me-2\">
                            <i class=\"fas fa-info-circle fa-1x fa-md-2x text-warning\"></i>
                        </div>
                        <div>
                            <strong class=\"d-block small\">Retours multiples autorisés !</strong>
                            <small class=\"small\">Les commandes avec un retour en cours peuvent encore être retournées s'il reste des quantités.</small>
                        </div>
                    </div>
                </div>
                
                <div class=\"mb-3\">
                    <label class=\"form-label fw-bold small\">Rechercher par numéro de commande ou téléphone</label>
                    <div class=\"input-group input-group-sm\">
                        <input type=\"text\" id=\"orderSearchInput\" class=\"form-control form-control-sm\" placeholder=\"Ex: VENTE-20241215-ABC123 ou 691234567\" autocomplete=\"off\">
                        <button class=\"btn btn-primary btn-sm\" id=\"searchOrderBtn\">
                            <i class=\"fas fa-search\"></i> Rechercher
                        </button>
                    </div>
                    <small class=\"text-muted mt-1 d-block small\">Saisissez au moins 3 caractères</small>
                </div>
                <div id=\"orderSearchResults\" style=\"max-height: 400px; overflow-y: auto;\">
                    <div class=\"text-center text-muted py-4\">
                        <i class=\"fas fa-search fa-2x mb-2\"></i>
                        <p class=\"small\">Recherchez une commande pour créer un retour</p>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer py-2\">
                <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-bs-dismiss=\"modal\">Fermer</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Confirmer remboursement -->
<div class=\"modal fade\" id=\"confirmCompleteModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content\">
            <div class=\"modal-body text-center p-3 p-md-4\">
                <div class=\"confirm-modal-icon warning\">
                    <i class=\"fas fa-money-bill-wave\"></i>
                </div>
                <h4 class=\"mb-2 fs-6 fs-md-5\">Confirmer le remboursement</h4>
                <p class=\"text-muted mb-3 small\">Êtes-vous sûr de vouloir confirmer le remboursement du retour <strong id=\"completeReturnNumber\"></strong> ?</p>
                <p class=\"small text-warning mb-0\">⚠️ Cette action remettra les produits en stock.</p>
            </div>
            <div class=\"modal-footer justify-content-center border-0 pt-0 py-2\">
                <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-warning btn-sm\" id=\"confirmCompleteBtn\">Confirmer</button>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/fr.js\"></script>
<script>
\$(document).ready(function() {
    \$('.select2').select2({
        theme: 'bootstrap-5',
        language: 'fr',
        width: '100%',
        dropdownAutoWidth: true
    });

    \$('#filterPendingBtn').click(function() {
        \$('#statusSelect').val('pending').trigger('change');
        \$('#applyFiltersBtn').click();
    });

    // === GESTION DES CASES À COCHER ===
    function updatePrintButtonState() {
        var checkedCount = \$('.return-checkbox:checked').length;
        \$('#printSelectedBtn').prop('disabled', checkedCount === 0);
    }

    \$('#selectAllCheckbox').change(function() {
        \$('.return-checkbox').prop('checked', \$(this).prop('checked'));
        updatePrintButtonState();
    });

    \$(document).on('change', '.return-checkbox', function() {
        updatePrintButtonState();
        var allChecked = \$('.return-checkbox:checked').length === \$('.return-checkbox').length;
        \$('#selectAllCheckbox').prop('checked', allChecked);
    });

    \$('#printSelectedBtn').click(function() {
        var checkedCount = \$('.return-checkbox:checked').length;
        if (checkedCount === 0) {
            alert('Veuillez sélectionner au moins un retour à imprimer.');
            return;
        }
        \$('#multiplePrintForm').submit();
    });

    // === RECHERCHE DE COMMANDE ===
    let searchTimeout;
    let newReturnBaseUrl = \"{{ path('returns_new', {'orderId': 'ID_PLACEHOLDER'}) }}\".replace('ID_PLACEHOLDER', '');

    function escapeHtml(text) {
        if (!text) return '';
        let div = document.createElement('div');
        div.textContent = text;
        return div.innerHTML;
    }

    function searchOrders() {
        let search = \$('#orderSearchInput').val();
        if (search.length < 3) {
            \$('#orderSearchResults').html(`
                <div class=\"text-center text-muted py-4\">
                    <i class=\"fas fa-search fa-2x mb-2\"></i>
                    <p class=\"small\">Saisissez au moins 3 caractères pour rechercher</p>
                </div>
            `);
            return;
        }
        
        \$('#orderSearchResults').html(`
            <div class=\"text-center py-4\">
                <div class=\"spinner-border text-primary\"></div>
                <p class=\"mt-2 small\">Recherche en cours...</p>
            </div>
        `);
        
        \$.ajax({
            url: '{{ path('returns_search_orders') }}?q=' + encodeURIComponent(search),
            method: 'GET',
            success: function(orders) {
                if (orders.length === 0) {
                    \$('#orderSearchResults').html(`
                        <div class=\"text-center text-muted py-4\">
                            <i class=\"fas fa-inbox fa-2x mb-2\"></i>
                            <p class=\"small\">Aucune commande trouvée</p>
                            <small class=\"small\">Vérifiez le numéro ou essayez avec le téléphone</small>
                        </div>
                    `);
                    return;
                }
                
                let html = '<div class=\"list-group\">';
                orders.forEach(function(order) {
                    let returnInfo = '';
                    if (order.has_return) {
                        returnInfo = `
                            <div class=\"mt-2\">
                                <span class=\"badge bg-warning me-1 small\">
                                    <i class=\"fas fa-undo-alt me-1\"></i>Retour en cours
                                </span>
                                \${order.remaining_items > 0 ? 
                                    `<span class=\"badge bg-info small\">
                                        <i class=\"fas fa-boxes me-1\"></i>\${order.remaining_items} article(s) retournable(s)
                                    </span>` : 
                                    `<span class=\"badge bg-danger small\">
                                        <i class=\"fas fa-ban me-1\"></i>Plus rien à retourner
                                    </span>`
                                }
                            </div>
                        `;
                    }
                    
                    let returnUrl = newReturnBaseUrl + order.id;
                    let isDisabled = order.has_return && order.remaining_items === 0;
                    
                    html += `
                        <a href=\"\${returnUrl}\" 
                        class=\"list-group-item list-group-item-action order-result-item \${order.has_return ? 'has-return' : ''}\" 
                        \${isDisabled ? 'onclick=\"return false;\" style=\"opacity:0.6; cursor:not-allowed;\"' : ''}>
                            <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center flex-wrap gap-2\">
                                <div class=\"flex-grow-1\">
                                    <div>
                                        <strong class=\"text-primary small\">\${escapeHtml(order.order_number)}</strong>
                                    </div>
                                    <div class=\"mt-1\">
                                        <i class=\"fas fa-user text-muted me-1 small\"></i>
                                        <strong class=\"small\">\${escapeHtml(order.customer_name || 'Client non renseigné')}</strong>
                                        \${order.customer_phone ? '<br><small class=\"text-muted\"><i class=\"fas fa-phone me-1\"></i>' + escapeHtml(order.customer_phone) + '</small>' : ''}
                                    </div>
                                    \${returnInfo}
                                </div>
                                <div class=\"text-end\">
                                    <div class=\"small text-muted\">
                                        <i class=\"fas fa-calendar me-1\"></i>\${new Date(order.created_at).toLocaleDateString('fr-FR')}
                                    </div>
                                    <div class=\"mt-1\">
                                        <strong class=\"text-success fs-6\">\${order.total_amount.toLocaleString('fr-FR')} FCFA</strong>
                                    </div>
                                    \${order.already_returned_amount > 0 ? 
                                        `<small class=\"text-warning small\">Déjà retourné: \${order.already_returned_amount.toLocaleString('fr-FR')} FCFA</small>` : ''
                                    }
                                </div>
                            </div>
                        </a>
                    `;
                });
                html += '</div>';
                \$('#orderSearchResults').html(html);
                
                \$('.order-result-item.has-return').click(function(e) {
                    let hasRemaining = \$(this).find('.badge.bg-info').length > 0;
                    if (!hasRemaining) {
                        e.preventDefault();
                        alert('Cette commande a déjà été entièrement retournée. Aucun article restant à retourner.');
                    }
                });
            },
            error: function() {
                \$('#orderSearchResults').html(`
                    <div class=\"text-center text-danger py-4\">
                        <i class=\"fas fa-exclamation-triangle fa-2x mb-2\"></i>
                        <p class=\"small\">Erreur lors de la recherche</p>
                        <small class=\"small\">Veuillez réessayer</small>
                    </div>
                `);
            }
        });
    }

    \$('#searchOrderBtn').click(searchOrders);
    \$('#orderSearchInput').keypress(function(e) {
        if (e.key === 'Enter') { e.preventDefault(); searchOrders(); }
    });
    \$('#orderSearchInput').on('input', function() {
        clearTimeout(searchTimeout);
        searchTimeout = setTimeout(searchOrders, 500);
    });
    \$('#selectOrderModal').on('shown.bs.modal', function() {
        \$('#orderSearchInput').val('').focus();
        \$('#orderSearchResults').html(`
            <div class=\"text-center text-muted py-4\">
                <i class=\"fas fa-search fa-2x mb-2\"></i>
                <p class=\"small\">Recherchez une commande pour créer un retour</p>
            </div>
        `);
    });

    // === FILTRES ===
    function applyFilters() {
        let params = new URLSearchParams();
        let search = \$('#searchInput').val();
        let status = \$('#statusSelect').val();
        let userId = \$('#userSelect').val();
        let dateFrom = \$('#dateFrom').val();
        let dateTo = \$('#dateTo').val();
        
        if (search) params.append('search', search);
        if (status && status !== 'all') params.append('status', status);
        if (userId) params.append('user_id', userId);
        if (dateFrom) params.append('date_from', dateFrom);
        if (dateTo) params.append('date_to', dateTo);
        
        window.location.href = '{{ path('returns_index') }}?' + params.toString();
    }

    \$('#applyFiltersBtn').click(applyFilters);
    \$('#resetFiltersBtn').click(function() {
        window.location.href = '{{ path('returns_index') }}';
    });

    // === PAGINATION ===
    \$('.page-link').click(function(e) {
        e.preventDefault();
        let page = \$(this).data('page');
        let params = new URLSearchParams(window.location.search);
        params.set('page', page);
        window.location.href = '{{ path('returns_index') }}?' + params.toString();
    });

    // === LIGNE CLIQUABLE ===
    \$('.return-row').click(function(e) {
        if (!\$(e.target).closest('.btn-group').length && !\$(e.target).closest('a').length && !\$(e.target).closest('input[type=\"checkbox\"]').length) {
            window.location.href = \$(this).data('href');
        }
    });

    // === ACTIONS ===
    let currentReturnId = null;
    let currentReturnNumber = null;
    let isProcessing = false;

    \$('.approve-return').click(function(e) {
        e.stopPropagation();
        currentReturnId = \$(this).data('id');
        currentReturnNumber = \$(this).data('number');
        if (confirm('Approuver le retour ' + currentReturnNumber + ' ?')) {
            \$.ajax({
                url: '/returns/' + currentReturnId + '/approve',
                method: 'POST',
                success: function(response) {
                    if (response.success) location.reload();
                    else alert(response.error || 'Erreur');
                },
                error: function() { alert('Erreur'); }
            });
        }
    });

    \$('.reject-return').click(function(e) {
        e.stopPropagation();
        currentReturnId = \$(this).data('id');
        currentReturnNumber = \$(this).data('number');
        let reason = prompt('Motif du rejet :');
        if (reason !== null) {
            \$.ajax({
                url: '/returns/' + currentReturnId + '/reject',
                method: 'POST',
                data: { reason: reason },
                success: function(response) {
                    if (response.success) location.reload();
                    else alert(response.error || 'Erreur');
                },
                error: function() { alert('Erreur'); }
            });
        }
    });

    \$('.complete-return').click(function(e) {
        e.stopPropagation();
        currentReturnId = \$(this).data('id');
        currentReturnNumber = \$(this).data('number');
        \$('#completeReturnNumber').text(currentReturnNumber);
        \$('#confirmCompleteModal').modal({backdrop: 'static', keyboard: false}).modal('show');
    });

    \$('#confirmCompleteBtn').click(function() {
        if (isProcessing) return;
        var \$btn = \$(this);
        isProcessing = true;
        \$btn.prop('disabled', true).html('<span class=\"spinner-border spinner-border-sm me-2\"></span>');
        
        \$.ajax({
            url: '/returns/' + currentReturnId + '/complete',
            method: 'POST',
            success: function(response) {
                if (response.success) location.reload();
                else { alert(response.error || 'Erreur'); resetAndHide(\$btn, '#confirmCompleteModal'); }
            },
            error: function() { alert('Erreur'); resetAndHide(\$btn, '#confirmCompleteModal'); }
        });
    });

    function resetAndHide(\$btn, modalId) {
        isProcessing = false;
        \$btn.prop('disabled', false).html('Confirmer');
        \$(modalId).modal('hide');
    }
    
    \$('#confirmCompleteModal').on('hidden.bs.modal', function() {
        isProcessing = false;
    });
});
</script>
{% endblock %}", "return/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\return\\index.html.twig");
    }
}
