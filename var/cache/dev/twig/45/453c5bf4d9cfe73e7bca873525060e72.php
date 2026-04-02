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
class __TwigTemplate_6b5b7414b71a2bf47e1caaeca817d404 extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/category/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/category/index.html.twig"));

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

        yield "Gestion des Catégories - HMA Market";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<div class=\"container-fluid px-4\">
    <!-- En-tête avec quota et bouton d'ajout -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap\">
        <div>
            <h1 class=\"h3 mb-0 text-gray-800\">
                <i class=\"fas fa-list-alt me-2\"></i>Gestion des Catégories
            </h1>
            <p class=\"text-muted\">Organisez vos produits par catégories et sous-catégories</p>
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
        // line 27
        yield (((($tmp = (isset($context["quotaReached"]) || array_key_exists("quotaReached", $context) ? $context["quotaReached"] : (function () { throw new RuntimeError('Variable "quotaReached" does not exist.', 27, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-danger") : ("text-success"));
        yield "\">
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
            yield "                                <i class=\"fas fa-infinity text-info ms-1\"></i>
                            ";
        }
        // line 32
        yield "                        </h5>
                        ";
        // line 33
        if ((($tmp = (isset($context["quotaReached"]) || array_key_exists("quotaReached", $context) ? $context["quotaReached"] : (function () { throw new RuntimeError('Variable "quotaReached" does not exist.', 33, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 34
            yield "                            <small class=\"text-danger\">Quota atteint</small>
                        ";
        }
        // line 36
        yield "                    </div>
                </div>
            </div>

            ";
        // line 41
        yield "            ";
        if (((isset($context["subscriptionInactiveCount"]) || array_key_exists("subscriptionInactiveCount", $context) ? $context["subscriptionInactiveCount"] : (function () { throw new RuntimeError('Variable "subscriptionInactiveCount" does not exist.', 41, $this->source); })()) > 0)) {
            // line 42
            yield "            <div class=\"card bg-light p-3\">
                <div class=\"d-flex align-items-center\">
                    <div class=\"me-3\">
                        <span class=\"badge bg-warning p-2\">
                            <i class=\"fas fa-clock\"></i>
                        </span>
                    </div>
                    <div>
                        <small class=\"text-muted\">En attente</small>
                        <h5 class=\"mb-0\">";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subscriptionInactiveCount"]) || array_key_exists("subscriptionInactiveCount", $context) ? $context["subscriptionInactiveCount"] : (function () { throw new RuntimeError('Variable "subscriptionInactiveCount" does not exist.', 51, $this->source); })()), "html", null, true);
            yield "</h5>
                        <small>désactivées par quota</small>
                    </div>
                </div>
            </div>
            ";
        }
        // line 57
        yield "
            ";
        // line 59
        yield "            <a href=\"#\" id=\"newCategoryBtn\" class=\"btn btn-primary\">
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
            </div>
            ";
            // line 74
            yield "            <a href=\"";
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
        yield "    
    ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "flashes", ["error"], "method", false, false, false, 90));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 91
            yield "        <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
            <i class=\"fas fa-exclamation-circle me-2\"></i> ";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
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
                <!-- Première ligne -->
                <div class=\"col-md-3 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-primary text-uppercase small fw-bold\">Total</span>
                                <h3 class=\"mb-0\">";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalFiltered"]) || array_key_exists("totalFiltered", $context) ? $context["totalFiltered"] : (function () { throw new RuntimeError('Variable "totalFiltered" does not exist.', 112, $this->source); })()), "html", null, true);
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
                                <h3 class=\"mb-0\">";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activeFiltered"]) || array_key_exists("activeFiltered", $context) ? $context["activeFiltered"] : (function () { throw new RuntimeError('Variable "activeFiltered" does not exist.', 123, $this->source); })()), "html", null, true);
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
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["mainFiltered"]) || array_key_exists("mainFiltered", $context) ? $context["mainFiltered"] : (function () { throw new RuntimeError('Variable "mainFiltered" does not exist.', 134, $this->source); })()), "html", null, true);
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
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subFiltered"]) || array_key_exists("subFiltered", $context) ? $context["subFiltered"] : (function () { throw new RuntimeError('Variable "subFiltered" does not exist.', 145, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-folder-tree fa-2x text-warning opacity-50\"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <!-- Deuxième ligne -->
                <div class=\"col-md-4 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-danger text-uppercase small fw-bold\">Inactives</span>
                                <h3 class=\"mb-0\">";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["inactiveFiltered"]) || array_key_exists("inactiveFiltered", $context) ? $context["inactiveFiltered"] : (function () { throw new RuntimeError('Variable "inactiveFiltered" does not exist.', 159, $this->source); })()), "html", null, true);
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
                                <span class=\"text-info text-uppercase small fw-bold\">Abonnement actif</span>
                                <h3 class=\"mb-0\">";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subscriptionActiveFiltered"]) || array_key_exists("subscriptionActiveFiltered", $context) ? $context["subscriptionActiveFiltered"] : (function () { throw new RuntimeError('Variable "subscriptionActiveFiltered" does not exist.', 170, $this->source); })()), "html", null, true);
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
                                <span class=\"text-secondary text-uppercase small fw-bold\">Abonnement inactif</span>
                                <h3 class=\"mb-0\">";
        // line 181
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subscriptionInactiveFiltered"]) || array_key_exists("subscriptionInactiveFiltered", $context) ? $context["subscriptionInactiveFiltered"] : (function () { throw new RuntimeError('Variable "subscriptionInactiveFiltered" does not exist.', 181, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-clock fa-2x text-secondary opacity-50\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Formulaire de filtres -->
    <div class=\"card shadow mb-4\">
        <div class=\"card-body\">
            <form method=\"get\" class=\"row g-3 align-items-end\">
                <div class=\"col-md-3\">
                    <label for=\"search\" class=\"form-label fw-bold\">Rechercher</label>
                    <input type=\"text\" name=\"search\" id=\"search\" value=\"";
        // line 197
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 197, $this->source); })()), "html", null, true);
        yield "\" 
                           class=\"form-control\" placeholder=\"Nom, description...\">
                </div>
                <div class=\"col-md-2\">
                    <label for=\"status\" class=\"form-label fw-bold\">Statut</label>
                    <select name=\"status\" id=\"status\" class=\"form-select\">
                        <option value=\"all\" ";
        // line 203
        yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 203, $this->source); })()) == "all")) ? ("selected") : (""));
        yield ">Tous</option>
                        <option value=\"active\" ";
        // line 204
        yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 204, $this->source); })()) == "active")) ? ("selected") : (""));
        yield ">Actives</option>
                        <option value=\"inactive\" ";
        // line 205
        yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 205, $this->source); })()) == "inactive")) ? ("selected") : (""));
        yield ">Inactives</option>
                    </select>
                </div>
                <div class=\"col-md-2\">
                    <label for=\"type\" class=\"form-label fw-bold\">Type</label>
                    <select name=\"type\" id=\"type\" class=\"form-select\">
                        <option value=\"all\" ";
        // line 211
        yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 211, $this->source); })()) == "all")) ? ("selected") : (""));
        yield ">Tous</option>
                        <option value=\"main\" ";
        // line 212
        yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 212, $this->source); })()) == "main")) ? ("selected") : (""));
        yield ">Principales</option>
                        <option value=\"sub\" ";
        // line 213
        yield ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 213, $this->source); })()) == "sub")) ? ("selected") : (""));
        yield ">Sous-catégories</option>
                    </select>
                </div>
                <div class=\"col-md-2\">
                    <label for=\"sub_status\" class=\"form-label fw-bold\">Abonnement</label>
                    <select name=\"sub_status\" id=\"sub_status\" class=\"form-select\">
                        <option value=\"all\" ";
        // line 219
        yield ((((isset($context["subStatus"]) || array_key_exists("subStatus", $context) ? $context["subStatus"] : (function () { throw new RuntimeError('Variable "subStatus" does not exist.', 219, $this->source); })()) == "all")) ? ("selected") : (""));
        yield ">Tous</option>
                        <option value=\"active\" ";
        // line 220
        yield ((((isset($context["subStatus"]) || array_key_exists("subStatus", $context) ? $context["subStatus"] : (function () { throw new RuntimeError('Variable "subStatus" does not exist.', 220, $this->source); })()) == "active")) ? ("selected") : (""));
        yield ">Abonnement actif</option>
                        <option value=\"inactive\" ";
        // line 221
        yield ((((isset($context["subStatus"]) || array_key_exists("subStatus", $context) ? $context["subStatus"] : (function () { throw new RuntimeError('Variable "subStatus" does not exist.', 221, $this->source); })()) == "inactive")) ? ("selected") : (""));
        yield ">Abonnement inactif</option>
                    </select>
                </div>
                <div class=\"col-md-3 d-flex gap-2\">
                    <button type=\"submit\" class=\"btn btn-primary flex-grow-1\">
                        <i class=\"fas fa-search me-1\"></i> Filtrer
                    </button>
                    <a href=\"";
        // line 228
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_index");
        yield "\" class=\"btn btn-outline-secondary\">
                        <i class=\"fas fa-undo\"></i> Effacer
                    </a>
                </div>
            </form>
        </div>
    </div>

    ";
        // line 237
        yield "    ";
        if (((isset($context["subStatus"]) || array_key_exists("subStatus", $context) ? $context["subStatus"] : (function () { throw new RuntimeError('Variable "subStatus" does not exist.', 237, $this->source); })()) == "inactive")) {
            // line 238
            yield "        <div class=\"alert alert-info mb-4\">
            <i class=\"fas fa-info-circle me-2\"></i>
            <strong>";
            // line 240
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subscriptionInactiveFiltered"]) || array_key_exists("subscriptionInactiveFiltered", $context) ? $context["subscriptionInactiveFiltered"] : (function () { throw new RuntimeError('Variable "subscriptionInactiveFiltered" does not exist.', 240, $this->source); })()), "html", null, true);
            yield " catégorie(s)</strong> désactivées par abonnement.
        </div>
    ";
        }
        // line 243
        yield "
    <!-- Grille de cartes -->
    <div class=\"row\">
        ";
        // line 246
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 246, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 247
            yield "        <div class=\"col-xl-3 col-lg-4 col-md-6 mb-4\">
            <div class=\"card category-card shadow h-100 ";
            // line 248
            yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["category"], "subscriptionActive", [], "any", false, false, false, 248)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("border-warning") : (""));
            yield "\">
                <!-- Image -->
                <div class=\"category-image-container\">
                    ";
            // line 251
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 251)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 252
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/categories/" . CoreExtension::getAttribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 252))), "html", null, true);
                yield "\" 
                            alt=\"";
                // line 253
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 253), "html", null, true);
                yield "\"
                            class=\"card-img-top category-image\">
                    ";
            } else {
                // line 256
                yield "                        <div class=\"category-image-placeholder\">
                            <i class=\"fas fa-folder fa-4x text-muted\"></i>
                        </div>
                    ";
            }
            // line 260
            yield "                    
                    <!-- Badges de statut -->
                    <div class=\"category-status-badge\">
                        ";
            // line 263
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["category"], "subscriptionActive", [], "any", false, false, false, 263)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 264
                yield "                            <span class=\"badge bg-warning\"><i class=\"fas fa-clock me-1\"></i> En attente (quota)</span>
                        ";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 265
$context["category"], "isActive", [], "any", false, false, false, 265)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 266
                yield "                            <span class=\"badge bg-success\"><i class=\"fas fa-check-circle me-1\"></i> Active</span>
                        ";
            } else {
                // line 268
                yield "                            <span class=\"badge bg-danger\"><i class=\"fas fa-pause-circle me-1\"></i> Désactivée</span>
                        ";
            }
            // line 270
            yield "                        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "subscriptionActive", [], "any", false, false, false, 270)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 271
                yield "                            <span class=\"badge bg-info\"><i class=\"fas fa-database me-1\"></i> Dans quota</span>
                        ";
            }
            // line 273
            yield "                    </div>
                </div>

                <!-- Contenu -->
                <div class=\"card-body d-flex flex-column\">
                    <h5 class=\"card-title text-truncate\">
                        ";
            // line 279
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 279), "html", null, true);
            yield "
                        ";
            // line 280
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "parent", [], "any", false, false, false, 280)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 281
                yield "                            <small class=\"text-muted d-block\"><i class=\"fas fa-level-up-alt me-1\"></i>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["category"], "parent", [], "any", false, false, false, 281), "name", [], "any", false, false, false, 281), "html", null, true);
                yield "</small>
                        ";
            }
            // line 283
            yield "                    </h5>
                    
                    <p class=\"card-text text-muted small mb-3\">
                        ";
            // line 286
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "description", [], "any", true, true, false, 286)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 286), "Aucune description")) : ("Aucune description"))), "truncate", [80, "..."], "method", false, false, false, 286), "html", null, true);
            yield "
                    </p>
                    
                    <!-- Compteurs Produits & Sous-catégories (côte à côte) -->
                    <div class=\"d-flex justify-content-between align-items-center mb-3\">
                        <div class=\"text-center px-2 py-1 bg-light rounded\" style=\"min-width: 45%;\">
                            <i class=\"fas fa-box text-primary me-1\"></i>
                            <span class=\"fw-bold\">";
            // line 293
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "products", [], "any", false, false, false, 293)), "html", null, true);
            yield "</span>
                            <small class=\"text-muted d-block\">produits</small>
                        </div>
                        <div class=\"text-center px-2 py-1 bg-light rounded\" style=\"min-width: 45%;\">
                            <i class=\"fas fa-sitemap text-info me-1\"></i>
                            <span class=\"fw-bold\">";
            // line 298
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 298)), "html", null, true);
            yield "</span>
                            <small class=\"text-muted d-block\">sous-catégories</small>
                        </div>
                    </div>

                    <!-- Boutons d'action (Produits & Promotions) -->
                    <div class=\"d-flex gap-2 mb-3\">
                        <a href=\"";
            // line 305
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_products", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 305)]), "html", null, true);
            yield "\" 
                        class=\"btn btn-sm btn-outline-info flex-fill\">
                            <i class=\"fas fa-list\"></i> Produits
                        </a>
                        <a href=\"";
            // line 309
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_promotions", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 309)]), "html", null, true);
            yield "\" 
                        class=\"btn btn-sm btn-outline-warning flex-fill\">
                            <i class=\"fas fa-tags\"></i> Promos
                        </a>
                    </div>

                    <!-- Boutons d'action (icônes) -->
                    <div class=\"d-flex justify-content-between mt-auto\">
                        <a href=\"";
            // line 317
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 317)]), "html", null, true);
            yield "\" 
                        class=\"btn btn-sm btn-outline-info\" title=\"Voir détails\"><i class=\"fas fa-eye\"></i></a>
                        
                        <a href=\"";
            // line 320
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 320)]), "html", null, true);
            yield "\" 
                        class=\"btn btn-sm btn-outline-warning\" title=\"Modifier\"><i class=\"fas fa-edit\"></i></a>
                        
                        ";
            // line 324
            yield "                        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "subscriptionActive", [], "any", false, false, false, 324)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 325
                yield "                            <button type=\"button\" 
                                    class=\"btn btn-sm ";
                // line 326
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "isActive", [], "any", false, false, false, 326)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "btn-outline-danger";
                } else {
                    yield "btn-outline-success";
                }
                yield " toggle-category-btn\"
                                    data-category-id=\"";
                // line 327
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 327), "html", null, true);
                yield "\"
                                    data-category-name=\"";
                // line 328
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 328), "html", null, true);
                yield "\"
                                    data-current-status=\"";
                // line 329
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "isActive", [], "any", false, false, false, 329)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : ("inactive"));
                yield "\"
                                    data-token=\"";
                // line 330
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle-status" . CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 330))), "html", null, true);
                yield "\"
                                    title=\"";
                // line 331
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "isActive", [], "any", false, false, false, 331)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
                yield "\">
                                ";
                // line 332
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "isActive", [], "any", false, false, false, 332)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<i class=\"fas fa-toggle-on\"></i>";
                } else {
                    yield "<i class=\"fas fa-toggle-off\"></i>";
                }
                // line 333
                yield "                            </button>
                        ";
            } else {
                // line 335
                yield "                            ";
                // line 336
                yield "                            <span class=\"btn btn-sm btn-secondary disabled\" style=\"opacity:0.5; cursor:not-allowed;\">
                                <i class=\"fas fa-ban\"></i>
                            </span>
                        ";
            }
            // line 340
            yield "                        
                        ";
            // line 341
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 342
                yield "                            <button type=\"button\" class=\"btn btn-sm btn-outline-danger delete-category-btn\"
                                    data-category-id=\"";
                // line 343
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 343), "html", null, true);
                yield "\"
                                    data-category-name=\"";
                // line 344
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 344), "html", null, true);
                yield "\"
                                    ";
                // line 345
                if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "products", [], "any", false, false, false, 345)) > 0) || (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 345)) > 0))) {
                    yield "disabled";
                }
                yield ">
                                <i class=\"fas fa-trash\"></i>
                            </button>
                        ";
            }
            // line 349
            yield "                    </div>
                </div>
            </div>
        </div>
        ";
            $context['_iterated'] = true;
        }
        // line 353
        if (!$context['_iterated']) {
            // line 354
            yield "        <div class=\"col-12\">
            <div class=\"card shadow\">
                <div class=\"card-body text-center py-5\">
                    <i class=\"fas fa-folder-open fa-4x text-muted mb-3\"></i>
                    <h4 class=\"text-muted\">Aucune catégorie trouvée</h4>
                    <a href=\"";
            // line 359
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_index");
            yield "\" class=\"btn btn-outline-primary\">
                        <i class=\"fas fa-undo me-1\"></i> Réinitialiser les filtres
                    </a>
                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 366
        yield "    </div>

    <!-- Pagination -->
    ";
        // line 369
        if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 369, $this->source); })()) > 1)) {
            // line 370
            yield "    <div class=\"row mt-4\">
        <div class=\"col-12\">
            <nav aria-label=\"Pagination\">
                <ul class=\"pagination justify-content-center flex-wrap\">
                    ";
            // line 375
            yield "                </ul>
            </nav>
        </div>
    </div>
    ";
        }
        // line 380
        yield "</div>

";
        // line 383
        yield "
";
        // line 385
        yield "<div class=\"modal fade\" id=\"quotaReachedModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-warning text-dark\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Quota atteint
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <i class=\"fas fa-ban fa-4x text-warning mb-3\"></i>
                <h5>Vous avez atteint votre limite de ";
        // line 396
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["quota"]) || array_key_exists("quota", $context) ? $context["quota"] : (function () { throw new RuntimeError('Variable "quota" does not exist.', 396, $this->source); })()), "html", null, true);
        yield " catégories dans le quota.</h5>
                <p class=\"text-muted\">Pour ajouter de nouvelles catégories, passez à un plan supérieur.</p>
            </div>
            <div class=\"modal-footer justify-content-center\">
                <a href=\"";
        // line 400
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subscription_plans");
        yield "\" class=\"btn btn-warning btn-lg px-4\">
                    <i class=\"fas fa-arrow-up me-2\"></i> Voir les offres
                </a>
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
                    Annuler
                </button>
            </div>
        </div>
    </div>
</div>

";
        // line 412
        yield "<div class=\"modal fade\" id=\"toggleCategoryModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"toggleModalTitle\">Confirmation</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <i class=\"fas fa-question-circle fa-4x text-primary mb-3\"></i>
                <p id=\"toggleModalMessage\">...</p>
            </div>
            <div class=\"modal-footer justify-content-center\">
                <form id=\"toggleCategoryForm\" method=\"post\" style=\"display: inline;\">
                    <input type=\"hidden\" name=\"_token\" id=\"toggleCategoryToken\" value=\"\">
                    <button type=\"submit\" class=\"btn btn-primary px-4\">
                        <i class=\"fas fa-check me-2\"></i> Confirmer
                    </button>
                </form>
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
                    Annuler
                </button>
            </div>
        </div>
    </div>
</div>

";
        // line 439
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 440
            yield "    <div class=\"modal fade\" id=\"deleteCategoryModal\" tabindex=\"-1\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">Confirmation de suppression</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                </div>
                <div class=\"modal-body\">
                    <div id=\"deleteCategoryMessage\"></div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                    <form id=\"deleteCategoryForm\" method=\"post\">
                        <input type=\"hidden\" name=\"_token\" id=\"deleteCategoryCsrfToken\">
                        <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
";
        }
        // line 461
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 464
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

        // line 465
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
.category-card.border-warning {
    border: 2px solid #ffc107 !important;
}
.category-status-badge {
    position: absolute;
    top: 10px;
    right: 10px;
    display: flex;
    flex-direction: column;
    gap: 5px;
    align-items: flex-end;
}
.category-image-container {
    position: relative;
    height: 180px;
    overflow: hidden;
}
.category-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.category-image-placeholder {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
}
.btn.disabled {
    opacity: 0.5;
    cursor: not-allowed;
}
.stat-item {
    transition: transform 0.2s;
}
.stat-item:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}
@media (max-width: 768px) {
    .category-card .btn-sm {
        font-size: 0.7rem;
        padding: 0.2rem 0.3rem;
    }
    .category-status-badge {
        font-size: 0.7rem;
    }
    .category-image-container {
        height: 140px;
    }
    .d-flex.gap-2 {
        flex-wrap: wrap;
    }
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 526
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

        // line 527
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // ========== 1. Gestion du bouton \"Nouvelle Catégorie\" ==========
    const newCategoryBtn = document.getElementById('newCategoryBtn');
    if (newCategoryBtn) {
        newCategoryBtn.addEventListener('click', function(e) {
            e.preventDefault();
            ";
        // line 535
        if ((($tmp = (isset($context["quotaReached"]) || array_key_exists("quotaReached", $context) ? $context["quotaReached"] : (function () { throw new RuntimeError('Variable "quotaReached" does not exist.', 535, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 536
            yield "                // Afficher la modale de quota atteint
                const quotaModal = new bootstrap.Modal(document.getElementById('quotaReachedModal'));
                quotaModal.show();
            ";
        } else {
            // line 540
            yield "                // Rediriger vers la page de création
                window.location.href = \"";
            // line 541
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_new");
            yield "\";
            ";
        }
        // line 543
        yield "        });
    }

    // ========== 2. Modale pour activation/désactivation manuelle (toggle) ==========
    const toggleModal = new bootstrap.Modal(document.getElementById('toggleCategoryModal'));
    const toggleForm = document.getElementById('toggleCategoryForm');
    const toggleToken = document.getElementById('toggleCategoryToken');
    const toggleMessage = document.getElementById('toggleModalMessage');

    document.querySelectorAll('.toggle-category-btn').forEach(button => {
        button.addEventListener('click', function() {
            const categoryId = this.dataset.categoryId;
            const categoryName = this.dataset.categoryName;
            const currentStatus = this.dataset.currentStatus; // 'active' ou 'inactive'
            const action = currentStatus === 'active' ? 'désactiver' : 'activer';
            
            toggleMessage.innerText = `Êtes-vous sûr de vouloir \${action} la catégorie \"\${categoryName}\" ?`;
            toggleForm.action = `/admin/category/\${categoryId}/toggle-status`;
            toggleToken.value = this.dataset.token;
            toggleModal.show();
        });
    });

    // ========== 3. Gestion de la suppression (admin) ==========
    ";
        // line 567
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 568
            yield "    const deleteButtons = document.querySelectorAll('.delete-category-btn:not([disabled])');
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteCategoryModal'));
    const deleteForm = document.getElementById('deleteCategoryForm');
    const deleteMessage = document.getElementById('deleteCategoryMessage');
    const deleteCsrfToken = document.getElementById('deleteCategoryCsrfToken');
    
    deleteButtons.forEach(button => {
        button.addEventListener('click', function() {
            const categoryId = this.dataset.categoryId;
            const categoryName = this.dataset.categoryName;
            
            deleteMessage.innerHTML = `
                <div class=\"alert alert-warning\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i>
                    Cette action est irréversible.
                </div>
                <p>Êtes-vous sûr de vouloir supprimer la catégorie <strong>\"\${categoryName}\"</strong> ?</p>
                <p class=\"text-danger small\">Toutes les sous-catégories seront également supprimées.</p>
            `;
            
            deleteForm.action = `/admin/category/\${categoryId}`;
            deleteCsrfToken.value = '";
            // line 589
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete"), "html", null, true);
            yield "';
            
            deleteModal.show();
        });
    });
    ";
        }
        // line 595
        yield "});
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
        return array (  1030 => 595,  1021 => 589,  998 => 568,  996 => 567,  970 => 543,  965 => 541,  962 => 540,  956 => 536,  954 => 535,  943 => 527,  930 => 526,  859 => 465,  846 => 464,  834 => 461,  811 => 440,  809 => 439,  781 => 412,  767 => 400,  760 => 396,  747 => 385,  744 => 383,  740 => 380,  733 => 375,  727 => 370,  725 => 369,  720 => 366,  707 => 359,  700 => 354,  698 => 353,  690 => 349,  681 => 345,  677 => 344,  673 => 343,  670 => 342,  668 => 341,  665 => 340,  659 => 336,  657 => 335,  653 => 333,  647 => 332,  643 => 331,  639 => 330,  635 => 329,  631 => 328,  627 => 327,  619 => 326,  616 => 325,  613 => 324,  607 => 320,  601 => 317,  590 => 309,  583 => 305,  573 => 298,  565 => 293,  555 => 286,  550 => 283,  544 => 281,  542 => 280,  538 => 279,  530 => 273,  526 => 271,  523 => 270,  519 => 268,  515 => 266,  513 => 265,  510 => 264,  508 => 263,  503 => 260,  497 => 256,  491 => 253,  486 => 252,  484 => 251,  478 => 248,  475 => 247,  470 => 246,  465 => 243,  459 => 240,  455 => 238,  452 => 237,  441 => 228,  431 => 221,  427 => 220,  423 => 219,  414 => 213,  410 => 212,  406 => 211,  397 => 205,  393 => 204,  389 => 203,  380 => 197,  361 => 181,  347 => 170,  333 => 159,  316 => 145,  302 => 134,  288 => 123,  274 => 112,  256 => 96,  246 => 92,  243 => 91,  239 => 90,  236 => 89,  226 => 85,  223 => 84,  218 => 83,  215 => 81,  204 => 74,  199 => 71,  193 => 67,  190 => 66,  182 => 59,  179 => 57,  170 => 51,  159 => 42,  156 => 41,  150 => 36,  146 => 34,  144 => 33,  141 => 32,  137 => 30,  135 => 29,  129 => 28,  125 => 27,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des Catégories - HMA Market{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
    <!-- En-tête avec quota et bouton d'ajout -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap\">
        <div>
            <h1 class=\"h3 mb-0 text-gray-800\">
                <i class=\"fas fa-list-alt me-2\"></i>Gestion des Catégories
            </h1>
            <p class=\"text-muted\">Organisez vos produits par catégories et sous-catégories</p>
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

            {# Affichage du nombre de catégories en attente (désactivées par quota) #}
            {% if subscriptionInactiveCount > 0 %}
            <div class=\"card bg-light p-3\">
                <div class=\"d-flex align-items-center\">
                    <div class=\"me-3\">
                        <span class=\"badge bg-warning p-2\">
                            <i class=\"fas fa-clock\"></i>
                        </span>
                    </div>
                    <div>
                        <small class=\"text-muted\">En attente</small>
                        <h5 class=\"mb-0\">{{ subscriptionInactiveCount }}</h5>
                        <small>désactivées par quota</small>
                    </div>
                </div>
            </div>
            {% endif %}

            {# Bouton Nouvelle Catégorie toujours visible #}
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
            </div>
            {# Lien direct vers les offres #}
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

    <!-- Container des statistiques dynamiques -->
    <div class=\"card shadow mb-4\">
        <div class=\"card-header bg-white py-3\">
            <h5 class=\"mb-0\">
                <i class=\"fas fa-chart-pie me-2\"></i>Statistiques selon les filtres
            </h5>
        </div>
        <div class=\"card-body\">
            <div class=\"row\">
                <!-- Première ligne -->
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
                <!-- Deuxième ligne -->
                <div class=\"col-md-4 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-danger text-uppercase small fw-bold\">Inactives</span>
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
                                <span class=\"text-info text-uppercase small fw-bold\">Abonnement actif</span>
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
                                <span class=\"text-secondary text-uppercase small fw-bold\">Abonnement inactif</span>
                                <h3 class=\"mb-0\">{{ subscriptionInactiveFiltered }}</h3>
                            </div>
                            <i class=\"fas fa-clock fa-2x text-secondary opacity-50\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Formulaire de filtres -->
    <div class=\"card shadow mb-4\">
        <div class=\"card-body\">
            <form method=\"get\" class=\"row g-3 align-items-end\">
                <div class=\"col-md-3\">
                    <label for=\"search\" class=\"form-label fw-bold\">Rechercher</label>
                    <input type=\"text\" name=\"search\" id=\"search\" value=\"{{ search }}\" 
                           class=\"form-control\" placeholder=\"Nom, description...\">
                </div>
                <div class=\"col-md-2\">
                    <label for=\"status\" class=\"form-label fw-bold\">Statut</label>
                    <select name=\"status\" id=\"status\" class=\"form-select\">
                        <option value=\"all\" {{ status == 'all' ? 'selected' : '' }}>Tous</option>
                        <option value=\"active\" {{ status == 'active' ? 'selected' : '' }}>Actives</option>
                        <option value=\"inactive\" {{ status == 'inactive' ? 'selected' : '' }}>Inactives</option>
                    </select>
                </div>
                <div class=\"col-md-2\">
                    <label for=\"type\" class=\"form-label fw-bold\">Type</label>
                    <select name=\"type\" id=\"type\" class=\"form-select\">
                        <option value=\"all\" {{ type == 'all' ? 'selected' : '' }}>Tous</option>
                        <option value=\"main\" {{ type == 'main' ? 'selected' : '' }}>Principales</option>
                        <option value=\"sub\" {{ type == 'sub' ? 'selected' : '' }}>Sous-catégories</option>
                    </select>
                </div>
                <div class=\"col-md-2\">
                    <label for=\"sub_status\" class=\"form-label fw-bold\">Abonnement</label>
                    <select name=\"sub_status\" id=\"sub_status\" class=\"form-select\">
                        <option value=\"all\" {{ subStatus == 'all' ? 'selected' : '' }}>Tous</option>
                        <option value=\"active\" {{ subStatus == 'active' ? 'selected' : '' }}>Abonnement actif</option>
                        <option value=\"inactive\" {{ subStatus == 'inactive' ? 'selected' : '' }}>Abonnement inactif</option>
                    </select>
                </div>
                <div class=\"col-md-3 d-flex gap-2\">
                    <button type=\"submit\" class=\"btn btn-primary flex-grow-1\">
                        <i class=\"fas fa-search me-1\"></i> Filtrer
                    </button>
                    <a href=\"{{ path('app_admin_category_index') }}\" class=\"btn btn-outline-secondary\">
                        <i class=\"fas fa-undo\"></i> Effacer
                    </a>
                </div>
            </form>
        </div>
    </div>

    {# Message informatif quand on filtre par abonnement inactif #}
    {% if subStatus == 'inactive' %}
        <div class=\"alert alert-info mb-4\">
            <i class=\"fas fa-info-circle me-2\"></i>
            <strong>{{ subscriptionInactiveFiltered }} catégorie(s)</strong> désactivées par abonnement.
        </div>
    {% endif %}

    <!-- Grille de cartes -->
    <div class=\"row\">
        {% for category in categories %}
        <div class=\"col-xl-3 col-lg-4 col-md-6 mb-4\">
            <div class=\"card category-card shadow h-100 {{ not category.subscriptionActive ? 'border-warning' : '' }}\">
                <!-- Image -->
                <div class=\"category-image-container\">
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
                    <div class=\"category-status-badge\">
                        {% if not category.subscriptionActive %}
                            <span class=\"badge bg-warning\"><i class=\"fas fa-clock me-1\"></i> En attente (quota)</span>
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

                <!-- Contenu -->
                <div class=\"card-body d-flex flex-column\">
                    <h5 class=\"card-title text-truncate\">
                        {{ category.name }}
                        {% if category.parent %}
                            <small class=\"text-muted d-block\"><i class=\"fas fa-level-up-alt me-1\"></i>{{ category.parent.name }}</small>
                        {% endif %}
                    </h5>
                    
                    <p class=\"card-text text-muted small mb-3\">
                        {{ category.description|default('Aucune description')|u.truncate(80, '...') }}
                    </p>
                    
                    <!-- Compteurs Produits & Sous-catégories (côte à côte) -->
                    <div class=\"d-flex justify-content-between align-items-center mb-3\">
                        <div class=\"text-center px-2 py-1 bg-light rounded\" style=\"min-width: 45%;\">
                            <i class=\"fas fa-box text-primary me-1\"></i>
                            <span class=\"fw-bold\">{{ category.products|length }}</span>
                            <small class=\"text-muted d-block\">produits</small>
                        </div>
                        <div class=\"text-center px-2 py-1 bg-light rounded\" style=\"min-width: 45%;\">
                            <i class=\"fas fa-sitemap text-info me-1\"></i>
                            <span class=\"fw-bold\">{{ category.children|length }}</span>
                            <small class=\"text-muted d-block\">sous-catégories</small>
                        </div>
                    </div>

                    <!-- Boutons d'action (Produits & Promotions) -->
                    <div class=\"d-flex gap-2 mb-3\">
                        <a href=\"{{ path('app_admin_category_products', {'id': category.id}) }}\" 
                        class=\"btn btn-sm btn-outline-info flex-fill\">
                            <i class=\"fas fa-list\"></i> Produits
                        </a>
                        <a href=\"{{ path('app_admin_category_promotions', {'id': category.id}) }}\" 
                        class=\"btn btn-sm btn-outline-warning flex-fill\">
                            <i class=\"fas fa-tags\"></i> Promos
                        </a>
                    </div>

                    <!-- Boutons d'action (icônes) -->
                    <div class=\"d-flex justify-content-between mt-auto\">
                        <a href=\"{{ path('app_admin_category_show', {'id': category.id}) }}\" 
                        class=\"btn btn-sm btn-outline-info\" title=\"Voir détails\"><i class=\"fas fa-eye\"></i></a>
                        
                        <a href=\"{{ path('app_admin_category_edit', {'id': category.id}) }}\" 
                        class=\"btn btn-sm btn-outline-warning\" title=\"Modifier\"><i class=\"fas fa-edit\"></i></a>
                        
                        {# Uniquement les catégories dans le quota ont un bouton de toggle #}
                        {% if category.subscriptionActive %}
                            <button type=\"button\" 
                                    class=\"btn btn-sm {% if category.isActive %}btn-outline-danger{% else %}btn-outline-success{% endif %} toggle-category-btn\"
                                    data-category-id=\"{{ category.id }}\"
                                    data-category-name=\"{{ category.name }}\"
                                    data-current-status=\"{{ category.isActive ? 'active' : 'inactive' }}\"
                                    data-token=\"{{ csrf_token('toggle-status' ~ category.id) }}\"
                                    title=\"{{ category.isActive ? 'Désactiver' : 'Activer' }}\">
                                {% if category.isActive %}<i class=\"fas fa-toggle-on\"></i>{% else %}<i class=\"fas fa-toggle-off\"></i>{% endif %}
                            </button>
                        {% else %}
                            {# Pas d'action possible, juste un badge (pas de bouton) #}
                            <span class=\"btn btn-sm btn-secondary disabled\" style=\"opacity:0.5; cursor:not-allowed;\">
                                <i class=\"fas fa-ban\"></i>
                            </span>
                        {% endif %}
                        
                        {% if is_granted('ROLE_ADMIN') %}
                            <button type=\"button\" class=\"btn btn-sm btn-outline-danger delete-category-btn\"
                                    data-category-id=\"{{ category.id }}\"
                                    data-category-name=\"{{ category.name }}\"
                                    {% if category.products|length > 0 or category.children|length > 0 %}disabled{% endif %}>
                                <i class=\"fas fa-trash\"></i>
                            </button>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
        {% else %}
        <div class=\"col-12\">
            <div class=\"card shadow\">
                <div class=\"card-body text-center py-5\">
                    <i class=\"fas fa-folder-open fa-4x text-muted mb-3\"></i>
                    <h4 class=\"text-muted\">Aucune catégorie trouvée</h4>
                    <a href=\"{{ path('app_admin_category_index') }}\" class=\"btn btn-outline-primary\">
                        <i class=\"fas fa-undo me-1\"></i> Réinitialiser les filtres
                    </a>
                </div>
            </div>
        </div>
        {% endfor %}
    </div>

    <!-- Pagination -->
    {% if totalPages > 1 %}
    <div class=\"row mt-4\">
        <div class=\"col-12\">
            <nav aria-label=\"Pagination\">
                <ul class=\"pagination justify-content-center flex-wrap\">
                    {# Votre code de pagination #}
                </ul>
            </nav>
        </div>
    </div>
    {% endif %}
</div>

{# ==================== MODALES ==================== #}

{# Modale pour quota atteint (nouvelle catégorie) #}
<div class=\"modal fade\" id=\"quotaReachedModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-warning text-dark\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Quota atteint
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <i class=\"fas fa-ban fa-4x text-warning mb-3\"></i>
                <h5>Vous avez atteint votre limite de {{ quota }} catégories dans le quota.</h5>
                <p class=\"text-muted\">Pour ajouter de nouvelles catégories, passez à un plan supérieur.</p>
            </div>
            <div class=\"modal-footer justify-content-center\">
                <a href=\"{{ path('app_subscription_plans') }}\" class=\"btn btn-warning btn-lg px-4\">
                    <i class=\"fas fa-arrow-up me-2\"></i> Voir les offres
                </a>
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
                    Annuler
                </button>
            </div>
        </div>
    </div>
</div>

{# Modale pour activation/désactivation manuelle (toggle) #}
<div class=\"modal fade\" id=\"toggleCategoryModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"toggleModalTitle\">Confirmation</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <i class=\"fas fa-question-circle fa-4x text-primary mb-3\"></i>
                <p id=\"toggleModalMessage\">...</p>
            </div>
            <div class=\"modal-footer justify-content-center\">
                <form id=\"toggleCategoryForm\" method=\"post\" style=\"display: inline;\">
                    <input type=\"hidden\" name=\"_token\" id=\"toggleCategoryToken\" value=\"\">
                    <button type=\"submit\" class=\"btn btn-primary px-4\">
                        <i class=\"fas fa-check me-2\"></i> Confirmer
                    </button>
                </form>
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
                    Annuler
                </button>
            </div>
        </div>
    </div>
</div>

{# Modale suppression (admin) #}
{% if is_granted('ROLE_ADMIN') %}
    <div class=\"modal fade\" id=\"deleteCategoryModal\" tabindex=\"-1\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">Confirmation de suppression</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                </div>
                <div class=\"modal-body\">
                    <div id=\"deleteCategoryMessage\"></div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                    <form id=\"deleteCategoryForm\" method=\"post\">
                        <input type=\"hidden\" name=\"_token\" id=\"deleteCategoryCsrfToken\">
                        <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
{% endif %}

{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
.category-card.border-warning {
    border: 2px solid #ffc107 !important;
}
.category-status-badge {
    position: absolute;
    top: 10px;
    right: 10px;
    display: flex;
    flex-direction: column;
    gap: 5px;
    align-items: flex-end;
}
.category-image-container {
    position: relative;
    height: 180px;
    overflow: hidden;
}
.category-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.category-image-placeholder {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
}
.btn.disabled {
    opacity: 0.5;
    cursor: not-allowed;
}
.stat-item {
    transition: transform 0.2s;
}
.stat-item:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}
@media (max-width: 768px) {
    .category-card .btn-sm {
        font-size: 0.7rem;
        padding: 0.2rem 0.3rem;
    }
    .category-status-badge {
        font-size: 0.7rem;
    }
    .category-image-container {
        height: 140px;
    }
    .d-flex.gap-2 {
        flex-wrap: wrap;
    }
}
</style>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // ========== 1. Gestion du bouton \"Nouvelle Catégorie\" ==========
    const newCategoryBtn = document.getElementById('newCategoryBtn');
    if (newCategoryBtn) {
        newCategoryBtn.addEventListener('click', function(e) {
            e.preventDefault();
            {% if quotaReached %}
                // Afficher la modale de quota atteint
                const quotaModal = new bootstrap.Modal(document.getElementById('quotaReachedModal'));
                quotaModal.show();
            {% else %}
                // Rediriger vers la page de création
                window.location.href = \"{{ path('app_admin_category_new') }}\";
            {% endif %}
        });
    }

    // ========== 2. Modale pour activation/désactivation manuelle (toggle) ==========
    const toggleModal = new bootstrap.Modal(document.getElementById('toggleCategoryModal'));
    const toggleForm = document.getElementById('toggleCategoryForm');
    const toggleToken = document.getElementById('toggleCategoryToken');
    const toggleMessage = document.getElementById('toggleModalMessage');

    document.querySelectorAll('.toggle-category-btn').forEach(button => {
        button.addEventListener('click', function() {
            const categoryId = this.dataset.categoryId;
            const categoryName = this.dataset.categoryName;
            const currentStatus = this.dataset.currentStatus; // 'active' ou 'inactive'
            const action = currentStatus === 'active' ? 'désactiver' : 'activer';
            
            toggleMessage.innerText = `Êtes-vous sûr de vouloir \${action} la catégorie \"\${categoryName}\" ?`;
            toggleForm.action = `/admin/category/\${categoryId}/toggle-status`;
            toggleToken.value = this.dataset.token;
            toggleModal.show();
        });
    });

    // ========== 3. Gestion de la suppression (admin) ==========
    {% if is_granted('ROLE_ADMIN') %}
    const deleteButtons = document.querySelectorAll('.delete-category-btn:not([disabled])');
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteCategoryModal'));
    const deleteForm = document.getElementById('deleteCategoryForm');
    const deleteMessage = document.getElementById('deleteCategoryMessage');
    const deleteCsrfToken = document.getElementById('deleteCategoryCsrfToken');
    
    deleteButtons.forEach(button => {
        button.addEventListener('click', function() {
            const categoryId = this.dataset.categoryId;
            const categoryName = this.dataset.categoryName;
            
            deleteMessage.innerHTML = `
                <div class=\"alert alert-warning\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i>
                    Cette action est irréversible.
                </div>
                <p>Êtes-vous sûr de vouloir supprimer la catégorie <strong>\"\${categoryName}\"</strong> ?</p>
                <p class=\"text-danger small\">Toutes les sous-catégories seront également supprimées.</p>
            `;
            
            deleteForm.action = `/admin/category/\${categoryId}`;
            deleteCsrfToken.value = '{{ csrf_token(\"delete\") }}';
            
            deleteModal.show();
        });
    });
    {% endif %}
});
</script>
{% endblock %}", "admin/category/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\category\\index.html.twig");
    }
}
