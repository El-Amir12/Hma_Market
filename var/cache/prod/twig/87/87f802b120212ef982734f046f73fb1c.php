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
class __TwigTemplate_fe2b62a861348f77c7cf7c6a252c613a extends Template
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
        // line 2
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Reçu de vente - ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "orderNumber", [], "any", false, false, false, 6), "html", null, true);
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
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "name", [], "any", true, true, false, 159) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "name", [], "any", false, false, false, 159)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "name", [], "any", false, false, false, 159), "html", null, true)) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "companyName", [], "any", true, true, false, 159) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "companyName", [], "any", false, false, false, 159)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "companyName", [], "any", false, false, false, 159), "html", null, true)) : ("Votre Entreprise"))));
        yield "</div>
        <div class=\"company-info\">
            ";
        // line 161
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "address", [], "any", false, false, false, 161)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 162
            yield "                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "address", [], "any", false, false, false, 162), "html", null, true);
            yield "<br>
            ";
        }
        // line 164
        yield "            ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "phone", [], "any", false, false, false, 164)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 165
            yield "                Tél: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "phone", [], "any", false, false, false, 165), "html", null, true);
            yield "<br>
            ";
        }
        // line 167
        yield "            ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "email", [], "any", false, false, false, 167)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 168
            yield "                Email: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "email", [], "any", false, false, false, 168), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "orderNumber", [], "any", false, false, false, 176), "html", null, true);
        yield "</span>
    </div>
    <div class=\"info-row\">
        <span class=\"info-label\">Date:</span>
        <span>";
        // line 180
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "createdAt", [], "any", false, false, false, 180), "d/m/Y H:i"), "html", null, true);
        yield "</span>
    </div>
    <div class=\"info-row\">
        <span class=\"info-label\">Caissier:</span>
        <span>";
        // line 184
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "user", [], "any", false, true, false, 184), "fullName", [], "any", true, true, false, 184) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "user", [], "any", false, false, false, 184), "fullName", [], "any", false, false, false, 184)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "user", [], "any", false, false, false, 184), "fullName", [], "any", false, false, false, 184), "html", null, true)) : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "user", [], "any", false, true, false, 184), "email", [], "any", true, true, false, 184) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "user", [], "any", false, false, false, 184), "email", [], "any", false, false, false, 184)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "user", [], "any", false, false, false, 184), "email", [], "any", false, false, false, 184), "html", null, true)) : ("N/A"))));
        yield "</span>
    </div>
    ";
        // line 186
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "customerName", [], "any", false, false, false, 186)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 187
            yield "    <div class=\"info-row\">
        <span class=\"info-label\">Client:</span>
        <span>";
            // line 189
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "customerName", [], "any", false, false, false, 189), "html", null, true);
            yield "</span>
    </div>
    ";
        }
        // line 192
        yield "    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "customerPhone", [], "any", false, false, false, 192)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 193
            yield "    <div class=\"info-row\">
        <span class=\"info-label\">Téléphone:</span>
        <span>";
            // line 195
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "customerPhone", [], "any", false, false, false, 195), "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "orderItems", [], "any", false, false, false, 211));
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "totalAmount", [], "any", false, false, false, 227), 0, ",", " "), "html", null, true);
        yield " FCFA</span>
        </div>
        <div class=\"total-row\">
            <span>Montant payé:</span>
            <span>";
        // line 231
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "amountPaid", [], "any", false, false, false, 231), 0, ",", " "), "html", null, true);
        yield " FCFA</span>
        </div>
        <div class=\"total-row\">
            <span>Monnaie rendue:</span>
            <span>";
        // line 235
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "changeAmount", [], "any", false, false, false, 235), 0, ",", " "), "html", null, true);
        yield " FCFA</span>
        </div>
    </div>

    <div class=\"divider\"></div>

    <div class=\"info-row\">
        <span class=\"info-label\">Mode de paiement:</span>
        <span>
            ";
        // line 244
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "paymentMethod", [], "any", false, false, false, 244) == "cash")) {
            yield "💰 Espèces
            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 245
($context["order"] ?? null), "paymentMethod", [], "any", false, false, false, 245) == "card")) {
            yield "💳 Carte bancaire
            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 246
($context["order"] ?? null), "paymentMethod", [], "any", false, false, false, 246) == "mobile_money")) {
            yield "📱 Mobile Money
            ";
        } else {
            // line 247
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "paymentMethod", [], "any", false, false, false, 247), "html", null, true);
            yield "
            ";
        }
        // line 249
        yield "        </span>
    </div>

    ";
        // line 252
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "notes", [], "any", false, false, false, 252)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 253
            yield "    <div class=\"info-row\">
        <span class=\"info-label\">Notes:</span>
        <span>";
            // line 255
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["order"] ?? null), "notes", [], "any", false, false, false, 255), 0, 50), "html", null, true);
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
        return array (  410 => 265,  401 => 258,  395 => 255,  391 => 253,  389 => 252,  384 => 249,  379 => 247,  374 => 246,  370 => 245,  366 => 244,  354 => 235,  347 => 231,  340 => 227,  330 => 219,  321 => 216,  317 => 215,  313 => 214,  309 => 213,  306 => 212,  302 => 211,  287 => 198,  281 => 195,  277 => 193,  274 => 192,  268 => 189,  264 => 187,  262 => 186,  257 => 184,  250 => 180,  243 => 176,  235 => 170,  229 => 168,  226 => 167,  220 => 165,  217 => 164,  211 => 162,  209 => 161,  204 => 159,  48 => 6,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "sale/orders/receipt_content.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\sale\\orders\\receipt_content.html.twig");
    }
}
