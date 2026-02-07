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
class __TwigTemplate_d1cac46c5d001d216086d09c95acf777 extends Template
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

        yield "Lots de stock - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4), "html", null, true);
        yield " - HMA Market";
        
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
    <!-- En-tête avec navigation -->
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20)), "truncate", [20, "..."], "method", false, false, false, 20), "html", null, true);
        yield "
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <i class=\"fas fa-boxes me-1\"></i> Lots de stock
                    </li>
                </ol>
            </nav>
            
            <div class=\"d-flex align-items-center\">
                <a href=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30)]), "html", null, true);
        yield "\" 
                   class=\"btn btn-outline-secondary me-3 btn-hover-scale\">
                    <i class=\"fas fa-arrow-left me-1\"></i> Retour au produit
                </a>
                <h1 class=\"h3 mb-0 text-gray-800\">
                    <i class=\"fas fa-boxes me-2\"></i> Lots de stock
                    <small class=\"text-muted\">- ";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 36, $this->source); })()), "name", [], "any", false, false, false, 36), "html", null, true);
        yield "</small>
                </h1>
            </div>
            <p class=\"text-muted mt-2\">Gérez les lots de stock pour ce produit</p>
        </div>
        <div>
            <a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_purchase_new");
        yield "\" 
               class=\"btn btn-primary btn-lg\">
                <i class=\"fas fa-cart-plus me-2\"></i> Nouvel achat
            </a>
        </div>
    </div>

    <!-- Alertes flash -->
    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "flashes", ["success"], "method", false, false, false, 50));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 51
            yield "        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
            <i class=\"fas fa-check-circle me-2\"></i> ";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "    
    ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "flashes", ["error"], "method", false, false, false, 57));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 58
            yield "        <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
            <i class=\"fas fa-exclamation-circle me-2\"></i> ";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        yield "
    <!-- Statistiques -->
    ";
        // line 65
        $context["today"] = $this->extensions['Twig\Extension\CoreExtension']->convertDate("today");
        // line 66
        yield "    ";
        $context["thirtyDays"] = $this->extensions['Twig\Extension\CoreExtension']->modifyDate($this->extensions['Twig\Extension\CoreExtension']->convertDate("today"), "+30 days");
        // line 67
        yield "    
    ";
        // line 68
        $context["inactiveBatches"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["stockBatches"]) || array_key_exists("stockBatches", $context) ? $context["stockBatches"] : (function () { throw new RuntimeError('Variable "stockBatches" does not exist.', 68, $this->source); })()), function ($__b__) use ($context, $macros) { $context["b"] = $__b__; return (( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 68, $this->source); })()), "isActive", [], "any", false, false, false, 68) || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 68, $this->source); })()), "remainingQuantity", [], "any", false, false, false, 68) <= 0)) || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 68, $this->source); })()), "hasExpiryDate", [], "method", false, false, false, 68) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 68, $this->source); })()), "expiryDate", [], "any", false, false, false, 68) < (isset($context["today"]) || array_key_exists("today", $context) ? $context["today"] : (function () { throw new RuntimeError('Variable "today" does not exist.', 68, $this->source); })())))); }));
        // line 69
        yield "    
    <div class=\"row mb-4\">
        <div class=\"col-xl-3 col-md-6 mb-4\">
            <div class=\"card border-left-primary shadow h-100 py-2\">
                <div class=\"card-body\">
                    <div class=\"row no-gutters align-items-center\">
                        <div class=\"col mr-2\">
                            <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                                Stock total
                            </div>
                            <div class=\"h5 mb-0 font-weight-bold text-gray-800\">";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalQuantity"]) || array_key_exists("totalQuantity", $context) ? $context["totalQuantity"] : (function () { throw new RuntimeError('Variable "totalQuantity" does not exist.', 79, $this->source); })()), "html", null, true);
        yield "</div>
                            <div class=\"mt-1 small\">
                                ";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 81, $this->source); })()), "stockQuantity", [], "any", false, false, false, 81), "html", null, true);
        yield " unités (produit)
                            </div>
                        </div>
                        <div class=\"col-auto\">
                            <i class=\"fas fa-box fa-2x text-primary\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-xl-3 col-md-6 mb-4\">
            <div class=\"card border-left-success shadow h-100 py-2\">
                <div class=\"card-body\">
                    <div class=\"row no-gutters align-items-center\">
                        <div class=\"col mr-2\">
                            <div class=\"text-xs font-weight-bold text-success text-uppercase mb-1\">
                                Lots actifs
                            </div>
                            <div class=\"h5 mb-0 font-weight-bold text-gray-800\">";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activeBatches"]) || array_key_exists("activeBatches", $context) ? $context["activeBatches"] : (function () { throw new RuntimeError('Variable "activeBatches" does not exist.', 100, $this->source); })()), "html", null, true);
        yield "</div>
                            <div class=\"mt-1 small\">
                                Disponibles en vente
                            </div>
                        </div>
                        <div class=\"col-auto\">
                            <i class=\"fas fa-check-circle fa-2x text-success\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-xl-3 col-md-6 mb-4\">
            <div class=\"card border-left-secondary shadow h-100 py-2\">
                <div class=\"card-body\">
                    <div class=\"row no-gutters align-items-center\">
                        <div class=\"col mr-2\">
                            <div class=\"text-xs font-weight-bold text-secondary text-uppercase mb-1\">
                                Lots inactifs
                            </div>
                            <div class=\"h5 mb-0 font-weight-bold text-gray-800\">";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["inactiveBatches"]) || array_key_exists("inactiveBatches", $context) ? $context["inactiveBatches"] : (function () { throw new RuntimeError('Variable "inactiveBatches" does not exist.', 121, $this->source); })()), "html", null, true);
        yield "</div>
                            <div class=\"mt-1 small\">
                                Épuisés, expirés ou désactivés
                            </div>
                        </div>
                        <div class=\"col-auto\">
                            <i class=\"fas fa-times-circle fa-2x text-secondary\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        ";
        // line 134
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 134, $this->source); })()), "hasExpiryDate", [], "method", false, false, false, 134)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 135
            yield "        <div class=\"col-xl-3 col-md-6 mb-4\">
            <div class=\"card border-left-warning shadow h-100 py-2\">
                <div class=\"card-body\">
                    <div class=\"row no-gutters align-items-center\">
                        <div class=\"col mr-2\">
                            <div class=\"text-xs font-weight-bold text-warning text-uppercase mb-1\">
                                À expirer (30j)
                            </div>
                            <div class=\"h5 mb-0 font-weight-bold text-gray-800\">";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["expiringSoon"]) || array_key_exists("expiringSoon", $context) ? $context["expiringSoon"] : (function () { throw new RuntimeError('Variable "expiringSoon" does not exist.', 143, $this->source); })()), "html", null, true);
            yield "</div>
                            <div class=\"mt-1 small\">
                                Expirent avant ";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["thirtyDays"]) || array_key_exists("thirtyDays", $context) ? $context["thirtyDays"] : (function () { throw new RuntimeError('Variable "thirtyDays" does not exist.', 145, $this->source); })()), "d/m/Y"), "html", null, true);
            yield "
                            </div>
                        </div>
                        <div class=\"col-auto\">
                            <i class=\"fas fa-exclamation-triangle fa-2x text-warning\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
        } else {
            // line 156
            yield "        <div class=\"col-xl-3 col-md-6 mb-4\">
            <div class=\"card border-left-info shadow h-100 py-2\">
                <div class=\"card-body\">
                    <div class=\"row no-gutters align-items-center\">
                        <div class=\"col mr-2\">
                            <div class=\"text-xs font-weight-bold text-info text-uppercase mb-1\">
                                Valeur stock
                            </div>
                            <div class=\"h5 mb-0 font-weight-bold text-gray-800\">
                                ";
            // line 165
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 165, $this->source); })()), "stockQuantity", [], "any", false, false, false, 165) * CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 165, $this->source); })()), "purchasePrice", [], "any", false, false, false, 165)), 0, ",", " "), "html", null, true);
            yield " XAF
                            </div>
                            <div class=\"mt-1 small\">
                                ";
            // line 168
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 168, $this->source); })()), "purchasePrice", [], "any", false, false, false, 168), 0, ",", " "), "html", null, true);
            yield " XAF/unité
                            </div>
                        </div>
                        <div class=\"col-auto\">
                            <i class=\"fas fa-coins fa-2x text-info\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
        }
        // line 179
        yield "    </div>

    <!-- Barre de recherche et filtres -->
    <div class=\"card shadow mb-4\">
        <div class=\"card-body\">
            <div class=\"row align-items-center\">
                <div class=\"col-md-8 mb-3 mb-md-0\">
                    <div class=\"d-flex align-items-center\">
                        <span class=\"me-3 text-muted\">Filtrer :</span>
                        <div class=\"btn-group flex-wrap\" role=\"group\">
                            <a href=\"";
        // line 189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_index", ["productId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 189, $this->source); })()), "id", [], "any", false, false, false, 189)]), "html", null, true);
        yield "\" 
                               class=\"btn btn-outline-secondary ";
        // line 190
        yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 190, $this->source); })()), "request", [], "any", false, false, false, 190), "query", [], "any", false, false, false, 190), "has", ["status"], "method", false, false, false, 190)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : (""));
        yield "\">
                                Tous (";
        // line 191
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 191, $this->source); })()), "html", null, true);
        yield ")
                            </a>
                            <a href=\"";
        // line 193
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_index", ["productId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 193, $this->source); })()), "id", [], "any", false, false, false, 193), "status" => "active"]), "html", null, true);
        yield "\" 
                               class=\"btn btn-outline-success\">
                                Actifs (";
        // line 195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activeBatches"]) || array_key_exists("activeBatches", $context) ? $context["activeBatches"] : (function () { throw new RuntimeError('Variable "activeBatches" does not exist.', 195, $this->source); })()), "html", null, true);
        yield ")
                            </a>
                            <a href=\"";
        // line 197
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_index", ["productId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 197, $this->source); })()), "id", [], "any", false, false, false, 197), "status" => "inactive"]), "html", null, true);
        yield "\" 
                               class=\"btn btn-outline-secondary\">
                                Inactifs (";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["inactiveBatches"]) || array_key_exists("inactiveBatches", $context) ? $context["inactiveBatches"] : (function () { throw new RuntimeError('Variable "inactiveBatches" does not exist.', 199, $this->source); })()), "html", null, true);
        yield ")
                            </a>
                            ";
        // line 201
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 201, $this->source); })()), "hasExpiryDate", [], "method", false, false, false, 201)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 202
            yield "                                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_index", ["productId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 202, $this->source); })()), "id", [], "any", false, false, false, 202), "status" => "expired"]), "html", null, true);
            yield "\" 
                                   class=\"btn btn-outline-danger\">
                                    Expirés
                                </a>
                                <a href=\"";
            // line 206
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_index", ["productId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 206, $this->source); })()), "id", [], "any", false, false, false, 206), "status" => "expiring-soon"]), "html", null, true);
            yield "\" 
                                   class=\"btn btn-outline-warning\">
                                    Bientôt expirés
                                </a>
                            ";
        }
        // line 211
        yield "                            <a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_index", ["productId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 211, $this->source); })()), "id", [], "any", false, false, false, 211), "status" => "low-quantity"]), "html", null, true);
        yield "\" 
                               class=\"btn btn-outline-warning\">
                                Faible quantité
                            </a>
                            <a href=\"";
        // line 215
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_index", ["productId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 215, $this->source); })()), "id", [], "any", false, false, false, 215), "status" => "empty"]), "html", null, true);
        yield "\" 
                               class=\"btn btn-outline-danger\">
                                Stock épuisé
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 text-md-end\">
                    ";
        // line 223
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 223, $this->source); })()), "hasExpiryDate", [], "method", false, false, false, 223)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 224
            yield "                        <div class=\"input-group\">
                            <input type=\"date\" 
                                   class=\"form-control\" 
                                   id=\"expiryDateFilter\"
                                   onchange=\"filterByExpiryDate(this.value)\">
                            <button class=\"btn btn-outline-secondary\" type=\"button\" onclick=\"clearExpiryFilter()\">
                                <i class=\"fas fa-times\"></i>
                            </button>
                        </div>
                    ";
        }
        // line 234
        yield "                </div>
            </div>
        </div>
    </div>

    <!-- Tableau des lots -->
    <div class=\"card shadow\">
        <div class=\"card-header bg-white py-3\">
            <h6 class=\"m-0 font-weight-bold text-primary\">
                <i class=\"fas fa-list me-2\"></i> Liste des lots de stock
                <span class=\"badge bg-primary ms-2\">";
        // line 244
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["stockBatches"]) || array_key_exists("stockBatches", $context) ? $context["stockBatches"] : (function () { throw new RuntimeError('Variable "stockBatches" does not exist.', 244, $this->source); })())), "html", null, true);
        yield "</span>
            </h6>
        </div>
        <div class=\"card-body\">
            ";
        // line 248
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["stockBatches"]) || array_key_exists("stockBatches", $context) ? $context["stockBatches"] : (function () { throw new RuntimeError('Variable "stockBatches" does not exist.', 248, $this->source); })())) > 0)) {
            // line 249
            yield "                <div class=\"table-responsive\">
                    <table class=\"table table-hover\">
                        <thead>
                            <tr>
                                <th>N° Lot</th>
                                <th>Prix d'achat</th>
                                <th>Quantité</th>
                                ";
            // line 256
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 256, $this->source); })()), "hasExpiryDate", [], "method", false, false, false, 256)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 257
                yield "                                    <th>Date fabrication</th>
                                    <th>Date expiration</th>
                                ";
            }
            // line 260
            yield "                                <th>Statut</th>
                                <th>Créé le</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 266
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["stockBatches"]) || array_key_exists("stockBatches", $context) ? $context["stockBatches"] : (function () { throw new RuntimeError('Variable "stockBatches" does not exist.', 266, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["batch"]) {
                // line 267
                yield "                                ";
                $context["isExpired"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 267, $this->source); })()), "hasExpiryDate", [], "method", false, false, false, 267) && (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 267) < (isset($context["today"]) || array_key_exists("today", $context) ? $context["today"] : (function () { throw new RuntimeError('Variable "today" does not exist.', 267, $this->source); })())));
                // line 268
                yield "                                ";
                $context["isExpiringSoon"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 268, $this->source); })()), "hasExpiryDate", [], "method", false, false, false, 268) && (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 268) >= (isset($context["today"]) || array_key_exists("today", $context) ? $context["today"] : (function () { throw new RuntimeError('Variable "today" does not exist.', 268, $this->source); })()))) && (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 268) <= (isset($context["thirtyDays"]) || array_key_exists("thirtyDays", $context) ? $context["thirtyDays"] : (function () { throw new RuntimeError('Variable "thirtyDays" does not exist.', 268, $this->source); })())));
                // line 269
                yield "                                ";
                $context["isInactive"] = (( !CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 269) || (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "remainingQuantity", [], "any", false, false, false, 269) <= 0)) || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 269, $this->source); })()), "hasExpiryDate", [], "method", false, false, false, 269) && (isset($context["isExpired"]) || array_key_exists("isExpired", $context) ? $context["isExpired"] : (function () { throw new RuntimeError('Variable "isExpired" does not exist.', 269, $this->source); })())));
                // line 270
                yield "                                
                                <tr class=\"";
                // line 271
                if ((($tmp = (isset($context["isExpired"]) || array_key_exists("isExpired", $context) ? $context["isExpired"] : (function () { throw new RuntimeError('Variable "isExpired" does not exist.', 271, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "table-danger";
                } elseif ((($tmp = (isset($context["isExpiringSoon"]) || array_key_exists("isExpiringSoon", $context) ? $context["isExpiringSoon"] : (function () { throw new RuntimeError('Variable "isExpiringSoon" does not exist.', 271, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "table-warning";
                } elseif ((($tmp = (isset($context["isInactive"]) || array_key_exists("isInactive", $context) ? $context["isInactive"] : (function () { throw new RuntimeError('Variable "isInactive" does not exist.', 271, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "table-secondary";
                }
                yield "\">
                                    <td>
                                        <strong>";
                // line 273
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "batchNumber", [], "any", false, false, false, 273), "html", null, true);
                yield "</strong>
                                        ";
                // line 274
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "remainingQuantity", [], "any", false, false, false, 274) <= 0)) {
                    // line 275
                    yield "                                            <br><small class=\"text-danger\">Épuisé</small>
                                        ";
                }
                // line 277
                yield "                                    </td>
                                    <td>
                                        ";
                // line 279
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "purchasePrice", [], "any", false, false, false, 279), 0, ",", " "), "html", null, true);
                yield " XAF
                                    </td>
                                    <td>
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"progress flex-grow-1 me-2\" style=\"height: 8px;\">
                                                ";
                // line 284
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "quantity", [], "any", false, false, false, 284) > 0)) {
                    // line 285
                    yield "                                                    <div class=\"progress-bar ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "remainingQuantity", [], "any", false, false, false, 285) <= 0)) {
                        yield "bg-danger";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "remainingQuantity", [], "any", false, false, false, 285) <= (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "quantity", [], "any", false, false, false, 285) * 0.2))) {
                        yield "bg-danger";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "remainingQuantity", [], "any", false, false, false, 285) <= (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "quantity", [], "any", false, false, false, 285) * 0.5))) {
                        yield "bg-warning";
                    } else {
                        yield "bg-success";
                    }
                    yield "\" 
                                                         role=\"progressbar\" 
                                                         style=\"width: ";
                    // line 287
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "remainingQuantity", [], "any", false, false, false, 287) / CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "quantity", [], "any", false, false, false, 287)) * 100), "html", null, true);
                    yield "%\">
                                                    </div>
                                                ";
                } else {
                    // line 290
                    yield "                                                    <div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 100%\"></div>
                                                ";
                }
                // line 292
                yield "                                            </div>
                                            <span class=\"text-nowrap\">
                                                ";
                // line 294
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "remainingQuantity", [], "any", false, false, false, 294), "html", null, true);
                yield "/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "quantity", [], "any", false, false, false, 294), "html", null, true);
                yield "
                                            </span>
                                        </div>
                                    </td>
                                    ";
                // line 298
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 298, $this->source); })()), "hasExpiryDate", [], "method", false, false, false, 298)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 299
                    yield "                                        <td>
                                            ";
                    // line 300
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "manufacturingDate", [], "any", false, false, false, 300), "d/m/Y"), "html", null, true);
                    yield "
                                        </td>
                                        <td>
                                            <div class=\"d-flex align-items-center\">
                                                ";
                    // line 304
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 304), "d/m/Y"), "html", null, true);
                    yield "
                                                ";
                    // line 305
                    if ((($tmp = (isset($context["isExpired"]) || array_key_exists("isExpired", $context) ? $context["isExpired"] : (function () { throw new RuntimeError('Variable "isExpired" does not exist.', 305, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 306
                        yield "                                                    <span class=\"badge bg-danger ms-2\">Expiré</span>
                                                ";
                    } elseif ((($tmp =                     // line 307
(isset($context["isExpiringSoon"]) || array_key_exists("isExpiringSoon", $context) ? $context["isExpiringSoon"] : (function () { throw new RuntimeError('Variable "isExpiringSoon" does not exist.', 307, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 308
                        yield "                                                    <span class=\"badge bg-warning ms-2\">Bientôt</span>
                                                ";
                    }
                    // line 310
                    yield "                                            </div>
                                        </td>
                                    ";
                }
                // line 313
                yield "                                    <td>
                                        <span class=\"badge ";
                // line 314
                yield ((((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 314) &&  !(isset($context["isExpired"]) || array_key_exists("isExpired", $context) ? $context["isExpired"] : (function () { throw new RuntimeError('Variable "isExpired" does not exist.', 314, $this->source); })())) && (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "remainingQuantity", [], "any", false, false, false, 314) > 0))) ? ("bg-success") : ("bg-secondary"));
                yield "\">
                                            ";
                // line 315
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "remainingQuantity", [], "any", false, false, false, 315) <= 0)) {
                    // line 316
                    yield "                                                Épuisé
                                            ";
                } elseif ((($tmp =                 // line 317
(isset($context["isExpired"]) || array_key_exists("isExpired", $context) ? $context["isExpired"] : (function () { throw new RuntimeError('Variable "isExpired" does not exist.', 317, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 318
                    yield "                                                Expiré
                                            ";
                } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,                 // line 319
$context["batch"], "isActive", [], "any", false, false, false, 319)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 320
                    yield "                                                Actif
                                            ";
                } else {
                    // line 322
                    yield "                                                Inactif
                                            ";
                }
                // line 324
                yield "                                        </span>
                                    </td>
                                    <td>
                                        ";
                // line 327
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "createdAt", [], "any", false, false, false, 327), "d/m/Y H:i"), "html", null, true);
                yield "
                                    </td>
                                    <td>
                                        <div class=\"btn-group btn-group-sm\" role=\"group\">
                                            <a href=\"";
                // line 331
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_show", ["productId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 331, $this->source); })()), "id", [], "any", false, false, false, 331), "id" => CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 331)]), "html", null, true);
                yield "\" 
                                               class=\"btn btn-outline-info\" title=\"Voir détails\">
                                                <i class=\"fas fa-eye\"></i>
                                            </a>
                                            <a href=\"";
                // line 335
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_edit", ["productId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 335, $this->source); })()), "id", [], "any", false, false, false, 335), "id" => CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 335)]), "html", null, true);
                yield "\" 
                                               class=\"btn btn-outline-warning\" title=\"Modifier\">
                                                <i class=\"fas fa-edit\"></i>
                                            </a>
                                            <form method=\"post\" 
                                                  action=\"";
                // line 340
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_toggle_status", ["productId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 340, $this->source); })()), "id", [], "any", false, false, false, 340), "id" => CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 340)]), "html", null, true);
                yield "\"
                                                  class=\"d-inline\">
                                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 342
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle-status" . CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 342))), "html", null, true);
                yield "\">
                                                <button type=\"submit\" 
                                                        class=\"btn btn-sm ";
                // line 344
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 344) &&  !(isset($context["isExpired"]) || array_key_exists("isExpired", $context) ? $context["isExpired"] : (function () { throw new RuntimeError('Variable "isExpired" does not exist.', 344, $this->source); })())) && (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "remainingQuantity", [], "any", false, false, false, 344) > 0))) {
                    yield "btn-outline-danger";
                } else {
                    yield "btn-outline-success";
                }
                yield "\"
                                                        title=\"";
                // line 345
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 345) &&  !(isset($context["isExpired"]) || array_key_exists("isExpired", $context) ? $context["isExpired"] : (function () { throw new RuntimeError('Variable "isExpired" does not exist.', 345, $this->source); })())) && (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "remainingQuantity", [], "any", false, false, false, 345) > 0))) {
                    yield "Désactiver";
                } else {
                    yield "Activer";
                }
                yield "\"
                                                        ";
                // line 346
                if (((isset($context["isExpired"]) || array_key_exists("isExpired", $context) ? $context["isExpired"] : (function () { throw new RuntimeError('Variable "isExpired" does not exist.', 346, $this->source); })()) || (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "remainingQuantity", [], "any", false, false, false, 346) <= 0))) {
                    yield "disabled";
                }
                yield ">
                                                    ";
                // line 347
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 347) &&  !(isset($context["isExpired"]) || array_key_exists("isExpired", $context) ? $context["isExpired"] : (function () { throw new RuntimeError('Variable "isExpired" does not exist.', 347, $this->source); })())) && (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "remainingQuantity", [], "any", false, false, false, 347) > 0))) {
                    // line 348
                    yield "                                                        <i class=\"fas fa-toggle-on\"></i>
                                                    ";
                } else {
                    // line 350
                    yield "                                                        <i class=\"fas fa-toggle-off\"></i>
                                                    ";
                }
                // line 352
                yield "                                                </button>
                                            </form>
                                            <button type=\"button\" 
                                                    class=\"btn btn-outline-danger delete-batch-btn\"
                                                    data-batch-id=\"";
                // line 356
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "id", [], "any", false, false, false, 356), "html", null, true);
                yield "\"
                                                    data-batch-number=\"";
                // line 357
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "batchNumber", [], "any", false, false, false, 357), "html", null, true);
                yield "\"
                                                    data-product-id=\"";
                // line 358
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 358, $this->source); })()), "id", [], "any", false, false, false, 358), "html", null, true);
                yield "\"
                                                    title=\"Supprimer\"
                                                    ";
                // line 360
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "remainingQuantity", [], "any", false, false, false, 360) > 0)) {
                    yield "disabled";
                }
                yield ">
                                                <i class=\"fas fa-trash\"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['batch'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 367
            yield "                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                ";
            // line 372
            if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 372, $this->source); })()) > 1)) {
                // line 373
                yield "                <div class=\"row mt-4\">
                    <div class=\"col-12\">
                        <nav aria-label=\"Pagination\">
                            <ul class=\"pagination justify-content-center\">
                                <!-- Premier & Précédent -->
                                ";
                // line 378
                if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 378, $this->source); })()) > 1)) {
                    // line 379
                    yield "                                    <li class=\"page-item\">
                                        <a class=\"page-link\" href=\"";
                    // line 380
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_index", ["productId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 380, $this->source); })()), "id", [], "any", false, false, false, 380), "page" => 1]), "html", null, true);
                    yield "\">
                                            <i class=\"fas fa-angle-double-left\"></i>
                                        </a>
                                    </li>
                                    <li class=\"page-item\">
                                        <a class=\"page-link\" href=\"";
                    // line 385
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_index", ["productId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 385, $this->source); })()), "id", [], "any", false, false, false, 385), "page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 385, $this->source); })()) - 1)]), "html", null, true);
                    yield "\">
                                            <i class=\"fas fa-chevron-left\"></i>
                                        </a>
                                    </li>
                                ";
                } else {
                    // line 390
                    yield "                                    <li class=\"page-item disabled\">
                                        <span class=\"page-link\"><i class=\"fas fa-angle-double-left\"></i></span>
                                    </li>
                                    <li class=\"page-item disabled\">
                                        <span class=\"page-link\"><i class=\"fas fa-chevron-left\"></i></span>
                                    </li>
                                ";
                }
                // line 397
                yield "
                                <!-- Pages numérotées -->
                                ";
                // line 399
                $context["startPage"] = max(1, ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 399, $this->source); })()) - 2));
                // line 400
                yield "                                ";
                $context["endPage"] = min((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 400, $this->source); })()), ((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 400, $this->source); })()) + 4));
                // line 401
                yield "                                
                                ";
                // line 402
                if (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 402, $this->source); })()) > 1)) {
                    // line 403
                    yield "                                    <li class=\"page-item disabled\"><span class=\"page-link\">...</span></li>
                                ";
                }
                // line 405
                yield "                                
                                ";
                // line 406
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 406, $this->source); })()), (isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 406, $this->source); })())));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 407
                    yield "                                    <li class=\"page-item ";
                    if (($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 407, $this->source); })()))) {
                        yield "active";
                    }
                    yield "\">
                                        <a class=\"page-link\" href=\"";
                    // line 408
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_index", ["productId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 408, $this->source); })()), "id", [], "any", false, false, false, 408), "page" => $context["page"]]), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "</a>
                                    </li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 411
                yield "                                
                                ";
                // line 412
                if (((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 412, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 412, $this->source); })()))) {
                    // line 413
                    yield "                                    <li class=\"page-item disabled\"><span class=\"page-link\">...</span></li>
                                ";
                }
                // line 415
                yield "
                                <!-- Suivant & Dernier -->
                                ";
                // line 417
                if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 417, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 417, $this->source); })()))) {
                    // line 418
                    yield "                                    <li class=\"page-item\">
                                        <a class=\"page-link\" href=\"";
                    // line 419
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_index", ["productId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 419, $this->source); })()), "id", [], "any", false, false, false, 419), "page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 419, $this->source); })()) + 1)]), "html", null, true);
                    yield "\">
                                            <i class=\"fas fa-chevron-right\"></i>
                                        </a>
                                    </li>
                                    <li class=\"page-item\">
                                        <a class=\"page-link\" href=\"";
                    // line 424
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_index", ["productId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 424, $this->source); })()), "id", [], "any", false, false, false, 424), "page" => (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 424, $this->source); })())]), "html", null, true);
                    yield "\">
                                            <i class=\"fas fa-angle-double-right\"></i>
                                        </a>
                                    </li>
                                ";
                } else {
                    // line 429
                    yield "                                    <li class=\"page-item disabled\">
                                        <span class=\"page-link\"><i class=\"fas fa-chevron-right\"></i></span>
                                    </li>
                                    <li class=\"page-item disabled\">
                                        <span class=\"page-link\"><i class=\"fas fa-angle-double-right\"></i></span>
                                    </li>
                                ";
                }
                // line 436
                yield "                            </ul>
                            
                            <div class=\"text-center text-muted small mt-2\">
                                Page ";
                // line 439
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 439, $this->source); })()), "html", null, true);
                yield " sur ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 439, $this->source); })()), "html", null, true);
                yield " - 
                                Affichage de ";
                // line 440
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["stockBatches"]) || array_key_exists("stockBatches", $context) ? $context["stockBatches"] : (function () { throw new RuntimeError('Variable "stockBatches" does not exist.', 440, $this->source); })())), "html", null, true);
                yield " lot(s) sur ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 440, $this->source); })()), "html", null, true);
                yield " au total
                            </div>
                        </nav>
                    </div>
                </div>
                ";
            }
            // line 446
            yield "            ";
        } else {
            // line 447
            yield "                <div class=\"text-center py-5\">
                    <i class=\"fas fa-box-open fa-4x text-muted mb-3\"></i>
                    <h4 class=\"text-muted\">Aucun lot de stock trouvé</h4>
                    <p class=\"text-muted mb-4\">Commencez par créer votre premier lot de stock via un nouvel achat</p>
                    <a href=\"";
            // line 451
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_purchase_new");
            yield "\" class=\"btn btn-primary\">
                        <i class=\"fas fa-cart-plus me-2\"></i> Nouvel achat
                    </a>
                </div>
            ";
        }
        // line 456
        yield "        </div>
    </div>

    <!-- Aperçu rapide du produit -->
    <div class=\"card shadow mt-4\">
        <div class=\"card-header bg-light py-3\">
            <h6 class=\"m-0 font-weight-bold\">
                <i class=\"fas fa-info-circle me-2\"></i> Informations du produit
            </h6>
        </div>
        <div class=\"card-body\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    ";
        // line 469
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 469, $this->source); })()), "image", [], "any", false, false, false, 469) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 469, $this->source); })()), "image", [], "any", false, false, false, 469) != "default-product.png"))) {
            // line 470
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 470, $this->source); })()), "image", [], "any", false, false, false, 470))), "html", null, true);
            yield "\" 
                             alt=\"";
            // line 471
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 471, $this->source); })()), "name", [], "any", false, false, false, 471), "html", null, true);
            yield "\"
                             class=\"img-fluid rounded\"
                             style=\"max-height: 150px; object-fit: contain;\">
                    ";
        } else {
            // line 475
            yield "                        <div class=\"bg-light rounded d-flex align-items-center justify-content-center\"
                             style=\"width: 100%; height: 150px;\">
                            <i class=\"fas fa-box fa-3x text-muted\"></i>
                        </div>
                    ";
        }
        // line 480
        yield "                </div>
                <div class=\"col-md-9\">
                    <h5>";
        // line 482
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 482, $this->source); })()), "name", [], "any", false, false, false, 482), "html", null, true);
        yield "</h5>
                    <div class=\"row\">
                        <div class=\"col-md-3\">
                            <small class=\"text-muted\">Code-barres :</small>
                            <div><strong>";
        // line 486
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 486, $this->source); })()), "barcode", [], "any", false, false, false, 486), "html", null, true);
        yield "</strong></div>
                        </div>
                        <div class=\"col-md-3\">
                            <small class=\"text-muted\">Catégorie :</small>
                            <div>";
        // line 490
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 490, $this->source); })()), "category", [], "any", false, false, false, 490), "name", [], "any", false, false, false, 490), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"col-md-3\">
                            <small class=\"text-muted\">Prix de vente :</small>
                            <div class=\"text-success\">";
        // line 494
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 494, $this->source); })()), "salePrice", [], "any", false, false, false, 494), 0, ",", " "), "html", null, true);
        yield " XAF</div>
                        </div>
                        <div class=\"col-md-3\">
                            <small class=\"text-muted\">Type :</small>
                            <div>
                                ";
        // line 499
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 499, $this->source); })()), "hasExpiryDate", [], "method", false, false, false, 499)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 500
            yield "                                    <span class=\"badge bg-warning text-dark\">
                                        <i class=\"fas fa-calendar-alt me-1\"></i> Périssable
                                    </span>
                                ";
        } else {
            // line 504
            yield "                                    <span class=\"badge bg-secondary\">
                                        <i class=\"fas fa-infinity me-1\"></i> Non périssable
                                    </span>
                                ";
        }
        // line 508
        yield "                            </div>
                        </div>
                    </div>
                    <div class=\"row mt-2\">
                        <div class=\"col-md-3\">
                            <small class=\"text-muted\">Stock total :</small>
                            <div class=\"h5 mb-0\">";
        // line 514
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 514, $this->source); })()), "stockQuantity", [], "any", false, false, false, 514), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"col-md-3\">
                            <small class=\"text-muted\">Stock min :</small>
                            <div>";
        // line 518
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 518, $this->source); })()), "minQuantity", [], "any", false, false, false, 518), "html", null, true);
        yield "</div>
                        </div>
                        <div class=\"col-md-3\">
                            <small class=\"text-muted\">Prix d'achat :</small>
                            <div class=\"text-primary\">";
        // line 522
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 522, $this->source); })()), "purchasePrice", [], "any", false, false, false, 522), 0, ",", " "), "html", null, true);
        yield " XAF</div>
                        </div>
                        <div class=\"col-md-3\">
                            <small class=\"text-muted\">Statut :</small>
                            <div>
                                <span class=\"badge ";
        // line 527
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 527, $this->source); })()), "isActive", [], "any", false, false, false, 527)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-danger"));
        yield "\">
                                    ";
        // line 528
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 528, $this->source); })()), "isActive", [], "any", false, false, false, 528)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Inactif"));
        yield "
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal suppression -->
<div class=\"modal fade\" id=\"deleteBatchModal\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">Confirmation de suppression</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <div id=\"deleteBatchMessage\"></div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"deleteBatchForm\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteBatchCsrfToken\">
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

    // line 562
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

        // line 563
        yield "<script>
document.addEventListener('DOMContentLoaded', function() {
    // Gestion de la suppression
    const deleteButtons = document.querySelectorAll('.delete-batch-btn:not([disabled])');
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteBatchModal'));
    const deleteForm = document.getElementById('deleteBatchForm');
    const deleteMessage = document.getElementById('deleteBatchMessage');
    const deleteCsrfToken = document.getElementById('deleteBatchCsrfToken');
    
    deleteButtons.forEach(button => {
        button.addEventListener('click', function() {
            const batchId = this.dataset.batchId;
            const batchNumber = this.dataset.batchNumber;
            const productId = this.dataset.productId;
            
            deleteMessage.innerHTML = `
                <div class=\"alert alert-warning\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i>
                    Cette action est irréversible et ajustera le stock total du produit.
                </div>
                <p>Êtes-vous sûr de vouloir supprimer le lot <strong>\"\${batchNumber}\"</strong> ?</p>
                <p class=\"text-danger small\">Le stock total du produit sera mis à jour.</p>
            `;
            
            deleteForm.action = `/admin/product/\${productId}/stock-batch/\${batchId}`;
            deleteCsrfToken.value = '";
        // line 588
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete"), "html", null, true);
        yield "';
            
            deleteModal.show();
        });
    });

    // Confirmation pour activation/désactivation
    const toggleButtons = document.querySelectorAll('form[action*=\"toggle-status\"] button[type=\"submit\"]:not([disabled])');
    toggleButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            const form = this.closest('form');
            const batchRow = this.closest('tr');
            const batchNumber = batchRow.querySelector('td strong').textContent.trim();
            const currentStatus = this.querySelector('i').classList.contains('fa-toggle-on');
            const action = currentStatus ? 'désactiver' : 'activer';
            
            if (!confirm(`Êtes-vous sûr de vouloir \${action} le lot \"\${batchNumber}\" ?`)) {
                e.preventDefault();
            }
        });
    });

    // Fonction pour filtrer par date d'expiration
    function filterByExpiryDate(date) {
        if (date) {
            window.location.href = '";
        // line 613
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_index", ["productId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 613, $this->source); })()), "id", [], "any", false, false, false, 613)]), "html", null, true);
        yield "?expiry_date=' + date;
        }
    }

    // Fonction pour effacer le filtre de date
    function clearExpiryFilter() {
        window.location.href = '";
        // line 619
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_index", ["productId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 619, $this->source); })()), "id", [], "any", false, false, false, 619)]), "html", null, true);
        yield "';
    }

    // Mise en évidence des lignes expirées ou en cours d'expiration
    const expiredRows = document.querySelectorAll('tr.table-danger');
    const expiringRows = document.querySelectorAll('tr.table-warning');
    const inactiveRows = document.querySelectorAll('tr.table-secondary');
    
    // Optionnel : Ajouter un effet au survol
    const allRows = document.querySelectorAll('tbody tr');
    allRows.forEach(row => {
        row.addEventListener('mouseenter', function() {
            if (!this.classList.contains('table-danger') && 
                !this.classList.contains('table-warning') && 
                !this.classList.contains('table-secondary')) {
                this.style.backgroundColor = '#f8f9fa';
            }
        });
        row.addEventListener('mouseleave', function() {
            if (!this.classList.contains('table-danger') && 
                !this.classList.contains('table-warning') && 
                !this.classList.contains('table-secondary')) {
                this.style.backgroundColor = '';
            }
        });
    });
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
        return array (  1158 => 619,  1149 => 613,  1121 => 588,  1094 => 563,  1081 => 562,  1037 => 528,  1033 => 527,  1025 => 522,  1018 => 518,  1011 => 514,  1003 => 508,  997 => 504,  991 => 500,  989 => 499,  981 => 494,  974 => 490,  967 => 486,  960 => 482,  956 => 480,  949 => 475,  942 => 471,  937 => 470,  935 => 469,  920 => 456,  912 => 451,  906 => 447,  903 => 446,  892 => 440,  886 => 439,  881 => 436,  872 => 429,  864 => 424,  856 => 419,  853 => 418,  851 => 417,  847 => 415,  843 => 413,  841 => 412,  838 => 411,  827 => 408,  820 => 407,  816 => 406,  813 => 405,  809 => 403,  807 => 402,  804 => 401,  801 => 400,  799 => 399,  795 => 397,  786 => 390,  778 => 385,  770 => 380,  767 => 379,  765 => 378,  758 => 373,  756 => 372,  749 => 367,  734 => 360,  729 => 358,  725 => 357,  721 => 356,  715 => 352,  711 => 350,  707 => 348,  705 => 347,  699 => 346,  691 => 345,  683 => 344,  678 => 342,  673 => 340,  665 => 335,  658 => 331,  651 => 327,  646 => 324,  642 => 322,  638 => 320,  636 => 319,  633 => 318,  631 => 317,  628 => 316,  626 => 315,  622 => 314,  619 => 313,  614 => 310,  610 => 308,  608 => 307,  605 => 306,  603 => 305,  599 => 304,  592 => 300,  589 => 299,  587 => 298,  578 => 294,  574 => 292,  570 => 290,  564 => 287,  550 => 285,  548 => 284,  540 => 279,  536 => 277,  532 => 275,  530 => 274,  526 => 273,  515 => 271,  512 => 270,  509 => 269,  506 => 268,  503 => 267,  499 => 266,  491 => 260,  486 => 257,  484 => 256,  475 => 249,  473 => 248,  466 => 244,  454 => 234,  442 => 224,  440 => 223,  429 => 215,  421 => 211,  413 => 206,  405 => 202,  403 => 201,  398 => 199,  393 => 197,  388 => 195,  383 => 193,  378 => 191,  374 => 190,  370 => 189,  358 => 179,  344 => 168,  338 => 165,  327 => 156,  313 => 145,  308 => 143,  298 => 135,  296 => 134,  280 => 121,  256 => 100,  234 => 81,  229 => 79,  217 => 69,  215 => 68,  212 => 67,  209 => 66,  207 => 65,  203 => 63,  193 => 59,  190 => 58,  186 => 57,  183 => 56,  173 => 52,  170 => 51,  166 => 50,  155 => 42,  146 => 36,  137 => 30,  124 => 20,  120 => 19,  112 => 14,  103 => 7,  90 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/stock_batch/index.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Lots de stock - {{ product.name }} - HMA Market{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
    <!-- En-tête avec navigation -->
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
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
                            {{ product.name|u.truncate(20, '...') }}
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        <i class=\"fas fa-boxes me-1\"></i> Lots de stock
                    </li>
                </ol>
            </nav>
            
            <div class=\"d-flex align-items-center\">
                <a href=\"{{ path('app_admin_product_show', {'id': product.id}) }}\" 
                   class=\"btn btn-outline-secondary me-3 btn-hover-scale\">
                    <i class=\"fas fa-arrow-left me-1\"></i> Retour au produit
                </a>
                <h1 class=\"h3 mb-0 text-gray-800\">
                    <i class=\"fas fa-boxes me-2\"></i> Lots de stock
                    <small class=\"text-muted\">- {{ product.name }}</small>
                </h1>
            </div>
            <p class=\"text-muted mt-2\">Gérez les lots de stock pour ce produit</p>
        </div>
        <div>
            <a href=\"{{ path('app_admin_purchase_new') }}\" 
               class=\"btn btn-primary btn-lg\">
                <i class=\"fas fa-cart-plus me-2\"></i> Nouvel achat
            </a>
        </div>
    </div>

    <!-- Alertes flash -->
    {% for message in app.flashes('success') %}
        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
            <i class=\"fas fa-check-circle me-2\"></i> {{ message }}
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    {% endfor %}
    
    {% for message in app.flashes('error') %}
        <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
            <i class=\"fas fa-exclamation-circle me-2\"></i> {{ message }}
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
        </div>
    {% endfor %}

    <!-- Statistiques -->
    {% set today = date('today') %}
    {% set thirtyDays = date('today')|date_modify('+30 days') %}
    
    {% set inactiveBatches = stockBatches|filter(b => not b.isActive or b.remainingQuantity <= 0 or (product.hasExpiryDate() and b.expiryDate < today))|length %}
    
    <div class=\"row mb-4\">
        <div class=\"col-xl-3 col-md-6 mb-4\">
            <div class=\"card border-left-primary shadow h-100 py-2\">
                <div class=\"card-body\">
                    <div class=\"row no-gutters align-items-center\">
                        <div class=\"col mr-2\">
                            <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                                Stock total
                            </div>
                            <div class=\"h5 mb-0 font-weight-bold text-gray-800\">{{ totalQuantity }}</div>
                            <div class=\"mt-1 small\">
                                {{ product.stockQuantity }} unités (produit)
                            </div>
                        </div>
                        <div class=\"col-auto\">
                            <i class=\"fas fa-box fa-2x text-primary\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-xl-3 col-md-6 mb-4\">
            <div class=\"card border-left-success shadow h-100 py-2\">
                <div class=\"card-body\">
                    <div class=\"row no-gutters align-items-center\">
                        <div class=\"col mr-2\">
                            <div class=\"text-xs font-weight-bold text-success text-uppercase mb-1\">
                                Lots actifs
                            </div>
                            <div class=\"h5 mb-0 font-weight-bold text-gray-800\">{{ activeBatches }}</div>
                            <div class=\"mt-1 small\">
                                Disponibles en vente
                            </div>
                        </div>
                        <div class=\"col-auto\">
                            <i class=\"fas fa-check-circle fa-2x text-success\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-xl-3 col-md-6 mb-4\">
            <div class=\"card border-left-secondary shadow h-100 py-2\">
                <div class=\"card-body\">
                    <div class=\"row no-gutters align-items-center\">
                        <div class=\"col mr-2\">
                            <div class=\"text-xs font-weight-bold text-secondary text-uppercase mb-1\">
                                Lots inactifs
                            </div>
                            <div class=\"h5 mb-0 font-weight-bold text-gray-800\">{{ inactiveBatches }}</div>
                            <div class=\"mt-1 small\">
                                Épuisés, expirés ou désactivés
                            </div>
                        </div>
                        <div class=\"col-auto\">
                            <i class=\"fas fa-times-circle fa-2x text-secondary\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {% if product.hasExpiryDate() %}
        <div class=\"col-xl-3 col-md-6 mb-4\">
            <div class=\"card border-left-warning shadow h-100 py-2\">
                <div class=\"card-body\">
                    <div class=\"row no-gutters align-items-center\">
                        <div class=\"col mr-2\">
                            <div class=\"text-xs font-weight-bold text-warning text-uppercase mb-1\">
                                À expirer (30j)
                            </div>
                            <div class=\"h5 mb-0 font-weight-bold text-gray-800\">{{ expiringSoon }}</div>
                            <div class=\"mt-1 small\">
                                Expirent avant {{ thirtyDays|date('d/m/Y') }}
                            </div>
                        </div>
                        <div class=\"col-auto\">
                            <i class=\"fas fa-exclamation-triangle fa-2x text-warning\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {% else %}
        <div class=\"col-xl-3 col-md-6 mb-4\">
            <div class=\"card border-left-info shadow h-100 py-2\">
                <div class=\"card-body\">
                    <div class=\"row no-gutters align-items-center\">
                        <div class=\"col mr-2\">
                            <div class=\"text-xs font-weight-bold text-info text-uppercase mb-1\">
                                Valeur stock
                            </div>
                            <div class=\"h5 mb-0 font-weight-bold text-gray-800\">
                                {{ (product.stockQuantity * product.purchasePrice)|number_format(0, ',', ' ') }} XAF
                            </div>
                            <div class=\"mt-1 small\">
                                {{ product.purchasePrice|number_format(0, ',', ' ') }} XAF/unité
                            </div>
                        </div>
                        <div class=\"col-auto\">
                            <i class=\"fas fa-coins fa-2x text-info\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {% endif %}
    </div>

    <!-- Barre de recherche et filtres -->
    <div class=\"card shadow mb-4\">
        <div class=\"card-body\">
            <div class=\"row align-items-center\">
                <div class=\"col-md-8 mb-3 mb-md-0\">
                    <div class=\"d-flex align-items-center\">
                        <span class=\"me-3 text-muted\">Filtrer :</span>
                        <div class=\"btn-group flex-wrap\" role=\"group\">
                            <a href=\"{{ path('app_admin_stock_batch_index', {'productId': product.id}) }}\" 
                               class=\"btn btn-outline-secondary {{ not app.request.query.has('status') ? 'active' : '' }}\">
                                Tous ({{ totalItems }})
                            </a>
                            <a href=\"{{ path('app_admin_stock_batch_index', {'productId': product.id, 'status': 'active'}) }}\" 
                               class=\"btn btn-outline-success\">
                                Actifs ({{ activeBatches }})
                            </a>
                            <a href=\"{{ path('app_admin_stock_batch_index', {'productId': product.id, 'status': 'inactive'}) }}\" 
                               class=\"btn btn-outline-secondary\">
                                Inactifs ({{ inactiveBatches }})
                            </a>
                            {% if product.hasExpiryDate() %}
                                <a href=\"{{ path('app_admin_stock_batch_index', {'productId': product.id, 'status': 'expired'}) }}\" 
                                   class=\"btn btn-outline-danger\">
                                    Expirés
                                </a>
                                <a href=\"{{ path('app_admin_stock_batch_index', {'productId': product.id, 'status': 'expiring-soon'}) }}\" 
                                   class=\"btn btn-outline-warning\">
                                    Bientôt expirés
                                </a>
                            {% endif %}
                            <a href=\"{{ path('app_admin_stock_batch_index', {'productId': product.id, 'status': 'low-quantity'}) }}\" 
                               class=\"btn btn-outline-warning\">
                                Faible quantité
                            </a>
                            <a href=\"{{ path('app_admin_stock_batch_index', {'productId': product.id, 'status': 'empty'}) }}\" 
                               class=\"btn btn-outline-danger\">
                                Stock épuisé
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 text-md-end\">
                    {% if product.hasExpiryDate() %}
                        <div class=\"input-group\">
                            <input type=\"date\" 
                                   class=\"form-control\" 
                                   id=\"expiryDateFilter\"
                                   onchange=\"filterByExpiryDate(this.value)\">
                            <button class=\"btn btn-outline-secondary\" type=\"button\" onclick=\"clearExpiryFilter()\">
                                <i class=\"fas fa-times\"></i>
                            </button>
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>

    <!-- Tableau des lots -->
    <div class=\"card shadow\">
        <div class=\"card-header bg-white py-3\">
            <h6 class=\"m-0 font-weight-bold text-primary\">
                <i class=\"fas fa-list me-2\"></i> Liste des lots de stock
                <span class=\"badge bg-primary ms-2\">{{ stockBatches|length }}</span>
            </h6>
        </div>
        <div class=\"card-body\">
            {% if stockBatches|length > 0 %}
                <div class=\"table-responsive\">
                    <table class=\"table table-hover\">
                        <thead>
                            <tr>
                                <th>N° Lot</th>
                                <th>Prix d'achat</th>
                                <th>Quantité</th>
                                {% if product.hasExpiryDate() %}
                                    <th>Date fabrication</th>
                                    <th>Date expiration</th>
                                {% endif %}
                                <th>Statut</th>
                                <th>Créé le</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for batch in stockBatches %}
                                {% set isExpired = product.hasExpiryDate() and batch.expiryDate < today %}
                                {% set isExpiringSoon = product.hasExpiryDate() and batch.expiryDate >= today and batch.expiryDate <= thirtyDays %}
                                {% set isInactive = not batch.isActive or batch.remainingQuantity <= 0 or (product.hasExpiryDate() and isExpired) %}
                                
                                <tr class=\"{% if isExpired %}table-danger{% elseif isExpiringSoon %}table-warning{% elseif isInactive %}table-secondary{% endif %}\">
                                    <td>
                                        <strong>{{ batch.batchNumber }}</strong>
                                        {% if batch.remainingQuantity <= 0 %}
                                            <br><small class=\"text-danger\">Épuisé</small>
                                        {% endif %}
                                    </td>
                                    <td>
                                        {{ batch.purchasePrice|number_format(0, ',', ' ') }} XAF
                                    </td>
                                    <td>
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"progress flex-grow-1 me-2\" style=\"height: 8px;\">
                                                {% if batch.quantity > 0 %}
                                                    <div class=\"progress-bar {% if batch.remainingQuantity <= 0 %}bg-danger{% elseif batch.remainingQuantity <= batch.quantity * 0.2 %}bg-danger{% elseif batch.remainingQuantity <= batch.quantity * 0.5 %}bg-warning{% else %}bg-success{% endif %}\" 
                                                         role=\"progressbar\" 
                                                         style=\"width: {{ (batch.remainingQuantity / batch.quantity) * 100 }}%\">
                                                    </div>
                                                {% else %}
                                                    <div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 100%\"></div>
                                                {% endif %}
                                            </div>
                                            <span class=\"text-nowrap\">
                                                {{ batch.remainingQuantity }}/{{ batch.quantity }}
                                            </span>
                                        </div>
                                    </td>
                                    {% if product.hasExpiryDate() %}
                                        <td>
                                            {{ batch.manufacturingDate|date('d/m/Y') }}
                                        </td>
                                        <td>
                                            <div class=\"d-flex align-items-center\">
                                                {{ batch.expiryDate|date('d/m/Y') }}
                                                {% if isExpired %}
                                                    <span class=\"badge bg-danger ms-2\">Expiré</span>
                                                {% elseif isExpiringSoon %}
                                                    <span class=\"badge bg-warning ms-2\">Bientôt</span>
                                                {% endif %}
                                            </div>
                                        </td>
                                    {% endif %}
                                    <td>
                                        <span class=\"badge {{ batch.isActive and not isExpired and batch.remainingQuantity > 0 ? 'bg-success' : 'bg-secondary' }}\">
                                            {% if batch.remainingQuantity <= 0 %}
                                                Épuisé
                                            {% elseif isExpired %}
                                                Expiré
                                            {% elseif batch.isActive %}
                                                Actif
                                            {% else %}
                                                Inactif
                                            {% endif %}
                                        </span>
                                    </td>
                                    <td>
                                        {{ batch.createdAt|date('d/m/Y H:i') }}
                                    </td>
                                    <td>
                                        <div class=\"btn-group btn-group-sm\" role=\"group\">
                                            <a href=\"{{ path('app_admin_stock_batch_show', {'productId': product.id, 'id': batch.id}) }}\" 
                                               class=\"btn btn-outline-info\" title=\"Voir détails\">
                                                <i class=\"fas fa-eye\"></i>
                                            </a>
                                            <a href=\"{{ path('app_admin_stock_batch_edit', {'productId': product.id, 'id': batch.id}) }}\" 
                                               class=\"btn btn-outline-warning\" title=\"Modifier\">
                                                <i class=\"fas fa-edit\"></i>
                                            </a>
                                            <form method=\"post\" 
                                                  action=\"{{ path('app_admin_stock_batch_toggle_status', {'productId': product.id, 'id': batch.id}) }}\"
                                                  class=\"d-inline\">
                                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('toggle-status' ~ batch.id) }}\">
                                                <button type=\"submit\" 
                                                        class=\"btn btn-sm {% if batch.isActive and not isExpired and batch.remainingQuantity > 0 %}btn-outline-danger{% else %}btn-outline-success{% endif %}\"
                                                        title=\"{% if batch.isActive and not isExpired and batch.remainingQuantity > 0 %}Désactiver{% else %}Activer{% endif %}\"
                                                        {% if isExpired or batch.remainingQuantity <= 0 %}disabled{% endif %}>
                                                    {% if batch.isActive and not isExpired and batch.remainingQuantity > 0 %}
                                                        <i class=\"fas fa-toggle-on\"></i>
                                                    {% else %}
                                                        <i class=\"fas fa-toggle-off\"></i>
                                                    {% endif %}
                                                </button>
                                            </form>
                                            <button type=\"button\" 
                                                    class=\"btn btn-outline-danger delete-batch-btn\"
                                                    data-batch-id=\"{{ batch.id }}\"
                                                    data-batch-number=\"{{ batch.batchNumber }}\"
                                                    data-product-id=\"{{ product.id }}\"
                                                    title=\"Supprimer\"
                                                    {% if batch.remainingQuantity > 0 %}disabled{% endif %}>
                                                <i class=\"fas fa-trash\"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                {% if totalPages > 1 %}
                <div class=\"row mt-4\">
                    <div class=\"col-12\">
                        <nav aria-label=\"Pagination\">
                            <ul class=\"pagination justify-content-center\">
                                <!-- Premier & Précédent -->
                                {% if currentPage > 1 %}
                                    <li class=\"page-item\">
                                        <a class=\"page-link\" href=\"{{ path('app_admin_stock_batch_index', {'productId': product.id, 'page': 1}) }}\">
                                            <i class=\"fas fa-angle-double-left\"></i>
                                        </a>
                                    </li>
                                    <li class=\"page-item\">
                                        <a class=\"page-link\" href=\"{{ path('app_admin_stock_batch_index', {'productId': product.id, 'page': currentPage - 1}) }}\">
                                            <i class=\"fas fa-chevron-left\"></i>
                                        </a>
                                    </li>
                                {% else %}
                                    <li class=\"page-item disabled\">
                                        <span class=\"page-link\"><i class=\"fas fa-angle-double-left\"></i></span>
                                    </li>
                                    <li class=\"page-item disabled\">
                                        <span class=\"page-link\"><i class=\"fas fa-chevron-left\"></i></span>
                                    </li>
                                {% endif %}

                                <!-- Pages numérotées -->
                                {% set startPage = max(1, currentPage - 2) %}
                                {% set endPage = min(totalPages, startPage + 4) %}
                                
                                {% if startPage > 1 %}
                                    <li class=\"page-item disabled\"><span class=\"page-link\">...</span></li>
                                {% endif %}
                                
                                {% for page in startPage..endPage %}
                                    <li class=\"page-item {% if page == currentPage %}active{% endif %}\">
                                        <a class=\"page-link\" href=\"{{ path('app_admin_stock_batch_index', {'productId': product.id, 'page': page}) }}\">{{ page }}</a>
                                    </li>
                                {% endfor %}
                                
                                {% if endPage < totalPages %}
                                    <li class=\"page-item disabled\"><span class=\"page-link\">...</span></li>
                                {% endif %}

                                <!-- Suivant & Dernier -->
                                {% if currentPage < totalPages %}
                                    <li class=\"page-item\">
                                        <a class=\"page-link\" href=\"{{ path('app_admin_stock_batch_index', {'productId': product.id, 'page': currentPage + 1}) }}\">
                                            <i class=\"fas fa-chevron-right\"></i>
                                        </a>
                                    </li>
                                    <li class=\"page-item\">
                                        <a class=\"page-link\" href=\"{{ path('app_admin_stock_batch_index', {'productId': product.id, 'page': totalPages}) }}\">
                                            <i class=\"fas fa-angle-double-right\"></i>
                                        </a>
                                    </li>
                                {% else %}
                                    <li class=\"page-item disabled\">
                                        <span class=\"page-link\"><i class=\"fas fa-chevron-right\"></i></span>
                                    </li>
                                    <li class=\"page-item disabled\">
                                        <span class=\"page-link\"><i class=\"fas fa-angle-double-right\"></i></span>
                                    </li>
                                {% endif %}
                            </ul>
                            
                            <div class=\"text-center text-muted small mt-2\">
                                Page {{ currentPage }} sur {{ totalPages }} - 
                                Affichage de {{ stockBatches|length }} lot(s) sur {{ totalItems }} au total
                            </div>
                        </nav>
                    </div>
                </div>
                {% endif %}
            {% else %}
                <div class=\"text-center py-5\">
                    <i class=\"fas fa-box-open fa-4x text-muted mb-3\"></i>
                    <h4 class=\"text-muted\">Aucun lot de stock trouvé</h4>
                    <p class=\"text-muted mb-4\">Commencez par créer votre premier lot de stock via un nouvel achat</p>
                    <a href=\"{{ path('app_admin_purchase_new') }}\" class=\"btn btn-primary\">
                        <i class=\"fas fa-cart-plus me-2\"></i> Nouvel achat
                    </a>
                </div>
            {% endif %}
        </div>
    </div>

    <!-- Aperçu rapide du produit -->
    <div class=\"card shadow mt-4\">
        <div class=\"card-header bg-light py-3\">
            <h6 class=\"m-0 font-weight-bold\">
                <i class=\"fas fa-info-circle me-2\"></i> Informations du produit
            </h6>
        </div>
        <div class=\"card-body\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    {% if product.image and product.image != 'default-product.png' %}
                        <img src=\"{{ asset('uploads/products/' ~ product.image) }}\" 
                             alt=\"{{ product.name }}\"
                             class=\"img-fluid rounded\"
                             style=\"max-height: 150px; object-fit: contain;\">
                    {% else %}
                        <div class=\"bg-light rounded d-flex align-items-center justify-content-center\"
                             style=\"width: 100%; height: 150px;\">
                            <i class=\"fas fa-box fa-3x text-muted\"></i>
                        </div>
                    {% endif %}
                </div>
                <div class=\"col-md-9\">
                    <h5>{{ product.name }}</h5>
                    <div class=\"row\">
                        <div class=\"col-md-3\">
                            <small class=\"text-muted\">Code-barres :</small>
                            <div><strong>{{ product.barcode }}</strong></div>
                        </div>
                        <div class=\"col-md-3\">
                            <small class=\"text-muted\">Catégorie :</small>
                            <div>{{ product.category.name }}</div>
                        </div>
                        <div class=\"col-md-3\">
                            <small class=\"text-muted\">Prix de vente :</small>
                            <div class=\"text-success\">{{ product.salePrice|number_format(0, ',', ' ') }} XAF</div>
                        </div>
                        <div class=\"col-md-3\">
                            <small class=\"text-muted\">Type :</small>
                            <div>
                                {% if product.hasExpiryDate() %}
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
                    <div class=\"row mt-2\">
                        <div class=\"col-md-3\">
                            <small class=\"text-muted\">Stock total :</small>
                            <div class=\"h5 mb-0\">{{ product.stockQuantity }}</div>
                        </div>
                        <div class=\"col-md-3\">
                            <small class=\"text-muted\">Stock min :</small>
                            <div>{{ product.minQuantity }}</div>
                        </div>
                        <div class=\"col-md-3\">
                            <small class=\"text-muted\">Prix d'achat :</small>
                            <div class=\"text-primary\">{{ product.purchasePrice|number_format(0, ',', ' ') }} XAF</div>
                        </div>
                        <div class=\"col-md-3\">
                            <small class=\"text-muted\">Statut :</small>
                            <div>
                                <span class=\"badge {{ product.isActive ? 'bg-success' : 'bg-danger' }}\">
                                    {{ product.isActive ? 'Actif' : 'Inactif' }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal suppression -->
<div class=\"modal fade\" id=\"deleteBatchModal\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">Confirmation de suppression</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                <div id=\"deleteBatchMessage\"></div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"deleteBatchForm\" method=\"post\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteBatchCsrfToken\">
                    <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Gestion de la suppression
    const deleteButtons = document.querySelectorAll('.delete-batch-btn:not([disabled])');
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteBatchModal'));
    const deleteForm = document.getElementById('deleteBatchForm');
    const deleteMessage = document.getElementById('deleteBatchMessage');
    const deleteCsrfToken = document.getElementById('deleteBatchCsrfToken');
    
    deleteButtons.forEach(button => {
        button.addEventListener('click', function() {
            const batchId = this.dataset.batchId;
            const batchNumber = this.dataset.batchNumber;
            const productId = this.dataset.productId;
            
            deleteMessage.innerHTML = `
                <div class=\"alert alert-warning\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i>
                    Cette action est irréversible et ajustera le stock total du produit.
                </div>
                <p>Êtes-vous sûr de vouloir supprimer le lot <strong>\"\${batchNumber}\"</strong> ?</p>
                <p class=\"text-danger small\">Le stock total du produit sera mis à jour.</p>
            `;
            
            deleteForm.action = `/admin/product/\${productId}/stock-batch/\${batchId}`;
            deleteCsrfToken.value = '{{ csrf_token(\"delete\") }}';
            
            deleteModal.show();
        });
    });

    // Confirmation pour activation/désactivation
    const toggleButtons = document.querySelectorAll('form[action*=\"toggle-status\"] button[type=\"submit\"]:not([disabled])');
    toggleButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            const form = this.closest('form');
            const batchRow = this.closest('tr');
            const batchNumber = batchRow.querySelector('td strong').textContent.trim();
            const currentStatus = this.querySelector('i').classList.contains('fa-toggle-on');
            const action = currentStatus ? 'désactiver' : 'activer';
            
            if (!confirm(`Êtes-vous sûr de vouloir \${action} le lot \"\${batchNumber}\" ?`)) {
                e.preventDefault();
            }
        });
    });

    // Fonction pour filtrer par date d'expiration
    function filterByExpiryDate(date) {
        if (date) {
            window.location.href = '{{ path('app_admin_stock_batch_index', {'productId': product.id}) }}?expiry_date=' + date;
        }
    }

    // Fonction pour effacer le filtre de date
    function clearExpiryFilter() {
        window.location.href = '{{ path('app_admin_stock_batch_index', {'productId': product.id}) }}';
    }

    // Mise en évidence des lignes expirées ou en cours d'expiration
    const expiredRows = document.querySelectorAll('tr.table-danger');
    const expiringRows = document.querySelectorAll('tr.table-warning');
    const inactiveRows = document.querySelectorAll('tr.table-secondary');
    
    // Optionnel : Ajouter un effet au survol
    const allRows = document.querySelectorAll('tbody tr');
    allRows.forEach(row => {
        row.addEventListener('mouseenter', function() {
            if (!this.classList.contains('table-danger') && 
                !this.classList.contains('table-warning') && 
                !this.classList.contains('table-secondary')) {
                this.style.backgroundColor = '#f8f9fa';
            }
        });
        row.addEventListener('mouseleave', function() {
            if (!this.classList.contains('table-danger') && 
                !this.classList.contains('table-warning') && 
                !this.classList.contains('table-secondary')) {
                this.style.backgroundColor = '';
            }
        });
    });
});
</script>
{% endblock %}", "admin/stock_batch/index.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\stock_batch\\index.html.twig");
    }
}
