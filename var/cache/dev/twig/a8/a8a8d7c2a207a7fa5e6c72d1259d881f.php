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

/* stock/inventory/index.html.twig */
class __TwigTemplate_1db0bf4fee1801312bedcd795ce618f1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/inventory/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/inventory/index.html.twig"));

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

        yield "Inventaires - HMA Market";
        
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
   CARTES STATISTIQUES
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
    font-size: 2rem;
    font-weight: bold;
    margin-bottom: 0;
}
.stat-card .stat-label {
    font-size: 0.75rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    font-weight: 600;
}
.stat-card .stat-sub {
    font-size: 0.7rem;
    margin-top: 0.25rem;
    opacity: 0.8;
}
.stat-icon {
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 1rem;
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
.card-bg-secondary {
    background: linear-gradient(135deg, #6c757d 0%, #5a6268 100%) !important;
    color: white;
}
.card-bg-primary .stat-icon,
.card-bg-warning .stat-icon,
.card-bg-success .stat-icon,
.card-bg-secondary .stat-icon {
    background: rgba(255,255,255,0.2);
}
.card-bg-primary .stat-value,
.card-bg-warning .stat-value,
.card-bg-success .stat-value,
.card-bg-secondary .stat-value {
    color: white;
}

/* ============================================
   TABLEAU DES INVENTAIRES
   ============================================ */
.inventory-table {
    margin: 0;
}

.inventory-table thead th {
    font-weight: 700;
    color: #475569;
    font-size: 0.8rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    padding: 1rem;
    border-bottom: 2px solid #e2e8f0;
    background: #f8fafc;
    white-space: nowrap;
}

.inventory-table tbody tr {
    transition: all 0.2s;
    border-bottom: 1px solid #f1f5f9;
}

.inventory-table tbody tr:hover {
    background: #f8fafc;
}

.inventory-table tbody td {
    padding: 1rem;
    vertical-align: middle;
}

/* ============================================
   RESPONSIVE MOBILE
   ============================================ */
@media (max-width: 767.98px) {
    .container-fluid {
        padding-left: 0.75rem !important;
        padding-right: 0.75rem !important;
    }
    
    /* Header */
    .page-header-actions {
        flex-direction: column;
        align-items: stretch !important;
        gap: 0.75rem !important;
    }
    
    .page-header-actions .btn {
        width: 100%;
    }
    
    /* Stats cards */
    .stat-card .stat-value {
        font-size: 1.5rem;
    }
    
    .stat-icon {
        width: 40px;
        height: 40px;
    }
    
    .stat-icon i {
        font-size: 1.25rem !important;
    }
    
    /* Filtres */
    .filter-form .col-md-3 {
        width: 100%;
    }
    
    /* TABLEAU -> CARTES */
    .inventory-table thead {
        display: none;
    }
    
    .inventory-table tbody tr {
        display: block;
        background: white;
        border: 1px solid #e9ecef;
        border-radius: 12px;
        margin: 0.75rem;
        padding: 1rem;
        box-shadow: 0 2px 8px rgba(0,0,0,0.04);
    }
    
    .inventory-table tbody tr:hover {
        background: white;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    }
    
    .inventory-table tbody td {
        display: block;
        padding: 0.5rem 0 !important;
        border: none;
        text-align: left !important;
    }
    
    .inventory-table tbody td::before {
        content: attr(data-label);
        display: block;
        font-size: 0.7rem;
        text-transform: uppercase;
        color: #94a3b8;
        font-weight: 700;
        letter-spacing: 0.5px;
        margin-bottom: 0.35rem;
    }
    
    .inventory-table tbody td[data-label=\"N° inventaire\"] {
        padding-bottom: 0.75rem !important;
        border-bottom: 1px solid #f1f5f9;
        margin-bottom: 0.5rem;
    }
    
    .inventory-table tbody td[data-label=\"Actions\"] {
        padding-top: 0.75rem !important;
        border-top: 1px solid #f1f5f9;
        margin-top: 0.5rem;
        text-align: center !important;
    }
    
    .inventory-table tbody td[data-label=\"Actions\"]::before {
        display: none;
    }
    
    .inventory-table tbody td[data-label=\"Actions\"] .btn-group {
        display: flex;
        width: 100%;
        gap: 0.35rem;
    }
    
    .inventory-table tbody td[data-label=\"Actions\"] .btn-group .btn {
        flex: 1;
        padding: 0.5rem;
    }
    
    /* Empty state */
    .inventory-table tbody td[colspan] {
        text-align: center !important;
        padding: 2rem 1rem !important;
    }
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 222
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

        // line 223
        yield "<div class=\"container-fluid px-4\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-start mb-4 page-header-actions flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb mb-2\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 230
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Tableau de bord
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">
                        <i class=\"fas fa-clipboard-list me-1\"></i> Inventaires
                    </li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-clipboard-list text-primary me-2\"></i>
                Inventaires
            </h1>
            <p class=\"text-muted mt-2 mb-0\">
                <i class=\"fas fa-info-circle me-1\"></i>
                Gérez les inventaires physiques et les comptages de stock
            </p>
        </div>
        <div class=\"d-flex gap-2\">
            <a href=\"";
        // line 249
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_inventory_new");
        yield "\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus me-1\"></i> Nouvel inventaire
            </a>
        </div>
    </div>

    <!-- Cartes statistiques -->
    <div class=\"row g-3 mb-4\">
        <div class=\"col-6 col-md-3\">
            <div class=\"card stat-card card-bg-primary shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1 min-w-0\">
                            <div class=\"stat-label\">Total</div>
                            <div class=\"stat-value\">";
        // line 263
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total", [], "any", true, true, false, 263)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 263, $this->source); })()), "total", [], "any", false, false, false, 263), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</div>
                            <div class=\"stat-sub d-none d-sm-block\">inventaires créés</div>
                        </div>
                        <div class=\"stat-icon flex-shrink-0\">
                            <i class=\"fas fa-chart-bar fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-6 col-md-3\">
            <div class=\"card stat-card card-bg-warning shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1 min-w-0\">
                            <div class=\"stat-label\">En cours</div>
                            <div class=\"stat-value\">";
        // line 279
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "in_progress", [], "any", true, true, false, 279)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 279, $this->source); })()), "in_progress", [], "any", false, false, false, 279), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</div>
                            <div class=\"stat-sub d-none d-sm-block\">inventaire(s) en cours</div>
                        </div>
                        <div class=\"stat-icon flex-shrink-0\">
                            <i class=\"fas fa-spinner fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-6 col-md-3\">
            <div class=\"card stat-card card-bg-success shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1 min-w-0\">
                            <div class=\"stat-label\">Terminés</div>
                            <div class=\"stat-value\">";
        // line 295
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "completed", [], "any", true, true, false, 295)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 295, $this->source); })()), "completed", [], "any", false, false, false, 295), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</div>
                            <div class=\"stat-sub d-none d-sm-block\">inventaire(s) terminés</div>
                        </div>
                        <div class=\"stat-icon flex-shrink-0\">
                            <i class=\"fas fa-check-circle fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-6 col-md-3\">
            <div class=\"card stat-card card-bg-secondary shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1 min-w-0\">
                            <div class=\"stat-label\">Brouillons</div>
                            <div class=\"stat-value\">";
        // line 311
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "draft", [], "any", true, true, false, 311)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 311, $this->source); })()), "draft", [], "any", false, false, false, 311), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</div>
                            <div class=\"stat-sub d-none d-sm-block\">inventaire(s) en brouillon</div>
                        </div>
                        <div class=\"stat-icon flex-shrink-0\">
                            <i class=\"fas fa-pen fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filtres -->
    <div class=\"card border-0 shadow-sm mb-4\">
        <div class=\"card-header bg-white py-3\">
            <h5 class=\"mb-0 fw-semibold\">
                <i class=\"fas fa-filter me-2 text-primary\"></i> Filtres
            </h5>
        </div>
        <div class=\"card-body\">
            <form method=\"get\" class=\"row g-3 filter-form\">
                <div class=\"col-12 col-md-3\">
                    <label class=\"form-label fw-bold small\">Statut</label>
                    <select name=\"status\" class=\"form-select\">
                        <option value=\"\">Tous</option>
                        <option value=\"draft\" ";
        // line 336
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 336, $this->source); })()), "status", [], "any", false, false, false, 336) == "draft")) ? ("selected") : (""));
        yield ">Brouillon</option>
                        <option value=\"in_progress\" ";
        // line 337
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 337, $this->source); })()), "status", [], "any", false, false, false, 337) == "in_progress")) ? ("selected") : (""));
        yield ">En cours</option>
                        <option value=\"completed\" ";
        // line 338
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 338, $this->source); })()), "status", [], "any", false, false, false, 338) == "completed")) ? ("selected") : (""));
        yield ">Terminé</option>
                        <option value=\"cancelled\" ";
        // line 339
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 339, $this->source); })()), "status", [], "any", false, false, false, 339) == "cancelled")) ? ("selected") : (""));
        yield ">Annulé</option>
                    </select>
                </div>
                <div class=\"col-6 col-md-3\">
                    <label class=\"form-label fw-bold small\">Date du</label>
                    <input type=\"date\" name=\"date_from\" class=\"form-control\" value=\"";
        // line 344
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 344, $this->source); })()), "date_from", [], "any", false, false, false, 344), "html", null, true);
        yield "\">
                </div>
                <div class=\"col-6 col-md-3\">
                    <label class=\"form-label fw-bold small\">Date au</label>
                    <input type=\"date\" name=\"date_to\" class=\"form-control\" value=\"";
        // line 348
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 348, $this->source); })()), "date_to", [], "any", false, false, false, 348), "html", null, true);
        yield "\">
                </div>
                <div class=\"col-12 col-md-3 d-flex align-items-end\">
                    <button type=\"submit\" class=\"btn btn-primary w-100\">
                        <i class=\"fas fa-search me-1\"></i> Filtrer
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Tableau des inventaires -->
    <div class=\"card border-0 shadow-sm\">
        <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <h5 class=\"mb-0 fw-semibold\">
                <i class=\"fas fa-list me-2 text-primary\"></i>
                Liste des inventaires
            </h5>
            <span class=\"badge bg-secondary\">";
        // line 366
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["inventories"]) || array_key_exists("inventories", $context) ? $context["inventories"] : (function () { throw new RuntimeError('Variable "inventories" does not exist.', 366, $this->source); })())), "html", null, true);
        yield " résultat(s)</span>
        </div>
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table align-middle mb-0 inventory-table\">
                    <thead>
                        <tr>
                            <th>N° inventaire</th>
                            <th>Date</th>
                            <th>Statut</th>
                            <th>Emplacement</th>
                            <th>Progression</th>
                            <th>Créé par</th>
                            <th>Validé par</th>
                            <th class=\"text-center\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 384
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["inventories"]) || array_key_exists("inventories", $context) ? $context["inventories"] : (function () { throw new RuntimeError('Variable "inventories" does not exist.', 384, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["inventory"]) {
            // line 385
            yield "                            <tr>
                                <td data-label=\"N° inventaire\">
                                    <div class=\"fw-bold\">";
            // line 387
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["inventory"], "inventoryNumber", [], "any", false, false, false, 387), "html", null, true);
            yield "</div>
                                    <small class=\"text-muted\">";
            // line 388
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["inventory"], "createdAt", [], "any", false, false, false, 388), "d/m/Y H:i"), "html", null, true);
            yield "</small>
                                </td>
                                <td data-label=\"Date\">
                                    <i class=\"fas fa-calendar text-muted me-1 d-none d-md-inline\"></i>
                                    ";
            // line 392
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["inventory"], "inventoryDate", [], "any", false, false, false, 392), "d/m/Y"), "html", null, true);
            yield "
                                </td>
                                <td data-label=\"Statut\">
                                    <span class=\"badge ";
            // line 395
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["inventory"], "statusBadgeClass", [], "any", false, false, false, 395), "html", null, true);
            yield "\">
                                        <i class=\"fas ";
            // line 396
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["inventory"], "statusIcon", [], "any", false, false, false, 396), "html", null, true);
            yield " me-1\"></i>
                                        ";
            // line 397
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["inventory"], "statusLabel", [], "any", false, false, false, 397), "html", null, true);
            yield "
                                    </span>
                                </td>
                                <td data-label=\"Emplacement\">
                                    ";
            // line 401
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["inventory"], "location", [], "any", false, false, false, 401)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 402
                yield "                                        <i class=\"fas fa-map-marker-alt text-muted me-1\"></i>
                                        ";
                // line 403
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inventory"], "location", [], "any", false, false, false, 403), "displayName", [], "any", false, false, false, 403), "html", null, true);
                yield "
                                    ";
            } else {
                // line 405
                yield "                                        <span class=\"text-muted\">Tous les emplacements</span>
                                    ";
            }
            // line 407
            yield "                                </td>
                                <td data-label=\"Progression\">
                                    <div class=\"d-flex align-items-center gap-2\">
                                        <div class=\"progress flex-grow-1\" style=\"height: 6px;\">
                                            <div class=\"progress-bar bg-primary\" style=\"width: ";
            // line 411
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["inventory"], "progress", [], "any", false, false, false, 411), "html", null, true);
            yield "%\"></div>
                                        </div>
                                        <small class=\"fw-bold\">";
            // line 413
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["inventory"], "progress", [], "any", false, false, false, 413), "html", null, true);
            yield "%</small>
                                    </div>
                                    <small class=\"text-muted\">";
            // line 415
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["inventory"], "countedItemsCount", [], "any", false, false, false, 415), "html", null, true);
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["inventory"], "items", [], "any", false, false, false, 415)), "html", null, true);
            yield " comptés</small>
                                </td>
                                <td data-label=\"Créé par\">
                                    <div class=\"d-flex align-items-center gap-2\">
                                        <i class=\"fas fa-user-circle text-muted\"></i>
                                        <small>";
            // line 420
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inventory"], "createdBy", [], "any", false, false, false, 420), "fullName", [], "any", false, false, false, 420)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inventory"], "createdBy", [], "any", false, false, false, 420), "fullName", [], "any", false, false, false, 420), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inventory"], "createdBy", [], "any", false, false, false, 420), "email", [], "any", false, false, false, 420), "html", null, true)));
            yield "</small>
                                    </div>
                                </td>
                                <td data-label=\"Validé par\">
                                    ";
            // line 424
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["inventory"], "validatedBy", [], "any", false, false, false, 424)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 425
                yield "                                        <div class=\"d-flex align-items-center gap-2\">
                                            <i class=\"fas fa-check-circle text-success\"></i>
                                            <small>";
                // line 427
                yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inventory"], "validatedBy", [], "any", false, false, false, 427), "fullName", [], "any", false, false, false, 427)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inventory"], "validatedBy", [], "any", false, false, false, 427), "fullName", [], "any", false, false, false, 427), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inventory"], "validatedBy", [], "any", false, false, false, 427), "email", [], "any", false, false, false, 427), "html", null, true)));
                yield "</small>
                                        </div>
                                    ";
            } else {
                // line 430
                yield "                                        <span class=\"text-muted\">—</span>
                                    ";
            }
            // line 432
            yield "                                </td>
                                <td data-label=\"Actions\" class=\"text-center\">
                                    <div class=\"btn-group\" role=\"group\">
                                        <a href=\"";
            // line 435
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_inventory_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["inventory"], "id", [], "any", false, false, false, 435)]), "html", null, true);
            yield "\" 
                                           class=\"btn btn-sm btn-outline-primary\" 
                                           title=\"Voir le détail\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                        ";
            // line 440
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["inventory"], "status", [], "any", false, false, false, 440) == "in_progress")) {
                // line 441
                yield "                                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_inventory_count", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["inventory"], "id", [], "any", false, false, false, 441)]), "html", null, true);
                yield "\" 
                                               class=\"btn btn-sm btn-outline-success\" 
                                               title=\"Continuer la saisie\">
                                                <i class=\"fas fa-clipboard-list\"></i>
                                            </a>
                                        ";
            }
            // line 447
            yield "                                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["inventory"], "status", [], "any", false, false, false, 447) == "draft")) {
                // line 448
                yield "                                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_inventory_add_products", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["inventory"], "id", [], "any", false, false, false, 448)]), "html", null, true);
                yield "\" 
                                               class=\"btn btn-sm btn-outline-warning\" 
                                               title=\"Ajouter des produits\">
                                                <i class=\"fas fa-plus\"></i>
                                            </a>
                                        ";
            }
            // line 454
            yield "                                    </div>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 457
        if (!$context['_iterated']) {
            // line 458
            yield "                            <tr>
                                <td colspan=\"8\" class=\"text-center py-5\">
                                    <i class=\"fas fa-clipboard-list fa-3x text-muted mb-3 opacity-50\"></i>
                                    <p class=\"text-muted mb-0\">Aucun inventaire trouvé</p>
                                    <p class=\"text-muted small mb-3\">Modifiez vos filtres ou créez un nouvel inventaire</p>
                                    <a href=\"";
            // line 463
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_inventory_new");
            yield "\" class=\"btn btn-primary\">
                                        <i class=\"fas fa-plus me-1\"></i> Créer un inventaire
                                    </a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['inventory'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 469
        yield "                    </tbody>
                </table>
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
        return "stock/inventory/index.html.twig";
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
        return array (  711 => 469,  699 => 463,  692 => 458,  690 => 457,  683 => 454,  673 => 448,  670 => 447,  660 => 441,  658 => 440,  650 => 435,  645 => 432,  641 => 430,  635 => 427,  631 => 425,  629 => 424,  622 => 420,  612 => 415,  607 => 413,  602 => 411,  596 => 407,  592 => 405,  587 => 403,  584 => 402,  582 => 401,  575 => 397,  571 => 396,  567 => 395,  561 => 392,  554 => 388,  550 => 387,  546 => 385,  541 => 384,  520 => 366,  499 => 348,  492 => 344,  484 => 339,  480 => 338,  476 => 337,  472 => 336,  444 => 311,  425 => 295,  406 => 279,  387 => 263,  370 => 249,  348 => 230,  339 => 223,  326 => 222,  101 => 7,  88 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/stock/inventory/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Inventaires - HMA Market{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
/* ============================================
   CARTES STATISTIQUES
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
    font-size: 2rem;
    font-weight: bold;
    margin-bottom: 0;
}
.stat-card .stat-label {
    font-size: 0.75rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    font-weight: 600;
}
.stat-card .stat-sub {
    font-size: 0.7rem;
    margin-top: 0.25rem;
    opacity: 0.8;
}
.stat-icon {
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 1rem;
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
.card-bg-secondary {
    background: linear-gradient(135deg, #6c757d 0%, #5a6268 100%) !important;
    color: white;
}
.card-bg-primary .stat-icon,
.card-bg-warning .stat-icon,
.card-bg-success .stat-icon,
.card-bg-secondary .stat-icon {
    background: rgba(255,255,255,0.2);
}
.card-bg-primary .stat-value,
.card-bg-warning .stat-value,
.card-bg-success .stat-value,
.card-bg-secondary .stat-value {
    color: white;
}

/* ============================================
   TABLEAU DES INVENTAIRES
   ============================================ */
.inventory-table {
    margin: 0;
}

.inventory-table thead th {
    font-weight: 700;
    color: #475569;
    font-size: 0.8rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    padding: 1rem;
    border-bottom: 2px solid #e2e8f0;
    background: #f8fafc;
    white-space: nowrap;
}

.inventory-table tbody tr {
    transition: all 0.2s;
    border-bottom: 1px solid #f1f5f9;
}

.inventory-table tbody tr:hover {
    background: #f8fafc;
}

.inventory-table tbody td {
    padding: 1rem;
    vertical-align: middle;
}

/* ============================================
   RESPONSIVE MOBILE
   ============================================ */
@media (max-width: 767.98px) {
    .container-fluid {
        padding-left: 0.75rem !important;
        padding-right: 0.75rem !important;
    }
    
    /* Header */
    .page-header-actions {
        flex-direction: column;
        align-items: stretch !important;
        gap: 0.75rem !important;
    }
    
    .page-header-actions .btn {
        width: 100%;
    }
    
    /* Stats cards */
    .stat-card .stat-value {
        font-size: 1.5rem;
    }
    
    .stat-icon {
        width: 40px;
        height: 40px;
    }
    
    .stat-icon i {
        font-size: 1.25rem !important;
    }
    
    /* Filtres */
    .filter-form .col-md-3 {
        width: 100%;
    }
    
    /* TABLEAU -> CARTES */
    .inventory-table thead {
        display: none;
    }
    
    .inventory-table tbody tr {
        display: block;
        background: white;
        border: 1px solid #e9ecef;
        border-radius: 12px;
        margin: 0.75rem;
        padding: 1rem;
        box-shadow: 0 2px 8px rgba(0,0,0,0.04);
    }
    
    .inventory-table tbody tr:hover {
        background: white;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    }
    
    .inventory-table tbody td {
        display: block;
        padding: 0.5rem 0 !important;
        border: none;
        text-align: left !important;
    }
    
    .inventory-table tbody td::before {
        content: attr(data-label);
        display: block;
        font-size: 0.7rem;
        text-transform: uppercase;
        color: #94a3b8;
        font-weight: 700;
        letter-spacing: 0.5px;
        margin-bottom: 0.35rem;
    }
    
    .inventory-table tbody td[data-label=\"N° inventaire\"] {
        padding-bottom: 0.75rem !important;
        border-bottom: 1px solid #f1f5f9;
        margin-bottom: 0.5rem;
    }
    
    .inventory-table tbody td[data-label=\"Actions\"] {
        padding-top: 0.75rem !important;
        border-top: 1px solid #f1f5f9;
        margin-top: 0.5rem;
        text-align: center !important;
    }
    
    .inventory-table tbody td[data-label=\"Actions\"]::before {
        display: none;
    }
    
    .inventory-table tbody td[data-label=\"Actions\"] .btn-group {
        display: flex;
        width: 100%;
        gap: 0.35rem;
    }
    
    .inventory-table tbody td[data-label=\"Actions\"] .btn-group .btn {
        flex: 1;
        padding: 0.5rem;
    }
    
    /* Empty state */
    .inventory-table tbody td[colspan] {
        text-align: center !important;
        padding: 2rem 1rem !important;
    }
}
</style>
{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-start mb-4 page-header-actions flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb mb-2\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('app_dashboard') }}\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Tableau de bord
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">
                        <i class=\"fas fa-clipboard-list me-1\"></i> Inventaires
                    </li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-clipboard-list text-primary me-2\"></i>
                Inventaires
            </h1>
            <p class=\"text-muted mt-2 mb-0\">
                <i class=\"fas fa-info-circle me-1\"></i>
                Gérez les inventaires physiques et les comptages de stock
            </p>
        </div>
        <div class=\"d-flex gap-2\">
            <a href=\"{{ path('app_stock_inventory_new') }}\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus me-1\"></i> Nouvel inventaire
            </a>
        </div>
    </div>

    <!-- Cartes statistiques -->
    <div class=\"row g-3 mb-4\">
        <div class=\"col-6 col-md-3\">
            <div class=\"card stat-card card-bg-primary shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1 min-w-0\">
                            <div class=\"stat-label\">Total</div>
                            <div class=\"stat-value\">{{ stats.total|default(0)|number_format(0, ',', ' ') }}</div>
                            <div class=\"stat-sub d-none d-sm-block\">inventaires créés</div>
                        </div>
                        <div class=\"stat-icon flex-shrink-0\">
                            <i class=\"fas fa-chart-bar fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-6 col-md-3\">
            <div class=\"card stat-card card-bg-warning shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1 min-w-0\">
                            <div class=\"stat-label\">En cours</div>
                            <div class=\"stat-value\">{{ stats.in_progress|default(0)|number_format(0, ',', ' ') }}</div>
                            <div class=\"stat-sub d-none d-sm-block\">inventaire(s) en cours</div>
                        </div>
                        <div class=\"stat-icon flex-shrink-0\">
                            <i class=\"fas fa-spinner fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-6 col-md-3\">
            <div class=\"card stat-card card-bg-success shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1 min-w-0\">
                            <div class=\"stat-label\">Terminés</div>
                            <div class=\"stat-value\">{{ stats.completed|default(0)|number_format(0, ',', ' ') }}</div>
                            <div class=\"stat-sub d-none d-sm-block\">inventaire(s) terminés</div>
                        </div>
                        <div class=\"stat-icon flex-shrink-0\">
                            <i class=\"fas fa-check-circle fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-6 col-md-3\">
            <div class=\"card stat-card card-bg-secondary shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <div class=\"flex-grow-1 min-w-0\">
                            <div class=\"stat-label\">Brouillons</div>
                            <div class=\"stat-value\">{{ stats.draft|default(0)|number_format(0, ',', ' ') }}</div>
                            <div class=\"stat-sub d-none d-sm-block\">inventaire(s) en brouillon</div>
                        </div>
                        <div class=\"stat-icon flex-shrink-0\">
                            <i class=\"fas fa-pen fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filtres -->
    <div class=\"card border-0 shadow-sm mb-4\">
        <div class=\"card-header bg-white py-3\">
            <h5 class=\"mb-0 fw-semibold\">
                <i class=\"fas fa-filter me-2 text-primary\"></i> Filtres
            </h5>
        </div>
        <div class=\"card-body\">
            <form method=\"get\" class=\"row g-3 filter-form\">
                <div class=\"col-12 col-md-3\">
                    <label class=\"form-label fw-bold small\">Statut</label>
                    <select name=\"status\" class=\"form-select\">
                        <option value=\"\">Tous</option>
                        <option value=\"draft\" {{ filters.status == 'draft' ? 'selected' }}>Brouillon</option>
                        <option value=\"in_progress\" {{ filters.status == 'in_progress' ? 'selected' }}>En cours</option>
                        <option value=\"completed\" {{ filters.status == 'completed' ? 'selected' }}>Terminé</option>
                        <option value=\"cancelled\" {{ filters.status == 'cancelled' ? 'selected' }}>Annulé</option>
                    </select>
                </div>
                <div class=\"col-6 col-md-3\">
                    <label class=\"form-label fw-bold small\">Date du</label>
                    <input type=\"date\" name=\"date_from\" class=\"form-control\" value=\"{{ filters.date_from }}\">
                </div>
                <div class=\"col-6 col-md-3\">
                    <label class=\"form-label fw-bold small\">Date au</label>
                    <input type=\"date\" name=\"date_to\" class=\"form-control\" value=\"{{ filters.date_to }}\">
                </div>
                <div class=\"col-12 col-md-3 d-flex align-items-end\">
                    <button type=\"submit\" class=\"btn btn-primary w-100\">
                        <i class=\"fas fa-search me-1\"></i> Filtrer
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Tableau des inventaires -->
    <div class=\"card border-0 shadow-sm\">
        <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <h5 class=\"mb-0 fw-semibold\">
                <i class=\"fas fa-list me-2 text-primary\"></i>
                Liste des inventaires
            </h5>
            <span class=\"badge bg-secondary\">{{ inventories|length }} résultat(s)</span>
        </div>
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table align-middle mb-0 inventory-table\">
                    <thead>
                        <tr>
                            <th>N° inventaire</th>
                            <th>Date</th>
                            <th>Statut</th>
                            <th>Emplacement</th>
                            <th>Progression</th>
                            <th>Créé par</th>
                            <th>Validé par</th>
                            <th class=\"text-center\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for inventory in inventories %}
                            <tr>
                                <td data-label=\"N° inventaire\">
                                    <div class=\"fw-bold\">{{ inventory.inventoryNumber }}</div>
                                    <small class=\"text-muted\">{{ inventory.createdAt|date('d/m/Y H:i') }}</small>
                                </td>
                                <td data-label=\"Date\">
                                    <i class=\"fas fa-calendar text-muted me-1 d-none d-md-inline\"></i>
                                    {{ inventory.inventoryDate|date('d/m/Y') }}
                                </td>
                                <td data-label=\"Statut\">
                                    <span class=\"badge {{ inventory.statusBadgeClass }}\">
                                        <i class=\"fas {{ inventory.statusIcon }} me-1\"></i>
                                        {{ inventory.statusLabel }}
                                    </span>
                                </td>
                                <td data-label=\"Emplacement\">
                                    {% if inventory.location %}
                                        <i class=\"fas fa-map-marker-alt text-muted me-1\"></i>
                                        {{ inventory.location.displayName }}
                                    {% else %}
                                        <span class=\"text-muted\">Tous les emplacements</span>
                                    {% endif %}
                                </td>
                                <td data-label=\"Progression\">
                                    <div class=\"d-flex align-items-center gap-2\">
                                        <div class=\"progress flex-grow-1\" style=\"height: 6px;\">
                                            <div class=\"progress-bar bg-primary\" style=\"width: {{ inventory.progress }}%\"></div>
                                        </div>
                                        <small class=\"fw-bold\">{{ inventory.progress }}%</small>
                                    </div>
                                    <small class=\"text-muted\">{{ inventory.countedItemsCount }}/{{ inventory.items|length }} comptés</small>
                                </td>
                                <td data-label=\"Créé par\">
                                    <div class=\"d-flex align-items-center gap-2\">
                                        <i class=\"fas fa-user-circle text-muted\"></i>
                                        <small>{{ inventory.createdBy.fullName ?: inventory.createdBy.email }}</small>
                                    </div>
                                </td>
                                <td data-label=\"Validé par\">
                                    {% if inventory.validatedBy %}
                                        <div class=\"d-flex align-items-center gap-2\">
                                            <i class=\"fas fa-check-circle text-success\"></i>
                                            <small>{{ inventory.validatedBy.fullName ?: inventory.validatedBy.email }}</small>
                                        </div>
                                    {% else %}
                                        <span class=\"text-muted\">—</span>
                                    {% endif %}
                                </td>
                                <td data-label=\"Actions\" class=\"text-center\">
                                    <div class=\"btn-group\" role=\"group\">
                                        <a href=\"{{ path('app_stock_inventory_show', {'id': inventory.id}) }}\" 
                                           class=\"btn btn-sm btn-outline-primary\" 
                                           title=\"Voir le détail\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                        {% if inventory.status == 'in_progress' %}
                                            <a href=\"{{ path('app_stock_inventory_count', {'id': inventory.id}) }}\" 
                                               class=\"btn btn-sm btn-outline-success\" 
                                               title=\"Continuer la saisie\">
                                                <i class=\"fas fa-clipboard-list\"></i>
                                            </a>
                                        {% endif %}
                                        {% if inventory.status == 'draft' %}
                                            <a href=\"{{ path('app_stock_inventory_add_products', {'id': inventory.id}) }}\" 
                                               class=\"btn btn-sm btn-outline-warning\" 
                                               title=\"Ajouter des produits\">
                                                <i class=\"fas fa-plus\"></i>
                                            </a>
                                        {% endif %}
                                    </div>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"8\" class=\"text-center py-5\">
                                    <i class=\"fas fa-clipboard-list fa-3x text-muted mb-3 opacity-50\"></i>
                                    <p class=\"text-muted mb-0\">Aucun inventaire trouvé</p>
                                    <p class=\"text-muted small mb-3\">Modifiez vos filtres ou créez un nouvel inventaire</p>
                                    <a href=\"{{ path('app_stock_inventory_new') }}\" class=\"btn btn-primary\">
                                        <i class=\"fas fa-plus me-1\"></i> Créer un inventaire
                                    </a>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "stock/inventory/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\stock\\inventory\\index.html.twig");
    }
}
