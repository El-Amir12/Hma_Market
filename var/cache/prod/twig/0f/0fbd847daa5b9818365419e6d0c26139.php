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
class __TwigTemplate_d32cae4c0b03f24e0722d3ae551b482b extends Template
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
        $this->parent = $this->load("base.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Gestion des Catégories de Plats - HMA Market";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
<link href=\"https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css\" rel=\"stylesheet\" />
<style>
/* ========================================
   CARTES CATÉGORIES
======================================== */
.category-card {
    transition: transform 0.2s, box-shadow 0.2s;
    border-radius: 15px;
    overflow: hidden;
    border: 1px solid #e5e7eb;
}
.category-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.1) !important;
}
.category-card.border-warning {
    border: 2px solid #ffc107 !important;
}
.category-image-container {
    position: relative;
    height: 130px;
    overflow: hidden;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
}
@media (min-width: 768px) {
    .category-image-container {
        height: 180px;
    }
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
    
    .breadcrumb {
        font-size: 0.7rem;
    }
    
    /* Statistiques : 2 par ligne sur mobile */
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
    
    /* Filtres : tous les champs en colonne sur mobile */
    .row.g-2.g-sm-3 .col-6,
    .row.g-2.g-sm-3 .col-12 {
        flex: 0 0 100%;
        max-width: 100%;
        margin-bottom: 0.5rem;
    }
    
    .row.g-2.g-sm-3 .col-lg-3 .input-group {
        width: 100%;
    }
    
    /* FORCER 2 CARTES PAR LIGNE SUR MOBILE */
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
    
    /* Statistiques : 2 par ligne sur très petit */
    .row.g-2 .col-6 {
        flex: 0 0 50%;
        max-width: 50%;
        padding-left: 0.15rem;
        padding-right: 0.15rem;
        margin-bottom: 0.35rem;
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
    
    /* FORCER 2 CARTES PAR LIGNE SUR TRÈS PETIT ÉCRAN */
    .row.g-2.g-sm-3 .col-6 {
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
        yield from [];
    }

    // line 423
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 424
        yield "<div class=\"container-fluid px-2 px-md-4 py-2 py-md-3\">
    <!-- ========== EN-TÊTE ========== -->
    <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center mb-3 mb-md-4 flex-wrap gap-2\">
        <div class=\"w-100 w-md-auto\">
            <h1 class=\"h4 h-md-3 mb-0 text-gray-800\">
                <i class=\"fas fa-utensils me-2\"></i><span class=\"d-none d-sm-inline\">Gestion des sections de menu</span>
                <span class=\"d-inline d-sm-none\">Sections menu</span>
            </h1>
            <p class=\"text-muted mt-1 small d-none d-sm-block\">Organisez vos plats par catégories et sous-catégories</p>
        </div>
        
        <div class=\"d-flex align-items-center gap-2 gap-md-3 flex-wrap w-100 w-md-auto\">
            <!-- Indicateur de quota -->
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
        // line 446
        yield (((($tmp = ($context["quotaReached"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-danger") : ("text-success"));
        yield "\" style=\"font-size: 0.8rem;\">
                            ";
        // line 447
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["activeCount"] ?? null), "html", null, true);
        yield " / ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["quota"] ?? null), "html", null, true);
        yield "
                            ";
        // line 448
        if ((($context["quota"] ?? null) == "Illimité")) {
            // line 449
            yield "                                <i class=\"fas fa-infinity text-info ms-1 small\"></i>
                            ";
        }
        // line 451
        yield "                        </h5>
                    </div>
                </div>
            </div>

            ";
        // line 457
        yield "            ";
        if ((($context["subscriptionInactiveCount"] ?? null) > 0)) {
            // line 458
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
            // line 467
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["subscriptionInactiveCount"] ?? null), "html", null, true);
            yield "</h5>
                    </div>
                </div>
            </div>
            ";
        }
        // line 472
        yield "
            ";
        // line 474
        yield "            <a href=\"#\" id=\"newCategoryBtn\" class=\"btn btn-primary btn-sm flex-grow-1 flex-md-grow-0 w-100 w-md-auto\">
                <i class=\"fas fa-plus-circle me-1\"></i> <span class=\"d-none d-sm-inline\">Nouvelle</span>
            </a>
        </div>
    </div>

    ";
        // line 481
        yield "    ";
        if ((($context["quotaReached"] ?? null) && (($context["plan"] ?? null) != "premium"))) {
            // line 482
            yield "    <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
        <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-2\">
            <div>
                <i class=\"fas fa-exclamation-triangle me-2\"></i>
                <strong>Quota atteint !</strong> Vous avez utilisé vos ";
            // line 486
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["quota"] ?? null), "html", null, true);
            yield " catégories de plats dans le quota.
            </div>
            <a href=\"";
            // line 488
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subscription_plans");
            yield "\" class=\"btn btn-warning btn-sm w-100 w-sm-auto\">
                <i class=\"fas fa-arrow-up me-1\"></i> Voir les offres
            </a>
        </div>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    </div>
    ";
        }
        // line 495
        yield "
    ";
        // line 497
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 497));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 498
            yield "        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
            <i class=\"fas fa-check-circle me-2\"></i> ";
            // line 499
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 503
        yield "    
    ";
        // line 504
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["error"], "method", false, false, false, 504));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 505
            yield "        <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
            <i class=\"fas fa-exclamation-circle me-2\"></i> ";
            // line 506
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 510
        yield "
    <!-- ========== STATISTIQUES ========== -->
    <div class=\"card shadow mb-3 mb-md-4\">
        <div class=\"card-header bg-white py-2 py-md-3\">
            <h5 class=\"mb-0 small\">
                <i class=\"fas fa-chart-pie me-2\"></i><span class=\"d-none d-sm-inline\">Statistiques selon les filtres</span>
            </h5>
        </div>
        <div class=\"card-body p-2 p-sm-3\">
            <!-- Ligne 1 : 4 cartes -->
            <div class=\"row g-2 mb-2\">
                <div class=\"col-6 col-md-3\">
                    <div class=\"stat-item p-2 p-sm-3 bg-light rounded h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-primary text-uppercase small fw-bold d-block\">Total</span>
                                <h3 class=\"mb-0\">";
        // line 526
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalFiltered"] ?? null), "html", null, true);
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
        // line 537
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["activeFiltered"] ?? null), "html", null, true);
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
        // line 548
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["inactiveFiltered"] ?? null), "html", null, true);
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
        // line 559
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mainFiltered"] ?? null), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-sitemap fa-2x text-info opacity-50\"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- ✅ Ligne 2 : 3 cartes - CORRIGÉ POUR MOBILE -->
            <div class=\"row g-2\">
                ";
        // line 570
        yield "                <div class=\"col-6 col-md-4\">
                    <div class=\"stat-item p-2 p-sm-3 bg-light rounded h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-warning text-uppercase small fw-bold d-block\">Sous-catég.</span>
                                <h3 class=\"mb-0 text-warning\">";
        // line 575
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["subFiltered"] ?? null), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-folder-tree fa-2x text-warning opacity-50\"></i>
                        </div>
                    </div>
                </div>
                
                ";
        // line 583
        yield "                <div class=\"col-6 col-md-4\">
                    <div class=\"stat-item p-2 p-sm-3 bg-light rounded h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-info text-uppercase small fw-bold d-block\">Abonnement actif</span>
                                <h3 class=\"mb-0 text-info\">";
        // line 588
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["subscriptionActiveFiltered"] ?? null), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-database fa-2x text-info opacity-50\"></i>
                        </div>
                    </div>
                </div>
                
                ";
        // line 596
        yield "                <div class=\"col-12 col-md-4\">
                    <div class=\"stat-item p-2 p-sm-3 bg-light rounded h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-secondary text-uppercase small fw-bold d-block\">Abonnement inactif</span>
                                <h3 class=\"mb-0 text-secondary\">";
        // line 601
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["subscriptionInactiveFiltered"] ?? null), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-clock fa-2x text-secondary opacity-50\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ========== FILTRES ========== -->
    <div class=\"card shadow mb-3 mb-md-4\">
        <div class=\"card-header bg-white py-2 py-md-3 d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <h5 class=\"mb-0 small\">
                <i class=\"fas fa-filter me-2\"></i><span class=\"d-none d-sm-inline\">Filtres</span>
            </h5>
            <div class=\"d-flex gap-1 gap-sm-2 flex-wrap w-100 w-md-auto\">
                <button type=\"submit\" form=\"filter-form\" class=\"btn btn-primary btn-sm flex-grow-1 flex-md-grow-0\">
                    <i class=\"fas fa-filter me-1\"></i> <span class=\"d-none d-sm-inline\">Filtrer</span>
                </button>
                <a href=\"";
        // line 621
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_index");
        yield "\" class=\"btn btn-outline-secondary btn-sm flex-grow-1 flex-md-grow-0\">
                    <i class=\"fas fa-undo me-1\"></i> <span class=\"d-none d-sm-inline\">Effacer</span>
                </a>
            </div>
        </div>
        <div class=\"card-body p-2 p-sm-3\">
            <form method=\"get\" id=\"filter-form\" class=\"row g-2 g-sm-3\">
                <!-- Ligne 1 : 5 filtres -->
                <div class=\"col-12 col-sm-6 col-lg-3\">
                    <label for=\"search\" class=\"form-label fw-bold small mb-1\">
                        <i class=\"fas fa-search text-primary me-1\"></i>Rechercher
                    </label>
                    <div class=\"input-group\">
                        <span class=\"input-group-text bg-white border-end-0\">
                            <i class=\"fas fa-search text-muted\"></i>
                        </span>
                        <input type=\"text\" name=\"search\" id=\"search\" value=\"";
        // line 637
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["search"] ?? null), "html", null, true);
        yield "\" 
                            class=\"form-control form-control-sm border-start-0\" placeholder=\"Nom, description...\">
                    </div>
                </div>
                
                <div class=\"col-6 col-sm-6 col-lg-2\">
                    <label for=\"status\" class=\"form-label fw-bold small mb-1\">
                        <i class=\"fas fa-toggle-on text-success me-1\"></i>Statut
                    </label>
                    <select name=\"status\" id=\"status\" class=\"form-select form-select-sm\">
                        <option value=\"all\" ";
        // line 647
        yield (((($context["status"] ?? null) == "all")) ? ("selected") : (""));
        yield ">Tous</option>
                        <option value=\"active\" ";
        // line 648
        yield (((($context["status"] ?? null) == "active")) ? ("selected") : (""));
        yield ">Actives</option>
                        <option value=\"inactive\" ";
        // line 649
        yield (((($context["status"] ?? null) == "inactive")) ? ("selected") : (""));
        yield ">Inactives</option>
                    </select>
                </div>
                
                <div class=\"col-6 col-sm-6 col-lg-2\">
                    <label for=\"type\" class=\"form-label fw-bold small mb-1\">
                        <i class=\"fas fa-sitemap text-info me-1\"></i>Type
                    </label>
                    <select name=\"type\" id=\"type\" class=\"form-select form-select-sm\">
                        <option value=\"all\" ";
        // line 658
        yield (((($context["type"] ?? null) == "all")) ? ("selected") : (""));
        yield ">Tous</option>
                        <option value=\"main\" ";
        // line 659
        yield (((($context["type"] ?? null) == "main")) ? ("selected") : (""));
        yield ">Principales</option>
                        <option value=\"sub\" ";
        // line 660
        yield (((($context["type"] ?? null) == "sub")) ? ("selected") : (""));
        yield ">Sous-catégories</option>
                    </select>
                </div>

                <div class=\"col-6 col-sm-6 col-lg-2\">
                    <label for=\"sub_status\" class=\"form-label fw-bold small mb-1\">
                        <i class=\"fas fa-credit-card text-warning me-1\"></i>Abonnement
                    </label>
                    <select name=\"sub_status\" id=\"sub_status\" class=\"form-select form-select-sm\">
                        <option value=\"all\" ";
        // line 669
        yield (((($context["subStatus"] ?? null) == "all")) ? ("selected") : (""));
        yield ">Tous</option>
                        <option value=\"active\" ";
        // line 670
        yield (((($context["subStatus"] ?? null) == "active")) ? ("selected") : (""));
        yield ">Actif</option>
                        <option value=\"inactive\" ";
        // line 671
        yield (((($context["subStatus"] ?? null) == "inactive")) ? ("selected") : (""));
        yield ">Inactif</option>
                    </select>
                </div>

                <div class=\"col-6 col-sm-6 col-lg-3\">
                    <label for=\"promotion\" class=\"form-label fw-bold small mb-1\">
                        <i class=\"fas fa-tags text-danger me-1\"></i>Promotion
                    </label>
                    <select name=\"promotion\" id=\"promotion\" class=\"form-select form-select-sm\" style=\"width: 100%;\">
                        <option value=\"\">🎯 Toutes</option>
                        ";
        // line 681
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["promotions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
            // line 682
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 682), "html", null, true);
            yield "\" ";
            yield (((($context["selectedPromotion"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 682))) ? ("selected") : (""));
            yield ">
                                ";
            // line 683
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "name", [], "any", false, false, false, 683), "html", null, true);
            yield "
                                ";
            // line 684
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "discountPercentage", [], "any", false, false, false, 684)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 685
                yield "                                    (-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "discountPercentage", [], "any", false, false, false, 685), "html", null, true);
                yield "%)
                                ";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 686
$context["promotion"], "discountAmount", [], "any", false, false, false, 686)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 687
                yield "                                    (-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "discountAmount", [], "any", false, false, false, 687), 0, ",", " "), "html", null, true);
                yield " FCFA)
                                ";
            }
            // line 689
            yield "                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['promotion'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 691
        yield "                    </select>
                </div>
            </form>
        </div>
    </div>

    ";
        // line 698
        yield "    ";
        if (((($context["subStatus"] ?? null) == "inactive") && (($context["subscriptionInactiveFiltered"] ?? null) > 0))) {
            // line 699
            yield "        <div class=\"alert alert-info mb-3 mb-md-4 small\">
            <i class=\"fas fa-info-circle me-2\"></i>
            <strong>";
            // line 701
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["subscriptionInactiveFiltered"] ?? null), "html", null, true);
            yield " catégorie(s)</strong> désactivées par abonnement.
        </div>
    ";
        }
        // line 704
        yield "
    <!-- ========== GRILLE DE CARTES ========== -->
    <div class=\"row g-2 g-sm-3\">
        ";
        // line 707
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 708
            yield "        <div class=\"col-6 col-md-4 col-lg-3 col-xl-3\">
            <div class=\"card category-card h-100 shadow-sm ";
            // line 709
            yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["category"], "subscriptionActive", [], "any", false, false, false, 709)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("border-warning") : (""));
            yield "\">
                <!-- Image -->
                <div class=\"category-image-container\">
                    ";
            // line 712
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 712)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 713
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/categories_plats/" . CoreExtension::getAttribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 713))), "html", null, true);
                yield "\" 
                            alt=\"";
                // line 714
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 714), "html", null, true);
                yield "\"
                            class=\"category-image\">
                    ";
            } else {
                // line 717
                yield "                        <div class=\"category-image-placeholder\">
                            <i class=\"fas fa-utensils fa-3x fa-sm-4x text-muted\"></i>
                        </div>
                    ";
            }
            // line 721
            yield "                </div>

                <!-- Contenu -->
                <div class=\"card-body d-flex flex-column p-2 p-sm-3\">
                    <!-- Titre avec bouton burger -->
                    <div class=\"d-flex justify-content-between align-items-start mb-1\">
                        <h5 class=\"card-title text-truncate mb-0 small\" title=\"";
            // line 727
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 727), "html", null, true);
            yield "\">
                            ";
            // line 728
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 728)), "truncate", [16], "method", false, false, false, 728), "html", null, true);
            yield "
                            ";
            // line 729
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "parent", [], "any", false, false, false, 729)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 730
                yield "                                <br><small class=\"text-muted\"><i class=\"fas fa-level-up-alt me-1\"></i>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["category"], "parent", [], "any", false, false, false, 730), "name", [], "any", false, false, false, 730)), "truncate", [12], "method", false, false, false, 730), "html", null, true);
                yield "</small>
                            ";
            }
            // line 732
            yield "                        </h5>
                        <div class=\"dropdown ms-1 flex-shrink-0\">
                            <button class=\"btn btn-sm btn-light p-1\" type=\"button\" data-bs-toggle=\"dropdown\">
                                <i class=\"fas fa-bars\"></i>
                            </button>
                            <ul class=\"dropdown-menu dropdown-menu-end\">
                                <li>
                                    <a class=\"dropdown-item\" href=\"";
            // line 739
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 739)]), "html", null, true);
            yield "\">
                                        <i class=\"fas fa-eye me-2\"></i> Voir
                                    </a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item\" href=\"";
            // line 744
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 744)]), "html", null, true);
            yield "\">
                                        <i class=\"fas fa-edit me-2\"></i> Modifier
                                    </a>
                                </li>
                                <li>
                                    ";
            // line 749
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "subscriptionActive", [], "any", false, false, false, 749)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 750
                yield "                                        <button type=\"button\" 
                                                class=\"dropdown-item toggle-category-btn\"
                                                data-category-id=\"";
                // line 752
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 752), "html", null, true);
                yield "\"
                                                data-category-name=\"";
                // line 753
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 753), "html", null, true);
                yield "\"
                                                data-current-status=\"";
                // line 754
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "isActive", [], "any", false, false, false, 754)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : ("inactive"));
                yield "\"
                                                data-token=\"";
                // line 755
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle-status" . CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 755))), "html", null, true);
                yield "\">
                                            <i class=\"fas ";
                // line 756
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "isActive", [], "any", false, false, false, 756)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-toggle-on") : ("fa-toggle-off"));
                yield " me-2\"></i>
                                            ";
                // line 757
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "isActive", [], "any", false, false, false, 757)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
                yield "
                                        </button>
                                    ";
            } else {
                // line 760
                yield "                                        <span class=\"dropdown-item text-muted disabled\">
                                            <i class=\"fas fa-ban me-2\"></i> Non disponible
                                        </span>
                                    ";
            }
            // line 764
            yield "                                </li>
                                <li><hr class=\"dropdown-divider\"></li>
                                <li>
                                    ";
            // line 767
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 768
                yield "                                        <button type=\"button\" class=\"dropdown-item text-danger delete-category-btn\"
                                                data-category-id=\"";
                // line 769
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 769), "html", null, true);
                yield "\"
                                                data-category-name=\"";
                // line 770
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 770), "html", null, true);
                yield "\"
                                                data-has-recipes=\"";
                // line 771
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "recipes", [], "any", false, false, false, 771)) > 0)) ? ("true") : ("false"));
                yield "\"
                                                data-has-children=\"";
                // line 772
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 772)) > 0)) ? ("true") : ("false"));
                yield "\"
                                                data-token=\"";
                // line 773
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 773))), "html", null, true);
                yield "\">
                                            <i class=\"fas fa-trash me-2\"></i> Supprimer
                                        </button>
                                    ";
            }
            // line 777
            yield "                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Description -->
                    <p class=\"card-text text-muted small mb-2 d-none d-sm-block\">
                        ";
            // line 784
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "description", [], "any", true, true, false, 784)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 784), "Aucune description")) : ("Aucune description"))), "truncate", [60, "..."], "method", false, false, false, 784), "html", null, true);
            yield "
                    </p>
                    <p class=\"card-text text-muted small mb-2 d-block d-sm-none\">
                        ";
            // line 787
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "description", [], "any", true, true, false, 787)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 787), "Aucune description")) : ("Aucune description"))), "truncate", [35, "..."], "method", false, false, false, 787), "html", null, true);
            yield "
                    </p>
                    
                    <!-- Badges -->
                    <div class=\"category-badges\">
                        ";
            // line 792
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["category"], "subscriptionActive", [], "any", false, false, false, 792)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 793
                yield "                            <span class=\"badge bg-warning text-dark\">
                                <i class=\"fas fa-clock fa-xs me-1 d-none d-sm-inline\"></i> En attente
                            </span>
                        ";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 796
$context["category"], "isActive", [], "any", false, false, false, 796)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 797
                yield "                            <span class=\"badge bg-success\">
                                <i class=\"fas fa-check-circle fa-xs me-1 d-none d-sm-inline\"></i> Active
                            </span>
                        ";
            } else {
                // line 801
                yield "                            <span class=\"badge bg-danger\">
                                <i class=\"fas fa-pause-circle fa-xs me-1 d-none d-sm-inline\"></i> Désactivée
                            </span>
                        ";
            }
            // line 805
            yield "                        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "subscriptionActive", [], "any", false, false, false, 805)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 806
                yield "                            <span class=\"badge bg-info d-none d-sm-inline\">
                                <i class=\"fas fa-database fa-xs me-1\"></i> Quota
                            </span>
                        ";
            }
            // line 810
            yield "                    </div>

                    <!-- Compteurs Recettes & Sous-catégories -->
                    <div class=\"d-flex justify-content-between align-items-center mb-2 gap-1\">
                        <div class=\"text-center px-1 py-1 bg-light rounded flex-fill\" style=\"font-size: 0.7rem;\">
                            <i class=\"fas fa-utensils text-primary me-1\"></i>
                            <span class=\"fw-bold\">";
            // line 816
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "recipes", [], "any", false, false, false, 816)), "html", null, true);
            yield "</span>
                            <small class=\"text-muted d-block\" style=\"font-size: 0.55rem;\">Articles</small>
                        </div>
                        <div class=\"text-center px-1 py-1 bg-light rounded flex-fill\" style=\"font-size: 0.7rem;\">
                            <i class=\"fas fa-sitemap text-info me-1\"></i>
                            <span class=\"fw-bold\">";
            // line 821
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 821)), "html", null, true);
            yield "</span>
                            <small class=\"text-muted d-block\" style=\"font-size: 0.55rem;\">sous-catég.</small>
                        </div>
                    </div>

                    <!-- Boutons d'action secondaires -->
                    <div class=\"d-flex gap-1 mt-auto flex-wrap\">
                        <a href=\"";
            // line 828
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_recipes", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 828)]), "html", null, true);
            yield "\" 
                           class=\"btn btn-sm btn-outline-info flex-fill\" style=\"font-size: 0.6rem;\">
                            <i class=\"fas fa-list\"></i> <span class=\"d-none d-sm-inline\">Articles</span>
                        </a>
                        <a href=\"";
            // line 832
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_promotions", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 832)]), "html", null, true);
            yield "\" 
                           class=\"btn btn-sm btn-outline-warning flex-fill\" style=\"font-size: 0.6rem;\">
                            <i class=\"fas fa-percent me-1\"></i> <span class=\"d-none d-sm-inline\">Promotions</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        ";
            $context['_iterated'] = true;
        }
        // line 840
        if (!$context['_iterated']) {
            // line 841
            yield "        <div class=\"col-12\">
            <div class=\"card shadow\">
                <div class=\"card-body text-center py-4 py-md-5\">
                    <i class=\"fas fa-utensils fa-3x fa-md-4 text-muted mb-3\"></i>
                    <h4 class=\"text-muted fs-5 fs-md-4\">Aucune catégorie de plats trouvée</h4>
                    <a href=\"";
            // line 846
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_index");
            yield "\" class=\"btn btn-outline-primary btn-sm\">
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
        // line 853
        yield "    </div>

    <!-- ========== PAGINATION ========== -->
    ";
        // line 856
        if ((($context["totalPages"] ?? null) > 1)) {
            // line 857
            yield "    <div class=\"row mt-3 mt-md-4\">
        <div class=\"col-12\">
            <nav aria-label=\"Pagination\">
                <ul class=\"pagination pagination-sm justify-content-center flex-wrap\">
                    ";
            // line 861
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, ($context["totalPages"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 862
                yield "                        <li class=\"page-item ";
                yield ((($context["i"] == ($context["currentPage"] ?? null))) ? ("active") : (""));
                yield "\">
                            <a class=\"page-link\" href=\"";
                // line 863
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 863), "query", [], "any", false, false, false, 863), "all", [], "any", false, false, false, 863), ["page" => $context["i"]])), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "</a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 866
            yield "                </ul>
            </nav>
        </div>
    </div>
    ";
        }
        // line 871
        yield "</div>

";
        // line 874
        yield "
";
        // line 876
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
        // line 887
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["quota"] ?? null), "html", null, true);
        yield " catégories atteinte</h5>
                <p class=\"text-muted small\">Pour ajouter de nouvelles catégories, passez à un plan supérieur.</p>
            </div>
            <div class=\"modal-footer justify-content-center flex-wrap py-2 py-md-3\">
                <a href=\"";
        // line 891
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
        // line 903
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
        // line 930
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
        yield from [];
    }

    // line 954
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 955
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/fr.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // ========== Initialisation Select2 pour la promotion ==========
    if (document.getElementById('promotion')) {
        \$('#promotion').select2({
            theme: 'bootstrap-5',
            language: 'fr',
            placeholder: '🎯 Sélectionnez une promotion',
            allowClear: true,
            width: '100%',
            dropdownAutoWidth: true,
            dropdownParent: \$('#promotion').parent()
        });
    }

    // ========== 1. Gestion du bouton \"Nouvelle Catégorie\" ==========
    const newCategoryBtn = document.getElementById('newCategoryBtn');
    if (newCategoryBtn) {
        newCategoryBtn.addEventListener('click', function(e) {
            e.preventDefault();
            ";
        // line 978
        if ((($tmp = ($context["quotaReached"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 979
            yield "                const quotaModal = new bootstrap.Modal(document.getElementById('quotaReachedModal'));
                quotaModal.show();
            ";
        } else {
            // line 982
            yield "                window.location.href = \"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_new");
            yield "\";
            ";
        }
        // line 984
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
            toggleForm.action = `/admin/category-recipe/\${categoryId}/toggle-status`;
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
        return array (  1392 => 984,  1386 => 982,  1381 => 979,  1379 => 978,  1353 => 955,  1346 => 954,  1319 => 930,  1291 => 903,  1277 => 891,  1270 => 887,  1257 => 876,  1254 => 874,  1250 => 871,  1243 => 866,  1232 => 863,  1227 => 862,  1223 => 861,  1217 => 857,  1215 => 856,  1210 => 853,  1197 => 846,  1190 => 841,  1188 => 840,  1175 => 832,  1168 => 828,  1158 => 821,  1150 => 816,  1142 => 810,  1136 => 806,  1133 => 805,  1127 => 801,  1121 => 797,  1119 => 796,  1114 => 793,  1112 => 792,  1104 => 787,  1098 => 784,  1089 => 777,  1082 => 773,  1078 => 772,  1074 => 771,  1070 => 770,  1066 => 769,  1063 => 768,  1061 => 767,  1056 => 764,  1050 => 760,  1044 => 757,  1040 => 756,  1036 => 755,  1032 => 754,  1028 => 753,  1024 => 752,  1020 => 750,  1018 => 749,  1010 => 744,  1002 => 739,  993 => 732,  987 => 730,  985 => 729,  981 => 728,  977 => 727,  969 => 721,  963 => 717,  957 => 714,  952 => 713,  950 => 712,  944 => 709,  941 => 708,  936 => 707,  931 => 704,  925 => 701,  921 => 699,  918 => 698,  910 => 691,  903 => 689,  897 => 687,  895 => 686,  890 => 685,  888 => 684,  884 => 683,  877 => 682,  873 => 681,  860 => 671,  856 => 670,  852 => 669,  840 => 660,  836 => 659,  832 => 658,  820 => 649,  816 => 648,  812 => 647,  799 => 637,  780 => 621,  757 => 601,  750 => 596,  740 => 588,  733 => 583,  723 => 575,  716 => 570,  703 => 559,  689 => 548,  675 => 537,  661 => 526,  643 => 510,  633 => 506,  630 => 505,  626 => 504,  623 => 503,  613 => 499,  610 => 498,  605 => 497,  602 => 495,  592 => 488,  587 => 486,  581 => 482,  578 => 481,  570 => 474,  567 => 472,  559 => 467,  548 => 458,  545 => 457,  538 => 451,  534 => 449,  532 => 448,  526 => 447,  522 => 446,  498 => 424,  491 => 423,  72 => 8,  65 => 7,  54 => 5,  43 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/category_recipe/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\category_recipe\\index.html.twig");
    }
}
