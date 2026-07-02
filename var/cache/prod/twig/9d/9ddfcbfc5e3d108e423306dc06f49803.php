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
class __TwigTemplate_f98f9a085315ae5216f3c04cab36277e extends Template
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
        $context['_seq'] = CoreExtension::ensureTraversable(($context["returns"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["returnOrder"]) {
            // line 103
            yield "    <div class=\"receipt\">
        <div class=\"header\">
            <h1>REÇU DE RETOUR</h1>
            <p>";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "companyName", [], "any", false, false, false, 106), "html", null, true);
            yield "</p>
            <p>Tél: ";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "phone", [], "any", false, false, false, 107), "html", null, true);
            yield " | Email: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["hmaService"] ?? null), "email", [], "any", false, false, false, 107), "html", null, true);
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["reasons"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["returnOrder"], "reason", [], "any", false, false, false, 129), [], "array", true, true, false, 129)) ? (Twig\Extension\CoreExtension::default((($_v0 = ($context["reasons"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["returnOrder"], "reason", [], "any", false, false, false, 129)] ?? null) : null), CoreExtension::getAttribute($this->env, $this->source, $context["returnOrder"], "reason", [], "any", false, false, false, 129))) : (CoreExtension::getAttribute($this->env, $this->source, $context["returnOrder"], "reason", [], "any", false, false, false, 129))), "html", null, true);
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(($context["printDate"] ?? null), "d/m/Y H:i"), "html", null, true);
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
        return array (  267 => 164,  256 => 159,  249 => 155,  243 => 151,  234 => 148,  230 => 147,  226 => 146,  222 => 145,  219 => 144,  215 => 143,  198 => 129,  191 => 125,  182 => 121,  175 => 117,  168 => 113,  157 => 107,  153 => 106,  148 => 103,  144 => 102,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "return/multiple_receipts_pdf.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\return\\multiple_receipts_pdf.html.twig");
    }
}
