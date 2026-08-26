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

/* admin/supplier/index.html.twig */
class __TwigTemplate_a11b2204113d8bfa21449bdc2922bdae extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/supplier/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/supplier/index.html.twig"));

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

        yield "Gestion des Fournisseurs - HMA Market";
        
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
        yield "<div class=\"container-fluid px-2 px-md-4 py-2 py-md-3\">
    <!-- En-tête -->
    <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center mb-3 mb-md-4 flex-wrap gap-2 gap-md-3\">
        <div>
            <h1 class=\"h4 h-md-3 mb-0 text-gray-800\">
                <i class=\"fas fa-truck me-2\"></i>Gestion des Fournisseurs
            </h1>
            <p class=\"text-muted mt-1 small d-none d-sm-block\">Gérez vos fournisseurs et leurs coordonnées</p>
        </div>
        
        <div class=\"d-flex align-items-center gap-1 gap-md-3 flex-wrap\">
            <!-- Quota -->
            <div class=\"card bg-light border-0 shadow-sm p-1 p-md-2\" style=\"min-width: 100px;\">
                <div class=\"d-flex align-items-center\">
                    <div class=\"me-1 me-md-2\">
                        <span class=\"badge bg-primary p-1 p-md-2 rounded-circle\">
                            <i class=\"fas fa-chart-line fa-fw fs-6 fs-md-5\"></i>
                        </span>
                    </div>
                    <div>
                        <small class=\"text-muted d-block small\" style=\"font-size: 0.5rem;\">Fournisseurs quota</small>
                        <h6 class=\"mb-0 ";
        // line 28
        yield (((($tmp = (isset($context["quotaReached"]) || array_key_exists("quotaReached", $context) ? $context["quotaReached"] : (function () { throw new RuntimeError('Variable "quotaReached" does not exist.', 28, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-danger") : ("text-success"));
        yield " fw-bold fs-6 fs-md-5\">
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

            <!-- En attente -->
            ";
        // line 39
        if (((isset($context["subscriptionInactiveCount"]) || array_key_exists("subscriptionInactiveCount", $context) ? $context["subscriptionInactiveCount"] : (function () { throw new RuntimeError('Variable "subscriptionInactiveCount" does not exist.', 39, $this->source); })()) > 0)) {
            // line 40
            yield "            <div class=\"card bg-light border-0 shadow-sm p-1 p-md-2\" style=\"min-width: 80px;\">
                <div class=\"d-flex align-items-center\">
                    <div class=\"me-1 me-md-2\">
                        <span class=\"badge bg-warning p-1 p-md-2 rounded-circle\">
                            <i class=\"fas fa-clock fa-fw fs-6 fs-md-5\"></i>
                        </span>
                    </div>
                    <div>
                        <small class=\"text-muted d-block small\" style=\"font-size: 0.5rem;\">En attente</small>
                        <h6 class=\"mb-0 fw-bold fs-6 fs-md-5\">";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subscriptionInactiveCount"]) || array_key_exists("subscriptionInactiveCount", $context) ? $context["subscriptionInactiveCount"] : (function () { throw new RuntimeError('Variable "subscriptionInactiveCount" does not exist.', 49, $this->source); })()), "html", null, true);
            yield "</h6>
                    </div>
                </div>
            </div>
            ";
        }
        // line 54
        yield "
            <a href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_supplier_new");
        yield "\" id=\"newSupplierBtn\" class=\"btn btn-primary btn-sm btn-md shadow-sm\">
                <i class=\"fas fa-plus-circle me-1 me-md-2\"></i> <span class=\"d-none d-sm-inline\">Nouveau</span>
            </a>
        </div>
    </div>

    ";
        // line 62
        yield "    ";
        if (((isset($context["quotaReached"]) || array_key_exists("quotaReached", $context) ? $context["quotaReached"] : (function () { throw new RuntimeError('Variable "quotaReached" does not exist.', 62, $this->source); })()) && ((isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 62, $this->source); })()) != "premium"))) {
            // line 63
            yield "    <div class=\"alert alert-warning alert-dismissible fade show shadow-sm\" role=\"alert\">
        <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center flex-wrap gap-2\">
            <div class=\"small\">
                <i class=\"fas fa-exclamation-triangle me-2\"></i>
                <strong>Quota atteint !</strong> Vous avez utilisé vos ";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["quota"]) || array_key_exists("quota", $context) ? $context["quota"] : (function () { throw new RuntimeError('Variable "quota" does not exist.', 67, $this->source); })()), "html", null, true);
            yield " fournisseurs.
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
    <div class=\"card shadow-sm border-0 mb-3 mb-md-4\">
        <div class=\"card-header bg-white py-2 py-md-3\">
            <h5 class=\"mb-0 fw-semibold fs-6 fs-md-5\">
                <i class=\"fas fa-chart-pie text-primary me-2\"></i>Statistiques
            </h5>
        </div>
        <div class=\"card-body p-2 p-md-3\">
            <div class=\"row g-2 g-md-3 row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5\">
                <div class=\"col\">
                    <div class=\"stat-item p-2 p-md-3 bg-light rounded-3 h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted text-uppercase small fw-bold\">Filtrés</span>
                                <h3 class=\"mb-0 fw-bold fs-4 fs-md-3\">";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalFiltered"]) || array_key_exists("totalFiltered", $context) ? $context["totalFiltered"] : (function () { throw new RuntimeError('Variable "totalFiltered" does not exist.', 106, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <div class=\"bg-primary p-1 p-md-2 rounded-3\">
                                <i class=\"fas fa-truck text-white fs-5 fs-md-3\"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col\">
                    <div class=\"stat-item p-2 p-md-3 bg-light rounded-3 h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted text-uppercase small fw-bold\">Actifs</span>
                                <h3 class=\"mb-0 fw-bold text-success fs-4 fs-md-3\">";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activeFiltered"]) || array_key_exists("activeFiltered", $context) ? $context["activeFiltered"] : (function () { throw new RuntimeError('Variable "activeFiltered" does not exist.', 119, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <div class=\"bg-success p-1 p-md-2 rounded-3\">
                                <i class=\"fas fa-check-circle text-white fs-5 fs-md-3\"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col\">
                    <div class=\"stat-item p-2 p-md-3 bg-light rounded-3 h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted text-uppercase small fw-bold\">Inactifs</span>
                                <h3 class=\"mb-0 fw-bold text-danger fs-4 fs-md-3\">";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["inactiveFiltered"]) || array_key_exists("inactiveFiltered", $context) ? $context["inactiveFiltered"] : (function () { throw new RuntimeError('Variable "inactiveFiltered" does not exist.', 132, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <div class=\"bg-danger p-1 p-md-2 rounded-3\">
                                <i class=\"fas fa-pause-circle text-white fs-5 fs-md-3\"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col\">
                    <div class=\"stat-item p-2 p-md-3 bg-light rounded-3 h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted text-uppercase small fw-bold\">Abonnement actif</span>
                                <h3 class=\"mb-0 fw-bold text-info fs-4 fs-md-3\">";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subscriptionActiveFiltered"]) || array_key_exists("subscriptionActiveFiltered", $context) ? $context["subscriptionActiveFiltered"] : (function () { throw new RuntimeError('Variable "subscriptionActiveFiltered" does not exist.', 145, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <div class=\"bg-info p-1 p-md-2 rounded-3\">
                                <i class=\"fas fa-database text-white fs-5 fs-md-3\"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col\">
                    <div class=\"stat-item p-2 p-md-3 bg-light rounded-3 h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted text-uppercase small fw-bold\">Abonnement inactif</span>
                                <h3 class=\"mb-0 fw-bold text-secondary fs-4 fs-md-3\">";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subscriptionInactiveFiltered"]) || array_key_exists("subscriptionInactiveFiltered", $context) ? $context["subscriptionInactiveFiltered"] : (function () { throw new RuntimeError('Variable "subscriptionInactiveFiltered" does not exist.', 158, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <div class=\"bg-secondary p-1 p-md-2 rounded-3\">
                                <i class=\"fas fa-clock text-white fs-5 fs-md-3\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filtres -->
    <div class=\"card shadow-sm border-0 mb-3 mb-md-4\">
        <div class=\"card-header bg-white py-2 py-md-3\">
            <h5 class=\"mb-0 fw-semibold fs-6 fs-md-5\">
                <i class=\"fas fa-filter text-primary me-2\"></i>Filtres
            </h5>
        </div>
        <div class=\"card-body p-2 p-md-3\">
            <form method=\"get\" class=\"row g-2 g-md-3\">
                <div class=\"col-12 col-sm-6 col-md-4 col-lg-4\">
                    <label for=\"search\" class=\"form-label fw-semibold small\">
                        <i class=\"fas fa-search text-primary me-1\"></i>Rechercher
                    </label>
                    <div class=\"input-group\">
                        <span class=\"input-group-text bg-light border-0\">
                            <i class=\"fas fa-search text-muted small\"></i>
                        </span>
                        <input type=\"text\" name=\"search\" id=\"search\" value=\"";
        // line 187
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 187, $this->source); })()), "html", null, true);
        yield "\" 
                            class=\"form-control bg-light border-0 form-control-sm\" placeholder=\"Nom, contact...\">
                    </div>
                </div>
                <div class=\"col-6 col-sm-6 col-md-2 col-lg-2\">
                    <label for=\"status\" class=\"form-label fw-semibold small\">
                        <i class=\"fas fa-toggle-on text-success me-1\"></i>Statut
                    </label>
                    <select name=\"status\" id=\"status\" class=\"form-select bg-light border-0 form-select-sm\">
                        <option value=\"all\" ";
        // line 196
        yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 196, $this->source); })()) == "all")) ? ("selected") : (""));
        yield ">Tous</option>
                        <option value=\"active\" ";
        // line 197
        yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 197, $this->source); })()) == "active")) ? ("selected") : (""));
        yield ">Actifs</option>
                        <option value=\"inactive\" ";
        // line 198
        yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 198, $this->source); })()) == "inactive")) ? ("selected") : (""));
        yield ">Inactifs</option>
                    </select>
                </div>
                <div class=\"col-6 col-sm-6 col-md-2 col-lg-2\">
                    <label for=\"sub_status\" class=\"form-label fw-semibold small\">
                        <i class=\"fas fa-credit-card text-warning me-1\"></i>Abonnement
                    </label>
                    <select name=\"sub_status\" id=\"sub_status\" class=\"form-select bg-light border-0 form-select-sm\">
                        <option value=\"all\" ";
        // line 206
        yield ((((isset($context["subStatus"]) || array_key_exists("subStatus", $context) ? $context["subStatus"] : (function () { throw new RuntimeError('Variable "subStatus" does not exist.', 206, $this->source); })()) == "all")) ? ("selected") : (""));
        yield ">Tous</option>
                        <option value=\"active\" ";
        // line 207
        yield ((((isset($context["subStatus"]) || array_key_exists("subStatus", $context) ? $context["subStatus"] : (function () { throw new RuntimeError('Variable "subStatus" does not exist.', 207, $this->source); })()) == "active")) ? ("selected") : (""));
        yield ">Actif</option>
                        <option value=\"inactive\" ";
        // line 208
        yield ((((isset($context["subStatus"]) || array_key_exists("subStatus", $context) ? $context["subStatus"] : (function () { throw new RuntimeError('Variable "subStatus" does not exist.', 208, $this->source); })()) == "inactive")) ? ("selected") : (""));
        yield ">Inactif</option>
                    </select>
                </div>
                <div class=\"col-12 col-sm-12 col-md-4 col-lg-4 d-flex align-items-end gap-2\">
                    <button type=\"submit\" class=\"btn btn-primary w-100 py-1 py-md-2 btn-sm\">
                        <i class=\"fas fa-search me-1\"></i> <span class=\"d-none d-sm-inline\">Filtrer</span>
                    </button>
                    <a href=\"";
        // line 215
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_supplier_index");
        yield "\" class=\"btn btn-outline-secondary py-1 py-md-2 btn-sm\" title=\"Effacer\">
                        <i class=\"fas fa-undo\"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>

    ";
        // line 224
        yield "    ";
        if ((((isset($context["subStatus"]) || array_key_exists("subStatus", $context) ? $context["subStatus"] : (function () { throw new RuntimeError('Variable "subStatus" does not exist.', 224, $this->source); })()) == "inactive") && ((isset($context["subscriptionInactiveFiltered"]) || array_key_exists("subscriptionInactiveFiltered", $context) ? $context["subscriptionInactiveFiltered"] : (function () { throw new RuntimeError('Variable "subscriptionInactiveFiltered" does not exist.', 224, $this->source); })()) > 0))) {
            // line 225
            yield "        <div class=\"alert alert-info alert-dismissible fade show mb-3 mb-md-4 shadow-sm\">
            <i class=\"fas fa-info-circle me-2\"></i>
            <strong>";
            // line 227
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subscriptionInactiveFiltered"]) || array_key_exists("subscriptionInactiveFiltered", $context) ? $context["subscriptionInactiveFiltered"] : (function () { throw new RuntimeError('Variable "subscriptionInactiveFiltered" does not exist.', 227, $this->source); })()), "html", null, true);
            yield " fournisseur(s)</strong> désactivés par abonnement.
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        // line 231
        yield "
    <!-- Grille de fournisseurs -->
    <div class=\"row g-2 g-md-3 g-lg-4\">
        ";
        // line 234
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["suppliers"]) || array_key_exists("suppliers", $context) ? $context["suppliers"] : (function () { throw new RuntimeError('Variable "suppliers" does not exist.', 234, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["supplier"]) {
            // line 235
            yield "        <div class=\"col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3\">
            <div class=\"card h-100 border-0 shadow-sm hover-card\">
                <div class=\"card-header bg-transparent border-0 pt-2 pt-md-3 px-2 px-md-3\">
                    <div class=\"d-flex flex-wrap justify-content-between align-items-start gap-1\">
                        <div>
                            <span class=\"badge ";
            // line 240
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "isActive", [], "any", false, false, false, 240)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-danger"));
            yield " rounded-pill px-2 px-md-3 py-1 py-md-2 small\">
                                <i class=\"fas ";
            // line 241
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "isActive", [], "any", false, false, false, 241)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-check-circle") : ("fa-pause-circle"));
            yield " me-1\"></i>
                                <span class=\"d-none d-sm-inline\">";
            // line 242
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "isActive", [], "any", false, false, false, 242)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Inactif"));
            yield "</span>
                            </span>
                        </div>
                        <div>
                            ";
            // line 246
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "subscriptionActive", [], "any", false, false, false, 246)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 247
                yield "                                <span class=\"badge bg-info rounded-pill px-2 px-md-3 py-1 py-md-2 small\" title=\"Dans quota\">
                                    <i class=\"fas fa-database me-1\"></i><span class=\"d-none d-md-inline\">Quota</span>
                                </span>
                            ";
            } else {
                // line 251
                yield "                                <span class=\"badge bg-warning rounded-pill px-2 px-md-3 py-1 py-md-2 small\" title=\"Hors quota\">
                                    <i class=\"fas fa-clock me-1\"></i><span class=\"d-none d-md-inline\">Attente</span>
                                </span>
                            ";
            }
            // line 255
            yield "                        </div>
                    </div>
                    <h5 class=\"card-title mt-2 mb-0 fw-bold text-truncate fs-6 fs-md-5\">";
            // line 257
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "name", [], "any", false, false, false, 257), "html", null, true);
            yield "</h5>
                </div>
                <div class=\"card-body pt-0 pt-md-1 px-2 px-md-3 pb-2 pb-md-3\">
                    <div class=\"mb-1 mb-md-2\">
                        <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                            <div class=\"bg-light rounded-circle p-1 p-md-2 me-1 me-md-2 d-flex align-items-center justify-content-center\" style=\"width: 24px; height: 24px; min-width: 24px;\">
                                <i class=\"fas fa-user text-primary small\"></i>
                            </div>
                            <span class=\"small text-truncate\">";
            // line 265
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "contactPerson", [], "any", false, false, false, 265)), "truncate", [15], "method", false, false, false, 265), "html", null, true);
            yield "</span>
                        </div>
                        <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                            <div class=\"bg-light rounded-circle p-1 p-md-2 me-1 me-md-2 d-flex align-items-center justify-content-center\" style=\"width: 24px; height: 24px; min-width: 24px;\">
                                <i class=\"fas fa-phone text-success small\"></i>
                            </div>
                            <span class=\"small text-truncate\">";
            // line 271
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "phone", [], "any", false, false, false, 271), "html", null, true);
            yield "</span>
                            <a href=\"https://wa.me/";
            // line 272
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "phone", [], "any", false, false, false, 272), [" " => "", "-" => "", "+" => ""]), "html", null, true);
            yield "\" 
                               target=\"_blank\" 
                               class=\"ms-auto text-success\"
                               title=\"WhatsApp\">
                                <i class=\"fab fa-whatsapp fs-6\"></i>
                            </a>
                        </div>
                        
                        ";
            // line 281
            yield "                        <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                            <div class=\"bg-light rounded-circle p-1 p-md-2 me-1 me-md-2 d-flex align-items-center justify-content-center\" style=\"width: 24px; height: 24px; min-width: 24px;\">
                                <i class=\"fas fa-envelope text-info small\"></i>
                            </div>
                            <a href=\"mailto:";
            // line 285
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "email", [], "any", false, false, false, 285), "html", null, true);
            yield "\" 
                               class=\"small text-primary text-decoration-none fw-semibold text-truncate\" 
                               title=\"Envoyer un email à ";
            // line 287
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "email", [], "any", false, false, false, 287), "html", null, true);
            yield "\"
                               style=\"max-width: 150px;\">
                                <i class=\"fas fa-paper-plane me-1\" style=\"font-size: 0.6rem;\"></i>
                                ";
            // line 290
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "email", [], "any", false, false, false, 290)), "truncate", [20], "method", false, false, false, 290), "html", null, true);
            yield "
                            </a>
                            <span class=\"ms-1 text-muted small\" title=\"Cliquez pour envoyer un email\">
                                <i class=\"fas fa-external-link-alt\" style=\"font-size: 0.5rem;\"></i>
                            </span>
                        </div>
                        
                        <div class=\"d-flex align-items-center d-none d-sm-flex\">
                            <div class=\"bg-light rounded-circle p-1 p-md-2 me-1 me-md-2 d-flex align-items-center justify-content-center\" style=\"width: 24px; height: 24px; min-width: 24px;\">
                                <i class=\"fas fa-map-marker-alt text-warning small\"></i>
                            </div>
                            <span class=\"small text-truncate\">";
            // line 301
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "adress", [], "any", false, false, false, 301)), "truncate", [25], "method", false, false, false, 301), "html", null, true);
            yield "</span>
                        </div>
                    </div>
                    <div class=\"d-flex justify-content-between gap-1 gap-md-2 mt-2 mt-md-3\">
                        <a href=\"";
            // line 305
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_supplier_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "id", [], "any", false, false, false, 305)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-info flex-fill\" title=\"Voir\">
                            <i class=\"fas fa-eye\"></i>
                        </a>
                        <a href=\"";
            // line 308
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_supplier_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "id", [], "any", false, false, false, 308)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-warning flex-fill\" title=\"Modifier\">
                            <i class=\"fas fa-edit\"></i>
                        </a>
                        ";
            // line 311
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "subscriptionActive", [], "any", false, false, false, 311)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 312
                yield "                            <button type=\"button\" 
                                    class=\"btn btn-sm ";
                // line 313
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "isActive", [], "any", false, false, false, 313)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("btn-outline-danger") : ("btn-outline-success"));
                yield " flex-fill toggle-supplier-btn\"
                                    data-supplier-id=\"";
                // line 314
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "id", [], "any", false, false, false, 314), "html", null, true);
                yield "\"
                                    data-supplier-name=\"";
                // line 315
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "name", [], "any", false, false, false, 315), "html", null, true);
                yield "\"
                                    data-current-status=\"";
                // line 316
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "isActive", [], "any", false, false, false, 316)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : ("inactive"));
                yield "\"
                                    data-token=\"";
                // line 317
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle-status" . CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "id", [], "any", false, false, false, 317))), "html", null, true);
                yield "\"
                                    title=\"";
                // line 318
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "isActive", [], "any", false, false, false, 318)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
                yield "\">
                                <i class=\"fas ";
                // line 319
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "isActive", [], "any", false, false, false, 319)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-toggle-on") : ("fa-toggle-off"));
                yield "\"></i>
                            </button>
                        ";
            } else {
                // line 322
                yield "                            <span class=\"btn btn-sm btn-secondary disabled flex-fill\" title=\"Désactivé par quota\">
                                <i class=\"fas fa-ban\"></i>
                            </span>
                        ";
            }
            // line 326
            yield "                        ";
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "purchases", [], "any", false, false, false, 326)) == 0))) {
                // line 327
                yield "                            <button type=\"button\" 
                                    class=\"btn btn-sm btn-outline-danger flex-fill delete-supplier-btn\"
                                    data-supplier-id=\"";
                // line 329
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "id", [], "any", false, false, false, 329), "html", null, true);
                yield "\"
                                    data-supplier-name=\"";
                // line 330
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "name", [], "any", false, false, false, 330), "html", null, true);
                yield "\"
                                    title=\"Supprimer\">
                                <i class=\"fas fa-trash\"></i>
                            </button>
                        ";
            }
            // line 335
            yield "                    </div>
                </div>
            </div>
        </div>
        ";
            $context['_iterated'] = true;
        }
        // line 339
        if (!$context['_iterated']) {
            // line 340
            yield "        <div class=\"col-12\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-body text-center py-4 py-md-5\">
                    <i class=\"fas fa-truck fa-3x fa-md-4 text-muted mb-3\"></i>
                    <h4 class=\"text-muted fw-light fs-5 fs-md-4\">Aucun fournisseur trouvé</h4>
                    <p class=\"text-muted mb-3 mb-md-4 small\">Modifiez vos filtres ou créez un nouveau fournisseur.</p>
                    <a href=\"";
            // line 346
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_supplier_index");
            yield "\" class=\"btn btn-outline-primary btn-sm btn-md px-3 px-md-4\">
                        <i class=\"fas fa-undo me-2\"></i> Réinitialiser
                    </a>
                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['supplier'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 353
        yield "    </div>

    <!-- Pagination -->
    ";
        // line 356
        if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 356, $this->source); })()) > 1)) {
            // line 357
            yield "    <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-center mt-3 mt-md-4 gap-2\">
        <div class=\"text-muted small\">
            Page ";
            // line 359
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 359, $this->source); })()), "html", null, true);
            yield " / ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 359, $this->source); })()), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 359, $this->source); })()), "html", null, true);
            yield " résultats)
        </div>
        <nav aria-label=\"Pagination\">
            <ul class=\"pagination pagination-sm mb-0\">
                <li class=\"page-item ";
            // line 363
            yield ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 363, $this->source); })()) <= 1)) ? ("disabled") : (""));
            yield "\">
                    <a class=\"page-link\" href=\"";
            // line 364
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_supplier_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 364, $this->source); })()), "request", [], "any", false, false, false, 364), "query", [], "any", false, false, false, 364), "all", [], "any", false, false, false, 364), ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 364, $this->source); })()) - 1)])), "html", null, true);
            yield "\"><i class=\"fas fa-chevron-left\"></i></a>
                </li>
                ";
            // line 366
            $context["maxVisible"] = 5;
            // line 367
            yield "                ";
            $context["startPage"] = max(1, ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 367, $this->source); })()) - 2));
            // line 368
            yield "                ";
            $context["endPage"] = min((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 368, $this->source); })()), (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 368, $this->source); })()) + (isset($context["maxVisible"]) || array_key_exists("maxVisible", $context) ? $context["maxVisible"] : (function () { throw new RuntimeError('Variable "maxVisible" does not exist.', 368, $this->source); })())) - 1));
            // line 369
            yield "                ";
            if ((((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 369, $this->source); })()) - (isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 369, $this->source); })())) < ((isset($context["maxVisible"]) || array_key_exists("maxVisible", $context) ? $context["maxVisible"] : (function () { throw new RuntimeError('Variable "maxVisible" does not exist.', 369, $this->source); })()) - 1))) {
                // line 370
                yield "                    ";
                $context["startPage"] = max(1, (((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 370, $this->source); })()) - (isset($context["maxVisible"]) || array_key_exists("maxVisible", $context) ? $context["maxVisible"] : (function () { throw new RuntimeError('Variable "maxVisible" does not exist.', 370, $this->source); })())) + 1));
                // line 371
                yield "                ";
            }
            // line 372
            yield "                
                ";
            // line 373
            if (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 373, $this->source); })()) > 1)) {
                // line 374
                yield "                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"";
                // line 375
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_supplier_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 375, $this->source); })()), "request", [], "any", false, false, false, 375), "query", [], "any", false, false, false, 375), "all", [], "any", false, false, false, 375), ["page" => 1])), "html", null, true);
                yield "\">1</a>
                    </li>
                    ";
                // line 377
                if (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 377, $this->source); })()) > 2)) {
                    // line 378
                    yield "                        <li class=\"page-item disabled\"><span class=\"page-link\">…</span></li>
                    ";
                }
                // line 380
                yield "                ";
            }
            // line 381
            yield "                
                ";
            // line 382
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 382, $this->source); })()), (isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 382, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 383
                yield "                    <li class=\"page-item ";
                yield ((($context["i"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 383, $this->source); })()))) ? ("active") : (""));
                yield "\">
                        <a class=\"page-link\" href=\"";
                // line 384
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_supplier_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 384, $this->source); })()), "request", [], "any", false, false, false, 384), "query", [], "any", false, false, false, 384), "all", [], "any", false, false, false, 384), ["page" => $context["i"]])), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "</a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 387
            yield "                
                ";
            // line 388
            if (((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 388, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 388, $this->source); })()))) {
                // line 389
                yield "                    ";
                if (((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 389, $this->source); })()) < ((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 389, $this->source); })()) - 1))) {
                    // line 390
                    yield "                        <li class=\"page-item disabled\"><span class=\"page-link\">…</span></li>
                    ";
                }
                // line 392
                yield "                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"";
                // line 393
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_supplier_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 393, $this->source); })()), "request", [], "any", false, false, false, 393), "query", [], "any", false, false, false, 393), "all", [], "any", false, false, false, 393), ["page" => (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 393, $this->source); })())])), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 393, $this->source); })()), "html", null, true);
                yield "</a>
                    </li>
                ";
            }
            // line 396
            yield "                
                <li class=\"page-item ";
            // line 397
            yield ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 397, $this->source); })()) >= (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 397, $this->source); })()))) ? ("disabled") : (""));
            yield "\">
                    <a class=\"page-link\" href=\"";
            // line 398
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_supplier_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 398, $this->source); })()), "request", [], "any", false, false, false, 398), "query", [], "any", false, false, false, 398), "all", [], "any", false, false, false, 398), ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 398, $this->source); })()) + 1)])), "html", null, true);
            yield "\"><i class=\"fas fa-chevron-right\"></i></a>
                </li>
            </ul>
        </nav>
    </div>
    ";
        }
        // line 404
        yield "</div>

<!-- Modals -->
<div class=\"modal fade\" id=\"quotaReachedModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content border-0 shadow\">
            <div class=\"modal-header bg-warning text-white border-0\">
                <h5 class=\"modal-title fs-6\"><i class=\"fas fa-exclamation-triangle me-2\"></i> Quota atteint</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-3 py-md-4\">
                <i class=\"fas fa-ban fa-3x text-warning mb-3\"></i>
                <h5 class=\"fs-6\">Limite de ";
        // line 416
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["quota"]) || array_key_exists("quota", $context) ? $context["quota"] : (function () { throw new RuntimeError('Variable "quota" does not exist.', 416, $this->source); })()), "html", null, true);
        yield " fournisseurs atteinte</h5>
                <p class=\"text-muted small\">Passez à un plan supérieur pour ajouter des fournisseurs.</p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center py-2 py-md-3\">
                <a href=\"";
        // line 420
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subscription_plans");
        yield "\" class=\"btn btn-warning btn-sm px-3\">
                    <i class=\"fas fa-arrow-up me-2\"></i> Voir les offres
                </a>
                <button type=\"button\" class=\"btn btn-outline-secondary btn-sm px-3\" data-bs-dismiss=\"modal\">Annuler</button>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"toggleSupplierModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content border-0 shadow\">
            <div class=\"modal-header bg-warning text-white border-0\">
                <h5 class=\"modal-title fs-6\">Confirmation</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-3 py-md-4\">
                <i class=\"fas fa-question-circle fa-3x text-primary mb-3\"></i>
                <p id=\"toggleSupplierMessage\" class=\"mb-0 small\"></p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center py-2 py-md-3\">
                <button type=\"button\" class=\"btn btn-outline-secondary btn-sm px-3\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"toggleSupplierForm\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" id=\"toggleSupplierToken\">
                    <button type=\"submit\" class=\"btn btn-warning btn-sm px-3\">Confirmer</button>
                </form>
            </div>
        </div>
    </div>
</div>

";
        // line 451
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 452
            yield "<div class=\"modal fade\" id=\"deleteSupplierModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content border-0 shadow\">
            <div class=\"modal-header bg-danger text-white border-0\">
                <h5 class=\"modal-title fs-6\"><i class=\"fas fa-exclamation-triangle me-2\"></i> Confirmation</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-3 py-md-4\">
                <i class=\"fas fa-trash-alt fa-3x text-danger mb-3\"></i>
                <p id=\"deleteSupplierMessage\" class=\"mb-0 small\"></p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center py-2 py-md-3\">
                <button type=\"button\" class=\"btn btn-outline-secondary btn-sm px-3\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"deleteSupplierForm\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteSupplierCsrfToken\">
                    <button type=\"submit\" class=\"btn btn-danger btn-sm px-3\">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</div>
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 476
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

        // line 477
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
:root {
    --shadow-sm: 0 2px 8px rgba(0,0,0,0.06);
    --shadow-md: 0 4px 20px rgba(0,0,0,0.08);
}

.hover-card {
    transition: transform 0.2s ease, box-shadow 0.2s ease;
    border-radius: 12px;
    overflow: hidden;
}
.hover-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-md) !important;
}

.stat-item {
    transition: background-color 0.2s;
    border-radius: 8px;
}
.stat-item:hover {
    background-color: #e9ecef !important;
}

.badge {
    font-weight: 500;
    letter-spacing: 0.3px;
}

/* Email link style */
a[href^=\"mailto:\"] {
    transition: all 0.2s ease;
}
a[href^=\"mailto:\"]:hover {
    color: #0d6efd !important;
    text-decoration: underline !important;
}
a[href^=\"mailto:\"] i.fa-paper-plane {
    transition: transform 0.2s ease;
}
a[href^=\"mailto:\"]:hover i.fa-paper-plane {
    transform: translateX(2px) scale(1.1);
}

/* Responsive cards */
@media (max-width: 576px) {
    .card-header {
        padding: 0.5rem 0.75rem !important;
    }
    .card-body {
        padding: 0.5rem 0.75rem !important;
    }
    .card-title {
        font-size: 0.9rem !important;
    }
    .badge {
        font-size: 0.55rem !important;
        padding: 0.1rem 0.4rem !important;
    }
    .btn-sm {
        padding: 0.15rem 0.25rem !important;
        font-size: 0.6rem !important;
        min-height: 28px;
    }
    .btn-sm i {
        font-size: 0.7rem;
    }
    .pagination-sm .page-link {
        padding: 0.15rem 0.35rem !important;
        font-size: 0.65rem !important;
    }
    .container-fluid {
        padding-left: 4px !important;
        padding-right: 4px !important;
    }
    .fs-5.fs-md-3 {
        font-size: 1rem !important;
    }
    .fs-4.fs-md-3 {
        font-size: 1.1rem !important;
    }
    .stat-item {
        padding: 0.5rem !important;
    }
    .stat-item .bg-primary,
    .stat-item .bg-success,
    .stat-item .bg-danger,
    .stat-item .bg-info,
    .stat-item .bg-secondary {
        padding: 0.25rem !important;
        border-radius: 6px !important;
    }
    .stat-item i {
        font-size: 0.8rem !important;
    }
    .stat-item h3 {
        font-size: 0.9rem !important;
    }
    .stat-item span {
        font-size: 0.5rem !important;
    }
    /* Email link mobile */
    a[href^=\"mailto:\"] {
        font-size: 0.7rem !important;
        max-width: 100px !important;
    }
    a[href^=\"mailto:\"] i.fa-paper-plane {
        font-size: 0.5rem !important;
    }
    .bg-light.rounded-circle {
        width: 20px !important;
        height: 20px !important;
        min-width: 20px !important;
    }
    .bg-light.rounded-circle i {
        font-size: 0.5rem !important;
    }
}

@media (min-width: 577px) and (max-width: 768px) {
    .card-header {
        padding: 0.75rem !important;
    }
    .card-body {
        padding: 0.75rem !important;
    }
    .stat-item {
        padding: 0.5rem !important;
    }
    .stat-item i {
        font-size: 1rem !important;
    }
    .stat-item h3 {
        font-size: 1.2rem !important;
    }
    a[href^=\"mailto:\"] {
        max-width: 130px !important;
    }
}

@media (min-width: 769px) and (max-width: 992px) {
    .stat-item i {
        font-size: 1.2rem !important;
    }
    .stat-item h3 {
        font-size: 1.4rem !important;
    }
}

/* Modal responsive */
@media (max-width: 576px) {
    .modal-dialog {
        margin: 0.5rem;
    }
    .modal-body {
        padding: 0.75rem !important;
    }
    .modal-footer {
        padding: 0.5rem !important;
    }
    .modal-footer .btn {
        font-size: 0.7rem !important;
        padding: 0.2rem 0.5rem !important;
    }
}

/* Stats icons */
.bg-primary .fas, .bg-success .fas, .bg-danger .fas, .bg-info .fas, .bg-secondary .fas {
    opacity: 0.9;
}

/* Quota card responsive */
@media (max-width: 576px) {
    .card.bg-light {
        padding: 0.25rem 0.5rem !important;
        min-width: 70px !important;
    }
    .card.bg-light .badge {
        padding: 0.15rem !important;
    }
    .card.bg-light .badge i {
        font-size: 0.6rem !important;
    }
    .card.bg-light h6 {
        font-size: 0.7rem !important;
    }
    .card.bg-light small {
        font-size: 0.4rem !important;
    }
}

/* Alert responsive */
@media (max-width: 576px) {
    .alert {
        padding: 0.5rem !important;
        font-size: 0.75rem !important;
    }
    .alert .btn {
        font-size: 0.65rem !important;
        padding: 0.15rem 0.5rem !important;
    }
}

/* Email icon hover effect */
a[href^=\"mailto:\"]:hover .fa-paper-plane {
    animation: fly 0.4s ease;
}
@keyframes fly {
    0% { transform: translateX(0); }
    50% { transform: translateX(5px) scale(1.2); }
    100% { transform: translateX(0); }
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 693
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

        // line 694
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Nouveau fournisseur
    const newBtn = document.getElementById('newSupplierBtn');
    if (newBtn) {
        newBtn.addEventListener('click', function(e) {
            e.preventDefault();
            ";
        // line 702
        if ((($tmp = (isset($context["quotaReached"]) || array_key_exists("quotaReached", $context) ? $context["quotaReached"] : (function () { throw new RuntimeError('Variable "quotaReached" does not exist.', 702, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 703
            yield "                new bootstrap.Modal(document.getElementById('quotaReachedModal')).show();
            ";
        } else {
            // line 705
            yield "                window.location.href = \"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_supplier_new");
            yield "\";
            ";
        }
        // line 707
        yield "        });
    }

    // Toggle status
    const toggleModal = new bootstrap.Modal(document.getElementById('toggleSupplierModal'));
    const toggleForm = document.getElementById('toggleSupplierForm');
    const toggleToken = document.getElementById('toggleSupplierToken');
    const toggleMessage = document.getElementById('toggleSupplierMessage');

    document.querySelectorAll('.toggle-supplier-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const id = this.dataset.supplierId;
            const name = this.dataset.supplierName;
            const current = this.dataset.currentStatus;
            const action = current === 'active' ? 'désactiver' : 'activer';
            toggleMessage.innerText = `Êtes-vous sûr de vouloir \${action} le fournisseur \"\${name}\" ?`;
            toggleForm.action = `/admin/supplier/\${id}/toggle-status`;
            toggleToken.value = this.dataset.token;
            toggleModal.show();
        });
    });

    // Suppression
    ";
        // line 730
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 731
            yield "    const deleteModal = new bootstrap.Modal(document.getElementById('deleteSupplierModal'));
    const deleteForm = document.getElementById('deleteSupplierForm');
    const deleteToken = document.getElementById('deleteSupplierCsrfToken');
    const deleteMessage = document.getElementById('deleteSupplierMessage');

    document.querySelectorAll('.delete-supplier-btn:not([disabled])').forEach(btn => {
        btn.addEventListener('click', function() {
            const id = this.dataset.supplierId;
            const name = this.dataset.supplierName;
            deleteMessage.innerHTML = `
                <div class=\"alert alert-warning mb-2 p-2 small\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i>Cette action est irréversible.
                </div>
                <p class=\"mb-0\">Supprimer le fournisseur <strong>\"\${name}\"</strong> ?</p>
            `;
            deleteForm.action = `/admin/supplier/\${id}`;
            deleteToken.value = '";
            // line 747
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete"), "html", null, true);
            yield "';
            deleteModal.show();
        });
    });
    ";
        }
        // line 752
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
        return "admin/supplier/index.html.twig";
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
        return array (  1210 => 752,  1202 => 747,  1184 => 731,  1182 => 730,  1157 => 707,  1151 => 705,  1147 => 703,  1145 => 702,  1134 => 694,  1121 => 693,  895 => 477,  882 => 476,  849 => 452,  847 => 451,  813 => 420,  806 => 416,  792 => 404,  783 => 398,  779 => 397,  776 => 396,  768 => 393,  765 => 392,  761 => 390,  758 => 389,  756 => 388,  753 => 387,  742 => 384,  737 => 383,  733 => 382,  730 => 381,  727 => 380,  723 => 378,  721 => 377,  716 => 375,  713 => 374,  711 => 373,  708 => 372,  705 => 371,  702 => 370,  699 => 369,  696 => 368,  693 => 367,  691 => 366,  686 => 364,  682 => 363,  671 => 359,  667 => 357,  665 => 356,  660 => 353,  647 => 346,  639 => 340,  637 => 339,  629 => 335,  621 => 330,  617 => 329,  613 => 327,  610 => 326,  604 => 322,  598 => 319,  594 => 318,  590 => 317,  586 => 316,  582 => 315,  578 => 314,  574 => 313,  571 => 312,  569 => 311,  563 => 308,  557 => 305,  550 => 301,  536 => 290,  530 => 287,  525 => 285,  519 => 281,  508 => 272,  504 => 271,  495 => 265,  484 => 257,  480 => 255,  474 => 251,  468 => 247,  466 => 246,  459 => 242,  455 => 241,  451 => 240,  444 => 235,  439 => 234,  434 => 231,  427 => 227,  423 => 225,  420 => 224,  409 => 215,  399 => 208,  395 => 207,  391 => 206,  380 => 198,  376 => 197,  372 => 196,  360 => 187,  328 => 158,  312 => 145,  296 => 132,  280 => 119,  264 => 106,  247 => 91,  237 => 87,  234 => 86,  230 => 85,  227 => 84,  217 => 80,  214 => 79,  209 => 78,  206 => 76,  196 => 69,  191 => 67,  185 => 63,  182 => 62,  173 => 55,  170 => 54,  162 => 49,  151 => 40,  149 => 39,  141 => 33,  137 => 31,  135 => 30,  129 => 29,  125 => 28,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/supplier/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Gestion des Fournisseurs - HMA Market{% endblock %}

{% block body %}
<div class=\"container-fluid px-2 px-md-4 py-2 py-md-3\">
    <!-- En-tête -->
    <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center mb-3 mb-md-4 flex-wrap gap-2 gap-md-3\">
        <div>
            <h1 class=\"h4 h-md-3 mb-0 text-gray-800\">
                <i class=\"fas fa-truck me-2\"></i>Gestion des Fournisseurs
            </h1>
            <p class=\"text-muted mt-1 small d-none d-sm-block\">Gérez vos fournisseurs et leurs coordonnées</p>
        </div>
        
        <div class=\"d-flex align-items-center gap-1 gap-md-3 flex-wrap\">
            <!-- Quota -->
            <div class=\"card bg-light border-0 shadow-sm p-1 p-md-2\" style=\"min-width: 100px;\">
                <div class=\"d-flex align-items-center\">
                    <div class=\"me-1 me-md-2\">
                        <span class=\"badge bg-primary p-1 p-md-2 rounded-circle\">
                            <i class=\"fas fa-chart-line fa-fw fs-6 fs-md-5\"></i>
                        </span>
                    </div>
                    <div>
                        <small class=\"text-muted d-block small\" style=\"font-size: 0.5rem;\">Fournisseurs quota</small>
                        <h6 class=\"mb-0 {{ quotaReached ? 'text-danger' : 'text-success' }} fw-bold fs-6 fs-md-5\">
                            {{ activeCount }} / {{ quota }}
                            {% if quota == 'Illimité' %}
                                <i class=\"fas fa-infinity text-info ms-1 small\"></i>
                            {% endif %}
                        </h6>
                    </div>
                </div>
            </div>

            <!-- En attente -->
            {% if subscriptionInactiveCount > 0 %}
            <div class=\"card bg-light border-0 shadow-sm p-1 p-md-2\" style=\"min-width: 80px;\">
                <div class=\"d-flex align-items-center\">
                    <div class=\"me-1 me-md-2\">
                        <span class=\"badge bg-warning p-1 p-md-2 rounded-circle\">
                            <i class=\"fas fa-clock fa-fw fs-6 fs-md-5\"></i>
                        </span>
                    </div>
                    <div>
                        <small class=\"text-muted d-block small\" style=\"font-size: 0.5rem;\">En attente</small>
                        <h6 class=\"mb-0 fw-bold fs-6 fs-md-5\">{{ subscriptionInactiveCount }}</h6>
                    </div>
                </div>
            </div>
            {% endif %}

            <a href=\"{{ path('app_admin_supplier_new') }}\" id=\"newSupplierBtn\" class=\"btn btn-primary btn-sm btn-md shadow-sm\">
                <i class=\"fas fa-plus-circle me-1 me-md-2\"></i> <span class=\"d-none d-sm-inline\">Nouveau</span>
            </a>
        </div>
    </div>

    {# Message quota atteint #}
    {% if quotaReached and plan != 'premium' %}
    <div class=\"alert alert-warning alert-dismissible fade show shadow-sm\" role=\"alert\">
        <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center flex-wrap gap-2\">
            <div class=\"small\">
                <i class=\"fas fa-exclamation-triangle me-2\"></i>
                <strong>Quota atteint !</strong> Vous avez utilisé vos {{ quota }} fournisseurs.
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
    <div class=\"card shadow-sm border-0 mb-3 mb-md-4\">
        <div class=\"card-header bg-white py-2 py-md-3\">
            <h5 class=\"mb-0 fw-semibold fs-6 fs-md-5\">
                <i class=\"fas fa-chart-pie text-primary me-2\"></i>Statistiques
            </h5>
        </div>
        <div class=\"card-body p-2 p-md-3\">
            <div class=\"row g-2 g-md-3 row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5\">
                <div class=\"col\">
                    <div class=\"stat-item p-2 p-md-3 bg-light rounded-3 h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted text-uppercase small fw-bold\">Filtrés</span>
                                <h3 class=\"mb-0 fw-bold fs-4 fs-md-3\">{{ totalFiltered }}</h3>
                            </div>
                            <div class=\"bg-primary p-1 p-md-2 rounded-3\">
                                <i class=\"fas fa-truck text-white fs-5 fs-md-3\"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col\">
                    <div class=\"stat-item p-2 p-md-3 bg-light rounded-3 h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted text-uppercase small fw-bold\">Actifs</span>
                                <h3 class=\"mb-0 fw-bold text-success fs-4 fs-md-3\">{{ activeFiltered }}</h3>
                            </div>
                            <div class=\"bg-success p-1 p-md-2 rounded-3\">
                                <i class=\"fas fa-check-circle text-white fs-5 fs-md-3\"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col\">
                    <div class=\"stat-item p-2 p-md-3 bg-light rounded-3 h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted text-uppercase small fw-bold\">Inactifs</span>
                                <h3 class=\"mb-0 fw-bold text-danger fs-4 fs-md-3\">{{ inactiveFiltered }}</h3>
                            </div>
                            <div class=\"bg-danger p-1 p-md-2 rounded-3\">
                                <i class=\"fas fa-pause-circle text-white fs-5 fs-md-3\"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col\">
                    <div class=\"stat-item p-2 p-md-3 bg-light rounded-3 h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted text-uppercase small fw-bold\">Abonnement actif</span>
                                <h3 class=\"mb-0 fw-bold text-info fs-4 fs-md-3\">{{ subscriptionActiveFiltered }}</h3>
                            </div>
                            <div class=\"bg-info p-1 p-md-2 rounded-3\">
                                <i class=\"fas fa-database text-white fs-5 fs-md-3\"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col\">
                    <div class=\"stat-item p-2 p-md-3 bg-light rounded-3 h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted text-uppercase small fw-bold\">Abonnement inactif</span>
                                <h3 class=\"mb-0 fw-bold text-secondary fs-4 fs-md-3\">{{ subscriptionInactiveFiltered }}</h3>
                            </div>
                            <div class=\"bg-secondary p-1 p-md-2 rounded-3\">
                                <i class=\"fas fa-clock text-white fs-5 fs-md-3\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filtres -->
    <div class=\"card shadow-sm border-0 mb-3 mb-md-4\">
        <div class=\"card-header bg-white py-2 py-md-3\">
            <h5 class=\"mb-0 fw-semibold fs-6 fs-md-5\">
                <i class=\"fas fa-filter text-primary me-2\"></i>Filtres
            </h5>
        </div>
        <div class=\"card-body p-2 p-md-3\">
            <form method=\"get\" class=\"row g-2 g-md-3\">
                <div class=\"col-12 col-sm-6 col-md-4 col-lg-4\">
                    <label for=\"search\" class=\"form-label fw-semibold small\">
                        <i class=\"fas fa-search text-primary me-1\"></i>Rechercher
                    </label>
                    <div class=\"input-group\">
                        <span class=\"input-group-text bg-light border-0\">
                            <i class=\"fas fa-search text-muted small\"></i>
                        </span>
                        <input type=\"text\" name=\"search\" id=\"search\" value=\"{{ search }}\" 
                            class=\"form-control bg-light border-0 form-control-sm\" placeholder=\"Nom, contact...\">
                    </div>
                </div>
                <div class=\"col-6 col-sm-6 col-md-2 col-lg-2\">
                    <label for=\"status\" class=\"form-label fw-semibold small\">
                        <i class=\"fas fa-toggle-on text-success me-1\"></i>Statut
                    </label>
                    <select name=\"status\" id=\"status\" class=\"form-select bg-light border-0 form-select-sm\">
                        <option value=\"all\" {{ status == 'all' ? 'selected' : '' }}>Tous</option>
                        <option value=\"active\" {{ status == 'active' ? 'selected' : '' }}>Actifs</option>
                        <option value=\"inactive\" {{ status == 'inactive' ? 'selected' : '' }}>Inactifs</option>
                    </select>
                </div>
                <div class=\"col-6 col-sm-6 col-md-2 col-lg-2\">
                    <label for=\"sub_status\" class=\"form-label fw-semibold small\">
                        <i class=\"fas fa-credit-card text-warning me-1\"></i>Abonnement
                    </label>
                    <select name=\"sub_status\" id=\"sub_status\" class=\"form-select bg-light border-0 form-select-sm\">
                        <option value=\"all\" {{ subStatus == 'all' ? 'selected' : '' }}>Tous</option>
                        <option value=\"active\" {{ subStatus == 'active' ? 'selected' : '' }}>Actif</option>
                        <option value=\"inactive\" {{ subStatus == 'inactive' ? 'selected' : '' }}>Inactif</option>
                    </select>
                </div>
                <div class=\"col-12 col-sm-12 col-md-4 col-lg-4 d-flex align-items-end gap-2\">
                    <button type=\"submit\" class=\"btn btn-primary w-100 py-1 py-md-2 btn-sm\">
                        <i class=\"fas fa-search me-1\"></i> <span class=\"d-none d-sm-inline\">Filtrer</span>
                    </button>
                    <a href=\"{{ path('app_admin_supplier_index') }}\" class=\"btn btn-outline-secondary py-1 py-md-2 btn-sm\" title=\"Effacer\">
                        <i class=\"fas fa-undo\"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>

    {# Message filtres #}
    {% if subStatus == 'inactive' and subscriptionInactiveFiltered > 0 %}
        <div class=\"alert alert-info alert-dismissible fade show mb-3 mb-md-4 shadow-sm\">
            <i class=\"fas fa-info-circle me-2\"></i>
            <strong>{{ subscriptionInactiveFiltered }} fournisseur(s)</strong> désactivés par abonnement.
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    {% endif %}

    <!-- Grille de fournisseurs -->
    <div class=\"row g-2 g-md-3 g-lg-4\">
        {% for supplier in suppliers %}
        <div class=\"col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3\">
            <div class=\"card h-100 border-0 shadow-sm hover-card\">
                <div class=\"card-header bg-transparent border-0 pt-2 pt-md-3 px-2 px-md-3\">
                    <div class=\"d-flex flex-wrap justify-content-between align-items-start gap-1\">
                        <div>
                            <span class=\"badge {{ supplier.isActive ? 'bg-success' : 'bg-danger' }} rounded-pill px-2 px-md-3 py-1 py-md-2 small\">
                                <i class=\"fas {{ supplier.isActive ? 'fa-check-circle' : 'fa-pause-circle' }} me-1\"></i>
                                <span class=\"d-none d-sm-inline\">{{ supplier.isActive ? 'Actif' : 'Inactif' }}</span>
                            </span>
                        </div>
                        <div>
                            {% if supplier.subscriptionActive %}
                                <span class=\"badge bg-info rounded-pill px-2 px-md-3 py-1 py-md-2 small\" title=\"Dans quota\">
                                    <i class=\"fas fa-database me-1\"></i><span class=\"d-none d-md-inline\">Quota</span>
                                </span>
                            {% else %}
                                <span class=\"badge bg-warning rounded-pill px-2 px-md-3 py-1 py-md-2 small\" title=\"Hors quota\">
                                    <i class=\"fas fa-clock me-1\"></i><span class=\"d-none d-md-inline\">Attente</span>
                                </span>
                            {% endif %}
                        </div>
                    </div>
                    <h5 class=\"card-title mt-2 mb-0 fw-bold text-truncate fs-6 fs-md-5\">{{ supplier.name }}</h5>
                </div>
                <div class=\"card-body pt-0 pt-md-1 px-2 px-md-3 pb-2 pb-md-3\">
                    <div class=\"mb-1 mb-md-2\">
                        <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                            <div class=\"bg-light rounded-circle p-1 p-md-2 me-1 me-md-2 d-flex align-items-center justify-content-center\" style=\"width: 24px; height: 24px; min-width: 24px;\">
                                <i class=\"fas fa-user text-primary small\"></i>
                            </div>
                            <span class=\"small text-truncate\">{{ supplier.contactPerson|u.truncate(15) }}</span>
                        </div>
                        <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                            <div class=\"bg-light rounded-circle p-1 p-md-2 me-1 me-md-2 d-flex align-items-center justify-content-center\" style=\"width: 24px; height: 24px; min-width: 24px;\">
                                <i class=\"fas fa-phone text-success small\"></i>
                            </div>
                            <span class=\"small text-truncate\">{{ supplier.phone }}</span>
                            <a href=\"https://wa.me/{{ supplier.phone|replace({' ': '', '-': '', '+': ''}) }}\" 
                               target=\"_blank\" 
                               class=\"ms-auto text-success\"
                               title=\"WhatsApp\">
                                <i class=\"fab fa-whatsapp fs-6\"></i>
                            </a>
                        </div>
                        
                        {# ✅ EMAIL CLAIR ET CLAQUABLE #}
                        <div class=\"d-flex align-items-center mb-1 mb-md-2\">
                            <div class=\"bg-light rounded-circle p-1 p-md-2 me-1 me-md-2 d-flex align-items-center justify-content-center\" style=\"width: 24px; height: 24px; min-width: 24px;\">
                                <i class=\"fas fa-envelope text-info small\"></i>
                            </div>
                            <a href=\"mailto:{{ supplier.email }}\" 
                               class=\"small text-primary text-decoration-none fw-semibold text-truncate\" 
                               title=\"Envoyer un email à {{ supplier.email }}\"
                               style=\"max-width: 150px;\">
                                <i class=\"fas fa-paper-plane me-1\" style=\"font-size: 0.6rem;\"></i>
                                {{ supplier.email|u.truncate(20) }}
                            </a>
                            <span class=\"ms-1 text-muted small\" title=\"Cliquez pour envoyer un email\">
                                <i class=\"fas fa-external-link-alt\" style=\"font-size: 0.5rem;\"></i>
                            </span>
                        </div>
                        
                        <div class=\"d-flex align-items-center d-none d-sm-flex\">
                            <div class=\"bg-light rounded-circle p-1 p-md-2 me-1 me-md-2 d-flex align-items-center justify-content-center\" style=\"width: 24px; height: 24px; min-width: 24px;\">
                                <i class=\"fas fa-map-marker-alt text-warning small\"></i>
                            </div>
                            <span class=\"small text-truncate\">{{ supplier.adress|u.truncate(25) }}</span>
                        </div>
                    </div>
                    <div class=\"d-flex justify-content-between gap-1 gap-md-2 mt-2 mt-md-3\">
                        <a href=\"{{ path('app_admin_supplier_show', {'id': supplier.id}) }}\" class=\"btn btn-sm btn-outline-info flex-fill\" title=\"Voir\">
                            <i class=\"fas fa-eye\"></i>
                        </a>
                        <a href=\"{{ path('app_admin_supplier_edit', {'id': supplier.id}) }}\" class=\"btn btn-sm btn-outline-warning flex-fill\" title=\"Modifier\">
                            <i class=\"fas fa-edit\"></i>
                        </a>
                        {% if supplier.subscriptionActive %}
                            <button type=\"button\" 
                                    class=\"btn btn-sm {{ supplier.isActive ? 'btn-outline-danger' : 'btn-outline-success' }} flex-fill toggle-supplier-btn\"
                                    data-supplier-id=\"{{ supplier.id }}\"
                                    data-supplier-name=\"{{ supplier.name }}\"
                                    data-current-status=\"{{ supplier.isActive ? 'active' : 'inactive' }}\"
                                    data-token=\"{{ csrf_token('toggle-status' ~ supplier.id) }}\"
                                    title=\"{{ supplier.isActive ? 'Désactiver' : 'Activer' }}\">
                                <i class=\"fas {{ supplier.isActive ? 'fa-toggle-on' : 'fa-toggle-off' }}\"></i>
                            </button>
                        {% else %}
                            <span class=\"btn btn-sm btn-secondary disabled flex-fill\" title=\"Désactivé par quota\">
                                <i class=\"fas fa-ban\"></i>
                            </span>
                        {% endif %}
                        {% if is_granted('ROLE_ADMIN') and supplier.purchases|length == 0 %}
                            <button type=\"button\" 
                                    class=\"btn btn-sm btn-outline-danger flex-fill delete-supplier-btn\"
                                    data-supplier-id=\"{{ supplier.id }}\"
                                    data-supplier-name=\"{{ supplier.name }}\"
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
                <div class=\"card-body text-center py-4 py-md-5\">
                    <i class=\"fas fa-truck fa-3x fa-md-4 text-muted mb-3\"></i>
                    <h4 class=\"text-muted fw-light fs-5 fs-md-4\">Aucun fournisseur trouvé</h4>
                    <p class=\"text-muted mb-3 mb-md-4 small\">Modifiez vos filtres ou créez un nouveau fournisseur.</p>
                    <a href=\"{{ path('app_admin_supplier_index') }}\" class=\"btn btn-outline-primary btn-sm btn-md px-3 px-md-4\">
                        <i class=\"fas fa-undo me-2\"></i> Réinitialiser
                    </a>
                </div>
            </div>
        </div>
        {% endfor %}
    </div>

    <!-- Pagination -->
    {% if totalPages > 1 %}
    <div class=\"d-flex flex-column flex-sm-row justify-content-between align-items-center mt-3 mt-md-4 gap-2\">
        <div class=\"text-muted small\">
            Page {{ currentPage }} / {{ totalPages }} ({{ totalItems }} résultats)
        </div>
        <nav aria-label=\"Pagination\">
            <ul class=\"pagination pagination-sm mb-0\">
                <li class=\"page-item {{ currentPage <= 1 ? 'disabled' }}\">
                    <a class=\"page-link\" href=\"{{ path('app_admin_supplier_index', app.request.query.all|merge({'page': currentPage - 1})) }}\"><i class=\"fas fa-chevron-left\"></i></a>
                </li>
                {% set maxVisible = 5 %}
                {% set startPage = max(1, currentPage - 2) %}
                {% set endPage = min(totalPages, startPage + maxVisible - 1) %}
                {% if endPage - startPage < maxVisible - 1 %}
                    {% set startPage = max(1, endPage - maxVisible + 1) %}
                {% endif %}
                
                {% if startPage > 1 %}
                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"{{ path('app_admin_supplier_index', app.request.query.all|merge({'page': 1})) }}\">1</a>
                    </li>
                    {% if startPage > 2 %}
                        <li class=\"page-item disabled\"><span class=\"page-link\">…</span></li>
                    {% endif %}
                {% endif %}
                
                {% for i in startPage..endPage %}
                    <li class=\"page-item {{ i == currentPage ? 'active' }}\">
                        <a class=\"page-link\" href=\"{{ path('app_admin_supplier_index', app.request.query.all|merge({'page': i})) }}\">{{ i }}</a>
                    </li>
                {% endfor %}
                
                {% if endPage < totalPages %}
                    {% if endPage < totalPages - 1 %}
                        <li class=\"page-item disabled\"><span class=\"page-link\">…</span></li>
                    {% endif %}
                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"{{ path('app_admin_supplier_index', app.request.query.all|merge({'page': totalPages})) }}\">{{ totalPages }}</a>
                    </li>
                {% endif %}
                
                <li class=\"page-item {{ currentPage >= totalPages ? 'disabled' }}\">
                    <a class=\"page-link\" href=\"{{ path('app_admin_supplier_index', app.request.query.all|merge({'page': currentPage + 1})) }}\"><i class=\"fas fa-chevron-right\"></i></a>
                </li>
            </ul>
        </nav>
    </div>
    {% endif %}
</div>

<!-- Modals -->
<div class=\"modal fade\" id=\"quotaReachedModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content border-0 shadow\">
            <div class=\"modal-header bg-warning text-white border-0\">
                <h5 class=\"modal-title fs-6\"><i class=\"fas fa-exclamation-triangle me-2\"></i> Quota atteint</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-3 py-md-4\">
                <i class=\"fas fa-ban fa-3x text-warning mb-3\"></i>
                <h5 class=\"fs-6\">Limite de {{ quota }} fournisseurs atteinte</h5>
                <p class=\"text-muted small\">Passez à un plan supérieur pour ajouter des fournisseurs.</p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center py-2 py-md-3\">
                <a href=\"{{ path('app_subscription_plans') }}\" class=\"btn btn-warning btn-sm px-3\">
                    <i class=\"fas fa-arrow-up me-2\"></i> Voir les offres
                </a>
                <button type=\"button\" class=\"btn btn-outline-secondary btn-sm px-3\" data-bs-dismiss=\"modal\">Annuler</button>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"toggleSupplierModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content border-0 shadow\">
            <div class=\"modal-header bg-warning text-white border-0\">
                <h5 class=\"modal-title fs-6\">Confirmation</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-3 py-md-4\">
                <i class=\"fas fa-question-circle fa-3x text-primary mb-3\"></i>
                <p id=\"toggleSupplierMessage\" class=\"mb-0 small\"></p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center py-2 py-md-3\">
                <button type=\"button\" class=\"btn btn-outline-secondary btn-sm px-3\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"toggleSupplierForm\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" id=\"toggleSupplierToken\">
                    <button type=\"submit\" class=\"btn btn-warning btn-sm px-3\">Confirmer</button>
                </form>
            </div>
        </div>
    </div>
</div>

{% if is_granted('ROLE_ADMIN') %}
<div class=\"modal fade\" id=\"deleteSupplierModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered modal-sm\">
        <div class=\"modal-content border-0 shadow\">
            <div class=\"modal-header bg-danger text-white border-0\">
                <h5 class=\"modal-title fs-6\"><i class=\"fas fa-exclamation-triangle me-2\"></i> Confirmation</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-3 py-md-4\">
                <i class=\"fas fa-trash-alt fa-3x text-danger mb-3\"></i>
                <p id=\"deleteSupplierMessage\" class=\"mb-0 small\"></p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center py-2 py-md-3\">
                <button type=\"button\" class=\"btn btn-outline-secondary btn-sm px-3\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"deleteSupplierForm\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteSupplierCsrfToken\">
                    <button type=\"submit\" class=\"btn btn-danger btn-sm px-3\">Supprimer</button>
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
:root {
    --shadow-sm: 0 2px 8px rgba(0,0,0,0.06);
    --shadow-md: 0 4px 20px rgba(0,0,0,0.08);
}

.hover-card {
    transition: transform 0.2s ease, box-shadow 0.2s ease;
    border-radius: 12px;
    overflow: hidden;
}
.hover-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-md) !important;
}

.stat-item {
    transition: background-color 0.2s;
    border-radius: 8px;
}
.stat-item:hover {
    background-color: #e9ecef !important;
}

.badge {
    font-weight: 500;
    letter-spacing: 0.3px;
}

/* Email link style */
a[href^=\"mailto:\"] {
    transition: all 0.2s ease;
}
a[href^=\"mailto:\"]:hover {
    color: #0d6efd !important;
    text-decoration: underline !important;
}
a[href^=\"mailto:\"] i.fa-paper-plane {
    transition: transform 0.2s ease;
}
a[href^=\"mailto:\"]:hover i.fa-paper-plane {
    transform: translateX(2px) scale(1.1);
}

/* Responsive cards */
@media (max-width: 576px) {
    .card-header {
        padding: 0.5rem 0.75rem !important;
    }
    .card-body {
        padding: 0.5rem 0.75rem !important;
    }
    .card-title {
        font-size: 0.9rem !important;
    }
    .badge {
        font-size: 0.55rem !important;
        padding: 0.1rem 0.4rem !important;
    }
    .btn-sm {
        padding: 0.15rem 0.25rem !important;
        font-size: 0.6rem !important;
        min-height: 28px;
    }
    .btn-sm i {
        font-size: 0.7rem;
    }
    .pagination-sm .page-link {
        padding: 0.15rem 0.35rem !important;
        font-size: 0.65rem !important;
    }
    .container-fluid {
        padding-left: 4px !important;
        padding-right: 4px !important;
    }
    .fs-5.fs-md-3 {
        font-size: 1rem !important;
    }
    .fs-4.fs-md-3 {
        font-size: 1.1rem !important;
    }
    .stat-item {
        padding: 0.5rem !important;
    }
    .stat-item .bg-primary,
    .stat-item .bg-success,
    .stat-item .bg-danger,
    .stat-item .bg-info,
    .stat-item .bg-secondary {
        padding: 0.25rem !important;
        border-radius: 6px !important;
    }
    .stat-item i {
        font-size: 0.8rem !important;
    }
    .stat-item h3 {
        font-size: 0.9rem !important;
    }
    .stat-item span {
        font-size: 0.5rem !important;
    }
    /* Email link mobile */
    a[href^=\"mailto:\"] {
        font-size: 0.7rem !important;
        max-width: 100px !important;
    }
    a[href^=\"mailto:\"] i.fa-paper-plane {
        font-size: 0.5rem !important;
    }
    .bg-light.rounded-circle {
        width: 20px !important;
        height: 20px !important;
        min-width: 20px !important;
    }
    .bg-light.rounded-circle i {
        font-size: 0.5rem !important;
    }
}

@media (min-width: 577px) and (max-width: 768px) {
    .card-header {
        padding: 0.75rem !important;
    }
    .card-body {
        padding: 0.75rem !important;
    }
    .stat-item {
        padding: 0.5rem !important;
    }
    .stat-item i {
        font-size: 1rem !important;
    }
    .stat-item h3 {
        font-size: 1.2rem !important;
    }
    a[href^=\"mailto:\"] {
        max-width: 130px !important;
    }
}

@media (min-width: 769px) and (max-width: 992px) {
    .stat-item i {
        font-size: 1.2rem !important;
    }
    .stat-item h3 {
        font-size: 1.4rem !important;
    }
}

/* Modal responsive */
@media (max-width: 576px) {
    .modal-dialog {
        margin: 0.5rem;
    }
    .modal-body {
        padding: 0.75rem !important;
    }
    .modal-footer {
        padding: 0.5rem !important;
    }
    .modal-footer .btn {
        font-size: 0.7rem !important;
        padding: 0.2rem 0.5rem !important;
    }
}

/* Stats icons */
.bg-primary .fas, .bg-success .fas, .bg-danger .fas, .bg-info .fas, .bg-secondary .fas {
    opacity: 0.9;
}

/* Quota card responsive */
@media (max-width: 576px) {
    .card.bg-light {
        padding: 0.25rem 0.5rem !important;
        min-width: 70px !important;
    }
    .card.bg-light .badge {
        padding: 0.15rem !important;
    }
    .card.bg-light .badge i {
        font-size: 0.6rem !important;
    }
    .card.bg-light h6 {
        font-size: 0.7rem !important;
    }
    .card.bg-light small {
        font-size: 0.4rem !important;
    }
}

/* Alert responsive */
@media (max-width: 576px) {
    .alert {
        padding: 0.5rem !important;
        font-size: 0.75rem !important;
    }
    .alert .btn {
        font-size: 0.65rem !important;
        padding: 0.15rem 0.5rem !important;
    }
}

/* Email icon hover effect */
a[href^=\"mailto:\"]:hover .fa-paper-plane {
    animation: fly 0.4s ease;
}
@keyframes fly {
    0% { transform: translateX(0); }
    50% { transform: translateX(5px) scale(1.2); }
    100% { transform: translateX(0); }
}
</style>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Nouveau fournisseur
    const newBtn = document.getElementById('newSupplierBtn');
    if (newBtn) {
        newBtn.addEventListener('click', function(e) {
            e.preventDefault();
            {% if quotaReached %}
                new bootstrap.Modal(document.getElementById('quotaReachedModal')).show();
            {% else %}
                window.location.href = \"{{ path('app_admin_supplier_new') }}\";
            {% endif %}
        });
    }

    // Toggle status
    const toggleModal = new bootstrap.Modal(document.getElementById('toggleSupplierModal'));
    const toggleForm = document.getElementById('toggleSupplierForm');
    const toggleToken = document.getElementById('toggleSupplierToken');
    const toggleMessage = document.getElementById('toggleSupplierMessage');

    document.querySelectorAll('.toggle-supplier-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const id = this.dataset.supplierId;
            const name = this.dataset.supplierName;
            const current = this.dataset.currentStatus;
            const action = current === 'active' ? 'désactiver' : 'activer';
            toggleMessage.innerText = `Êtes-vous sûr de vouloir \${action} le fournisseur \"\${name}\" ?`;
            toggleForm.action = `/admin/supplier/\${id}/toggle-status`;
            toggleToken.value = this.dataset.token;
            toggleModal.show();
        });
    });

    // Suppression
    {% if is_granted('ROLE_ADMIN') %}
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteSupplierModal'));
    const deleteForm = document.getElementById('deleteSupplierForm');
    const deleteToken = document.getElementById('deleteSupplierCsrfToken');
    const deleteMessage = document.getElementById('deleteSupplierMessage');

    document.querySelectorAll('.delete-supplier-btn:not([disabled])').forEach(btn => {
        btn.addEventListener('click', function() {
            const id = this.dataset.supplierId;
            const name = this.dataset.supplierName;
            deleteMessage.innerHTML = `
                <div class=\"alert alert-warning mb-2 p-2 small\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i>Cette action est irréversible.
                </div>
                <p class=\"mb-0\">Supprimer le fournisseur <strong>\"\${name}\"</strong> ?</p>
            `;
            deleteForm.action = `/admin/supplier/\${id}`;
            deleteToken.value = '{{ csrf_token(\"delete\") }}';
            deleteModal.show();
        });
    });
    {% endif %}
});
</script>
{% endblock %}", "admin/supplier/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\supplier\\index.html.twig");
    }
}
