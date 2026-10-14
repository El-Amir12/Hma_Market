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

/* stock/inventory/count.html.twig */
class __TwigTemplate_de811a9cb49ddeff3e5f0b2cdb310eea extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/inventory/count.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/inventory/count.html.twig"));

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

        yield "Comptage - ";
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
    transition: all 0.3s ease;
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
    position: relative;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
}

.inventory-info h3 {
    font-weight: 800;
    margin-bottom: 0.5rem;
    font-size: 1.3rem;
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
}

/* ============================================
   PROGRESSION
   ============================================ */
.progress-card {
    background: white;
    border-radius: 16px;
    padding: 1.5rem;
    box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    margin-bottom: 1.5rem;
    border: 1px solid #e9ecef;
}

.progress-info {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1rem;
    flex-wrap: wrap;
    gap: 0.5rem;
}

.progress-info h5 {
    margin: 0;
    font-weight: 700;
    font-size: 1rem;
}

.progress-info .progress-stats {
    display: flex;
    gap: 1rem;
}

.progress-info .stat {
    text-align: center;
}

.progress-info .stat .value {
    font-size: 1.25rem;
    font-weight: 800;
    color: #667eea;
    line-height: 1;
}

.progress-info .stat .label {
    font-size: 0.7rem;
    color: #64748b;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.progress {
    height: 12px;
    border-radius: 10px;
    background: #f1f5f9;
    overflow: hidden;
}

.progress-bar {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border-radius: 10px;
    transition: width 0.5s ease;
    position: relative;
}

.progress-bar::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
    animation: shimmer 2s infinite;
}

@keyframes shimmer {
    0% { transform: translateX(-100%); }
    100% { transform: translateX(100%); }
}

/* ============================================
   TABLEAU DE COMPTAGE
   ============================================ */
.count-table-card {
    background: white;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    border: 1px solid #e9ecef;
}

.count-table {
    margin: 0;
    width: 100%;
}

.count-table thead {
    background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
    position: sticky;
    top: 0;
    z-index: 10;
}

.count-table thead th {
    font-weight: 700;
    color: #475569;
    font-size: 0.8rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    padding: 1rem;
    border-bottom: 2px solid #e2e8f0;
}

.count-table tbody tr {
    transition: all 0.2s;
    border-bottom: 1px solid #f1f5f9;
}

.count-table tbody tr:hover {
    background: #f8fafc;
}

.count-table tbody td {
    padding: 1rem;
    vertical-align: middle;
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

.product-barcode {
    font-size: 0.75rem;
    color: #94a3b8;
    font-family: 'Courier New', monospace;
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

.count-input {
    width: 120px;
    border: 2px solid #e2e8f0;
    border-radius: 10px;
    padding: 0.5rem 0.75rem;
    font-weight: 700;
    font-size: 1rem;
    text-align: center;
    transition: all 0.3s;
}

.count-input:focus {
    border-color: #667eea;
    outline: none;
    box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.15);
}

.difference-badge {
    font-weight: 700;
    padding: 0.35rem 0.75rem;
    border-radius: 8px;
    font-size: 0.85rem;
    display: inline-block;
}

.difference-badge.positive {
    background: #dcfce7;
    color: #16a34a;
}

.difference-badge.negative {
    background: #fee2e2;
    color: #dc2626;
}

.difference-badge.zero {
    background: #f1f5f9;
    color: #64748b;
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
    margin-top: 1.5rem;
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

.btn-primary.btn-action {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border: none;
    min-width: 180px;
}

.btn-success.btn-action {
    background: linear-gradient(135deg, #10b981 0%, #059669 100%);
    border: none;
    min-width: 180px;
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
    
    .progress-info h5 {
        font-size: 0.9rem;
    }
    
    .progress-info .stat .value {
        font-size: 1.1rem;
    }
    
    /* TABLEAU -> CARTES sur mobile */
    .count-table thead {
        display: none;
    }
    
    .count-table tbody tr {
        display: block;
        background: white;
        border: 1px solid #e9ecef;
        border-radius: 12px;
        margin: 0.75rem;
        padding: 1rem;
        box-shadow: 0 2px 8px rgba(0,0,0,0.04);
    }
    
    .count-table tbody td {
        display: block;
        padding: 0.4rem 0 !important;
        border: none;
    }
    
    .count-table tbody td::before {
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
    
    .count-input {
        width: 100%;
        max-width: 200px;
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

    // line 469
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

        // line 470
        yield "<div class=\"container-fluid px-4 py-3\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb mb-1\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 477
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_inventory_index");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-clipboard-list me-1\"></i> Inventaires
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">Comptage</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-calculator text-primary me-2\"></i>
                Comptage - ";
        // line 486
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 486, $this->source); })()), "inventoryNumber", [], "any", false, false, false, 486), "html", null, true);
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
        <div class=\"step active\">
            <div class=\"step-circle\">3</div>
            <div class=\"step-label\">Saisie comptage</div>
        </div>
        <div class=\"step\">
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
        // line 516
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 516, $this->source); })()), "inventoryNumber", [], "any", false, false, false, 516), "html", null, true);
        yield "
        </h3>
        <div class=\"d-flex flex-wrap gap-2 mt-3\">
            <span class=\"badge\">
                <i class=\"fas fa-calendar me-1\"></i>
                ";
        // line 521
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 521, $this->source); })()), "inventoryDate", [], "any", false, false, false, 521), "d/m/Y"), "html", null, true);
        yield "
            </span>
            ";
        // line 523
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 523, $this->source); })()), "location", [], "any", false, false, false, 523)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 524
            yield "                <span class=\"badge\">
                    <i class=\"fas fa-map-marker-alt me-1\"></i>
                    ";
            // line 526
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 526, $this->source); })()), "location", [], "any", false, false, false, 526), "name", [], "any", false, false, false, 526), "html", null, true);
            yield "
                </span>
            ";
        }
        // line 529
        yield "            <span class=\"badge\">
                <i class=\"fas fa-info-circle me-1\"></i>
                ";
        // line 531
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 531, $this->source); })()), "statusLabel", [], "any", false, false, false, 531), "html", null, true);
        yield "
            </span>
        </div>
    </div>

    <!-- Progression -->
    <div class=\"progress-card\">
        <div class=\"progress-info\">
            <h5>
                <i class=\"fas fa-chart-line text-primary me-2\"></i>
                Progression du comptage
            </h5>
            <div class=\"progress-stats\">
                <div class=\"stat\">
                    <div class=\"value\">";
        // line 545
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["countedItems"]) || array_key_exists("countedItems", $context) ? $context["countedItems"] : (function () { throw new RuntimeError('Variable "countedItems" does not exist.', 545, $this->source); })()), "html", null, true);
        yield "</div>
                    <div class=\"label\">Comptés</div>
                </div>
                <div class=\"stat\">
                    <div class=\"value\">";
        // line 549
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 549, $this->source); })()), "html", null, true);
        yield "</div>
                    <div class=\"label\">Total</div>
                </div>
                <div class=\"stat\">
                    <div class=\"value\">";
        // line 553
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["progress"]) || array_key_exists("progress", $context) ? $context["progress"] : (function () { throw new RuntimeError('Variable "progress" does not exist.', 553, $this->source); })()), "html", null, true);
        yield "%</div>
                    <div class=\"label\">Progression</div>
                </div>
            </div>
        </div>
        <div class=\"progress\">
            <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
        // line 559
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["progress"]) || array_key_exists("progress", $context) ? $context["progress"] : (function () { throw new RuntimeError('Variable "progress" does not exist.', 559, $this->source); })()), "html", null, true);
        yield "%\" 
                 aria-valuenow=\"";
        // line 560
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["progress"]) || array_key_exists("progress", $context) ? $context["progress"] : (function () { throw new RuntimeError('Variable "progress" does not exist.', 560, $this->source); })()), "html", null, true);
        yield "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
        </div>
    </div>

    <!-- Formulaire de comptage -->
    <form method=\"post\" id=\"countForm\">
        <div class=\"count-table-card\">
            <table class=\"count-table\">
                <thead>
                    <tr>
                        <th style=\"width: 40%;\">Produit</th>
                        <th style=\"width: 15%;\" class=\"text-center\">Attendu</th>
                        <th style=\"width: 25%;\" class=\"text-center\">Compté</th>
                        <th style=\"width: 20%;\" class=\"text-center\">Écart</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 577
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 577, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 578
            yield "                    <tr>
                        <td data-label=\"Produit\">
                            <div class=\"product-info\">
                                <div class=\"product-avatar\">
                                    ";
            // line 582
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 582), "name", [], "any", false, false, false, 582))), "html", null, true);
            yield "
                                </div>
                                <div>
                                    <div class=\"product-name\">";
            // line 585
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 585), "name", [], "any", false, false, false, 585), "html", null, true);
            yield "</div>
                                    ";
            // line 586
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 586), "barcode", [], "any", false, false, false, 586)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 587
                yield "                                        <div class=\"product-barcode\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 587), "barcode", [], "any", false, false, false, 587), "html", null, true);
                yield "</div>
                                    ";
            }
            // line 589
            yield "                                </div>
                            </div>
                            <input type=\"hidden\" name=\"items[";
            // line 591
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 591), "html", null, true);
            yield "][id]\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 591), "html", null, true);
            yield "\">
                        </td>
                        <td data-label=\"Attendu\" class=\"text-center\">
                            <span class=\"quantity-badge expected\">
                                ";
            // line 595
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "expectedQuantity", [], "any", false, false, false, 595), "html", null, true);
            yield "
                                <small>";
            // line 596
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 596), "unit", [], "any", false, false, false, 596)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 596), "unit", [], "any", false, false, false, 596), "html", null, true)) : ("u"));
            yield "</small>
                            </span>
                        </td>
                        <td data-label=\"Compté\" class=\"text-center\">
                            <input type=\"number\" 
                                   name=\"items[";
            // line 601
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 601), "html", null, true);
            yield "][actual_quantity]\" 
                                   value=\"";
            // line 602
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "actualQuantity", [], "any", false, false, false, 602), "html", null, true);
            yield "\"
                                   class=\"count-input\"
                                   min=\"0\"
                                   data-expected=\"";
            // line 605
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "expectedQuantity", [], "any", false, false, false, 605), "html", null, true);
            yield "\"
                                   oninput=\"updateDifference(this)\">
                        </td>
                        <td data-label=\"Écart\" class=\"text-center\">
                            <span class=\"difference-badge ";
            // line 609
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "difference", [], "any", false, false, false, 609) > 0)) ? ("positive") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "difference", [], "any", false, false, false, 609) < 0)) ? ("negative") : ("zero"))));
            yield "\"
                                  id=\"difference-";
            // line 610
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 610), "html", null, true);
            yield "\">
                                ";
            // line 611
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "difference", [], "any", false, false, false, 611) > 0)) {
                yield "+";
            }
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "difference", [], "any", false, false, false, 611), "html", null, true);
            yield "
                            </span>
                        </td>
                    </tr>
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 616
        yield "                </tbody>
            </table>
        </div>

        <!-- Boutons d'action -->
        <div class=\"action-buttons\">
            <a href=\"";
        // line 622
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_inventory_index");
        yield "\" class=\"btn btn-outline-secondary btn-action\">
                <i class=\"fas fa-times me-2\"></i>Annuler
            </a>
            <div class=\"d-flex gap-2 flex-column flex-sm-row\">
                <button type=\"submit\" class=\"btn btn-primary btn-action\">
                    <i class=\"fas fa-save me-2\"></i>Sauvegarder
                </button>
                <button type=\"submit\" name=\"validate\" class=\"btn btn-success btn-action\"
                        onclick=\"return confirm('Valider l\\'inventaire et passer à l\\'étape suivante ?')\">
                    <i class=\"fas fa-check me-2\"></i>Valider
                </button>
            </div>
        </div>
    </form>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 639
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

        // line 640
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
// ✅ Mise à jour dynamique des écarts
function updateDifference(input) {
    const expected = parseInt(input.dataset.expected) || 0;
    const actual = parseInt(input.value) || 0;
    const difference = actual - expected;
    
    // Trouver le badge d'écart correspondant
    const row = input.closest('tr');
    const badge = row.querySelector('.difference-badge');
    
    if (badge) {
        badge.textContent = (difference > 0 ? '+' : '') + difference;
        badge.className = 'difference-badge ' + 
            (difference > 0 ? 'positive' : (difference < 0 ? 'negative' : 'zero'));
    }
}

// ✅ Mettre à jour tous les écarts au chargement
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.count-input').forEach(input => {
        updateDifference(input);
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
        return "stock/inventory/count.html.twig";
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
        return array (  897 => 640,  884 => 639,  857 => 622,  849 => 616,  827 => 611,  823 => 610,  819 => 609,  812 => 605,  806 => 602,  802 => 601,  794 => 596,  790 => 595,  781 => 591,  777 => 589,  771 => 587,  769 => 586,  765 => 585,  759 => 582,  753 => 578,  736 => 577,  716 => 560,  712 => 559,  703 => 553,  696 => 549,  689 => 545,  672 => 531,  668 => 529,  662 => 526,  658 => 524,  656 => 523,  651 => 521,  643 => 516,  610 => 486,  598 => 477,  589 => 470,  576 => 469,  104 => 7,  91 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/stock/inventory/count.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Comptage - {{ inventory.inventoryNumber }} - HMA Market{% endblock %}

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
    transition: all 0.3s ease;
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
    position: relative;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
}

.inventory-info h3 {
    font-weight: 800;
    margin-bottom: 0.5rem;
    font-size: 1.3rem;
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
}

/* ============================================
   PROGRESSION
   ============================================ */
.progress-card {
    background: white;
    border-radius: 16px;
    padding: 1.5rem;
    box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    margin-bottom: 1.5rem;
    border: 1px solid #e9ecef;
}

.progress-info {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1rem;
    flex-wrap: wrap;
    gap: 0.5rem;
}

.progress-info h5 {
    margin: 0;
    font-weight: 700;
    font-size: 1rem;
}

.progress-info .progress-stats {
    display: flex;
    gap: 1rem;
}

.progress-info .stat {
    text-align: center;
}

.progress-info .stat .value {
    font-size: 1.25rem;
    font-weight: 800;
    color: #667eea;
    line-height: 1;
}

.progress-info .stat .label {
    font-size: 0.7rem;
    color: #64748b;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.progress {
    height: 12px;
    border-radius: 10px;
    background: #f1f5f9;
    overflow: hidden;
}

.progress-bar {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border-radius: 10px;
    transition: width 0.5s ease;
    position: relative;
}

.progress-bar::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
    animation: shimmer 2s infinite;
}

@keyframes shimmer {
    0% { transform: translateX(-100%); }
    100% { transform: translateX(100%); }
}

/* ============================================
   TABLEAU DE COMPTAGE
   ============================================ */
.count-table-card {
    background: white;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    border: 1px solid #e9ecef;
}

.count-table {
    margin: 0;
    width: 100%;
}

.count-table thead {
    background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
    position: sticky;
    top: 0;
    z-index: 10;
}

.count-table thead th {
    font-weight: 700;
    color: #475569;
    font-size: 0.8rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    padding: 1rem;
    border-bottom: 2px solid #e2e8f0;
}

.count-table tbody tr {
    transition: all 0.2s;
    border-bottom: 1px solid #f1f5f9;
}

.count-table tbody tr:hover {
    background: #f8fafc;
}

.count-table tbody td {
    padding: 1rem;
    vertical-align: middle;
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

.product-barcode {
    font-size: 0.75rem;
    color: #94a3b8;
    font-family: 'Courier New', monospace;
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

.count-input {
    width: 120px;
    border: 2px solid #e2e8f0;
    border-radius: 10px;
    padding: 0.5rem 0.75rem;
    font-weight: 700;
    font-size: 1rem;
    text-align: center;
    transition: all 0.3s;
}

.count-input:focus {
    border-color: #667eea;
    outline: none;
    box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.15);
}

.difference-badge {
    font-weight: 700;
    padding: 0.35rem 0.75rem;
    border-radius: 8px;
    font-size: 0.85rem;
    display: inline-block;
}

.difference-badge.positive {
    background: #dcfce7;
    color: #16a34a;
}

.difference-badge.negative {
    background: #fee2e2;
    color: #dc2626;
}

.difference-badge.zero {
    background: #f1f5f9;
    color: #64748b;
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
    margin-top: 1.5rem;
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

.btn-primary.btn-action {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border: none;
    min-width: 180px;
}

.btn-success.btn-action {
    background: linear-gradient(135deg, #10b981 0%, #059669 100%);
    border: none;
    min-width: 180px;
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
    
    .progress-info h5 {
        font-size: 0.9rem;
    }
    
    .progress-info .stat .value {
        font-size: 1.1rem;
    }
    
    /* TABLEAU -> CARTES sur mobile */
    .count-table thead {
        display: none;
    }
    
    .count-table tbody tr {
        display: block;
        background: white;
        border: 1px solid #e9ecef;
        border-radius: 12px;
        margin: 0.75rem;
        padding: 1rem;
        box-shadow: 0 2px 8px rgba(0,0,0,0.04);
    }
    
    .count-table tbody td {
        display: block;
        padding: 0.4rem 0 !important;
        border: none;
    }
    
    .count-table tbody td::before {
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
    
    .count-input {
        width: 100%;
        max-width: 200px;
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
                    <li class=\"breadcrumb-item active\">Comptage</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-calculator text-primary me-2\"></i>
                Comptage - {{ inventory.inventoryNumber }}
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
        <div class=\"step active\">
            <div class=\"step-circle\">3</div>
            <div class=\"step-label\">Saisie comptage</div>
        </div>
        <div class=\"step\">
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

    <!-- Progression -->
    <div class=\"progress-card\">
        <div class=\"progress-info\">
            <h5>
                <i class=\"fas fa-chart-line text-primary me-2\"></i>
                Progression du comptage
            </h5>
            <div class=\"progress-stats\">
                <div class=\"stat\">
                    <div class=\"value\">{{ countedItems }}</div>
                    <div class=\"label\">Comptés</div>
                </div>
                <div class=\"stat\">
                    <div class=\"value\">{{ totalItems }}</div>
                    <div class=\"label\">Total</div>
                </div>
                <div class=\"stat\">
                    <div class=\"value\">{{ progress }}%</div>
                    <div class=\"label\">Progression</div>
                </div>
            </div>
        </div>
        <div class=\"progress\">
            <div class=\"progress-bar\" role=\"progressbar\" style=\"width: {{ progress }}%\" 
                 aria-valuenow=\"{{ progress }}\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
        </div>
    </div>

    <!-- Formulaire de comptage -->
    <form method=\"post\" id=\"countForm\">
        <div class=\"count-table-card\">
            <table class=\"count-table\">
                <thead>
                    <tr>
                        <th style=\"width: 40%;\">Produit</th>
                        <th style=\"width: 15%;\" class=\"text-center\">Attendu</th>
                        <th style=\"width: 25%;\" class=\"text-center\">Compté</th>
                        <th style=\"width: 20%;\" class=\"text-center\">Écart</th>
                    </tr>
                </thead>
                <tbody>
                    {% for item in items %}
                    <tr>
                        <td data-label=\"Produit\">
                            <div class=\"product-info\">
                                <div class=\"product-avatar\">
                                    {{ item.product.name|first|upper }}
                                </div>
                                <div>
                                    <div class=\"product-name\">{{ item.product.name }}</div>
                                    {% if item.product.barcode %}
                                        <div class=\"product-barcode\">{{ item.product.barcode }}</div>
                                    {% endif %}
                                </div>
                            </div>
                            <input type=\"hidden\" name=\"items[{{ loop.index0 }}][id]\" value=\"{{ item.id }}\">
                        </td>
                        <td data-label=\"Attendu\" class=\"text-center\">
                            <span class=\"quantity-badge expected\">
                                {{ item.expectedQuantity }}
                                <small>{{ item.product.unit ?: 'u' }}</small>
                            </span>
                        </td>
                        <td data-label=\"Compté\" class=\"text-center\">
                            <input type=\"number\" 
                                   name=\"items[{{ loop.index0 }}][actual_quantity]\" 
                                   value=\"{{ item.actualQuantity }}\"
                                   class=\"count-input\"
                                   min=\"0\"
                                   data-expected=\"{{ item.expectedQuantity }}\"
                                   oninput=\"updateDifference(this)\">
                        </td>
                        <td data-label=\"Écart\" class=\"text-center\">
                            <span class=\"difference-badge {{ item.difference > 0 ? 'positive' : (item.difference < 0 ? 'negative' : 'zero') }}\"
                                  id=\"difference-{{ loop.index0 }}\">
                                {% if item.difference > 0 %}+{% endif %}{{ item.difference }}
                            </span>
                        </td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>

        <!-- Boutons d'action -->
        <div class=\"action-buttons\">
            <a href=\"{{ path('app_stock_inventory_index') }}\" class=\"btn btn-outline-secondary btn-action\">
                <i class=\"fas fa-times me-2\"></i>Annuler
            </a>
            <div class=\"d-flex gap-2 flex-column flex-sm-row\">
                <button type=\"submit\" class=\"btn btn-primary btn-action\">
                    <i class=\"fas fa-save me-2\"></i>Sauvegarder
                </button>
                <button type=\"submit\" name=\"validate\" class=\"btn btn-success btn-action\"
                        onclick=\"return confirm('Valider l\\'inventaire et passer à l\\'étape suivante ?')\">
                    <i class=\"fas fa-check me-2\"></i>Valider
                </button>
            </div>
        </div>
    </form>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
// ✅ Mise à jour dynamique des écarts
function updateDifference(input) {
    const expected = parseInt(input.dataset.expected) || 0;
    const actual = parseInt(input.value) || 0;
    const difference = actual - expected;
    
    // Trouver le badge d'écart correspondant
    const row = input.closest('tr');
    const badge = row.querySelector('.difference-badge');
    
    if (badge) {
        badge.textContent = (difference > 0 ? '+' : '') + difference;
        badge.className = 'difference-badge ' + 
            (difference > 0 ? 'positive' : (difference < 0 ? 'negative' : 'zero'));
    }
}

// ✅ Mettre à jour tous les écarts au chargement
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.count-input').forEach(input => {
        updateDifference(input);
    });
});
</script>
{% endblock %}", "stock/inventory/count.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\stock\\inventory\\count.html.twig");
    }
}
