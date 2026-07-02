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
class __TwigTemplate_794c836708160a5da9962a6c1882152d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf/recu_achat.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf/recu_achat.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Reçu d'achat ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 5, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 5), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 98, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 98), "html", null, true);
        yield "</strong></p>
        <p>Date de réception : <strong>";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 99, $this->source); })()), "receivedAt", [], "any", false, false, false, 99), "d/m/Y H:i"), "html", null, true);
        yield "</strong></p>
    </div>
    
    <div class=\"info\">
        <p><strong>🏢 Fournisseur :</strong> ";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 103, $this->source); })()), "supplier", [], "any", false, false, false, 103), "name", [], "any", false, false, false, 103), "html", null, true);
        yield "</p>
        <p><strong>📧 Email :</strong> ";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 104, $this->source); })()), "supplier", [], "any", false, false, false, 104), "email", [], "any", false, false, false, 104), "html", null, true);
        yield "</p>
        <p><strong>📞 Téléphone :</strong> ";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 105, $this->source); })()), "supplier", [], "any", false, false, false, 105), "phone", [], "any", false, false, false, 105), "html", null, true);
        yield "</p>
        <p><strong>👤 Réceptionné par :</strong> ";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 106, $this->source); })()), "user", [], "any", false, false, false, 106), "fullName", [], "any", false, false, false, 106), "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 124, $this->source); })()), "purchaseItems", [], "any", false, false, false, 124));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 125
            yield "                    ";
            $context["stockBatch"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["stock_batches"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 125), [], "array", true, true, false, 125) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["stock_batches"]) || array_key_exists("stock_batches", $context) ? $context["stock_batches"] : (function () { throw new RuntimeError('Variable "stock_batches" does not exist.', 125, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 125), [], "array", false, false, false, 125)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["stock_batches"]) || array_key_exists("stock_batches", $context) ? $context["stock_batches"] : (function () { throw new RuntimeError('Variable "stock_batches" does not exist.', 125, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 125), [], "array", false, false, false, 125)) : (null));
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
            $context['_seq'] = CoreExtension::ensureTraversable(((array_key_exists("supplier_credit_notes", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["supplier_credit_notes"]) || array_key_exists("supplier_credit_notes", $context) ? $context["supplier_credit_notes"] : (function () { throw new RuntimeError('Variable "supplier_credit_notes" does not exist.', 129, $this->source); })()), [])) : ([])));
            foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
                // line 130
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["note"], "stockBatch", [], "any", false, false, false, 130), "id", [], "any", false, false, false, 130) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["stockBatch"]) || array_key_exists("stockBatch", $context) ? $context["stockBatch"] : (function () { throw new RuntimeError('Variable "stockBatch" does not exist.', 130, $this->source); })()), "id", [], "any", false, false, false, 130))) {
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
            if ((($tmp = (isset($context["stockBatch"]) || array_key_exists("stockBatch", $context) ? $context["stockBatch"] : (function () { throw new RuntimeError('Variable "stockBatch" does not exist.', 145, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 146
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stockBatch"]) || array_key_exists("stockBatch", $context) ? $context["stockBatch"] : (function () { throw new RuntimeError('Variable "stockBatch" does not exist.', 146, $this->source); })()), "batchNumber", [], "any", false, false, false, 146), "html", null, true);
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
            if (((isset($context["stockBatch"]) || array_key_exists("stockBatch", $context) ? $context["stockBatch"] : (function () { throw new RuntimeError('Variable "stockBatch" does not exist.', 152, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["stockBatch"]) || array_key_exists("stockBatch", $context) ? $context["stockBatch"] : (function () { throw new RuntimeError('Variable "stockBatch" does not exist.', 152, $this->source); })()), "manufacturingDate", [], "any", false, false, false, 152))) {
                // line 153
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stockBatch"]) || array_key_exists("stockBatch", $context) ? $context["stockBatch"] : (function () { throw new RuntimeError('Variable "stockBatch" does not exist.', 153, $this->source); })()), "manufacturingDate", [], "any", false, false, false, 153), "d/m/Y"), "html", null, true);
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
            if (((isset($context["stockBatch"]) || array_key_exists("stockBatch", $context) ? $context["stockBatch"] : (function () { throw new RuntimeError('Variable "stockBatch" does not exist.', 161, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["stockBatch"]) || array_key_exists("stockBatch", $context) ? $context["stockBatch"] : (function () { throw new RuntimeError('Variable "stockBatch" does not exist.', 161, $this->source); })()), "expiryDate", [], "any", false, false, false, 161))) {
                // line 162
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stockBatch"]) || array_key_exists("stockBatch", $context) ? $context["stockBatch"] : (function () { throw new RuntimeError('Variable "stockBatch" does not exist.', 162, $this->source); })()), "expiryDate", [], "any", false, false, false, 162), "d/m/Y"), "html", null, true);
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
            if ((($tmp = (isset($context["hasIssue"]) || array_key_exists("hasIssue", $context) ? $context["hasIssue"] : (function () { throw new RuntimeError('Variable "hasIssue" does not exist.', 173, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
            if (((isset($context["hasIssue"]) || array_key_exists("hasIssue", $context) ? $context["hasIssue"] : (function () { throw new RuntimeError('Variable "hasIssue" does not exist.', 182, $this->source); })()) && (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 182, $this->source); })()))) {
                // line 183
                yield "                        <tr style=\"background-color: #fff3cd;\">
                            <td colspan=\"8\" style=\"padding: 6px 10px;\">
                                <div style=\"font-size: 9px; color: #856404;\">
                                    📝 <strong>Détail du problème :</strong>
                                    Type: ";
                // line 187
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 187, $this->source); })()), "issueTypeLabel", [], "any", false, false, false, 187), "html", null, true);
                yield " |
                                    Qté concernée: ";
                // line 188
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "affectedQuantity", [], "any", true, true, false, 188)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 188, $this->source); })()), "affectedQuantity", [], "any", false, false, false, 188), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 188))) : (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 188))), "html", null, true);
                yield " |
                                    Montant déduit: ";
                // line 189
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 189, $this->source); })()), "declaredAmount", [], "any", false, false, false, 189), CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 189, $this->source); })()), "hmaService", [], "any", false, false, false, 189)), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 199, $this->source); })()), "totalAmount", [], "any", false, false, false, 199), 0, ",", " "), "html", null, true);
        yield " FCFA</strong></td>
                </tr>
            </tfoot>
        </table>
    </div>
    
    <div class=\"total\">
        <p>💰 Montant total à régler : <strong>";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 206, $this->source); })()), "totalAmount", [], "any", false, false, false, 206), 0, ",", " "), "html", null, true);
        yield " FCFA</strong></p>
        ";
        // line 207
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 207, $this->source); })()), "notes", [], "any", false, false, false, 207)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 208
            yield "            <p style=\"font-size: 10px;\">📝 Notes : ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 208, $this->source); })()), "notes", [], "any", false, false, false, 208), "html", null, true);
            yield "</p>
        ";
        }
        // line 210
        yield "    </div>
    
    <div class=\"signature\">
        <p>Bon pour réception,</p>
        <p><strong>";
        // line 214
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 214, $this->source); })()), "user", [], "any", false, false, false, 214), "fullName", [], "any", false, false, false, 214), "html", null, true);
        yield "</strong></p>
        <p>";
        // line 215
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 215, $this->source); })()), "receivedAt", [], "any", false, false, false, 215), "d/m/Y"), "html", null, true);
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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  424 => 220,  416 => 215,  412 => 214,  406 => 210,  400 => 208,  398 => 207,  394 => 206,  384 => 199,  378 => 195,  372 => 194,  364 => 189,  360 => 188,  356 => 187,  350 => 183,  347 => 182,  342 => 178,  338 => 176,  334 => 174,  332 => 173,  327 => 171,  323 => 170,  319 => 169,  316 => 168,  312 => 166,  306 => 164,  304 => 163,  299 => 162,  297 => 161,  293 => 159,  289 => 157,  283 => 155,  281 => 154,  276 => 153,  274 => 152,  270 => 150,  264 => 148,  258 => 146,  256 => 145,  249 => 142,  243 => 140,  241 => 139,  237 => 138,  232 => 135,  226 => 134,  223 => 133,  220 => 132,  217 => 131,  214 => 130,  210 => 129,  207 => 128,  204 => 127,  201 => 126,  198 => 125,  194 => 124,  173 => 106,  169 => 105,  165 => 104,  161 => 103,  154 => 99,  150 => 98,  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Reçu d'achat {{ purchase.purchaseNumber }}</title>
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
        <p><strong>N° {{ purchase.purchaseNumber }}</strong></p>
        <p>Date de réception : <strong>{{ purchase.receivedAt|date('d/m/Y H:i') }}</strong></p>
    </div>
    
    <div class=\"info\">
        <p><strong>🏢 Fournisseur :</strong> {{ purchase.supplier.name }}</p>
        <p><strong>📧 Email :</strong> {{ purchase.supplier.email }}</p>
        <p><strong>📞 Téléphone :</strong> {{ purchase.supplier.phone }}</p>
        <p><strong>👤 Réceptionné par :</strong> {{ purchase.user.fullName }}</p>
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
                {% for item in purchase.purchaseItems %}
                    {% set stockBatch = stock_batches[item.id] ?? null %}
                    {% set hasIssue = false %}
                    {% set creditNote = null %}
                    
                    {% for note in supplier_credit_notes|default([]) %}
                        {% if note.stockBatch.id == stockBatch.id %}
                            {% set hasIssue = true %}
                            {% set creditNote = note %}
                        {% endif %}
                    {% endfor %}
                    
                    <tr>
                        <td>
                            <strong>{{ item.product.name }}</strong>
                            {% if item.product.barcode %}
                                <div class=\"product-details\">📦 Code: {{ item.product.barcode }}</div>
                            {% endif %}
                            <div class=\"product-details\">📏 Unité: {{ item.product.unit|default('pièce') }}</div>
                        </td>
                        <td class=\"text-center\">
                            {% if stockBatch %}
                                {{ stockBatch.batchNumber }}
                            {% else %}
                                {{ item.batchNumber|default('-') }}
                            {% endif %}
                        </td>
                        <td class=\"text-center\">
                            {% if stockBatch and stockBatch.manufacturingDate %}
                                {{ stockBatch.manufacturingDate|date('d/m/Y') }}
                            {% elseif item.manufacturingDate %}
                                {{ item.manufacturingDate|date('d/m/Y') }}
                            {% else %}
                                -
                            {% endif %}
                        </td>
                        <td class=\"text-center\">
                            {% if stockBatch and stockBatch.expiryDate %}
                                {{ stockBatch.expiryDate|date('d/m/Y') }}
                            {% elseif item.expiryDate %}
                                {{ item.expiryDate|date('d/m/Y') }}
                            {% else %}
                                -
                            {% endif %}
                        </td>
                        <td class=\"text-center\">{{ item.quantity }}</td>
                        <td class=\"text-right\">{{ item.unitPrice|number_format(0, ',', ' ') }}</td>
                        <td class=\"text-right\"><strong>{{ item.totalPrice|number_format(0, ',', ' ') }}</strong></td>
                        <td class=\"text-center\">
                            {% if hasIssue %}
                                <span class=\"problem-badge\">⚠️ Problème signalé</span>
                            {% else %}
                                ✓ Conforme
                            {% endif %}
                        </td>
                    </tr>
                    
                    {# Afficher les détails du problème #}
                    {% if hasIssue and creditNote %}
                        <tr style=\"background-color: #fff3cd;\">
                            <td colspan=\"8\" style=\"padding: 6px 10px;\">
                                <div style=\"font-size: 9px; color: #856404;\">
                                    📝 <strong>Détail du problème :</strong>
                                    Type: {{ creditNote.issueTypeLabel }} |
                                    Qté concernée: {{ creditNote.affectedQuantity|default(item.quantity) }} |
                                    Montant déduit: {{ creditNote.declaredAmount|price_with_currency(purchase.hmaService) }}
                                </div>
                            </td>
                        </tr>
                    {% endif %}
                {% endfor %}
            </tbody>
            <tfoot>
                <tr style=\"background-color: #f2f2f2;\">
                    <td colspan=\"6\" class=\"text-right\"><strong>TOTAL TTC</strong></td>
                    <td colspan=\"2\" class=\"text-right\"><strong>{{ purchase.totalAmount|number_format(0, ',', ' ') }} FCFA</strong></td>
                </tr>
            </tfoot>
        </table>
    </div>
    
    <div class=\"total\">
        <p>💰 Montant total à régler : <strong>{{ purchase.totalAmount|number_format(0, ',', ' ') }} FCFA</strong></p>
        {% if purchase.notes %}
            <p style=\"font-size: 10px;\">📝 Notes : {{ purchase.notes }}</p>
        {% endif %}
    </div>
    
    <div class=\"signature\">
        <p>Bon pour réception,</p>
        <p><strong>{{ purchase.user.fullName }}</strong></p>
        <p>{{ purchase.receivedAt|date('d/m/Y') }}</p>
    </div>
    
    <div class=\"footer\">
        <p>Ce document fait office de reçu officiel de réception de marchandises.</p>
        <p>Généré le {{ \"now\"|date('d/m/Y H:i') }}</p>
    </div>
</body>
</html>", "pdf/recu_achat.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\pdf\\recu_achat.html.twig");
    }
}
