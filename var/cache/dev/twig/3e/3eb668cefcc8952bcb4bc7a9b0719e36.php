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

/* purchase/index.html.twig */
class __TwigTemplate_300f5cf39613d65e4752362b8065b56f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "purchase/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "purchase/index.html.twig"));

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

        yield "Commandes d'achat - HMA Market";
        
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
<link href=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css\" rel=\"stylesheet\">
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
<link href=\"https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css\" rel=\"stylesheet\" />
<style>
    /* ✅ NE PAS REDÉFINIR :root ICI - Utiliser les variables de base.html.twig */
    
    /* --- Styles généraux --- */
    .stat-card {
        transition: transform 0.2s ease;
        border-left: 4px solid var(--primary-color);
        cursor: pointer;
        height: 100%;
    }
    .stat-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 16px rgba(0,0,0,0.05);
    }
    .stat-card-draft { border-left-color: #6c757d; }
    .stat-card-confirmed { border-left-color: var(--primary-color); }
    .stat-card-received { border-left-color: var(--success-color); }
    .stat-card-cancelled { border-left-color: var(--danger-color); }
    
    .badge-status-draft { background-color: #6c757d; color: white; }
    .badge-status-confirmed { background-color: var(--primary-color); color: white; }
    .badge-status-received { background-color: var(--success-color); color: white; }
    .badge-status-cancelled { background-color: var(--danger-color); color: white; }
    
    .table-hover tbody tr:hover {
        background-color: #f8f9fa;
    }
    
    .equal-height {
        display: flex;
        flex-wrap: wrap;
    }
    .equal-height > [class*='col-'] {
        display: flex;
        flex-direction: column;
    }
    .equal-height .card {
        flex: 1;
    }
    
    .stat-card .icon-bg {
        background-color: rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .stat-card .icon-bg i {
        color: white !important;
        font-size: 1.75rem;
    }
    
    /* Card colors with dynamic variables */
    .stat-card.primary-card .icon-bg { background: var(--primary-color); }
    .stat-card.success-card .icon-bg { background: var(--success-color); }
    .stat-card.danger-card .icon-bg { background: var(--danger-color); }
    .stat-card.warning-card .icon-bg { background: var(--warning-color); }
    .stat-card.info-card .icon-bg { background: var(--info-color); }
    
    .stat-card.primary-card { border-left-color: var(--primary-color); }
    .stat-card.success-card { border-left-color: var(--success-color); }
    .stat-card.danger-card { border-left-color: var(--danger-color); }
    .stat-card.warning-card { border-left-color: var(--warning-color); }
    .stat-card.info-card { border-left-color: var(--info-color); }

    /* --- Styles pour uniformiser tous les champs de filtre --- */
    .form-select, 
    .input-group .form-control, 
    .flatpickr-input, 
    .select2-container--bootstrap-5 .select2-selection {
        border: 1px solid #ced4da !important;
        border-radius: 0.375rem !important;
        background-color: #fff !important;
        height: 38px !important;
        line-height: 1.5 !important;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out !important;
    }
    .form-select:focus, 
    .input-group .form-control:focus, 
    .flatpickr-input:focus, 
    .select2-container--bootstrap-5 .select2-selection:focus-within {
        border-color: #86b7fe !important;
        box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25) !important;
        outline: 0 !important;
    }

    .form-select {
        background-position: right 0.75rem center;
        padding: 0.375rem 2.25rem 0.375rem 0.75rem;
    }

    .input-group .form-control {
        border-left: none !important;
        border-radius: 0 0.375rem 0.375rem 0 !important;
    }
    .input-group-text {
        background-color: #fff;
        border: 1px solid #ced4da;
        border-right: none;
        border-radius: 0.375rem 0 0 0.375rem;
    }

    .flatpickr-input {
        padding: 0.375rem 0.75rem;
    }

    .select2-container--bootstrap-5 .select2-selection {
        padding: 0.375rem 0.75rem !important;
        min-height: 38px !important;
        display: flex !important;
        align-items: center !important;
    }
    .select2-container--bootstrap-5 .select2-selection--single .select2-selection__rendered {
        padding: 0 !important;
        line-height: 1.5 !important;
    }
    .select2-container--bootstrap-5 .select2-selection--single .select2-selection__arrow {
        height: 36px !important;
        top: 0 !important;
        right: 0.75rem !important;
    }
    .select2-container--bootstrap-5 .select2-dropdown {
        border-color: #ced4da !important;
        border-radius: 0.375rem !important;
        overflow: hidden;
    }
    .select2-container--bootstrap-5 .select2-search__field {
        border: 1px solid #ced4da !important;
        border-radius: 0.375rem !important;
        padding: 0.375rem 0.75rem !important;
    }
    .select2-container--bootstrap-5 .select2-results__option {
        padding: 0.375rem 0.75rem !important;
    }
    .select2-container--bootstrap-5 .select2-results__option--highlighted {
        background: var(--primary-color) !important;
        color: white !important;
    }

    .form-label.fw-bold {
        font-size: 0.875rem;
        margin-bottom: 0.25rem;
    }

    /* ✅ Actions column - Correction pour que les boutons prennent toute la largeur */
    .actions-column {
        min-width: 320px;
        max-width: 420px;
        width: 420px;
    }

    .actions-column .btn-group {
        display: flex;
        flex-wrap: nowrap;
        gap: 4px;
        width: 100%;
    }

    .actions-column .btn-group .btn {
        padding: 0.3rem 0.4rem;
        font-size: 0.7rem;
        border-radius: 4px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 3px;
        transition: all 0.2s ease;
        flex: 1;
        min-width: 0;
        white-space: nowrap;
        height: 32px;
        line-height: 1;
    }

    .actions-column .btn-group .btn i {
        font-size: 0.8rem;
        flex-shrink: 0;
    }

    .actions-column .btn-group .btn .btn-label {
        font-size: 0.65rem;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        flex-shrink: 1;
    }

    .actions-column .btn-group .btn:hover {
        transform: translateY(-1px);
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        z-index: 2;
    }

    /* ✅ Version compacte pour les écrans moyens */
    @media (max-width: 1200px) {
        .actions-column {
            min-width: 280px;
            max-width: 350px;
            width: 350px;
        }
        .actions-column .btn-group .btn .btn-label {
            font-size: 0.6rem;
        }
        .actions-column .btn-group .btn {
            padding: 0.2rem 0.3rem;
            font-size: 0.65rem;
            height: 30px;
        }
        .actions-column .btn-group .btn i {
            font-size: 0.75rem;
        }
    }

    /* ✅ Version mobile - seulement les icônes */
    @media (max-width: 992px) {
        .actions-column {
            min-width: 200px;
            max-width: 250px;
            width: 250px;
        }
        .actions-column .btn-group .btn .btn-label {
            display: none;
        }
        .actions-column .btn-group .btn {
            padding: 0.25rem 0.3rem;
            font-size: 0.7rem;
            height: 28px;
            flex: 0 1 auto;
            min-width: 30px;
        }
        .actions-column .btn-group .btn i {
            font-size: 0.85rem;
            margin: 0;
        }
        .actions-column .btn-group {
            gap: 3px;
        }
    }

    @media (max-width: 768px) {
        .actions-column {
            min-width: 160px;
            max-width: 200px;
            width: 200px;
        }
        .actions-column .btn-group .btn {
            padding: 0.2rem 0.25rem;
            font-size: 0.6rem;
            height: 26px;
            min-width: 26px;
        }
        .actions-column .btn-group .btn i {
            font-size: 0.75rem;
        }
        .actions-column .btn-group {
            gap: 2px;
        }
    }

    /* ✅ Tableau amélioré */
    .table-purchases thead th {
        background: #f8fafc;
        border-bottom: 2px solid #e2e8f0;
        font-weight: 600;
        font-size: 0.75rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        color: #64748b;
        padding: 0.75rem 0.75rem;
    }
    
    .table-purchases tbody td {
        padding: 0.6rem 0.75rem;
        vertical-align: middle;
        border-bottom: 1px solid #edf2f7;
    }
    
    .table-purchases tbody tr:hover {
        background-color: #f8fafc;
    }
    
    .purchase-number {
        font-weight: 700;
        color: var(--dark-color);
        font-size: 0.85rem;
    }
    
    .purchase-number .badge {
        font-size: 0.55rem;
        padding: 0.15rem 0.4rem;
        margin-left: 0.3rem;
    }
    
    .supplier-name {
        font-weight: 600;
        color: var(--dark-color);
        font-size: 0.85rem;
    }
    
    .supplier-phone {
        font-size: 0.7rem;
        color: #94a3b8;
    }
    
    .purchase-date {
        font-size: 0.8rem;
        color: #64748b;
    }
    
    .purchase-total {
        font-weight: 700;
        color: var(--primary-color);
        font-size: 0.9rem;
    }
    
    .badge-status {
        padding: 0.25rem 0.6rem;
        border-radius: 20px;
        font-size: 0.7rem;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 0.25rem;
    }
    
    .badge-status i {
        font-size: 0.65rem;
    }

    /* ✅ Empty state */
    .empty-state {
        padding: 3rem 1rem;
    }
    .empty-state i {
        color: #cbd5e1;
    }
    .empty-state p {
        color: #94a3b8;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 355
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

        // line 356
        yield "<div class=\"container-fluid px-4 py-4\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2\">
        <div>
            <h1 class=\"h3 mb-1 text-gray-800 fw-bold\">
                <i class=\"fas fa-truck me-2 text-primary\"></i>Commandes d'achat
            </h1>
            <p class=\"text-muted\">Gérez vos commandes fournisseurs</p>
        </div>
        <div>
            <a href=\"";
        // line 366
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_cart");
        yield "\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus-circle me-2\"></i> Nouvelle commande
            </a>
        </div>
    </div>

    <!-- Cartes de statistiques -->
    <div class=\"row g-4 mb-4 equal-height\">
        <div class=\"col-sm-6 col-md-6 col-lg-4\">
            <div class=\"card shadow-sm stat-card primary-card h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <span class=\"text-primary text-uppercase small fw-bold\">Total commandes</span>
                            <h2 class=\"mb-0 fw-bold\">";
        // line 380
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 380, $this->source); })()), "total_count", [], "any", false, false, false, 380), 0, ",", " "), "html", null, true);
        yield "</h2>
                        </div>
                        <div class=\"icon-bg\">
                            <i class=\"fas fa-file-invoice\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-6 col-md-6 col-lg-2\">
            <div class=\"card shadow-sm stat-card stat-card-draft h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <span class=\"text-secondary text-uppercase small fw-bold\">Brouillon</span>
                            <h2 class=\"mb-0 fw-bold\">";
        // line 395
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["status_counts"]) || array_key_exists("status_counts", $context) ? $context["status_counts"] : (function () { throw new RuntimeError('Variable "status_counts" does not exist.', 395, $this->source); })()), "draft", [], "any", false, false, false, 395), 0, ",", " "), "html", null, true);
        yield "</h2>
                        </div>
                        <div class=\"icon-bg bg-secondary\">
                            <i class=\"fas fa-edit\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-6 col-md-6 col-lg-2\">
            <div class=\"card shadow-sm stat-card stat-card-confirmed h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <span class=\"text-primary text-uppercase small fw-bold\">Confirmé</span>
                            <h2 class=\"mb-0 fw-bold\">";
        // line 410
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["status_counts"]) || array_key_exists("status_counts", $context) ? $context["status_counts"] : (function () { throw new RuntimeError('Variable "status_counts" does not exist.', 410, $this->source); })()), "confirmed", [], "any", false, false, false, 410), 0, ",", " "), "html", null, true);
        yield "</h2>
                        </div>
                        <div class=\"icon-bg bg-primary\">
                            <i class=\"fas fa-check-circle\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-6 col-md-6 col-lg-2\">
            <div class=\"card shadow-sm stat-card stat-card-received h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <span class=\"text-success text-uppercase small fw-bold\">Reçu</span>
                            <h2 class=\"mb-0 fw-bold\">";
        // line 425
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["status_counts"]) || array_key_exists("status_counts", $context) ? $context["status_counts"] : (function () { throw new RuntimeError('Variable "status_counts" does not exist.', 425, $this->source); })()), "received", [], "any", false, false, false, 425), 0, ",", " "), "html", null, true);
        yield "</h2>
                        </div>
                        <div class=\"icon-bg bg-success\">
                            <i class=\"fas fa-check-double\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-6 col-md-6 col-lg-2\">
            <div class=\"card shadow-sm stat-card stat-card-cancelled h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <span class=\"text-danger text-uppercase small fw-bold\">Annulé</span>
                            <h2 class=\"mb-0 fw-bold\">";
        // line 440
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["status_counts"]) || array_key_exists("status_counts", $context) ? $context["status_counts"] : (function () { throw new RuntimeError('Variable "status_counts" does not exist.', 440, $this->source); })()), "cancelled", [], "any", false, false, false, 440), 0, ",", " "), "html", null, true);
        yield "</h2>
                        </div>
                        <div class=\"icon-bg bg-danger\">
                            <i class=\"fas fa-ban\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Carte Montant total -->
    <div class=\"row mb-4\">
        <div class=\"col-12\">
            <div class=\"card shadow-sm stat-card success-card h-100\">
                <div class=\"card-body d-flex justify-content-between align-items-center\">
                    <div>
                        <span class=\"text-success text-uppercase small fw-bold\">Montant total</span>
                        <h2 class=\"mb-0 fw-bold\">";
        // line 458
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 458, $this->source); })()), "total_amount", [], "any", false, false, false, 458), 0, ",", " "), "html", null, true);
        yield " FCFA</h2>
                    </div>
                    <div class=\"icon-bg\">
                        <i class=\"fas fa-money-bill-wave\"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filtres -->
    <div class=\"card shadow-sm mb-4\">
        <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center flex-wrap gap-3\">
            <h5 class=\"mb-0 fw-semibold\">
                <i class=\"fas fa-filter me-2 text-primary\"></i>Filtres
            </h5>
            <div class=\"d-flex gap-2\">
                <a href=\"";
        // line 475
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_index");
        yield "\" class=\"btn btn-outline-secondary btn-sm\">
                    <i class=\"fas fa-undo me-1\"></i> Effacer
                </a>
                <button type=\"submit\" form=\"filter-form\" class=\"btn btn-primary btn-sm\">
                    <i class=\"fas fa-search me-1\"></i> Filtrer
                </button>
            </div>
        </div>
        <div class=\"card-body\">
            <form method=\"get\" id=\"filter-form\" class=\"row g-3\">
                <div class=\"col-md-6 col-lg-3\">
                    <label for=\"search\" class=\"form-label fw-bold small\">
                        <i class=\"fas fa-search text-primary me-1\"></i> Recherche
                    </label>
                    <div class=\"input-group\">
                        <span class=\"input-group-text bg-white border-end-0\">
                            <i class=\"fas fa-search text-muted\"></i>
                        </span>
                        <input type=\"text\" name=\"search\" id=\"search\" value=\"";
        // line 493
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 493, $this->source); })()), "search", [], "any", false, false, false, 493), "html", null, true);
        yield "\" 
                            class=\"form-control border-start-0\" placeholder=\"N° commande, fournisseur...\">
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-2\">
                    <label for=\"status\" class=\"form-label fw-bold small\">
                        <i class=\"fas fa-tag text-primary me-1\"></i> Statut
                    </label>
                    <select name=\"status\" id=\"status\" class=\"form-select\">
                        <option value=\"\">Tous</option>
                        ";
        // line 503
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["statuses"]) || array_key_exists("statuses", $context) ? $context["statuses"] : (function () { throw new RuntimeError('Variable "statuses" does not exist.', 503, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["label"]) {
            // line 504
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 504, $this->source); })()), "status", [], "any", false, false, false, 504) == $context["key"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['label'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 506
        yield "                    </select>
                </div>
                <div class=\"col-md-6 col-lg-2\">
                    <label for=\"supplier_id\" class=\"form-label fw-bold small\">
                        <i class=\"fas fa-truck text-primary me-1\"></i> Fournisseur
                    </label>
                    <select name=\"supplier_id\" id=\"supplier_id\" class=\"form-select select2\">
                        <option value=\"\">Tous</option>
                        ";
        // line 514
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["suppliers"]) || array_key_exists("suppliers", $context) ? $context["suppliers"] : (function () { throw new RuntimeError('Variable "suppliers" does not exist.', 514, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["supplier"]) {
            // line 515
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "id", [], "any", false, false, false, 515), "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 515, $this->source); })()), "supplier_id", [], "any", false, false, false, 515) == CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "id", [], "any", false, false, false, 515))) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "name", [], "any", false, false, false, 515), "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['supplier'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 517
        yield "                    </select>
                </div>
                <div class=\"col-md-6 col-lg-2\">
                    <label for=\"start_date\" class=\"form-label fw-bold small\">
                        <i class=\"fas fa-calendar-alt text-primary me-1\"></i> Date début
                    </label>
                    <input type=\"text\" name=\"start_date\" id=\"start_date\" class=\"form-control datepicker\" 
                        placeholder=\"jj/mm/aaaa\" value=\"";
        // line 524
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 524, $this->source); })()), "start_date", [], "any", false, false, false, 524), "html", null, true);
        yield "\">
                </div>
                <div class=\"col-md-6 col-lg-3\">
                    <label for=\"end_date\" class=\"form-label fw-bold small\">
                        <i class=\"fas fa-calendar-alt text-primary me-1\"></i> Date fin
                    </label>
                    <input type=\"text\" name=\"end_date\" id=\"end_date\" class=\"form-control datepicker\" 
                        placeholder=\"jj/mm/aaaa\" value=\"";
        // line 531
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 531, $this->source); })()), "end_date", [], "any", false, false, false, 531), "html", null, true);
        yield "\">
                </div>
            </form>
        </div>
    </div>

    <!-- Tableau des commandes -->
    <div class=\"card shadow-sm\">
        <div class=\"card-header bg-white py-3\">
            <div class=\"d-flex justify-content-between align-items-center flex-wrap gap-2\">
                <h5 class=\"mb-0\"><i class=\"fas fa-list me-2\"></i>Commandes</h5>
                <span class=\"badge bg-secondary\">";
        // line 542
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "total_items", [], "any", true, true, false, 542)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 542, $this->source); })()), "total_items", [], "any", false, false, false, 542), 0)) : (0)), "html", null, true);
        yield " commande(s)</span>
            </div>
        </div>
        <div class=\"table-responsive\">
            <table class=\"table table-purchases mb-0 align-middle\">
                <thead>
                    <tr>
                        <th style=\"min-width: 120px;\">N° commande</th>
                        <th style=\"min-width: 160px;\">Fournisseur</th>
                        <th style=\"min-width: 110px;\">Date</th>
                        <th style=\"min-width: 110px;\">Total</th>
                        <th style=\"min-width: 100px;\">Statut</th>
                        <th class=\"actions-column\">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 558
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["purchases"]) || array_key_exists("purchases", $context) ? $context["purchases"] : (function () { throw new RuntimeError('Variable "purchases" does not exist.', 558, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["purchase"]) {
            // line 559
            yield "                        <tr>
                            <td>
                                <div class=\"purchase-number\">
                                    ";
            // line 562
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "purchaseNumber", [], "any", false, false, false, 562), "html", null, true);
            yield "
                                    ";
            // line 563
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "status", [], "any", false, false, false, 563) == "draft")) {
                // line 564
                yield "                                        <span class=\"badge bg-secondary\">Brouillon</span>
                                    ";
            }
            // line 566
            yield "                                </div>
                            </td>
                            <td>
                                ";
            // line 569
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "supplier", [], "any", false, false, false, 569)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 570
                yield "                                    <div class=\"supplier-name\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "supplier", [], "any", false, false, false, 570), "name", [], "any", false, false, false, 570), "html", null, true);
                yield "</div>
                                    <div class=\"supplier-phone\">
                                        <i class=\"fas fa-phone me-1\"></i>";
                // line 572
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "supplier", [], "any", false, false, false, 572), "phone", [], "any", false, false, false, 572), "html", null, true);
                yield "
                                    </div>
                                ";
            } else {
                // line 575
                yield "                                    <span class=\"text-muted\">-</span>
                                ";
            }
            // line 577
            yield "                            </td>
                            <td>
                                <div class=\"purchase-date\">
                                    <i class=\"far fa-calendar-alt me-1\"></i>
                                    ";
            // line 581
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "createdAt", [], "any", false, false, false, 581), "d/m/Y H:i"), "html", null, true);
            yield "
                                </div>
                            </td>
                            <td>
                                <div class=\"purchase-total\">
                                    ";
            // line 586
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "totalAmount", [], "any", false, false, false, 586), 0, ",", " "), "html", null, true);
            yield " FCFA
                                </div>
                            </td>
                            <td>
                                <span class=\"badge-status badge-status-";
            // line 590
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "status", [], "any", false, false, false, 590), "html", null, true);
            yield "\">
                                    <i class=\"fas ";
            // line 591
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "statusIcon", [], "any", false, false, false, 591), "html", null, true);
            yield " me-1\"></i>
                                    ";
            // line 592
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "statusLabel", [], "any", false, false, false, 592), "html", null, true);
            yield "
                                </span>
                            </td>
                            <td>
                                <div class=\"btn-group\">
                                    <a href=\"";
            // line 597
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "id", [], "any", false, false, false, 597)]), "html", null, true);
            yield "\" class=\"btn btn-outline-info\" title=\"Voir\">
                                        <i class=\"fas fa-eye\"></i>
                                        <span class=\"btn-label\">Voir</span>
                                    </a>
                                    <a href=\"";
            // line 601
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_print", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "id", [], "any", false, false, false, 601)]), "html", null, true);
            yield "\" class=\"btn btn-outline-secondary\" title=\"Imprimer\" target=\"_blank\">
                                        <i class=\"fas fa-print\"></i>
                                        <span class=\"btn-label\">Imprimer</span>
                                    </a>
                                    ";
            // line 605
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "bonCommande", [], "any", false, false, false, 605)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 606
                yield "                                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/bons-commande/" . CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "bonCommande", [], "any", false, false, false, 606))), "html", null, true);
                yield "\" class=\"btn btn-outline-primary\" target=\"_blank\" title=\"Bon de commande\">
                                            <i class=\"fas fa-file-pdf\"></i>
                                            <span class=\"btn-label\">Bon</span>
                                        </a>
                                    ";
            }
            // line 611
            yield "                                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "recuAchat", [], "any", false, false, false, 611) && ((CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "status", [], "any", false, false, false, 611) == "confirmed") || (CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "status", [], "any", false, false, false, 611) == "received")))) {
                // line 612
                yield "                                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/recus-achat/" . CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "recuAchat", [], "any", false, false, false, 612))), "html", null, true);
                yield "\" class=\"btn btn-outline-success\" target=\"_blank\" title=\"Reçu\">
                                            <i class=\"fas fa-file-pdf\"></i>
                                            <span class=\"btn-label\">Reçu</span>
                                        </a>
                                    ";
            }
            // line 617
            yield "                                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "status", [], "any", false, false, false, 617) == "confirmed")) {
                // line 618
                yield "                                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_receive", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "id", [], "any", false, false, false, 618)]), "html", null, true);
                yield "\" class=\"btn btn-outline-success\" title=\"Réceptionner\">
                                            <i class=\"fas fa-box-open\"></i>
                                            <span class=\"btn-label\">Récep.</span>
                                        </a>
                                    ";
            }
            // line 623
            yield "                                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "canCancel", [], "any", false, false, false, 623)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 624
                yield "                                        <button type=\"button\" class=\"btn btn-outline-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#cancelModal";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "id", [], "any", false, false, false, 624), "html", null, true);
                yield "\" title=\"Annuler\">
                                            <i class=\"fas fa-ban\"></i>
                                            <span class=\"btn-label\">Annuler</span>
                                        </button>
                                    ";
            }
            // line 629
            yield "                                </div>

                                <!-- Modal d'annulation -->
                                <div class=\"modal fade\" id=\"cancelModal";
            // line 632
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "id", [], "any", false, false, false, 632), "html", null, true);
            yield "\" tabindex=\"-1\">
                                    <div class=\"modal-dialog modal-dialog-centered\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <h5 class=\"modal-title\">
                                                    <i class=\"fas fa-exclamation-triangle text-danger me-2\"></i>
                                                    Annuler la commande
                                                </h5>
                                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                                            </div>
                                            <form action=\"";
            // line 642
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_cancel", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "id", [], "any", false, false, false, 642)]), "html", null, true);
            yield "\" method=\"POST\">
                                                <div class=\"modal-body\">
                                                    <p>Êtes-vous sûr de vouloir annuler la commande <strong>";
            // line 644
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "purchaseNumber", [], "any", false, false, false, 644), "html", null, true);
            yield "</strong> ?</p>
                                                    <div class=\"mb-3\">
                                                        <label class=\"form-label\">Motif d'annulation *</label>
                                                        <textarea name=\"reason\" class=\"form-control\" rows=\"3\" required placeholder=\"Expliquez la raison de l'annulation...\"></textarea>
                                                    </div>
                                                    <div class=\"alert alert-warning\">
                                                        <i class=\"fas fa-exclamation-triangle me-2\"></i>
                                                        L'annulation enverra une notification au fournisseur.
                                                    </div>
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                                                    <button type=\"submit\" class=\"btn btn-danger\">
                                                        <i class=\"fas fa-ban me-2\"></i> Confirmer l'annulation
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 666
        if (!$context['_iterated']) {
            // line 667
            yield "                        <tr>
                            <td colspan=\"6\" class=\"text-center py-5\">
                                <div class=\"empty-state\">
                                    <i class=\"fas fa-inbox fa-4x text-muted mb-3 d-block\"></i>
                                    <p class=\"text-muted mb-3\">Aucune commande trouvée.</p>
                                    <a href=\"";
            // line 672
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_cart");
            yield "\" class=\"btn btn-primary\">
                                        <i class=\"fas fa-plus-circle me-2\"></i> Créer une commande
                                    </a>
                                </div>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['purchase'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 679
        yield "                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        ";
        // line 684
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 684, $this->source); })()), "total_pages", [], "any", false, false, false, 684) > 1)) {
            // line 685
            yield "        <div class=\"card-footer bg-white\">
            <nav aria-label=\"Pagination\">
                <ul class=\"pagination justify-content-center mb-0\">
                    ";
            // line 688
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 688, $this->source); })()), "current_page", [], "any", false, false, false, 688) > 1)) {
                // line 689
                yield "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
                // line 690
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 690, $this->source); })()), "request", [], "any", false, false, false, 690), "query", [], "any", false, false, false, 690), "all", [], "any", false, false, false, 690), ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 690, $this->source); })()), "current_page", [], "any", false, false, false, 690) - 1)])), "html", null, true);
                yield "\">
                                <i class=\"fas fa-chevron-left\"></i>
                            </a>
                        </li>
                    ";
            }
            // line 695
            yield "
                    ";
            // line 696
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 696, $this->source); })()), "total_pages", [], "any", false, false, false, 696)));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 697
                yield "                        <li class=\"page-item ";
                yield ((($context["p"] == CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 697, $this->source); })()), "current_page", [], "any", false, false, false, 697))) ? ("active") : (""));
                yield "\">
                            <a class=\"page-link\" href=\"";
                // line 698
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 698, $this->source); })()), "request", [], "any", false, false, false, 698), "query", [], "any", false, false, false, 698), "all", [], "any", false, false, false, 698), ["page" => $context["p"]])), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["p"], "html", null, true);
                yield "</a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 701
            yield "
                    ";
            // line 702
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 702, $this->source); })()), "current_page", [], "any", false, false, false, 702) < CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 702, $this->source); })()), "total_pages", [], "any", false, false, false, 702))) {
                // line 703
                yield "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
                // line 704
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 704, $this->source); })()), "request", [], "any", false, false, false, 704), "query", [], "any", false, false, false, 704), "all", [], "any", false, false, false, 704), ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 704, $this->source); })()), "current_page", [], "any", false, false, false, 704) + 1)])), "html", null, true);
                yield "\">
                                <i class=\"fas fa-chevron-right\"></i>
                            </a>
                        </li>
                    ";
            }
            // line 709
            yield "                </ul>
            </nav>
        </div>
        ";
        }
        // line 713
        yield "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 717
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

        // line 718
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/flatpickr\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/fr.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Datepicker
        flatpickr(\".datepicker\", {
            dateFormat: \"d/m/Y\",
            locale: \"fr\",
            allowInput: true
        });

        // Select2 pour le fournisseur
        function initSelect2() {
            if (typeof \$.fn.select2 !== 'undefined') {
                try {
                    \$('#supplier_id').select2({
                        theme: 'bootstrap-5',
                        placeholder: 'Sélectionner un fournisseur',
                        allowClear: true,
                        width: '100%'
                    });
                } catch (e) {
                    console.error('Erreur Select2 :', e);
                }
            } else {
                console.warn('Select2 non chargé, réessai dans 500ms');
                setTimeout(initSelect2, 500);
            }
        }
        initSelect2();

        // Réinitialisation au focus si nécessaire
        \$(document).on('focus', '#supplier_id', function() {
            if (\$(this).data('select2') === undefined) {
                initSelect2();
            }
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
        return "purchase/index.html.twig";
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
        return array (  1056 => 718,  1043 => 717,  1030 => 713,  1024 => 709,  1016 => 704,  1013 => 703,  1011 => 702,  1008 => 701,  997 => 698,  992 => 697,  988 => 696,  985 => 695,  977 => 690,  974 => 689,  972 => 688,  967 => 685,  965 => 684,  958 => 679,  945 => 672,  938 => 667,  936 => 666,  909 => 644,  904 => 642,  891 => 632,  886 => 629,  877 => 624,  874 => 623,  865 => 618,  862 => 617,  853 => 612,  850 => 611,  841 => 606,  839 => 605,  832 => 601,  825 => 597,  817 => 592,  813 => 591,  809 => 590,  802 => 586,  794 => 581,  788 => 577,  784 => 575,  778 => 572,  772 => 570,  770 => 569,  765 => 566,  761 => 564,  759 => 563,  755 => 562,  750 => 559,  745 => 558,  726 => 542,  712 => 531,  702 => 524,  693 => 517,  680 => 515,  676 => 514,  666 => 506,  653 => 504,  649 => 503,  636 => 493,  615 => 475,  595 => 458,  574 => 440,  556 => 425,  538 => 410,  520 => 395,  502 => 380,  485 => 366,  473 => 356,  460 => 355,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/purchase/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Commandes d'achat - HMA Market{% endblock %}

{% block stylesheets %}
{{ parent() }}
<link href=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css\" rel=\"stylesheet\">
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
<link href=\"https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css\" rel=\"stylesheet\" />
<style>
    /* ✅ NE PAS REDÉFINIR :root ICI - Utiliser les variables de base.html.twig */
    
    /* --- Styles généraux --- */
    .stat-card {
        transition: transform 0.2s ease;
        border-left: 4px solid var(--primary-color);
        cursor: pointer;
        height: 100%;
    }
    .stat-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 16px rgba(0,0,0,0.05);
    }
    .stat-card-draft { border-left-color: #6c757d; }
    .stat-card-confirmed { border-left-color: var(--primary-color); }
    .stat-card-received { border-left-color: var(--success-color); }
    .stat-card-cancelled { border-left-color: var(--danger-color); }
    
    .badge-status-draft { background-color: #6c757d; color: white; }
    .badge-status-confirmed { background-color: var(--primary-color); color: white; }
    .badge-status-received { background-color: var(--success-color); color: white; }
    .badge-status-cancelled { background-color: var(--danger-color); color: white; }
    
    .table-hover tbody tr:hover {
        background-color: #f8f9fa;
    }
    
    .equal-height {
        display: flex;
        flex-wrap: wrap;
    }
    .equal-height > [class*='col-'] {
        display: flex;
        flex-direction: column;
    }
    .equal-height .card {
        flex: 1;
    }
    
    .stat-card .icon-bg {
        background-color: rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .stat-card .icon-bg i {
        color: white !important;
        font-size: 1.75rem;
    }
    
    /* Card colors with dynamic variables */
    .stat-card.primary-card .icon-bg { background: var(--primary-color); }
    .stat-card.success-card .icon-bg { background: var(--success-color); }
    .stat-card.danger-card .icon-bg { background: var(--danger-color); }
    .stat-card.warning-card .icon-bg { background: var(--warning-color); }
    .stat-card.info-card .icon-bg { background: var(--info-color); }
    
    .stat-card.primary-card { border-left-color: var(--primary-color); }
    .stat-card.success-card { border-left-color: var(--success-color); }
    .stat-card.danger-card { border-left-color: var(--danger-color); }
    .stat-card.warning-card { border-left-color: var(--warning-color); }
    .stat-card.info-card { border-left-color: var(--info-color); }

    /* --- Styles pour uniformiser tous les champs de filtre --- */
    .form-select, 
    .input-group .form-control, 
    .flatpickr-input, 
    .select2-container--bootstrap-5 .select2-selection {
        border: 1px solid #ced4da !important;
        border-radius: 0.375rem !important;
        background-color: #fff !important;
        height: 38px !important;
        line-height: 1.5 !important;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out !important;
    }
    .form-select:focus, 
    .input-group .form-control:focus, 
    .flatpickr-input:focus, 
    .select2-container--bootstrap-5 .select2-selection:focus-within {
        border-color: #86b7fe !important;
        box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25) !important;
        outline: 0 !important;
    }

    .form-select {
        background-position: right 0.75rem center;
        padding: 0.375rem 2.25rem 0.375rem 0.75rem;
    }

    .input-group .form-control {
        border-left: none !important;
        border-radius: 0 0.375rem 0.375rem 0 !important;
    }
    .input-group-text {
        background-color: #fff;
        border: 1px solid #ced4da;
        border-right: none;
        border-radius: 0.375rem 0 0 0.375rem;
    }

    .flatpickr-input {
        padding: 0.375rem 0.75rem;
    }

    .select2-container--bootstrap-5 .select2-selection {
        padding: 0.375rem 0.75rem !important;
        min-height: 38px !important;
        display: flex !important;
        align-items: center !important;
    }
    .select2-container--bootstrap-5 .select2-selection--single .select2-selection__rendered {
        padding: 0 !important;
        line-height: 1.5 !important;
    }
    .select2-container--bootstrap-5 .select2-selection--single .select2-selection__arrow {
        height: 36px !important;
        top: 0 !important;
        right: 0.75rem !important;
    }
    .select2-container--bootstrap-5 .select2-dropdown {
        border-color: #ced4da !important;
        border-radius: 0.375rem !important;
        overflow: hidden;
    }
    .select2-container--bootstrap-5 .select2-search__field {
        border: 1px solid #ced4da !important;
        border-radius: 0.375rem !important;
        padding: 0.375rem 0.75rem !important;
    }
    .select2-container--bootstrap-5 .select2-results__option {
        padding: 0.375rem 0.75rem !important;
    }
    .select2-container--bootstrap-5 .select2-results__option--highlighted {
        background: var(--primary-color) !important;
        color: white !important;
    }

    .form-label.fw-bold {
        font-size: 0.875rem;
        margin-bottom: 0.25rem;
    }

    /* ✅ Actions column - Correction pour que les boutons prennent toute la largeur */
    .actions-column {
        min-width: 320px;
        max-width: 420px;
        width: 420px;
    }

    .actions-column .btn-group {
        display: flex;
        flex-wrap: nowrap;
        gap: 4px;
        width: 100%;
    }

    .actions-column .btn-group .btn {
        padding: 0.3rem 0.4rem;
        font-size: 0.7rem;
        border-radius: 4px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 3px;
        transition: all 0.2s ease;
        flex: 1;
        min-width: 0;
        white-space: nowrap;
        height: 32px;
        line-height: 1;
    }

    .actions-column .btn-group .btn i {
        font-size: 0.8rem;
        flex-shrink: 0;
    }

    .actions-column .btn-group .btn .btn-label {
        font-size: 0.65rem;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        flex-shrink: 1;
    }

    .actions-column .btn-group .btn:hover {
        transform: translateY(-1px);
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        z-index: 2;
    }

    /* ✅ Version compacte pour les écrans moyens */
    @media (max-width: 1200px) {
        .actions-column {
            min-width: 280px;
            max-width: 350px;
            width: 350px;
        }
        .actions-column .btn-group .btn .btn-label {
            font-size: 0.6rem;
        }
        .actions-column .btn-group .btn {
            padding: 0.2rem 0.3rem;
            font-size: 0.65rem;
            height: 30px;
        }
        .actions-column .btn-group .btn i {
            font-size: 0.75rem;
        }
    }

    /* ✅ Version mobile - seulement les icônes */
    @media (max-width: 992px) {
        .actions-column {
            min-width: 200px;
            max-width: 250px;
            width: 250px;
        }
        .actions-column .btn-group .btn .btn-label {
            display: none;
        }
        .actions-column .btn-group .btn {
            padding: 0.25rem 0.3rem;
            font-size: 0.7rem;
            height: 28px;
            flex: 0 1 auto;
            min-width: 30px;
        }
        .actions-column .btn-group .btn i {
            font-size: 0.85rem;
            margin: 0;
        }
        .actions-column .btn-group {
            gap: 3px;
        }
    }

    @media (max-width: 768px) {
        .actions-column {
            min-width: 160px;
            max-width: 200px;
            width: 200px;
        }
        .actions-column .btn-group .btn {
            padding: 0.2rem 0.25rem;
            font-size: 0.6rem;
            height: 26px;
            min-width: 26px;
        }
        .actions-column .btn-group .btn i {
            font-size: 0.75rem;
        }
        .actions-column .btn-group {
            gap: 2px;
        }
    }

    /* ✅ Tableau amélioré */
    .table-purchases thead th {
        background: #f8fafc;
        border-bottom: 2px solid #e2e8f0;
        font-weight: 600;
        font-size: 0.75rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        color: #64748b;
        padding: 0.75rem 0.75rem;
    }
    
    .table-purchases tbody td {
        padding: 0.6rem 0.75rem;
        vertical-align: middle;
        border-bottom: 1px solid #edf2f7;
    }
    
    .table-purchases tbody tr:hover {
        background-color: #f8fafc;
    }
    
    .purchase-number {
        font-weight: 700;
        color: var(--dark-color);
        font-size: 0.85rem;
    }
    
    .purchase-number .badge {
        font-size: 0.55rem;
        padding: 0.15rem 0.4rem;
        margin-left: 0.3rem;
    }
    
    .supplier-name {
        font-weight: 600;
        color: var(--dark-color);
        font-size: 0.85rem;
    }
    
    .supplier-phone {
        font-size: 0.7rem;
        color: #94a3b8;
    }
    
    .purchase-date {
        font-size: 0.8rem;
        color: #64748b;
    }
    
    .purchase-total {
        font-weight: 700;
        color: var(--primary-color);
        font-size: 0.9rem;
    }
    
    .badge-status {
        padding: 0.25rem 0.6rem;
        border-radius: 20px;
        font-size: 0.7rem;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 0.25rem;
    }
    
    .badge-status i {
        font-size: 0.65rem;
    }

    /* ✅ Empty state */
    .empty-state {
        padding: 3rem 1rem;
    }
    .empty-state i {
        color: #cbd5e1;
    }
    .empty-state p {
        color: #94a3b8;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container-fluid px-4 py-4\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2\">
        <div>
            <h1 class=\"h3 mb-1 text-gray-800 fw-bold\">
                <i class=\"fas fa-truck me-2 text-primary\"></i>Commandes d'achat
            </h1>
            <p class=\"text-muted\">Gérez vos commandes fournisseurs</p>
        </div>
        <div>
            <a href=\"{{ path('purchase_cart') }}\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus-circle me-2\"></i> Nouvelle commande
            </a>
        </div>
    </div>

    <!-- Cartes de statistiques -->
    <div class=\"row g-4 mb-4 equal-height\">
        <div class=\"col-sm-6 col-md-6 col-lg-4\">
            <div class=\"card shadow-sm stat-card primary-card h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <span class=\"text-primary text-uppercase small fw-bold\">Total commandes</span>
                            <h2 class=\"mb-0 fw-bold\">{{ stats.total_count|number_format(0, ',', ' ') }}</h2>
                        </div>
                        <div class=\"icon-bg\">
                            <i class=\"fas fa-file-invoice\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-6 col-md-6 col-lg-2\">
            <div class=\"card shadow-sm stat-card stat-card-draft h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <span class=\"text-secondary text-uppercase small fw-bold\">Brouillon</span>
                            <h2 class=\"mb-0 fw-bold\">{{ status_counts.draft|number_format(0, ',', ' ') }}</h2>
                        </div>
                        <div class=\"icon-bg bg-secondary\">
                            <i class=\"fas fa-edit\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-6 col-md-6 col-lg-2\">
            <div class=\"card shadow-sm stat-card stat-card-confirmed h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <span class=\"text-primary text-uppercase small fw-bold\">Confirmé</span>
                            <h2 class=\"mb-0 fw-bold\">{{ status_counts.confirmed|number_format(0, ',', ' ') }}</h2>
                        </div>
                        <div class=\"icon-bg bg-primary\">
                            <i class=\"fas fa-check-circle\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-6 col-md-6 col-lg-2\">
            <div class=\"card shadow-sm stat-card stat-card-received h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <span class=\"text-success text-uppercase small fw-bold\">Reçu</span>
                            <h2 class=\"mb-0 fw-bold\">{{ status_counts.received|number_format(0, ',', ' ') }}</h2>
                        </div>
                        <div class=\"icon-bg bg-success\">
                            <i class=\"fas fa-check-double\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-6 col-md-6 col-lg-2\">
            <div class=\"card shadow-sm stat-card stat-card-cancelled h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <span class=\"text-danger text-uppercase small fw-bold\">Annulé</span>
                            <h2 class=\"mb-0 fw-bold\">{{ status_counts.cancelled|number_format(0, ',', ' ') }}</h2>
                        </div>
                        <div class=\"icon-bg bg-danger\">
                            <i class=\"fas fa-ban\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Carte Montant total -->
    <div class=\"row mb-4\">
        <div class=\"col-12\">
            <div class=\"card shadow-sm stat-card success-card h-100\">
                <div class=\"card-body d-flex justify-content-between align-items-center\">
                    <div>
                        <span class=\"text-success text-uppercase small fw-bold\">Montant total</span>
                        <h2 class=\"mb-0 fw-bold\">{{ stats.total_amount|number_format(0, ',', ' ') }} FCFA</h2>
                    </div>
                    <div class=\"icon-bg\">
                        <i class=\"fas fa-money-bill-wave\"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filtres -->
    <div class=\"card shadow-sm mb-4\">
        <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center flex-wrap gap-3\">
            <h5 class=\"mb-0 fw-semibold\">
                <i class=\"fas fa-filter me-2 text-primary\"></i>Filtres
            </h5>
            <div class=\"d-flex gap-2\">
                <a href=\"{{ path('purchase_index') }}\" class=\"btn btn-outline-secondary btn-sm\">
                    <i class=\"fas fa-undo me-1\"></i> Effacer
                </a>
                <button type=\"submit\" form=\"filter-form\" class=\"btn btn-primary btn-sm\">
                    <i class=\"fas fa-search me-1\"></i> Filtrer
                </button>
            </div>
        </div>
        <div class=\"card-body\">
            <form method=\"get\" id=\"filter-form\" class=\"row g-3\">
                <div class=\"col-md-6 col-lg-3\">
                    <label for=\"search\" class=\"form-label fw-bold small\">
                        <i class=\"fas fa-search text-primary me-1\"></i> Recherche
                    </label>
                    <div class=\"input-group\">
                        <span class=\"input-group-text bg-white border-end-0\">
                            <i class=\"fas fa-search text-muted\"></i>
                        </span>
                        <input type=\"text\" name=\"search\" id=\"search\" value=\"{{ filters.search }}\" 
                            class=\"form-control border-start-0\" placeholder=\"N° commande, fournisseur...\">
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-2\">
                    <label for=\"status\" class=\"form-label fw-bold small\">
                        <i class=\"fas fa-tag text-primary me-1\"></i> Statut
                    </label>
                    <select name=\"status\" id=\"status\" class=\"form-select\">
                        <option value=\"\">Tous</option>
                        {% for key, label in statuses %}
                            <option value=\"{{ key }}\" {{ filters.status == key ? 'selected' : '' }}>{{ label }}</option>
                        {% endfor %}
                    </select>
                </div>
                <div class=\"col-md-6 col-lg-2\">
                    <label for=\"supplier_id\" class=\"form-label fw-bold small\">
                        <i class=\"fas fa-truck text-primary me-1\"></i> Fournisseur
                    </label>
                    <select name=\"supplier_id\" id=\"supplier_id\" class=\"form-select select2\">
                        <option value=\"\">Tous</option>
                        {% for supplier in suppliers %}
                            <option value=\"{{ supplier.id }}\" {{ filters.supplier_id == supplier.id ? 'selected' : '' }}>{{ supplier.name }}</option>
                        {% endfor %}
                    </select>
                </div>
                <div class=\"col-md-6 col-lg-2\">
                    <label for=\"start_date\" class=\"form-label fw-bold small\">
                        <i class=\"fas fa-calendar-alt text-primary me-1\"></i> Date début
                    </label>
                    <input type=\"text\" name=\"start_date\" id=\"start_date\" class=\"form-control datepicker\" 
                        placeholder=\"jj/mm/aaaa\" value=\"{{ filters.start_date }}\">
                </div>
                <div class=\"col-md-6 col-lg-3\">
                    <label for=\"end_date\" class=\"form-label fw-bold small\">
                        <i class=\"fas fa-calendar-alt text-primary me-1\"></i> Date fin
                    </label>
                    <input type=\"text\" name=\"end_date\" id=\"end_date\" class=\"form-control datepicker\" 
                        placeholder=\"jj/mm/aaaa\" value=\"{{ filters.end_date }}\">
                </div>
            </form>
        </div>
    </div>

    <!-- Tableau des commandes -->
    <div class=\"card shadow-sm\">
        <div class=\"card-header bg-white py-3\">
            <div class=\"d-flex justify-content-between align-items-center flex-wrap gap-2\">
                <h5 class=\"mb-0\"><i class=\"fas fa-list me-2\"></i>Commandes</h5>
                <span class=\"badge bg-secondary\">{{ pagination.total_items|default(0) }} commande(s)</span>
            </div>
        </div>
        <div class=\"table-responsive\">
            <table class=\"table table-purchases mb-0 align-middle\">
                <thead>
                    <tr>
                        <th style=\"min-width: 120px;\">N° commande</th>
                        <th style=\"min-width: 160px;\">Fournisseur</th>
                        <th style=\"min-width: 110px;\">Date</th>
                        <th style=\"min-width: 110px;\">Total</th>
                        <th style=\"min-width: 100px;\">Statut</th>
                        <th class=\"actions-column\">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for purchase in purchases %}
                        <tr>
                            <td>
                                <div class=\"purchase-number\">
                                    {{ purchase.purchaseNumber }}
                                    {% if purchase.status == 'draft' %}
                                        <span class=\"badge bg-secondary\">Brouillon</span>
                                    {% endif %}
                                </div>
                            </td>
                            <td>
                                {% if purchase.supplier %}
                                    <div class=\"supplier-name\">{{ purchase.supplier.name }}</div>
                                    <div class=\"supplier-phone\">
                                        <i class=\"fas fa-phone me-1\"></i>{{ purchase.supplier.phone }}
                                    </div>
                                {% else %}
                                    <span class=\"text-muted\">-</span>
                                {% endif %}
                            </td>
                            <td>
                                <div class=\"purchase-date\">
                                    <i class=\"far fa-calendar-alt me-1\"></i>
                                    {{ purchase.createdAt|date('d/m/Y H:i') }}
                                </div>
                            </td>
                            <td>
                                <div class=\"purchase-total\">
                                    {{ purchase.totalAmount|number_format(0, ',', ' ') }} FCFA
                                </div>
                            </td>
                            <td>
                                <span class=\"badge-status badge-status-{{ purchase.status }}\">
                                    <i class=\"fas {{ purchase.statusIcon }} me-1\"></i>
                                    {{ purchase.statusLabel }}
                                </span>
                            </td>
                            <td>
                                <div class=\"btn-group\">
                                    <a href=\"{{ path('purchase_show', {id: purchase.id}) }}\" class=\"btn btn-outline-info\" title=\"Voir\">
                                        <i class=\"fas fa-eye\"></i>
                                        <span class=\"btn-label\">Voir</span>
                                    </a>
                                    <a href=\"{{ path('purchase_print', {id: purchase.id}) }}\" class=\"btn btn-outline-secondary\" title=\"Imprimer\" target=\"_blank\">
                                        <i class=\"fas fa-print\"></i>
                                        <span class=\"btn-label\">Imprimer</span>
                                    </a>
                                    {% if purchase.bonCommande %}
                                        <a href=\"{{ asset('uploads/bons-commande/' ~ purchase.bonCommande) }}\" class=\"btn btn-outline-primary\" target=\"_blank\" title=\"Bon de commande\">
                                            <i class=\"fas fa-file-pdf\"></i>
                                            <span class=\"btn-label\">Bon</span>
                                        </a>
                                    {% endif %}
                                    {% if purchase.recuAchat and (purchase.status == 'confirmed' or purchase.status == 'received') %}
                                        <a href=\"{{ asset('uploads/recus-achat/' ~ purchase.recuAchat) }}\" class=\"btn btn-outline-success\" target=\"_blank\" title=\"Reçu\">
                                            <i class=\"fas fa-file-pdf\"></i>
                                            <span class=\"btn-label\">Reçu</span>
                                        </a>
                                    {% endif %}
                                    {% if purchase.status == 'confirmed' %}
                                        <a href=\"{{ path('purchase_receive', {id: purchase.id}) }}\" class=\"btn btn-outline-success\" title=\"Réceptionner\">
                                            <i class=\"fas fa-box-open\"></i>
                                            <span class=\"btn-label\">Récep.</span>
                                        </a>
                                    {% endif %}
                                    {% if purchase.canCancel %}
                                        <button type=\"button\" class=\"btn btn-outline-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#cancelModal{{ purchase.id }}\" title=\"Annuler\">
                                            <i class=\"fas fa-ban\"></i>
                                            <span class=\"btn-label\">Annuler</span>
                                        </button>
                                    {% endif %}
                                </div>

                                <!-- Modal d'annulation -->
                                <div class=\"modal fade\" id=\"cancelModal{{ purchase.id }}\" tabindex=\"-1\">
                                    <div class=\"modal-dialog modal-dialog-centered\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <h5 class=\"modal-title\">
                                                    <i class=\"fas fa-exclamation-triangle text-danger me-2\"></i>
                                                    Annuler la commande
                                                </h5>
                                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                                            </div>
                                            <form action=\"{{ path('purchase_cancel', {id: purchase.id}) }}\" method=\"POST\">
                                                <div class=\"modal-body\">
                                                    <p>Êtes-vous sûr de vouloir annuler la commande <strong>{{ purchase.purchaseNumber }}</strong> ?</p>
                                                    <div class=\"mb-3\">
                                                        <label class=\"form-label\">Motif d'annulation *</label>
                                                        <textarea name=\"reason\" class=\"form-control\" rows=\"3\" required placeholder=\"Expliquez la raison de l'annulation...\"></textarea>
                                                    </div>
                                                    <div class=\"alert alert-warning\">
                                                        <i class=\"fas fa-exclamation-triangle me-2\"></i>
                                                        L'annulation enverra une notification au fournisseur.
                                                    </div>
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                                                    <button type=\"submit\" class=\"btn btn-danger\">
                                                        <i class=\"fas fa-ban me-2\"></i> Confirmer l'annulation
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"6\" class=\"text-center py-5\">
                                <div class=\"empty-state\">
                                    <i class=\"fas fa-inbox fa-4x text-muted mb-3 d-block\"></i>
                                    <p class=\"text-muted mb-3\">Aucune commande trouvée.</p>
                                    <a href=\"{{ path('purchase_cart') }}\" class=\"btn btn-primary\">
                                        <i class=\"fas fa-plus-circle me-2\"></i> Créer une commande
                                    </a>
                                </div>
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        {% if pagination.total_pages > 1 %}
        <div class=\"card-footer bg-white\">
            <nav aria-label=\"Pagination\">
                <ul class=\"pagination justify-content-center mb-0\">
                    {% if pagination.current_page > 1 %}
                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"{{ path('purchase_index', app.request.query.all|merge({'page': pagination.current_page - 1})) }}\">
                                <i class=\"fas fa-chevron-left\"></i>
                            </a>
                        </li>
                    {% endif %}

                    {% for p in 1..pagination.total_pages %}
                        <li class=\"page-item {{ p == pagination.current_page ? 'active' : '' }}\">
                            <a class=\"page-link\" href=\"{{ path('purchase_index', app.request.query.all|merge({'page': p})) }}\">{{ p }}</a>
                        </li>
                    {% endfor %}

                    {% if pagination.current_page < pagination.total_pages %}
                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"{{ path('purchase_index', app.request.query.all|merge({'page': pagination.current_page + 1})) }}\">
                                <i class=\"fas fa-chevron-right\"></i>
                            </a>
                        </li>
                    {% endif %}
                </ul>
            </nav>
        </div>
        {% endif %}
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script src=\"https://cdn.jsdelivr.net/npm/flatpickr\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/fr.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Datepicker
        flatpickr(\".datepicker\", {
            dateFormat: \"d/m/Y\",
            locale: \"fr\",
            allowInput: true
        });

        // Select2 pour le fournisseur
        function initSelect2() {
            if (typeof \$.fn.select2 !== 'undefined') {
                try {
                    \$('#supplier_id').select2({
                        theme: 'bootstrap-5',
                        placeholder: 'Sélectionner un fournisseur',
                        allowClear: true,
                        width: '100%'
                    });
                } catch (e) {
                    console.error('Erreur Select2 :', e);
                }
            } else {
                console.warn('Select2 non chargé, réessai dans 500ms');
                setTimeout(initSelect2, 500);
            }
        }
        initSelect2();

        // Réinitialisation au focus si nécessaire
        \$(document).on('focus', '#supplier_id', function() {
            if (\$(this).data('select2') === undefined) {
                initSelect2();
            }
        });
    });
</script>
{% endblock %}", "purchase/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\purchase\\index.html.twig");
    }
}
