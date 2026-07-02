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

/* sale/restaurant/index.html.twig */
class __TwigTemplate_5fa2d2b241423296aff836d7f42450df extends Template
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
        yield "Menu ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["companyName"] ?? null), "html", null, true);
        yield " - HMA Market";
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
    <!-- En-tête avec quota et bouton d'ajout -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <h1 class=\"h3 mb-0 text-gray-800 fw-bold\">
                <i class=\"fas fa-utensils me-2\"></i>Menu ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["companyName"] ?? null), "html", null, true);
        yield "
            </h1>
            <p class=\"text-muted mt-1\">Gérez vos plats et recettes</p>
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
        yield (((($tmp = ($context["quotaReached"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-danger") : ("text-success"));
        yield " fw-bold\">
                            ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["activeCount"] ?? null), "html", null, true);
        yield " / ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["quota"] ?? null), "html", null, true);
        yield "
                            ";
        // line 30
        if ((($context["quota"] ?? null) == "Illimité")) {
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
        if ((($context["subscriptionInactiveFiltered"] ?? null) > 0)) {
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["subscriptionInactiveFiltered"] ?? null), "html", null, true);
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
        if ((($tmp = ($context["quotaReached"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 63
            yield "    <div class=\"alert alert-warning alert-dismissible fade show shadow-sm\" role=\"alert\">
        <div class=\"d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <div>
                <i class=\"fas fa-exclamation-triangle me-2\"></i>
                <strong>Quota atteint !</strong> Vous avez utilisé vos ";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["quota"] ?? null), "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 78));
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["error"], "method", false, false, false, 85));
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalFiltered"] ?? null), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["activeFiltered"] ?? null), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["inactiveFiltered"] ?? null), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["subscriptionActiveFiltered"] ?? null), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["subscriptionInactiveFiltered"] ?? null), "html", null, true);
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
        <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center flex-wrap gap-3\">
            <h5 class=\"mb-0 fw-semibold\">
                <i class=\"fas fa-filter text-primary me-2\"></i>Filtres
            </h5>
            <div class=\"d-flex gap-2\">
                <button type=\"submit\" form=\"filter-form\" class=\"btn btn-primary\">
                    <i class=\"fas fa-filter me-2\"></i>Filtrer
                </button>
                <a href=\"";
        // line 180
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_index");
        yield "\" class=\"btn btn-outline-secondary\">
                    <i class=\"fas fa-undo me-2\"></i>Effacer
                </a>
            </div>
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
        // line 195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["search"] ?? null), "html", null, true);
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
        // line 205
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 206
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 206), "html", null, true);
            yield "\" ";
            yield (((($context["selectedCategory"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 206))) ? ("selected") : (""));
            yield ">
                                ";
            // line 207
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, CoreExtension::getAttribute($this->env, $this->source, $context["category"], "level", [], "any", false, false, false, 207)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                yield "&nbsp;&nbsp;";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 208
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 208), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "recipeCount", [], "any", false, false, false, 208), "html", null, true);
            yield ")
                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        yield "                    </select>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <label for=\"type\" class=\"form-label fw-semibold\">
                        <i class=\"fas fa-tag text-primary me-1\"></i>Type de plat
                    </label>
                    <select name=\"type\" id=\"type\" class=\"form-select bg-light border-0\">
                        <option value=\"\">Tous les types</option>
                        <option value=\"food\" ";
        // line 219
        yield (((($context["selectedType"] ?? null) == "food")) ? ("selected") : (""));
        yield ">🍽️ Plat principal</option>
                        <option value=\"starter\" ";
        // line 220
        yield (((($context["selectedType"] ?? null) == "starter")) ? ("selected") : (""));
        yield ">🥗 Entrée</option>
                        <option value=\"dessert\" ";
        // line 221
        yield (((($context["selectedType"] ?? null) == "dessert")) ? ("selected") : (""));
        yield ">🍰 Dessert</option>
                        <option value=\"drink\" ";
        // line 222
        yield (((($context["selectedType"] ?? null) == "drink")) ? ("selected") : (""));
        yield ">🥤 Boisson</option>
                        <option value=\"side\" ";
        // line 223
        yield (((($context["selectedType"] ?? null) == "side")) ? ("selected") : (""));
        yield ">🍟 Accompagnement</option>
                    </select>
                </div>
                <div class=\"col-lg-2 col-md-6\">
                    <label for=\"status\" class=\"form-label fw-semibold\">
                        <i class=\"fas fa-toggle-on text-success me-1\"></i>Statut
                    </label>
                    <select name=\"status\" id=\"status\" class=\"form-select bg-light border-0\">
                        <option value=\"\">Tous</option>
                        <option value=\"active\" ";
        // line 232
        yield (((($context["selectedStatus"] ?? null) == "active")) ? ("selected") : (""));
        yield ">Actifs</option>
                        <option value=\"inactive\" ";
        // line 233
        yield (((($context["selectedStatus"] ?? null) == "inactive")) ? ("selected") : (""));
        yield ">Inactifs</option>
                    </select>
                </div>
            </form>
        </div>
    </div>

    <!-- Grille de plats -->
    <div class=\"row g-4\">
        ";
        // line 242
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["recipes"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["recipe"]) {
            // line 243
            yield "        <div class=\"col-xl-3 col-lg-4 col-md-6\">
            <div class=\"card h-100 border-0 shadow-sm hover-card\">
                <div class=\"recipe-image-container position-relative\">
                    ";
            // line 246
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "image", [], "any", false, false, false, 246)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 247
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images_plats/" . CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "image", [], "any", false, false, false, 247))), "html", null, true);
                yield "\" 
                             alt=\"";
                // line 248
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "name", [], "any", false, false, false, 248), "html", null, true);
                yield "\" 
                             class=\"card-img-top recipe-image\">
                    ";
            } else {
                // line 251
                yield "                        <div class=\"recipe-image-placeholder\">
                            <i class=\"fas fa-utensils fa-4x text-muted\"></i>
                        </div>
                    ";
            }
            // line 255
            yield "
                    <!-- Badges de statut superposés (en haut à gauche) -->
                    <div class=\"position-absolute top-0 start-0 p-2\">
                        <div class=\"d-flex flex-column gap-1\">
                            ";
            // line 259
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "isActive", [], "any", false, false, false, 259)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 260
                yield "                                <span class=\"badge bg-success\"><i class=\"fas fa-check-circle me-1\"></i> Actif</span>
                            ";
            } else {
                // line 262
                yield "                                <span class=\"badge bg-danger\"><i class=\"fas fa-pause-circle me-1\"></i> Inactif</span>
                            ";
            }
            // line 264
            yield "                            ";
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "subscriptionActive", [], "any", false, false, false, 264)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 265
                yield "                                <span class=\"badge bg-warning text-dark\"><i class=\"fas fa-clock me-1\"></i> Hors quota</span>
                            ";
            }
            // line 267
            yield "                        </div>
                    </div>
                    
                    <!-- Badge type de plat (en haut à droite) -->
                    <div class=\"position-absolute top-0 end-0 p-2\">
                        <span class=\"badge bg-primary\">
                            ";
            // line 273
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "type", [], "any", false, false, false, 273) == "food")) {
                // line 274
                yield "                                🍽️ Plat
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 275
$context["recipe"], "type", [], "any", false, false, false, 275) == "starter")) {
                // line 276
                yield "                                🥗 Entrée
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 277
$context["recipe"], "type", [], "any", false, false, false, 277) == "dessert")) {
                // line 278
                yield "                                🍰 Dessert
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 279
$context["recipe"], "type", [], "any", false, false, false, 279) == "drink")) {
                // line 280
                yield "                                🥤 Boisson
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 281
$context["recipe"], "type", [], "any", false, false, false, 281) == "side")) {
                // line 282
                yield "                                🍟 Accompagnement
                            ";
            } else {
                // line 284
                yield "                                📋 Plat
                            ";
            }
            // line 286
            yield "                        </span>
                    </div>
                </div>
                <div class=\"card-body d-flex flex-column\">
                    <!-- Titre avec bouton burger à droite -->
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h5 class=\"card-title fw-bold text-truncate mb-1\">";
            // line 293
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "name", [], "any", false, false, false, 293), "html", null, true);
            yield "</h5>
                            <p class=\"text-muted small mb-2\">
                                <i class=\"fas fa-tag me-1\"></i>";
            // line 295
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "category", [], "any", false, false, false, 295)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "category", [], "any", false, false, false, 295), "name", [], "any", false, false, false, 295), "html", null, true)) : ("Non catégorisé"));
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
            // line 304
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 304)]), "html", null, true);
            yield "\">
                                        <i class=\"fas fa-eye me-2\"></i> Voir
                                    </a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item\" href=\"";
            // line 309
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 309)]), "html", null, true);
            yield "\">
                                        <i class=\"fas fa-edit me-2\"></i> Modifier
                                    </a>
                                </li>
                                <li>
                                    ";
            // line 314
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "subscriptionActive", [], "any", false, false, false, 314)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 315
                yield "                                        <button type=\"button\" 
                                                class=\"dropdown-item toggle-recipe-btn\"
                                                data-recipe-id=\"";
                // line 317
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 317), "html", null, true);
                yield "\"
                                                data-recipe-name=\"";
                // line 318
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "name", [], "any", false, false, false, 318), "html", null, true);
                yield "\"
                                                data-current-status=\"";
                // line 319
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "isActive", [], "any", false, false, false, 319)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : ("inactive"));
                yield "\"
                                                data-token=\"";
                // line 320
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle-status" . CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 320))), "html", null, true);
                yield "\">
                                            <i class=\"fas ";
                // line 321
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "isActive", [], "any", false, false, false, 321)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-toggle-on") : ("fa-toggle-off"));
                yield " me-2\"></i>
                                            ";
                // line 322
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "isActive", [], "any", false, false, false, 322)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
                yield "
                                        </button>
                                    ";
            } else {
                // line 325
                yield "                                        <span class=\"dropdown-item text-muted disabled\">
                                            <i class=\"fas fa-ban me-2\"></i> Non disponible
                                        </span>
                                    ";
            }
            // line 329
            yield "                                </li>
                                <li><hr class=\"dropdown-divider\"></li>
                            </ul>
                        </div>
                    </div>

                    <div class=\"d-flex justify-content-between align-items-center mb-3\">
                        <span class=\"fw-bold text-success\">";
            // line 336
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "sellingPrice", [], "any", false, false, false, 336), CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "hmaService", [], "any", false, false, false, 336)), "html", null, true);
            yield "</span>
                        <span class=\"badge bg-info\">";
            // line 337
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "recipeItems", [], "any", false, false, false, 337)), "html", null, true);
            yield " ingrédients</span>
                    </div>

                    <!-- Boutons secondaires alignés sur une ligne -->
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
                        ";
            // line 351
            if ((($context["companyType"] ?? null) == "restaurant")) {
                // line 352
                yield "                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_recipe_promotions", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 352)]), "html", null, true);
                yield "\" 
                            class=\"btn btn-sm btn-outline-warning\" title=\"Promotions du plat\">
                                <i class=\"fas fa-percent\"></i> 
                            </a>
                        ";
            }
            // line 357
            yield "                        ";
            // line 358
            yield "                        ";
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "orderItems", [], "any", false, false, false, 358)) == 0))) {
                // line 359
                yield "                            <button type=\"button\" 
                                    class=\"btn btn-sm btn-outline-danger flex-fill delete-recipe-btn\"
                                    data-recipe-id=\"";
                // line 361
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 361), "html", null, true);
                yield "\"
                                    data-recipe-name=\"";
                // line 362
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "name", [], "any", false, false, false, 362), "html", null, true);
                yield "\"
                                    data-token=\"";
                // line 363
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 363))), "html", null, true);
                yield "\"
                                    title=\"Supprimer\">
                                <i class=\"fas fa-trash\"></i>
                            </button>
                        ";
            }
            // line 368
            yield "                    </div>
                </div>
            </div>
        </div>
        ";
            $context['_iterated'] = true;
        }
        // line 372
        if (!$context['_iterated']) {
            // line 373
            yield "        <div class=\"col-12\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-body text-center py-5\">
                    <i class=\"fas fa-utensils fa-4x text-muted mb-3\"></i>
                    <h4 class=\"text-muted fw-light\">Aucun plat trouvé</h4>
                    <p class=\"text-muted mb-4\">Modifiez vos filtres ou créez un nouveau plat.</p>
                    <a href=\"";
            // line 379
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
        // line 386
        yield "    </div>

    <!-- Pagination -->
    ";
        // line 389
        if ((($context["totalPages"] ?? null) > 1)) {
            // line 390
            yield "    <div class=\"d-flex justify-content-between align-items-center mt-4\">
        <div class=\"text-muted small\">
            Page ";
            // line 392
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["currentPage"] ?? null), "html", null, true);
            yield " sur ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalPages"] ?? null), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalItems"] ?? null), "html", null, true);
            yield " résultats)
        </div>
        <nav aria-label=\"Pagination\">
            <ul class=\"pagination pagination-sm mb-0\">
                <li class=\"page-item ";
            // line 396
            yield (((($context["currentPage"] ?? null) <= 1)) ? ("disabled") : (""));
            yield "\">
                    <a class=\"page-link\" href=\"";
            // line 397
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 397), "query", [], "any", false, false, false, 397), "all", [], "any", false, false, false, 397), ["page" => (($context["currentPage"] ?? null) - 1)])), "html", null, true);
            yield "\"><i class=\"fas fa-chevron-left\"></i></a>
                </li>
                ";
            // line 399
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, ($context["totalPages"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 400
                yield "                    <li class=\"page-item ";
                yield ((($context["i"] == ($context["currentPage"] ?? null))) ? ("active") : (""));
                yield "\">
                        <a class=\"page-link\" href=\"";
                // line 401
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 401), "query", [], "any", false, false, false, 401), "all", [], "any", false, false, false, 401), ["page" => $context["i"]])), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "</a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 404
            yield "                <li class=\"page-item ";
            yield (((($context["currentPage"] ?? null) >= ($context["totalPages"] ?? null))) ? ("disabled") : (""));
            yield "\">
                    <a class=\"page-link\" href=\"";
            // line 405
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 405), "query", [], "any", false, false, false, 405), "all", [], "any", false, false, false, 405), ["page" => (($context["currentPage"] ?? null) + 1)])), "html", null, true);
            yield "\"><i class=\"fas fa-chevron-right\"></i></a>
                </li>
            </ul>
        </nav>
    </div>
    ";
        }
        // line 411
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
        // line 423
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["quota"] ?? null), "html", null, true);
        yield " plats actifs.</h5>
                <p class=\"text-muted\">Pour ajouter de nouveaux plats, passez à un plan supérieur.</p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center\">
                <a href=\"";
        // line 427
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
        yield from [];
    }

    // line 481
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 482
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
        yield from [];
    }

    // line 540
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 541
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
        // line 549
        if ((($tmp = ($context["quotaReached"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 550
            yield "                new bootstrap.Modal(document.getElementById('quotaReachedModal')).show();
            ";
        } else {
            // line 552
            yield "                window.location.href = \"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recipe_new");
            yield "\";
            ";
        }
        // line 554
        yield "        });
    }

    // PAS d'auto-submit ! Seul le bouton \"Filtrer\" soumet le formulaire
    // Les selects ne déclenchent pas automatiquement la soumission

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
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "sale/restaurant/index.html.twig";
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
        return array (  952 => 554,  946 => 552,  942 => 550,  940 => 549,  929 => 541,  922 => 540,  860 => 482,  853 => 481,  795 => 427,  788 => 423,  774 => 411,  765 => 405,  760 => 404,  749 => 401,  744 => 400,  740 => 399,  735 => 397,  731 => 396,  720 => 392,  716 => 390,  714 => 389,  709 => 386,  696 => 379,  688 => 373,  686 => 372,  678 => 368,  670 => 363,  666 => 362,  662 => 361,  658 => 359,  655 => 358,  653 => 357,  644 => 352,  642 => 351,  625 => 337,  621 => 336,  612 => 329,  606 => 325,  600 => 322,  596 => 321,  592 => 320,  588 => 319,  584 => 318,  580 => 317,  576 => 315,  574 => 314,  566 => 309,  558 => 304,  546 => 295,  541 => 293,  532 => 286,  528 => 284,  524 => 282,  522 => 281,  519 => 280,  517 => 279,  514 => 278,  512 => 277,  509 => 276,  507 => 275,  504 => 274,  502 => 273,  494 => 267,  490 => 265,  487 => 264,  483 => 262,  479 => 260,  477 => 259,  471 => 255,  465 => 251,  459 => 248,  454 => 247,  452 => 246,  447 => 243,  442 => 242,  430 => 233,  426 => 232,  414 => 223,  410 => 222,  406 => 221,  402 => 220,  398 => 219,  388 => 211,  376 => 208,  367 => 207,  360 => 206,  356 => 205,  343 => 195,  325 => 180,  300 => 158,  284 => 145,  268 => 132,  252 => 119,  236 => 106,  219 => 91,  209 => 87,  206 => 86,  202 => 85,  199 => 84,  189 => 80,  186 => 79,  181 => 78,  178 => 76,  168 => 69,  163 => 67,  157 => 63,  154 => 62,  145 => 54,  137 => 49,  126 => 40,  123 => 39,  116 => 33,  112 => 31,  110 => 30,  104 => 29,  100 => 28,  81 => 12,  74 => 7,  67 => 6,  54 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "sale/restaurant/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\sale\\restaurant\\index.html.twig");
    }
}
