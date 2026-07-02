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
class __TwigTemplate_d683b7c0ca8c5667d23d950c4fb079c0 extends Template
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
    <title>Confirmation de réception - Commande ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "purchaseNumber", [], "any", false, false, false, 5), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "supplier", [], "any", false, false, false, 62), "name", [], "any", false, false, false, 62), "html", null, true);
        yield "</strong>,</p>
        <p>Nous vous informons que la commande <strong>";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "purchaseNumber", [], "any", false, false, false, 63), "html", null, true);
        yield "</strong> a été réceptionnée avec succès.</p>

        <h2>📋 Détails de la commande</h2>
        <p><strong>Date de réception :</strong> ";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "receivedAt", [], "any", false, false, false, 66), "d/m/Y H:i"), "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "purchaseItems", [], "any", false, false, false, 80));
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
            $context['_seq'] = CoreExtension::ensureTraversable(((array_key_exists("supplier_credit_notes", $context)) ? (Twig\Extension\CoreExtension::default(($context["supplier_credit_notes"] ?? null), [])) : ([])));
            foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
                // line 93
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["note"], "stockBatch", [], "any", false, false, false, 93), "id", [], "any", false, false, false, 93) == CoreExtension::getAttribute($this->env, $this->source, ($context["stockBatch"] ?? null), "id", [], "any", false, false, false, 93))) {
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
            if ((($tmp = ($context["hasIssue"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
            if ((($tmp = ($context["stockBatch"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 107
                yield "                                    <span>🏷️ Lot: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stockBatch"] ?? null), "batchNumber", [], "any", false, false, false, 107), "html", null, true);
                yield "</span>
                                    ";
                // line 108
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["stockBatch"] ?? null), "manufacturingDate", [], "any", false, false, false, 108)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 109
                    yield "                                        <span>🏭 Fabrication: ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["stockBatch"] ?? null), "manufacturingDate", [], "any", false, false, false, 109), "d/m/Y"), "html", null, true);
                    yield "</span>
                                    ";
                }
                // line 111
                yield "                                    ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["stockBatch"] ?? null), "expiryDate", [], "any", false, false, false, 111)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 112
                    yield "                                        <span>⏰ Expiration: ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["stockBatch"] ?? null), "expiryDate", [], "any", false, false, false, 112), "d/m/Y"), "html", null, true);
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
            if ((($tmp = ($context["hasIssue"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
            if ((($context["hasIssue"] ?? null) && ($context["creditNote"] ?? null))) {
                // line 131
                yield "                        <tr class=\"problem-row\">
                            <td colspan=\"5\" style=\"background-color: #fff3cd; padding: 12px;\">
                                <div class=\"credit-note-info\">
                                    <strong>📝 Détail du problème :</strong><br>
                                    • <strong>Type :</strong> ";
                // line 135
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "issueTypeLabel", [], "any", false, false, false, 135), "html", null, true);
                yield "<br>
                                    • <strong>Quantité concernée :</strong> ";
                // line 136
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "affectedQuantity", [], "any", true, true, false, 136)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "affectedQuantity", [], "any", false, false, false, 136), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 136))) : (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 136))), "html", null, true);
                yield " unité(s)<br>
                                    • <strong>Montant déduit :</strong> ";
                // line 137
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "declaredAmount", [], "any", false, false, false, 137), CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "hmaService", [], "any", false, false, false, 137)), "html", null, true);
                yield "<br>
                                    • <strong>Description :</strong> ";
                // line 138
                yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "description", [], "any", false, false, false, 138), "html", null, true));
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
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ((array_key_exists("supplier_credit_notes", $context)) ? (Twig\Extension\CoreExtension::default(($context["supplier_credit_notes"] ?? null), [])) : ([]))) > 0)) {
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
            $context['_seq'] = CoreExtension::ensureTraversable(($context["supplier_credit_notes"] ?? null));
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
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["creditNote"], "declaredAmount", [], "any", false, false, false, 168), CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "hmaService", [], "any", false, false, false, 168)), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "totalAmount", [], "any", false, false, false, 178), 0, ",", " "), "html", null, true);
        yield " FCFA</p>
            ";
        // line 179
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ((array_key_exists("supplier_credit_notes", $context)) ? (Twig\Extension\CoreExtension::default(($context["supplier_credit_notes"] ?? null), [])) : ([]))) > 0)) {
            // line 180
            yield "                <p style=\"margin: 5px 0; color: #dc3545;\"><strong>➖ Montant déduit :</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((array_key_exists("total_deducted", $context)) ? (Twig\Extension\CoreExtension::default(($context["total_deducted"] ?? null), 0)) : (0)), 0, ",", " "), "html", null, true);
            yield " FCFA</p>
                <p style=\"margin: 5px 0; font-size: 18px;\"><strong>✅ Montant net à régler :</strong> ";
            // line 181
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((array_key_exists("net_amount", $context)) ? (Twig\Extension\CoreExtension::default(($context["net_amount"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "totalAmount", [], "any", false, false, false, 181))) : (CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "totalAmount", [], "any", false, false, false, 181))), 0, ",", " "), "html", null, true);
            yield " FCFA</p>
            ";
        } else {
            // line 183
            yield "                <p style=\"margin: 5px 0; font-size: 18px;\"><strong>✅ Montant total :</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "totalAmount", [], "any", false, false, false, 183), 0, ",", " "), "html", null, true);
            yield " FCFA</p>
            ";
        }
        // line 185
        yield "        </div>

        <div style=\"margin: 20px 0; text-align: center;\">
            <p>Nous vous remercions pour votre service et votre réactivité.</p>
            <p>Cordialement,<br><strong>";
        // line 189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "hmaService", [], "any", false, false, false, 189), "companyName", [], "any", false, false, false, 189), "html", null, true);
        yield "</strong></p>
        </div>
        
        <div class=\"footer\">
            <p>📧 Pour toute question, contactez-nous à <a href=\"mailto:";
        // line 193
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("support_email", $context)) ? (Twig\Extension\CoreExtension::default(($context["support_email"] ?? null), "support@hma-market.com")) : ("support@hma-market.com")), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("support_email", $context)) ? (Twig\Extension\CoreExtension::default(($context["support_email"] ?? null), "support@hma-market.com")) : ("support@hma-market.com")), "html", null, true);
        yield "</a></p>
            <p>🌐 Découvrez nos produits sur <a href=\"";
        // line 194
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["app_url"] ?? null), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["app_url"] ?? null), "html", null, true);
        yield "</a></p>
            <p>📄 Ce message est un accusé de réception automatique.</p>
        </div>
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
        return array (  421 => 194,  415 => 193,  408 => 189,  402 => 185,  396 => 183,  391 => 181,  386 => 180,  384 => 179,  380 => 178,  375 => 175,  369 => 171,  360 => 168,  356 => 167,  352 => 166,  348 => 165,  344 => 164,  341 => 163,  337 => 162,  322 => 149,  320 => 148,  314 => 144,  308 => 143,  300 => 138,  296 => 137,  292 => 136,  288 => 135,  282 => 131,  279 => 130,  274 => 126,  270 => 124,  266 => 122,  264 => 121,  259 => 119,  255 => 118,  251 => 117,  247 => 115,  244 => 114,  238 => 112,  235 => 111,  229 => 109,  227 => 108,  222 => 107,  219 => 106,  213 => 104,  211 => 103,  206 => 101,  199 => 99,  196 => 98,  190 => 97,  187 => 96,  184 => 95,  181 => 94,  178 => 93,  173 => 92,  170 => 91,  167 => 90,  164 => 88,  158 => 87,  155 => 86,  152 => 85,  149 => 84,  144 => 83,  141 => 82,  139 => 81,  135 => 80,  118 => 66,  112 => 63,  108 => 62,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "emails/purchase_received.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\emails\\purchase_received.html.twig");
    }
}
