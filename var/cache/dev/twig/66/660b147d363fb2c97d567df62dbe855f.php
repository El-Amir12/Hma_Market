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
class __TwigTemplate_568bd2a55b31c191f428396ae1084ce3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "purchase/print.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "purchase/print.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Commande ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 6, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 6), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 133, $this->source); })()), "hmaService", [], "any", false, false, false, 133), "companyName", [], "any", false, false, false, 133), "html", null, true);
        yield "</div>
            <div class=\"document-title\">
                ";
        // line 135
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 135, $this->source); })()), "status", [], "any", false, false, false, 135) == "confirmed")) {
            // line 136
            yield "                    Bon de commande
                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 137
(isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 137, $this->source); })()), "status", [], "any", false, false, false, 137) == "received")) {
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 149, $this->source); })()), "purchaseNumber", [], "any", false, false, false, 149), "html", null, true);
        yield "</p>
                <p><strong>Date de création :</strong> ";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 150, $this->source); })()), "createdAt", [], "any", false, false, false, 150), "d/m/Y H:i"), "html", null, true);
        yield "</p>
                ";
        // line 151
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 151, $this->source); })()), "confirmedAt", [], "any", false, false, false, 151)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 152
            yield "                    <p><strong>Date confirmation :</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 152, $this->source); })()), "confirmedAt", [], "any", false, false, false, 152), "d/m/Y H:i"), "html", null, true);
            yield "</p>
                ";
        }
        // line 154
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 154, $this->source); })()), "receivedAt", [], "any", false, false, false, 154)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 155
            yield "                    <p><strong>Date réception :</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 155, $this->source); })()), "receivedAt", [], "any", false, false, false, 155), "d/m/Y H:i"), "html", null, true);
            yield "</p>
                ";
        }
        // line 157
        yield "                <p><strong>Statut :</strong> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 157, $this->source); })()), "statusLabel", [], "any", false, false, false, 157), "html", null, true);
        yield "</p>
            </div>
            <div class=\"info-block\">
                <h3>Fournisseur</h3>
                ";
        // line 161
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 161, $this->source); })()), "supplier", [], "any", false, false, false, 161)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 162
            yield "                    <p><strong>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 162, $this->source); })()), "supplier", [], "any", false, false, false, 162), "name", [], "any", false, false, false, 162), "html", null, true);
            yield "</strong></p>
                    <p>";
            // line 163
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 163, $this->source); })()), "supplier", [], "any", false, false, false, 163), "contactPerson", [], "any", false, false, false, 163), "html", null, true);
            yield "</p>
                    <p>Tél : ";
            // line 164
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 164, $this->source); })()), "supplier", [], "any", false, false, false, 164), "phone", [], "any", false, false, false, 164), "html", null, true);
            yield "</p>
                    <p>Email : ";
            // line 165
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 165, $this->source); })()), "supplier", [], "any", false, false, false, 165), "email", [], "any", false, false, false, 165), "html", null, true);
            yield "</p>
                    <p>Adresse : ";
            // line 166
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 166, $this->source); })()), "supplier", [], "any", false, false, false, 166), "adress", [], "any", false, false, false, 166), "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 185, $this->source); })()), "purchaseItems", [], "any", false, false, false, 185));
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 196, $this->source); })()), "totalAmount", [], "any", false, false, false, 196), 0, ",", " "), "html", null, true);
        yield " FCFA</strong></td>
                </tr>
            </tbody>
        </table>

        <!-- Notes -->
        ";
        // line 202
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 202, $this->source); })()), "notes", [], "any", false, false, false, 202)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 203
            yield "        <div class=\"notes\">
            <strong>Notes :</strong>
            <p>";
            // line 205
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 205, $this->source); })()), "notes", [], "any", false, false, false, 205), "html", null, true));
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 220, $this->source); })()), "hmaService", [], "any", false, false, false, 220), "companyName", [], "any", false, false, false, 220), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "hmaService", [], "any", false, true, false, 220), "address", [], "any", true, true, false, 220)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 220, $this->source); })()), "hmaService", [], "any", false, false, false, 220), "address", [], "any", false, false, false, 220), "")) : ("")), "html", null, true);
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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  368 => 221,  362 => 220,  348 => 208,  342 => 205,  338 => 203,  336 => 202,  327 => 196,  323 => 194,  314 => 191,  310 => 190,  306 => 189,  302 => 188,  298 => 187,  295 => 186,  291 => 185,  274 => 170,  270 => 168,  265 => 166,  261 => 165,  257 => 164,  253 => 163,  248 => 162,  246 => 161,  238 => 157,  232 => 155,  229 => 154,  223 => 152,  221 => 151,  217 => 150,  213 => 149,  204 => 142,  200 => 140,  196 => 138,  194 => 137,  191 => 136,  189 => 135,  184 => 133,  54 => 6,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/purchase/print.html.twig #}
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Commande {{ purchase.purchaseNumber }}</title>
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
            <div class=\"company-name\">{{ purchase.hmaService.companyName }}</div>
            <div class=\"document-title\">
                {% if purchase.status == 'confirmed' %}
                    Bon de commande
                {% elseif purchase.status == 'received' %}
                    Reçu d'achat
                {% else %}
                    Commande
                {% endif %}
            </div>
        </div>

        <!-- Informations -->
        <div class=\"info-section\">
            <div class=\"info-block\">
                <h3>Informations commande</h3>
                <p><strong>N° commande :</strong> {{ purchase.purchaseNumber }}</p>
                <p><strong>Date de création :</strong> {{ purchase.createdAt|date('d/m/Y H:i') }}</p>
                {% if purchase.confirmedAt %}
                    <p><strong>Date confirmation :</strong> {{ purchase.confirmedAt|date('d/m/Y H:i') }}</p>
                {% endif %}
                {% if purchase.receivedAt %}
                    <p><strong>Date réception :</strong> {{ purchase.receivedAt|date('d/m/Y H:i') }}</p>
                {% endif %}
                <p><strong>Statut :</strong> {{ purchase.statusLabel }}</p>
            </div>
            <div class=\"info-block\">
                <h3>Fournisseur</h3>
                {% if purchase.supplier %}
                    <p><strong>{{ purchase.supplier.name }}</strong></p>
                    <p>{{ purchase.supplier.contactPerson }}</p>
                    <p>Tél : {{ purchase.supplier.phone }}</p>
                    <p>Email : {{ purchase.supplier.email }}</p>
                    <p>Adresse : {{ purchase.supplier.adress }}</p>
                {% else %}
                    <p>Non renseigné</p>
                {% endif %}
            </div>
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
                {% for item in purchase.purchaseItems %}
                <tr>
                    <td>{{ item.product.name }}</td>
                    <td>{{ item.product.barcode }}</td>
                    <td class=\"text-right\">{{ item.quantity }}</td>
                    <td class=\"text-right\">{{ item.unitPrice|number_format(0, ',', ' ') }}</td>
                    <td class=\"text-right\">{{ item.totalPrice|number_format(0, ',', ' ') }}</td>
                </tr>
                {% endfor %}
                <tr class=\"total-row\">
                    <td colspan=\"4\" class=\"text-right\"><strong>Total TTC</strong></td>
                    <td class=\"text-right\"><strong>{{ purchase.totalAmount|number_format(0, ',', ' ') }} FCFA</strong></td>
                </tr>
            </tbody>
        </table>

        <!-- Notes -->
        {% if purchase.notes %}
        <div class=\"notes\">
            <strong>Notes :</strong>
            <p>{{ purchase.notes|nl2br }}</p>
        </div>
        {% endif %}

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
            {{ purchase.hmaService.companyName }} - {{ purchase.hmaService.address|default('') }}<br>
            Document généré le {{ 'now'|date('d/m/Y H:i') }}
        </div>
    </div>
    <div class=\"no-print\" style=\"text-align: center; margin-top: 2rem;\">
        <button onclick=\"window.print();\" style=\"padding: 8px 16px;\">Imprimer</button>
        <button onclick=\"window.close();\" style=\"padding: 8px 16px;\">Fermer</button>
    </div>
</body>
</html>", "purchase/print.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\purchase\\print.html.twig");
    }
}
