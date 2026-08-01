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
class __TwigTemplate_7c47922e414884f46b7c83dfb2cb3da1 extends Template
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
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/product/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/product/index.html.twig"));

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

        yield "Gestion des Produits - HMA Market";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
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

/* ✅ Badges en bas de la carte */
.product-badges {
    display: flex;
    flex-wrap: wrap;
    gap: 4px;
    margin-bottom: 0.5rem;
}
.product-badges .badge {
    font-size: 9px;
    padding: 3px 6px;
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 104
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

        // line 105
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
        // line 126
        yield (((($tmp = (isset($context["quotaReached"]) || array_key_exists("quotaReached", $context) ? $context["quotaReached"] : (function () { throw new RuntimeError('Variable "quotaReached" does not exist.', 126, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-danger") : ("text-success"));
        yield "\">
                            ";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activeCount"]) || array_key_exists("activeCount", $context) ? $context["activeCount"] : (function () { throw new RuntimeError('Variable "activeCount" does not exist.', 127, $this->source); })()), "html", null, true);
        yield " / ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["quota"]) || array_key_exists("quota", $context) ? $context["quota"] : (function () { throw new RuntimeError('Variable "quota" does not exist.', 127, $this->source); })()), "html", null, true);
        yield "
                            ";
        // line 128
        if (((isset($context["quota"]) || array_key_exists("quota", $context) ? $context["quota"] : (function () { throw new RuntimeError('Variable "quota" does not exist.', 128, $this->source); })()) == "Illimité")) {
            // line 129
            yield "                                <i class=\"fas fa-infinity text-info ms-1\"></i>
                            ";
        }
        // line 131
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
        // line 147
        yield "    ";
        if ((($tmp = (isset($context["quotaReached"]) || array_key_exists("quotaReached", $context) ? $context["quotaReached"] : (function () { throw new RuntimeError('Variable "quotaReached" does not exist.', 147, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 148
            yield "    <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
        <div class=\"d-flex justify-content-between align-items-center\">
            <div>
                <i class=\"fas fa-exclamation-triangle me-2\"></i>
                <strong>Quota atteint !</strong> Vous avez utilisé vos ";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["quota"]) || array_key_exists("quota", $context) ? $context["quota"] : (function () { throw new RuntimeError('Variable "quota" does not exist.', 152, $this->source); })()), "html", null, true);
            yield " produits actifs.
            </div>
            <a href=\"";
            // line 154
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subscription_plans");
            yield "\" class=\"btn btn-warning btn-sm\">
                <i class=\"fas fa-arrow-up me-1\"></i> Voir les offres
            </a>
        </div>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    </div>
    ";
        }
        // line 161
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
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalFiltered"]) || array_key_exists("totalFiltered", $context) ? $context["totalFiltered"] : (function () { throw new RuntimeError('Variable "totalFiltered" does not exist.', 174, $this->source); })()), "html", null, true);
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
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activeFiltered"]) || array_key_exists("activeFiltered", $context) ? $context["activeFiltered"] : (function () { throw new RuntimeError('Variable "activeFiltered" does not exist.', 185, $this->source); })()), "html", null, true);
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
        // line 196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["inactiveFiltered"]) || array_key_exists("inactiveFiltered", $context) ? $context["inactiveFiltered"] : (function () { throw new RuntimeError('Variable "inactiveFiltered" does not exist.', 196, $this->source); })()), "html", null, true);
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
        // line 207
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["lowStockFiltered"]) || array_key_exists("lowStockFiltered", $context) ? $context["lowStockFiltered"] : (function () { throw new RuntimeError('Variable "lowStockFiltered" does not exist.', 207, $this->source); })()), "html", null, true);
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
        // line 218
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["perishableFiltered"]) || array_key_exists("perishableFiltered", $context) ? $context["perishableFiltered"] : (function () { throw new RuntimeError('Variable "perishableFiltered" does not exist.', 218, $this->source); })()), "html", null, true);
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
        // line 229
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nonPerishableFiltered"]) || array_key_exists("nonPerishableFiltered", $context) ? $context["nonPerishableFiltered"] : (function () { throw new RuntimeError('Variable "nonPerishableFiltered" does not exist.', 229, $this->source); })()), "html", null, true);
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
        // line 247
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subscriptionActiveFiltered"]) || array_key_exists("subscriptionActiveFiltered", $context) ? $context["subscriptionActiveFiltered"] : (function () { throw new RuntimeError('Variable "subscriptionActiveFiltered" does not exist.', 247, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                            <div class=\"text-end\">
                                <small class=\"text-secondary d-block\">Inactif</small>
                                <h3 class=\"mb-0\">";
        // line 251
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subscriptionInactiveFiltered"]) || array_key_exists("subscriptionInactiveFiltered", $context) ? $context["subscriptionInactiveFiltered"] : (function () { throw new RuntimeError('Variable "subscriptionInactiveFiltered" does not exist.', 251, $this->source); })()), "html", null, true);
        yield "</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 259
        yield "            ";
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 259, $this->source); })()) == "pharmacy")) {
            // line 260
            yield "            <div class=\"row mt-3 border-top pt-3\">
                <div class=\"col-md-6 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-success text-uppercase small fw-bold\">Visibles sur marketplace</span>
                                <h3 class=\"mb-0 text-success\">";
            // line 266
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["visibleFiltered"]) || array_key_exists("visibleFiltered", $context) ? $context["visibleFiltered"] : (function () { throw new RuntimeError('Variable "visibleFiltered" does not exist.', 266, $this->source); })()), "html", null, true);
            yield "</h3>
                            </div>
                            <i class=\"fas fa-eye fa-2x text-success opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-secondary text-uppercase small fw-bold\">Masqués sur marketplace</span>
                                <h3 class=\"mb-0 text-secondary\">";
            // line 277
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["hiddenFiltered"]) || array_key_exists("hiddenFiltered", $context) ? $context["hiddenFiltered"] : (function () { throw new RuntimeError('Variable "hiddenFiltered" does not exist.', 277, $this->source); })()), "html", null, true);
            yield "</h3>
                            </div>
                            <i class=\"fas fa-eye-slash fa-2x text-secondary opacity-50\"></i>
                        </div>
                    </div>
                </div>
            </div>
            ";
        }
        // line 285
        yield "        </div>
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
        // line 296
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
        // line 314
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 314, $this->source); })()), "html", null, true);
        yield "\">
                    </div>
                    <div class=\"col-md-4\">
                        <label class=\"form-label fw-semibold small\">
                            <i class=\"fas fa-toggle-on me-1\"></i> Statut
                        </label>
                        <select name=\"status\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"active\" ";
        // line 322
        yield ((((isset($context["selectedStatus"]) || array_key_exists("selectedStatus", $context) ? $context["selectedStatus"] : (function () { throw new RuntimeError('Variable "selectedStatus" does not exist.', 322, $this->source); })()) == "active")) ? ("selected") : (""));
        yield ">Actifs</option>
                            <option value=\"inactive\" ";
        // line 323
        yield ((((isset($context["selectedStatus"]) || array_key_exists("selectedStatus", $context) ? $context["selectedStatus"] : (function () { throw new RuntimeError('Variable "selectedStatus" does not exist.', 323, $this->source); })()) == "inactive")) ? ("selected") : (""));
        yield ">Inactifs</option>
                            <option value=\"low-stock\" ";
        // line 324
        yield ((((isset($context["selectedStatus"]) || array_key_exists("selectedStatus", $context) ? $context["selectedStatus"] : (function () { throw new RuntimeError('Variable "selectedStatus" does not exist.', 324, $this->source); })()) == "low-stock")) ? ("selected") : (""));
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
        // line 333
        yield ((((isset($context["selectedExpiryType"]) || array_key_exists("selectedExpiryType", $context) ? $context["selectedExpiryType"] : (function () { throw new RuntimeError('Variable "selectedExpiryType" does not exist.', 333, $this->source); })()) == "perishable")) ? ("selected") : (""));
        yield ">Périssables</option>
                            <option value=\"non-perishable\" ";
        // line 334
        yield ((((isset($context["selectedExpiryType"]) || array_key_exists("selectedExpiryType", $context) ? $context["selectedExpiryType"] : (function () { throw new RuntimeError('Variable "selectedExpiryType" does not exist.', 334, $this->source); })()) == "non-perishable")) ? ("selected") : (""));
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
        // line 347
        yield ((((isset($context["selectedSubscriptionStatus"]) || array_key_exists("selectedSubscriptionStatus", $context) ? $context["selectedSubscriptionStatus"] : (function () { throw new RuntimeError('Variable "selectedSubscriptionStatus" does not exist.', 347, $this->source); })()) == "active")) ? ("selected") : (""));
        yield ">Dans quota</option>
                            <option value=\"inactive\" ";
        // line 348
        yield ((((isset($context["selectedSubscriptionStatus"]) || array_key_exists("selectedSubscriptionStatus", $context) ? $context["selectedSubscriptionStatus"] : (function () { throw new RuntimeError('Variable "selectedSubscriptionStatus" does not exist.', 348, $this->source); })()) == "inactive")) ? ("selected") : (""));
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
        // line 357
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 357, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 358
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 358), "html", null, true);
            yield "\" ";
            yield ((((isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 358, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 358))) ? ("selected") : (""));
            yield ">
                                    ";
            // line 359
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, CoreExtension::getAttribute($this->env, $this->source, $context["category"], "level", [], "any", false, false, false, 359)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                yield "&nbsp;&nbsp;";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 360
            yield "                                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "level", [], "any", false, false, false, 360) > 0)) {
                yield "↳";
            }
            // line 361
            yield "                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 361), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "productCount", [], "any", false, false, false, 361), "html", null, true);
            yield ")
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 364
        yield "                        </select>
                    </div>
                    <div class=\"col-md-4\">
                        <label class=\"form-label fw-semibold small\">
                            <i class=\"fas fa-weight-hanging me-1\"></i> Unité
                        </label>
                        <select name=\"unit\" id=\"unit\" class=\"form-select\" style=\"width: 100%;\">
                            <option value=\"\">Toutes les unités</option>
                            ";
        // line 372
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["units"]) || array_key_exists("units", $context) ? $context["units"] : (function () { throw new RuntimeError('Variable "units" does not exist.', 372, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["unit"]) {
            // line 373
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["unit"], "html", null, true);
            yield "\" ";
            yield ((((isset($context["selectedUnit"]) || array_key_exists("selectedUnit", $context) ? $context["selectedUnit"] : (function () { throw new RuntimeError('Variable "selectedUnit" does not exist.', 373, $this->source); })()) == $context["unit"])) ? ("selected") : (""));
            yield ">
                                    ";
            // line 374
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["unit"], "html", null, true);
            yield "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['unit'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 377
        yield "                        </select>
                    </div>
                </div>

                <!-- ✅ Filtres supplémentaires avec visibilité pour pharmacies -->
                <div id=\"extraFilters\" style=\"display: none;\">
                    <hr class=\"my-4\">
                    
                    ";
        // line 385
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 385, $this->source); })()) == "restaurant")) {
            // line 386
            yield "                        <!-- RESTAURANT : 2 filtres -->
                        <div class=\"row g-3\">
                            <div class=\"col-12 col-md-6\">
                                <label class=\"form-label fw-semibold small\">
                                    <i class=\"fas fa-flask me-1\"></i> Dosage
                                </label>
                                <input type=\"text\" name=\"dosage\" id=\"dosage\" value=\"";
            // line 392
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dosage"]) || array_key_exists("dosage", $context) ? $context["dosage"] : (function () { throw new RuntimeError('Variable "dosage" does not exist.', 392, $this->source); })()), "html", null, true);
            yield "\" 
                                    class=\"form-control\" placeholder=\"Ex: 500mg\">
                            </div>
                            <div class=\"col-12 col-md-6\">
                                <label class=\"form-label fw-semibold small\">
                                    <i class=\"fas fa-pills me-1\"></i> Forme
                                </label>
                                <input type=\"text\" name=\"form\" id=\"form\" value=\"";
            // line 399
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 399, $this->source); })()), "html", null, true);
            yield "\" 
                                    class=\"form-control\" placeholder=\"Ex: comprimé\">
                            </div>
                        </div>
                    ";
        } elseif ((        // line 403
(isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 403, $this->source); })()) == "market")) {
            // line 404
            yield "                        <!-- MARKET : 3 filtres -->
                        <div class=\"row g-3\">
                            <div class=\"col-12 col-md-4\">
                                <label class=\"form-label fw-semibold small\">
                                    <i class=\"fas fa-flask me-1\"></i> Dosage
                                </label>
                                <input type=\"text\" name=\"dosage\" id=\"dosage\" value=\"";
            // line 410
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dosage"]) || array_key_exists("dosage", $context) ? $context["dosage"] : (function () { throw new RuntimeError('Variable "dosage" does not exist.', 410, $this->source); })()), "html", null, true);
            yield "\" 
                                    class=\"form-control\" placeholder=\"Ex: 500mg\">
                            </div>
                            <div class=\"col-12 col-md-4\">
                                <label class=\"form-label fw-semibold small\">
                                    <i class=\"fas fa-pills me-1\"></i> Forme
                                </label>
                                <input type=\"text\" name=\"form\" id=\"form\" value=\"";
            // line 417
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 417, $this->source); })()), "html", null, true);
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
            // line 426
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 426, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
                // line 427
                yield "                                        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 427), "html", null, true);
                yield "\" ";
                yield ((((isset($context["selectedPromotion"]) || array_key_exists("selectedPromotion", $context) ? $context["selectedPromotion"] : (function () { throw new RuntimeError('Variable "selectedPromotion" does not exist.', 427, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 427))) ? ("selected") : (""));
                yield ">
                                            ";
                // line 428
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "name", [], "any", false, false, false, 428), "html", null, true);
                yield "
                                            ";
                // line 429
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "discountPercentage", [], "any", false, false, false, 429)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 430
                    yield "                                                (-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "discountPercentage", [], "any", false, false, false, 430), "html", null, true);
                    yield "%)
                                            ";
                } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,                 // line 431
$context["promotion"], "discountAmount", [], "any", false, false, false, 431)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 432
                    yield "                                                (-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "discountAmount", [], "any", false, false, false, 432), 0, ",", " "), "html", null, true);
                    yield " FCFA)
                                            ";
                }
                // line 434
                yield "                                        </option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['promotion'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 436
            yield "                                </select>
                            </div>
                        </div>
                    ";
        } elseif ((        // line 439
(isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 439, $this->source); })()) == "pharmacy")) {
            // line 440
            yield "                        <!-- ✅ PHARMACY : 5 filtres (dont visibilité) -->
                        <div class=\"row g-3\">
                            <div class=\"col-12 col-md-3\">
                                <label class=\"form-label fw-semibold small\">
                                    <i class=\"fas fa-flask me-1\"></i> Dosage
                                </label>
                                <input type=\"text\" name=\"dosage\" id=\"dosage\" value=\"";
            // line 446
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dosage"]) || array_key_exists("dosage", $context) ? $context["dosage"] : (function () { throw new RuntimeError('Variable "dosage" does not exist.', 446, $this->source); })()), "html", null, true);
            yield "\" 
                                    class=\"form-control\" placeholder=\"Ex: 500mg\">
                            </div>
                            <div class=\"col-12 col-md-3\">
                                <label class=\"form-label fw-semibold small\">
                                    <i class=\"fas fa-pills me-1\"></i> Forme
                                </label>
                                <input type=\"text\" name=\"form\" id=\"form\" value=\"";
            // line 453
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 453, $this->source); })()), "html", null, true);
            yield "\" 
                                    class=\"form-control\" placeholder=\"Ex: comprimé\">
                            </div>
                            <div class=\"col-12 col-md-2\">
                                <label class=\"form-label fw-semibold small\">
                                    <i class=\"fas fa-prescription-bottle me-1\"></i> Prescription
                                </label>
                                <select name=\"prescription_required\" class=\"form-select\">
                                    <option value=\"\">Tous</option>
                                    <option value=\"1\" ";
            // line 462
            yield ((((isset($context["prescriptionRequired"]) || array_key_exists("prescriptionRequired", $context) ? $context["prescriptionRequired"] : (function () { throw new RuntimeError('Variable "prescriptionRequired" does not exist.', 462, $this->source); })()) == "1")) ? ("selected") : (""));
            yield ">Prescription obligatoire</option>
                                    <option value=\"0\" ";
            // line 463
            yield ((((isset($context["prescriptionRequired"]) || array_key_exists("prescriptionRequired", $context) ? $context["prescriptionRequired"] : (function () { throw new RuntimeError('Variable "prescriptionRequired" does not exist.', 463, $this->source); })()) == "0")) ? ("selected") : (""));
            yield ">Sans prescription</option>
                                </select>
                            </div>
                            <div class=\"col-12 col-md-2\">
                                <label class=\"form-label fw-semibold small\">
                                    <i class=\"fas fa-eye me-1\"></i> Visibilité
                                </label>
                                <select name=\"visibility\" class=\"form-select\">
                                    <option value=\"\">Tous</option>
                                    <option value=\"visible\" ";
            // line 472
            yield ((((isset($context["selectedVisibility"]) || array_key_exists("selectedVisibility", $context) ? $context["selectedVisibility"] : (function () { throw new RuntimeError('Variable "selectedVisibility" does not exist.', 472, $this->source); })()) == "visible")) ? ("selected") : (""));
            yield ">Visibles</option>
                                    <option value=\"hidden\" ";
            // line 473
            yield ((((isset($context["selectedVisibility"]) || array_key_exists("selectedVisibility", $context) ? $context["selectedVisibility"] : (function () { throw new RuntimeError('Variable "selectedVisibility" does not exist.', 473, $this->source); })()) == "hidden")) ? ("selected") : (""));
            yield ">Masqués</option>
                                </select>
                            </div>
                            <div class=\"col-12 col-md-2\">
                                <label class=\"form-label fw-semibold small\">
                                    <i class=\"fas fa-percent me-1\"></i> Promotion
                                </label>
                                <select name=\"promotion\" id=\"promotion\" class=\"form-select\" style=\"width: 100%;\">
                                    <option value=\"0\">🎯 Toutes les promotions</option>
                                    ";
            // line 482
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 482, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
                // line 483
                yield "                                        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 483), "html", null, true);
                yield "\" ";
                yield ((((isset($context["selectedPromotion"]) || array_key_exists("selectedPromotion", $context) ? $context["selectedPromotion"] : (function () { throw new RuntimeError('Variable "selectedPromotion" does not exist.', 483, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 483))) ? ("selected") : (""));
                yield ">
                                            ";
                // line 484
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "name", [], "any", false, false, false, 484), "html", null, true);
                yield "
                                            ";
                // line 485
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "discountPercentage", [], "any", false, false, false, 485)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 486
                    yield "                                                (-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "discountPercentage", [], "any", false, false, false, 486), "html", null, true);
                    yield "%)
                                            ";
                } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,                 // line 487
$context["promotion"], "discountAmount", [], "any", false, false, false, 487)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 488
                    yield "                                                (-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["promotion"], "discountAmount", [], "any", false, false, false, 488), 0, ",", " "), "html", null, true);
                    yield " FCFA)
                                            ";
                }
                // line 490
                yield "                                        </option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['promotion'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 492
            yield "                                </select>
                            </div>
                        </div>
                    ";
        }
        // line 496
        yield "                </div>
            </form>
        </div>
    </div>

    ";
        // line 502
        yield "    ";
        if ((((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 502, $this->source); })()) == "pharmacy") && ((isset($context["selectedVisibility"]) || array_key_exists("selectedVisibility", $context) ? $context["selectedVisibility"] : (function () { throw new RuntimeError('Variable "selectedVisibility" does not exist.', 502, $this->source); })()) != ""))) {
            // line 503
            yield "        <div class=\"alert alert-info mb-4\">
            <i class=\"fas fa-info-circle me-2\"></i>
            ";
            // line 505
            if (((isset($context["selectedVisibility"]) || array_key_exists("selectedVisibility", $context) ? $context["selectedVisibility"] : (function () { throw new RuntimeError('Variable "selectedVisibility" does not exist.', 505, $this->source); })()) == "visible")) {
                // line 506
                yield "                Affichage des produits <strong>visibles</strong> sur le marketplace.
            ";
            } else {
                // line 508
                yield "                Affichage des produits <strong>masqués</strong> sur le marketplace.
            ";
            }
            // line 510
            yield "        </div>
    ";
        }
        // line 512
        yield "
    <!-- Grille de produits -->
    <div class=\"row g-3\">
        ";
        // line 515
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 515, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 516
            yield "        <div class=\"col-xl-3 col-lg-4 col-md-6\">
            <div class=\"card product-card h-100 shadow-sm\">
                <div class=\"product-image-container\">
                    ";
            // line 519
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 519) && (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 519) != "default-product.png"))) {
                // line 520
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 520))), "html", null, true);
                yield "\" 
                             alt=\"";
                // line 521
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 521), "html", null, true);
                yield "\" 
                             class=\"card-img-top product-image\">
                    ";
            } else {
                // line 524
                yield "                        <div class=\"product-image-placeholder\">
                            <i class=\"fas fa-box fa-4x text-muted\"></i>
                        </div>
                    ";
            }
            // line 528
            yield "                </div>

                <div class=\"card-body d-flex flex-column\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <h5 class=\"card-title text-truncate mb-0\">
                            ";
            // line 533
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 533), "html", null, true);
            yield "
                            <small class=\"text-muted ms-1\">
                                <i class=\"fas fa-weight-hanging me-1\"></i>";
            // line 535
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "unit", [], "any", true, true, false, 535)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "unit", [], "any", false, false, false, 535), "pièce")) : ("pièce")), "html", null, true);
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
            // line 544
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 544)]), "html", null, true);
            yield "\">
                                        <i class=\"fas fa-eye me-2\"></i> Voir
                                    </a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item\" href=\"";
            // line 549
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 549)]), "html", null, true);
            yield "\">
                                        <i class=\"fas fa-edit me-2\"></i> Modifier
                                    </a>
                                </li>
                                <li>
                                    <button type=\"button\" 
                                            class=\"dropdown-item toggle-status-btn\"
                                            data-product-id=\"";
            // line 556
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 556), "html", null, true);
            yield "\"
                                            data-product-name=\"";
            // line 557
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 557), "html", null, true);
            yield "\"
                                            data-is-active=\"";
            // line 558
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "isActive", [], "any", false, false, false, 558)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("0"));
            yield "\"
                                            data-token=\"";
            // line 559
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle-status" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 559))), "html", null, true);
            yield "\">
                                        <i class=\"fas ";
            // line 560
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "isActive", [], "any", false, false, false, 560)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-toggle-on") : ("fa-toggle-off"));
            yield " me-2\"></i>
                                        ";
            // line 561
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "isActive", [], "any", false, false, false, 561)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
            yield "
                                    </button>
                                </li>
                                <li><hr class=\"dropdown-divider\"></li>
                                <li>
                                    ";
            // line 566
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 567
                yield "                                        <button type=\"button\" 
                                                class=\"dropdown-item text-danger delete-product-btn\"
                                                data-product-id=\"";
                // line 569
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 569), "html", null, true);
                yield "\"
                                                data-product-name=\"";
                // line 570
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 570), "html", null, true);
                yield "\"
                                                data-token=\"";
                // line 571
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 571))), "html", null, true);
                yield "\"
                                                ";
                // line 572
                if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "purchaseItems", [], "any", false, false, false, 572)) > 0) || (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockBatches", [], "any", false, false, false, 572)) > 0))) {
                    yield "disabled";
                }
                // line 573
                yield "                                                title=\"Supprimer\">
                                            <i class=\"fas fa-trash me-2\"></i> Supprimer
                                        </button>
                                    ";
            }
            // line 577
            yield "                                </li>
                            </ul>
                        </div>
                    </div>

                    <p class=\"text-muted small mb-2\">
                        <i class=\"fas fa-barcode me-1\"></i>";
            // line 583
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "barcode", [], "any", false, false, false, 583), "html", null, true);
            yield "
                    </p>
                    <p class=\"text-muted small mb-2\">
                        Catégorie :
                        ";
            // line 587
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 587)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 588
                yield "                            <i class=\"fas fa-tag me-1\"></i>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 588), "name", [], "any", false, false, false, 588), "html", null, true);
                yield "
                        ";
            } else {
                // line 590
                yield "                            <i class=\"fas fa-question-circle me-1\"></i>Non catégorisé
                        ";
            }
            // line 592
            yield "                    </p>

                    <!-- ✅ Badges sous la catégorie -->
                    <div class=\"product-badges\">
                        ";
            // line 596
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["product"], "subscriptionActive", [], "any", false, false, false, 596)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 597
                yield "                            <span class=\"badge bg-warning text-dark\">
                                <i class=\"fas fa-clock fa-xs me-1\"></i> Hors quota
                            </span>
                        ";
            } else {
                // line 601
                yield "                            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "isActive", [], "any", false, false, false, 601)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 602
                    yield "                                <span class=\"badge bg-success\">
                                    <i class=\"fas fa-check-circle fa-xs me-1\"></i> Actif
                                </span>
                            ";
                } else {
                    // line 606
                    yield "                                <span class=\"badge bg-danger\">
                                    <i class=\"fas fa-pause-circle fa-xs me-1\"></i> Inactif
                                </span>
                            ";
                }
                // line 610
                yield "                        ";
            }
            // line 611
            yield "                        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "subscriptionActive", [], "any", false, false, false, 611)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 612
                yield "                            <span class=\"badge bg-info\">
                                <i class=\"fas fa-database fa-xs me-1\"></i> Dans quota
                            </span>
                        ";
            }
            // line 616
            yield "                        ";
            // line 617
            yield "                        ";
            if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 617, $this->source); })()) == "pharmacy")) {
                // line 618
                yield "                            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "companyPublic", [], "any", false, false, false, 618)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 619
                    yield "                                <span class=\"badge bg-primary\">
                                    <i class=\"fas fa-eye fa-xs me-1\"></i> Visible
                                </span>
                            ";
                } else {
                    // line 623
                    yield "                                <span class=\"badge bg-secondary\">
                                    <i class=\"fas fa-eye-slash fa-xs me-1\"></i> Masqué
                                </span>
                            ";
                }
                // line 627
                yield "                        ";
            }
            // line 628
            yield "                        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "hasExpiryDate", [], "any", false, false, false, 628)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 629
                yield "                            <span class=\"badge bg-warning text-dark\">
                                <i class=\"fas fa-calendar-alt fa-xs me-1\"></i> Périssable
                            </span>
                        ";
            }
            // line 633
            yield "                    </div>

                    ";
            // line 635
            if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 635, $this->source); })()) != "restaurant")) {
                // line 636
                yield "                    <div class=\"row g-0 mb-2\">
                        <div class=\"col-6\">
                            <small class=\"text-muted d-block\">Prix vente</small>
                            <span class=\"fw-bold text-success\">
                                ";
                // line 640
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "salePrice", [], "any", false, false, false, 640), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "hmaService", [], "any", false, false, false, 640)), "html", null, true);
                yield "
                            </span>
                        </div>
                        <div class=\"col-6 text-end\">
                            <small class=\"text-muted d-block\">Prix achat</small>
                            <span class=\"fw-bold text-primary\">
                                ";
                // line 646
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "purchasePrice", [], "any", false, false, false, 646), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "hmaService", [], "any", false, false, false, 646)), "html", null, true);
                yield "
                            </span>
                        </div>
                    </div>

                    ";
                // line 651
                $context["margin"] = (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "salePrice", [], "any", false, false, false, 651) - CoreExtension::getAttribute($this->env, $this->source, $context["product"], "purchasePrice", [], "any", false, false, false, 651));
                // line 652
                yield "                    ";
                $context["marginPercentage"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "purchasePrice", [], "any", false, false, false, 652) > 0)) ? (Twig\Extension\CoreExtension::round((((isset($context["margin"]) || array_key_exists("margin", $context) ? $context["margin"] : (function () { throw new RuntimeError('Variable "margin" does not exist.', 652, $this->source); })()) / CoreExtension::getAttribute($this->env, $this->source, $context["product"], "purchasePrice", [], "any", false, false, false, 652)) * 100), 1)) : (0));
                // line 653
                yield "                    <div class=\"d-flex justify-content-between align-items-center mb-2 small\">
                        <span class=\"text-muted\">Marge</span>
                        <span class=\"badge ";
                // line 655
                yield ((((isset($context["marginPercentage"]) || array_key_exists("marginPercentage", $context) ? $context["marginPercentage"] : (function () { throw new RuntimeError('Variable "marginPercentage" does not exist.', 655, $this->source); })()) >= 50)) ? ("bg-success") : (((((isset($context["marginPercentage"]) || array_key_exists("marginPercentage", $context) ? $context["marginPercentage"] : (function () { throw new RuntimeError('Variable "marginPercentage" does not exist.', 655, $this->source); })()) >= 20)) ? ("bg-warning text-dark") : ("bg-danger"))));
                yield "\">
                            ";
                // line 656
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency((isset($context["margin"]) || array_key_exists("margin", $context) ? $context["margin"] : (function () { throw new RuntimeError('Variable "margin" does not exist.', 656, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "hmaService", [], "any", false, false, false, 656)), "html", null, true);
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["marginPercentage"]) || array_key_exists("marginPercentage", $context) ? $context["marginPercentage"] : (function () { throw new RuntimeError('Variable "marginPercentage" does not exist.', 656, $this->source); })()), "html", null, true);
                yield "%)
                        </span>
                    </div>
                    ";
            } else {
                // line 660
                yield "                    <div class=\"row g-0 mb-2\">
                        <div class=\"col-12\">
                            <small class=\"text-muted d-block\">Prix d'achat</small>
                            <span class=\"fw-bold text-primary\">
                                ";
                // line 664
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "purchasePrice", [], "any", false, false, false, 664), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "hmaService", [], "any", false, false, false, 664)), "html", null, true);
                yield "
                            </span>
                        </div>
                    </div>
                    ";
            }
            // line 669
            yield "
                    <div class=\"row g-0 mb-2\">
                        <div class=\"col-6\">
                            <small class=\"text-muted d-block\">Stock</small>
                            <span class=\"fw-bold\">";
            // line 673
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stockQuantity", [], "any", false, false, false, 673), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "unit", [], "any", true, true, false, 673)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "unit", [], "any", false, false, false, 673), "pièce")) : ("pièce")), "html", null, true);
            yield "</span>
                        </div>
                        <div class=\"col-6 text-end\">
                            <small class=\"text-muted d-block\">Stock min</small>
                            <span class=\"fw-bold\">";
            // line 677
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "minQuantity", [], "any", false, false, false, 677), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "unit", [], "any", true, true, false, 677)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "unit", [], "any", false, false, false, 677), "pièce")) : ("pièce")), "html", null, true);
            yield "</span>
                        </div>
                    </div>

                    ";
            // line 681
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "dosage", [], "any", false, false, false, 681) || CoreExtension::getAttribute($this->env, $this->source, $context["product"], "form", [], "any", false, false, false, 681))) {
                // line 682
                yield "                        <div class=\"small text-muted mb-2\">
                            ";
                // line 683
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "dosage", [], "any", false, false, false, 683)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<span class=\"me-2\"><i class=\"fas fa-flask me-1\"></i>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "dosage", [], "any", false, false, false, 683), "html", null, true);
                    yield "</span>";
                }
                // line 684
                yield "                            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "form", [], "any", false, false, false, 684)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<span><i class=\"fas fa-pills me-1\"></i>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "form", [], "any", false, false, false, 684), "html", null, true);
                    yield "</span>";
                }
                // line 685
                yield "                        </div>
                    ";
            }
            // line 687
            yield "
                    <div class=\"d-flex gap-1 mt-auto\">
                        <a href=\"";
            // line 689
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_index", ["productId" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 689)]), "html", null, true);
            yield "\" 
                            class=\"btn btn-sm btn-outline-info flex-fill\" title=\"Lots de stock\">
                            <i class=\"fas fa-boxes\"></i> Lots
                        </a>
                        <a href=\"#\" 
                           class=\"btn btn-sm btn-outline-primary flex-fill\" title=\"Mouvements de stock\">
                            <i class=\"fas fa-exchange-alt\"></i> Mouvements
                        </a>
                        ";
            // line 697
            if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 697, $this->source); })()) != "restaurant")) {
                // line 698
                yield "                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_promotions", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 698)]), "html", null, true);
                yield "\" 
                            class=\"btn btn-sm btn-outline-warning flex-fill\" title=\"Promotions\">
                                <i class=\"fas fa-tags\"></i> Promos
                            </a>
                        ";
            }
            // line 703
            yield "                    </div>
                </div>
            </div>
        </div>
        ";
            $context['_iterated'] = true;
        }
        // line 707
        if (!$context['_iterated']) {
            // line 708
            yield "        <div class=\"col-12\">
            <div class=\"card shadow\">
                <div class=\"card-body text-center py-5\">
                    <i class=\"fas fa-box-open fa-4x text-muted mb-3\"></i>
                    <h4 class=\"text-muted\">Aucun produit trouvé</h4>
                    <a href=\"";
            // line 713
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
        // line 720
        yield "    </div>

    <!-- Pagination -->
    ";
        // line 723
        if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 723, $this->source); })()) > 1)) {
            // line 724
            yield "    <nav aria-label=\"Pagination\" class=\"mt-4\">
        <ul class=\"pagination justify-content-center\">
            ";
            // line 726
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 726, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 727
                yield "                <li class=\"page-item ";
                yield ((($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 727, $this->source); })()))) ? ("active") : (""));
                yield "\">
                    <a class=\"page-link\" href=\"";
                // line 728
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 728, $this->source); })()), "request", [], "any", false, false, false, 728), "query", [], "any", false, false, false, 728), "all", [], "any", false, false, false, 728), ["page" => $context["page"]])), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                yield "</a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 731
            yield "        </ul>
    </nav>
    ";
        }
        // line 734
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
        // line 748
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["quota"]) || array_key_exists("quota", $context) ? $context["quota"] : (function () { throw new RuntimeError('Variable "quota" does not exist.', 748, $this->source); })()), "html", null, true);
        yield " produits actifs.</h5>
                <p class=\"text-muted\">Pour ajouter de nouveaux produits, passez à un plan supérieur.</p>
            </div>
            <div class=\"modal-footer justify-content-center\">
                <a href=\"";
        // line 752
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

    // line 832
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

        // line 833
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
        // line 877
        if ((($tmp = (isset($context["quotaReached"]) || array_key_exists("quotaReached", $context) ? $context["quotaReached"] : (function () { throw new RuntimeError('Variable "quotaReached" does not exist.', 877, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 878
            yield "                new bootstrap.Modal(document.getElementById('quotaReachedModal')).show();
            ";
        } else {
            // line 880
            yield "                window.location.href = \"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_new");
            yield "\";
            ";
        }
        // line 882
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
        const visibility = document.querySelector('[name=\"visibility\"]')?.value;
        
        // Si un filtre supplémentaire a une valeur, afficher la section
        if ((dosage && dosage !== '') || (form && form !== '') || (promotion && promotion !== '0') || 
            (prescription && prescription !== '') || (visibility && visibility !== '')) {
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
        return array (  1494 => 882,  1488 => 880,  1484 => 878,  1482 => 877,  1435 => 833,  1422 => 832,  1332 => 752,  1325 => 748,  1309 => 734,  1304 => 731,  1293 => 728,  1288 => 727,  1284 => 726,  1280 => 724,  1278 => 723,  1273 => 720,  1260 => 713,  1253 => 708,  1251 => 707,  1243 => 703,  1234 => 698,  1232 => 697,  1221 => 689,  1217 => 687,  1213 => 685,  1206 => 684,  1200 => 683,  1197 => 682,  1195 => 681,  1186 => 677,  1177 => 673,  1171 => 669,  1163 => 664,  1157 => 660,  1148 => 656,  1144 => 655,  1140 => 653,  1137 => 652,  1135 => 651,  1127 => 646,  1118 => 640,  1112 => 636,  1110 => 635,  1106 => 633,  1100 => 629,  1097 => 628,  1094 => 627,  1088 => 623,  1082 => 619,  1079 => 618,  1076 => 617,  1074 => 616,  1068 => 612,  1065 => 611,  1062 => 610,  1056 => 606,  1050 => 602,  1047 => 601,  1041 => 597,  1039 => 596,  1033 => 592,  1029 => 590,  1023 => 588,  1021 => 587,  1014 => 583,  1006 => 577,  1000 => 573,  996 => 572,  992 => 571,  988 => 570,  984 => 569,  980 => 567,  978 => 566,  970 => 561,  966 => 560,  962 => 559,  958 => 558,  954 => 557,  950 => 556,  940 => 549,  932 => 544,  920 => 535,  915 => 533,  908 => 528,  902 => 524,  896 => 521,  891 => 520,  889 => 519,  884 => 516,  879 => 515,  874 => 512,  870 => 510,  866 => 508,  862 => 506,  860 => 505,  856 => 503,  853 => 502,  846 => 496,  840 => 492,  833 => 490,  827 => 488,  825 => 487,  820 => 486,  818 => 485,  814 => 484,  807 => 483,  803 => 482,  791 => 473,  787 => 472,  775 => 463,  771 => 462,  759 => 453,  749 => 446,  741 => 440,  739 => 439,  734 => 436,  727 => 434,  721 => 432,  719 => 431,  714 => 430,  712 => 429,  708 => 428,  701 => 427,  697 => 426,  685 => 417,  675 => 410,  667 => 404,  665 => 403,  658 => 399,  648 => 392,  640 => 386,  638 => 385,  628 => 377,  619 => 374,  612 => 373,  608 => 372,  598 => 364,  586 => 361,  581 => 360,  572 => 359,  565 => 358,  561 => 357,  549 => 348,  545 => 347,  529 => 334,  525 => 333,  513 => 324,  509 => 323,  505 => 322,  494 => 314,  473 => 296,  460 => 285,  449 => 277,  435 => 266,  427 => 260,  424 => 259,  414 => 251,  407 => 247,  386 => 229,  372 => 218,  358 => 207,  344 => 196,  330 => 185,  316 => 174,  301 => 161,  291 => 154,  286 => 152,  280 => 148,  277 => 147,  260 => 131,  256 => 129,  254 => 128,  248 => 127,  244 => 126,  221 => 105,  208 => 104,  102 => 8,  89 => 7,  66 => 5,  43 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/product/index.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}Gestion des Produits - HMA Market{% endblock %}

{% block stylesheets %}
{{ parent() }}
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

/* ✅ Badges en bas de la carte */
.product-badges {
    display: flex;
    flex-wrap: wrap;
    gap: 4px;
    margin-bottom: 0.5rem;
}
.product-badges .badge {
    font-size: 9px;
    padding: 3px 6px;
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
{% endblock %}

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

            {# ✅ Statistiques de visibilité (uniquement pour les pharmacies) #}
            {% if companyType == 'pharmacy' %}
            <div class=\"row mt-3 border-top pt-3\">
                <div class=\"col-md-6 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-success text-uppercase small fw-bold\">Visibles sur marketplace</span>
                                <h3 class=\"mb-0 text-success\">{{ visibleFiltered }}</h3>
                            </div>
                            <i class=\"fas fa-eye fa-2x text-success opacity-50\"></i>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 mb-3\">
                    <div class=\"stat-item p-3 bg-light rounded\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <span class=\"text-secondary text-uppercase small fw-bold\">Masqués sur marketplace</span>
                                <h3 class=\"mb-0 text-secondary\">{{ hiddenFiltered }}</h3>
                            </div>
                            <i class=\"fas fa-eye-slash fa-2x text-secondary opacity-50\"></i>
                        </div>
                    </div>
                </div>
            </div>
            {% endif %}
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
                <a href=\"{{ path('app_admin_product_index') }}\" class=\"btn btn-outline-secondary btn-sm\">
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
                               value=\"{{ search }}\">
                    </div>
                    <div class=\"col-md-4\">
                        <label class=\"form-label fw-semibold small\">
                            <i class=\"fas fa-toggle-on me-1\"></i> Statut
                        </label>
                        <select name=\"status\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"active\" {{ selectedStatus == 'active' ? 'selected' : '' }}>Actifs</option>
                            <option value=\"inactive\" {{ selectedStatus == 'inactive' ? 'selected' : '' }}>Inactifs</option>
                            <option value=\"low-stock\" {{ selectedStatus == 'low-stock' ? 'selected' : '' }}>Stock faible</option>
                        </select>
                    </div>
                    <div class=\"col-md-4\">
                        <label class=\"form-label fw-semibold small\">
                            <i class=\"fas fa-calendar-alt me-1\"></i> Type
                        </label>
                        <select name=\"expiry_type\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"perishable\" {{ selectedExpiryType == 'perishable' ? 'selected' : '' }}>Périssables</option>
                            <option value=\"non-perishable\" {{ selectedExpiryType == 'non-perishable' ? 'selected' : '' }}>Non périssables</option>
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
                            <option value=\"active\" {{ selectedSubscriptionStatus == 'active' ? 'selected' : '' }}>Dans quota</option>
                            <option value=\"inactive\" {{ selectedSubscriptionStatus == 'inactive' ? 'selected' : '' }}>Hors quota</option>
                        </select>
                    </div>
                    <div class=\"col-md-4\">
                        <label class=\"form-label fw-semibold small\">
                            <i class=\"fas fa-tag me-1\"></i> Catégorie
                        </label>
                        <select name=\"category\" id=\"category\" class=\"form-select\" style=\"width: 100%;\">
                            <option value=\"0\">Toutes les catégories</option>
                            {% for category in categories %}
                                <option value=\"{{ category.id }}\" {{ selectedCategory == category.id ? 'selected' : '' }}>
                                    {% for i in 0..category.level %}&nbsp;&nbsp;{% endfor %}
                                    {% if category.level > 0 %}↳{% endif %}
                                    {{ category.name }} ({{ category.productCount }})
                                </option>
                            {% endfor %}
                        </select>
                    </div>
                    <div class=\"col-md-4\">
                        <label class=\"form-label fw-semibold small\">
                            <i class=\"fas fa-weight-hanging me-1\"></i> Unité
                        </label>
                        <select name=\"unit\" id=\"unit\" class=\"form-select\" style=\"width: 100%;\">
                            <option value=\"\">Toutes les unités</option>
                            {% for unit in units %}
                                <option value=\"{{ unit }}\" {{ selectedUnit == unit ? 'selected' : '' }}>
                                    {{ unit }}
                                </option>
                            {% endfor %}
                        </select>
                    </div>
                </div>

                <!-- ✅ Filtres supplémentaires avec visibilité pour pharmacies -->
                <div id=\"extraFilters\" style=\"display: none;\">
                    <hr class=\"my-4\">
                    
                    {% if companyType == 'restaurant' %}
                        <!-- RESTAURANT : 2 filtres -->
                        <div class=\"row g-3\">
                            <div class=\"col-12 col-md-6\">
                                <label class=\"form-label fw-semibold small\">
                                    <i class=\"fas fa-flask me-1\"></i> Dosage
                                </label>
                                <input type=\"text\" name=\"dosage\" id=\"dosage\" value=\"{{ dosage }}\" 
                                    class=\"form-control\" placeholder=\"Ex: 500mg\">
                            </div>
                            <div class=\"col-12 col-md-6\">
                                <label class=\"form-label fw-semibold small\">
                                    <i class=\"fas fa-pills me-1\"></i> Forme
                                </label>
                                <input type=\"text\" name=\"form\" id=\"form\" value=\"{{ form }}\" 
                                    class=\"form-control\" placeholder=\"Ex: comprimé\">
                            </div>
                        </div>
                    {% elseif companyType == 'market' %}
                        <!-- MARKET : 3 filtres -->
                        <div class=\"row g-3\">
                            <div class=\"col-12 col-md-4\">
                                <label class=\"form-label fw-semibold small\">
                                    <i class=\"fas fa-flask me-1\"></i> Dosage
                                </label>
                                <input type=\"text\" name=\"dosage\" id=\"dosage\" value=\"{{ dosage }}\" 
                                    class=\"form-control\" placeholder=\"Ex: 500mg\">
                            </div>
                            <div class=\"col-12 col-md-4\">
                                <label class=\"form-label fw-semibold small\">
                                    <i class=\"fas fa-pills me-1\"></i> Forme
                                </label>
                                <input type=\"text\" name=\"form\" id=\"form\" value=\"{{ form }}\" 
                                    class=\"form-control\" placeholder=\"Ex: comprimé\">
                            </div>
                            <div class=\"col-12 col-md-4\">
                                <label class=\"form-label fw-semibold small\">
                                    <i class=\"fas fa-percent me-1\"></i> Promotion
                                </label>
                                <select name=\"promotion\" id=\"promotion\" class=\"form-select\" style=\"width: 100%;\">
                                    <option value=\"0\">🎯 Toutes les promotions</option>
                                    {% for promotion in promotions %}
                                        <option value=\"{{ promotion.id }}\" {{ selectedPromotion == promotion.id ? 'selected' : '' }}>
                                            {{ promotion.name }}
                                            {% if promotion.discountPercentage %}
                                                (-{{ promotion.discountPercentage }}%)
                                            {% elseif promotion.discountAmount %}
                                                (-{{ promotion.discountAmount|number_format(0, ',', ' ') }} FCFA)
                                            {% endif %}
                                        </option>
                                    {% endfor %}
                                </select>
                            </div>
                        </div>
                    {% elseif companyType == 'pharmacy' %}
                        <!-- ✅ PHARMACY : 5 filtres (dont visibilité) -->
                        <div class=\"row g-3\">
                            <div class=\"col-12 col-md-3\">
                                <label class=\"form-label fw-semibold small\">
                                    <i class=\"fas fa-flask me-1\"></i> Dosage
                                </label>
                                <input type=\"text\" name=\"dosage\" id=\"dosage\" value=\"{{ dosage }}\" 
                                    class=\"form-control\" placeholder=\"Ex: 500mg\">
                            </div>
                            <div class=\"col-12 col-md-3\">
                                <label class=\"form-label fw-semibold small\">
                                    <i class=\"fas fa-pills me-1\"></i> Forme
                                </label>
                                <input type=\"text\" name=\"form\" id=\"form\" value=\"{{ form }}\" 
                                    class=\"form-control\" placeholder=\"Ex: comprimé\">
                            </div>
                            <div class=\"col-12 col-md-2\">
                                <label class=\"form-label fw-semibold small\">
                                    <i class=\"fas fa-prescription-bottle me-1\"></i> Prescription
                                </label>
                                <select name=\"prescription_required\" class=\"form-select\">
                                    <option value=\"\">Tous</option>
                                    <option value=\"1\" {{ prescriptionRequired == '1' ? 'selected' : '' }}>Prescription obligatoire</option>
                                    <option value=\"0\" {{ prescriptionRequired == '0' ? 'selected' : '' }}>Sans prescription</option>
                                </select>
                            </div>
                            <div class=\"col-12 col-md-2\">
                                <label class=\"form-label fw-semibold small\">
                                    <i class=\"fas fa-eye me-1\"></i> Visibilité
                                </label>
                                <select name=\"visibility\" class=\"form-select\">
                                    <option value=\"\">Tous</option>
                                    <option value=\"visible\" {{ selectedVisibility == 'visible' ? 'selected' : '' }}>Visibles</option>
                                    <option value=\"hidden\" {{ selectedVisibility == 'hidden' ? 'selected' : '' }}>Masqués</option>
                                </select>
                            </div>
                            <div class=\"col-12 col-md-2\">
                                <label class=\"form-label fw-semibold small\">
                                    <i class=\"fas fa-percent me-1\"></i> Promotion
                                </label>
                                <select name=\"promotion\" id=\"promotion\" class=\"form-select\" style=\"width: 100%;\">
                                    <option value=\"0\">🎯 Toutes les promotions</option>
                                    {% for promotion in promotions %}
                                        <option value=\"{{ promotion.id }}\" {{ selectedPromotion == promotion.id ? 'selected' : '' }}>
                                            {{ promotion.name }}
                                            {% if promotion.discountPercentage %}
                                                (-{{ promotion.discountPercentage }}%)
                                            {% elseif promotion.discountAmount %}
                                                (-{{ promotion.discountAmount|number_format(0, ',', ' ') }} FCFA)
                                            {% endif %}
                                        </option>
                                    {% endfor %}
                                </select>
                            </div>
                        </div>
                    {% endif %}
                </div>
            </form>
        </div>
    </div>

    {# Message filtre visibilité (pour les pharmacies) #}
    {% if companyType == 'pharmacy' and selectedVisibility != '' %}
        <div class=\"alert alert-info mb-4\">
            <i class=\"fas fa-info-circle me-2\"></i>
            {% if selectedVisibility == 'visible' %}
                Affichage des produits <strong>visibles</strong> sur le marketplace.
            {% else %}
                Affichage des produits <strong>masqués</strong> sur le marketplace.
            {% endif %}
        </div>
    {% endif %}

    <!-- Grille de produits -->
    <div class=\"row g-3\">
        {% for product in products %}
        <div class=\"col-xl-3 col-lg-4 col-md-6\">
            <div class=\"card product-card h-100 shadow-sm\">
                <div class=\"product-image-container\">
                    {% if product.image and product.image != 'default-product.png' %}
                        <img src=\"{{ asset('uploads/products/' ~ product.image) }}\" 
                             alt=\"{{ product.name }}\" 
                             class=\"card-img-top product-image\">
                    {% else %}
                        <div class=\"product-image-placeholder\">
                            <i class=\"fas fa-box fa-4x text-muted\"></i>
                        </div>
                    {% endif %}
                </div>

                <div class=\"card-body d-flex flex-column\">
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

                    <!-- ✅ Badges sous la catégorie -->
                    <div class=\"product-badges\">
                        {% if not product.subscriptionActive %}
                            <span class=\"badge bg-warning text-dark\">
                                <i class=\"fas fa-clock fa-xs me-1\"></i> Hors quota
                            </span>
                        {% else %}
                            {% if product.isActive %}
                                <span class=\"badge bg-success\">
                                    <i class=\"fas fa-check-circle fa-xs me-1\"></i> Actif
                                </span>
                            {% else %}
                                <span class=\"badge bg-danger\">
                                    <i class=\"fas fa-pause-circle fa-xs me-1\"></i> Inactif
                                </span>
                            {% endif %}
                        {% endif %}
                        {% if product.subscriptionActive %}
                            <span class=\"badge bg-info\">
                                <i class=\"fas fa-database fa-xs me-1\"></i> Dans quota
                            </span>
                        {% endif %}
                        {# ✅ Badge de visibilité (pour les pharmacies) #}
                        {% if companyType == 'pharmacy' %}
                            {% if product.companyPublic %}
                                <span class=\"badge bg-primary\">
                                    <i class=\"fas fa-eye fa-xs me-1\"></i> Visible
                                </span>
                            {% else %}
                                <span class=\"badge bg-secondary\">
                                    <i class=\"fas fa-eye-slash fa-xs me-1\"></i> Masqué
                                </span>
                            {% endif %}
                        {% endif %}
                        {% if product.hasExpiryDate %}
                            <span class=\"badge bg-warning text-dark\">
                                <i class=\"fas fa-calendar-alt fa-xs me-1\"></i> Périssable
                            </span>
                        {% endif %}
                    </div>

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

                    <div class=\"d-flex gap-1 mt-auto\">
                        <a href=\"{{ path('app_admin_stock_batch_index', {'productId': product.id}) }}\" 
                            class=\"btn btn-sm btn-outline-info flex-fill\" title=\"Lots de stock\">
                            <i class=\"fas fa-boxes\"></i> Lots
                        </a>
                        <a href=\"#\" 
                           class=\"btn btn-sm btn-outline-primary flex-fill\" title=\"Mouvements de stock\">
                            <i class=\"fas fa-exchange-alt\"></i> Mouvements
                        </a>
                        {% if companyType != 'restaurant' %}
                            <a href=\"{{ path('app_admin_product_promotions', {'id': product.id}) }}\" 
                            class=\"btn btn-sm btn-outline-warning flex-fill\" title=\"Promotions\">
                                <i class=\"fas fa-tags\"></i> Promos
                            </a>
                        {% endif %}
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

{% block javascripts %}
{{ parent() }}
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

    // Toggle extra filters visibility
    const toggleExtraBtn = document.getElementById('toggleExtraFiltersBtn');
    const extraFilters = document.getElementById('extraFilters');
    if (toggleExtraBtn && extraFilters) {
        // Vérifier si des filtres supplémentaires ont des valeurs
        const dosage = document.getElementById('dosage')?.value;
        const form = document.getElementById('form')?.value;
        const promotion = document.getElementById('promotion')?.value;
        const prescription = document.querySelector('[name=\"prescription_required\"]')?.value;
        const visibility = document.querySelector('[name=\"visibility\"]')?.value;
        
        // Si un filtre supplémentaire a une valeur, afficher la section
        if ((dosage && dosage !== '') || (form && form !== '') || (promotion && promotion !== '0') || 
            (prescription && prescription !== '') || (visibility && visibility !== '')) {
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
{% endblock %}", "admin/product/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\product\\index.html.twig");
    }
}
