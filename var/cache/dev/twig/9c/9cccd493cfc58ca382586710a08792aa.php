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

/* admin/recipe/index.html.twig */
class __TwigTemplate_206b0bfafc4fe75753795860ca2c8514 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/recipe/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/recipe/index.html.twig"));

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

        yield "Menu ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["companyName"]) || array_key_exists("companyName", $context) ? $context["companyName"] : (function () { throw new RuntimeError('Variable "companyName" does not exist.', 4, $this->source); })()), "html", null, true);
        yield " - HMA Market";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
<link href=\"https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css\" rel=\"stylesheet\" />
<style>
.hover-card {
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}
.hover-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.08) !important;
}
.stat-item {
    transition: background-color 0.2s;
}
.stat-item:hover {
    background-color: #e9ecef !important;
}
.recipe-image-container {
    position: relative;
    height: 160px;
    overflow: hidden;
    border-radius: 8px 8px 0 0;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    display: flex;
    align-items: center;
    justify-content: center;
}
.recipe-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.recipe-image-placeholder {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
}
.badge {
    font-weight: 500;
    letter-spacing: 0.3px;
}
/* Styles Select2 - Correction d'alignement vertical */
.select2-container--bootstrap-5 .select2-selection {
    height: 38px !important;
    padding: 0 !important;
}
.select2-container--bootstrap-5 .select2-selection--single {
    height: 38px !important;
    border-radius: 8px !important;
    background-color: #f8f9fa !important;
    border-color: #e9ecef !important;
    display: flex !important;
    align-items: center !important;
}
.select2-container--bootstrap-5 .select2-selection--single .select2-selection__rendered {
    line-height: normal !important;
    padding: 8px 12px !important;
    color: #212529 !important;
    display: block !important;
}
.select2-container--bootstrap-5 .select2-selection--single .select2-selection__arrow {
    height: 36px !important;
    position: absolute !important;
    top: 1px !important;
    right: 5px !important;
}
/* Correction pour les selects normaux */
.form-select.bg-light.border-0 {
    height: 38px;
    padding: 8px 12px;
}
.select2-container--bootstrap-5 .select2-search--dropdown .select2-search__field {
    padding: 8px 12px !important;
    border-radius: 6px !important;
    border-color: #e9ecef !important;
}
.select2-container--bootstrap-5 .select2-results__option {
    padding: 8px 12px !important;
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
.select2-container--bootstrap-5 .select2-results__option--highlighted {
    background-color: #e9ecef !important;
    color: #0463f1 !important;
}
@media (max-width: 768px) {
    .pagination {
        flex-wrap: wrap;
        justify-content: center;
    }
    .d-flex.gap-1 {
        flex-wrap: wrap;
    }
}
@media (min-width: 992px) {
    .row-cols-lg-5 > .col {
        flex: 0 0 20%;
        max-width: 20%;
    }
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 118
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

        // line 119
        yield "<div class=\"container-fluid px-4\">
    <!-- En-tête avec quota et bouton d'ajout -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <h1 class=\"h3 mb-0 text-gray-800 fw-bold\">
                <i class=\"fas fa-utensils me-2\"></i>Menu ";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["companyName"]) || array_key_exists("companyName", $context) ? $context["companyName"] : (function () { throw new RuntimeError('Variable "companyName" does not exist.', 124, $this->source); })()), "html", null, true);
        yield "
            </h1>
            <p class=\"text-muted mt-1\">Gérez vos plats et recettes</p>
        </div>
        
        <div class=\"d-flex align-items-center gap-3 flex-wrap\">
            <div class=\"card bg-light border-0 shadow-sm p-2\">
                <div class=\"d-flex align-items-center\">
                    <div class=\"me-2\">
                        <span class=\"badge bg-primary p-2 rounded-circle\">
                            <i class=\"fas fa-chart-line fa-fw\"></i>
                        </span>
                    </div>
                    <div>
                        <small class=\"text-muted d-block\">Plats dans quota</small>
                        <h6 class=\"mb-0 ";
        // line 139
        yield (((($tmp = (isset($context["quotaReached"]) || array_key_exists("quotaReached", $context) ? $context["quotaReached"] : (function () { throw new RuntimeError('Variable "quotaReached" does not exist.', 139, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-danger") : ("text-success"));
        yield " fw-bold\">
                            ";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activeCount"]) || array_key_exists("activeCount", $context) ? $context["activeCount"] : (function () { throw new RuntimeError('Variable "activeCount" does not exist.', 140, $this->source); })()), "html", null, true);
        yield " / ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["quota"]) || array_key_exists("quota", $context) ? $context["quota"] : (function () { throw new RuntimeError('Variable "quota" does not exist.', 140, $this->source); })()), "html", null, true);
        yield "
                            ";
        // line 141
        if (((isset($context["quota"]) || array_key_exists("quota", $context) ? $context["quota"] : (function () { throw new RuntimeError('Variable "quota" does not exist.', 141, $this->source); })()) == "Illimité")) {
            // line 142
            yield "                                <i class=\"fas fa-infinity text-info ms-1 small\"></i>
                            ";
        }
        // line 144
        yield "                        </h6>
                    </div>
                </div>
            </div>

            ";
        // line 149
        if (((isset($context["subscriptionInactiveFiltered"]) || array_key_exists("subscriptionInactiveFiltered", $context) ? $context["subscriptionInactiveFiltered"] : (function () { throw new RuntimeError('Variable "subscriptionInactiveFiltered" does not exist.', 149, $this->source); })()) > 0)) {
            // line 150
            yield "            <div class=\"card bg-light border-0 shadow-sm p-2\">
                <div class=\"d-flex align-items-center\">
                    <div class=\"me-2\">
                        <span class=\"badge bg-warning p-2 rounded-circle\">
                            <i class=\"fas fa-clock fa-fw\"></i>
                        </span>
                    </div>
                    <div>
                        <small class=\"text-muted d-block\">En attente</small>
                        <h6 class=\"mb-0 fw-bold\">";
            // line 159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subscriptionInactiveFiltered"]) || array_key_exists("subscriptionInactiveFiltered", $context) ? $context["subscriptionInactiveFiltered"] : (function () { throw new RuntimeError('Variable "subscriptionInactiveFiltered" does not exist.', 159, $this->source); })()), "html", null, true);
            yield "</h6>
                    </div>
                </div>
            </div>
            ";
        }
        // line 164
        yield "
            <a href=\"#\" id=\"newRecipeBtn\" class=\"btn btn-primary shadow-sm\">
                <i class=\"fas fa-plus-circle me-2\"></i> Nouveau Plat
            </a>
        </div>
    </div>

    ";
        // line 172
        yield "    ";
        if ((($tmp = (isset($context["quotaReached"]) || array_key_exists("quotaReached", $context) ? $context["quotaReached"] : (function () { throw new RuntimeError('Variable "quotaReached" does not exist.', 172, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 173
            yield "    <div class=\"alert alert-warning alert-dismissible fade show shadow-sm\" role=\"alert\">
        <div class=\"d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <div>
                <i class=\"fas fa-exclamation-triangle me-2\"></i>
                <strong>Quota atteint !</strong> Vous avez utilisé vos ";
            // line 177
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["quota"]) || array_key_exists("quota", $context) ? $context["quota"] : (function () { throw new RuntimeError('Variable "quota" does not exist.', 177, $this->source); })()), "html", null, true);
            yield " plats actifs.
            </div>
            <a href=\"";
            // line 179
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subscription_plans");
            yield "\" class=\"btn btn-warning btn-sm\">
                <i class=\"fas fa-arrow-up me-1\"></i> Voir les offres
            </a>
        </div>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    </div>
    ";
        }
        // line 186
        yield "
    ";
        // line 188
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 188, $this->source); })()), "flashes", ["success"], "method", false, false, false, 188));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 189
            yield "        <div class=\"alert alert-success alert-dismissible fade show shadow-sm\" role=\"alert\">
            <i class=\"fas fa-check-circle me-2\"></i> ";
            // line 190
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 194
        yield "    
    ";
        // line 195
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 195, $this->source); })()), "flashes", ["error"], "method", false, false, false, 195));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 196
            yield "        <div class=\"alert alert-danger alert-dismissible fade show shadow-sm\" role=\"alert\">
            <i class=\"fas fa-exclamation-circle me-2\"></i> ";
            // line 197
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 201
        yield "
    <!-- Statistiques filtrées -->
    <div class=\"card shadow-sm border-0 mb-4\">
        <div class=\"card-header bg-white py-3\">
            <h5 class=\"mb-0 fw-semibold\">
                <i class=\"fas fa-chart-pie text-primary me-2\"></i>Statistiques selon les filtres
            </h5>
        </div>
        <div class=\"card-body\">
            <div class=\"row g-3 row-cols-2 row-cols-md-4 row-cols-lg-5\">
                <div class=\"col\">
                    <div class=\"stat-item p-3 bg-light rounded-3 h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted text-uppercase small fw-bold\">Filtrés</span>
                                <h3 class=\"mb-0 fw-bold\">";
        // line 216
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalFiltered"]) || array_key_exists("totalFiltered", $context) ? $context["totalFiltered"] : (function () { throw new RuntimeError('Variable "totalFiltered" does not exist.', 216, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <div class=\"bg-primary p-2 rounded-3\">
                                <i class=\"fas fa-utensils text-white fs-3\"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col\">
                    <div class=\"stat-item p-3 bg-light rounded-3 h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted text-uppercase small fw-bold\">Actifs</span>
                                <h3 class=\"mb-0 fw-bold text-success\">";
        // line 229
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activeFiltered"]) || array_key_exists("activeFiltered", $context) ? $context["activeFiltered"] : (function () { throw new RuntimeError('Variable "activeFiltered" does not exist.', 229, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <div class=\"bg-success p-2 rounded-3\">
                                <i class=\"fas fa-check-circle text-white fs-3\"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col\">
                    <div class=\"stat-item p-3 bg-light rounded-3 h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted text-uppercase small fw-bold\">Inactifs</span>
                                <h3 class=\"mb-0 fw-bold text-danger\">";
        // line 242
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["inactiveFiltered"]) || array_key_exists("inactiveFiltered", $context) ? $context["inactiveFiltered"] : (function () { throw new RuntimeError('Variable "inactiveFiltered" does not exist.', 242, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <div class=\"bg-danger p-2 rounded-3\">
                                <i class=\"fas fa-pause-circle text-white fs-3\"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col\">
                    <div class=\"stat-item p-3 bg-light rounded-3 h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted text-uppercase small fw-bold\">Abonnement actif</span>
                                <h3 class=\"mb-0 fw-bold text-info\">";
        // line 255
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subscriptionActiveFiltered"]) || array_key_exists("subscriptionActiveFiltered", $context) ? $context["subscriptionActiveFiltered"] : (function () { throw new RuntimeError('Variable "subscriptionActiveFiltered" does not exist.', 255, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <div class=\"bg-info p-2 rounded-3\">
                                <i class=\"fas fa-database text-white fs-3\"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col\">
                    <div class=\"stat-item p-3 bg-light rounded-3 h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted text-uppercase small fw-bold\">Abonnement inactif</span>
                                <h3 class=\"mb-0 fw-bold text-secondary\">";
        // line 268
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subscriptionInactiveFiltered"]) || array_key_exists("subscriptionInactiveFiltered", $context) ? $context["subscriptionInactiveFiltered"] : (function () { throw new RuntimeError('Variable "subscriptionInactiveFiltered" does not exist.', 268, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <div class=\"bg-secondary p-2 rounded-3\">
                                <i class=\"fas fa-clock text-white fs-3\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Formulaire de filtres -->
    <div class=\"card shadow-sm border-0 mb-4\">
        <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center flex-wrap gap-3\">
            <h5 class=\"mb-0 fw-semibold\">
                <i class=\"fas fa-filter text-primary me-2\"></i>Filtres
            </h5>
            <div class=\"d-flex gap-2\">
                <button type=\"submit\" form=\"filter-form\" class=\"btn btn-primary\">
                    <i class=\"fas fa-filter me-2\"></i>Filtrer
                </button>
                <a href=\"";
        // line 290
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_index");
        yield "\" class=\"btn btn-outline-secondary\">
                    <i class=\"fas fa-undo me-2\"></i>Effacer
                </a>
            </div>
        </div>
        <div class=\"card-body\">
            <form method=\"get\" id=\"filter-form\">
                <!-- Première ligne : 3 éléments -->
                <div class=\"row g-3 mb-3\">
                    <div class=\"col-lg-4 col-md-6\">
                        <label for=\"search\" class=\"form-label fw-semibold\">
                            <i class=\"fas fa-search text-primary me-1\"></i>Rechercher
                        </label>
                        <div class=\"input-group\">
                            <span class=\"input-group-text bg-light border-0\">
                                <i class=\"fas fa-search text-muted\"></i>
                            </span>
                            <input type=\"text\" name=\"search\" id=\"search\" value=\"";
        // line 307
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 307, $this->source); })()), "html", null, true);
        yield "\" 
                                   class=\"form-control bg-light border-0\" placeholder=\"Nom du plat...\">
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <label for=\"category\" class=\"form-label fw-semibold\">
                            <i class=\"fas fa-tags text-info me-1\"></i>Catégorie
                        </label>
                        <select name=\"category\" id=\"category\" class=\"form-select\" style=\"width: 100%;\">
                            <option value=\"0\">📁 Toutes les catégories</option>
                            ";
        // line 317
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 317, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 318
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 318), "html", null, true);
            yield "\" ";
            yield ((((isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 318, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 318))) ? ("selected") : (""));
            yield ">
                                    ";
            // line 319
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "level", [], "any", false, false, false, 319) == 0)) {
                // line 320
                yield "                                        📁 ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 320), "html", null, true);
                yield "
                                    ";
            } else {
                // line 322
                yield "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, $context["category"], "level", [], "any", false, false, false, 322)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    yield "&nbsp;&nbsp;&nbsp;";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                yield "↳ ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 322), "html", null, true);
                yield "
                                    ";
            }
            // line 324
            yield "                                    <span class=\"text-muted\">(";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "recipeCount", [], "any", false, false, false, 324), "html", null, true);
            yield ")</span>
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 327
        yield "                        </select>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <label for=\"type\" class=\"form-label fw-semibold\">
                            <i class=\"fas fa-tag text-primary me-1\"></i>Type de plat
                        </label>
                        <select name=\"type\" id=\"type\" class=\"form-select bg-light border-0\">
                            <option value=\"\">Tous les types</option>
                            <option value=\"food\" ";
        // line 335
        yield ((((isset($context["selectedType"]) || array_key_exists("selectedType", $context) ? $context["selectedType"] : (function () { throw new RuntimeError('Variable "selectedType" does not exist.', 335, $this->source); })()) == "food")) ? ("selected") : (""));
        yield ">🍽️ Plat principal</option>
                            <option value=\"starter\" ";
        // line 336
        yield ((((isset($context["selectedType"]) || array_key_exists("selectedType", $context) ? $context["selectedType"] : (function () { throw new RuntimeError('Variable "selectedType" does not exist.', 336, $this->source); })()) == "starter")) ? ("selected") : (""));
        yield ">🥗 Entrée</option>
                            <option value=\"dessert\" ";
        // line 337
        yield ((((isset($context["selectedType"]) || array_key_exists("selectedType", $context) ? $context["selectedType"] : (function () { throw new RuntimeError('Variable "selectedType" does not exist.', 337, $this->source); })()) == "dessert")) ? ("selected") : (""));
        yield ">🍰 Dessert</option>
                            <option value=\"drink\" ";
        // line 338
        yield ((((isset($context["selectedType"]) || array_key_exists("selectedType", $context) ? $context["selectedType"] : (function () { throw new RuntimeError('Variable "selectedType" does not exist.', 338, $this->source); })()) == "drink")) ? ("selected") : (""));
        yield ">🥤 Boisson</option>
                            <option value=\"side\" ";
        // line 339
        yield ((((isset($context["selectedType"]) || array_key_exists("selectedType", $context) ? $context["selectedType"] : (function () { throw new RuntimeError('Variable "selectedType" does not exist.', 339, $this->source); })()) == "side")) ? ("selected") : (""));
        yield ">🍟 Accompagnement</option>
                        </select>
                    </div>
                </div>
                <!-- Deuxième ligne : 3 éléments -->
                <div class=\"row g-3\">
                    <div class=\"col-lg-4 col-md-6\">
                        <label for=\"status\" class=\"form-label fw-semibold\">
                            <i class=\"fas fa-toggle-on text-success me-1\"></i>Statut
                        </label>
                        <select name=\"status\" id=\"status\" class=\"form-select bg-light border-0\">
                            <option value=\"\">Tous</option>
                            <option value=\"active\" ";
        // line 351
        yield ((((isset($context["selectedStatus"]) || array_key_exists("selectedStatus", $context) ? $context["selectedStatus"] : (function () { throw new RuntimeError('Variable "selectedStatus" does not exist.', 351, $this->source); })()) == "active")) ? ("selected") : (""));
        yield ">✅ Actifs</option>
                            <option value=\"inactive\" ";
        // line 352
        yield ((((isset($context["selectedStatus"]) || array_key_exists("selectedStatus", $context) ? $context["selectedStatus"] : (function () { throw new RuntimeError('Variable "selectedStatus" does not exist.', 352, $this->source); })()) == "inactive")) ? ("selected") : (""));
        yield ">⛔ Inactifs</option>
                        </select>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <label for=\"subscription_status\" class=\"form-label fw-semibold\">
                            <i class=\"fas fa-credit-card text-warning me-1\"></i>Abonnement
                        </label>
                        <select name=\"subscription_status\" id=\"subscription_status\" class=\"form-select bg-light border-0\">
                            <option value=\"\">Tous</option>
                            <option value=\"active\" ";
        // line 361
        yield ((((isset($context["selectedSubscriptionStatus"]) || array_key_exists("selectedSubscriptionStatus", $context) ? $context["selectedSubscriptionStatus"] : (function () { throw new RuntimeError('Variable "selectedSubscriptionStatus" does not exist.', 361, $this->source); })()) == "active")) ? ("selected") : (""));
        yield ">✅ Dans le quota</option>
                            <option value=\"inactive\" ";
        // line 362
        yield ((((isset($context["selectedSubscriptionStatus"]) || array_key_exists("selectedSubscriptionStatus", $context) ? $context["selectedSubscriptionStatus"] : (function () { throw new RuntimeError('Variable "selectedSubscriptionStatus" does not exist.', 362, $this->source); })()) == "inactive")) ? ("selected") : (""));
        yield ">⏳ Hors quota</option>
                        </select>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <label for=\"promotion\" class=\"form-label fw-semibold\">
                            <i class=\"fas fa-tags text-danger me-1\"></i>Promotion
                        </label>
                        <select name=\"promotion\" id=\"promotion\" class=\"form-select\" style=\"width: 100%;\">
                            <option value=\"0\">🎯 Toutes les promotions</option>
                            ";
        // line 371
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 371, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
            // line 372
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 372), "html", null, true);
            yield "\" ";
            yield ((((isset($context["selectedPromotion"]) || array_key_exists("selectedPromotion", $context) ? $context["selectedPromotion"] : (function () { throw new RuntimeError('Variable "selectedPromotion" does not exist.', 372, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 372))) ? ("selected") : (""));
            yield ">
                                    ";
            // line 373
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "name", [], "any", false, false, false, 373), "html", null, true);
            yield "
                                    ";
            // line 374
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "discountPercentage", [], "any", false, false, false, 374)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 375
                yield "                                        (-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "discountPercentage", [], "any", false, false, false, 375), "html", null, true);
                yield "%)
                                    ";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 376
$context["promotion"], "discountAmount", [], "any", false, false, false, 376)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 377
                yield "                                        (-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "discountAmount", [], "any", false, false, false, 377), 0, ",", " "), "html", null, true);
                yield " FCFA)
                                    ";
            }
            // line 379
            yield "                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['promotion'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 381
        yield "                        </select>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Grille de plats -->
    <div class=\"row g-4\">
        ";
        // line 390
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recipes"]) || array_key_exists("recipes", $context) ? $context["recipes"] : (function () { throw new RuntimeError('Variable "recipes" does not exist.', 390, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["recipe"]) {
            // line 391
            yield "        <div class=\"col-xl-3 col-lg-4 col-md-6\">
            <div class=\"card h-100 border-0 shadow-sm hover-card\">
                <div class=\"recipe-image-container position-relative\">
                    ";
            // line 394
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "image", [], "any", false, false, false, 394)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 395
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images_plats/" . CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "image", [], "any", false, false, false, 395))), "html", null, true);
                yield "\" 
                             alt=\"";
                // line 396
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "name", [], "any", false, false, false, 396), "html", null, true);
                yield "\" 
                             class=\"card-img-top recipe-image\">
                    ";
            } else {
                // line 399
                yield "                        <div class=\"recipe-image-placeholder\">
                            <i class=\"fas fa-utensils fa-4x text-muted\"></i>
                        </div>
                    ";
            }
            // line 403
            yield "
                    <!-- Badge Actif/Inactif à GAUCHE -->
                    <div class=\"position-absolute top-0 start-0 p-2\">
                        ";
            // line 406
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "isActive", [], "any", false, false, false, 406)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 407
                yield "                            <span class=\"badge bg-success\">
                                <i class=\"fas fa-check-circle me-1\"></i> Actif
                            </span>
                        ";
            } else {
                // line 411
                yield "                            <span class=\"badge bg-danger\">
                                <i class=\"fas fa-pause-circle me-1\"></i> Inactif
                            </span>
                        ";
            }
            // line 415
            yield "                    </div>
                    
                    <!-- Badge Type de plat à DROITE -->
                    <div class=\"position-absolute top-0 end-0 p-2\">
                        <span class=\"badge bg-primary\">
                            ";
            // line 420
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "type", [], "any", false, false, false, 420) == "food")) {
                // line 421
                yield "                                🍽️ Plat
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 422
$context["recipe"], "type", [], "any", false, false, false, 422) == "starter")) {
                // line 423
                yield "                                🥗 Entrée
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 424
$context["recipe"], "type", [], "any", false, false, false, 424) == "dessert")) {
                // line 425
                yield "                                🍰 Dessert
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 426
$context["recipe"], "type", [], "any", false, false, false, 426) == "drink")) {
                // line 427
                yield "                                🥤 Boisson
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 428
$context["recipe"], "type", [], "any", false, false, false, 428) == "side")) {
                // line 429
                yield "                                🍟 Accompagnement
                            ";
            } else {
                // line 431
                yield "                                📋 Plat
                            ";
            }
            // line 433
            yield "                        </span>
                    </div>
                </div>
                <div class=\"card-body d-flex flex-column\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h5 class=\"card-title fw-bold text-truncate mb-1\">";
            // line 439
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "name", [], "any", false, false, false, 439), "html", null, true);
            yield "</h5>
                            <p class=\"text-muted small mb-2\">
                                <i class=\"fas fa-tag me-1\"></i>";
            // line 441
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "category", [], "any", false, false, false, 441)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "category", [], "any", false, false, false, 441), "name", [], "any", false, false, false, 441), "html", null, true)) : ("Non catégorisé"));
            yield "
                            </p>
                        </div>
                        <div class=\"dropdown ms-2\">
                            <button class=\"btn btn-sm btn-light\" type=\"button\" data-bs-toggle=\"dropdown\">
                                <i class=\"fas fa-bars\"></i>
                            </button>
                            <ul class=\"dropdown-menu dropdown-menu-end\">
                                <li>
                                    <a class=\"dropdown-item\" href=\"";
            // line 450
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 450)]), "html", null, true);
            yield "\">
                                        <i class=\"fas fa-eye me-2\"></i> Voir
                                    </a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item\" href=\"";
            // line 455
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 455)]), "html", null, true);
            yield "\">
                                        <i class=\"fas fa-edit me-2\"></i> Modifier
                                    </a>
                                </li>
                                <li>
                                    ";
            // line 460
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "subscriptionActive", [], "any", false, false, false, 460)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 461
                yield "                                        <button type=\"button\" 
                                                class=\"dropdown-item toggle-recipe-btn\"
                                                data-recipe-id=\"";
                // line 463
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 463), "html", null, true);
                yield "\"
                                                data-recipe-name=\"";
                // line 464
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "name", [], "any", false, false, false, 464), "html", null, true);
                yield "\"
                                                data-current-status=\"";
                // line 465
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "isActive", [], "any", false, false, false, 465)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : ("inactive"));
                yield "\"
                                                data-token=\"";
                // line 466
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle-status" . CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 466))), "html", null, true);
                yield "\">
                                            <i class=\"fas ";
                // line 467
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "isActive", [], "any", false, false, false, 467)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-toggle-on") : ("fa-toggle-off"));
                yield " me-2\"></i>
                                            ";
                // line 468
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "isActive", [], "any", false, false, false, 468)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
                yield "
                                        </button>
                                    ";
            } else {
                // line 471
                yield "                                        <span class=\"dropdown-item text-muted disabled\">
                                            <i class=\"fas fa-ban me-2\"></i> Non disponible
                                        </span>
                                    ";
            }
            // line 475
            yield "                                </li>
                                <li><hr class=\"dropdown-divider\"></li>
                                ";
            // line 477
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "orderItems", [], "any", false, false, false, 477)) == 0))) {
                // line 478
                yield "                                    <li>
                                        <button type=\"button\" 
                                                class=\"dropdown-item text-danger delete-recipe-btn\"
                                                data-recipe-id=\"";
                // line 481
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 481), "html", null, true);
                yield "\"
                                                data-recipe-name=\"";
                // line 482
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "name", [], "any", false, false, false, 482), "html", null, true);
                yield "\"
                                                data-token=\"";
                // line 483
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 483))), "html", null, true);
                yield "\">
                                            <i class=\"fas fa-trash me-2\"></i> Supprimer
                                        </button>
                                    </li>
                                ";
            }
            // line 488
            yield "                            </ul>
                        </div>
                    </div>

                    <div class=\"d-flex justify-content-between align-items-center mb-3\">
                        <span class=\"fw-bold text-success\">";
            // line 493
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "sellingPrice", [], "any", false, false, false, 493), CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "hmaService", [], "any", false, false, false, 493)), "html", null, true);
            yield "</span>
                        <span class=\"badge bg-info\">";
            // line 494
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "recipeItems", [], "any", false, false, false, 494)), "html", null, true);
            yield " ingrédients</span>
                    </div>

                    <div class=\"d-flex gap-1 mt-auto\">
                        <a href=\"";
            // line 498
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 498)]), "html", null, true);
            yield "#ingredients\" class=\"btn btn-sm btn-outline-info flex-fill\" title=\"Ingrédients\">
                            <i class=\"fas fa-list\"></i> 
                        </a>
                        <a href=\"#\" class=\"btn btn-sm btn-outline-primary flex-fill\" title=\"Mouvements stock\">
                            <i class=\"fas fa-exchange-alt\"></i> 
                        </a>
                        <a href=\"#\" class=\"btn btn-sm btn-outline-success flex-fill\" title=\"Commandes liées\">
                            <i class=\"fas fa-shopping-cart\"></i>
                        </a>
                        ";
            // line 507
            if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 507, $this->source); })()) == "restaurant")) {
                // line 508
                yield "                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_recipe_promotions", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 508)]), "html", null, true);
                yield "\" 
                            class=\"btn btn-sm btn-outline-warning\" title=\"Promotions du plat\">
                                <i class=\"fas fa-percent\"></i> 
                            </a>
                        ";
            }
            // line 513
            yield "                    </div>
                </div>
            </div>
        </div>
        ";
            $context['_iterated'] = true;
        }
        // line 517
        if (!$context['_iterated']) {
            // line 518
            yield "        <div class=\"col-12\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-body text-center py-5\">
                    <i class=\"fas fa-utensils fa-4x text-muted mb-3\"></i>
                    <h4 class=\"text-muted fw-light\">Aucun plat trouvé</h4>
                    <p class=\"text-muted mb-4\">Modifiez vos filtres ou créez un nouveau plat.</p>
                    <a href=\"";
            // line 524
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_index");
            yield "\" class=\"btn btn-outline-primary px-4\">
                        <i class=\"fas fa-undo me-2\"></i> Réinitialiser les filtres
                    </a>
                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['recipe'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 531
        yield "    </div>

    <!-- Pagination -->
    ";
        // line 534
        if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 534, $this->source); })()) > 1)) {
            // line 535
            yield "    <div class=\"d-flex justify-content-between align-items-center mt-4\">
        <div class=\"text-muted small\">
            Page ";
            // line 537
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 537, $this->source); })()), "html", null, true);
            yield " sur ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 537, $this->source); })()), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 537, $this->source); })()), "html", null, true);
            yield " résultats)
        </div>
        <nav aria-label=\"Pagination\">
            <ul class=\"pagination pagination-sm mb-0\">
                <li class=\"page-item ";
            // line 541
            yield ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 541, $this->source); })()) <= 1)) ? ("disabled") : (""));
            yield "\">
                    <a class=\"page-link\" href=\"";
            // line 542
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 542, $this->source); })()), "request", [], "any", false, false, false, 542), "query", [], "any", false, false, false, 542), "all", [], "any", false, false, false, 542), ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 542, $this->source); })()) - 1)])), "html", null, true);
            yield "\"><i class=\"fas fa-chevron-left\"></i></a>
                </li>
                ";
            // line 544
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 544, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 545
                yield "                    <li class=\"page-item ";
                yield ((($context["i"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 545, $this->source); })()))) ? ("active") : (""));
                yield "\">
                        <a class=\"page-link\" href=\"";
                // line 546
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 546, $this->source); })()), "request", [], "any", false, false, false, 546), "query", [], "any", false, false, false, 546), "all", [], "any", false, false, false, 546), ["page" => $context["i"]])), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "</a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 549
            yield "                <li class=\"page-item ";
            yield ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 549, $this->source); })()) >= (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 549, $this->source); })()))) ? ("disabled") : (""));
            yield "\">
                    <a class=\"page-link\" href=\"";
            // line 550
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 550, $this->source); })()), "request", [], "any", false, false, false, 550), "query", [], "any", false, false, false, 550), "all", [], "any", false, false, false, 550), ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 550, $this->source); })()) + 1)])), "html", null, true);
            yield "\"><i class=\"fas fa-chevron-right\"></i></a>
                </li>
            </ul>
        </nav>
    </div>
    ";
        }
        // line 556
        yield "</div>

<!-- Modals -->
<div class=\"modal fade\" id=\"quotaReachedModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-0 shadow\">
            <div class=\"modal-header bg-warning text-white border-0\">
                <h5 class=\"modal-title\"><i class=\"fas fa-exclamation-triangle me-2\"></i> Quota atteint</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <i class=\"fas fa-ban fa-4x text-warning mb-3\"></i>
                <h5>Vous avez atteint votre limite de ";
        // line 568
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["quota"]) || array_key_exists("quota", $context) ? $context["quota"] : (function () { throw new RuntimeError('Variable "quota" does not exist.', 568, $this->source); })()), "html", null, true);
        yield " plats actifs.</h5>
                <p class=\"text-muted\">Pour ajouter de nouveaux plats, passez à un plan supérieur.</p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center\">
                <a href=\"";
        // line 572
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subscription_plans");
        yield "\" class=\"btn btn-warning btn-lg px-4\">
                    <i class=\"fas fa-arrow-up me-2\"></i> Voir les offres
                </a>
                <button type=\"button\" class=\"btn btn-outline-secondary btn-lg px-4\" data-bs-dismiss=\"modal\">Annuler</button>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"toggleRecipeModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-0 shadow\">
            <div class=\"modal-header bg-warning text-white border-0\">
                <h5 class=\"modal-title\">Confirmation</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <i class=\"fas fa-question-circle fa-4x text-primary mb-3\"></i>
                <p id=\"toggleRecipeMessage\" class=\"mb-0\"></p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center\">
                <button type=\"button\" class=\"btn btn-outline-secondary px-4\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"toggleRecipeForm\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" id=\"toggleRecipeToken\">
                    <button type=\"submit\" class=\"btn btn-warning px-4\">Confirmer</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"deleteRecipeModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-0 shadow\">
            <div class=\"modal-header bg-danger text-white border-0\">
                <h5 class=\"modal-title\"><i class=\"fas fa-exclamation-triangle me-2\"></i> Confirmation</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <i class=\"fas fa-trash-alt fa-4x text-danger mb-3\"></i>
                <p id=\"deleteRecipeMessage\" class=\"mb-0\"></p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center\">
                <button type=\"button\" class=\"btn btn-outline-secondary px-4\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"deleteRecipeForm\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteRecipeToken\">
                    <button type=\"submit\" class=\"btn btn-danger px-4\">Supprimer</button>
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

    // line 626
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

        // line 627
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/fr.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialisation Select2 pour la catégorie
    if (document.getElementById('category')) {
        \$('#category').select2({
            theme: 'bootstrap-5',
            language: 'fr',
            placeholder: '📁 Sélectionnez une catégorie',
            allowClear: true,
            width: '100%'
        });
    }

    // Initialisation Select2 pour la promotion
    if (document.getElementById('promotion')) {
        \$('#promotion').select2({
            theme: 'bootstrap-5',
            language: 'fr',
            placeholder: '🎯 Sélectionnez une promotion',
            allowClear: true,
            width: '100%'
        });
    }

    const newBtn = document.getElementById('newRecipeBtn');
    if (newBtn) {
        newBtn.addEventListener('click', function(e) {
            e.preventDefault();
            ";
        // line 658
        if ((($tmp = (isset($context["quotaReached"]) || array_key_exists("quotaReached", $context) ? $context["quotaReached"] : (function () { throw new RuntimeError('Variable "quotaReached" does not exist.', 658, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 659
            yield "                new bootstrap.Modal(document.getElementById('quotaReachedModal')).show();
            ";
        } else {
            // line 661
            yield "                window.location.href = \"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_new");
            yield "\";
            ";
        }
        // line 663
        yield "        });
    }

    // Toggle status modal
    const toggleModal = new bootstrap.Modal(document.getElementById('toggleRecipeModal'));
    const toggleForm = document.getElementById('toggleRecipeForm');
    const toggleToken = document.getElementById('toggleRecipeToken');
    const toggleMessage = document.getElementById('toggleRecipeMessage');

    document.querySelectorAll('.toggle-recipe-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const id = this.dataset.recipeId;
            const name = this.dataset.recipeName;
            const current = this.dataset.currentStatus;
            const action = current === 'active' ? 'désactiver' : 'activer';
            toggleMessage.innerText = `Êtes-vous sûr de vouloir \${action} le plat \"\${name}\" ?`;
            toggleForm.action = `/admin/recipe/\${id}/toggle-status`;
            toggleToken.value = this.dataset.token;
            toggleModal.show();
        });
    });

    // Delete modal
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteRecipeModal'));
    const deleteForm = document.getElementById('deleteRecipeForm');
    const deleteToken = document.getElementById('deleteRecipeToken');
    const deleteMessage = document.getElementById('deleteRecipeMessage');

    document.querySelectorAll('.delete-recipe-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const id = this.dataset.recipeId;
            const name = this.dataset.recipeName;
            const token = this.dataset.token;
            deleteMessage.innerHTML = `
                <div class=\"alert alert-warning mb-2 p-2\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i>Cette action est irréversible.
                </div>
                <p class=\"mb-0\">Supprimer le plat <strong>\"\${name}\"</strong> ?</p>
            `;
            deleteForm.action = `/admin/recipe/\${id}`;
            deleteToken.value = token;
            deleteModal.show();
        });
    });
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
        return "admin/recipe/index.html.twig";
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
        return array (  1157 => 663,  1151 => 661,  1147 => 659,  1145 => 658,  1111 => 627,  1098 => 626,  1034 => 572,  1027 => 568,  1013 => 556,  1004 => 550,  999 => 549,  988 => 546,  983 => 545,  979 => 544,  974 => 542,  970 => 541,  959 => 537,  955 => 535,  953 => 534,  948 => 531,  935 => 524,  927 => 518,  925 => 517,  917 => 513,  908 => 508,  906 => 507,  894 => 498,  887 => 494,  883 => 493,  876 => 488,  868 => 483,  864 => 482,  860 => 481,  855 => 478,  853 => 477,  849 => 475,  843 => 471,  837 => 468,  833 => 467,  829 => 466,  825 => 465,  821 => 464,  817 => 463,  813 => 461,  811 => 460,  803 => 455,  795 => 450,  783 => 441,  778 => 439,  770 => 433,  766 => 431,  762 => 429,  760 => 428,  757 => 427,  755 => 426,  752 => 425,  750 => 424,  747 => 423,  745 => 422,  742 => 421,  740 => 420,  733 => 415,  727 => 411,  721 => 407,  719 => 406,  714 => 403,  708 => 399,  702 => 396,  697 => 395,  695 => 394,  690 => 391,  685 => 390,  674 => 381,  667 => 379,  661 => 377,  659 => 376,  654 => 375,  652 => 374,  648 => 373,  641 => 372,  637 => 371,  625 => 362,  621 => 361,  609 => 352,  605 => 351,  590 => 339,  586 => 338,  582 => 337,  578 => 336,  574 => 335,  564 => 327,  554 => 324,  539 => 322,  533 => 320,  531 => 319,  524 => 318,  520 => 317,  507 => 307,  487 => 290,  462 => 268,  446 => 255,  430 => 242,  414 => 229,  398 => 216,  381 => 201,  371 => 197,  368 => 196,  364 => 195,  361 => 194,  351 => 190,  348 => 189,  343 => 188,  340 => 186,  330 => 179,  325 => 177,  319 => 173,  316 => 172,  307 => 164,  299 => 159,  288 => 150,  286 => 149,  279 => 144,  275 => 142,  273 => 141,  267 => 140,  263 => 139,  245 => 124,  238 => 119,  225 => 118,  104 => 7,  91 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/recipe/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Menu {{ companyName }} - HMA Market{% endblock %}

{% block stylesheets %}
{{ parent() }}
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
<link href=\"https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css\" rel=\"stylesheet\" />
<style>
.hover-card {
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}
.hover-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.08) !important;
}
.stat-item {
    transition: background-color 0.2s;
}
.stat-item:hover {
    background-color: #e9ecef !important;
}
.recipe-image-container {
    position: relative;
    height: 160px;
    overflow: hidden;
    border-radius: 8px 8px 0 0;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    display: flex;
    align-items: center;
    justify-content: center;
}
.recipe-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.recipe-image-placeholder {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
}
.badge {
    font-weight: 500;
    letter-spacing: 0.3px;
}
/* Styles Select2 - Correction d'alignement vertical */
.select2-container--bootstrap-5 .select2-selection {
    height: 38px !important;
    padding: 0 !important;
}
.select2-container--bootstrap-5 .select2-selection--single {
    height: 38px !important;
    border-radius: 8px !important;
    background-color: #f8f9fa !important;
    border-color: #e9ecef !important;
    display: flex !important;
    align-items: center !important;
}
.select2-container--bootstrap-5 .select2-selection--single .select2-selection__rendered {
    line-height: normal !important;
    padding: 8px 12px !important;
    color: #212529 !important;
    display: block !important;
}
.select2-container--bootstrap-5 .select2-selection--single .select2-selection__arrow {
    height: 36px !important;
    position: absolute !important;
    top: 1px !important;
    right: 5px !important;
}
/* Correction pour les selects normaux */
.form-select.bg-light.border-0 {
    height: 38px;
    padding: 8px 12px;
}
.select2-container--bootstrap-5 .select2-search--dropdown .select2-search__field {
    padding: 8px 12px !important;
    border-radius: 6px !important;
    border-color: #e9ecef !important;
}
.select2-container--bootstrap-5 .select2-results__option {
    padding: 8px 12px !important;
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
.select2-container--bootstrap-5 .select2-results__option--highlighted {
    background-color: #e9ecef !important;
    color: #0463f1 !important;
}
@media (max-width: 768px) {
    .pagination {
        flex-wrap: wrap;
        justify-content: center;
    }
    .d-flex.gap-1 {
        flex-wrap: wrap;
    }
}
@media (min-width: 992px) {
    .row-cols-lg-5 > .col {
        flex: 0 0 20%;
        max-width: 20%;
    }
}
</style>
{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
    <!-- En-tête avec quota et bouton d'ajout -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <h1 class=\"h3 mb-0 text-gray-800 fw-bold\">
                <i class=\"fas fa-utensils me-2\"></i>Menu {{ companyName }}
            </h1>
            <p class=\"text-muted mt-1\">Gérez vos plats et recettes</p>
        </div>
        
        <div class=\"d-flex align-items-center gap-3 flex-wrap\">
            <div class=\"card bg-light border-0 shadow-sm p-2\">
                <div class=\"d-flex align-items-center\">
                    <div class=\"me-2\">
                        <span class=\"badge bg-primary p-2 rounded-circle\">
                            <i class=\"fas fa-chart-line fa-fw\"></i>
                        </span>
                    </div>
                    <div>
                        <small class=\"text-muted d-block\">Plats dans quota</small>
                        <h6 class=\"mb-0 {{ quotaReached ? 'text-danger' : 'text-success' }} fw-bold\">
                            {{ activeCount }} / {{ quota }}
                            {% if quota == 'Illimité' %}
                                <i class=\"fas fa-infinity text-info ms-1 small\"></i>
                            {% endif %}
                        </h6>
                    </div>
                </div>
            </div>

            {% if subscriptionInactiveFiltered > 0 %}
            <div class=\"card bg-light border-0 shadow-sm p-2\">
                <div class=\"d-flex align-items-center\">
                    <div class=\"me-2\">
                        <span class=\"badge bg-warning p-2 rounded-circle\">
                            <i class=\"fas fa-clock fa-fw\"></i>
                        </span>
                    </div>
                    <div>
                        <small class=\"text-muted d-block\">En attente</small>
                        <h6 class=\"mb-0 fw-bold\">{{ subscriptionInactiveFiltered }}</h6>
                    </div>
                </div>
            </div>
            {% endif %}

            <a href=\"#\" id=\"newRecipeBtn\" class=\"btn btn-primary shadow-sm\">
                <i class=\"fas fa-plus-circle me-2\"></i> Nouveau Plat
            </a>
        </div>
    </div>

    {# Message si quota atteint #}
    {% if quotaReached %}
    <div class=\"alert alert-warning alert-dismissible fade show shadow-sm\" role=\"alert\">
        <div class=\"d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <div>
                <i class=\"fas fa-exclamation-triangle me-2\"></i>
                <strong>Quota atteint !</strong> Vous avez utilisé vos {{ quota }} plats actifs.
            </div>
            <a href=\"{{ path('app_subscription_plans') }}\" class=\"btn btn-warning btn-sm\">
                <i class=\"fas fa-arrow-up me-1\"></i> Voir les offres
            </a>
        </div>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    </div>
    {% endif %}

    {# Flash messages #}
    {% for message in app.flashes('success') %}
        <div class=\"alert alert-success alert-dismissible fade show shadow-sm\" role=\"alert\">
            <i class=\"fas fa-check-circle me-2\"></i> {{ message }}
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    {% endfor %}
    
    {% for message in app.flashes('error') %}
        <div class=\"alert alert-danger alert-dismissible fade show shadow-sm\" role=\"alert\">
            <i class=\"fas fa-exclamation-circle me-2\"></i> {{ message }}
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    {% endfor %}

    <!-- Statistiques filtrées -->
    <div class=\"card shadow-sm border-0 mb-4\">
        <div class=\"card-header bg-white py-3\">
            <h5 class=\"mb-0 fw-semibold\">
                <i class=\"fas fa-chart-pie text-primary me-2\"></i>Statistiques selon les filtres
            </h5>
        </div>
        <div class=\"card-body\">
            <div class=\"row g-3 row-cols-2 row-cols-md-4 row-cols-lg-5\">
                <div class=\"col\">
                    <div class=\"stat-item p-3 bg-light rounded-3 h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted text-uppercase small fw-bold\">Filtrés</span>
                                <h3 class=\"mb-0 fw-bold\">{{ totalFiltered }}</h3>
                            </div>
                            <div class=\"bg-primary p-2 rounded-3\">
                                <i class=\"fas fa-utensils text-white fs-3\"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col\">
                    <div class=\"stat-item p-3 bg-light rounded-3 h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted text-uppercase small fw-bold\">Actifs</span>
                                <h3 class=\"mb-0 fw-bold text-success\">{{ activeFiltered }}</h3>
                            </div>
                            <div class=\"bg-success p-2 rounded-3\">
                                <i class=\"fas fa-check-circle text-white fs-3\"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col\">
                    <div class=\"stat-item p-3 bg-light rounded-3 h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted text-uppercase small fw-bold\">Inactifs</span>
                                <h3 class=\"mb-0 fw-bold text-danger\">{{ inactiveFiltered }}</h3>
                            </div>
                            <div class=\"bg-danger p-2 rounded-3\">
                                <i class=\"fas fa-pause-circle text-white fs-3\"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col\">
                    <div class=\"stat-item p-3 bg-light rounded-3 h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted text-uppercase small fw-bold\">Abonnement actif</span>
                                <h3 class=\"mb-0 fw-bold text-info\">{{ subscriptionActiveFiltered }}</h3>
                            </div>
                            <div class=\"bg-info p-2 rounded-3\">
                                <i class=\"fas fa-database text-white fs-3\"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col\">
                    <div class=\"stat-item p-3 bg-light rounded-3 h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted text-uppercase small fw-bold\">Abonnement inactif</span>
                                <h3 class=\"mb-0 fw-bold text-secondary\">{{ subscriptionInactiveFiltered }}</h3>
                            </div>
                            <div class=\"bg-secondary p-2 rounded-3\">
                                <i class=\"fas fa-clock text-white fs-3\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Formulaire de filtres -->
    <div class=\"card shadow-sm border-0 mb-4\">
        <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center flex-wrap gap-3\">
            <h5 class=\"mb-0 fw-semibold\">
                <i class=\"fas fa-filter text-primary me-2\"></i>Filtres
            </h5>
            <div class=\"d-flex gap-2\">
                <button type=\"submit\" form=\"filter-form\" class=\"btn btn-primary\">
                    <i class=\"fas fa-filter me-2\"></i>Filtrer
                </button>
                <a href=\"{{ path('app_admin_recipe_index') }}\" class=\"btn btn-outline-secondary\">
                    <i class=\"fas fa-undo me-2\"></i>Effacer
                </a>
            </div>
        </div>
        <div class=\"card-body\">
            <form method=\"get\" id=\"filter-form\">
                <!-- Première ligne : 3 éléments -->
                <div class=\"row g-3 mb-3\">
                    <div class=\"col-lg-4 col-md-6\">
                        <label for=\"search\" class=\"form-label fw-semibold\">
                            <i class=\"fas fa-search text-primary me-1\"></i>Rechercher
                        </label>
                        <div class=\"input-group\">
                            <span class=\"input-group-text bg-light border-0\">
                                <i class=\"fas fa-search text-muted\"></i>
                            </span>
                            <input type=\"text\" name=\"search\" id=\"search\" value=\"{{ search }}\" 
                                   class=\"form-control bg-light border-0\" placeholder=\"Nom du plat...\">
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <label for=\"category\" class=\"form-label fw-semibold\">
                            <i class=\"fas fa-tags text-info me-1\"></i>Catégorie
                        </label>
                        <select name=\"category\" id=\"category\" class=\"form-select\" style=\"width: 100%;\">
                            <option value=\"0\">📁 Toutes les catégories</option>
                            {% for category in categories %}
                                <option value=\"{{ category.id }}\" {{ selectedCategory == category.id ? 'selected' : '' }}>
                                    {% if category.level == 0 %}
                                        📁 {{ category.name }}
                                    {% else %}
                                        {% for i in 1..category.level %}&nbsp;&nbsp;&nbsp;{% endfor %}↳ {{ category.name }}
                                    {% endif %}
                                    <span class=\"text-muted\">({{ category.recipeCount }})</span>
                                </option>
                            {% endfor %}
                        </select>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <label for=\"type\" class=\"form-label fw-semibold\">
                            <i class=\"fas fa-tag text-primary me-1\"></i>Type de plat
                        </label>
                        <select name=\"type\" id=\"type\" class=\"form-select bg-light border-0\">
                            <option value=\"\">Tous les types</option>
                            <option value=\"food\" {{ selectedType == 'food' ? 'selected' : '' }}>🍽️ Plat principal</option>
                            <option value=\"starter\" {{ selectedType == 'starter' ? 'selected' : '' }}>🥗 Entrée</option>
                            <option value=\"dessert\" {{ selectedType == 'dessert' ? 'selected' : '' }}>🍰 Dessert</option>
                            <option value=\"drink\" {{ selectedType == 'drink' ? 'selected' : '' }}>🥤 Boisson</option>
                            <option value=\"side\" {{ selectedType == 'side' ? 'selected' : '' }}>🍟 Accompagnement</option>
                        </select>
                    </div>
                </div>
                <!-- Deuxième ligne : 3 éléments -->
                <div class=\"row g-3\">
                    <div class=\"col-lg-4 col-md-6\">
                        <label for=\"status\" class=\"form-label fw-semibold\">
                            <i class=\"fas fa-toggle-on text-success me-1\"></i>Statut
                        </label>
                        <select name=\"status\" id=\"status\" class=\"form-select bg-light border-0\">
                            <option value=\"\">Tous</option>
                            <option value=\"active\" {{ selectedStatus == 'active' ? 'selected' : '' }}>✅ Actifs</option>
                            <option value=\"inactive\" {{ selectedStatus == 'inactive' ? 'selected' : '' }}>⛔ Inactifs</option>
                        </select>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <label for=\"subscription_status\" class=\"form-label fw-semibold\">
                            <i class=\"fas fa-credit-card text-warning me-1\"></i>Abonnement
                        </label>
                        <select name=\"subscription_status\" id=\"subscription_status\" class=\"form-select bg-light border-0\">
                            <option value=\"\">Tous</option>
                            <option value=\"active\" {{ selectedSubscriptionStatus == 'active' ? 'selected' : '' }}>✅ Dans le quota</option>
                            <option value=\"inactive\" {{ selectedSubscriptionStatus == 'inactive' ? 'selected' : '' }}>⏳ Hors quota</option>
                        </select>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <label for=\"promotion\" class=\"form-label fw-semibold\">
                            <i class=\"fas fa-tags text-danger me-1\"></i>Promotion
                        </label>
                        <select name=\"promotion\" id=\"promotion\" class=\"form-select\" style=\"width: 100%;\">
                            <option value=\"0\">🎯 Toutes les promotions</option>
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
            </form>
        </div>
    </div>

    <!-- Grille de plats -->
    <div class=\"row g-4\">
        {% for recipe in recipes %}
        <div class=\"col-xl-3 col-lg-4 col-md-6\">
            <div class=\"card h-100 border-0 shadow-sm hover-card\">
                <div class=\"recipe-image-container position-relative\">
                    {% if recipe.image %}
                        <img src=\"{{ asset('uploads/images_plats/' ~ recipe.image) }}\" 
                             alt=\"{{ recipe.name }}\" 
                             class=\"card-img-top recipe-image\">
                    {% else %}
                        <div class=\"recipe-image-placeholder\">
                            <i class=\"fas fa-utensils fa-4x text-muted\"></i>
                        </div>
                    {% endif %}

                    <!-- Badge Actif/Inactif à GAUCHE -->
                    <div class=\"position-absolute top-0 start-0 p-2\">
                        {% if recipe.isActive %}
                            <span class=\"badge bg-success\">
                                <i class=\"fas fa-check-circle me-1\"></i> Actif
                            </span>
                        {% else %}
                            <span class=\"badge bg-danger\">
                                <i class=\"fas fa-pause-circle me-1\"></i> Inactif
                            </span>
                        {% endif %}
                    </div>
                    
                    <!-- Badge Type de plat à DROITE -->
                    <div class=\"position-absolute top-0 end-0 p-2\">
                        <span class=\"badge bg-primary\">
                            {% if recipe.type == 'food' %}
                                🍽️ Plat
                            {% elseif recipe.type == 'starter' %}
                                🥗 Entrée
                            {% elseif recipe.type == 'dessert' %}
                                🍰 Dessert
                            {% elseif recipe.type == 'drink' %}
                                🥤 Boisson
                            {% elseif recipe.type == 'side' %}
                                🍟 Accompagnement
                            {% else %}
                                📋 Plat
                            {% endif %}
                        </span>
                    </div>
                </div>
                <div class=\"card-body d-flex flex-column\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h5 class=\"card-title fw-bold text-truncate mb-1\">{{ recipe.name }}</h5>
                            <p class=\"text-muted small mb-2\">
                                <i class=\"fas fa-tag me-1\"></i>{{ recipe.category ? recipe.category.name : 'Non catégorisé' }}
                            </p>
                        </div>
                        <div class=\"dropdown ms-2\">
                            <button class=\"btn btn-sm btn-light\" type=\"button\" data-bs-toggle=\"dropdown\">
                                <i class=\"fas fa-bars\"></i>
                            </button>
                            <ul class=\"dropdown-menu dropdown-menu-end\">
                                <li>
                                    <a class=\"dropdown-item\" href=\"{{ path('app_admin_recipe_show', {'id': recipe.id}) }}\">
                                        <i class=\"fas fa-eye me-2\"></i> Voir
                                    </a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item\" href=\"{{ path('app_admin_recipe_edit', {'id': recipe.id}) }}\">
                                        <i class=\"fas fa-edit me-2\"></i> Modifier
                                    </a>
                                </li>
                                <li>
                                    {% if recipe.subscriptionActive %}
                                        <button type=\"button\" 
                                                class=\"dropdown-item toggle-recipe-btn\"
                                                data-recipe-id=\"{{ recipe.id }}\"
                                                data-recipe-name=\"{{ recipe.name }}\"
                                                data-current-status=\"{{ recipe.isActive ? 'active' : 'inactive' }}\"
                                                data-token=\"{{ csrf_token('toggle-status' ~ recipe.id) }}\">
                                            <i class=\"fas {{ recipe.isActive ? 'fa-toggle-on' : 'fa-toggle-off' }} me-2\"></i>
                                            {{ recipe.isActive ? 'Désactiver' : 'Activer' }}
                                        </button>
                                    {% else %}
                                        <span class=\"dropdown-item text-muted disabled\">
                                            <i class=\"fas fa-ban me-2\"></i> Non disponible
                                        </span>
                                    {% endif %}
                                </li>
                                <li><hr class=\"dropdown-divider\"></li>
                                {% if is_granted('ROLE_ADMIN') and recipe.orderItems|length == 0 %}
                                    <li>
                                        <button type=\"button\" 
                                                class=\"dropdown-item text-danger delete-recipe-btn\"
                                                data-recipe-id=\"{{ recipe.id }}\"
                                                data-recipe-name=\"{{ recipe.name }}\"
                                                data-token=\"{{ csrf_token('delete' ~ recipe.id) }}\">
                                            <i class=\"fas fa-trash me-2\"></i> Supprimer
                                        </button>
                                    </li>
                                {% endif %}
                            </ul>
                        </div>
                    </div>

                    <div class=\"d-flex justify-content-between align-items-center mb-3\">
                        <span class=\"fw-bold text-success\">{{ recipe.sellingPrice|price_with_currency(recipe.hmaService) }}</span>
                        <span class=\"badge bg-info\">{{ recipe.recipeItems|length }} ingrédients</span>
                    </div>

                    <div class=\"d-flex gap-1 mt-auto\">
                        <a href=\"{{ path('app_admin_recipe_show', {'id': recipe.id}) }}#ingredients\" class=\"btn btn-sm btn-outline-info flex-fill\" title=\"Ingrédients\">
                            <i class=\"fas fa-list\"></i> 
                        </a>
                        <a href=\"#\" class=\"btn btn-sm btn-outline-primary flex-fill\" title=\"Mouvements stock\">
                            <i class=\"fas fa-exchange-alt\"></i> 
                        </a>
                        <a href=\"#\" class=\"btn btn-sm btn-outline-success flex-fill\" title=\"Commandes liées\">
                            <i class=\"fas fa-shopping-cart\"></i>
                        </a>
                        {% if companyType == 'restaurant' %}
                            <a href=\"{{ path('app_restaurant_recipe_promotions', {'id': recipe.id}) }}\" 
                            class=\"btn btn-sm btn-outline-warning\" title=\"Promotions du plat\">
                                <i class=\"fas fa-percent\"></i> 
                            </a>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
        {% else %}
        <div class=\"col-12\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-body text-center py-5\">
                    <i class=\"fas fa-utensils fa-4x text-muted mb-3\"></i>
                    <h4 class=\"text-muted fw-light\">Aucun plat trouvé</h4>
                    <p class=\"text-muted mb-4\">Modifiez vos filtres ou créez un nouveau plat.</p>
                    <a href=\"{{ path('app_admin_recipe_index') }}\" class=\"btn btn-outline-primary px-4\">
                        <i class=\"fas fa-undo me-2\"></i> Réinitialiser les filtres
                    </a>
                </div>
            </div>
        </div>
        {% endfor %}
    </div>

    <!-- Pagination -->
    {% if totalPages > 1 %}
    <div class=\"d-flex justify-content-between align-items-center mt-4\">
        <div class=\"text-muted small\">
            Page {{ currentPage }} sur {{ totalPages }} ({{ totalItems }} résultats)
        </div>
        <nav aria-label=\"Pagination\">
            <ul class=\"pagination pagination-sm mb-0\">
                <li class=\"page-item {{ currentPage <= 1 ? 'disabled' }}\">
                    <a class=\"page-link\" href=\"{{ path('app_admin_recipe_index', app.request.query.all|merge({'page': currentPage - 1})) }}\"><i class=\"fas fa-chevron-left\"></i></a>
                </li>
                {% for i in 1..totalPages %}
                    <li class=\"page-item {{ i == currentPage ? 'active' }}\">
                        <a class=\"page-link\" href=\"{{ path('app_admin_recipe_index', app.request.query.all|merge({'page': i})) }}\">{{ i }}</a>
                    </li>
                {% endfor %}
                <li class=\"page-item {{ currentPage >= totalPages ? 'disabled' }}\">
                    <a class=\"page-link\" href=\"{{ path('app_admin_recipe_index', app.request.query.all|merge({'page': currentPage + 1})) }}\"><i class=\"fas fa-chevron-right\"></i></a>
                </li>
            </ul>
        </nav>
    </div>
    {% endif %}
</div>

<!-- Modals -->
<div class=\"modal fade\" id=\"quotaReachedModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-0 shadow\">
            <div class=\"modal-header bg-warning text-white border-0\">
                <h5 class=\"modal-title\"><i class=\"fas fa-exclamation-triangle me-2\"></i> Quota atteint</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <i class=\"fas fa-ban fa-4x text-warning mb-3\"></i>
                <h5>Vous avez atteint votre limite de {{ quota }} plats actifs.</h5>
                <p class=\"text-muted\">Pour ajouter de nouveaux plats, passez à un plan supérieur.</p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center\">
                <a href=\"{{ path('app_subscription_plans') }}\" class=\"btn btn-warning btn-lg px-4\">
                    <i class=\"fas fa-arrow-up me-2\"></i> Voir les offres
                </a>
                <button type=\"button\" class=\"btn btn-outline-secondary btn-lg px-4\" data-bs-dismiss=\"modal\">Annuler</button>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"toggleRecipeModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-0 shadow\">
            <div class=\"modal-header bg-warning text-white border-0\">
                <h5 class=\"modal-title\">Confirmation</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <i class=\"fas fa-question-circle fa-4x text-primary mb-3\"></i>
                <p id=\"toggleRecipeMessage\" class=\"mb-0\"></p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center\">
                <button type=\"button\" class=\"btn btn-outline-secondary px-4\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"toggleRecipeForm\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" id=\"toggleRecipeToken\">
                    <button type=\"submit\" class=\"btn btn-warning px-4\">Confirmer</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"deleteRecipeModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-0 shadow\">
            <div class=\"modal-header bg-danger text-white border-0\">
                <h5 class=\"modal-title\"><i class=\"fas fa-exclamation-triangle me-2\"></i> Confirmation</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <i class=\"fas fa-trash-alt fa-4x text-danger mb-3\"></i>
                <p id=\"deleteRecipeMessage\" class=\"mb-0\"></p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center\">
                <button type=\"button\" class=\"btn btn-outline-secondary px-4\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"deleteRecipeForm\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteRecipeToken\">
                    <button type=\"submit\" class=\"btn btn-danger px-4\">Supprimer</button>
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
    // Initialisation Select2 pour la catégorie
    if (document.getElementById('category')) {
        \$('#category').select2({
            theme: 'bootstrap-5',
            language: 'fr',
            placeholder: '📁 Sélectionnez une catégorie',
            allowClear: true,
            width: '100%'
        });
    }

    // Initialisation Select2 pour la promotion
    if (document.getElementById('promotion')) {
        \$('#promotion').select2({
            theme: 'bootstrap-5',
            language: 'fr',
            placeholder: '🎯 Sélectionnez une promotion',
            allowClear: true,
            width: '100%'
        });
    }

    const newBtn = document.getElementById('newRecipeBtn');
    if (newBtn) {
        newBtn.addEventListener('click', function(e) {
            e.preventDefault();
            {% if quotaReached %}
                new bootstrap.Modal(document.getElementById('quotaReachedModal')).show();
            {% else %}
                window.location.href = \"{{ path('app_admin_recipe_new') }}\";
            {% endif %}
        });
    }

    // Toggle status modal
    const toggleModal = new bootstrap.Modal(document.getElementById('toggleRecipeModal'));
    const toggleForm = document.getElementById('toggleRecipeForm');
    const toggleToken = document.getElementById('toggleRecipeToken');
    const toggleMessage = document.getElementById('toggleRecipeMessage');

    document.querySelectorAll('.toggle-recipe-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const id = this.dataset.recipeId;
            const name = this.dataset.recipeName;
            const current = this.dataset.currentStatus;
            const action = current === 'active' ? 'désactiver' : 'activer';
            toggleMessage.innerText = `Êtes-vous sûr de vouloir \${action} le plat \"\${name}\" ?`;
            toggleForm.action = `/admin/recipe/\${id}/toggle-status`;
            toggleToken.value = this.dataset.token;
            toggleModal.show();
        });
    });

    // Delete modal
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteRecipeModal'));
    const deleteForm = document.getElementById('deleteRecipeForm');
    const deleteToken = document.getElementById('deleteRecipeToken');
    const deleteMessage = document.getElementById('deleteRecipeMessage');

    document.querySelectorAll('.delete-recipe-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const id = this.dataset.recipeId;
            const name = this.dataset.recipeName;
            const token = this.dataset.token;
            deleteMessage.innerHTML = `
                <div class=\"alert alert-warning mb-2 p-2\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i>Cette action est irréversible.
                </div>
                <p class=\"mb-0\">Supprimer le plat <strong>\"\${name}\"</strong> ?</p>
            `;
            deleteForm.action = `/admin/recipe/\${id}`;
            deleteToken.value = token;
            deleteModal.show();
        });
    });
});
</script>
{% endblock %}", "admin/recipe/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\recipe\\index.html.twig");
    }
}
