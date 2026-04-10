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

/* admin/stock_batch/show.html.twig */
class __TwigTemplate_2374a026f1ab2fc2968fd6c433b92679 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/stock_batch/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/stock_batch/show.html.twig"));

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

        yield "Lot ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 4, $this->source); })()), "batchNumber", [], "any", false, false, false, 4), "html", null, true);
        yield " - ";
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
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_index");
        yield "\">Produits</a>
                    </li>
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)]), "html", null, true);
        yield "\">
                            ";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17)), "truncate", [30], "method", false, false, false, 17), "html", null, true);
        yield "
                        </a>
                    </li>
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_index", ["productId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21)]), "html", null, true);
        yield "\">
                            Lots
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 25, $this->source); })()), "batchNumber", [], "any", false, false, false, 25), "html", null, true);
        yield "</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0\">
                <i class=\"fas fa-boxes me-2 text-info\"></i>
                Lot ";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 30, $this->source); })()), "batchNumber", [], "any", false, false, false, 30), "html", null, true);
        yield "
            </h1>
        </div>
        <div class=\"btn-group\">
            <a href=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_print", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34)]), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary\" target=\"_blank\">
                <i class=\"fas fa-print me-1\"></i> Imprimer
            </a>
            ";
        // line 37
        if ((($tmp = (isset($context["canEdit"]) || array_key_exists("canEdit", $context) ? $context["canEdit"] : (function () { throw new RuntimeError('Variable "canEdit" does not exist.', 37, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 38
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38)]), "html", null, true);
            yield "\" class=\"btn btn-warning\">
                    <i class=\"fas fa-edit me-1\"></i> Modifier
                </a>
            ";
        }
        // line 42
        yield "            <a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_index", ["productId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42)]), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour
            </a>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-info-circle me-2\"></i>
                        Informations générales
                    </h5>
                </div>
                <div class=\"card-body\">
                    <dl class=\"row mb-0\">
                        <dt class=\"col-sm-4 text-muted\">Numéro de lot</dt>
                        <dd class=\"col-sm-8 fw-bold\">";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 60, $this->source); })()), "batchNumber", [], "any", false, false, false, 60), "html", null, true);
        yield "</dd>
                        
                        <dt class=\"col-sm-4 text-muted\">Emplacement</dt>
                        <dd class=\"col-sm-8\">
                            ";
        // line 64
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 64, $this->source); })()), "location", [], "any", false, false, false, 64)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 65
            yield "                                <span class=\"badge bg-info text-dark\">
                                    <i class=\"fas fa-map-marker-alt me-1\"></i> ";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 66, $this->source); })()), "location", [], "any", false, false, false, 66), "html", null, true);
            yield "
                                </span>
                            ";
        } else {
            // line 69
            yield "                                <span class=\"text-muted\">Non défini</span>
                            ";
        }
        // line 71
        yield "                        </dd>
                        
                        <dt class=\"col-sm-4 text-muted\">Statut</dt>
                        <dd class=\"col-sm-8\">
                            <span class=\"badge ";
        // line 75
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 75, $this->source); })()), "isActive", [], "any", false, false, false, 75)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-secondary"));
        yield "\">
                                ";
        // line 76
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 76, $this->source); })()), "isActive", [], "any", false, false, false, 76)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Inactif"));
        yield "
                            </span>
                        </dd>
                        
                        <dt class=\"col-sm-4 text-muted\">Date de création</dt>
                        <dd class=\"col-sm-8\">";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 81, $this->source); })()), "createdAt", [], "any", false, false, false, 81), "d/m/Y H:i"), "html", null, true);
        yield "</dd>
                        
                        ";
        // line 83
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 83, $this->source); })()), "updatedAt", [], "any", false, false, false, 83)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 84
            yield "                            <dt class=\"col-sm-4 text-muted\">Dernière modification</dt>
                            <dd class=\"col-sm-8\">";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 85, $this->source); })()), "updatedAt", [], "any", false, false, false, 85), "d/m/Y H:i"), "html", null, true);
            yield "</dd>
                        ";
        }
        // line 87
        yield "                    </dl>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-6\">
            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-chart-line me-2\"></i>
                        Quantités et prix
                    </h5>
                </div>
                <div class=\"card-body\">
                    <dl class=\"row mb-0\">
                        <dt class=\"col-sm-4 text-muted\">Quantité initiale</dt>
                        <dd class=\"col-sm-8\">";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 103, $this->source); })()), "initialQuantity", [], "any", false, false, false, 103), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 103)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 103, $this->source); })()), "unit", [], "any", false, false, false, 103), "pièce")) : ("pièce")), "html", null, true);
        yield "</dd>
                        
                        <dt class=\"col-sm-4 text-muted\">Quantité actuelle</dt>
                        <dd class=\"col-sm-8\">
                            <span class=\"fw-bold ";
        // line 107
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 107, $this->source); })()), "currentQuantity", [], "any", false, false, false, 107) <= 10)) {
            yield "text-danger";
        }
        yield "\">
                                ";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 108, $this->source); })()), "currentQuantity", [], "any", false, false, false, 108), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 108)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 108, $this->source); })()), "unit", [], "any", false, false, false, 108), "pièce")) : ("pièce")), "html", null, true);
        yield "
                            </span>
                            ";
        // line 110
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 110, $this->source); })()), "currentQuantity", [], "any", false, false, false, 110) <= 10)) {
            // line 111
            yield "                                <span class=\"badge bg-warning text-dark ms-2\">Stock faible</span>
                            ";
        }
        // line 113
        yield "                        </dd>
                        
                        <dt class=\"col-sm-4 text-muted\">Prix unitaire</dt>
                        <dd class=\"col-sm-8\">";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 116, $this->source); })()), "unitPrice", [], "any", false, false, false, 116), CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 116, $this->source); })()), "hmaService", [], "any", false, false, false, 116)), "html", null, true);
        yield "</dd>
                        
                        <dt class=\"col-sm-4 text-muted\">Valeur totale</dt>
                        <dd class=\"col-sm-8\">
                            ";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency((CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 120, $this->source); })()), "currentQuantity", [], "any", false, false, false, 120) * CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 120, $this->source); })()), "unitPrice", [], "any", false, false, false, 120)), CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 120, $this->source); })()), "hmaService", [], "any", false, false, false, 120)), "html", null, true);
        yield "
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-calendar-alt me-2\"></i>
                        Dates
                    </h5>
                </div>
                <div class=\"card-body\">
                    <dl class=\"row mb-0\">
                        <dt class=\"col-sm-4 text-muted\">Date de fabrication</dt>
                        <dd class=\"col-sm-8\">
                            ";
        // line 141
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 141, $this->source); })()), "manufacturingDate", [], "any", false, false, false, 141)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 141, $this->source); })()), "manufacturingDate", [], "any", false, false, false, 141), "d/m/Y"), "html", null, true)) : ("Non renseignée"));
        yield "
                        </dd>
                        
                        <dt class=\"col-sm-4 text-muted\">Date d'expiration</dt>
                        <dd class=\"col-sm-8\">
                            ";
        // line 146
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 146, $this->source); })()), "expiryDate", [], "any", false, false, false, 146)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 147
            yield "                                <span class=\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 147, $this->source); })()), "expiryDate", [], "any", false, false, false, 147) < $this->extensions['Twig\Extension\CoreExtension']->convertDate())) {
                yield "text-danger fw-bold";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 147, $this->source); })()), "expiryDate", [], "any", false, false, false, 147) < $this->extensions['Twig\Extension\CoreExtension']->convertDate("+30 days"))) {
                yield "text-warning";
            } else {
                yield "text-success";
            }
            yield "\">
                                    ";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 148, $this->source); })()), "expiryDate", [], "any", false, false, false, 148), "d/m/Y"), "html", null, true);
            yield "
                                </span>
                                ";
            // line 150
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 150, $this->source); })()), "expiryDate", [], "any", false, false, false, 150) < $this->extensions['Twig\Extension\CoreExtension']->convertDate())) {
                // line 151
                yield "                                    <span class=\"badge bg-danger ms-2\">Expiré</span>
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 152
(isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 152, $this->source); })()), "expiryDate", [], "any", false, false, false, 152) < $this->extensions['Twig\Extension\CoreExtension']->convertDate("+30 days"))) {
                // line 153
                yield "                                    <span class=\"badge bg-warning text-dark ms-2\">Expire bientôt</span>
                                ";
            }
            // line 155
            yield "                            ";
        } else {
            // line 156
            yield "                                <span class=\"text-muted\">Non périssable</span>
                            ";
        }
        // line 158
        yield "                        </dd>
                    </dl>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-6\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-exchange-alt me-2\"></i>
                        Derniers mouvements
                    </h5>
                    <span class=\"badge bg-secondary\">";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 171, $this->source); })()), "stockMovements", [], "any", false, false, false, 171)), "html", null, true);
        yield " mouvement(s)</span>
                </div>
                <div class=\"card-body p-0\">
                    ";
        // line 174
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 174, $this->source); })()), "stockMovements", [], "any", false, false, false, 174)) > 0)) {
            // line 175
            yield "                        <div class=\"list-group list-group-flush\">
                            ";
            // line 176
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::sort($this->env, Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 176, $this->source); })()), "stockMovements", [], "any", false, false, false, 176), 0, 5), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 176, $this->source); })()), "createdAt", [], "any", false, false, false, 176) <=> CoreExtension::getAttribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 176, $this->source); })()), "createdAt", [], "any", false, false, false, 176)); }));
            foreach ($context['_seq'] as $context["_key"] => $context["movement"]) {
                // line 177
                yield "                                <div class=\"list-group-item\">
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <div>
                                            ";
                // line 181
                yield "                                            <span class=\"badge 
                                                ";
                // line 182
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "movementType", [], "any", false, false, false, 182) == "PURCHASE")) {
                    yield "bg-success
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 183
$context["movement"], "movementType", [], "any", false, false, false, 183) == "SALE")) {
                    yield "bg-danger
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 184
$context["movement"], "movementType", [], "any", false, false, false, 184) == "ADJUSTMENT")) {
                    yield "bg-warning text-dark
                                                ";
                } else {
                    // line 185
                    yield "bg-info
                                                ";
                }
                // line 186
                yield " me-2\">
                                                ";
                // line 187
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "movementType", [], "any", false, false, false, 187) == "PURCHASE")) {
                    // line 188
                    yield "                                                    <i class=\"fas fa-cart-plus me-1\"></i> ACHAT
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 189
$context["movement"], "movementType", [], "any", false, false, false, 189) == "SALE")) {
                    // line 190
                    yield "                                                    <i class=\"fas fa-shopping-cart me-1\"></i> VENTE
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 191
$context["movement"], "movementType", [], "any", false, false, false, 191) == "ADJUSTMENT")) {
                    // line 192
                    yield "                                                    <i class=\"fas fa-sliders-h me-1\"></i> AJUSTEMENT
                                                ";
                } else {
                    // line 194
                    yield "                                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "movementType", [], "any", false, false, false, 194), "html", null, true);
                    yield "
                                                ";
                }
                // line 196
                yield "                                            </span>
                                            <strong>";
                // line 197
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "quantity", [], "any", false, false, false, 197), "html", null, true);
                yield "</strong> unités
                                            ";
                // line 198
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "unitPrice", [], "any", false, false, false, 198)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 199
                    yield "                                                <br>
                                                <small class=\"text-muted\">
                                                    Prix: ";
                    // line 201
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "unitPrice", [], "any", false, false, false, 201), CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 201, $this->source); })()), "hmaService", [], "any", false, false, false, 201)), "html", null, true);
                    yield "
                                                </small>
                                            ";
                }
                // line 204
                yield "                                        </div>
                                        <div class=\"text-end\">
                                            <small class=\"text-muted\">";
                // line 206
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "createdAt", [], "any", false, false, false, 206), "d/m/Y H:i"), "html", null, true);
                yield "</small>
                                            <br>
                                            ";
                // line 208
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user", [], "any", false, false, false, 208)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 209
                    yield "                                                <small class=\"text-muted\">
                                                    <i class=\"fas fa-user me-1\"></i>
                                                    ";
                    // line 211
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user", [], "any", false, true, false, 211), "fullName", [], "any", true, true, false, 211)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user", [], "any", false, false, false, 211), "fullName", [], "any", false, false, false, 211), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user", [], "any", false, false, false, 211), "email", [], "any", false, false, false, 211))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "user", [], "any", false, false, false, 211), "email", [], "any", false, false, false, 211))), "html", null, true);
                    yield "
                                                </small>
                                            ";
                }
                // line 214
                yield "                                        </div>
                                    </div>
                                    ";
                // line 216
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "notes", [], "any", false, false, false, 216)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 217
                    yield "                                        <div class=\"mt-2\">
                                            <small class=\"text-muted\">
                                                <i class=\"fas fa-comment me-1\"></i>
                                                ";
                    // line 220
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["movement"], "notes", [], "any", false, false, false, 220), "html", null, true);
                    yield "
                                            </small>
                                        </div>
                                    ";
                }
                // line 224
                yield "                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['movement'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 226
            yield "                        </div>
                        ";
            // line 227
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 227, $this->source); })()), "stockMovements", [], "any", false, false, false, 227)) > 5)) {
                // line 228
                yield "                            <div class=\"text-center p-3\">
                                <small class=\"text-muted\">+ ";
                // line 229
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 229, $this->source); })()), "stockMovements", [], "any", false, false, false, 229)) - 5), "html", null, true);
                yield " autres mouvements</small>
                            </div>
                        ";
            }
            // line 232
            yield "                    ";
        } else {
            // line 233
            yield "                        <div class=\"text-center py-4\">
                            <i class=\"fas fa-chart-line fa-2x text-muted mb-2\"></i>
                            <p class=\"text-muted mb-0\">Aucun mouvement de stock</p>
                        </div>
                    ";
        }
        // line 238
        yield "                </div>
            </div>
        </div>
    </div>

    <!-- Informations supplémentaires sur l'achat -->
    ";
        // line 244
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 244, $this->source); })()), "purchaseItem", [], "any", false, false, false, 244)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 245
            yield "    <div class=\"row mt-4\">
        <div class=\"col-12\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-receipt me-2\"></i>
                        Informations d'achat
                    </h5>
                </div>
                <div class=\"card-body\">
                    <dl class=\"row mb-0\">
                        <dt class=\"col-sm-3 text-muted\">Achat associé</dt>
                        <dd class=\"col-sm-9\">
                            <a href=\"";
            // line 258
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 258, $this->source); })()), "purchaseItem", [], "any", false, false, false, 258), "purchase", [], "any", false, false, false, 258), "id", [], "any", false, false, false, 258)]), "html", null, true);
            yield "\" class=\"text-decoration-none\">
                                Commande #";
            // line 259
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 259, $this->source); })()), "purchaseItem", [], "any", false, false, false, 259), "purchase", [], "any", false, false, false, 259), "purchaseNumber", [], "any", false, false, false, 259), "html", null, true);
            yield "
                            </a>
                        </dd>
                        
                        <dt class=\"col-sm-3 text-muted\">Fournisseur</dt>
                        <dd class=\"col-sm-9\">
                            ";
            // line 265
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["batch"] ?? null), "purchaseItem", [], "any", false, true, false, 265), "purchase", [], "any", false, true, false, 265), "supplier", [], "any", false, true, false, 265), "name", [], "any", true, true, false, 265)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 265, $this->source); })()), "purchaseItem", [], "any", false, false, false, 265), "purchase", [], "any", false, false, false, 265), "supplier", [], "any", false, false, false, 265), "name", [], "any", false, false, false, 265), "Non renseigné")) : ("Non renseigné")), "html", null, true);
            yield "
                        </dd>
                        
                        <dt class=\"col-sm-3 text-muted\">Date d'achat</dt>
                        <dd class=\"col-sm-9\">
                            ";
            // line 270
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["batch"]) || array_key_exists("batch", $context) ? $context["batch"] : (function () { throw new RuntimeError('Variable "batch" does not exist.', 270, $this->source); })()), "purchaseItem", [], "any", false, false, false, 270), "purchase", [], "any", false, false, false, 270), "createdAt", [], "any", false, false, false, 270), "d/m/Y"), "html", null, true);
            yield "
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
    ";
        }
        // line 278
        yield "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 281
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

        // line 282
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
.card {
    transition: transform 0.2s, box-shadow 0.2s;
}
.card:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 20px rgba(0,0,0,0.1) !important;
}
.list-group-item {
    transition: background-color 0.2s;
}
.list-group-item:hover {
    background-color: #f8f9fa;
}
.badge i {
    margin-right: 4px;
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
        return "admin/stock_batch/show.html.twig";
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
        return array (  621 => 282,  608 => 281,  596 => 278,  585 => 270,  577 => 265,  568 => 259,  564 => 258,  549 => 245,  547 => 244,  539 => 238,  532 => 233,  529 => 232,  523 => 229,  520 => 228,  518 => 227,  515 => 226,  508 => 224,  501 => 220,  496 => 217,  494 => 216,  490 => 214,  484 => 211,  480 => 209,  478 => 208,  473 => 206,  469 => 204,  463 => 201,  459 => 199,  457 => 198,  453 => 197,  450 => 196,  444 => 194,  440 => 192,  438 => 191,  435 => 190,  433 => 189,  430 => 188,  428 => 187,  425 => 186,  421 => 185,  416 => 184,  412 => 183,  408 => 182,  405 => 181,  400 => 177,  396 => 176,  393 => 175,  391 => 174,  385 => 171,  370 => 158,  366 => 156,  363 => 155,  359 => 153,  357 => 152,  354 => 151,  352 => 150,  347 => 148,  336 => 147,  334 => 146,  326 => 141,  302 => 120,  295 => 116,  290 => 113,  286 => 111,  284 => 110,  277 => 108,  271 => 107,  262 => 103,  244 => 87,  239 => 85,  236 => 84,  234 => 83,  229 => 81,  221 => 76,  217 => 75,  211 => 71,  207 => 69,  201 => 66,  198 => 65,  196 => 64,  189 => 60,  167 => 42,  159 => 38,  157 => 37,  151 => 34,  144 => 30,  136 => 25,  129 => 21,  122 => 17,  118 => 16,  112 => 13,  104 => 7,  91 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/stock_batch/show.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Lot {{ batch.batchNumber }} - {{ product.name }}{% endblock %}

{% block body %}
<div class=\"container-fluid px-4\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('app_admin_product_index') }}\">Produits</a>
                    </li>
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('app_admin_product_show', {'id': product.id}) }}\">
                            {{ product.name|u.truncate(30) }}
                        </a>
                    </li>
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('app_admin_stock_batch_index', {'productId': product.id}) }}\">
                            Lots
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\">{{ batch.batchNumber }}</li>
                </ol>
            </nav>
            <h1 class=\"h3 mb-0\">
                <i class=\"fas fa-boxes me-2 text-info\"></i>
                Lot {{ batch.batchNumber }}
            </h1>
        </div>
        <div class=\"btn-group\">
            <a href=\"{{ path('app_admin_stock_batch_print', {'id': batch.id}) }}\" class=\"btn btn-outline-secondary\" target=\"_blank\">
                <i class=\"fas fa-print me-1\"></i> Imprimer
            </a>
            {% if canEdit %}
                <a href=\"{{ path('app_admin_stock_batch_edit', {'id': batch.id}) }}\" class=\"btn btn-warning\">
                    <i class=\"fas fa-edit me-1\"></i> Modifier
                </a>
            {% endif %}
            <a href=\"{{ path('app_admin_stock_batch_index', {'productId': product.id}) }}\" class=\"btn btn-outline-secondary\">
                <i class=\"fas fa-arrow-left me-1\"></i> Retour
            </a>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-info-circle me-2\"></i>
                        Informations générales
                    </h5>
                </div>
                <div class=\"card-body\">
                    <dl class=\"row mb-0\">
                        <dt class=\"col-sm-4 text-muted\">Numéro de lot</dt>
                        <dd class=\"col-sm-8 fw-bold\">{{ batch.batchNumber }}</dd>
                        
                        <dt class=\"col-sm-4 text-muted\">Emplacement</dt>
                        <dd class=\"col-sm-8\">
                            {% if batch.location %}
                                <span class=\"badge bg-info text-dark\">
                                    <i class=\"fas fa-map-marker-alt me-1\"></i> {{ batch.location }}
                                </span>
                            {% else %}
                                <span class=\"text-muted\">Non défini</span>
                            {% endif %}
                        </dd>
                        
                        <dt class=\"col-sm-4 text-muted\">Statut</dt>
                        <dd class=\"col-sm-8\">
                            <span class=\"badge {{ batch.isActive ? 'bg-success' : 'bg-secondary' }}\">
                                {{ batch.isActive ? 'Actif' : 'Inactif' }}
                            </span>
                        </dd>
                        
                        <dt class=\"col-sm-4 text-muted\">Date de création</dt>
                        <dd class=\"col-sm-8\">{{ batch.createdAt|date('d/m/Y H:i') }}</dd>
                        
                        {% if batch.updatedAt %}
                            <dt class=\"col-sm-4 text-muted\">Dernière modification</dt>
                            <dd class=\"col-sm-8\">{{ batch.updatedAt|date('d/m/Y H:i') }}</dd>
                        {% endif %}
                    </dl>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-6\">
            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-chart-line me-2\"></i>
                        Quantités et prix
                    </h5>
                </div>
                <div class=\"card-body\">
                    <dl class=\"row mb-0\">
                        <dt class=\"col-sm-4 text-muted\">Quantité initiale</dt>
                        <dd class=\"col-sm-8\">{{ batch.initialQuantity }} {{ product.unit|default('pièce') }}</dd>
                        
                        <dt class=\"col-sm-4 text-muted\">Quantité actuelle</dt>
                        <dd class=\"col-sm-8\">
                            <span class=\"fw-bold {% if batch.currentQuantity <= 10 %}text-danger{% endif %}\">
                                {{ batch.currentQuantity }} {{ product.unit|default('pièce') }}
                            </span>
                            {% if batch.currentQuantity <= 10 %}
                                <span class=\"badge bg-warning text-dark ms-2\">Stock faible</span>
                            {% endif %}
                        </dd>
                        
                        <dt class=\"col-sm-4 text-muted\">Prix unitaire</dt>
                        <dd class=\"col-sm-8\">{{ batch.unitPrice|price_with_currency(batch.hmaService) }}</dd>
                        
                        <dt class=\"col-sm-4 text-muted\">Valeur totale</dt>
                        <dd class=\"col-sm-8\">
                            {{ (batch.currentQuantity * batch.unitPrice)|price_with_currency(batch.hmaService) }}
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-calendar-alt me-2\"></i>
                        Dates
                    </h5>
                </div>
                <div class=\"card-body\">
                    <dl class=\"row mb-0\">
                        <dt class=\"col-sm-4 text-muted\">Date de fabrication</dt>
                        <dd class=\"col-sm-8\">
                            {{ batch.manufacturingDate ? batch.manufacturingDate|date('d/m/Y') : 'Non renseignée' }}
                        </dd>
                        
                        <dt class=\"col-sm-4 text-muted\">Date d'expiration</dt>
                        <dd class=\"col-sm-8\">
                            {% if batch.expiryDate %}
                                <span class=\"{% if batch.expiryDate < date() %}text-danger fw-bold{% elseif batch.expiryDate < date('+30 days') %}text-warning{% else %}text-success{% endif %}\">
                                    {{ batch.expiryDate|date('d/m/Y') }}
                                </span>
                                {% if batch.expiryDate < date() %}
                                    <span class=\"badge bg-danger ms-2\">Expiré</span>
                                {% elseif batch.expiryDate < date('+30 days') %}
                                    <span class=\"badge bg-warning text-dark ms-2\">Expire bientôt</span>
                                {% endif %}
                            {% else %}
                                <span class=\"text-muted\">Non périssable</span>
                            {% endif %}
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-6\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-exchange-alt me-2\"></i>
                        Derniers mouvements
                    </h5>
                    <span class=\"badge bg-secondary\">{{ batch.stockMovements|length }} mouvement(s)</span>
                </div>
                <div class=\"card-body p-0\">
                    {% if batch.stockMovements|length > 0 %}
                        <div class=\"list-group list-group-flush\">
                            {% for movement in batch.stockMovements|slice(0, 5)|sort((a, b) => b.createdAt <=> a.createdAt) %}
                                <div class=\"list-group-item\">
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <div>
                                            {# Affichage du type de mouvement corrigé #}
                                            <span class=\"badge 
                                                {% if movement.movementType == 'PURCHASE' %}bg-success
                                                {% elseif movement.movementType == 'SALE' %}bg-danger
                                                {% elseif movement.movementType == 'ADJUSTMENT' %}bg-warning text-dark
                                                {% else %}bg-info
                                                {% endif %} me-2\">
                                                {% if movement.movementType == 'PURCHASE' %}
                                                    <i class=\"fas fa-cart-plus me-1\"></i> ACHAT
                                                {% elseif movement.movementType == 'SALE' %}
                                                    <i class=\"fas fa-shopping-cart me-1\"></i> VENTE
                                                {% elseif movement.movementType == 'ADJUSTMENT' %}
                                                    <i class=\"fas fa-sliders-h me-1\"></i> AJUSTEMENT
                                                {% else %}
                                                    {{ movement.movementType }}
                                                {% endif %}
                                            </span>
                                            <strong>{{ movement.quantity }}</strong> unités
                                            {% if movement.unitPrice %}
                                                <br>
                                                <small class=\"text-muted\">
                                                    Prix: {{ movement.unitPrice|price_with_currency(batch.hmaService) }}
                                                </small>
                                            {% endif %}
                                        </div>
                                        <div class=\"text-end\">
                                            <small class=\"text-muted\">{{ movement.createdAt|date('d/m/Y H:i') }}</small>
                                            <br>
                                            {% if movement.user %}
                                                <small class=\"text-muted\">
                                                    <i class=\"fas fa-user me-1\"></i>
                                                    {{ movement.user.fullName|default(movement.user.email) }}
                                                </small>
                                            {% endif %}
                                        </div>
                                    </div>
                                    {% if movement.notes %}
                                        <div class=\"mt-2\">
                                            <small class=\"text-muted\">
                                                <i class=\"fas fa-comment me-1\"></i>
                                                {{ movement.notes }}
                                            </small>
                                        </div>
                                    {% endif %}
                                </div>
                            {% endfor %}
                        </div>
                        {% if batch.stockMovements|length > 5 %}
                            <div class=\"text-center p-3\">
                                <small class=\"text-muted\">+ {{ batch.stockMovements|length - 5 }} autres mouvements</small>
                            </div>
                        {% endif %}
                    {% else %}
                        <div class=\"text-center py-4\">
                            <i class=\"fas fa-chart-line fa-2x text-muted mb-2\"></i>
                            <p class=\"text-muted mb-0\">Aucun mouvement de stock</p>
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>

    <!-- Informations supplémentaires sur l'achat -->
    {% if batch.purchaseItem %}
    <div class=\"row mt-4\">
        <div class=\"col-12\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-receipt me-2\"></i>
                        Informations d'achat
                    </h5>
                </div>
                <div class=\"card-body\">
                    <dl class=\"row mb-0\">
                        <dt class=\"col-sm-3 text-muted\">Achat associé</dt>
                        <dd class=\"col-sm-9\">
                            <a href=\"{{ path('purchase_show', {'id': batch.purchaseItem.purchase.id}) }}\" class=\"text-decoration-none\">
                                Commande #{{ batch.purchaseItem.purchase.purchaseNumber }}
                            </a>
                        </dd>
                        
                        <dt class=\"col-sm-3 text-muted\">Fournisseur</dt>
                        <dd class=\"col-sm-9\">
                            {{ batch.purchaseItem.purchase.supplier.name|default('Non renseigné') }}
                        </dd>
                        
                        <dt class=\"col-sm-3 text-muted\">Date d'achat</dt>
                        <dd class=\"col-sm-9\">
                            {{ batch.purchaseItem.purchase.createdAt|date('d/m/Y') }}
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
    {% endif %}
</div>
{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
.card {
    transition: transform 0.2s, box-shadow 0.2s;
}
.card:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 20px rgba(0,0,0,0.1) !important;
}
.list-group-item {
    transition: background-color 0.2s;
}
.list-group-item:hover {
    background-color: #f8f9fa;
}
.badge i {
    margin-right: 4px;
}
</style>
{% endblock %}", "admin/stock_batch/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\stock_batch\\show.html.twig");
    }
}
