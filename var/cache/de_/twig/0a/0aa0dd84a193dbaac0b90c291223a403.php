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

/* admin/type_promotion/index.html.twig */
class __TwigTemplate_f9cdd2bf80f9c5c024c17efc0b75bb0a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/type_promotion/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/type_promotion/index.html.twig"));

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

        yield "Types de promotion - HMA Market";
        
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
    /* ========================================
       CARTES
    ======================================== */
    .hover-shadow {
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .hover-shadow:hover {
        transform: translateY(-5px);
        box-shadow: 0 1rem 2rem rgba(0,0,0,0.1) !important;
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

    /* ========================================
       RESPONSIVE - FILTRES
    ======================================== */
    .filter-label {
        display: block !important;
        width: 100% !important;
        font-size: 0.7rem !important;
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
        
        /* Cartes des types */
        .card-body {
            padding: 0.75rem !important;
        }
        .card-footer {
            padding: 0.5rem 0.75rem !important;
        }
        .card-title {
            font-size: 0.85rem !important;
        }
        .card-text {
            font-size: 0.7rem !important;
            min-height: 50px !important;
        }
        .badge {
            font-size: 0.55rem !important;
            padding: 0.15rem 0.4rem !important;
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

    // line 188
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

        // line 189
        yield "<div class=\"container-fluid px-2 px-md-4 py-2 py-md-3\">

    <!-- ==========================================
         EN-TÊTE
    ========================================== -->
    <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center mb-3 mb-md-4 flex-wrap gap-2\">
        <div class=\"w-100 w-sm-auto\">
            <h1 class=\"h3 mb-1\">
                <i class=\"fas fa-cog me-2 text-primary\"></i>Types de promotion
            </h1>
            <p class=\"text-muted mb-0 small d-none d-sm-block\">
                Gérez les types de réduction (pourcentage, montant fixe, etc.)
            </p>
            <p class=\"text-muted mb-0 small d-block d-sm-none\">
                Types de réduction
            </p>
        </div>
        <div class=\"d-flex gap-1 gap-sm-2 flex-wrap w-100 w-sm-auto\">
            <a href=\"";
        // line 207
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_promotion_index");
        yield "\" class=\"btn btn-outline-primary btn-sm flex-grow-1 flex-sm-grow-0\">
                <i class=\"fas fa-list me-1\"></i> <span class=\"d-none d-sm-inline\">Voir les promotions</span>
                <span class=\"d-inline d-sm-none\">Promotions</span>
            </a>
            <a href=\"";
        // line 211
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_type_promotion_new");
        yield "\" class=\"btn btn-primary btn-sm flex-grow-1 flex-sm-grow-0\">
                <i class=\"fas fa-plus-circle me-1\"></i> <span class=\"d-none d-sm-inline\">Nouveau type</span>
                <span class=\"d-inline d-sm-none\">Nouveau</span>
            </a>
        </div>
    </div>

    <!-- ==========================================
         FLASH MESSAGES
    ========================================== -->
    ";
        // line 221
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 221, $this->source); })()), "flashes", ["success"], "method", false, false, false, 221));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 222
            yield "        <div class=\"alert alert-success alert-dismissible fade show small\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "<button type=\"button\" class=\"btn-close btn-close-sm\" data-bs-dismiss=\"alert\"></button></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 224
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 224, $this->source); })()), "flashes", ["error"], "method", false, false, false, 224));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 225
            yield "        <div class=\"alert alert-danger alert-dismissible fade show small\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "<button type=\"button\" class=\"btn-close btn-close-sm\" data-bs-dismiss=\"alert\"></button></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 227
        yield "
    <!-- ==========================================
         STATISTIQUES - 3 CARTES
    ========================================== -->
    <div class=\"card shadow-sm border-0 mb-3 mb-md-4\">
        <div class=\"card-header bg-white py-2 py-md-3 border-0\">
            <h5 class=\"mb-0 fs-6 fs-md-5\"><i class=\"fas fa-chart-pie me-2 text-primary\"></i>Statistiques</h5>
        </div>
        <div class=\"card-body p-2 p-md-3\">
            <div class=\"row g-2 g-md-3\">
                <!-- Total -->
                <div class=\"col-6 col-md-4\">
                    <div class=\"stat-card p-2 p-md-3 bg-light rounded-3 h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted small text-uppercase fw-bold d-block\" style=\"font-size:0.6rem;\">Total</span>
                                <h3 class=\"mb-0 fw-bold fs-4 fs-md-3\">";
        // line 243
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalFiltered"]) || array_key_exists("totalFiltered", $context) ? $context["totalFiltered"] : (function () { throw new RuntimeError('Variable "totalFiltered" does not exist.', 243, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-tag fa-2x text-primary opacity-50\" style=\"font-size:1.5rem;\"></i>
                        </div>
                    </div>
                </div>
                <!-- Actifs -->
                <div class=\"col-6 col-md-4\">
                    <div class=\"stat-card p-2 p-md-3 bg-light rounded-3 h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted small text-uppercase fw-bold d-block\" style=\"font-size:0.6rem;\">Actifs</span>
                                <h3 class=\"mb-0 fw-bold fs-4 fs-md-3 text-success\">";
        // line 255
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activeFiltered"]) || array_key_exists("activeFiltered", $context) ? $context["activeFiltered"] : (function () { throw new RuntimeError('Variable "activeFiltered" does not exist.', 255, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-check-circle fa-2x text-success opacity-50\" style=\"font-size:1.5rem;\"></i>
                        </div>
                    </div>
                </div>
                <!-- Inactifs -->
                <div class=\"col-12 col-md-4\">
                    <div class=\"stat-card p-2 p-md-3 bg-light rounded-3 h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted small text-uppercase fw-bold d-block\" style=\"font-size:0.6rem;\">Inactifs</span>
                                <h3 class=\"mb-0 fw-bold fs-4 fs-md-3 text-danger\">";
        // line 267
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["inactiveFiltered"]) || array_key_exists("inactiveFiltered", $context) ? $context["inactiveFiltered"] : (function () { throw new RuntimeError('Variable "inactiveFiltered" does not exist.', 267, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-ban fa-2x text-danger opacity-50\" style=\"font-size:1.5rem;\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==========================================
         FILTRES - RECHERCHE ET STATUT SUR UNE LIGNE
    ========================================== -->
    <div class=\"card shadow-sm border-0 mb-3 mb-md-4\">
        <div class=\"card-header bg-white py-2 py-md-3 border-0 d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <h5 class=\"mb-0 fs-6 fs-md-5\"><i class=\"fas fa-filter me-2 text-primary\"></i>Filtres</h5>
            <div class=\"d-flex gap-1 gap-md-2\">
                <a href=\"";
        // line 284
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_type_promotion_index");
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
                    <!-- Recherche - 100% sur mobile, 6 sur desktop -->
                    <div class=\"col-12 col-md-6\">
                        <label class=\"form-label fw-semibold filter-label\">Recherche</label>
                        <div class=\"input-group\">
                            <span class=\"input-group-text bg-white border-end-0\" style=\"padding:0.2rem 0.4rem;\">
                                <i class=\"fas fa-search text-muted\" style=\"font-size:0.7rem;\"></i>
                            </span>
                            <input type=\"text\" name=\"search\" value=\"";
        // line 302
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 302, $this->source); })()), "html", null, true);
        yield "\" 
                                   class=\"form-control border-start-0\" 
                                   placeholder=\"Nom, description...\" 
                                   style=\"font-size:0.7rem; padding:0.2rem 0.4rem; width:100%;\">
                        </div>
                    </div>
                    
                    <!-- Statut - 100% sur mobile, 6 sur desktop -->
                    <div class=\"col-12 col-md-6\">
                        <label class=\"form-label fw-semibold filter-label\">Statut</label>
                        <select name=\"status\" class=\"form-select\" style=\"font-size:0.7rem; padding:0.2rem 0.4rem; width:100%;\">
                            <option value=\"all\" ";
        // line 313
        yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 313, $this->source); })()) == "all")) ? ("selected") : (""));
        yield ">Tous</option>
                            <option value=\"active\" ";
        // line 314
        yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 314, $this->source); })()) == "active")) ? ("selected") : (""));
        yield ">Actifs</option>
                            <option value=\"inactive\" ";
        // line 315
        yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 315, $this->source); })()) == "inactive")) ? ("selected") : (""));
        yield ">Inactifs</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- ==========================================
         GRILLE DES TYPES - 2 CARTES SUR MOBILE
    ========================================== -->
    <div class=\"row g-2 g-md-3 g-lg-4\">
        ";
        // line 327
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 327, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 328
            yield "            <div class=\"col-6 col-sm-6 col-md-4 col-lg-3\">
                <div class=\"card h-100 border-0 shadow-sm hover-shadow transition-all rounded-4 overflow-hidden\">
                    <div class=\"card-body p-2 p-sm-3 p-md-4\">
                        <div class=\"d-flex justify-content-between align-items-start mb-2 mb-md-3\">
                            <h5 class=\"card-title fw-bold mb-0 fs-6 fs-md-5\">";
            // line 332
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["type"], "name", [], "any", false, false, false, 332), 0, 25), "html", null, true);
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["type"], "name", [], "any", false, false, false, 332)) > 25)) {
                yield "...";
            }
            yield "</h5>
                            <span class=\"badge ";
            // line 333
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["type"], "isActive", [], "any", false, false, false, 333)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-secondary"));
            yield " px-2 py-1 ms-2 flex-shrink-0\" style=\"font-size:0.55rem;\">
                                ";
            // line 334
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["type"], "isActive", [], "any", false, false, false, 334)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Inactif"));
            yield "
                            </span>
                        </div>
                        <p class=\"card-text text-muted mb-2 mb-md-3 small\" style=\"min-height: 50px; font-size:0.7rem;\">
                            ";
            // line 338
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, $context["type"], "description", [], "any", true, true, false, 338)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "description", [], "any", false, false, false, 338), "Aucune description")) : ("Aucune description")), 0, 60), "html", null, true);
            yield "
                            ";
            // line 339
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["type"], "description", [], "any", false, false, false, 339)) > 60)) {
                yield "...";
            }
            // line 340
            yield "                        </p>
                        <div class=\"small text-muted\" style=\"font-size:0.6rem;\">
                            <i class=\"fas fa-calendar-alt me-1\"></i> ";
            // line 342
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "createdAt", [], "any", false, false, false, 342), "d/m/Y"), "html", null, true);
            yield "
                        </div>
                    </div>
                  
                    <div class=\"card-footer bg-transparent border-0 d-flex flex-wrap justify-content-between gap-1 pt-0 pb-2 pb-md-3 px-2 px-sm-3 px-md-4\">
                        <!-- Voir -->
                        <a href=\"";
            // line 348
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_type_promotion_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 348)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-info flex-fill\" style=\"font-size:0.6rem; padding:0.15rem 0.2rem;\">
                            <i class=\"fas fa-eye me-1\"></i> <span class=\"d-none d-sm-inline\">Voir</span>
                        </a>
                        <!-- Modifier -->
                        <a href=\"";
            // line 352
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_type_promotion_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 352)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary flex-fill\" style=\"font-size:0.6rem; padding:0.15rem 0.2rem;\">
                            <i class=\"fas fa-edit me-1\"></i> <span class=\"d-none d-sm-inline\">Modifier</span>
                        </a>
                        <!-- Activer/Désactiver -->
                        <form method=\"post\" action=\"";
            // line 356
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_type_promotion_toggle_status", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 356)]), "html", null, true);
            yield "\" class=\"flex-fill\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 357
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle-status" . CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 357))), "html", null, true);
            yield "\">
                            <button type=\"submit\" class=\"btn btn-sm ";
            // line 358
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["type"], "isActive", [], "any", false, false, false, 358)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("btn-outline-warning") : ("btn-outline-success"));
            yield " w-100\" style=\"font-size:0.6rem; padding:0.15rem 0.2rem;\">
                                <i class=\"fas ";
            // line 359
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["type"], "isActive", [], "any", false, false, false, 359)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-pause") : ("fa-play"));
            yield " me-1\"></i>
                                <span class=\"d-none d-sm-inline\">";
            // line 360
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["type"], "isActive", [], "any", false, false, false, 360)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
            yield "</span>
                            </button>
                        </form>
                        <!-- Supprimer -->
                        ";
            // line 364
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 365
                yield "                            <button type=\"button\" class=\"btn btn-sm btn-outline-danger flex-fill\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 365), "html", null, true);
                yield "\" style=\"font-size:0.6rem; padding:0.15rem 0.2rem;\">
                                <i class=\"fas fa-trash-alt me-1\"></i> <span class=\"d-none d-sm-inline\">Supprimer</span>
                            </button>
                        ";
            }
            // line 369
            yield "                    </div>
                </div>
            </div>

            <!-- ==========================================
                 MODAL DE SUPPRESSION
            ========================================== -->
            ";
            // line 376
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 377
                yield "            <div class=\"modal fade\" id=\"deleteModal";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 377), "html", null, true);
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
                            <h6 class=\"fs-6\">Supprimer ce type ?</h6>
                            <p class=\"text-muted small\">Cette action est irréversible.</p>
                            ";
                // line 390
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["type"], "promotions", [], "any", false, false, false, 390)) > 0)) {
                    // line 391
                    yield "                                <div class=\"alert alert-warning p-2 small mt-2\">
                                    <i class=\"fas fa-exclamation-circle me-2\"></i>
                                    Utilisé par <strong>";
                    // line 393
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["type"], "promotions", [], "any", false, false, false, 393)), "html", null, true);
                    yield "</strong> promotion(s). Impossible de supprimer.
                                </div>
                            ";
                }
                // line 396
                yield "                        </div>
                        <div class=\"modal-footer border-0 py-2\">
                            <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-bs-dismiss=\"modal\">Annuler</button>
                            ";
                // line 399
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["type"], "promotions", [], "any", false, false, false, 399)) == 0)) {
                    // line 400
                    yield "                                <form method=\"post\" action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_type_promotion_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 400)]), "html", null, true);
                    yield "\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 401
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 401))), "html", null, true);
                    yield "\">
                                    <button type=\"submit\" class=\"btn btn-danger btn-sm\">Supprimer</button>
                                </form>
                            ";
                } else {
                    // line 405
                    yield "                                <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-bs-dismiss=\"modal\">Fermer</button>
                            ";
                }
                // line 407
                yield "                        </div>
                    </div>
                </div>
            </div>
            ";
            }
            // line 412
            yield "        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 413
            yield "            <!-- Aucun résultat -->
            <div class=\"col-12\">
                <div class=\"card border-0 shadow-sm rounded-4 text-center py-4 py-md-5\">
                    <div class=\"card-body\">
                        <i class=\"fas fa-percent fa-4x text-muted mb-3 opacity-25\"></i>
                        <h5 class=\"text-muted fs-6 fs-md-5\">Aucun type de promotion trouvé</h5>
                        <p class=\"text-muted small\">Modifiez vos filtres ou créez un nouveau type.</p>
                        <a href=\"";
            // line 420
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_type_promotion_new");
            yield "\" class=\"btn btn-primary btn-sm mt-2\">
                            <i class=\"fas fa-plus-circle me-2\"></i> Nouveau type
                        </a>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['type'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 427
        yield "    </div>

    <!-- ==========================================
         PAGINATION
    ========================================== -->
    ";
        // line 432
        if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 432, $this->source); })()) > 1)) {
            // line 433
            yield "        <nav class=\"mt-3 mt-md-4\">
            <ul class=\"pagination pagination-sm justify-content-center flex-wrap gap-1\">
                ";
            // line 435
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 435, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 436
                yield "                    <li class=\"page-item ";
                yield ((($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 436, $this->source); })()))) ? ("active") : (""));
                yield "\">
                        <a class=\"page-link\" href=\"";
                // line 437
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_type_promotion_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 437, $this->source); })()), "request", [], "any", false, false, false, 437), "query", [], "any", false, false, false, 437), "all", [], "any", false, false, false, 437), ["page" => $context["page"]])), "html", null, true);
                yield "\" style=\"font-size:0.7rem; padding:0.25rem 0.5rem;\">
                            ";
                // line 438
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                yield "
                        </a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 442
            yield "            </ul>
        </nav>
    ";
        }
        // line 445
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
        return "admin/type_promotion/index.html.twig";
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
        return array (  734 => 445,  729 => 442,  719 => 438,  715 => 437,  710 => 436,  706 => 435,  702 => 433,  700 => 432,  693 => 427,  680 => 420,  671 => 413,  666 => 412,  659 => 407,  655 => 405,  648 => 401,  643 => 400,  641 => 399,  636 => 396,  630 => 393,  626 => 391,  624 => 390,  607 => 377,  605 => 376,  596 => 369,  588 => 365,  586 => 364,  579 => 360,  575 => 359,  571 => 358,  567 => 357,  563 => 356,  556 => 352,  549 => 348,  540 => 342,  536 => 340,  532 => 339,  528 => 338,  521 => 334,  517 => 333,  510 => 332,  504 => 328,  499 => 327,  484 => 315,  480 => 314,  476 => 313,  462 => 302,  441 => 284,  421 => 267,  406 => 255,  391 => 243,  373 => 227,  364 => 225,  359 => 224,  350 => 222,  346 => 221,  333 => 211,  326 => 207,  306 => 189,  293 => 188,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Types de promotion - HMA Market{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    /* ========================================
       CARTES
    ======================================== */
    .hover-shadow {
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .hover-shadow:hover {
        transform: translateY(-5px);
        box-shadow: 0 1rem 2rem rgba(0,0,0,0.1) !important;
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

    /* ========================================
       RESPONSIVE - FILTRES
    ======================================== */
    .filter-label {
        display: block !important;
        width: 100% !important;
        font-size: 0.7rem !important;
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
        
        /* Cartes des types */
        .card-body {
            padding: 0.75rem !important;
        }
        .card-footer {
            padding: 0.5rem 0.75rem !important;
        }
        .card-title {
            font-size: 0.85rem !important;
        }
        .card-text {
            font-size: 0.7rem !important;
            min-height: 50px !important;
        }
        .badge {
            font-size: 0.55rem !important;
            padding: 0.15rem 0.4rem !important;
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
                <i class=\"fas fa-cog me-2 text-primary\"></i>Types de promotion
            </h1>
            <p class=\"text-muted mb-0 small d-none d-sm-block\">
                Gérez les types de réduction (pourcentage, montant fixe, etc.)
            </p>
            <p class=\"text-muted mb-0 small d-block d-sm-none\">
                Types de réduction
            </p>
        </div>
        <div class=\"d-flex gap-1 gap-sm-2 flex-wrap w-100 w-sm-auto\">
            <a href=\"{{ path('app_admin_promotion_index') }}\" class=\"btn btn-outline-primary btn-sm flex-grow-1 flex-sm-grow-0\">
                <i class=\"fas fa-list me-1\"></i> <span class=\"d-none d-sm-inline\">Voir les promotions</span>
                <span class=\"d-inline d-sm-none\">Promotions</span>
            </a>
            <a href=\"{{ path('app_admin_type_promotion_new') }}\" class=\"btn btn-primary btn-sm flex-grow-1 flex-sm-grow-0\">
                <i class=\"fas fa-plus-circle me-1\"></i> <span class=\"d-none d-sm-inline\">Nouveau type</span>
                <span class=\"d-inline d-sm-none\">Nouveau</span>
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
         STATISTIQUES - 3 CARTES
    ========================================== -->
    <div class=\"card shadow-sm border-0 mb-3 mb-md-4\">
        <div class=\"card-header bg-white py-2 py-md-3 border-0\">
            <h5 class=\"mb-0 fs-6 fs-md-5\"><i class=\"fas fa-chart-pie me-2 text-primary\"></i>Statistiques</h5>
        </div>
        <div class=\"card-body p-2 p-md-3\">
            <div class=\"row g-2 g-md-3\">
                <!-- Total -->
                <div class=\"col-6 col-md-4\">
                    <div class=\"stat-card p-2 p-md-3 bg-light rounded-3 h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted small text-uppercase fw-bold d-block\" style=\"font-size:0.6rem;\">Total</span>
                                <h3 class=\"mb-0 fw-bold fs-4 fs-md-3\">{{ totalFiltered }}</h3>
                            </div>
                            <i class=\"fas fa-tag fa-2x text-primary opacity-50\" style=\"font-size:1.5rem;\"></i>
                        </div>
                    </div>
                </div>
                <!-- Actifs -->
                <div class=\"col-6 col-md-4\">
                    <div class=\"stat-card p-2 p-md-3 bg-light rounded-3 h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted small text-uppercase fw-bold d-block\" style=\"font-size:0.6rem;\">Actifs</span>
                                <h3 class=\"mb-0 fw-bold fs-4 fs-md-3 text-success\">{{ activeFiltered }}</h3>
                            </div>
                            <i class=\"fas fa-check-circle fa-2x text-success opacity-50\" style=\"font-size:1.5rem;\"></i>
                        </div>
                    </div>
                </div>
                <!-- Inactifs -->
                <div class=\"col-12 col-md-4\">
                    <div class=\"stat-card p-2 p-md-3 bg-light rounded-3 h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted small text-uppercase fw-bold d-block\" style=\"font-size:0.6rem;\">Inactifs</span>
                                <h3 class=\"mb-0 fw-bold fs-4 fs-md-3 text-danger\">{{ inactiveFiltered }}</h3>
                            </div>
                            <i class=\"fas fa-ban fa-2x text-danger opacity-50\" style=\"font-size:1.5rem;\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==========================================
         FILTRES - RECHERCHE ET STATUT SUR UNE LIGNE
    ========================================== -->
    <div class=\"card shadow-sm border-0 mb-3 mb-md-4\">
        <div class=\"card-header bg-white py-2 py-md-3 border-0 d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <h5 class=\"mb-0 fs-6 fs-md-5\"><i class=\"fas fa-filter me-2 text-primary\"></i>Filtres</h5>
            <div class=\"d-flex gap-1 gap-md-2\">
                <a href=\"{{ path('app_admin_type_promotion_index') }}\" class=\"btn btn-outline-secondary btn-sm\">
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
                    <!-- Recherche - 100% sur mobile, 6 sur desktop -->
                    <div class=\"col-12 col-md-6\">
                        <label class=\"form-label fw-semibold filter-label\">Recherche</label>
                        <div class=\"input-group\">
                            <span class=\"input-group-text bg-white border-end-0\" style=\"padding:0.2rem 0.4rem;\">
                                <i class=\"fas fa-search text-muted\" style=\"font-size:0.7rem;\"></i>
                            </span>
                            <input type=\"text\" name=\"search\" value=\"{{ search }}\" 
                                   class=\"form-control border-start-0\" 
                                   placeholder=\"Nom, description...\" 
                                   style=\"font-size:0.7rem; padding:0.2rem 0.4rem; width:100%;\">
                        </div>
                    </div>
                    
                    <!-- Statut - 100% sur mobile, 6 sur desktop -->
                    <div class=\"col-12 col-md-6\">
                        <label class=\"form-label fw-semibold filter-label\">Statut</label>
                        <select name=\"status\" class=\"form-select\" style=\"font-size:0.7rem; padding:0.2rem 0.4rem; width:100%;\">
                            <option value=\"all\" {{ status == 'all' ? 'selected' }}>Tous</option>
                            <option value=\"active\" {{ status == 'active' ? 'selected' }}>Actifs</option>
                            <option value=\"inactive\" {{ status == 'inactive' ? 'selected' }}>Inactifs</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- ==========================================
         GRILLE DES TYPES - 2 CARTES SUR MOBILE
    ========================================== -->
    <div class=\"row g-2 g-md-3 g-lg-4\">
        {% for type in types %}
            <div class=\"col-6 col-sm-6 col-md-4 col-lg-3\">
                <div class=\"card h-100 border-0 shadow-sm hover-shadow transition-all rounded-4 overflow-hidden\">
                    <div class=\"card-body p-2 p-sm-3 p-md-4\">
                        <div class=\"d-flex justify-content-between align-items-start mb-2 mb-md-3\">
                            <h5 class=\"card-title fw-bold mb-0 fs-6 fs-md-5\">{{ type.name|slice(0, 25) }}{% if type.name|length > 25 %}...{% endif %}</h5>
                            <span class=\"badge {{ type.isActive ? 'bg-success' : 'bg-secondary' }} px-2 py-1 ms-2 flex-shrink-0\" style=\"font-size:0.55rem;\">
                                {{ type.isActive ? 'Actif' : 'Inactif' }}
                            </span>
                        </div>
                        <p class=\"card-text text-muted mb-2 mb-md-3 small\" style=\"min-height: 50px; font-size:0.7rem;\">
                            {{ type.description|default('Aucune description')|slice(0, 60) }}
                            {% if type.description|length > 60 %}...{% endif %}
                        </p>
                        <div class=\"small text-muted\" style=\"font-size:0.6rem;\">
                            <i class=\"fas fa-calendar-alt me-1\"></i> {{ type.createdAt|date('d/m/Y') }}
                        </div>
                    </div>
                  
                    <div class=\"card-footer bg-transparent border-0 d-flex flex-wrap justify-content-between gap-1 pt-0 pb-2 pb-md-3 px-2 px-sm-3 px-md-4\">
                        <!-- Voir -->
                        <a href=\"{{ path('app_admin_type_promotion_show', {id: type.id}) }}\" class=\"btn btn-sm btn-outline-info flex-fill\" style=\"font-size:0.6rem; padding:0.15rem 0.2rem;\">
                            <i class=\"fas fa-eye me-1\"></i> <span class=\"d-none d-sm-inline\">Voir</span>
                        </a>
                        <!-- Modifier -->
                        <a href=\"{{ path('app_admin_type_promotion_edit', {id: type.id}) }}\" class=\"btn btn-sm btn-outline-primary flex-fill\" style=\"font-size:0.6rem; padding:0.15rem 0.2rem;\">
                            <i class=\"fas fa-edit me-1\"></i> <span class=\"d-none d-sm-inline\">Modifier</span>
                        </a>
                        <!-- Activer/Désactiver -->
                        <form method=\"post\" action=\"{{ path('app_admin_type_promotion_toggle_status', {id: type.id}) }}\" class=\"flex-fill\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('toggle-status' ~ type.id) }}\">
                            <button type=\"submit\" class=\"btn btn-sm {{ type.isActive ? 'btn-outline-warning' : 'btn-outline-success' }} w-100\" style=\"font-size:0.6rem; padding:0.15rem 0.2rem;\">
                                <i class=\"fas {{ type.isActive ? 'fa-pause' : 'fa-play' }} me-1\"></i>
                                <span class=\"d-none d-sm-inline\">{{ type.isActive ? 'Désactiver' : 'Activer' }}</span>
                            </button>
                        </form>
                        <!-- Supprimer -->
                        {% if is_granted('ROLE_ADMIN') %}
                            <button type=\"button\" class=\"btn btn-sm btn-outline-danger flex-fill\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal{{ type.id }}\" style=\"font-size:0.6rem; padding:0.15rem 0.2rem;\">
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
            <div class=\"modal fade\" id=\"deleteModal{{ type.id }}\" tabindex=\"-1\" aria-hidden=\"true\">
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
                            <h6 class=\"fs-6\">Supprimer ce type ?</h6>
                            <p class=\"text-muted small\">Cette action est irréversible.</p>
                            {% if type.promotions|length > 0 %}
                                <div class=\"alert alert-warning p-2 small mt-2\">
                                    <i class=\"fas fa-exclamation-circle me-2\"></i>
                                    Utilisé par <strong>{{ type.promotions|length }}</strong> promotion(s). Impossible de supprimer.
                                </div>
                            {% endif %}
                        </div>
                        <div class=\"modal-footer border-0 py-2\">
                            <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-bs-dismiss=\"modal\">Annuler</button>
                            {% if type.promotions|length == 0 %}
                                <form method=\"post\" action=\"{{ path('app_admin_type_promotion_delete', {id: type.id}) }}\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ type.id) }}\">
                                    <button type=\"submit\" class=\"btn btn-danger btn-sm\">Supprimer</button>
                                </form>
                            {% else %}
                                <button type=\"button\" class=\"btn btn-secondary btn-sm\" data-bs-dismiss=\"modal\">Fermer</button>
                            {% endif %}
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
                        <i class=\"fas fa-percent fa-4x text-muted mb-3 opacity-25\"></i>
                        <h5 class=\"text-muted fs-6 fs-md-5\">Aucun type de promotion trouvé</h5>
                        <p class=\"text-muted small\">Modifiez vos filtres ou créez un nouveau type.</p>
                        <a href=\"{{ path('app_admin_type_promotion_new') }}\" class=\"btn btn-primary btn-sm mt-2\">
                            <i class=\"fas fa-plus-circle me-2\"></i> Nouveau type
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
                        <a class=\"page-link\" href=\"{{ path('app_admin_type_promotion_index', app.request.query.all|merge({'page': page})) }}\" style=\"font-size:0.7rem; padding:0.25rem 0.5rem;\">
                            {{ page }}
                        </a>
                    </li>
                {% endfor %}
            </ul>
        </nav>
    {% endif %}
</div>
{% endblock %}", "admin/type_promotion/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\type_promotion\\index.html.twig");
    }
}
