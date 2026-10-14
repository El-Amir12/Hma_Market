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

/* pdf/recu_achat.html.twig */
class __TwigTemplate_15faf2e0b2f93365e455fbf9d7b538fc extends Template
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
    <title>Reçu d'achat ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "purchaseNumber", [], "any", false, false, false, 5), "html", null, true);
        yield "</title>
    <style>
        @page { margin: 1.5cm; }
        body { 
            font-family: 'DejaVu Sans', Arial, sans-serif; 
            font-size: 11px;
            line-height: 1.4;
            color: #333;
        }
        h1 { color: #0463f1; font-size: 22px; margin: 0 0 5px; }
        .header { 
            text-align: center;
            margin-bottom: 25px;
            padding-bottom: 10px;
            border-bottom: 2px solid #0463f1;
        }
        .info { 
            margin-bottom: 20px;
            background: #f8f9fa;
            padding: 10px;
            border-radius: 5px;
        }
        .info p { margin: 4px 0; }
        .no-supplier {
            background: #fff3cd;
            padding: 8px 12px;
            border-left: 4px solid #ffc107;
            color: #856404;
            font-style: italic;
            border-radius: 4px;
            margin: 6px 0;
        }
        table { 
            width: 100%; 
            border-collapse: collapse; 
            margin: 15px 0;
            font-size: 10px;
        }
        th, td { border: 1px solid #ddd; padding: 6px 4px; vertical-align: top; }
        th { background-color: #0463f1; color: white; font-weight: bold; text-align: center; }
        .text-center { text-align: center; }
        .text-right { text-align: right; }
        .text-left { text-align: left; }
        .total { 
            font-weight: bold; 
            text-align: right; 
            margin-top: 15px;
            padding: 10px;
            background: #e8f4f8;
            border-radius: 5px;
        }
        .signature { 
            margin-top: 40px; 
            text-align: right; 
            border-top: 1px solid #ddd;
            padding-top: 20px;
        }
        .problem-badge {
            display: inline-block;
            background: #dc3545;
            color: white;
            padding: 2px 5px;
            border-radius: 3px;
            font-size: 8px;
        }
        .product-details { font-size: 9px; color: #666; margin-top: 3px; }
        .footer { margin-top: 25px; text-align: center; font-size: 9px; color: #999; }
        .table-container { overflow-x: auto; }
    </style>
</head>
<body>
    <div class=\"header\">
        <h1>📄 REÇU D'ACHAT</h1>
        <p><strong>N° ";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "purchaseNumber", [], "any", false, false, false, 78), "html", null, true);
        yield "</strong></p>
        <p>Date de réception : <strong>";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "receivedAt", [], "any", false, false, false, 79), "d/m/Y H:i"), "html", null, true);
        yield "</strong></p>
    </div>

    <div class=\"info\">
        ";
        // line 84
        yield "        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "supplier", [], "any", false, false, false, 84)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 85
            yield "            <p><strong>🏢 Fournisseur :</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "supplier", [], "any", false, false, false, 85), "name", [], "any", false, false, false, 85), "html", null, true);
            yield "</p>
            <p><strong>📧 Email :</strong> ";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "supplier", [], "any", false, false, false, 86), "email", [], "any", false, false, false, 86), "html", null, true);
            yield "</p>
            <p><strong>📞 Téléphone :</strong> ";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "supplier", [], "any", false, false, false, 87), "phone", [], "any", false, false, false, 87), "html", null, true);
            yield "</p>
        ";
        } else {
            // line 89
            yield "            <div class=\"no-supplier\">
                <strong>🏢 Achat interne</strong> — aucun fournisseur associé
            </div>
        ";
        }
        // line 93
        yield "        <p><strong>👤 Réceptionné par :</strong> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "user", [], "any", false, false, false, 93), "fullName", [], "any", false, false, false, 93), "html", null, true);
        yield "</p>
    </div>

    <div class=\"table-container\">
        <table>
            <thead>
                <tr>
                    <th style=\"width: 28%\">Produit</th>
                    <th style=\"width: 8%\">Lot</th>
                    <th style=\"width: 10%\">Date fab.</th>
                    <th style=\"width: 10%\">Date exp.</th>
                    <th style=\"width: 6%\">Qté</th>
                    <th style=\"width: 10%\">Prix unit.</th>
                    <th style=\"width: 12%\">Total</th>
                    <th style=\"width: 16%\">Statut</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "purchaseItems", [], "any", false, false, false, 111));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 112
            yield "                    ";
            $context["stockBatch"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["stock_batches"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 112), [], "array", true, true, false, 112) &&  !(null === (($_v0 = ($context["stock_batches"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 112)] ?? null) : null)))) ? ((($_v1 = ($context["stock_batches"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 112)] ?? null) : null)) : (null));
            // line 113
            yield "                    ";
            $context["hasIssue"] = false;
            // line 114
            yield "                    ";
            $context["creditNote"] = null;
            // line 115
            yield "
                    ";
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(((array_key_exists("supplier_credit_notes", $context)) ? (Twig\Extension\CoreExtension::default(($context["supplier_credit_notes"] ?? null), [])) : ([])));
            foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
                // line 117
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["note"], "stockBatch", [], "any", false, false, false, 117), "id", [], "any", false, false, false, 117) == CoreExtension::getAttribute($this->env, $this->source, ($context["stockBatch"] ?? null), "id", [], "any", false, false, false, 117))) {
                    // line 118
                    yield "                            ";
                    $context["hasIssue"] = true;
                    // line 119
                    yield "                            ";
                    $context["creditNote"] = $context["note"];
                    // line 120
                    yield "                        ";
                }
                // line 121
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['note'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            yield "
                    <tr>
                        <td>
                            <strong>";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 125), "name", [], "any", false, false, false, 125), "html", null, true);
            yield "</strong>
                            ";
            // line 126
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 126), "barcode", [], "any", false, false, false, 126)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 127
                yield "                                <div class=\"product-details\">📦 Code: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 127), "barcode", [], "any", false, false, false, 127), "html", null, true);
                yield "</div>
                            ";
            }
            // line 129
            yield "                            <div class=\"product-details\">📏 Unité: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, true, false, 129), "unit", [], "any", true, true, false, 129)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 129), "unit", [], "any", false, false, false, 129), "pièce")) : ("pièce")), "html", null, true);
            yield "</div>
                        </td>
                        <td class=\"text-center\">
                            ";
            // line 132
            if ((($tmp = ($context["stockBatch"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 133
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stockBatch"] ?? null), "batchNumber", [], "any", false, false, false, 133), "html", null, true);
                yield "
                            ";
            } else {
                // line 135
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "batchNumber", [], "any", true, true, false, 135)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "batchNumber", [], "any", false, false, false, 135), "-")) : ("-")), "html", null, true);
                yield "
                            ";
            }
            // line 137
            yield "                        </td>
                        <td class=\"text-center\">
                            ";
            // line 139
            if ((($context["stockBatch"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["stockBatch"] ?? null), "manufacturingDate", [], "any", false, false, false, 139))) {
                // line 140
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["stockBatch"] ?? null), "manufacturingDate", [], "any", false, false, false, 140), "d/m/Y"), "html", null, true);
                yield "
                            ";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 141
$context["item"], "manufacturingDate", [], "any", false, false, false, 141)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 142
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "manufacturingDate", [], "any", false, false, false, 142), "d/m/Y"), "html", null, true);
                yield "
                            ";
            } else {
                // line 144
                yield "                                -
                            ";
            }
            // line 146
            yield "                        </td>
                        <td class=\"text-center\">
                            ";
            // line 148
            if ((($context["stockBatch"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["stockBatch"] ?? null), "expiryDate", [], "any", false, false, false, 148))) {
                // line 149
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["stockBatch"] ?? null), "expiryDate", [], "any", false, false, false, 149), "d/m/Y"), "html", null, true);
                yield "
                            ";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 150
$context["item"], "expiryDate", [], "any", false, false, false, 150)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 151
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "expiryDate", [], "any", false, false, false, 151), "d/m/Y"), "html", null, true);
                yield "
                            ";
            } else {
                // line 153
                yield "                                -
                            ";
            }
            // line 155
            yield "                        </td>
                        <td class=\"text-center\">";
            // line 156
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 156), "html", null, true);
            yield "</td>
                        <td class=\"text-right\">";
            // line 157
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 157), 0, ",", " "), "html", null, true);
            yield "</td>
                        <td class=\"text-right\"><strong>";
            // line 158
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "totalPrice", [], "any", false, false, false, 158), 0, ",", " "), "html", null, true);
            yield "</strong></td>
                        <td class=\"text-center\">
                            ";
            // line 160
            if ((($tmp = ($context["hasIssue"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 161
                yield "                                <span class=\"problem-badge\">⚠️ Problème signalé</span>
                            ";
            } else {
                // line 163
                yield "                                ✓ Conforme
                            ";
            }
            // line 165
            yield "                        </td>
                    </tr>

                    ";
            // line 168
            if ((($context["hasIssue"] ?? null) && ($context["creditNote"] ?? null))) {
                // line 169
                yield "                        <tr style=\"background-color: #fff3cd;\">
                            <td colspan=\"8\" style=\"padding: 6px 10px;\">
                                <div style=\"font-size: 9px; color: #856404;\">
                                    📝 <strong>Détail du problème :</strong>
                                    Type: ";
                // line 173
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "issueTypeLabel", [], "any", false, false, false, 173), "html", null, true);
                yield " |
                                    Qté concernée: ";
                // line 174
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "affectedQuantity", [], "any", true, true, false, 174)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "affectedQuantity", [], "any", false, false, false, 174), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 174))) : (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 174))), "html", null, true);
                yield " |
                                    Montant déduit: ";
                // line 175
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "declaredAmount", [], "any", false, false, false, 175), CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "hmaService", [], "any", false, false, false, 175)), "html", null, true);
                yield "
                                </div>
                            </td>
                        </tr>
                    ";
            }
            // line 180
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        yield "            </tbody>
            <tfoot>
                <tr style=\"background-color: #f2f2f2;\">
                    <td colspan=\"6\" class=\"text-right\"><strong>TOTAL TTC</strong></td>
                    <td colspan=\"2\" class=\"text-right\"><strong>";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "totalAmount", [], "any", false, false, false, 185), 0, ",", " "), "html", null, true);
        yield " FCFA</strong></td>
                </tr>
            </tfoot>
        </table>
    </div>

    <div class=\"total\">
        <p>💰 Montant total à régler : <strong>";
        // line 192
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "totalAmount", [], "any", false, false, false, 192), 0, ",", " "), "html", null, true);
        yield " FCFA</strong></p>
        ";
        // line 193
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "notes", [], "any", false, false, false, 193)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 194
            yield "            <p style=\"font-size: 10px;\">📝 Notes : ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "notes", [], "any", false, false, false, 194), "html", null, true);
            yield "</p>
        ";
        }
        // line 196
        yield "    </div>

    <div class=\"signature\">
        <p>Bon pour réception,</p>
        <p><strong>";
        // line 200
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "user", [], "any", false, false, false, 200), "fullName", [], "any", false, false, false, 200), "html", null, true);
        yield "</strong></p>
        <p>";
        // line 201
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "receivedAt", [], "any", false, false, false, 201), "d/m/Y"), "html", null, true);
        yield "</p>
    </div>

    <div class=\"footer\">
        <p>Ce";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pdf/recu_achat.html.twig";
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
        return array (  401 => 201,  397 => 200,  391 => 196,  385 => 194,  383 => 193,  379 => 192,  369 => 185,  363 => 181,  357 => 180,  349 => 175,  345 => 174,  341 => 173,  335 => 169,  333 => 168,  328 => 165,  324 => 163,  320 => 161,  318 => 160,  313 => 158,  309 => 157,  305 => 156,  302 => 155,  298 => 153,  292 => 151,  290 => 150,  285 => 149,  283 => 148,  279 => 146,  275 => 144,  269 => 142,  267 => 141,  262 => 140,  260 => 139,  256 => 137,  250 => 135,  244 => 133,  242 => 132,  235 => 129,  229 => 127,  227 => 126,  223 => 125,  218 => 122,  212 => 121,  209 => 120,  206 => 119,  203 => 118,  200 => 117,  196 => 116,  193 => 115,  190 => 114,  187 => 113,  184 => 112,  180 => 111,  158 => 93,  152 => 89,  147 => 87,  143 => 86,  138 => 85,  135 => 84,  128 => 79,  124 => 78,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pdf/recu_achat.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\pdf\\recu_achat.html.twig");
    }
}
