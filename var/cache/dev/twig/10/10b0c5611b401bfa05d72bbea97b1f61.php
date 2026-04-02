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
class __TwigTemplate_1ca5b2b4dfd1677571fe0646ee0c22a2 extends Template
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
        yield "<div class=\"container-fluid px-4\">
    <!-- En-tête avec quota et bouton d'ajout -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <h1 class=\"h3 mb-0 text-gray-800\">
                <i class=\"fas fa-truck me-2\"></i>Gestion des Fournisseurs
            </h1>
            <p class=\"text-muted mt-1\">Gérez vos fournisseurs et leurs coordonnées</p>
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
                        <small class=\"text-muted d-block\">Fournisseurs dans quota</small>
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
        if (((isset($context["subscriptionInactiveCount"]) || array_key_exists("subscriptionInactiveCount", $context) ? $context["subscriptionInactiveCount"] : (function () { throw new RuntimeError('Variable "subscriptionInactiveCount" does not exist.', 39, $this->source); })()) > 0)) {
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
        yield "\" id=\"newSupplierBtn\" class=\"btn btn-primary shadow-sm\">
                <i class=\"fas fa-plus-circle me-2\"></i> Nouveau Fournisseur
            </a>
        </div>
    </div>

    ";
        // line 62
        yield "    ";
        if (((isset($context["quotaReached"]) || array_key_exists("quotaReached", $context) ? $context["quotaReached"] : (function () { throw new RuntimeError('Variable "quotaReached" does not exist.', 62, $this->source); })()) && ((isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 62, $this->source); })()) != "premium"))) {
            // line 63
            yield "    <div class=\"alert alert-warning alert-dismissible fade show shadow-sm\" role=\"alert\">
        <div class=\"d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <div>
                <i class=\"fas fa-exclamation-triangle me-2\"></i>
                <strong>Quota atteint !</strong> Vous avez utilisé vos ";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["quota"]) || array_key_exists("quota", $context) ? $context["quota"] : (function () { throw new RuntimeError('Variable "quota" does not exist.', 67, $this->source); })()), "html", null, true);
            yield " fournisseurs dans le quota.
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
            <div class=\"row g-3 row-cols-2 row-cols-md-4 row-cols-lg-5\" style=\"--bs-custom-col: 20%;\">
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
                                <i class=\"fas fa-truck text-white fs-3\"></i>
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
                <i class=\"fas fa-filter text-primary me-2\"></i>Filtres avancés
            </h5>
        </div>
        <div class=\"card-body\">
            <form method=\"get\" class=\"row g-3\">
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
                            class=\"form-control bg-light border-0\" placeholder=\"Nom, contact, email...\">
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <label for=\"status\" class=\"form-label fw-semibold\">
                        <i class=\"fas fa-toggle-on text-success me-1\"></i>Statut
                    </label>
                    <select name=\"status\" id=\"status\" class=\"form-select bg-light border-0\">
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
                <div class=\"col-lg-3 col-md-6\">
                    <label for=\"sub_status\" class=\"form-label fw-semibold\">
                        <i class=\"fas fa-credit-card text-warning me-1\"></i>Abonnement
                    </label>
                    <select name=\"sub_status\" id=\"sub_status\" class=\"form-select bg-light border-0\">
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
                <div class=\"col-lg-2 d-flex align-items-end gap-2\">
                    <button type=\"submit\" class=\"btn btn-primary w-100 py-2\">
                        <i class=\"fas fa-search me-1\"></i> Filtrer
                    </button>
                    <a href=\"";
        // line 215
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_supplier_index");
        yield "\" class=\"btn btn-outline-secondary py-2\" title=\"Effacer\">
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
            yield "        <div class=\"alert alert-info alert-dismissible fade show mb-4 shadow-sm\" role=\"alert\">
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
    <div class=\"row g-4\">
        ";
        // line 234
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["suppliers"]) || array_key_exists("suppliers", $context) ? $context["suppliers"] : (function () { throw new RuntimeError('Variable "suppliers" does not exist.', 234, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["supplier"]) {
            // line 235
            yield "        <div class=\"col-xl-3 col-lg-4 col-md-6\">
            <div class=\"card h-100 border-0 shadow-sm hover-card\">
                <div class=\"card-header bg-transparent border-0 pt-3 px-3\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <span class=\"badge ";
            // line 240
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "isActive", [], "any", false, false, false, 240)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-danger"));
            yield " rounded-pill px-3 py-2\">
                                <i class=\"fas ";
            // line 241
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "isActive", [], "any", false, false, false, 241)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-check-circle") : ("fa-pause-circle"));
            yield " me-1\"></i>
                                ";
            // line 242
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "isActive", [], "any", false, false, false, 242)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Inactif"));
            yield "
                            </span>
                        </div>
                        <div>
                            ";
            // line 246
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "subscriptionActive", [], "any", false, false, false, 246)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 247
                yield "                                <span class=\"badge bg-info rounded-pill px-3 py-2\" title=\"Dans quota\">
                                    <i class=\"fas fa-database me-1\"></i>Quota
                                </span>
                            ";
            } else {
                // line 251
                yield "                                <span class=\"badge bg-warning rounded-pill px-3 py-2\" title=\"Hors quota\">
                                    <i class=\"fas fa-clock me-1\"></i>En attente
                                </span>
                            ";
            }
            // line 255
            yield "                        </div>
                    </div>
                    <h5 class=\"card-title mt-2 mb-0 fw-bold text-truncate\">";
            // line 257
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "name", [], "any", false, false, false, 257), "html", null, true);
            yield "</h5>
                </div>
                <div class=\"card-body pt-2\">
                    <div class=\"mb-3\">
                        <div class=\"d-flex align-items-center mb-2\">
                            <div class=\"bg-light rounded-circle p-2 me-2\" style=\"width: 32px; height: 32px; display: flex; align-items: center; justify-content: center;\">
                                <i class=\"fas fa-user text-primary small\"></i>
                            </div>
                            <span class=\"small\">";
            // line 265
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "contactPerson", [], "any", false, false, false, 265), "html", null, true);
            yield "</span>
                        </div>
                        <div class=\"d-flex align-items-center mb-2\">
                            <div class=\"bg-light rounded-circle p-2 me-2\" style=\"width: 32px; height: 32px; display: flex; align-items: center; justify-content: center;\">
                                <i class=\"fas fa-phone text-success small\"></i>
                            </div>
                            <span class=\"small\">";
            // line 271
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "phone", [], "any", false, false, false, 271), "html", null, true);
            yield "</span>
                            <a href=\"https://wa.me/";
            // line 272
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "phone", [], "any", false, false, false, 272), [" " => "", "-" => "", "+" => ""]), "html", null, true);
            yield "\" 
                               target=\"_blank\" 
                               class=\"ms-auto text-success\"
                               title=\"Discuter sur WhatsApp\">
                                <i class=\"fab fa-whatsapp fa-lg\"></i>
                            </a>
                        </div>
                        <div class=\"d-flex align-items-center mb-2\">
                            <div class=\"bg-light rounded-circle p-2 me-2\" style=\"width: 32px; height: 32px; display: flex; align-items: center; justify-content: center;\">
                                <i class=\"fas fa-envelope text-info small\"></i>
                            </div>
                            <span class=\"small text-truncate\">";
            // line 283
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "email", [], "any", false, false, false, 283), "html", null, true);
            yield "</span>
                        </div>
                        <div class=\"d-flex align-items-center\">
                            <div class=\"bg-light rounded-circle p-2 me-2\" style=\"width: 32px; height: 32px; display: flex; align-items: center; justify-content: center;\">
                                <i class=\"fas fa-map-marker-alt text-warning small\"></i>
                            </div>
                            <span class=\"small text-truncate\">";
            // line 289
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "adress", [], "any", false, false, false, 289)), "truncate", [35], "method", false, false, false, 289), "html", null, true);
            yield "</span>
                        </div>
                    </div>
                    <div class=\"d-flex justify-content-between gap-2 mt-3\">
                        <a href=\"";
            // line 293
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_supplier_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "id", [], "any", false, false, false, 293)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-info flex-fill\">
                            <i class=\"fas fa-eye me-1\"></i> 
                        </a>
                        <a href=\"";
            // line 296
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_supplier_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "id", [], "any", false, false, false, 296)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-warning flex-fill\">
                            <i class=\"fas fa-edit me-1\"></i> 
                        </a>
                        ";
            // line 299
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "subscriptionActive", [], "any", false, false, false, 299)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 300
                yield "                            <button type=\"button\" 
                                    class=\"btn btn-sm ";
                // line 301
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "isActive", [], "any", false, false, false, 301)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("btn-outline-danger") : ("btn-outline-success"));
                yield " flex-fill toggle-supplier-btn\"
                                    data-supplier-id=\"";
                // line 302
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "id", [], "any", false, false, false, 302), "html", null, true);
                yield "\"
                                    data-supplier-name=\"";
                // line 303
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "name", [], "any", false, false, false, 303), "html", null, true);
                yield "\"
                                    data-current-status=\"";
                // line 304
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "isActive", [], "any", false, false, false, 304)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : ("inactive"));
                yield "\"
                                    data-token=\"";
                // line 305
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle-status" . CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "id", [], "any", false, false, false, 305))), "html", null, true);
                yield "\"
                                    title=\"";
                // line 306
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "isActive", [], "any", false, false, false, 306)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
                yield "\">
                                <i class=\"fas ";
                // line 307
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "isActive", [], "any", false, false, false, 307)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-toggle-on") : ("fa-toggle-off"));
                yield "\"></i>
                            </button>
                        ";
            } else {
                // line 310
                yield "                            <span class=\"btn btn-sm btn-secondary disabled flex-fill\">
                                <i class=\"fas fa-ban\"></i>
                            </span>
                        ";
            }
            // line 314
            yield "                        ";
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "purchases", [], "any", false, false, false, 314)) == 0))) {
                // line 315
                yield "                            <button type=\"button\" 
                                    class=\"btn btn-sm btn-outline-danger flex-fill delete-supplier-btn\"
                                    data-supplier-id=\"";
                // line 317
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "id", [], "any", false, false, false, 317), "html", null, true);
                yield "\"
                                    data-supplier-name=\"";
                // line 318
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "name", [], "any", false, false, false, 318), "html", null, true);
                yield "\"
                                    title=\"Supprimer\">
                                <i class=\"fas fa-trash\"></i>
                            </button>
                        ";
            }
            // line 323
            yield "                    </div>
                </div>
            </div>
        </div>
        ";
            $context['_iterated'] = true;
        }
        // line 327
        if (!$context['_iterated']) {
            // line 328
            yield "        <div class=\"col-12\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-body text-center py-5\">
                    <i class=\"fas fa-truck fa-4x text-muted mb-3\"></i>
                    <h4 class=\"text-muted fw-light\">Aucun fournisseur trouvé</h4>
                    <p class=\"text-muted mb-4\">Modifiez vos filtres ou créez un nouveau fournisseur.</p>
                    <a href=\"";
            // line 334
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_supplier_index");
            yield "\" class=\"btn btn-outline-primary px-4\">
                        <i class=\"fas fa-undo me-2\"></i> Réinitialiser les filtres
                    </a>
                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['supplier'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 341
        yield "    </div>

    <!-- Pagination -->
    ";
        // line 344
        if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 344, $this->source); })()) > 1)) {
            // line 345
            yield "    <div class=\"d-flex justify-content-between align-items-center mt-4\">
        <div class=\"text-muted small\">
            Page ";
            // line 347
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 347, $this->source); })()), "html", null, true);
            yield " sur ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 347, $this->source); })()), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 347, $this->source); })()), "html", null, true);
            yield " résultats)
        </div>
        <nav aria-label=\"Pagination\">
            <ul class=\"pagination pagination-sm mb-0\">
                <li class=\"page-item ";
            // line 351
            yield ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 351, $this->source); })()) <= 1)) ? ("disabled") : (""));
            yield "\">
                    <a class=\"page-link\" href=\"";
            // line 352
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_supplier_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 352, $this->source); })()), "request", [], "any", false, false, false, 352), "query", [], "any", false, false, false, 352), "all", [], "any", false, false, false, 352), ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 352, $this->source); })()) - 1)])), "html", null, true);
            yield "\"><i class=\"fas fa-chevron-left\"></i></a>
                </li>
                ";
            // line 354
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 354, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 355
                yield "                    <li class=\"page-item ";
                yield ((($context["i"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 355, $this->source); })()))) ? ("active") : (""));
                yield "\">
                        <a class=\"page-link\" href=\"";
                // line 356
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_supplier_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 356, $this->source); })()), "request", [], "any", false, false, false, 356), "query", [], "any", false, false, false, 356), "all", [], "any", false, false, false, 356), ["page" => $context["i"]])), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "</a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 359
            yield "                <li class=\"page-item ";
            yield ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 359, $this->source); })()) >= (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 359, $this->source); })()))) ? ("disabled") : (""));
            yield "\">
                    <a class=\"page-link\" href=\"";
            // line 360
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_supplier_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 360, $this->source); })()), "request", [], "any", false, false, false, 360), "query", [], "any", false, false, false, 360), "all", [], "any", false, false, false, 360), ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 360, $this->source); })()) + 1)])), "html", null, true);
            yield "\"><i class=\"fas fa-chevron-right\"></i></a>
                </li>
            </ul>
        </nav>
    </div>
    ";
        }
        // line 366
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
        // line 378
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["quota"]) || array_key_exists("quota", $context) ? $context["quota"] : (function () { throw new RuntimeError('Variable "quota" does not exist.', 378, $this->source); })()), "html", null, true);
        yield " fournisseurs dans le quota.</h5>
                <p class=\"text-muted\">Pour ajouter de nouveaux fournisseurs, passez à un plan supérieur.</p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center\">
                <a href=\"";
        // line 382
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subscription_plans");
        yield "\" class=\"btn btn-warning btn-lg px-4\">
                    <i class=\"fas fa-arrow-up me-2\"></i> Voir les offres
                </a>
                <button type=\"button\" class=\"btn btn-outline-secondary btn-lg px-4\" data-bs-dismiss=\"modal\">Annuler</button>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"toggleSupplierModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-0 shadow\">
            <div class=\"modal-header bg-warning text-white border-0\">
                <h5 class=\"modal-title\">Confirmation</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <i class=\"fas fa-question-circle fa-4x text-primary mb-3\"></i>
                <p id=\"toggleSupplierMessage\" class=\"mb-0\"></p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center\">
                <button type=\"button\" class=\"btn btn-outline-secondary px-4\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"toggleSupplierForm\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" id=\"toggleSupplierToken\">
                    <button type=\"submit\" class=\"btn btn-warning px-4\">Confirmer</button>
                </form>
            </div>
        </div>
    </div>
</div>

";
        // line 413
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 414
            yield "<div class=\"modal fade\" id=\"deleteSupplierModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-0 shadow\">
            <div class=\"modal-header bg-danger text-white border-0\">
                <h5 class=\"modal-title\"><i class=\"fas fa-exclamation-triangle me-2\"></i> Confirmation</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <i class=\"fas fa-trash-alt fa-4x text-danger mb-3\"></i>
                <p id=\"deleteSupplierMessage\" class=\"mb-0\"></p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center\">
                <button type=\"button\" class=\"btn btn-outline-secondary px-4\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"deleteSupplierForm\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteSupplierCsrfToken\">
                    <button type=\"submit\" class=\"btn btn-danger px-4\">Supprimer</button>
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

    // line 438
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

        // line 439
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
.badge {
    font-weight: 500;
    letter-spacing: 0.3px;
}
@media (min-width: 992px) {
    .row-cols-lg-5 > .col {
        flex: 0 0 20%;
        max-width: 20%;
    }
}
@media (max-width: 768px) {
    .pagination {
        flex-wrap: wrap;
        justify-content: center;
    }
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 473
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

        // line 474
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
        // line 482
        if ((($tmp = (isset($context["quotaReached"]) || array_key_exists("quotaReached", $context) ? $context["quotaReached"] : (function () { throw new RuntimeError('Variable "quotaReached" does not exist.', 482, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 483
            yield "                new bootstrap.Modal(document.getElementById('quotaReachedModal')).show();
            ";
        } else {
            // line 485
            yield "                window.location.href = \"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_supplier_new");
            yield "\";
            ";
        }
        // line 487
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
        // line 510
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 511
            yield "    const deleteModal = new bootstrap.Modal(document.getElementById('deleteSupplierModal'));
    const deleteForm = document.getElementById('deleteSupplierForm');
    const deleteToken = document.getElementById('deleteSupplierCsrfToken');
    const deleteMessage = document.getElementById('deleteSupplierMessage');

    document.querySelectorAll('.delete-supplier-btn:not([disabled])').forEach(btn => {
        btn.addEventListener('click', function() {
            const id = this.dataset.supplierId;
            const name = this.dataset.supplierName;
            deleteMessage.innerHTML = `
                <div class=\"alert alert-warning mb-2 p-2\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i>Cette action est irréversible.
                </div>
                <p class=\"mb-0\">Supprimer le fournisseur <strong>\"\${name}\"</strong> ?</p>
            `;
            deleteForm.action = `/admin/supplier/\${id}`;
            deleteToken.value = '";
            // line 527
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete"), "html", null, true);
            yield "';
            deleteModal.show();
        });
    });
    ";
        }
        // line 532
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
        return array (  942 => 532,  934 => 527,  916 => 511,  914 => 510,  889 => 487,  883 => 485,  879 => 483,  877 => 482,  866 => 474,  853 => 473,  809 => 439,  796 => 438,  763 => 414,  761 => 413,  727 => 382,  720 => 378,  706 => 366,  697 => 360,  692 => 359,  681 => 356,  676 => 355,  672 => 354,  667 => 352,  663 => 351,  652 => 347,  648 => 345,  646 => 344,  641 => 341,  628 => 334,  620 => 328,  618 => 327,  610 => 323,  602 => 318,  598 => 317,  594 => 315,  591 => 314,  585 => 310,  579 => 307,  575 => 306,  571 => 305,  567 => 304,  563 => 303,  559 => 302,  555 => 301,  552 => 300,  550 => 299,  544 => 296,  538 => 293,  531 => 289,  522 => 283,  508 => 272,  504 => 271,  495 => 265,  484 => 257,  480 => 255,  474 => 251,  468 => 247,  466 => 246,  459 => 242,  455 => 241,  451 => 240,  444 => 235,  439 => 234,  434 => 231,  427 => 227,  423 => 225,  420 => 224,  409 => 215,  399 => 208,  395 => 207,  391 => 206,  380 => 198,  376 => 197,  372 => 196,  360 => 187,  328 => 158,  312 => 145,  296 => 132,  280 => 119,  264 => 106,  247 => 91,  237 => 87,  234 => 86,  230 => 85,  227 => 84,  217 => 80,  214 => 79,  209 => 78,  206 => 76,  196 => 69,  191 => 67,  185 => 63,  182 => 62,  173 => 55,  170 => 54,  162 => 49,  151 => 40,  148 => 39,  141 => 33,  137 => 31,  135 => 30,  129 => 29,  125 => 28,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/supplier/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Gestion des Fournisseurs - HMA Market{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
    <!-- En-tête avec quota et bouton d'ajout -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <h1 class=\"h3 mb-0 text-gray-800\">
                <i class=\"fas fa-truck me-2\"></i>Gestion des Fournisseurs
            </h1>
            <p class=\"text-muted mt-1\">Gérez vos fournisseurs et leurs coordonnées</p>
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
                        <small class=\"text-muted d-block\">Fournisseurs dans quota</small>
                        <h6 class=\"mb-0 {{ quotaReached ? 'text-danger' : 'text-success' }} fw-bold\">
                            {{ activeCount }} / {{ quota }}
                            {% if quota == 'Illimité' %}
                                <i class=\"fas fa-infinity text-info ms-1 small\"></i>
                            {% endif %}
                        </h6>
                    </div>
                </div>
            </div>

            {# Affichage du nombre de fournisseurs en attente (désactivés par quota) #}
            {% if subscriptionInactiveCount > 0 %}
            <div class=\"card bg-light border-0 shadow-sm p-2\">
                <div class=\"d-flex align-items-center\">
                    <div class=\"me-2\">
                        <span class=\"badge bg-warning p-2 rounded-circle\">
                            <i class=\"fas fa-clock fa-fw\"></i>
                        </span>
                    </div>
                    <div>
                        <small class=\"text-muted d-block\">En attente</small>
                        <h6 class=\"mb-0 fw-bold\">{{ subscriptionInactiveCount }}</h6>
                    </div>
                </div>
            </div>
            {% endif %}

            <a href=\"{{ path('app_admin_supplier_new') }}\" id=\"newSupplierBtn\" class=\"btn btn-primary shadow-sm\">
                <i class=\"fas fa-plus-circle me-2\"></i> Nouveau Fournisseur
            </a>
        </div>
    </div>

    {# Message si quota atteint #}
    {% if quotaReached and plan != 'premium' %}
    <div class=\"alert alert-warning alert-dismissible fade show shadow-sm\" role=\"alert\">
        <div class=\"d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <div>
                <i class=\"fas fa-exclamation-triangle me-2\"></i>
                <strong>Quota atteint !</strong> Vous avez utilisé vos {{ quota }} fournisseurs dans le quota.
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
            <div class=\"row g-3 row-cols-2 row-cols-md-4 row-cols-lg-5\" style=\"--bs-custom-col: 20%;\">
                <div class=\"col\">
                    <div class=\"stat-item p-3 bg-light rounded-3 h-100\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted text-uppercase small fw-bold\">Filtrés</span>
                                <h3 class=\"mb-0 fw-bold\">{{ totalFiltered }}</h3>
                            </div>
                            <div class=\"bg-primary p-2 rounded-3\">
                                <i class=\"fas fa-truck text-white fs-3\"></i>
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
                <i class=\"fas fa-filter text-primary me-2\"></i>Filtres avancés
            </h5>
        </div>
        <div class=\"card-body\">
            <form method=\"get\" class=\"row g-3\">
                <div class=\"col-lg-4 col-md-6\">
                    <label for=\"search\" class=\"form-label fw-semibold\">
                        <i class=\"fas fa-search text-primary me-1\"></i>Rechercher
                    </label>
                    <div class=\"input-group\">
                        <span class=\"input-group-text bg-light border-0\">
                            <i class=\"fas fa-search text-muted\"></i>
                        </span>
                        <input type=\"text\" name=\"search\" id=\"search\" value=\"{{ search }}\" 
                            class=\"form-control bg-light border-0\" placeholder=\"Nom, contact, email...\">
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <label for=\"status\" class=\"form-label fw-semibold\">
                        <i class=\"fas fa-toggle-on text-success me-1\"></i>Statut
                    </label>
                    <select name=\"status\" id=\"status\" class=\"form-select bg-light border-0\">
                        <option value=\"all\" {{ status == 'all' ? 'selected' : '' }}>Tous</option>
                        <option value=\"active\" {{ status == 'active' ? 'selected' : '' }}>Actifs</option>
                        <option value=\"inactive\" {{ status == 'inactive' ? 'selected' : '' }}>Inactifs</option>
                    </select>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <label for=\"sub_status\" class=\"form-label fw-semibold\">
                        <i class=\"fas fa-credit-card text-warning me-1\"></i>Abonnement
                    </label>
                    <select name=\"sub_status\" id=\"sub_status\" class=\"form-select bg-light border-0\">
                        <option value=\"all\" {{ subStatus == 'all' ? 'selected' : '' }}>Tous</option>
                        <option value=\"active\" {{ subStatus == 'active' ? 'selected' : '' }}>Actif</option>
                        <option value=\"inactive\" {{ subStatus == 'inactive' ? 'selected' : '' }}>Inactif</option>
                    </select>
                </div>
                <div class=\"col-lg-2 d-flex align-items-end gap-2\">
                    <button type=\"submit\" class=\"btn btn-primary w-100 py-2\">
                        <i class=\"fas fa-search me-1\"></i> Filtrer
                    </button>
                    <a href=\"{{ path('app_admin_supplier_index') }}\" class=\"btn btn-outline-secondary py-2\" title=\"Effacer\">
                        <i class=\"fas fa-undo\"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>

    {# Message informatif quand on filtre par abonnement inactif #}
    {% if subStatus == 'inactive' and subscriptionInactiveFiltered > 0 %}
        <div class=\"alert alert-info alert-dismissible fade show mb-4 shadow-sm\" role=\"alert\">
            <i class=\"fas fa-info-circle me-2\"></i>
            <strong>{{ subscriptionInactiveFiltered }} fournisseur(s)</strong> désactivés par abonnement.
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    {% endif %}

    <!-- Grille de fournisseurs -->
    <div class=\"row g-4\">
        {% for supplier in suppliers %}
        <div class=\"col-xl-3 col-lg-4 col-md-6\">
            <div class=\"card h-100 border-0 shadow-sm hover-card\">
                <div class=\"card-header bg-transparent border-0 pt-3 px-3\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <span class=\"badge {{ supplier.isActive ? 'bg-success' : 'bg-danger' }} rounded-pill px-3 py-2\">
                                <i class=\"fas {{ supplier.isActive ? 'fa-check-circle' : 'fa-pause-circle' }} me-1\"></i>
                                {{ supplier.isActive ? 'Actif' : 'Inactif' }}
                            </span>
                        </div>
                        <div>
                            {% if supplier.subscriptionActive %}
                                <span class=\"badge bg-info rounded-pill px-3 py-2\" title=\"Dans quota\">
                                    <i class=\"fas fa-database me-1\"></i>Quota
                                </span>
                            {% else %}
                                <span class=\"badge bg-warning rounded-pill px-3 py-2\" title=\"Hors quota\">
                                    <i class=\"fas fa-clock me-1\"></i>En attente
                                </span>
                            {% endif %}
                        </div>
                    </div>
                    <h5 class=\"card-title mt-2 mb-0 fw-bold text-truncate\">{{ supplier.name }}</h5>
                </div>
                <div class=\"card-body pt-2\">
                    <div class=\"mb-3\">
                        <div class=\"d-flex align-items-center mb-2\">
                            <div class=\"bg-light rounded-circle p-2 me-2\" style=\"width: 32px; height: 32px; display: flex; align-items: center; justify-content: center;\">
                                <i class=\"fas fa-user text-primary small\"></i>
                            </div>
                            <span class=\"small\">{{ supplier.contactPerson }}</span>
                        </div>
                        <div class=\"d-flex align-items-center mb-2\">
                            <div class=\"bg-light rounded-circle p-2 me-2\" style=\"width: 32px; height: 32px; display: flex; align-items: center; justify-content: center;\">
                                <i class=\"fas fa-phone text-success small\"></i>
                            </div>
                            <span class=\"small\">{{ supplier.phone }}</span>
                            <a href=\"https://wa.me/{{ supplier.phone|replace({' ': '', '-': '', '+': ''}) }}\" 
                               target=\"_blank\" 
                               class=\"ms-auto text-success\"
                               title=\"Discuter sur WhatsApp\">
                                <i class=\"fab fa-whatsapp fa-lg\"></i>
                            </a>
                        </div>
                        <div class=\"d-flex align-items-center mb-2\">
                            <div class=\"bg-light rounded-circle p-2 me-2\" style=\"width: 32px; height: 32px; display: flex; align-items: center; justify-content: center;\">
                                <i class=\"fas fa-envelope text-info small\"></i>
                            </div>
                            <span class=\"small text-truncate\">{{ supplier.email }}</span>
                        </div>
                        <div class=\"d-flex align-items-center\">
                            <div class=\"bg-light rounded-circle p-2 me-2\" style=\"width: 32px; height: 32px; display: flex; align-items: center; justify-content: center;\">
                                <i class=\"fas fa-map-marker-alt text-warning small\"></i>
                            </div>
                            <span class=\"small text-truncate\">{{ supplier.adress|u.truncate(35) }}</span>
                        </div>
                    </div>
                    <div class=\"d-flex justify-content-between gap-2 mt-3\">
                        <a href=\"{{ path('app_admin_supplier_show', {'id': supplier.id}) }}\" class=\"btn btn-sm btn-outline-info flex-fill\">
                            <i class=\"fas fa-eye me-1\"></i> 
                        </a>
                        <a href=\"{{ path('app_admin_supplier_edit', {'id': supplier.id}) }}\" class=\"btn btn-sm btn-outline-warning flex-fill\">
                            <i class=\"fas fa-edit me-1\"></i> 
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
                            <span class=\"btn btn-sm btn-secondary disabled flex-fill\">
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
                <div class=\"card-body text-center py-5\">
                    <i class=\"fas fa-truck fa-4x text-muted mb-3\"></i>
                    <h4 class=\"text-muted fw-light\">Aucun fournisseur trouvé</h4>
                    <p class=\"text-muted mb-4\">Modifiez vos filtres ou créez un nouveau fournisseur.</p>
                    <a href=\"{{ path('app_admin_supplier_index') }}\" class=\"btn btn-outline-primary px-4\">
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
                    <a class=\"page-link\" href=\"{{ path('app_admin_supplier_index', app.request.query.all|merge({'page': currentPage - 1})) }}\"><i class=\"fas fa-chevron-left\"></i></a>
                </li>
                {% for i in 1..totalPages %}
                    <li class=\"page-item {{ i == currentPage ? 'active' }}\">
                        <a class=\"page-link\" href=\"{{ path('app_admin_supplier_index', app.request.query.all|merge({'page': i})) }}\">{{ i }}</a>
                    </li>
                {% endfor %}
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
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-0 shadow\">
            <div class=\"modal-header bg-warning text-white border-0\">
                <h5 class=\"modal-title\"><i class=\"fas fa-exclamation-triangle me-2\"></i> Quota atteint</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <i class=\"fas fa-ban fa-4x text-warning mb-3\"></i>
                <h5>Vous avez atteint votre limite de {{ quota }} fournisseurs dans le quota.</h5>
                <p class=\"text-muted\">Pour ajouter de nouveaux fournisseurs, passez à un plan supérieur.</p>
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

<div class=\"modal fade\" id=\"toggleSupplierModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-0 shadow\">
            <div class=\"modal-header bg-warning text-white border-0\">
                <h5 class=\"modal-title\">Confirmation</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <i class=\"fas fa-question-circle fa-4x text-primary mb-3\"></i>
                <p id=\"toggleSupplierMessage\" class=\"mb-0\"></p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center\">
                <button type=\"button\" class=\"btn btn-outline-secondary px-4\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"toggleSupplierForm\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" id=\"toggleSupplierToken\">
                    <button type=\"submit\" class=\"btn btn-warning px-4\">Confirmer</button>
                </form>
            </div>
        </div>
    </div>
</div>

{% if is_granted('ROLE_ADMIN') %}
<div class=\"modal fade\" id=\"deleteSupplierModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-0 shadow\">
            <div class=\"modal-header bg-danger text-white border-0\">
                <h5 class=\"modal-title\"><i class=\"fas fa-exclamation-triangle me-2\"></i> Confirmation</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <i class=\"fas fa-trash-alt fa-4x text-danger mb-3\"></i>
                <p id=\"deleteSupplierMessage\" class=\"mb-0\"></p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center\">
                <button type=\"button\" class=\"btn btn-outline-secondary px-4\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"deleteSupplierForm\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteSupplierCsrfToken\">
                    <button type=\"submit\" class=\"btn btn-danger px-4\">Supprimer</button>
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
.badge {
    font-weight: 500;
    letter-spacing: 0.3px;
}
@media (min-width: 992px) {
    .row-cols-lg-5 > .col {
        flex: 0 0 20%;
        max-width: 20%;
    }
}
@media (max-width: 768px) {
    .pagination {
        flex-wrap: wrap;
        justify-content: center;
    }
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
                <div class=\"alert alert-warning mb-2 p-2\">
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
