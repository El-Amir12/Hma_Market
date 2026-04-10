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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_location_index");
        yield "\" class=\"btn btn-outline-info me-2\">
                <i class=\"fas fa-map-marker-alt me-2\"></i> Emplacements
            </a>
            <a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_cart");
        yield "\" class=\"btn btn-success me-2\">
                <i class=\"fas fa-cart-plus me-2\"></i> Nouvel achat
            </a>
            <a href=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42)]), "html", null, true);
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
        <div class=\"col-md-4\">
            <div class=\"card border-0 shadow-sm h-100\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0\"><i class=\"fas fa-folder me-2 text-warning\"></i> Catégorie</h5>
                </div>
                <div class=\"card-body\">
                    ";
        // line 59
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 59, $this->source); })()), "category", [], "any", false, false, false, 59)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 60
            yield "                        <div class=\"text-center mb-3\">
                            <div class=\"bg-light rounded-circle p-3 d-inline-block\">
                                <i class=\"fas fa-tag fa-3x text-primary\"></i>
                            </div>
                        </div>
                        <h4 class=\"text-center mb-3\">";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 65, $this->source); })()), "category", [], "any", false, false, false, 65), "name", [], "any", false, false, false, 65), "html", null, true);
            yield "</h4>
                        ";
            // line 66
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 66, $this->source); })()), "category", [], "any", false, false, false, 66), "parent", [], "any", false, false, false, 66)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 67
                yield "                            <p class=\"text-muted text-center\">
                                <i class=\"fas fa-level-up-alt me-1\"></i>
                                Catégorie parente : ";
                // line 69
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 69, $this->source); })()), "category", [], "any", false, false, false, 69), "parent", [], "any", false, false, false, 69), "name", [], "any", false, false, false, 69), "html", null, true);
                yield "
                            </p>
                        ";
            }
            // line 72
            yield "                        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 72, $this->source); })()), "category", [], "any", false, false, false, 72), "description", [], "any", false, false, false, 72)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 73
                yield "                            <hr>
                            <p class=\"small text-muted mb-0\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                ";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 76, $this->source); })()), "category", [], "any", false, false, false, 76), "description", [], "any", false, false, false, 76)), "truncate", [100], "method", false, false, false, 76), "html", null, true);
                yield "
                            </p>
                        ";
            }
            // line 79
            yield "                    ";
        } else {
            // line 80
            yield "                        <div class=\"text-center text-muted py-4\">
                            <i class=\"fas fa-folder-open fa-3x mb-3 opacity-50\"></i>
                            <p class=\"mb-0\">Aucune catégorie assignée</p>
                        </div>
                    ";
        }
        // line 85
        yield "                </div>
            </div>
        </div>

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
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 99, $this->source); })()), "barcode", [], "any", false, false, false, 99), "html", null, true);
        yield "</div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"text-muted small fw-bold\">Prix d'achat</label>
                                <div class=\"fw-bold text-primary\">";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 103, $this->source); })()), "purchasePrice", [], "any", false, false, false, 103), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 103, $this->source); })()), "hmaService", [], "any", false, false, false, 103)), "html", null, true);
        yield "</div>
                            </div>
                            ";
        // line 105
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 105, $this->source); })()) != "restaurant")) {
            // line 106
            yield "                            <div class=\"mb-3\">
                                <label class=\"text-muted small fw-bold\">Prix de vente</label>
                                <div class=\"fw-bold text-success\">";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 108, $this->source); })()), "salePrice", [], "any", false, false, false, 108), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 108, $this->source); })()), "hmaService", [], "any", false, false, false, 108)), "html", null, true);
            yield "</div>
                            </div>
                            ";
        }
        // line 111
        yield "                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"mb-3\">
                                <label class=\"text-muted small fw-bold\">Stock total</label>
                                <div class=\"fw-bold\">";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_quantity", [], "any", true, true, false, 115)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 115, $this->source); })()), "total_quantity", [], "any", false, false, false, 115), 0)) : (0)), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 115)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 115, $this->source); })()), "unit", [], "any", false, false, false, 115), "pièce")) : ("pièce")), "html", null, true);
        yield "</div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"text-muted small fw-bold\">Type</label>
                                <div>
                                    ";
        // line 120
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 120, $this->source); })()), "hasExpiryDate", [], "any", false, false, false, 120)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 121
            yield "                                        <span class=\"badge bg-warning text-dark\">
                                            <i class=\"fas fa-calendar-alt me-1\"></i> Périssable
                                        </span>
                                    ";
        } else {
            // line 125
            yield "                                        <span class=\"badge bg-secondary\">
                                            <i class=\"fas fa-infinity me-1\"></i> Non périssable
                                        </span>
                                    ";
        }
        // line 129
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
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total_batches", [], "any", true, true, false, 144)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 144, $this->source); })()), "total_batches", [], "any", false, false, false, 144), 0)) : (0)), "html", null, true);
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
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "active_batches", [], "any", true, true, false, 153)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 153, $this->source); })()), "active_batches", [], "any", false, false, false, 153), 0)) : (0)), "html", null, true);
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
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "expired_batches", [], "any", true, true, false, 162)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 162, $this->source); })()), "expired_batches", [], "any", false, false, false, 162), 0)) : (0)), "html", null, true);
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
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "expiring_soon_batches", [], "any", true, true, false, 171)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 171, $this->source); })()), "expiring_soon_batches", [], "any", false, false, false, 171), 0)) : (0)), "html", null, true);
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
            <a href=\"";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_index", ["productId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 183, $this->source); })()), "id", [], "any", false, false, false, 183)]), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary btn-sm\">
                <i class=\"fas fa-undo me-1\"></i> Effacer
            </a>
            <button type=\"submit\" form=\"filter-form\" class=\"btn btn-primary btn-sm\">
                <i class=\"fas fa-search me-1\"></i> Filtrer
            </button>
        </div>
    </div>
    <div class=\"card-body\">
        <form method=\"get\" id=\"filter-form\">
            <div class=\"row g-3\">
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-bold\">Recherche</label>
                    <input type=\"text\" name=\"search\" class=\"form-control\" 
                           placeholder=\"N° lot...\" value=\"";
        // line 197
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "search", [], "any", true, true, false, 197)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 197, $this->source); })()), "search", [], "any", false, false, false, 197), "")) : ("")), "html", null, true);
        yield "\">
                </div>
                <div class=\"col-md-2\">
                    <label class=\"form-label fw-bold\">Statut</label>
                    <select name=\"status\" class=\"form-select\">
                        <option value=\"\">Tous</option>
                        <option value=\"active\" ";
        // line 203
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", true, true, false, 203)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 203, $this->source); })()), "status", [], "any", false, false, false, 203), "")) : ("")) == "active")) ? ("selected") : (""));
        yield ">Actifs</option>
                        <option value=\"inactive\" ";
        // line 204
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", true, true, false, 204)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 204, $this->source); })()), "status", [], "any", false, false, false, 204), "")) : ("")) == "inactive")) ? ("selected") : (""));
        yield ">Inactifs</option>
                    </select>
                </div>
                <div class=\"col-md-2\">
                    <label class=\"form-label fw-bold\">Expiration</label>
                    <select name=\"expiry_status\" class=\"form-select\">
                        <option value=\"\">Tous</option>
                        <option value=\"expired\" ";
        // line 211
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "expiry_status", [], "any", true, true, false, 211)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 211, $this->source); })()), "expiry_status", [], "any", false, false, false, 211), "")) : ("")) == "expired")) ? ("selected") : (""));
        yield ">Expirés</option>
                        <option value=\"expiring_soon\" ";
        // line 212
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "expiry_status", [], "any", true, true, false, 212)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 212, $this->source); })()), "expiry_status", [], "any", false, false, false, 212), "")) : ("")) == "expiring_soon")) ? ("selected") : (""));
        yield ">Expire bientôt</option>
                        <option value=\"not_expiring\" ";
        // line 213
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "expiry_status", [], "any", true, true, false, 213)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 213, $this->source); })()), "expiry_status", [], "any", false, false, false, 213), "")) : ("")) == "not_expiring")) ? ("selected") : (""));
        yield ">Non expirés</option>
                    </select>
                </div>
                <div class=\"col-md-2\">
                    <label class=\"form-label fw-bold\">Stock faible</label>
                    <select name=\"low_stock\" class=\"form-select\">
                        <option value=\"\">Tous</option>
                        <option value=\"yes\" ";
        // line 220
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "low_stock", [], "any", true, true, false, 220)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 220, $this->source); })()), "low_stock", [], "any", false, false, false, 220), "")) : ("")) == "yes")) ? ("selected") : (""));
        yield ">≤ 10 unités</option>
                    </select>
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-bold\">Emplacement</label>
                    <select name=\"location\" id=\"location-select\" class=\"form-select select2-location\">
                        <option value=\"\">-- Tous les emplacements --</option>
                        ";
        // line 227
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(((array_key_exists("all_locations", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["all_locations"]) || array_key_exists("all_locations", $context) ? $context["all_locations"] : (function () { throw new RuntimeError('Variable "all_locations" does not exist.', 227, $this->source); })()), (isset($context["locations"]) || array_key_exists("locations", $context) ? $context["locations"] : (function () { throw new RuntimeError('Variable "locations" does not exist.', 227, $this->source); })()))) : ((isset($context["locations"]) || array_key_exists("locations", $context) ? $context["locations"] : (function () { throw new RuntimeError('Variable "locations" does not exist.', 227, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["loc"]) {
            // line 228
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["loc"], "html", null, true);
            yield "\" ";
            yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "location", [], "any", true, true, false, 228)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 228, $this->source); })()), "location", [], "any", false, false, false, 228), "")) : ("")) == $context["loc"])) ? ("selected") : (""));
            yield ">
                                ";
            // line 229
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["loc"], "html", null, true);
            yield "
                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['loc'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 232
        yield "                    </select>
                </div>
            </div>

            <div class=\"row g-3 mt-3\">
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-bold\">Expiration du</label>
                    <input type=\"date\" name=\"date_from\" class=\"form-control\" value=\"";
        // line 239
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_from", [], "any", true, true, false, 239)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 239, $this->source); })()), "date_from", [], "any", false, false, false, 239), "")) : ("")), "html", null, true);
        yield "\">
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-bold\">Expiration au</label>
                    <input type=\"date\" name=\"date_to\" class=\"form-control\" value=\"";
        // line 243
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_to", [], "any", true, true, false, 243)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 243, $this->source); })()), "date_to", [], "any", false, false, false, 243), "")) : ("")), "html", null, true);
        yield "\">
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-bold\">Trier par</label>
                    <select name=\"sort\" class=\"form-select\">
                        <option value=\"batch_number\" ";
        // line 248
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 248)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 248, $this->source); })()), "sort", [], "any", false, false, false, 248), "expiry_date")) : ("expiry_date")) == "batch_number")) ? ("selected") : (""));
        yield ">N° lot</option>
                        <option value=\"expiry_date\" ";
        // line 249
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 249)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 249, $this->source); })()), "sort", [], "any", false, false, false, 249), "expiry_date")) : ("expiry_date")) == "expiry_date")) ? ("selected") : (""));
        yield ">Date expiration</option>
                        <option value=\"current_quantity\" ";
        // line 250
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 250)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 250, $this->source); })()), "sort", [], "any", false, false, false, 250), "expiry_date")) : ("expiry_date")) == "current_quantity")) ? ("selected") : (""));
        yield ">Quantité</option>
                        <option value=\"created_at\" ";
        // line 251
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 251)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 251, $this->source); })()), "sort", [], "any", false, false, false, 251), "expiry_date")) : ("expiry_date")) == "created_at")) ? ("selected") : (""));
        yield ">Date création</option>
                        <option value=\"location\" ";
        // line 252
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "sort", [], "any", true, true, false, 252)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 252, $this->source); })()), "sort", [], "any", false, false, false, 252), "expiry_date")) : ("expiry_date")) == "location")) ? ("selected") : (""));
        yield ">Emplacement</option>
                    </select>
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-bold\">Ordre</label>
                    <select name=\"direction\" class=\"form-select\">
                        <option value=\"asc\" ";
        // line 258
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "direction", [], "any", true, true, false, 258)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 258, $this->source); })()), "direction", [], "any", false, false, false, 258), "asc")) : ("asc")) == "asc")) ? ("selected") : (""));
        yield ">Croissant ↑</option>
                        <option value=\"desc\" ";
        // line 259
        yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "direction", [], "any", true, true, false, 259)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 259, $this->source); })()), "direction", [], "any", false, false, false, 259), "asc")) : ("asc")) == "desc")) ? ("selected") : (""));
        yield ">Décroissant ↓</option>
                    </select>
                </div>
            </div>
        </form>
    </div>
</div>

    <!-- Tableau des lots -->
    <div class=\"card border-0 shadow-sm\">
        <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0\"><i class=\"fas fa-list me-2\"></i> Liste des lots</h5>
            <div class=\"d-flex gap-2 align-items-center\">
                <span class=\"badge bg-secondary\">";
        // line 272
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["batches"]) || array_key_exists("batches", $context) ? $context["batches"] : (function () { throw new RuntimeError('Variable "batches" does not exist.', 272, $this->source); })())), "html", null, true);
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
                            <th style=\"width:40px;\"><input type=\"checkbox\" id=\"select-all-checkbox\" class=\"form-check-input\"></th>
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
        // line 298
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["batches"]) || array_key_exists("batches", $context) ? $context["batches"] : (function () { throw new RuntimeError('Variable "batches" does not exist.', 298, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["batch"]) {
            // line 299
            yield "                            ";
            $context["locationDisplay"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "locationEntity", [], "any", false, false, false, 299)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "locationEntity", [], "any", false, false, false, 299), "displayName", [], "any", false, false, false, 299)) : (((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "location", [], "any", false, false, false, 299)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "location", [], "any", false, false, false, 299)) : ("—"))));
            // line 300
            yield "                            <tr class=\"";
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 300) && CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 300)) && (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 300) < $this->extensions['Twig\Extension\CoreExtension']->convertDate()))) {
                yield "table-danger";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 300) <= 10)) {
                yield "table-warning";
            }
            yield "\">
                                <td><input type=\"checkbox\" class=\"form-check-input batch-checkbox\" value=\"";
            // line 301
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 301), "html", null, true);
            yield "\" data-batch-number=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "batchNumber", [], "any", false, false, false, 301), "html", null, true);
            yield "\"></td>
                                <td>
                                    <strong>";
            // line 303
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "batchNumber", [], "any", false, false, false, 303), "html", null, true);
            yield "</strong>
                                    ";
            // line 304
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "purchaseItem", [], "any", false, false, false, 304)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 305
                yield "                                        <br><small class=\"text-muted\"><i class=\"fas fa-receipt me-1\"></i> Achat #";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "purchaseItem", [], "any", false, false, false, 305), "purchase", [], "any", false, false, false, 305), "purchaseNumber", [], "any", false, false, false, 305), "html", null, true);
                yield "</small>
                                    ";
            }
            // line 307
            yield "                                </td>
                                <td>
                                    ";
            // line 309
            if (((isset($context["locationDisplay"]) || array_key_exists("locationDisplay", $context) ? $context["locationDisplay"] : (function () { throw new RuntimeError('Variable "locationDisplay" does not exist.', 309, $this->source); })()) != "—")) {
                // line 310
                yield "                                        <span class=\"badge bg-info text-dark\"><i class=\"fas fa-map-marker-alt me-1\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["locationDisplay"]) || array_key_exists("locationDisplay", $context) ? $context["locationDisplay"] : (function () { throw new RuntimeError('Variable "locationDisplay" does not exist.', 310, $this->source); })()), "html", null, true);
                yield "</span>
                                    ";
            } else {
                // line 312
                yield "                                        <span class=\"text-muted\">—</span>
                                    ";
            }
            // line 314
            yield "                                </td>
                                <td>
                                    <div>
                                        <span class=\"fw-bold\">";
            // line 317
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 317), "html", null, true);
            yield "</span>
                                        <small class=\"text-muted\">/ ";
            // line 318
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "initialQuantity", [], "any", false, false, false, 318), "html", null, true);
            yield "</small>
                                        <div class=\"progress mt-1\" style=\"height:4px; width:80px;\">
                                            ";
            // line 320
            $context["percentage"] = Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 320) / CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "initialQuantity", [], "any", false, false, false, 320)) * 100));
            // line 321
            yield "                                            <div class=\"progress-bar ";
            if (((isset($context["percentage"]) || array_key_exists("percentage", $context) ? $context["percentage"] : (function () { throw new RuntimeError('Variable "percentage" does not exist.', 321, $this->source); })()) <= 10)) {
                yield "bg-danger";
            } elseif (((isset($context["percentage"]) || array_key_exists("percentage", $context) ? $context["percentage"] : (function () { throw new RuntimeError('Variable "percentage" does not exist.', 321, $this->source); })()) <= 30)) {
                yield "bg-warning";
            } else {
                yield "bg-success";
            }
            yield "\" style=\"width:";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["percentage"]) || array_key_exists("percentage", $context) ? $context["percentage"] : (function () { throw new RuntimeError('Variable "percentage" does not exist.', 321, $this->source); })()), "html", null, true);
            yield "%\"></div>
                                        </div>
                                        ";
            // line 323
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 323) <= 10)) {
                yield "<br><span class=\"badge bg-warning text-dark mt-1\">Stock faible</span>";
            }
            // line 324
            yield "                                    </div>
                                </td>
                                <td>";
            // line 326
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "unitPrice", [], "any", false, false, false, 326), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "hmaService", [], "any", false, false, false, 326)), "html", null, true);
            yield "</td>
                                <td>";
            // line 327
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "manufacturingDate", [], "any", false, false, false, 327)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "manufacturingDate", [], "any", false, false, false, 327), "d/m/Y"), "html", null, true)) : ("—"));
            yield "</td>
                                <td>
                                    ";
            // line 329
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 329)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 330
                yield "                                        <div>
                                            <span class=\"text-dark fw-bold\">";
                // line 331
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 331), "d/m/Y"), "html", null, true);
                yield "</span>
                                            ";
                // line 332
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 332) < $this->extensions['Twig\Extension\CoreExtension']->convertDate())) {
                    yield "<br><span class=\"badge bg-danger mt-1\">Expiré</span>
                                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 333
$context["batch"], "expiryDate", [], "any", false, false, false, 333) < $this->extensions['Twig\Extension\CoreExtension']->convertDate("+30 days"))) {
                    yield "<br><span class=\"badge bg-warning text-dark mt-1\">Bientôt</span>";
                }
                // line 334
                yield "                                        </div>
                                    ";
            } else {
                // line 336
                yield "                                        <span class=\"text-muted\">—</span>
                                    ";
            }
            // line 338
            yield "                                </td>
                                <td>
                                    <span class=\"badge ";
            // line 340
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 340)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-secondary"));
            yield "\">
                                        ";
            // line 341
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 341)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Inactif"));
            yield "
                                    </span>
                                </td>
                                <td class=\"text-center\">
                                    <div class=\"btn-group\" role=\"group\">
                                        <a href=\"";
            // line 346
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_print", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 346)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-secondary\" title=\"Imprimer\" target=\"_blank\"><i class=\"fas fa-print\"></i></a>
                                        <a href=\"";
            // line 347
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 347)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary\" title=\"Voir\"><i class=\"fas fa-eye\"></i></a>
                                        <a href=\"";
            // line 348
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 348)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-warning\" title=\"Modifier\"><i class=\"fas fa-map-marker-alt\"></i></a>
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-info toggle-batch-btn\" data-batch-id=\"";
            // line 349
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 349), "html", null, true);
            yield "\" data-is-active=\"";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 349)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("0"));
            yield "\" data-batch-number=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "batchNumber", [], "any", false, false, false, 349), "html", null, true);
            yield "\" data-token=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle-batch" . CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 349))), "html", null, true);
            yield "\" title=\"";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 349)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
            yield "\"><i class=\"fas ";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 349)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-toggle-on") : ("fa-toggle-off"));
            yield "\"></i></button>
                                        ";
            // line 350
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "stockMovements", [], "any", false, false, false, 350)) == 0))) {
                // line 351
                yield "                                            <button type=\"button\" class=\"btn btn-sm btn-outline-danger delete-batch-btn\" data-batch-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 351), "html", null, true);
                yield "\" data-batch-number=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "batchNumber", [], "any", false, false, false, 351), "html", null, true);
                yield "\" data-token=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete-batch" . CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 351))), "html", null, true);
                yield "\" title=\"Supprimer\"><i class=\"fas fa-trash\"></i></button>
                                        ";
            }
            // line 353
            yield "                                    </div>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 356
        if (!$context['_iterated']) {
            // line 357
            yield "                            <tr>
                                <td colspan=\"9\" class=\"text-center py-5\">
                                    <i class=\"fas fa-box-open fa-3x text-muted mb-3\"></i>
                                    <p class=\"text-muted mb-0\">Aucun lot trouvé pour ce produit</p>
                                    <a href=\"";
            // line 361
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_cart");
            yield "\" class=\"btn btn-sm btn-primary mt-3\"><i class=\"fas fa-cart-plus me-1\"></i> Créer un achat</a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['batch'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 365
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modales -->
<div class=\"modal fade\" id=\"printOptionsModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-primary text-white\">
                <h5 class=\"modal-title\"><i class=\"fas fa-print me-2\"></i> Options d'impression</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"alert alert-info\"><i class=\"fas fa-info-circle me-2\"></i> <span id=\"selectedCount\">0</span> lot(s) sélectionné(s) dans le tableau</div>
                <div class=\"d-grid gap-2\">
                    <button type=\"button\" class=\"btn btn-primary\" id=\"printSelectedBtn\"><i class=\"fas fa-print me-2\"></i> Imprimer la sélection</button>
                    <button type=\"button\" class=\"btn btn-outline-primary\" id=\"printAllBtn\"><i class=\"fas fa-print me-2\"></i> Imprimer tous les lots</button>
                </div>
            </div>
            <div class=\"modal-footer\"><button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button></div>
        </div>
    </div>
</div>

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
                <h5 class=\"modal-title\"><i class=\"fas fa-exclamation-triangle me-2\"></i> Supprimer le lot</h5>
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

    // line 436
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

        // line 437
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<!-- Select2 CSS et JS -->
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
<link href=\"https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css\" rel=\"stylesheet\" />
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/fr.js\"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // ========== INITIALISATION SELECT2 POUR EMPLACEMENT ==========
    \$('#location-select').select2({
        theme: 'bootstrap-5',
        language: 'fr',
        placeholder: \"-- Tous les emplacements --\",
        allowClear: true,
        width: '100%'
    });

    // ========== SÉLECTION MULTIPLE ==========
    const selectAllCheckbox = document.getElementById('select-all-checkbox');
    const batchCheckboxes = document.querySelectorAll('.batch-checkbox');
    const selectedCountSpan = document.getElementById('selectedCount');
    
    function updateSelectedCount() {
        const selected = document.querySelectorAll('.batch-checkbox:checked').length;
        if (selectedCountSpan) selectedCountSpan.textContent = selected;
    }
    
    if (selectAllCheckbox) {
        selectAllCheckbox.addEventListener('change', function() {
            batchCheckboxes.forEach(cb => cb.checked = selectAllCheckbox.checked);
            updateSelectedCount();
        });
    }
    
    document.getElementById('selectAllBtn')?.addEventListener('click', function() {
        batchCheckboxes.forEach(cb => cb.checked = true);
        if (selectAllCheckbox) selectAllCheckbox.checked = true;
        updateSelectedCount();
    });
    
    document.getElementById('deselectAllBtn')?.addEventListener('click', function() {
        batchCheckboxes.forEach(cb => cb.checked = false);
        if (selectAllCheckbox) selectAllCheckbox.checked = false;
        updateSelectedCount();
    });
    
    batchCheckboxes.forEach(cb => {
        cb.addEventListener('change', function() {
            updateSelectedCount();
            if (selectAllCheckbox) {
                selectAllCheckbox.checked = batchCheckboxes.length === document.querySelectorAll('.batch-checkbox:checked').length;
            }
        });
    });
    
    updateSelectedCount();
    
    // ========== IMPRESSION ==========
    document.getElementById('printSelectedBtn')?.addEventListener('click', function() {
        const selected = Array.from(document.querySelectorAll('.batch-checkbox:checked')).map(cb => cb.value);
        if (selected.length === 0) { alert('Veuillez sélectionner au moins un lot.'); return; }
        window.open('/admin/stock-batch/print-multiple?ids=' + selected.join(','), '_blank');
        bootstrap.Modal.getInstance(document.getElementById('printOptionsModal'))?.hide();
    });
    
    document.getElementById('printAllBtn')?.addEventListener('click', function() {
        const allIds = Array.from(document.querySelectorAll('.batch-checkbox')).map(cb => cb.value);
        if (allIds.length === 0) { alert('Aucun lot à imprimer.'); return; }
        window.open('/admin/stock-batch/print-multiple?ids=' + allIds.join(','), '_blank');
        bootstrap.Modal.getInstance(document.getElementById('printOptionsModal'))?.hide();
    });
    
    // ========== TOGGLE STATUT ==========
    const toggleModal = new bootstrap.Modal(document.getElementById('toggleBatchModal'));
    document.querySelectorAll('.toggle-batch-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const batchId = this.dataset.batchId, isActive = this.dataset.isActive === '1', token = this.dataset.token, batchNumber = this.dataset.batchNumber;
            document.getElementById('toggleBatchMessage').textContent = 'Êtes-vous sûr de vouloir ' + (isActive ? 'désactiver' : 'activer') + ' le lot \"' + batchNumber + '\" ?';
            document.getElementById('toggleBatchForm').action = '/admin/stock-batch/' + batchId + '/toggle';
            document.getElementById('toggleBatchToken').value = token;
            const btn = document.getElementById('toggleBatchBtn');
            btn.className = isActive ? 'btn btn-danger' : 'btn btn-success';
            btn.textContent = isActive ? 'Désactiver' : 'Activer';
            toggleModal.show();
        });
    });
    
    // ========== SUPPRESSION ==========
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteBatchModal'));
    document.querySelectorAll('.delete-batch-btn:not([disabled])').forEach(btn => {
        btn.addEventListener('click', function() {
            const batchId = this.dataset.batchId, batchNumber = this.dataset.batchNumber, token = this.dataset.token;
            document.getElementById('deleteBatchMessage').innerHTML = '<div class=\"alert alert-warning\">⚠️ Cette action est irréversible.</div><p>Supprimer le lot <strong>' + batchNumber + '</strong> ?</p><p class=\"text-danger mb-0\"><small>Cette suppression n\\'est possible que si aucun mouvement de stock n\\'est associé.</small></p>';
            document.getElementById('deleteBatchForm').action = '/admin/stock-batch/' + batchId + '/delete';
            document.getElementById('deleteBatchToken').value = token;
            deleteModal.show();
        });
    });
});
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 540
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

        // line 541
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
.table-hover tbody tr:hover { background-color: rgba(102, 126, 234, 0.05); cursor: pointer; }
.progress { border-radius: 10px; overflow: hidden; }
.card { transition: transform 0.2s, box-shadow 0.2s; }
.card:hover { transform: translateY(-2px); box-shadow: 0 5px 20px rgba(0,0,0,0.1) !important; }
.badge { font-weight: 500; }
.btn-group .btn { padding: 0.25rem 0.5rem; }
.table td { vertical-align: middle; }

/* Style Select2 */
.select2-container--bootstrap-5 .select2-selection {
    border-radius: 0.375rem;
    border-color: #dee2e6;
    min-height: 38px;
}
.select2-container--bootstrap-5 .select2-selection--single .select2-selection__rendered {
    line-height: 36px;
    padding-left: 12px;
}
.select2-container--bootstrap-5 .select2-selection--single .select2-selection__arrow {
    height: 36px;
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
        return array (  973 => 541,  960 => 540,  847 => 437,  834 => 436,  754 => 365,  744 => 361,  738 => 357,  736 => 356,  729 => 353,  719 => 351,  717 => 350,  703 => 349,  699 => 348,  695 => 347,  691 => 346,  683 => 341,  679 => 340,  675 => 338,  671 => 336,  667 => 334,  663 => 333,  659 => 332,  655 => 331,  652 => 330,  650 => 329,  645 => 327,  641 => 326,  637 => 324,  633 => 323,  619 => 321,  617 => 320,  612 => 318,  608 => 317,  603 => 314,  599 => 312,  593 => 310,  591 => 309,  587 => 307,  581 => 305,  579 => 304,  575 => 303,  568 => 301,  559 => 300,  556 => 299,  551 => 298,  522 => 272,  506 => 259,  502 => 258,  493 => 252,  489 => 251,  485 => 250,  481 => 249,  477 => 248,  469 => 243,  462 => 239,  453 => 232,  444 => 229,  437 => 228,  433 => 227,  423 => 220,  413 => 213,  409 => 212,  405 => 211,  395 => 204,  391 => 203,  382 => 197,  365 => 183,  350 => 171,  338 => 162,  326 => 153,  314 => 144,  297 => 129,  291 => 125,  285 => 121,  283 => 120,  273 => 115,  267 => 111,  261 => 108,  257 => 106,  255 => 105,  250 => 103,  243 => 99,  227 => 85,  220 => 80,  217 => 79,  211 => 76,  206 => 73,  203 => 72,  197 => 69,  193 => 67,  191 => 66,  187 => 65,  180 => 60,  178 => 59,  158 => 42,  152 => 39,  146 => 36,  135 => 28,  124 => 20,  120 => 19,  112 => 14,  103 => 7,  90 => 6,  66 => 4,  43 => 2,);
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
            <a href=\"{{ path('app_admin_location_index') }}\" class=\"btn btn-outline-info me-2\">
                <i class=\"fas fa-map-marker-alt me-2\"></i> Emplacements
            </a>
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
                            {% if companyType != 'restaurant' %}
                            <div class=\"mb-3\">
                                <label class=\"text-muted small fw-bold\">Prix de vente</label>
                                <div class=\"fw-bold text-success\">{{ product.salePrice|price_with_currency(product.hmaService) }}</div>
                            </div>
                            {% endif %}
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
            <a href=\"{{ path('app_admin_stock_batch_index', {'productId': product.id}) }}\" class=\"btn btn-outline-secondary btn-sm\">
                <i class=\"fas fa-undo me-1\"></i> Effacer
            </a>
            <button type=\"submit\" form=\"filter-form\" class=\"btn btn-primary btn-sm\">
                <i class=\"fas fa-search me-1\"></i> Filtrer
            </button>
        </div>
    </div>
    <div class=\"card-body\">
        <form method=\"get\" id=\"filter-form\">
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
                    <label class=\"form-label fw-bold\">Stock faible</label>
                    <select name=\"low_stock\" class=\"form-select\">
                        <option value=\"\">Tous</option>
                        <option value=\"yes\" {{ filters.low_stock|default('') == 'yes' ? 'selected' }}>≤ 10 unités</option>
                    </select>
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label fw-bold\">Emplacement</label>
                    <select name=\"location\" id=\"location-select\" class=\"form-select select2-location\">
                        <option value=\"\">-- Tous les emplacements --</option>
                        {% for loc in all_locations|default(locations) %}
                            <option value=\"{{ loc }}\" {{ filters.location|default('') == loc ? 'selected' }}>
                                {{ loc }}
                            </option>
                        {% endfor %}
                    </select>
                </div>
            </div>

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
                        <option value=\"asc\" {{ filters.direction|default('asc') == 'asc' ? 'selected' }}>Croissant ↑</option>
                        <option value=\"desc\" {{ filters.direction|default('asc') == 'desc' ? 'selected' }}>Décroissant ↓</option>
                    </select>
                </div>
            </div>
        </form>
    </div>
</div>

    <!-- Tableau des lots -->
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
                            <th style=\"width:40px;\"><input type=\"checkbox\" id=\"select-all-checkbox\" class=\"form-check-input\"></th>
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
                            {% set locationDisplay = batch.locationEntity ? batch.locationEntity.displayName : (batch.location ?: '—') %}
                            <tr class=\"{% if batch.isActive and batch.expiryDate and batch.expiryDate < date() %}table-danger{% elseif batch.currentQuantity <= 10 %}table-warning{% endif %}\">
                                <td><input type=\"checkbox\" class=\"form-check-input batch-checkbox\" value=\"{{ batch.id }}\" data-batch-number=\"{{ batch.batchNumber }}\"></td>
                                <td>
                                    <strong>{{ batch.batchNumber }}</strong>
                                    {% if batch.purchaseItem %}
                                        <br><small class=\"text-muted\"><i class=\"fas fa-receipt me-1\"></i> Achat #{{ batch.purchaseItem.purchase.purchaseNumber }}</small>
                                    {% endif %}
                                </td>
                                <td>
                                    {% if locationDisplay != '—' %}
                                        <span class=\"badge bg-info text-dark\"><i class=\"fas fa-map-marker-alt me-1\"></i> {{ locationDisplay }}</span>
                                    {% else %}
                                        <span class=\"text-muted\">—</span>
                                    {% endif %}
                                </td>
                                <td>
                                    <div>
                                        <span class=\"fw-bold\">{{ batch.currentQuantity }}</span>
                                        <small class=\"text-muted\">/ {{ batch.initialQuantity }}</small>
                                        <div class=\"progress mt-1\" style=\"height:4px; width:80px;\">
                                            {% set percentage = (batch.currentQuantity / batch.initialQuantity * 100)|round %}
                                            <div class=\"progress-bar {% if percentage <= 10 %}bg-danger{% elseif percentage <= 30 %}bg-warning{% else %}bg-success{% endif %}\" style=\"width:{{ percentage }}%\"></div>
                                        </div>
                                        {% if batch.currentQuantity <= 10 %}<br><span class=\"badge bg-warning text-dark mt-1\">Stock faible</span>{% endif %}
                                    </div>
                                </td>
                                <td>{{ batch.unitPrice|price_with_currency(batch.hmaService) }}</td>
                                <td>{{ batch.manufacturingDate ? batch.manufacturingDate|date('d/m/Y') : '—' }}</td>
                                <td>
                                    {% if batch.expiryDate %}
                                        <div>
                                            <span class=\"text-dark fw-bold\">{{ batch.expiryDate|date('d/m/Y') }}</span>
                                            {% if batch.expiryDate < date() %}<br><span class=\"badge bg-danger mt-1\">Expiré</span>
                                            {% elseif batch.expiryDate < date('+30 days') %}<br><span class=\"badge bg-warning text-dark mt-1\">Bientôt</span>{% endif %}
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
                                        <a href=\"{{ path('app_admin_stock_batch_print', {'id': batch.id}) }}\" class=\"btn btn-sm btn-outline-secondary\" title=\"Imprimer\" target=\"_blank\"><i class=\"fas fa-print\"></i></a>
                                        <a href=\"{{ path('app_admin_stock_batch_show', {'id': batch.id}) }}\" class=\"btn btn-sm btn-outline-primary\" title=\"Voir\"><i class=\"fas fa-eye\"></i></a>
                                        <a href=\"{{ path('app_admin_stock_batch_edit', {'id': batch.id}) }}\" class=\"btn btn-sm btn-outline-warning\" title=\"Modifier\"><i class=\"fas fa-map-marker-alt\"></i></a>
                                        <button type=\"button\" class=\"btn btn-sm btn-outline-info toggle-batch-btn\" data-batch-id=\"{{ batch.id }}\" data-is-active=\"{{ batch.isActive ? '1' : '0' }}\" data-batch-number=\"{{ batch.batchNumber }}\" data-token=\"{{ csrf_token('toggle-batch' ~ batch.id) }}\" title=\"{{ batch.isActive ? 'Désactiver' : 'Activer' }}\"><i class=\"fas {{ batch.isActive ? 'fa-toggle-on' : 'fa-toggle-off' }}\"></i></button>
                                        {% if is_granted('ROLE_ADMIN') and batch.stockMovements|length == 0 %}
                                            <button type=\"button\" class=\"btn btn-sm btn-outline-danger delete-batch-btn\" data-batch-id=\"{{ batch.id }}\" data-batch-number=\"{{ batch.batchNumber }}\" data-token=\"{{ csrf_token('delete-batch' ~ batch.id) }}\" title=\"Supprimer\"><i class=\"fas fa-trash\"></i></button>
                                        {% endif %}
                                    </div>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"9\" class=\"text-center py-5\">
                                    <i class=\"fas fa-box-open fa-3x text-muted mb-3\"></i>
                                    <p class=\"text-muted mb-0\">Aucun lot trouvé pour ce produit</p>
                                    <a href=\"{{ path('purchase_cart') }}\" class=\"btn btn-sm btn-primary mt-3\"><i class=\"fas fa-cart-plus me-1\"></i> Créer un achat</a>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modales -->
<div class=\"modal fade\" id=\"printOptionsModal\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-primary text-white\">
                <h5 class=\"modal-title\"><i class=\"fas fa-print me-2\"></i> Options d'impression</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"alert alert-info\"><i class=\"fas fa-info-circle me-2\"></i> <span id=\"selectedCount\">0</span> lot(s) sélectionné(s) dans le tableau</div>
                <div class=\"d-grid gap-2\">
                    <button type=\"button\" class=\"btn btn-primary\" id=\"printSelectedBtn\"><i class=\"fas fa-print me-2\"></i> Imprimer la sélection</button>
                    <button type=\"button\" class=\"btn btn-outline-primary\" id=\"printAllBtn\"><i class=\"fas fa-print me-2\"></i> Imprimer tous les lots</button>
                </div>
            </div>
            <div class=\"modal-footer\"><button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button></div>
        </div>
    </div>
</div>

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
                <h5 class=\"modal-title\"><i class=\"fas fa-exclamation-triangle me-2\"></i> Supprimer le lot</h5>
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
<!-- Select2 CSS et JS -->
<link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
<link href=\"https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css\" rel=\"stylesheet\" />
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/fr.js\"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // ========== INITIALISATION SELECT2 POUR EMPLACEMENT ==========
    \$('#location-select').select2({
        theme: 'bootstrap-5',
        language: 'fr',
        placeholder: \"-- Tous les emplacements --\",
        allowClear: true,
        width: '100%'
    });

    // ========== SÉLECTION MULTIPLE ==========
    const selectAllCheckbox = document.getElementById('select-all-checkbox');
    const batchCheckboxes = document.querySelectorAll('.batch-checkbox');
    const selectedCountSpan = document.getElementById('selectedCount');
    
    function updateSelectedCount() {
        const selected = document.querySelectorAll('.batch-checkbox:checked').length;
        if (selectedCountSpan) selectedCountSpan.textContent = selected;
    }
    
    if (selectAllCheckbox) {
        selectAllCheckbox.addEventListener('change', function() {
            batchCheckboxes.forEach(cb => cb.checked = selectAllCheckbox.checked);
            updateSelectedCount();
        });
    }
    
    document.getElementById('selectAllBtn')?.addEventListener('click', function() {
        batchCheckboxes.forEach(cb => cb.checked = true);
        if (selectAllCheckbox) selectAllCheckbox.checked = true;
        updateSelectedCount();
    });
    
    document.getElementById('deselectAllBtn')?.addEventListener('click', function() {
        batchCheckboxes.forEach(cb => cb.checked = false);
        if (selectAllCheckbox) selectAllCheckbox.checked = false;
        updateSelectedCount();
    });
    
    batchCheckboxes.forEach(cb => {
        cb.addEventListener('change', function() {
            updateSelectedCount();
            if (selectAllCheckbox) {
                selectAllCheckbox.checked = batchCheckboxes.length === document.querySelectorAll('.batch-checkbox:checked').length;
            }
        });
    });
    
    updateSelectedCount();
    
    // ========== IMPRESSION ==========
    document.getElementById('printSelectedBtn')?.addEventListener('click', function() {
        const selected = Array.from(document.querySelectorAll('.batch-checkbox:checked')).map(cb => cb.value);
        if (selected.length === 0) { alert('Veuillez sélectionner au moins un lot.'); return; }
        window.open('/admin/stock-batch/print-multiple?ids=' + selected.join(','), '_blank');
        bootstrap.Modal.getInstance(document.getElementById('printOptionsModal'))?.hide();
    });
    
    document.getElementById('printAllBtn')?.addEventListener('click', function() {
        const allIds = Array.from(document.querySelectorAll('.batch-checkbox')).map(cb => cb.value);
        if (allIds.length === 0) { alert('Aucun lot à imprimer.'); return; }
        window.open('/admin/stock-batch/print-multiple?ids=' + allIds.join(','), '_blank');
        bootstrap.Modal.getInstance(document.getElementById('printOptionsModal'))?.hide();
    });
    
    // ========== TOGGLE STATUT ==========
    const toggleModal = new bootstrap.Modal(document.getElementById('toggleBatchModal'));
    document.querySelectorAll('.toggle-batch-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const batchId = this.dataset.batchId, isActive = this.dataset.isActive === '1', token = this.dataset.token, batchNumber = this.dataset.batchNumber;
            document.getElementById('toggleBatchMessage').textContent = 'Êtes-vous sûr de vouloir ' + (isActive ? 'désactiver' : 'activer') + ' le lot \"' + batchNumber + '\" ?';
            document.getElementById('toggleBatchForm').action = '/admin/stock-batch/' + batchId + '/toggle';
            document.getElementById('toggleBatchToken').value = token;
            const btn = document.getElementById('toggleBatchBtn');
            btn.className = isActive ? 'btn btn-danger' : 'btn btn-success';
            btn.textContent = isActive ? 'Désactiver' : 'Activer';
            toggleModal.show();
        });
    });
    
    // ========== SUPPRESSION ==========
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteBatchModal'));
    document.querySelectorAll('.delete-batch-btn:not([disabled])').forEach(btn => {
        btn.addEventListener('click', function() {
            const batchId = this.dataset.batchId, batchNumber = this.dataset.batchNumber, token = this.dataset.token;
            document.getElementById('deleteBatchMessage').innerHTML = '<div class=\"alert alert-warning\">⚠️ Cette action est irréversible.</div><p>Supprimer le lot <strong>' + batchNumber + '</strong> ?</p><p class=\"text-danger mb-0\"><small>Cette suppression n\\'est possible que si aucun mouvement de stock n\\'est associé.</small></p>';
            document.getElementById('deleteBatchForm').action = '/admin/stock-batch/' + batchId + '/delete';
            document.getElementById('deleteBatchToken').value = token;
            deleteModal.show();
        });
    });
});
</script>
{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
.table-hover tbody tr:hover { background-color: rgba(102, 126, 234, 0.05); cursor: pointer; }
.progress { border-radius: 10px; overflow: hidden; }
.card { transition: transform 0.2s, box-shadow 0.2s; }
.card:hover { transform: translateY(-2px); box-shadow: 0 5px 20px rgba(0,0,0,0.1) !important; }
.badge { font-weight: 500; }
.btn-group .btn { padding: 0.25rem 0.5rem; }
.table td { vertical-align: middle; }

/* Style Select2 */
.select2-container--bootstrap-5 .select2-selection {
    border-radius: 0.375rem;
    border-color: #dee2e6;
    min-height: 38px;
}
.select2-container--bootstrap-5 .select2-selection--single .select2-selection__rendered {
    line-height: 36px;
    padding-left: 12px;
}
.select2-container--bootstrap-5 .select2-selection--single .select2-selection__arrow {
    height: 36px;
}
</style>
{% endblock %}", "admin/stock_batch/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\stock_batch\\index.html.twig");
    }
}
