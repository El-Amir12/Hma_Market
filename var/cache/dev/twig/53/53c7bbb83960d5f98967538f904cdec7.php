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
class __TwigTemplate_a4f0ab18a991b0e034f2b340e2b5bb86 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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

        yield "Gestion des Plats - HMA Market";
        
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
    <!-- En-tête avec quota et bouton d'ajout -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <h1 class=\"h3 mb-0 text-gray-800 fw-bold\">
                <i class=\"fas fa-utensils me-2\"></i>Gestion des Plats
            </h1>
            <p class=\"text-muted mt-1\">Gérez votre menu et les recettes</p>
        </div>
        
        <div class=\"d-flex align-items-center gap-3 flex-wrap\">
            <!-- Indicateur de quota -->
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
        // line 28
        yield (((($tmp = (isset($context["quotaReached"]) || array_key_exists("quotaReached", $context) ? $context["quotaReached"] : (function () { throw new RuntimeError('Variable "quotaReached" does not exist.', 28, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-danger") : ("text-success"));
        yield " fw-bold\">
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
            yield "                                <i class=\"fas fa-infinity text-info ms-1 small\"></i>
                            ";
        }
        // line 33
        yield "                        </h6>
                    </div>
                </div>
            </div>

            ";
        // line 39
        yield "            ";
        if (((isset($context["subscriptionInactiveFiltered"]) || array_key_exists("subscriptionInactiveFiltered", $context) ? $context["subscriptionInactiveFiltered"] : (function () { throw new RuntimeError('Variable "subscriptionInactiveFiltered" does not exist.', 39, $this->source); })()) > 0)) {
            // line 40
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
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subscriptionInactiveFiltered"]) || array_key_exists("subscriptionInactiveFiltered", $context) ? $context["subscriptionInactiveFiltered"] : (function () { throw new RuntimeError('Variable "subscriptionInactiveFiltered" does not exist.', 49, $this->source); })()), "html", null, true);
            yield "</h6>
                    </div>
                </div>
            </div>
            ";
        }
        // line 54
        yield "
            <a href=\"#\" id=\"newRecipeBtn\" class=\"btn btn-primary shadow-sm\">
                <i class=\"fas fa-plus-circle me-2\"></i> Nouveau Plat
            </a>
        </div>
    </div>

    ";
        // line 62
        yield "    ";
        if ((($tmp = (isset($context["quotaReached"]) || array_key_exists("quotaReached", $context) ? $context["quotaReached"] : (function () { throw new RuntimeError('Variable "quotaReached" does not exist.', 62, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 63
            yield "    <div class=\"alert alert-warning alert-dismissible fade show shadow-sm\" role=\"alert\">
        <div class=\"d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <div>
                <i class=\"fas fa-exclamation-triangle me-2\"></i>
                <strong>Quota atteint !</strong> Vous avez utilisé vos ";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["quota"]) || array_key_exists("quota", $context) ? $context["quota"] : (function () { throw new RuntimeError('Variable "quota" does not exist.', 67, $this->source); })()), "html", null, true);
            yield " plats actifs.
            </div>
            <a href=\"";
            // line 69
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subscription_plans");
            yield "\" class=\"btn btn-warning btn-sm\">
                <i class=\"fas fa-arrow-up me-1\"></i> Voir les offres
            </a>
        </div>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    </div>
    ";
        }
        // line 76
        yield "
    ";
        // line 78
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "flashes", ["success"], "method", false, false, false, 78));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 79
            yield "        <div class=\"alert alert-success alert-dismissible fade show shadow-sm\" role=\"alert\">
            <i class=\"fas fa-check-circle me-2\"></i> ";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        yield "    
    ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "flashes", ["error"], "method", false, false, false, 85));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 86
            yield "        <div class=\"alert alert-danger alert-dismissible fade show shadow-sm\" role=\"alert\">
            <i class=\"fas fa-exclamation-circle me-2\"></i> ";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
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
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalFiltered"]) || array_key_exists("totalFiltered", $context) ? $context["totalFiltered"] : (function () { throw new RuntimeError('Variable "totalFiltered" does not exist.', 106, $this->source); })()), "html", null, true);
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
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activeFiltered"]) || array_key_exists("activeFiltered", $context) ? $context["activeFiltered"] : (function () { throw new RuntimeError('Variable "activeFiltered" does not exist.', 119, $this->source); })()), "html", null, true);
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
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["inactiveFiltered"]) || array_key_exists("inactiveFiltered", $context) ? $context["inactiveFiltered"] : (function () { throw new RuntimeError('Variable "inactiveFiltered" does not exist.', 132, $this->source); })()), "html", null, true);
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
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subscriptionActiveFiltered"]) || array_key_exists("subscriptionActiveFiltered", $context) ? $context["subscriptionActiveFiltered"] : (function () { throw new RuntimeError('Variable "subscriptionActiveFiltered" does not exist.', 145, $this->source); })()), "html", null, true);
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
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subscriptionInactiveFiltered"]) || array_key_exists("subscriptionInactiveFiltered", $context) ? $context["subscriptionInactiveFiltered"] : (function () { throw new RuntimeError('Variable "subscriptionInactiveFiltered" does not exist.', 158, $this->source); })()), "html", null, true);
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
        <div class=\"card-header bg-white py-3\">
            <h5 class=\"mb-0 fw-semibold\">
                <i class=\"fas fa-filter text-primary me-2\"></i>Filtres
            </h5>
        </div>
        <div class=\"card-body\">
            <form method=\"get\" id=\"filter-form\" class=\"row g-3\">
                <div class=\"col-lg-4 col-md-6\">
                    <label for=\"search\" class=\"form-label fw-semibold\">
                        <i class=\"fas fa-search text-primary me-1\"></i>Rechercher
                    </label>
                    <div class=\"input-group\">
                        <span class=\"input-group-text bg-light border-0\">
                            <i class=\"fas fa-search text-muted\"></i>
                        </span>
                        <input type=\"text\" name=\"search\" id=\"search\" value=\"";
        // line 187
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 187, $this->source); })()), "html", null, true);
        yield "\" 
                               class=\"form-control bg-light border-0\" placeholder=\"Nom du plat...\">
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <label for=\"category\" class=\"form-label fw-semibold\">
                        <i class=\"fas fa-tags text-info me-1\"></i>Catégorie
                    </label>
                    <select name=\"category\" id=\"category\" class=\"form-select bg-light border-0\">
                        <option value=\"0\">Toutes</option>
                        ";
        // line 197
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 197, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 198
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 198), "html", null, true);
            yield "\" ";
            yield ((((isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 198, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 198))) ? ("selected") : (""));
            yield ">
                                ";
            // line 199
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, CoreExtension::getAttribute($this->env, $this->source, $context["category"], "level", [], "any", false, false, false, 199)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                yield "&nbsp;&nbsp;";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 200
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 200), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "recipeCount", [], "any", false, false, false, 200), "html", null, true);
            yield ")
                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 203
        yield "                    </select>
                </div>
                <div class=\"col-lg-2 col-md-4\">
                    <label for=\"status\" class=\"form-label fw-semibold\">
                        <i class=\"fas fa-toggle-on text-success me-1\"></i>Statut
                    </label>
                    <select name=\"status\" id=\"status\" class=\"form-select bg-light border-0\">
                        <option value=\"\">Tous</option>
                        <option value=\"active\" ";
        // line 211
        yield ((((isset($context["selectedStatus"]) || array_key_exists("selectedStatus", $context) ? $context["selectedStatus"] : (function () { throw new RuntimeError('Variable "selectedStatus" does not exist.', 211, $this->source); })()) == "active")) ? ("selected") : (""));
        yield ">Actifs</option>
                        <option value=\"inactive\" ";
        // line 212
        yield ((((isset($context["selectedStatus"]) || array_key_exists("selectedStatus", $context) ? $context["selectedStatus"] : (function () { throw new RuntimeError('Variable "selectedStatus" does not exist.', 212, $this->source); })()) == "inactive")) ? ("selected") : (""));
        yield ">Inactifs</option>
                    </select>
                </div>
                <div class=\"col-lg-2 col-md-4\">
                    <label for=\"subscription_status\" class=\"form-label fw-semibold\">
                        <i class=\"fas fa-credit-card text-warning me-1\"></i>Abonnement
                    </label>
                    <select name=\"subscription_status\" id=\"subscription_status\" class=\"form-select bg-light border-0\">
                        <option value=\"\">Tous</option>
                        <option value=\"active\" ";
        // line 221
        yield ((((isset($context["selectedSubscriptionStatus"]) || array_key_exists("selectedSubscriptionStatus", $context) ? $context["selectedSubscriptionStatus"] : (function () { throw new RuntimeError('Variable "selectedSubscriptionStatus" does not exist.', 221, $this->source); })()) == "active")) ? ("selected") : (""));
        yield ">Actif</option>
                        <option value=\"inactive\" ";
        // line 222
        yield ((((isset($context["selectedSubscriptionStatus"]) || array_key_exists("selectedSubscriptionStatus", $context) ? $context["selectedSubscriptionStatus"] : (function () { throw new RuntimeError('Variable "selectedSubscriptionStatus" does not exist.', 222, $this->source); })()) == "inactive")) ? ("selected") : (""));
        yield ">Inactif</option>
                    </select>
                </div>
                <div class=\"col-lg-1 d-flex align-items-end gap-2\">
                    <button type=\"submit\" class=\"btn btn-primary w-100 py-2\">
                        <i class=\"fas fa-search\"></i>
                    </button>
                    <a href=\"";
        // line 229
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_index");
        yield "\" class=\"btn btn-outline-secondary py-2\" title=\"Effacer\">
                        <i class=\"fas fa-undo\"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>

    <!-- Grille de plats -->
    <div class=\"row g-4\">
        ";
        // line 239
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recipes"]) || array_key_exists("recipes", $context) ? $context["recipes"] : (function () { throw new RuntimeError('Variable "recipes" does not exist.', 239, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["recipe"]) {
            // line 240
            yield "        <div class=\"col-xl-3 col-lg-4 col-md-6\">
            <div class=\"card h-100 border-0 shadow-sm hover-card\">
                <div class=\"recipe-image-container position-relative\">
                    ";
            // line 243
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "image", [], "any", false, false, false, 243)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 244
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images_plats/" . CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "image", [], "any", false, false, false, 244))), "html", null, true);
                yield "\" 
                             alt=\"";
                // line 245
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "name", [], "any", false, false, false, 245), "html", null, true);
                yield "\" 
                             class=\"card-img-top recipe-image\">
                    ";
            } else {
                // line 248
                yield "                        <div class=\"recipe-image-placeholder\">
                            <i class=\"fas fa-utensils fa-4x text-muted\"></i>
                        </div>
                    ";
            }
            // line 252
            yield "
                    <!-- Badges de statut superposés (en haut à gauche) -->
                    <div class=\"position-absolute top-0 start-0 p-2\">
                        <div class=\"d-flex flex-column gap-1\">
                            ";
            // line 256
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "isActive", [], "any", false, false, false, 256)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 257
                yield "                                <span class=\"badge bg-success\"><i class=\"fas fa-check-circle me-1\"></i> Actif</span>
                            ";
            } else {
                // line 259
                yield "                                <span class=\"badge bg-danger\"><i class=\"fas fa-pause-circle me-1\"></i> Inactif</span>
                            ";
            }
            // line 261
            yield "                            ";
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "subscriptionActive", [], "any", false, false, false, 261)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 262
                yield "                                <span class=\"badge bg-warning text-dark\"><i class=\"fas fa-clock me-1\"></i> Hors quota</span>
                            ";
            }
            // line 264
            yield "                        </div>
                    </div>
                </div>
                <div class=\"card-body d-flex flex-column\">
                    <!-- Titre avec bouton burger à droite -->
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h5 class=\"card-title fw-bold text-truncate mb-1\">";
            // line 271
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "name", [], "any", false, false, false, 271), "html", null, true);
            yield "</h5>
                            <p class=\"text-muted small mb-2\">
                                <i class=\"fas fa-tag me-1\"></i>";
            // line 273
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "category", [], "any", false, false, false, 273)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "category", [], "any", false, false, false, 273), "name", [], "any", false, false, false, 273), "html", null, true)) : ("Non catégorisé"));
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
            // line 282
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 282)]), "html", null, true);
            yield "\">
                                        <i class=\"fas fa-eye me-2\"></i> Voir
                                    </a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item\" href=\"";
            // line 287
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 287)]), "html", null, true);
            yield "\">
                                        <i class=\"fas fa-edit me-2\"></i> Modifier
                                    </a>
                                </li>
                                <li>
                                    ";
            // line 292
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "subscriptionActive", [], "any", false, false, false, 292)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 293
                yield "                                        <button type=\"button\" 
                                                class=\"dropdown-item toggle-recipe-btn\"
                                                data-recipe-id=\"";
                // line 295
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 295), "html", null, true);
                yield "\"
                                                data-recipe-name=\"";
                // line 296
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "name", [], "any", false, false, false, 296), "html", null, true);
                yield "\"
                                                data-current-status=\"";
                // line 297
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "isActive", [], "any", false, false, false, 297)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : ("inactive"));
                yield "\"
                                                data-token=\"";
                // line 298
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle-status" . CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 298))), "html", null, true);
                yield "\">
                                            <i class=\"fas ";
                // line 299
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "isActive", [], "any", false, false, false, 299)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-toggle-on") : ("fa-toggle-off"));
                yield " me-2\"></i>
                                            ";
                // line 300
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "isActive", [], "any", false, false, false, 300)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
                yield "
                                        </button>
                                    ";
            } else {
                // line 303
                yield "                                        <span class=\"dropdown-item text-muted disabled\">
                                            <i class=\"fas fa-ban me-2\"></i> Non disponible
                                        </span>
                                    ";
            }
            // line 307
            yield "                                </li>
                                <li><hr class=\"dropdown-divider\"></li>
                                ";
            // line 310
            yield "                            </ul>
                        </div>
                    </div>

                    <div class=\"d-flex justify-content-between align-items-center mb-3\">
                        <span class=\"fw-bold text-success\">";
            // line 315
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "sellingPrice", [], "any", false, false, false, 315), CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "hmaService", [], "any", false, false, false, 315)), "html", null, true);
            yield "</span>
                        <span class=\"badge bg-info\">";
            // line 316
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "recipeItems", [], "any", false, false, false, 316)), "html", null, true);
            yield " ingrédients</span>
                    </div>

                    <!-- Boutons secondaires alignés sur une ligne (avec bouton supprimer en dernier) -->
                    <div class=\"d-flex gap-1 mt-auto\">
                        <a href=\"#\" class=\"btn btn-sm btn-outline-info flex-fill\" title=\"Ingrédients\">
                            <i class=\"fas fa-list\"></i> 
                        </a>
                        <a href=\"#\" class=\"btn btn-sm btn-outline-primary flex-fill\" title=\"Mouvements stock\">
                            <i class=\"fas fa-exchange-alt\"></i> 
                        </a>
                        <a href=\"#\" class=\"btn btn-sm btn-outline-success flex-fill\" title=\"Commandes liées\">
                            <i class=\"fas fa-shopping-cart\"></i>
                        </a>
                        <a href=\"#\" class=\"btn btn-sm btn-outline-warning flex-fill\" title=\"Promotions\">
                            <i class=\"fas fa-tags\"></i> 
                        </a>
                        ";
            // line 334
            yield "                        ";
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "orderItems", [], "any", false, false, false, 334)) == 0))) {
                // line 335
                yield "                            <button type=\"button\" 
                                    class=\"btn btn-sm btn-outline-danger flex-fill delete-recipe-btn\"
                                    data-recipe-id=\"";
                // line 337
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 337), "html", null, true);
                yield "\"
                                    data-recipe-name=\"";
                // line 338
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "name", [], "any", false, false, false, 338), "html", null, true);
                yield "\"
                                    data-token=\"";
                // line 339
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 339))), "html", null, true);
                yield "\"
                                    title=\"Supprimer\">
                                <i class=\"fas fa-trash\"></i>
                            </button>
                        ";
            }
            // line 344
            yield "                    </div>
                </div>
            </div>
        </div>
        ";
            $context['_iterated'] = true;
        }
        // line 348
        if (!$context['_iterated']) {
            // line 349
            yield "        <div class=\"col-12\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-body text-center py-5\">
                    <i class=\"fas fa-utensils fa-4x text-muted mb-3\"></i>
                    <h4 class=\"text-muted fw-light\">Aucun plat trouvé</h4>
                    <p class=\"text-muted mb-4\">Modifiez vos filtres ou créez un nouveau plat.</p>
                    <a href=\"";
            // line 355
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
        // line 362
        yield "    </div>

    <!-- Pagination -->
    ";
        // line 365
        if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 365, $this->source); })()) > 1)) {
            // line 366
            yield "    <div class=\"d-flex justify-content-between align-items-center mt-4\">
        <div class=\"text-muted small\">
            Page ";
            // line 368
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 368, $this->source); })()), "html", null, true);
            yield " sur ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 368, $this->source); })()), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 368, $this->source); })()), "html", null, true);
            yield " résultats)
        </div>
        <nav aria-label=\"Pagination\">
            <ul class=\"pagination pagination-sm mb-0\">
                <li class=\"page-item ";
            // line 372
            yield ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 372, $this->source); })()) <= 1)) ? ("disabled") : (""));
            yield "\">
                    <a class=\"page-link\" href=\"";
            // line 373
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 373, $this->source); })()), "request", [], "any", false, false, false, 373), "query", [], "any", false, false, false, 373), "all", [], "any", false, false, false, 373), ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 373, $this->source); })()) - 1)])), "html", null, true);
            yield "\"><i class=\"fas fa-chevron-left\"></i></a>
                </li>
                ";
            // line 375
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 375, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 376
                yield "                    <li class=\"page-item ";
                yield ((($context["i"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 376, $this->source); })()))) ? ("active") : (""));
                yield "\">
                        <a class=\"page-link\" href=\"";
                // line 377
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 377, $this->source); })()), "request", [], "any", false, false, false, 377), "query", [], "any", false, false, false, 377), "all", [], "any", false, false, false, 377), ["page" => $context["i"]])), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "</a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 380
            yield "                <li class=\"page-item ";
            yield ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 380, $this->source); })()) >= (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 380, $this->source); })()))) ? ("disabled") : (""));
            yield "\">
                    <a class=\"page-link\" href=\"";
            // line 381
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 381, $this->source); })()), "request", [], "any", false, false, false, 381), "query", [], "any", false, false, false, 381), "all", [], "any", false, false, false, 381), ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 381, $this->source); })()) + 1)])), "html", null, true);
            yield "\"><i class=\"fas fa-chevron-right\"></i></a>
                </li>
            </ul>
        </nav>
    </div>
    ";
        }
        // line 387
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
        // line 399
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["quota"]) || array_key_exists("quota", $context) ? $context["quota"] : (function () { throw new RuntimeError('Variable "quota" does not exist.', 399, $this->source); })()), "html", null, true);
        yield " plats actifs.</h5>
                <p class=\"text-muted\">Pour ajouter de nouveaux plats, passez à un plan supérieur.</p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center\">
                <a href=\"";
        // line 403
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

    // line 457
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

        // line 458
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
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

    // line 516
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

        // line 517
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Nouveau plat
    const newBtn = document.getElementById('newRecipeBtn');
    if (newBtn) {
        newBtn.addEventListener('click', function(e) {
            e.preventDefault();
            ";
        // line 525
        if ((($tmp = (isset($context["quotaReached"]) || array_key_exists("quotaReached", $context) ? $context["quotaReached"] : (function () { throw new RuntimeError('Variable "quotaReached" does not exist.', 525, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 526
            yield "                new bootstrap.Modal(document.getElementById('quotaReachedModal')).show();
            ";
        } else {
            // line 528
            yield "                window.location.href = \"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_new");
            yield "\";
            ";
        }
        // line 530
        yield "        });
    }

    // Auto-submit filters
    document.getElementById('category')?.addEventListener('change', function() {
        document.getElementById('filter-form').submit();
    });
    document.getElementById('status')?.addEventListener('change', function() {
        document.getElementById('filter-form').submit();
    });
    document.getElementById('subscription_status')?.addEventListener('change', function() {
        document.getElementById('filter-form').submit();
    });

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
        return array (  943 => 530,  937 => 528,  933 => 526,  931 => 525,  920 => 517,  907 => 516,  839 => 458,  826 => 457,  762 => 403,  755 => 399,  741 => 387,  732 => 381,  727 => 380,  716 => 377,  711 => 376,  707 => 375,  702 => 373,  698 => 372,  687 => 368,  683 => 366,  681 => 365,  676 => 362,  663 => 355,  655 => 349,  653 => 348,  645 => 344,  637 => 339,  633 => 338,  629 => 337,  625 => 335,  622 => 334,  602 => 316,  598 => 315,  591 => 310,  587 => 307,  581 => 303,  575 => 300,  571 => 299,  567 => 298,  563 => 297,  559 => 296,  555 => 295,  551 => 293,  549 => 292,  541 => 287,  533 => 282,  521 => 273,  516 => 271,  507 => 264,  503 => 262,  500 => 261,  496 => 259,  492 => 257,  490 => 256,  484 => 252,  478 => 248,  472 => 245,  467 => 244,  465 => 243,  460 => 240,  455 => 239,  442 => 229,  432 => 222,  428 => 221,  416 => 212,  412 => 211,  402 => 203,  390 => 200,  381 => 199,  374 => 198,  370 => 197,  357 => 187,  325 => 158,  309 => 145,  293 => 132,  277 => 119,  261 => 106,  244 => 91,  234 => 87,  231 => 86,  227 => 85,  224 => 84,  214 => 80,  211 => 79,  206 => 78,  203 => 76,  193 => 69,  188 => 67,  182 => 63,  179 => 62,  170 => 54,  162 => 49,  151 => 40,  148 => 39,  141 => 33,  137 => 31,  135 => 30,  129 => 29,  125 => 28,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/recipe/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Gestion des Plats - HMA Market{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
    <!-- En-tête avec quota et bouton d'ajout -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <h1 class=\"h3 mb-0 text-gray-800 fw-bold\">
                <i class=\"fas fa-utensils me-2\"></i>Gestion des Plats
            </h1>
            <p class=\"text-muted mt-1\">Gérez votre menu et les recettes</p>
        </div>
        
        <div class=\"d-flex align-items-center gap-3 flex-wrap\">
            <!-- Indicateur de quota -->
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

            {# Affichage du nombre de plats en attente (désactivés par quota) #}
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
        <div class=\"card-header bg-white py-3\">
            <h5 class=\"mb-0 fw-semibold\">
                <i class=\"fas fa-filter text-primary me-2\"></i>Filtres
            </h5>
        </div>
        <div class=\"card-body\">
            <form method=\"get\" id=\"filter-form\" class=\"row g-3\">
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
                <div class=\"col-lg-3 col-md-6\">
                    <label for=\"category\" class=\"form-label fw-semibold\">
                        <i class=\"fas fa-tags text-info me-1\"></i>Catégorie
                    </label>
                    <select name=\"category\" id=\"category\" class=\"form-select bg-light border-0\">
                        <option value=\"0\">Toutes</option>
                        {% for category in categories %}
                            <option value=\"{{ category.id }}\" {{ selectedCategory == category.id ? 'selected' : '' }}>
                                {% for i in 0..category.level %}&nbsp;&nbsp;{% endfor %}
                                {{ category.name }} ({{ category.recipeCount }})
                            </option>
                        {% endfor %}
                    </select>
                </div>
                <div class=\"col-lg-2 col-md-4\">
                    <label for=\"status\" class=\"form-label fw-semibold\">
                        <i class=\"fas fa-toggle-on text-success me-1\"></i>Statut
                    </label>
                    <select name=\"status\" id=\"status\" class=\"form-select bg-light border-0\">
                        <option value=\"\">Tous</option>
                        <option value=\"active\" {{ selectedStatus == 'active' ? 'selected' : '' }}>Actifs</option>
                        <option value=\"inactive\" {{ selectedStatus == 'inactive' ? 'selected' : '' }}>Inactifs</option>
                    </select>
                </div>
                <div class=\"col-lg-2 col-md-4\">
                    <label for=\"subscription_status\" class=\"form-label fw-semibold\">
                        <i class=\"fas fa-credit-card text-warning me-1\"></i>Abonnement
                    </label>
                    <select name=\"subscription_status\" id=\"subscription_status\" class=\"form-select bg-light border-0\">
                        <option value=\"\">Tous</option>
                        <option value=\"active\" {{ selectedSubscriptionStatus == 'active' ? 'selected' : '' }}>Actif</option>
                        <option value=\"inactive\" {{ selectedSubscriptionStatus == 'inactive' ? 'selected' : '' }}>Inactif</option>
                    </select>
                </div>
                <div class=\"col-lg-1 d-flex align-items-end gap-2\">
                    <button type=\"submit\" class=\"btn btn-primary w-100 py-2\">
                        <i class=\"fas fa-search\"></i>
                    </button>
                    <a href=\"{{ path('app_admin_recipe_index') }}\" class=\"btn btn-outline-secondary py-2\" title=\"Effacer\">
                        <i class=\"fas fa-undo\"></i>
                    </a>
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

                    <!-- Badges de statut superposés (en haut à gauche) -->
                    <div class=\"position-absolute top-0 start-0 p-2\">
                        <div class=\"d-flex flex-column gap-1\">
                            {% if recipe.isActive %}
                                <span class=\"badge bg-success\"><i class=\"fas fa-check-circle me-1\"></i> Actif</span>
                            {% else %}
                                <span class=\"badge bg-danger\"><i class=\"fas fa-pause-circle me-1\"></i> Inactif</span>
                            {% endif %}
                            {% if not recipe.subscriptionActive %}
                                <span class=\"badge bg-warning text-dark\"><i class=\"fas fa-clock me-1\"></i> Hors quota</span>
                            {% endif %}
                        </div>
                    </div>
                </div>
                <div class=\"card-body d-flex flex-column\">
                    <!-- Titre avec bouton burger à droite -->
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
                                {# Supprimer retiré du menu burger #}
                            </ul>
                        </div>
                    </div>

                    <div class=\"d-flex justify-content-between align-items-center mb-3\">
                        <span class=\"fw-bold text-success\">{{ recipe.sellingPrice|price_with_currency(recipe.hmaService) }}</span>
                        <span class=\"badge bg-info\">{{ recipe.recipeItems|length }} ingrédients</span>
                    </div>

                    <!-- Boutons secondaires alignés sur une ligne (avec bouton supprimer en dernier) -->
                    <div class=\"d-flex gap-1 mt-auto\">
                        <a href=\"#\" class=\"btn btn-sm btn-outline-info flex-fill\" title=\"Ingrédients\">
                            <i class=\"fas fa-list\"></i> 
                        </a>
                        <a href=\"#\" class=\"btn btn-sm btn-outline-primary flex-fill\" title=\"Mouvements stock\">
                            <i class=\"fas fa-exchange-alt\"></i> 
                        </a>
                        <a href=\"#\" class=\"btn btn-sm btn-outline-success flex-fill\" title=\"Commandes liées\">
                            <i class=\"fas fa-shopping-cart\"></i>
                        </a>
                        <a href=\"#\" class=\"btn btn-sm btn-outline-warning flex-fill\" title=\"Promotions\">
                            <i class=\"fas fa-tags\"></i> 
                        </a>
                        {# Bouton Supprimer ajouté ici #}
                        {% if is_granted('ROLE_ADMIN') and recipe.orderItems|length == 0 %}
                            <button type=\"button\" 
                                    class=\"btn btn-sm btn-outline-danger flex-fill delete-recipe-btn\"
                                    data-recipe-id=\"{{ recipe.id }}\"
                                    data-recipe-name=\"{{ recipe.name }}\"
                                    data-token=\"{{ csrf_token('delete' ~ recipe.id) }}\"
                                    title=\"Supprimer\">
                                <i class=\"fas fa-trash\"></i>
                            </button>
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

{% block stylesheets %}
{{ parent() }}
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

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Nouveau plat
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

    // Auto-submit filters
    document.getElementById('category')?.addEventListener('change', function() {
        document.getElementById('filter-form').submit();
    });
    document.getElementById('status')?.addEventListener('change', function() {
        document.getElementById('filter-form').submit();
    });
    document.getElementById('subscription_status')?.addEventListener('change', function() {
        document.getElementById('filter-form').submit();
    });

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
