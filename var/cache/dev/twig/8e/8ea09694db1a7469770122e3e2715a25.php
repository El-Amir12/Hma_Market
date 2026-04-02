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
        <div class=\"col-xl-3 col-md-6 mb-3\">
            <div class=\"card border-0 bg-primary bg-opacity-10 shadow-sm h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"flex-grow-1\">
                            <h6 class=\"text-muted mb-1\">Stock actuel</h6>
                            <h3 class=\"mb-0 fw-bold\">";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 46, $this->source); })()), "stockQuantity", [], "any", false, false, false, 46), "html", null, true);
        yield "</h3>
                        </div>
                        <div class=\"bg-primary bg-opacity-25 p-3 rounded\">
                            <i class=\"fas fa-boxes fa-lg text-primary\"></i>
                        </div>
                    </div>
                    ";
        // line 52
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 52, $this->source); })()), "minQuantity", [], "any", false, false, false, 52) > 0)) {
            // line 53
            yield "                        <small class=\"text-muted\">
                            <i class=\"fas fa-exclamation-circle me-1\"></i>
                            Seuil d'alerte: ";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 55, $this->source); })()), "minQuantity", [], "any", false, false, false, 55), "html", null, true);
            yield "
                        </small>
                    ";
        }
        // line 58
        yield "                </div>
            </div>
        </div>
        
        <div class=\"col-xl-3 col-md-6 mb-3\">
            <div class=\"card border-0 bg-success bg-opacity-10 shadow-sm h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"flex-grow-1\">
                            <h6 class=\"text-muted mb-1\">Valeur stock</h6>
                            <h3 class=\"mb-0 fw-bold\">
                                ";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 69, $this->source); })()), "stockQuantity", [], "any", false, false, false, 69) * CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 69, $this->source); })()), "purchasePrice", [], "any", false, false, false, 69)), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 69, $this->source); })()), "hmaService", [], "any", false, false, false, 69)), "html", null, true);
        yield "
                            </h3>
                        </div>
                        <div class=\"bg-success bg-opacity-25 p-3 rounded\">
                            <i class=\"fas fa-coins fa-lg text-success\"></i>
                        </div>
                    </div>
                    <small class=\"text-muted\">
                        <i class=\"fas fa-calculator me-1\"></i>
                        ";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 78, $this->source); })()), "purchasePrice", [], "any", false, false, false, 78), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 78, $this->source); })()), "hmaService", [], "any", false, false, false, 78)), "html", null, true);
        yield " × ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 78, $this->source); })()), "stockQuantity", [], "any", false, false, false, 78), "html", null, true);
        yield "
                    </small>
                </div>
            </div>
        </div>
        
        <div class=\"col-xl-3 col-md-6 mb-3\">
            <div class=\"card border-0 bg-info bg-opacity-10 shadow-sm h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"flex-grow-1\">
                            <h6 class=\"text-muted mb-1\">Marge</h6>
                            <h3 class=\"mb-0 fw-bold\">
                                ";
        // line 91
        $context["margin"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 91, $this->source); })()), "salePrice", [], "any", false, false, false, 91) - CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 91, $this->source); })()), "purchasePrice", [], "any", false, false, false, 91));
        // line 92
        yield "                                ";
        $context["marginPercentage"] = (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 92, $this->source); })()), "purchasePrice", [], "any", false, false, false, 92) > 0)) ? (Twig\Extension\CoreExtension::round((((isset($context["margin"]) || array_key_exists("margin", $context) ? $context["margin"] : (function () { throw new RuntimeError('Variable "margin" does not exist.', 92, $this->source); })()) / CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 92, $this->source); })()), "purchasePrice", [], "any", false, false, false, 92)) * 100), 1)) : (0));
        // line 93
        yield "                                ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["marginPercentage"]) || array_key_exists("marginPercentage", $context) ? $context["marginPercentage"] : (function () { throw new RuntimeError('Variable "marginPercentage" does not exist.', 93, $this->source); })()), "html", null, true);
        yield "%
                            </h3>
                        </div>
                        <div class=\"bg-info bg-opacity-25 p-3 rounded\">
                            <i class=\"fas fa-chart-line fa-lg text-info\"></i>
                        </div>
                    </div>
                    <small class=\"text-muted\">
                        <i class=\"fas fa-arrow-up me-1\"></i>
                        ";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency((isset($context["margin"]) || array_key_exists("margin", $context) ? $context["margin"] : (function () { throw new RuntimeError('Variable "margin" does not exist.', 102, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 102, $this->source); })()), "hmaService", [], "any", false, false, false, 102)), "html", null, true);
        yield " par unité
                    </small>
                </div>
            </div>
        </div>
        
        <div class=\"col-xl-3 col-md-6 mb-3\">
            <div class=\"card border-0 ";
        // line 109
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 109, $this->source); })()), "isActive", [], "any", false, false, false, 109)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-danger"));
        yield " bg-opacity-10 shadow-sm h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"flex-grow-1\">
                            <h6 class=\"text-muted mb-1\">Statut</h6>
                            <h3 class=\"mb-0 fw-bold\">
                                <span class=\"badge ";
        // line 115
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 115, $this->source); })()), "isActive", [], "any", false, false, false, 115)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-danger"));
        yield "\">
                                    ";
        // line 116
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 116, $this->source); })()), "isActive", [], "any", false, false, false, 116)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ACTIF") : ("INACTIF"));
        yield "
                                </span>
                            </h3>
                        </div>
                        <div class=\"";
        // line 120
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 120, $this->source); })()), "isActive", [], "any", false, false, false, 120)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-danger"));
        yield " bg-opacity-25 p-3 rounded\">
                            <i class=\"fas ";
        // line 121
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 121, $this->source); })()), "isActive", [], "any", false, false, false, 121)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-toggle-on") : ("fa-toggle-off"));
        yield " fa-lg ";
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 121, $this->source); })()), "isActive", [], "any", false, false, false, 121)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-success") : ("text-danger"));
        yield "\"></i>
                        </div>
                    </div>
                    <small class=\"text-muted\">
                        <i class=\"fas fa-calendar me-1\"></i>
                        Créé le ";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 126, $this->source); })()), "createdAt", [], "any", false, false, false, 126), "d/m/Y"), "html", null, true);
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
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 148, $this->source); })()), "name", [], "any", false, false, false, 148), "html", null, true);
        yield "</dd>
                                
                                <dt class=\"col-sm-5 text-muted\">Code-barres</dt>
                                <dd class=\"col-sm-7\">
                                    <span class=\"badge bg-secondary\">";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 152, $this->source); })()), "barcode", [], "any", false, false, false, 152), "html", null, true);
        yield "</span>
                                </dd>
                                
                                <dt class=\"col-sm-5 text-muted\">Catégorie</dt>
                                <dd class=\"col-sm-7\">
                                    <span class=\"badge bg-primary\">
                                        <i class=\"fas fa-folder me-1\"></i>";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 158, $this->source); })()), "category", [], "any", false, false, false, 158), "name", [], "any", false, false, false, 158), "html", null, true);
        yield "
                                    </span>
                                    ";
        // line 160
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 160, $this->source); })()), "category", [], "any", false, false, false, 160), "parent", [], "any", false, false, false, 160)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 161
            yield "                                        <br>
                                        <small class=\"text-muted\">
                                            <i class=\"fas fa-level-up-alt me-1\"></i>
                                            Catégorie principale: ";
            // line 164
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 164, $this->source); })()), "category", [], "any", false, false, false, 164), "parent", [], "any", false, false, false, 164), "name", [], "any", false, false, false, 164), "html", null, true);
            yield "
                                        </small>
                                    ";
        }
        // line 167
        yield "                                </dd>
                                
                                <dt class=\"col-sm-5 text-muted\">Unité de mesure</dt>
                                <dd class=\"col-sm-7\">
                                    ";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 171)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 171, $this->source); })()), "unit", [], "any", false, false, false, 171), "pièce")) : ("pièce"))), "html", null, true);
        yield "
                                </dd>
                                
                                <dt class=\"col-sm-5 text-muted\">Type de produit</dt>
                                <dd class=\"col-sm-7\">
                                    ";
        // line 176
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 176, $this->source); })()), "hasExpiryDate", [], "method", false, false, false, 176)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 177
            yield "                                        <span class=\"badge bg-warning text-dark\">
                                            <i class=\"fas fa-calendar-alt me-1\"></i> Périssable
                                        </span>
                                    ";
        } else {
            // line 181
            yield "                                        <span class=\"badge bg-secondary\">
                                            <i class=\"fas fa-infinity me-1\"></i> Non périssable
                                        </span>
                                    ";
        }
        // line 185
        yield "                                </dd>
                                
                                ";
        // line 187
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 187, $this->source); })()), "dosage", [], "any", false, false, false, 187)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 188
            yield "                                    <dt class=\"col-sm-5 text-muted\">Dosage</dt>
                                    <dd class=\"col-sm-7\">";
            // line 189
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 189, $this->source); })()), "dosage", [], "any", false, false, false, 189), "html", null, true);
            yield "</dd>
                                ";
        }
        // line 191
        yield "                                
                                ";
        // line 192
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 192, $this->source); })()), "form", [], "any", false, false, false, 192)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 193
            yield "                                    <dt class=\"col-sm-5 text-muted\">Forme</dt>
                                    <dd class=\"col-sm-7\">";
            // line 194
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 194, $this->source); })()), "form", [], "any", false, false, false, 194), "html", null, true);
            yield "</dd>
                                ";
        }
        // line 196
        yield "                                
                                ";
        // line 197
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 197, $this->source); })()), "prescriptionRequired", [], "any", false, false, false, 197)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 198
            yield "                                    <dt class=\"col-sm-5 text-muted\">Prescription</dt>
                                    <dd class=\"col-sm-7\">
                                        <span class=\"badge bg-warning text-dark\">Obligatoire</span>
                                    </dd>
                                ";
        }
        // line 203
        yield "                                
                                <dt class=\"col-sm-5 text-muted\">Prix d'achat</dt>
                                <dd class=\"col-sm-7\">
                                    <span class=\"text-primary fw-bold\">
                                        ";
        // line 207
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 207, $this->source); })()), "purchasePrice", [], "any", false, false, false, 207), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 207, $this->source); })()), "hmaService", [], "any", false, false, false, 207)), "html", null, true);
        yield "
                                    </span>
                                </dd>
                                
                                <dt class=\"col-sm-5 text-muted\">Prix de vente</dt>
                                <dd class=\"col-sm-7\">
                                    <span class=\"text-success fw-bold\">
                                        ";
        // line 214
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 214, $this->source); })()), "salePrice", [], "any", false, false, false, 214), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 214, $this->source); })()), "hmaService", [], "any", false, false, false, 214)), "html", null, true);
        yield "
                                    </span>
                                </dd>
                                
                                <dt class=\"col-sm-5 text-muted\">Stock min.</dt>
                                <dd class=\"col-sm-7\">
                                    ";
        // line 220
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 220, $this->source); })()), "minQuantity", [], "any", false, false, false, 220) > 0)) {
            // line 221
            yield "                                        <span class=\"badge bg-warning text-dark\">
                                            ";
            // line 222
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 222, $this->source); })()), "minQuantity", [], "any", false, false, false, 222), "html", null, true);
            yield "
                                        </span>
                                    ";
        } else {
            // line 225
            yield "                                        <span class=\"text-muted\">Non défini</span>
                                    ";
        }
        // line 227
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
        // line 242
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 242, $this->source); })()), "image", [], "any", false, false, false, 242) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 242, $this->source); })()), "image", [], "any", false, false, false, 242) != "default-product.png"))) {
            // line 243
            yield "                                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 243, $this->source); })()), "image", [], "any", false, false, false, 243))), "html", null, true);
            yield "\" 
                                     alt=\"";
            // line 244
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 244, $this->source); })()), "name", [], "any", false, false, false, 244), "html", null, true);
            yield "\" 
                                     class=\"img-fluid rounded shadow-lg\"
                                     style=\"max-height: 250px; object-fit: contain;\">
                            ";
        } else {
            // line 248
            yield "                                <div class=\"text-center text-muted py-5\">
                                    <i class=\"fas fa-box fa-5x mb-3\"></i>
                                    <p class=\"mb-0\">Aucune image disponible</p>
                                </div>
                            ";
        }
        // line 253
        yield "                        </div>
                    </div>
                </div>
                
                <!-- Description du produit -->
                ";
        // line 258
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 258, $this->source); })()), "description", [], "any", false, false, false, 258)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 259
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
            // line 268
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 268, $this->source); })()), "description", [], "any", false, false, false, 268), "html", null, true));
            yield "
                            </div>
                        </div>
                    </div>
                </div>
                ";
        }
        // line 274
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
        // line 287
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 287, $this->source); })()), "stockBatches", [], "any", false, false, false, 287)) > 0)) {
            // line 288
            yield "                                <div class=\"timeline\">
                                    ";
            // line 289
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::sort($this->env, Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 289, $this->source); })()), "stockBatches", [], "any", false, false, false, 289), 0, 5), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 289, $this->source); })()), "createdAt", [], "any", false, false, false, 289) <=> CoreExtension::getAttribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 289, $this->source); })()), "createdAt", [], "any", false, false, false, 289)); }));
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
                // line 290
                yield "                                        <div class=\"timeline-item ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 290) % 2 != 0)) ? ("timeline-item-left") : ("timeline-item-right"));
                yield "\">
                                            <div class=\"timeline-date\">
                                                ";
                // line 292
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "createdAt", [], "any", false, false, false, 292), "d/m/Y"), "html", null, true);
                yield "
                                            </div>
                                            <div class=\"timeline-content\">
                                                <div class=\"d-flex justify-content-between align-items-center\">
                                                    <div>
                                                        <h6 class=\"mb-1\">Lot ";
                // line 297
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "batchNumber", [], "any", false, false, false, 297), "html", null, true);
                yield "</h6>
                                                        <p class=\"mb-0 text-muted small\">
                                                            <i class=\"fas fa-box me-1\"></i>
                                                            Quantité: ";
                // line 300
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "quantity", [], "any", false, false, false, 300), "html", null, true);
                yield "
                                                            ";
                // line 301
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 301)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 302
                    yield "                                                                <span class=\"ms-2\">
                                                                    <i class=\"fas fa-calendar-alt me-1\"></i>
                                                                    Exp: ";
                    // line 304
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 304), "d/m/Y"), "html", null, true);
                    yield "
                                                                </span>
                                                            ";
                }
                // line 307
                yield "                                                        </p>
                                                    </div>
                                                    <div>
                                                        <span class=\"badge ";
                // line 310
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 310)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-secondary"));
                yield "\">
                                                            ";
                // line 311
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 311)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Inactif"));
                yield "
                                                        </span>
                                                        ";
                // line 313
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 313) && (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 313) < $this->extensions['Twig\Extension\CoreExtension']->convertDate()))) {
                    // line 314
                    yield "                                                            <span class=\"badge bg-danger ms-1\">Expiré</span>
                                                        ";
                }
                // line 316
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
            // line 321
            yield "                                </div>
                                ";
            // line 322
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 322, $this->source); })()), "stockBatches", [], "any", false, false, false, 322)) > 5)) {
                // line 323
                yield "                                    <div class=\"text-center mt-3\">
                                        <a href=\"";
                // line 324
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_index", ["productId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 324, $this->source); })()), "id", [], "any", false, false, false, 324)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-primary\">
                                            Voir tous les lots (";
                // line 325
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 325, $this->source); })()), "stockBatches", [], "any", false, false, false, 325)), "html", null, true);
                yield ")
                                        </a>
                                    </div>
                                ";
            }
            // line 329
            yield "                            ";
        } else {
            // line 330
            yield "                                <div class=\"text-center py-4\">
                                    <i class=\"fas fa-box-open fa-3x text-muted mb-3\"></i>
                                    <p class=\"text-muted mb-0\">Aucun mouvement de stock enregistré</p>
                                </div>
                            ";
        }
        // line 335
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
        // line 352
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 352, $this->source); })()), "id", [], "any", false, false, false, 352)]), "html", null, true);
        yield "\" 
                           class=\"btn btn-warning\">
                            <i class=\"fas fa-edit me-2\"></i> Modifier le produit
                        </a>
                        
                        <a href=\"";
        // line 357
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_purchase_new", ["productId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 357, $this->source); })()), "id", [], "any", false, false, false, 357)]), "html", null, true);
        yield "\" 
                           class=\"btn btn-success\">
                            <i class=\"fas fa-plus me-2\"></i> Nouvel achat
                        </a>
                        
                        <!-- Lien vers les lots -->
                        <a href=\"";
        // line 363
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_index", ["productId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 363, $this->source); })()), "id", [], "any", false, false, false, 363)]), "html", null, true);
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
        // line 374
        if (((isset($context["companyType"]) || array_key_exists("companyType", $context) ? $context["companyType"] : (function () { throw new RuntimeError('Variable "companyType" does not exist.', 374, $this->source); })()) != "restaurant")) {
            // line 375
            yield "                        <a href=\"#\" class=\"btn btn-outline-success\">
                            <i class=\"fas fa-shopping-cart me-2\"></i> Commandes liées
                        </a>
                        ";
        }
        // line 379
        yield "                        
                        <!-- Lien vers les promotions (à créer) -->
                        <a href=\"#\" class=\"btn btn-outline-warning\">
                            <i class=\"fas fa-tags me-2\"></i> Promotions
                        </a>
                        
                        <!-- Bouton toggle status (ouvre modal) -->
                        <button type=\"button\" 
                                class=\"btn btn-outline-secondary toggle-status-btn\"
                                data-bs-toggle=\"modal\" 
                                data-bs-target=\"#toggleStatusModal\"
                                data-product-id=\"";
        // line 390
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 390, $this->source); })()), "id", [], "any", false, false, false, 390), "html", null, true);
        yield "\"
                                data-product-name=\"";
        // line 391
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 391, $this->source); })()), "name", [], "any", false, false, false, 391), "html", null, true);
        yield "\"
                                data-is-active=\"";
        // line 392
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 392, $this->source); })()), "isActive", [], "any", false, false, false, 392)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("0"));
        yield "\"
                                data-token=\"";
        // line 393
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle-status" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 393, $this->source); })()), "id", [], "any", false, false, false, 393))), "html", null, true);
        yield "\">
                            <i class=\"fas ";
        // line 394
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 394, $this->source); })()), "isActive", [], "any", false, false, false, 394)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-toggle-on") : ("fa-toggle-off"));
        yield " me-2\"></i>
                            ";
        // line 395
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 395, $this->source); })()), "isActive", [], "any", false, false, false, 395)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver le produit") : ("Activer le produit"));
        yield "
                        </button>
                        
                        <!-- Bouton supprimer (visible pour admin) -->
                        ";
        // line 399
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 400
            yield "                            ";
            $context["hasDependencies"] = ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 400, $this->source); })()), "purchaseItems", [], "any", false, false, false, 400)) > 0) || (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 400, $this->source); })()), "stockBatches", [], "any", false, false, false, 400)) > 0));
            // line 401
            yield "                            <button type=\"button\" 
                                    class=\"btn btn-outline-danger delete-product-btn\"
                                    data-bs-toggle=\"modal\" 
                                    data-bs-target=\"#deleteModal\"
                                    data-product-id=\"";
            // line 405
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 405, $this->source); })()), "id", [], "any", false, false, false, 405), "html", null, true);
            yield "\"
                                    data-product-name=\"";
            // line 406
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 406, $this->source); })()), "name", [], "any", false, false, false, 406), "html", null, true);
            yield "\"
                                    data-has-dependencies=\"";
            // line 407
            yield (((($tmp = (isset($context["hasDependencies"]) || array_key_exists("hasDependencies", $context) ? $context["hasDependencies"] : (function () { throw new RuntimeError('Variable "hasDependencies" does not exist.', 407, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("0"));
            yield "\"
                                    data-token=\"";
            // line 408
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 408, $this->source); })()), "id", [], "any", false, false, false, 408))), "html", null, true);
            yield "\"
                                    ";
            // line 409
            if ((($tmp = (isset($context["hasDependencies"]) || array_key_exists("hasDependencies", $context) ? $context["hasDependencies"] : (function () { throw new RuntimeError('Variable "hasDependencies" does not exist.', 409, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "title=\"Ce produit a des dépendances\"";
            }
            yield ">
                                <i class=\"fas fa-trash me-2\"></i> Supprimer le produit
                            </button>
                        ";
        }
        // line 413
        yield "                        
                        <div class=\"dropdown\">
                            <button class=\"btn btn-outline-primary dropdown-toggle w-100\" type=\"button\" data-bs-toggle=\"dropdown\">
                                <i class=\"fas fa-print me-2\"></i> Imprimer
                            </button>
                            <ul class=\"dropdown-menu w-100\">
                                <li>
                                    <a class=\"dropdown-item\" href=\"#\">
                                        <i class=\"fas fa-barcode me-2\"></i> Étiquette code-barres
                                    </a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item\" href=\"#\">
                                        <i class=\"fas fa-file-alt me-2\"></i> Fiche produit
                                    </a>
                                </li>
                            </ul>
                        </div>
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
                    ";
        // line 443
        $context["activeBatches"] = Twig\Extension\CoreExtension::sort($this->env, Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 443, $this->source); })()), "stockBatches", [], "any", false, false, false, 443), function ($__b__) use ($context, $macros) { $context["b"] = $__b__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 443, $this->source); })()), "isActive", [], "any", false, false, false, 443) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 443, $this->source); })()), "remainingQuantity", [], "any", false, false, false, 443) > 0)); }), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 443, $this->source); })()), "expiryDate", [], "any", false, false, false, 443) <=> CoreExtension::getAttribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 443, $this->source); })()), "expiryDate", [], "any", false, false, false, 443)); });
        // line 444
        yield "                    
                    ";
        // line 445
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["activeBatches"]) || array_key_exists("activeBatches", $context) ? $context["activeBatches"] : (function () { throw new RuntimeError('Variable "activeBatches" does not exist.', 445, $this->source); })())) > 0)) {
            // line 446
            yield "                        <div class=\"list-group list-group-flush\">
                            ";
            // line 447
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["activeBatches"]) || array_key_exists("activeBatches", $context) ? $context["activeBatches"] : (function () { throw new RuntimeError('Variable "activeBatches" does not exist.', 447, $this->source); })()), 0, 3));
            foreach ($context['_seq'] as $context["_key"] => $context["batch"]) {
                // line 448
                yield "                                <div class=\"list-group-item border-0 px-0 py-2\">
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <div>
                                            <h6 class=\"mb-1\">Lot ";
                // line 451
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "batchNumber", [], "any", false, false, false, 451), "html", null, true);
                yield "</h6>
                                            <small class=\"text-muted\">
                                                <i class=\"fas fa-box me-1\"></i>
                                                ";
                // line 454
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "remainingQuantity", [], "any", false, false, false, 454), "html", null, true);
                yield "/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "quantity", [], "any", false, false, false, 454), "html", null, true);
                yield "
                                            </small>
                                        </div>
                                        <div class=\"text-end\">
                                            ";
                // line 458
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 458)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 459
                    yield "                                                <div class=\"mb-1\">
                                                    <small class=\"";
                    // line 460
                    yield (((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 460) < $this->extensions['Twig\Extension\CoreExtension']->convertDate("+30 days"))) ? ("text-danger") : ("text-muted"));
                    yield "\">
                                                        <i class=\"fas fa-calendar-alt me-1\"></i>
                                                        ";
                    // line 462
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 462), "d/m/Y"), "html", null, true);
                    yield "
                                                    </small>
                                                </div>
                                            ";
                }
                // line 466
                yield "                                            <span class=\"badge ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "remainingQuantity", [], "any", false, false, false, 466) <= 10)) ? ("bg-warning") : ("bg-success"));
                yield "\">
                                                ";
                // line 467
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "remainingQuantity", [], "any", false, false, false, 467), "html", null, true);
                yield " restants
                                            </span>
                                        </div>
                                    </div>
                                    ";
                // line 471
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 471) && (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 471) < $this->extensions['Twig\Extension\CoreExtension']->convertDate("+30 days")))) {
                    // line 472
                    yield "                                        <div class=\"mt-2\">
                                            <div class=\"progress\" style=\"height: 5px;\">
                                                ";
                    // line 474
                    $context["daysLeft"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 474), "diff", [$this->extensions['Twig\Extension\CoreExtension']->convertDate()], "method", false, false, false, 474), "days", [], "any", false, false, false, 474);
                    // line 475
                    yield "                                                ";
                    $context["progress"] = (((isset($context["daysLeft"]) || array_key_exists("daysLeft", $context) ? $context["daysLeft"] : (function () { throw new RuntimeError('Variable "daysLeft" does not exist.', 475, $this->source); })()) / 30) * 100);
                    // line 476
                    yield "                                                <div class=\"progress-bar bg-danger\" 
                                                     style=\"width: ";
                    // line 477
                    yield ((((isset($context["progress"]) || array_key_exists("progress", $context) ? $context["progress"] : (function () { throw new RuntimeError('Variable "progress" does not exist.', 477, $this->source); })()) > 100)) ? (100) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["progress"]) || array_key_exists("progress", $context) ? $context["progress"] : (function () { throw new RuntimeError('Variable "progress" does not exist.', 477, $this->source); })()), "html", null, true)));
                    yield "%\"
                                                     role=\"progressbar\">
                                                </div>
                                            </div>
                                            <small class=\"text-danger\">
                                                <i class=\"fas fa-exclamation-triangle me-1\"></i>
                                                Expire dans ";
                    // line 483
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["daysLeft"]) || array_key_exists("daysLeft", $context) ? $context["daysLeft"] : (function () { throw new RuntimeError('Variable "daysLeft" does not exist.', 483, $this->source); })()), "html", null, true);
                    yield " jour";
                    yield ((((isset($context["daysLeft"]) || array_key_exists("daysLeft", $context) ? $context["daysLeft"] : (function () { throw new RuntimeError('Variable "daysLeft" does not exist.', 483, $this->source); })()) > 1)) ? ("s") : (""));
                    yield "
                                            </small>
                                        </div>
                                    ";
                }
                // line 487
                yield "                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['batch'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 489
            yield "                        </div>
                        
                        ";
            // line 491
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["activeBatches"]) || array_key_exists("activeBatches", $context) ? $context["activeBatches"] : (function () { throw new RuntimeError('Variable "activeBatches" does not exist.', 491, $this->source); })())) > 3)) {
                // line 492
                yield "                            <div class=\"text-center mt-3\">
                                <a href=\"";
                // line 493
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_index", ["productId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 493, $this->source); })()), "id", [], "any", false, false, false, 493)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-primary\">
                                    Voir tous les lots (";
                // line 494
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["activeBatches"]) || array_key_exists("activeBatches", $context) ? $context["activeBatches"] : (function () { throw new RuntimeError('Variable "activeBatches" does not exist.', 494, $this->source); })())), "html", null, true);
                yield ")
                                </a>
                            </div>
                        ";
            }
            // line 498
            yield "                    ";
        } else {
            // line 499
            yield "                        <div class=\"text-center py-3\">
                            <i class=\"fas fa-box-open fa-2x text-muted mb-2\"></i>
                            <p class=\"text-muted mb-0\">Aucun lot actif en stock</p>
                        </div>
                    ";
        }
        // line 504
        yield "                </div>
            </div>
            
            <!-- Informations dates -->
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-calendar-alt me-2\"></i> Historique
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"list-group list-group-flush\">
                        <div class=\"list-group-item border-0 px-0 py-1\">
                            <small class=\"text-muted d-flex justify-content-between\">
                                <span><i class=\"fas fa-plus-circle me-2\"></i> Création</span>
                                <span>";
        // line 519
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 519, $this->source); })()), "createdAt", [], "any", false, false, false, 519), "d/m/Y H:i"), "html", null, true);
        yield "</span>
                            </small>
                        </div>
                        ";
        // line 522
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 522, $this->source); })()), "updatedAt", [], "any", false, false, false, 522)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 523
            yield "                            <div class=\"list-group-item border-0 px-0 py-1\">
                                <small class=\"text-muted d-flex justify-content-between\">
                                    <span><i class=\"fas fa-edit me-2\"></i> Dernière modification</span>
                                    <span>";
            // line 526
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 526, $this->source); })()), "updatedAt", [], "any", false, false, false, 526), "d/m/Y H:i"), "html", null, true);
            yield "</span>
                                </small>
                            </div>
                        ";
        }
        // line 530
        yield "                        ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 530, $this->source); })()), "stockBatches", [], "any", false, false, false, 530)) > 0)) {
            // line 531
            yield "                            <div class=\"list-group-item border-0 px-0 py-1\">
                                <small class=\"text-muted d-flex justify-content-between\">
                                    <span><i class=\"fas fa-cart-plus me-2\"></i> Dernier achat</span>
                                    <span>";
            // line 534
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 534, $this->source); })()), "stockBatches", [], "any", false, false, false, 534)), "createdAt", [], "any", false, false, false, 534), "d/m/Y"), "html", null, true);
            yield "</span>
                                </small>
                            </div>
                        ";
        }
        // line 538
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

    // line 594
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

        // line 595
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

    // line 756
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

        // line 757
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
        return array (  1267 => 757,  1254 => 756,  1083 => 595,  1070 => 594,  1005 => 538,  998 => 534,  993 => 531,  990 => 530,  983 => 526,  978 => 523,  976 => 522,  970 => 519,  953 => 504,  946 => 499,  943 => 498,  936 => 494,  932 => 493,  929 => 492,  927 => 491,  923 => 489,  916 => 487,  907 => 483,  898 => 477,  895 => 476,  892 => 475,  890 => 474,  886 => 472,  884 => 471,  877 => 467,  872 => 466,  865 => 462,  860 => 460,  857 => 459,  855 => 458,  846 => 454,  840 => 451,  835 => 448,  831 => 447,  828 => 446,  826 => 445,  823 => 444,  821 => 443,  789 => 413,  780 => 409,  776 => 408,  772 => 407,  768 => 406,  764 => 405,  758 => 401,  755 => 400,  753 => 399,  746 => 395,  742 => 394,  738 => 393,  734 => 392,  730 => 391,  726 => 390,  713 => 379,  707 => 375,  705 => 374,  691 => 363,  682 => 357,  674 => 352,  655 => 335,  648 => 330,  645 => 329,  638 => 325,  634 => 324,  631 => 323,  629 => 322,  626 => 321,  608 => 316,  604 => 314,  602 => 313,  597 => 311,  593 => 310,  588 => 307,  582 => 304,  578 => 302,  576 => 301,  572 => 300,  566 => 297,  558 => 292,  552 => 290,  535 => 289,  532 => 288,  530 => 287,  515 => 274,  506 => 268,  495 => 259,  493 => 258,  486 => 253,  479 => 248,  472 => 244,  467 => 243,  465 => 242,  448 => 227,  444 => 225,  438 => 222,  435 => 221,  433 => 220,  424 => 214,  414 => 207,  408 => 203,  401 => 198,  399 => 197,  396 => 196,  391 => 194,  388 => 193,  386 => 192,  383 => 191,  378 => 189,  375 => 188,  373 => 187,  369 => 185,  363 => 181,  357 => 177,  355 => 176,  347 => 171,  341 => 167,  335 => 164,  330 => 161,  328 => 160,  323 => 158,  314 => 152,  307 => 148,  282 => 126,  272 => 121,  268 => 120,  261 => 116,  257 => 115,  248 => 109,  238 => 102,  225 => 93,  222 => 92,  220 => 91,  202 => 78,  190 => 69,  177 => 58,  171 => 55,  167 => 53,  165 => 52,  156 => 46,  136 => 29,  129 => 25,  120 => 19,  112 => 14,  103 => 7,  90 => 6,  66 => 4,  43 => 2,);
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
        <div class=\"col-xl-3 col-md-6 mb-3\">
            <div class=\"card border-0 bg-primary bg-opacity-10 shadow-sm h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"flex-grow-1\">
                            <h6 class=\"text-muted mb-1\">Stock actuel</h6>
                            <h3 class=\"mb-0 fw-bold\">{{ product.stockQuantity }}</h3>
                        </div>
                        <div class=\"bg-primary bg-opacity-25 p-3 rounded\">
                            <i class=\"fas fa-boxes fa-lg text-primary\"></i>
                        </div>
                    </div>
                    {% if product.minQuantity > 0 %}
                        <small class=\"text-muted\">
                            <i class=\"fas fa-exclamation-circle me-1\"></i>
                            Seuil d'alerte: {{ product.minQuantity }}
                        </small>
                    {% endif %}
                </div>
            </div>
        </div>
        
        <div class=\"col-xl-3 col-md-6 mb-3\">
            <div class=\"card border-0 bg-success bg-opacity-10 shadow-sm h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"flex-grow-1\">
                            <h6 class=\"text-muted mb-1\">Valeur stock</h6>
                            <h3 class=\"mb-0 fw-bold\">
                                {{ (product.stockQuantity * product.purchasePrice)|price_with_currency(product.hmaService) }}
                            </h3>
                        </div>
                        <div class=\"bg-success bg-opacity-25 p-3 rounded\">
                            <i class=\"fas fa-coins fa-lg text-success\"></i>
                        </div>
                    </div>
                    <small class=\"text-muted\">
                        <i class=\"fas fa-calculator me-1\"></i>
                        {{ product.purchasePrice|price_with_currency(product.hmaService) }} × {{ product.stockQuantity }}
                    </small>
                </div>
            </div>
        </div>
        
        <div class=\"col-xl-3 col-md-6 mb-3\">
            <div class=\"card border-0 bg-info bg-opacity-10 shadow-sm h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"flex-grow-1\">
                            <h6 class=\"text-muted mb-1\">Marge</h6>
                            <h3 class=\"mb-0 fw-bold\">
                                {% set margin = product.salePrice - product.purchasePrice %}
                                {% set marginPercentage = product.purchasePrice > 0 ? (margin / product.purchasePrice * 100)|round(1) : 0 %}
                                {{ marginPercentage }}%
                            </h3>
                        </div>
                        <div class=\"bg-info bg-opacity-25 p-3 rounded\">
                            <i class=\"fas fa-chart-line fa-lg text-info\"></i>
                        </div>
                    </div>
                    <small class=\"text-muted\">
                        <i class=\"fas fa-arrow-up me-1\"></i>
                        {{ margin|price_with_currency(product.hmaService) }} par unité
                    </small>
                </div>
            </div>
        </div>
        
        <div class=\"col-xl-3 col-md-6 mb-3\">
            <div class=\"card border-0 {{ product.isActive ? 'bg-success' : 'bg-danger' }} bg-opacity-10 shadow-sm h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"flex-grow-1\">
                            <h6 class=\"text-muted mb-1\">Statut</h6>
                            <h3 class=\"mb-0 fw-bold\">
                                <span class=\"badge {{ product.isActive ? 'bg-success' : 'bg-danger' }}\">
                                    {{ product.isActive ? 'ACTIF' : 'INACTIF' }}
                                </span>
                            </h3>
                        </div>
                        <div class=\"{{ product.isActive ? 'bg-success' : 'bg-danger' }} bg-opacity-25 p-3 rounded\">
                            <i class=\"fas {{ product.isActive ? 'fa-toggle-on' : 'fa-toggle-off' }} fa-lg {{ product.isActive ? 'text-success' : 'text-danger' }}\"></i>
                        </div>
                    </div>
                    <small class=\"text-muted\">
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
                                
                                <dt class=\"col-sm-5 text-muted\">Prix de vente</dt>
                                <dd class=\"col-sm-7\">
                                    <span class=\"text-success fw-bold\">
                                        {{ product.salePrice|price_with_currency(product.hmaService) }}
                                    </span>
                                </dd>
                                
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
                                                            Quantité: {{ batch.quantity }}
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
                                        <a href=\"{{ path('app_admin_stock_batch_index', {'productId': product.id}) }}\" class=\"btn btn-sm btn-outline-primary\">
                                            Voir tous les lots ({{ product.stockBatches|length }})
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
                        
                        <a href=\"{{ path('admin_purchase_new', {'productId': product.id}) }}\" 
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
                        
                        <!-- Lien vers les promotions (à créer) -->
                        <a href=\"#\" class=\"btn btn-outline-warning\">
                            <i class=\"fas fa-tags me-2\"></i> Promotions
                        </a>
                        
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
                        
                        <div class=\"dropdown\">
                            <button class=\"btn btn-outline-primary dropdown-toggle w-100\" type=\"button\" data-bs-toggle=\"dropdown\">
                                <i class=\"fas fa-print me-2\"></i> Imprimer
                            </button>
                            <ul class=\"dropdown-menu w-100\">
                                <li>
                                    <a class=\"dropdown-item\" href=\"#\">
                                        <i class=\"fas fa-barcode me-2\"></i> Étiquette code-barres
                                    </a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item\" href=\"#\">
                                        <i class=\"fas fa-file-alt me-2\"></i> Fiche produit
                                    </a>
                                </li>
                            </ul>
                        </div>
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
                    {% set activeBatches = product.stockBatches|filter(b => b.isActive and b.remainingQuantity > 0)|sort((a, b) => a.expiryDate <=> b.expiryDate) %}
                    
                    {% if activeBatches|length > 0 %}
                        <div class=\"list-group list-group-flush\">
                            {% for batch in activeBatches|slice(0, 3) %}
                                <div class=\"list-group-item border-0 px-0 py-2\">
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <div>
                                            <h6 class=\"mb-1\">Lot {{ batch.batchNumber }}</h6>
                                            <small class=\"text-muted\">
                                                <i class=\"fas fa-box me-1\"></i>
                                                {{ batch.remainingQuantity }}/{{ batch.quantity }}
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
                                            <span class=\"badge {{ batch.remainingQuantity <= 10 ? 'bg-warning' : 'bg-success' }}\">
                                                {{ batch.remainingQuantity }} restants
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
            
            <!-- Informations dates -->
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-calendar-alt me-2\"></i> Historique
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"list-group list-group-flush\">
                        <div class=\"list-group-item border-0 px-0 py-1\">
                            <small class=\"text-muted d-flex justify-content-between\">
                                <span><i class=\"fas fa-plus-circle me-2\"></i> Création</span>
                                <span>{{ product.createdAt|date('d/m/Y H:i') }}</span>
                            </small>
                        </div>
                        {% if product.updatedAt %}
                            <div class=\"list-group-item border-0 px-0 py-1\">
                                <small class=\"text-muted d-flex justify-content-between\">
                                    <span><i class=\"fas fa-edit me-2\"></i> Dernière modification</span>
                                    <span>{{ product.updatedAt|date('d/m/Y H:i') }}</span>
                                </small>
                            </div>
                        {% endif %}
                        {% if product.stockBatches|length > 0 %}
                            <div class=\"list-group-item border-0 px-0 py-1\">
                                <small class=\"text-muted d-flex justify-content-between\">
                                    <span><i class=\"fas fa-cart-plus me-2\"></i> Dernier achat</span>
                                    <span>{{ product.stockBatches|first.createdAt|date('d/m/Y') }}</span>
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
