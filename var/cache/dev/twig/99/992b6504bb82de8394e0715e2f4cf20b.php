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
class __TwigTemplate_6e63427db791eaaa750884fbd30c9f3e extends Template
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
            font-size: 11px;
            line-height: 1.2;
            color: #000;
            background: white;
            padding: 6px;
            width: 80mm;
            margin: 0 auto;
        }
        
        /* Éviter les sauts de page */
        .header, .items-table, .totals, .footer, .thanks {
            page-break-inside: avoid;
            break-inside: avoid;
        }
        
        /* En-tête */
        .header {
            text-align: center;
            border-bottom: 1px dashed #000;
            padding-bottom: 6px;
            margin-bottom: 6px;
        }
        
        .company-name {
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 3px;
        }
        
        .company-info {
            font-size: 9px;
            color: #555;
        }
        
        .receipt-title {
            font-size: 12px;
            font-weight: bold;
            margin: 6px 0;
        }
        
        /* Informations vente */
        .info-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 3px;
            font-size: 10px;
        }
        
        .info-label {
            font-weight: bold;
        }
        
        /* Tableau des articles */
        .items-table {
            width: 100%;
            border-collapse: collapse;
            margin: 6px 0;
        }
        
        .items-table th {
            text-align: left;
            border-bottom: 1px dashed #000;
            padding-bottom: 3px;
            font-size: 10px;
        }
        
        .items-table td {
            padding: 3px 0;
            vertical-align: top;
            font-size: 10px;
        }
        
        .item-name {
            font-size: 10px;
        }
        
        .item-quantity {
            text-align: center;
            width: 35px;
        }
        
        .item-price {
            text-align: right;
            width: 55px;
        }
        
        /* Totaux */
        .totals {
            border-top: 1px dashed #000;
            padding-top: 6px;
            margin-top: 6px;
        }
        
        .total-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 3px;
            font-size: 11px;
        }
        
        .total-amount {
            font-size: 12px;
            font-weight: bold;
        }
        
        /* Pied de page */
        .footer {
            text-align: center;
            border-top: 1px dashed #000;
            padding-top: 6px;
            margin-top: 6px;
            font-size: 9px;
            color: #555;
        }
        
        /* Diviseurs */
        .divider {
            border-top: 1px dotted #ccc;
            margin: 6px 0;
        }
        
        /* Message remerciement */
        .thanks {
            text-align: center;
            font-size: 10px;
            font-weight: bold;
            margin: 6px 0;
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
        // line 159
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "name", [], "any", true, true, false, 159) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 159, $this->source); })()), "name", [], "any", false, false, false, 159)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 159, $this->source); })()), "name", [], "any", false, false, false, 159), "html", null, true)) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "companyName", [], "any", true, true, false, 159) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 159, $this->source); })()), "companyName", [], "any", false, false, false, 159)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 159, $this->source); })()), "companyName", [], "any", false, false, false, 159), "html", null, true)) : ("Votre Entreprise"))));
        yield "</div>
        <div class=\"company-info\">
            ";
        // line 161
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 161, $this->source); })()), "address", [], "any", false, false, false, 161)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 162
            yield "                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 162, $this->source); })()), "address", [], "any", false, false, false, 162), "html", null, true);
            yield "<br>
            ";
        }
        // line 164
        yield "            ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 164, $this->source); })()), "phone", [], "any", false, false, false, 164)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 165
            yield "                Tél: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 165, $this->source); })()), "phone", [], "any", false, false, false, 165), "html", null, true);
            yield "<br>
            ";
        }
        // line 167
        yield "            ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 167, $this->source); })()), "email", [], "any", false, false, false, 167)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 168
            yield "                Email: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 168, $this->source); })()), "email", [], "any", false, false, false, 168), "html", null, true);
            yield "
            ";
        }
        // line 170
        yield "        </div>
        <div class=\"receipt-title\">REÇU DE VENTE</div>
    </div>

    <div class=\"info-row\">
        <span class=\"info-label\">N° Commande:</span>
        <span>";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 176, $this->source); })()), "orderNumber", [], "any", false, false, false, 176), "html", null, true);
        yield "</span>
    </div>
    <div class=\"info-row\">
        <span class=\"info-label\">Date:</span>
        <span>";
        // line 180
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 180, $this->source); })()), "createdAt", [], "any", false, false, false, 180), "d/m/Y H:i"), "html", null, true);
        yield "</span>
    </div>
    <div class=\"info-row\">
        <span class=\"info-label\">Caissier:</span>
        <span>";
        // line 184
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "user", [], "any", false, true, false, 184), "fullName", [], "any", true, true, false, 184) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 184, $this->source); })()), "user", [], "any", false, false, false, 184), "fullName", [], "any", false, false, false, 184)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 184, $this->source); })()), "user", [], "any", false, false, false, 184), "fullName", [], "any", false, false, false, 184), "html", null, true)) : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "user", [], "any", false, true, false, 184), "email", [], "any", true, true, false, 184) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 184, $this->source); })()), "user", [], "any", false, false, false, 184), "email", [], "any", false, false, false, 184)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 184, $this->source); })()), "user", [], "any", false, false, false, 184), "email", [], "any", false, false, false, 184), "html", null, true)) : ("N/A"))));
        yield "</span>
    </div>
    ";
        // line 186
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 186, $this->source); })()), "customerName", [], "any", false, false, false, 186)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 187
            yield "    <div class=\"info-row\">
        <span class=\"info-label\">Client:</span>
        <span>";
            // line 189
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 189, $this->source); })()), "customerName", [], "any", false, false, false, 189), "html", null, true);
            yield "</span>
    </div>
    ";
        }
        // line 192
        yield "    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 192, $this->source); })()), "customerPhone", [], "any", false, false, false, 192)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 193
            yield "    <div class=\"info-row\">
        <span class=\"info-label\">Téléphone:</span>
        <span>";
            // line 195
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 195, $this->source); })()), "customerPhone", [], "any", false, false, false, 195), "html", null, true);
            yield "</span>
    </div>
    ";
        }
        // line 198
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
        // line 211
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 211, $this->source); })()), "orderItems", [], "any", false, false, false, 211));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 212
            yield "            <tr>
                <td class=\"item-name\">";
            // line 213
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "productName", [], "any", false, false, false, 213), 0, 25), "html", null, true);
            yield "</td>
                <td class=\"item-quantity\">";
            // line 214
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 214), "html", null, true);
            yield "</td>
                <td class=\"item-price\">";
            // line 215
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 215), 0, ",", " "), "html", null, true);
            yield "</td>
                <td class=\"item-price\">";
            // line 216
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "totalPrice", [], "any", false, false, false, 216), 0, ",", " "), "html", null, true);
            yield "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 219
        yield "        </tbody>
    </table>

    <div class=\"divider\"></div>

    <div class=\"totals\">
        <div class=\"total-row\">
            <span>Total TTC:</span>
            <span class=\"total-amount\">";
        // line 227
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 227, $this->source); })()), "totalAmount", [], "any", false, false, false, 227), 0, ",", " "), "html", null, true);
        yield " FCFA</span>
        </div>
        <div class=\"total-row\">
            <span>Montant payé:</span>
            <span>";
        // line 231
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 231, $this->source); })()), "amountPaid", [], "any", false, false, false, 231), 0, ",", " "), "html", null, true);
        yield " FCFA</span>
        </div>
        <div class=\"total-row\">
            <span>Monnaie rendue:</span>
            <span>";
        // line 235
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 235, $this->source); })()), "changeAmount", [], "any", false, false, false, 235), 0, ",", " "), "html", null, true);
        yield " FCFA</span>
        </div>
    </div>

    <div class=\"divider\"></div>

    <div class=\"info-row\">
        <span class=\"info-label\">Mode de paiement:</span>
        <span>
            ";
        // line 244
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 244, $this->source); })()), "paymentMethod", [], "any", false, false, false, 244) == "cash")) {
            yield "💰 Espèces
            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 245
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 245, $this->source); })()), "paymentMethod", [], "any", false, false, false, 245) == "card")) {
            yield "💳 Carte bancaire
            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 246
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 246, $this->source); })()), "paymentMethod", [], "any", false, false, false, 246) == "mobile_money")) {
            yield "📱 Mobile Money
            ";
        } else {
            // line 247
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 247, $this->source); })()), "paymentMethod", [], "any", false, false, false, 247), "html", null, true);
            yield "
            ";
        }
        // line 249
        yield "        </span>
    </div>

    ";
        // line 252
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 252, $this->source); })()), "notes", [], "any", false, false, false, 252)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 253
            yield "    <div class=\"info-row\">
        <span class=\"info-label\">Notes:</span>
        <span>";
            // line 255
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 255, $this->source); })()), "notes", [], "any", false, false, false, 255), 0, 50), "html", null, true);
            yield "</span>
    </div>
    ";
        }
        // line 258
        yield "
    <div class=\"thanks\">
        Merci de votre visite !<br>
        À bientôt
    </div>

    <div class=\"footer\">
        ";
        // line 265
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y H:i"), "html", null, true);
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
        return array (  416 => 265,  407 => 258,  401 => 255,  397 => 253,  395 => 252,  390 => 249,  385 => 247,  380 => 246,  376 => 245,  372 => 244,  360 => 235,  353 => 231,  346 => 227,  336 => 219,  327 => 216,  323 => 215,  319 => 214,  315 => 213,  312 => 212,  308 => 211,  293 => 198,  287 => 195,  283 => 193,  280 => 192,  274 => 189,  270 => 187,  268 => 186,  263 => 184,  256 => 180,  249 => 176,  241 => 170,  235 => 168,  232 => 167,  226 => 165,  223 => 164,  217 => 162,  215 => 161,  210 => 159,  54 => 6,  48 => 2,);
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
            font-size: 11px;
            line-height: 1.2;
            color: #000;
            background: white;
            padding: 6px;
            width: 80mm;
            margin: 0 auto;
        }
        
        /* Éviter les sauts de page */
        .header, .items-table, .totals, .footer, .thanks {
            page-break-inside: avoid;
            break-inside: avoid;
        }
        
        /* En-tête */
        .header {
            text-align: center;
            border-bottom: 1px dashed #000;
            padding-bottom: 6px;
            margin-bottom: 6px;
        }
        
        .company-name {
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 3px;
        }
        
        .company-info {
            font-size: 9px;
            color: #555;
        }
        
        .receipt-title {
            font-size: 12px;
            font-weight: bold;
            margin: 6px 0;
        }
        
        /* Informations vente */
        .info-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 3px;
            font-size: 10px;
        }
        
        .info-label {
            font-weight: bold;
        }
        
        /* Tableau des articles */
        .items-table {
            width: 100%;
            border-collapse: collapse;
            margin: 6px 0;
        }
        
        .items-table th {
            text-align: left;
            border-bottom: 1px dashed #000;
            padding-bottom: 3px;
            font-size: 10px;
        }
        
        .items-table td {
            padding: 3px 0;
            vertical-align: top;
            font-size: 10px;
        }
        
        .item-name {
            font-size: 10px;
        }
        
        .item-quantity {
            text-align: center;
            width: 35px;
        }
        
        .item-price {
            text-align: right;
            width: 55px;
        }
        
        /* Totaux */
        .totals {
            border-top: 1px dashed #000;
            padding-top: 6px;
            margin-top: 6px;
        }
        
        .total-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 3px;
            font-size: 11px;
        }
        
        .total-amount {
            font-size: 12px;
            font-weight: bold;
        }
        
        /* Pied de page */
        .footer {
            text-align: center;
            border-top: 1px dashed #000;
            padding-top: 6px;
            margin-top: 6px;
            font-size: 9px;
            color: #555;
        }
        
        /* Diviseurs */
        .divider {
            border-top: 1px dotted #ccc;
            margin: 6px 0;
        }
        
        /* Message remerciement */
        .thanks {
            text-align: center;
            font-size: 10px;
            font-weight: bold;
            margin: 6px 0;
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
        <span>{{ order.createdAt|date('d/m/Y H:i') }}</span>
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
                <td class=\"item-name\">{{ item.productName|slice(0, 25) }}</td>
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
        <span>{{ order.notes|slice(0, 50) }}</span>
    </div>
    {% endif %}

    <div class=\"thanks\">
        Merci de votre visite !<br>
        À bientôt
    </div>

    <div class=\"footer\">
        {{ 'now'|date('d/m/Y H:i') }}
    </div>
</body>
</html>", "sale/orders/receipt_content.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\sale\\orders\\receipt_content.html.twig");
    }
}
