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
class __TwigTemplate_316f3d241adef29ee58305d11247966e extends Template
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
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 20, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 20), "html", null, true);
        yield "</p>
        <p>Date : ";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 21, $this->source); })()), "confirmedAt", [], "any", false, false, false, 21), "d/m/Y H:i"), "html", null, true);
        yield "</p>
    </div>
    <div class=\"info\">
        <p><strong>Fournisseur :</strong> ";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 24, $this->source); })()), "supplier", [], "any", false, false, false, 24), "name", [], "any", false, false, false, 24), "html", null, true);
        yield "</p>
        <p><strong>Contact :</strong> ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 25, $this->source); })()), "supplier", [], "any", false, false, false, 25), "contactPerson", [], "any", false, false, false, 25), "html", null, true);
        yield " / ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 25, $this->source); })()), "supplier", [], "any", false, false, false, 25), "phone", [], "any", false, false, false, 25), "html", null, true);
        yield "</p>
        <p><strong>Adresse :</strong> ";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 26, $this->source); })()), "supplier", [], "any", false, false, false, 26), "adress", [], "any", false, false, false, 26), "html", null, true);
        yield "</p>
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
            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 39, $this->source); })()), "purchaseItems", [], "any", false, false, false, 39));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 40
            yield "            <tr>
                <td>";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 41), "name", [], "any", false, false, false, 41), "html", null, true);
            yield "</td>
                <td>";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 42), "barcode", [], "any", false, false, false, 42), "html", null, true);
            yield "</td>
                <td>";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 43), "html", null, true);
            yield "</td>
                <td>";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 44), 0, ",", " "), "html", null, true);
            yield "</td>
                <td>";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "totalPrice", [], "any", false, false, false, 45), 0, ",", " "), "html", null, true);
            yield "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        yield "        </tbody>
    </table>
    <div class=\"total\">
        <p>Total TTC : <strong>";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 51, $this->source); })()), "totalAmount", [], "any", false, false, false, 51), 0, ",", " "), "html", null, true);
        yield " FCFA</strong></p>
    </div>
    <div class=\"footer\">
        <p>Merci de votre confiance.</p>
        <p>";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 55, $this->source); })()), "hmaService", [], "any", false, false, false, 55), "companyName", [], "any", false, false, false, 55), "html", null, true);
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
        return array (  152 => 55,  145 => 51,  140 => 48,  131 => 45,  127 => 44,  123 => 43,  119 => 42,  115 => 41,  112 => 40,  108 => 39,  92 => 26,  86 => 25,  82 => 24,  76 => 21,  72 => 20,  54 => 5,  48 => 1,);
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
    <div class=\"info\">
        <p><strong>Fournisseur :</strong> {{ purchase.supplier.name }}</p>
        <p><strong>Contact :</strong> {{ purchase.supplier.contactPerson }} / {{ purchase.supplier.phone }}</p>
        <p><strong>Adresse :</strong> {{ purchase.supplier.adress }}</p>
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
