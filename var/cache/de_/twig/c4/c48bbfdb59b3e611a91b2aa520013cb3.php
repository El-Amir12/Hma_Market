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

/* stock/inventory/add_products.html.twig */
class __TwigTemplate_f217bf2a11720b071756c332cd5da48d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/inventory/add_products.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/inventory/add_products.html.twig"));

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

        yield "Ajout de produits - ";
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
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
<link href=\"https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css\" rel=\"stylesheet\" />
<style>
/* ============================================
   VARIABLES
   ============================================ */
:root {
    --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    --success-gradient: linear-gradient(135deg, #10b981 0%, #059669 100%);
    --info-gradient: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
}

/* ============================================
   ÉTAPES (STEPS)
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
    transition: all 0.3s ease;
    border: 3px solid white;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
}

.step.active .step-circle {
    background: var(--primary-gradient);
    color: white;
    transform: scale(1.1);
    box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
}

.step.completed .step-circle {
    background: var(--success-gradient);
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
    border-radius: 2px;
}

/* ============================================
   CARTE INVENTAIRE
   ============================================ */
.inventory-info {
    background: var(--primary-gradient);
    color: white;
    border-radius: 20px;
    padding: 2rem;
    margin-bottom: 2rem;
    position: relative;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
}

.inventory-info::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -20%;
    width: 300px;
    height: 300px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
}

.inventory-info::after {
    content: '';
    position: absolute;
    bottom: -40%;
    left: -10%;
    width: 200px;
    height: 200px;
    background: rgba(255, 255, 255, 0.08);
    border-radius: 50%;
}

.inventory-info h3 {
    margin-bottom: 0.5rem;
    font-weight: 800;
    position: relative;
    z-index: 1;
    font-size: 1.5rem;
}

.inventory-info .badge {
    background: rgba(255, 255, 255, 0.25) !important;
    color: white !important;
    font-weight: 600;
    padding: 0.5rem 1rem;
    border-radius: 2rem;
    font-size: 0.85rem;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255,255,255,0.3);
    position: relative;
    z-index: 1;
}

.inventory-info .stat-box {
    position: relative;
    z-index: 1;
    background: rgba(255, 255, 255, 0.15);
    border-radius: 12px;
    padding: 0.75rem 1.25rem;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255,255,255,0.2);
}

.inventory-info .stat-box h2 {
    font-size: 2rem;
    font-weight: 800;
    margin: 0;
    line-height: 1;
}

.inventory-info .stat-box small {
    font-size: 0.75rem;
    opacity: 0.9;
}

/* ============================================
   CARTES DE MÉTHODE
   ============================================ */
.method-card {
    background: white;
    border-radius: 20px;
    border: 2px solid #e9ecef;
    padding: 2rem;
    transition: all 0.3s ease;
    height: 100%;
    position: relative;
    overflow: hidden;
}

.method-card:hover {
    border-color: #667eea;
    box-shadow: 0 10px 30px rgba(102, 126, 234, 0.15);
    transform: translateY(-3px);
}

.method-card .method-icon {
    width: 70px;
    height: 70px;
    border-radius: 18px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.25rem;
    font-size: 1.75rem;
    color: white;
    box-shadow: 0 8px 20px rgba(0,0,0,0.15);
}

.method-card .method-icon.primary {
    background: var(--primary-gradient);
}

.method-card .method-icon.success {
    background: var(--success-gradient);
}

.method-card .method-icon.info {
    background: var(--info-gradient);
}

.method-card h5 {
    font-weight: 800;
    margin-bottom: 0.75rem;
    font-size: 1.15rem;
}

.method-card p {
    color: #64748b;
    font-size: 0.9rem;
    margin-bottom: 1.25rem;
}

/* ============================================
   SÉPARATEUR OU
   ============================================ */
.separator-or {
    display: flex;
    align-items: center;
    margin: 2rem 0;
    gap: 1rem;
}

.separator-or::before,
.separator-or::after {
    content: '';
    flex: 1;
    height: 2px;
    background: linear-gradient(to right, transparent, #e9ecef, transparent);
}

.separator-or span {
    background: white;
    color: #64748b;
    font-weight: 700;
    padding: 0.5rem 1.5rem;
    border-radius: 2rem;
    border: 2px solid #e9ecef;
    font-size: 0.85rem;
    letter-spacing: 1px;
}

/* ============================================
   SELECT2 CUSTOM - BEAU ET MODERNE
   ============================================ */
.select2-container--bootstrap-5 {
    width: 100% !important;
}

.select2-container--bootstrap-5 .select2-selection {
    min-height: 50px !important;
    border: 2px solid #e9ecef !important;
    border-radius: 12px !important;
    padding: 0.5rem 0.75rem !important;
    transition: all 0.3s ease;
    background: white;
}

.select2-container--bootstrap-5.select2-container--focus .select2-selection {
    border-color: #667eea !important;
    box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.15) !important;
}

.select2-container--bootstrap-5 .select2-selection--multiple {
    padding: 0.4rem 0.5rem !important;
}

.select2-container--bootstrap-5 .select2-selection--multiple .select2-selection__rendered {
    display: flex;
    flex-wrap: wrap;
    gap: 0.35rem;
    padding: 0;
}

.select2-container--bootstrap-5 .select2-selection--multiple .select2-selection__choice {
    background: var(--primary-gradient) !important;
    color: white !important;
    border: none !important;
    border-radius: 8px !important;
    padding: 0.35rem 0.75rem !important;
    font-size: 0.8rem !important;
    font-weight: 600 !important;
    display: inline-flex;
    align-items: center;
    gap: 0.35rem;
    margin: 0 !important;
    box-shadow: 0 2px 6px rgba(102, 126, 234, 0.3);
}

.select2-container--bootstrap-5 .select2-selection--multiple .select2-selection__choice__remove {
    color: white !important;
    opacity: 0.8;
    margin-right: 0.25rem;
    font-size: 1rem;
    font-weight: bold;
    transition: all 0.2s;
}

.select2-container--bootstrap-5 .select2-selection--multiple .select2-selection__choice__remove:hover {
    opacity: 1;
    transform: scale(1.2);
}

.select2-container--bootstrap-5 .select2-selection--multiple .select2-search--inline .select2-search__field {
    min-width: 150px;
    padding: 0.35rem 0.5rem;
    font-size: 0.85rem;
}

.select2-container--bootstrap-5 .select2-selection--multiple .select2-search--inline .select2-search__field::placeholder {
    color: #94a3b8;
    font-style: italic;
}

/* Dropdown */
.select2-container--bootstrap-5 .select2-dropdown {
    border: 2px solid #667eea !important;
    border-radius: 12px !important;
    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
    overflow: hidden;
    margin-top: 4px;
}

.select2-container--bootstrap-5 .select2-search--dropdown {
    padding: 0.75rem;
    background: #f8fafc;
    border-bottom: 1px solid #e9ecef;
}

.select2-container--bootstrap-5 .select2-search--dropdown .select2-search__field {
    border-radius: 8px;
    border: 2px solid #e9ecef;
    padding: 0.5rem 0.75rem;
    font-size: 0.9rem;
    transition: all 0.3s;
}

.select2-container--bootstrap-5 .select2-search--dropdown .select2-search__field:focus {
    border-color: #667eea;
    outline: none;
    box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.15);
}

.select2-container--bootstrap-5 .select2-results__options {
    max-height: 300px;
}

.select2-container--bootstrap-5 .select2-results__option {
    padding: 0.65rem 1rem;
    font-size: 0.9rem;
    transition: all 0.2s;
    border-bottom: 1px solid #f1f5f9;
}

.select2-container--bootstrap-5 .select2-results__option--highlighted {
    background: var(--primary-gradient) !important;
    color: white !important;
}

.select2-container--bootstrap-5 .select2-results__option--selected {
    background: #eef2ff !important;
    color: #667eea !important;
    font-weight: 600;
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
    padding-top: 1.5rem;
    border-top: 1px solid #e9ecef;
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
    background: var(--primary-gradient);
    border: none;
    min-width: 180px;
}

.btn-primary.btn-action:hover {
    box-shadow: 0 8px 20px rgba(102, 126, 234, 0.4);
}

/* ============================================
   RESPONSIVE
   ============================================ */
@media (max-width: 767.98px) {
    .container-fluid {
        padding-left: 0.75rem !important;
        padding-right: 0.75rem !important;
    }
    
    /* Étapes */
    .steps {
        padding: 0 0.25rem;
        margin-bottom: 1.5rem;
    }
    
    .step-circle {
        width: 36px;
        height: 36px;
        font-size: 0.85rem;
    }
    
    .step-label {
        font-size: 0.65rem;
    }
    
    .steps-line {
        top: 18px;
    }
    
    /* Carte inventaire */
    .inventory-info {
        padding: 1.25rem;
        border-radius: 16px;
    }
    
    .inventory-info h3 {
        font-size: 1.15rem;
    }
    
    .inventory-info .badge {
        font-size: 0.75rem;
        padding: 0.4rem 0.75rem;
    }
    
    .inventory-info .stat-box h2 {
        font-size: 1.5rem;
    }
    
    /* Cartes méthode */
    .method-card {
        padding: 1.25rem;
        border-radius: 16px;
    }
    
    .method-card .method-icon {
        width: 55px;
        height: 55px;
        font-size: 1.4rem;
        border-radius: 14px;
    }
    
    .method-card h5 {
        font-size: 1rem;
    }
    
    .method-card p {
        font-size: 0.85rem;
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
    
    /* Select2 */
    .select2-container--bootstrap-5 .select2-selection {
        min-height: 46px !important;
    }
    
    .select2-container--bootstrap-5 .select2-selection--multiple .select2-selection__choice {
        font-size: 0.75rem !important;
        padding: 0.3rem 0.6rem !important;
    }
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 515
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

        // line 516
        yield "<div class=\"container-fluid px-4 py-3\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb mb-1\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 523
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Tableau de bord
                        </a>
                    </li>
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 528
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_inventory_index");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-clipboard-list me-1\"></i> Inventaires
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">Ajout de produits</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-boxes text-primary me-2\"></i>
                Ajout de produits à l'inventaire
            </h1>
        </div>
        <div>
            <a href=\"";
        // line 541
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_inventory_index");
        yield "\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour
            </a>
        </div>
    </div>

    <!-- Étapes -->
    <div class=\"steps\">
        <div class=\"step completed\">
            <div class=\"step-circle\"><i class=\"fas fa-check\"></i></div>
            <div class=\"step-label\">Création</div>
        </div>
        <div class=\"step active\">
            <div class=\"step-circle\">2</div>
            <div class=\"step-label\">Ajout produits</div>
        </div>
        <div class=\"step\">
            <div class=\"step-circle\">3</div>
            <div class=\"step-label\">Saisie comptage</div>
        </div>
        <div class=\"step\">
            <div class=\"step-circle\">4</div>
            <div class=\"step-label\">Validation</div>
        </div>
        <div class=\"steps-line\"></div>
    </div>

    <!-- Info de l'inventaire -->
    <div class=\"inventory-info\">
        <div class=\"row align-items-center\">
            <div class=\"col-12 col-md-8\">
                <h3>
                    <i class=\"fas fa-clipboard-list me-2\"></i>
                    ";
        // line 574
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 574, $this->source); })()), "inventoryNumber", [], "any", false, false, false, 574), "html", null, true);
        yield "
                </h3>
                <div class=\"d-flex flex-wrap gap-2 mt-3\">
                    <span class=\"badge\">
                        <i class=\"fas fa-calendar me-1\"></i>
                        ";
        // line 579
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 579, $this->source); })()), "inventoryDate", [], "any", false, false, false, 579), "d/m/Y"), "html", null, true);
        yield "
                    </span>
                    ";
        // line 581
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 581, $this->source); })()), "location", [], "any", false, false, false, 581)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 582
            yield "                        <span class=\"badge\">
                            <i class=\"fas fa-map-marker-alt me-1\"></i>
                            ";
            // line 584
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 584, $this->source); })()), "location", [], "any", false, false, false, 584), "name", [], "any", false, false, false, 584), "html", null, true);
            yield "
                        </span>
                    ";
        } else {
            // line 587
            yield "                        <span class=\"badge\">
                            <i class=\"fas fa-globe me-1\"></i>
                            Tous les emplacements
                        </span>
                    ";
        }
        // line 592
        yield "                    <span class=\"badge\">
                        <i class=\"fas fa-info-circle me-1\"></i>
                        ";
        // line 594
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 594, $this->source); })()), "statusLabel", [], "any", false, false, false, 594), "html", null, true);
        yield "
                    </span>
                </div>
            </div>
            <div class=\"col-12 col-md-4 mt-3 mt-md-0 text-md-end\">
                <div class=\"d-inline-block stat-box\">
                    <h2>";
        // line 600
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["inventory"]) || array_key_exists("inventory", $context) ? $context["inventory"] : (function () { throw new RuntimeError('Variable "inventory" does not exist.', 600, $this->source); })()), "items", [], "any", false, false, false, 600)), "html", null, true);
        yield "</h2>
                    <small>Produits ajoutés</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Information -->
    <div class=\"alert alert-info d-flex align-items-start mb-4 border-0 shadow-sm\" role=\"alert\">
        <i class=\"fas fa-lightbulb fa-2x me-3 mt-1 text-warning\"></i>
        <div>
            <strong class=\"d-block mb-1\">Deux méthodes pour ajouter des produits :</strong>
            <ul class=\"mb-0 mt-1 small ps-3\">
                <li>Utilisez <strong>\"Ajouter tous les produits\"</strong> pour inclure tous les produits actifs</li>
                <li>OU sélectionnez <strong>manuellement</strong> les produits à compter</li>
            </ul>
        </div>
    </div>

    <div class=\"row g-4\">
        <!-- Méthode 1 : Tous les produits -->
        <div class=\"col-12 col-lg-6\">
            <div class=\"method-card\">
                <div class=\"method-icon primary\">
                    <i class=\"fas fa-magic\"></i>
                </div>
                <div class=\"text-center\">
                    <h5>Méthode rapide</h5>
                    <p>
                        Ajouter automatiquement <strong>tous les produits actifs</strong> 
                        de votre entreprise à cet inventaire.
                    </p>
                    
                    ";
        // line 633
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 633, $this->source); })()), 'form_start', ["attr" => ["id" => "addAllForm"]]);
        yield "
                        <button type=\"submit\" 
                                name=\"add_all\" 
                                value=\"1\" 
                                class=\"btn btn-primary btn-action w-100\"
                                onclick=\"return confirm('Ajouter TOUS les produits actifs à cet inventaire ?')\">
                            <i class=\"fas fa-plus-circle me-2\"></i>
                            Ajouter tous les produits
                        </button>
                    ";
        // line 642
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 642, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>

        <!-- Séparateur OU -->
        <div class=\"col-12\">
            <div class=\"separator-or\">
                <span>OU</span>
            </div>
        </div>

        <!-- Méthode 2 : Sélection manuelle -->
        <div class=\"col-12 col-lg-6 mx-auto\">
            <div class=\"method-card\">
                <div class=\"method-icon success\">
                    <i class=\"fas fa-hand-pointer\"></i>
                </div>
                <div class=\"text-center mb-3\">
                    <h5>Sélection manuelle</h5>
                    <p>Choisissez les produits que vous souhaitez compter.</p>
                </div>

                ";
        // line 665
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 665, $this->source); })()), 'form_start', ["attr" => ["id" => "addProductsForm"]]);
        yield "
                    <div class=\"mb-3\">
                        ";
        // line 667
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 667, $this->source); })()), "products", [], "any", false, false, false, 667), 'label', ["label_attr" => ["class" => "form-label fw-bold mb-2"]]);
        yield "
                        ";
        // line 668
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 668, $this->source); })()), "products", [], "any", false, false, false, 668), 'widget', ["attr" => ["class" => "form-select", "id" => "inventory_products_select"]]);
        // line 671
        yield "
                        ";
        // line 672
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 672, $this->source); })()), "products", [], "any", false, false, false, 672), 'errors');
        yield "
                        <small class=\"text-muted d-block mt-2\">
                            <i class=\"fas fa-info-circle me-1\"></i>
                            Cliquez pour sélectionner plusieurs produits
                        </small>
                    </div>

                    <div class=\"action-buttons\">
                        <a href=\"";
        // line 680
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_inventory_index");
        yield "\" class=\"btn btn-outline-secondary btn-action\">
                            <i class=\"fas fa-times me-2\"></i>Annuler
                        </a>
                        <button type=\"submit\" class=\"btn btn-primary btn-action\">
                            <i class=\"fas fa-arrow-right me-2\"></i>Ajouter et continuer
                        </button>
                    </div>
                ";
        // line 687
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 687, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 694
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

        // line 695
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/fr.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // ✅ Initialiser Select2 avec design moderne
    const productsSelect = document.getElementById('inventory_products_select');
    
    if (productsSelect && typeof \$ !== 'undefined' && \$.fn.select2) {
        \$(productsSelect).select2({
            theme: 'bootstrap-5',
            language: 'fr',
            placeholder: '🔍 Rechercher et sélectionner des produits...',
            allowClear: true,
            width: '100%',
            closeOnSelect: false,
            dropdownAutoWidth: true,
            minimumResultsForSearch: 0,
            templateResult: formatProduct,
            templateSelection: formatProductSelection
        });
    }
    
    // ✅ Fonction pour formater l'affichage des produits dans la liste
    function formatProduct(product) {
        if (!product.id) {
            return product.text;
        }
        
        // Si l'option a des données supplémentaires (data-*)
        const \$product = \$(product.element);
        const name = \$product.data('name') || product.text;
        const barcode = \$product.data('barcode') || '';
        const stock = \$product.data('stock') || 0;
        const unit = \$product.data('unit') || 'unité';
        const category = \$product.data('category') || '';
        
        return \$(`
            <div class=\"d-flex align-items-center justify-content-between py-1\">
                <div class=\"d-flex align-items-center gap-2\">
                    <div class=\"product-select-icon\">
                        <i class=\"fas fa-box\"></i>
                    </div>
                    <div>
                        <div class=\"fw-semibold small\">\${name}</div>
                        \${category ? `<small class=\"text-muted\">\${category}</small>` : ''}
                    </div>
                </div>
                <div class=\"text-end\">
                    <span class=\"badge bg-light text-dark\">
                        <i class=\"fas fa-cubes me-1\"></i>\${stock} \${unit}
                    </span>
                </div>
            </div>
        `);
    }
    
    // ✅ Fonction pour formater la sélection (tag choisi)
    function formatProductSelection(product) {
        if (!product.id) {
            return product.text;
        }
        
        const \$product = \$(product.element);
        const name = \$product.data('name') || product.text;
        const stock = \$product.data('stock') || 0;
        
        return \$(`
            <span>
                <i class=\"fas fa-box me-1\"></i>
                \${name}
                <span class=\"badge bg-light text-dark ms-1\">\${stock}</span>
            </span>
        `);
    }
});
</script>

<style>
/* Style des icônes dans le dropdown Select2 */
.product-select-icon {
    width: 32px;
    height: 32px;
    min-width: 32px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0.85rem;
}

/* Responsive pour les icônes */
@media (max-width: 767.98px) {
    .product-select-icon {
        width: 28px;
        height: 28px;
        min-width: 28px;
        font-size: 0.75rem;
    }
}
</style>
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
        return "stock/inventory/add_products.html.twig";
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
        return array (  888 => 695,  875 => 694,  858 => 687,  848 => 680,  837 => 672,  834 => 671,  832 => 668,  828 => 667,  823 => 665,  797 => 642,  785 => 633,  749 => 600,  740 => 594,  736 => 592,  729 => 587,  723 => 584,  719 => 582,  717 => 581,  712 => 579,  704 => 574,  668 => 541,  652 => 528,  644 => 523,  635 => 516,  622 => 515,  104 => 7,  91 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/stock/inventory/add_products.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Ajout de produits - {{ inventory.inventoryNumber }} - HMA Market{% endblock %}

{% block stylesheets %}
{{ parent() }}
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
<link href=\"https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css\" rel=\"stylesheet\" />
<style>
/* ============================================
   VARIABLES
   ============================================ */
:root {
    --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    --success-gradient: linear-gradient(135deg, #10b981 0%, #059669 100%);
    --info-gradient: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
}

/* ============================================
   ÉTAPES (STEPS)
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
    transition: all 0.3s ease;
    border: 3px solid white;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
}

.step.active .step-circle {
    background: var(--primary-gradient);
    color: white;
    transform: scale(1.1);
    box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
}

.step.completed .step-circle {
    background: var(--success-gradient);
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
    border-radius: 2px;
}

/* ============================================
   CARTE INVENTAIRE
   ============================================ */
.inventory-info {
    background: var(--primary-gradient);
    color: white;
    border-radius: 20px;
    padding: 2rem;
    margin-bottom: 2rem;
    position: relative;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
}

.inventory-info::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -20%;
    width: 300px;
    height: 300px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
}

.inventory-info::after {
    content: '';
    position: absolute;
    bottom: -40%;
    left: -10%;
    width: 200px;
    height: 200px;
    background: rgba(255, 255, 255, 0.08);
    border-radius: 50%;
}

.inventory-info h3 {
    margin-bottom: 0.5rem;
    font-weight: 800;
    position: relative;
    z-index: 1;
    font-size: 1.5rem;
}

.inventory-info .badge {
    background: rgba(255, 255, 255, 0.25) !important;
    color: white !important;
    font-weight: 600;
    padding: 0.5rem 1rem;
    border-radius: 2rem;
    font-size: 0.85rem;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255,255,255,0.3);
    position: relative;
    z-index: 1;
}

.inventory-info .stat-box {
    position: relative;
    z-index: 1;
    background: rgba(255, 255, 255, 0.15);
    border-radius: 12px;
    padding: 0.75rem 1.25rem;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255,255,255,0.2);
}

.inventory-info .stat-box h2 {
    font-size: 2rem;
    font-weight: 800;
    margin: 0;
    line-height: 1;
}

.inventory-info .stat-box small {
    font-size: 0.75rem;
    opacity: 0.9;
}

/* ============================================
   CARTES DE MÉTHODE
   ============================================ */
.method-card {
    background: white;
    border-radius: 20px;
    border: 2px solid #e9ecef;
    padding: 2rem;
    transition: all 0.3s ease;
    height: 100%;
    position: relative;
    overflow: hidden;
}

.method-card:hover {
    border-color: #667eea;
    box-shadow: 0 10px 30px rgba(102, 126, 234, 0.15);
    transform: translateY(-3px);
}

.method-card .method-icon {
    width: 70px;
    height: 70px;
    border-radius: 18px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.25rem;
    font-size: 1.75rem;
    color: white;
    box-shadow: 0 8px 20px rgba(0,0,0,0.15);
}

.method-card .method-icon.primary {
    background: var(--primary-gradient);
}

.method-card .method-icon.success {
    background: var(--success-gradient);
}

.method-card .method-icon.info {
    background: var(--info-gradient);
}

.method-card h5 {
    font-weight: 800;
    margin-bottom: 0.75rem;
    font-size: 1.15rem;
}

.method-card p {
    color: #64748b;
    font-size: 0.9rem;
    margin-bottom: 1.25rem;
}

/* ============================================
   SÉPARATEUR OU
   ============================================ */
.separator-or {
    display: flex;
    align-items: center;
    margin: 2rem 0;
    gap: 1rem;
}

.separator-or::before,
.separator-or::after {
    content: '';
    flex: 1;
    height: 2px;
    background: linear-gradient(to right, transparent, #e9ecef, transparent);
}

.separator-or span {
    background: white;
    color: #64748b;
    font-weight: 700;
    padding: 0.5rem 1.5rem;
    border-radius: 2rem;
    border: 2px solid #e9ecef;
    font-size: 0.85rem;
    letter-spacing: 1px;
}

/* ============================================
   SELECT2 CUSTOM - BEAU ET MODERNE
   ============================================ */
.select2-container--bootstrap-5 {
    width: 100% !important;
}

.select2-container--bootstrap-5 .select2-selection {
    min-height: 50px !important;
    border: 2px solid #e9ecef !important;
    border-radius: 12px !important;
    padding: 0.5rem 0.75rem !important;
    transition: all 0.3s ease;
    background: white;
}

.select2-container--bootstrap-5.select2-container--focus .select2-selection {
    border-color: #667eea !important;
    box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.15) !important;
}

.select2-container--bootstrap-5 .select2-selection--multiple {
    padding: 0.4rem 0.5rem !important;
}

.select2-container--bootstrap-5 .select2-selection--multiple .select2-selection__rendered {
    display: flex;
    flex-wrap: wrap;
    gap: 0.35rem;
    padding: 0;
}

.select2-container--bootstrap-5 .select2-selection--multiple .select2-selection__choice {
    background: var(--primary-gradient) !important;
    color: white !important;
    border: none !important;
    border-radius: 8px !important;
    padding: 0.35rem 0.75rem !important;
    font-size: 0.8rem !important;
    font-weight: 600 !important;
    display: inline-flex;
    align-items: center;
    gap: 0.35rem;
    margin: 0 !important;
    box-shadow: 0 2px 6px rgba(102, 126, 234, 0.3);
}

.select2-container--bootstrap-5 .select2-selection--multiple .select2-selection__choice__remove {
    color: white !important;
    opacity: 0.8;
    margin-right: 0.25rem;
    font-size: 1rem;
    font-weight: bold;
    transition: all 0.2s;
}

.select2-container--bootstrap-5 .select2-selection--multiple .select2-selection__choice__remove:hover {
    opacity: 1;
    transform: scale(1.2);
}

.select2-container--bootstrap-5 .select2-selection--multiple .select2-search--inline .select2-search__field {
    min-width: 150px;
    padding: 0.35rem 0.5rem;
    font-size: 0.85rem;
}

.select2-container--bootstrap-5 .select2-selection--multiple .select2-search--inline .select2-search__field::placeholder {
    color: #94a3b8;
    font-style: italic;
}

/* Dropdown */
.select2-container--bootstrap-5 .select2-dropdown {
    border: 2px solid #667eea !important;
    border-radius: 12px !important;
    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
    overflow: hidden;
    margin-top: 4px;
}

.select2-container--bootstrap-5 .select2-search--dropdown {
    padding: 0.75rem;
    background: #f8fafc;
    border-bottom: 1px solid #e9ecef;
}

.select2-container--bootstrap-5 .select2-search--dropdown .select2-search__field {
    border-radius: 8px;
    border: 2px solid #e9ecef;
    padding: 0.5rem 0.75rem;
    font-size: 0.9rem;
    transition: all 0.3s;
}

.select2-container--bootstrap-5 .select2-search--dropdown .select2-search__field:focus {
    border-color: #667eea;
    outline: none;
    box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.15);
}

.select2-container--bootstrap-5 .select2-results__options {
    max-height: 300px;
}

.select2-container--bootstrap-5 .select2-results__option {
    padding: 0.65rem 1rem;
    font-size: 0.9rem;
    transition: all 0.2s;
    border-bottom: 1px solid #f1f5f9;
}

.select2-container--bootstrap-5 .select2-results__option--highlighted {
    background: var(--primary-gradient) !important;
    color: white !important;
}

.select2-container--bootstrap-5 .select2-results__option--selected {
    background: #eef2ff !important;
    color: #667eea !important;
    font-weight: 600;
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
    padding-top: 1.5rem;
    border-top: 1px solid #e9ecef;
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
    background: var(--primary-gradient);
    border: none;
    min-width: 180px;
}

.btn-primary.btn-action:hover {
    box-shadow: 0 8px 20px rgba(102, 126, 234, 0.4);
}

/* ============================================
   RESPONSIVE
   ============================================ */
@media (max-width: 767.98px) {
    .container-fluid {
        padding-left: 0.75rem !important;
        padding-right: 0.75rem !important;
    }
    
    /* Étapes */
    .steps {
        padding: 0 0.25rem;
        margin-bottom: 1.5rem;
    }
    
    .step-circle {
        width: 36px;
        height: 36px;
        font-size: 0.85rem;
    }
    
    .step-label {
        font-size: 0.65rem;
    }
    
    .steps-line {
        top: 18px;
    }
    
    /* Carte inventaire */
    .inventory-info {
        padding: 1.25rem;
        border-radius: 16px;
    }
    
    .inventory-info h3 {
        font-size: 1.15rem;
    }
    
    .inventory-info .badge {
        font-size: 0.75rem;
        padding: 0.4rem 0.75rem;
    }
    
    .inventory-info .stat-box h2 {
        font-size: 1.5rem;
    }
    
    /* Cartes méthode */
    .method-card {
        padding: 1.25rem;
        border-radius: 16px;
    }
    
    .method-card .method-icon {
        width: 55px;
        height: 55px;
        font-size: 1.4rem;
        border-radius: 14px;
    }
    
    .method-card h5 {
        font-size: 1rem;
    }
    
    .method-card p {
        font-size: 0.85rem;
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
    
    /* Select2 */
    .select2-container--bootstrap-5 .select2-selection {
        min-height: 46px !important;
    }
    
    .select2-container--bootstrap-5 .select2-selection--multiple .select2-selection__choice {
        font-size: 0.75rem !important;
        padding: 0.3rem 0.6rem !important;
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
                        <a href=\"{{ path('app_dashboard') }}\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Tableau de bord
                        </a>
                    </li>
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('app_stock_inventory_index') }}\" class=\"text-decoration-none\">
                            <i class=\"fas fa-clipboard-list me-1\"></i> Inventaires
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">Ajout de produits</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0 fw-bold\">
                <i class=\"fas fa-boxes text-primary me-2\"></i>
                Ajout de produits à l'inventaire
            </h1>
        </div>
        <div>
            <a href=\"{{ path('app_stock_inventory_index') }}\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour
            </a>
        </div>
    </div>

    <!-- Étapes -->
    <div class=\"steps\">
        <div class=\"step completed\">
            <div class=\"step-circle\"><i class=\"fas fa-check\"></i></div>
            <div class=\"step-label\">Création</div>
        </div>
        <div class=\"step active\">
            <div class=\"step-circle\">2</div>
            <div class=\"step-label\">Ajout produits</div>
        </div>
        <div class=\"step\">
            <div class=\"step-circle\">3</div>
            <div class=\"step-label\">Saisie comptage</div>
        </div>
        <div class=\"step\">
            <div class=\"step-circle\">4</div>
            <div class=\"step-label\">Validation</div>
        </div>
        <div class=\"steps-line\"></div>
    </div>

    <!-- Info de l'inventaire -->
    <div class=\"inventory-info\">
        <div class=\"row align-items-center\">
            <div class=\"col-12 col-md-8\">
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
                    {% else %}
                        <span class=\"badge\">
                            <i class=\"fas fa-globe me-1\"></i>
                            Tous les emplacements
                        </span>
                    {% endif %}
                    <span class=\"badge\">
                        <i class=\"fas fa-info-circle me-1\"></i>
                        {{ inventory.statusLabel }}
                    </span>
                </div>
            </div>
            <div class=\"col-12 col-md-4 mt-3 mt-md-0 text-md-end\">
                <div class=\"d-inline-block stat-box\">
                    <h2>{{ inventory.items|length }}</h2>
                    <small>Produits ajoutés</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Information -->
    <div class=\"alert alert-info d-flex align-items-start mb-4 border-0 shadow-sm\" role=\"alert\">
        <i class=\"fas fa-lightbulb fa-2x me-3 mt-1 text-warning\"></i>
        <div>
            <strong class=\"d-block mb-1\">Deux méthodes pour ajouter des produits :</strong>
            <ul class=\"mb-0 mt-1 small ps-3\">
                <li>Utilisez <strong>\"Ajouter tous les produits\"</strong> pour inclure tous les produits actifs</li>
                <li>OU sélectionnez <strong>manuellement</strong> les produits à compter</li>
            </ul>
        </div>
    </div>

    <div class=\"row g-4\">
        <!-- Méthode 1 : Tous les produits -->
        <div class=\"col-12 col-lg-6\">
            <div class=\"method-card\">
                <div class=\"method-icon primary\">
                    <i class=\"fas fa-magic\"></i>
                </div>
                <div class=\"text-center\">
                    <h5>Méthode rapide</h5>
                    <p>
                        Ajouter automatiquement <strong>tous les produits actifs</strong> 
                        de votre entreprise à cet inventaire.
                    </p>
                    
                    {{ form_start(form, {'attr': {'id': 'addAllForm'}}) }}
                        <button type=\"submit\" 
                                name=\"add_all\" 
                                value=\"1\" 
                                class=\"btn btn-primary btn-action w-100\"
                                onclick=\"return confirm('Ajouter TOUS les produits actifs à cet inventaire ?')\">
                            <i class=\"fas fa-plus-circle me-2\"></i>
                            Ajouter tous les produits
                        </button>
                    {{ form_end(form) }}
                </div>
            </div>
        </div>

        <!-- Séparateur OU -->
        <div class=\"col-12\">
            <div class=\"separator-or\">
                <span>OU</span>
            </div>
        </div>

        <!-- Méthode 2 : Sélection manuelle -->
        <div class=\"col-12 col-lg-6 mx-auto\">
            <div class=\"method-card\">
                <div class=\"method-icon success\">
                    <i class=\"fas fa-hand-pointer\"></i>
                </div>
                <div class=\"text-center mb-3\">
                    <h5>Sélection manuelle</h5>
                    <p>Choisissez les produits que vous souhaitez compter.</p>
                </div>

                {{ form_start(form, {'attr': {'id': 'addProductsForm'}}) }}
                    <div class=\"mb-3\">
                        {{ form_label(form.products, null, {'label_attr': {'class': 'form-label fw-bold mb-2'}}) }}
                        {{ form_widget(form.products, {'attr': {
                            'class': 'form-select',
                            'id': 'inventory_products_select'
                        }}) }}
                        {{ form_errors(form.products) }}
                        <small class=\"text-muted d-block mt-2\">
                            <i class=\"fas fa-info-circle me-1\"></i>
                            Cliquez pour sélectionner plusieurs produits
                        </small>
                    </div>

                    <div class=\"action-buttons\">
                        <a href=\"{{ path('app_stock_inventory_index') }}\" class=\"btn btn-outline-secondary btn-action\">
                            <i class=\"fas fa-times me-2\"></i>Annuler
                        </a>
                        <button type=\"submit\" class=\"btn btn-primary btn-action\">
                            <i class=\"fas fa-arrow-right me-2\"></i>Ajouter et continuer
                        </button>
                    </div>
                {{ form_end(form) }}
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
document.addEventListener('DOMContentLoaded', function() {
    // ✅ Initialiser Select2 avec design moderne
    const productsSelect = document.getElementById('inventory_products_select');
    
    if (productsSelect && typeof \$ !== 'undefined' && \$.fn.select2) {
        \$(productsSelect).select2({
            theme: 'bootstrap-5',
            language: 'fr',
            placeholder: '🔍 Rechercher et sélectionner des produits...',
            allowClear: true,
            width: '100%',
            closeOnSelect: false,
            dropdownAutoWidth: true,
            minimumResultsForSearch: 0,
            templateResult: formatProduct,
            templateSelection: formatProductSelection
        });
    }
    
    // ✅ Fonction pour formater l'affichage des produits dans la liste
    function formatProduct(product) {
        if (!product.id) {
            return product.text;
        }
        
        // Si l'option a des données supplémentaires (data-*)
        const \$product = \$(product.element);
        const name = \$product.data('name') || product.text;
        const barcode = \$product.data('barcode') || '';
        const stock = \$product.data('stock') || 0;
        const unit = \$product.data('unit') || 'unité';
        const category = \$product.data('category') || '';
        
        return \$(`
            <div class=\"d-flex align-items-center justify-content-between py-1\">
                <div class=\"d-flex align-items-center gap-2\">
                    <div class=\"product-select-icon\">
                        <i class=\"fas fa-box\"></i>
                    </div>
                    <div>
                        <div class=\"fw-semibold small\">\${name}</div>
                        \${category ? `<small class=\"text-muted\">\${category}</small>` : ''}
                    </div>
                </div>
                <div class=\"text-end\">
                    <span class=\"badge bg-light text-dark\">
                        <i class=\"fas fa-cubes me-1\"></i>\${stock} \${unit}
                    </span>
                </div>
            </div>
        `);
    }
    
    // ✅ Fonction pour formater la sélection (tag choisi)
    function formatProductSelection(product) {
        if (!product.id) {
            return product.text;
        }
        
        const \$product = \$(product.element);
        const name = \$product.data('name') || product.text;
        const stock = \$product.data('stock') || 0;
        
        return \$(`
            <span>
                <i class=\"fas fa-box me-1\"></i>
                \${name}
                <span class=\"badge bg-light text-dark ms-1\">\${stock}</span>
            </span>
        `);
    }
});
</script>

<style>
/* Style des icônes dans le dropdown Select2 */
.product-select-icon {
    width: 32px;
    height: 32px;
    min-width: 32px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0.85rem;
}

/* Responsive pour les icônes */
@media (max-width: 767.98px) {
    .product-select-icon {
        width: 28px;
        height: 28px;
        min-width: 28px;
        font-size: 0.75rem;
    }
}
</style>
{% endblock %}", "stock/inventory/add_products.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\stock\\inventory\\add_products.html.twig");
    }
}
