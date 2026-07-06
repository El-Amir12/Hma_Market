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

/* admin/category/index.html.twig */
class __TwigTemplate_91dfe31dce5d2f33847894837f89536f extends Template
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
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/category/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/category/index.html.twig"));

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

        yield "Catégories de produits - HMA Market";
        
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
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
<link href=\"https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css\" rel=\"stylesheet\" />
<style>
.category-card {
    transition: transform 0.2s, box-shadow 0.2s;
}
.category-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.1) !important;
}

.category-image-wrapper {
    height: 130px;
    overflow: hidden;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
}

.category-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s;
}

.category-card:hover .category-image {
    transform: scale(1.05);
}

.category-placeholder {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.stat-card {
    transition: transform 0.2s, box-shadow 0.2s;
}
.stat-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.08) !important;
}

.stat-icon {
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.fs-10 {
    font-size: 10px;
}

.badge {
    font-weight: 500;
    font-size: 11px;
    padding: 4px 8px;
}

.btn-sm {
    font-size: 12px;
}

.rounded-circle {
    border-radius: 50% !important;
}

.hover-card {
    transition: all 0.2s ease;
}

/* Styles Select2 - Correction d'alignement vertical */
.select2-container--bootstrap-5 .select2-selection {
    height: 38px !important;
    padding: 0 !important;
}
.select2-container--bootstrap-5 .select2-selection--single {
    height: 38px !important;
    border-radius: 8px !important;
    background-color: #fff !important;
    border-color: #dee2e6 !important;
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
.select2-container--bootstrap-5 .select2-dropdown {
    border-color: #e9ecef !important;
    border-radius: 8px !important;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1) !important;
}
.select2-container--bootstrap-5 .select2-search--dropdown .select2-search__field {
    padding: 8px 12px !important;
    border-radius: 6px !important;
    border-color: #e9ecef !important;
}
.select2-container--bootstrap-5 .select2-results__option {
    padding: 8px 12px !important;
}
.select2-container--bootstrap-5 .select2-results__option--selected {
    background-color: #0463f1 !important;
    color: white !important;
}
.select2-container--bootstrap-5 .select2-results__option--highlighted {
    background-color: #e9ecef !important;
    color: #0463f1 !important;
}

/* ✅ Badges en bas de la carte */
.category-badges {
    display: flex;
    flex-wrap: wrap;
    gap: 4px;
    margin-top: 0.5rem;
}

.category-badges .badge {
    font-size: 9px;
    padding: 3px 6px;
}

@media (max-width: 768px) {
    .stat-icon {
        width: 40px;
        height: 40px;
    }
    .stat-icon i {
        font-size: 1.25rem;
    }
    .category-image-wrapper {
        height: 100px;
    }
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 158
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

        // line 159
        yield "<div class=\"container-fluid px-4\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <h1 class=\"h3 mb-1 fw-bold\">
                <i class=\"fas fa-tags me-2 text-primary\"></i>Catégories de produits
            </h1>
            <p class=\"text-muted mb-0\">Organisez et gérez vos catégories de produits</p>
        </div>

        <div class=\"d-flex align-items-center gap-3\">
            <!-- Indicateur de quota -->
            <div class=\"stat-badge d-flex align-items-center bg-light rounded-3 p-2 px-3\">
                <div class=\"me-2\">
                    <span class=\"badge bg-primary p-2 rounded-circle\">
                        <i class=\"fas fa-chart-line fa-sm\"></i>
                    </span>
                </div>
                <div>
                    <small class=\"text-muted d-block lh-1\">Catégories actives</small>
                    <strong class=\"";
        // line 179
        yield (((($tmp = (isset($context["quotaReached"]) || array_key_exists("quotaReached", $context) ? $context["quotaReached"] : (function () { throw new RuntimeError('Variable "quotaReached" does not exist.', 179, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-danger") : ("text-success"));
        yield " fs-5\">
                        ";
        // line 180
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activeCount"]) || array_key_exists("activeCount", $context) ? $context["activeCount"] : (function () { throw new RuntimeError('Variable "activeCount" does not exist.', 180, $this->source); })()), "html", null, true);
        yield " / ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["quota"]) || array_key_exists("quota", $context) ? $context["quota"] : (function () { throw new RuntimeError('Variable "quota" does not exist.', 180, $this->source); })()), "html", null, true);
        yield "
                        ";
        // line 181
        if (((isset($context["quota"]) || array_key_exists("quota", $context) ? $context["quota"] : (function () { throw new RuntimeError('Variable "quota" does not exist.', 181, $this->source); })()) == "Illimité")) {
            // line 182
            yield "                            <i class=\"fas fa-infinity text-info ms-1 fa-xs\"></i>
                        ";
        }
        // line 184
        yield "                    </strong>
                </div>
            </div>

            <!-- Catégories hors quota -->
            ";
        // line 189
        if (((isset($context["subscriptionInactiveCount"]) || array_key_exists("subscriptionInactiveCount", $context) ? $context["subscriptionInactiveCount"] : (function () { throw new RuntimeError('Variable "subscriptionInactiveCount" does not exist.', 189, $this->source); })()) > 0)) {
            // line 190
            yield "            <div class=\"stat-badge d-flex align-items-center bg-light rounded-3 p-2 px-3\">
                <div class=\"me-2\">
                    <span class=\"badge bg-warning p-2 rounded-circle\">
                        <i class=\"fas fa-clock fa-sm\"></i>
                    </span>
                </div>
                <div>
                    <small class=\"text-muted d-block lh-1\">Hors quota</small>
                    <strong class=\"fs-5\">";
            // line 198
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subscriptionInactiveCount"]) || array_key_exists("subscriptionInactiveCount", $context) ? $context["subscriptionInactiveCount"] : (function () { throw new RuntimeError('Variable "subscriptionInactiveCount" does not exist.', 198, $this->source); })()), "html", null, true);
            yield "</strong>
                </div>
            </div>
            ";
        }
        // line 202
        yield "
            <a href=\"#\" id=\"newCategoryBtn\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus-circle me-2\"></i> Nouvelle catégorie
            </a>
        </div>
    </div>

    ";
        // line 210
        yield "    ";
        if (((isset($context["quotaReached"]) || array_key_exists("quotaReached", $context) ? $context["quotaReached"] : (function () { throw new RuntimeError('Variable "quotaReached" does not exist.', 210, $this->source); })()) && ((isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 210, $this->source); })()) != "premium"))) {
            // line 211
            yield "    <div class=\"alert alert-warning alert-dismissible fade show mb-4\" role=\"alert\">
        <div class=\"d-flex justify-content-between align-items-center\">
            <div>
                <i class=\"fas fa-exclamation-triangle me-2\"></i>
                <strong>Quota atteint !</strong> Vous avez utilisé vos ";
            // line 215
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["quota"]) || array_key_exists("quota", $context) ? $context["quota"] : (function () { throw new RuntimeError('Variable "quota" does not exist.', 215, $this->source); })()), "html", null, true);
            yield " catégories actives.
            </div>
            <a href=\"";
            // line 217
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subscription_plans");
            yield "\" class=\"btn btn-warning btn-sm\">
                <i class=\"fas fa-arrow-up me-1\"></i> Voir les offres
            </a>
        </div>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    </div>
    ";
        }
        // line 224
        yield "
    ";
        // line 226
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 226, $this->source); })()), "flashes", ["success"], "method", false, false, false, 226));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 227
            yield "        <div class=\"alert alert-success alert-dismissible fade show mb-3\" role=\"alert\">
            <i class=\"fas fa-check-circle me-2\"></i> ";
            // line 228
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 232
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 232, $this->source); })()), "flashes", ["error"], "method", false, false, false, 232));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 233
            yield "        <div class=\"alert alert-danger alert-dismissible fade show mb-3\" role=\"alert\">
            <i class=\"fas fa-exclamation-circle me-2\"></i> ";
            // line 234
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 238
        yield "
    <!-- Container des statistiques dynamiques -->
    <div class=\"card shadow mb-4\">
        <div class=\"card-header bg-white py-3\">
            <h5 class=\"mb-0\">
                <i class=\"fas fa-chart-pie me-2\"></i>Statistiques selon les filtres
            </h5>
        </div>
        <div class=\"card-body\">
            <div class=\"row\">
                <!-- Première ligne : 4 cartes -->
                <div class=\"col-md-3 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-primary text-uppercase small fw-bold\">Total</span>
                                <h3 class=\"mb-0\">";
        // line 254
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalFiltered"]) || array_key_exists("totalFiltered", $context) ? $context["totalFiltered"] : (function () { throw new RuntimeError('Variable "totalFiltered" does not exist.', 254, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-folder fa-2x text-primary opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-success text-uppercase small fw-bold\">Actives</span>
                                <h3 class=\"mb-0 text-success\">";
        // line 265
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activeFiltered"]) || array_key_exists("activeFiltered", $context) ? $context["activeFiltered"] : (function () { throw new RuntimeError('Variable "activeFiltered" does not exist.', 265, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-check-circle fa-2x text-success opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-danger text-uppercase small fw-bold\">Inactives</span>
                                <h3 class=\"mb-0 text-danger\">";
        // line 276
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["inactiveFiltered"]) || array_key_exists("inactiveFiltered", $context) ? $context["inactiveFiltered"] : (function () { throw new RuntimeError('Variable "inactiveFiltered" does not exist.', 276, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-pause-circle fa-2x text-danger opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-info text-uppercase small fw-bold\">Principales</span>
                                <h3 class=\"mb-0 text-info\">";
        // line 287
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["mainFiltered"]) || array_key_exists("mainFiltered", $context) ? $context["mainFiltered"] : (function () { throw new RuntimeError('Variable "mainFiltered" does not exist.', 287, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-sitemap fa-2x text-info opacity-50\"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <!-- Deuxième ligne : 3 cartes -->
                <div class=\"col-md-4 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-warning text-uppercase small fw-bold\">Sous-catégories</span>
                                <h3 class=\"mb-0 text-warning\">";
        // line 301
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subFiltered"]) || array_key_exists("subFiltered", $context) ? $context["subFiltered"] : (function () { throw new RuntimeError('Variable "subFiltered" does not exist.', 301, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-folder-tree fa-2x text-warning opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-info text-uppercase small fw-bold\">Abonnement actif</span>
                                <h3 class=\"mb-0 text-info\">";
        // line 312
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subscriptionActiveFiltered"]) || array_key_exists("subscriptionActiveFiltered", $context) ? $context["subscriptionActiveFiltered"] : (function () { throw new RuntimeError('Variable "subscriptionActiveFiltered" does not exist.', 312, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-database fa-2x text-info opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-secondary text-uppercase small fw-bold\">Abonnement inactif</span>
                                <h3 class=\"mb-0 text-secondary\">";
        // line 323
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subscriptionInactiveFiltered"]) || array_key_exists("subscriptionInactiveFiltered", $context) ? $context["subscriptionInactiveFiltered"] : (function () { throw new RuntimeError('Variable "subscriptionInactiveFiltered" does not exist.', 323, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-clock fa-2x text-secondary opacity-50\"></i>
                        </div>
                    </div>
                </div>
            </div>
            ";
        // line 331
        yield "            ";
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 331, $this->source); })()) == "pharmacy")) {
            // line 332
            yield "            <div class=\"row mt-3 border-top pt-3\">
                <div class=\"col-md-6 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-success text-uppercase small fw-bold\">Visibles sur marketplace</span>
                                <h3 class=\"mb-0 text-success\">";
            // line 338
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["visibleFiltered"]) || array_key_exists("visibleFiltered", $context) ? $context["visibleFiltered"] : (function () { throw new RuntimeError('Variable "visibleFiltered" does not exist.', 338, $this->source); })()), "html", null, true);
            yield "</h3>
                            </div>
                            <i class=\"fas fa-eye fa-2x text-success opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-secondary text-uppercase small fw-bold\">Masquées sur marketplace</span>
                                <h3 class=\"mb-0 text-secondary\">";
            // line 349
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["hiddenFiltered"]) || array_key_exists("hiddenFiltered", $context) ? $context["hiddenFiltered"] : (function () { throw new RuntimeError('Variable "hiddenFiltered" does not exist.', 349, $this->source); })()), "html", null, true);
            yield "</h3>
                            </div>
                            <i class=\"fas fa-eye-slash fa-2x text-secondary opacity-50\"></i>
                        </div>
                    </div>
                </div>
            </div>
            ";
        }
        // line 357
        yield "        </div>
    </div>

    <!-- Filtres -->
    <div class=\"card border-0 shadow-sm mb-4\">
        <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0\"><i class=\"fas fa-filter me-2 text-primary\"></i>Filtres</h5>
            <div class=\"d-flex gap-2\">
                <a href=\"";
        // line 365
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_index");
        yield "\" class=\"btn btn-outline-secondary btn-sm\">
                    <i class=\"fas fa-undo me-1\"></i> Effacer
                </a>
                <button type=\"submit\" form=\"filter-form\" class=\"btn btn-primary btn-sm\">
                    <i class=\"fas fa-search me-1\"></i> Filtrer
                </button>
            </div>
        </div>
        <div class=\"card-body bg-white\">
            <form method=\"get\" id=\"filter-form\">
                ";
        // line 375
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 375, $this->source); })()) == "pharmacy")) {
            // line 376
            yield "                    ";
            // line 377
            yield "                    <div class=\"row g-3\">
                        <div class=\"col-md-4\">
                            <label class=\"form-label fw-semibold small\">
                                <i class=\"fas fa-search me-1\"></i> Recherche
                            </label>
                            <input type=\"text\" name=\"search\" class=\"form-control\" 
                                placeholder=\"Nom, description...\" 
                                value=\"";
            // line 384
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 384, $this->source); })()), "html", null, true);
            yield "\">
                        </div>
                        <div class=\"col-md-4\">
                            <label class=\"form-label fw-semibold small\">
                                <i class=\"fas fa-toggle-on me-1\"></i> Statut
                            </label>
                            <select name=\"status\" class=\"form-select\">
                                <option value=\"all\" ";
            // line 391
            yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 391, $this->source); })()) == "all")) ? ("selected") : (""));
            yield ">Tous</option>
                                <option value=\"active\" ";
            // line 392
            yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 392, $this->source); })()) == "active")) ? ("selected") : (""));
            yield ">Actives</option>
                                <option value=\"inactive\" ";
            // line 393
            yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 393, $this->source); })()) == "inactive")) ? ("selected") : (""));
            yield ">Inactives</option>
                            </select>
                        </div>
                        <div class=\"col-md-4\">
                            <label class=\"form-label fw-semibold small\">
                                <i class=\"fas fa-sitemap me-1\"></i> Type
                            </label>
                            <select name=\"type\" class=\"form-select\">
                                <option value=\"all\" ";
            // line 401
            yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 401, $this->source); })()) == "all")) ? ("selected") : (""));
            yield ">Toutes</option>
                                <option value=\"main\" ";
            // line 402
            yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 402, $this->source); })()) == "main")) ? ("selected") : (""));
            yield ">Principales</option>
                                <option value=\"sub\" ";
            // line 403
            yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 403, $this->source); })()) == "sub")) ? ("selected") : (""));
            yield ">Sous-catégories</option>
                            </select>
                        </div>
                    </div>
                    <div class=\"row g-3 mt-2\">
                        <div class=\"col-md-4\">
                            <label class=\"form-label fw-semibold small\">
                                <i class=\"fas fa-chart-line me-1\"></i> Quota
                            </label>
                            <select name=\"sub_status\" class=\"form-select\">
                                <option value=\"all\" ";
            // line 413
            yield ((((isset($context["subStatus"]) || array_key_exists("subStatus", $context) ? $context["subStatus"] : (function () { throw new RuntimeError('Variable "subStatus" does not exist.', 413, $this->source); })()) == "all")) ? ("selected") : (""));
            yield ">Tous</option>
                                <option value=\"active\" ";
            // line 414
            yield ((((isset($context["subStatus"]) || array_key_exists("subStatus", $context) ? $context["subStatus"] : (function () { throw new RuntimeError('Variable "subStatus" does not exist.', 414, $this->source); })()) == "active")) ? ("selected") : (""));
            yield ">Dans quota</option>
                                <option value=\"inactive\" ";
            // line 415
            yield ((((isset($context["subStatus"]) || array_key_exists("subStatus", $context) ? $context["subStatus"] : (function () { throw new RuntimeError('Variable "subStatus" does not exist.', 415, $this->source); })()) == "inactive")) ? ("selected") : (""));
            yield ">Hors quota</option>
                            </select>
                        </div>
                        <div class=\"col-md-4\">
                            <label class=\"form-label fw-semibold small\">
                                <i class=\"fas fa-eye me-1\"></i> Visibilité marketplace
                            </label>
                            <select name=\"visibility\" class=\"form-select\">
                                <option value=\"all\" ";
            // line 423
            yield ((((isset($context["visibility"]) || array_key_exists("visibility", $context) ? $context["visibility"] : (function () { throw new RuntimeError('Variable "visibility" does not exist.', 423, $this->source); })()) == "all")) ? ("selected") : (""));
            yield ">Toutes</option>
                                <option value=\"visible\" ";
            // line 424
            yield ((((isset($context["visibility"]) || array_key_exists("visibility", $context) ? $context["visibility"] : (function () { throw new RuntimeError('Variable "visibility" does not exist.', 424, $this->source); })()) == "visible")) ? ("selected") : (""));
            yield ">Visibles</option>
                                <option value=\"hidden\" ";
            // line 425
            yield ((((isset($context["visibility"]) || array_key_exists("visibility", $context) ? $context["visibility"] : (function () { throw new RuntimeError('Variable "visibility" does not exist.', 425, $this->source); })()) == "hidden")) ? ("selected") : (""));
            yield ">Masquées</option>
                            </select>
                        </div>
                        <div class=\"col-md-4\">
                            <label class=\"form-label fw-semibold small\">
                                <i class=\"fas fa-percent me-1\"></i> Promotion
                            </label>
                            <select name=\"promotion\" id=\"promotion\" class=\"form-select\" style=\"width: 100%;\">
                                <option value=\"0\">🎯 Toutes les promotions</option>
                                ";
            // line 434
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 434, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
                // line 435
                yield "                                    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 435), "html", null, true);
                yield "\" ";
                yield ((((isset($context["selectedPromotion"]) || array_key_exists("selectedPromotion", $context) ? $context["selectedPromotion"] : (function () { throw new RuntimeError('Variable "selectedPromotion" does not exist.', 435, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 435))) ? ("selected") : (""));
                yield ">
                                        ";
                // line 436
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "name", [], "any", false, false, false, 436), "html", null, true);
                yield "
                                        ";
                // line 437
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "discountPercentage", [], "any", false, false, false, 437)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 438
                    yield "                                            (-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "discountPercentage", [], "any", false, false, false, 438), "html", null, true);
                    yield "%)
                                        ";
                } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,                 // line 439
$context["promotion"], "discountAmount", [], "any", false, false, false, 439)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 440
                    yield "                                            (-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "discountAmount", [], "any", false, false, false, 440), 0, ",", " "), "html", null, true);
                    yield " FCFA)
                                        ";
                }
                // line 442
                yield "                                    </option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['promotion'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 444
            yield "                            </select>
                        </div>
                    </div>
                ";
        } elseif ((        // line 447
(isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 447, $this->source); })()) == "restaurant")) {
            // line 448
            yield "                    ";
            // line 449
            yield "                    <div class=\"row g-3\">
                        <div class=\"col-md-3\">
                            <label class=\"form-label fw-semibold small\">
                                <i class=\"fas fa-search me-1\"></i> Recherche
                            </label>
                            <input type=\"text\" name=\"search\" class=\"form-control\" 
                                placeholder=\"Nom, description...\" 
                                value=\"";
            // line 456
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 456, $this->source); })()), "html", null, true);
            yield "\">
                        </div>
                        <div class=\"col-md-3\">
                            <label class=\"form-label fw-semibold small\">
                                <i class=\"fas fa-toggle-on me-1\"></i> Statut
                            </label>
                            <select name=\"status\" class=\"form-select\">
                                <option value=\"all\" ";
            // line 463
            yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 463, $this->source); })()) == "all")) ? ("selected") : (""));
            yield ">Tous</option>
                                <option value=\"active\" ";
            // line 464
            yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 464, $this->source); })()) == "active")) ? ("selected") : (""));
            yield ">Actives</option>
                                <option value=\"inactive\" ";
            // line 465
            yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 465, $this->source); })()) == "inactive")) ? ("selected") : (""));
            yield ">Inactives</option>
                            </select>
                        </div>
                        <div class=\"col-md-3\">
                            <label class=\"form-label fw-semibold small\">
                                <i class=\"fas fa-sitemap me-1\"></i> Type
                            </label>
                            <select name=\"type\" class=\"form-select\">
                                <option value=\"all\" ";
            // line 473
            yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 473, $this->source); })()) == "all")) ? ("selected") : (""));
            yield ">Toutes</option>
                                <option value=\"main\" ";
            // line 474
            yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 474, $this->source); })()) == "main")) ? ("selected") : (""));
            yield ">Principales</option>
                                <option value=\"sub\" ";
            // line 475
            yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 475, $this->source); })()) == "sub")) ? ("selected") : (""));
            yield ">Sous-catégories</option>
                            </select>
                        </div>
                        <div class=\"col-md-3\">
                            <label class=\"form-label fw-semibold small\">
                                <i class=\"fas fa-chart-line me-1\"></i> Quota
                            </label>
                            <select name=\"sub_status\" class=\"form-select\">
                                <option value=\"all\" ";
            // line 483
            yield ((((isset($context["subStatus"]) || array_key_exists("subStatus", $context) ? $context["subStatus"] : (function () { throw new RuntimeError('Variable "subStatus" does not exist.', 483, $this->source); })()) == "all")) ? ("selected") : (""));
            yield ">Tous</option>
                                <option value=\"active\" ";
            // line 484
            yield ((((isset($context["subStatus"]) || array_key_exists("subStatus", $context) ? $context["subStatus"] : (function () { throw new RuntimeError('Variable "subStatus" does not exist.', 484, $this->source); })()) == "active")) ? ("selected") : (""));
            yield ">Dans quota</option>
                                <option value=\"inactive\" ";
            // line 485
            yield ((((isset($context["subStatus"]) || array_key_exists("subStatus", $context) ? $context["subStatus"] : (function () { throw new RuntimeError('Variable "subStatus" does not exist.', 485, $this->source); })()) == "inactive")) ? ("selected") : (""));
            yield ">Hors quota</option>
                            </select>
                        </div>
                    </div>
                ";
        } else {
            // line 490
            yield "                    ";
            // line 491
            yield "                    <div class=\"row g-3\">
                        <div class=\"col-md-3\">
                            <label class=\"form-label fw-semibold small\">
                                <i class=\"fas fa-search me-1\"></i> Recherche
                            </label>
                            <input type=\"text\" name=\"search\" class=\"form-control\" 
                                placeholder=\"Nom, description...\" 
                                value=\"";
            // line 498
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 498, $this->source); })()), "html", null, true);
            yield "\">
                        </div>
                        <div class=\"col-md-2\">
                            <label class=\"form-label fw-semibold small\">
                                <i class=\"fas fa-toggle-on me-1\"></i> Statut
                            </label>
                            <select name=\"status\" class=\"form-select\">
                                <option value=\"all\" ";
            // line 505
            yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 505, $this->source); })()) == "all")) ? ("selected") : (""));
            yield ">Tous</option>
                                <option value=\"active\" ";
            // line 506
            yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 506, $this->source); })()) == "active")) ? ("selected") : (""));
            yield ">Actives</option>
                                <option value=\"inactive\" ";
            // line 507
            yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 507, $this->source); })()) == "inactive")) ? ("selected") : (""));
            yield ">Inactives</option>
                            </select>
                        </div>
                        <div class=\"col-md-2\">
                            <label class=\"form-label fw-semibold small\">
                                <i class=\"fas fa-sitemap me-1\"></i> Type
                            </label>
                            <select name=\"type\" class=\"form-select\">
                                <option value=\"all\" ";
            // line 515
            yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 515, $this->source); })()) == "all")) ? ("selected") : (""));
            yield ">Toutes</option>
                                <option value=\"main\" ";
            // line 516
            yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 516, $this->source); })()) == "main")) ? ("selected") : (""));
            yield ">Principales</option>
                                <option value=\"sub\" ";
            // line 517
            yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 517, $this->source); })()) == "sub")) ? ("selected") : (""));
            yield ">Sous-catégories</option>
                            </select>
                        </div>
                        <div class=\"col-md-2\">
                            <label class=\"form-label fw-semibold small\">
                                <i class=\"fas fa-chart-line me-1\"></i> Quota
                            </label>
                            <select name=\"sub_status\" class=\"form-select\">
                                <option value=\"all\" ";
            // line 525
            yield ((((isset($context["subStatus"]) || array_key_exists("subStatus", $context) ? $context["subStatus"] : (function () { throw new RuntimeError('Variable "subStatus" does not exist.', 525, $this->source); })()) == "all")) ? ("selected") : (""));
            yield ">Tous</option>
                                <option value=\"active\" ";
            // line 526
            yield ((((isset($context["subStatus"]) || array_key_exists("subStatus", $context) ? $context["subStatus"] : (function () { throw new RuntimeError('Variable "subStatus" does not exist.', 526, $this->source); })()) == "active")) ? ("selected") : (""));
            yield ">Dans quota</option>
                                <option value=\"inactive\" ";
            // line 527
            yield ((((isset($context["subStatus"]) || array_key_exists("subStatus", $context) ? $context["subStatus"] : (function () { throw new RuntimeError('Variable "subStatus" does not exist.', 527, $this->source); })()) == "inactive")) ? ("selected") : (""));
            yield ">Hors quota</option>
                            </select>
                        </div>
                        <div class=\"col-md-3\">
                            <label class=\"form-label fw-semibold small\">
                                <i class=\"fas fa-percent me-1\"></i> Promotion
                            </label>
                            <select name=\"promotion\" id=\"promotion\" class=\"form-select\" style=\"width: 100%;\">
                                <option value=\"0\">🎯 Toutes les promotions</option>
                                ";
            // line 536
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 536, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
                // line 537
                yield "                                    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 537), "html", null, true);
                yield "\" ";
                yield ((((isset($context["selectedPromotion"]) || array_key_exists("selectedPromotion", $context) ? $context["selectedPromotion"] : (function () { throw new RuntimeError('Variable "selectedPromotion" does not exist.', 537, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 537))) ? ("selected") : (""));
                yield ">
                                        ";
                // line 538
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "name", [], "any", false, false, false, 538), "html", null, true);
                yield "
                                        ";
                // line 539
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "discountPercentage", [], "any", false, false, false, 539)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 540
                    yield "                                            (-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "discountPercentage", [], "any", false, false, false, 540), "html", null, true);
                    yield "%)
                                        ";
                } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,                 // line 541
$context["promotion"], "discountAmount", [], "any", false, false, false, 541)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 542
                    yield "                                            (-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "discountAmount", [], "any", false, false, false, 542), 0, ",", " "), "html", null, true);
                    yield " FCFA)
                                        ";
                }
                // line 544
                yield "                                    </option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['promotion'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 546
            yield "                            </select>
                        </div>
                    </div>
                ";
        }
        // line 550
        yield "            </form>
        </div>
    </div>

    ";
        // line 555
        yield "    ";
        if ((((isset($context["subStatus"]) || array_key_exists("subStatus", $context) ? $context["subStatus"] : (function () { throw new RuntimeError('Variable "subStatus" does not exist.', 555, $this->source); })()) == "inactive") && ((isset($context["subscriptionInactiveFiltered"]) || array_key_exists("subscriptionInactiveFiltered", $context) ? $context["subscriptionInactiveFiltered"] : (function () { throw new RuntimeError('Variable "subscriptionInactiveFiltered" does not exist.', 555, $this->source); })()) > 0))) {
            // line 556
            yield "        <div class=\"alert alert-info mb-4\">
            <i class=\"fas fa-info-circle me-2\"></i>
            <strong>";
            // line 558
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subscriptionInactiveFiltered"]) || array_key_exists("subscriptionInactiveFiltered", $context) ? $context["subscriptionInactiveFiltered"] : (function () { throw new RuntimeError('Variable "subscriptionInactiveFiltered" does not exist.', 558, $this->source); })()), "html", null, true);
            yield " catégorie(s)</strong> désactivée(s) par abonnement (hors quota).
        </div>
    ";
        }
        // line 561
        yield "
    ";
        // line 563
        yield "    ";
        if ((((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 563, $this->source); })()) == "pharmacy") && ((isset($context["visibility"]) || array_key_exists("visibility", $context) ? $context["visibility"] : (function () { throw new RuntimeError('Variable "visibility" does not exist.', 563, $this->source); })()) != "all"))) {
            // line 564
            yield "        <div class=\"alert alert-info mb-4\">
            <i class=\"fas fa-info-circle me-2\"></i>
            ";
            // line 566
            if (((isset($context["visibility"]) || array_key_exists("visibility", $context) ? $context["visibility"] : (function () { throw new RuntimeError('Variable "visibility" does not exist.', 566, $this->source); })()) == "visible")) {
                // line 567
                yield "                Affichage des catégories <strong>visibles</strong> sur le marketplace.
            ";
            } else {
                // line 569
                yield "                Affichage des catégories <strong>masquées</strong> sur le marketplace.
            ";
            }
            // line 571
            yield "        </div>
    ";
        }
        // line 573
        yield "
    <!-- Grille des catégories -->
    <div class=\"row g-4\">
        ";
        // line 576
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 576, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 577
            yield "            <div class=\"col-xl-3 col-lg-4 col-md-6\">
                <div class=\"category-card card h-100 border-0 shadow-sm hover-card overflow-hidden\">
                    <!-- Zone image (sans badges) -->
                    <div class=\"category-image-wrapper position-relative\">
                        ";
            // line 581
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 581)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 582
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/categories/" . CoreExtension::getAttribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 582))), "html", null, true);
                yield "\" 
                                 alt=\"";
                // line 583
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 583), "html", null, true);
                yield "\"
                                 class=\"category-image\">
                        ";
            } else {
                // line 586
                yield "                            <div class=\"category-placeholder\">
                                <i class=\"fas fa-folder-open fa-3x text-muted\"></i>
                            </div>
                        ";
            }
            // line 590
            yield "                    </div>

                    <div class=\"card-body d-flex flex-column\">
                        <!-- Titre et menu -->
                        <div class=\"d-flex justify-content-between align-items-start mb-2\">
                            <div class=\"flex-grow-1\">
                                <h6 class=\"card-title fw-bold mb-0 text-truncate\" title=\"";
            // line 596
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 596), "html", null, true);
            yield "\">
                                    ";
            // line 597
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 597), "html", null, true);
            yield "
                                </h6>
                                ";
            // line 599
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "parent", [], "any", false, false, false, 599)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 600
                yield "                                    <small class=\"text-muted\">
                                        <i class=\"fas fa-level-up-alt fa-xs me-1\"></i>";
                // line 601
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["category"], "parent", [], "any", false, false, false, 601), "name", [], "any", false, false, false, 601), "html", null, true);
                yield "
                                    </small>
                                ";
            }
            // line 604
            yield "                            </div>
                            <div class=\"dropdown ms-2\">
                                <button class=\"btn btn-sm btn-light rounded-circle\" type=\"button\" data-bs-toggle=\"dropdown\" style=\"width: 32px; height: 32px;\">
                                    <i class=\"fas fa-ellipsis-v fa-sm\"></i>
                                </button>
                                <ul class=\"dropdown-menu dropdown-menu-end shadow-sm\">
                                    <li>
                                        <a class=\"dropdown-item\" href=\"";
            // line 611
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 611)]), "html", null, true);
            yield "\">
                                            <i class=\"fas fa-eye me-2 text-info\"></i> Voir
                                        </a>
                                    </li>
                                    <li>
                                        <a class=\"dropdown-item\" href=\"";
            // line 616
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 616)]), "html", null, true);
            yield "\">
                                            <i class=\"fas fa-edit me-2 text-warning\"></i> Modifier
                                        </a>
                                    </li>
                                    <li>
                                        ";
            // line 621
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "subscriptionActive", [], "any", false, false, false, 621)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 622
                yield "                                            <button type=\"button\" 
                                                    class=\"dropdown-item toggle-category-btn\"
                                                    data-category-id=\"";
                // line 624
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 624), "html", null, true);
                yield "\"
                                                    data-category-name=\"";
                // line 625
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 625), "html", null, true);
                yield "\"
                                                    data-current-status=\"";
                // line 626
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "isActive", [], "any", false, false, false, 626)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : ("inactive"));
                yield "\"
                                                    data-token=\"";
                // line 627
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle-status" . CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 627))), "html", null, true);
                yield "\">
                                                <i class=\"fas ";
                // line 628
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "isActive", [], "any", false, false, false, 628)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-toggle-on text-success") : ("fa-toggle-off text-secondary"));
                yield " me-2\"></i>
                                                ";
                // line 629
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "isActive", [], "any", false, false, false, 629)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
                yield "
                                            </button>
                                        ";
            } else {
                // line 632
                yield "                                            <span class=\"dropdown-item text-muted disabled\">
                                                <i class=\"fas fa-ban me-2\"></i> Non disponible
                                            </span>
                                        ";
            }
            // line 636
            yield "                                    </li>
                                    <li><hr class=\"dropdown-divider\"></li>
                                    <li>
                                        ";
            // line 639
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 640
                yield "                                            <button type=\"button\" class=\"dropdown-item text-danger delete-category-btn\"
                                                    data-id=\"";
                // line 641
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 641), "html", null, true);
                yield "\"
                                                    data-name=\"";
                // line 642
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 642), "html", null, true);
                yield "\"
                                                    data-has-children=\"";
                // line 643
                yield ((((((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "childrenCount", [], "any", true, true, false, 643) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["category"], "childrenCount", [], "any", false, false, false, 643)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["category"], "childrenCount", [], "any", false, false, false, 643)) : (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 643)))) > 0)) ? ("true") : ("false"));
                yield "\"
                                                    data-has-products=\"";
                // line 644
                yield ((((((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "productCount", [], "any", true, true, false, 644) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["category"], "productCount", [], "any", false, false, false, 644)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["category"], "productCount", [], "any", false, false, false, 644)) : (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "products", [], "any", false, false, false, 644)))) > 0)) ? ("true") : ("false"));
                yield "\"
                                                    data-token=\"";
                // line 645
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 645))), "html", null, true);
                yield "\">
                                                <i class=\"fas fa-trash me-2\"></i> Supprimer
                                            </button>
                                        ";
            }
            // line 649
            yield "                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Description courte -->
                        <p class=\"card-text text-muted small mb-3\">
                            ";
            // line 656
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "description", [], "any", true, true, false, 656)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 656), "Aucune description")) : ("Aucune description"))), "truncate", [60, "..."], "method", false, false, false, 656), "html", null, true);
            yield "
                        </p>
                        
                        <!-- ✅ Badges sous la description -->
                        <div class=\"category-badges\">
                            ";
            // line 661
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["category"], "subscriptionActive", [], "any", false, false, false, 661)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 662
                yield "                                <span class=\"badge bg-warning text-dark\">
                                    <i class=\"fas fa-clock fa-xs me-1\"></i> Hors quota
                                </span>
                            ";
            } else {
                // line 666
                yield "                                ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "isActive", [], "any", false, false, false, 666)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 667
                    yield "                                    <span class=\"badge bg-success\">
                                        <i class=\"fas fa-check-circle fa-xs me-1\"></i> Active
                                    </span>
                                ";
                } else {
                    // line 671
                    yield "                                    <span class=\"badge bg-danger\">
                                        <i class=\"fas fa-pause-circle fa-xs me-1\"></i> Inactive
                                    </span>
                                ";
                }
                // line 675
                yield "                                ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "subscriptionActive", [], "any", false, false, false, 675)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 676
                    yield "                                    <span class=\"badge bg-info\">
                                        <i class=\"fas fa-database fa-xs me-1\"></i> Dans quota
                                    </span>
                                ";
                }
                // line 680
                yield "                            ";
            }
            // line 681
            yield "                            ";
            // line 682
            yield "                            ";
            if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 682, $this->source); })()) == "pharmacy")) {
                // line 683
                yield "                                ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "companyPublic", [], "any", false, false, false, 683)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 684
                    yield "                                    <span class=\"badge bg-primary\">
                                        <i class=\"fas fa-eye fa-xs me-1\"></i> Visible
                                    </span>
                                ";
                } else {
                    // line 688
                    yield "                                    <span class=\"badge bg-secondary\">
                                        <i class=\"fas fa-eye-slash fa-xs me-1\"></i> Masquée
                                    </span>
                                ";
                }
                // line 692
                yield "                            ";
            }
            // line 693
            yield "                        </div>

                        <!-- Statistiques -->
                        <div class=\"d-flex gap-2 mt-3 mb-3\">
                            <div class=\"flex-fill text-center py-1 bg-light rounded-2\">
                                <i class=\"fas fa-box text-primary fa-sm\"></i>
                                <span class=\"fw-bold ms-1\">";
            // line 699
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "productCount", [], "any", true, true, false, 699) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["category"], "productCount", [], "any", false, false, false, 699)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "productCount", [], "any", false, false, false, 699), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "products", [], "any", false, false, false, 699)), "html", null, true)));
            yield "</span>
                                <small class=\"text-muted d-block fs-10\">produits</small>
                            </div>
                            <div class=\"flex-fill text-center py-1 bg-light rounded-2\">
                                <i class=\"fas fa-folder-tree text-info fa-sm\"></i>
                                <span class=\"fw-bold ms-1\">";
            // line 704
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "childrenCount", [], "any", true, true, false, 704) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["category"], "childrenCount", [], "any", false, false, false, 704)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "childrenCount", [], "any", false, false, false, 704), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 704)), "html", null, true)));
            yield "</span>
                                <small class=\"text-muted d-block fs-10\">sous-catégories</small>
                            </div>
                        </div>

                        <!-- Actions -->
                        <div class=\"d-flex gap-2 mt-auto\">
                            <a href=\"";
            // line 711
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_products", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 711)]), "html", null, true);
            yield "\" 
                               class=\"btn btn-sm btn-outline-secondary flex-fill\">
                                <i class=\"fas fa-list me-1\"></i> Produits
                            </a>
                            ";
            // line 715
            if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 715, $this->source); })()) != "restaurant")) {
                // line 716
                yield "                                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_promotions", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 716)]), "html", null, true);
                yield "\" 
                                   class=\"btn btn-sm btn-outline-warning\" title=\"Promotions\">
                                    <i class=\"fas fa-percent\"></i> Promotions
                                </a>
                            ";
            }
            // line 721
            yield "                        </div>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 725
        if (!$context['_iterated']) {
            // line 726
            yield "            <div class=\"col-12\">
                <div class=\"card border-0 shadow-sm text-center py-5\">
                    <div class=\"card-body\">
                        <i class=\"fas fa-folder-open fa-4x text-muted mb-3 opacity-50\"></i>
                        <h5 class=\"text-muted\">Aucune catégorie trouvée</h5>
                        <p class=\"text-muted small\">Modifiez vos filtres ou créez une nouvelle catégorie.</p>
                        <a href=\"";
            // line 732
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_new");
            yield "\" class=\"btn btn-primary mt-2\">
                            <i class=\"fas fa-plus me-2\"></i> Nouvelle catégorie
                        </a>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 739
        yield "    </div>

    <!-- Pagination -->
    ";
        // line 742
        if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 742, $this->source); })()) > 1)) {
            // line 743
            yield "    <nav class=\"mt-5\">
        <ul class=\"pagination justify-content-center\">
            ";
            // line 745
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 745, $this->source); })()) > 1)) {
                // line 746
                yield "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                // line 747
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 747, $this->source); })()), "request", [], "any", false, false, false, 747), "query", [], "any", false, false, false, 747), "all", [], "any", false, false, false, 747), ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 747, $this->source); })()) - 1)])), "html", null, true);
                yield "\">
                        <i class=\"fas fa-chevron-left\"></i>
                    </a>
                </li>
            ";
            }
            // line 752
            yield "            
            ";
            // line 753
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 753, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 754
                yield "                ";
                if ((($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 754, $this->source); })())) || (($context["page"] >= ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 754, $this->source); })()) - 2)) && ($context["page"] <= ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 754, $this->source); })()) + 2))))) {
                    // line 755
                    yield "                    <li class=\"page-item ";
                    yield ((($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 755, $this->source); })()))) ? ("active") : (""));
                    yield "\">
                        <a class=\"page-link\" href=\"";
                    // line 756
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 756, $this->source); })()), "request", [], "any", false, false, false, 756), "query", [], "any", false, false, false, 756), "all", [], "any", false, false, false, 756), ["page" => $context["page"]])), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "</a>
                    </li>
                ";
                } elseif (((                // line 758
$context["page"] == ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 758, $this->source); })()) - 3)) || ($context["page"] == ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 758, $this->source); })()) + 3)))) {
                    // line 759
                    yield "                    <li class=\"page-item disabled\"><span class=\"page-link\">...</span></li>
                ";
                }
                // line 761
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 762
            yield "            
            ";
            // line 763
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 763, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 763, $this->source); })()))) {
                // line 764
                yield "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                // line 765
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 765, $this->source); })()), "request", [], "any", false, false, false, 765), "query", [], "any", false, false, false, 765), "all", [], "any", false, false, false, 765), ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 765, $this->source); })()) + 1)])), "html", null, true);
                yield "\">
                        <i class=\"fas fa-chevron-right\"></i>
                    </a>
                </li>
            ";
            }
            // line 770
            yield "        </ul>
    </nav>
    ";
        }
        // line 773
        yield "</div>

<!-- Modal Nouvelle catégorie (quota atteint) -->
<div class=\"modal fade\" id=\"quotaReachedModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-warning\">
                <h5 class=\"modal-title text-dark\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Quota atteint
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <i class=\"fas fa-ban fa-4x text-warning mb-3\"></i>
                <h5>Limite de catégories actives atteinte</h5>
                <p class=\"text-muted\">Vous utilisez déjà ";
        // line 788
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activeCount"]) || array_key_exists("activeCount", $context) ? $context["activeCount"] : (function () { throw new RuntimeError('Variable "activeCount" does not exist.', 788, $this->source); })()), "html", null, true);
        yield " catégories sur ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["quota"]) || array_key_exists("quota", $context) ? $context["quota"] : (function () { throw new RuntimeError('Variable "quota" does not exist.', 788, $this->source); })()), "html", null, true);
        yield ".</p>
                <p class=\"text-muted small\">Pour ajouter plus de catégories, passez à un plan supérieur.</p>
            </div>
            <div class=\"modal-footer justify-content-center\">
                <a href=\"";
        // line 792
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subscription_plans");
        yield "\" class=\"btn btn-warning px-4\">
                    <i class=\"fas fa-arrow-up me-2\"></i> Voir les offres
                </a>
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Toggle Statut -->
<div class=\"modal fade\" id=\"toggleCategoryModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">Confirmation</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p id=\"toggleMessage\"></p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"toggleForm\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" id=\"toggleToken\">
                    <button type=\"submit\" class=\"btn\" id=\"toggleBtn\"></button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Suppression -->
<div class=\"modal fade\" id=\"deleteCategoryModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-trash-alt me-2\"></i> Supprimer la catégorie
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p id=\"deleteMessage\"></p>
                <div id=\"deleteWarning\" class=\"alert alert-warning mt-2\" style=\"display: none;\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i>
                    <span>Cette catégorie contient des éléments. Elle ne peut pas être supprimée.</span>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"deleteForm\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteToken\">
                    <button type=\"submit\" class=\"btn btn-danger\" id=\"deleteConfirmBtn\">Supprimer</button>
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

    // line 852
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

        // line 853
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/fr.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // ========== Initialisation Select2 pour la promotion (uniquement si présent) ==========
    if (document.getElementById('promotion')) {
        \$('#promotion').select2({
            theme: 'bootstrap-5',
            language: 'fr',
            placeholder: '🎯 Sélectionnez une promotion',
            allowClear: true,
            width: '100%'
        });
    }

    // Nouvelle catégorie avec vérification quota
    const newCategoryBtn = document.getElementById('newCategoryBtn');
    if (newCategoryBtn) {
        newCategoryBtn.addEventListener('click', function(e) {
            e.preventDefault();
            ";
        // line 874
        if (((isset($context["quotaReached"]) || array_key_exists("quotaReached", $context) ? $context["quotaReached"] : (function () { throw new RuntimeError('Variable "quotaReached" does not exist.', 874, $this->source); })()) && ((isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 874, $this->source); })()) != "premium"))) {
            // line 875
            yield "                new bootstrap.Modal(document.getElementById('quotaReachedModal')).show();
            ";
        } else {
            // line 877
            yield "                window.location.href = \"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_new");
            yield "\";
            ";
        }
        // line 879
        yield "        });
    }

    // Toggle statut
    const toggleModal = new bootstrap.Modal(document.getElementById('toggleCategoryModal'));
    const toggleMessage = document.getElementById('toggleMessage');
    const toggleForm = document.getElementById('toggleForm');
    const toggleToken = document.getElementById('toggleToken');
    const toggleBtn = document.getElementById('toggleBtn');

    document.querySelectorAll('.toggle-category-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const categoryId = this.dataset.categoryId;
            const categoryName = this.dataset.categoryName;
            const currentStatus = this.dataset.currentStatus;
            const isActive = currentStatus === 'active';
            
            toggleMessage.textContent = `Êtes-vous sûr de vouloir \${isActive ? 'désactiver' : 'activer'} la catégorie \"\${categoryName}\" ?`;
            toggleForm.action = `/admin/category/\${categoryId}/toggle-status`;
            toggleToken.value = this.dataset.token;
            toggleBtn.className = isActive ? 'btn btn-danger' : 'btn btn-success';
            toggleBtn.textContent = isActive ? 'Désactiver' : 'Activer';
            toggleModal.show();
        });
    });

    // Suppression
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteCategoryModal'));
    const deleteMessage = document.getElementById('deleteMessage');
    const deleteWarning = document.getElementById('deleteWarning');
    const deleteForm = document.getElementById('deleteForm');
    const deleteToken = document.getElementById('deleteToken');
    const deleteConfirmBtn = document.getElementById('deleteConfirmBtn');

    document.querySelectorAll('.delete-category-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const categoryId = this.dataset.id;
            const categoryName = this.dataset.name;
            const hasChildren = this.dataset.hasChildren === 'true';
            const hasProducts = this.dataset.hasProducts === 'true';
            
            if (hasChildren || hasProducts) {
                deleteMessage.innerHTML = `La catégorie \"<strong>\${categoryName}</strong>\" ne peut pas être supprimée.`;
                deleteWarning.style.display = 'block';
                deleteWarning.innerHTML = `<i class=\"fas fa-exclamation-triangle me-2\"></i> Cette catégorie contient \${hasChildren ? 'des sous-catégories' : ''} \${hasChildren && hasProducts ? 'et' : ''} \${hasProducts ? 'des produits' : ''}.`;
                deleteConfirmBtn.disabled = true;
            } else {
                deleteMessage.innerHTML = `Êtes-vous sûr de vouloir supprimer la catégorie \"<strong>\${categoryName}</strong>\" ?<br><small class=\"text-danger\">Cette action est irréversible.</small>`;
                deleteWarning.style.display = 'none';
                deleteConfirmBtn.disabled = false;
            }
            
            deleteForm.action = `/admin/category/\${categoryId}/delete`;
            deleteToken.value = this.dataset.token;
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
        return "admin/category/index.html.twig";
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
        return array (  1504 => 879,  1498 => 877,  1494 => 875,  1492 => 874,  1468 => 853,  1455 => 852,  1385 => 792,  1376 => 788,  1359 => 773,  1354 => 770,  1346 => 765,  1343 => 764,  1341 => 763,  1338 => 762,  1332 => 761,  1328 => 759,  1326 => 758,  1319 => 756,  1314 => 755,  1311 => 754,  1307 => 753,  1304 => 752,  1296 => 747,  1293 => 746,  1291 => 745,  1287 => 743,  1285 => 742,  1280 => 739,  1267 => 732,  1259 => 726,  1257 => 725,  1249 => 721,  1240 => 716,  1238 => 715,  1231 => 711,  1221 => 704,  1213 => 699,  1205 => 693,  1202 => 692,  1196 => 688,  1190 => 684,  1187 => 683,  1184 => 682,  1182 => 681,  1179 => 680,  1173 => 676,  1170 => 675,  1164 => 671,  1158 => 667,  1155 => 666,  1149 => 662,  1147 => 661,  1139 => 656,  1130 => 649,  1123 => 645,  1119 => 644,  1115 => 643,  1111 => 642,  1107 => 641,  1104 => 640,  1102 => 639,  1097 => 636,  1091 => 632,  1085 => 629,  1081 => 628,  1077 => 627,  1073 => 626,  1069 => 625,  1065 => 624,  1061 => 622,  1059 => 621,  1051 => 616,  1043 => 611,  1034 => 604,  1028 => 601,  1025 => 600,  1023 => 599,  1018 => 597,  1014 => 596,  1006 => 590,  1000 => 586,  994 => 583,  989 => 582,  987 => 581,  981 => 577,  976 => 576,  971 => 573,  967 => 571,  963 => 569,  959 => 567,  957 => 566,  953 => 564,  950 => 563,  947 => 561,  941 => 558,  937 => 556,  934 => 555,  928 => 550,  922 => 546,  915 => 544,  909 => 542,  907 => 541,  902 => 540,  900 => 539,  896 => 538,  889 => 537,  885 => 536,  873 => 527,  869 => 526,  865 => 525,  854 => 517,  850 => 516,  846 => 515,  835 => 507,  831 => 506,  827 => 505,  817 => 498,  808 => 491,  806 => 490,  798 => 485,  794 => 484,  790 => 483,  779 => 475,  775 => 474,  771 => 473,  760 => 465,  756 => 464,  752 => 463,  742 => 456,  733 => 449,  731 => 448,  729 => 447,  724 => 444,  717 => 442,  711 => 440,  709 => 439,  704 => 438,  702 => 437,  698 => 436,  691 => 435,  687 => 434,  675 => 425,  671 => 424,  667 => 423,  656 => 415,  652 => 414,  648 => 413,  635 => 403,  631 => 402,  627 => 401,  616 => 393,  612 => 392,  608 => 391,  598 => 384,  589 => 377,  587 => 376,  585 => 375,  572 => 365,  562 => 357,  551 => 349,  537 => 338,  529 => 332,  526 => 331,  516 => 323,  502 => 312,  488 => 301,  471 => 287,  457 => 276,  443 => 265,  429 => 254,  411 => 238,  401 => 234,  398 => 233,  393 => 232,  383 => 228,  380 => 227,  375 => 226,  372 => 224,  362 => 217,  357 => 215,  351 => 211,  348 => 210,  339 => 202,  332 => 198,  322 => 190,  320 => 189,  313 => 184,  309 => 182,  307 => 181,  301 => 180,  297 => 179,  275 => 159,  262 => 158,  102 => 8,  89 => 7,  66 => 5,  43 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/category/index.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}Catégories de produits - HMA Market{% endblock %}

{% block stylesheets %}
{{ parent() }}
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
<link href=\"https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css\" rel=\"stylesheet\" />
<style>
.category-card {
    transition: transform 0.2s, box-shadow 0.2s;
}
.category-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.1) !important;
}

.category-image-wrapper {
    height: 130px;
    overflow: hidden;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
}

.category-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s;
}

.category-card:hover .category-image {
    transform: scale(1.05);
}

.category-placeholder {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.stat-card {
    transition: transform 0.2s, box-shadow 0.2s;
}
.stat-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.08) !important;
}

.stat-icon {
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.fs-10 {
    font-size: 10px;
}

.badge {
    font-weight: 500;
    font-size: 11px;
    padding: 4px 8px;
}

.btn-sm {
    font-size: 12px;
}

.rounded-circle {
    border-radius: 50% !important;
}

.hover-card {
    transition: all 0.2s ease;
}

/* Styles Select2 - Correction d'alignement vertical */
.select2-container--bootstrap-5 .select2-selection {
    height: 38px !important;
    padding: 0 !important;
}
.select2-container--bootstrap-5 .select2-selection--single {
    height: 38px !important;
    border-radius: 8px !important;
    background-color: #fff !important;
    border-color: #dee2e6 !important;
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
.select2-container--bootstrap-5 .select2-dropdown {
    border-color: #e9ecef !important;
    border-radius: 8px !important;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1) !important;
}
.select2-container--bootstrap-5 .select2-search--dropdown .select2-search__field {
    padding: 8px 12px !important;
    border-radius: 6px !important;
    border-color: #e9ecef !important;
}
.select2-container--bootstrap-5 .select2-results__option {
    padding: 8px 12px !important;
}
.select2-container--bootstrap-5 .select2-results__option--selected {
    background-color: #0463f1 !important;
    color: white !important;
}
.select2-container--bootstrap-5 .select2-results__option--highlighted {
    background-color: #e9ecef !important;
    color: #0463f1 !important;
}

/* ✅ Badges en bas de la carte */
.category-badges {
    display: flex;
    flex-wrap: wrap;
    gap: 4px;
    margin-top: 0.5rem;
}

.category-badges .badge {
    font-size: 9px;
    padding: 3px 6px;
}

@media (max-width: 768px) {
    .stat-icon {
        width: 40px;
        height: 40px;
    }
    .stat-icon i {
        font-size: 1.25rem;
    }
    .category-image-wrapper {
        height: 100px;
    }
}
</style>
{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <h1 class=\"h3 mb-1 fw-bold\">
                <i class=\"fas fa-tags me-2 text-primary\"></i>Catégories de produits
            </h1>
            <p class=\"text-muted mb-0\">Organisez et gérez vos catégories de produits</p>
        </div>

        <div class=\"d-flex align-items-center gap-3\">
            <!-- Indicateur de quota -->
            <div class=\"stat-badge d-flex align-items-center bg-light rounded-3 p-2 px-3\">
                <div class=\"me-2\">
                    <span class=\"badge bg-primary p-2 rounded-circle\">
                        <i class=\"fas fa-chart-line fa-sm\"></i>
                    </span>
                </div>
                <div>
                    <small class=\"text-muted d-block lh-1\">Catégories actives</small>
                    <strong class=\"{{ quotaReached ? 'text-danger' : 'text-success' }} fs-5\">
                        {{ activeCount }} / {{ quota }}
                        {% if quota == 'Illimité' %}
                            <i class=\"fas fa-infinity text-info ms-1 fa-xs\"></i>
                        {% endif %}
                    </strong>
                </div>
            </div>

            <!-- Catégories hors quota -->
            {% if subscriptionInactiveCount > 0 %}
            <div class=\"stat-badge d-flex align-items-center bg-light rounded-3 p-2 px-3\">
                <div class=\"me-2\">
                    <span class=\"badge bg-warning p-2 rounded-circle\">
                        <i class=\"fas fa-clock fa-sm\"></i>
                    </span>
                </div>
                <div>
                    <small class=\"text-muted d-block lh-1\">Hors quota</small>
                    <strong class=\"fs-5\">{{ subscriptionInactiveCount }}</strong>
                </div>
            </div>
            {% endif %}

            <a href=\"#\" id=\"newCategoryBtn\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus-circle me-2\"></i> Nouvelle catégorie
            </a>
        </div>
    </div>

    {# Message si quota atteint #}
    {% if quotaReached and plan != 'premium' %}
    <div class=\"alert alert-warning alert-dismissible fade show mb-4\" role=\"alert\">
        <div class=\"d-flex justify-content-between align-items-center\">
            <div>
                <i class=\"fas fa-exclamation-triangle me-2\"></i>
                <strong>Quota atteint !</strong> Vous avez utilisé vos {{ quota }} catégories actives.
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
        <div class=\"alert alert-success alert-dismissible fade show mb-3\" role=\"alert\">
            <i class=\"fas fa-check-circle me-2\"></i> {{ message }}
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    {% endfor %}
    {% for message in app.flashes('error') %}
        <div class=\"alert alert-danger alert-dismissible fade show mb-3\" role=\"alert\">
            <i class=\"fas fa-exclamation-circle me-2\"></i> {{ message }}
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    {% endfor %}

    <!-- Container des statistiques dynamiques -->
    <div class=\"card shadow mb-4\">
        <div class=\"card-header bg-white py-3\">
            <h5 class=\"mb-0\">
                <i class=\"fas fa-chart-pie me-2\"></i>Statistiques selon les filtres
            </h5>
        </div>
        <div class=\"card-body\">
            <div class=\"row\">
                <!-- Première ligne : 4 cartes -->
                <div class=\"col-md-3 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-primary text-uppercase small fw-bold\">Total</span>
                                <h3 class=\"mb-0\">{{ totalFiltered }}</h3>
                            </div>
                            <i class=\"fas fa-folder fa-2x text-primary opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-success text-uppercase small fw-bold\">Actives</span>
                                <h3 class=\"mb-0 text-success\">{{ activeFiltered }}</h3>
                            </div>
                            <i class=\"fas fa-check-circle fa-2x text-success opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-danger text-uppercase small fw-bold\">Inactives</span>
                                <h3 class=\"mb-0 text-danger\">{{ inactiveFiltered }}</h3>
                            </div>
                            <i class=\"fas fa-pause-circle fa-2x text-danger opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-info text-uppercase small fw-bold\">Principales</span>
                                <h3 class=\"mb-0 text-info\">{{ mainFiltered }}</h3>
                            </div>
                            <i class=\"fas fa-sitemap fa-2x text-info opacity-50\"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <!-- Deuxième ligne : 3 cartes -->
                <div class=\"col-md-4 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-warning text-uppercase small fw-bold\">Sous-catégories</span>
                                <h3 class=\"mb-0 text-warning\">{{ subFiltered }}</h3>
                            </div>
                            <i class=\"fas fa-folder-tree fa-2x text-warning opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-info text-uppercase small fw-bold\">Abonnement actif</span>
                                <h3 class=\"mb-0 text-info\">{{ subscriptionActiveFiltered }}</h3>
                            </div>
                            <i class=\"fas fa-database fa-2x text-info opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-secondary text-uppercase small fw-bold\">Abonnement inactif</span>
                                <h3 class=\"mb-0 text-secondary\">{{ subscriptionInactiveFiltered }}</h3>
                            </div>
                            <i class=\"fas fa-clock fa-2x text-secondary opacity-50\"></i>
                        </div>
                    </div>
                </div>
            </div>
            {# ✅ Statistiques de visibilité (uniquement pour les pharmacies) #}
            {% if companyType == 'pharmacy' %}
            <div class=\"row mt-3 border-top pt-3\">
                <div class=\"col-md-6 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-success text-uppercase small fw-bold\">Visibles sur marketplace</span>
                                <h3 class=\"mb-0 text-success\">{{ visibleFiltered }}</h3>
                            </div>
                            <i class=\"fas fa-eye fa-2x text-success opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-secondary text-uppercase small fw-bold\">Masquées sur marketplace</span>
                                <h3 class=\"mb-0 text-secondary\">{{ hiddenFiltered }}</h3>
                            </div>
                            <i class=\"fas fa-eye-slash fa-2x text-secondary opacity-50\"></i>
                        </div>
                    </div>
                </div>
            </div>
            {% endif %}
        </div>
    </div>

    <!-- Filtres -->
    <div class=\"card border-0 shadow-sm mb-4\">
        <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0\"><i class=\"fas fa-filter me-2 text-primary\"></i>Filtres</h5>
            <div class=\"d-flex gap-2\">
                <a href=\"{{ path('app_admin_category_index') }}\" class=\"btn btn-outline-secondary btn-sm\">
                    <i class=\"fas fa-undo me-1\"></i> Effacer
                </a>
                <button type=\"submit\" form=\"filter-form\" class=\"btn btn-primary btn-sm\">
                    <i class=\"fas fa-search me-1\"></i> Filtrer
                </button>
            </div>
        </div>
        <div class=\"card-body bg-white\">
            <form method=\"get\" id=\"filter-form\">
                {% if companyType == 'pharmacy' %}
                    {# ✅ CAS PHARMACIE : 2 lignes de 3 filtres #}
                    <div class=\"row g-3\">
                        <div class=\"col-md-4\">
                            <label class=\"form-label fw-semibold small\">
                                <i class=\"fas fa-search me-1\"></i> Recherche
                            </label>
                            <input type=\"text\" name=\"search\" class=\"form-control\" 
                                placeholder=\"Nom, description...\" 
                                value=\"{{ search }}\">
                        </div>
                        <div class=\"col-md-4\">
                            <label class=\"form-label fw-semibold small\">
                                <i class=\"fas fa-toggle-on me-1\"></i> Statut
                            </label>
                            <select name=\"status\" class=\"form-select\">
                                <option value=\"all\" {{ status == 'all' ? 'selected' : '' }}>Tous</option>
                                <option value=\"active\" {{ status == 'active' ? 'selected' : '' }}>Actives</option>
                                <option value=\"inactive\" {{ status == 'inactive' ? 'selected' : '' }}>Inactives</option>
                            </select>
                        </div>
                        <div class=\"col-md-4\">
                            <label class=\"form-label fw-semibold small\">
                                <i class=\"fas fa-sitemap me-1\"></i> Type
                            </label>
                            <select name=\"type\" class=\"form-select\">
                                <option value=\"all\" {{ type == 'all' ? 'selected' : '' }}>Toutes</option>
                                <option value=\"main\" {{ type == 'main' ? 'selected' : '' }}>Principales</option>
                                <option value=\"sub\" {{ type == 'sub' ? 'selected' : '' }}>Sous-catégories</option>
                            </select>
                        </div>
                    </div>
                    <div class=\"row g-3 mt-2\">
                        <div class=\"col-md-4\">
                            <label class=\"form-label fw-semibold small\">
                                <i class=\"fas fa-chart-line me-1\"></i> Quota
                            </label>
                            <select name=\"sub_status\" class=\"form-select\">
                                <option value=\"all\" {{ subStatus == 'all' ? 'selected' : '' }}>Tous</option>
                                <option value=\"active\" {{ subStatus == 'active' ? 'selected' : '' }}>Dans quota</option>
                                <option value=\"inactive\" {{ subStatus == 'inactive' ? 'selected' : '' }}>Hors quota</option>
                            </select>
                        </div>
                        <div class=\"col-md-4\">
                            <label class=\"form-label fw-semibold small\">
                                <i class=\"fas fa-eye me-1\"></i> Visibilité marketplace
                            </label>
                            <select name=\"visibility\" class=\"form-select\">
                                <option value=\"all\" {{ visibility == 'all' ? 'selected' : '' }}>Toutes</option>
                                <option value=\"visible\" {{ visibility == 'visible' ? 'selected' : '' }}>Visibles</option>
                                <option value=\"hidden\" {{ visibility == 'hidden' ? 'selected' : '' }}>Masquées</option>
                            </select>
                        </div>
                        <div class=\"col-md-4\">
                            <label class=\"form-label fw-semibold small\">
                                <i class=\"fas fa-percent me-1\"></i> Promotion
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
                {% elseif companyType == 'restaurant' %}
                    {# CAS RESTAURANT : 4 filtres sur 1 ligne #}
                    <div class=\"row g-3\">
                        <div class=\"col-md-3\">
                            <label class=\"form-label fw-semibold small\">
                                <i class=\"fas fa-search me-1\"></i> Recherche
                            </label>
                            <input type=\"text\" name=\"search\" class=\"form-control\" 
                                placeholder=\"Nom, description...\" 
                                value=\"{{ search }}\">
                        </div>
                        <div class=\"col-md-3\">
                            <label class=\"form-label fw-semibold small\">
                                <i class=\"fas fa-toggle-on me-1\"></i> Statut
                            </label>
                            <select name=\"status\" class=\"form-select\">
                                <option value=\"all\" {{ status == 'all' ? 'selected' : '' }}>Tous</option>
                                <option value=\"active\" {{ status == 'active' ? 'selected' : '' }}>Actives</option>
                                <option value=\"inactive\" {{ status == 'inactive' ? 'selected' : '' }}>Inactives</option>
                            </select>
                        </div>
                        <div class=\"col-md-3\">
                            <label class=\"form-label fw-semibold small\">
                                <i class=\"fas fa-sitemap me-1\"></i> Type
                            </label>
                            <select name=\"type\" class=\"form-select\">
                                <option value=\"all\" {{ type == 'all' ? 'selected' : '' }}>Toutes</option>
                                <option value=\"main\" {{ type == 'main' ? 'selected' : '' }}>Principales</option>
                                <option value=\"sub\" {{ type == 'sub' ? 'selected' : '' }}>Sous-catégories</option>
                            </select>
                        </div>
                        <div class=\"col-md-3\">
                            <label class=\"form-label fw-semibold small\">
                                <i class=\"fas fa-chart-line me-1\"></i> Quota
                            </label>
                            <select name=\"sub_status\" class=\"form-select\">
                                <option value=\"all\" {{ subStatus == 'all' ? 'selected' : '' }}>Tous</option>
                                <option value=\"active\" {{ subStatus == 'active' ? 'selected' : '' }}>Dans quota</option>
                                <option value=\"inactive\" {{ subStatus == 'inactive' ? 'selected' : '' }}>Hors quota</option>
                            </select>
                        </div>
                    </div>
                {% else %}
                    {# CAS AUTRES (market, retail, etc.) : 5 filtres sur 1 ligne #}
                    <div class=\"row g-3\">
                        <div class=\"col-md-3\">
                            <label class=\"form-label fw-semibold small\">
                                <i class=\"fas fa-search me-1\"></i> Recherche
                            </label>
                            <input type=\"text\" name=\"search\" class=\"form-control\" 
                                placeholder=\"Nom, description...\" 
                                value=\"{{ search }}\">
                        </div>
                        <div class=\"col-md-2\">
                            <label class=\"form-label fw-semibold small\">
                                <i class=\"fas fa-toggle-on me-1\"></i> Statut
                            </label>
                            <select name=\"status\" class=\"form-select\">
                                <option value=\"all\" {{ status == 'all' ? 'selected' : '' }}>Tous</option>
                                <option value=\"active\" {{ status == 'active' ? 'selected' : '' }}>Actives</option>
                                <option value=\"inactive\" {{ status == 'inactive' ? 'selected' : '' }}>Inactives</option>
                            </select>
                        </div>
                        <div class=\"col-md-2\">
                            <label class=\"form-label fw-semibold small\">
                                <i class=\"fas fa-sitemap me-1\"></i> Type
                            </label>
                            <select name=\"type\" class=\"form-select\">
                                <option value=\"all\" {{ type == 'all' ? 'selected' : '' }}>Toutes</option>
                                <option value=\"main\" {{ type == 'main' ? 'selected' : '' }}>Principales</option>
                                <option value=\"sub\" {{ type == 'sub' ? 'selected' : '' }}>Sous-catégories</option>
                            </select>
                        </div>
                        <div class=\"col-md-2\">
                            <label class=\"form-label fw-semibold small\">
                                <i class=\"fas fa-chart-line me-1\"></i> Quota
                            </label>
                            <select name=\"sub_status\" class=\"form-select\">
                                <option value=\"all\" {{ subStatus == 'all' ? 'selected' : '' }}>Tous</option>
                                <option value=\"active\" {{ subStatus == 'active' ? 'selected' : '' }}>Dans quota</option>
                                <option value=\"inactive\" {{ subStatus == 'inactive' ? 'selected' : '' }}>Hors quota</option>
                            </select>
                        </div>
                        <div class=\"col-md-3\">
                            <label class=\"form-label fw-semibold small\">
                                <i class=\"fas fa-percent me-1\"></i> Promotion
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
                {% endif %}
            </form>
        </div>
    </div>

    {# Message filtre hors quota #}
    {% if subStatus == 'inactive' and subscriptionInactiveFiltered > 0 %}
        <div class=\"alert alert-info mb-4\">
            <i class=\"fas fa-info-circle me-2\"></i>
            <strong>{{ subscriptionInactiveFiltered }} catégorie(s)</strong> désactivée(s) par abonnement (hors quota).
        </div>
    {% endif %}

    {# Message filtre visibilité (pour les pharmacies) #}
    {% if companyType == 'pharmacy' and visibility != 'all' %}
        <div class=\"alert alert-info mb-4\">
            <i class=\"fas fa-info-circle me-2\"></i>
            {% if visibility == 'visible' %}
                Affichage des catégories <strong>visibles</strong> sur le marketplace.
            {% else %}
                Affichage des catégories <strong>masquées</strong> sur le marketplace.
            {% endif %}
        </div>
    {% endif %}

    <!-- Grille des catégories -->
    <div class=\"row g-4\">
        {% for category in categories %}
            <div class=\"col-xl-3 col-lg-4 col-md-6\">
                <div class=\"category-card card h-100 border-0 shadow-sm hover-card overflow-hidden\">
                    <!-- Zone image (sans badges) -->
                    <div class=\"category-image-wrapper position-relative\">
                        {% if category.image %}
                            <img src=\"{{ asset('uploads/categories/' ~ category.image) }}\" 
                                 alt=\"{{ category.name }}\"
                                 class=\"category-image\">
                        {% else %}
                            <div class=\"category-placeholder\">
                                <i class=\"fas fa-folder-open fa-3x text-muted\"></i>
                            </div>
                        {% endif %}
                    </div>

                    <div class=\"card-body d-flex flex-column\">
                        <!-- Titre et menu -->
                        <div class=\"d-flex justify-content-between align-items-start mb-2\">
                            <div class=\"flex-grow-1\">
                                <h6 class=\"card-title fw-bold mb-0 text-truncate\" title=\"{{ category.name }}\">
                                    {{ category.name }}
                                </h6>
                                {% if category.parent %}
                                    <small class=\"text-muted\">
                                        <i class=\"fas fa-level-up-alt fa-xs me-1\"></i>{{ category.parent.name }}
                                    </small>
                                {% endif %}
                            </div>
                            <div class=\"dropdown ms-2\">
                                <button class=\"btn btn-sm btn-light rounded-circle\" type=\"button\" data-bs-toggle=\"dropdown\" style=\"width: 32px; height: 32px;\">
                                    <i class=\"fas fa-ellipsis-v fa-sm\"></i>
                                </button>
                                <ul class=\"dropdown-menu dropdown-menu-end shadow-sm\">
                                    <li>
                                        <a class=\"dropdown-item\" href=\"{{ path('app_admin_category_show', {'id': category.id}) }}\">
                                            <i class=\"fas fa-eye me-2 text-info\"></i> Voir
                                        </a>
                                    </li>
                                    <li>
                                        <a class=\"dropdown-item\" href=\"{{ path('app_admin_category_edit', {'id': category.id}) }}\">
                                            <i class=\"fas fa-edit me-2 text-warning\"></i> Modifier
                                        </a>
                                    </li>
                                    <li>
                                        {% if category.subscriptionActive %}
                                            <button type=\"button\" 
                                                    class=\"dropdown-item toggle-category-btn\"
                                                    data-category-id=\"{{ category.id }}\"
                                                    data-category-name=\"{{ category.name }}\"
                                                    data-current-status=\"{{ category.isActive ? 'active' : 'inactive' }}\"
                                                    data-token=\"{{ csrf_token('toggle-status' ~ category.id) }}\">
                                                <i class=\"fas {{ category.isActive ? 'fa-toggle-on text-success' : 'fa-toggle-off text-secondary' }} me-2\"></i>
                                                {{ category.isActive ? 'Désactiver' : 'Activer' }}
                                            </button>
                                        {% else %}
                                            <span class=\"dropdown-item text-muted disabled\">
                                                <i class=\"fas fa-ban me-2\"></i> Non disponible
                                            </span>
                                        {% endif %}
                                    </li>
                                    <li><hr class=\"dropdown-divider\"></li>
                                    <li>
                                        {% if is_granted('ROLE_ADMIN') %}
                                            <button type=\"button\" class=\"dropdown-item text-danger delete-category-btn\"
                                                    data-id=\"{{ category.id }}\"
                                                    data-name=\"{{ category.name }}\"
                                                    data-has-children=\"{{ category.childrenCount ?? category.children|length > 0 ? 'true' : 'false' }}\"
                                                    data-has-products=\"{{ category.productCount ?? category.products|length > 0 ? 'true' : 'false' }}\"
                                                    data-token=\"{{ csrf_token('delete' ~ category.id) }}\">
                                                <i class=\"fas fa-trash me-2\"></i> Supprimer
                                            </button>
                                        {% endif %}
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Description courte -->
                        <p class=\"card-text text-muted small mb-3\">
                            {{ category.description|default('Aucune description')|u.truncate(60, '...') }}
                        </p>
                        
                        <!-- ✅ Badges sous la description -->
                        <div class=\"category-badges\">
                            {% if not category.subscriptionActive %}
                                <span class=\"badge bg-warning text-dark\">
                                    <i class=\"fas fa-clock fa-xs me-1\"></i> Hors quota
                                </span>
                            {% else %}
                                {% if category.isActive %}
                                    <span class=\"badge bg-success\">
                                        <i class=\"fas fa-check-circle fa-xs me-1\"></i> Active
                                    </span>
                                {% else %}
                                    <span class=\"badge bg-danger\">
                                        <i class=\"fas fa-pause-circle fa-xs me-1\"></i> Inactive
                                    </span>
                                {% endif %}
                                {% if category.subscriptionActive %}
                                    <span class=\"badge bg-info\">
                                        <i class=\"fas fa-database fa-xs me-1\"></i> Dans quota
                                    </span>
                                {% endif %}
                            {% endif %}
                            {# ✅ Badge de visibilité (pour les pharmacies) #}
                            {% if companyType == 'pharmacy' %}
                                {% if category.companyPublic %}
                                    <span class=\"badge bg-primary\">
                                        <i class=\"fas fa-eye fa-xs me-1\"></i> Visible
                                    </span>
                                {% else %}
                                    <span class=\"badge bg-secondary\">
                                        <i class=\"fas fa-eye-slash fa-xs me-1\"></i> Masquée
                                    </span>
                                {% endif %}
                            {% endif %}
                        </div>

                        <!-- Statistiques -->
                        <div class=\"d-flex gap-2 mt-3 mb-3\">
                            <div class=\"flex-fill text-center py-1 bg-light rounded-2\">
                                <i class=\"fas fa-box text-primary fa-sm\"></i>
                                <span class=\"fw-bold ms-1\">{{ category.productCount ?? category.products|length }}</span>
                                <small class=\"text-muted d-block fs-10\">produits</small>
                            </div>
                            <div class=\"flex-fill text-center py-1 bg-light rounded-2\">
                                <i class=\"fas fa-folder-tree text-info fa-sm\"></i>
                                <span class=\"fw-bold ms-1\">{{ category.childrenCount ?? category.children|length }}</span>
                                <small class=\"text-muted d-block fs-10\">sous-catégories</small>
                            </div>
                        </div>

                        <!-- Actions -->
                        <div class=\"d-flex gap-2 mt-auto\">
                            <a href=\"{{ path('app_admin_category_products', {'id': category.id}) }}\" 
                               class=\"btn btn-sm btn-outline-secondary flex-fill\">
                                <i class=\"fas fa-list me-1\"></i> Produits
                            </a>
                            {% if companyType != 'restaurant' %}
                                <a href=\"{{ path('app_admin_category_promotions', {'id': category.id}) }}\" 
                                   class=\"btn btn-sm btn-outline-warning\" title=\"Promotions\">
                                    <i class=\"fas fa-percent\"></i> Promotions
                                </a>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"col-12\">
                <div class=\"card border-0 shadow-sm text-center py-5\">
                    <div class=\"card-body\">
                        <i class=\"fas fa-folder-open fa-4x text-muted mb-3 opacity-50\"></i>
                        <h5 class=\"text-muted\">Aucune catégorie trouvée</h5>
                        <p class=\"text-muted small\">Modifiez vos filtres ou créez une nouvelle catégorie.</p>
                        <a href=\"{{ path('app_admin_category_new') }}\" class=\"btn btn-primary mt-2\">
                            <i class=\"fas fa-plus me-2\"></i> Nouvelle catégorie
                        </a>
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>

    <!-- Pagination -->
    {% if totalPages > 1 %}
    <nav class=\"mt-5\">
        <ul class=\"pagination justify-content-center\">
            {% if currentPage > 1 %}
                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"{{ path('app_admin_category_index', app.request.query.all|merge({'page': currentPage - 1})) }}\">
                        <i class=\"fas fa-chevron-left\"></i>
                    </a>
                </li>
            {% endif %}
            
            {% for page in 1..totalPages %}
                {% if page == currentPage or (page >= currentPage - 2 and page <= currentPage + 2) %}
                    <li class=\"page-item {{ page == currentPage ? 'active' : '' }}\">
                        <a class=\"page-link\" href=\"{{ path('app_admin_category_index', app.request.query.all|merge({'page': page})) }}\">{{ page }}</a>
                    </li>
                {% elseif page == currentPage - 3 or page == currentPage + 3 %}
                    <li class=\"page-item disabled\"><span class=\"page-link\">...</span></li>
                {% endif %}
            {% endfor %}
            
            {% if currentPage < totalPages %}
                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"{{ path('app_admin_category_index', app.request.query.all|merge({'page': currentPage + 1})) }}\">
                        <i class=\"fas fa-chevron-right\"></i>
                    </a>
                </li>
            {% endif %}
        </ul>
    </nav>
    {% endif %}
</div>

<!-- Modal Nouvelle catégorie (quota atteint) -->
<div class=\"modal fade\" id=\"quotaReachedModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-warning\">
                <h5 class=\"modal-title text-dark\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Quota atteint
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <i class=\"fas fa-ban fa-4x text-warning mb-3\"></i>
                <h5>Limite de catégories actives atteinte</h5>
                <p class=\"text-muted\">Vous utilisez déjà {{ activeCount }} catégories sur {{ quota }}.</p>
                <p class=\"text-muted small\">Pour ajouter plus de catégories, passez à un plan supérieur.</p>
            </div>
            <div class=\"modal-footer justify-content-center\">
                <a href=\"{{ path('app_subscription_plans') }}\" class=\"btn btn-warning px-4\">
                    <i class=\"fas fa-arrow-up me-2\"></i> Voir les offres
                </a>
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Toggle Statut -->
<div class=\"modal fade\" id=\"toggleCategoryModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">Confirmation</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p id=\"toggleMessage\"></p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"toggleForm\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" id=\"toggleToken\">
                    <button type=\"submit\" class=\"btn\" id=\"toggleBtn\"></button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Suppression -->
<div class=\"modal fade\" id=\"deleteCategoryModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-trash-alt me-2\"></i> Supprimer la catégorie
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p id=\"deleteMessage\"></p>
                <div id=\"deleteWarning\" class=\"alert alert-warning mt-2\" style=\"display: none;\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i>
                    <span>Cette catégorie contient des éléments. Elle ne peut pas être supprimée.</span>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"deleteForm\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteToken\">
                    <button type=\"submit\" class=\"btn btn-danger\" id=\"deleteConfirmBtn\">Supprimer</button>
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
    // ========== Initialisation Select2 pour la promotion (uniquement si présent) ==========
    if (document.getElementById('promotion')) {
        \$('#promotion').select2({
            theme: 'bootstrap-5',
            language: 'fr',
            placeholder: '🎯 Sélectionnez une promotion',
            allowClear: true,
            width: '100%'
        });
    }

    // Nouvelle catégorie avec vérification quota
    const newCategoryBtn = document.getElementById('newCategoryBtn');
    if (newCategoryBtn) {
        newCategoryBtn.addEventListener('click', function(e) {
            e.preventDefault();
            {% if quotaReached and plan != 'premium' %}
                new bootstrap.Modal(document.getElementById('quotaReachedModal')).show();
            {% else %}
                window.location.href = \"{{ path('app_admin_category_new') }}\";
            {% endif %}
        });
    }

    // Toggle statut
    const toggleModal = new bootstrap.Modal(document.getElementById('toggleCategoryModal'));
    const toggleMessage = document.getElementById('toggleMessage');
    const toggleForm = document.getElementById('toggleForm');
    const toggleToken = document.getElementById('toggleToken');
    const toggleBtn = document.getElementById('toggleBtn');

    document.querySelectorAll('.toggle-category-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const categoryId = this.dataset.categoryId;
            const categoryName = this.dataset.categoryName;
            const currentStatus = this.dataset.currentStatus;
            const isActive = currentStatus === 'active';
            
            toggleMessage.textContent = `Êtes-vous sûr de vouloir \${isActive ? 'désactiver' : 'activer'} la catégorie \"\${categoryName}\" ?`;
            toggleForm.action = `/admin/category/\${categoryId}/toggle-status`;
            toggleToken.value = this.dataset.token;
            toggleBtn.className = isActive ? 'btn btn-danger' : 'btn btn-success';
            toggleBtn.textContent = isActive ? 'Désactiver' : 'Activer';
            toggleModal.show();
        });
    });

    // Suppression
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteCategoryModal'));
    const deleteMessage = document.getElementById('deleteMessage');
    const deleteWarning = document.getElementById('deleteWarning');
    const deleteForm = document.getElementById('deleteForm');
    const deleteToken = document.getElementById('deleteToken');
    const deleteConfirmBtn = document.getElementById('deleteConfirmBtn');

    document.querySelectorAll('.delete-category-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const categoryId = this.dataset.id;
            const categoryName = this.dataset.name;
            const hasChildren = this.dataset.hasChildren === 'true';
            const hasProducts = this.dataset.hasProducts === 'true';
            
            if (hasChildren || hasProducts) {
                deleteMessage.innerHTML = `La catégorie \"<strong>\${categoryName}</strong>\" ne peut pas être supprimée.`;
                deleteWarning.style.display = 'block';
                deleteWarning.innerHTML = `<i class=\"fas fa-exclamation-triangle me-2\"></i> Cette catégorie contient \${hasChildren ? 'des sous-catégories' : ''} \${hasChildren && hasProducts ? 'et' : ''} \${hasProducts ? 'des produits' : ''}.`;
                deleteConfirmBtn.disabled = true;
            } else {
                deleteMessage.innerHTML = `Êtes-vous sûr de vouloir supprimer la catégorie \"<strong>\${categoryName}</strong>\" ?<br><small class=\"text-danger\">Cette action est irréversible.</small>`;
                deleteWarning.style.display = 'none';
                deleteConfirmBtn.disabled = false;
            }
            
            deleteForm.action = `/admin/category/\${categoryId}/delete`;
            deleteToken.value = this.dataset.token;
            deleteModal.show();
        });
    });
});
</script>
{% endblock %}", "admin/category/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\category\\index.html.twig");
    }
}
