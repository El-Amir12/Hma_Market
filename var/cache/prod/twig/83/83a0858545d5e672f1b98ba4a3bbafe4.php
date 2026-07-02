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
class __TwigTemplate_8666d50af43c9bad7e890e6f233c1532 extends Template
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
        yield "Catégories de produits - HMA Market";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
<link href=\"https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css\" rel=\"stylesheet\" />
<style>
.category-card {
    transition: transform 0.2s, box-shadow 0.2s;
}
.category-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.1) !important;
}

.category-image-wrapper {
    height: 130px;
    overflow: hidden;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
}

.category-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s;
}

.category-card:hover .category-image {
    transform: scale(1.05);
}

.category-placeholder {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.stat-card {
    transition: transform 0.2s, box-shadow 0.2s;
}
.stat-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.08) !important;
}

.stat-icon {
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.fs-10 {
    font-size: 10px;
}

.badge {
    font-weight: 500;
    font-size: 11px;
    padding: 4px 8px;
}

.btn-sm {
    font-size: 12px;
}

.rounded-circle {
    border-radius: 50% !important;
}

.hover-card {
    transition: all 0.2s ease;
}

/* Styles Select2 - Correction d'alignement vertical */
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

@media (max-width: 768px) {
    .stat-icon {
        width: 40px;
        height: 40px;
    }
    .stat-icon i {
        font-size: 1.25rem;
    }
    .category-image-wrapper {
        height: 100px;
    }
}
</style>
";
        yield from [];
    }

    // line 144
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 145
        yield "<div class=\"container-fluid px-4\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <h1 class=\"h3 mb-1 fw-bold\">
                <i class=\"fas fa-tags me-2 text-primary\"></i>Catégories de produits
            </h1>
            <p class=\"text-muted mb-0\">Organisez et gérez vos catégories de produits</p>
        </div>

        <div class=\"d-flex align-items-center gap-3\">
            <!-- Indicateur de quota -->
            <div class=\"stat-badge d-flex align-items-center bg-light rounded-3 p-2 px-3\">
                <div class=\"me-2\">
                    <span class=\"badge bg-primary p-2 rounded-circle\">
                        <i class=\"fas fa-chart-line fa-sm\"></i>
                    </span>
                </div>
                <div>
                    <small class=\"text-muted d-block lh-1\">Catégories actives</small>
                    <strong class=\"";
        // line 165
        yield (((($tmp = ($context["quotaReached"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-danger") : ("text-success"));
        yield " fs-5\">
                        ";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["activeCount"] ?? null), "html", null, true);
        yield " / ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["quota"] ?? null), "html", null, true);
        yield "
                        ";
        // line 167
        if ((($context["quota"] ?? null) == "Illimité")) {
            // line 168
            yield "                            <i class=\"fas fa-infinity text-info ms-1 fa-xs\"></i>
                        ";
        }
        // line 170
        yield "                    </strong>
                </div>
            </div>

            <!-- Catégories hors quota -->
            ";
        // line 175
        if ((($context["subscriptionInactiveCount"] ?? null) > 0)) {
            // line 176
            yield "            <div class=\"stat-badge d-flex align-items-center bg-light rounded-3 p-2 px-3\">
                <div class=\"me-2\">
                    <span class=\"badge bg-warning p-2 rounded-circle\">
                        <i class=\"fas fa-clock fa-sm\"></i>
                    </span>
                </div>
                <div>
                    <small class=\"text-muted d-block lh-1\">Hors quota</small>
                    <strong class=\"fs-5\">";
            // line 184
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["subscriptionInactiveCount"] ?? null), "html", null, true);
            yield "</strong>
                </div>
            </div>
            ";
        }
        // line 188
        yield "
            <a href=\"#\" id=\"newCategoryBtn\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus-circle me-2\"></i> Nouvelle catégorie
            </a>
        </div>
    </div>

    ";
        // line 196
        yield "    ";
        if ((($context["quotaReached"] ?? null) && (($context["plan"] ?? null) != "premium"))) {
            // line 197
            yield "    <div class=\"alert alert-warning alert-dismissible fade show mb-4\" role=\"alert\">
        <div class=\"d-flex justify-content-between align-items-center\">
            <div>
                <i class=\"fas fa-exclamation-triangle me-2\"></i>
                <strong>Quota atteint !</strong> Vous avez utilisé vos ";
            // line 201
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["quota"] ?? null), "html", null, true);
            yield " catégories actives.
            </div>
            <a href=\"";
            // line 203
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subscription_plans");
            yield "\" class=\"btn btn-warning btn-sm\">
                <i class=\"fas fa-arrow-up me-1\"></i> Voir les offres
            </a>
        </div>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    </div>
    ";
        }
        // line 210
        yield "
    ";
        // line 212
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 212));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 213
            yield "        <div class=\"alert alert-success alert-dismissible fade show mb-3\" role=\"alert\">
            <i class=\"fas fa-check-circle me-2\"></i> ";
            // line 214
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 218
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["error"], "method", false, false, false, 218));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 219
            yield "        <div class=\"alert alert-danger alert-dismissible fade show mb-3\" role=\"alert\">
            <i class=\"fas fa-exclamation-circle me-2\"></i> ";
            // line 220
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 224
        yield "
    <!-- Container des statistiques dynamiques - 7 cartes -->
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
        // line 240
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
        // line 251
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
        // line 262
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
        // line 273
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
        // line 287
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
        // line 298
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
        // line 309
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

    <!-- Filtres -->
    <div class=\"card border-0 shadow-sm mb-4\">
        <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0\"><i class=\"fas fa-filter me-2 text-primary\"></i>Filtres</h5>
            <div class=\"d-flex gap-2\">
                <a href=\"";
        // line 324
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_index");
        yield "\" class=\"btn btn-outline-secondary btn-sm\">
                    <i class=\"fas fa-undo me-1\"></i> Effacer
                </a>
                <button type=\"submit\" form=\"filter-form\" class=\"btn btn-primary btn-sm\">
                    <i class=\"fas fa-search me-1\"></i> Filtrer
                </button>
            </div>
        </div>
        <div class=\"card-body bg-white\">
            <form method=\"get\" id=\"filter-form\">
                <div class=\"row g-3\">
                    ";
        // line 335
        if ((($context["companyType"] ?? null) == "restaurant")) {
            // line 336
            yield "                        <!-- Cas RESTAURANT : 4 filtres -->
                        <div class=\"col-md-3\">
                            <label class=\"form-label fw-semibold small\">
                                <i class=\"fas fa-search me-1\"></i> Recherche
                            </label>
                            <input type=\"text\" name=\"search\" class=\"form-control\" 
                                placeholder=\"Nom, description...\" 
                                value=\"";
            // line 343
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["search"] ?? null), "html", null, true);
            yield "\">
                        </div>
                        <div class=\"col-md-3\">
                            <label class=\"form-label fw-semibold small\">
                                <i class=\"fas fa-toggle-on me-1\"></i> Statut
                            </label>
                            <select name=\"status\" class=\"form-select\">
                                <option value=\"all\" ";
            // line 350
            yield (((($context["status"] ?? null) == "all")) ? ("selected") : (""));
            yield ">Tous</option>
                                <option value=\"active\" ";
            // line 351
            yield (((($context["status"] ?? null) == "active")) ? ("selected") : (""));
            yield ">Actives</option>
                                <option value=\"inactive\" ";
            // line 352
            yield (((($context["status"] ?? null) == "inactive")) ? ("selected") : (""));
            yield ">Inactives</option>
                            </select>
                        </div>
                        <div class=\"col-md-3\">
                            <label class=\"form-label fw-semibold small\">
                                <i class=\"fas fa-sitemap me-1\"></i> Type
                            </label>
                            <select name=\"type\" class=\"form-select\">
                                <option value=\"all\" ";
            // line 360
            yield (((($context["type"] ?? null) == "all")) ? ("selected") : (""));
            yield ">Toutes</option>
                                <option value=\"main\" ";
            // line 361
            yield (((($context["type"] ?? null) == "main")) ? ("selected") : (""));
            yield ">Principales</option>
                                <option value=\"sub\" ";
            // line 362
            yield (((($context["type"] ?? null) == "sub")) ? ("selected") : (""));
            yield ">Sous-catégories</option>
                            </select>
                        </div>
                        <div class=\"col-md-3\">
                            <label class=\"form-label fw-semibold small\">
                                <i class=\"fas fa-chart-line me-1\"></i> Quota
                            </label>
                            <select name=\"sub_status\" class=\"form-select\">
                                <option value=\"all\" ";
            // line 370
            yield (((($context["subStatus"] ?? null) == "all")) ? ("selected") : (""));
            yield ">Tous</option>
                                <option value=\"active\" ";
            // line 371
            yield (((($context["subStatus"] ?? null) == "active")) ? ("selected") : (""));
            yield ">Dans quota</option>
                                <option value=\"inactive\" ";
            // line 372
            yield (((($context["subStatus"] ?? null) == "inactive")) ? ("selected") : (""));
            yield ">Hors quota</option>
                            </select>
                        </div>
                    ";
        } else {
            // line 376
            yield "                        <!-- Cas NON RESTAURANT (market, etc.) : 5 filtres -->
                        <div class=\"col-md-3\">
                            <label class=\"form-label fw-semibold small\">
                                <i class=\"fas fa-search me-1\"></i> Recherche
                            </label>
                            <input type=\"text\" name=\"search\" class=\"form-control\" 
                                placeholder=\"Nom, description...\" 
                                value=\"";
            // line 383
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["search"] ?? null), "html", null, true);
            yield "\">
                        </div>
                        <div class=\"col-md-2\">
                            <label class=\"form-label fw-semibold small\">
                                <i class=\"fas fa-toggle-on me-1\"></i> Statut
                            </label>
                            <select name=\"status\" class=\"form-select\">
                                <option value=\"all\" ";
            // line 390
            yield (((($context["status"] ?? null) == "all")) ? ("selected") : (""));
            yield ">Tous</option>
                                <option value=\"active\" ";
            // line 391
            yield (((($context["status"] ?? null) == "active")) ? ("selected") : (""));
            yield ">Actives</option>
                                <option value=\"inactive\" ";
            // line 392
            yield (((($context["status"] ?? null) == "inactive")) ? ("selected") : (""));
            yield ">Inactives</option>
                            </select>
                        </div>
                        <div class=\"col-md-2\">
                            <label class=\"form-label fw-semibold small\">
                                <i class=\"fas fa-sitemap me-1\"></i> Type
                            </label>
                            <select name=\"type\" class=\"form-select\">
                                <option value=\"all\" ";
            // line 400
            yield (((($context["type"] ?? null) == "all")) ? ("selected") : (""));
            yield ">Toutes</option>
                                <option value=\"main\" ";
            // line 401
            yield (((($context["type"] ?? null) == "main")) ? ("selected") : (""));
            yield ">Principales</option>
                                <option value=\"sub\" ";
            // line 402
            yield (((($context["type"] ?? null) == "sub")) ? ("selected") : (""));
            yield ">Sous-catégories</option>
                            </select>
                        </div>
                        <div class=\"col-md-2\">
                            <label class=\"form-label fw-semibold small\">
                                <i class=\"fas fa-chart-line me-1\"></i> Quota
                            </label>
                            <select name=\"sub_status\" class=\"form-select\">
                                <option value=\"all\" ";
            // line 410
            yield (((($context["subStatus"] ?? null) == "all")) ? ("selected") : (""));
            yield ">Tous</option>
                                <option value=\"active\" ";
            // line 411
            yield (((($context["subStatus"] ?? null) == "active")) ? ("selected") : (""));
            yield ">Dans quota</option>
                                <option value=\"inactive\" ";
            // line 412
            yield (((($context["subStatus"] ?? null) == "inactive")) ? ("selected") : (""));
            yield ">Hors quota</option>
                            </select>
                        </div>
                        <div class=\"col-md-3\">
                            <label class=\"form-label fw-semibold small\">
                                <i class=\"fas fa-percent me-1\"></i> Promotion
                            </label>
                            <select name=\"promotion\" id=\"promotion\" class=\"form-select\" style=\"width: 100%;\">
                                <option value=\"0\">🎯 Toutes les promotions</option>
                                ";
            // line 421
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["promotions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
                // line 422
                yield "                                    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 422), "html", null, true);
                yield "\" ";
                yield (((($context["selectedPromotion"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 422))) ? ("selected") : (""));
                yield ">
                                        ";
                // line 423
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "name", [], "any", false, false, false, 423), "html", null, true);
                yield "
                                        ";
                // line 424
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "discountPercentage", [], "any", false, false, false, 424)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 425
                    yield "                                            (-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "discountPercentage", [], "any", false, false, false, 425), "html", null, true);
                    yield "%)
                                        ";
                } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,                 // line 426
$context["promotion"], "discountAmount", [], "any", false, false, false, 426)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 427
                    yield "                                            (-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "discountAmount", [], "any", false, false, false, 427), 0, ",", " "), "html", null, true);
                    yield " FCFA)
                                        ";
                }
                // line 429
                yield "                                    </option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['promotion'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 431
            yield "                            </select>
                        </div>
                    ";
        }
        // line 434
        yield "                </div>
            </form>
        </div>
    </div>

    ";
        // line 440
        yield "    ";
        if (((($context["subStatus"] ?? null) == "inactive") && (($context["subscriptionInactiveFiltered"] ?? null) > 0))) {
            // line 441
            yield "        <div class=\"alert alert-info mb-4\">
            <i class=\"fas fa-info-circle me-2\"></i>
            <strong>";
            // line 443
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["subscriptionInactiveFiltered"] ?? null), "html", null, true);
            yield " catégorie(s)</strong> désactivée(s) par abonnement (hors quota).
        </div>
    ";
        }
        // line 446
        yield "
    <!-- Grille des catégories -->
    <div class=\"row g-4\">
        ";
        // line 449
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 450
            yield "            <div class=\"col-xl-3 col-lg-4 col-md-6\">
                <div class=\"category-card card h-100 border-0 shadow-sm hover-card overflow-hidden\">
                    <!-- Zone image réduite -->
                    <div class=\"category-image-wrapper position-relative\">
                        ";
            // line 454
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 454)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 455
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/categories/" . CoreExtension::getAttribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 455))), "html", null, true);
                yield "\" 
                                 alt=\"";
                // line 456
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 456), "html", null, true);
                yield "\"
                                 class=\"category-image\">
                        ";
            } else {
                // line 459
                yield "                            <div class=\"category-placeholder\">
                                <i class=\"fas fa-folder-open fa-3x text-muted\"></i>
                            </div>
                        ";
            }
            // line 463
            yield "                        
                        <!-- Badges en haut à droite -->
                        <div class=\"position-absolute top-0 end-0 p-2\">
                            <div class=\"d-flex flex-column gap-1\">
                                ";
            // line 467
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["category"], "subscriptionActive", [], "any", false, false, false, 467)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 468
                yield "                                    <span class=\"badge bg-warning text-dark\">
                                        <i class=\"fas fa-clock fa-xs me-1\"></i> Hors quota
                                    </span>
                                ";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 471
$context["category"], "isActive", [], "any", false, false, false, 471)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 472
                yield "                                    <span class=\"badge bg-success\">
                                        <i class=\"fas fa-check-circle fa-xs me-1\"></i> Active
                                    </span>
                                ";
            } else {
                // line 476
                yield "                                    <span class=\"badge bg-danger\">
                                        <i class=\"fas fa-pause-circle fa-xs me-1\"></i> Inactive
                                    </span>
                                ";
            }
            // line 480
            yield "                                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "subscriptionActive", [], "any", false, false, false, 480)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 481
                yield "                                    <span class=\"badge bg-info\">
                                        <i class=\"fas fa-database fa-xs me-1\"></i> Dans quota
                                    </span>
                                ";
            }
            // line 485
            yield "                            </div>
                        </div>
                    </div>

                    <div class=\"card-body d-flex flex-column\">
                        <!-- Titre et menu -->
                        <div class=\"d-flex justify-content-between align-items-start mb-2\">
                            <div class=\"flex-grow-1\">
                                <h6 class=\"card-title fw-bold mb-0 text-truncate\" title=\"";
            // line 493
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 493), "html", null, true);
            yield "\">
                                    ";
            // line 494
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 494), "html", null, true);
            yield "
                                </h6>
                                ";
            // line 496
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "parent", [], "any", false, false, false, 496)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 497
                yield "                                    <small class=\"text-muted\">
                                        <i class=\"fas fa-level-up-alt fa-xs me-1\"></i>";
                // line 498
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["category"], "parent", [], "any", false, false, false, 498), "name", [], "any", false, false, false, 498), "html", null, true);
                yield "
                                    </small>
                                ";
            }
            // line 501
            yield "                            </div>
                            <div class=\"dropdown ms-2\">
                                <button class=\"btn btn-sm btn-light rounded-circle\" type=\"button\" data-bs-toggle=\"dropdown\" style=\"width: 32px; height: 32px;\">
                                    <i class=\"fas fa-ellipsis-v fa-sm\"></i>
                                </button>
                                <ul class=\"dropdown-menu dropdown-menu-end shadow-sm\">
                                    <li>
                                        <a class=\"dropdown-item\" href=\"";
            // line 508
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 508)]), "html", null, true);
            yield "\">
                                            <i class=\"fas fa-eye me-2 text-info\"></i> Voir
                                        </a>
                                    </li>
                                    <li>
                                        <a class=\"dropdown-item\" href=\"";
            // line 513
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 513)]), "html", null, true);
            yield "\">
                                            <i class=\"fas fa-edit me-2 text-warning\"></i> Modifier
                                        </a>
                                    </li>
                                    <li>
                                        ";
            // line 518
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "subscriptionActive", [], "any", false, false, false, 518)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 519
                yield "                                            <button type=\"button\" 
                                                    class=\"dropdown-item toggle-category-btn\"
                                                    data-category-id=\"";
                // line 521
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 521), "html", null, true);
                yield "\"
                                                    data-category-name=\"";
                // line 522
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 522), "html", null, true);
                yield "\"
                                                    data-current-status=\"";
                // line 523
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "isActive", [], "any", false, false, false, 523)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : ("inactive"));
                yield "\"
                                                    data-token=\"";
                // line 524
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle-status" . CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 524))), "html", null, true);
                yield "\">
                                                <i class=\"fas ";
                // line 525
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "isActive", [], "any", false, false, false, 525)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-toggle-on text-success") : ("fa-toggle-off text-secondary"));
                yield " me-2\"></i>
                                                ";
                // line 526
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "isActive", [], "any", false, false, false, 526)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
                yield "
                                            </button>
                                        ";
            } else {
                // line 529
                yield "                                            <span class=\"dropdown-item text-muted disabled\">
                                                <i class=\"fas fa-ban me-2\"></i> Non disponible
                                            </span>
                                        ";
            }
            // line 533
            yield "                                    </li>
                                    <li><hr class=\"dropdown-divider\"></li>
                                    <li>
                                        ";
            // line 536
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 537
                yield "                                            <button type=\"button\" class=\"dropdown-item text-danger delete-category-btn\"
                                                    data-id=\"";
                // line 538
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 538), "html", null, true);
                yield "\"
                                                    data-name=\"";
                // line 539
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 539), "html", null, true);
                yield "\"
                                                    data-has-children=\"";
                // line 540
                yield ((((((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "childrenCount", [], "any", true, true, false, 540) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["category"], "childrenCount", [], "any", false, false, false, 540)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["category"], "childrenCount", [], "any", false, false, false, 540)) : (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 540)))) > 0)) ? ("true") : ("false"));
                yield "\"
                                                    data-has-products=\"";
                // line 541
                yield ((((((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "productCount", [], "any", true, true, false, 541) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["category"], "productCount", [], "any", false, false, false, 541)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["category"], "productCount", [], "any", false, false, false, 541)) : (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "products", [], "any", false, false, false, 541)))) > 0)) ? ("true") : ("false"));
                yield "\"
                                                    data-token=\"";
                // line 542
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 542))), "html", null, true);
                yield "\">
                                                <i class=\"fas fa-trash me-2\"></i> Supprimer
                                            </button>
                                        ";
            }
            // line 546
            yield "                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Description courte -->
                        <p class=\"card-text text-muted small mb-3\">
                            ";
            // line 553
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "description", [], "any", true, true, false, 553)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 553), "Aucune description")) : ("Aucune description"))), "truncate", [60, "..."], "method", false, false, false, 553), "html", null, true);
            yield "
                        </p>
                        
                        <!-- Statistiques -->
                        <div class=\"d-flex gap-2 mb-3\">
                            <div class=\"flex-fill text-center py-1 bg-light rounded-2\">
                                <i class=\"fas fa-box text-primary fa-sm\"></i>
                                <span class=\"fw-bold ms-1\">";
            // line 560
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "productCount", [], "any", true, true, false, 560) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["category"], "productCount", [], "any", false, false, false, 560)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "productCount", [], "any", false, false, false, 560), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "products", [], "any", false, false, false, 560)), "html", null, true)));
            yield "</span>
                                <small class=\"text-muted d-block fs-10\">produits</small>
                            </div>
                            <div class=\"flex-fill text-center py-1 bg-light rounded-2\">
                                <i class=\"fas fa-folder-tree text-info fa-sm\"></i>
                                <span class=\"fw-bold ms-1\">";
            // line 565
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "childrenCount", [], "any", true, true, false, 565) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["category"], "childrenCount", [], "any", false, false, false, 565)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "childrenCount", [], "any", false, false, false, 565), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 565)), "html", null, true)));
            yield "</span>
                                <small class=\"text-muted d-block fs-10\">sous-catégories</small>
                            </div>
                        </div>

                        <!-- Actions -->
                        <div class=\"d-flex gap-2 mt-auto\">
                            <a href=\"";
            // line 572
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_products", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 572)]), "html", null, true);
            yield "\" 
                               class=\"btn btn-sm btn-outline-secondary flex-fill\">
                                <i class=\"fas fa-list me-1\"></i> Produits
                            </a>
                            ";
            // line 576
            if ((($context["companyType"] ?? null) != "restaurant")) {
                // line 577
                yield "                                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_promotions", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 577)]), "html", null, true);
                yield "\" 
                                   class=\"btn btn-sm btn-outline-warning\" title=\"Promotions\">
                                    <i class=\"fas fa-percent\"></i> Promotions
                                </a>
                            ";
            }
            // line 582
            yield "                        </div>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 586
        if (!$context['_iterated']) {
            // line 587
            yield "            <div class=\"col-12\">
                <div class=\"card border-0 shadow-sm text-center py-5\">
                    <div class=\"card-body\">
                        <i class=\"fas fa-folder-open fa-4x text-muted mb-3 opacity-50\"></i>
                        <h5 class=\"text-muted\">Aucune catégorie trouvée</h5>
                        <p class=\"text-muted small\">Modifiez vos filtres ou créez une nouvelle catégorie.</p>
                        <a href=\"";
            // line 593
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_new");
            yield "\" class=\"btn btn-primary mt-2\">
                            <i class=\"fas fa-plus me-2\"></i> Nouvelle catégorie
                        </a>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 600
        yield "    </div>

    <!-- Pagination -->
    ";
        // line 603
        if ((($context["totalPages"] ?? null) > 1)) {
            // line 604
            yield "    <nav class=\"mt-5\">
        <ul class=\"pagination justify-content-center\">
            ";
            // line 606
            if ((($context["currentPage"] ?? null) > 1)) {
                // line 607
                yield "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                // line 608
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 608), "query", [], "any", false, false, false, 608), "all", [], "any", false, false, false, 608), ["page" => (($context["currentPage"] ?? null) - 1)])), "html", null, true);
                yield "\">
                        <i class=\"fas fa-chevron-left\"></i>
                    </a>
                </li>
            ";
            }
            // line 613
            yield "            
            ";
            // line 614
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, ($context["totalPages"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 615
                yield "                ";
                if ((($context["page"] == ($context["currentPage"] ?? null)) || (($context["page"] >= (($context["currentPage"] ?? null) - 2)) && ($context["page"] <= (($context["currentPage"] ?? null) + 2))))) {
                    // line 616
                    yield "                    <li class=\"page-item ";
                    yield ((($context["page"] == ($context["currentPage"] ?? null))) ? ("active") : (""));
                    yield "\">
                        <a class=\"page-link\" href=\"";
                    // line 617
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 617), "query", [], "any", false, false, false, 617), "all", [], "any", false, false, false, 617), ["page" => $context["page"]])), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "</a>
                    </li>
                ";
                } elseif (((                // line 619
$context["page"] == (($context["currentPage"] ?? null) - 3)) || ($context["page"] == (($context["currentPage"] ?? null) + 3)))) {
                    // line 620
                    yield "                    <li class=\"page-item disabled\"><span class=\"page-link\">...</span></li>
                ";
                }
                // line 622
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 623
            yield "            
            ";
            // line 624
            if ((($context["currentPage"] ?? null) < ($context["totalPages"] ?? null))) {
                // line 625
                yield "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                // line 626
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 626), "query", [], "any", false, false, false, 626), "all", [], "any", false, false, false, 626), ["page" => (($context["currentPage"] ?? null) + 1)])), "html", null, true);
                yield "\">
                        <i class=\"fas fa-chevron-right\"></i>
                    </a>
                </li>
            ";
            }
            // line 631
            yield "        </ul>
    </nav>
    ";
        }
        // line 634
        yield "</div>

<!-- Modal Nouvelle catégorie (quota atteint) -->
<div class=\"modal fade\" id=\"quotaReachedModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-warning\">
                <h5 class=\"modal-title text-dark\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Quota atteint
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <i class=\"fas fa-ban fa-4x text-warning mb-3\"></i>
                <h5>Limite de catégories actives atteinte</h5>
                <p class=\"text-muted\">Vous utilisez déjà ";
        // line 649
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["activeCount"] ?? null), "html", null, true);
        yield " catégories sur ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["quota"] ?? null), "html", null, true);
        yield ".</p>
                <p class=\"text-muted small\">Pour ajouter plus de catégories, passez à un plan supérieur.</p>
            </div>
            <div class=\"modal-footer justify-content-center\">
                <a href=\"";
        // line 653
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subscription_plans");
        yield "\" class=\"btn btn-warning px-4\">
                    <i class=\"fas fa-arrow-up me-2\"></i> Voir les offres
                </a>
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Toggle Statut -->
<div class=\"modal fade\" id=\"toggleCategoryModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">Confirmation</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p id=\"toggleMessage\"></p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"toggleForm\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" id=\"toggleToken\">
                    <button type=\"submit\" class=\"btn\" id=\"toggleBtn\"></button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Suppression -->
<div class=\"modal fade\" id=\"deleteCategoryModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-trash-alt me-2\"></i> Supprimer la catégorie
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p id=\"deleteMessage\"></p>
                <div id=\"deleteWarning\" class=\"alert alert-warning mt-2\" style=\"display: none;\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i>
                    <span>Cette catégorie contient des éléments. Elle ne peut pas être supprimée.</span>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"deleteForm\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteToken\">
                    <button type=\"submit\" class=\"btn btn-danger\" id=\"deleteConfirmBtn\">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    // line 713
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 714
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/fr.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // ========== Initialisation Select2 pour la promotion (uniquement si présent) ==========
    if (document.getElementById('promotion')) {
        \$('#promotion').select2({
            theme: 'bootstrap-5',
            language: 'fr',
            placeholder: '🎯 Sélectionnez une promotion',
            allowClear: true,
            width: '100%'
        });
    }

    // Nouvelle catégorie avec vérification quota
    const newCategoryBtn = document.getElementById('newCategoryBtn');
    if (newCategoryBtn) {
        newCategoryBtn.addEventListener('click', function(e) {
            e.preventDefault();
            ";
        // line 735
        if ((($context["quotaReached"] ?? null) && (($context["plan"] ?? null) != "premium"))) {
            // line 736
            yield "                new bootstrap.Modal(document.getElementById('quotaReachedModal')).show();
            ";
        } else {
            // line 738
            yield "                window.location.href = \"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_new");
            yield "\";
            ";
        }
        // line 740
        yield "        });
    }

    // Toggle statut
    const toggleModal = new bootstrap.Modal(document.getElementById('toggleCategoryModal'));
    const toggleMessage = document.getElementById('toggleMessage');
    const toggleForm = document.getElementById('toggleForm');
    const toggleToken = document.getElementById('toggleToken');
    const toggleBtn = document.getElementById('toggleBtn');

    document.querySelectorAll('.toggle-category-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const categoryId = this.dataset.categoryId;
            const categoryName = this.dataset.categoryName;
            const currentStatus = this.dataset.currentStatus;
            const isActive = currentStatus === 'active';
            
            toggleMessage.textContent = `Êtes-vous sûr de vouloir \${isActive ? 'désactiver' : 'activer'} la catégorie \"\${categoryName}\" ?`;
            toggleForm.action = `/admin/category/\${categoryId}/toggle-status`;
            toggleToken.value = this.dataset.token;
            toggleBtn.className = isActive ? 'btn btn-danger' : 'btn btn-success';
            toggleBtn.textContent = isActive ? 'Désactiver' : 'Activer';
            toggleModal.show();
        });
    });

    // Suppression
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteCategoryModal'));
    const deleteMessage = document.getElementById('deleteMessage');
    const deleteWarning = document.getElementById('deleteWarning');
    const deleteForm = document.getElementById('deleteForm');
    const deleteToken = document.getElementById('deleteToken');
    const deleteConfirmBtn = document.getElementById('deleteConfirmBtn');

    document.querySelectorAll('.delete-category-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const categoryId = this.dataset.id;
            const categoryName = this.dataset.name;
            const hasChildren = this.dataset.hasChildren === 'true';
            const hasProducts = this.dataset.hasProducts === 'true';
            
            if (hasChildren || hasProducts) {
                deleteMessage.innerHTML = `La catégorie \"<strong>\${categoryName}</strong>\" ne peut pas être supprimée.`;
                deleteWarning.style.display = 'block';
                deleteWarning.innerHTML = `<i class=\"fas fa-exclamation-triangle me-2\"></i> Cette catégorie contient \${hasChildren ? 'des sous-catégories' : ''} \${hasChildren && hasProducts ? 'et' : ''} \${hasProducts ? 'des produits' : ''}.`;
                deleteConfirmBtn.disabled = true;
            } else {
                deleteMessage.innerHTML = `Êtes-vous sûr de vouloir supprimer la catégorie \"<strong>\${categoryName}</strong>\" ?<br><small class=\"text-danger\">Cette action est irréversible.</small>`;
                deleteWarning.style.display = 'none';
                deleteConfirmBtn.disabled = false;
            }
            
            deleteForm.action = `/admin/category/\${categoryId}/delete`;
            deleteToken.value = this.dataset.token;
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
        return array (  1201 => 740,  1195 => 738,  1191 => 736,  1189 => 735,  1165 => 714,  1158 => 713,  1094 => 653,  1085 => 649,  1068 => 634,  1063 => 631,  1055 => 626,  1052 => 625,  1050 => 624,  1047 => 623,  1041 => 622,  1037 => 620,  1035 => 619,  1028 => 617,  1023 => 616,  1020 => 615,  1016 => 614,  1013 => 613,  1005 => 608,  1002 => 607,  1000 => 606,  996 => 604,  994 => 603,  989 => 600,  976 => 593,  968 => 587,  966 => 586,  958 => 582,  949 => 577,  947 => 576,  940 => 572,  930 => 565,  922 => 560,  912 => 553,  903 => 546,  896 => 542,  892 => 541,  888 => 540,  884 => 539,  880 => 538,  877 => 537,  875 => 536,  870 => 533,  864 => 529,  858 => 526,  854 => 525,  850 => 524,  846 => 523,  842 => 522,  838 => 521,  834 => 519,  832 => 518,  824 => 513,  816 => 508,  807 => 501,  801 => 498,  798 => 497,  796 => 496,  791 => 494,  787 => 493,  777 => 485,  771 => 481,  768 => 480,  762 => 476,  756 => 472,  754 => 471,  749 => 468,  747 => 467,  741 => 463,  735 => 459,  729 => 456,  724 => 455,  722 => 454,  716 => 450,  711 => 449,  706 => 446,  700 => 443,  696 => 441,  693 => 440,  686 => 434,  681 => 431,  674 => 429,  668 => 427,  666 => 426,  661 => 425,  659 => 424,  655 => 423,  648 => 422,  644 => 421,  632 => 412,  628 => 411,  624 => 410,  613 => 402,  609 => 401,  605 => 400,  594 => 392,  590 => 391,  586 => 390,  576 => 383,  567 => 376,  560 => 372,  556 => 371,  552 => 370,  541 => 362,  537 => 361,  533 => 360,  522 => 352,  518 => 351,  514 => 350,  504 => 343,  495 => 336,  493 => 335,  479 => 324,  461 => 309,  447 => 298,  433 => 287,  416 => 273,  402 => 262,  388 => 251,  374 => 240,  356 => 224,  346 => 220,  343 => 219,  338 => 218,  328 => 214,  325 => 213,  320 => 212,  317 => 210,  307 => 203,  302 => 201,  296 => 197,  293 => 196,  284 => 188,  277 => 184,  267 => 176,  265 => 175,  258 => 170,  254 => 168,  252 => 167,  246 => 166,  242 => 165,  220 => 145,  213 => 144,  72 => 7,  65 => 6,  54 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/category/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\category\\index.html.twig");
    }
}
