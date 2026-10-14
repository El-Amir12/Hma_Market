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

/* admin/promotion/product/index.html.twig */
class __TwigTemplate_4068f96d7dc0238ac1821115c56c3c94 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/promotion/product/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/promotion/product/index.html.twig"));

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

        yield "Promotions par produit - HMA Market";
        
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
<style>
    .rounded-4 {
        border-radius: 1rem;
        overflow: hidden;
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
    
    /* Cartes et badges */
    .bg-primary.bg-opacity-10 {
        background-color: rgba(13, 110, 253, 0.1) !important;
    }
    
    .bg-dark {
        background-color: #212529 !important;
    }
    
    .text-white {
        color: #ffffff !important;
    }
    
    .flex-fill {
        flex: 1 1 auto !important;
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
        
        /* Statistiques */
        .stat-card .h2 {
            font-size: 1.5rem !important;
        }
        .stat-card .text-muted {
            font-size: 0.6rem !important;
        }
        .stat-card .py-3 {
            padding-top: 0.5rem !important;
            padding-bottom: 0.5rem !important;
        }
        
        /* Tableau */
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
        
        /* Badges */
        .badge {
            font-size: 0.5rem !important;
            padding: 0.15rem 0.3rem !important;
        }
        .rounded-pill {
            padding: 0.15rem 0.4rem !important;
        }
        
        /* Pagination */
        .pagination .page-link {
            font-size: 0.65rem !important;
            padding: 0.25rem 0.5rem !important;
        }
        
        /* Boutons d'action */
        .btn-group-sm .btn {
            padding: 0.15rem 0.25rem !important;
            font-size: 0.55rem !important;
        }
        .btn-group-sm .btn i {
            font-size: 0.6rem !important;
        }
        
        /* MODALES */
        .modal-dialog {
            margin: 0.5rem;
        }
        .modal-content {
            border-radius: 12px !important;
        }
        .modal-body {
            padding: 0.5rem !important;
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
        
        .table th, .table td {
            padding: 0.5rem 0.4rem;
            font-size: 0.7rem;
        }
        .table th {
            font-size: 0.6rem;
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
        .table tbody tr:hover {
            background-color: transparent !important;
        }
        .table tbody tr:hover td {
            background-color: #ffffff !important;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 284
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

        // line 285
        yield "<div class=\"container-fluid px-2 px-md-4 py-2 py-md-3\">

    <!-- ==========================================
         EN-TÊTE
    ========================================== -->
    <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center mb-3 mb-md-4 flex-wrap gap-2\">
        <div class=\"w-100 w-sm-auto\">
            <a href=\"";
        // line 292
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_index");
        yield "\" class=\"btn btn-outline-secondary btn-sm mb-2\">
                <i class=\"fas fa-arrow-left me-1\"></i> <span class=\"d-none d-sm-inline\">Retour aux promotions</span>
                <span class=\"d-inline d-sm-none\">Retour</span>
            </a>
            <h1 class=\"h3 mb-1\">
                <i class=\"fas fa-boxes me-2 text-primary\"></i>Promotions par produit
            </h1>
            <p class=\"text-muted mb-0 small d-none d-sm-block\">Gérez les associations promotion → produit</p>
            <p class=\"text-muted mb-0 small d-block d-sm-none\">Associations promotion → produit</p>
        </div>
        <div class=\"d-flex gap-1 gap-sm-2 flex-wrap w-100 w-sm-auto\">
            <a href=\"";
        // line 303
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
        // line 313
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 313, $this->source); })()), "flashes", ["success"], "method", false, false, false, 313));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 314
            yield "        <div class=\"alert alert-success alert-dismissible fade show small\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "<button type=\"button\" class=\"btn-close btn-close-sm\" data-bs-dismiss=\"alert\"></button></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 316
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 316, $this->source); })()), "flashes", ["error"], "method", false, false, false, 316));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 317
            yield "        <div class=\"alert alert-danger alert-dismissible fade show small\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "<button type=\"button\" class=\"btn-close btn-close-sm\" data-bs-dismiss=\"alert\"></button></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 319
        yield "
    <!-- ==========================================
         STATISTIQUES
    ========================================== -->
    <div class=\"row g-2 g-md-3 mb-3 mb-md-4\">
        <div class=\"col-12\">
            <div class=\"card border-0 bg-primary bg-opacity-10 rounded-4 w-100\">
                <div class=\"card-body text-center py-2 py-md-3\">
                    <h2 class=\"mb-0 fw-bold text-dark fs-2 fs-md-1\">";
        // line 327
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalCount"]) || array_key_exists("totalCount", $context) ? $context["totalCount"] : (function () { throw new RuntimeError('Variable "totalCount" does not exist.', 327, $this->source); })()), "html", null, true);
        yield "</h2>
                    <small class=\"text-muted\" style=\"font-size:0.6rem;\">Associations</small>
                </div>
            </div>
        </div>
    </div>

    <!-- ==========================================
         FILTRES - 3 CHAMPS SUR UNE LIGNE (4,4,4)
    ========================================== -->
    <div class=\"card shadow-sm border-0 mb-3 mb-md-4\">
        <div class=\"card-header bg-white py-2 py-md-3 border-0 d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <h5 class=\"mb-0 fs-6 fs-md-5\"><i class=\"fas fa-filter me-2 text-primary\"></i>Filtres</h5>
            <div class=\"d-flex gap-1 gap-md-2\">
                <a href=\"";
        // line 341
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_product_index");
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
        // line 359
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 359, $this->source); })()), "html", null, true);
        yield "\" 
                                   class=\"form-control border-start-0 filter-input\" 
                                   placeholder=\"Promotion ou produit...\" 
                                   style=\"width:100%;\">
                        </div>
                    </div>
                    
                    <!-- Statut - 50% sur mobile, 4 sur desktop -->
                    <div class=\"col-6 col-md-4 filter-col-half\">
                        <label class=\"form-label fw-semibold filter-label\">Statut</label>
                        <select name=\"status\" class=\"form-select filter-select\">
                            <option value=\"all\" ";
        // line 370
        yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 370, $this->source); })()) == "all")) ? ("selected") : (""));
        yield ">Tous</option>
                            <option value=\"active\" ";
        // line 371
        yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 371, $this->source); })()) == "active")) ? ("selected") : (""));
        yield ">Actives</option>
                            <option value=\"inactive\" ";
        // line 372
        yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 372, $this->source); })()) == "inactive")) ? ("selected") : (""));
        yield ">Inactives</option>
                        </select>
                    </div>
                    
                    <!-- Promotion - 50% sur mobile, 4 sur desktop -->
                    <div class=\"col-6 col-md-4 filter-col-half\">
                        <label class=\"form-label fw-semibold filter-label\">Promotion</label>
                        <select name=\"promotion\" class=\"form-select select2-promotion filter-select\">
                            <option value=\"0\">Toutes</option>
                            ";
        // line 381
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 381, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
            // line 382
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 382), "html", null, true);
            yield "\" ";
            yield ((((isset($context["selectedPromotion"]) || array_key_exists("selectedPromotion", $context) ? $context["selectedPromotion"] : (function () { throw new RuntimeError('Variable "selectedPromotion" does not exist.', 382, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 382))) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "name", [], "any", false, false, false, 382), 0, 25), "html", null, true);
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "name", [], "any", false, false, false, 382)) > 25)) {
                yield "...";
            }
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['promotion'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 384
        yield "                        </select>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- ==========================================
         TABLEAU DES ASSOCIATIONS
    ========================================== -->
    <div class=\"card shadow-sm border-0 rounded-4\">
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover mb-0 align-middle table-sm\">
                    <thead style=\"background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);\">
                        <tr>
                            <th class=\"text-white\" style=\"width: 50px\">Image</th>
                            <th class=\"text-white\">Promotion</th>
                            <th class=\"text-white d-none d-md-table-cell\">Produit</th>
                            <th class=\"text-white d-none d-lg-table-cell\">Catégorie</th>
                            <th class=\"text-white d-none d-xl-table-cell\">Période</th>
                            <th class=\"text-white text-center\" style=\"width: 70px\">Statut</th>
                            <th class=\"text-white text-center\" style=\"width: 70px\">Réduction</th>
                            <th class=\"text-white text-center\" style=\"width: 70px\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 411
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 411, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 412
            yield "                            <tr>
                                <td>
                                    ";
            // line 414
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 414), "image", [], "any", false, false, false, 414)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 415
                yield "                                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/promotions/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 415), "image", [], "any", false, false, false, 415))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 415), "name", [], "any", false, false, false, 415), "html", null, true);
                yield "\" class=\"rounded\" style=\"width: 35px; height: 35px; object-fit: cover;\">
                                    ";
            } else {
                // line 417
                yield "                                        <div class=\"bg-light rounded d-flex align-items-center justify-content-center\" style=\"width: 35px; height: 35px;\">
                                            <i class=\"fas fa-tag fa-1x text-muted\"></i>
                                        </div>
                                    ";
            }
            // line 421
            yield "                                </td>
                                <td>
                                    <strong class=\"small\">";
            // line 423
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 423), "name", [], "any", false, false, false, 423), 0, 15), "html", null, true);
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 423), "name", [], "any", false, false, false, 423)) > 15)) {
                yield "...";
            }
            yield "</strong>
                                    <br><small class=\"text-muted\" style=\"font-size:0.55rem;\">";
            // line 424
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 424), "typePromotion", [], "any", false, false, false, 424), "name", [], "any", false, false, false, 424), "html", null, true);
            yield "</small>
                                </td>
                                <td class=\"d-none d-md-table-cell\">
                                    <strong class=\"small\">";
            // line 427
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 427), "name", [], "any", false, false, false, 427), 0, 15), "html", null, true);
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 427), "name", [], "any", false, false, false, 427)) > 15)) {
                yield "...";
            }
            yield "</strong>
                                    <br><code class=\"small\" style=\"font-size:0.5rem;\">";
            // line 428
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 428), "barcode", [], "any", false, false, false, 428), "html", null, true);
            yield "</code>
                                </td>
                                <td class=\"d-none d-lg-table-cell small\">";
            // line 430
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 430), "category", [], "any", false, false, false, 430)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 430), "category", [], "any", false, false, false, 430), "name", [], "any", false, false, false, 430), 0, 15), "html", null, true)) : ("-"));
            yield "</td>
                                <td class=\"d-none d-xl-table-cell small\" style=\"font-size:0.6rem;\">
                                    ";
            // line 432
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 432), "startDate", [], "any", false, false, false, 432), "d/m/Y"), "html", null, true);
            yield "
                                    ";
            // line 433
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 433), "endDate", [], "any", false, false, false, 433)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 434
                yield "                                        <br>→ ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 434), "endDate", [], "any", false, false, false, 434), "d/m/Y"), "html", null, true);
                yield "
                                    ";
            } else {
                // line 436
                yield "                                        <br><span class=\"badge bg-info bg-opacity-10 text-info\" style=\"font-size:0.5rem;\">Sans fin</span>
                                    ";
            }
            // line 438
            yield "                                </td>
                                <td class=\"text-center\">
                                    <span class=\"badge ";
            // line 440
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 440), "isActive", [], "any", false, false, false, 440)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-secondary"));
            yield "\" style=\"font-size:0.55rem;\">
                                        ";
            // line 441
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 441), "isActive", [], "any", false, false, false, 441)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Active") : ("Inactive"));
            yield "
                                    </span>
                                </td>
                                <td class=\"text-center\">
                                    <span class=\"badge bg-dark text-white rounded-pill\" style=\"font-size:0.55rem; padding:0.15rem 0.3rem;\">
                                        ";
            // line 446
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 446), "typePromotion", [], "any", false, false, false, 446), "name", [], "any", false, false, false, 446) == "Pourcentage")) {
                // line 447
                yield "                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 447), "value", [], "any", false, false, false, 447), "html", null, true);
                yield "%
                                        ";
            } else {
                // line 449
                yield "                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 449), "value", [], "any", false, false, false, 449), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 449, $this->source); })()), "user", [], "any", false, false, false, 449), "hmaService", [], "any", false, false, false, 449)), "html", null, true);
                yield "
                                        ";
            }
            // line 451
            yield "                                    </span>
                                </td>
                                <td class=\"text-center\">
                                    <div class=\"btn-group btn-group-sm\">
                                        <a href=\"";
            // line 455
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 455)]), "html", null, true);
            yield "\" class=\"btn btn-outline-info\" title=\"Voir\" style=\"padding:0.15rem 0.25rem; font-size:0.55rem;\">
                                            <i class=\"fas fa-eye\" style=\"font-size:0.6rem;\"></i>
                                        </a>
                                        <button type=\"button\" class=\"btn btn-outline-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal";
            // line 458
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 458), "html", null, true);
            yield "\" title=\"Supprimer\" style=\"padding:0.15rem 0.25rem; font-size:0.55rem;\">
                                            <i class=\"fas fa-trash-alt\" style=\"font-size:0.6rem;\"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <!-- ==========================================
                                 MODAL DE SUPPRESSION
                            ========================================== -->
                            <div class=\"modal fade\" id=\"deleteModal";
            // line 468
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 468), "html", null, true);
            yield "\" tabindex=\"-1\">
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
            // line 480
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 480), "name", [], "any", false, false, false, 480), 0, 25), "html", null, true);
            yield "</strong> ne sera plus appliquée au produit <strong>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 480), "name", [], "any", false, false, false, 480), 0, 25), "html", null, true);
            yield "</strong>.</p>
                                        </div>
                                        <div class=\"modal-footer border-0 py-2\">
                                            <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-bs-dismiss=\"modal\">Annuler</button>
                                            <form method=\"post\" action=\"";
            // line 484
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_product_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 484)]), "html", null, true);
            yield "\">
                                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 485
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete-product" . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 485))), "html", null, true);
            yield "\">
                                                <button type=\"submit\" class=\"btn btn-danger btn-sm\">Supprimer</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
            $context['_iterated'] = true;
        }
        // line 492
        if (!$context['_iterated']) {
            // line 493
            yield "                            <tr>
                                <td colspan=\"8\" class=\"text-center py-4 py-md-5 text-muted\">
                                    <i class=\"fas fa-boxes fa-3x mb-3 text-muted opacity-25\"></i>
                                    <p class=\"small\">Aucune association promotion-produit trouvée.</p>
                                    <a href=\"";
            // line 497
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_new");
            yield "\" class=\"btn btn-primary btn-sm\">
                                        <i class=\"fas fa-plus-circle me-2\"></i> Créer une promotion
                                    </a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 503
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- ==========================================
         PAGINATION
    ========================================== -->
    ";
        // line 512
        if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 512, $this->source); })()) > 1)) {
            // line 513
            yield "        <nav class=\"mt-3 mt-md-4\">
            <ul class=\"pagination pagination-sm justify-content-center flex-wrap gap-1\">
                ";
            // line 515
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 515, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 516
                yield "                    <li class=\"page-item ";
                yield ((($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 516, $this->source); })()))) ? ("active") : (""));
                yield "\">
                        <a class=\"page-link\" href=\"";
                // line 517
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_product_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 517, $this->source); })()), "request", [], "any", false, false, false, 517), "query", [], "any", false, false, false, 517), "all", [], "any", false, false, false, 517), ["page" => $context["page"]])), "html", null, true);
                yield "\" style=\"font-size:0.7rem; padding:0.25rem 0.5rem;\">
                            ";
                // line 518
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                yield "
                        </a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 522
            yield "            </ul>
        </nav>
    ";
        }
        // line 525
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
        return "admin/promotion/product/index.html.twig";
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
        return array (  829 => 525,  824 => 522,  814 => 518,  810 => 517,  805 => 516,  801 => 515,  797 => 513,  795 => 512,  784 => 503,  772 => 497,  766 => 493,  764 => 492,  752 => 485,  748 => 484,  739 => 480,  724 => 468,  711 => 458,  705 => 455,  699 => 451,  693 => 449,  687 => 447,  685 => 446,  677 => 441,  673 => 440,  669 => 438,  665 => 436,  659 => 434,  657 => 433,  653 => 432,  648 => 430,  643 => 428,  636 => 427,  630 => 424,  623 => 423,  619 => 421,  613 => 417,  605 => 415,  603 => 414,  599 => 412,  594 => 411,  565 => 384,  549 => 382,  545 => 381,  533 => 372,  529 => 371,  525 => 370,  511 => 359,  490 => 341,  473 => 327,  463 => 319,  454 => 317,  449 => 316,  440 => 314,  436 => 313,  423 => 303,  409 => 292,  400 => 285,  387 => 284,  101 => 8,  88 => 7,  65 => 5,  42 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/promotion/product/index.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}Promotions par produit - HMA Market{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    .rounded-4 {
        border-radius: 1rem;
        overflow: hidden;
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
    
    /* Cartes et badges */
    .bg-primary.bg-opacity-10 {
        background-color: rgba(13, 110, 253, 0.1) !important;
    }
    
    .bg-dark {
        background-color: #212529 !important;
    }
    
    .text-white {
        color: #ffffff !important;
    }
    
    .flex-fill {
        flex: 1 1 auto !important;
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
        
        /* Statistiques */
        .stat-card .h2 {
            font-size: 1.5rem !important;
        }
        .stat-card .text-muted {
            font-size: 0.6rem !important;
        }
        .stat-card .py-3 {
            padding-top: 0.5rem !important;
            padding-bottom: 0.5rem !important;
        }
        
        /* Tableau */
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
        
        /* Badges */
        .badge {
            font-size: 0.5rem !important;
            padding: 0.15rem 0.3rem !important;
        }
        .rounded-pill {
            padding: 0.15rem 0.4rem !important;
        }
        
        /* Pagination */
        .pagination .page-link {
            font-size: 0.65rem !important;
            padding: 0.25rem 0.5rem !important;
        }
        
        /* Boutons d'action */
        .btn-group-sm .btn {
            padding: 0.15rem 0.25rem !important;
            font-size: 0.55rem !important;
        }
        .btn-group-sm .btn i {
            font-size: 0.6rem !important;
        }
        
        /* MODALES */
        .modal-dialog {
            margin: 0.5rem;
        }
        .modal-content {
            border-radius: 12px !important;
        }
        .modal-body {
            padding: 0.5rem !important;
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
        
        .table th, .table td {
            padding: 0.5rem 0.4rem;
            font-size: 0.7rem;
        }
        .table th {
            font-size: 0.6rem;
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
        .table tbody tr:hover {
            background-color: transparent !important;
        }
        .table tbody tr:hover td {
            background-color: #ffffff !important;
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
            <a href=\"{{ path('app_admin_promotion_index') }}\" class=\"btn btn-outline-secondary btn-sm mb-2\">
                <i class=\"fas fa-arrow-left me-1\"></i> <span class=\"d-none d-sm-inline\">Retour aux promotions</span>
                <span class=\"d-inline d-sm-none\">Retour</span>
            </a>
            <h1 class=\"h3 mb-1\">
                <i class=\"fas fa-boxes me-2 text-primary\"></i>Promotions par produit
            </h1>
            <p class=\"text-muted mb-0 small d-none d-sm-block\">Gérez les associations promotion → produit</p>
            <p class=\"text-muted mb-0 small d-block d-sm-none\">Associations promotion → produit</p>
        </div>
        <div class=\"d-flex gap-1 gap-sm-2 flex-wrap w-100 w-sm-auto\">
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
         STATISTIQUES
    ========================================== -->
    <div class=\"row g-2 g-md-3 mb-3 mb-md-4\">
        <div class=\"col-12\">
            <div class=\"card border-0 bg-primary bg-opacity-10 rounded-4 w-100\">
                <div class=\"card-body text-center py-2 py-md-3\">
                    <h2 class=\"mb-0 fw-bold text-dark fs-2 fs-md-1\">{{ totalCount }}</h2>
                    <small class=\"text-muted\" style=\"font-size:0.6rem;\">Associations</small>
                </div>
            </div>
        </div>
    </div>

    <!-- ==========================================
         FILTRES - 3 CHAMPS SUR UNE LIGNE (4,4,4)
    ========================================== -->
    <div class=\"card shadow-sm border-0 mb-3 mb-md-4\">
        <div class=\"card-header bg-white py-2 py-md-3 border-0 d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <h5 class=\"mb-0 fs-6 fs-md-5\"><i class=\"fas fa-filter me-2 text-primary\"></i>Filtres</h5>
            <div class=\"d-flex gap-1 gap-md-2\">
                <a href=\"{{ path('app_admin_promotion_product_index') }}\" class=\"btn btn-outline-secondary btn-sm\">
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
                            <input type=\"text\" name=\"search\" value=\"{{ search }}\" 
                                   class=\"form-control border-start-0 filter-input\" 
                                   placeholder=\"Promotion ou produit...\" 
                                   style=\"width:100%;\">
                        </div>
                    </div>
                    
                    <!-- Statut - 50% sur mobile, 4 sur desktop -->
                    <div class=\"col-6 col-md-4 filter-col-half\">
                        <label class=\"form-label fw-semibold filter-label\">Statut</label>
                        <select name=\"status\" class=\"form-select filter-select\">
                            <option value=\"all\" {{ status == 'all' ? 'selected' }}>Tous</option>
                            <option value=\"active\" {{ status == 'active' ? 'selected' }}>Actives</option>
                            <option value=\"inactive\" {{ status == 'inactive' ? 'selected' }}>Inactives</option>
                        </select>
                    </div>
                    
                    <!-- Promotion - 50% sur mobile, 4 sur desktop -->
                    <div class=\"col-6 col-md-4 filter-col-half\">
                        <label class=\"form-label fw-semibold filter-label\">Promotion</label>
                        <select name=\"promotion\" class=\"form-select select2-promotion filter-select\">
                            <option value=\"0\">Toutes</option>
                            {% for promotion in promotions %}
                                <option value=\"{{ promotion.id }}\" {{ selectedPromotion == promotion.id ? 'selected' }}>{{ promotion.name|slice(0, 25) }}{% if promotion.name|length > 25 %}...{% endif %}</option>
                            {% endfor %}
                        </select>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- ==========================================
         TABLEAU DES ASSOCIATIONS
    ========================================== -->
    <div class=\"card shadow-sm border-0 rounded-4\">
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover mb-0 align-middle table-sm\">
                    <thead style=\"background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);\">
                        <tr>
                            <th class=\"text-white\" style=\"width: 50px\">Image</th>
                            <th class=\"text-white\">Promotion</th>
                            <th class=\"text-white d-none d-md-table-cell\">Produit</th>
                            <th class=\"text-white d-none d-lg-table-cell\">Catégorie</th>
                            <th class=\"text-white d-none d-xl-table-cell\">Période</th>
                            <th class=\"text-white text-center\" style=\"width: 70px\">Statut</th>
                            <th class=\"text-white text-center\" style=\"width: 70px\">Réduction</th>
                            <th class=\"text-white text-center\" style=\"width: 70px\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for item in items %}
                            <tr>
                                <td>
                                    {% if item.promotion.image %}
                                        <img src=\"{{ asset('uploads/promotions/' ~ item.promotion.image) }}\" alt=\"{{ item.promotion.name }}\" class=\"rounded\" style=\"width: 35px; height: 35px; object-fit: cover;\">
                                    {% else %}
                                        <div class=\"bg-light rounded d-flex align-items-center justify-content-center\" style=\"width: 35px; height: 35px;\">
                                            <i class=\"fas fa-tag fa-1x text-muted\"></i>
                                        </div>
                                    {% endif %}
                                </td>
                                <td>
                                    <strong class=\"small\">{{ item.promotion.name|slice(0, 15) }}{% if item.promotion.name|length > 15 %}...{% endif %}</strong>
                                    <br><small class=\"text-muted\" style=\"font-size:0.55rem;\">{{ item.promotion.typePromotion.name }}</small>
                                </td>
                                <td class=\"d-none d-md-table-cell\">
                                    <strong class=\"small\">{{ item.product.name|slice(0, 15) }}{% if item.product.name|length > 15 %}...{% endif %}</strong>
                                    <br><code class=\"small\" style=\"font-size:0.5rem;\">{{ item.product.barcode }}</code>
                                </td>
                                <td class=\"d-none d-lg-table-cell small\">{{ item.product.category ? item.product.category.name|slice(0, 15) : '-' }}</td>
                                <td class=\"d-none d-xl-table-cell small\" style=\"font-size:0.6rem;\">
                                    {{ item.promotion.startDate|date('d/m/Y') }}
                                    {% if item.promotion.endDate %}
                                        <br>→ {{ item.promotion.endDate|date('d/m/Y') }}
                                    {% else %}
                                        <br><span class=\"badge bg-info bg-opacity-10 text-info\" style=\"font-size:0.5rem;\">Sans fin</span>
                                    {% endif %}
                                </td>
                                <td class=\"text-center\">
                                    <span class=\"badge {{ item.promotion.isActive ? 'bg-success' : 'bg-secondary' }}\" style=\"font-size:0.55rem;\">
                                        {{ item.promotion.isActive ? 'Active' : 'Inactive' }}
                                    </span>
                                </td>
                                <td class=\"text-center\">
                                    <span class=\"badge bg-dark text-white rounded-pill\" style=\"font-size:0.55rem; padding:0.15rem 0.3rem;\">
                                        {% if item.promotion.typePromotion.name == 'Pourcentage' %}
                                            {{ item.promotion.value }}%
                                        {% else %}
                                            {{ item.promotion.value|price_with_currency(app.user.hmaService) }}
                                        {% endif %}
                                    </span>
                                </td>
                                <td class=\"text-center\">
                                    <div class=\"btn-group btn-group-sm\">
                                        <a href=\"{{ path('app_admin_promotion_product_show', {id: item.id}) }}\" class=\"btn btn-outline-info\" title=\"Voir\" style=\"padding:0.15rem 0.25rem; font-size:0.55rem;\">
                                            <i class=\"fas fa-eye\" style=\"font-size:0.6rem;\"></i>
                                        </a>
                                        <button type=\"button\" class=\"btn btn-outline-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal{{ item.id }}\" title=\"Supprimer\" style=\"padding:0.15rem 0.25rem; font-size:0.55rem;\">
                                            <i class=\"fas fa-trash-alt\" style=\"font-size:0.6rem;\"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <!-- ==========================================
                                 MODAL DE SUPPRESSION
                            ========================================== -->
                            <div class=\"modal fade\" id=\"deleteModal{{ item.id }}\" tabindex=\"-1\">
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
                                            <p class=\"text-muted small\">La promotion <strong>{{ item.promotion.name|slice(0, 25) }}</strong> ne sera plus appliquée au produit <strong>{{ item.product.name|slice(0, 25) }}</strong>.</p>
                                        </div>
                                        <div class=\"modal-footer border-0 py-2\">
                                            <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-bs-dismiss=\"modal\">Annuler</button>
                                            <form method=\"post\" action=\"{{ path('app_admin_promotion_product_delete', {id: item.id}) }}\">
                                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete-product' ~ item.id) }}\">
                                                <button type=\"submit\" class=\"btn btn-danger btn-sm\">Supprimer</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {% else %}
                            <tr>
                                <td colspan=\"8\" class=\"text-center py-4 py-md-5 text-muted\">
                                    <i class=\"fas fa-boxes fa-3x mb-3 text-muted opacity-25\"></i>
                                    <p class=\"small\">Aucune association promotion-produit trouvée.</p>
                                    <a href=\"{{ path('app_admin_promotion_new') }}\" class=\"btn btn-primary btn-sm\">
                                        <i class=\"fas fa-plus-circle me-2\"></i> Créer une promotion
                                    </a>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- ==========================================
         PAGINATION
    ========================================== -->
    {% if totalPages > 1 %}
        <nav class=\"mt-3 mt-md-4\">
            <ul class=\"pagination pagination-sm justify-content-center flex-wrap gap-1\">
                {% for page in 1..totalPages %}
                    <li class=\"page-item {{ page == currentPage ? 'active' }}\">
                        <a class=\"page-link\" href=\"{{ path('app_admin_promotion_product_index', app.request.query.all|merge({'page': page})) }}\" style=\"font-size:0.7rem; padding:0.25rem 0.5rem;\">
                            {{ page }}
                        </a>
                    </li>
                {% endfor %}
            </ul>
        </nav>
    {% endif %}
</div>
{% endblock %}", "admin/promotion/product/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\promotion\\product\\index.html.twig");
    }
}
