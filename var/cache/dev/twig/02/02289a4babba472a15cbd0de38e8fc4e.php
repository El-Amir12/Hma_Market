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

/* admin/category_recipe/index.html.twig */
class __TwigTemplate_f7e420ce986ae8b5a927872b9836f6e3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/category_recipe/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/category_recipe/index.html.twig"));

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

        yield "Gestion des Catégories de Plats - HMA Market";
        
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
/* ============================================
   CARTES CATÉGORIES
   ============================================ */
.category-card {
    transition: transform 0.2s, box-shadow 0.2s;
    border-radius: 12px;
    overflow: hidden;
    border: 1px solid #eef0f3;
}
.category-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.15) !important;
    border-color: #dee2e6;
}
.category-card.border-warning {
    border: 2px solid #ffc107 !important;
}
.category-image-container {
    position: relative;
    height: 160px;
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
.category-image-placeholder {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
}
.btn.disabled {
    opacity: 0.5;
    cursor: not-allowed;
}

/* ============================================
   STATISTIQUES
   ============================================ */
.stat-item {
    transition: transform 0.2s;
}
.stat-item:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}

/* ============================================
   BADGES
   ============================================ */
.category-badges {
    display: flex;
    flex-wrap: wrap;
    gap: 4px;
    margin-bottom: 0.5rem;
}
.category-badges .badge {
    font-size: 9px;
    padding: 3px 6px;
}

/* ============================================
   SELECT2
   ============================================ */
.select2-container--bootstrap-5 .select2-selection {
    height: 38px !important;
    border-radius: 8px !important;
    background-color: #fff !important;
    border-color: #dee2e6 !important;
}
.select2-container--bootstrap-5 .select2-selection--single {
    height: 38px !important;
    display: flex !important;
    align-items: center !important;
}
.select2-container--bootstrap-5 .select2-selection--single .select2-selection__rendered {
    line-height: 36px !important;
    padding-left: 12px !important;
    color: #212529 !important;
}
.select2-container--bootstrap-5 .select2-selection--single .select2-selection__arrow {
    height: 36px !important;
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

/* ============================================
   BOUTONS ACTIONS
   ============================================ */
.action-buttons-row {
    display: flex;
    gap: 0.25rem;
    margin-top: auto;
    flex-wrap: wrap;
}
.action-buttons-row .btn {
    flex: 1 1 calc(50% - 0.125rem);
    font-size: 0.7rem;
    padding: 0.25rem 0.4rem;
}

/* ============================================
   ✅ BOUTON SUPPRIMER DANS LE MENU BURGER
   ============================================ */
.dropdown-menu .delete-category-btn {
    color: #dc3545 !important;
    font-weight: 600;
    padding: 0.6rem 1rem;
    border-radius: 0.25rem;
    margin: 0.125rem 0.5rem 0.25rem;
    background-color: #fff5f5;
}
.dropdown-menu .delete-category-btn:hover {
    background-color: #dc3545 !important;
    color: white !important;
}
.dropdown-menu .delete-category-btn i {
    color: #dc3545;
}
.dropdown-menu .delete-category-btn:hover i {
    color: white;
}

/* ============================================
   RESPONSIVE
   ============================================ */
@media (max-width: 992px) {
    .container-fluid {
        padding-left: 0.75rem !important;
        padding-right: 0.75rem !important;
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
    
    /* En-tête */
    .page-header {
        flex-direction: column !important;
        align-items: flex-start !important;
        gap: 0.75rem !important;
        width: 100%;
    }
    .page-header .header-actions {
        width: 100%;
        flex-direction: column;
        gap: 0.5rem;
    }
    .page-header .header-actions .btn,
    .page-header .header-actions .card {
        width: 100%;
    }
    h1.h4, h1.h3 {
        font-size: 1.1rem !important;
    }
    .breadcrumb {
        font-size: 0.7rem;
    }
    
    /* Statistiques : 2 par ligne */
    .row.g-2.mb-2 > .col-6,
    .row.g-2 > .col-6 {
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
    .stat-item .p-2 {
        padding: 0.5rem !important;
    }
    
    /* Filtres en colonne */
    .row.g-2.g-sm-3 > [class*=\"col-\"] {
        flex: 0 0 100%;
        max-width: 100%;
        margin-bottom: 0.5rem;
    }
    
    /* ✅ 2 CARTES PAR LIGNE SUR MOBILE */
    .row.g-2.g-sm-3 > .col-6 {
        flex: 0 0 50%;
        max-width: 50%;
        padding-left: 0.25rem;
        padding-right: 0.25rem;
    }
    
    .category-card .card-title {
        font-size: 0.8rem;
    }
    .category-card .card-title small {
        font-size: 0.65rem;
    }
    .category-image-container {
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
    .action-buttons-row {
        gap: 0.15rem;
    }
    .action-buttons-row .btn {
        flex: 1 1 100%;
        font-size: 0.6rem;
        padding: 0.2rem 0.3rem;
    }
    .dropdown-menu {
        font-size: 0.85rem;
    }
    
    /* ✅ BOUTON SUPPRIMER VISIBLE EN MOBILE */
    .dropdown-menu .delete-category-btn {
        padding: 0.65rem 1rem;
        font-size: 0.9rem;
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
    .stat-item .p-2 {
        padding: 0.35rem !important;
    }
    
    /* 2 CARTES PAR LIGNE */
    .row.g-2.g-sm-3 > .col-6 {
        flex: 0 0 50%;
        max-width: 50%;
        padding-left: 0.15rem;
        padding-right: 0.15rem;
        margin-bottom: 0.35rem;
    }
    
    .category-image-container {
        height: 90px;
    }
    .category-card .card-title {
        font-size: 0.7rem;
        line-height: 1.2;
    }
    .category-card .card-title small {
        font-size: 0.55rem;
    }
    .category-card .card-body {
        padding: 0.35rem !important;
    }
    .category-card .text-muted.small {
        font-size: 0.5rem !important;
    }
    .category-badges .badge {
        font-size: 5px;
        padding: 1px 3px;
        border-radius: 2px;
    }
    .action-buttons-row .btn {
        flex: 1 1 100%;
        font-size: 0.5rem;
        padding: 0.15rem 0.2rem;
    }
    .category-card .dropdown .btn-sm {
        font-size: 0.55rem;
        padding: 0.1rem 0.2rem;
    }
    .pagination .page-link {
        font-size: 0.65rem;
        padding: 0.25rem 0.5rem;
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

    // line 351
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

        // line 352
        yield "<div class=\"container-fluid px-2 px-md-4 py-2 py-md-3\">
    <!-- ============================================
         EN-TÊTE
         ============================================ -->
    <div class=\"page-header d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center mb-3 mb-md-4 flex-wrap gap-2\">
        <div class=\"w-100 w-md-auto\">
            <h1 class=\"h4 h-md-3 mb-0 text-gray-800\">
                <i class=\"fas fa-utensils me-2\"></i>
                <span class=\"d-none d-sm-inline\">Gestion des sections de menu</span>
                <span class=\"d-inline d-sm-none\">Sections menu</span>
            </h1>
            <p class=\"text-muted mt-1 small d-none d-sm-block\">Organisez vos plats par catégories et sous-catégories</p>
        </div>

        <div class=\"header-actions d-flex align-items-center gap-2 gap-md-3 flex-wrap w-100 w-md-auto\">
            <!-- Quota -->
            <div class=\"card bg-light p-1 p-md-2 flex-grow-1 flex-md-grow-0 w-100 w-md-auto\" style=\"min-width: 100px;\">
                <div class=\"d-flex align-items-center justify-content-center justify-content-md-start\">
                    <div class=\"me-1 me-md-2\">
                        <span class=\"badge bg-primary p-1 p-md-2 rounded-circle\">
                            <i class=\"fas fa-chart-line\"></i>
                        </span>
                    </div>
                    <div>
                        <small class=\"text-muted d-block small\" style=\"font-size: 0.5rem;\">Catégories quota</small>
                        <h5 class=\"mb-0 ";
        // line 377
        yield (((($tmp = (isset($context["quotaReached"]) || array_key_exists("quotaReached", $context) ? $context["quotaReached"] : (function () { throw new RuntimeError('Variable "quotaReached" does not exist.', 377, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-danger") : ("text-success"));
        yield "\" style=\"font-size: 0.8rem;\">
                            ";
        // line 378
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activeCount"]) || array_key_exists("activeCount", $context) ? $context["activeCount"] : (function () { throw new RuntimeError('Variable "activeCount" does not exist.', 378, $this->source); })()), "html", null, true);
        yield " / ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["quota"]) || array_key_exists("quota", $context) ? $context["quota"] : (function () { throw new RuntimeError('Variable "quota" does not exist.', 378, $this->source); })()), "html", null, true);
        yield "
                            ";
        // line 379
        if (((isset($context["quota"]) || array_key_exists("quota", $context) ? $context["quota"] : (function () { throw new RuntimeError('Variable "quota" does not exist.', 379, $this->source); })()) == "Illimité")) {
            // line 380
            yield "                                <i class=\"fas fa-infinity text-info ms-1\"></i>
                            ";
        }
        // line 382
        yield "                        </h5>
                    </div>
                </div>
            </div>

            ";
        // line 388
        yield "            ";
        if (((isset($context["subscriptionInactiveCount"]) || array_key_exists("subscriptionInactiveCount", $context) ? $context["subscriptionInactiveCount"] : (function () { throw new RuntimeError('Variable "subscriptionInactiveCount" does not exist.', 388, $this->source); })()) > 0)) {
            // line 389
            yield "            <div class=\"card bg-light p-1 p-md-2 flex-grow-1 flex-md-grow-0 w-100 w-md-auto\" style=\"min-width: 80px;\">
                <div class=\"d-flex align-items-center justify-content-center justify-content-md-start\">
                    <div class=\"me-1 me-md-2\">
                        <span class=\"badge bg-warning p-1 p-md-2 rounded-circle\">
                            <i class=\"fas fa-clock\"></i>
                        </span>
                    </div>
                    <div>
                        <small class=\"text-muted d-block small\" style=\"font-size: 0.5rem;\">En attente</small>
                        <h5 class=\"mb-0\" style=\"font-size: 0.8rem;\">";
            // line 398
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subscriptionInactiveCount"]) || array_key_exists("subscriptionInactiveCount", $context) ? $context["subscriptionInactiveCount"] : (function () { throw new RuntimeError('Variable "subscriptionInactiveCount" does not exist.', 398, $this->source); })()), "html", null, true);
            yield "</h5>
                    </div>
                </div>
            </div>
            ";
        }
        // line 403
        yield "
            ";
        // line 405
        yield "            <a href=\"#\" id=\"newCategoryBtn\" class=\"btn btn-primary btn-sm flex-grow-1 flex-md-grow-0 w-100 w-md-auto\">
                <i class=\"fas fa-plus-circle me-1\"></i>
                <span class=\"d-none d-sm-inline\">Nouvelle</span>
            </a>
        </div>
    </div>

    ";
        // line 413
        yield "    ";
        if (((isset($context["quotaReached"]) || array_key_exists("quotaReached", $context) ? $context["quotaReached"] : (function () { throw new RuntimeError('Variable "quotaReached" does not exist.', 413, $this->source); })()) && ((isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 413, $this->source); })()) != "premium"))) {
            // line 414
            yield "    <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
        <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-2\">
            <div>
                <i class=\"fas fa-exclamation-triangle me-2\"></i>
                <strong>Quota atteint !</strong> Vous avez utilisé vos ";
            // line 418
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["quota"]) || array_key_exists("quota", $context) ? $context["quota"] : (function () { throw new RuntimeError('Variable "quota" does not exist.', 418, $this->source); })()), "html", null, true);
            yield " catégories de plats dans le quota.
            </div>
            <a href=\"";
            // line 420
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subscription_plans");
            yield "\" class=\"btn btn-warning btn-sm w-100 w-sm-auto\">
                <i class=\"fas fa-arrow-up me-1\"></i> Voir les offres
            </a>
        </div>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    </div>
    ";
        }
        // line 427
        yield "
    ";
        // line 429
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 429, $this->source); })()), "flashes", ["success"], "method", false, false, false, 429));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 430
            yield "        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
            <i class=\"fas fa-check-circle me-2\"></i> ";
            // line 431
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 435
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 435, $this->source); })()), "flashes", ["error"], "method", false, false, false, 435));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 436
            yield "        <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
            <i class=\"fas fa-exclamation-circle me-2\"></i> ";
            // line 437
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 441
        yield "
    <!-- ============================================
         STATISTIQUES
         ============================================ -->
    <div class=\"card border-0 shadow-sm mb-3 mb-md-4\">
        <div class=\"card-header bg-white py-2 py-md-3\">
            <h5 class=\"mb-0 small\">
                <i class=\"fas fa-chart-pie me-2 text-primary\"></i>
                <span class=\"d-none d-sm-inline\">Statistiques selon les filtres</span>
            </h5>
        </div>
        <div class=\"card-body p-2 p-sm-3\">
            <div class=\"row g-2 mb-2\">
                <div class=\"col-6 col-md-3\">
                    <div class=\"stat-item p-2 p-sm-3 bg-light rounded h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-primary text-uppercase small fw-bold d-block\">Total</span>
                                <h3 class=\"mb-0\">";
        // line 459
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalFiltered"]) || array_key_exists("totalFiltered", $context) ? $context["totalFiltered"] : (function () { throw new RuntimeError('Variable "totalFiltered" does not exist.', 459, $this->source); })()), "html", null, true);
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
        // line 470
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activeFiltered"]) || array_key_exists("activeFiltered", $context) ? $context["activeFiltered"] : (function () { throw new RuntimeError('Variable "activeFiltered" does not exist.', 470, $this->source); })()), "html", null, true);
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
        // line 481
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["inactiveFiltered"]) || array_key_exists("inactiveFiltered", $context) ? $context["inactiveFiltered"] : (function () { throw new RuntimeError('Variable "inactiveFiltered" does not exist.', 481, $this->source); })()), "html", null, true);
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
        // line 492
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["mainFiltered"]) || array_key_exists("mainFiltered", $context) ? $context["mainFiltered"] : (function () { throw new RuntimeError('Variable "mainFiltered" does not exist.', 492, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-sitemap fa-2x text-info opacity-50\"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row g-2\">
                <div class=\"col-6 col-md-4\">
                    <div class=\"stat-item p-2 p-sm-3 bg-light rounded h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-warning text-uppercase small fw-bold d-block\">Sous-catég.</span>
                                <h3 class=\"mb-0 text-warning\">";
        // line 505
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subFiltered"]) || array_key_exists("subFiltered", $context) ? $context["subFiltered"] : (function () { throw new RuntimeError('Variable "subFiltered" does not exist.', 505, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-folder-tree fa-2x text-warning opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-6 col-md-4\">
                    <div class=\"stat-item p-2 p-sm-3 bg-light rounded h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-info text-uppercase small fw-bold d-block\">Abon. actif</span>
                                <h3 class=\"mb-0 text-info\">";
        // line 516
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subscriptionActiveFiltered"]) || array_key_exists("subscriptionActiveFiltered", $context) ? $context["subscriptionActiveFiltered"] : (function () { throw new RuntimeError('Variable "subscriptionActiveFiltered" does not exist.', 516, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-database fa-2x text-info opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-12 col-md-4\">
                    <div class=\"stat-item p-2 p-sm-3 bg-light rounded h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-secondary text-uppercase small fw-bold d-block\">Abon. inactif</span>
                                <h3 class=\"mb-0 text-secondary\">";
        // line 527
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subscriptionInactiveFiltered"]) || array_key_exists("subscriptionInactiveFiltered", $context) ? $context["subscriptionInactiveFiltered"] : (function () { throw new RuntimeError('Variable "subscriptionInactiveFiltered" does not exist.', 527, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-clock fa-2x text-secondary opacity-50\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================================
         FILTRES
         ============================================ -->
    <div class=\"card border-0 shadow-sm mb-3 mb-md-4\">
        <div class=\"card-header bg-white py-2 py-md-3 d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <h5 class=\"mb-0 small\">
                <i class=\"fas fa-filter me-2 text-primary\"></i>
                <span class=\"d-none d-sm-inline\">Filtres</span>
            </h5>
            ";
        // line 547
        yield "            <div class=\"d-flex gap-1 gap-sm-2 flex-wrap ms-auto\">
                <a href=\"";
        // line 548
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_index");
        yield "\" class=\"btn btn-outline-secondary btn-sm\">
                    <i class=\"fas fa-undo me-1\"></i>
                    <span class=\"d-none d-sm-inline\">Effacer</span>
                </a>
                <button type=\"submit\" form=\"filter-form\" class=\"btn btn-primary btn-sm\">
                    <i class=\"fas fa-search me-1\"></i>
                    <span class=\"d-none d-sm-inline\">Filtrer</span>
                </button>
            </div>
        </div>
        <div class=\"card-body bg-white p-2 p-sm-3\">
            <form method=\"get\" id=\"filter-form\" class=\"row g-2 g-sm-3\">
                <div class=\"col-12 col-sm-6 col-lg-3\">
                    <label for=\"search\" class=\"form-label fw-semibold small mb-1\">
                        <i class=\"fas fa-search text-primary me-1\"></i>Rechercher
                    </label>
                    <input type=\"text\" name=\"search\" id=\"search\" value=\"";
        // line 564
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 564, $this->source); })()), "html", null, true);
        yield "\" 
                        class=\"form-control form-control-sm\" placeholder=\"Nom, description...\">
                </div>

                <div class=\"col-6 col-sm-6 col-lg-2\">
                    <label for=\"status\" class=\"form-label fw-semibold small mb-1\">
                        <i class=\"fas fa-toggle-on text-success me-1\"></i>Statut
                    </label>
                    <select name=\"status\" id=\"status\" class=\"form-select form-select-sm\">
                        <option value=\"all\" ";
        // line 573
        yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 573, $this->source); })()) == "all")) ? ("selected") : (""));
        yield ">Tous</option>
                        <option value=\"active\" ";
        // line 574
        yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 574, $this->source); })()) == "active")) ? ("selected") : (""));
        yield ">Actives</option>
                        <option value=\"inactive\" ";
        // line 575
        yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 575, $this->source); })()) == "inactive")) ? ("selected") : (""));
        yield ">Inactives</option>
                    </select>
                </div>

                <div class=\"col-6 col-sm-6 col-lg-2\">
                    <label for=\"type\" class=\"form-label fw-semibold small mb-1\">
                        <i class=\"fas fa-sitemap text-info me-1\"></i>Type
                    </label>
                    <select name=\"type\" id=\"type\" class=\"form-select form-select-sm\">
                        <option value=\"all\" ";
        // line 584
        yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 584, $this->source); })()) == "all")) ? ("selected") : (""));
        yield ">Tous</option>
                        <option value=\"main\" ";
        // line 585
        yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 585, $this->source); })()) == "main")) ? ("selected") : (""));
        yield ">Principales</option>
                        <option value=\"sub\" ";
        // line 586
        yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 586, $this->source); })()) == "sub")) ? ("selected") : (""));
        yield ">Sous-catégories</option>
                    </select>
                </div>

                <div class=\"col-6 col-sm-6 col-lg-2\">
                    <label for=\"sub_status\" class=\"form-label fw-semibold small mb-1\">
                        <i class=\"fas fa-credit-card text-warning me-1\"></i>Abonnement
                    </label>
                    <select name=\"sub_status\" id=\"sub_status\" class=\"form-select form-select-sm\">
                        <option value=\"all\" ";
        // line 595
        yield ((((isset($context["subStatus"]) || array_key_exists("subStatus", $context) ? $context["subStatus"] : (function () { throw new RuntimeError('Variable "subStatus" does not exist.', 595, $this->source); })()) == "all")) ? ("selected") : (""));
        yield ">Tous</option>
                        <option value=\"active\" ";
        // line 596
        yield ((((isset($context["subStatus"]) || array_key_exists("subStatus", $context) ? $context["subStatus"] : (function () { throw new RuntimeError('Variable "subStatus" does not exist.', 596, $this->source); })()) == "active")) ? ("selected") : (""));
        yield ">Actif</option>
                        <option value=\"inactive\" ";
        // line 597
        yield ((((isset($context["subStatus"]) || array_key_exists("subStatus", $context) ? $context["subStatus"] : (function () { throw new RuntimeError('Variable "subStatus" does not exist.', 597, $this->source); })()) == "inactive")) ? ("selected") : (""));
        yield ">Inactif</option>
                    </select>
                </div>

                <div class=\"col-6 col-sm-6 col-lg-3\">
                    <label for=\"promotion\" class=\"form-label fw-semibold small mb-1\">
                        <i class=\"fas fa-tags text-danger me-1\"></i>Promotion
                    </label>
                    <select name=\"promotion\" id=\"promotion\" class=\"form-select form-select-sm\">
                        <option value=\"\">🎯 Toutes</option>
                        ";
        // line 607
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 607, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
            // line 608
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 608), "html", null, true);
            yield "\" ";
            yield ((((isset($context["selectedPromotion"]) || array_key_exists("selectedPromotion", $context) ? $context["selectedPromotion"] : (function () { throw new RuntimeError('Variable "selectedPromotion" does not exist.', 608, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 608))) ? ("selected") : (""));
            yield ">
                                ";
            // line 609
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "name", [], "any", false, false, false, 609), "html", null, true);
            yield "
                                ";
            // line 610
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "discountPercentage", [], "any", false, false, false, 610)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 611
                yield "                                    (-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "discountPercentage", [], "any", false, false, false, 611), "html", null, true);
                yield "%)
                                ";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 612
$context["promotion"], "discountAmount", [], "any", false, false, false, 612)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 613
                yield "                                    (-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "discountAmount", [], "any", false, false, false, 613), 0, ",", " "), "html", null, true);
                yield " FCFA)
                                ";
            }
            // line 615
            yield "                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['promotion'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 617
        yield "                    </select>
                </div>
            </form>
        </div>
    </div>

    ";
        // line 624
        yield "    ";
        if ((((isset($context["subStatus"]) || array_key_exists("subStatus", $context) ? $context["subStatus"] : (function () { throw new RuntimeError('Variable "subStatus" does not exist.', 624, $this->source); })()) == "inactive") && ((isset($context["subscriptionInactiveFiltered"]) || array_key_exists("subscriptionInactiveFiltered", $context) ? $context["subscriptionInactiveFiltered"] : (function () { throw new RuntimeError('Variable "subscriptionInactiveFiltered" does not exist.', 624, $this->source); })()) > 0))) {
            // line 625
            yield "        <div class=\"alert alert-info mb-3 mb-md-4 small\">
            <i class=\"fas fa-info-circle me-2\"></i>
            <strong>";
            // line 627
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subscriptionInactiveFiltered"]) || array_key_exists("subscriptionInactiveFiltered", $context) ? $context["subscriptionInactiveFiltered"] : (function () { throw new RuntimeError('Variable "subscriptionInactiveFiltered" does not exist.', 627, $this->source); })()), "html", null, true);
            yield " catégorie(s)</strong> désactivées par abonnement.
        </div>
    ";
        }
        // line 630
        yield "
    <!-- ============================================
         GRILLE CATÉGORIES
         ============================================ -->
    <div class=\"row g-2 g-sm-3\">
        ";
        // line 635
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 635, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 636
            yield "        <div class=\"col-6 col-md-4 col-lg-3 col-xl-3\">
            <div class=\"card category-card h-100 shadow-sm ";
            // line 637
            yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["category"], "subscriptionActive", [], "any", false, false, false, 637)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("border-warning") : (""));
            yield "\">
                <!-- Image -->
                <div class=\"category-image-container\">
                    ";
            // line 640
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 640)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 641
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/categories_plats/" . CoreExtension::getAttribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 641))), "html", null, true);
                yield "\" 
                            alt=\"";
                // line 642
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 642), "html", null, true);
                yield "\"
                            class=\"category-image\">
                    ";
            } else {
                // line 645
                yield "                        <div class=\"category-image-placeholder\">
                            <i class=\"fas fa-utensils fa-3x text-muted\"></i>
                        </div>
                    ";
            }
            // line 649
            yield "                </div>

                <!-- Contenu -->
                <div class=\"card-body d-flex flex-column p-2 p-sm-3\">
                    <!-- Titre + burger -->
                    <div class=\"d-flex justify-content-between align-items-start mb-1\">
                        <h5 class=\"card-title text-truncate mb-0 small\" title=\"";
            // line 655
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 655), "html", null, true);
            yield "\">
                            ";
            // line 656
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 656)), "truncate", [18], "method", false, false, false, 656), "html", null, true);
            yield "
                            ";
            // line 657
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "parent", [], "any", false, false, false, 657)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 658
                yield "                                <br><small class=\"text-muted\">
                                    <i class=\"fas fa-level-up-alt me-1\"></i>";
                // line 659
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["category"], "parent", [], "any", false, false, false, 659), "name", [], "any", false, false, false, 659)), "truncate", [12], "method", false, false, false, 659), "html", null, true);
                yield "
                                </small>
                            ";
            }
            // line 662
            yield "                        </h5>
                        <div class=\"dropdown ms-1 flex-shrink-0\">
                            <button class=\"btn btn-sm btn-light p-1\" type=\"button\" data-bs-toggle=\"dropdown\">
                                <i class=\"fas fa-bars\"></i>
                            </button>
                            <ul class=\"dropdown-menu dropdown-menu-end\">
                                <li>
                                    <a class=\"dropdown-item\" href=\"";
            // line 669
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 669)]), "html", null, true);
            yield "\">
                                        <i class=\"fas fa-eye me-2\"></i> Voir
                                    </a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item\" href=\"";
            // line 674
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 674)]), "html", null, true);
            yield "\">
                                        <i class=\"fas fa-edit me-2\"></i> Modifier
                                    </a>
                                </li>
                                <li>
                                    ";
            // line 679
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "subscriptionActive", [], "any", false, false, false, 679)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 680
                yield "                                        <button type=\"button\" 
                                                class=\"dropdown-item toggle-category-btn\"
                                                data-category-id=\"";
                // line 682
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 682), "html", null, true);
                yield "\"
                                                data-category-name=\"";
                // line 683
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 683), "html", null, true);
                yield "\"
                                                data-current-status=\"";
                // line 684
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "isActive", [], "any", false, false, false, 684)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : ("inactive"));
                yield "\"
                                                data-token=\"";
                // line 685
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle-status" . CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 685))), "html", null, true);
                yield "\">
                                            <i class=\"fas ";
                // line 686
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "isActive", [], "any", false, false, false, 686)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-toggle-on") : ("fa-toggle-off"));
                yield " me-2\"></i>
                                            ";
                // line 687
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "isActive", [], "any", false, false, false, 687)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
                yield "
                                        </button>
                                    ";
            } else {
                // line 690
                yield "                                        <span class=\"dropdown-item text-muted disabled\">
                                            <i class=\"fas fa-ban me-2\"></i> Non disponible
                                        </span>
                                    ";
            }
            // line 694
            yield "                                </li>
                                <li><hr class=\"dropdown-divider\"></li>
                                <li>
                                    ";
            // line 697
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 698
                yield "                                        ";
                // line 699
                yield "                                        <button type=\"button\" 
                                                class=\"dropdown-item delete-category-btn\"
                                                data-category-id=\"";
                // line 701
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 701), "html", null, true);
                yield "\"
                                                data-category-name=\"";
                // line 702
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 702), "html", null, true);
                yield "\"
                                                data-has-recipes=\"";
                // line 703
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "recipes", [], "any", false, false, false, 703)) > 0)) ? ("true") : ("false"));
                yield "\"
                                                data-has-children=\"";
                // line 704
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 704)) > 0)) ? ("true") : ("false"));
                yield "\"
                                                data-token=\"";
                // line 705
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 705))), "html", null, true);
                yield "\">
                                            <i class=\"fas fa-trash me-2\"></i> <strong>Supprimer</strong>
                                        </button>
                                    ";
            }
            // line 709
            yield "                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Description -->
                    <p class=\"text-muted small mb-2 d-none d-sm-block\">
                        ";
            // line 716
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "description", [], "any", true, true, false, 716)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 716), "Aucune description")) : ("Aucune description"))), "truncate", [60, "..."], "method", false, false, false, 716), "html", null, true);
            yield "
                    </p>
                    <p class=\"text-muted small mb-2 d-block d-sm-none\">
                        ";
            // line 719
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "description", [], "any", true, true, false, 719)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 719), "Aucune description")) : ("Aucune description"))), "truncate", [35, "..."], "method", false, false, false, 719), "html", null, true);
            yield "
                    </p>

                    <!-- Badges -->
                    <div class=\"category-badges\">
                        ";
            // line 724
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["category"], "subscriptionActive", [], "any", false, false, false, 724)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 725
                yield "                            <span class=\"badge bg-warning text-dark\">
                                <i class=\"fas fa-clock fa-xs me-1 d-none d-sm-inline\"></i> En attente
                            </span>
                        ";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 728
$context["category"], "isActive", [], "any", false, false, false, 728)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 729
                yield "                            <span class=\"badge bg-success\">
                                <i class=\"fas fa-check-circle fa-xs me-1 d-none d-sm-inline\"></i> Active
                            </span>
                        ";
            } else {
                // line 733
                yield "                            <span class=\"badge bg-danger\">
                                <i class=\"fas fa-pause-circle fa-xs me-1 d-none d-sm-inline\"></i> Désactivée
                            </span>
                        ";
            }
            // line 737
            yield "                        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "subscriptionActive", [], "any", false, false, false, 737)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 738
                yield "                            <span class=\"badge bg-info d-none d-sm-inline\">
                                <i class=\"fas fa-database fa-xs me-1\"></i> Quota
                            </span>
                        ";
            }
            // line 742
            yield "                    </div>

                    <!-- Compteurs -->
                    <div class=\"row g-0 mb-2\">
                        <div class=\"col-6\">
                            <small class=\"text-muted d-block\">Articles</small>
                            <span class=\"fw-bold text-primary small\">
                                <i class=\"fas fa-utensils me-1\"></i>";
            // line 749
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "recipes", [], "any", false, false, false, 749)), "html", null, true);
            yield "
                            </span>
                        </div>
                        <div class=\"col-6 text-end\">
                            <small class=\"text-muted d-block\">Sous-cat.</small>
                            <span class=\"fw-bold text-info small\">
                                <i class=\"fas fa-sitemap me-1\"></i>";
            // line 755
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 755)), "html", null, true);
            yield "
                            </span>
                        </div>
                    </div>

                    <!-- Actions secondaires -->
                    <div class=\"action-buttons-row\">
                        <a href=\"";
            // line 762
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_recipes", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 762)]), "html", null, true);
            yield "\" 
                           class=\"btn btn-sm btn-outline-info\">
                            <i class=\"fas fa-list\"></i>
                            <span class=\"d-none d-sm-inline\">Articles</span>
                        </a>
                        <a href=\"";
            // line 767
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_promotions", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 767)]), "html", null, true);
            yield "\" 
                           class=\"btn btn-sm btn-outline-warning\">
                            <i class=\"fas fa-percent\"></i>
                            <span class=\"d-none d-sm-inline\">Promos</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        ";
            $context['_iterated'] = true;
        }
        // line 776
        if (!$context['_iterated']) {
            // line 777
            yield "        <div class=\"col-12\">
            <div class=\"card shadow\">
                <div class=\"card-body text-center py-4 py-md-5\">
                    <i class=\"fas fa-utensils fa-3x fa-md-4 text-muted mb-3\"></i>
                    <h4 class=\"text-muted fs-5 fs-md-4\">Aucune catégorie de plats trouvée</h4>
                    <a href=\"";
            // line 782
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_index");
            yield "\" class=\"btn btn-outline-primary btn-sm mt-2\">
                        <i class=\"fas fa-undo me-1\"></i> Réinitialiser
                    </a>
                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 789
        yield "    </div>

    <!-- Pagination -->
    ";
        // line 792
        if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 792, $this->source); })()) > 1)) {
            // line 793
            yield "    <nav aria-label=\"Pagination\" class=\"mt-3 mt-md-4\">
        <ul class=\"pagination pagination-sm justify-content-center flex-wrap\">
            ";
            // line 795
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 795, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 796
                yield "                <li class=\"page-item ";
                yield ((($context["i"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 796, $this->source); })()))) ? ("active") : (""));
                yield "\">
                    <a class=\"page-link\" href=\"";
                // line 797
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 797, $this->source); })()), "request", [], "any", false, false, false, 797), "query", [], "any", false, false, false, 797), "all", [], "any", false, false, false, 797), ["page" => $context["i"]])), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "</a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 800
            yield "        </ul>
    </nav>
    ";
        }
        // line 803
        yield "</div>

";
        // line 806
        yield "
";
        // line 808
        yield "<div class=\"modal fade\" id=\"quotaReachedModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-warning text-dark\">
                <h5 class=\"modal-title fs-6\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Quota atteint
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-3 py-md-4\">
                <i class=\"fas fa-ban fa-3x text-warning mb-3\"></i>
                <h5 class=\"fs-6\">Limite de ";
        // line 819
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["quota"]) || array_key_exists("quota", $context) ? $context["quota"] : (function () { throw new RuntimeError('Variable "quota" does not exist.', 819, $this->source); })()), "html", null, true);
        yield " catégories atteinte</h5>
                <p class=\"text-muted small\">Pour ajouter de nouvelles catégories, passez à un plan supérieur.</p>
            </div>
            <div class=\"modal-footer justify-content-center flex-wrap py-2 py-md-3\">
                <a href=\"";
        // line 823
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subscription_plans");
        yield "\" class=\"btn btn-warning btn-sm px-3 w-100 w-sm-auto\">
                    <i class=\"fas fa-arrow-up me-2\"></i> Voir les offres
                </a>
                <button type=\"button\" class=\"btn btn-outline-secondary btn-sm w-100 w-sm-auto\" data-bs-dismiss=\"modal\">
                    Annuler
                </button>
            </div>
        </div>
    </div>
</div>

";
        // line 835
        yield "<div class=\"modal fade\" id=\"toggleCategoryModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title fs-6\" id=\"toggleModalTitle\">Confirmation</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-3 py-md-4\">
                <i class=\"fas fa-question-circle fa-3x text-primary mb-3\"></i>
                <p id=\"toggleModalMessage\" class=\"small\"></p>
            </div>
            <div class=\"modal-footer justify-content-center flex-wrap py-2 py-md-3\">
                <form id=\"toggleCategoryForm\" method=\"post\" style=\"display: inline;\">
                    <input type=\"hidden\" name=\"_token\" id=\"toggleCategoryToken\" value=\"\">
                    <button type=\"submit\" class=\"btn btn-primary btn-sm px-3 w-100 w-sm-auto\">
                        <i class=\"fas fa-check me-2\"></i> Confirmer
                    </button>
                </form>
                <button type=\"button\" class=\"btn btn-outline-secondary btn-sm w-100 w-sm-auto\" data-bs-dismiss=\"modal\">
                    Annuler
                </button>
            </div>
        </div>
    </div>
</div>

";
        // line 862
        yield "<div class=\"modal fade\" id=\"deleteCategoryModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title fs-6\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Confirmation de suppression
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <div id=\"deleteCategoryModalContent\"></div>
            </div>
            <div class=\"modal-footer flex-wrap gap-2 py-2 py-md-3\">
                <button type=\"button\" class=\"btn btn-secondary btn-sm flex-grow-1 flex-md-grow-0\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"deleteCategoryForm\" method=\"post\" action=\"\" class=\"flex-grow-1 flex-md-grow-0\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteCategoryToken\" value=\"\">
                    <button type=\"submit\" class=\"btn btn-danger btn-sm w-100\" id=\"deleteCategoryConfirmBtn\">Supprimer</button>
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

    // line 886
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

        // line 887
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/fr.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Select2 promotion
    const promotionEl = document.getElementById('promotion');
    if (promotionEl && typeof \$ !== 'undefined') {
        \$(promotionEl).select2({
            theme: 'bootstrap-5',
            language: 'fr',
            placeholder: '🎯 Sélectionnez une promotion',
            allowClear: true,
            width: '100%',
            dropdownAutoWidth: true,
            dropdownParent: \$(promotionEl).parent()
        });
    }

    // Bouton Nouvelle
    const newCategoryBtn = document.getElementById('newCategoryBtn');
    if (newCategoryBtn) {
        newCategoryBtn.addEventListener('click', function(e) {
            e.preventDefault();
            ";
        // line 911
        if ((($tmp = (isset($context["quotaReached"]) || array_key_exists("quotaReached", $context) ? $context["quotaReached"] : (function () { throw new RuntimeError('Variable "quotaReached" does not exist.', 911, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 912
            yield "                new bootstrap.Modal(document.getElementById('quotaReachedModal')).show();
            ";
        } else {
            // line 914
            yield "                window.location.href = \"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_new");
            yield "\";
            ";
        }
        // line 916
        yield "        });
    }

    // Modale toggle
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
            toggleForm.action = `/admin/category-recipe/\${categoryId}/toggle-status`;
            toggleToken.value = this.dataset.token;
            toggleModal.show();
        });
    });

    // Modale suppression
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteCategoryModal'));
    const deleteForm = document.getElementById('deleteCategoryForm');
    const deleteToken = document.getElementById('deleteCategoryToken');
    const deleteConfirmBtn = document.getElementById('deleteCategoryConfirmBtn');
    const deleteModalContent = document.getElementById('deleteCategoryModalContent');

    document.querySelectorAll('.delete-category-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const id = this.dataset.categoryId;
            const name = this.dataset.categoryName;
            const hasRecipes = this.dataset.hasRecipes === 'true';
            const hasChildren = this.dataset.hasChildren === 'true';
            const token = this.dataset.token;

            deleteForm.action = `/admin/category-recipe/\${id}`;
            deleteToken.value = token;

            if (hasRecipes || hasChildren) {
                let message = '';
                if (hasRecipes && hasChildren) {
                    message = `Cette catégorie contient des plats et des sous-catégories.`;
                } else if (hasRecipes) {
                    message = `Cette catégorie contient des plats.`;
                } else if (hasChildren) {
                    message = `Cette catégorie contient des sous-catégories.`;
                }
                message += ` Pour confirmer la suppression, saisissez exactement le nom \"\${name}\".`;
                deleteModalContent.innerHTML = `
                    <div class=\"alert alert-warning small p-2\">
                        <i class=\"fas fa-exclamation-triangle me-2\"></i>
                        \${message}
                    </div>
                    <div class=\"input-group mt-2\">
                        <span class=\"input-group-text\"><i class=\"fas fa-tag\"></i></span>
                        <input type=\"text\" id=\"deleteConfirmName\" class=\"form-control form-control-sm\" placeholder=\"Saisissez le nom\">
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
        return "admin/category_recipe/index.html.twig";
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
        return array (  1377 => 916,  1371 => 914,  1367 => 912,  1365 => 911,  1338 => 887,  1325 => 886,  1292 => 862,  1264 => 835,  1250 => 823,  1243 => 819,  1230 => 808,  1227 => 806,  1223 => 803,  1218 => 800,  1207 => 797,  1202 => 796,  1198 => 795,  1194 => 793,  1192 => 792,  1187 => 789,  1174 => 782,  1167 => 777,  1165 => 776,  1151 => 767,  1143 => 762,  1133 => 755,  1124 => 749,  1115 => 742,  1109 => 738,  1106 => 737,  1100 => 733,  1094 => 729,  1092 => 728,  1087 => 725,  1085 => 724,  1077 => 719,  1071 => 716,  1062 => 709,  1055 => 705,  1051 => 704,  1047 => 703,  1043 => 702,  1039 => 701,  1035 => 699,  1033 => 698,  1031 => 697,  1026 => 694,  1020 => 690,  1014 => 687,  1010 => 686,  1006 => 685,  1002 => 684,  998 => 683,  994 => 682,  990 => 680,  988 => 679,  980 => 674,  972 => 669,  963 => 662,  957 => 659,  954 => 658,  952 => 657,  948 => 656,  944 => 655,  936 => 649,  930 => 645,  924 => 642,  919 => 641,  917 => 640,  911 => 637,  908 => 636,  903 => 635,  896 => 630,  890 => 627,  886 => 625,  883 => 624,  875 => 617,  868 => 615,  862 => 613,  860 => 612,  855 => 611,  853 => 610,  849 => 609,  842 => 608,  838 => 607,  825 => 597,  821 => 596,  817 => 595,  805 => 586,  801 => 585,  797 => 584,  785 => 575,  781 => 574,  777 => 573,  765 => 564,  746 => 548,  743 => 547,  721 => 527,  707 => 516,  693 => 505,  677 => 492,  663 => 481,  649 => 470,  635 => 459,  615 => 441,  605 => 437,  602 => 436,  597 => 435,  587 => 431,  584 => 430,  579 => 429,  576 => 427,  566 => 420,  561 => 418,  555 => 414,  552 => 413,  543 => 405,  540 => 403,  532 => 398,  521 => 389,  518 => 388,  511 => 382,  507 => 380,  505 => 379,  499 => 378,  495 => 377,  468 => 352,  455 => 351,  102 => 8,  89 => 7,  66 => 5,  43 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/category_recipe/index.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}Gestion des Catégories de Plats - HMA Market{% endblock %}

{% block stylesheets %}
{{ parent() }}
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
<link href=\"https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css\" rel=\"stylesheet\" />
<style>
/* ============================================
   CARTES CATÉGORIES
   ============================================ */
.category-card {
    transition: transform 0.2s, box-shadow 0.2s;
    border-radius: 12px;
    overflow: hidden;
    border: 1px solid #eef0f3;
}
.category-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.15) !important;
    border-color: #dee2e6;
}
.category-card.border-warning {
    border: 2px solid #ffc107 !important;
}
.category-image-container {
    position: relative;
    height: 160px;
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
.category-image-placeholder {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
}
.btn.disabled {
    opacity: 0.5;
    cursor: not-allowed;
}

/* ============================================
   STATISTIQUES
   ============================================ */
.stat-item {
    transition: transform 0.2s;
}
.stat-item:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}

/* ============================================
   BADGES
   ============================================ */
.category-badges {
    display: flex;
    flex-wrap: wrap;
    gap: 4px;
    margin-bottom: 0.5rem;
}
.category-badges .badge {
    font-size: 9px;
    padding: 3px 6px;
}

/* ============================================
   SELECT2
   ============================================ */
.select2-container--bootstrap-5 .select2-selection {
    height: 38px !important;
    border-radius: 8px !important;
    background-color: #fff !important;
    border-color: #dee2e6 !important;
}
.select2-container--bootstrap-5 .select2-selection--single {
    height: 38px !important;
    display: flex !important;
    align-items: center !important;
}
.select2-container--bootstrap-5 .select2-selection--single .select2-selection__rendered {
    line-height: 36px !important;
    padding-left: 12px !important;
    color: #212529 !important;
}
.select2-container--bootstrap-5 .select2-selection--single .select2-selection__arrow {
    height: 36px !important;
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

/* ============================================
   BOUTONS ACTIONS
   ============================================ */
.action-buttons-row {
    display: flex;
    gap: 0.25rem;
    margin-top: auto;
    flex-wrap: wrap;
}
.action-buttons-row .btn {
    flex: 1 1 calc(50% - 0.125rem);
    font-size: 0.7rem;
    padding: 0.25rem 0.4rem;
}

/* ============================================
   ✅ BOUTON SUPPRIMER DANS LE MENU BURGER
   ============================================ */
.dropdown-menu .delete-category-btn {
    color: #dc3545 !important;
    font-weight: 600;
    padding: 0.6rem 1rem;
    border-radius: 0.25rem;
    margin: 0.125rem 0.5rem 0.25rem;
    background-color: #fff5f5;
}
.dropdown-menu .delete-category-btn:hover {
    background-color: #dc3545 !important;
    color: white !important;
}
.dropdown-menu .delete-category-btn i {
    color: #dc3545;
}
.dropdown-menu .delete-category-btn:hover i {
    color: white;
}

/* ============================================
   RESPONSIVE
   ============================================ */
@media (max-width: 992px) {
    .container-fluid {
        padding-left: 0.75rem !important;
        padding-right: 0.75rem !important;
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
    
    /* En-tête */
    .page-header {
        flex-direction: column !important;
        align-items: flex-start !important;
        gap: 0.75rem !important;
        width: 100%;
    }
    .page-header .header-actions {
        width: 100%;
        flex-direction: column;
        gap: 0.5rem;
    }
    .page-header .header-actions .btn,
    .page-header .header-actions .card {
        width: 100%;
    }
    h1.h4, h1.h3 {
        font-size: 1.1rem !important;
    }
    .breadcrumb {
        font-size: 0.7rem;
    }
    
    /* Statistiques : 2 par ligne */
    .row.g-2.mb-2 > .col-6,
    .row.g-2 > .col-6 {
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
    .stat-item .p-2 {
        padding: 0.5rem !important;
    }
    
    /* Filtres en colonne */
    .row.g-2.g-sm-3 > [class*=\"col-\"] {
        flex: 0 0 100%;
        max-width: 100%;
        margin-bottom: 0.5rem;
    }
    
    /* ✅ 2 CARTES PAR LIGNE SUR MOBILE */
    .row.g-2.g-sm-3 > .col-6 {
        flex: 0 0 50%;
        max-width: 50%;
        padding-left: 0.25rem;
        padding-right: 0.25rem;
    }
    
    .category-card .card-title {
        font-size: 0.8rem;
    }
    .category-card .card-title small {
        font-size: 0.65rem;
    }
    .category-image-container {
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
    .action-buttons-row {
        gap: 0.15rem;
    }
    .action-buttons-row .btn {
        flex: 1 1 100%;
        font-size: 0.6rem;
        padding: 0.2rem 0.3rem;
    }
    .dropdown-menu {
        font-size: 0.85rem;
    }
    
    /* ✅ BOUTON SUPPRIMER VISIBLE EN MOBILE */
    .dropdown-menu .delete-category-btn {
        padding: 0.65rem 1rem;
        font-size: 0.9rem;
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
    .stat-item .p-2 {
        padding: 0.35rem !important;
    }
    
    /* 2 CARTES PAR LIGNE */
    .row.g-2.g-sm-3 > .col-6 {
        flex: 0 0 50%;
        max-width: 50%;
        padding-left: 0.15rem;
        padding-right: 0.15rem;
        margin-bottom: 0.35rem;
    }
    
    .category-image-container {
        height: 90px;
    }
    .category-card .card-title {
        font-size: 0.7rem;
        line-height: 1.2;
    }
    .category-card .card-title small {
        font-size: 0.55rem;
    }
    .category-card .card-body {
        padding: 0.35rem !important;
    }
    .category-card .text-muted.small {
        font-size: 0.5rem !important;
    }
    .category-badges .badge {
        font-size: 5px;
        padding: 1px 3px;
        border-radius: 2px;
    }
    .action-buttons-row .btn {
        flex: 1 1 100%;
        font-size: 0.5rem;
        padding: 0.15rem 0.2rem;
    }
    .category-card .dropdown .btn-sm {
        font-size: 0.55rem;
        padding: 0.1rem 0.2rem;
    }
    .pagination .page-link {
        font-size: 0.65rem;
        padding: 0.25rem 0.5rem;
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
<div class=\"container-fluid px-2 px-md-4 py-2 py-md-3\">
    <!-- ============================================
         EN-TÊTE
         ============================================ -->
    <div class=\"page-header d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center mb-3 mb-md-4 flex-wrap gap-2\">
        <div class=\"w-100 w-md-auto\">
            <h1 class=\"h4 h-md-3 mb-0 text-gray-800\">
                <i class=\"fas fa-utensils me-2\"></i>
                <span class=\"d-none d-sm-inline\">Gestion des sections de menu</span>
                <span class=\"d-inline d-sm-none\">Sections menu</span>
            </h1>
            <p class=\"text-muted mt-1 small d-none d-sm-block\">Organisez vos plats par catégories et sous-catégories</p>
        </div>

        <div class=\"header-actions d-flex align-items-center gap-2 gap-md-3 flex-wrap w-100 w-md-auto\">
            <!-- Quota -->
            <div class=\"card bg-light p-1 p-md-2 flex-grow-1 flex-md-grow-0 w-100 w-md-auto\" style=\"min-width: 100px;\">
                <div class=\"d-flex align-items-center justify-content-center justify-content-md-start\">
                    <div class=\"me-1 me-md-2\">
                        <span class=\"badge bg-primary p-1 p-md-2 rounded-circle\">
                            <i class=\"fas fa-chart-line\"></i>
                        </span>
                    </div>
                    <div>
                        <small class=\"text-muted d-block small\" style=\"font-size: 0.5rem;\">Catégories quota</small>
                        <h5 class=\"mb-0 {{ quotaReached ? 'text-danger' : 'text-success' }}\" style=\"font-size: 0.8rem;\">
                            {{ activeCount }} / {{ quota }}
                            {% if quota == 'Illimité' %}
                                <i class=\"fas fa-infinity text-info ms-1\"></i>
                            {% endif %}
                        </h5>
                    </div>
                </div>
            </div>

            {# En attente #}
            {% if subscriptionInactiveCount > 0 %}
            <div class=\"card bg-light p-1 p-md-2 flex-grow-1 flex-md-grow-0 w-100 w-md-auto\" style=\"min-width: 80px;\">
                <div class=\"d-flex align-items-center justify-content-center justify-content-md-start\">
                    <div class=\"me-1 me-md-2\">
                        <span class=\"badge bg-warning p-1 p-md-2 rounded-circle\">
                            <i class=\"fas fa-clock\"></i>
                        </span>
                    </div>
                    <div>
                        <small class=\"text-muted d-block small\" style=\"font-size: 0.5rem;\">En attente</small>
                        <h5 class=\"mb-0\" style=\"font-size: 0.8rem;\">{{ subscriptionInactiveCount }}</h5>
                    </div>
                </div>
            </div>
            {% endif %}

            {# Bouton Nouvelle #}
            <a href=\"#\" id=\"newCategoryBtn\" class=\"btn btn-primary btn-sm flex-grow-1 flex-md-grow-0 w-100 w-md-auto\">
                <i class=\"fas fa-plus-circle me-1\"></i>
                <span class=\"d-none d-sm-inline\">Nouvelle</span>
            </a>
        </div>
    </div>

    {# Message quota #}
    {% if quotaReached and plan != 'premium' %}
    <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
        <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-2\">
            <div>
                <i class=\"fas fa-exclamation-triangle me-2\"></i>
                <strong>Quota atteint !</strong> Vous avez utilisé vos {{ quota }} catégories de plats dans le quota.
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

    <!-- ============================================
         STATISTIQUES
         ============================================ -->
    <div class=\"card border-0 shadow-sm mb-3 mb-md-4\">
        <div class=\"card-header bg-white py-2 py-md-3\">
            <h5 class=\"mb-0 small\">
                <i class=\"fas fa-chart-pie me-2 text-primary\"></i>
                <span class=\"d-none d-sm-inline\">Statistiques selon les filtres</span>
            </h5>
        </div>
        <div class=\"card-body p-2 p-sm-3\">
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
            <div class=\"row g-2\">
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
                <div class=\"col-6 col-md-4\">
                    <div class=\"stat-item p-2 p-sm-3 bg-light rounded h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-info text-uppercase small fw-bold d-block\">Abon. actif</span>
                                <h3 class=\"mb-0 text-info\">{{ subscriptionActiveFiltered }}</h3>
                            </div>
                            <i class=\"fas fa-database fa-2x text-info opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-12 col-md-4\">
                    <div class=\"stat-item p-2 p-sm-3 bg-light rounded h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-secondary text-uppercase small fw-bold d-block\">Abon. inactif</span>
                                <h3 class=\"mb-0 text-secondary\">{{ subscriptionInactiveFiltered }}</h3>
                            </div>
                            <i class=\"fas fa-clock fa-2x text-secondary opacity-50\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================================
         FILTRES
         ============================================ -->
    <div class=\"card border-0 shadow-sm mb-3 mb-md-4\">
        <div class=\"card-header bg-white py-2 py-md-3 d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <h5 class=\"mb-0 small\">
                <i class=\"fas fa-filter me-2 text-primary\"></i>
                <span class=\"d-none d-sm-inline\">Filtres</span>
            </h5>
            {# ✅ BOUTONS FILTRER + EFFACER À DROITE #}
            <div class=\"d-flex gap-1 gap-sm-2 flex-wrap ms-auto\">
                <a href=\"{{ path('app_admin_category_recipe_index') }}\" class=\"btn btn-outline-secondary btn-sm\">
                    <i class=\"fas fa-undo me-1\"></i>
                    <span class=\"d-none d-sm-inline\">Effacer</span>
                </a>
                <button type=\"submit\" form=\"filter-form\" class=\"btn btn-primary btn-sm\">
                    <i class=\"fas fa-search me-1\"></i>
                    <span class=\"d-none d-sm-inline\">Filtrer</span>
                </button>
            </div>
        </div>
        <div class=\"card-body bg-white p-2 p-sm-3\">
            <form method=\"get\" id=\"filter-form\" class=\"row g-2 g-sm-3\">
                <div class=\"col-12 col-sm-6 col-lg-3\">
                    <label for=\"search\" class=\"form-label fw-semibold small mb-1\">
                        <i class=\"fas fa-search text-primary me-1\"></i>Rechercher
                    </label>
                    <input type=\"text\" name=\"search\" id=\"search\" value=\"{{ search }}\" 
                        class=\"form-control form-control-sm\" placeholder=\"Nom, description...\">
                </div>

                <div class=\"col-6 col-sm-6 col-lg-2\">
                    <label for=\"status\" class=\"form-label fw-semibold small mb-1\">
                        <i class=\"fas fa-toggle-on text-success me-1\"></i>Statut
                    </label>
                    <select name=\"status\" id=\"status\" class=\"form-select form-select-sm\">
                        <option value=\"all\" {{ status == 'all' ? 'selected' : '' }}>Tous</option>
                        <option value=\"active\" {{ status == 'active' ? 'selected' : '' }}>Actives</option>
                        <option value=\"inactive\" {{ status == 'inactive' ? 'selected' : '' }}>Inactives</option>
                    </select>
                </div>

                <div class=\"col-6 col-sm-6 col-lg-2\">
                    <label for=\"type\" class=\"form-label fw-semibold small mb-1\">
                        <i class=\"fas fa-sitemap text-info me-1\"></i>Type
                    </label>
                    <select name=\"type\" id=\"type\" class=\"form-select form-select-sm\">
                        <option value=\"all\" {{ type == 'all' ? 'selected' : '' }}>Tous</option>
                        <option value=\"main\" {{ type == 'main' ? 'selected' : '' }}>Principales</option>
                        <option value=\"sub\" {{ type == 'sub' ? 'selected' : '' }}>Sous-catégories</option>
                    </select>
                </div>

                <div class=\"col-6 col-sm-6 col-lg-2\">
                    <label for=\"sub_status\" class=\"form-label fw-semibold small mb-1\">
                        <i class=\"fas fa-credit-card text-warning me-1\"></i>Abonnement
                    </label>
                    <select name=\"sub_status\" id=\"sub_status\" class=\"form-select form-select-sm\">
                        <option value=\"all\" {{ subStatus == 'all' ? 'selected' : '' }}>Tous</option>
                        <option value=\"active\" {{ subStatus == 'active' ? 'selected' : '' }}>Actif</option>
                        <option value=\"inactive\" {{ subStatus == 'inactive' ? 'selected' : '' }}>Inactif</option>
                    </select>
                </div>

                <div class=\"col-6 col-sm-6 col-lg-3\">
                    <label for=\"promotion\" class=\"form-label fw-semibold small mb-1\">
                        <i class=\"fas fa-tags text-danger me-1\"></i>Promotion
                    </label>
                    <select name=\"promotion\" id=\"promotion\" class=\"form-select form-select-sm\">
                        <option value=\"\">🎯 Toutes</option>
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
            </form>
        </div>
    </div>

    {# Message filtre inactif #}
    {% if subStatus == 'inactive' and subscriptionInactiveFiltered > 0 %}
        <div class=\"alert alert-info mb-3 mb-md-4 small\">
            <i class=\"fas fa-info-circle me-2\"></i>
            <strong>{{ subscriptionInactiveFiltered }} catégorie(s)</strong> désactivées par abonnement.
        </div>
    {% endif %}

    <!-- ============================================
         GRILLE CATÉGORIES
         ============================================ -->
    <div class=\"row g-2 g-sm-3\">
        {% for category in categories %}
        <div class=\"col-6 col-md-4 col-lg-3 col-xl-3\">
            <div class=\"card category-card h-100 shadow-sm {{ not category.subscriptionActive ? 'border-warning' : '' }}\">
                <!-- Image -->
                <div class=\"category-image-container\">
                    {% if category.image %}
                        <img src=\"{{ asset('uploads/categories_plats/' ~ category.image) }}\" 
                            alt=\"{{ category.name }}\"
                            class=\"category-image\">
                    {% else %}
                        <div class=\"category-image-placeholder\">
                            <i class=\"fas fa-utensils fa-3x text-muted\"></i>
                        </div>
                    {% endif %}
                </div>

                <!-- Contenu -->
                <div class=\"card-body d-flex flex-column p-2 p-sm-3\">
                    <!-- Titre + burger -->
                    <div class=\"d-flex justify-content-between align-items-start mb-1\">
                        <h5 class=\"card-title text-truncate mb-0 small\" title=\"{{ category.name }}\">
                            {{ category.name|u.truncate(18) }}
                            {% if category.parent %}
                                <br><small class=\"text-muted\">
                                    <i class=\"fas fa-level-up-alt me-1\"></i>{{ category.parent.name|u.truncate(12) }}
                                </small>
                            {% endif %}
                        </h5>
                        <div class=\"dropdown ms-1 flex-shrink-0\">
                            <button class=\"btn btn-sm btn-light p-1\" type=\"button\" data-bs-toggle=\"dropdown\">
                                <i class=\"fas fa-bars\"></i>
                            </button>
                            <ul class=\"dropdown-menu dropdown-menu-end\">
                                <li>
                                    <a class=\"dropdown-item\" href=\"{{ path('app_admin_category_recipe_show', {'id': category.id}) }}\">
                                        <i class=\"fas fa-eye me-2\"></i> Voir
                                    </a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item\" href=\"{{ path('app_admin_category_recipe_edit', {'id': category.id}) }}\">
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
                                        {# ✅ BOUTON SUPPRIMER VISIBLE #}
                                        <button type=\"button\" 
                                                class=\"dropdown-item delete-category-btn\"
                                                data-category-id=\"{{ category.id }}\"
                                                data-category-name=\"{{ category.name }}\"
                                                data-has-recipes=\"{{ category.recipes|length > 0 ? 'true' : 'false' }}\"
                                                data-has-children=\"{{ category.children|length > 0 ? 'true' : 'false' }}\"
                                                data-token=\"{{ csrf_token('delete' ~ category.id) }}\">
                                            <i class=\"fas fa-trash me-2\"></i> <strong>Supprimer</strong>
                                        </button>
                                    {% endif %}
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Description -->
                    <p class=\"text-muted small mb-2 d-none d-sm-block\">
                        {{ category.description|default('Aucune description')|u.truncate(60, '...') }}
                    </p>
                    <p class=\"text-muted small mb-2 d-block d-sm-none\">
                        {{ category.description|default('Aucune description')|u.truncate(35, '...') }}
                    </p>

                    <!-- Badges -->
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
                    </div>

                    <!-- Compteurs -->
                    <div class=\"row g-0 mb-2\">
                        <div class=\"col-6\">
                            <small class=\"text-muted d-block\">Articles</small>
                            <span class=\"fw-bold text-primary small\">
                                <i class=\"fas fa-utensils me-1\"></i>{{ category.recipes|length }}
                            </span>
                        </div>
                        <div class=\"col-6 text-end\">
                            <small class=\"text-muted d-block\">Sous-cat.</small>
                            <span class=\"fw-bold text-info small\">
                                <i class=\"fas fa-sitemap me-1\"></i>{{ category.children|length }}
                            </span>
                        </div>
                    </div>

                    <!-- Actions secondaires -->
                    <div class=\"action-buttons-row\">
                        <a href=\"{{ path('app_admin_category_recipe_recipes', {'id': category.id}) }}\" 
                           class=\"btn btn-sm btn-outline-info\">
                            <i class=\"fas fa-list\"></i>
                            <span class=\"d-none d-sm-inline\">Articles</span>
                        </a>
                        <a href=\"{{ path('app_admin_category_recipe_promotions', {'id': category.id}) }}\" 
                           class=\"btn btn-sm btn-outline-warning\">
                            <i class=\"fas fa-percent\"></i>
                            <span class=\"d-none d-sm-inline\">Promos</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        {% else %}
        <div class=\"col-12\">
            <div class=\"card shadow\">
                <div class=\"card-body text-center py-4 py-md-5\">
                    <i class=\"fas fa-utensils fa-3x fa-md-4 text-muted mb-3\"></i>
                    <h4 class=\"text-muted fs-5 fs-md-4\">Aucune catégorie de plats trouvée</h4>
                    <a href=\"{{ path('app_admin_category_recipe_index') }}\" class=\"btn btn-outline-primary btn-sm mt-2\">
                        <i class=\"fas fa-undo me-1\"></i> Réinitialiser
                    </a>
                </div>
            </div>
        </div>
        {% endfor %}
    </div>

    <!-- Pagination -->
    {% if totalPages > 1 %}
    <nav aria-label=\"Pagination\" class=\"mt-3 mt-md-4\">
        <ul class=\"pagination pagination-sm justify-content-center flex-wrap\">
            {% for i in 1..totalPages %}
                <li class=\"page-item {{ i == currentPage ? 'active' }}\">
                    <a class=\"page-link\" href=\"{{ path('app_admin_category_recipe_index', app.request.query.all|merge({'page': i})) }}\">{{ i }}</a>
                </li>
            {% endfor %}
        </ul>
    </nav>
    {% endif %}
</div>

{# ==================== MODALES ==================== #}

{# Modale quota #}
<div class=\"modal fade\" id=\"quotaReachedModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-warning text-dark\">
                <h5 class=\"modal-title fs-6\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Quota atteint
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-3 py-md-4\">
                <i class=\"fas fa-ban fa-3x text-warning mb-3\"></i>
                <h5 class=\"fs-6\">Limite de {{ quota }} catégories atteinte</h5>
                <p class=\"text-muted small\">Pour ajouter de nouvelles catégories, passez à un plan supérieur.</p>
            </div>
            <div class=\"modal-footer justify-content-center flex-wrap py-2 py-md-3\">
                <a href=\"{{ path('app_subscription_plans') }}\" class=\"btn btn-warning btn-sm px-3 w-100 w-sm-auto\">
                    <i class=\"fas fa-arrow-up me-2\"></i> Voir les offres
                </a>
                <button type=\"button\" class=\"btn btn-outline-secondary btn-sm w-100 w-sm-auto\" data-bs-dismiss=\"modal\">
                    Annuler
                </button>
            </div>
        </div>
    </div>
</div>

{# Modale toggle #}
<div class=\"modal fade\" id=\"toggleCategoryModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title fs-6\" id=\"toggleModalTitle\">Confirmation</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-3 py-md-4\">
                <i class=\"fas fa-question-circle fa-3x text-primary mb-3\"></i>
                <p id=\"toggleModalMessage\" class=\"small\"></p>
            </div>
            <div class=\"modal-footer justify-content-center flex-wrap py-2 py-md-3\">
                <form id=\"toggleCategoryForm\" method=\"post\" style=\"display: inline;\">
                    <input type=\"hidden\" name=\"_token\" id=\"toggleCategoryToken\" value=\"\">
                    <button type=\"submit\" class=\"btn btn-primary btn-sm px-3 w-100 w-sm-auto\">
                        <i class=\"fas fa-check me-2\"></i> Confirmer
                    </button>
                </form>
                <button type=\"button\" class=\"btn btn-outline-secondary btn-sm w-100 w-sm-auto\" data-bs-dismiss=\"modal\">
                    Annuler
                </button>
            </div>
        </div>
    </div>
</div>

{# Modale suppression #}
<div class=\"modal fade\" id=\"deleteCategoryModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title fs-6\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Confirmation de suppression
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <div id=\"deleteCategoryModalContent\"></div>
            </div>
            <div class=\"modal-footer flex-wrap gap-2 py-2 py-md-3\">
                <button type=\"button\" class=\"btn btn-secondary btn-sm flex-grow-1 flex-md-grow-0\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"deleteCategoryForm\" method=\"post\" action=\"\" class=\"flex-grow-1 flex-md-grow-0\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteCategoryToken\" value=\"\">
                    <button type=\"submit\" class=\"btn btn-danger btn-sm w-100\" id=\"deleteCategoryConfirmBtn\">Supprimer</button>
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
    // Select2 promotion
    const promotionEl = document.getElementById('promotion');
    if (promotionEl && typeof \$ !== 'undefined') {
        \$(promotionEl).select2({
            theme: 'bootstrap-5',
            language: 'fr',
            placeholder: '🎯 Sélectionnez une promotion',
            allowClear: true,
            width: '100%',
            dropdownAutoWidth: true,
            dropdownParent: \$(promotionEl).parent()
        });
    }

    // Bouton Nouvelle
    const newCategoryBtn = document.getElementById('newCategoryBtn');
    if (newCategoryBtn) {
        newCategoryBtn.addEventListener('click', function(e) {
            e.preventDefault();
            {% if quotaReached %}
                new bootstrap.Modal(document.getElementById('quotaReachedModal')).show();
            {% else %}
                window.location.href = \"{{ path('app_admin_category_recipe_new') }}\";
            {% endif %}
        });
    }

    // Modale toggle
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
            toggleForm.action = `/admin/category-recipe/\${categoryId}/toggle-status`;
            toggleToken.value = this.dataset.token;
            toggleModal.show();
        });
    });

    // Modale suppression
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteCategoryModal'));
    const deleteForm = document.getElementById('deleteCategoryForm');
    const deleteToken = document.getElementById('deleteCategoryToken');
    const deleteConfirmBtn = document.getElementById('deleteCategoryConfirmBtn');
    const deleteModalContent = document.getElementById('deleteCategoryModalContent');

    document.querySelectorAll('.delete-category-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const id = this.dataset.categoryId;
            const name = this.dataset.categoryName;
            const hasRecipes = this.dataset.hasRecipes === 'true';
            const hasChildren = this.dataset.hasChildren === 'true';
            const token = this.dataset.token;

            deleteForm.action = `/admin/category-recipe/\${id}`;
            deleteToken.value = token;

            if (hasRecipes || hasChildren) {
                let message = '';
                if (hasRecipes && hasChildren) {
                    message = `Cette catégorie contient des plats et des sous-catégories.`;
                } else if (hasRecipes) {
                    message = `Cette catégorie contient des plats.`;
                } else if (hasChildren) {
                    message = `Cette catégorie contient des sous-catégories.`;
                }
                message += ` Pour confirmer la suppression, saisissez exactement le nom \"\${name}\".`;
                deleteModalContent.innerHTML = `
                    <div class=\"alert alert-warning small p-2\">
                        <i class=\"fas fa-exclamation-triangle me-2\"></i>
                        \${message}
                    </div>
                    <div class=\"input-group mt-2\">
                        <span class=\"input-group-text\"><i class=\"fas fa-tag\"></i></span>
                        <input type=\"text\" id=\"deleteConfirmName\" class=\"form-control form-control-sm\" placeholder=\"Saisissez le nom\">
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

    deleteModal._element.addEventListener('hidden.bs.modal', function() {
        deleteConfirmBtn.disabled = false;
        deleteModalContent.innerHTML = '';
    });
});
</script>
{% endblock %}", "admin/category_recipe/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\category_recipe\\index.html.twig");
    }
}
