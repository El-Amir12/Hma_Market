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

/* admin/restaurant/promotion/recipe_promotions.html.twig */
class __TwigTemplate_0c99f875ae1a42083da4c5fa346b4d0e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/restaurant/promotion/recipe_promotions.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/restaurant/promotion/recipe_promotions.html.twig"));

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

        yield "Promotions du plat - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4), "html", null, true);
        
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
    .hover-shadow {
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .hover-shadow:hover {
        transform: translateY(-5px);
        box-shadow: 0 1rem 2rem rgba(0,0,0,0.1) !important;
    }
    .bg-gradient-light {
        background: linear-gradient(135deg, #f5f7fa 0%, #e9ecef 100%);
    }
    .rounded-4 {
        border-radius: 1rem;
    }
    .stat-card {
        transition: transform 0.2s;
    }
    .stat-card:hover {
        transform: scale(1.02);
        background-color: #ffffff !important;
        box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.05);
    }
    .text-dark {
        color: #212529 !important;
    }
    .form-control, .form-select {
        color: #212529 !important;
        background-color: #ffffff !important;
    }

    /* ========================================
       RESPONSIVE - FILTRES
    ======================================== */
    .filter-label {
        display: block !important;
        width: 100% !important;
        font-size: 0.7rem !important;
    }
    .filter-select {
        width: 100% !important;
        font-size: 0.7rem !important;
        padding: 0.2rem 0.4rem !important;
    }
    .filter-input {
        font-size: 0.7rem !important;
        padding: 0.2rem 0.4rem !important;
    }

    /* ========================================
       RESPONSIVE - MEDIA QUERIES
    ======================================== */
    
    /* Mobile (< 576px) */
    @media (max-width: 576px) {
        .container-fluid {
            padding-left: 8px !important;
            padding-right: 8px !important;
        }
        
        /* En-tête */
        .h1 {
            font-size: 1.2rem !important;
        }
        .h3 {
            font-size: 1rem !important;
        }
        .h5 {
            font-size: 0.85rem !important;
        }
        .text-muted {
            font-size: 0.75rem !important;
        }
        
        /* Breadcrumb */
        .breadcrumb {
            font-size: 0.6rem !important;
        }
        .breadcrumb-item a {
            font-size: 0.6rem !important;
        }
        
        /* Boutons */
        .btn {
            font-size: 0.65rem !important;
            padding: 0.25rem 0.5rem !important;
        }
        .btn i {
            font-size: 0.7rem !important;
        }
        
        /* Formulaires */
        .form-control, .form-select {
            font-size: 0.7rem !important;
            padding: 0.2rem 0.4rem !important;
        }
        .form-label {
            font-size: 0.6rem !important;
        }
        .input-group-text {
            padding: 0.2rem 0.4rem !important;
            font-size: 0.7rem !important;
        }
        
        /* Stats */
        .stat-card .h3 {
            font-size: 1.2rem !important;
        }
        .stat-card .fa-2x {
            font-size: 1.5rem !important;
        }
        .stat-card .text-muted {
            font-size: 0.6rem !important;
        }
        .stat-card .p-3 {
            padding: 0.5rem !important;
        }
        
        /* Cartes des promotions */
        .card-body {
            padding: 0.75rem !important;
        }
        .card-footer {
            padding: 0.5rem 0.75rem !important;
            flex-wrap: wrap;
        }
        .card-footer .btn {
            font-size: 0.55rem !important;
            padding: 0.15rem 0.2rem !important;
        }
        .card-title {
            font-size: 0.85rem !important;
        }
        .card-text {
            font-size: 0.7rem !important;
        }
        .badge {
            font-size: 0.55rem !important;
            padding: 0.15rem 0.4rem !important;
        }
        .card-img-top {
            height: 120px !important;
        }
        .bg-gradient-light {
            height: 120px !important;
        }
        .bg-gradient-light i {
            font-size: 3rem !important;
        }
        
        /* Pagination */
        .pagination .page-link {
            font-size: 0.65rem !important;
            padding: 0.25rem 0.5rem !important;
        }
        
        /* MODALES */
        .modal-dialog {
            margin: 0.5rem;
        }
        .modal-content {
            border-radius: 12px !important;
        }
        .modal-body {
            padding: 0.75rem !important;
        }
        .modal-footer {
            padding: 0.5rem !important;
            flex-wrap: wrap;
        }
        .modal-footer .btn {
            font-size: 0.7rem !important;
            padding: 0.2rem 0.5rem !important;
        }
        .modal-header {
            padding: 0.5rem 0.75rem !important;
        }
        .modal-title {
            font-size: 0.9rem !important;
        }
        
        /* Filtres - 100% sur mobile */
        .filter-col {
            flex: 0 0 100% !important;
            max-width: 100% !important;
            width: 100% !important;
        }
        .filter-col .input-group {
            width: 100% !important;
        }
        .filter-col-half {
            flex: 0 0 100% !important;
            max-width: 100% !important;
            width: 100% !important;
        }
        .filter-btn-group {
            flex-wrap: wrap;
        }
        .filter-btn-group .btn {
            flex: 1 1 100%;
        }
        
        /* Informations plat */
        .bg-light.rounded {
            width: 60px !important;
            height: 60px !important;
        }
        .bg-light.rounded i {
            font-size: 2rem !important;
        }
        img.rounded.shadow-sm {
            width: 60px !important;
            height: 60px !important;
        }
        .col-md-4 p {
            font-size: 0.8rem !important;
        }
        .col-md-4 .fw-bold {
            font-size: 0.8rem !important;
        }
    }

    /* Tablette (576px - 768px) */
    @media (min-width: 577px) and (max-width: 768px) {
        .container-fluid {
            padding-left: 12px !important;
            padding-right: 12px !important;
        }
        
        .h1 {
            font-size: 1.4rem !important;
        }
        .h3 {
            font-size: 1.1rem !important;
        }
        .btn {
            font-size: 0.7rem !important;
            padding: 0.25rem 0.6rem !important;
        }
        .card-title {
            font-size: 0.9rem !important;
        }
        .card-text {
            font-size: 0.75rem !important;
        }
        .card-img-top {
            height: 150px !important;
        }
        .bg-gradient-light {
            height: 150px !important;
        }
        
        /* Filtres - 2 colonnes sur tablette */
        .filter-col-half {
            flex: 0 0 50% !important;
            max-width: 50% !important;
            width: 50% !important;
        }
        .filter-col {
            flex: 0 0 100% !important;
            max-width: 100% !important;
            width: 100% !important;
        }
    }

    /* Désactiver hover sur mobile */
    @media (max-width: 768px) {
        .hover-shadow:hover {
            transform: none !important;
        }
        .stat-card:hover {
            transform: none !important;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 284
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

        // line 285
        yield "<div class=\"container-fluid px-2 px-md-4 py-2 py-md-3\">

    <!-- ==========================================
         EN-TÊTE
    ========================================== -->
    <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center mb-3 mb-md-4 flex-wrap gap-2\">
        <div class=\"w-100 w-sm-auto\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb mb-1\">
                    <li class=\"breadcrumb-item small\">
                        <a href=\"";
        // line 295
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_index");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-utensils me-1\"></i> Plats
                        </a>
                    </li>
                    <li class=\"breadcrumb-item small\">
                        <a href=\"";
        // line 300
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 300, $this->source); })()), "id", [], "any", false, false, false, 300)]), "html", null, true);
        yield "\" class=\"text-decoration-none\">
                            ";
        // line 301
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 301, $this->source); })()), "name", [], "any", false, false, false, 301)), "truncate", [15], "method", false, false, false, 301), "html", null, true);
        yield "
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active small\">
                        <i class=\"fas fa-percent me-1\"></i> Promotions
                    </li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-1\">
                <i class=\"fas fa-percent me-2 text-primary\"></i>Promotions du plat
            </h1>
            <p class=\"text-muted mb-0 small\">
                Plat : <strong>";
        // line 313
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 313, $this->source); })()), "name", [], "any", false, false, false, 313), "html", null, true);
        yield "</strong> | 
                Prix : <strong>";
        // line 314
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 314, $this->source); })()), "sellingPrice", [], "any", false, false, false, 314), CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 314, $this->source); })()), "hmaService", [], "any", false, false, false, 314)), "html", null, true);
        yield "</strong>
            </p>
        </div>
        <div class=\"d-flex gap-1 gap-sm-2 flex-wrap w-100 w-sm-auto\">
            <a href=\"";
        // line 318
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 318, $this->source); })()), "id", [], "any", false, false, false, 318)]), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary btn-sm flex-grow-1 flex-sm-grow-0\">
                <i class=\"fas fa-arrow-left me-1\"></i> <span class=\"d-none d-sm-inline\">Retour</span>
            </a>
            <a href=\"";
        // line 321
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_promotion_new");
        yield "?recipe_id=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 321, $this->source); })()), "id", [], "any", false, false, false, 321), "html", null, true);
        yield "\" class=\"btn btn-primary btn-sm flex-grow-1 flex-sm-grow-0\">
                <i class=\"fas fa-plus-circle me-1\"></i> <span class=\"d-none d-sm-inline\">Nouvelle promotion</span>
                <span class=\"d-inline d-sm-none\">Nouvelle</span>
            </a>
        </div>
    </div>

    <!-- ==========================================
         FLASH MESSAGES
    ========================================== -->
    ";
        // line 331
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 331, $this->source); })()), "flashes", ["success"], "method", false, false, false, 331));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 332
            yield "        <div class=\"alert alert-success alert-dismissible fade show small\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "<button type=\"button\" class=\"btn-close btn-close-sm\" data-bs-dismiss=\"alert\"></button></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 334
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 334, $this->source); })()), "flashes", ["error"], "method", false, false, false, 334));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 335
            yield "        <div class=\"alert alert-danger alert-dismissible fade show small\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "<button type=\"button\" class=\"btn-close btn-close-sm\" data-bs-dismiss=\"alert\"></button></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 337
        yield "
    <!-- ==========================================
         INFORMATIONS DU PLAT
    ========================================== -->
    <div class=\"card shadow-sm border-0 mb-3 mb-md-4\">
        <div class=\"card-body p-2 p-md-3\">
            <div class=\"row align-items-center g-2 g-md-3\">
                <div class=\"col-3 col-md-2 text-center\">
                    ";
        // line 345
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 345, $this->source); })()), "image", [], "any", false, false, false, 345)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 346
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images_plats/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 346, $this->source); })()), "image", [], "any", false, false, false, 346))), "html", null, true);
            yield "\" 
                             alt=\"";
            // line 347
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 347, $this->source); })()), "name", [], "any", false, false, false, 347), "html", null, true);
            yield "\" 
                             class=\"rounded shadow-sm\" 
                             style=\"width: 60px; height: 60px; object-fit: cover;\">
                    ";
        } else {
            // line 351
            yield "                        <div class=\"bg-light rounded d-flex align-items-center justify-content-center mx-auto\" style=\"width: 60px; height: 60px;\">
                            <i class=\"fas fa-utensils fa-2x text-muted\"></i>
                        </div>
                    ";
        }
        // line 355
        yield "                </div>
                <div class=\"col-9 col-md-10\">
                    <div class=\"row g-1 g-md-3\">
                        <div class=\"col-12 col-md-4\">
                            <small class=\"text-muted\" style=\"font-size:0.55rem;\">Nom du plat</small>
                            <p class=\"mb-0 fw-bold small\">";
        // line 360
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 360, $this->source); })()), "name", [], "any", false, false, false, 360), "html", null, true);
        yield "</p>
                        </div>
                        <div class=\"col-6 col-md-4\">
                            <small class=\"text-muted\" style=\"font-size:0.55rem;\">Prix de vente</small>
                            <p class=\"mb-0 fw-bold text-success small\">";
        // line 364
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 364, $this->source); })()), "sellingPrice", [], "any", false, false, false, 364), CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 364, $this->source); })()), "hmaService", [], "any", false, false, false, 364)), "html", null, true);
        yield "</p>
                        </div>
                        <div class=\"col-6 col-md-4\">
                            <small class=\"text-muted\" style=\"font-size:0.55rem;\">Catégorie</small>
                            <p class=\"mb-0 small\">";
        // line 368
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 368, $this->source); })()), "category", [], "any", false, false, false, 368)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 368, $this->source); })()), "category", [], "any", false, false, false, 368), "name", [], "any", false, false, false, 368), "html", null, true)) : ("Non catégorisé"));
        yield "</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==========================================
         STATISTIQUES - 6 CARTES
    ========================================== -->
    <div class=\"card shadow-sm border-0 mb-3 mb-md-4\">
        <div class=\"card-header bg-white py-2 py-md-3 border-0\">
            <h5 class=\"mb-0 fs-6 fs-md-5\"><i class=\"fas fa-chart-pie me-2 text-primary\"></i>Statistiques des promotions</h5>
        </div>
        <div class=\"card-body p-2 p-md-3\">
            <div class=\"row g-2 g-md-3\">
                <!-- Total -->
                <div class=\"col-6 col-md-4 col-lg-2\">
                    <div class=\"stat-card p-2 p-md-3 bg-light rounded-3 h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted small text-uppercase fw-bold d-block\" style=\"font-size:0.6rem;\">Total</span>
                                <h3 class=\"mb-0 fw-bold fs-4 fs-md-3\">";
        // line 391
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 391, $this->source); })())), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-percent text-primary opacity-50\" style=\"font-size:1.5rem;\"></i>
                        </div>
                    </div>
                </div>
                <!-- Actives -->
                <div class=\"col-6 col-md-4 col-lg-2\">
                    <div class=\"stat-card p-2 p-md-3 bg-light rounded-3 h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted small text-uppercase fw-bold d-block\" style=\"font-size:0.6rem;\">Actives</span>
                                <h3 class=\"mb-0 fw-bold fs-4 fs-md-3 text-success\">";
        // line 403
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 403, $this->source); })()), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 403, $this->source); })()), "isActive", [], "any", false, false, false, 403); })), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-check-circle text-success opacity-50\" style=\"font-size:1.5rem;\"></i>
                        </div>
                    </div>
                </div>
                <!-- Inactives -->
                <div class=\"col-6 col-md-4 col-lg-2\">
                    <div class=\"stat-card p-2 p-md-3 bg-light rounded-3 h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted small text-uppercase fw-bold d-block\" style=\"font-size:0.6rem;\">Inactives</span>
                                <h3 class=\"mb-0 fw-bold fs-4 fs-md-3 text-danger\">";
        // line 415
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 415, $this->source); })()), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 415, $this->source); })()), "isActive", [], "any", false, false, false, 415); })), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-ban text-danger opacity-50\" style=\"font-size:1.5rem;\"></i>
                        </div>
                    </div>
                </div>
                <!-- En cours -->
                <div class=\"col-6 col-md-4 col-lg-2\">
                    <div class=\"stat-card p-2 p-md-3 bg-light rounded-3 h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted small text-uppercase fw-bold d-block\" style=\"font-size:0.6rem;\">En cours</span>
                                <h3 class=\"mb-0 fw-bold fs-4 fs-md-3 text-warning\">";
        // line 427
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 427, $this->source); })()), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 427, $this->source); })()), "isOngoing", [], "any", false, false, false, 427); })), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-clock text-warning opacity-50\" style=\"font-size:1.5rem;\"></i>
                        </div>
                    </div>
                </div>
                <!-- À venir -->
                <div class=\"col-6 col-md-4 col-lg-2\">
                    <div class=\"stat-card p-2 p-md-3 bg-light rounded-3 h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted small text-uppercase fw-bold d-block\" style=\"font-size:0.6rem;\">À venir</span>
                                <h3 class=\"mb-0 fw-bold fs-4 fs-md-3 text-info\">";
        // line 439
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 439, $this->source); })()), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 439, $this->source); })()), "isUpcoming", [], "any", false, false, false, 439); })), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-calendar-alt text-info opacity-50\" style=\"font-size:1.5rem;\"></i>
                        </div>
                    </div>
                </div>
                <!-- Terminées -->
                <div class=\"col-6 col-md-4 col-lg-2\">
                    <div class=\"stat-card p-2 p-md-3 bg-light rounded-3 h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted small text-uppercase fw-bold d-block\" style=\"font-size:0.6rem;\">Terminées</span>
                                <h3 class=\"mb-0 fw-bold fs-4 fs-md-3 text-secondary\">";
        // line 451
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 451, $this->source); })()), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 451, $this->source); })()), "isEnded", [], "any", false, false, false, 451); })), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-stopwatch text-secondary opacity-50\" style=\"font-size:1.5rem;\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==========================================
         FILTRES - VERSION RESPONSIVE
    ========================================== -->
    <div class=\"card shadow-sm border-0 mb-3 mb-md-4\">
        <div class=\"card-header bg-white py-2 py-md-3 border-0 d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <h5 class=\"mb-0 fs-6 fs-md-5\"><i class=\"fas fa-filter me-2 text-primary\"></i>Filtres</h5>
            <div class=\"d-flex gap-1 gap-md-2\">
                <a href=\"";
        // line 468
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_recipe_promotions", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 468, $this->source); })()), "id", [], "any", false, false, false, 468)]), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary btn-sm\">
                    <i class=\"fas fa-undo-alt me-1\"></i> <span class=\"d-none d-sm-inline\">Effacer</span>
                </a>
                <button type=\"submit\" form=\"filter-form\" class=\"btn btn-primary btn-sm\">
                    <i class=\"fas fa-filter me-1\"></i> <span class=\"d-none d-sm-inline\">Filtrer</span>
                </button>
            </div>
        </div>
        <div class=\"card-body p-2 p-md-3\">
            <form method=\"get\" id=\"filter-form\">
                <div class=\"row g-2 g-md-3 align-items-end\">
                    <!-- Recherche - 100% sur mobile, 4 sur desktop -->
                    <div class=\"col-12 col-md-4 filter-col\">
                        <label class=\"form-label fw-semibold filter-label\">Recherche</label>
                        <div class=\"input-group\">
                            <span class=\"input-group-text bg-white border-end-0\" style=\"padding:0.2rem 0.4rem;\">
                                <i class=\"fas fa-search text-muted\" style=\"font-size:0.7rem;\"></i>
                            </span>
                            <input type=\"text\" name=\"search\" value=\"";
        // line 486
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 486, $this->source); })()), "html", null, true);
        yield "\" 
                                   class=\"form-control border-start-0 filter-input\" 
                                   placeholder=\"Nom de la promotion...\" 
                                   style=\"width:100%;\">
                        </div>
                    </div>
                    
                    <!-- Statut - 50% sur mobile, 3 sur desktop -->
                    <div class=\"col-6 col-md-3 filter-col-half\">
                        <label class=\"form-label fw-semibold filter-label\">Statut</label>
                        <select name=\"status\" class=\"form-select filter-select\">
                            <option value=\"all\" ";
        // line 497
        yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 497, $this->source); })()) == "all")) ? ("selected") : (""));
        yield ">Tous</option>
                            <option value=\"active\" ";
        // line 498
        yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 498, $this->source); })()) == "active")) ? ("selected") : (""));
        yield ">Actives</option>
                            <option value=\"inactive\" ";
        // line 499
        yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 499, $this->source); })()) == "inactive")) ? ("selected") : (""));
        yield ">Inactives</option>
                        </select>
                    </div>
                    
                    <!-- Période - 50% sur mobile, 3 sur desktop -->
                    <div class=\"col-6 col-md-3 filter-col-half\">
                        <label class=\"form-label fw-semibold filter-label\">Période</label>
                        <select name=\"period\" class=\"form-select filter-select\">
                            <option value=\"all\" ";
        // line 507
        yield ((((isset($context["period"]) || array_key_exists("period", $context) ? $context["period"] : (function () { throw new RuntimeError('Variable "period" does not exist.', 507, $this->source); })()) == "all")) ? ("selected") : (""));
        yield ">Toutes</option>
                            <option value=\"ongoing\" ";
        // line 508
        yield ((((isset($context["period"]) || array_key_exists("period", $context) ? $context["period"] : (function () { throw new RuntimeError('Variable "period" does not exist.', 508, $this->source); })()) == "ongoing")) ? ("selected") : (""));
        yield ">En cours</option>
                            <option value=\"upcoming\" ";
        // line 509
        yield ((((isset($context["period"]) || array_key_exists("period", $context) ? $context["period"] : (function () { throw new RuntimeError('Variable "period" does not exist.', 509, $this->source); })()) == "upcoming")) ? ("selected") : (""));
        yield ">À venir</option>
                            <option value=\"ended\" ";
        // line 510
        yield ((((isset($context["period"]) || array_key_exists("period", $context) ? $context["period"] : (function () { throw new RuntimeError('Variable "period" does not exist.', 510, $this->source); })()) == "ended")) ? ("selected") : (""));
        yield ">Terminées</option>
                        </select>
                    </div>
                    
                    <!-- Boutons - 100% sur mobile, 2 sur desktop -->
                    <div class=\"col-12 col-md-2 filter-col\">
                        <div class=\"d-flex gap-1 gap-md-2 filter-btn-group\">
                            <a href=\"";
        // line 517
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_recipe_promotions", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 517, $this->source); })()), "id", [], "any", false, false, false, 517)]), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary btn-sm flex-grow-1\">
                                <i class=\"fas fa-undo-alt me-1\"></i> <span class=\"d-none d-sm-inline\">Effacer</span>
                            </a>
                            <button type=\"submit\" class=\"btn btn-primary btn-sm flex-grow-1\">
                                <i class=\"fas fa-filter me-1\"></i> <span class=\"d-none d-sm-inline\">Filtrer</span>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- ==========================================
         LISTE DES PROMOTIONS - 2 CARTES SUR MOBILE
    ========================================== -->
    <div class=\"row g-2 g-md-3 g-lg-4\">
        ";
        // line 534
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 534, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
            // line 535
            yield "            <div class=\"col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4\">
                <div class=\"card h-100 border-0 shadow-sm hover-shadow transition-all rounded-4 overflow-hidden\">
                    ";
            // line 537
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "image", [], "any", false, false, false, 537)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 538
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/promotions/" . CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "image", [], "any", false, false, false, 538))), "html", null, true);
                yield "\" class=\"card-img-top\" style=\"height: 120px; object-fit: cover;\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "name", [], "any", false, false, false, 538), "html", null, true);
                yield "\">
                    ";
            } else {
                // line 540
                yield "                        <div class=\"bg-gradient-light d-flex align-items-center justify-content-center\" style=\"height: 120px;\">
                            <i class=\"fas fa-percent fa-4x text-muted opacity-25\"></i>
                        </div>
                    ";
            }
            // line 544
            yield "                    
                    <div class=\"card-body p-2 p-sm-3 p-md-3\">
                        <div class=\"d-flex justify-content-between align-items-start mb-1 mb-md-2\">
                            <h5 class=\"card-title fw-bold mb-0 fs-6 fs-md-5 text-dark\">";
            // line 547
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "name", [], "any", false, false, false, 547), 0, 20), "html", null, true);
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "name", [], "any", false, false, false, 547)) > 20)) {
                yield "...";
            }
            yield "</h5>
                            <span class=\"badge ";
            // line 548
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "isActive", [], "any", false, false, false, 548)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-secondary"));
            yield " px-2 py-1 ms-1 flex-shrink-0\" style=\"font-size:0.55rem;\">
                                ";
            // line 549
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "isActive", [], "any", false, false, false, 549)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Active") : ("Inactive"));
            yield "
                            </span>
                        </div>
                        <p class=\"card-text small text-muted mb-2\" style=\"font-size:0.7rem; min-height:40px;\">
                            ";
            // line 553
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "description", [], "any", true, true, false, 553)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "description", [], "any", false, false, false, 553), "Aucune description")) : ("Aucune description")), 0, 50), "html", null, true);
            yield "
                            ";
            // line 554
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "description", [], "any", false, false, false, 554)) > 50)) {
                yield "...";
            }
            // line 555
            yield "                        </p>
                        
                        <div class=\"mb-1 mb-md-2\">
                            <strong class=\"text-dark small\" style=\"font-size:0.65rem;\">Réduction :</strong> 
                            <span class=\"badge bg-dark text-white px-2 py-1 rounded-pill\" style=\"font-size:0.65rem;\">
                                ";
            // line 560
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "typePromotion", [], "any", false, false, false, 560), "name", [], "any", false, false, false, 560) == "Pourcentage")) {
                // line 561
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "value", [], "any", false, false, false, 561), "html", null, true);
                yield "%
                                ";
            } else {
                // line 563
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "value", [], "any", false, false, false, 563), CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 563, $this->source); })()), "hmaService", [], "any", false, false, false, 563)), "html", null, true);
                yield "
                                ";
            }
            // line 565
            yield "                            </span>
                        </div>
                        
                        <div class=\"small text-muted\" style=\"font-size:0.6rem;\">
                            <i class=\"far fa-calendar-alt me-1\"></i> 
                            ";
            // line 570
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "startDate", [], "any", false, false, false, 570), "d/m/Y"), "html", null, true);
            yield "
                            ";
            // line 571
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "endDate", [], "any", false, false, false, 571)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 572
                yield "                                → ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "endDate", [], "any", false, false, false, 572), "d/m/Y"), "html", null, true);
                yield "
                            ";
            } else {
                // line 574
                yield "                                <span class=\"badge bg-info bg-opacity-10 text-info ms-1\" style=\"font-size:0.5rem;\">Sans fin</span>
                            ";
            }
            // line 576
            yield "                        </div>
                        
                        <!-- Indicateur de période -->
                        <div class=\"mt-1 mt-md-2\">
                            ";
            // line 580
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "isOngoing", [], "any", false, false, false, 580)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 581
                yield "                                <span class=\"badge bg-warning text-dark\" style=\"font-size:0.5rem;\">
                                    <i class=\"fas fa-play me-1\"></i> En cours
                                </span>
                            ";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 584
$context["promotion"], "isUpcoming", [], "any", false, false, false, 584)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 585
                yield "                                <span class=\"badge bg-info\" style=\"font-size:0.5rem;\">
                                    <i class=\"fas fa-clock me-1\"></i> À venir
                                </span>
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 588
$context["promotion"], "endDate", [], "any", false, false, false, 588) && (CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "endDate", [], "any", false, false, false, 588) < $this->extensions['Twig\Extension\CoreExtension']->convertDate()))) {
                // line 589
                yield "                                <span class=\"badge bg-secondary\" style=\"font-size:0.5rem;\">
                                    <i class=\"fas fa-stop me-1\"></i> Terminée
                                </span>
                            ";
            }
            // line 593
            yield "                        </div>
                        
                        <!-- Type de promotion -->
                        <div class=\"mt-1\">
                            <small class=\"text-muted\" style=\"font-size:0.55rem;\">
                                <i class=\"fas fa-tag me-1\"></i>
                                ";
            // line 599
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "typePromotion", [], "any", false, true, false, 599), "name", [], "any", true, true, false, 599)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "typePromotion", [], "any", false, false, false, 599), "name", [], "any", false, false, false, 599), "Standard")) : ("Standard")), "html", null, true);
            yield "
                            </small>
                        </div>
                    </div>
                    
                    <div class=\"card-footer bg-transparent border-0 d-flex flex-wrap justify-content-between gap-1 pt-0 pb-2 pb-md-3 px-2 px-sm-3 px-md-3\">
                        <a href=\"";
            // line 605
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_promotion_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 605)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-info flex-fill\" style=\"font-size:0.55rem; padding:0.15rem 0.2rem;\">
                            <i class=\"fas fa-eye me-1\"></i> <span class=\"d-none d-sm-inline\">Voir</span>
                        </a>
                        <a href=\"";
            // line 608
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_promotion_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 608)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary flex-fill\" style=\"font-size:0.55rem; padding:0.15rem 0.2rem;\">
                            <i class=\"fas fa-edit me-1\"></i> <span class=\"d-none d-sm-inline\">Modifier</span>
                        </a>
                        ";
            // line 611
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 612
                yield "                            <button type=\"button\" class=\"btn btn-sm btn-outline-danger flex-fill\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 612), "html", null, true);
                yield "\" style=\"font-size:0.55rem; padding:0.15rem 0.2rem;\">
                                <i class=\"fas fa-trash-alt me-1\"></i> <span class=\"d-none d-sm-inline\">Supprimer</span>
                            </button>
                        ";
            }
            // line 616
            yield "                    </div>
                </div>
            </div>

            <!-- ==========================================
                 MODAL DE SUPPRESSION
            ========================================== -->
            ";
            // line 623
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 624
                yield "            <div class=\"modal fade\" id=\"deleteModal";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 624), "html", null, true);
                yield "\" tabindex=\"-1\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-dialog-centered modal-sm\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header border-0 py-2\">
                            <h5 class=\"modal-title text-danger fs-6\">
                                <i class=\"fas fa-exclamation-triangle me-2\"></i> Confirmer
                            </h5>
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                        </div>
                        <div class=\"modal-body text-center py-3\">
                            <i class=\"fas fa-trash-alt fa-3x text-danger mb-2\"></i>
                            <h6 class=\"fs-6\">Supprimer cette promotion ?</h6>
                            <p class=\"text-muted small\">Cette action est irréversible.</p>
                            <div class=\"alert alert-warning p-2 small mt-2\">
                                <strong>";
                // line 638
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "name", [], "any", false, false, false, 638), 0, 30), "html", null, true);
                yield "</strong><br>
                                Cette promotion ne sera plus associée à ce plat.
                            </div>
                        </div>
                        <div class=\"modal-footer border-0 py-2\">
                            <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-bs-dismiss=\"modal\">Annuler</button>
                            <form method=\"post\" action=\"";
                // line 644
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_promotion_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 644)]), "html", null, true);
                yield "\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 645
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 645))), "html", null, true);
                yield "\">
                                <button type=\"submit\" class=\"btn btn-danger btn-sm\">Supprimer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            ";
            }
            // line 653
            yield "        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 654
            yield "            <!-- Aucun résultat -->
            <div class=\"col-12\">
                <div class=\"card border-0 shadow-sm rounded-4 text-center py-4 py-md-5\">
                    <div class=\"card-body\">
                        <i class=\"fas fa-percent fa-4x text-muted mb-3 opacity-25\"></i>
                        <h5 class=\"text-muted fs-6 fs-md-5\">Aucune promotion associée</h5>
                        <p class=\"text-muted small\">Ajoutez une promotion pour ce plat.</p>
                        <a href=\"";
            // line 661
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_promotion_new");
            yield "?recipe_id=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 661, $this->source); })()), "id", [], "any", false, false, false, 661), "html", null, true);
            yield "\" class=\"btn btn-primary btn-sm mt-2\">
                            <i class=\"fas fa-plus-circle me-2\"></i> Nouvelle promotion
                        </a>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['promotion'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 668
        yield "    </div>

    <!-- ==========================================
         PAGINATION
    ========================================== -->
    ";
        // line 673
        if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 673, $this->source); })()) > 1)) {
            // line 674
            yield "        <nav class=\"mt-3 mt-md-4\">
            <ul class=\"pagination pagination-sm justify-content-center flex-wrap gap-1\">
                ";
            // line 676
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 676, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 677
                yield "                    <li class=\"page-item ";
                yield ((($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 677, $this->source); })()))) ? ("active") : (""));
                yield "\">
                        <a class=\"page-link\" href=\"";
                // line 678
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_recipe_promotions", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 678, $this->source); })()), "request", [], "any", false, false, false, 678), "query", [], "any", false, false, false, 678), "all", [], "any", false, false, false, 678), ["page" => $context["page"], "id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 678, $this->source); })()), "id", [], "any", false, false, false, 678)])), "html", null, true);
                yield "\" style=\"font-size:0.7rem; padding:0.25rem 0.5rem;\">
                            ";
                // line 679
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                yield "
                        </a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 683
            yield "            </ul>
        </nav>
    ";
        }
        // line 686
        yield "</div>
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
        return "admin/restaurant/promotion/recipe_promotions.html.twig";
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
        return array (  1058 => 686,  1053 => 683,  1043 => 679,  1039 => 678,  1034 => 677,  1030 => 676,  1026 => 674,  1024 => 673,  1017 => 668,  1002 => 661,  993 => 654,  988 => 653,  977 => 645,  973 => 644,  964 => 638,  946 => 624,  944 => 623,  935 => 616,  927 => 612,  925 => 611,  919 => 608,  913 => 605,  904 => 599,  896 => 593,  890 => 589,  888 => 588,  883 => 585,  881 => 584,  876 => 581,  874 => 580,  868 => 576,  864 => 574,  858 => 572,  856 => 571,  852 => 570,  845 => 565,  839 => 563,  833 => 561,  831 => 560,  824 => 555,  820 => 554,  816 => 553,  809 => 549,  805 => 548,  798 => 547,  793 => 544,  787 => 540,  779 => 538,  777 => 537,  773 => 535,  768 => 534,  748 => 517,  738 => 510,  734 => 509,  730 => 508,  726 => 507,  715 => 499,  711 => 498,  707 => 497,  693 => 486,  672 => 468,  652 => 451,  637 => 439,  622 => 427,  607 => 415,  592 => 403,  577 => 391,  551 => 368,  544 => 364,  537 => 360,  530 => 355,  524 => 351,  517 => 347,  512 => 346,  510 => 345,  500 => 337,  491 => 335,  486 => 334,  477 => 332,  473 => 331,  458 => 321,  452 => 318,  445 => 314,  441 => 313,  426 => 301,  422 => 300,  414 => 295,  402 => 285,  389 => 284,  102 => 7,  89 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/restaurant/promotion/recipe_promotions.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Promotions du plat - {{ recipe.name }}{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    .hover-shadow {
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .hover-shadow:hover {
        transform: translateY(-5px);
        box-shadow: 0 1rem 2rem rgba(0,0,0,0.1) !important;
    }
    .bg-gradient-light {
        background: linear-gradient(135deg, #f5f7fa 0%, #e9ecef 100%);
    }
    .rounded-4 {
        border-radius: 1rem;
    }
    .stat-card {
        transition: transform 0.2s;
    }
    .stat-card:hover {
        transform: scale(1.02);
        background-color: #ffffff !important;
        box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.05);
    }
    .text-dark {
        color: #212529 !important;
    }
    .form-control, .form-select {
        color: #212529 !important;
        background-color: #ffffff !important;
    }

    /* ========================================
       RESPONSIVE - FILTRES
    ======================================== */
    .filter-label {
        display: block !important;
        width: 100% !important;
        font-size: 0.7rem !important;
    }
    .filter-select {
        width: 100% !important;
        font-size: 0.7rem !important;
        padding: 0.2rem 0.4rem !important;
    }
    .filter-input {
        font-size: 0.7rem !important;
        padding: 0.2rem 0.4rem !important;
    }

    /* ========================================
       RESPONSIVE - MEDIA QUERIES
    ======================================== */
    
    /* Mobile (< 576px) */
    @media (max-width: 576px) {
        .container-fluid {
            padding-left: 8px !important;
            padding-right: 8px !important;
        }
        
        /* En-tête */
        .h1 {
            font-size: 1.2rem !important;
        }
        .h3 {
            font-size: 1rem !important;
        }
        .h5 {
            font-size: 0.85rem !important;
        }
        .text-muted {
            font-size: 0.75rem !important;
        }
        
        /* Breadcrumb */
        .breadcrumb {
            font-size: 0.6rem !important;
        }
        .breadcrumb-item a {
            font-size: 0.6rem !important;
        }
        
        /* Boutons */
        .btn {
            font-size: 0.65rem !important;
            padding: 0.25rem 0.5rem !important;
        }
        .btn i {
            font-size: 0.7rem !important;
        }
        
        /* Formulaires */
        .form-control, .form-select {
            font-size: 0.7rem !important;
            padding: 0.2rem 0.4rem !important;
        }
        .form-label {
            font-size: 0.6rem !important;
        }
        .input-group-text {
            padding: 0.2rem 0.4rem !important;
            font-size: 0.7rem !important;
        }
        
        /* Stats */
        .stat-card .h3 {
            font-size: 1.2rem !important;
        }
        .stat-card .fa-2x {
            font-size: 1.5rem !important;
        }
        .stat-card .text-muted {
            font-size: 0.6rem !important;
        }
        .stat-card .p-3 {
            padding: 0.5rem !important;
        }
        
        /* Cartes des promotions */
        .card-body {
            padding: 0.75rem !important;
        }
        .card-footer {
            padding: 0.5rem 0.75rem !important;
            flex-wrap: wrap;
        }
        .card-footer .btn {
            font-size: 0.55rem !important;
            padding: 0.15rem 0.2rem !important;
        }
        .card-title {
            font-size: 0.85rem !important;
        }
        .card-text {
            font-size: 0.7rem !important;
        }
        .badge {
            font-size: 0.55rem !important;
            padding: 0.15rem 0.4rem !important;
        }
        .card-img-top {
            height: 120px !important;
        }
        .bg-gradient-light {
            height: 120px !important;
        }
        .bg-gradient-light i {
            font-size: 3rem !important;
        }
        
        /* Pagination */
        .pagination .page-link {
            font-size: 0.65rem !important;
            padding: 0.25rem 0.5rem !important;
        }
        
        /* MODALES */
        .modal-dialog {
            margin: 0.5rem;
        }
        .modal-content {
            border-radius: 12px !important;
        }
        .modal-body {
            padding: 0.75rem !important;
        }
        .modal-footer {
            padding: 0.5rem !important;
            flex-wrap: wrap;
        }
        .modal-footer .btn {
            font-size: 0.7rem !important;
            padding: 0.2rem 0.5rem !important;
        }
        .modal-header {
            padding: 0.5rem 0.75rem !important;
        }
        .modal-title {
            font-size: 0.9rem !important;
        }
        
        /* Filtres - 100% sur mobile */
        .filter-col {
            flex: 0 0 100% !important;
            max-width: 100% !important;
            width: 100% !important;
        }
        .filter-col .input-group {
            width: 100% !important;
        }
        .filter-col-half {
            flex: 0 0 100% !important;
            max-width: 100% !important;
            width: 100% !important;
        }
        .filter-btn-group {
            flex-wrap: wrap;
        }
        .filter-btn-group .btn {
            flex: 1 1 100%;
        }
        
        /* Informations plat */
        .bg-light.rounded {
            width: 60px !important;
            height: 60px !important;
        }
        .bg-light.rounded i {
            font-size: 2rem !important;
        }
        img.rounded.shadow-sm {
            width: 60px !important;
            height: 60px !important;
        }
        .col-md-4 p {
            font-size: 0.8rem !important;
        }
        .col-md-4 .fw-bold {
            font-size: 0.8rem !important;
        }
    }

    /* Tablette (576px - 768px) */
    @media (min-width: 577px) and (max-width: 768px) {
        .container-fluid {
            padding-left: 12px !important;
            padding-right: 12px !important;
        }
        
        .h1 {
            font-size: 1.4rem !important;
        }
        .h3 {
            font-size: 1.1rem !important;
        }
        .btn {
            font-size: 0.7rem !important;
            padding: 0.25rem 0.6rem !important;
        }
        .card-title {
            font-size: 0.9rem !important;
        }
        .card-text {
            font-size: 0.75rem !important;
        }
        .card-img-top {
            height: 150px !important;
        }
        .bg-gradient-light {
            height: 150px !important;
        }
        
        /* Filtres - 2 colonnes sur tablette */
        .filter-col-half {
            flex: 0 0 50% !important;
            max-width: 50% !important;
            width: 50% !important;
        }
        .filter-col {
            flex: 0 0 100% !important;
            max-width: 100% !important;
            width: 100% !important;
        }
    }

    /* Désactiver hover sur mobile */
    @media (max-width: 768px) {
        .hover-shadow:hover {
            transform: none !important;
        }
        .stat-card:hover {
            transform: none !important;
        }
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container-fluid px-2 px-md-4 py-2 py-md-3\">

    <!-- ==========================================
         EN-TÊTE
    ========================================== -->
    <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center mb-3 mb-md-4 flex-wrap gap-2\">
        <div class=\"w-100 w-sm-auto\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb mb-1\">
                    <li class=\"breadcrumb-item small\">
                        <a href=\"{{ path('app_admin_recipe_index') }}\" class=\"text-decoration-none\">
                            <i class=\"fas fa-utensils me-1\"></i> Plats
                        </a>
                    </li>
                    <li class=\"breadcrumb-item small\">
                        <a href=\"{{ path('app_admin_recipe_show', {'id': recipe.id}) }}\" class=\"text-decoration-none\">
                            {{ recipe.name|u.truncate(15) }}
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active small\">
                        <i class=\"fas fa-percent me-1\"></i> Promotions
                    </li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-1\">
                <i class=\"fas fa-percent me-2 text-primary\"></i>Promotions du plat
            </h1>
            <p class=\"text-muted mb-0 small\">
                Plat : <strong>{{ recipe.name }}</strong> | 
                Prix : <strong>{{ recipe.sellingPrice|price_with_currency(recipe.hmaService) }}</strong>
            </p>
        </div>
        <div class=\"d-flex gap-1 gap-sm-2 flex-wrap w-100 w-sm-auto\">
            <a href=\"{{ path('app_admin_recipe_show', {'id': recipe.id}) }}\" class=\"btn btn-outline-secondary btn-sm flex-grow-1 flex-sm-grow-0\">
                <i class=\"fas fa-arrow-left me-1\"></i> <span class=\"d-none d-sm-inline\">Retour</span>
            </a>
            <a href=\"{{ path('app_restaurant_promotion_new') }}?recipe_id={{ recipe.id }}\" class=\"btn btn-primary btn-sm flex-grow-1 flex-sm-grow-0\">
                <i class=\"fas fa-plus-circle me-1\"></i> <span class=\"d-none d-sm-inline\">Nouvelle promotion</span>
                <span class=\"d-inline d-sm-none\">Nouvelle</span>
            </a>
        </div>
    </div>

    <!-- ==========================================
         FLASH MESSAGES
    ========================================== -->
    {% for message in app.flashes('success') %}
        <div class=\"alert alert-success alert-dismissible fade show small\">{{ message }}<button type=\"button\" class=\"btn-close btn-close-sm\" data-bs-dismiss=\"alert\"></button></div>
    {% endfor %}
    {% for message in app.flashes('error') %}
        <div class=\"alert alert-danger alert-dismissible fade show small\">{{ message }}<button type=\"button\" class=\"btn-close btn-close-sm\" data-bs-dismiss=\"alert\"></button></div>
    {% endfor %}

    <!-- ==========================================
         INFORMATIONS DU PLAT
    ========================================== -->
    <div class=\"card shadow-sm border-0 mb-3 mb-md-4\">
        <div class=\"card-body p-2 p-md-3\">
            <div class=\"row align-items-center g-2 g-md-3\">
                <div class=\"col-3 col-md-2 text-center\">
                    {% if recipe.image %}
                        <img src=\"{{ asset('uploads/images_plats/' ~ recipe.image) }}\" 
                             alt=\"{{ recipe.name }}\" 
                             class=\"rounded shadow-sm\" 
                             style=\"width: 60px; height: 60px; object-fit: cover;\">
                    {% else %}
                        <div class=\"bg-light rounded d-flex align-items-center justify-content-center mx-auto\" style=\"width: 60px; height: 60px;\">
                            <i class=\"fas fa-utensils fa-2x text-muted\"></i>
                        </div>
                    {% endif %}
                </div>
                <div class=\"col-9 col-md-10\">
                    <div class=\"row g-1 g-md-3\">
                        <div class=\"col-12 col-md-4\">
                            <small class=\"text-muted\" style=\"font-size:0.55rem;\">Nom du plat</small>
                            <p class=\"mb-0 fw-bold small\">{{ recipe.name }}</p>
                        </div>
                        <div class=\"col-6 col-md-4\">
                            <small class=\"text-muted\" style=\"font-size:0.55rem;\">Prix de vente</small>
                            <p class=\"mb-0 fw-bold text-success small\">{{ recipe.sellingPrice|price_with_currency(recipe.hmaService) }}</p>
                        </div>
                        <div class=\"col-6 col-md-4\">
                            <small class=\"text-muted\" style=\"font-size:0.55rem;\">Catégorie</small>
                            <p class=\"mb-0 small\">{{ recipe.category ? recipe.category.name : 'Non catégorisé' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==========================================
         STATISTIQUES - 6 CARTES
    ========================================== -->
    <div class=\"card shadow-sm border-0 mb-3 mb-md-4\">
        <div class=\"card-header bg-white py-2 py-md-3 border-0\">
            <h5 class=\"mb-0 fs-6 fs-md-5\"><i class=\"fas fa-chart-pie me-2 text-primary\"></i>Statistiques des promotions</h5>
        </div>
        <div class=\"card-body p-2 p-md-3\">
            <div class=\"row g-2 g-md-3\">
                <!-- Total -->
                <div class=\"col-6 col-md-4 col-lg-2\">
                    <div class=\"stat-card p-2 p-md-3 bg-light rounded-3 h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted small text-uppercase fw-bold d-block\" style=\"font-size:0.6rem;\">Total</span>
                                <h3 class=\"mb-0 fw-bold fs-4 fs-md-3\">{{ promotions|length }}</h3>
                            </div>
                            <i class=\"fas fa-percent text-primary opacity-50\" style=\"font-size:1.5rem;\"></i>
                        </div>
                    </div>
                </div>
                <!-- Actives -->
                <div class=\"col-6 col-md-4 col-lg-2\">
                    <div class=\"stat-card p-2 p-md-3 bg-light rounded-3 h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted small text-uppercase fw-bold d-block\" style=\"font-size:0.6rem;\">Actives</span>
                                <h3 class=\"mb-0 fw-bold fs-4 fs-md-3 text-success\">{{ promotions|filter(p => p.isActive)|length }}</h3>
                            </div>
                            <i class=\"fas fa-check-circle text-success opacity-50\" style=\"font-size:1.5rem;\"></i>
                        </div>
                    </div>
                </div>
                <!-- Inactives -->
                <div class=\"col-6 col-md-4 col-lg-2\">
                    <div class=\"stat-card p-2 p-md-3 bg-light rounded-3 h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted small text-uppercase fw-bold d-block\" style=\"font-size:0.6rem;\">Inactives</span>
                                <h3 class=\"mb-0 fw-bold fs-4 fs-md-3 text-danger\">{{ promotions|filter(p => not p.isActive)|length }}</h3>
                            </div>
                            <i class=\"fas fa-ban text-danger opacity-50\" style=\"font-size:1.5rem;\"></i>
                        </div>
                    </div>
                </div>
                <!-- En cours -->
                <div class=\"col-6 col-md-4 col-lg-2\">
                    <div class=\"stat-card p-2 p-md-3 bg-light rounded-3 h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted small text-uppercase fw-bold d-block\" style=\"font-size:0.6rem;\">En cours</span>
                                <h3 class=\"mb-0 fw-bold fs-4 fs-md-3 text-warning\">{{ promotions|filter(p => p.isOngoing)|length }}</h3>
                            </div>
                            <i class=\"fas fa-clock text-warning opacity-50\" style=\"font-size:1.5rem;\"></i>
                        </div>
                    </div>
                </div>
                <!-- À venir -->
                <div class=\"col-6 col-md-4 col-lg-2\">
                    <div class=\"stat-card p-2 p-md-3 bg-light rounded-3 h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted small text-uppercase fw-bold d-block\" style=\"font-size:0.6rem;\">À venir</span>
                                <h3 class=\"mb-0 fw-bold fs-4 fs-md-3 text-info\">{{ promotions|filter(p => p.isUpcoming)|length }}</h3>
                            </div>
                            <i class=\"fas fa-calendar-alt text-info opacity-50\" style=\"font-size:1.5rem;\"></i>
                        </div>
                    </div>
                </div>
                <!-- Terminées -->
                <div class=\"col-6 col-md-4 col-lg-2\">
                    <div class=\"stat-card p-2 p-md-3 bg-light rounded-3 h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted small text-uppercase fw-bold d-block\" style=\"font-size:0.6rem;\">Terminées</span>
                                <h3 class=\"mb-0 fw-bold fs-4 fs-md-3 text-secondary\">{{ promotions|filter(p => p.isEnded)|length }}</h3>
                            </div>
                            <i class=\"fas fa-stopwatch text-secondary opacity-50\" style=\"font-size:1.5rem;\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==========================================
         FILTRES - VERSION RESPONSIVE
    ========================================== -->
    <div class=\"card shadow-sm border-0 mb-3 mb-md-4\">
        <div class=\"card-header bg-white py-2 py-md-3 border-0 d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <h5 class=\"mb-0 fs-6 fs-md-5\"><i class=\"fas fa-filter me-2 text-primary\"></i>Filtres</h5>
            <div class=\"d-flex gap-1 gap-md-2\">
                <a href=\"{{ path('app_restaurant_recipe_promotions', {'id': recipe.id}) }}\" class=\"btn btn-outline-secondary btn-sm\">
                    <i class=\"fas fa-undo-alt me-1\"></i> <span class=\"d-none d-sm-inline\">Effacer</span>
                </a>
                <button type=\"submit\" form=\"filter-form\" class=\"btn btn-primary btn-sm\">
                    <i class=\"fas fa-filter me-1\"></i> <span class=\"d-none d-sm-inline\">Filtrer</span>
                </button>
            </div>
        </div>
        <div class=\"card-body p-2 p-md-3\">
            <form method=\"get\" id=\"filter-form\">
                <div class=\"row g-2 g-md-3 align-items-end\">
                    <!-- Recherche - 100% sur mobile, 4 sur desktop -->
                    <div class=\"col-12 col-md-4 filter-col\">
                        <label class=\"form-label fw-semibold filter-label\">Recherche</label>
                        <div class=\"input-group\">
                            <span class=\"input-group-text bg-white border-end-0\" style=\"padding:0.2rem 0.4rem;\">
                                <i class=\"fas fa-search text-muted\" style=\"font-size:0.7rem;\"></i>
                            </span>
                            <input type=\"text\" name=\"search\" value=\"{{ search }}\" 
                                   class=\"form-control border-start-0 filter-input\" 
                                   placeholder=\"Nom de la promotion...\" 
                                   style=\"width:100%;\">
                        </div>
                    </div>
                    
                    <!-- Statut - 50% sur mobile, 3 sur desktop -->
                    <div class=\"col-6 col-md-3 filter-col-half\">
                        <label class=\"form-label fw-semibold filter-label\">Statut</label>
                        <select name=\"status\" class=\"form-select filter-select\">
                            <option value=\"all\" {{ status == 'all' ? 'selected' }}>Tous</option>
                            <option value=\"active\" {{ status == 'active' ? 'selected' }}>Actives</option>
                            <option value=\"inactive\" {{ status == 'inactive' ? 'selected' }}>Inactives</option>
                        </select>
                    </div>
                    
                    <!-- Période - 50% sur mobile, 3 sur desktop -->
                    <div class=\"col-6 col-md-3 filter-col-half\">
                        <label class=\"form-label fw-semibold filter-label\">Période</label>
                        <select name=\"period\" class=\"form-select filter-select\">
                            <option value=\"all\" {{ period == 'all' ? 'selected' }}>Toutes</option>
                            <option value=\"ongoing\" {{ period == 'ongoing' ? 'selected' }}>En cours</option>
                            <option value=\"upcoming\" {{ period == 'upcoming' ? 'selected' }}>À venir</option>
                            <option value=\"ended\" {{ period == 'ended' ? 'selected' }}>Terminées</option>
                        </select>
                    </div>
                    
                    <!-- Boutons - 100% sur mobile, 2 sur desktop -->
                    <div class=\"col-12 col-md-2 filter-col\">
                        <div class=\"d-flex gap-1 gap-md-2 filter-btn-group\">
                            <a href=\"{{ path('app_restaurant_recipe_promotions', {'id': recipe.id}) }}\" class=\"btn btn-outline-secondary btn-sm flex-grow-1\">
                                <i class=\"fas fa-undo-alt me-1\"></i> <span class=\"d-none d-sm-inline\">Effacer</span>
                            </a>
                            <button type=\"submit\" class=\"btn btn-primary btn-sm flex-grow-1\">
                                <i class=\"fas fa-filter me-1\"></i> <span class=\"d-none d-sm-inline\">Filtrer</span>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- ==========================================
         LISTE DES PROMOTIONS - 2 CARTES SUR MOBILE
    ========================================== -->
    <div class=\"row g-2 g-md-3 g-lg-4\">
        {% for promotion in promotions %}
            <div class=\"col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4\">
                <div class=\"card h-100 border-0 shadow-sm hover-shadow transition-all rounded-4 overflow-hidden\">
                    {% if promotion.image %}
                        <img src=\"{{ asset('uploads/promotions/' ~ promotion.image) }}\" class=\"card-img-top\" style=\"height: 120px; object-fit: cover;\" alt=\"{{ promotion.name }}\">
                    {% else %}
                        <div class=\"bg-gradient-light d-flex align-items-center justify-content-center\" style=\"height: 120px;\">
                            <i class=\"fas fa-percent fa-4x text-muted opacity-25\"></i>
                        </div>
                    {% endif %}
                    
                    <div class=\"card-body p-2 p-sm-3 p-md-3\">
                        <div class=\"d-flex justify-content-between align-items-start mb-1 mb-md-2\">
                            <h5 class=\"card-title fw-bold mb-0 fs-6 fs-md-5 text-dark\">{{ promotion.name|slice(0, 20) }}{% if promotion.name|length > 20 %}...{% endif %}</h5>
                            <span class=\"badge {{ promotion.isActive ? 'bg-success' : 'bg-secondary' }} px-2 py-1 ms-1 flex-shrink-0\" style=\"font-size:0.55rem;\">
                                {{ promotion.isActive ? 'Active' : 'Inactive' }}
                            </span>
                        </div>
                        <p class=\"card-text small text-muted mb-2\" style=\"font-size:0.7rem; min-height:40px;\">
                            {{ promotion.description|default('Aucune description')|slice(0, 50) }}
                            {% if promotion.description|length > 50 %}...{% endif %}
                        </p>
                        
                        <div class=\"mb-1 mb-md-2\">
                            <strong class=\"text-dark small\" style=\"font-size:0.65rem;\">Réduction :</strong> 
                            <span class=\"badge bg-dark text-white px-2 py-1 rounded-pill\" style=\"font-size:0.65rem;\">
                                {% if promotion.typePromotion.name == 'Pourcentage' %}
                                    {{ promotion.value }}%
                                {% else %}
                                    {{ promotion.value|price_with_currency(recipe.hmaService) }}
                                {% endif %}
                            </span>
                        </div>
                        
                        <div class=\"small text-muted\" style=\"font-size:0.6rem;\">
                            <i class=\"far fa-calendar-alt me-1\"></i> 
                            {{ promotion.startDate|date('d/m/Y') }}
                            {% if promotion.endDate %}
                                → {{ promotion.endDate|date('d/m/Y') }}
                            {% else %}
                                <span class=\"badge bg-info bg-opacity-10 text-info ms-1\" style=\"font-size:0.5rem;\">Sans fin</span>
                            {% endif %}
                        </div>
                        
                        <!-- Indicateur de période -->
                        <div class=\"mt-1 mt-md-2\">
                            {% if promotion.isOngoing %}
                                <span class=\"badge bg-warning text-dark\" style=\"font-size:0.5rem;\">
                                    <i class=\"fas fa-play me-1\"></i> En cours
                                </span>
                            {% elseif promotion.isUpcoming %}
                                <span class=\"badge bg-info\" style=\"font-size:0.5rem;\">
                                    <i class=\"fas fa-clock me-1\"></i> À venir
                                </span>
                            {% elseif promotion.endDate and promotion.endDate < date() %}
                                <span class=\"badge bg-secondary\" style=\"font-size:0.5rem;\">
                                    <i class=\"fas fa-stop me-1\"></i> Terminée
                                </span>
                            {% endif %}
                        </div>
                        
                        <!-- Type de promotion -->
                        <div class=\"mt-1\">
                            <small class=\"text-muted\" style=\"font-size:0.55rem;\">
                                <i class=\"fas fa-tag me-1\"></i>
                                {{ promotion.typePromotion.name|default('Standard') }}
                            </small>
                        </div>
                    </div>
                    
                    <div class=\"card-footer bg-transparent border-0 d-flex flex-wrap justify-content-between gap-1 pt-0 pb-2 pb-md-3 px-2 px-sm-3 px-md-3\">
                        <a href=\"{{ path('app_restaurant_promotion_show', {id: promotion.id}) }}\" class=\"btn btn-sm btn-outline-info flex-fill\" style=\"font-size:0.55rem; padding:0.15rem 0.2rem;\">
                            <i class=\"fas fa-eye me-1\"></i> <span class=\"d-none d-sm-inline\">Voir</span>
                        </a>
                        <a href=\"{{ path('app_restaurant_promotion_edit', {id: promotion.id}) }}\" class=\"btn btn-sm btn-outline-primary flex-fill\" style=\"font-size:0.55rem; padding:0.15rem 0.2rem;\">
                            <i class=\"fas fa-edit me-1\"></i> <span class=\"d-none d-sm-inline\">Modifier</span>
                        </a>
                        {% if is_granted('ROLE_ADMIN') %}
                            <button type=\"button\" class=\"btn btn-sm btn-outline-danger flex-fill\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal{{ promotion.id }}\" style=\"font-size:0.55rem; padding:0.15rem 0.2rem;\">
                                <i class=\"fas fa-trash-alt me-1\"></i> <span class=\"d-none d-sm-inline\">Supprimer</span>
                            </button>
                        {% endif %}
                    </div>
                </div>
            </div>

            <!-- ==========================================
                 MODAL DE SUPPRESSION
            ========================================== -->
            {% if is_granted('ROLE_ADMIN') %}
            <div class=\"modal fade\" id=\"deleteModal{{ promotion.id }}\" tabindex=\"-1\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-dialog-centered modal-sm\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header border-0 py-2\">
                            <h5 class=\"modal-title text-danger fs-6\">
                                <i class=\"fas fa-exclamation-triangle me-2\"></i> Confirmer
                            </h5>
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                        </div>
                        <div class=\"modal-body text-center py-3\">
                            <i class=\"fas fa-trash-alt fa-3x text-danger mb-2\"></i>
                            <h6 class=\"fs-6\">Supprimer cette promotion ?</h6>
                            <p class=\"text-muted small\">Cette action est irréversible.</p>
                            <div class=\"alert alert-warning p-2 small mt-2\">
                                <strong>{{ promotion.name|slice(0, 30) }}</strong><br>
                                Cette promotion ne sera plus associée à ce plat.
                            </div>
                        </div>
                        <div class=\"modal-footer border-0 py-2\">
                            <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-bs-dismiss=\"modal\">Annuler</button>
                            <form method=\"post\" action=\"{{ path('app_restaurant_promotion_delete', {id: promotion.id}) }}\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ promotion.id) }}\">
                                <button type=\"submit\" class=\"btn btn-danger btn-sm\">Supprimer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {% endif %}
        {% else %}
            <!-- Aucun résultat -->
            <div class=\"col-12\">
                <div class=\"card border-0 shadow-sm rounded-4 text-center py-4 py-md-5\">
                    <div class=\"card-body\">
                        <i class=\"fas fa-percent fa-4x text-muted mb-3 opacity-25\"></i>
                        <h5 class=\"text-muted fs-6 fs-md-5\">Aucune promotion associée</h5>
                        <p class=\"text-muted small\">Ajoutez une promotion pour ce plat.</p>
                        <a href=\"{{ path('app_restaurant_promotion_new') }}?recipe_id={{ recipe.id }}\" class=\"btn btn-primary btn-sm mt-2\">
                            <i class=\"fas fa-plus-circle me-2\"></i> Nouvelle promotion
                        </a>
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>

    <!-- ==========================================
         PAGINATION
    ========================================== -->
    {% if totalPages > 1 %}
        <nav class=\"mt-3 mt-md-4\">
            <ul class=\"pagination pagination-sm justify-content-center flex-wrap gap-1\">
                {% for page in 1..totalPages %}
                    <li class=\"page-item {{ page == currentPage ? 'active' }}\">
                        <a class=\"page-link\" href=\"{{ path('app_restaurant_recipe_promotions', app.request.query.all|merge({'page': page, 'id': recipe.id})) }}\" style=\"font-size:0.7rem; padding:0.25rem 0.5rem;\">
                            {{ page }}
                        </a>
                    </li>
                {% endfor %}
            </ul>
        </nav>
    {% endif %}
</div>
{% endblock %}", "admin/restaurant/promotion/recipe_promotions.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\restaurant\\promotion\\recipe_promotions.html.twig");
    }
}
