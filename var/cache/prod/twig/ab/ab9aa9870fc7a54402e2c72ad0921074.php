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

/* emails/purchase_cancelled.html.twig */
class __TwigTemplate_0d7f313dad4d91449239ded17994fc10 extends Template
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
        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Annulation de commande - ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "purchaseNumber", [], "any", false, false, false, 5), "html", null, true);
        yield "</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-radius: 5px; }
        h1 { color: #dc3545; }
        .reason { background-color: #f8d7da; border-left: 4px solid #dc3545; padding: 10px; margin: 20px 0; }
        .footer { margin-top: 30px; font-size: 12px; color: #777; text-align: center; border-top: 1px solid #eee; padding-top: 15px; }
        .footer a { color: #0463f1; text-decoration: none; }
        .footer a:hover { text-decoration: underline; }
        table { width: 100%; border-collapse: collapse; margin: 15px 0; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <div class=\"container\">
        <h1>❌ Annulation de commande</h1>
        <p>Bonjour ";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "supplier", [], "any", false, false, false, 22), "name", [], "any", false, false, false, 22), "html", null, true);
        yield ",</p>
        <p>Nous vous informons que la commande <strong>";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "purchaseNumber", [], "any", false, false, false, 23), "html", null, true);
        yield "</strong> a été annulée.</p>

        <div class=\"reason\">
            <strong>Motif de l'annulation :</strong><br>
            ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["reason"] ?? null), "html", null, true);
        yield "
        </div>

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
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "purchaseItems", [], "any", false, false, false, 42));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 43
            yield "                <tr>
                    <td>";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 44), "name", [], "any", false, false, false, 44), "html", null, true);
            yield "</td>
                    <td>";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 45), "html", null, true);
            yield "</td>
                    <td>";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, true, false, 46), "unit", [], "any", true, true, false, 46)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 46), "unit", [], "any", false, false, false, 46), "pièce")) : ("pièce")), "html", null, true);
            yield "</td>
                    <td>";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 47), 0, ",", " "), "html", null, true);
            yield " FCFA</td>
                    <td>";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "totalPrice", [], "any", false, false, false, 48), 0, ",", " "), "html", null, true);
            yield " FCFA</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        yield "            </tbody>
        </table>

        <p><strong>Total TTC :</strong> ";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "totalAmount", [], "any", false, false, false, 54), 0, ",", " "), "html", null, true);
        yield " FCFA</p>

        <p>Nous vous prions de bien vouloir nous excuser pour ce désagrément.</p>
        <p>Cordialement,<br>";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "hmaService", [], "any", false, false, false, 57), "companyName", [], "any", false, false, false, 57), "html", null, true);
        yield "</p>
        
        <div class=\"footer\">
            <p>Découvrez nos produits sur <a href=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["app_url"] ?? null), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["app_url"] ?? null), "html", null, true);
        yield "</a> – Votre partenaire de confiance.</p>
            <p>Ce message est une notification automatique d'annulation. Merci de ne pas y répondre.</p>
        </div>
    </div>
</body>
</html>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "emails/purchase_cancelled.html.twig";
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
        return array (  146 => 60,  140 => 57,  134 => 54,  129 => 51,  120 => 48,  116 => 47,  112 => 46,  108 => 45,  104 => 44,  101 => 43,  97 => 42,  79 => 27,  72 => 23,  68 => 22,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "emails/purchase_cancelled.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\emails\\purchase_cancelled.html.twig");
    }
}
