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
class __TwigTemplate_d6742bac6b4a877e30492d634f738c74 extends Template
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
    .stat-card-confirmed { border-left-color: #0d6efd; }
    .stat-card-received { border-left-color: #198754; }
    .stat-card-cancelled { border-left-color: #dc3545; }
    .badge-status-draft { background-color: #6c757d; }
    .badge-status-confirmed { background-color: #0d6efd; }
    .badge-status-received { background-color: #198754; }
    .badge-status-cancelled { background-color: #dc3545; }
    .table-hover tbody tr:hover {
        background-color: #f8f9fa;
    }
    .btn-group-sm .btn {
        padding: 0.25rem 0.5rem;
        font-size: 0.75rem;
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

    /* Ajustement spécifique pour le select natif */
    .form-select {
        background-position: right 0.75rem center;
        padding: 0.375rem 2.25rem 0.375rem 0.75rem;
    }

    /* Input group (recherche) */
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

    /* Flatpickr (dates) */
    .flatpickr-input {
        padding: 0.375rem 0.75rem;
    }

    /* Select2 */
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

    /* Titre des filtres */
    .form-label.fw-bold {
        font-size: 0.875rem;
        margin-bottom: 0.25rem;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 149
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

        // line 150
        yield "<div class=\"container-fluid px-4 py-4\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2\">
        <div>
            <h1 class=\"h3 mb-1 text-gray-800 fw-bold\">
                <i class=\"fas fa-truck me-2\"></i>Commandes d'achat
            </h1>
            <p class=\"text-muted\">Gérez vos commandes fournisseurs</p>
        </div>
        <div>
            <a href=\"";
        // line 160
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_cart");
        yield "\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus-circle me-2\"></i> Nouvelle commande
            </a>
        </div>
    </div>

    <!-- Cartes de statistiques -->
    <div class=\"row g-4 mb-4 equal-height\">
        <div class=\"col-sm-6 col-md-6 col-lg-4\">
            <div class=\"card shadow-sm stat-card h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <span class=\"text-primary text-uppercase small fw-bold\">Total commandes</span>
                            <h2 class=\"mb-0 fw-bold\">";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 174, $this->source); })()), "total_count", [], "any", false, false, false, 174), 0, ",", " "), "html", null, true);
        yield "</h2>
                        </div>
                        <div class=\"icon-bg bg-primary\">
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
        // line 189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["status_counts"]) || array_key_exists("status_counts", $context) ? $context["status_counts"] : (function () { throw new RuntimeError('Variable "status_counts" does not exist.', 189, $this->source); })()), "draft", [], "any", false, false, false, 189), 0, ",", " "), "html", null, true);
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
        // line 204
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["status_counts"]) || array_key_exists("status_counts", $context) ? $context["status_counts"] : (function () { throw new RuntimeError('Variable "status_counts" does not exist.', 204, $this->source); })()), "confirmed", [], "any", false, false, false, 204), 0, ",", " "), "html", null, true);
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
        // line 219
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["status_counts"]) || array_key_exists("status_counts", $context) ? $context["status_counts"] : (function () { throw new RuntimeError('Variable "status_counts" does not exist.', 219, $this->source); })()), "received", [], "any", false, false, false, 219), 0, ",", " "), "html", null, true);
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
        // line 234
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["status_counts"]) || array_key_exists("status_counts", $context) ? $context["status_counts"] : (function () { throw new RuntimeError('Variable "status_counts" does not exist.', 234, $this->source); })()), "cancelled", [], "any", false, false, false, 234), 0, ",", " "), "html", null, true);
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
            <div class=\"card shadow-sm stat-card h-100\">
                <div class=\"card-body d-flex justify-content-between align-items-center\">
                    <div>
                        <span class=\"text-success text-uppercase small fw-bold\">Montant total</span>
                        <h2 class=\"mb-0 fw-bold\">";
        // line 252
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 252, $this->source); })()), "total_amount", [], "any", false, false, false, 252), 0, ",", " "), "html", null, true);
        yield " FCFA</h2>
                    </div>
                    <div class=\"icon-bg bg-success\">
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
        // line 269
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
        // line 287
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 287, $this->source); })()), "search", [], "any", false, false, false, 287), "html", null, true);
        yield "\" 
                            class=\"form-control border-start-0\" placeholder=\"N° commande, fournisseur, utilisateur...\">
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-2\">
                    <label for=\"status\" class=\"form-label fw-bold small\">
                        <i class=\"fas fa-tag text-primary me-1\"></i> Statut
                    </label>
                    <select name=\"status\" id=\"status\" class=\"form-select\">
                        <option value=\"\">Tous</option>
                        ";
        // line 297
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["statuses"]) || array_key_exists("statuses", $context) ? $context["statuses"] : (function () { throw new RuntimeError('Variable "statuses" does not exist.', 297, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["label"]) {
            // line 298
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 298, $this->source); })()), "status", [], "any", false, false, false, 298) == $context["key"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['label'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 300
        yield "                    </select>
                </div>
                <div class=\"col-md-6 col-lg-2\">
                    <label for=\"supplier_id\" class=\"form-label fw-bold small\">
                        <i class=\"fas fa-truck text-primary me-1\"></i> Fournisseur
                    </label>
                    <select name=\"supplier_id\" id=\"supplier_id\" class=\"form-select select2\">
                        <option value=\"\">Tous</option>
                        ";
        // line 308
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["suppliers"]) || array_key_exists("suppliers", $context) ? $context["suppliers"] : (function () { throw new RuntimeError('Variable "suppliers" does not exist.', 308, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["supplier"]) {
            // line 309
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "id", [], "any", false, false, false, 309), "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 309, $this->source); })()), "supplier_id", [], "any", false, false, false, 309) == CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "id", [], "any", false, false, false, 309))) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "name", [], "any", false, false, false, 309), "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['supplier'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 311
        yield "                    </select>
                </div>
                <div class=\"col-md-6 col-lg-2\">
                    <label for=\"start_date\" class=\"form-label fw-bold small\">
                        <i class=\"fas fa-calendar-alt text-primary me-1\"></i> Date début
                    </label>
                    <input type=\"text\" name=\"start_date\" id=\"start_date\" class=\"form-control datepicker\" 
                        placeholder=\"jj/mm/aaaa\" value=\"";
        // line 318
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 318, $this->source); })()), "start_date", [], "any", false, false, false, 318), "html", null, true);
        yield "\">
                </div>
                <div class=\"col-md-6 col-lg-3\">
                    <label for=\"end_date\" class=\"form-label fw-bold small\">
                        <i class=\"fas fa-calendar-alt text-primary me-1\"></i> Date fin
                    </label>
                    <input type=\"text\" name=\"end_date\" id=\"end_date\" class=\"form-control datepicker\" 
                        placeholder=\"jj/mm/aaaa\" value=\"";
        // line 325
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 325, $this->source); })()), "end_date", [], "any", false, false, false, 325), "html", null, true);
        yield "\">
                </div>
            </form>
        </div>
    </div>

    <!-- Tableau des commandes -->
    <div class=\"card shadow-sm\">
        <div class=\"card-header bg-white py-3\">
            <h5 class=\"mb-0\"><i class=\"fas fa-list me-2\"></i>Commandes</h5>
        </div>
        <div class=\"table-responsive\">
            <table class=\"table table-hover mb-0 align-middle\">
                <thead class=\"table-light\">
                    <tr>
                        <th>N° commande</th>
                        <th>Fournisseur</th>
                        <th>Date</th>
                        <th>Total</th>
                        <th>Statut</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 349
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["purchases"]) || array_key_exists("purchases", $context) ? $context["purchases"] : (function () { throw new RuntimeError('Variable "purchases" does not exist.', 349, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["purchase"]) {
            // line 350
            yield "                        <tr>
                            <td>
                                <strong>";
            // line 352
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "purchaseNumber", [], "any", false, false, false, 352), "html", null, true);
            yield "</strong>
                            </td>
                            <td>
                                ";
            // line 355
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "supplier", [], "any", false, false, false, 355)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 356
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "supplier", [], "any", false, false, false, 356), "name", [], "any", false, false, false, 356), "html", null, true);
                yield "
                                    <br><small class=\"text-muted\">";
                // line 357
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "supplier", [], "any", false, false, false, 357), "phone", [], "any", false, false, false, 357), "html", null, true);
                yield "</small>
                                ";
            } else {
                // line 359
                yield "                                    <span class=\"text-muted\">-</span>
                                ";
            }
            // line 361
            yield "                            </td>
                            <td>";
            // line 362
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "createdAt", [], "any", false, false, false, 362), "d/m/Y H:i"), "html", null, true);
            yield "</td>
                            <td class=\"fw-bold text-primary\">";
            // line 363
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "totalAmount", [], "any", false, false, false, 363), 0, ",", " "), "html", null, true);
            yield " FCFA</td>
                            <td>
                                <span class=\"badge badge-status-";
            // line 365
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "status", [], "any", false, false, false, 365), "html", null, true);
            yield "\">
                                    <i class=\"fas ";
            // line 366
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "statusIcon", [], "any", false, false, false, 366), "html", null, true);
            yield " me-1\"></i>
                                    ";
            // line 367
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "statusLabel", [], "any", false, false, false, 367), "html", null, true);
            yield "
                                </span>
                            </td>
                            <td>
                                <div class=\"btn-group btn-group-sm\">
                                    <a href=\"";
            // line 372
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "id", [], "any", false, false, false, 372)]), "html", null, true);
            yield "\" class=\"btn btn-outline-info\" title=\"Voir\">
                                        <i class=\"fas fa-eye\"></i> Voir
                                    </a>
                                    <a href=\"";
            // line 375
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_print", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "id", [], "any", false, false, false, 375)]), "html", null, true);
            yield "\" class=\"btn btn-outline-secondary\" title=\"Imprimer\" target=\"_blank\">
                                        <i class=\"fas fa-print\"></i> Imprimer
                                    </a>
                                    ";
            // line 378
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "bonCommande", [], "any", false, false, false, 378)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 379
                yield "                                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/bons-commande/" . CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "bonCommande", [], "any", false, false, false, 379))), "html", null, true);
                yield "\" class=\"btn btn-outline-primary\" target=\"_blank\" title=\"Bon de commande\">
                                            <i class=\"fas fa-file-pdf\"></i> Bon commande
                                        </a>
                                    ";
            }
            // line 383
            yield "                                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "recuAchat", [], "any", false, false, false, 383) && ((CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "status", [], "any", false, false, false, 383) == "confirmed") || (CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "status", [], "any", false, false, false, 383) == "received")))) {
                // line 384
                yield "                                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/recus-achat/" . CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "recuAchat", [], "any", false, false, false, 384))), "html", null, true);
                yield "\" class=\"btn btn-outline-success\" target=\"_blank\" title=\"Reçu\">
                                            <i class=\"fas fa-file-pdf\"></i> Reçu
                                        </a>
                                    ";
            }
            // line 388
            yield "                                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "status", [], "any", false, false, false, 388) == "confirmed")) {
                // line 389
                yield "                                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_receive", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "id", [], "any", false, false, false, 389)]), "html", null, true);
                yield "\" class=\"btn btn-outline-success\" title=\"Réceptionner\">
                                            <i class=\"fas fa-box-open\"></i>
                                        </a>
                                    ";
            }
            // line 393
            yield "                                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "canCancel", [], "any", false, false, false, 393)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 394
                yield "                                        <button type=\"button\" class=\"btn btn-outline-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#cancelModal";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "id", [], "any", false, false, false, 394), "html", null, true);
                yield "\" title=\"Annuler\">
                                            <i class=\"fas fa-ban\"></i>
                                        </button>
                                    ";
            }
            // line 398
            yield "                                </div>

                                <!-- Modal d'annulation -->
                                <div class=\"modal fade\" id=\"cancelModal";
            // line 401
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "id", [], "any", false, false, false, 401), "html", null, true);
            yield "\" tabindex=\"-1\">
                                    <div class=\"modal-dialog modal-dialog-centered\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <h5 class=\"modal-title\">Annuler la commande</h5>
                                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                                            </div>
                                            <form action=\"";
            // line 408
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_cancel", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["purchase"], "id", [], "any", false, false, false, 408)]), "html", null, true);
            yield "\" method=\"POST\">
                                                <div class=\"modal-body\">
                                                    <div class=\"mb-3\">
                                                        <label class=\"form-label\">Motif d'annulation *</label>
                                                        <textarea name=\"reason\" class=\"form-control\" rows=\"3\" required></textarea>
                                                    </div>
                                                    <div class=\"alert alert-warning\">
                                                        <i class=\"fas fa-exclamation-triangle\"></i>
                                                        L'annulation enverra une notification au fournisseur.
                                                    </div>
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                                                    <button type=\"submit\" class=\"btn btn-danger\">Confirmer l'annulation</button>
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
        // line 429
        if (!$context['_iterated']) {
            // line 430
            yield "                        <tr>
                            <td colspan=\"6\" class=\"text-center py-5\">
                                <i class=\"fas fa-inbox fa-3x text-muted mb-3\"></i>
                                <p class=\"text-muted\">Aucune commande trouvée.</p>
                                <a href=\"";
            // line 434
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_cart");
            yield "\" class=\"btn btn-primary btn-sm\">
                                    <i class=\"fas fa-plus-circle\"></i> Créer une commande
                                </a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['purchase'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 440
        yield "                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        ";
        // line 445
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 445, $this->source); })()), "total_pages", [], "any", false, false, false, 445) > 1)) {
            // line 446
            yield "        <div class=\"card-footer bg-white\">
            <nav aria-label=\"Pagination\">
                <ul class=\"pagination justify-content-center mb-0\">
                    ";
            // line 449
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 449, $this->source); })()), "current_page", [], "any", false, false, false, 449) > 1)) {
                // line 450
                yield "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
                // line 451
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 451, $this->source); })()), "request", [], "any", false, false, false, 451), "query", [], "any", false, false, false, 451), "all", [], "any", false, false, false, 451), ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 451, $this->source); })()), "current_page", [], "any", false, false, false, 451) - 1)])), "html", null, true);
                yield "\">
                                <i class=\"fas fa-chevron-left\"></i>
                            </a>
                        </li>
                    ";
            }
            // line 456
            yield "
                    ";
            // line 457
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 457, $this->source); })()), "total_pages", [], "any", false, false, false, 457)));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 458
                yield "                        <li class=\"page-item ";
                yield ((($context["p"] == CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 458, $this->source); })()), "current_page", [], "any", false, false, false, 458))) ? ("active") : (""));
                yield "\">
                            <a class=\"page-link\" href=\"";
                // line 459
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 459, $this->source); })()), "request", [], "any", false, false, false, 459), "query", [], "any", false, false, false, 459), "all", [], "any", false, false, false, 459), ["page" => $context["p"]])), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["p"], "html", null, true);
                yield "</a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 462
            yield "
                    ";
            // line 463
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 463, $this->source); })()), "current_page", [], "any", false, false, false, 463) < CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 463, $this->source); })()), "total_pages", [], "any", false, false, false, 463))) {
                // line 464
                yield "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
                // line 465
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 465, $this->source); })()), "request", [], "any", false, false, false, 465), "query", [], "any", false, false, false, 465), "all", [], "any", false, false, false, 465), ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 465, $this->source); })()), "current_page", [], "any", false, false, false, 465) + 1)])), "html", null, true);
                yield "\">
                                <i class=\"fas fa-chevron-right\"></i>
                            </a>
                        </li>
                    ";
            }
            // line 470
            yield "                </ul>
            </nav>
        </div>
        ";
        }
        // line 474
        yield "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 478
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

        // line 479
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
        return array (  806 => 479,  793 => 478,  780 => 474,  774 => 470,  766 => 465,  763 => 464,  761 => 463,  758 => 462,  747 => 459,  742 => 458,  738 => 457,  735 => 456,  727 => 451,  724 => 450,  722 => 449,  717 => 446,  715 => 445,  708 => 440,  696 => 434,  690 => 430,  688 => 429,  662 => 408,  652 => 401,  647 => 398,  639 => 394,  636 => 393,  628 => 389,  625 => 388,  617 => 384,  614 => 383,  606 => 379,  604 => 378,  598 => 375,  592 => 372,  584 => 367,  580 => 366,  576 => 365,  571 => 363,  567 => 362,  564 => 361,  560 => 359,  555 => 357,  550 => 356,  548 => 355,  542 => 352,  538 => 350,  533 => 349,  506 => 325,  496 => 318,  487 => 311,  474 => 309,  470 => 308,  460 => 300,  447 => 298,  443 => 297,  430 => 287,  409 => 269,  389 => 252,  368 => 234,  350 => 219,  332 => 204,  314 => 189,  296 => 174,  279 => 160,  267 => 150,  254 => 149,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
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
    .stat-card-confirmed { border-left-color: #0d6efd; }
    .stat-card-received { border-left-color: #198754; }
    .stat-card-cancelled { border-left-color: #dc3545; }
    .badge-status-draft { background-color: #6c757d; }
    .badge-status-confirmed { background-color: #0d6efd; }
    .badge-status-received { background-color: #198754; }
    .badge-status-cancelled { background-color: #dc3545; }
    .table-hover tbody tr:hover {
        background-color: #f8f9fa;
    }
    .btn-group-sm .btn {
        padding: 0.25rem 0.5rem;
        font-size: 0.75rem;
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

    /* Ajustement spécifique pour le select natif */
    .form-select {
        background-position: right 0.75rem center;
        padding: 0.375rem 2.25rem 0.375rem 0.75rem;
    }

    /* Input group (recherche) */
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

    /* Flatpickr (dates) */
    .flatpickr-input {
        padding: 0.375rem 0.75rem;
    }

    /* Select2 */
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

    /* Titre des filtres */
    .form-label.fw-bold {
        font-size: 0.875rem;
        margin-bottom: 0.25rem;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container-fluid px-4 py-4\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2\">
        <div>
            <h1 class=\"h3 mb-1 text-gray-800 fw-bold\">
                <i class=\"fas fa-truck me-2\"></i>Commandes d'achat
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
            <div class=\"card shadow-sm stat-card h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <span class=\"text-primary text-uppercase small fw-bold\">Total commandes</span>
                            <h2 class=\"mb-0 fw-bold\">{{ stats.total_count|number_format(0, ',', ' ') }}</h2>
                        </div>
                        <div class=\"icon-bg bg-primary\">
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
            <div class=\"card shadow-sm stat-card h-100\">
                <div class=\"card-body d-flex justify-content-between align-items-center\">
                    <div>
                        <span class=\"text-success text-uppercase small fw-bold\">Montant total</span>
                        <h2 class=\"mb-0 fw-bold\">{{ stats.total_amount|number_format(0, ',', ' ') }} FCFA</h2>
                    </div>
                    <div class=\"icon-bg bg-success\">
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
                            class=\"form-control border-start-0\" placeholder=\"N° commande, fournisseur, utilisateur...\">
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
            <h5 class=\"mb-0\"><i class=\"fas fa-list me-2\"></i>Commandes</h5>
        </div>
        <div class=\"table-responsive\">
            <table class=\"table table-hover mb-0 align-middle\">
                <thead class=\"table-light\">
                    <tr>
                        <th>N° commande</th>
                        <th>Fournisseur</th>
                        <th>Date</th>
                        <th>Total</th>
                        <th>Statut</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for purchase in purchases %}
                        <tr>
                            <td>
                                <strong>{{ purchase.purchaseNumber }}</strong>
                            </td>
                            <td>
                                {% if purchase.supplier %}
                                    {{ purchase.supplier.name }}
                                    <br><small class=\"text-muted\">{{ purchase.supplier.phone }}</small>
                                {% else %}
                                    <span class=\"text-muted\">-</span>
                                {% endif %}
                            </td>
                            <td>{{ purchase.createdAt|date('d/m/Y H:i') }}</td>
                            <td class=\"fw-bold text-primary\">{{ purchase.totalAmount|number_format(0, ',', ' ') }} FCFA</td>
                            <td>
                                <span class=\"badge badge-status-{{ purchase.status }}\">
                                    <i class=\"fas {{ purchase.statusIcon }} me-1\"></i>
                                    {{ purchase.statusLabel }}
                                </span>
                            </td>
                            <td>
                                <div class=\"btn-group btn-group-sm\">
                                    <a href=\"{{ path('purchase_show', {id: purchase.id}) }}\" class=\"btn btn-outline-info\" title=\"Voir\">
                                        <i class=\"fas fa-eye\"></i> Voir
                                    </a>
                                    <a href=\"{{ path('purchase_print', {id: purchase.id}) }}\" class=\"btn btn-outline-secondary\" title=\"Imprimer\" target=\"_blank\">
                                        <i class=\"fas fa-print\"></i> Imprimer
                                    </a>
                                    {% if purchase.bonCommande %}
                                        <a href=\"{{ asset('uploads/bons-commande/' ~ purchase.bonCommande) }}\" class=\"btn btn-outline-primary\" target=\"_blank\" title=\"Bon de commande\">
                                            <i class=\"fas fa-file-pdf\"></i> Bon commande
                                        </a>
                                    {% endif %}
                                    {% if purchase.recuAchat and (purchase.status == 'confirmed' or purchase.status == 'received') %}
                                        <a href=\"{{ asset('uploads/recus-achat/' ~ purchase.recuAchat) }}\" class=\"btn btn-outline-success\" target=\"_blank\" title=\"Reçu\">
                                            <i class=\"fas fa-file-pdf\"></i> Reçu
                                        </a>
                                    {% endif %}
                                    {% if purchase.status == 'confirmed' %}
                                        <a href=\"{{ path('purchase_receive', {id: purchase.id}) }}\" class=\"btn btn-outline-success\" title=\"Réceptionner\">
                                            <i class=\"fas fa-box-open\"></i>
                                        </a>
                                    {% endif %}
                                    {% if purchase.canCancel %}
                                        <button type=\"button\" class=\"btn btn-outline-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#cancelModal{{ purchase.id }}\" title=\"Annuler\">
                                            <i class=\"fas fa-ban\"></i>
                                        </button>
                                    {% endif %}
                                </div>

                                <!-- Modal d'annulation -->
                                <div class=\"modal fade\" id=\"cancelModal{{ purchase.id }}\" tabindex=\"-1\">
                                    <div class=\"modal-dialog modal-dialog-centered\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <h5 class=\"modal-title\">Annuler la commande</h5>
                                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                                            </div>
                                            <form action=\"{{ path('purchase_cancel', {id: purchase.id}) }}\" method=\"POST\">
                                                <div class=\"modal-body\">
                                                    <div class=\"mb-3\">
                                                        <label class=\"form-label\">Motif d'annulation *</label>
                                                        <textarea name=\"reason\" class=\"form-control\" rows=\"3\" required></textarea>
                                                    </div>
                                                    <div class=\"alert alert-warning\">
                                                        <i class=\"fas fa-exclamation-triangle\"></i>
                                                        L'annulation enverra une notification au fournisseur.
                                                    </div>
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                                                    <button type=\"submit\" class=\"btn btn-danger\">Confirmer l'annulation</button>
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
                                <i class=\"fas fa-inbox fa-3x text-muted mb-3\"></i>
                                <p class=\"text-muted\">Aucune commande trouvée.</p>
                                <a href=\"{{ path('purchase_cart') }}\" class=\"btn btn-primary btn-sm\">
                                    <i class=\"fas fa-plus-circle\"></i> Créer une commande
                                </a>
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
