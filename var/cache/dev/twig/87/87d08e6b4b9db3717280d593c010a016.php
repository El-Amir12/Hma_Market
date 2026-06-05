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

/* sale/orders/receipts_content.html.twig */
class __TwigTemplate_d1d3fd6b91910c7314fd859f0b66ade8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sale/orders/receipts_content.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sale/orders/receipts_content.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Reçus de vente</title>
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
        
        /* Chaque reçu commence sur une nouvelle page */
        .receipt {
            page-break-after: always;
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none;
        }
        
        /* Dernier reçu pas de saut de page */
        .receipt:last-child {
            page-break-after: auto;
        }
        
        /* Éviter les sauts de page à l'intérieur */
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
    ";
        // line 171
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 171, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 172
            yield "    <div class=\"receipt\">
        <div class=\"header\">
            <div class=\"company-name\">";
            // line 174
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "name", [], "any", true, true, false, 174) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 174, $this->source); })()), "name", [], "any", false, false, false, 174)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 174, $this->source); })()), "name", [], "any", false, false, false, 174), "html", null, true)) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "companyName", [], "any", true, true, false, 174) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 174, $this->source); })()), "companyName", [], "any", false, false, false, 174)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 174, $this->source); })()), "companyName", [], "any", false, false, false, 174), "html", null, true)) : ("Votre Entreprise"))));
            yield "</div>
            <div class=\"company-info\">
                ";
            // line 176
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 176, $this->source); })()), "address", [], "any", false, false, false, 176)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 177
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 177, $this->source); })()), "address", [], "any", false, false, false, 177), "html", null, true);
                yield "<br>
                ";
            }
            // line 179
            yield "                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 179, $this->source); })()), "phone", [], "any", false, false, false, 179)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 180
                yield "                    Tél: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 180, $this->source); })()), "phone", [], "any", false, false, false, 180), "html", null, true);
                yield "<br>
                ";
            }
            // line 182
            yield "                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 182, $this->source); })()), "email", [], "any", false, false, false, 182)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 183
                yield "                    Email: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 183, $this->source); })()), "email", [], "any", false, false, false, 183), "html", null, true);
                yield "
                ";
            }
            // line 185
            yield "            </div>
            <div class=\"receipt-title\">REÇU DE VENTE</div>
        </div>

        <div class=\"info-row\">
            <span class=\"info-label\">N° Commande:</span>
            <span>";
            // line 191
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orderNumber", [], "any", false, false, false, 191), "html", null, true);
            yield "</span>
        </div>
        <div class=\"info-row\">
            <span class=\"info-label\">Date:</span>
            <span>";
            // line 195
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "createdAt", [], "any", false, false, false, 195), "d/m/Y H:i"), "html", null, true);
            yield "</span>
        </div>
        <div class=\"info-row\">
            <span class=\"info-label\">Caissier:</span>
            <span>";
            // line 199
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "user", [], "any", false, true, false, 199), "fullName", [], "any", true, true, false, 199) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 199), "fullName", [], "any", false, false, false, 199)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 199), "fullName", [], "any", false, false, false, 199), "html", null, true)) : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "user", [], "any", false, true, false, 199), "email", [], "any", true, true, false, 199) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 199), "email", [], "any", false, false, false, 199)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 199), "email", [], "any", false, false, false, 199), "html", null, true)) : ("N/A"))));
            yield "</span>
        </div>
        ";
            // line 201
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["order"], "customerName", [], "any", false, false, false, 201)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 202
                yield "        <div class=\"info-row\">
            <span class=\"info-label\">Client:</span>
            <span>";
                // line 204
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "customerName", [], "any", false, false, false, 204), "html", null, true);
                yield "</span>
        </div>
        ";
            }
            // line 207
            yield "        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["order"], "customerPhone", [], "any", false, false, false, 207)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 208
                yield "        <div class=\"info-row\">
            <span class=\"info-label\">Téléphone:</span>
            <span>";
                // line 210
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "customerPhone", [], "any", false, false, false, 210), "html", null, true);
                yield "</span>
        </div>
        ";
            }
            // line 213
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
            // line 226
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "orderItems", [], "any", false, false, false, 226));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 227
                yield "                <tr>
                    <td class=\"item-name\">";
                // line 228
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "productName", [], "any", false, false, false, 228), 0, 25), "html", null, true);
                yield "</td>
                    <td class=\"item-quantity\">";
                // line 229
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 229), "html", null, true);
                yield "</td>
                    <td class=\"item-price\">";
                // line 230
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 230), 0, ",", " "), "html", null, true);
                yield "</td>
                    <td class=\"item-price\">";
                // line 231
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "totalPrice", [], "any", false, false, false, 231), 0, ",", " "), "html", null, true);
                yield "</td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 234
            yield "            </tbody>
        </table>

        <div class=\"divider\"></div>

        <div class=\"totals\">
            <div class=\"total-row\">
                <span>Total TTC:</span>
                <span class=\"total-amount\">";
            // line 242
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "totalAmount", [], "any", false, false, false, 242), 0, ",", " "), "html", null, true);
            yield " FCFA</span>
            </div>
            <div class=\"total-row\">
                <span>Montant payé:</span>
                <span>";
            // line 246
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "amountPaid", [], "any", false, false, false, 246), 0, ",", " "), "html", null, true);
            yield " FCFA</span>
            </div>
            <div class=\"total-row\">
                <span>Monnaie rendue:</span>
                <span>";
            // line 250
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "changeAmount", [], "any", false, false, false, 250), 0, ",", " "), "html", null, true);
            yield " FCFA</span>
            </div>
        </div>

        <div class=\"divider\"></div>

        <div class=\"info-row\">
            <span class=\"info-label\">Mode de paiement:</span>
            <span>
                ";
            // line 259
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "paymentMethod", [], "any", false, false, false, 259) == "cash")) {
                yield "💰 Espèces
                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 260
$context["order"], "paymentMethod", [], "any", false, false, false, 260) == "card")) {
                yield "💳 Carte bancaire
                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 261
$context["order"], "paymentMethod", [], "any", false, false, false, 261) == "mobile_money")) {
                yield "📱 Mobile Money
                ";
            } else {
                // line 262
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "paymentMethod", [], "any", false, false, false, 262), "html", null, true);
                yield "
                ";
            }
            // line 264
            yield "            </span>
        </div>

        ";
            // line 267
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["order"], "notes", [], "any", false, false, false, 267)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 268
                yield "        <div class=\"info-row\">
            <span class=\"info-label\">Notes:</span>
            <span>";
                // line 270
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["order"], "notes", [], "any", false, false, false, 270), 0, 50), "html", null, true);
                yield "</span>
        </div>
        ";
            }
            // line 273
            yield "
        <div class=\"thanks\">
            Merci de votre visite !<br>
            À bientôt
        </div>

        <div class=\"footer\">
            ";
            // line 280
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y H:i"), "html", null, true);
            yield "
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 284
        yield "</body>
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
        return "sale/orders/receipts_content.html.twig";
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
        return array (  443 => 284,  433 => 280,  424 => 273,  418 => 270,  414 => 268,  412 => 267,  407 => 264,  402 => 262,  397 => 261,  393 => 260,  389 => 259,  377 => 250,  370 => 246,  363 => 242,  353 => 234,  344 => 231,  340 => 230,  336 => 229,  332 => 228,  329 => 227,  325 => 226,  310 => 213,  304 => 210,  300 => 208,  297 => 207,  291 => 204,  287 => 202,  285 => 201,  280 => 199,  273 => 195,  266 => 191,  258 => 185,  252 => 183,  249 => 182,  243 => 180,  240 => 179,  234 => 177,  232 => 176,  227 => 174,  223 => 172,  219 => 171,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/sale/orders/receipts_content.html.twig #}
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Reçus de vente</title>
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
        
        /* Chaque reçu commence sur une nouvelle page */
        .receipt {
            page-break-after: always;
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none;
        }
        
        /* Dernier reçu pas de saut de page */
        .receipt:last-child {
            page-break-after: auto;
        }
        
        /* Éviter les sauts de page à l'intérieur */
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
    {% for order in orders %}
    <div class=\"receipt\">
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
    </div>
    {% endfor %}
</body>
</html>", "sale/orders/receipts_content.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\sale\\orders\\receipts_content.html.twig");
    }
}
