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

/* admin/promotion/product_promotions.html.twig */
class __TwigTemplate_5b0f6f1b95dff43b8da11f0d5af3f2eb extends Template
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
        $this->parent = $this->load("base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Promotions du produit - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 4), "html", null, true);
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        
        /* Informations produit */
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
        yield from [];
    }

    // line 284
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_index");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-boxes me-1\"></i> Produits
                        </a>
                    </li>
                    <li class=\"breadcrumb-item small\">
                        <a href=\"";
        // line 300
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 300)]), "html", null, true);
        yield "\" class=\"text-decoration-none\">
                            ";
        // line 301
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 301)), "truncate", [15], "method", false, false, false, 301), "html", null, true);
        yield "
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active small\">
                        <i class=\"fas fa-tags me-1\"></i> Promotions
                    </li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-1\">
                <i class=\"fas fa-tags me-2 text-primary\"></i>Promotions du produit
            </h1>
            <p class=\"text-muted mb-0 small\">
                Produit : <strong>";
        // line 313
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 313), "html", null, true);
        yield "</strong> | 
                Code : <strong>";
        // line 314
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "barcode", [], "any", false, false, false, 314), "html", null, true);
        yield "</strong>
            </p>
        </div>
        <div class=\"d-flex gap-1 gap-sm-2 flex-wrap w-100 w-sm-auto\">
            <a href=\"";
        // line 318
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 318)]), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary btn-sm flex-grow-1 flex-sm-grow-0\">
                <i class=\"fas fa-arrow-left me-1\"></i> <span class=\"d-none d-sm-inline\">Retour</span>
            </a>
            <a href=\"";
        // line 321
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_new");
        yield "?product_id=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 321), "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 331));
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["error"], "method", false, false, false, 334));
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
         INFORMATIONS DU PRODUIT
    ========================================== -->
    <div class=\"card shadow-sm border-0 mb-3 mb-md-4\">
        <div class=\"card-body p-2 p-md-3\">
            <div class=\"row align-items-center g-2 g-md-3\">
                <div class=\"col-3 col-md-2 text-center\">
                    ";
        // line 345
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, false, 345) && (CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, false, 345) != "default-product.png"))) {
            // line 346
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, false, 346))), "html", null, true);
            yield "\" 
                             alt=\"";
            // line 347
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 347), "html", null, true);
            yield "\" 
                             class=\"rounded shadow-sm\" 
                             style=\"width: 60px; height: 60px; object-fit: cover;\">
                    ";
        } else {
            // line 351
            yield "                        <div class=\"bg-light rounded d-flex align-items-center justify-content-center mx-auto\" style=\"width: 60px; height: 60px;\">
                            <i class=\"fas fa-box fa-2x text-muted\"></i>
                        </div>
                    ";
        }
        // line 355
        yield "                </div>
                <div class=\"col-9 col-md-10\">
                    <div class=\"row g-1 g-md-3\">
                        <div class=\"col-12 col-md-4\">
                            <small class=\"text-muted\" style=\"font-size:0.55rem;\">Code-barres</small>
                            <p class=\"mb-0 fw-bold small\">";
        // line 360
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "barcode", [], "any", false, false, false, 360), "html", null, true);
        yield "</p>
                        </div>
                        <div class=\"col-6 col-md-4\">
                            <small class=\"text-muted\" style=\"font-size:0.55rem;\">Prix de vente</small>
                            <p class=\"mb-0 fw-bold text-success small\">";
        // line 364
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "salePrice", [], "any", false, false, false, 364), CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "hmaService", [], "any", false, false, false, 364)), "html", null, true);
        yield "</p>
                        </div>
                        <div class=\"col-6 col-md-4\">
                            <small class=\"text-muted\" style=\"font-size:0.55rem;\">Catégorie</small>
                            <p class=\"mb-0 small\">";
        // line 368
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "category", [], "any", false, false, false, 368)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "category", [], "any", false, false, false, 368), "name", [], "any", false, false, false, 368), "html", null, true)) : ("Non catégorisé"));
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["promotions"] ?? null)), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-tag text-primary opacity-50\" style=\"font-size:1.5rem;\"></i>
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, ($context["promotions"] ?? null), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "isActive", [], "any", false, false, false, 403); })), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, ($context["promotions"] ?? null), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return  !CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "isActive", [], "any", false, false, false, 415); })), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, ($context["promotions"] ?? null), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "isOngoing", [], "any", false, false, false, 427); })), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, ($context["promotions"] ?? null), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "isUpcoming", [], "any", false, false, false, 439); })), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, ($context["promotions"] ?? null), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "isEnded", [], "any", false, false, false, 451); })), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_promotions", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 468)]), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["search"] ?? null), "html", null, true);
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
        yield (((($context["status"] ?? null) == "all")) ? ("selected") : (""));
        yield ">Tous</option>
                            <option value=\"active\" ";
        // line 498
        yield (((($context["status"] ?? null) == "active")) ? ("selected") : (""));
        yield ">Actives</option>
                            <option value=\"inactive\" ";
        // line 499
        yield (((($context["status"] ?? null) == "inactive")) ? ("selected") : (""));
        yield ">Inactives</option>
                        </select>
                    </div>
                    
                    <!-- Période - 50% sur mobile, 3 sur desktop -->
                    <div class=\"col-6 col-md-3 filter-col-half\">
                        <label class=\"form-label fw-semibold filter-label\">Période</label>
                        <select name=\"period\" class=\"form-select filter-select\">
                            <option value=\"all\" ";
        // line 507
        yield (((($context["period"] ?? null) == "all")) ? ("selected") : (""));
        yield ">Toutes</option>
                            <option value=\"ongoing\" ";
        // line 508
        yield (((($context["period"] ?? null) == "ongoing")) ? ("selected") : (""));
        yield ">En cours</option>
                            <option value=\"upcoming\" ";
        // line 509
        yield (((($context["period"] ?? null) == "upcoming")) ? ("selected") : (""));
        yield ">À venir</option>
                            <option value=\"ended\" ";
        // line 510
        yield (((($context["period"] ?? null) == "ended")) ? ("selected") : (""));
        yield ">Terminées</option>
                        </select>
                    </div>
                    
                    <!-- Boutons - 100% sur mobile, 2 sur desktop -->
                    <div class=\"col-12 col-md-2 filter-col\">
                        <div class=\"d-flex gap-1 gap-md-2 filter-btn-group\">
                            <a href=\"";
        // line 517
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_promotions", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 517)]), "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable(($context["promotions"] ?? null));
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
                            <i class=\"fas fa-tag fa-4x text-muted opacity-25\"></i>
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
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "value", [], "any", false, false, false, 563), CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "hmaService", [], "any", false, false, false, 563)), "html", null, true);
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
                    </div>
                    
                    <div class=\"card-footer bg-transparent border-0 d-flex flex-wrap justify-content-between gap-1 pt-0 pb-2 pb-md-3 px-2 px-sm-3 px-md-3\">
                        <a href=\"";
            // line 597
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 597)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-info flex-fill\" style=\"font-size:0.55rem; padding:0.15rem 0.2rem;\">
                            <i class=\"fas fa-eye me-1\"></i> <span class=\"d-none d-sm-inline\">Voir</span>
                        </a>
                        <a href=\"";
            // line 600
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 600)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary flex-fill\" style=\"font-size:0.55rem; padding:0.15rem 0.2rem;\">
                            <i class=\"fas fa-edit me-1\"></i> <span class=\"d-none d-sm-inline\">Modifier</span>
                        </a>
                        ";
            // line 603
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 604
                yield "                            <button type=\"button\" class=\"btn btn-sm btn-outline-danger flex-fill\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 604), "html", null, true);
                yield "\" style=\"font-size:0.55rem; padding:0.15rem 0.2rem;\">
                                <i class=\"fas fa-trash-alt me-1\"></i> <span class=\"d-none d-sm-inline\">Supprimer</span>
                            </button>
                        ";
            }
            // line 608
            yield "                    </div>
                </div>
            </div>

            <!-- ==========================================
                 MODAL DE SUPPRESSION
            ========================================== -->
            ";
            // line 615
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 616
                yield "            <div class=\"modal fade\" id=\"deleteModal";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 616), "html", null, true);
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
                // line 630
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "name", [], "any", false, false, false, 630), 0, 30), "html", null, true);
                yield "</strong><br>
                                Cette promotion ne sera plus associée à ce produit.
                            </div>
                        </div>
                        <div class=\"modal-footer border-0 py-2\">
                            <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-bs-dismiss=\"modal\">Annuler</button>
                            <form method=\"post\" action=\"";
                // line 636
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 636)]), "html", null, true);
                yield "\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 637
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 637))), "html", null, true);
                yield "\">
                                <button type=\"submit\" class=\"btn btn-danger btn-sm\">Supprimer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            ";
            }
            // line 645
            yield "        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 646
            yield "            <!-- Aucun résultat -->
            <div class=\"col-12\">
                <div class=\"card border-0 shadow-sm rounded-4 text-center py-4 py-md-5\">
                    <div class=\"card-body\">
                        <i class=\"fas fa-tags fa-4x text-muted mb-3 opacity-25\"></i>
                        <h5 class=\"text-muted fs-6 fs-md-5\">Aucune promotion associée</h5>
                        <p class=\"text-muted small\">Ajoutez une promotion pour ce produit.</p>
                        <a href=\"";
            // line 653
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_new");
            yield "?product_id=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 653), "html", null, true);
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
        // line 660
        yield "    </div>

    <!-- ==========================================
         PAGINATION
    ========================================== -->
    ";
        // line 665
        if ((($context["totalPages"] ?? null) > 1)) {
            // line 666
            yield "        <nav class=\"mt-3 mt-md-4\">
            <ul class=\"pagination pagination-sm justify-content-center flex-wrap gap-1\">
                ";
            // line 668
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, ($context["totalPages"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 669
                yield "                    <li class=\"page-item ";
                yield ((($context["page"] == ($context["currentPage"] ?? null))) ? ("active") : (""));
                yield "\">
                        <a class=\"page-link\" href=\"";
                // line 670
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_promotions", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 670), "query", [], "any", false, false, false, 670), "all", [], "any", false, false, false, 670), ["page" => $context["page"], "id" => CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 670)])), "html", null, true);
                yield "\" style=\"font-size:0.7rem; padding:0.25rem 0.5rem;\">
                            ";
                // line 671
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                yield "
                        </a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 675
            yield "            </ul>
        </nav>
    ";
        }
        // line 678
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/promotion/product_promotions.html.twig";
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
        return array (  1005 => 678,  1000 => 675,  990 => 671,  986 => 670,  981 => 669,  977 => 668,  973 => 666,  971 => 665,  964 => 660,  949 => 653,  940 => 646,  935 => 645,  924 => 637,  920 => 636,  911 => 630,  893 => 616,  891 => 615,  882 => 608,  874 => 604,  872 => 603,  866 => 600,  860 => 597,  854 => 593,  848 => 589,  846 => 588,  841 => 585,  839 => 584,  834 => 581,  832 => 580,  826 => 576,  822 => 574,  816 => 572,  814 => 571,  810 => 570,  803 => 565,  797 => 563,  791 => 561,  789 => 560,  782 => 555,  778 => 554,  774 => 553,  767 => 549,  763 => 548,  756 => 547,  751 => 544,  745 => 540,  737 => 538,  735 => 537,  731 => 535,  726 => 534,  706 => 517,  696 => 510,  692 => 509,  688 => 508,  684 => 507,  673 => 499,  669 => 498,  665 => 497,  651 => 486,  630 => 468,  610 => 451,  595 => 439,  580 => 427,  565 => 415,  550 => 403,  535 => 391,  509 => 368,  502 => 364,  495 => 360,  488 => 355,  482 => 351,  475 => 347,  470 => 346,  468 => 345,  458 => 337,  449 => 335,  444 => 334,  435 => 332,  431 => 331,  416 => 321,  410 => 318,  403 => 314,  399 => 313,  384 => 301,  380 => 300,  372 => 295,  360 => 285,  353 => 284,  72 => 7,  65 => 6,  53 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/promotion/product_promotions.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\promotion\\product_promotions.html.twig");
    }
}
