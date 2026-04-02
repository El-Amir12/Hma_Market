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

/* admin/product/index.html.twig */
class __TwigTemplate_382d3af7dd9492953eefa64ddec200c8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/product/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/product/index.html.twig"));

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

        yield "Gestion des Produits - HMA Market";
        
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
    <!-- Header avec quota -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap\">
        <div>
            <h1 class=\"h3 mb-1 text-gray-800 fw-bold\">
                <i class=\"fas fa-boxes me-2\"></i>Catalogue des Produits
            </h1>
            <p class=\"text-muted mb-0\">Gérez votre inventaire et catalogue</p>
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
                        <small class=\"text-muted\">Produits actifs</small>
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
                    </div>
                </div>
            </div>

            <button type=\"button\" class=\"btn btn-outline-primary\" id=\"scan-barcode-btn\" title=\"Rechercher par code-barres\">
                <i class=\"fas fa-barcode me-2\"></i> Scanner
            </button>

            <a href=\"#\" id=\"newProductBtn\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus-circle me-2\"></i> Nouveau Produit
            </a>
        </div>
    </div>

    ";
        // line 48
        yield "    ";
        if ((($tmp = (isset($context["quotaReached"]) || array_key_exists("quotaReached", $context) ? $context["quotaReached"] : (function () { throw new RuntimeError('Variable "quotaReached" does not exist.', 48, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 49
            yield "    <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
        <div class=\"d-flex justify-content-between align-items-center\">
            <div>
                <i class=\"fas fa-exclamation-triangle me-2\"></i>
                <strong>Quota atteint !</strong> Vous avez utilisé vos ";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["quota"]) || array_key_exists("quota", $context) ? $context["quota"] : (function () { throw new RuntimeError('Variable "quota" does not exist.', 53, $this->source); })()), "html", null, true);
            yield " produits actifs.
            </div>
            <a href=\"";
            // line 55
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subscription_plans");
            yield "\" class=\"btn btn-warning btn-sm\">
                <i class=\"fas fa-arrow-up me-1\"></i> Voir les offres
            </a>
        </div>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    </div>
    ";
        }
        // line 62
        yield "
    <!-- Statistiques filtrées -->
    <div class=\"card shadow mb-4\">
        <div class=\"card-header bg-white py-3\">
            <h5 class=\"mb-0\"><i class=\"fas fa-chart-pie me-2\"></i>Statistiques selon les filtres</h5>
        </div>
        <div class=\"card-body\">
            <div class=\"row mb-3\">
                <div class=\"col-md-2 col-sm-4 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-primary text-uppercase small fw-bold\">Total</span>
                                <h3 class=\"mb-0\">";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalFiltered"]) || array_key_exists("totalFiltered", $context) ? $context["totalFiltered"] : (function () { throw new RuntimeError('Variable "totalFiltered" does not exist.', 75, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-box fa-2x text-primary opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-2 col-sm-4 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-success text-uppercase small fw-bold\">Actifs</span>
                                <h3 class=\"mb-0\">";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activeFiltered"]) || array_key_exists("activeFiltered", $context) ? $context["activeFiltered"] : (function () { throw new RuntimeError('Variable "activeFiltered" does not exist.', 86, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-check-circle fa-2x text-success opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-2 col-sm-4 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-danger text-uppercase small fw-bold\">Inactifs</span>
                                <h3 class=\"mb-0\">";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["inactiveFiltered"]) || array_key_exists("inactiveFiltered", $context) ? $context["inactiveFiltered"] : (function () { throw new RuntimeError('Variable "inactiveFiltered" does not exist.', 97, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-pause-circle fa-2x text-danger opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-2 col-sm-4 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-warning text-uppercase small fw-bold\">Stock faible</span>
                                <h3 class=\"mb-0\">";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["lowStockFiltered"]) || array_key_exists("lowStockFiltered", $context) ? $context["lowStockFiltered"] : (function () { throw new RuntimeError('Variable "lowStockFiltered" does not exist.', 108, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-exclamation-triangle fa-2x text-warning opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-2 col-sm-4 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-info text-uppercase small fw-bold\">Périssables</span>
                                <h3 class=\"mb-0\">";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["perishableFiltered"]) || array_key_exists("perishableFiltered", $context) ? $context["perishableFiltered"] : (function () { throw new RuntimeError('Variable "perishableFiltered" does not exist.', 119, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-calendar-alt fa-2x text-info opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-2 col-sm-4 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-secondary text-uppercase small fw-bold\">Non périss.</span>
                                <h3 class=\"mb-0\">";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nonPerishableFiltered"]) || array_key_exists("nonPerishableFiltered", $context) ? $context["nonPerishableFiltered"] : (function () { throw new RuntimeError('Variable "nonPerishableFiltered" does not exist.', 130, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-calendar-check fa-2x text-secondary opacity-50\"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center mb-2\">
                            <span class=\"text-dark text-uppercase small fw-bold\">Abonnement</span>
                            <i class=\"fas fa-credit-card fa-2x text-dark opacity-50\"></i>
                        </div>
                        <div class=\"d-flex justify-content-between\">
                            <div>
                                <small class=\"text-info d-block\">Actif</small>
                                <h3 class=\"mb-0\">";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subscriptionActiveFiltered"]) || array_key_exists("subscriptionActiveFiltered", $context) ? $context["subscriptionActiveFiltered"] : (function () { throw new RuntimeError('Variable "subscriptionActiveFiltered" does not exist.', 148, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <div class=\"text-end\">
                                <small class=\"text-secondary d-block\">Inactif</small>
                                <h3 class=\"mb-0\">";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subscriptionInactiveFiltered"]) || array_key_exists("subscriptionInactiveFiltered", $context) ? $context["subscriptionInactiveFiltered"] : (function () { throw new RuntimeError('Variable "subscriptionInactiveFiltered" does not exist.', 152, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filtres -->
    <div class=\"card shadow mb-4\">
        <div class=\"card-body\">
            <form method=\"get\" id=\"filter-form\">
                <div class=\"row g-3 align-items-end mb-3\">
                    <div class=\"col-md-3\">
                        <label for=\"search\" class=\"form-label fw-bold\">Rechercher</label>
                        <input type=\"text\" name=\"search\" id=\"search\" value=\"";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 168, $this->source); })()), "html", null, true);
        yield "\" 
                            class=\"form-control\" placeholder=\"Nom, code-barres...\">
                    </div>
                    <div class=\"col-md-3\">
                        <label for=\"category\" class=\"form-label fw-bold\">Catégorie</label>
                        <select name=\"category\" id=\"category\" class=\"form-select\">
                            <option value=\"0\">Toutes</option>
                            ";
        // line 175
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 175, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 176
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 176), "html", null, true);
            yield "\" ";
            yield ((((isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 176, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 176))) ? ("selected") : (""));
            yield ">
                                    ";
            // line 177
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, CoreExtension::getAttribute($this->env, $this->source, $context["category"], "level", [], "any", false, false, false, 177)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                yield "&nbsp;&nbsp;";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 178
            yield "                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 178), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "productCount", [], "any", false, false, false, 178), "html", null, true);
            yield ")
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        yield "                        </select>
                    </div>
                    <div class=\"col-md-3\">
                        <label for=\"status\" class=\"form-label fw-bold\">Statut</label>
                        <select name=\"status\" id=\"status\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"active\" ";
        // line 187
        yield ((((isset($context["selectedStatus"]) || array_key_exists("selectedStatus", $context) ? $context["selectedStatus"] : (function () { throw new RuntimeError('Variable "selectedStatus" does not exist.', 187, $this->source); })()) == "active")) ? ("selected") : (""));
        yield ">Actifs</option>
                            <option value=\"inactive\" ";
        // line 188
        yield ((((isset($context["selectedStatus"]) || array_key_exists("selectedStatus", $context) ? $context["selectedStatus"] : (function () { throw new RuntimeError('Variable "selectedStatus" does not exist.', 188, $this->source); })()) == "inactive")) ? ("selected") : (""));
        yield ">Inactifs</option>
                            <option value=\"low-stock\" ";
        // line 189
        yield ((((isset($context["selectedStatus"]) || array_key_exists("selectedStatus", $context) ? $context["selectedStatus"] : (function () { throw new RuntimeError('Variable "selectedStatus" does not exist.', 189, $this->source); })()) == "low-stock")) ? ("selected") : (""));
        yield ">Stock faible</option>
                        </select>
                    </div>
                    <div class=\"col-md-3\">
                        <label for=\"expiry_type\" class=\"form-label fw-bold\">Type</label>
                        <select name=\"expiry_type\" id=\"expiry_type\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"perishable\" ";
        // line 196
        yield ((((isset($context["selectedExpiryType"]) || array_key_exists("selectedExpiryType", $context) ? $context["selectedExpiryType"] : (function () { throw new RuntimeError('Variable "selectedExpiryType" does not exist.', 196, $this->source); })()) == "perishable")) ? ("selected") : (""));
        yield ">Périssables</option>
                            <option value=\"non-perishable\" ";
        // line 197
        yield ((((isset($context["selectedExpiryType"]) || array_key_exists("selectedExpiryType", $context) ? $context["selectedExpiryType"] : (function () { throw new RuntimeError('Variable "selectedExpiryType" does not exist.', 197, $this->source); })()) == "non-perishable")) ? ("selected") : (""));
        yield ">Non périssables</option>
                        </select>
                    </div>
                </div>

                <div class=\"row g-3 align-items-end mb-3\">
                    <div class=\"col-md-5\">
                        <label for=\"subscription_status\" class=\"form-label fw-bold\">Abonnement</label>
                        <select name=\"subscription_status\" id=\"subscription_status\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"active\" ";
        // line 207
        yield ((((isset($context["selectedSubscriptionStatus"]) || array_key_exists("selectedSubscriptionStatus", $context) ? $context["selectedSubscriptionStatus"] : (function () { throw new RuntimeError('Variable "selectedSubscriptionStatus" does not exist.', 207, $this->source); })()) == "active")) ? ("selected") : (""));
        yield ">Actif</option>
                            <option value=\"inactive\" ";
        // line 208
        yield ((((isset($context["selectedSubscriptionStatus"]) || array_key_exists("selectedSubscriptionStatus", $context) ? $context["selectedSubscriptionStatus"] : (function () { throw new RuntimeError('Variable "selectedSubscriptionStatus" does not exist.', 208, $this->source); })()) == "inactive")) ? ("selected") : (""));
        yield ">Inactif</option>
                        </select>
                    </div>
                    <div class=\"col-md-5\">
                        <label for=\"unit\" class=\"form-label fw-bold\">Unité de mesure</label>
                        ";
        // line 213
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["units"]) || array_key_exists("units", $context) ? $context["units"] : (function () { throw new RuntimeError('Variable "units" does not exist.', 213, $this->source); })()))) {
            // line 214
            yield "                            <div class=\"alert alert-info alert-sm py-1 px-2 mb-0\">
                                <i class=\"fas fa-info-circle me-1\"></i> Aucune unité enregistrée
                            </div>
                        ";
        } else {
            // line 218
            yield "                            <select name=\"unit\" id=\"unit\" class=\"form-select\">
                                <option value=\"\">Toutes</option>
                                ";
            // line 220
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["units"]) || array_key_exists("units", $context) ? $context["units"] : (function () { throw new RuntimeError('Variable "units" does not exist.', 220, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["unit"]) {
                // line 221
                yield "                                    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["unit"], "html", null, true);
                yield "\" ";
                yield ((((isset($context["selectedUnit"]) || array_key_exists("selectedUnit", $context) ? $context["selectedUnit"] : (function () { throw new RuntimeError('Variable "selectedUnit" does not exist.', 221, $this->source); })()) == $context["unit"])) ? ("selected") : (""));
                yield ">
                                        ";
                // line 222
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["unit"], "html", null, true);
                yield "
                                    </option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['unit'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 225
            yield "                            </select>
                        ";
        }
        // line 227
        yield "                    </div>
                    <div class=\"col-md-2 d-flex gap-2\">
                        <button type=\"submit\" class=\"btn btn-primary flex-fill\">
                            <i class=\"fas fa-search me-1\"></i> Filtrer
                        </button>
                        <a href=\"";
        // line 232
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_index");
        yield "\" class=\"btn btn-outline-secondary flex-fill\">
                            <i class=\"fas fa-undo\"></i> Effacer
                        </a>
                    </div>
                </div>

                <div class=\"row mt-3\">
                    <div class=\"col-12\">
                        <button type=\"button\" class=\"btn btn-outline-info\" id=\"toggleExtraFiltersBtn\">
                            <i class=\"fas fa-sliders-h me-1\"></i> Autres filtres
                        </button>
                    </div>
                </div>

                <div id=\"extraFilters\" style=\"display: none;\" class=\"row g-3 mt-2\">
                    <div class=\"col-md-4\">
                        <label for=\"dosage\" class=\"form-label fw-bold\">Dosage</label>
                        <input type=\"text\" name=\"dosage\" id=\"dosage\" value=\"";
        // line 249
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dosage"]) || array_key_exists("dosage", $context) ? $context["dosage"] : (function () { throw new RuntimeError('Variable "dosage" does not exist.', 249, $this->source); })()), "html", null, true);
        yield "\" 
                            class=\"form-control\" placeholder=\"Ex: 500mg\">
                    </div>
                    <div class=\"col-md-4\">
                        <label for=\"form\" class=\"form-label fw-bold\">Forme</label>
                        <input type=\"text\" name=\"form\" id=\"form\" value=\"";
        // line 254
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 254, $this->source); })()), "html", null, true);
        yield "\" 
                            class=\"form-control\" placeholder=\"Ex: comprimé\">
                    </div>
                    <div class=\"col-md-4\">
                        <label for=\"promotion\" class=\"form-label fw-bold\">Promotion</label>
                        <select name=\"promotion\" id=\"promotion\" class=\"form-select\">
                            <option value=\"\">Toutes</option>
                            ";
        // line 261
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 261, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
            // line 262
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 262), "html", null, true);
            yield "\" ";
            yield ((((isset($context["selectedPromotion"]) || array_key_exists("selectedPromotion", $context) ? $context["selectedPromotion"] : (function () { throw new RuntimeError('Variable "selectedPromotion" does not exist.', 262, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 262))) ? ("selected") : (""));
            yield ">
                                    ";
            // line 263
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "name", [], "any", false, false, false, 263), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "type", [], "any", false, false, false, 263), "html", null, true);
            yield ")
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['promotion'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 266
        yield "                        </select>
                    </div>
                    ";
        // line 268
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 268, $this->source); })()) == "pharmacy")) {
            // line 269
            yield "                    <div class=\"col-md-4 d-flex align-items-end\">
                        <div class=\"form-check mb-2\">
                            <input type=\"checkbox\" name=\"prescription_required\" id=\"prescription_required\" 
                                class=\"form-check-input\" value=\"1\" ";
            // line 272
            yield (((($tmp = (isset($context["prescriptionRequired"]) || array_key_exists("prescriptionRequired", $context) ? $context["prescriptionRequired"] : (function () { throw new RuntimeError('Variable "prescriptionRequired" does not exist.', 272, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
            yield ">
                            <label class=\"form-check-label\" for=\"prescription_required\">
                                Prescription obligatoire
                            </label>
                        </div>
                    </div>
                    ";
        }
        // line 279
        yield "                </div>
            </form>
        </div>
    </div>

    <!-- Grille de produits -->
    <div class=\"row g-3\">
        ";
        // line 286
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 286, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 287
            yield "        <div class=\"col-xl-3 col-lg-4 col-md-6\">
            <div class=\"card product-card h-100 shadow-sm\">
                <div class=\"product-image-container position-relative\">
                    ";
            // line 290
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 290) && (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 290) != "default-product.png"))) {
                // line 291
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 291))), "html", null, true);
                yield "\" 
                             alt=\"";
                // line 292
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 292), "html", null, true);
                yield "\" 
                             class=\"card-img-top product-image\">
                    ";
            } else {
                // line 295
                yield "                        <div class=\"product-image-placeholder\">
                            <i class=\"fas fa-box fa-4x text-muted\"></i>
                        </div>
                    ";
            }
            // line 299
            yield "
                    <!-- Badges de statut superposés (en haut à gauche) -->
                    <div class=\"position-absolute top-0 start-0 p-2\">
                        <div class=\"d-flex flex-column gap-1\">
                            <span class=\"badge ";
            // line 303
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "isActive", [], "any", false, false, false, 303)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-danger"));
            yield "\">
                                ";
            // line 304
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "isActive", [], "any", false, false, false, 304)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Inactif"));
            yield "
                            </span>
                            ";
            // line 306
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["product"], "subscriptionActive", [], "any", false, false, false, 306)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 307
                yield "                                <span class=\"badge bg-warning text-dark\">Hors quota</span>
                            ";
            }
            // line 309
            yield "                        </div>
                    </div>
                </div>

                <div class=\"card-body d-flex flex-column\">
                    <!-- Titre avec bouton burger à droite -->
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <h5 class=\"card-title text-truncate mb-0\">
                            ";
            // line 317
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 317), "html", null, true);
            yield "
                            <small class=\"text-muted ms-1\">
                                <i class=\"fas fa-weight-hanging me-1\"></i>";
            // line 319
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "unit", [], "any", true, true, false, 319)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "unit", [], "any", false, false, false, 319), "pièce")) : ("pièce")), "html", null, true);
            yield "
                            </small>
                        </h5>
                        <div class=\"dropdown ms-2\">
                            <button class=\"btn btn-sm btn-light\" type=\"button\" data-bs-toggle=\"dropdown\">
                                <i class=\"fas fa-bars\"></i>
                            </button>
                            <ul class=\"dropdown-menu dropdown-menu-end\">
                                <li>
                                    <a class=\"dropdown-item\" href=\"";
            // line 328
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 328)]), "html", null, true);
            yield "\">
                                        <i class=\"fas fa-eye me-2\"></i> Voir
                                    </a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item\" href=\"";
            // line 333
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 333)]), "html", null, true);
            yield "\">
                                        <i class=\"fas fa-edit me-2\"></i> Modifier
                                    </a>
                                </li>
                                <li>
                                    <button type=\"button\" 
                                            class=\"dropdown-item toggle-status-btn\"
                                            data-product-id=\"";
            // line 340
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 340), "html", null, true);
            yield "\"
                                            data-product-name=\"";
            // line 341
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 341), "html", null, true);
            yield "\"
                                            data-is-active=\"";
            // line 342
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "isActive", [], "any", false, false, false, 342)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("0"));
            yield "\"
                                            data-token=\"";
            // line 343
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle-status" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 343))), "html", null, true);
            yield "\">
                                        <i class=\"fas ";
            // line 344
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "isActive", [], "any", false, false, false, 344)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-toggle-on") : ("fa-toggle-off"));
            yield " me-2\"></i>
                                        ";
            // line 345
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "isActive", [], "any", false, false, false, 345)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
            yield "
                                    </button>
                                </li>
                                <li><hr class=\"dropdown-divider\"></li>
                                <li>
                                    ";
            // line 350
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 351
                yield "                                        <button type=\"button\" 
                                                class=\"dropdown-item text-danger delete-product-btn\"
                                                data-product-id=\"";
                // line 353
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 353), "html", null, true);
                yield "\"
                                                data-product-name=\"";
                // line 354
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 354), "html", null, true);
                yield "\"
                                                data-token=\"";
                // line 355
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 355))), "html", null, true);
                yield "\"
                                                ";
                // line 356
                if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "purchaseItems", [], "any", false, false, false, 356)) > 0) || (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockBatches", [], "any", false, false, false, 356)) > 0))) {
                    yield "disabled";
                }
                // line 357
                yield "                                                title=\"Supprimer\">
                                            <i class=\"fas fa-trash me-2\"></i> Supprimer
                                        </button>
                                    ";
            }
            // line 361
            yield "                                </li>
                            </ul>
                        </div>
                    </div>

                    <p class=\"text-muted small mb-2\">
                        <i class=\"fas fa-barcode me-1\"></i>";
            // line 367
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "barcode", [], "any", false, false, false, 367), "html", null, true);
            yield "
                    </p>
                    <p class=\"text-muted small mb-2\">
                        Catégorie :
                        ";
            // line 371
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 371)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 372
                yield "                            <i class=\"fas fa-tag me-1\"></i>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 372), "name", [], "any", false, false, false, 372), "html", null, true);
                yield "
                        ";
            } else {
                // line 374
                yield "                            <i class=\"fas fa-question-circle me-1\"></i>Non catégorisé
                        ";
            }
            // line 376
            yield "                    </p>

                    <!-- Prix selon type d'entreprise -->
                    ";
            // line 379
            if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 379, $this->source); })()) != "restaurant")) {
                // line 380
                yield "                    <div class=\"row g-0 mb-2\">
                        <div class=\"col-6\">
                            <small class=\"text-muted d-block\">Prix vente</small>
                            <span class=\"fw-bold text-success\">
                                ";
                // line 384
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "salePrice", [], "any", false, false, false, 384), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "hmaService", [], "any", false, false, false, 384)), "html", null, true);
                yield "
                            </span>
                        </div>
                        <div class=\"col-6 text-end\">
                            <small class=\"text-muted d-block\">Prix achat</small>
                            <span class=\"fw-bold text-primary\">
                                ";
                // line 390
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "purchasePrice", [], "any", false, false, false, 390), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "hmaService", [], "any", false, false, false, 390)), "html", null, true);
                yield "
                            </span>
                        </div>
                    </div>

                    ";
                // line 395
                $context["margin"] = (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "salePrice", [], "any", false, false, false, 395) - CoreExtension::getAttribute($this->env, $this->source, $context["product"], "purchasePrice", [], "any", false, false, false, 395));
                // line 396
                yield "                    ";
                $context["marginPercentage"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "purchasePrice", [], "any", false, false, false, 396) > 0)) ? (Twig\Extension\CoreExtension::round((((isset($context["margin"]) || array_key_exists("margin", $context) ? $context["margin"] : (function () { throw new RuntimeError('Variable "margin" does not exist.', 396, $this->source); })()) / CoreExtension::getAttribute($this->env, $this->source, $context["product"], "purchasePrice", [], "any", false, false, false, 396)) * 100), 1)) : (0));
                // line 397
                yield "                    <div class=\"d-flex justify-content-between align-items-center mb-2 small\">
                        <span class=\"text-muted\">Marge</span>
                        <span class=\"badge ";
                // line 399
                yield ((((isset($context["marginPercentage"]) || array_key_exists("marginPercentage", $context) ? $context["marginPercentage"] : (function () { throw new RuntimeError('Variable "marginPercentage" does not exist.', 399, $this->source); })()) >= 50)) ? ("bg-success") : (((((isset($context["marginPercentage"]) || array_key_exists("marginPercentage", $context) ? $context["marginPercentage"] : (function () { throw new RuntimeError('Variable "marginPercentage" does not exist.', 399, $this->source); })()) >= 20)) ? ("bg-warning text-dark") : ("bg-danger"))));
                yield "\">
                            ";
                // line 400
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency((isset($context["margin"]) || array_key_exists("margin", $context) ? $context["margin"] : (function () { throw new RuntimeError('Variable "margin" does not exist.', 400, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "hmaService", [], "any", false, false, false, 400)), "html", null, true);
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["marginPercentage"]) || array_key_exists("marginPercentage", $context) ? $context["marginPercentage"] : (function () { throw new RuntimeError('Variable "marginPercentage" does not exist.', 400, $this->source); })()), "html", null, true);
                yield "%)
                        </span>
                    </div>
                    ";
            } else {
                // line 404
                yield "                    <div class=\"row g-0 mb-2\">
                        <div class=\"col-12\">
                            <small class=\"text-muted d-block\">Prix d'achat</small>
                            <span class=\"fw-bold text-primary\">
                                ";
                // line 408
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "purchasePrice", [], "any", false, false, false, 408), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "hmaService", [], "any", false, false, false, 408)), "html", null, true);
                yield "
                            </span>
                        </div>
                    </div>
                    ";
            }
            // line 413
            yield "
                    <!-- Stock : quantité à gauche, min à droite avec unité -->
                    <div class=\"row g-0 mb-2\">
                        <div class=\"col-6\">
                            <small class=\"text-muted d-block\">Stock</small>
                            <span class=\"fw-bold\">";
            // line 418
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockQuantity", [], "any", false, false, false, 418), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "unit", [], "any", true, true, false, 418)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "unit", [], "any", false, false, false, 418), "pièce")) : ("pièce")), "html", null, true);
            yield "</span>
                        </div>
                        <div class=\"col-6 text-end\">
                            <small class=\"text-muted d-block\">Stock min</small>
                            <span class=\"fw-bold\">";
            // line 422
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "minQuantity", [], "any", false, false, false, 422), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "unit", [], "any", true, true, false, 422)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "unit", [], "any", false, false, false, 422), "pièce")) : ("pièce")), "html", null, true);
            yield "</span>
                        </div>
                    </div>

                    ";
            // line 426
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "dosage", [], "any", false, false, false, 426) || CoreExtension::getAttribute($this->env, $this->source, $context["product"], "form", [], "any", false, false, false, 426))) {
                // line 427
                yield "                        <div class=\"small text-muted mb-2\">
                            ";
                // line 428
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "dosage", [], "any", false, false, false, 428)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<span class=\"me-2\"><i class=\"fas fa-flask me-1\"></i>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "dosage", [], "any", false, false, false, 428), "html", null, true);
                    yield "</span>";
                }
                // line 429
                yield "                            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "form", [], "any", false, false, false, 429)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<span><i class=\"fas fa-pills me-1\"></i>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "form", [], "any", false, false, false, 429), "html", null, true);
                    yield "</span>";
                }
                // line 430
                yield "                        </div>
                    ";
            }
            // line 432
            yield "
                    <!-- Boutons secondaires alignés sur une ligne -->
                    <div class=\"d-flex gap-1 mt-auto\">
                        <a href=\"";
            // line 435
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_index", ["productId" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 435)]), "html", null, true);
            yield "\" 
                           class=\"btn btn-sm btn-outline-info flex-fill\" title=\"Lots de stock\">
                            <i class=\"fas fa-boxes\"></i>
                        </a>
                        <a href=\"#\" 
                           class=\"btn btn-sm btn-outline-primary flex-fill\" title=\"Mouvements de stock\">
                            <i class=\"fas fa-exchange-alt\"></i>
                        </a>
                        <a href=\"#\" 
                           class=\"btn btn-sm btn-outline-warning flex-fill\" title=\"Promotions\">
                            <i class=\"fas fa-tags\"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        ";
            $context['_iterated'] = true;
        }
        // line 451
        if (!$context['_iterated']) {
            // line 452
            yield "        <div class=\"col-12\">
            <div class=\"card shadow\">
                <div class=\"card-body text-center py-5\">
                    <i class=\"fas fa-box-open fa-4x text-muted mb-3\"></i>
                    <h4 class=\"text-muted\">Aucun produit trouvé</h4>
                    <a href=\"";
            // line 457
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_new");
            yield "\" class=\"btn btn-primary mt-3\">
                        <i class=\"fas fa-plus me-2\"></i> Ajouter un produit
                    </a>
                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 464
        yield "    </div>

    <!-- Pagination -->
    ";
        // line 467
        if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 467, $this->source); })()) > 1)) {
            // line 468
            yield "    <nav aria-label=\"Pagination\" class=\"mt-4\">
        <ul class=\"pagination justify-content-center\">
            ";
            // line 470
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 470, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 471
                yield "                <li class=\"page-item ";
                yield ((($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 471, $this->source); })()))) ? ("active") : (""));
                yield "\">
                    <a class=\"page-link\" href=\"";
                // line 472
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 472, $this->source); })()), "request", [], "any", false, false, false, 472), "query", [], "any", false, false, false, 472), "all", [], "any", false, false, false, 472), ["page" => $context["page"]])), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                yield "</a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 475
            yield "        </ul>
    </nav>
    ";
        }
        // line 478
        yield "</div>

<!-- Modale quota atteint pour nouveau produit -->
<div class=\"modal fade\" id=\"quotaReachedModal\" tabindex=\"-1\">
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
        // line 492
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["quota"]) || array_key_exists("quota", $context) ? $context["quota"] : (function () { throw new RuntimeError('Variable "quota" does not exist.', 492, $this->source); })()), "html", null, true);
        yield " produits actifs.</h5>
                <p class=\"text-muted\">Pour ajouter de nouveaux produits, passez à un plan supérieur.</p>
            </div>
            <div class=\"modal-footer justify-content-center\">
                <a href=\"";
        // line 496
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subscription_plans");
        yield "\" class=\"btn btn-warning btn-lg px-4\">
                    <i class=\"fas fa-arrow-up me-2\"></i> Voir les offres
                </a>
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
            </div>
        </div>
    </div>
</div>

<!-- Scanner Modal -->
<div class=\"modal fade\" id=\"scannerModal\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-barcode me-2\"></i> Scanner un code-barres
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <input type=\"text\" id=\"scannerInput\" class=\"form-control form-control-lg\" placeholder=\"Scannez ou saisissez...\">
                <div class=\"form-text mt-2\">
                    <i class=\"fas fa-info-circle me-1\"></i>
                    Utilisez votre lecteur de code-barres ou saisissez manuellement.
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-primary\" id=\"scanSubmit\">Rechercher</button>
            </div>
        </div>
    </div>
</div>

<!-- Modales pour toggle et suppression -->
<div class=\"modal fade\" id=\"toggleStatusModal\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"toggleStatusTitle\"></h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p id=\"toggleStatusMessage\"></p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"toggleStatusForm\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" id=\"toggleStatusToken\">
                    <button type=\"submit\" class=\"btn\" id=\"toggleStatusBtn\"></button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header border-0\">
                <h5 class=\"modal-title text-danger\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Confirmation
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p id=\"deleteMessage\"></p>
            </div>
            <div class=\"modal-footer border-0\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"deleteForm\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteToken\">
                    <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
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

    // line 576
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

        // line 577
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
.product-card {
    transition: transform 0.2s, box-shadow 0.2s;
    border: 1px solid transparent;
}
.product-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.15) !important;
    border-color: #dee2e6;
}
.product-image-container {
    position: relative;
    height: 160px;
    overflow: hidden;
    border-radius: 8px 8px 0 0;
}
.product-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.product-image-placeholder {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
}
.stat-item {
    transition: transform 0.2s;
}
.stat-item:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}
#extraFilters {
    transition: all 0.3s ease;
}
@media (max-width: 576px) {
    .btn-sm {
        font-size: 0.75rem;
        padding: 0.25rem 0.2rem;
    }
}
</style>
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
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Nouveau produit avec vérification quota
    const newProductBtn = document.getElementById('newProductBtn');
    if (newProductBtn) {
        newProductBtn.addEventListener('click', function(e) {
            e.preventDefault();
            ";
        // line 635
        if ((($tmp = (isset($context["quotaReached"]) || array_key_exists("quotaReached", $context) ? $context["quotaReached"] : (function () { throw new RuntimeError('Variable "quotaReached" does not exist.', 635, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 636
            yield "                new bootstrap.Modal(document.getElementById('quotaReachedModal')).show();
            ";
        } else {
            // line 638
            yield "                window.location.href = \"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_new");
            yield "\";
            ";
        }
        // line 640
        yield "        });
    }

    // Scanner modal
    const scanBtn = document.getElementById('scan-barcode-btn');
    const scannerModalEl = document.getElementById('scannerModal');
    if (scanBtn && scannerModalEl) {
        const scannerModal = new bootstrap.Modal(scannerModalEl);
        const scannerInput = document.getElementById('scannerInput');
        const scanSubmit = document.getElementById('scanSubmit');

        scanBtn.addEventListener('click', function() {
            scannerModal.show();
            if (scannerInput) {
                scannerInput.focus();
                scannerInput.value = '';
            }
        });

        if (scanSubmit && scannerInput) {
            scanSubmit.addEventListener('click', function() {
                const barcode = scannerInput.value.trim();
                if (barcode) {
                    const url = new URL(window.location);
                    url.searchParams.set('search', barcode);
                    url.searchParams.set('page', '1');
                    window.location.href = url.toString();
                }
            });

            scannerInput.addEventListener('keydown', function(e) {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    scanSubmit.click();
                }
            });
        }
    }

    // Toggle status modal
    const toggleModal = new bootstrap.Modal(document.getElementById('toggleStatusModal'));
    const toggleTitle = document.getElementById('toggleStatusTitle');
    const toggleMessage = document.getElementById('toggleStatusMessage');
    const toggleForm = document.getElementById('toggleStatusForm');
    const toggleToken = document.getElementById('toggleStatusToken');
    const toggleBtn = document.getElementById('toggleStatusBtn');

    document.querySelectorAll('.toggle-status-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const productId = this.dataset.productId;
            const productName = this.dataset.productName;
            const isActive = this.dataset.isActive === '1';
            toggleTitle.textContent = isActive ? 'Désactiver le produit' : 'Activer le produit';
            toggleMessage.textContent = `Êtes-vous sûr de vouloir \${isActive ? 'désactiver' : 'activer'} \"\${productName}\" ?`;
            toggleForm.action = `/admin/product/\${productId}/toggle-status`;
            toggleToken.value = this.dataset.token;
            toggleBtn.className = isActive ? 'btn btn-danger' : 'btn btn-success';
            toggleBtn.textContent = isActive ? 'Désactiver' : 'Activer';
            toggleModal.show();
        });
    });

    // Delete modal
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
    const deleteMessage = document.getElementById('deleteMessage');
    const deleteForm = document.getElementById('deleteForm');
    const deleteToken = document.getElementById('deleteToken');

    document.querySelectorAll('.delete-product-btn:not([disabled])').forEach(btn => {
        btn.addEventListener('click', function() {
            const productId = this.dataset.productId;
            const productName = this.dataset.productName;
            deleteMessage.innerHTML = `
                <div class=\"alert alert-warning mb-2 p-2\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i>Cette action est irréversible.
                </div>
                <p>Êtes-vous sûr de vouloir supprimer <strong>\"\${productName}\"</strong> ?</p>
            `;
            deleteForm.action = `/admin/product/\${productId}`;
            deleteToken.value = this.dataset.token;
            deleteModal.show();
        });
    });

    // Auto-submit filters
    document.getElementById('category')?.addEventListener('change', function() {
        document.getElementById('filter-form').submit();
    });
    document.getElementById('status')?.addEventListener('change', function() {
        document.getElementById('filter-form').submit();
    });
    document.getElementById('expiry_type')?.addEventListener('change', function() {
        document.getElementById('filter-form').submit();
    });
    document.getElementById('subscription_status')?.addEventListener('change', function() {
        document.getElementById('filter-form').submit();
    });

    // Toggle extra filters visibility
    const toggleExtraBtn = document.getElementById('toggleExtraFiltersBtn');
    const extraFilters = document.getElementById('extraFilters');
    if (toggleExtraBtn && extraFilters) {
        const dosage = document.getElementById('dosage')?.value;
        const form = document.getElementById('form')?.value;
        const prescription = document.getElementById('prescription_required')?.checked;
        if (dosage || form || prescription) {
            extraFilters.style.display = 'flex';
            toggleExtraBtn.innerHTML = '<i class=\"fas fa-times me-1\"></i> Masquer filtres';
        }

        toggleExtraBtn.addEventListener('click', function() {
            if (extraFilters.style.display === 'none') {
                extraFilters.style.display = 'flex';
                this.innerHTML = '<i class=\"fas fa-times me-1\"></i> Masquer filtres';
            } else {
                extraFilters.style.display = 'none';
                this.innerHTML = '<i class=\"fas fa-sliders-h me-1\"></i> Autres filtres';
            }
        });
    }
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
        return "admin/product/index.html.twig";
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
        return array (  1140 => 640,  1134 => 638,  1130 => 636,  1128 => 635,  1117 => 627,  1104 => 626,  1045 => 577,  1032 => 576,  942 => 496,  935 => 492,  919 => 478,  914 => 475,  903 => 472,  898 => 471,  894 => 470,  890 => 468,  888 => 467,  883 => 464,  870 => 457,  863 => 452,  861 => 451,  840 => 435,  835 => 432,  831 => 430,  824 => 429,  818 => 428,  815 => 427,  813 => 426,  804 => 422,  795 => 418,  788 => 413,  780 => 408,  774 => 404,  765 => 400,  761 => 399,  757 => 397,  754 => 396,  752 => 395,  744 => 390,  735 => 384,  729 => 380,  727 => 379,  722 => 376,  718 => 374,  712 => 372,  710 => 371,  703 => 367,  695 => 361,  689 => 357,  685 => 356,  681 => 355,  677 => 354,  673 => 353,  669 => 351,  667 => 350,  659 => 345,  655 => 344,  651 => 343,  647 => 342,  643 => 341,  639 => 340,  629 => 333,  621 => 328,  609 => 319,  604 => 317,  594 => 309,  590 => 307,  588 => 306,  583 => 304,  579 => 303,  573 => 299,  567 => 295,  561 => 292,  556 => 291,  554 => 290,  549 => 287,  544 => 286,  535 => 279,  525 => 272,  520 => 269,  518 => 268,  514 => 266,  503 => 263,  496 => 262,  492 => 261,  482 => 254,  474 => 249,  454 => 232,  447 => 227,  443 => 225,  434 => 222,  427 => 221,  423 => 220,  419 => 218,  413 => 214,  411 => 213,  403 => 208,  399 => 207,  386 => 197,  382 => 196,  372 => 189,  368 => 188,  364 => 187,  356 => 181,  344 => 178,  335 => 177,  328 => 176,  324 => 175,  314 => 168,  295 => 152,  288 => 148,  267 => 130,  253 => 119,  239 => 108,  225 => 97,  211 => 86,  197 => 75,  182 => 62,  172 => 55,  167 => 53,  161 => 49,  158 => 48,  141 => 32,  137 => 30,  135 => 29,  129 => 28,  125 => 27,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des Produits - HMA Market{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
    <!-- Header avec quota -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap\">
        <div>
            <h1 class=\"h3 mb-1 text-gray-800 fw-bold\">
                <i class=\"fas fa-boxes me-2\"></i>Catalogue des Produits
            </h1>
            <p class=\"text-muted mb-0\">Gérez votre inventaire et catalogue</p>
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
                        <small class=\"text-muted\">Produits actifs</small>
                        <h5 class=\"mb-0 {{ quotaReached ? 'text-danger' : 'text-success' }}\">
                            {{ activeCount }} / {{ quota }}
                            {% if quota == 'Illimité' %}
                                <i class=\"fas fa-infinity text-info ms-1\"></i>
                            {% endif %}
                        </h5>
                    </div>
                </div>
            </div>

            <button type=\"button\" class=\"btn btn-outline-primary\" id=\"scan-barcode-btn\" title=\"Rechercher par code-barres\">
                <i class=\"fas fa-barcode me-2\"></i> Scanner
            </button>

            <a href=\"#\" id=\"newProductBtn\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus-circle me-2\"></i> Nouveau Produit
            </a>
        </div>
    </div>

    {# Message si quota atteint #}
    {% if quotaReached %}
    <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
        <div class=\"d-flex justify-content-between align-items-center\">
            <div>
                <i class=\"fas fa-exclamation-triangle me-2\"></i>
                <strong>Quota atteint !</strong> Vous avez utilisé vos {{ quota }} produits actifs.
            </div>
            <a href=\"{{ path('app_subscription_plans') }}\" class=\"btn btn-warning btn-sm\">
                <i class=\"fas fa-arrow-up me-1\"></i> Voir les offres
            </a>
        </div>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    </div>
    {% endif %}

    <!-- Statistiques filtrées -->
    <div class=\"card shadow mb-4\">
        <div class=\"card-header bg-white py-3\">
            <h5 class=\"mb-0\"><i class=\"fas fa-chart-pie me-2\"></i>Statistiques selon les filtres</h5>
        </div>
        <div class=\"card-body\">
            <div class=\"row mb-3\">
                <div class=\"col-md-2 col-sm-4 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-primary text-uppercase small fw-bold\">Total</span>
                                <h3 class=\"mb-0\">{{ totalFiltered }}</h3>
                            </div>
                            <i class=\"fas fa-box fa-2x text-primary opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-2 col-sm-4 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-success text-uppercase small fw-bold\">Actifs</span>
                                <h3 class=\"mb-0\">{{ activeFiltered }}</h3>
                            </div>
                            <i class=\"fas fa-check-circle fa-2x text-success opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-2 col-sm-4 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-danger text-uppercase small fw-bold\">Inactifs</span>
                                <h3 class=\"mb-0\">{{ inactiveFiltered }}</h3>
                            </div>
                            <i class=\"fas fa-pause-circle fa-2x text-danger opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-2 col-sm-4 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-warning text-uppercase small fw-bold\">Stock faible</span>
                                <h3 class=\"mb-0\">{{ lowStockFiltered }}</h3>
                            </div>
                            <i class=\"fas fa-exclamation-triangle fa-2x text-warning opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-2 col-sm-4 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-info text-uppercase small fw-bold\">Périssables</span>
                                <h3 class=\"mb-0\">{{ perishableFiltered }}</h3>
                            </div>
                            <i class=\"fas fa-calendar-alt fa-2x text-info opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-2 col-sm-4 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-secondary text-uppercase small fw-bold\">Non périss.</span>
                                <h3 class=\"mb-0\">{{ nonPerishableFiltered }}</h3>
                            </div>
                            <i class=\"fas fa-calendar-check fa-2x text-secondary opacity-50\"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center mb-2\">
                            <span class=\"text-dark text-uppercase small fw-bold\">Abonnement</span>
                            <i class=\"fas fa-credit-card fa-2x text-dark opacity-50\"></i>
                        </div>
                        <div class=\"d-flex justify-content-between\">
                            <div>
                                <small class=\"text-info d-block\">Actif</small>
                                <h3 class=\"mb-0\">{{ subscriptionActiveFiltered }}</h3>
                            </div>
                            <div class=\"text-end\">
                                <small class=\"text-secondary d-block\">Inactif</small>
                                <h3 class=\"mb-0\">{{ subscriptionInactiveFiltered }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filtres -->
    <div class=\"card shadow mb-4\">
        <div class=\"card-body\">
            <form method=\"get\" id=\"filter-form\">
                <div class=\"row g-3 align-items-end mb-3\">
                    <div class=\"col-md-3\">
                        <label for=\"search\" class=\"form-label fw-bold\">Rechercher</label>
                        <input type=\"text\" name=\"search\" id=\"search\" value=\"{{ search }}\" 
                            class=\"form-control\" placeholder=\"Nom, code-barres...\">
                    </div>
                    <div class=\"col-md-3\">
                        <label for=\"category\" class=\"form-label fw-bold\">Catégorie</label>
                        <select name=\"category\" id=\"category\" class=\"form-select\">
                            <option value=\"0\">Toutes</option>
                            {% for category in categories %}
                                <option value=\"{{ category.id }}\" {{ selectedCategory == category.id ? 'selected' : '' }}>
                                    {% for i in 0..category.level %}&nbsp;&nbsp;{% endfor %}
                                    {{ category.name }} ({{ category.productCount }})
                                </option>
                            {% endfor %}
                        </select>
                    </div>
                    <div class=\"col-md-3\">
                        <label for=\"status\" class=\"form-label fw-bold\">Statut</label>
                        <select name=\"status\" id=\"status\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"active\" {{ selectedStatus == 'active' ? 'selected' : '' }}>Actifs</option>
                            <option value=\"inactive\" {{ selectedStatus == 'inactive' ? 'selected' : '' }}>Inactifs</option>
                            <option value=\"low-stock\" {{ selectedStatus == 'low-stock' ? 'selected' : '' }}>Stock faible</option>
                        </select>
                    </div>
                    <div class=\"col-md-3\">
                        <label for=\"expiry_type\" class=\"form-label fw-bold\">Type</label>
                        <select name=\"expiry_type\" id=\"expiry_type\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"perishable\" {{ selectedExpiryType == 'perishable' ? 'selected' : '' }}>Périssables</option>
                            <option value=\"non-perishable\" {{ selectedExpiryType == 'non-perishable' ? 'selected' : '' }}>Non périssables</option>
                        </select>
                    </div>
                </div>

                <div class=\"row g-3 align-items-end mb-3\">
                    <div class=\"col-md-5\">
                        <label for=\"subscription_status\" class=\"form-label fw-bold\">Abonnement</label>
                        <select name=\"subscription_status\" id=\"subscription_status\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"active\" {{ selectedSubscriptionStatus == 'active' ? 'selected' : '' }}>Actif</option>
                            <option value=\"inactive\" {{ selectedSubscriptionStatus == 'inactive' ? 'selected' : '' }}>Inactif</option>
                        </select>
                    </div>
                    <div class=\"col-md-5\">
                        <label for=\"unit\" class=\"form-label fw-bold\">Unité de mesure</label>
                        {% if units is empty %}
                            <div class=\"alert alert-info alert-sm py-1 px-2 mb-0\">
                                <i class=\"fas fa-info-circle me-1\"></i> Aucune unité enregistrée
                            </div>
                        {% else %}
                            <select name=\"unit\" id=\"unit\" class=\"form-select\">
                                <option value=\"\">Toutes</option>
                                {% for unit in units %}
                                    <option value=\"{{ unit }}\" {{ selectedUnit == unit ? 'selected' : '' }}>
                                        {{ unit }}
                                    </option>
                                {% endfor %}
                            </select>
                        {% endif %}
                    </div>
                    <div class=\"col-md-2 d-flex gap-2\">
                        <button type=\"submit\" class=\"btn btn-primary flex-fill\">
                            <i class=\"fas fa-search me-1\"></i> Filtrer
                        </button>
                        <a href=\"{{ path('app_admin_product_index') }}\" class=\"btn btn-outline-secondary flex-fill\">
                            <i class=\"fas fa-undo\"></i> Effacer
                        </a>
                    </div>
                </div>

                <div class=\"row mt-3\">
                    <div class=\"col-12\">
                        <button type=\"button\" class=\"btn btn-outline-info\" id=\"toggleExtraFiltersBtn\">
                            <i class=\"fas fa-sliders-h me-1\"></i> Autres filtres
                        </button>
                    </div>
                </div>

                <div id=\"extraFilters\" style=\"display: none;\" class=\"row g-3 mt-2\">
                    <div class=\"col-md-4\">
                        <label for=\"dosage\" class=\"form-label fw-bold\">Dosage</label>
                        <input type=\"text\" name=\"dosage\" id=\"dosage\" value=\"{{ dosage }}\" 
                            class=\"form-control\" placeholder=\"Ex: 500mg\">
                    </div>
                    <div class=\"col-md-4\">
                        <label for=\"form\" class=\"form-label fw-bold\">Forme</label>
                        <input type=\"text\" name=\"form\" id=\"form\" value=\"{{ form }}\" 
                            class=\"form-control\" placeholder=\"Ex: comprimé\">
                    </div>
                    <div class=\"col-md-4\">
                        <label for=\"promotion\" class=\"form-label fw-bold\">Promotion</label>
                        <select name=\"promotion\" id=\"promotion\" class=\"form-select\">
                            <option value=\"\">Toutes</option>
                            {% for promotion in promotions %}
                                <option value=\"{{ promotion.id }}\" {{ selectedPromotion == promotion.id ? 'selected' : '' }}>
                                    {{ promotion.name }} ({{ promotion.type }})
                                </option>
                            {% endfor %}
                        </select>
                    </div>
                    {% if companyType == 'pharmacy' %}
                    <div class=\"col-md-4 d-flex align-items-end\">
                        <div class=\"form-check mb-2\">
                            <input type=\"checkbox\" name=\"prescription_required\" id=\"prescription_required\" 
                                class=\"form-check-input\" value=\"1\" {{ prescriptionRequired ? 'checked' : '' }}>
                            <label class=\"form-check-label\" for=\"prescription_required\">
                                Prescription obligatoire
                            </label>
                        </div>
                    </div>
                    {% endif %}
                </div>
            </form>
        </div>
    </div>

    <!-- Grille de produits -->
    <div class=\"row g-3\">
        {% for product in products %}
        <div class=\"col-xl-3 col-lg-4 col-md-6\">
            <div class=\"card product-card h-100 shadow-sm\">
                <div class=\"product-image-container position-relative\">
                    {% if product.image and product.image != 'default-product.png' %}
                        <img src=\"{{ asset('uploads/products/' ~ product.image) }}\" 
                             alt=\"{{ product.name }}\" 
                             class=\"card-img-top product-image\">
                    {% else %}
                        <div class=\"product-image-placeholder\">
                            <i class=\"fas fa-box fa-4x text-muted\"></i>
                        </div>
                    {% endif %}

                    <!-- Badges de statut superposés (en haut à gauche) -->
                    <div class=\"position-absolute top-0 start-0 p-2\">
                        <div class=\"d-flex flex-column gap-1\">
                            <span class=\"badge {{ product.isActive ? 'bg-success' : 'bg-danger' }}\">
                                {{ product.isActive ? 'Actif' : 'Inactif' }}
                            </span>
                            {% if not product.subscriptionActive %}
                                <span class=\"badge bg-warning text-dark\">Hors quota</span>
                            {% endif %}
                        </div>
                    </div>
                </div>

                <div class=\"card-body d-flex flex-column\">
                    <!-- Titre avec bouton burger à droite -->
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <h5 class=\"card-title text-truncate mb-0\">
                            {{ product.name }}
                            <small class=\"text-muted ms-1\">
                                <i class=\"fas fa-weight-hanging me-1\"></i>{{ product.unit|default('pièce') }}
                            </small>
                        </h5>
                        <div class=\"dropdown ms-2\">
                            <button class=\"btn btn-sm btn-light\" type=\"button\" data-bs-toggle=\"dropdown\">
                                <i class=\"fas fa-bars\"></i>
                            </button>
                            <ul class=\"dropdown-menu dropdown-menu-end\">
                                <li>
                                    <a class=\"dropdown-item\" href=\"{{ path('app_admin_product_show', {'id': product.id}) }}\">
                                        <i class=\"fas fa-eye me-2\"></i> Voir
                                    </a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item\" href=\"{{ path('app_admin_product_edit', {'id': product.id}) }}\">
                                        <i class=\"fas fa-edit me-2\"></i> Modifier
                                    </a>
                                </li>
                                <li>
                                    <button type=\"button\" 
                                            class=\"dropdown-item toggle-status-btn\"
                                            data-product-id=\"{{ product.id }}\"
                                            data-product-name=\"{{ product.name }}\"
                                            data-is-active=\"{{ product.isActive ? '1' : '0' }}\"
                                            data-token=\"{{ csrf_token('toggle-status' ~ product.id) }}\">
                                        <i class=\"fas {{ product.isActive ? 'fa-toggle-on' : 'fa-toggle-off' }} me-2\"></i>
                                        {{ product.isActive ? 'Désactiver' : 'Activer' }}
                                    </button>
                                </li>
                                <li><hr class=\"dropdown-divider\"></li>
                                <li>
                                    {% if is_granted('ROLE_ADMIN') %}
                                        <button type=\"button\" 
                                                class=\"dropdown-item text-danger delete-product-btn\"
                                                data-product-id=\"{{ product.id }}\"
                                                data-product-name=\"{{ product.name }}\"
                                                data-token=\"{{ csrf_token('delete' ~ product.id) }}\"
                                                {% if product.purchaseItems|length > 0 or product.stockBatches|length > 0 %}disabled{% endif %}
                                                title=\"Supprimer\">
                                            <i class=\"fas fa-trash me-2\"></i> Supprimer
                                        </button>
                                    {% endif %}
                                </li>
                            </ul>
                        </div>
                    </div>

                    <p class=\"text-muted small mb-2\">
                        <i class=\"fas fa-barcode me-1\"></i>{{ product.barcode }}
                    </p>
                    <p class=\"text-muted small mb-2\">
                        Catégorie :
                        {% if product.category %}
                            <i class=\"fas fa-tag me-1\"></i>{{ product.category.name }}
                        {% else %}
                            <i class=\"fas fa-question-circle me-1\"></i>Non catégorisé
                        {% endif %}
                    </p>

                    <!-- Prix selon type d'entreprise -->
                    {% if companyType != 'restaurant' %}
                    <div class=\"row g-0 mb-2\">
                        <div class=\"col-6\">
                            <small class=\"text-muted d-block\">Prix vente</small>
                            <span class=\"fw-bold text-success\">
                                {{ product.salePrice|price_with_currency(product.hmaService) }}
                            </span>
                        </div>
                        <div class=\"col-6 text-end\">
                            <small class=\"text-muted d-block\">Prix achat</small>
                            <span class=\"fw-bold text-primary\">
                                {{ product.purchasePrice|price_with_currency(product.hmaService) }}
                            </span>
                        </div>
                    </div>

                    {% set margin = product.salePrice - product.purchasePrice %}
                    {% set marginPercentage = product.purchasePrice > 0 ? (margin / product.purchasePrice * 100)|round(1) : 0 %}
                    <div class=\"d-flex justify-content-between align-items-center mb-2 small\">
                        <span class=\"text-muted\">Marge</span>
                        <span class=\"badge {{ marginPercentage >= 50 ? 'bg-success' : (marginPercentage >= 20 ? 'bg-warning text-dark' : 'bg-danger') }}\">
                            {{ margin|price_with_currency(product.hmaService) }} ({{ marginPercentage }}%)
                        </span>
                    </div>
                    {% else %}
                    <div class=\"row g-0 mb-2\">
                        <div class=\"col-12\">
                            <small class=\"text-muted d-block\">Prix d'achat</small>
                            <span class=\"fw-bold text-primary\">
                                {{ product.purchasePrice|price_with_currency(product.hmaService) }}
                            </span>
                        </div>
                    </div>
                    {% endif %}

                    <!-- Stock : quantité à gauche, min à droite avec unité -->
                    <div class=\"row g-0 mb-2\">
                        <div class=\"col-6\">
                            <small class=\"text-muted d-block\">Stock</small>
                            <span class=\"fw-bold\">{{ product.stockQuantity }} {{ product.unit|default('pièce') }}</span>
                        </div>
                        <div class=\"col-6 text-end\">
                            <small class=\"text-muted d-block\">Stock min</small>
                            <span class=\"fw-bold\">{{ product.minQuantity }} {{ product.unit|default('pièce') }}</span>
                        </div>
                    </div>

                    {% if product.dosage or product.form %}
                        <div class=\"small text-muted mb-2\">
                            {% if product.dosage %}<span class=\"me-2\"><i class=\"fas fa-flask me-1\"></i>{{ product.dosage }}</span>{% endif %}
                            {% if product.form %}<span><i class=\"fas fa-pills me-1\"></i>{{ product.form }}</span>{% endif %}
                        </div>
                    {% endif %}

                    <!-- Boutons secondaires alignés sur une ligne -->
                    <div class=\"d-flex gap-1 mt-auto\">
                        <a href=\"{{ path('app_admin_stock_batch_index', {'productId': product.id}) }}\" 
                           class=\"btn btn-sm btn-outline-info flex-fill\" title=\"Lots de stock\">
                            <i class=\"fas fa-boxes\"></i>
                        </a>
                        <a href=\"#\" 
                           class=\"btn btn-sm btn-outline-primary flex-fill\" title=\"Mouvements de stock\">
                            <i class=\"fas fa-exchange-alt\"></i>
                        </a>
                        <a href=\"#\" 
                           class=\"btn btn-sm btn-outline-warning flex-fill\" title=\"Promotions\">
                            <i class=\"fas fa-tags\"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        {% else %}
        <div class=\"col-12\">
            <div class=\"card shadow\">
                <div class=\"card-body text-center py-5\">
                    <i class=\"fas fa-box-open fa-4x text-muted mb-3\"></i>
                    <h4 class=\"text-muted\">Aucun produit trouvé</h4>
                    <a href=\"{{ path('app_admin_product_new') }}\" class=\"btn btn-primary mt-3\">
                        <i class=\"fas fa-plus me-2\"></i> Ajouter un produit
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
                    <a class=\"page-link\" href=\"{{ path('app_admin_product_index', app.request.query.all|merge({'page': page})) }}\">{{ page }}</a>
                </li>
            {% endfor %}
        </ul>
    </nav>
    {% endif %}
</div>

<!-- Modale quota atteint pour nouveau produit -->
<div class=\"modal fade\" id=\"quotaReachedModal\" tabindex=\"-1\">
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
                <h5>Vous avez atteint votre limite de {{ quota }} produits actifs.</h5>
                <p class=\"text-muted\">Pour ajouter de nouveaux produits, passez à un plan supérieur.</p>
            </div>
            <div class=\"modal-footer justify-content-center\">
                <a href=\"{{ path('app_subscription_plans') }}\" class=\"btn btn-warning btn-lg px-4\">
                    <i class=\"fas fa-arrow-up me-2\"></i> Voir les offres
                </a>
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
            </div>
        </div>
    </div>
</div>

<!-- Scanner Modal -->
<div class=\"modal fade\" id=\"scannerModal\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-barcode me-2\"></i> Scanner un code-barres
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <input type=\"text\" id=\"scannerInput\" class=\"form-control form-control-lg\" placeholder=\"Scannez ou saisissez...\">
                <div class=\"form-text mt-2\">
                    <i class=\"fas fa-info-circle me-1\"></i>
                    Utilisez votre lecteur de code-barres ou saisissez manuellement.
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <button type=\"button\" class=\"btn btn-primary\" id=\"scanSubmit\">Rechercher</button>
            </div>
        </div>
    </div>
</div>

<!-- Modales pour toggle et suppression -->
<div class=\"modal fade\" id=\"toggleStatusModal\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"toggleStatusTitle\"></h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p id=\"toggleStatusMessage\"></p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"toggleStatusForm\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" id=\"toggleStatusToken\">
                    <button type=\"submit\" class=\"btn\" id=\"toggleStatusBtn\"></button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header border-0\">
                <h5 class=\"modal-title text-danger\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Confirmation
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p id=\"deleteMessage\"></p>
            </div>
            <div class=\"modal-footer border-0\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"deleteForm\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteToken\">
                    <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
.product-card {
    transition: transform 0.2s, box-shadow 0.2s;
    border: 1px solid transparent;
}
.product-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.15) !important;
    border-color: #dee2e6;
}
.product-image-container {
    position: relative;
    height: 160px;
    overflow: hidden;
    border-radius: 8px 8px 0 0;
}
.product-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.product-image-placeholder {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
}
.stat-item {
    transition: transform 0.2s;
}
.stat-item:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}
#extraFilters {
    transition: all 0.3s ease;
}
@media (max-width: 576px) {
    .btn-sm {
        font-size: 0.75rem;
        padding: 0.25rem 0.2rem;
    }
}
</style>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Nouveau produit avec vérification quota
    const newProductBtn = document.getElementById('newProductBtn');
    if (newProductBtn) {
        newProductBtn.addEventListener('click', function(e) {
            e.preventDefault();
            {% if quotaReached %}
                new bootstrap.Modal(document.getElementById('quotaReachedModal')).show();
            {% else %}
                window.location.href = \"{{ path('app_admin_product_new') }}\";
            {% endif %}
        });
    }

    // Scanner modal
    const scanBtn = document.getElementById('scan-barcode-btn');
    const scannerModalEl = document.getElementById('scannerModal');
    if (scanBtn && scannerModalEl) {
        const scannerModal = new bootstrap.Modal(scannerModalEl);
        const scannerInput = document.getElementById('scannerInput');
        const scanSubmit = document.getElementById('scanSubmit');

        scanBtn.addEventListener('click', function() {
            scannerModal.show();
            if (scannerInput) {
                scannerInput.focus();
                scannerInput.value = '';
            }
        });

        if (scanSubmit && scannerInput) {
            scanSubmit.addEventListener('click', function() {
                const barcode = scannerInput.value.trim();
                if (barcode) {
                    const url = new URL(window.location);
                    url.searchParams.set('search', barcode);
                    url.searchParams.set('page', '1');
                    window.location.href = url.toString();
                }
            });

            scannerInput.addEventListener('keydown', function(e) {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    scanSubmit.click();
                }
            });
        }
    }

    // Toggle status modal
    const toggleModal = new bootstrap.Modal(document.getElementById('toggleStatusModal'));
    const toggleTitle = document.getElementById('toggleStatusTitle');
    const toggleMessage = document.getElementById('toggleStatusMessage');
    const toggleForm = document.getElementById('toggleStatusForm');
    const toggleToken = document.getElementById('toggleStatusToken');
    const toggleBtn = document.getElementById('toggleStatusBtn');

    document.querySelectorAll('.toggle-status-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const productId = this.dataset.productId;
            const productName = this.dataset.productName;
            const isActive = this.dataset.isActive === '1';
            toggleTitle.textContent = isActive ? 'Désactiver le produit' : 'Activer le produit';
            toggleMessage.textContent = `Êtes-vous sûr de vouloir \${isActive ? 'désactiver' : 'activer'} \"\${productName}\" ?`;
            toggleForm.action = `/admin/product/\${productId}/toggle-status`;
            toggleToken.value = this.dataset.token;
            toggleBtn.className = isActive ? 'btn btn-danger' : 'btn btn-success';
            toggleBtn.textContent = isActive ? 'Désactiver' : 'Activer';
            toggleModal.show();
        });
    });

    // Delete modal
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
    const deleteMessage = document.getElementById('deleteMessage');
    const deleteForm = document.getElementById('deleteForm');
    const deleteToken = document.getElementById('deleteToken');

    document.querySelectorAll('.delete-product-btn:not([disabled])').forEach(btn => {
        btn.addEventListener('click', function() {
            const productId = this.dataset.productId;
            const productName = this.dataset.productName;
            deleteMessage.innerHTML = `
                <div class=\"alert alert-warning mb-2 p-2\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i>Cette action est irréversible.
                </div>
                <p>Êtes-vous sûr de vouloir supprimer <strong>\"\${productName}\"</strong> ?</p>
            `;
            deleteForm.action = `/admin/product/\${productId}`;
            deleteToken.value = this.dataset.token;
            deleteModal.show();
        });
    });

    // Auto-submit filters
    document.getElementById('category')?.addEventListener('change', function() {
        document.getElementById('filter-form').submit();
    });
    document.getElementById('status')?.addEventListener('change', function() {
        document.getElementById('filter-form').submit();
    });
    document.getElementById('expiry_type')?.addEventListener('change', function() {
        document.getElementById('filter-form').submit();
    });
    document.getElementById('subscription_status')?.addEventListener('change', function() {
        document.getElementById('filter-form').submit();
    });

    // Toggle extra filters visibility
    const toggleExtraBtn = document.getElementById('toggleExtraFiltersBtn');
    const extraFilters = document.getElementById('extraFilters');
    if (toggleExtraBtn && extraFilters) {
        const dosage = document.getElementById('dosage')?.value;
        const form = document.getElementById('form')?.value;
        const prescription = document.getElementById('prescription_required')?.checked;
        if (dosage || form || prescription) {
            extraFilters.style.display = 'flex';
            toggleExtraBtn.innerHTML = '<i class=\"fas fa-times me-1\"></i> Masquer filtres';
        }

        toggleExtraBtn.addEventListener('click', function() {
            if (extraFilters.style.display === 'none') {
                extraFilters.style.display = 'flex';
                this.innerHTML = '<i class=\"fas fa-times me-1\"></i> Masquer filtres';
            } else {
                extraFilters.style.display = 'none';
                this.innerHTML = '<i class=\"fas fa-sliders-h me-1\"></i> Autres filtres';
            }
        });
    }
});
</script>
{% endblock %}", "admin/product/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\product\\index.html.twig");
    }
}
