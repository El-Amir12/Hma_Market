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

/* admin/restaurant/promotion/category_recipe/index.html.twig */
class __TwigTemplate_c17374e02b419d0570a1fc53ecc7a79f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/restaurant/promotion/category_recipe/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/restaurant/promotion/category_recipe/index.html.twig"));

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

        yield "Promotions par catégorie de plats - Restaurant";
        
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
    <div class=\"d-flex flex-wrap justify-content-between align-items-center mb-4\">
        <div>
            <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_promotion_index");
        yield "\" class=\"btn btn-outline-secondary mb-2\">
                <i class=\"fas fa-arrow-left me-2\"></i> Retour aux promotions
            </a>
            <h1 class=\"h3 mb-1\">
                <i class=\"fas fa-folder-tree me-2 text-primary\"></i>Promotions par catégorie de plats
            </h1>
            <p class=\"text-muted mb-0\">Gérez les associations promotion → catégorie de plats</p>
        </div>
        <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_promotion_new");
        yield "\" class=\"btn btn-primary\">
            <i class=\"fas fa-plus-circle me-2\"></i> Nouvelle promotion
        </a>
    </div>

    <!-- Flash messages -->
    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "flashes", ["success"], "method", false, false, false, 25));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 26
            yield "        <div class=\"alert alert-success alert-dismissible fade show\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "flashes", ["error"], "method", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 29
            yield "        <div class=\"alert alert-danger alert-dismissible fade show\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        yield "
    <!-- Filtres -->
    <div class=\"card shadow-sm border-0 mb-4\">
        <div class=\"card-header bg-white py-3 border-0\">
            <h5 class=\"mb-0\"><i class=\"fas fa-filter me-2 text-primary\"></i>Filtres</h5>
        </div>
        <div class=\"card-body\">
            <form method=\"get\" class=\"row g-3 align-items-end\">
                <div class=\"col-lg-4 col-md-6\">
                    <label class=\"form-label fw-semibold\">Recherche</label>
                    <div class=\"input-group\">
                        <span class=\"input-group-text bg-white border-end-0\"><i class=\"fas fa-search text-muted\"></i></span>
                        <input type=\"text\" name=\"search\" value=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 43, $this->source); })()), "html", null, true);
        yield "\" class=\"form-control border-start-0\" placeholder=\"Promotion ou catégorie...\">
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <label class=\"form-label fw-semibold\">Statut</label>
                    <select name=\"status\" class=\"form-select\">
                        <option value=\"all\" ";
        // line 49
        yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 49, $this->source); })()) == "all")) ? ("selected") : (""));
        yield ">Tous</option>
                        <option value=\"active\" ";
        // line 50
        yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 50, $this->source); })()) == "active")) ? ("selected") : (""));
        yield ">Actives</option>
                        <option value=\"inactive\" ";
        // line 51
        yield ((((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 51, $this->source); })()) == "inactive")) ? ("selected") : (""));
        yield ">Inactives</option>
                    </select>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <label class=\"form-label fw-semibold\">Promotion</label>
                    <select name=\"promotion\" class=\"form-select select2-promotion\">
                        <option value=\"0\">Toutes les promotions</option>
                        ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 58, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
            // line 59
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 59), "html", null, true);
            yield "\" ";
            yield ((((isset($context["selectedPromotion"]) || array_key_exists("selectedPromotion", $context) ? $context["selectedPromotion"] : (function () { throw new RuntimeError('Variable "selectedPromotion" does not exist.', 59, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 59))) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "name", [], "any", false, false, false, 59), "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['promotion'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        yield "                    </select>
                </div>
                <div class=\"col-lg-2 col-md-12\">
                    <div class=\"d-flex gap-2\">
                        <a href=\"";
        // line 65
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_promotion_category_index");
        yield "\" class=\"btn btn-outline-secondary flex-fill\">
                            <i class=\"fas fa-undo-alt me-1\"></i> Effacer
                        </a>
                        <button type=\"submit\" class=\"btn btn-primary flex-fill\">
                            <i class=\"fas fa-filter me-1\"></i> Filtrer
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Statistiques -->
    <div class=\"row g-3 mb-4\">
        <div class=\"col-12\">
            <div class=\"card border-0 bg-primary bg-opacity-10 rounded-4 w-100\">
                <div class=\"card-body text-center py-3\">
                    <h2 class=\"mb-0 fw-bold text-dark\">";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalCount"]) || array_key_exists("totalCount", $context) ? $context["totalCount"] : (function () { throw new RuntimeError('Variable "totalCount" does not exist.', 82, $this->source); })()), "html", null, true);
        yield "</h2>
                    <small class=\"text-muted\">Associations</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Tableau des associations -->
    <div class=\"card shadow-sm border-0 rounded-4\">
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover mb-0 align-middle\">
                    <thead style=\"background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);\">
                        <tr>
                            <th class=\"text-white\" style=\"width: 80px\">Image</th>
                            <th class=\"text-white\">Promotion</th>
                            <th class=\"text-white\">Catégorie de plats</th>
                            <th class=\"text-white\">Période</th>
                            <th class=\"text-white\">Statut</th>
                            <th class=\"text-white\">Réduction</th>
                            <th class=\"text-white\" class=\"text-center\">Plats</th>
                            <th class=\"text-white\" style=\"width: 100px\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 107, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 108
            yield "                            <tr>
                                <td>
                                    ";
            // line 110
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 110), "image", [], "any", false, false, false, 110)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 111
                yield "                                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/promotions/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 111), "image", [], "any", false, false, false, 111))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 111), "name", [], "any", false, false, false, 111), "html", null, true);
                yield "\" class=\"rounded\" style=\"width: 50px; height: 50px; object-fit: cover;\">
                                    ";
            } else {
                // line 113
                yield "                                        <div class=\"bg-light rounded d-flex align-items-center justify-content-center\" style=\"width: 50px; height: 50px;\">
                                            <i class=\"fas fa-tag fa-2x text-muted\"></i>
                                        </div>
                                    ";
            }
            // line 117
            yield "                                 </td>
                                 <td>
                                    <strong>";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 119), "name", [], "any", false, false, false, 119), "html", null, true);
            yield "</strong>
                                    <br><small class=\"text-muted\">";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 120), "typePromotion", [], "any", false, false, false, 120), "name", [], "any", false, false, false, 120), "html", null, true);
            yield "</small>
                                 </td>
                                 <td>
                                    <strong>";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "categoryRecipe", [], "any", false, false, false, 123), "name", [], "any", false, false, false, 123), "html", null, true);
            yield "</strong>
                                    ";
            // line 124
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "categoryRecipe", [], "any", false, false, false, 124), "parent", [], "any", false, false, false, 124)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 125
                yield "                                        <small class=\"text-muted d-block\">(Sous-catégorie de ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "categoryRecipe", [], "any", false, false, false, 125), "parent", [], "any", false, false, false, 125), "name", [], "any", false, false, false, 125), "html", null, true);
                yield ")</small>
                                    ";
            }
            // line 127
            yield "                                 </td>
                                <td class=\"small\">
                                    ";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 129), "startDate", [], "any", false, false, false, 129), "d/m/Y"), "html", null, true);
            yield "
                                    ";
            // line 130
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 130), "endDate", [], "any", false, false, false, 130)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 131
                yield "                                        <br>→ ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 131), "endDate", [], "any", false, false, false, 131), "d/m/Y"), "html", null, true);
                yield "
                                    ";
            } else {
                // line 133
                yield "                                        <br><span class=\"badge bg-info bg-opacity-10 text-info\">Sans fin</span>
                                    ";
            }
            // line 135
            yield "                                 </td>
                                 <td>
                                    <span class=\"badge ";
            // line 137
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 137), "isActive", [], "any", false, false, false, 137)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-secondary"));
            yield "\">
                                        ";
            // line 138
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 138), "isActive", [], "any", false, false, false, 138)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Active") : ("Inactive"));
            yield "
                                    </span>
                                 </td>
                                 <td>
                                    <span class=\"badge bg-dark text-white px-3 py-2 rounded-pill\">
                                        ";
            // line 143
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 143), "typePromotion", [], "any", false, false, false, 143), "name", [], "any", false, false, false, 143) == "Pourcentage")) {
                // line 144
                yield "                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 144), "value", [], "any", false, false, false, 144), "html", null, true);
                yield "%
                                        ";
            } else {
                // line 146
                yield "                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 146), "value", [], "any", false, false, false, 146), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 146, $this->source); })()), "user", [], "any", false, false, false, 146), "hmaService", [], "any", false, false, false, 146)), "html", null, true);
                yield "
                                        ";
            }
            // line 148
            yield "                                    </span>
                                 </td>
                                 <td>
                                    <span class=\"badge bg-primary rounded-pill\">";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "categoryRecipe", [], "any", false, false, false, 151), "recipes", [], "any", false, false, false, 151)), "html", null, true);
            yield "</span>
                                 </td>
                                 <td>
                                    <div class=\"btn-group btn-group-sm\">
                                        <a href=\"";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_promotion_category_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 155)]), "html", null, true);
            yield "\" class=\"btn btn-outline-info\" title=\"Voir\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                        <button type=\"button\" class=\"btn btn-outline-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal";
            // line 158
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 158), "html", null, true);
            yield "\" title=\"Supprimer\">
                                            <i class=\"fas fa-trash-alt\"></i>
                                        </button>
                                    </div>
                                 </td>
                             </tr>

                            <!-- Modal de suppression -->
                            <div class=\"modal fade\" id=\"deleteModal";
            // line 166
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 166), "html", null, true);
            yield "\" tabindex=\"-1\">
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
                                            <h5>Supprimer cette association ?</h5>
                                            <p>La promotion <strong>";
            // line 178
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "promotion", [], "any", false, false, false, 178), "name", [], "any", false, false, false, 178), "html", null, true);
            yield "</strong> ne sera plus appliquée à la catégorie <strong>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "categoryRecipe", [], "any", false, false, false, 178), "name", [], "any", false, false, false, 178), "html", null, true);
            yield "</strong>.</p>
                                        </div>
                                        <div class=\"modal-footer border-0\">
                                            <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                                            <form method=\"post\" action=\"";
            // line 182
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_promotion_category_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 182)]), "html", null, true);
            yield "\">
                                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 183
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete-category-recipe" . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 183))), "html", null, true);
            yield "\">
                                                <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
            $context['_iterated'] = true;
        }
        // line 190
        if (!$context['_iterated']) {
            // line 191
            yield "                            <tr>
                                <td colspan=\"8\" class=\"text-center py-5 text-muted\">
                                    <i class=\"fas fa-folder-tree fa-3x mb-3 text-muted opacity-25\"></i>
                                    <p>Aucune association promotion-catégorie de plats trouvée.</p>
                                    <a href=\"";
            // line 195
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_promotion_new");
            yield "\" class=\"btn btn-primary btn-sm\">
                                        <i class=\"fas fa-plus-circle me-2\"></i> Créer une promotion
                                    </a>
                                 <td>
                             </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 201
        yield "                    </tbody>
                 </table>
            </div>
        </div>
    </div>

    <!-- Pagination -->
    ";
        // line 208
        if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 208, $this->source); })()) > 1)) {
            // line 209
            yield "        <nav class=\"mt-4\">
            <ul class=\"pagination justify-content-center\">
                ";
            // line 211
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 211, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 212
                yield "                    <li class=\"page-item ";
                yield ((($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 212, $this->source); })()))) ? ("active") : (""));
                yield "\">
                        <a class=\"page-link\" href=\"";
                // line 213
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_promotion_category_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 213, $this->source); })()), "request", [], "any", false, false, false, 213), "query", [], "any", false, false, false, 213), "all", [], "any", false, false, false, 213), ["page" => $context["page"]])), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                yield "</a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 216
            yield "            </ul>
        </nav>
    ";
        }
        // line 219
        yield "</div>

<style>
    .rounded-4 {
        border-radius: 1rem;
        overflow: hidden;
    }
    
    /* Styles du tableau */
    .table {
        margin-bottom: 0;
    }
    
    .table th {
        background: linear-gradient(135deg, #667eea 0%, #0463f1 100%) !important;
        color: #ffffff !important;
        border: none;
        font-weight: 600;
        font-size: 0.8rem;
        text-transform: uppercase;
        letter-spacing: 0.8px;
        padding: 14px 12px;
        vertical-align: middle;
        white-space: nowrap;
    }
    
    .table td {
        vertical-align: middle;
        padding: 1rem 0.75rem;
        background-color: #ffffff;
        border-bottom: 1px solid #e9ecef;
    }
    
    .table tbody tr:hover {
        background-color: rgba(4, 99, 241, 0.04);
    }
    
    .table tbody tr:hover td {
        background-color: transparent;
    }
    
    /* Cartes et badges */
    .bg-primary.bg-opacity-10 {
        background-color: rgba(13, 110, 253, 0.1) !important;
    }
    
    .bg-dark {
        background-color: #212529 !important;
    }
    
    .text-white {
        color: #ffffff !important;
    }
    
    .flex-fill {
        flex: 1 1 auto !important;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .table th, .table td {
            padding: 0.75rem 0.5rem;
            font-size: 0.75rem;
        }
        .table th {
            font-size: 0.7rem;
            letter-spacing: 0.5px;
        }
        .btn-group-sm .btn {
            padding: 0.25rem 0.5rem;
        }
    }
    
    @media (max-width: 576px) {
        .col-lg-2.col-md-12 {
            margin-top: 0.5rem;
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
        return "admin/restaurant/promotion/category_recipe/index.html.twig";
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
        return array (  494 => 219,  489 => 216,  478 => 213,  473 => 212,  469 => 211,  465 => 209,  463 => 208,  454 => 201,  442 => 195,  436 => 191,  434 => 190,  422 => 183,  418 => 182,  409 => 178,  394 => 166,  383 => 158,  377 => 155,  370 => 151,  365 => 148,  359 => 146,  353 => 144,  351 => 143,  343 => 138,  339 => 137,  335 => 135,  331 => 133,  325 => 131,  323 => 130,  319 => 129,  315 => 127,  309 => 125,  307 => 124,  303 => 123,  297 => 120,  293 => 119,  289 => 117,  283 => 113,  275 => 111,  273 => 110,  269 => 108,  264 => 107,  236 => 82,  216 => 65,  210 => 61,  197 => 59,  193 => 58,  183 => 51,  179 => 50,  175 => 49,  166 => 43,  152 => 31,  143 => 29,  138 => 28,  129 => 26,  125 => 25,  116 => 19,  105 => 11,  100 => 8,  87 => 7,  64 => 5,  41 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/restaurant/promotion/category_recipe/index.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}Promotions par catégorie de plats - Restaurant{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
    <div class=\"d-flex flex-wrap justify-content-between align-items-center mb-4\">
        <div>
            <a href=\"{{ path('app_restaurant_promotion_index') }}\" class=\"btn btn-outline-secondary mb-2\">
                <i class=\"fas fa-arrow-left me-2\"></i> Retour aux promotions
            </a>
            <h1 class=\"h3 mb-1\">
                <i class=\"fas fa-folder-tree me-2 text-primary\"></i>Promotions par catégorie de plats
            </h1>
            <p class=\"text-muted mb-0\">Gérez les associations promotion → catégorie de plats</p>
        </div>
        <a href=\"{{ path('app_restaurant_promotion_new') }}\" class=\"btn btn-primary\">
            <i class=\"fas fa-plus-circle me-2\"></i> Nouvelle promotion
        </a>
    </div>

    <!-- Flash messages -->
    {% for message in app.flashes('success') %}
        <div class=\"alert alert-success alert-dismissible fade show\">{{ message }}<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
    {% endfor %}
    {% for message in app.flashes('error') %}
        <div class=\"alert alert-danger alert-dismissible fade show\">{{ message }}<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
    {% endfor %}

    <!-- Filtres -->
    <div class=\"card shadow-sm border-0 mb-4\">
        <div class=\"card-header bg-white py-3 border-0\">
            <h5 class=\"mb-0\"><i class=\"fas fa-filter me-2 text-primary\"></i>Filtres</h5>
        </div>
        <div class=\"card-body\">
            <form method=\"get\" class=\"row g-3 align-items-end\">
                <div class=\"col-lg-4 col-md-6\">
                    <label class=\"form-label fw-semibold\">Recherche</label>
                    <div class=\"input-group\">
                        <span class=\"input-group-text bg-white border-end-0\"><i class=\"fas fa-search text-muted\"></i></span>
                        <input type=\"text\" name=\"search\" value=\"{{ search }}\" class=\"form-control border-start-0\" placeholder=\"Promotion ou catégorie...\">
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <label class=\"form-label fw-semibold\">Statut</label>
                    <select name=\"status\" class=\"form-select\">
                        <option value=\"all\" {{ status == 'all' ? 'selected' }}>Tous</option>
                        <option value=\"active\" {{ status == 'active' ? 'selected' }}>Actives</option>
                        <option value=\"inactive\" {{ status == 'inactive' ? 'selected' }}>Inactives</option>
                    </select>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <label class=\"form-label fw-semibold\">Promotion</label>
                    <select name=\"promotion\" class=\"form-select select2-promotion\">
                        <option value=\"0\">Toutes les promotions</option>
                        {% for promotion in promotions %}
                            <option value=\"{{ promotion.id }}\" {{ selectedPromotion == promotion.id ? 'selected' }}>{{ promotion.name }}</option>
                        {% endfor %}
                    </select>
                </div>
                <div class=\"col-lg-2 col-md-12\">
                    <div class=\"d-flex gap-2\">
                        <a href=\"{{ path('app_restaurant_promotion_category_index') }}\" class=\"btn btn-outline-secondary flex-fill\">
                            <i class=\"fas fa-undo-alt me-1\"></i> Effacer
                        </a>
                        <button type=\"submit\" class=\"btn btn-primary flex-fill\">
                            <i class=\"fas fa-filter me-1\"></i> Filtrer
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Statistiques -->
    <div class=\"row g-3 mb-4\">
        <div class=\"col-12\">
            <div class=\"card border-0 bg-primary bg-opacity-10 rounded-4 w-100\">
                <div class=\"card-body text-center py-3\">
                    <h2 class=\"mb-0 fw-bold text-dark\">{{ totalCount }}</h2>
                    <small class=\"text-muted\">Associations</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Tableau des associations -->
    <div class=\"card shadow-sm border-0 rounded-4\">
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover mb-0 align-middle\">
                    <thead style=\"background: linear-gradient(135deg, #667eea 0%, #0463f1 100%);\">
                        <tr>
                            <th class=\"text-white\" style=\"width: 80px\">Image</th>
                            <th class=\"text-white\">Promotion</th>
                            <th class=\"text-white\">Catégorie de plats</th>
                            <th class=\"text-white\">Période</th>
                            <th class=\"text-white\">Statut</th>
                            <th class=\"text-white\">Réduction</th>
                            <th class=\"text-white\" class=\"text-center\">Plats</th>
                            <th class=\"text-white\" style=\"width: 100px\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for item in items %}
                            <tr>
                                <td>
                                    {% if item.promotion.image %}
                                        <img src=\"{{ asset('uploads/promotions/' ~ item.promotion.image) }}\" alt=\"{{ item.promotion.name }}\" class=\"rounded\" style=\"width: 50px; height: 50px; object-fit: cover;\">
                                    {% else %}
                                        <div class=\"bg-light rounded d-flex align-items-center justify-content-center\" style=\"width: 50px; height: 50px;\">
                                            <i class=\"fas fa-tag fa-2x text-muted\"></i>
                                        </div>
                                    {% endif %}
                                 </td>
                                 <td>
                                    <strong>{{ item.promotion.name }}</strong>
                                    <br><small class=\"text-muted\">{{ item.promotion.typePromotion.name }}</small>
                                 </td>
                                 <td>
                                    <strong>{{ item.categoryRecipe.name }}</strong>
                                    {% if item.categoryRecipe.parent %}
                                        <small class=\"text-muted d-block\">(Sous-catégorie de {{ item.categoryRecipe.parent.name }})</small>
                                    {% endif %}
                                 </td>
                                <td class=\"small\">
                                    {{ item.promotion.startDate|date('d/m/Y') }}
                                    {% if item.promotion.endDate %}
                                        <br>→ {{ item.promotion.endDate|date('d/m/Y') }}
                                    {% else %}
                                        <br><span class=\"badge bg-info bg-opacity-10 text-info\">Sans fin</span>
                                    {% endif %}
                                 </td>
                                 <td>
                                    <span class=\"badge {{ item.promotion.isActive ? 'bg-success' : 'bg-secondary' }}\">
                                        {{ item.promotion.isActive ? 'Active' : 'Inactive' }}
                                    </span>
                                 </td>
                                 <td>
                                    <span class=\"badge bg-dark text-white px-3 py-2 rounded-pill\">
                                        {% if item.promotion.typePromotion.name == 'Pourcentage' %}
                                            {{ item.promotion.value }}%
                                        {% else %}
                                            {{ item.promotion.value|price_with_currency(app.user.hmaService) }}
                                        {% endif %}
                                    </span>
                                 </td>
                                 <td>
                                    <span class=\"badge bg-primary rounded-pill\">{{ item.categoryRecipe.recipes|length }}</span>
                                 </td>
                                 <td>
                                    <div class=\"btn-group btn-group-sm\">
                                        <a href=\"{{ path('app_restaurant_promotion_category_show', {id: item.id}) }}\" class=\"btn btn-outline-info\" title=\"Voir\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                        <button type=\"button\" class=\"btn btn-outline-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal{{ item.id }}\" title=\"Supprimer\">
                                            <i class=\"fas fa-trash-alt\"></i>
                                        </button>
                                    </div>
                                 </td>
                             </tr>

                            <!-- Modal de suppression -->
                            <div class=\"modal fade\" id=\"deleteModal{{ item.id }}\" tabindex=\"-1\">
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
                                            <h5>Supprimer cette association ?</h5>
                                            <p>La promotion <strong>{{ item.promotion.name }}</strong> ne sera plus appliquée à la catégorie <strong>{{ item.categoryRecipe.name }}</strong>.</p>
                                        </div>
                                        <div class=\"modal-footer border-0\">
                                            <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                                            <form method=\"post\" action=\"{{ path('app_restaurant_promotion_category_delete', {id: item.id}) }}\">
                                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete-category-recipe' ~ item.id) }}\">
                                                <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {% else %}
                            <tr>
                                <td colspan=\"8\" class=\"text-center py-5 text-muted\">
                                    <i class=\"fas fa-folder-tree fa-3x mb-3 text-muted opacity-25\"></i>
                                    <p>Aucune association promotion-catégorie de plats trouvée.</p>
                                    <a href=\"{{ path('app_restaurant_promotion_new') }}\" class=\"btn btn-primary btn-sm\">
                                        <i class=\"fas fa-plus-circle me-2\"></i> Créer une promotion
                                    </a>
                                 <td>
                             </tr>
                        {% endfor %}
                    </tbody>
                 </table>
            </div>
        </div>
    </div>

    <!-- Pagination -->
    {% if totalPages > 1 %}
        <nav class=\"mt-4\">
            <ul class=\"pagination justify-content-center\">
                {% for page in 1..totalPages %}
                    <li class=\"page-item {{ page == currentPage ? 'active' }}\">
                        <a class=\"page-link\" href=\"{{ path('app_restaurant_promotion_category_index', app.request.query.all|merge({'page': page})) }}\">{{ page }}</a>
                    </li>
                {% endfor %}
            </ul>
        </nav>
    {% endif %}
</div>

<style>
    .rounded-4 {
        border-radius: 1rem;
        overflow: hidden;
    }
    
    /* Styles du tableau */
    .table {
        margin-bottom: 0;
    }
    
    .table th {
        background: linear-gradient(135deg, #667eea 0%, #0463f1 100%) !important;
        color: #ffffff !important;
        border: none;
        font-weight: 600;
        font-size: 0.8rem;
        text-transform: uppercase;
        letter-spacing: 0.8px;
        padding: 14px 12px;
        vertical-align: middle;
        white-space: nowrap;
    }
    
    .table td {
        vertical-align: middle;
        padding: 1rem 0.75rem;
        background-color: #ffffff;
        border-bottom: 1px solid #e9ecef;
    }
    
    .table tbody tr:hover {
        background-color: rgba(4, 99, 241, 0.04);
    }
    
    .table tbody tr:hover td {
        background-color: transparent;
    }
    
    /* Cartes et badges */
    .bg-primary.bg-opacity-10 {
        background-color: rgba(13, 110, 253, 0.1) !important;
    }
    
    .bg-dark {
        background-color: #212529 !important;
    }
    
    .text-white {
        color: #ffffff !important;
    }
    
    .flex-fill {
        flex: 1 1 auto !important;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .table th, .table td {
            padding: 0.75rem 0.5rem;
            font-size: 0.75rem;
        }
        .table th {
            font-size: 0.7rem;
            letter-spacing: 0.5px;
        }
        .btn-group-sm .btn {
            padding: 0.25rem 0.5rem;
        }
    }
    
    @media (max-width: 576px) {
        .col-lg-2.col-md-12 {
            margin-top: 0.5rem;
        }
    }
</style>
{% endblock %}", "admin/restaurant/promotion/category_recipe/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\restaurant\\promotion\\category_recipe\\index.html.twig");
    }
}
