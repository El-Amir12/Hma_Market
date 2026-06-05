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

/* return/multiple_receipts_pdf.html.twig */
class __TwigTemplate_482472707d83e096bf02780bfaf2d691 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "return/multiple_receipts_pdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "return/multiple_receipts_pdf.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Reçus de retours</title>
    <style>
        body {
            font-family: 'Arial', 'Helvetica', sans-serif;
            margin: 15px;
            font-size: 11px;
        }
        .receipt {
            page-break-after: always;
            margin-bottom: 20px;
            border-bottom: 1px dashed #ccc;
            padding-bottom: 15px;
        }
        .receipt:last-child {
            page-break-after: auto;
            border-bottom: none;
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
            margin-top: 15px;
            text-align: center;
            font-size: 9px;
            color: #666;
        }
        .badge {
            display: inline-block;
            padding: 2px 6px;
            border-radius: 4px;
            font-size: 9px;
            font-weight: bold;
        }
        .page-number {
            text-align: center;
            font-size: 9px;
            color: #999;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["returns"]) || array_key_exists("returns", $context) ? $context["returns"] : (function () { throw new RuntimeError('Variable "returns" does not exist.', 102, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["returnOrder"]) {
            // line 103
            yield "    <div class=\"receipt\">
        <div class=\"header\">
            <h1>REÇU DE RETOUR</h1>
            <p>";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 106, $this->source); })()), "companyName", [], "any", false, false, false, 106), "html", null, true);
            yield "</p>
            <p>Tél: ";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 107, $this->source); })()), "phone", [], "any", false, false, false, 107), "html", null, true);
            yield " | Email: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hmaService"]) || array_key_exists("hmaService", $context) ? $context["hmaService"] : (function () { throw new RuntimeError('Variable "hmaService" does not exist.', 107, $this->source); })()), "email", [], "any", false, false, false, 107), "html", null, true);
            yield "</p>
        </div>

        <div class=\"info-section\">
            <div class=\"info-row\">
                <div class=\"info-label\">N° Retour :</div>
                <div class=\"info-value\"><strong>";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["returnOrder"], "returnNumber", [], "any", false, false, false, 113), "html", null, true);
            yield "</strong></div>
            </div>
            <div class=\"info-row\">
                <div class=\"info-label\">N° Commande :</div>
                <div class=\"info-value\">";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["returnOrder"], "orderNumber", [], "any", false, false, false, 117), "html", null, true);
            yield "</div>
            </div>
            <div class=\"info-row\">
                <div class=\"info-label\">Client :</div>
                <div class=\"info-value\">";
            // line 121
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["returnOrder"], "customerName", [], "any", false, false, false, 121)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["returnOrder"], "customerName", [], "any", false, false, false, 121), "html", null, true)) : ("Non renseigné"));
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["returnOrder"], "customerPhone", [], "any", false, false, false, 121), "html", null, true);
            yield ")</div>
            </div>
            <div class=\"info-row\">
                <div class=\"info-label\">Date retour :</div>
                <div class=\"info-value\">";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["returnOrder"], "createdAt", [], "any", false, false, false, 125), "d/m/Y H:i"), "html", null, true);
            yield "</div>
            </div>
            <div class=\"info-row\">
                <div class=\"info-label\">Motif :</div>
                <div class=\"info-value\">";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["reasons"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["returnOrder"], "reason", [], "any", false, false, false, 129), [], "array", true, true, false, 129)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reasons"]) || array_key_exists("reasons", $context) ? $context["reasons"] : (function () { throw new RuntimeError('Variable "reasons" does not exist.', 129, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["returnOrder"], "reason", [], "any", false, false, false, 129), [], "array", false, false, false, 129), CoreExtension::getAttribute($this->env, $this->source, $context["returnOrder"], "reason", [], "any", false, false, false, 129))) : (CoreExtension::getAttribute($this->env, $this->source, $context["returnOrder"], "reason", [], "any", false, false, false, 129))), "html", null, true);
            yield "</div>
            </div>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Produit</th>
                    <th>Qté</th>
                    <th>Prix unitaire</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["returnOrder"], "returnItems", [], "any", false, false, false, 143));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 144
                yield "                <tr>
                    <td>";
                // line 145
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "productName", [], "any", false, false, false, 145), "html", null, true);
                yield "</td>
                    <td style=\"text-align: center;\">";
                // line 146
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantityReturned", [], "any", false, false, false, 146), "html", null, true);
                yield "</td>
                    <td style=\"text-align: right;\">";
                // line 147
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPriceAtSale", [], "any", false, false, false, 147), 0, ",", " "), "html", null, true);
                yield " FCFA</td>
                    <td style=\"text-align: right;\"><strong>";
                // line 148
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "refundAmount", [], "any", false, false, false, 148), 0, ",", " "), "html", null, true);
                yield " FCFA</strong></td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            yield "            </tbody>
        </table>

        <div class=\"total\">
            <p>Total remboursé : <strong>";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["returnOrder"], "totalRefundAmount", [], "any", false, false, false, 155), 0, ",", " "), "html", null, true);
            yield " FCFA</strong></p>
        </div>

        <div class=\"footer\">
            Document généré le ";
            // line 159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["printDate"]) || array_key_exists("printDate", $context) ? $context["printDate"] : (function () { throw new RuntimeError('Variable "printDate" does not exist.', 159, $this->source); })()), "d/m/Y H:i"), "html", null, true);
            yield "<br>
            Merci de votre confiance !
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['returnOrder'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        yield "    
    <div class=\"page-number\">
        Page {PAGE_NUM} / {PAGE_COUNT}
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
        return "return/multiple_receipts_pdf.html.twig";
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
        return array (  273 => 164,  262 => 159,  255 => 155,  249 => 151,  240 => 148,  236 => 147,  232 => 146,  228 => 145,  225 => 144,  221 => 143,  204 => 129,  197 => 125,  188 => 121,  181 => 117,  174 => 113,  163 => 107,  159 => 106,  154 => 103,  150 => 102,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/return/multiple_receipts_pdf.html.twig #}
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Reçus de retours</title>
    <style>
        body {
            font-family: 'Arial', 'Helvetica', sans-serif;
            margin: 15px;
            font-size: 11px;
        }
        .receipt {
            page-break-after: always;
            margin-bottom: 20px;
            border-bottom: 1px dashed #ccc;
            padding-bottom: 15px;
        }
        .receipt:last-child {
            page-break-after: auto;
            border-bottom: none;
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
            margin-top: 15px;
            text-align: center;
            font-size: 9px;
            color: #666;
        }
        .badge {
            display: inline-block;
            padding: 2px 6px;
            border-radius: 4px;
            font-size: 9px;
            font-weight: bold;
        }
        .page-number {
            text-align: center;
            font-size: 9px;
            color: #999;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    {% for returnOrder in returns %}
    <div class=\"receipt\">
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
                <div class=\"info-label\">Motif :</div>
                <div class=\"info-value\">{{ reasons[returnOrder.reason]|default(returnOrder.reason) }}</div>
            </div>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Produit</th>
                    <th>Qté</th>
                    <th>Prix unitaire</th>
                    <th>Total</th>
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
            <p>Total remboursé : <strong>{{ returnOrder.totalRefundAmount|number_format(0, ',', ' ') }} FCFA</strong></p>
        </div>

        <div class=\"footer\">
            Document généré le {{ printDate|date('d/m/Y H:i') }}<br>
            Merci de votre confiance !
        </div>
    </div>
    {% endfor %}
    
    <div class=\"page-number\">
        Page {PAGE_NUM} / {PAGE_COUNT}
    </div>
</body>
</html>", "return/multiple_receipts_pdf.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\return\\multiple_receipts_pdf.html.twig");
    }
}
