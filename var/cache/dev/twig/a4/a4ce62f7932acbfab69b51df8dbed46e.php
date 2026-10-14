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
class __TwigTemplate_2562842e59b4494daaf06b1386d9aa25 extends Template
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 78, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 78), "html", null, true);
        yield "</strong></p>
        <p>Date de réception : <strong>";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 79, $this->source); })()), "receivedAt", [], "any", false, false, false, 79), "d/m/Y H:i"), "html", null, true);
        yield "</strong></p>
    </div>

    <div class=\"info\">
        ";
        // line 84
        yield "        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 84, $this->source); })()), "supplier", [], "any", false, false, false, 84)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 85
            yield "            <p><strong>🏢 Fournisseur :</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 85, $this->source); })()), "supplier", [], "any", false, false, false, 85), "name", [], "any", false, false, false, 85), "html", null, true);
            yield "</p>
            <p><strong>📧 Email :</strong> ";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 86, $this->source); })()), "supplier", [], "any", false, false, false, 86), "email", [], "any", false, false, false, 86), "html", null, true);
            yield "</p>
            <p><strong>📞 Téléphone :</strong> ";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 87, $this->source); })()), "supplier", [], "any", false, false, false, 87), "phone", [], "any", false, false, false, 87), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 93, $this->source); })()), "user", [], "any", false, false, false, 93), "fullName", [], "any", false, false, false, 93), "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 111, $this->source); })()), "purchaseItems", [], "any", false, false, false, 111));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 112
            yield "                    ";
            $context["stockBatch"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["stock_batches"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 112), [], "array", true, true, false, 112) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["stock_batches"]) || array_key_exists("stock_batches", $context) ? $context["stock_batches"] : (function () { throw new RuntimeError('Variable "stock_batches" does not exist.', 112, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 112), [], "array", false, false, false, 112)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["stock_batches"]) || array_key_exists("stock_batches", $context) ? $context["stock_batches"] : (function () { throw new RuntimeError('Variable "stock_batches" does not exist.', 112, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 112), [], "array", false, false, false, 112)) : (null));
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
            $context['_seq'] = CoreExtension::ensureTraversable(((array_key_exists("supplier_credit_notes", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["supplier_credit_notes"]) || array_key_exists("supplier_credit_notes", $context) ? $context["supplier_credit_notes"] : (function () { throw new RuntimeError('Variable "supplier_credit_notes" does not exist.', 116, $this->source); })()), [])) : ([])));
            foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
                // line 117
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["note"], "stockBatch", [], "any", false, false, false, 117), "id", [], "any", false, false, false, 117) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["stockBatch"]) || array_key_exists("stockBatch", $context) ? $context["stockBatch"] : (function () { throw new RuntimeError('Variable "stockBatch" does not exist.', 117, $this->source); })()), "id", [], "any", false, false, false, 117))) {
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
            if ((($tmp = (isset($context["stockBatch"]) || array_key_exists("stockBatch", $context) ? $context["stockBatch"] : (function () { throw new RuntimeError('Variable "stockBatch" does not exist.', 132, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 133
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stockBatch"]) || array_key_exists("stockBatch", $context) ? $context["stockBatch"] : (function () { throw new RuntimeError('Variable "stockBatch" does not exist.', 133, $this->source); })()), "batchNumber", [], "any", false, false, false, 133), "html", null, true);
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
            if (((isset($context["stockBatch"]) || array_key_exists("stockBatch", $context) ? $context["stockBatch"] : (function () { throw new RuntimeError('Variable "stockBatch" does not exist.', 139, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["stockBatch"]) || array_key_exists("stockBatch", $context) ? $context["stockBatch"] : (function () { throw new RuntimeError('Variable "stockBatch" does not exist.', 139, $this->source); })()), "manufacturingDate", [], "any", false, false, false, 139))) {
                // line 140
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stockBatch"]) || array_key_exists("stockBatch", $context) ? $context["stockBatch"] : (function () { throw new RuntimeError('Variable "stockBatch" does not exist.', 140, $this->source); })()), "manufacturingDate", [], "any", false, false, false, 140), "d/m/Y"), "html", null, true);
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
            if (((isset($context["stockBatch"]) || array_key_exists("stockBatch", $context) ? $context["stockBatch"] : (function () { throw new RuntimeError('Variable "stockBatch" does not exist.', 148, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["stockBatch"]) || array_key_exists("stockBatch", $context) ? $context["stockBatch"] : (function () { throw new RuntimeError('Variable "stockBatch" does not exist.', 148, $this->source); })()), "expiryDate", [], "any", false, false, false, 148))) {
                // line 149
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stockBatch"]) || array_key_exists("stockBatch", $context) ? $context["stockBatch"] : (function () { throw new RuntimeError('Variable "stockBatch" does not exist.', 149, $this->source); })()), "expiryDate", [], "any", false, false, false, 149), "d/m/Y"), "html", null, true);
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
            if ((($tmp = (isset($context["hasIssue"]) || array_key_exists("hasIssue", $context) ? $context["hasIssue"] : (function () { throw new RuntimeError('Variable "hasIssue" does not exist.', 160, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
            if (((isset($context["hasIssue"]) || array_key_exists("hasIssue", $context) ? $context["hasIssue"] : (function () { throw new RuntimeError('Variable "hasIssue" does not exist.', 168, $this->source); })()) && (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 168, $this->source); })()))) {
                // line 169
                yield "                        <tr style=\"background-color: #fff3cd;\">
                            <td colspan=\"8\" style=\"padding: 6px 10px;\">
                                <div style=\"font-size: 9px; color: #856404;\">
                                    📝 <strong>Détail du problème :</strong>
                                    Type: ";
                // line 173
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 173, $this->source); })()), "issueTypeLabel", [], "any", false, false, false, 173), "html", null, true);
                yield " |
                                    Qté concernée: ";
                // line 174
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "affectedQuantity", [], "any", true, true, false, 174)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 174, $this->source); })()), "affectedQuantity", [], "any", false, false, false, 174), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 174))) : (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 174))), "html", null, true);
                yield " |
                                    Montant déduit: ";
                // line 175
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 175, $this->source); })()), "declaredAmount", [], "any", false, false, false, 175), CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 175, $this->source); })()), "hmaService", [], "any", false, false, false, 175)), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 185, $this->source); })()), "totalAmount", [], "any", false, false, false, 185), 0, ",", " "), "html", null, true);
        yield " FCFA</strong></td>
                </tr>
            </tfoot>
        </table>
    </div>

    <div class=\"total\">
        <p>💰 Montant total à régler : <strong>";
        // line 192
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 192, $this->source); })()), "totalAmount", [], "any", false, false, false, 192), 0, ",", " "), "html", null, true);
        yield " FCFA</strong></p>
        ";
        // line 193
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 193, $this->source); })()), "notes", [], "any", false, false, false, 193)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 194
            yield "            <p style=\"font-size: 10px;\">📝 Notes : ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 194, $this->source); })()), "notes", [], "any", false, false, false, 194), "html", null, true);
            yield "</p>
        ";
        }
        // line 196
        yield "    </div>

    <div class=\"signature\">
        <p>Bon pour réception,</p>
        <p><strong>";
        // line 200
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 200, $this->source); })()), "user", [], "any", false, false, false, 200), "fullName", [], "any", false, false, false, 200), "html", null, true);
        yield "</strong></p>
        <p>";
        // line 201
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 201, $this->source); })()), "receivedAt", [], "any", false, false, false, 201), "d/m/Y"), "html", null, true);
        yield "</p>
    </div>

    <div class=\"footer\">
        <p>Ce";
        
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
        return array (  407 => 201,  403 => 200,  397 => 196,  391 => 194,  389 => 193,  385 => 192,  375 => 185,  369 => 181,  363 => 180,  355 => 175,  351 => 174,  347 => 173,  341 => 169,  339 => 168,  334 => 165,  330 => 163,  326 => 161,  324 => 160,  319 => 158,  315 => 157,  311 => 156,  308 => 155,  304 => 153,  298 => 151,  296 => 150,  291 => 149,  289 => 148,  285 => 146,  281 => 144,  275 => 142,  273 => 141,  268 => 140,  266 => 139,  262 => 137,  256 => 135,  250 => 133,  248 => 132,  241 => 129,  235 => 127,  233 => 126,  229 => 125,  224 => 122,  218 => 121,  215 => 120,  212 => 119,  209 => 118,  206 => 117,  202 => 116,  199 => 115,  196 => 114,  193 => 113,  190 => 112,  186 => 111,  164 => 93,  158 => 89,  153 => 87,  149 => 86,  144 => 85,  141 => 84,  134 => 79,  130 => 78,  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Reçu d'achat {{ purchase.purchaseNumber }}</title>
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
        <p><strong>N° {{ purchase.purchaseNumber }}</strong></p>
        <p>Date de réception : <strong>{{ purchase.receivedAt|date('d/m/Y H:i') }}</strong></p>
    </div>

    <div class=\"info\">
        {# ✅ Fournisseur optionnel #}
        {% if purchase.supplier %}
            <p><strong>🏢 Fournisseur :</strong> {{ purchase.supplier.name }}</p>
            <p><strong>📧 Email :</strong> {{ purchase.supplier.email }}</p>
            <p><strong>📞 Téléphone :</strong> {{ purchase.supplier.phone }}</p>
        {% else %}
            <div class=\"no-supplier\">
                <strong>🏢 Achat interne</strong> — aucun fournisseur associé
            </div>
        {% endif %}
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
        <p>Ce", "pdf/recu_achat.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\pdf\\recu_achat.html.twig");
    }
}
