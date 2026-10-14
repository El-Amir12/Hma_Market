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

/* admin/restaurant/promotion/index.html.twig */
class __TwigTemplate_813bbff756baeaf8ad7cc3686b72fb35 extends Template
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
        yield "Promotions - Restaurant";
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

    // line 258
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 259
        yield "<div class=\"container-fluid px-2 px-md-4 py-2 py-md-3\">

    <!-- ==========================================
         EN-TÊTE
    ========================================== -->
    <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center mb-3 mb-md-4 flex-wrap gap-2\">
        <div class=\"w-100 w-sm-auto\">
            <h1 class=\"h3 mb-1\">
                <i class=\"fas fa-utensils me-2 text-primary\"></i>Promotions (Restaurant)
            </h1>
            <p class=\"text-muted mb-0 small d-none d-sm-block\">Gérez vos offres promotionnelles sur les plats</p>
            <p class=\"text-muted mb-0 small d-block d-sm-none\">Offres promotionnelles</p>
        </div>
        <div class=\"d-flex gap-1 gap-sm-2 flex-wrap w-100 w-sm-auto\">
            <div class=\"dropdown\">
                <button class=\"btn btn-outline-secondary btn-sm dropdown-toggle w-100 w-sm-auto\" type=\"button\" data-bs-toggle=\"dropdown\">
                    <i class=\"fas fa-link me-1\"></i> <span class=\"d-none d-sm-inline\">Associations</span>
                </button>
                <ul class=\"dropdown-menu\">
                    <li>
                        <a class=\"dropdown-item small\" href=\"";
        // line 279
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_promotion_category_index");
        yield "\">
                            <i class=\"fas fa-folder-tree me-2\"></i>Catégories de plats
                        </a>
                    </li>
                    <li>
                        <a class=\"dropdown-item small\" href=\"";
        // line 284
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_promotion_recipe_index");
        yield "\">
                            <i class=\"fas fa-hamburger me-2\"></i>Plats
                        </a>
                    </li>
                </ul>
            </div>
            <a href=\"";
        // line 290
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_type_promotion_index");
        yield "\" class=\"btn btn-outline-secondary btn-sm flex-grow-1 flex-sm-grow-0\">
                <i class=\"fas fa-cog me-1\"></i> <span class=\"d-none d-sm-inline\">Types promotion</span>
            </a>
            <a href=\"";
        // line 293
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_promotion_new");
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
        // line 303
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 303));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 304
            yield "        <div class=\"alert alert-success alert-dismissible fade show small\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "<button type=\"button\" class=\"btn-close btn-close-sm\" data-bs-dismiss=\"alert\"></button></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 306
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["error"], "method", false, false, false, 306));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 307
            yield "        <div class=\"alert alert-danger alert-dismissible fade show small\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "<button type=\"button\" class=\"btn-close btn-close-sm\" data-bs-dismiss=\"alert\"></button></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 309
        yield "
    <!-- ==========================================
         STATISTIQUES - 6 CARTES
    ========================================== -->
    <div class=\"card shadow-sm border-0 mb-3 mb-md-4\">
        <div class=\"card-header bg-white py-2 py-md-3 border-0\">
            <h5 class=\"mb-0 fs-6 fs-md-5\"><i class=\"fas fa-chart-pie me-2 text-primary\"></i>Statistiques selon les filtres</h5>
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
        // line 325
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalFiltered"] ?? null), "html", null, true);
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
        // line 337
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["activeFiltered"] ?? null), "html", null, true);
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
        // line 349
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["inactiveFiltered"] ?? null), "html", null, true);
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
        // line 361
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["ongoingFiltered"] ?? null), "html", null, true);
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
        // line 373
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["upcomingFiltered"] ?? null), "html", null, true);
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
        // line 385
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["endedFiltered"] ?? null), "html", null, true);
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
        // line 402
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_promotion_index");
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
        // line 420
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["search"] ?? null), "html", null, true);
        yield "\" 
                                   class=\"form-control border-start-0 filter-input\" 
                                   placeholder=\"Nom, description...\" 
                                   style=\"width:100%;\">
                        </div>
                    </div>
                    
                    <!-- Statut - 50% sur mobile, 2 sur desktop -->
                    <div class=\"col-6 col-md-2 filter-col-half\">
                        <label class=\"form-label fw-semibold filter-label\">Statut</label>
                        <select name=\"status\" class=\"form-select filter-select\">
                            <option value=\"all\" ";
        // line 431
        yield (((($context["status"] ?? null) == "all")) ? ("selected") : (""));
        yield ">Tous</option>
                            <option value=\"active\" ";
        // line 432
        yield (((($context["status"] ?? null) == "active")) ? ("selected") : (""));
        yield ">Actives</option>
                            <option value=\"inactive\" ";
        // line 433
        yield (((($context["status"] ?? null) == "inactive")) ? ("selected") : (""));
        yield ">Inactives</option>
                        </select>
                    </div>
                    
                    <!-- Période - 50% sur mobile, 2 sur desktop -->
                    <div class=\"col-6 col-md-2 filter-col-half\">
                        <label class=\"form-label fw-semibold filter-label\">Période</label>
                        <select name=\"period\" class=\"form-select filter-select\">
                            <option value=\"all\" ";
        // line 441
        yield (((($context["period"] ?? null) == "all")) ? ("selected") : (""));
        yield ">Toutes</option>
                            <option value=\"ongoing\" ";
        // line 442
        yield (((($context["period"] ?? null) == "ongoing")) ? ("selected") : (""));
        yield ">En cours</option>
                            <option value=\"upcoming\" ";
        // line 443
        yield (((($context["period"] ?? null) == "upcoming")) ? ("selected") : (""));
        yield ">À venir</option>
                            <option value=\"ended\" ";
        // line 444
        yield (((($context["period"] ?? null) == "ended")) ? ("selected") : (""));
        yield ">Terminées</option>
                        </select>
                    </div>
                    
                    <!-- Type - 50% sur mobile, 2 sur desktop -->
                    <div class=\"col-6 col-md-2 filter-col-half\">
                        <label class=\"form-label fw-semibold filter-label\">Type</label>
                        <select name=\"type\" class=\"form-select filter-select\">
                            <option value=\"0\">Tous</option>
                            ";
        // line 453
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["types"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 454
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 454), "html", null, true);
            yield "\" ";
            yield (((($context["selectedType"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 454))) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["type"], "name", [], "any", false, false, false, 454), 0, 20), "html", null, true);
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["type"], "name", [], "any", false, false, false, 454)) > 20)) {
                yield "...";
            }
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['type'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 456
        yield "                        </select>
                    </div>
                    
                    <!-- Boutons - 100% sur mobile, 2 sur desktop -->
                    <div class=\"col-12 col-md-2 filter-col\">
                        <div class=\"d-flex gap-1 gap-md-2 filter-btn-group\">
                            <a href=\"";
        // line 462
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_promotion_index");
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
         GRILLE DES PROMOTIONS - 2 CARTES SUR MOBILE
    ========================================== -->
    <div class=\"row g-2 g-md-3 g-lg-4\">
        ";
        // line 479
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["promotions"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
            // line 480
            yield "            <div class=\"col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4\">
                <div class=\"card h-100 border-0 shadow-sm hover-shadow transition-all rounded-4 overflow-hidden\">
                    ";
            // line 482
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "image", [], "any", false, false, false, 482)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 483
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/promotions/" . CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "image", [], "any", false, false, false, 483))), "html", null, true);
                yield "\" class=\"card-img-top\" style=\"height: 150px; object-fit: cover;\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "name", [], "any", false, false, false, 483), "html", null, true);
                yield "\">
                    ";
            } else {
                // line 485
                yield "                        <div class=\"bg-gradient-light d-flex align-items-center justify-content-center\" style=\"height: 150px;\">
                            <i class=\"fas fa-tag fa-4x text-muted opacity-25\"></i>
                        </div>
                    ";
            }
            // line 489
            yield "                    
                    <div class=\"card-body p-2 p-sm-3 p-md-3\">
                        <div class=\"d-flex justify-content-between align-items-start mb-1 mb-md-2\">
                            <h5 class=\"card-title fw-bold mb-0 fs-6 fs-md-5 text-dark\">";
            // line 492
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "name", [], "any", false, false, false, 492), 0, 20), "html", null, true);
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "name", [], "any", false, false, false, 492)) > 20)) {
                yield "...";
            }
            yield "</h5>
                            <span class=\"badge ";
            // line 493
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "isActive", [], "any", false, false, false, 493)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-secondary"));
            yield " px-2 py-1 ms-1 flex-shrink-0\" style=\"font-size:0.55rem;\">
                                ";
            // line 494
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "isActive", [], "any", false, false, false, 494)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Active") : ("Inactive"));
            yield "
                            </span>
                        </div>
                        <p class=\"card-text small text-muted mb-2\" style=\"font-size:0.7rem; min-height:40px;\">
                            ";
            // line 498
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "description", [], "any", true, true, false, 498)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "description", [], "any", false, false, false, 498), "Aucune description")) : ("Aucune description")), 0, 50), "html", null, true);
            yield "
                            ";
            // line 499
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "description", [], "any", false, false, false, 499)) > 50)) {
                yield "...";
            }
            // line 500
            yield "                        </p>
                        <div class=\"mb-1 mb-md-2\">
                            <strong class=\"text-dark small\" style=\"font-size:0.65rem;\">Réduction :</strong> 
                            <span class=\"badge bg-dark text-white px-2 py-1 rounded-pill\" style=\"font-size:0.65rem;\">
                                ";
            // line 504
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "typePromotion", [], "any", false, false, false, 504), "name", [], "any", false, false, false, 504) == "Pourcentage")) {
                // line 505
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "value", [], "any", false, false, false, 505), "html", null, true);
                yield "%
                                ";
            } else {
                // line 507
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "value", [], "any", false, false, false, 507), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 507), "hmaService", [], "any", false, false, false, 507)), "html", null, true);
                yield "
                                ";
            }
            // line 509
            yield "                            </span>
                        </div>
                        <div class=\"small text-muted\" style=\"font-size:0.6rem;\">
                            <i class=\"far fa-calendar-alt me-1\"></i> 
                            ";
            // line 513
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "startDate", [], "any", false, false, false, 513), "d/m/Y"), "html", null, true);
            yield "
                            ";
            // line 514
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "endDate", [], "any", false, false, false, 514)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 515
                yield "                                → ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "endDate", [], "any", false, false, false, 515), "d/m/Y"), "html", null, true);
                yield "
                            ";
            } else {
                // line 517
                yield "                                <span class=\"badge bg-info bg-opacity-10 text-info ms-1\" style=\"font-size:0.5rem;\">Sans fin</span>
                            ";
            }
            // line 519
            yield "                        </div>
                        <div class=\"mt-1 mt-md-2 small text-muted border-top pt-1 pt-md-2\" style=\"font-size:0.6rem;\">
                            <i class=\"fas fa-user-circle me-1\"></i> 
                            <span class=\"d-none d-sm-inline\">Créé par : </span>
                            <strong>";
            // line 523
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "user", [], "any", false, false, false, 523), "fullName", [], "any", false, false, false, 523), 0, 15), "html", null, true);
            yield "</strong>
                        </div>
                    </div>
                    <div class=\"card-footer bg-transparent border-0 d-flex flex-wrap justify-content-between gap-1 pt-0 pb-2 pb-md-3 px-2 px-sm-3 px-md-3\">
                        <a href=\"";
            // line 527
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_promotion_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 527)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-info flex-fill\" style=\"font-size:0.55rem; padding:0.15rem 0.2rem;\">
                            <i class=\"fas fa-eye me-1\"></i> <span class=\"d-none d-sm-inline\">Voir</span>
                        </a>
                        <a href=\"";
            // line 530
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_promotion_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 530)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary flex-fill\" style=\"font-size:0.55rem; padding:0.15rem 0.2rem;\">
                            <i class=\"fas fa-edit me-1\"></i> <span class=\"d-none d-sm-inline\">Modifier</span>
                        </a>
                        ";
            // line 533
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 534
                yield "                            <button type=\"button\" class=\"btn btn-sm btn-outline-danger flex-fill\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 534), "html", null, true);
                yield "\" style=\"font-size:0.55rem; padding:0.15rem 0.2rem;\">
                                <i class=\"fas fa-trash-alt me-1\"></i> <span class=\"d-none d-sm-inline\">Supprimer</span>
                            </button>
                        ";
            }
            // line 538
            yield "                    </div>
                </div>
            </div>

            <!-- ==========================================
                 MODAL DE SUPPRESSION
            ========================================== -->
            ";
            // line 545
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 546
                yield "            <div class=\"modal fade\" id=\"deleteModal";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 546), "html", null, true);
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
                // line 560
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "name", [], "any", false, false, false, 560), 0, 30), "html", null, true);
                yield "</strong><br>
                                Toutes les associations seront supprimées.
                            </div>
                        </div>
                        <div class=\"modal-footer border-0 py-2\">
                            <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-bs-dismiss=\"modal\">Annuler</button>
                            <form method=\"post\" action=\"";
                // line 566
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_promotion_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 566)]), "html", null, true);
                yield "\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 567
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 567))), "html", null, true);
                yield "\">
                                <button type=\"submit\" class=\"btn btn-danger btn-sm\">Supprimer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            ";
            }
            // line 575
            yield "        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 576
            yield "            <!-- Aucun résultat -->
            <div class=\"col-12\">
                <div class=\"card border-0 shadow-sm rounded-4 text-center py-4 py-md-5\">
                    <div class=\"card-body\">
                        <i class=\"fas fa-utensils fa-4x text-muted mb-3 opacity-25\"></i>
                        <h5 class=\"text-muted fs-6 fs-md-5\">Aucune promotion trouvée</h5>
                        <p class=\"text-muted small\">Modifiez vos filtres ou créez une nouvelle promotion.</p>
                        <a href=\"";
            // line 583
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_promotion_new");
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
        // line 590
        yield "    </div>

    <!-- ==========================================
         PAGINATION
    ========================================== -->
    ";
        // line 595
        if ((($context["totalPages"] ?? null) > 1)) {
            // line 596
            yield "        <nav class=\"mt-3 mt-md-4\">
            <ul class=\"pagination pagination-sm justify-content-center flex-wrap gap-1\">
                ";
            // line 598
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, ($context["totalPages"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 599
                yield "                    <li class=\"page-item ";
                yield ((($context["page"] == ($context["currentPage"] ?? null))) ? ("active") : (""));
                yield "\">
                        <a class=\"page-link\" href=\"";
                // line 600
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_promotion_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 600), "query", [], "any", false, false, false, 600), "all", [], "any", false, false, false, 600), ["page" => $context["page"]])), "html", null, true);
                yield "\" style=\"font-size:0.7rem; padding:0.25rem 0.5rem;\">
                            ";
                // line 601
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                yield "
                        </a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 605
            yield "            </ul>
        </nav>
    ";
        }
        // line 608
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/restaurant/promotion/index.html.twig";
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
        return array (  910 => 608,  905 => 605,  895 => 601,  891 => 600,  886 => 599,  882 => 598,  878 => 596,  876 => 595,  869 => 590,  856 => 583,  847 => 576,  842 => 575,  831 => 567,  827 => 566,  818 => 560,  800 => 546,  798 => 545,  789 => 538,  781 => 534,  779 => 533,  773 => 530,  767 => 527,  760 => 523,  754 => 519,  750 => 517,  744 => 515,  742 => 514,  738 => 513,  732 => 509,  726 => 507,  720 => 505,  718 => 504,  712 => 500,  708 => 499,  704 => 498,  697 => 494,  693 => 493,  686 => 492,  681 => 489,  675 => 485,  667 => 483,  665 => 482,  661 => 480,  656 => 479,  636 => 462,  628 => 456,  612 => 454,  608 => 453,  596 => 444,  592 => 443,  588 => 442,  584 => 441,  573 => 433,  569 => 432,  565 => 431,  551 => 420,  530 => 402,  510 => 385,  495 => 373,  480 => 361,  465 => 349,  450 => 337,  435 => 325,  417 => 309,  408 => 307,  403 => 306,  394 => 304,  390 => 303,  377 => 293,  371 => 290,  362 => 284,  354 => 279,  332 => 259,  325 => 258,  71 => 8,  64 => 7,  53 => 5,  42 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/restaurant/promotion/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\restaurant\\promotion\\index.html.twig");
    }
}
