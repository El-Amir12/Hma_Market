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

/* admin/promotion/category/show.html.twig */
class __TwigTemplate_c0d27189af41462e1207308bb7afdc05 extends Template
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
        yield "Promotion ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "name", [], "any", false, false, false, 5), "html", null, true);
        yield " - Catégorie ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 5), "html", null, true);
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
    
    .table tbody tr {
        transition: background-color 0.2s ease;
    }
    
    .table tbody tr:hover {
        background-color: rgba(4, 99, 241, 0.04);
    }
    
    .table tbody tr:hover td {
        background-color: transparent;
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
            width: 30px !important;
            height: 30px !important;
        }
        .table td .bg-light {
            width: 30px !important;
            height: 30px !important;
        }
        .table td .bg-light i {
            font-size: 0.8rem !important;
        }
        .table td code {
            font-size: 0.55rem !important;
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
        .btn-outline-secondary:hover {
            transform: none !important;
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

    // line 419
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 420
        yield "<div class=\"container-fluid px-2 px-md-4 py-2 py-md-4\">

    <!-- ==========================================
         EN-TÊTE
    ========================================== -->
    <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center mb-3 mb-md-4 flex-wrap gap-2\">
        <div class=\"w-100 w-sm-auto\">
            <a href=\"";
        // line 427
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_category_index");
        yield "\" class=\"btn btn-outline-secondary btn-sm mb-2\">
                <i class=\"fas fa-arrow-left me-1\"></i> <span class=\"d-none d-sm-inline\">Retour à la liste</span>
                <span class=\"d-inline d-sm-none\">Retour</span>
            </a>
            <h1 class=\"h2 h-md-1 fw-bold mt-1\">
                <i class=\"fas fa-tag text-primary me-2\"></i>";
        // line 432
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "name", [], "any", false, false, false, 432), 0, 20), "html", null, true);
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "name", [], "any", false, false, false, 432)) > 20)) {
            yield "...";
        }
        // line 433
        yield "                <span class=\"fs-6 text-muted mx-1 d-none d-sm-inline\">→</span>
                <span class=\"d-block d-sm-inline fs-6 fs-md-4 text-muted mt-1 mt-sm-0\">
                    <i class=\"fas fa-folder-tree text-success me-1\"></i>";
        // line 435
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 435), 0, 20), "html", null, true);
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 435)) > 20)) {
            yield "...";
        }
        // line 436
        yield "                </span>
            </h1>
        </div>
        <div class=\"d-flex gap-1 gap-sm-2 flex-wrap w-100 w-sm-auto\">
            <a href=\"";
        // line 440
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "id", [], "any", false, false, false, 440)]), "html", null, true);
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
        // line 462
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "image", [], "any", false, false, false, 462)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 463
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/promotions/" . CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "image", [], "any", false, false, false, 463))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "name", [], "any", false, false, false, 463), "html", null, true);
            yield "\" class=\"img-fluid rounded mb-3\" style=\"max-height: 150px; width: 100%; object-fit: cover;\">
                    ";
        } else {
            // line 465
            yield "                        <div class=\"bg-gradient-light rounded d-flex align-items-center justify-content-center mb-3\" style=\"height: 120px;\">
                            <i class=\"fas fa-tag fa-3x text-muted\"></i>
                        </div>
                    ";
        }
        // line 469
        yield "                    
                    <div class=\"info-card p-2 p-md-3 bg-light rounded-3 mb-2 mb-md-3\">
                        <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                            <i class=\"fas fa-layer-group text-primary me-1 me-md-2\" style=\"font-size:0.8rem;\"></i>
                            <small class=\"text-muted text-uppercase\" style=\"font-size:0.55rem;\">Type de réduction</small>
                        </div>
                        <p class=\"fw-bold fs-6 fs-md-4 mb-0\">";
        // line 475
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "typePromotion", [], "any", false, false, false, 475), "name", [], "any", false, false, false, 475), "html", null, true);
        yield "</p>
                    </div>
                    
                    <div class=\"info-card p-2 p-md-3 bg-light rounded-3 mb-2 mb-md-3\">
                        <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                            <i class=\"fas fa-percent text-primary me-1 me-md-2\" style=\"font-size:0.8rem;\"></i>
                            <small class=\"text-muted text-uppercase\" style=\"font-size:0.55rem;\">Valeur de la réduction</small>
                        </div>
                        <p class=\"fw-bold fs-4 fs-md-1 text-primary mb-0\">
                            ";
        // line 484
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "typePromotion", [], "any", false, false, false, 484), "name", [], "any", false, false, false, 484) == "Pourcentage")) {
            // line 485
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "value", [], "any", false, false, false, 485), "html", null, true);
            yield "%
                            ";
        } else {
            // line 487
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "value", [], "any", false, false, false, 487), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 487), "hmaService", [], "any", false, false, false, 487)), "html", null, true);
            yield "
                            ";
        }
        // line 489
        yield "                        </p>
                    </div>
                    
                    <div class=\"info-card p-2 p-md-3 bg-light rounded-3 mb-2 mb-md-3\">
                        <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                            <i class=\"fas fa-align-left text-primary me-1 me-md-2\" style=\"font-size:0.8rem;\"></i>
                            <small class=\"text-muted text-uppercase\" style=\"font-size:0.55rem;\">Description</small>
                        </div>
                        <p class=\"mb-0 small\" style=\"font-size:0.75rem;\">";
        // line 497
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "description", [], "any", true, true, false, 497)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "description", [], "any", false, false, false, 497), "Aucune description fournie")) : ("Aucune description fournie")), "html", null, true));
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
        // line 507
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "startDate", [], "any", false, false, false, 507), "d/m/Y"), "html", null, true);
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
        // line 517
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "endDate", [], "any", false, false, false, 517)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 518
            yield "                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "endDate", [], "any", false, false, false, 518), "d/m/Y"), "html", null, true);
            yield "
                                    ";
        } else {
            // line 520
            yield "                                        <span class=\"badge bg-info\" style=\"font-size:0.55rem;\">Sans limite</span>
                                    ";
        }
        // line 522
        yield "                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"mt-2 mt-md-3 pt-2 pt-md-3 border-top\">
                        <div class=\"d-flex flex-column flex-sm-row align-items-start align-items-sm-center gap-2\">
                            <div class=\"flex-shrink-0\">
                                <span class=\"badge ";
        // line 530
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "isActive", [], "any", false, false, false, 530)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-secondary"));
        yield " px-2 py-1 px-md-3 py-md-2\" style=\"font-size:0.6rem;\">
                                    <i class=\"fas ";
        // line 531
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "isActive", [], "any", false, false, false, 531)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-check-circle") : ("fa-ban"));
        yield " me-1\"></i>
                                    ";
        // line 532
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "isActive", [], "any", false, false, false, 532)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ACTIVE") : ("INACTIVE"));
        yield "
                                </span>
                            </div>
                            <div class=\"flex-grow-1\">
                                <small class=\"text-muted\" style=\"font-size:0.6rem;\">Créée le ";
        // line 536
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "createdAt", [], "any", false, false, false, 536), "d/m/Y à H:i"), "html", null, true);
        yield "</small>
                                ";
        // line 537
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "updatedAt", [], "any", false, false, false, 537) && (CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "updatedAt", [], "any", false, false, false, 537) != CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "createdAt", [], "any", false, false, false, 537)))) {
            // line 538
            yield "                                    <br><small class=\"text-muted\" style=\"font-size:0.6rem;\">Modifiée le ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "updatedAt", [], "any", false, false, false, 538), "d/m/Y à H:i"), "html", null, true);
            yield "</small>
                                ";
        }
        // line 540
        yield "                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Colonne droite - Informations de la catégorie -->
        <div class=\"col-12 col-lg-6\">
            <div class=\"card shadow-sm border-0 rounded-4 h-100\">
                <div class=\"card-header bg-gradient-primary text-white py-2 py-md-3\">
                    <h5 class=\"card-title mb-0 fs-6 fs-md-5\">
                        <i class=\"fas fa-folder-tree me-2\"></i>Informations de la catégorie
                    </h5>
                </div>
                <div class=\"card-body p-2 p-md-4\">
                    ";
        // line 556
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "image", [], "any", false, false, false, 556)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 557
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/categories/" . CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "image", [], "any", false, false, false, 557))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 557), "html", null, true);
            yield "\" class=\"img-fluid rounded mb-3\" style=\"max-height: 150px; width: 100%; object-fit: cover;\">
                    ";
        } else {
            // line 559
            yield "                        <div class=\"bg-gradient-light rounded d-flex align-items-center justify-content-center mb-3\" style=\"height: 120px;\">
                            <i class=\"fas fa-folder fa-3x text-muted\"></i>
                        </div>
                    ";
        }
        // line 563
        yield "                    
                    <div class=\"info-card p-2 p-md-3 bg-light rounded-3 mb-2 mb-md-3\">
                        <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                            <i class=\"fas fa-tag text-primary me-1 me-md-2\" style=\"font-size:0.8rem;\"></i>
                            <small class=\"text-muted text-uppercase\" style=\"font-size:0.55rem;\">Nom</small>
                        </div>
                        <p class=\"fw-bold fs-6 fs-md-4 mb-0\">";
        // line 569
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 569), "html", null, true);
        yield "</p>
                    </div>
                    
                    <div class=\"info-card p-2 p-md-3 bg-light rounded-3 mb-2 mb-md-3\">
                        <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                            <i class=\"fas fa-sitemap text-primary me-1 me-md-2\" style=\"font-size:0.8rem;\"></i>
                            <small class=\"text-muted text-uppercase\" style=\"font-size:0.55rem;\">Chemin complet</small>
                        </div>
                        <p class=\"fw-semibold fs-6 fs-md-5 mb-0\" style=\"font-size:0.75rem;\">";
        // line 577
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "fullPath", [], "any", false, false, false, 577), "html", null, true);
        yield "</p>
                    </div>
                    
                    <div class=\"info-card p-2 p-md-3 bg-light rounded-3 mb-2 mb-md-3\">
                        <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                            <i class=\"fas fa-align-left text-primary me-1 me-md-2\" style=\"font-size:0.8rem;\"></i>
                            <small class=\"text-muted text-uppercase\" style=\"font-size:0.55rem;\">Description</small>
                        </div>
                        <p class=\"mb-0 small\" style=\"font-size:0.75rem;\">";
        // line 585
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", true, true, false, 585)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", false, false, false, 585), "Aucune description")) : ("Aucune description")), "html", null, true));
        yield "</p>
                    </div>
                    
                    <div class=\"row g-2 g-md-3\">
                        <div class=\"col-6\">
                            <div class=\"info-card p-2 p-md-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                                    <i class=\"fas fa-layer-group text-primary me-1 me-md-2\" style=\"font-size:0.8rem;\"></i>
                                    <small class=\"text-muted text-uppercase\" style=\"font-size:0.55rem;\">Hiérarchie</small>
                                </div>
                                <p class=\"fw-semibold fs-6 fs-md-5 mb-0\">
                                    ";
        // line 596
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "parent", [], "any", false, false, false, 596)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 597
            yield "                                        <span class=\"badge bg-info\" style=\"font-size:0.55rem;\">Sous-catégorie</span>
                                    ";
        } else {
            // line 599
            yield "                                        <span class=\"badge bg-secondary\" style=\"font-size:0.55rem;\">Principale</span>
                                    ";
        }
        // line 601
        yield "                                </p>
                            </div>
                        </div>
                        <div class=\"col-6\">
                            <div class=\"info-card p-2 p-md-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                                    <i class=\"fas fa-boxes text-primary me-1 me-md-2\" style=\"font-size:0.8rem;\"></i>
                                    <small class=\"text-muted text-uppercase\" style=\"font-size:0.55rem;\">Produits</small>
                                </div>
                                <p class=\"fw-bold fs-4 fs-md-2 text-primary mb-0\">";
        // line 610
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "products", [], "any", false, false, false, 610)), "html", null, true);
        yield "</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"mt-2 mt-md-3 pt-2 pt-md-3 border-top\">
                        <div class=\"d-flex align-items-center gap-2\">
                            <div class=\"flex-shrink-0\">
                                <span class=\"badge ";
        // line 618
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "isActive", [], "any", false, false, false, 618)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-secondary"));
        yield " px-2 py-1\" style=\"font-size:0.6rem;\">
                                    <i class=\"fas ";
        // line 619
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "isActive", [], "any", false, false, false, 619)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-check-circle") : ("fa-ban"));
        yield " me-1\"></i>
                                    ";
        // line 620
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "isActive", [], "any", false, false, false, 620)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ACTIVE") : ("INACTIVE"));
        yield "
                                </span>
                            </div>
                            <div class=\"flex-grow-1\">
                                <small class=\"text-muted\" style=\"font-size:0.6rem;\">Créée par</small>
                                <p class=\"fw-bold mb-0 small\">";
        // line 625
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "user", [], "any", false, false, false, 625), "fullName", [], "any", false, false, false, 625), "html", null, true);
        yield "</p>
                                <small class=\"text-muted\" style=\"font-size:0.55rem;\">";
        // line 626
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "user", [], "any", false, false, false, 626), "email", [], "any", false, false, false, 626), "html", null, true);
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
                        Cette promotion s'applique <strong class=\"text-primary\">à tous les produits</strong> de la catégorie <strong>";
        // line 650
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 650), 0, 25), "html", null, true);
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 650)) > 25)) {
            yield "...";
        }
        yield "</strong>.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- ==========================================
         TABLEAU DES PRODUITS DE LA CATÉGORIE
    ========================================== -->
    <div class=\"card shadow-sm border-0 rounded-4 mt-3 mt-md-4\">
        <div class=\"card-header bg-gradient-primary text-white py-2 py-md-3\">
            <h5 class=\"card-title mb-0 fs-6 fs-md-5\">
                <i class=\"fas fa-boxes me-2\"></i>Produits de la catégorie
                <span class=\"badge bg-light text-dark ms-2\">";
        // line 664
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["products"] ?? null)), "html", null, true);
        yield "</span>
            </h5>
        </div>
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover mb-0 align-middle table-sm\">
                    <thead style=\"background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);\">
                        <tr>
                            <th class=\"text-white\" style=\"width: 50px\">Image</th>
                            <th class=\"text-white\">Nom</th>
                            <th class=\"text-white d-none d-md-table-cell\">Code</th>
                            <th class=\"text-white text-end\">Prix</th>
                            <th class=\"text-white text-center\" style=\"width: 60px\">Stock</th>
                            <th class=\"text-white text-center\" style=\"width: 60px\">Statut</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 681
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 682
            yield "                            <tr>
                                <td>
                                    ";
            // line 684
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 684) && (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 684) != "default-product.png"))) {
                // line 685
                yield "                                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 685))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 685), "html", null, true);
                yield "\" class=\"rounded\" style=\"width: 30px; height: 30px; object-fit: cover;\">
                                    ";
            } else {
                // line 687
                yield "                                        <div class=\"bg-light rounded d-flex align-items-center justify-content-center\" style=\"width: 30px; height: 30px;\">
                                            <i class=\"fas fa-box fa-1x text-muted\"></i>
                                        </div>
                                    ";
            }
            // line 691
            yield "                                </td>
                                <td><strong class=\"small\">";
            // line 692
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 692), 0, 15), "html", null, true);
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 692)) > 15)) {
                yield "...";
            }
            yield "</strong></td>
                                <td class=\"d-none d-md-table-cell\"><code class=\"small\" style=\"font-size:0.55rem;\">";
            // line 693
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "barcode", [], "any", false, false, false, 693), "html", null, true);
            yield "</code></td>
                                <td class=\"text-end fw-bold text-primary small\">";
            // line 694
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "salePrice", [], "any", false, false, false, 694), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 694), "hmaService", [], "any", false, false, false, 694)), "html", null, true);
            yield "</td>
                                <td class=\"text-center\">
                                    ";
            // line 696
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockQuantity", [], "any", false, false, false, 696) <= 0)) {
                // line 697
                yield "                                        <span class=\"badge bg-danger\" style=\"font-size:0.5rem;\">Rupture</span>
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 698
$context["product"], "stockQuantity", [], "any", false, false, false, 698) <= CoreExtension::getAttribute($this->env, $this->source, $context["product"], "minQuantity", [], "any", false, false, false, 698))) {
                // line 699
                yield "                                        <span class=\"badge bg-warning text-dark\" style=\"font-size:0.5rem;\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockQuantity", [], "any", false, false, false, 699), "html", null, true);
                yield "</span>
                                    ";
            } else {
                // line 701
                yield "                                        <span class=\"badge bg-success\" style=\"font-size:0.5rem;\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockQuantity", [], "any", false, false, false, 701), "html", null, true);
                yield "</span>
                                    ";
            }
            // line 703
            yield "                                </td>
                                <td class=\"text-center\">
                                    <span class=\"badge ";
            // line 705
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "isActive", [], "any", false, false, false, 705)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-secondary"));
            yield "\" style=\"font-size:0.5rem;\">
                                        ";
            // line 706
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "isActive", [], "any", false, false, false, 706)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Inactif"));
            yield "
                                    </span>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 710
        if (!$context['_iterated']) {
            // line 711
            yield "                            <tr>
                                <td colspan=\"6\" class=\"text-center py-4 py-md-5 text-muted\">
                                    <i class=\"fas fa-box fa-3x mb-3 text-muted opacity-25\"></i>
                                    <p class=\"small\">Aucun produit dans cette catégorie.</p>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 718
        yield "                    </tbody>
                </table>
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
        // line 739
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "name", [], "any", false, false, false, 739), 0, 25), "html", null, true);
        yield "</strong> ne sera plus appliquée à la catégorie <strong>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 739), 0, 25), "html", null, true);
        yield "</strong>.</p>
                </div>
                <div class=\"modal-footer border-0 py-2\">
                    <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-bs-dismiss=\"modal\">Annuler</button>
                    <form method=\"post\" action=\"";
        // line 743
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_category_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["promotionCategory"] ?? null), "id", [], "any", false, false, false, 743)]), "html", null, true);
        yield "\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 744
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete-category" . CoreExtension::getAttribute($this->env, $this->source, ($context["promotionCategory"] ?? null), "id", [], "any", false, false, false, 744))), "html", null, true);
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
        return "admin/promotion/category/show.html.twig";
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
        return array (  1020 => 744,  1016 => 743,  1007 => 739,  984 => 718,  972 => 711,  970 => 710,  961 => 706,  957 => 705,  953 => 703,  947 => 701,  941 => 699,  939 => 698,  936 => 697,  934 => 696,  929 => 694,  925 => 693,  918 => 692,  915 => 691,  909 => 687,  901 => 685,  899 => 684,  895 => 682,  890 => 681,  870 => 664,  850 => 650,  823 => 626,  819 => 625,  811 => 620,  807 => 619,  803 => 618,  792 => 610,  781 => 601,  777 => 599,  773 => 597,  771 => 596,  757 => 585,  746 => 577,  735 => 569,  727 => 563,  721 => 559,  713 => 557,  711 => 556,  693 => 540,  687 => 538,  685 => 537,  681 => 536,  674 => 532,  670 => 531,  666 => 530,  656 => 522,  652 => 520,  646 => 518,  644 => 517,  631 => 507,  618 => 497,  608 => 489,  602 => 487,  596 => 485,  594 => 484,  582 => 475,  574 => 469,  568 => 465,  560 => 463,  558 => 462,  533 => 440,  527 => 436,  522 => 435,  518 => 433,  513 => 432,  505 => 427,  496 => 420,  489 => 419,  74 => 8,  67 => 7,  53 => 5,  42 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/promotion/category/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\promotion\\category\\show.html.twig");
    }
}
