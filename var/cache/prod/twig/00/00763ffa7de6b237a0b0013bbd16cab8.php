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

/* purchase/print.html.twig */
class __TwigTemplate_7f04cbe981b5d0443769d7cf7db1206d extends Template
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
    <title>Commande ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "purchaseNumber", [], "any", false, false, false, 6), "html", null, true);
        yield "</title>
    <style>
        /* Reset et styles de base */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'DejaVu Sans', 'Arial', sans-serif;
            font-size: 12pt;
            line-height: 1.4;
            color: #000;
            background: #fff;
            padding: 2cm;
        }
        .print-container {
            max-width: 100%;
            margin: 0 auto;
        }
        /* En-tête */
        .header {
            text-align: center;
            margin-bottom: 2rem;
            border-bottom: 2px solid #333;
            padding-bottom: 1rem;
        }
        .company-name {
            font-size: 1.8rem;
            font-weight: bold;
            margin-bottom: 0.25rem;
        }
        .document-title {
            font-size: 1.4rem;
            font-weight: bold;
            margin-top: 0.5rem;
        }
        /* Informations */
        .info-section {
            display: flex;
            justify-content: space-between;
            margin-bottom: 2rem;
            flex-wrap: wrap;
        }
        .info-block {
            width: 45%;
            margin-bottom: 1rem;
        }
        .info-block h3 {
            font-size: 1rem;
            margin-bottom: 0.5rem;
            border-bottom: 1px solid #ccc;
            padding-bottom: 0.25rem;
        }
        .info-block p {
            margin: 0.25rem 0;
        }
        /* Tableau des produits */
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 1.5rem 0;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
            vertical-align: top;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        .text-right {
            text-align: right;
        }
        .total-row {
            font-weight: bold;
            background-color: #f9f9f9;
        }
        /* Pied de page */
        .footer {
            margin-top: 3rem;
            text-align: center;
            font-size: 9pt;
            border-top: 1px solid #ccc;
            padding-top: 1rem;
        }
        /* Notes */
        .notes {
            margin-top: 1.5rem;
            border: 1px solid #eee;
            padding: 0.75rem;
            background: #fafafa;
        }
        /* Signature (optionnel) */
        .signature {
            margin-top: 2rem;
            display: flex;
            justify-content: space-between;
        }
        .signature-line {
            width: 200px;
            border-top: 1px solid #000;
            margin-top: 2rem;
            text-align: center;
        }
        @media print {
            body {
                padding: 0;
                margin: 0;
            }
            .no-print {
                display: none;
            }
            th {
                background-color: #f2f2f2 !important;
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }
        }
    </style>
</head>
<body>
    <div class=\"print-container\">
        <!-- En-tête -->
        <div class=\"header\">
            <div class=\"company-name\">";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "hmaService", [], "any", false, false, false, 133), "companyName", [], "any", false, false, false, 133), "html", null, true);
        yield "</div>
            <div class=\"document-title\">
                ";
        // line 135
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "status", [], "any", false, false, false, 135) == "confirmed")) {
            // line 136
            yield "                    Bon de commande
                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 137
($context["purchase"] ?? null), "status", [], "any", false, false, false, 137) == "received")) {
            // line 138
            yield "                    Reçu d'achat
                ";
        } else {
            // line 140
            yield "                    Commande
                ";
        }
        // line 142
        yield "            </div>
        </div>

        <!-- Informations -->
        <div class=\"info-section\">
            <div class=\"info-block\">
                <h3>Informations commande</h3>
                <p><strong>N° commande :</strong> ";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "purchaseNumber", [], "any", false, false, false, 149), "html", null, true);
        yield "</p>
                <p><strong>Date de création :</strong> ";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "createdAt", [], "any", false, false, false, 150), "d/m/Y H:i"), "html", null, true);
        yield "</p>
                ";
        // line 151
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "confirmedAt", [], "any", false, false, false, 151)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 152
            yield "                    <p><strong>Date confirmation :</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "confirmedAt", [], "any", false, false, false, 152), "d/m/Y H:i"), "html", null, true);
            yield "</p>
                ";
        }
        // line 154
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "receivedAt", [], "any", false, false, false, 154)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 155
            yield "                    <p><strong>Date réception :</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "receivedAt", [], "any", false, false, false, 155), "d/m/Y H:i"), "html", null, true);
            yield "</p>
                ";
        }
        // line 157
        yield "                <p><strong>Statut :</strong> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "statusLabel", [], "any", false, false, false, 157), "html", null, true);
        yield "</p>
            </div>
            <div class=\"info-block\">
                <h3>Fournisseur</h3>
                ";
        // line 161
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "supplier", [], "any", false, false, false, 161)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 162
            yield "                    <p><strong>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "supplier", [], "any", false, false, false, 162), "name", [], "any", false, false, false, 162), "html", null, true);
            yield "</strong></p>
                    <p>";
            // line 163
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "supplier", [], "any", false, false, false, 163), "contactPerson", [], "any", false, false, false, 163), "html", null, true);
            yield "</p>
                    <p>Tél : ";
            // line 164
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "supplier", [], "any", false, false, false, 164), "phone", [], "any", false, false, false, 164), "html", null, true);
            yield "</p>
                    <p>Email : ";
            // line 165
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "supplier", [], "any", false, false, false, 165), "email", [], "any", false, false, false, 165), "html", null, true);
            yield "</p>
                    <p>Adresse : ";
            // line 166
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "supplier", [], "any", false, false, false, 166), "adress", [], "any", false, false, false, 166), "html", null, true);
            yield "</p>
                ";
        } else {
            // line 168
            yield "                    <p>Non renseigné</p>
                ";
        }
        // line 170
        yield "            </div>
        </div>

        <!-- Tableau des produits -->
        <table>
            <thead>
                <tr>
                    <th>Produit</th>
                    <th>Code-barres</th>
                    <th>Quantité</th>
                    <th>Prix unitaire (FCFA)</th>
                    <th>Total (FCFA)</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 185
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "purchaseItems", [], "any", false, false, false, 185));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 186
            yield "                <tr>
                    <td>";
            // line 187
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 187), "name", [], "any", false, false, false, 187), "html", null, true);
            yield "</td>
                    <td>";
            // line 188
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 188), "barcode", [], "any", false, false, false, 188), "html", null, true);
            yield "</td>
                    <td class=\"text-right\">";
            // line 189
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 189), "html", null, true);
            yield "</td>
                    <td class=\"text-right\">";
            // line 190
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "unitPrice", [], "any", false, false, false, 190), 0, ",", " "), "html", null, true);
            yield "</td>
                    <td class=\"text-right\">";
            // line 191
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "totalPrice", [], "any", false, false, false, 191), 0, ",", " "), "html", null, true);
            yield "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 194
        yield "                <tr class=\"total-row\">
                    <td colspan=\"4\" class=\"text-right\"><strong>Total TTC</strong></td>
                    <td class=\"text-right\"><strong>";
        // line 196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "totalAmount", [], "any", false, false, false, 196), 0, ",", " "), "html", null, true);
        yield " FCFA</strong></td>
                </tr>
            </tbody>
        </table>

        <!-- Notes -->
        ";
        // line 202
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "notes", [], "any", false, false, false, 202)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 203
            yield "        <div class=\"notes\">
            <strong>Notes :</strong>
            <p>";
            // line 205
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "notes", [], "any", false, false, false, 205), "html", null, true));
            yield "</p>
        </div>
        ";
        }
        // line 208
        yield "
        <!-- Pied de page (signature) -->
        <div class=\"signature\">
            <div>
                <div class=\"signature-line\">Cachet et signature du fournisseur</div>
            </div>
            <div>
                <div class=\"signature-line\">Cachet et signature du client</div>
            </div>
        </div>

        <div class=\"footer\">
            ";
        // line 220
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "hmaService", [], "any", false, false, false, 220), "companyName", [], "any", false, false, false, 220), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "hmaService", [], "any", false, true, false, 220), "address", [], "any", true, true, false, 220)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "hmaService", [], "any", false, false, false, 220), "address", [], "any", false, false, false, 220), "")) : ("")), "html", null, true);
        yield "<br>
            Document généré le ";
        // line 221
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y H:i"), "html", null, true);
        yield "
        </div>
    </div>
    <div class=\"no-print\" style=\"text-align: center; margin-top: 2rem;\">
        <button onclick=\"window.print();\" style=\"padding: 8px 16px;\">Imprimer</button>
        <button onclick=\"window.close();\" style=\"padding: 8px 16px;\">Fermer</button>
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
        return "purchase/print.html.twig";
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
        return array (  362 => 221,  356 => 220,  342 => 208,  336 => 205,  332 => 203,  330 => 202,  321 => 196,  317 => 194,  308 => 191,  304 => 190,  300 => 189,  296 => 188,  292 => 187,  289 => 186,  285 => 185,  268 => 170,  264 => 168,  259 => 166,  255 => 165,  251 => 164,  247 => 163,  242 => 162,  240 => 161,  232 => 157,  226 => 155,  223 => 154,  217 => 152,  215 => 151,  211 => 150,  207 => 149,  198 => 142,  194 => 140,  190 => 138,  188 => 137,  185 => 136,  183 => 135,  178 => 133,  48 => 6,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "purchase/print.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\purchase\\print.html.twig");
    }
}
