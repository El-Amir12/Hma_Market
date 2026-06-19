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

/* emails/purchase_confirmation.html.twig */
class __TwigTemplate_2b913688d03643587d656d96f902b832 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/purchase_confirmation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/purchase_confirmation.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Confirmation de commande</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-radius: 5px; }
        h1 { color: #0463f1; }
        .footer { margin-top: 30px; font-size: 12px; color: #777; text-align: center; border-top: 1px solid #eee; padding-top: 15px; }
        .footer a { color: #0463f1; text-decoration: none; }
        .footer a:hover { text-decoration: underline; }
        table { width: 100%; border-collapse: collapse; margin: 15px 0; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        .total { font-weight: bold; color: #0463f1; }
    </style>
</head>
<body>
    <div class=\"container\">
        <h1>Commande ";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 21, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 21), "html", null, true);
        yield "</h1>
        <p>Bonjour ";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplier"]) || array_key_exists("supplier", $context) ? $context["supplier"] : (function () { throw new RuntimeError('Variable "supplier" does not exist.', 22, $this->source); })()), "name", [], "any", false, false, false, 22), "html", null, true);
        yield ",</p>
        <p>Vous avez reçu une nouvelle commande de la part de ";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 23, $this->source); })()), "hmaService", [], "any", false, false, false, 23), "companyName", [], "any", false, false, false, 23), "html", null, true);
        yield ".</p>

        <h2>Détails de la commande</h2>
        <table>
            <thead>
                 <tr>
                    <th>Produit</th>
                    <th>Quantité</th>
                    <th>Unité</th>
                    <th>Prix unitaire</th>
                    <th>Total</th>
                 </tr>
            </thead>
            <tbody>
                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 37, $this->source); })()), "purchaseItems", [], "any", false, false, false, 37));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 38
            yield "                <tr>
                    <td>";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 39), "name", [], "any", false, false, false, 39), "html", null, true);
            yield "</td>
                    <td>";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 40), "html", null, true);
            yield "</td>
                    <td>";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, true, false, 41), "unit", [], "any", true, true, false, 41)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 41), "unit", [], "any", false, false, false, 41), "pièce")) : ("pièce")), "html", null, true);
            yield "</td>
                    <td>";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 42), 0, ",", " "), "html", null, true);
            yield " FCFA</td>
                    <td>";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "totalPrice", [], "any", false, false, false, 43), 0, ",", " "), "html", null, true);
            yield " FCFA</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "            </tbody>
        </table>

        <p><strong>Total :</strong> <span class=\"total\">";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 49, $this->source); })()), "totalAmount", [], "any", false, false, false, 49), 0, ",", " "), "html", null, true);
        yield " FCFA</span></p>

        ";
        // line 51
        if ((($tmp = (isset($context["customMessage"]) || array_key_exists("customMessage", $context) ? $context["customMessage"] : (function () { throw new RuntimeError('Variable "customMessage" does not exist.', 51, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 52
            yield "            <p><strong>Message :</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["customMessage"]) || array_key_exists("customMessage", $context) ? $context["customMessage"] : (function () { throw new RuntimeError('Variable "customMessage" does not exist.', 52, $this->source); })()), "html", null, true);
            yield "</p>
        ";
        }
        // line 54
        yield "
        <p>Cordialement,<br>";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 55, $this->source); })()), "hmaService", [], "any", false, false, false, 55), "companyName", [], "any", false, false, false, 55), "html", null, true);
        yield "</p>
        
        <div class=\"footer\">
            <p>Découvrez nos produits sur <a href=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["app_url"]) || array_key_exists("app_url", $context) ? $context["app_url"] : (function () { throw new RuntimeError('Variable "app_url" does not exist.', 58, $this->source); })()), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["app_url"]) || array_key_exists("app_url", $context) ? $context["app_url"] : (function () { throw new RuntimeError('Variable "app_url" does not exist.', 58, $this->source); })()), "html", null, true);
        yield "</a> – Votre partenaire de confiance.</p>
            <p>Ce message est une notification automatique. Merci de ne pas y répondre.</p>
        </div>
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
        return "emails/purchase_confirmation.html.twig";
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
        return array (  154 => 58,  148 => 55,  145 => 54,  139 => 52,  137 => 51,  132 => 49,  127 => 46,  118 => 43,  114 => 42,  110 => 41,  106 => 40,  102 => 39,  99 => 38,  95 => 37,  78 => 23,  74 => 22,  70 => 21,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Confirmation de commande</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-radius: 5px; }
        h1 { color: #0463f1; }
        .footer { margin-top: 30px; font-size: 12px; color: #777; text-align: center; border-top: 1px solid #eee; padding-top: 15px; }
        .footer a { color: #0463f1; text-decoration: none; }
        .footer a:hover { text-decoration: underline; }
        table { width: 100%; border-collapse: collapse; margin: 15px 0; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        .total { font-weight: bold; color: #0463f1; }
    </style>
</head>
<body>
    <div class=\"container\">
        <h1>Commande {{ purchase.purchaseNumber }}</h1>
        <p>Bonjour {{ supplier.name }},</p>
        <p>Vous avez reçu une nouvelle commande de la part de {{ purchase.hmaService.companyName }}.</p>

        <h2>Détails de la commande</h2>
        <table>
            <thead>
                 <tr>
                    <th>Produit</th>
                    <th>Quantité</th>
                    <th>Unité</th>
                    <th>Prix unitaire</th>
                    <th>Total</th>
                 </tr>
            </thead>
            <tbody>
                {% for item in purchase.purchaseItems %}
                <tr>
                    <td>{{ item.product.name }}</td>
                    <td>{{ item.quantity }}</td>
                    <td>{{ item.product.unit|default('pièce') }}</td>
                    <td>{{ item.unitPrice|number_format(0, ',', ' ') }} FCFA</td>
                    <td>{{ item.totalPrice|number_format(0, ',', ' ') }} FCFA</td>
                </tr>
                {% endfor %}
            </tbody>
        </table>

        <p><strong>Total :</strong> <span class=\"total\">{{ purchase.totalAmount|number_format(0, ',', ' ') }} FCFA</span></p>

        {% if customMessage %}
            <p><strong>Message :</strong> {{ customMessage }}</p>
        {% endif %}

        <p>Cordialement,<br>{{ purchase.hmaService.companyName }}</p>
        
        <div class=\"footer\">
            <p>Découvrez nos produits sur <a href=\"{{ app_url }}\">{{ app_url }}</a> – Votre partenaire de confiance.</p>
            <p>Ce message est une notification automatique. Merci de ne pas y répondre.</p>
        </div>
    </div>
</body>
</html>", "emails/purchase_confirmation.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\emails\\purchase_confirmation.html.twig");
    }
}
