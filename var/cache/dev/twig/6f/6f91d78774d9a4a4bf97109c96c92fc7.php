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

/* emails/purchase_received.html.twig */
class __TwigTemplate_93828767f0a6c7ab3ddea93ba1c465f3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/purchase_received.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/purchase_received.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Confirmation de réception - Commande ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 5, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 5), "html", null, true);
        yield "</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 800px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-radius: 5px; }
        h1 { color: #0463f1; }
        h2 { color: #333; font-size: 18px; margin-top: 20px; }
        .total { font-size: 18px; font-weight: bold; color: #0463f1; }
        .footer { margin-top: 30px; font-size: 12px; color: #777; text-align: center; border-top: 1px solid #eee; padding-top: 15px; }
        table { width: 100%; border-collapse: collapse; margin: 15px 0; }
        th, td { border: 1px solid #ddd; padding: 12px 8px; text-align: left; vertical-align: top; }
        th { background-color: #f2f2f2; font-weight: bold; }
        .product-details { font-size: 0.85em; color: #555; margin-top: 5px; }
        .product-details span { display: block; margin: 2px 0; }
        .problem-row { background-color: #fff3cd; }
        .problem-badge {
            display: inline-block;
            background-color: #dc3545;
            color: white;
            font-size: 0.7rem;
            padding: 3px 8px;
            border-radius: 4px;
        }
        .ok-badge {
            display: inline-block;
            background-color: #28a745;
            color: white;
            font-size: 0.7rem;
            padding: 3px 8px;
            border-radius: 4px;
        }
        .credit-note-info {
            background-color: #f8f9fa;
            border-left: 4px solid #dc3545;
            padding: 12px;
            margin: 5px 0;
            font-size: 0.9em;
        }
        .summary-box {
            background-color: #fff3cd;
            border: 1px solid #ffeeba;
            border-radius: 5px;
            padding: 15px;
            margin: 15px 0;
        }
        .date-info {
            font-size: 0.8em;
            color: #666;
            margin-top: 5px;
        }
        @media (max-width: 600px) {
            th, td { padding: 8px 6px; font-size: 0.85em; }
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <h1>✅ Confirmation de réception</h1>
        <p>Bonjour <strong>";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 62, $this->source); })()), "supplier", [], "any", false, false, false, 62), "name", [], "any", false, false, false, 62), "html", null, true);
        yield "</strong>,</p>
        <p>Nous vous informons que la commande <strong>";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 63, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 63), "html", null, true);
        yield "</strong> a été réceptionnée avec succès.</p>

        <h2>📋 Détails de la commande</h2>
        <p><strong>Date de réception :</strong> ";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 66, $this->source); })()), "receivedAt", [], "any", false, false, false, 66), "d/m/Y H:i"), "html", null, true);
        yield "</p>

        <!-- Tableau principal -->
        <table>
            <thead>
                <tr>
                    <th style=\"width: 35%\">Produit</th>
                    <th style=\"width: 15%\">Quantité</th>
                    <th style=\"width: 20%\">Prix unitaire</th>
                    <th style=\"width: 20%\">Total</th>
                    <th style=\"width: 10%\">Statut</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 80, $this->source); })()), "purchaseItems", [], "any", false, false, false, 80));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 81
            yield "                    ";
            // line 82
            yield "                    ";
            $context["stockBatch"] = null;
            // line 83
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 83), "stockBatches", [], "any", false, false, false, 83));
            foreach ($context['_seq'] as $context["_key"] => $context["batch"]) {
                // line 84
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "purchaseItemId", [], "any", false, false, false, 84) == CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 84))) {
                    // line 85
                    yield "                            ";
                    $context["stockBatch"] = $context["batch"];
                    // line 86
                    yield "                        ";
                }
                // line 87
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['batch'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            yield "                    
                    ";
            // line 90
            yield "                    ";
            $context["hasIssue"] = false;
            // line 91
            yield "                    ";
            $context["creditNote"] = null;
            // line 92
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(((array_key_exists("supplier_credit_notes", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["supplier_credit_notes"]) || array_key_exists("supplier_credit_notes", $context) ? $context["supplier_credit_notes"] : (function () { throw new RuntimeError('Variable "supplier_credit_notes" does not exist.', 92, $this->source); })()), [])) : ([])));
            foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
                // line 93
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["note"], "stockBatch", [], "any", false, false, false, 93), "id", [], "any", false, false, false, 93) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["stockBatch"]) || array_key_exists("stockBatch", $context) ? $context["stockBatch"] : (function () { throw new RuntimeError('Variable "stockBatch" does not exist.', 93, $this->source); })()), "id", [], "any", false, false, false, 93))) {
                    // line 94
                    yield "                            ";
                    $context["hasIssue"] = true;
                    // line 95
                    yield "                            ";
                    $context["creditNote"] = $context["note"];
                    // line 96
                    yield "                        ";
                }
                // line 97
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['note'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            yield "                    
                    <tr ";
            // line 99
            if ((($tmp = (isset($context["hasIssue"]) || array_key_exists("hasIssue", $context) ? $context["hasIssue"] : (function () { throw new RuntimeError('Variable "hasIssue" does not exist.', 99, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "class=\"problem-row\"";
            }
            yield ">
                        <td>
                            <strong>";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 101), "name", [], "any", false, false, false, 101), "html", null, true);
            yield "</strong>
                            <div class=\"product-details\">
                                ";
            // line 103
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 103), "barcode", [], "any", false, false, false, 103)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 104
                yield "                                    <span>📦 Code: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 104), "barcode", [], "any", false, false, false, 104), "html", null, true);
                yield "</span>
                                ";
            }
            // line 106
            yield "                                ";
            if ((($tmp = (isset($context["stockBatch"]) || array_key_exists("stockBatch", $context) ? $context["stockBatch"] : (function () { throw new RuntimeError('Variable "stockBatch" does not exist.', 106, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 107
                yield "                                    <span>🏷️ Lot: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stockBatch"]) || array_key_exists("stockBatch", $context) ? $context["stockBatch"] : (function () { throw new RuntimeError('Variable "stockBatch" does not exist.', 107, $this->source); })()), "batchNumber", [], "any", false, false, false, 107), "html", null, true);
                yield "</span>
                                    ";
                // line 108
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["stockBatch"]) || array_key_exists("stockBatch", $context) ? $context["stockBatch"] : (function () { throw new RuntimeError('Variable "stockBatch" does not exist.', 108, $this->source); })()), "manufacturingDate", [], "any", false, false, false, 108)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 109
                    yield "                                        <span>🏭 Fabrication: ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stockBatch"]) || array_key_exists("stockBatch", $context) ? $context["stockBatch"] : (function () { throw new RuntimeError('Variable "stockBatch" does not exist.', 109, $this->source); })()), "manufacturingDate", [], "any", false, false, false, 109), "d/m/Y"), "html", null, true);
                    yield "</span>
                                    ";
                }
                // line 111
                yield "                                    ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["stockBatch"]) || array_key_exists("stockBatch", $context) ? $context["stockBatch"] : (function () { throw new RuntimeError('Variable "stockBatch" does not exist.', 111, $this->source); })()), "expiryDate", [], "any", false, false, false, 111)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 112
                    yield "                                        <span>⏰ Expiration: ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stockBatch"]) || array_key_exists("stockBatch", $context) ? $context["stockBatch"] : (function () { throw new RuntimeError('Variable "stockBatch" does not exist.', 112, $this->source); })()), "expiryDate", [], "any", false, false, false, 112), "d/m/Y"), "html", null, true);
                    yield "</span>
                                    ";
                }
                // line 114
                yield "                                ";
            }
            // line 115
            yield "                            </div>
                        </td>
                        <td style=\"text-align: center\">";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 117), "html", null, true);
            yield "</td>
                        <td style=\"text-align: right\">";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 118), 0, ",", " "), "html", null, true);
            yield " FCFA</td>
                        <td style=\"text-align: right\"><strong>";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "totalPrice", [], "any", false, false, false, 119), 0, ",", " "), "html", null, true);
            yield " FCFA</strong></td>
                        <td style=\"text-align: center\">
                            ";
            // line 121
            if ((($tmp = (isset($context["hasIssue"]) || array_key_exists("hasIssue", $context) ? $context["hasIssue"] : (function () { throw new RuntimeError('Variable "hasIssue" does not exist.', 121, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 122
                yield "                                <span class=\"problem-badge\">⚠️ Problème</span>
                            ";
            } else {
                // line 124
                yield "                                <span class=\"ok-badge\">✓ OK</span>
                            ";
            }
            // line 126
            yield "                        </td>
                    </tr>
                    
                    ";
            // line 130
            yield "                    ";
            if (((isset($context["hasIssue"]) || array_key_exists("hasIssue", $context) ? $context["hasIssue"] : (function () { throw new RuntimeError('Variable "hasIssue" does not exist.', 130, $this->source); })()) && (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 130, $this->source); })()))) {
                // line 131
                yield "                        <tr class=\"problem-row\">
                            <td colspan=\"5\" style=\"background-color: #fff3cd; padding: 12px;\">
                                <div class=\"credit-note-info\">
                                    <strong>📝 Détail du problème :</strong><br>
                                    • <strong>Type :</strong> ";
                // line 135
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 135, $this->source); })()), "issueTypeLabel", [], "any", false, false, false, 135), "html", null, true);
                yield "<br>
                                    • <strong>Quantité concernée :</strong> ";
                // line 136
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "affectedQuantity", [], "any", true, true, false, 136)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 136, $this->source); })()), "affectedQuantity", [], "any", false, false, false, 136), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 136))) : (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 136))), "html", null, true);
                yield " unité(s)<br>
                                    • <strong>Montant déduit :</strong> ";
                // line 137
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 137, $this->source); })()), "declaredAmount", [], "any", false, false, false, 137), CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 137, $this->source); })()), "hmaService", [], "any", false, false, false, 137)), "html", null, true);
                yield "<br>
                                    • <strong>Description :</strong> ";
                // line 138
                yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["creditNote"]) || array_key_exists("creditNote", $context) ? $context["creditNote"] : (function () { throw new RuntimeError('Variable "creditNote" does not exist.', 138, $this->source); })()), "description", [], "any", false, false, false, 138), "html", null, true));
                yield "
                                </div>
                            </td>
                        </tr>
                    ";
            }
            // line 143
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        yield "            </tbody>
        </table>

        <!-- Récapitulatif des montants -->
        ";
        // line 148
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ((array_key_exists("supplier_credit_notes", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["supplier_credit_notes"]) || array_key_exists("supplier_credit_notes", $context) ? $context["supplier_credit_notes"] : (function () { throw new RuntimeError('Variable "supplier_credit_notes" does not exist.', 148, $this->source); })()), [])) : ([]))) > 0)) {
            // line 149
            yield "            <div class=\"summary-box\">
                <h3>⚠️ Récapitulatif des problèmes signalés</h3>
                <table style=\"width: 100%; margin: 0; background: white;\">
                    <thead>
                        <tr>
                            <th>Produit concerné</th>
                            <th>Lot</th>
                            <th>Type</th>
                            <th>Quantité</th>
                            <th>Montant déduit</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 162
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["supplier_credit_notes"]) || array_key_exists("supplier_credit_notes", $context) ? $context["supplier_credit_notes"] : (function () { throw new RuntimeError('Variable "supplier_credit_notes" does not exist.', 162, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["creditNote"]) {
                // line 163
                yield "                            <tr>
                                <td>";
                // line 164
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "stockBatch", [], "any", false, false, false, 164), "product", [], "any", false, false, false, 164), "name", [], "any", false, false, false, 164), "html", null, true);
                yield "</td>
                                <td>";
                // line 165
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "stockBatch", [], "any", false, false, false, 165), "batchNumber", [], "any", false, false, false, 165), "html", null, true);
                yield "</td>
                                <td>";
                // line 166
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "issueTypeLabel", [], "any", false, false, false, 166), "html", null, true);
                yield "</td>
                                <td>";
                // line 167
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "affectedQuantity", [], "any", true, true, false, 167)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "affectedQuantity", [], "any", false, false, false, 167), 0)) : (0)), "html", null, true);
                yield " unité(s)</td>
                                <td>";
                // line 168
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "declaredAmount", [], "any", false, false, false, 168), CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 168, $this->source); })()), "hmaService", [], "any", false, false, false, 168)), "html", null, true);
                yield "</td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['creditNote'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 171
            yield "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 175
        yield "
        <!-- Récapitulatif final des montants -->
        <div style=\"background-color: #e8f4f8; border-radius: 5px; padding: 15px; margin: 15px 0; text-align: center;\">
            <p style=\"margin: 5px 0;\"><strong>💰 Total TTC initial :</strong> ";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 178, $this->source); })()), "totalAmount", [], "any", false, false, false, 178), 0, ",", " "), "html", null, true);
        yield " FCFA</p>
            ";
        // line 179
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ((array_key_exists("supplier_credit_notes", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["supplier_credit_notes"]) || array_key_exists("supplier_credit_notes", $context) ? $context["supplier_credit_notes"] : (function () { throw new RuntimeError('Variable "supplier_credit_notes" does not exist.', 179, $this->source); })()), [])) : ([]))) > 0)) {
            // line 180
            yield "                <p style=\"margin: 5px 0; color: #dc3545;\"><strong>➖ Montant déduit :</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((array_key_exists("total_deducted", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["total_deducted"]) || array_key_exists("total_deducted", $context) ? $context["total_deducted"] : (function () { throw new RuntimeError('Variable "total_deducted" does not exist.', 180, $this->source); })()), 0)) : (0)), 0, ",", " "), "html", null, true);
            yield " FCFA</p>
                <p style=\"margin: 5px 0; font-size: 18px;\"><strong>✅ Montant net à régler :</strong> ";
            // line 181
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((array_key_exists("net_amount", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["net_amount"]) || array_key_exists("net_amount", $context) ? $context["net_amount"] : (function () { throw new RuntimeError('Variable "net_amount" does not exist.', 181, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 181, $this->source); })()), "totalAmount", [], "any", false, false, false, 181))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 181, $this->source); })()), "totalAmount", [], "any", false, false, false, 181))), 0, ",", " "), "html", null, true);
            yield " FCFA</p>
            ";
        } else {
            // line 183
            yield "                <p style=\"margin: 5px 0; font-size: 18px;\"><strong>✅ Montant total :</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 183, $this->source); })()), "totalAmount", [], "any", false, false, false, 183), 0, ",", " "), "html", null, true);
            yield " FCFA</p>
            ";
        }
        // line 185
        yield "        </div>

        <div style=\"margin: 20px 0; text-align: center;\">
            <p>Nous vous remercions pour votre service et votre réactivité.</p>
            <p>Cordialement,<br><strong>";
        // line 189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 189, $this->source); })()), "hmaService", [], "any", false, false, false, 189), "companyName", [], "any", false, false, false, 189), "html", null, true);
        yield "</strong></p>
        </div>
        
        <div class=\"footer\">
            <p>📧 Pour toute question, contactez-nous à <a href=\"mailto:";
        // line 193
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("support_email", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["support_email"]) || array_key_exists("support_email", $context) ? $context["support_email"] : (function () { throw new RuntimeError('Variable "support_email" does not exist.', 193, $this->source); })()), "support@hma-market.com")) : ("support@hma-market.com")), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("support_email", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["support_email"]) || array_key_exists("support_email", $context) ? $context["support_email"] : (function () { throw new RuntimeError('Variable "support_email" does not exist.', 193, $this->source); })()), "support@hma-market.com")) : ("support@hma-market.com")), "html", null, true);
        yield "</a></p>
            <p>🌐 Découvrez nos produits sur <a href=\"";
        // line 194
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["app_url"]) || array_key_exists("app_url", $context) ? $context["app_url"] : (function () { throw new RuntimeError('Variable "app_url" does not exist.', 194, $this->source); })()), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["app_url"]) || array_key_exists("app_url", $context) ? $context["app_url"] : (function () { throw new RuntimeError('Variable "app_url" does not exist.', 194, $this->source); })()), "html", null, true);
        yield "</a></p>
            <p>📄 Ce message est un accusé de réception automatique.</p>
        </div>
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
        return "emails/purchase_received.html.twig";
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
        return array (  427 => 194,  421 => 193,  414 => 189,  408 => 185,  402 => 183,  397 => 181,  392 => 180,  390 => 179,  386 => 178,  381 => 175,  375 => 171,  366 => 168,  362 => 167,  358 => 166,  354 => 165,  350 => 164,  347 => 163,  343 => 162,  328 => 149,  326 => 148,  320 => 144,  314 => 143,  306 => 138,  302 => 137,  298 => 136,  294 => 135,  288 => 131,  285 => 130,  280 => 126,  276 => 124,  272 => 122,  270 => 121,  265 => 119,  261 => 118,  257 => 117,  253 => 115,  250 => 114,  244 => 112,  241 => 111,  235 => 109,  233 => 108,  228 => 107,  225 => 106,  219 => 104,  217 => 103,  212 => 101,  205 => 99,  202 => 98,  196 => 97,  193 => 96,  190 => 95,  187 => 94,  184 => 93,  179 => 92,  176 => 91,  173 => 90,  170 => 88,  164 => 87,  161 => 86,  158 => 85,  155 => 84,  150 => 83,  147 => 82,  145 => 81,  141 => 80,  124 => 66,  118 => 63,  114 => 62,  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Confirmation de réception - Commande {{ purchase.purchaseNumber }}</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 800px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-radius: 5px; }
        h1 { color: #0463f1; }
        h2 { color: #333; font-size: 18px; margin-top: 20px; }
        .total { font-size: 18px; font-weight: bold; color: #0463f1; }
        .footer { margin-top: 30px; font-size: 12px; color: #777; text-align: center; border-top: 1px solid #eee; padding-top: 15px; }
        table { width: 100%; border-collapse: collapse; margin: 15px 0; }
        th, td { border: 1px solid #ddd; padding: 12px 8px; text-align: left; vertical-align: top; }
        th { background-color: #f2f2f2; font-weight: bold; }
        .product-details { font-size: 0.85em; color: #555; margin-top: 5px; }
        .product-details span { display: block; margin: 2px 0; }
        .problem-row { background-color: #fff3cd; }
        .problem-badge {
            display: inline-block;
            background-color: #dc3545;
            color: white;
            font-size: 0.7rem;
            padding: 3px 8px;
            border-radius: 4px;
        }
        .ok-badge {
            display: inline-block;
            background-color: #28a745;
            color: white;
            font-size: 0.7rem;
            padding: 3px 8px;
            border-radius: 4px;
        }
        .credit-note-info {
            background-color: #f8f9fa;
            border-left: 4px solid #dc3545;
            padding: 12px;
            margin: 5px 0;
            font-size: 0.9em;
        }
        .summary-box {
            background-color: #fff3cd;
            border: 1px solid #ffeeba;
            border-radius: 5px;
            padding: 15px;
            margin: 15px 0;
        }
        .date-info {
            font-size: 0.8em;
            color: #666;
            margin-top: 5px;
        }
        @media (max-width: 600px) {
            th, td { padding: 8px 6px; font-size: 0.85em; }
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <h1>✅ Confirmation de réception</h1>
        <p>Bonjour <strong>{{ purchase.supplier.name }}</strong>,</p>
        <p>Nous vous informons que la commande <strong>{{ purchase.purchaseNumber }}</strong> a été réceptionnée avec succès.</p>

        <h2>📋 Détails de la commande</h2>
        <p><strong>Date de réception :</strong> {{ purchase.receivedAt|date('d/m/Y H:i') }}</p>

        <!-- Tableau principal -->
        <table>
            <thead>
                <tr>
                    <th style=\"width: 35%\">Produit</th>
                    <th style=\"width: 15%\">Quantité</th>
                    <th style=\"width: 20%\">Prix unitaire</th>
                    <th style=\"width: 20%\">Total</th>
                    <th style=\"width: 10%\">Statut</th>
                </tr>
            </thead>
            <tbody>
                {% for item in purchase.purchaseItems %}
                    {# Récupérer le stock batch associé #}
                    {% set stockBatch = null %}
                    {% for batch in item.product.stockBatches %}
                        {% if batch.purchaseItemId == item.id %}
                            {% set stockBatch = batch %}
                        {% endif %}
                    {% endfor %}
                    
                    {# Vérifier si un problème a été signalé #}
                    {% set hasIssue = false %}
                    {% set creditNote = null %}
                    {% for note in supplier_credit_notes|default([]) %}
                        {% if note.stockBatch.id == stockBatch.id %}
                            {% set hasIssue = true %}
                            {% set creditNote = note %}
                        {% endif %}
                    {% endfor %}
                    
                    <tr {% if hasIssue %}class=\"problem-row\"{% endif %}>
                        <td>
                            <strong>{{ item.product.name }}</strong>
                            <div class=\"product-details\">
                                {% if item.product.barcode %}
                                    <span>📦 Code: {{ item.product.barcode }}</span>
                                {% endif %}
                                {% if stockBatch %}
                                    <span>🏷️ Lot: {{ stockBatch.batchNumber }}</span>
                                    {% if stockBatch.manufacturingDate %}
                                        <span>🏭 Fabrication: {{ stockBatch.manufacturingDate|date('d/m/Y') }}</span>
                                    {% endif %}
                                    {% if stockBatch.expiryDate %}
                                        <span>⏰ Expiration: {{ stockBatch.expiryDate|date('d/m/Y') }}</span>
                                    {% endif %}
                                {% endif %}
                            </div>
                        </td>
                        <td style=\"text-align: center\">{{ item.quantity }}</td>
                        <td style=\"text-align: right\">{{ item.unitPrice|number_format(0, ',', ' ') }} FCFA</td>
                        <td style=\"text-align: right\"><strong>{{ item.totalPrice|number_format(0, ',', ' ') }} FCFA</strong></td>
                        <td style=\"text-align: center\">
                            {% if hasIssue %}
                                <span class=\"problem-badge\">⚠️ Problème</span>
                            {% else %}
                                <span class=\"ok-badge\">✓ OK</span>
                            {% endif %}
                        </td>
                    </tr>
                    
                    {# Afficher les détails du problème si existant #}
                    {% if hasIssue and creditNote %}
                        <tr class=\"problem-row\">
                            <td colspan=\"5\" style=\"background-color: #fff3cd; padding: 12px;\">
                                <div class=\"credit-note-info\">
                                    <strong>📝 Détail du problème :</strong><br>
                                    • <strong>Type :</strong> {{ creditNote.issueTypeLabel }}<br>
                                    • <strong>Quantité concernée :</strong> {{ creditNote.affectedQuantity|default(item.quantity) }} unité(s)<br>
                                    • <strong>Montant déduit :</strong> {{ creditNote.declaredAmount|price_with_currency(purchase.hmaService) }}<br>
                                    • <strong>Description :</strong> {{ creditNote.description|nl2br }}
                                </div>
                            </td>
                        </tr>
                    {% endif %}
                {% endfor %}
            </tbody>
        </table>

        <!-- Récapitulatif des montants -->
        {% if supplier_credit_notes|default([])|length > 0 %}
            <div class=\"summary-box\">
                <h3>⚠️ Récapitulatif des problèmes signalés</h3>
                <table style=\"width: 100%; margin: 0; background: white;\">
                    <thead>
                        <tr>
                            <th>Produit concerné</th>
                            <th>Lot</th>
                            <th>Type</th>
                            <th>Quantité</th>
                            <th>Montant déduit</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for creditNote in supplier_credit_notes %}
                            <tr>
                                <td>{{ creditNote.stockBatch.product.name }}</td>
                                <td>{{ creditNote.stockBatch.batchNumber }}</td>
                                <td>{{ creditNote.issueTypeLabel }}</td>
                                <td>{{ creditNote.affectedQuantity|default(0) }} unité(s)</td>
                                <td>{{ creditNote.declaredAmount|price_with_currency(purchase.hmaService) }}</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        {% endif %}

        <!-- Récapitulatif final des montants -->
        <div style=\"background-color: #e8f4f8; border-radius: 5px; padding: 15px; margin: 15px 0; text-align: center;\">
            <p style=\"margin: 5px 0;\"><strong>💰 Total TTC initial :</strong> {{ purchase.totalAmount|number_format(0, ',', ' ') }} FCFA</p>
            {% if supplier_credit_notes|default([])|length > 0 %}
                <p style=\"margin: 5px 0; color: #dc3545;\"><strong>➖ Montant déduit :</strong> {{ total_deducted|default(0)|number_format(0, ',', ' ') }} FCFA</p>
                <p style=\"margin: 5px 0; font-size: 18px;\"><strong>✅ Montant net à régler :</strong> {{ net_amount|default(purchase.totalAmount)|number_format(0, ',', ' ') }} FCFA</p>
            {% else %}
                <p style=\"margin: 5px 0; font-size: 18px;\"><strong>✅ Montant total :</strong> {{ purchase.totalAmount|number_format(0, ',', ' ') }} FCFA</p>
            {% endif %}
        </div>

        <div style=\"margin: 20px 0; text-align: center;\">
            <p>Nous vous remercions pour votre service et votre réactivité.</p>
            <p>Cordialement,<br><strong>{{ purchase.hmaService.companyName }}</strong></p>
        </div>
        
        <div class=\"footer\">
            <p>📧 Pour toute question, contactez-nous à <a href=\"mailto:{{ support_email|default('support@hma-market.com') }}\">{{ support_email|default('support@hma-market.com') }}</a></p>
            <p>🌐 Découvrez nos produits sur <a href=\"{{ app_url }}\">{{ app_url }}</a></p>
            <p>📄 Ce message est un accusé de réception automatique.</p>
        </div>
    </div>
</body>
</html>", "emails/purchase_received.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\emails\\purchase_received.html.twig");
    }
}
