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

/* stock/inventory/show.html.twig */
class __TwigTemplate_2096dd3622079c0e603b6a1575300ac1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/inventory/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/inventory/show.html.twig"));

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

        yield "Inventaire - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 4, $this->source); })()), "inventoryNumber", [], "any", false, false, false, 4), "html", null, true);
        
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
    border-radius: 0.75rem;
    transition: all 0.2s;
}
.stat-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.08) !important;
}

.difference-positive {
    background-color: #d1fae5;
    color: #065f46;
}
.difference-negative {
    background-color: #fee2e2;
    color: #991b1b;
}
.difference-zero {
    background-color: #f3f4f6;
    color: #6b7280;
}
.status-badge {
    font-size: 0.8rem;
    padding: 0.35rem 0.75rem;
}
.progress-custom {
    height: 8px;
    border-radius: 4px;
}

/* ============================================
   TABLEAU DES PRODUITS
   ============================================ */
.products-table {
    margin: 0;
}

.products-table thead th {
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

.products-table tbody td {
    padding: 1rem;
    vertical-align: middle;
    border-bottom: 1px solid #f1f5f9;
}

.product-info-cell {
    display: flex;
    align-items: center;
    gap: 0.75rem;
}

.product-avatar {
    width: 40px;
    height: 40px;
    min-width: 40px;
    border-radius: 10px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    font-size: 1rem;
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
    
    .page-header-actions .d-flex {
        flex-direction: column;
        width: 100%;
    }
    
    .page-header-actions .btn {
        width: 100%;
    }
    
    /* Stats cards */
    .stat-card .card-body h5 {
        font-size: 1rem;
    }
    
    .stat-card .fa-2x {
        font-size: 1.25rem !important;
    }
    
    /* Tableau produits -> Cartes */
    .products-table thead {
        display: none;
    }
    
    .products-table tbody tr {
        display: block;
        background: white;
        border: 1px solid #e9ecef;
        border-radius: 12px;
        margin: 0.75rem;
        padding: 1rem;
        box-shadow: 0 2px 8px rgba(0,0,0,0.04);
    }
    
    .products-table tbody td {
        display: block;
        padding: 0.5rem 0 !important;
        border: none;
        text-align: left !important;
    }
    
    .products-table tbody td::before {
        content: attr(data-label);
        display: block;
        font-size: 0.7rem;
        text-transform: uppercase;
        color: #94a3b8;
        font-weight: 700;
        letter-spacing: 0.5px;
        margin-bottom: 0.35rem;
    }
    
    .products-table tbody td[data-label=\"Produit\"] {
        padding-bottom: 0.75rem !important;
        border-bottom: 1px solid #f1f5f9;
        margin-bottom: 0.5rem;
    }
    
    .products-table tbody td[data-label=\"Produit\"]::before {
        display: none;
    }
    
    .products-table tbody td[data-label=\"Statut\"] {
        text-align: right !important;
        padding-top: 0.5rem !important;
        border-top: 1px solid #f1f5f9;
        margin-top: 0.5rem;
    }
    
    .products-table tbody td[data-label=\"Statut\"]::before {
        display: none;
    }
    
    /* Empty state */
    .products-table tbody td[colspan] {
        text-align: center !important;
        padding: 2rem 1rem !important;
    }
    
    .products-table tbody td[colspan]::before {
        display: none;
    }
    
    /* Summary cards */
    .summary-card h3 {
        font-size: 1.25rem;
    }
    
    .summary-card small {
        font-size: 0.7rem;
    }
}

/* Très petits mobiles */
@media (max-width: 375.98px) {
    .stat-card .card-body {
        padding: 0.75rem;
    }
    
    .stat-card .card-body h5 {
        font-size: 0.9rem;
    }
    
    .stat-card small {
        font-size: 0.65rem;
    }
    
    .product-avatar {
        width: 34px;
        height: 34px;
        min-width: 34px;
        font-size: 0.85rem;
    }
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 219
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

        // line 220
        yield "<div class=\"container-fluid px-4 py-3\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-start mb-4 flex-wrap gap-3 page-header-actions\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb mb-2\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 227
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Tableau de bord
                        </a>
                    </li>
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 232
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_inventory_index");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-clipboard-list me-1\"></i> Inventaires
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">";
        // line 236
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 236, $this->source); })()), "inventoryNumber", [], "any", false, false, false, 236), "html", null, true);
        yield "</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-clipboard-list text-primary me-2\"></i>
                Inventaire ";
        // line 241
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 241, $this->source); })()), "inventoryNumber", [], "any", false, false, false, 241), "html", null, true);
        yield "
            </h1>
        </div>
        <div class=\"d-flex gap-2\">
            <a href=\"";
        // line 245
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_inventory_index");
        yield "\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour
            </a>
            ";
        // line 248
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 248, $this->source); })()), "status", [], "any", false, false, false, 248) == "in_progress")) {
            // line 249
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_inventory_count", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 249, $this->source); })()), "id", [], "any", false, false, false, 249)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">
                    <i class=\"fas fa-clipboard-list me-1\"></i> Continuer la saisie
                </a>
            ";
        }
        // line 253
        yield "            ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 253, $this->source); })()), "status", [], "any", false, false, false, 253) == "completed")) {
            // line 254
            yield "                <button type=\"button\" class=\"btn btn-outline-success\" onclick=\"window.print()\">
                    <i class=\"fas fa-print me-1\"></i> Imprimer
                </button>
            ";
        }
        // line 258
        yield "        </div>
    </div>

    <!-- Informations générales -->
    <div class=\"row g-3 g-md-4 mb-4\">
        <div class=\"col-6 col-md-6 col-xl-3\">
            <div class=\"card border-0 shadow-sm stat-card h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div class=\"min-w-0\">
                            <small class=\"text-muted text-uppercase d-block\" style=\"font-size: 0.7rem;\">N° inventaire</small>
                            <h6 class=\"mb-0 fw-bold text-truncate\">";
        // line 269
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 269, $this->source); })()), "inventoryNumber", [], "any", false, false, false, 269), "html", null, true);
        yield "</h6>
                        </div>
                        <i class=\"fas fa-hashtag fa-2x text-primary opacity-50 flex-shrink-0\"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-6 col-md-6 col-xl-3\">
            <div class=\"card border-0 shadow-sm stat-card h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div class=\"min-w-0\">
                            <small class=\"text-muted text-uppercase d-block\" style=\"font-size: 0.7rem;\">Date</small>
                            <h6 class=\"mb-0 fw-bold\">";
        // line 282
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 282, $this->source); })()), "inventoryDate", [], "any", false, false, false, 282), "d/m/Y"), "html", null, true);
        yield "</h6>
                        </div>
                        <i class=\"fas fa-calendar-alt fa-2x text-primary opacity-50 flex-shrink-0\"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-6 col-md-6 col-xl-3\">
            <div class=\"card border-0 shadow-sm stat-card h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div class=\"min-w-0\">
                            <small class=\"text-muted text-uppercase d-block\" style=\"font-size: 0.7rem;\">Statut</small>
                            <span class=\"badge ";
        // line 295
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 295, $this->source); })()), "statusBadgeClass", [], "any", false, false, false, 295), "html", null, true);
        yield " status-badge\">
                                <i class=\"fas ";
        // line 296
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 296, $this->source); })()), "statusIcon", [], "any", false, false, false, 296), "html", null, true);
        yield " me-1\"></i>
                                ";
        // line 297
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 297, $this->source); })()), "statusLabel", [], "any", false, false, false, 297), "html", null, true);
        yield "
                            </span>
                        </div>
                        <i class=\"fas fa-info-circle fa-2x text-primary opacity-50 flex-shrink-0\"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-6 col-md-6 col-xl-3\">
            <div class=\"card border-0 shadow-sm stat-card h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div class=\"min-w-0\">
                            <small class=\"text-muted text-uppercase d-block\" style=\"font-size: 0.7rem;\">Progression</small>
                            <h6 class=\"mb-0 fw-bold\">";
        // line 311
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["progress"]) || array_key_exists("progress", $context) ? $context["progress"] : (function () { throw new RuntimeError('Variable "progress" does not exist.', 311, $this->source); })()), "html", null, true);
        yield "%</h6>
                        </div>
                        <i class=\"fas fa-chart-line fa-2x text-primary opacity-50 flex-shrink-0\"></i>
                    </div>
                    <div class=\"progress progress-custom mt-2\">
                        <div class=\"progress-bar bg-primary\" style=\"width: ";
        // line 316
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["progress"]) || array_key_exists("progress", $context) ? $context["progress"] : (function () { throw new RuntimeError('Variable "progress" does not exist.', 316, $this->source); })()), "html", null, true);
        yield "%\"></div>
                    </div>
                    <small class=\"text-muted\" style=\"font-size: 0.7rem;\">";
        // line 318
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["countedItems"]) || array_key_exists("countedItems", $context) ? $context["countedItems"] : (function () { throw new RuntimeError('Variable "countedItems" does not exist.', 318, $this->source); })()), "html", null, true);
        yield "/";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 318, $this->source); })()), "html", null, true);
        yield " comptés</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Détails supplémentaires -->
    <div class=\"row g-3 g-md-4 mb-4\">
        <div class=\"col-12 col-md-6\">
            <div class=\"card border-0 shadow-sm h-100\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold fs-6\">
                        <i class=\"fas fa-user me-2 text-primary\"></i>
                        Informations
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row g-3\">
                        <div class=\"col-6\">
                            <small class=\"text-muted d-block\" style=\"font-size: 0.7rem;\">Créé par</small>
                            <div class=\"fw-bold text-truncate\">";
        // line 338
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 338, $this->source); })()), "createdBy", [], "any", false, false, false, 338), "fullName", [], "any", false, false, false, 338)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 338, $this->source); })()), "createdBy", [], "any", false, false, false, 338), "fullName", [], "any", false, false, false, 338), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 338, $this->source); })()), "createdBy", [], "any", false, false, false, 338), "email", [], "any", false, false, false, 338), "html", null, true)));
        yield "</div>
                        </div>
                        <div class=\"col-6\">
                            <small class=\"text-muted d-block\" style=\"font-size: 0.7rem;\">Créé le</small>
                            <div class=\"fw-bold\">";
        // line 342
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 342, $this->source); })()), "createdAt", [], "any", false, false, false, 342), "d/m/Y H:i"), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"col-12\">
                            <small class=\"text-muted d-block\" style=\"font-size: 0.7rem;\">Emplacement</small>
                            <div class=\"fw-bold\">";
        // line 346
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 346, $this->source); })()), "location", [], "any", false, false, false, 346)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 346, $this->source); })()), "location", [], "any", false, false, false, 346), "displayName", [], "any", false, false, false, 346), "html", null, true)) : ("Tous les emplacements"));
        yield "</div>
                        </div>
                        ";
        // line 348
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 348, $this->source); })()), "validatedBy", [], "any", false, false, false, 348)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 349
            yield "                        <div class=\"col-6\">
                            <small class=\"text-muted d-block\" style=\"font-size: 0.7rem;\">Validé par</small>
                            <div class=\"fw-bold text-success text-truncate\">";
            // line 351
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 351, $this->source); })()), "validatedBy", [], "any", false, false, false, 351), "fullName", [], "any", false, false, false, 351)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 351, $this->source); })()), "validatedBy", [], "any", false, false, false, 351), "fullName", [], "any", false, false, false, 351), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 351, $this->source); })()), "validatedBy", [], "any", false, false, false, 351), "email", [], "any", false, false, false, 351), "html", null, true)));
            yield "</div>
                        </div>
                        <div class=\"col-6\">
                            <small class=\"text-muted d-block\" style=\"font-size: 0.7rem;\">Validé le</small>
                            <div class=\"fw-bold text-success\">";
            // line 355
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 355, $this->source); })()), "validatedAt", [], "any", false, false, false, 355), "d/m/Y H:i"), "html", null, true);
            yield "</div>
                        </div>
                        ";
        }
        // line 358
        yield "                        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 358, $this->source); })()), "notes", [], "any", false, false, false, 358)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 359
            yield "                        <div class=\"col-12\">
                            <small class=\"text-muted d-block\" style=\"font-size: 0.7rem;\">Notes</small>
                            <div class=\"fw-bold\">";
            // line 361
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 361, $this->source); })()), "notes", [], "any", false, false, false, 361), "html", null, true);
            yield "</div>
                        </div>
                        ";
        }
        // line 364
        yield "                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-12 col-md-6\">
            <div class=\"card border-0 shadow-sm h-100\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold fs-6\">
                        <i class=\"fas fa-chart-pie me-2 text-primary\"></i>
                        Résumé
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row text-center g-2\">
                        <div class=\"col-4\">
                            <div class=\"p-2 p-md-3 bg-light rounded summary-card\">
                                <h3 class=\"mb-0 text-primary\">";
        // line 380
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 380, $this->source); })()), "html", null, true);
        yield "</h3>
                                <small class=\"text-muted\">Produits</small>
                            </div>
                        </div>
                        <div class=\"col-4\">
                            <div class=\"p-2 p-md-3 bg-light rounded summary-card\">
                                <h3 class=\"mb-0 text-warning\">";
        // line 386
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["differences"]) || array_key_exists("differences", $context) ? $context["differences"] : (function () { throw new RuntimeError('Variable "differences" does not exist.', 386, $this->source); })())), "html", null, true);
        yield "</h3>
                                <small class=\"text-muted\">Écarts</small>
                            </div>
                        </div>
                        <div class=\"col-4\">
                            <div class=\"p-2 p-md-3 bg-light rounded summary-card\">
                                <h3 class=\"mb-0 text-success\">";
        // line 392
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["countedItems"]) || array_key_exists("countedItems", $context) ? $context["countedItems"] : (function () { throw new RuntimeError('Variable "countedItems" does not exist.', 392, $this->source); })()), "html", null, true);
        yield "</h3>
                                <small class=\"text-muted\">Comptés</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Liste des produits -->
    <div class=\"card border-0 shadow-sm\">
        <div class=\"card-header bg-white py-3\">
            <h5 class=\"mb-0 fw-semibold fs-6\">
                <i class=\"fas fa-list me-2 text-primary\"></i>
                Produits inventoriés
            </h5>
        </div>
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table align-middle mb-0 products-table\">
                    <thead>
                        <tr>
                            <th>Produit</th>
                            <th>Code-barres</th>
                            <th class=\"text-end\">Stock attendu</th>
                            <th class=\"text-end\">Stock compté</th>
                            <th class=\"text-end\">Écart</th>
                            <th>Statut</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 424
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 424, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 425
            yield "                            ";
            $context["diff"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "difference", [], "any", false, false, false, 425);
            // line 426
            yield "                            ";
            $context["diffClass"] = ((((isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 426, $this->source); })()) > 0)) ? ("difference-positive") : (((((isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 426, $this->source); })()) < 0)) ? ("difference-negative") : ("difference-zero"))));
            // line 427
            yield "                            <tr>
                                <td data-label=\"Produit\">
                                    <div class=\"product-info-cell\">
                                        <div class=\"product-avatar\">
                                            ";
            // line 431
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 431), "name", [], "any", false, false, false, 431))), "html", null, true);
            yield "
                                        </div>
                                        <div class=\"min-w-0\">
                                            <div class=\"fw-bold text-truncate\">";
            // line 434
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 434), "name", [], "any", false, false, false, 434), "html", null, true);
            yield "</div>
                                            <small class=\"text-muted\">
                                                ";
            // line 436
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, true, false, 436), "category", [], "any", false, true, false, 436), "name", [], "any", true, true, false, 436)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 436), "category", [], "any", false, false, false, 436), "name", [], "any", false, false, false, 436), "Sans catégorie")) : ("Sans catégorie")), "html", null, true);
            yield "
                                            </small>
                                        </div>
                                    </div>
                                </td>
                                <td data-label=\"Code-barres\">
                                    <code class=\"small\">";
            // line 442
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 442), "barcode", [], "any", false, false, false, 442), "html", null, true);
            yield "</code>
                                </td>
                                <td data-label=\"Stock attendu\" class=\"text-end\">
                                    <span class=\"fw-bold\">";
            // line 445
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "expectedQuantity", [], "any", false, false, false, 445), 0, ",", " "), "html", null, true);
            yield "</span>
                                </td>
                                <td data-label=\"Stock compté\" class=\"text-end\">
                                    ";
            // line 448
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "actualQuantity", [], "any", false, false, false, 448) > 0)) {
                // line 449
                yield "                                        <span class=\"fw-bold\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "actualQuantity", [], "any", false, false, false, 449), 0, ",", " "), "html", null, true);
                yield "</span>
                                    ";
            } else {
                // line 451
                yield "                                        <span class=\"text-muted\">—</span>
                                    ";
            }
            // line 453
            yield "                                </td>
                                <td data-label=\"Écart\" class=\"text-end\">
                                    ";
            // line 455
            if (((isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 455, $this->source); })()) != 0)) {
                // line 456
                yield "                                        <span class=\"badge ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["diffClass"]) || array_key_exists("diffClass", $context) ? $context["diffClass"] : (function () { throw new RuntimeError('Variable "diffClass" does not exist.', 456, $this->source); })()), "html", null, true);
                yield "\">
                                            ";
                // line 457
                yield ((((isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 457, $this->source); })()) > 0)) ? ("+") : (""));
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 457, $this->source); })()), 0, ",", " "), "html", null, true);
                yield "
                                        </span>
                                    ";
            } else {
                // line 460
                yield "                                        <span class=\"badge difference-zero\">0</span>
                                    ";
            }
            // line 462
            yield "                                </td>
                                <td data-label=\"Statut\">
                                    ";
            // line 464
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "actualQuantity", [], "any", false, false, false, 464) > 0)) {
                // line 465
                yield "                                        <span class=\"badge bg-success\">Compté</span>
                                    ";
            } else {
                // line 467
                yield "                                        <span class=\"badge bg-warning text-dark\">À compter</span>
                                    ";
            }
            // line 469
            yield "                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 471
        if (!$context['_iterated']) {
            // line 472
            yield "                            <tr>
                                <td colspan=\"6\" class=\"text-center py-5\">
                                    <i class=\"fas fa-box-open fa-3x text-muted mb-3 opacity-50\"></i>
                                    <p class=\"text-muted mb-0\">Aucun produit dans cet inventaire</p>
                                    <a href=\"";
            // line 476
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_inventory_add_products", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 476, $this->source); })()), "id", [], "any", false, false, false, 476)]), "html", null, true);
            yield "\" class=\"btn btn-primary btn-sm mt-2\">
                                        <i class=\"fas fa-plus me-1\"></i> Ajouter des produits
                                    </a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 482
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
        return "stock/inventory/show.html.twig";
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
        return array (  754 => 482,  742 => 476,  736 => 472,  734 => 471,  728 => 469,  724 => 467,  720 => 465,  718 => 464,  714 => 462,  710 => 460,  703 => 457,  698 => 456,  696 => 455,  692 => 453,  688 => 451,  682 => 449,  680 => 448,  674 => 445,  668 => 442,  659 => 436,  654 => 434,  648 => 431,  642 => 427,  639 => 426,  636 => 425,  631 => 424,  596 => 392,  587 => 386,  578 => 380,  560 => 364,  554 => 361,  550 => 359,  547 => 358,  541 => 355,  534 => 351,  530 => 349,  528 => 348,  523 => 346,  516 => 342,  509 => 338,  484 => 318,  479 => 316,  471 => 311,  454 => 297,  450 => 296,  446 => 295,  430 => 282,  414 => 269,  401 => 258,  395 => 254,  392 => 253,  384 => 249,  382 => 248,  376 => 245,  369 => 241,  361 => 236,  354 => 232,  346 => 227,  337 => 220,  324 => 219,  102 => 7,  89 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/stock/inventory/show.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Inventaire - {{ inventory.inventoryNumber }}{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
/* ============================================
   CARTES STATISTIQUES
   ============================================ */
.stat-card {
    border-radius: 0.75rem;
    transition: all 0.2s;
}
.stat-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.08) !important;
}

.difference-positive {
    background-color: #d1fae5;
    color: #065f46;
}
.difference-negative {
    background-color: #fee2e2;
    color: #991b1b;
}
.difference-zero {
    background-color: #f3f4f6;
    color: #6b7280;
}
.status-badge {
    font-size: 0.8rem;
    padding: 0.35rem 0.75rem;
}
.progress-custom {
    height: 8px;
    border-radius: 4px;
}

/* ============================================
   TABLEAU DES PRODUITS
   ============================================ */
.products-table {
    margin: 0;
}

.products-table thead th {
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

.products-table tbody td {
    padding: 1rem;
    vertical-align: middle;
    border-bottom: 1px solid #f1f5f9;
}

.product-info-cell {
    display: flex;
    align-items: center;
    gap: 0.75rem;
}

.product-avatar {
    width: 40px;
    height: 40px;
    min-width: 40px;
    border-radius: 10px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    font-size: 1rem;
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
    
    .page-header-actions .d-flex {
        flex-direction: column;
        width: 100%;
    }
    
    .page-header-actions .btn {
        width: 100%;
    }
    
    /* Stats cards */
    .stat-card .card-body h5 {
        font-size: 1rem;
    }
    
    .stat-card .fa-2x {
        font-size: 1.25rem !important;
    }
    
    /* Tableau produits -> Cartes */
    .products-table thead {
        display: none;
    }
    
    .products-table tbody tr {
        display: block;
        background: white;
        border: 1px solid #e9ecef;
        border-radius: 12px;
        margin: 0.75rem;
        padding: 1rem;
        box-shadow: 0 2px 8px rgba(0,0,0,0.04);
    }
    
    .products-table tbody td {
        display: block;
        padding: 0.5rem 0 !important;
        border: none;
        text-align: left !important;
    }
    
    .products-table tbody td::before {
        content: attr(data-label);
        display: block;
        font-size: 0.7rem;
        text-transform: uppercase;
        color: #94a3b8;
        font-weight: 700;
        letter-spacing: 0.5px;
        margin-bottom: 0.35rem;
    }
    
    .products-table tbody td[data-label=\"Produit\"] {
        padding-bottom: 0.75rem !important;
        border-bottom: 1px solid #f1f5f9;
        margin-bottom: 0.5rem;
    }
    
    .products-table tbody td[data-label=\"Produit\"]::before {
        display: none;
    }
    
    .products-table tbody td[data-label=\"Statut\"] {
        text-align: right !important;
        padding-top: 0.5rem !important;
        border-top: 1px solid #f1f5f9;
        margin-top: 0.5rem;
    }
    
    .products-table tbody td[data-label=\"Statut\"]::before {
        display: none;
    }
    
    /* Empty state */
    .products-table tbody td[colspan] {
        text-align: center !important;
        padding: 2rem 1rem !important;
    }
    
    .products-table tbody td[colspan]::before {
        display: none;
    }
    
    /* Summary cards */
    .summary-card h3 {
        font-size: 1.25rem;
    }
    
    .summary-card small {
        font-size: 0.7rem;
    }
}

/* Très petits mobiles */
@media (max-width: 375.98px) {
    .stat-card .card-body {
        padding: 0.75rem;
    }
    
    .stat-card .card-body h5 {
        font-size: 0.9rem;
    }
    
    .stat-card small {
        font-size: 0.65rem;
    }
    
    .product-avatar {
        width: 34px;
        height: 34px;
        min-width: 34px;
        font-size: 0.85rem;
    }
}
</style>
{% endblock %}

{% block body %}
<div class=\"container-fluid px-4 py-3\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-start mb-4 flex-wrap gap-3 page-header-actions\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb mb-2\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('app_dashboard') }}\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Tableau de bord
                        </a>
                    </li>
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('app_stock_inventory_index') }}\" class=\"text-decoration-none\">
                            <i class=\"fas fa-clipboard-list me-1\"></i> Inventaires
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">{{ inventory.inventoryNumber }}</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-clipboard-list text-primary me-2\"></i>
                Inventaire {{ inventory.inventoryNumber }}
            </h1>
        </div>
        <div class=\"d-flex gap-2\">
            <a href=\"{{ path('app_stock_inventory_index') }}\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour
            </a>
            {% if inventory.status == 'in_progress' %}
                <a href=\"{{ path('app_stock_inventory_count', {'id': inventory.id}) }}\" class=\"btn btn-primary\">
                    <i class=\"fas fa-clipboard-list me-1\"></i> Continuer la saisie
                </a>
            {% endif %}
            {% if inventory.status == 'completed' %}
                <button type=\"button\" class=\"btn btn-outline-success\" onclick=\"window.print()\">
                    <i class=\"fas fa-print me-1\"></i> Imprimer
                </button>
            {% endif %}
        </div>
    </div>

    <!-- Informations générales -->
    <div class=\"row g-3 g-md-4 mb-4\">
        <div class=\"col-6 col-md-6 col-xl-3\">
            <div class=\"card border-0 shadow-sm stat-card h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div class=\"min-w-0\">
                            <small class=\"text-muted text-uppercase d-block\" style=\"font-size: 0.7rem;\">N° inventaire</small>
                            <h6 class=\"mb-0 fw-bold text-truncate\">{{ inventory.inventoryNumber }}</h6>
                        </div>
                        <i class=\"fas fa-hashtag fa-2x text-primary opacity-50 flex-shrink-0\"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-6 col-md-6 col-xl-3\">
            <div class=\"card border-0 shadow-sm stat-card h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div class=\"min-w-0\">
                            <small class=\"text-muted text-uppercase d-block\" style=\"font-size: 0.7rem;\">Date</small>
                            <h6 class=\"mb-0 fw-bold\">{{ inventory.inventoryDate|date('d/m/Y') }}</h6>
                        </div>
                        <i class=\"fas fa-calendar-alt fa-2x text-primary opacity-50 flex-shrink-0\"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-6 col-md-6 col-xl-3\">
            <div class=\"card border-0 shadow-sm stat-card h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div class=\"min-w-0\">
                            <small class=\"text-muted text-uppercase d-block\" style=\"font-size: 0.7rem;\">Statut</small>
                            <span class=\"badge {{ inventory.statusBadgeClass }} status-badge\">
                                <i class=\"fas {{ inventory.statusIcon }} me-1\"></i>
                                {{ inventory.statusLabel }}
                            </span>
                        </div>
                        <i class=\"fas fa-info-circle fa-2x text-primary opacity-50 flex-shrink-0\"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-6 col-md-6 col-xl-3\">
            <div class=\"card border-0 shadow-sm stat-card h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div class=\"min-w-0\">
                            <small class=\"text-muted text-uppercase d-block\" style=\"font-size: 0.7rem;\">Progression</small>
                            <h6 class=\"mb-0 fw-bold\">{{ progress }}%</h6>
                        </div>
                        <i class=\"fas fa-chart-line fa-2x text-primary opacity-50 flex-shrink-0\"></i>
                    </div>
                    <div class=\"progress progress-custom mt-2\">
                        <div class=\"progress-bar bg-primary\" style=\"width: {{ progress }}%\"></div>
                    </div>
                    <small class=\"text-muted\" style=\"font-size: 0.7rem;\">{{ countedItems }}/{{ totalItems }} comptés</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Détails supplémentaires -->
    <div class=\"row g-3 g-md-4 mb-4\">
        <div class=\"col-12 col-md-6\">
            <div class=\"card border-0 shadow-sm h-100\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold fs-6\">
                        <i class=\"fas fa-user me-2 text-primary\"></i>
                        Informations
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row g-3\">
                        <div class=\"col-6\">
                            <small class=\"text-muted d-block\" style=\"font-size: 0.7rem;\">Créé par</small>
                            <div class=\"fw-bold text-truncate\">{{ inventory.createdBy.fullName ?: inventory.createdBy.email }}</div>
                        </div>
                        <div class=\"col-6\">
                            <small class=\"text-muted d-block\" style=\"font-size: 0.7rem;\">Créé le</small>
                            <div class=\"fw-bold\">{{ inventory.createdAt|date('d/m/Y H:i') }}</div>
                        </div>
                        <div class=\"col-12\">
                            <small class=\"text-muted d-block\" style=\"font-size: 0.7rem;\">Emplacement</small>
                            <div class=\"fw-bold\">{{ inventory.location ? inventory.location.displayName : 'Tous les emplacements' }}</div>
                        </div>
                        {% if inventory.validatedBy %}
                        <div class=\"col-6\">
                            <small class=\"text-muted d-block\" style=\"font-size: 0.7rem;\">Validé par</small>
                            <div class=\"fw-bold text-success text-truncate\">{{ inventory.validatedBy.fullName ?: inventory.validatedBy.email }}</div>
                        </div>
                        <div class=\"col-6\">
                            <small class=\"text-muted d-block\" style=\"font-size: 0.7rem;\">Validé le</small>
                            <div class=\"fw-bold text-success\">{{ inventory.validatedAt|date('d/m/Y H:i') }}</div>
                        </div>
                        {% endif %}
                        {% if inventory.notes %}
                        <div class=\"col-12\">
                            <small class=\"text-muted d-block\" style=\"font-size: 0.7rem;\">Notes</small>
                            <div class=\"fw-bold\">{{ inventory.notes }}</div>
                        </div>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-12 col-md-6\">
            <div class=\"card border-0 shadow-sm h-100\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0 fw-semibold fs-6\">
                        <i class=\"fas fa-chart-pie me-2 text-primary\"></i>
                        Résumé
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row text-center g-2\">
                        <div class=\"col-4\">
                            <div class=\"p-2 p-md-3 bg-light rounded summary-card\">
                                <h3 class=\"mb-0 text-primary\">{{ totalItems }}</h3>
                                <small class=\"text-muted\">Produits</small>
                            </div>
                        </div>
                        <div class=\"col-4\">
                            <div class=\"p-2 p-md-3 bg-light rounded summary-card\">
                                <h3 class=\"mb-0 text-warning\">{{ differences|length }}</h3>
                                <small class=\"text-muted\">Écarts</small>
                            </div>
                        </div>
                        <div class=\"col-4\">
                            <div class=\"p-2 p-md-3 bg-light rounded summary-card\">
                                <h3 class=\"mb-0 text-success\">{{ countedItems }}</h3>
                                <small class=\"text-muted\">Comptés</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Liste des produits -->
    <div class=\"card border-0 shadow-sm\">
        <div class=\"card-header bg-white py-3\">
            <h5 class=\"mb-0 fw-semibold fs-6\">
                <i class=\"fas fa-list me-2 text-primary\"></i>
                Produits inventoriés
            </h5>
        </div>
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table align-middle mb-0 products-table\">
                    <thead>
                        <tr>
                            <th>Produit</th>
                            <th>Code-barres</th>
                            <th class=\"text-end\">Stock attendu</th>
                            <th class=\"text-end\">Stock compté</th>
                            <th class=\"text-end\">Écart</th>
                            <th>Statut</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for item in items %}
                            {% set diff = item.difference %}
                            {% set diffClass = diff > 0 ? 'difference-positive' : (diff < 0 ? 'difference-negative' : 'difference-zero') %}
                            <tr>
                                <td data-label=\"Produit\">
                                    <div class=\"product-info-cell\">
                                        <div class=\"product-avatar\">
                                            {{ item.product.name|first|upper }}
                                        </div>
                                        <div class=\"min-w-0\">
                                            <div class=\"fw-bold text-truncate\">{{ item.product.name }}</div>
                                            <small class=\"text-muted\">
                                                {{ item.product.category.name|default('Sans catégorie') }}
                                            </small>
                                        </div>
                                    </div>
                                </td>
                                <td data-label=\"Code-barres\">
                                    <code class=\"small\">{{ item.product.barcode }}</code>
                                </td>
                                <td data-label=\"Stock attendu\" class=\"text-end\">
                                    <span class=\"fw-bold\">{{ item.expectedQuantity|number_format(0, ',', ' ') }}</span>
                                </td>
                                <td data-label=\"Stock compté\" class=\"text-end\">
                                    {% if item.actualQuantity > 0 %}
                                        <span class=\"fw-bold\">{{ item.actualQuantity|number_format(0, ',', ' ') }}</span>
                                    {% else %}
                                        <span class=\"text-muted\">—</span>
                                    {% endif %}
                                </td>
                                <td data-label=\"Écart\" class=\"text-end\">
                                    {% if diff != 0 %}
                                        <span class=\"badge {{ diffClass }}\">
                                            {{ diff > 0 ? '+' : '' }}{{ diff|number_format(0, ',', ' ') }}
                                        </span>
                                    {% else %}
                                        <span class=\"badge difference-zero\">0</span>
                                    {% endif %}
                                </td>
                                <td data-label=\"Statut\">
                                    {% if item.actualQuantity > 0 %}
                                        <span class=\"badge bg-success\">Compté</span>
                                    {% else %}
                                        <span class=\"badge bg-warning text-dark\">À compter</span>
                                    {% endif %}
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"6\" class=\"text-center py-5\">
                                    <i class=\"fas fa-box-open fa-3x text-muted mb-3 opacity-50\"></i>
                                    <p class=\"text-muted mb-0\">Aucun produit dans cet inventaire</p>
                                    <a href=\"{{ path('app_stock_inventory_add_products', {'id': inventory.id}) }}\" class=\"btn btn-primary btn-sm mt-2\">
                                        <i class=\"fas fa-plus me-1\"></i> Ajouter des produits
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
{% endblock %}", "stock/inventory/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\stock\\inventory\\show.html.twig");
    }
}
