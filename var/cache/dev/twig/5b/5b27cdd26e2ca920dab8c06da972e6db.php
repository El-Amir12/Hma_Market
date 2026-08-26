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

/* admin/restaurant/promotion/index.html.twig */
class __TwigTemplate_2d56bfddb734f50a26f2a3cb260043a0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/restaurant/promotion/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/restaurant/promotion/index.html.twig"));

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

        yield "Promotions - Restaurant";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "<div class=\"container-fluid px-4\">
    <!-- En-tête -->
    <div class=\"d-flex flex-wrap justify-content-between align-items-center mb-4\">
        <div class=\"mb-2 mb-sm-0\">
            <h1 class=\"h3 mb-1\">
                <i class=\"fas fa-utensils me-2 text-primary\"></i>Promotions (Restaurant)
            </h1>
            <p class=\"text-muted mb-0\">Gérez vos offres promotionnelles sur les plats</p>
        </div>
        <div class=\"d-flex gap-2\">
            <div class=\"dropdown\">
                <button class=\"btn btn-outline-secondary dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\">
                    <i class=\"fas fa-link me-1\"></i> Associations
                </button>
                <ul class=\"dropdown-menu\">
                    <li>
                        <a class=\"dropdown-item\" href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_promotion_category_index");
        yield "\">
                            <i class=\"fas fa-folder-tree me-2\"></i>Catégories de plats
                        </a>
                    </li>
                    <li>
                        <a class=\"dropdown-item\" href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_promotion_recipe_index");
        yield "\">
                            <i class=\"fas fa-hamburger me-2\"></i>Plats
                        </a>
                    </li>
                </ul>
            </div>
            <a href=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_type_promotion_index");
        yield "\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-cog me-1\"></i> Types promotion
            </a>
            <a href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_promotion_new");
        yield "\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus-circle me-2\"></i> Nouvelle promotion
            </a>
        </div>
    </div>

    <!-- Flash messages -->
    ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "flashes", ["success"], "method", false, false, false, 45));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 46
            yield "        <div class=\"alert alert-success alert-dismissible fade show\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "flashes", ["error"], "method", false, false, false, 48));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 49
            yield "        <div class=\"alert alert-danger alert-dismissible fade show\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        yield "
    <!-- Statistiques : 6 cartes sur une ligne -->
    <div class=\"card shadow-sm border-0 mb-4\">
        <div class=\"card-header bg-white py-3 border-0\">
            <h5 class=\"mb-0\"><i class=\"fas fa-chart-pie me-2 text-primary\"></i>Statistiques selon les filtres</h5>
        </div>
        <div class=\"card-body\">
            <div class=\"row g-3\">
                <div class=\"col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12\">
                    <div class=\"stat-card p-3 bg-light rounded-3 text-center\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted small\">Total</span>
                                <h3 class=\"mb-0 fw-bold text-dark\">";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalFiltered"]) || array_key_exists("totalFiltered", $context) ? $context["totalFiltered"] : (function () { throw new RuntimeError('Variable "totalFiltered" does not exist.', 64, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-tag fa-2x text-primary opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12\">
                    <div class=\"stat-card p-3 bg-light rounded-3 text-center\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted small\">Actives</span>
                                <h3 class=\"mb-0 fw-bold text-dark\">";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activeFiltered"]) || array_key_exists("activeFiltered", $context) ? $context["activeFiltered"] : (function () { throw new RuntimeError('Variable "activeFiltered" does not exist.', 75, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-check-circle fa-2x text-success opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12\">
                    <div class=\"stat-card p-3 bg-light rounded-3 text-center\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted small\">Inactives</span>
                                <h3 class=\"mb-0 fw-bold text-dark\">";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["inactiveFiltered"]) || array_key_exists("inactiveFiltered", $context) ? $context["inactiveFiltered"] : (function () { throw new RuntimeError('Variable "inactiveFiltered" does not exist.', 86, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-ban fa-2x text-danger opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12\">
                    <div class=\"stat-card p-3 bg-light rounded-3 text-center\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted small\">En cours</span>
                                <h3 class=\"mb-0 fw-bold text-dark\">";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["ongoingFiltered"]) || array_key_exists("ongoingFiltered", $context) ? $context["ongoingFiltered"] : (function () { throw new RuntimeError('Variable "ongoingFiltered" does not exist.', 97, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-clock fa-2x text-warning opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12\">
                    <div class=\"stat-card p-3 bg-light rounded-3 text-center\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted small\">À venir</span>
                                <h3 class=\"mb-0 fw-bold text-dark\">";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["upcomingFiltered"]) || array_key_exists("upcomingFiltered", $context) ? $context["upcomingFiltered"] : (function () { throw new RuntimeError('Variable "upcomingFiltered" does not exist.', 108, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-calendar-alt fa-2x text-info opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12\">
                    <div class=\"stat-card p-3 bg-light rounded-3 text-center\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted small\">Terminées</span>
                                <h3 class=\"mb-0 fw-bold text-dark\">";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["endedFiltered"]) || array_key_exists("endedFiltered", $context) ? $context["endedFiltered"] : (function () { throw new RuntimeError('Variable "endedFiltered" does not exist.', 119, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-stopwatch fa-2x text-secondary opacity-50\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filtres -->
    <div class=\"card shadow-sm border-0 mb-4\">
        <div class=\"card-header bg-white py-3 border-0\">
            <h5 class=\"mb-0\"><i class=\"fas fa-filter me-2 text-primary\"></i>Filtres</h5>
        </div>
        <div class=\"card-body\">
            <form method=\"get\" class=\"row g-3\">
                <div class=\"col-lg-3 col-md-6\">
                    <label class=\"form-label fw-semibold\">Recherche</label>
                    <div class=\"input-group\">
                        <span class=\"input-group-text bg-white border-end-0\"><i class=\"fas fa-search text-muted\"></i></span>
                        <input type=\"text\" name=\"search\" value=\"";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 140, $this->source); })()), "html", null, true);
        yield "\" class=\"form-control border-start-0\" placeholder=\"Nom, description...\">
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-6\">
                    <label class=\"form-label fw-semibold\">Statut</label>
                    <select name=\"status\" class=\"form-select\">
                        <option value=\"all\" ";
        // line 146
        yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 146, $this->source); })()) == "all")) ? ("selected") : (""));
        yield ">Tous</option>
                        <option value=\"active\" ";
        // line 147
        yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 147, $this->source); })()) == "active")) ? ("selected") : (""));
        yield ">Actives</option>
                        <option value=\"inactive\" ";
        // line 148
        yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 148, $this->source); })()) == "inactive")) ? ("selected") : (""));
        yield ">Inactives</option>
                    </select>
                </div>
                <div class=\"col-lg-2 col-md-6\">
                    <label class=\"form-label fw-semibold\">Période</label>
                    <select name=\"period\" class=\"form-select\">
                        <option value=\"all\" ";
        // line 154
        yield ((((isset($context["period"]) || array_key_exists("period", $context) ? $context["period"] : (function () { throw new RuntimeError('Variable "period" does not exist.', 154, $this->source); })()) == "all")) ? ("selected") : (""));
        yield ">Toutes</option>
                        <option value=\"ongoing\" ";
        // line 155
        yield ((((isset($context["period"]) || array_key_exists("period", $context) ? $context["period"] : (function () { throw new RuntimeError('Variable "period" does not exist.', 155, $this->source); })()) == "ongoing")) ? ("selected") : (""));
        yield ">En cours</option>
                        <option value=\"upcoming\" ";
        // line 156
        yield ((((isset($context["period"]) || array_key_exists("period", $context) ? $context["period"] : (function () { throw new RuntimeError('Variable "period" does not exist.', 156, $this->source); })()) == "upcoming")) ? ("selected") : (""));
        yield ">À venir</option>
                        <option value=\"ended\" ";
        // line 157
        yield ((((isset($context["period"]) || array_key_exists("period", $context) ? $context["period"] : (function () { throw new RuntimeError('Variable "period" does not exist.', 157, $this->source); })()) == "ended")) ? ("selected") : (""));
        yield ">Terminées</option>
                    </select>
                </div>
                <div class=\"col-lg-2 col-md-6\">
                    <label class=\"form-label fw-semibold\">Type</label>
                    <select name=\"type\" class=\"form-select\">
                        <option value=\"0\">Tous</option>
                        ";
        // line 164
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 164, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 165
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 165), "html", null, true);
            yield "\" ";
            yield ((((isset($context["selectedType"]) || array_key_exists("selectedType", $context) ? $context["selectedType"] : (function () { throw new RuntimeError('Variable "selectedType" does not exist.', 165, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 165))) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "name", [], "any", false, false, false, 165), "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['type'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        yield "                    </select>
                </div>
                <div class=\"col-lg-3 d-flex gap-2 align-items-end justify-content-lg-end justify-content-start\">
                    <a href=\"";
        // line 170
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_promotion_index");
        yield "\" class=\"btn btn-outline-secondary\">
                        <i class=\"fas fa-undo-alt me-1\"></i> Effacer
                    </a>
                    <button type=\"submit\" class=\"btn btn-primary\">
                        <i class=\"fas fa-filter me-1\"></i> Filtrer
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Grille des promotions : 3 cartes par ligne -->
    <div class=\"row g-4\">
        ";
        // line 183
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 183, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
            // line 184
            yield "            <div class=\"col-xl-4 col-lg-4 col-md-6 col-sm-12\">
                <div class=\"card h-100 border-0 shadow-sm hover-shadow transition-all rounded-4 overflow-hidden\">
                    ";
            // line 186
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "image", [], "any", false, false, false, 186)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 187
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/promotions/" . CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "image", [], "any", false, false, false, 187))), "html", null, true);
                yield "\" class=\"card-img-top\" style=\"height: 200px; object-fit: cover;\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "name", [], "any", false, false, false, 187), "html", null, true);
                yield "\">
                    ";
            } else {
                // line 189
                yield "                        <div class=\"bg-gradient-light d-flex align-items-center justify-content-center\" style=\"height: 200px;\">
                            <i class=\"fas fa-tag fa-5x text-muted opacity-25\"></i>
                        </div>
                    ";
            }
            // line 193
            yield "                    
                    <div class=\"card-body\">
                        <div class=\"d-flex justify-content-between align-items-start mb-2\">
                            <h5 class=\"card-title fw-bold mb-0 text-dark\">";
            // line 196
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "name", [], "any", false, false, false, 196), 0, 40), "html", null, true);
            yield "</h5>
                            <span class=\"badge ";
            // line 197
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "isActive", [], "any", false, false, false, 197)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-secondary"));
            yield " px-2 py-1 ms-1 flex-shrink-0\">
                                ";
            // line 198
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "isActive", [], "any", false, false, false, 198)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Active") : ("Inactive"));
            yield "
                            </span>
                        </div>
                        <p class=\"card-text small text-muted mb-3\">
                            ";
            // line 202
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "description", [], "any", true, true, false, 202)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "description", [], "any", false, false, false, 202), "Aucune description")) : ("Aucune description")), 0, 80), "html", null, true);
            yield "
                            ";
            // line 203
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "description", [], "any", false, false, false, 203)) > 80)) {
                yield "...";
            }
            // line 204
            yield "                        </p>
                        <div class=\"mb-2\">
                            <strong class=\"text-dark\">Réduction :</strong> 
                            <span class=\"badge bg-dark text-white px-3 py-2 rounded-pill fs-6\">
                                ";
            // line 208
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "typePromotion", [], "any", false, false, false, 208), "name", [], "any", false, false, false, 208) == "Pourcentage")) {
                // line 209
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "value", [], "any", false, false, false, 209), "html", null, true);
                yield "%
                                ";
            } else {
                // line 211
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "value", [], "any", false, false, false, 211), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 211, $this->source); })()), "user", [], "any", false, false, false, 211), "hmaService", [], "any", false, false, false, 211)), "html", null, true);
                yield "
                                ";
            }
            // line 213
            yield "                            </span>
                        </div>
                        <div class=\"small text-muted\">
                            <i class=\"far fa-calendar-alt me-1\"></i> 
                            ";
            // line 217
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "startDate", [], "any", false, false, false, 217), "d/m/Y"), "html", null, true);
            yield "
                            ";
            // line 218
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "endDate", [], "any", false, false, false, 218)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 219
                yield "                                → ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "endDate", [], "any", false, false, false, 219), "d/m/Y"), "html", null, true);
                yield "
                            ";
            } else {
                // line 221
                yield "                                <span class=\"badge bg-info bg-opacity-10 text-info ms-1\">Sans fin</span>
                            ";
            }
            // line 223
            yield "                        </div>
                        <div class=\"mt-2 small text-muted border-top pt-2\">
                            <i class=\"fas fa-user-circle me-1\"></i> Créé par : 
                            <strong>";
            // line 226
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "user", [], "any", false, false, false, 226), "fullName", [], "any", false, false, false, 226), "html", null, true);
            yield "</strong>
                        </div>
                    </div>
                    <div class=\"card-footer bg-transparent border-0 d-flex justify-content-between gap-2 pt-0 pb-3\">
                        <a href=\"";
            // line 230
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_promotion_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 230)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-info flex-fill\">
                            <i class=\"fas fa-eye me-1\"></i> Voir
                        </a>
                        <a href=\"";
            // line 233
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_promotion_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 233)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary flex-fill\">
                            <i class=\"fas fa-edit me-1\"></i> Modifier
                        </a>
                        ";
            // line 236
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 237
                yield "                            <button type=\"button\" class=\"btn btn-sm btn-outline-danger flex-fill\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 237), "html", null, true);
                yield "\">
                                <i class=\"fas fa-trash-alt me-1\"></i> Supprimer
                            </button>
                        ";
            }
            // line 241
            yield "                    </div>
                </div>
            </div>

            <!-- Modal de suppression -->
            ";
            // line 246
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 247
                yield "            <div class=\"modal fade\" id=\"deleteModal";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 247), "html", null, true);
                yield "\" tabindex=\"-1\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-dialog-centered\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header border-0\">
                            <h5 class=\"modal-title text-danger\">
                                <i class=\"fas fa-exclamation-triangle me-2\"></i> Confirmer la suppression
                            </h5>
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                        </div>
                        <div class=\"modal-body text-center py-4\">
                            <i class=\"fas fa-trash-alt fa-4x text-danger mb-3\"></i>
                            <h5>Êtes-vous sûr de vouloir supprimer cette promotion ?</h5>
                            <p class=\"text-muted\">Cette action est irréversible.</p>
                            <div class=\"alert alert-warning mt-3\">
                                <strong>";
                // line 261
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "name", [], "any", false, false, false, 261), "html", null, true);
                yield "</strong><br>
                                Toutes les associations (catégories de plats et plats) seront également supprimées.
                            </div>
                        </div>
                        <div class=\"modal-footer border-0\">
                            <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                            <form method=\"post\" action=\"";
                // line 267
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_promotion_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 267)]), "html", null, true);
                yield "\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 268
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 268))), "html", null, true);
                yield "\">
                                <button type=\"submit\" class=\"btn btn-danger\">Supprimer définitivement</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            ";
            }
            // line 276
            yield "        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 277
            yield "            <div class=\"col-12\">
                <div class=\"card border-0 shadow-sm rounded-4 text-center py-5\">
                    <div class=\"card-body\">
                        <i class=\"fas fa-utensils fa-5x text-muted mb-3 opacity-25\"></i>
                        <h4 class=\"text-muted\">Aucune promotion trouvée</h4>
                        <p class=\"text-muted\">Modifiez vos filtres ou créez une nouvelle promotion.</p>
                        <a href=\"";
            // line 283
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_promotion_new");
            yield "\" class=\"btn btn-primary mt-2\">
                            <i class=\"fas fa-plus-circle me-2\"></i> Nouvelle promotion
                        </a>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['promotion'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 290
        yield "    </div>

    <!-- Pagination -->
    ";
        // line 293
        if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 293, $this->source); })()) > 1)) {
            // line 294
            yield "        <nav class=\"mt-5\">
            <ul class=\"pagination justify-content-center\">
                ";
            // line 296
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 296, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 297
                yield "                    <li class=\"page-item ";
                yield ((($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 297, $this->source); })()))) ? ("active") : (""));
                yield "\">
                        <a class=\"page-link\" href=\"";
                // line 298
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_promotion_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 298, $this->source); })()), "request", [], "any", false, false, false, 298), "query", [], "any", false, false, false, 298), "all", [], "any", false, false, false, 298), ["page" => $context["page"]])), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                yield "</a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 301
            yield "            </ul>
        </nav>
    ";
        }
        // line 304
        yield "</div>

<style>
    .hover-shadow {
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .hover-shadow:hover {
        transform: translateY(-5px);
        box-shadow: 0 1rem 2rem rgba(0,0,0,0.1) !important;
    }
    .bg-gradient-light {
        background: linear-gradient(135deg, #f5f7fa 0%, #e9ecef 100%);
    }
    .rounded-4 {
        border-radius: 1rem;
    }
    .stat-card {
        transition: transform 0.2s;
    }
    .stat-card:hover {
        transform: scale(1.02);
        background-color: #ffffff !important;
        box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.05);
    }
    @media (max-width: 768px) {
        .card-footer {
            flex-wrap: wrap;
        }
        .card-footer .btn {
            font-size: 0.8rem;
        }
    }
    .text-dark {
        color: #212529 !important;
    }
    .form-control, .form-select {
        color: #212529 !important;
        background-color: #ffffff !important;
    }
    .form-floating > .form-control:focus,
    .form-floating > .form-select:focus {
        color: #212529;
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
        return "admin/restaurant/promotion/index.html.twig";
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
        return array (  615 => 304,  610 => 301,  599 => 298,  594 => 297,  590 => 296,  586 => 294,  584 => 293,  579 => 290,  566 => 283,  558 => 277,  553 => 276,  542 => 268,  538 => 267,  529 => 261,  511 => 247,  509 => 246,  502 => 241,  494 => 237,  492 => 236,  486 => 233,  480 => 230,  473 => 226,  468 => 223,  464 => 221,  458 => 219,  456 => 218,  452 => 217,  446 => 213,  440 => 211,  434 => 209,  432 => 208,  426 => 204,  422 => 203,  418 => 202,  411 => 198,  407 => 197,  403 => 196,  398 => 193,  392 => 189,  384 => 187,  382 => 186,  378 => 184,  373 => 183,  357 => 170,  352 => 167,  339 => 165,  335 => 164,  325 => 157,  321 => 156,  317 => 155,  313 => 154,  304 => 148,  300 => 147,  296 => 146,  287 => 140,  263 => 119,  249 => 108,  235 => 97,  221 => 86,  207 => 75,  193 => 64,  178 => 51,  169 => 49,  164 => 48,  155 => 46,  151 => 45,  141 => 38,  135 => 35,  126 => 29,  118 => 24,  100 => 8,  87 => 7,  64 => 5,  41 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/restaurant/promotion/index.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}Promotions - Restaurant{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
    <!-- En-tête -->
    <div class=\"d-flex flex-wrap justify-content-between align-items-center mb-4\">
        <div class=\"mb-2 mb-sm-0\">
            <h1 class=\"h3 mb-1\">
                <i class=\"fas fa-utensils me-2 text-primary\"></i>Promotions (Restaurant)
            </h1>
            <p class=\"text-muted mb-0\">Gérez vos offres promotionnelles sur les plats</p>
        </div>
        <div class=\"d-flex gap-2\">
            <div class=\"dropdown\">
                <button class=\"btn btn-outline-secondary dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\">
                    <i class=\"fas fa-link me-1\"></i> Associations
                </button>
                <ul class=\"dropdown-menu\">
                    <li>
                        <a class=\"dropdown-item\" href=\"{{ path('app_restaurant_promotion_category_index') }}\">
                            <i class=\"fas fa-folder-tree me-2\"></i>Catégories de plats
                        </a>
                    </li>
                    <li>
                        <a class=\"dropdown-item\" href=\"{{ path('app_restaurant_promotion_recipe_index') }}\">
                            <i class=\"fas fa-hamburger me-2\"></i>Plats
                        </a>
                    </li>
                </ul>
            </div>
            <a href=\"{{ path('app_admin_type_promotion_index') }}\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-cog me-1\"></i> Types promotion
            </a>
            <a href=\"{{ path('app_restaurant_promotion_new') }}\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus-circle me-2\"></i> Nouvelle promotion
            </a>
        </div>
    </div>

    <!-- Flash messages -->
    {% for message in app.flashes('success') %}
        <div class=\"alert alert-success alert-dismissible fade show\">{{ message }}<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
    {% endfor %}
    {% for message in app.flashes('error') %}
        <div class=\"alert alert-danger alert-dismissible fade show\">{{ message }}<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
    {% endfor %}

    <!-- Statistiques : 6 cartes sur une ligne -->
    <div class=\"card shadow-sm border-0 mb-4\">
        <div class=\"card-header bg-white py-3 border-0\">
            <h5 class=\"mb-0\"><i class=\"fas fa-chart-pie me-2 text-primary\"></i>Statistiques selon les filtres</h5>
        </div>
        <div class=\"card-body\">
            <div class=\"row g-3\">
                <div class=\"col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12\">
                    <div class=\"stat-card p-3 bg-light rounded-3 text-center\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted small\">Total</span>
                                <h3 class=\"mb-0 fw-bold text-dark\">{{ totalFiltered }}</h3>
                            </div>
                            <i class=\"fas fa-tag fa-2x text-primary opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12\">
                    <div class=\"stat-card p-3 bg-light rounded-3 text-center\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted small\">Actives</span>
                                <h3 class=\"mb-0 fw-bold text-dark\">{{ activeFiltered }}</h3>
                            </div>
                            <i class=\"fas fa-check-circle fa-2x text-success opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12\">
                    <div class=\"stat-card p-3 bg-light rounded-3 text-center\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted small\">Inactives</span>
                                <h3 class=\"mb-0 fw-bold text-dark\">{{ inactiveFiltered }}</h3>
                            </div>
                            <i class=\"fas fa-ban fa-2x text-danger opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12\">
                    <div class=\"stat-card p-3 bg-light rounded-3 text-center\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted small\">En cours</span>
                                <h3 class=\"mb-0 fw-bold text-dark\">{{ ongoingFiltered }}</h3>
                            </div>
                            <i class=\"fas fa-clock fa-2x text-warning opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12\">
                    <div class=\"stat-card p-3 bg-light rounded-3 text-center\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted small\">À venir</span>
                                <h3 class=\"mb-0 fw-bold text-dark\">{{ upcomingFiltered }}</h3>
                            </div>
                            <i class=\"fas fa-calendar-alt fa-2x text-info opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12\">
                    <div class=\"stat-card p-3 bg-light rounded-3 text-center\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted small\">Terminées</span>
                                <h3 class=\"mb-0 fw-bold text-dark\">{{ endedFiltered }}</h3>
                            </div>
                            <i class=\"fas fa-stopwatch fa-2x text-secondary opacity-50\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filtres -->
    <div class=\"card shadow-sm border-0 mb-4\">
        <div class=\"card-header bg-white py-3 border-0\">
            <h5 class=\"mb-0\"><i class=\"fas fa-filter me-2 text-primary\"></i>Filtres</h5>
        </div>
        <div class=\"card-body\">
            <form method=\"get\" class=\"row g-3\">
                <div class=\"col-lg-3 col-md-6\">
                    <label class=\"form-label fw-semibold\">Recherche</label>
                    <div class=\"input-group\">
                        <span class=\"input-group-text bg-white border-end-0\"><i class=\"fas fa-search text-muted\"></i></span>
                        <input type=\"text\" name=\"search\" value=\"{{ search }}\" class=\"form-control border-start-0\" placeholder=\"Nom, description...\">
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-6\">
                    <label class=\"form-label fw-semibold\">Statut</label>
                    <select name=\"status\" class=\"form-select\">
                        <option value=\"all\" {{ status == 'all' ? 'selected' }}>Tous</option>
                        <option value=\"active\" {{ status == 'active' ? 'selected' }}>Actives</option>
                        <option value=\"inactive\" {{ status == 'inactive' ? 'selected' }}>Inactives</option>
                    </select>
                </div>
                <div class=\"col-lg-2 col-md-6\">
                    <label class=\"form-label fw-semibold\">Période</label>
                    <select name=\"period\" class=\"form-select\">
                        <option value=\"all\" {{ period == 'all' ? 'selected' }}>Toutes</option>
                        <option value=\"ongoing\" {{ period == 'ongoing' ? 'selected' }}>En cours</option>
                        <option value=\"upcoming\" {{ period == 'upcoming' ? 'selected' }}>À venir</option>
                        <option value=\"ended\" {{ period == 'ended' ? 'selected' }}>Terminées</option>
                    </select>
                </div>
                <div class=\"col-lg-2 col-md-6\">
                    <label class=\"form-label fw-semibold\">Type</label>
                    <select name=\"type\" class=\"form-select\">
                        <option value=\"0\">Tous</option>
                        {% for type in types %}
                            <option value=\"{{ type.id }}\" {{ selectedType == type.id ? 'selected' }}>{{ type.name }}</option>
                        {% endfor %}
                    </select>
                </div>
                <div class=\"col-lg-3 d-flex gap-2 align-items-end justify-content-lg-end justify-content-start\">
                    <a href=\"{{ path('app_restaurant_promotion_index') }}\" class=\"btn btn-outline-secondary\">
                        <i class=\"fas fa-undo-alt me-1\"></i> Effacer
                    </a>
                    <button type=\"submit\" class=\"btn btn-primary\">
                        <i class=\"fas fa-filter me-1\"></i> Filtrer
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Grille des promotions : 3 cartes par ligne -->
    <div class=\"row g-4\">
        {% for promotion in promotions %}
            <div class=\"col-xl-4 col-lg-4 col-md-6 col-sm-12\">
                <div class=\"card h-100 border-0 shadow-sm hover-shadow transition-all rounded-4 overflow-hidden\">
                    {% if promotion.image %}
                        <img src=\"{{ asset('uploads/promotions/' ~ promotion.image) }}\" class=\"card-img-top\" style=\"height: 200px; object-fit: cover;\" alt=\"{{ promotion.name }}\">
                    {% else %}
                        <div class=\"bg-gradient-light d-flex align-items-center justify-content-center\" style=\"height: 200px;\">
                            <i class=\"fas fa-tag fa-5x text-muted opacity-25\"></i>
                        </div>
                    {% endif %}
                    
                    <div class=\"card-body\">
                        <div class=\"d-flex justify-content-between align-items-start mb-2\">
                            <h5 class=\"card-title fw-bold mb-0 text-dark\">{{ promotion.name|slice(0, 40) }}</h5>
                            <span class=\"badge {{ promotion.isActive ? 'bg-success' : 'bg-secondary' }} px-2 py-1 ms-1 flex-shrink-0\">
                                {{ promotion.isActive ? 'Active' : 'Inactive' }}
                            </span>
                        </div>
                        <p class=\"card-text small text-muted mb-3\">
                            {{ promotion.description|default('Aucune description')|slice(0, 80) }}
                            {% if promotion.description|length > 80 %}...{% endif %}
                        </p>
                        <div class=\"mb-2\">
                            <strong class=\"text-dark\">Réduction :</strong> 
                            <span class=\"badge bg-dark text-white px-3 py-2 rounded-pill fs-6\">
                                {% if promotion.typePromotion.name == 'Pourcentage' %}
                                    {{ promotion.value }}%
                                {% else %}
                                    {{ promotion.value|price_with_currency(app.user.hmaService) }}
                                {% endif %}
                            </span>
                        </div>
                        <div class=\"small text-muted\">
                            <i class=\"far fa-calendar-alt me-1\"></i> 
                            {{ promotion.startDate|date('d/m/Y') }}
                            {% if promotion.endDate %}
                                → {{ promotion.endDate|date('d/m/Y') }}
                            {% else %}
                                <span class=\"badge bg-info bg-opacity-10 text-info ms-1\">Sans fin</span>
                            {% endif %}
                        </div>
                        <div class=\"mt-2 small text-muted border-top pt-2\">
                            <i class=\"fas fa-user-circle me-1\"></i> Créé par : 
                            <strong>{{ promotion.user.fullName }}</strong>
                        </div>
                    </div>
                    <div class=\"card-footer bg-transparent border-0 d-flex justify-content-between gap-2 pt-0 pb-3\">
                        <a href=\"{{ path('app_restaurant_promotion_show', {id: promotion.id}) }}\" class=\"btn btn-sm btn-outline-info flex-fill\">
                            <i class=\"fas fa-eye me-1\"></i> Voir
                        </a>
                        <a href=\"{{ path('app_restaurant_promotion_edit', {id: promotion.id}) }}\" class=\"btn btn-sm btn-outline-primary flex-fill\">
                            <i class=\"fas fa-edit me-1\"></i> Modifier
                        </a>
                        {% if is_granted('ROLE_ADMIN') %}
                            <button type=\"button\" class=\"btn btn-sm btn-outline-danger flex-fill\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal{{ promotion.id }}\">
                                <i class=\"fas fa-trash-alt me-1\"></i> Supprimer
                            </button>
                        {% endif %}
                    </div>
                </div>
            </div>

            <!-- Modal de suppression -->
            {% if is_granted('ROLE_ADMIN') %}
            <div class=\"modal fade\" id=\"deleteModal{{ promotion.id }}\" tabindex=\"-1\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-dialog-centered\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header border-0\">
                            <h5 class=\"modal-title text-danger\">
                                <i class=\"fas fa-exclamation-triangle me-2\"></i> Confirmer la suppression
                            </h5>
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                        </div>
                        <div class=\"modal-body text-center py-4\">
                            <i class=\"fas fa-trash-alt fa-4x text-danger mb-3\"></i>
                            <h5>Êtes-vous sûr de vouloir supprimer cette promotion ?</h5>
                            <p class=\"text-muted\">Cette action est irréversible.</p>
                            <div class=\"alert alert-warning mt-3\">
                                <strong>{{ promotion.name }}</strong><br>
                                Toutes les associations (catégories de plats et plats) seront également supprimées.
                            </div>
                        </div>
                        <div class=\"modal-footer border-0\">
                            <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                            <form method=\"post\" action=\"{{ path('app_restaurant_promotion_delete', {id: promotion.id}) }}\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ promotion.id) }}\">
                                <button type=\"submit\" class=\"btn btn-danger\">Supprimer définitivement</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {% endif %}
        {% else %}
            <div class=\"col-12\">
                <div class=\"card border-0 shadow-sm rounded-4 text-center py-5\">
                    <div class=\"card-body\">
                        <i class=\"fas fa-utensils fa-5x text-muted mb-3 opacity-25\"></i>
                        <h4 class=\"text-muted\">Aucune promotion trouvée</h4>
                        <p class=\"text-muted\">Modifiez vos filtres ou créez une nouvelle promotion.</p>
                        <a href=\"{{ path('app_restaurant_promotion_new') }}\" class=\"btn btn-primary mt-2\">
                            <i class=\"fas fa-plus-circle me-2\"></i> Nouvelle promotion
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
                {% for page in 1..totalPages %}
                    <li class=\"page-item {{ page == currentPage ? 'active' }}\">
                        <a class=\"page-link\" href=\"{{ path('app_restaurant_promotion_index', app.request.query.all|merge({'page': page})) }}\">{{ page }}</a>
                    </li>
                {% endfor %}
            </ul>
        </nav>
    {% endif %}
</div>

<style>
    .hover-shadow {
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .hover-shadow:hover {
        transform: translateY(-5px);
        box-shadow: 0 1rem 2rem rgba(0,0,0,0.1) !important;
    }
    .bg-gradient-light {
        background: linear-gradient(135deg, #f5f7fa 0%, #e9ecef 100%);
    }
    .rounded-4 {
        border-radius: 1rem;
    }
    .stat-card {
        transition: transform 0.2s;
    }
    .stat-card:hover {
        transform: scale(1.02);
        background-color: #ffffff !important;
        box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.05);
    }
    @media (max-width: 768px) {
        .card-footer {
            flex-wrap: wrap;
        }
        .card-footer .btn {
            font-size: 0.8rem;
        }
    }
    .text-dark {
        color: #212529 !important;
    }
    .form-control, .form-select {
        color: #212529 !important;
        background-color: #ffffff !important;
    }
    .form-floating > .form-control:focus,
    .form-floating > .form-select:focus {
        color: #212529;
    }
</style>
{% endblock %}", "admin/restaurant/promotion/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\restaurant\\promotion\\index.html.twig");
    }
}
