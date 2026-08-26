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
class __TwigTemplate_0725c4ef76821189dee2bb3ad2de6d77 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/product/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/product/index.html.twig"));

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

        yield "Gestion des Produits - HMA Market";
        
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 345
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
        yield (((($tmp = (isset($context["quotaReached"]) || array_key_exists("quotaReached", $context) ? $context["quotaReached"] : (function () { throw new RuntimeError('Variable "quotaReached" does not exist.', 368, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-danger") : ("text-success"));
        yield "\" style=\"font-size: 0.9rem;\">
                            ";
        // line 369
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activeCount"]) || array_key_exists("activeCount", $context) ? $context["activeCount"] : (function () { throw new RuntimeError('Variable "activeCount" does not exist.', 369, $this->source); })()), "html", null, true);
        yield " / ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["quota"]) || array_key_exists("quota", $context) ? $context["quota"] : (function () { throw new RuntimeError('Variable "quota" does not exist.', 369, $this->source); })()), "html", null, true);
        yield "
                            ";
        // line 370
        if (((isset($context["quota"]) || array_key_exists("quota", $context) ? $context["quota"] : (function () { throw new RuntimeError('Variable "quota" does not exist.', 370, $this->source); })()) == "Illimité")) {
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
        if ((($tmp = (isset($context["quotaReached"]) || array_key_exists("quotaReached", $context) ? $context["quotaReached"] : (function () { throw new RuntimeError('Variable "quotaReached" does not exist.', 390, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 391
            yield "    <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
        <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-2\">
            <div>
                <i class=\"fas fa-exclamation-triangle me-2\"></i>
                <strong>Quota atteint !</strong> Vous avez utilisé vos ";
            // line 395
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["quota"]) || array_key_exists("quota", $context) ? $context["quota"] : (function () { throw new RuntimeError('Variable "quota" does not exist.', 395, $this->source); })()), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalFiltered"]) || array_key_exists("totalFiltered", $context) ? $context["totalFiltered"] : (function () { throw new RuntimeError('Variable "totalFiltered" does not exist.', 418, $this->source); })()), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activeFiltered"]) || array_key_exists("activeFiltered", $context) ? $context["activeFiltered"] : (function () { throw new RuntimeError('Variable "activeFiltered" does not exist.', 429, $this->source); })()), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["inactiveFiltered"]) || array_key_exists("inactiveFiltered", $context) ? $context["inactiveFiltered"] : (function () { throw new RuntimeError('Variable "inactiveFiltered" does not exist.', 440, $this->source); })()), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["lowStockFiltered"]) || array_key_exists("lowStockFiltered", $context) ? $context["lowStockFiltered"] : (function () { throw new RuntimeError('Variable "lowStockFiltered" does not exist.', 451, $this->source); })()), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["perishableFiltered"]) || array_key_exists("perishableFiltered", $context) ? $context["perishableFiltered"] : (function () { throw new RuntimeError('Variable "perishableFiltered" does not exist.', 462, $this->source); })()), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nonPerishableFiltered"]) || array_key_exists("nonPerishableFiltered", $context) ? $context["nonPerishableFiltered"] : (function () { throw new RuntimeError('Variable "nonPerishableFiltered" does not exist.', 473, $this->source); })()), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subscriptionActiveFiltered"]) || array_key_exists("subscriptionActiveFiltered", $context) ? $context["subscriptionActiveFiltered"] : (function () { throw new RuntimeError('Variable "subscriptionActiveFiltered" does not exist.', 492, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <div class=\"text-end\">
                                <small class=\"text-secondary d-block\">Inactif</small>
                                <h3 class=\"mb-0\">";
        // line 496
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subscriptionInactiveFiltered"]) || array_key_exists("subscriptionInactiveFiltered", $context) ? $context["subscriptionInactiveFiltered"] : (function () { throw new RuntimeError('Variable "subscriptionInactiveFiltered" does not exist.', 496, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 504
        yield "            ";
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 504, $this->source); })()) == "pharmacy")) {
            // line 505
            yield "            <div class=\"row mt-3 border-top pt-3 g-2\">
                <div class=\"col-6\">
                    <div class=\"stat-item p-2 p-sm-3 bg-light rounded h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-success text-uppercase small fw-bold d-block\">Visibles</span>
                                <h3 class=\"mb-0 text-success\">";
            // line 511
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["visibleFiltered"]) || array_key_exists("visibleFiltered", $context) ? $context["visibleFiltered"] : (function () { throw new RuntimeError('Variable "visibleFiltered" does not exist.', 511, $this->source); })()), "html", null, true);
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["hiddenFiltered"]) || array_key_exists("hiddenFiltered", $context) ? $context["hiddenFiltered"] : (function () { throw new RuntimeError('Variable "hiddenFiltered" does not exist.', 522, $this->source); })()), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 559, $this->source); })()), "html", null, true);
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
        yield ((((isset($context["selectedStatus"]) || array_key_exists("selectedStatus", $context) ? $context["selectedStatus"] : (function () { throw new RuntimeError('Variable "selectedStatus" does not exist.', 567, $this->source); })()) == "active")) ? ("selected") : (""));
        yield ">Actifs</option>
                            <option value=\"inactive\" ";
        // line 568
        yield ((((isset($context["selectedStatus"]) || array_key_exists("selectedStatus", $context) ? $context["selectedStatus"] : (function () { throw new RuntimeError('Variable "selectedStatus" does not exist.', 568, $this->source); })()) == "inactive")) ? ("selected") : (""));
        yield ">Inactifs</option>
                            <option value=\"low-stock\" ";
        // line 569
        yield ((((isset($context["selectedStatus"]) || array_key_exists("selectedStatus", $context) ? $context["selectedStatus"] : (function () { throw new RuntimeError('Variable "selectedStatus" does not exist.', 569, $this->source); })()) == "low-stock")) ? ("selected") : (""));
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
        yield ((((isset($context["selectedExpiryType"]) || array_key_exists("selectedExpiryType", $context) ? $context["selectedExpiryType"] : (function () { throw new RuntimeError('Variable "selectedExpiryType" does not exist.', 578, $this->source); })()) == "perishable")) ? ("selected") : (""));
        yield ">Périssables</option>
                            <option value=\"non-perishable\" ";
        // line 579
        yield ((((isset($context["selectedExpiryType"]) || array_key_exists("selectedExpiryType", $context) ? $context["selectedExpiryType"] : (function () { throw new RuntimeError('Variable "selectedExpiryType" does not exist.', 579, $this->source); })()) == "non-perishable")) ? ("selected") : (""));
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
        yield ((((isset($context["selectedSubscriptionStatus"]) || array_key_exists("selectedSubscriptionStatus", $context) ? $context["selectedSubscriptionStatus"] : (function () { throw new RuntimeError('Variable "selectedSubscriptionStatus" does not exist.', 592, $this->source); })()) == "active")) ? ("selected") : (""));
        yield ">Dans quota</option>
                            <option value=\"inactive\" ";
        // line 593
        yield ((((isset($context["selectedSubscriptionStatus"]) || array_key_exists("selectedSubscriptionStatus", $context) ? $context["selectedSubscriptionStatus"] : (function () { throw new RuntimeError('Variable "selectedSubscriptionStatus" does not exist.', 593, $this->source); })()) == "inactive")) ? ("selected") : (""));
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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 602, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 603
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 603), "html", null, true);
            yield "\" ";
            yield ((((isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 603, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 603))) ? ("selected") : (""));
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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["units"]) || array_key_exists("units", $context) ? $context["units"] : (function () { throw new RuntimeError('Variable "units" does not exist.', 617, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["unit"]) {
            // line 618
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["unit"], "html", null, true);
            yield "\" ";
            yield ((((isset($context["selectedUnit"]) || array_key_exists("selectedUnit", $context) ? $context["selectedUnit"] : (function () { throw new RuntimeError('Variable "selectedUnit" does not exist.', 618, $this->source); })()) == $context["unit"])) ? ("selected") : (""));
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
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 630, $this->source); })()) == "restaurant")) {
            // line 631
            yield "                        <div class=\"row g-2 g-sm-3\">
                            <div class=\"col-6\">
                                <label class=\"form-label fw-semibold small mb-1\">
                                    <i class=\"fas fa-flask me-1\"></i> Dosage
                                </label>
                                <input type=\"text\" name=\"dosage\" id=\"dosage\" value=\"";
            // line 636
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dosage"]) || array_key_exists("dosage", $context) ? $context["dosage"] : (function () { throw new RuntimeError('Variable "dosage" does not exist.', 636, $this->source); })()), "html", null, true);
            yield "\" 
                                    class=\"form-control form-control-sm\" placeholder=\"Ex: 500mg\">
                            </div>
                            <div class=\"col-6\">
                                <label class=\"form-label fw-semibold small mb-1\">
                                    <i class=\"fas fa-pills me-1\"></i> Forme
                                </label>
                                <input type=\"text\" name=\"form\" id=\"form\" value=\"";
            // line 643
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 643, $this->source); })()), "html", null, true);
            yield "\" 
                                    class=\"form-control form-control-sm\" placeholder=\"Ex: comprimé\">
                            </div>
                        </div>
                    ";
        } elseif ((        // line 647
(isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 647, $this->source); })()) == "market")) {
            // line 648
            yield "                        <div class=\"row g-2 g-sm-3\">
                            <div class=\"col-6 col-md-4\">
                                <label class=\"form-label fw-semibold small mb-1\">
                                    <i class=\"fas fa-flask me-1\"></i> Dosage
                                </label>
                                <input type=\"text\" name=\"dosage\" id=\"dosage\" value=\"";
            // line 653
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dosage"]) || array_key_exists("dosage", $context) ? $context["dosage"] : (function () { throw new RuntimeError('Variable "dosage" does not exist.', 653, $this->source); })()), "html", null, true);
            yield "\" 
                                    class=\"form-control form-control-sm\" placeholder=\"Ex: 500mg\">
                            </div>
                            <div class=\"col-6 col-md-4\">
                                <label class=\"form-label fw-semibold small mb-1\">
                                    <i class=\"fas fa-pills me-1\"></i> Forme
                                </label>
                                <input type=\"text\" name=\"form\" id=\"form\" value=\"";
            // line 660
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 660, $this->source); })()), "html", null, true);
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
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 669, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
                // line 670
                yield "                                        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 670), "html", null, true);
                yield "\" ";
                yield ((((isset($context["selectedPromotion"]) || array_key_exists("selectedPromotion", $context) ? $context["selectedPromotion"] : (function () { throw new RuntimeError('Variable "selectedPromotion" does not exist.', 670, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 670))) ? ("selected") : (""));
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
(isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 682, $this->source); })()) == "pharmacy")) {
            // line 683
            yield "                        <div class=\"row g-2 g-sm-3\">
                            <div class=\"col-6 col-md-3\">
                                <label class=\"form-label fw-semibold small mb-1\">
                                    <i class=\"fas fa-flask me-1\"></i> Dosage
                                </label>
                                <input type=\"text\" name=\"dosage\" id=\"dosage\" value=\"";
            // line 688
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dosage"]) || array_key_exists("dosage", $context) ? $context["dosage"] : (function () { throw new RuntimeError('Variable "dosage" does not exist.', 688, $this->source); })()), "html", null, true);
            yield "\" 
                                    class=\"form-control form-control-sm\" placeholder=\"Ex: 500mg\">
                            </div>
                            <div class=\"col-6 col-md-3\">
                                <label class=\"form-label fw-semibold small mb-1\">
                                    <i class=\"fas fa-pills me-1\"></i> Forme
                                </label>
                                <input type=\"text\" name=\"form\" id=\"form\" value=\"";
            // line 695
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 695, $this->source); })()), "html", null, true);
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
            yield ((((isset($context["prescriptionRequired"]) || array_key_exists("prescriptionRequired", $context) ? $context["prescriptionRequired"] : (function () { throw new RuntimeError('Variable "prescriptionRequired" does not exist.', 704, $this->source); })()) == "1")) ? ("selected") : (""));
            yield ">Obligatoire</option>
                                    <option value=\"0\" ";
            // line 705
            yield ((((isset($context["prescriptionRequired"]) || array_key_exists("prescriptionRequired", $context) ? $context["prescriptionRequired"] : (function () { throw new RuntimeError('Variable "prescriptionRequired" does not exist.', 705, $this->source); })()) == "0")) ? ("selected") : (""));
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
            yield ((((isset($context["selectedVisibility"]) || array_key_exists("selectedVisibility", $context) ? $context["selectedVisibility"] : (function () { throw new RuntimeError('Variable "selectedVisibility" does not exist.', 714, $this->source); })()) == "visible")) ? ("selected") : (""));
            yield ">Visibles</option>
                                    <option value=\"hidden\" ";
            // line 715
            yield ((((isset($context["selectedVisibility"]) || array_key_exists("selectedVisibility", $context) ? $context["selectedVisibility"] : (function () { throw new RuntimeError('Variable "selectedVisibility" does not exist.', 715, $this->source); })()) == "hidden")) ? ("selected") : (""));
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
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 724, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
                // line 725
                yield "                                        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 725), "html", null, true);
                yield "\" ";
                yield ((((isset($context["selectedPromotion"]) || array_key_exists("selectedPromotion", $context) ? $context["selectedPromotion"] : (function () { throw new RuntimeError('Variable "selectedPromotion" does not exist.', 725, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 725))) ? ("selected") : (""));
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
        if ((((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 744, $this->source); })()) == "pharmacy") && ((isset($context["selectedVisibility"]) || array_key_exists("selectedVisibility", $context) ? $context["selectedVisibility"] : (function () { throw new RuntimeError('Variable "selectedVisibility" does not exist.', 744, $this->source); })()) != ""))) {
            // line 745
            yield "        <div class=\"alert alert-info mb-4 small\">
            <i class=\"fas fa-info-circle me-2\"></i>
            ";
            // line 747
            if (((isset($context["selectedVisibility"]) || array_key_exists("selectedVisibility", $context) ? $context["selectedVisibility"] : (function () { throw new RuntimeError('Variable "selectedVisibility" does not exist.', 747, $this->source); })()) == "visible")) {
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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 757, $this->source); })()));
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
            if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 858, $this->source); })()) == "pharmacy")) {
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
            if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 876, $this->source); })()) != "restaurant")) {
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
                $context["marginPercentage"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "purchasePrice", [], "any", false, false, false, 893) > 0)) ? (Twig\Extension\CoreExtension::round((((isset($context["margin"]) || array_key_exists("margin", $context) ? $context["margin"] : (function () { throw new RuntimeError('Variable "margin" does not exist.', 893, $this->source); })()) / CoreExtension::getAttribute($this->env, $this->source, $context["product"], "purchasePrice", [], "any", false, false, false, 893)) * 100), 1)) : (0));
                // line 894
                yield "                    <div class=\"d-flex justify-content-between align-items-center mb-1 small\">
                        <span class=\"text-muted small\">Marge</span>
                        <span class=\"badge ";
                // line 896
                yield ((((isset($context["marginPercentage"]) || array_key_exists("marginPercentage", $context) ? $context["marginPercentage"] : (function () { throw new RuntimeError('Variable "marginPercentage" does not exist.', 896, $this->source); })()) >= 50)) ? ("bg-success") : (((((isset($context["marginPercentage"]) || array_key_exists("marginPercentage", $context) ? $context["marginPercentage"] : (function () { throw new RuntimeError('Variable "marginPercentage" does not exist.', 896, $this->source); })()) >= 20)) ? ("bg-warning text-dark") : ("bg-danger"))));
                yield "\" style=\"font-size: 8px;\">
                            ";
                // line 897
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency((isset($context["margin"]) || array_key_exists("margin", $context) ? $context["margin"] : (function () { throw new RuntimeError('Variable "margin" does not exist.', 897, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "hmaService", [], "any", false, false, false, 897)), "html", null, true);
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["marginPercentage"]) || array_key_exists("marginPercentage", $context) ? $context["marginPercentage"] : (function () { throw new RuntimeError('Variable "marginPercentage" does not exist.', 897, $this->source); })()), "html", null, true);
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
            if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 938, $this->source); })()) != "restaurant")) {
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
        if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 964, $this->source); })()) > 1)) {
            // line 965
            yield "    <nav aria-label=\"Pagination\" class=\"mt-4\">
        <ul class=\"pagination justify-content-center flex-wrap\">
            ";
            // line 967
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 967, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 968
                yield "                <li class=\"page-item ";
                yield ((($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 968, $this->source); })()))) ? ("active") : (""));
                yield "\">
                    <a class=\"page-link\" href=\"";
                // line 969
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 969, $this->source); })()), "request", [], "any", false, false, false, 969), "query", [], "any", false, false, false, 969), "all", [], "any", false, false, false, 969), ["page" => $context["page"]])), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["quota"]) || array_key_exists("quota", $context) ? $context["quota"] : (function () { throw new RuntimeError('Variable "quota" does not exist.', 989, $this->source); })()), "html", null, true);
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1073
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
        if ((($tmp = (isset($context["quotaReached"]) || array_key_exists("quotaReached", $context) ? $context["quotaReached"] : (function () { throw new RuntimeError('Variable "quotaReached" does not exist.', 1118, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  1737 => 1123,  1731 => 1121,  1727 => 1119,  1725 => 1118,  1678 => 1074,  1665 => 1073,  1575 => 993,  1568 => 989,  1552 => 975,  1547 => 972,  1536 => 969,  1531 => 968,  1527 => 967,  1523 => 965,  1521 => 964,  1516 => 961,  1503 => 954,  1496 => 949,  1494 => 948,  1486 => 944,  1477 => 939,  1475 => 938,  1468 => 934,  1461 => 930,  1457 => 928,  1453 => 926,  1446 => 925,  1440 => 924,  1437 => 923,  1435 => 922,  1426 => 918,  1417 => 914,  1411 => 910,  1403 => 905,  1397 => 901,  1388 => 897,  1384 => 896,  1380 => 894,  1377 => 893,  1375 => 892,  1367 => 887,  1358 => 881,  1352 => 877,  1350 => 876,  1346 => 874,  1340 => 870,  1337 => 869,  1334 => 868,  1328 => 864,  1322 => 860,  1319 => 859,  1316 => 858,  1310 => 854,  1307 => 853,  1304 => 852,  1298 => 848,  1292 => 844,  1289 => 843,  1283 => 839,  1281 => 838,  1275 => 834,  1271 => 832,  1265 => 830,  1263 => 829,  1256 => 825,  1248 => 819,  1242 => 815,  1238 => 814,  1234 => 813,  1230 => 812,  1226 => 811,  1222 => 809,  1220 => 808,  1212 => 803,  1208 => 802,  1204 => 801,  1200 => 800,  1196 => 799,  1192 => 798,  1182 => 791,  1174 => 786,  1162 => 777,  1157 => 775,  1150 => 770,  1144 => 766,  1138 => 763,  1133 => 762,  1131 => 761,  1126 => 758,  1121 => 757,  1116 => 754,  1112 => 752,  1108 => 750,  1104 => 748,  1102 => 747,  1098 => 745,  1095 => 744,  1088 => 738,  1082 => 734,  1075 => 732,  1069 => 730,  1067 => 729,  1062 => 728,  1060 => 727,  1056 => 726,  1049 => 725,  1045 => 724,  1033 => 715,  1029 => 714,  1017 => 705,  1013 => 704,  1001 => 695,  991 => 688,  984 => 683,  982 => 682,  977 => 679,  970 => 677,  964 => 675,  962 => 674,  957 => 673,  955 => 672,  951 => 671,  944 => 670,  940 => 669,  928 => 660,  918 => 653,  911 => 648,  909 => 647,  902 => 643,  892 => 636,  885 => 631,  883 => 630,  873 => 622,  864 => 619,  857 => 618,  853 => 617,  843 => 609,  831 => 606,  826 => 605,  817 => 604,  810 => 603,  806 => 602,  794 => 593,  790 => 592,  774 => 579,  770 => 578,  758 => 569,  754 => 568,  750 => 567,  739 => 559,  718 => 541,  705 => 530,  694 => 522,  680 => 511,  672 => 505,  669 => 504,  659 => 496,  652 => 492,  630 => 473,  616 => 462,  602 => 451,  588 => 440,  574 => 429,  560 => 418,  544 => 404,  534 => 397,  529 => 395,  523 => 391,  520 => 390,  502 => 373,  498 => 371,  496 => 370,  490 => 369,  486 => 368,  462 => 346,  449 => 345,  102 => 8,  89 => 7,  66 => 5,  43 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/product/index.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}Gestion des Produits - HMA Market{% endblock %}

{% block stylesheets %}
{{ parent() }}
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
{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
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
                        <h5 class=\"mb-0 {{ quotaReached ? 'text-danger' : 'text-success' }}\" style=\"font-size: 0.9rem;\">
                            {{ activeCount }} / {{ quota }}
                            {% if quota == 'Illimité' %}
                                <i class=\"fas fa-infinity text-info ms-1\"></i>
                            {% endif %}
                        </h5>
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

    {# Message si quota atteint #}
    {% if quotaReached %}
    <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
        <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-2\">
            <div>
                <i class=\"fas fa-exclamation-triangle me-2\"></i>
                <strong>Quota atteint !</strong> Vous avez utilisé vos {{ quota }} produits actifs.
            </div>
            <a href=\"{{ path('app_subscription_plans') }}\" class=\"btn btn-warning btn-sm w-100 w-sm-auto\">
                <i class=\"fas fa-arrow-up me-1\"></i> Voir les offres
            </a>
        </div>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    </div>
    {% endif %}

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
                                <h3 class=\"mb-0\">{{ totalFiltered }}</h3>
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
                                <h3 class=\"mb-0\">{{ activeFiltered }}</h3>
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
                                <h3 class=\"mb-0\">{{ inactiveFiltered }}</h3>
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
                                <h3 class=\"mb-0\">{{ lowStockFiltered }}</h3>
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
                                <h3 class=\"mb-0\">{{ perishableFiltered }}</h3>
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
                                <h3 class=\"mb-0\">{{ nonPerishableFiltered }}</h3>
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
                                <h3 class=\"mb-0\">{{ subscriptionActiveFiltered }}</h3>
                            </div>
                            <div class=\"text-end\">
                                <small class=\"text-secondary d-block\">Inactif</small>
                                <h3 class=\"mb-0\">{{ subscriptionInactiveFiltered }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {# ✅ Statistiques de visibilité (uniquement pour les pharmacies) #}
            {% if companyType == 'pharmacy' %}
            <div class=\"row mt-3 border-top pt-3 g-2\">
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
                                <span class=\"text-secondary text-uppercase small fw-bold d-block\">Masqués</span>
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

    <!-- Filtres -->
    <div class=\"card border-0 shadow-sm mb-4\">
        <div class=\"card-header bg-white py-2 py-sm-3 d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <h5 class=\"mb-0 small\"><i class=\"fas fa-filter me-2 text-primary\"></i><span class=\"d-none d-sm-inline\">Filtres</span></h5>
            <div class=\"d-flex gap-1 gap-sm-2 flex-wrap\">
                <button type=\"button\" class=\"btn btn-outline-info btn-sm\" id=\"toggleExtraFiltersBtn\">
                    <i class=\"fas fa-sliders-h me-1\"></i> <span class=\"d-none d-sm-inline\">Autres filtres</span>
                </button>
                <a href=\"{{ path('app_admin_product_index') }}\" class=\"btn btn-outline-secondary btn-sm\">
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
                               value=\"{{ search }}\">
                    </div>
                    <div class=\"col-6 col-sm-6 col-md-4\">
                        <label class=\"form-label fw-semibold small mb-1\">
                            <i class=\"fas fa-toggle-on me-1\"></i> Statut
                        </label>
                        <select name=\"status\" class=\"form-select form-select-sm\">
                            <option value=\"\">Tous</option>
                            <option value=\"active\" {{ selectedStatus == 'active' ? 'selected' : '' }}>Actifs</option>
                            <option value=\"inactive\" {{ selectedStatus == 'inactive' ? 'selected' : '' }}>Inactifs</option>
                            <option value=\"low-stock\" {{ selectedStatus == 'low-stock' ? 'selected' : '' }}>Stock faible</option>
                        </select>
                    </div>
                    <div class=\"col-6 col-sm-6 col-md-4\">
                        <label class=\"form-label fw-semibold small mb-1\">
                            <i class=\"fas fa-calendar-alt me-1\"></i> Type
                        </label>
                        <select name=\"expiry_type\" class=\"form-select form-select-sm\">
                            <option value=\"\">Tous</option>
                            <option value=\"perishable\" {{ selectedExpiryType == 'perishable' ? 'selected' : '' }}>Périssables</option>
                            <option value=\"non-perishable\" {{ selectedExpiryType == 'non-perishable' ? 'selected' : '' }}>Non périssables</option>
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
                            <option value=\"active\" {{ selectedSubscriptionStatus == 'active' ? 'selected' : '' }}>Dans quota</option>
                            <option value=\"inactive\" {{ selectedSubscriptionStatus == 'inactive' ? 'selected' : '' }}>Hors quota</option>
                        </select>
                    </div>
                    <div class=\"col-6 col-sm-6 col-md-4\">
                        <label class=\"form-label fw-semibold small mb-1\">
                            <i class=\"fas fa-tag me-1\"></i> Catégorie
                        </label>
                        <select name=\"category\" id=\"category\" class=\"form-select form-select-sm\" style=\"width: 100%;\">
                            <option value=\"0\">Toutes</option>
                            {% for category in categories %}
                                <option value=\"{{ category.id }}\" {{ selectedCategory == category.id ? 'selected' : '' }}>
                                    {% for i in 0..category.level %}&nbsp;&nbsp;{% endfor %}
                                    {% if category.level > 0 %}↳{% endif %}
                                    {{ category.name }} ({{ category.productCount }})
                                </option>
                            {% endfor %}
                        </select>
                    </div>
                    <div class=\"col-12 col-sm-6 col-md-4\">
                        <label class=\"form-label fw-semibold small mb-1\">
                            <i class=\"fas fa-weight-hanging me-1\"></i> Unité
                        </label>
                        <select name=\"unit\" id=\"unit\" class=\"form-select form-select-sm\" style=\"width: 100%;\">
                            <option value=\"\">Toutes</option>
                            {% for unit in units %}
                                <option value=\"{{ unit }}\" {{ selectedUnit == unit ? 'selected' : '' }}>
                                    {{ unit }}
                                </option>
                            {% endfor %}
                        </select>
                    </div>
                </div>

                <!-- ✅ Filtres supplémentaires -->
                <div id=\"extraFilters\" style=\"display: none;\">
                    <hr class=\"my-3\">
                    
                    {% if companyType == 'restaurant' %}
                        <div class=\"row g-2 g-sm-3\">
                            <div class=\"col-6\">
                                <label class=\"form-label fw-semibold small mb-1\">
                                    <i class=\"fas fa-flask me-1\"></i> Dosage
                                </label>
                                <input type=\"text\" name=\"dosage\" id=\"dosage\" value=\"{{ dosage }}\" 
                                    class=\"form-control form-control-sm\" placeholder=\"Ex: 500mg\">
                            </div>
                            <div class=\"col-6\">
                                <label class=\"form-label fw-semibold small mb-1\">
                                    <i class=\"fas fa-pills me-1\"></i> Forme
                                </label>
                                <input type=\"text\" name=\"form\" id=\"form\" value=\"{{ form }}\" 
                                    class=\"form-control form-control-sm\" placeholder=\"Ex: comprimé\">
                            </div>
                        </div>
                    {% elseif companyType == 'market' %}
                        <div class=\"row g-2 g-sm-3\">
                            <div class=\"col-6 col-md-4\">
                                <label class=\"form-label fw-semibold small mb-1\">
                                    <i class=\"fas fa-flask me-1\"></i> Dosage
                                </label>
                                <input type=\"text\" name=\"dosage\" id=\"dosage\" value=\"{{ dosage }}\" 
                                    class=\"form-control form-control-sm\" placeholder=\"Ex: 500mg\">
                            </div>
                            <div class=\"col-6 col-md-4\">
                                <label class=\"form-label fw-semibold small mb-1\">
                                    <i class=\"fas fa-pills me-1\"></i> Forme
                                </label>
                                <input type=\"text\" name=\"form\" id=\"form\" value=\"{{ form }}\" 
                                    class=\"form-control form-control-sm\" placeholder=\"Ex: comprimé\">
                            </div>
                            <div class=\"col-12 col-md-4\">
                                <label class=\"form-label fw-semibold small mb-1\">
                                    <i class=\"fas fa-percent me-1\"></i> Promotion
                                </label>
                                <select name=\"promotion\" id=\"promotion\" class=\"form-select form-select-sm\" style=\"width: 100%;\">
                                    <option value=\"0\">🎯 Toutes</option>
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
                    {% elseif companyType == 'pharmacy' %}
                        <div class=\"row g-2 g-sm-3\">
                            <div class=\"col-6 col-md-3\">
                                <label class=\"form-label fw-semibold small mb-1\">
                                    <i class=\"fas fa-flask me-1\"></i> Dosage
                                </label>
                                <input type=\"text\" name=\"dosage\" id=\"dosage\" value=\"{{ dosage }}\" 
                                    class=\"form-control form-control-sm\" placeholder=\"Ex: 500mg\">
                            </div>
                            <div class=\"col-6 col-md-3\">
                                <label class=\"form-label fw-semibold small mb-1\">
                                    <i class=\"fas fa-pills me-1\"></i> Forme
                                </label>
                                <input type=\"text\" name=\"form\" id=\"form\" value=\"{{ form }}\" 
                                    class=\"form-control form-control-sm\" placeholder=\"Ex: comprimé\">
                            </div>
                            <div class=\"col-6 col-md-2\">
                                <label class=\"form-label fw-semibold small mb-1\">
                                    <i class=\"fas fa-prescription-bottle me-1\"></i> Prescription
                                </label>
                                <select name=\"prescription_required\" class=\"form-select form-select-sm\">
                                    <option value=\"\">Tous</option>
                                    <option value=\"1\" {{ prescriptionRequired == '1' ? 'selected' : '' }}>Obligatoire</option>
                                    <option value=\"0\" {{ prescriptionRequired == '0' ? 'selected' : '' }}>Sans</option>
                                </select>
                            </div>
                            <div class=\"col-6 col-md-2\">
                                <label class=\"form-label fw-semibold small mb-1\">
                                    <i class=\"fas fa-eye me-1\"></i> Visibilité
                                </label>
                                <select name=\"visibility\" class=\"form-select form-select-sm\">
                                    <option value=\"\">Tous</option>
                                    <option value=\"visible\" {{ selectedVisibility == 'visible' ? 'selected' : '' }}>Visibles</option>
                                    <option value=\"hidden\" {{ selectedVisibility == 'hidden' ? 'selected' : '' }}>Masqués</option>
                                </select>
                            </div>
                            <div class=\"col-12 col-md-2\">
                                <label class=\"form-label fw-semibold small mb-1\">
                                    <i class=\"fas fa-percent me-1\"></i> Promotion
                                </label>
                                <select name=\"promotion\" id=\"promotion\" class=\"form-select form-select-sm\" style=\"width: 100%;\">
                                    <option value=\"0\">🎯 Toutes</option>
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
                </div>
            </form>
        </div>
    </div>

    {# Message filtre visibilité #}
    {% if companyType == 'pharmacy' and selectedVisibility != '' %}
        <div class=\"alert alert-info mb-4 small\">
            <i class=\"fas fa-info-circle me-2\"></i>
            {% if selectedVisibility == 'visible' %}
                Affichage des produits <strong>visibles</strong> sur le marketplace.
            {% else %}
                Affichage des produits <strong>masqués</strong> sur le marketplace.
            {% endif %}
        </div>
    {% endif %}

    <!-- ✅ Grille de produits - 2 cartes par ligne sur mobile -->
    <div class=\"row g-2 g-sm-3\">
        {% for product in products %}
        <div class=\"col-6 col-md-4 col-lg-3 col-xl-3\">
            <div class=\"card product-card h-100 shadow-sm\">
                <div class=\"product-image-container\">
                    {% if product.image and product.image != 'default-product.png' %}
                        <img src=\"{{ asset('uploads/products/' ~ product.image) }}\" 
                             alt=\"{{ product.name }}\" 
                             class=\"card-img-top product-image\">
                    {% else %}
                        <div class=\"product-image-placeholder\">
                            <i class=\"fas fa-box fa-3x fa-sm-4x text-muted\"></i>
                        </div>
                    {% endif %}
                </div>

                <div class=\"card-body d-flex flex-column p-2 p-sm-3\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <h5 class=\"card-title text-truncate mb-0 small\">
                            {{ product.name|u.truncate(18) }}
                            <small class=\"text-muted ms-1 d-none d-sm-inline\">
                                <i class=\"fas fa-weight-hanging me-1\"></i>{{ product.unit|default('pièce')|u.truncate(6) }}
                            </small>
                        </h5>
                        <div class=\"dropdown ms-1\">
                            <button class=\"btn btn-sm btn-light p-1\" type=\"button\" data-bs-toggle=\"dropdown\">
                                <i class=\"fas fa-bars\"></i>
                            </button>
                            <ul class=\"dropdown-menu dropdown-menu-end\">
                                <li>
                                    <a class=\"dropdown-item\" href=\"{{ path('app_admin_product_show', {'id': product.id}) }}\">
                                        <i class=\"fas fa-eye me-2\"></i> Voir
                                    </a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item\" href=\"{{ path('app_admin_product_edit', {'id': product.id}) }}\">
                                        <i class=\"fas fa-edit me-2\"></i> Modifier
                                    </a>
                                </li>
                                <li>
                                    <button type=\"button\" 
                                            class=\"dropdown-item toggle-status-btn\"
                                            data-product-id=\"{{ product.id }}\"
                                            data-product-name=\"{{ product.name }}\"
                                            data-is-active=\"{{ product.isActive ? '1' : '0' }}\"
                                            data-token=\"{{ csrf_token('toggle-status' ~ product.id) }}\">
                                        <i class=\"fas {{ product.isActive ? 'fa-toggle-on' : 'fa-toggle-off' }} me-2\"></i>
                                        {{ product.isActive ? 'Désactiver' : 'Activer' }}
                                    </button>
                                </li>
                                <li><hr class=\"dropdown-divider\"></li>
                                <li>
                                    {% if is_granted('ROLE_ADMIN') %}
                                        <button type=\"button\" 
                                                class=\"dropdown-item text-danger delete-product-btn\"
                                                data-product-id=\"{{ product.id }}\"
                                                data-product-name=\"{{ product.name }}\"
                                                data-token=\"{{ csrf_token('delete' ~ product.id) }}\"
                                                {% if product.purchaseItems|length > 0 or product.stockBatches|length > 0 %}disabled{% endif %}
                                                title=\"Supprimer\">
                                            <i class=\"fas fa-trash me-2\"></i> Supprimer
                                        </button>
                                    {% endif %}
                                </li>
                            </ul>
                        </div>
                    </div>

                    <p class=\"text-muted small mb-1 d-none d-sm-block\">
                        <i class=\"fas fa-barcode me-1\"></i>{{ product.barcode }}
                    </p>
                    <p class=\"text-muted small mb-1\">
                        <i class=\"fas fa-tag me-1\"></i>
                        {% if product.category %}
                            {{ product.category.name|u.truncate(12) }}
                        {% else %}
                            Non catégorisé
                        {% endif %}
                    </p>

                    <!-- ✅ Badges -->
                    <div class=\"product-badges\">
                        {% if not product.subscriptionActive %}
                            <span class=\"badge bg-warning text-dark\">
                                <i class=\"fas fa-clock fa-xs me-1 d-none d-sm-inline\"></i> Hors quota
                            </span>
                        {% else %}
                            {% if product.isActive %}
                                <span class=\"badge bg-success\">
                                    <i class=\"fas fa-check-circle fa-xs me-1 d-none d-sm-inline\"></i> Actif
                                </span>
                            {% else %}
                                <span class=\"badge bg-danger\">
                                    <i class=\"fas fa-pause-circle fa-xs me-1 d-none d-sm-inline\"></i> Inactif
                                </span>
                            {% endif %}
                        {% endif %}
                        {% if product.subscriptionActive %}
                            <span class=\"badge bg-info d-none d-sm-inline\">
                                <i class=\"fas fa-database fa-xs me-1\"></i> Quota
                            </span>
                        {% endif %}
                        {% if companyType == 'pharmacy' %}
                            {% if product.companyPublic %}
                                <span class=\"badge bg-primary d-none d-sm-inline\">
                                    <i class=\"fas fa-eye fa-xs me-1\"></i> Visible
                                </span>
                            {% else %}
                                <span class=\"badge bg-secondary d-none d-sm-inline\">
                                    <i class=\"fas fa-eye-slash fa-xs me-1\"></i> Masqué
                                </span>
                            {% endif %}
                        {% endif %}
                        {% if product.hasExpiryDate %}
                            <span class=\"badge bg-warning text-dark d-none d-sm-inline\">
                                <i class=\"fas fa-calendar-alt fa-xs me-1\"></i> Périssable
                            </span>
                        {% endif %}
                    </div>

                    {% if companyType != 'restaurant' %}
                    <div class=\"row g-0 mb-1\">
                        <div class=\"col-6\">
                            <small class=\"text-muted d-block small\">Prix vente</small>
                            <span class=\"fw-bold text-success small\">
                                {{ product.salePrice|price_with_currency(product.hmaService) }}
                            </span>
                        </div>
                        <div class=\"col-6 text-end\">
                            <small class=\"text-muted d-block small\">Prix achat</small>
                            <span class=\"fw-bold text-primary small\">
                                {{ product.purchasePrice|price_with_currency(product.hmaService) }}
                            </span>
                        </div>
                    </div>

                    {% set margin = product.salePrice - product.purchasePrice %}
                    {% set marginPercentage = product.purchasePrice > 0 ? (margin / product.purchasePrice * 100)|round(1) : 0 %}
                    <div class=\"d-flex justify-content-between align-items-center mb-1 small\">
                        <span class=\"text-muted small\">Marge</span>
                        <span class=\"badge {{ marginPercentage >= 50 ? 'bg-success' : (marginPercentage >= 20 ? 'bg-warning text-dark' : 'bg-danger') }}\" style=\"font-size: 8px;\">
                            {{ margin|price_with_currency(product.hmaService) }} ({{ marginPercentage }}%)
                        </span>
                    </div>
                    {% else %}
                    <div class=\"row g-0 mb-1\">
                        <div class=\"col-12\">
                            <small class=\"text-muted d-block small\">Prix d'achat</small>
                            <span class=\"fw-bold text-primary small\">
                                {{ product.purchasePrice|price_with_currency(product.hmaService) }}
                            </span>
                        </div>
                    </div>
                    {% endif %}

                    <div class=\"row g-0 mb-1\">
                        <div class=\"col-6\">
                            <small class=\"text-muted d-block small\">Stock</small>
                            <span class=\"fw-bold small\">{{ product.stockQuantity }} {{ product.unit|default('pièce')|u.truncate(4) }}</span>
                        </div>
                        <div class=\"col-6 text-end\">
                            <small class=\"text-muted d-block small\">Stock min</small>
                            <span class=\"fw-bold small\">{{ product.minQuantity }} {{ product.unit|default('pièce')|u.truncate(4) }}</span>
                        </div>
                    </div>

                    {% if product.dosage or product.form %}
                        <div class=\"small text-muted mb-1 d-none d-sm-block\">
                            {% if product.dosage %}<span class=\"me-2\"><i class=\"fas fa-flask me-1\"></i>{{ product.dosage }}</span>{% endif %}
                            {% if product.form %}<span><i class=\"fas fa-pills me-1\"></i>{{ product.form }}</span>{% endif %}
                        </div>
                    {% endif %}

                    <div class=\"d-flex gap-1 mt-auto flex-wrap\">
                        <a href=\"{{ path('app_admin_stock_batch_index', {'productId': product.id}) }}\" 
                            class=\"btn btn-sm btn-outline-info flex-fill\" title=\"Lots\">
                            <i class=\"fas fa-boxes\"></i> <span class=\"d-none d-sm-inline\">Lots</span>
                        </a>
                        <a href=\"{{ path('app_admin_product_stock_movements', {'id': product.id}) }}\" 
                        class=\"btn btn-sm btn-outline-primary flex-fill\" title=\"Mouvements\">
                            <i class=\"fas fa-exchange-alt\"></i> <span class=\"d-none d-sm-inline\">Mouvements</span>
                        </a>
                        {% if companyType != 'restaurant' %}
                            <a href=\"{{ path('app_admin_product_promotions', {'id': product.id}) }}\" 
                            class=\"btn btn-sm btn-outline-warning flex-fill\" title=\"Promotions\">
                                <i class=\"fas fa-tags\"></i> <span class=\"d-none d-sm-inline\">Promos</span>
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
                    <i class=\"fas fa-box-open fa-4x text-muted mb-3\"></i>
                    <h4 class=\"text-muted\">Aucun produit trouvé</h4>
                    <a href=\"{{ path('app_admin_product_new') }}\" class=\"btn btn-primary mt-3\">
                        <i class=\"fas fa-plus me-2\"></i> Ajouter un produit
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
            {% for page in 1..totalPages %}
                <li class=\"page-item {{ page == currentPage ? 'active' : '' }}\">
                    <a class=\"page-link\" href=\"{{ path('app_admin_product_index', app.request.query.all|merge({'page': page})) }}\">{{ page }}</a>
                </li>
            {% endfor %}
        </ul>
    </nav>
    {% endif %}
</div>

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
                <h5>Vous avez atteint votre limite de {{ quota }} produits actifs.</h5>
                <p class=\"text-muted\">Pour ajouter de nouveaux produits, passez à un plan supérieur.</p>
            </div>
            <div class=\"modal-footer justify-content-center flex-wrap\">
                <a href=\"{{ path('app_subscription_plans') }}\" class=\"btn btn-warning btn-lg px-4 w-100 w-sm-auto\">
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
{% endblock %}

{% block javascripts %}
{{ parent() }}
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
            {% if quotaReached %}
                new bootstrap.Modal(document.getElementById('quotaReachedModal')).show();
            {% else %}
                window.location.href = \"{{ path('app_admin_product_new') }}\";
            {% endif %}
        });
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
{% endblock %}", "admin/product/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\product\\index.html.twig");
    }
}
