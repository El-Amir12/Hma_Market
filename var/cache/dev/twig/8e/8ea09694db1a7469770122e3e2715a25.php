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

/* admin/product/show.html.twig */
class __TwigTemplate_21877b1b6c9b4815f30a7d8d672cb181 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/product/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/product/show.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4), "html", null, true);
        yield " - Détails du produit";
        
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
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19)), "truncate", [30, "..."], "method", false, false, false, 19), "html", null, true);
        yield "
                    </li>
                </ol>
            </nav>
            
            <div class=\"d-flex align-items-center\">
                <a href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_index");
        yield "\" class=\"btn btn-outline-secondary me-3 btn-hover-scale\">
                    <i class=\"fas fa-arrow-left me-1\"></i> Retour
                </a>
                <h1 class=\"h3 mb-0 text-gray-800 slide-in-left\">
                    <i class=\"fas fa-box me-2\"></i> ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 29, $this->source); })()), "name", [], "any", false, false, false, 29), "html", null, true);
        yield "
                </h1>
            </div>
        </div>
        <div class=\"float-up\">
            <i class=\"fas fa-box fa-3x text-primary opacity-75\"></i>
        </div>
    </div>

    <!-- Stats rapides -->
    <div class=\"row mb-4\">
        <!-- Carte 1 : Stock actuel (toujours visible) -->
        <div class=\"";
        // line 41
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 41, $this->source); })()) == "restaurant")) {
            yield "col-xl-4 col-md-6";
        } else {
            yield "col-xl-3 col-md-6";
        }
        yield " mb-3\">
            <div class=\"card border-0 bg-primary bg-opacity-10 shadow-sm h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"flex-grow-1\">
                            <h6 class=\"text-white-50 mb-1\">Stock actuel</h6>
                            <h3 class=\"mb-0 fw-bold text-white\">
                                ";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 48, $this->source); })()), "stockQuantity", [], "any", false, false, false, 48), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 48)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 48, $this->source); })()), "unit", [], "any", false, false, false, 48), "pièce(s)")) : ("pièce(s)")), "html", null, true);
        yield "
                            </h3>
                        </div>
                        <div class=\"bg-primary bg-opacity-25 p-3 rounded\">
                            <i class=\"fas fa-boxes fa-lg text-white\"></i>
                        </div>
                    </div>
                    ";
        // line 55
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 55, $this->source); })()), "minQuantity", [], "any", false, false, false, 55) > 0)) {
            // line 56
            yield "                        <small class=\"text-white-50\">
                            <i class=\"fas fa-exclamation-circle me-1\"></i>
                            Seuil d'alerte: ";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 58, $this->source); })()), "minQuantity", [], "any", false, false, false, 58), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 58)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 58, $this->source); })()), "unit", [], "any", false, false, false, 58), "pièce(s)")) : ("pièce(s)")), "html", null, true);
            yield "
                        </small>
                    ";
        }
        // line 61
        yield "                </div>
            </div>
        </div>
        
        <!-- Carte 2 : Valeur stock (basée sur les lots réels) -->
        <div class=\"";
        // line 66
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 66, $this->source); })()) == "restaurant")) {
            yield "col-xl-4 col-md-6";
        } else {
            yield "col-xl-3 col-md-6";
        }
        yield " mb-3\">
            <div class=\"card border-0 bg-success bg-opacity-10 shadow-sm h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"flex-grow-1\">
                            <h6 class=\"text-white-50 mb-1\">Valeur stock</h6>
                            <h3 class=\"mb-0 fw-bold text-white\">
                                ";
        // line 73
        $context["totalStockValue"] = 0;
        // line 74
        yield "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 74, $this->source); })()), "stockBatches", [], "any", false, false, false, 74));
        foreach ($context['_seq'] as $context["_key"] => $context["batch"]) {
            // line 75
            yield "                                    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 75)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 76
                yield "                                        ";
                $context["totalStockValue"] = ((isset($context["totalStockValue"]) || array_key_exists("totalStockValue", $context) ? $context["totalStockValue"] : (function () { throw new RuntimeError('Variable "totalStockValue" does not exist.', 76, $this->source); })()) + (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 76) * CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "unitPrice", [], "any", false, false, false, 76)));
                // line 77
                yield "                                    ";
            }
            // line 78
            yield "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['batch'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        yield "                                ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency((isset($context["totalStockValue"]) || array_key_exists("totalStockValue", $context) ? $context["totalStockValue"] : (function () { throw new RuntimeError('Variable "totalStockValue" does not exist.', 79, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 79, $this->source); })()), "hmaService", [], "any", false, false, false, 79)), "html", null, true);
        yield "
                            </h3>
                        </div>
                        <div class=\"bg-success bg-opacity-25 p-3 rounded\">
                            <i class=\"fas fa-coins fa-lg text-white\"></i>
                        </div>
                    </div>
                    <small class=\"text-white-50\">
                        <i class=\"fas fa-calculator me-1\"></i>
                        Basé sur le coût d'achat réel des lots
                        ";
        // line 89
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 89, $this->source); })()) == "restaurant")) {
            // line 90
            yield "                            <span class=\"d-block mt-1\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                Calculé à partir des prix d'achat des lots actifs
                            </span>
                        ";
        }
        // line 95
        yield "                    </small>
                </div>
            </div>
        </div>
        
        <!-- Carte 3 : Marge (uniquement pour non restaurant) -->
        ";
        // line 101
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 101, $this->source); })()) != "restaurant")) {
            // line 102
            yield "        <div class=\"col-xl-3 col-md-6 mb-3\">
            <div class=\"card border-0 bg-info bg-opacity-10 shadow-sm h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"flex-grow-1\">
                            <h6 class=\"text-white-50 mb-1\">Marge</h6>
                            <h3 class=\"mb-0 fw-bold text-white\">
                                ";
            // line 109
            $context["margin"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 109, $this->source); })()), "salePrice", [], "any", false, false, false, 109) - CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 109, $this->source); })()), "purchasePrice", [], "any", false, false, false, 109));
            // line 110
            yield "                                ";
            $context["marginPercentage"] = (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 110, $this->source); })()), "purchasePrice", [], "any", false, false, false, 110) > 0)) ? (Twig\Extension\CoreExtension::round((((isset($context["margin"]) || array_key_exists("margin", $context) ? $context["margin"] : (function () { throw new RuntimeError('Variable "margin" does not exist.', 110, $this->source); })()) / CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 110, $this->source); })()), "purchasePrice", [], "any", false, false, false, 110)) * 100), 1)) : (0));
            // line 111
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["marginPercentage"]) || array_key_exists("marginPercentage", $context) ? $context["marginPercentage"] : (function () { throw new RuntimeError('Variable "marginPercentage" does not exist.', 111, $this->source); })()), "html", null, true);
            yield "%
                            </h3>
                        </div>
                        <div class=\"bg-info bg-opacity-25 p-3 rounded\">
                            <i class=\"fas fa-chart-line fa-lg text-white\"></i>
                        </div>
                    </div>
                    <small class=\"text-white-50\">
                        <i class=\"fas fa-arrow-up me-1\"></i>
                        ";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency((isset($context["margin"]) || array_key_exists("margin", $context) ? $context["margin"] : (function () { throw new RuntimeError('Variable "margin" does not exist.', 120, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 120, $this->source); })()), "hmaService", [], "any", false, false, false, 120)), "html", null, true);
            yield " par unité
                    </small>
                </div>
            </div>
        </div>
        ";
        }
        // line 126
        yield "        
        <!-- Carte 4 : Statut (toujours visible) -->
        <div class=\"";
        // line 128
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 128, $this->source); })()) == "restaurant")) {
            yield "col-xl-4 col-md-6";
        } else {
            yield "col-xl-3 col-md-6";
        }
        yield " mb-3\">
            <div class=\"card border-0 ";
        // line 129
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 129, $this->source); })()), "isActive", [], "any", false, false, false, 129)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-danger"));
        yield " bg-opacity-10 shadow-sm h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"flex-grow-1\">
                            <h6 class=\"text-white-50 mb-1\">Statut</h6>
                            <div>
                                <span class=\"badge ";
        // line 135
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 135, $this->source); })()), "isActive", [], "any", false, false, false, 135)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-danger"));
        yield " px-3 py-2\">
                                    ";
        // line 136
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 136, $this->source); })()), "isActive", [], "any", false, false, false, 136)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ACTIF") : ("INACTIF"));
        yield "
                                </span>
                            </div>
                        </div>
                        <div class=\"";
        // line 140
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 140, $this->source); })()), "isActive", [], "any", false, false, false, 140)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-danger"));
        yield " bg-opacity-25 p-3 rounded\">
                            <i class=\"fas ";
        // line 141
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 141, $this->source); })()), "isActive", [], "any", false, false, false, 141)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-toggle-on") : ("fa-toggle-off"));
        yield " fa-lg text-white\"></i>
                        </div>
                    </div>
                    <small class=\"text-white-50\">
                        <i class=\"fas fa-calendar me-1\"></i>
                        Créé le ";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 146, $this->source); })()), "createdAt", [], "any", false, false, false, 146), "d/m/Y"), "html", null, true);
        yield "
                    </small>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <!-- Colonne gauche: Informations produit -->
        <div class=\"col-lg-8\">
            <div class=\"row\">
                <!-- Informations produit -->
                <div class=\"col-md-6 mb-4\">
                    <div class=\"card border-0 shadow-sm h-100\">
                        <div class=\"card-header bg-white py-3\">
                            <h5 class=\"card-title mb-0\">
                                <i class=\"fas fa-info-circle me-2\"></i> Informations du produit
                            </h5>
                        </div>
                        <div class=\"card-body\">
                            <dl class=\"row mb-0\">
                                <dt class=\"col-sm-5 text-muted\">Nom</dt>
                                <dd class=\"col-sm-7 fw-bold\">";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 168, $this->source); })()), "name", [], "any", false, false, false, 168), "html", null, true);
        yield "</dd>
                                
                                <dt class=\"col-sm-5 text-muted\">Code-barres</dt>
                                <dd class=\"col-sm-7\">
                                    <span class=\"badge bg-secondary\">";
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 172, $this->source); })()), "barcode", [], "any", false, false, false, 172), "html", null, true);
        yield "</span>
                                </dd>
                                
                                <dt class=\"col-sm-5 text-muted\">Catégorie</dt>
                                <dd class=\"col-sm-7\">
                                    <span class=\"badge bg-primary\">
                                        <i class=\"fas fa-folder me-1\"></i>";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 178, $this->source); })()), "category", [], "any", false, false, false, 178), "name", [], "any", false, false, false, 178), "html", null, true);
        yield "
                                    </span>
                                    ";
        // line 180
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 180, $this->source); })()), "category", [], "any", false, false, false, 180), "parent", [], "any", false, false, false, 180)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 181
            yield "                                        <br>
                                        <small class=\"text-muted\">
                                            <i class=\"fas fa-level-up-alt me-1\"></i>
                                            Catégorie principale: ";
            // line 184
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 184, $this->source); })()), "category", [], "any", false, false, false, 184), "parent", [], "any", false, false, false, 184), "name", [], "any", false, false, false, 184), "html", null, true);
            yield "
                                        </small>
                                    ";
        }
        // line 187
        yield "                                </dd>
                                
                                <dt class=\"col-sm-5 text-muted\">Unité de mesure</dt>
                                <dd class=\"col-sm-7\">
                                    ";
        // line 191
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 191)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 191, $this->source); })()), "unit", [], "any", false, false, false, 191), "pièce")) : ("pièce"))), "html", null, true);
        yield "
                                </dd>
                                
                                <dt class=\"col-sm-5 text-muted\">Type de produit</dt>
                                <dd class=\"col-sm-7\">
                                    ";
        // line 196
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 196, $this->source); })()), "hasExpiryDate", [], "method", false, false, false, 196)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 197
            yield "                                        <span class=\"badge bg-warning text-dark\">
                                            <i class=\"fas fa-calendar-alt me-1\"></i> Périssable
                                        </span>
                                    ";
        } else {
            // line 201
            yield "                                        <span class=\"badge bg-secondary\">
                                            <i class=\"fas fa-infinity me-1\"></i> Non périssable
                                        </span>
                                    ";
        }
        // line 205
        yield "                                </dd>
                                
                                ";
        // line 207
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 207, $this->source); })()), "dosage", [], "any", false, false, false, 207)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 208
            yield "                                    <dt class=\"col-sm-5 text-muted\">Dosage</dt>
                                    <dd class=\"col-sm-7\">";
            // line 209
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 209, $this->source); })()), "dosage", [], "any", false, false, false, 209), "html", null, true);
            yield "</dd>
                                ";
        }
        // line 211
        yield "                                
                                ";
        // line 212
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 212, $this->source); })()), "form", [], "any", false, false, false, 212)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 213
            yield "                                    <dt class=\"col-sm-5 text-muted\">Forme</dt>
                                    <dd class=\"col-sm-7\">";
            // line 214
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 214, $this->source); })()), "form", [], "any", false, false, false, 214), "html", null, true);
            yield "</dd>
                                ";
        }
        // line 216
        yield "                                
                                ";
        // line 217
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 217, $this->source); })()), "prescriptionRequired", [], "any", false, false, false, 217)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 218
            yield "                                    <dt class=\"col-sm-5 text-muted\">Prescription</dt>
                                    <dd class=\"col-sm-7\">
                                        <span class=\"badge bg-warning text-dark\">Obligatoire</span>
                                    </dd>
                                ";
        }
        // line 223
        yield "                                
                                <dt class=\"col-sm-5 text-muted\">Prix d'achat</dt>
                                <dd class=\"col-sm-7\">
                                    <span class=\"text-primary fw-bold\">
                                        ";
        // line 227
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 227, $this->source); })()), "purchasePrice", [], "any", false, false, false, 227), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 227, $this->source); })()), "hmaService", [], "any", false, false, false, 227)), "html", null, true);
        yield "
                                    </span>
                                </dd>
                                
                                ";
        // line 231
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 231, $this->source); })()) != "restaurant")) {
            // line 232
            yield "                                    <dt class=\"col-sm-5 text-muted\">Prix de vente</dt>
                                    <dd class=\"col-sm-7\">
                                        <span class=\"text-success fw-bold\">
                                            ";
            // line 235
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 235, $this->source); })()), "salePrice", [], "any", false, false, false, 235), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 235, $this->source); })()), "hmaService", [], "any", false, false, false, 235)), "html", null, true);
            yield "
                                        </span>
                                    </dd>
                                ";
        }
        // line 239
        yield "                                
                                <dt class=\"col-sm-5 text-muted\">Stock min.</dt>
                                <dd class=\"col-sm-7\">
                                    ";
        // line 242
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 242, $this->source); })()), "minQuantity", [], "any", false, false, false, 242) > 0)) {
            // line 243
            yield "                                        <span class=\"badge bg-warning text-dark\">
                                            ";
            // line 244
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 244, $this->source); })()), "minQuantity", [], "any", false, false, false, 244), "html", null, true);
            yield "
                                        </span>
                                    ";
        } else {
            // line 247
            yield "                                        <span class=\"text-muted\">Non défini</span>
                                    ";
        }
        // line 249
        yield "                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
                
                <!-- Image du produit -->
                <div class=\"col-md-6 mb-4\">
                    <div class=\"card border-0 shadow-sm h-100\">
                        <div class=\"card-header bg-white py-3\">
                            <h5 class=\"card-title mb-0\">
                                <i class=\"fas fa-image me-2\"></i> Image du produit
                            </h5>
                        </div>
                        <div class=\"card-body d-flex align-items-center justify-content-center\">
                            ";
        // line 264
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 264, $this->source); })()), "image", [], "any", false, false, false, 264) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 264, $this->source); })()), "image", [], "any", false, false, false, 264) != "default-product.png"))) {
            // line 265
            yield "                                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 265, $this->source); })()), "image", [], "any", false, false, false, 265))), "html", null, true);
            yield "\" 
                                     alt=\"";
            // line 266
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 266, $this->source); })()), "name", [], "any", false, false, false, 266), "html", null, true);
            yield "\" 
                                     class=\"img-fluid rounded shadow-lg\"
                                     style=\"max-height: 250px; object-fit: contain;\">
                            ";
        } else {
            // line 270
            yield "                                <div class=\"text-center text-muted py-5\">
                                    <i class=\"fas fa-box fa-5x mb-3\"></i>
                                    <p class=\"mb-0\">Aucune image disponible</p>
                                </div>
                            ";
        }
        // line 275
        yield "                        </div>
                    </div>
                </div>
                
                <!-- Description du produit -->
                ";
        // line 280
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 280, $this->source); })()), "description", [], "any", false, false, false, 280)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 281
            yield "                <div class=\"col-12 mb-4\">
                    <div class=\"card border-0 shadow-sm\">
                        <div class=\"card-header bg-white py-3\">
                            <h5 class=\"card-title mb-0\">
                                <i class=\"fas fa-align-left me-2\"></i> Description du produit
                            </h5>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"product-description-container\" style=\"max-height: 300px; overflow-y: auto;\">
                                ";
            // line 290
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 290, $this->source); })()), "description", [], "any", false, false, false, 290), "html", null, true));
            yield "
                            </div>
                        </div>
                    </div>
                </div>
                ";
        }
        // line 296
        yield "                
                <!-- Timeline des mouvements récents -->
                <div class=\"col-12 mb-4\">
                    <div class=\"card border-0 shadow-sm\">
                        <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center\">
                            <h5 class=\"card-title mb-0\">
                                <i class=\"fas fa-history me-2\"></i> Derniers mouvements de stock
                            </h5>
                            <a href=\"#\" class=\"btn btn-sm btn-outline-primary\">
                                <i class=\"fas fa-exchange-alt me-1\"></i> Voir tous
                            </a>
                        </div>
                        <div class=\"card-body\">
                            ";
        // line 309
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 309, $this->source); })()), "stockBatches", [], "any", false, false, false, 309)) > 0)) {
            // line 310
            yield "                                <div class=\"timeline\">
                                    ";
            // line 311
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::sort($this->env, Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 311, $this->source); })()), "stockBatches", [], "any", false, false, false, 311), 0, 5), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 311, $this->source); })()), "createdAt", [], "any", false, false, false, 311) <=> CoreExtension::getAttribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 311, $this->source); })()), "createdAt", [], "any", false, false, false, 311)); }));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["batch"]) {
                // line 312
                yield "                                        <div class=\"timeline-item ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 312) % 2 != 0)) ? ("timeline-item-left") : ("timeline-item-right"));
                yield "\">
                                            <div class=\"timeline-date\">
                                                ";
                // line 314
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "createdAt", [], "any", false, false, false, 314), "d/m/Y"), "html", null, true);
                yield "
                                            </div>
                                            <div class=\"timeline-content\">
                                                <div class=\"d-flex justify-content-between align-items-center\">
                                                    <div>
                                                        <h6 class=\"mb-1\">Lot ";
                // line 319
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "batchNumber", [], "any", false, false, false, 319), "html", null, true);
                yield "</h6>
                                                        <p class=\"mb-0 text-muted small\">
                                                            <i class=\"fas fa-box me-1\"></i>
                                                            Quantité: ";
                // line 322
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "initialQuantity", [], "any", false, false, false, 322), "html", null, true);
                yield "
                                                            ";
                // line 323
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 323)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 324
                    yield "                                                                <span class=\"ms-2\">
                                                                    <i class=\"fas fa-calendar-alt me-1\"></i>
                                                                    Exp: ";
                    // line 326
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 326), "d/m/Y"), "html", null, true);
                    yield "
                                                                </span>
                                                            ";
                }
                // line 329
                yield "                                                        </p>
                                                    </div>
                                                    <div>
                                                        <span class=\"badge ";
                // line 332
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 332)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-secondary"));
                yield "\">
                                                            ";
                // line 333
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 333)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Inactif"));
                yield "
                                                        </span>
                                                        ";
                // line 335
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 335) && (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 335) < $this->extensions['Twig\Extension\CoreExtension']->convertDate()))) {
                    // line 336
                    yield "                                                            <span class=\"badge bg-danger ms-1\">Expiré</span>
                                                        ";
                }
                // line 338
                yield "                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['batch'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 343
            yield "                                </div>
                                ";
            // line 344
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 344, $this->source); })()), "stockBatches", [], "any", false, false, false, 344)) > 5)) {
                // line 345
                yield "                                    <div class=\"text-center mt-3\">
                                        <a href=\"";
                // line 346
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_index", ["productId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 346, $this->source); })()), "id", [], "any", false, false, false, 346)]), "html", null, true);
                yield "\" 
                                            class=\"btn btn-sm btn-outline-info flex-fill\" title=\"Lots de stock\">
                                            <i class=\"fas fa-boxes\"></i> Lots
                                        </a>
                                    </div>
                                ";
            }
            // line 352
            yield "                            ";
        } else {
            // line 353
            yield "                                <div class=\"text-center py-4\">
                                    <i class=\"fas fa-box-open fa-3x text-muted mb-3\"></i>
                                    <p class=\"text-muted mb-0\">Aucun mouvement de stock enregistré</p>
                                </div>
                            ";
        }
        // line 358
        yield "                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Colonne droite: Actions et lots -->
        <div class=\"col-lg-4\">
            <!-- Actions rapides -->
            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-bolt me-2\"></i> Actions rapides
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"d-grid gap-2\">
                        <a href=\"";
        // line 375
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 375, $this->source); })()), "id", [], "any", false, false, false, 375)]), "html", null, true);
        yield "\" 
                           class=\"btn btn-warning\">
                            <i class=\"fas fa-edit me-2\"></i> Modifier le produit
                        </a>

                        <div class=\"dropdown\">
                            <button class=\"btn btn-outline-primary dropdown-toggle w-100\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                <i class=\"fas fa-print me-2\"></i> Imprimer
                            </button>
                            <ul class=\"dropdown-menu w-100\">
                                <li>
                                    <a class=\"dropdown-item\" href=\"#\" onclick=\"window.open('";
        // line 386
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_print_barcode", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 386, $this->source); })()), "id", [], "any", false, false, false, 386)]), "html", null, true);
        yield "', '_blank'); return false;\">
                                        <i class=\"fas fa-barcode me-2\"></i> Étiquette code-barres
                                    </a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item\" href=\"#\" onclick=\"window.open('";
        // line 391
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_print_sheet", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 391, $this->source); })()), "id", [], "any", false, false, false, 391)]), "html", null, true);
        yield "', '_blank'); return false;\">
                                        <i class=\"fas fa-file-alt me-2\"></i> Fiche produit
                                    </a>
                                </li>
                            </ul>
                        </div>
                        
                        <a href=\"";
        // line 398
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_cart");
        yield "\" 
                           class=\"btn btn-success\">
                            <i class=\"fas fa-plus me-2\"></i> Nouvel achat
                        </a>
                        
                        <!-- Lien vers les lots -->
                        <a href=\"";
        // line 404
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_index", ["productId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 404, $this->source); })()), "id", [], "any", false, false, false, 404)]), "html", null, true);
        yield "\" 
                           class=\"btn btn-outline-info\">
                            <i class=\"fas fa-boxes me-2\"></i> Gérer les lots
                        </a>
                        
                        <!-- Lien vers les mouvements de stock (à créer) -->
                        <a href=\"#\" class=\"btn btn-outline-primary\">
                            <i class=\"fas fa-exchange-alt me-2\"></i> Voir les mouvements
                        </a>
                        
                        <!-- Lien vers les commandes liées (si pas restaurant) -->
                        ";
        // line 415
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 415, $this->source); })()) != "restaurant")) {
            // line 416
            yield "                        <a href=\"#\" class=\"btn btn-outline-success\">
                            <i class=\"fas fa-shopping-cart me-2\"></i> Commandes liées
                        </a>
                        ";
        }
        // line 420
        yield "                        
                        ";
        // line 421
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 421, $this->source); })()) != "restaurant")) {
            // line 422
            yield "                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_promotions", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 422, $this->source); })()), "id", [], "any", false, false, false, 422)]), "html", null, true);
            yield "\" 
                            class=\"btn btn-sm btn-outline-warning flex-fill\" title=\"Promotions\">
                                <i class=\"fas fa-tags me-1\"></i> Promos
                            </a>
                        ";
        }
        // line 427
        yield "                        
                        <!-- Bouton toggle status (ouvre modal) -->
                        <button type=\"button\" 
                                class=\"btn btn-outline-secondary toggle-status-btn\"
                                data-bs-toggle=\"modal\" 
                                data-bs-target=\"#toggleStatusModal\"
                                data-product-id=\"";
        // line 433
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 433, $this->source); })()), "id", [], "any", false, false, false, 433), "html", null, true);
        yield "\"
                                data-product-name=\"";
        // line 434
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 434, $this->source); })()), "name", [], "any", false, false, false, 434), "html", null, true);
        yield "\"
                                data-is-active=\"";
        // line 435
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 435, $this->source); })()), "isActive", [], "any", false, false, false, 435)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("0"));
        yield "\"
                                data-token=\"";
        // line 436
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle-status" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 436, $this->source); })()), "id", [], "any", false, false, false, 436))), "html", null, true);
        yield "\">
                            <i class=\"fas ";
        // line 437
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 437, $this->source); })()), "isActive", [], "any", false, false, false, 437)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-toggle-on") : ("fa-toggle-off"));
        yield " me-2\"></i>
                            ";
        // line 438
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 438, $this->source); })()), "isActive", [], "any", false, false, false, 438)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver le produit") : ("Activer le produit"));
        yield "
                        </button>
                        
                        <!-- Bouton supprimer (visible pour admin) -->
                        ";
        // line 442
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 443
            yield "                            ";
            $context["hasDependencies"] = ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 443, $this->source); })()), "purchaseItems", [], "any", false, false, false, 443)) > 0) || (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 443, $this->source); })()), "stockBatches", [], "any", false, false, false, 443)) > 0));
            // line 444
            yield "                            <button type=\"button\" 
                                    class=\"btn btn-outline-danger delete-product-btn\"
                                    data-bs-toggle=\"modal\" 
                                    data-bs-target=\"#deleteModal\"
                                    data-product-id=\"";
            // line 448
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 448, $this->source); })()), "id", [], "any", false, false, false, 448), "html", null, true);
            yield "\"
                                    data-product-name=\"";
            // line 449
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 449, $this->source); })()), "name", [], "any", false, false, false, 449), "html", null, true);
            yield "\"
                                    data-has-dependencies=\"";
            // line 450
            yield (((($tmp = (isset($context["hasDependencies"]) || array_key_exists("hasDependencies", $context) ? $context["hasDependencies"] : (function () { throw new RuntimeError('Variable "hasDependencies" does not exist.', 450, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("0"));
            yield "\"
                                    data-token=\"";
            // line 451
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 451, $this->source); })()), "id", [], "any", false, false, false, 451))), "html", null, true);
            yield "\"
                                    ";
            // line 452
            if ((($tmp = (isset($context["hasDependencies"]) || array_key_exists("hasDependencies", $context) ? $context["hasDependencies"] : (function () { throw new RuntimeError('Variable "hasDependencies" does not exist.', 452, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "title=\"Ce produit a des dépendances\"";
            }
            yield ">
                                <i class=\"fas fa-trash me-2\"></i> Supprimer le produit
                            </button>
                        ";
        }
        // line 456
        yield "                    </div>
                </div>
            </div>
            
            <!-- Liste des lots actifs -->
            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-boxes me-2\"></i> Lots en stock
                    </h5>
                </div>
                <div class=\"card-body\">
                    ";
        // line 468
        $context["activeBatches"] = Twig\Extension\CoreExtension::sort($this->env, Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 468, $this->source); })()), "stockBatches", [], "any", false, false, false, 468), function ($__b__) use ($context, $macros) { $context["b"] = $__b__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 468, $this->source); })()), "isActive", [], "any", false, false, false, 468) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 468, $this->source); })()), "currentQuantity", [], "any", false, false, false, 468) > 0)); }), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 468, $this->source); })()), "expiryDate", [], "any", false, false, false, 468) <=> CoreExtension::getAttribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 468, $this->source); })()), "expiryDate", [], "any", false, false, false, 468)); });
        // line 469
        yield "                    
                    ";
        // line 470
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["activeBatches"]) || array_key_exists("activeBatches", $context) ? $context["activeBatches"] : (function () { throw new RuntimeError('Variable "activeBatches" does not exist.', 470, $this->source); })())) > 0)) {
            // line 471
            yield "                        <div class=\"list-group list-group-flush\">
                            ";
            // line 472
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["activeBatches"]) || array_key_exists("activeBatches", $context) ? $context["activeBatches"] : (function () { throw new RuntimeError('Variable "activeBatches" does not exist.', 472, $this->source); })()), 0, 3));
            foreach ($context['_seq'] as $context["_key"] => $context["batch"]) {
                // line 473
                yield "                                <div class=\"list-group-item border-0 px-0 py-2\">
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <div>
                                            <h6 class=\"mb-1\">Lot ";
                // line 476
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "batchNumber", [], "any", false, false, false, 476), "html", null, true);
                yield "</h6>
                                            <small class=\"text-muted\">
                                                <i class=\"fas fa-box me-1\"></i>
                                                ";
                // line 479
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 479), "html", null, true);
                yield "/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "initialQuantity", [], "any", false, false, false, 479), "html", null, true);
                yield "
                                            </small>
                                        </div>
                                        <div class=\"text-end\">
                                            ";
                // line 483
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 483)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 484
                    yield "                                                <div class=\"mb-1\">
                                                    <small class=\"";
                    // line 485
                    yield (((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 485) < $this->extensions['Twig\Extension\CoreExtension']->convertDate("+30 days"))) ? ("text-danger") : ("text-muted"));
                    yield "\">
                                                        <i class=\"fas fa-calendar-alt me-1\"></i>
                                                        ";
                    // line 487
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 487), "d/m/Y"), "html", null, true);
                    yield "
                                                    </small>
                                                </div>
                                            ";
                }
                // line 491
                yield "                                            <span class=\"badge ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 491) <= 10)) ? ("bg-warning") : ("bg-success"));
                yield "\">
                                                ";
                // line 492
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 492), "html", null, true);
                yield " restants
                                            </span>
                                        </div>
                                    </div>
                                    ";
                // line 496
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 496) && (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 496) < $this->extensions['Twig\Extension\CoreExtension']->convertDate("+30 days")))) {
                    // line 497
                    yield "                                        <div class=\"mt-2\">
                                            <div class=\"progress\" style=\"height: 5px;\">
                                                ";
                    // line 499
                    $context["daysLeft"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 499), "diff", [$this->extensions['Twig\Extension\CoreExtension']->convertDate()], "method", false, false, false, 499), "days", [], "any", false, false, false, 499);
                    // line 500
                    yield "                                                ";
                    $context["progress"] = (((isset($context["daysLeft"]) || array_key_exists("daysLeft", $context) ? $context["daysLeft"] : (function () { throw new RuntimeError('Variable "daysLeft" does not exist.', 500, $this->source); })()) / 30) * 100);
                    // line 501
                    yield "                                                <div class=\"progress-bar bg-danger\" 
                                                     style=\"width: ";
                    // line 502
                    yield ((((isset($context["progress"]) || array_key_exists("progress", $context) ? $context["progress"] : (function () { throw new RuntimeError('Variable "progress" does not exist.', 502, $this->source); })()) > 100)) ? (100) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["progress"]) || array_key_exists("progress", $context) ? $context["progress"] : (function () { throw new RuntimeError('Variable "progress" does not exist.', 502, $this->source); })()), "html", null, true)));
                    yield "%\"
                                                     role=\"progressbar\">
                                                </div>
                                            </div>
                                            <small class=\"text-danger\">
                                                <i class=\"fas fa-exclamation-triangle me-1\"></i>
                                                Expire dans ";
                    // line 508
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["daysLeft"]) || array_key_exists("daysLeft", $context) ? $context["daysLeft"] : (function () { throw new RuntimeError('Variable "daysLeft" does not exist.', 508, $this->source); })()), "html", null, true);
                    yield " jour";
                    yield ((((isset($context["daysLeft"]) || array_key_exists("daysLeft", $context) ? $context["daysLeft"] : (function () { throw new RuntimeError('Variable "daysLeft" does not exist.', 508, $this->source); })()) > 1)) ? ("s") : (""));
                    yield "
                                            </small>
                                        </div>
                                    ";
                }
                // line 512
                yield "                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['batch'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 514
            yield "                        </div>
                        
                        ";
            // line 516
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["activeBatches"]) || array_key_exists("activeBatches", $context) ? $context["activeBatches"] : (function () { throw new RuntimeError('Variable "activeBatches" does not exist.', 516, $this->source); })())) > 3)) {
                // line 517
                yield "                            <div class=\"text-center mt-3\">
                                <a href=\"";
                // line 518
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_index", ["productId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 518, $this->source); })()), "id", [], "any", false, false, false, 518)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-primary\">
                                    Voir tous les lots (";
                // line 519
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["activeBatches"]) || array_key_exists("activeBatches", $context) ? $context["activeBatches"] : (function () { throw new RuntimeError('Variable "activeBatches" does not exist.', 519, $this->source); })())), "html", null, true);
                yield ")
                                </a>
                            </div>
                        ";
            }
            // line 523
            yield "                    ";
        } else {
            // line 524
            yield "                        <div class=\"text-center py-3\">
                            <i class=\"fas fa-box-open fa-2x text-muted mb-2\"></i>
                            <p class=\"text-muted mb-0\">Aucun lot actif en stock</p>
                        </div>
                    ";
        }
        // line 529
        yield "                </div>
            </div>
            
            <!-- Informations dates et historique -->
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-calendar-alt me-2 text-primary\"></i> Historique
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"list-group list-group-flush\">
                        <div class=\"list-group-item border-0 px-0 py-2\">
                            <small class=\"text-muted d-flex justify-content-between align-items-center\">
                                <span><i class=\"fas fa-plus-circle text-success me-2\"></i> Création</span>
                                <span>";
        // line 544
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 544, $this->source); })()), "createdAt", [], "any", false, false, false, 544), "d/m/Y H:i"), "html", null, true);
        yield "</span>
                            </small>
                        </div>
                        
                        ";
        // line 548
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 548, $this->source); })()), "updatedAt", [], "any", false, false, false, 548)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 549
            yield "                        <div class=\"list-group-item border-0 px-0 py-2\">
                            <small class=\"text-muted d-flex justify-content-between align-items-center\">
                                <span><i class=\"fas fa-edit text-warning me-2\"></i> Dernière modification</span>
                                <span>";
            // line 552
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 552, $this->source); })()), "updatedAt", [], "any", false, false, false, 552), "d/m/Y H:i"), "html", null, true);
            yield "</span>
                            </small>
                        </div>
                        ";
        }
        // line 556
        yield "                        
                        ";
        // line 557
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 557, $this->source); })()), "stockBatches", [], "any", false, false, false, 557)) > 0)) {
            // line 558
            yield "                        <div class=\"list-group-item border-0 px-0 py-2\">
                            <small class=\"text-muted d-flex justify-content-between align-items-center\">
                                <span><i class=\"fas fa-cart-plus text-info me-2\"></i> Dernier achat</span>
                                <span>";
            // line 561
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 561, $this->source); })()), "stockBatches", [], "any", false, false, false, 561)), "createdAt", [], "any", false, false, false, 561), "d/m/Y"), "html", null, true);
            yield "</span>
                            </small>
                        </div>
                        ";
        }
        // line 565
        yield "                        
                        <!-- 🔥 Traçabilité modification du stock -->
                        <div class=\"list-group-item border-0 px-0 py-2\">
                            <small class=\"text-muted d-flex justify-content-between align-items-center\">
                                <span><i class=\"fas fa-boxes text-primary me-2\"></i> Stock actuel</span>
                                <span class=\"fw-bold\">";
        // line 570
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 570, $this->source); })()), "stockQuantity", [], "any", false, false, false, 570), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 570)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 570, $this->source); })()), "unit", [], "any", false, false, false, 570), "pièce(s)")) : ("pièce(s)")), "html", null, true);
        yield "</span>
                            </small>
                        </div>
                        
                        ";
        // line 574
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 574, $this->source); })()), "lastStockUpdatedBy", [], "any", false, false, false, 574)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 575
            yield "                        <div class=\"list-group-item border-0 px-0 py-2 bg-light rounded mt-1\">
                            <div class=\"d-flex justify-content-between align-items-start\">
                                <div>
                                    <i class=\"fas fa-history text-info me-2\"></i>
                                    <span class=\"small fw-semibold\">Dernière modification du stock</span>
                                </div>
                                <span class=\"badge bg-secondary\">";
            // line 581
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 581, $this->source); })()), "lastStockUpdatedAt", [], "any", false, false, false, 581), "d/m/Y H:i:s"), "html", null, true);
            yield "</span>
                            </div>
                            ";
            // line 583
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER"))) {
                // line 584
                yield "                            <div class=\"mt-2\">
                                <small class=\"text-muted\">
                                    <i class=\"fas fa-user me-1\"></i> 
                                    <strong>Modifié par :</strong> ";
                // line 587
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "lastStockUpdatedBy", [], "any", false, true, false, 587), "fullName", [], "any", true, true, false, 587)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 587, $this->source); })()), "lastStockUpdatedBy", [], "any", false, false, false, 587), "fullName", [], "any", false, false, false, 587), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 587, $this->source); })()), "lastStockUpdatedBy", [], "any", false, false, false, 587), "email", [], "any", false, false, false, 587))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 587, $this->source); })()), "lastStockUpdatedBy", [], "any", false, false, false, 587), "email", [], "any", false, false, false, 587))), "html", null, true);
                yield "
                                </small>
                            </div>
                            ";
            }
            // line 591
            yield "                            <div class=\"mt-1\">
                                <small class=\"text-muted\">
                                    <i class=\"fas fa-chart-line me-1\"></i>
                                    <strong>Stock après modification :</strong> ";
            // line 594
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 594, $this->source); })()), "stockQuantity", [], "any", false, false, false, 594), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 594)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 594, $this->source); })()), "unit", [], "any", false, false, false, 594), "pièce(s)")) : ("pièce(s)")), "html", null, true);
            yield "
                                </small>
                            </div>
                        </div>
                        ";
        } else {
            // line 599
            yield "                        <div class=\"list-group-item border-0 px-0 py-2\">
                            <small class=\"text-muted d-flex justify-content-between align-items-center\">
                                <span><i class=\"fas fa-info-circle me-2\"></i> Stock initial</span>
                                <span>";
            // line 602
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 602, $this->source); })()), "stockQuantity", [], "any", false, false, false, 602), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 602)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 602, $this->source); })()), "unit", [], "any", false, false, false, 602), "pièce(s)")) : ("pièce(s)")), "html", null, true);
            yield "</span>
                            </small>
                        </div>
                        ";
        }
        // line 606
        yield "                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal pour confirmer la désactivation/activation -->
<div class=\"modal fade\" id=\"toggleStatusModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"toggleStatusModalLabel\">Confirmation</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <p id=\"toggleStatusModalMessage\">Êtes-vous sûr de vouloir modifier le statut de ce produit ?</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"toggleStatusForm\" method=\"post\" action=\"\">
                    <input type=\"hidden\" name=\"_token\" id=\"toggleStatusToken\" value=\"\">
                    <button type=\"submit\" class=\"btn\" id=\"toggleStatusModalButton\">
                        <i class=\"fas fa-check me-2\"></i> Confirmer
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal pour confirmer la suppression (avec vérification du nom si dépendances) -->
<div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Confirmation de suppression
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <div id=\"deleteModalContent\"></div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"deleteForm\" method=\"post\" action=\"\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteToken\" value=\"\">
                    <button type=\"submit\" class=\"btn btn-danger\" id=\"deleteConfirmBtn\">Supprimer</button>
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

    // line 662
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

        // line 663
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
.slide-in-left {
    animation: slideInLeft 0.5s ease-out;
}

@keyframes slideInLeft {
    from { transform: translateX(-20px); opacity: 0; }
    to { transform: translateX(0); opacity: 1; }
}

.float-up {
    animation: floatUp 3s ease-in-out infinite;
}

@keyframes floatUp {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
}

.btn-hover-scale {
    transition: all 0.2s ease;
}

.btn-hover-scale:hover {
    transform: scale(1.05);
}

/* Timeline styles */
.timeline {
    position: relative;
    padding-left: 30px;
}

.timeline::before {
    content: '';
    position: absolute;
    left: 15px;
    top: 0;
    bottom: 0;
    width: 2px;
    background: #e9ecef;
}

.timeline-item {
    position: relative;
    margin-bottom: 20px;
}

.timeline-item::before {
    content: '';
    position: absolute;
    left: -30px;
    top: 5px;
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: #667eea;
    border: 2px solid white;
    box-shadow: 0 0 0 3px #667eea33;
}

.timeline-date {
    font-size: 0.8rem;
    color: #6c757d;
    margin-bottom: 5px;
}

.timeline-content {
    background: #f8f9fa;
    padding: 15px;
    border-radius: 8px;
    border-left: 3px solid #667eea;
}

/* Card hover effects */
.card {
    transition: all 0.3s ease;
}

.card:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 20px rgba(0,0,0,0.1) !important;
}

/* Progress bar for expiry */
.progress {
    border-radius: 10px;
    overflow: hidden;
}

.progress-bar {
    border-radius: 10px;
}

/* Description container with scroll */
.product-description-container {
    line-height: 1.6;
    padding: 10px;
    background-color: #f8f9fa;
    border-radius: 8px;
    border: 1px solid #e9ecef;
}

.product-description-container::-webkit-scrollbar {
    width: 8px;
}

.product-description-container::-webkit-scrollbar-track {
    background: #f1f1f1;
    border-radius: 4px;
}

.product-description-container::-webkit-scrollbar-thumb {
    background: #888;
    border-radius: 4px;
}

.product-description-container::-webkit-scrollbar-thumb:hover {
    background: #555;
}

/* Badge colors */
.badge.bg-warning {
    background-color: #ffc107 !important;
    color: #000 !important;
}

.badge.bg-secondary {
    background-color: #6c757d !important;
}

/* Modal button styles */
#toggleStatusModalButton.btn-danger {
    background-color: #dc3545;
    border-color: #dc3545;
}

#toggleStatusModalButton.btn-success {
    background-color: #198754;
    border-color: #198754;
}

#toggleStatusModalButton:hover {
    opacity: 0.9;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .d-flex.align-items-center {
        flex-direction: column;
        align-items: flex-start !important;
    }
    
    .btn-hover-scale {
        margin-top: 10px;
    }
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 824
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

        // line 825
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Gestion du modal de désactivation/activation
    const toggleStatusModal = document.getElementById('toggleStatusModal');
    if (toggleStatusModal) {
        toggleStatusModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;
            const productId = button.getAttribute('data-product-id');
            const productName = button.getAttribute('data-product-name');
            const isActive = button.getAttribute('data-is-active') === '1';
            const token = button.getAttribute('data-token');
            
            const modalTitle = toggleStatusModal.querySelector('.modal-title');
            const modalMessage = toggleStatusModal.querySelector('#toggleStatusModalMessage');
            const modalButton = toggleStatusModal.querySelector('#toggleStatusModalButton');
            const modalForm = toggleStatusModal.querySelector('#toggleStatusForm');
            const tokenInput = document.getElementById('toggleStatusToken');
            
            if (isActive) {
                modalTitle.textContent = 'Désactiver le produit';
                modalMessage.textContent = `Êtes-vous sûr de vouloir désactiver le produit \"\${productName}\" ?`;
                modalButton.textContent = 'Désactiver';
                modalButton.className = 'btn btn-danger';
            } else {
                modalTitle.textContent = 'Activer le produit';
                modalMessage.textContent = `Êtes-vous sûr de vouloir activer le produit \"\${productName}\" ?`;
                modalButton.textContent = 'Activer';
                modalButton.className = 'btn btn-success';
            }
            
            modalForm.action = `/admin/product/\${productId}/toggle-status`;
            tokenInput.value = token;
        });
    }

    // Gestion du modal de suppression
    const deleteModal = document.getElementById('deleteModal');
    if (deleteModal) {
        deleteModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;
            const productId = button.getAttribute('data-product-id');
            const productName = button.getAttribute('data-product-name');
            const hasDependencies = button.getAttribute('data-has-dependencies') === '1';
            const token = button.getAttribute('data-token');
            
            const modalContent = deleteModal.querySelector('#deleteModalContent');
            const deleteForm = deleteModal.querySelector('#deleteForm');
            const deleteToken = deleteModal.querySelector('#deleteToken');
            const deleteConfirmBtn = deleteModal.querySelector('#deleteConfirmBtn');
            
            deleteForm.action = `/admin/product/\${productId}`;
            deleteToken.value = token;
            
            if (hasDependencies) {
                modalContent.innerHTML = `
                    <div class=\"alert alert-warning\">
                        <i class=\"fas fa-exclamation-triangle me-2\"></i>
                        <strong>Attention !</strong> Ce produit est lié à des achats ou des lots de stock.
                    </div>
                    <p>Pour confirmer la suppression, veuillez taper le nom du produit :</p>
                    <input type=\"text\" id=\"confirmProductName\" class=\"form-control\" placeholder=\"Nom du produit\">
                `;
                deleteConfirmBtn.disabled = true;
                
                const confirmInput = deleteModal.querySelector('#confirmProductName');
                confirmInput.addEventListener('input', function() {
                    deleteConfirmBtn.disabled = (this.value.trim() !== productName);
                });
            } else {
                modalContent.innerHTML = `
                    <p>Êtes-vous sûr de vouloir supprimer le produit <strong>\"\${productName}\"</strong> ?</p>
                    <p class=\"text-danger\"><i class=\"fas fa-exclamation-circle me-1\"></i>Cette action est irréversible.</p>
                `;
                deleteConfirmBtn.disabled = false;
            }
        });
    }

    // Ajouter un indicateur de chargement lors de la soumission des formulaires modaux
    const toggleStatusForm = document.getElementById('toggleStatusForm');
    if (toggleStatusForm) {
        toggleStatusForm.addEventListener('submit', function(event) {
            const submitButton = this.querySelector('button[type=\"submit\"]');
            submitButton.disabled = true;
            submitButton.innerHTML = '<span class=\"spinner-border spinner-border-sm me-2\"></span>Traitement...';
        });
    }

    const deleteForm = document.getElementById('deleteForm');
    if (deleteForm) {
        deleteForm.addEventListener('submit', function(event) {
            const submitButton = this.querySelector('button[type=\"submit\"]');
            submitButton.disabled = true;
            submitButton.innerHTML = '<span class=\"spinner-border spinner-border-sm me-2\"></span>Suppression...';
        });
    }
    
    // Fermer automatiquement les alertes après 5 secondes
    const alerts = document.querySelectorAll('.alert');
    alerts.forEach(alert => {
        setTimeout(() => {
            if (alert && alert.style.display !== 'none') {
                const bsAlert = new bootstrap.Alert(alert);
                bsAlert.close();
            }
        }, 5000);
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
        return "admin/product/show.html.twig";
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
        return array (  1429 => 825,  1416 => 824,  1245 => 663,  1232 => 662,  1167 => 606,  1158 => 602,  1153 => 599,  1143 => 594,  1138 => 591,  1131 => 587,  1126 => 584,  1124 => 583,  1119 => 581,  1111 => 575,  1109 => 574,  1100 => 570,  1093 => 565,  1086 => 561,  1081 => 558,  1079 => 557,  1076 => 556,  1069 => 552,  1064 => 549,  1062 => 548,  1055 => 544,  1038 => 529,  1031 => 524,  1028 => 523,  1021 => 519,  1017 => 518,  1014 => 517,  1012 => 516,  1008 => 514,  1001 => 512,  992 => 508,  983 => 502,  980 => 501,  977 => 500,  975 => 499,  971 => 497,  969 => 496,  962 => 492,  957 => 491,  950 => 487,  945 => 485,  942 => 484,  940 => 483,  931 => 479,  925 => 476,  920 => 473,  916 => 472,  913 => 471,  911 => 470,  908 => 469,  906 => 468,  892 => 456,  883 => 452,  879 => 451,  875 => 450,  871 => 449,  867 => 448,  861 => 444,  858 => 443,  856 => 442,  849 => 438,  845 => 437,  841 => 436,  837 => 435,  833 => 434,  829 => 433,  821 => 427,  812 => 422,  810 => 421,  807 => 420,  801 => 416,  799 => 415,  785 => 404,  776 => 398,  766 => 391,  758 => 386,  744 => 375,  725 => 358,  718 => 353,  715 => 352,  706 => 346,  703 => 345,  701 => 344,  698 => 343,  680 => 338,  676 => 336,  674 => 335,  669 => 333,  665 => 332,  660 => 329,  654 => 326,  650 => 324,  648 => 323,  644 => 322,  638 => 319,  630 => 314,  624 => 312,  607 => 311,  604 => 310,  602 => 309,  587 => 296,  578 => 290,  567 => 281,  565 => 280,  558 => 275,  551 => 270,  544 => 266,  539 => 265,  537 => 264,  520 => 249,  516 => 247,  510 => 244,  507 => 243,  505 => 242,  500 => 239,  493 => 235,  488 => 232,  486 => 231,  479 => 227,  473 => 223,  466 => 218,  464 => 217,  461 => 216,  456 => 214,  453 => 213,  451 => 212,  448 => 211,  443 => 209,  440 => 208,  438 => 207,  434 => 205,  428 => 201,  422 => 197,  420 => 196,  412 => 191,  406 => 187,  400 => 184,  395 => 181,  393 => 180,  388 => 178,  379 => 172,  372 => 168,  347 => 146,  339 => 141,  335 => 140,  328 => 136,  324 => 135,  315 => 129,  307 => 128,  303 => 126,  294 => 120,  281 => 111,  278 => 110,  276 => 109,  267 => 102,  265 => 101,  257 => 95,  250 => 90,  248 => 89,  234 => 79,  228 => 78,  225 => 77,  222 => 76,  219 => 75,  214 => 74,  212 => 73,  198 => 66,  191 => 61,  183 => 58,  179 => 56,  177 => 55,  165 => 48,  151 => 41,  136 => 29,  129 => 25,  120 => 19,  112 => 14,  103 => 7,  90 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/product/show.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}{{ product.name }} - Détails du produit{% endblock %}

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
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        {{ product.name|u.truncate(30, '...') }}
                    </li>
                </ol>
            </nav>
            
            <div class=\"d-flex align-items-center\">
                <a href=\"{{ path('app_admin_product_index') }}\" class=\"btn btn-outline-secondary me-3 btn-hover-scale\">
                    <i class=\"fas fa-arrow-left me-1\"></i> Retour
                </a>
                <h1 class=\"h3 mb-0 text-gray-800 slide-in-left\">
                    <i class=\"fas fa-box me-2\"></i> {{ product.name }}
                </h1>
            </div>
        </div>
        <div class=\"float-up\">
            <i class=\"fas fa-box fa-3x text-primary opacity-75\"></i>
        </div>
    </div>

    <!-- Stats rapides -->
    <div class=\"row mb-4\">
        <!-- Carte 1 : Stock actuel (toujours visible) -->
        <div class=\"{% if companyType == 'restaurant' %}col-xl-4 col-md-6{% else %}col-xl-3 col-md-6{% endif %} mb-3\">
            <div class=\"card border-0 bg-primary bg-opacity-10 shadow-sm h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"flex-grow-1\">
                            <h6 class=\"text-white-50 mb-1\">Stock actuel</h6>
                            <h3 class=\"mb-0 fw-bold text-white\">
                                {{ product.stockQuantity }} {{ product.unit|default('pièce(s)') }}
                            </h3>
                        </div>
                        <div class=\"bg-primary bg-opacity-25 p-3 rounded\">
                            <i class=\"fas fa-boxes fa-lg text-white\"></i>
                        </div>
                    </div>
                    {% if product.minQuantity > 0 %}
                        <small class=\"text-white-50\">
                            <i class=\"fas fa-exclamation-circle me-1\"></i>
                            Seuil d'alerte: {{ product.minQuantity }} {{ product.unit|default('pièce(s)') }}
                        </small>
                    {% endif %}
                </div>
            </div>
        </div>
        
        <!-- Carte 2 : Valeur stock (basée sur les lots réels) -->
        <div class=\"{% if companyType == 'restaurant' %}col-xl-4 col-md-6{% else %}col-xl-3 col-md-6{% endif %} mb-3\">
            <div class=\"card border-0 bg-success bg-opacity-10 shadow-sm h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"flex-grow-1\">
                            <h6 class=\"text-white-50 mb-1\">Valeur stock</h6>
                            <h3 class=\"mb-0 fw-bold text-white\">
                                {% set totalStockValue = 0 %}
                                {% for batch in product.stockBatches %}
                                    {% if batch.isActive %}
                                        {% set totalStockValue = totalStockValue + (batch.currentQuantity * batch.unitPrice) %}
                                    {% endif %}
                                {% endfor %}
                                {{ totalStockValue|price_with_currency(product.hmaService) }}
                            </h3>
                        </div>
                        <div class=\"bg-success bg-opacity-25 p-3 rounded\">
                            <i class=\"fas fa-coins fa-lg text-white\"></i>
                        </div>
                    </div>
                    <small class=\"text-white-50\">
                        <i class=\"fas fa-calculator me-1\"></i>
                        Basé sur le coût d'achat réel des lots
                        {% if companyType == 'restaurant' %}
                            <span class=\"d-block mt-1\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                Calculé à partir des prix d'achat des lots actifs
                            </span>
                        {% endif %}
                    </small>
                </div>
            </div>
        </div>
        
        <!-- Carte 3 : Marge (uniquement pour non restaurant) -->
        {% if companyType != 'restaurant' %}
        <div class=\"col-xl-3 col-md-6 mb-3\">
            <div class=\"card border-0 bg-info bg-opacity-10 shadow-sm h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"flex-grow-1\">
                            <h6 class=\"text-white-50 mb-1\">Marge</h6>
                            <h3 class=\"mb-0 fw-bold text-white\">
                                {% set margin = product.salePrice - product.purchasePrice %}
                                {% set marginPercentage = product.purchasePrice > 0 ? (margin / product.purchasePrice * 100)|round(1) : 0 %}
                                {{ marginPercentage }}%
                            </h3>
                        </div>
                        <div class=\"bg-info bg-opacity-25 p-3 rounded\">
                            <i class=\"fas fa-chart-line fa-lg text-white\"></i>
                        </div>
                    </div>
                    <small class=\"text-white-50\">
                        <i class=\"fas fa-arrow-up me-1\"></i>
                        {{ margin|price_with_currency(product.hmaService) }} par unité
                    </small>
                </div>
            </div>
        </div>
        {% endif %}
        
        <!-- Carte 4 : Statut (toujours visible) -->
        <div class=\"{% if companyType == 'restaurant' %}col-xl-4 col-md-6{% else %}col-xl-3 col-md-6{% endif %} mb-3\">
            <div class=\"card border-0 {{ product.isActive ? 'bg-success' : 'bg-danger' }} bg-opacity-10 shadow-sm h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"flex-grow-1\">
                            <h6 class=\"text-white-50 mb-1\">Statut</h6>
                            <div>
                                <span class=\"badge {{ product.isActive ? 'bg-success' : 'bg-danger' }} px-3 py-2\">
                                    {{ product.isActive ? 'ACTIF' : 'INACTIF' }}
                                </span>
                            </div>
                        </div>
                        <div class=\"{{ product.isActive ? 'bg-success' : 'bg-danger' }} bg-opacity-25 p-3 rounded\">
                            <i class=\"fas {{ product.isActive ? 'fa-toggle-on' : 'fa-toggle-off' }} fa-lg text-white\"></i>
                        </div>
                    </div>
                    <small class=\"text-white-50\">
                        <i class=\"fas fa-calendar me-1\"></i>
                        Créé le {{ product.createdAt|date('d/m/Y') }}
                    </small>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <!-- Colonne gauche: Informations produit -->
        <div class=\"col-lg-8\">
            <div class=\"row\">
                <!-- Informations produit -->
                <div class=\"col-md-6 mb-4\">
                    <div class=\"card border-0 shadow-sm h-100\">
                        <div class=\"card-header bg-white py-3\">
                            <h5 class=\"card-title mb-0\">
                                <i class=\"fas fa-info-circle me-2\"></i> Informations du produit
                            </h5>
                        </div>
                        <div class=\"card-body\">
                            <dl class=\"row mb-0\">
                                <dt class=\"col-sm-5 text-muted\">Nom</dt>
                                <dd class=\"col-sm-7 fw-bold\">{{ product.name }}</dd>
                                
                                <dt class=\"col-sm-5 text-muted\">Code-barres</dt>
                                <dd class=\"col-sm-7\">
                                    <span class=\"badge bg-secondary\">{{ product.barcode }}</span>
                                </dd>
                                
                                <dt class=\"col-sm-5 text-muted\">Catégorie</dt>
                                <dd class=\"col-sm-7\">
                                    <span class=\"badge bg-primary\">
                                        <i class=\"fas fa-folder me-1\"></i>{{ product.category.name }}
                                    </span>
                                    {% if product.category.parent %}
                                        <br>
                                        <small class=\"text-muted\">
                                            <i class=\"fas fa-level-up-alt me-1\"></i>
                                            Catégorie principale: {{ product.category.parent.name }}
                                        </small>
                                    {% endif %}
                                </dd>
                                
                                <dt class=\"col-sm-5 text-muted\">Unité de mesure</dt>
                                <dd class=\"col-sm-7\">
                                    {{ product.unit|default('pièce')|capitalize }}
                                </dd>
                                
                                <dt class=\"col-sm-5 text-muted\">Type de produit</dt>
                                <dd class=\"col-sm-7\">
                                    {% if product.hasExpiryDate() %}
                                        <span class=\"badge bg-warning text-dark\">
                                            <i class=\"fas fa-calendar-alt me-1\"></i> Périssable
                                        </span>
                                    {% else %}
                                        <span class=\"badge bg-secondary\">
                                            <i class=\"fas fa-infinity me-1\"></i> Non périssable
                                        </span>
                                    {% endif %}
                                </dd>
                                
                                {% if product.dosage %}
                                    <dt class=\"col-sm-5 text-muted\">Dosage</dt>
                                    <dd class=\"col-sm-7\">{{ product.dosage }}</dd>
                                {% endif %}
                                
                                {% if product.form %}
                                    <dt class=\"col-sm-5 text-muted\">Forme</dt>
                                    <dd class=\"col-sm-7\">{{ product.form }}</dd>
                                {% endif %}
                                
                                {% if product.prescriptionRequired %}
                                    <dt class=\"col-sm-5 text-muted\">Prescription</dt>
                                    <dd class=\"col-sm-7\">
                                        <span class=\"badge bg-warning text-dark\">Obligatoire</span>
                                    </dd>
                                {% endif %}
                                
                                <dt class=\"col-sm-5 text-muted\">Prix d'achat</dt>
                                <dd class=\"col-sm-7\">
                                    <span class=\"text-primary fw-bold\">
                                        {{ product.purchasePrice|price_with_currency(product.hmaService) }}
                                    </span>
                                </dd>
                                
                                {% if companyType != 'restaurant' %}
                                    <dt class=\"col-sm-5 text-muted\">Prix de vente</dt>
                                    <dd class=\"col-sm-7\">
                                        <span class=\"text-success fw-bold\">
                                            {{ product.salePrice|price_with_currency(product.hmaService) }}
                                        </span>
                                    </dd>
                                {% endif %}
                                
                                <dt class=\"col-sm-5 text-muted\">Stock min.</dt>
                                <dd class=\"col-sm-7\">
                                    {% if product.minQuantity > 0 %}
                                        <span class=\"badge bg-warning text-dark\">
                                            {{ product.minQuantity }}
                                        </span>
                                    {% else %}
                                        <span class=\"text-muted\">Non défini</span>
                                    {% endif %}
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
                
                <!-- Image du produit -->
                <div class=\"col-md-6 mb-4\">
                    <div class=\"card border-0 shadow-sm h-100\">
                        <div class=\"card-header bg-white py-3\">
                            <h5 class=\"card-title mb-0\">
                                <i class=\"fas fa-image me-2\"></i> Image du produit
                            </h5>
                        </div>
                        <div class=\"card-body d-flex align-items-center justify-content-center\">
                            {% if product.image and product.image != 'default-product.png' %}
                                <img src=\"{{ asset('uploads/products/' ~ product.image) }}\" 
                                     alt=\"{{ product.name }}\" 
                                     class=\"img-fluid rounded shadow-lg\"
                                     style=\"max-height: 250px; object-fit: contain;\">
                            {% else %}
                                <div class=\"text-center text-muted py-5\">
                                    <i class=\"fas fa-box fa-5x mb-3\"></i>
                                    <p class=\"mb-0\">Aucune image disponible</p>
                                </div>
                            {% endif %}
                        </div>
                    </div>
                </div>
                
                <!-- Description du produit -->
                {% if product.description %}
                <div class=\"col-12 mb-4\">
                    <div class=\"card border-0 shadow-sm\">
                        <div class=\"card-header bg-white py-3\">
                            <h5 class=\"card-title mb-0\">
                                <i class=\"fas fa-align-left me-2\"></i> Description du produit
                            </h5>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"product-description-container\" style=\"max-height: 300px; overflow-y: auto;\">
                                {{ product.description|nl2br }}
                            </div>
                        </div>
                    </div>
                </div>
                {% endif %}
                
                <!-- Timeline des mouvements récents -->
                <div class=\"col-12 mb-4\">
                    <div class=\"card border-0 shadow-sm\">
                        <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center\">
                            <h5 class=\"card-title mb-0\">
                                <i class=\"fas fa-history me-2\"></i> Derniers mouvements de stock
                            </h5>
                            <a href=\"#\" class=\"btn btn-sm btn-outline-primary\">
                                <i class=\"fas fa-exchange-alt me-1\"></i> Voir tous
                            </a>
                        </div>
                        <div class=\"card-body\">
                            {% if product.stockBatches|length > 0 %}
                                <div class=\"timeline\">
                                    {% for batch in product.stockBatches|slice(0, 5)|sort((a, b) => b.createdAt <=> a.createdAt) %}
                                        <div class=\"timeline-item {{ loop.index is odd ? 'timeline-item-left' : 'timeline-item-right' }}\">
                                            <div class=\"timeline-date\">
                                                {{ batch.createdAt|date('d/m/Y') }}
                                            </div>
                                            <div class=\"timeline-content\">
                                                <div class=\"d-flex justify-content-between align-items-center\">
                                                    <div>
                                                        <h6 class=\"mb-1\">Lot {{ batch.batchNumber }}</h6>
                                                        <p class=\"mb-0 text-muted small\">
                                                            <i class=\"fas fa-box me-1\"></i>
                                                            Quantité: {{ batch.initialQuantity }}
                                                            {% if batch.expiryDate %}
                                                                <span class=\"ms-2\">
                                                                    <i class=\"fas fa-calendar-alt me-1\"></i>
                                                                    Exp: {{ batch.expiryDate|date('d/m/Y') }}
                                                                </span>
                                                            {% endif %}
                                                        </p>
                                                    </div>
                                                    <div>
                                                        <span class=\"badge {{ batch.isActive ? 'bg-success' : 'bg-secondary' }}\">
                                                            {{ batch.isActive ? 'Actif' : 'Inactif' }}
                                                        </span>
                                                        {% if batch.expiryDate and batch.expiryDate < date() %}
                                                            <span class=\"badge bg-danger ms-1\">Expiré</span>
                                                        {% endif %}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    {% endfor %}
                                </div>
                                {% if product.stockBatches|length > 5 %}
                                    <div class=\"text-center mt-3\">
                                        <a href=\"{{ path('app_admin_stock_batch_index', {'productId': product.id}) }}\" 
                                            class=\"btn btn-sm btn-outline-info flex-fill\" title=\"Lots de stock\">
                                            <i class=\"fas fa-boxes\"></i> Lots
                                        </a>
                                    </div>
                                {% endif %}
                            {% else %}
                                <div class=\"text-center py-4\">
                                    <i class=\"fas fa-box-open fa-3x text-muted mb-3\"></i>
                                    <p class=\"text-muted mb-0\">Aucun mouvement de stock enregistré</p>
                                </div>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Colonne droite: Actions et lots -->
        <div class=\"col-lg-4\">
            <!-- Actions rapides -->
            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-bolt me-2\"></i> Actions rapides
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"d-grid gap-2\">
                        <a href=\"{{ path('app_admin_product_edit', {'id': product.id}) }}\" 
                           class=\"btn btn-warning\">
                            <i class=\"fas fa-edit me-2\"></i> Modifier le produit
                        </a>

                        <div class=\"dropdown\">
                            <button class=\"btn btn-outline-primary dropdown-toggle w-100\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                <i class=\"fas fa-print me-2\"></i> Imprimer
                            </button>
                            <ul class=\"dropdown-menu w-100\">
                                <li>
                                    <a class=\"dropdown-item\" href=\"#\" onclick=\"window.open('{{ path('app_admin_product_print_barcode', {'id': product.id}) }}', '_blank'); return false;\">
                                        <i class=\"fas fa-barcode me-2\"></i> Étiquette code-barres
                                    </a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item\" href=\"#\" onclick=\"window.open('{{ path('app_admin_product_print_sheet', {'id': product.id}) }}', '_blank'); return false;\">
                                        <i class=\"fas fa-file-alt me-2\"></i> Fiche produit
                                    </a>
                                </li>
                            </ul>
                        </div>
                        
                        <a href=\"{{ path('purchase_cart') }}\" 
                           class=\"btn btn-success\">
                            <i class=\"fas fa-plus me-2\"></i> Nouvel achat
                        </a>
                        
                        <!-- Lien vers les lots -->
                        <a href=\"{{ path('app_admin_stock_batch_index', {'productId': product.id}) }}\" 
                           class=\"btn btn-outline-info\">
                            <i class=\"fas fa-boxes me-2\"></i> Gérer les lots
                        </a>
                        
                        <!-- Lien vers les mouvements de stock (à créer) -->
                        <a href=\"#\" class=\"btn btn-outline-primary\">
                            <i class=\"fas fa-exchange-alt me-2\"></i> Voir les mouvements
                        </a>
                        
                        <!-- Lien vers les commandes liées (si pas restaurant) -->
                        {% if companyType != 'restaurant' %}
                        <a href=\"#\" class=\"btn btn-outline-success\">
                            <i class=\"fas fa-shopping-cart me-2\"></i> Commandes liées
                        </a>
                        {% endif %}
                        
                        {% if companyType != 'restaurant' %}
                            <a href=\"{{ path('app_admin_product_promotions', {'id': product.id}) }}\" 
                            class=\"btn btn-sm btn-outline-warning flex-fill\" title=\"Promotions\">
                                <i class=\"fas fa-tags me-1\"></i> Promos
                            </a>
                        {% endif %}
                        
                        <!-- Bouton toggle status (ouvre modal) -->
                        <button type=\"button\" 
                                class=\"btn btn-outline-secondary toggle-status-btn\"
                                data-bs-toggle=\"modal\" 
                                data-bs-target=\"#toggleStatusModal\"
                                data-product-id=\"{{ product.id }}\"
                                data-product-name=\"{{ product.name }}\"
                                data-is-active=\"{{ product.isActive ? '1' : '0' }}\"
                                data-token=\"{{ csrf_token('toggle-status' ~ product.id) }}\">
                            <i class=\"fas {{ product.isActive ? 'fa-toggle-on' : 'fa-toggle-off' }} me-2\"></i>
                            {{ product.isActive ? 'Désactiver le produit' : 'Activer le produit' }}
                        </button>
                        
                        <!-- Bouton supprimer (visible pour admin) -->
                        {% if is_granted('ROLE_ADMIN') %}
                            {% set hasDependencies = product.purchaseItems|length > 0 or product.stockBatches|length > 0 %}
                            <button type=\"button\" 
                                    class=\"btn btn-outline-danger delete-product-btn\"
                                    data-bs-toggle=\"modal\" 
                                    data-bs-target=\"#deleteModal\"
                                    data-product-id=\"{{ product.id }}\"
                                    data-product-name=\"{{ product.name }}\"
                                    data-has-dependencies=\"{{ hasDependencies ? '1' : '0' }}\"
                                    data-token=\"{{ csrf_token('delete' ~ product.id) }}\"
                                    {% if hasDependencies %}title=\"Ce produit a des dépendances\"{% endif %}>
                                <i class=\"fas fa-trash me-2\"></i> Supprimer le produit
                            </button>
                        {% endif %}
                    </div>
                </div>
            </div>
            
            <!-- Liste des lots actifs -->
            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-boxes me-2\"></i> Lots en stock
                    </h5>
                </div>
                <div class=\"card-body\">
                    {% set activeBatches = product.stockBatches|filter(b => b.isActive and b.currentQuantity > 0)|sort((a, b) => a.expiryDate <=> b.expiryDate) %}
                    
                    {% if activeBatches|length > 0 %}
                        <div class=\"list-group list-group-flush\">
                            {% for batch in activeBatches|slice(0, 3) %}
                                <div class=\"list-group-item border-0 px-0 py-2\">
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <div>
                                            <h6 class=\"mb-1\">Lot {{ batch.batchNumber }}</h6>
                                            <small class=\"text-muted\">
                                                <i class=\"fas fa-box me-1\"></i>
                                                {{ batch.currentQuantity }}/{{ batch.initialQuantity }}
                                            </small>
                                        </div>
                                        <div class=\"text-end\">
                                            {% if batch.expiryDate %}
                                                <div class=\"mb-1\">
                                                    <small class=\"{{ batch.expiryDate < date('+30 days') ? 'text-danger' : 'text-muted' }}\">
                                                        <i class=\"fas fa-calendar-alt me-1\"></i>
                                                        {{ batch.expiryDate|date('d/m/Y') }}
                                                    </small>
                                                </div>
                                            {% endif %}
                                            <span class=\"badge {{ batch.currentQuantity <= 10 ? 'bg-warning' : 'bg-success' }}\">
                                                {{ batch.currentQuantity }} restants
                                            </span>
                                        </div>
                                    </div>
                                    {% if batch.expiryDate and batch.expiryDate < date('+30 days') %}
                                        <div class=\"mt-2\">
                                            <div class=\"progress\" style=\"height: 5px;\">
                                                {% set daysLeft = batch.expiryDate.diff(date()).days %}
                                                {% set progress = (daysLeft / 30) * 100 %}
                                                <div class=\"progress-bar bg-danger\" 
                                                     style=\"width: {{ progress > 100 ? 100 : progress }}%\"
                                                     role=\"progressbar\">
                                                </div>
                                            </div>
                                            <small class=\"text-danger\">
                                                <i class=\"fas fa-exclamation-triangle me-1\"></i>
                                                Expire dans {{ daysLeft }} jour{{ daysLeft > 1 ? 's' : '' }}
                                            </small>
                                        </div>
                                    {% endif %}
                                </div>
                            {% endfor %}
                        </div>
                        
                        {% if activeBatches|length > 3 %}
                            <div class=\"text-center mt-3\">
                                <a href=\"{{ path('app_admin_stock_batch_index', {'productId': product.id}) }}\" class=\"btn btn-sm btn-outline-primary\">
                                    Voir tous les lots ({{ activeBatches|length }})
                                </a>
                            </div>
                        {% endif %}
                    {% else %}
                        <div class=\"text-center py-3\">
                            <i class=\"fas fa-box-open fa-2x text-muted mb-2\"></i>
                            <p class=\"text-muted mb-0\">Aucun lot actif en stock</p>
                        </div>
                    {% endif %}
                </div>
            </div>
            
            <!-- Informations dates et historique -->
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-calendar-alt me-2 text-primary\"></i> Historique
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"list-group list-group-flush\">
                        <div class=\"list-group-item border-0 px-0 py-2\">
                            <small class=\"text-muted d-flex justify-content-between align-items-center\">
                                <span><i class=\"fas fa-plus-circle text-success me-2\"></i> Création</span>
                                <span>{{ product.createdAt|date('d/m/Y H:i') }}</span>
                            </small>
                        </div>
                        
                        {% if product.updatedAt %}
                        <div class=\"list-group-item border-0 px-0 py-2\">
                            <small class=\"text-muted d-flex justify-content-between align-items-center\">
                                <span><i class=\"fas fa-edit text-warning me-2\"></i> Dernière modification</span>
                                <span>{{ product.updatedAt|date('d/m/Y H:i') }}</span>
                            </small>
                        </div>
                        {% endif %}
                        
                        {% if product.stockBatches|length > 0 %}
                        <div class=\"list-group-item border-0 px-0 py-2\">
                            <small class=\"text-muted d-flex justify-content-between align-items-center\">
                                <span><i class=\"fas fa-cart-plus text-info me-2\"></i> Dernier achat</span>
                                <span>{{ product.stockBatches|first.createdAt|date('d/m/Y') }}</span>
                            </small>
                        </div>
                        {% endif %}
                        
                        <!-- 🔥 Traçabilité modification du stock -->
                        <div class=\"list-group-item border-0 px-0 py-2\">
                            <small class=\"text-muted d-flex justify-content-between align-items-center\">
                                <span><i class=\"fas fa-boxes text-primary me-2\"></i> Stock actuel</span>
                                <span class=\"fw-bold\">{{ product.stockQuantity }} {{ product.unit|default('pièce(s)') }}</span>
                            </small>
                        </div>
                        
                        {% if product.lastStockUpdatedBy %}
                        <div class=\"list-group-item border-0 px-0 py-2 bg-light rounded mt-1\">
                            <div class=\"d-flex justify-content-between align-items-start\">
                                <div>
                                    <i class=\"fas fa-history text-info me-2\"></i>
                                    <span class=\"small fw-semibold\">Dernière modification du stock</span>
                                </div>
                                <span class=\"badge bg-secondary\">{{ product.lastStockUpdatedAt|date('d/m/Y H:i:s') }}</span>
                            </div>
                            {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_MANAGER') %}
                            <div class=\"mt-2\">
                                <small class=\"text-muted\">
                                    <i class=\"fas fa-user me-1\"></i> 
                                    <strong>Modifié par :</strong> {{ product.lastStockUpdatedBy.fullName|default(product.lastStockUpdatedBy.email) }}
                                </small>
                            </div>
                            {% endif %}
                            <div class=\"mt-1\">
                                <small class=\"text-muted\">
                                    <i class=\"fas fa-chart-line me-1\"></i>
                                    <strong>Stock après modification :</strong> {{ product.stockQuantity }} {{ product.unit|default('pièce(s)') }}
                                </small>
                            </div>
                        </div>
                        {% else %}
                        <div class=\"list-group-item border-0 px-0 py-2\">
                            <small class=\"text-muted d-flex justify-content-between align-items-center\">
                                <span><i class=\"fas fa-info-circle me-2\"></i> Stock initial</span>
                                <span>{{ product.stockQuantity }} {{ product.unit|default('pièce(s)') }}</span>
                            </small>
                        </div>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal pour confirmer la désactivation/activation -->
<div class=\"modal fade\" id=\"toggleStatusModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"toggleStatusModalLabel\">Confirmation</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <p id=\"toggleStatusModalMessage\">Êtes-vous sûr de vouloir modifier le statut de ce produit ?</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"toggleStatusForm\" method=\"post\" action=\"\">
                    <input type=\"hidden\" name=\"_token\" id=\"toggleStatusToken\" value=\"\">
                    <button type=\"submit\" class=\"btn\" id=\"toggleStatusModalButton\">
                        <i class=\"fas fa-check me-2\"></i> Confirmer
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal pour confirmer la suppression (avec vérification du nom si dépendances) -->
<div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Confirmation de suppression
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <div id=\"deleteModalContent\"></div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"deleteForm\" method=\"post\" action=\"\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteToken\" value=\"\">
                    <button type=\"submit\" class=\"btn btn-danger\" id=\"deleteConfirmBtn\">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
.slide-in-left {
    animation: slideInLeft 0.5s ease-out;
}

@keyframes slideInLeft {
    from { transform: translateX(-20px); opacity: 0; }
    to { transform: translateX(0); opacity: 1; }
}

.float-up {
    animation: floatUp 3s ease-in-out infinite;
}

@keyframes floatUp {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
}

.btn-hover-scale {
    transition: all 0.2s ease;
}

.btn-hover-scale:hover {
    transform: scale(1.05);
}

/* Timeline styles */
.timeline {
    position: relative;
    padding-left: 30px;
}

.timeline::before {
    content: '';
    position: absolute;
    left: 15px;
    top: 0;
    bottom: 0;
    width: 2px;
    background: #e9ecef;
}

.timeline-item {
    position: relative;
    margin-bottom: 20px;
}

.timeline-item::before {
    content: '';
    position: absolute;
    left: -30px;
    top: 5px;
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: #667eea;
    border: 2px solid white;
    box-shadow: 0 0 0 3px #667eea33;
}

.timeline-date {
    font-size: 0.8rem;
    color: #6c757d;
    margin-bottom: 5px;
}

.timeline-content {
    background: #f8f9fa;
    padding: 15px;
    border-radius: 8px;
    border-left: 3px solid #667eea;
}

/* Card hover effects */
.card {
    transition: all 0.3s ease;
}

.card:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 20px rgba(0,0,0,0.1) !important;
}

/* Progress bar for expiry */
.progress {
    border-radius: 10px;
    overflow: hidden;
}

.progress-bar {
    border-radius: 10px;
}

/* Description container with scroll */
.product-description-container {
    line-height: 1.6;
    padding: 10px;
    background-color: #f8f9fa;
    border-radius: 8px;
    border: 1px solid #e9ecef;
}

.product-description-container::-webkit-scrollbar {
    width: 8px;
}

.product-description-container::-webkit-scrollbar-track {
    background: #f1f1f1;
    border-radius: 4px;
}

.product-description-container::-webkit-scrollbar-thumb {
    background: #888;
    border-radius: 4px;
}

.product-description-container::-webkit-scrollbar-thumb:hover {
    background: #555;
}

/* Badge colors */
.badge.bg-warning {
    background-color: #ffc107 !important;
    color: #000 !important;
}

.badge.bg-secondary {
    background-color: #6c757d !important;
}

/* Modal button styles */
#toggleStatusModalButton.btn-danger {
    background-color: #dc3545;
    border-color: #dc3545;
}

#toggleStatusModalButton.btn-success {
    background-color: #198754;
    border-color: #198754;
}

#toggleStatusModalButton:hover {
    opacity: 0.9;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .d-flex.align-items-center {
        flex-direction: column;
        align-items: flex-start !important;
    }
    
    .btn-hover-scale {
        margin-top: 10px;
    }
}
</style>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Gestion du modal de désactivation/activation
    const toggleStatusModal = document.getElementById('toggleStatusModal');
    if (toggleStatusModal) {
        toggleStatusModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;
            const productId = button.getAttribute('data-product-id');
            const productName = button.getAttribute('data-product-name');
            const isActive = button.getAttribute('data-is-active') === '1';
            const token = button.getAttribute('data-token');
            
            const modalTitle = toggleStatusModal.querySelector('.modal-title');
            const modalMessage = toggleStatusModal.querySelector('#toggleStatusModalMessage');
            const modalButton = toggleStatusModal.querySelector('#toggleStatusModalButton');
            const modalForm = toggleStatusModal.querySelector('#toggleStatusForm');
            const tokenInput = document.getElementById('toggleStatusToken');
            
            if (isActive) {
                modalTitle.textContent = 'Désactiver le produit';
                modalMessage.textContent = `Êtes-vous sûr de vouloir désactiver le produit \"\${productName}\" ?`;
                modalButton.textContent = 'Désactiver';
                modalButton.className = 'btn btn-danger';
            } else {
                modalTitle.textContent = 'Activer le produit';
                modalMessage.textContent = `Êtes-vous sûr de vouloir activer le produit \"\${productName}\" ?`;
                modalButton.textContent = 'Activer';
                modalButton.className = 'btn btn-success';
            }
            
            modalForm.action = `/admin/product/\${productId}/toggle-status`;
            tokenInput.value = token;
        });
    }

    // Gestion du modal de suppression
    const deleteModal = document.getElementById('deleteModal');
    if (deleteModal) {
        deleteModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;
            const productId = button.getAttribute('data-product-id');
            const productName = button.getAttribute('data-product-name');
            const hasDependencies = button.getAttribute('data-has-dependencies') === '1';
            const token = button.getAttribute('data-token');
            
            const modalContent = deleteModal.querySelector('#deleteModalContent');
            const deleteForm = deleteModal.querySelector('#deleteForm');
            const deleteToken = deleteModal.querySelector('#deleteToken');
            const deleteConfirmBtn = deleteModal.querySelector('#deleteConfirmBtn');
            
            deleteForm.action = `/admin/product/\${productId}`;
            deleteToken.value = token;
            
            if (hasDependencies) {
                modalContent.innerHTML = `
                    <div class=\"alert alert-warning\">
                        <i class=\"fas fa-exclamation-triangle me-2\"></i>
                        <strong>Attention !</strong> Ce produit est lié à des achats ou des lots de stock.
                    </div>
                    <p>Pour confirmer la suppression, veuillez taper le nom du produit :</p>
                    <input type=\"text\" id=\"confirmProductName\" class=\"form-control\" placeholder=\"Nom du produit\">
                `;
                deleteConfirmBtn.disabled = true;
                
                const confirmInput = deleteModal.querySelector('#confirmProductName');
                confirmInput.addEventListener('input', function() {
                    deleteConfirmBtn.disabled = (this.value.trim() !== productName);
                });
            } else {
                modalContent.innerHTML = `
                    <p>Êtes-vous sûr de vouloir supprimer le produit <strong>\"\${productName}\"</strong> ?</p>
                    <p class=\"text-danger\"><i class=\"fas fa-exclamation-circle me-1\"></i>Cette action est irréversible.</p>
                `;
                deleteConfirmBtn.disabled = false;
            }
        });
    }

    // Ajouter un indicateur de chargement lors de la soumission des formulaires modaux
    const toggleStatusForm = document.getElementById('toggleStatusForm');
    if (toggleStatusForm) {
        toggleStatusForm.addEventListener('submit', function(event) {
            const submitButton = this.querySelector('button[type=\"submit\"]');
            submitButton.disabled = true;
            submitButton.innerHTML = '<span class=\"spinner-border spinner-border-sm me-2\"></span>Traitement...';
        });
    }

    const deleteForm = document.getElementById('deleteForm');
    if (deleteForm) {
        deleteForm.addEventListener('submit', function(event) {
            const submitButton = this.querySelector('button[type=\"submit\"]');
            submitButton.disabled = true;
            submitButton.innerHTML = '<span class=\"spinner-border spinner-border-sm me-2\"></span>Suppression...';
        });
    }
    
    // Fermer automatiquement les alertes après 5 secondes
    const alerts = document.querySelectorAll('.alert');
    alerts.forEach(alert => {
        setTimeout(() => {
            if (alert && alert.style.display !== 'none') {
                const bsAlert = new bootstrap.Alert(alert);
                bsAlert.close();
            }
        }, 5000);
    });
});
</script>
{% endblock %}", "admin/product/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\product\\show.html.twig");
    }
}
