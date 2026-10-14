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

/* admin/product/index.html.twig */
class __TwigTemplate_a2b69ea2f5c0824a81ed11359bfe0392 extends Template
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
        yield "Gestion des Produits - HMA Market";
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
.product-card {
    transition: transform 0.2s, box-shadow 0.2s;
    border: 1px solid transparent;
}
.product-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.15) !important;
    border-color: #dee2e6;
}
.product-image-container {
    position: relative;
    height: 160px;
    overflow: hidden;
    border-radius: 8px 8px 0 0;
}
.product-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.product-image-placeholder {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
}
.stat-item {
    transition: transform 0.2s;
}
.stat-item:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}
#extraFilters {
    transition: all 0.3s ease;
}

.product-badges {
    display: flex;
    flex-wrap: wrap;
    gap: 4px;
    margin-bottom: 0.5rem;
}
.product-badges .badge {
    font-size: 9px;
    padding: 3px 6px;
}

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
    .row.mb-3 .col-6 {
        flex: 0 0 50%;
        max-width: 50%;
        padding-left: 0.25rem;
        padding-right: 0.25rem;
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
    .row.g-2.g-sm-3 .col-6,
    .row.g-2.g-sm-3 .col-12 {
        margin-bottom: 0.5rem;
    }
    
    /* ✅ FORCER 2 CARTES PAR LIGNE SUR MOBILE */
    .row.g-2.g-sm-3 .col-6 {
        flex: 0 0 50%;
        max-width: 50%;
        padding-left: 0.5rem;
        padding-right: 0.5rem;
    }
    
    .product-card .card-title {
        font-size: 0.8rem;
    }
    .product-card .card-title .text-muted {
        font-size: 0.65rem;
    }
    
    .product-image-container {
        height: 120px;
    }
    
    .product-card .card-body {
        padding: 0.5rem !important;
    }
    
    .product-card .btn-sm {
        font-size: 0.6rem;
        padding: 0.15rem 0.3rem;
    }
    
    .product-badges .badge {
        font-size: 7px;
        padding: 2px 4px;
    }
    
    .product-card .row.g-0 .col-6 {
        font-size: 0.7rem;
    }
    .product-card .row.g-0 .col-6 .fw-bold {
        font-size: 0.75rem;
    }
    
    .d-flex.gap-1.mt-auto {
        flex-wrap: wrap;
    }
    .d-flex.gap-1.mt-auto .btn {
        flex: 1 1 calc(50% - 0.25rem);
        font-size: 0.55rem;
        padding: 0.15rem 0.2rem;
    }
    
    .product-badges .badge i {
        display: none;
    }
    
    .dropdown-menu {
        font-size: 0.8rem;
    }
}

@media (max-width: 480px) {
    .container-fluid {
        padding-left: 0.25rem !important;
        padding-right: 0.25rem !important;
    }
    
    /* ✅ Statistiques : 2 par ligne sur très petit */
    .row.mb-3 .col-6 {
        flex: 0 0 50%;
        max-width: 50%;
        padding-left: 0.15rem;
        padding-right: 0.15rem;
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
    
    /* ✅ FORCER 2 CARTES PAR LIGNE SUR TRÈS PETIT ÉCRAN */
    .row.g-2.g-sm-3 .col-6 {
        flex: 0 0 50%;
        max-width: 50%;
        padding-left: 0.25rem;
        padding-right: 0.25rem;
    }
    
    .product-image-container {
        height: 90px;
    }
    
    .product-card .card-title {
        font-size: 0.65rem;
    }
    .product-card .card-title .text-muted {
        font-size: 0.55rem;
    }
    
    .product-card .card-body {
        padding: 0.35rem !important;
    }
    
    .product-card .text-muted.small {
        font-size: 0.5rem !important;
    }
    
    .product-card .row.g-0 .col-6 {
        font-size: 0.55rem;
    }
    .product-card .row.g-0 .col-6 .fw-bold {
        font-size: 0.6rem;
    }
    
    .product-badges .badge {
        font-size: 5px;
        padding: 1px 3px;
        border-radius: 2px;
    }
    
    .d-flex.gap-1.mt-auto .btn {
        flex: 1 1 100%;
        font-size: 0.45rem;
        padding: 0.1rem 0.15rem;
    }
    
    .product-card .dropdown .btn-sm {
        font-size: 0.5rem;
        padding: 0.1rem 0.2rem;
    }
    
    .card-header .d-flex.gap-2 .btn-sm {
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
}

/* Désactiver hover sur mobile */
@media (max-width: 768px) {
    .product-card:hover {
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

    // line 345
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 346
        yield "<div class=\"container-fluid px-4\">
    <!-- Header avec quota -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap\">
        <div>
            <h1 class=\"h3 mb-1 text-gray-800 fw-bold\">
                <i class=\"fas fa-boxes me-2\"></i><span class=\"d-none d-sm-inline\">Catalogue des Produits</span>
                <span class=\"d-inline d-sm-none\">Produits</span>
            </h1>
            <p class=\"text-muted mb-0 d-none d-sm-block\">Gérez votre inventaire et catalogue</p>
        </div>

        <div class=\"d-flex align-items-center gap-3 flex-wrap w-100 w-md-auto\">
            <!-- Indicateur de quota -->
            <div class=\"card bg-light p-2 p-sm-3 flex-grow-1 flex-md-grow-0\">
                <div class=\"d-flex align-items-center\">
                    <div class=\"me-2 me-sm-3\">
                        <span class=\"badge bg-primary p-2\">
                            <i class=\"fas fa-chart-line\"></i>
                        </span>
                    </div>
                    <div>
                        <small class=\"text-muted d-none d-sm-block\">Produits actifs</small>
                        <h5 class=\"mb-0 ";
        // line 368
        yield (((($tmp = ($context["quotaReached"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-danger") : ("text-success"));
        yield "\" style=\"font-size: 0.9rem;\">
                            ";
        // line 369
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["activeCount"] ?? null), "html", null, true);
        yield " / ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["quota"] ?? null), "html", null, true);
        yield "
                            ";
        // line 370
        if ((($context["quota"] ?? null) == "Illimité")) {
            // line 371
            yield "                                <i class=\"fas fa-infinity text-info ms-1\"></i>
                            ";
        }
        // line 373
        yield "                        </h5>
                    </div>
                </div>
            </div>

            <button type=\"button\" class=\"btn btn-outline-primary btn-sm flex-grow-1 flex-md-grow-0\" id=\"scan-barcode-btn\" title=\"Rechercher par code-barres\">
                <i class=\"fas fa-barcode me-1\"></i> <span class=\"d-none d-sm-inline\">Scanner</span>
            </button>

            <a href=\"#\" id=\"newProductBtn\" class=\"btn btn-primary btn-sm flex-grow-1 flex-md-grow-0\">
                <i class=\"fas fa-plus-circle me-1\"></i> <span class=\"d-none d-sm-inline\">Nouveau Produit</span>
                <span class=\"d-inline d-sm-none\">Nouveau</span>
            </a>
        </div>
    </div>

    ";
        // line 390
        yield "    ";
        if ((($tmp = ($context["quotaReached"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 391
            yield "    <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
        <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-2\">
            <div>
                <i class=\"fas fa-exclamation-triangle me-2\"></i>
                <strong>Quota atteint !</strong> Vous avez utilisé vos ";
            // line 395
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["quota"] ?? null), "html", null, true);
            yield " produits actifs.
            </div>
            <a href=\"";
            // line 397
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subscription_plans");
            yield "\" class=\"btn btn-warning btn-sm w-100 w-sm-auto\">
                <i class=\"fas fa-arrow-up me-1\"></i> Voir les offres
            </a>
        </div>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    </div>
    ";
        }
        // line 404
        yield "
    <!-- Statistiques filtrées -->
    <div class=\"card shadow mb-4\">
        <div class=\"card-header bg-white py-2 py-sm-3\">
            <h5 class=\"mb-0 small\"><i class=\"fas fa-chart-pie me-2\"></i><span class=\"d-none d-sm-inline\">Statistiques selon les filtres</span></h5>
        </div>
        <div class=\"card-body p-2 p-sm-3\">
            <!-- ✅ 6 statistiques en 3x2 sur mobile -->
            <div class=\"row g-2 mb-3\">
                <div class=\"col-6 col-sm-4 col-md-2\">
                    <div class=\"stat-item p-2 p-sm-3 bg-light rounded h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-primary text-uppercase small fw-bold d-block\">Total</span>
                                <h3 class=\"mb-0\">";
        // line 418
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalFiltered"] ?? null), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-box fa-2x text-primary opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-6 col-sm-4 col-md-2\">
                    <div class=\"stat-item p-2 p-sm-3 bg-light rounded h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-success text-uppercase small fw-bold d-block\">Actifs</span>
                                <h3 class=\"mb-0\">";
        // line 429
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["activeFiltered"] ?? null), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-check-circle fa-2x text-success opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-6 col-sm-4 col-md-2\">
                    <div class=\"stat-item p-2 p-sm-3 bg-light rounded h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-danger text-uppercase small fw-bold d-block\">Inactifs</span>
                                <h3 class=\"mb-0\">";
        // line 440
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["inactiveFiltered"] ?? null), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-pause-circle fa-2x text-danger opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-6 col-sm-4 col-md-2\">
                    <div class=\"stat-item p-2 p-sm-3 bg-light rounded h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-warning text-uppercase small fw-bold d-block\">Stock faible</span>
                                <h3 class=\"mb-0\">";
        // line 451
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["lowStockFiltered"] ?? null), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-exclamation-triangle fa-2x text-warning opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-6 col-sm-4 col-md-2\">
                    <div class=\"stat-item p-2 p-sm-3 bg-light rounded h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-info text-uppercase small fw-bold d-block\">Périssables</span>
                                <h3 class=\"mb-0\">";
        // line 462
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["perishableFiltered"] ?? null), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-calendar-alt fa-2x text-info opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-6 col-sm-4 col-md-2\">
                    <div class=\"stat-item p-2 p-sm-3 bg-light rounded h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-secondary text-uppercase small fw-bold d-block\">Non périss.</span>
                                <h3 class=\"mb-0\">";
        // line 473
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nonPerishableFiltered"] ?? null), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-calendar-check fa-2x text-secondary opacity-50\"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ✅ Abonnement -->
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"stat-item p-2 p-sm-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center mb-2\">
                            <span class=\"text-dark text-uppercase small fw-bold\">Abonnement</span>
                            <i class=\"fas fa-credit-card fa-2x text-dark opacity-50\"></i>
                        </div>
                        <div class=\"d-flex justify-content-between\">
                            <div>
                                <small class=\"text-info d-block\">Actif</small>
                                <h3 class=\"mb-0\">";
        // line 492
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["subscriptionActiveFiltered"] ?? null), "html", null, true);
        yield "</h3>
                            </div>
                            <div class=\"text-end\">
                                <small class=\"text-secondary d-block\">Inactif</small>
                                <h3 class=\"mb-0\">";
        // line 496
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["subscriptionInactiveFiltered"] ?? null), "html", null, true);
        yield "</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 504
        yield "            ";
        if ((($context["companyType"] ?? null) == "pharmacy")) {
            // line 505
            yield "            <div class=\"row mt-3 border-top pt-3 g-2\">
                <div class=\"col-6\">
                    <div class=\"stat-item p-2 p-sm-3 bg-light rounded h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-success text-uppercase small fw-bold d-block\">Visibles</span>
                                <h3 class=\"mb-0 text-success\">";
            // line 511
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["visibleFiltered"] ?? null), "html", null, true);
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
                                <span class=\"text-secondary text-uppercase small fw-bold d-block\">Masqués</span>
                                <h3 class=\"mb-0 text-secondary\">";
            // line 522
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["hiddenFiltered"] ?? null), "html", null, true);
            yield "</h3>
                            </div>
                            <i class=\"fas fa-eye-slash fa-2x text-secondary opacity-50\"></i>
                        </div>
                    </div>
                </div>
            </div>
            ";
        }
        // line 530
        yield "        </div>
    </div>

    <!-- Filtres -->
    <div class=\"card border-0 shadow-sm mb-4\">
        <div class=\"card-header bg-white py-2 py-sm-3 d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <h5 class=\"mb-0 small\"><i class=\"fas fa-filter me-2 text-primary\"></i><span class=\"d-none d-sm-inline\">Filtres</span></h5>
            <div class=\"d-flex gap-1 gap-sm-2 flex-wrap\">
                <button type=\"button\" class=\"btn btn-outline-info btn-sm\" id=\"toggleExtraFiltersBtn\">
                    <i class=\"fas fa-sliders-h me-1\"></i> <span class=\"d-none d-sm-inline\">Autres filtres</span>
                </button>
                <a href=\"";
        // line 541
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_index");
        yield "\" class=\"btn btn-outline-secondary btn-sm\">
                    <i class=\"fas fa-undo me-1\"></i> <span class=\"d-none d-sm-inline\">Effacer</span>
                </a>
                <button type=\"submit\" form=\"filter-form\" class=\"btn btn-primary btn-sm\">
                    <i class=\"fas fa-search me-1\"></i> <span class=\"d-none d-sm-inline\">Filtrer</span>
                </button>
            </div>
        </div>
        <div class=\"card-body bg-white p-2 p-sm-3\">
            <form method=\"get\" id=\"filter-form\">
                <!-- Première ligne -->
                <div class=\"row g-2 g-sm-3\">
                    <div class=\"col-12 col-sm-6 col-md-4\">
                        <label class=\"form-label fw-semibold small mb-1\">
                            <i class=\"fas fa-search me-1\"></i> Recherche
                        </label>
                        <input type=\"text\" name=\"search\" class=\"form-control form-control-sm\" 
                               placeholder=\"Nom, code-barres...\" 
                               value=\"";
        // line 559
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["search"] ?? null), "html", null, true);
        yield "\">
                    </div>
                    <div class=\"col-6 col-sm-6 col-md-4\">
                        <label class=\"form-label fw-semibold small mb-1\">
                            <i class=\"fas fa-toggle-on me-1\"></i> Statut
                        </label>
                        <select name=\"status\" class=\"form-select form-select-sm\">
                            <option value=\"\">Tous</option>
                            <option value=\"active\" ";
        // line 567
        yield (((($context["selectedStatus"] ?? null) == "active")) ? ("selected") : (""));
        yield ">Actifs</option>
                            <option value=\"inactive\" ";
        // line 568
        yield (((($context["selectedStatus"] ?? null) == "inactive")) ? ("selected") : (""));
        yield ">Inactifs</option>
                            <option value=\"low-stock\" ";
        // line 569
        yield (((($context["selectedStatus"] ?? null) == "low-stock")) ? ("selected") : (""));
        yield ">Stock faible</option>
                        </select>
                    </div>
                    <div class=\"col-6 col-sm-6 col-md-4\">
                        <label class=\"form-label fw-semibold small mb-1\">
                            <i class=\"fas fa-calendar-alt me-1\"></i> Type
                        </label>
                        <select name=\"expiry_type\" class=\"form-select form-select-sm\">
                            <option value=\"\">Tous</option>
                            <option value=\"perishable\" ";
        // line 578
        yield (((($context["selectedExpiryType"] ?? null) == "perishable")) ? ("selected") : (""));
        yield ">Périssables</option>
                            <option value=\"non-perishable\" ";
        // line 579
        yield (((($context["selectedExpiryType"] ?? null) == "non-perishable")) ? ("selected") : (""));
        yield ">Non périssables</option>
                        </select>
                    </div>
                </div>

                <!-- Deuxième ligne -->
                <div class=\"row g-2 g-sm-3 mt-2 mt-sm-3\">
                    <div class=\"col-6 col-sm-6 col-md-4\">
                        <label class=\"form-label fw-semibold small mb-1\">
                            <i class=\"fas fa-chart-line me-1\"></i> Quota
                        </label>
                        <select name=\"subscription_status\" class=\"form-select form-select-sm\">
                            <option value=\"\">Tous</option>
                            <option value=\"active\" ";
        // line 592
        yield (((($context["selectedSubscriptionStatus"] ?? null) == "active")) ? ("selected") : (""));
        yield ">Dans quota</option>
                            <option value=\"inactive\" ";
        // line 593
        yield (((($context["selectedSubscriptionStatus"] ?? null) == "inactive")) ? ("selected") : (""));
        yield ">Hors quota</option>
                        </select>
                    </div>
                    <div class=\"col-6 col-sm-6 col-md-4\">
                        <label class=\"form-label fw-semibold small mb-1\">
                            <i class=\"fas fa-tag me-1\"></i> Catégorie
                        </label>
                        <select name=\"category\" id=\"category\" class=\"form-select form-select-sm\" style=\"width: 100%;\">
                            <option value=\"0\">Toutes</option>
                            ";
        // line 602
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 603
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 603), "html", null, true);
            yield "\" ";
            yield (((($context["selectedCategory"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 603))) ? ("selected") : (""));
            yield ">
                                    ";
            // line 604
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, CoreExtension::getAttribute($this->env, $this->source, $context["category"], "level", [], "any", false, false, false, 604)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                yield "&nbsp;&nbsp;";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 605
            yield "                                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "level", [], "any", false, false, false, 605) > 0)) {
                yield "↳";
            }
            // line 606
            yield "                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 606), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "productCount", [], "any", false, false, false, 606), "html", null, true);
            yield ")
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 609
        yield "                        </select>
                    </div>
                    <div class=\"col-12 col-sm-6 col-md-4\">
                        <label class=\"form-label fw-semibold small mb-1\">
                            <i class=\"fas fa-weight-hanging me-1\"></i> Unité
                        </label>
                        <select name=\"unit\" id=\"unit\" class=\"form-select form-select-sm\" style=\"width: 100%;\">
                            <option value=\"\">Toutes</option>
                            ";
        // line 617
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["units"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["unit"]) {
            // line 618
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["unit"], "html", null, true);
            yield "\" ";
            yield (((($context["selectedUnit"] ?? null) == $context["unit"])) ? ("selected") : (""));
            yield ">
                                    ";
            // line 619
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["unit"], "html", null, true);
            yield "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['unit'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 622
        yield "                        </select>
                    </div>
                </div>

                <!-- ✅ Filtres supplémentaires -->
                <div id=\"extraFilters\" style=\"display: none;\">
                    <hr class=\"my-3\">
                    
                    ";
        // line 630
        if ((($context["companyType"] ?? null) == "restaurant")) {
            // line 631
            yield "                        <div class=\"row g-2 g-sm-3\">
                            <div class=\"col-6\">
                                <label class=\"form-label fw-semibold small mb-1\">
                                    <i class=\"fas fa-flask me-1\"></i> Dosage
                                </label>
                                <input type=\"text\" name=\"dosage\" id=\"dosage\" value=\"";
            // line 636
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["dosage"] ?? null), "html", null, true);
            yield "\" 
                                    class=\"form-control form-control-sm\" placeholder=\"Ex: 500mg\">
                            </div>
                            <div class=\"col-6\">
                                <label class=\"form-label fw-semibold small mb-1\">
                                    <i class=\"fas fa-pills me-1\"></i> Forme
                                </label>
                                <input type=\"text\" name=\"form\" id=\"form\" value=\"";
            // line 643
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["form"] ?? null), "html", null, true);
            yield "\" 
                                    class=\"form-control form-control-sm\" placeholder=\"Ex: comprimé\">
                            </div>
                        </div>
                    ";
        } elseif ((        // line 647
($context["companyType"] ?? null) == "market")) {
            // line 648
            yield "                        <div class=\"row g-2 g-sm-3\">
                            <div class=\"col-6 col-md-4\">
                                <label class=\"form-label fw-semibold small mb-1\">
                                    <i class=\"fas fa-flask me-1\"></i> Dosage
                                </label>
                                <input type=\"text\" name=\"dosage\" id=\"dosage\" value=\"";
            // line 653
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["dosage"] ?? null), "html", null, true);
            yield "\" 
                                    class=\"form-control form-control-sm\" placeholder=\"Ex: 500mg\">
                            </div>
                            <div class=\"col-6 col-md-4\">
                                <label class=\"form-label fw-semibold small mb-1\">
                                    <i class=\"fas fa-pills me-1\"></i> Forme
                                </label>
                                <input type=\"text\" name=\"form\" id=\"form\" value=\"";
            // line 660
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["form"] ?? null), "html", null, true);
            yield "\" 
                                    class=\"form-control form-control-sm\" placeholder=\"Ex: comprimé\">
                            </div>
                            <div class=\"col-12 col-md-4\">
                                <label class=\"form-label fw-semibold small mb-1\">
                                    <i class=\"fas fa-percent me-1\"></i> Promotion
                                </label>
                                <select name=\"promotion\" id=\"promotion\" class=\"form-select form-select-sm\" style=\"width: 100%;\">
                                    <option value=\"0\">🎯 Toutes</option>
                                    ";
            // line 669
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["promotions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
                // line 670
                yield "                                        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 670), "html", null, true);
                yield "\" ";
                yield (((($context["selectedPromotion"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 670))) ? ("selected") : (""));
                yield ">
                                            ";
                // line 671
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "name", [], "any", false, false, false, 671), "html", null, true);
                yield "
                                            ";
                // line 672
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "discountPercentage", [], "any", false, false, false, 672)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 673
                    yield "                                                (-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "discountPercentage", [], "any", false, false, false, 673), "html", null, true);
                    yield "%)
                                            ";
                } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,                 // line 674
$context["promotion"], "discountAmount", [], "any", false, false, false, 674)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 675
                    yield "                                                (-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "discountAmount", [], "any", false, false, false, 675), 0, ",", " "), "html", null, true);
                    yield " FCFA)
                                            ";
                }
                // line 677
                yield "                                        </option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['promotion'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 679
            yield "                                </select>
                            </div>
                        </div>
                    ";
        } elseif ((        // line 682
($context["companyType"] ?? null) == "pharmacy")) {
            // line 683
            yield "                        <div class=\"row g-2 g-sm-3\">
                            <div class=\"col-6 col-md-3\">
                                <label class=\"form-label fw-semibold small mb-1\">
                                    <i class=\"fas fa-flask me-1\"></i> Dosage
                                </label>
                                <input type=\"text\" name=\"dosage\" id=\"dosage\" value=\"";
            // line 688
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["dosage"] ?? null), "html", null, true);
            yield "\" 
                                    class=\"form-control form-control-sm\" placeholder=\"Ex: 500mg\">
                            </div>
                            <div class=\"col-6 col-md-3\">
                                <label class=\"form-label fw-semibold small mb-1\">
                                    <i class=\"fas fa-pills me-1\"></i> Forme
                                </label>
                                <input type=\"text\" name=\"form\" id=\"form\" value=\"";
            // line 695
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["form"] ?? null), "html", null, true);
            yield "\" 
                                    class=\"form-control form-control-sm\" placeholder=\"Ex: comprimé\">
                            </div>
                            <div class=\"col-6 col-md-2\">
                                <label class=\"form-label fw-semibold small mb-1\">
                                    <i class=\"fas fa-prescription-bottle me-1\"></i> Prescription
                                </label>
                                <select name=\"prescription_required\" class=\"form-select form-select-sm\">
                                    <option value=\"\">Tous</option>
                                    <option value=\"1\" ";
            // line 704
            yield (((($context["prescriptionRequired"] ?? null) == "1")) ? ("selected") : (""));
            yield ">Obligatoire</option>
                                    <option value=\"0\" ";
            // line 705
            yield (((($context["prescriptionRequired"] ?? null) == "0")) ? ("selected") : (""));
            yield ">Sans</option>
                                </select>
                            </div>
                            <div class=\"col-6 col-md-2\">
                                <label class=\"form-label fw-semibold small mb-1\">
                                    <i class=\"fas fa-eye me-1\"></i> Visibilité
                                </label>
                                <select name=\"visibility\" class=\"form-select form-select-sm\">
                                    <option value=\"\">Tous</option>
                                    <option value=\"visible\" ";
            // line 714
            yield (((($context["selectedVisibility"] ?? null) == "visible")) ? ("selected") : (""));
            yield ">Visibles</option>
                                    <option value=\"hidden\" ";
            // line 715
            yield (((($context["selectedVisibility"] ?? null) == "hidden")) ? ("selected") : (""));
            yield ">Masqués</option>
                                </select>
                            </div>
                            <div class=\"col-12 col-md-2\">
                                <label class=\"form-label fw-semibold small mb-1\">
                                    <i class=\"fas fa-percent me-1\"></i> Promotion
                                </label>
                                <select name=\"promotion\" id=\"promotion\" class=\"form-select form-select-sm\" style=\"width: 100%;\">
                                    <option value=\"0\">🎯 Toutes</option>
                                    ";
            // line 724
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["promotions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
                // line 725
                yield "                                        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 725), "html", null, true);
                yield "\" ";
                yield (((($context["selectedPromotion"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 725))) ? ("selected") : (""));
                yield ">
                                            ";
                // line 726
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "name", [], "any", false, false, false, 726), "html", null, true);
                yield "
                                            ";
                // line 727
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "discountPercentage", [], "any", false, false, false, 727)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 728
                    yield "                                                (-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "discountPercentage", [], "any", false, false, false, 728), "html", null, true);
                    yield "%)
                                            ";
                } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,                 // line 729
$context["promotion"], "discountAmount", [], "any", false, false, false, 729)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 730
                    yield "                                                (-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "discountAmount", [], "any", false, false, false, 730), 0, ",", " "), "html", null, true);
                    yield " FCFA)
                                            ";
                }
                // line 732
                yield "                                        </option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['promotion'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 734
            yield "                                </select>
                            </div>
                        </div>
                    ";
        }
        // line 738
        yield "                </div>
            </form>
        </div>
    </div>

    ";
        // line 744
        yield "    ";
        if (((($context["companyType"] ?? null) == "pharmacy") && (($context["selectedVisibility"] ?? null) != ""))) {
            // line 745
            yield "        <div class=\"alert alert-info mb-4 small\">
            <i class=\"fas fa-info-circle me-2\"></i>
            ";
            // line 747
            if ((($context["selectedVisibility"] ?? null) == "visible")) {
                // line 748
                yield "                Affichage des produits <strong>visibles</strong> sur le marketplace.
            ";
            } else {
                // line 750
                yield "                Affichage des produits <strong>masqués</strong> sur le marketplace.
            ";
            }
            // line 752
            yield "        </div>
    ";
        }
        // line 754
        yield "
    <!-- ✅ Grille de produits - 2 cartes par ligne sur mobile -->
    <div class=\"row g-2 g-sm-3\">
        ";
        // line 757
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 758
            yield "        <div class=\"col-6 col-md-4 col-lg-3 col-xl-3\">
            <div class=\"card product-card h-100 shadow-sm\">
                <div class=\"product-image-container\">
                    ";
            // line 761
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 761) && (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 761) != "default-product.png"))) {
                // line 762
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 762))), "html", null, true);
                yield "\" 
                             alt=\"";
                // line 763
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 763), "html", null, true);
                yield "\" 
                             class=\"card-img-top product-image\">
                    ";
            } else {
                // line 766
                yield "                        <div class=\"product-image-placeholder\">
                            <i class=\"fas fa-box fa-3x fa-sm-4x text-muted\"></i>
                        </div>
                    ";
            }
            // line 770
            yield "                </div>

                <div class=\"card-body d-flex flex-column p-2 p-sm-3\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <h5 class=\"card-title text-truncate mb-0 small\">
                            ";
            // line 775
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 775)), "truncate", [18], "method", false, false, false, 775), "html", null, true);
            yield "
                            <small class=\"text-muted ms-1 d-none d-sm-inline\">
                                <i class=\"fas fa-weight-hanging me-1\"></i>";
            // line 777
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "unit", [], "any", true, true, false, 777)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "unit", [], "any", false, false, false, 777), "pièce")) : ("pièce"))), "truncate", [6], "method", false, false, false, 777), "html", null, true);
            yield "
                            </small>
                        </h5>
                        <div class=\"dropdown ms-1\">
                            <button class=\"btn btn-sm btn-light p-1\" type=\"button\" data-bs-toggle=\"dropdown\">
                                <i class=\"fas fa-bars\"></i>
                            </button>
                            <ul class=\"dropdown-menu dropdown-menu-end\">
                                <li>
                                    <a class=\"dropdown-item\" href=\"";
            // line 786
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 786)]), "html", null, true);
            yield "\">
                                        <i class=\"fas fa-eye me-2\"></i> Voir
                                    </a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item\" href=\"";
            // line 791
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 791)]), "html", null, true);
            yield "\">
                                        <i class=\"fas fa-edit me-2\"></i> Modifier
                                    </a>
                                </li>
                                <li>
                                    <button type=\"button\" 
                                            class=\"dropdown-item toggle-status-btn\"
                                            data-product-id=\"";
            // line 798
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 798), "html", null, true);
            yield "\"
                                            data-product-name=\"";
            // line 799
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 799), "html", null, true);
            yield "\"
                                            data-is-active=\"";
            // line 800
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "isActive", [], "any", false, false, false, 800)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("0"));
            yield "\"
                                            data-token=\"";
            // line 801
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle-status" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 801))), "html", null, true);
            yield "\">
                                        <i class=\"fas ";
            // line 802
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "isActive", [], "any", false, false, false, 802)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-toggle-on") : ("fa-toggle-off"));
            yield " me-2\"></i>
                                        ";
            // line 803
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "isActive", [], "any", false, false, false, 803)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
            yield "
                                    </button>
                                </li>
                                <li><hr class=\"dropdown-divider\"></li>
                                <li>
                                    ";
            // line 808
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 809
                yield "                                        <button type=\"button\" 
                                                class=\"dropdown-item text-danger delete-product-btn\"
                                                data-product-id=\"";
                // line 811
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 811), "html", null, true);
                yield "\"
                                                data-product-name=\"";
                // line 812
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 812), "html", null, true);
                yield "\"
                                                data-token=\"";
                // line 813
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 813))), "html", null, true);
                yield "\"
                                                ";
                // line 814
                if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "purchaseItems", [], "any", false, false, false, 814)) > 0) || (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockBatches", [], "any", false, false, false, 814)) > 0))) {
                    yield "disabled";
                }
                // line 815
                yield "                                                title=\"Supprimer\">
                                            <i class=\"fas fa-trash me-2\"></i> Supprimer
                                        </button>
                                    ";
            }
            // line 819
            yield "                                </li>
                            </ul>
                        </div>
                    </div>

                    <p class=\"text-muted small mb-1 d-none d-sm-block\">
                        <i class=\"fas fa-barcode me-1\"></i>";
            // line 825
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "barcode", [], "any", false, false, false, 825), "html", null, true);
            yield "
                    </p>
                    <p class=\"text-muted small mb-1\">
                        <i class=\"fas fa-tag me-1\"></i>
                        ";
            // line 829
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 829)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 830
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 830), "name", [], "any", false, false, false, 830)), "truncate", [12], "method", false, false, false, 830), "html", null, true);
                yield "
                        ";
            } else {
                // line 832
                yield "                            Non catégorisé
                        ";
            }
            // line 834
            yield "                    </p>

                    <!-- ✅ Badges -->
                    <div class=\"product-badges\">
                        ";
            // line 838
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["product"], "subscriptionActive", [], "any", false, false, false, 838)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 839
                yield "                            <span class=\"badge bg-warning text-dark\">
                                <i class=\"fas fa-clock fa-xs me-1 d-none d-sm-inline\"></i> Hors quota
                            </span>
                        ";
            } else {
                // line 843
                yield "                            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "isActive", [], "any", false, false, false, 843)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 844
                    yield "                                <span class=\"badge bg-success\">
                                    <i class=\"fas fa-check-circle fa-xs me-1 d-none d-sm-inline\"></i> Actif
                                </span>
                            ";
                } else {
                    // line 848
                    yield "                                <span class=\"badge bg-danger\">
                                    <i class=\"fas fa-pause-circle fa-xs me-1 d-none d-sm-inline\"></i> Inactif
                                </span>
                            ";
                }
                // line 852
                yield "                        ";
            }
            // line 853
            yield "                        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "subscriptionActive", [], "any", false, false, false, 853)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 854
                yield "                            <span class=\"badge bg-info d-none d-sm-inline\">
                                <i class=\"fas fa-database fa-xs me-1\"></i> Quota
                            </span>
                        ";
            }
            // line 858
            yield "                        ";
            if ((($context["companyType"] ?? null) == "pharmacy")) {
                // line 859
                yield "                            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "companyPublic", [], "any", false, false, false, 859)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 860
                    yield "                                <span class=\"badge bg-primary d-none d-sm-inline\">
                                    <i class=\"fas fa-eye fa-xs me-1\"></i> Visible
                                </span>
                            ";
                } else {
                    // line 864
                    yield "                                <span class=\"badge bg-secondary d-none d-sm-inline\">
                                    <i class=\"fas fa-eye-slash fa-xs me-1\"></i> Masqué
                                </span>
                            ";
                }
                // line 868
                yield "                        ";
            }
            // line 869
            yield "                        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "hasExpiryDate", [], "any", false, false, false, 869)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 870
                yield "                            <span class=\"badge bg-warning text-dark d-none d-sm-inline\">
                                <i class=\"fas fa-calendar-alt fa-xs me-1\"></i> Périssable
                            </span>
                        ";
            }
            // line 874
            yield "                    </div>

                    ";
            // line 876
            if ((($context["companyType"] ?? null) != "restaurant")) {
                // line 877
                yield "                    <div class=\"row g-0 mb-1\">
                        <div class=\"col-6\">
                            <small class=\"text-muted d-block small\">Prix vente</small>
                            <span class=\"fw-bold text-success small\">
                                ";
                // line 881
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "salePrice", [], "any", false, false, false, 881), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "hmaService", [], "any", false, false, false, 881)), "html", null, true);
                yield "
                            </span>
                        </div>
                        <div class=\"col-6 text-end\">
                            <small class=\"text-muted d-block small\">Prix achat</small>
                            <span class=\"fw-bold text-primary small\">
                                ";
                // line 887
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "purchasePrice", [], "any", false, false, false, 887), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "hmaService", [], "any", false, false, false, 887)), "html", null, true);
                yield "
                            </span>
                        </div>
                    </div>

                    ";
                // line 892
                $context["margin"] = (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "salePrice", [], "any", false, false, false, 892) - CoreExtension::getAttribute($this->env, $this->source, $context["product"], "purchasePrice", [], "any", false, false, false, 892));
                // line 893
                yield "                    ";
                $context["marginPercentage"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "purchasePrice", [], "any", false, false, false, 893) > 0)) ? (Twig\Extension\CoreExtension::round(((($context["margin"] ?? null) / CoreExtension::getAttribute($this->env, $this->source, $context["product"], "purchasePrice", [], "any", false, false, false, 893)) * 100), 1)) : (0));
                // line 894
                yield "                    <div class=\"d-flex justify-content-between align-items-center mb-1 small\">
                        <span class=\"text-muted small\">Marge</span>
                        <span class=\"badge ";
                // line 896
                yield (((($context["marginPercentage"] ?? null) >= 50)) ? ("bg-success") : ((((($context["marginPercentage"] ?? null) >= 20)) ? ("bg-warning text-dark") : ("bg-danger"))));
                yield "\" style=\"font-size: 8px;\">
                            ";
                // line 897
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(($context["margin"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "hmaService", [], "any", false, false, false, 897)), "html", null, true);
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["marginPercentage"] ?? null), "html", null, true);
                yield "%)
                        </span>
                    </div>
                    ";
            } else {
                // line 901
                yield "                    <div class=\"row g-0 mb-1\">
                        <div class=\"col-12\">
                            <small class=\"text-muted d-block small\">Prix d'achat</small>
                            <span class=\"fw-bold text-primary small\">
                                ";
                // line 905
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "purchasePrice", [], "any", false, false, false, 905), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "hmaService", [], "any", false, false, false, 905)), "html", null, true);
                yield "
                            </span>
                        </div>
                    </div>
                    ";
            }
            // line 910
            yield "
                    <div class=\"row g-0 mb-1\">
                        <div class=\"col-6\">
                            <small class=\"text-muted d-block small\">Stock</small>
                            <span class=\"fw-bold small\">";
            // line 914
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockQuantity", [], "any", false, false, false, 914), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "unit", [], "any", true, true, false, 914)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "unit", [], "any", false, false, false, 914), "pièce")) : ("pièce"))), "truncate", [4], "method", false, false, false, 914), "html", null, true);
            yield "</span>
                        </div>
                        <div class=\"col-6 text-end\">
                            <small class=\"text-muted d-block small\">Stock min</small>
                            <span class=\"fw-bold small\">";
            // line 918
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "minQuantity", [], "any", false, false, false, 918), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "unit", [], "any", true, true, false, 918)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "unit", [], "any", false, false, false, 918), "pièce")) : ("pièce"))), "truncate", [4], "method", false, false, false, 918), "html", null, true);
            yield "</span>
                        </div>
                    </div>

                    ";
            // line 922
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "dosage", [], "any", false, false, false, 922) || CoreExtension::getAttribute($this->env, $this->source, $context["product"], "form", [], "any", false, false, false, 922))) {
                // line 923
                yield "                        <div class=\"small text-muted mb-1 d-none d-sm-block\">
                            ";
                // line 924
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "dosage", [], "any", false, false, false, 924)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<span class=\"me-2\"><i class=\"fas fa-flask me-1\"></i>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "dosage", [], "any", false, false, false, 924), "html", null, true);
                    yield "</span>";
                }
                // line 925
                yield "                            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "form", [], "any", false, false, false, 925)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<span><i class=\"fas fa-pills me-1\"></i>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "form", [], "any", false, false, false, 925), "html", null, true);
                    yield "</span>";
                }
                // line 926
                yield "                        </div>
                    ";
            }
            // line 928
            yield "
                    <div class=\"d-flex gap-1 mt-auto flex-wrap\">
                        <a href=\"";
            // line 930
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_index", ["productId" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 930)]), "html", null, true);
            yield "\" 
                            class=\"btn btn-sm btn-outline-info flex-fill\" title=\"Lots\">
                            <i class=\"fas fa-boxes\"></i> <span class=\"d-none d-sm-inline\">Lots</span>
                        </a>
                        <a href=\"";
            // line 934
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_stock_movements", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 934)]), "html", null, true);
            yield "\" 
                        class=\"btn btn-sm btn-outline-primary flex-fill\" title=\"Mouvements\">
                            <i class=\"fas fa-exchange-alt\"></i> <span class=\"d-none d-sm-inline\">Mouvements</span>
                        </a>
                        ";
            // line 938
            if ((($context["companyType"] ?? null) != "restaurant")) {
                // line 939
                yield "                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_promotions", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 939)]), "html", null, true);
                yield "\" 
                            class=\"btn btn-sm btn-outline-warning flex-fill\" title=\"Promotions\">
                                <i class=\"fas fa-tags\"></i> <span class=\"d-none d-sm-inline\">Promos</span>
                            </a>
                        ";
            }
            // line 944
            yield "                    </div>
                </div>
            </div>
        </div>
        ";
            $context['_iterated'] = true;
        }
        // line 948
        if (!$context['_iterated']) {
            // line 949
            yield "        <div class=\"col-12\">
            <div class=\"card shadow\">
                <div class=\"card-body text-center py-5\">
                    <i class=\"fas fa-box-open fa-4x text-muted mb-3\"></i>
                    <h4 class=\"text-muted\">Aucun produit trouvé</h4>
                    <a href=\"";
            // line 954
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_new");
            yield "\" class=\"btn btn-primary mt-3\">
                        <i class=\"fas fa-plus me-2\"></i> Ajouter un produit
                    </a>
                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 961
        yield "    </div>

    <!-- Pagination -->
    ";
        // line 964
        if ((($context["totalPages"] ?? null) > 1)) {
            // line 965
            yield "    <nav aria-label=\"Pagination\" class=\"mt-4\">
        <ul class=\"pagination justify-content-center flex-wrap\">
            ";
            // line 967
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, ($context["totalPages"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 968
                yield "                <li class=\"page-item ";
                yield ((($context["page"] == ($context["currentPage"] ?? null))) ? ("active") : (""));
                yield "\">
                    <a class=\"page-link\" href=\"";
                // line 969
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 969), "query", [], "any", false, false, false, 969), "all", [], "any", false, false, false, 969), ["page" => $context["page"]])), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                yield "</a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 972
            yield "        </ul>
    </nav>
    ";
        }
        // line 975
        yield "</div>

<!-- Modales -->
<div class=\"modal fade\" id=\"quotaReachedModal\" tabindex=\"-1\">
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
        // line 989
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["quota"] ?? null), "html", null, true);
        yield " produits actifs.</h5>
                <p class=\"text-muted\">Pour ajouter de nouveaux produits, passez à un plan supérieur.</p>
            </div>
            <div class=\"modal-footer justify-content-center flex-wrap\">
                <a href=\"";
        // line 993
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subscription_plans");
        yield "\" class=\"btn btn-warning btn-lg px-4 w-100 w-sm-auto\">
                    <i class=\"fas fa-arrow-up me-2\"></i> Voir les offres
                </a>
                <button type=\"button\" class=\"btn btn-outline-secondary w-100 w-sm-auto\" data-bs-dismiss=\"modal\">Annuler</button>
            </div>
        </div>
    </div>
</div>

<!-- Scanner Modal -->
<div class=\"modal fade\" id=\"scannerModal\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-barcode me-2\"></i> Scanner un code-barres
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <input type=\"text\" id=\"scannerInput\" class=\"form-control form-control-lg\" placeholder=\"Scannez ou saisissez...\">
                <div class=\"form-text mt-2\">
                    <i class=\"fas fa-info-circle me-1\"></i>
                    Utilisez votre lecteur de code-barres ou saisissez manuellement.
                </div>
            </div>
            <div class=\"modal-footer flex-wrap gap-2\">
                <button type=\"button\" class=\"btn btn-secondary flex-grow-1 flex-md-grow-0\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-primary flex-grow-1 flex-md-grow-0\" id=\"scanSubmit\">Rechercher</button>
            </div>
        </div>
    </div>
</div>

<!-- Modales pour toggle et suppression -->
<div class=\"modal fade\" id=\"toggleStatusModal\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"toggleStatusTitle\"></h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p id=\"toggleStatusMessage\"></p>
            </div>
            <div class=\"modal-footer flex-wrap gap-2\">
                <button type=\"button\" class=\"btn btn-secondary flex-grow-1 flex-md-grow-0\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"toggleStatusForm\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" id=\"toggleStatusToken\">
                    <button type=\"submit\" class=\"btn flex-grow-1 flex-md-grow-0\" id=\"toggleStatusBtn\"></button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header border-0\">
                <h5 class=\"modal-title text-danger\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Confirmation
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p id=\"deleteMessage\"></p>
            </div>
            <div class=\"modal-footer border-0 flex-wrap gap-2\">
                <button type=\"button\" class=\"btn btn-secondary flex-grow-1 flex-md-grow-0\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"deleteForm\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteToken\">
                    <button type=\"submit\" class=\"btn btn-danger flex-grow-1 flex-md-grow-0\">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    // line 1073
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1074
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/fr.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // ========== Initialisation Select2 ==========
    if (document.getElementById('category')) {
        \$('#category').select2({
            theme: 'bootstrap-5',
            language: 'fr',
            placeholder: '📁 Sélectionnez une catégorie',
            allowClear: true,
            width: '100%',
            dropdownParent: \$('#category').parent()
        });
    }

    if (document.getElementById('unit')) {
        \$('#unit').select2({
            theme: 'bootstrap-5',
            language: 'fr',
            placeholder: '⚖️ Sélectionnez une unité',
            allowClear: true,
            width: '100%',
            dropdownParent: \$('#unit').parent()
        });
    }

    if (document.getElementById('promotion')) {
        \$('#promotion').select2({
            theme: 'bootstrap-5',
            language: 'fr',
            placeholder: '🎯 Sélectionnez une promotion',
            allowClear: true,
            width: '100%',
            dropdownParent: \$('#promotion').parent()
        });
    }

    // Nouveau produit avec vérification quota
    const newProductBtn = document.getElementById('newProductBtn');
    if (newProductBtn) {
        newProductBtn.addEventListener('click', function(e) {
            e.preventDefault();
            ";
        // line 1118
        if ((($tmp = ($context["quotaReached"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1119
            yield "                new bootstrap.Modal(document.getElementById('quotaReachedModal')).show();
            ";
        } else {
            // line 1121
            yield "                window.location.href = \"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_new");
            yield "\";
            ";
        }
        // line 1123
        yield "        });
    }

    // Scanner modal
    const scanBtn = document.getElementById('scan-barcode-btn');
    const scannerModalEl = document.getElementById('scannerModal');
    if (scanBtn && scannerModalEl) {
        const scannerModal = new bootstrap.Modal(scannerModalEl);
        const scannerInput = document.getElementById('scannerInput');
        const scanSubmit = document.getElementById('scanSubmit');

        scanBtn.addEventListener('click', function() {
            scannerModal.show();
            if (scannerInput) {
                setTimeout(function() {
                    scannerInput.focus();
                    scannerInput.value = '';
                }, 300);
            }
        });

        if (scanSubmit && scannerInput) {
            scanSubmit.addEventListener('click', function() {
                const barcode = scannerInput.value.trim();
                if (barcode) {
                    const url = new URL(window.location);
                    url.searchParams.set('search', barcode);
                    url.searchParams.set('page', '1');
                    window.location.href = url.toString();
                }
            });

            scannerInput.addEventListener('keydown', function(e) {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    scanSubmit.click();
                }
            });
        }
    }

    // Toggle status modal
    const toggleModal = new bootstrap.Modal(document.getElementById('toggleStatusModal'));
    const toggleTitle = document.getElementById('toggleStatusTitle');
    const toggleMessage = document.getElementById('toggleStatusMessage');
    const toggleForm = document.getElementById('toggleStatusForm');
    const toggleToken = document.getElementById('toggleStatusToken');
    const toggleBtn = document.getElementById('toggleStatusBtn');

    document.querySelectorAll('.toggle-status-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const productId = this.dataset.productId;
            const productName = this.dataset.productName;
            const isActive = this.dataset.isActive === '1';
            toggleTitle.textContent = isActive ? 'Désactiver le produit' : 'Activer le produit';
            toggleMessage.textContent = `Êtes-vous sûr de vouloir \${isActive ? 'désactiver' : 'activer'} \"\${productName}\" ?`;
            toggleForm.action = `/admin/product/\${productId}/toggle-status`;
            toggleToken.value = this.dataset.token;
            toggleBtn.className = isActive ? 'btn btn-danger' : 'btn btn-success';
            toggleBtn.textContent = isActive ? 'Désactiver' : 'Activer';
            toggleModal.show();
        });
    });

    // Delete modal
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
    const deleteMessage = document.getElementById('deleteMessage');
    const deleteForm = document.getElementById('deleteForm');
    const deleteToken = document.getElementById('deleteToken');

    document.querySelectorAll('.delete-product-btn:not([disabled])').forEach(btn => {
        btn.addEventListener('click', function() {
            const productId = this.dataset.productId;
            const productName = this.dataset.productName;
            deleteMessage.innerHTML = `
                <div class=\"alert alert-warning mb-2 p-2\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i>Cette action est irréversible.
                </div>
                <p>Êtes-vous sûr de vouloir supprimer <strong>\"\${productName}\"</strong> ?</p>
            `;
            deleteForm.action = `/admin/product/\${productId}`;
            deleteToken.value = this.dataset.token;
            deleteModal.show();
        });
    });

    // Toggle extra filters visibility
    const toggleExtraBtn = document.getElementById('toggleExtraFiltersBtn');
    const extraFilters = document.getElementById('extraFilters');
    if (toggleExtraBtn && extraFilters) {
        const dosage = document.getElementById('dosage')?.value;
        const form = document.getElementById('form')?.value;
        const promotion = document.getElementById('promotion')?.value;
        const prescription = document.querySelector('[name=\"prescription_required\"]')?.value;
        const visibility = document.querySelector('[name=\"visibility\"]')?.value;
        
        if ((dosage && dosage !== '') || (form && form !== '') || (promotion && promotion !== '0') || 
            (prescription && prescription !== '') || (visibility && visibility !== '')) {
            extraFilters.style.display = 'block';
            toggleExtraBtn.innerHTML = '<i class=\"fas fa-times me-1\"></i> <span class=\"d-none d-sm-inline\">Masquer filtres</span>';
        }

        toggleExtraBtn.addEventListener('click', function() {
            if (extraFilters.style.display === 'none' || extraFilters.style.display === '') {
                extraFilters.style.display = 'block';
                this.innerHTML = '<i class=\"fas fa-times me-1\"></i> <span class=\"d-none d-sm-inline\">Masquer filtres</span>';
            } else {
                extraFilters.style.display = 'none';
                this.innerHTML = '<i class=\"fas fa-sliders-h me-1\"></i> <span class=\"d-none d-sm-inline\">Autres filtres</span>';
            }
        });
    }
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
        return "admin/product/index.html.twig";
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
        return array (  1683 => 1123,  1677 => 1121,  1673 => 1119,  1671 => 1118,  1624 => 1074,  1617 => 1073,  1533 => 993,  1526 => 989,  1510 => 975,  1505 => 972,  1494 => 969,  1489 => 968,  1485 => 967,  1481 => 965,  1479 => 964,  1474 => 961,  1461 => 954,  1454 => 949,  1452 => 948,  1444 => 944,  1435 => 939,  1433 => 938,  1426 => 934,  1419 => 930,  1415 => 928,  1411 => 926,  1404 => 925,  1398 => 924,  1395 => 923,  1393 => 922,  1384 => 918,  1375 => 914,  1369 => 910,  1361 => 905,  1355 => 901,  1346 => 897,  1342 => 896,  1338 => 894,  1335 => 893,  1333 => 892,  1325 => 887,  1316 => 881,  1310 => 877,  1308 => 876,  1304 => 874,  1298 => 870,  1295 => 869,  1292 => 868,  1286 => 864,  1280 => 860,  1277 => 859,  1274 => 858,  1268 => 854,  1265 => 853,  1262 => 852,  1256 => 848,  1250 => 844,  1247 => 843,  1241 => 839,  1239 => 838,  1233 => 834,  1229 => 832,  1223 => 830,  1221 => 829,  1214 => 825,  1206 => 819,  1200 => 815,  1196 => 814,  1192 => 813,  1188 => 812,  1184 => 811,  1180 => 809,  1178 => 808,  1170 => 803,  1166 => 802,  1162 => 801,  1158 => 800,  1154 => 799,  1150 => 798,  1140 => 791,  1132 => 786,  1120 => 777,  1115 => 775,  1108 => 770,  1102 => 766,  1096 => 763,  1091 => 762,  1089 => 761,  1084 => 758,  1079 => 757,  1074 => 754,  1070 => 752,  1066 => 750,  1062 => 748,  1060 => 747,  1056 => 745,  1053 => 744,  1046 => 738,  1040 => 734,  1033 => 732,  1027 => 730,  1025 => 729,  1020 => 728,  1018 => 727,  1014 => 726,  1007 => 725,  1003 => 724,  991 => 715,  987 => 714,  975 => 705,  971 => 704,  959 => 695,  949 => 688,  942 => 683,  940 => 682,  935 => 679,  928 => 677,  922 => 675,  920 => 674,  915 => 673,  913 => 672,  909 => 671,  902 => 670,  898 => 669,  886 => 660,  876 => 653,  869 => 648,  867 => 647,  860 => 643,  850 => 636,  843 => 631,  841 => 630,  831 => 622,  822 => 619,  815 => 618,  811 => 617,  801 => 609,  789 => 606,  784 => 605,  775 => 604,  768 => 603,  764 => 602,  752 => 593,  748 => 592,  732 => 579,  728 => 578,  716 => 569,  712 => 568,  708 => 567,  697 => 559,  676 => 541,  663 => 530,  652 => 522,  638 => 511,  630 => 505,  627 => 504,  617 => 496,  610 => 492,  588 => 473,  574 => 462,  560 => 451,  546 => 440,  532 => 429,  518 => 418,  502 => 404,  492 => 397,  487 => 395,  481 => 391,  478 => 390,  460 => 373,  456 => 371,  454 => 370,  448 => 369,  444 => 368,  420 => 346,  413 => 345,  72 => 8,  65 => 7,  54 => 5,  43 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/product/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\product\\index.html.twig");
    }
}
