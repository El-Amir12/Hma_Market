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

/* admin/restaurant/promotion/category_recipe_promotions.html.twig */
class __TwigTemplate_6546b27c9ded8ff9dd4d248cd20b11f4 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Promotions de la catégorie - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["categoryRecipe"] ?? null), "name", [], "any", false, false, false, 4), "html", null, true);
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "<div class=\"container-fluid px-4\">
    <!-- En-tête -->
    <div class=\"d-flex flex-wrap justify-content-between align-items-center mb-4\">
        <div class=\"mb-2 mb-sm-0\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_index");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-tags me-1\"></i> Catégories de plats
                        </a>
                    </li>
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["categoryRecipe"] ?? null), "id", [], "any", false, false, false, 19)]), "html", null, true);
        yield "\" class=\"text-decoration-none\">
                            ";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, ($context["categoryRecipe"] ?? null), "name", [], "any", false, false, false, 20)), "truncate", [30], "method", false, false, false, 20), "html", null, true);
        yield "
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">
                        <i class=\"fas fa-percent me-1\"></i> Promotions
                    </li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-1\">
                <i class=\"fas fa-percent me-2 text-primary\"></i>Promotions de la catégorie
            </h1>
            <p class=\"text-muted mb-0\">
                Catégorie : <strong>";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["categoryRecipe"] ?? null), "name", [], "any", false, false, false, 32), "html", null, true);
        yield "</strong> | 
                Plats : <strong>";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["recipesCount"] ?? null), "html", null, true);
        yield "</strong>
            </p>
        </div>
        <div class=\"d-flex gap-2\">
            <a href=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["categoryRecipe"] ?? null), "id", [], "any", false, false, false, 37)]), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-arrow-left me-2\"></i> Retour à la catégorie
            </a>
            <a href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_promotion_new");
        yield "?category_recipe_id=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["categoryRecipe"] ?? null), "id", [], "any", false, false, false, 40), "html", null, true);
        yield "\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus-circle me-2\"></i> Nouvelle promotion
            </a>
        </div>
    </div>

    <!-- Flash messages -->
    ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 47));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 48
            yield "        <div class=\"alert alert-success alert-dismissible fade show\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["error"], "method", false, false, false, 50));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 51
            yield "        <div class=\"alert alert-danger alert-dismissible fade show\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "
    <!-- Informations de la catégorie -->
    <div class=\"card shadow-sm border-0 mb-4\">
        <div class=\"card-body\">
            <div class=\"row align-items-center\">
                <div class=\"col-md-2 text-center\">
                    <div class=\"bg-light rounded d-flex align-items-center justify-content-center mx-auto\" style=\"width: 80px; height: 80px;\">
                        <i class=\"fas fa-folder-open fa-3x text-primary\"></i>
                    </div>
                </div>
                <div class=\"col-md-10\">
                    <div class=\"row\">
                        <div class=\"col-md-4\">
                            <small class=\"text-muted\">Nom de la catégorie</small>
                            <p class=\"mb-0 fw-bold\">";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["categoryRecipe"] ?? null), "name", [], "any", false, false, false, 67), "html", null, true);
        yield "</p>
                        </div>
                        <div class=\"col-md-4\">
                            <small class=\"text-muted\">Catégorie parente</small>
                            <p class=\"mb-0\">";
        // line 71
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["categoryRecipe"] ?? null), "parent", [], "any", false, false, false, 71)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["categoryRecipe"] ?? null), "parent", [], "any", false, false, false, 71), "name", [], "any", false, false, false, 71), "html", null, true)) : ("Aucune"));
        yield "</p>
                        </div>
                        <div class=\"col-md-4\">
                            <small class=\"text-muted\">Nombre de plats</small>
                            <p class=\"mb-0 fw-bold\">";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["recipesCount"] ?? null), "html", null, true);
        yield "</p>
                        </div>
                    </div>
                    ";
        // line 78
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["categoryRecipe"] ?? null), "description", [], "any", false, false, false, 78)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 79
            yield "                        <div class=\"mt-2\">
                            <small class=\"text-muted\">Description</small>
                            <p class=\"mb-0\">";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, ($context["categoryRecipe"] ?? null), "description", [], "any", false, false, false, 81)), "truncate", [100], "method", false, false, false, 81), "html", null, true);
            yield "</p>
                        </div>
                    ";
        }
        // line 84
        yield "                </div>
            </div>
        </div>
    </div>

    <!-- Statistiques - 6 cartes sur une ligne -->
    <div class=\"card shadow-sm border-0 mb-4\">
        <div class=\"card-header bg-white py-3 border-0\">
            <h5 class=\"mb-0\"><i class=\"fas fa-chart-pie me-2 text-primary\"></i>Statistiques des promotions</h5>
        </div>
        <div class=\"card-body\">
            <div class=\"row g-3\">
                <div class=\"col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12\">
                    <div class=\"stat-card p-3 bg-light rounded-3 text-center\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted small\">Total</span>
                                <h3 class=\"mb-0 fw-bold text-dark\">";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["promotions"] ?? null)), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-percent fa-2x text-primary opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12\">
                    <div class=\"stat-card p-3 bg-light rounded-3 text-center\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-muted small\">Actives</span>
                                <h3 class=\"mb-0 fw-bold text-success\">";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, ($context["promotions"] ?? null), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "isActive", [], "any", false, false, false, 112); })), "html", null, true);
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
                                <h3 class=\"mb-0 fw-bold text-danger\">";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, ($context["promotions"] ?? null), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return  !CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "isActive", [], "any", false, false, false, 123); })), "html", null, true);
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
                                <h3 class=\"mb-0 fw-bold text-warning\">";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, ($context["promotions"] ?? null), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "isOngoing", [], "any", false, false, false, 134); })), "html", null, true);
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
                                <h3 class=\"mb-0 fw-bold text-info\">";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, ($context["promotions"] ?? null), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "isUpcoming", [], "any", false, false, false, 145); })), "html", null, true);
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
                                <h3 class=\"mb-0 fw-bold text-secondary\">";
        // line 156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, ($context["promotions"] ?? null), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "isEnded", [], "any", false, false, false, 156); })), "html", null, true);
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
                <div class=\"col-lg-4 col-md-6\">
                    <label class=\"form-label fw-semibold\">Recherche</label>
                    <div class=\"input-group\">
                        <span class=\"input-group-text bg-white border-end-0\"><i class=\"fas fa-search text-muted\"></i></span>
                        <input type=\"text\" name=\"search\" value=\"";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["search"] ?? null), "html", null, true);
        yield "\" class=\"form-control border-start-0\" placeholder=\"Nom de la promotion...\">
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <label class=\"form-label fw-semibold\">Statut</label>
                    <select name=\"status\" class=\"form-select\">
                        <option value=\"all\" ";
        // line 183
        yield (((($context["status"] ?? null) == "all")) ? ("selected") : (""));
        yield ">Tous</option>
                        <option value=\"active\" ";
        // line 184
        yield (((($context["status"] ?? null) == "active")) ? ("selected") : (""));
        yield ">Actives</option>
                        <option value=\"inactive\" ";
        // line 185
        yield (((($context["status"] ?? null) == "inactive")) ? ("selected") : (""));
        yield ">Inactives</option>
                    </select>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <label class=\"form-label fw-semibold\">Période</label>
                    <select name=\"period\" class=\"form-select\">
                        <option value=\"all\" ";
        // line 191
        yield (((($context["period"] ?? null) == "all")) ? ("selected") : (""));
        yield ">Toutes</option>
                        <option value=\"ongoing\" ";
        // line 192
        yield (((($context["period"] ?? null) == "ongoing")) ? ("selected") : (""));
        yield ">En cours</option>
                        <option value=\"upcoming\" ";
        // line 193
        yield (((($context["period"] ?? null) == "upcoming")) ? ("selected") : (""));
        yield ">À venir</option>
                        <option value=\"ended\" ";
        // line 194
        yield (((($context["period"] ?? null) == "ended")) ? ("selected") : (""));
        yield ">Terminées</option>
                    </select>
                </div>
                <div class=\"col-lg-2 d-flex gap-2 align-items-end\">
                    <a href=\"";
        // line 198
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_category_recipe_promotions", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["categoryRecipe"] ?? null), "id", [], "any", false, false, false, 198)]), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary w-50\">
                        <i class=\"fas fa-undo-alt me-1\"></i> Effacer
                    </a>
                    <button type=\"submit\" class=\"btn btn-primary w-50\">
                        <i class=\"fas fa-filter me-1\"></i> Filtrer
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Liste des promotions -->
    <div class=\"row g-4\">
        ";
        // line 211
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["promotions"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
            // line 212
            yield "            <div class=\"col-xl-4 col-lg-4 col-md-6 col-sm-12\">
                <div class=\"card h-100 border-0 shadow-sm hover-shadow transition-all rounded-4 overflow-hidden\">
                    ";
            // line 214
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "image", [], "any", false, false, false, 214)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 215
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/promotions/" . CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "image", [], "any", false, false, false, 215))), "html", null, true);
                yield "\" class=\"card-img-top\" style=\"height: 160px; object-fit: cover;\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "name", [], "any", false, false, false, 215), "html", null, true);
                yield "\">
                    ";
            } else {
                // line 217
                yield "                        <div class=\"bg-gradient-light d-flex align-items-center justify-content-center\" style=\"height: 160px;\">
                            <i class=\"fas fa-percent fa-4x text-muted opacity-25\"></i>
                        </div>
                    ";
            }
            // line 221
            yield "                    
                    <div class=\"card-body\">
                        <div class=\"d-flex justify-content-between align-items-start mb-2\">
                            <h5 class=\"card-title fw-bold mb-0 text-dark\">";
            // line 224
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "name", [], "any", false, false, false, 224), 0, 40), "html", null, true);
            yield "</h5>
                            <span class=\"badge ";
            // line 225
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "isActive", [], "any", false, false, false, 225)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-secondary"));
            yield " px-2 py-1 ms-1 flex-shrink-0\">
                                ";
            // line 226
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "isActive", [], "any", false, false, false, 226)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Active") : ("Inactive"));
            yield "
                            </span>
                        </div>
                        <p class=\"card-text small text-muted mb-3\">
                            ";
            // line 230
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "description", [], "any", true, true, false, 230)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "description", [], "any", false, false, false, 230), "Aucune description")) : ("Aucune description")), 0, 80), "html", null, true);
            yield "
                            ";
            // line 231
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "description", [], "any", false, false, false, 231)) > 80)) {
                yield "...";
            }
            // line 232
            yield "                        </p>
                        
                        <div class=\"mb-2\">
                            <strong class=\"text-dark\">Réduction :</strong> 
                            <span class=\"badge bg-dark text-white px-3 py-2 rounded-pill fs-6\">
                                ";
            // line 237
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "typePromotion", [], "any", false, false, false, 237), "name", [], "any", false, false, false, 237) == "Pourcentage")) {
                // line 238
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "value", [], "any", false, false, false, 238), "html", null, true);
                yield "%
                                ";
            } else {
                // line 240
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "value", [], "any", false, false, false, 240), CoreExtension::getAttribute($this->env, $this->source, ($context["categoryRecipe"] ?? null), "hmaService", [], "any", false, false, false, 240)), "html", null, true);
                yield "
                                ";
            }
            // line 242
            yield "                            </span>
                        </div>
                        
                        <div class=\"small text-muted\">
                            <i class=\"far fa-calendar-alt me-1\"></i> 
                            ";
            // line 247
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "startDate", [], "any", false, false, false, 247), "d/m/Y"), "html", null, true);
            yield "
                            ";
            // line 248
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "endDate", [], "any", false, false, false, 248)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 249
                yield "                                → ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "endDate", [], "any", false, false, false, 249), "d/m/Y"), "html", null, true);
                yield "
                            ";
            } else {
                // line 251
                yield "                                <span class=\"badge bg-info bg-opacity-10 text-info ms-1\">Sans fin</span>
                            ";
            }
            // line 253
            yield "                        </div>
                        
                        <!-- Indicateur de période -->
                        <div class=\"mt-2\">
                            ";
            // line 257
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "isOngoing", [], "any", false, false, false, 257)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 258
                yield "                                <span class=\"badge bg-warning text-dark\">
                                    <i class=\"fas fa-play me-1\"></i> En cours
                                </span>
                            ";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 261
$context["promotion"], "isUpcoming", [], "any", false, false, false, 261)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 262
                yield "                                <span class=\"badge bg-info\">
                                    <i class=\"fas fa-clock me-1\"></i> À venir
                                </span>
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 265
$context["promotion"], "endDate", [], "any", false, false, false, 265) && (CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "endDate", [], "any", false, false, false, 265) < $this->extensions['Twig\Extension\CoreExtension']->convertDate()))) {
                // line 266
                yield "                                <span class=\"badge bg-secondary\">
                                    <i class=\"fas fa-stop me-1\"></i> Terminée
                                </span>
                            ";
            }
            // line 270
            yield "                        </div>
                        
                        <!-- Type de promotion -->
                        <div class=\"mt-2\">
                            <small class=\"text-muted\">
                                <i class=\"fas fa-tag me-1\"></i>
                                Type : ";
            // line 276
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "typePromotion", [], "any", false, true, false, 276), "name", [], "any", true, true, false, 276)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "typePromotion", [], "any", false, false, false, 276), "name", [], "any", false, false, false, 276), "Standard")) : ("Standard")), "html", null, true);
            yield "
                            </small>
                        </div>
                    </div>
                    
                    <div class=\"card-footer bg-transparent border-0 d-flex justify-content-between gap-2 pt-0 pb-3\">
                        <a href=\"";
            // line 282
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_promotion_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 282)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-info flex-fill\">
                            <i class=\"fas fa-eye me-1\"></i> Voir
                        </a>
                        <a href=\"";
            // line 285
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_promotion_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 285)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary flex-fill\">
                            <i class=\"fas fa-edit me-1\"></i> Modifier
                        </a>
                        ";
            // line 288
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 289
                yield "                            <button type=\"button\" class=\"btn btn-sm btn-outline-danger flex-fill\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 289), "html", null, true);
                yield "\">
                                <i class=\"fas fa-trash-alt me-1\"></i> Supprimer
                            </button>
                        ";
            }
            // line 293
            yield "                    </div>
                </div>
            </div>

            <!-- Modal de suppression -->
            ";
            // line 298
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 299
                yield "            <div class=\"modal fade\" id=\"deleteModal";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 299), "html", null, true);
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
                // line 313
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "name", [], "any", false, false, false, 313), "html", null, true);
                yield "</strong><br>
                                Cette promotion ne sera plus associée à cette catégorie.
                            </div>
                        </div>
                        <div class=\"modal-footer border-0\">
                            <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                            <form method=\"post\" action=\"";
                // line 319
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_promotion_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 319)]), "html", null, true);
                yield "\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 320
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 320))), "html", null, true);
                yield "\">
                                <button type=\"submit\" class=\"btn btn-danger\">Supprimer définitivement</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            ";
            }
            // line 328
            yield "        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 329
            yield "            <div class=\"col-12\">
                <div class=\"card border-0 shadow-sm rounded-4 text-center py-5\">
                    <div class=\"card-body\">
                        <i class=\"fas fa-percent fa-5x text-muted mb-3 opacity-25\"></i>
                        <h4 class=\"text-muted\">Aucune promotion associée à cette catégorie</h4>
                        <p class=\"text-muted\">Ajoutez une promotion pour cette catégorie.</p>
                        <a href=\"";
            // line 335
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_promotion_new");
            yield "?category_recipe_id=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["categoryRecipe"] ?? null), "id", [], "any", false, false, false, 335), "html", null, true);
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
        // line 342
        yield "    </div>

    <!-- Pagination -->
    ";
        // line 345
        if ((($context["totalPages"] ?? null) > 1)) {
            // line 346
            yield "        <nav class=\"mt-5\">
            <ul class=\"pagination justify-content-center\">
                ";
            // line 348
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, ($context["totalPages"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 349
                yield "                    <li class=\"page-item ";
                yield ((($context["page"] == ($context["currentPage"] ?? null))) ? ("active") : (""));
                yield "\">
                        <a class=\"page-link\" href=\"";
                // line 350
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_category_recipe_promotions", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 350), "query", [], "any", false, false, false, 350), "all", [], "any", false, false, false, 350), ["page" => $context["page"], "id" => CoreExtension::getAttribute($this->env, $this->source, ($context["categoryRecipe"] ?? null), "id", [], "any", false, false, false, 350)])), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                yield "</a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 353
            yield "            </ul>
        </nav>
    ";
        }
        // line 356
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
            font-size: 0.75rem;
            padding: 0.375rem 0.5rem;
        }
        .stat-card h3 {
            font-size: 1.25rem;
        }
        .stat-card i {
            font-size: 1.25rem;
        }
    }
    .text-dark {
        color: #212529 !important;
    }
    .form-control, .form-select {
        color: #212529 !important;
        background-color: #ffffff !important;
    }
</style>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/restaurant/promotion/category_recipe_promotions.html.twig";
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
        return array (  664 => 356,  659 => 353,  648 => 350,  643 => 349,  639 => 348,  635 => 346,  633 => 345,  628 => 342,  613 => 335,  605 => 329,  600 => 328,  589 => 320,  585 => 319,  576 => 313,  558 => 299,  556 => 298,  549 => 293,  541 => 289,  539 => 288,  533 => 285,  527 => 282,  518 => 276,  510 => 270,  504 => 266,  502 => 265,  497 => 262,  495 => 261,  490 => 258,  488 => 257,  482 => 253,  478 => 251,  472 => 249,  470 => 248,  466 => 247,  459 => 242,  453 => 240,  447 => 238,  445 => 237,  438 => 232,  434 => 231,  430 => 230,  423 => 226,  419 => 225,  415 => 224,  410 => 221,  404 => 217,  396 => 215,  394 => 214,  390 => 212,  385 => 211,  369 => 198,  362 => 194,  358 => 193,  354 => 192,  350 => 191,  341 => 185,  337 => 184,  333 => 183,  324 => 177,  300 => 156,  286 => 145,  272 => 134,  258 => 123,  244 => 112,  230 => 101,  211 => 84,  205 => 81,  201 => 79,  199 => 78,  193 => 75,  186 => 71,  179 => 67,  163 => 53,  154 => 51,  149 => 50,  140 => 48,  136 => 47,  124 => 40,  118 => 37,  111 => 33,  107 => 32,  92 => 20,  88 => 19,  80 => 14,  71 => 7,  64 => 6,  52 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/restaurant/promotion/category_recipe_promotions.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\restaurant\\promotion\\category_recipe_promotions.html.twig");
    }
}
