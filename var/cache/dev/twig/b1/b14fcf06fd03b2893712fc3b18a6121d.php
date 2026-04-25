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

/* return/receipt_pdf.html.twig */
class __TwigTemplate_abe908854fc29f7249138df88bd8d7ac extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "return/receipt_pdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "return/receipt_pdf.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Reçu de retour - ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 6, $this->source); })()), "returnNumber", [], "any", false, false, false, 6), "html", null, true);
        yield "</title>
    <style>
        body {
            font-family: 'Arial', 'Helvetica', sans-serif;
            margin: 15px;
            font-size: 11px;
        }
        .header {
            text-align: center;
            border-bottom: 2px solid #2E86C1;
            padding-bottom: 10px;
            margin-bottom: 15px;
        }
        .header h1 {
            color: #2E86C1;
            font-size: 16px;
            margin: 0 0 5px 0;
        }
        .header p {
            margin: 0;
            color: #666;
            font-size: 10px;
        }
        .info-section {
            margin-bottom: 15px;
            padding: 8px;
            background: #f8f9fa;
            border-radius: 5px;
        }
        .info-row {
            display: flex;
            margin-bottom: 5px;
        }
        .info-label {
            font-weight: bold;
            width: 100px;
        }
        .info-value {
            flex: 1;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 10px 0;
        }
        th {
            background: #2E86C1;
            color: white;
            padding: 8px;
            text-align: left;
            font-size: 10px;
        }
        td {
            border: 1px solid #ddd;
            padding: 6px;
            font-size: 10px;
        }
        .total {
            text-align: right;
            font-weight: bold;
            margin-top: 10px;
            padding-top: 10px;
            border-top: 2px solid #ddd;
        }
        .footer {
            margin-top: 20px;
            text-align: center;
            font-size: 9px;
            color: #666;
            border-top: 1px solid #ddd;
            padding-top: 10px;
        }
        .status-pending { color: #d97706; font-weight: bold; }
        .status-approved { color: #2563eb; font-weight: bold; }
        .status-completed { color: #16a34a; font-weight: bold; }
        .status-rejected { color: #dc2626; font-weight: bold; }
        .badge {
            display: inline-block;
            padding: 2px 6px;
            border-radius: 4px;
            font-size: 9px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <h1>REÇU DE RETOUR</h1>
        <p>";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 94, $this->source); })()), "companyName", [], "any", false, false, false, 94), "html", null, true);
        yield "</p>
        <p>Tél: ";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 95, $this->source); })()), "phone", [], "any", false, false, false, 95), "html", null, true);
        yield " | Email: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 95, $this->source); })()), "email", [], "any", false, false, false, 95), "html", null, true);
        yield "</p>
    </div>

    <div class=\"info-section\">
        <div class=\"info-row\">
            <div class=\"info-label\">N° Retour :</div>
            <div class=\"info-value\"><strong>";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 101, $this->source); })()), "returnNumber", [], "any", false, false, false, 101), "html", null, true);
        yield "</strong></div>
        </div>
        <div class=\"info-row\">
            <div class=\"info-label\">N° Commande :</div>
            <div class=\"info-value\">";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 105, $this->source); })()), "orderNumber", [], "any", false, false, false, 105), "html", null, true);
        yield "</div>
        </div>
        <div class=\"info-row\">
            <div class=\"info-label\">Client :</div>
            <div class=\"info-value\">";
        // line 109
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 109, $this->source); })()), "customerName", [], "any", false, false, false, 109)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 109, $this->source); })()), "customerName", [], "any", false, false, false, 109), "html", null, true)) : ("Non renseigné"));
        yield " (";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 109, $this->source); })()), "customerPhone", [], "any", false, false, false, 109), "html", null, true);
        yield ")</div>
        </div>
        <div class=\"info-row\">
            <div class=\"info-label\">Date retour :</div>
            <div class=\"info-value\">";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 113, $this->source); })()), "createdAt", [], "any", false, false, false, 113), "d/m/Y H:i"), "html", null, true);
        yield "</div>
        </div>
        <div class=\"info-row\">
            <div class=\"info-label\">Statut :</div>
            <div class=\"info-value\">
                ";
        // line 118
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 118, $this->source); })()), "status", [], "any", false, false, false, 118) == "pending")) {
            // line 119
            yield "                    <span class=\"badge\" style=\"background:#fef3c7; color:#d97706;\">En attente</span>
                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 120
(isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 120, $this->source); })()), "status", [], "any", false, false, false, 120) == "approved")) {
            // line 121
            yield "                    <span class=\"badge\" style=\"background:#dbeafe; color:#2563eb;\">Approuvé</span>
                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 122
(isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 122, $this->source); })()), "status", [], "any", false, false, false, 122) == "completed")) {
            // line 123
            yield "                    <span class=\"badge\" style=\"background:#dcfce7; color:#16a34a;\">Remboursé</span>
                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 124
(isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 124, $this->source); })()), "status", [], "any", false, false, false, 124) == "rejected")) {
            // line 125
            yield "                    <span class=\"badge\" style=\"background:#fee2e2; color:#dc2626;\">Rejeté</span>
                ";
        }
        // line 127
        yield "            </div>
        </div>
        <div class=\"info-row\">
            <div class=\"info-label\">Motif :</div>
            <div class=\"info-value\">";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["reasons"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 131, $this->source); })()), "reason", [], "any", false, false, false, 131), [], "array", true, true, false, 131)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reasons"]) || array_key_exists("reasons", $context) ? $context["reasons"] : (function () { throw new RuntimeError('Variable "reasons" does not exist.', 131, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 131, $this->source); })()), "reason", [], "any", false, false, false, 131), [], "array", false, false, false, 131), CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 131, $this->source); })()), "reason", [], "any", false, false, false, 131))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 131, $this->source); })()), "reason", [], "any", false, false, false, 131))), "html", null, true);
        yield "</div>
        </div>
        ";
        // line 133
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 133, $this->source); })()), "reasonNotes", [], "any", false, false, false, 133)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 134
            yield "        <div class=\"info-row\">
            <div class=\"info-label\">Notes :</div>
            <div class=\"info-value\">";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 136, $this->source); })()), "reasonNotes", [], "any", false, false, false, 136), "html", null, true);
            yield "</div>
        </div>
        ";
        }
        // line 139
        yield "    </div>

    <table>
        <thead>
            <tr>
                <th>Produit</th>
                <th>Quantité</th>
                <th>Prix unitaire</th>
                <th>Total remboursé</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 151
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 151, $this->source); })()), "returnItems", [], "any", false, false, false, 151));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 152
            yield "            <tr>
                <td>";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "productName", [], "any", false, false, false, 153), "html", null, true);
            yield "</td>
                <td style=\"text-align: center;\">";
            // line 154
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantityReturned", [], "any", false, false, false, 154), "html", null, true);
            yield "</td>
                <td style=\"text-align: right;\">";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPriceAtSale", [], "any", false, false, false, 155), 0, ",", " "), "html", null, true);
            yield " FCFA</td>
                <td style=\"text-align: right;\"><strong>";
            // line 156
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "refundAmount", [], "any", false, false, false, 156), 0, ",", " "), "html", null, true);
            yield " FCFA</strong></td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        yield "        </tbody>
    </table>

    <div class=\"total\">
        <p>Total à rembourser : <strong>";
        // line 163
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 163, $this->source); })()), "totalRefundAmount", [], "any", false, false, false, 163), 0, ",", " "), "html", null, true);
        yield " FCFA</strong></p>
        <p>Mode de remboursement : 
            ";
        // line 165
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 165, $this->source); })()), "refundMethod", [], "any", false, false, false, 165) == "cash")) {
            yield "💰 Espèces
            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 166
(isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 166, $this->source); })()), "refundMethod", [], "any", false, false, false, 166) == "mobile_money")) {
            yield "📱 Mobile Money
            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 167
(isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 167, $this->source); })()), "refundMethod", [], "any", false, false, false, 167) == "bank_transfer")) {
            yield "🏦 Virement bancaire
            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 168
(isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 168, $this->source); })()), "refundMethod", [], "any", false, false, false, 168) == "wallet")) {
            yield "📱 Porte-monnaie électronique
            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 169
(isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 169, $this->source); })()), "refundMethod", [], "any", false, false, false, 169) == "credit_note")) {
            yield "📝 Avoir
            ";
        } else {
            // line 170
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["returnOrder"]) || array_key_exists("returnOrder", $context) ? $context["returnOrder"] : (function () { throw new RuntimeError('Variable "returnOrder" does not exist.', 170, $this->source); })()), "refundMethod", [], "any", false, false, false, 170), "html", null, true);
            yield "
            ";
        }
        // line 172
        yield "        </p>
    </div>

    <div class=\"footer\">
        Document généré le ";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["printDate"]) || array_key_exists("printDate", $context) ? $context["printDate"] : (function () { throw new RuntimeError('Variable "printDate" does not exist.', 176, $this->source); })()), "d/m/Y H:i"), "html", null, true);
        yield "<br>
        Merci de votre confiance !
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
        return "return/receipt_pdf.html.twig";
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
        return array (  320 => 176,  314 => 172,  309 => 170,  304 => 169,  300 => 168,  296 => 167,  292 => 166,  288 => 165,  283 => 163,  277 => 159,  268 => 156,  264 => 155,  260 => 154,  256 => 153,  253 => 152,  249 => 151,  235 => 139,  229 => 136,  225 => 134,  223 => 133,  218 => 131,  212 => 127,  208 => 125,  206 => 124,  203 => 123,  201 => 122,  198 => 121,  196 => 120,  193 => 119,  191 => 118,  183 => 113,  174 => 109,  167 => 105,  160 => 101,  149 => 95,  145 => 94,  54 => 6,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/return/receipt_pdf.html.twig #}
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Reçu de retour - {{ returnOrder.returnNumber }}</title>
    <style>
        body {
            font-family: 'Arial', 'Helvetica', sans-serif;
            margin: 15px;
            font-size: 11px;
        }
        .header {
            text-align: center;
            border-bottom: 2px solid #2E86C1;
            padding-bottom: 10px;
            margin-bottom: 15px;
        }
        .header h1 {
            color: #2E86C1;
            font-size: 16px;
            margin: 0 0 5px 0;
        }
        .header p {
            margin: 0;
            color: #666;
            font-size: 10px;
        }
        .info-section {
            margin-bottom: 15px;
            padding: 8px;
            background: #f8f9fa;
            border-radius: 5px;
        }
        .info-row {
            display: flex;
            margin-bottom: 5px;
        }
        .info-label {
            font-weight: bold;
            width: 100px;
        }
        .info-value {
            flex: 1;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 10px 0;
        }
        th {
            background: #2E86C1;
            color: white;
            padding: 8px;
            text-align: left;
            font-size: 10px;
        }
        td {
            border: 1px solid #ddd;
            padding: 6px;
            font-size: 10px;
        }
        .total {
            text-align: right;
            font-weight: bold;
            margin-top: 10px;
            padding-top: 10px;
            border-top: 2px solid #ddd;
        }
        .footer {
            margin-top: 20px;
            text-align: center;
            font-size: 9px;
            color: #666;
            border-top: 1px solid #ddd;
            padding-top: 10px;
        }
        .status-pending { color: #d97706; font-weight: bold; }
        .status-approved { color: #2563eb; font-weight: bold; }
        .status-completed { color: #16a34a; font-weight: bold; }
        .status-rejected { color: #dc2626; font-weight: bold; }
        .badge {
            display: inline-block;
            padding: 2px 6px;
            border-radius: 4px;
            font-size: 9px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <h1>REÇU DE RETOUR</h1>
        <p>{{ hmaService.companyName }}</p>
        <p>Tél: {{ hmaService.phone }} | Email: {{ hmaService.email }}</p>
    </div>

    <div class=\"info-section\">
        <div class=\"info-row\">
            <div class=\"info-label\">N° Retour :</div>
            <div class=\"info-value\"><strong>{{ returnOrder.returnNumber }}</strong></div>
        </div>
        <div class=\"info-row\">
            <div class=\"info-label\">N° Commande :</div>
            <div class=\"info-value\">{{ returnOrder.orderNumber }}</div>
        </div>
        <div class=\"info-row\">
            <div class=\"info-label\">Client :</div>
            <div class=\"info-value\">{{ returnOrder.customerName ?: 'Non renseigné' }} ({{ returnOrder.customerPhone }})</div>
        </div>
        <div class=\"info-row\">
            <div class=\"info-label\">Date retour :</div>
            <div class=\"info-value\">{{ returnOrder.createdAt|date('d/m/Y H:i') }}</div>
        </div>
        <div class=\"info-row\">
            <div class=\"info-label\">Statut :</div>
            <div class=\"info-value\">
                {% if returnOrder.status == 'pending' %}
                    <span class=\"badge\" style=\"background:#fef3c7; color:#d97706;\">En attente</span>
                {% elseif returnOrder.status == 'approved' %}
                    <span class=\"badge\" style=\"background:#dbeafe; color:#2563eb;\">Approuvé</span>
                {% elseif returnOrder.status == 'completed' %}
                    <span class=\"badge\" style=\"background:#dcfce7; color:#16a34a;\">Remboursé</span>
                {% elseif returnOrder.status == 'rejected' %}
                    <span class=\"badge\" style=\"background:#fee2e2; color:#dc2626;\">Rejeté</span>
                {% endif %}
            </div>
        </div>
        <div class=\"info-row\">
            <div class=\"info-label\">Motif :</div>
            <div class=\"info-value\">{{ reasons[returnOrder.reason]|default(returnOrder.reason) }}</div>
        </div>
        {% if returnOrder.reasonNotes %}
        <div class=\"info-row\">
            <div class=\"info-label\">Notes :</div>
            <div class=\"info-value\">{{ returnOrder.reasonNotes }}</div>
        </div>
        {% endif %}
    </div>

    <table>
        <thead>
            <tr>
                <th>Produit</th>
                <th>Quantité</th>
                <th>Prix unitaire</th>
                <th>Total remboursé</th>
            </tr>
        </thead>
        <tbody>
            {% for item in returnOrder.returnItems %}
            <tr>
                <td>{{ item.productName }}</td>
                <td style=\"text-align: center;\">{{ item.quantityReturned }}</td>
                <td style=\"text-align: right;\">{{ item.unitPriceAtSale|number_format(0, ',', ' ') }} FCFA</td>
                <td style=\"text-align: right;\"><strong>{{ item.refundAmount|number_format(0, ',', ' ') }} FCFA</strong></td>
            </tr>
            {% endfor %}
        </tbody>
    </table>

    <div class=\"total\">
        <p>Total à rembourser : <strong>{{ returnOrder.totalRefundAmount|number_format(0, ',', ' ') }} FCFA</strong></p>
        <p>Mode de remboursement : 
            {% if returnOrder.refundMethod == 'cash' %}💰 Espèces
            {% elseif returnOrder.refundMethod == 'mobile_money' %}📱 Mobile Money
            {% elseif returnOrder.refundMethod == 'bank_transfer' %}🏦 Virement bancaire
            {% elseif returnOrder.refundMethod == 'wallet' %}📱 Porte-monnaie électronique
            {% elseif returnOrder.refundMethod == 'credit_note' %}📝 Avoir
            {% else %}{{ returnOrder.refundMethod }}
            {% endif %}
        </p>
    </div>

    <div class=\"footer\">
        Document généré le {{ printDate|date('d/m/Y H:i') }}<br>
        Merci de votre confiance !
    </div>
</body>
</html>", "return/receipt_pdf.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\return\\receipt_pdf.html.twig");
    }
}
