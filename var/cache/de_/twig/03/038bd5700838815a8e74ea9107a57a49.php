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

/* pdf/bon_commande.html.twig */
class __TwigTemplate_4c415cd27c5b0b5f9fcef34e6a43168f extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf/bon_commande.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf/bon_commande.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Bon de commande ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 5, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 5), "html", null, true);
        yield "</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        h1 { color: #0463f1; }
        .header { margin-bottom: 30px; }
        .info { margin-bottom: 20px; }
        .no-supplier {
            background: #f8f9fa;
            padding: 10px;
            border-left: 4px solid #6c757d;
            color: #6c757d;
            font-style: italic;
            border-radius: 4px;
        }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        .total { font-weight: bold; text-align: right; margin-top: 20px; }
    </style>
</head>
<body>
    <div class=\"header\">
        <h1>Bon de commande</h1>
        <p>N° ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 28, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 28), "html", null, true);
        yield "</p>
        <p>Date : ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 29, $this->source); })()), "confirmedAt", [], "any", false, false, false, 29), "d/m/Y H:i"), "html", null, true);
        yield "</p>
    </div>

    ";
        // line 33
        yield "    <div class=\"info\">
        ";
        // line 34
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 34, $this->source); })()), "supplier", [], "any", false, false, false, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 35
            yield "            <p><strong>Fournisseur :</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 35, $this->source); })()), "supplier", [], "any", false, false, false, 35), "name", [], "any", false, false, false, 35), "html", null, true);
            yield "</p>
            <p><strong>Contact :</strong> ";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 36, $this->source); })()), "supplier", [], "any", false, false, false, 36), "contactPerson", [], "any", false, false, false, 36), "html", null, true);
            yield " / ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 36, $this->source); })()), "supplier", [], "any", false, false, false, 36), "phone", [], "any", false, false, false, 36), "html", null, true);
            yield "</p>
            <p><strong>Adresse :</strong> ";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 37, $this->source); })()), "supplier", [], "any", false, false, false, 37), "adress", [], "any", false, false, false, 37), "html", null, true);
            yield "</p>
        ";
        } else {
            // line 39
            yield "            <div class=\"no-supplier\">
                <strong>Achat interne</strong> — aucun fournisseur associé
            </div>
        ";
        }
        // line 43
        yield "    </div>

    <table>
        <thead>
            <tr>
                <th>Produit</th>
                <th>Code-barres</th>
                <th>Quantité</th>
                <th>Prix unitaire (FCFA)</th>
                <th>Total (FCFA)</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 56, $this->source); })()), "purchaseItems", [], "any", false, false, false, 56));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 57
            yield "            <tr>
                <td>";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 58), "name", [], "any", false, false, false, 58), "html", null, true);
            yield "</td>
                <td>";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 59), "barcode", [], "any", false, false, false, 59), "html", null, true);
            yield "</td>
                <td>";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 60), "html", null, true);
            yield "</td>
                <td>";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 61), 0, ",", " "), "html", null, true);
            yield "</td>
                <td>";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "totalPrice", [], "any", false, false, false, 62), 0, ",", " "), "html", null, true);
            yield "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        yield "        </tbody>
    </table>
    <div class=\"total\">
        <p>Total TTC : <strong>";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 68, $this->source); })()), "totalAmount", [], "any", false, false, false, 68), 0, ",", " "), "html", null, true);
        yield " FCFA</strong></p>
    </div>
    <div class=\"footer\">
        <p>Merci de votre confiance.</p>
        <p>";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 72, $this->source); })()), "hmaService", [], "any", false, false, false, 72), "companyName", [], "any", false, false, false, 72), "html", null, true);
        yield "</p>
    </div>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pdf/bon_commande.html.twig";
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
        return array (  176 => 72,  169 => 68,  164 => 65,  155 => 62,  151 => 61,  147 => 60,  143 => 59,  139 => 58,  136 => 57,  132 => 56,  117 => 43,  111 => 39,  106 => 37,  100 => 36,  95 => 35,  93 => 34,  90 => 33,  84 => 29,  80 => 28,  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Bon de commande {{ purchase.purchaseNumber }}</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        h1 { color: #0463f1; }
        .header { margin-bottom: 30px; }
        .info { margin-bottom: 20px; }
        .no-supplier {
            background: #f8f9fa;
            padding: 10px;
            border-left: 4px solid #6c757d;
            color: #6c757d;
            font-style: italic;
            border-radius: 4px;
        }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        .total { font-weight: bold; text-align: right; margin-top: 20px; }
    </style>
</head>
<body>
    <div class=\"header\">
        <h1>Bon de commande</h1>
        <p>N° {{ purchase.purchaseNumber }}</p>
        <p>Date : {{ purchase.confirmedAt|date('d/m/Y H:i') }}</p>
    </div>

    {# ✅ Fournisseur optionnel #}
    <div class=\"info\">
        {% if purchase.supplier %}
            <p><strong>Fournisseur :</strong> {{ purchase.supplier.name }}</p>
            <p><strong>Contact :</strong> {{ purchase.supplier.contactPerson }} / {{ purchase.supplier.phone }}</p>
            <p><strong>Adresse :</strong> {{ purchase.supplier.adress }}</p>
        {% else %}
            <div class=\"no-supplier\">
                <strong>Achat interne</strong> — aucun fournisseur associé
            </div>
        {% endif %}
    </div>

    <table>
        <thead>
            <tr>
                <th>Produit</th>
                <th>Code-barres</th>
                <th>Quantité</th>
                <th>Prix unitaire (FCFA)</th>
                <th>Total (FCFA)</th>
            </tr>
        </thead>
        <tbody>
            {% for item in purchase.purchaseItems %}
            <tr>
                <td>{{ item.product.name }}</td>
                <td>{{ item.product.barcode }}</td>
                <td>{{ item.quantity }}</td>
                <td>{{ item.unitPrice|number_format(0, ',', ' ') }}</td>
                <td>{{ item.totalPrice|number_format(0, ',', ' ') }}</td>
            </tr>
            {% endfor %}
        </tbody>
    </table>
    <div class=\"total\">
        <p>Total TTC : <strong>{{ purchase.totalAmount|number_format(0, ',', ' ') }} FCFA</strong></p>
    </div>
    <div class=\"footer\">
        <p>Merci de votre confiance.</p>
        <p>{{ purchase.hmaService.companyName }}</p>
    </div>
</body>
</html>", "pdf/bon_commande.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\pdf\\bon_commande.html.twig");
    }
}
