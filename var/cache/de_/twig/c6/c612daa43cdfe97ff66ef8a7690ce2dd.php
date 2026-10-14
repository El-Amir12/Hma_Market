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

/* stock/inventory/validate.html.twig */
class __TwigTemplate_a04648b9a9fed350811c29e63a112028 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/inventory/validate.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/inventory/validate.html.twig"));

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

        yield "Validation - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 4, $this->source); })()), "inventoryNumber", [], "any", false, false, false, 4), "html", null, true);
        yield " - HMA Market";
        
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
   ÉTAPES
   ============================================ */
.steps {
    display: flex;
    justify-content: space-between;
    margin-bottom: 2rem;
    position: relative;
    padding: 0 1rem;
}

.step {
    text-align: center;
    flex: 1;
    position: relative;
    z-index: 1;
}

.step-circle {
    width: 44px;
    height: 44px;
    background: #e9ecef;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 0.5rem;
    font-weight: 700;
    color: #6c757d;
    font-size: 1rem;
    border: 3px solid white;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
}

.step.active .step-circle {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    transform: scale(1.1);
    box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
}

.step.completed .step-circle {
    background: linear-gradient(135deg, #10b981 0%, #059669 100%);
    color: white;
}

.step-label {
    font-size: 0.75rem;
    color: #6c757d;
    font-weight: 500;
}

.step.active .step-label {
    color: #667eea;
    font-weight: 700;
}

.step.completed .step-label {
    color: #10b981;
    font-weight: 600;
}

.steps-line {
    position: absolute;
    top: 22px;
    left: 10%;
    right: 10%;
    height: 3px;
    background: #e9ecef;
    z-index: 0;
}

/* ============================================
   CARTE INVENTAIRE
   ============================================ */
.inventory-info {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    border-radius: 20px;
    padding: 1.5rem 2rem;
    margin-bottom: 2rem;
    box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
    position: relative;
    overflow: hidden;
}

.inventory-info::before {
    content: '';
    position: absolute;
    top: -30%;
    right: -10%;
    width: 200px;
    height: 200px;
    background: rgba(255,255,255,0.1);
    border-radius: 50%;
}

.inventory-info h3 {
    font-weight: 800;
    margin-bottom: 0.5rem;
    font-size: 1.3rem;
    position: relative;
    z-index: 1;
}

.inventory-info .badge {
    background: rgba(255, 255, 255, 0.25) !important;
    color: white !important;
    font-weight: 600;
    padding: 0.4rem 0.9rem;
    border-radius: 2rem;
    font-size: 0.8rem;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255,255,255,0.3);
    position: relative;
    z-index: 1;
}

/* ============================================
   CARTES STATISTIQUES
   ============================================ */
.stats-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1rem;
    margin-bottom: 1.5rem;
}

.stat-card {
    background: white;
    border-radius: 16px;
    padding: 1.5rem;
    box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    border: 1px solid #e9ecef;
    display: flex;
    align-items: center;
    gap: 1rem;
    transition: all 0.3s ease;
}

.stat-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.08);
}

.stat-icon {
    width: 50px;
    height: 50px;
    min-width: 50px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.25rem;
    color: white;
}

.stat-icon.primary {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
}

.stat-icon.success {
    background: linear-gradient(135deg, #10b981 0%, #059669 100%);
}

.stat-icon.warning {
    background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
}

.stat-icon.danger {
    background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
}

.stat-content {
    flex: 1;
    min-width: 0;
}

.stat-value {
    font-size: 1.75rem;
    font-weight: 800;
    color: #1e293b;
    line-height: 1;
    margin-bottom: 0.25rem;
}

.stat-label {
    font-size: 0.75rem;
    color: #64748b;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    font-weight: 600;
}

/* ============================================
   TABLEAU DES ÉCARTS
   ============================================ */
.differences-card {
    background: white;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    border: 1px solid #e9ecef;
    margin-bottom: 1.5rem;
}

.differences-header {
    background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%);
    padding: 1rem 1.5rem;
    border-bottom: 1px solid #fde68a;
    display: flex;
    align-items: center;
    gap: 0.75rem;
}

.differences-header i {
    font-size: 1.5rem;
    color: #d97706;
}

.differences-header h5 {
    margin: 0;
    font-weight: 700;
    color: #92400e;
    font-size: 1rem;
}

.differences-table {
    margin: 0;
    width: 100%;
}

.differences-table thead {
    background: #f8fafc;
}

.differences-table thead th {
    font-weight: 700;
    color: #475569;
    font-size: 0.8rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    padding: 1rem;
    border-bottom: 2px solid #e2e8f0;
}

.differences-table tbody td {
    padding: 1rem;
    vertical-align: middle;
    border-bottom: 1px solid #f1f5f9;
}

.product-info {
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

.product-name {
    font-weight: 600;
    color: #1e293b;
    font-size: 0.9rem;
}

.quantity-badge {
    display: inline-block;
    padding: 0.35rem 0.75rem;
    border-radius: 8px;
    font-weight: 700;
    font-size: 0.85rem;
}

.quantity-badge.expected {
    background: #eef2ff;
    color: #4f46e5;
}

.quantity-badge.actual {
    background: #f0fdf4;
    color: #16a34a;
}

.difference-badge {
    font-weight: 700;
    padding: 0.5rem 1rem;
    border-radius: 10px;
    font-size: 0.9rem;
    display: inline-block;
    min-width: 70px;
    text-align: center;
}

.difference-badge.positive {
    background: #dcfce7;
    color: #16a34a;
    border: 2px solid #86efac;
}

.difference-badge.negative {
    background: #fee2e2;
    color: #dc2626;
    border: 2px solid #fca5a5;
}

/* ============================================
   ÉTAT SANS ÉCART
   ============================================ */
.no-difference-card {
    background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%);
    border: 2px solid #86efac;
    border-radius: 16px;
    padding: 3rem 2rem;
    text-align: center;
    margin-bottom: 1.5rem;
}

.no-difference-card i {
    font-size: 4rem;
    color: #16a34a;
    margin-bottom: 1rem;
}

.no-difference-card h4 {
    color: #14532d;
    font-weight: 800;
    margin-bottom: 0.5rem;
}

.no-difference-card p {
    color: #166534;
    margin: 0;
    font-size: 0.95rem;
}

/* ============================================
   BOUTONS D'ACTION
   ============================================ */
.action-buttons {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 0.75rem;
    flex-wrap: wrap;
}

.btn-action {
    padding: 0.7rem 1.75rem;
    font-size: 0.95rem;
    font-weight: 600;
    border-radius: 12px;
    transition: all 0.3s ease;
    white-space: nowrap;
}

.btn-action:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 15px rgba(0,0,0,0.15);
}

.btn-success.btn-action {
    background: linear-gradient(135deg, #10b981 0%, #059669 100%);
    border: none;
    min-width: 220px;
}

/* ============================================
   RESPONSIVE MOBILE
   ============================================ */
@media (max-width: 767.98px) {
    .container-fluid {
        padding-left: 0.75rem !important;
        padding-right: 0.75rem !important;
    }
    
    .steps {
        margin-bottom: 1.5rem;
    }
    
    .step-circle {
        width: 34px;
        height: 34px;
        font-size: 0.8rem;
    }
    
    .step-label {
        font-size: 0.6rem;
    }
    
    .steps-line {
        top: 17px;
    }
    
    .inventory-info {
        padding: 1.25rem;
        border-radius: 16px;
    }
    
    .inventory-info h3 {
        font-size: 1.1rem;
    }
    
    .inventory-info .badge {
        font-size: 0.7rem;
        padding: 0.3rem 0.7rem;
    }
    
    /* Stats grid : 1 colonne sur mobile */
    .stats-grid {
        grid-template-columns: 1fr;
        gap: 0.75rem;
    }
    
    .stat-card {
        padding: 1rem;
    }
    
    .stat-icon {
        width: 42px;
        height: 42px;
        min-width: 42px;
        font-size: 1rem;
    }
    
    .stat-value {
        font-size: 1.4rem;
    }
    
    /* TABLEAU -> CARTES sur mobile */
    .differences-table thead {
        display: none;
    }
    
    .differences-table tbody tr {
        display: block;
        background: white;
        border: 1px solid #e9ecef;
        border-radius: 12px;
        margin: 0.75rem;
        padding: 1rem;
        box-shadow: 0 2px 8px rgba(0,0,0,0.04);
    }
    
    .differences-table tbody td {
        display: block;
        padding: 0.4rem 0 !important;
        border: none;
    }
    
    .differences-table tbody td::before {
        content: attr(data-label);
        display: block;
        font-size: 0.7rem;
        text-transform: uppercase;
        color: #94a3b8;
        font-weight: 600;
        letter-spacing: 0.5px;
        margin-bottom: 0.25rem;
    }
    
    .product-info {
        justify-content: flex-start;
    }
    
    /* Boutons */
    .action-buttons {
        flex-direction: column-reverse;
        align-items: stretch;
    }
    
    .btn-action {
        width: 100%;
        padding: 0.65rem 1rem;
        font-size: 0.9rem;
        min-width: auto !important;
    }
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 502
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

        // line 503
        yield "<div class=\"container-fluid px-4 py-3\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb mb-1\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 510
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_inventory_index");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-clipboard-list me-1\"></i> Inventaires
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">Validation</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-check-circle text-success me-2\"></i>
                Validation - ";
        // line 519
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 519, $this->source); })()), "inventoryNumber", [], "any", false, false, false, 519), "html", null, true);
        yield "
            </h1>
        </div>
    </div>

    <!-- Étapes -->
    <div class=\"steps\">
        <div class=\"step completed\">
            <div class=\"step-circle\"><i class=\"fas fa-check\"></i></div>
            <div class=\"step-label\">Création</div>
        </div>
        <div class=\"step completed\">
            <div class=\"step-circle\"><i class=\"fas fa-check\"></i></div>
            <div class=\"step-label\">Ajout produits</div>
        </div>
        <div class=\"step completed\">
            <div class=\"step-circle\"><i class=\"fas fa-check\"></i></div>
            <div class=\"step-label\">Saisie comptage</div>
        </div>
        <div class=\"step active\">
            <div class=\"step-circle\">4</div>
            <div class=\"step-label\">Validation</div>
        </div>
        <div class=\"steps-line\"></div>
    </div>

    <!-- Info inventaire -->
    <div class=\"inventory-info\">
        <h3>
            <i class=\"fas fa-clipboard-list me-2\"></i>
            ";
        // line 549
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 549, $this->source); })()), "inventoryNumber", [], "any", false, false, false, 549), "html", null, true);
        yield "
        </h3>
        <div class=\"d-flex flex-wrap gap-2 mt-3\">
            <span class=\"badge\">
                <i class=\"fas fa-calendar me-1\"></i>
                ";
        // line 554
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 554, $this->source); })()), "inventoryDate", [], "any", false, false, false, 554), "d/m/Y"), "html", null, true);
        yield "
            </span>
            ";
        // line 556
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 556, $this->source); })()), "location", [], "any", false, false, false, 556)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 557
            yield "                <span class=\"badge\">
                    <i class=\"fas fa-map-marker-alt me-1\"></i>
                    ";
            // line 559
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 559, $this->source); })()), "location", [], "any", false, false, false, 559), "name", [], "any", false, false, false, 559), "html", null, true);
            yield "
                </span>
            ";
        }
        // line 562
        yield "            <span class=\"badge\">
                <i class=\"fas fa-info-circle me-1\"></i>
                ";
        // line 564
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 564, $this->source); })()), "statusLabel", [], "any", false, false, false, 564), "html", null, true);
        yield "
            </span>
        </div>
    </div>

    <!-- Statistiques -->
    <div class=\"stats-grid\">
        <div class=\"stat-card\">
            <div class=\"stat-icon primary\">
                <i class=\"fas fa-boxes\"></i>
            </div>
            <div class=\"stat-content\">
                <div class=\"stat-value\">";
        // line 576
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 576, $this->source); })()), "html", null, true);
        yield "</div>
                <div class=\"stat-label\">Produits total</div>
            </div>
        </div>
        <div class=\"stat-card\">
            <div class=\"stat-icon ";
        // line 581
        yield ((((isset($context["differenceCount"]) || array_key_exists("differenceCount", $context) ? $context["differenceCount"] : (function () { throw new RuntimeError('Variable "differenceCount" does not exist.', 581, $this->source); })()) > 0)) ? ("warning") : ("success"));
        yield "\">
                <i class=\"fas fa-exclamation-triangle\"></i>
            </div>
            <div class=\"stat-content\">
                <div class=\"stat-value\">";
        // line 585
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["differenceCount"]) || array_key_exists("differenceCount", $context) ? $context["differenceCount"] : (function () { throw new RuntimeError('Variable "differenceCount" does not exist.', 585, $this->source); })()), "html", null, true);
        yield "</div>
                <div class=\"stat-label\">Produits avec écart</div>
            </div>
        </div>
    </div>

    <!-- Écarts -->
    ";
        // line 592
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["differences"]) || array_key_exists("differences", $context) ? $context["differences"] : (function () { throw new RuntimeError('Variable "differences" does not exist.', 592, $this->source); })())) > 0)) {
            // line 593
            yield "        <div class=\"differences-card\">
            <div class=\"differences-header\">
                <i class=\"fas fa-exclamation-triangle\"></i>
                <h5>
                    Écarts détectés (";
            // line 597
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["differences"]) || array_key_exists("differences", $context) ? $context["differences"] : (function () { throw new RuntimeError('Variable "differences" does not exist.', 597, $this->source); })())), "html", null, true);
            yield ")
                </h5>
            </div>
            <table class=\"differences-table\">
                <thead>
                    <tr>
                        <th>Produit</th>
                        <th class=\"text-center\">Attendu</th>
                        <th class=\"text-center\">Compté</th>
                        <th class=\"text-center\">Écart</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 610
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["differences"]) || array_key_exists("differences", $context) ? $context["differences"] : (function () { throw new RuntimeError('Variable "differences" does not exist.', 610, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 611
                yield "                    <tr>
                        <td data-label=\"Produit\">
                            <div class=\"product-info\">
                                <div class=\"product-avatar\">
                                    ";
                // line 615
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 615), "name", [], "any", false, false, false, 615))), "html", null, true);
                yield "
                                </div>
                                <div>
                                    <div class=\"product-name\">";
                // line 618
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 618), "name", [], "any", false, false, false, 618), "html", null, true);
                yield "</div>
                                    ";
                // line 619
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 619), "barcode", [], "any", false, false, false, 619)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 620
                    yield "                                        <div class=\"product-barcode\" style=\"font-size: 0.75rem; color: #94a3b8; font-family: 'Courier New', monospace;\">
                                            ";
                    // line 621
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 621), "barcode", [], "any", false, false, false, 621), "html", null, true);
                    yield "
                                        </div>
                                    ";
                }
                // line 624
                yield "                                </div>
                            </div>
                        </td>
                        <td data-label=\"Attendu\" class=\"text-center\">
                            <span class=\"quantity-badge expected\">";
                // line 628
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "expectedQuantity", [], "any", false, false, false, 628), "html", null, true);
                yield "</span>
                        </td>
                        <td data-label=\"Compté\" class=\"text-center\">
                            <span class=\"quantity-badge actual\">";
                // line 631
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "actualQuantity", [], "any", false, false, false, 631), "html", null, true);
                yield "</span>
                        </td>
                        <td data-label=\"Écart\" class=\"text-center\">
                            <span class=\"difference-badge ";
                // line 634
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "difference", [], "any", false, false, false, 634) > 0)) ? ("positive") : ("negative"));
                yield "\">
                                ";
                // line 635
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "difference", [], "any", false, false, false, 635) > 0)) {
                    yield "+";
                }
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "difference", [], "any", false, false, false, 635), "html", null, true);
                yield "
                            </span>
                        </td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 640
            yield "                </tbody>
            </table>
        </div>
    ";
        } else {
            // line 644
            yield "        <div class=\"no-difference-card\">
            <i class=\"fas fa-check-circle\"></i>
            <h4>Aucun écart détecté</h4>
            <p>Le stock physique correspond exactement au stock système.</p>
        </div>
    ";
        }
        // line 650
        yield "
    <!-- Boutons d'action -->
    <form method=\"post\">
        <div class=\"action-buttons\">
            <a href=\"";
        // line 654
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_inventory_count", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 654, $this->source); })()), "id", [], "any", false, false, false, 654)]), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary btn-action\">
                <i class=\"fas fa-arrow-left me-2\"></i>Retour au comptage
            </a>
            <button type=\"submit\" class=\"btn btn-success btn-action\" 
                    onclick=\"return confirm('Valider l\\'inventaire et appliquer les ajustements ?')\">
                <i class=\"fas fa-check-circle me-2\"></i>
                Valider l'inventaire
            </button>
        </div>
    </form>
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
        return "stock/inventory/validate.html.twig";
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
        return array (  855 => 654,  849 => 650,  841 => 644,  835 => 640,  821 => 635,  817 => 634,  811 => 631,  805 => 628,  799 => 624,  793 => 621,  790 => 620,  788 => 619,  784 => 618,  778 => 615,  772 => 611,  768 => 610,  752 => 597,  746 => 593,  744 => 592,  734 => 585,  727 => 581,  719 => 576,  704 => 564,  700 => 562,  694 => 559,  690 => 557,  688 => 556,  683 => 554,  675 => 549,  642 => 519,  630 => 510,  621 => 503,  608 => 502,  103 => 7,  90 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/stock/inventory/validate.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Validation - {{ inventory.inventoryNumber }} - HMA Market{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
/* ============================================
   ÉTAPES
   ============================================ */
.steps {
    display: flex;
    justify-content: space-between;
    margin-bottom: 2rem;
    position: relative;
    padding: 0 1rem;
}

.step {
    text-align: center;
    flex: 1;
    position: relative;
    z-index: 1;
}

.step-circle {
    width: 44px;
    height: 44px;
    background: #e9ecef;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 0.5rem;
    font-weight: 700;
    color: #6c757d;
    font-size: 1rem;
    border: 3px solid white;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
}

.step.active .step-circle {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    transform: scale(1.1);
    box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
}

.step.completed .step-circle {
    background: linear-gradient(135deg, #10b981 0%, #059669 100%);
    color: white;
}

.step-label {
    font-size: 0.75rem;
    color: #6c757d;
    font-weight: 500;
}

.step.active .step-label {
    color: #667eea;
    font-weight: 700;
}

.step.completed .step-label {
    color: #10b981;
    font-weight: 600;
}

.steps-line {
    position: absolute;
    top: 22px;
    left: 10%;
    right: 10%;
    height: 3px;
    background: #e9ecef;
    z-index: 0;
}

/* ============================================
   CARTE INVENTAIRE
   ============================================ */
.inventory-info {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    border-radius: 20px;
    padding: 1.5rem 2rem;
    margin-bottom: 2rem;
    box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
    position: relative;
    overflow: hidden;
}

.inventory-info::before {
    content: '';
    position: absolute;
    top: -30%;
    right: -10%;
    width: 200px;
    height: 200px;
    background: rgba(255,255,255,0.1);
    border-radius: 50%;
}

.inventory-info h3 {
    font-weight: 800;
    margin-bottom: 0.5rem;
    font-size: 1.3rem;
    position: relative;
    z-index: 1;
}

.inventory-info .badge {
    background: rgba(255, 255, 255, 0.25) !important;
    color: white !important;
    font-weight: 600;
    padding: 0.4rem 0.9rem;
    border-radius: 2rem;
    font-size: 0.8rem;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255,255,255,0.3);
    position: relative;
    z-index: 1;
}

/* ============================================
   CARTES STATISTIQUES
   ============================================ */
.stats-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1rem;
    margin-bottom: 1.5rem;
}

.stat-card {
    background: white;
    border-radius: 16px;
    padding: 1.5rem;
    box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    border: 1px solid #e9ecef;
    display: flex;
    align-items: center;
    gap: 1rem;
    transition: all 0.3s ease;
}

.stat-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.08);
}

.stat-icon {
    width: 50px;
    height: 50px;
    min-width: 50px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.25rem;
    color: white;
}

.stat-icon.primary {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
}

.stat-icon.success {
    background: linear-gradient(135deg, #10b981 0%, #059669 100%);
}

.stat-icon.warning {
    background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
}

.stat-icon.danger {
    background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
}

.stat-content {
    flex: 1;
    min-width: 0;
}

.stat-value {
    font-size: 1.75rem;
    font-weight: 800;
    color: #1e293b;
    line-height: 1;
    margin-bottom: 0.25rem;
}

.stat-label {
    font-size: 0.75rem;
    color: #64748b;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    font-weight: 600;
}

/* ============================================
   TABLEAU DES ÉCARTS
   ============================================ */
.differences-card {
    background: white;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    border: 1px solid #e9ecef;
    margin-bottom: 1.5rem;
}

.differences-header {
    background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%);
    padding: 1rem 1.5rem;
    border-bottom: 1px solid #fde68a;
    display: flex;
    align-items: center;
    gap: 0.75rem;
}

.differences-header i {
    font-size: 1.5rem;
    color: #d97706;
}

.differences-header h5 {
    margin: 0;
    font-weight: 700;
    color: #92400e;
    font-size: 1rem;
}

.differences-table {
    margin: 0;
    width: 100%;
}

.differences-table thead {
    background: #f8fafc;
}

.differences-table thead th {
    font-weight: 700;
    color: #475569;
    font-size: 0.8rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    padding: 1rem;
    border-bottom: 2px solid #e2e8f0;
}

.differences-table tbody td {
    padding: 1rem;
    vertical-align: middle;
    border-bottom: 1px solid #f1f5f9;
}

.product-info {
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

.product-name {
    font-weight: 600;
    color: #1e293b;
    font-size: 0.9rem;
}

.quantity-badge {
    display: inline-block;
    padding: 0.35rem 0.75rem;
    border-radius: 8px;
    font-weight: 700;
    font-size: 0.85rem;
}

.quantity-badge.expected {
    background: #eef2ff;
    color: #4f46e5;
}

.quantity-badge.actual {
    background: #f0fdf4;
    color: #16a34a;
}

.difference-badge {
    font-weight: 700;
    padding: 0.5rem 1rem;
    border-radius: 10px;
    font-size: 0.9rem;
    display: inline-block;
    min-width: 70px;
    text-align: center;
}

.difference-badge.positive {
    background: #dcfce7;
    color: #16a34a;
    border: 2px solid #86efac;
}

.difference-badge.negative {
    background: #fee2e2;
    color: #dc2626;
    border: 2px solid #fca5a5;
}

/* ============================================
   ÉTAT SANS ÉCART
   ============================================ */
.no-difference-card {
    background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%);
    border: 2px solid #86efac;
    border-radius: 16px;
    padding: 3rem 2rem;
    text-align: center;
    margin-bottom: 1.5rem;
}

.no-difference-card i {
    font-size: 4rem;
    color: #16a34a;
    margin-bottom: 1rem;
}

.no-difference-card h4 {
    color: #14532d;
    font-weight: 800;
    margin-bottom: 0.5rem;
}

.no-difference-card p {
    color: #166534;
    margin: 0;
    font-size: 0.95rem;
}

/* ============================================
   BOUTONS D'ACTION
   ============================================ */
.action-buttons {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 0.75rem;
    flex-wrap: wrap;
}

.btn-action {
    padding: 0.7rem 1.75rem;
    font-size: 0.95rem;
    font-weight: 600;
    border-radius: 12px;
    transition: all 0.3s ease;
    white-space: nowrap;
}

.btn-action:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 15px rgba(0,0,0,0.15);
}

.btn-success.btn-action {
    background: linear-gradient(135deg, #10b981 0%, #059669 100%);
    border: none;
    min-width: 220px;
}

/* ============================================
   RESPONSIVE MOBILE
   ============================================ */
@media (max-width: 767.98px) {
    .container-fluid {
        padding-left: 0.75rem !important;
        padding-right: 0.75rem !important;
    }
    
    .steps {
        margin-bottom: 1.5rem;
    }
    
    .step-circle {
        width: 34px;
        height: 34px;
        font-size: 0.8rem;
    }
    
    .step-label {
        font-size: 0.6rem;
    }
    
    .steps-line {
        top: 17px;
    }
    
    .inventory-info {
        padding: 1.25rem;
        border-radius: 16px;
    }
    
    .inventory-info h3 {
        font-size: 1.1rem;
    }
    
    .inventory-info .badge {
        font-size: 0.7rem;
        padding: 0.3rem 0.7rem;
    }
    
    /* Stats grid : 1 colonne sur mobile */
    .stats-grid {
        grid-template-columns: 1fr;
        gap: 0.75rem;
    }
    
    .stat-card {
        padding: 1rem;
    }
    
    .stat-icon {
        width: 42px;
        height: 42px;
        min-width: 42px;
        font-size: 1rem;
    }
    
    .stat-value {
        font-size: 1.4rem;
    }
    
    /* TABLEAU -> CARTES sur mobile */
    .differences-table thead {
        display: none;
    }
    
    .differences-table tbody tr {
        display: block;
        background: white;
        border: 1px solid #e9ecef;
        border-radius: 12px;
        margin: 0.75rem;
        padding: 1rem;
        box-shadow: 0 2px 8px rgba(0,0,0,0.04);
    }
    
    .differences-table tbody td {
        display: block;
        padding: 0.4rem 0 !important;
        border: none;
    }
    
    .differences-table tbody td::before {
        content: attr(data-label);
        display: block;
        font-size: 0.7rem;
        text-transform: uppercase;
        color: #94a3b8;
        font-weight: 600;
        letter-spacing: 0.5px;
        margin-bottom: 0.25rem;
    }
    
    .product-info {
        justify-content: flex-start;
    }
    
    /* Boutons */
    .action-buttons {
        flex-direction: column-reverse;
        align-items: stretch;
    }
    
    .btn-action {
        width: 100%;
        padding: 0.65rem 1rem;
        font-size: 0.9rem;
        min-width: auto !important;
    }
}
</style>
{% endblock %}

{% block body %}
<div class=\"container-fluid px-4 py-3\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb mb-1\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('app_stock_inventory_index') }}\" class=\"text-decoration-none\">
                            <i class=\"fas fa-clipboard-list me-1\"></i> Inventaires
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">Validation</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-check-circle text-success me-2\"></i>
                Validation - {{ inventory.inventoryNumber }}
            </h1>
        </div>
    </div>

    <!-- Étapes -->
    <div class=\"steps\">
        <div class=\"step completed\">
            <div class=\"step-circle\"><i class=\"fas fa-check\"></i></div>
            <div class=\"step-label\">Création</div>
        </div>
        <div class=\"step completed\">
            <div class=\"step-circle\"><i class=\"fas fa-check\"></i></div>
            <div class=\"step-label\">Ajout produits</div>
        </div>
        <div class=\"step completed\">
            <div class=\"step-circle\"><i class=\"fas fa-check\"></i></div>
            <div class=\"step-label\">Saisie comptage</div>
        </div>
        <div class=\"step active\">
            <div class=\"step-circle\">4</div>
            <div class=\"step-label\">Validation</div>
        </div>
        <div class=\"steps-line\"></div>
    </div>

    <!-- Info inventaire -->
    <div class=\"inventory-info\">
        <h3>
            <i class=\"fas fa-clipboard-list me-2\"></i>
            {{ inventory.inventoryNumber }}
        </h3>
        <div class=\"d-flex flex-wrap gap-2 mt-3\">
            <span class=\"badge\">
                <i class=\"fas fa-calendar me-1\"></i>
                {{ inventory.inventoryDate|date('d/m/Y') }}
            </span>
            {% if inventory.location %}
                <span class=\"badge\">
                    <i class=\"fas fa-map-marker-alt me-1\"></i>
                    {{ inventory.location.name }}
                </span>
            {% endif %}
            <span class=\"badge\">
                <i class=\"fas fa-info-circle me-1\"></i>
                {{ inventory.statusLabel }}
            </span>
        </div>
    </div>

    <!-- Statistiques -->
    <div class=\"stats-grid\">
        <div class=\"stat-card\">
            <div class=\"stat-icon primary\">
                <i class=\"fas fa-boxes\"></i>
            </div>
            <div class=\"stat-content\">
                <div class=\"stat-value\">{{ totalItems }}</div>
                <div class=\"stat-label\">Produits total</div>
            </div>
        </div>
        <div class=\"stat-card\">
            <div class=\"stat-icon {{ differenceCount > 0 ? 'warning' : 'success' }}\">
                <i class=\"fas fa-exclamation-triangle\"></i>
            </div>
            <div class=\"stat-content\">
                <div class=\"stat-value\">{{ differenceCount }}</div>
                <div class=\"stat-label\">Produits avec écart</div>
            </div>
        </div>
    </div>

    <!-- Écarts -->
    {% if differences|length > 0 %}
        <div class=\"differences-card\">
            <div class=\"differences-header\">
                <i class=\"fas fa-exclamation-triangle\"></i>
                <h5>
                    Écarts détectés ({{ differences|length }})
                </h5>
            </div>
            <table class=\"differences-table\">
                <thead>
                    <tr>
                        <th>Produit</th>
                        <th class=\"text-center\">Attendu</th>
                        <th class=\"text-center\">Compté</th>
                        <th class=\"text-center\">Écart</th>
                    </tr>
                </thead>
                <tbody>
                    {% for item in differences %}
                    <tr>
                        <td data-label=\"Produit\">
                            <div class=\"product-info\">
                                <div class=\"product-avatar\">
                                    {{ item.product.name|first|upper }}
                                </div>
                                <div>
                                    <div class=\"product-name\">{{ item.product.name }}</div>
                                    {% if item.product.barcode %}
                                        <div class=\"product-barcode\" style=\"font-size: 0.75rem; color: #94a3b8; font-family: 'Courier New', monospace;\">
                                            {{ item.product.barcode }}
                                        </div>
                                    {% endif %}
                                </div>
                            </div>
                        </td>
                        <td data-label=\"Attendu\" class=\"text-center\">
                            <span class=\"quantity-badge expected\">{{ item.expectedQuantity }}</span>
                        </td>
                        <td data-label=\"Compté\" class=\"text-center\">
                            <span class=\"quantity-badge actual\">{{ item.actualQuantity }}</span>
                        </td>
                        <td data-label=\"Écart\" class=\"text-center\">
                            <span class=\"difference-badge {{ item.difference > 0 ? 'positive' : 'negative' }}\">
                                {% if item.difference > 0 %}+{% endif %}{{ item.difference }}
                            </span>
                        </td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    {% else %}
        <div class=\"no-difference-card\">
            <i class=\"fas fa-check-circle\"></i>
            <h4>Aucun écart détecté</h4>
            <p>Le stock physique correspond exactement au stock système.</p>
        </div>
    {% endif %}

    <!-- Boutons d'action -->
    <form method=\"post\">
        <div class=\"action-buttons\">
            <a href=\"{{ path('app_stock_inventory_count', {'id': inventory.id}) }}\" class=\"btn btn-outline-secondary btn-action\">
                <i class=\"fas fa-arrow-left me-2\"></i>Retour au comptage
            </a>
            <button type=\"submit\" class=\"btn btn-success btn-action\" 
                    onclick=\"return confirm('Valider l\\'inventaire et appliquer les ajustements ?')\">
                <i class=\"fas fa-check-circle me-2\"></i>
                Valider l'inventaire
            </button>
        </div>
    </form>
</div>
{% endblock %}", "stock/inventory/validate.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\stock\\inventory\\validate.html.twig");
    }
}
