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

/* pdf/recu_achat.html.twig */
class __TwigTemplate_31fb4cf51cfe022647bace7a1fdd8b32 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf/recu_achat.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf/recu_achat.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Reçu d'achat ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 5, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 5), "html", null, true);
        yield "</title>
    <style>
        body { font-family: 'DejaVu Sans', Arial, sans-serif; margin: 40px; }
        h1 { color: #0463f1; }
        .header { margin-bottom: 30px; }
        .info { margin-bottom: 20px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        .total { font-weight: bold; text-align: right; margin-top: 20px; }
        .signature { margin-top: 40px; text-align: right; font-style: italic; }
    </style>
</head>
<body>
    <div class=\"header\">
        <h1>Reçu d'achat</h1>
        <p>N° ";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 21, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 21), "html", null, true);
        yield "</p>
        <p>Date de réception : ";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 22, $this->source); })()), "receivedAt", [], "any", false, false, false, 22), "d/m/Y H:i"), "html", null, true);
        yield "</p>
    </div>
    <div class=\"info\">
        <p><strong>Fournisseur :</strong> ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 25, $this->source); })()), "supplier", [], "any", false, false, false, 25), "name", [], "any", false, false, false, 25), "html", null, true);
        yield "</p>
    </div>
    <table>
        <thead>
             <tr>
                <th>Produit</th>
                <th>Unité</th>
                <th>Lot</th>
                <th>Date de fabrication</th>
                <th>Date d'expiration</th>
                <th>Quantité</th>
                <th>Prix unitaire (FCFA)</th>
                <th>Total (FCFA)</th>
             </tr>
        </thead>
        <tbody>
            ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 41, $this->source); })()), "purchaseItems", [], "any", false, false, false, 41));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 42
            yield "            <tr>
                <td>";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 43), "name", [], "any", false, false, false, 43), "html", null, true);
            yield "</td>
                <td>";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, true, false, 44), "unit", [], "any", true, true, false, 44)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 44), "unit", [], "any", false, false, false, 44), "pièce")) : ("pièce")), "html", null, true);
            yield "</td>
                <td>";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "batchNumber", [], "any", false, false, false, 45), "html", null, true);
            yield "</td>
                <td>";
            // line 46
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "manufacturingDate", [], "any", false, false, false, 46)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "manufacturingDate", [], "any", false, false, false, 46), "d/m/Y"), "html", null, true)) : ("-"));
            yield "</td>
                <td>";
            // line 47
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "expiryDate", [], "any", false, false, false, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "expiryDate", [], "any", false, false, false, 47), "d/m/Y"), "html", null, true)) : ("-"));
            yield "</td>
                <td>";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 48), "html", null, true);
            yield "</td>
                <td>";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 49), 0, ",", " "), "html", null, true);
            yield "</td>
                <td>";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "totalPrice", [], "any", false, false, false, 50), 0, ",", " "), "html", null, true);
            yield "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "        </tbody>
    </table>
    <div class=\"total\">
        <p>Total TTC : <strong>";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 56, $this->source); })()), "totalAmount", [], "any", false, false, false, 56), 0, ",", " "), "html", null, true);
        yield " FCFA</strong></p>
    </div>
    <div class=\"signature\">
        <p>Bon pour réception,</p>
        <p>";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 60, $this->source); })()), "user", [], "any", false, false, false, 60), "fullName", [], "any", false, false, false, 60), "html", null, true);
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
        return "pdf/recu_achat.html.twig";
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
        return array (  158 => 60,  151 => 56,  146 => 53,  137 => 50,  133 => 49,  129 => 48,  125 => 47,  121 => 46,  117 => 45,  113 => 44,  109 => 43,  106 => 42,  102 => 41,  83 => 25,  77 => 22,  73 => 21,  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Reçu d'achat {{ purchase.purchaseNumber }}</title>
    <style>
        body { font-family: 'DejaVu Sans', Arial, sans-serif; margin: 40px; }
        h1 { color: #0463f1; }
        .header { margin-bottom: 30px; }
        .info { margin-bottom: 20px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        .total { font-weight: bold; text-align: right; margin-top: 20px; }
        .signature { margin-top: 40px; text-align: right; font-style: italic; }
    </style>
</head>
<body>
    <div class=\"header\">
        <h1>Reçu d'achat</h1>
        <p>N° {{ purchase.purchaseNumber }}</p>
        <p>Date de réception : {{ purchase.receivedAt|date('d/m/Y H:i') }}</p>
    </div>
    <div class=\"info\">
        <p><strong>Fournisseur :</strong> {{ purchase.supplier.name }}</p>
    </div>
    <table>
        <thead>
             <tr>
                <th>Produit</th>
                <th>Unité</th>
                <th>Lot</th>
                <th>Date de fabrication</th>
                <th>Date d'expiration</th>
                <th>Quantité</th>
                <th>Prix unitaire (FCFA)</th>
                <th>Total (FCFA)</th>
             </tr>
        </thead>
        <tbody>
            {% for item in purchase.purchaseItems %}
            <tr>
                <td>{{ item.product.name }}</td>
                <td>{{ item.product.unit|default('pièce') }}</td>
                <td>{{ item.batchNumber }}</td>
                <td>{{ item.manufacturingDate ? item.manufacturingDate|date('d/m/Y') : '-' }}</td>
                <td>{{ item.expiryDate ? item.expiryDate|date('d/m/Y') : '-' }}</td>
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
    <div class=\"signature\">
        <p>Bon pour réception,</p>
        <p>{{ purchase.user.fullName }}</p>
    </div>
</body>
</html>", "pdf/recu_achat.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\pdf\\recu_achat.html.twig");
    }
}
