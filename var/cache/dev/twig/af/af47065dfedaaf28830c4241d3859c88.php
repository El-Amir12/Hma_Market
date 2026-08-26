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

/* admin/restaurant/promotion/recipe/show.html.twig */
class __TwigTemplate_c99d9548078b599aad23dc2360861ade extends Template
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
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/restaurant/promotion/recipe/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/restaurant/promotion/recipe/show.html.twig"));

        $this->parent = $this->load("base.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
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

        yield "Promotion ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5), "html", null, true);
        yield " - Plat ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
    .rounded-4 {
        border-radius: 1rem;
        overflow: hidden;
    }
    
    /* Dégradés */
    .bg-gradient-light {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    }
    
    .bg-gradient-primary {
        background: linear-gradient(135deg, #667eea 0%, #0463f1 100%) !important;
    }
    
    /* Cartes d'informations */
    .info-card {
        transition: all 0.3s ease;
        border: 1px solid rgba(0,0,0,0.05);
        border-radius: 12px;
    }
    
    .info-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 24px rgba(0,0,0,0.1);
        border-color: transparent;
    }
    
    /* Boutons */
    .btn-primary {
        background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);
        border: none;
        transition: all 0.3s ease;
        border-radius: 10px;
        font-weight: 500;
    }
    
    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
    }
    
    .btn-danger {
        transition: all 0.3s ease;
        border-radius: 10px;
        font-weight: 500;
    }
    
    .btn-danger:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(220, 53, 69, 0.4);
    }
    
    .btn-outline-secondary {
        border-radius: 10px;
        transition: all 0.3s ease;
    }
    
    .btn-outline-secondary:hover {
        transform: translateY(-2px);
    }
    
    /* Badges */
    .badge {
        font-weight: 500;
        padding: 0.3rem 0.5rem;
        border-radius: 8px;
        font-size: 0.7rem;
    }
    
    .bg-dark {
        background-color: #212529 !important;
    }
    
    .text-white {
        color: #ffffff !important;
    }
    
    /* Modal */
    .modal-content {
        border-radius: 1rem;
        border: none;
    }
    
    .modal-header {
        border-bottom: none;
    }
    
    .modal-footer {
        border-top: none;
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
        .display-5 {
            font-size: 1.2rem !important;
        }
        .h1 {
            font-size: 1.2rem !important;
        }
        .h5 {
            font-size: 0.85rem !important;
        }
        .text-muted {
            font-size: 0.7rem !important;
        }
        
        /* Boutons */
        .btn {
            font-size: 0.65rem !important;
            padding: 0.25rem 0.5rem !important;
        }
        .btn i {
            font-size: 0.7rem !important;
        }
        .btn-lg {
            font-size: 0.7rem !important;
            padding: 0.3rem 0.6rem !important;
        }
        
        /* Cartes */
        .card-header {
            padding: 0.5rem 0.75rem !important;
        }
        .card-body {
            padding: 0.5rem 0.75rem !important;
        }
        .card-body .p-4 {
            padding: 0.75rem !important;
        }
        
        /* Informations */
        .info-card {
            padding: 0.5rem !important;
        }
        .info-card .fs-1 {
            font-size: 1.5rem !important;
        }
        .info-card .fs-2 {
            font-size: 1.3rem !important;
        }
        .info-card .fs-4 {
            font-size: 1rem !important;
        }
        .info-card .fs-5 {
            font-size: 0.85rem !important;
        }
        .info-card .fw-bold {
            font-size: 1rem !important;
        }
        .info-card .fw-semibold {
            font-size: 0.85rem !important;
        }
        .info-card .mb-0 {
            font-size: 0.85rem !important;
        }
        
        /* Images */
        .img-fluid.rounded {
            max-height: 120px !important;
        }
        .bg-gradient-light {
            height: 100px !important;
        }
        .bg-gradient-light i {
            font-size: 2.5rem !important;
        }
        
        /* Badges */
        .badge {
            font-size: 0.55rem !important;
            padding: 0.2rem 0.4rem !important;
        }
        .fs-6.px-3.py-2 {
            font-size: 0.6rem !important;
            padding: 0.2rem 0.4rem !important;
        }
        
        /* Section récapitulative */
        .bg-info.bg-opacity-10 .card-body {
            padding: 0.75rem !important;
        }
        .bg-info.bg-opacity-10 .rounded-circle {
            width: 40px !important;
            height: 40px !important;
        }
        .bg-info.bg-opacity-10 .rounded-circle i {
            font-size: 1.2rem !important;
        }
        .bg-info.bg-opacity-10 h6 {
            font-size: 0.8rem !important;
        }
        .bg-info.bg-opacity-10 p {
            font-size: 0.7rem !important;
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
        
        /* Boutons d'action */
        .d-flex.gap-2 {
            flex-wrap: wrap;
            gap: 0.25rem !important;
        }
        .d-flex.gap-2 .btn {
            flex: 1 1 auto;
            min-width: 80px;
        }
    }

    /* Tablette (576px - 768px) */
    @media (min-width: 577px) and (max-width: 768px) {
        .container-fluid {
            padding-left: 12px !important;
            padding-right: 12px !important;
        }
        
        .display-5 {
            font-size: 1.6rem !important;
        }
        .btn {
            font-size: 0.7rem !important;
            padding: 0.25rem 0.6rem !important;
        }
        .btn-lg {
            font-size: 0.75rem !important;
            padding: 0.3rem 0.8rem !important;
        }
        
        .card-body {
            padding: 1rem !important;
        }
        .card-body .p-4 {
            padding: 1rem !important;
        }
        
        .info-card .fs-1 {
            font-size: 1.75rem !important;
        }
        .info-card .fs-2 {
            font-size: 1.5rem !important;
        }
        .info-card .fs-4 {
            font-size: 1.1rem !important;
        }
        .info-card .fs-5 {
            font-size: 0.9rem !important;
        }
        
        .img-fluid.rounded {
            max-height: 150px !important;
        }
        .bg-gradient-light {
            height: 120px !important;
        }
        
        .bg-info.bg-opacity-10 .rounded-circle {
            width: 45px !important;
            height: 45px !important;
        }
        .bg-info.bg-opacity-10 .rounded-circle i {
            font-size: 1.4rem !important;
        }
    }

    /* Désactiver hover sur mobile */
    @media (max-width: 768px) {
        .info-card:hover {
            transform: none !important;
            box-shadow: none !important;
        }
        .btn-primary:hover {
            transform: none !important;
            box-shadow: none !important;
        }
        .btn-danger:hover {
            transform: none !important;
            box-shadow: none !important;
        }
        .btn-outline-secondary:hover {
            transform: none !important;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 327
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

        // line 328
        yield "<div class=\"container-fluid px-2 px-md-4 py-2 py-md-4\">

    <!-- ==========================================
         EN-TÊTE
    ========================================== -->
    <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center mb-3 mb-md-4 flex-wrap gap-2\">
        <div class=\"w-100 w-sm-auto\">
            <a href=\"";
        // line 335
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_promotion_recipe_index");
        yield "\" class=\"btn btn-outline-secondary btn-sm mb-2\">
                <i class=\"fas fa-arrow-left me-1\"></i> <span class=\"d-none d-sm-inline\">Retour à la liste</span>
                <span class=\"d-inline d-sm-none\">Retour</span>
            </a>
            <h1 class=\"h2 h-md-1 fw-bold mt-1\">
                <i class=\"fas fa-tag text-primary me-2\"></i>";
        // line 340
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 340, $this->source); })()), "name", [], "any", false, false, false, 340), 0, 20), "html", null, true);
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 340, $this->source); })()), "name", [], "any", false, false, false, 340)) > 20)) {
            yield "...";
        }
        // line 341
        yield "                <span class=\"fs-6 text-muted mx-1 d-none d-sm-inline\">→</span>
                <span class=\"d-block d-sm-inline fs-6 fs-md-4 text-muted mt-1 mt-sm-0\">
                    <i class=\"fas fa-hamburger text-info me-1\"></i>";
        // line 343
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 343, $this->source); })()), "name", [], "any", false, false, false, 343), 0, 20), "html", null, true);
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 343, $this->source); })()), "name", [], "any", false, false, false, 343)) > 20)) {
            yield "...";
        }
        // line 344
        yield "                </span>
            </h1>
        </div>
        <div class=\"d-flex gap-1 gap-sm-2 flex-wrap w-100 w-sm-auto\">
            <a href=\"";
        // line 348
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_promotion_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 348, $this->source); })()), "id", [], "any", false, false, false, 348)]), "html", null, true);
        yield "\" class=\"btn btn-primary btn-sm flex-grow-1 flex-sm-grow-0\">
                <i class=\"fas fa-edit me-1\"></i> <span class=\"d-none d-sm-inline\">Modifier</span>
            </a>
            <button type=\"button\" class=\"btn btn-danger btn-sm flex-grow-1 flex-sm-grow-0\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal\">
                <i class=\"fas fa-trash-alt me-1\"></i> <span class=\"d-none d-sm-inline\">Supprimer</span>
            </button>
        </div>
    </div>

    <!-- ==========================================
         CONTENU PRINCIPAL
    ========================================== -->
    <div class=\"row g-2 g-md-4\">
        <!-- Colonne gauche - Informations de la promotion -->
        <div class=\"col-12 col-lg-6\">
            <div class=\"card shadow-sm border-0 rounded-4 h-100\">
                <div class=\"card-header bg-gradient-primary text-white py-2 py-md-3\">
                    <h5 class=\"card-title mb-0 fs-6 fs-md-5\">
                        <i class=\"fas fa-tag me-2\"></i>Informations de la promotion
                    </h5>
                </div>
                <div class=\"card-body p-2 p-md-4\">
                    ";
        // line 370
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 370, $this->source); })()), "image", [], "any", false, false, false, 370)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 371
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/promotions/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 371, $this->source); })()), "image", [], "any", false, false, false, 371))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 371, $this->source); })()), "name", [], "any", false, false, false, 371), "html", null, true);
            yield "\" class=\"img-fluid rounded mb-3\" style=\"max-height: 150px; width: 100%; object-fit: cover;\">
                    ";
        } else {
            // line 373
            yield "                        <div class=\"bg-gradient-light rounded d-flex align-items-center justify-content-center mb-3\" style=\"height: 120px;\">
                            <i class=\"fas fa-tag fa-3x text-muted\"></i>
                        </div>
                    ";
        }
        // line 377
        yield "                    
                    <div class=\"info-card p-2 p-md-3 bg-light rounded-3 mb-2 mb-md-3\">
                        <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                            <i class=\"fas fa-layer-group text-primary me-1 me-md-2\" style=\"font-size:0.8rem;\"></i>
                            <small class=\"text-muted text-uppercase\" style=\"font-size:0.55rem;\">Type de réduction</small>
                        </div>
                        <p class=\"fw-bold fs-6 fs-md-4 mb-0\">";
        // line 383
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 383, $this->source); })()), "typePromotion", [], "any", false, false, false, 383), "name", [], "any", false, false, false, 383), "html", null, true);
        yield "</p>
                    </div>
                    
                    <div class=\"info-card p-2 p-md-3 bg-light rounded-3 mb-2 mb-md-3\">
                        <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                            <i class=\"fas fa-percent text-primary me-1 me-md-2\" style=\"font-size:0.8rem;\"></i>
                            <small class=\"text-muted text-uppercase\" style=\"font-size:0.55rem;\">Valeur de la réduction</small>
                        </div>
                        <p class=\"fw-bold fs-4 fs-md-1 text-primary mb-0\">
                            ";
        // line 392
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 392, $this->source); })()), "typePromotion", [], "any", false, false, false, 392), "name", [], "any", false, false, false, 392) == "Pourcentage")) {
            // line 393
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 393, $this->source); })()), "value", [], "any", false, false, false, 393), "html", null, true);
            yield "%
                            ";
        } else {
            // line 395
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 395, $this->source); })()), "value", [], "any", false, false, false, 395), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 395, $this->source); })()), "user", [], "any", false, false, false, 395), "hmaService", [], "any", false, false, false, 395)), "html", null, true);
            yield "
                            ";
        }
        // line 397
        yield "                        </p>
                    </div>
                    
                    <div class=\"info-card p-2 p-md-3 bg-light rounded-3 mb-2 mb-md-3\">
                        <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                            <i class=\"fas fa-align-left text-primary me-1 me-md-2\" style=\"font-size:0.8rem;\"></i>
                            <small class=\"text-muted text-uppercase\" style=\"font-size:0.55rem;\">Description</small>
                        </div>
                        <p class=\"mb-0 small\" style=\"font-size:0.75rem;\">";
        // line 405
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "description", [], "any", true, true, false, 405)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 405, $this->source); })()), "description", [], "any", false, false, false, 405), "Aucune description fournie")) : ("Aucune description fournie")), "html", null, true));
        yield "</p>
                    </div>
                    
                    <div class=\"row g-2 g-md-3\">
                        <div class=\"col-6\">
                            <div class=\"info-card p-2 p-md-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                                    <i class=\"far fa-calendar-check text-success me-1 me-md-2\" style=\"font-size:0.8rem;\"></i>
                                    <small class=\"text-muted text-uppercase\" style=\"font-size:0.55rem;\">Début</small>
                                </div>
                                <p class=\"fw-semibold fs-6 fs-md-5 mb-0\">";
        // line 415
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 415, $this->source); })()), "startDate", [], "any", false, false, false, 415), "d/m/Y"), "html", null, true);
        yield "</p>
                            </div>
                        </div>
                        <div class=\"col-6\">
                            <div class=\"info-card p-2 p-md-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                                    <i class=\"far fa-calendar-times text-danger me-1 me-md-2\" style=\"font-size:0.8rem;\"></i>
                                    <small class=\"text-muted text-uppercase\" style=\"font-size:0.55rem;\">Fin</small>
                                </div>
                                <p class=\"fw-semibold fs-6 fs-md-5 mb-0\">
                                    ";
        // line 425
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 425, $this->source); })()), "endDate", [], "any", false, false, false, 425)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 426
            yield "                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 426, $this->source); })()), "endDate", [], "any", false, false, false, 426), "d/m/Y"), "html", null, true);
            yield "
                                    ";
        } else {
            // line 428
            yield "                                        <span class=\"badge bg-info\" style=\"font-size:0.55rem;\">Sans limite</span>
                                    ";
        }
        // line 430
        yield "                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"mt-2 mt-md-3 pt-2 pt-md-3 border-top\">
                        <div class=\"d-flex flex-column flex-sm-row align-items-start align-items-sm-center gap-2\">
                            <div class=\"flex-shrink-0\">
                                <span class=\"badge ";
        // line 438
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 438, $this->source); })()), "isActive", [], "any", false, false, false, 438)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-secondary"));
        yield " px-2 py-1 px-md-3 py-md-2\" style=\"font-size:0.6rem;\">
                                    <i class=\"fas ";
        // line 439
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 439, $this->source); })()), "isActive", [], "any", false, false, false, 439)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-check-circle") : ("fa-ban"));
        yield " me-1\"></i>
                                    ";
        // line 440
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 440, $this->source); })()), "isActive", [], "any", false, false, false, 440)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ACTIVE") : ("INACTIVE"));
        yield "
                                </span>
                            </div>
                            <div class=\"flex-grow-1\">
                                <small class=\"text-muted\" style=\"font-size:0.6rem;\">Créée le ";
        // line 444
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 444, $this->source); })()), "createdAt", [], "any", false, false, false, 444), "d/m/Y à H:i"), "html", null, true);
        yield "</small>
                                ";
        // line 445
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 445, $this->source); })()), "updatedAt", [], "any", false, false, false, 445) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 445, $this->source); })()), "updatedAt", [], "any", false, false, false, 445) != CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 445, $this->source); })()), "createdAt", [], "any", false, false, false, 445)))) {
            // line 446
            yield "                                    <br><small class=\"text-muted\" style=\"font-size:0.6rem;\">Modifiée le ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 446, $this->source); })()), "updatedAt", [], "any", false, false, false, 446), "d/m/Y à H:i"), "html", null, true);
            yield "</small>
                                ";
        }
        // line 448
        yield "                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Colonne droite - Informations du plat -->
        <div class=\"col-12 col-lg-6\">
            <div class=\"card shadow-sm border-0 rounded-4 h-100\">
                <div class=\"card-header bg-gradient-primary text-white py-2 py-md-3\">
                    <h5 class=\"card-title mb-0 fs-6 fs-md-5\">
                        <i class=\"fas fa-hamburger me-2\"></i>Informations du plat
                    </h5>
                </div>
                <div class=\"card-body p-2 p-md-4\">
                    ";
        // line 464
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 464, $this->source); })()), "image", [], "any", false, false, false, 464)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 465
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images_plats/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 465, $this->source); })()), "image", [], "any", false, false, false, 465))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 465, $this->source); })()), "name", [], "any", false, false, false, 465), "html", null, true);
            yield "\" class=\"img-fluid rounded mb-3\" style=\"max-height: 150px; width: 100%; object-fit: cover;\">
                    ";
        } else {
            // line 467
            yield "                        <div class=\"bg-gradient-light rounded d-flex align-items-center justify-content-center mb-3\" style=\"height: 120px;\">
                            <i class=\"fas fa-utensil-spoon fa-3x text-muted\"></i>
                        </div>
                    ";
        }
        // line 471
        yield "                    
                    <div class=\"info-card p-2 p-md-3 bg-light rounded-3 mb-2 mb-md-3\">
                        <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                            <i class=\"fas fa-tag text-primary me-1 me-md-2\" style=\"font-size:0.8rem;\"></i>
                            <small class=\"text-muted text-uppercase\" style=\"font-size:0.55rem;\">Nom</small>
                        </div>
                        <p class=\"fw-bold fs-6 fs-md-4 mb-0\">";
        // line 477
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 477, $this->source); })()), "name", [], "any", false, false, false, 477), "html", null, true);
        yield "</p>
                    </div>
                    
                    <div class=\"info-card p-2 p-md-3 bg-light rounded-3 mb-2 mb-md-3\">
                        <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                            <i class=\"fas fa-align-left text-primary me-1 me-md-2\" style=\"font-size:0.8rem;\"></i>
                            <small class=\"text-muted text-uppercase\" style=\"font-size:0.55rem;\">Description</small>
                        </div>
                        <p class=\"mb-0 small\" style=\"font-size:0.75rem;\">";
        // line 485
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "description", [], "any", true, true, false, 485)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 485, $this->source); })()), "description", [], "any", false, false, false, 485), "Aucune description")) : ("Aucune description")), "html", null, true));
        yield "</p>
                    </div>
                    
                    <div class=\"row g-2 g-md-3\">
                        <div class=\"col-6\">
                            <div class=\"info-card p-2 p-md-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                                    <i class=\"fas fa-folder-tree text-primary me-1 me-md-2\" style=\"font-size:0.8rem;\"></i>
                                    <small class=\"text-muted text-uppercase\" style=\"font-size:0.55rem;\">Catégorie</small>
                                </div>
                                <p class=\"fw-semibold fs-6 fs-md-5 mb-0\">";
        // line 495
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 495, $this->source); })()), "category", [], "any", false, false, false, 495)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 495, $this->source); })()), "category", [], "any", false, false, false, 495), "name", [], "any", false, false, false, 495), "html", null, true)) : ("-"));
        yield "</p>
                            </div>
                        </div>
                        <div class=\"col-6\">
                            <div class=\"info-card p-2 p-md-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                                    <i class=\"fas fa-utensil-spoon text-primary me-1 me-md-2\" style=\"font-size:0.8rem;\"></i>
                                    <small class=\"text-muted text-uppercase\" style=\"font-size:0.55rem;\">Instructions</small>
                                </div>
                                <p class=\"mb-0 small\" style=\"font-size:0.75rem;\">";
        // line 504
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "instructions", [], "any", true, true, false, 504)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 504, $this->source); })()), "instructions", [], "any", false, false, false, 504), "Aucune instruction")) : ("Aucune instruction")), "html", null, true));
        yield "</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"row g-2 g-md-3 mt-2 mt-md-3\">
                        <div class=\"col-6\">
                            <div class=\"info-card p-2 p-md-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                                    <i class=\"fas fa-arrow-up text-success me-1 me-md-2\" style=\"font-size:0.8rem;\"></i>
                                    <small class=\"text-muted text-uppercase\" style=\"font-size:0.55rem;\">Prix de vente</small>
                                </div>
                                <p class=\"fw-bold fs-5 fs-md-2 text-success mb-0\">";
        // line 516
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 516, $this->source); })()), "sellingPrice", [], "any", false, false, false, 516), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 516, $this->source); })()), "user", [], "any", false, false, false, 516), "hmaService", [], "any", false, false, false, 516)), "html", null, true);
        yield "</p>
                            </div>
                        </div>
                        <div class=\"col-6\">
                            <div class=\"info-card p-2 p-md-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                                    <i class=\"fas fa-chart-line text-primary me-1 me-md-2\" style=\"font-size:0.8rem;\"></i>
                                    <small class=\"text-muted text-uppercase\" style=\"font-size:0.55rem;\">Marge estimée</small>
                                </div>
                                <p class=\"fw-bold fs-6 fs-md-5 mb-0\">
                                    ";
        // line 526
        $context["estimatedMargin"] = $this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 526, $this->source); })()), "sellingPrice", [], "any", false, false, false, 526) - (CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 526, $this->source); })()), "sellingPrice", [], "any", false, false, false, 526) * 0.6)), 0);
        // line 527
        yield "                                    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency((isset($context["estimatedMargin"]) || array_key_exists("estimatedMargin", $context) ? $context["estimatedMargin"] : (function () { throw new RuntimeError('Variable "estimatedMargin" does not exist.', 527, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 527, $this->source); })()), "user", [], "any", false, false, false, 527), "hmaService", [], "any", false, false, false, 527)), "html", null, true);
        yield "
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"mt-2 mt-md-3 pt-2 pt-md-3 border-top\">
                        <div class=\"d-flex flex-column flex-sm-row align-items-start align-items-sm-center gap-2\">
                            <div class=\"flex-shrink-0\">
                                <span class=\"badge ";
        // line 536
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 536, $this->source); })()), "isActive", [], "any", false, false, false, 536)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-secondary"));
        yield " px-2 py-1 px-md-3 py-md-2\" style=\"font-size:0.6rem;\">
                                    <i class=\"fas ";
        // line 537
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 537, $this->source); })()), "isActive", [], "any", false, false, false, 537)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-check-circle") : ("fa-ban"));
        yield " me-1\"></i>
                                    ";
        // line 538
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 538, $this->source); })()), "isActive", [], "any", false, false, false, 538)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ACTIF") : ("INACTIF"));
        yield "
                                </span>
                            </div>
                            <div class=\"flex-grow-1\">
                                <small class=\"text-muted\" style=\"font-size:0.6rem;\">Créé par</small>
                                <p class=\"fw-bold mb-0 small\">";
        // line 543
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 543, $this->source); })()), "user", [], "any", false, false, false, 543), "fullName", [], "any", false, false, false, 543), "html", null, true);
        yield "</p>
                                <small class=\"text-muted\" style=\"font-size:0.55rem;\">";
        // line 544
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 544, $this->source); })()), "user", [], "any", false, false, false, 544), "email", [], "any", false, false, false, 544), "html", null, true);
        yield "</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==========================================
         SECTION RÉCAPITULATIVE
    ========================================== -->
    <div class=\"card shadow-sm border-0 rounded-4 mt-3 mt-md-4 bg-info bg-opacity-10\">
        <div class=\"card-body p-2 p-md-4\">
            <div class=\"d-flex flex-column flex-sm-row align-items-start align-items-sm-center gap-2 gap-md-3\">
                <div class=\"flex-shrink-0\">
                    <div class=\"rounded-circle bg-white p-2 p-md-3 d-flex align-items-center justify-content-center shadow-sm\" style=\"width: 40px; height: 40px;\">
                        <i class=\"fas fa-info-circle fa-1x text-info\"></i>
                    </div>
                </div>
                <div class=\"flex-grow-1\">
                    <h6 class=\"mb-1 fw-bold fs-6 fs-md-5\">Comment s'applique cette promotion ?</h6>
                    <p class=\"mb-0 small\">
                        <i class=\"fas fa-check-circle text-success me-1\"></i>
                        Cette promotion s'applique <strong class=\"text-primary\">uniquement au plat</strong> <strong>";
        // line 568
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 568, $this->source); })()), "name", [], "any", false, false, false, 568), 0, 25), "html", null, true);
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 568, $this->source); })()), "name", [], "any", false, false, false, 568)) > 25)) {
            yield "...";
        }
        yield "</strong>.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- ==========================================
         MODAL DE SUPPRESSION
    ========================================== -->
    <div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\">
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
                    <h6 class=\"fs-6\">Supprimer cette association ?</h6>
                    <p class=\"text-muted small\">La promotion <strong>";
        // line 590
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotion"]) || array_key_exists("promotion", $context) ? $context["promotion"] : (function () { throw new RuntimeError('Variable "promotion" does not exist.', 590, $this->source); })()), "name", [], "any", false, false, false, 590), 0, 25), "html", null, true);
        yield "</strong> ne sera plus appliquée au plat <strong>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 590, $this->source); })()), "name", [], "any", false, false, false, 590), 0, 25), "html", null, true);
        yield "</strong>.</p>
                </div>
                <div class=\"modal-footer border-0 py-2\">
                    <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-bs-dismiss=\"modal\">Annuler</button>
                    <form method=\"post\" action=\"";
        // line 594
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_promotion_recipe_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotionRecipe"]) || array_key_exists("promotionRecipe", $context) ? $context["promotionRecipe"] : (function () { throw new RuntimeError('Variable "promotionRecipe" does not exist.', 594, $this->source); })()), "id", [], "any", false, false, false, 594)]), "html", null, true);
        yield "\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 595
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete-recipe" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["promotionRecipe"]) || array_key_exists("promotionRecipe", $context) ? $context["promotionRecipe"] : (function () { throw new RuntimeError('Variable "promotionRecipe" does not exist.', 595, $this->source); })()), "id", [], "any", false, false, false, 595))), "html", null, true);
        yield "\">
                        <button type=\"submit\" class=\"btn btn-danger btn-sm\">Supprimer</button>
                    </form>
                </div>
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
        return "admin/restaurant/promotion/recipe/show.html.twig";
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
        return array (  852 => 595,  848 => 594,  839 => 590,  811 => 568,  784 => 544,  780 => 543,  772 => 538,  768 => 537,  764 => 536,  751 => 527,  749 => 526,  736 => 516,  721 => 504,  709 => 495,  696 => 485,  685 => 477,  677 => 471,  671 => 467,  663 => 465,  661 => 464,  643 => 448,  637 => 446,  635 => 445,  631 => 444,  624 => 440,  620 => 439,  616 => 438,  606 => 430,  602 => 428,  596 => 426,  594 => 425,  581 => 415,  568 => 405,  558 => 397,  552 => 395,  546 => 393,  544 => 392,  532 => 383,  524 => 377,  518 => 373,  510 => 371,  508 => 370,  483 => 348,  477 => 344,  472 => 343,  468 => 341,  463 => 340,  455 => 335,  446 => 328,  433 => 327,  104 => 8,  91 => 7,  65 => 5,  42 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/restaurant/promotion/recipe/show.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}Promotion {{ promotion.name }} - Plat {{ recipe.name }}{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    .rounded-4 {
        border-radius: 1rem;
        overflow: hidden;
    }
    
    /* Dégradés */
    .bg-gradient-light {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    }
    
    .bg-gradient-primary {
        background: linear-gradient(135deg, #667eea 0%, #0463f1 100%) !important;
    }
    
    /* Cartes d'informations */
    .info-card {
        transition: all 0.3s ease;
        border: 1px solid rgba(0,0,0,0.05);
        border-radius: 12px;
    }
    
    .info-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 24px rgba(0,0,0,0.1);
        border-color: transparent;
    }
    
    /* Boutons */
    .btn-primary {
        background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);
        border: none;
        transition: all 0.3s ease;
        border-radius: 10px;
        font-weight: 500;
    }
    
    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
    }
    
    .btn-danger {
        transition: all 0.3s ease;
        border-radius: 10px;
        font-weight: 500;
    }
    
    .btn-danger:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(220, 53, 69, 0.4);
    }
    
    .btn-outline-secondary {
        border-radius: 10px;
        transition: all 0.3s ease;
    }
    
    .btn-outline-secondary:hover {
        transform: translateY(-2px);
    }
    
    /* Badges */
    .badge {
        font-weight: 500;
        padding: 0.3rem 0.5rem;
        border-radius: 8px;
        font-size: 0.7rem;
    }
    
    .bg-dark {
        background-color: #212529 !important;
    }
    
    .text-white {
        color: #ffffff !important;
    }
    
    /* Modal */
    .modal-content {
        border-radius: 1rem;
        border: none;
    }
    
    .modal-header {
        border-bottom: none;
    }
    
    .modal-footer {
        border-top: none;
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
        .display-5 {
            font-size: 1.2rem !important;
        }
        .h1 {
            font-size: 1.2rem !important;
        }
        .h5 {
            font-size: 0.85rem !important;
        }
        .text-muted {
            font-size: 0.7rem !important;
        }
        
        /* Boutons */
        .btn {
            font-size: 0.65rem !important;
            padding: 0.25rem 0.5rem !important;
        }
        .btn i {
            font-size: 0.7rem !important;
        }
        .btn-lg {
            font-size: 0.7rem !important;
            padding: 0.3rem 0.6rem !important;
        }
        
        /* Cartes */
        .card-header {
            padding: 0.5rem 0.75rem !important;
        }
        .card-body {
            padding: 0.5rem 0.75rem !important;
        }
        .card-body .p-4 {
            padding: 0.75rem !important;
        }
        
        /* Informations */
        .info-card {
            padding: 0.5rem !important;
        }
        .info-card .fs-1 {
            font-size: 1.5rem !important;
        }
        .info-card .fs-2 {
            font-size: 1.3rem !important;
        }
        .info-card .fs-4 {
            font-size: 1rem !important;
        }
        .info-card .fs-5 {
            font-size: 0.85rem !important;
        }
        .info-card .fw-bold {
            font-size: 1rem !important;
        }
        .info-card .fw-semibold {
            font-size: 0.85rem !important;
        }
        .info-card .mb-0 {
            font-size: 0.85rem !important;
        }
        
        /* Images */
        .img-fluid.rounded {
            max-height: 120px !important;
        }
        .bg-gradient-light {
            height: 100px !important;
        }
        .bg-gradient-light i {
            font-size: 2.5rem !important;
        }
        
        /* Badges */
        .badge {
            font-size: 0.55rem !important;
            padding: 0.2rem 0.4rem !important;
        }
        .fs-6.px-3.py-2 {
            font-size: 0.6rem !important;
            padding: 0.2rem 0.4rem !important;
        }
        
        /* Section récapitulative */
        .bg-info.bg-opacity-10 .card-body {
            padding: 0.75rem !important;
        }
        .bg-info.bg-opacity-10 .rounded-circle {
            width: 40px !important;
            height: 40px !important;
        }
        .bg-info.bg-opacity-10 .rounded-circle i {
            font-size: 1.2rem !important;
        }
        .bg-info.bg-opacity-10 h6 {
            font-size: 0.8rem !important;
        }
        .bg-info.bg-opacity-10 p {
            font-size: 0.7rem !important;
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
        
        /* Boutons d'action */
        .d-flex.gap-2 {
            flex-wrap: wrap;
            gap: 0.25rem !important;
        }
        .d-flex.gap-2 .btn {
            flex: 1 1 auto;
            min-width: 80px;
        }
    }

    /* Tablette (576px - 768px) */
    @media (min-width: 577px) and (max-width: 768px) {
        .container-fluid {
            padding-left: 12px !important;
            padding-right: 12px !important;
        }
        
        .display-5 {
            font-size: 1.6rem !important;
        }
        .btn {
            font-size: 0.7rem !important;
            padding: 0.25rem 0.6rem !important;
        }
        .btn-lg {
            font-size: 0.75rem !important;
            padding: 0.3rem 0.8rem !important;
        }
        
        .card-body {
            padding: 1rem !important;
        }
        .card-body .p-4 {
            padding: 1rem !important;
        }
        
        .info-card .fs-1 {
            font-size: 1.75rem !important;
        }
        .info-card .fs-2 {
            font-size: 1.5rem !important;
        }
        .info-card .fs-4 {
            font-size: 1.1rem !important;
        }
        .info-card .fs-5 {
            font-size: 0.9rem !important;
        }
        
        .img-fluid.rounded {
            max-height: 150px !important;
        }
        .bg-gradient-light {
            height: 120px !important;
        }
        
        .bg-info.bg-opacity-10 .rounded-circle {
            width: 45px !important;
            height: 45px !important;
        }
        .bg-info.bg-opacity-10 .rounded-circle i {
            font-size: 1.4rem !important;
        }
    }

    /* Désactiver hover sur mobile */
    @media (max-width: 768px) {
        .info-card:hover {
            transform: none !important;
            box-shadow: none !important;
        }
        .btn-primary:hover {
            transform: none !important;
            box-shadow: none !important;
        }
        .btn-danger:hover {
            transform: none !important;
            box-shadow: none !important;
        }
        .btn-outline-secondary:hover {
            transform: none !important;
        }
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container-fluid px-2 px-md-4 py-2 py-md-4\">

    <!-- ==========================================
         EN-TÊTE
    ========================================== -->
    <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center mb-3 mb-md-4 flex-wrap gap-2\">
        <div class=\"w-100 w-sm-auto\">
            <a href=\"{{ path('app_restaurant_promotion_recipe_index') }}\" class=\"btn btn-outline-secondary btn-sm mb-2\">
                <i class=\"fas fa-arrow-left me-1\"></i> <span class=\"d-none d-sm-inline\">Retour à la liste</span>
                <span class=\"d-inline d-sm-none\">Retour</span>
            </a>
            <h1 class=\"h2 h-md-1 fw-bold mt-1\">
                <i class=\"fas fa-tag text-primary me-2\"></i>{{ promotion.name|slice(0, 20) }}{% if promotion.name|length > 20 %}...{% endif %}
                <span class=\"fs-6 text-muted mx-1 d-none d-sm-inline\">→</span>
                <span class=\"d-block d-sm-inline fs-6 fs-md-4 text-muted mt-1 mt-sm-0\">
                    <i class=\"fas fa-hamburger text-info me-1\"></i>{{ recipe.name|slice(0, 20) }}{% if recipe.name|length > 20 %}...{% endif %}
                </span>
            </h1>
        </div>
        <div class=\"d-flex gap-1 gap-sm-2 flex-wrap w-100 w-sm-auto\">
            <a href=\"{{ path('app_restaurant_promotion_edit', {id: promotion.id}) }}\" class=\"btn btn-primary btn-sm flex-grow-1 flex-sm-grow-0\">
                <i class=\"fas fa-edit me-1\"></i> <span class=\"d-none d-sm-inline\">Modifier</span>
            </a>
            <button type=\"button\" class=\"btn btn-danger btn-sm flex-grow-1 flex-sm-grow-0\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal\">
                <i class=\"fas fa-trash-alt me-1\"></i> <span class=\"d-none d-sm-inline\">Supprimer</span>
            </button>
        </div>
    </div>

    <!-- ==========================================
         CONTENU PRINCIPAL
    ========================================== -->
    <div class=\"row g-2 g-md-4\">
        <!-- Colonne gauche - Informations de la promotion -->
        <div class=\"col-12 col-lg-6\">
            <div class=\"card shadow-sm border-0 rounded-4 h-100\">
                <div class=\"card-header bg-gradient-primary text-white py-2 py-md-3\">
                    <h5 class=\"card-title mb-0 fs-6 fs-md-5\">
                        <i class=\"fas fa-tag me-2\"></i>Informations de la promotion
                    </h5>
                </div>
                <div class=\"card-body p-2 p-md-4\">
                    {% if promotion.image %}
                        <img src=\"{{ asset('uploads/promotions/' ~ promotion.image) }}\" alt=\"{{ promotion.name }}\" class=\"img-fluid rounded mb-3\" style=\"max-height: 150px; width: 100%; object-fit: cover;\">
                    {% else %}
                        <div class=\"bg-gradient-light rounded d-flex align-items-center justify-content-center mb-3\" style=\"height: 120px;\">
                            <i class=\"fas fa-tag fa-3x text-muted\"></i>
                        </div>
                    {% endif %}
                    
                    <div class=\"info-card p-2 p-md-3 bg-light rounded-3 mb-2 mb-md-3\">
                        <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                            <i class=\"fas fa-layer-group text-primary me-1 me-md-2\" style=\"font-size:0.8rem;\"></i>
                            <small class=\"text-muted text-uppercase\" style=\"font-size:0.55rem;\">Type de réduction</small>
                        </div>
                        <p class=\"fw-bold fs-6 fs-md-4 mb-0\">{{ promotion.typePromotion.name }}</p>
                    </div>
                    
                    <div class=\"info-card p-2 p-md-3 bg-light rounded-3 mb-2 mb-md-3\">
                        <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                            <i class=\"fas fa-percent text-primary me-1 me-md-2\" style=\"font-size:0.8rem;\"></i>
                            <small class=\"text-muted text-uppercase\" style=\"font-size:0.55rem;\">Valeur de la réduction</small>
                        </div>
                        <p class=\"fw-bold fs-4 fs-md-1 text-primary mb-0\">
                            {% if promotion.typePromotion.name == 'Pourcentage' %}
                                {{ promotion.value }}%
                            {% else %}
                                {{ promotion.value|price_with_currency(app.user.hmaService) }}
                            {% endif %}
                        </p>
                    </div>
                    
                    <div class=\"info-card p-2 p-md-3 bg-light rounded-3 mb-2 mb-md-3\">
                        <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                            <i class=\"fas fa-align-left text-primary me-1 me-md-2\" style=\"font-size:0.8rem;\"></i>
                            <small class=\"text-muted text-uppercase\" style=\"font-size:0.55rem;\">Description</small>
                        </div>
                        <p class=\"mb-0 small\" style=\"font-size:0.75rem;\">{{ promotion.description|default('Aucune description fournie')|nl2br }}</p>
                    </div>
                    
                    <div class=\"row g-2 g-md-3\">
                        <div class=\"col-6\">
                            <div class=\"info-card p-2 p-md-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                                    <i class=\"far fa-calendar-check text-success me-1 me-md-2\" style=\"font-size:0.8rem;\"></i>
                                    <small class=\"text-muted text-uppercase\" style=\"font-size:0.55rem;\">Début</small>
                                </div>
                                <p class=\"fw-semibold fs-6 fs-md-5 mb-0\">{{ promotion.startDate|date('d/m/Y') }}</p>
                            </div>
                        </div>
                        <div class=\"col-6\">
                            <div class=\"info-card p-2 p-md-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                                    <i class=\"far fa-calendar-times text-danger me-1 me-md-2\" style=\"font-size:0.8rem;\"></i>
                                    <small class=\"text-muted text-uppercase\" style=\"font-size:0.55rem;\">Fin</small>
                                </div>
                                <p class=\"fw-semibold fs-6 fs-md-5 mb-0\">
                                    {% if promotion.endDate %}
                                        {{ promotion.endDate|date('d/m/Y') }}
                                    {% else %}
                                        <span class=\"badge bg-info\" style=\"font-size:0.55rem;\">Sans limite</span>
                                    {% endif %}
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"mt-2 mt-md-3 pt-2 pt-md-3 border-top\">
                        <div class=\"d-flex flex-column flex-sm-row align-items-start align-items-sm-center gap-2\">
                            <div class=\"flex-shrink-0\">
                                <span class=\"badge {{ promotion.isActive ? 'bg-success' : 'bg-secondary' }} px-2 py-1 px-md-3 py-md-2\" style=\"font-size:0.6rem;\">
                                    <i class=\"fas {{ promotion.isActive ? 'fa-check-circle' : 'fa-ban' }} me-1\"></i>
                                    {{ promotion.isActive ? 'ACTIVE' : 'INACTIVE' }}
                                </span>
                            </div>
                            <div class=\"flex-grow-1\">
                                <small class=\"text-muted\" style=\"font-size:0.6rem;\">Créée le {{ promotion.createdAt|date('d/m/Y à H:i') }}</small>
                                {% if promotion.updatedAt and promotion.updatedAt != promotion.createdAt %}
                                    <br><small class=\"text-muted\" style=\"font-size:0.6rem;\">Modifiée le {{ promotion.updatedAt|date('d/m/Y à H:i') }}</small>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Colonne droite - Informations du plat -->
        <div class=\"col-12 col-lg-6\">
            <div class=\"card shadow-sm border-0 rounded-4 h-100\">
                <div class=\"card-header bg-gradient-primary text-white py-2 py-md-3\">
                    <h5 class=\"card-title mb-0 fs-6 fs-md-5\">
                        <i class=\"fas fa-hamburger me-2\"></i>Informations du plat
                    </h5>
                </div>
                <div class=\"card-body p-2 p-md-4\">
                    {% if recipe.image %}
                        <img src=\"{{ asset('uploads/images_plats/' ~ recipe.image) }}\" alt=\"{{ recipe.name }}\" class=\"img-fluid rounded mb-3\" style=\"max-height: 150px; width: 100%; object-fit: cover;\">
                    {% else %}
                        <div class=\"bg-gradient-light rounded d-flex align-items-center justify-content-center mb-3\" style=\"height: 120px;\">
                            <i class=\"fas fa-utensil-spoon fa-3x text-muted\"></i>
                        </div>
                    {% endif %}
                    
                    <div class=\"info-card p-2 p-md-3 bg-light rounded-3 mb-2 mb-md-3\">
                        <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                            <i class=\"fas fa-tag text-primary me-1 me-md-2\" style=\"font-size:0.8rem;\"></i>
                            <small class=\"text-muted text-uppercase\" style=\"font-size:0.55rem;\">Nom</small>
                        </div>
                        <p class=\"fw-bold fs-6 fs-md-4 mb-0\">{{ recipe.name }}</p>
                    </div>
                    
                    <div class=\"info-card p-2 p-md-3 bg-light rounded-3 mb-2 mb-md-3\">
                        <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                            <i class=\"fas fa-align-left text-primary me-1 me-md-2\" style=\"font-size:0.8rem;\"></i>
                            <small class=\"text-muted text-uppercase\" style=\"font-size:0.55rem;\">Description</small>
                        </div>
                        <p class=\"mb-0 small\" style=\"font-size:0.75rem;\">{{ recipe.description|default('Aucune description')|nl2br }}</p>
                    </div>
                    
                    <div class=\"row g-2 g-md-3\">
                        <div class=\"col-6\">
                            <div class=\"info-card p-2 p-md-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                                    <i class=\"fas fa-folder-tree text-primary me-1 me-md-2\" style=\"font-size:0.8rem;\"></i>
                                    <small class=\"text-muted text-uppercase\" style=\"font-size:0.55rem;\">Catégorie</small>
                                </div>
                                <p class=\"fw-semibold fs-6 fs-md-5 mb-0\">{{ recipe.category ? recipe.category.name : '-' }}</p>
                            </div>
                        </div>
                        <div class=\"col-6\">
                            <div class=\"info-card p-2 p-md-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                                    <i class=\"fas fa-utensil-spoon text-primary me-1 me-md-2\" style=\"font-size:0.8rem;\"></i>
                                    <small class=\"text-muted text-uppercase\" style=\"font-size:0.55rem;\">Instructions</small>
                                </div>
                                <p class=\"mb-0 small\" style=\"font-size:0.75rem;\">{{ recipe.instructions|default('Aucune instruction')|nl2br }}</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"row g-2 g-md-3 mt-2 mt-md-3\">
                        <div class=\"col-6\">
                            <div class=\"info-card p-2 p-md-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                                    <i class=\"fas fa-arrow-up text-success me-1 me-md-2\" style=\"font-size:0.8rem;\"></i>
                                    <small class=\"text-muted text-uppercase\" style=\"font-size:0.55rem;\">Prix de vente</small>
                                </div>
                                <p class=\"fw-bold fs-5 fs-md-2 text-success mb-0\">{{ recipe.sellingPrice|price_with_currency(app.user.hmaService) }}</p>
                            </div>
                        </div>
                        <div class=\"col-6\">
                            <div class=\"info-card p-2 p-md-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                                    <i class=\"fas fa-chart-line text-primary me-1 me-md-2\" style=\"font-size:0.8rem;\"></i>
                                    <small class=\"text-muted text-uppercase\" style=\"font-size:0.55rem;\">Marge estimée</small>
                                </div>
                                <p class=\"fw-bold fs-6 fs-md-5 mb-0\">
                                    {% set estimatedMargin = (recipe.sellingPrice - (recipe.sellingPrice * 0.6))|number_format(0) %}
                                    {{ estimatedMargin|price_with_currency(app.user.hmaService) }}
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"mt-2 mt-md-3 pt-2 pt-md-3 border-top\">
                        <div class=\"d-flex flex-column flex-sm-row align-items-start align-items-sm-center gap-2\">
                            <div class=\"flex-shrink-0\">
                                <span class=\"badge {{ recipe.isActive ? 'bg-success' : 'bg-secondary' }} px-2 py-1 px-md-3 py-md-2\" style=\"font-size:0.6rem;\">
                                    <i class=\"fas {{ recipe.isActive ? 'fa-check-circle' : 'fa-ban' }} me-1\"></i>
                                    {{ recipe.isActive ? 'ACTIF' : 'INACTIF' }}
                                </span>
                            </div>
                            <div class=\"flex-grow-1\">
                                <small class=\"text-muted\" style=\"font-size:0.6rem;\">Créé par</small>
                                <p class=\"fw-bold mb-0 small\">{{ recipe.user.fullName }}</p>
                                <small class=\"text-muted\" style=\"font-size:0.55rem;\">{{ recipe.user.email }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==========================================
         SECTION RÉCAPITULATIVE
    ========================================== -->
    <div class=\"card shadow-sm border-0 rounded-4 mt-3 mt-md-4 bg-info bg-opacity-10\">
        <div class=\"card-body p-2 p-md-4\">
            <div class=\"d-flex flex-column flex-sm-row align-items-start align-items-sm-center gap-2 gap-md-3\">
                <div class=\"flex-shrink-0\">
                    <div class=\"rounded-circle bg-white p-2 p-md-3 d-flex align-items-center justify-content-center shadow-sm\" style=\"width: 40px; height: 40px;\">
                        <i class=\"fas fa-info-circle fa-1x text-info\"></i>
                    </div>
                </div>
                <div class=\"flex-grow-1\">
                    <h6 class=\"mb-1 fw-bold fs-6 fs-md-5\">Comment s'applique cette promotion ?</h6>
                    <p class=\"mb-0 small\">
                        <i class=\"fas fa-check-circle text-success me-1\"></i>
                        Cette promotion s'applique <strong class=\"text-primary\">uniquement au plat</strong> <strong>{{ recipe.name|slice(0, 25) }}{% if recipe.name|length > 25 %}...{% endif %}</strong>.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- ==========================================
         MODAL DE SUPPRESSION
    ========================================== -->
    <div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\">
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
                    <h6 class=\"fs-6\">Supprimer cette association ?</h6>
                    <p class=\"text-muted small\">La promotion <strong>{{ promotion.name|slice(0, 25) }}</strong> ne sera plus appliquée au plat <strong>{{ recipe.name|slice(0, 25) }}</strong>.</p>
                </div>
                <div class=\"modal-footer border-0 py-2\">
                    <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-bs-dismiss=\"modal\">Annuler</button>
                    <form method=\"post\" action=\"{{ path('app_restaurant_promotion_recipe_delete', {id: promotionRecipe.id}) }}\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete-recipe' ~ promotionRecipe.id) }}\">
                        <button type=\"submit\" class=\"btn btn-danger btn-sm\">Supprimer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "admin/restaurant/promotion/recipe/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\restaurant\\promotion\\recipe\\show.html.twig");
    }
}
