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

/* sale/orders/receipt_content.html.twig */
class __TwigTemplate_575b533288dc2831249a9c765593496a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sale/orders/receipt_content.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sale/orders/receipt_content.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Reçu de vente - ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 6, $this->source); })()), "orderNumber", [], "any", false, false, false, 6), "html", null, true);
        yield "</title>
    <style>
        /* Styles pour papier reçu 80mm */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Courier New', 'Courier', monospace;
            font-size: 12px;
            line-height: 1.3;
            color: #000;
            background: white;
            padding: 8px;
            width: 80mm;
            margin: 0 auto;
        }
        
        /* En-tête */
        .header {
            text-align: center;
            border-bottom: 1px dashed #000;
            padding-bottom: 8px;
            margin-bottom: 8px;
        }
        
        .company-name {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 4px;
        }
        
        .company-info {
            font-size: 10px;
            color: #555;
        }
        
        .receipt-title {
            font-size: 14px;
            font-weight: bold;
            margin: 8px 0;
        }
        
        /* Informations vente */
        .info-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 4px;
        }
        
        .info-label {
            font-weight: bold;
        }
        
        /* Tableau des articles */
        .items-table {
            width: 100%;
            border-collapse: collapse;
            margin: 8px 0;
        }
        
        .items-table th {
            text-align: left;
            border-bottom: 1px dashed #000;
            padding-bottom: 4px;
            margin-bottom: 4px;
            font-size: 11px;
        }
        
        .items-table td {
            padding: 4px 0;
            vertical-align: top;
        }
        
        .item-name {
            font-size: 11px;
        }
        
        .item-quantity {
            text-align: center;
            width: 40px;
        }
        
        .item-price {
            text-align: right;
            width: 60px;
        }
        
        /* Totaux */
        .totals {
            border-top: 1px dashed #000;
            padding-top: 8px;
            margin-top: 8px;
        }
        
        .total-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 4px;
        }
        
        .total-amount {
            font-size: 14px;
            font-weight: bold;
        }
        
        /* Pied de page */
        .footer {
            text-align: center;
            border-top: 1px dashed #000;
            padding-top: 8px;
            margin-top: 8px;
            font-size: 10px;
            color: #555;
        }
        
        /* Diviseurs */
        .divider {
            border-top: 1px dotted #ccc;
            margin: 8px 0;
        }
        
        /* Message remerciement */
        .thanks {
            text-align: center;
            font-size: 11px;
            font-weight: bold;
            margin: 8px 0;
        }
        
        @media print {
            body {
                padding: 0;
                margin: 0;
            }
            .no-print {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <div class=\"company-name\">";
        // line 151
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "name", [], "any", true, true, false, 151) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 151, $this->source); })()), "name", [], "any", false, false, false, 151)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 151, $this->source); })()), "name", [], "any", false, false, false, 151), "html", null, true)) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "companyName", [], "any", true, true, false, 151) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 151, $this->source); })()), "companyName", [], "any", false, false, false, 151)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 151, $this->source); })()), "companyName", [], "any", false, false, false, 151), "html", null, true)) : ("Votre Entreprise"))));
        yield "</div>
        <div class=\"company-info\">
            ";
        // line 153
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 153, $this->source); })()), "address", [], "any", false, false, false, 153)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 154
            yield "                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 154, $this->source); })()), "address", [], "any", false, false, false, 154), "html", null, true);
            yield "<br>
            ";
        }
        // line 156
        yield "            ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 156, $this->source); })()), "phone", [], "any", false, false, false, 156)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 157
            yield "                Tél: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 157, $this->source); })()), "phone", [], "any", false, false, false, 157), "html", null, true);
            yield "<br>
            ";
        }
        // line 159
        yield "            ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 159, $this->source); })()), "email", [], "any", false, false, false, 159)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 160
            yield "                Email: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 160, $this->source); })()), "email", [], "any", false, false, false, 160), "html", null, true);
            yield "
            ";
        }
        // line 162
        yield "        </div>
        <div class=\"receipt-title\">REÇU DE VENTE</div>
    </div>

    <div class=\"info-row\">
        <span class=\"info-label\">N° Commande:</span>
        <span>";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 168, $this->source); })()), "orderNumber", [], "any", false, false, false, 168), "html", null, true);
        yield "</span>
    </div>
    <div class=\"info-row\">
        <span class=\"info-label\">Date:</span>
        <span>";
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 172, $this->source); })()), "createdAt", [], "any", false, false, false, 172), "d/m/Y H:i:s"), "html", null, true);
        yield "</span>
    </div>
    <div class=\"info-row\">
        <span class=\"info-label\">Caissier:</span>
        <span>";
        // line 176
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "user", [], "any", false, true, false, 176), "fullName", [], "any", true, true, false, 176) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 176, $this->source); })()), "user", [], "any", false, false, false, 176), "fullName", [], "any", false, false, false, 176)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 176, $this->source); })()), "user", [], "any", false, false, false, 176), "fullName", [], "any", false, false, false, 176), "html", null, true)) : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "user", [], "any", false, true, false, 176), "email", [], "any", true, true, false, 176) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 176, $this->source); })()), "user", [], "any", false, false, false, 176), "email", [], "any", false, false, false, 176)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 176, $this->source); })()), "user", [], "any", false, false, false, 176), "email", [], "any", false, false, false, 176), "html", null, true)) : ("N/A"))));
        yield "</span>
    </div>
    ";
        // line 178
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 178, $this->source); })()), "customerName", [], "any", false, false, false, 178)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 179
            yield "    <div class=\"info-row\">
        <span class=\"info-label\">Client:</span>
        <span>";
            // line 181
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 181, $this->source); })()), "customerName", [], "any", false, false, false, 181), "html", null, true);
            yield "</span>
    </div>
    ";
        }
        // line 184
        yield "    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 184, $this->source); })()), "customerPhone", [], "any", false, false, false, 184)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 185
            yield "    <div class=\"info-row\">
        <span class=\"info-label\">Téléphone:</span>
        <span>";
            // line 187
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 187, $this->source); })()), "customerPhone", [], "any", false, false, false, 187), "html", null, true);
            yield "</span>
    </div>
    ";
        }
        // line 190
        yield "
    <div class=\"divider\"></div>

    <table class=\"items-table\">
        <thead>
            <tr>
                <th>Désignation</th>
                <th class=\"item-quantity\">Qté</th>
                <th class=\"item-price\">Prix</th>
                <th class=\"item-price\">Total</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 203
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 203, $this->source); })()), "orderItems", [], "any", false, false, false, 203));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 204
            yield "            <tr>
                <td class=\"item-name\">";
            // line 205
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "productName", [], "any", false, false, false, 205), "html", null, true);
            yield "</td>
                <td class=\"item-quantity\">";
            // line 206
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 206), "html", null, true);
            yield "</td>
                <td class=\"item-price\">";
            // line 207
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 207), 0, ",", " "), "html", null, true);
            yield "</td>
                <td class=\"item-price\">";
            // line 208
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "totalPrice", [], "any", false, false, false, 208), 0, ",", " "), "html", null, true);
            yield "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        yield "        </tbody>
    </table>

    <div class=\"divider\"></div>

    <div class=\"totals\">
        <div class=\"total-row\">
            <span>Total TTC:</span>
            <span class=\"total-amount\">";
        // line 219
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 219, $this->source); })()), "totalAmount", [], "any", false, false, false, 219), 0, ",", " "), "html", null, true);
        yield " FCFA</span>
        </div>
        <div class=\"total-row\">
            <span>Montant payé:</span>
            <span>";
        // line 223
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 223, $this->source); })()), "amountPaid", [], "any", false, false, false, 223), 0, ",", " "), "html", null, true);
        yield " FCFA</span>
        </div>
        <div class=\"total-row\">
            <span>Monnaie rendue:</span>
            <span>";
        // line 227
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 227, $this->source); })()), "changeAmount", [], "any", false, false, false, 227), 0, ",", " "), "html", null, true);
        yield " FCFA</span>
        </div>
    </div>

    <div class=\"divider\"></div>

    <div class=\"info-row\">
        <span class=\"info-label\">Mode de paiement:</span>
        <span>
            ";
        // line 236
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 236, $this->source); })()), "paymentMethod", [], "any", false, false, false, 236) == "cash")) {
            yield "💰 Espèces
            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 237
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 237, $this->source); })()), "paymentMethod", [], "any", false, false, false, 237) == "card")) {
            yield "💳 Carte bancaire
            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 238
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 238, $this->source); })()), "paymentMethod", [], "any", false, false, false, 238) == "mobile_money")) {
            yield "📱 Mobile Money
            ";
        } else {
            // line 239
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 239, $this->source); })()), "paymentMethod", [], "any", false, false, false, 239), "html", null, true);
            yield "
            ";
        }
        // line 241
        yield "        </span>
    </div>

    ";
        // line 244
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 244, $this->source); })()), "notes", [], "any", false, false, false, 244)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 245
            yield "    <div class=\"info-row\">
        <span class=\"info-label\">Notes:</span>
        <span>";
            // line 247
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 247, $this->source); })()), "notes", [], "any", false, false, false, 247), "html", null, true);
            yield "</span>
    </div>
    ";
        }
        // line 250
        yield "
    <div class=\"thanks\">
        Merci de votre visite !<br>
        À bientôt
    </div>

    <div class=\"footer\">
        Ce document fait office de reçu<br>
        ";
        // line 258
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d H:i:s"), "html", null, true);
        yield "
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
        return "sale/orders/receipt_content.html.twig";
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
        return array (  409 => 258,  399 => 250,  393 => 247,  389 => 245,  387 => 244,  382 => 241,  377 => 239,  372 => 238,  368 => 237,  364 => 236,  352 => 227,  345 => 223,  338 => 219,  328 => 211,  319 => 208,  315 => 207,  311 => 206,  307 => 205,  304 => 204,  300 => 203,  285 => 190,  279 => 187,  275 => 185,  272 => 184,  266 => 181,  262 => 179,  260 => 178,  255 => 176,  248 => 172,  241 => 168,  233 => 162,  227 => 160,  224 => 159,  218 => 157,  215 => 156,  209 => 154,  207 => 153,  202 => 151,  54 => 6,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/sale/orders/receipt_content.html.twig #}
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Reçu de vente - {{ order.orderNumber }}</title>
    <style>
        /* Styles pour papier reçu 80mm */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Courier New', 'Courier', monospace;
            font-size: 12px;
            line-height: 1.3;
            color: #000;
            background: white;
            padding: 8px;
            width: 80mm;
            margin: 0 auto;
        }
        
        /* En-tête */
        .header {
            text-align: center;
            border-bottom: 1px dashed #000;
            padding-bottom: 8px;
            margin-bottom: 8px;
        }
        
        .company-name {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 4px;
        }
        
        .company-info {
            font-size: 10px;
            color: #555;
        }
        
        .receipt-title {
            font-size: 14px;
            font-weight: bold;
            margin: 8px 0;
        }
        
        /* Informations vente */
        .info-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 4px;
        }
        
        .info-label {
            font-weight: bold;
        }
        
        /* Tableau des articles */
        .items-table {
            width: 100%;
            border-collapse: collapse;
            margin: 8px 0;
        }
        
        .items-table th {
            text-align: left;
            border-bottom: 1px dashed #000;
            padding-bottom: 4px;
            margin-bottom: 4px;
            font-size: 11px;
        }
        
        .items-table td {
            padding: 4px 0;
            vertical-align: top;
        }
        
        .item-name {
            font-size: 11px;
        }
        
        .item-quantity {
            text-align: center;
            width: 40px;
        }
        
        .item-price {
            text-align: right;
            width: 60px;
        }
        
        /* Totaux */
        .totals {
            border-top: 1px dashed #000;
            padding-top: 8px;
            margin-top: 8px;
        }
        
        .total-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 4px;
        }
        
        .total-amount {
            font-size: 14px;
            font-weight: bold;
        }
        
        /* Pied de page */
        .footer {
            text-align: center;
            border-top: 1px dashed #000;
            padding-top: 8px;
            margin-top: 8px;
            font-size: 10px;
            color: #555;
        }
        
        /* Diviseurs */
        .divider {
            border-top: 1px dotted #ccc;
            margin: 8px 0;
        }
        
        /* Message remerciement */
        .thanks {
            text-align: center;
            font-size: 11px;
            font-weight: bold;
            margin: 8px 0;
        }
        
        @media print {
            body {
                padding: 0;
                margin: 0;
            }
            .no-print {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <div class=\"company-name\">{{ company.name ?? company.companyName ?? 'Votre Entreprise' }}</div>
        <div class=\"company-info\">
            {% if company.address %}
                {{ company.address }}<br>
            {% endif %}
            {% if company.phone %}
                Tél: {{ company.phone }}<br>
            {% endif %}
            {% if company.email %}
                Email: {{ company.email }}
            {% endif %}
        </div>
        <div class=\"receipt-title\">REÇU DE VENTE</div>
    </div>

    <div class=\"info-row\">
        <span class=\"info-label\">N° Commande:</span>
        <span>{{ order.orderNumber }}</span>
    </div>
    <div class=\"info-row\">
        <span class=\"info-label\">Date:</span>
        <span>{{ order.createdAt|date('d/m/Y H:i:s') }}</span>
    </div>
    <div class=\"info-row\">
        <span class=\"info-label\">Caissier:</span>
        <span>{{ order.user.fullName ?? order.user.email ?? 'N/A' }}</span>
    </div>
    {% if order.customerName %}
    <div class=\"info-row\">
        <span class=\"info-label\">Client:</span>
        <span>{{ order.customerName }}</span>
    </div>
    {% endif %}
    {% if order.customerPhone %}
    <div class=\"info-row\">
        <span class=\"info-label\">Téléphone:</span>
        <span>{{ order.customerPhone }}</span>
    </div>
    {% endif %}

    <div class=\"divider\"></div>

    <table class=\"items-table\">
        <thead>
            <tr>
                <th>Désignation</th>
                <th class=\"item-quantity\">Qté</th>
                <th class=\"item-price\">Prix</th>
                <th class=\"item-price\">Total</th>
            </tr>
        </thead>
        <tbody>
            {% for item in order.orderItems %}
            <tr>
                <td class=\"item-name\">{{ item.productName }}</td>
                <td class=\"item-quantity\">{{ item.quantity }}</td>
                <td class=\"item-price\">{{ item.unitPrice|number_format(0, ',', ' ') }}</td>
                <td class=\"item-price\">{{ item.totalPrice|number_format(0, ',', ' ') }}</td>
            </tr>
            {% endfor %}
        </tbody>
    </table>

    <div class=\"divider\"></div>

    <div class=\"totals\">
        <div class=\"total-row\">
            <span>Total TTC:</span>
            <span class=\"total-amount\">{{ order.totalAmount|number_format(0, ',', ' ') }} FCFA</span>
        </div>
        <div class=\"total-row\">
            <span>Montant payé:</span>
            <span>{{ order.amountPaid|number_format(0, ',', ' ') }} FCFA</span>
        </div>
        <div class=\"total-row\">
            <span>Monnaie rendue:</span>
            <span>{{ order.changeAmount|number_format(0, ',', ' ') }} FCFA</span>
        </div>
    </div>

    <div class=\"divider\"></div>

    <div class=\"info-row\">
        <span class=\"info-label\">Mode de paiement:</span>
        <span>
            {% if order.paymentMethod == 'cash' %}💰 Espèces
            {% elseif order.paymentMethod == 'card' %}💳 Carte bancaire
            {% elseif order.paymentMethod == 'mobile_money' %}📱 Mobile Money
            {% else %}{{ order.paymentMethod }}
            {% endif %}
        </span>
    </div>

    {% if order.notes %}
    <div class=\"info-row\">
        <span class=\"info-label\">Notes:</span>
        <span>{{ order.notes }}</span>
    </div>
    {% endif %}

    <div class=\"thanks\">
        Merci de votre visite !<br>
        À bientôt
    </div>

    <div class=\"footer\">
        Ce document fait office de reçu<br>
        {{ 'now'|date('Y-m-d H:i:s') }}
    </div>
</body>
</html>", "sale/orders/receipt_content.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\sale\\orders\\receipt_content.html.twig");
    }
}
