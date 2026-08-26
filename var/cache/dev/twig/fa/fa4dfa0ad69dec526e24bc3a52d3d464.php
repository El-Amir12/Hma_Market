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

/* admin/recipe/index.html.twig */
class __TwigTemplate_1d1575d383900f51b403ab33be75343b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/recipe/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/recipe/index.html.twig"));

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

        yield "Menu ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["companyName"]) || array_key_exists("companyName", $context) ? $context["companyName"] : (function () { throw new RuntimeError('Variable "companyName" does not exist.', 4, $this->source); })()), "html", null, true);
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
/* ========================================
   CARTES PLATS
======================================== */
.hover-card {
    transition: transform 0.2s ease, box-shadow 0.2s ease;
    border-radius: 15px;
    overflow: hidden;
}
.hover-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.08) !important;
}
.recipe-image-container {
    position: relative;
    height: 130px;
    overflow: hidden;
    border-radius: 15px 15px 0 0;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    display: flex;
    align-items: center;
    justify-content: center;
}
@media (min-width: 768px) {
    .recipe-image-container {
        height: 160px;
    }
}
.recipe-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.recipe-image-placeholder {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
    width: 100%;
}
.recipe-image-placeholder i {
    font-size: 3rem;
}
@media (min-width: 768px) {
    .recipe-image-placeholder i {
        font-size: 4rem;
    }
}

.stat-item {
    transition: background-color 0.2s;
}
.stat-item:hover {
    background-color: #e9ecef !important;
}
.badge {
    font-weight: 500;
    letter-spacing: 0.3px;
    font-size: 0.6rem;
    padding: 0.2rem 0.4rem;
}
@media (min-width: 768px) {
    .badge {
        font-size: 0.75rem;
        padding: 0.25rem 0.6rem;
    }
}

/* ========================================
   SELECT2
======================================== */
.select2-container--bootstrap-5 .select2-selection {
    height: 38px !important;
    padding: 0 !important;
}
.select2-container--bootstrap-5 .select2-selection--single {
    height: 38px !important;
    border-radius: 8px !important;
    background-color: #f8f9fa !important;
    border-color: #e9ecef !important;
    display: flex !important;
    align-items: center !important;
}
.select2-container--bootstrap-5 .select2-selection--single .select2-selection__rendered {
    line-height: normal !important;
    padding: 8px 12px !important;
    color: #212529 !important;
    display: block !important;
}
.select2-container--bootstrap-5 .select2-selection--single .select2-selection__arrow {
    height: 36px !important;
    position: absolute !important;
    top: 1px !important;
    right: 5px !important;
}
.form-select.bg-light.border-0 {
    height: 38px;
    padding: 8px 12px;
}
.select2-container--bootstrap-5 .select2-search--dropdown .select2-search__field {
    padding: 8px 12px !important;
    border-radius: 6px !important;
    border-color: #e9ecef !important;
}
.select2-container--bootstrap-5 .select2-results__option {
    padding: 8px 12px !important;
}
.select2-container--bootstrap-5 .select2-dropdown {
    border-color: #e9ecef !important;
    border-radius: 8px !important;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1) !important;
}
.select2-container--bootstrap-5 .select2-results__option--selected {
    background-color: #0463f1 !important;
    color: white !important;
}
.select2-container--bootstrap-5 .select2-results__option--highlighted {
    background-color: #e9ecef !important;
    color: #0463f1 !important;
}

/* ========================================
   RESPONSIVE
======================================== */
@media (max-width: 992px) {
    .container-fluid {
        padding-left: 0.75rem !important;
        padding-right: 0.75rem !important;
    }
    
    .d-flex.justify-content-between.align-items-center {
        flex-direction: column;
        align-items: flex-start !important;
        gap: 0.75rem !important;
        width: 100%;
    }
    
    .d-flex.justify-content-between.align-items-center .d-flex.align-items-center.gap-3 {
        flex-wrap: wrap;
        width: 100%;
    }
    
    .d-flex.justify-content-between.align-items-center .d-flex.align-items-center.gap-3 .card {
        flex: 1 1 auto;
        min-width: 150px;
    }
    
    .stat-item .h3 {
        font-size: 1.5rem !important;
    }
}

@media (max-width: 768px) {
    .container-fluid {
        padding-left: 0.5rem !important;
        padding-right: 0.5rem !important;
    }
    
    .d-flex.justify-content-between.align-items-center {
        flex-direction: column;
        align-items: flex-start !important;
        gap: 0.5rem !important;
        width: 100%;
    }
    
    .d-flex.justify-content-between.align-items-center > div:first-child {
        width: 100%;
    }
    
    .d-flex.justify-content-between.align-items-center .d-flex.align-items-center.gap-3 {
        flex-direction: column;
        width: 100%;
    }
    
    .d-flex.justify-content-between.align-items-center .d-flex.align-items-center.gap-3 .card {
        width: 100%;
        min-width: unset;
    }
    
    .d-flex.justify-content-between.align-items-center .d-flex.align-items-center.gap-3 .btn {
        width: 100%;
    }
    
    h1.h3 {
        font-size: 1.1rem !important;
    }
    
    /* Filtres : tous les champs en colonne sur mobile */
    .row.g-3 .col-lg-4,
    .row.g-3 .col-md-6 {
        flex: 0 0 100%;
        max-width: 100%;
        margin-bottom: 0.5rem;
    }
    
    /* FORCER 2 CARTES PAR LIGNE SUR MOBILE */
    .row.g-4 .col-xl-3.col-lg-4.col-md-6 {
        flex: 0 0 50%;
        max-width: 50%;
        padding-left: 0.25rem;
        padding-right: 0.25rem;
        margin-bottom: 0.5rem;
    }
    
    .card .card-title {
        font-size: 0.85rem;
    }
    
    .card .card-body {
        padding: 0.5rem !important;
    }
    
    .card .btn-sm {
        font-size: 0.55rem;
        padding: 0.15rem 0.2rem;
    }
    
    .card .btn-sm i {
        font-size: 0.6rem;
    }
    
    .recipe-image-container {
        height: 100px;
    }
    
    .recipe-image-placeholder i {
        font-size: 2rem;
    }
    
    .dropdown-menu {
        font-size: 0.8rem;
    }
    
    .dropdown-item {
        padding: 0.2rem 0.5rem;
        font-size: 0.75rem;
    }
    
    .card-header .d-flex.gap-2 {
        flex-wrap: wrap;
        width: 100%;
    }
    .card-header .d-flex.gap-2 .btn {
        flex: 1 1 auto;
        min-width: calc(33% - 0.25rem);
    }
    
    .badge {
        font-size: 0.5rem;
        padding: 0.1rem 0.3rem;
    }
    
    .text-muted.small {
        font-size: 0.6rem !important;
    }
    
    .d-flex.gap-1.mt-auto .btn {
        flex: 1 1 auto;
        font-size: 0.5rem;
        padding: 0.1rem 0.15rem;
    }
    .d-flex.gap-1.mt-auto .btn i {
        font-size: 0.6rem;
    }
}

@media (max-width: 480px) {
    .container-fluid {
        padding-left: 0.25rem !important;
        padding-right: 0.25rem !important;
    }
    
    /* FORCER 2 CARTES PAR LIGNE SUR TRÈS PETIT ÉCRAN */
    .row.g-4 .col-xl-3.col-lg-4.col-md-6 {
        flex: 0 0 50%;
        max-width: 50%;
        padding-left: 0.15rem;
        padding-right: 0.15rem;
        margin-bottom: 0.35rem;
    }
    
    .recipe-image-container {
        height: 80px;
    }
    
    .recipe-image-placeholder i {
        font-size: 1.5rem;
    }
    
    .card .card-title {
        font-size: 0.7rem;
    }
    
    .card .card-body {
        padding: 0.3rem !important;
    }
    
    .card .btn-sm {
        font-size: 0.45rem;
        padding: 0.08rem 0.12rem;
    }
    
    .card .btn-sm i {
        font-size: 0.5rem;
    }
    
    .badge {
        font-size: 0.4rem;
        padding: 0.08rem 0.2rem;
    }
    
    .text-muted.small {
        font-size: 0.5rem !important;
    }
    
    .dropdown-menu {
        font-size: 0.7rem;
    }
    
    .dropdown-item {
        padding: 0.15rem 0.4rem;
        font-size: 0.65rem;
    }
    
    .pagination .page-link {
        font-size: 0.6rem;
        padding: 0.2rem 0.4rem;
    }
    
    .modal .btn-lg {
        font-size: 0.7rem;
        padding: 0.25rem 0.5rem;
    }
}

/* Désactiver hover sur mobile */
@media (max-width: 768px) {
    .hover-card:hover {
        transform: none !important;
    }
    .stat-item:hover {
        transform: none !important;
    }
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 357
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

        // line 358
        yield "<div class=\"container-fluid px-2 px-md-4 py-2 py-md-3\">
    <!-- ========== EN-TÊTE ========== -->
    <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center mb-3 mb-md-4 flex-wrap gap-2\">
        <div>
            <h1 class=\"h4 h-md-3 mb-0 text-gray-800 fw-bold\">
                <i class=\"fas fa-utensils me-2\"></i>Menu ";
        // line 363
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["companyName"]) || array_key_exists("companyName", $context) ? $context["companyName"] : (function () { throw new RuntimeError('Variable "companyName" does not exist.', 363, $this->source); })()), "html", null, true);
        yield "
            </h1>
            <p class=\"text-muted mt-1 small d-none d-sm-block\">Gérez vos plats et recettes</p>
        </div>
        
        <div class=\"d-flex align-items-center gap-2 gap-md-3 flex-wrap w-100 w-sm-auto\">
            <div class=\"card bg-light border-0 shadow-sm p-1 p-md-2 flex-grow-1 flex-md-grow-0\" style=\"min-width: 100px;\">
                <div class=\"d-flex align-items-center\">
                    <div class=\"me-1 me-md-2\">
                        <span class=\"badge bg-primary p-1 p-md-2 rounded-circle\">
                            <i class=\"fas fa-chart-line fa-fw\"></i>
                        </span>
                    </div>
                    <div>
                        <small class=\"text-muted d-block small\" style=\"font-size: 0.5rem;\">Plats quota</small>
                        <h6 class=\"mb-0 ";
        // line 378
        yield (((($tmp = (isset($context["quotaReached"]) || array_key_exists("quotaReached", $context) ? $context["quotaReached"] : (function () { throw new RuntimeError('Variable "quotaReached" does not exist.', 378, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-danger") : ("text-success"));
        yield " fw-bold\" style=\"font-size: 0.8rem;\">
                            ";
        // line 379
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activeCount"]) || array_key_exists("activeCount", $context) ? $context["activeCount"] : (function () { throw new RuntimeError('Variable "activeCount" does not exist.', 379, $this->source); })()), "html", null, true);
        yield " / ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["quota"]) || array_key_exists("quota", $context) ? $context["quota"] : (function () { throw new RuntimeError('Variable "quota" does not exist.', 379, $this->source); })()), "html", null, true);
        yield "
                            ";
        // line 380
        if (((isset($context["quota"]) || array_key_exists("quota", $context) ? $context["quota"] : (function () { throw new RuntimeError('Variable "quota" does not exist.', 380, $this->source); })()) == "Illimité")) {
            // line 381
            yield "                                <i class=\"fas fa-infinity text-info ms-1 small\"></i>
                            ";
        }
        // line 383
        yield "                        </h6>
                    </div>
                </div>
            </div>

            ";
        // line 388
        if (((isset($context["subscriptionInactiveFiltered"]) || array_key_exists("subscriptionInactiveFiltered", $context) ? $context["subscriptionInactiveFiltered"] : (function () { throw new RuntimeError('Variable "subscriptionInactiveFiltered" does not exist.', 388, $this->source); })()) > 0)) {
            // line 389
            yield "            <div class=\"card bg-light border-0 shadow-sm p-1 p-md-2 flex-grow-1 flex-md-grow-0\" style=\"min-width: 80px;\">
                <div class=\"d-flex align-items-center\">
                    <div class=\"me-1 me-md-2\">
                        <span class=\"badge bg-warning p-1 p-md-2 rounded-circle\">
                            <i class=\"fas fa-clock fa-fw\"></i>
                        </span>
                    </div>
                    <div>
                        <small class=\"text-muted d-block small\" style=\"font-size: 0.5rem;\">En attente</small>
                        <h6 class=\"mb-0 fw-bold\" style=\"font-size: 0.8rem;\">";
            // line 398
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subscriptionInactiveFiltered"]) || array_key_exists("subscriptionInactiveFiltered", $context) ? $context["subscriptionInactiveFiltered"] : (function () { throw new RuntimeError('Variable "subscriptionInactiveFiltered" does not exist.', 398, $this->source); })()), "html", null, true);
            yield "</h6>
                    </div>
                </div>
            </div>
            ";
        }
        // line 403
        yield "
            <a href=\"#\" id=\"newRecipeBtn\" class=\"btn btn-primary btn-sm shadow-sm flex-grow-1 flex-md-grow-0\">
                <i class=\"fas fa-plus-circle me-1 me-md-2\"></i> <span class=\"d-none d-sm-inline\">Nouveau Plat</span>
            </a>
        </div>
    </div>

    ";
        // line 411
        yield "    ";
        if ((($tmp = (isset($context["quotaReached"]) || array_key_exists("quotaReached", $context) ? $context["quotaReached"] : (function () { throw new RuntimeError('Variable "quotaReached" does not exist.', 411, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 412
            yield "    <div class=\"alert alert-warning alert-dismissible fade show shadow-sm\" role=\"alert\">
        <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-2\">
            <div class=\"small\">
                <i class=\"fas fa-exclamation-triangle me-2\"></i>
                <strong>Quota atteint !</strong> Vous avez utilisé vos ";
            // line 416
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["quota"]) || array_key_exists("quota", $context) ? $context["quota"] : (function () { throw new RuntimeError('Variable "quota" does not exist.', 416, $this->source); })()), "html", null, true);
            yield " plats actifs.
            </div>
            <a href=\"";
            // line 418
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subscription_plans");
            yield "\" class=\"btn btn-warning btn-sm w-100 w-sm-auto\">
                <i class=\"fas fa-arrow-up me-1\"></i> Voir les offres
            </a>
        </div>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    </div>
    ";
        }
        // line 425
        yield "
    ";
        // line 427
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 427, $this->source); })()), "flashes", ["success"], "method", false, false, false, 427));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 428
            yield "        <div class=\"alert alert-success alert-dismissible fade show shadow-sm\" role=\"alert\">
            <i class=\"fas fa-check-circle me-2\"></i> ";
            // line 429
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 433
        yield "    
    ";
        // line 434
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 434, $this->source); })()), "flashes", ["error"], "method", false, false, false, 434));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 435
            yield "        <div class=\"alert alert-danger alert-dismissible fade show shadow-sm\" role=\"alert\">
            <i class=\"fas fa-exclamation-circle me-2\"></i> ";
            // line 436
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 440
        yield "
    <!-- ========== STATISTIQUES ========== -->
    <div class=\"card shadow-sm border-0 mb-3 mb-md-4\">
        <div class=\"card-header bg-white py-2 py-md-3\">
            <h5 class=\"mb-0 fw-semibold fs-6 fs-md-5\">
                <i class=\"fas fa-chart-pie text-primary me-2\"></i>Statistiques selon les filtres
            </h5>
        </div>
        <div class=\"card-body p-2 p-md-3\">
            <!-- ✅ LIGNE 1 : 4 cartes en 2x2 sur mobile -->
            <div class=\"row g-2 g-md-3 mb-2 mb-md-3\">
                <div class=\"col-6 col-md-3\">
                    <div class=\"stat-item p-2 p-md-3 bg-light rounded-3 h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted text-uppercase small fw-bold\">Filtrés</span>
                                <h3 class=\"mb-0 fw-bold fs-4 fs-md-3\">";
        // line 456
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalFiltered"]) || array_key_exists("totalFiltered", $context) ? $context["totalFiltered"] : (function () { throw new RuntimeError('Variable "totalFiltered" does not exist.', 456, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <div class=\"bg-primary p-1 p-md-2 rounded-3\">
                                <i class=\"fas fa-utensils text-white fs-5 fs-md-3\"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-6 col-md-3\">
                    <div class=\"stat-item p-2 p-md-3 bg-light rounded-3 h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted text-uppercase small fw-bold\">Actifs</span>
                                <h3 class=\"mb-0 fw-bold text-success fs-4 fs-md-3\">";
        // line 469
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activeFiltered"]) || array_key_exists("activeFiltered", $context) ? $context["activeFiltered"] : (function () { throw new RuntimeError('Variable "activeFiltered" does not exist.', 469, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <div class=\"bg-success p-1 p-md-2 rounded-3\">
                                <i class=\"fas fa-check-circle text-white fs-5 fs-md-3\"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-6 col-md-3\">
                    <div class=\"stat-item p-2 p-md-3 bg-light rounded-3 h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted text-uppercase small fw-bold\">Inactifs</span>
                                <h3 class=\"mb-0 fw-bold text-danger fs-4 fs-md-3\">";
        // line 482
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["inactiveFiltered"]) || array_key_exists("inactiveFiltered", $context) ? $context["inactiveFiltered"] : (function () { throw new RuntimeError('Variable "inactiveFiltered" does not exist.', 482, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <div class=\"bg-danger p-1 p-md-2 rounded-3\">
                                <i class=\"fas fa-pause-circle text-white fs-5 fs-md-3\"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-6 col-md-3\">
                    <div class=\"stat-item p-2 p-md-3 bg-light rounded-3 h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted text-uppercase small fw-bold\">Abonnement actif</span>
                                <h3 class=\"mb-0 fw-bold text-info fs-4 fs-md-3\">";
        // line 495
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subscriptionActiveFiltered"]) || array_key_exists("subscriptionActiveFiltered", $context) ? $context["subscriptionActiveFiltered"] : (function () { throw new RuntimeError('Variable "subscriptionActiveFiltered" does not exist.', 495, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <div class=\"bg-info p-1 p-md-2 rounded-3\">
                                <i class=\"fas fa-database text-white fs-5 fs-md-3\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- ✅ LIGNE 2 : Abonnement inactif - PLEINE LARGEUR SUR MOBILE -->
            <div class=\"row g-2 g-md-3\">
                <div class=\"col-12\">
                    <div class=\"stat-item p-2 p-md-3 bg-light rounded-3 h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted text-uppercase small fw-bold\">Abonnement inactif</span>
                                <h3 class=\"mb-0 fw-bold text-secondary fs-4 fs-md-3\">";
        // line 512
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subscriptionInactiveFiltered"]) || array_key_exists("subscriptionInactiveFiltered", $context) ? $context["subscriptionInactiveFiltered"] : (function () { throw new RuntimeError('Variable "subscriptionInactiveFiltered" does not exist.', 512, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <div class=\"bg-secondary p-1 p-md-2 rounded-3\">
                                <i class=\"fas fa-clock text-white fs-5 fs-md-3\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ========== FILTRES ========== -->
    <div class=\"card shadow-sm border-0 mb-3 mb-md-4\">
        <div class=\"card-header bg-white py-2 py-md-3 d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <h5 class=\"mb-0 fw-semibold fs-6 fs-md-5\">
                <i class=\"fas fa-filter text-primary me-2\"></i>Filtres
            </h5>
            <div class=\"d-flex gap-1 gap-md-2\">
                <button type=\"submit\" form=\"filter-form\" class=\"btn btn-primary btn-sm\">
                    <i class=\"fas fa-filter me-1\"></i> <span class=\"d-none d-sm-inline\">Filtrer</span>
                </button>
                <a href=\"";
        // line 534
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_index");
        yield "\" class=\"btn btn-outline-secondary btn-sm\">
                    <i class=\"fas fa-undo me-1\"></i> <span class=\"d-none d-sm-inline\">Effacer</span>
                </a>
            </div>
        </div>
        <div class=\"card-body p-2 p-md-3\">
            <form method=\"get\" id=\"filter-form\">
                <!-- Première ligne : 3 éléments -->
                <div class=\"row g-2 g-md-3 mb-2 mb-md-3\">
                    <div class=\"col-12 col-sm-6 col-lg-4\">
                        <label for=\"search\" class=\"form-label fw-semibold small\">
                            <i class=\"fas fa-search text-primary me-1\"></i>Rechercher
                        </label>
                        <div class=\"input-group\">
                            <span class=\"input-group-text bg-light border-0\">
                                <i class=\"fas fa-search text-muted small\"></i>
                            </span>
                            <input type=\"text\" name=\"search\" id=\"search\" value=\"";
        // line 551
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 551, $this->source); })()), "html", null, true);
        yield "\" 
                                   class=\"form-control bg-light border-0 form-control-sm\" placeholder=\"Nom du plat...\">
                        </div>
                    </div>
                    <div class=\"col-12 col-sm-6 col-lg-4\">
                        <label for=\"category\" class=\"form-label fw-semibold small\">
                            <i class=\"fas fa-tags text-info me-1\"></i>Catégorie
                        </label>
                        <select name=\"category\" id=\"category\" class=\"form-select form-select-sm\" style=\"width: 100%;\">
                            <option value=\"0\">📁 Toutes les catégories</option>
                            ";
        // line 561
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 561, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 562
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 562), "html", null, true);
            yield "\" ";
            yield ((((isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 562, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 562))) ? ("selected") : (""));
            yield ">
                                    ";
            // line 563
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "level", [], "any", false, false, false, 563) == 0)) {
                // line 564
                yield "                                        📁 ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 564), "html", null, true);
                yield "
                                    ";
            } else {
                // line 566
                yield "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, $context["category"], "level", [], "any", false, false, false, 566)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    yield "&nbsp;&nbsp;&nbsp;";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                yield "↳ ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 566), "html", null, true);
                yield "
                                    ";
            }
            // line 568
            yield "                                    <span class=\"text-muted\">(";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "recipeCount", [], "any", false, false, false, 568), "html", null, true);
            yield ")</span>
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 571
        yield "                        </select>
                    </div>
                    <div class=\"col-12 col-sm-6 col-lg-4\">
                        <label for=\"type\" class=\"form-label fw-semibold small\">
                            <i class=\"fas fa-tag text-primary me-1\"></i>Type de plat
                        </label>
                        <select name=\"type\" id=\"type\" class=\"form-select form-select-sm bg-light border-0\">
                            <option value=\"\">Tous les types</option>
                            <option value=\"food\" ";
        // line 579
        yield ((((isset($context["selectedType"]) || array_key_exists("selectedType", $context) ? $context["selectedType"] : (function () { throw new RuntimeError('Variable "selectedType" does not exist.', 579, $this->source); })()) == "food")) ? ("selected") : (""));
        yield ">🍽️ Plat principal</option>
                            <option value=\"starter\" ";
        // line 580
        yield ((((isset($context["selectedType"]) || array_key_exists("selectedType", $context) ? $context["selectedType"] : (function () { throw new RuntimeError('Variable "selectedType" does not exist.', 580, $this->source); })()) == "starter")) ? ("selected") : (""));
        yield ">🥗 Entrée</option>
                            <option value=\"dessert\" ";
        // line 581
        yield ((((isset($context["selectedType"]) || array_key_exists("selectedType", $context) ? $context["selectedType"] : (function () { throw new RuntimeError('Variable "selectedType" does not exist.', 581, $this->source); })()) == "dessert")) ? ("selected") : (""));
        yield ">🍰 Dessert</option>
                            <option value=\"drink\" ";
        // line 582
        yield ((((isset($context["selectedType"]) || array_key_exists("selectedType", $context) ? $context["selectedType"] : (function () { throw new RuntimeError('Variable "selectedType" does not exist.', 582, $this->source); })()) == "drink")) ? ("selected") : (""));
        yield ">🥤 Boisson</option>
                            <option value=\"side\" ";
        // line 583
        yield ((((isset($context["selectedType"]) || array_key_exists("selectedType", $context) ? $context["selectedType"] : (function () { throw new RuntimeError('Variable "selectedType" does not exist.', 583, $this->source); })()) == "side")) ? ("selected") : (""));
        yield ">🍟 Accompagnement</option>
                        </select>
                    </div>
                </div>
                <!-- Deuxième ligne : 3 éléments -->
                <div class=\"row g-2 g-md-3\">
                    <div class=\"col-12 col-sm-6 col-lg-4\">
                        <label for=\"status\" class=\"form-label fw-semibold small\">
                            <i class=\"fas fa-toggle-on text-success me-1\"></i>Statut
                        </label>
                        <select name=\"status\" id=\"status\" class=\"form-select form-select-sm bg-light border-0\">
                            <option value=\"\">Tous</option>
                            <option value=\"active\" ";
        // line 595
        yield ((((isset($context["selectedStatus"]) || array_key_exists("selectedStatus", $context) ? $context["selectedStatus"] : (function () { throw new RuntimeError('Variable "selectedStatus" does not exist.', 595, $this->source); })()) == "active")) ? ("selected") : (""));
        yield ">✅ Actifs</option>
                            <option value=\"inactive\" ";
        // line 596
        yield ((((isset($context["selectedStatus"]) || array_key_exists("selectedStatus", $context) ? $context["selectedStatus"] : (function () { throw new RuntimeError('Variable "selectedStatus" does not exist.', 596, $this->source); })()) == "inactive")) ? ("selected") : (""));
        yield ">⛔ Inactifs</option>
                        </select>
                    </div>
                    <div class=\"col-12 col-sm-6 col-lg-4\">
                        <label for=\"subscription_status\" class=\"form-label fw-semibold small\">
                            <i class=\"fas fa-credit-card text-warning me-1\"></i>Abonnement
                        </label>
                        <select name=\"subscription_status\" id=\"subscription_status\" class=\"form-select form-select-sm bg-light border-0\">
                            <option value=\"\">Tous</option>
                            <option value=\"active\" ";
        // line 605
        yield ((((isset($context["selectedSubscriptionStatus"]) || array_key_exists("selectedSubscriptionStatus", $context) ? $context["selectedSubscriptionStatus"] : (function () { throw new RuntimeError('Variable "selectedSubscriptionStatus" does not exist.', 605, $this->source); })()) == "active")) ? ("selected") : (""));
        yield ">✅ Dans le quota</option>
                            <option value=\"inactive\" ";
        // line 606
        yield ((((isset($context["selectedSubscriptionStatus"]) || array_key_exists("selectedSubscriptionStatus", $context) ? $context["selectedSubscriptionStatus"] : (function () { throw new RuntimeError('Variable "selectedSubscriptionStatus" does not exist.', 606, $this->source); })()) == "inactive")) ? ("selected") : (""));
        yield ">⏳ Hors quota</option>
                        </select>
                    </div>
                    <div class=\"col-12 col-sm-6 col-lg-4\">
                        <label for=\"promotion\" class=\"form-label fw-semibold small\">
                            <i class=\"fas fa-tags text-danger me-1\"></i>Promotion
                        </label>
                        <select name=\"promotion\" id=\"promotion\" class=\"form-select form-select-sm\" style=\"width: 100%;\">
                            <option value=\"0\">🎯 Toutes les promotions</option>
                            ";
        // line 615
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 615, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
            // line 616
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 616), "html", null, true);
            yield "\" ";
            yield ((((isset($context["selectedPromotion"]) || array_key_exists("selectedPromotion", $context) ? $context["selectedPromotion"] : (function () { throw new RuntimeError('Variable "selectedPromotion" does not exist.', 616, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 616))) ? ("selected") : (""));
            yield ">
                                    ";
            // line 617
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "name", [], "any", false, false, false, 617), "html", null, true);
            yield "
                                    ";
            // line 618
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "discountPercentage", [], "any", false, false, false, 618)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 619
                yield "                                        (-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "discountPercentage", [], "any", false, false, false, 619), "html", null, true);
                yield "%)
                                    ";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 620
$context["promotion"], "discountAmount", [], "any", false, false, false, 620)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 621
                yield "                                        (-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "discountAmount", [], "any", false, false, false, 621), 0, ",", " "), "html", null, true);
                yield " FCFA)
                                    ";
            }
            // line 623
            yield "                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['promotion'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 625
        yield "                        </select>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- ========== GRILLE DE PLATS ========== -->
    <div class=\"row g-2 g-md-4\">
        ";
        // line 634
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recipes"]) || array_key_exists("recipes", $context) ? $context["recipes"] : (function () { throw new RuntimeError('Variable "recipes" does not exist.', 634, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["recipe"]) {
            // line 635
            yield "        <div class=\"col-6 col-md-4 col-lg-3 col-xl-3\">
            <div class=\"card h-100 border-0 shadow-sm hover-card\">
                <div class=\"recipe-image-container position-relative\">
                    ";
            // line 638
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "image", [], "any", false, false, false, 638)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 639
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images_plats/" . CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "image", [], "any", false, false, false, 639))), "html", null, true);
                yield "\" 
                             alt=\"";
                // line 640
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "name", [], "any", false, false, false, 640), "html", null, true);
                yield "\" 
                             class=\"card-img-top recipe-image\">
                    ";
            } else {
                // line 643
                yield "                        <div class=\"recipe-image-placeholder\">
                            <i class=\"fas fa-utensils text-muted\"></i>
                        </div>
                    ";
            }
            // line 647
            yield "
                    <!-- Badge Actif/Inactif à GAUCHE -->
                    <div class=\"position-absolute top-0 start-0 p-1 p-md-2\">
                        ";
            // line 650
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "isActive", [], "any", false, false, false, 650)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 651
                yield "                            <span class=\"badge bg-success\">
                                <i class=\"fas fa-check-circle me-1\"></i> <span class=\"d-none d-sm-inline\">Actif</span>
                            </span>
                        ";
            } else {
                // line 655
                yield "                            <span class=\"badge bg-danger\">
                                <i class=\"fas fa-pause-circle me-1\"></i> <span class=\"d-none d-sm-inline\">Inactif</span>
                            </span>
                        ";
            }
            // line 659
            yield "                    </div>
                    
                    <!-- Badge Type de plat à DROITE -->
                    <div class=\"position-absolute top-0 end-0 p-1 p-md-2\">
                        <span class=\"badge bg-primary\">
                            ";
            // line 664
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "type", [], "any", false, false, false, 664) == "food")) {
                // line 665
                yield "                                🍽️ <span class=\"d-none d-sm-inline\">Plat</span>
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 666
$context["recipe"], "type", [], "any", false, false, false, 666) == "starter")) {
                // line 667
                yield "                                🥗 <span class=\"d-none d-sm-inline\">Entrée</span>
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 668
$context["recipe"], "type", [], "any", false, false, false, 668) == "dessert")) {
                // line 669
                yield "                                🍰 <span class=\"d-none d-sm-inline\">Dessert</span>
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 670
$context["recipe"], "type", [], "any", false, false, false, 670) == "drink")) {
                // line 671
                yield "                                🥤 <span class=\"d-none d-sm-inline\">Boisson</span>
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 672
$context["recipe"], "type", [], "any", false, false, false, 672) == "side")) {
                // line 673
                yield "                                🍟 <span class=\"d-none d-sm-inline\">Accomp.</span>
                            ";
            } else {
                // line 675
                yield "                                📋 <span class=\"d-none d-sm-inline\">Plat</span>
                            ";
            }
            // line 677
            yield "                        </span>
                    </div>
                </div>
                <div class=\"card-body d-flex flex-column p-2 p-md-3\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h5 class=\"card-title fw-bold text-truncate mb-1 fs-6 fs-md-5\">";
            // line 683
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "name", [], "any", false, false, false, 683), "html", null, true);
            yield "</h5>
                            <p class=\"text-muted small mb-2\">
                                <i class=\"fas fa-tag me-1\"></i>";
            // line 685
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "category", [], "any", false, false, false, 685)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "category", [], "any", false, false, false, 685), "name", [], "any", false, false, false, 685)), "truncate", [12], "method", false, false, false, 685), "html", null, true)) : ("Non catégorisé"));
            yield "
                            </p>
                        </div>
                        <div class=\"dropdown ms-1 flex-shrink-0\">
                            <button class=\"btn btn-sm btn-light p-1\" type=\"button\" data-bs-toggle=\"dropdown\">
                                <i class=\"fas fa-bars\"></i>
                            </button>
                            <ul class=\"dropdown-menu dropdown-menu-end\">
                                <li>
                                    <a class=\"dropdown-item small\" href=\"";
            // line 694
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 694)]), "html", null, true);
            yield "\">
                                        <i class=\"fas fa-eye me-2\"></i> Voir
                                    </a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item small\" href=\"";
            // line 699
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 699)]), "html", null, true);
            yield "\">
                                        <i class=\"fas fa-edit me-2\"></i> Modifier
                                    </a>
                                </li>
                                <li>
                                    ";
            // line 704
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "subscriptionActive", [], "any", false, false, false, 704)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 705
                yield "                                        <button type=\"button\" 
                                                class=\"dropdown-item small toggle-recipe-btn\"
                                                data-recipe-id=\"";
                // line 707
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 707), "html", null, true);
                yield "\"
                                                data-recipe-name=\"";
                // line 708
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "name", [], "any", false, false, false, 708), "html", null, true);
                yield "\"
                                                data-current-status=\"";
                // line 709
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "isActive", [], "any", false, false, false, 709)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : ("inactive"));
                yield "\"
                                                data-token=\"";
                // line 710
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle-status" . CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 710))), "html", null, true);
                yield "\">
                                            <i class=\"fas ";
                // line 711
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "isActive", [], "any", false, false, false, 711)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-toggle-on") : ("fa-toggle-off"));
                yield " me-2\"></i>
                                            ";
                // line 712
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "isActive", [], "any", false, false, false, 712)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
                yield "
                                        </button>
                                    ";
            } else {
                // line 715
                yield "                                        <span class=\"dropdown-item text-muted disabled small\">
                                            <i class=\"fas fa-ban me-2\"></i> Non disponible
                                        </span>
                                    ";
            }
            // line 719
            yield "                                </li>
                                <li><hr class=\"dropdown-divider\"></li>
                                ";
            // line 721
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "orderItems", [], "any", false, false, false, 721)) == 0))) {
                // line 722
                yield "                                    <li>
                                        <button type=\"button\" 
                                                class=\"dropdown-item text-danger small delete-recipe-btn\"
                                                data-recipe-id=\"";
                // line 725
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 725), "html", null, true);
                yield "\"
                                                data-recipe-name=\"";
                // line 726
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "name", [], "any", false, false, false, 726), "html", null, true);
                yield "\"
                                                data-token=\"";
                // line 727
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 727))), "html", null, true);
                yield "\">
                                            <i class=\"fas fa-trash me-2\"></i> Supprimer
                                        </button>
                                    </li>
                                ";
            }
            // line 732
            yield "                            </ul>
                        </div>
                    </div>

                    <div class=\"d-flex flex-wrap justify-content-between align-items-center mb-2 mb-md-3 gap-1\">
                        <span class=\"fw-bold text-success small\">";
            // line 737
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "sellingPrice", [], "any", false, false, false, 737), CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "hmaService", [], "any", false, false, false, 737)), "html", null, true);
            yield "</span>
                        <span class=\"badge bg-info\">";
            // line 738
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "recipeItems", [], "any", false, false, false, 738)), "html", null, true);
            yield " ingrédients</span>
                    </div>

                    <div class=\"d-flex gap-1 mt-auto\">
                        <a href=\"";
            // line 742
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 742)]), "html", null, true);
            yield "#ingredients\" class=\"btn btn-sm btn-outline-info flex-fill\" title=\"Ingrédients\">
                            <i class=\"fas fa-list\"></i> 
                        </a>
                        <a href=\"#\" class=\"btn btn-sm btn-outline-primary flex-fill\" title=\"Mouvements stock\">
                            <i class=\"fas fa-exchange-alt\"></i> 
                        </a>
                        <a href=\"#\" class=\"btn btn-sm btn-outline-success flex-fill\" title=\"Commandes liées\">
                            <i class=\"fas fa-shopping-cart\"></i>
                        </a>
                        ";
            // line 751
            if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 751, $this->source); })()) == "restaurant")) {
                // line 752
                yield "                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_recipe_promotions", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 752)]), "html", null, true);
                yield "\" 
                            class=\"btn btn-sm btn-outline-warning flex-fill\" title=\"Promotions\">
                                <i class=\"fas fa-percent\"></i> 
                            </a>
                        ";
            }
            // line 757
            yield "                    </div>
                </div>
            </div>
        </div>
        ";
            $context['_iterated'] = true;
        }
        // line 761
        if (!$context['_iterated']) {
            // line 762
            yield "        <div class=\"col-12\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-body text-center py-4 py-md-5\">
                    <i class=\"fas fa-utensils fa-3x fa-md-4 text-muted mb-3\"></i>
                    <h4 class=\"text-muted fw-light fs-5 fs-md-4\">Aucun plat trouvé</h4>
                    <p class=\"text-muted mb-3 mb-md-4 small\">Modifiez vos filtres ou créez un nouveau plat.</p>
                    <a href=\"";
            // line 768
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_index");
            yield "\" class=\"btn btn-outline-primary btn-sm\">
                        <i class=\"fas fa-undo me-2\"></i> Réinitialiser
                    </a>
                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['recipe'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 775
        yield "    </div>

    <!-- ========== PAGINATION ========== -->
    ";
        // line 778
        if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 778, $this->source); })()) > 1)) {
            // line 779
            yield "    <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-center mt-3 mt-md-4 gap-2\">
        <div class=\"text-muted small\">
            Page ";
            // line 781
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 781, $this->source); })()), "html", null, true);
            yield " sur ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 781, $this->source); })()), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 781, $this->source); })()), "html", null, true);
            yield " résultats)
        </div>
        <nav aria-label=\"Pagination\">
            <ul class=\"pagination pagination-sm mb-0\">
                <li class=\"page-item ";
            // line 785
            yield ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 785, $this->source); })()) <= 1)) ? ("disabled") : (""));
            yield "\">
                    <a class=\"page-link\" href=\"";
            // line 786
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 786, $this->source); })()), "request", [], "any", false, false, false, 786), "query", [], "any", false, false, false, 786), "all", [], "any", false, false, false, 786), ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 786, $this->source); })()) - 1)])), "html", null, true);
            yield "\"><i class=\"fas fa-chevron-left\"></i></a>
                </li>
                ";
            // line 788
            $context["maxVisible"] = 5;
            // line 789
            yield "                ";
            $context["startPage"] = max(1, ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 789, $this->source); })()) - 2));
            // line 790
            yield "                ";
            $context["endPage"] = min((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 790, $this->source); })()), (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 790, $this->source); })()) + (isset($context["maxVisible"]) || array_key_exists("maxVisible", $context) ? $context["maxVisible"] : (function () { throw new RuntimeError('Variable "maxVisible" does not exist.', 790, $this->source); })())) - 1));
            // line 791
            yield "                ";
            if ((((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 791, $this->source); })()) - (isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 791, $this->source); })())) < ((isset($context["maxVisible"]) || array_key_exists("maxVisible", $context) ? $context["maxVisible"] : (function () { throw new RuntimeError('Variable "maxVisible" does not exist.', 791, $this->source); })()) - 1))) {
                // line 792
                yield "                    ";
                $context["startPage"] = max(1, (((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 792, $this->source); })()) - (isset($context["maxVisible"]) || array_key_exists("maxVisible", $context) ? $context["maxVisible"] : (function () { throw new RuntimeError('Variable "maxVisible" does not exist.', 792, $this->source); })())) + 1));
                // line 793
                yield "                ";
            }
            // line 794
            yield "                
                ";
            // line 795
            if (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 795, $this->source); })()) > 1)) {
                // line 796
                yield "                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"";
                // line 797
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 797, $this->source); })()), "request", [], "any", false, false, false, 797), "query", [], "any", false, false, false, 797), "all", [], "any", false, false, false, 797), ["page" => 1])), "html", null, true);
                yield "\">1</a>
                    </li>
                    ";
                // line 799
                if (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 799, $this->source); })()) > 2)) {
                    // line 800
                    yield "                        <li class=\"page-item disabled\"><span class=\"page-link\">…</span></li>
                    ";
                }
                // line 802
                yield "                ";
            }
            // line 803
            yield "                
                ";
            // line 804
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 804, $this->source); })()), (isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 804, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 805
                yield "                    <li class=\"page-item ";
                yield ((($context["i"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 805, $this->source); })()))) ? ("active") : (""));
                yield "\">
                        <a class=\"page-link\" href=\"";
                // line 806
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 806, $this->source); })()), "request", [], "any", false, false, false, 806), "query", [], "any", false, false, false, 806), "all", [], "any", false, false, false, 806), ["page" => $context["i"]])), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "</a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 809
            yield "                
                ";
            // line 810
            if (((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 810, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 810, $this->source); })()))) {
                // line 811
                yield "                    ";
                if (((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 811, $this->source); })()) < ((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 811, $this->source); })()) - 1))) {
                    // line 812
                    yield "                        <li class=\"page-item disabled\"><span class=\"page-link\">…</span></li>
                    ";
                }
                // line 814
                yield "                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"";
                // line 815
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 815, $this->source); })()), "request", [], "any", false, false, false, 815), "query", [], "any", false, false, false, 815), "all", [], "any", false, false, false, 815), ["page" => (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 815, $this->source); })())])), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 815, $this->source); })()), "html", null, true);
                yield "</a>
                    </li>
                ";
            }
            // line 818
            yield "                
                <li class=\"page-item ";
            // line 819
            yield ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 819, $this->source); })()) >= (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 819, $this->source); })()))) ? ("disabled") : (""));
            yield "\">
                    <a class=\"page-link\" href=\"";
            // line 820
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 820, $this->source); })()), "request", [], "any", false, false, false, 820), "query", [], "any", false, false, false, 820), "all", [], "any", false, false, false, 820), ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 820, $this->source); })()) + 1)])), "html", null, true);
            yield "\"><i class=\"fas fa-chevron-right\"></i></a>
                </li>
            </ul>
        </nav>
    </div>
    ";
        }
        // line 826
        yield "</div>

<!-- ========== MODALS ========== -->
<div class=\"modal fade\" id=\"quotaReachedModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content border-0 shadow\">
            <div class=\"modal-header bg-warning text-white border-0\">
                <h5 class=\"modal-title fs-6\"><i class=\"fas fa-exclamation-triangle me-2\"></i> Quota atteint</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-3 py-md-4\">
                <i class=\"fas fa-ban fa-3x text-warning mb-3\"></i>
                <h5 class=\"fs-6\">Limite de ";
        // line 838
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["quota"]) || array_key_exists("quota", $context) ? $context["quota"] : (function () { throw new RuntimeError('Variable "quota" does not exist.', 838, $this->source); })()), "html", null, true);
        yield " plats atteinte</h5>
                <p class=\"text-muted small\">Pour ajouter de nouveaux plats, passez à un plan supérieur.</p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center py-2 py-md-3\">
                <a href=\"";
        // line 842
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subscription_plans");
        yield "\" class=\"btn btn-warning btn-sm px-3\">
                    <i class=\"fas fa-arrow-up me-2\"></i> Voir les offres
                </a>
                <button type=\"button\" class=\"btn btn-outline-secondary btn-sm px-3\" data-bs-dismiss=\"modal\">Annuler</button>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"toggleRecipeModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content border-0 shadow\">
            <div class=\"modal-header bg-warning text-white border-0\">
                <h5 class=\"modal-title fs-6\">Confirmation</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-3 py-md-4\">
                <i class=\"fas fa-question-circle fa-3x text-primary mb-3\"></i>
                <p id=\"toggleRecipeMessage\" class=\"mb-0 small\"></p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center py-2 py-md-3\">
                <button type=\"button\" class=\"btn btn-outline-secondary btn-sm px-3\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"toggleRecipeForm\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" id=\"toggleRecipeToken\">
                    <button type=\"submit\" class=\"btn btn-warning btn-sm px-3\">Confirmer</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"deleteRecipeModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content border-0 shadow\">
            <div class=\"modal-header bg-danger text-white border-0\">
                <h5 class=\"modal-title fs-6\"><i class=\"fas fa-exclamation-triangle me-2\"></i> Confirmation</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-3 py-md-4\">
                <i class=\"fas fa-trash-alt fa-3x text-danger mb-3\"></i>
                <p id=\"deleteRecipeMessage\" class=\"mb-0 small\"></p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center py-2 py-md-3\">
                <button type=\"button\" class=\"btn btn-outline-secondary btn-sm px-3\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"deleteRecipeForm\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteRecipeToken\">
                    <button type=\"submit\" class=\"btn btn-danger btn-sm px-3\">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 896
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

        // line 897
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/fr.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialisation Select2 pour la catégorie
    if (document.getElementById('category') && typeof \$ !== 'undefined' && \$.fn.select2) {
        \$('#category').select2({
            theme: 'bootstrap-5',
            language: 'fr',
            placeholder: '📁 Sélectionnez une catégorie',
            allowClear: true,
            width: '100%',
            dropdownAutoWidth: true
        });
    }

    // Initialisation Select2 pour la promotion
    if (document.getElementById('promotion') && typeof \$ !== 'undefined' && \$.fn.select2) {
        \$('#promotion').select2({
            theme: 'bootstrap-5',
            language: 'fr',
            placeholder: '🎯 Sélectionnez une promotion',
            allowClear: true,
            width: '100%',
            dropdownAutoWidth: true
        });
    }

    const newBtn = document.getElementById('newRecipeBtn');
    if (newBtn) {
        newBtn.addEventListener('click', function(e) {
            e.preventDefault();
            ";
        // line 930
        if ((($tmp = (isset($context["quotaReached"]) || array_key_exists("quotaReached", $context) ? $context["quotaReached"] : (function () { throw new RuntimeError('Variable "quotaReached" does not exist.', 930, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 931
            yield "                new bootstrap.Modal(document.getElementById('quotaReachedModal')).show();
            ";
        } else {
            // line 933
            yield "                window.location.href = \"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_new");
            yield "\";
            ";
        }
        // line 935
        yield "        });
    }

    // Toggle status modal
    const toggleModal = new bootstrap.Modal(document.getElementById('toggleRecipeModal'));
    const toggleForm = document.getElementById('toggleRecipeForm');
    const toggleToken = document.getElementById('toggleRecipeToken');
    const toggleMessage = document.getElementById('toggleRecipeMessage');

    document.querySelectorAll('.toggle-recipe-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const id = this.dataset.recipeId;
            const name = this.dataset.recipeName;
            const current = this.dataset.currentStatus;
            const action = current === 'active' ? 'désactiver' : 'activer';
            toggleMessage.innerText = `Êtes-vous sûr de vouloir \${action} le plat \"\${name}\" ?`;
            toggleForm.action = `/admin/recipe/\${id}/toggle-status`;
            toggleToken.value = this.dataset.token;
            toggleModal.show();
        });
    });

    // Delete modal
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteRecipeModal'));
    const deleteForm = document.getElementById('deleteRecipeForm');
    const deleteToken = document.getElementById('deleteRecipeToken');
    const deleteMessage = document.getElementById('deleteRecipeMessage');

    document.querySelectorAll('.delete-recipe-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const id = this.dataset.recipeId;
            const name = this.dataset.recipeName;
            const token = this.dataset.token;
            deleteMessage.innerHTML = `
                <div class=\"alert alert-warning mb-2 p-2 small\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i>Cette action est irréversible.
                </div>
                <p class=\"mb-0\">Supprimer le plat <strong>\"\${name}\"</strong> ?</p>
            `;
            deleteForm.action = `/admin/recipe/\${id}`;
            deleteToken.value = token;
            deleteModal.show();
        });
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
        return "admin/recipe/index.html.twig";
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
        return array (  1470 => 935,  1464 => 933,  1460 => 931,  1458 => 930,  1422 => 897,  1409 => 896,  1345 => 842,  1338 => 838,  1324 => 826,  1315 => 820,  1311 => 819,  1308 => 818,  1300 => 815,  1297 => 814,  1293 => 812,  1290 => 811,  1288 => 810,  1285 => 809,  1274 => 806,  1269 => 805,  1265 => 804,  1262 => 803,  1259 => 802,  1255 => 800,  1253 => 799,  1248 => 797,  1245 => 796,  1243 => 795,  1240 => 794,  1237 => 793,  1234 => 792,  1231 => 791,  1228 => 790,  1225 => 789,  1223 => 788,  1218 => 786,  1214 => 785,  1203 => 781,  1199 => 779,  1197 => 778,  1192 => 775,  1179 => 768,  1171 => 762,  1169 => 761,  1161 => 757,  1152 => 752,  1150 => 751,  1138 => 742,  1131 => 738,  1127 => 737,  1120 => 732,  1112 => 727,  1108 => 726,  1104 => 725,  1099 => 722,  1097 => 721,  1093 => 719,  1087 => 715,  1081 => 712,  1077 => 711,  1073 => 710,  1069 => 709,  1065 => 708,  1061 => 707,  1057 => 705,  1055 => 704,  1047 => 699,  1039 => 694,  1027 => 685,  1022 => 683,  1014 => 677,  1010 => 675,  1006 => 673,  1004 => 672,  1001 => 671,  999 => 670,  996 => 669,  994 => 668,  991 => 667,  989 => 666,  986 => 665,  984 => 664,  977 => 659,  971 => 655,  965 => 651,  963 => 650,  958 => 647,  952 => 643,  946 => 640,  941 => 639,  939 => 638,  934 => 635,  929 => 634,  918 => 625,  911 => 623,  905 => 621,  903 => 620,  898 => 619,  896 => 618,  892 => 617,  885 => 616,  881 => 615,  869 => 606,  865 => 605,  853 => 596,  849 => 595,  834 => 583,  830 => 582,  826 => 581,  822 => 580,  818 => 579,  808 => 571,  798 => 568,  783 => 566,  777 => 564,  775 => 563,  768 => 562,  764 => 561,  751 => 551,  731 => 534,  706 => 512,  686 => 495,  670 => 482,  654 => 469,  638 => 456,  620 => 440,  610 => 436,  607 => 435,  603 => 434,  600 => 433,  590 => 429,  587 => 428,  582 => 427,  579 => 425,  569 => 418,  564 => 416,  558 => 412,  555 => 411,  546 => 403,  538 => 398,  527 => 389,  525 => 388,  518 => 383,  514 => 381,  512 => 380,  506 => 379,  502 => 378,  484 => 363,  477 => 358,  464 => 357,  104 => 7,  91 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/recipe/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Menu {{ companyName }} - HMA Market{% endblock %}

{% block stylesheets %}
{{ parent() }}
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
<link href=\"https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css\" rel=\"stylesheet\" />
<style>
/* ========================================
   CARTES PLATS
======================================== */
.hover-card {
    transition: transform 0.2s ease, box-shadow 0.2s ease;
    border-radius: 15px;
    overflow: hidden;
}
.hover-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.08) !important;
}
.recipe-image-container {
    position: relative;
    height: 130px;
    overflow: hidden;
    border-radius: 15px 15px 0 0;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    display: flex;
    align-items: center;
    justify-content: center;
}
@media (min-width: 768px) {
    .recipe-image-container {
        height: 160px;
    }
}
.recipe-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.recipe-image-placeholder {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
    width: 100%;
}
.recipe-image-placeholder i {
    font-size: 3rem;
}
@media (min-width: 768px) {
    .recipe-image-placeholder i {
        font-size: 4rem;
    }
}

.stat-item {
    transition: background-color 0.2s;
}
.stat-item:hover {
    background-color: #e9ecef !important;
}
.badge {
    font-weight: 500;
    letter-spacing: 0.3px;
    font-size: 0.6rem;
    padding: 0.2rem 0.4rem;
}
@media (min-width: 768px) {
    .badge {
        font-size: 0.75rem;
        padding: 0.25rem 0.6rem;
    }
}

/* ========================================
   SELECT2
======================================== */
.select2-container--bootstrap-5 .select2-selection {
    height: 38px !important;
    padding: 0 !important;
}
.select2-container--bootstrap-5 .select2-selection--single {
    height: 38px !important;
    border-radius: 8px !important;
    background-color: #f8f9fa !important;
    border-color: #e9ecef !important;
    display: flex !important;
    align-items: center !important;
}
.select2-container--bootstrap-5 .select2-selection--single .select2-selection__rendered {
    line-height: normal !important;
    padding: 8px 12px !important;
    color: #212529 !important;
    display: block !important;
}
.select2-container--bootstrap-5 .select2-selection--single .select2-selection__arrow {
    height: 36px !important;
    position: absolute !important;
    top: 1px !important;
    right: 5px !important;
}
.form-select.bg-light.border-0 {
    height: 38px;
    padding: 8px 12px;
}
.select2-container--bootstrap-5 .select2-search--dropdown .select2-search__field {
    padding: 8px 12px !important;
    border-radius: 6px !important;
    border-color: #e9ecef !important;
}
.select2-container--bootstrap-5 .select2-results__option {
    padding: 8px 12px !important;
}
.select2-container--bootstrap-5 .select2-dropdown {
    border-color: #e9ecef !important;
    border-radius: 8px !important;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1) !important;
}
.select2-container--bootstrap-5 .select2-results__option--selected {
    background-color: #0463f1 !important;
    color: white !important;
}
.select2-container--bootstrap-5 .select2-results__option--highlighted {
    background-color: #e9ecef !important;
    color: #0463f1 !important;
}

/* ========================================
   RESPONSIVE
======================================== */
@media (max-width: 992px) {
    .container-fluid {
        padding-left: 0.75rem !important;
        padding-right: 0.75rem !important;
    }
    
    .d-flex.justify-content-between.align-items-center {
        flex-direction: column;
        align-items: flex-start !important;
        gap: 0.75rem !important;
        width: 100%;
    }
    
    .d-flex.justify-content-between.align-items-center .d-flex.align-items-center.gap-3 {
        flex-wrap: wrap;
        width: 100%;
    }
    
    .d-flex.justify-content-between.align-items-center .d-flex.align-items-center.gap-3 .card {
        flex: 1 1 auto;
        min-width: 150px;
    }
    
    .stat-item .h3 {
        font-size: 1.5rem !important;
    }
}

@media (max-width: 768px) {
    .container-fluid {
        padding-left: 0.5rem !important;
        padding-right: 0.5rem !important;
    }
    
    .d-flex.justify-content-between.align-items-center {
        flex-direction: column;
        align-items: flex-start !important;
        gap: 0.5rem !important;
        width: 100%;
    }
    
    .d-flex.justify-content-between.align-items-center > div:first-child {
        width: 100%;
    }
    
    .d-flex.justify-content-between.align-items-center .d-flex.align-items-center.gap-3 {
        flex-direction: column;
        width: 100%;
    }
    
    .d-flex.justify-content-between.align-items-center .d-flex.align-items-center.gap-3 .card {
        width: 100%;
        min-width: unset;
    }
    
    .d-flex.justify-content-between.align-items-center .d-flex.align-items-center.gap-3 .btn {
        width: 100%;
    }
    
    h1.h3 {
        font-size: 1.1rem !important;
    }
    
    /* Filtres : tous les champs en colonne sur mobile */
    .row.g-3 .col-lg-4,
    .row.g-3 .col-md-6 {
        flex: 0 0 100%;
        max-width: 100%;
        margin-bottom: 0.5rem;
    }
    
    /* FORCER 2 CARTES PAR LIGNE SUR MOBILE */
    .row.g-4 .col-xl-3.col-lg-4.col-md-6 {
        flex: 0 0 50%;
        max-width: 50%;
        padding-left: 0.25rem;
        padding-right: 0.25rem;
        margin-bottom: 0.5rem;
    }
    
    .card .card-title {
        font-size: 0.85rem;
    }
    
    .card .card-body {
        padding: 0.5rem !important;
    }
    
    .card .btn-sm {
        font-size: 0.55rem;
        padding: 0.15rem 0.2rem;
    }
    
    .card .btn-sm i {
        font-size: 0.6rem;
    }
    
    .recipe-image-container {
        height: 100px;
    }
    
    .recipe-image-placeholder i {
        font-size: 2rem;
    }
    
    .dropdown-menu {
        font-size: 0.8rem;
    }
    
    .dropdown-item {
        padding: 0.2rem 0.5rem;
        font-size: 0.75rem;
    }
    
    .card-header .d-flex.gap-2 {
        flex-wrap: wrap;
        width: 100%;
    }
    .card-header .d-flex.gap-2 .btn {
        flex: 1 1 auto;
        min-width: calc(33% - 0.25rem);
    }
    
    .badge {
        font-size: 0.5rem;
        padding: 0.1rem 0.3rem;
    }
    
    .text-muted.small {
        font-size: 0.6rem !important;
    }
    
    .d-flex.gap-1.mt-auto .btn {
        flex: 1 1 auto;
        font-size: 0.5rem;
        padding: 0.1rem 0.15rem;
    }
    .d-flex.gap-1.mt-auto .btn i {
        font-size: 0.6rem;
    }
}

@media (max-width: 480px) {
    .container-fluid {
        padding-left: 0.25rem !important;
        padding-right: 0.25rem !important;
    }
    
    /* FORCER 2 CARTES PAR LIGNE SUR TRÈS PETIT ÉCRAN */
    .row.g-4 .col-xl-3.col-lg-4.col-md-6 {
        flex: 0 0 50%;
        max-width: 50%;
        padding-left: 0.15rem;
        padding-right: 0.15rem;
        margin-bottom: 0.35rem;
    }
    
    .recipe-image-container {
        height: 80px;
    }
    
    .recipe-image-placeholder i {
        font-size: 1.5rem;
    }
    
    .card .card-title {
        font-size: 0.7rem;
    }
    
    .card .card-body {
        padding: 0.3rem !important;
    }
    
    .card .btn-sm {
        font-size: 0.45rem;
        padding: 0.08rem 0.12rem;
    }
    
    .card .btn-sm i {
        font-size: 0.5rem;
    }
    
    .badge {
        font-size: 0.4rem;
        padding: 0.08rem 0.2rem;
    }
    
    .text-muted.small {
        font-size: 0.5rem !important;
    }
    
    .dropdown-menu {
        font-size: 0.7rem;
    }
    
    .dropdown-item {
        padding: 0.15rem 0.4rem;
        font-size: 0.65rem;
    }
    
    .pagination .page-link {
        font-size: 0.6rem;
        padding: 0.2rem 0.4rem;
    }
    
    .modal .btn-lg {
        font-size: 0.7rem;
        padding: 0.25rem 0.5rem;
    }
}

/* Désactiver hover sur mobile */
@media (max-width: 768px) {
    .hover-card:hover {
        transform: none !important;
    }
    .stat-item:hover {
        transform: none !important;
    }
}
</style>
{% endblock %}

{% block body %}
<div class=\"container-fluid px-2 px-md-4 py-2 py-md-3\">
    <!-- ========== EN-TÊTE ========== -->
    <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center mb-3 mb-md-4 flex-wrap gap-2\">
        <div>
            <h1 class=\"h4 h-md-3 mb-0 text-gray-800 fw-bold\">
                <i class=\"fas fa-utensils me-2\"></i>Menu {{ companyName }}
            </h1>
            <p class=\"text-muted mt-1 small d-none d-sm-block\">Gérez vos plats et recettes</p>
        </div>
        
        <div class=\"d-flex align-items-center gap-2 gap-md-3 flex-wrap w-100 w-sm-auto\">
            <div class=\"card bg-light border-0 shadow-sm p-1 p-md-2 flex-grow-1 flex-md-grow-0\" style=\"min-width: 100px;\">
                <div class=\"d-flex align-items-center\">
                    <div class=\"me-1 me-md-2\">
                        <span class=\"badge bg-primary p-1 p-md-2 rounded-circle\">
                            <i class=\"fas fa-chart-line fa-fw\"></i>
                        </span>
                    </div>
                    <div>
                        <small class=\"text-muted d-block small\" style=\"font-size: 0.5rem;\">Plats quota</small>
                        <h6 class=\"mb-0 {{ quotaReached ? 'text-danger' : 'text-success' }} fw-bold\" style=\"font-size: 0.8rem;\">
                            {{ activeCount }} / {{ quota }}
                            {% if quota == 'Illimité' %}
                                <i class=\"fas fa-infinity text-info ms-1 small\"></i>
                            {% endif %}
                        </h6>
                    </div>
                </div>
            </div>

            {% if subscriptionInactiveFiltered > 0 %}
            <div class=\"card bg-light border-0 shadow-sm p-1 p-md-2 flex-grow-1 flex-md-grow-0\" style=\"min-width: 80px;\">
                <div class=\"d-flex align-items-center\">
                    <div class=\"me-1 me-md-2\">
                        <span class=\"badge bg-warning p-1 p-md-2 rounded-circle\">
                            <i class=\"fas fa-clock fa-fw\"></i>
                        </span>
                    </div>
                    <div>
                        <small class=\"text-muted d-block small\" style=\"font-size: 0.5rem;\">En attente</small>
                        <h6 class=\"mb-0 fw-bold\" style=\"font-size: 0.8rem;\">{{ subscriptionInactiveFiltered }}</h6>
                    </div>
                </div>
            </div>
            {% endif %}

            <a href=\"#\" id=\"newRecipeBtn\" class=\"btn btn-primary btn-sm shadow-sm flex-grow-1 flex-md-grow-0\">
                <i class=\"fas fa-plus-circle me-1 me-md-2\"></i> <span class=\"d-none d-sm-inline\">Nouveau Plat</span>
            </a>
        </div>
    </div>

    {# Message si quota atteint #}
    {% if quotaReached %}
    <div class=\"alert alert-warning alert-dismissible fade show shadow-sm\" role=\"alert\">
        <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-2\">
            <div class=\"small\">
                <i class=\"fas fa-exclamation-triangle me-2\"></i>
                <strong>Quota atteint !</strong> Vous avez utilisé vos {{ quota }} plats actifs.
            </div>
            <a href=\"{{ path('app_subscription_plans') }}\" class=\"btn btn-warning btn-sm w-100 w-sm-auto\">
                <i class=\"fas fa-arrow-up me-1\"></i> Voir les offres
            </a>
        </div>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    </div>
    {% endif %}

    {# Flash messages #}
    {% for message in app.flashes('success') %}
        <div class=\"alert alert-success alert-dismissible fade show shadow-sm\" role=\"alert\">
            <i class=\"fas fa-check-circle me-2\"></i> {{ message }}
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    {% endfor %}
    
    {% for message in app.flashes('error') %}
        <div class=\"alert alert-danger alert-dismissible fade show shadow-sm\" role=\"alert\">
            <i class=\"fas fa-exclamation-circle me-2\"></i> {{ message }}
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    {% endfor %}

    <!-- ========== STATISTIQUES ========== -->
    <div class=\"card shadow-sm border-0 mb-3 mb-md-4\">
        <div class=\"card-header bg-white py-2 py-md-3\">
            <h5 class=\"mb-0 fw-semibold fs-6 fs-md-5\">
                <i class=\"fas fa-chart-pie text-primary me-2\"></i>Statistiques selon les filtres
            </h5>
        </div>
        <div class=\"card-body p-2 p-md-3\">
            <!-- ✅ LIGNE 1 : 4 cartes en 2x2 sur mobile -->
            <div class=\"row g-2 g-md-3 mb-2 mb-md-3\">
                <div class=\"col-6 col-md-3\">
                    <div class=\"stat-item p-2 p-md-3 bg-light rounded-3 h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted text-uppercase small fw-bold\">Filtrés</span>
                                <h3 class=\"mb-0 fw-bold fs-4 fs-md-3\">{{ totalFiltered }}</h3>
                            </div>
                            <div class=\"bg-primary p-1 p-md-2 rounded-3\">
                                <i class=\"fas fa-utensils text-white fs-5 fs-md-3\"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-6 col-md-3\">
                    <div class=\"stat-item p-2 p-md-3 bg-light rounded-3 h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted text-uppercase small fw-bold\">Actifs</span>
                                <h3 class=\"mb-0 fw-bold text-success fs-4 fs-md-3\">{{ activeFiltered }}</h3>
                            </div>
                            <div class=\"bg-success p-1 p-md-2 rounded-3\">
                                <i class=\"fas fa-check-circle text-white fs-5 fs-md-3\"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-6 col-md-3\">
                    <div class=\"stat-item p-2 p-md-3 bg-light rounded-3 h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted text-uppercase small fw-bold\">Inactifs</span>
                                <h3 class=\"mb-0 fw-bold text-danger fs-4 fs-md-3\">{{ inactiveFiltered }}</h3>
                            </div>
                            <div class=\"bg-danger p-1 p-md-2 rounded-3\">
                                <i class=\"fas fa-pause-circle text-white fs-5 fs-md-3\"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-6 col-md-3\">
                    <div class=\"stat-item p-2 p-md-3 bg-light rounded-3 h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted text-uppercase small fw-bold\">Abonnement actif</span>
                                <h3 class=\"mb-0 fw-bold text-info fs-4 fs-md-3\">{{ subscriptionActiveFiltered }}</h3>
                            </div>
                            <div class=\"bg-info p-1 p-md-2 rounded-3\">
                                <i class=\"fas fa-database text-white fs-5 fs-md-3\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- ✅ LIGNE 2 : Abonnement inactif - PLEINE LARGEUR SUR MOBILE -->
            <div class=\"row g-2 g-md-3\">
                <div class=\"col-12\">
                    <div class=\"stat-item p-2 p-md-3 bg-light rounded-3 h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted text-uppercase small fw-bold\">Abonnement inactif</span>
                                <h3 class=\"mb-0 fw-bold text-secondary fs-4 fs-md-3\">{{ subscriptionInactiveFiltered }}</h3>
                            </div>
                            <div class=\"bg-secondary p-1 p-md-2 rounded-3\">
                                <i class=\"fas fa-clock text-white fs-5 fs-md-3\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ========== FILTRES ========== -->
    <div class=\"card shadow-sm border-0 mb-3 mb-md-4\">
        <div class=\"card-header bg-white py-2 py-md-3 d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <h5 class=\"mb-0 fw-semibold fs-6 fs-md-5\">
                <i class=\"fas fa-filter text-primary me-2\"></i>Filtres
            </h5>
            <div class=\"d-flex gap-1 gap-md-2\">
                <button type=\"submit\" form=\"filter-form\" class=\"btn btn-primary btn-sm\">
                    <i class=\"fas fa-filter me-1\"></i> <span class=\"d-none d-sm-inline\">Filtrer</span>
                </button>
                <a href=\"{{ path('app_admin_recipe_index') }}\" class=\"btn btn-outline-secondary btn-sm\">
                    <i class=\"fas fa-undo me-1\"></i> <span class=\"d-none d-sm-inline\">Effacer</span>
                </a>
            </div>
        </div>
        <div class=\"card-body p-2 p-md-3\">
            <form method=\"get\" id=\"filter-form\">
                <!-- Première ligne : 3 éléments -->
                <div class=\"row g-2 g-md-3 mb-2 mb-md-3\">
                    <div class=\"col-12 col-sm-6 col-lg-4\">
                        <label for=\"search\" class=\"form-label fw-semibold small\">
                            <i class=\"fas fa-search text-primary me-1\"></i>Rechercher
                        </label>
                        <div class=\"input-group\">
                            <span class=\"input-group-text bg-light border-0\">
                                <i class=\"fas fa-search text-muted small\"></i>
                            </span>
                            <input type=\"text\" name=\"search\" id=\"search\" value=\"{{ search }}\" 
                                   class=\"form-control bg-light border-0 form-control-sm\" placeholder=\"Nom du plat...\">
                        </div>
                    </div>
                    <div class=\"col-12 col-sm-6 col-lg-4\">
                        <label for=\"category\" class=\"form-label fw-semibold small\">
                            <i class=\"fas fa-tags text-info me-1\"></i>Catégorie
                        </label>
                        <select name=\"category\" id=\"category\" class=\"form-select form-select-sm\" style=\"width: 100%;\">
                            <option value=\"0\">📁 Toutes les catégories</option>
                            {% for category in categories %}
                                <option value=\"{{ category.id }}\" {{ selectedCategory == category.id ? 'selected' : '' }}>
                                    {% if category.level == 0 %}
                                        📁 {{ category.name }}
                                    {% else %}
                                        {% for i in 1..category.level %}&nbsp;&nbsp;&nbsp;{% endfor %}↳ {{ category.name }}
                                    {% endif %}
                                    <span class=\"text-muted\">({{ category.recipeCount }})</span>
                                </option>
                            {% endfor %}
                        </select>
                    </div>
                    <div class=\"col-12 col-sm-6 col-lg-4\">
                        <label for=\"type\" class=\"form-label fw-semibold small\">
                            <i class=\"fas fa-tag text-primary me-1\"></i>Type de plat
                        </label>
                        <select name=\"type\" id=\"type\" class=\"form-select form-select-sm bg-light border-0\">
                            <option value=\"\">Tous les types</option>
                            <option value=\"food\" {{ selectedType == 'food' ? 'selected' : '' }}>🍽️ Plat principal</option>
                            <option value=\"starter\" {{ selectedType == 'starter' ? 'selected' : '' }}>🥗 Entrée</option>
                            <option value=\"dessert\" {{ selectedType == 'dessert' ? 'selected' : '' }}>🍰 Dessert</option>
                            <option value=\"drink\" {{ selectedType == 'drink' ? 'selected' : '' }}>🥤 Boisson</option>
                            <option value=\"side\" {{ selectedType == 'side' ? 'selected' : '' }}>🍟 Accompagnement</option>
                        </select>
                    </div>
                </div>
                <!-- Deuxième ligne : 3 éléments -->
                <div class=\"row g-2 g-md-3\">
                    <div class=\"col-12 col-sm-6 col-lg-4\">
                        <label for=\"status\" class=\"form-label fw-semibold small\">
                            <i class=\"fas fa-toggle-on text-success me-1\"></i>Statut
                        </label>
                        <select name=\"status\" id=\"status\" class=\"form-select form-select-sm bg-light border-0\">
                            <option value=\"\">Tous</option>
                            <option value=\"active\" {{ selectedStatus == 'active' ? 'selected' : '' }}>✅ Actifs</option>
                            <option value=\"inactive\" {{ selectedStatus == 'inactive' ? 'selected' : '' }}>⛔ Inactifs</option>
                        </select>
                    </div>
                    <div class=\"col-12 col-sm-6 col-lg-4\">
                        <label for=\"subscription_status\" class=\"form-label fw-semibold small\">
                            <i class=\"fas fa-credit-card text-warning me-1\"></i>Abonnement
                        </label>
                        <select name=\"subscription_status\" id=\"subscription_status\" class=\"form-select form-select-sm bg-light border-0\">
                            <option value=\"\">Tous</option>
                            <option value=\"active\" {{ selectedSubscriptionStatus == 'active' ? 'selected' : '' }}>✅ Dans le quota</option>
                            <option value=\"inactive\" {{ selectedSubscriptionStatus == 'inactive' ? 'selected' : '' }}>⏳ Hors quota</option>
                        </select>
                    </div>
                    <div class=\"col-12 col-sm-6 col-lg-4\">
                        <label for=\"promotion\" class=\"form-label fw-semibold small\">
                            <i class=\"fas fa-tags text-danger me-1\"></i>Promotion
                        </label>
                        <select name=\"promotion\" id=\"promotion\" class=\"form-select form-select-sm\" style=\"width: 100%;\">
                            <option value=\"0\">🎯 Toutes les promotions</option>
                            {% for promotion in promotions %}
                                <option value=\"{{ promotion.id }}\" {{ selectedPromotion == promotion.id ? 'selected' : '' }}>
                                    {{ promotion.name }}
                                    {% if promotion.discountPercentage %}
                                        (-{{ promotion.discountPercentage }}%)
                                    {% elseif promotion.discountAmount %}
                                        (-{{ promotion.discountAmount|number_format(0, ',', ' ') }} FCFA)
                                    {% endif %}
                                </option>
                            {% endfor %}
                        </select>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- ========== GRILLE DE PLATS ========== -->
    <div class=\"row g-2 g-md-4\">
        {% for recipe in recipes %}
        <div class=\"col-6 col-md-4 col-lg-3 col-xl-3\">
            <div class=\"card h-100 border-0 shadow-sm hover-card\">
                <div class=\"recipe-image-container position-relative\">
                    {% if recipe.image %}
                        <img src=\"{{ asset('uploads/images_plats/' ~ recipe.image) }}\" 
                             alt=\"{{ recipe.name }}\" 
                             class=\"card-img-top recipe-image\">
                    {% else %}
                        <div class=\"recipe-image-placeholder\">
                            <i class=\"fas fa-utensils text-muted\"></i>
                        </div>
                    {% endif %}

                    <!-- Badge Actif/Inactif à GAUCHE -->
                    <div class=\"position-absolute top-0 start-0 p-1 p-md-2\">
                        {% if recipe.isActive %}
                            <span class=\"badge bg-success\">
                                <i class=\"fas fa-check-circle me-1\"></i> <span class=\"d-none d-sm-inline\">Actif</span>
                            </span>
                        {% else %}
                            <span class=\"badge bg-danger\">
                                <i class=\"fas fa-pause-circle me-1\"></i> <span class=\"d-none d-sm-inline\">Inactif</span>
                            </span>
                        {% endif %}
                    </div>
                    
                    <!-- Badge Type de plat à DROITE -->
                    <div class=\"position-absolute top-0 end-0 p-1 p-md-2\">
                        <span class=\"badge bg-primary\">
                            {% if recipe.type == 'food' %}
                                🍽️ <span class=\"d-none d-sm-inline\">Plat</span>
                            {% elseif recipe.type == 'starter' %}
                                🥗 <span class=\"d-none d-sm-inline\">Entrée</span>
                            {% elseif recipe.type == 'dessert' %}
                                🍰 <span class=\"d-none d-sm-inline\">Dessert</span>
                            {% elseif recipe.type == 'drink' %}
                                🥤 <span class=\"d-none d-sm-inline\">Boisson</span>
                            {% elseif recipe.type == 'side' %}
                                🍟 <span class=\"d-none d-sm-inline\">Accomp.</span>
                            {% else %}
                                📋 <span class=\"d-none d-sm-inline\">Plat</span>
                            {% endif %}
                        </span>
                    </div>
                </div>
                <div class=\"card-body d-flex flex-column p-2 p-md-3\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h5 class=\"card-title fw-bold text-truncate mb-1 fs-6 fs-md-5\">{{ recipe.name }}</h5>
                            <p class=\"text-muted small mb-2\">
                                <i class=\"fas fa-tag me-1\"></i>{{ recipe.category ? recipe.category.name|u.truncate(12) : 'Non catégorisé' }}
                            </p>
                        </div>
                        <div class=\"dropdown ms-1 flex-shrink-0\">
                            <button class=\"btn btn-sm btn-light p-1\" type=\"button\" data-bs-toggle=\"dropdown\">
                                <i class=\"fas fa-bars\"></i>
                            </button>
                            <ul class=\"dropdown-menu dropdown-menu-end\">
                                <li>
                                    <a class=\"dropdown-item small\" href=\"{{ path('app_admin_recipe_show', {'id': recipe.id}) }}\">
                                        <i class=\"fas fa-eye me-2\"></i> Voir
                                    </a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item small\" href=\"{{ path('app_admin_recipe_edit', {'id': recipe.id}) }}\">
                                        <i class=\"fas fa-edit me-2\"></i> Modifier
                                    </a>
                                </li>
                                <li>
                                    {% if recipe.subscriptionActive %}
                                        <button type=\"button\" 
                                                class=\"dropdown-item small toggle-recipe-btn\"
                                                data-recipe-id=\"{{ recipe.id }}\"
                                                data-recipe-name=\"{{ recipe.name }}\"
                                                data-current-status=\"{{ recipe.isActive ? 'active' : 'inactive' }}\"
                                                data-token=\"{{ csrf_token('toggle-status' ~ recipe.id) }}\">
                                            <i class=\"fas {{ recipe.isActive ? 'fa-toggle-on' : 'fa-toggle-off' }} me-2\"></i>
                                            {{ recipe.isActive ? 'Désactiver' : 'Activer' }}
                                        </button>
                                    {% else %}
                                        <span class=\"dropdown-item text-muted disabled small\">
                                            <i class=\"fas fa-ban me-2\"></i> Non disponible
                                        </span>
                                    {% endif %}
                                </li>
                                <li><hr class=\"dropdown-divider\"></li>
                                {% if is_granted('ROLE_ADMIN') and recipe.orderItems|length == 0 %}
                                    <li>
                                        <button type=\"button\" 
                                                class=\"dropdown-item text-danger small delete-recipe-btn\"
                                                data-recipe-id=\"{{ recipe.id }}\"
                                                data-recipe-name=\"{{ recipe.name }}\"
                                                data-token=\"{{ csrf_token('delete' ~ recipe.id) }}\">
                                            <i class=\"fas fa-trash me-2\"></i> Supprimer
                                        </button>
                                    </li>
                                {% endif %}
                            </ul>
                        </div>
                    </div>

                    <div class=\"d-flex flex-wrap justify-content-between align-items-center mb-2 mb-md-3 gap-1\">
                        <span class=\"fw-bold text-success small\">{{ recipe.sellingPrice|price_with_currency(recipe.hmaService) }}</span>
                        <span class=\"badge bg-info\">{{ recipe.recipeItems|length }} ingrédients</span>
                    </div>

                    <div class=\"d-flex gap-1 mt-auto\">
                        <a href=\"{{ path('app_admin_recipe_show', {'id': recipe.id}) }}#ingredients\" class=\"btn btn-sm btn-outline-info flex-fill\" title=\"Ingrédients\">
                            <i class=\"fas fa-list\"></i> 
                        </a>
                        <a href=\"#\" class=\"btn btn-sm btn-outline-primary flex-fill\" title=\"Mouvements stock\">
                            <i class=\"fas fa-exchange-alt\"></i> 
                        </a>
                        <a href=\"#\" class=\"btn btn-sm btn-outline-success flex-fill\" title=\"Commandes liées\">
                            <i class=\"fas fa-shopping-cart\"></i>
                        </a>
                        {% if companyType == 'restaurant' %}
                            <a href=\"{{ path('app_restaurant_recipe_promotions', {'id': recipe.id}) }}\" 
                            class=\"btn btn-sm btn-outline-warning flex-fill\" title=\"Promotions\">
                                <i class=\"fas fa-percent\"></i> 
                            </a>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
        {% else %}
        <div class=\"col-12\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-body text-center py-4 py-md-5\">
                    <i class=\"fas fa-utensils fa-3x fa-md-4 text-muted mb-3\"></i>
                    <h4 class=\"text-muted fw-light fs-5 fs-md-4\">Aucun plat trouvé</h4>
                    <p class=\"text-muted mb-3 mb-md-4 small\">Modifiez vos filtres ou créez un nouveau plat.</p>
                    <a href=\"{{ path('app_admin_recipe_index') }}\" class=\"btn btn-outline-primary btn-sm\">
                        <i class=\"fas fa-undo me-2\"></i> Réinitialiser
                    </a>
                </div>
            </div>
        </div>
        {% endfor %}
    </div>

    <!-- ========== PAGINATION ========== -->
    {% if totalPages > 1 %}
    <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-center mt-3 mt-md-4 gap-2\">
        <div class=\"text-muted small\">
            Page {{ currentPage }} sur {{ totalPages }} ({{ totalItems }} résultats)
        </div>
        <nav aria-label=\"Pagination\">
            <ul class=\"pagination pagination-sm mb-0\">
                <li class=\"page-item {{ currentPage <= 1 ? 'disabled' }}\">
                    <a class=\"page-link\" href=\"{{ path('app_admin_recipe_index', app.request.query.all|merge({'page': currentPage - 1})) }}\"><i class=\"fas fa-chevron-left\"></i></a>
                </li>
                {% set maxVisible = 5 %}
                {% set startPage = max(1, currentPage - 2) %}
                {% set endPage = min(totalPages, startPage + maxVisible - 1) %}
                {% if endPage - startPage < maxVisible - 1 %}
                    {% set startPage = max(1, endPage - maxVisible + 1) %}
                {% endif %}
                
                {% if startPage > 1 %}
                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"{{ path('app_admin_recipe_index', app.request.query.all|merge({'page': 1})) }}\">1</a>
                    </li>
                    {% if startPage > 2 %}
                        <li class=\"page-item disabled\"><span class=\"page-link\">…</span></li>
                    {% endif %}
                {% endif %}
                
                {% for i in startPage..endPage %}
                    <li class=\"page-item {{ i == currentPage ? 'active' }}\">
                        <a class=\"page-link\" href=\"{{ path('app_admin_recipe_index', app.request.query.all|merge({'page': i})) }}\">{{ i }}</a>
                    </li>
                {% endfor %}
                
                {% if endPage < totalPages %}
                    {% if endPage < totalPages - 1 %}
                        <li class=\"page-item disabled\"><span class=\"page-link\">…</span></li>
                    {% endif %}
                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"{{ path('app_admin_recipe_index', app.request.query.all|merge({'page': totalPages})) }}\">{{ totalPages }}</a>
                    </li>
                {% endif %}
                
                <li class=\"page-item {{ currentPage >= totalPages ? 'disabled' }}\">
                    <a class=\"page-link\" href=\"{{ path('app_admin_recipe_index', app.request.query.all|merge({'page': currentPage + 1})) }}\"><i class=\"fas fa-chevron-right\"></i></a>
                </li>
            </ul>
        </nav>
    </div>
    {% endif %}
</div>

<!-- ========== MODALS ========== -->
<div class=\"modal fade\" id=\"quotaReachedModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content border-0 shadow\">
            <div class=\"modal-header bg-warning text-white border-0\">
                <h5 class=\"modal-title fs-6\"><i class=\"fas fa-exclamation-triangle me-2\"></i> Quota atteint</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-3 py-md-4\">
                <i class=\"fas fa-ban fa-3x text-warning mb-3\"></i>
                <h5 class=\"fs-6\">Limite de {{ quota }} plats atteinte</h5>
                <p class=\"text-muted small\">Pour ajouter de nouveaux plats, passez à un plan supérieur.</p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center py-2 py-md-3\">
                <a href=\"{{ path('app_subscription_plans') }}\" class=\"btn btn-warning btn-sm px-3\">
                    <i class=\"fas fa-arrow-up me-2\"></i> Voir les offres
                </a>
                <button type=\"button\" class=\"btn btn-outline-secondary btn-sm px-3\" data-bs-dismiss=\"modal\">Annuler</button>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"toggleRecipeModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content border-0 shadow\">
            <div class=\"modal-header bg-warning text-white border-0\">
                <h5 class=\"modal-title fs-6\">Confirmation</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-3 py-md-4\">
                <i class=\"fas fa-question-circle fa-3x text-primary mb-3\"></i>
                <p id=\"toggleRecipeMessage\" class=\"mb-0 small\"></p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center py-2 py-md-3\">
                <button type=\"button\" class=\"btn btn-outline-secondary btn-sm px-3\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"toggleRecipeForm\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" id=\"toggleRecipeToken\">
                    <button type=\"submit\" class=\"btn btn-warning btn-sm px-3\">Confirmer</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"deleteRecipeModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content border-0 shadow\">
            <div class=\"modal-header bg-danger text-white border-0\">
                <h5 class=\"modal-title fs-6\"><i class=\"fas fa-exclamation-triangle me-2\"></i> Confirmation</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-3 py-md-4\">
                <i class=\"fas fa-trash-alt fa-3x text-danger mb-3\"></i>
                <p id=\"deleteRecipeMessage\" class=\"mb-0 small\"></p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center py-2 py-md-3\">
                <button type=\"button\" class=\"btn btn-outline-secondary btn-sm px-3\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"deleteRecipeForm\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteRecipeToken\">
                    <button type=\"submit\" class=\"btn btn-danger btn-sm px-3\">Supprimer</button>
                </form>
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
    // Initialisation Select2 pour la catégorie
    if (document.getElementById('category') && typeof \$ !== 'undefined' && \$.fn.select2) {
        \$('#category').select2({
            theme: 'bootstrap-5',
            language: 'fr',
            placeholder: '📁 Sélectionnez une catégorie',
            allowClear: true,
            width: '100%',
            dropdownAutoWidth: true
        });
    }

    // Initialisation Select2 pour la promotion
    if (document.getElementById('promotion') && typeof \$ !== 'undefined' && \$.fn.select2) {
        \$('#promotion').select2({
            theme: 'bootstrap-5',
            language: 'fr',
            placeholder: '🎯 Sélectionnez une promotion',
            allowClear: true,
            width: '100%',
            dropdownAutoWidth: true
        });
    }

    const newBtn = document.getElementById('newRecipeBtn');
    if (newBtn) {
        newBtn.addEventListener('click', function(e) {
            e.preventDefault();
            {% if quotaReached %}
                new bootstrap.Modal(document.getElementById('quotaReachedModal')).show();
            {% else %}
                window.location.href = \"{{ path('app_admin_recipe_new') }}\";
            {% endif %}
        });
    }

    // Toggle status modal
    const toggleModal = new bootstrap.Modal(document.getElementById('toggleRecipeModal'));
    const toggleForm = document.getElementById('toggleRecipeForm');
    const toggleToken = document.getElementById('toggleRecipeToken');
    const toggleMessage = document.getElementById('toggleRecipeMessage');

    document.querySelectorAll('.toggle-recipe-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const id = this.dataset.recipeId;
            const name = this.dataset.recipeName;
            const current = this.dataset.currentStatus;
            const action = current === 'active' ? 'désactiver' : 'activer';
            toggleMessage.innerText = `Êtes-vous sûr de vouloir \${action} le plat \"\${name}\" ?`;
            toggleForm.action = `/admin/recipe/\${id}/toggle-status`;
            toggleToken.value = this.dataset.token;
            toggleModal.show();
        });
    });

    // Delete modal
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteRecipeModal'));
    const deleteForm = document.getElementById('deleteRecipeForm');
    const deleteToken = document.getElementById('deleteRecipeToken');
    const deleteMessage = document.getElementById('deleteRecipeMessage');

    document.querySelectorAll('.delete-recipe-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const id = this.dataset.recipeId;
            const name = this.dataset.recipeName;
            const token = this.dataset.token;
            deleteMessage.innerHTML = `
                <div class=\"alert alert-warning mb-2 p-2 small\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i>Cette action est irréversible.
                </div>
                <p class=\"mb-0\">Supprimer le plat <strong>\"\${name}\"</strong> ?</p>
            `;
            deleteForm.action = `/admin/recipe/\${id}`;
            deleteToken.value = token;
            deleteModal.show();
        });
    });
});
</script>
{% endblock %}", "admin/recipe/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\recipe\\index.html.twig");
    }
}
