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

/* admin/category/index.html.twig */
class __TwigTemplate_7d13d15fb0dee13a0e675022e2d264cc extends Template
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
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/category/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/category/index.html.twig"));

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

        yield "Catégories de produits - HMA Market";
        
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
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
<link href=\"https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css\" rel=\"stylesheet\" />
<style>
.category-card {
    transition: transform 0.2s, box-shadow 0.2s;
    border-radius: 15px;
    overflow: hidden;
}
.category-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.1) !important;
}

.category-image-wrapper {
    height: 130px;
    overflow: hidden;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
}

.category-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s;
}

.category-card:hover .category-image {
    transform: scale(1.05);
}

.category-placeholder {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.stat-item {
    transition: transform 0.2s;
}
.stat-item:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}

.category-badges {
    display: flex;
    flex-wrap: wrap;
    gap: 4px;
    margin-top: 0.5rem;
}
.category-badges .badge {
    font-size: 9px;
    padding: 3px 6px;
}

/* ✅ Styles Select2 */
.select2-container--bootstrap-5 .select2-selection {
    height: 38px !important;
    padding: 0 !important;
}
.select2-container--bootstrap-5 .select2-selection--single {
    height: 38px !important;
    border-radius: 8px !important;
    background-color: #fff !important;
    border-color: #dee2e6 !important;
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
.select2-container--bootstrap-5 .select2-dropdown {
    border-color: #e9ecef !important;
    border-radius: 8px !important;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1) !important;
}
.select2-container--bootstrap-5 .select2-search--dropdown .select2-search__field {
    padding: 8px 12px !important;
    border-radius: 6px !important;
    border-color: #e9ecef !important;
}
.select2-container--bootstrap-5 .select2-results__option {
    padding: 8px 12px !important;
}
.select2-container--bootstrap-5 .select2-results__option--selected {
    background-color: #0463f1 !important;
    color: white !important;
}
.select2-container--bootstrap-5 .select2-results__option--highlighted {
    background-color: #e9ecef !important;
    color: #0463f1 !important;
}
.form-select.bg-light.border-0 {
    height: 38px;
    padding: 8px 12px;
}

/* ✅ RESPONSIVE - 2 CARTES PAR LIGNE SUR MOBILE */
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
    
    .breadcrumb {
        font-size: 0.7rem;
    }
    
    /* ✅ Statistiques : 2 par ligne sur mobile */
    .row.g-2 .col-6 {
        flex: 0 0 50%;
        max-width: 50%;
        padding-left: 0.25rem;
        padding-right: 0.25rem;
        margin-bottom: 0.5rem;
    }
    
    .stat-item .h3 {
        font-size: 1.1rem !important;
    }
    .stat-item .text-uppercase {
        font-size: 0.55rem !important;
    }
    .stat-item .fa-2x {
        font-size: 1.3rem !important;
    }
    .stat-item .p-3 {
        padding: 0.5rem !important;
    }
    
    /* ✅ Filtres : tous les champs en colonne sur mobile */
    .row.g-2.g-sm-3 .col-6,
    .row.g-2.g-sm-3 .col-12 {
        flex: 0 0 100%;
        max-width: 100%;
        margin-bottom: 0.5rem;
    }
    
    .row.g-2.g-sm-3 .col-lg-3 .input-group {
        width: 100%;
    }
    
    /* ✅ FORCER 2 CARTES PAR LIGNE SUR MOBILE */
    .row.g-2.g-sm-3 .col-6 {
        flex: 0 0 50%;
        max-width: 50%;
        padding-left: 0.25rem;
        padding-right: 0.25rem;
        margin-bottom: 0.5rem;
    }
    
    .category-card .card-title {
        font-size: 0.8rem;
    }
    .category-card .card-title small {
        font-size: 0.65rem;
    }
    
    .category-image-wrapper {
        height: 120px;
    }
    
    .category-card .card-body {
        padding: 0.5rem !important;
    }
    
    .category-card .btn-sm {
        font-size: 0.6rem;
        padding: 0.15rem 0.3rem;
    }
    
    .category-badges .badge {
        font-size: 7px;
        padding: 2px 4px;
    }
    .category-badges .badge i {
        display: none;
    }
    
    .category-card .d-flex.justify-content-between.align-items-center.mb-3 {
        flex-direction: column;
        gap: 0.25rem;
    }
    .category-card .d-flex.justify-content-between.align-items-center.mb-3 > div {
        width: 100%;
        min-width: unset !important;
    }
    
    .d-flex.gap-2.mt-auto {
        flex-wrap: wrap;
    }
    .d-flex.gap-2.mt-auto .btn {
        flex: 1 1 calc(50% - 0.25rem);
        font-size: 0.55rem;
        padding: 0.15rem 0.2rem;
    }
    
    .dropdown-menu {
        font-size: 0.8rem;
    }
    
    .card-header .d-flex.gap-1.gap-sm-2 {
        flex-wrap: wrap;
        width: 100%;
    }
    .card-header .d-flex.gap-1.gap-sm-2 .btn {
        flex: 1 1 auto;
        min-width: calc(33% - 0.25rem);
    }
}

@media (max-width: 480px) {
    .container-fluid {
        padding-left: 0.25rem !important;
        padding-right: 0.25rem !important;
    }
    
    .stat-item .h3 {
        font-size: 0.9rem !important;
    }
    .stat-item .text-uppercase {
        font-size: 0.45rem !important;
    }
    .stat-item .fa-2x {
        font-size: 1rem !important;
    }
    .stat-item .p-3 {
        padding: 0.35rem !important;
    }
    
    /* ✅ FORCER 2 CARTES PAR LIGNE SUR TRÈS PETIT ÉCRAN */
    .row.g-2.g-sm-3 .col-6 {
        flex: 0 0 50%;
        max-width: 50%;
        padding-left: 0.15rem;
        padding-right: 0.15rem;
        margin-bottom: 0.35rem;
    }
    
    .category-image-wrapper {
        height: 90px;
    }
    
    .category-card .card-title {
        font-size: 0.65rem;
        line-height: 1.2;
    }
    .category-card .card-title small {
        font-size: 0.55rem;
    }
    
    .category-card .card-body {
        padding: 0.35rem !important;
    }
    
    .category-card .card-text {
        font-size: 0.55rem !important;
        margin-bottom: 0.25rem !important;
        line-height: 1.2;
    }
    
    .category-card .text-muted.small {
        font-size: 0.5rem !important;
    }
    
    .category-badges .badge {
        font-size: 5px;
        padding: 1px 3px;
        border-radius: 2px;
    }
    
    .d-flex.gap-2.mt-auto .btn {
        flex: 1 1 100%;
        font-size: 0.45rem;
        padding: 0.1rem 0.15rem;
    }
    
    .category-card .dropdown .btn-sm {
        font-size: 0.5rem;
        padding: 0.1rem 0.2rem;
    }
    
    .card-header .d-flex.gap-1.gap-sm-2 .btn {
        flex: 1 1 100%;
        font-size: 0.55rem;
        padding: 0.15rem 0.3rem;
    }
    
    .pagination .page-link {
        font-size: 0.65rem;
        padding: 0.25rem 0.5rem;
    }
    
    .modal .btn-lg {
        font-size: 0.75rem;
        padding: 0.35rem 0.6rem;
    }
    
    .category-card .d-flex.justify-content-between.align-items-center.mb-2.gap-1 {
        flex-direction: row !important;
        flex-wrap: wrap;
    }
    .category-card .d-flex.justify-content-between.align-items-center.mb-2.gap-1 > div {
        flex: 1 1 calc(50% - 0.25rem);
        min-width: unset !important;
    }
}

/* Désactiver hover sur mobile */
@media (max-width: 768px) {
    .category-card:hover {
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

    // line 397
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

        // line 398
        yield "<div class=\"container-fluid px-4\">
    <!-- En-tête avec quota et bouton d'ajout -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap\">
        <div class=\"w-100 w-md-auto\">
            <h1 class=\"h3 mb-0 text-gray-800\">
                <i class=\"fas fa-tags me-2\"></i><span class=\"d-none d-sm-inline\">Gestion des catégories</span>
                <span class=\"d-inline d-sm-none\">Catégories</span>
            </h1>
            <p class=\"text-muted d-none d-sm-block\">Organisez vos produits par catégories et sous-catégories</p>
        </div>
        
        <div class=\"d-flex align-items-center gap-3 flex-wrap w-100 w-md-auto\">
            <!-- Indicateur de quota -->
            <div class=\"card bg-light p-2 p-sm-3 flex-grow-1 flex-md-grow-0 w-100 w-md-auto\">
                <div class=\"d-flex align-items-center justify-content-center justify-content-md-start\">
                    <div class=\"me-2 me-sm-3\">
                        <span class=\"badge bg-primary p-2\">
                            <i class=\"fas fa-chart-line\"></i>
                        </span>
                    </div>
                    <div>
                        <small class=\"text-muted d-none d-sm-block\">Catégories dans quota</small>
                        <h5 class=\"mb-0 ";
        // line 420
        yield (((($tmp = (isset($context["quotaReached"]) || array_key_exists("quotaReached", $context) ? $context["quotaReached"] : (function () { throw new RuntimeError('Variable "quotaReached" does not exist.', 420, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-danger") : ("text-success"));
        yield "\" style=\"font-size: 0.9rem;\">
                            ";
        // line 421
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activeCount"]) || array_key_exists("activeCount", $context) ? $context["activeCount"] : (function () { throw new RuntimeError('Variable "activeCount" does not exist.', 421, $this->source); })()), "html", null, true);
        yield " / ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["quota"]) || array_key_exists("quota", $context) ? $context["quota"] : (function () { throw new RuntimeError('Variable "quota" does not exist.', 421, $this->source); })()), "html", null, true);
        yield "
                            ";
        // line 422
        if (((isset($context["quota"]) || array_key_exists("quota", $context) ? $context["quota"] : (function () { throw new RuntimeError('Variable "quota" does not exist.', 422, $this->source); })()) == "Illimité")) {
            // line 423
            yield "                                <i class=\"fas fa-infinity text-info ms-1\"></i>
                            ";
        }
        // line 425
        yield "                        </h5>
                        ";
        // line 426
        if ((($tmp = (isset($context["quotaReached"]) || array_key_exists("quotaReached", $context) ? $context["quotaReached"] : (function () { throw new RuntimeError('Variable "quotaReached" does not exist.', 426, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 427
            yield "                            <small class=\"text-danger d-none d-sm-block\">Quota atteint</small>
                        ";
        }
        // line 429
        yield "                    </div>
                </div>
            </div>

            ";
        // line 434
        yield "            ";
        if (((isset($context["subscriptionInactiveCount"]) || array_key_exists("subscriptionInactiveCount", $context) ? $context["subscriptionInactiveCount"] : (function () { throw new RuntimeError('Variable "subscriptionInactiveCount" does not exist.', 434, $this->source); })()) > 0)) {
            // line 435
            yield "            <div class=\"card bg-light p-2 p-sm-3 flex-grow-1 flex-md-grow-0 w-100 w-md-auto\">
                <div class=\"d-flex align-items-center justify-content-center justify-content-md-start\">
                    <div class=\"me-2 me-sm-3\">
                        <span class=\"badge bg-warning p-2\">
                            <i class=\"fas fa-clock\"></i>
                        </span>
                    </div>
                    <div>
                        <small class=\"text-muted d-none d-sm-block\">En attente</small>
                        <h5 class=\"mb-0\">";
            // line 444
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subscriptionInactiveCount"]) || array_key_exists("subscriptionInactiveCount", $context) ? $context["subscriptionInactiveCount"] : (function () { throw new RuntimeError('Variable "subscriptionInactiveCount" does not exist.', 444, $this->source); })()), "html", null, true);
            yield "</h5>
                        <small class=\"d-none d-sm-block\">désactivées par quota</small>
                    </div>
                </div>
            </div>
            ";
        }
        // line 450
        yield "
            ";
        // line 452
        yield "            <a href=\"#\" id=\"newCategoryBtn\" class=\"btn btn-primary btn-sm flex-grow-1 flex-md-grow-0 w-100 w-md-auto\">
                <i class=\"fas fa-plus-circle me-1\"></i> <span class=\"d-none d-sm-inline\">Nouvelle Catégorie</span>
                <span class=\"d-inline d-sm-none\">Nouvelle</span>
            </a>
        </div>
    </div>

    ";
        // line 460
        yield "    ";
        if (((isset($context["quotaReached"]) || array_key_exists("quotaReached", $context) ? $context["quotaReached"] : (function () { throw new RuntimeError('Variable "quotaReached" does not exist.', 460, $this->source); })()) && ((isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 460, $this->source); })()) != "premium"))) {
            // line 461
            yield "    <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
        <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-2\">
            <div>
                <i class=\"fas fa-exclamation-triangle me-2\"></i>
                <strong>Quota atteint !</strong> Vous avez utilisé vos ";
            // line 465
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["quota"]) || array_key_exists("quota", $context) ? $context["quota"] : (function () { throw new RuntimeError('Variable "quota" does not exist.', 465, $this->source); })()), "html", null, true);
            yield " catégories dans le quota.
            </div>
            <a href=\"";
            // line 467
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subscription_plans");
            yield "\" class=\"btn btn-warning btn-sm w-100 w-sm-auto\">
                <i class=\"fas fa-arrow-up me-1\"></i> Voir les offres
            </a>
        </div>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    </div>
    ";
        }
        // line 474
        yield "
    ";
        // line 476
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 476, $this->source); })()), "flashes", ["success"], "method", false, false, false, 476));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 477
            yield "        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
            <i class=\"fas fa-check-circle me-2\"></i> ";
            // line 478
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 482
        yield "    
    ";
        // line 483
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 483, $this->source); })()), "flashes", ["error"], "method", false, false, false, 483));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 484
            yield "        <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
            <i class=\"fas fa-exclamation-circle me-2\"></i> ";
            // line 485
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 489
        yield "
    <!-- Container des statistiques dynamiques -->
    <div class=\"card shadow mb-4\">
        <div class=\"card-header bg-white py-2 py-sm-3\">
            <h5 class=\"mb-0 small\">
                <i class=\"fas fa-chart-pie me-2\"></i><span class=\"d-none d-sm-inline\">Statistiques selon les filtres</span>
            </h5>
        </div>
        <div class=\"card-body p-2 p-sm-3\">
            <!-- Première ligne : 4 cartes -->
            <div class=\"row g-2 mb-2\">
                <div class=\"col-6 col-md-3\">
                    <div class=\"stat-item p-2 p-sm-3 bg-light rounded h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-primary text-uppercase small fw-bold d-block\">Total</span>
                                <h3 class=\"mb-0\">";
        // line 505
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalFiltered"]) || array_key_exists("totalFiltered", $context) ? $context["totalFiltered"] : (function () { throw new RuntimeError('Variable "totalFiltered" does not exist.', 505, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-folder fa-2x text-primary opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-6 col-md-3\">
                    <div class=\"stat-item p-2 p-sm-3 bg-light rounded h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-success text-uppercase small fw-bold d-block\">Actives</span>
                                <h3 class=\"mb-0 text-success\">";
        // line 516
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activeFiltered"]) || array_key_exists("activeFiltered", $context) ? $context["activeFiltered"] : (function () { throw new RuntimeError('Variable "activeFiltered" does not exist.', 516, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-check-circle fa-2x text-success opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-6 col-md-3\">
                    <div class=\"stat-item p-2 p-sm-3 bg-light rounded h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-danger text-uppercase small fw-bold d-block\">Inactives</span>
                                <h3 class=\"mb-0 text-danger\">";
        // line 527
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["inactiveFiltered"]) || array_key_exists("inactiveFiltered", $context) ? $context["inactiveFiltered"] : (function () { throw new RuntimeError('Variable "inactiveFiltered" does not exist.', 527, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-pause-circle fa-2x text-danger opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-6 col-md-3\">
                    <div class=\"stat-item p-2 p-sm-3 bg-light rounded h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-info text-uppercase small fw-bold d-block\">Principales</span>
                                <h3 class=\"mb-0 text-info\">";
        // line 538
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["mainFiltered"]) || array_key_exists("mainFiltered", $context) ? $context["mainFiltered"] : (function () { throw new RuntimeError('Variable "mainFiltered" does not exist.', 538, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-sitemap fa-2x text-info opacity-50\"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- ✅ Deuxième ligne : 3 cartes - CORRIGÉ POUR MOBILE -->
            <div class=\"row g-2\">
                ";
        // line 549
        yield "                <div class=\"col-6 col-md-4\">
                    <div class=\"stat-item p-2 p-sm-3 bg-light rounded h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-warning text-uppercase small fw-bold d-block\">Sous-catég.</span>
                                <h3 class=\"mb-0 text-warning\">";
        // line 554
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subFiltered"]) || array_key_exists("subFiltered", $context) ? $context["subFiltered"] : (function () { throw new RuntimeError('Variable "subFiltered" does not exist.', 554, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-folder-tree fa-2x text-warning opacity-50\"></i>
                        </div>
                    </div>
                </div>
                
                ";
        // line 562
        yield "                <div class=\"col-6 col-md-4\">
                    <div class=\"stat-item p-2 p-sm-3 bg-light rounded h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-info text-uppercase small fw-bold d-block\">Abonnement actif</span>
                                <h3 class=\"mb-0 text-info\">";
        // line 567
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subscriptionActiveFiltered"]) || array_key_exists("subscriptionActiveFiltered", $context) ? $context["subscriptionActiveFiltered"] : (function () { throw new RuntimeError('Variable "subscriptionActiveFiltered" does not exist.', 567, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-database fa-2x text-info opacity-50\"></i>
                        </div>
                    </div>
                </div>
                
                ";
        // line 575
        yield "                <div class=\"col-12 col-md-4\">
                    <div class=\"stat-item p-2 p-sm-3 bg-light rounded h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-secondary text-uppercase small fw-bold d-block\">Abonnement inactif</span>
                                <h3 class=\"mb-0 text-secondary\">";
        // line 580
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subscriptionInactiveFiltered"]) || array_key_exists("subscriptionInactiveFiltered", $context) ? $context["subscriptionInactiveFiltered"] : (function () { throw new RuntimeError('Variable "subscriptionInactiveFiltered" does not exist.', 580, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-clock fa-2x text-secondary opacity-50\"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            ";
        // line 589
        yield "            ";
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 589, $this->source); })()) == "pharmacy")) {
            // line 590
            yield "            <div class=\"row g-2 mt-2 pt-2 border-top\">
                <div class=\"col-6 col-md-6\">
                    <div class=\"stat-item p-2 p-sm-3 bg-light rounded h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-success text-uppercase small fw-bold d-block\">Visibles</span>
                                <h3 class=\"mb-0 text-success\">";
            // line 596
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["visibleFiltered"]) || array_key_exists("visibleFiltered", $context) ? $context["visibleFiltered"] : (function () { throw new RuntimeError('Variable "visibleFiltered" does not exist.', 596, $this->source); })()), "html", null, true);
            yield "</h3>
                            </div>
                            <i class=\"fas fa-eye fa-2x text-success opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-6 col-md-6\">
                    <div class=\"stat-item p-2 p-sm-3 bg-light rounded h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-secondary text-uppercase small fw-bold d-block\">Masquées</span>
                                <h3 class=\"mb-0 text-secondary\">";
            // line 607
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["hiddenFiltered"]) || array_key_exists("hiddenFiltered", $context) ? $context["hiddenFiltered"] : (function () { throw new RuntimeError('Variable "hiddenFiltered" does not exist.', 607, $this->source); })()), "html", null, true);
            yield "</h3>
                            </div>
                            <i class=\"fas fa-eye-slash fa-2x text-secondary opacity-50\"></i>
                        </div>
                    </div>
                </div>
            </div>
            ";
        }
        // line 615
        yield "        </div>
    </div>

    <!-- Formulaire de filtres -->
    <div class=\"card shadow mb-4\">
        <div class=\"card-header bg-white py-2 py-sm-3 d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <h5 class=\"mb-0 small\">
                <i class=\"fas fa-filter me-2\"></i><span class=\"d-none d-sm-inline\">Filtres</span>
            </h5>
            <div class=\"d-flex gap-1 gap-sm-2 flex-wrap w-100 w-md-auto\">
                <button type=\"submit\" form=\"filter-form\" class=\"btn btn-primary btn-sm flex-grow-1 flex-md-grow-0\">
                    <i class=\"fas fa-filter me-1\"></i> <span class=\"d-none d-sm-inline\">Filtrer</span>
                </button>
                <a href=\"";
        // line 628
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_index");
        yield "\" class=\"btn btn-outline-secondary btn-sm flex-grow-1 flex-md-grow-0\">
                    <i class=\"fas fa-undo me-1\"></i> <span class=\"d-none d-sm-inline\">Effacer</span>
                </a>
            </div>
        </div>
        <div class=\"card-body p-2 p-sm-3\">
            <form method=\"get\" id=\"filter-form\" class=\"row g-2 g-sm-3\">
                ";
        // line 636
        yield "                ";
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 636, $this->source); })()) == "restaurant")) {
            // line 637
            yield "                    <div class=\"col-12 col-sm-6 col-lg-3\">
                        <label for=\"search_restaurant\" class=\"form-label fw-bold small mb-1\">
                            <i class=\"fas fa-search text-primary me-1\"></i>Rechercher
                        </label>
                        <div class=\"input-group\">
                            <span class=\"input-group-text bg-white border-end-0\">
                                <i class=\"fas fa-search text-muted\"></i>
                            </span>
                            <input type=\"text\" name=\"search\" id=\"search_restaurant\" value=\"";
            // line 645
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 645, $this->source); })()), "html", null, true);
            yield "\" 
                                class=\"form-control form-control-sm border-start-0\" placeholder=\"Nom, description...\">
                        </div>
                    </div>
                    
                    <div class=\"col-12 col-sm-6 col-lg-3\">
                        <label for=\"status_restaurant\" class=\"form-label fw-bold small mb-1\">
                            <i class=\"fas fa-toggle-on text-success me-1\"></i>Statut
                        </label>
                        <select name=\"status\" id=\"status_restaurant\" class=\"form-select form-select-sm\">
                            <option value=\"all\" ";
            // line 655
            yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 655, $this->source); })()) == "all")) ? ("selected") : (""));
            yield ">Tous</option>
                            <option value=\"active\" ";
            // line 656
            yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 656, $this->source); })()) == "active")) ? ("selected") : (""));
            yield ">Actives</option>
                            <option value=\"inactive\" ";
            // line 657
            yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 657, $this->source); })()) == "inactive")) ? ("selected") : (""));
            yield ">Inactives</option>
                        </select>
                    </div>
                    
                    <div class=\"col-12 col-sm-6 col-lg-3\">
                        <label for=\"type_restaurant\" class=\"form-label fw-bold small mb-1\">
                            <i class=\"fas fa-sitemap text-info me-1\"></i>Type
                        </label>
                        <select name=\"type\" id=\"type_restaurant\" class=\"form-select form-select-sm\">
                            <option value=\"all\" ";
            // line 666
            yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 666, $this->source); })()) == "all")) ? ("selected") : (""));
            yield ">Toutes</option>
                            <option value=\"main\" ";
            // line 667
            yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 667, $this->source); })()) == "main")) ? ("selected") : (""));
            yield ">Principales</option>
                            <option value=\"sub\" ";
            // line 668
            yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 668, $this->source); })()) == "sub")) ? ("selected") : (""));
            yield ">Sous-catégories</option>
                        </select>
                    </div>
                    
                    <div class=\"col-12 col-sm-6 col-lg-3\">
                        <label for=\"sub_status_restaurant\" class=\"form-label fw-bold small mb-1\">
                            <i class=\"fas fa-credit-card text-warning me-1\"></i>Abonnement
                        </label>
                        <select name=\"sub_status\" id=\"sub_status_restaurant\" class=\"form-select form-select-sm\">
                            <option value=\"all\" ";
            // line 677
            yield ((((isset($context["subStatus"]) || array_key_exists("subStatus", $context) ? $context["subStatus"] : (function () { throw new RuntimeError('Variable "subStatus" does not exist.', 677, $this->source); })()) == "all")) ? ("selected") : (""));
            yield ">Tous</option>
                            <option value=\"active\" ";
            // line 678
            yield ((((isset($context["subStatus"]) || array_key_exists("subStatus", $context) ? $context["subStatus"] : (function () { throw new RuntimeError('Variable "subStatus" does not exist.', 678, $this->source); })()) == "active")) ? ("selected") : (""));
            yield ">Actif</option>
                            <option value=\"inactive\" ";
            // line 679
            yield ((((isset($context["subStatus"]) || array_key_exists("subStatus", $context) ? $context["subStatus"] : (function () { throw new RuntimeError('Variable "subStatus" does not exist.', 679, $this->source); })()) == "inactive")) ? ("selected") : (""));
            yield ">Inactif</option>
                        </select>
                    </div>

                ";
            // line 684
            yield "                ";
        } elseif (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 684, $this->source); })()) == "pharmacy")) {
            // line 685
            yield "                    <div class=\"col-12 col-sm-6 col-lg-4\">
                        <label for=\"search_pharmacy\" class=\"form-label fw-bold small mb-1\">
                            <i class=\"fas fa-search text-primary me-1\"></i>Rechercher
                        </label>
                        <div class=\"input-group\">
                            <span class=\"input-group-text bg-white border-end-0\">
                                <i class=\"fas fa-search text-muted\"></i>
                            </span>
                            <input type=\"text\" name=\"search\" id=\"search_pharmacy\" value=\"";
            // line 693
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 693, $this->source); })()), "html", null, true);
            yield "\" 
                                class=\"form-control form-control-sm border-start-0\" placeholder=\"Nom, description...\">
                        </div>
                    </div>
                    
                    <div class=\"col-12 col-sm-6 col-lg-4\">
                        <label for=\"status_pharmacy\" class=\"form-label fw-bold small mb-1\">
                            <i class=\"fas fa-toggle-on text-success me-1\"></i>Statut
                        </label>
                        <select name=\"status\" id=\"status_pharmacy\" class=\"form-select form-select-sm\">
                            <option value=\"all\" ";
            // line 703
            yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 703, $this->source); })()) == "all")) ? ("selected") : (""));
            yield ">Tous</option>
                            <option value=\"active\" ";
            // line 704
            yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 704, $this->source); })()) == "active")) ? ("selected") : (""));
            yield ">Actives</option>
                            <option value=\"inactive\" ";
            // line 705
            yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 705, $this->source); })()) == "inactive")) ? ("selected") : (""));
            yield ">Inactives</option>
                        </select>
                    </div>
                    
                    <div class=\"col-12 col-sm-6 col-lg-4\">
                        <label for=\"type_pharmacy\" class=\"form-label fw-bold small mb-1\">
                            <i class=\"fas fa-sitemap text-info me-1\"></i>Type
                        </label>
                        <select name=\"type\" id=\"type_pharmacy\" class=\"form-select form-select-sm\">
                            <option value=\"all\" ";
            // line 714
            yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 714, $this->source); })()) == "all")) ? ("selected") : (""));
            yield ">Toutes</option>
                            <option value=\"main\" ";
            // line 715
            yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 715, $this->source); })()) == "main")) ? ("selected") : (""));
            yield ">Principales</option>
                            <option value=\"sub\" ";
            // line 716
            yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 716, $this->source); })()) == "sub")) ? ("selected") : (""));
            yield ">Sous-catégories</option>
                        </select>
                    </div>
                    
                    <div class=\"col-12 col-sm-6 col-lg-4\">
                        <label for=\"sub_status_pharmacy\" class=\"form-label fw-bold small mb-1\">
                            <i class=\"fas fa-credit-card text-warning me-1\"></i>Abonnement
                        </label>
                        <select name=\"sub_status\" id=\"sub_status_pharmacy\" class=\"form-select form-select-sm\">
                            <option value=\"all\" ";
            // line 725
            yield ((((isset($context["subStatus"]) || array_key_exists("subStatus", $context) ? $context["subStatus"] : (function () { throw new RuntimeError('Variable "subStatus" does not exist.', 725, $this->source); })()) == "all")) ? ("selected") : (""));
            yield ">Tous</option>
                            <option value=\"active\" ";
            // line 726
            yield ((((isset($context["subStatus"]) || array_key_exists("subStatus", $context) ? $context["subStatus"] : (function () { throw new RuntimeError('Variable "subStatus" does not exist.', 726, $this->source); })()) == "active")) ? ("selected") : (""));
            yield ">Actif</option>
                            <option value=\"inactive\" ";
            // line 727
            yield ((((isset($context["subStatus"]) || array_key_exists("subStatus", $context) ? $context["subStatus"] : (function () { throw new RuntimeError('Variable "subStatus" does not exist.', 727, $this->source); })()) == "inactive")) ? ("selected") : (""));
            yield ">Inactif</option>
                        </select>
                    </div>
                    
                    <div class=\"col-12 col-sm-6 col-lg-4\">
                        <label for=\"visibility\" class=\"form-label fw-bold small mb-1\">
                            <i class=\"fas fa-eye text-info me-1\"></i>Visibilité
                        </label>
                        <select name=\"visibility\" id=\"visibility\" class=\"form-select form-select-sm\">
                            <option value=\"all\" ";
            // line 736
            yield ((((isset($context["visibility"]) || array_key_exists("visibility", $context) ? $context["visibility"] : (function () { throw new RuntimeError('Variable "visibility" does not exist.', 736, $this->source); })()) == "all")) ? ("selected") : (""));
            yield ">Toutes</option>
                            <option value=\"visible\" ";
            // line 737
            yield ((((isset($context["visibility"]) || array_key_exists("visibility", $context) ? $context["visibility"] : (function () { throw new RuntimeError('Variable "visibility" does not exist.', 737, $this->source); })()) == "visible")) ? ("selected") : (""));
            yield ">Visibles</option>
                            <option value=\"hidden\" ";
            // line 738
            yield ((((isset($context["visibility"]) || array_key_exists("visibility", $context) ? $context["visibility"] : (function () { throw new RuntimeError('Variable "visibility" does not exist.', 738, $this->source); })()) == "hidden")) ? ("selected") : (""));
            yield ">Masquées</option>
                        </select>
                    </div>
                    
                    <div class=\"col-12 col-sm-6 col-lg-4\">
                        <label for=\"promotion_pharmacy\" class=\"form-label fw-bold small mb-1\">
                            <i class=\"fas fa-tags text-danger me-1\"></i>Promotion
                        </label>
                        <select name=\"promotion\" id=\"promotion_pharmacy\" class=\"form-select form-select-sm\" style=\"width: 100%;\">
                            <option value=\"0\">🎯 Toutes les promotions</option>
                            ";
            // line 748
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 748, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
                // line 749
                yield "                                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 749), "html", null, true);
                yield "\" ";
                yield ((((isset($context["selectedPromotion"]) || array_key_exists("selectedPromotion", $context) ? $context["selectedPromotion"] : (function () { throw new RuntimeError('Variable "selectedPromotion" does not exist.', 749, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 749))) ? ("selected") : (""));
                yield ">
                                    ";
                // line 750
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "name", [], "any", false, false, false, 750), "html", null, true);
                yield "
                                    ";
                // line 751
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "discountPercentage", [], "any", false, false, false, 751)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 752
                    yield "                                        (-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "discountPercentage", [], "any", false, false, false, 752), "html", null, true);
                    yield "%)
                                    ";
                } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,                 // line 753
$context["promotion"], "discountAmount", [], "any", false, false, false, 753)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 754
                    yield "                                        (-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "discountAmount", [], "any", false, false, false, 754), 0, ",", " "), "html", null, true);
                    yield " FCFA)
                                    ";
                }
                // line 756
                yield "                                </option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['promotion'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 758
            yield "                        </select>
                    </div>

                ";
            // line 762
            yield "                ";
        } else {
            // line 763
            yield "                    <div class=\"col-12 col-sm-6 col-lg-3\">
                        <label for=\"search_other\" class=\"form-label fw-bold small mb-1\">
                            <i class=\"fas fa-search text-primary me-1\"></i>Rechercher
                        </label>
                        <div class=\"input-group\">
                            <span class=\"input-group-text bg-white border-end-0\">
                                <i class=\"fas fa-search text-muted\"></i>
                            </span>
                            <input type=\"text\" name=\"search\" id=\"search_other\" value=\"";
            // line 771
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 771, $this->source); })()), "html", null, true);
            yield "\" 
                                class=\"form-control form-control-sm border-start-0\" placeholder=\"Nom, description...\">
                        </div>
                    </div>
                    
                    <div class=\"col-12 col-sm-6 col-lg-2\">
                        <label for=\"status_other\" class=\"form-label fw-bold small mb-1\">
                            <i class=\"fas fa-toggle-on text-success me-1\"></i>Statut
                        </label>
                        <select name=\"status\" id=\"status_other\" class=\"form-select form-select-sm\">
                            <option value=\"all\" ";
            // line 781
            yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 781, $this->source); })()) == "all")) ? ("selected") : (""));
            yield ">Tous</option>
                            <option value=\"active\" ";
            // line 782
            yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 782, $this->source); })()) == "active")) ? ("selected") : (""));
            yield ">Actives</option>
                            <option value=\"inactive\" ";
            // line 783
            yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 783, $this->source); })()) == "inactive")) ? ("selected") : (""));
            yield ">Inactives</option>
                        </select>
                    </div>
                    
                    <div class=\"col-12 col-sm-6 col-lg-2\">
                        <label for=\"type_other\" class=\"form-label fw-bold small mb-1\">
                            <i class=\"fas fa-sitemap text-info me-1\"></i>Type
                        </label>
                        <select name=\"type\" id=\"type_other\" class=\"form-select form-select-sm\">
                            <option value=\"all\" ";
            // line 792
            yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 792, $this->source); })()) == "all")) ? ("selected") : (""));
            yield ">Toutes</option>
                            <option value=\"main\" ";
            // line 793
            yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 793, $this->source); })()) == "main")) ? ("selected") : (""));
            yield ">Principales</option>
                            <option value=\"sub\" ";
            // line 794
            yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 794, $this->source); })()) == "sub")) ? ("selected") : (""));
            yield ">Sous-catégories</option>
                        </select>
                    </div>
                    
                    <div class=\"col-12 col-sm-6 col-lg-2\">
                        <label for=\"sub_status_other\" class=\"form-label fw-bold small mb-1\">
                            <i class=\"fas fa-credit-card text-warning me-1\"></i>Abonnement
                        </label>
                        <select name=\"sub_status\" id=\"sub_status_other\" class=\"form-select form-select-sm\">
                            <option value=\"all\" ";
            // line 803
            yield ((((isset($context["subStatus"]) || array_key_exists("subStatus", $context) ? $context["subStatus"] : (function () { throw new RuntimeError('Variable "subStatus" does not exist.', 803, $this->source); })()) == "all")) ? ("selected") : (""));
            yield ">Tous</option>
                            <option value=\"active\" ";
            // line 804
            yield ((((isset($context["subStatus"]) || array_key_exists("subStatus", $context) ? $context["subStatus"] : (function () { throw new RuntimeError('Variable "subStatus" does not exist.', 804, $this->source); })()) == "active")) ? ("selected") : (""));
            yield ">Actif</option>
                            <option value=\"inactive\" ";
            // line 805
            yield ((((isset($context["subStatus"]) || array_key_exists("subStatus", $context) ? $context["subStatus"] : (function () { throw new RuntimeError('Variable "subStatus" does not exist.', 805, $this->source); })()) == "inactive")) ? ("selected") : (""));
            yield ">Inactif</option>
                        </select>
                    </div>
                    
                    <div class=\"col-12 col-sm-6 col-lg-3\">
                        <label for=\"promotion_other\" class=\"form-label fw-bold small mb-1\">
                            <i class=\"fas fa-tags text-danger me-1\"></i>Promotion
                        </label>
                        <select name=\"promotion\" id=\"promotion_other\" class=\"form-select form-select-sm\" style=\"width: 100%;\">
                            <option value=\"0\">🎯 Toutes les promotions</option>
                            ";
            // line 815
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 815, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
                // line 816
                yield "                                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 816), "html", null, true);
                yield "\" ";
                yield ((((isset($context["selectedPromotion"]) || array_key_exists("selectedPromotion", $context) ? $context["selectedPromotion"] : (function () { throw new RuntimeError('Variable "selectedPromotion" does not exist.', 816, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 816))) ? ("selected") : (""));
                yield ">
                                    ";
                // line 817
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "name", [], "any", false, false, false, 817), "html", null, true);
                yield "
                                    ";
                // line 818
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "discountPercentage", [], "any", false, false, false, 818)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 819
                    yield "                                        (-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "discountPercentage", [], "any", false, false, false, 819), "html", null, true);
                    yield "%)
                                    ";
                } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,                 // line 820
$context["promotion"], "discountAmount", [], "any", false, false, false, 820)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 821
                    yield "                                        (-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "discountAmount", [], "any", false, false, false, 821), 0, ",", " "), "html", null, true);
                    yield " FCFA)
                                    ";
                }
                // line 823
                yield "                                </option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['promotion'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 825
            yield "                        </select>
                    </div>
                ";
        }
        // line 828
        yield "            </form>
        </div>
    </div>

    ";
        // line 833
        yield "    ";
        if ((((isset($context["subStatus"]) || array_key_exists("subStatus", $context) ? $context["subStatus"] : (function () { throw new RuntimeError('Variable "subStatus" does not exist.', 833, $this->source); })()) == "inactive") && ((isset($context["subscriptionInactiveFiltered"]) || array_key_exists("subscriptionInactiveFiltered", $context) ? $context["subscriptionInactiveFiltered"] : (function () { throw new RuntimeError('Variable "subscriptionInactiveFiltered" does not exist.', 833, $this->source); })()) > 0))) {
            // line 834
            yield "        <div class=\"alert alert-info mb-4 small\">
            <i class=\"fas fa-info-circle me-2\"></i>
            <strong>";
            // line 836
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subscriptionInactiveFiltered"]) || array_key_exists("subscriptionInactiveFiltered", $context) ? $context["subscriptionInactiveFiltered"] : (function () { throw new RuntimeError('Variable "subscriptionInactiveFiltered" does not exist.', 836, $this->source); })()), "html", null, true);
            yield " catégorie(s)</strong> désactivées par abonnement.
        </div>
    ";
        }
        // line 839
        yield "
    ";
        // line 841
        yield "    ";
        if ((((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 841, $this->source); })()) == "pharmacy") && ((isset($context["visibility"]) || array_key_exists("visibility", $context) ? $context["visibility"] : (function () { throw new RuntimeError('Variable "visibility" does not exist.', 841, $this->source); })()) != "all"))) {
            // line 842
            yield "        <div class=\"alert alert-info mb-4 small\">
            <i class=\"fas fa-info-circle me-2\"></i>
            ";
            // line 844
            if (((isset($context["visibility"]) || array_key_exists("visibility", $context) ? $context["visibility"] : (function () { throw new RuntimeError('Variable "visibility" does not exist.', 844, $this->source); })()) == "visible")) {
                // line 845
                yield "                Affichage des catégories <strong>visibles</strong> sur le marketplace.
            ";
            } else {
                // line 847
                yield "                Affichage des catégories <strong>masquées</strong> sur le marketplace.
            ";
            }
            // line 849
            yield "        </div>
    ";
        }
        // line 851
        yield "
    <!-- ✅ Grille de cartes - 2 par ligne sur mobile -->
    <div class=\"row g-2 g-sm-3\">
        ";
        // line 854
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 854, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 855
            yield "        <div class=\"col-6 col-md-4 col-lg-3 col-xl-3\">
            <div class=\"category-card card h-100 border-0 shadow-sm overflow-hidden ";
            // line 856
            yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["category"], "subscriptionActive", [], "any", false, false, false, 856)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("border-warning") : (""));
            yield "\">
                <!-- Image -->
                <div class=\"category-image-wrapper\">
                    ";
            // line 859
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 859)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 860
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/categories/" . CoreExtension::getAttribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 860))), "html", null, true);
                yield "\" 
                            alt=\"";
                // line 861
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 861), "html", null, true);
                yield "\"
                            class=\"category-image\">
                    ";
            } else {
                // line 864
                yield "                        <div class=\"category-placeholder\">
                            <i class=\"fas fa-tags fa-3x fa-sm-4x text-muted\"></i>
                        </div>
                    ";
            }
            // line 868
            yield "                </div>

                <!-- Contenu -->
                <div class=\"card-body d-flex flex-column p-2 p-sm-3\">
                    <!-- Titre avec bouton burger -->
                    <div class=\"d-flex justify-content-between align-items-start mb-1\">
                        <h5 class=\"card-title text-truncate mb-0 small\" title=\"";
            // line 874
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 874), "html", null, true);
            yield "\">
                            ";
            // line 875
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 875)), "truncate", [16], "method", false, false, false, 875), "html", null, true);
            yield "
                            ";
            // line 876
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "parent", [], "any", false, false, false, 876)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 877
                yield "                                <br><small class=\"text-muted\"><i class=\"fas fa-level-up-alt me-1\"></i>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["category"], "parent", [], "any", false, false, false, 877), "name", [], "any", false, false, false, 877)), "truncate", [12], "method", false, false, false, 877), "html", null, true);
                yield "</small>
                            ";
            }
            // line 879
            yield "                        </h5>
                        <div class=\"dropdown ms-1 flex-shrink-0\">
                            <button class=\"btn btn-sm btn-light p-1\" type=\"button\" data-bs-toggle=\"dropdown\">
                                <i class=\"fas fa-bars\"></i>
                            </button>
                            <ul class=\"dropdown-menu dropdown-menu-end\">
                                <li>
                                    <a class=\"dropdown-item\" href=\"";
            // line 886
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 886)]), "html", null, true);
            yield "\">
                                        <i class=\"fas fa-eye me-2\"></i> Voir
                                    </a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item\" href=\"";
            // line 891
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 891)]), "html", null, true);
            yield "\">
                                        <i class=\"fas fa-edit me-2\"></i> Modifier
                                    </a>
                                </li>
                                <li>
                                    ";
            // line 896
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "subscriptionActive", [], "any", false, false, false, 896)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 897
                yield "                                        <button type=\"button\" 
                                                class=\"dropdown-item toggle-category-btn\"
                                                data-category-id=\"";
                // line 899
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 899), "html", null, true);
                yield "\"
                                                data-category-name=\"";
                // line 900
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 900), "html", null, true);
                yield "\"
                                                data-current-status=\"";
                // line 901
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "isActive", [], "any", false, false, false, 901)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : ("inactive"));
                yield "\"
                                                data-token=\"";
                // line 902
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle-status" . CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 902))), "html", null, true);
                yield "\">
                                            <i class=\"fas ";
                // line 903
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "isActive", [], "any", false, false, false, 903)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-toggle-on") : ("fa-toggle-off"));
                yield " me-2\"></i>
                                            ";
                // line 904
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "isActive", [], "any", false, false, false, 904)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
                yield "
                                        </button>
                                    ";
            } else {
                // line 907
                yield "                                        <span class=\"dropdown-item text-muted disabled\">
                                            <i class=\"fas fa-ban me-2\"></i> Non disponible
                                        </span>
                                    ";
            }
            // line 911
            yield "                                </li>
                                <li><hr class=\"dropdown-divider\"></li>
                                <li>
                                    ";
            // line 914
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 915
                yield "                                        <button type=\"button\" class=\"dropdown-item text-danger delete-category-btn\"
                                                data-category-id=\"";
                // line 916
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 916), "html", null, true);
                yield "\"
                                                data-category-name=\"";
                // line 917
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 917), "html", null, true);
                yield "\"
                                                data-has-products=\"";
                // line 918
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "products", [], "any", false, false, false, 918)) > 0)) ? ("true") : ("false"));
                yield "\"
                                                data-has-children=\"";
                // line 919
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 919)) > 0)) ? ("true") : ("false"));
                yield "\"
                                                data-token=\"";
                // line 920
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 920))), "html", null, true);
                yield "\">
                                            <i class=\"fas fa-trash me-2\"></i> Supprimer
                                        </button>
                                    ";
            }
            // line 924
            yield "                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Description -->
                    <p class=\"card-text text-muted small mb-2 d-none d-sm-block\">
                        ";
            // line 931
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "description", [], "any", true, true, false, 931)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 931), "Aucune description")) : ("Aucune description"))), "truncate", [60, "..."], "method", false, false, false, 931), "html", null, true);
            yield "
                    </p>
                    <p class=\"card-text text-muted small mb-2 d-block d-sm-none\">
                        ";
            // line 934
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "description", [], "any", true, true, false, 934)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 934), "Aucune description")) : ("Aucune description"))), "truncate", [35, "..."], "method", false, false, false, 934), "html", null, true);
            yield "
                    </p>
                    
                    <!-- ✅ Badges -->
                    <div class=\"category-badges\">
                        ";
            // line 939
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["category"], "subscriptionActive", [], "any", false, false, false, 939)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 940
                yield "                            <span class=\"badge bg-warning text-dark\">
                                <i class=\"fas fa-clock fa-xs me-1 d-none d-sm-inline\"></i> En attente
                            </span>
                        ";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 943
$context["category"], "isActive", [], "any", false, false, false, 943)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 944
                yield "                            <span class=\"badge bg-success\">
                                <i class=\"fas fa-check-circle fa-xs me-1 d-none d-sm-inline\"></i> Active
                            </span>
                        ";
            } else {
                // line 948
                yield "                            <span class=\"badge bg-danger\">
                                <i class=\"fas fa-pause-circle fa-xs me-1 d-none d-sm-inline\"></i> Désactivée
                            </span>
                        ";
            }
            // line 952
            yield "                        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "subscriptionActive", [], "any", false, false, false, 952)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 953
                yield "                            <span class=\"badge bg-info d-none d-sm-inline\">
                                <i class=\"fas fa-database fa-xs me-1\"></i> Quota
                            </span>
                        ";
            }
            // line 957
            yield "                        ";
            // line 958
            yield "                        ";
            if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 958, $this->source); })()) == "pharmacy")) {
                // line 959
                yield "                            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "companyPublic", [], "any", false, false, false, 959)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 960
                    yield "                                <span class=\"badge bg-primary\">
                                    <i class=\"fas fa-eye fa-xs me-1\"></i> Visible
                                </span>
                            ";
                } else {
                    // line 964
                    yield "                                <span class=\"badge bg-secondary\">
                                    <i class=\"fas fa-eye-slash fa-xs me-1\"></i> Masquée
                                </span>
                            ";
                }
                // line 968
                yield "                        ";
            }
            // line 969
            yield "                    </div>

                    <!-- Compteurs Produits & Sous-catégories -->
                    <div class=\"d-flex justify-content-between align-items-center mb-2 gap-1\">
                        <div class=\"text-center px-1 py-1 bg-light rounded flex-fill\" style=\"font-size: 0.7rem;\">
                            <i class=\"fas fa-box text-primary me-1\"></i>
                            <span class=\"fw-bold\">";
            // line 975
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "products", [], "any", false, false, false, 975)), "html", null, true);
            yield "</span>
                            <small class=\"text-muted d-block\" style=\"font-size: 0.55rem;\">Produits</small>
                        </div>
                        <div class=\"text-center px-1 py-1 bg-light rounded flex-fill\" style=\"font-size: 0.7rem;\">
                            <i class=\"fas fa-sitemap text-info me-1\"></i>
                            <span class=\"fw-bold\">";
            // line 980
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 980)), "html", null, true);
            yield "</span>
                            <small class=\"text-muted d-block\" style=\"font-size: 0.55rem;\">sous-catég.</small>
                        </div>
                    </div>

                    <!-- Boutons d'action secondaires -->
                    <div class=\"d-flex gap-1 mt-auto flex-wrap\">
                        <a href=\"";
            // line 987
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_products", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 987)]), "html", null, true);
            yield "\" 
                           class=\"btn btn-sm btn-outline-info flex-fill\" style=\"font-size: 0.6rem;\">
                            <i class=\"fas fa-list\"></i> <span class=\"d-none d-sm-inline\">Produits</span>
                        </a>
                        ";
            // line 991
            if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 991, $this->source); })()) != "restaurant")) {
                // line 992
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_promotions", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 992)]), "html", null, true);
                yield "\" 
                           class=\"btn btn-sm btn-outline-warning flex-fill\" style=\"font-size: 0.6rem;\">
                            <i class=\"fas fa-percent me-1\"></i> <span class=\"d-none d-sm-inline\">Promotions</span>
                        </a>
                        ";
            }
            // line 997
            yield "                    </div>
                </div>
            </div>
        </div>
        ";
            $context['_iterated'] = true;
        }
        // line 1001
        if (!$context['_iterated']) {
            // line 1002
            yield "        <div class=\"col-12\">
            <div class=\"card shadow\">
                <div class=\"card-body text-center py-5\">
                    <i class=\"fas fa-tags fa-4x text-muted mb-3\"></i>
                    <h4 class=\"text-muted\">Aucune catégorie trouvée</h4>
                    <a href=\"";
            // line 1007
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_index");
            yield "\" class=\"btn btn-outline-primary\">
                        <i class=\"fas fa-undo me-1\"></i> Réinitialiser les filtres
                    </a>
                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1014
        yield "    </div>

    <!-- Pagination -->
    ";
        // line 1017
        if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 1017, $this->source); })()) > 1)) {
            // line 1018
            yield "    <div class=\"row mt-4\">
        <div class=\"col-12\">
            <nav aria-label=\"Pagination\">
                <ul class=\"pagination justify-content-center flex-wrap\">
                    ";
            // line 1022
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 1022, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 1023
                yield "                        <li class=\"page-item ";
                yield ((($context["i"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 1023, $this->source); })()))) ? ("active") : (""));
                yield "\">
                            <a class=\"page-link\" href=\"";
                // line 1024
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1024, $this->source); })()), "request", [], "any", false, false, false, 1024), "query", [], "any", false, false, false, 1024), "all", [], "any", false, false, false, 1024), ["page" => $context["i"]])), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "</a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1027
            yield "                </ul>
            </nav>
        </div>
    </div>
    ";
        }
        // line 1032
        yield "</div>

";
        // line 1035
        yield "
";
        // line 1037
        yield "<div class=\"modal fade\" id=\"quotaReachedModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-warning text-dark\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Quota atteint
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <i class=\"fas fa-ban fa-4x text-warning mb-3\"></i>
                <h5>Vous avez atteint votre limite de ";
        // line 1048
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["quota"]) || array_key_exists("quota", $context) ? $context["quota"] : (function () { throw new RuntimeError('Variable "quota" does not exist.', 1048, $this->source); })()), "html", null, true);
        yield " catégories dans le quota.</h5>
                <p class=\"text-muted\">Pour ajouter de nouvelles catégories, passez à un plan supérieur.</p>
            </div>
            <div class=\"modal-footer justify-content-center flex-wrap\">
                <a href=\"";
        // line 1052
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subscription_plans");
        yield "\" class=\"btn btn-warning btn-lg px-4 w-100 w-sm-auto\">
                    <i class=\"fas fa-arrow-up me-2\"></i> Voir les offres
                </a>
                <button type=\"button\" class=\"btn btn-outline-secondary w-100 w-sm-auto\" data-bs-dismiss=\"modal\">
                    Annuler
                </button>
            </div>
        </div>
    </div>
</div>

";
        // line 1064
        yield "<div class=\"modal fade\" id=\"toggleCategoryModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"toggleModalTitle\">Confirmation</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <i class=\"fas fa-question-circle fa-4x text-primary mb-3\"></i>
                <p id=\"toggleModalMessage\">...</p>
            </div>
            <div class=\"modal-footer justify-content-center flex-wrap\">
                <form id=\"toggleCategoryForm\" method=\"post\" style=\"display: inline;\">
                    <input type=\"hidden\" name=\"_token\" id=\"toggleCategoryToken\" value=\"\">
                    <button type=\"submit\" class=\"btn btn-primary px-4 w-100 w-sm-auto\">
                        <i class=\"fas fa-check me-2\"></i> Confirmer
                    </button>
                </form>
                <button type=\"button\" class=\"btn btn-outline-secondary w-100 w-sm-auto\" data-bs-dismiss=\"modal\">
                    Annuler
                </button>
            </div>
        </div>
    </div>
</div>

";
        // line 1091
        yield "<div class=\"modal fade\" id=\"deleteCategoryModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Confirmation de suppression
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <div id=\"deleteCategoryModalContent\"></div>
            </div>
            <div class=\"modal-footer flex-wrap gap-2\">
                <button type=\"button\" class=\"btn btn-secondary flex-grow-1 flex-md-grow-0\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"deleteCategoryForm\" method=\"post\" action=\"\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteCategoryToken\" value=\"\">
                    <button type=\"submit\" class=\"btn btn-danger flex-grow-1 flex-md-grow-0\" id=\"deleteCategoryConfirmBtn\">Supprimer</button>
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

    // line 1115
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

        // line 1116
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/fr.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // ========== Initialisation Select2 pour la promotion ==========
    if (document.getElementById('promotion_pharmacy')) {
        \$('#promotion_pharmacy').select2({
            theme: 'bootstrap-5',
            language: 'fr',
            placeholder: '🎯 Sélectionnez une promotion',
            allowClear: true,
            width: '100%',
            dropdownParent: \$('#promotion_pharmacy').parent()
        });
    }
    if (document.getElementById('promotion_other')) {
        \$('#promotion_other').select2({
            theme: 'bootstrap-5',
            language: 'fr',
            placeholder: '🎯 Sélectionnez une promotion',
            allowClear: true,
            width: '100%',
            dropdownParent: \$('#promotion_other').parent()
        });
    }

    // ========== 1. Gestion du bouton \"Nouvelle Catégorie\" ==========
    const newCategoryBtn = document.getElementById('newCategoryBtn');
    if (newCategoryBtn) {
        newCategoryBtn.addEventListener('click', function(e) {
            e.preventDefault();
            ";
        // line 1148
        if ((($tmp = (isset($context["quotaReached"]) || array_key_exists("quotaReached", $context) ? $context["quotaReached"] : (function () { throw new RuntimeError('Variable "quotaReached" does not exist.', 1148, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1149
            yield "                const quotaModal = new bootstrap.Modal(document.getElementById('quotaReachedModal'));
                quotaModal.show();
            ";
        } else {
            // line 1152
            yield "                window.location.href = \"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_new");
            yield "\";
            ";
        }
        // line 1154
        yield "        });
    }

    // ========== 2. Modale pour toggle ==========
    const toggleModal = new bootstrap.Modal(document.getElementById('toggleCategoryModal'));
    const toggleForm = document.getElementById('toggleCategoryForm');
    const toggleToken = document.getElementById('toggleCategoryToken');
    const toggleMessage = document.getElementById('toggleModalMessage');

    document.querySelectorAll('.toggle-category-btn').forEach(button => {
        button.addEventListener('click', function() {
            const categoryId = this.dataset.categoryId;
            const categoryName = this.dataset.categoryName;
            const currentStatus = this.dataset.currentStatus;
            const action = currentStatus === 'active' ? 'désactiver' : 'activer';
            
            toggleMessage.innerText = `Êtes-vous sûr de vouloir \${action} la catégorie \"\${categoryName}\" ?`;
            toggleForm.action = `/admin/category/\${categoryId}/toggle-status`;
            toggleToken.value = this.dataset.token;
            toggleModal.show();
        });
    });

    // ========== 3. Gestion de la suppression ==========
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteCategoryModal'));
    const deleteForm = document.getElementById('deleteCategoryForm');
    const deleteToken = document.getElementById('deleteCategoryToken');
    const deleteConfirmBtn = document.getElementById('deleteCategoryConfirmBtn');
    const deleteModalContent = document.getElementById('deleteCategoryModalContent');

    document.querySelectorAll('.delete-category-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const id = this.dataset.categoryId;
            const name = this.dataset.categoryName;
            const hasProducts = this.dataset.hasProducts === 'true';
            const hasChildren = this.dataset.hasChildren === 'true';
            const token = this.dataset.token;

            deleteForm.action = `/admin/category/\${id}`;
            deleteToken.value = token;

            if (hasProducts || hasChildren) {
                let message = '';
                if (hasProducts && hasChildren) {
                    message = `Cette catégorie contient des produits et des sous-catégories.`;
                } else if (hasProducts) {
                    message = `Cette catégorie contient des produits.`;
                } else if (hasChildren) {
                    message = `Cette catégorie contient des sous-catégories.`;
                }
                message += ` Pour confirmer la suppression, saisissez exactement le nom \"\${name}\".`;
                deleteModalContent.innerHTML = `
                    <div class=\"alert alert-warning small\">
                        <i class=\"fas fa-exclamation-triangle me-2\"></i>
                        \${message}
                    </div>
                    <div class=\"input-group mt-3\">
                        <span class=\"input-group-text\"><i class=\"fas fa-tag\"></i></span>
                        <input type=\"text\" id=\"deleteConfirmName\" class=\"form-control form-control-sm\" placeholder=\"Saisissez le nom de la catégorie\">
                    </div>
                `;
                deleteConfirmBtn.disabled = true;

                const confirmInput = document.getElementById('deleteConfirmName');
                if (confirmInput) {
                    confirmInput.addEventListener('input', function() {
                        deleteConfirmBtn.disabled = this.value.trim() !== name;
                    });
                }
            } else {
                deleteModalContent.innerHTML = `
                    <p>Êtes-vous sûr de vouloir supprimer la catégorie <strong>\"\${name}\"</strong> ?</p>
                    <p class=\"text-danger small\"><i class=\"fas fa-exclamation-circle me-1\"></i>Cette action est irréversible.</p>
                `;
                deleteConfirmBtn.disabled = false;
            }

            deleteModal.show();
        });
    });

    // Nettoyer le modal à la fermeture
    deleteModal._element.addEventListener('hidden.bs.modal', function() {
        deleteConfirmBtn.disabled = false;
        deleteModalContent.innerHTML = '';
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
        return "admin/category/index.html.twig";
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
        return array (  1768 => 1154,  1762 => 1152,  1757 => 1149,  1755 => 1148,  1720 => 1116,  1707 => 1115,  1674 => 1091,  1646 => 1064,  1632 => 1052,  1625 => 1048,  1612 => 1037,  1609 => 1035,  1605 => 1032,  1598 => 1027,  1587 => 1024,  1582 => 1023,  1578 => 1022,  1572 => 1018,  1570 => 1017,  1565 => 1014,  1552 => 1007,  1545 => 1002,  1543 => 1001,  1535 => 997,  1526 => 992,  1524 => 991,  1517 => 987,  1507 => 980,  1499 => 975,  1491 => 969,  1488 => 968,  1482 => 964,  1476 => 960,  1473 => 959,  1470 => 958,  1468 => 957,  1462 => 953,  1459 => 952,  1453 => 948,  1447 => 944,  1445 => 943,  1440 => 940,  1438 => 939,  1430 => 934,  1424 => 931,  1415 => 924,  1408 => 920,  1404 => 919,  1400 => 918,  1396 => 917,  1392 => 916,  1389 => 915,  1387 => 914,  1382 => 911,  1376 => 907,  1370 => 904,  1366 => 903,  1362 => 902,  1358 => 901,  1354 => 900,  1350 => 899,  1346 => 897,  1344 => 896,  1336 => 891,  1328 => 886,  1319 => 879,  1313 => 877,  1311 => 876,  1307 => 875,  1303 => 874,  1295 => 868,  1289 => 864,  1283 => 861,  1278 => 860,  1276 => 859,  1270 => 856,  1267 => 855,  1262 => 854,  1257 => 851,  1253 => 849,  1249 => 847,  1245 => 845,  1243 => 844,  1239 => 842,  1236 => 841,  1233 => 839,  1227 => 836,  1223 => 834,  1220 => 833,  1214 => 828,  1209 => 825,  1202 => 823,  1196 => 821,  1194 => 820,  1189 => 819,  1187 => 818,  1183 => 817,  1176 => 816,  1172 => 815,  1159 => 805,  1155 => 804,  1151 => 803,  1139 => 794,  1135 => 793,  1131 => 792,  1119 => 783,  1115 => 782,  1111 => 781,  1098 => 771,  1088 => 763,  1085 => 762,  1080 => 758,  1073 => 756,  1067 => 754,  1065 => 753,  1060 => 752,  1058 => 751,  1054 => 750,  1047 => 749,  1043 => 748,  1030 => 738,  1026 => 737,  1022 => 736,  1010 => 727,  1006 => 726,  1002 => 725,  990 => 716,  986 => 715,  982 => 714,  970 => 705,  966 => 704,  962 => 703,  949 => 693,  939 => 685,  936 => 684,  929 => 679,  925 => 678,  921 => 677,  909 => 668,  905 => 667,  901 => 666,  889 => 657,  885 => 656,  881 => 655,  868 => 645,  858 => 637,  855 => 636,  845 => 628,  830 => 615,  819 => 607,  805 => 596,  797 => 590,  794 => 589,  783 => 580,  776 => 575,  766 => 567,  759 => 562,  749 => 554,  742 => 549,  729 => 538,  715 => 527,  701 => 516,  687 => 505,  669 => 489,  659 => 485,  656 => 484,  652 => 483,  649 => 482,  639 => 478,  636 => 477,  631 => 476,  628 => 474,  618 => 467,  613 => 465,  607 => 461,  604 => 460,  595 => 452,  592 => 450,  583 => 444,  572 => 435,  569 => 434,  563 => 429,  559 => 427,  557 => 426,  554 => 425,  550 => 423,  548 => 422,  542 => 421,  538 => 420,  514 => 398,  501 => 397,  102 => 8,  89 => 7,  66 => 5,  43 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/category/index.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}Catégories de produits - HMA Market{% endblock %}

{% block stylesheets %}
{{ parent() }}
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
<link href=\"https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css\" rel=\"stylesheet\" />
<style>
.category-card {
    transition: transform 0.2s, box-shadow 0.2s;
    border-radius: 15px;
    overflow: hidden;
}
.category-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.1) !important;
}

.category-image-wrapper {
    height: 130px;
    overflow: hidden;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
}

.category-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s;
}

.category-card:hover .category-image {
    transform: scale(1.05);
}

.category-placeholder {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.stat-item {
    transition: transform 0.2s;
}
.stat-item:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}

.category-badges {
    display: flex;
    flex-wrap: wrap;
    gap: 4px;
    margin-top: 0.5rem;
}
.category-badges .badge {
    font-size: 9px;
    padding: 3px 6px;
}

/* ✅ Styles Select2 */
.select2-container--bootstrap-5 .select2-selection {
    height: 38px !important;
    padding: 0 !important;
}
.select2-container--bootstrap-5 .select2-selection--single {
    height: 38px !important;
    border-radius: 8px !important;
    background-color: #fff !important;
    border-color: #dee2e6 !important;
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
.select2-container--bootstrap-5 .select2-dropdown {
    border-color: #e9ecef !important;
    border-radius: 8px !important;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1) !important;
}
.select2-container--bootstrap-5 .select2-search--dropdown .select2-search__field {
    padding: 8px 12px !important;
    border-radius: 6px !important;
    border-color: #e9ecef !important;
}
.select2-container--bootstrap-5 .select2-results__option {
    padding: 8px 12px !important;
}
.select2-container--bootstrap-5 .select2-results__option--selected {
    background-color: #0463f1 !important;
    color: white !important;
}
.select2-container--bootstrap-5 .select2-results__option--highlighted {
    background-color: #e9ecef !important;
    color: #0463f1 !important;
}
.form-select.bg-light.border-0 {
    height: 38px;
    padding: 8px 12px;
}

/* ✅ RESPONSIVE - 2 CARTES PAR LIGNE SUR MOBILE */
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
    
    .breadcrumb {
        font-size: 0.7rem;
    }
    
    /* ✅ Statistiques : 2 par ligne sur mobile */
    .row.g-2 .col-6 {
        flex: 0 0 50%;
        max-width: 50%;
        padding-left: 0.25rem;
        padding-right: 0.25rem;
        margin-bottom: 0.5rem;
    }
    
    .stat-item .h3 {
        font-size: 1.1rem !important;
    }
    .stat-item .text-uppercase {
        font-size: 0.55rem !important;
    }
    .stat-item .fa-2x {
        font-size: 1.3rem !important;
    }
    .stat-item .p-3 {
        padding: 0.5rem !important;
    }
    
    /* ✅ Filtres : tous les champs en colonne sur mobile */
    .row.g-2.g-sm-3 .col-6,
    .row.g-2.g-sm-3 .col-12 {
        flex: 0 0 100%;
        max-width: 100%;
        margin-bottom: 0.5rem;
    }
    
    .row.g-2.g-sm-3 .col-lg-3 .input-group {
        width: 100%;
    }
    
    /* ✅ FORCER 2 CARTES PAR LIGNE SUR MOBILE */
    .row.g-2.g-sm-3 .col-6 {
        flex: 0 0 50%;
        max-width: 50%;
        padding-left: 0.25rem;
        padding-right: 0.25rem;
        margin-bottom: 0.5rem;
    }
    
    .category-card .card-title {
        font-size: 0.8rem;
    }
    .category-card .card-title small {
        font-size: 0.65rem;
    }
    
    .category-image-wrapper {
        height: 120px;
    }
    
    .category-card .card-body {
        padding: 0.5rem !important;
    }
    
    .category-card .btn-sm {
        font-size: 0.6rem;
        padding: 0.15rem 0.3rem;
    }
    
    .category-badges .badge {
        font-size: 7px;
        padding: 2px 4px;
    }
    .category-badges .badge i {
        display: none;
    }
    
    .category-card .d-flex.justify-content-between.align-items-center.mb-3 {
        flex-direction: column;
        gap: 0.25rem;
    }
    .category-card .d-flex.justify-content-between.align-items-center.mb-3 > div {
        width: 100%;
        min-width: unset !important;
    }
    
    .d-flex.gap-2.mt-auto {
        flex-wrap: wrap;
    }
    .d-flex.gap-2.mt-auto .btn {
        flex: 1 1 calc(50% - 0.25rem);
        font-size: 0.55rem;
        padding: 0.15rem 0.2rem;
    }
    
    .dropdown-menu {
        font-size: 0.8rem;
    }
    
    .card-header .d-flex.gap-1.gap-sm-2 {
        flex-wrap: wrap;
        width: 100%;
    }
    .card-header .d-flex.gap-1.gap-sm-2 .btn {
        flex: 1 1 auto;
        min-width: calc(33% - 0.25rem);
    }
}

@media (max-width: 480px) {
    .container-fluid {
        padding-left: 0.25rem !important;
        padding-right: 0.25rem !important;
    }
    
    .stat-item .h3 {
        font-size: 0.9rem !important;
    }
    .stat-item .text-uppercase {
        font-size: 0.45rem !important;
    }
    .stat-item .fa-2x {
        font-size: 1rem !important;
    }
    .stat-item .p-3 {
        padding: 0.35rem !important;
    }
    
    /* ✅ FORCER 2 CARTES PAR LIGNE SUR TRÈS PETIT ÉCRAN */
    .row.g-2.g-sm-3 .col-6 {
        flex: 0 0 50%;
        max-width: 50%;
        padding-left: 0.15rem;
        padding-right: 0.15rem;
        margin-bottom: 0.35rem;
    }
    
    .category-image-wrapper {
        height: 90px;
    }
    
    .category-card .card-title {
        font-size: 0.65rem;
        line-height: 1.2;
    }
    .category-card .card-title small {
        font-size: 0.55rem;
    }
    
    .category-card .card-body {
        padding: 0.35rem !important;
    }
    
    .category-card .card-text {
        font-size: 0.55rem !important;
        margin-bottom: 0.25rem !important;
        line-height: 1.2;
    }
    
    .category-card .text-muted.small {
        font-size: 0.5rem !important;
    }
    
    .category-badges .badge {
        font-size: 5px;
        padding: 1px 3px;
        border-radius: 2px;
    }
    
    .d-flex.gap-2.mt-auto .btn {
        flex: 1 1 100%;
        font-size: 0.45rem;
        padding: 0.1rem 0.15rem;
    }
    
    .category-card .dropdown .btn-sm {
        font-size: 0.5rem;
        padding: 0.1rem 0.2rem;
    }
    
    .card-header .d-flex.gap-1.gap-sm-2 .btn {
        flex: 1 1 100%;
        font-size: 0.55rem;
        padding: 0.15rem 0.3rem;
    }
    
    .pagination .page-link {
        font-size: 0.65rem;
        padding: 0.25rem 0.5rem;
    }
    
    .modal .btn-lg {
        font-size: 0.75rem;
        padding: 0.35rem 0.6rem;
    }
    
    .category-card .d-flex.justify-content-between.align-items-center.mb-2.gap-1 {
        flex-direction: row !important;
        flex-wrap: wrap;
    }
    .category-card .d-flex.justify-content-between.align-items-center.mb-2.gap-1 > div {
        flex: 1 1 calc(50% - 0.25rem);
        min-width: unset !important;
    }
}

/* Désactiver hover sur mobile */
@media (max-width: 768px) {
    .category-card:hover {
        transform: none !important;
    }
    .stat-item:hover {
        transform: none !important;
    }
}
</style>
{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
    <!-- En-tête avec quota et bouton d'ajout -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap\">
        <div class=\"w-100 w-md-auto\">
            <h1 class=\"h3 mb-0 text-gray-800\">
                <i class=\"fas fa-tags me-2\"></i><span class=\"d-none d-sm-inline\">Gestion des catégories</span>
                <span class=\"d-inline d-sm-none\">Catégories</span>
            </h1>
            <p class=\"text-muted d-none d-sm-block\">Organisez vos produits par catégories et sous-catégories</p>
        </div>
        
        <div class=\"d-flex align-items-center gap-3 flex-wrap w-100 w-md-auto\">
            <!-- Indicateur de quota -->
            <div class=\"card bg-light p-2 p-sm-3 flex-grow-1 flex-md-grow-0 w-100 w-md-auto\">
                <div class=\"d-flex align-items-center justify-content-center justify-content-md-start\">
                    <div class=\"me-2 me-sm-3\">
                        <span class=\"badge bg-primary p-2\">
                            <i class=\"fas fa-chart-line\"></i>
                        </span>
                    </div>
                    <div>
                        <small class=\"text-muted d-none d-sm-block\">Catégories dans quota</small>
                        <h5 class=\"mb-0 {{ quotaReached ? 'text-danger' : 'text-success' }}\" style=\"font-size: 0.9rem;\">
                            {{ activeCount }} / {{ quota }}
                            {% if quota == 'Illimité' %}
                                <i class=\"fas fa-infinity text-info ms-1\"></i>
                            {% endif %}
                        </h5>
                        {% if quotaReached %}
                            <small class=\"text-danger d-none d-sm-block\">Quota atteint</small>
                        {% endif %}
                    </div>
                </div>
            </div>

            {# Affichage du nombre de catégories en attente #}
            {% if subscriptionInactiveCount > 0 %}
            <div class=\"card bg-light p-2 p-sm-3 flex-grow-1 flex-md-grow-0 w-100 w-md-auto\">
                <div class=\"d-flex align-items-center justify-content-center justify-content-md-start\">
                    <div class=\"me-2 me-sm-3\">
                        <span class=\"badge bg-warning p-2\">
                            <i class=\"fas fa-clock\"></i>
                        </span>
                    </div>
                    <div>
                        <small class=\"text-muted d-none d-sm-block\">En attente</small>
                        <h5 class=\"mb-0\">{{ subscriptionInactiveCount }}</h5>
                        <small class=\"d-none d-sm-block\">désactivées par quota</small>
                    </div>
                </div>
            </div>
            {% endif %}

            {# Bouton Nouvelle Catégorie #}
            <a href=\"#\" id=\"newCategoryBtn\" class=\"btn btn-primary btn-sm flex-grow-1 flex-md-grow-0 w-100 w-md-auto\">
                <i class=\"fas fa-plus-circle me-1\"></i> <span class=\"d-none d-sm-inline\">Nouvelle Catégorie</span>
                <span class=\"d-inline d-sm-none\">Nouvelle</span>
            </a>
        </div>
    </div>

    {# Message si quota atteint #}
    {% if quotaReached and plan != 'premium' %}
    <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
        <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-2\">
            <div>
                <i class=\"fas fa-exclamation-triangle me-2\"></i>
                <strong>Quota atteint !</strong> Vous avez utilisé vos {{ quota }} catégories dans le quota.
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
        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
            <i class=\"fas fa-check-circle me-2\"></i> {{ message }}
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    {% endfor %}
    
    {% for message in app.flashes('error') %}
        <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
            <i class=\"fas fa-exclamation-circle me-2\"></i> {{ message }}
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    {% endfor %}

    <!-- Container des statistiques dynamiques -->
    <div class=\"card shadow mb-4\">
        <div class=\"card-header bg-white py-2 py-sm-3\">
            <h5 class=\"mb-0 small\">
                <i class=\"fas fa-chart-pie me-2\"></i><span class=\"d-none d-sm-inline\">Statistiques selon les filtres</span>
            </h5>
        </div>
        <div class=\"card-body p-2 p-sm-3\">
            <!-- Première ligne : 4 cartes -->
            <div class=\"row g-2 mb-2\">
                <div class=\"col-6 col-md-3\">
                    <div class=\"stat-item p-2 p-sm-3 bg-light rounded h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-primary text-uppercase small fw-bold d-block\">Total</span>
                                <h3 class=\"mb-0\">{{ totalFiltered }}</h3>
                            </div>
                            <i class=\"fas fa-folder fa-2x text-primary opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-6 col-md-3\">
                    <div class=\"stat-item p-2 p-sm-3 bg-light rounded h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-success text-uppercase small fw-bold d-block\">Actives</span>
                                <h3 class=\"mb-0 text-success\">{{ activeFiltered }}</h3>
                            </div>
                            <i class=\"fas fa-check-circle fa-2x text-success opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-6 col-md-3\">
                    <div class=\"stat-item p-2 p-sm-3 bg-light rounded h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-danger text-uppercase small fw-bold d-block\">Inactives</span>
                                <h3 class=\"mb-0 text-danger\">{{ inactiveFiltered }}</h3>
                            </div>
                            <i class=\"fas fa-pause-circle fa-2x text-danger opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-6 col-md-3\">
                    <div class=\"stat-item p-2 p-sm-3 bg-light rounded h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-info text-uppercase small fw-bold d-block\">Principales</span>
                                <h3 class=\"mb-0 text-info\">{{ mainFiltered }}</h3>
                            </div>
                            <i class=\"fas fa-sitemap fa-2x text-info opacity-50\"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- ✅ Deuxième ligne : 3 cartes - CORRIGÉ POUR MOBILE -->
            <div class=\"row g-2\">
                {# Carte Sous-catégories #}
                <div class=\"col-6 col-md-4\">
                    <div class=\"stat-item p-2 p-sm-3 bg-light rounded h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-warning text-uppercase small fw-bold d-block\">Sous-catég.</span>
                                <h3 class=\"mb-0 text-warning\">{{ subFiltered }}</h3>
                            </div>
                            <i class=\"fas fa-folder-tree fa-2x text-warning opacity-50\"></i>
                        </div>
                    </div>
                </div>
                
                {# Carte Abonnement actif #}
                <div class=\"col-6 col-md-4\">
                    <div class=\"stat-item p-2 p-sm-3 bg-light rounded h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-info text-uppercase small fw-bold d-block\">Abonnement actif</span>
                                <h3 class=\"mb-0 text-info\">{{ subscriptionActiveFiltered }}</h3>
                            </div>
                            <i class=\"fas fa-database fa-2x text-info opacity-50\"></i>
                        </div>
                    </div>
                </div>
                
                {# ✅ Carte Abonnement inactif - PLEINE LARGEUR SUR MOBILE #}
                <div class=\"col-12 col-md-4\">
                    <div class=\"stat-item p-2 p-sm-3 bg-light rounded h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-secondary text-uppercase small fw-bold d-block\">Abonnement inactif</span>
                                <h3 class=\"mb-0 text-secondary\">{{ subscriptionInactiveFiltered }}</h3>
                            </div>
                            <i class=\"fas fa-clock fa-2x text-secondary opacity-50\"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            {# ✅ Statistiques de visibilité (uniquement pour les pharmacies) #}
            {% if companyType == 'pharmacy' %}
            <div class=\"row g-2 mt-2 pt-2 border-top\">
                <div class=\"col-6 col-md-6\">
                    <div class=\"stat-item p-2 p-sm-3 bg-light rounded h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-success text-uppercase small fw-bold d-block\">Visibles</span>
                                <h3 class=\"mb-0 text-success\">{{ visibleFiltered }}</h3>
                            </div>
                            <i class=\"fas fa-eye fa-2x text-success opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-6 col-md-6\">
                    <div class=\"stat-item p-2 p-sm-3 bg-light rounded h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-secondary text-uppercase small fw-bold d-block\">Masquées</span>
                                <h3 class=\"mb-0 text-secondary\">{{ hiddenFiltered }}</h3>
                            </div>
                            <i class=\"fas fa-eye-slash fa-2x text-secondary opacity-50\"></i>
                        </div>
                    </div>
                </div>
            </div>
            {% endif %}
        </div>
    </div>

    <!-- Formulaire de filtres -->
    <div class=\"card shadow mb-4\">
        <div class=\"card-header bg-white py-2 py-sm-3 d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <h5 class=\"mb-0 small\">
                <i class=\"fas fa-filter me-2\"></i><span class=\"d-none d-sm-inline\">Filtres</span>
            </h5>
            <div class=\"d-flex gap-1 gap-sm-2 flex-wrap w-100 w-md-auto\">
                <button type=\"submit\" form=\"filter-form\" class=\"btn btn-primary btn-sm flex-grow-1 flex-md-grow-0\">
                    <i class=\"fas fa-filter me-1\"></i> <span class=\"d-none d-sm-inline\">Filtrer</span>
                </button>
                <a href=\"{{ path('app_admin_category_index') }}\" class=\"btn btn-outline-secondary btn-sm flex-grow-1 flex-md-grow-0\">
                    <i class=\"fas fa-undo me-1\"></i> <span class=\"d-none d-sm-inline\">Effacer</span>
                </a>
            </div>
        </div>
        <div class=\"card-body p-2 p-sm-3\">
            <form method=\"get\" id=\"filter-form\" class=\"row g-2 g-sm-3\">
                {# ✅ CAS RESTAURANT : TOUS LES CHAMPS EN PLEINE LARGEUR SUR MOBILE #}
                {% if companyType == 'restaurant' %}
                    <div class=\"col-12 col-sm-6 col-lg-3\">
                        <label for=\"search_restaurant\" class=\"form-label fw-bold small mb-1\">
                            <i class=\"fas fa-search text-primary me-1\"></i>Rechercher
                        </label>
                        <div class=\"input-group\">
                            <span class=\"input-group-text bg-white border-end-0\">
                                <i class=\"fas fa-search text-muted\"></i>
                            </span>
                            <input type=\"text\" name=\"search\" id=\"search_restaurant\" value=\"{{ search }}\" 
                                class=\"form-control form-control-sm border-start-0\" placeholder=\"Nom, description...\">
                        </div>
                    </div>
                    
                    <div class=\"col-12 col-sm-6 col-lg-3\">
                        <label for=\"status_restaurant\" class=\"form-label fw-bold small mb-1\">
                            <i class=\"fas fa-toggle-on text-success me-1\"></i>Statut
                        </label>
                        <select name=\"status\" id=\"status_restaurant\" class=\"form-select form-select-sm\">
                            <option value=\"all\" {{ status == 'all' ? 'selected' : '' }}>Tous</option>
                            <option value=\"active\" {{ status == 'active' ? 'selected' : '' }}>Actives</option>
                            <option value=\"inactive\" {{ status == 'inactive' ? 'selected' : '' }}>Inactives</option>
                        </select>
                    </div>
                    
                    <div class=\"col-12 col-sm-6 col-lg-3\">
                        <label for=\"type_restaurant\" class=\"form-label fw-bold small mb-1\">
                            <i class=\"fas fa-sitemap text-info me-1\"></i>Type
                        </label>
                        <select name=\"type\" id=\"type_restaurant\" class=\"form-select form-select-sm\">
                            <option value=\"all\" {{ type == 'all' ? 'selected' : '' }}>Toutes</option>
                            <option value=\"main\" {{ type == 'main' ? 'selected' : '' }}>Principales</option>
                            <option value=\"sub\" {{ type == 'sub' ? 'selected' : '' }}>Sous-catégories</option>
                        </select>
                    </div>
                    
                    <div class=\"col-12 col-sm-6 col-lg-3\">
                        <label for=\"sub_status_restaurant\" class=\"form-label fw-bold small mb-1\">
                            <i class=\"fas fa-credit-card text-warning me-1\"></i>Abonnement
                        </label>
                        <select name=\"sub_status\" id=\"sub_status_restaurant\" class=\"form-select form-select-sm\">
                            <option value=\"all\" {{ subStatus == 'all' ? 'selected' : '' }}>Tous</option>
                            <option value=\"active\" {{ subStatus == 'active' ? 'selected' : '' }}>Actif</option>
                            <option value=\"inactive\" {{ subStatus == 'inactive' ? 'selected' : '' }}>Inactif</option>
                        </select>
                    </div>

                {# ✅ CAS PHARMACIE : 2 lignes de 3 filtres #}
                {% elseif companyType == 'pharmacy' %}
                    <div class=\"col-12 col-sm-6 col-lg-4\">
                        <label for=\"search_pharmacy\" class=\"form-label fw-bold small mb-1\">
                            <i class=\"fas fa-search text-primary me-1\"></i>Rechercher
                        </label>
                        <div class=\"input-group\">
                            <span class=\"input-group-text bg-white border-end-0\">
                                <i class=\"fas fa-search text-muted\"></i>
                            </span>
                            <input type=\"text\" name=\"search\" id=\"search_pharmacy\" value=\"{{ search }}\" 
                                class=\"form-control form-control-sm border-start-0\" placeholder=\"Nom, description...\">
                        </div>
                    </div>
                    
                    <div class=\"col-12 col-sm-6 col-lg-4\">
                        <label for=\"status_pharmacy\" class=\"form-label fw-bold small mb-1\">
                            <i class=\"fas fa-toggle-on text-success me-1\"></i>Statut
                        </label>
                        <select name=\"status\" id=\"status_pharmacy\" class=\"form-select form-select-sm\">
                            <option value=\"all\" {{ status == 'all' ? 'selected' : '' }}>Tous</option>
                            <option value=\"active\" {{ status == 'active' ? 'selected' : '' }}>Actives</option>
                            <option value=\"inactive\" {{ status == 'inactive' ? 'selected' : '' }}>Inactives</option>
                        </select>
                    </div>
                    
                    <div class=\"col-12 col-sm-6 col-lg-4\">
                        <label for=\"type_pharmacy\" class=\"form-label fw-bold small mb-1\">
                            <i class=\"fas fa-sitemap text-info me-1\"></i>Type
                        </label>
                        <select name=\"type\" id=\"type_pharmacy\" class=\"form-select form-select-sm\">
                            <option value=\"all\" {{ type == 'all' ? 'selected' : '' }}>Toutes</option>
                            <option value=\"main\" {{ type == 'main' ? 'selected' : '' }}>Principales</option>
                            <option value=\"sub\" {{ type == 'sub' ? 'selected' : '' }}>Sous-catégories</option>
                        </select>
                    </div>
                    
                    <div class=\"col-12 col-sm-6 col-lg-4\">
                        <label for=\"sub_status_pharmacy\" class=\"form-label fw-bold small mb-1\">
                            <i class=\"fas fa-credit-card text-warning me-1\"></i>Abonnement
                        </label>
                        <select name=\"sub_status\" id=\"sub_status_pharmacy\" class=\"form-select form-select-sm\">
                            <option value=\"all\" {{ subStatus == 'all' ? 'selected' : '' }}>Tous</option>
                            <option value=\"active\" {{ subStatus == 'active' ? 'selected' : '' }}>Actif</option>
                            <option value=\"inactive\" {{ subStatus == 'inactive' ? 'selected' : '' }}>Inactif</option>
                        </select>
                    </div>
                    
                    <div class=\"col-12 col-sm-6 col-lg-4\">
                        <label for=\"visibility\" class=\"form-label fw-bold small mb-1\">
                            <i class=\"fas fa-eye text-info me-1\"></i>Visibilité
                        </label>
                        <select name=\"visibility\" id=\"visibility\" class=\"form-select form-select-sm\">
                            <option value=\"all\" {{ visibility == 'all' ? 'selected' : '' }}>Toutes</option>
                            <option value=\"visible\" {{ visibility == 'visible' ? 'selected' : '' }}>Visibles</option>
                            <option value=\"hidden\" {{ visibility == 'hidden' ? 'selected' : '' }}>Masquées</option>
                        </select>
                    </div>
                    
                    <div class=\"col-12 col-sm-6 col-lg-4\">
                        <label for=\"promotion_pharmacy\" class=\"form-label fw-bold small mb-1\">
                            <i class=\"fas fa-tags text-danger me-1\"></i>Promotion
                        </label>
                        <select name=\"promotion\" id=\"promotion_pharmacy\" class=\"form-select form-select-sm\" style=\"width: 100%;\">
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

                {# ✅ CAS AUTRES (market, retail, etc.) : 5 filtres #}
                {% else %}
                    <div class=\"col-12 col-sm-6 col-lg-3\">
                        <label for=\"search_other\" class=\"form-label fw-bold small mb-1\">
                            <i class=\"fas fa-search text-primary me-1\"></i>Rechercher
                        </label>
                        <div class=\"input-group\">
                            <span class=\"input-group-text bg-white border-end-0\">
                                <i class=\"fas fa-search text-muted\"></i>
                            </span>
                            <input type=\"text\" name=\"search\" id=\"search_other\" value=\"{{ search }}\" 
                                class=\"form-control form-control-sm border-start-0\" placeholder=\"Nom, description...\">
                        </div>
                    </div>
                    
                    <div class=\"col-12 col-sm-6 col-lg-2\">
                        <label for=\"status_other\" class=\"form-label fw-bold small mb-1\">
                            <i class=\"fas fa-toggle-on text-success me-1\"></i>Statut
                        </label>
                        <select name=\"status\" id=\"status_other\" class=\"form-select form-select-sm\">
                            <option value=\"all\" {{ status == 'all' ? 'selected' : '' }}>Tous</option>
                            <option value=\"active\" {{ status == 'active' ? 'selected' : '' }}>Actives</option>
                            <option value=\"inactive\" {{ status == 'inactive' ? 'selected' : '' }}>Inactives</option>
                        </select>
                    </div>
                    
                    <div class=\"col-12 col-sm-6 col-lg-2\">
                        <label for=\"type_other\" class=\"form-label fw-bold small mb-1\">
                            <i class=\"fas fa-sitemap text-info me-1\"></i>Type
                        </label>
                        <select name=\"type\" id=\"type_other\" class=\"form-select form-select-sm\">
                            <option value=\"all\" {{ type == 'all' ? 'selected' : '' }}>Toutes</option>
                            <option value=\"main\" {{ type == 'main' ? 'selected' : '' }}>Principales</option>
                            <option value=\"sub\" {{ type == 'sub' ? 'selected' : '' }}>Sous-catégories</option>
                        </select>
                    </div>
                    
                    <div class=\"col-12 col-sm-6 col-lg-2\">
                        <label for=\"sub_status_other\" class=\"form-label fw-bold small mb-1\">
                            <i class=\"fas fa-credit-card text-warning me-1\"></i>Abonnement
                        </label>
                        <select name=\"sub_status\" id=\"sub_status_other\" class=\"form-select form-select-sm\">
                            <option value=\"all\" {{ subStatus == 'all' ? 'selected' : '' }}>Tous</option>
                            <option value=\"active\" {{ subStatus == 'active' ? 'selected' : '' }}>Actif</option>
                            <option value=\"inactive\" {{ subStatus == 'inactive' ? 'selected' : '' }}>Inactif</option>
                        </select>
                    </div>
                    
                    <div class=\"col-12 col-sm-6 col-lg-3\">
                        <label for=\"promotion_other\" class=\"form-label fw-bold small mb-1\">
                            <i class=\"fas fa-tags text-danger me-1\"></i>Promotion
                        </label>
                        <select name=\"promotion\" id=\"promotion_other\" class=\"form-select form-select-sm\" style=\"width: 100%;\">
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
                {% endif %}
            </form>
        </div>
    </div>

    {# Message informatif quand on filtre par abonnement inactif #}
    {% if subStatus == 'inactive' and subscriptionInactiveFiltered > 0 %}
        <div class=\"alert alert-info mb-4 small\">
            <i class=\"fas fa-info-circle me-2\"></i>
            <strong>{{ subscriptionInactiveFiltered }} catégorie(s)</strong> désactivées par abonnement.
        </div>
    {% endif %}

    {# Message filtre visibilité (pour les pharmacies) #}
    {% if companyType == 'pharmacy' and visibility != 'all' %}
        <div class=\"alert alert-info mb-4 small\">
            <i class=\"fas fa-info-circle me-2\"></i>
            {% if visibility == 'visible' %}
                Affichage des catégories <strong>visibles</strong> sur le marketplace.
            {% else %}
                Affichage des catégories <strong>masquées</strong> sur le marketplace.
            {% endif %}
        </div>
    {% endif %}

    <!-- ✅ Grille de cartes - 2 par ligne sur mobile -->
    <div class=\"row g-2 g-sm-3\">
        {% for category in categories %}
        <div class=\"col-6 col-md-4 col-lg-3 col-xl-3\">
            <div class=\"category-card card h-100 border-0 shadow-sm overflow-hidden {{ not category.subscriptionActive ? 'border-warning' : '' }}\">
                <!-- Image -->
                <div class=\"category-image-wrapper\">
                    {% if category.image %}
                        <img src=\"{{ asset('uploads/categories/' ~ category.image) }}\" 
                            alt=\"{{ category.name }}\"
                            class=\"category-image\">
                    {% else %}
                        <div class=\"category-placeholder\">
                            <i class=\"fas fa-tags fa-3x fa-sm-4x text-muted\"></i>
                        </div>
                    {% endif %}
                </div>

                <!-- Contenu -->
                <div class=\"card-body d-flex flex-column p-2 p-sm-3\">
                    <!-- Titre avec bouton burger -->
                    <div class=\"d-flex justify-content-between align-items-start mb-1\">
                        <h5 class=\"card-title text-truncate mb-0 small\" title=\"{{ category.name }}\">
                            {{ category.name|u.truncate(16) }}
                            {% if category.parent %}
                                <br><small class=\"text-muted\"><i class=\"fas fa-level-up-alt me-1\"></i>{{ category.parent.name|u.truncate(12) }}</small>
                            {% endif %}
                        </h5>
                        <div class=\"dropdown ms-1 flex-shrink-0\">
                            <button class=\"btn btn-sm btn-light p-1\" type=\"button\" data-bs-toggle=\"dropdown\">
                                <i class=\"fas fa-bars\"></i>
                            </button>
                            <ul class=\"dropdown-menu dropdown-menu-end\">
                                <li>
                                    <a class=\"dropdown-item\" href=\"{{ path('app_admin_category_show', {'id': category.id}) }}\">
                                        <i class=\"fas fa-eye me-2\"></i> Voir
                                    </a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item\" href=\"{{ path('app_admin_category_edit', {'id': category.id}) }}\">
                                        <i class=\"fas fa-edit me-2\"></i> Modifier
                                    </a>
                                </li>
                                <li>
                                    {% if category.subscriptionActive %}
                                        <button type=\"button\" 
                                                class=\"dropdown-item toggle-category-btn\"
                                                data-category-id=\"{{ category.id }}\"
                                                data-category-name=\"{{ category.name }}\"
                                                data-current-status=\"{{ category.isActive ? 'active' : 'inactive' }}\"
                                                data-token=\"{{ csrf_token('toggle-status' ~ category.id) }}\">
                                            <i class=\"fas {{ category.isActive ? 'fa-toggle-on' : 'fa-toggle-off' }} me-2\"></i>
                                            {{ category.isActive ? 'Désactiver' : 'Activer' }}
                                        </button>
                                    {% else %}
                                        <span class=\"dropdown-item text-muted disabled\">
                                            <i class=\"fas fa-ban me-2\"></i> Non disponible
                                        </span>
                                    {% endif %}
                                </li>
                                <li><hr class=\"dropdown-divider\"></li>
                                <li>
                                    {% if is_granted('ROLE_ADMIN') %}
                                        <button type=\"button\" class=\"dropdown-item text-danger delete-category-btn\"
                                                data-category-id=\"{{ category.id }}\"
                                                data-category-name=\"{{ category.name }}\"
                                                data-has-products=\"{{ category.products|length > 0 ? 'true' : 'false' }}\"
                                                data-has-children=\"{{ category.children|length > 0 ? 'true' : 'false' }}\"
                                                data-token=\"{{ csrf_token('delete' ~ category.id) }}\">
                                            <i class=\"fas fa-trash me-2\"></i> Supprimer
                                        </button>
                                    {% endif %}
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Description -->
                    <p class=\"card-text text-muted small mb-2 d-none d-sm-block\">
                        {{ category.description|default('Aucune description')|u.truncate(60, '...') }}
                    </p>
                    <p class=\"card-text text-muted small mb-2 d-block d-sm-none\">
                        {{ category.description|default('Aucune description')|u.truncate(35, '...') }}
                    </p>
                    
                    <!-- ✅ Badges -->
                    <div class=\"category-badges\">
                        {% if not category.subscriptionActive %}
                            <span class=\"badge bg-warning text-dark\">
                                <i class=\"fas fa-clock fa-xs me-1 d-none d-sm-inline\"></i> En attente
                            </span>
                        {% elseif category.isActive %}
                            <span class=\"badge bg-success\">
                                <i class=\"fas fa-check-circle fa-xs me-1 d-none d-sm-inline\"></i> Active
                            </span>
                        {% else %}
                            <span class=\"badge bg-danger\">
                                <i class=\"fas fa-pause-circle fa-xs me-1 d-none d-sm-inline\"></i> Désactivée
                            </span>
                        {% endif %}
                        {% if category.subscriptionActive %}
                            <span class=\"badge bg-info d-none d-sm-inline\">
                                <i class=\"fas fa-database fa-xs me-1\"></i> Quota
                            </span>
                        {% endif %}
                        {# ✅ Badge de visibilité (pour les pharmacies) #}
                        {% if companyType == 'pharmacy' %}
                            {% if category.companyPublic %}
                                <span class=\"badge bg-primary\">
                                    <i class=\"fas fa-eye fa-xs me-1\"></i> Visible
                                </span>
                            {% else %}
                                <span class=\"badge bg-secondary\">
                                    <i class=\"fas fa-eye-slash fa-xs me-1\"></i> Masquée
                                </span>
                            {% endif %}
                        {% endif %}
                    </div>

                    <!-- Compteurs Produits & Sous-catégories -->
                    <div class=\"d-flex justify-content-between align-items-center mb-2 gap-1\">
                        <div class=\"text-center px-1 py-1 bg-light rounded flex-fill\" style=\"font-size: 0.7rem;\">
                            <i class=\"fas fa-box text-primary me-1\"></i>
                            <span class=\"fw-bold\">{{ category.products|length }}</span>
                            <small class=\"text-muted d-block\" style=\"font-size: 0.55rem;\">Produits</small>
                        </div>
                        <div class=\"text-center px-1 py-1 bg-light rounded flex-fill\" style=\"font-size: 0.7rem;\">
                            <i class=\"fas fa-sitemap text-info me-1\"></i>
                            <span class=\"fw-bold\">{{ category.children|length }}</span>
                            <small class=\"text-muted d-block\" style=\"font-size: 0.55rem;\">sous-catég.</small>
                        </div>
                    </div>

                    <!-- Boutons d'action secondaires -->
                    <div class=\"d-flex gap-1 mt-auto flex-wrap\">
                        <a href=\"{{ path('app_admin_category_products', {'id': category.id}) }}\" 
                           class=\"btn btn-sm btn-outline-info flex-fill\" style=\"font-size: 0.6rem;\">
                            <i class=\"fas fa-list\"></i> <span class=\"d-none d-sm-inline\">Produits</span>
                        </a>
                        {% if companyType != 'restaurant' %}
                        <a href=\"{{ path('app_admin_category_promotions', {'id': category.id}) }}\" 
                           class=\"btn btn-sm btn-outline-warning flex-fill\" style=\"font-size: 0.6rem;\">
                            <i class=\"fas fa-percent me-1\"></i> <span class=\"d-none d-sm-inline\">Promotions</span>
                        </a>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
        {% else %}
        <div class=\"col-12\">
            <div class=\"card shadow\">
                <div class=\"card-body text-center py-5\">
                    <i class=\"fas fa-tags fa-4x text-muted mb-3\"></i>
                    <h4 class=\"text-muted\">Aucune catégorie trouvée</h4>
                    <a href=\"{{ path('app_admin_category_index') }}\" class=\"btn btn-outline-primary\">
                        <i class=\"fas fa-undo me-1\"></i> Réinitialiser les filtres
                    </a>
                </div>
            </div>
        </div>
        {% endfor %}
    </div>

    <!-- Pagination -->
    {% if totalPages > 1 %}
    <div class=\"row mt-4\">
        <div class=\"col-12\">
            <nav aria-label=\"Pagination\">
                <ul class=\"pagination justify-content-center flex-wrap\">
                    {% for i in 1..totalPages %}
                        <li class=\"page-item {{ i == currentPage ? 'active' }}\">
                            <a class=\"page-link\" href=\"{{ path('app_admin_category_index', app.request.query.all|merge({'page': i})) }}\">{{ i }}</a>
                        </li>
                    {% endfor %}
                </ul>
            </nav>
        </div>
    </div>
    {% endif %}
</div>

{# ==================== MODALES ==================== #}

{# Modale pour quota atteint #}
<div class=\"modal fade\" id=\"quotaReachedModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-warning text-dark\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Quota atteint
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <i class=\"fas fa-ban fa-4x text-warning mb-3\"></i>
                <h5>Vous avez atteint votre limite de {{ quota }} catégories dans le quota.</h5>
                <p class=\"text-muted\">Pour ajouter de nouvelles catégories, passez à un plan supérieur.</p>
            </div>
            <div class=\"modal-footer justify-content-center flex-wrap\">
                <a href=\"{{ path('app_subscription_plans') }}\" class=\"btn btn-warning btn-lg px-4 w-100 w-sm-auto\">
                    <i class=\"fas fa-arrow-up me-2\"></i> Voir les offres
                </a>
                <button type=\"button\" class=\"btn btn-outline-secondary w-100 w-sm-auto\" data-bs-dismiss=\"modal\">
                    Annuler
                </button>
            </div>
        </div>
    </div>
</div>

{# Modale pour toggle #}
<div class=\"modal fade\" id=\"toggleCategoryModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"toggleModalTitle\">Confirmation</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <i class=\"fas fa-question-circle fa-4x text-primary mb-3\"></i>
                <p id=\"toggleModalMessage\">...</p>
            </div>
            <div class=\"modal-footer justify-content-center flex-wrap\">
                <form id=\"toggleCategoryForm\" method=\"post\" style=\"display: inline;\">
                    <input type=\"hidden\" name=\"_token\" id=\"toggleCategoryToken\" value=\"\">
                    <button type=\"submit\" class=\"btn btn-primary px-4 w-100 w-sm-auto\">
                        <i class=\"fas fa-check me-2\"></i> Confirmer
                    </button>
                </form>
                <button type=\"button\" class=\"btn btn-outline-secondary w-100 w-sm-auto\" data-bs-dismiss=\"modal\">
                    Annuler
                </button>
            </div>
        </div>
    </div>
</div>

{# Modale suppression #}
<div class=\"modal fade\" id=\"deleteCategoryModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Confirmation de suppression
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <div id=\"deleteCategoryModalContent\"></div>
            </div>
            <div class=\"modal-footer flex-wrap gap-2\">
                <button type=\"button\" class=\"btn btn-secondary flex-grow-1 flex-md-grow-0\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"deleteCategoryForm\" method=\"post\" action=\"\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteCategoryToken\" value=\"\">
                    <button type=\"submit\" class=\"btn btn-danger flex-grow-1 flex-md-grow-0\" id=\"deleteCategoryConfirmBtn\">Supprimer</button>
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
    // ========== Initialisation Select2 pour la promotion ==========
    if (document.getElementById('promotion_pharmacy')) {
        \$('#promotion_pharmacy').select2({
            theme: 'bootstrap-5',
            language: 'fr',
            placeholder: '🎯 Sélectionnez une promotion',
            allowClear: true,
            width: '100%',
            dropdownParent: \$('#promotion_pharmacy').parent()
        });
    }
    if (document.getElementById('promotion_other')) {
        \$('#promotion_other').select2({
            theme: 'bootstrap-5',
            language: 'fr',
            placeholder: '🎯 Sélectionnez une promotion',
            allowClear: true,
            width: '100%',
            dropdownParent: \$('#promotion_other').parent()
        });
    }

    // ========== 1. Gestion du bouton \"Nouvelle Catégorie\" ==========
    const newCategoryBtn = document.getElementById('newCategoryBtn');
    if (newCategoryBtn) {
        newCategoryBtn.addEventListener('click', function(e) {
            e.preventDefault();
            {% if quotaReached %}
                const quotaModal = new bootstrap.Modal(document.getElementById('quotaReachedModal'));
                quotaModal.show();
            {% else %}
                window.location.href = \"{{ path('app_admin_category_new') }}\";
            {% endif %}
        });
    }

    // ========== 2. Modale pour toggle ==========
    const toggleModal = new bootstrap.Modal(document.getElementById('toggleCategoryModal'));
    const toggleForm = document.getElementById('toggleCategoryForm');
    const toggleToken = document.getElementById('toggleCategoryToken');
    const toggleMessage = document.getElementById('toggleModalMessage');

    document.querySelectorAll('.toggle-category-btn').forEach(button => {
        button.addEventListener('click', function() {
            const categoryId = this.dataset.categoryId;
            const categoryName = this.dataset.categoryName;
            const currentStatus = this.dataset.currentStatus;
            const action = currentStatus === 'active' ? 'désactiver' : 'activer';
            
            toggleMessage.innerText = `Êtes-vous sûr de vouloir \${action} la catégorie \"\${categoryName}\" ?`;
            toggleForm.action = `/admin/category/\${categoryId}/toggle-status`;
            toggleToken.value = this.dataset.token;
            toggleModal.show();
        });
    });

    // ========== 3. Gestion de la suppression ==========
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteCategoryModal'));
    const deleteForm = document.getElementById('deleteCategoryForm');
    const deleteToken = document.getElementById('deleteCategoryToken');
    const deleteConfirmBtn = document.getElementById('deleteCategoryConfirmBtn');
    const deleteModalContent = document.getElementById('deleteCategoryModalContent');

    document.querySelectorAll('.delete-category-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const id = this.dataset.categoryId;
            const name = this.dataset.categoryName;
            const hasProducts = this.dataset.hasProducts === 'true';
            const hasChildren = this.dataset.hasChildren === 'true';
            const token = this.dataset.token;

            deleteForm.action = `/admin/category/\${id}`;
            deleteToken.value = token;

            if (hasProducts || hasChildren) {
                let message = '';
                if (hasProducts && hasChildren) {
                    message = `Cette catégorie contient des produits et des sous-catégories.`;
                } else if (hasProducts) {
                    message = `Cette catégorie contient des produits.`;
                } else if (hasChildren) {
                    message = `Cette catégorie contient des sous-catégories.`;
                }
                message += ` Pour confirmer la suppression, saisissez exactement le nom \"\${name}\".`;
                deleteModalContent.innerHTML = `
                    <div class=\"alert alert-warning small\">
                        <i class=\"fas fa-exclamation-triangle me-2\"></i>
                        \${message}
                    </div>
                    <div class=\"input-group mt-3\">
                        <span class=\"input-group-text\"><i class=\"fas fa-tag\"></i></span>
                        <input type=\"text\" id=\"deleteConfirmName\" class=\"form-control form-control-sm\" placeholder=\"Saisissez le nom de la catégorie\">
                    </div>
                `;
                deleteConfirmBtn.disabled = true;

                const confirmInput = document.getElementById('deleteConfirmName');
                if (confirmInput) {
                    confirmInput.addEventListener('input', function() {
                        deleteConfirmBtn.disabled = this.value.trim() !== name;
                    });
                }
            } else {
                deleteModalContent.innerHTML = `
                    <p>Êtes-vous sûr de vouloir supprimer la catégorie <strong>\"\${name}\"</strong> ?</p>
                    <p class=\"text-danger small\"><i class=\"fas fa-exclamation-circle me-1\"></i>Cette action est irréversible.</p>
                `;
                deleteConfirmBtn.disabled = false;
            }

            deleteModal.show();
        });
    });

    // Nettoyer le modal à la fermeture
    deleteModal._element.addEventListener('hidden.bs.modal', function() {
        deleteConfirmBtn.disabled = false;
        deleteModalContent.innerHTML = '';
    });
});
</script>
{% endblock %}", "admin/category/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\category\\index.html.twig");
    }
}
