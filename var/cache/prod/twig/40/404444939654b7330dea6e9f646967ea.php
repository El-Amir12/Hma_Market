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
class __TwigTemplate_db82e8a1eb5b77022f763e8d7bff9d20 extends Template
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
        yield "Gestion des Produits - HMA Market";
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
/* Styles Select2 */
.select2-container--bootstrap-5 .select2-selection {
    height: 38px !important;
    border-radius: 8px !important;
    background-color: #fff !important;
    border-color: #dee2e6 !important;
}
.select2-container--bootstrap-5 .select2-selection--single {
    height: 38px !important;
    display: flex !important;
    align-items: center !important;
}
.select2-container--bootstrap-5 .select2-selection--single .select2-selection__rendered {
    line-height: 36px !important;
    padding-left: 12px !important;
    color: #212529 !important;
}
.select2-container--bootstrap-5 .select2-selection--single .select2-selection__arrow {
    height: 36px !important;
}
.select2-container--bootstrap-5 .select2-dropdown {
    border-color: #e9ecef !important;
    border-radius: 8px !important;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1) !important;
}
.select2-container--bootstrap-5 .select2-results__option--selected {
    background-color: #0463f1 !important;
    color: white !important;
}
@media (max-width: 576px) {
    .btn-sm {
        font-size: 0.75rem;
        padding: 0.25rem 0.2rem;
    }
    .stat-item .text-uppercase {
        font-size: 0.65rem;
    }
}
</style>
";
        yield from [];
    }

    // line 90
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 91
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
        // line 112
        yield (((($tmp = ($context["quotaReached"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-danger") : ("text-success"));
        yield "\">
                            ";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["activeCount"] ?? null), "html", null, true);
        yield " / ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["quota"] ?? null), "html", null, true);
        yield "
                            ";
        // line 114
        if ((($context["quota"] ?? null) == "Illimité")) {
            // line 115
            yield "                                <i class=\"fas fa-infinity text-info ms-1\"></i>
                            ";
        }
        // line 117
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
        // line 133
        yield "    ";
        if ((($tmp = ($context["quotaReached"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 134
            yield "    <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
        <div class=\"d-flex justify-content-between align-items-center\">
            <div>
                <i class=\"fas fa-exclamation-triangle me-2\"></i>
                <strong>Quota atteint !</strong> Vous avez utilisé vos ";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["quota"] ?? null), "html", null, true);
            yield " produits actifs.
            </div>
            <a href=\"";
            // line 140
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subscription_plans");
            yield "\" class=\"btn btn-warning btn-sm\">
                <i class=\"fas fa-arrow-up me-1\"></i> Voir les offres
            </a>
        </div>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    </div>
    ";
        }
        // line 147
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
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalFiltered"] ?? null), "html", null, true);
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
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["activeFiltered"] ?? null), "html", null, true);
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
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["inactiveFiltered"] ?? null), "html", null, true);
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
        // line 193
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["lowStockFiltered"] ?? null), "html", null, true);
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
        // line 204
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["perishableFiltered"] ?? null), "html", null, true);
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
        // line 215
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nonPerishableFiltered"] ?? null), "html", null, true);
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
        // line 233
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["subscriptionActiveFiltered"] ?? null), "html", null, true);
        yield "</h3>
                            </div>
                            <div class=\"text-end\">
                                <small class=\"text-secondary d-block\">Inactif</small>
                                <h3 class=\"mb-0\">";
        // line 237
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["subscriptionInactiveFiltered"] ?? null), "html", null, true);
        yield "</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filtres -->
    <div class=\"card border-0 shadow-sm mb-4\">
        <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center flex-wrap gap-2\">
            <h5 class=\"mb-0\"><i class=\"fas fa-filter me-2 text-primary\"></i>Filtres</h5>
            <div class=\"d-flex gap-2\">
                <button type=\"button\" class=\"btn btn-outline-info btn-sm\" id=\"toggleExtraFiltersBtn\">
                    <i class=\"fas fa-sliders-h me-1\"></i> Autres filtres
                </button>
                <a href=\"";
        // line 254
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_index");
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
                <!-- Première ligne : 3 filtres -->
                <div class=\"row g-3\">
                    <div class=\"col-md-4\">
                        <label class=\"form-label fw-semibold small\">
                            <i class=\"fas fa-search me-1\"></i> Recherche
                        </label>
                        <input type=\"text\" name=\"search\" class=\"form-control\" 
                               placeholder=\"Nom, code-barres...\" 
                               value=\"";
        // line 272
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["search"] ?? null), "html", null, true);
        yield "\">
                    </div>
                    <div class=\"col-md-4\">
                        <label class=\"form-label fw-semibold small\">
                            <i class=\"fas fa-toggle-on me-1\"></i> Statut
                        </label>
                        <select name=\"status\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"active\" ";
        // line 280
        yield (((($context["selectedStatus"] ?? null) == "active")) ? ("selected") : (""));
        yield ">Actifs</option>
                            <option value=\"inactive\" ";
        // line 281
        yield (((($context["selectedStatus"] ?? null) == "inactive")) ? ("selected") : (""));
        yield ">Inactifs</option>
                            <option value=\"low-stock\" ";
        // line 282
        yield (((($context["selectedStatus"] ?? null) == "low-stock")) ? ("selected") : (""));
        yield ">Stock faible</option>
                        </select>
                    </div>
                    <div class=\"col-md-4\">
                        <label class=\"form-label fw-semibold small\">
                            <i class=\"fas fa-calendar-alt me-1\"></i> Type
                        </label>
                        <select name=\"expiry_type\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"perishable\" ";
        // line 291
        yield (((($context["selectedExpiryType"] ?? null) == "perishable")) ? ("selected") : (""));
        yield ">Périssables</option>
                            <option value=\"non-perishable\" ";
        // line 292
        yield (((($context["selectedExpiryType"] ?? null) == "non-perishable")) ? ("selected") : (""));
        yield ">Non périssables</option>
                        </select>
                    </div>
                </div>

                <!-- Deuxième ligne : 3 filtres -->
                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-4\">
                        <label class=\"form-label fw-semibold small\">
                            <i class=\"fas fa-chart-line me-1\"></i> Quota
                        </label>
                        <select name=\"subscription_status\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"active\" ";
        // line 305
        yield (((($context["selectedSubscriptionStatus"] ?? null) == "active")) ? ("selected") : (""));
        yield ">Dans quota</option>
                            <option value=\"inactive\" ";
        // line 306
        yield (((($context["selectedSubscriptionStatus"] ?? null) == "inactive")) ? ("selected") : (""));
        yield ">Hors quota</option>
                        </select>
                    </div>
                    <div class=\"col-md-4\">
                        <label class=\"form-label fw-semibold small\">
                            <i class=\"fas fa-tag me-1\"></i> Catégorie
                        </label>
                        <select name=\"category\" id=\"category\" class=\"form-select\" style=\"width: 100%;\">
                            <option value=\"0\">Toutes les catégories</option>
                            ";
        // line 315
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 316
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 316), "html", null, true);
            yield "\" ";
            yield (((($context["selectedCategory"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 316))) ? ("selected") : (""));
            yield ">
                                    ";
            // line 317
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, CoreExtension::getAttribute($this->env, $this->source, $context["category"], "level", [], "any", false, false, false, 317)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                yield "&nbsp;&nbsp;";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 318
            yield "                                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "level", [], "any", false, false, false, 318) > 0)) {
                yield "↳";
            }
            // line 319
            yield "                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 319), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "productCount", [], "any", false, false, false, 319), "html", null, true);
            yield ")
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 322
        yield "                        </select>
                    </div>
                    <div class=\"col-md-4\">
                        <label class=\"form-label fw-semibold small\">
                            <i class=\"fas fa-weight-hanging me-1\"></i> Unité
                        </label>
                        <select name=\"unit\" id=\"unit\" class=\"form-select\" style=\"width: 100%;\">
                            <option value=\"\">Toutes les unités</option>
                            ";
        // line 330
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["units"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["unit"]) {
            // line 331
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["unit"], "html", null, true);
            yield "\" ";
            yield (((($context["selectedUnit"] ?? null) == $context["unit"])) ? ("selected") : (""));
            yield ">
                                    ";
            // line 332
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["unit"], "html", null, true);
            yield "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['unit'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 335
        yield "                        </select>
                    </div>
                </div>

                <!-- Filtres supplémentaires (masqués par défaut) avec trait de séparation -->
                <div id=\"extraFilters\" style=\"display: none;\">
                    <hr class=\"my-4\">
                    
                    ";
        // line 343
        if ((($context["companyType"] ?? null) == "restaurant")) {
            // line 344
            yield "                        <!-- RESTAURANT : 2 filtres -->
                        <div class=\"row g-3\">
                            <div class=\"col-12 col-md-6\">
                                <label class=\"form-label fw-semibold small\">
                                    <i class=\"fas fa-flask me-1\"></i> Dosage
                                </label>
                                <input type=\"text\" name=\"dosage\" id=\"dosage\" value=\"";
            // line 350
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["dosage"] ?? null), "html", null, true);
            yield "\" 
                                    class=\"form-control\" placeholder=\"Ex: 500mg\">
                            </div>
                            <div class=\"col-12 col-md-6\">
                                <label class=\"form-label fw-semibold small\">
                                    <i class=\"fas fa-pills me-1\"></i> Forme
                                </label>
                                <input type=\"text\" name=\"form\" id=\"form\" value=\"";
            // line 357
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["form"] ?? null), "html", null, true);
            yield "\" 
                                    class=\"form-control\" placeholder=\"Ex: comprimé\">
                            </div>
                        </div>
                    ";
        } elseif ((        // line 361
($context["companyType"] ?? null) == "market")) {
            // line 362
            yield "                        <!-- MARKET : 3 filtres -->
                        <div class=\"row g-3\">
                            <div class=\"col-12 col-md-4\">
                                <label class=\"form-label fw-semibold small\">
                                    <i class=\"fas fa-flask me-1\"></i> Dosage
                                </label>
                                <input type=\"text\" name=\"dosage\" id=\"dosage\" value=\"";
            // line 368
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["dosage"] ?? null), "html", null, true);
            yield "\" 
                                    class=\"form-control\" placeholder=\"Ex: 500mg\">
                            </div>
                            <div class=\"col-12 col-md-4\">
                                <label class=\"form-label fw-semibold small\">
                                    <i class=\"fas fa-pills me-1\"></i> Forme
                                </label>
                                <input type=\"text\" name=\"form\" id=\"form\" value=\"";
            // line 375
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["form"] ?? null), "html", null, true);
            yield "\" 
                                    class=\"form-control\" placeholder=\"Ex: comprimé\">
                            </div>
                            <div class=\"col-12 col-md-4\">
                                <label class=\"form-label fw-semibold small\">
                                    <i class=\"fas fa-percent me-1\"></i> Promotion
                                </label>
                                <select name=\"promotion\" id=\"promotion\" class=\"form-select\" style=\"width: 100%;\">
                                    <option value=\"0\">🎯 Toutes les promotions</option>
                                    ";
            // line 384
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["promotions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
                // line 385
                yield "                                        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 385), "html", null, true);
                yield "\" ";
                yield (((($context["selectedPromotion"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 385))) ? ("selected") : (""));
                yield ">
                                            ";
                // line 386
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "name", [], "any", false, false, false, 386), "html", null, true);
                yield "
                                            ";
                // line 387
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "discountPercentage", [], "any", false, false, false, 387)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 388
                    yield "                                                (-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "discountPercentage", [], "any", false, false, false, 388), "html", null, true);
                    yield "%)
                                            ";
                } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,                 // line 389
$context["promotion"], "discountAmount", [], "any", false, false, false, 389)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 390
                    yield "                                                (-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "discountAmount", [], "any", false, false, false, 390), 0, ",", " "), "html", null, true);
                    yield " FCFA)
                                            ";
                }
                // line 392
                yield "                                        </option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['promotion'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 394
            yield "                                </select>
                            </div>
                        </div>
                    ";
        } elseif ((        // line 397
($context["companyType"] ?? null) == "pharmacy")) {
            // line 398
            yield "                        <!-- PHARMACY : 4 filtres -->
                        <div class=\"row g-3\">
                            <div class=\"col-12 col-md-3\">
                                <label class=\"form-label fw-semibold small\">
                                    <i class=\"fas fa-flask me-1\"></i> Dosage
                                </label>
                                <input type=\"text\" name=\"dosage\" id=\"dosage\" value=\"";
            // line 404
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["dosage"] ?? null), "html", null, true);
            yield "\" 
                                    class=\"form-control\" placeholder=\"Ex: 500mg\">
                            </div>
                            <div class=\"col-12 col-md-3\">
                                <label class=\"form-label fw-semibold small\">
                                    <i class=\"fas fa-pills me-1\"></i> Forme
                                </label>
                                <input type=\"text\" name=\"form\" id=\"form\" value=\"";
            // line 411
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["form"] ?? null), "html", null, true);
            yield "\" 
                                    class=\"form-control\" placeholder=\"Ex: comprimé\">
                            </div>
                            <div class=\"col-12 col-md-3\">
                                <label class=\"form-label fw-semibold small\">
                                    <i class=\"fas fa-percent me-1\"></i> Promotion
                                </label>
                                <select name=\"promotion\" id=\"promotion\" class=\"form-select\" style=\"width: 100%;\">
                                    <option value=\"0\">🎯 Toutes les promotions</option>
                                    ";
            // line 420
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["promotions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
                // line 421
                yield "                                        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 421), "html", null, true);
                yield "\" ";
                yield (((($context["selectedPromotion"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 421))) ? ("selected") : (""));
                yield ">
                                            ";
                // line 422
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "name", [], "any", false, false, false, 422), "html", null, true);
                yield "
                                            ";
                // line 423
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "discountPercentage", [], "any", false, false, false, 423)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 424
                    yield "                                                (-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "discountPercentage", [], "any", false, false, false, 424), "html", null, true);
                    yield "%)
                                            ";
                } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,                 // line 425
$context["promotion"], "discountAmount", [], "any", false, false, false, 425)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 426
                    yield "                                                (-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "discountAmount", [], "any", false, false, false, 426), 0, ",", " "), "html", null, true);
                    yield " FCFA)
                                            ";
                }
                // line 428
                yield "                                        </option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['promotion'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 430
            yield "                                </select>
                            </div>
                            <div class=\"col-12 col-md-3\">
                                <label class=\"form-label fw-semibold small\">
                                    <i class=\"fas fa-prescription-bottle me-1\"></i> Prescription
                                </label>
                                <select name=\"prescription_required\" class=\"form-select\">
                                    <option value=\"\">Tous</option>
                                    <option value=\"1\" ";
            // line 438
            yield (((($context["prescriptionRequired"] ?? null) == "1")) ? ("selected") : (""));
            yield ">Prescription obligatoire</option>
                                    <option value=\"0\" ";
            // line 439
            yield (((($context["prescriptionRequired"] ?? null) == "0")) ? ("selected") : (""));
            yield ">Sans prescription</option>
                                </select>
                            </div>
                        </div>
                    ";
        }
        // line 444
        yield "                </div>
            </form>
        </div>
    </div>

    <!-- Grille de produits -->
    <div class=\"row g-3\">
        ";
        // line 451
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 452
            yield "        <div class=\"col-xl-3 col-lg-4 col-md-6\">
            <div class=\"card product-card h-100 shadow-sm\">
                <div class=\"product-image-container position-relative\">
                    ";
            // line 455
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 455) && (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 455) != "default-product.png"))) {
                // line 456
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 456))), "html", null, true);
                yield "\" 
                             alt=\"";
                // line 457
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 457), "html", null, true);
                yield "\" 
                             class=\"card-img-top product-image\">
                    ";
            } else {
                // line 460
                yield "                        <div class=\"product-image-placeholder\">
                            <i class=\"fas fa-box fa-4x text-muted\"></i>
                        </div>
                    ";
            }
            // line 464
            yield "
                    <!-- Badges de statut superposés (en haut à gauche) -->
                    <div class=\"position-absolute top-0 start-0 p-2\">
                        <div class=\"d-flex flex-column gap-1\">
                            <span class=\"badge ";
            // line 468
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "isActive", [], "any", false, false, false, 468)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-danger"));
            yield "\">
                                ";
            // line 469
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "isActive", [], "any", false, false, false, 469)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Inactif"));
            yield "
                            </span>
                            ";
            // line 471
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["product"], "subscriptionActive", [], "any", false, false, false, 471)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 472
                yield "                                <span class=\"badge bg-warning text-dark\">Hors quota</span>
                            ";
            }
            // line 474
            yield "                        </div>
                    </div>
                </div>

                <div class=\"card-body d-flex flex-column\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <h5 class=\"card-title text-truncate mb-0\">
                            ";
            // line 481
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 481), "html", null, true);
            yield "
                            <small class=\"text-muted ms-1\">
                                <i class=\"fas fa-weight-hanging me-1\"></i>";
            // line 483
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "unit", [], "any", true, true, false, 483)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "unit", [], "any", false, false, false, 483), "pièce")) : ("pièce")), "html", null, true);
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
            // line 492
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 492)]), "html", null, true);
            yield "\">
                                        <i class=\"fas fa-eye me-2\"></i> Voir
                                    </a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item\" href=\"";
            // line 497
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 497)]), "html", null, true);
            yield "\">
                                        <i class=\"fas fa-edit me-2\"></i> Modifier
                                    </a>
                                </li>
                                <li>
                                    <button type=\"button\" 
                                            class=\"dropdown-item toggle-status-btn\"
                                            data-product-id=\"";
            // line 504
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 504), "html", null, true);
            yield "\"
                                            data-product-name=\"";
            // line 505
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 505), "html", null, true);
            yield "\"
                                            data-is-active=\"";
            // line 506
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "isActive", [], "any", false, false, false, 506)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("0"));
            yield "\"
                                            data-token=\"";
            // line 507
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle-status" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 507))), "html", null, true);
            yield "\">
                                        <i class=\"fas ";
            // line 508
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "isActive", [], "any", false, false, false, 508)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-toggle-on") : ("fa-toggle-off"));
            yield " me-2\"></i>
                                        ";
            // line 509
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "isActive", [], "any", false, false, false, 509)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
            yield "
                                    </button>
                                </li>
                                <li><hr class=\"dropdown-divider\"></li>
                                <li>
                                    ";
            // line 514
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 515
                yield "                                        <button type=\"button\" 
                                                class=\"dropdown-item text-danger delete-product-btn\"
                                                data-product-id=\"";
                // line 517
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 517), "html", null, true);
                yield "\"
                                                data-product-name=\"";
                // line 518
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 518), "html", null, true);
                yield "\"
                                                data-token=\"";
                // line 519
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 519))), "html", null, true);
                yield "\"
                                                ";
                // line 520
                if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "purchaseItems", [], "any", false, false, false, 520)) > 0) || (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockBatches", [], "any", false, false, false, 520)) > 0))) {
                    yield "disabled";
                }
                // line 521
                yield "                                                title=\"Supprimer\">
                                            <i class=\"fas fa-trash me-2\"></i> Supprimer
                                        </button>
                                    ";
            }
            // line 525
            yield "                                </li>
                            </ul>
                        </div>
                    </div>

                    <p class=\"text-muted small mb-2\">
                        <i class=\"fas fa-barcode me-1\"></i>";
            // line 531
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "barcode", [], "any", false, false, false, 531), "html", null, true);
            yield "
                    </p>
                    <p class=\"text-muted small mb-2\">
                        Catégorie :
                        ";
            // line 535
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 535)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 536
                yield "                            <i class=\"fas fa-tag me-1\"></i>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 536), "name", [], "any", false, false, false, 536), "html", null, true);
                yield "
                        ";
            } else {
                // line 538
                yield "                            <i class=\"fas fa-question-circle me-1\"></i>Non catégorisé
                        ";
            }
            // line 540
            yield "                    </p>

                    ";
            // line 542
            if ((($context["companyType"] ?? null) != "restaurant")) {
                // line 543
                yield "                    <div class=\"row g-0 mb-2\">
                        <div class=\"col-6\">
                            <small class=\"text-muted d-block\">Prix vente</small>
                            <span class=\"fw-bold text-success\">
                                ";
                // line 547
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "salePrice", [], "any", false, false, false, 547), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "hmaService", [], "any", false, false, false, 547)), "html", null, true);
                yield "
                            </span>
                        </div>
                        <div class=\"col-6 text-end\">
                            <small class=\"text-muted d-block\">Prix achat</small>
                            <span class=\"fw-bold text-primary\">
                                ";
                // line 553
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "purchasePrice", [], "any", false, false, false, 553), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "hmaService", [], "any", false, false, false, 553)), "html", null, true);
                yield "
                            </span>
                        </div>
                    </div>

                    ";
                // line 558
                $context["margin"] = (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "salePrice", [], "any", false, false, false, 558) - CoreExtension::getAttribute($this->env, $this->source, $context["product"], "purchasePrice", [], "any", false, false, false, 558));
                // line 559
                yield "                    ";
                $context["marginPercentage"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "purchasePrice", [], "any", false, false, false, 559) > 0)) ? (Twig\Extension\CoreExtension::round(((($context["margin"] ?? null) / CoreExtension::getAttribute($this->env, $this->source, $context["product"], "purchasePrice", [], "any", false, false, false, 559)) * 100), 1)) : (0));
                // line 560
                yield "                    <div class=\"d-flex justify-content-between align-items-center mb-2 small\">
                        <span class=\"text-muted\">Marge</span>
                        <span class=\"badge ";
                // line 562
                yield (((($context["marginPercentage"] ?? null) >= 50)) ? ("bg-success") : ((((($context["marginPercentage"] ?? null) >= 20)) ? ("bg-warning text-dark") : ("bg-danger"))));
                yield "\">
                            ";
                // line 563
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(($context["margin"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "hmaService", [], "any", false, false, false, 563)), "html", null, true);
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["marginPercentage"] ?? null), "html", null, true);
                yield "%)
                        </span>
                    </div>
                    ";
            } else {
                // line 567
                yield "                    <div class=\"row g-0 mb-2\">
                        <div class=\"col-12\">
                            <small class=\"text-muted d-block\">Prix d'achat</small>
                            <span class=\"fw-bold text-primary\">
                                ";
                // line 571
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "purchasePrice", [], "any", false, false, false, 571), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "hmaService", [], "any", false, false, false, 571)), "html", null, true);
                yield "
                            </span>
                        </div>
                    </div>
                    ";
            }
            // line 576
            yield "
                    <div class=\"row g-0 mb-2\">
                        <div class=\"col-6\">
                            <small class=\"text-muted d-block\">Stock</small>
                            <span class=\"fw-bold\">";
            // line 580
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockQuantity", [], "any", false, false, false, 580), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "unit", [], "any", true, true, false, 580)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "unit", [], "any", false, false, false, 580), "pièce")) : ("pièce")), "html", null, true);
            yield "</span>
                        </div>
                        <div class=\"col-6 text-end\">
                            <small class=\"text-muted d-block\">Stock min</small>
                            <span class=\"fw-bold\">";
            // line 584
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "minQuantity", [], "any", false, false, false, 584), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "unit", [], "any", true, true, false, 584)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "unit", [], "any", false, false, false, 584), "pièce")) : ("pièce")), "html", null, true);
            yield "</span>
                        </div>
                    </div>

                    ";
            // line 588
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "dosage", [], "any", false, false, false, 588) || CoreExtension::getAttribute($this->env, $this->source, $context["product"], "form", [], "any", false, false, false, 588))) {
                // line 589
                yield "                        <div class=\"small text-muted mb-2\">
                            ";
                // line 590
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "dosage", [], "any", false, false, false, 590)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<span class=\"me-2\"><i class=\"fas fa-flask me-1\"></i>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "dosage", [], "any", false, false, false, 590), "html", null, true);
                    yield "</span>";
                }
                // line 591
                yield "                            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "form", [], "any", false, false, false, 591)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<span><i class=\"fas fa-pills me-1\"></i>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "form", [], "any", false, false, false, 591), "html", null, true);
                    yield "</span>";
                }
                // line 592
                yield "                        </div>
                    ";
            }
            // line 594
            yield "
                    <div class=\"d-flex gap-1 mt-auto\">
                        <a href=\"";
            // line 596
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_index", ["productId" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 596)]), "html", null, true);
            yield "\" 
                            class=\"btn btn-sm btn-outline-info flex-fill\" title=\"Lots de stock\">
                            <i class=\"fas fa-boxes\"></i> Lots
                        </a>
                        <a href=\"#\" 
                           class=\"btn btn-sm btn-outline-primary flex-fill\" title=\"Mouvements de stock\">
                            <i class=\"fas fa-exchange-alt\"></i> Mouvements
                        </a>
                        ";
            // line 604
            if ((($context["companyType"] ?? null) != "restaurant")) {
                // line 605
                yield "                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_promotions", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 605)]), "html", null, true);
                yield "\" 
                            class=\"btn btn-sm btn-outline-warning flex-fill\" title=\"Promotions\">
                                <i class=\"fas fa-tags\"></i> Promos
                            </a>
                        ";
            }
            // line 610
            yield "                    </div>
                </div>
            </div>
        </div>
        ";
            $context['_iterated'] = true;
        }
        // line 614
        if (!$context['_iterated']) {
            // line 615
            yield "        <div class=\"col-12\">
            <div class=\"card shadow\">
                <div class=\"card-body text-center py-5\">
                    <i class=\"fas fa-box-open fa-4x text-muted mb-3\"></i>
                    <h4 class=\"text-muted\">Aucun produit trouvé</h4>
                    <a href=\"";
            // line 620
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
        // line 627
        yield "    </div>

    <!-- Pagination -->
    ";
        // line 630
        if ((($context["totalPages"] ?? null) > 1)) {
            // line 631
            yield "    <nav aria-label=\"Pagination\" class=\"mt-4\">
        <ul class=\"pagination justify-content-center\">
            ";
            // line 633
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, ($context["totalPages"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 634
                yield "                <li class=\"page-item ";
                yield ((($context["page"] == ($context["currentPage"] ?? null))) ? ("active") : (""));
                yield "\">
                    <a class=\"page-link\" href=\"";
                // line 635
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 635), "query", [], "any", false, false, false, 635), "all", [], "any", false, false, false, 635), ["page" => $context["page"]])), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                yield "</a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 638
            yield "        </ul>
    </nav>
    ";
        }
        // line 641
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
        // line 655
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["quota"] ?? null), "html", null, true);
        yield " produits actifs.</h5>
                <p class=\"text-muted\">Pour ajouter de nouveaux produits, passez à un plan supérieur.</p>
            </div>
            <div class=\"modal-footer justify-content-center\">
                <a href=\"";
        // line 659
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
        yield from [];
    }

    // line 739
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 740
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/fr.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // ========== Initialisation Select2 ==========
    // Select2 pour la catégorie
    if (document.getElementById('category')) {
        \$('#category').select2({
            theme: 'bootstrap-5',
            language: 'fr',
            placeholder: '📁 Sélectionnez une catégorie',
            allowClear: true,
            width: '100%'
        });
    }

    // Select2 pour l'unité
    if (document.getElementById('unit')) {
        \$('#unit').select2({
            theme: 'bootstrap-5',
            language: 'fr',
            placeholder: '⚖️ Sélectionnez une unité',
            allowClear: true,
            width: '100%'
        });
    }

    // Select2 pour la promotion (si présent)
    if (document.getElementById('promotion')) {
        \$('#promotion').select2({
            theme: 'bootstrap-5',
            language: 'fr',
            placeholder: '🎯 Sélectionnez une promotion',
            allowClear: true,
            width: '100%'
        });
    }

    // Nouveau produit avec vérification quota
    const newProductBtn = document.getElementById('newProductBtn');
    if (newProductBtn) {
        newProductBtn.addEventListener('click', function(e) {
            e.preventDefault();
            ";
        // line 784
        if ((($tmp = ($context["quotaReached"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 785
            yield "                new bootstrap.Modal(document.getElementById('quotaReachedModal')).show();
            ";
        } else {
            // line 787
            yield "                window.location.href = \"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_new");
            yield "\";
            ";
        }
        // line 789
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

    // Toggle extra filters visibility
    const toggleExtraBtn = document.getElementById('toggleExtraFiltersBtn');
    const extraFilters = document.getElementById('extraFilters');
    if (toggleExtraBtn && extraFilters) {
        // Vérifier si des filtres supplémentaires ont des valeurs
        const dosage = document.getElementById('dosage')?.value;
        const form = document.getElementById('form')?.value;
        const promotion = document.getElementById('promotion')?.value;
        const prescription = document.querySelector('[name=\"prescription_required\"]')?.value;
        
        // Si un filtre supplémentaire a une valeur, afficher la section
        if ((dosage && dosage !== '') || (form && form !== '') || (promotion && promotion !== '0') || (prescription && prescription !== '')) {
            extraFilters.style.display = 'block';
            toggleExtraBtn.innerHTML = '<i class=\"fas fa-times me-1\"></i> Masquer filtres';
        }

        toggleExtraBtn.addEventListener('click', function() {
            if (extraFilters.style.display === 'none' || extraFilters.style.display === '') {
                extraFilters.style.display = 'block';
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
        return array (  1298 => 789,  1292 => 787,  1288 => 785,  1286 => 784,  1239 => 740,  1232 => 739,  1148 => 659,  1141 => 655,  1125 => 641,  1120 => 638,  1109 => 635,  1104 => 634,  1100 => 633,  1096 => 631,  1094 => 630,  1089 => 627,  1076 => 620,  1069 => 615,  1067 => 614,  1059 => 610,  1050 => 605,  1048 => 604,  1037 => 596,  1033 => 594,  1029 => 592,  1022 => 591,  1016 => 590,  1013 => 589,  1011 => 588,  1002 => 584,  993 => 580,  987 => 576,  979 => 571,  973 => 567,  964 => 563,  960 => 562,  956 => 560,  953 => 559,  951 => 558,  943 => 553,  934 => 547,  928 => 543,  926 => 542,  922 => 540,  918 => 538,  912 => 536,  910 => 535,  903 => 531,  895 => 525,  889 => 521,  885 => 520,  881 => 519,  877 => 518,  873 => 517,  869 => 515,  867 => 514,  859 => 509,  855 => 508,  851 => 507,  847 => 506,  843 => 505,  839 => 504,  829 => 497,  821 => 492,  809 => 483,  804 => 481,  795 => 474,  791 => 472,  789 => 471,  784 => 469,  780 => 468,  774 => 464,  768 => 460,  762 => 457,  757 => 456,  755 => 455,  750 => 452,  745 => 451,  736 => 444,  728 => 439,  724 => 438,  714 => 430,  707 => 428,  701 => 426,  699 => 425,  694 => 424,  692 => 423,  688 => 422,  681 => 421,  677 => 420,  665 => 411,  655 => 404,  647 => 398,  645 => 397,  640 => 394,  633 => 392,  627 => 390,  625 => 389,  620 => 388,  618 => 387,  614 => 386,  607 => 385,  603 => 384,  591 => 375,  581 => 368,  573 => 362,  571 => 361,  564 => 357,  554 => 350,  546 => 344,  544 => 343,  534 => 335,  525 => 332,  518 => 331,  514 => 330,  504 => 322,  492 => 319,  487 => 318,  478 => 317,  471 => 316,  467 => 315,  455 => 306,  451 => 305,  435 => 292,  431 => 291,  419 => 282,  415 => 281,  411 => 280,  400 => 272,  379 => 254,  359 => 237,  352 => 233,  331 => 215,  317 => 204,  303 => 193,  289 => 182,  275 => 171,  261 => 160,  246 => 147,  236 => 140,  231 => 138,  225 => 134,  222 => 133,  205 => 117,  201 => 115,  199 => 114,  193 => 113,  189 => 112,  166 => 91,  159 => 90,  72 => 7,  65 => 6,  54 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/product/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\product\\index.html.twig");
    }
}
