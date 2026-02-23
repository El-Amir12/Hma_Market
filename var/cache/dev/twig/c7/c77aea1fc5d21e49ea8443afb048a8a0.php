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

/* admin/purchase/receipt.html.twig */
class __TwigTemplate_6e149825c80254746f13a8d928706602 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/purchase/receipt.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/purchase/receipt.html.twig"));

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

        yield "Reçu d'achat #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 4, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 4), "html", null, true);
        
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
        yield "<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-header bg-success text-white\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <h3 class=\"mb-0\">
                                <i class=\"fas fa-check-circle\"></i> 
                                Reçu d'achat #";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 16, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 16), "html", null, true);
        yield "
                            </h3>
                            <p class=\"mb-0\">Réception confirmée le ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 18, $this->source); })()), "receivedAt", [], "any", false, false, false, 18), "d/m/Y H:i"), "html", null, true);
        yield "</p>
                        </div>
                        <div>
                            <a href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_purchase_view_pdf", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21), "type" => "recu-achat"]), "html", null, true);
        yield "\" 
                               class=\"btn btn-light\" target=\"_blank\">
                                <i class=\"fas fa-print\"></i> Imprimer le reçu
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class=\"card-body\">
                    <!-- Informations générales -->
                    <div class=\"row mb-4\">
                        <div class=\"col-md-6\">
                            <h5>Informations de la commande</h5>
                            <table class=\"table table-sm\">
                                <tr>
                                    <th>Numéro de commande:</th>
                                    <td>";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 37, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 37), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Fournisseur:</th>
                                    <td>";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 41, $this->source); })()), "supplier", [], "any", false, false, false, 41), "name", [], "any", false, false, false, 41), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Date de création:</th>
                                    <td>";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 45, $this->source); })()), "createdAt", [], "any", false, false, false, 45), "d/m/Y"), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Date de confirmation:</th>
                                    <td>";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 49, $this->source); })()), "confirmedAt", [], "any", false, false, false, 49), "d/m/Y"), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Date de réception:</th>
                                    <td>";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 53, $this->source); })()), "receivedAt", [], "any", false, false, false, 53), "d/m/Y"), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Montant total:</th>
                                    <td class=\"font-weight-bold\">";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 57, $this->source); })()), "totalAmount", [], "any", false, false, false, 57), "html", null, true);
        yield " €</td>
                                </tr>
                            </table>
                        </div>
                        
                        <div class=\"col-md-6\">
                            <h5>Informations de réception</h5>
                            <table class=\"table table-sm\">
                                <tr>
                                    <th>Réceptionné par:</th>
                                    <td>";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67), "fullName", [], "any", false, false, false, 67), "html", null, true);
        yield "</td>
                                </tr>
                                ";
        // line 69
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 69, $this->source); })()), "notes", [], "any", false, false, false, 69)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 70
            yield "                                <tr>
                                    <th>Notes:</th>
                                    <td>";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 72, $this->source); })()), "notes", [], "any", false, false, false, 72), "html", null, true);
            yield "</td>
                                </tr>
                                ";
        }
        // line 75
        yield "                            </table>
                        </div>
                    </div>
                    
                    <!-- Produits réceptionnés -->
                    <h5>Produits réceptionnés</h5>
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered table-striped\">
                            <thead class=\"thead-dark\">
                                <tr>
                                    <th>Produit</th>
                                    <th>Code barre</th>
                                    <th>Numéro de lot</th>
                                    <th>Quantité</th>
                                    <th>Prix unitaire</th>
                                    <th>Montant total</th>
                                    ";
        // line 91
        if ((($tmp = (isset($context["hasExpiryDates"]) || array_key_exists("hasExpiryDates", $context) ? $context["hasExpiryDates"] : (function () { throw new RuntimeError('Variable "hasExpiryDates" does not exist.', 91, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 92
            yield "                                    <th>Date fabrication</th>
                                    <th>Date expiration</th>
                                    ";
        }
        // line 95
        yield "                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 98, $this->source); })()), "purchaseItems", [], "any", false, false, false, 98));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 99
            yield "                                <tr>
                                    <td>";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 100), "name", [], "any", false, false, false, 100), "html", null, true);
            yield "</td>
                                    <td>";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 101), "barcode", [], "any", false, false, false, 101), "html", null, true);
            yield "</td>
                                    <td>
                                        <span class=\"badge badge-info\">";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "batchNumber", [], "any", false, false, false, 103), "html", null, true);
            yield "</span>
                                    </td>
                                    <td>";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 105), "html", null, true);
            yield "</td>
                                    <td>";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 106), "html", null, true);
            yield " €</td>
                                    <td>";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "totalPrice", [], "any", false, false, false, 107), "html", null, true);
            yield " €</td>
                                    ";
            // line 108
            if ((($tmp = (isset($context["hasExpiryDates"]) || array_key_exists("hasExpiryDates", $context) ? $context["hasExpiryDates"] : (function () { throw new RuntimeError('Variable "hasExpiryDates" does not exist.', 108, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 109
                yield "                                    <td>
                                        ";
                // line 110
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "manufacturingDate", [], "any", false, false, false, 110)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 111
                    yield "                                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "manufacturingDate", [], "any", false, false, false, 111), "d/m/Y"), "html", null, true);
                    yield "
                                        ";
                } else {
                    // line 113
                    yield "                                            <span class=\"text-muted\">N/A</span>
                                        ";
                }
                // line 115
                yield "                                    </td>
                                    <td>
                                        ";
                // line 117
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "expiryDate", [], "any", false, false, false, 117)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 118
                    yield "                                            ";
                    $context["expiryClass"] = ((($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "expiryDate", [], "any", false, false, false, 118), "Y-m-d") < $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d"))) ? ("danger") : (((($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source,                     // line 119
$context["item"], "expiryDate", [], "any", false, false, false, 119), "Y-m-d") < $this->extensions['Twig\Extension\CoreExtension']->formatDate("+30 days", "Y-m-d"))) ? ("warning") : ("success"))));
                    // line 120
                    yield "                                            <span class=\"badge badge-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["expiryClass"]) || array_key_exists("expiryClass", $context) ? $context["expiryClass"] : (function () { throw new RuntimeError('Variable "expiryClass" does not exist.', 120, $this->source); })()), "html", null, true);
                    yield "\">
                                                ";
                    // line 121
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "expiryDate", [], "any", false, false, false, 121), "d/m/Y"), "html", null, true);
                    yield "
                                            </span>
                                        ";
                } else {
                    // line 124
                    yield "                                            <span class=\"text-muted\">N/A</span>
                                        ";
                }
                // line 126
                yield "                                    </td>
                                    ";
            }
            // line 128
            yield "                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        yield "                            </tbody>
                            <tfoot>
                                <tr class=\"table-primary\">
                                    <td colspan=\"";
        // line 133
        if ((($tmp = (isset($context["hasExpiryDates"]) || array_key_exists("hasExpiryDates", $context) ? $context["hasExpiryDates"] : (function () { throw new RuntimeError('Variable "hasExpiryDates" does not exist.', 133, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "8";
        } else {
            yield "6";
        }
        yield "\" class=\"text-right font-weight-bold\">Total général:</td>
                                    <td class=\"font-weight-bold\">";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 134, $this->source); })()), "totalAmount", [], "any", false, false, false, 134), "html", null, true);
        yield " €</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    
                    <!-- Stocks mis à jour -->
                    <div class=\"alert alert-info mt-4\">
                        <h6><i class=\"fas fa-info-circle\"></i> Stocks mis à jour</h6>
                        <p class=\"mb-0\">
                            Les stocks ont été mis à jour automatiquement suite à cette réception. 
                            Vous pouvez consulter les mouvements de stock dans le journal des stocks.
                        </p>
                    </div>
                    
                    <!-- Actions -->
                    <div class=\"mt-4\">
                        <a href=\"";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_purchase_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 151, $this->source); })()), "id", [], "any", false, false, false, 151)]), "html", null, true);
        yield "\" class=\"btn btn-secondary\">
                            <i class=\"fas fa-arrow-left\"></i> Retour à la commande
                        </a>
                        
                        <a href=\"";
        // line 155
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_purchase_index");
        yield "\" class=\"btn btn-outline-primary\">
                            <i class=\"fas fa-list\"></i> Liste des achats
                        </a>
                        
                        <button onclick=\"window.print()\" class=\"btn btn-outline-dark\">
                            <i class=\"fas fa-print\"></i> Imprimer cette page
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
        return "admin/purchase/receipt.html.twig";
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
        return array (  363 => 155,  356 => 151,  336 => 134,  328 => 133,  323 => 130,  316 => 128,  312 => 126,  308 => 124,  302 => 121,  297 => 120,  295 => 119,  293 => 118,  291 => 117,  287 => 115,  283 => 113,  277 => 111,  275 => 110,  272 => 109,  270 => 108,  266 => 107,  262 => 106,  258 => 105,  253 => 103,  248 => 101,  244 => 100,  241 => 99,  237 => 98,  232 => 95,  227 => 92,  225 => 91,  207 => 75,  201 => 72,  197 => 70,  195 => 69,  190 => 67,  177 => 57,  170 => 53,  163 => 49,  156 => 45,  149 => 41,  142 => 37,  123 => 21,  117 => 18,  112 => 16,  101 => 7,  88 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# admin/purchase/receipt.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Reçu d'achat #{{ purchase.purchaseNumber }}{% endblock %}

{% block body %}
<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-header bg-success text-white\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                            <h3 class=\"mb-0\">
                                <i class=\"fas fa-check-circle\"></i> 
                                Reçu d'achat #{{ purchase.purchaseNumber }}
                            </h3>
                            <p class=\"mb-0\">Réception confirmée le {{ purchase.receivedAt|date('d/m/Y H:i') }}</p>
                        </div>
                        <div>
                            <a href=\"{{ path('admin_purchase_view_pdf', {id: purchase.id, type: 'recu-achat'}) }}\" 
                               class=\"btn btn-light\" target=\"_blank\">
                                <i class=\"fas fa-print\"></i> Imprimer le reçu
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class=\"card-body\">
                    <!-- Informations générales -->
                    <div class=\"row mb-4\">
                        <div class=\"col-md-6\">
                            <h5>Informations de la commande</h5>
                            <table class=\"table table-sm\">
                                <tr>
                                    <th>Numéro de commande:</th>
                                    <td>{{ purchase.purchaseNumber }}</td>
                                </tr>
                                <tr>
                                    <th>Fournisseur:</th>
                                    <td>{{ purchase.supplier.name }}</td>
                                </tr>
                                <tr>
                                    <th>Date de création:</th>
                                    <td>{{ purchase.createdAt|date('d/m/Y') }}</td>
                                </tr>
                                <tr>
                                    <th>Date de confirmation:</th>
                                    <td>{{ purchase.confirmedAt|date('d/m/Y') }}</td>
                                </tr>
                                <tr>
                                    <th>Date de réception:</th>
                                    <td>{{ purchase.receivedAt|date('d/m/Y') }}</td>
                                </tr>
                                <tr>
                                    <th>Montant total:</th>
                                    <td class=\"font-weight-bold\">{{ purchase.totalAmount }} €</td>
                                </tr>
                            </table>
                        </div>
                        
                        <div class=\"col-md-6\">
                            <h5>Informations de réception</h5>
                            <table class=\"table table-sm\">
                                <tr>
                                    <th>Réceptionné par:</th>
                                    <td>{{ purchase.user.fullName }}</td>
                                </tr>
                                {% if purchase.notes %}
                                <tr>
                                    <th>Notes:</th>
                                    <td>{{ purchase.notes }}</td>
                                </tr>
                                {% endif %}
                            </table>
                        </div>
                    </div>
                    
                    <!-- Produits réceptionnés -->
                    <h5>Produits réceptionnés</h5>
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered table-striped\">
                            <thead class=\"thead-dark\">
                                <tr>
                                    <th>Produit</th>
                                    <th>Code barre</th>
                                    <th>Numéro de lot</th>
                                    <th>Quantité</th>
                                    <th>Prix unitaire</th>
                                    <th>Montant total</th>
                                    {% if hasExpiryDates %}
                                    <th>Date fabrication</th>
                                    <th>Date expiration</th>
                                    {% endif %}
                                </tr>
                            </thead>
                            <tbody>
                                {% for item in purchase.purchaseItems %}
                                <tr>
                                    <td>{{ item.product.name }}</td>
                                    <td>{{ item.product.barcode }}</td>
                                    <td>
                                        <span class=\"badge badge-info\">{{ item.batchNumber }}</span>
                                    </td>
                                    <td>{{ item.quantity }}</td>
                                    <td>{{ item.unitPrice }} €</td>
                                    <td>{{ item.totalPrice }} €</td>
                                    {% if hasExpiryDates %}
                                    <td>
                                        {% if item.manufacturingDate %}
                                            {{ item.manufacturingDate|date('d/m/Y') }}
                                        {% else %}
                                            <span class=\"text-muted\">N/A</span>
                                        {% endif %}
                                    </td>
                                    <td>
                                        {% if item.expiryDate %}
                                            {% set expiryClass = item.expiryDate|date('Y-m-d') < 'now'|date('Y-m-d') ? 'danger' : 
                                                                 (item.expiryDate|date('Y-m-d') < '+30 days'|date('Y-m-d') ? 'warning' : 'success') %}
                                            <span class=\"badge badge-{{ expiryClass }}\">
                                                {{ item.expiryDate|date('d/m/Y') }}
                                            </span>
                                        {% else %}
                                            <span class=\"text-muted\">N/A</span>
                                        {% endif %}
                                    </td>
                                    {% endif %}
                                </tr>
                                {% endfor %}
                            </tbody>
                            <tfoot>
                                <tr class=\"table-primary\">
                                    <td colspan=\"{% if hasExpiryDates %}8{% else %}6{% endif %}\" class=\"text-right font-weight-bold\">Total général:</td>
                                    <td class=\"font-weight-bold\">{{ purchase.totalAmount }} €</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    
                    <!-- Stocks mis à jour -->
                    <div class=\"alert alert-info mt-4\">
                        <h6><i class=\"fas fa-info-circle\"></i> Stocks mis à jour</h6>
                        <p class=\"mb-0\">
                            Les stocks ont été mis à jour automatiquement suite à cette réception. 
                            Vous pouvez consulter les mouvements de stock dans le journal des stocks.
                        </p>
                    </div>
                    
                    <!-- Actions -->
                    <div class=\"mt-4\">
                        <a href=\"{{ path('admin_purchase_show', {id: purchase.id}) }}\" class=\"btn btn-secondary\">
                            <i class=\"fas fa-arrow-left\"></i> Retour à la commande
                        </a>
                        
                        <a href=\"{{ path('admin_purchase_index') }}\" class=\"btn btn-outline-primary\">
                            <i class=\"fas fa-list\"></i> Liste des achats
                        </a>
                        
                        <button onclick=\"window.print()\" class=\"btn btn-outline-dark\">
                            <i class=\"fas fa-print\"></i> Imprimer cette page
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "admin/purchase/receipt.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\purchase\\receipt.html.twig");
    }
}
