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
/* ============================================
   CARTES CATÉGORIES
   ============================================ */
.category-card {
    transition: transform 0.2s, box-shadow 0.2s;
    border: 1px solid transparent;
    border-radius: 12px;
    overflow: hidden;
}
.category-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.15) !important;
    border-color: #dee2e6;
}
.category-image-container {
    position: relative;
    height: 160px;
    overflow: hidden;
    border-radius: 8px 8px 0 0;
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
    
    h1.h3 {
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
    .stat-item .p-3 {
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
    
    /* ✅ AMÉLIORER VISIBILITÉ BOUTON SUPPRIMER DANS LE MENU BURGER */
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

/* ============================================
   AMÉLIORATION BOUTON SUPPRIMER (TOUS ÉCRANS)
   ============================================ */
.delete-category-btn {
    color: #dc3545 !important;
    font-weight: 500;
}
.delete-category-btn:hover,
.delete-category-btn:focus {
    background-color: #dc3545 !important;
    color: white !important;
}
.delete-category-btn i {
    color: inherit;
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

    // line 373
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

        // line 374
        yield "<div class=\"container-fluid px-4\">
    <!-- ============================================
         EN-TÊTE
         ============================================ -->
    <div class=\"page-header d-flex justify-content-between align-items-center mb-4 flex-wrap\">
        <div>
            <h1 class=\"h3 mb-1 text-gray-800 fw-bold\">
                <i class=\"fas fa-tags me-2\"></i>
                <span class=\"d-none d-sm-inline\">Gestion des catégories</span>
                <span class=\"d-inline d-sm-none\">Catégories</span>
            </h1>
            <p class=\"text-muted mb-0 d-none d-sm-block\">Organisez vos produits par catégories et sous-catégories</p>
        </div>

        <div class=\"header-actions d-flex align-items-center gap-3 flex-wrap\">
            <!-- Quota -->
            <div class=\"card bg-light p-2 p-sm-3\">
                <div class=\"d-flex align-items-center\">
                    <div class=\"me-2 me-sm-3\">
                        <span class=\"badge bg-primary p-2\">
                            <i class=\"fas fa-chart-line\"></i>
                        </span>
                    </div>
                    <div>
                        <small class=\"text-muted d-none d-sm-block\">Catégories dans quota</small>
                        <h5 class=\"mb-0 ";
        // line 399
        yield (((($tmp = (isset($context["quotaReached"]) || array_key_exists("quotaReached", $context) ? $context["quotaReached"] : (function () { throw new RuntimeError('Variable "quotaReached" does not exist.', 399, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-danger") : ("text-success"));
        yield "\" style=\"font-size: 0.9rem;\">
                            ";
        // line 400
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activeCount"]) || array_key_exists("activeCount", $context) ? $context["activeCount"] : (function () { throw new RuntimeError('Variable "activeCount" does not exist.', 400, $this->source); })()), "html", null, true);
        yield " / ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["quota"]) || array_key_exists("quota", $context) ? $context["quota"] : (function () { throw new RuntimeError('Variable "quota" does not exist.', 400, $this->source); })()), "html", null, true);
        yield "
                            ";
        // line 401
        if (((isset($context["quota"]) || array_key_exists("quota", $context) ? $context["quota"] : (function () { throw new RuntimeError('Variable "quota" does not exist.', 401, $this->source); })()) == "Illimité")) {
            // line 402
            yield "                                <i class=\"fas fa-infinity text-info ms-1\"></i>
                            ";
        }
        // line 404
        yield "                        </h5>
                    </div>
                </div>
            </div>

            <!-- Bouton Nouvelle -->
            <a href=\"#\" id=\"newCategoryBtn\" class=\"btn btn-primary btn-sm\">
                <i class=\"fas fa-plus-circle me-1\"></i>
                <span class=\"d-none d-sm-inline\">Nouvelle Catégorie</span>
                <span class=\"d-inline d-sm-none\">Nouvelle</span>
            </a>
        </div>
    </div>

    ";
        // line 419
        yield "    ";
        if (((isset($context["quotaReached"]) || array_key_exists("quotaReached", $context) ? $context["quotaReached"] : (function () { throw new RuntimeError('Variable "quotaReached" does not exist.', 419, $this->source); })()) && ((isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 419, $this->source); })()) != "premium"))) {
            // line 420
            yield "    <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
        <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-2\">
            <div>
                <i class=\"fas fa-exclamation-triangle me-2\"></i>
                <strong>Quota atteint !</strong> Vous avez utilisé vos ";
            // line 424
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["quota"]) || array_key_exists("quota", $context) ? $context["quota"] : (function () { throw new RuntimeError('Variable "quota" does not exist.', 424, $this->source); })()), "html", null, true);
            yield " catégories dans le quota.
            </div>
            <a href=\"";
            // line 426
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subscription_plans");
            yield "\" class=\"btn btn-warning btn-sm w-100 w-sm-auto\">
                <i class=\"fas fa-arrow-up me-1\"></i> Voir les offres
            </a>
        </div>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    </div>
    ";
        }
        // line 433
        yield "
    ";
        // line 435
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 435, $this->source); })()), "flashes", ["success"], "method", false, false, false, 435));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 436
            yield "        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
            <i class=\"fas fa-check-circle me-2\"></i> ";
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
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 441, $this->source); })()), "flashes", ["error"], "method", false, false, false, 441));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 442
            yield "        <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
            <i class=\"fas fa-exclamation-circle me-2\"></i> ";
            // line 443
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 447
        yield "
    <!-- ============================================
         STATISTIQUES
         ============================================ -->
    <div class=\"card border-0 shadow-sm mb-4\">
        <div class=\"card-header bg-white py-2 py-sm-3\">
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
        // line 465
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalFiltered"]) || array_key_exists("totalFiltered", $context) ? $context["totalFiltered"] : (function () { throw new RuntimeError('Variable "totalFiltered" does not exist.', 465, $this->source); })()), "html", null, true);
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
        // line 476
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activeFiltered"]) || array_key_exists("activeFiltered", $context) ? $context["activeFiltered"] : (function () { throw new RuntimeError('Variable "activeFiltered" does not exist.', 476, $this->source); })()), "html", null, true);
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
        // line 487
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["inactiveFiltered"]) || array_key_exists("inactiveFiltered", $context) ? $context["inactiveFiltered"] : (function () { throw new RuntimeError('Variable "inactiveFiltered" does not exist.', 487, $this->source); })()), "html", null, true);
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
        // line 498
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["mainFiltered"]) || array_key_exists("mainFiltered", $context) ? $context["mainFiltered"] : (function () { throw new RuntimeError('Variable "mainFiltered" does not exist.', 498, $this->source); })()), "html", null, true);
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
        // line 512
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subFiltered"]) || array_key_exists("subFiltered", $context) ? $context["subFiltered"] : (function () { throw new RuntimeError('Variable "subFiltered" does not exist.', 512, $this->source); })()), "html", null, true);
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
        // line 523
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subscriptionActiveFiltered"]) || array_key_exists("subscriptionActiveFiltered", $context) ? $context["subscriptionActiveFiltered"] : (function () { throw new RuntimeError('Variable "subscriptionActiveFiltered" does not exist.', 523, $this->source); })()), "html", null, true);
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
        // line 534
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subscriptionInactiveFiltered"]) || array_key_exists("subscriptionInactiveFiltered", $context) ? $context["subscriptionInactiveFiltered"] : (function () { throw new RuntimeError('Variable "subscriptionInactiveFiltered" does not exist.', 534, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-clock fa-2x text-secondary opacity-50\"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            ";
        // line 542
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 542, $this->source); })()) == "pharmacy")) {
            // line 543
            yield "            <div class=\"row g-2 mt-2 pt-2 border-top\">
                <div class=\"col-6\">
                    <div class=\"stat-item p-2 p-sm-3 bg-light rounded h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-success text-uppercase small fw-bold d-block\">Visibles</span>
                                <h3 class=\"mb-0 text-success\">";
            // line 549
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["visibleFiltered"]) || array_key_exists("visibleFiltered", $context) ? $context["visibleFiltered"] : (function () { throw new RuntimeError('Variable "visibleFiltered" does not exist.', 549, $this->source); })()), "html", null, true);
            yield "</h3>
                            </div>
                            <i class=\"fas fa-eye fa-2x text-success opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-6\">
                    <div class=\"stat-item p-2 p-sm-3 bg-light rounded h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-secondary text-uppercase small fw-bold d-block\">Masquées</span>
                                <h3 class=\"mb-0 text-secondary\">";
            // line 560
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["hiddenFiltered"]) || array_key_exists("hiddenFiltered", $context) ? $context["hiddenFiltered"] : (function () { throw new RuntimeError('Variable "hiddenFiltered" does not exist.', 560, $this->source); })()), "html", null, true);
            yield "</h3>
                            </div>
                            <i class=\"fas fa-eye-slash fa-2x text-secondary opacity-50\"></i>
                        </div>
                    </div>
                </div>
            </div>
            ";
        }
        // line 568
        yield "        </div>
    </div>

    <!-- ============================================
         FILTRES
         ============================================ -->
    <div class=\"card border-0 shadow-sm mb-4\">
        <div class=\"card-header bg-white py-2 py-sm-3 d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <h5 class=\"mb-0 small\">
                <i class=\"fas fa-filter me-2 text-primary\"></i>
                <span class=\"d-none d-sm-inline\">Filtres</span>
            </h5>
            ";
        // line 581
        yield "            <div class=\"d-flex gap-1 gap-sm-2 flex-wrap\">
                <a href=\"";
        // line 582
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_index");
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
            <form method=\"get\" id=\"filter-form\">
                ";
        // line 595
        yield "                ";
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 595, $this->source); })()) == "restaurant")) {
            // line 596
            yield "                <div class=\"row g-2 g-sm-3\">
                    <div class=\"col-12 col-sm-6 col-lg-3\">
                        <label for=\"search_restaurant\" class=\"form-label fw-semibold small mb-1\">
                            <i class=\"fas fa-search text-primary me-1\"></i>Rechercher
                        </label>
                        <input type=\"text\" name=\"search\" id=\"search_restaurant\" value=\"";
            // line 601
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 601, $this->source); })()), "html", null, true);
            yield "\" 
                            class=\"form-control form-control-sm\" placeholder=\"Nom, description...\">
                    </div>
                    <div class=\"col-6 col-sm-6 col-lg-3\">
                        <label for=\"status_restaurant\" class=\"form-label fw-semibold small mb-1\">
                            <i class=\"fas fa-toggle-on text-success me-1\"></i>Statut
                        </label>
                        <select name=\"status\" id=\"status_restaurant\" class=\"form-select form-select-sm\">
                            <option value=\"all\" ";
            // line 609
            yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 609, $this->source); })()) == "all")) ? ("selected") : (""));
            yield ">Tous</option>
                            <option value=\"active\" ";
            // line 610
            yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 610, $this->source); })()) == "active")) ? ("selected") : (""));
            yield ">Actives</option>
                            <option value=\"inactive\" ";
            // line 611
            yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 611, $this->source); })()) == "inactive")) ? ("selected") : (""));
            yield ">Inactives</option>
                        </select>
                    </div>
                    <div class=\"col-6 col-sm-6 col-lg-3\">
                        <label for=\"type_restaurant\" class=\"form-label fw-semibold small mb-1\">
                            <i class=\"fas fa-sitemap text-info me-1\"></i>Type
                        </label>
                        <select name=\"type\" id=\"type_restaurant\" class=\"form-select form-select-sm\">
                            <option value=\"all\" ";
            // line 619
            yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 619, $this->source); })()) == "all")) ? ("selected") : (""));
            yield ">Toutes</option>
                            <option value=\"main\" ";
            // line 620
            yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 620, $this->source); })()) == "main")) ? ("selected") : (""));
            yield ">Principales</option>
                            <option value=\"sub\" ";
            // line 621
            yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 621, $this->source); })()) == "sub")) ? ("selected") : (""));
            yield ">Sous-catégories</option>
                        </select>
                    </div>
                    <div class=\"col-6 col-sm-6 col-lg-3\">
                        <label for=\"sub_status_restaurant\" class=\"form-label fw-semibold small mb-1\">
                            <i class=\"fas fa-credit-card text-warning me-1\"></i>Abonnement
                        </label>
                        <select name=\"sub_status\" id=\"sub_status_restaurant\" class=\"form-select form-select-sm\">
                            <option value=\"all\" ";
            // line 629
            yield ((((isset($context["subStatus"]) || array_key_exists("subStatus", $context) ? $context["subStatus"] : (function () { throw new RuntimeError('Variable "subStatus" does not exist.', 629, $this->source); })()) == "all")) ? ("selected") : (""));
            yield ">Tous</option>
                            <option value=\"active\" ";
            // line 630
            yield ((((isset($context["subStatus"]) || array_key_exists("subStatus", $context) ? $context["subStatus"] : (function () { throw new RuntimeError('Variable "subStatus" does not exist.', 630, $this->source); })()) == "active")) ? ("selected") : (""));
            yield ">Actif</option>
                            <option value=\"inactive\" ";
            // line 631
            yield ((((isset($context["subStatus"]) || array_key_exists("subStatus", $context) ? $context["subStatus"] : (function () { throw new RuntimeError('Variable "subStatus" does not exist.', 631, $this->source); })()) == "inactive")) ? ("selected") : (""));
            yield ">Inactif</option>
                        </select>
                    </div>
                </div>

                ";
            // line 637
            yield "                ";
        } elseif (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 637, $this->source); })()) == "pharmacy")) {
            // line 638
            yield "                <div class=\"row g-2 g-sm-3\">
                    <div class=\"col-12 col-sm-6 col-lg-4\">
                        <label for=\"search_pharmacy\" class=\"form-label fw-semibold small mb-1\">
                            <i class=\"fas fa-search text-primary me-1\"></i>Rechercher
                        </label>
                        <input type=\"text\" name=\"search\" id=\"search_pharmacy\" value=\"";
            // line 643
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 643, $this->source); })()), "html", null, true);
            yield "\" 
                            class=\"form-control form-control-sm\" placeholder=\"Nom, description...\">
                    </div>
                    <div class=\"col-6 col-sm-6 col-lg-4\">
                        <label for=\"status_pharmacy\" class=\"form-label fw-semibold small mb-1\">
                            <i class=\"fas fa-toggle-on text-success me-1\"></i>Statut
                        </label>
                        <select name=\"status\" id=\"status_pharmacy\" class=\"form-select form-select-sm\">
                            <option value=\"all\" ";
            // line 651
            yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 651, $this->source); })()) == "all")) ? ("selected") : (""));
            yield ">Tous</option>
                            <option value=\"active\" ";
            // line 652
            yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 652, $this->source); })()) == "active")) ? ("selected") : (""));
            yield ">Actives</option>
                            <option value=\"inactive\" ";
            // line 653
            yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 653, $this->source); })()) == "inactive")) ? ("selected") : (""));
            yield ">Inactives</option>
                        </select>
                    </div>
                    <div class=\"col-6 col-sm-6 col-lg-4\">
                        <label for=\"type_pharmacy\" class=\"form-label fw-semibold small mb-1\">
                            <i class=\"fas fa-sitemap text-info me-1\"></i>Type
                        </label>
                        <select name=\"type\" id=\"type_pharmacy\" class=\"form-select form-select-sm\">
                            <option value=\"all\" ";
            // line 661
            yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 661, $this->source); })()) == "all")) ? ("selected") : (""));
            yield ">Toutes</option>
                            <option value=\"main\" ";
            // line 662
            yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 662, $this->source); })()) == "main")) ? ("selected") : (""));
            yield ">Principales</option>
                            <option value=\"sub\" ";
            // line 663
            yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 663, $this->source); })()) == "sub")) ? ("selected") : (""));
            yield ">Sous-catégories</option>
                        </select>
                    </div>
                    <div class=\"col-6 col-sm-6 col-lg-4\">
                        <label for=\"sub_status_pharmacy\" class=\"form-label fw-semibold small mb-1\">
                            <i class=\"fas fa-credit-card text-warning me-1\"></i>Abonnement
                        </label>
                        <select name=\"sub_status\" id=\"sub_status_pharmacy\" class=\"form-select form-select-sm\">
                            <option value=\"all\" ";
            // line 671
            yield ((((isset($context["subStatus"]) || array_key_exists("subStatus", $context) ? $context["subStatus"] : (function () { throw new RuntimeError('Variable "subStatus" does not exist.', 671, $this->source); })()) == "all")) ? ("selected") : (""));
            yield ">Tous</option>
                            <option value=\"active\" ";
            // line 672
            yield ((((isset($context["subStatus"]) || array_key_exists("subStatus", $context) ? $context["subStatus"] : (function () { throw new RuntimeError('Variable "subStatus" does not exist.', 672, $this->source); })()) == "active")) ? ("selected") : (""));
            yield ">Actif</option>
                            <option value=\"inactive\" ";
            // line 673
            yield ((((isset($context["subStatus"]) || array_key_exists("subStatus", $context) ? $context["subStatus"] : (function () { throw new RuntimeError('Variable "subStatus" does not exist.', 673, $this->source); })()) == "inactive")) ? ("selected") : (""));
            yield ">Inactif</option>
                        </select>
                    </div>
                    <div class=\"col-6 col-sm-6 col-lg-4\">
                        <label for=\"visibility\" class=\"form-label fw-semibold small mb-1\">
                            <i class=\"fas fa-eye text-info me-1\"></i>Visibilité
                        </label>
                        <select name=\"visibility\" id=\"visibility\" class=\"form-select form-select-sm\">
                            <option value=\"all\" ";
            // line 681
            yield ((((isset($context["visibility"]) || array_key_exists("visibility", $context) ? $context["visibility"] : (function () { throw new RuntimeError('Variable "visibility" does not exist.', 681, $this->source); })()) == "all")) ? ("selected") : (""));
            yield ">Toutes</option>
                            <option value=\"visible\" ";
            // line 682
            yield ((((isset($context["visibility"]) || array_key_exists("visibility", $context) ? $context["visibility"] : (function () { throw new RuntimeError('Variable "visibility" does not exist.', 682, $this->source); })()) == "visible")) ? ("selected") : (""));
            yield ">Visibles</option>
                            <option value=\"hidden\" ";
            // line 683
            yield ((((isset($context["visibility"]) || array_key_exists("visibility", $context) ? $context["visibility"] : (function () { throw new RuntimeError('Variable "visibility" does not exist.', 683, $this->source); })()) == "hidden")) ? ("selected") : (""));
            yield ">Masquées</option>
                        </select>
                    </div>
                    <div class=\"col-12 col-sm-6 col-lg-4\">
                        <label for=\"promotion_pharmacy\" class=\"form-label fw-semibold small mb-1\">
                            <i class=\"fas fa-tags text-danger me-1\"></i>Promotion
                        </label>
                        <select name=\"promotion\" id=\"promotion_pharmacy\" class=\"form-select form-select-sm\">
                            <option value=\"0\">🎯 Toutes les promotions</option>
                            ";
            // line 692
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 692, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
                // line 693
                yield "                                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 693), "html", null, true);
                yield "\" ";
                yield ((((isset($context["selectedPromotion"]) || array_key_exists("selectedPromotion", $context) ? $context["selectedPromotion"] : (function () { throw new RuntimeError('Variable "selectedPromotion" does not exist.', 693, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 693))) ? ("selected") : (""));
                yield ">
                                    ";
                // line 694
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "name", [], "any", false, false, false, 694), "html", null, true);
                yield "
                                    ";
                // line 695
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "discountPercentage", [], "any", false, false, false, 695)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 696
                    yield "                                        (-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "discountPercentage", [], "any", false, false, false, 696), "html", null, true);
                    yield "%)
                                    ";
                } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,                 // line 697
$context["promotion"], "discountAmount", [], "any", false, false, false, 697)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 698
                    yield "                                        (-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "discountAmount", [], "any", false, false, false, 698), 0, ",", " "), "html", null, true);
                    yield " FCFA)
                                    ";
                }
                // line 700
                yield "                                </option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['promotion'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 702
            yield "                        </select>
                    </div>
                </div>

                ";
            // line 707
            yield "                ";
        } else {
            // line 708
            yield "                <div class=\"row g-2 g-sm-3\">
                    <div class=\"col-12 col-sm-6 col-lg-3\">
                        <label for=\"search_other\" class=\"form-label fw-semibold small mb-1\">
                            <i class=\"fas fa-search text-primary me-1\"></i>Rechercher
                        </label>
                        <input type=\"text\" name=\"search\" id=\"search_other\" value=\"";
            // line 713
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 713, $this->source); })()), "html", null, true);
            yield "\" 
                            class=\"form-control form-control-sm\" placeholder=\"Nom, description...\">
                    </div>
                    <div class=\"col-6 col-sm-6 col-lg-2\">
                        <label for=\"status_other\" class=\"form-label fw-semibold small mb-1\">
                            <i class=\"fas fa-toggle-on text-success me-1\"></i>Statut
                        </label>
                        <select name=\"status\" id=\"status_other\" class=\"form-select form-select-sm\">
                            <option value=\"all\" ";
            // line 721
            yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 721, $this->source); })()) == "all")) ? ("selected") : (""));
            yield ">Tous</option>
                            <option value=\"active\" ";
            // line 722
            yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 722, $this->source); })()) == "active")) ? ("selected") : (""));
            yield ">Actives</option>
                            <option value=\"inactive\" ";
            // line 723
            yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 723, $this->source); })()) == "inactive")) ? ("selected") : (""));
            yield ">Inactives</option>
                        </select>
                    </div>
                    <div class=\"col-6 col-sm-6 col-lg-2\">
                        <label for=\"type_other\" class=\"form-label fw-semibold small mb-1\">
                            <i class=\"fas fa-sitemap text-info me-1\"></i>Type
                        </label>
                        <select name=\"type\" id=\"type_other\" class=\"form-select form-select-sm\">
                            <option value=\"all\" ";
            // line 731
            yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 731, $this->source); })()) == "all")) ? ("selected") : (""));
            yield ">Toutes</option>
                            <option value=\"main\" ";
            // line 732
            yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 732, $this->source); })()) == "main")) ? ("selected") : (""));
            yield ">Principales</option>
                            <option value=\"sub\" ";
            // line 733
            yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 733, $this->source); })()) == "sub")) ? ("selected") : (""));
            yield ">Sous-catégories</option>
                        </select>
                    </div>
                    <div class=\"col-6 col-sm-6 col-lg-2\">
                        <label for=\"sub_status_other\" class=\"form-label fw-semibold small mb-1\">
                            <i class=\"fas fa-credit-card text-warning me-1\"></i>Abonnement
                        </label>
                        <select name=\"sub_status\" id=\"sub_status_other\" class=\"form-select form-select-sm\">
                            <option value=\"all\" ";
            // line 741
            yield ((((isset($context["subStatus"]) || array_key_exists("subStatus", $context) ? $context["subStatus"] : (function () { throw new RuntimeError('Variable "subStatus" does not exist.', 741, $this->source); })()) == "all")) ? ("selected") : (""));
            yield ">Tous</option>
                            <option value=\"active\" ";
            // line 742
            yield ((((isset($context["subStatus"]) || array_key_exists("subStatus", $context) ? $context["subStatus"] : (function () { throw new RuntimeError('Variable "subStatus" does not exist.', 742, $this->source); })()) == "active")) ? ("selected") : (""));
            yield ">Actif</option>
                            <option value=\"inactive\" ";
            // line 743
            yield ((((isset($context["subStatus"]) || array_key_exists("subStatus", $context) ? $context["subStatus"] : (function () { throw new RuntimeError('Variable "subStatus" does not exist.', 743, $this->source); })()) == "inactive")) ? ("selected") : (""));
            yield ">Inactif</option>
                        </select>
                    </div>
                    <div class=\"col-12 col-sm-6 col-lg-3\">
                        <label for=\"promotion_other\" class=\"form-label fw-semibold small mb-1\">
                            <i class=\"fas fa-tags text-danger me-1\"></i>Promotion
                        </label>
                        <select name=\"promotion\" id=\"promotion_other\" class=\"form-select form-select-sm\">
                            <option value=\"0\">🎯 Toutes les promotions</option>
                            ";
            // line 752
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 752, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
                // line 753
                yield "                                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 753), "html", null, true);
                yield "\" ";
                yield ((((isset($context["selectedPromotion"]) || array_key_exists("selectedPromotion", $context) ? $context["selectedPromotion"] : (function () { throw new RuntimeError('Variable "selectedPromotion" does not exist.', 753, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 753))) ? ("selected") : (""));
                yield ">
                                    ";
                // line 754
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "name", [], "any", false, false, false, 754), "html", null, true);
                yield "
                                    ";
                // line 755
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "discountPercentage", [], "any", false, false, false, 755)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 756
                    yield "                                        (-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "discountPercentage", [], "any", false, false, false, 756), "html", null, true);
                    yield "%)
                                    ";
                } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,                 // line 757
$context["promotion"], "discountAmount", [], "any", false, false, false, 757)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 758
                    yield "                                        (-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "discountAmount", [], "any", false, false, false, 758), 0, ",", " "), "html", null, true);
                    yield " FCFA)
                                    ";
                }
                // line 760
                yield "                                </option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['promotion'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 762
            yield "                        </select>
                    </div>
                </div>
                ";
        }
        // line 766
        yield "            </form>
        </div>
    </div>

    ";
        // line 771
        yield "    ";
        if ((((isset($context["subStatus"]) || array_key_exists("subStatus", $context) ? $context["subStatus"] : (function () { throw new RuntimeError('Variable "subStatus" does not exist.', 771, $this->source); })()) == "inactive") && ((isset($context["subscriptionInactiveFiltered"]) || array_key_exists("subscriptionInactiveFiltered", $context) ? $context["subscriptionInactiveFiltered"] : (function () { throw new RuntimeError('Variable "subscriptionInactiveFiltered" does not exist.', 771, $this->source); })()) > 0))) {
            // line 772
            yield "        <div class=\"alert alert-info mb-4 small\">
            <i class=\"fas fa-info-circle me-2\"></i>
            <strong>";
            // line 774
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subscriptionInactiveFiltered"]) || array_key_exists("subscriptionInactiveFiltered", $context) ? $context["subscriptionInactiveFiltered"] : (function () { throw new RuntimeError('Variable "subscriptionInactiveFiltered" does not exist.', 774, $this->source); })()), "html", null, true);
            yield " catégorie(s)</strong> désactivées par abonnement.
        </div>
    ";
        }
        // line 777
        yield "
    ";
        // line 778
        if ((((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 778, $this->source); })()) == "pharmacy") && ((isset($context["visibility"]) || array_key_exists("visibility", $context) ? $context["visibility"] : (function () { throw new RuntimeError('Variable "visibility" does not exist.', 778, $this->source); })()) != "all"))) {
            // line 779
            yield "        <div class=\"alert alert-info mb-4 small\">
            <i class=\"fas fa-info-circle me-2\"></i>
            ";
            // line 781
            if (((isset($context["visibility"]) || array_key_exists("visibility", $context) ? $context["visibility"] : (function () { throw new RuntimeError('Variable "visibility" does not exist.', 781, $this->source); })()) == "visible")) {
                // line 782
                yield "                Affichage des catégories <strong>visibles</strong> sur le marketplace.
            ";
            } else {
                // line 784
                yield "                Affichage des catégories <strong>masquées</strong> sur le marketplace.
            ";
            }
            // line 786
            yield "        </div>
    ";
        }
        // line 788
        yield "
    <!-- ============================================
         GRILLE CATÉGORIES
         ============================================ -->
    <div class=\"row g-2 g-sm-3\">
        ";
        // line 793
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 793, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 794
            yield "        <div class=\"col-6 col-md-4 col-lg-3 col-xl-3\">
            <div class=\"card category-card h-100 shadow-sm ";
            // line 795
            yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["category"], "subscriptionActive", [], "any", false, false, false, 795)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("border-warning") : (""));
            yield "\">
                <!-- Image -->
                <div class=\"category-image-container\">
                    ";
            // line 798
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 798)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 799
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/categories/" . CoreExtension::getAttribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 799))), "html", null, true);
                yield "\" 
                            alt=\"";
                // line 800
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 800), "html", null, true);
                yield "\"
                            class=\"category-image\">
                    ";
            } else {
                // line 803
                yield "                        <div class=\"category-image-placeholder\">
                            <i class=\"fas fa-tags fa-3x text-muted\"></i>
                        </div>
                    ";
            }
            // line 807
            yield "                </div>

                <!-- Contenu -->
                <div class=\"card-body d-flex flex-column p-2 p-sm-3\">
                    <!-- Titre + Menu burger -->
                    <div class=\"d-flex justify-content-between align-items-start mb-1\">
                        <h5 class=\"card-title text-truncate mb-0 small\" title=\"";
            // line 813
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 813), "html", null, true);
            yield "\">
                            ";
            // line 814
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 814)), "truncate", [18], "method", false, false, false, 814), "html", null, true);
            yield "
                            ";
            // line 815
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "parent", [], "any", false, false, false, 815)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 816
                yield "                                <br><small class=\"text-muted\">
                                    <i class=\"fas fa-level-up-alt me-1\"></i>";
                // line 817
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["category"], "parent", [], "any", false, false, false, 817), "name", [], "any", false, false, false, 817)), "truncate", [12], "method", false, false, false, 817), "html", null, true);
                yield "
                                </small>
                            ";
            }
            // line 820
            yield "                        </h5>
                        <div class=\"dropdown ms-1 flex-shrink-0\">
                            <button class=\"btn btn-sm btn-light p-1\" type=\"button\" data-bs-toggle=\"dropdown\">
                                <i class=\"fas fa-bars\"></i>
                            </button>
                            <ul class=\"dropdown-menu dropdown-menu-end\">
                                <li>
                                    <a class=\"dropdown-item\" href=\"";
            // line 827
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 827)]), "html", null, true);
            yield "\">
                                        <i class=\"fas fa-eye me-2\"></i> Voir
                                    </a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item\" href=\"";
            // line 832
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 832)]), "html", null, true);
            yield "\">
                                        <i class=\"fas fa-edit me-2\"></i> Modifier
                                    </a>
                                </li>
                                <li>
                                    ";
            // line 837
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "subscriptionActive", [], "any", false, false, false, 837)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 838
                yield "                                        <button type=\"button\" 
                                                class=\"dropdown-item toggle-category-btn\"
                                                data-category-id=\"";
                // line 840
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 840), "html", null, true);
                yield "\"
                                                data-category-name=\"";
                // line 841
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 841), "html", null, true);
                yield "\"
                                                data-current-status=\"";
                // line 842
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "isActive", [], "any", false, false, false, 842)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : ("inactive"));
                yield "\"
                                                data-token=\"";
                // line 843
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle-status" . CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 843))), "html", null, true);
                yield "\">
                                            <i class=\"fas ";
                // line 844
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "isActive", [], "any", false, false, false, 844)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-toggle-on") : ("fa-toggle-off"));
                yield " me-2\"></i>
                                            ";
                // line 845
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "isActive", [], "any", false, false, false, 845)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
                yield "
                                        </button>
                                    ";
            } else {
                // line 848
                yield "                                        <span class=\"dropdown-item text-muted disabled\">
                                            <i class=\"fas fa-ban me-2\"></i> Non disponible
                                        </span>
                                    ";
            }
            // line 852
            yield "                                </li>
                                <li><hr class=\"dropdown-divider\"></li>
                                <li>
                                    ";
            // line 855
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 856
                yield "                                        ";
                // line 857
                yield "                                        <button type=\"button\" 
                                                class=\"dropdown-item delete-category-btn\"
                                                data-category-id=\"";
                // line 859
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 859), "html", null, true);
                yield "\"
                                                data-category-name=\"";
                // line 860
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 860), "html", null, true);
                yield "\"
                                                data-has-products=\"";
                // line 861
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "products", [], "any", false, false, false, 861)) > 0)) ? ("true") : ("false"));
                yield "\"
                                                data-has-children=\"";
                // line 862
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 862)) > 0)) ? ("true") : ("false"));
                yield "\"
                                                data-token=\"";
                // line 863
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 863))), "html", null, true);
                yield "\">
                                            <i class=\"fas fa-trash me-2\"></i> <strong>Supprimer</strong>
                                        </button>
                                    ";
            }
            // line 867
            yield "                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Description -->
                    <p class=\"text-muted small mb-2 d-none d-sm-block\">
                        ";
            // line 874
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "description", [], "any", true, true, false, 874)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 874), "Aucune description")) : ("Aucune description"))), "truncate", [60, "..."], "method", false, false, false, 874), "html", null, true);
            yield "
                    </p>
                    <p class=\"text-muted small mb-2 d-block d-sm-none\">
                        ";
            // line 877
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "description", [], "any", true, true, false, 877)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 877), "Aucune description")) : ("Aucune description"))), "truncate", [35, "..."], "method", false, false, false, 877), "html", null, true);
            yield "
                    </p>

                    <!-- Badges -->
                    <div class=\"category-badges\">
                        ";
            // line 882
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["category"], "subscriptionActive", [], "any", false, false, false, 882)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 883
                yield "                            <span class=\"badge bg-warning text-dark\">
                                <i class=\"fas fa-clock fa-xs me-1 d-none d-sm-inline\"></i> En attente
                            </span>
                        ";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 886
$context["category"], "isActive", [], "any", false, false, false, 886)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 887
                yield "                            <span class=\"badge bg-success\">
                                <i class=\"fas fa-check-circle fa-xs me-1 d-none d-sm-inline\"></i> Active
                            </span>
                        ";
            } else {
                // line 891
                yield "                            <span class=\"badge bg-danger\">
                                <i class=\"fas fa-pause-circle fa-xs me-1 d-none d-sm-inline\"></i> Désactivée
                            </span>
                        ";
            }
            // line 895
            yield "                        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "subscriptionActive", [], "any", false, false, false, 895)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 896
                yield "                            <span class=\"badge bg-info d-none d-sm-inline\">
                                <i class=\"fas fa-database fa-xs me-1\"></i> Quota
                            </span>
                        ";
            }
            // line 900
            yield "                        ";
            if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 900, $this->source); })()) == "pharmacy")) {
                // line 901
                yield "                            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "companyPublic", [], "any", false, false, false, 901)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 902
                    yield "                                <span class=\"badge bg-primary d-none d-sm-inline\">
                                    <i class=\"fas fa-eye fa-xs me-1\"></i> Visible
                                </span>
                            ";
                } else {
                    // line 906
                    yield "                                <span class=\"badge bg-secondary d-none d-sm-inline\">
                                    <i class=\"fas fa-eye-slash fa-xs me-1\"></i> Masquée
                                </span>
                            ";
                }
                // line 910
                yield "                        ";
            }
            // line 911
            yield "                    </div>

                    <!-- Compteurs -->
                    <div class=\"row g-0 mb-2\">
                        <div class=\"col-6\">
                            <small class=\"text-muted d-block\">Produits</small>
                            <span class=\"fw-bold text-primary small\">
                                <i class=\"fas fa-box me-1\"></i>";
            // line 918
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "products", [], "any", false, false, false, 918)), "html", null, true);
            yield "
                            </span>
                        </div>
                        <div class=\"col-6 text-end\">
                            <small class=\"text-muted d-block\">Sous-cat.</small>
                            <span class=\"fw-bold text-info small\">
                                <i class=\"fas fa-sitemap me-1\"></i>";
            // line 924
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 924)), "html", null, true);
            yield "
                            </span>
                        </div>
                    </div>

                    <!-- Boutons d'action -->
                    <div class=\"action-buttons-row\">
                        <a href=\"";
            // line 931
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_products", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 931)]), "html", null, true);
            yield "\" 
                           class=\"btn btn-sm btn-outline-info\" title=\"Produits\">
                            <i class=\"fas fa-list\"></i>
                            <span class=\"d-none d-sm-inline\">Produits</span>
                        </a>
                        ";
            // line 936
            if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 936, $this->source); })()) != "restaurant")) {
                // line 937
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_promotions", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 937)]), "html", null, true);
                yield "\" 
                           class=\"btn btn-sm btn-outline-warning\" title=\"Promotions\">
                            <i class=\"fas fa-percent\"></i>
                            <span class=\"d-none d-sm-inline\">Promos</span>
                        </a>
                        ";
            }
            // line 943
            yield "                    </div>
                </div>
            </div>
        </div>
        ";
            $context['_iterated'] = true;
        }
        // line 947
        if (!$context['_iterated']) {
            // line 948
            yield "        <div class=\"col-12\">
            <div class=\"card shadow\">
                <div class=\"card-body text-center py-5\">
                    <i class=\"fas fa-tags fa-4x text-muted mb-3\"></i>
                    <h4 class=\"text-muted\">Aucune catégorie trouvée</h4>
                    <a href=\"";
            // line 953
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_index");
            yield "\" class=\"btn btn-outline-primary mt-3\">
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
        // line 960
        yield "    </div>

    <!-- Pagination -->
    ";
        // line 963
        if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 963, $this->source); })()) > 1)) {
            // line 964
            yield "    <nav aria-label=\"Pagination\" class=\"mt-4\">
        <ul class=\"pagination justify-content-center flex-wrap\">
            ";
            // line 966
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 966, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 967
                yield "                <li class=\"page-item ";
                yield ((($context["i"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 967, $this->source); })()))) ? ("active") : (""));
                yield "\">
                    <a class=\"page-link\" href=\"";
                // line 968
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 968, $this->source); })()), "request", [], "any", false, false, false, 968), "query", [], "any", false, false, false, 968), "all", [], "any", false, false, false, 968), ["page" => $context["i"]])), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "</a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 971
            yield "        </ul>
    </nav>
    ";
        }
        // line 974
        yield "</div>

";
        // line 977
        yield "
";
        // line 979
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
        // line 990
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["quota"]) || array_key_exists("quota", $context) ? $context["quota"] : (function () { throw new RuntimeError('Variable "quota" does not exist.', 990, $this->source); })()), "html", null, true);
        yield " catégories dans le quota.</h5>
                <p class=\"text-muted\">Pour ajouter de nouvelles catégories, passez à un plan supérieur.</p>
            </div>
            <div class=\"modal-footer justify-content-center flex-wrap\">
                <a href=\"";
        // line 994
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
        // line 1006
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
        // line 1033
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

    // line 1057
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

        // line 1058
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/fr.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // ========== Select2 ==========
    ['promotion_pharmacy', 'promotion_other'].forEach(id => {
        const el = document.getElementById(id);
        if (el) {
            \$(el).select2({
                theme: 'bootstrap-5',
                language: 'fr',
                placeholder: '🎯 Sélectionnez une promotion',
                allowClear: true,
                width: '100%',
                dropdownParent: \$(el).parent()
            });
        }
    });

    // ========== Bouton Nouvelle Catégorie ==========
    const newCategoryBtn = document.getElementById('newCategoryBtn');
    if (newCategoryBtn) {
        newCategoryBtn.addEventListener('click', function(e) {
            e.preventDefault();
            ";
        // line 1083
        if ((($tmp = (isset($context["quotaReached"]) || array_key_exists("quotaReached", $context) ? $context["quotaReached"] : (function () { throw new RuntimeError('Variable "quotaReached" does not exist.', 1083, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1084
            yield "                new bootstrap.Modal(document.getElementById('quotaReachedModal')).show();
            ";
        } else {
            // line 1086
            yield "                window.location.href = \"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_new");
            yield "\";
            ";
        }
        // line 1088
        yield "        });
    }

    // ========== Modale toggle ==========
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

    // ========== Modale suppression ==========
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
        return array (  1686 => 1088,  1680 => 1086,  1676 => 1084,  1674 => 1083,  1646 => 1058,  1633 => 1057,  1600 => 1033,  1572 => 1006,  1558 => 994,  1551 => 990,  1538 => 979,  1535 => 977,  1531 => 974,  1526 => 971,  1515 => 968,  1510 => 967,  1506 => 966,  1502 => 964,  1500 => 963,  1495 => 960,  1482 => 953,  1475 => 948,  1473 => 947,  1465 => 943,  1455 => 937,  1453 => 936,  1445 => 931,  1435 => 924,  1426 => 918,  1417 => 911,  1414 => 910,  1408 => 906,  1402 => 902,  1399 => 901,  1396 => 900,  1390 => 896,  1387 => 895,  1381 => 891,  1375 => 887,  1373 => 886,  1368 => 883,  1366 => 882,  1358 => 877,  1352 => 874,  1343 => 867,  1336 => 863,  1332 => 862,  1328 => 861,  1324 => 860,  1320 => 859,  1316 => 857,  1314 => 856,  1312 => 855,  1307 => 852,  1301 => 848,  1295 => 845,  1291 => 844,  1287 => 843,  1283 => 842,  1279 => 841,  1275 => 840,  1271 => 838,  1269 => 837,  1261 => 832,  1253 => 827,  1244 => 820,  1238 => 817,  1235 => 816,  1233 => 815,  1229 => 814,  1225 => 813,  1217 => 807,  1211 => 803,  1205 => 800,  1200 => 799,  1198 => 798,  1192 => 795,  1189 => 794,  1184 => 793,  1177 => 788,  1173 => 786,  1169 => 784,  1165 => 782,  1163 => 781,  1159 => 779,  1157 => 778,  1154 => 777,  1148 => 774,  1144 => 772,  1141 => 771,  1135 => 766,  1129 => 762,  1122 => 760,  1116 => 758,  1114 => 757,  1109 => 756,  1107 => 755,  1103 => 754,  1096 => 753,  1092 => 752,  1080 => 743,  1076 => 742,  1072 => 741,  1061 => 733,  1057 => 732,  1053 => 731,  1042 => 723,  1038 => 722,  1034 => 721,  1023 => 713,  1016 => 708,  1013 => 707,  1007 => 702,  1000 => 700,  994 => 698,  992 => 697,  987 => 696,  985 => 695,  981 => 694,  974 => 693,  970 => 692,  958 => 683,  954 => 682,  950 => 681,  939 => 673,  935 => 672,  931 => 671,  920 => 663,  916 => 662,  912 => 661,  901 => 653,  897 => 652,  893 => 651,  882 => 643,  875 => 638,  872 => 637,  864 => 631,  860 => 630,  856 => 629,  845 => 621,  841 => 620,  837 => 619,  826 => 611,  822 => 610,  818 => 609,  807 => 601,  800 => 596,  797 => 595,  782 => 582,  779 => 581,  765 => 568,  754 => 560,  740 => 549,  732 => 543,  730 => 542,  719 => 534,  705 => 523,  691 => 512,  674 => 498,  660 => 487,  646 => 476,  632 => 465,  612 => 447,  602 => 443,  599 => 442,  594 => 441,  584 => 437,  581 => 436,  576 => 435,  573 => 433,  563 => 426,  558 => 424,  552 => 420,  549 => 419,  533 => 404,  529 => 402,  527 => 401,  521 => 400,  517 => 399,  490 => 374,  477 => 373,  102 => 8,  89 => 7,  66 => 5,  43 => 3,);
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
/* ============================================
   CARTES CATÉGORIES
   ============================================ */
.category-card {
    transition: transform 0.2s, box-shadow 0.2s;
    border: 1px solid transparent;
    border-radius: 12px;
    overflow: hidden;
}
.category-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.15) !important;
    border-color: #dee2e6;
}
.category-image-container {
    position: relative;
    height: 160px;
    overflow: hidden;
    border-radius: 8px 8px 0 0;
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
    
    h1.h3 {
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
    .stat-item .p-3 {
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
    
    /* ✅ AMÉLIORER VISIBILITÉ BOUTON SUPPRIMER DANS LE MENU BURGER */
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

/* ============================================
   AMÉLIORATION BOUTON SUPPRIMER (TOUS ÉCRANS)
   ============================================ */
.delete-category-btn {
    color: #dc3545 !important;
    font-weight: 500;
}
.delete-category-btn:hover,
.delete-category-btn:focus {
    background-color: #dc3545 !important;
    color: white !important;
}
.delete-category-btn i {
    color: inherit;
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
    <!-- ============================================
         EN-TÊTE
         ============================================ -->
    <div class=\"page-header d-flex justify-content-between align-items-center mb-4 flex-wrap\">
        <div>
            <h1 class=\"h3 mb-1 text-gray-800 fw-bold\">
                <i class=\"fas fa-tags me-2\"></i>
                <span class=\"d-none d-sm-inline\">Gestion des catégories</span>
                <span class=\"d-inline d-sm-none\">Catégories</span>
            </h1>
            <p class=\"text-muted mb-0 d-none d-sm-block\">Organisez vos produits par catégories et sous-catégories</p>
        </div>

        <div class=\"header-actions d-flex align-items-center gap-3 flex-wrap\">
            <!-- Quota -->
            <div class=\"card bg-light p-2 p-sm-3\">
                <div class=\"d-flex align-items-center\">
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
                    </div>
                </div>
            </div>

            <!-- Bouton Nouvelle -->
            <a href=\"#\" id=\"newCategoryBtn\" class=\"btn btn-primary btn-sm\">
                <i class=\"fas fa-plus-circle me-1\"></i>
                <span class=\"d-none d-sm-inline\">Nouvelle Catégorie</span>
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

    <!-- ============================================
         STATISTIQUES
         ============================================ -->
    <div class=\"card border-0 shadow-sm mb-4\">
        <div class=\"card-header bg-white py-2 py-sm-3\">
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
            
            {% if companyType == 'pharmacy' %}
            <div class=\"row g-2 mt-2 pt-2 border-top\">
                <div class=\"col-6\">
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
                <div class=\"col-6\">
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

    <!-- ============================================
         FILTRES
         ============================================ -->
    <div class=\"card border-0 shadow-sm mb-4\">
        <div class=\"card-header bg-white py-2 py-sm-3 d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <h5 class=\"mb-0 small\">
                <i class=\"fas fa-filter me-2 text-primary\"></i>
                <span class=\"d-none d-sm-inline\">Filtres</span>
            </h5>
            {# ✅ BOUTONS FILTRER + EFFACER EN HAUT À DROITE #}
            <div class=\"d-flex gap-1 gap-sm-2 flex-wrap\">
                <a href=\"{{ path('app_admin_category_index') }}\" class=\"btn btn-outline-secondary btn-sm\">
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
            <form method=\"get\" id=\"filter-form\">
                {# CAS RESTAURANT #}
                {% if companyType == 'restaurant' %}
                <div class=\"row g-2 g-sm-3\">
                    <div class=\"col-12 col-sm-6 col-lg-3\">
                        <label for=\"search_restaurant\" class=\"form-label fw-semibold small mb-1\">
                            <i class=\"fas fa-search text-primary me-1\"></i>Rechercher
                        </label>
                        <input type=\"text\" name=\"search\" id=\"search_restaurant\" value=\"{{ search }}\" 
                            class=\"form-control form-control-sm\" placeholder=\"Nom, description...\">
                    </div>
                    <div class=\"col-6 col-sm-6 col-lg-3\">
                        <label for=\"status_restaurant\" class=\"form-label fw-semibold small mb-1\">
                            <i class=\"fas fa-toggle-on text-success me-1\"></i>Statut
                        </label>
                        <select name=\"status\" id=\"status_restaurant\" class=\"form-select form-select-sm\">
                            <option value=\"all\" {{ status == 'all' ? 'selected' : '' }}>Tous</option>
                            <option value=\"active\" {{ status == 'active' ? 'selected' : '' }}>Actives</option>
                            <option value=\"inactive\" {{ status == 'inactive' ? 'selected' : '' }}>Inactives</option>
                        </select>
                    </div>
                    <div class=\"col-6 col-sm-6 col-lg-3\">
                        <label for=\"type_restaurant\" class=\"form-label fw-semibold small mb-1\">
                            <i class=\"fas fa-sitemap text-info me-1\"></i>Type
                        </label>
                        <select name=\"type\" id=\"type_restaurant\" class=\"form-select form-select-sm\">
                            <option value=\"all\" {{ type == 'all' ? 'selected' : '' }}>Toutes</option>
                            <option value=\"main\" {{ type == 'main' ? 'selected' : '' }}>Principales</option>
                            <option value=\"sub\" {{ type == 'sub' ? 'selected' : '' }}>Sous-catégories</option>
                        </select>
                    </div>
                    <div class=\"col-6 col-sm-6 col-lg-3\">
                        <label for=\"sub_status_restaurant\" class=\"form-label fw-semibold small mb-1\">
                            <i class=\"fas fa-credit-card text-warning me-1\"></i>Abonnement
                        </label>
                        <select name=\"sub_status\" id=\"sub_status_restaurant\" class=\"form-select form-select-sm\">
                            <option value=\"all\" {{ subStatus == 'all' ? 'selected' : '' }}>Tous</option>
                            <option value=\"active\" {{ subStatus == 'active' ? 'selected' : '' }}>Actif</option>
                            <option value=\"inactive\" {{ subStatus == 'inactive' ? 'selected' : '' }}>Inactif</option>
                        </select>
                    </div>
                </div>

                {# CAS PHARMACIE #}
                {% elseif companyType == 'pharmacy' %}
                <div class=\"row g-2 g-sm-3\">
                    <div class=\"col-12 col-sm-6 col-lg-4\">
                        <label for=\"search_pharmacy\" class=\"form-label fw-semibold small mb-1\">
                            <i class=\"fas fa-search text-primary me-1\"></i>Rechercher
                        </label>
                        <input type=\"text\" name=\"search\" id=\"search_pharmacy\" value=\"{{ search }}\" 
                            class=\"form-control form-control-sm\" placeholder=\"Nom, description...\">
                    </div>
                    <div class=\"col-6 col-sm-6 col-lg-4\">
                        <label for=\"status_pharmacy\" class=\"form-label fw-semibold small mb-1\">
                            <i class=\"fas fa-toggle-on text-success me-1\"></i>Statut
                        </label>
                        <select name=\"status\" id=\"status_pharmacy\" class=\"form-select form-select-sm\">
                            <option value=\"all\" {{ status == 'all' ? 'selected' : '' }}>Tous</option>
                            <option value=\"active\" {{ status == 'active' ? 'selected' : '' }}>Actives</option>
                            <option value=\"inactive\" {{ status == 'inactive' ? 'selected' : '' }}>Inactives</option>
                        </select>
                    </div>
                    <div class=\"col-6 col-sm-6 col-lg-4\">
                        <label for=\"type_pharmacy\" class=\"form-label fw-semibold small mb-1\">
                            <i class=\"fas fa-sitemap text-info me-1\"></i>Type
                        </label>
                        <select name=\"type\" id=\"type_pharmacy\" class=\"form-select form-select-sm\">
                            <option value=\"all\" {{ type == 'all' ? 'selected' : '' }}>Toutes</option>
                            <option value=\"main\" {{ type == 'main' ? 'selected' : '' }}>Principales</option>
                            <option value=\"sub\" {{ type == 'sub' ? 'selected' : '' }}>Sous-catégories</option>
                        </select>
                    </div>
                    <div class=\"col-6 col-sm-6 col-lg-4\">
                        <label for=\"sub_status_pharmacy\" class=\"form-label fw-semibold small mb-1\">
                            <i class=\"fas fa-credit-card text-warning me-1\"></i>Abonnement
                        </label>
                        <select name=\"sub_status\" id=\"sub_status_pharmacy\" class=\"form-select form-select-sm\">
                            <option value=\"all\" {{ subStatus == 'all' ? 'selected' : '' }}>Tous</option>
                            <option value=\"active\" {{ subStatus == 'active' ? 'selected' : '' }}>Actif</option>
                            <option value=\"inactive\" {{ subStatus == 'inactive' ? 'selected' : '' }}>Inactif</option>
                        </select>
                    </div>
                    <div class=\"col-6 col-sm-6 col-lg-4\">
                        <label for=\"visibility\" class=\"form-label fw-semibold small mb-1\">
                            <i class=\"fas fa-eye text-info me-1\"></i>Visibilité
                        </label>
                        <select name=\"visibility\" id=\"visibility\" class=\"form-select form-select-sm\">
                            <option value=\"all\" {{ visibility == 'all' ? 'selected' : '' }}>Toutes</option>
                            <option value=\"visible\" {{ visibility == 'visible' ? 'selected' : '' }}>Visibles</option>
                            <option value=\"hidden\" {{ visibility == 'hidden' ? 'selected' : '' }}>Masquées</option>
                        </select>
                    </div>
                    <div class=\"col-12 col-sm-6 col-lg-4\">
                        <label for=\"promotion_pharmacy\" class=\"form-label fw-semibold small mb-1\">
                            <i class=\"fas fa-tags text-danger me-1\"></i>Promotion
                        </label>
                        <select name=\"promotion\" id=\"promotion_pharmacy\" class=\"form-select form-select-sm\">
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

                {# CAS AUTRES #}
                {% else %}
                <div class=\"row g-2 g-sm-3\">
                    <div class=\"col-12 col-sm-6 col-lg-3\">
                        <label for=\"search_other\" class=\"form-label fw-semibold small mb-1\">
                            <i class=\"fas fa-search text-primary me-1\"></i>Rechercher
                        </label>
                        <input type=\"text\" name=\"search\" id=\"search_other\" value=\"{{ search }}\" 
                            class=\"form-control form-control-sm\" placeholder=\"Nom, description...\">
                    </div>
                    <div class=\"col-6 col-sm-6 col-lg-2\">
                        <label for=\"status_other\" class=\"form-label fw-semibold small mb-1\">
                            <i class=\"fas fa-toggle-on text-success me-1\"></i>Statut
                        </label>
                        <select name=\"status\" id=\"status_other\" class=\"form-select form-select-sm\">
                            <option value=\"all\" {{ status == 'all' ? 'selected' : '' }}>Tous</option>
                            <option value=\"active\" {{ status == 'active' ? 'selected' : '' }}>Actives</option>
                            <option value=\"inactive\" {{ status == 'inactive' ? 'selected' : '' }}>Inactives</option>
                        </select>
                    </div>
                    <div class=\"col-6 col-sm-6 col-lg-2\">
                        <label for=\"type_other\" class=\"form-label fw-semibold small mb-1\">
                            <i class=\"fas fa-sitemap text-info me-1\"></i>Type
                        </label>
                        <select name=\"type\" id=\"type_other\" class=\"form-select form-select-sm\">
                            <option value=\"all\" {{ type == 'all' ? 'selected' : '' }}>Toutes</option>
                            <option value=\"main\" {{ type == 'main' ? 'selected' : '' }}>Principales</option>
                            <option value=\"sub\" {{ type == 'sub' ? 'selected' : '' }}>Sous-catégories</option>
                        </select>
                    </div>
                    <div class=\"col-6 col-sm-6 col-lg-2\">
                        <label for=\"sub_status_other\" class=\"form-label fw-semibold small mb-1\">
                            <i class=\"fas fa-credit-card text-warning me-1\"></i>Abonnement
                        </label>
                        <select name=\"sub_status\" id=\"sub_status_other\" class=\"form-select form-select-sm\">
                            <option value=\"all\" {{ subStatus == 'all' ? 'selected' : '' }}>Tous</option>
                            <option value=\"active\" {{ subStatus == 'active' ? 'selected' : '' }}>Actif</option>
                            <option value=\"inactive\" {{ subStatus == 'inactive' ? 'selected' : '' }}>Inactif</option>
                        </select>
                    </div>
                    <div class=\"col-12 col-sm-6 col-lg-3\">
                        <label for=\"promotion_other\" class=\"form-label fw-semibold small mb-1\">
                            <i class=\"fas fa-tags text-danger me-1\"></i>Promotion
                        </label>
                        <select name=\"promotion\" id=\"promotion_other\" class=\"form-select form-select-sm\">
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
                {% endif %}
            </form>
        </div>
    </div>

    {# Messages informatifs #}
    {% if subStatus == 'inactive' and subscriptionInactiveFiltered > 0 %}
        <div class=\"alert alert-info mb-4 small\">
            <i class=\"fas fa-info-circle me-2\"></i>
            <strong>{{ subscriptionInactiveFiltered }} catégorie(s)</strong> désactivées par abonnement.
        </div>
    {% endif %}

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
                        <img src=\"{{ asset('uploads/categories/' ~ category.image) }}\" 
                            alt=\"{{ category.name }}\"
                            class=\"category-image\">
                    {% else %}
                        <div class=\"category-image-placeholder\">
                            <i class=\"fas fa-tags fa-3x text-muted\"></i>
                        </div>
                    {% endif %}
                </div>

                <!-- Contenu -->
                <div class=\"card-body d-flex flex-column p-2 p-sm-3\">
                    <!-- Titre + Menu burger -->
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
                                        {# ✅ BOUTON SUPPRIMER BIEN VISIBLE (rouge + fond) #}
                                        <button type=\"button\" 
                                                class=\"dropdown-item delete-category-btn\"
                                                data-category-id=\"{{ category.id }}\"
                                                data-category-name=\"{{ category.name }}\"
                                                data-has-products=\"{{ category.products|length > 0 ? 'true' : 'false' }}\"
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
                        {% if companyType == 'pharmacy' %}
                            {% if category.companyPublic %}
                                <span class=\"badge bg-primary d-none d-sm-inline\">
                                    <i class=\"fas fa-eye fa-xs me-1\"></i> Visible
                                </span>
                            {% else %}
                                <span class=\"badge bg-secondary d-none d-sm-inline\">
                                    <i class=\"fas fa-eye-slash fa-xs me-1\"></i> Masquée
                                </span>
                            {% endif %}
                        {% endif %}
                    </div>

                    <!-- Compteurs -->
                    <div class=\"row g-0 mb-2\">
                        <div class=\"col-6\">
                            <small class=\"text-muted d-block\">Produits</small>
                            <span class=\"fw-bold text-primary small\">
                                <i class=\"fas fa-box me-1\"></i>{{ category.products|length }}
                            </span>
                        </div>
                        <div class=\"col-6 text-end\">
                            <small class=\"text-muted d-block\">Sous-cat.</small>
                            <span class=\"fw-bold text-info small\">
                                <i class=\"fas fa-sitemap me-1\"></i>{{ category.children|length }}
                            </span>
                        </div>
                    </div>

                    <!-- Boutons d'action -->
                    <div class=\"action-buttons-row\">
                        <a href=\"{{ path('app_admin_category_products', {'id': category.id}) }}\" 
                           class=\"btn btn-sm btn-outline-info\" title=\"Produits\">
                            <i class=\"fas fa-list\"></i>
                            <span class=\"d-none d-sm-inline\">Produits</span>
                        </a>
                        {% if companyType != 'restaurant' %}
                        <a href=\"{{ path('app_admin_category_promotions', {'id': category.id}) }}\" 
                           class=\"btn btn-sm btn-outline-warning\" title=\"Promotions\">
                            <i class=\"fas fa-percent\"></i>
                            <span class=\"d-none d-sm-inline\">Promos</span>
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
                    <a href=\"{{ path('app_admin_category_index') }}\" class=\"btn btn-outline-primary mt-3\">
                        <i class=\"fas fa-undo me-1\"></i> Réinitialiser les filtres
                    </a>
                </div>
            </div>
        </div>
        {% endfor %}
    </div>

    <!-- Pagination -->
    {% if totalPages > 1 %}
    <nav aria-label=\"Pagination\" class=\"mt-4\">
        <ul class=\"pagination justify-content-center flex-wrap\">
            {% for i in 1..totalPages %}
                <li class=\"page-item {{ i == currentPage ? 'active' }}\">
                    <a class=\"page-link\" href=\"{{ path('app_admin_category_index', app.request.query.all|merge({'page': i})) }}\">{{ i }}</a>
                </li>
            {% endfor %}
        </ul>
    </nav>
    {% endif %}
</div>

{# ==================== MODALES ==================== #}

{# Modale quota atteint #}
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

{# Modale toggle #}
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
    // ========== Select2 ==========
    ['promotion_pharmacy', 'promotion_other'].forEach(id => {
        const el = document.getElementById(id);
        if (el) {
            \$(el).select2({
                theme: 'bootstrap-5',
                language: 'fr',
                placeholder: '🎯 Sélectionnez une promotion',
                allowClear: true,
                width: '100%',
                dropdownParent: \$(el).parent()
            });
        }
    });

    // ========== Bouton Nouvelle Catégorie ==========
    const newCategoryBtn = document.getElementById('newCategoryBtn');
    if (newCategoryBtn) {
        newCategoryBtn.addEventListener('click', function(e) {
            e.preventDefault();
            {% if quotaReached %}
                new bootstrap.Modal(document.getElementById('quotaReachedModal')).show();
            {% else %}
                window.location.href = \"{{ path('app_admin_category_new') }}\";
            {% endif %}
        });
    }

    // ========== Modale toggle ==========
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

    // ========== Modale suppression ==========
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

    deleteModal._element.addEventListener('hidden.bs.modal', function() {
        deleteConfirmBtn.disabled = false;
        deleteModalContent.innerHTML = '';
    });
});
</script>
{% endblock %}", "admin/category/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\category\\index.html.twig");
    }
}
