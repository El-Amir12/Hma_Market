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

/* emails/purchase_received.html.twig */
class __TwigTemplate_93828767f0a6c7ab3ddea93ba1c465f3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/purchase_received.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/purchase_received.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Confirmation de réception - Commande ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 5, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 5), "html", null, true);
        yield "</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-radius: 5px; }
        h1 { color: #0463f1; }
        .total { font-size: 18px; font-weight: bold; color: #0463f1; }
        .footer { margin-top: 30px; font-size: 12px; color: #777; text-align: center; border-top: 1px solid #eee; padding-top: 15px; }
        .footer a { color: #0463f1; text-decoration: none; }
        .footer a:hover { text-decoration: underline; }
        table { width: 100%; border-collapse: collapse; margin: 15px 0; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; vertical-align: top; }
        th { background-color: #f2f2f2; }
        .product-details { font-size: 0.9em; color: #555; }
        .product-details span { display: block; }
        @media (max-width: 500px) {
            th, td { padding: 6px; font-size: 0.85em; }
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <h1>✅ Confirmation de réception</h1>
        <p>Bonjour ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 27, $this->source); })()), "supplier", [], "any", false, false, false, 27), "name", [], "any", false, false, false, 27), "html", null, true);
        yield ",</p>
        <p>Nous vous informons que la commande <strong>";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 28, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 28), "html", null, true);
        yield "</strong> a été réceptionnée avec succès.</p>

        <h2>Détails de la commande</h2>
        <p><strong>Date de réception :</strong> ";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 31, $this->source); })()), "receivedAt", [], "any", false, false, false, 31), "d/m/Y H:i"), "html", null, true);
        yield "</p>

        <table>
            <thead>
                <tr>
                    <th>Produit</th>
                    <th>Quantité</th>
                    <th>Prix unitaire</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 43, $this->source); })()), "purchaseItems", [], "any", false, false, false, 43));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 44
            yield "                <tr>
                    <td>
                        <strong>";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 46), "name", [], "any", false, false, false, 46), "html", null, true);
            yield "</strong>
                        ";
            // line 47
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 47), "barcode", [], "any", false, false, false, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 48
                yield "                            <div class=\"product-details\">
                                <span>Code: ";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 49), "barcode", [], "any", false, false, false, 49), "html", null, true);
                yield "</span>
                            </div>
                        ";
            }
            // line 52
            yield "                        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "batchNumber", [], "any", false, false, false, 52)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 53
                yield "                            <div class=\"product-details\">
                                <span>Lot: ";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "batchNumber", [], "any", false, false, false, 54), "html", null, true);
                yield "</span>
                            </div>
                        ";
            }
            // line 57
            yield "                        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "manufacturingDate", [], "any", false, false, false, 57)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 58
                yield "                            <div class=\"product-details\">
                                <span>Fabrication: ";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "manufacturingDate", [], "any", false, false, false, 59), "d/m/Y"), "html", null, true);
                yield "</span>
                            </div>
                        ";
            }
            // line 62
            yield "                        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "expiryDate", [], "any", false, false, false, 62)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 63
                yield "                            <div class=\"product-details\">
                                <span>Expiration: ";
                // line 64
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "expiryDate", [], "any", false, false, false, 64), "d/m/Y"), "html", null, true);
                yield "</span>
                            </div>
                        ";
            }
            // line 67
            yield "                    </td>
                    <td>";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 68), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, true, false, 68), "unit", [], "any", true, true, false, 68)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 68), "unit", [], "any", false, false, false, 68), "pièce")) : ("pièce")), "html", null, true);
            yield "</td>
                    <td>";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 69), 0, ",", " "), "html", null, true);
            yield " FCFA</td>
                    <td>";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "totalPrice", [], "any", false, false, false, 70), 0, ",", " "), "html", null, true);
            yield " FCFA</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        yield "            </tbody>
        </table>

        <p><strong>Total TTC :</strong> <span class=\"total\">";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 76, $this->source); })()), "totalAmount", [], "any", false, false, false, 76), 0, ",", " "), "html", null, true);
        yield " FCFA</span></p>

        <p>Nous vous remercions pour votre service.</p>
        <p>Cordialement,<br>";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 79, $this->source); })()), "hmaService", [], "any", false, false, false, 79), "companyName", [], "any", false, false, false, 79), "html", null, true);
        yield "</p>
        
        <div class=\"footer\">
            <p>Découvrez nos produits sur <a href=\"";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["app_url"]) || array_key_exists("app_url", $context) ? $context["app_url"] : (function () { throw new RuntimeError('Variable "app_url" does not exist.', 82, $this->source); })()), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["app_url"]) || array_key_exists("app_url", $context) ? $context["app_url"] : (function () { throw new RuntimeError('Variable "app_url" does not exist.', 82, $this->source); })()), "html", null, true);
        yield "</a> – Votre partenaire de confiance.</p>
            <p>Ce message est un accusé de réception automatique. Merci de ne pas y répondre.</p>
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
        return "emails/purchase_received.html.twig";
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
        return array (  202 => 82,  196 => 79,  190 => 76,  185 => 73,  176 => 70,  172 => 69,  166 => 68,  163 => 67,  157 => 64,  154 => 63,  151 => 62,  145 => 59,  142 => 58,  139 => 57,  133 => 54,  130 => 53,  127 => 52,  121 => 49,  118 => 48,  116 => 47,  112 => 46,  108 => 44,  104 => 43,  89 => 31,  83 => 28,  79 => 27,  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Confirmation de réception - Commande {{ purchase.purchaseNumber }}</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-radius: 5px; }
        h1 { color: #0463f1; }
        .total { font-size: 18px; font-weight: bold; color: #0463f1; }
        .footer { margin-top: 30px; font-size: 12px; color: #777; text-align: center; border-top: 1px solid #eee; padding-top: 15px; }
        .footer a { color: #0463f1; text-decoration: none; }
        .footer a:hover { text-decoration: underline; }
        table { width: 100%; border-collapse: collapse; margin: 15px 0; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; vertical-align: top; }
        th { background-color: #f2f2f2; }
        .product-details { font-size: 0.9em; color: #555; }
        .product-details span { display: block; }
        @media (max-width: 500px) {
            th, td { padding: 6px; font-size: 0.85em; }
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <h1>✅ Confirmation de réception</h1>
        <p>Bonjour {{ purchase.supplier.name }},</p>
        <p>Nous vous informons que la commande <strong>{{ purchase.purchaseNumber }}</strong> a été réceptionnée avec succès.</p>

        <h2>Détails de la commande</h2>
        <p><strong>Date de réception :</strong> {{ purchase.receivedAt|date('d/m/Y H:i') }}</p>

        <table>
            <thead>
                <tr>
                    <th>Produit</th>
                    <th>Quantité</th>
                    <th>Prix unitaire</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                {% for item in purchase.purchaseItems %}
                <tr>
                    <td>
                        <strong>{{ item.product.name }}</strong>
                        {% if item.product.barcode %}
                            <div class=\"product-details\">
                                <span>Code: {{ item.product.barcode }}</span>
                            </div>
                        {% endif %}
                        {% if item.batchNumber %}
                            <div class=\"product-details\">
                                <span>Lot: {{ item.batchNumber }}</span>
                            </div>
                        {% endif %}
                        {% if item.manufacturingDate %}
                            <div class=\"product-details\">
                                <span>Fabrication: {{ item.manufacturingDate|date('d/m/Y') }}</span>
                            </div>
                        {% endif %}
                        {% if item.expiryDate %}
                            <div class=\"product-details\">
                                <span>Expiration: {{ item.expiryDate|date('d/m/Y') }}</span>
                            </div>
                        {% endif %}
                    </td>
                    <td>{{ item.quantity }} {{ item.product.unit|default('pièce') }}</td>
                    <td>{{ item.unitPrice|number_format(0, ',', ' ') }} FCFA</td>
                    <td>{{ item.totalPrice|number_format(0, ',', ' ') }} FCFA</td>
                </tr>
                {% endfor %}
            </tbody>
        </table>

        <p><strong>Total TTC :</strong> <span class=\"total\">{{ purchase.totalAmount|number_format(0, ',', ' ') }} FCFA</span></p>

        <p>Nous vous remercions pour votre service.</p>
        <p>Cordialement,<br>{{ purchase.hmaService.companyName }}</p>
        
        <div class=\"footer\">
            <p>Découvrez nos produits sur <a href=\"{{ app_url }}\">{{ app_url }}</a> – Votre partenaire de confiance.</p>
            <p>Ce message est un accusé de réception automatique. Merci de ne pas y répondre.</p>
        </div>
    </div>
</body>
</html>", "emails/purchase_received.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\emails\\purchase_received.html.twig");
    }
}
