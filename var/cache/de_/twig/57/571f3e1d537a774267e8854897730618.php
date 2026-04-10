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

/* admin/stock_batch/index.html.twig */
class __TwigTemplate_48ccbbf4d2dc31b862e2be45b94dc0af extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/stock_batch/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/stock_batch/index.html.twig"));

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

        yield "Gestion des lots - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4), "html", null, true);
        
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
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_index");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-boxes me-1\"></i> Produits
                        </a>
                    </li>
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19)]), "html", null, true);
        yield "\" class=\"text-decoration-none\">
                            ";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20)), "truncate", [30], "method", false, false, false, 20), "html", null, true);
        yield "
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">Gestion des lots</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0\">
                <i class=\"fas fa-boxes me-2 text-primary\"></i>
                Lots de stock - ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 28, $this->source); })()), "name", [], "any", false, false, false, 28), "html", null, true);
        yield "
            </h1>
            <p class=\"text-muted mt-2\">
                <i class=\"fas fa-info-circle me-1\"></i>
                Les lots sont créés automatiquement lors des achats. Vous pouvez uniquement modifier l'emplacement et le statut.
            </p>
        </div>
        <div>
            <a href=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_cart");
        yield "\" class=\"btn btn-success me-2\">
                <i class=\"fas fa-cart-plus me-2\"></i> Nouvel achat
            </a>
            <a href=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39)]), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary me-2\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour produit
            </a>
            <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#printOptionsModal\">
                <i class=\"fas fa-print me-2\"></i> Imprimer sélection
            </button>
        </div>
    </div>

    <!-- Section produit et catégorie (2 colonnes) -->
    <div class=\"row mb-4\">
        <!-- Colonne gauche : Catégorie -->
        <div class=\"col-md-4\">
            <div class=\"card border-0 shadow-sm h-100\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0\"><i class=\"fas fa-folder me-2 text-warning\"></i> Catégorie</h5>
                </div>
                <div class=\"card-body\">
                    ";
        // line 57
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 57, $this->source); })()), "category", [], "any", false, false, false, 57)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 58
            yield "                        <div class=\"text-center mb-3\">
                            <div class=\"bg-light rounded-circle p-3 d-inline-block\">
                                <i class=\"fas fa-tag fa-3x text-primary\"></i>
                            </div>
                        </div>
                        <h4 class=\"text-center mb-3\">";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 63, $this->source); })()), "category", [], "any", false, false, false, 63), "name", [], "any", false, false, false, 63), "html", null, true);
            yield "</h4>
                        ";
            // line 64
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 64, $this->source); })()), "category", [], "any", false, false, false, 64), "parent", [], "any", false, false, false, 64)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 65
                yield "                            <p class=\"text-muted text-center\">
                                <i class=\"fas fa-level-up-alt me-1\"></i>
                                Catégorie parente : ";
                // line 67
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 67, $this->source); })()), "category", [], "any", false, false, false, 67), "parent", [], "any", false, false, false, 67), "name", [], "any", false, false, false, 67), "html", null, true);
                yield "
                            </p>
                        ";
            }
            // line 70
            yield "                        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 70, $this->source); })()), "category", [], "any", false, false, false, 70), "description", [], "any", false, false, false, 70)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 71
                yield "                            <hr>
                            <p class=\"small text-muted mb-0\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                ";
                // line 74
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 74, $this->source); })()), "category", [], "any", false, false, false, 74), "description", [], "any", false, false, false, 74)), "truncate", [100], "method", false, false, false, 74), "html", null, true);
                yield "
                            </p>
                        ";
            }
            // line 77
            yield "                    ";
        } else {
            // line 78
            yield "                        <div class=\"text-center text-muted py-4\">
                            <i class=\"fas fa-folder-open fa-3x mb-3 opacity-50\"></i>
                            <p class=\"mb-0\">Aucune catégorie assignée</p>
                        </div>
                    ";
        }
        // line 83
        yield "                </div>
            </div>
        </div>

        <!-- Colonne droite : Informations produit -->
        <div class=\"col-md-8\">
            <div class=\"card border-0 shadow-sm h-100\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0\"><i class=\"fas fa-box me-2 text-success\"></i> Informations produit</h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"mb-3\">
                                <label class=\"text-muted small fw-bold\">Code-barres</label>
                                <div class=\"fw-bold\">";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 98, $this->source); })()), "barcode", [], "any", false, false, false, 98), "html", null, true);
        yield "</div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"text-muted small fw-bold\">Prix d'achat</label>
                                <div class=\"fw-bold text-primary\">";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 102, $this->source); })()), "purchasePrice", [], "any", false, false, false, 102), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 102, $this->source); })()), "hmaService", [], "any", false, false, false, 102)), "html", null, true);
        yield "</div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"text-muted small fw-bold\">Prix de vente</label>
                                <div class=\"fw-bold text-success\">";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 106, $this->source); })()), "salePrice", [], "any", false, false, false, 106), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 106, $this->source); })()), "hmaService", [], "any", false, false, false, 106)), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"mb-3\">
                                <label class=\"text-muted small fw-bold\">Stock total</label>
                                <div class=\"fw-bold\">";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_quantity", [], "any", true, true, false, 112)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 112, $this->source); })()), "total_quantity", [], "any", false, false, false, 112), 0)) : (0)), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 112)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 112, $this->source); })()), "unit", [], "any", false, false, false, 112), "pièce")) : ("pièce")), "html", null, true);
        yield "</div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"text-muted small fw-bold\">Type</label>
                                <div>
                                    ";
        // line 117
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 117, $this->source); })()), "hasExpiryDate", [], "any", false, false, false, 117)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 118
            yield "                                        <span class=\"badge bg-warning text-dark\">
                                            <i class=\"fas fa-calendar-alt me-1\"></i> Périssable
                                        </span>
                                    ";
        } else {
            // line 122
            yield "                                        <span class=\"badge bg-secondary\">
                                            <i class=\"fas fa-infinity me-1\"></i> Non périssable
                                        </span>
                                    ";
        }
        // line 126
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Statistiques des lots -->
    <div class=\"row mb-4\">
        <div class=\"col-md-3\">
            <div class=\"card border-0 bg-primary bg-opacity-10 shadow-sm\">
                <div class=\"card-body text-center\">
                    <i class=\"fas fa-database fa-2x text-white mb-2\"></i>
                    <h3 class=\"mb-0 text-white\">";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_batches", [], "any", true, true, false, 141)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 141, $this->source); })()), "total_batches", [], "any", false, false, false, 141), 0)) : (0)), "html", null, true);
        yield "</h3>
                    <small class=\"text-white-50\">Total lots</small>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card border-0 bg-success bg-opacity-10 shadow-sm\">
                <div class=\"card-body text-center\">
                    <i class=\"fas fa-play-circle fa-2x text-white mb-2\"></i>
                    <h3 class=\"mb-0 text-white\">";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "active_batches", [], "any", true, true, false, 150)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 150, $this->source); })()), "active_batches", [], "any", false, false, false, 150), 0)) : (0)), "html", null, true);
        yield "</h3>
                    <small class=\"text-white-50\">Lots actifs</small>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card border-0 bg-danger bg-opacity-10 shadow-sm\">
                <div class=\"card-body text-center\">
                    <i class=\"fas fa-calendar-times fa-2x text-white mb-2\"></i>
                    <h3 class=\"mb-0 text-white\">";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "expired_batches", [], "any", true, true, false, 159)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 159, $this->source); })()), "expired_batches", [], "any", false, false, false, 159), 0)) : (0)), "html", null, true);
        yield "</h3>
                    <small class=\"text-white-50\">Lots expirés</small>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card border-0 bg-warning bg-opacity-10 shadow-sm\">
                <div class=\"card-body text-center\">
                    <i class=\"fas fa-clock fa-2x text-white mb-2\"></i>
                    <h3 class=\"mb-0 text-white\">";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "expiring_soon_batches", [], "any", true, true, false, 168)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 168, $this->source); })()), "expiring_soon_batches", [], "any", false, false, false, 168), 0)) : (0)), "html", null, true);
        yield "</h3>
                    <small class=\"text-white-50\">Expiration < 30j</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Filtres -->
    <div class=\"card border-0 shadow-sm mb-4\">
        <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0\"><i class=\"fas fa-filter me-2 text-primary\"></i> Filtres</h5>
            <div class=\"d-flex gap-2\">
                <button type=\"button\" class=\"btn btn-outline-secondary btn-sm\" id=\"resetFiltersBtn\">
                    <i class=\"fas fa-undo me-1\"></i> Effacer
                </button>
                <button type=\"submit\" form=\"filter-form\" class=\"btn btn-primary btn-sm\">
                    <i class=\"fas fa-search me-1\"></i> Filtrer
                </button>
            </div>
        </div>
        <div class=\"card-body\">
            <form method=\"get\" id=\"filter-form\">
                <!-- Première ligne : 5 colonnes -->
                <div class=\"row g-3\">
                    <div class=\"col-md-3\">
                        <label class=\"form-label fw-bold\">Recherche</label>
                        <input type=\"text\" name=\"search\" class=\"form-control\" 
                               placeholder=\"N° lot...\" value=\"";
        // line 195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "search", [], "any", true, true, false, 195)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 195, $this->source); })()), "search", [], "any", false, false, false, 195), "")) : ("")), "html", null, true);
        yield "\">
                    </div>
                    <div class=\"col-md-2\">
                        <label class=\"form-label fw-bold\">Statut</label>
                        <select name=\"status\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"active\" ";
        // line 201
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", true, true, false, 201)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 201, $this->source); })()), "status", [], "any", false, false, false, 201), "")) : ("")) == "active")) ? ("selected") : (""));
        yield ">Actifs</option>
                            <option value=\"inactive\" ";
        // line 202
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", true, true, false, 202)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 202, $this->source); })()), "status", [], "any", false, false, false, 202), "")) : ("")) == "inactive")) ? ("selected") : (""));
        yield ">Inactifs</option>
                        </select>
                    </div>
                    <div class=\"col-md-2\">
                        <label class=\"form-label fw-bold\">Expiration</label>
                        <select name=\"expiry_status\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"expired\" ";
        // line 209
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "expiry_status", [], "any", true, true, false, 209)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 209, $this->source); })()), "expiry_status", [], "any", false, false, false, 209), "")) : ("")) == "expired")) ? ("selected") : (""));
        yield ">Expirés</option>
                            <option value=\"expiring_soon\" ";
        // line 210
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "expiry_status", [], "any", true, true, false, 210)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 210, $this->source); })()), "expiry_status", [], "any", false, false, false, 210), "")) : ("")) == "expiring_soon")) ? ("selected") : (""));
        yield ">Expire bientôt</option>
                            <option value=\"not_expiring\" ";
        // line 211
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "expiry_status", [], "any", true, true, false, 211)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 211, $this->source); })()), "expiry_status", [], "any", false, false, false, 211), "")) : ("")) == "not_expiring")) ? ("selected") : (""));
        yield ">Non expirés</option>
                        </select>
                    </div>
                    <div class=\"col-md-2\">
                        <label class=\"form-label fw-bold\">Emplacement</label>
                        <select name=\"location\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            ";
        // line 218
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(((array_key_exists("locations", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["locations"]) || array_key_exists("locations", $context) ? $context["locations"] : (function () { throw new RuntimeError('Variable "locations" does not exist.', 218, $this->source); })()), [])) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["loc"]) {
            // line 219
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["loc"], "html", null, true);
            yield "\" ";
            yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "location", [], "any", true, true, false, 219)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 219, $this->source); })()), "location", [], "any", false, false, false, 219), "")) : ("")) == $context["loc"])) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["loc"], "html", null, true);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['loc'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 221
        yield "                        </select>
                    </div>
                    <div class=\"col-md-3\">
                        <label class=\"form-label fw-bold\">Stock faible</label>
                        <select name=\"low_stock\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"yes\" ";
        // line 227
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "low_stock", [], "any", true, true, false, 227)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 227, $this->source); })()), "low_stock", [], "any", false, false, false, 227), "")) : ("")) == "yes")) ? ("selected") : (""));
        yield ">≤ 10 unités</option>
                        </select>
                    </div>
                </div>

                <!-- Deuxième ligne : 4 colonnes -->
                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-3\">
                        <label class=\"form-label fw-bold\">Expiration du</label>
                        <input type=\"date\" name=\"date_from\" class=\"form-control\" value=\"";
        // line 236
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", true, true, false, 236)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 236, $this->source); })()), "date_from", [], "any", false, false, false, 236), "")) : ("")), "html", null, true);
        yield "\">
                    </div>
                    <div class=\"col-md-3\">
                        <label class=\"form-label fw-bold\">Expiration au</label>
                        <input type=\"date\" name=\"date_to\" class=\"form-control\" value=\"";
        // line 240
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", true, true, false, 240)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 240, $this->source); })()), "date_to", [], "any", false, false, false, 240), "")) : ("")), "html", null, true);
        yield "\">
                    </div>
                    <div class=\"col-md-3\">
                        <label class=\"form-label fw-bold\">Trier par</label>
                        <select name=\"sort\" class=\"form-select\">
                            <option value=\"batch_number\" ";
        // line 245
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 245)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 245, $this->source); })()), "sort", [], "any", false, false, false, 245), "expiry_date")) : ("expiry_date")) == "batch_number")) ? ("selected") : (""));
        yield ">N° lot</option>
                            <option value=\"expiry_date\" ";
        // line 246
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 246)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 246, $this->source); })()), "sort", [], "any", false, false, false, 246), "expiry_date")) : ("expiry_date")) == "expiry_date")) ? ("selected") : (""));
        yield ">Date expiration</option>
                            <option value=\"current_quantity\" ";
        // line 247
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 247)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 247, $this->source); })()), "sort", [], "any", false, false, false, 247), "expiry_date")) : ("expiry_date")) == "current_quantity")) ? ("selected") : (""));
        yield ">Quantité</option>
                            <option value=\"created_at\" ";
        // line 248
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 248)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 248, $this->source); })()), "sort", [], "any", false, false, false, 248), "expiry_date")) : ("expiry_date")) == "created_at")) ? ("selected") : (""));
        yield ">Date création</option>
                            <option value=\"location\" ";
        // line 249
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 249)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 249, $this->source); })()), "sort", [], "any", false, false, false, 249), "expiry_date")) : ("expiry_date")) == "location")) ? ("selected") : (""));
        yield ">Emplacement</option>
                        </select>
                    </div>
                    <div class=\"col-md-3\">
                        <label class=\"form-label fw-bold\">Ordre</label>
                        <select name=\"direction\" class=\"form-select\">
                            <option value=\"asc\" ";
        // line 255
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "direction", [], "any", true, true, false, 255)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 255, $this->source); })()), "direction", [], "any", false, false, false, 255), "asc")) : ("asc")) == "asc")) ? ("selected") : (""));
        yield ">Croissant</option>
                            <option value=\"desc\" ";
        // line 256
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "direction", [], "any", true, true, false, 256)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 256, $this->source); })()), "direction", [], "any", false, false, false, 256), "asc")) : ("asc")) == "desc")) ? ("selected") : (""));
        yield ">Décroissant</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Tableau des lots avec cases à cocher -->
    <div class=\"card border-0 shadow-sm\">
        <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0\"><i class=\"fas fa-list me-2\"></i> Liste des lots</h5>
            <div class=\"d-flex gap-2 align-items-center\">
                <span class=\"badge bg-secondary\">";
        // line 269
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["batches"]) || array_key_exists("batches", $context) ? $context["batches"] : (function () { throw new RuntimeError('Variable "batches" does not exist.', 269, $this->source); })())), "html", null, true);
        yield " lot(s)</span>
                <button type=\"button\" class=\"btn btn-sm btn-outline-primary\" id=\"selectAllBtn\">
                    <i class=\"fas fa-check-double me-1\"></i> Tout sélectionner
                </button>
                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\" id=\"deselectAllBtn\">
                    <i class=\"fas fa-times me-1\"></i> Désélectionner
                </button>
            </div>
        </div>
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover align-middle mb-0\">
                    <thead class=\"table-light\">
                        <tr>
                            <th style=\"width: 40px;\">
                                <input type=\"checkbox\" id=\"select-all-checkbox\" class=\"form-check-input\">
                            </th>
                            <th>N° lot</th>
                            <th>Emplacement</th>
                            <th>Quantité</th>
                            <th>Prix unitaire</th>
                            <th>Fabriqué le</th>
                            <th>Expire le</th>
                            <th>Statut</th>
                            <th class=\"text-center\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 297
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["batches"]) || array_key_exists("batches", $context) ? $context["batches"] : (function () { throw new RuntimeError('Variable "batches" does not exist.', 297, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["batch"]) {
            // line 298
            yield "                            <tr class=\"
                                ";
            // line 299
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 299) && CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 299)) && (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 299) < $this->extensions['Twig\Extension\CoreExtension']->convertDate()))) {
                yield "table-danger
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 300
$context["batch"], "currentQuantity", [], "any", false, false, false, 300) <= 10)) {
                yield "table-warning
                                ";
            }
            // line 302
            yield "                            \">
                                <td>
                                    <input type=\"checkbox\" class=\"form-check-input batch-checkbox\" value=\"";
            // line 304
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 304), "html", null, true);
            yield "\" data-batch-number=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "batchNumber", [], "any", false, false, false, 304), "html", null, true);
            yield "\">
                                </td>
                                <td>
                                    <strong>";
            // line 307
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "batchNumber", [], "any", false, false, false, 307), "html", null, true);
            yield "</strong>
                                    ";
            // line 308
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "purchaseItem", [], "any", false, false, false, 308)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 309
                yield "                                        <br>
                                        <small class=\"text-muted\">
                                            <i class=\"fas fa-receipt me-1\"></i>
                                            Achat #";
                // line 312
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "purchaseItem", [], "any", false, false, false, 312), "purchase", [], "any", false, false, false, 312), "id", [], "any", false, false, false, 312), "html", null, true);
                yield "
                                        </small>
                                    ";
            }
            // line 315
            yield "                                </td>
                                <td>
                                    ";
            // line 317
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "location", [], "any", false, false, false, 317)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 318
                yield "                                        <span class=\"badge bg-info text-dark\">
                                            <i class=\"fas fa-map-marker-alt me-1\"></i> ";
                // line 319
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "location", [], "any", false, false, false, 319), "html", null, true);
                yield "
                                        </span>
                                    ";
            } else {
                // line 322
                yield "                                        <span class=\"text-muted\">—</span>
                                    ";
            }
            // line 324
            yield "                                </td>
                                <td>
                                    <div>
                                        <span class=\"fw-bold\">";
            // line 327
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 327), "html", null, true);
            yield "</span>
                                        <small class=\"text-muted\">/ ";
            // line 328
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "initialQuantity", [], "any", false, false, false, 328), "html", null, true);
            yield "</small>
                                        <div class=\"progress mt-1\" style=\"height: 4px; width: 80px;\">
                                            ";
            // line 330
            $context["percentage"] = Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 330) / CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "initialQuantity", [], "any", false, false, false, 330)) * 100));
            // line 331
            yield "                                            <div class=\"progress-bar 
                                                ";
            // line 332
            if (((isset($context["percentage"]) || array_key_exists("percentage", $context) ? $context["percentage"] : (function () { throw new RuntimeError('Variable "percentage" does not exist.', 332, $this->source); })()) <= 10)) {
                yield "bg-danger
                                                ";
            } elseif ((            // line 333
(isset($context["percentage"]) || array_key_exists("percentage", $context) ? $context["percentage"] : (function () { throw new RuntimeError('Variable "percentage" does not exist.', 333, $this->source); })()) <= 30)) {
                yield "bg-warning
                                                ";
            } else {
                // line 334
                yield "bg-success
                                                ";
            }
            // line 335
            yield "\" 
                                                style=\"width: ";
            // line 336
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["percentage"]) || array_key_exists("percentage", $context) ? $context["percentage"] : (function () { throw new RuntimeError('Variable "percentage" does not exist.', 336, $this->source); })()), "html", null, true);
            yield "%\"></div>
                                        </div>
                                        ";
            // line 338
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 338) <= 10)) {
                // line 339
                yield "                                            <br>
                                            <span class=\"badge bg-warning text-dark mt-1\">Stock faible</span>
                                        ";
            }
            // line 342
            yield "                                    </div>
                                </td>
                                <td>";
            // line 344
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "unitPrice", [], "any", false, false, false, 344), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "hmaService", [], "any", false, false, false, 344)), "html", null, true);
            yield "</td>
                                <td>";
            // line 345
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "manufacturingDate", [], "any", false, false, false, 345)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "manufacturingDate", [], "any", false, false, false, 345), "d/m/Y"), "html", null, true)) : ("—"));
            yield "</td>
                                <td>
                                    ";
            // line 347
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 347)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 348
                yield "                                        <div>
                                            <span class=\"text-dark fw-bold\">
                                                ";
                // line 350
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 350), "d/m/Y"), "html", null, true);
                yield "
                                            </span>
                                            ";
                // line 352
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 352) < $this->extensions['Twig\Extension\CoreExtension']->convertDate())) {
                    // line 353
                    yield "                                                <br><span class=\"badge bg-danger mt-1\">Expiré</span>
                                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 354
$context["batch"], "expiryDate", [], "any", false, false, false, 354) < $this->extensions['Twig\Extension\CoreExtension']->convertDate("+30 days"))) {
                    // line 355
                    yield "                                                <br><span class=\"badge bg-warning text-dark mt-1\">Bientôt</span>
                                            ";
                }
                // line 357
                yield "                                        </div>
                                    ";
            } else {
                // line 359
                yield "                                        <span class=\"text-muted\">—</span>
                                    ";
            }
            // line 361
            yield "                                </td>
                                <td>
                                    <span class=\"badge ";
            // line 363
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 363)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-secondary"));
            yield "\">
                                        ";
            // line 364
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 364)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Inactif"));
            yield "
                                    </span>
                                </td>
                                <td class=\"text-center\">
                                    <div class=\"btn-group\" role=\"group\">
                                        <a href=\"";
            // line 369
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_print", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 369)]), "html", null, true);
            yield "\" 
                                           class=\"btn btn-sm btn-outline-secondary\" 
                                           title=\"Imprimer l'étiquette\" target=\"_blank\">
                                            <i class=\"fas fa-print\"></i>
                                        </a>
                                        <a href=\"";
            // line 374
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 374)]), "html", null, true);
            yield "\" 
                                           class=\"btn btn-sm btn-outline-primary\" title=\"Voir détails\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                        <a href=\"";
            // line 378
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 378)]), "html", null, true);
            yield "\" 
                                           class=\"btn btn-sm btn-outline-warning\" title=\"Modifier emplacement\">
                                            <i class=\"fas fa-map-marker-alt\"></i>
                                        </a>
                                        <button type=\"button\" 
                                                class=\"btn btn-sm btn-outline-info toggle-batch-btn\"
                                                data-batch-id=\"";
            // line 384
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 384), "html", null, true);
            yield "\"
                                                data-is-active=\"";
            // line 385
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 385)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("0"));
            yield "\"
                                                data-batch-number=\"";
            // line 386
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "batchNumber", [], "any", false, false, false, 386), "html", null, true);
            yield "\"
                                                data-token=\"";
            // line 387
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle-batch" . CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 387))), "html", null, true);
            yield "\"
                                                title=\"";
            // line 388
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 388)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
            yield "\">
                                            <i class=\"fas ";
            // line 389
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 389)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-toggle-on") : ("fa-toggle-off"));
            yield "\"></i>
                                        </button>
                                        ";
            // line 391
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "stockMovements", [], "any", false, false, false, 391)) == 0))) {
                // line 392
                yield "                                            <button type=\"button\" 
                                                    class=\"btn btn-sm btn-outline-danger delete-batch-btn\"
                                                    data-batch-id=\"";
                // line 394
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 394), "html", null, true);
                yield "\"
                                                    data-batch-number=\"";
                // line 395
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "batchNumber", [], "any", false, false, false, 395), "html", null, true);
                yield "\"
                                                    data-token=\"";
                // line 396
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete-batch" . CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 396))), "html", null, true);
                yield "\"
                                                    title=\"Supprimer\">
                                                <i class=\"fas fa-trash\"></i>
                                            </button>
                                        ";
            }
            // line 401
            yield "                                    </div>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 404
        if (!$context['_iterated']) {
            // line 405
            yield "                            <tr>
                                <td colspan=\"9\" class=\"text-center py-5\">
                                    <i class=\"fas fa-box-open fa-3x text-muted mb-3\"></i>
                                    <p class=\"text-muted mb-0\">Aucun lot trouvé pour ce produit</p>
                                    <a href=\"";
            // line 409
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_purchase_new", ["productId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 409, $this->source); })()), "id", [], "any", false, false, false, 409)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-primary mt-3\">
                                        <i class=\"fas fa-cart-plus me-1\"></i> Créer un achat
                                    </a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['batch'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 415
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modale impression -->
<div class=\"modal fade\" id=\"printOptionsModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-primary text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-print me-2\"></i> Options d'impression
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"alert alert-info\">
                    <i class=\"fas fa-info-circle me-2\"></i>
                    <span id=\"selectedCount\">0</span> lot(s) sélectionné(s) dans le tableau
                </div>
                <div class=\"d-grid gap-2\">
                    <button type=\"button\" class=\"btn btn-primary\" id=\"printSelectedBtn\">
                        <i class=\"fas fa-print me-2\"></i> Imprimer la sélection
                    </button>
                    <button type=\"button\" class=\"btn btn-outline-primary\" id=\"printAllBtn\">
                        <i class=\"fas fa-print me-2\"></i> Imprimer tous les lots
                    </button>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
            </div>
        </div>
    </div>
</div>

<!-- Modales pour actions -->
<div class=\"modal fade\" id=\"toggleBatchModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">Confirmation</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p id=\"toggleBatchMessage\"></p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"toggleBatchForm\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" id=\"toggleBatchToken\">
                    <button type=\"submit\" class=\"btn\" id=\"toggleBatchBtn\"></button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"deleteBatchModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Supprimer le lot
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p id=\"deleteBatchMessage\"></p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"deleteBatchForm\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteBatchToken\">
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

    // line 499
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

        // line 500
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // ========== GESTION DES FILTRES ==========
    // Bouton Effacer
    const resetFiltersBtn = document.getElementById('resetFiltersBtn');
    if (resetFiltersBtn) {
        resetFiltersBtn.addEventListener('click', function() {
            window.location.href = \"";
        // line 508
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_index", ["productId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 508, $this->source); })()), "id", [], "any", false, false, false, 508)]), "html", null, true);
        yield "\";
        });
    }

    // Auto-submit filters on change
    const filterFields = ['status', 'expiry_status', 'location', 'low_stock', 'sort', 'direction'];
    filterFields.forEach(function(fieldName) {
        var el = document.querySelector('[name=\"' + fieldName + '\"]');
        if (el) {
            el.addEventListener('change', function() {
                var form = document.getElementById('filter-form');
                if (form) form.submit();
            });
        }
    });

    // Auto-submit on date fields change
    var dateFields = ['date_from', 'date_to'];
    dateFields.forEach(function(fieldName) {
        var el = document.querySelector('[name=\"' + fieldName + '\"]');
        if (el) {
            el.addEventListener('change', function() {
                var form = document.getElementById('filter-form');
                if (form) form.submit();
            });
        }
    });

    // Search input with debounce
    var searchInput = document.querySelector('input[name=\"search\"]');
    if (searchInput) {
        var timeout = null;
        searchInput.addEventListener('input', function() {
            clearTimeout(timeout);
            timeout = setTimeout(function() {
                var form = document.getElementById('filter-form');
                if (form) form.submit();
            }, 500);
        });
    }

    // ========== SÉLECTION DES LOTS ==========
    var selectAllCheckbox = document.getElementById('select-all-checkbox');
    var batchCheckboxes = document.querySelectorAll('.batch-checkbox');
    var selectedCountSpan = document.getElementById('selectedCount');

    function updateSelectedCount() {
        var selected = document.querySelectorAll('.batch-checkbox:checked').length;
        if (selectedCountSpan) {
            selectedCountSpan.textContent = selected;
        }
    }

    // Sélectionner/désélectionner tout
    if (selectAllCheckbox) {
        selectAllCheckbox.addEventListener('change', function() {
            batchCheckboxes.forEach(function(cb) {
                cb.checked = selectAllCheckbox.checked;
            });
            updateSelectedCount();
        });
    }

    // Bouton Tout sélectionner
    var selectAllBtn = document.getElementById('selectAllBtn');
    if (selectAllBtn) {
        selectAllBtn.addEventListener('click', function() {
            batchCheckboxes.forEach(function(cb) {
                cb.checked = true;
            });
            if (selectAllCheckbox) selectAllCheckbox.checked = true;
            updateSelectedCount();
        });
    }

    // Bouton Désélectionner
    var deselectAllBtn = document.getElementById('deselectAllBtn');
    if (deselectAllBtn) {
        deselectAllBtn.addEventListener('click', function() {
            batchCheckboxes.forEach(function(cb) {
                cb.checked = false;
            });
            if (selectAllCheckbox) selectAllCheckbox.checked = false;
            updateSelectedCount();
        });
    }

    // Mettre à jour le compteur quand une case change
    batchCheckboxes.forEach(function(cb) {
        cb.addEventListener('change', function() {
            updateSelectedCount();
            if (selectAllCheckbox) {
                var allChecked = batchCheckboxes.length === document.querySelectorAll('.batch-checkbox:checked').length;
                selectAllCheckbox.checked = allChecked;
            }
        });
    });

    updateSelectedCount();

    // ========== IMPRESSION ==========
    var printSelectedBtn = document.getElementById('printSelectedBtn');
    var printAllBtn = document.getElementById('printAllBtn');

    if (printSelectedBtn) {
        printSelectedBtn.addEventListener('click', function() {
            var selected = [];
            document.querySelectorAll('.batch-checkbox:checked').forEach(function(cb) {
                selected.push(cb.value);
            });
            if (selected.length === 0) {
                alert('Veuillez sélectionner au moins un lot.');
                return;
            }
            window.open('/admin/stock-batch/print-multiple?ids=' + selected.join(','), '_blank');
            bootstrap.Modal.getInstance(document.getElementById('printOptionsModal')).hide();
        });
    }

    if (printAllBtn) {
        printAllBtn.addEventListener('click', function() {
            var allIds = [];
            document.querySelectorAll('.batch-checkbox').forEach(function(cb) {
                allIds.push(cb.value);
            });
            if (allIds.length === 0) {
                alert('Aucun lot à imprimer.');
                return;
            }
            window.open('/admin/stock-batch/print-multiple?ids=' + allIds.join(','), '_blank');
            bootstrap.Modal.getInstance(document.getElementById('printOptionsModal')).hide();
        });
    }

    // ========== TOGGLE STATUT ==========
    var toggleModalElement = document.getElementById('toggleBatchModal');
    var toggleModal = toggleModalElement ? new bootstrap.Modal(toggleModalElement) : null;

    document.querySelectorAll('.toggle-batch-btn').forEach(function(btn) {
        btn.addEventListener('click', function() {
            var batchId = this.dataset.batchId;
            var isActive = this.dataset.isActive === '1';
            var token = this.dataset.token;
            var batchNumber = this.dataset.batchNumber;

            var message = document.getElementById('toggleBatchMessage');
            var form = document.getElementById('toggleBatchForm');
            var tokenInput = document.getElementById('toggleBatchToken');
            var submitBtn = document.getElementById('toggleBatchBtn');

            if (message) {
                message.textContent = 'Êtes-vous sûr de vouloir ' + (isActive ? 'désactiver' : 'activer') + ' le lot \"' + batchNumber + '\" ?';
            }
            if (form) form.action = '/admin/stock-batch/' + batchId + '/toggle';
            if (tokenInput) tokenInput.value = token;
            if (submitBtn) {
                submitBtn.className = isActive ? 'btn btn-danger' : 'btn btn-success';
                submitBtn.textContent = isActive ? 'Désactiver' : 'Activer';
            }
            if (toggleModal) toggleModal.show();
        });
    });

    // ========== SUPPRESSION ==========
    var deleteModalElement = document.getElementById('deleteBatchModal');
    var deleteModal = deleteModalElement ? new bootstrap.Modal(deleteModalElement) : null;

    document.querySelectorAll('.delete-batch-btn:not([disabled])').forEach(function(btn) {
        btn.addEventListener('click', function() {
            var batchId = this.dataset.batchId;
            var batchNumber = this.dataset.batchNumber;
            var token = this.dataset.token;

            var message = document.getElementById('deleteBatchMessage');
            var form = document.getElementById('deleteBatchForm');
            var tokenInput = document.getElementById('deleteBatchToken');

            if (message) {
                message.innerHTML = '<div class=\"alert alert-warning\">⚠️ Cette action est irréversible.</div>' +
                    '<p>Supprimer le lot <strong>' + batchNumber + '</strong> ?</p>' +
                    '<p class=\"text-danger mb-0\"><small>Cette suppression n\\'est possible que si aucun mouvement de stock n\\'est associé.</small></p>';
            }
            if (form) form.action = '/admin/stock-batch/' + batchId + '/delete';
            if (tokenInput) tokenInput.value = token;
            if (deleteModal) deleteModal.show();
        });
    });
});
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 699
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

        // line 700
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
.table-hover tbody tr:hover {
    background-color: rgba(102, 126, 234, 0.05);
    cursor: pointer;
}
.progress {
    border-radius: 10px;
    overflow: hidden;
}
.card {
    transition: transform 0.2s, box-shadow 0.2s;
}
.card:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 20px rgba(0,0,0,0.1) !important;
}
.badge {
    font-weight: 500;
}
.btn-group .btn {
    padding: 0.25rem 0.5rem;
}
.table td {
    vertical-align: middle;
}
@media (max-width: 768px) {
    .btn-group {
        flex-direction: column;
    }
    .btn-group .btn {
        margin: 1px 0;
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
        return "admin/stock_batch/index.html.twig";
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
        return array (  1138 => 700,  1125 => 699,  924 => 508,  913 => 500,  900 => 499,  807 => 415,  795 => 409,  789 => 405,  787 => 404,  780 => 401,  772 => 396,  768 => 395,  764 => 394,  760 => 392,  758 => 391,  753 => 389,  749 => 388,  745 => 387,  741 => 386,  737 => 385,  733 => 384,  724 => 378,  717 => 374,  709 => 369,  701 => 364,  697 => 363,  693 => 361,  689 => 359,  685 => 357,  681 => 355,  679 => 354,  676 => 353,  674 => 352,  669 => 350,  665 => 348,  663 => 347,  658 => 345,  654 => 344,  650 => 342,  645 => 339,  643 => 338,  638 => 336,  635 => 335,  631 => 334,  626 => 333,  622 => 332,  619 => 331,  617 => 330,  612 => 328,  608 => 327,  603 => 324,  599 => 322,  593 => 319,  590 => 318,  588 => 317,  584 => 315,  578 => 312,  573 => 309,  571 => 308,  567 => 307,  559 => 304,  555 => 302,  550 => 300,  546 => 299,  543 => 298,  538 => 297,  507 => 269,  491 => 256,  487 => 255,  478 => 249,  474 => 248,  470 => 247,  466 => 246,  462 => 245,  454 => 240,  447 => 236,  435 => 227,  427 => 221,  414 => 219,  410 => 218,  400 => 211,  396 => 210,  392 => 209,  382 => 202,  378 => 201,  369 => 195,  339 => 168,  327 => 159,  315 => 150,  303 => 141,  286 => 126,  280 => 122,  274 => 118,  272 => 117,  262 => 112,  253 => 106,  246 => 102,  239 => 98,  222 => 83,  215 => 78,  212 => 77,  206 => 74,  201 => 71,  198 => 70,  192 => 67,  188 => 65,  186 => 64,  182 => 63,  175 => 58,  173 => 57,  152 => 39,  146 => 36,  135 => 28,  124 => 20,  120 => 19,  112 => 14,  103 => 7,  90 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/stock_batch/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Gestion des lots - {{ product.name }}{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
    <!-- En-tête -->
    <div class=\"d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('app_admin_product_index') }}\" class=\"text-decoration-none\">
                            <i class=\"fas fa-boxes me-1\"></i> Produits
                        </a>
                    </li>
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('app_admin_product_show', {'id': product.id}) }}\" class=\"text-decoration-none\">
                            {{ product.name|u.truncate(30) }}
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">Gestion des lots</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0\">
                <i class=\"fas fa-boxes me-2 text-primary\"></i>
                Lots de stock - {{ product.name }}
            </h1>
            <p class=\"text-muted mt-2\">
                <i class=\"fas fa-info-circle me-1\"></i>
                Les lots sont créés automatiquement lors des achats. Vous pouvez uniquement modifier l'emplacement et le statut.
            </p>
        </div>
        <div>
            <a href=\"{{ path('purchase_cart') }}\" class=\"btn btn-success me-2\">
                <i class=\"fas fa-cart-plus me-2\"></i> Nouvel achat
            </a>
            <a href=\"{{ path('app_admin_product_show', {'id': product.id}) }}\" class=\"btn btn-outline-secondary me-2\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour produit
            </a>
            <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#printOptionsModal\">
                <i class=\"fas fa-print me-2\"></i> Imprimer sélection
            </button>
        </div>
    </div>

    <!-- Section produit et catégorie (2 colonnes) -->
    <div class=\"row mb-4\">
        <!-- Colonne gauche : Catégorie -->
        <div class=\"col-md-4\">
            <div class=\"card border-0 shadow-sm h-100\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0\"><i class=\"fas fa-folder me-2 text-warning\"></i> Catégorie</h5>
                </div>
                <div class=\"card-body\">
                    {% if product.category %}
                        <div class=\"text-center mb-3\">
                            <div class=\"bg-light rounded-circle p-3 d-inline-block\">
                                <i class=\"fas fa-tag fa-3x text-primary\"></i>
                            </div>
                        </div>
                        <h4 class=\"text-center mb-3\">{{ product.category.name }}</h4>
                        {% if product.category.parent %}
                            <p class=\"text-muted text-center\">
                                <i class=\"fas fa-level-up-alt me-1\"></i>
                                Catégorie parente : {{ product.category.parent.name }}
                            </p>
                        {% endif %}
                        {% if product.category.description %}
                            <hr>
                            <p class=\"small text-muted mb-0\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                {{ product.category.description|u.truncate(100) }}
                            </p>
                        {% endif %}
                    {% else %}
                        <div class=\"text-center text-muted py-4\">
                            <i class=\"fas fa-folder-open fa-3x mb-3 opacity-50\"></i>
                            <p class=\"mb-0\">Aucune catégorie assignée</p>
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>

        <!-- Colonne droite : Informations produit -->
        <div class=\"col-md-8\">
            <div class=\"card border-0 shadow-sm h-100\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0\"><i class=\"fas fa-box me-2 text-success\"></i> Informations produit</h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"mb-3\">
                                <label class=\"text-muted small fw-bold\">Code-barres</label>
                                <div class=\"fw-bold\">{{ product.barcode }}</div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"text-muted small fw-bold\">Prix d'achat</label>
                                <div class=\"fw-bold text-primary\">{{ product.purchasePrice|price_with_currency(product.hmaService) }}</div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"text-muted small fw-bold\">Prix de vente</label>
                                <div class=\"fw-bold text-success\">{{ product.salePrice|price_with_currency(product.hmaService) }}</div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"mb-3\">
                                <label class=\"text-muted small fw-bold\">Stock total</label>
                                <div class=\"fw-bold\">{{ stats.total_quantity|default(0) }} {{ product.unit|default('pièce') }}</div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"text-muted small fw-bold\">Type</label>
                                <div>
                                    {% if product.hasExpiryDate %}
                                        <span class=\"badge bg-warning text-dark\">
                                            <i class=\"fas fa-calendar-alt me-1\"></i> Périssable
                                        </span>
                                    {% else %}
                                        <span class=\"badge bg-secondary\">
                                            <i class=\"fas fa-infinity me-1\"></i> Non périssable
                                        </span>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Statistiques des lots -->
    <div class=\"row mb-4\">
        <div class=\"col-md-3\">
            <div class=\"card border-0 bg-primary bg-opacity-10 shadow-sm\">
                <div class=\"card-body text-center\">
                    <i class=\"fas fa-database fa-2x text-white mb-2\"></i>
                    <h3 class=\"mb-0 text-white\">{{ stats.total_batches|default(0) }}</h3>
                    <small class=\"text-white-50\">Total lots</small>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card border-0 bg-success bg-opacity-10 shadow-sm\">
                <div class=\"card-body text-center\">
                    <i class=\"fas fa-play-circle fa-2x text-white mb-2\"></i>
                    <h3 class=\"mb-0 text-white\">{{ stats.active_batches|default(0) }}</h3>
                    <small class=\"text-white-50\">Lots actifs</small>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card border-0 bg-danger bg-opacity-10 shadow-sm\">
                <div class=\"card-body text-center\">
                    <i class=\"fas fa-calendar-times fa-2x text-white mb-2\"></i>
                    <h3 class=\"mb-0 text-white\">{{ stats.expired_batches|default(0) }}</h3>
                    <small class=\"text-white-50\">Lots expirés</small>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card border-0 bg-warning bg-opacity-10 shadow-sm\">
                <div class=\"card-body text-center\">
                    <i class=\"fas fa-clock fa-2x text-white mb-2\"></i>
                    <h3 class=\"mb-0 text-white\">{{ stats.expiring_soon_batches|default(0) }}</h3>
                    <small class=\"text-white-50\">Expiration < 30j</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Filtres -->
    <div class=\"card border-0 shadow-sm mb-4\">
        <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0\"><i class=\"fas fa-filter me-2 text-primary\"></i> Filtres</h5>
            <div class=\"d-flex gap-2\">
                <button type=\"button\" class=\"btn btn-outline-secondary btn-sm\" id=\"resetFiltersBtn\">
                    <i class=\"fas fa-undo me-1\"></i> Effacer
                </button>
                <button type=\"submit\" form=\"filter-form\" class=\"btn btn-primary btn-sm\">
                    <i class=\"fas fa-search me-1\"></i> Filtrer
                </button>
            </div>
        </div>
        <div class=\"card-body\">
            <form method=\"get\" id=\"filter-form\">
                <!-- Première ligne : 5 colonnes -->
                <div class=\"row g-3\">
                    <div class=\"col-md-3\">
                        <label class=\"form-label fw-bold\">Recherche</label>
                        <input type=\"text\" name=\"search\" class=\"form-control\" 
                               placeholder=\"N° lot...\" value=\"{{ filters.search|default('') }}\">
                    </div>
                    <div class=\"col-md-2\">
                        <label class=\"form-label fw-bold\">Statut</label>
                        <select name=\"status\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"active\" {{ filters.status|default('') == 'active' ? 'selected' }}>Actifs</option>
                            <option value=\"inactive\" {{ filters.status|default('') == 'inactive' ? 'selected' }}>Inactifs</option>
                        </select>
                    </div>
                    <div class=\"col-md-2\">
                        <label class=\"form-label fw-bold\">Expiration</label>
                        <select name=\"expiry_status\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"expired\" {{ filters.expiry_status|default('') == 'expired' ? 'selected' }}>Expirés</option>
                            <option value=\"expiring_soon\" {{ filters.expiry_status|default('') == 'expiring_soon' ? 'selected' }}>Expire bientôt</option>
                            <option value=\"not_expiring\" {{ filters.expiry_status|default('') == 'not_expiring' ? 'selected' }}>Non expirés</option>
                        </select>
                    </div>
                    <div class=\"col-md-2\">
                        <label class=\"form-label fw-bold\">Emplacement</label>
                        <select name=\"location\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            {% for loc in locations|default([]) %}
                                <option value=\"{{ loc }}\" {{ filters.location|default('') == loc ? 'selected' }}>{{ loc }}</option>
                            {% endfor %}
                        </select>
                    </div>
                    <div class=\"col-md-3\">
                        <label class=\"form-label fw-bold\">Stock faible</label>
                        <select name=\"low_stock\" class=\"form-select\">
                            <option value=\"\">Tous</option>
                            <option value=\"yes\" {{ filters.low_stock|default('') == 'yes' ? 'selected' }}>≤ 10 unités</option>
                        </select>
                    </div>
                </div>

                <!-- Deuxième ligne : 4 colonnes -->
                <div class=\"row g-3 mt-3\">
                    <div class=\"col-md-3\">
                        <label class=\"form-label fw-bold\">Expiration du</label>
                        <input type=\"date\" name=\"date_from\" class=\"form-control\" value=\"{{ filters.date_from|default('') }}\">
                    </div>
                    <div class=\"col-md-3\">
                        <label class=\"form-label fw-bold\">Expiration au</label>
                        <input type=\"date\" name=\"date_to\" class=\"form-control\" value=\"{{ filters.date_to|default('') }}\">
                    </div>
                    <div class=\"col-md-3\">
                        <label class=\"form-label fw-bold\">Trier par</label>
                        <select name=\"sort\" class=\"form-select\">
                            <option value=\"batch_number\" {{ filters.sort|default('expiry_date') == 'batch_number' ? 'selected' }}>N° lot</option>
                            <option value=\"expiry_date\" {{ filters.sort|default('expiry_date') == 'expiry_date' ? 'selected' }}>Date expiration</option>
                            <option value=\"current_quantity\" {{ filters.sort|default('expiry_date') == 'current_quantity' ? 'selected' }}>Quantité</option>
                            <option value=\"created_at\" {{ filters.sort|default('expiry_date') == 'created_at' ? 'selected' }}>Date création</option>
                            <option value=\"location\" {{ filters.sort|default('expiry_date') == 'location' ? 'selected' }}>Emplacement</option>
                        </select>
                    </div>
                    <div class=\"col-md-3\">
                        <label class=\"form-label fw-bold\">Ordre</label>
                        <select name=\"direction\" class=\"form-select\">
                            <option value=\"asc\" {{ filters.direction|default('asc') == 'asc' ? 'selected' }}>Croissant</option>
                            <option value=\"desc\" {{ filters.direction|default('asc') == 'desc' ? 'selected' }}>Décroissant</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Tableau des lots avec cases à cocher -->
    <div class=\"card border-0 shadow-sm\">
        <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0\"><i class=\"fas fa-list me-2\"></i> Liste des lots</h5>
            <div class=\"d-flex gap-2 align-items-center\">
                <span class=\"badge bg-secondary\">{{ batches|length }} lot(s)</span>
                <button type=\"button\" class=\"btn btn-sm btn-outline-primary\" id=\"selectAllBtn\">
                    <i class=\"fas fa-check-double me-1\"></i> Tout sélectionner
                </button>
                <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\" id=\"deselectAllBtn\">
                    <i class=\"fas fa-times me-1\"></i> Désélectionner
                </button>
            </div>
        </div>
        <div class=\"card-body p-0\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover align-middle mb-0\">
                    <thead class=\"table-light\">
                        <tr>
                            <th style=\"width: 40px;\">
                                <input type=\"checkbox\" id=\"select-all-checkbox\" class=\"form-check-input\">
                            </th>
                            <th>N° lot</th>
                            <th>Emplacement</th>
                            <th>Quantité</th>
                            <th>Prix unitaire</th>
                            <th>Fabriqué le</th>
                            <th>Expire le</th>
                            <th>Statut</th>
                            <th class=\"text-center\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for batch in batches %}
                            <tr class=\"
                                {% if batch.isActive and batch.expiryDate and batch.expiryDate < date() %}table-danger
                                {% elseif batch.currentQuantity <= 10 %}table-warning
                                {% endif %}
                            \">
                                <td>
                                    <input type=\"checkbox\" class=\"form-check-input batch-checkbox\" value=\"{{ batch.id }}\" data-batch-number=\"{{ batch.batchNumber }}\">
                                </td>
                                <td>
                                    <strong>{{ batch.batchNumber }}</strong>
                                    {% if batch.purchaseItem %}
                                        <br>
                                        <small class=\"text-muted\">
                                            <i class=\"fas fa-receipt me-1\"></i>
                                            Achat #{{ batch.purchaseItem.purchase.id }}
                                        </small>
                                    {% endif %}
                                </td>
                                <td>
                                    {% if batch.location %}
                                        <span class=\"badge bg-info text-dark\">
                                            <i class=\"fas fa-map-marker-alt me-1\"></i> {{ batch.location }}
                                        </span>
                                    {% else %}
                                        <span class=\"text-muted\">—</span>
                                    {% endif %}
                                </td>
                                <td>
                                    <div>
                                        <span class=\"fw-bold\">{{ batch.currentQuantity }}</span>
                                        <small class=\"text-muted\">/ {{ batch.initialQuantity }}</small>
                                        <div class=\"progress mt-1\" style=\"height: 4px; width: 80px;\">
                                            {% set percentage = (batch.currentQuantity / batch.initialQuantity * 100)|round %}
                                            <div class=\"progress-bar 
                                                {% if percentage <= 10 %}bg-danger
                                                {% elseif percentage <= 30 %}bg-warning
                                                {% else %}bg-success
                                                {% endif %}\" 
                                                style=\"width: {{ percentage }}%\"></div>
                                        </div>
                                        {% if batch.currentQuantity <= 10 %}
                                            <br>
                                            <span class=\"badge bg-warning text-dark mt-1\">Stock faible</span>
                                        {% endif %}
                                    </div>
                                </td>
                                <td>{{ batch.unitPrice|price_with_currency(batch.hmaService) }}</td>
                                <td>{{ batch.manufacturingDate ? batch.manufacturingDate|date('d/m/Y') : '—' }}</td>
                                <td>
                                    {% if batch.expiryDate %}
                                        <div>
                                            <span class=\"text-dark fw-bold\">
                                                {{ batch.expiryDate|date('d/m/Y') }}
                                            </span>
                                            {% if batch.expiryDate < date() %}
                                                <br><span class=\"badge bg-danger mt-1\">Expiré</span>
                                            {% elseif batch.expiryDate < date('+30 days') %}
                                                <br><span class=\"badge bg-warning text-dark mt-1\">Bientôt</span>
                                            {% endif %}
                                        </div>
                                    {% else %}
                                        <span class=\"text-muted\">—</span>
                                    {% endif %}
                                </td>
                                <td>
                                    <span class=\"badge {{ batch.isActive ? 'bg-success' : 'bg-secondary' }}\">
                                        {{ batch.isActive ? 'Actif' : 'Inactif' }}
                                    </span>
                                </td>
                                <td class=\"text-center\">
                                    <div class=\"btn-group\" role=\"group\">
                                        <a href=\"{{ path('app_admin_stock_batch_print', {'id': batch.id}) }}\" 
                                           class=\"btn btn-sm btn-outline-secondary\" 
                                           title=\"Imprimer l'étiquette\" target=\"_blank\">
                                            <i class=\"fas fa-print\"></i>
                                        </a>
                                        <a href=\"{{ path('app_admin_stock_batch_show', {'id': batch.id}) }}\" 
                                           class=\"btn btn-sm btn-outline-primary\" title=\"Voir détails\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                        <a href=\"{{ path('app_admin_stock_batch_edit', {'id': batch.id}) }}\" 
                                           class=\"btn btn-sm btn-outline-warning\" title=\"Modifier emplacement\">
                                            <i class=\"fas fa-map-marker-alt\"></i>
                                        </a>
                                        <button type=\"button\" 
                                                class=\"btn btn-sm btn-outline-info toggle-batch-btn\"
                                                data-batch-id=\"{{ batch.id }}\"
                                                data-is-active=\"{{ batch.isActive ? '1' : '0' }}\"
                                                data-batch-number=\"{{ batch.batchNumber }}\"
                                                data-token=\"{{ csrf_token('toggle-batch' ~ batch.id) }}\"
                                                title=\"{{ batch.isActive ? 'Désactiver' : 'Activer' }}\">
                                            <i class=\"fas {{ batch.isActive ? 'fa-toggle-on' : 'fa-toggle-off' }}\"></i>
                                        </button>
                                        {% if is_granted('ROLE_ADMIN') and batch.stockMovements|length == 0 %}
                                            <button type=\"button\" 
                                                    class=\"btn btn-sm btn-outline-danger delete-batch-btn\"
                                                    data-batch-id=\"{{ batch.id }}\"
                                                    data-batch-number=\"{{ batch.batchNumber }}\"
                                                    data-token=\"{{ csrf_token('delete-batch' ~ batch.id) }}\"
                                                    title=\"Supprimer\">
                                                <i class=\"fas fa-trash\"></i>
                                            </button>
                                        {% endif %}
                                    </div>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"9\" class=\"text-center py-5\">
                                    <i class=\"fas fa-box-open fa-3x text-muted mb-3\"></i>
                                    <p class=\"text-muted mb-0\">Aucun lot trouvé pour ce produit</p>
                                    <a href=\"{{ path('admin_purchase_new', {'productId': product.id}) }}\" class=\"btn btn-sm btn-primary mt-3\">
                                        <i class=\"fas fa-cart-plus me-1\"></i> Créer un achat
                                    </a>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modale impression -->
<div class=\"modal fade\" id=\"printOptionsModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-primary text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-print me-2\"></i> Options d'impression
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"alert alert-info\">
                    <i class=\"fas fa-info-circle me-2\"></i>
                    <span id=\"selectedCount\">0</span> lot(s) sélectionné(s) dans le tableau
                </div>
                <div class=\"d-grid gap-2\">
                    <button type=\"button\" class=\"btn btn-primary\" id=\"printSelectedBtn\">
                        <i class=\"fas fa-print me-2\"></i> Imprimer la sélection
                    </button>
                    <button type=\"button\" class=\"btn btn-outline-primary\" id=\"printAllBtn\">
                        <i class=\"fas fa-print me-2\"></i> Imprimer tous les lots
                    </button>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
            </div>
        </div>
    </div>
</div>

<!-- Modales pour actions -->
<div class=\"modal fade\" id=\"toggleBatchModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">Confirmation</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p id=\"toggleBatchMessage\"></p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"toggleBatchForm\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" id=\"toggleBatchToken\">
                    <button type=\"submit\" class=\"btn\" id=\"toggleBatchBtn\"></button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"deleteBatchModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Supprimer le lot
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <p id=\"deleteBatchMessage\"></p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"deleteBatchForm\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteBatchToken\">
                    <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // ========== GESTION DES FILTRES ==========
    // Bouton Effacer
    const resetFiltersBtn = document.getElementById('resetFiltersBtn');
    if (resetFiltersBtn) {
        resetFiltersBtn.addEventListener('click', function() {
            window.location.href = \"{{ path('app_admin_stock_batch_index', {'productId': product.id}) }}\";
        });
    }

    // Auto-submit filters on change
    const filterFields = ['status', 'expiry_status', 'location', 'low_stock', 'sort', 'direction'];
    filterFields.forEach(function(fieldName) {
        var el = document.querySelector('[name=\"' + fieldName + '\"]');
        if (el) {
            el.addEventListener('change', function() {
                var form = document.getElementById('filter-form');
                if (form) form.submit();
            });
        }
    });

    // Auto-submit on date fields change
    var dateFields = ['date_from', 'date_to'];
    dateFields.forEach(function(fieldName) {
        var el = document.querySelector('[name=\"' + fieldName + '\"]');
        if (el) {
            el.addEventListener('change', function() {
                var form = document.getElementById('filter-form');
                if (form) form.submit();
            });
        }
    });

    // Search input with debounce
    var searchInput = document.querySelector('input[name=\"search\"]');
    if (searchInput) {
        var timeout = null;
        searchInput.addEventListener('input', function() {
            clearTimeout(timeout);
            timeout = setTimeout(function() {
                var form = document.getElementById('filter-form');
                if (form) form.submit();
            }, 500);
        });
    }

    // ========== SÉLECTION DES LOTS ==========
    var selectAllCheckbox = document.getElementById('select-all-checkbox');
    var batchCheckboxes = document.querySelectorAll('.batch-checkbox');
    var selectedCountSpan = document.getElementById('selectedCount');

    function updateSelectedCount() {
        var selected = document.querySelectorAll('.batch-checkbox:checked').length;
        if (selectedCountSpan) {
            selectedCountSpan.textContent = selected;
        }
    }

    // Sélectionner/désélectionner tout
    if (selectAllCheckbox) {
        selectAllCheckbox.addEventListener('change', function() {
            batchCheckboxes.forEach(function(cb) {
                cb.checked = selectAllCheckbox.checked;
            });
            updateSelectedCount();
        });
    }

    // Bouton Tout sélectionner
    var selectAllBtn = document.getElementById('selectAllBtn');
    if (selectAllBtn) {
        selectAllBtn.addEventListener('click', function() {
            batchCheckboxes.forEach(function(cb) {
                cb.checked = true;
            });
            if (selectAllCheckbox) selectAllCheckbox.checked = true;
            updateSelectedCount();
        });
    }

    // Bouton Désélectionner
    var deselectAllBtn = document.getElementById('deselectAllBtn');
    if (deselectAllBtn) {
        deselectAllBtn.addEventListener('click', function() {
            batchCheckboxes.forEach(function(cb) {
                cb.checked = false;
            });
            if (selectAllCheckbox) selectAllCheckbox.checked = false;
            updateSelectedCount();
        });
    }

    // Mettre à jour le compteur quand une case change
    batchCheckboxes.forEach(function(cb) {
        cb.addEventListener('change', function() {
            updateSelectedCount();
            if (selectAllCheckbox) {
                var allChecked = batchCheckboxes.length === document.querySelectorAll('.batch-checkbox:checked').length;
                selectAllCheckbox.checked = allChecked;
            }
        });
    });

    updateSelectedCount();

    // ========== IMPRESSION ==========
    var printSelectedBtn = document.getElementById('printSelectedBtn');
    var printAllBtn = document.getElementById('printAllBtn');

    if (printSelectedBtn) {
        printSelectedBtn.addEventListener('click', function() {
            var selected = [];
            document.querySelectorAll('.batch-checkbox:checked').forEach(function(cb) {
                selected.push(cb.value);
            });
            if (selected.length === 0) {
                alert('Veuillez sélectionner au moins un lot.');
                return;
            }
            window.open('/admin/stock-batch/print-multiple?ids=' + selected.join(','), '_blank');
            bootstrap.Modal.getInstance(document.getElementById('printOptionsModal')).hide();
        });
    }

    if (printAllBtn) {
        printAllBtn.addEventListener('click', function() {
            var allIds = [];
            document.querySelectorAll('.batch-checkbox').forEach(function(cb) {
                allIds.push(cb.value);
            });
            if (allIds.length === 0) {
                alert('Aucun lot à imprimer.');
                return;
            }
            window.open('/admin/stock-batch/print-multiple?ids=' + allIds.join(','), '_blank');
            bootstrap.Modal.getInstance(document.getElementById('printOptionsModal')).hide();
        });
    }

    // ========== TOGGLE STATUT ==========
    var toggleModalElement = document.getElementById('toggleBatchModal');
    var toggleModal = toggleModalElement ? new bootstrap.Modal(toggleModalElement) : null;

    document.querySelectorAll('.toggle-batch-btn').forEach(function(btn) {
        btn.addEventListener('click', function() {
            var batchId = this.dataset.batchId;
            var isActive = this.dataset.isActive === '1';
            var token = this.dataset.token;
            var batchNumber = this.dataset.batchNumber;

            var message = document.getElementById('toggleBatchMessage');
            var form = document.getElementById('toggleBatchForm');
            var tokenInput = document.getElementById('toggleBatchToken');
            var submitBtn = document.getElementById('toggleBatchBtn');

            if (message) {
                message.textContent = 'Êtes-vous sûr de vouloir ' + (isActive ? 'désactiver' : 'activer') + ' le lot \"' + batchNumber + '\" ?';
            }
            if (form) form.action = '/admin/stock-batch/' + batchId + '/toggle';
            if (tokenInput) tokenInput.value = token;
            if (submitBtn) {
                submitBtn.className = isActive ? 'btn btn-danger' : 'btn btn-success';
                submitBtn.textContent = isActive ? 'Désactiver' : 'Activer';
            }
            if (toggleModal) toggleModal.show();
        });
    });

    // ========== SUPPRESSION ==========
    var deleteModalElement = document.getElementById('deleteBatchModal');
    var deleteModal = deleteModalElement ? new bootstrap.Modal(deleteModalElement) : null;

    document.querySelectorAll('.delete-batch-btn:not([disabled])').forEach(function(btn) {
        btn.addEventListener('click', function() {
            var batchId = this.dataset.batchId;
            var batchNumber = this.dataset.batchNumber;
            var token = this.dataset.token;

            var message = document.getElementById('deleteBatchMessage');
            var form = document.getElementById('deleteBatchForm');
            var tokenInput = document.getElementById('deleteBatchToken');

            if (message) {
                message.innerHTML = '<div class=\"alert alert-warning\">⚠️ Cette action est irréversible.</div>' +
                    '<p>Supprimer le lot <strong>' + batchNumber + '</strong> ?</p>' +
                    '<p class=\"text-danger mb-0\"><small>Cette suppression n\\'est possible que si aucun mouvement de stock n\\'est associé.</small></p>';
            }
            if (form) form.action = '/admin/stock-batch/' + batchId + '/delete';
            if (tokenInput) tokenInput.value = token;
            if (deleteModal) deleteModal.show();
        });
    });
});
</script>
{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
.table-hover tbody tr:hover {
    background-color: rgba(102, 126, 234, 0.05);
    cursor: pointer;
}
.progress {
    border-radius: 10px;
    overflow: hidden;
}
.card {
    transition: transform 0.2s, box-shadow 0.2s;
}
.card:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 20px rgba(0,0,0,0.1) !important;
}
.badge {
    font-weight: 500;
}
.btn-group .btn {
    padding: 0.25rem 0.5rem;
}
.table td {
    vertical-align: middle;
}
@media (max-width: 768px) {
    .btn-group {
        flex-direction: column;
    }
    .btn-group .btn {
        margin: 1px 0;
    }
}
</style>
{% endblock %}", "admin/stock_batch/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\stock_batch\\index.html.twig");
    }
}
