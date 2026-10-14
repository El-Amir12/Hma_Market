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

/* admin/promotion/index.html.twig */
class __TwigTemplate_8112756421fd2695fa17f050cf35c30b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/promotion/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/promotion/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        yield "Promotions - HMA Market";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 250
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

        // line 251
        yield "<div class=\"container-fluid px-2 px-md-4 py-2 py-md-3\">

    <!-- ==========================================
         EN-TÊTE
    ========================================== -->
    <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center mb-3 mb-md-4 flex-wrap gap-2\">
        <div class=\"w-100 w-sm-auto\">
            <h1 class=\"h3 mb-1\">
                <i class=\"fas fa-tags me-2 text-primary\"></i>Promotions
            </h1>
            <p class=\"text-muted mb-0 small d-none d-sm-block\">Gérez vos offres promotionnelles</p>
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
        // line 271
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_category_index");
        yield "\">
                            <i class=\"fas fa-folder-tree me-2\"></i>Catégories
                        </a>
                    </li>
                    <li>
                        <a class=\"dropdown-item small\" href=\"";
        // line 276
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_product_index");
        yield "\">
                            <i class=\"fas fa-boxes me-2\"></i>Produits
                        </a>
                    </li>
                </ul>
            </div>
            <a href=\"";
        // line 282
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_type_promotion_index");
        yield "\" class=\"btn btn-outline-secondary btn-sm flex-grow-1 flex-sm-grow-0\">
                <i class=\"fas fa-cog me-1\"></i> <span class=\"d-none d-sm-inline\">Types promotion</span>
            </a>
            <a href=\"";
        // line 285
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_new");
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
        // line 295
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 295, $this->source); })()), "flashes", ["success"], "method", false, false, false, 295));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 296
            yield "        <div class=\"alert alert-success alert-dismissible fade show small\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "<button type=\"button\" class=\"btn-close btn-close-sm\" data-bs-dismiss=\"alert\"></button></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 298
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 298, $this->source); })()), "flashes", ["error"], "method", false, false, false, 298));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 299
            yield "        <div class=\"alert alert-danger alert-dismissible fade show small\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "<button type=\"button\" class=\"btn-close btn-close-sm\" data-bs-dismiss=\"alert\"></button></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 301
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
        // line 317
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalFiltered"]) || array_key_exists("totalFiltered", $context) ? $context["totalFiltered"] : (function () { throw new RuntimeError('Variable "totalFiltered" does not exist.', 317, $this->source); })()), "html", null, true);
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
        // line 329
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activeFiltered"]) || array_key_exists("activeFiltered", $context) ? $context["activeFiltered"] : (function () { throw new RuntimeError('Variable "activeFiltered" does not exist.', 329, $this->source); })()), "html", null, true);
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
        // line 341
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["inactiveFiltered"]) || array_key_exists("inactiveFiltered", $context) ? $context["inactiveFiltered"] : (function () { throw new RuntimeError('Variable "inactiveFiltered" does not exist.', 341, $this->source); })()), "html", null, true);
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
        // line 353
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["ongoingFiltered"]) || array_key_exists("ongoingFiltered", $context) ? $context["ongoingFiltered"] : (function () { throw new RuntimeError('Variable "ongoingFiltered" does not exist.', 353, $this->source); })()), "html", null, true);
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
        // line 365
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["upcomingFiltered"]) || array_key_exists("upcomingFiltered", $context) ? $context["upcomingFiltered"] : (function () { throw new RuntimeError('Variable "upcomingFiltered" does not exist.', 365, $this->source); })()), "html", null, true);
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
        // line 377
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["endedFiltered"]) || array_key_exists("endedFiltered", $context) ? $context["endedFiltered"] : (function () { throw new RuntimeError('Variable "endedFiltered" does not exist.', 377, $this->source); })()), "html", null, true);
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
         FILTRES - 4 CHAMPS SUR UNE LIGNE (3,3,3,3)
    ========================================== -->
    <div class=\"card shadow-sm border-0 mb-3 mb-md-4\">
        <div class=\"card-header bg-white py-2 py-md-3 border-0 d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <h5 class=\"mb-0 fs-6 fs-md-5\"><i class=\"fas fa-filter me-2 text-primary\"></i>Filtres</h5>
            <div class=\"d-flex gap-1 gap-md-2\">
                <a href=\"";
        // line 394
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_index");
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
                    <!-- Recherche - 100% sur mobile, 3 sur desktop -->
                    <div class=\"col-12 col-md-3 filter-col\">
                        <label class=\"form-label fw-semibold filter-label\">Recherche</label>
                        <div class=\"input-group\">
                            <span class=\"input-group-text bg-white border-end-0\" style=\"padding:0.2rem 0.4rem;\">
                                <i class=\"fas fa-search text-muted\" style=\"font-size:0.7rem;\"></i>
                            </span>
                            <input type=\"text\" name=\"search\" value=\"";
        // line 412
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 412, $this->source); })()), "html", null, true);
        yield "\" 
                                   class=\"form-control border-start-0 filter-input\" 
                                   placeholder=\"Nom, description...\" 
                                   style=\"width:100%;\">
                        </div>
                    </div>
                    
                    <!-- Statut - 50% sur mobile, 3 sur desktop -->
                    <div class=\"col-6 col-md-3 filter-col-half\">
                        <label class=\"form-label fw-semibold filter-label\">Statut</label>
                        <select name=\"status\" class=\"form-select filter-select\">
                            <option value=\"all\" ";
        // line 423
        yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 423, $this->source); })()) == "all")) ? ("selected") : (""));
        yield ">Tous</option>
                            <option value=\"active\" ";
        // line 424
        yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 424, $this->source); })()) == "active")) ? ("selected") : (""));
        yield ">Actives</option>
                            <option value=\"inactive\" ";
        // line 425
        yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 425, $this->source); })()) == "inactive")) ? ("selected") : (""));
        yield ">Inactives</option>
                        </select>
                    </div>
                    
                    <!-- Période - 50% sur mobile, 3 sur desktop -->
                    <div class=\"col-6 col-md-3 filter-col-half\">
                        <label class=\"form-label fw-semibold filter-label\">Période</label>
                        <select name=\"period\" class=\"form-select filter-select\">
                            <option value=\"all\" ";
        // line 433
        yield ((((isset($context["period"]) || array_key_exists("period", $context) ? $context["period"] : (function () { throw new RuntimeError('Variable "period" does not exist.', 433, $this->source); })()) == "all")) ? ("selected") : (""));
        yield ">Toutes</option>
                            <option value=\"ongoing\" ";
        // line 434
        yield ((((isset($context["period"]) || array_key_exists("period", $context) ? $context["period"] : (function () { throw new RuntimeError('Variable "period" does not exist.', 434, $this->source); })()) == "ongoing")) ? ("selected") : (""));
        yield ">En cours</option>
                            <option value=\"upcoming\" ";
        // line 435
        yield ((((isset($context["period"]) || array_key_exists("period", $context) ? $context["period"] : (function () { throw new RuntimeError('Variable "period" does not exist.', 435, $this->source); })()) == "upcoming")) ? ("selected") : (""));
        yield ">À venir</option>
                            <option value=\"ended\" ";
        // line 436
        yield ((((isset($context["period"]) || array_key_exists("period", $context) ? $context["period"] : (function () { throw new RuntimeError('Variable "period" does not exist.', 436, $this->source); })()) == "ended")) ? ("selected") : (""));
        yield ">Terminées</option>
                        </select>
                    </div>
                    
                    <!-- Type - 50% sur mobile, 3 sur desktop -->
                    <div class=\"col-6 col-md-3 filter-col-half\">
                        <label class=\"form-label fw-semibold filter-label\">Type</label>
                        <select name=\"type\" class=\"form-select filter-select\">
                            <option value=\"0\">Tous</option>
                            ";
        // line 445
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 445, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 446
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 446), "html", null, true);
            yield "\" ";
            yield ((((isset($context["selectedType"]) || array_key_exists("selectedType", $context) ? $context["selectedType"] : (function () { throw new RuntimeError('Variable "selectedType" does not exist.', 446, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 446))) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "name", [], "any", false, false, false, 446), "html", null, true);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['type'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 448
        yield "                        </select>
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
        // line 459
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 459, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
            // line 460
            yield "            <div class=\"col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4\">
                <div class=\"card h-100 border-0 shadow-sm hover-shadow transition-all rounded-4 overflow-hidden\">
                    ";
            // line 462
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "image", [], "any", false, false, false, 462)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 463
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/promotions/" . CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "image", [], "any", false, false, false, 463))), "html", null, true);
                yield "\" class=\"card-img-top\" style=\"height: 150px; object-fit: cover;\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "name", [], "any", false, false, false, 463), "html", null, true);
                yield "\">
                    ";
            } else {
                // line 465
                yield "                        <div class=\"bg-gradient-light d-flex align-items-center justify-content-center\" style=\"height: 150px;\">
                            <i class=\"fas fa-tag fa-4x text-muted opacity-25\"></i>
                        </div>
                    ";
            }
            // line 469
            yield "                    
                    <div class=\"card-body p-2 p-sm-3 p-md-3\">
                        <div class=\"d-flex justify-content-between align-items-start mb-1 mb-md-2\">
                            <h5 class=\"card-title fw-bold mb-0 fs-6 fs-md-5 text-dark\">";
            // line 472
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "name", [], "any", false, false, false, 472), 0, 20), "html", null, true);
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "name", [], "any", false, false, false, 472)) > 20)) {
                yield "...";
            }
            yield "</h5>
                            <span class=\"badge ";
            // line 473
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "isActive", [], "any", false, false, false, 473)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-secondary"));
            yield " px-2 py-1 ms-1 flex-shrink-0\" style=\"font-size:0.55rem;\">
                                ";
            // line 474
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "isActive", [], "any", false, false, false, 474)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Active") : ("Inactive"));
            yield "
                            </span>
                        </div>
                        <p class=\"card-text small text-muted mb-2\" style=\"font-size:0.7rem; min-height:40px;\">
                            ";
            // line 478
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "description", [], "any", true, true, false, 478)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "description", [], "any", false, false, false, 478), "Aucune description")) : ("Aucune description")), 0, 50), "html", null, true);
            yield "
                            ";
            // line 479
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "description", [], "any", false, false, false, 479)) > 50)) {
                yield "...";
            }
            // line 480
            yield "                        </p>
                        <div class=\"mb-1 mb-md-2\">
                            <strong class=\"text-dark small\" style=\"font-size:0.65rem;\">Réduction :</strong> 
                            <span class=\"badge bg-dark text-white px-2 py-1 rounded-pill\" style=\"font-size:0.65rem;\">
                                ";
            // line 484
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "typePromotion", [], "any", false, false, false, 484), "name", [], "any", false, false, false, 484) == "Pourcentage")) {
                // line 485
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "value", [], "any", false, false, false, 485), "html", null, true);
                yield "%
                                ";
            } else {
                // line 487
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "value", [], "any", false, false, false, 487), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 487, $this->source); })()), "user", [], "any", false, false, false, 487), "hmaService", [], "any", false, false, false, 487)), "html", null, true);
                yield "
                                ";
            }
            // line 489
            yield "                            </span>
                        </div>
                        <div class=\"small text-muted\" style=\"font-size:0.6rem;\">
                            <i class=\"far fa-calendar-alt me-1\"></i> 
                            ";
            // line 493
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "startDate", [], "any", false, false, false, 493), "d/m/Y"), "html", null, true);
            yield "
                            ";
            // line 494
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "endDate", [], "any", false, false, false, 494)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 495
                yield "                                → ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "endDate", [], "any", false, false, false, 495), "d/m/Y"), "html", null, true);
                yield "
                            ";
            } else {
                // line 497
                yield "                                <span class=\"badge bg-info bg-opacity-10 text-info ms-1\" style=\"font-size:0.5rem;\">Sans fin</span>
                            ";
            }
            // line 499
            yield "                        </div>
                        <div class=\"mt-1 mt-md-2 small text-muted border-top pt-1 pt-md-2\" style=\"font-size:0.6rem;\">
                            <i class=\"fas fa-user-circle me-1\"></i> 
                            <span class=\"d-none d-sm-inline\">Créé par : </span>
                            <strong>";
            // line 503
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "user", [], "any", false, false, false, 503), "fullName", [], "any", false, false, false, 503), 0, 15), "html", null, true);
            yield "</strong>
                        </div>
                    </div>
                    <div class=\"card-footer bg-transparent border-0 d-flex flex-wrap justify-content-between gap-1 pt-0 pb-2 pb-md-3 px-2 px-sm-3 px-md-3\">
                        <a href=\"";
            // line 507
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 507)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-info flex-fill\" style=\"font-size:0.55rem; padding:0.15rem 0.2rem;\">
                            <i class=\"fas fa-eye me-1\"></i> <span class=\"d-none d-sm-inline\">Voir</span>
                        </a>
                        <a href=\"";
            // line 510
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 510)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary flex-fill\" style=\"font-size:0.55rem; padding:0.15rem 0.2rem;\">
                            <i class=\"fas fa-edit me-1\"></i> <span class=\"d-none d-sm-inline\">Modifier</span>
                        </a>
                        ";
            // line 513
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 514
                yield "                            <button type=\"button\" class=\"btn btn-sm btn-outline-danger flex-fill\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 514), "html", null, true);
                yield "\" style=\"font-size:0.55rem; padding:0.15rem 0.2rem;\">
                                <i class=\"fas fa-trash-alt me-1\"></i> <span class=\"d-none d-sm-inline\">Supprimer</span>
                            </button>
                        ";
            }
            // line 518
            yield "                    </div>
                </div>
            </div>

            <!-- ==========================================
                 MODAL DE SUPPRESSION
            ========================================== -->
            ";
            // line 525
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 526
                yield "            <div class=\"modal fade\" id=\"deleteModal";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 526), "html", null, true);
                yield "\" tabindex=\"-1\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-dialog-centered modal-sm\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header border-0\">
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
                // line 540
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "name", [], "any", false, false, false, 540), 0, 30), "html", null, true);
                yield "</strong><br>
                                Toutes les associations seront supprimées.
                            </div>
                        </div>
                        <div class=\"modal-footer border-0 py-2\">
                            <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-bs-dismiss=\"modal\">Annuler</button>
                            <form method=\"post\" action=\"";
                // line 546
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 546)]), "html", null, true);
                yield "\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 547
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 547))), "html", null, true);
                yield "\">
                                <button type=\"submit\" class=\"btn btn-danger btn-sm\">Supprimer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            ";
            }
            // line 555
            yield "        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 556
            yield "            <!-- Aucun résultat -->
            <div class=\"col-12\">
                <div class=\"card border-0 shadow-sm rounded-4 text-center py-4 py-md-5\">
                    <div class=\"card-body\">
                        <i class=\"fas fa-tags fa-4x text-muted mb-3 opacity-25\"></i>
                        <h5 class=\"text-muted fs-6 fs-md-5\">Aucune promotion trouvée</h5>
                        <p class=\"text-muted small\">Modifiez vos filtres ou créez une nouvelle promotion.</p>
                        <a href=\"";
            // line 563
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_new");
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
        // line 570
        yield "    </div>

    <!-- ==========================================
         PAGINATION
    ========================================== -->
    ";
        // line 575
        if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 575, $this->source); })()) > 1)) {
            // line 576
            yield "        <nav class=\"mt-3 mt-md-4\">
            <ul class=\"pagination pagination-sm justify-content-center flex-wrap gap-1\">
                ";
            // line 578
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 578, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 579
                yield "                    <li class=\"page-item ";
                yield ((($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 579, $this->source); })()))) ? ("active") : (""));
                yield "\">
                        <a class=\"page-link\" href=\"";
                // line 580
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 580, $this->source); })()), "request", [], "any", false, false, false, 580), "query", [], "any", false, false, false, 580), "all", [], "any", false, false, false, 580), ["page" => $context["page"]])), "html", null, true);
                yield "\" style=\"font-size:0.7rem; padding:0.25rem 0.5rem;\">
                            ";
                // line 581
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                yield "
                        </a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 585
            yield "            </ul>
        </nav>
    ";
        }
        // line 588
        yield "</div>
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
        return "admin/promotion/index.html.twig";
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
        return array (  928 => 588,  923 => 585,  913 => 581,  909 => 580,  904 => 579,  900 => 578,  896 => 576,  894 => 575,  887 => 570,  874 => 563,  865 => 556,  860 => 555,  849 => 547,  845 => 546,  836 => 540,  818 => 526,  816 => 525,  807 => 518,  799 => 514,  797 => 513,  791 => 510,  785 => 507,  778 => 503,  772 => 499,  768 => 497,  762 => 495,  760 => 494,  756 => 493,  750 => 489,  744 => 487,  738 => 485,  736 => 484,  730 => 480,  726 => 479,  722 => 478,  715 => 474,  711 => 473,  704 => 472,  699 => 469,  693 => 465,  685 => 463,  683 => 462,  679 => 460,  674 => 459,  661 => 448,  648 => 446,  644 => 445,  632 => 436,  628 => 435,  624 => 434,  620 => 433,  609 => 425,  605 => 424,  601 => 423,  587 => 412,  566 => 394,  546 => 377,  531 => 365,  516 => 353,  501 => 341,  486 => 329,  471 => 317,  453 => 301,  444 => 299,  439 => 298,  430 => 296,  426 => 295,  413 => 285,  407 => 282,  398 => 276,  390 => 271,  368 => 251,  355 => 250,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Promotions - HMA Market{% endblock %}

{% block stylesheets %}
{{ parent() }}
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
{% endblock %}

{% block body %}
<div class=\"container-fluid px-2 px-md-4 py-2 py-md-3\">

    <!-- ==========================================
         EN-TÊTE
    ========================================== -->
    <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center mb-3 mb-md-4 flex-wrap gap-2\">
        <div class=\"w-100 w-sm-auto\">
            <h1 class=\"h3 mb-1\">
                <i class=\"fas fa-tags me-2 text-primary\"></i>Promotions
            </h1>
            <p class=\"text-muted mb-0 small d-none d-sm-block\">Gérez vos offres promotionnelles</p>
            <p class=\"text-muted mb-0 small d-block d-sm-none\">Offres promotionnelles</p>
        </div>
        <div class=\"d-flex gap-1 gap-sm-2 flex-wrap w-100 w-sm-auto\">
            <div class=\"dropdown\">
                <button class=\"btn btn-outline-secondary btn-sm dropdown-toggle w-100 w-sm-auto\" type=\"button\" data-bs-toggle=\"dropdown\">
                    <i class=\"fas fa-link me-1\"></i> <span class=\"d-none d-sm-inline\">Associations</span>
                </button>
                <ul class=\"dropdown-menu\">
                    <li>
                        <a class=\"dropdown-item small\" href=\"{{ path('app_admin_promotion_category_index') }}\">
                            <i class=\"fas fa-folder-tree me-2\"></i>Catégories
                        </a>
                    </li>
                    <li>
                        <a class=\"dropdown-item small\" href=\"{{ path('app_admin_promotion_product_index') }}\">
                            <i class=\"fas fa-boxes me-2\"></i>Produits
                        </a>
                    </li>
                </ul>
            </div>
            <a href=\"{{ path('app_admin_type_promotion_index') }}\" class=\"btn btn-outline-secondary btn-sm flex-grow-1 flex-sm-grow-0\">
                <i class=\"fas fa-cog me-1\"></i> <span class=\"d-none d-sm-inline\">Types promotion</span>
            </a>
            <a href=\"{{ path('app_admin_promotion_new') }}\" class=\"btn btn-primary btn-sm flex-grow-1 flex-sm-grow-0\">
                <i class=\"fas fa-plus-circle me-1\"></i> <span class=\"d-none d-sm-inline\">Nouvelle promotion</span>
                <span class=\"d-inline d-sm-none\">Nouvelle</span>
            </a>
        </div>
    </div>

    <!-- ==========================================
         FLASH MESSAGES
    ========================================== -->
    {% for message in app.flashes('success') %}
        <div class=\"alert alert-success alert-dismissible fade show small\">{{ message }}<button type=\"button\" class=\"btn-close btn-close-sm\" data-bs-dismiss=\"alert\"></button></div>
    {% endfor %}
    {% for message in app.flashes('error') %}
        <div class=\"alert alert-danger alert-dismissible fade show small\">{{ message }}<button type=\"button\" class=\"btn-close btn-close-sm\" data-bs-dismiss=\"alert\"></button></div>
    {% endfor %}

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
                                <h3 class=\"mb-0 fw-bold fs-4 fs-md-3\">{{ totalFiltered }}</h3>
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
                                <h3 class=\"mb-0 fw-bold fs-4 fs-md-3 text-success\">{{ activeFiltered }}</h3>
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
                                <h3 class=\"mb-0 fw-bold fs-4 fs-md-3 text-danger\">{{ inactiveFiltered }}</h3>
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
                                <h3 class=\"mb-0 fw-bold fs-4 fs-md-3 text-warning\">{{ ongoingFiltered }}</h3>
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
                                <h3 class=\"mb-0 fw-bold fs-4 fs-md-3 text-info\">{{ upcomingFiltered }}</h3>
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
                                <h3 class=\"mb-0 fw-bold fs-4 fs-md-3 text-secondary\">{{ endedFiltered }}</h3>
                            </div>
                            <i class=\"fas fa-stopwatch text-secondary opacity-50\" style=\"font-size:1.5rem;\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==========================================
         FILTRES - 4 CHAMPS SUR UNE LIGNE (3,3,3,3)
    ========================================== -->
    <div class=\"card shadow-sm border-0 mb-3 mb-md-4\">
        <div class=\"card-header bg-white py-2 py-md-3 border-0 d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <h5 class=\"mb-0 fs-6 fs-md-5\"><i class=\"fas fa-filter me-2 text-primary\"></i>Filtres</h5>
            <div class=\"d-flex gap-1 gap-md-2\">
                <a href=\"{{ path('app_admin_promotion_index') }}\" class=\"btn btn-outline-secondary btn-sm\">
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
                    <!-- Recherche - 100% sur mobile, 3 sur desktop -->
                    <div class=\"col-12 col-md-3 filter-col\">
                        <label class=\"form-label fw-semibold filter-label\">Recherche</label>
                        <div class=\"input-group\">
                            <span class=\"input-group-text bg-white border-end-0\" style=\"padding:0.2rem 0.4rem;\">
                                <i class=\"fas fa-search text-muted\" style=\"font-size:0.7rem;\"></i>
                            </span>
                            <input type=\"text\" name=\"search\" value=\"{{ search }}\" 
                                   class=\"form-control border-start-0 filter-input\" 
                                   placeholder=\"Nom, description...\" 
                                   style=\"width:100%;\">
                        </div>
                    </div>
                    
                    <!-- Statut - 50% sur mobile, 3 sur desktop -->
                    <div class=\"col-6 col-md-3 filter-col-half\">
                        <label class=\"form-label fw-semibold filter-label\">Statut</label>
                        <select name=\"status\" class=\"form-select filter-select\">
                            <option value=\"all\" {{ status == 'all' ? 'selected' }}>Tous</option>
                            <option value=\"active\" {{ status == 'active' ? 'selected' }}>Actives</option>
                            <option value=\"inactive\" {{ status == 'inactive' ? 'selected' }}>Inactives</option>
                        </select>
                    </div>
                    
                    <!-- Période - 50% sur mobile, 3 sur desktop -->
                    <div class=\"col-6 col-md-3 filter-col-half\">
                        <label class=\"form-label fw-semibold filter-label\">Période</label>
                        <select name=\"period\" class=\"form-select filter-select\">
                            <option value=\"all\" {{ period == 'all' ? 'selected' }}>Toutes</option>
                            <option value=\"ongoing\" {{ period == 'ongoing' ? 'selected' }}>En cours</option>
                            <option value=\"upcoming\" {{ period == 'upcoming' ? 'selected' }}>À venir</option>
                            <option value=\"ended\" {{ period == 'ended' ? 'selected' }}>Terminées</option>
                        </select>
                    </div>
                    
                    <!-- Type - 50% sur mobile, 3 sur desktop -->
                    <div class=\"col-6 col-md-3 filter-col-half\">
                        <label class=\"form-label fw-semibold filter-label\">Type</label>
                        <select name=\"type\" class=\"form-select filter-select\">
                            <option value=\"0\">Tous</option>
                            {% for type in types %}
                                <option value=\"{{ type.id }}\" {{ selectedType == type.id ? 'selected' }}>{{ type.name }}</option>
                            {% endfor %}
                        </select>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- ==========================================
         GRILLE DES PROMOTIONS - 2 CARTES SUR MOBILE
    ========================================== -->
    <div class=\"row g-2 g-md-3 g-lg-4\">
        {% for promotion in promotions %}
            <div class=\"col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4\">
                <div class=\"card h-100 border-0 shadow-sm hover-shadow transition-all rounded-4 overflow-hidden\">
                    {% if promotion.image %}
                        <img src=\"{{ asset('uploads/promotions/' ~ promotion.image) }}\" class=\"card-img-top\" style=\"height: 150px; object-fit: cover;\" alt=\"{{ promotion.name }}\">
                    {% else %}
                        <div class=\"bg-gradient-light d-flex align-items-center justify-content-center\" style=\"height: 150px;\">
                            <i class=\"fas fa-tag fa-4x text-muted opacity-25\"></i>
                        </div>
                    {% endif %}
                    
                    <div class=\"card-body p-2 p-sm-3 p-md-3\">
                        <div class=\"d-flex justify-content-between align-items-start mb-1 mb-md-2\">
                            <h5 class=\"card-title fw-bold mb-0 fs-6 fs-md-5 text-dark\">{{ promotion.name|slice(0, 20) }}{% if promotion.name|length > 20 %}...{% endif %}</h5>
                            <span class=\"badge {{ promotion.isActive ? 'bg-success' : 'bg-secondary' }} px-2 py-1 ms-1 flex-shrink-0\" style=\"font-size:0.55rem;\">
                                {{ promotion.isActive ? 'Active' : 'Inactive' }}
                            </span>
                        </div>
                        <p class=\"card-text small text-muted mb-2\" style=\"font-size:0.7rem; min-height:40px;\">
                            {{ promotion.description|default('Aucune description')|slice(0, 50) }}
                            {% if promotion.description|length > 50 %}...{% endif %}
                        </p>
                        <div class=\"mb-1 mb-md-2\">
                            <strong class=\"text-dark small\" style=\"font-size:0.65rem;\">Réduction :</strong> 
                            <span class=\"badge bg-dark text-white px-2 py-1 rounded-pill\" style=\"font-size:0.65rem;\">
                                {% if promotion.typePromotion.name == 'Pourcentage' %}
                                    {{ promotion.value }}%
                                {% else %}
                                    {{ promotion.value|price_with_currency(app.user.hmaService) }}
                                {% endif %}
                            </span>
                        </div>
                        <div class=\"small text-muted\" style=\"font-size:0.6rem;\">
                            <i class=\"far fa-calendar-alt me-1\"></i> 
                            {{ promotion.startDate|date('d/m/Y') }}
                            {% if promotion.endDate %}
                                → {{ promotion.endDate|date('d/m/Y') }}
                            {% else %}
                                <span class=\"badge bg-info bg-opacity-10 text-info ms-1\" style=\"font-size:0.5rem;\">Sans fin</span>
                            {% endif %}
                        </div>
                        <div class=\"mt-1 mt-md-2 small text-muted border-top pt-1 pt-md-2\" style=\"font-size:0.6rem;\">
                            <i class=\"fas fa-user-circle me-1\"></i> 
                            <span class=\"d-none d-sm-inline\">Créé par : </span>
                            <strong>{{ promotion.user.fullName|slice(0, 15) }}</strong>
                        </div>
                    </div>
                    <div class=\"card-footer bg-transparent border-0 d-flex flex-wrap justify-content-between gap-1 pt-0 pb-2 pb-md-3 px-2 px-sm-3 px-md-3\">
                        <a href=\"{{ path('app_admin_promotion_show', {id: promotion.id}) }}\" class=\"btn btn-sm btn-outline-info flex-fill\" style=\"font-size:0.55rem; padding:0.15rem 0.2rem;\">
                            <i class=\"fas fa-eye me-1\"></i> <span class=\"d-none d-sm-inline\">Voir</span>
                        </a>
                        <a href=\"{{ path('app_admin_promotion_edit', {id: promotion.id}) }}\" class=\"btn btn-sm btn-outline-primary flex-fill\" style=\"font-size:0.55rem; padding:0.15rem 0.2rem;\">
                            <i class=\"fas fa-edit me-1\"></i> <span class=\"d-none d-sm-inline\">Modifier</span>
                        </a>
                        {% if is_granted('ROLE_ADMIN') %}
                            <button type=\"button\" class=\"btn btn-sm btn-outline-danger flex-fill\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal{{ promotion.id }}\" style=\"font-size:0.55rem; padding:0.15rem 0.2rem;\">
                                <i class=\"fas fa-trash-alt me-1\"></i> <span class=\"d-none d-sm-inline\">Supprimer</span>
                            </button>
                        {% endif %}
                    </div>
                </div>
            </div>

            <!-- ==========================================
                 MODAL DE SUPPRESSION
            ========================================== -->
            {% if is_granted('ROLE_ADMIN') %}
            <div class=\"modal fade\" id=\"deleteModal{{ promotion.id }}\" tabindex=\"-1\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-dialog-centered modal-sm\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header border-0\">
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
                                <strong>{{ promotion.name|slice(0, 30) }}</strong><br>
                                Toutes les associations seront supprimées.
                            </div>
                        </div>
                        <div class=\"modal-footer border-0 py-2\">
                            <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-bs-dismiss=\"modal\">Annuler</button>
                            <form method=\"post\" action=\"{{ path('app_admin_promotion_delete', {id: promotion.id}) }}\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ promotion.id) }}\">
                                <button type=\"submit\" class=\"btn btn-danger btn-sm\">Supprimer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {% endif %}
        {% else %}
            <!-- Aucun résultat -->
            <div class=\"col-12\">
                <div class=\"card border-0 shadow-sm rounded-4 text-center py-4 py-md-5\">
                    <div class=\"card-body\">
                        <i class=\"fas fa-tags fa-4x text-muted mb-3 opacity-25\"></i>
                        <h5 class=\"text-muted fs-6 fs-md-5\">Aucune promotion trouvée</h5>
                        <p class=\"text-muted small\">Modifiez vos filtres ou créez une nouvelle promotion.</p>
                        <a href=\"{{ path('app_admin_promotion_new') }}\" class=\"btn btn-primary btn-sm mt-2\">
                            <i class=\"fas fa-plus-circle me-2\"></i> Nouvelle promotion
                        </a>
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>

    <!-- ==========================================
         PAGINATION
    ========================================== -->
    {% if totalPages > 1 %}
        <nav class=\"mt-3 mt-md-4\">
            <ul class=\"pagination pagination-sm justify-content-center flex-wrap gap-1\">
                {% for page in 1..totalPages %}
                    <li class=\"page-item {{ page == currentPage ? 'active' }}\">
                        <a class=\"page-link\" href=\"{{ path('app_admin_promotion_index', app.request.query.all|merge({'page': page})) }}\" style=\"font-size:0.7rem; padding:0.25rem 0.5rem;\">
                            {{ page }}
                        </a>
                    </li>
                {% endfor %}
            </ul>
        </nav>
    {% endif %}
</div>
{% endblock %}", "admin/promotion/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\promotion\\index.html.twig");
    }
}
