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
class __TwigTemplate_a220637e4a8238f3f60aadf554b16f3d extends Template
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
        @page {
            margin: 1.5cm;
        }
        body { 
            font-family: 'DejaVu Sans', Arial, sans-serif; 
            font-size: 11px;
            line-height: 1.4;
            color: #333;
        }
        h1 { 
            color: #0463f1; 
            font-size: 22px;
            margin: 0 0 5px;
        }
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
        .info p {
            margin: 4px 0;
        }
        table { 
            width: 100%; 
            border-collapse: collapse; 
            margin: 15px 0;
            font-size: 10px;
        }
        th, td { 
            border: 1px solid #ddd; 
            padding: 6px 4px; 
            vertical-align: top;
        }
        th { 
            background-color: #0463f1; 
            color: white;
            font-weight: bold;
            text-align: center;
        }
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
        .product-details {
            font-size: 9px;
            color: #666;
            margin-top: 3px;
        }
        .footer {
            margin-top: 25px;
            text-align: center;
            font-size: 9px;
            color: #999;
        }
        .table-container {
            overflow-x: auto;
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <h1>📄 REÇU D'ACHAT</h1>
        <p><strong>N° ";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "purchaseNumber", [], "any", false, false, false, 98), "html", null, true);
        yield "</strong></p>
        <p>Date de réception : <strong>";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "receivedAt", [], "any", false, false, false, 99), "d/m/Y H:i"), "html", null, true);
        yield "</strong></p>
    </div>
    
    <div class=\"info\">
        <p><strong>🏢 Fournisseur :</strong> ";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "supplier", [], "any", false, false, false, 103), "name", [], "any", false, false, false, 103), "html", null, true);
        yield "</p>
        <p><strong>📧 Email :</strong> ";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "supplier", [], "any", false, false, false, 104), "email", [], "any", false, false, false, 104), "html", null, true);
        yield "</p>
        <p><strong>📞 Téléphone :</strong> ";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "supplier", [], "any", false, false, false, 105), "phone", [], "any", false, false, false, 105), "html", null, true);
        yield "</p>
        <p><strong>👤 Réceptionné par :</strong> ";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "user", [], "any", false, false, false, 106), "fullName", [], "any", false, false, false, 106), "html", null, true);
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
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "purchaseItems", [], "any", false, false, false, 124));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 125
            yield "                    ";
            $context["stockBatch"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["stock_batches"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 125), [], "array", true, true, false, 125) &&  !(null === (($_v0 = ($context["stock_batches"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 125)] ?? null) : null)))) ? ((($_v1 = ($context["stock_batches"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 125)] ?? null) : null)) : (null));
            // line 126
            yield "                    ";
            $context["hasIssue"] = false;
            // line 127
            yield "                    ";
            $context["creditNote"] = null;
            // line 128
            yield "                    
                    ";
            // line 129
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(((array_key_exists("supplier_credit_notes", $context)) ? (Twig\Extension\CoreExtension::default(($context["supplier_credit_notes"] ?? null), [])) : ([])));
            foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
                // line 130
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["note"], "stockBatch", [], "any", false, false, false, 130), "id", [], "any", false, false, false, 130) == CoreExtension::getAttribute($this->env, $this->source, ($context["stockBatch"] ?? null), "id", [], "any", false, false, false, 130))) {
                    // line 131
                    yield "                            ";
                    $context["hasIssue"] = true;
                    // line 132
                    yield "                            ";
                    $context["creditNote"] = $context["note"];
                    // line 133
                    yield "                        ";
                }
                // line 134
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['note'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            yield "                    
                    <tr>
                        <td>
                            <strong>";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 138), "name", [], "any", false, false, false, 138), "html", null, true);
            yield "</strong>
                            ";
            // line 139
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 139), "barcode", [], "any", false, false, false, 139)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 140
                yield "                                <div class=\"product-details\">📦 Code: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 140), "barcode", [], "any", false, false, false, 140), "html", null, true);
                yield "</div>
                            ";
            }
            // line 142
            yield "                            <div class=\"product-details\">📏 Unité: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, true, false, 142), "unit", [], "any", true, true, false, 142)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 142), "unit", [], "any", false, false, false, 142), "pièce")) : ("pièce")), "html", null, true);
            yield "</div>
                        </td>
                        <td class=\"text-center\">
                            ";
            // line 145
            if ((($tmp = ($context["stockBatch"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 146
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stockBatch"] ?? null), "batchNumber", [], "any", false, false, false, 146), "html", null, true);
                yield "
                            ";
            } else {
                // line 148
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "batchNumber", [], "any", true, true, false, 148)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "batchNumber", [], "any", false, false, false, 148), "-")) : ("-")), "html", null, true);
                yield "
                            ";
            }
            // line 150
            yield "                        </td>
                        <td class=\"text-center\">
                            ";
            // line 152
            if ((($context["stockBatch"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["stockBatch"] ?? null), "manufacturingDate", [], "any", false, false, false, 152))) {
                // line 153
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["stockBatch"] ?? null), "manufacturingDate", [], "any", false, false, false, 153), "d/m/Y"), "html", null, true);
                yield "
                            ";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 154
$context["item"], "manufacturingDate", [], "any", false, false, false, 154)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 155
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "manufacturingDate", [], "any", false, false, false, 155), "d/m/Y"), "html", null, true);
                yield "
                            ";
            } else {
                // line 157
                yield "                                -
                            ";
            }
            // line 159
            yield "                        </td>
                        <td class=\"text-center\">
                            ";
            // line 161
            if ((($context["stockBatch"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["stockBatch"] ?? null), "expiryDate", [], "any", false, false, false, 161))) {
                // line 162
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["stockBatch"] ?? null), "expiryDate", [], "any", false, false, false, 162), "d/m/Y"), "html", null, true);
                yield "
                            ";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 163
$context["item"], "expiryDate", [], "any", false, false, false, 163)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 164
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "expiryDate", [], "any", false, false, false, 164), "d/m/Y"), "html", null, true);
                yield "
                            ";
            } else {
                // line 166
                yield "                                -
                            ";
            }
            // line 168
            yield "                        </td>
                        <td class=\"text-center\">";
            // line 169
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 169), "html", null, true);
            yield "</td>
                        <td class=\"text-right\">";
            // line 170
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 170), 0, ",", " "), "html", null, true);
            yield "</td>
                        <td class=\"text-right\"><strong>";
            // line 171
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "totalPrice", [], "any", false, false, false, 171), 0, ",", " "), "html", null, true);
            yield "</strong></td>
                        <td class=\"text-center\">
                            ";
            // line 173
            if ((($tmp = ($context["hasIssue"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 174
                yield "                                <span class=\"problem-badge\">⚠️ Problème signalé</span>
                            ";
            } else {
                // line 176
                yield "                                ✓ Conforme
                            ";
            }
            // line 178
            yield "                        </td>
                    </tr>
                    
                    ";
            // line 182
            yield "                    ";
            if ((($context["hasIssue"] ?? null) && ($context["creditNote"] ?? null))) {
                // line 183
                yield "                        <tr style=\"background-color: #fff3cd;\">
                            <td colspan=\"8\" style=\"padding: 6px 10px;\">
                                <div style=\"font-size: 9px; color: #856404;\">
                                    📝 <strong>Détail du problème :</strong>
                                    Type: ";
                // line 187
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "issueTypeLabel", [], "any", false, false, false, 187), "html", null, true);
                yield " |
                                    Qté concernée: ";
                // line 188
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "affectedQuantity", [], "any", true, true, false, 188)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "affectedQuantity", [], "any", false, false, false, 188), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 188))) : (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 188))), "html", null, true);
                yield " |
                                    Montant déduit: ";
                // line 189
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "declaredAmount", [], "any", false, false, false, 189), CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "hmaService", [], "any", false, false, false, 189)), "html", null, true);
                yield "
                                </div>
                            </td>
                        </tr>
                    ";
            }
            // line 194
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 195
        yield "            </tbody>
            <tfoot>
                <tr style=\"background-color: #f2f2f2;\">
                    <td colspan=\"6\" class=\"text-right\"><strong>TOTAL TTC</strong></td>
                    <td colspan=\"2\" class=\"text-right\"><strong>";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "totalAmount", [], "any", false, false, false, 199), 0, ",", " "), "html", null, true);
        yield " FCFA</strong></td>
                </tr>
            </tfoot>
        </table>
    </div>
    
    <div class=\"total\">
        <p>💰 Montant total à régler : <strong>";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "totalAmount", [], "any", false, false, false, 206), 0, ",", " "), "html", null, true);
        yield " FCFA</strong></p>
        ";
        // line 207
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "notes", [], "any", false, false, false, 207)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 208
            yield "            <p style=\"font-size: 10px;\">📝 Notes : ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "notes", [], "any", false, false, false, 208), "html", null, true);
            yield "</p>
        ";
        }
        // line 210
        yield "    </div>
    
    <div class=\"signature\">
        <p>Bon pour réception,</p>
        <p><strong>";
        // line 214
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "user", [], "any", false, false, false, 214), "fullName", [], "any", false, false, false, 214), "html", null, true);
        yield "</strong></p>
        <p>";
        // line 215
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "receivedAt", [], "any", false, false, false, 215), "d/m/Y"), "html", null, true);
        yield "</p>
    </div>
    
    <div class=\"footer\">
        <p>Ce document fait office de reçu officiel de réception de marchandises.</p>
        <p>Généré le ";
        // line 220
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y H:i"), "html", null, true);
        yield "</p>
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
        return array (  418 => 220,  410 => 215,  406 => 214,  400 => 210,  394 => 208,  392 => 207,  388 => 206,  378 => 199,  372 => 195,  366 => 194,  358 => 189,  354 => 188,  350 => 187,  344 => 183,  341 => 182,  336 => 178,  332 => 176,  328 => 174,  326 => 173,  321 => 171,  317 => 170,  313 => 169,  310 => 168,  306 => 166,  300 => 164,  298 => 163,  293 => 162,  291 => 161,  287 => 159,  283 => 157,  277 => 155,  275 => 154,  270 => 153,  268 => 152,  264 => 150,  258 => 148,  252 => 146,  250 => 145,  243 => 142,  237 => 140,  235 => 139,  231 => 138,  226 => 135,  220 => 134,  217 => 133,  214 => 132,  211 => 131,  208 => 130,  204 => 129,  201 => 128,  198 => 127,  195 => 126,  192 => 125,  188 => 124,  167 => 106,  163 => 105,  159 => 104,  155 => 103,  148 => 99,  144 => 98,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pdf/recu_achat.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\pdf\\recu_achat.html.twig");
    }
}
