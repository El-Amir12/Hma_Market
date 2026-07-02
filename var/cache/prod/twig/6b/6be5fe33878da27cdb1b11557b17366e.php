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

/* admin/category_recipe/index.html.twig */
class __TwigTemplate_ae87e816652f497f1caf1174f2a9e349 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
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
        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Gestion des Catégories de Plats - HMA Market";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
<link href=\"https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css\" rel=\"stylesheet\" />
<style>
.category-card.border-warning {
    border: 2px solid #ffc107 !important;
}
.category-image-container {
    position: relative;
    height: 180px;
    overflow: hidden;
    border-radius: 15px 15px 0 0;
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
/* Styles Select2 - Correction d'alignement vertical comme dans Recipe */
.select2-container--bootstrap-5 .select2-selection {
    height: 38px !important;
    padding: 0 !important;
}
.select2-container--bootstrap-5 .select2-selection--single {
    height: 38px !important;
    border-radius: 8px !important;
    background-color: #fff !important;
    border-color: #dee2e6 !important;
    display: flex !important;
    align-items: center !important;
}
.select2-container--bootstrap-5 .select2-selection--single .select2-selection__rendered {
    line-height: normal !important;
    padding: 8px 12px !important;
    color: #212529 !important;
    display: block !important;
}
.select2-container--bootstrap-5 .select2-selection--single .select2-selection__arrow {
    height: 36px !important;
    position: absolute !important;
    top: 1px !important;
    right: 5px !important;
}
.select2-container--bootstrap-5 .select2-dropdown {
    border-color: #e9ecef !important;
    border-radius: 8px !important;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1) !important;
}
.select2-container--bootstrap-5 .select2-search--dropdown .select2-search__field {
    padding: 8px 12px !important;
    border-radius: 6px !important;
    border-color: #e9ecef !important;
}
.select2-container--bootstrap-5 .select2-results__option {
    padding: 8px 12px !important;
}
.select2-container--bootstrap-5 .select2-results__option--selected {
    background-color: #0463f1 !important;
    color: white !important;
}
.select2-container--bootstrap-5 .select2-results__option--highlighted {
    background-color: #e9ecef !important;
    color: #0463f1 !important;
}
/* Correction pour les selects normaux */
.form-select.bg-light.border-0 {
    height: 38px;
    padding: 8px 12px;
}
@media (max-width: 768px) {
    .category-card .btn-sm {
        font-size: 0.7rem;
        padding: 0.2rem 0.3rem;
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
        yield from [];
    }

    // line 109
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 110
        yield "<div class=\"container-fluid px-4\">
    <!-- En-tête avec quota et bouton d'ajout -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap\">
        <div>
            <h1 class=\"h3 mb-0 text-gray-800\">
                <i class=\"fas fa-utensils me-2\"></i>Gestion des sections de menu
            </h1>
            <p class=\"text-muted\">Organisez vos plats par catégories et sous-catégories</p>
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
        // line 131
        yield (((($tmp = ($context["quotaReached"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-danger") : ("text-success"));
        yield "\">
                            ";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["activeCount"] ?? null), "html", null, true);
        yield " / ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["quota"] ?? null), "html", null, true);
        yield "
                            ";
        // line 133
        if ((($context["quota"] ?? null) == "Illimité")) {
            // line 134
            yield "                                <i class=\"fas fa-infinity text-info ms-1\"></i>
                            ";
        }
        // line 136
        yield "                        </h5>
                        ";
        // line 137
        if ((($tmp = ($context["quotaReached"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 138
            yield "                            <small class=\"text-danger\">Quota atteint</small>
                        ";
        }
        // line 140
        yield "                    </div>
                </div>
            </div>

            ";
        // line 145
        yield "            ";
        if ((($context["subscriptionInactiveCount"] ?? null) > 0)) {
            // line 146
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
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["subscriptionInactiveCount"] ?? null), "html", null, true);
            yield "</h5>
                        <small>désactivées par quota</small>
                    </div>
                </div>
            </div>
            ";
        }
        // line 161
        yield "
            ";
        // line 163
        yield "            <a href=\"#\" id=\"newCategoryBtn\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus-circle me-2\"></i> Nouvelle Catégorie de Plats
            </a>
        </div>
    </div>

    ";
        // line 170
        yield "    ";
        if ((($context["quotaReached"] ?? null) && (($context["plan"] ?? null) != "premium"))) {
            // line 171
            yield "    <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
        <div class=\"d-flex justify-content-between align-items-center\">
            <div>
                <i class=\"fas fa-exclamation-triangle me-2\"></i>
                <strong>Quota atteint !</strong> Vous avez utilisé vos ";
            // line 175
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["quota"] ?? null), "html", null, true);
            yield " catégories de plats dans le quota.
            </div>
            <a href=\"";
            // line 177
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subscription_plans");
            yield "\" class=\"btn btn-warning btn-sm\">
                <i class=\"fas fa-arrow-up me-1\"></i> Voir les offres
            </a>
        </div>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    </div>
    ";
        }
        // line 184
        yield "
    ";
        // line 186
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 186));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 187
            yield "        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
            <i class=\"fas fa-check-circle me-2\"></i> ";
            // line 188
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 192
        yield "    
    ";
        // line 193
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["error"], "method", false, false, false, 193));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 194
            yield "        <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
            <i class=\"fas fa-exclamation-circle me-2\"></i> ";
            // line 195
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
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
                <!-- Première ligne : 4 cartes -->
                <div class=\"col-md-3 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-primary text-uppercase small fw-bold\">Total</span>
                                <h3 class=\"mb-0\">";
        // line 215
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalFiltered"] ?? null), "html", null, true);
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
                                <h3 class=\"mb-0 text-success\">";
        // line 226
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["activeFiltered"] ?? null), "html", null, true);
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
                                <span class=\"text-danger text-uppercase small fw-bold\">Inactives</span>
                                <h3 class=\"mb-0 text-danger\">";
        // line 237
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["inactiveFiltered"] ?? null), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-pause-circle fa-2x text-danger opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-info text-uppercase small fw-bold\">Principales</span>
                                <h3 class=\"mb-0 text-info\">";
        // line 248
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mainFiltered"] ?? null), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-sitemap fa-2x text-info opacity-50\"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <!-- Deuxième ligne : 3 cartes -->
                <div class=\"col-md-4 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-warning text-uppercase small fw-bold\">Sous-catégories</span>
                                <h3 class=\"mb-0 text-warning\">";
        // line 262
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["subFiltered"] ?? null), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-folder-tree fa-2x text-warning opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-info text-uppercase small fw-bold\">Abonnement actif</span>
                                <h3 class=\"mb-0 text-info\">";
        // line 273
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["subscriptionActiveFiltered"] ?? null), "html", null, true);
        yield "</h3>
                            </div>
                            <i class=\"fas fa-database fa-2x text-info opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-secondary text-uppercase small fw-bold\">Abonnement inactif</span>
                                <h3 class=\"mb-0 text-secondary\">";
        // line 284
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["subscriptionInactiveFiltered"] ?? null), "html", null, true);
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
        <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center flex-wrap gap-3\">
            <h5 class=\"mb-0\">
                <i class=\"fas fa-filter me-2\"></i>Filtres
            </h5>
            <div class=\"d-flex gap-2\">
                <button type=\"submit\" form=\"filter-form\" class=\"btn btn-primary\">
                    <i class=\"fas fa-filter me-2\"></i>Filtrer
                </button>
                <a href=\"";
        // line 304
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_index");
        yield "\" class=\"btn btn-outline-secondary\">
                    <i class=\"fas fa-undo me-2\"></i>Effacer
                </a>
            </div>
        </div>
        <div class=\"card-body\">
            <form method=\"get\" id=\"filter-form\" class=\"row g-3\">
                <!-- Première ligne : tous les filtres -->
                <div class=\"col-lg-3 col-md-6\">
                    <label for=\"search\" class=\"form-label fw-bold\">
                        <i class=\"fas fa-search text-primary me-1\"></i>Rechercher
                    </label>
                    <div class=\"input-group\">
                        <span class=\"input-group-text bg-white border-end-0\">
                            <i class=\"fas fa-search text-muted\"></i>
                        </span>
                        <input type=\"text\" name=\"search\" id=\"search\" value=\"";
        // line 320
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["search"] ?? null), "html", null, true);
        yield "\" 
                            class=\"form-control border-start-0\" placeholder=\"Nom, description...\">
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-6\">
                    <label for=\"status\" class=\"form-label fw-bold\">
                        <i class=\"fas fa-toggle-on text-success me-1\"></i>Statut
                    </label>
                    <select name=\"status\" id=\"status\" class=\"form-select\">
                        <option value=\"all\" ";
        // line 329
        yield (((($context["status"] ?? null) == "all")) ? ("selected") : (""));
        yield ">Tous</option>
                        <option value=\"active\" ";
        // line 330
        yield (((($context["status"] ?? null) == "active")) ? ("selected") : (""));
        yield ">Actives</option>
                        <option value=\"inactive\" ";
        // line 331
        yield (((($context["status"] ?? null) == "inactive")) ? ("selected") : (""));
        yield ">Inactives</option>
                    </select>
                </div>
                <div class=\"col-lg-2 col-md-6\">
                    <label for=\"type\" class=\"form-label fw-bold\">
                        <i class=\"fas fa-sitemap text-info me-1\"></i>Type
                    </label>
                    <select name=\"type\" id=\"type\" class=\"form-select\">
                        <option value=\"all\" ";
        // line 339
        yield (((($context["type"] ?? null) == "all")) ? ("selected") : (""));
        yield ">Tous</option>
                        <option value=\"main\" ";
        // line 340
        yield (((($context["type"] ?? null) == "main")) ? ("selected") : (""));
        yield ">Principales</option>
                        <option value=\"sub\" ";
        // line 341
        yield (((($context["type"] ?? null) == "sub")) ? ("selected") : (""));
        yield ">Sous-catégories</option>
                    </select>
                </div>
                <div class=\"col-lg-2 col-md-6\">
                    <label for=\"sub_status\" class=\"form-label fw-bold\">
                        <i class=\"fas fa-credit-card text-warning me-1\"></i>Abonnement
                    </label>
                    <select name=\"sub_status\" id=\"sub_status\" class=\"form-select\">
                        <option value=\"all\" ";
        // line 349
        yield (((($context["subStatus"] ?? null) == "all")) ? ("selected") : (""));
        yield ">Tous</option>
                        <option value=\"active\" ";
        // line 350
        yield (((($context["subStatus"] ?? null) == "active")) ? ("selected") : (""));
        yield ">Actif</option>
                        <option value=\"inactive\" ";
        // line 351
        yield (((($context["subStatus"] ?? null) == "inactive")) ? ("selected") : (""));
        yield ">Inactif</option>
                    </select>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <label for=\"promotion\" class=\"form-label fw-bold\">
                        <i class=\"fas fa-tags text-danger me-1\"></i>Promotion
                    </label>
                    <select name=\"promotion\" id=\"promotion\" class=\"form-select\" style=\"width: 100%;\">
                        <option value=\"\">🎯 Toutes les promotions</option>
                        ";
        // line 360
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["promotions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
            // line 361
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 361), "html", null, true);
            yield "\" ";
            yield (((($context["selectedPromotion"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 361))) ? ("selected") : (""));
            yield ">
                                ";
            // line 362
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "name", [], "any", false, false, false, 362), "html", null, true);
            yield "
                                ";
            // line 363
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "discountPercentage", [], "any", false, false, false, 363)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 364
                yield "                                    (-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "discountPercentage", [], "any", false, false, false, 364), "html", null, true);
                yield "%)
                                ";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 365
$context["promotion"], "discountAmount", [], "any", false, false, false, 365)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 366
                yield "                                    (-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "discountAmount", [], "any", false, false, false, 366), 0, ",", " "), "html", null, true);
                yield " FCFA)
                                ";
            }
            // line 368
            yield "                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['promotion'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 370
        yield "                    </select>
                </div>
            </form>
        </div>
    </div>

    ";
        // line 377
        yield "    ";
        if ((($context["subStatus"] ?? null) == "inactive")) {
            // line 378
            yield "        <div class=\"alert alert-info mb-4\">
            <i class=\"fas fa-info-circle me-2\"></i>
            <strong>";
            // line 380
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["subscriptionInactiveFiltered"] ?? null), "html", null, true);
            yield " catégorie(s)</strong> désactivées par abonnement.
        </div>
    ";
        }
        // line 383
        yield "
    <!-- Grille de cartes -->
    <div class=\"row\">
        ";
        // line 386
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 387
            yield "        <div class=\"col-xl-3 col-lg-4 col-md-6 mb-4\">
            <div class=\"card category-card shadow h-100 ";
            // line 388
            yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["category"], "subscriptionActive", [], "any", false, false, false, 388)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("border-warning") : (""));
            yield "\">
                <!-- Image avec badges superposés (en haut à gauche) -->
                <div class=\"category-image-container position-relative\">
                    ";
            // line 391
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 391)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 392
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/categories_plats/" . CoreExtension::getAttribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 392))), "html", null, true);
                yield "\" 
                            alt=\"";
                // line 393
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 393), "html", null, true);
                yield "\"
                            class=\"card-img-top category-image\">
                    ";
            } else {
                // line 396
                yield "                        <div class=\"category-image-placeholder\">
                            <i class=\"fas fa-utensils fa-4x text-muted\"></i>
                        </div>
                    ";
            }
            // line 400
            yield "
                    <!-- Badges de statut superposés (en haut à gauche) -->
                    <div class=\"position-absolute top-0 start-0 p-2\">
                        <div class=\"d-flex flex-column gap-1\">
                            ";
            // line 404
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["category"], "subscriptionActive", [], "any", false, false, false, 404)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 405
                yield "                                <span class=\"badge bg-warning\"><i class=\"fas fa-clock me-1\"></i> En attente (quota)</span>
                            ";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 406
$context["category"], "isActive", [], "any", false, false, false, 406)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 407
                yield "                                <span class=\"badge bg-success\"><i class=\"fas fa-check-circle me-1\"></i> Active</span>
                            ";
            } else {
                // line 409
                yield "                                <span class=\"badge bg-danger\"><i class=\"fas fa-pause-circle me-1\"></i> Désactivée</span>
                            ";
            }
            // line 411
            yield "                            ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "subscriptionActive", [], "any", false, false, false, 411)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 412
                yield "                                <span class=\"badge bg-info\"><i class=\"fas fa-database me-1\"></i> Dans quota</span>
                            ";
            }
            // line 414
            yield "                        </div>
                    </div>
                </div>

                <!-- Contenu -->
                <div class=\"card-body d-flex flex-column\">
                    <!-- Titre avec bouton burger -->
                    <div class=\"d-flex justify-content-between align-items-start mb-2\">
                        <h5 class=\"card-title text-truncate mb-0\" title=\"";
            // line 422
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 422), "html", null, true);
            yield "\">
                            ";
            // line 423
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 423), "html", null, true);
            yield "
                            ";
            // line 424
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "parent", [], "any", false, false, false, 424)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 425
                yield "                                <br><small class=\"text-muted\"><i class=\"fas fa-level-up-alt me-1\"></i>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["category"], "parent", [], "any", false, false, false, 425), "name", [], "any", false, false, false, 425), "html", null, true);
                yield "</small>
                            ";
            }
            // line 427
            yield "                        </h5>
                        <div class=\"dropdown ms-2\">
                            <button class=\"btn btn-sm btn-light\" type=\"button\" data-bs-toggle=\"dropdown\">
                                <i class=\"fas fa-bars\"></i>
                            </button>
                            <ul class=\"dropdown-menu dropdown-menu-end\">
                                <li>
                                    <a class=\"dropdown-item\" href=\"";
            // line 434
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 434)]), "html", null, true);
            yield "\">
                                        <i class=\"fas fa-eye me-2\"></i> Voir
                                    </a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item\" href=\"";
            // line 439
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 439)]), "html", null, true);
            yield "\">
                                        <i class=\"fas fa-edit me-2\"></i> Modifier
                                    </a>
                                </li>
                                <li>
                                    ";
            // line 444
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "subscriptionActive", [], "any", false, false, false, 444)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 445
                yield "                                        <button type=\"button\" 
                                                class=\"dropdown-item toggle-category-btn\"
                                                data-category-id=\"";
                // line 447
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 447), "html", null, true);
                yield "\"
                                                data-category-name=\"";
                // line 448
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 448), "html", null, true);
                yield "\"
                                                data-current-status=\"";
                // line 449
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "isActive", [], "any", false, false, false, 449)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : ("inactive"));
                yield "\"
                                                data-token=\"";
                // line 450
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle-status" . CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 450))), "html", null, true);
                yield "\">
                                            <i class=\"fas ";
                // line 451
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "isActive", [], "any", false, false, false, 451)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-toggle-on") : ("fa-toggle-off"));
                yield " me-2\"></i>
                                            ";
                // line 452
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "isActive", [], "any", false, false, false, 452)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
                yield "
                                        </button>
                                    ";
            } else {
                // line 455
                yield "                                        <span class=\"dropdown-item text-muted disabled\">
                                            <i class=\"fas fa-ban me-2\"></i> Non disponible
                                        </span>
                                    ";
            }
            // line 459
            yield "                                </li>
                                <li><hr class=\"dropdown-divider\"></li>
                                <li>
                                    ";
            // line 462
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 463
                yield "                                        <button type=\"button\" class=\"dropdown-item text-danger delete-category-btn\"
                                                data-category-id=\"";
                // line 464
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 464), "html", null, true);
                yield "\"
                                                data-category-name=\"";
                // line 465
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 465), "html", null, true);
                yield "\"
                                                data-has-recipes=\"";
                // line 466
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "recipes", [], "any", false, false, false, 466)) > 0)) ? ("true") : ("false"));
                yield "\"
                                                data-has-children=\"";
                // line 467
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 467)) > 0)) ? ("true") : ("false"));
                yield "\"
                                                data-token=\"";
                // line 468
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 468))), "html", null, true);
                yield "\">
                                            <i class=\"fas fa-trash me-2\"></i> Supprimer
                                        </button>
                                    ";
            }
            // line 472
            yield "                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Description -->
                    <p class=\"card-text text-muted small mb-3\">
                        ";
            // line 479
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "description", [], "any", true, true, false, 479)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 479), "Aucune description")) : ("Aucune description"))), "truncate", [80, "..."], "method", false, false, false, 479), "html", null, true);
            yield "
                    </p>
                    
                    <!-- Compteurs Recettes & Sous-catégories (côte à côte) -->
                    <div class=\"d-flex justify-content-between align-items-center mb-3\">
                        <div class=\"text-center px-2 py-1 bg-light rounded\" style=\"min-width: 45%;\">
                            <i class=\"fas fa-utensils text-primary me-1\"></i>
                            <span class=\"fw-bold\">";
            // line 486
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "recipes", [], "any", false, false, false, 486)), "html", null, true);
            yield "</span>
                            <small class=\"text-muted d-block\">Articles</small>
                        </div>
                        <div class=\"text-center px-2 py-1 bg-light rounded\" style=\"min-width: 45%;\">
                            <i class=\"fas fa-sitemap text-info me-1\"></i>
                            <span class=\"fw-bold\">";
            // line 491
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 491)), "html", null, true);
            yield "</span>
                            <small class=\"text-muted d-block\">sous-catégories</small>
                        </div>
                    </div>

                    <!-- Boutons d'action secondaires (Plats & Promos) -->
                    <div class=\"d-flex gap-2 mt-auto\">
                        <a href=\"";
            // line 498
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_recipes", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 498)]), "html", null, true);
            yield "\" 
                           class=\"btn btn-sm btn-outline-info flex-fill\">
                            <i class=\"fas fa-list\"></i> Articles
                        </a>
                        <a href=\"";
            // line 502
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_promotions", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 502)]), "html", null, true);
            yield "\" 
                           class=\"btn btn-sm btn-outline-warning flex-fill\" title=\"Promotions de la catégorie\">
                            <i class=\"fas fa-percent me-1\"></i> Promotions
                        </a>
                    </div>
                </div>
            </div>
        </div>
        ";
            $context['_iterated'] = true;
        }
        // line 510
        if (!$context['_iterated']) {
            // line 511
            yield "        <div class=\"col-12\">
            <div class=\"card shadow\">
                <div class=\"card-body text-center py-5\">
                    <i class=\"fas fa-utensils fa-4x text-muted mb-3\"></i>
                    <h4 class=\"text-muted\">Aucune catégorie de plats trouvée</h4>
                    <a href=\"";
            // line 516
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_index");
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
        // line 523
        yield "    </div>

    <!-- Pagination -->
    ";
        // line 526
        if ((($context["totalPages"] ?? null) > 1)) {
            // line 527
            yield "    <div class=\"row mt-4\">
        <div class=\"col-12\">
            <nav aria-label=\"Pagination\">
                <ul class=\"pagination justify-content-center flex-wrap\">
                    ";
            // line 531
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, ($context["totalPages"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 532
                yield "                        <li class=\"page-item ";
                yield ((($context["i"] == ($context["currentPage"] ?? null))) ? ("active") : (""));
                yield "\">
                            <a class=\"page-link\" href=\"";
                // line 533
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 533), "query", [], "any", false, false, false, 533), "all", [], "any", false, false, false, 533), ["page" => $context["i"]])), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "</a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 536
            yield "                </ul>
            </nav>
        </div>
    </div>
    ";
        }
        // line 541
        yield "</div>

";
        // line 544
        yield "
";
        // line 546
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
        // line 557
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["quota"] ?? null), "html", null, true);
        yield " catégories de plats dans le quota.</h5>
                <p class=\"text-muted\">Pour ajouter de nouvelles catégories, passez à un plan supérieur.</p>
            </div>
            <div class=\"modal-footer justify-content-center\">
                <a href=\"";
        // line 561
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
        // line 573
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
        // line 600
        yield "<div class=\"modal fade\" id=\"deleteCategoryModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Confirmation de suppression
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <div id=\"deleteCategoryModalContent\"></div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"deleteCategoryForm\" method=\"post\" action=\"\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteCategoryToken\" value=\"\">
                    <button type=\"submit\" class=\"btn btn-danger\" id=\"deleteCategoryConfirmBtn\">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    // line 624
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 625
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/fr.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // ========== Initialisation Select2 pour la promotion ==========
    if (document.getElementById('promotion')) {
        \$('#promotion').select2({
            theme: 'bootstrap-5',
            language: 'fr',
            placeholder: '🎯 Sélectionnez une promotion',
            allowClear: true,
            width: '100%'
        });
    }

    // ========== 1. Gestion du bouton \"Nouvelle Catégorie\" ==========
    const newCategoryBtn = document.getElementById('newCategoryBtn');
    if (newCategoryBtn) {
        newCategoryBtn.addEventListener('click', function(e) {
            e.preventDefault();
            ";
        // line 646
        if ((($tmp = ($context["quotaReached"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 647
            yield "                const quotaModal = new bootstrap.Modal(document.getElementById('quotaReachedModal'));
                quotaModal.show();
            ";
        } else {
            // line 650
            yield "                window.location.href = \"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_recipe_new");
            yield "\";
            ";
        }
        // line 652
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
            const currentStatus = this.dataset.currentStatus;
            const action = currentStatus === 'active' ? 'désactiver' : 'activer';
            
            toggleMessage.innerText = `Êtes-vous sûr de vouloir \${action} la catégorie \"\${categoryName}\" ?`;
            toggleForm.action = `/admin/category-recipe/\${categoryId}/toggle-status`;
            toggleToken.value = this.dataset.token;
            toggleModal.show();
        });
    });

    // ========== 3. Gestion de la suppression (admin) ==========
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteCategoryModal'));
    const deleteForm = document.getElementById('deleteCategoryForm');
    const deleteToken = document.getElementById('deleteCategoryToken');
    const deleteConfirmBtn = document.getElementById('deleteCategoryConfirmBtn');
    const deleteModalContent = document.getElementById('deleteCategoryModalContent');

    document.querySelectorAll('.delete-category-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const id = this.dataset.categoryId;
            const name = this.dataset.categoryName;
            const hasRecipes = this.dataset.hasRecipes === 'true';
            const hasChildren = this.dataset.hasChildren === 'true';
            const token = this.dataset.token;

            deleteForm.action = `/admin/category-recipe/\${id}`;
            deleteToken.value = token;

            if (hasRecipes || hasChildren) {
                let message = '';
                if (hasRecipes && hasChildren) {
                    message = `Cette catégorie contient des plats et des sous-catégories.`;
                } else if (hasRecipes) {
                    message = `Cette catégorie contient des plats.`;
                } else if (hasChildren) {
                    message = `Cette catégorie contient des sous-catégories.`;
                }
                message += ` Pour confirmer la suppression, saisissez exactement le nom \"\${name}\".`;
                deleteModalContent.innerHTML = `
                    <div class=\"alert alert-warning\">
                        <i class=\"fas fa-exclamation-triangle me-2\"></i>
                        \${message}
                    </div>
                    <div class=\"input-group mt-3\">
                        <span class=\"input-group-text\"><i class=\"fas fa-tag\"></i></span>
                        <input type=\"text\" id=\"deleteConfirmName\" class=\"form-control\" placeholder=\"Saisissez le nom de la catégorie pour confirmer\">
                    </div>
                `;
                deleteConfirmBtn.disabled = true;

                const confirmInput = document.getElementById('deleteConfirmName');
                if (confirmInput) {
                    confirmInput.addEventListener('input', function() {
                        deleteConfirmBtn.disabled = this.value.trim() !== name;
                    });
                }
            } else {
                deleteModalContent.innerHTML = `
                    <p>Êtes-vous sûr de vouloir supprimer la catégorie <strong>\"\${name}\"</strong> ?</p>
                    <p class=\"text-danger\"><i class=\"fas fa-exclamation-circle me-1\"></i>Cette action est irréversible.</p>
                `;
                deleteConfirmBtn.disabled = false;
            }

            deleteModal.show();
        });
    });

    // Nettoyer le modal à la fermeture
    deleteModal._element.addEventListener('hidden.bs.modal', function() {
        deleteConfirmBtn.disabled = false;
        deleteModalContent.innerHTML = '';
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
        return "admin/category_recipe/index.html.twig";
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
        return array (  1061 => 652,  1055 => 650,  1050 => 647,  1048 => 646,  1024 => 625,  1017 => 624,  990 => 600,  962 => 573,  948 => 561,  941 => 557,  928 => 546,  925 => 544,  921 => 541,  914 => 536,  903 => 533,  898 => 532,  894 => 531,  888 => 527,  886 => 526,  881 => 523,  868 => 516,  861 => 511,  859 => 510,  846 => 502,  839 => 498,  829 => 491,  821 => 486,  811 => 479,  802 => 472,  795 => 468,  791 => 467,  787 => 466,  783 => 465,  779 => 464,  776 => 463,  774 => 462,  769 => 459,  763 => 455,  757 => 452,  753 => 451,  749 => 450,  745 => 449,  741 => 448,  737 => 447,  733 => 445,  731 => 444,  723 => 439,  715 => 434,  706 => 427,  700 => 425,  698 => 424,  694 => 423,  690 => 422,  680 => 414,  676 => 412,  673 => 411,  669 => 409,  665 => 407,  663 => 406,  660 => 405,  658 => 404,  652 => 400,  646 => 396,  640 => 393,  635 => 392,  633 => 391,  627 => 388,  624 => 387,  619 => 386,  614 => 383,  608 => 380,  604 => 378,  601 => 377,  593 => 370,  586 => 368,  580 => 366,  578 => 365,  573 => 364,  571 => 363,  567 => 362,  560 => 361,  556 => 360,  544 => 351,  540 => 350,  536 => 349,  525 => 341,  521 => 340,  517 => 339,  506 => 331,  502 => 330,  498 => 329,  486 => 320,  467 => 304,  444 => 284,  430 => 273,  416 => 262,  399 => 248,  385 => 237,  371 => 226,  357 => 215,  339 => 199,  329 => 195,  326 => 194,  322 => 193,  319 => 192,  309 => 188,  306 => 187,  301 => 186,  298 => 184,  288 => 177,  283 => 175,  277 => 171,  274 => 170,  266 => 163,  263 => 161,  254 => 155,  243 => 146,  240 => 145,  234 => 140,  230 => 138,  228 => 137,  225 => 136,  221 => 134,  219 => 133,  213 => 132,  209 => 131,  186 => 110,  179 => 109,  72 => 6,  65 => 5,  54 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/category_recipe/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\category_recipe\\index.html.twig");
    }
}
