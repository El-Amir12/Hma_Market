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

/* admin/promotion/product/show.html.twig */
class __TwigTemplate_38d97fb0ebe48a9f2666d227b4f2f60f extends Template
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
        yield " - Produit ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 5), "html", null, true);
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
    }
</style>
";
        yield from [];
    }

    // line 336
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 337
        yield "<div class=\"container-fluid px-2 px-md-4 py-2 py-md-4\">

    <!-- ==========================================
         EN-TÊTE
    ========================================== -->
    <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center mb-3 mb-md-4 flex-wrap gap-2\">
        <div class=\"w-100 w-sm-auto\">
            <a href=\"";
        // line 344
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_product_index");
        yield "\" class=\"btn btn-outline-secondary btn-sm mb-2\">
                <i class=\"fas fa-arrow-left me-1\"></i> <span class=\"d-none d-sm-inline\">Retour à la liste</span>
                <span class=\"d-inline d-sm-none\">Retour</span>
            </a>
            <h1 class=\"h2 h-md-1 fw-bold mt-1\">
                <i class=\"fas fa-tag text-primary me-2\"></i>";
        // line 349
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "name", [], "any", false, false, false, 349), 0, 20), "html", null, true);
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "name", [], "any", false, false, false, 349)) > 20)) {
            yield "...";
        }
        // line 350
        yield "                <span class=\"fs-6 text-muted mx-1 d-none d-sm-inline\">→</span>
                <span class=\"d-block d-sm-inline fs-6 fs-md-4 text-muted mt-1 mt-sm-0\">
                    <i class=\"fas fa-box text-info me-1\"></i>";
        // line 352
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 352), 0, 20), "html", null, true);
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 352)) > 20)) {
            yield "...";
        }
        // line 353
        yield "                </span>
            </h1>
        </div>
        <div class=\"d-flex gap-1 gap-sm-2 flex-wrap w-100 w-sm-auto\">
            <a href=\"";
        // line 357
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "id", [], "any", false, false, false, 357)]), "html", null, true);
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
        // line 379
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "image", [], "any", false, false, false, 379)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 380
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/promotions/" . CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "image", [], "any", false, false, false, 380))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "name", [], "any", false, false, false, 380), "html", null, true);
            yield "\" class=\"img-fluid rounded mb-3\" style=\"max-height: 150px; width: 100%; object-fit: cover;\">
                    ";
        } else {
            // line 382
            yield "                        <div class=\"bg-gradient-light rounded d-flex align-items-center justify-content-center mb-3\" style=\"height: 120px;\">
                            <i class=\"fas fa-tag fa-3x text-muted\"></i>
                        </div>
                    ";
        }
        // line 386
        yield "                    
                    <div class=\"info-card p-2 p-md-3 bg-light rounded-3 mb-2 mb-md-3\">
                        <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                            <i class=\"fas fa-layer-group text-primary me-1 me-md-2\" style=\"font-size:0.8rem;\"></i>
                            <small class=\"text-muted text-uppercase\" style=\"font-size:0.55rem;\">Type de réduction</small>
                        </div>
                        <p class=\"fw-bold fs-6 fs-md-4 mb-0\">";
        // line 392
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "typePromotion", [], "any", false, false, false, 392), "name", [], "any", false, false, false, 392), "html", null, true);
        yield "</p>
                    </div>
                    
                    <div class=\"info-card p-2 p-md-3 bg-light rounded-3 mb-2 mb-md-3\">
                        <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                            <i class=\"fas fa-percent text-primary me-1 me-md-2\" style=\"font-size:0.8rem;\"></i>
                            <small class=\"text-muted text-uppercase\" style=\"font-size:0.55rem;\">Valeur de la réduction</small>
                        </div>
                        <p class=\"fw-bold fs-4 fs-md-1 text-primary mb-0\">
                            ";
        // line 401
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "typePromotion", [], "any", false, false, false, 401), "name", [], "any", false, false, false, 401) == "Pourcentage")) {
            // line 402
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "value", [], "any", false, false, false, 402), "html", null, true);
            yield "%
                            ";
        } else {
            // line 404
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "value", [], "any", false, false, false, 404), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 404), "hmaService", [], "any", false, false, false, 404)), "html", null, true);
            yield "
                            ";
        }
        // line 406
        yield "                        </p>
                    </div>
                    
                    <div class=\"info-card p-2 p-md-3 bg-light rounded-3 mb-2 mb-md-3\">
                        <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                            <i class=\"fas fa-align-left text-primary me-1 me-md-2\" style=\"font-size:0.8rem;\"></i>
                            <small class=\"text-muted text-uppercase\" style=\"font-size:0.55rem;\">Description</small>
                        </div>
                        <p class=\"mb-0 small\" style=\"font-size:0.75rem;\">";
        // line 414
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "description", [], "any", true, true, false, 414)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "description", [], "any", false, false, false, 414), "Aucune description fournie")) : ("Aucune description fournie")), "html", null, true));
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
        // line 424
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "startDate", [], "any", false, false, false, 424), "d/m/Y"), "html", null, true);
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
        // line 434
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "endDate", [], "any", false, false, false, 434)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 435
            yield "                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "endDate", [], "any", false, false, false, 435), "d/m/Y"), "html", null, true);
            yield "
                                    ";
        } else {
            // line 437
            yield "                                        <span class=\"badge bg-info\" style=\"font-size:0.55rem;\">Sans limite</span>
                                    ";
        }
        // line 439
        yield "                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"mt-2 mt-md-3 pt-2 pt-md-3 border-top\">
                        <div class=\"d-flex flex-column flex-sm-row align-items-start align-items-sm-center gap-2\">
                            <div class=\"flex-shrink-0\">
                                <span class=\"badge ";
        // line 447
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "isActive", [], "any", false, false, false, 447)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-secondary"));
        yield " px-2 py-1 px-md-3 py-md-2\" style=\"font-size:0.6rem;\">
                                    <i class=\"fas ";
        // line 448
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "isActive", [], "any", false, false, false, 448)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-check-circle") : ("fa-ban"));
        yield " me-1\"></i>
                                    ";
        // line 449
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "isActive", [], "any", false, false, false, 449)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ACTIVE") : ("INACTIVE"));
        yield "
                                </span>
                            </div>
                            <div class=\"flex-grow-1\">
                                <small class=\"text-muted\" style=\"font-size:0.6rem;\">Créée le ";
        // line 453
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "createdAt", [], "any", false, false, false, 453), "d/m/Y à H:i"), "html", null, true);
        yield "</small>
                                ";
        // line 454
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "updatedAt", [], "any", false, false, false, 454) && (CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "updatedAt", [], "any", false, false, false, 454) != CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "createdAt", [], "any", false, false, false, 454)))) {
            // line 455
            yield "                                    <br><small class=\"text-muted\" style=\"font-size:0.6rem;\">Modifiée le ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "updatedAt", [], "any", false, false, false, 455), "d/m/Y à H:i"), "html", null, true);
            yield "</small>
                                ";
        }
        // line 457
        yield "                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Colonne droite - Informations du produit -->
        <div class=\"col-12 col-lg-6\">
            <div class=\"card shadow-sm border-0 rounded-4 h-100\">
                <div class=\"card-header bg-gradient-primary text-white py-2 py-md-3\">
                    <h5 class=\"card-title mb-0 fs-6 fs-md-5\">
                        <i class=\"fas fa-box me-2\"></i>Informations du produit
                    </h5>
                </div>
                <div class=\"card-body p-2 p-md-4\">
                    ";
        // line 473
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, false, 473) && (CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, false, 473) != "default-product.png"))) {
            // line 474
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, false, 474))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 474), "html", null, true);
            yield "\" class=\"img-fluid rounded mb-3\" style=\"max-height: 150px; width: 100%; object-fit: cover;\">
                    ";
        } else {
            // line 476
            yield "                        <div class=\"bg-gradient-light rounded d-flex align-items-center justify-content-center mb-3\" style=\"height: 120px;\">
                            <i class=\"fas fa-box fa-3x text-muted\"></i>
                        </div>
                    ";
        }
        // line 480
        yield "                    
                    <div class=\"info-card p-2 p-md-3 bg-light rounded-3 mb-2 mb-md-3\">
                        <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                            <i class=\"fas fa-tag text-primary me-1 me-md-2\" style=\"font-size:0.8rem;\"></i>
                            <small class=\"text-muted text-uppercase\" style=\"font-size:0.55rem;\">Nom</small>
                        </div>
                        <p class=\"fw-bold fs-6 fs-md-4 mb-0\">";
        // line 486
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 486), "html", null, true);
        yield "</p>
                    </div>
                    
                    <div class=\"info-card p-2 p-md-3 bg-light rounded-3 mb-2 mb-md-3\">
                        <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                            <i class=\"fas fa-barcode text-primary me-1 me-md-2\" style=\"font-size:0.8rem;\"></i>
                            <small class=\"text-muted text-uppercase\" style=\"font-size:0.55rem;\">Code-barres</small>
                        </div>
                        <p class=\"fw-bold fs-6 fs-md-5 mb-0\"><code class=\"small\" style=\"font-size:0.75rem;\">";
        // line 494
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "barcode", [], "any", false, false, false, 494), "html", null, true);
        yield "</code></p>
                    </div>
                    
                    <div class=\"row g-2 g-md-3\">
                        <div class=\"col-6\">
                            <div class=\"info-card p-2 p-md-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                                    <i class=\"fas fa-folder-tree text-primary me-1 me-md-2\" style=\"font-size:0.8rem;\"></i>
                                    <small class=\"text-muted text-uppercase\" style=\"font-size:0.55rem;\">Catégorie</small>
                                </div>
                                <p class=\"fw-semibold fs-6 fs-md-5 mb-0\">";
        // line 504
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "category", [], "any", false, false, false, 504)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "category", [], "any", false, false, false, 504), "name", [], "any", false, false, false, 504), "html", null, true)) : ("-"));
        yield "</p>
                            </div>
                        </div>
                        <div class=\"col-6\">
                            <div class=\"info-card p-2 p-md-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                                    <i class=\"fas fa-weight-hanging text-primary me-1 me-md-2\" style=\"font-size:0.8rem;\"></i>
                                    <small class=\"text-muted text-uppercase\" style=\"font-size:0.55rem;\">Unité</small>
                                </div>
                                <p class=\"fw-semibold fs-6 fs-md-5 mb-0\">";
        // line 513
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 513)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", false, false, false, 513), "Pièce")) : ("Pièce")), "html", null, true);
        yield "</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"row g-2 g-md-3 mt-2 mt-md-3\">
                        <div class=\"col-6\">
                            <div class=\"info-card p-2 p-md-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                                    <i class=\"fas fa-arrow-down text-success me-1 me-md-2\" style=\"font-size:0.8rem;\"></i>
                                    <small class=\"text-muted text-uppercase\" style=\"font-size:0.55rem;\">Prix d'achat</small>
                                </div>
                                <p class=\"fw-bold fs-5 fs-md-4 text-success mb-0\">";
        // line 525
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "purchasePrice", [], "any", false, false, false, 525), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 525), "hmaService", [], "any", false, false, false, 525)), "html", null, true);
        yield "</p>
                            </div>
                        </div>
                        <div class=\"col-6\">
                            <div class=\"info-card p-2 p-md-3 bg-light rounded-3\">
                                <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                                    <i class=\"fas fa-arrow-up text-primary me-1 me-md-2\" style=\"font-size:0.8rem;\"></i>
                                    <small class=\"text-muted text-uppercase\" style=\"font-size:0.55rem;\">Prix de vente</small>
                                </div>
                                <p class=\"fw-bold fs-5 fs-md-4 text-primary mb-0\">";
        // line 534
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "salePrice", [], "any", false, false, false, 534), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 534), "hmaService", [], "any", false, false, false, 534)), "html", null, true);
        yield "</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"info-card p-2 p-md-3 bg-light rounded-3 mt-2 mt-md-3\">
                        <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                            <i class=\"fas fa-chart-line text-primary me-1 me-md-2\" style=\"font-size:0.8rem;\"></i>
                            <small class=\"text-muted text-uppercase\" style=\"font-size:0.55rem;\">Marge</small>
                        </div>
                        <p class=\"fw-bold fs-6 fs-md-5 mb-0\">
                            ";
        // line 545
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "margin", [], "any", false, false, false, 545), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 545), "hmaService", [], "any", false, false, false, 545)), "html", null, true);
        yield "
                            <span class=\"badge ";
        // line 546
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "marginPercentage", [], "any", false, false, false, 546) >= 50)) ? ("bg-success") : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "marginPercentage", [], "any", false, false, false, 546) >= 20)) ? ("bg-warning text-dark") : ("bg-danger"))));
        yield " ms-1 ms-md-2\" style=\"font-size:0.6rem;\">
                                ";
        // line 547
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "marginPercentage", [], "any", false, false, false, 547), 1), "html", null, true);
        yield "%
                            </span>
                        </p>
                    </div>
                    
                    <div class=\"info-card p-2 p-md-3 bg-light rounded-3 mt-2 mt-md-3\">
                        <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                            <i class=\"fas fa-boxes text-primary me-1 me-md-2\" style=\"font-size:0.8rem;\"></i>
                            <small class=\"text-muted text-uppercase\" style=\"font-size:0.55rem;\">Stock</small>
                        </div>
                        <p class=\"fw-bold fs-6 fs-md-5 mb-0\">
                            ";
        // line 558
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "stockQuantity", [], "any", false, false, false, 558) <= 0)) {
            // line 559
            yield "                                <span class=\"badge bg-danger\" style=\"font-size:0.55rem;\">Rupture de stock</span>
                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 560
($context["product"] ?? null), "stockQuantity", [], "any", false, false, false, 560) <= CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "minQuantity", [], "any", false, false, false, 560))) {
            // line 561
            yield "                                <span class=\"badge bg-warning text-dark\" style=\"font-size:0.55rem;\">Stock faible (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "stockQuantity", [], "any", false, false, false, 561), "html", null, true);
            yield ")</span>
                            ";
        } else {
            // line 563
            yield "                                <span class=\"badge bg-success\" style=\"font-size:0.55rem;\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "stockQuantity", [], "any", false, false, false, 563), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 563)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", false, false, false, 563), "unités")) : ("unités")), "html", null, true);
            yield "</span>
                            ";
        }
        // line 565
        yield "                        </p>
                    </div>
                    
                    <div class=\"mt-2 mt-md-3 pt-2 pt-md-3 border-top\">
                        <div class=\"d-flex align-items-center gap-2\">
                            <div class=\"flex-shrink-0\">
                                ";
        // line 571
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "user", [], "any", false, false, false, 571), "photo", [], "any", false, false, false, 571)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 572
            yield "                                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "user", [], "any", false, false, false, 572), "photo", [], "any", false, false, false, 572))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "user", [], "any", false, false, false, 572), "fullName", [], "any", false, false, false, 572), "html", null, true);
            yield "\" class=\"rounded-circle\" width=\"40\" height=\"40\" style=\"object-fit: cover;\">
                                ";
        } else {
            // line 574
            yield "                                    <div class=\"bg-secondary rounded-circle d-flex align-items-center justify-content-center\" style=\"width: 40px; height: 40px;\">
                                        <i class=\"fas fa-user fa-1x text-white\"></i>
                                    </div>
                                ";
        }
        // line 578
        yield "                            </div>
                            <div class=\"flex-grow-1 ms-2 ms-md-3\">
                                <small class=\"text-muted\" style=\"font-size:0.6rem;\">Créé par</small>
                                <p class=\"fw-bold mb-0 small\">";
        // line 581
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "user", [], "any", false, false, false, 581), "fullName", [], "any", false, false, false, 581), "html", null, true);
        yield "</p>
                                <small class=\"text-muted\" style=\"font-size:0.55rem;\">";
        // line 582
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "user", [], "any", false, false, false, 582), "email", [], "any", false, false, false, 582), "html", null, true);
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
                        Cette promotion s'applique <strong class=\"text-primary\">uniquement au produit</strong> <strong>";
        // line 606
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 606), 0, 25), "html", null, true);
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 606)) > 25)) {
            yield "...";
        }
        yield "</strong>.
                    </p>
                </div>
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
        // line 628
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["promotion"] ?? null), "name", [], "any", false, false, false, 628), 0, 25), "html", null, true);
        yield "</strong> ne sera plus appliquée au produit <strong>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 628), 0, 25), "html", null, true);
        yield "</strong>.</p>
                </div>
                <div class=\"modal-footer border-0 py-2\">
                    <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-bs-dismiss=\"modal\">Annuler</button>
                    <form method=\"post\" action=\"";
        // line 632
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_product_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["promotionProduct"] ?? null), "id", [], "any", false, false, false, 632)]), "html", null, true);
        yield "\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 633
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete-product" . CoreExtension::getAttribute($this->env, $this->source, ($context["promotionProduct"] ?? null), "id", [], "any", false, false, false, 633))), "html", null, true);
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
        return "admin/promotion/product/show.html.twig";
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
        return array (  873 => 633,  869 => 632,  860 => 628,  832 => 606,  805 => 582,  801 => 581,  796 => 578,  790 => 574,  782 => 572,  780 => 571,  772 => 565,  764 => 563,  758 => 561,  756 => 560,  753 => 559,  751 => 558,  737 => 547,  733 => 546,  729 => 545,  715 => 534,  703 => 525,  688 => 513,  676 => 504,  663 => 494,  652 => 486,  644 => 480,  638 => 476,  630 => 474,  628 => 473,  610 => 457,  604 => 455,  602 => 454,  598 => 453,  591 => 449,  587 => 448,  583 => 447,  573 => 439,  569 => 437,  563 => 435,  561 => 434,  548 => 424,  535 => 414,  525 => 406,  519 => 404,  513 => 402,  511 => 401,  499 => 392,  491 => 386,  485 => 382,  477 => 380,  475 => 379,  450 => 357,  444 => 353,  439 => 352,  435 => 350,  430 => 349,  422 => 344,  413 => 337,  406 => 336,  74 => 8,  67 => 7,  53 => 5,  42 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/promotion/product/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\promotion\\product\\show.html.twig");
    }
}
