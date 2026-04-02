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
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap\">
        <div>
            <h1 class=\"h3 mb-1 text-gray-800 fw-bold\">
                <i class=\"fas fa-tags me-2\"></i>Catégories de produits
            </h1>
            <p class=\"text-muted\">Organisez vos produits par catégories</p>
        </div>

        <div class=\"d-flex align-items-center gap-3\">
            <!-- Indicateur de quota -->
            <div class=\"card bg-light p-3\">
                <div class=\"d-flex align-items-center\">
                    <div class=\"me-3\">
                        <span class=\"badge bg-primary p-2\">
                            <i class=\"fas fa-chart-line\"></i>
                        </span>
                    </div>
                    <div>
                        <small class=\"text-muted\">Catégories dans quota</small>
                        <h5 class=\"mb-0 ";
        // line 28
        yield (((($tmp = (isset($context["quotaReached"]) || array_key_exists("quotaReached", $context) ? $context["quotaReached"] : (function () { throw new RuntimeError('Variable "quotaReached" does not exist.', 28, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-danger") : ("text-success"));
        yield "\">
                            ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activeCount"]) || array_key_exists("activeCount", $context) ? $context["activeCount"] : (function () { throw new RuntimeError('Variable "activeCount" does not exist.', 29, $this->source); })()), "html", null, true);
        yield " / ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["quota"]) || array_key_exists("quota", $context) ? $context["quota"] : (function () { throw new RuntimeError('Variable "quota" does not exist.', 29, $this->source); })()), "html", null, true);
        yield "
                            ";
        // line 30
        if (((isset($context["quota"]) || array_key_exists("quota", $context) ? $context["quota"] : (function () { throw new RuntimeError('Variable "quota" does not exist.', 30, $this->source); })()) == "Illimité")) {
            // line 31
            yield "                                <i class=\"fas fa-infinity text-info ms-1\"></i>
                            ";
        }
        // line 33
        yield "                        </h5>
                        ";
        // line 34
        if ((($tmp = (isset($context["quotaReached"]) || array_key_exists("quotaReached", $context) ? $context["quotaReached"] : (function () { throw new RuntimeError('Variable "quotaReached" does not exist.', 34, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 35
            yield "                            <small class=\"text-danger\">Quota atteint</small>
                        ";
        }
        // line 37
        yield "                    </div>
                </div>
            </div>

            ";
        // line 42
        yield "            ";
        if (((isset($context["subscriptionInactiveCount"]) || array_key_exists("subscriptionInactiveCount", $context) ? $context["subscriptionInactiveCount"] : (function () { throw new RuntimeError('Variable "subscriptionInactiveCount" does not exist.', 42, $this->source); })()) > 0)) {
            // line 43
            yield "            <div class=\"card bg-light p-3\">
                <div class=\"d-flex align-items-center\">
                    <div class=\"me-3\">
                        <span class=\"badge bg-warning p-2\">
                            <i class=\"fas fa-clock\"></i>
                        </span>
                    </div>
                    <div>
                        <small class=\"text-muted\">En attente (hors quota)</small>
                        <h5 class=\"mb-0\">";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subscriptionInactiveCount"]) || array_key_exists("subscriptionInactiveCount", $context) ? $context["subscriptionInactiveCount"] : (function () { throw new RuntimeError('Variable "subscriptionInactiveCount" does not exist.', 52, $this->source); })()), "html", null, true);
            yield "</h5>
                        <small>désactivées par abonnement</small>
                    </div>
                </div>
            </div>
            ";
        }
        // line 58
        yield "
            <a href=\"#\" id=\"newCategoryBtn\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus-circle me-2\"></i> Nouvelle Catégorie
            </a>
        </div>
    </div>

    ";
        // line 66
        yield "    ";
        if (((isset($context["quotaReached"]) || array_key_exists("quotaReached", $context) ? $context["quotaReached"] : (function () { throw new RuntimeError('Variable "quotaReached" does not exist.', 66, $this->source); })()) && ((isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 66, $this->source); })()) != "premium"))) {
            // line 67
            yield "    <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
        <div class=\"d-flex justify-content-between align-items-center\">
            <div>
                <i class=\"fas fa-exclamation-triangle me-2\"></i>
                <strong>Quota atteint !</strong> Vous avez utilisé vos ";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["quota"]) || array_key_exists("quota", $context) ? $context["quota"] : (function () { throw new RuntimeError('Variable "quota" does not exist.', 71, $this->source); })()), "html", null, true);
            yield " catégories dans le quota.
                Les catégories supplémentaires sont désactivées et ne sont pas visibles dans le catalogue.
            </div>
            <a href=\"";
            // line 74
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subscription_plans");
            yield "\" class=\"btn btn-warning btn-sm\">
                <i class=\"fas fa-arrow-up me-1\"></i> Voir les offres
            </a>
        </div>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    </div>
    ";
        }
        // line 81
        yield "
    ";
        // line 83
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "flashes", ["success"], "method", false, false, false, 83));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 84
            yield "        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
            <i class=\"fas fa-check-circle me-2\"></i> ";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 89, $this->source); })()), "flashes", ["error"], "method", false, false, false, 89));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 90
            yield "        <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
            <i class=\"fas fa-exclamation-circle me-2\"></i> ";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        yield "
    <!-- Statistiques filtrées (affichage des compteurs selon les filtres) -->
    <div class=\"card shadow mb-4\">
        <div class=\"card-header bg-white py-3\">
            <h5 class=\"mb-0\"><i class=\"fas fa-chart-pie me-2\"></i>Statistiques selon les filtres</h5>
        </div>
        <div class=\"card-body\">
            <div class=\"row\">
                <div class=\"col-md-3 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-primary text-uppercase small fw-bold\">Total</span>
                                <h3 class=\"mb-0\">";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalFiltered"]) || array_key_exists("totalFiltered", $context) ? $context["totalFiltered"] : (function () { throw new RuntimeError('Variable "totalFiltered" does not exist.', 108, $this->source); })()), "html", null, true);
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
                                <span class=\"text-success text-uppercase small fw-bold\">Actives (manuel)</span>
                                <h3 class=\"mb-0\">";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activeFiltered"]) || array_key_exists("activeFiltered", $context) ? $context["activeFiltered"] : (function () { throw new RuntimeError('Variable "activeFiltered" does not exist.', 119, $this->source); })()), "html", null, true);
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
                                <span class=\"text-info text-uppercase small fw-bold\">Principales</span>
                                <h3 class=\"mb-0\">";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["mainFiltered"]) || array_key_exists("mainFiltered", $context) ? $context["mainFiltered"] : (function () { throw new RuntimeError('Variable "mainFiltered" does not exist.', 130, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-sitemap fa-2x text-info opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-warning text-uppercase small fw-bold\">Sous-catégories</span>
                                <h3 class=\"mb-0\">";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subFiltered"]) || array_key_exists("subFiltered", $context) ? $context["subFiltered"] : (function () { throw new RuntimeError('Variable "subFiltered" does not exist.', 141, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-folder-tree fa-2x text-warning opacity-50\"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-4 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-danger text-uppercase small fw-bold\">Inactives (manuel)</span>
                                <h3 class=\"mb-0\">";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["inactiveFiltered"]) || array_key_exists("inactiveFiltered", $context) ? $context["inactiveFiltered"] : (function () { throw new RuntimeError('Variable "inactiveFiltered" does not exist.', 154, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-pause-circle fa-2x text-danger opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-info text-uppercase small fw-bold\">Dans quota</span>
                                <h3 class=\"mb-0\">";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subscriptionActiveFiltered"]) || array_key_exists("subscriptionActiveFiltered", $context) ? $context["subscriptionActiveFiltered"] : (function () { throw new RuntimeError('Variable "subscriptionActiveFiltered" does not exist.', 165, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-check-circle fa-2x text-info opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-secondary text-uppercase small fw-bold\">Hors quota</span>
                                <h3 class=\"mb-0\">";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subscriptionInactiveFiltered"]) || array_key_exists("subscriptionInactiveFiltered", $context) ? $context["subscriptionInactiveFiltered"] : (function () { throw new RuntimeError('Variable "subscriptionInactiveFiltered" does not exist.', 176, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-clock fa-2x text-secondary opacity-50\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filtres -->
    <div class=\"card shadow mb-4\">
        <div class=\"card-header bg-white py-3\">
            <h5 class=\"mb-0\"><i class=\"fas fa-filter me-2\"></i>Filtres</h5>
        </div>
        <div class=\"card-body\">
            <form method=\"get\" class=\"row g-3\">
                <div class=\"col-lg-3 col-md-6\">
                    <label for=\"search\" class=\"form-label fw-bold\">Rechercher</label>
                    <div class=\"input-group\">
                        <span class=\"input-group-text bg-white border-end-0\">
                            <i class=\"fas fa-search text-muted\"></i>
                        </span>
                        <input type=\"text\" name=\"search\" id=\"search\" value=\"";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 199, $this->source); })()), "html", null, true);
        yield "\" 
                               class=\"form-control border-start-0\" placeholder=\"Nom, description...\">
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-6\">
                    <label for=\"status\" class=\"form-label fw-bold\">Statut (manuel)</label>
                    <select name=\"status\" id=\"status\" class=\"form-select\">
                        <option value=\"all\" ";
        // line 206
        yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 206, $this->source); })()) == "all")) ? ("selected") : (""));
        yield ">Tous</option>
                        <option value=\"active\" ";
        // line 207
        yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 207, $this->source); })()) == "active")) ? ("selected") : (""));
        yield ">Actives</option>
                        <option value=\"inactive\" ";
        // line 208
        yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 208, $this->source); })()) == "inactive")) ? ("selected") : (""));
        yield ">Inactives</option>
                    </select>
                </div>
                <div class=\"col-lg-2 col-md-6\">
                    <label for=\"type\" class=\"form-label fw-bold\">Type</label>
                    <select name=\"type\" id=\"type\" class=\"form-select\">
                        <option value=\"all\" ";
        // line 214
        yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 214, $this->source); })()) == "all")) ? ("selected") : (""));
        yield ">Toutes</option>
                        <option value=\"main\" ";
        // line 215
        yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 215, $this->source); })()) == "main")) ? ("selected") : (""));
        yield ">Principales</option>
                        <option value=\"sub\" ";
        // line 216
        yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 216, $this->source); })()) == "sub")) ? ("selected") : (""));
        yield ">Sous-catégories</option>
                    </select>
                </div>
                <div class=\"col-lg-2 col-md-6\">
                    <label for=\"sub_status\" class=\"form-label fw-bold\">Statut quota</label>
                    <select name=\"sub_status\" id=\"sub_status\" class=\"form-select\">
                        <option value=\"all\" ";
        // line 222
        yield ((((isset($context["subStatus"]) || array_key_exists("subStatus", $context) ? $context["subStatus"] : (function () { throw new RuntimeError('Variable "subStatus" does not exist.', 222, $this->source); })()) == "all")) ? ("selected") : (""));
        yield ">Tous</option>
                        <option value=\"active\" ";
        // line 223
        yield ((((isset($context["subStatus"]) || array_key_exists("subStatus", $context) ? $context["subStatus"] : (function () { throw new RuntimeError('Variable "subStatus" does not exist.', 223, $this->source); })()) == "active")) ? ("selected") : (""));
        yield ">Dans quota</option>
                        <option value=\"inactive\" ";
        // line 224
        yield ((((isset($context["subStatus"]) || array_key_exists("subStatus", $context) ? $context["subStatus"] : (function () { throw new RuntimeError('Variable "subStatus" does not exist.', 224, $this->source); })()) == "inactive")) ? ("selected") : (""));
        yield ">Hors quota</option>
                    </select>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <label for=\"promotion\" class=\"form-label fw-bold\">Promotion</label>
                    <select name=\"promotion\" id=\"promotion\" class=\"form-select\">
                        <option value=\"\">Toutes les promotions</option>
                        ";
        // line 231
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 231, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
            // line 232
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 232), "html", null, true);
            yield "\" ";
            yield ((((isset($context["selectedPromotion"]) || array_key_exists("selectedPromotion", $context) ? $context["selectedPromotion"] : (function () { throw new RuntimeError('Variable "selectedPromotion" does not exist.', 232, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 232))) ? ("selected") : (""));
            yield ">
                                ";
            // line 233
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "name", [], "any", false, false, false, 233), "html", null, true);
            yield "
                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['promotion'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 236
        yield "                    </select>
                </div>
                <div class=\"col-12 d-flex justify-content-end gap-2 mt-4\">
                    <a href=\"";
        // line 239
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_index");
        yield "\" class=\"btn btn-outline-secondary px-4\">
                        <i class=\"fas fa-undo me-1\"></i> Effacer
                    </a>
                    <button type=\"submit\" class=\"btn btn-primary px-5\">
                        <i class=\"fas fa-search me-2\"></i> Filtrer
                    </button>
                </div>
            </form>
        </div>
    </div>

    ";
        // line 251
        yield "    ";
        if (((isset($context["subStatus"]) || array_key_exists("subStatus", $context) ? $context["subStatus"] : (function () { throw new RuntimeError('Variable "subStatus" does not exist.', 251, $this->source); })()) == "inactive")) {
            // line 252
            yield "        <div class=\"alert alert-info mb-4\">
            <i class=\"fas fa-info-circle me-2\"></i>
            <strong>";
            // line 254
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subscriptionInactiveFiltered"]) || array_key_exists("subscriptionInactiveFiltered", $context) ? $context["subscriptionInactiveFiltered"] : (function () { throw new RuntimeError('Variable "subscriptionInactiveFiltered" does not exist.', 254, $this->source); })()), "html", null, true);
            yield " catégorie(s)</strong> désactivées par abonnement (hors quota).
            Elles ne sont pas visibles dans le catalogue mais peuvent être réactivées en passant à un plan supérieur.
        </div>
    ";
        }
        // line 258
        yield "
    <!-- Grille de catégories -->
    <div class=\"row g-4\">
        ";
        // line 261
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 261, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 262
            yield "            <div class=\"col-xl-3 col-lg-4 col-md-6\">
                <div class=\"card h-100 border-0 shadow-sm hover-card ";
            // line 263
            yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["category"], "subscriptionActive", [], "any", false, false, false, 263)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("border-warning") : (""));
            yield "\">
                    <div class=\"category-image-container position-relative\">
                        ";
            // line 265
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 265)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 266
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/categories/" . CoreExtension::getAttribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 266))), "html", null, true);
                yield "\" 
                                 alt=\"";
                // line 267
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 267), "html", null, true);
                yield "\"
                                 class=\"card-img-top category-image\">
                        ";
            } else {
                // line 270
                yield "                            <div class=\"category-image-placeholder\">
                                <i class=\"fas fa-folder fa-4x text-muted\"></i>
                            </div>
                        ";
            }
            // line 274
            yield "                        
                        <!-- Badges de statut -->
                        <div class=\"position-absolute top-0 start-0 p-2\">
                            <div class=\"d-flex flex-column gap-1\">
                                ";
            // line 278
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["category"], "subscriptionActive", [], "any", false, false, false, 278)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 279
                yield "                                    <span class=\"badge bg-warning\"><i class=\"fas fa-clock me-1\"></i> Hors quota</span>
                                ";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 280
$context["category"], "isActive", [], "any", false, false, false, 280)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 281
                yield "                                    <span class=\"badge bg-success\"><i class=\"fas fa-check-circle me-1\"></i> Active</span>
                                ";
            } else {
                // line 283
                yield "                                    <span class=\"badge bg-danger\"><i class=\"fas fa-pause-circle me-1\"></i> Désactivée</span>
                                ";
            }
            // line 285
            yield "                                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "subscriptionActive", [], "any", false, false, false, 285)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 286
                yield "                                    <span class=\"badge bg-info\"><i class=\"fas fa-database me-1\"></i> Dans quota</span>
                                ";
            }
            // line 288
            yield "                            </div>
                        </div>
                    </div>

                    <div class=\"card-body d-flex flex-column\">
                        <div class=\"d-flex justify-content-between align-items-center mb-2\">
                            <h5 class=\"card-title text-truncate mb-0\" title=\"";
            // line 294
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 294), "html", null, true);
            yield "\">
                                ";
            // line 295
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 295), "html", null, true);
            yield "
                                ";
            // line 296
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "parent", [], "any", false, false, false, 296)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 297
                yield "                                    <br><small class=\"text-muted\"><i class=\"fas fa-level-up-alt me-1\"></i>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["category"], "parent", [], "any", false, false, false, 297), "name", [], "any", false, false, false, 297), "html", null, true);
                yield "</small>
                                ";
            }
            // line 299
            yield "                            </h5>
                            <div class=\"dropdown\">
                                <button class=\"btn btn-sm btn-light\" type=\"button\" data-bs-toggle=\"dropdown\">
                                    <i class=\"fas fa-bars\"></i>
                                </button>
                                <ul class=\"dropdown-menu dropdown-menu-end\">
                                    <li>
                                        <a class=\"dropdown-item\" href=\"";
            // line 306
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 306)]), "html", null, true);
            yield "\">
                                            <i class=\"fas fa-eye me-2\"></i> Voir
                                        </a>
                                    </li>
                                    <li>
                                        <a class=\"dropdown-item\" href=\"";
            // line 311
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 311)]), "html", null, true);
            yield "\">
                                            <i class=\"fas fa-edit me-2\"></i> Modifier
                                        </a>
                                    </li>
                                    <li>
                                        ";
            // line 316
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "subscriptionActive", [], "any", false, false, false, 316)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 317
                yield "                                            <button type=\"button\" 
                                                    class=\"dropdown-item toggle-category-btn\"
                                                    data-category-id=\"";
                // line 319
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 319), "html", null, true);
                yield "\"
                                                    data-category-name=\"";
                // line 320
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 320), "html", null, true);
                yield "\"
                                                    data-current-status=\"";
                // line 321
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "isActive", [], "any", false, false, false, 321)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : ("inactive"));
                yield "\"
                                                    data-token=\"";
                // line 322
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle-status" . CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 322))), "html", null, true);
                yield "\">
                                                <i class=\"fas ";
                // line 323
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "isActive", [], "any", false, false, false, 323)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-toggle-on") : ("fa-toggle-off"));
                yield " me-2\"></i>
                                                ";
                // line 324
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "isActive", [], "any", false, false, false, 324)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
                yield "
                                            </button>
                                        ";
            } else {
                // line 327
                yield "                                            <span class=\"dropdown-item text-muted disabled\">
                                                <i class=\"fas fa-ban me-2\"></i> Non disponible (hors quota)
                                            </span>
                                        ";
            }
            // line 331
            yield "                                    </li>
                                    <li><hr class=\"dropdown-divider\"></li>
                                    <li>
                                        ";
            // line 334
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 335
                yield "                                            <button type=\"button\" class=\"dropdown-item text-danger delete-category-btn\"
                                                    data-id=\"";
                // line 336
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 336), "html", null, true);
                yield "\"
                                                    data-name=\"";
                // line 337
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 337), "html", null, true);
                yield "\"
                                                    data-has-children=\"";
                // line 338
                yield ((((((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "childrenCount", [], "any", true, true, false, 338) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["category"], "childrenCount", [], "any", false, false, false, 338)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["category"], "childrenCount", [], "any", false, false, false, 338)) : (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 338)))) > 0)) ? ("true") : ("false"));
                yield "\"
                                                    data-has-products=\"";
                // line 339
                yield ((((((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "productCount", [], "any", true, true, false, 339) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["category"], "productCount", [], "any", false, false, false, 339)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["category"], "productCount", [], "any", false, false, false, 339)) : (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "products", [], "any", false, false, false, 339)))) > 0)) ? ("true") : ("false"));
                yield "\"
                                                    data-token=\"";
                // line 340
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 340))), "html", null, true);
                yield "\">
                                                <i class=\"fas fa-trash me-2\"></i> Supprimer
                                            </button>
                                        ";
            }
            // line 344
            yield "                                    </li>
                                </ul>
                            </div>
                        </div>

                        <p class=\"card-text text-muted small mb-3\">
                            ";
            // line 350
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "description", [], "any", true, true, false, 350)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 350), "Aucune description")) : ("Aucune description"))), "truncate", [80, "..."], "method", false, false, false, 350), "html", null, true);
            yield "
                        </p>
                        
                        <div class=\"d-flex justify-content-between align-items-center mb-3\">
                            <div class=\"text-center px-2 py-1 bg-light rounded\" style=\"min-width: 45%;\">
                                <i class=\"fas fa-box text-primary me-1\"></i>
                                <span class=\"fw-bold\">";
            // line 356
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "productCount", [], "any", true, true, false, 356) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["category"], "productCount", [], "any", false, false, false, 356)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "productCount", [], "any", false, false, false, 356), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "products", [], "any", false, false, false, 356)), "html", null, true)));
            yield "</span>
                                <small class=\"text-muted d-block\">produits</small>
                            </div>
                            <div class=\"text-center px-2 py-1 bg-light rounded\" style=\"min-width: 45%;\">
                                <i class=\"fas fa-sitemap text-info me-1\"></i>
                                <span class=\"fw-bold\">";
            // line 361
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "childrenCount", [], "any", true, true, false, 361) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["category"], "childrenCount", [], "any", false, false, false, 361)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "childrenCount", [], "any", false, false, false, 361), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 361)), "html", null, true)));
            yield "</span>
                                <small class=\"text-muted d-block\">sous-catégories</small>
                            </div>
                        </div>

                        <div class=\"d-flex gap-2 mt-auto\">
                            <a href=\"";
            // line 367
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_products", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 367)]), "html", null, true);
            yield "\" 
                               class=\"btn btn-sm btn-outline-info flex-fill\">
                                <i class=\"fas fa-list\"></i> Produits
                            </a>
                            <a href=\"";
            // line 371
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_promotions", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 371)]), "html", null, true);
            yield "\" 
                               class=\"btn btn-sm btn-outline-warning flex-fill\">
                                <i class=\"fas fa-tags\"></i> Promos
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 379
        if (!$context['_iterated']) {
            // line 380
            yield "            <div class=\"col-12\">
                <div class=\"card border-0 shadow-sm\">
                    <div class=\"card-body text-center py-5\">
                        <i class=\"fas fa-folder-open fa-4x text-muted mb-3\"></i>
                        <h4 class=\"text-muted fw-light\">Aucune catégorie trouvée</h4>
                        <p class=\"text-muted mb-4\">Modifiez vos filtres ou créez une nouvelle catégorie.</p>
                        <a href=\"";
            // line 386
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_new");
            yield "\" class=\"btn btn-primary px-4\">
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
        // line 393
        yield "    </div>

    <!-- Pagination -->
    ";
        // line 396
        if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 396, $this->source); })()) > 1)) {
            // line 397
            yield "    <nav aria-label=\"Pagination\" class=\"mt-4\">
        <ul class=\"pagination justify-content-center\">
            ";
            // line 399
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 399, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 400
                yield "                <li class=\"page-item ";
                yield ((($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 400, $this->source); })()))) ? ("active") : (""));
                yield "\">
                    <a class=\"page-link\" href=\"";
                // line 401
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 401, $this->source); })()), "request", [], "any", false, false, false, 401), "query", [], "any", false, false, false, 401), "all", [], "any", false, false, false, 401), ["page" => $context["page"]])), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                yield "</a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 404
            yield "        </ul>
    </nav>
    ";
        }
        // line 407
        yield "</div>

<!-- Modals (inchangés) -->
<!-- Modal de suppression, modal quota atteint, modal toggle -->
<!-- (contenu identique) -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 414
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

        // line 415
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
// Le script JavaScript reste identique
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 421
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

        // line 422
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
/* Styles inchangés */
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
        return array (  850 => 422,  837 => 421,  821 => 415,  808 => 414,  792 => 407,  787 => 404,  776 => 401,  771 => 400,  767 => 399,  763 => 397,  761 => 396,  756 => 393,  743 => 386,  735 => 380,  733 => 379,  720 => 371,  713 => 367,  704 => 361,  696 => 356,  687 => 350,  679 => 344,  672 => 340,  668 => 339,  664 => 338,  660 => 337,  656 => 336,  653 => 335,  651 => 334,  646 => 331,  640 => 327,  634 => 324,  630 => 323,  626 => 322,  622 => 321,  618 => 320,  614 => 319,  610 => 317,  608 => 316,  600 => 311,  592 => 306,  583 => 299,  577 => 297,  575 => 296,  571 => 295,  567 => 294,  559 => 288,  555 => 286,  552 => 285,  548 => 283,  544 => 281,  542 => 280,  539 => 279,  537 => 278,  531 => 274,  525 => 270,  519 => 267,  514 => 266,  512 => 265,  507 => 263,  504 => 262,  499 => 261,  494 => 258,  487 => 254,  483 => 252,  480 => 251,  466 => 239,  461 => 236,  452 => 233,  445 => 232,  441 => 231,  431 => 224,  427 => 223,  423 => 222,  414 => 216,  410 => 215,  406 => 214,  397 => 208,  393 => 207,  389 => 206,  379 => 199,  353 => 176,  339 => 165,  325 => 154,  309 => 141,  295 => 130,  281 => 119,  267 => 108,  252 => 95,  242 => 91,  239 => 90,  234 => 89,  224 => 85,  221 => 84,  216 => 83,  213 => 81,  203 => 74,  197 => 71,  191 => 67,  188 => 66,  179 => 58,  170 => 52,  159 => 43,  156 => 42,  150 => 37,  146 => 35,  144 => 34,  141 => 33,  137 => 31,  135 => 30,  129 => 29,  125 => 28,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/category/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Catégories de produits - HMA Market{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap\">
        <div>
            <h1 class=\"h3 mb-1 text-gray-800 fw-bold\">
                <i class=\"fas fa-tags me-2\"></i>Catégories de produits
            </h1>
            <p class=\"text-muted\">Organisez vos produits par catégories</p>
        </div>

        <div class=\"d-flex align-items-center gap-3\">
            <!-- Indicateur de quota -->
            <div class=\"card bg-light p-3\">
                <div class=\"d-flex align-items-center\">
                    <div class=\"me-3\">
                        <span class=\"badge bg-primary p-2\">
                            <i class=\"fas fa-chart-line\"></i>
                        </span>
                    </div>
                    <div>
                        <small class=\"text-muted\">Catégories dans quota</small>
                        <h5 class=\"mb-0 {{ quotaReached ? 'text-danger' : 'text-success' }}\">
                            {{ activeCount }} / {{ quota }}
                            {% if quota == 'Illimité' %}
                                <i class=\"fas fa-infinity text-info ms-1\"></i>
                            {% endif %}
                        </h5>
                        {% if quotaReached %}
                            <small class=\"text-danger\">Quota atteint</small>
                        {% endif %}
                    </div>
                </div>
            </div>

            {# Affichage du nombre de catégories en attente (hors quota) #}
            {% if subscriptionInactiveCount > 0 %}
            <div class=\"card bg-light p-3\">
                <div class=\"d-flex align-items-center\">
                    <div class=\"me-3\">
                        <span class=\"badge bg-warning p-2\">
                            <i class=\"fas fa-clock\"></i>
                        </span>
                    </div>
                    <div>
                        <small class=\"text-muted\">En attente (hors quota)</small>
                        <h5 class=\"mb-0\">{{ subscriptionInactiveCount }}</h5>
                        <small>désactivées par abonnement</small>
                    </div>
                </div>
            </div>
            {% endif %}

            <a href=\"#\" id=\"newCategoryBtn\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus-circle me-2\"></i> Nouvelle Catégorie
            </a>
        </div>
    </div>

    {# Message si quota atteint (pour les plans limités) #}
    {% if quotaReached and plan != 'premium' %}
    <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
        <div class=\"d-flex justify-content-between align-items-center\">
            <div>
                <i class=\"fas fa-exclamation-triangle me-2\"></i>
                <strong>Quota atteint !</strong> Vous avez utilisé vos {{ quota }} catégories dans le quota.
                Les catégories supplémentaires sont désactivées et ne sont pas visibles dans le catalogue.
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
        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
            <i class=\"fas fa-check-circle me-2\"></i> {{ message }}
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    {% endfor %}
    {% for message in app.flashes('error') %}
        <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
            <i class=\"fas fa-exclamation-circle me-2\"></i> {{ message }}
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    {% endfor %}

    <!-- Statistiques filtrées (affichage des compteurs selon les filtres) -->
    <div class=\"card shadow mb-4\">
        <div class=\"card-header bg-white py-3\">
            <h5 class=\"mb-0\"><i class=\"fas fa-chart-pie me-2\"></i>Statistiques selon les filtres</h5>
        </div>
        <div class=\"card-body\">
            <div class=\"row\">
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
                                <span class=\"text-success text-uppercase small fw-bold\">Actives (manuel)</span>
                                <h3 class=\"mb-0\">{{ activeFiltered }}</h3>
                            </div>
                            <i class=\"fas fa-check-circle fa-2x text-success opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-info text-uppercase small fw-bold\">Principales</span>
                                <h3 class=\"mb-0\">{{ mainFiltered }}</h3>
                            </div>
                            <i class=\"fas fa-sitemap fa-2x text-info opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-warning text-uppercase small fw-bold\">Sous-catégories</span>
                                <h3 class=\"mb-0\">{{ subFiltered }}</h3>
                            </div>
                            <i class=\"fas fa-folder-tree fa-2x text-warning opacity-50\"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-4 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-danger text-uppercase small fw-bold\">Inactives (manuel)</span>
                                <h3 class=\"mb-0\">{{ inactiveFiltered }}</h3>
                            </div>
                            <i class=\"fas fa-pause-circle fa-2x text-danger opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-info text-uppercase small fw-bold\">Dans quota</span>
                                <h3 class=\"mb-0\">{{ subscriptionActiveFiltered }}</h3>
                            </div>
                            <i class=\"fas fa-check-circle fa-2x text-info opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-secondary text-uppercase small fw-bold\">Hors quota</span>
                                <h3 class=\"mb-0\">{{ subscriptionInactiveFiltered }}</h3>
                            </div>
                            <i class=\"fas fa-clock fa-2x text-secondary opacity-50\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filtres -->
    <div class=\"card shadow mb-4\">
        <div class=\"card-header bg-white py-3\">
            <h5 class=\"mb-0\"><i class=\"fas fa-filter me-2\"></i>Filtres</h5>
        </div>
        <div class=\"card-body\">
            <form method=\"get\" class=\"row g-3\">
                <div class=\"col-lg-3 col-md-6\">
                    <label for=\"search\" class=\"form-label fw-bold\">Rechercher</label>
                    <div class=\"input-group\">
                        <span class=\"input-group-text bg-white border-end-0\">
                            <i class=\"fas fa-search text-muted\"></i>
                        </span>
                        <input type=\"text\" name=\"search\" id=\"search\" value=\"{{ search }}\" 
                               class=\"form-control border-start-0\" placeholder=\"Nom, description...\">
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-6\">
                    <label for=\"status\" class=\"form-label fw-bold\">Statut (manuel)</label>
                    <select name=\"status\" id=\"status\" class=\"form-select\">
                        <option value=\"all\" {{ status == 'all' ? 'selected' }}>Tous</option>
                        <option value=\"active\" {{ status == 'active' ? 'selected' }}>Actives</option>
                        <option value=\"inactive\" {{ status == 'inactive' ? 'selected' }}>Inactives</option>
                    </select>
                </div>
                <div class=\"col-lg-2 col-md-6\">
                    <label for=\"type\" class=\"form-label fw-bold\">Type</label>
                    <select name=\"type\" id=\"type\" class=\"form-select\">
                        <option value=\"all\" {{ type == 'all' ? 'selected' }}>Toutes</option>
                        <option value=\"main\" {{ type == 'main' ? 'selected' }}>Principales</option>
                        <option value=\"sub\" {{ type == 'sub' ? 'selected' }}>Sous-catégories</option>
                    </select>
                </div>
                <div class=\"col-lg-2 col-md-6\">
                    <label for=\"sub_status\" class=\"form-label fw-bold\">Statut quota</label>
                    <select name=\"sub_status\" id=\"sub_status\" class=\"form-select\">
                        <option value=\"all\" {{ subStatus == 'all' ? 'selected' }}>Tous</option>
                        <option value=\"active\" {{ subStatus == 'active' ? 'selected' }}>Dans quota</option>
                        <option value=\"inactive\" {{ subStatus == 'inactive' ? 'selected' }}>Hors quota</option>
                    </select>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <label for=\"promotion\" class=\"form-label fw-bold\">Promotion</label>
                    <select name=\"promotion\" id=\"promotion\" class=\"form-select\">
                        <option value=\"\">Toutes les promotions</option>
                        {% for promotion in promotions %}
                            <option value=\"{{ promotion.id }}\" {{ selectedPromotion == promotion.id ? 'selected' : '' }}>
                                {{ promotion.name }}
                            </option>
                        {% endfor %}
                    </select>
                </div>
                <div class=\"col-12 d-flex justify-content-end gap-2 mt-4\">
                    <a href=\"{{ path('app_admin_category_index') }}\" class=\"btn btn-outline-secondary px-4\">
                        <i class=\"fas fa-undo me-1\"></i> Effacer
                    </a>
                    <button type=\"submit\" class=\"btn btn-primary px-5\">
                        <i class=\"fas fa-search me-2\"></i> Filtrer
                    </button>
                </div>
            </form>
        </div>
    </div>

    {# Message informatif quand on filtre par hors quota #}
    {% if subStatus == 'inactive' %}
        <div class=\"alert alert-info mb-4\">
            <i class=\"fas fa-info-circle me-2\"></i>
            <strong>{{ subscriptionInactiveFiltered }} catégorie(s)</strong> désactivées par abonnement (hors quota).
            Elles ne sont pas visibles dans le catalogue mais peuvent être réactivées en passant à un plan supérieur.
        </div>
    {% endif %}

    <!-- Grille de catégories -->
    <div class=\"row g-4\">
        {% for category in categories %}
            <div class=\"col-xl-3 col-lg-4 col-md-6\">
                <div class=\"card h-100 border-0 shadow-sm hover-card {{ not category.subscriptionActive ? 'border-warning' : '' }}\">
                    <div class=\"category-image-container position-relative\">
                        {% if category.image %}
                            <img src=\"{{ asset('uploads/categories/' ~ category.image) }}\" 
                                 alt=\"{{ category.name }}\"
                                 class=\"card-img-top category-image\">
                        {% else %}
                            <div class=\"category-image-placeholder\">
                                <i class=\"fas fa-folder fa-4x text-muted\"></i>
                            </div>
                        {% endif %}
                        
                        <!-- Badges de statut -->
                        <div class=\"position-absolute top-0 start-0 p-2\">
                            <div class=\"d-flex flex-column gap-1\">
                                {% if not category.subscriptionActive %}
                                    <span class=\"badge bg-warning\"><i class=\"fas fa-clock me-1\"></i> Hors quota</span>
                                {% elseif category.isActive %}
                                    <span class=\"badge bg-success\"><i class=\"fas fa-check-circle me-1\"></i> Active</span>
                                {% else %}
                                    <span class=\"badge bg-danger\"><i class=\"fas fa-pause-circle me-1\"></i> Désactivée</span>
                                {% endif %}
                                {% if category.subscriptionActive %}
                                    <span class=\"badge bg-info\"><i class=\"fas fa-database me-1\"></i> Dans quota</span>
                                {% endif %}
                            </div>
                        </div>
                    </div>

                    <div class=\"card-body d-flex flex-column\">
                        <div class=\"d-flex justify-content-between align-items-center mb-2\">
                            <h5 class=\"card-title text-truncate mb-0\" title=\"{{ category.name }}\">
                                {{ category.name }}
                                {% if category.parent %}
                                    <br><small class=\"text-muted\"><i class=\"fas fa-level-up-alt me-1\"></i>{{ category.parent.name }}</small>
                                {% endif %}
                            </h5>
                            <div class=\"dropdown\">
                                <button class=\"btn btn-sm btn-light\" type=\"button\" data-bs-toggle=\"dropdown\">
                                    <i class=\"fas fa-bars\"></i>
                                </button>
                                <ul class=\"dropdown-menu dropdown-menu-end\">
                                    <li>
                                        <a class=\"dropdown-item\" href=\"{{ path('app_admin_category_show', {'id': category.id}) }}\">
                                            <i class=\"fas fa-eye me-2\"></i> Voir
                                        </a>
                                    </li>
                                    <li>
                                        <a class=\"dropdown-item\" href=\"{{ path('app_admin_category_edit', {'id': category.id}) }}\">
                                            <i class=\"fas fa-edit me-2\"></i> Modifier
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
                                                <i class=\"fas {{ category.isActive ? 'fa-toggle-on' : 'fa-toggle-off' }} me-2\"></i>
                                                {{ category.isActive ? 'Désactiver' : 'Activer' }}
                                            </button>
                                        {% else %}
                                            <span class=\"dropdown-item text-muted disabled\">
                                                <i class=\"fas fa-ban me-2\"></i> Non disponible (hors quota)
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

                        <p class=\"card-text text-muted small mb-3\">
                            {{ category.description|default('Aucune description')|u.truncate(80, '...') }}
                        </p>
                        
                        <div class=\"d-flex justify-content-between align-items-center mb-3\">
                            <div class=\"text-center px-2 py-1 bg-light rounded\" style=\"min-width: 45%;\">
                                <i class=\"fas fa-box text-primary me-1\"></i>
                                <span class=\"fw-bold\">{{ category.productCount ?? category.products|length }}</span>
                                <small class=\"text-muted d-block\">produits</small>
                            </div>
                            <div class=\"text-center px-2 py-1 bg-light rounded\" style=\"min-width: 45%;\">
                                <i class=\"fas fa-sitemap text-info me-1\"></i>
                                <span class=\"fw-bold\">{{ category.childrenCount ?? category.children|length }}</span>
                                <small class=\"text-muted d-block\">sous-catégories</small>
                            </div>
                        </div>

                        <div class=\"d-flex gap-2 mt-auto\">
                            <a href=\"{{ path('app_admin_category_products', {'id': category.id}) }}\" 
                               class=\"btn btn-sm btn-outline-info flex-fill\">
                                <i class=\"fas fa-list\"></i> Produits
                            </a>
                            <a href=\"{{ path('app_admin_category_promotions', {'id': category.id}) }}\" 
                               class=\"btn btn-sm btn-outline-warning flex-fill\">
                                <i class=\"fas fa-tags\"></i> Promos
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"col-12\">
                <div class=\"card border-0 shadow-sm\">
                    <div class=\"card-body text-center py-5\">
                        <i class=\"fas fa-folder-open fa-4x text-muted mb-3\"></i>
                        <h4 class=\"text-muted fw-light\">Aucune catégorie trouvée</h4>
                        <p class=\"text-muted mb-4\">Modifiez vos filtres ou créez une nouvelle catégorie.</p>
                        <a href=\"{{ path('app_admin_category_new') }}\" class=\"btn btn-primary px-4\">
                            <i class=\"fas fa-plus me-2\"></i> Nouvelle catégorie
                        </a>
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>

    <!-- Pagination -->
    {% if totalPages > 1 %}
    <nav aria-label=\"Pagination\" class=\"mt-4\">
        <ul class=\"pagination justify-content-center\">
            {% for page in 1..totalPages %}
                <li class=\"page-item {{ page == currentPage ? 'active' : '' }}\">
                    <a class=\"page-link\" href=\"{{ path('app_admin_category_index', app.request.query.all|merge({'page': page})) }}\">{{ page }}</a>
                </li>
            {% endfor %}
        </ul>
    </nav>
    {% endif %}
</div>

<!-- Modals (inchangés) -->
<!-- Modal de suppression, modal quota atteint, modal toggle -->
<!-- (contenu identique) -->
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
// Le script JavaScript reste identique
</script>
{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
/* Styles inchangés */
</style>
{% endblock %}", "admin/category/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\category\\index.html.twig");
    }
}
