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

/* admin/stock_batch/all.html.twig */
class __TwigTemplate_8daf6f41c066d2e5211eb089ec63e557 extends Template
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
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/stock_batch/all.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/stock_batch/all.html.twig"));

        $this->parent = $this->load("base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        yield "Gestion globale des lots - HMA Market";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "<div class=\"container-fluid px-4\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Tableau de bord
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">
                        <i class=\"fas fa-cubes me-1\"></i> Gestion des lots
                    </li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0\">
                <i class=\"fas fa-cubes me-2 text-primary\"></i>
                Gestion globale des lots
            </h1>
            <p class=\"text-muted mt-2\">
                <i class=\"fas fa-info-circle me-1\"></i>
                Visualisez et gérez tous les lots de stock de votre entreprise
            </p>
        </div>
        <div class=\"d-flex gap-2\">
            <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-outline-success dropdown-toggle\" data-bs-toggle=\"dropdown\">
                    <i class=\"fas fa-file-excel me-1\"></i> Excel
                </button>
                <ul class=\"dropdown-menu dropdown-menu-end\">
                    <li>
                        <a class=\"dropdown-item\" href=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_export_excel", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "request", [], "any", false, false, false, 39), "query", [], "any", false, false, false, 39), "all", [], "any", false, false, false, 39)), "html", null, true);
        yield "\">
                            <i class=\"fas fa-download me-2\"></i> Exporter (filtres actuels)
                        </a>
                    </li>
                    <li>
                        <a class=\"dropdown-item\" href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#importExcelModal\">
                            <i class=\"fas fa-upload me-2\"></i> Importer (mise à jour)
                        </a>
                    </li>
                    <li><hr class=\"dropdown-divider\"></li>
                    <li>
                        <a class=\"dropdown-item\" href=\"";
        // line 50
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_export_excel_template");
        yield "\">
                            <i class=\"fas fa-download me-2\"></i> Télécharger template
                        </a>
                    </li>
                </ul>
            </div>

            <a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_export_view");
        yield "\" class=\"btn btn-outline-info\">
                <i class=\"fas fa-chart-line me-2\"></i> Voir rapport
            </a>

            <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#printOptionsModal\">
                <i class=\"fas fa-print me-2\"></i> Imprimer sélection
            </button>
        </div>
    

    <!-- Statistiques globales -->
    <div class=\"row mb-4\">
        <div class=\"col-md-3\">
            <div class=\"card border-0 bg-primary bg-opacity-10 shadow-sm\">
                <div class=\"card-body text-center\">
                    <i class=\"fas fa-boxes fa-2x text-white mb-2\"></i>
                    <h3 class=\"mb-0 text-white\">";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_batches", [], "any", true, true, false, 73)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 73, $this->source); })()), "total_batches", [], "any", false, false, false, 73), 0)) : (0)), "html", null, true);
        yield "</h3>
                    <small class=\"text-white-50\">Total lots</small>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card border-0 bg-success bg-opacity-10 shadow-sm\">
                <div class=\"card-body text-center\">
                    <i class=\"fas fa-check-circle fa-2x text-white mb-2\"></i>
                    <h3 class=\"mb-0 text-white\">";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "active_batches", [], "any", true, true, false, 82)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 82, $this->source); })()), "active_batches", [], "any", false, false, false, 82), 0)) : (0)), "html", null, true);
        yield "</h3>
                    <small class=\"text-white-50\">Lots actifs</small>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card border-0 bg-danger bg-opacity-10 shadow-sm\">
                <div class=\"card-body text-center\">
                    <i class=\"fas fa-skull-crossbones fa-2x text-white mb-2\"></i>
                    <h3 class=\"mb-0 text-white\">";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "expired_batches", [], "any", true, true, false, 91)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 91, $this->source); })()), "expired_batches", [], "any", false, false, false, 91), 0)) : (0)), "html", null, true);
        yield "</h3>
                    <small class=\"text-white-50\">Lots expirés</small>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card border-0 bg-warning bg-opacity-10 shadow-sm\">
                <div class=\"card-body text-center\">
                    <i class=\"fas fa-hourglass-half fa-2x text-white mb-2\"></i>
                    <h3 class=\"mb-0 text-white\">";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "expiring_soon_batches", [], "any", true, true, false, 100)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 100, $this->source); })()), "expiring_soon_batches", [], "any", false, false, false, 100), 0)) : (0)), "html", null, true);
        yield "</h3>
                    <small class=\"text-white-50\">Expiration < 30j</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Deuxième ligne de stats -->
    <div class=\"row mb-4\">
        <div class=\"col-md-4\">
            <div class=\"card border-0 bg-info bg-opacity-10 shadow-sm\">
                <div class=\"card-body text-center\">
                    <i class=\"fas fa-chart-line fa-2x text-white mb-2\"></i>
                    <h3 class=\"mb-0 text-white\">";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_quantity", [], "any", true, true, false, 113)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 113, $this->source); })()), "total_quantity", [], "any", false, false, false, 113), 0)) : (0)), 0, ",", " "), "html", null, true);
        yield "</h3>
                    <small class=\"text-white-50\">Unités en stock</small>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card border-0 bg-secondary bg-opacity-10 shadow-sm\">
                <div class=\"card-body text-center\">
                    <i class=\"fas fa-map-marker-alt fa-2x text-white mb-2\"></i>
                    <h3 class=\"mb-0 text-white\">";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["locations"]) || array_key_exists("locations", $context) ? $context["locations"] : (function () { throw new RuntimeError('Variable "locations" does not exist.', 122, $this->source); })())), "html", null, true);
        yield "</h3>
                    <small class=\"text-white-50\">Emplacements distincts</small>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card border-0 bg-light shadow-sm\">
                <div class=\"card-body text-center\">
                    <i class=\"fas fa-tag fa-2x text-dark mb-2\"></i>
                    <h3 class=\"mb-0\">";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 131, $this->source); })())), "html", null, true);
        yield "</h3>
                    <small class=\"text-muted\">Produits concernés</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Filtres -->
    <div class=\"card border-0 shadow-sm mb-4\">
        <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0\"><i class=\"fas fa-filter me-2 text-primary\"></i> Filtres</h5>
            <div class=\"d-flex gap-2\">
                <a href=\"";
        // line 143
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_all");
        yield "\" class=\"btn btn-outline-secondary btn-sm\">
                    <i class=\"fas fa-undo me-1\"></i> Effacer
                </a>
                <button type=\"submit\" form=\"filter-form\" class=\"btn btn-primary btn-sm\">
                    <i class=\"fas fa-search me-1\"></i> Filtrer
                </button>
            </div>
        </div>
        <div class=\"card-body\">
            <form method=\"get\" id=\"filter-form\">
                <div class=\"row g-3\">
                    <div class=\"col-md-3\">
                        <label class=\"form-label fw-bold\">Recherche</label>
                        <input type=\"text\" name=\"search\" class=\"form-control\" 
                               placeholder=\"N° lot ou produit...\" value=\"";
        // line 157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "search", [], "any", true, true, false, 157)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 157, $this->source); })()), "search", [], "any", false, false, false, 157), "")) : ("")), "html", null, true);
        yield "\">
                    </div>
                    <div class=\"col-md-2\">
                        <label class=\"form-label fw-bold\">Produit</label>
                        <select name=\"product_id\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            ";
        // line 163
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 163, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 164
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 164), "html", null, true);
            yield "\" ";
            yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "product_id", [], "any", true, true, false, 164)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 164, $this->source); })()), "product_id", [], "any", false, false, false, 164), "")) : ("")) == CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 164))) ? ("selected") : (""));
            yield ">
                                    ";
            // line 165
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 165)), "truncate", [25], "method", false, false, false, 165), "html", null, true);
            yield "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        yield "                        </select>
                    </div>
                    <div class=\"col-md-2\">
                        <label class=\"form-label fw-bold\">Statut</label>
                        <select name=\"status\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"active\" ";
        // line 174
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", true, true, false, 174)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 174, $this->source); })()), "status", [], "any", false, false, false, 174), "")) : ("")) == "active")) ? ("selected") : (""));
        yield ">Actifs</option>
                            <option value=\"inactive\" ";
        // line 175
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", true, true, false, 175)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 175, $this->source); })()), "status", [], "any", false, false, false, 175), "")) : ("")) == "inactive")) ? ("selected") : (""));
        yield ">Inactifs</option>
                        </select>
                    </div>
                    <div class=\"col-md-3\">
                        <label class=\"form-label fw-bold\">Expiration</label>
                        <select name=\"expiry_status\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"expired\" ";
        // line 182
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "expiry_status", [], "any", true, true, false, 182)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 182, $this->source); })()), "expiry_status", [], "any", false, false, false, 182), "")) : ("")) == "expired")) ? ("selected") : (""));
        yield ">Expirés</option>
                            <option value=\"expiring_soon\" ";
        // line 183
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "expiry_status", [], "any", true, true, false, 183)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 183, $this->source); })()), "expiry_status", [], "any", false, false, false, 183), "")) : ("")) == "expiring_soon")) ? ("selected") : (""));
        yield ">Expire bientôt</option>
                            <option value=\"not_expiring\" ";
        // line 184
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "expiry_status", [], "any", true, true, false, 184)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 184, $this->source); })()), "expiry_status", [], "any", false, false, false, 184), "")) : ("")) == "not_expiring")) ? ("selected") : (""));
        yield ">Non expirés</option>
                        </select>
                    </div>
                    <div class=\"col-md-2\">
                        <label class=\"form-label fw-bold\">Emplacement</label>
                        <select name=\"location\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            ";
        // line 191
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(((array_key_exists("locations", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["locations"]) || array_key_exists("locations", $context) ? $context["locations"] : (function () { throw new RuntimeError('Variable "locations" does not exist.', 191, $this->source); })()), [])) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["loc"]) {
            // line 192
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["loc"], "html", null, true);
            yield "\" ";
            yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "location", [], "any", true, true, false, 192)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 192, $this->source); })()), "location", [], "any", false, false, false, 192), "")) : ("")) == $context["loc"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["loc"], "html", null, true);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['loc'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 194
        yield "                        </select>
                    </div>
                </div>
                
                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-2\">
                        <label class=\"form-label fw-bold\">Stock faible</label>
                        <select name=\"low_stock\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"yes\" ";
        // line 203
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "low_stock", [], "any", true, true, false, 203)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 203, $this->source); })()), "low_stock", [], "any", false, false, false, 203), "")) : ("")) == "yes")) ? ("selected") : (""));
        yield ">≤ 10 unités</option>
                        </select>
                    </div>
                    <div class=\"col-md-2\">
                        <label class=\"form-label fw-bold\">Exp. du</label>
                        <input type=\"date\" name=\"date_from\" class=\"form-control\" value=\"";
        // line 208
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", true, true, false, 208)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 208, $this->source); })()), "date_from", [], "any", false, false, false, 208), "")) : ("")), "html", null, true);
        yield "\">
                    </div>
                    <div class=\"col-md-2\">
                        <label class=\"form-label fw-bold\">Exp. au</label>
                        <input type=\"date\" name=\"date_to\" class=\"form-control\" value=\"";
        // line 212
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", true, true, false, 212)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 212, $this->source); })()), "date_to", [], "any", false, false, false, 212), "")) : ("")), "html", null, true);
        yield "\">
                    </div>
                    <div class=\"col-md-3\">
                        <label class=\"form-label fw-bold\">Trier par</label>
                        <select name=\"sort\" class=\"form-select\">
                            <option value=\"batch_number\" ";
        // line 217
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 217)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 217, $this->source); })()), "sort", [], "any", false, false, false, 217), "expiry_date")) : ("expiry_date")) == "batch_number")) ? ("selected") : (""));
        yield ">N° lot</option>
                            <option value=\"p.name\" ";
        // line 218
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 218)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 218, $this->source); })()), "sort", [], "any", false, false, false, 218), "expiry_date")) : ("expiry_date")) == "p.name")) ? ("selected") : (""));
        yield ">Produit</option>
                            <option value=\"expiry_date\" ";
        // line 219
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 219)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 219, $this->source); })()), "sort", [], "any", false, false, false, 219), "expiry_date")) : ("expiry_date")) == "expiry_date")) ? ("selected") : (""));
        yield ">Date expiration</option>
                            <option value=\"current_quantity\" ";
        // line 220
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 220)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 220, $this->source); })()), "sort", [], "any", false, false, false, 220), "expiry_date")) : ("expiry_date")) == "current_quantity")) ? ("selected") : (""));
        yield ">Quantité</option>
                            <option value=\"location\" ";
        // line 221
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 221)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 221, $this->source); })()), "sort", [], "any", false, false, false, 221), "expiry_date")) : ("expiry_date")) == "location")) ? ("selected") : (""));
        yield ">Emplacement</option>
                        </select>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"d-flex gap-2\">
                            <select name=\"direction\" class=\"form-select w-50\">
                                <option value=\"asc\" ";
        // line 227
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "direction", [], "any", true, true, false, 227)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 227, $this->source); })()), "direction", [], "any", false, false, false, 227), "asc")) : ("asc")) == "asc")) ? ("selected") : (""));
        yield ">Croissant</option>
                                <option value=\"desc\" ";
        // line 228
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "direction", [], "any", true, true, false, 228)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 228, $this->source); })()), "direction", [], "any", false, false, false, 228), "asc")) : ("asc")) == "desc")) ? ("selected") : (""));
        yield ">Décroissant</option>
                            </select>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Tableau des lots -->
    <div class=\"card border-0 shadow-sm\">
        <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0\"><i class=\"fas fa-list me-2\"></i> Liste des lots</h5>
            <div class=\"d-flex gap-2 align-items-center\">
                <span class=\"badge bg-secondary\">";
        // line 242
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["batches"]) || array_key_exists("batches", $context) ? $context["batches"] : (function () { throw new RuntimeError('Variable "batches" does not exist.', 242, $this->source); })())), "html", null, true);
        yield " lot(s)</span>
                <button type=\"button\" class=\"btn btn-sm btn-outline-primary\" id=\"selectAllBtn\">
                    <i class=\"fas fa-check-double me-1\"></i> Tout sélectionner
                </button>
                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\" id=\"deselectAllBtn\">
                    <i class=\"fas fa-times me-1\"></i> Désélectionner
                </button>
            </div>
        </div>
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover align-middle mb-0\">
                    <thead class=\"table-light\">
                        <tr>
                            <th style=\"width: 40px;\"><input type=\"checkbox\" id=\"select-all-checkbox\" class=\"form-check-input\"></th>
                            <th>N° lot</th>
                            <th>Produit</th>
                            <th>Emplacement</th>
                            <th>Quantité</th>
                            <th>Prix unitaire</th>
                            <th>Expiration</th>
                            <th>Statut</th>
                            <th class=\"text-center\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 268
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["batches"]) || array_key_exists("batches", $context) ? $context["batches"] : (function () { throw new RuntimeError('Variable "batches" does not exist.', 268, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["batch"]) {
            // line 269
            yield "                            ";
            $context["isExpired"] = (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 269) && (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 269) < $this->extensions['Twig\Extension\CoreExtension']->convertDate()));
            // line 270
            yield "                            ";
            $context["isExpiringSoon"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 270) && (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 270) >= $this->extensions['Twig\Extension\CoreExtension']->convertDate())) && (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 270) < $this->extensions['Twig\Extension\CoreExtension']->convertDate("+30 days")));
            // line 271
            yield "                            ";
            $context["isLowStock"] = (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 271) <= 10);
            // line 272
            yield "                            
                            <tr class=\"
                                ";
            // line 274
            if ((($tmp = (isset($context["isExpired"]) || array_key_exists("isExpired", $context) ? $context["isExpired"] : (function () { throw new RuntimeError('Variable "isExpired" does not exist.', 274, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "table-danger
                                ";
            } elseif ((($tmp =             // line 275
(isset($context["isExpiringSoon"]) || array_key_exists("isExpiringSoon", $context) ? $context["isExpiringSoon"] : (function () { throw new RuntimeError('Variable "isExpiringSoon" does not exist.', 275, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "table-warning
                                ";
            } elseif ((($tmp =             // line 276
(isset($context["isLowStock"]) || array_key_exists("isLowStock", $context) ? $context["isLowStock"] : (function () { throw new RuntimeError('Variable "isLowStock" does not exist.', 276, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "table-info
                                ";
            }
            // line 278
            yield "                            \">
                                <td><input type=\"checkbox\" class=\"form-check-input batch-checkbox\" value=\"";
            // line 279
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 279), "html", null, true);
            yield "\"></td>
                                <td><strong>";
            // line 280
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "batchNumber", [], "any", false, false, false, 280), "html", null, true);
            yield "</strong></td>
                                <td>
                                    <a href=\"";
            // line 282
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "product", [], "any", false, false, false, 282), "id", [], "any", false, false, false, 282)]), "html", null, true);
            yield "\" class=\"text-decoration-none\">
                                        <i class=\"fas fa-box me-1\"></i> ";
            // line 283
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "product", [], "any", false, false, false, 283), "name", [], "any", false, false, false, 283)), "truncate", [35], "method", false, false, false, 283), "html", null, true);
            yield "
                                    </a>
                                    <br><small class=\"text-muted\"><i class=\"fas fa-barcode me-1\"></i>";
            // line 285
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "product", [], "any", false, false, false, 285), "barcode", [], "any", false, false, false, 285), "html", null, true);
            yield "</small>
                                </td>
                                <td>
                                    ";
            // line 288
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "location", [], "any", false, false, false, 288)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 289
                yield "                                        <span class=\"badge bg-info text-dark\"><i class=\"fas fa-map-marker-alt me-1\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "location", [], "any", false, false, false, 289), "html", null, true);
                yield "</span>
                                    ";
            } else {
                // line 291
                yield "                                        <span class=\"text-muted\">—</span>
                                    ";
            }
            // line 293
            yield "                                </td>
                                <td>
                                    <div>
                                        <span class=\"fw-bold\">";
            // line 296
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 296), "html", null, true);
            yield "</span>
                                        <small class=\"text-muted\">/ ";
            // line 297
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "initialQuantity", [], "any", false, false, false, 297), "html", null, true);
            yield "</small>
                                        <div class=\"progress mt-1\" style=\"height: 4px; width: 100px;\">
                                            ";
            // line 299
            $context["percentage"] = Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 299) / CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "initialQuantity", [], "any", false, false, false, 299)) * 100));
            // line 300
            yield "                                            <div class=\"progress-bar ";
            if (((isset($context["percentage"]) || array_key_exists("percentage", $context) ? $context["percentage"] : (function () { throw new RuntimeError('Variable "percentage" does not exist.', 300, $this->source); })()) <= 10)) {
                yield "bg-danger";
            } elseif (((isset($context["percentage"]) || array_key_exists("percentage", $context) ? $context["percentage"] : (function () { throw new RuntimeError('Variable "percentage" does not exist.', 300, $this->source); })()) <= 30)) {
                yield "bg-warning";
            } else {
                yield "bg-success";
            }
            yield "\" style=\"width: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["percentage"]) || array_key_exists("percentage", $context) ? $context["percentage"] : (function () { throw new RuntimeError('Variable "percentage" does not exist.', 300, $this->source); })()), "html", null, true);
            yield "%\"></div>
                                        </div>
                                        ";
            // line 302
            if ((($tmp = (isset($context["isLowStock"]) || array_key_exists("isLowStock", $context) ? $context["isLowStock"] : (function () { throw new RuntimeError('Variable "isLowStock" does not exist.', 302, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<br><span class=\"badge bg-warning text-dark mt-1\">Stock faible</span>";
            }
            // line 303
            yield "                                    </div>
                                </td>
                                <td>";
            // line 305
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "unitPrice", [], "any", false, false, false, 305), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "hmaService", [], "any", false, false, false, 305)), "html", null, true);
            yield "</td>
                                <td>
                                    ";
            // line 307
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 307)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 308
                yield "                                        <div>
                                            <span class=\"text-dark fw-bold\">";
                // line 309
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 309), "d/m/Y"), "html", null, true);
                yield "</span>
                                            ";
                // line 310
                if ((($tmp = (isset($context["isExpired"]) || array_key_exists("isExpired", $context) ? $context["isExpired"] : (function () { throw new RuntimeError('Variable "isExpired" does not exist.', 310, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<br><span class=\"badge bg-danger mt-1\">Expiré</span>
                                            ";
                } elseif ((($tmp =                 // line 311
(isset($context["isExpiringSoon"]) || array_key_exists("isExpiringSoon", $context) ? $context["isExpiringSoon"] : (function () { throw new RuntimeError('Variable "isExpiringSoon" does not exist.', 311, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<br><span class=\"badge bg-warning text-dark mt-1\">J-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 311), "diff", [$this->extensions['Twig\Extension\CoreExtension']->convertDate()], "method", false, false, false, 311), "days", [], "any", false, false, false, 311), "html", null, true);
                    yield "</span>
                                            ";
                }
                // line 313
                yield "                                        </div>
                                    ";
            } else {
                // line 315
                yield "                                        <span class=\"text-muted\">—</span>
                                    ";
            }
            // line 317
            yield "                                </td>
                                <td>
                                    <span class=\"badge ";
            // line 319
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 319)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-secondary"));
            yield "\">
                                        ";
            // line 320
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 320)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Inactif"));
            yield "
                                    </span>
                                </td>
                                <td class=\"text-center\">
                                    <div class=\"btn-group\" role=\"group\">
                                        <a href=\"";
            // line 325
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_print", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 325)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-secondary\" title=\"Imprimer\" target=\"_blank\"><i class=\"fas fa-print\"></i></a>
                                        <a href=\"";
            // line 326
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 326)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary\" title=\"Voir\"><i class=\"fas fa-eye\"></i></a>
                                        <a href=\"";
            // line 327
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 327)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-warning\" title=\"Modifier\"><i class=\"fas fa-map-marker-alt\"></i></a>
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-info toggle-batch-btn\" data-batch-id=\"";
            // line 328
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 328), "html", null, true);
            yield "\" data-is-active=\"";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 328)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("0"));
            yield "\" data-batch-number=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "batchNumber", [], "any", false, false, false, 328), "html", null, true);
            yield "\" data-token=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle-batch" . CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 328))), "html", null, true);
            yield "\" title=\"";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 328)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
            yield "\"><i class=\"fas ";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 328)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-toggle-on") : ("fa-toggle-off"));
            yield "\"></i></button>
                                        ";
            // line 329
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "stockMovements", [], "any", false, false, false, 329)) == 0))) {
                // line 330
                yield "                                            <button type=\"button\" class=\"btn btn-sm btn-outline-danger delete-batch-btn\" data-batch-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 330), "html", null, true);
                yield "\" data-batch-number=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "batchNumber", [], "any", false, false, false, 330), "html", null, true);
                yield "\" data-token=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete-batch" . CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 330))), "html", null, true);
                yield "\" title=\"Supprimer\"><i class=\"fas fa-trash\"></i></button>
                                        ";
            }
            // line 332
            yield "                                    </div>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 335
        if (!$context['_iterated']) {
            // line 336
            yield "                            <tr>
                                <td colspan=\"9\" class=\"text-center py-5\">
                                    <i class=\"fas fa-box-open fa-3x text-muted mb-3\"></i>
                                    <p class=\"text-muted mb-0\">Aucun lot trouvé</p>
                                    <p class=\"text-muted small\">Modifiez vos filtres ou créez des achats pour générer des lots</p>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['batch'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 344
        yield "                    </tbody>
                </table>
            </div>
        </div>
        
        <!-- Pagination -->
        ";
        // line 350
        if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 350, $this->source); })()) > 1)) {
            // line 351
            yield "        <div class=\"card-footer bg-white\">
            <nav aria-label=\"Pagination\">
                <ul class=\"pagination justify-content-center mb-0\">
                    ";
            // line 354
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 354, $this->source); })()) > 1)) {
                // line 355
                yield "                        <li class=\"page-item\"><a class=\"page-link\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_all", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 355, $this->source); })()), "request", [], "any", false, false, false, 355), "query", [], "any", false, false, false, 355), "all", [], "any", false, false, false, 355), ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 355, $this->source); })()) - 1)])), "html", null, true);
                yield "\"><i class=\"fas fa-chevron-left\"></i> Précédent</a></li>
                    ";
            }
            // line 357
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 357, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 358
                yield "                        <li class=\"page-item ";
                yield ((($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 358, $this->source); })()))) ? ("active") : (""));
                yield "\"><a class=\"page-link\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_all", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 358, $this->source); })()), "request", [], "any", false, false, false, 358), "query", [], "any", false, false, false, 358), "all", [], "any", false, false, false, 358), ["page" => $context["page"]])), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                yield "</a></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 360
            yield "                    ";
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 360, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 360, $this->source); })()))) {
                // line 361
                yield "                        <li class=\"page-item\"><a class=\"page-link\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_all", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 361, $this->source); })()), "request", [], "any", false, false, false, 361), "query", [], "any", false, false, false, 361), "all", [], "any", false, false, false, 361), ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 361, $this->source); })()) + 1)])), "html", null, true);
                yield "\">Suivant <i class=\"fas fa-chevron-right\"></i></a></li>
                    ";
            }
            // line 363
            yield "                </ul>
            </nav>
        </div>
        ";
        }
        // line 367
        yield "    </div>
</div>

<!-- Modale impression -->
<div class=\"modal fade\" id=\"printOptionsModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-primary text-white\">
                <h5 class=\"modal-title\"><i class=\"fas fa-print me-2\"></i> Options d'impression</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"alert alert-info\"><i class=\"fas fa-info-circle me-2\"></i> <span id=\"selectedCount\">0</span> lot(s) sélectionné(s) dans le tableau</div>
                <div class=\"d-grid gap-2\">
                    <button type=\"button\" class=\"btn btn-primary\" id=\"print-selected\"><i class=\"fas fa-print me-2\"></i> Imprimer la sélection</button>
                    <button type=\"button\" class=\"btn btn-outline-primary\" id=\"print-all\"><i class=\"fas fa-print me-2\"></i> Imprimer tous les lots</button>
                </div>
            </div>
            <div class=\"modal-footer\"><button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button></div>
        </div>
    </div>
</div>

<!-- Modale import Excel -->
<div class=\"modal fade\" id=\"importExcelModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-success text-white\">
                <h5 class=\"modal-title\"><i class=\"fas fa-file-excel me-2\"></i> Importer des lots</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"alert alert-info\">
                    <i class=\"fas fa-info-circle me-2\"></i>
                    Utilisez l'export pour obtenir le template. Vous pouvez modifier l'emplacement des lots.
                </div>
                <form method=\"post\" action=\"";
        // line 403
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_import_excel");
        yield "\" enctype=\"multipart/form-data\">
                    <div class=\"mb-3\">
                        <label class=\"form-label fw-bold\">Fichier Excel (.xlsx)</label>
                        <input type=\"file\" name=\"excel_file\" class=\"form-control\" accept=\".xlsx,.xls\" required>
                    </div>
                    <div class=\"form-check mb-3\">
                        <input type=\"checkbox\" name=\"update_only_location\" class=\"form-check-input\" id=\"updateOnlyLocation\" checked>
                        <label class=\"form-check-label\" for=\"updateOnlyLocation\">Mettre à jour uniquement les emplacements</label>
                    </div>
                    <div class=\"d-grid gap-2\">
                        <button type=\"submit\" class=\"btn btn-success\"><i class=\"fas fa-upload me-2\"></i> Importer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modales toggle et suppression -->
<div class=\"modal fade\" id=\"toggleBatchModal\" tabindex=\"-1\"><div class=\"modal-dialog modal-dialog-centered\"><div class=\"modal-content\"><div class=\"modal-header\"><h5 class=\"modal-title\">Confirmation</h5><button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button></div><div class=\"modal-body\"><p id=\"toggleBatchMessage\"></p></div><div class=\"modal-footer\"><button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button><form id=\"toggleBatchForm\" method=\"post\"><input type=\"hidden\" name=\"_token\" id=\"toggleBatchToken\"><button type=\"submit\" class=\"btn\" id=\"toggleBatchBtn\"></button></form></div></div></div></div>
<div class=\"modal fade\" id=\"deleteBatchModal\" tabindex=\"-1\"><div class=\"modal-dialog modal-dialog-centered\"><div class=\"modal-content\"><div class=\"modal-header bg-danger text-white\"><h5 class=\"modal-title\"><i class=\"fas fa-exclamation-triangle me-2\"></i> Supprimer le lot</h5><button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button></div><div class=\"modal-body\"><p id=\"deleteBatchMessage\"></p></div><div class=\"modal-footer\"><button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button><form id=\"deleteBatchForm\" method=\"post\"><input type=\"hidden\" name=\"_token\" id=\"deleteBatchToken\"><button type=\"submit\" class=\"btn btn-danger\">Supprimer</button></form></div></div></div></div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 427
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

        // line 428
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    const selectAllCheckbox = document.getElementById('select-all-checkbox');
    const batchCheckboxes = document.querySelectorAll('.batch-checkbox');
    const selectedCountSpan = document.getElementById('selectedCount');
    
    function updateSelectedCount() {
        const selected = document.querySelectorAll('.batch-checkbox:checked').length;
        if (selectedCountSpan) selectedCountSpan.textContent = selected;
    }
    
    if (selectAllCheckbox) {
        selectAllCheckbox.addEventListener('change', function() {
            batchCheckboxes.forEach(cb => cb.checked = selectAllCheckbox.checked);
            updateSelectedCount();
        });
    }
    
    document.getElementById('selectAllBtn')?.addEventListener('click', function() {
        batchCheckboxes.forEach(cb => cb.checked = true);
        if (selectAllCheckbox) selectAllCheckbox.checked = true;
        updateSelectedCount();
    });
    
    document.getElementById('deselectAllBtn')?.addEventListener('click', function() {
        batchCheckboxes.forEach(cb => cb.checked = false);
        if (selectAllCheckbox) selectAllCheckbox.checked = false;
        updateSelectedCount();
    });
    
    batchCheckboxes.forEach(cb => {
        cb.addEventListener('change', function() {
            updateSelectedCount();
            if (selectAllCheckbox) {
                selectAllCheckbox.checked = batchCheckboxes.length === document.querySelectorAll('.batch-checkbox:checked').length;
            }
        });
    });
    
    updateSelectedCount();
    
    document.getElementById('print-selected')?.addEventListener('click', function() {
        const selected = Array.from(document.querySelectorAll('.batch-checkbox:checked')).map(cb => cb.value);
        if (selected.length === 0) { alert('Veuillez sélectionner au moins un lot.'); return; }
        window.open(`/admin/stock-batch/print-multiple?ids=\${selected.join(',')}`, '_blank');
        bootstrap.Modal.getInstance(document.getElementById('printOptionsModal'))?.hide();
    });
    
    document.getElementById('print-all')?.addEventListener('click', function() {
        const allIds = Array.from(document.querySelectorAll('.batch-checkbox')).map(cb => cb.value);
        if (allIds.length === 0) { alert('Aucun lot à imprimer.'); return; }
        window.open(`/admin/stock-batch/print-multiple?ids=\${allIds.join(',')}`, '_blank');
        bootstrap.Modal.getInstance(document.getElementById('printOptionsModal'))?.hide();
    });
    
    // Toggle statut
    const toggleModal = new bootstrap.Modal(document.getElementById('toggleBatchModal'));
    document.querySelectorAll('.toggle-batch-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const batchId = this.dataset.batchId, isActive = this.dataset.isActive === '1', token = this.dataset.token, batchNumber = this.dataset.batchNumber;
            document.getElementById('toggleBatchMessage').textContent = `Êtes-vous sûr de vouloir \${isActive ? 'désactiver' : 'activer'} le lot \"\${batchNumber}\" ?`;
            document.getElementById('toggleBatchForm').action = `/admin/stock-batch/\${batchId}/toggle`;
            document.getElementById('toggleBatchToken').value = token;
            const btn = document.getElementById('toggleBatchBtn');
            btn.className = isActive ? 'btn btn-danger' : 'btn btn-success';
            btn.textContent = isActive ? 'Désactiver' : 'Activer';
            toggleModal.show();
        });
    });
    
    // Suppression
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteBatchModal'));
    document.querySelectorAll('.delete-batch-btn:not([disabled])').forEach(btn => {
        btn.addEventListener('click', function() {
            const batchId = this.dataset.batchId, batchNumber = this.dataset.batchNumber, token = this.dataset.token;
            document.getElementById('deleteBatchMessage').innerHTML = `<div class=\"alert alert-warning\">⚠️ Cette action est irréversible.</div><p>Supprimer le lot <strong>\${batchNumber}</strong> ?</p><p class=\"text-danger mb-0\"><small>Cette suppression n'est possible que si aucun mouvement de stock n'est associé.</small></p>`;
            document.getElementById('deleteBatchForm').action = `/admin/stock-batch/\${batchId}/delete`;
            document.getElementById('deleteBatchToken').value = token;
            deleteModal.show();
        });
    });
    
    // Auto-submit filters
    ['status', 'expiry_status', 'location', 'low_stock', 'sort', 'direction', 'product_id'].forEach(fieldName => {
        document.querySelector(`[name=\"\${fieldName}\"]`)?.addEventListener('change', () => document.getElementById('filter-form').submit());
    });
    ['date_from', 'date_to'].forEach(fieldName => {
        document.querySelector(`[name=\"\${fieldName}\"]`)?.addEventListener('change', () => document.getElementById('filter-form').submit());
    });
    
    let timeout;
    document.querySelector('input[name=\"search\"]')?.addEventListener('input', function() {
        clearTimeout(timeout);
        timeout = setTimeout(() => document.getElementById('filter-form').submit(), 500);
    });
});
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 528
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

        // line 529
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
.table-hover tbody tr:hover { background-color: rgba(102, 126, 234, 0.05); cursor: pointer; }
.progress { border-radius: 10px; overflow: hidden; }
.card { transition: transform 0.2s, box-shadow 0.2s; }
.card:hover { transform: translateY(-2px); box-shadow: 0 5px 20px rgba(0,0,0,0.1) !important; }
.badge { font-weight: 500; }
.btn-group .btn { padding: 0.25rem 0.5rem; }
.table td { vertical-align: middle; }
@media (max-width: 768px) { .btn-group { flex-direction: column; } .btn-group .btn { margin: 1px 0; } }
</style>
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
        return "admin/stock_batch/all.html.twig";
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
        return array (  966 => 529,  953 => 528,  843 => 428,  830 => 427,  796 => 403,  758 => 367,  752 => 363,  746 => 361,  743 => 360,  730 => 358,  725 => 357,  719 => 355,  717 => 354,  712 => 351,  710 => 350,  702 => 344,  689 => 336,  687 => 335,  680 => 332,  670 => 330,  668 => 329,  654 => 328,  650 => 327,  646 => 326,  642 => 325,  634 => 320,  630 => 319,  626 => 317,  622 => 315,  618 => 313,  611 => 311,  607 => 310,  603 => 309,  600 => 308,  598 => 307,  593 => 305,  589 => 303,  585 => 302,  571 => 300,  569 => 299,  564 => 297,  560 => 296,  555 => 293,  551 => 291,  545 => 289,  543 => 288,  537 => 285,  532 => 283,  528 => 282,  523 => 280,  519 => 279,  516 => 278,  511 => 276,  507 => 275,  503 => 274,  499 => 272,  496 => 271,  493 => 270,  490 => 269,  485 => 268,  456 => 242,  439 => 228,  435 => 227,  426 => 221,  422 => 220,  418 => 219,  414 => 218,  410 => 217,  402 => 212,  395 => 208,  387 => 203,  376 => 194,  363 => 192,  359 => 191,  349 => 184,  345 => 183,  341 => 182,  331 => 175,  327 => 174,  319 => 168,  310 => 165,  303 => 164,  299 => 163,  290 => 157,  273 => 143,  258 => 131,  246 => 122,  234 => 113,  218 => 100,  206 => 91,  194 => 82,  182 => 73,  163 => 57,  153 => 50,  139 => 39,  111 => 14,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/stock_batch/all.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Gestion globale des lots - HMA Market{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('app_dashboard') }}\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tachometer-alt me-1\"></i> Tableau de bord
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">
                        <i class=\"fas fa-cubes me-1\"></i> Gestion des lots
                    </li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0\">
                <i class=\"fas fa-cubes me-2 text-primary\"></i>
                Gestion globale des lots
            </h1>
            <p class=\"text-muted mt-2\">
                <i class=\"fas fa-info-circle me-1\"></i>
                Visualisez et gérez tous les lots de stock de votre entreprise
            </p>
        </div>
        <div class=\"d-flex gap-2\">
            <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-outline-success dropdown-toggle\" data-bs-toggle=\"dropdown\">
                    <i class=\"fas fa-file-excel me-1\"></i> Excel
                </button>
                <ul class=\"dropdown-menu dropdown-menu-end\">
                    <li>
                        <a class=\"dropdown-item\" href=\"{{ path('app_admin_stock_batch_export_excel', app.request.query.all) }}\">
                            <i class=\"fas fa-download me-2\"></i> Exporter (filtres actuels)
                        </a>
                    </li>
                    <li>
                        <a class=\"dropdown-item\" href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#importExcelModal\">
                            <i class=\"fas fa-upload me-2\"></i> Importer (mise à jour)
                        </a>
                    </li>
                    <li><hr class=\"dropdown-divider\"></li>
                    <li>
                        <a class=\"dropdown-item\" href=\"{{ path('app_admin_stock_batch_export_excel_template') }}\">
                            <i class=\"fas fa-download me-2\"></i> Télécharger template
                        </a>
                    </li>
                </ul>
            </div>

            <a href=\"{{ path('app_admin_stock_batch_export_view') }}\" class=\"btn btn-outline-info\">
                <i class=\"fas fa-chart-line me-2\"></i> Voir rapport
            </a>

            <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#printOptionsModal\">
                <i class=\"fas fa-print me-2\"></i> Imprimer sélection
            </button>
        </div>
    

    <!-- Statistiques globales -->
    <div class=\"row mb-4\">
        <div class=\"col-md-3\">
            <div class=\"card border-0 bg-primary bg-opacity-10 shadow-sm\">
                <div class=\"card-body text-center\">
                    <i class=\"fas fa-boxes fa-2x text-white mb-2\"></i>
                    <h3 class=\"mb-0 text-white\">{{ stats.total_batches|default(0) }}</h3>
                    <small class=\"text-white-50\">Total lots</small>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card border-0 bg-success bg-opacity-10 shadow-sm\">
                <div class=\"card-body text-center\">
                    <i class=\"fas fa-check-circle fa-2x text-white mb-2\"></i>
                    <h3 class=\"mb-0 text-white\">{{ stats.active_batches|default(0) }}</h3>
                    <small class=\"text-white-50\">Lots actifs</small>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card border-0 bg-danger bg-opacity-10 shadow-sm\">
                <div class=\"card-body text-center\">
                    <i class=\"fas fa-skull-crossbones fa-2x text-white mb-2\"></i>
                    <h3 class=\"mb-0 text-white\">{{ stats.expired_batches|default(0) }}</h3>
                    <small class=\"text-white-50\">Lots expirés</small>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card border-0 bg-warning bg-opacity-10 shadow-sm\">
                <div class=\"card-body text-center\">
                    <i class=\"fas fa-hourglass-half fa-2x text-white mb-2\"></i>
                    <h3 class=\"mb-0 text-white\">{{ stats.expiring_soon_batches|default(0) }}</h3>
                    <small class=\"text-white-50\">Expiration < 30j</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Deuxième ligne de stats -->
    <div class=\"row mb-4\">
        <div class=\"col-md-4\">
            <div class=\"card border-0 bg-info bg-opacity-10 shadow-sm\">
                <div class=\"card-body text-center\">
                    <i class=\"fas fa-chart-line fa-2x text-white mb-2\"></i>
                    <h3 class=\"mb-0 text-white\">{{ stats.total_quantity|default(0)|number_format(0, ',', ' ') }}</h3>
                    <small class=\"text-white-50\">Unités en stock</small>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card border-0 bg-secondary bg-opacity-10 shadow-sm\">
                <div class=\"card-body text-center\">
                    <i class=\"fas fa-map-marker-alt fa-2x text-white mb-2\"></i>
                    <h3 class=\"mb-0 text-white\">{{ locations|length }}</h3>
                    <small class=\"text-white-50\">Emplacements distincts</small>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card border-0 bg-light shadow-sm\">
                <div class=\"card-body text-center\">
                    <i class=\"fas fa-tag fa-2x text-dark mb-2\"></i>
                    <h3 class=\"mb-0\">{{ products|length }}</h3>
                    <small class=\"text-muted\">Produits concernés</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Filtres -->
    <div class=\"card border-0 shadow-sm mb-4\">
        <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0\"><i class=\"fas fa-filter me-2 text-primary\"></i> Filtres</h5>
            <div class=\"d-flex gap-2\">
                <a href=\"{{ path('app_admin_stock_batch_all') }}\" class=\"btn btn-outline-secondary btn-sm\">
                    <i class=\"fas fa-undo me-1\"></i> Effacer
                </a>
                <button type=\"submit\" form=\"filter-form\" class=\"btn btn-primary btn-sm\">
                    <i class=\"fas fa-search me-1\"></i> Filtrer
                </button>
            </div>
        </div>
        <div class=\"card-body\">
            <form method=\"get\" id=\"filter-form\">
                <div class=\"row g-3\">
                    <div class=\"col-md-3\">
                        <label class=\"form-label fw-bold\">Recherche</label>
                        <input type=\"text\" name=\"search\" class=\"form-control\" 
                               placeholder=\"N° lot ou produit...\" value=\"{{ filters.search|default('') }}\">
                    </div>
                    <div class=\"col-md-2\">
                        <label class=\"form-label fw-bold\">Produit</label>
                        <select name=\"product_id\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            {% for product in products %}
                                <option value=\"{{ product.id }}\" {{ filters.product_id|default('') == product.id ? 'selected' }}>
                                    {{ product.name|u.truncate(25) }}
                                </option>
                            {% endfor %}
                        </select>
                    </div>
                    <div class=\"col-md-2\">
                        <label class=\"form-label fw-bold\">Statut</label>
                        <select name=\"status\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"active\" {{ filters.status|default('') == 'active' ? 'selected' }}>Actifs</option>
                            <option value=\"inactive\" {{ filters.status|default('') == 'inactive' ? 'selected' }}>Inactifs</option>
                        </select>
                    </div>
                    <div class=\"col-md-3\">
                        <label class=\"form-label fw-bold\">Expiration</label>
                        <select name=\"expiry_status\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"expired\" {{ filters.expiry_status|default('') == 'expired' ? 'selected' }}>Expirés</option>
                            <option value=\"expiring_soon\" {{ filters.expiry_status|default('') == 'expiring_soon' ? 'selected' }}>Expire bientôt</option>
                            <option value=\"not_expiring\" {{ filters.expiry_status|default('') == 'not_expiring' ? 'selected' }}>Non expirés</option>
                        </select>
                    </div>
                    <div class=\"col-md-2\">
                        <label class=\"form-label fw-bold\">Emplacement</label>
                        <select name=\"location\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            {% for loc in locations|default([]) %}
                                <option value=\"{{ loc }}\" {{ filters.location|default('') == loc ? 'selected' }}>{{ loc }}</option>
                            {% endfor %}
                        </select>
                    </div>
                </div>
                
                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-2\">
                        <label class=\"form-label fw-bold\">Stock faible</label>
                        <select name=\"low_stock\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"yes\" {{ filters.low_stock|default('') == 'yes' ? 'selected' }}>≤ 10 unités</option>
                        </select>
                    </div>
                    <div class=\"col-md-2\">
                        <label class=\"form-label fw-bold\">Exp. du</label>
                        <input type=\"date\" name=\"date_from\" class=\"form-control\" value=\"{{ filters.date_from|default('') }}\">
                    </div>
                    <div class=\"col-md-2\">
                        <label class=\"form-label fw-bold\">Exp. au</label>
                        <input type=\"date\" name=\"date_to\" class=\"form-control\" value=\"{{ filters.date_to|default('') }}\">
                    </div>
                    <div class=\"col-md-3\">
                        <label class=\"form-label fw-bold\">Trier par</label>
                        <select name=\"sort\" class=\"form-select\">
                            <option value=\"batch_number\" {{ filters.sort|default('expiry_date') == 'batch_number' ? 'selected' }}>N° lot</option>
                            <option value=\"p.name\" {{ filters.sort|default('expiry_date') == 'p.name' ? 'selected' }}>Produit</option>
                            <option value=\"expiry_date\" {{ filters.sort|default('expiry_date') == 'expiry_date' ? 'selected' }}>Date expiration</option>
                            <option value=\"current_quantity\" {{ filters.sort|default('expiry_date') == 'current_quantity' ? 'selected' }}>Quantité</option>
                            <option value=\"location\" {{ filters.sort|default('expiry_date') == 'location' ? 'selected' }}>Emplacement</option>
                        </select>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"d-flex gap-2\">
                            <select name=\"direction\" class=\"form-select w-50\">
                                <option value=\"asc\" {{ filters.direction|default('asc') == 'asc' ? 'selected' }}>Croissant</option>
                                <option value=\"desc\" {{ filters.direction|default('asc') == 'desc' ? 'selected' }}>Décroissant</option>
                            </select>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Tableau des lots -->
    <div class=\"card border-0 shadow-sm\">
        <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0\"><i class=\"fas fa-list me-2\"></i> Liste des lots</h5>
            <div class=\"d-flex gap-2 align-items-center\">
                <span class=\"badge bg-secondary\">{{ batches|length }} lot(s)</span>
                <button type=\"button\" class=\"btn btn-sm btn-outline-primary\" id=\"selectAllBtn\">
                    <i class=\"fas fa-check-double me-1\"></i> Tout sélectionner
                </button>
                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\" id=\"deselectAllBtn\">
                    <i class=\"fas fa-times me-1\"></i> Désélectionner
                </button>
            </div>
        </div>
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover align-middle mb-0\">
                    <thead class=\"table-light\">
                        <tr>
                            <th style=\"width: 40px;\"><input type=\"checkbox\" id=\"select-all-checkbox\" class=\"form-check-input\"></th>
                            <th>N° lot</th>
                            <th>Produit</th>
                            <th>Emplacement</th>
                            <th>Quantité</th>
                            <th>Prix unitaire</th>
                            <th>Expiration</th>
                            <th>Statut</th>
                            <th class=\"text-center\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for batch in batches %}
                            {% set isExpired = batch.expiryDate and batch.expiryDate < date() %}
                            {% set isExpiringSoon = batch.expiryDate and batch.expiryDate >= date() and batch.expiryDate < date('+30 days') %}
                            {% set isLowStock = batch.currentQuantity <= 10 %}
                            
                            <tr class=\"
                                {% if isExpired %}table-danger
                                {% elseif isExpiringSoon %}table-warning
                                {% elseif isLowStock %}table-info
                                {% endif %}
                            \">
                                <td><input type=\"checkbox\" class=\"form-check-input batch-checkbox\" value=\"{{ batch.id }}\"></td>
                                <td><strong>{{ batch.batchNumber }}</strong></td>
                                <td>
                                    <a href=\"{{ path('app_admin_product_show', {'id': batch.product.id}) }}\" class=\"text-decoration-none\">
                                        <i class=\"fas fa-box me-1\"></i> {{ batch.product.name|u.truncate(35) }}
                                    </a>
                                    <br><small class=\"text-muted\"><i class=\"fas fa-barcode me-1\"></i>{{ batch.product.barcode }}</small>
                                </td>
                                <td>
                                    {% if batch.location %}
                                        <span class=\"badge bg-info text-dark\"><i class=\"fas fa-map-marker-alt me-1\"></i> {{ batch.location }}</span>
                                    {% else %}
                                        <span class=\"text-muted\">—</span>
                                    {% endif %}
                                </td>
                                <td>
                                    <div>
                                        <span class=\"fw-bold\">{{ batch.currentQuantity }}</span>
                                        <small class=\"text-muted\">/ {{ batch.initialQuantity }}</small>
                                        <div class=\"progress mt-1\" style=\"height: 4px; width: 100px;\">
                                            {% set percentage = (batch.currentQuantity / batch.initialQuantity * 100)|round %}
                                            <div class=\"progress-bar {% if percentage <= 10 %}bg-danger{% elseif percentage <= 30 %}bg-warning{% else %}bg-success{% endif %}\" style=\"width: {{ percentage }}%\"></div>
                                        </div>
                                        {% if isLowStock %}<br><span class=\"badge bg-warning text-dark mt-1\">Stock faible</span>{% endif %}
                                    </div>
                                </td>
                                <td>{{ batch.unitPrice|price_with_currency(batch.hmaService) }}</td>
                                <td>
                                    {% if batch.expiryDate %}
                                        <div>
                                            <span class=\"text-dark fw-bold\">{{ batch.expiryDate|date('d/m/Y') }}</span>
                                            {% if isExpired %}<br><span class=\"badge bg-danger mt-1\">Expiré</span>
                                            {% elseif isExpiringSoon %}<br><span class=\"badge bg-warning text-dark mt-1\">J-{{ batch.expiryDate.diff(date()).days }}</span>
                                            {% endif %}
                                        </div>
                                    {% else %}
                                        <span class=\"text-muted\">—</span>
                                    {% endif %}
                                </td>
                                <td>
                                    <span class=\"badge {{ batch.isActive ? 'bg-success' : 'bg-secondary' }}\">
                                        {{ batch.isActive ? 'Actif' : 'Inactif' }}
                                    </span>
                                </td>
                                <td class=\"text-center\">
                                    <div class=\"btn-group\" role=\"group\">
                                        <a href=\"{{ path('app_admin_stock_batch_print', {'id': batch.id}) }}\" class=\"btn btn-sm btn-outline-secondary\" title=\"Imprimer\" target=\"_blank\"><i class=\"fas fa-print\"></i></a>
                                        <a href=\"{{ path('app_admin_stock_batch_show', {'id': batch.id}) }}\" class=\"btn btn-sm btn-outline-primary\" title=\"Voir\"><i class=\"fas fa-eye\"></i></a>
                                        <a href=\"{{ path('app_admin_stock_batch_edit', {'id': batch.id}) }}\" class=\"btn btn-sm btn-outline-warning\" title=\"Modifier\"><i class=\"fas fa-map-marker-alt\"></i></a>
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-info toggle-batch-btn\" data-batch-id=\"{{ batch.id }}\" data-is-active=\"{{ batch.isActive ? '1' : '0' }}\" data-batch-number=\"{{ batch.batchNumber }}\" data-token=\"{{ csrf_token('toggle-batch' ~ batch.id) }}\" title=\"{{ batch.isActive ? 'Désactiver' : 'Activer' }}\"><i class=\"fas {{ batch.isActive ? 'fa-toggle-on' : 'fa-toggle-off' }}\"></i></button>
                                        {% if is_granted('ROLE_ADMIN') and batch.stockMovements|length == 0 %}
                                            <button type=\"button\" class=\"btn btn-sm btn-outline-danger delete-batch-btn\" data-batch-id=\"{{ batch.id }}\" data-batch-number=\"{{ batch.batchNumber }}\" data-token=\"{{ csrf_token('delete-batch' ~ batch.id) }}\" title=\"Supprimer\"><i class=\"fas fa-trash\"></i></button>
                                        {% endif %}
                                    </div>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"9\" class=\"text-center py-5\">
                                    <i class=\"fas fa-box-open fa-3x text-muted mb-3\"></i>
                                    <p class=\"text-muted mb-0\">Aucun lot trouvé</p>
                                    <p class=\"text-muted small\">Modifiez vos filtres ou créez des achats pour générer des lots</p>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
        
        <!-- Pagination -->
        {% if totalPages > 1 %}
        <div class=\"card-footer bg-white\">
            <nav aria-label=\"Pagination\">
                <ul class=\"pagination justify-content-center mb-0\">
                    {% if currentPage > 1 %}
                        <li class=\"page-item\"><a class=\"page-link\" href=\"{{ path('app_admin_stock_batch_all', app.request.query.all|merge({'page': currentPage - 1})) }}\"><i class=\"fas fa-chevron-left\"></i> Précédent</a></li>
                    {% endif %}
                    {% for page in 1..totalPages %}
                        <li class=\"page-item {{ page == currentPage ? 'active' : '' }}\"><a class=\"page-link\" href=\"{{ path('app_admin_stock_batch_all', app.request.query.all|merge({'page': page})) }}\">{{ page }}</a></li>
                    {% endfor %}
                    {% if currentPage < totalPages %}
                        <li class=\"page-item\"><a class=\"page-link\" href=\"{{ path('app_admin_stock_batch_all', app.request.query.all|merge({'page': currentPage + 1})) }}\">Suivant <i class=\"fas fa-chevron-right\"></i></a></li>
                    {% endif %}
                </ul>
            </nav>
        </div>
        {% endif %}
    </div>
</div>

<!-- Modale impression -->
<div class=\"modal fade\" id=\"printOptionsModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-primary text-white\">
                <h5 class=\"modal-title\"><i class=\"fas fa-print me-2\"></i> Options d'impression</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"alert alert-info\"><i class=\"fas fa-info-circle me-2\"></i> <span id=\"selectedCount\">0</span> lot(s) sélectionné(s) dans le tableau</div>
                <div class=\"d-grid gap-2\">
                    <button type=\"button\" class=\"btn btn-primary\" id=\"print-selected\"><i class=\"fas fa-print me-2\"></i> Imprimer la sélection</button>
                    <button type=\"button\" class=\"btn btn-outline-primary\" id=\"print-all\"><i class=\"fas fa-print me-2\"></i> Imprimer tous les lots</button>
                </div>
            </div>
            <div class=\"modal-footer\"><button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button></div>
        </div>
    </div>
</div>

<!-- Modale import Excel -->
<div class=\"modal fade\" id=\"importExcelModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-success text-white\">
                <h5 class=\"modal-title\"><i class=\"fas fa-file-excel me-2\"></i> Importer des lots</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"alert alert-info\">
                    <i class=\"fas fa-info-circle me-2\"></i>
                    Utilisez l'export pour obtenir le template. Vous pouvez modifier l'emplacement des lots.
                </div>
                <form method=\"post\" action=\"{{ path('app_admin_stock_batch_import_excel') }}\" enctype=\"multipart/form-data\">
                    <div class=\"mb-3\">
                        <label class=\"form-label fw-bold\">Fichier Excel (.xlsx)</label>
                        <input type=\"file\" name=\"excel_file\" class=\"form-control\" accept=\".xlsx,.xls\" required>
                    </div>
                    <div class=\"form-check mb-3\">
                        <input type=\"checkbox\" name=\"update_only_location\" class=\"form-check-input\" id=\"updateOnlyLocation\" checked>
                        <label class=\"form-check-label\" for=\"updateOnlyLocation\">Mettre à jour uniquement les emplacements</label>
                    </div>
                    <div class=\"d-grid gap-2\">
                        <button type=\"submit\" class=\"btn btn-success\"><i class=\"fas fa-upload me-2\"></i> Importer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modales toggle et suppression -->
<div class=\"modal fade\" id=\"toggleBatchModal\" tabindex=\"-1\"><div class=\"modal-dialog modal-dialog-centered\"><div class=\"modal-content\"><div class=\"modal-header\"><h5 class=\"modal-title\">Confirmation</h5><button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button></div><div class=\"modal-body\"><p id=\"toggleBatchMessage\"></p></div><div class=\"modal-footer\"><button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button><form id=\"toggleBatchForm\" method=\"post\"><input type=\"hidden\" name=\"_token\" id=\"toggleBatchToken\"><button type=\"submit\" class=\"btn\" id=\"toggleBatchBtn\"></button></form></div></div></div></div>
<div class=\"modal fade\" id=\"deleteBatchModal\" tabindex=\"-1\"><div class=\"modal-dialog modal-dialog-centered\"><div class=\"modal-content\"><div class=\"modal-header bg-danger text-white\"><h5 class=\"modal-title\"><i class=\"fas fa-exclamation-triangle me-2\"></i> Supprimer le lot</h5><button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button></div><div class=\"modal-body\"><p id=\"deleteBatchMessage\"></p></div><div class=\"modal-footer\"><button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button><form id=\"deleteBatchForm\" method=\"post\"><input type=\"hidden\" name=\"_token\" id=\"deleteBatchToken\"><button type=\"submit\" class=\"btn btn-danger\">Supprimer</button></form></div></div></div></div>

{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    const selectAllCheckbox = document.getElementById('select-all-checkbox');
    const batchCheckboxes = document.querySelectorAll('.batch-checkbox');
    const selectedCountSpan = document.getElementById('selectedCount');
    
    function updateSelectedCount() {
        const selected = document.querySelectorAll('.batch-checkbox:checked').length;
        if (selectedCountSpan) selectedCountSpan.textContent = selected;
    }
    
    if (selectAllCheckbox) {
        selectAllCheckbox.addEventListener('change', function() {
            batchCheckboxes.forEach(cb => cb.checked = selectAllCheckbox.checked);
            updateSelectedCount();
        });
    }
    
    document.getElementById('selectAllBtn')?.addEventListener('click', function() {
        batchCheckboxes.forEach(cb => cb.checked = true);
        if (selectAllCheckbox) selectAllCheckbox.checked = true;
        updateSelectedCount();
    });
    
    document.getElementById('deselectAllBtn')?.addEventListener('click', function() {
        batchCheckboxes.forEach(cb => cb.checked = false);
        if (selectAllCheckbox) selectAllCheckbox.checked = false;
        updateSelectedCount();
    });
    
    batchCheckboxes.forEach(cb => {
        cb.addEventListener('change', function() {
            updateSelectedCount();
            if (selectAllCheckbox) {
                selectAllCheckbox.checked = batchCheckboxes.length === document.querySelectorAll('.batch-checkbox:checked').length;
            }
        });
    });
    
    updateSelectedCount();
    
    document.getElementById('print-selected')?.addEventListener('click', function() {
        const selected = Array.from(document.querySelectorAll('.batch-checkbox:checked')).map(cb => cb.value);
        if (selected.length === 0) { alert('Veuillez sélectionner au moins un lot.'); return; }
        window.open(`/admin/stock-batch/print-multiple?ids=\${selected.join(',')}`, '_blank');
        bootstrap.Modal.getInstance(document.getElementById('printOptionsModal'))?.hide();
    });
    
    document.getElementById('print-all')?.addEventListener('click', function() {
        const allIds = Array.from(document.querySelectorAll('.batch-checkbox')).map(cb => cb.value);
        if (allIds.length === 0) { alert('Aucun lot à imprimer.'); return; }
        window.open(`/admin/stock-batch/print-multiple?ids=\${allIds.join(',')}`, '_blank');
        bootstrap.Modal.getInstance(document.getElementById('printOptionsModal'))?.hide();
    });
    
    // Toggle statut
    const toggleModal = new bootstrap.Modal(document.getElementById('toggleBatchModal'));
    document.querySelectorAll('.toggle-batch-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const batchId = this.dataset.batchId, isActive = this.dataset.isActive === '1', token = this.dataset.token, batchNumber = this.dataset.batchNumber;
            document.getElementById('toggleBatchMessage').textContent = `Êtes-vous sûr de vouloir \${isActive ? 'désactiver' : 'activer'} le lot \"\${batchNumber}\" ?`;
            document.getElementById('toggleBatchForm').action = `/admin/stock-batch/\${batchId}/toggle`;
            document.getElementById('toggleBatchToken').value = token;
            const btn = document.getElementById('toggleBatchBtn');
            btn.className = isActive ? 'btn btn-danger' : 'btn btn-success';
            btn.textContent = isActive ? 'Désactiver' : 'Activer';
            toggleModal.show();
        });
    });
    
    // Suppression
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteBatchModal'));
    document.querySelectorAll('.delete-batch-btn:not([disabled])').forEach(btn => {
        btn.addEventListener('click', function() {
            const batchId = this.dataset.batchId, batchNumber = this.dataset.batchNumber, token = this.dataset.token;
            document.getElementById('deleteBatchMessage').innerHTML = `<div class=\"alert alert-warning\">⚠️ Cette action est irréversible.</div><p>Supprimer le lot <strong>\${batchNumber}</strong> ?</p><p class=\"text-danger mb-0\"><small>Cette suppression n'est possible que si aucun mouvement de stock n'est associé.</small></p>`;
            document.getElementById('deleteBatchForm').action = `/admin/stock-batch/\${batchId}/delete`;
            document.getElementById('deleteBatchToken').value = token;
            deleteModal.show();
        });
    });
    
    // Auto-submit filters
    ['status', 'expiry_status', 'location', 'low_stock', 'sort', 'direction', 'product_id'].forEach(fieldName => {
        document.querySelector(`[name=\"\${fieldName}\"]`)?.addEventListener('change', () => document.getElementById('filter-form').submit());
    });
    ['date_from', 'date_to'].forEach(fieldName => {
        document.querySelector(`[name=\"\${fieldName}\"]`)?.addEventListener('change', () => document.getElementById('filter-form').submit());
    });
    
    let timeout;
    document.querySelector('input[name=\"search\"]')?.addEventListener('input', function() {
        clearTimeout(timeout);
        timeout = setTimeout(() => document.getElementById('filter-form').submit(), 500);
    });
});
</script>
{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
.table-hover tbody tr:hover { background-color: rgba(102, 126, 234, 0.05); cursor: pointer; }
.progress { border-radius: 10px; overflow: hidden; }
.card { transition: transform 0.2s, box-shadow 0.2s; }
.card:hover { transform: translateY(-2px); box-shadow: 0 5px 20px rgba(0,0,0,0.1) !important; }
.badge { font-weight: 500; }
.btn-group .btn { padding: 0.25rem 0.5rem; }
.table td { vertical-align: middle; }
@media (max-width: 768px) { .btn-group { flex-direction: column; } .btn-group .btn { margin: 1px 0; } }
</style>
{% endblock %}", "admin/stock_batch/all.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\stock_batch\\all.html.twig");
    }
}
