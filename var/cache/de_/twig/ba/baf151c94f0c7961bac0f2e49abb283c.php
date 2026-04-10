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
class __TwigTemplate_53212f68d9063bbbf8ca53a659373087 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/category/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/category/index.html.twig"));

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

        yield "Catégories de produits - HMA Market";
        
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
        // line 27
        yield (((($tmp = (isset($context["quotaReached"]) || array_key_exists("quotaReached", $context) ? $context["quotaReached"] : (function () { throw new RuntimeError('Variable "quotaReached" does not exist.', 27, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-danger") : ("text-success"));
        yield " fs-5\">
                        ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activeCount"]) || array_key_exists("activeCount", $context) ? $context["activeCount"] : (function () { throw new RuntimeError('Variable "activeCount" does not exist.', 28, $this->source); })()), "html", null, true);
        yield " / ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["quota"]) || array_key_exists("quota", $context) ? $context["quota"] : (function () { throw new RuntimeError('Variable "quota" does not exist.', 28, $this->source); })()), "html", null, true);
        yield "
                        ";
        // line 29
        if (((isset($context["quota"]) || array_key_exists("quota", $context) ? $context["quota"] : (function () { throw new RuntimeError('Variable "quota" does not exist.', 29, $this->source); })()) == "Illimité")) {
            // line 30
            yield "                            <i class=\"fas fa-infinity text-info ms-1 fa-xs\"></i>
                        ";
        }
        // line 32
        yield "                    </strong>
                </div>
            </div>

            <!-- Catégories hors quota -->
            ";
        // line 37
        if (((isset($context["subscriptionInactiveCount"]) || array_key_exists("subscriptionInactiveCount", $context) ? $context["subscriptionInactiveCount"] : (function () { throw new RuntimeError('Variable "subscriptionInactiveCount" does not exist.', 37, $this->source); })()) > 0)) {
            // line 38
            yield "            <div class=\"stat-badge d-flex align-items-center bg-light rounded-3 p-2 px-3\">
                <div class=\"me-2\">
                    <span class=\"badge bg-warning p-2 rounded-circle\">
                        <i class=\"fas fa-clock fa-sm\"></i>
                    </span>
                </div>
                <div>
                    <small class=\"text-muted d-block lh-1\">Hors quota</small>
                    <strong class=\"fs-5\">";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subscriptionInactiveCount"]) || array_key_exists("subscriptionInactiveCount", $context) ? $context["subscriptionInactiveCount"] : (function () { throw new RuntimeError('Variable "subscriptionInactiveCount" does not exist.', 46, $this->source); })()), "html", null, true);
            yield "</strong>
                </div>
            </div>
            ";
        }
        // line 50
        yield "
            <a href=\"#\" id=\"newCategoryBtn\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus-circle me-2\"></i> Nouvelle catégorie
            </a>
        </div>
    </div>

    ";
        // line 58
        yield "    ";
        if (((isset($context["quotaReached"]) || array_key_exists("quotaReached", $context) ? $context["quotaReached"] : (function () { throw new RuntimeError('Variable "quotaReached" does not exist.', 58, $this->source); })()) && ((isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 58, $this->source); })()) != "premium"))) {
            // line 59
            yield "    <div class=\"alert alert-warning alert-dismissible fade show mb-4\" role=\"alert\">
        <div class=\"d-flex justify-content-between align-items-center\">
            <div>
                <i class=\"fas fa-exclamation-triangle me-2\"></i>
                <strong>Quota atteint !</strong> Vous avez utilisé vos ";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["quota"]) || array_key_exists("quota", $context) ? $context["quota"] : (function () { throw new RuntimeError('Variable "quota" does not exist.', 63, $this->source); })()), "html", null, true);
            yield " catégories actives.
            </div>
            <a href=\"";
            // line 65
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subscription_plans");
            yield "\" class=\"btn btn-warning btn-sm\">
                <i class=\"fas fa-arrow-up me-1\"></i> Voir les offres
            </a>
        </div>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    </div>
    ";
        }
        // line 72
        yield "
    ";
        // line 74
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "flashes", ["success"], "method", false, false, false, 74));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 75
            yield "        <div class=\"alert alert-success alert-dismissible fade show mb-3\" role=\"alert\">
            <i class=\"fas fa-check-circle me-2\"></i> ";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "flashes", ["error"], "method", false, false, false, 80));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 81
            yield "        <div class=\"alert alert-danger alert-dismissible fade show mb-3\" role=\"alert\">
            <i class=\"fas fa-exclamation-circle me-2\"></i> ";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        yield "
    <!-- Statistiques -->
    <div class=\"row g-3 mb-4\">
        <div class=\"col-md-3 col-6\">
            <div class=\"stat-card bg-white rounded-3 p-3 shadow-sm\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <span class=\"text-muted small text-uppercase\">Total</span>
                        <h2 class=\"mb-0 fw-bold\">";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalFiltered"]) || array_key_exists("totalFiltered", $context) ? $context["totalFiltered"] : (function () { throw new RuntimeError('Variable "totalFiltered" does not exist.', 94, $this->source); })()), "html", null, true);
        yield "</h2>
                    </div>
                    <div class=\"stat-icon bg-primary bg-opacity-10 rounded-3 p-3\">
                        <i class=\"fas fa-folder fa-2x text-primary\"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 col-6\">
            <div class=\"stat-card bg-white rounded-3 p-3 shadow-sm\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <span class=\"text-muted small text-uppercase\">Actives</span>
                        <h2 class=\"mb-0 fw-bold text-success\">";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activeFiltered"]) || array_key_exists("activeFiltered", $context) ? $context["activeFiltered"] : (function () { throw new RuntimeError('Variable "activeFiltered" does not exist.', 107, $this->source); })()), "html", null, true);
        yield "</h2>
                    </div>
                    <div class=\"stat-icon bg-success bg-opacity-10 rounded-3 p-3\">
                        <i class=\"fas fa-check-circle fa-2x text-success\"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 col-6\">
            <div class=\"stat-card bg-white rounded-3 p-3 shadow-sm\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <span class=\"text-muted small text-uppercase\">Principales</span>
                        <h2 class=\"mb-0 fw-bold text-info\">";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["mainFiltered"]) || array_key_exists("mainFiltered", $context) ? $context["mainFiltered"] : (function () { throw new RuntimeError('Variable "mainFiltered" does not exist.', 120, $this->source); })()), "html", null, true);
        yield "</h2>
                    </div>
                    <div class=\"stat-icon bg-info bg-opacity-10 rounded-3 p-3\">
                        <i class=\"fas fa-sitemap fa-2x text-info\"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 col-6\">
            <div class=\"stat-card bg-white rounded-3 p-3 shadow-sm\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <span class=\"text-muted small text-uppercase\">Sous-catégories</span>
                        <h2 class=\"mb-0 fw-bold text-warning\">";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subFiltered"]) || array_key_exists("subFiltered", $context) ? $context["subFiltered"] : (function () { throw new RuntimeError('Variable "subFiltered" does not exist.', 133, $this->source); })()), "html", null, true);
        yield "</h2>
                    </div>
                    <div class=\"stat-icon bg-warning bg-opacity-10 rounded-3 p-3\">
                        <i class=\"fas fa-folder-tree fa-2x text-warning\"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filtres -->
    <div class=\"card border-0 shadow-sm mb-4\">
        <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0\"><i class=\"fas fa-filter me-2 text-primary\"></i>Filtres</h5>
            <div class=\"d-flex gap-2\">
                <a href=\"";
        // line 148
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
                <div class=\"row g-3\">
                    <div class=\"col-md-3\">
                        <label class=\"form-label fw-semibold small\">
                            <i class=\"fas fa-search me-1\"></i> Recherche
                        </label>
                        <input type=\"text\" name=\"search\" class=\"form-control\" 
                               placeholder=\"Nom, description...\" 
                               value=\"";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 165, $this->source); })()), "html", null, true);
        yield "\">
                    </div>
                    <div class=\"col-md-2\">
                        <label class=\"form-label fw-semibold small\">
                            <i class=\"fas fa-toggle-on me-1\"></i> Statut
                        </label>
                        <select name=\"status\" class=\"form-select\">
                            <option value=\"all\" ";
        // line 172
        yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 172, $this->source); })()) == "all")) ? ("selected") : (""));
        yield ">Tous</option>
                            <option value=\"active\" ";
        // line 173
        yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 173, $this->source); })()) == "active")) ? ("selected") : (""));
        yield ">Actives</option>
                            <option value=\"inactive\" ";
        // line 174
        yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 174, $this->source); })()) == "inactive")) ? ("selected") : (""));
        yield ">Inactives</option>
                        </select>
                    </div>
                    <div class=\"col-md-2\">
                        <label class=\"form-label fw-semibold small\">
                            <i class=\"fas fa-sitemap me-1\"></i> Type
                        </label>
                        <select name=\"type\" class=\"form-select\">
                            <option value=\"all\" ";
        // line 182
        yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 182, $this->source); })()) == "all")) ? ("selected") : (""));
        yield ">Toutes</option>
                            <option value=\"main\" ";
        // line 183
        yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 183, $this->source); })()) == "main")) ? ("selected") : (""));
        yield ">Principales</option>
                            <option value=\"sub\" ";
        // line 184
        yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 184, $this->source); })()) == "sub")) ? ("selected") : (""));
        yield ">Sous-catégories</option>
                        </select>
                    </div>
                    <div class=\"col-md-2\">
                        <label class=\"form-label fw-semibold small\">
                            <i class=\"fas fa-chart-line me-1\"></i> Quota
                        </label>
                        <select name=\"sub_status\" class=\"form-select\">
                            <option value=\"all\" ";
        // line 192
        yield ((((isset($context["subStatus"]) || array_key_exists("subStatus", $context) ? $context["subStatus"] : (function () { throw new RuntimeError('Variable "subStatus" does not exist.', 192, $this->source); })()) == "all")) ? ("selected") : (""));
        yield ">Tous</option>
                            <option value=\"active\" ";
        // line 193
        yield ((((isset($context["subStatus"]) || array_key_exists("subStatus", $context) ? $context["subStatus"] : (function () { throw new RuntimeError('Variable "subStatus" does not exist.', 193, $this->source); })()) == "active")) ? ("selected") : (""));
        yield ">Dans quota</option>
                            <option value=\"inactive\" ";
        // line 194
        yield ((((isset($context["subStatus"]) || array_key_exists("subStatus", $context) ? $context["subStatus"] : (function () { throw new RuntimeError('Variable "subStatus" does not exist.', 194, $this->source); })()) == "inactive")) ? ("selected") : (""));
        yield ">Hors quota</option>
                        </select>
                    </div>
                    <div class=\"col-md-3\">
                        <label class=\"form-label fw-semibold small\">
                            <i class=\"fas fa-percent me-1\"></i> Promotion
                        </label>
                        <select name=\"promotion\" class=\"form-select\">
                            <option value=\"\">Toutes</option>
                            ";
        // line 203
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 203, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
            // line 204
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 204), "html", null, true);
            yield "\" ";
            yield ((((isset($context["selectedPromotion"]) || array_key_exists("selectedPromotion", $context) ? $context["selectedPromotion"] : (function () { throw new RuntimeError('Variable "selectedPromotion" does not exist.', 204, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 204))) ? ("selected") : (""));
            yield ">
                                    ";
            // line 205
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "name", [], "any", false, false, false, 205)), "truncate", [30], "method", false, false, false, 205), "html", null, true);
            yield "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['promotion'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 208
        yield "                        </select>
                    </div>
                </div>
            </form>
        </div>
    </div>

    ";
        // line 216
        yield "    ";
        if ((((isset($context["subStatus"]) || array_key_exists("subStatus", $context) ? $context["subStatus"] : (function () { throw new RuntimeError('Variable "subStatus" does not exist.', 216, $this->source); })()) == "inactive") && ((isset($context["subscriptionInactiveFiltered"]) || array_key_exists("subscriptionInactiveFiltered", $context) ? $context["subscriptionInactiveFiltered"] : (function () { throw new RuntimeError('Variable "subscriptionInactiveFiltered" does not exist.', 216, $this->source); })()) > 0))) {
            // line 217
            yield "        <div class=\"alert alert-info mb-4\">
            <i class=\"fas fa-info-circle me-2\"></i>
            <strong>";
            // line 219
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subscriptionInactiveFiltered"]) || array_key_exists("subscriptionInactiveFiltered", $context) ? $context["subscriptionInactiveFiltered"] : (function () { throw new RuntimeError('Variable "subscriptionInactiveFiltered" does not exist.', 219, $this->source); })()), "html", null, true);
            yield " catégorie(s)</strong> désactivée(s) par abonnement (hors quota).
        </div>
    ";
        }
        // line 222
        yield "
    <!-- Grille des catégories -->
    <div class=\"row g-4\">
        ";
        // line 225
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 225, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 226
            yield "            <div class=\"col-xl-3 col-lg-4 col-md-6\">
                <div class=\"category-card card h-100 border-0 shadow-sm hover-card overflow-hidden\">
                    <!-- Zone image réduite -->
                    <div class=\"category-image-wrapper position-relative\">
                        ";
            // line 230
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 230)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 231
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/categories/" . CoreExtension::getAttribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 231))), "html", null, true);
                yield "\" 
                                 alt=\"";
                // line 232
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 232), "html", null, true);
                yield "\"
                                 class=\"category-image\">
                        ";
            } else {
                // line 235
                yield "                            <div class=\"category-placeholder\">
                                <i class=\"fas fa-folder-open fa-3x text-muted\"></i>
                            </div>
                        ";
            }
            // line 239
            yield "                        
                        <!-- Badges en haut à droite -->
                        <div class=\"position-absolute top-0 end-0 p-2\">
                            ";
            // line 242
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["category"], "subscriptionActive", [], "any", false, false, false, 242)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 243
                yield "                                <span class=\"badge bg-warning text-dark mb-1\">
                                    <i class=\"fas fa-clock fa-xs me-1\"></i> Hors quota
                                </span>
                            ";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 246
$context["category"], "isActive", [], "any", false, false, false, 246)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 247
                yield "                                <span class=\"badge bg-success mb-1\">
                                    <i class=\"fas fa-check-circle fa-xs me-1\"></i> Active
                                </span>
                            ";
            } else {
                // line 251
                yield "                                <span class=\"badge bg-danger mb-1\">
                                    <i class=\"fas fa-pause-circle fa-xs me-1\"></i> Inactive
                                </span>
                            ";
            }
            // line 255
            yield "                            ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "subscriptionActive", [], "any", false, false, false, 255)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 256
                yield "                                <span class=\"badge bg-info\">
                                    <i class=\"fas fa-database fa-xs me-1\"></i> Quota
                                </span>
                            ";
            }
            // line 260
            yield "                        </div>
                    </div>

                    <div class=\"card-body d-flex flex-column\">
                        <!-- Titre et menu -->
                        <div class=\"d-flex justify-content-between align-items-start mb-2\">
                            <div class=\"flex-grow-1\">
                                <h6 class=\"card-title fw-bold mb-0 text-truncate\" title=\"";
            // line 267
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 267), "html", null, true);
            yield "\">
                                    ";
            // line 268
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 268), "html", null, true);
            yield "
                                </h6>
                                ";
            // line 270
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "parent", [], "any", false, false, false, 270)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 271
                yield "                                    <small class=\"text-muted\">
                                        <i class=\"fas fa-level-up-alt fa-xs me-1\"></i>";
                // line 272
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["category"], "parent", [], "any", false, false, false, 272), "name", [], "any", false, false, false, 272), "html", null, true);
                yield "
                                    </small>
                                ";
            }
            // line 275
            yield "                            </div>
                            <div class=\"dropdown ms-2\">
                                <button class=\"btn btn-sm btn-light rounded-circle\" type=\"button\" data-bs-toggle=\"dropdown\" style=\"width: 32px; height: 32px;\">
                                    <i class=\"fas fa-ellipsis-v fa-sm\"></i>
                                </button>
                                <ul class=\"dropdown-menu dropdown-menu-end shadow-sm\">
                                    <li>
                                        <a class=\"dropdown-item\" href=\"";
            // line 282
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 282)]), "html", null, true);
            yield "\">
                                            <i class=\"fas fa-eye me-2 text-info\"></i> Voir
                                        </a>
                                    </li>
                                    <li>
                                        <a class=\"dropdown-item\" href=\"";
            // line 287
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 287)]), "html", null, true);
            yield "\">
                                            <i class=\"fas fa-edit me-2 text-warning\"></i> Modifier
                                        </a>
                                    </li>
                                    <li>
                                        ";
            // line 292
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "subscriptionActive", [], "any", false, false, false, 292)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 293
                yield "                                            <button type=\"button\" 
                                                    class=\"dropdown-item toggle-category-btn\"
                                                    data-category-id=\"";
                // line 295
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 295), "html", null, true);
                yield "\"
                                                    data-category-name=\"";
                // line 296
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 296), "html", null, true);
                yield "\"
                                                    data-current-status=\"";
                // line 297
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "isActive", [], "any", false, false, false, 297)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : ("inactive"));
                yield "\"
                                                    data-token=\"";
                // line 298
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle-status" . CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 298))), "html", null, true);
                yield "\">
                                                <i class=\"fas ";
                // line 299
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "isActive", [], "any", false, false, false, 299)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-toggle-on text-success") : ("fa-toggle-off text-secondary"));
                yield " me-2\"></i>
                                                ";
                // line 300
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "isActive", [], "any", false, false, false, 300)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
                yield "
                                            </button>
                                        ";
            } else {
                // line 303
                yield "                                            <span class=\"dropdown-item text-muted disabled\">
                                                <i class=\"fas fa-ban me-2\"></i> Non disponible
                                            </span>
                                        ";
            }
            // line 307
            yield "                                    </li>
                                    <li><hr class=\"dropdown-divider\"></li>
                                    <li>
                                        ";
            // line 310
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 311
                yield "                                            <button type=\"button\" class=\"dropdown-item text-danger delete-category-btn\"
                                                    data-id=\"";
                // line 312
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 312), "html", null, true);
                yield "\"
                                                    data-name=\"";
                // line 313
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 313), "html", null, true);
                yield "\"
                                                    data-has-children=\"";
                // line 314
                yield ((((((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "childrenCount", [], "any", true, true, false, 314) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["category"], "childrenCount", [], "any", false, false, false, 314)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["category"], "childrenCount", [], "any", false, false, false, 314)) : (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 314)))) > 0)) ? ("true") : ("false"));
                yield "\"
                                                    data-has-products=\"";
                // line 315
                yield ((((((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "productCount", [], "any", true, true, false, 315) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["category"], "productCount", [], "any", false, false, false, 315)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["category"], "productCount", [], "any", false, false, false, 315)) : (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "products", [], "any", false, false, false, 315)))) > 0)) ? ("true") : ("false"));
                yield "\"
                                                    data-token=\"";
                // line 316
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 316))), "html", null, true);
                yield "\">
                                                <i class=\"fas fa-trash me-2\"></i> Supprimer
                                            </button>
                                        ";
            }
            // line 320
            yield "                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Description courte -->
                        <p class=\"card-text text-muted small mb-3\">
                            ";
            // line 327
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "description", [], "any", true, true, false, 327)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 327), "Aucune description")) : ("Aucune description"))), "truncate", [60, "..."], "method", false, false, false, 327), "html", null, true);
            yield "
                        </p>
                        
                        <!-- Statistiques -->
                        <div class=\"d-flex gap-2 mb-3\">
                            <div class=\"flex-fill text-center py-1 bg-light rounded-2\">
                                <i class=\"fas fa-box text-primary fa-sm\"></i>
                                <span class=\"fw-bold ms-1\">";
            // line 334
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "productCount", [], "any", true, true, false, 334) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["category"], "productCount", [], "any", false, false, false, 334)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "productCount", [], "any", false, false, false, 334), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "products", [], "any", false, false, false, 334)), "html", null, true)));
            yield "</span>
                                <small class=\"text-muted d-block fs-10\">produits</small>
                            </div>
                            <div class=\"flex-fill text-center py-1 bg-light rounded-2\">
                                <i class=\"fas fa-folder-tree text-info fa-sm\"></i>
                                <span class=\"fw-bold ms-1\">";
            // line 339
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "childrenCount", [], "any", true, true, false, 339) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["category"], "childrenCount", [], "any", false, false, false, 339)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "childrenCount", [], "any", false, false, false, 339), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 339)), "html", null, true)));
            yield "</span>
                                <small class=\"text-muted d-block fs-10\">sous-catégories</small>
                            </div>
                        </div>

                        <!-- Actions -->
                        <div class=\"d-flex gap-2 mt-auto\">
                            <a href=\"";
            // line 346
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_products", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 346)]), "html", null, true);
            yield "\" 
                               class=\"btn btn-sm btn-outline-secondary flex-fill\">
                                <i class=\"fas fa-list me-1\"></i> Produits
                            </a>
                            ";
            // line 350
            if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 350, $this->source); })()) != "restaurant")) {
                // line 351
                yield "                                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_promotions", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 351)]), "html", null, true);
                yield "\" 
                                   class=\"btn btn-sm btn-outline-warning\" title=\"Promotions\">
                                    <i class=\"fas fa-percent\"></i> Promotions
                                </a>
                            ";
            }
            // line 356
            yield "                        </div>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 360
        if (!$context['_iterated']) {
            // line 361
            yield "            <div class=\"col-12\">
                <div class=\"card border-0 shadow-sm text-center py-5\">
                    <div class=\"card-body\">
                        <i class=\"fas fa-folder-open fa-4x text-muted mb-3 opacity-50\"></i>
                        <h5 class=\"text-muted\">Aucune catégorie trouvée</h5>
                        <p class=\"text-muted small\">Modifiez vos filtres ou créez une nouvelle catégorie.</p>
                        <a href=\"";
            // line 367
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
        // line 374
        yield "    </div>

    <!-- Pagination -->
    ";
        // line 377
        if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 377, $this->source); })()) > 1)) {
            // line 378
            yield "    <nav class=\"mt-5\">
        <ul class=\"pagination justify-content-center\">
            ";
            // line 380
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 380, $this->source); })()) > 1)) {
                // line 381
                yield "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                // line 382
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 382, $this->source); })()), "request", [], "any", false, false, false, 382), "query", [], "any", false, false, false, 382), "all", [], "any", false, false, false, 382), ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 382, $this->source); })()) - 1)])), "html", null, true);
                yield "\">
                        <i class=\"fas fa-chevron-left\"></i>
                    </a>
                </li>
            ";
            }
            // line 387
            yield "            
            ";
            // line 388
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 388, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 389
                yield "                ";
                if ((($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 389, $this->source); })())) || (($context["page"] >= ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 389, $this->source); })()) - 2)) && ($context["page"] <= ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 389, $this->source); })()) + 2))))) {
                    // line 390
                    yield "                    <li class=\"page-item ";
                    yield ((($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 390, $this->source); })()))) ? ("active") : (""));
                    yield "\">
                        <a class=\"page-link\" href=\"";
                    // line 391
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 391, $this->source); })()), "request", [], "any", false, false, false, 391), "query", [], "any", false, false, false, 391), "all", [], "any", false, false, false, 391), ["page" => $context["page"]])), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "</a>
                    </li>
                ";
                } elseif (((                // line 393
$context["page"] == ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 393, $this->source); })()) - 3)) || ($context["page"] == ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 393, $this->source); })()) + 3)))) {
                    // line 394
                    yield "                    <li class=\"page-item disabled\"><span class=\"page-link\">...</span></li>
                ";
                }
                // line 396
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 397
            yield "            
            ";
            // line 398
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 398, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 398, $this->source); })()))) {
                // line 399
                yield "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                // line 400
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 400, $this->source); })()), "request", [], "any", false, false, false, 400), "query", [], "any", false, false, false, 400), "all", [], "any", false, false, false, 400), ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 400, $this->source); })()) + 1)])), "html", null, true);
                yield "\">
                        <i class=\"fas fa-chevron-right\"></i>
                    </a>
                </li>
            ";
            }
            // line 405
            yield "        </ul>
    </nav>
    ";
        }
        // line 408
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
        // line 423
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activeCount"]) || array_key_exists("activeCount", $context) ? $context["activeCount"] : (function () { throw new RuntimeError('Variable "activeCount" does not exist.', 423, $this->source); })()), "html", null, true);
        yield " catégories sur ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["quota"]) || array_key_exists("quota", $context) ? $context["quota"] : (function () { throw new RuntimeError('Variable "quota" does not exist.', 423, $this->source); })()), "html", null, true);
        yield ".</p>
                <p class=\"text-muted small\">Pour ajouter plus de catégories, passez à un plan supérieur.</p>
            </div>
            <div class=\"modal-footer justify-content-center\">
                <a href=\"";
        // line 427
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

    // line 487
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

        // line 488
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Nouvelle catégorie avec vérification quota
    const newCategoryBtn = document.getElementById('newCategoryBtn');
    if (newCategoryBtn) {
        newCategoryBtn.addEventListener('click', function(e) {
            e.preventDefault();
            ";
        // line 496
        if (((isset($context["quotaReached"]) || array_key_exists("quotaReached", $context) ? $context["quotaReached"] : (function () { throw new RuntimeError('Variable "quotaReached" does not exist.', 496, $this->source); })()) && ((isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 496, $this->source); })()) != "premium"))) {
            // line 497
            yield "                new bootstrap.Modal(document.getElementById('quotaReachedModal')).show();
            ";
        } else {
            // line 499
            yield "                window.location.href = \"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_new");
            yield "\";
            ";
        }
        // line 501
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

    // line 562
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

        // line 563
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
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
        return array (  1019 => 563,  1006 => 562,  936 => 501,  930 => 499,  926 => 497,  924 => 496,  913 => 488,  900 => 487,  830 => 427,  821 => 423,  804 => 408,  799 => 405,  791 => 400,  788 => 399,  786 => 398,  783 => 397,  777 => 396,  773 => 394,  771 => 393,  764 => 391,  759 => 390,  756 => 389,  752 => 388,  749 => 387,  741 => 382,  738 => 381,  736 => 380,  732 => 378,  730 => 377,  725 => 374,  712 => 367,  704 => 361,  702 => 360,  694 => 356,  685 => 351,  683 => 350,  676 => 346,  666 => 339,  658 => 334,  648 => 327,  639 => 320,  632 => 316,  628 => 315,  624 => 314,  620 => 313,  616 => 312,  613 => 311,  611 => 310,  606 => 307,  600 => 303,  594 => 300,  590 => 299,  586 => 298,  582 => 297,  578 => 296,  574 => 295,  570 => 293,  568 => 292,  560 => 287,  552 => 282,  543 => 275,  537 => 272,  534 => 271,  532 => 270,  527 => 268,  523 => 267,  514 => 260,  508 => 256,  505 => 255,  499 => 251,  493 => 247,  491 => 246,  486 => 243,  484 => 242,  479 => 239,  473 => 235,  467 => 232,  462 => 231,  460 => 230,  454 => 226,  449 => 225,  444 => 222,  438 => 219,  434 => 217,  431 => 216,  422 => 208,  413 => 205,  406 => 204,  402 => 203,  390 => 194,  386 => 193,  382 => 192,  371 => 184,  367 => 183,  363 => 182,  352 => 174,  348 => 173,  344 => 172,  334 => 165,  314 => 148,  296 => 133,  280 => 120,  264 => 107,  248 => 94,  238 => 86,  228 => 82,  225 => 81,  220 => 80,  210 => 76,  207 => 75,  202 => 74,  199 => 72,  189 => 65,  184 => 63,  178 => 59,  175 => 58,  166 => 50,  159 => 46,  149 => 38,  147 => 37,  140 => 32,  136 => 30,  134 => 29,  128 => 28,  124 => 27,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/category/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Catégories de produits - HMA Market{% endblock %}

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

    <!-- Statistiques -->
    <div class=\"row g-3 mb-4\">
        <div class=\"col-md-3 col-6\">
            <div class=\"stat-card bg-white rounded-3 p-3 shadow-sm\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <span class=\"text-muted small text-uppercase\">Total</span>
                        <h2 class=\"mb-0 fw-bold\">{{ totalFiltered }}</h2>
                    </div>
                    <div class=\"stat-icon bg-primary bg-opacity-10 rounded-3 p-3\">
                        <i class=\"fas fa-folder fa-2x text-primary\"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 col-6\">
            <div class=\"stat-card bg-white rounded-3 p-3 shadow-sm\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <span class=\"text-muted small text-uppercase\">Actives</span>
                        <h2 class=\"mb-0 fw-bold text-success\">{{ activeFiltered }}</h2>
                    </div>
                    <div class=\"stat-icon bg-success bg-opacity-10 rounded-3 p-3\">
                        <i class=\"fas fa-check-circle fa-2x text-success\"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 col-6\">
            <div class=\"stat-card bg-white rounded-3 p-3 shadow-sm\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <span class=\"text-muted small text-uppercase\">Principales</span>
                        <h2 class=\"mb-0 fw-bold text-info\">{{ mainFiltered }}</h2>
                    </div>
                    <div class=\"stat-icon bg-info bg-opacity-10 rounded-3 p-3\">
                        <i class=\"fas fa-sitemap fa-2x text-info\"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 col-6\">
            <div class=\"stat-card bg-white rounded-3 p-3 shadow-sm\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <span class=\"text-muted small text-uppercase\">Sous-catégories</span>
                        <h2 class=\"mb-0 fw-bold text-warning\">{{ subFiltered }}</h2>
                    </div>
                    <div class=\"stat-icon bg-warning bg-opacity-10 rounded-3 p-3\">
                        <i class=\"fas fa-folder-tree fa-2x text-warning\"></i>
                    </div>
                </div>
            </div>
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
                            <option value=\"all\" {{ status == 'all' ? 'selected' }}>Tous</option>
                            <option value=\"active\" {{ status == 'active' ? 'selected' }}>Actives</option>
                            <option value=\"inactive\" {{ status == 'inactive' ? 'selected' }}>Inactives</option>
                        </select>
                    </div>
                    <div class=\"col-md-2\">
                        <label class=\"form-label fw-semibold small\">
                            <i class=\"fas fa-sitemap me-1\"></i> Type
                        </label>
                        <select name=\"type\" class=\"form-select\">
                            <option value=\"all\" {{ type == 'all' ? 'selected' }}>Toutes</option>
                            <option value=\"main\" {{ type == 'main' ? 'selected' }}>Principales</option>
                            <option value=\"sub\" {{ type == 'sub' ? 'selected' }}>Sous-catégories</option>
                        </select>
                    </div>
                    <div class=\"col-md-2\">
                        <label class=\"form-label fw-semibold small\">
                            <i class=\"fas fa-chart-line me-1\"></i> Quota
                        </label>
                        <select name=\"sub_status\" class=\"form-select\">
                            <option value=\"all\" {{ subStatus == 'all' ? 'selected' }}>Tous</option>
                            <option value=\"active\" {{ subStatus == 'active' ? 'selected' }}>Dans quota</option>
                            <option value=\"inactive\" {{ subStatus == 'inactive' ? 'selected' }}>Hors quota</option>
                        </select>
                    </div>
                    <div class=\"col-md-3\">
                        <label class=\"form-label fw-semibold small\">
                            <i class=\"fas fa-percent me-1\"></i> Promotion
                        </label>
                        <select name=\"promotion\" class=\"form-select\">
                            <option value=\"\">Toutes</option>
                            {% for promotion in promotions %}
                                <option value=\"{{ promotion.id }}\" {{ selectedPromotion == promotion.id ? 'selected' }}>
                                    {{ promotion.name|u.truncate(30) }}
                                </option>
                            {% endfor %}
                        </select>
                    </div>
                </div>
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

    <!-- Grille des catégories -->
    <div class=\"row g-4\">
        {% for category in categories %}
            <div class=\"col-xl-3 col-lg-4 col-md-6\">
                <div class=\"category-card card h-100 border-0 shadow-sm hover-card overflow-hidden\">
                    <!-- Zone image réduite -->
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
                        
                        <!-- Badges en haut à droite -->
                        <div class=\"position-absolute top-0 end-0 p-2\">
                            {% if not category.subscriptionActive %}
                                <span class=\"badge bg-warning text-dark mb-1\">
                                    <i class=\"fas fa-clock fa-xs me-1\"></i> Hors quota
                                </span>
                            {% elseif category.isActive %}
                                <span class=\"badge bg-success mb-1\">
                                    <i class=\"fas fa-check-circle fa-xs me-1\"></i> Active
                                </span>
                            {% else %}
                                <span class=\"badge bg-danger mb-1\">
                                    <i class=\"fas fa-pause-circle fa-xs me-1\"></i> Inactive
                                </span>
                            {% endif %}
                            {% if category.subscriptionActive %}
                                <span class=\"badge bg-info\">
                                    <i class=\"fas fa-database fa-xs me-1\"></i> Quota
                                </span>
                            {% endif %}
                        </div>
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
                                                    data-has-children=\"{{ (category.childrenCount ?? category.children|length) > 0 ? 'true' : 'false' }}\"
                                                    data-has-products=\"{{ (category.productCount ?? category.products|length) > 0 ? 'true' : 'false' }}\"
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
                        
                        <!-- Statistiques -->
                        <div class=\"d-flex gap-2 mb-3\">
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
<script>
document.addEventListener('DOMContentLoaded', function() {
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
{% endblock %}

{% block stylesheets %}
{{ parent() }}
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
{% endblock %}", "admin/category/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\category\\index.html.twig");
    }
}
