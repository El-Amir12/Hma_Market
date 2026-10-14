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

/* admin/restaurant/promotion/show.html.twig */
class __TwigTemplate_2fe3efa49483da59074bac5a766853e2 extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Promotion : ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "name", [], "any", false, false, false, 3), "html", null, true);
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
    .rounded-4 {
        border-radius: 1rem;
        overflow: hidden;
    }
    
    .bg-gradient-light {
        background: linear-gradient(135deg, #f5f7fa 0%, #e9ecef 100%);
    }
    
    .bg-gradient-primary {
        background: linear-gradient(135deg, #667eea 0%, #0463f1 100%) !important;
    }
    
    /* Cartes d'informations */
    .info-card {
        transition: transform 0.2s ease, box-shadow 0.2s ease;
        border: 1px solid rgba(0,0,0,0.05);
    }
    
    .info-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }
    
    /* Boutons */
    .btn-primary {
        background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);
        border: none;
        transition: all 0.3s ease;
    }
    
    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
    }
    
    .btn-danger {
        transition: all 0.3s ease;
    }
    
    .btn-danger:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(220, 53, 69, 0.4);
    }
    
    /* Styles du tableau */
    .table {
        margin-bottom: 0;
    }
    
    .table th {
        background: linear-gradient(135deg, #667eea 0%, #0463f1 100%) !important;
        color: #ffffff !important;
        border: none;
        font-weight: 600;
        font-size: 0.7rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        padding: 10px 8px;
        vertical-align: middle;
        white-space: nowrap;
    }
    
    .table td {
        vertical-align: middle;
        padding: 0.6rem 0.5rem;
        background-color: #ffffff;
        border-bottom: 1px solid #e9ecef;
        font-size: 0.75rem;
    }
    
    .table tbody tr:hover {
        background-color: rgba(4, 99, 241, 0.04);
    }
    
    .table tbody tr:hover td {
        background-color: transparent;
    }
    
    .card-header {
        border-bottom: none;
    }
    
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
        .h3 {
            font-size: 1rem !important;
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
        .card-body .p-4, .card-body .p-xl-5 {
            padding: 0.75rem !important;
        }
        .card-body .p-4.p-xl-5 {
            padding: 0.75rem !important;
        }
        
        /* Informations */
        .info-card {
            padding: 0.5rem !important;
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
        .card-img-top {
            height: 200px !important;
        }
        .bg-gradient-light {
            height: 200px !important;
        }
        .bg-gradient-light i {
            font-size: 4rem !important;
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
        
        /* Tableaux */
        .table th, .table td {
            padding: 0.4rem 0.3rem;
            font-size: 0.65rem;
        }
        .table th {
            font-size: 0.55rem;
            letter-spacing: 0.3px;
            padding: 6px 4px;
        }
        .table td img {
            width: 35px !important;
            height: 35px !important;
        }
        .table td .bg-light {
            width: 35px !important;
            height: 35px !important;
        }
        .table td .bg-light i {
            font-size: 1rem !important;
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
        
        /* Utilisateur */
        .rounded-circle {
            width: 40px !important;
            height: 40px !important;
        }
        .rounded-circle i {
            font-size: 1.2rem !important;
        }
        .flex-grow-1.ms-3 {
            margin-left: 0.5rem !important;
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
        .card-body .p-4, .card-body .p-xl-5 {
            padding: 1rem !important;
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
        
        .card-img-top {
            height: 250px !important;
        }
        .bg-gradient-light {
            height: 250px !important;
        }
        
        .table th, .table td {
            padding: 0.5rem 0.4rem;
            font-size: 0.7rem;
        }
        .table th {
            font-size: 0.6rem;
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
        .table tbody tr:hover {
            background-color: transparent !important;
        }
        .table tbody tr:hover td {
            background-color: #ffffff !important;
        }
    }
</style>
";
        yield from [];
    }

    // line 375
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 376
        yield "<div class=\"container-fluid px-2 px-md-4 py-2 py-md-4\">

    <!-- ==========================================
         EN-TÊTE
    ========================================== -->
    <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center mb-3 mb-md-4 flex-wrap gap-2\">
        <div class=\"w-100 w-sm-auto\">
            <a href=\"";
        // line 383
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_promotion_index");
        yield "\" class=\"btn btn-outline-secondary btn-sm mb-2\">
                <i class=\"fas fa-arrow-left me-1\"></i> <span class=\"d-none d-sm-inline\">Retour à la liste</span>
                <span class=\"d-inline d-sm-none\">Retour</span>
            </a>
            <h1 class=\"h2 h-md-1 fw-bold mt-1\">
                <i class=\"fas fa-tag text-primary me-2\"></i>";
        // line 388
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "name", [], "any", false, false, false, 388), 0, 30), "html", null, true);
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "name", [], "any", false, false, false, 388)) > 30)) {
            yield "...";
        }
        // line 389
        yield "            </h1>
        </div>
        <div class=\"d-flex gap-1 gap-sm-2 flex-wrap w-100 w-sm-auto\">
            <a href=\"";
        // line 392
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_promotion_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "id", [], "any", false, false, false, 392)]), "html", null, true);
        yield "\" class=\"btn btn-primary btn-sm flex-grow-1 flex-sm-grow-0\">
                <i class=\"fas fa-edit me-1\"></i> <span class=\"d-none d-sm-inline\">Modifier</span>
            </a>
            <button type=\"button\" class=\"btn btn-danger btn-sm flex-grow-1 flex-sm-grow-0\" data-bs-toggle=\"modal\" data-bs-target=\"#deletePromotionModal\">
                <i class=\"fas fa-trash-alt me-1\"></i> <span class=\"d-none d-sm-inline\">Supprimer</span>
            </button>
        </div>
    </div>

    <!-- ==========================================
         CONTENU PRINCIPAL
    ========================================== -->
    <div class=\"row g-2 g-md-4\">
        <!-- Colonne image -->
        <div class=\"col-12 col-lg-5 col-xl-4\">
            <div class=\"card shadow-sm border-0 rounded-4 overflow-hidden\">
                <div class=\"position-relative\">
                    ";
        // line 409
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "image", [], "any", false, false, false, 409)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 410
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/promotions/" . CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "image", [], "any", false, false, false, 410))), "html", null, true);
            yield "\" 
                             class=\"card-img-top\" 
                             alt=\"";
            // line 412
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "name", [], "any", false, false, false, 412), "html", null, true);
            yield "\" 
                             style=\"object-fit: cover; height: 200px; width: 100%;\">
                    ";
        } else {
            // line 415
            yield "                        <div class=\"bg-gradient-light d-flex align-items-center justify-content-center\" style=\"height: 200px;\">
                            <i class=\"fas fa-tag fa-5x text-muted opacity-25\"></i>
                        </div>
                    ";
        }
        // line 419
        yield "                    <div class=\"position-absolute top-0 end-0 p-2 p-md-3\">
                        <span class=\"badge ";
        // line 420
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "isActive", [], "any", false, false, false, 420)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-secondary"));
        yield " px-2 py-1 px-md-3 py-md-2 shadow\" style=\"font-size:0.6rem;\">
                            <i class=\"fas ";
        // line 421
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "isActive", [], "any", false, false, false, 421)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-check-circle") : ("fa-ban"));
        yield " me-1\"></i>
                            ";
        // line 422
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "isActive", [], "any", false, false, false, 422)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ACTIVE") : ("INACTIVE"));
        yield "
                        </span>
                    </div>
                </div>
                <div class=\"card-body bg-light p-2 p-md-3\">
                    <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center flex-wrap gap-1 gap-sm-2\">
                        <div>
                            <i class=\"far fa-calendar-alt me-1 text-muted\"></i>
                            <small class=\"text-muted\" style=\"font-size:0.6rem;\">Créée le ";
        // line 430
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "createdAt", [], "any", false, false, false, 430), "d/m/Y à H:i"), "html", null, true);
        yield "</small>
                        </div>
                        ";
        // line 432
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "updatedAt", [], "any", false, false, false, 432) && (CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "updatedAt", [], "any", false, false, false, 432) != CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "createdAt", [], "any", false, false, false, 432)))) {
            // line 433
            yield "                        <div>
                            <i class=\"far fa-edit me-1 text-muted\"></i>
                            <small class=\"text-muted\" style=\"font-size:0.6rem;\">Modifiée le ";
            // line 435
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "updatedAt", [], "any", false, false, false, 435), "d/m/Y à H:i"), "html", null, true);
            yield "</small>
                        </div>
                        ";
        }
        // line 438
        yield "                    </div>
                </div>
            </div>
        </div>

        <!-- Colonne informations -->
        <div class=\"col-12 col-lg-7 col-xl-8\">
            <div class=\"card shadow-sm border-0 rounded-4 h-100\">
                <div class=\"card-body p-2 p-md-4 p-xl-5\">
                    <h3 class=\"card-title mb-3 mb-md-4 fs-5 fs-md-4\">
                        <i class=\"fas fa-info-circle text-primary me-2\"></i>Détails de la promotion
                    </h3>
                    
                    <div class=\"row g-2 g-md-4\">
                        <div class=\"col-6 col-md-6\">
                            <div class=\"info-card p-2 p-md-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                                    <i class=\"fas fa-layer-group text-primary me-1 me-md-2\" style=\"font-size:0.8rem;\"></i>
                                    <small class=\"text-muted text-uppercase\" style=\"font-size:0.55rem;\">Type</small>
                                </div>
                                <p class=\"fw-bold mb-0 fs-6 fs-md-4\">";
        // line 458
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "typePromotion", [], "any", false, false, false, 458), "name", [], "any", false, false, false, 458), "html", null, true);
        yield "</p>
                            </div>
                        </div>
                        <div class=\"col-6 col-md-6\">
                            <div class=\"info-card p-2 p-md-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                                    <i class=\"fas fa-percent text-primary me-1 me-md-2\" style=\"font-size:0.8rem;\"></i>
                                    <small class=\"text-muted text-uppercase\" style=\"font-size:0.55rem;\">Valeur</small>
                                </div>
                                <p class=\"fw-bold mb-0 text-primary fs-5 fs-md-2\">
                                    ";
        // line 468
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "typePromotion", [], "any", false, false, false, 468), "name", [], "any", false, false, false, 468) == "Pourcentage")) {
            // line 469
            yield "                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "value", [], "any", false, false, false, 469), "html", null, true);
            yield "%
                                    ";
        } else {
            // line 471
            yield "                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "value", [], "any", false, false, false, 471), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 471), "hmaService", [], "any", false, false, false, 471)), "html", null, true);
            yield "
                                    ";
        }
        // line 473
        yield "                                </p>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"info-card p-2 p-md-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                                    <i class=\"fas fa-align-left text-primary me-1 me-md-2\" style=\"font-size:0.8rem;\"></i>
                                    <small class=\"text-muted text-uppercase\" style=\"font-size:0.55rem;\">Description</small>
                                </div>
                                <p class=\"mb-0 small\" style=\"font-size:0.75rem;\">
                                    ";
        // line 483
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "description", [], "any", true, true, false, 483)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "description", [], "any", false, false, false, 483), "Aucune description fournie")) : ("Aucune description fournie")), "html", null, true));
        yield "
                                </p>
                            </div>
                        </div>
                        <div class=\"col-6 col-md-6\">
                            <div class=\"info-card p-2 p-md-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                                    <i class=\"far fa-calendar-check text-success me-1 me-md-2\" style=\"font-size:0.8rem;\"></i>
                                    <small class=\"text-muted text-uppercase\" style=\"font-size:0.55rem;\">Début</small>
                                </div>
                                <p class=\"fw-semibold mb-0 fs-6 fs-md-5\">
                                    ";
        // line 494
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "startDate", [], "any", false, false, false, 494), "d/m/Y"), "html", null, true);
        yield "
                                </p>
                            </div>
                        </div>
                        <div class=\"col-6 col-md-6\">
                            <div class=\"info-card p-2 p-md-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                                    <i class=\"far fa-calendar-times text-danger me-1 me-md-2\" style=\"font-size:0.8rem;\"></i>
                                    <small class=\"text-muted text-uppercase\" style=\"font-size:0.55rem;\">Fin</small>
                                </div>
                                <p class=\"fw-semibold mb-0 fs-6 fs-md-5\">
                                    ";
        // line 505
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "endDate", [], "any", false, false, false, 505)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 506
            yield "                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "endDate", [], "any", false, false, false, 506), "d/m/Y"), "html", null, true);
            yield "
                                    ";
        } else {
            // line 508
            yield "                                        <span class=\"badge bg-info\" style=\"font-size:0.6rem;\">Sans limite</span>
                                    ";
        }
        // line 510
        yield "                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Informations de l'utilisateur créateur -->
                    <div class=\"mt-3 mt-md-4 pt-2 pt-md-3 border-top\">
                        <div class=\"d-flex align-items-center\">
                            <div class=\"flex-shrink-0\">
                                ";
        // line 519
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "user", [], "any", false, false, false, 519), "photo", [], "any", false, false, false, 519)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 520
            yield "                                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "user", [], "any", false, false, false, 520), "photo", [], "any", false, false, false, 520))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "user", [], "any", false, false, false, 520), "fullName", [], "any", false, false, false, 520), "html", null, true);
            yield "\" class=\"rounded-circle\" width=\"40\" height=\"40\" style=\"object-fit: cover;\">
                                ";
        } else {
            // line 522
            yield "                                    <div class=\"bg-secondary rounded-circle d-flex align-items-center justify-content-center\" style=\"width: 40px; height: 40px;\">
                                        <i class=\"fas fa-user fa-1x text-white\"></i>
                                    </div>
                                ";
        }
        // line 526
        yield "                            </div>
                            <div class=\"flex-grow-1 ms-2 ms-md-3\">
                                <small class=\"text-muted\" style=\"font-size:0.6rem;\">Créée par</small>
                                <p class=\"fw-bold mb-0 small\">";
        // line 529
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "user", [], "any", false, false, false, 529), "fullName", [], "any", false, false, false, 529), "html", null, true);
        yield "</p>
                                <small class=\"text-muted\" style=\"font-size:0.55rem;\">
                                    <i class=\"fas fa-envelope me-1\"></i> ";
        // line 531
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "user", [], "any", false, false, false, 531), "email", [], "any", false, false, false, 531), "html", null, true);
        yield "
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ========================================== -->
    <!-- TABLEAUX DES ASSOCIATIONS -->
    <!-- ========================================== -->
    
    <!-- SECTION CATÉGORIES DE PLATS -->
    ";
        // line 546
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "promotionCategoryRecipes", [], "any", false, false, false, 546)) > 0)) {
            // line 547
            yield "    <div class=\"card shadow-sm border-0 rounded-4 mt-3 mt-md-4\">
        <div class=\"card-header bg-gradient-primary text-white py-2 py-md-3\">
            <h5 class=\"card-title mb-0 fs-6 fs-md-5\">
                <i class=\"fas fa-utensils me-2\"></i>Catégories de plats concernées
                <span class=\"badge bg-light text-dark ms-2\">";
            // line 551
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "promotionCategoryRecipes", [], "any", false, false, false, 551)), "html", null, true);
            yield "</span>
            </h5>
        </div>
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover mb-0 align-middle table-sm\">
                    <thead style=\"background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);\">
                        <tr>
                            <th class=\"text-white\" style=\"width: 60px\">Image</th>
                            <th class=\"text-white\">Nom</th>
                            <th class=\"text-white d-none d-md-table-cell\">Description</th>
                            <th class=\"text-white d-none d-lg-table-cell\" style=\"width: 120px\">Hiérarchie</th>
                            <th class=\"text-white text-center\" style=\"width: 80px\">Plats</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 567
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "promotionCategoryRecipes", [], "any", false, false, false, 567));
            foreach ($context['_seq'] as $context["_key"] => $context["promoCategoryRecipe"]) {
                // line 568
                yield "                            ";
                $context["category"] = CoreExtension::getAttribute($this->env, $this->source, $context["promoCategoryRecipe"], "categoryRecipe", [], "any", false, false, false, 568);
                // line 569
                yield "                            <tr>
                                <td>
                                    ";
                // line 571
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "image", [], "any", false, false, false, 571)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 572
                    yield "                                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/categories_plats/" . CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "image", [], "any", false, false, false, 572))), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 572), "html", null, true);
                    yield "\" class=\"rounded\" style=\"width: 35px; height: 35px; object-fit: cover;\">
                                    ";
                } else {
                    // line 574
                    yield "                                        <div class=\"bg-light rounded d-flex align-items-center justify-content-center\" style=\"width: 35px; height: 35px;\">
                                            <i class=\"fas fa-utensils fa-1x text-muted\"></i>
                                        </div>
                                    ";
                }
                // line 578
                yield "                                </td>
                                <td>
                                    <strong class=\"small\">";
                // line 580
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 580), "html", null, true);
                yield "</strong>
                                    ";
                // line 581
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "parent", [], "any", false, false, false, 581)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 582
                    yield "                                        <small class=\"text-muted d-block d-md-none\" style=\"font-size:0.55rem;\">Sous-catégorie</small>
                                    ";
                }
                // line 584
                yield "                                </td>
                                <td class=\"text-muted d-none d-md-table-cell small\">";
                // line 585
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", true, true, false, 585)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", false, false, false, 585), "-")) : ("-")), 0, 60), "html", null, true);
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", false, false, false, 585)) > 60)) {
                    yield "...";
                }
                yield "</td>
                                <td class=\"d-none d-lg-table-cell\">
                                    ";
                // line 587
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "parent", [], "any", false, false, false, 587)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 588
                    yield "                                        <span class=\"badge bg-info\" style=\"font-size:0.55rem;\">Niveau ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "hierarchyLevel", [], "any", false, false, false, 588), "html", null, true);
                    yield "</span>
                                    ";
                } else {
                    // line 590
                    yield "                                        <span class=\"badge bg-secondary\" style=\"font-size:0.55rem;\">Principale</span>
                                    ";
                }
                // line 592
                yield "                                </td>
                                <td class=\"text-center\">
                                    <span class=\"badge bg-primary rounded-pill px-2 py-1\" style=\"font-size:0.6rem;\">";
                // line 594
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "recipes", [], "any", false, false, false, 594)), "html", null, true);
                yield "</span>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['promoCategoryRecipe'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 598
            yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>
    ";
        }
        // line 604
        yield "
    <!-- SECTION PLATS -->
    ";
        // line 606
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "promotionRecipes", [], "any", false, false, false, 606)) > 0)) {
            // line 607
            yield "    <div class=\"card shadow-sm border-0 rounded-4 mt-3 mt-md-4\">
        <div class=\"card-header bg-gradient-primary text-white py-2 py-md-3\">
            <h5 class=\"card-title mb-0 fs-6 fs-md-5\">
                <i class=\"fas fa-hamburger me-2\"></i>Plats concernés
                <span class=\"badge bg-light text-dark ms-2\">";
            // line 611
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "promotionRecipes", [], "any", false, false, false, 611)), "html", null, true);
            yield "</span>
            </h5>
        </div>
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover mb-0 align-middle table-sm\">
                    <thead style=\"background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);\">
                        <tr>
                            <th class=\"text-white\" style=\"width: 60px\">Image</th>
                            <th class=\"text-white\">Nom</th>
                            <th class=\"text-white d-none d-md-table-cell\">Description</th>
                            <th class=\"text-white d-none d-lg-table-cell\">Catégorie</th>
                            <th class=\"text-white text-end\">Prix</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 627
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "promotionRecipes", [], "any", false, false, false, 627));
            foreach ($context['_seq'] as $context["_key"] => $context["promoRecipe"]) {
                // line 628
                yield "                            ";
                $context["recipe"] = CoreExtension::getAttribute($this->env, $this->source, $context["promoRecipe"], "recipe", [], "any", false, false, false, 628);
                // line 629
                yield "                            <tr>
                                <td>
                                    ";
                // line 631
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "image", [], "any", false, false, false, 631)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 632
                    yield "                                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images_plats/" . CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "image", [], "any", false, false, false, 632))), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "name", [], "any", false, false, false, 632), "html", null, true);
                    yield "\" class=\"rounded\" style=\"width: 35px; height: 35px; object-fit: cover;\">
                                    ";
                } else {
                    // line 634
                    yield "                                        <div class=\"bg-light rounded d-flex align-items-center justify-content-center\" style=\"width: 35px; height: 35px;\">
                                            <i class=\"fas fa-utensil-spoon fa-1x text-muted\"></i>
                                        </div>
                                    ";
                }
                // line 638
                yield "                                </td>
                                <td><strong class=\"small\">";
                // line 639
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "name", [], "any", false, false, false, 639), "html", null, true);
                yield "</strong></td>
                                <td class=\"text-muted d-none d-md-table-cell small\">";
                // line 640
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "description", [], "any", true, true, false, 640)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "description", [], "any", false, false, false, 640), "-")) : ("-")), 0, 60), "html", null, true);
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "description", [], "any", false, false, false, 640)) > 60)) {
                    yield "...";
                }
                yield "</td>
                                <td class=\"d-none d-lg-table-cell small\">";
                // line 641
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "category", [], "any", false, false, false, 641)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "category", [], "any", false, false, false, 641), "name", [], "any", false, false, false, 641), "html", null, true)) : ("-"));
                yield "</td>
                                <td class=\"text-end fw-bold text-primary small\">";
                // line 642
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, ($context["recipe"] ?? null), "sellingPrice", [], "any", false, false, false, 642), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 642), "hmaService", [], "any", false, false, false, 642)), "html", null, true);
                yield "</td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['promoRecipe'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 645
            yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>
    ";
        }
        // line 651
        yield "
    <!-- Message si aucune sélection -->
    ";
        // line 653
        if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "promotionCategoryRecipes", [], "any", false, false, false, 653)) == 0) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "promotionRecipes", [], "any", false, false, false, 653)) == 0))) {
            // line 654
            yield "    <div class=\"card shadow-sm border-0 rounded-4 mt-3 mt-md-4 bg-light\">
        <div class=\"card-body text-center py-3 py-md-5\">
            <i class=\"fas fa-globe fa-3x text-primary mb-2\"></i>
            <h5 class=\"mb-1 fs-6 fs-md-5\">Promotion globale</h5>
            <p class=\"text-muted small mb-0\">S'applique à tous les plats du menu</p>
        </div>
    </div>
    ";
        }
        // line 662
        yield "
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
                        ";
        // line 677
        $context["hasCategories"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "promotionCategoryRecipes", [], "any", false, false, false, 677)) > 0);
        // line 678
        yield "                        ";
        $context["hasRecipes"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "promotionRecipes", [], "any", false, false, false, 678)) > 0);
        // line 679
        yield "                        
                        ";
        // line 680
        if (( !($context["hasCategories"] ?? null) &&  !($context["hasRecipes"] ?? null))) {
            // line 681
            yield "                            <i class=\"fas fa-check-circle text-success me-1\"></i> <strong>Cas 1 :</strong> Promotion sur <strong class=\"text-primary\">TOUS les plats</strong>
                        ";
        } elseif ((        // line 682
($context["hasCategories"] ?? null) &&  !($context["hasRecipes"] ?? null))) {
            // line 683
            yield "                            <i class=\"fas fa-check-circle text-success me-1\"></i> <strong>Cas 2 :</strong> Promotion sur les <strong class=\"text-primary\">catégories sélectionnées</strong>
                        ";
        } elseif (( !        // line 684
($context["hasCategories"] ?? null) && ($context["hasRecipes"] ?? null))) {
            // line 685
            yield "                            <i class=\"fas fa-check-circle text-success me-1\"></i> <strong>Cas 3 :</strong> Promotion sur les <strong class=\"text-primary\">plats sélectionnés</strong>
                        ";
        } else {
            // line 687
            yield "                            <i class=\"fas fa-check-circle text-success me-1\"></i> <strong>Cas 4 :</strong> Promotion sur <strong class=\"text-primary\">l'ensemble</strong> (catégories + plats)
                        ";
        }
        // line 689
        yield "                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- ==========================================
         MODAL DE SUPPRESSION
    ========================================== -->
    <div class=\"modal fade\" id=\"deletePromotionModal\" tabindex=\"-1\" aria-hidden=\"true\">
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
        // line 712
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "name", [], "any", false, false, false, 712), 0, 30), "html", null, true);
        yield "</strong><br>
                        Toutes les associations seront supprimées.
                    </div>
                </div>
                <div class=\"modal-footer border-0 py-2\">
                    <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-bs-dismiss=\"modal\">Annuler</button>
                    <form method=\"post\" action=\"";
        // line 718
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_promotion_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "id", [], "any", false, false, false, 718)]), "html", null, true);
        yield "\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 719
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "id", [], "any", false, false, false, 719))), "html", null, true);
        yield "\">
                        <button type=\"submit\" class=\"btn btn-danger btn-sm\">Supprimer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/restaurant/promotion/show.html.twig";
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
        return array (  1019 => 719,  1015 => 718,  1006 => 712,  981 => 689,  977 => 687,  973 => 685,  971 => 684,  968 => 683,  966 => 682,  963 => 681,  961 => 680,  958 => 679,  955 => 678,  953 => 677,  936 => 662,  926 => 654,  924 => 653,  920 => 651,  912 => 645,  903 => 642,  899 => 641,  892 => 640,  888 => 639,  885 => 638,  879 => 634,  871 => 632,  869 => 631,  865 => 629,  862 => 628,  858 => 627,  839 => 611,  833 => 607,  831 => 606,  827 => 604,  819 => 598,  809 => 594,  805 => 592,  801 => 590,  795 => 588,  793 => 587,  785 => 585,  782 => 584,  778 => 582,  776 => 581,  772 => 580,  768 => 578,  762 => 574,  754 => 572,  752 => 571,  748 => 569,  745 => 568,  741 => 567,  722 => 551,  716 => 547,  714 => 546,  696 => 531,  691 => 529,  686 => 526,  680 => 522,  672 => 520,  670 => 519,  659 => 510,  655 => 508,  649 => 506,  647 => 505,  633 => 494,  619 => 483,  607 => 473,  601 => 471,  595 => 469,  593 => 468,  580 => 458,  558 => 438,  552 => 435,  548 => 433,  546 => 432,  541 => 430,  530 => 422,  526 => 421,  522 => 420,  519 => 419,  513 => 415,  507 => 412,  501 => 410,  499 => 409,  479 => 392,  474 => 389,  469 => 388,  461 => 383,  452 => 376,  445 => 375,  72 => 6,  65 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/restaurant/promotion/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\restaurant\\promotion\\show.html.twig");
    }
}
